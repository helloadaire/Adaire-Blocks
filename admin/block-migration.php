<?php
/**
 * Block Migration Tool
 * Batch-update all posts to re-save blocks with current save.js structure
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add migration submenu to Adaire Blocks admin menu
 */
function adaire_blocks_add_migration_menu() {
    add_submenu_page(
        'adaire-blocks-settings',  // Parent slug (Adaire Blocks menu)
        'Block Migration',          // Page title
        'Migration',                // Menu title (shorter for submenu)
        'manage_options',
        'adaire-blocks-migration',
        'adaire_blocks_migration_page'
    );
}
add_action('admin_menu', 'adaire_blocks_add_migration_menu');

/**
 * Migration page HTML
 */
function adaire_blocks_migration_page() {
    if (!current_user_can('manage_options')) {
        wp_die('Unauthorized access');
    }
    ?>
    <div class="wrap">
        <h1>Adaire Blocks Migration Tool</h1>
        
        <div class="card" style="max-width: 800px; margin-top: 20px;">
            <h2>Update All Blocks</h2>
            <p>
                This tool will find all posts and pages that contain Adaire Blocks and re-save them 
                with the current block structure. This is useful when you've made changes to block 
                code that cause validation errors.
            </p>
            
            <p><strong>What this does:</strong></p>
            <ul>
                <li>✅ Finds all posts/pages with Adaire Blocks</li>
                <li>✅ Re-saves each post to update block HTML</li>
                <li>✅ Fixes validation errors automatically</li>
                <li>✅ Preserves all block settings and content</li>
            </ul>
            
            <p><strong>⚠️ Important:</strong></p>
            <ul>
                <li>This may take a few minutes depending on how many posts you have</li>
                <li>It's recommended to backup your database first</li>
                <li>Do not close this page while migration is running</li>
            </ul>
            
            <div id="migration-status" style="margin: 20px 0; padding: 15px; background: #f0f0f1; border-radius: 4px; display: none;">
                <div id="migration-progress">
                    <p><strong>Status:</strong> <span id="status-text">Preparing...</span></p>
                    <p><strong>Progress:</strong> <span id="progress-text">0/0</span></p>
                    <div style="background: #fff; border-radius: 4px; height: 30px; margin: 10px 0; overflow: hidden;">
                        <div id="progress-bar" style="background: #2271b1; height: 100%; width: 0%; transition: width 0.3s;"></div>
                    </div>
                    <div id="migration-log" style="max-height: 300px; overflow-y: auto; background: #fff; padding: 10px; margin-top: 10px; border-radius: 4px; font-family: monospace; font-size: 12px;"></div>
                </div>
                <div id="migration-complete" style="display: none;">
                    <p style="color: #00a32a; font-weight: bold;">✅ Migration completed successfully!</p>
                    <p id="completion-summary"></p>
                </div>
            </div>
            
            <p>
                <button id="start-migration" class="button button-primary button-large" onclick="startMigration()">
                    Start Migration
                </button>
                <button id="cancel-migration" class="button button-large" onclick="cancelMigration()" style="display: none;">
                    Cancel
                </button>
            </p>
        </div>
    </div>

    <script>
    let migrationCancelled = false;
    let totalPosts = 0;
    let processedPosts = 0;
    let hiddenIframe = null;

    function startMigration() {
        if (!confirm('Are you sure you want to start the migration? This will update all posts with Adaire Blocks.')) {
            return;
        }

        migrationCancelled = false;
        document.getElementById('start-migration').style.display = 'none';
        document.getElementById('cancel-migration').style.display = 'inline-block';
        document.getElementById('migration-status').style.display = 'block';
        document.getElementById('migration-progress').style.display = 'block';
        document.getElementById('migration-complete').style.display = 'none';
        
        addLog('Starting migration...');
        
        // Create hidden iframe for loading editor contexts
        if (!hiddenIframe) {
            hiddenIframe = document.createElement('iframe');
            hiddenIframe.style.display = 'none';
            document.body.appendChild(hiddenIframe);
        }
        
        // Get posts to migrate
        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=adaire_get_posts_to_migrate&nonce=<?php echo wp_create_nonce('adaire_migration'); ?>'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                totalPosts = data.data.posts.length;
                addLog(`Found ${totalPosts} posts to migrate`);
                
                if (totalPosts === 0) {
                    completeMigration(0);
                    return;
                }
                
                // Start processing posts
                processPosts(data.data.posts, 0);
            } else {
                addLog('Error: ' + data.data.message, 'error');
                resetButtons();
            }
        })
        .catch(error => {
            addLog('Error: ' + error.message, 'error');
            resetButtons();
        });
    }

    function processPosts(posts, index) {
        if (migrationCancelled || index >= posts.length) {
            if (!migrationCancelled) {
                completeMigration(processedPosts);
            }
            // Clean up iframe
            if (hiddenIframe && hiddenIframe.parentNode) {
                hiddenIframe.parentNode.removeChild(hiddenIframe);
                hiddenIframe = null;
            }
            return;
        }

        const post = posts[index];
        updateProgress(index + 1, totalPosts, `Migrating: ${post.title}`);
        addLog(`Processing: ${post.title} (ID: ${post.id})...`);

        // Load the post in editor context and trigger auto-recovery
        const editorUrl = '<?php echo admin_url('post.php'); ?>?post=' + post.id + '&action=edit&adaire_auto_migrate=1';
        
        // Set up message listener for iframe
        const messageHandler = function(event) {
            if (event.data && event.data.type === 'adaire_migration_complete') {
                window.removeEventListener('message', messageHandler);
                
                if (event.data.success) {
                    processedPosts++;
                    addLog(`✅ Migrated: ${post.title} (ID: ${post.id}) - ${event.data.blocksRecovered} blocks recovered`);
                } else {
                    addLog(`❌ Failed: ${post.title} - ${event.data.error || 'Unknown error'}`, 'error');
                }
                
                // Process next post after a brief delay
                setTimeout(() => processPosts(posts, index + 1), 500);
            }
        };
        
        window.addEventListener('message', messageHandler);
        
        // Load the editor in hidden iframe
        hiddenIframe.src = editorUrl;
        
        // Timeout fallback in case iframe doesn't respond
        setTimeout(() => {
            window.removeEventListener('message', messageHandler);
            addLog(`⚠️ Timeout: ${post.title} - Moving to next post`, 'error');
            setTimeout(() => processPosts(posts, index + 1), 100);
        }, 10000); // 10 second timeout
    }

    function updateProgress(current, total, status) {
        const percentage = (current / total) * 100;
        document.getElementById('status-text').textContent = status;
        document.getElementById('progress-text').textContent = `${current}/${total}`;
        document.getElementById('progress-bar').style.width = percentage + '%';
    }

    function addLog(message, type = 'info') {
        const log = document.getElementById('migration-log');
        const entry = document.createElement('div');
        entry.textContent = `[${new Date().toLocaleTimeString()}] ${message}`;
        if (type === 'error') {
            entry.style.color = '#d63638';
        }
        log.appendChild(entry);
        log.scrollTop = log.scrollHeight;
    }

    function completeMigration(count) {
        document.getElementById('migration-progress').style.display = 'none';
        document.getElementById('migration-complete').style.display = 'block';
        document.getElementById('completion-summary').textContent = `Successfully migrated ${count} out of ${totalPosts} posts.`;
        resetButtons();
    }

    function cancelMigration() {
        if (confirm('Are you sure you want to cancel the migration?')) {
            migrationCancelled = true;
            addLog('Migration cancelled by user', 'error');
            resetButtons();
        }
    }

    function resetButtons() {
        document.getElementById('start-migration').style.display = 'inline-block';
        document.getElementById('cancel-migration').style.display = 'none';
    }
    </script>

    <style>
    #migration-log > div {
        padding: 4px 0;
        border-bottom: 1px solid #f0f0f1;
    }
    </style>
    <?php
}

/**
 * AJAX: Get posts that need migration
 */
function adaire_get_posts_to_migrate() {
    check_ajax_referer('adaire_migration', 'nonce');

    if (!current_user_can('manage_options')) {
        wp_send_json_error(['message' => 'Unauthorized']);
    }

    // Get all posts and pages that might contain blocks
    $args = [
        'post_type' => ['post', 'page'],
        'post_status' => ['publish', 'draft', 'pending', 'private'],
        'posts_per_page' => -1,
        'fields' => 'ids',
    ];

    $all_posts = get_posts($args);
    $posts_to_migrate = [];

    // Filter posts that contain Adaire Blocks
    foreach ($all_posts as $post_id) {
        $content = get_post_field('post_content', $post_id);
        
        // Check if post contains any Adaire Blocks
        if (has_blocks($content)) {
            $blocks = parse_blocks($content);
            if (adaire_has_adaire_blocks($blocks)) {
                $post = get_post($post_id);
                $posts_to_migrate[] = [
                    'id' => $post_id,
                    'title' => $post->post_title,
                ];
            }
        }
    }

    wp_send_json_success(['posts' => $posts_to_migrate]);
}
add_action('wp_ajax_adaire_get_posts_to_migrate', 'adaire_get_posts_to_migrate');

/**
 * Check if blocks array contains any Adaire Blocks
 */
function adaire_has_adaire_blocks($blocks) {
    foreach ($blocks as $block) {
        // Check if it's an Adaire Block (starts with 'create-block/')
        if (isset($block['blockName']) && strpos($block['blockName'], 'create-block/') === 0) {
            return true;
        }
        
        // Check inner blocks recursively
        if (!empty($block['innerBlocks'])) {
            if (adaire_has_adaire_blocks($block['innerBlocks'])) {
                return true;
            }
        }
    }
    
    return false;
}

// Note: Migration now happens via JavaScript in hidden iframes
// Each post is loaded in the editor context where auto-recovery runs
// This ensures blocks are actually recovered using the current save.js


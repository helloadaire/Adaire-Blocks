<?php
/**
 * Plugin Name:       Adaire Blocks
 * Description:       A powerful WordPress plugin that helps developers and designers create visually stunning, high-performance websites with ease right inside the Gutenberg editor.
 * Version:           1.1.4
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            <a href="https://adaire.digital" target="_blank">Adaire Digital</a>
 * License:           GPL-3.0
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       adaire-blocks
 *
 * @package AdaireBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// =========================
// Plugin Update Checker
// =========================
require_once __DIR__ . '/plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://raw.githubusercontent.com/helloadaire/Adaire-Blocks-Update-JSON/main/update-info.json',
    __FILE__,
    'adaire-blocks'
);



// =========================
// Version Rollback
// =========================

// Clear version cache when plugin is updated
add_action('upgrader_process_complete', function($upgrader, $hook_extra) {
    if (isset($hook_extra['plugin']) && $hook_extra['plugin'] === plugin_basename(__FILE__)) {
        delete_transient('adaire-blocks_latest_version');
        error_log('[Adaire Blocks Rollback] Plugin updated - cleared version cache');
    }
}, 10, 2);

// Also clear cache when plugin is activated (in case version changed)
add_action('activated_plugin', function($plugin) {
    if ($plugin === plugin_basename(__FILE__)) {
        delete_transient('adaire-blocks_latest_version');
        error_log('[Adaire Blocks Rollback] Plugin activated - cleared version cache');
    }
});

// Add rollback link in plugin row (only if current version is the latest)
add_filter('plugin_action_links_' . plugin_basename(__FILE__), function ($links) {
    // Get current version dynamically from plugin header
    $plugin_data = get_plugin_data(__FILE__);
    $current_version = $plugin_data['Version'];
    $is_latest_version = true;
    
    // Log the current version
    error_log('[Adaire Blocks Rollback] Current version: ' . $current_version);
    
    // Check if there's a newer version available by directly checking the JSON file
    // Cache the result for 1 hour to avoid checking too frequently
    $cache_key = 'adaire-blocks_latest_version';
    $cached_version = get_transient($cache_key);
    
    // Force refresh cache if we're on a newer version than what's cached
    if ($cached_version !== false && $cached_version !== 'error') {
        if (version_compare($current_version, $cached_version, '>')) {
            error_log('[Adaire Blocks Rollback] Current version is newer than cached version - clearing cache');
            delete_transient($cache_key);
            $cached_version = false;
        }
    }
    
    if ($cached_version === false) {
        // Cache expired or doesn't exist, fetch from JSON
        $json_url = 'https://raw.githubusercontent.com/helloadaire/Adaire-Blocks-Update-JSON/main/update-info.json';
        $response = wp_remote_get($json_url, array('timeout' => 5));
        
        if (!is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200) {
            $json_data = json_decode(wp_remote_retrieve_body($response), true);
            if ($json_data && isset($json_data['version'])) {
                $latest_version = $json_data['version'];
                error_log('[Adaire Blocks Rollback] Latest available version from JSON: ' . $latest_version);
                
                // Cache the result for 1 hour
                set_transient($cache_key, $latest_version, HOUR_IN_SECONDS);
                
                if (version_compare($current_version, $latest_version, '<')) {
                    $is_latest_version = false;
                    error_log('[Adaire Blocks Rollback] Hiding rollback link - newer version available: ' . $latest_version);
                }
            } else {
                error_log('[Adaire Blocks Rollback] Invalid JSON data received');
                set_transient($cache_key, 'error', HOUR_IN_SECONDS);
            }
        } else {
            error_log('[Adaire Blocks Rollback] Failed to fetch JSON: ' . (is_wp_error($response) ? $response->get_error_message() : 'HTTP ' . wp_remote_retrieve_response_code($response)));
            set_transient($cache_key, 'error', HOUR_IN_SECONDS);
        }
    } else {
        // Use cached version
        if ($cached_version !== 'error') {
            error_log('[Adaire Blocks Rollback] Using cached latest version: ' . $cached_version);
            if (version_compare($current_version, $cached_version, '<')) {
                $is_latest_version = false;
                error_log('[Adaire Blocks Rollback] Hiding rollback link - newer version available: ' . $cached_version);
            }
        } else {
            error_log('[Adaire Blocks Rollback] Using cached error state - showing rollback link');
        }
    }
    
    // Only show rollback link if current version is the latest
    if ($is_latest_version) {
        error_log('[Adaire Blocks Rollback] Showing rollback link - current version is latest');
        $links[] = '<a href="' . esc_url(admin_url('admin-post.php?action=my_plugin_rollback&_wpnonce=' . wp_create_nonce('my_plugin_rollback'))) . '" class="my-plugin-rollback-btn">Rollback</a>';
    }
    
    return $links;
});

// Handle rollback request
add_action('admin_post_my_plugin_rollback', function () {
    if (!current_user_can('update_plugins')) {
        wp_die('Unauthorized');
    }

    if (!isset($_GET['_wpnonce']) || !wp_verify_nonce($_GET['_wpnonce'], 'my_plugin_rollback')) {
        error_log('[Adaire Blocks Rollback] Nonce verification failed');
        wp_die('Security check failed.');
    }

    // URL to the previous version ZIP
    $previous_version_zip = 'https://github.com/helloadaire/Adaire-Blocks/releases/download/v1.1.3.alpha/adaire-blocks.1.1.3.premium.zip';
    error_log('[Adaire Blocks Rollback] Attempting rollback to: ' . $previous_version_zip);

    require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    require_once ABSPATH . 'wp-admin/includes/plugin.php';
    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/misc.php';

    $plugin_slug = plugin_basename(__FILE__);

    // Deactivate current plugin
    deactivate_plugins($plugin_slug);
    error_log('[Adaire Blocks Rollback] Plugin deactivated.');

    // Delete current plugin folder
    $plugin_dir = plugin_dir_path(__FILE__);
    if (WP_Filesystem()) {
        global $wp_filesystem;
        if ($wp_filesystem->delete($plugin_dir, true, true)) {
            error_log('[Adaire Blocks Rollback] Plugin folder deleted successfully.');
        } else {
            error_log('[Adaire Blocks Rollback] Failed to delete plugin folder.');
            wp_die('Failed to delete current plugin folder. Check debug.log.');
        }
    }

    // Install previous version using Automatic_Upgrader_Skin (shows standard WP install page)
    $upgrader = new Plugin_Upgrader(new Automatic_Upgrader_Skin());
    $result = $upgrader->install($previous_version_zip);

    if ($result && !is_wp_error($result)) {
        activate_plugin($plugin_slug);
        error_log('[Adaire Blocks Rollback] Rollback successful and plugin activated.');
        wp_safe_redirect(admin_url('plugins.php?rollback=success'));
    } else {
        error_log('[Adaire Blocks Rollback] Rollback failed: ' . print_r($result, true));
        wp_safe_redirect(admin_url('plugins.php?rollback=failed'));
    }

    exit;
});

// Show admin notice
add_action('admin_notices', function () {
    if (!isset($_GET['rollback'])) return;
    if ($_GET['rollback'] === 'success') {
        echo '<div class="notice notice-success is-dismissible"><p>Plugin rolled back successfully and activated.</p></div>';
    } elseif ($_GET['rollback'] === 'failed') {
        echo '<div class="notice notice-error is-dismissible"><p>Rollback failed. Check debug.log for details.</p></div>';
    }
});




// End of version rollback code

// Define plugin constants
define('ADAIRE_BLOCKS_VERSION', '1.1.4');
define('ADAIRE_BLOCKS_PLUGIN_URL', plugin_dir_url(__FILE__));
define('ADAIRE_BLOCKS_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Define premium version flag (free version will override this)
if (!defined('ADAIRE_BLOCKS_IS_FREE')) {
    define('ADAIRE_BLOCKS_IS_FREE', false);
}

// Include configuration manager
require_once ADAIRE_BLOCKS_PLUGIN_PATH . 'includes/class-adaire-blocks-config.php';

// Include validation server configuration
require_once ADAIRE_BLOCKS_PLUGIN_PATH . 'includes/class-adaire-blocks-validation-config.php';

// Include license manager
require_once ADAIRE_BLOCKS_PLUGIN_PATH . 'includes/class-adaire-blocks-license.php';

// Include settings page
require_once ADAIRE_BLOCKS_PLUGIN_PATH . 'admin/settings-page.php';

// Include license page
require_once ADAIRE_BLOCKS_PLUGIN_PATH . 'admin/license-page.php';

/**
 * Check if premium features are available
 */
function adaire_blocks_is_premium_available() {
	$license_manager = AdaireBlocksLicense::get_instance();
	return $license_manager->is_license_active();
}

/**
 * Show license activation notice
 */
function adaire_blocks_license_notice() {
	$license_manager = AdaireBlocksLicense::get_instance();
	$license_status = $license_manager->get_license_status();
	
	// Only show notice if we're on admin pages and license is not active
	if (!is_admin() || $license_status['status'] === 'active') {
		return;
	}
	
	$license_page_url = admin_url('admin.php?page=adaire-blocks-license');
	?>
	<div class="notice notice-warning is-dismissible">
		<p>
			<strong>Adaire Blocks:</strong> 
			Your license is not active. 
			<a href="<?php echo esc_url($license_page_url); ?>">Activate your license</a> 
			to unlock all features and receive updates.
		</p>
	</div>
	<?php
}

/**
 * Show license error notice for specific errors
 */
function adaire_blocks_license_error_notice($message) {
	if (!is_admin()) {
		return;
	}
	
	$license_page_url = admin_url('admin.php?page=adaire-blocks-license');
	?>
	<div class="notice notice-error is-dismissible">
		<p>
			<strong>Adaire Blocks License Error:</strong> 
			<?php echo esc_html($message); ?>
			<a href="<?php echo esc_url($license_page_url); ?>">Check your license</a>
		</p>
	</div>
	<?php
}

/**
 * Helper function to render blocks with upgrade notices
 * Use this in your render callbacks to automatically handle free/premium differences
 */
function adaire_render_block_with_notice($block_name, $attributes, $render_callback) {
    $config = AdaireBlocksConfig::get_instance();
    $license_manager = AdaireBlocksLicense::get_instance();
    
    // Check license status first
    if (!$license_manager->is_license_active()) {
        // Show license activation notice for premium blocks
        $premium_blocks = array(
            'video-hero-block',
            'portfolio-block', 
            'particles-block',
            'services-block',
            'posts-grid-block',
            'project-block',
            'scroll-text-block',
            'questions-block'
        );
        
        if (in_array($block_name, $premium_blocks)) {
            return adaire_render_license_notice($block_name);
        }
    }
    
    
    // Check if we should show upgrade notice instead of rendering
    if ($config->should_show_upgrade_notice($block_name, $attributes)) {
        return $config->render_upgrade_notice($block_name);
    }
    
    // Render the block normally
    return call_user_func($render_callback, $attributes);
}

/**
 * Render license activation notice for premium blocks
 */
function adaire_render_license_notice($block_name) {
    $license_page_url = admin_url('admin.php?page=adaire-blocks-license');
    $block_title = ucwords(str_replace('-', ' ', $block_name));
    
    ob_start();
    ?>
    <div class="adaire-license-notice" style="
        background: #fff3cd;
        border: 1px solid #ffeaa7;
        border-radius: 4px;
        padding: 20px;
        margin: 20px 0;
        text-align: center;
    ">
        <h3 style="margin: 0 0 10px 0; color: #856404;">
            <span class="dashicons dashicons-lock" style="margin-right: 8px;"></span>
            Premium Feature
        </h3>
        <p style="margin: 0 0 15px 0; color: #856404;">
            The <strong><?php echo esc_html($block_title); ?></strong> is a premium feature. 
            Activate your license to unlock this block and many more premium features.
        </p>
        <a href="<?php echo esc_url($license_page_url); ?>" 
           class="button button-primary" 
           style="text-decoration: none;">
            Activate License
        </a>
    </div>
    <?php
    return ob_get_clean();
}

// Include block migration tool
require_once ADAIRE_BLOCKS_PLUGIN_PATH . 'admin/block-migration.php';

// Diagnostics tool removed

/**
 * Render callback for counter-block (Dynamic Block)
 * This PHP function outputs the HTML - JavaScript logic in view.js
 */
function render_counter_block($attributes) {
    // Use the helper function to automatically handle upgrade notices
    return adaire_render_block_with_notice('counter-block', $attributes, function($attrs) {
        // Debug: Check if function is called
        error_log('Counter Block Render Called with attributes: ' . print_r($attrs, true));
    
        $block_id = $attrs['blockId'] ?? '';
        $container_mode = $attrs['containerMode'] ?? 'full';
        $container_max_width = $attrs['containerMaxWidth'] ?? array();
        $margin_top = $attrs['marginTop'] ?? array();
        $margin_right = $attrs['marginRight'] ?? array();
        $margin_bottom = $attrs['marginBottom'] ?? array();
        $margin_left = $attrs['marginLeft'] ?? array();
        $padding_top = $attrs['paddingTop'] ?? array();
        $padding_right = $attrs['paddingRight'] ?? array();
        $padding_bottom = $attrs['paddingBottom'] ?? array();
        $padding_left = $attrs['paddingLeft'] ?? array();
        $starting_number = $attrs['startingNumber'] ?? 100;
        $ending_number = $attrs['endingNumber'] ?? 200;
        $duration = $attrs['duration'] ?? 3000;
        $delay_bool = $attrs['delayBool'] ?? false;
        $delay_time = $attrs['delayTime'] ?? 500;
        $font_size = $attrs['fontSize'] ?? 48;
        $font_weight = $attrs['fontWeight'] ?? '700';
        $color = $attrs['color'] ?? '#1a1a1a';
        $letter_spacing = $attrs['letterSpacing'] ?? 0;
        $prefix = $attrs['prefix'] ?? '';
        $suffix = $attrs['suffix'] ?? '';
        $counter_direction = $attrs['counterDirection'] ?? 'up';
        $caption = $attrs['caption'] ?? '';
        $caption_position = $attrs['captionPosition'] ?? 'bottom';
        $caption_font_size = $attrs['captionFontSize'] ?? 16;
        $caption_color = $attrs['captionColor'] ?? '#666666';
    
    // Build CSS variables
    $desktop_max_width = ($container_max_width['desktop']['value'] ?? 1200) . ($container_max_width['desktop']['unit'] ?? 'px');
    $tablet_max_width = ($container_max_width['tablet']['value'] ?? 100) . ($container_max_width['tablet']['unit'] ?? '%');
    $mobile_max_width = ($container_max_width['mobile']['value'] ?? 100) . ($container_max_width['mobile']['unit'] ?? '%');
    
    $styles = array(
        '--container-max-width' => $desktop_max_width,
        '--container-max-width-tablet' => $tablet_max_width,
        '--container-max-width-mobile' => $mobile_max_width,
        'margin-top' => ($margin_top['desktop'] ?? 0) . 'px',
        'margin-right' => ($margin_right['desktop'] ?? 0) . 'px',
        'margin-bottom' => ($margin_bottom['desktop'] ?? 0) . 'px',
        'margin-left' => ($margin_left['desktop'] ?? 0) . 'px',
        '--margin-top-tablet' => ($margin_top['tablet'] ?? 0) . 'px',
        '--margin-right-tablet' => ($margin_right['tablet'] ?? 0) . 'px',
        '--margin-bottom-tablet' => ($margin_bottom['tablet'] ?? 0) . 'px',
        '--margin-left-tablet' => ($margin_left['tablet'] ?? 0) . 'px',
        '--margin-top-mobile' => ($margin_top['mobile'] ?? 0) . 'px',
        '--margin-right-mobile' => ($margin_right['mobile'] ?? 0) . 'px',
        '--margin-bottom-mobile' => ($margin_bottom['mobile'] ?? 0) . 'px',
        '--margin-left-mobile' => ($margin_left['mobile'] ?? 0) . 'px',
        'padding-top' => ($padding_top['desktop'] ?? 0) . 'px',
        'padding-right' => ($padding_right['desktop'] ?? 0) . 'px',
        'padding-bottom' => ($padding_bottom['desktop'] ?? 0) . 'px',
        'padding-left' => ($padding_left['desktop'] ?? 0) . 'px',
        '--padding-top-tablet' => ($padding_top['tablet'] ?? 0) . 'px',
        '--padding-right-tablet' => ($padding_right['tablet'] ?? 0) . 'px',
        '--padding-bottom-tablet' => ($padding_bottom['tablet'] ?? 0) . 'px',
        '--padding-left-tablet' => ($padding_left['tablet'] ?? 0) . 'px',
        '--padding-top-mobile' => ($padding_top['mobile'] ?? 0) . 'px',
        '--padding-right-mobile' => ($padding_right['mobile'] ?? 0) . 'px',
        '--padding-bottom-mobile' => ($padding_bottom['mobile'] ?? 0) . 'px',
        '--padding-left-mobile' => ($padding_left['mobile'] ?? 0) . 'px',
    );
    
    $style_string = '';
    foreach ($styles as $prop => $value) {
        $style_string .= "$prop:$value;";
    }
    
    $container_class = $container_mode === 'constrained' ? 'is-constrained' : '';
    
    ob_start();
    ?>
    <div class="ab-counter-block counter-block" 
         style="<?php echo esc_attr($style_string); ?>"
         data-block-id="<?php echo esc_attr($block_id); ?>"
         data-starting-number="<?php echo esc_attr($starting_number); ?>"
         data-ending-number="<?php echo esc_attr($ending_number); ?>"
         data-duration="<?php echo esc_attr($duration); ?>"
         data-delay-bool="<?php echo esc_attr($delay_bool ? 'true' : 'false'); ?>"
         data-delay-time="<?php echo esc_attr($delay_time); ?>"
         data-counter-direction="<?php echo esc_attr($counter_direction); ?>"
         data-prefix="<?php echo esc_attr($prefix); ?>"
         data-suffix="<?php echo esc_attr($suffix); ?>">
        <div class="ab-counter-block__container <?php echo esc_attr($container_class); ?>">
            <?php if ($caption && $caption_position === 'top'): ?>
                <div class="ab-counter-block__caption ab-counter-block__caption--top"
                     style="font-size: <?php echo esc_attr($caption_font_size); ?>px; color: <?php echo esc_attr($caption_color); ?>; margin-bottom: 16px; text-align: center;">
                    <?php echo esc_html($caption); ?>
                </div>
            <?php endif; ?>
            
            <div class="ab-counter-block__content" style="text-align: center;">
                <span class="ab-counter-block__number"
                      style="font-size: <?php echo esc_attr($font_size); ?>px; font-weight: <?php echo esc_attr($font_weight); ?>; color: <?php echo esc_attr($color); ?>; letter-spacing: <?php echo esc_attr($letter_spacing); ?>px;">
                    <?php if ($prefix): ?><span class="ab-counter-block__prefix"><?php echo esc_html($prefix); ?></span><?php endif; ?>
                    <span class="displayNumber"><?php echo esc_html($starting_number); ?></span>
                    <?php if ($suffix): ?><span class="ab-counter-block__suffix"><?php echo esc_html($suffix); ?></span><?php endif; ?>
                </span>
            </div>
            
            <?php if ($caption && $caption_position === 'bottom'): ?>
                <div class="ab-counter-block__caption ab-counter-block__caption--bottom"
                     style="font-size: <?php echo esc_attr($caption_font_size); ?>px; color: <?php echo esc_attr($caption_color); ?>; margin-top: 16px; text-align: center;">
                    <?php echo esc_html($caption); ?>
                </div>
            <?php endif; ?>
        </div>
        </div>
        <?php
        return ob_get_clean();
    });
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */
function create_block_gsap_hero_block_block_init() {
	// Check license status first
	$license_manager = AdaireBlocksLicense::get_instance();
	$is_license_active = $license_manager->is_license_active();
	
	// If license is not active, show license notice and limit functionality
	if (!$is_license_active) {
		add_action('admin_notices', 'adaire_blocks_license_notice');
		// Still allow basic blocks to work, but with limitations
	}
	
	// Get settings instance
	$settings = AdaireBlocksSettings::get_instance();
	$block_settings = $settings->get_settings();
	
	// Get available blocks dynamically
	$available_blocks = $settings->get_available_blocks();
	$block_mapping = array();
	
	// Build mapping from available blocks
	foreach ($available_blocks as $settings_key => $block_data) {
		$block_mapping[$settings_key] = $block_data['block_name'];
	}
	
	/**
	 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
	 * based on the registered block metadata.
	 * Added in WordPress 6.8 to simplify the block metadata registration process added in WordPress 6.7.
	 *
	 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
	 */
	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		// Filter blocks based on settings before registration
		$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
		$filtered_manifest = array();
		
		foreach ( $manifest_data as $block_name => $block_data ) {
			$block_key = array_search( $block_name, $block_mapping );
			if ( $block_key !== false && isset( $block_settings[ $block_key ] ) && $block_settings[ $block_key ] ) {
				$filtered_manifest[ $block_name ] = $block_data;
			}
		}
		
		// Register enabled blocks individually
		foreach ( $block_settings as $block_key => $enabled ) {
			if ( ! $enabled ) {
				continue; // Skip disabled blocks
			}
			
			$block_name = $block_mapping[ $block_key ] ?? null;
			if ( ! $block_name ) {
				continue;
			}
			
			// Check if this is a premium block and license is not active
			$premium_blocks = array(
				'video-hero-block',
				'portfolio-block', 
				'particles-block',
				'services-block',
				'posts-grid-block',
				'project-block',
				'scroll-text-block',
				'questions-block'
			);
			
			if ( in_array( $block_name, $premium_blocks ) && ! $is_license_active ) {
				continue; // Skip premium blocks if license is not active
			}
			
			$block_path = __DIR__ . '/build/' . $block_name;
			
			// Special handling for counter-block (has render callback)
			if ( $block_name === 'counter-block' ) {
				register_block_type( $block_path, array(
					'render_callback' => 'render_counter_block'
				) );
			} else {
				// Register block normally
				register_block_type( $block_path );
			}
		}
		return;
	}

	/**
	 * Registers the block(s) metadata from the `blocks-manifest.php` file.
	 * Added to WordPress 6.7 to improve the performance of block type registration.
	 * For WordPress 6.7 and older versions
	 *
	 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
	 */
	
	// Build filtered manifest for WordPress 6.7 and older
	$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
	$filtered_manifest_fallback = array();
	$counter_block_enabled_fallback = false;
	
	foreach ( array_keys( $manifest_data ) as $block_type ) {
		$block_key = array_search( $block_type, $block_mapping );
		if ( $block_key !== false && isset( $block_settings[ $block_key ] ) && $block_settings[ $block_key ] ) {
			if ( $block_type === 'counter-block' ) {
				$counter_block_enabled_fallback = true;
			} else {
				$filtered_manifest_fallback[ $block_type ] = $manifest_data[ $block_type ];
			}
		}
	}
	
	// Register metadata collection (6.7+)
	if ( function_exists( 'wp_register_block_metadata_collection' ) && ! empty( $filtered_manifest_fallback ) ) {
		// Create temp manifest without counter-block
		$temp_manifest_path_fallback = __DIR__ . '/build/blocks-manifest-fallback.php';
		file_put_contents( $temp_manifest_path_fallback, '<?php return ' . var_export( $filtered_manifest_fallback, true ) . ';' );
		
		wp_register_block_metadata_collection( __DIR__ . '/build', $temp_manifest_path_fallback );
		
		// Clean up
		if ( file_exists( $temp_manifest_path_fallback ) ) {
			unlink( $temp_manifest_path_fallback );
		}
	}
	
	/**
	 * Registers the block type(s) in the `blocks-manifest.php` file.
	 *
	 * @see https://developer.wordpress.org/reference/functions/register_block_type/
	 */
	foreach ( array_keys( $filtered_manifest_fallback ) as $block_type ) {
		// Check if this is a premium block and license is not active
		$premium_blocks = array(
			'video-hero-block',
			'portfolio-block', 
			'particles-block',
			'services-block',
			'posts-grid-block',
			'project-block',
			'scroll-text-block',
			'questions-block'
		);
		
		if ( in_array( $block_type, $premium_blocks ) && ! $is_license_active ) {
			continue; // Skip premium blocks if license is not active
		}
		
		register_block_type( __DIR__ . "/build/{$block_type}" );
	}
	
	// Register counter-block separately with render callback (for WordPress 6.7 and older)
	if ( $counter_block_enabled_fallback ) {
		// Counter block is free, so no license check needed
		register_block_type( __DIR__ . '/build/counter-block', array(
			'render_callback' => 'render_counter_block'
		) );
	}
}
add_action( 'init', 'create_block_gsap_hero_block_block_init' );

// Filter to prevent disabled blocks from appearing in the block editor
add_filter( 'block_editor_rest_api_preload_paths', 'adaire_blocks_filter_block_editor_blocks' );
function adaire_blocks_filter_block_editor_blocks( $preload_paths ) {
	// Get settings
	$settings = AdaireBlocksSettings::get_instance();
	$block_settings = $settings->get_settings();
	$available_blocks = $settings->get_available_blocks();
	
	// Remove disabled blocks from the block editor
	foreach ( $available_blocks as $settings_key => $block_data ) {
		if ( isset( $block_settings[ $settings_key ] ) && ! $block_settings[ $settings_key ] ) {
			// Remove the block from available blocks in the editor
			wp_deregister_script( 'create-block-' . str_replace( '-', '-', $block_data['block_name'] ) );
		}
	}
	
	return $preload_paths;
}

// Filter to prevent disabled blocks from being registered
add_filter( 'register_block_type_args', 'adaire_blocks_prevent_disabled_blocks', 10, 2 );
function adaire_blocks_prevent_disabled_blocks( $args, $name ) {
	// Only filter our blocks
	if ( strpos( $name, 'create-block/' ) !== 0 ) {
		return $args;
	}
	
	// Get settings
	$settings = AdaireBlocksSettings::get_instance();
	$block_settings = $settings->get_settings();
	$available_blocks = $settings->get_available_blocks();
	
	// Find the block key for this block
	$block_name = str_replace( 'create-block/', '', $name );
	$block_key = null;
	
	foreach ( $available_blocks as $settings_key => $block_data ) {
		if ( $block_data['block_name'] === $block_name ) {
			$block_key = $settings_key;
			break;
		}
	}
	
	// If block is disabled, prevent registration by returning empty args
	if ( $block_key && isset( $block_settings[ $block_key ] ) && ! $block_settings[ $block_key ] ) {
		return array();
	}
	
	return $args;
}

// Filter to prevent disabled blocks from being available in the editor
add_action( 'enqueue_block_editor_assets', 'adaire_blocks_filter_editor_blocks' );
function adaire_blocks_filter_editor_blocks() {
	// Get settings
	$settings = AdaireBlocksSettings::get_instance();
	$block_settings = $settings->get_settings();
	$available_blocks = $settings->get_available_blocks();
	
	// Create JavaScript to remove disabled blocks from the editor
	$disabled_blocks = array();
	foreach ( $available_blocks as $settings_key => $block_data ) {
		if ( isset( $block_settings[ $settings_key ] ) && ! $block_settings[ $settings_key ] ) {
			$disabled_blocks[] = 'create-block/' . $block_data['block_name'];
		}
	}
	
	if ( ! empty( $disabled_blocks ) ) {
		wp_add_inline_script( 'wp-blocks', '
			wp.domReady( function() {
				var disabledBlocks = ' . json_encode( $disabled_blocks ) . ';
				disabledBlocks.forEach( function( blockName ) {
					if ( wp.blocks.unregisterBlockType ) {
						wp.blocks.unregisterBlockType( blockName );
					}
				});
			});
		');
	}
}

// Enqueue Locomotive Scroll assets if the locomotive-block is present on the page
function enqueue_locomotive_scroll_assets() {
    if ( is_admin() ) {
        return;
    }
    global $post;
    if ( ! $post ) {
        return;
    }
    if ( has_block( 'create-block/locomotive-block', $post ) ) {
        // Enqueue Locomotive Scroll JS and CSS from CDN or local
        wp_enqueue_script(
            'locomotive-scroll',
            'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js',
            array(),
            '4.1.4',
            true
        );
        wp_enqueue_style(
            'locomotive-scroll',
            'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css',
            array(),
            '4.1.4'
        );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_locomotive_scroll_assets' );

// Pass block data to frontend for video-hero-block
function enqueue_video_hero_block_data() {
    if ( is_admin() ) {
        return;
    }
    global $post;
    if ( ! $post ) {
        return;
    }
    if ( has_block( 'create-block/video-hero-block', $post ) ) {
        // Get all video-hero-block instances on the page
        $blocks = parse_blocks( $post->post_content );
        $video_hero_blocks = array();
        
        // Debug: log the raw post content
        error_log('Raw post content: ' . substr($post->post_content, 0, 1000) . '...');
        
        // Debug: look for video-hero-block in the content
        if (strpos($post->post_content, 'create-block/video-hero-block') !== false) {
            error_log('Found video-hero-block in content');
        } else {
            error_log('No video-hero-block found in content');
        }
        
        // Recursive function to find blocks in nested structures
        function find_video_hero_blocks($blocks, &$video_hero_blocks) {
            foreach ( $blocks as $block ) {
                if ( $block['blockName'] === 'create-block/video-hero-block' ) {
                    $block_id = $block['attrs']['blockId'] ?? uniqid('video-hero-');
                    // Debug: log the block attributes
                    error_log('Video Hero Block Found - ID: ' . $block_id);
                    error_log('Block attrs: ' . print_r($block['attrs'], true));
                    error_log('Videos specifically: ' . print_r($block['attrs']['videos'] ?? 'NOT SET', true));
                    // Ensure we have the full attributes array
                    $video_hero_blocks[$block_id] = $block['attrs'] ?? array();
                }
                // Recursively search in inner blocks
                if ( ! empty( $block['innerBlocks'] ) ) {
                    find_video_hero_blocks( $block['innerBlocks'], $video_hero_blocks );
                }
            }
        }
        
        find_video_hero_blocks($blocks, $video_hero_blocks);
        
        // Debug: log all blocks found
        error_log('All blocks found: ' . print_r($blocks, true));
        
        // Always add the script, even if empty, for debugging
        add_action( 'wp_footer', function() use ($video_hero_blocks) {
            echo '<script>console.log("PHP Debug - video_hero_blocks:", ' . json_encode($video_hero_blocks) . ');</script>';
            echo '<script>console.log("PHP Debug - videos in first block:", ' . json_encode($video_hero_blocks[array_keys($video_hero_blocks)[0]]['videos'] ?? 'NOT FOUND') . ');</script>';
            echo '<script>window.videoHeroBlockData = ' . json_encode($video_hero_blocks) . ';</script>';
            echo '<script>window.wpApiSettings = { postId: ' . get_the_ID() . ' };</script>';
        });
    }
}

// Pass block data to frontend for services-block
function enqueue_services_block_data() {
    if ( is_admin() ) {
        return;
    }
    global $post;
    if ( ! $post ) {
        return;
    }
    if ( has_block( 'create-block/services-block', $post ) ) {
        // Get all services-block instances on the page
        $blocks = parse_blocks( $post->post_content );
        $services_blocks = array();
        
        // Recursive function to find blocks in nested structures
        function find_services_blocks($blocks, &$services_blocks) {
            foreach ( $blocks as $block ) {
                if ( $block['blockName'] === 'create-block/services-block' ) {
                    $block_id = $block['attrs']['blockId'] ?? uniqid('services-');
                    // Ensure we have the full attributes array
                    $services_blocks[$block_id] = $block['attrs'] ?? array();
                }
                // Recursively search in inner blocks
                if ( ! empty( $block['innerBlocks'] ) ) {
                    find_services_blocks( $block['innerBlocks'], $services_blocks );
                }
            }
        }
        
        find_services_blocks($blocks, $services_blocks);
        
        // Always add the script, even if empty, for debugging
        add_action( 'wp_footer', function() use ($services_blocks) {
            echo '<script>console.log("PHP Debug - services_blocks:", ' . json_encode($services_blocks) . ');</script>';
            echo '<script>console.log("PHP Debug - slides in first block:", ' . json_encode($services_blocks[array_keys($services_blocks)[0]]['slides'] ?? 'NOT FOUND') . ');</script>';
            echo '<script>window.servicesBlockData = ' . json_encode($services_blocks) . ';</script>';
        });
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_video_hero_block_data' );
add_action( 'wp_enqueue_scripts', 'enqueue_services_block_data' );

// Add REST API endpoint for block data
function register_video_hero_rest_route() {
    register_rest_route('adaire-blocks/v1', '/video-hero-data/(?P<post_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_video_hero_block_data',
        'permission_callback' => '__return_true',
    ));
}
add_action('rest_api_init', 'register_video_hero_rest_route');

function get_video_hero_block_data($request) {
    $post_id = $request['post_id'];
    $post = get_post($post_id);
    
    if (!$post) {
        return new WP_Error('post_not_found', 'Post not found', array('status' => 404));
    }
    
    $blocks = parse_blocks($post->post_content);
    $video_hero_blocks = array();
    
    foreach ($blocks as $block) {
        if ($block['blockName'] === 'create-block/video-hero-block') {
            $block_id = $block['attrs']['blockId'] ?? uniqid('video-hero-');
            $video_hero_blocks[$block_id] = $block['attrs'];
        }
    }
    
    return $video_hero_blocks;
}

// Include Posts Grid Block PHP functionality (if file exists)
$posts_grid_render = plugin_dir_path(__FILE__) . 'src/posts-grid-block/render.php';
if (file_exists($posts_grid_render)) {
    require_once $posts_grid_render;
}

// Ensure REST API settings are available on the frontend
function adaire_blocks_add_rest_api_settings() {
	// Only needed on frontend
	if (is_admin()) {
		return;
	}

	// Add REST API settings to the page head
	// This ensures wpApiSettings is always available for our blocks
	?>
	<script>
	if (typeof window.wpApiSettings === 'undefined') {
		window.wpApiSettings = {
			root: <?php echo json_encode(esc_url_raw(rest_url())); ?>,
			nonce: <?php echo json_encode(wp_create_nonce('wp_rest')); ?>,
			versionString: 'wp/v2/'
		};
		console.log('[Adaire Blocks] wpApiSettings initialized:', window.wpApiSettings);
	}
	</script>
	<?php
}
add_action('wp_head', 'adaire_blocks_add_rest_api_settings', 1);

// Auto Block Recovery - Automatically recover blocks on editor load
function adaire_blocks_enqueue_auto_recovery() {
	// Always load in admin, let the script decide if it should run
	if ( ! is_admin() ) {
		return;
	}

	// Check if the auto-recovery file exists
	$script_path = ADAIRE_BLOCKS_PLUGIN_PATH . 'admin/js/auto-block-recovery.js';
	if ( ! file_exists( $script_path ) ) {
		error_log( '[Adaire Blocks] Auto-recovery script not found at: ' . $script_path );
		return;
	}

	// Enqueue the auto-recovery script
	wp_enqueue_script(
		'adaire-auto-block-recovery',
		ADAIRE_BLOCKS_PLUGIN_URL . 'admin/js/auto-block-recovery.js',
		array( 'wp-blocks', 'wp-data', 'wp-block-editor', 'wp-notices', 'wp-element' ),
		ADAIRE_BLOCKS_VERSION,
		true // Load in footer to ensure dependencies are loaded
	);

	// Add inline script to verify loading
	$script_url = ADAIRE_BLOCKS_PLUGIN_URL . 'admin/js/auto-block-recovery.js';
	$inline_script = sprintf(
		'console.log("[Adaire Blocks] Inline script executing...");
		console.log("[Adaire Blocks] Version: %s");
		console.log("[Adaire Blocks] Script URL: %s");
		console.log("[Adaire Blocks] Plugin path exists:", %s);
		window.adaireBlocksAutoRecoveryLoaded = true;
		window.adaireBlocksVersion = "%s";',
		esc_js(ADAIRE_BLOCKS_VERSION),
		esc_js($script_url),
		file_exists($script_path) ? 'true' : 'false',
		esc_js(ADAIRE_BLOCKS_VERSION)
	);
	
	wp_add_inline_script(
		'adaire-auto-block-recovery',
		$inline_script,
		'before'
	);
}
add_action( 'enqueue_block_editor_assets', 'adaire_blocks_enqueue_auto_recovery' );

// Pass block configuration to editor
function adaire_blocks_localize_editor_config() {
	// Only load in block editor
	if ( ! is_admin() || ! function_exists( 'get_current_screen' ) ) {
		return;
	}
	
	$screen = get_current_screen();
	if ( ! $screen || $screen->base !== 'post' ) {
		return;
	}
	
	// Get configuration
	$config = AdaireBlocksConfig::get_instance();
	$plugin_version = $config->get_plugin_version();
	$is_premium = $config->is_premium();
	
	// Build blocks configuration
	$blocks_config = array();
	$available_blocks = $config->get_available_blocks();
	
	foreach ( $available_blocks as $block_name ) {
		$block_config = $config->get_block_config( $block_name );
		$blocks_config[ $block_name ] = array(
			'enabled' => $block_config['enabled'] ?? true,
			'limits' => $config->get_block_limits( $block_name ),
			'upgradeMessage' => $config->get_upgrade_message( $block_name )
		);
	}
	
	// Prepare configuration for JavaScript
	$editor_config = array(
		'isPremium' => $is_premium,
		'pluginVersion' => $plugin_version,
		'blocks' => $blocks_config
	);
	
	// Localize script with configuration
	wp_localize_script(
		'wp-block-editor',
		'adaireBlocksConfig',
		$editor_config
	);
	
	// Also add to editor settings for useBlockLimits hook
	add_filter( 'block_editor_settings_all', function( $settings ) use ( $editor_config ) {
		$settings['adaireBlocksConfig'] = $editor_config;
		return $settings;
	});
}
add_action( 'enqueue_block_editor_assets', 'adaire_blocks_localize_editor_config' );

// Enqueue custom block icons for admin pages
function adaire_blocks_enqueue_admin_icons() {
	// Only load on admin pages
	if ( ! is_admin() ) {
		return;
	}
	
	// Enqueue the admin icons script
	wp_enqueue_script(
		'adaire-blocks-admin-icons',
		ADAIRE_BLOCKS_PLUGIN_URL . 'admin/js/block-icons-admin.js',
		array(),
		ADAIRE_BLOCKS_VERSION,
		true
	);
	
	// Enqueue the admin icons CSS
	wp_enqueue_style(
		'adaire-blocks-admin-icons',
		ADAIRE_BLOCKS_PLUGIN_URL . 'admin/css/block-icons-admin.css',
		array(),
		ADAIRE_BLOCKS_VERSION
	);
}
add_action( 'admin_enqueue_scripts', 'adaire_blocks_enqueue_admin_icons' );
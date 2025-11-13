<?php
/**
 * Plugin Name:       Adaire Blocks
 * Description:       A powerful WordPress plugin that helps developers and designers create visually stunning, high-performance websites with ease right inside the Gutenberg editor.
 * Version:           1.1.8
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
    $previous_version_zip = 'https://github.com/helloadaire/Adaire-Blocks/releases/download/v1.1.7.alpha/adaire-blocks.1.1.7.alpha.zip';
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
define('ADAIRE_BLOCKS_VERSION', '1.1.8');
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
 * Render callback for mega-menu-block (Dynamic Block)
 * This PHP function outputs the HTML - JavaScript logic in view.js
 */
function render_mega_menu_block($attributes, $content) {
    // Use the helper function to automatically handle upgrade notices
    return adaire_render_block_with_notice('mega-menu-block', $attributes, function($attrs) use ($content) {
        // Extract all attributes with defaults
        $block_id = $attrs['blockId'] ?? '';
        $logo_url = $attrs['logoUrl'] ?? '';
        $logo_alt = $attrs['logoAlt'] ?? 'Logo';
        $logo_size = $attrs['logoSize'] ?? 40;
        $menu_items = $attrs['menuItems'] ?? array();
        $backgroundColor = $attrs['backgroundColor'] ?? '#ffffff';
        $textColor = $attrs['textColor'] ?? '#000000';
        $hoverColor = $attrs['hoverColor'] ?? '#428aff';
        $activeColor = $attrs['activeColor'] ?? '#000000';
        $level1HoverColor = $attrs['level1HoverColor'] ?? '#428aff';
        $level1ShowHoverUnderline = $attrs['level1ShowHoverUnderline'] ?? true;
        $level1UnderlineWidth = $attrs['level1UnderlineWidth'] ?? 3;
        $level1UnderlineColor = $attrs['level1UnderlineColor'] ?? '#428aff';
        $level1UnderlineBorderRadius = $attrs['level1UnderlineBorderRadius'] ?? 0;
        $level1HoverBgColor = $attrs['level1HoverBgColor'] ?? 'transparent';
        $level1HoverPadding = $attrs['level1HoverPadding'] ?? array('top' => 10, 'right' => 5, 'bottom' => 10, 'left' => 5);
        $level2HoverColor = $attrs['level2HoverColor'] ?? '#428aff';
        $level2ShowHoverUnderline = $attrs['level2ShowHoverUnderline'] ?? true;
        $level2HoverBgColor = $attrs['level2HoverBgColor'] ?? 'rgba(0, 0, 0, 0.05)';
        $level2HoverPadding = $attrs['level2HoverPadding'] ?? array('top' => 8, 'right' => 12, 'bottom' => 8, 'left' => 12);
        $level3HoverColor = $attrs['level3HoverColor'] ?? '#428aff';
        $level3ShowHoverUnderline = $attrs['level3ShowHoverUnderline'] ?? true;
        $level3HoverBgColor = $attrs['level3HoverBgColor'] ?? 'rgba(0, 0, 0, 0.05)';
        $level3HoverPadding = $attrs['level3HoverPadding'] ?? array('top' => 8, 'right' => 12, 'bottom' => 8, 'left' => 12);
        $level1FontSize = $attrs['level1FontSize'] ?? 16;
        $level1FontWeight = $attrs['level1FontWeight'] ?? '400';
        $level1FontColor = $attrs['level1FontColor'] ?? '#000000';
        $level1HoverBorderRadius = $attrs['level1HoverBorderRadius'] ?? 4;
        $level2FontSize = $attrs['level2FontSize'] ?? 14;
        $level2FontWeight = $attrs['level2FontWeight'] ?? '400';
        $level2FontColor = $attrs['level2FontColor'] ?? '#000000';
        $level3FontSize = $attrs['level3FontSize'] ?? 12;
        $level3FontWeight = $attrs['level3FontWeight'] ?? '400';
        $level3FontColor = $attrs['level3FontColor'] ?? '#000000';
        $canvasFontSize = $attrs['canvasFontSize'] ?? 18;
        $canvasFontWeight = $attrs['canvasFontWeight'] ?? '600';
        $canvasFontColor = $attrs['canvasFontColor'] ?? '#000000';
        $canvasImageBorderRadius = $attrs['canvasImageBorderRadius'] ?? 8;
        $menuCanvasBorderRadius = $attrs['menuCanvasBorderRadius'] ?? 0;
        $menuBorderRadius = $attrs['menuBorderRadius'] ?? 0;
        $showCanvasTitle = $attrs['showCanvasTitle'] ?? false;
        $fontSize = $attrs['fontSize'] ?? 16;
        $fontWeight = $attrs['fontWeight'] ?? '400';
        $boldWeight = $attrs['boldWeight'] ?? '700';
        $fontFamily = $attrs['fontFamily'] ?? 'inherit';
        $underlineColor = $attrs['underlineColor'] ?? '#000000';
        $isSticky = $attrs['isSticky'] ?? true;
        $containerMode = $attrs['containerMode'] ?? 'full';
        $containerMaxWidth = $attrs['containerMaxWidth'] ?? array('desktop' => array('value' => 1200, 'unit' => 'px'), 'tablet' => array('value' => 100, 'unit' => '%'), 'mobile' => array('value' => 100, 'unit' => '%'));
        $padding = $attrs['padding'] ?? array('top' => 20, 'right' => 20, 'bottom' => 20, 'left' => 20);
        $margin = $attrs['margin'] ?? array('top' => 0, 'right' => 0, 'bottom' => 0, 'left' => 0);
        $keepCanvasOpenOnClick = $attrs['keepCanvasOpenOnClick'] ?? false;
        $increaseOpacity = $attrs['increaseOpacity'] ?? false;
        $scrollBackgroundColor = $attrs['scrollBackgroundColor'] ?? '#ffffff';
        $menuItemsColorTop = $attrs['menuItemsColorTop'] ?? '#ffffff';
        $menuItemsColorScroll = $attrs['menuItemsColorScroll'] ?? '#000000';
        $menuImageAtTop = $attrs['menuImageAtTop'] ?? '';
        $menuImageAtTopAlt = $attrs['menuImageAtTopAlt'] ?? 'Menu Image at Top';
        $menuImageOnScroll = $attrs['menuImageOnScroll'] ?? '';
        $menuImageOnScrollAlt = $attrs['menuImageOnScrollAlt'] ?? 'Menu Image on Scroll';
        $menuImageSize = $attrs['menuImageSize'] ?? 40;
        $centerMenu = $attrs['centerMenu'] ?? true;
        $mobileMenuBgColor = $attrs['mobileMenuBgColor'] ?? '#ffffff';
        $mobileLevel1FontSize = $attrs['mobileLevel1FontSize'] ?? 16;
        $mobileLevel1FontWeight = $attrs['mobileLevel1FontWeight'] ?? '600';
        $mobileLevel1FontColor = $attrs['mobileLevel1FontColor'] ?? '#111111';
        $mobileLevel2FontSize = $attrs['mobileLevel2FontSize'] ?? 15;
        $mobileLevel2FontWeight = $attrs['mobileLevel2FontWeight'] ?? '500';
        $mobileLevel2FontColor = $attrs['mobileLevel2FontColor'] ?? '#222222';
        $mobileLevel3FontSize = $attrs['mobileLevel3FontSize'] ?? 14;
        $mobileLevel3FontWeight = $attrs['mobileLevel3FontWeight'] ?? '400';
        $mobileLevel3FontColor = $attrs['mobileLevel3FontColor'] ?? '#333333';
        $mobileMenuItemBgColor = $attrs['mobileMenuItemBgColor'] ?? '#ffffff';
        $mobileMenuItemHoverBgColor = $attrs['mobileMenuItemHoverBgColor'] ?? '#f8f8f8';
        $mobileChevronSize = $attrs['mobileChevronSize'] ?? 20;
        $mobileChevronColor = $attrs['mobileChevronColor'] ?? '#666666';

        // Helper function to get level colors
        $getLevelColors = function($level) use ($level1HoverColor, $level1ShowHoverUnderline, $level1UnderlineWidth, $level1UnderlineColor, $level1UnderlineBorderRadius, $level1FontSize, $level1FontWeight, $level1FontColor, $level2HoverColor, $level2ShowHoverUnderline, $level2FontSize, $level2FontWeight, $level2FontColor, $level3HoverColor, $level3ShowHoverUnderline, $level3FontSize, $level3FontWeight, $level3FontColor) {
            switch ($level) {
                case 0:
                    return array(
                        'hoverColor' => $level1HoverColor,
                        'showHoverUnderline' => $level1ShowHoverUnderline,
                        'underlineWidth' => $level1UnderlineWidth,
                        'underlineColor' => $level1UnderlineColor,
                        'underlineBorderRadius' => $level1UnderlineBorderRadius,
                        'fontSize' => $level1FontSize,
                        'fontWeight' => $level1FontWeight,
                        'fontColor' => $level1FontColor,
                    );
                case 1:
                    return array(
                        'hoverColor' => $level2HoverColor,
                        'showHoverUnderline' => $level2ShowHoverUnderline,
                        'fontSize' => $level2FontSize,
                        'fontWeight' => $level2FontWeight,
                        'fontColor' => $level2FontColor,
                    );
                case 2:
                    return array(
                        'hoverColor' => $level3HoverColor,
                        'showHoverUnderline' => $level3ShowHoverUnderline,
                        'fontSize' => $level3FontSize,
                        'fontWeight' => $level3FontWeight,
                        'fontColor' => $level3FontColor,
                    );
                default:
                    return array(
                        'hoverColor' => $level1HoverColor,
                        'showHoverUnderline' => $level1ShowHoverUnderline,
                        'underlineWidth' => $level1UnderlineWidth,
                        'underlineColor' => $level1UnderlineColor,
                        'underlineBorderRadius' => $level1UnderlineBorderRadius,
                        'fontSize' => $level1FontSize,
                        'fontWeight' => $level1FontWeight,
                        'fontColor' => $level1FontColor,
                    );
            }
        };

        // Find canvas image heights for CSS variables
        $canvasImageHeightDesktop = '200px';
        $canvasImageHeightTablet = '150px';
        $canvasImageHeightMobile = '120px';
        foreach ($menu_items as $item) {
            if (isset($item['canvasImageHeight']['desktop'])) {
                $canvasImageHeightDesktop = ($item['canvasImageHeight']['desktop']['value'] ?? 200) . ($item['canvasImageHeight']['desktop']['unit'] ?? 'px');
                break;
            }
        }
        foreach ($menu_items as $item) {
            if (isset($item['canvasImageHeight']['tablet'])) {
                $canvasImageHeightTablet = ($item['canvasImageHeight']['tablet']['value'] ?? 150) . ($item['canvasImageHeight']['tablet']['unit'] ?? 'px');
                break;
            }
        }
        foreach ($menu_items as $item) {
            if (isset($item['canvasImageHeight']['mobile'])) {
                $canvasImageHeightMobile = ($item['canvasImageHeight']['mobile']['value'] ?? 120) . ($item['canvasImageHeight']['mobile']['unit'] ?? 'px');
                break;
            }
        }

        // Build CSS variables
        $styles = array(
            '--mega-menu-bg-color' => $backgroundColor,
            '--mega-menu-text-color' => $textColor,
            '--mega-menu-hover-color' => $hoverColor,
            '--mega-menu-active-color' => $activeColor,
            '--mega-menu-font-size' => $fontSize . 'px',
            '--mega-menu-font-weight' => $fontWeight,
            '--mega-menu-bold-weight' => $boldWeight,
            '--mega-menu-font-family' => $fontFamily,
            '--mega-menu-underline-color' => $underlineColor,
            '--mega-menu-padding-top' => ($padding['top'] ?? 20) . 'px',
            '--mega-menu-padding-right' => ($padding['right'] ?? 20) . 'px',
            '--mega-menu-padding-bottom' => ($padding['bottom'] ?? 20) . 'px',
            '--mega-menu-padding-left' => ($padding['left'] ?? 20) . 'px',
            '--mega-menu-margin-top' => ($margin['top'] ?? 0) . 'px',
            '--mega-menu-margin-right' => ($margin['right'] ?? 0) . 'px',
            '--mega-menu-margin-bottom' => ($margin['bottom'] ?? 0) . 'px',
            '--mega-menu-margin-left' => ($margin['left'] ?? 0) . 'px',
            '--mega-menu-border-radius' => $menuCanvasBorderRadius . 'px',
            '--mega-menu-menu-border-radius' => $menuBorderRadius . 'px',
            '--canvas-image-desktop-height' => $canvasImageHeightDesktop,
            '--canvas-image-tablet-height' => $canvasImageHeightTablet,
            '--canvas-image-mobile-height' => $canvasImageHeightMobile,
            '--mega-menu-logo-size' => $logo_size . 'px',
            '--container-max-width' => ($containerMaxWidth['desktop']['value'] ?? 1200) . ($containerMaxWidth['desktop']['unit'] ?? 'px'),
            '--container-max-width-tablet' => ($containerMaxWidth['tablet']['value'] ?? 100) . ($containerMaxWidth['tablet']['unit'] ?? '%'),
            '--container-max-width-mobile' => ($containerMaxWidth['mobile']['value'] ?? 100) . ($containerMaxWidth['mobile']['unit'] ?? '%'),
            '--mobile-menu-bg' => $mobileMenuBgColor,
            '--mobile-level1-font-size' => $mobileLevel1FontSize . 'px',
            '--mobile-level1-font-weight' => $mobileLevel1FontWeight,
            '--mobile-level1-font-color' => $mobileLevel1FontColor,
            '--mobile-level2-font-size' => $mobileLevel2FontSize . 'px',
            '--mobile-level2-font-weight' => $mobileLevel2FontWeight,
            '--mobile-level2-font-color' => $mobileLevel2FontColor,
            '--mobile-level3-font-size' => $mobileLevel3FontSize . 'px',
            '--mobile-level3-font-weight' => $mobileLevel3FontWeight,
            '--mobile-level3-font-color' => $mobileLevel3FontColor,
            '--mobile-menu-item-bg' => $mobileMenuItemBgColor,
            '--mobile-menu-item-hover-bg' => $mobileMenuItemHoverBgColor,
            '--mobile-chevron-size' => $mobileChevronSize . 'px',
            '--mobile-chevron-color' => $mobileChevronColor,
            '--level1-hover-bg-color' => $level1HoverBgColor,
            '--level1-hover-padding-top' => ($level1HoverPadding['top'] ?? 10) . 'px',
            '--level1-hover-padding-right' => ($level1HoverPadding['right'] ?? 5) . 'px',
            '--level1-hover-padding-bottom' => ($level1HoverPadding['bottom'] ?? 10) . 'px',
            '--level1-hover-padding-left' => ($level1HoverPadding['left'] ?? 5) . 'px',
            '--level1-hover-border-radius' => $level1HoverBorderRadius . 'px',
            '--level2-hover-bg-color' => $level2HoverBgColor,
            '--level2-hover-padding-top' => ($level2HoverPadding['top'] ?? 8) . 'px',
            '--level2-hover-padding-right' => ($level2HoverPadding['right'] ?? 12) . 'px',
            '--level2-hover-padding-bottom' => ($level2HoverPadding['bottom'] ?? 8) . 'px',
            '--level2-hover-padding-left' => ($level2HoverPadding['left'] ?? 12) . 'px',
            '--level3-hover-bg-color' => $level3HoverBgColor,
            '--level3-hover-padding-top' => ($level3HoverPadding['top'] ?? 8) . 'px',
            '--level3-hover-padding-right' => ($level3HoverPadding['right'] ?? 12) . 'px',
            '--level3-hover-padding-bottom' => ($level3HoverPadding['bottom'] ?? 8) . 'px',
            '--level3-hover-padding-left' => ($level3HoverPadding['left'] ?? 12) . 'px',
        );

        $style_string = '';
        foreach ($styles as $prop => $value) {
            $style_string .= esc_attr($prop) . ':' . esc_attr($value) . ';';
        }

        ob_start();
        ?>
        <div class="adaire-mega-menu wp-block-create-block-mega-menu-block testagain" 
             style="<?php echo esc_attr($style_string); ?>"
             data-block-id="<?php echo esc_attr($block_id); ?>"
             data-sticky="<?php echo esc_attr($isSticky ? 'true' : 'false'); ?>"
             data-keep-canvas-open="<?php echo esc_attr($keepCanvasOpenOnClick ? 'true' : 'false'); ?>"
             data-increase-opacity="<?php echo esc_attr($increaseOpacity ? 'true' : 'false'); ?>"
             data-scroll-bg-color="<?php echo esc_attr($scrollBackgroundColor); ?>"
             data-menu-item-color-top="<?php echo esc_attr($menuItemsColorTop); ?>"
             data-menu-items-color-scroll="<?php echo esc_attr($menuItemsColorScroll); ?>"
             data-menu-image-at-top="<?php echo esc_attr($menuImageAtTop); ?>"
             data-menu-image-on-scroll="<?php echo esc_attr($menuImageOnScroll); ?>">
            <div class="adaire-mega-menu__container testagain">
                <nav class="adaire-mega-menu__navbar <?php echo ($containerMode === 'constrained' ? 'is-constrained' : ''); ?> <?php echo ($containerMode === 'constrained' && $centerMenu ? 'center-menu' : ''); ?>">
                    <div class="adaire-mega-menu__brand">
                        <?php if ($menuImageAtTop): ?>
                            <img src="<?php echo esc_url($menuImageAtTop); ?>" 
                                 alt="<?php echo esc_attr($menuImageAtTopAlt); ?>" 
                                 class="adaire-mega-menu__menu-image adaire-mega-menu__menu-image--top"
                                 style="--mega-menu-image-size: <?php echo esc_attr($menuImageSize); ?>px;">
                        <?php endif; ?>
                        <?php if ($menuImageOnScroll): ?>
                            <img src="<?php echo esc_url($menuImageOnScroll); ?>" 
                                 alt="<?php echo esc_attr($menuImageOnScrollAlt); ?>" 
                                 class="adaire-mega-menu__menu-image adaire-mega-menu__menu-image--scroll"
                                 style="--mega-menu-image-size: <?php echo esc_attr($menuImageSize); ?>px;">
                        <?php endif; ?>
                        <?php if (!$menuImageAtTop && !$menuImageOnScroll): ?>
                            <?php if ($logo_url): ?>
                                <img src="<?php echo esc_url($logo_url); ?>" 
                                     alt="<?php echo esc_attr($logo_alt); ?>" 
                                     class="adaire-mega-menu__logo">
                            <?php else: ?>
                                <span class="adaire-mega-menu__brand-text">Brand</span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="adaire-mega-menu__menu-container">
                        <ul class="adaire-mega-menu__mega-menu">
                            <?php foreach ($menu_items as $item): 
                                $level0Colors = $getLevelColors(0);
                                $item_id = $item['id'] ?? '';
                                $item_title = $item['title'] ?? '';
                                $item_url = $item['url'] ?? '#';
                                $item_is_bold = $item['isBold'] ?? false;
                                $item_open_in_new_tab = $item['openInNewTab'] ?? false;
                                $item_children = $item['children'] ?? array();
                                $item_canvas_image_url = $item['canvasImageUrl'] ?? '';
                                $item_canvas_image_alt = $item['canvasImageAlt'] ?? 'Canvas Image';
                                $item_canvas_image_position = $item['canvasImagePosition'] ?? 'left';
                                $item_canvas_image_width = $item['canvasImageWidth'] ?? array('desktop' => array('value' => 300, 'unit' => 'px'));
                                $item_canvas_image_height = $item['canvasImageHeight'] ?? array('desktop' => array('value' => 200, 'unit' => 'px'));
                            ?>
                                <li class="adaire-mega-menu__dropdown">
                                    <a href="<?php echo esc_url($item_url); ?>" 
                                       class="adaire-mega-menu__dropdown-header"
                                       <?php if ($item_open_in_new_tab): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>
                                       style="font-size: <?php echo esc_attr($level0Colors['fontSize']); ?>px; font-weight: <?php echo esc_attr($level0Colors['fontWeight']); ?>; color: <?php echo esc_attr($level0Colors['fontColor']); ?>; --item-hover-color: <?php echo esc_attr($level0Colors['hoverColor']); ?>; --item-underline-color: <?php echo esc_attr($level0Colors['underlineColor'] ?? '#428aff'); ?>; --item-underline-width: <?php echo esc_attr($level0Colors['underlineWidth'] ?? 3); ?>px; --item-underline-border-radius: <?php echo esc_attr($level0Colors['underlineBorderRadius'] ?? 0); ?>px; --item-underline-enabled: <?php echo ($level0Colors['showHoverUnderline'] ? 1 : 0); ?>;">
                                        <span class="<?php echo ($item_is_bold ? 'adaire-mega-menu__bold' : ''); ?>">
                                            <?php echo esc_html($item_title); ?>
                                        </span>
                                        <?php if (!empty($item_children)): ?>
                                            <span class="adaire-mega-menu__chevron">▼</span>
                                        <?php endif; ?>
                                    </a>
                                    <?php if (!empty($item_children)): ?>
                                        <ul class="adaire-mega-menu__menu">
                                            <?php if ($showCanvasTitle): ?>
                                                <li>
                                                    <a href="<?php echo esc_url($item_url); ?>" 
                                                       style="font-size: <?php echo esc_attr($canvasFontSize); ?>px; font-weight: <?php echo esc_attr($canvasFontWeight); ?>; color: <?php echo esc_attr($canvasFontColor); ?>;">
                                                        <?php echo esc_html($item_title); ?>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                            <?php foreach ($item_children as $child): 
                                                $level1Colors = $getLevelColors(1);
                                                $child_id = $child['id'] ?? '';
                                                $child_title = $child['title'] ?? '';
                                                $child_url = $child['url'] ?? '#';
                                                $child_is_bold = $child['isBold'] ?? false;
                                                $child_open_in_new_tab = $child['openInNewTab'] ?? false;
                                                $child_children = $child['children'] ?? array();
                                            ?>
                                                <li class="adaire-mega-menu__sub-dropdown">
                                                    <a href="<?php echo esc_url($child_url); ?>" 
                                                       class="adaire-mega-menu__sub-dropdown-header"
                                                       <?php if ($child_open_in_new_tab): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>
                                                       style="font-size: <?php echo esc_attr($level1Colors['fontSize']); ?>px; font-weight: <?php echo esc_attr($level1Colors['fontWeight']); ?>; color: <?php echo esc_attr($level1Colors['fontColor']); ?>; --item-hover-color: <?php echo esc_attr($level1Colors['hoverColor']); ?>;">
                                                        <span class="<?php echo ($child_is_bold ? 'adaire-mega-menu__bold' : ''); ?>">
                                                            <?php echo esc_html($child_title); ?>
                                                        </span>
                                                    </a>
                                                    <?php if (!empty($child_children)): ?>
                                                        <ul class="adaire-mega-menu__sub-menu">
                                                            <?php foreach ($child_children as $grandchild): 
                                                                $level2Colors = $getLevelColors(2);
                                                                $grandchild_id = $grandchild['id'] ?? '';
                                                                $grandchild_title = $grandchild['title'] ?? '';
                                                                $grandchild_url = $grandchild['url'] ?? '#';
                                                                $grandchild_is_bold = $grandchild['isBold'] ?? false;
                                                                $grandchild_open_in_new_tab = $grandchild['openInNewTab'] ?? false;
                                                            ?>
                                                                <li>
                                                                    <a href="<?php echo esc_url($grandchild_url); ?>" 
                                                                       class="<?php echo ($grandchild_is_bold ? 'adaire-mega-menu__bold' : ''); ?>"
                                                                       <?php if ($grandchild_open_in_new_tab): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>
                                                                       style="font-size: <?php echo esc_attr($level2Colors['fontSize']); ?>px; font-weight: <?php echo esc_attr($level2Colors['fontWeight']); ?>; color: <?php echo esc_attr($level2Colors['fontColor']); ?>; --item-hover-color: <?php echo esc_attr($level2Colors['hoverColor']); ?>;">
                                                                        <?php echo esc_html($grandchild_title); ?>
                                                                    </a>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; ?>
                                            
                                            <?php if ($item_canvas_image_url): ?>
                                                <li class="adaire-mega-menu__canvas-image adaire-mega-menu__canvas-image--<?php echo esc_attr($item_canvas_image_position); ?>">
                                                    <img src="<?php echo esc_url($item_canvas_image_url); ?>" 
                                                         alt="<?php echo esc_attr($item_canvas_image_alt); ?>"
                                                         style="width: <?php echo esc_attr(($item_canvas_image_width['desktop']['value'] ?? 300) . ($item_canvas_image_width['desktop']['unit'] ?? 'px')); ?>; height: <?php echo esc_attr(($item_canvas_image_height['desktop']['value'] ?? 200) . ($item_canvas_image_height['desktop']['unit'] ?? 'px')); ?>; border-radius: <?php echo esc_attr($canvasImageBorderRadius); ?>px; object-fit: cover;">
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="adaire-mega-menu__buttons">
                        <?php echo $content; // InnerBlocks content ?>
                        <button class="adaire-mega-menu__menu-btn">
                            <span class="adaire-mega-menu__menu-icon">☰</span>
                        </button>
                    </div>
                </nav>

                <!-- Mobile Menu Overlay -->
                <div class="adaire-mega-menu__mobile-overlay">
                    <div class="adaire-mega-menu__mobile-container">
                        <div class="adaire-mega-menu__mobile-content">
                            <!-- Mobile menu content will be dynamically rendered here -->
                        </div>
                    </div>
                </div>
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
			
			// Special handling for dynamic blocks (have render callbacks)
			if ( $block_name === 'counter-block' ) {
				register_block_type( $block_path, array(
					'render_callback' => 'render_counter_block'
				) );
			} elseif ( $block_name === 'mega-menu-block' ) {
				register_block_type( $block_path, array(
					'render_callback' => 'render_mega_menu_block'
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
	
	// Register dynamic blocks separately with render callbacks (for WordPress 6.7 and older)
	$settings_fallback = AdaireBlocksSettings::get_instance();
	$block_settings_fallback = $settings_fallback->get_settings();
	$available_blocks_fallback = $settings_fallback->get_available_blocks();
	$block_mapping_fallback = array();
	
	foreach ( $available_blocks_fallback as $settings_key => $block_data ) {
		$block_mapping_fallback[$settings_key] = $block_data['block_name'];
	}
	
	// Counter block is free, so no license check needed
	if ( $counter_block_enabled_fallback ) {
		register_block_type( __DIR__ . '/build/counter-block', array(
			'render_callback' => 'render_counter_block'
		) );
	}
	
	// Mega menu block (check if enabled)
	$mega_menu_block_key = array_search( 'mega-menu-block', $block_mapping_fallback );
	if ( $mega_menu_block_key !== false && isset( $block_settings_fallback[ $mega_menu_block_key ] ) && $block_settings_fallback[ $mega_menu_block_key ] ) {
		register_block_type( __DIR__ . '/build/mega-menu-block', array(
			'render_callback' => 'render_mega_menu_block'
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

// Enqueue Bootstrap Icons CSS if the icon-box-block or social-banner-block is present on the page
function enqueue_bootstrap_icons_assets() {
    if ( is_admin() ) {
        return;
    }
    global $post;
    if ( ! $post ) {
        return;
    }
    if (
        has_block( 'create-block/icon-box-block', $post ) ||
        has_block( 'create-block/social-banner-block', $post ) ||
        has_block( 'create-block/industries-block', $post )
    ) {
        // Enqueue Bootstrap Icons CSS from CDN
        wp_enqueue_style(
            'bootstrap-icons',
            'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css',
            array(),
            '1.13.1'
        );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_icons_assets' );

// Also enqueue in editor - use a later hook to avoid interfering with block.json parsing
function enqueue_bootstrap_icons_editor() {
    // Use admin_enqueue_scripts instead to avoid interfering with block registration
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css',
        array(),
        '1.13.1'
    );
}
add_action( 'admin_enqueue_scripts', 'enqueue_bootstrap_icons_editor' );

// Hide Gutenberg breadcrumb anchor badges (the ID pill shown in block breadcrumbs).
add_action(
	'enqueue_block_editor_assets',
	function () {
		$css = '.block-editor-block-breadcrumb__anchor{display:none;}';
		wp_add_inline_style( 'wp-edit-blocks', $css );
	},
	20
);

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
                    $attrs = $block['attrs'] ?? array();
                    
                    // Process slides to ensure image URLs are properly set
                    if ( isset( $attrs['slides'] ) && is_array( $attrs['slides'] ) ) {
                        foreach ( $attrs['slides'] as $key => $slide ) {
                            // If slideImg is empty or missing but slideImgId exists, convert ID to URL
                            if ( ( empty( $slide['slideImg'] ) || ! isset( $slide['slideImg'] ) ) && ! empty( $slide['slideImgId'] ) && is_numeric( $slide['slideImgId'] ) ) {
                                $image_url = wp_get_attachment_image_url( intval( $slide['slideImgId'] ), 'full' );
                                if ( $image_url ) {
                                    $attrs['slides'][$key]['slideImg'] = $image_url;
                                }
                            }
                            // Ensure slideImgId is an integer
                            if ( isset( $slide['slideImgId'] ) ) {
                                $attrs['slides'][$key]['slideImgId'] = intval( $slide['slideImgId'] );
                            }
                            // Ensure slideImg is a string (can be empty)
                            if ( ! isset( $slide['slideImg'] ) ) {
                                $attrs['slides'][$key]['slideImg'] = '';
                            }
                        }
                    }
                    
                    $services_blocks[$block_id] = $attrs;
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
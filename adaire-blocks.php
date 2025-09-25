<?php
/**
 * Plugin Name:       Adaire Blocks
 * Description:       Adaire Blocks is a powerful WordPress plugin that helps developers and designers create visually stunning, high-performance websites with ease right inside the Gutenberg editor.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Adaire
 * License:           GPL-3.0
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       Adaire Blocks
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Registers the block using a `blocks-manifest.php` file, which improves the performance of block type registration.
 * Behind the scenes, it also registers all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */
function create_block_gsap_hero_block_block_init() {
	/**
	 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
	 * based on the registered block metadata.
	 * Added in WordPress 6.8 to simplify the block metadata registration process added in WordPress 6.7.
	 *
	 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
	 */
	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
		return;
	}

	/**
	 * Registers the block(s) metadata from the `blocks-manifest.php` file.
	 * Added to WordPress 6.7 to improve the performance of block type registration.
	 *
	 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
	 */
	if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
		wp_register_block_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
	}
	/**
	 * Registers the block type(s) in the `blocks-manifest.php` file.
	 *
	 * @see https://developer.wordpress.org/reference/functions/register_block_type/
	 */
	$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
	foreach ( array_keys( $manifest_data ) as $block_type ) {
		register_block_type( __DIR__ . "/build/{$block_type}" );
	}
}
add_action( 'init', 'create_block_gsap_hero_block_block_init' );

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
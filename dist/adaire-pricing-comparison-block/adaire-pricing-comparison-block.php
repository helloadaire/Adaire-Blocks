<?php
/**
 * Plugin Name: Adaire Pricing Comparison Block
 * Plugin URI: https://adaire.digital/
 * Description: Standalone Gutenberg pricing comparison block for Adaire.
 * Version: 1.2.3
 * Author: Adaire
 * Author URI: https://adaire.digital/
 * License: GPL-3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: adaire-pricing-comparison-block
 * Requires at least: 6.7
 * Tested up to: 6.8
 * Requires PHP: 7.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ADAIRE_PRICING_COMPARISON_BLOCK_VERSION', '1.2.3' );
define( 'ADAIRE_PRICING_COMPARISON_BLOCK_PATH', plugin_dir_path( __FILE__ ) );

function adaire_register_pricing_comparison_block() {
	$block_metadata_path = ADAIRE_PRICING_COMPARISON_BLOCK_PATH . 'build/pricing-comparison-block/block.json';

	if ( ! file_exists( $block_metadata_path ) ) {
		return;
	}

	register_block_type( $block_metadata_path );
}
add_action( 'init', 'adaire_register_pricing_comparison_block' );

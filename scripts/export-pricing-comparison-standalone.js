#!/usr/bin/env node

const fs = require("fs");
const path = require("path");
const { execFileSync } = require("child_process");

const rootDir = path.resolve(__dirname, "..");
const buildDir = path.join(rootDir, "build", "pricing-comparison-block");
const outputRoot = path.join(rootDir, "dist");
const pluginSlug = "adaire-pricing-comparison-block";
const pluginDir = path.join(outputRoot, pluginSlug);
const pluginMainFile = path.join(pluginDir, `${pluginSlug}.php`);
const pluginZip = path.join(outputRoot, `${pluginSlug}.zip`);
const sourceBlockMetadataPath = path.join(buildDir, "block.json");
const sourcePluginFile = path.join(rootDir, "adaire-blocks.php");

function ensureFile(filePath) {
	if (!fs.existsSync(filePath)) {
		throw new Error(`Missing required file: ${filePath}`);
	}
}

function copyDirectory(sourceDir, destinationDir) {
	fs.mkdirSync(destinationDir, { recursive: true });

	for (const entry of fs.readdirSync(sourceDir, { withFileTypes: true })) {
		const sourcePath = path.join(sourceDir, entry.name);
		const destinationPath = path.join(destinationDir, entry.name);

		if (entry.isDirectory()) {
			copyDirectory(sourcePath, destinationPath);
			continue;
		}

		fs.copyFileSync(sourcePath, destinationPath);
	}
}

function removeDirectory(targetDir) {
	fs.rmSync(targetDir, { recursive: true, force: true });
}

function getPluginVersion() {
	const pluginContents = fs.readFileSync(sourcePluginFile, "utf8");
	const versionMatch = pluginContents.match(/Version:\s*([^\n]+)/);
	return versionMatch ? versionMatch[1].trim() : "0.1.0";
}

function createPluginBootstrap(version) {
	return `<?php
/**
 * Plugin Name: Adaire Pricing Comparison Block
 * Plugin URI: https://adaire.digital/
 * Description: Standalone Gutenberg pricing comparison block for Adaire.
 * Version: ${version}
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

define( 'ADAIRE_PRICING_COMPARISON_BLOCK_VERSION', '${version}' );
define( 'ADAIRE_PRICING_COMPARISON_BLOCK_PATH', plugin_dir_path( __FILE__ ) );

function adaire_register_pricing_comparison_block() {
	$block_metadata_path = ADAIRE_PRICING_COMPARISON_BLOCK_PATH . 'build/pricing-comparison-block/block.json';

	if ( ! file_exists( $block_metadata_path ) ) {
		return;
	}

	register_block_type( $block_metadata_path );
}
add_action( 'init', 'adaire_register_pricing_comparison_block' );
`;
}

function createReadme(version) {
	return `=== Adaire Pricing Comparison Block ===
Contributors: adaire
Requires at least: 6.7
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: ${version}
Version: ${version}
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Standalone pricing comparison block for Gutenberg.

== Description ==

Share the Adaire pricing comparison experience as a standalone block plugin.

== Installation ==

1. Upload the plugin ZIP in WordPress.
2. Activate the plugin.
3. Add the "Pricing Comparison" block in the editor.
`;
}

function writeStandaloneBlockMetadata() {
	const metadata = JSON.parse(fs.readFileSync(sourceBlockMetadataPath, "utf8"));
	metadata.title = "Pricing Comparison";
	metadata.category = "widgets";
	metadata.textdomain = "adaire-pricing-comparison-block";

	const targetPath = path.join(pluginDir, "build", "pricing-comparison-block", "block.json");
	fs.writeFileSync(targetPath, `${JSON.stringify(metadata, null, 2)}\n`);
}

function createZipArchive() {
	if (fs.existsSync(pluginZip)) {
		fs.rmSync(pluginZip, { force: true });
	}

	execFileSync("zip", ["-rq", pluginZip, pluginSlug], {
		cwd: outputRoot,
		stdio: "inherit",
	});
}

function main() {
	ensureFile(sourcePluginFile);
	ensureFile(sourceBlockMetadataPath);

	if (!fs.existsSync(buildDir)) {
		throw new Error("Build output for pricing-comparison-block was not found. Run `npm run build` first.");
	}

	const version = getPluginVersion();

	fs.mkdirSync(outputRoot, { recursive: true });
	removeDirectory(pluginDir);
	fs.mkdirSync(pluginDir, { recursive: true });

	copyDirectory(buildDir, path.join(pluginDir, "build", "pricing-comparison-block"));
	writeStandaloneBlockMetadata();
	fs.writeFileSync(pluginMainFile, createPluginBootstrap(version));
	fs.writeFileSync(path.join(pluginDir, "readme.txt"), createReadme(version));
	createZipArchive();

	console.log(`Standalone plugin folder created at: ${pluginDir}`);
	console.log(`Standalone plugin ZIP created at: ${pluginZip}`);
}

main();

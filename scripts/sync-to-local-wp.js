#!/usr/bin/env node

const fs = require('fs');
const path = require('path');

const sourceDir = path.resolve(__dirname, '..');
const targetDir = path.resolve(sourceDir, '..', '..', 'site', 'wp-content', 'plugins', 'adaire-blocks');

const pluginEntries = [
	{ path: 'adaire-blocks.php', required: true },
	{ path: 'admin', required: true },
	{ path: 'assets', required: true },
	{ path: 'build', required: false },
	{ path: 'config', required: true },
	{ path: 'includes', required: true },
	{ path: 'plugin-update-checker', required: true },
	{ path: 'README.md', required: true },
	{ path: 'readme.txt', required: true },
	{ path: 'readme-svn.txt', required: true },
];

function ensureDir(dirPath) {
	fs.mkdirSync(dirPath, { recursive: true });
}

function removeIfExists(targetPath) {
	if (fs.existsSync(targetPath)) {
		fs.rmSync(targetPath, { recursive: true, force: true });
	}
}

function copyEntry(entryConfig) {
	const entry = entryConfig.path;
	const sourcePath = path.join(sourceDir, entry);
	const targetPath = path.join(targetDir, entry);

	if (!fs.existsSync(sourcePath)) {
		if (entryConfig.required) {
			throw new Error(`Missing source entry: ${entry}`);
		}

		console.log(`Skipped ${entry} (not present in source)`);
		return;
	}

	removeIfExists(targetPath);
	fs.cpSync(sourcePath, targetPath, { recursive: true });
}

function pruneTarget() {
	if (!fs.existsSync(targetDir)) {
		return;
	}

	const allowedEntries = new Set(pluginEntries.map((entry) => entry.path));

	for (const entry of fs.readdirSync(targetDir)) {
		if (!allowedEntries.has(entry)) {
			removeIfExists(path.join(targetDir, entry));
		}
	}
}

function main() {
	console.log('Syncing Adaire Blocks into local WordPress plugin directory...');
	console.log(`Source: ${sourceDir}`);
	console.log(`Target: ${targetDir}`);

	ensureDir(targetDir);
	pruneTarget();

	for (const entry of pluginEntries) {
		const copied = copyEntry(entry);
		if (copied !== false && fs.existsSync(path.join(sourceDir, entry.path))) {
			console.log(`Copied ${entry.path}`);
		}
	}

	console.log('Local WordPress plugin sync complete.');
}

main();

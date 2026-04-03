#!/usr/bin/env node

const fs = require('fs');
const path = require('path');

const sourceDir = path.resolve(__dirname, '..');
const targetDir = path.resolve(sourceDir, '..', '..', 'deploy', 'adaire-blocks-svn', 'trunk');

const pluginEntries = [
	{ source: 'adaire-blocks.php', target: 'adaire-blocks.php', required: true },
	{ source: 'admin', target: 'admin', required: true },
	{ source: 'assets', target: 'assets', required: true },
	{ source: 'build', target: 'build', required: false },
	{ source: 'config', target: 'config', required: true },
	{ source: 'includes', target: 'includes', required: true },
	{ source: 'plugin-update-checker', target: 'plugin-update-checker', required: true },
	{ source: 'README.md', target: 'README.md', required: true },
	{ source: 'readme.txt', target: 'readme.txt', required: true },
	{ source: 'readme-svn.txt', target: 'readme.txt', required: true },
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
	const sourcePath = path.join(sourceDir, entryConfig.source);
	const targetPath = path.join(targetDir, entryConfig.target);

	if (!fs.existsSync(sourcePath)) {
		if (entryConfig.required) {
			throw new Error(`Missing source entry: ${entryConfig.source}`);
		}

		console.log(`Skipped ${entryConfig.source} (not present in source)`);
		return;
	}

	removeIfExists(targetPath);
	fs.cpSync(sourcePath, targetPath, { recursive: true });
}

function pruneTarget() {
	if (!fs.existsSync(targetDir)) {
		return;
	}

	const allowedEntries = new Set(pluginEntries.map((entry) => entry.target));

	for (const entry of fs.readdirSync(targetDir)) {
		if (!allowedEntries.has(entry)) {
			removeIfExists(path.join(targetDir, entry));
		}
	}
}

function main() {
	console.log('Syncing Adaire Blocks into SVN trunk...');
	console.log(`Source: ${sourceDir}`);
	console.log(`Target: ${targetDir}`);

	ensureDir(targetDir);
	pruneTarget();

	for (const entry of pluginEntries) {
		copyEntry(entry);
		console.log(`Copied ${entry.source} -> ${entry.target}`);
	}

	console.log('SVN trunk sync complete.');
}

main();

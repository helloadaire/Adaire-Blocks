#!/usr/bin/env node

/**
 * Free Version Generator for Adaire Blocks
 * 
 * This script generates a free version of the plugin by:
 * 1. Copying the main plugin structure
 * 2. Modifying configuration to disable premium features
 * 3. Adding upgrade notices to premium blocks
 * 4. Removing premium-specific files
 */

const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

class FreeVersionGenerator {
    constructor() {
        this.sourceDir = process.cwd();
        this.freeVersionDir = path.join(this.sourceDir, '../adaire-blocks-free');
        this.configFile = path.join(this.sourceDir, 'config/blocks-config.json');
        this.buildScript = path.join(this.sourceDir, 'scripts/build-free.js');
    }

    /**
     * Main generation process
     */
    async generate() {
        console.log('🚀 Starting Free Version Generation...');
        
        try {
            // Step 1: Create free version directory
            await this.createFreeVersionDirectory();
            
            // Step 2: Copy core files
            await this.copyCoreFiles();
            
            // Step 3: Modify configuration for free version
            await this.modifyConfiguration();
            
            // Step 4: Update plugin headers
            await this.updatePluginHeaders();
            
            // Step 4.5: Update admin settings page to use SVG icons
            await this.updateAdminSettingsPage();
            
            // Step 5: Build the free version
            await this.buildFreeVersion();
            
            // Step 6: Generate readme.txt
            await this.generateReadme();
            
            // Step 7: Generate changelog
            await this.generateChangelog();
            
            // Step 8: Verify what was generated
            await this.verifyGeneration();
            
            console.log('\n✅ Free version generated successfully!');
            console.log(`📁 Location: ${this.freeVersionDir}`);
            
        } catch (error) {
            console.error('❌ Error generating free version:', error.message);
            process.exit(1);
        }
    }
    
    /**
     * Verify what was generated
     */
    async verifyGeneration() {
        console.log('\n🔍 Verifying generated free version...');
        
        // Check which blocks are in src/
        const srcPath = path.join(this.freeVersionDir, 'src');
        if (fs.existsSync(srcPath)) {
            const blocks = fs.readdirSync(srcPath)
                .filter(item => {
                    const itemPath = path.join(srcPath, item);
                    return fs.statSync(itemPath).isDirectory() && item.endsWith('-block');
                });
            
            console.log(`\n📦 Blocks included in FREE version (${blocks.length}):`);
            blocks.forEach(block => console.log(`   ✓ ${block}`));
        }
        
        // Check if plugin-update-checker exists
        const pucPath = path.join(this.freeVersionDir, 'plugin-update-checker');
        if (fs.existsSync(pucPath)) {
            console.log('\n⚠️  WARNING: plugin-update-checker directory still exists! This should not be there.');
        } else {
            console.log('\n✓ plugin-update-checker directory correctly excluded');
        }
        
        // Check if icons exist
        const iconsPath = path.join(this.freeVersionDir, 'src', 'icons');
        if (fs.existsSync(iconsPath)) {
            const iconFiles = fs.readdirSync(iconsPath).filter(f => f.endsWith('.js'));
            console.log(`\n✓ Icons directory exists with ${iconFiles.length} icon files`);
            
            // Check icon-svgs subdirectory
            const iconSvgsPath = path.join(iconsPath, 'icon-svgs');
            if (fs.existsSync(iconSvgsPath)) {
                const svgFiles = fs.readdirSync(iconSvgsPath).filter(f => f.endsWith('.svg'));
                console.log(`✓ icon-svgs directory exists with ${svgFiles.length} SVG files`);
            } else {
                console.log('⚠️  WARNING: icon-svgs directory missing!');
            }
        } else {
            console.log('\n⚠️  WARNING: Icons directory missing!');
        }
        
        // Check adaire-blocks.php for update checker code
        const phpFile = path.join(this.freeVersionDir, 'adaire-blocks.php');
        if (fs.existsSync(phpFile)) {
            const phpContent = fs.readFileSync(phpFile, 'utf8');
            const hasUpdateChecker = phpContent.includes('plugin-update-checker') || phpContent.includes('PucFactory');
            const hasRollback = phpContent.includes('admin_post_my_plugin_rollback');
            
            if (hasUpdateChecker || hasRollback) {
                console.log('\n⚠️  WARNING: Update/Rollback code still in PHP file!');
                if (hasUpdateChecker) console.log('   - Found: plugin-update-checker reference');
                if (hasRollback) console.log('   - Found: rollback code');
            } else {
                console.log('\n✓ Update/Rollback code successfully removed from PHP file');
            }
        }
        
        // Check settings page for icon-svgs usage
        const settingsPage = path.join(this.freeVersionDir, 'admin', 'settings-page.php');
        if (fs.existsSync(settingsPage)) {
            const settingsContent = fs.readFileSync(settingsPage, 'utf8');
            if (settingsContent.includes('icon-svgs')) {
                console.log('✓ Admin settings page uses exact SVG icons from icon-svgs directory');
            } else {
                console.log('⚠️  WARNING: Settings page may not be using icon-svgs directory');
            }
        }
        
        // Check config file for version flag
        const configFile = path.join(this.freeVersionDir, 'config', 'blocks-config.json');
        if (fs.existsSync(configFile)) {
            const configContent = JSON.parse(fs.readFileSync(configFile, 'utf8'));
            if (configContent.version === 'free') {
                console.log('✓ Config file has version flag: "free"');
            } else {
                console.log('⚠️  WARNING: Config file missing version flag');
            }
            
            if (Object.keys(configContent.premium || {}).length === 0) {
                console.log('✓ Premium configuration cleared (empty object)');
            } else {
                console.log('⚠️  WARNING: Premium configuration still has data');
            }
        }
    }

    /**
     * Create free version directory structure
     */
    async createFreeVersionDirectory() {
        console.log('📁 Creating free version directory...');
        
        if (fs.existsSync(this.freeVersionDir)) {
            fs.rmSync(this.freeVersionDir, { recursive: true, force: true });
        }
        
        fs.mkdirSync(this.freeVersionDir, { recursive: true });
        
        // Create necessary subdirectories
        const subdirs = [
            'admin',
            'admin/css',
            'admin/js',
            'build',
            'config',
            'docs',
            'includes',
            'src',
            'src/components',
            'src/icons',
            'src/icons/icon-svgs'
        ];
        
        subdirs.forEach(dir => {
            fs.mkdirSync(path.join(this.freeVersionDir, dir), { recursive: true });
        });
    }

    /**
     * Copy core plugin files
     */
    async copyCoreFiles() {
        console.log('📋 Copying core files...');
        
        const filesToCopy = [
            'adaire-blocks.php',
            'readme.txt',
            'package.json',
            'package-lock.json',
            '.gitignore'
        ];
        
        const dirsToCopy = [
            'admin',
            'includes',
            // 'plugin-update-checker', // EXCLUDED - WordPress.org doesn't allow custom updaters
            'src/components',
            'src/icons',
            'src/icons/icon-svgs' // Include exact SVG files for admin page
        ];
        
        // Copy ONLY enabled block directories from src
        const blockDirs = fs.readdirSync(path.join(this.sourceDir, 'src'))
            .filter(item => {
                const itemPath = path.join(this.sourceDir, 'src', item);
                if (!fs.statSync(itemPath).isDirectory() || !item.endsWith('-block')) {
                    return false;
                }
                // Check if block is enabled in free version
                if (!this.isBlockEnabledInFreeVersion(item)) {
                    console.log(`🚫 Excluding disabled block from copy: ${item}`);
                    return false;
                }
                console.log(`✅ Including enabled block: ${item}`);
                return true;
            });
        
        blockDirs.forEach(blockDir => {
            dirsToCopy.push(`src/${blockDir}`);
        });
        
        // Copy individual files
        filesToCopy.forEach(file => {
            const sourcePath = path.join(this.sourceDir, file);
            const destPath = path.join(this.freeVersionDir, file);
            
            if (fs.existsSync(sourcePath)) {
                fs.copyFileSync(sourcePath, destPath);
            }
        });
        
        // Copy directories (excluding premium-specific files)
        dirsToCopy.forEach(dir => {
            const sourcePath = path.join(this.sourceDir, dir);
            const destPath = path.join(this.freeVersionDir, dir);
            
            if (fs.existsSync(sourcePath)) {
                this.copyDirectoryRecursive(sourcePath, destPath);
            }
        });
    }

    /**
     * Recursively copy directory while filtering premium content
     */
    copyDirectoryRecursive(source, dest) {
        if (!fs.existsSync(dest)) {
            fs.mkdirSync(dest, { recursive: true });
        }
        
        const files = fs.readdirSync(source);
        
        files.forEach(file => {
            const sourcePath = path.join(source, file);
            const destPath = path.join(dest, file);
            
            if (fs.statSync(sourcePath).isDirectory()) {
                // Skip build directory
                if (file === 'build') {
                    return;
                }
                
                // Note: Block filtering is already done in copyCoreFiles()
                // No need to check again here
                
                this.copyDirectoryRecursive(sourcePath, destPath);
            } else {
                // Skip premium-specific files
                if (!this.isPremiumFile(file)) {
                    fs.copyFileSync(sourcePath, destPath);
                }
            }
        });
    }

    /**
     * Check if file is premium-specific or should be excluded
     */
    isPremiumFile(filename) {
        const excludedFiles = [
            'premium-',
            'license',
            'upgrade-',
            'pro-',
            'diagnostics' // Exclude diagnostics tool from both versions
        ];
        
        return excludedFiles.some(prefix => filename.toLowerCase().includes(prefix));
    }
    
    /**
     * Check if block is enabled in free version
     */
    isBlockEnabledInFreeVersion(blockName) {
        const configPath = path.join(this.sourceDir, 'config', 'blocks-config.json');
        
        if (!fs.existsSync(configPath)) {
            return false;
        }
        
        const config = JSON.parse(fs.readFileSync(configPath, 'utf8'));
        const freeConfig = config.free || {};
        
        return freeConfig[blockName]?.enabled === true;
    }

    /**
     * Modify configuration for free version
     */
    async modifyConfiguration() {
        console.log('⚙️  Modifying configuration for free version...');
        
        if (!fs.existsSync(this.configFile)) {
            console.log('⚠️  Configuration file not found, creating default...');
            await this.createDefaultConfig();
            return;
        }
        
        const config = JSON.parse(fs.readFileSync(this.configFile, 'utf8'));
        
        // Add version flag and clear premium config for free version
        const freeConfig = {
            version: 'free', // Flag to indicate this is the free version
            free: config.free || {},
            premium: {} // Clear premium config to indicate free version
        };
        
        // Write modified config to free version
        const freeConfigPath = path.join(this.freeVersionDir, 'config/blocks-config.json');
        fs.writeFileSync(freeConfigPath, JSON.stringify(freeConfig, null, 2));
        console.log('   ✓ Added version flag: "free" to config');
        console.log('   ✓ Cleared premium configuration');
    }

    /**
     * Create default configuration if none exists
     */
    async createDefaultConfig() {
        const defaultConfig = {
            free: {
                "accordion-block": {
                    "enabled": true,
                    "limits": { "maxItems": 5 },
                    "upgradeMessage": "Upgrade to Premium for unlimited accordion items."
                },
                "button-block": {
                    "enabled": true,
                    "limits": { "maxStyles": 3 },
                    "upgradeMessage": "Upgrade to Premium for unlimited button styles."
                },
                "counter-block": {
                    "enabled": true,
                    "limits": { "maxDuration": 3000 },
                    "upgradeMessage": "Upgrade to Premium for advanced counter features."
                }
            },
            premium: {}
        };
        
        const freeConfigPath = path.join(this.freeVersionDir, 'config/blocks-config.json');
        fs.mkdirSync(path.dirname(freeConfigPath), { recursive: true });
        fs.writeFileSync(freeConfigPath, JSON.stringify(defaultConfig, null, 2));
    }

    /**
     * Update plugin headers for free version
     */
    async updatePluginHeaders() {
        console.log('📝 Updating plugin headers...');
        
        const pluginFile = path.join(this.freeVersionDir, 'adaire-blocks.php');
        
        if (!fs.existsSync(pluginFile)) {
            return;
        }
        
        let content = fs.readFileSync(pluginFile, 'utf8');
        
        // Extract current version from source
        const versionMatch = content.match(/Version:\s*([^\n]*)/);
        const currentVersion = versionMatch ? versionMatch[1].trim() : '1.0.0';
        
        console.log(`   Using version: ${currentVersion} from premium version`);
        
        // Plugin name stays the same (no "Free" mention for WordPress.org)
        // WordPress.org does not allow mentions of premium/paid versions
        
        // Update description (no mention of premium/upgrade)
        content = content.replace(
            /Description:\s*[^\n]*/,
            'Description:       Professional WordPress blocks for Gutenberg editor with GSAP animations and modern design.'
        );
        
        // Ensure license matches readme.txt (exact: GPL-3.0)
        content = content.replace(
            / \* License:\s*[^\n]*/,
            ' * License:           GPL-3.0'
        );
        content = content.replace(
            / \* License URI:\s*[^\n]*/,
            ' * License URI:       https://www.gnu.org/licenses/gpl-3.0.html'
        );
        
        // Version remains the same as premium (already in file)
        // No need to update version - it's already correct
        
        // REMOVE Plugin Update Checker (WordPress.org doesn't allow it)
        console.log('   Removing Plugin Update Checker and Rollback code...');
        
        const lines = content.split('\n');
        const filteredLines = [];
        let skipMode = false;
        let skipUntilBlankLines = 0;
        
        for (let i = 0; i < lines.length; i++) {
            const line = lines[i];
            const trimmed = line.trim();
            
            // Start skip mode when we hit Plugin Update Checker
            if (trimmed.includes('// Plugin Update Checker')) {
                skipMode = true;
                filteredLines.push('// Plugin Update Checker removed for WordPress.org version');
                filteredLines.push('// WordPress.org handles all updates automatically');
                filteredLines.push('');
                continue;
            }
            
            // Start skip mode when we hit Version Rollback
            if (trimmed.includes('// Version Rollback')) {
                skipMode = true;
                filteredLines.push('// Version Rollback removed for WordPress.org version');
                filteredLines.push('// WordPress.org handles all updates and rollbacks automatically');
                filteredLines.push('');
                continue;
            }
            
            // End skip mode markers
            if (trimmed.includes('// End of version rollback code')) {
                skipMode = false;
                skipUntilBlankLines = 2; // Skip next 2 blank lines
                continue;
            }
            
            if (trimmed.includes('// Define plugin constants')) {
                skipMode = false;
                skipUntilBlankLines = 0;
            }
            
            // Skip lines in skip mode
            if (skipMode) {
                continue;
            }
            
            // Skip blank lines counter
            if (skipUntilBlankLines > 0 && trimmed === '') {
                skipUntilBlankLines--;
                continue;
            } else if (trimmed !== '') {
                skipUntilBlankLines = 0;
            }
            
            // Skip use statement for PucFactory
            if (trimmed.includes('use YahnisElsts\\PluginUpdateChecker')) {
                continue;
            }
            
            filteredLines.push(line);
        }
        
        content = filteredLines.join('\n');
        console.log('   ✓ All update-related code removed');
        
        fs.writeFileSync(pluginFile, content);
    }
    
    /**
     * Update admin settings page to use exact SVG icons from icon-svgs directory
     */
    async updateAdminSettingsPage() {
        console.log('🎨 Updating admin settings page to use exact SVG icons...');
        
        const settingsPagePath = path.join(this.freeVersionDir, 'admin', 'settings-page.php');
        
        if (!fs.existsSync(settingsPagePath)) {
            console.log('⚠️  Settings page not found, skipping icon update');
            return;
        }
        
        let content = fs.readFileSync(settingsPagePath, 'utf8');
        
        // Use a more flexible regex-based replacement to handle whitespace variations
        content = content.replace(
            /\/\/ Check if custom SVG icon file exists[\s\S]*?\/\/ Use dashicon\s*echo '<span class="dashicons dashicons-' \. esc_attr\(\$block_data\['icon'\]\) \. '"><\/span>';\s*\}/,
            `// Use exact SVG from icon-svgs directory
                                        $svg_icon_path = ADAIRE_BLOCKS_PLUGIN_PATH . 'src/icons/icon-svgs/' . $block_data['block_name'] . '.svg';
                                        
                                        if (file_exists($svg_icon_path)) {
                                            // Read and display exact SVG without modification
                                            $svg_content = file_get_contents($svg_icon_path);
                                            echo $svg_content;
                                        } else {
                                            // Fallback to dashicon if SVG not found
                                            echo '<span class="dashicons dashicons-' . esc_attr($block_data['icon']) . '"></span>';
                                        }`
        );
        
        fs.writeFileSync(settingsPagePath, content);
        console.log('   ✓ Admin settings page updated to use exact SVG icons');
    }
    
    /**
     * Calculate previous version (one patch version lower)
     */
    calculatePreviousVersion(currentVersion) {
        // Parse version like "1.1.0" or "1.0.9"
        const parts = currentVersion.split('.');
        
        if (parts.length >= 3) {
            let major = parseInt(parts[0]) || 1;
            let minor = parseInt(parts[1]) || 0;
            let patch = parseInt(parts[2]) || 0;
            
            // Decrement patch version
            if (patch > 0) {
                patch--;
            } else if (minor > 0) {
                // patch is 0, decrement minor
                minor--;
                patch = 9; // Assume max patch of 9 for previous minor
            } else if (major > 1) {
                // Both minor and patch are 0, decrement major
                major--;
                minor = 9; // Assume max minor of 9 for previous major
                patch = 9;
            } else {
                // Can't go lower than 1.0.0
                return '1.0.0';
            }
            
            return `${major}.${minor}.${patch}`;
        }
        
        // Fallback
        return '1.0.0';
    }

    /**
     * Build the free version
     */
    async buildFreeVersion() {
        console.log('🔨 Building free version...');
        
        try {
            // Copy root-level entry files needed for build
            this.copyRootEntryFiles();
            
            // Modify package.json to include only enabled blocks
            this.modifyPackageJson();
            
            // Run npm install
            process.chdir(this.freeVersionDir);
            execSync('npm install', { stdio: 'inherit' });
            
            // Run build script
            execSync('npm run build', { stdio: 'inherit' });
            
        } catch (error) {
            console.log('⚠️  Build process failed, but free version files are ready');
            console.log('Error:', error.message);
        }
    }
    
    /**
     * Copy root-level entry files needed for build
     */
    copyRootEntryFiles() {
        console.log('📋 Copying root entry files...');
        
        const rootFiles = [
            'src/index.js'
        ];
        
        rootFiles.forEach(file => {
            const sourcePath = path.join(this.sourceDir, file);
            const destPath = path.join(this.freeVersionDir, file);
            
            if (fs.existsSync(sourcePath)) {
                // Create directory if it doesn't exist
                fs.mkdirSync(path.dirname(destPath), { recursive: true });
                fs.copyFileSync(sourcePath, destPath);
            }
        });
    }
    
    /**
     * Modify package.json to only include enabled blocks
     */
    modifyPackageJson() {
        console.log('📝 Modifying package.json for free version...');
        
        const packagePath = path.join(this.freeVersionDir, 'package.json');
        
        if (!fs.existsSync(packagePath)) {
            return;
        }
        
        const packageData = JSON.parse(fs.readFileSync(packagePath, 'utf8'));
        
        // Get enabled blocks
        const enabledBlocks = this.getEnabledBlocks();
        
        // Get version from main plugin file
        const pluginFile = path.join(this.sourceDir, 'adaire-blocks.php');
        const pluginContent = fs.readFileSync(pluginFile, 'utf8');
        const versionMatch = pluginContent.match(/Version:\s*([^\n]*)/);
        const currentVersion = versionMatch ? versionMatch[1].trim() : packageData.version;
        
        // Update package name and description, keep same version as premium
        packageData.name = 'adaire-blocks-free';
        packageData.description = 'Free version of Adaire Blocks - Professional WordPress blocks for Gutenberg editor';
        packageData.version = currentVersion;
        
        // Update scripts to only build enabled blocks
        if (packageData.scripts) {
            // Remove any premium-specific scripts
            delete packageData.scripts['build:premium'];
            delete packageData.scripts['deploy:premium'];
        }
        
        fs.writeFileSync(packagePath, JSON.stringify(packageData, null, 2));
        
        // Also modify src/index.js to only include enabled blocks
        this.modifyIndexJs();
    }
    
    /**
     * Modify src/index.js to only include enabled blocks
     */
    modifyIndexJs() {
        console.log('📝 Modifying src/index.js for free version...');
        
        const indexPath = path.join(this.freeVersionDir, 'src', 'index.js');
        
        if (!fs.existsSync(indexPath)) {
            return;
        }
        
        const enabledBlocks = this.getEnabledBlocks();
        
        // Create new index.js content with only enabled blocks
        let indexContent = `// Adaire Blocks Free Version
// This file is automatically generated - do not edit manually

`;
        
        // Add imports for enabled blocks only
        enabledBlocks.forEach(blockName => {
            const blockPath = `./${blockName}`;
            indexContent += `import './${blockName}';\n`;
        });
        
        // Add comment about disabled blocks
        const allBlocks = this.getAllBlocks();
        const disabledBlocks = allBlocks.filter(block => !enabledBlocks.includes(block));
        
        if (disabledBlocks.length > 0) {
            indexContent += `\n// Disabled blocks in free version:\n`;
            disabledBlocks.forEach(blockName => {
                indexContent += `// import './${blockName}'; // Premium feature\n`;
            });
        }
        
        fs.writeFileSync(indexPath, indexContent);
    }
    
    /**
     * Get all available blocks from FREE version src directory
     */
    getAllBlocks() {
        // Look in FREE version, not source version
        const srcPath = path.join(this.freeVersionDir, 'src');
        
        if (!fs.existsSync(srcPath)) {
            // Fallback to source if free version not created yet
            const sourcePath = path.join(this.sourceDir, 'src');
            if (!fs.existsSync(sourcePath)) {
                return [];
            }
            return fs.readdirSync(sourcePath)
                .filter(item => {
                    const itemPath = path.join(sourcePath, item);
                    return fs.statSync(itemPath).isDirectory() && item.endsWith('-block');
                });
        }
        
        return fs.readdirSync(srcPath)
            .filter(item => {
                const itemPath = path.join(srcPath, item);
                return fs.statSync(itemPath).isDirectory() && item.endsWith('-block');
            });
    }
    
    /**
     * Get list of enabled blocks for free version
     */
    getEnabledBlocks() {
        const configPath = path.join(this.sourceDir, 'config', 'blocks-config.json');
        
        if (!fs.existsSync(configPath)) {
            return [];
        }
        
        const config = JSON.parse(fs.readFileSync(configPath, 'utf8'));
        const freeConfig = config.free || {};
        
        return Object.keys(freeConfig).filter(blockName => 
            freeConfig[blockName]?.enabled === true
        );
    }

    /**
     * Generate readme.txt for free version (WordPress.org compliant)
     */
    async generateReadme() {
        console.log('📋 Generating readme.txt for free version...');
        
        // Get version from main plugin file
        const pluginFile = path.join(this.sourceDir, 'adaire-blocks.php');
        const pluginContent = fs.readFileSync(pluginFile, 'utf8');
        const versionMatch = pluginContent.match(/Version:\s*([^\n]*)/);
        const currentVersion = versionMatch ? versionMatch[1].trim() : '1.0.0';
        
        const config = JSON.parse(fs.readFileSync(path.join(this.sourceDir, 'config', 'blocks-config.json'), 'utf8'));
        const freeConfig = config.free || {};
        
        // Get only enabled blocks (no mention of premium/limitations)
        const enabledBlocks = [];
        
        Object.keys(freeConfig).forEach(blockName => {
            const blockConfig = freeConfig[blockName];
            const displayName = this.getBlockDisplayName(blockName);
            
            if (blockConfig.enabled) {
                // Just list the block with its description - NO mention of limits
                enabledBlocks.push(`* **${displayName}** - ${this.getBlockDescription(blockName)}`);
            }
        });
        
        const readmeContent = `=== Adaire Blocks ===
Contributors: adaire
Donate link: https://adaire.digital/
Tags: blocks, gutenberg, gsap, animation, accordion
Requires at least: 6.7
Tested up to: 6.8
Stable tag: ${currentVersion}
Requires PHP: 7.4
License: GPL-3.0
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Professional Gutenberg blocks for WordPress with GSAP animations and modern design.

== Description ==

Adaire Blocks is a WordPress plugin that provides custom Gutenberg blocks to create visually appealing websites. Built with modern web technologies including GSAP, React, and optimized for performance, this plugin offers a seamless experience for developers and designers working within the WordPress Gutenberg editor.

**Available Blocks:**

${enabledBlocks.join('\n')}

**Technical Features:**

* Built with modern JavaScript (ES6+), React, and GSAP 3.13.0
* Optimized for performance with efficient block registration
* Compatible with WordPress 6.7+ and PHP 7.4+
* Responsive design with mobile-first approach
* Includes advanced animation libraries: GSAP, Split-Type, Swiper, Splide
* REST API integration for dynamic content
* Smooth transitions and micro-interactions
* GPL-2.0 licensed for maximum flexibility

**Animation Features:**

* GSAP-powered animations with scroll triggers
* Smooth transitions and micro-interactions
* Customizable animation speeds and easing
* Interactive carousels and sliders
* Advanced hover effects and transitions

== Installation ==

1. Upload the plugin files to the \`/wp-content/plugins/adaire-blocks\` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Start using the custom blocks in the Gutenberg editor
4. Configure block settings through the block editor sidebar

For manual installation:

1. Download the plugin zip file
2. Navigate to Plugins > Add New > Upload Plugin
3. Choose the downloaded file and click Install Now
4. After installation, click Activate Plugin

== Frequently Asked Questions ==

= What WordPress version is required? =

This plugin requires WordPress 6.7 or higher and PHP 7.4 or higher.

= Are the blocks compatible with all themes? =

The blocks are designed to work with most modern WordPress themes. They use standard WordPress styling and can be customized to match your theme's design through the block editor settings.

= Can I customize the animations and styles? =

Yes, all blocks include extensive customization options in the block editor, including colors, fonts, animation speeds, and layout settings. Advanced users can further customize through CSS.

= Is GSAP included with the plugin? =

Yes, the plugin includes GSAP 3.13.0 for animations. All animation functionality is built-in and ready to use.

= Do the blocks work on mobile devices? =

Yes, all blocks are fully responsive and optimized for mobile devices with touch-friendly interactions.

= Can I use multiple instances of the same block? =

Yes, each block instance is independent and can be customized separately through unique block IDs.

= Are there any performance considerations? =

The plugin is optimized for performance with efficient block registration and lazy loading of animation scripts. GSAP animations are hardware-accelerated for smooth performance.

= How do I get support? =

For support, please visit our website at https://adaire.digital/ or contact us through the WordPress.org support forums.

== Screenshots ==

1. Accordion Block with smooth animations and customizable styling
2. Counter Block with animated counting effects
3. Tabs Block with vertical and horizontal layout options
4. Testimonial Block with carousel layout
5. Logos Block with responsive slider
6. Block settings panel

== Changelog ==

= ${currentVersion} =
* Added Counter Block with animated counting effects and customizable styling
* Added custom icon support for all blocks
* Updated all block icons with new custom designs
* Improved block compatibility with WordPress 6.7
* Enhanced responsive controls for all blocks
* Performance optimizations

= 1.0.9 =
* Added migration tool for easier block updates
* Improved block compatibility with WordPress 6.7
* Fixed block registration issues

= 1.0.8 =
* Added Accordion Block with smooth animations
* Added Tabs Block with vertical/horizontal layouts
* Enhanced Logos Block with responsive breakpoints
* Improved font family inheritance for Accordion Block
* Added responsive max-width settings for blocks
* Performance improvements

= 1.0.0 =
* Initial release
* Accordion Block with GSAP animations
* Button Block with hover effects
* Counter Block with counting animations
* CTA Block with gradient backgrounds
* Logos Block with responsive sliders
* Tabs Block with smooth transitions
* Testimonial Block with carousels

== Upgrade Notice ==

= ${currentVersion} =
Major update with new Counter Block, custom icons for all blocks, and improved animation controls. Highly recommended upgrade for enhanced functionality.

= 1.0.9 =
Important update that adds migration tool and improves WordPress 6.7 compatibility. Upgrade recommended.

= 1.0.8 =
Significant feature release adding Accordion and Tabs blocks with improved responsive controls. Upgrade to access new blocks.

== Additional Information ==

**Made with ❤️ by Adaire Digital**

Visit [Adaire Digital](https://adaire.digital/ "Professional WordPress Development") for more information about our services and products.

**Support and Documentation**

For detailed documentation, tutorials, and support, please visit our website or contact us through the WordPress.org support forums.
`;
        
        fs.writeFileSync(path.join(this.freeVersionDir, 'readme.txt'), readmeContent);
    }
    
    /**
     * Get block description
     */
    getBlockDescription(blockName) {
        const descriptions = {
            'accordion-block': 'Create collapsible content sections with smooth animations and customizable styling',
            'button-block': 'Create customizable buttons with hover animations and multiple styles',
            'counter-block': 'Display animated counters with customizable prefixes, suffixes, and captions',
            'cta-block': 'Build call-to-action sections with animated carousels and gradient backgrounds',
            'testimonial-block': 'Showcase client testimonials with customizable carousels and professional layouts',
            'logos-block': 'Display partner/client logos with customizable sliders and smooth animations',
            'tabs-block': 'Create tabbed content sections with smooth GSAP animations and customizable styling',
            'tab-panel-block': 'Individual tab panels for the Tabs Block',
            'call-to-action-block': 'Build powerful call-to-action sections with animated carousels',
            'video-hero-block': 'Create stunning video hero sections with YouTube/Vimeo integration',
            'portfolio-block': 'Showcase your work with elegant portfolio layouts and GSAP animations',
            'particles-block': 'Add dynamic particle effects with scroll-controlled animations',
            'services-block': 'Display your services with interactive carousel layouts',
            'posts-grid-block': 'Display WordPress posts in beautiful grid layouts with filtering',
            'project-block': 'Highlight your projects with interactive showcases',
            'scroll-text-block': 'Add scroll-triggered text animations with customizable effects',
            'questions-block': 'Create animated FAQ sections with GSAP pinning'
        };
        
        return descriptions[blockName] || 'Custom block for enhanced functionality';
    }
    
    /**
     * Get display name for block
     */
    getBlockDisplayName(blockName) {
        const names = {
            'accordion-block': 'Accordion Block',
            'button-block': 'Button Block',
            'counter-block': 'Counter Block',
            'cta-block': 'CTA Block',
            'testimonial-block': 'Testimonial Block',
            'video-hero-block': 'Video Hero Block',
            'portfolio-block': 'Portfolio Block',
            'particles-block': 'Particles Block',
            'services-block': 'Services Block',
            'logos-block': 'Logos Block',
            'posts-grid-block': 'Posts Grid Block',
            'project-block': 'Project Block',
            'scroll-text-block': 'Scroll Text Block',
            'tabs-block': 'Tabs Block',
            'tab-panel-block': 'Tab Panel Block',
            'questions-block': 'Questions Block',
            'call-to-action-block': 'Call to Action Block'
        };
        
        return names[blockName] || blockName;
    }
    
    /**
     * Generate changelog for free version
     */
    async generateChangelog() {
        console.log('📋 Generating changelog...');
        
        const changelog = `# Adaire Blocks Free - Changelog

## Version 1.0.0-free
*Initial Free Release*

### Available Blocks
- Accordion Block (Limited to 5 items)
- Button Block (Limited to 3 styles)
- Counter Block (Limited features)
- CTA Block (Basic version)
- Testimonial Block (Limited to 3 testimonials)

### Premium Blocks (Upgrade Required)
- Video Hero Block
- Portfolio Block
- Particles Block
- Services Block
- Logos Block
- Posts Grid Block
- Project Block
- Scroll Text Block
- Tabs Block
- Tab Panel Block
- Questions Block
- Call to Action Block

### How to Upgrade
Visit [adaire.digital/premium](https://adaire.digital/premium) to unlock all premium features and remove limitations.

---
*Generated automatically from premium version ${new Date().toISOString()}*
`;

        fs.writeFileSync(path.join(this.freeVersionDir, 'CHANGELOG-FREE.md'), changelog);
    }
}

// Run the generator
if (require.main === module) {
    const generator = new FreeVersionGenerator();
    generator.generate();
}

module.exports = FreeVersionGenerator;

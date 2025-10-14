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
            
            // Step 5: Build the free version
            await this.buildFreeVersion();
            
            // Step 6: Generate readme.txt
            await this.generateReadme();
            
            // Step 7: Generate changelog
            await this.generateChangelog();
            
            console.log('✅ Free version generated successfully!');
            console.log(`📁 Location: ${this.freeVersionDir}`);
            
        } catch (error) {
            console.error('❌ Error generating free version:', error.message);
            process.exit(1);
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
            'src/icons'
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
            'src/components',
            'src/icons',
            'docs'
        ];
        
        // Copy individual block directories from src
        const blockDirs = fs.readdirSync(path.join(this.sourceDir, 'src'))
            .filter(item => {
                const itemPath = path.join(this.sourceDir, 'src', item);
                return fs.statSync(itemPath).isDirectory() && item.endsWith('-block');
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
                
                // For block directories, check if they're enabled in free version
                if (file.endsWith('-block')) {
                    const blockName = file;
                    if (!this.isBlockEnabledInFreeVersion(blockName)) {
                        console.log(`🚫 Skipping disabled block: ${blockName}`);
                        return;
                    }
                }
                
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
     * Check if file is premium-specific
     */
    isPremiumFile(filename) {
        const premiumFiles = [
            'premium-',
            'license',
            'upgrade-',
            'pro-'
        ];
        
        return premiumFiles.some(prefix => filename.toLowerCase().includes(prefix));
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
        
        // Ensure only free configuration is used
        const freeConfig = {
            free: config.free || {},
            premium: config.premium || {}
        };
        
        // Write modified config to free version
        const freeConfigPath = path.join(this.freeVersionDir, 'config/blocks-config.json');
        fs.writeFileSync(freeConfigPath, JSON.stringify(freeConfig, null, 2));
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
        
        // Update plugin name
        content = content.replace(
            /Plugin Name:\s*Adaire Blocks/,
            'Plugin Name:       Adaire Blocks (Free)'
        );
        
        // Update description
        content = content.replace(
            /Description:\s*[^\n]*/,
            'Description:       Free version of Adaire Blocks - Professional WordPress blocks for Gutenberg editor. Upgrade to Premium for advanced features.'
        );
        
        // Update version
        content = content.replace(
            /Version:\s*[^\n]*/,
            'Version:           1.0.0-free'
        );
        
        // Update plugin constants
        content = content.replace(
            /define\('ADAIRE_BLOCKS_VERSION', '[^']*'\);/,
            "define('ADAIRE_BLOCKS_VERSION', '1.0.0-free');"
        );
        
        // Add free version flag to ensure configuration system knows this is free
        if (!content.includes('define(\'ADAIRE_BLOCKS_IS_FREE\'')) {
            content = content.replace(
                /define\('ADAIRE_BLOCKS_VERSION', '[^']*'\);/,
                "define('ADAIRE_BLOCKS_VERSION', '1.0.0-free');\ndefine('ADAIRE_BLOCKS_IS_FREE', true);"
            );
        }
        
        fs.writeFileSync(pluginFile, content);
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
        
        // Update package name
        packageData.name = 'adaire-blocks-free';
        packageData.description = 'Free version of Adaire Blocks - Professional WordPress blocks for Gutenberg editor';
        packageData.version = '1.0.0-free';
        
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
     * Get all available blocks from src directory
     */
    getAllBlocks() {
        const srcPath = path.join(this.sourceDir, 'src');
        
        if (!fs.existsSync(srcPath)) {
            return [];
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
     * Generate readme.txt for free version
     */
    async generateReadme() {
        console.log('📋 Generating readme.txt for free version...');
        
        const config = JSON.parse(fs.readFileSync(path.join(this.sourceDir, 'config', 'blocks-config.json'), 'utf8'));
        const freeConfig = config.free || {};
        
        // Separate enabled and premium-only blocks
        const enabledBlocks = [];
        const premiumBlocks = [];
        
        Object.keys(freeConfig).forEach(blockName => {
            const blockConfig = freeConfig[blockName];
            const displayName = this.getBlockDisplayName(blockName);
            const limits = blockConfig.limits || {};
            
            if (blockConfig.enabled) {
                let description = `* **${displayName}**`;
                
                // Add limit information
                if (limits.maxItems) {
                    description += ` - Limited to ${limits.maxItems} items in free version`;
                }
                if (limits.maxButtons) {
                    description += ` - Limited to ${limits.maxButtons} button(s) in free version`;
                }
                if (limits.maxDuration) {
                    description += ` - Limited animation duration in free version`;
                }
                
                enabledBlocks.push(description);
            } else {
                premiumBlocks.push(`* **${displayName}** - Premium feature`);
            }
        });
        
        const readmeContent = `=== Adaire Blocks (Free) ===
Contributors:      Adaire
Tags:              block, gutenberg, gsap, animation, testimonial, accordion, tabs, logos
Tested up to:      6.7
Stable tag:        1.0.0
Requires at least: 6.7
Requires PHP:      7.4
License:           GPL-3.0
License URI:       https://www.gnu.org/licenses/gpl-3.0.html

Professional Gutenberg blocks for WordPress - Free version with essential features for beautiful websites.

== Description ==

Adaire Blocks (Free) is a WordPress plugin that provides essential custom Gutenberg blocks to create visually appealing websites. This free version includes core blocks with some feature limitations. Upgrade to Premium for unlimited features and advanced blocks.

**Free Version Blocks:**

${enabledBlocks.join('\n')}

**Premium-Only Blocks:**

${premiumBlocks.join('\n')}

**Technical Features:**

* Built with modern JavaScript (ES6+), React, and GSAP 3.13.0
* Optimized for performance with efficient block registration
* Compatible with WordPress 6.7+ and PHP 7.4+
* Responsive design with mobile-first approach
* GPL-3.0 licensed

**Upgrade to Premium:**

The Premium version includes:
* Unlimited items for all blocks
* Advanced animation blocks (Video Hero, Particles, Scroll Text)
* Portfolio and Project showcase blocks
* Posts Grid with advanced filtering
* Services and Questions blocks
* Advanced styling options
* Priority support

[Learn more about Adaire Blocks Premium](https://adaire.digital/blocks)

== Installation ==

1. Upload the plugin files to the \`/wp-content/plugins/adaire-blocks-free\` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Start using the custom blocks in the Gutenberg editor
4. Configure block settings through the block editor sidebar

== Frequently Asked Questions ==

= What's the difference between Free and Premium? =

The free version includes essential blocks with item limits (e.g., 3 accordion items, 3 tabs, 3 testimonials). Premium includes unlimited items, advanced animation blocks, and premium-only blocks like Video Hero, Portfolio, and Posts Grid.

= Can I upgrade from Free to Premium? =

Yes! Simply purchase the Premium version from [adaire.digital/blocks](https://adaire.digital/blocks) and activate it. All your content will be preserved.

= What WordPress version is required? =

This plugin requires WordPress 6.7 or higher and PHP 7.4 or higher.

= Are the blocks compatible with all themes? =

The blocks are designed to work with most modern WordPress themes. They use standard WordPress styling and can be customized to match your theme's design.

= Can I customize the animations and styles? =

Yes, all blocks include customization options in the block editor, including colors, fonts, and layout settings.

= Do the blocks work on mobile devices? =

Yes, all blocks are fully responsive and optimized for mobile devices.

= What are the item limits in the free version? =

- Accordion: 3 items
- Tabs: 3 items
- Testimonials: 3 items
- Logos: 3 items
- CTA: 1 button
- Limited animation duration for Counter block

= How do I get support? =

Free support is available through the WordPress.org support forums. Premium users receive priority support.

== Screenshots ==

1. Accordion Block with smooth animations
2. Tabs Block with customizable styling
3. Testimonial Block with carousel layout
4. Logos Block with responsive slider
5. Block settings panel

== Changelog ==

= 1.0.0 =
* Initial free version release
* Accordion Block (limited to 3 items)
* Button Block with customization options
* Counter Block with basic animations
* CTA Block (limited to 1 button)
* Logos Block (limited to 3 logos)
* Tabs Block (limited to 3 tabs)
* Testimonial Block (limited to 3 testimonials)

== Upgrade Notice ==

= 1.0.0 =
Initial release of Adaire Blocks Free version.

Made with ❤️ by Adaire Digital
Visit [adaire.digital/blocks](https://adaire.digital/blocks) to upgrade to Premium.
`;
        
        fs.writeFileSync(path.join(this.freeVersionDir, 'readme.txt'), readmeContent);
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

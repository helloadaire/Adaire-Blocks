=== Adaire Blocks ===
Contributors: adaire
Donate link: https://adaire.digital/
Tags: blocks, gutenberg, gsap, animation, portfolio
Requires at least: 6.7
Tested up to: 6.8
Stable tag: 1.1.4
Requires PHP: 7.4
License: GPL-3.0
License URI: https://www.gnu.org/licenses/gpl-3.0.html

A powerful WordPress plugin for creating visually stunning, high-performance websites with custom Gutenberg blocks and GSAP animations.

== Description ==

Adaire Blocks is a comprehensive WordPress plugin that provides a collection of custom Gutenberg blocks designed to create visually stunning, high-performance websites. Built with modern web technologies including GSAP, React, and optimized for performance, this plugin offers a seamless experience for developers and designers working within the WordPress Gutenberg editor.

**Available Blocks:**

* **Accordion Block** - Create collapsible content sections with smooth animations, customizable styling, and responsive design
* **Button Block** - Create customizable buttons with hover animations, multiple styles, and advanced styling options
* **Call to Action Block** - Build powerful call-to-action sections with animated carousels and gradient backgrounds
* **Counter Block** - Display animated counters that count up or down to a target number, with customizable prefixes, suffixes, and captions for showcasing statistics and achievements
* **CTA Block** - Build call-to-action sections with animated carousels and gradient backgrounds
* **Logos Block** - Display partner/client logos with customizable sliders, smooth animations, and responsive breakpoints
* **Particles Block** - Add dynamic particle effects with scroll-controlled animations and customizable positioning
* **Portfolio Block** - Showcase your work with elegant portfolio layouts, gallery modals, and GSAP animations
* **Posts Grid Block** - Display WordPress posts in beautiful grid layouts with filtering, pagination, and FLIP animations
* **Project Block** - Highlight your projects with interactive showcases, particle effects, and dynamic content
* **Questions Block** - Create animated FAQ sections with GSAP pinning and smooth transitions
* **Scroll Text Block** - Add scroll-triggered text animations with customizable speed and direction
* **Services Block** - Display your services with interactive carousel layouts, scroll-triggered animations, and smooth transitions
* **Tabs Block** - Create tabbed content sections with smooth GSAP animations, vertical/horizontal layouts, and customizable styling
* **Testimonial Block** - Showcase client testimonials with customizable carousels and professional layouts
* **Video Hero Block** - Create stunning video hero sections with YouTube/Vimeo integration, smooth transitions, and customizable overlays

**Technical Features:**

* Built with modern JavaScript (ES6+), React, and GSAP 3.13.0
* Optimized for performance with efficient block registration using WordPress 6.7+ metadata collection
* Compatible with WordPress 6.7+ and PHP 7.4+
* Includes advanced animation libraries: GSAP, Split-Type, Swiper, Splide
* REST API integration for dynamic content
* Locomotive Scroll support for smooth scrolling experiences
* Responsive design with mobile-first approach
* GPL-2.0 licensed for maximum flexibility

**Animation & Interaction Features:**

* GSAP-powered animations with scroll triggers
* Smooth transitions and micro-interactions
* Customizable animation speeds and easing
* Scroll-controlled particle effects
* Interactive carousels and sliders
* Video integration with YouTube and Vimeo
* Advanced hover effects and transitions

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/adaire-blocks` directory, or install the plugin through the WordPress plugins screen directly.
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
3. Portfolio Block showcasing projects with elegant layouts
4. Video Hero Block with YouTube/Vimeo integration
5. Tabs Block with vertical and horizontal layout options
6. Posts Grid Block with filtering and pagination

== Changelog ==

= 1.1.4 =
* Fixed Mega Menu Block limit management system - replaced hardcoded limits with proper useBlockLimits hook integration
* Fixed "Increase Opacity on Scroll" functionality with immediate response and improved CSS compatibility
* Enhanced Scroll-based opacity animation performance with reduced scroll distance (50px vs 200px) for faster transitions
* Improved Premium/Free tier integration for Mega Menu Block with proper limit validation and upgrade notices
* Optimized Scroll trigger implementation with immediate response (removed scrub delay) for better user experience

= 1.1.3 =
* Fixed Image rendering issue in Services Block component affecting visual asset display and layout integrity
* Added User feedback mechanism for Questions Block with progress tracking and interactive state management
* Enhanced Mega Menu Block with dynamic opacity controls and CSS custom property integration for improved visual hierarchy
* Optimized Particles Block text fade-out timing with improved scroll-triggered animation performance and reduced DOM overhead
* Removed Architectural constraints on Mega Menu Block navigation depth and item count limitations for enhanced scalability

= 1.1.2 =
* Added Mega Menu Block with advanced navigation capabilities and customizable layouts
* Added Enhanced block icons for better visual identification in the WordPress editor
* Added Improved admin interface with custom icons for easier block management
* Added Responsive mega menu design that works perfectly on all devices
* Added Advanced styling options for mega menu customization
* Added Drag-and-drop interface for easy menu organization
* Added Performance optimizations for faster loading
* Improved User experience with better visual consistency across all blocks
* Improved Block selection and management in the WordPress editor
* Improved Navigation creation workflow for users
* Fixed Visual inconsistencies in block management interface
* Enhanced Overall user experience with professional block icons

= 1.1.1 =
* Added Complete License Activation System with external API integration
* Added License validation, activation, and deactivation functionality
* Added License admin page under Adaire Blocks menu
* Added Automatic license status checking and premium feature management
* Added Database integration with automatic table creation
* Added Token-based activation system with secure storage
* Added Dynamic license limits based on license type
* Added Auto-deactivation when license reaches maximum activations
* Added Comprehensive error handling and logging for debugging
* Added Real-time license status display with activation counts
* Added Counter Block with animated counting effects and customizable styling
* Added counter direction (count up or count down)
* Added prefix and suffix support for counter numbers
* Added caption support with top/bottom positioning
* Added comprehensive typography controls (font size, weight, letter spacing)
* Added color controls for counter and caption
* Added responsive container settings with device-specific max-widths
* Added live animation preview in WordPress editor
* Implemented dynamic block rendering for Counter Block
* Added custom icon support for all blocks
* Updated all block icons with new custom designs

= 1.0.9 =
* Added migration tool: One-click tool in admin panel to allow auto-migration of all Adaire Blocks on all pages and posts
* Improved block compatibility with WordPress 6.7
* Fixed block registration issues

= 1.0.8 =
* Added Accordion Block with smooth animations and customizable styling
* Added Posts Grid Block with filtering, pagination, and FLIP animations
* Added Tabs Block with vertical/horizontal layouts and GSAP animations
* Added Container Block with responsive constrained/full-width options
* Added Call to Action Block with enhanced carousel features
* Enhanced Logos Block with responsive breakpoints and container settings
* Added initial active tab selector for Tabs Block
* Improved font family inheritance for Accordion Block titles
* Added responsive max-width settings for container-enabled blocks
* Fixed bouncing animation in Posts Grid Block FLIP transitions

= 1.0.0 =
* Initial release
* Portfolio Block with GSAP animations
* Services Block with carousel layouts
* Video Hero Block with YouTube/Vimeo support
* Testimonial Block with customizable carousels
* Project Block with interactive showcases
* Logos Block with responsive sliders
* Particles Block with scroll effects
* Questions Block with FAQ animations
* Scroll Text Block with text animations
* CTA Block with gradient backgrounds

== Upgrade Notice ==

= 1.1.4 =
Important update with Mega Menu Block improvements including fixed limit management system and enhanced scroll-based opacity functionality. Recommended upgrade for better performance and user experience.

= 1.1.1 =
Major update with new Counter Block, custom icons for all blocks, and improved animation controls. Highly recommended upgrade for enhanced functionality.

= 1.0.9 =
Important update that adds one-click block migration tool and improves WordPress 6.7 compatibility. Upgrade recommended.

= 1.0.8 =
Significant feature release adding Accordion, Posts Grid, and Tabs blocks with improved responsive controls. Upgrade to access new blocks.

= 1.0.0 =
Initial release of Adaire Blocks.

== Additional Information ==

**Made with ❤️ by Adaire Digital**

Visit [Adaire Digital](https://adaire.digital/ "Professional WordPress Development") for more information about our services and products.

**Support and Documentation**

For detailed documentation, tutorials, and support, please visit our website or contact us through the WordPress.org support forums.

**Contributing**

We welcome contributions! If you'd like to contribute to the development of Adaire Blocks, please visit our GitHub repository.

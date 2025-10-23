# Adaire Blocks

A powerful WordPress plugin that helps developers and designers create visually stunning, high-performance websites with ease right inside the Gutenberg editor.

## Features

Adaire Blocks is a comprehensive WordPress plugin that provides a collection of custom Gutenberg blocks designed to create visually stunning, high-performance websites. Built with modern web technologies including GSAP, React, and optimized for performance.

### Available Blocks

- **Accordion Block** - Create collapsible content sections with smooth animations, customizable styling, and responsive design
- **Button Block** - Create customizable buttons with hover animations, multiple styles, and advanced styling options
- **Call to Action Block** - Build powerful call-to-action sections with animated carousels and gradient backgrounds
- **Container Block** - Create flexible layout containers with constrained/full-width options and responsive settings
- **CTA Block** - Build call-to-action sections with animated carousels and gradient backgrounds
- **Logos Block** - Display partner/client logos with customizable sliders, smooth animations, and responsive breakpoints
- **Particles Block** - Add dynamic particle effects with scroll-controlled animations and customizable positioning
- **Portfolio Block** - Showcase your work with elegant portfolio layouts, gallery modals, and GSAP animations
- **Posts Grid Block** - Display WordPress posts in beautiful grid layouts with filtering, pagination, and FLIP animations
- **Project Block** - Highlight your projects with interactive showcases, particle effects, and dynamic content
- **Questions Block** - Create animated FAQ sections with GSAP pinning and smooth transitions
- **Scroll Text Block** - Add scroll-triggered text animations with customizable speed and direction
- **Services Block** - Display your services with interactive carousel layouts, scroll-triggered animations, and smooth transitions
- **Tabs Block** - Create tabbed content sections with smooth GSAP animations, vertical/horizontal layouts, and customizable styling
- **Testimonial Block** - Showcase client testimonials with customizable carousels and professional layouts
- **Video Hero Block** - Create stunning video hero sections with YouTube/Vimeo integration, smooth transitions, and customizable overlays

## Technical Features

- **Modern Stack**: Built with JavaScript (ES6+), React, and GSAP 3.13.0
- **Performance Optimized**: Efficient block registration using WordPress 6.7+ metadata collection
- **Compatibility**: WordPress 6.7+ and PHP 7.4+
- **Animation Libraries**: GSAP, Split-Type, Swiper, Splide
- **API Integration**: REST API integration for dynamic content
- **Smooth Scrolling**: Locomotive Scroll support for enhanced user experience
- **Responsive Design**: Mobile-first approach with touch-friendly interactions
- **Open Source**: GPL-3.0 licensed for maximum flexibility

## Animation & Interaction Features

- GSAP-powered animations with scroll triggers
- Smooth transitions and micro-interactions
- Customizable animation speeds and easing
- Scroll-controlled particle effects
- Interactive carousels and sliders
- Video integration with YouTube and Vimeo
- Advanced hover effects and transitions

## Installation

1. Upload the plugin files to the `/wp-content/plugins/adaire-blocks` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Start using the custom blocks in the Gutenberg editor
4. Configure block settings through the block editor sidebar

## Usage

Once activated, you'll find all Adaire Blocks in the Gutenberg block inserter under their respective categories:

- **Media**: Video Hero Block, Logos Block
- **Design**: Container Block, Accordion Block, Tabs Block
- **Widgets**: Portfolio, Services, Project, Questions, Scroll Text, Particles, Button, CTA, Call to Action, Testimonial, Posts Grid
- **Text**: Scroll Text Block

Each block comes with extensive customization options accessible through the block editor sidebar, including:

- Colors and typography
- Animation settings
- Layout options
- Responsive controls
- Advanced styling

## Requirements

- **WordPress**: 6.7 or higher
- **PHP**: 7.4 or higher
- **Browser**: Modern browsers with JavaScript enabled

## Mobile Support

All blocks are fully responsive and optimized for mobile devices with:

- Touch-friendly interactions
- Optimized animations for mobile performance
- Responsive typography and layouts
- Mobile-specific customization options

## Performance

The plugin is optimized for performance with:

- Efficient block registration
- Lazy loading of animation scripts
- Hardware-accelerated GSAP animations
- Minimal impact on page load times
- Optimized asset loading

## Customization

### Block Editor Settings
Each block includes comprehensive settings panels for:
- Colors and backgrounds
- Typography and fonts
- Animation speeds and effects
- Layout and spacing
- Responsive breakpoints

### Advanced CSS Customization
For advanced users, all blocks can be further customized through CSS:
- Custom CSS classes
- CSS custom properties (variables)
- Theme integration
- Child theme compatibility

## Multiple Instances

Each block instance is independent and can be customized separately through unique block IDs, allowing you to:
- Use the same block multiple times on a page
- Customize each instance differently
- Maintain consistent styling across instances
- Create complex layouts with multiple block types

## Support

### Frequently Asked Questions

**Q: What WordPress version is required?**
A: This plugin requires WordPress 6.7 or higher and PHP 7.4 or higher.

**Q: Are the blocks compatible with all themes?**
A: The blocks are designed to work with most modern WordPress themes. They use standard WordPress styling and can be customized to match your theme's design through the block editor settings.

**Q: Can I customize the animations and styles?**
A: Yes, all blocks include extensive customization options in the block editor, including colors, fonts, animation speeds, and layout settings. Advanced users can further customize through CSS.

**Q: Is GSAP included with the plugin?**
A: Yes, the plugin includes GSAP 3.13.0 for animations. All animation functionality is built-in and ready to use.

**Q: Do the blocks work on mobile devices?**
A: Yes, all blocks are fully responsive and optimized for mobile devices with touch-friendly interactions.

**Q: Can I use multiple instances of the same block?**
A: Yes, each block instance is independent and can be customized separately through unique block IDs.

**Q: Are there any performance considerations?**
A: The plugin is optimized for performance with efficient block registration and lazy loading of animation scripts. GSAP animations are hardware-accelerated for smooth performance.

## Changelog

### Version 1.1.2 =
* **Added** Complete custom SVG icon system with React component integration
* **Added** Automatic icon synchronization between icon components and WordPress block registration
* **Added** Enhanced admin page icon display with actual custom SVG icons instead of dashicons
* **Added** Streamlined build process with optimized icon handling
* **Added** Comprehensive icon documentation and developer guides
* **Added** New NPM script `update-icons` for manual icon updates
* **Added** Production-ready icon workflow for both development and production environments
* **Improved** Developer experience with clear icon component templates and workflow
* **Improved** Icon consistency across WordPress editor and admin interfaces
* **Improved** Build performance by removing redundant icon processing steps
* **Fixed** Icon display issues in block management admin page
* **Updated** All existing blocks with new custom SVG icon system

### Version 1.1.1 =
* **Added** Complete License Activation System with external API integration
* **Added** License validation, activation, and deactivation functionality
* **Added** License admin page under Adaire Blocks menu
* **Added** Automatic license status checking and premium feature management
* **Added** Database integration with automatic table creation
* **Added** Token-based activation system with secure storage
* **Added** Dynamic license limits based on license type
* **Added** Auto-deactivation when license reaches maximum activations
* **Added** Comprehensive error handling and logging for debugging
* **Added** Real-time license status display with activation counts

### Version 1.1.0 =
* **Added** Counter Block with animated counting effects and customizable styling
* **Added** counter direction (count up or count down)
* **Added** prefix and suffix support for counter numbers
* **Added** caption support with top/bottom positioning
* **Added** comprehensive typography controls (font size, weight, letter spacing)
* **Added** color controls for counter and caption
* **Added** responsive container settings with device-specific max-widths
* **Added** live animation preview in WordPress editor
* **Implemented** dynamic block rendering for Counter Block
* **Added** custom icon support for blocks

### Version 1.0.9
- **Added:** Block Migration Tool for automated block updates and validation fixes
- **Added:** Migration admin page under Adaire Blocks menu
- **Feature:** Batch-update all posts and pages with Adaire Blocks
- **Feature:** Real-time progress tracking with visual indicators
- **Feature:** Detailed migration logs with timestamps
- **Feature:** Automatic validation error recovery
- **Feature:** Safe cancellation and timeout protection
- **Improvement:** Hidden iframe-based migration for proper editor context
- **Security:** Nonce-protected AJAX endpoints and capability checks
- **UX:** Professional admin interface with progress bar and color-coded logs

## This is an Alpha
- This plugin is in alpha stage and is still in active development. Some features may update and unexpeted issues may occur.
- We encourage developers to experiement and play around.
- Feedback is welcome, as this will help improve the plugin.
- No support is provided at this stage.

## License

This plugin is licensed under the GPL-3.0 License.

The GPL-3.0 is a free and open-source software license created by the Free Software Foundation.
It ensures users have the freedom to use, study, share, and modify the software.

see the [LICENSE](https://www.gnu.org/licenses/gpl-2.0.html) file for details. 

**Made with ❤️ by Adaire Digital**

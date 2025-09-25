<?php
// This file is generated. Do not modify it manually.
return array(
	'button-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/button-block',
		'version' => '0.1.0',
		'title' => 'Button Block',
		'category' => 'widgets',
		'icon' => 'button',
		'description' => 'A simple button block with customizable text, link, and target options.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'button-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			'buttonText' => array(
				'type' => 'string',
				'default' => 'Click Here'
			),
			'buttonLink' => array(
				'type' => 'string',
				'default' => '#'
			),
			'openInNewTab' => array(
				'type' => 'boolean',
				'default' => false
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'buttonColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'buttonBackgroundColor' => array(
				'type' => 'string',
				'default' => 'transparent'
			),
			'buttonHoverColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'buttonHoverBackgroundColor' => array(
				'type' => 'string',
				'default' => 'transparent'
			),
			'buttonStyle' => array(
				'type' => 'string',
				'default' => 'underline'
			),
			'underlineColor' => array(
				'type' => 'string',
				'default' => '#ff4242'
			),
			'blurAmount' => array(
				'type' => 'number',
				'default' => 0
			),
			'fontSize' => array(
				'type' => 'number',
				'default' => 18
			),
			'showIcon' => array(
				'type' => 'boolean',
				'default' => true
			),
			'hoverAnimation' => array(
				'type' => 'string',
				'default' => 'slide-underline'
			),
			'buttonPadding' => array(
				'type' => 'string',
				'default' => '0.2em 0'
			),
			'buttonMargin' => array(
				'type' => 'string',
				'default' => '20px 0'
			),
			'zIndex' => array(
				'type' => 'number',
				'default' => 1
			),
			'borderRadius' => array(
				'type' => 'number',
				'default' => 0
			),
			'fontWeight' => array(
				'type' => 'string',
				'default' => '500'
			)
		)
	),
	'cta-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/cta-block',
		'version' => '0.1.0',
		'title' => 'CTA Block',
		'category' => 'widgets',
		'icon' => 'megaphone',
		'description' => 'A call-to-action block with animated carousel and glowing gradient background.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => true,
			'alignWide' => true,
			'anchor' => true,
			'customClassName' => true,
			'reusable' => true
		),
		'textdomain' => 'cta-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'mainTitle' => array(
				'type' => 'string',
				'default' => 'Adaire Blocks'
			),
			'subtitle' => array(
				'type' => 'string',
				'default' => 'Coming soon! Sign up for our Preview'
			),
			'carouselItems' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'title' => 'Amazing Animations for Gutenberg!',
						'description' => 'Bring your WordPress site to life with stunning GSAP-powered animations that work seamlessly with the Gutenberg editor.',
						'imageUrl' => '',
						'imageId' => 0
					),
					array(
						'id' => 2,
						'title' => 'Avoid exorbitant monthly fees',
						'description' => 'One-time purchase with lifetime updates. No recurring subscriptions or hidden costs.',
						'imageUrl' => '',
						'imageId' => 0
					),
					array(
						'id' => 3,
						'title' => 'Production‑ready React blocks with GSAP',
						'description' => 'Professional-grade blocks built with React and GSAP for smooth, performant animations.',
						'imageUrl' => '',
						'imageId' => 0
					),
					array(
						'id' => 4,
						'title' => 'Animate heroes, portfolios, and text',
						'description' => 'Create engaging hero sections, interactive portfolios, and dynamic text animations with ease.',
						'imageUrl' => '',
						'imageId' => 0
					),
					array(
						'id' => 5,
						'title' => 'No custom code required.',
						'description' => 'Everything you need is built-in. Just drag, drop, and customize through the intuitive interface.',
						'imageUrl' => '',
						'imageId' => 0
					)
				)
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#1a1a1a'
			),
			'gradientColor1' => array(
				'type' => 'string',
				'default' => '#ff4444'
			),
			'gradientColor2' => array(
				'type' => 'string',
				'default' => '#ff6666'
			),
			'gradientOpacity' => array(
				'type' => 'number',
				'default' => 0.1
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'titleColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'subtitleColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'titleFontSize' => array(
				'type' => 'number',
				'default' => 48
			),
			'subtitleFontSize' => array(
				'type' => 'number',
				'default' => 24
			),
			'carouselFontSize' => array(
				'type' => 'number',
				'default' => 20
			),
			'titleFontWeight' => array(
				'type' => 'string',
				'default' => '700'
			),
			'descriptionFontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'mainTitleFontWeight' => array(
				'type' => 'string',
				'default' => '700'
			),
			'subtitleFontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'animationSpeed' => array(
				'type' => 'number',
				'default' => 1
			),
			'carouselSpeed' => array(
				'type' => 'number',
				'default' => 3000
			),
			'autoplay' => array(
				'type' => 'boolean',
				'default' => true
			),
			'autoplayDelay' => array(
				'type' => 'number',
				'default' => 4000
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			)
		)
	),
	'logos-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/logos-block',
		'version' => '0.1.0',
		'title' => 'Logos Block',
		'category' => 'media',
		'icon' => 'grid-view',
		'description' => 'A Logos Block with customizable title and partner logos slider',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => true,
			'alignWide' => true,
			'anchor' => true,
			'customClassName' => true,
			'reusable' => true
		),
		'textdomain' => 'logos-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'partnerLogos' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'companyName' => 'Company 1',
						'imageUrl' => '',
						'imageId' => 0
					),
					array(
						'id' => 2,
						'companyName' => 'Company 2',
						'imageUrl' => '',
						'imageId' => 0
					),
					array(
						'id' => 3,
						'companyName' => 'Company 3',
						'imageUrl' => '',
						'imageId' => 0
					),
					array(
						'id' => 4,
						'companyName' => 'Company 4',
						'imageUrl' => '',
						'imageId' => 0
					)
				)
			),
			'sliderSpeed' => array(
				'type' => 'number',
				'default' => 0.5
			),
			'slidesPerView' => array(
				'type' => 'number',
				'default' => 4
			),
			'gap' => array(
				'type' => 'string',
				'default' => '1rem'
			),
			'pauseOnHover' => array(
				'type' => 'boolean',
				'default' => true
			),
			'logoHeight' => array(
				'type' => 'number',
				'default' => 60
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'titleText' => array(
				'type' => 'string',
				'default' => 'Our Partners'
			),
			'titleFontSize' => array(
				'type' => 'number',
				'default' => 24
			),
			'titleFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'titleColor' => array(
				'type' => 'string',
				'default' => '#333333'
			),
			'titlePaddingTop' => array(
				'type' => 'number',
				'default' => 20
			),
			'titlePaddingBottom' => array(
				'type' => 'number',
				'default' => 30
			),
			'blockPaddingTop' => array(
				'type' => 'number',
				'default' => 40
			),
			'blockPaddingBottom' => array(
				'type' => 'number',
				'default' => 40
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			)
		)
	),
	'particles-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/particles-block',
		'version' => '0.1.0',
		'title' => 'Particles Block',
		'category' => 'widgets',
		'icon' => 'admin-generic',
		'description' => 'A section with scattered images that move with scroll using GSAP.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'particles-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'sectionHeight' => array(
				'type' => 'number',
				'default' => 950
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#0a0a0a'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'textContent' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'title' => 'Meet the Team',
						'description' => 'We’re a passionate team of creatives and technologists dedicated to crafting meaningful digital experiences that drive results.'
					),
					array(
						'id' => 1,
						'title' => 'Luthando',
						'description' => 'Web Dev Lead'
					),
					array(
						'id' => 2,
						'title' => 'Reinhold',
						'description' => 'Project Manager'
					),
					array(
						'id' => 3,
						'title' => 'Daryn',
						'description' => 'Project Manager'
					),
					array(
						'id' => 4,
						'title' => 'Hilya',
						'description' => 'Web Developer (WordPress, Bubble)'
					),
					array(
						'id' => 5,
						'title' => 'Patrick',
						'description' => 'Web Developer (WordPress, Bubble)'
					),
					array(
						'id' => 6,
						'title' => 'Douglas',
						'description' => 'Web Developer (WordPress, Custom)'
					),
					array(
						'id' => 7,
						'title' => 'Marvel',
						'description' => 'QA Tester'
					),
					array(
						'id' => 8,
						'title' => 'Gideon',
						'description' => 'Designer'
					)
				)
			),
			'particles' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'imageUrl' => '',
						'x' => 20,
						'y' => 2,
						'size' => 200,
						'mobileSize' => 100,
						'speed' => 2,
						'animationEnabled' => true,
						'type' => 'normal'
					),
					array(
						'id' => 2,
						'imageUrl' => '',
						'x' => 86,
						'y' => 3,
						'size' => 160,
						'mobileSize' => 80,
						'speed' => 0.3,
						'animationEnabled' => true,
						'type' => 'normal'
					),
					array(
						'id' => 3,
						'imageUrl' => '',
						'x' => 76,
						'y' => 8,
						'size' => 185,
						'mobileSize' => 80,
						'speed' => 2,
						'animationEnabled' => true,
						'type' => 'normal'
					),
					array(
						'id' => 4,
						'imageUrl' => '',
						'x' => 14,
						'y' => 6,
						'size' => 175,
						'mobileSize' => 80,
						'speed' => 1.5,
						'animationEnabled' => true,
						'type' => 'normal'
					),
					array(
						'id' => 5,
						'imageUrl' => '',
						'x' => 61,
						'y' => 2,
						'size' => 145,
						'mobileSize' => 80,
						'speed' => 2,
						'animationEnabled' => true,
						'type' => 'normal'
					),
					array(
						'id' => 6,
						'imageUrl' => '',
						'x' => 49,
						'y' => 6,
						'size' => 150,
						'mobileSize' => 100,
						'speed' => 1.5,
						'animationEnabled' => true,
						'type' => 'normal'
					),
					array(
						'id' => 7,
						'imageUrl' => '',
						'x' => 38,
						'y' => 10,
						'size' => 160,
						'mobileSize' => 100,
						'speed' => 2,
						'animationEnabled' => true,
						'type' => 'normal'
					),
					array(
						'id' => 8,
						'imageUrl' => '',
						'x' => 70,
						'y' => 17,
						'size' => 420,
						'mobileSize' => 180,
						'speed' => 0,
						'animationEnabled' => false,
						'type' => 'dynamic'
					),
					array(
						'id' => 9,
						'imageUrl' => '',
						'x' => 70,
						'y' => 28,
						'size' => 420,
						'mobileSize' => 180,
						'speed' => 0,
						'animationEnabled' => false,
						'type' => 'dynamic'
					),
					array(
						'id' => 10,
						'imageUrl' => '',
						'x' => 70,
						'y' => 39,
						'size' => 420,
						'mobileSize' => 180,
						'speed' => 0,
						'animationEnabled' => false,
						'type' => 'dynamic'
					),
					array(
						'id' => 11,
						'imageUrl' => '',
						'x' => 70,
						'y' => 50,
						'size' => 420,
						'mobileSize' => 180,
						'speed' => 0,
						'animationEnabled' => false,
						'type' => 'dynamic'
					),
					array(
						'id' => 12,
						'imageUrl' => '',
						'x' => 70,
						'y' => 61,
						'size' => 420,
						'mobileSize' => 180,
						'speed' => 0,
						'animationEnabled' => false,
						'type' => 'dynamic'
					),
					array(
						'id' => 13,
						'imageUrl' => '',
						'x' => 70,
						'y' => 83,
						'size' => 420,
						'mobileSize' => 180,
						'speed' => 0,
						'animationEnabled' => false,
						'type' => 'dynamic'
					),
					array(
						'id' => 14,
						'imageUrl' => '',
						'x' => 70,
						'y' => 94,
						'size' => 420,
						'mobileSize' => 180,
						'speed' => 0,
						'animationEnabled' => false,
						'type' => 'dynamic'
					)
				)
			),
			'titleFontSize' => array(
				'type' => 'number',
				'default' => 65
			),
			'titleFontFamily' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'textFontSize' => array(
				'type' => 'number',
				'default' => 22
			),
			'textFontFamily' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'titleFontWeight' => array(
				'type' => 'string',
				'default' => 'normal'
			),
			'textFontWeight' => array(
				'type' => 'string',
				'default' => 'normal'
			),
			'titleMarginTop' => array(
				'type' => 'number',
				'default' => 0
			),
			'titleMarginBottom' => array(
				'type' => 'number',
				'default' => 1
			),
			'textMarginTop' => array(
				'type' => 'number',
				'default' => 0
			),
			'textMarginBottom' => array(
				'type' => 'number',
				'default' => 0
			),
			'gradientOverlay' => array(
				'type' => 'object',
				'default' => array(
					'startColor' => '#000000',
					'endColor' => '#000000',
					'startOpacity' => 0.8,
					'endOpacity' => 0.4,
					'direction' => 'to bottom',
					'angle' => 0,
					'startStop' => 46,
					'endStop' => 100
				)
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			)
		)
	),
	'portfolio-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/portfolio-block',
		'version' => '0.1.0',
		'title' => 'Portfolio Block',
		'category' => 'widgets',
		'icon' => 'admin-generic',
		'description' => 'A portfolio section with gallery and modal slider using GSAP animations.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => true,
			'alignWide' => true,
			'anchor' => true,
			'customClassName' => true,
			'reusable' => true
		),
		'textdomain' => 'portfolio-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'agencyTitle' => array(
				'type' => 'string',
				'default' => 'Our Work'
			),
			'agencyDescription' => array(
				'type' => 'string',
				'default' => 'We\'ve collaborated with innovative brands and startups to create compelling visual narratives that drive engagement and deliver results. Our portfolio showcases our expertise in branding, digital design, and creative storytelling.'
			),
			'ctaButtonText' => array(
				'type' => 'string',
				'default' => 'View Full Portfolio'
			),
			'slides' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'slideTitle' => 'Startup Nights',
						'slideDescription' => 'Startup Nights is Switzerland’s leading startup event, held annually in Winterthur. Since launching in 2017, it has grown into a major two-day gathering that brings together over 8,500 founders, investors, and innovators.',
						'slideUrl' => 'https://adaire.dev/ad/startup-nights/',
						'slideTags' => array(
							'Startup Ecosystem',
							'Tech Conference',
							'Networking Platform',
							'Entrepreneurial Innovation'
						),
						'slideImg' => '',
						'slideImgId' => 0
					),
					array(
						'id' => 2,
						'slideTitle' => 'APST Research',
						'slideDescription' => 'A medical research company that focuses on improving the prognosis for patients afflicted with ALS/Lou Gehrig’s disease.',
						'slideUrl' => 'https://adaire.dev/ad/apst',
						'slideTags' => array(
							'ALS Prognostic Platform',
							'Medical Data Analytics',
							'Blood Test Integration',
							'Secure Patient Portal'
						),
						'slideImg' => '',
						'slideImgId' => 0
					),
					array(
						'id' => 3,
						'slideTitle' => 'Future Tree',
						'slideDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit accusantium consequatur alias sequi tenetur ratione odio quis vitae ab id dolores quas quidem ipsam nesciunt, quam sed minus nihil molestiae?',
						'slideUrl' => 'https://link.com',
						'slideTags' => array(
							'Monochrome',
							'Editorial',
							'Fashion',
							'Visual Identity'
						),
						'slideImg' => '',
						'slideImgId' => 0
					),
					array(
						'id' => 4,
						'slideTitle' => 'Physio und Sport',
						'slideDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit accusantium consequatur alias sequi tenetur ratione odio quis vitae ab id dolores quas quidem ipsam nesciunt, quam sed minus nihil molestiae?',
						'slideUrl' => 'https://link.com',
						'slideTags' => array(
							'Monochrome',
							'Editorial',
							'Fashion',
							'Visual Identity'
						),
						'slideImg' => '',
						'slideImgId' => 0
					)
				)
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#667eea'
			),
			'gradientType' => array(
				'type' => 'string',
				'default' => 'linear'
			),
			'gradientAngle' => array(
				'type' => 'number',
				'default' => 135
			),
			'gradientColor1' => array(
				'type' => 'string',
				'default' => '#667eea'
			),
			'gradientColor2' => array(
				'type' => 'string',
				'default' => '#764ba2'
			),
			'gradientColor3' => array(
				'type' => 'string',
				'default' => ''
			),
			'gradientStop1' => array(
				'type' => 'number',
				'default' => 0
			),
			'gradientStop2' => array(
				'type' => 'number',
				'default' => 100
			),
			'gradientStop3' => array(
				'type' => 'number',
				'default' => 50
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'titleFontSize' => array(
				'type' => 'number',
				'default' => 40
			),
			'titleFontFamily' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'textFontSize' => array(
				'type' => 'number',
				'default' => 18
			),
			'textFontFamily' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'slideTitleFontSize' => array(
				'type' => 'number',
				'default' => 112
			),
			'slideDescriptionFontSize' => array(
				'type' => 'number',
				'default' => 20
			),
			'slideTagFontSize' => array(
				'type' => 'number',
				'default' => 20
			),
			'buttonColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'buttonBackgroundColor' => array(
				'type' => 'string',
				'default' => 'transparent'
			),
			'buttonHoverColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'buttonHoverBackgroundColor' => array(
				'type' => 'string',
				'default' => 'transparent'
			),
			'buttonStyle' => array(
				'type' => 'string',
				'default' => 'underline'
			),
			'underlineColor' => array(
				'type' => 'string',
				'default' => '#ff4242'
			),
			'blurAmount' => array(
				'type' => 'number',
				'default' => 0
			),
			'fontSize' => array(
				'type' => 'number',
				'default' => 18
			),
			'showIcon' => array(
				'type' => 'boolean',
				'default' => true
			),
			'hoverAnimation' => array(
				'type' => 'string',
				'default' => 'slide-underline'
			),
			'buttonPadding' => array(
				'type' => 'string',
				'default' => '0.2em 0'
			),
			'buttonMargin' => array(
				'type' => 'string',
				'default' => '20px 0'
			),
			'zIndex' => array(
				'type' => 'number',
				'default' => 1
			),
			'borderRadius' => array(
				'type' => 'number',
				'default' => 0
			),
			'fontWeight' => array(
				'type' => 'string',
				'default' => '500'
			)
		)
	),
	'project-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/project-block',
		'version' => '0.1.0',
		'title' => 'Project Block',
		'category' => 'widgets',
		'icon' => 'admin-generic',
		'description' => 'A section with a project preview and a gallery of images.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'project-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'sectionHeight' => array(
				'type' => 'number',
				'default' => 100
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#0a0a0a'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'textContent' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'title' => 'Block Design.',
						'description' => 'Blocks don\'t have to be boring. Create your own designs that\'ll benefit your user\'s experience.'
					),
					array(
						'id' => 2,
						'title' => 'Reusable Components',
						'description' => 'When developed into blocks they can be used over and over, saving precious design time.'
					),
					array(
						'id' => 3,
						'title' => 'Great Design Work',
						'description' => 'Making the most of your great design work and creating amazing user experiences.'
					)
				)
			),
			'particles' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'imageUrl' => '',
						'x' => 20,
						'y' => 30,
						'size' => 60,
						'speed' => 0.5
					),
					array(
						'id' => 2,
						'imageUrl' => '',
						'x' => 70,
						'y' => 60,
						'size' => 80,
						'speed' => 0.3
					),
					array(
						'id' => 3,
						'imageUrl' => '',
						'x' => 40,
						'y' => 80,
						'size' => 50,
						'speed' => 0.7
					)
				)
			),
			'titleFontSize' => array(
				'type' => 'number',
				'default' => 40
			),
			'titleFontFamily' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'textFontSize' => array(
				'type' => 'number',
				'default' => 18
			),
			'textFontFamily' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'galleryItems' => array(
				'type' => 'array',
				'default' => array(
					array(
						'title' => 'Patient Portal',
						'copy' => 'A secure, user-friendly patient portal where individuals can create accounts, manage their personal information, and access their confidential NFL lab results. The platform ensures HIPAA compliance while providing easy access to critical health data.',
						'img' => ''
					)
				)
			),
			'companyName' => array(
				'type' => 'string',
				'default' => 'APST Research'
			),
			'companyDescription' => array(
				'type' => 'string',
				'default' => 'A medical research company that focuses on improving the prognosis for patients afflicted with ALS/Lou Gehrig’s disease.'
			),
			'client' => array(
				'type' => 'string',
				'default' => 'APST/Ambulanzpartner'
			),
			'country' => array(
				'type' => 'string',
				'default' => 'Germany'
			),
			'industry' => array(
				'type' => 'string',
				'default' => 'Medical Research'
			),
			'language' => array(
				'type' => 'string',
				'default' => 'German/English'
			),
			'technology' => array(
				'type' => 'string',
				'default' => 'Docker, Node, React, Python, Django, Azure Cloud'
			),
			'siteUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			)
		)
	),
	'questions-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/questions-block',
		'version' => '0.1.0',
		'title' => 'Questions Block',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Animated questions section with GSAP pinning and transitions.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'questions-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'question1Title' => array(
				'type' => 'string',
				'default' => 'Who?'
			),
			'question1Content' => array(
				'type' => 'string',
				'default' => 'Who is Adaire Digital? Adaire Digital is your white-label web developer. Need a site? No problem.'
			),
			'question2Title' => array(
				'type' => 'string',
				'default' => 'You?'
			),
			'question2Content' => array(
				'type' => 'string',
				'default' => 'Are you an agency keen to expand your team without hiring; Are you a company who needs to bring additional web talent into your team; Are you an individual looking to have your own team to start or elevate your online presence, we would love to work with you! Companies: Ensure your site or eCommerce site is always up to date and ready for visitors. Individuals: If you need an online presence, we can help'
			),
			'question3Title' => array(
				'type' => 'string',
				'default' => 'What?'
			),
			'question3Content' => array(
				'type' => 'string',
				'default' => 'What do we do? We are web experts doing all things digital web.'
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#070707'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'titleColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'inactiveTitleColor' => array(
				'type' => 'string',
				'default' => '#666666'
			),
			'activeSection' => array(
				'type' => 'string',
				'default' => 'what'
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			)
		)
	),
	'scroll-text-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/scroll-text-block',
		'version' => '0.1.0',
		'title' => 'Scroll Text',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'A scroll-triggered text animation block using GSAP.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'scroll-text-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'heroText' => array(
				'type' => 'string',
				'default' => 'Hello from Adaire x GSAP!'
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'fontSize' => array(
				'type' => 'number',
				'default' => 32
			),
			'fontSizeUnit' => array(
				'type' => 'string',
				'default' => 'px'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'animationSpeed' => array(
				'type' => 'number',
				'default' => 1
			),
			'scrollDirection' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'marginTop' => array(
				'type' => 'number',
				'default' => 0
			),
			'marginBottom' => array(
				'type' => 'number',
				'default' => 0
			),
			'marginLeft' => array(
				'type' => 'number',
				'default' => 0
			),
			'marginRight' => array(
				'type' => 'number',
				'default' => 0
			),
			'paddingTop' => array(
				'type' => 'number',
				'default' => 0
			),
			'paddingBottom' => array(
				'type' => 'number',
				'default' => 0
			),
			'paddingLeft' => array(
				'type' => 'number',
				'default' => 0
			),
			'paddingRight' => array(
				'type' => 'number',
				'default' => 0
			),
			'fontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'backgroundColorOpacity' => array(
				'type' => 'number',
				'default' => 1
			),
			'containerWidth' => array(
				'type' => 'number',
				'default' => 100
			),
			'containerWidthUnit' => array(
				'type' => 'string',
				'default' => 'vw'
			),
			'containerHeight' => array(
				'type' => 'number',
				'default' => 100
			),
			'containerHeightUnit' => array(
				'type' => 'string',
				'default' => 'vh'
			),
			'pinHeight' => array(
				'type' => 'number',
				'default' => 100
			),
			'pinHeightUnit' => array(
				'type' => 'string',
				'default' => 'vh'
			)
		)
	),
	'services-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/services-block',
		'version' => '0.1.0',
		'title' => 'Services Block',
		'category' => 'widgets',
		'icon' => 'admin-generic',
		'description' => 'A section with services that move with scroll using GSAP.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => true,
			'alignWide' => true,
			'anchor' => true,
			'customClassName' => true,
			'reusable' => true
		),
		'textdomain' => 'services-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'agencyTitle' => array(
				'type' => 'string',
				'default' => 'Our Work'
			),
			'agencyDescription' => array(
				'type' => 'string',
				'default' => 'We\'ve collaborated with innovative brands and startups to create compelling visual narratives that drive engagement and deliver results. Our portfolio showcases our expertise in branding, digital design, and creative storytelling.'
			),
			'ctaButtonText' => array(
				'type' => 'string',
				'default' => 'View Full Portfolio'
			),
			'slides' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'slideTitle' => 'Digital Innovation',
						'slideDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit accusantium consequatur alias sequi tenetur ratione odio quis vitae ab id dolores quas quidem ipsam nesciunt, quam sed minus nihil molestiae?',
						'slideUrl' => 'https://link.com',
						'slideTags' => array(
							'Digital',
							'Innovation',
							'Technology',
							'Design'
						),
						'slideImg' => '',
						'slideImgId' => 0
					),
					array(
						'id' => 2,
						'slideTitle' => 'Startup Nights',
						'slideDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit accusantium consequatur alias sequi tenetur ratione odio quis vitae ab id dolores quas quidem ipsam nesciunt, quam sed minus nihil molestiae?',
						'slideUrl' => 'https://link.com',
						'slideTags' => array(
							'Client 1',
							'Editorial',
							'Fashion',
							'Visual Identity'
						),
						'slideImg' => '',
						'slideImgId' => 0
					),
					array(
						'id' => 3,
						'slideTitle' => 'APST Research',
						'slideDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit accusantium consequatur alias sequi tenetur ratione odio quis vitae ab id dolores quas quidem ipsam nesciunt, quam sed minus nihil molestiae?',
						'slideUrl' => 'https://link.com',
						'slideTags' => array(
							'Monochrome',
							'Editorial',
							'Fashion',
							'Visual Identity'
						),
						'slideImg' => '',
						'slideImgId' => 0
					),
					array(
						'id' => 4,
						'slideTitle' => 'Future Tree',
						'slideDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit accusantium consequatur alias sequi tenetur ratione odio quis vitae ab id dolores quas quidem ipsam nesciunt, quam sed minus nihil molestiae?',
						'slideUrl' => 'https://link.com',
						'slideTags' => array(
							'Monochrome',
							'Editorial',
							'Fashion',
							'Visual Identity'
						),
						'slideImg' => '',
						'slideImgId' => 0
					),
					array(
						'id' => 5,
						'slideTitle' => 'Physio Und Sport',
						'slideDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit accusantium consequatur alias sequi tenetur ratione odio quis vitae ab id dolores quas quidem ipsam nesciunt, quam sed minus nihil molestiae?',
						'slideUrl' => 'https://link.com',
						'slideTags' => array(
							'Monochrome',
							'Editorial',
							'Fashion',
							'Visual Identity'
						),
						'slideImg' => '',
						'slideImgId' => 0
					)
				)
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)'
			),
			'gradientType' => array(
				'type' => 'string',
				'default' => 'linear'
			),
			'gradientAngle' => array(
				'type' => 'number',
				'default' => 135
			),
			'gradientColor1' => array(
				'type' => 'string',
				'default' => '#667eea'
			),
			'gradientColor2' => array(
				'type' => 'string',
				'default' => '#764ba2'
			),
			'gradientColor3' => array(
				'type' => 'string',
				'default' => ''
			),
			'gradientStop1' => array(
				'type' => 'number',
				'default' => 0
			),
			'gradientStop2' => array(
				'type' => 'number',
				'default' => 100
			),
			'gradientStop3' => array(
				'type' => 'number',
				'default' => 50
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'titleFontSize' => array(
				'type' => 'number',
				'default' => 40
			),
			'titleFontFamily' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'textFontSize' => array(
				'type' => 'number',
				'default' => 18
			),
			'textFontFamily' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'slideTitleFontSize' => array(
				'type' => 'number',
				'default' => 112
			),
			'slideDescriptionFontSize' => array(
				'type' => 'number',
				'default' => 20
			),
			'slideTagFontSize' => array(
				'type' => 'number',
				'default' => 20
			),
			'previewText' => array(
				'type' => 'string',
				'default' => 'We:'
			),
			'linkText' => array(
				'type' => 'string',
				'default' => 'Read More'
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'containerHeight' => array(
				'type' => 'number',
				'default' => 70
			),
			'containerHeightLargeDesktop' => array(
				'type' => 'number',
				'default' => 80
			),
			'containerHeightDesktop' => array(
				'type' => 'number',
				'default' => 70
			),
			'containerHeightSmallLaptop' => array(
				'type' => 'number',
				'default' => 65
			),
			'containerHeightTabLand' => array(
				'type' => 'number',
				'default' => 60
			),
			'containerHeightTabPort' => array(
				'type' => 'number',
				'default' => 55
			),
			'containerHeightPhone' => array(
				'type' => 'number',
				'default' => 50
			)
		)
	),
	'testimonial-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/testimonial-block',
		'version' => '0.1.0',
		'title' => 'Testimonial Block',
		'category' => 'text',
		'icon' => 'text',
		'description' => 'A testimonial block in a customizable carousel',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'testimonial-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'textColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'arrowColor' => array(
				'type' => 'string',
				'default' => '#ff0000'
			),
			'dotColor' => array(
				'type' => 'string',
				'default' => '#ff0000'
			),
			'fontSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'textToDisplay' => array(
				'type' => 'string',
				'default' => 'Hello World'
			),
			'slidesPerView' => array(
				'type' => 'number',
				'default' => 1
			),
			'slides' => array(
				'type' => 'number',
				'default' => 3
			),
			'spaceBetween' => array(
				'type' => 'number',
				'default' => 50
			),
			'gap' => array(
				'type' => 'number',
				'default' => 30
			),
			'logoSize' => array(
				'type' => 'number',
				'default' => 60
			),
			'loop' => array(
				'type' => 'boolean',
				'default' => true
			),
			'navigation' => array(
				'type' => 'boolean',
				'default' => true
			),
			'pagination' => array(
				'type' => 'boolean',
				'default' => true
			),
			'scrollbar' => array(
				'type' => 'boolean',
				'default' => false
			),
			'testimonials' => array(
				'type' => 'array',
				'default' => array(
					array(
						'companyName' => 'STATS PERFORM',
						'companyLogo' => 'https://via.placeholder.com/200x60/4F46E5/FFFFFF?text=STATS+PERFORM',
						'quote' => 'With an aggressive product development timeline, we needed a partner who had advanced mobile and machine-learning capabilities and could also match our pace.',
						'authorName' => 'Darryl Lewis',
						'authorTitle' => 'CTO of Stats Perform'
					),
					array(
						'companyName' => 'PEOPLEHOOD',
						'companyLogo' => 'https://via.placeholder.com/200x60/059669/FFFFFF?text=PEOPLEHOOD',
						'quote' => 'With Adaire, we created a seamless facilitator dashboard, and video platform that transformed our community engagement.',
						'authorName' => 'Rachel Link',
						'authorTitle' => 'COO & CFO of Peoplehood'
					),
					array(
						'companyName' => 'TECHNOLOGY CORP',
						'companyLogo' => 'https://via.placeholder.com/200x60/DC2626/FFFFFF?text=TECH+CORP',
						'quote' => 'Adaire delivered exceptional results and helped us roll them on the project. We ended up with a solution that exceeded our expectations.',
						'authorName' => 'John Smith',
						'authorTitle' => 'CEO of Technology Corp'
					),
					array(
						'companyName' => 'INNOVATION LABS',
						'companyLogo' => 'https://via.placeholder.com/200x60/7C3AED/FFFFFF?text=INNOVATION',
						'quote' => 'The team at Adaire understood our vision and brought it to life with cutting-edge technology and seamless user experience.',
						'authorName' => 'Sarah Johnson',
						'authorTitle' => 'CTO of Innovation Labs'
					),
					array(
						'companyName' => 'DIGITAL SOLUTIONS',
						'companyLogo' => 'https://via.placeholder.com/200x60/EA580C/FFFFFF?text=DIGITAL',
						'quote' => 'Working with Adaire was a game-changer for our business. Their expertise and dedication to quality is unmatched.',
						'authorName' => 'Michael Chen',
						'authorTitle' => 'Founder of Digital Solutions'
					)
				)
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'maxWidth' => array(
				'type' => 'number',
				'default' => 1200
			)
		)
	),
	'video-hero-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/video-hero-block',
		'version' => '0.1.0',
		'title' => 'Video Hero Slider',
		'category' => 'media',
		'icon' => 'video-alt3',
		'description' => 'A video slider with smooth transitions using YouTube/Vimeo videos.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => true,
			'alignWide' => true,
			'anchor' => true,
			'customClassName' => true,
			'reusable' => true
		),
		'textdomain' => 'video-hero-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'videos' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'title' => 'Premium whitelabel design',
						'description' => 'Watch this incredible video showcasing our latest work and creative process.',
						'videoUrl' => 'https://vimeo.com/1118056227',
						'videoType' => 'vimeo',
						'thumbnail' => '',
						'thumbnailId' => 0,
						'autoplay' => true,
						'muted' => true,
						'useImage' => false,
						'imageUrl' => '',
						'imageId' => 0
					),
					array(
						'id' => 2,
						'title' => 'Bring your ideas to life',
						'description' => 'Explore our creative journey and see how we bring ideas to life through innovative design.',
						'videoUrl' => 'https://youtu.be/iUtnZpzkbG8',
						'videoType' => 'youtube',
						'thumbnail' => '',
						'thumbnailId' => 0,
						'autoplay' => true,
						'muted' => true,
						'useImage' => false,
						'imageUrl' => '',
						'imageId' => 0
					),
					array(
						'id' => 3,
						'title' => 'Award Winning Design',
						'description' => 'Get an exclusive look behind the scenes of our creative process and team collaboration.',
						'videoUrl' => 'https://youtu.be/vhpOhHEhVOg',
						'videoType' => 'youtube',
						'thumbnail' => '',
						'thumbnailId' => 0,
						'autoplay' => true,
						'muted' => true,
						'useImage' => false,
						'imageUrl' => '',
						'imageId' => 0
					)
				)
			),
			'transitionDuration' => array(
				'type' => 'number',
				'default' => 8000
			),
			'autoPlay' => array(
				'type' => 'boolean',
				'default' => true
			),
			'showControls' => array(
				'type' => 'boolean',
				'default' => true
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'titleFontSize' => array(
				'type' => 'number',
				'default' => 48
			),
			'titleFontSizeUnit' => array(
				'type' => 'string',
				'default' => 'px'
			),
			'titleFontWeight' => array(
				'type' => 'string',
				'default' => '700'
			),
			'descriptionFontSize' => array(
				'type' => 'number',
				'default' => 18
			),
			'descriptionFontSizeUnit' => array(
				'type' => 'string',
				'default' => 'px'
			),
			'overlayOpacity' => array(
				'type' => 'number',
				'default' => 0.3
			),
			'navArrowLeftColor' => array(
				'type' => 'string',
				'default' => '#FFFFFF'
			),
			'navArrowLeftColorHover' => array(
				'type' => 'string',
				'default' => '#FFFFFF'
			),
			'navArrowRightColor' => array(
				'type' => 'string',
				'default' => '#FFFFFF'
			),
			'navArrowRightColorHover' => array(
				'type' => 'string',
				'default' => '#FFFFFF'
			),
			'navArrowLeftBgColor' => array(
				'type' => 'string',
				'default' => '#6D6D6D'
			),
			'navArrowLeftBgColorHover' => array(
				'type' => 'string',
				'default' => '#6D6D6D'
			),
			'navArrowRightBgColor' => array(
				'type' => 'string',
				'default' => '#6D6D6D'
			),
			'navArrowRightBgColorHover' => array(
				'type' => 'string',
				'default' => '#6D6D6D'
			),
			'navArrowLeftBgOpacity' => array(
				'type' => 'number',
				'default' => 0.1
			),
			'navArrowLeftBgOpacityHover' => array(
				'type' => 'number',
				'default' => 0.4
			),
			'navArrowRightBgOpacity' => array(
				'type' => 'number',
				'default' => 0.1
			),
			'navArrowRightBgOpacityHover' => array(
				'type' => 'number',
				'default' => 0.4
			),
			'navArrowLeftBgBlur' => array(
				'type' => 'number',
				'default' => 12
			),
			'navArrowLeftBgBlurHover' => array(
				'type' => 'number',
				'default' => 12
			),
			'navArrowRightBgBlur' => array(
				'type' => 'number',
				'default' => 12
			),
			'navArrowRightBgBlurHover' => array(
				'type' => 'number',
				'default' => 12
			),
			'titleScrollingGap' => array(
				'type' => 'number',
				'default' => 300
			),
			'titleScrollingGapTablet' => array(
				'type' => 'number',
				'default' => 200
			),
			'titleScrollingGapMobile' => array(
				'type' => 'number',
				'default' => 150
			),
			'titleScrollingSpeed' => array(
				'type' => 'number',
				'default' => 100
			),
			'titleFontSizeTablet' => array(
				'type' => 'number',
				'default' => 36
			),
			'titleFontSizeMobile' => array(
				'type' => 'number',
				'default' => 28
			),
			'descriptionFontSizeTablet' => array(
				'type' => 'number',
				'default' => 16
			),
			'descriptionFontSizeMobile' => array(
				'type' => 'number',
				'default' => 14
			),
			'overlayType' => array(
				'type' => 'string',
				'default' => 'solid'
			),
			'overlayGradientStart' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'overlayGradientEnd' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'overlayGradientDirection' => array(
				'type' => 'string',
				'default' => 'to bottom'
			),
			'overlayGradientStartOpacity' => array(
				'type' => 'number',
				'default' => 0.5
			),
			'overlayGradientEndOpacity' => array(
				'type' => 'number',
				'default' => 0.3
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			)
		)
	)
);

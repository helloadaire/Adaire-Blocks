<?php
// This file is generated. Do not modify it manually.
return array(
	'accordion-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/accordion-block',
		'version' => '0.1.0',
		'title' => 'Accordion',
		'category' => 'widgets',
		'description' => 'Configurable accordion with animations, colors, and typography.',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'accordion-block',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#fff" x="1" y="0.93" width="238" height="238" rx="3.87"/><path  fill="#d52940" d="M236.49,0H3.51A3.51,3.51,0,0,0,0,3.51v233A3.51,3.51,0,0,0,3.51,240h233a3.51,3.51,0,0,0,3.51-3.51V3.51A3.51,3.51,0,0,0,236.49,0Zm0,235.61a.89.89,0,0,1-.89.89H4.39a.89.89,0,0,1-.89-.89V4.39a.89.89,0,0,1,.89-.89H235.61a.89.89,0,0,1,.89.89Z"/><path  fill="#d52940" d="M153.21,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.53,2.53,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.48,2.48,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#d52940" d="M127.23,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.67-1.63l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.07,5a2.49,2.49,0,0,0-.73,2.22l.67,3.92-3.51-1.85a2.56,2.56,0,0,0-1.17-.29,2.53,2.53,0,0,0-1.17.29l-3.52,1.85.67-3.92a2.51,2.51,0,0,0-.72-2.22l-2.84-2.78,3.93-.57a2.51,2.51,0,0,0,1.89-1.37L118.42,33l1.75,3.56a2.53,2.53,0,0,0,1.9,1.37l3.93.57Z"/><path  fill="#d52940" d="M101.26,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75l4.52-2.38L97,49.44a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#d52940" d="M184.69,108.32H57.52a4.9,4.9,0,0,0-4.9,4.91v37.88a4.9,4.9,0,0,0,4.9,4.9H184.69a4.9,4.9,0,0,0,4.9-4.9V113.23A4.9,4.9,0,0,0,184.69,108.32Zm.84,42.41A1.23,1.23,0,0,1,184.3,152H57.91a1.24,1.24,0,0,1-1.24-1.24V113.6a1.25,1.25,0,0,1,1.24-1.24H184.3a1.24,1.24,0,0,1,1.23,1.24Z"/><rect  fill="#d52940" x="65.37" y="94.85" width="111.47" height="4.72" rx="2.36"/><rect  fill="#d52940" x="68.2" y="177.98" width="105.8" height="4.72" rx="2.36"/><rect  fill="#d52940" x="68.2" y="81.63" width="105.8" height="4.72" rx="2.36"/><rect  fill="#d52940" x="65.37" y="163.81" width="111.47" height="4.72" rx="2.36"/></g></svg>',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'items' => array(
				'type' => 'array',
				'default' => array(
					array(
						'title' => 'Accordion Item 1',
						'content' => 'Lorem ipsum dolor sit amet.',
						'open' => true
					)
				)
			),
			'titleColor' => array(
				'type' => 'string',
				'default' => '#1a1a1a'
			),
			'contentColor' => array(
				'type' => 'string',
				'default' => '#4a5568'
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'chevronColor' => array(
				'type' => 'string',
				'default' => '#4a5568'
			),
			'titleFontSize' => array(
				'type' => 'number',
				'default' => 20
			),
			'contentFontSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'gap' => array(
				'type' => 'number',
				'default' => 12
			),
			'radius' => array(
				'type' => 'number',
				'default' => 12
			),
			'padding' => array(
				'type' => 'number',
				'default' => 20
			),
			'animationDuration' => array(
				'type' => 'number',
				'default' => 300
			),
			'animationEasing' => array(
				'type' => 'string',
				'default' => 'ease'
			),
			'allowMultipleOpen' => array(
				'type' => 'boolean',
				'default' => false
			),
			'icon' => array(
				'type' => 'string',
				'default' => 'chevron-down'
			),
			'marginTop' => array(
				'type' => 'number',
				'default' => 0
			),
			'marginRight' => array(
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
			'marginHorizontal' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'titleFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'contentFontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'shadowIntensity' => array(
				'type' => 'number',
				'default' => 0.08
			),
			'contentBackgroundColor' => array(
				'type' => 'string',
				'default' => '#f8fafc'
			),
			'dividerColor' => array(
				'type' => 'string',
				'default' => '#e2e8f0'
			),
			'dividerThickness' => array(
				'type' => 'number',
				'default' => 1
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			)
		)
	),
	'animation-scroll-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/animation-scroll-block',
		'version' => '0.1.0',
		'title' => 'Animation on Scroll',
		'category' => 'widgets',
		'icon' => 'admin-settings',
		'description' => 'Add scroll animations to any content with inner blocks',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true,
			'innerBlocks' => true
		),
		'textdomain' => 'animation-scroll-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'animationType' => array(
				'type' => 'string',
				'default' => 'fade-in'
			),
			'animationDuration' => array(
				'type' => 'number',
				'default' => 1000
			),
			'animationDelay' => array(
				'type' => 'number',
				'default' => 0
			),
			'animationEasing' => array(
				'type' => 'string',
				'default' => 'ease-out'
			),
			'reverseOnScrollOut' => array(
				'type' => 'boolean',
				'default' => false
			),
			'animationDistance' => array(
				'type' => 'number',
				'default' => 50
			),
			'flipAxis' => array(
				'type' => 'string',
				'default' => 'horizontal'
			),
			'flipDirection' => array(
				'type' => 'string',
				'default' => 'clockwise'
			),
			'threshold' => array(
				'type' => 'number',
				'default' => 0.2
			),
			'once' => array(
				'type' => 'boolean',
				'default' => true
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'marginTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			)
		)
	),
	'button-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/button-block',
		'version' => '0.1.0',
		'title' => 'Button Block',
		'category' => 'widgets',
		'description' => 'A simple button block with customizable text, link, and target options.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'button-block',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#fff" x="1" y="0.93" width="238" height="238" rx="3.87"/><path  fill="#d52940" d="M236.49,0H3.51A3.51,3.51,0,0,0,0,3.51v233A3.51,3.51,0,0,0,3.51,240h233a3.51,3.51,0,0,0,3.51-3.51V3.51A3.51,3.51,0,0,0,236.49,0Zm0,235.61a.89.89,0,0,1-.89.89H4.39a.89.89,0,0,1-.89-.89V4.39a.89.89,0,0,1,.89-.89H235.61a.89.89,0,0,1,.89.89Z"/><path  fill="#d52940" d="M153.21,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.53,2.53,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.48,2.48,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#d52940" d="M127.23,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.67-1.63l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.07,5a2.49,2.49,0,0,0-.73,2.22l.67,3.92-3.51-1.85a2.56,2.56,0,0,0-1.17-.29,2.53,2.53,0,0,0-1.17.29l-3.52,1.85.67-3.92a2.51,2.51,0,0,0-.72-2.22l-2.84-2.78,3.93-.57a2.51,2.51,0,0,0,1.89-1.37L118.42,33l1.75,3.56a2.53,2.53,0,0,0,1.9,1.37l3.93.57Z"/><path  fill="#d52940" d="M101.26,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75l4.52-2.38L97,49.44a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#d52940" d="M194.36,142,177.67,136V105.54A7.58,7.58,0,0,0,170.1,98H61.77a7.58,7.58,0,0,0-7.57,7.57v38.23a7.58,7.58,0,0,0,7.57,7.57h98.54l6.59,18.14a2.19,2.19,0,0,0,1.88,1.43H169a2.18,2.18,0,0,0,1.91-1.13l8.45-15.37L194.67,146a2.18,2.18,0,0,0-.31-4ZM61.77,145.77a2,2,0,0,1-2-2V105.54a2,2,0,0,1,2-2H170.1a2,2,0,0,1,2,2v28.38l-16.49-6a2.18,2.18,0,0,0-2.79,2.79l5.47,15.06Zm114.88,5.14a2.22,2.22,0,0,0-.86.86l-6.43,11.7L158.5,133.62l29.86,10.85Z"/><path  fill="#d52940" d="M146.27,124.46a2.17,2.17,0,0,0,3.08,0,2.18,2.18,0,0,0,0-3.08l-2.64-2.64a2.18,2.18,0,0,0-3.09,3.08Z"/><path  fill="#d52940" d="M141.15,132.15h3.74a2.18,2.18,0,1,0,0-4.36h-3.74a2.18,2.18,0,1,0,0,4.36Z"/><path  fill="#d52940" d="M146.27,135.48l-2.65,2.64a2.18,2.18,0,0,0,3.09,3.08l2.64-2.64a2.18,2.18,0,1,0-3.08-3.08Z"/><path  fill="#d52940" d="M154.86,122.18A2.18,2.18,0,0,0,157,120v-3.74a2.18,2.18,0,1,0-4.36,0V120A2.17,2.17,0,0,0,154.86,122.18Z"/><path  fill="#d52940" d="M161.91,125.1a2.17,2.17,0,0,0,1.54-.64l2.64-2.64a2.18,2.18,0,1,0-3.08-3.08l-2.65,2.64a2.18,2.18,0,0,0,1.55,3.72Z"/></g></svg>',
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
				'default' => '#000000'
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
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '20px',
					'bottom' => '10px',
					'left' => '20px'
				)
			),
			'buttonMargin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '20px',
					'right' => '0px',
					'bottom' => '20px',
					'left' => '0px'
				)
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
			),
			'borderWidth' => array(
				'type' => 'number',
				'default' => 2
			),
			'borderColor' => array(
				'type' => 'string',
				'default' => '#ff4242'
			),
			'buttonHoverBorderColor' => array(
				'type' => 'string',
				'default' => '#ff4242'
			),
			'borderStyle' => array(
				'type' => 'string',
				'default' => 'solid'
			)
		)
	),
	'call-to-action-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/call-to-action-block',
		'version' => '0.1.0',
		'title' => 'Call To Action (Plus)',
		'category' => 'widgets',
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
		'textdomain' => 'call-to-action-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'layout' => array(
				'type' => 'string',
				'default' => 'split-left'
			),
			'minHeight' => array(
				'type' => 'number',
				'default' => 400
			),
			'backgroundImage' => array(
				'type' => 'object',
				'default' => null
			),
			'backgroundSize' => array(
				'type' => 'string',
				'default' => 'cover'
			),
			'backgroundPosition' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'imageWidth' => array(
				'type' => 'number',
				'default' => 50
			),
			'contentJustify' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'contentAlign' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'contentPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => 20,
					'right' => 20,
					'bottom' => 20,
					'left' => 20
				)
			),
			'contentBackgroundColor' => array(
				'type' => 'string',
				'default' => '#f5f5f5'
			),
			'headerText' => array(
				'type' => 'string',
				'default' => 'Header Text'
			),
			'headerFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 40,
					'tablet' => 32,
					'mobile' => 24
				)
			),
			'headerColor' => array(
				'type' => 'string',
				'default' => '#333333'
			),
			'headerMarginBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 20,
					'tablet' => 16,
					'mobile' => 12
				)
			),
			'headerTextAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'headerFontWeight' => array(
				'type' => 'string',
				'default' => '300'
			),
			'bodyText' => array(
				'type' => 'string',
				'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices est quam, sit amet sollicitudin nunc dapibus vitae. Donec congue, augue non pulvinar tempus, quam ipsum dignissim odio, id finibus neque nulla a velit. Suspendisse potenti.'
			),
			'bodyFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 16,
					'tablet' => 14,
					'mobile' => 12
				)
			),
			'bodyColor' => array(
				'type' => 'string',
				'default' => '#666666'
			),
			'bodyMarginBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 20,
					'tablet' => 16,
					'mobile' => 12
				)
			),
			'bodyTextAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'bodyFontWeight' => array(
				'type' => 'string',
				'default' => '300'
			),
			'stackedImageHeight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 500,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 400,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 300,
						'unit' => 'px'
					)
				)
			),
			'stackedContentWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 50,
					'tablet' => 70,
					'mobile' => 90
				)
			),
			'overlayBackgroundColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'overlayOpacity' => array(
				'type' => 'number',
				'default' => 0.5
			),
			'overlayContentWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 50,
					'tablet' => 70,
					'mobile' => 90
				)
			),
			'overlayTextColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'overlayHeaderColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'overlayBodyColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'marginTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'gradientType' => array(
				'type' => 'string',
				'default' => 'none'
			),
			'gradientColor1' => array(
				'type' => 'string',
				'default' => '#ff4444'
			),
			'gradientColor2' => array(
				'type' => 'string',
				'default' => '#ff6666'
			),
			'gradientDirection' => array(
				'type' => 'string',
				'default' => '135deg'
			),
			'gradientOpacity' => array(
				'type' => 'number',
				'default' => 0.1
			),
			'contentGradientType' => array(
				'type' => 'string',
				'default' => 'none'
			),
			'contentGradientColor1' => array(
				'type' => 'string',
				'default' => '#ff4444'
			),
			'contentGradientColor2' => array(
				'type' => 'string',
				'default' => '#ff6666'
			),
			'contentGradientDirection' => array(
				'type' => 'string',
				'default' => '135deg'
			),
			'contentGradientOpacity' => array(
				'type' => 'number',
				'default' => 0.1
			),
			'contentGradientOrigin' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'overlayGradientType' => array(
				'type' => 'string',
				'default' => 'none'
			),
			'overlayGradientColor1' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'overlayGradientColor2' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'overlayGradientDirection' => array(
				'type' => 'string',
				'default' => '135deg'
			),
			'overlayGradientOpacity' => array(
				'type' => 'number',
				'default' => 0.5
			),
			'overlayGradientOrigin' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'contentBorderRadius' => array(
				'type' => 'number',
				'default' => 0
			)
		),
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#fff" x="1" y="0.93" width="238" height="238" rx="3.87"/><path  fill="#d52940" d="M236.49,0H3.51A3.51,3.51,0,0,0,0,3.51v233A3.51,3.51,0,0,0,3.51,240h233a3.51,3.51,0,0,0,3.51-3.51V3.51A3.51,3.51,0,0,0,236.49,0Zm0,235.61a.89.89,0,0,1-.89.89H4.39a.89.89,0,0,1-.89-.89V4.39a.89.89,0,0,1,.89-.89H235.61a.89.89,0,0,1,.89.89Z"/><path  fill="#d52940" d="M153.21,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.53,2.53,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.48,2.48,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#d52940" d="M127.23,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.67-1.63l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.07,5a2.49,2.49,0,0,0-.73,2.22l.67,3.92-3.51-1.85a2.56,2.56,0,0,0-1.17-.29,2.53,2.53,0,0,0-1.17.29l-3.52,1.85.67-3.92a2.51,2.51,0,0,0-.72-2.22l-2.84-2.78,3.93-.57a2.51,2.51,0,0,0,1.89-1.37L118.42,33l1.75,3.56a2.53,2.53,0,0,0,1.9,1.37l3.93.57Z"/><path  fill="#d52940" d="M101.26,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75l4.52-2.38L97,49.44a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#d52940" d="M151.71,126.44A11.89,11.89,0,0,0,149,105.76a11.74,11.74,0,0,0-6.62-.58L131,79.45a2.63,2.63,0,0,0-1.44-1.38,2.57,2.57,0,0,0-2,.05l-13.84,6.1a2.58,2.58,0,0,0-1.42,1.6s0,0,0,.05c-7.76,26.55-23.26,34.88-23.82,35.18L61.31,133A2.59,2.59,0,0,0,60,136.44l1.59,3.61-8.17,6.75a2.62,2.62,0,0,0-.72,3l5.58,12.66a2.59,2.59,0,0,0,2.38,1.54,2.17,2.17,0,0,0,.36,0l10.49-1.47,1.59,3.6a2.6,2.6,0,0,0,2.38,1.55,2.56,2.56,0,0,0,1-.22l4.58-2L92.87,189A8.58,8.58,0,0,0,108.56,182L99.17,157.5l4.5-2c.74-.27,17.31-6,42,6.14h0l.19.1a2.74,2.74,0,0,0,.94.17,2.57,2.57,0,0,0,1.05-.22l13.83-6.1a2.59,2.59,0,0,0,1.33-3.42Zm-4.63-15.84a6.71,6.71,0,0,1,2.45,10.88l-5-11.34A6.46,6.46,0,0,1,147.08,110.6Zm-84.85,48-4-9.06L63.75,145l5.57,12.63Zm41.48,25.28a3.39,3.39,0,0,1-6.2,2.74L85.84,163.37l8.57-3.77Zm-26.92-22.2-11-25,22.48-9.91,11,25ZM104.15,150,92.89,124.44c4.53-3,15.14-11.68,22.22-30.65l26.65,60.43C123,146.66,109.41,148.64,104.15,150Zm44,5.93-30-68,9.09-4,30,68Z"/><path  fill="#d52940" d="M181.87,100.45a2.59,2.59,0,0,0-3.42-1.33l-16,7.07a2.59,2.59,0,0,0,1.05,5,2.56,2.56,0,0,0,1-.22l16-7.07A2.59,2.59,0,0,0,181.87,100.45Z"/><path  fill="#d52940" d="M157.94,101.11a2.6,2.6,0,0,0,3.52-1.06l7.43-13.84a2.6,2.6,0,1,0-4.57-2.46L156.88,97.6A2.6,2.6,0,0,0,157.94,101.11Z"/><path  fill="#d52940" d="M183.63,119.63l-15.24-3.85a2.6,2.6,0,0,0-1.27,5l15.24,3.85a2.79,2.79,0,0,0,.64.07,2.59,2.59,0,0,0,.63-5.11Z"/></g></svg>'
	),
	'content-toggle-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/content-toggle-block',
		'version' => '0.1.0',
		'title' => 'Content Toggle',
		'category' => 'widgets',
		'icon' => 'controls-forward',
		'description' => 'Display content with pill-style toggles for switching between different states.',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'content-toggle-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'constrained'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'toggles' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 'toggle-1',
						'label' => 'Services'
					),
					array(
						'id' => 'toggle-2',
						'label' => 'Approach'
					),
					array(
						'id' => 'toggle-3',
						'label' => 'Outcomes'
					)
				)
			),
			'activeToggle' => array(
				'type' => 'number',
				'default' => 0
			),
			'pillStyle' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'pillBackgroundColor' => array(
				'type' => 'string',
				'default' => 'transparent'
			),
			'pillActiveBackgroundColor' => array(
				'type' => 'string',
				'default' => '#3b82f6'
			),
			'pillTextColor' => array(
				'type' => 'string',
				'default' => '#94a3b8'
			),
			'pillActiveTextColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'pillBorderColor' => array(
				'type' => 'string',
				'default' => '#475569'
			),
			'pillActiveBorderColor' => array(
				'type' => 'string',
				'default' => '#3b82f6'
			),
			'pillBorderRadius' => array(
				'type' => 'number',
				'default' => 24
			),
			'pillPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => 12,
					'right' => 24,
					'bottom' => 12,
					'left' => 24
				)
			),
			'pillGap' => array(
				'type' => 'number',
				'default' => 16
			),
			'pillFontSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'pillFontWeight' => array(
				'type' => 'string',
				'default' => '500'
			),
			'pillActiveFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'contentBackgroundColor' => array(
				'type' => 'string',
				'default' => '#0a0e27'
			),
			'contentPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => 40,
					'right' => 40,
					'bottom' => 40,
					'left' => 40
				)
			),
			'contentBorderRadius' => array(
				'type' => 'number',
				'default' => 16
			),
			'togglePosition' => array(
				'type' => 'string',
				'default' => 'top'
			),
			'animationDuration' => array(
				'type' => 'number',
				'default' => 0.5
			),
			'animationEase' => array(
				'type' => 'string',
				'default' => 'power2.out'
			)
		)
	),
	'counter-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/counter-block',
		'version' => '0.1.0',
		'title' => 'Counter (Plus)',
		'category' => 'widgets',
		'description' => 'Display animated counters that count up to a target number, with customizable prefixes and suffixes.',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'counter-block',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><g id="icons"><rect fill="#d52940" width="240" height="240" rx="3.51"/><path fill="#fff" d="M78.2,121.56v7.1a7.55,7.55,0,1,0,15.1,0v-7.1a7.55,7.55,0,0,0-15.1,0Zm10.66,0v7.1a3.11,3.11,0,0,1-6.22,0v-7.1a3.11,3.11,0,0,1,6.22,0Z"/><path fill="#fff" d="M96.78,121.56v7.1a7.55,7.55,0,1,0,15.09,0v-7.1a7.55,7.55,0,1,0-15.09,0Zm10.65,0v7.1a3.11,3.11,0,0,1-6.22,0v-7.1a3.11,3.11,0,0,1,6.22,0Z"/><path fill="#fff" d="M123.71,121.56v7.1a7.55,7.55,0,1,0,15.09,0v-7.1a7.55,7.55,0,1,0-15.09,0Zm10.65,0v7.1a3.11,3.11,0,1,1-6.21,0v-7.1a3.11,3.11,0,1,1,6.21,0Z"/><path fill="#fff" d="M157.22,128.66v-7.1a7.55,7.55,0,1,0-15.09,0v7.1a7.55,7.55,0,1,0,15.09,0Zm-10.65,0v-7.1a3.11,3.11,0,1,1,6.21,0v7.1a3.11,3.11,0,1,1-6.21,0Z"/><path fill="#fff" d="M119.39,120a2.22,2.22,0,0,0-3.78,1.57,2.22,2.22,0,1,0,4.43,0A2.19,2.19,0,0,0,119.39,120Z"/><path fill="#fff" d="M117.83,126.44a2.23,2.23,0,0,0-1.57.65,2.22,2.22,0,0,0,0,3.14,2.21,2.21,0,0,0,3.13,0,2.22,2.22,0,0,0-1.56-3.79Z"/><path fill="#fff" d="M178.27,159.91l5.12-4.87a1.91,1.91,0,0,0,.58-1.61l.41-14.3a1.92,1.92,0,0,0-1.86-2,1.89,1.89,0,0,0-1.38.53,1.92,1.92,0,0,0-.6,1.33l-.39,13.81-4.52,4.31a1.91,1.91,0,1,0,2.64,2.77Z"/><path fill="#fff" d="M182.27,126.83v-22a7.91,7.91,0,0,0-7.9-7.89h-113a7.91,7.91,0,0,0-7.9,7.89v39.88a7.91,7.91,0,0,0,7.9,7.89h94.68v0a25.85,25.85,0,1,0,26.2-25.82Zm-120.88,20a2.08,2.08,0,0,1-2.09-2.07V104.86a2.08,2.08,0,0,1,2.09-2.08h113a2.08,2.08,0,0,1,2.08,2.08V127.4a25.85,25.85,0,0,0-19.7,19.41Zm120.52,27.46a21.61,21.61,0,1,1,21.61-21.62A21.61,21.61,0,0,1,181.91,174.27Z"/><path fill="#fff" d="M153.3,36.37l-5.06-.73L146,31.05a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.87,5A1.66,1.66,0,0,0,140,49.57l4.53-2.38L149,49.57a1.62,1.62,0,0,0,.77.19,1.69,1.69,0,0,0,1-.32,1.65,1.65,0,0,0,.66-1.62l-.87-5,3.67-3.57a1.7,1.7,0,0,0,.42-1.71A1.67,1.67,0,0,0,153.3,36.37Zm-4.06,5a2.55,2.55,0,0,0-.72,2.24l.67,3.92-3.52-1.85a2.55,2.55,0,0,0-2.36,0l-3.52,1.85.67-3.92a2.55,2.55,0,0,0-.72-2.24l-2.86-2.78,4-.57a2.54,2.54,0,0,0,1.9-1.38l1.76-3.57,1.76,3.57a2.54,2.54,0,0,0,1.9,1.38l3.95.57Z"/><path fill="#fff" d="M127.33,36.37l-5.06-.73L120,31.05a1.65,1.65,0,0,0-3,0l-2.27,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.86,5a1.65,1.65,0,0,0,.66,1.62,1.67,1.67,0,0,0,1.75.13l4.52-2.38L123,49.57a1.64,1.64,0,0,0,.78.19,1.66,1.66,0,0,0,1.63-1.94l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path fill="#fff" d="M101.35,36.37l-5.06-.73L94,31.05a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.07.73a1.67,1.67,0,0,0-1.34,1.13,1.7,1.7,0,0,0,.42,1.71l3.67,3.57-.87,5a1.65,1.65,0,0,0,.66,1.62,1.69,1.69,0,0,0,1,.32,1.62,1.62,0,0,0,.77-.19l4.53-2.38,4.53,2.38a1.66,1.66,0,0,0,2.41-1.75l-.87-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/></g></svg>',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'startingNumber' => array(
				'type' => 'number',
				'default' => 100
			),
			'endingNumber' => array(
				'type' => 'number',
				'default' => 200
			),
			'delayBool' => array(
				'type' => 'boolean',
				'default' => false
			),
			'delayTime' => array(
				'type' => 'number',
				'default' => 500
			),
			'duration' => array(
				'type' => 'number',
				'default' => 3000
			),
			'fontSize' => array(
				'type' => 'number',
				'default' => 48
			),
			'fontWeight' => array(
				'type' => 'string',
				'default' => '700'
			),
			'color' => array(
				'type' => 'string',
				'default' => '#1a1a1a'
			),
			'letterSpacing' => array(
				'type' => 'number',
				'default' => 0
			),
			'prefix' => array(
				'type' => 'string',
				'default' => ''
			),
			'suffix' => array(
				'type' => 'string',
				'default' => ''
			),
			'counterDirection' => array(
				'type' => 'string',
				'default' => 'up'
			),
			'caption' => array(
				'type' => 'string',
				'default' => ''
			),
			'captionPosition' => array(
				'type' => 'string',
				'default' => 'bottom'
			),
			'captionFontSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'captionColor' => array(
				'type' => 'string',
				'default' => '#666666'
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'marginTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			)
		)
	),
	'flipcard-back-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/flipcard-back-block',
		'version' => '0.1.0',
		'title' => 'Flip Card Back',
		'category' => 'widgets',
		'parent' => array(
			'create-block/flipcard-block'
		),
		'description' => 'Content area for the back of a flip card.',
		'supports' => array(
			'html' => false,
			'reusable' => false,
			'inserter' => false,
			'anchor' => false
		),
		'textdomain' => 'flipcard-back-block',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			
		)
	),
	'flipcard-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/flipcard-block',
		'version' => '0.1.0',
		'title' => 'Flip Card',
		'category' => 'widgets',
		'icon' => 'admin-page',
		'description' => 'A card that flips on hover, allowing you to add blocks on both the front and back sides.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'customClassName' => true,
			'align' => array(
				'wide',
				'full'
			)
		),
		'textdomain' => 'flipcard-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'width' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 300,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'height' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 300,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 300,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 250,
						'unit' => 'px'
					)
				)
			),
			'flipDirection' => array(
				'type' => 'string',
				'default' => 'horizontal'
			),
			'animationDuration' => array(
				'type' => 'number',
				'default' => 0.6
			),
			'animationEasing' => array(
				'type' => 'string',
				'default' => 'ease-in-out'
			),
			'frontBackgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'backBackgroundColor' => array(
				'type' => 'string',
				'default' => '#f5f5f5'
			),
			'frontBorderColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'frontBorderWidth' => array(
				'type' => 'number',
				'default' => null
			),
			'backBorderColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'backBorderWidth' => array(
				'type' => 'number',
				'default' => null
			),
			'borderRadius' => array(
				'type' => 'number',
				'default' => 8
			),
			'padding' => array(
				'type' => 'number',
				'default' => 20
			),
			'shadowIntensity' => array(
				'type' => 'number',
				'default' => 0.1
			)
		)
	),
	'flipcard-front-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/flipcard-front-block',
		'version' => '0.1.0',
		'title' => 'Flip Card Front',
		'category' => 'widgets',
		'parent' => array(
			'create-block/flipcard-block'
		),
		'description' => 'Content area for the front of a flip card.',
		'supports' => array(
			'html' => false,
			'reusable' => false,
			'inserter' => false,
			'anchor' => false
		),
		'textdomain' => 'flipcard-front-block',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			
		)
	),
	'icon-box-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/icon-box-block',
		'version' => '0.1.0',
		'title' => 'Icon Box Block',
		'category' => 'widgets',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#fff" x="1" y="0.93" width="238" height="238" rx="3.87"/><path  fill="#d52940" d="M236.49,0H3.51A3.51,3.51,0,0,0,0,3.51v233A3.51,3.51,0,0,0,3.51,240h233a3.51,3.51,0,0,0,3.51-3.51V3.51A3.51,3.51,0,0,0,236.49,0Zm0,235.61a.89.89,0,0,1-.89.89H4.39a.89.89,0,0,1-.89-.89V4.39a.89.89,0,0,1,.89-.89H235.61a.89.89,0,0,1,.89.89Z"/><path  fill="#d52940" d="M153.21,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.53,2.53,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.48,2.48,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#d52940" d="M127.23,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.67-1.63l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.07,5a2.49,2.49,0,0,0-.73,2.22l.67,3.92-3.51-1.85a2.56,2.56,0,0,0-1.17-.29,2.53,2.53,0,0,0-1.17.29l-3.52,1.85.67-3.92a2.51,2.51,0,0,0-.72-2.22l-2.84-2.78,3.93-.57a2.51,2.51,0,0,0,1.89-1.37L118.42,33l1.75,3.56a2.53,2.53,0,0,0,1.9,1.37l3.93.57Z"/><path  fill="#d52940" d="M101.26,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75l4.52-2.38L97,49.44a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#d52940" d="M162.29,99.8A60.33,60.33,0,1,0,180,142.46,59.94,59.94,0,0,0,162.29,99.8Zm-3.34,82a55.62,55.62,0,1,1,16.28-39.32A55.24,55.24,0,0,1,159,181.78Z"/><path  fill="#d52940" d="M156.91,112.41a2.36,2.36,0,1,0-3.68,3A43.17,43.17,0,1,1,119.62,99.3,42.76,42.76,0,0,1,137.2,103a2.36,2.36,0,0,0,1.92-4.32,47.92,47.92,0,1,0,17.79,13.7Z"/><path  fill="#d52940" d="M137,137a14.33,14.33,0,1,0-20.51-8l-2.94,4.88h-3.74a14.34,14.34,0,0,0-24.31,15.13,14.34,14.34,0,0,0,24.87.44h2.93l2.63,4.68a14.45,14.45,0,0,0,.42,13,14.34,14.34,0,1,0,12.76-21.24l-2.28-4,1.85-3.08A14.38,14.38,0,0,0,137,137Zm-11.54-2.09-3.38,5.62a2.34,2.34,0,0,0,0,2.37l3.66,6.5a2.33,2.33,0,0,0,2.28,1.18,9.65,9.65,0,0,1,9.36,5,9.62,9.62,0,1,1-16.87,9.27,9.68,9.68,0,0,1,.16-9.55,2.37,2.37,0,0,0,0-2.36l-3.94-7a2.36,2.36,0,0,0-2-1.2l-5.72,0h0a2.35,2.35,0,0,0-2.14,1.38,9.63,9.63,0,1,1-.36-8.72,2.35,2.35,0,0,0,2.05,1.2l6.38,0h0a2.34,2.34,0,0,0,2-1.14l4.22-7a2.34,2.34,0,0,0,.14-2.15,9.64,9.64,0,1,1,6.74,5.57,2.37,2.37,0,0,0-2.54,1.09Z"/></g></svg>',
		'description' => 'Display an icon with customizable styling options using UXWing icons.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'left',
				'center',
				'right'
			),
			'customClassName' => true
		),
		'textdomain' => 'icon-box-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'iconSvg' => array(
				'type' => 'string',
				'default' => ''
			),
			'iconName' => array(
				'type' => 'string',
				'default' => ''
			),
			'chosenIcon' => array(
				'type' => 'string',
				'default' => ''
			),
			'iconSize' => array(
				'type' => 'number',
				'default' => 48
			),
			'iconColor' => array(
				'type' => 'string',
				'default' => '#333333'
			),
			'iconHoverColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => 'transparent'
			),
			'backgroundHoverColor' => array(
				'type' => 'string',
				'default' => 'transparent'
			),
			'padding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '20px',
					'right' => '20px',
					'bottom' => '20px',
					'left' => '20px'
				)
			),
			'borderRadius' => array(
				'type' => 'number',
				'default' => 0
			),
			'borderWidth' => array(
				'type' => 'number',
				'default' => 0
			),
			'borderColor' => array(
				'type' => 'string',
				'default' => '#333333'
			),
			'alignment' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'linkUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'linkTarget' => array(
				'type' => 'string',
				'default' => '_self'
			),
			'marginTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			)
		)
	),
	'industries-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/industries-block',
		'version' => '0.1.0',
		'title' => 'Industries (Premium)',
		'category' => 'widgets',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 240.04 240.31"><defs><linearGradient id="linear-gradient" x1="-190.43" y1="398.14" x2="517.95" y2="-236.16" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#7a101f"/><stop offset="0.1" stop-color="#841323"/><stop offset="0.26" stop-color="#a01a2d"/><stop offset="0.47" stop-color="#cd273d"/><stop offset="0.51" stop-color="#d52940"/><stop offset="0.61" stop-color="#d1283e"/><stop offset="0.71" stop-color="#c3243a"/><stop offset="0.82" stop-color="#ae1e32"/><stop offset="0.93" stop-color="#8f1627"/><stop offset="1" stop-color="#7a101f"/></linearGradient><linearGradient id="linear-gradient-2" x1="103.85" y1="380.26" x2="730.22" y2="-180.6" gradientTransform="translate(-258.34 -14.31)" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="103.89" y1="380.57" x2="730.26" y2="-180.3" gradientTransform="translate(-258.42 -14.92)" xlink:href="#linear-gradient"/><clipPath id="clip-path"><rect  fill="none" x="13.98" y="13.85" width="212" height="212" rx="2.54" transform="translate(239.96 239.69) rotate(180)"/></clipPath><linearGradient id="linear-gradient-4" x1="-39.78" y1="164.16" x2="182.88" y2="-33.17" gradientUnits="userSpaceOnUse"><stop offset="0.21" stop-color="#d74054"/><stop offset="0.35" stop-color="#d84458"/><stop offset="0.51" stop-color="#d04659"/><stop offset="0.66" stop-color="#c64556"/><stop offset="1" stop-color="#b34353"/></linearGradient></defs><g id="icons"><rect  fill="url(#linear-gradient)" x="0.02" y="0.15" width="240" height="240" rx="3.29"/><rect  fill="url(#linear-gradient-2)" x="14.02" y="14.15" width="212" height="212" rx="2.54" transform="translate(240.04 240.31) rotate(180)"/><rect  fill="url(#linear-gradient-3)" x="13.98" y="13.85" width="212" height="212" rx="2.54" transform="translate(239.96 239.69) rotate(180)"/><path  fill="#fff" d="M154.77,36.09l-5.06-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.27,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75L146,46.91l4.52,2.38a1.66,1.66,0,0,0,2.41-1.75l-.86-5,3.66-3.57a1.66,1.66,0,0,0,.42-1.71A1.65,1.65,0,0,0,154.77,36.09Z"/><path  fill="#fff" d="M128.8,36.09l-5.07-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.87,5a1.66,1.66,0,0,0,2.41,1.75L120,46.91l4.53,2.38a1.62,1.62,0,0,0,.77.19,1.66,1.66,0,0,0,1.64-1.94l-.87-5,3.67-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M102.82,36.09l-5.06-.73L95.5,30.77a1.67,1.67,0,0,0-3,0l-2.27,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.86,5a1.66,1.66,0,0,0,1.64,1.94,1.62,1.62,0,0,0,.77-.19L94,46.91l4.52,2.38a1.66,1.66,0,0,0,2.41-1.75l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><rect  fill="none" stroke="#d52940" stroke-miterlimit="10" stroke-width="2px" x="14.48" y="14.35" width="211" height="211" rx="1.71"/><g  clip-path="url(#clip-path)"><path  fill="url(#linear-gradient-4)" d="M223.29,14.67H15.71A1.7,1.7,0,0,0,14,16.37v201L225,21.54V16.37A1.7,1.7,0,0,0,223.29,14.67Z"/></g><rect  fill="none" stroke-miterlimit="10" stroke-width="2px" stroke="#fff" x="14.52" y="14.65" width="211" height="211" rx="1.71"/><path  fill="#fff" d="M154.81,36.4l-5.06-.73-2.27-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.06.73a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.76L146,47.22l4.53,2.38a1.75,1.75,0,0,0,.77.19,1.67,1.67,0,0,0,1.64-1.95l-.86-5,3.66-3.57a1.65,1.65,0,0,0,.42-1.7A1.67,1.67,0,0,0,154.81,36.4Z"/><path  fill="#fff" d="M128.83,36.4l-5.06-.73-2.26-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.07.73a1.66,1.66,0,0,0-.92,2.83L114,42.8l-.87,5a1.66,1.66,0,0,0,2.41,1.76L120,47.22l4.53,2.38a1.75,1.75,0,0,0,.77.19A1.67,1.67,0,0,0,127,47.84l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M102.86,36.4l-5.06-.73-2.27-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.06.73a1.66,1.66,0,0,0-.92,2.83L88,42.8l-.86,5a1.67,1.67,0,0,0,1.63,1.95,1.79,1.79,0,0,0,.78-.19L94,47.22l4.53,2.38A1.66,1.66,0,0,0,101,47.84l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M154.81,36.55l-5.06-.73-2.27-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84L139.92,43l-.86,5a1.66,1.66,0,0,0,2.41,1.75L146,47.37l4.53,2.38a1.62,1.62,0,0,0,.77.19A1.66,1.66,0,0,0,152.93,48l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M128.83,36.55l-5.06-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.07.73a1.67,1.67,0,0,0-.92,2.84L114,43l-.87,5a1.66,1.66,0,0,0,2.41,1.75L120,47.37l4.53,2.38a1.62,1.62,0,0,0,.77.19A1.66,1.66,0,0,0,127,48l-.87-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M102.86,36.55l-5.06-.73-2.27-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.65,1.65,0,0,0-1.34,1.13,1.66,1.66,0,0,0,.42,1.71L88,43l-.86,5a1.66,1.66,0,0,0,2.41,1.75L94,47.37l4.53,2.38A1.66,1.66,0,0,0,101,48l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M174,82.82a4.57,4.57,0,0,0-4.57-4.51H156.72a4.56,4.56,0,0,0-4.56,4.51L151,133.42l-6.56-1.76-1-40.29a4,4,0,0,0-4-3.93h-9.51a4,4,0,0,0-4,3.93L125,126.45l-29.25-7.84A2.28,2.28,0,0,0,94.54,123l.88.24V137.8l-7.34-2a2.28,2.28,0,0,0-1.18,4.41l31.7,8.49v2.61H66.51V134.78l.55.15a2.39,2.39,0,0,0,.59.08,2.28,2.28,0,0,0,.59-4.49l-6-1.61a2.28,2.28,0,0,0-1.18,4.41l.89.24V181a2.28,2.28,0,0,0,2.28,2.28H174a2.28,2.28,0,0,0,1.63-.68,2.31,2.31,0,0,0,.65-1.65Zm-4,24.52H156.15l.31-13.06h13.2Zm-13.91,4.57h14l.1,4.56H155.94Zm.69-29h12.64a.43.43,0,0,1,0,0l.16,6.8h-13l.16-6.8A.08.08,0,0,1,156.74,82.87Zm-26.55,18.26h8.87l.4,15.34h-9.67ZM138.82,92l.12,4.57h-8.63l.12-4.57Zm-9.14,29h9.9l.24,9.39-10.32-2.77ZM66.51,155.91H118.6v22.83h-4.91v-16a2.29,2.29,0,0,0-2.29-2.28H84a2.28,2.28,0,0,0-2.28,2.28v16H66.51ZM100,165h9.13v13.7H100Zm-4.57,13.7H86.29V165h9.13Zm66.37,0v-4.05a2.28,2.28,0,0,0-4.56,0v4.05H123.17v-28.8a1.37,1.37,0,0,0,.29,0,2.28,2.28,0,0,0,.59-4.49L100,139V124.48l57.24,15.34v14.33a2.28,2.28,0,1,0,4.56,0V141a1.51,1.51,0,0,0,.3,0,2.28,2.28,0,0,0,.59-4.49l-7.16-1.91.32-13.6h14.44l1.34,57.7Z"/></g></svg>',
		'description' => 'Highlight key industries with responsive tiles, icons, and rich introductory copy.',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'industries-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'headerLines' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 'line-1',
						'text' => 'Sharpen your edge.'
					),
					array(
						'id' => 'line-2',
						'text' => 'Lead your industry.'
					),
					array(
						'id' => 'line-3',
						'text' => 'Build the future.'
					)
				)
			),
			'introText' => array(
				'type' => 'string',
				'default' => 'We deliver what you need to own the competitive advantage. Move first. Remain first.'
			),
			'descriptionText' => array(
				'type' => 'string',
				'default' => 'We deliver what you need to own the competitive advantage. Move first. Remain first.'
			),
			'featureImage' => array(
				'type' => 'object',
				'default' => array(
					'id' => 0,
					'url' => '',
					'alt' => ''
				)
			),
			'imageWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 100,
						'unit' => '%'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'imageHeight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 'auto',
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 'auto',
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 'auto',
						'unit' => 'px'
					)
				)
			),
			'showTitle' => array(
				'type' => 'boolean',
				'default' => true
			),
			'showIntroText' => array(
				'type' => 'boolean',
				'default' => true
			),
			'showImage' => array(
				'type' => 'boolean',
				'default' => true
			),
			'hideFirstTwoIndustries' => array(
				'type' => 'boolean',
				'default' => false
			),
			'industries' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 'industry-1',
						'icon' => 'bi bi-basket2',
						'label' => 'Consumer',
						'linkUrl' => '',
						'openInNewTab' => false
					),
					array(
						'id' => 'industry-2',
						'icon' => 'bi bi-bank',
						'label' => 'Financial Services',
						'linkUrl' => '',
						'openInNewTab' => false
					),
					array(
						'id' => 'industry-3',
						'icon' => 'bi bi-activity',
						'label' => 'Healthcare',
						'linkUrl' => '',
						'openInNewTab' => false
					),
					array(
						'id' => 'industry-4',
						'icon' => 'bi bi-newspaper',
						'label' => 'Telecommunications, media and technology',
						'linkUrl' => '',
						'openInNewTab' => false
					),
					array(
						'id' => 'industry-5',
						'icon' => 'bi bi-activity',
						'label' => 'Transportation & logistics',
						'linkUrl' => '',
						'openInNewTab' => false
					),
					array(
						'id' => 'industry-6',
						'icon' => 'bi bi-basket2',
						'label' => 'Private Equity',
						'linkUrl' => '',
						'openInNewTab' => false
					)
				)
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'headerColor' => array(
				'type' => 'string',
				'default' => '#ff4e4e'
			),
			'headerAccentColor' => array(
				'type' => 'string',
				'default' => '#7e7c8a'
			),
			'headerFontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'headerFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 60,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 40,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 36,
						'unit' => 'px'
					)
				)
			),
			'headerAccentFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 60,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 40,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 36,
						'unit' => 'px'
					)
				)
			),
			'headerAccentWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 100,
						'unit' => '%'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'introFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 20,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 18,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 16,
						'unit' => 'px'
					)
				)
			),
			'descriptionFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 24,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 20,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 18,
						'unit' => 'px'
					)
				)
			),
			'chevronColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'chevronSize' => array(
				'type' => 'number',
				'default' => 24
			),
			'tilePadding' => array(
				'type' => 'number',
				'default' => 70
			),
			'tilePaddingMobile' => array(
				'type' => 'number',
				'default' => 10
			),
			'tileBorderRadius' => array(
				'type' => 'number',
				'default' => 8
			),
			'tileBorderColor' => array(
				'type' => 'string',
				'default' => '#bab8c6'
			),
			'tileIconColor' => array(
				'type' => 'string',
				'default' => '#3f3f3f'
			),
			'tileIconBackground' => array(
				'type' => 'string',
				'default' => '#f7f6fe'
			),
			'tileIconSize' => array(
				'type' => 'number',
				'default' => 35
			),
			'tileTitleFontSize' => array(
				'type' => 'number',
				'default' => 30
			),
			'tileHoverBackground' => array(
				'type' => 'string',
				'default' => '#ff4e4e'
			),
			'tileHoverTextColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			)
		)
	),
	'logos-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/logos-block',
		'version' => '0.1.0',
		'title' => 'Logos (Plus)',
		'category' => 'media',
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
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			)
		),
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#d52940" width="240" height="240" rx="3.19"/><path  fill="#fff" d="M155.62,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.68,3.93L148,45.56a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.5,2.5,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.77-3.57,1.76,3.57a2.5,2.5,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#fff" d="M129.65,36.25l-5.07-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.93,2.83l3.67,3.57-.87,5a1.7,1.7,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1.64-1.94l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M103.67,36.25l-5.06-.74-2.27-4.58a1.65,1.65,0,0,0-3,0L91.1,35.51,86,36.25a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.68,1.68,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.65,1.65,0,0,0,.42-1.7A1.67,1.67,0,0,0,103.67,36.25Z"/><path  fill="#fff" d="M148.66,81.4H78.81V111H142v11.89H92.22a23.59,23.59,0,0,0-23.56,23.56V169.6a23.59,23.59,0,0,0,23.56,23.56h60.59V174.68H173V105.74A24.37,24.37,0,0,0,148.66,81.4Zm18.94,87.88H147.41v18.47H92.22A18.15,18.15,0,0,1,74.06,169.6V146.48a18.16,18.16,0,0,1,18.16-18.15h55.19v-22.7H84.22V86.81h64.44a18.94,18.94,0,0,1,18.94,18.93Z"/><path  fill="#fff" d="M94.25,146.69v22.59h53.16V146.69ZM142,163.87H99.66V152.1H142Z"/></g></svg>'
	),
	'map-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/map-block',
		'version' => '0.1.0',
		'title' => 'Map (Plus)',
		'category' => 'widgets',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><g id="icons"><rect fill="#d52940" width="240" height="240" rx="3.29"/><path fill="#fff" d="M154.79,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12L146,47.06l4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.68,3.93-3.53-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.5,2.5,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38L146,32.94l1.76,3.57a2.5,2.5,0,0,0,1.9,1.38l3.94.58Z"/><path fill="#fff" d="M128.81,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.93,2.83l3.67,3.57-.87,5a1.7,1.7,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12L120,47.06l4.53,2.38a1.62,1.62,0,0,0,.77.19,1.68,1.68,0,0,0,1-.31,1.7,1.7,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.93-2.83Z"/><path fill="#fff" d="M102.84,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83L88,42.65l-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1,.31,1.66,1.66,0,0,0,.78-.19L94,47.06l4.53,2.38a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path fill="#fff" d="M91.07,135.66h0a6.67,6.67,0,0,0,5.57-3l11.88-17.82a22.75,22.75,0,0,0,1.65-22,20.47,20.47,0,0,0-16.34-12,23.08,23.08,0,0,0-5.51,0A20.58,20.58,0,0,0,72,92.86a22.77,22.77,0,0,0,1.64,22L85.5,132.69A6.69,6.69,0,0,0,91.07,135.66ZM76.75,95A15.21,15.21,0,0,1,88.9,86a20.6,20.6,0,0,1,4.3,0,15.2,15.2,0,0,1,12.14,9,17.24,17.24,0,0,1-1.27,16.87L92.19,129.72a1.39,1.39,0,0,1-1.17.64h0a1.47,1.47,0,0,1-1.17-.64L78,111.9A17.39,17.39,0,0,1,76.75,95Z"/><path fill="#fff" d="M101.68,101.82a10.61,10.61,0,1,0-10.61,10.61A10.64,10.64,0,0,0,101.68,101.82Zm-15.91,0a5.31,5.31,0,1,1,5.3,5.3A5.32,5.32,0,0,1,85.77,101.82Z"/><path fill="#fff" d="M149.42,141.51h0a4.3,4.3,0,0,0,3.59-1.92l7.67-11.5a14.69,14.69,0,0,0,1.06-14.2,13.26,13.26,0,0,0-10.54-7.77,16.3,16.3,0,0,0-3.56,0,13.3,13.3,0,0,0-10.54,7.77,14.69,14.69,0,0,0,1.06,14.2l7.66,11.5A4.32,4.32,0,0,0,149.42,141.51Zm-9.24-26.21a9.78,9.78,0,0,1,7.83-5.82,11.75,11.75,0,0,1,2.78,0,9.78,9.78,0,0,1,7.83,5.82,11.09,11.09,0,0,1-.82,10.88l-7.66,11.5a.9.9,0,0,1-.76.41h0a.94.94,0,0,1-.75-.41L141,126.18A11.19,11.19,0,0,1,140.18,115.3Z"/><path fill="#fff" d="M156.26,119.24a6.85,6.85,0,1,0-6.84,6.84A6.86,6.86,0,0,0,156.26,119.24Zm-10.26,0a3.42,3.42,0,1,1,3.42,3.42A3.43,3.43,0,0,1,146,119.24Z"/><path fill="#fff" d="M134.18,144.65a3.26,3.26,0,0,0-.05.38,7.89,7.89,0,0,0,1.17,4.1A7.66,7.66,0,0,1,134.18,144.65Zm10.41,10.54h0l.12,0Z"/><path fill="#fff" d="M138.37,136.6a12.65,12.65,0,0,0-2.64,2.24L106.93,134a2.81,2.81,0,0,0,.06-.37,2.69,2.69,0,0,0-3.9-2.39,2.48,2.48,0,0,0-1.41,2.36c0,2.5-4.54,5.33-10.61,5.33s-10.64-2.83-10.61-5.33a2.46,2.46,0,0,0-1.41-2.36,2.68,2.68,0,0,0-3.89,2.39c0,5.94,7,10.6,15.91,10.6,5.94,0,10.93-2.07,13.69-5.2l28.8,4.83a7.45,7.45,0,0,0,1.09,4.35l.1.19c1.27,2.06,3.82,4.34,8.92,5.7l.14,0,.11,0H144a22.17,22.17,0,0,0,5.45.66c8.91,0,15.91-4.67,15.91-10.61,0-2.93-1.71-5.56-4.52-7.46a2.65,2.65,0,0,0-3.68.76h0a2.66,2.66,0,0,0,.74,3.65c1.36.92,2.16,2,2.16,3.05,0,2.5-4.57,5.31-10.61,5.31s-10.61-2.81-10.61-5.31c0-1.1.89-2.26,2.4-3.21a2.62,2.62,0,0,0,.8-3.59h0A2.63,2.63,0,0,0,138.37,136.6Z"/><path fill="#fff" d="M184.92,150.74l-15.06-52a8.9,8.9,0,0,0-8.56-6.42H118.54a3.17,3.17,0,0,0-3.18,3.31v.07a3.19,3.19,0,0,0,3.18,3h44a1.49,1.49,0,0,1,1.43,1.08l15.17,52.64a8.79,8.79,0,0,1-8.44,11.21h-105a8.79,8.79,0,0,1-8.44-11.21L67.8,115.71a3,3,0,0,0-1.82-3.6l-.06,0a3,3,0,0,0-3.86,2l-10.64,36.7a14.83,14.83,0,0,0,14.25,19h105A14.83,14.83,0,0,0,184.92,150.74Z"/></g></svg>',
		'description' => 'Google Maps Addresses Block',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'map-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'marginTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'locations' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 1,
						'country' => 'Namibia',
						'addressLines' => array(
							'8 Bell Street',
							'Windhoek',
							'Namibia'
						),
						'phone' => '+264816124071',
						'email' => 'info@adaire.com',
						'lat' => -22.5609,
						'lng' => 17.0658,
						'mapEmbedUrl' => 'https://www.google.com/maps?output=embed&q=8%20Bell%20Street%20Windhoek%20Namibia'
					),
					array(
						'id' => 2,
						'country' => 'Switzerland',
						'addressLines' => array(
							'Sample Street 1',
							'Zurich',
							'Switzerland'
						),
						'phone' => '+41 00 000 00 00',
						'email' => 'info@adaire.com',
						'lat' => 47.3769,
						'lng' => 8.5417,
						'mapEmbedUrl' => 'https://www.google.com/maps?output=embed&q=Zurich%20Switzerland'
					),
					array(
						'id' => 3,
						'country' => 'United Kingdom',
						'addressLines' => array(
							'1 Example Road',
							'Nottingham',
							'United Kingdom'
						),
						'phone' => '+44 0000 000000',
						'email' => 'info@adaire.com',
						'lat' => 52.9548,
						'lng' => -1.1581,
						'mapEmbedUrl' => 'https://www.google.com/maps?output=embed&q=Nottingham%20United%20Kingdom'
					),
					array(
						'id' => 4,
						'country' => 'Ghana',
						'addressLines' => array(
							'Sample Ave',
							'Accra',
							'Ghana'
						),
						'phone' => '+233 000 000 000',
						'email' => 'info@adaire.com',
						'lat' => 5.6037,
						'lng' => -0.187,
						'mapEmbedUrl' => 'https://www.google.com/maps?output=embed&q=Accra%20Ghana'
					)
				)
			),
			'activeIndex' => array(
				'type' => 'number',
				'default' => 0
			),
			'navTextColor' => array(
				'type' => 'string',
				'default' => '#333333'
			),
			'navActiveBgColor' => array(
				'type' => 'string',
				'default' => '#d52d3a'
			),
			'navActiveTextColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'navFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'singleMapMode' => array(
				'type' => 'boolean',
				'default' => false
			),
			'flyDuration' => array(
				'type' => 'number',
				'default' => 0.9
			)
		)
	),
	'mega-menu-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/mega-menu-block',
		'version' => '0.1.0',
		'title' => 'Mega Menu (Plus)',
		'category' => 'design',
		'description' => 'Advanced mega menu with customizable colors, logo upload, and hierarchical menu items.',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true,
			'innerBlocks' => true
		),
		'textdomain' => 'mega-menu-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'logoUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'logoAlt' => array(
				'type' => 'string',
				'default' => 'Logo'
			),
			'logoSize' => array(
				'type' => 'number',
				'default' => 40
			),
			'menuItems' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 'menu-item-1',
						'title' => 'Home',
						'bannerDescription' => 'Welcome visitors with a concise headline.',
						'canvasStoryTitle' => '',
						'canvasStoryDescription' => '',
						'canvasStoryLinkLabel' => '',
						'canvasStoryLinkUrl' => '',
						'canvasStoryLinkOpenInNewTab' => false,
						'url' => '/',
						'isBold' => false,
						'openInNewTab' => false,
						'canvasImageUrl' => '',
						'canvasImageAlt' => 'Canvas Image',
						'canvasImagePosition' => 'left',
						'canvasBannerEnabled' => true,
						'canvasIsSmallest' => false,
						'canvasImageWidth' => array(
							'desktop' => array(
								'value' => 300,
								'unit' => 'px'
							),
							'tablet' => array(
								'value' => 250,
								'unit' => 'px'
							)
						),
						'canvasImageHeight' => array(
							'desktop' => array(
								'value' => 200,
								'unit' => 'px'
							),
							'tablet' => array(
								'value' => 150,
								'unit' => 'px'
							),
							'mobile' => array(
								'value' => 120,
								'unit' => 'px'
							)
						),
						'canvasIsSmaller' => false,
						'children' => array(
							
						)
					),
					array(
						'id' => 'menu-item-2',
						'title' => 'Services',
						'bannerDescription' => 'Highlight available services with a short summary.',
						'canvasStoryTitle' => '',
						'canvasStoryDescription' => '',
						'canvasStoryLinkLabel' => '',
						'canvasStoryLinkUrl' => '',
						'canvasStoryLinkOpenInNewTab' => false,
						'url' => '/services',
						'isBold' => false,
						'openInNewTab' => false,
						'canvasImageUrl' => '',
						'canvasImageAlt' => 'Canvas Image',
						'canvasImagePosition' => 'left',
						'canvasBannerEnabled' => true,
						'canvasIsSmallest' => false,
						'canvasImageWidth' => array(
							'desktop' => array(
								'value' => 300,
								'unit' => 'px'
							),
							'tablet' => array(
								'value' => 250,
								'unit' => 'px'
							)
						),
						'canvasImageHeight' => array(
							'desktop' => array(
								'value' => 200,
								'unit' => 'px'
							),
							'tablet' => array(
								'value' => 150,
								'unit' => 'px'
							),
							'mobile' => array(
								'value' => 120,
								'unit' => 'px'
							)
						),
						'canvasIsSmaller' => false,
						'children' => array(
							array(
								'id' => 'sub-item-1',
								'title' => 'Web Development',
								'url' => '/services/web-development',
								'isBold' => false,
								'fontSize' => 16,
								'fontWeight' => '400',
								'hoverColor' => '#428aff',
								'showHoverUnderline' => true,
								'underlineWidth' => 2,
								'underlineColor' => '#428aff',
								'underlineBorderRadius' => 0,
								'children' => array(
									array(
										'id' => 'tier3-item-1',
										'title' => 'Custom Websites',
										'url' => '/services/web-development/custom-websites',
										'isBold' => false,
										'fontSize' => 14,
										'fontWeight' => '400',
										'hoverColor' => '#428aff',
										'children' => array(
											
										)
									),
									array(
										'id' => 'tier3-item-2',
										'title' => 'E-commerce',
										'url' => '/services/web-development/ecommerce',
										'isBold' => false,
										'fontSize' => 14,
										'fontWeight' => '400',
										'hoverColor' => '#428aff',
										'children' => array(
											
										)
									),
									array(
										'id' => 'tier3-item-3',
										'title' => 'WordPress',
										'url' => '/services/web-development/wordpress',
										'isBold' => false,
										'fontSize' => 14,
										'fontWeight' => '400',
										'hoverColor' => '#428aff',
										'children' => array(
											
										)
									)
								)
							),
							array(
								'id' => 'sub-item-2',
								'title' => 'Digital Marketing',
								'url' => '/services/digital-marketing',
								'isBold' => false,
								'fontSize' => 16,
								'fontWeight' => '400',
								'hoverColor' => '#428aff',
								'showHoverUnderline' => true,
								'underlineWidth' => 2,
								'underlineColor' => '#428aff',
								'underlineBorderRadius' => 0,
								'children' => array(
									array(
										'id' => 'tier3-item-4',
										'title' => 'SEO Services',
										'url' => '/services/digital-marketing/seo',
										'isBold' => false,
										'fontSize' => 14,
										'fontWeight' => '400',
										'hoverColor' => '#428aff',
										'children' => array(
											
										)
									),
									array(
										'id' => 'tier3-item-5',
										'title' => 'Social Media',
										'url' => '/services/digital-marketing/social-media',
										'isBold' => false,
										'fontSize' => 14,
										'fontWeight' => '400',
										'hoverColor' => '#428aff',
										'children' => array(
											
										)
									),
									array(
										'id' => 'tier3-item-6',
										'title' => 'PPC Advertising',
										'url' => '/services/digital-marketing/ppc',
										'isBold' => false,
										'fontSize' => 14,
										'fontWeight' => '400',
										'hoverColor' => '#428aff',
										'children' => array(
											
										)
									)
								)
							),
							array(
								'id' => 'sub-item-3',
								'title' => 'Branding',
								'url' => '/services/branding',
								'isBold' => false,
								'fontSize' => 16,
								'fontWeight' => '400',
								'hoverColor' => '#428aff',
								'showHoverUnderline' => true,
								'underlineWidth' => 2,
								'underlineColor' => '#428aff',
								'underlineBorderRadius' => 0,
								'children' => array(
									array(
										'id' => 'tier3-item-7',
										'title' => 'Logo Design',
										'url' => '/services/branding/logo-design',
										'isBold' => false,
										'fontSize' => 14,
										'fontWeight' => '400',
										'hoverColor' => '#428aff',
										'children' => array(
											
										)
									),
									array(
										'id' => 'tier3-item-8',
										'title' => 'Brand Identity',
										'url' => '/services/branding/brand-identity',
										'isBold' => false,
										'fontSize' => 14,
										'fontWeight' => '400',
										'hoverColor' => '#428aff',
										'children' => array(
											
										)
									),
									array(
										'id' => 'tier3-item-9',
										'title' => 'Print Design',
										'url' => '/services/branding/print-design',
										'isBold' => false,
										'fontSize' => 14,
										'fontWeight' => '400',
										'hoverColor' => '#428aff',
										'children' => array(
											
										)
									)
								)
							)
						)
					),
					array(
						'id' => 'menu-item-3',
						'title' => 'Portfolio',
						'bannerDescription' => 'Showcase recent work or featured projects.',
						'canvasStoryTitle' => '',
						'canvasStoryDescription' => '',
						'canvasStoryLinkLabel' => '',
						'canvasStoryLinkUrl' => '',
						'canvasStoryLinkOpenInNewTab' => false,
						'url' => '/portfolio',
						'isBold' => false,
						'openInNewTab' => false,
						'canvasImageUrl' => '',
						'canvasImageAlt' => 'Canvas Image',
						'canvasImagePosition' => 'left',
						'canvasBannerEnabled' => true,
						'canvasIsSmallest' => false,
						'canvasImageWidth' => array(
							'desktop' => array(
								'value' => 300,
								'unit' => 'px'
							),
							'tablet' => array(
								'value' => 250,
								'unit' => 'px'
							)
						),
						'canvasImageHeight' => array(
							'desktop' => array(
								'value' => 200,
								'unit' => 'px'
							),
							'tablet' => array(
								'value' => 150,
								'unit' => 'px'
							),
							'mobile' => array(
								'value' => 120,
								'unit' => 'px'
							)
						),
						'canvasIsSmaller' => false,
						'children' => array(
							
						)
					),
					array(
						'id' => 'menu-item-4',
						'title' => 'About',
						'bannerDescription' => 'Tell visitors what makes your team unique.',
						'canvasStoryTitle' => '',
						'canvasStoryDescription' => '',
						'canvasStoryLinkLabel' => '',
						'canvasStoryLinkUrl' => '',
						'canvasStoryLinkOpenInNewTab' => false,
						'url' => '/about',
						'isBold' => false,
						'openInNewTab' => false,
						'canvasImageUrl' => '',
						'canvasImageAlt' => 'Canvas Image',
						'canvasImagePosition' => 'left',
						'canvasBannerEnabled' => true,
						'canvasIsSmallest' => false,
						'canvasImageWidth' => array(
							'desktop' => array(
								'value' => 300,
								'unit' => 'px'
							),
							'tablet' => array(
								'value' => 250,
								'unit' => 'px'
							)
						),
						'canvasImageHeight' => array(
							'desktop' => array(
								'value' => 200,
								'unit' => 'px'
							),
							'tablet' => array(
								'value' => 150,
								'unit' => 'px'
							),
							'mobile' => array(
								'value' => 120,
								'unit' => 'px'
							)
						),
						'canvasIsSmaller' => false,
						'children' => array(
							
						)
					),
					array(
						'id' => 'menu-item-5',
						'title' => 'Contact',
						'bannerDescription' => 'Encourage visitors to reach out for help or quotes.',
						'canvasStoryTitle' => '',
						'canvasStoryDescription' => '',
						'canvasStoryLinkLabel' => '',
						'canvasStoryLinkUrl' => '',
						'canvasStoryLinkOpenInNewTab' => false,
						'url' => '/contact',
						'isBold' => false,
						'openInNewTab' => false,
						'canvasImageUrl' => '',
						'canvasImageAlt' => 'Canvas Image',
						'canvasImagePosition' => 'left',
						'canvasBannerEnabled' => true,
						'canvasIsSmallest' => false,
						'canvasImageWidth' => array(
							'desktop' => array(
								'value' => 300,
								'unit' => 'px'
							),
							'tablet' => array(
								'value' => 250,
								'unit' => 'px'
							)
						),
						'canvasImageHeight' => array(
							'desktop' => array(
								'value' => 200,
								'unit' => 'px'
							),
							'tablet' => array(
								'value' => 150,
								'unit' => 'px'
							),
							'mobile' => array(
								'value' => 120,
								'unit' => 'px'
							)
						),
						'canvasIsSmaller' => false,
						'children' => array(
							
						)
					)
				)
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'hoverColor' => array(
				'type' => 'string',
				'default' => '#428aff'
			),
			'activeColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'level1HoverColor' => array(
				'type' => 'string',
				'default' => '#428aff'
			),
			'level1ShowHoverUnderline' => array(
				'type' => 'boolean',
				'default' => true
			),
			'level1UnderlineWidth' => array(
				'type' => 'number',
				'default' => 3
			),
			'level1UnderlineColor' => array(
				'type' => 'string',
				'default' => '#428aff'
			),
			'level1UnderlineBorderRadius' => array(
				'type' => 'number',
				'default' => 0
			),
			'level1HoverBorderRadius' => array(
				'type' => 'number',
				'default' => 4
			),
			'level1HoverBgColor' => array(
				'type' => 'string',
				'default' => 'transparent'
			),
			'level1HoverPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => 10,
					'right' => 5,
					'bottom' => 10,
					'left' => 5
				)
			),
			'level2HoverColor' => array(
				'type' => 'string',
				'default' => '#428aff'
			),
			'level2HoverTextColorEnabled' => array(
				'type' => 'boolean',
				'default' => false
			),
			'level2ShowHoverUnderline' => array(
				'type' => 'boolean',
				'default' => true
			),
			'level2HoverBgColor' => array(
				'type' => 'string',
				'default' => 'rgba(0, 0, 0, 0.05)'
			),
			'level2HoverPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => 8,
					'right' => 12,
					'bottom' => 8,
					'left' => 12
				)
			),
			'level2HeaderSpacing' => array(
				'type' => 'number',
				'default' => 16
			),
			'level3HoverColor' => array(
				'type' => 'string',
				'default' => '#428aff'
			),
			'level3HoverBgColor' => array(
				'type' => 'string',
				'default' => 'rgba(0, 0, 0, 0.05)'
			),
			'level3HoverPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => 8,
					'right' => 12,
					'bottom' => 8,
					'left' => 12
				)
			),
			'level3ShowHoverUnderline' => array(
				'type' => 'boolean',
				'default' => true
			),
			'level3ItemSpacing' => array(
				'type' => 'number',
				'default' => 8
			),
			'level3UnderlineWidth' => array(
				'type' => 'number',
				'default' => 3
			),
			'level3UnderlineColor' => array(
				'type' => 'string',
				'default' => '#428aff'
			),
			'level1FontSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'level1FontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'level1FontColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'level2FontSize' => array(
				'type' => 'number',
				'default' => 14
			),
			'level2FontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'level2FontColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'level3FontSize' => array(
				'type' => 'number',
				'default' => 12
			),
			'level3FontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'level3FontColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'canvasFontSize' => array(
				'type' => 'number',
				'default' => 18
			),
			'canvasFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'canvasFontColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'canvasImageBorderRadius' => array(
				'type' => 'number',
				'default' => 8
			),
			'menuCanvasBorderRadius' => array(
				'type' => 'number',
				'default' => 0
			),
			'menuBorderRadius' => array(
				'type' => 'number',
				'default' => 0
			),
			'showCanvasTitle' => array(
				'type' => 'boolean',
				'default' => false
			),
			'fontSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'fontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'boldWeight' => array(
				'type' => 'string',
				'default' => '700'
			),
			'fontFamily' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'underlineColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'isSticky' => array(
				'type' => 'boolean',
				'default' => true
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'padding' => array(
				'type' => 'object',
				'default' => array(
					'top' => 20,
					'right' => 20,
					'bottom' => 20,
					'left' => 20
				)
			),
			'margin' => array(
				'type' => 'object',
				'default' => array(
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0
				)
			),
			'keepCanvasOpenOnClick' => array(
				'type' => 'boolean',
				'default' => false
			),
			'increaseOpacity' => array(
				'type' => 'boolean',
				'default' => false
			),
			'scrollBackgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'menuItemsColorTop' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'menuItemsColorScroll' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'menuItemsUnderlineColorTop' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'menuItemsUnderlineColorScroll' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'menuImageAtTop' => array(
				'type' => 'string',
				'default' => ''
			),
			'menuImageAtTopAlt' => array(
				'type' => 'string',
				'default' => 'Menu Image at Top'
			),
			'menuImageOnScroll' => array(
				'type' => 'string',
				'default' => ''
			),
			'menuImageOnScrollAlt' => array(
				'type' => 'string',
				'default' => 'Menu Image on Scroll'
			),
			'logoLinkUrl' => array(
				'type' => 'string',
				'default' => '/'
			),
			'menuImageSize' => array(
				'type' => 'number',
				'default' => 40
			),
			'ribbonEnabled' => array(
				'type' => 'boolean',
				'default' => false
			),
			'ribbonText' => array(
				'type' => 'string',
				'default' => 'We\'re celebrating 25 years of innovation.'
			),
			'ribbonBackgroundColor' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'ribbonTextColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'ribbonFontSize' => array(
				'type' => 'number',
				'default' => 14
			),
			'ribbonFontWeight' => array(
				'type' => 'string',
				'default' => '500'
			),
			'ribbonLinkLabel' => array(
				'type' => 'string',
				'default' => 'Learn more'
			),
			'ribbonLinkUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'ribbonLinkColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'ribbonLinkFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'ribbonLinkOpenInNewTab' => array(
				'type' => 'boolean',
				'default' => false
			),
			'ribbonHeight' => array(
				'type' => 'number',
				'default' => 48
			),
			'ribbonPaddingTop' => array(
				'type' => 'number',
				'default' => 8
			),
			'ribbonPaddingBottom' => array(
				'type' => 'number',
				'default' => 8
			),
			'centerMenu' => array(
				'type' => 'boolean',
				'default' => true
			),
			'mobileMenuBgColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'mobileLevel1FontSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'mobileLevel1FontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'mobileLevel1FontColor' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'mobileLevel2FontSize' => array(
				'type' => 'number',
				'default' => 15
			),
			'mobileLevel2FontWeight' => array(
				'type' => 'string',
				'default' => '500'
			),
			'mobileLevel2FontColor' => array(
				'type' => 'string',
				'default' => '#222222'
			),
			'mobileLevel3FontSize' => array(
				'type' => 'number',
				'default' => 14
			),
			'mobileLevel3FontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'mobileLevel3FontColor' => array(
				'type' => 'string',
				'default' => '#333333'
			),
			'mobileMenuItemBgColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'mobileMenuItemHoverBgColor' => array(
				'type' => 'string',
				'default' => '#f8f8f8'
			),
			'mobileChevronSize' => array(
				'type' => 'number',
				'default' => 20
			),
			'mobileChevronColor' => array(
				'type' => 'string',
				'default' => '#666666'
			),
			'mobileMenuIconColor' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'mobileMenuIconColorScroll' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'menuDropdownOffset' => array(
				'type' => 'number',
				'default' => 70
			),
			'ctaButtonEnabled' => array(
				'type' => 'boolean',
				'default' => true
			),
			'ctaButtonText' => array(
				'type' => 'string',
				'default' => 'Contact us'
			),
			'ctaButtonLink' => array(
				'type' => 'string',
				'default' => '#'
			),
			'ctaButtonOpenInNewTab' => array(
				'type' => 'boolean',
				'default' => false
			),
			'ctaButtonShowIcon' => array(
				'type' => 'boolean',
				'default' => true
			),
			'ctaButtonStyle' => array(
				'type' => 'string',
				'default' => 'border'
			),
			'ctaButtonHoverAnimation' => array(
				'type' => 'string',
				'default' => 'none'
			),
			'ctaButtonFontSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'ctaButtonFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'ctaButtonColor' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'ctaButtonBackgroundColor' => array(
				'type' => 'string',
				'default' => 'transparent'
			),
			'ctaButtonHoverColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'ctaButtonHoverBackgroundColor' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'ctaButtonUnderlineColor' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'ctaButtonBlurAmount' => array(
				'type' => 'number',
				'default' => 0
			),
			'ctaButtonBorderRadius' => array(
				'type' => 'number',
				'default' => 999
			),
			'ctaButtonBorderWidth' => array(
				'type' => 'number',
				'default' => 1
			),
			'ctaButtonBorderColor' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'ctaButtonHoverBorderColor' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'ctaButtonBorderStyle' => array(
				'type' => 'string',
				'default' => 'solid'
			),
			'ctaButtonPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '24px',
					'bottom' => '10px',
					'left' => '24px'
				)
			),
			'ctaButtonMargin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '0px',
					'bottom' => '0px',
					'left' => '0px'
				)
			),
			'ctaButtonColorScroll' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'ctaButtonBackgroundColorScroll' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'ctaButtonBorderColorScroll' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'ctaButtonHoverColorScroll' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'ctaButtonHoverBackgroundColorScroll' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'ctaButtonHoverBorderColorScroll' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'menuPanelGap' => array(
				'type' => 'number',
				'default' => 16
			),
			'menuPanelPaddingBottom' => array(
				'type' => 'number',
				'default' => 16
			),
			'canvasBannerBackgroundColor' => array(
				'type' => 'string',
				'default' => '#ff3131'
			),
			'canvasBannerWidth' => array(
				'type' => 'number',
				'default' => 100
			),
			'canvasBannerPaddingTop' => array(
				'type' => 'number',
				'default' => 10
			),
			'canvasBannerPaddingBottom' => array(
				'type' => 'number',
				'default' => 10
			),
			'canvasBannerPaddingLeft' => array(
				'type' => 'number',
				'default' => 20
			),
			'canvasBannerPaddingRight' => array(
				'type' => 'number',
				'default' => 20
			),
			'canvasBannerTitleFontSize' => array(
				'type' => 'number',
				'default' => 30
			),
			'canvasBannerTitleColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'canvasBannerTitleFontWeight' => array(
				'type' => 'string',
				'default' => '300'
			),
			'canvasBannerDescriptionFontSize' => array(
				'type' => 'number',
				'default' => 20
			),
			'canvasBannerDescriptionColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'canvasBannerDescriptionFontWeight' => array(
				'type' => 'string',
				'default' => '300'
			),
			'canvasListPaddingLeft' => array(
				'type' => 'number',
				'default' => 20
			),
			'canvasListPaddingRight' => array(
				'type' => 'number',
				'default' => 20
			),
			'canvasStoryTitleFontSize' => array(
				'type' => 'number',
				'default' => 28
			),
			'canvasStoryTitleFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'canvasStoryTitleColor' => array(
				'type' => 'string',
				'default' => '#1a1a1a'
			),
			'canvasStoryTitleMarginTop' => array(
				'type' => 'number',
				'default' => 0
			),
			'canvasStoryTitleMarginBottom' => array(
				'type' => 'number',
				'default' => 12
			),
			'canvasStoryDescriptionFontSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'canvasStoryDescriptionFontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'canvasStoryDescriptionColor' => array(
				'type' => 'string',
				'default' => '#3d3d3d'
			),
			'canvasStoryDescriptionMarginTop' => array(
				'type' => 'number',
				'default' => 12
			),
			'canvasStoryDescriptionMarginBottom' => array(
				'type' => 'number',
				'default' => 16
			),
			'canvasStoryLinkFontSize' => array(
				'type' => 'number',
				'default' => 15
			),
			'canvasStoryLinkFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'canvasStoryLinkColor' => array(
				'type' => 'string',
				'default' => '#4b2aad'
			),
			'canvasStoryLinkMarginTop' => array(
				'type' => 'number',
				'default' => 6
			),
			'canvasStoryLinkMarginBottom' => array(
				'type' => 'number',
				'default' => 0
			),
			'canvasStoryLinkHoverColor' => array(
				'type' => 'string',
				'default' => '#2e1a66'
			),
			'canvasStoryLinkUnderlineColor' => array(
				'type' => 'string',
				'default' => '#4b2aad'
			),
			'canvasStoryLinkUnderlineHeight' => array(
				'type' => 'number',
				'default' => 2
			),
			'canvasStoryLinkUnderlineBorderRadius' => array(
				'type' => 'number',
				'default' => 0
			),
			'canvasStoryDividerEnabled' => array(
				'type' => 'boolean',
				'default' => false
			),
			'canvasStoryDividerWidth' => array(
				'type' => 'number',
				'default' => 2
			),
			'canvasStoryDividerHeight' => array(
				'type' => 'number',
				'default' => 70
			),
			'canvasStoryDividerColor' => array(
				'type' => 'string',
				'default' => '#d7d7d7'
			),
			'canvasStoryDividerAlpha' => array(
				'type' => 'number',
				'default' => 0.4
			),
			'ctaMobileUseSeparateStyles' => array(
				'type' => 'boolean',
				'default' => false
			),
			'ctaMobileButtonColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'ctaMobileButtonBackgroundColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'ctaMobileButtonBorderColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'ctaMobileButtonHoverColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'ctaMobileButtonHoverBackgroundColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'ctaMobileButtonHoverBorderColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'ctaMobileButtonBorderRadius' => array(
				'type' => 'number',
				'default' => 999
			),
			'ctaMobileButtonBorderWidth' => array(
				'type' => 'number',
				'default' => 1
			),
			'ctaMobileButtonPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '24px',
					'bottom' => '10px',
					'left' => '24px'
				)
			),
			'ctaMobileButtonFontSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'ctaMobileButtonFontWeight' => array(
				'type' => 'string',
				'default' => ''
			),
			'ctaMobileButtonShowIcon' => array(
				'type' => 'boolean',
				'default' => true
			),
			'ctaMobileButtonStyle' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'ctaMobileButtonHoverAnimation' => array(
				'type' => 'string',
				'default' => 'inherit'
			)
		),
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#d52940" width="240" height="240" rx="3.29"/><path  fill="#fff" d="M139.93,94.52H82.05a1.87,1.87,0,1,0,0,3.73h56v29.88a1.87,1.87,0,1,0,3.73,0V96.39A1.87,1.87,0,0,0,139.93,94.52Z"/><path  fill="#fff" d="M82.05,176.42H67.11V146.8a1.87,1.87,0,1,0-3.73,0v31.49a1.86,1.86,0,0,0,1.86,1.86H82.05a1.87,1.87,0,1,0,0-3.73Z"/><path  fill="#fff" d="M65.24,141.2a1.87,1.87,0,0,0,1.87-1.87V98.25h7.47a1.87,1.87,0,1,0,0-3.73H65.24a1.86,1.86,0,0,0-1.86,1.87v42.94A1.87,1.87,0,0,0,65.24,141.2Z"/><path  fill="#fff" d="M139.93,133.73a1.87,1.87,0,0,0-1.86,1.87v40.82H89.52a1.87,1.87,0,1,0,0,3.73h50.41a1.87,1.87,0,0,0,1.87-1.86V135.6A1.87,1.87,0,0,0,139.93,133.73Z"/><path  fill="#fff" d="M74.58,138.18V105.72h56v35.06l.06.1-.06,8.28v12.58h-9.34a1.87,1.87,0,1,0,0,3.73h11.2a1.86,1.86,0,0,0,1.87-1.86V103.85a1.86,1.86,0,0,0-1.87-1.86H72.71a1.86,1.86,0,0,0-1.86,1.86v59.76a1.86,1.86,0,0,0,1.86,1.86h41.08a1.87,1.87,0,1,0,0-3.73H74.58V138.18Z"/><path  fill="#fff" d="M72.71,172.68h33.61a1.87,1.87,0,1,0,0-3.73H72.71a1.87,1.87,0,0,0,0,3.73Z"/><path  fill="#fff" d="M117.53,111.32a5.61,5.61,0,1,0,5.6,5.61A5.62,5.62,0,0,0,117.53,111.32Zm0,7.47a1.87,1.87,0,1,1,1.86-1.86A1.87,1.87,0,0,1,117.53,118.79Z"/><path  fill="#fff" d="M173.54,75.85H132.46a1.87,1.87,0,0,0,0,3.73h39.22v39.21a1.87,1.87,0,1,0,3.73,0V77.71A1.87,1.87,0,0,0,173.54,75.85Z"/><path  fill="#fff" d="M173.54,124.39a1.87,1.87,0,0,0-1.86,1.87v29.56H147.4a1.87,1.87,0,0,0,0,3.73h26.14a1.87,1.87,0,0,0,1.87-1.87V126.26A1.87,1.87,0,0,0,173.54,124.39Z"/><path  fill="#fff" d="M98.85,90.78a1.86,1.86,0,0,0,1.87-1.86V79.58H125a1.87,1.87,0,0,0,0-3.73H98.85A1.86,1.86,0,0,0,97,77.71V88.92A1.86,1.86,0,0,0,98.85,90.78Z"/><path  fill="#fff" d="M164.21,123.28V87.05h-56v1.87a1.87,1.87,0,0,1-3.73,0V85.18a1.86,1.86,0,0,1,1.86-1.86h59.75a1.86,1.86,0,0,1,1.87,1.86v59.75a1.86,1.86,0,0,1-1.87,1.87H147.4a1.87,1.87,0,0,1,0-3.73h16.81V123.28Z"/><path  fill="#fff" d="M151.14,103.85a5.6,5.6,0,1,0-5.6-5.6A5.6,5.6,0,0,0,151.14,103.85Zm0-7.46a1.87,1.87,0,1,1-1.87,1.86A1.86,1.86,0,0,1,151.14,96.39Z"/><path  fill="#fff" d="M149.22,36.25l-5.07-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.87,5a1.68,1.68,0,0,0,.67,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.48,2.48,0,0,0-1.18-.29,2.42,2.42,0,0,0-1.17.29l-3.53,1.85.67-3.93a2.5,2.5,0,0,0-.72-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.46,2.46,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#fff" d="M123.24,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.67,1.67,0,0,0-1.34,1.13,1.65,1.65,0,0,0,.42,1.7l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38L119,49.44a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M97.26,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0L84.7,35.51l-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.87,5a1.7,1.7,0,0,0,.66,1.63,1.68,1.68,0,0,0,1,.31,1.62,1.62,0,0,0,.77-.19l4.53-2.38L93,49.44a1.65,1.65,0,0,0,1.75-.12,1.7,1.7,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.93-2.83Z"/></g></svg>'
	),
	'modal-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/modal-block',
		'version' => '0.1.0',
		'title' => 'Modal (Premium)',
		'category' => 'widgets',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 240.04 240.31"><defs><linearGradient id="linear-gradient" x1="-190.43" y1="398.14" x2="517.95" y2="-236.16" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#7a101f"/><stop offset="0.1" stop-color="#841323"/><stop offset="0.26" stop-color="#a01a2d"/><stop offset="0.47" stop-color="#cd273d"/><stop offset="0.51" stop-color="#d52940"/><stop offset="0.61" stop-color="#d1283e"/><stop offset="0.71" stop-color="#c3243a"/><stop offset="0.82" stop-color="#ae1e32"/><stop offset="0.93" stop-color="#8f1627"/><stop offset="1" stop-color="#7a101f"/></linearGradient><linearGradient id="linear-gradient-2" x1="-966.15" y1="380.26" x2="-339.78" y2="-180.6" gradientTransform="translate(811.66 -14.31)" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="-966.11" y1="380.57" x2="-339.74" y2="-180.3" gradientTransform="translate(811.58 -14.92)" xlink:href="#linear-gradient"/><clipPath id="clip-path"><rect  fill="none" x="13.98" y="13.85" width="212" height="212" rx="2.54" transform="translate(239.96 239.69) rotate(180)"/></clipPath><linearGradient id="linear-gradient-4" x1="-39.78" y1="164.16" x2="182.88" y2="-33.17" gradientUnits="userSpaceOnUse"><stop offset="0.21" stop-color="#d74054"/><stop offset="0.35" stop-color="#d84458"/><stop offset="0.51" stop-color="#d04659"/><stop offset="0.66" stop-color="#c64556"/><stop offset="1" stop-color="#b34353"/></linearGradient></defs><g id="icons"><rect  fill="url(#linear-gradient)" x="0.02" y="0.15" width="240" height="240" rx="3.29"/><rect  fill="url(#linear-gradient-2)" x="14.02" y="14.15" width="212" height="212" rx="2.54" transform="translate(240.04 240.31) rotate(180)"/><rect  fill="url(#linear-gradient-3)" x="13.98" y="13.85" width="212" height="212" rx="2.54" transform="translate(239.96 239.69) rotate(180)"/><path  fill="#fff" d="M154.77,36.09l-5.06-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.27,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75L146,46.91l4.52,2.38a1.66,1.66,0,0,0,2.41-1.75l-.86-5,3.66-3.57a1.66,1.66,0,0,0,.42-1.71A1.65,1.65,0,0,0,154.77,36.09Z"/><path  fill="#fff" d="M128.8,36.09l-5.07-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.87,5a1.66,1.66,0,0,0,2.41,1.75L120,46.91l4.53,2.38a1.62,1.62,0,0,0,.77.19,1.66,1.66,0,0,0,1.64-1.94l-.87-5,3.67-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M102.82,36.09l-5.06-.73L95.5,30.77a1.67,1.67,0,0,0-3,0l-2.27,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.86,5a1.66,1.66,0,0,0,1.64,1.94,1.62,1.62,0,0,0,.77-.19L94,46.91l4.52,2.38a1.66,1.66,0,0,0,2.41-1.75l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><rect  fill="none" stroke="#d52940" stroke-miterlimit="10" stroke-width="2px" x="14.48" y="14.35" width="211" height="211" rx="1.71"/><g  clip-path="url(#clip-path)"><path  fill="url(#linear-gradient-4)" d="M223.29,14.67H15.71A1.7,1.7,0,0,0,14,16.37v201L225,21.54V16.37A1.7,1.7,0,0,0,223.29,14.67Z"/></g><rect  fill="none" stroke-miterlimit="10" stroke-width="2px" stroke="#fff" x="14.52" y="14.65" width="211" height="211" rx="1.71"/><path  fill="#fff" d="M154.81,36.4l-5.06-.73-2.27-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.06.73a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.76L146,47.22l4.53,2.38a1.75,1.75,0,0,0,.77.19,1.67,1.67,0,0,0,1.64-1.95l-.86-5,3.66-3.57a1.65,1.65,0,0,0,.42-1.7A1.67,1.67,0,0,0,154.81,36.4Z"/><path  fill="#fff" d="M128.83,36.4l-5.06-.73-2.26-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.07.73a1.66,1.66,0,0,0-.92,2.83L114,42.8l-.87,5a1.66,1.66,0,0,0,2.41,1.76L120,47.22l4.53,2.38a1.75,1.75,0,0,0,.77.19A1.67,1.67,0,0,0,127,47.84l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M102.86,36.4l-5.06-.73-2.27-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.06.73a1.66,1.66,0,0,0-.92,2.83L88,42.8l-.86,5a1.67,1.67,0,0,0,1.63,1.95,1.79,1.79,0,0,0,.78-.19L94,47.22l4.53,2.38A1.66,1.66,0,0,0,101,47.84l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M154.83,36.55l-5.06-.73-2.27-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.65,1.65,0,0,0-1.34,1.13,1.66,1.66,0,0,0,.42,1.71L139.94,43l-.86,5a1.66,1.66,0,0,0,2.41,1.75L146,47.37l4.53,2.38a1.62,1.62,0,0,0,.77.19A1.66,1.66,0,0,0,153,48l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M128.85,36.55l-5.06-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.07.73a1.67,1.67,0,0,0-.92,2.84L114,43l-.86,5a1.66,1.66,0,0,0,2.41,1.75L120,47.37l4.53,2.38a1.6,1.6,0,0,0,.77.19,1.63,1.63,0,0,0,1-.32A1.66,1.66,0,0,0,127,48l-.87-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M102.88,36.55l-5.06-.73-2.27-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84L88,43l-.86,5a1.63,1.63,0,0,0,.66,1.62,1.66,1.66,0,0,0,1.75.13l4.52-2.38,4.53,2.38A1.66,1.66,0,0,0,101,48l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M186.51,138.76l-11.36-4.13a26,26,0,0,0-15.1-37.41,18.65,18.65,0,0,0-24.26-13.87,30.8,30.8,0,0,0-38.58,0A18.66,18.66,0,0,0,72.94,97.22a26.08,26.08,0,0,0,0,49.79,18.66,18.66,0,0,0,24.27,13.88,30.8,30.8,0,0,0,38.58,0,18.72,18.72,0,0,0,6,1,18.41,18.41,0,0,0,10.13-3l3.88,10.65a2.42,2.42,0,0,0,2.1,1.59h.19a2.44,2.44,0,0,0,2.14-1.26l9.45-17.19,17.19-9.45a2.46,2.46,0,0,0,1.25-2.33A2.42,2.42,0,0,0,186.51,138.76Zm-44.73,19.43a14.87,14.87,0,0,1-5.66-1.11,1.83,1.83,0,0,0-1.89.31,27.1,27.1,0,0,1-35.45,0,1.83,1.83,0,0,0-1.21-.44,1.85,1.85,0,0,0-.7.13,14.84,14.84,0,0,1-5.64,1.11A15,15,0,0,1,76.39,145.3,1.87,1.87,0,0,0,75,143.77a22.39,22.39,0,0,1,0-43.31,1.87,1.87,0,0,0,1.37-1.52A15,15,0,0,1,91.23,86.05a14.83,14.83,0,0,1,5.64,1.1,1.87,1.87,0,0,0,1.91-.3,27.07,27.07,0,0,1,35.45,0,1.83,1.83,0,0,0,1.89.3,14.86,14.86,0,0,1,5.66-1.1,15.07,15.07,0,0,1,14.84,12.89,1.83,1.83,0,0,0,1.36,1.52,22.39,22.39,0,0,1,13.68,32.9l-14.35-5.23V109.48a5,5,0,0,0-5-5H80.69a5,5,0,0,0-5,5v25.28a5,5,0,0,0,5,5H145l5.64,15.5A14.91,14.91,0,0,1,141.78,158.19ZM140,126.11l3.62,10H80.69a1.31,1.31,0,0,1-1.31-1.31V109.48a1.32,1.32,0,0,1,1.31-1.32h71.62a1.32,1.32,0,0,1,1.32,1.32v17.31L143.15,123a2.44,2.44,0,0,0-2.56.57A2.41,2.41,0,0,0,140,126.11Zm27.18,23a2.75,2.75,0,0,0-1.09,1.1l-8.22,14.94-12.8-37.06,37.06,12.8Z"/><path  fill="#fff" d="M72.26,184a8.17,8.17,0,1,0,8.17,8.16A8.17,8.17,0,0,0,72.26,184Zm0,12.64a4.48,4.48,0,1,1,4.48-4.48A4.48,4.48,0,0,1,72.26,196.62Z"/><path  fill="#fff" d="M92.28,167.13a11.32,11.32,0,1,0,11.32,11.32A11.34,11.34,0,0,0,92.28,167.13Zm0,19a7.64,7.64,0,1,1,7.63-7.64A7.65,7.65,0,0,1,92.28,186.09Z"/><path  fill="#fff" d="M134.45,120a1.86,1.86,0,0,0,1.31.54,1.85,1.85,0,0,0,1.3-3.15l-2.23-2.23a1.84,1.84,0,0,0-2.61,2.6Z"/><path  fill="#fff" d="M130.13,126.52h3.16a1.84,1.84,0,0,0,0-3.68h-3.16a1.84,1.84,0,0,0,0,3.68Z"/><path  fill="#fff" d="M134.45,129.34l-2.23,2.23a1.85,1.85,0,0,0,2.61,2.61l2.23-2.24a1.84,1.84,0,1,0-2.61-2.6Z"/><path  fill="#fff" d="M141.72,118.1a1.85,1.85,0,0,0,1.84-1.85V113.1a1.85,1.85,0,1,0-3.69,0v3.15A1.85,1.85,0,0,0,141.72,118.1Z"/><path  fill="#fff" d="M147.67,120.57A1.84,1.84,0,0,0,149,120l2.23-2.24a1.84,1.84,0,0,0-2.61-2.6l-2.23,2.23a1.85,1.85,0,0,0,1.3,3.15Z"/></g></svg>',
		'description' => 'A modal block with customizable trigger and content areas.',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'modal-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'modalWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 600,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 90,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 90,
						'unit' => '%'
					)
				)
			),
			'modalHeight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 400,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 400,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 360,
						'unit' => 'px'
					)
				)
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'overlayColor' => array(
				'type' => 'string',
				'default' => 'rgba(0, 0, 0, 0.6)'
			),
			'borderColor' => array(
				'type' => 'string',
				'default' => '#e0e0e0'
			),
			'borderWidth' => array(
				'type' => 'number',
				'default' => 1
			),
			'borderRadius' => array(
				'type' => 'number',
				'default' => 16
			),
			'padding' => array(
				'type' => 'number',
				'default' => 24
			),
			'closeButtonColor' => array(
				'type' => 'string',
				'default' => '#111111'
			),
			'closeButtonBackground' => array(
				'type' => 'string',
				'default' => 'rgba(255, 255, 255, 0.9)'
			),
			'closeButtonSize' => array(
				'type' => 'number',
				'default' => 36
			)
		)
	),
	'modal-content-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/modal-content-block',
		'version' => '0.1.0',
		'title' => 'Modal Content',
		'category' => 'widgets',
		'icon' => 'feedback',
		'parent' => array(
			'create-block/modal-block'
		),
		'description' => 'Defines the modal body content.',
		'supports' => array(
			'html' => false,
			'inserter' => false
		),
		'textdomain' => 'modal-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'modal-trigger-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/modal-trigger-block',
		'version' => '0.1.0',
		'title' => 'Modal Trigger',
		'category' => 'widgets',
		'icon' => 'button',
		'parent' => array(
			'create-block/modal-block'
		),
		'description' => 'Defines the trigger for opening the modal.',
		'supports' => array(
			'html' => false,
			'inserter' => false
		),
		'textdomain' => 'modal-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'our-process-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/our-process-block',
		'version' => '0.1.0',
		'title' => 'Our Process',
		'category' => 'widgets',
		'icon' => 'list-view',
		'description' => 'Showcase your process steps with icons, titles, and descriptions in a responsive grid layout.',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'our-process-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'constrained'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'heading' => array(
				'type' => 'string',
				'default' => 'Our AI-first digital solutions'
			),
			'subheading' => array(
				'type' => 'string',
				'default' => 'Preparing data to become AI-ready, improving the digital customer experience, leveraging the cloud, data strategy, and engineering — we partner with you to overcome your biggest challenges with digital product development.'
			),
			'processSteps' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 'step-1',
						'icon' => 'bi bi-robot',
						'title' => 'AI, ML, LLM',
						'description' => ''
					),
					array(
						'id' => 'step-2',
						'icon' => 'bi bi-shield-check',
						'title' => 'Application development',
						'description' => ''
					),
					array(
						'id' => 'step-3',
						'icon' => 'bi bi-box',
						'title' => 'Data modernization',
						'description' => ''
					),
					array(
						'id' => 'step-4',
						'icon' => 'bi bi-cloud',
						'title' => 'Cloud and infrastructure',
						'description' => ''
					),
					array(
						'id' => 'step-5',
						'icon' => 'bi bi-grid-3x3',
						'title' => 'Tech strategy and advisory',
						'description' => ''
					),
					array(
						'id' => 'step-6',
						'icon' => 'bi bi-palette',
						'title' => 'UX and UI Design',
						'description' => ''
					)
				)
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#0a0e27'
			),
			'headingColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'subheadingColor' => array(
				'type' => 'string',
				'default' => '#94a3b8'
			),
			'boxBackgroundColor' => array(
				'type' => 'string',
				'default' => '#1a1f3a'
			),
			'boxBorderColor' => array(
				'type' => 'string',
				'default' => '#2d3454'
			),
			'boxHoverBackgroundColor' => array(
				'type' => 'string',
				'default' => '#252b4a'
			),
			'boxHoverBorderColor' => array(
				'type' => 'string',
				'default' => '#4a5578'
			),
			'iconColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'titleColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'headingFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 48,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 36,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 28,
						'unit' => 'px'
					)
				)
			),
			'subheadingFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 18,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 16,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 14,
						'unit' => 'px'
					)
				)
			),
			'titleFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 18,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 16,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 14,
						'unit' => 'px'
					)
				)
			),
			'iconSize' => array(
				'type' => 'number',
				'default' => 32
			),
			'boxPadding' => array(
				'type' => 'number',
				'default' => 24
			),
			'boxBorderRadius' => array(
				'type' => 'number',
				'default' => 8
			),
			'boxBorderWidth' => array(
				'type' => 'number',
				'default' => 1
			),
			'gridColumns' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 3,
					'tablet' => 2,
					'mobile' => 1
				)
			),
			'gridGap' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 16,
					'tablet' => 16,
					'mobile' => 16
				)
			)
		)
	),
	'particles-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/particles-block',
		'version' => '0.1.0',
		'title' => 'Particles Block (Premium)',
		'category' => 'widgets',
		'description' => 'A section with scattered images that move with scroll using GSAP.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
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
						'description' => 'We’re a passionate team of creatives and technologists dedicated to crafting meaningful digital experiences that drive results.',
						'appearAtPercent' => 0,
						'disappearAtPercent' => 20
					),
					array(
						'id' => 1,
						'title' => 'Luthando',
						'description' => 'Web Dev Lead',
						'appearAtPercent' => 20,
						'disappearAtPercent' => 35
					),
					array(
						'id' => 2,
						'title' => 'Reinhold',
						'description' => 'Project Manager',
						'appearAtPercent' => 35,
						'disappearAtPercent' => 50
					),
					array(
						'id' => 3,
						'title' => 'Daryn',
						'description' => 'Project Manager',
						'appearAtPercent' => 50,
						'disappearAtPercent' => 65
					),
					array(
						'id' => 4,
						'title' => 'Hilya',
						'description' => 'Web Developer (WordPress, Bubble)',
						'appearAtPercent' => 65,
						'disappearAtPercent' => 75
					),
					array(
						'id' => 5,
						'title' => 'Patrick',
						'description' => 'Web Developer (WordPress, Bubble)',
						'appearAtPercent' => 75,
						'disappearAtPercent' => 85
					),
					array(
						'id' => 6,
						'title' => 'Douglas',
						'description' => 'Web Developer (WordPress, Custom)',
						'appearAtPercent' => 85,
						'disappearAtPercent' => 92
					),
					array(
						'id' => 7,
						'title' => 'Marvel',
						'description' => 'QA Tester',
						'appearAtPercent' => 92,
						'disappearAtPercent' => 100
					),
					array(
						'id' => 8,
						'title' => 'Gideon',
						'description' => 'Designer',
						'appearAtPercent' => 100,
						'disappearAtPercent' => 110
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
			'textAnimationDuration' => array(
				'type' => 'number',
				'default' => 0.35
			),
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 240.04 240.31"><defs><linearGradient id="linear-gradient" x1="-190.43" y1="398.14" x2="517.95" y2="-236.16" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#7a101f"/><stop offset="0.1" stop-color="#841323"/><stop offset="0.26" stop-color="#a01a2d"/><stop offset="0.47" stop-color="#cd273d"/><stop offset="0.51" stop-color="#d52940"/><stop offset="0.61" stop-color="#d1283e"/><stop offset="0.71" stop-color="#c3243a"/><stop offset="0.82" stop-color="#ae1e32"/><stop offset="0.93" stop-color="#8f1627"/><stop offset="1" stop-color="#7a101f"/></linearGradient><linearGradient id="linear-gradient-2" x1="251.85" y1="1182.26" x2="878.22" y2="621.4" gradientTransform="translate(-406.34 -816.31)" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="251.89" y1="1182.57" x2="878.26" y2="621.7" gradientTransform="translate(-406.42 -816.92)" xlink:href="#linear-gradient"/><clipPath id="clip-path"><rect  fill="none" x="13.98" y="13.85" width="212" height="212" rx="2.54" transform="translate(239.96 239.69) rotate(180)"/></clipPath><linearGradient id="linear-gradient-4" x1="-39.78" y1="164.16" x2="182.88" y2="-33.17" gradientUnits="userSpaceOnUse"><stop offset="0.21" stop-color="#d74054"/><stop offset="0.35" stop-color="#d84458"/><stop offset="0.51" stop-color="#d04659"/><stop offset="0.66" stop-color="#c64556"/><stop offset="1" stop-color="#b34353"/></linearGradient></defs><g id="icons"><rect  fill="url(#linear-gradient)" x="0.02" y="0.15" width="240" height="240" rx="3.29"/><rect  fill="url(#linear-gradient-2)" x="14.02" y="14.15" width="212" height="212" rx="2.54" transform="translate(240.04 240.31) rotate(180)"/><rect  fill="url(#linear-gradient-3)" x="13.98" y="13.85" width="212" height="212" rx="2.54" transform="translate(239.96 239.69) rotate(180)"/><path  fill="#fff" d="M154.77,36.09l-5.06-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.27,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75L146,46.91l4.52,2.38a1.66,1.66,0,0,0,2.41-1.75l-.86-5,3.66-3.57a1.66,1.66,0,0,0,.42-1.71A1.65,1.65,0,0,0,154.77,36.09Z"/><path  fill="#fff" d="M128.8,36.09l-5.07-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.87,5a1.66,1.66,0,0,0,2.41,1.75L120,46.91l4.53,2.38a1.62,1.62,0,0,0,.77.19,1.66,1.66,0,0,0,1.64-1.94l-.87-5,3.67-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M102.82,36.09l-5.06-.73L95.5,30.77a1.67,1.67,0,0,0-3,0l-2.27,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.86,5a1.66,1.66,0,0,0,1.64,1.94,1.62,1.62,0,0,0,.77-.19L94,46.91l4.52,2.38a1.66,1.66,0,0,0,2.41-1.75l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><rect  fill="none" stroke="#d52940" stroke-miterlimit="10" stroke-width="2px" x="14.48" y="14.35" width="211" height="211" rx="1.71"/><g  clip-path="url(#clip-path)"><path  fill="url(#linear-gradient-4)" d="M223.29,14.67H15.71A1.7,1.7,0,0,0,14,16.37v201L225,21.54V16.37A1.7,1.7,0,0,0,223.29,14.67Z"/></g><rect  fill="none" stroke-miterlimit="10" stroke-width="2px" stroke="#fff" x="14.52" y="14.65" width="211" height="211" rx="1.71"/><path  fill="#fff" d="M154.81,36.4l-5.06-.73-2.27-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.06.73a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.76L146,47.22l4.53,2.38a1.75,1.75,0,0,0,.77.19,1.67,1.67,0,0,0,1.64-1.95l-.86-5,3.66-3.57a1.65,1.65,0,0,0,.42-1.7A1.67,1.67,0,0,0,154.81,36.4Z"/><path  fill="#fff" d="M128.83,36.4l-5.06-.73-2.26-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.07.73a1.66,1.66,0,0,0-.92,2.83L114,42.8l-.87,5a1.66,1.66,0,0,0,2.41,1.76L120,47.22l4.53,2.38a1.75,1.75,0,0,0,.77.19A1.67,1.67,0,0,0,127,47.84l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M102.86,36.4l-5.06-.73-2.27-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.06.73a1.66,1.66,0,0,0-.92,2.83L88,42.8l-.86,5a1.67,1.67,0,0,0,1.63,1.95,1.79,1.79,0,0,0,.78-.19L94,47.22l4.53,2.38A1.66,1.66,0,0,0,101,47.84l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M154.83,36.55l-5.06-.73-2.27-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.65,1.65,0,0,0-1.34,1.13,1.66,1.66,0,0,0,.42,1.71L139.94,43l-.86,5a1.66,1.66,0,0,0,2.41,1.75L146,47.37l4.53,2.38a1.62,1.62,0,0,0,.77.19A1.66,1.66,0,0,0,153,48l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M128.85,36.55l-5.06-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.07.73a1.67,1.67,0,0,0-.92,2.84L114,43l-.86,5a1.66,1.66,0,0,0,2.41,1.75L120,47.37l4.53,2.38a1.6,1.6,0,0,0,.77.19,1.63,1.63,0,0,0,1-.32A1.66,1.66,0,0,0,127,48l-.87-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M102.88,36.55l-5.06-.73-2.27-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84L88,43l-.86,5a1.63,1.63,0,0,0,.66,1.62,1.66,1.66,0,0,0,1.75.13l4.52-2.38,4.53,2.38A1.66,1.66,0,0,0,101,48l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M77.85,98.36a4,4,0,0,0,4-4V90.47a4,4,0,0,0-8,0v3.87A4,4,0,0,0,77.85,98.36Z"/><path  fill="#fff" d="M77.85,119.26a4,4,0,0,0,4-4v-3.87a4,4,0,0,0-8,0v3.87A4,4,0,0,0,77.85,119.26Z"/><path  fill="#fff" d="M86.37,106.87h3.87a4,4,0,0,0,0-8H86.37a4,4,0,1,0,0,8Z"/><path  fill="#fff" d="M65.47,106.87h3.87a4,4,0,0,0,0-8H65.47a4,4,0,1,0,0,8Z"/><path  fill="#fff" d="M155,126.62a5.69,5.69,0,0,0,5.69-5.69v-5.48a5.69,5.69,0,1,0-11.38,0v5.48A5.69,5.69,0,0,0,155,126.62Z"/><path  fill="#fff" d="M155,156.25a5.69,5.69,0,0,0,5.69-5.69v-5.49a5.69,5.69,0,0,0-11.38,0v5.49A5.69,5.69,0,0,0,155,156.25Z"/><path  fill="#fff" d="M172.56,127.31h-5.48a5.69,5.69,0,0,0,0,11.38h5.48a5.69,5.69,0,0,0,0-11.38Z"/><path  fill="#fff" d="M148.63,133a5.69,5.69,0,0,0-5.69-5.69h-5.49a5.69,5.69,0,0,0,0,11.38h5.49A5.69,5.69,0,0,0,148.63,133Z"/><path  fill="#fff" d="M111.61,163.18a2.75,2.75,0,0,0-2.75,2.75v2.65a2.76,2.76,0,0,0,5.51,0v-2.65A2.76,2.76,0,0,0,111.61,163.18Z"/><path  fill="#fff" d="M111.61,177.51a2.75,2.75,0,0,0-2.75,2.75v2.65a2.76,2.76,0,0,0,5.51,0v-2.65A2.76,2.76,0,0,0,111.61,177.51Z"/><path  fill="#fff" d="M120.11,171.67h-2.66a2.75,2.75,0,0,0,0,5.5h2.66a2.75,2.75,0,0,0,0-5.5Z"/><path  fill="#fff" d="M105.78,171.67h-2.66a2.75,2.75,0,1,0,0,5.5h2.66a2.75,2.75,0,0,0,0-5.5Z"/></g></svg>'
	),
	'portfolio-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/portfolio-block',
		'version' => '0.1.0',
		'title' => 'Portfolio (Plus)',
		'category' => 'widgets',
		'description' => 'A portfolio section with gallery and modal slider using GSAP animations.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => true,
			'alignWide' => true,
			'anchor' => true,
			'customClassName' => true,
			'reusable' => true,
			'innerBlocks' => true
		),
		'textdomain' => 'portfolio-block',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#d52940" width="240" height="240" rx="3.29"/><path  fill="#fff" d="M146.94,87.79H92.65a4.36,4.36,0,0,0-4.32,4.4v71.62a4.36,4.36,0,0,0,4.32,4.4h54.29a4.36,4.36,0,0,0,4.32-4.4V92.19A4.36,4.36,0,0,0,146.94,87.79Zm-.65,72.44a2.33,2.33,0,0,1-2.33,2.34H95.63a2.34,2.34,0,0,1-2.34-2.34V95.77a2.34,2.34,0,0,1,2.34-2.34H144a2.33,2.33,0,0,1,2.33,2.34Z"/><path  fill="#fff" d="M79.66,96.35H36.93a3.43,3.43,0,0,0-3.4,3.47v56.36a3.43,3.43,0,0,0,3.4,3.47H79.66a3.43,3.43,0,0,0,3.4-3.47V99.82A3.43,3.43,0,0,0,79.66,96.35Zm-1.13,56.26a1.79,1.79,0,0,1-1.79,1.78H39.85a1.79,1.79,0,0,1-1.79-1.78V103.39a1.79,1.79,0,0,1,1.79-1.78H76.74a1.79,1.79,0,0,1,1.79,1.78Z"/><path  fill="#fff" d="M202.66,96.35H159.93a3.43,3.43,0,0,0-3.4,3.47v56.36a3.43,3.43,0,0,0,3.4,3.47h42.73a3.43,3.43,0,0,0,3.4-3.47V99.82A3.43,3.43,0,0,0,202.66,96.35Zm-1.13,56.26a1.79,1.79,0,0,1-1.79,1.78H162.85a1.79,1.79,0,0,1-1.79-1.78V103.39a1.79,1.79,0,0,1,1.79-1.78h36.89a1.79,1.79,0,0,1,1.79,1.78Z"/><path  fill="#fff" d="M154.79,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12L146,47.06l4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.68,3.93-3.53-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.5,2.5,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38L146,32.94l1.76,3.57a2.5,2.5,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#fff" d="M128.81,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.93,2.83l3.67,3.57-.87,5a1.7,1.7,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12L120,47.06l4.53,2.38a1.62,1.62,0,0,0,.77.19,1.68,1.68,0,0,0,1-.31,1.7,1.7,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.93-2.83Z"/><path  fill="#fff" d="M102.84,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83L88,42.65l-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1,.31,1.66,1.66,0,0,0,.78-.19L94,47.06l4.53,2.38a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/></g></svg>',
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
			'agencyTitleColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'agencyTitleFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'agencyDescriptionColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'agencyDescriptionFontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'modalTitleColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'modalTitleFontWeight' => array(
				'type' => 'string',
				'default' => '700'
			),
			'modalDescriptionColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'modalDescriptionFontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'modalTagColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'modalTagFontWeight' => array(
				'type' => 'string',
				'default' => '400'
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
				'type' => 'object',
				'default' => array(
					'top' => '0.2em',
					'right' => '0',
					'bottom' => '0.2em',
					'left' => '0'
				)
			),
			'buttonMargin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '20px',
					'right' => '0',
					'bottom' => '20px',
					'left' => '0'
				)
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
	'posts-grid-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/posts-grid-block',
		'version' => '0.1.0',
		'title' => 'Posts Grid',
		'category' => 'widgets',
		'description' => 'A dynamic posts grid with beautiful GSAP animations, multiple layout options, and category filtering.',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'posts-grid-block',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'postsPerPage' => array(
				'type' => 'number',
				'default' => 6
			),
			'enablePagination' => array(
				'type' => 'boolean',
				'default' => false
			),
			'paginationStyle' => array(
				'type' => 'string',
				'default' => 'numbers'
			),
			'selectedCategories' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'selectedPosts' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'postType' => array(
				'type' => 'string',
				'default' => 'post'
			),
			'excludeCurrentPost' => array(
				'type' => 'boolean',
				'default' => true
			),
			'showCategories' => array(
				'type' => 'boolean',
				'default' => true
			),
			'showDate' => array(
				'type' => 'boolean',
				'default' => true
			),
			'showAuthor' => array(
				'type' => 'boolean',
				'default' => true
			),
			'showReadTime' => array(
				'type' => 'boolean',
				'default' => true
			),
			'showExcerpt' => array(
				'type' => 'boolean',
				'default' => true
			),
			'excerptLength' => array(
				'type' => 'number',
				'default' => 20
			),
			'layoutType' => array(
				'type' => 'string',
				'default' => 'normal'
			),
			'columns' => array(
				'type' => 'number',
				'default' => 3
			),
			'enableFiltering' => array(
				'type' => 'boolean',
				'default' => false
			),
			'filterPosition' => array(
				'type' => 'string',
				'default' => 'top'
			),
			'filterStyle' => array(
				'type' => 'string',
				'default' => 'pills'
			),
			'cardBorderRadius' => array(
				'type' => 'number',
				'default' => 8
			),
			'cardPadding' => array(
				'type' => 'number',
				'default' => 20
			),
			'cardGap' => array(
				'type' => 'number',
				'default' => 24
			),
			'imageHeight' => array(
				'type' => 'number',
				'default' => 200
			),
			'imageFit' => array(
				'type' => 'string',
				'default' => 'cover'
			),
			'titleColor' => array(
				'type' => 'string',
				'default' => '#1f2937'
			),
			'titleFontSize' => array(
				'type' => 'number',
				'default' => 18
			),
			'titleFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'excerptColor' => array(
				'type' => 'string',
				'default' => '#6b7280'
			),
			'excerptFontSize' => array(
				'type' => 'number',
				'default' => 14
			),
			'excerptFontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'metaColor' => array(
				'type' => 'string',
				'default' => '#9ca3af'
			),
			'metaFontSize' => array(
				'type' => 'number',
				'default' => 12
			),
			'metaFontWeight' => array(
				'type' => 'string',
				'default' => '400'
			),
			'categoryColor' => array(
				'type' => 'string',
				'default' => '#3b82f6'
			),
			'categoryBackgroundColor' => array(
				'type' => 'string',
				'default' => '#f1f5f9'
			),
			'categoryBorderRadius' => array(
				'type' => 'number',
				'default' => 16
			),
			'filterBorderRadius' => array(
				'type' => 'number',
				'default' => 16
			),
			'paginationBorderRadius' => array(
				'type' => 'number',
				'default' => 6
			),
			'enableAnimations' => array(
				'type' => 'boolean',
				'default' => true
			),
			'animationType' => array(
				'type' => 'string',
				'default' => 'fadeUp'
			),
			'transitionAnimation' => array(
				'type' => 'string',
				'default' => 'fade'
			),
			'animationDuration' => array(
				'type' => 'number',
				'default' => 0.6
			),
			'animationDelay' => array(
				'type' => 'number',
				'default' => 0.1
			),
			'animationEase' => array(
				'type' => 'string',
				'default' => 'power2.out'
			),
			'enableHoverEffects' => array(
				'type' => 'boolean',
				'default' => true
			),
			'hoverScale' => array(
				'type' => 'number',
				'default' => 1.05
			),
			'hoverShadow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'overlayOpacity' => array(
				'type' => 'number',
				'default' => 0.4
			),
			'overlayGradient' => array(
				'type' => 'string',
				'default' => 'linear-gradient(135deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.6) 100%)'
			),
			'textAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'marginTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			)
		),
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#fff" x="1" y="0.93" width="238" height="238" rx="3.87"/><path  fill="#d52940" d="M236.49,0H3.51A3.51,3.51,0,0,0,0,3.51v233A3.51,3.51,0,0,0,3.51,240h233a3.51,3.51,0,0,0,3.51-3.51V3.51A3.51,3.51,0,0,0,236.49,0Zm0,235.61a.89.89,0,0,1-.89.89H4.39a.89.89,0,0,1-.89-.89V4.39a.89.89,0,0,1,.89-.89H235.61a.89.89,0,0,1,.89.89Z"/><path  fill="#d52940" d="M153.21,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.53,2.53,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.48,2.48,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#d52940" d="M127.23,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.67-1.63l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.07,5a2.49,2.49,0,0,0-.73,2.22l.67,3.92-3.51-1.85a2.56,2.56,0,0,0-1.17-.29,2.53,2.53,0,0,0-1.17.29l-3.52,1.85.67-3.92a2.51,2.51,0,0,0-.72-2.22l-2.84-2.78,3.93-.57a2.51,2.51,0,0,0,1.89-1.37L118.42,33l1.75,3.56a2.53,2.53,0,0,0,1.9,1.37l3.93.57Z"/><path  fill="#d52940" d="M101.26,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75l4.52-2.38L97,49.44a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#d52940" d="M133.05,87.63H106A6.28,6.28,0,0,0,99.7,93.9V121a6.28,6.28,0,0,0,6.28,6.28h27.07a6.28,6.28,0,0,0,6.28-6.28V93.9A6.28,6.28,0,0,0,133.05,87.63Zm2.08,33.7a1.73,1.73,0,0,1-1.73,1.73H105.63a1.73,1.73,0,0,1-1.73-1.73V93.56a1.72,1.72,0,0,1,1.73-1.73H133.4a1.72,1.72,0,0,1,1.73,1.73Z"/><path  fill="#d52940" d="M177.74,131.47H150.67a6.28,6.28,0,0,0-6.28,6.28v27.07a6.28,6.28,0,0,0,6.28,6.28h27.07a6.28,6.28,0,0,0,6.28-6.28V137.75A6.28,6.28,0,0,0,177.74,131.47Zm2.08,33.7a1.73,1.73,0,0,1-1.73,1.73H150.32a1.72,1.72,0,0,1-1.73-1.73V137.4a1.72,1.72,0,0,1,1.73-1.73h27.77a1.73,1.73,0,0,1,1.73,1.73Z"/><path  fill="#d52940" d="M88.37,131.47H61.29A6.28,6.28,0,0,0,55,137.75v27.07a6.28,6.28,0,0,0,6.28,6.28H88.37a6.28,6.28,0,0,0,6.27-6.28V137.75A6.28,6.28,0,0,0,88.37,131.47Zm2.07,33.7a1.72,1.72,0,0,1-1.73,1.73H60.94a1.73,1.73,0,0,1-1.73-1.73V137.4a1.73,1.73,0,0,1,1.73-1.73H88.71a1.72,1.72,0,0,1,1.73,1.73Z"/><path  fill="#d52940" d="M106,171.1h27.07a6.28,6.28,0,0,0,6.28-6.28V137.75a6.28,6.28,0,0,0-6.28-6.28H106a6.28,6.28,0,0,0-6.28,6.28v27.07A6.28,6.28,0,0,0,106,171.1Zm-2.08-33.7a1.72,1.72,0,0,1,1.73-1.73H133.4a1.72,1.72,0,0,1,1.73,1.73v27.77a1.72,1.72,0,0,1-1.73,1.73H105.63a1.72,1.72,0,0,1-1.73-1.73Z"/><path  fill="#d52940" d="M61.29,127.26H88.37A6.28,6.28,0,0,0,94.64,121V93.9a6.27,6.27,0,0,0-6.27-6.27H61.29A6.28,6.28,0,0,0,55,93.9V121A6.28,6.28,0,0,0,61.29,127.26Zm-2.08-33.7a1.73,1.73,0,0,1,1.73-1.73H88.71a1.72,1.72,0,0,1,1.73,1.73v27.77a1.73,1.73,0,0,1-1.73,1.73H60.94a1.74,1.74,0,0,1-1.73-1.73Z"/><path  fill="#d52940" d="M150.67,127.26h27.07A6.28,6.28,0,0,0,184,121V93.9a6.28,6.28,0,0,0-6.28-6.27H150.67a6.28,6.28,0,0,0-6.28,6.27V121A6.28,6.28,0,0,0,150.67,127.26Zm-2.08-33.7a1.72,1.72,0,0,1,1.73-1.73h27.77a1.73,1.73,0,0,1,1.73,1.73v27.77a1.74,1.74,0,0,1-1.73,1.73H150.32a1.73,1.73,0,0,1-1.73-1.73Z"/></g></svg>'
	),
	'project-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/project-block',
		'version' => '0.1.0',
		'title' => 'Project Block (Premium)',
		'category' => 'widgets',
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
			'nextLabel' => array(
				'type' => 'string',
				'default' => 'Next'
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
		),
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 240.04 240.31"><defs><linearGradient id="linear-gradient" x1="-190.43" y1="398.14" x2="517.95" y2="-236.16" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#7a101f"/><stop offset="0.1" stop-color="#841323"/><stop offset="0.26" stop-color="#a01a2d"/><stop offset="0.47" stop-color="#cd273d"/><stop offset="0.51" stop-color="#d52940"/><stop offset="0.61" stop-color="#d1283e"/><stop offset="0.71" stop-color="#c3243a"/><stop offset="0.82" stop-color="#ae1e32"/><stop offset="0.93" stop-color="#8f1627"/><stop offset="1" stop-color="#7a101f"/></linearGradient><linearGradient id="linear-gradient-2" x1="-2182.15" y1="1182.26" x2="-1555.78" y2="621.4" gradientTransform="translate(2027.66 -816.31)" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="-2182.11" y1="1182.57" x2="-1555.74" y2="621.7" gradientTransform="translate(2027.58 -816.92)" xlink:href="#linear-gradient"/><clipPath id="clip-path"><rect  fill="none" x="13.98" y="13.85" width="212" height="212" rx="2.54" transform="translate(239.96 239.69) rotate(180)"/></clipPath><linearGradient id="linear-gradient-4" x1="-39.78" y1="164.16" x2="182.88" y2="-33.17" gradientUnits="userSpaceOnUse"><stop offset="0.21" stop-color="#d74054"/><stop offset="0.35" stop-color="#d84458"/><stop offset="0.51" stop-color="#d04659"/><stop offset="0.66" stop-color="#c64556"/><stop offset="1" stop-color="#b34353"/></linearGradient></defs><g id="icons"><rect  fill="url(#linear-gradient)" x="0.02" y="0.15" width="240" height="240" rx="3.29"/><rect  fill="url(#linear-gradient-2)" x="14.02" y="14.15" width="212" height="212" rx="2.54" transform="translate(240.04 240.31) rotate(180)"/><rect  fill="url(#linear-gradient-3)" x="13.98" y="13.85" width="212" height="212" rx="2.54" transform="translate(239.96 239.69) rotate(180)"/><path  fill="#fff" d="M154.77,36.09l-5.06-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.27,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75L146,46.91l4.52,2.38a1.66,1.66,0,0,0,2.41-1.75l-.86-5,3.66-3.57a1.66,1.66,0,0,0,.42-1.71A1.65,1.65,0,0,0,154.77,36.09Z"/><path  fill="#fff" d="M128.8,36.09l-5.07-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.87,5a1.66,1.66,0,0,0,2.41,1.75L120,46.91l4.53,2.38a1.62,1.62,0,0,0,.77.19,1.66,1.66,0,0,0,1.64-1.94l-.87-5,3.67-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M102.82,36.09l-5.06-.73L95.5,30.77a1.67,1.67,0,0,0-3,0l-2.27,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84l3.66,3.57-.86,5a1.66,1.66,0,0,0,1.64,1.94,1.62,1.62,0,0,0,.77-.19L94,46.91l4.52,2.38a1.66,1.66,0,0,0,2.41-1.75l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><rect  fill="none" stroke="#d52940" stroke-miterlimit="10" stroke-width="2px" x="14.48" y="14.35" width="211" height="211" rx="1.71"/><g  clip-path="url(#clip-path)"><path  fill="url(#linear-gradient-4)" d="M223.29,14.67H15.71A1.7,1.7,0,0,0,14,16.37v201L225,21.54V16.37A1.7,1.7,0,0,0,223.29,14.67Z"/></g><rect  fill="none" stroke-miterlimit="10" stroke-width="2px" stroke="#fff" x="14.52" y="14.65" width="211" height="211" rx="1.71"/><path  fill="#fff" d="M154.81,36.4l-5.06-.73-2.27-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.06.73a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.76L146,47.22l4.53,2.38a1.75,1.75,0,0,0,.77.19,1.67,1.67,0,0,0,1.64-1.95l-.86-5,3.66-3.57a1.65,1.65,0,0,0,.42-1.7A1.67,1.67,0,0,0,154.81,36.4Z"/><path  fill="#fff" d="M128.83,36.4l-5.06-.73-2.26-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.07.73a1.66,1.66,0,0,0-.92,2.83L114,42.8l-.87,5a1.66,1.66,0,0,0,2.41,1.76L120,47.22l4.53,2.38a1.75,1.75,0,0,0,.77.19A1.67,1.67,0,0,0,127,47.84l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M102.86,36.4l-5.06-.73-2.27-4.59a1.66,1.66,0,0,0-3,0l-2.26,4.59-5.06.73a1.66,1.66,0,0,0-.92,2.83L88,42.8l-.86,5a1.67,1.67,0,0,0,1.63,1.95,1.79,1.79,0,0,0,.78-.19L94,47.22l4.53,2.38A1.66,1.66,0,0,0,101,47.84l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M154.83,36.55l-5.06-.73-2.27-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.65,1.65,0,0,0-1.34,1.13,1.66,1.66,0,0,0,.42,1.71L139.94,43l-.86,5a1.66,1.66,0,0,0,2.41,1.75L146,47.37l4.53,2.38a1.62,1.62,0,0,0,.77.19A1.66,1.66,0,0,0,153,48l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M128.85,36.55l-5.06-.73-2.26-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.07.73a1.67,1.67,0,0,0-.92,2.84L114,43l-.86,5a1.66,1.66,0,0,0,2.41,1.75L120,47.37l4.53,2.38a1.6,1.6,0,0,0,.77.19,1.63,1.63,0,0,0,1-.32A1.66,1.66,0,0,0,127,48l-.87-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M102.88,36.55l-5.06-.73-2.27-4.59a1.67,1.67,0,0,0-3,0l-2.26,4.59-5.06.73a1.67,1.67,0,0,0-.92,2.84L88,43l-.86,5a1.63,1.63,0,0,0,.66,1.62,1.66,1.66,0,0,0,1.75.13l4.52-2.38,4.53,2.38A1.66,1.66,0,0,0,101,48l-.86-5,3.66-3.57a1.67,1.67,0,0,0-.92-2.84Z"/><path  fill="#fff" d="M106.74,104.45H96a2.08,2.08,0,0,0-2.08,2.08v30.13A2.08,2.08,0,0,0,96,138.74h10.72a2.08,2.08,0,0,0,2.08-2.08V106.53A2.08,2.08,0,0,0,106.74,104.45Zm-2.09,30.12H98.1V108.62h6.55Z"/><path  fill="#fff" d="M125.49,114.77H114.78a2.08,2.08,0,0,0-2.09,2.08v19.81a2.08,2.08,0,0,0,2.09,2.08h10.71a2.09,2.09,0,0,0,2.09-2.08V116.85A2.09,2.09,0,0,0,125.49,114.77Zm-2.08,19.8h-6.55V118.94h6.55Z"/><path  fill="#fff" d="M144.25,98.67H133.53a2.08,2.08,0,0,0-2.08,2.08v35.91a2.08,2.08,0,0,0,2.08,2.08h10.72a2.08,2.08,0,0,0,2.08-2.08V100.75A2.08,2.08,0,0,0,144.25,98.67Zm-2.09,35.9h-6.55V102.83h6.55Z"/><path  fill="#fff" d="M171.28,93.06A2.09,2.09,0,0,0,173.37,91V81.52a2.09,2.09,0,0,0-2.09-2.09H68.78a2.08,2.08,0,0,0-2.08,2.09V91a2.08,2.08,0,0,0,2.08,2.08h2.38v51.28H68.78a2.09,2.09,0,0,0-2.08,2.09v9.46A2.08,2.08,0,0,0,68.78,158h36v5a2.09,2.09,0,0,0,2.09,2.08h6.69v19.2a2.09,2.09,0,1,0,4.17,0V165h4.77v19.2a2.08,2.08,0,1,0,4.16,0V165h6.7a2.09,2.09,0,0,0,2.09-2.08v-5h19.59v7.76a5.56,5.56,0,1,0,4.17,0V158h12.05a2.09,2.09,0,0,0,2.09-2.08v-9.46a2.1,2.1,0,0,0-2.09-2.09h-2.17V93.06Zm-95.95,0h89.61v51.28H75.33Zm56,67.79H109V158H131.3Zm25.84,11.41a1.39,1.39,0,1,1,1.39-1.38A1.38,1.38,0,0,1,157.14,172.26Zm12.06-23.75v5.3H70.86v-5.3ZM70.86,88.89V83.6H169.2v5.29Z"/></g></svg>'
	),
	'questions-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/questions-block',
		'version' => '0.1.0',
		'title' => 'Questions (Plus)',
		'category' => 'widgets',
		'description' => 'Animated questions section with GSAP pinning and transitions.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'questions-block',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#d52940" width="240" height="240" rx="3.29"/><path  fill="#fff" d="M119.77,187a10.78,10.78,0,0,1-7.63-3.15L96.82,168.52h-21a16.73,16.73,0,0,1-16.71-16.71V89.71A16.73,16.73,0,0,1,75.86,73h87.82A16.74,16.74,0,0,1,180.4,89.71v62.1a16.78,16.78,0,0,1-12.12,16.07,1.77,1.77,0,1,1-1-3.41,13.22,13.22,0,0,0,9.55-12.66V89.71a13.19,13.19,0,0,0-13.17-13.16H75.86A13.18,13.18,0,0,0,62.7,89.71v62.1A13.18,13.18,0,0,0,75.86,165h21.7a1.81,1.81,0,0,1,1.26.52l15.84,15.84a7.22,7.22,0,0,0,10.23,0l15.84-15.84A1.8,1.8,0,0,1,142,165h17.55a1.78,1.78,0,1,1,0,3.55H142.72L127.4,183.85a10.75,10.75,0,0,1-7.63,3.15Z"/><path  fill="#fff" d="M119.77,141.5a8,8,0,0,1-8-8v-2.65a16.33,16.33,0,0,1,10.85-15.4,8.49,8.49,0,1,0-11.23-9.2,9.42,9.42,0,0,0-.08,1.2,8,8,0,0,1-16.05,0,24.57,24.57,0,0,1,2.28-10.33,1.78,1.78,0,1,1,3.22,1.51A20.71,20.71,0,0,0,99,104.5a21.7,21.7,0,0,0-.2,2.92,4.48,4.48,0,0,0,8.95,0,11.8,11.8,0,0,1,.12-1.69,12,12,0,1,1,15.92,13,12.79,12.79,0,0,0-8.48,12v2.65a4.48,4.48,0,1,0,9,0v-2.65a3.83,3.83,0,0,1,2.51-3.62,21,21,0,1,0-21.59-34.81,1.78,1.78,0,0,1-2.47-2.55A24.52,24.52,0,1,1,128,130.55a.28.28,0,0,0-.15.27v2.65a8,8,0,0,1-8,8Z"/><path  fill="#fff" d="M119.77,160.1a8,8,0,0,1-8-8v0a8,8,0,1,1,16,0v0A8,8,0,0,1,119.77,160.1Zm0-12.56A4.48,4.48,0,0,0,115.3,152v0a4.48,4.48,0,0,0,9,0v0A4.49,4.49,0,0,0,119.77,147.54Z"/><path  fill="#fff" d="M154.22,36.25l-5.07-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.87,5a1.68,1.68,0,0,0,.67,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.48,2.48,0,0,0-1.18-.29,2.42,2.42,0,0,0-1.17.29l-3.53,1.85.67-3.93a2.5,2.5,0,0,0-.72-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.46,2.46,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#fff" d="M128.24,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.67,1.67,0,0,0-1.34,1.13,1.65,1.65,0,0,0,.42,1.7l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38L124,49.44a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M102.26,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0L89.7,35.51l-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.87,5a1.7,1.7,0,0,0,.66,1.63,1.68,1.68,0,0,0,1,.31,1.62,1.62,0,0,0,.77-.19l4.53-2.38L98,49.44a1.65,1.65,0,0,0,1.75-.12,1.7,1.7,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.93-2.83Z"/></g></svg>',
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
			),
			'scrollDistance' => array(
				'type' => 'number',
				'default' => 250
			),
			'scrollDistanceMobile' => array(
				'type' => 'number',
				'default' => 170
			),
			'showProgressIndicator' => array(
				'type' => 'boolean',
				'default' => true
			),
			'progressIndicatorColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'progressIndicatorActiveColor' => array(
				'type' => 'string',
				'default' => '#ff0000'
			),
			'progressIndicatorFillColor' => array(
				'type' => 'string',
				'default' => '#ff0000'
			),
			'progressIndicatorWidth' => array(
				'type' => 'number',
				'default' => 3
			)
		)
	),
	'scroll-text-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/scroll-text-block',
		'version' => '0.1.0',
		'title' => 'Scroll Text (Plus)',
		'category' => 'widgets',
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
		),
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#d52940" width="240" height="240" rx="3.29"/><path  fill="#fff" d="M122.21,78H110.12a38.32,38.32,0,0,0-38.28,38.28v48.34A26.22,26.22,0,0,0,98,190.81h36.26a26.22,26.22,0,0,0,26.19-26.19V116.28A38.32,38.32,0,0,0,122.21,78Zm-6,48.35a6,6,0,0,1-6-6v-4a6,6,0,1,1,12.09,0v4A6.06,6.06,0,0,1,116.16,126.35Zm6-18.08a9.86,9.86,0,0,0-12.09,0v-8.11a6,6,0,0,1,12.09,0Zm34.24,56.35a22.18,22.18,0,0,1-22.16,22.16H98a22.18,22.18,0,0,1-22.16-22.16V116.28A34.28,34.28,0,0,1,110.12,82h4v8.26a10.1,10.1,0,0,0-8.06,9.87V120.3a10.08,10.08,0,0,0,8.06,9.87v15.49L109.53,141a2,2,0,1,0-2.85,2.85l8.06,8.06.06,0a1.84,1.84,0,0,0,.59.39h0a1.82,1.82,0,0,0,.76.16,2,2,0,0,0,.76-.15,2.11,2.11,0,0,0,.67-.44l8-8.06A2,2,0,1,0,122.8,141l-4.62,4.62V130.17a10.08,10.08,0,0,0,8-9.87V100.16a10.09,10.09,0,0,0-8-9.87V82h4a34.28,34.28,0,0,1,34.24,34.25Zm-8.06,0a2,2,0,0,1,4,0,18.15,18.15,0,0,1-18.13,18.13,2,2,0,0,1,0-4A14.12,14.12,0,0,0,148.39,164.62Z"/><g id="Text-box"><path  fill="#fff" d="M186.41,84.89a2.19,2.19,0,1,1-4.38,0V84h-6.5V100.4h1a2.19,2.19,0,0,1,0,4.38h-6.31a2.19,2.19,0,0,1,0-4.38h1V84h-6.51v.93a2.19,2.19,0,0,1-4.38,0V81.77a2.19,2.19,0,0,1,2.19-2.19h21.77a2.19,2.19,0,0,1,2.19,2.19Z"/></g><path  fill="#fff" d="M152.22,36.25l-5.07-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.87,5a1.68,1.68,0,0,0,.67,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.48,2.48,0,0,0-1.18-.29,2.42,2.42,0,0,0-1.17.29l-3.53,1.85.67-3.93a2.5,2.5,0,0,0-.72-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.46,2.46,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#fff" d="M126.24,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.67,1.67,0,0,0-1.34,1.13,1.65,1.65,0,0,0,.42,1.7l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38L122,49.44a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M100.26,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0L87.7,35.51l-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.87,5a1.7,1.7,0,0,0,.66,1.63,1.68,1.68,0,0,0,1,.31,1.62,1.62,0,0,0,.77-.19l4.53-2.38L96,49.44a1.65,1.65,0,0,0,1.75-.12,1.7,1.7,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.93-2.83Z"/></g></svg>'
	),
	'services-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/services-block',
		'version' => '0.1.0',
		'title' => 'Services (Plus)',
		'category' => 'widgets',
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
						'slideTitle' => 'Build',
						'slideDescription' => 'We design and develop custom websites and applications that are tailored to your specific needs and goals.',
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
						'slideTitle' => 'Migrate',
						'slideDescription' => 'Effortlessly move your data and systems to modern platforms with minimal downtime and maximum security.',
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
						'slideTitle' => 'Maintain',
						'slideDescription' => 'We provide ongoing maintenance and support to ensure your digital assets are always performing at their best.',
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
						'slideTitle' => 'Support',
						'slideDescription' => 'Our dedicated support team is always available to help you with any issues or questions you may have.',
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
						'slideTitle' => 'Host',
						'slideDescription' => 'We offer reliable and secure hosting solutions to ensure your website is always online and performing optimally.',
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
				'default' => 'Services:'
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
		),
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#d52940" width="240" height="240" rx="3.29"/><path  fill="#fff" d="M125.17,138h0a18,18,0,0,0,3.47.63q.78.06,1.56.06a19,19,0,0,0,3.84-.39,18.57,18.57,0,0,0,12.26-8.92h0a18.71,18.71,0,0,0,2.27-6.56h0a18.44,18.44,0,0,0-5.26-15.78c-.37-.37-.74-.72-1.13-1.06a18.26,18.26,0,0,0-10.47-4.31h-.05a15.57,15.57,0,0,0-2.26,0,18.44,18.44,0,0,0-12.34,5.41,2.84,2.84,0,0,0-.23.24,18.28,18.28,0,0,0-2.14,2.67l0,.08a16.07,16.07,0,0,0-.87,1.46,18.09,18.09,0,0,0-2,6.93c0,.46-.07.92-.08,1.38v0a19.85,19.85,0,0,0,.14,2.77q.09.7.24,1.41a18.46,18.46,0,0,0,13.12,14ZM118,129.28c-.15-.2-.27-.42-.41-.62a13.5,13.5,0,0,1-.76-1.2c-.16-.29-.27-.59-.41-.89s-.35-.71-.48-1.07-.2-.66-.29-1-.23-.7-.31-1.06l-.08-2.78a10.17,10.17,0,0,0,2.24-1l2.41,2.41a3.3,3.3,0,0,0,4.67,0l3.46-3.46a3.31,3.31,0,0,0,0-4.66l-2.42-2.28a11.54,11.54,0,0,0,.92-2.29H130a3.26,3.26,0,0,0,3.13-2.32,2.61,2.61,0,0,0,.18-1v-.73l.29,0c.23,0,.45.12.68.18.47.13.94.28,1.4.45.24.09.47.18.69.28a14.21,14.21,0,0,1,1.35.68c.19.11.39.21.58.33a15.38,15.38,0,0,1,1.76,1.27c.32.28.63.57.93.88a14.77,14.77,0,0,1,1.19,1.32c.12.15.21.32.33.47.23.32.47.63.67,1s.22.4.33.6.35.61.5.93.18.44.27.66.27.62.38.94.13.47.2.71.18.63.25,1,.08.5.12.75.12.64.15,1,0,.52,0,.78,0,.64,0,1,0,.54-.05.82,0,.53-.07.8c0,0,0,0,0,0a3,3,0,0,0-.47-.59.5.5,0,0,0-.08-.07,3.83,3.83,0,0,0-.51-.39l-.21-.11a3.89,3.89,0,0,0-.51-.21l-.22-.07a3.33,3.33,0,0,0-.78-.1h-4.9a3.31,3.31,0,0,0-3.31,3.31l.09,3.3a10.17,10.17,0,0,0-2.24,1l-2.41-2.41a3.3,3.3,0,0,0-4.67,0l-3.46,3.46a3.53,3.53,0,0,0-.45.57c0,.07-.07.14-.11.2s-.14.29-.2.45,0,.17-.08.25-.06.28-.08.43l0,.29s0,.09,0,.14a2.85,2.85,0,0,0,0,.29,1,1,0,0,0,0,.17,13.13,13.13,0,0,1-2.6-2.68ZM130,105.75c0,.11,0,.15,0,.27h-.06A1,1,0,0,1,130,105.75ZM138.37,133a15.06,15.06,0,0,1-5,2,15.25,15.25,0,0,1-4.43.27,14.71,14.71,0,0,1-1.64-.23l-.17,0c0-.13-.12-.24-.18-.36s-.07-.16-.12-.24a3.17,3.17,0,0,0-.46-.58L124,131.55l3.35-3.46,2.42,2.42a3.33,3.33,0,0,0,3.82.6,12.23,12.23,0,0,1,1.9-.79,3.34,3.34,0,0,0,2.19-3.12l-.07-3.3,4.83-.07v3.37a3.18,3.18,0,0,0,.11.82,1.39,1.39,0,0,0,.1.26,2.14,2.14,0,0,0,.16.42c-.11.16-.21.33-.33.48a3.79,3.79,0,0,1-.3.4,15.24,15.24,0,0,1-1.19,1.36A14.82,14.82,0,0,1,138.37,133ZM117.5,111.89h0a.75.75,0,0,0,.07-.12,15.15,15.15,0,0,1,1.76-2.16,1.78,1.78,0,0,0,.22-.26l-.08.11A15.11,15.11,0,0,1,129.58,105c.1,0,.21,0,.31,0v1h-3.31a3.37,3.37,0,0,0-3.14,2.24,12.32,12.32,0,0,1-.78,1.88,3.32,3.32,0,0,0,.62,3.79l2.41,2.31-3.35,3.46-2.49-2.49a3.8,3.8,0,0,0-.93-.6,2.81,2.81,0,0,0-.68-.21l-.18,0a3.75,3.75,0,0,0-.47,0h0l-.44.06-.29,0a3,3,0,0,0-.7.26c-.23.12-.48.23-.73.34l.06-.26a13.64,13.64,0,0,1,.41-1.46c.05-.17.11-.33.17-.5a15,15,0,0,1,.74-1.68C117,112.71,117.23,112.28,117.5,111.89Z"/><path  fill="#fff" d="M160.35,138.4l-3.31.08a9.87,9.87,0,0,0-1-2.23l2.42-2.42a3.31,3.31,0,0,0,0-4.66L155,125.71l-.1-.07A25.6,25.6,0,0,0,149,103.19a24.91,24.91,0,0,0-14.08-7.86,24.44,24.44,0,0,0-8.45-.18l-.27,0,1.89-1.88a3.32,3.32,0,0,0,0-4.67l-3.46-3.46a3.3,3.3,0,0,0-4.67,0l-2.27,2.42a11.42,11.42,0,0,0-2.29-.92V83.31A3.31,3.31,0,0,0,112.08,80h-4.9a3.31,3.31,0,0,0-3.31,3.31l.09,3.31a10.17,10.17,0,0,0-2.24,1l-2.41-2.41a3.3,3.3,0,0,0-4.67,0l-3.46,3.46a3.32,3.32,0,0,0,0,4.67l2.42,2.27a11.54,11.54,0,0,0-.92,2.29H89.3a3.31,3.31,0,0,0-3.3,3.31v4.89a3.31,3.31,0,0,0,3.3,3.31l3.31-.08a9.87,9.87,0,0,0,1,2.23L91.18,114a3.31,3.31,0,0,0,0,4.66l3.46,3.46a3.38,3.38,0,0,0,4.67,0l2.28-2.41a11.7,11.7,0,0,0,2.28.92V124a3.32,3.32,0,0,0,2,3,26.06,26.06,0,0,0,1.74,4.62,1.69,1.69,0,0,1-.29,1.95l-11,11a8.43,8.43,0,0,0-9.05,1.89l-8.36,8.35a8.45,8.45,0,0,0,0,11.94l4.78,4.78a8.45,8.45,0,0,0,11.94,0l8.35-8.36a8.42,8.42,0,0,0,1.89-9l10.54-10.55v3a3.31,3.31,0,0,0,3.31,3.31l3.31-.09a9.76,9.76,0,0,0,1,2.24l-2.42,2.41a3.32,3.32,0,0,0,0,4.67L125,162.6a3.4,3.4,0,0,0,4.67,0l2.28-2.42a11.11,11.11,0,0,0,2.28.92v3.38a3.31,3.31,0,0,0,3.31,3.31h4.9a3.31,3.31,0,0,0,3.31-3.31l-.09-3.31a10.17,10.17,0,0,0,2.24-1l2.41,2.41a3.4,3.4,0,0,0,4.67,0l3.46-3.46a3.32,3.32,0,0,0,0-4.67l-2.42-2.27a11.54,11.54,0,0,0,.92-2.29h3.38a3.27,3.27,0,0,0,3.13-2.32,2.61,2.61,0,0,0,.18-1v-4.89A3.31,3.31,0,0,0,160.35,138.4Zm-45.9-38-.45.36c-.58.49-1.15,1-1.7,1.54a25.06,25.06,0,0,0-3.09,3.76c-.48.71-.9,1.44-1.31,2.19l-.28.53c-.37.74-.72,1.5-1,2.27l0,.07a8.07,8.07,0,1,1,9.7-12.06l0,0Q115.32,99.69,114.45,100.39Zm-11.32,16.27a3.32,3.32,0,0,0-3.79.62L97,119.7l-3.46-3.36L96,113.93a3.32,3.32,0,0,0,.61-3.82,12.37,12.37,0,0,1-.79-1.91A3.33,3.33,0,0,0,92.68,106l-3.31.06-.07-4.82h3.38A3.35,3.35,0,0,0,95.82,99a12.18,12.18,0,0,1,.79-1.88A3.33,3.33,0,0,0,96,93.34L93.57,91l3.35-3.47L99.34,90a3.32,3.32,0,0,0,3.82.6,12,12,0,0,1,1.91-.78,3.36,3.36,0,0,0,2.18-3.12l-.07-3.31,4.83-.07v3.38a3.37,3.37,0,0,0,2.25,3.14,12.15,12.15,0,0,1,1.88.78,3.3,3.3,0,0,0,3.78-.62l2.31-2.42,3.46,3.36-2.41,2.41a3.34,3.34,0,0,0-.93,2.78l-.15.06a20.69,20.69,0,0,0-2,.75l-.55.24-.5.22a11.43,11.43,0,1,0-13.6,16.94c0,.21-.11.42-.16.63s-.08.51-.13.77c-.09.5-.18,1-.24,1.51l0,.22,0,0A10.8,10.8,0,0,1,103.13,116.66Zm-1.57,44.12-8.35,8.36a5.2,5.2,0,0,1-7.17,0l-4.77-4.78a5.07,5.07,0,0,1,0-7.16l8.36-8.36a5,5,0,0,1,3.57-1.48,5.16,5.16,0,0,1,2.6.72l0,0a4.41,4.41,0,0,1,.53.35c.15.12.29.25.44.39l4.77,4.78a6.2,6.2,0,0,1,.43.48,3.74,3.74,0,0,1,.32.49l0,0,0,0A5,5,0,0,1,101.56,160.78Zm2.39-9.55-4.77-4.77,10.51-10.52a5,5,0,0,0,.93-5.84,22.39,22.39,0,0,1-1.78-4.91,20.88,20.88,0,0,1-.54-4,21.71,21.71,0,0,1,1-7.51,21.47,21.47,0,0,1,2.77-5.75,21.23,21.23,0,0,1,2.67-3.25,21.59,21.59,0,0,1,4.68-3.57,22.07,22.07,0,0,1,5.6-2.23q1-.24,2-.39a21.3,21.3,0,0,1,7.3.15,21.55,21.55,0,0,1,12.2,6.82h0A22.23,22.23,0,0,1,151.35,126a19.55,19.55,0,0,1-1,3,21.74,21.74,0,0,1-3.09,5l-.4.46c-.4.47-.83.92-1.27,1.35a21.77,21.77,0,0,1-12.14,6c-.5.08-1,.13-1.51.17l-.35,0c-.4,0-.79,0-1.19,0a21.82,21.82,0,0,1-8.34-1.6,14,14,0,0,1-1.68-.74,4.81,4.81,0,0,0-2-.54h-.13a5,5,0,0,0-3.8,1.45Zm28.19-5.78c.6,0,1.19-.11,1.78-.2s1.25-.21,1.87-.35l.61-.16c.41-.1.82-.21,1.22-.33l.7-.23c.36-.12.72-.25,1.07-.39s.48-.19.72-.29.68-.29,1-.45l.71-.36c.32-.16.64-.34,1-.52l.68-.4.93-.61c.21-.15.43-.29.63-.44s.64-.48.95-.73l.54-.43.09-.07a8,8,0,0,1,1.48,4.66,8.07,8.07,0,0,1-16,1.31Zm28.14,1.09H157a3.34,3.34,0,0,0-3.14,2.24,12.32,12.32,0,0,1-.78,1.88,3.31,3.31,0,0,0,.62,3.79l2.41,2.3-3.35,3.46-2.5-2.48a3.47,3.47,0,0,0-.92-.6,3.32,3.32,0,0,0-2.82.07,12.25,12.25,0,0,1-1.9.78,3.36,3.36,0,0,0-2.19,3.12l.07,3.31-4.83.07V161.1a3.37,3.37,0,0,0-2.25-3.14,12.15,12.15,0,0,1-1.88-.78,3.17,3.17,0,0,0-1.44-.34,3.29,3.29,0,0,0-2.34,1l-2.31,2.41L124,156.86l2.41-2.41a3.33,3.33,0,0,0,.61-3.82,12,12,0,0,1-.79-1.91,3.33,3.33,0,0,0-3.12-2.18l-3.31.06,0-3.36.06,0c.37.16.71.31,1,.42a25.34,25.34,0,0,0,7.83,1.78A11.45,11.45,0,1,0,149,137.13l.34-.39c.17-.19.33-.37.47-.55a25.22,25.22,0,0,0,3.57-5.82c.16-.36.3-.72.44-1.08l2.22,2.16-2.41,2.41a3.33,3.33,0,0,0-.61,3.82,12,12,0,0,1,.79,1.91,3.34,3.34,0,0,0,3.12,2.18h3.31Zm.07,0h-.06a1,1,0,0,1,.08-.27C160.32,146.38,160.38,146.42,160.35,146.54Z"/><path  fill="#fff" d="M155.22,36.25l-5.07-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.87,5a1.68,1.68,0,0,0,.67,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.48,2.48,0,0,0-1.18-.29,2.42,2.42,0,0,0-1.17.29l-3.53,1.85.67-3.93a2.5,2.5,0,0,0-.72-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.46,2.46,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#fff" d="M129.24,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.67,1.67,0,0,0-1.34,1.13,1.65,1.65,0,0,0,.42,1.7l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38L125,49.44a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M103.26,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0L90.7,35.51l-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.87,5a1.7,1.7,0,0,0,.66,1.63,1.68,1.68,0,0,0,1,.31,1.62,1.62,0,0,0,.77-.19l4.53-2.38L99,49.44a1.65,1.65,0,0,0,1.75-.12,1.7,1.7,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.93-2.83Z"/></g></svg>'
	),
	'social-banner-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/social-banner-block',
		'version' => '0.1.0',
		'title' => 'Social Banner Block',
		'category' => 'widgets',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#fff" x="1" y="0.93" width="238" height="238" rx="3.87"/><path  fill="#d52940" d="M236.49,0H3.51A3.51,3.51,0,0,0,0,3.51v233A3.51,3.51,0,0,0,3.51,240h233a3.51,3.51,0,0,0,3.51-3.51V3.51A3.51,3.51,0,0,0,236.49,0Zm0,235.61a.89.89,0,0,1-.89.89H4.39a.89.89,0,0,1-.89-.89V4.39a.89.89,0,0,1,.89-.89H235.61a.89.89,0,0,1,.89.89Z"/><path  fill="#d52940" d="M153.21,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.53,2.53,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.48,2.48,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#d52940" d="M127.23,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.67-1.63l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.07,5a2.49,2.49,0,0,0-.73,2.22l.67,3.92-3.51-1.85a2.56,2.56,0,0,0-1.17-.29,2.53,2.53,0,0,0-1.17.29l-3.52,1.85.67-3.92a2.51,2.51,0,0,0-.72-2.22l-2.84-2.78,3.93-.57a2.51,2.51,0,0,0,1.89-1.37L118.42,33l1.75,3.56a2.53,2.53,0,0,0,1.9,1.37l3.93.57Z"/><path  fill="#d52940" d="M101.26,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75l4.52-2.38L97,49.44a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><circle  fill="#d52940" cx="144.57" cy="164.49" r="3.69"/><rect  fill="#d52940" x="141.5" y="170.63" width="6.14" height="18.43" rx="1.91"/><path  fill="#d52940" d="M168.53,177.39v10.45a1.22,1.22,0,0,1-1.22,1.22h-3.69a1.23,1.23,0,0,1-1.23-1.22v-8.61a3.07,3.07,0,1,0-6.14,0v8.61a1.23,1.23,0,0,1-1.23,1.22h-3.69a1.23,1.23,0,0,1-1.23-1.22v-16a1.24,1.24,0,0,1,1.23-1.23H155a1.24,1.24,0,0,1,1.23,1.23v.79a7,7,0,0,1,5.53-2.63C165.17,170,168.53,172.48,168.53,177.39Z"/><path  fill="#d52940" d="M177.34,145.41H132a6.87,6.87,0,0,0-6.87,6.86V197.6a6.87,6.87,0,0,0,6.87,6.86h45.32a6.86,6.86,0,0,0,6.87-6.86V152.27A6.86,6.86,0,0,0,177.34,145.41Zm4.12,52.19a4.12,4.12,0,0,1-4.12,4.12H132a4.13,4.13,0,0,1-4.12-4.12V152.27a4.13,4.13,0,0,1,4.12-4.12h45.32a4.12,4.12,0,0,1,4.12,4.12Z"/><path  fill="#d52940" d="M93.84,172.71l-.48,3.83a1.27,1.27,0,0,1-1.26,1.12H85.89v16q-1,.09-2,.09a22.59,22.59,0,0,1-4.38-.43V177.66H74.76a.8.8,0,0,1-.79-.79v-4.8a.8.8,0,0,1,.79-.79h4.77v-7.19a8,8,0,0,1,8-8h5.57a.79.79,0,0,1,.79.79v4.8a.79.79,0,0,1-.79.79h-4a3.19,3.19,0,0,0-3.18,3.2v5.59h6.68A1.28,1.28,0,0,1,93.84,172.71Z"/><path  fill="#d52940" d="M108,145.41H62.69a6.86,6.86,0,0,0-6.86,6.86V197.6a6.86,6.86,0,0,0,6.86,6.86H108a6.86,6.86,0,0,0,6.86-6.86V152.27A6.86,6.86,0,0,0,108,145.41Zm4.12,52.19a4.13,4.13,0,0,1-4.12,4.12H62.69a4.12,4.12,0,0,1-4.11-4.12V152.27a4.12,4.12,0,0,1,4.11-4.12H108a4.13,4.13,0,0,1,4.12,4.12Z"/><path  fill="#d52940" d="M162.48,89.89H147a7.25,7.25,0,0,0-7.25,7.25v15.53a7.25,7.25,0,0,0,7.25,7.25h15.53a7.25,7.25,0,0,0,7.24-7.25V97.14A7.25,7.25,0,0,0,162.48,89.89Zm4.66,22.26a5.18,5.18,0,0,1-5.18,5.18h-14.5a5.18,5.18,0,0,1-5.17-5.18V97.66a5.18,5.18,0,0,1,5.17-5.18H162a5.18,5.18,0,0,1,5.18,5.18Z"/><path  fill="#d52940" d="M154.71,97.14a7.77,7.77,0,1,0,7.77,7.77A7.77,7.77,0,0,0,154.71,97.14Zm0,12.94a5.18,5.18,0,1,1,5.18-5.17A5.19,5.19,0,0,1,154.71,110.08Z"/><circle  fill="#d52940" cx="162.99" cy="96.62" r="1.55"/><path  fill="#d52940" d="M177.34,75.38H132a6.87,6.87,0,0,0-6.87,6.86v45.33a6.87,6.87,0,0,0,6.87,6.86h45.32a6.86,6.86,0,0,0,6.87-6.86V82.24A6.86,6.86,0,0,0,177.34,75.38Zm4.12,52.19a4.12,4.12,0,0,1-4.12,4.12H132a4.13,4.13,0,0,1-4.12-4.12V82.24A4.12,4.12,0,0,1,132,78.13h45.32a4.11,4.11,0,0,1,4.12,4.11Z"/><path  fill="#d52940" d="M108,75.38H62.69a6.86,6.86,0,0,0-6.86,6.86v45.33a6.86,6.86,0,0,0,6.86,6.86H108a6.86,6.86,0,0,0,6.86-6.86V82.24A6.86,6.86,0,0,0,108,75.38Zm4.12,52.19a4.13,4.13,0,0,1-4.12,4.12H62.69a4.12,4.12,0,0,1-4.11-4.12V82.24a4.11,4.11,0,0,1,4.11-4.11H108a4.12,4.12,0,0,1,4.12,4.11Z"/><path  fill="#d52940" d="M89.49,102.28l11.58-12.39h-4.4l-9.09,9.72-7-9.72h-12l12.17,17-12.17,13H73l9.69-10.36,7.41,10.36h12Zm-14.7-9.2H79l16.93,23.65H91.73Z"/></g></svg>',
		'description' => 'Display a sticky social media banner on the side of the screen with customizable icons, colors, and links.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'customClassName' => true
		),
		'textdomain' => 'social-banner-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'position' => array(
				'type' => 'string',
				'default' => 'right'
			),
			'offsetFrom' => array(
				'type' => 'string',
				'default' => 'top'
			),
			'offset' => array(
				'type' => 'number',
				'default' => 100
			),
			'offsetUnit' => array(
				'type' => 'string',
				'default' => 'px'
			),
			'iconEntries' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'iconSize' => array(
				'type' => 'number',
				'default' => 24
			),
			'spacing' => array(
				'type' => 'number',
				'default' => 10
			),
			'borderRadius' => array(
				'type' => 'number',
				'default' => 0
			),
			'hoverAnimation' => array(
				'type' => 'string',
				'default' => 'up'
			),
			'animationDuration' => array(
				'type' => 'number',
				'default' => 0.3
			),
			'animationEasing' => array(
				'type' => 'string',
				'default' => 'ease'
			)
		)
	),
	'swiper-carousel-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'adaire/swiper-carousel',
		'version' => '0.1.0',
		'title' => 'Swiper Carousel',
		'category' => 'adaire-blocks',
		'icon' => 'images-alt2',
		'description' => 'A draggable image carousel using Swiper.js.',
		'supports' => array(
			'html' => false,
			'align' => array(
				'full',
				'wide'
			)
		),
		'textdomain' => 'adaire-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'speed' => array(
				'type' => 'number',
				'default' => 600
			),
			'loop' => array(
				'type' => 'boolean',
				'default' => true
			),
			'autoplay' => array(
				'type' => 'boolean',
				'default' => false
			),
			'autoplayDelay' => array(
				'type' => 'number',
				'default' => 3000
			),
			'effect' => array(
				'type' => 'string',
				'default' => 'slide'
			),
			'borderRadius' => array(
				'type' => 'number',
				'default' => 0
			),
			'carouselHeight' => array(
				'type' => 'number',
				'default' => 50
			),
			'cursorOverlayBg' => array(
				'type' => 'string',
				'default' => '#ff0000'
			),
			'cursorOverlayText' => array(
				'type' => 'string',
				'default' => 'drg'
			)
		)
	),
	'swiper-slide-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'adaire/swiper-slide',
		'version' => '0.1.0',
		'title' => 'Swiper Slide',
		'category' => 'adaire-blocks',
		'parent' => array(
			'adaire/swiper-carousel'
		),
		'icon' => 'format-image',
		'description' => 'A single slide for the Swiper Carousel.',
		'supports' => array(
			'html' => false,
			'reusable' => false
		),
		'textdomain' => 'adaire-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			'imageUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'imageId' => array(
				'type' => 'number',
				'default' => 0
			),
			'header' => array(
				'type' => 'string',
				'default' => 'Slide Header'
			),
			'text' => array(
				'type' => 'string',
				'default' => 'Slide description text goes here.'
			),
			'overlayType' => array(
				'type' => 'string',
				'default' => 'color'
			),
			'overlayColor' => array(
				'type' => 'string',
				'default' => 'rgba(0,0,0,0.5)'
			),
			'overlayGradient' => array(
				'type' => 'string',
				'default' => 'linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%)'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'backgroundSize' => array(
				'type' => 'string',
				'default' => 'cover'
			),
			'backgroundPosition' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'backgroundRepeat' => array(
				'type' => 'string',
				'default' => 'no-repeat'
			),
			'slideBorderRadius' => array(
				'type' => 'number',
				'default' => 0
			),
			'slideHoverBorderRadius' => array(
				'type' => 'number',
				'default' => 0
			)
		)
	),
	'tab-panel-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/tab-panel-block',
		'version' => '0.1.0',
		'title' => 'Tab Panel',
		'category' => 'widgets',
		'parent' => array(
			'create-block/tabs-block'
		),
		'description' => 'A single tab panel content area (automatically managed by Tabs block).',
		'supports' => array(
			'html' => false,
			'reusable' => false,
			'inserter' => false,
			'anchor' => true
		),
		'textdomain' => 'tab-panel-block',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			'tabTitle' => array(
				'type' => 'string',
				'default' => ''
			),
			'tabId' => array(
				'type' => 'string',
				'default' => ''
			),
			'tabIndex' => array(
				'type' => 'number',
				'default' => 0
			),
			'isActive' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<rect width="24" height="24" rx="5" fill="#F0F0F1" />
			<path d="M2.25 6H21.75Z" fill="#F0F0F1" />
			<path
				d="M2.25 6H21.75"
				stroke="black"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M21.75 6.00003V16.8333C21.75 18.0299 20.7799 19 19.5833 19H4.41667C3.22005 19 2.25 18.0299 2.25 16.8333V6"
				stroke="black"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path d="M18.5 10.55H5.5Z" fill="#F0F0F1" />
			<path
				d="M18.5 10.55H5.5"
				stroke="#FF0000"
				strokeWidth="2"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path d="M18.5 14.45H5.5Z" fill="#F0F0F1" />
			<path
				d="M18.5 14.45H5.5"
				stroke="black"
				strokeWidth="2"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>'
	),
	'tabs-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/tabs-block',
		'version' => '0.1.0',
		'title' => 'Tabs',
		'category' => 'widgets',
		'description' => 'Beautiful tabbed content with smooth GSAP animations and customizable styling.',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'tabs-block',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#fff" x="1" y="0.93" width="238" height="238" rx="3.87"/><path  fill="#d52940" d="M236.49,0H3.51A3.51,3.51,0,0,0,0,3.51v233A3.51,3.51,0,0,0,3.51,240h233a3.51,3.51,0,0,0,3.51-3.51V3.51A3.51,3.51,0,0,0,236.49,0Zm0,235.61a.89.89,0,0,1-.89.89H4.39a.89.89,0,0,1-.89-.89V4.39a.89.89,0,0,1,.89-.89H235.61a.89.89,0,0,1,.89.89Z"/><path  fill="#d52940" d="M153.21,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.53,2.53,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.48,2.48,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#d52940" d="M127.23,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.67-1.63l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.07,5a2.49,2.49,0,0,0-.73,2.22l.67,3.92-3.51-1.85a2.56,2.56,0,0,0-1.17-.29,2.53,2.53,0,0,0-1.17.29l-3.52,1.85.67-3.92a2.51,2.51,0,0,0-.72-2.22l-2.84-2.78,3.93-.57a2.51,2.51,0,0,0,1.89-1.37L118.42,33l1.75,3.56a2.53,2.53,0,0,0,1.9,1.37l3.93.57Z"/><path  fill="#d52940" d="M101.26,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75l4.52-2.38L97,49.44a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#d52940" d="M134.67,125.21h11a2.13,2.13,0,0,0,2.13-2.14v-11a2.13,2.13,0,0,0-2.13-2.14h-11a2.13,2.13,0,0,0-2.13,2.13h0v11A2.13,2.13,0,0,0,134.67,125.21Zm2.14-11h6.7v6.71h-6.7Z"/><path  fill="#d52940" d="M113.45,125.21h11a2.14,2.14,0,0,0,2.13-2.14v-11a2.13,2.13,0,0,0-2.13-2.14h-11a2.15,2.15,0,0,0-2.14,2.13h0v11A2.14,2.14,0,0,0,113.45,125.21Zm2.13-11h6.71v6.71h-6.71Z"/><path  fill="#d52940" d="M92.23,125.21h11a2.14,2.14,0,0,0,2.14-2.14v-11a2.14,2.14,0,0,0-2.13-2.14h-11a2.14,2.14,0,0,0-2.14,2.14v11A2.14,2.14,0,0,0,92.23,125.21Zm2.13-11h6.71v6.71H94.36Z"/><path  fill="#d52940" d="M185.9,101.42h-3V84.53a7,7,0,0,0-7-7h-100a7,7,0,0,0-7,7v82.93a7,7,0,0,0,7,7h100a7,7,0,0,0,7-7V133.74h3a2.14,2.14,0,0,0,2.14-2.13V103.55A2.15,2.15,0,0,0,185.9,101.42Zm-7.26,66a2.75,2.75,0,0,1-2.74,2.75h-100a2.74,2.74,0,0,1-2.75-2.75V84.53a2.75,2.75,0,0,1,2.75-2.75h100a2.76,2.76,0,0,1,2.74,2.75v16.89h-3V87a2.16,2.16,0,0,0-2.14-2.14H78.33A2.14,2.14,0,0,0,76.19,87V165a2.13,2.13,0,0,0,2.13,2.13h95.14A2.14,2.14,0,0,0,175.6,165v-31.3h3Zm-23.23-33.72h15.92v29.15H80.46V89.1h90.87v12.32H155.41a2.13,2.13,0,0,0-2.13,2.13v28.06A2.13,2.13,0,0,0,155.41,133.74Zm28.36-4.27H157.54V105.69h26.23Z"/></g></svg>',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'tabs' => array(
				'type' => 'array',
				'default' => array(
					array(
						'title' => 'Retail',
						'id' => 'tab-1'
					)
				)
			),
			'activeTab' => array(
				'type' => 'number',
				'default' => 0
			),
			'tabTitleColor' => array(
				'type' => 'string',
				'default' => '#64748b'
			),
			'tabTitleActiveColor' => array(
				'type' => 'string',
				'default' => '#0f172a'
			),
			'tabUnderlineColor' => array(
				'type' => 'string',
				'default' => '#3b82f6'
			),
			'tabTitleFontSize' => array(
				'type' => 'number',
				'default' => 18
			),
			'tabTitleFontWeight' => array(
				'type' => 'string',
				'default' => '500'
			),
			'tabTitleActiveFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'tabGap' => array(
				'type' => 'number',
				'default' => 32
			),
			'underlineHeight' => array(
				'type' => 'number',
				'default' => 3
			),
			'contentPaddingTop' => array(
				'type' => 'number',
				'default' => 40
			),
			'contentPaddingRight' => array(
				'type' => 'number',
				'default' => 0
			),
			'contentPaddingBottom' => array(
				'type' => 'number',
				'default' => 40
			),
			'contentPaddingLeft' => array(
				'type' => 'number',
				'default' => 0
			),
			'tabsAlign' => array(
				'type' => 'string',
				'default' => 'flex-start'
			),
			'animationDuration' => array(
				'type' => 'number',
				'default' => 0.6
			),
			'animationEase' => array(
				'type' => 'string',
				'default' => 'power2.out'
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'marginTop' => array(
				'type' => 'number',
				'default' => 0
			),
			'marginRight' => array(
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
			'tabLayout' => array(
				'type' => 'string',
				'default' => 'horizontal'
			),
			'tabPosition' => array(
				'type' => 'string',
				'default' => 'top'
			),
			'verticalActiveBgColor' => array(
				'type' => 'string',
				'default' => 'rgba(59, 130, 246, 0.05)'
			),
			'verticalActiveBgOpacity' => array(
				'type' => 'number',
				'default' => 0.05
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
		'description' => 'A testimonial block in a customizable carousel',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'anchor' => true
		),
		'textdomain' => 'testimonial-block',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#fff" x="1" y="0.93" width="238" height="238" rx="3.87"/><path  fill="#d52940" d="M236.49,0H3.51A3.51,3.51,0,0,0,0,3.51v233A3.51,3.51,0,0,0,3.51,240h233a3.51,3.51,0,0,0,3.51-3.51V3.51A3.51,3.51,0,0,0,236.49,0Zm0,235.61a.89.89,0,0,1-.89.89H4.39a.89.89,0,0,1-.89-.89V4.39a.89.89,0,0,1,.89-.89H235.61a.89.89,0,0,1,.89.89Z"/><path  fill="#d52940" d="M153.21,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.53,2.53,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.48,2.48,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#d52940" d="M127.23,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.67-1.63l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.07,5a2.49,2.49,0,0,0-.73,2.22l.67,3.92-3.51-1.85a2.56,2.56,0,0,0-1.17-.29,2.53,2.53,0,0,0-1.17.29l-3.52,1.85.67-3.92a2.51,2.51,0,0,0-.72-2.22l-2.84-2.78,3.93-.57a2.51,2.51,0,0,0,1.89-1.37L118.42,33l1.75,3.56a2.53,2.53,0,0,0,1.9,1.37l3.93.57Z"/><path  fill="#d52940" d="M101.26,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75l4.52-2.38L97,49.44a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#d52940" d="M154.8,100.78H139a42,42,0,0,0,2.15-12.5c.16-4.23-1.57-8.56-4.3-10.78a5.94,5.94,0,0,0-5.23-1.32,5.48,5.48,0,0,0-3.9,3.84l-1.16,4a42.77,42.77,0,0,1-8.21,15.45l-3.18,3.81a7,7,0,0,0-6.9-5.82h-18a7,7,0,0,0-7,7v44.24a7,7,0,0,0,7,7h18a7,7,0,0,0,7-6.4l5.18,1.76a11.6,11.6,0,0,0,3.74.62h27.5a8.21,8.21,0,0,0,8.27-7.79,7.93,7.93,0,0,0-1.68-5.17,8,8,0,0,0,1.5-12.11,7.92,7.92,0,0,0,.8-11.8l-.23-.22a8,8,0,0,0-5.54-13.84Zm-44,47.94a2.57,2.57,0,0,1-2.57,2.57h-18a2.57,2.57,0,0,1-2.57-2.57V104.48a2.57,2.57,0,0,1,2.57-2.57h18a2.57,2.57,0,0,1,2.57,2.57Zm44-31.87a3.59,3.59,0,0,1,3.59,3.7,3.75,3.75,0,0,1-3.83,3.48h-.72a2.22,2.22,0,0,0,0,4.44,3.59,3.59,0,0,1,0,7.18h-1.91a2.22,2.22,0,0,0,0,4.44,3.6,3.6,0,0,1,3.59,3.7,3.75,3.75,0,0,1-3.84,3.48h-27.5a7,7,0,0,1-2.31-.39l-6.44-2.18V109.93l6.34-7.61a46.84,46.84,0,0,0,9.06-17.06l1.17-4a1.06,1.06,0,0,1,.69-.77c.16,0,.62-.16,1.37.46,1.38,1.12,2.78,4,2.66,7.17a37.47,37.47,0,0,1-2,11.52l-1,2.61a2.21,2.21,0,0,0,2.09,3h19a3.59,3.59,0,0,1,0,7.18,2.23,2.23,0,0,0,0,4.45Z"/><path  fill="#d52940" d="M83.47,194.5a2.52,2.52,0,0,0,1.16.29,2.49,2.49,0,0,0,2.45-2.9l-1.62-9.43,6.85-6.67a2.49,2.49,0,0,0-1.38-4.23l-9.46-1.38-4.23-8.57a2.48,2.48,0,0,0-4.45,0l-4.23,8.57-9.46,1.38a2.48,2.48,0,0,0-1.38,4.23l6.85,6.67L63,191.89a2.48,2.48,0,0,0,3.6,2.61L75,190.05Zm-14.78-6.73,1-5.75a2.49,2.49,0,0,0-.71-2.2l-4.18-4.07,5.77-.84a2.49,2.49,0,0,0,1.87-1.36L75,168.32l2.59,5.23a2.49,2.49,0,0,0,1.87,1.36l5.77.84-4.18,4.07a2.49,2.49,0,0,0-.71,2.2l1,5.75-5.16-2.72a2.52,2.52,0,0,0-2.31,0Z"/><path  fill="#d52940" d="M109.23,189.19l-1.84,10.75a2.48,2.48,0,0,0,2.44,2.9,2.52,2.52,0,0,0,1.16-.29l9.65-5.07,9.65,5.07a2.48,2.48,0,0,0,3.6-2.61l-1.84-10.75,7.81-7.61a2.49,2.49,0,0,0-1.37-4.24l-10.8-1.57L122.86,166a2.48,2.48,0,0,0-4.45,0l-4.82,9.78-10.79,1.57a2.48,2.48,0,0,0-1.38,4.24Zm6.36-8.69a2.49,2.49,0,0,0,1.87-1.36l3.18-6.44,3.18,6.44a2.49,2.49,0,0,0,1.87,1.36l7.1,1-5.14,5a2.5,2.5,0,0,0-.71,2.2l1.21,7.08-6.36-3.34a2.45,2.45,0,0,0-1.15-.29,2.52,2.52,0,0,0-1.16.29l-6.35,3.34,1.21-7.08a2.5,2.5,0,0,0-.71-2.2l-5.14-5Z"/><path  fill="#d52940" d="M184.18,173.25a2.46,2.46,0,0,0-2-1.69l-9.46-1.38-4.23-8.57a2.48,2.48,0,0,0-4.45,0l-4.23,8.57-9.46,1.38a2.49,2.49,0,0,0-1.38,4.23l6.85,6.67-1.62,9.43a2.48,2.48,0,0,0,3.6,2.61l8.46-4.45,8.47,4.45a2.48,2.48,0,0,0,1.15.29,2.43,2.43,0,0,0,1.46-.48,2.48,2.48,0,0,0,1-2.42l-1.62-9.43,6.85-6.67A2.47,2.47,0,0,0,184.18,173.25Zm-11.87,6.57a2.49,2.49,0,0,0-.71,2.2l1,5.75-5.17-2.72a2.52,2.52,0,0,0-2.31,0l-5.17,2.72,1-5.75a2.49,2.49,0,0,0-.71-2.2L156,175.75l5.77-.84a2.49,2.49,0,0,0,1.87-1.36l2.58-5.23,2.59,5.23a2.49,2.49,0,0,0,1.87,1.36l5.77.84Z"/></g></svg>',
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
			),
			'cardBackgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'blockBackgroundColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'logoAlignment' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'cardWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 100,
						'unit' => '%'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'slidesPerViewMobile' => array(
				'type' => 'number',
				'default' => 1
			),
			'slidesPerViewTablet' => array(
				'type' => 'number',
				'default' => 2
			),
			'slidesPerViewDesktop' => array(
				'type' => 'number',
				'default' => 3
			),
			'cardGap' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 30,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 20,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 15,
						'unit' => 'px'
					)
				)
			)
		)
	),
	'testimonial2-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/testimonial2-block',
		'version' => '0.1.0',
		'title' => 'Testimonial 2',
		'category' => 'widgets',
		'icon' => 'format-quote',
		'description' => 'Display customer testimonials in an elegant carousel with person images and company logos.',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'testimonial2-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'constrained'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 80,
						'unit' => '%'
					),
					'tablet' => array(
						'value' => 90,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'testimonials' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 'testimonial-1',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'name' => 'John Doe',
						'title' => 'CEO',
						'personImage' => array(
							'id' => 0,
							'url' => '',
							'alt' => ''
						),
						'logoImage' => array(
							'id' => 0,
							'url' => '',
							'alt' => ''
						)
					)
				)
			),
			'quoteImage' => array(
				'type' => 'object',
				'default' => array(
					'id' => 0,
					'url' => '',
					'alt' => 'Quote'
				)
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#ff4545'
			),
			'cardBackgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'navButtonBackground' => array(
				'type' => 'string',
				'default' => 'rgba(255, 255, 255, 0.9)'
			),
			'navButtonHoverBackground' => array(
				'type' => 'string',
				'default' => 'rgba(255, 255, 255, 1)'
			),
			'navButtonSize' => array(
				'type' => 'number',
				'default' => 50
			),
			'navArrowSize' => array(
				'type' => 'number',
				'default' => 20
			),
			'quoteImageWidth' => array(
				'type' => 'number',
				'default' => 60
			),
			'quoteImageOpacity' => array(
				'type' => 'number',
				'default' => 0.2
			),
			'logoWidth' => array(
				'type' => 'number',
				'default' => 150
			),
			'personImageSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 300,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 200,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 150,
						'unit' => 'px'
					)
				)
			),
			'personImageBorderRadius' => array(
				'type' => 'number',
				'default' => 50
			),
			'descriptionFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 18,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 16,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 14,
						'unit' => 'px'
					)
				)
			),
			'descriptionFontWeight' => array(
				'type' => 'string',
				'default' => '300'
			),
			'descriptionColor' => array(
				'type' => 'string',
				'default' => '#ff4545'
			),
			'nameFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 22,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 20,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 18,
						'unit' => 'px'
					)
				)
			),
			'nameFontWeight' => array(
				'type' => 'string',
				'default' => '500'
			),
			'nameColor' => array(
				'type' => 'string',
				'default' => '#ff4545'
			),
			'titleFontSize' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 16,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 14,
						'unit' => 'px'
					),
					'mobile' => array(
						'value' => 12,
						'unit' => 'px'
					)
				)
			),
			'titleFontWeight' => array(
				'type' => 'string',
				'default' => '600'
			),
			'titleColor' => array(
				'type' => 'string',
				'default' => '#ff4545'
			),
			'carouselSpeed' => array(
				'type' => 'number',
				'default' => 600
			),
			'spaceBetween' => array(
				'type' => 'number',
				'default' => 40
			)
		)
	),
	'video-hero-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/video-hero-block',
		'version' => '0.1.0',
		'title' => 'Video Hero (Plus)',
		'category' => 'media',
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
		),
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#d52940" width="240" height="240" rx="3.19"/><path  fill="#fff" d="M167.84,77H71.73A5.93,5.93,0,0,0,65.8,83v69.49a5.94,5.94,0,0,0,5.93,5.93h32l-1.58,8H97.23a2.1,2.1,0,0,0-2,1.46l-2.41,7.42a2.11,2.11,0,0,0,2,2.75h49.93a2.1,2.1,0,0,0,1.7-.87,2.07,2.07,0,0,0,.3-1.88l-2.41-7.42a2.1,2.1,0,0,0-2-1.46H137.4l-1.57-8h32a5.94,5.94,0,0,0,5.93-5.93V83A5.93,5.93,0,0,0,167.84,77ZM71.73,81.25h96.11A1.72,1.72,0,0,1,169.56,83v55.69H70V83A1.72,1.72,0,0,1,71.73,81.25Zm70.12,92.54H97.72l1-3.21h42.05Zm-8.74-7.42H106.46l1.58-8h23.5Zm34.73-12.2H71.73A1.73,1.73,0,0,1,70,152.45v-9.59h99.55v9.59A1.73,1.73,0,0,1,167.84,154.17Z"/><path  fill="#fff" d="M110.22,90.88a3.44,3.44,0,0,0-1.63,2.93v21.88a3.44,3.44,0,0,0,1.63,2.93,3.48,3.48,0,0,0,3.37.16l8.81-4.4a1.6,1.6,0,1,0-1.43-2.86l-8.8,4.4a.27.27,0,0,1-.26,0,.24.24,0,0,1-.12-.21V93.81a.24.24,0,0,1,.12-.21.23.23,0,0,1,.25,0L134,104.51a.24.24,0,0,1,.14.24.23.23,0,0,1-.13.23l-7.34,3.68a1.6,1.6,0,1,0,1.43,2.86l7.35-3.68a3.47,3.47,0,0,0,0-6.18l-21.88-11A3.46,3.46,0,0,0,110.22,90.88Z"/><path  fill="#fff" d="M132.58,120.74a1.6,1.6,0,0,0-1.6,1.6v3.2H95.8a1.6,1.6,0,1,0,0,3.2H131v3.19a1.6,1.6,0,1,0,3.2,0v-3.19h9.59a1.6,1.6,0,0,0,0-3.2h-9.59v-3.2A1.6,1.6,0,0,0,132.58,120.74Z"/><path  fill="#fff" d="M154.8,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.87,5a1.7,1.7,0,0,0,.66,1.63,1.66,1.66,0,0,0,1.75.12L146,47.06l4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1.64-1.94l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.93-2.83Zm-4.06,5a2.53,2.53,0,0,0-.72,2.23l.67,3.93-3.52-1.85a2.55,2.55,0,0,0-2.36,0l-3.52,1.85.67-3.93a2.53,2.53,0,0,0-.72-2.23l-2.86-2.78,4-.58a2.5,2.5,0,0,0,1.9-1.38L146,32.94l1.76,3.57a2.5,2.5,0,0,0,1.9,1.38l3.95.58Z"/><path  fill="#fff" d="M128.83,36.25l-5.06-.74-2.27-4.58a1.65,1.65,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12L120,47.06l4.53,2.38a1.68,1.68,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#fff" d="M102.85,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.07.74a1.66,1.66,0,0,0-.92,2.83L88,42.65l-.87,5a1.65,1.65,0,0,0,1.64,1.94,1.62,1.62,0,0,0,.77-.19L94,47.06l4.53,2.38a1.66,1.66,0,0,0,1.75-.12,1.7,1.7,0,0,0,.66-1.63l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Z"/></g></svg>'
	),
	'video-player-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/video-player-block',
		'version' => '0.1.0',
		'title' => 'Video Player Block',
		'category' => 'widgets',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs></defs><g id="icons"><rect  fill="#fff" x="1" y="0.93" width="238" height="238" rx="3.87"/><path  fill="#d52940" d="M236.49,0H3.51A3.51,3.51,0,0,0,0,3.51v233A3.51,3.51,0,0,0,3.51,240h233a3.51,3.51,0,0,0,3.51-3.51V3.51A3.51,3.51,0,0,0,236.49,0Zm0,235.61a.89.89,0,0,1-.89.89H4.39a.89.89,0,0,1-.89-.89V4.39a.89.89,0,0,1,.89-.89H235.61a.89.89,0,0,1,.89.89Z"/><path  fill="#d52940" d="M153.21,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.52-2.38,4.53,2.38a1.62,1.62,0,0,0,.77.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.66-1.63l-.86-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.06,5a2.5,2.5,0,0,0-.73,2.23l.67,3.93-3.52-1.85a2.53,2.53,0,0,0-2.35,0l-3.53,1.85.68-3.93a2.53,2.53,0,0,0-.73-2.23l-2.85-2.78,3.94-.58a2.5,2.5,0,0,0,1.9-1.38l1.76-3.57,1.77,3.57a2.48,2.48,0,0,0,1.9,1.38l3.94.58Z"/><path  fill="#d52940" d="M127.23,36.25l-5.06-.74-2.26-4.58a1.66,1.66,0,0,0-3,0l-2.27,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.68,1.68,0,0,0,.66,1.63,1.65,1.65,0,0,0,1.75.12l4.53-2.38,4.52,2.38a1.66,1.66,0,0,0,.78.19,1.65,1.65,0,0,0,1-.31,1.68,1.68,0,0,0,.67-1.63l-.87-5,3.66-3.57a1.66,1.66,0,0,0-.92-2.83Zm-4.07,5a2.49,2.49,0,0,0-.73,2.22l.67,3.92-3.51-1.85a2.56,2.56,0,0,0-1.17-.29,2.53,2.53,0,0,0-1.17.29l-3.52,1.85.67-3.92a2.51,2.51,0,0,0-.72-2.22l-2.84-2.78,3.93-.57a2.51,2.51,0,0,0,1.89-1.37L118.42,33l1.75,3.56a2.53,2.53,0,0,0,1.9,1.37l3.93.57Z"/><path  fill="#d52940" d="M101.26,36.25l-5.06-.74-2.27-4.58a1.66,1.66,0,0,0-3,0l-2.26,4.58-5.06.74a1.66,1.66,0,0,0-.92,2.83l3.66,3.57-.86,5a1.66,1.66,0,0,0,2.41,1.75l4.52-2.38L97,49.44a1.65,1.65,0,0,0,1.75-.12,1.68,1.68,0,0,0,.66-1.63l-.87-5,3.67-3.57a1.66,1.66,0,0,0-.92-2.83Z"/><path  fill="#d52940" d="M108.11,148.06a3.42,3.42,0,0,0,1.72.48,3.49,3.49,0,0,0,1.6-.41l19.7-10.61a3.63,3.63,0,0,0,0-6.35l-19.7-10.6a3.34,3.34,0,0,0-3.32.07,3.55,3.55,0,0,0-1.72,3.1V145A3.57,3.57,0,0,0,108.11,148.06Z"/><rect  fill="none" x="152.46" y="108.36" width="21.2" height="53.97"/><rect  fill="none" x="90.78" y="108.36" width="57.82" height="53.97"/><rect  fill="none" x="65.72" y="108.36" width="21.2" height="53.97"/><path  fill="#d5bc40" d="M131.26,177.75a1.94,1.94,0,0,0,1.93-1.93V172a1.93,1.93,0,0,0-3.86,0v3.85A1.94,1.94,0,0,0,131.26,177.75Z"/><path  fill="#d5bc40" d="M154.39,177.75a1.94,1.94,0,0,0,1.93-1.93V172a1.93,1.93,0,0,0-3.86,0v3.85A1.94,1.94,0,0,0,154.39,177.75Z"/><path  fill="#d5bc40" d="M142.82,177.75a1.94,1.94,0,0,0,1.93-1.93V172a1.93,1.93,0,1,0-3.85,0v3.85A1.93,1.93,0,0,0,142.82,177.75Z"/><path  fill="#d5bc40" d="M119.69,177.75a1.94,1.94,0,0,0,1.93-1.93V172a1.93,1.93,0,1,0-3.85,0v3.85A1.93,1.93,0,0,0,119.69,177.75Z"/><path  fill="#d5bc40" d="M166,177.75a1.94,1.94,0,0,0,1.93-1.93V172a1.93,1.93,0,1,0-3.85,0v3.85A1.93,1.93,0,0,0,166,177.75Z"/><path  fill="#d5bc40" d="M85,177.75a1.94,1.94,0,0,0,1.93-1.93V172a1.93,1.93,0,0,0-3.86,0v3.85A1.94,1.94,0,0,0,85,177.75Z"/><path  fill="#d5bc40" d="M96.56,177.75a1.94,1.94,0,0,0,1.93-1.93V172a1.93,1.93,0,1,0-3.85,0v3.85A1.93,1.93,0,0,0,96.56,177.75Z"/><path  fill="#d5bc40" d="M108.13,177.75a1.94,1.94,0,0,0,1.93-1.93V172a1.93,1.93,0,1,0-3.86,0v3.85A1.94,1.94,0,0,0,108.13,177.75Z"/><path  fill="#d52940" d="M175.59,85.23H63.8a1.94,1.94,0,0,0-1.93,1.93v96.37a1.94,1.94,0,0,0,1.93,1.93H175.59a1.94,1.94,0,0,0,1.93-1.93V87.16A1.94,1.94,0,0,0,175.59,85.23Zm-1,96.23h-109v-16h109ZM65.72,162.33v-54H86.93v54Zm25.06,0v-54h57.83v54Zm61.68,0v-54h21.2v54Zm22.13-57.87h-109v-16h109Z"/><path  fill="#d52940" d="M164,94.87a1.93,1.93,0,1,1,3.85,0v3.85a1.93,1.93,0,1,1-3.85,0Zm-11.57,0a1.93,1.93,0,0,1,3.86,0v3.85a1.93,1.93,0,1,1-3.86,0Zm-11.56,0a1.93,1.93,0,1,1,3.85,0v3.85a1.93,1.93,0,1,1-3.85,0Zm-11.57,0a1.93,1.93,0,0,1,3.86,0v3.85a1.93,1.93,0,1,1-3.86,0Zm-11.56,0a1.93,1.93,0,1,1,3.85,0v3.85a1.93,1.93,0,1,1-3.85,0Zm-11.57,0a1.93,1.93,0,0,1,3.86,0v3.85a1.93,1.93,0,0,1-3.86,0Zm-11.56,0a1.93,1.93,0,1,1,3.85,0v3.85a1.93,1.93,0,1,1-3.85,0Zm-11.57,0a1.93,1.93,0,0,1,3.86,0v3.85a1.93,1.93,0,0,1-3.86,0Zm-11.56,0a1.93,1.93,0,1,1,3.85,0v3.85a1.93,1.93,0,1,1-3.85,0Z"/><path  fill="#d52940" d="M164,172a1.93,1.93,0,1,1,3.85,0v3.85a1.93,1.93,0,1,1-3.85,0Zm-11.57,0a1.93,1.93,0,0,1,3.86,0v3.85a1.93,1.93,0,0,1-3.86,0Zm-11.56,0a1.93,1.93,0,1,1,3.85,0v3.85a1.93,1.93,0,1,1-3.85,0Zm-11.57,0a1.93,1.93,0,0,1,3.86,0v3.85a1.93,1.93,0,0,1-3.86,0Zm-11.56,0a1.93,1.93,0,1,1,3.85,0v3.85a1.93,1.93,0,1,1-3.85,0Zm-11.57,0a1.93,1.93,0,1,1,3.86,0v3.85a1.93,1.93,0,0,1-3.86,0Zm-11.56,0a1.93,1.93,0,1,1,3.85,0v3.85a1.93,1.93,0,1,1-3.85,0Zm-11.57,0a1.93,1.93,0,0,1,3.86,0v3.85a1.93,1.93,0,0,1-3.86,0Zm-11.56,0a1.93,1.93,0,1,1,3.85,0v3.85a1.93,1.93,0,1,1-3.85,0Z"/></g></svg>',
		'description' => 'Play videos from YouTube',
		'supports' => array(
			'html' => false,
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'customClassName' => true
		),
		'textdomain' => 'video-player-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockId' => array(
				'type' => 'string',
				'default' => ''
			),
			'containerMode' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'containerMaxWidth' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'value' => 1200,
						'unit' => 'px'
					),
					'tablet' => array(
						'value' => 100,
						'unit' => '%'
					),
					'mobile' => array(
						'value' => 100,
						'unit' => '%'
					)
				)
			),
			'containerHeight' => array(
				'type' => 'object',
				'default' => array(
					'value' => 315,
					'unit' => 'px'
				)
			),
			'containerBorderRadius' => array(
				'type' => 'number',
				'default' => 20
			),
			'marginTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'marginLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingTop' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingRight' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingBottom' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'paddingLeft' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 0,
					'tablet' => 0,
					'mobile' => 0
				)
			),
			'videoType' => array(
				'type' => 'string',
				'default' => 'youtube'
			),
			'ytVideoId' => array(
				'type' => 'string',
				'default' => 'dQw4w9WgXcQ'
			),
			'vimeoVideoId' => array(
				'type' => 'string',
				'default' => '1118056227'
			),
			'ytVideoUrl' => array(
				'type' => 'string',
				'default' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
			),
			'vimeoVideoUrl' => array(
				'type' => 'string',
				'default' => 'https://vimeo.com/1118056227'
			),
			'autoplay' => array(
				'type' => 'boolean',
				'default' => true
			),
			'mute' => array(
				'type' => 'boolean',
				'default' => true
			),
			'controls' => array(
				'type' => 'boolean',
				'default' => false
			),
			'loop' => array(
				'type' => 'boolean',
				'default' => true
			)
		)
	)
);

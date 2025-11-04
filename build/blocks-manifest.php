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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<path
				d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
				fill="#F0F0F1"
			/>
			<g clipPath="url(#clip0_2_11)">
				<path
					d="M19.2083 2.375H5.79167C3.93921 2.375 2.4375 3.81142 2.4375 5.58333V18.4167C2.4375 20.1886 3.93921 21.625 5.79167 21.625H19.2083C21.0608 21.625 22.5625 20.1886 22.5625 18.4167V5.58333C22.5625 3.81142 21.0608 2.375 19.2083 2.375Z"
					fill="#F0F0F1"
					stroke="black"
				/>
				<path
					opacity="0.92"
					d="M18.7785 5.125H6.22151C5.57937 5.125 5.05882 5.56472 5.05882 6.10714V6.89286C5.05882 7.43528 5.57937 7.875 6.22151 7.875H18.7785C19.4206 7.875 19.9412 7.43528 19.9412 6.89286V6.10714C19.9412 5.56472 19.4206 5.125 18.7785 5.125Z"
					fill="#FF0000"
				/>
				<path
					opacity="0.92"
					d="M18.7785 10.625H6.22151C5.57937 10.625 5.05882 11.0647 5.05882 11.6071V12.3929C5.05882 12.9353 5.57937 13.375 6.22151 13.375H18.7785C19.4206 13.375 19.9412 12.9353 19.9412 12.3929V11.6071C19.9412 11.0647 19.4206 10.625 18.7785 10.625Z"
					fill="black"
				/>
				<path
					opacity="0.92"
					d="M18.7785 16.125H6.22151C5.57937 16.125 5.05882 16.5647 5.05882 17.1071V17.8929C5.05882 18.4353 5.57937 18.875 6.22151 18.875H18.7785C19.4206 18.875 19.9412 18.4353 19.9412 17.8929V17.1071C19.9412 16.5647 19.4206 16.125 18.7785 16.125Z"
					fill="black"
				/>
			</g>
			<defs>
				<clipPath id="clip0_2_11">
					<rect
						width="23"
						height="22"
						fill="white"
						transform="translate(1 1)"
					/>
				</clipPath>
			</defs>
		</svg>',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<path
				d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
				fill="#F0F0F1"
			/>
			<rect
				x="1.5"
				y="7.5"
				width="21"
				height="8"
				rx="1.5"
				fill="#F0F0F1"
				stroke="black"
			/>
			<path
				opacity="0.92"
				d="M20.7656 10H18.2344C18.1049 10 18 10.4797 18 11.0714V11.9286C18 12.5203 18.1049 13 18.2344 13H20.7656C20.8951 13 21 12.5203 21 11.9286V11.0714C21 10.4797 20.8951 10 20.7656 10Z"
				fill="#FF0000"
				stroke="#FF0000"
			/>
			<path
				opacity="0.92"
				d="M14.9844 10H4.01562C3.45471 10 3 10.4797 3 11.0714V11.9286C3 12.5203 3.45471 13 4.01562 13H14.9844C15.5453 13 16 12.5203 16 11.9286V11.0714C16 10.4797 15.5453 10 14.9844 10Z"
				fill="black"
				stroke="black"
			/>
		</svg>',
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
			)
		)
	),
	'call-to-action-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/call-to-action',
		'version' => '0.1.0',
		'title' => 'Call To Action Block',
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
		'textdomain' => 'cta-block',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clipPath="url(#clip0_2_22)">
				<path
					d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
					fill="#F0F0F1"
				/>
				<path
					d="M7 14C7 16.5964 7.70178 19.1228 9 21.2C9.26521 21.6243 9.66004 21.9049 10.0976 21.9799C10.5352 22.0549 10.9797 21.9183 11.3333 21.6C11.6869 21.2817 11.9207 20.8079 11.9832 20.2828C12.0458 19.7577 11.9319 19.2243 11.6667 18.8C10.8012 17.4152 10.3333 15.731 10.3333 14"
					fill="#F0F0F1"
				/>
				<path
					d="M7 14C7 16.5964 7.70178 19.1228 9 21.2C9.26521 21.6243 9.66004 21.9049 10.0976 21.9799C10.5352 22.0549 10.9797 21.9183 11.3333 21.6C11.6869 21.2817 11.9207 20.8079 11.9832 20.2828C12.0458 19.7577 11.9319 19.2243 11.6667 18.8C10.8012 17.4152 10.3333 15.731 10.3333 14"
					stroke="#FF0000"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M11.1111 5.78571C13.8146 5.85846 16.4568 4.9384 18.5778 3.18571C18.7098 3.08225 18.8669 3.01924 19.0313 3.00375C19.1957 2.98827 19.361 3.02091 19.5086 3.09803C19.6563 3.17515 19.7805 3.2937 19.8672 3.44039C19.954 3.58708 20 3.75613 20 3.92857V15.0714C20 15.2439 19.954 15.4129 19.8672 15.5596C19.7805 15.7063 19.6563 15.8248 19.5086 15.902C19.361 15.9791 19.1957 16.0117 19.0313 15.9962C18.8669 15.9808 18.7098 15.9178 18.5778 15.8143C16.4568 14.0616 13.8146 13.1415 11.1111 13.2143H5.77778C5.30628 13.2143 4.8541 13.0186 4.5207 12.6703C4.1873 12.3221 4 11.8497 4 11.3571V7.64286C4 7.15031 4.1873 6.67794 4.5207 6.32966C4.8541 5.98138 5.30628 5.78571 5.77778 5.78571H11.1111Z"
					fill="#F0F0F1"
					stroke="black"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M11 6V13"
					stroke="black"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
			</g>
			<defs>
				<clipPath id="clip0_2_22">
					<path
						d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
						fill="white"
					/>
				</clipPath>
			</defs>
		</svg>'
	),
	'counter-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/counter-block',
		'version' => '0.1.0',
		'title' => 'Counter Block',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<rect width="24" height="24" rx="5" fill="#F0F0F1" />
			<path
				d="M5.27794 21.172L10.1824 14.4842L10.9802 14.0618C10.7925 14.3747 10.5656 14.6484 10.2997 14.8831C10.0337 15.1178 9.70522 15.2977 9.31412 15.4228C8.93866 15.548 8.47716 15.6105 7.92962 15.6105C6.99097 15.6105 6.12272 15.3837 5.32487 14.93C4.54267 14.4763 3.91691 13.8506 3.44758 13.0527C2.97826 12.2392 2.7436 11.3241 2.7436 10.3072C2.7436 9.25904 3.00173 8.31257 3.51798 7.46779C4.03424 6.60737 4.72258 5.92685 5.583 5.42624C6.44343 4.90998 7.39772 4.65186 8.44587 4.65186C9.50967 4.65186 10.4718 4.90216 11.3322 5.40277C12.1926 5.90338 12.8731 6.57608 13.3738 7.42086C13.8744 8.25 14.1247 9.18864 14.1247 10.2368C14.1247 11.6761 13.6241 13.1075 12.6228 14.5311L7.83575 21.172H5.27794ZM8.44587 13.874C9.10292 13.874 9.68958 13.7176 10.2058 13.4047C10.7377 13.0762 11.1523 12.646 11.4495 12.1141C11.7624 11.5665 11.9189 10.9642 11.9189 10.3072C11.9189 9.61886 11.7624 9.00874 11.4495 8.47684C11.1523 7.92929 10.7377 7.49908 10.2058 7.1862C9.68958 6.87332 9.10292 6.71688 8.44587 6.71688C7.78882 6.71688 7.19434 6.87332 6.66244 7.1862C6.14619 7.49908 5.73162 7.92929 5.41874 8.47684C5.10586 9.00874 4.94942 9.61886 4.94942 10.3072C4.94942 10.9799 5.10586 11.5822 5.41874 12.1141C5.73162 12.646 6.15401 13.0762 6.68591 13.4047C7.21781 13.7176 7.80446 13.874 8.44587 13.874Z"
				fill="#FF0000"
			/>
			<path
				d="M14.8616 10.5181C14.8616 10.3452 14.7929 10.1794 14.6707 10.0572C14.5484 9.93491 14.3826 9.86624 14.2097 9.86624H12.294C12.1464 9.89504 11.9933 9.87191 11.8608 9.80076C11.7283 9.72961 11.6245 9.61483 11.5669 9.47587C11.5094 9.33691 11.5017 9.18233 11.5451 9.03832C11.5885 8.89432 11.6804 8.76976 11.8051 8.68576L16.2611 4.23045C16.3341 4.15739 16.4209 4.09943 16.5163 4.05989C16.6118 4.02035 16.7141 4 16.8174 4C16.9207 4 17.0231 4.02035 17.1185 4.05989C17.214 4.09943 17.3007 4.15739 17.3738 4.23045L21.8291 8.68576C21.9538 8.76976 22.0457 8.89432 22.0891 9.03832C22.1325 9.18233 22.1248 9.33691 22.0673 9.47587C22.0097 9.61483 21.9059 9.72961 21.7734 9.80076C21.6409 9.87191 21.4878 9.89504 21.3402 9.86624H19.4244C19.2516 9.86624 19.0858 9.93491 18.9635 10.0572C18.8413 10.1794 18.7726 10.3452 18.7726 10.5181V11.8217C18.7726 11.9946 18.7039 12.1604 18.5817 12.2827C18.4594 12.4049 18.2936 12.4736 18.1208 12.4736H15.5134C15.3405 12.4736 15.1747 12.4049 15.0525 12.2827C14.9303 12.1604 14.8616 11.9946 14.8616 11.8217V10.5181Z"
				fill="black"
				stroke="black"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M14.8618 15.0809H18.7728"
				stroke="black"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>',
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
	'cta-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/cta-block',
		'version' => '0.1.0',
		'title' => 'CTA Block',
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
		),
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clipPath="url(#clip0_9_69)">
				<path
					d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
					fill="#F0F0F1"
				/>
				<path
					d="M7 14C7 16.5964 7.70178 19.1228 9 21.2C9.26521 21.6243 9.66004 21.9049 10.0976 21.9799C10.5352 22.0549 10.9797 21.9183 11.3333 21.6C11.6869 21.2817 11.9207 20.8079 11.9832 20.2828C12.0458 19.7577 11.9319 19.2243 11.6667 18.8C10.8012 17.4152 10.3333 15.731 10.3333 14"
					fill="#F0F0F1"
				/>
				<path
					d="M7 14C7 16.5964 7.70178 19.1228 9 21.2C9.26521 21.6243 9.66004 21.9049 10.0976 21.9799C10.5352 22.0549 10.9797 21.9183 11.3333 21.6C11.6869 21.2817 11.9207 20.8079 11.9832 20.2828C12.0458 19.7577 11.9319 19.2243 11.6667 18.8C10.8012 17.4152 10.3333 15.731 10.3333 14"
					stroke="#FF0000"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M11.1111 5.78571C13.8146 5.85846 16.4568 4.9384 18.5778 3.18571C18.7098 3.08225 18.8669 3.01924 19.0313 3.00375C19.1957 2.98827 19.361 3.02091 19.5086 3.09803C19.6563 3.17515 19.7805 3.2937 19.8672 3.44039C19.954 3.58708 20 3.75612 20 3.92857V15.0714C20 15.2439 19.954 15.4129 19.8672 15.5596C19.7805 15.7063 19.6563 15.8248 19.5086 15.902C19.361 15.9791 19.1957 16.0117 19.0313 15.9962C18.8669 15.9808 18.7098 15.9178 18.5778 15.8143C16.4568 14.0616 13.8146 13.1415 11.1111 13.2143H5.77778C5.30628 13.2143 4.8541 13.0186 4.5207 12.6703C4.1873 12.3221 4 11.8497 4 11.3571V7.64286C4 7.15031 4.1873 6.67794 4.5207 6.32966C4.8541 5.98138 5.30628 5.78571 5.77778 5.78571H11.1111Z"
					fill="#F0F0F1"
					stroke="black"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M11 6V13"
					stroke="#FF0000"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
			</g>
			<defs>
				<clipPath id="clip0_9_69">
					<path
						d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
						fill="white"
					/>
				</clipPath>
			</defs>
		</svg>'
	),
	'logos-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/logos-block',
		'version' => '0.1.0',
		'title' => 'Logos Block',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clipPath="url(#clip0_2_38)">
				<path
					d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
					fill="#F0F0F1"
				/>
				<g clipPath="url(#clip1_2_38)">
					<path
						d="M9.28334 10.8733C9.23468 10.6542 9.24215 10.4263 9.30506 10.2108C9.36796 9.99529 9.48425 9.79916 9.64316 9.64059C9.80207 9.48201 9.99844 9.36613 10.2141 9.30368C10.4297 9.24123 10.6576 9.23423 10.8767 9.28335C10.9972 9.09478 11.1633 8.9396 11.3597 8.83211C11.556 8.72462 11.7762 8.66827 12 8.66827C12.2238 8.66827 12.444 8.72462 12.6404 8.83211C12.8367 8.9396 13.0028 9.09478 13.1233 9.28335C13.3427 9.23402 13.571 9.24098 13.787 9.30358C14.003 9.36618 14.1996 9.48239 14.3586 9.6414C14.5176 9.8004 14.6338 9.99704 14.6964 10.213C14.759 10.429 14.766 10.6573 14.7167 10.8767C14.9052 10.9972 15.0604 11.1633 15.1679 11.3597C15.2754 11.556 15.3317 11.7762 15.3317 12C15.3317 12.2238 15.2754 12.444 15.1679 12.6404C15.0604 12.8367 14.9052 13.0028 14.7167 13.1233C14.7658 13.3424 14.7588 13.5703 14.6963 13.7859C14.6339 14.0016 14.518 14.1979 14.3594 14.3569C14.2009 14.5158 14.0047 14.6321 13.7892 14.695C13.5737 14.7579 13.3458 14.7653 13.1267 14.7167C13.0063 14.906 12.84 15.0618 12.6434 15.1698C12.4467 15.2778 12.226 15.3344 12.0017 15.3344C11.7773 15.3344 11.5566 15.2778 11.36 15.1698C11.1633 15.0618 10.9971 14.906 10.8767 14.7167C10.6576 14.7658 10.4297 14.7588 10.2141 14.6963C9.99844 14.6339 9.80207 14.518 9.64316 14.3594C9.48425 14.2009 9.36796 14.0047 9.30506 13.7892C9.24215 13.5737 9.23468 13.3458 9.28334 13.1267C9.09332 13.0064 8.93681 12.8401 8.82835 12.6431C8.7199 12.4461 8.66302 12.2249 8.66302 12C8.66302 11.7751 8.7199 11.5539 8.82835 11.3569C8.93681 11.16 9.09332 10.9936 9.28334 10.8733Z"
						fill="#FF0000"
					/>
				</g>
				<g clipPath="url(#clip2_2_38)">
					<path
						d="M2.9625 11.155C2.92601 10.9907 2.93162 10.8197 2.97879 10.6581C3.02597 10.4965 3.11319 10.3494 3.23237 10.2305C3.35155 10.1115 3.49883 10.0246 3.66055 9.97777C3.82228 9.93094 3.99321 9.92569 4.1575 9.96252C4.24793 9.8211 4.3725 9.70471 4.51974 9.6241C4.66698 9.54348 4.83214 9.50122 5 9.50122C5.16787 9.50122 5.33303 9.54348 5.48026 9.6241C5.6275 9.70471 5.75208 9.8211 5.8425 9.96252C6.00704 9.92553 6.17827 9.93075 6.34025 9.9777C6.50223 10.0247 6.64971 10.1118 6.76896 10.2311C6.88822 10.3503 6.97537 10.4978 7.02232 10.6598C7.06928 10.8218 7.0745 10.993 7.0375 11.1575C7.17893 11.248 7.29531 11.3725 7.37593 11.5198C7.45655 11.667 7.49881 11.8322 7.49881 12C7.49881 12.1679 7.45655 12.333 7.37593 12.4803C7.29531 12.6275 7.17893 12.7521 7.0375 12.8425C7.07434 13.0068 7.06909 13.1777 7.02225 13.3395C6.97542 13.5012 6.8885 13.6485 6.76957 13.7677C6.65064 13.8868 6.50354 13.9741 6.34192 14.0212C6.18029 14.0684 6.00937 14.074 5.845 14.0375C5.75469 14.1795 5.63002 14.2964 5.48253 14.3774C5.33505 14.4583 5.16951 14.5008 5.00125 14.5008C4.833 14.5008 4.66746 14.4583 4.51997 14.3774C4.37248 14.2964 4.24781 14.1795 4.1575 14.0375C3.99321 14.0744 3.82228 14.0691 3.66055 14.0223C3.49883 13.9754 3.35155 13.8885 3.23237 13.7696C3.11319 13.6507 3.02597 13.5036 2.97879 13.3419C2.93162 13.1803 2.92601 13.0094 2.9625 12.845C2.81999 12.7548 2.70261 12.6301 2.62126 12.4823C2.53992 12.3346 2.49727 12.1687 2.49727 12C2.49727 11.8314 2.53992 11.6655 2.62126 11.5177C2.70261 11.37 2.81999 11.2452 2.9625 11.155Z"
						fill="black"
					/>
				</g>
				<g clipPath="url(#clip3_2_38)">
					<path
						d="M16.9625 11.155C16.926 10.9907 16.9316 10.8197 16.9788 10.6581C17.026 10.4965 17.1132 10.3494 17.2324 10.2305C17.3515 10.1115 17.4988 10.0246 17.6606 9.97777C17.8223 9.93094 17.9932 9.92569 18.1575 9.96252C18.2479 9.8211 18.3725 9.70471 18.5197 9.6241C18.667 9.54348 18.8321 9.50122 19 9.50122C19.1679 9.50122 19.333 9.54348 19.4803 9.6241C19.6275 9.70471 19.7521 9.8211 19.8425 9.96252C20.007 9.92553 20.1783 9.93075 20.3403 9.9777C20.5022 10.0247 20.6497 10.1118 20.769 10.2311C20.8882 10.3503 20.9754 10.4978 21.0223 10.6598C21.0693 10.8218 21.0745 10.993 21.0375 11.1575C21.1789 11.248 21.2953 11.3725 21.3759 11.5198C21.4565 11.667 21.4988 11.8322 21.4988 12C21.4988 12.1679 21.4565 12.333 21.3759 12.4803C21.2953 12.6275 21.1789 12.7521 21.0375 12.8425C21.0743 13.0068 21.0691 13.1777 21.0223 13.3395C20.9754 13.5012 20.8885 13.6485 20.7696 13.7677C20.6506 13.8868 20.5035 13.9741 20.3419 14.0212C20.1803 14.0684 20.0094 14.074 19.845 14.0375C19.7547 14.1795 19.63 14.2964 19.4825 14.3774C19.335 14.4583 19.1695 14.5008 19.0013 14.5008C18.833 14.5008 18.6675 14.4583 18.52 14.3774C18.3725 14.2964 18.2478 14.1795 18.1575 14.0375C17.9932 14.0744 17.8223 14.0691 17.6606 14.0223C17.4988 13.9754 17.3515 13.8885 17.2324 13.7696C17.1132 13.6507 17.026 13.5036 16.9788 13.3419C16.9316 13.1803 16.926 13.0094 16.9625 12.845C16.82 12.7548 16.7026 12.6301 16.6213 12.4823C16.5399 12.3346 16.4973 12.1687 16.4973 12C16.4973 11.8314 16.5399 11.6655 16.6213 11.5177C16.7026 11.37 16.82 11.2452 16.9625 11.155Z"
						fill="black"
					/>
				</g>
			</g>
			<defs>
				<clipPath id="clip0_2_38">
					<path
						d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
						fill="white"
					/>
				</clipPath>
				<clipPath id="clip1_2_38">
					<rect width="8" height="8" fill="white" transform="translate(8 8)" />
				</clipPath>
				<clipPath id="clip2_2_38">
					<rect width="6" height="6" fill="white" transform="translate(2 9)" />
				</clipPath>
				<clipPath id="clip3_2_38">
					<rect width="6" height="6" fill="white" transform="translate(16 9)" />
				</clipPath>
			</defs>
		</svg>'
	),
	'map-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/map-block',
		'version' => '0.1.0',
		'title' => 'Map Block',
		'category' => 'widgets',
		'icon' => 'admin-settings',
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
		'title' => 'Mega Menu',
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
						'url' => '/',
						'isBold' => false,
						'openInNewTab' => false,
						'canvasImageUrl' => '',
						'canvasImageAlt' => 'Canvas Image',
						'canvasImagePosition' => 'left',
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
						'children' => array(
							
						)
					),
					array(
						'id' => 'menu-item-2',
						'title' => 'Services',
						'url' => '/services',
						'isBold' => false,
						'openInNewTab' => false,
						'canvasImageUrl' => '',
						'canvasImageAlt' => 'Canvas Image',
						'canvasImagePosition' => 'left',
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
						'url' => '/portfolio',
						'isBold' => false,
						'openInNewTab' => false,
						'canvasImageUrl' => '',
						'canvasImageAlt' => 'Canvas Image',
						'canvasImagePosition' => 'left',
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
						'children' => array(
							
						)
					),
					array(
						'id' => 'menu-item-4',
						'title' => 'About',
						'url' => '/about',
						'isBold' => false,
						'openInNewTab' => false,
						'canvasImageUrl' => '',
						'canvasImageAlt' => 'Canvas Image',
						'canvasImagePosition' => 'left',
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
						'children' => array(
							
						)
					),
					array(
						'id' => 'menu-item-5',
						'title' => 'Contact',
						'url' => '/contact',
						'isBold' => false,
						'openInNewTab' => false,
						'canvasImageUrl' => '',
						'canvasImageAlt' => 'Canvas Image',
						'canvasImagePosition' => 'left',
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
			'level2HoverColor' => array(
				'type' => 'string',
				'default' => '#428aff'
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
			)
		),
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clip-path="url(#clip0_21_23)">
				<rect width="24" height="24" rx="5" fill="#F0F0F1" />
				<g clip-path="url(#clip1_21_23)">
					<path
						d="M4 5H20"
						stroke="black"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
					<path
						d="M4 12H20"
						stroke="#FF0000"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
					<path
						d="M4 19H20"
						stroke="black"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
				</g>
			</g>
			<defs>
				<clipPath id="clip0_21_23">
					<rect width="24" height="24" rx="5" fill="white" />
				</clipPath>
				<clipPath id="clip1_21_23">
					<rect width="24" height="24" fill="white" />
				</clipPath>
			</defs>
		</svg>'
	),
	'particles-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/particles-block',
		'version' => '0.1.0',
		'title' => 'Particles Block',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clipPath="url(#clip0_4_18)">
				<path
					d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
					fill="#F0F0F1"
				/>
				<path
					d="M11.0989 3.57948C11.1382 3.3692 11.2498 3.17927 11.4143 3.0426C11.5789 2.90593 11.7861 2.83112 12 2.83112C12.2139 2.83112 12.4211 2.90593 12.5857 3.0426C12.7502 3.17927 12.8618 3.3692 12.9011 3.57948L13.8645 8.67431C13.9329 9.03653 14.1089 9.36971 14.3696 9.63037C14.6303 9.89102 14.9634 10.0671 15.3257 10.1355L20.4205 11.0989C20.6308 11.1382 20.8207 11.2498 20.9574 11.4143C21.094 11.5789 21.1689 11.7861 21.1689 12C21.1689 12.2139 21.094 12.4211 20.9574 12.5856C20.8207 12.7502 20.6308 12.8618 20.4205 12.9011L15.3257 13.8645C14.9634 13.9329 14.6303 14.1089 14.3696 14.3696C14.1089 14.6302 13.9329 14.9634 13.8645 15.3256L12.9011 20.4205C12.8618 20.6308 12.7502 20.8207 12.5857 20.9574C12.4211 21.094 12.2139 21.1688 12 21.1688C11.7861 21.1688 11.5789 21.094 11.4143 20.9574C11.2498 20.8207 11.1382 20.6308 11.0989 20.4205L10.1355 15.3256C10.0671 14.9634 9.89104 14.6302 9.63038 14.3696C9.36972 14.1089 9.03655 13.9329 8.67433 13.8645L3.57949 12.9011C3.36921 12.8618 3.17929 12.7502 3.04262 12.5856C2.90595 12.4211 2.83113 12.2139 2.83113 12C2.83113 11.7861 2.90595 11.5789 3.04262 11.4143C3.17929 11.2498 3.36921 11.1382 3.57949 11.0989L8.67433 10.1355C9.03655 10.0671 9.36972 9.89102 9.63038 9.63037C9.89104 9.36971 10.0671 9.03653 10.1355 8.67431L11.0989 3.57948Z"
					fill="#F0F0F1"
					stroke="#FF0000"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M19.3333 2.83331V6.49998"
					stroke="black"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M21.1667 4.66669H17.5"
					stroke="black"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M4.66666 21.1667C5.67918 21.1667 6.49999 20.3459 6.49999 19.3333C6.49999 18.3208 5.67918 17.5 4.66666 17.5C3.65414 17.5 2.83333 18.3208 2.83333 19.3333C2.83333 20.3459 3.65414 21.1667 4.66666 21.1667Z"
					fill="black"
					stroke="black"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
			</g>
			<defs>
				<clipPath id="clip0_4_18">
					<path
						d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
						fill="white"
					/>
				</clipPath>
			</defs>
		</svg>'
	),
	'portfolio-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/portfolio-block',
		'version' => '0.1.0',
		'title' => 'Portfolio Block',
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
			'reusable' => true
		),
		'textdomain' => 'portfolio-block',
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clipPath="url(#clip0_4_33)">
				<path
					d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
					fill="#F0F0F1"
				/>
				<path
					d="M12.9167 13.595C12.638 13.7559 12.3218 13.8406 12 13.8406C11.6782 13.8406 11.362 13.7559 11.0833 13.595L3.29167 9.13084C3.15059 9.05089 3.03325 8.93495 2.95162 8.79484C2.86998 8.65474 2.82697 8.49549 2.82697 8.33334C2.82697 8.17118 2.86998 8.01193 2.95162 7.87183C3.03325 7.73173 3.15059 7.61579 3.29167 7.53584L11.0833 3.07167C11.362 2.91076 11.6782 2.82605 12 2.82605C12.3218 2.82605 12.638 2.91076 12.9167 3.07167L20.7083 7.53584C20.8494 7.61579 20.9667 7.73173 21.0484 7.87183C21.13 8.01193 21.173 8.17118 21.173 8.33334C21.173 8.49549 21.13 8.65474 21.0484 8.79484C20.9667 8.93495 20.8494 9.05089 20.7083 9.13084L12.9167 13.595Z"
					fill="#F0F0F1"
					stroke="#FF0000"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M19.3333 14.0946L20.7083 14.8692C20.8494 14.9491 20.9667 15.0651 21.0484 15.2052C21.13 15.3453 21.173 15.5045 21.173 15.6667C21.173 15.8288 21.13 15.9881 21.0484 16.1282C20.9667 16.2683 20.8494 16.3842 20.7083 16.4642L12.9167 20.9284C12.638 21.0893 12.3218 21.174 12 21.174C11.6782 21.174 11.362 21.0893 11.0833 20.9284L3.29167 16.4642C3.15059 16.3842 3.03325 16.2683 2.95162 16.1282C2.86998 15.9881 2.82697 15.8288 2.82697 15.6667C2.82697 15.5045 2.86998 15.3453 2.95162 15.2052C3.03325 15.0651 3.15059 14.9491 3.29167 14.8692L4.66667 14.0946"
					fill="#F0F0F1"
				/>
				<path
					d="M19.3333 14.0946L20.7083 14.8692C20.8494 14.9491 20.9667 15.0651 21.0484 15.2052C21.13 15.3453 21.173 15.5045 21.173 15.6667C21.173 15.8288 21.13 15.9881 21.0484 16.1282C20.9667 16.2683 20.8494 16.3842 20.7083 16.4642L12.9167 20.9284C12.638 21.0893 12.3218 21.174 12 21.174C11.6782 21.174 11.362 21.0893 11.0833 20.9284L3.29167 16.4642C3.15059 16.3842 3.03325 16.2683 2.95162 16.1282C2.86998 15.9881 2.82697 15.8288 2.82697 15.6667C2.82697 15.5045 2.86998 15.3453 2.95162 15.2052C3.03325 15.0651 3.15059 14.9491 3.29167 14.8692L4.66667 14.0946"
					stroke="black"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
			</g>
			<defs>
				<clipPath id="clip0_4_33">
					<path
						d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
						fill="white"
					/>
				</clipPath>
			</defs>
		</svg>',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clipPath="url(#clip0_4_45)">
				<path
					d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
					fill="#F0F0F1"
				/>
				<path
					d="M9 3H4C3.44772 3 3 3.44772 3 4V9C3 9.55229 3.44772 10 4 10H9C9.55229 10 10 9.55229 10 9V4C10 3.44772 9.55229 3 9 3Z"
					fill="#F0F0F1"
					stroke="#FF0000"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M20 3H15C14.4477 3 14 3.44772 14 4V9C14 9.55229 14.4477 10 15 10H20C20.5523 10 21 9.55229 21 9V4C21 3.44772 20.5523 3 20 3Z"
					fill="#F0F0F1"
					stroke="black"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M20 14H15C14.4477 14 14 14.4477 14 15V20C14 20.5523 14.4477 21 15 21H20C20.5523 21 21 20.5523 21 20V15C21 14.4477 20.5523 14 20 14Z"
					fill="#F0F0F1"
					stroke="#FF0000"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M9 14H4C3.44772 14 3 14.4477 3 15V20C3 20.5523 3.44772 21 4 21H9C9.55229 21 10 20.5523 10 20V15C10 14.4477 9.55229 14 9 14Z"
					fill="#F0F0F1"
					stroke="black"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
			</g>
			<defs>
				<clipPath id="clip0_4_45">
					<path
						d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
						fill="white"
					/>
				</clipPath>
			</defs>
		</svg>'
	),
	'project-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/project-block',
		'version' => '0.1.0',
		'title' => 'Project Block',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clipPath="url(#clip0_4_57)">
				<path
					d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
					fill="#F0F0F1"
				/>
				<path
					d="M4.66668 8.33331C4.18045 8.33331 3.71413 8.52647 3.37031 8.87028C3.0265 9.2141 2.83334 9.68042 2.83334 10.1666V19.3333C2.83334 19.8195 3.0265 20.2859 3.37031 20.6297C3.71413 20.9735 4.18045 21.1666 4.66668 21.1666H13.8333C14.3196 21.1666 14.7859 20.9735 15.1297 20.6297C15.4735 20.2859 15.6667 19.8195 15.6667 19.3333"
					fill="#F0F0F1"
				/>
				<path
					d="M4.66668 8.33331C4.18045 8.33331 3.71413 8.52647 3.37031 8.87028C3.0265 9.2141 2.83334 9.68042 2.83334 10.1666V19.3333C2.83334 19.8195 3.0265 20.2859 3.37031 20.6297C3.71413 20.9735 4.18045 21.1666 4.66668 21.1666H13.8333C14.3196 21.1666 14.7859 20.9735 15.1297 20.6297C15.4735 20.2859 15.6667 19.8195 15.6667 19.3333"
					stroke="#FF0000"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M19.3333 2.83331H10.1667C9.15415 2.83331 8.33334 3.65412 8.33334 4.66665V13.8333C8.33334 14.8458 9.15415 15.6666 10.1667 15.6666H19.3333C20.3459 15.6666 21.1667 14.8458 21.1667 13.8333V4.66665C21.1667 3.65412 20.3459 2.83331 19.3333 2.83331Z"
					fill="#F0F0F1"
					stroke="black"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M21.1667 11.0833L19.9787 9.89532C19.7742 9.68912 19.5308 9.52545 19.2627 9.41376C18.9947 9.30207 18.7071 9.24457 18.4167 9.24457C18.1263 9.24457 17.8387 9.30207 17.5706 9.41376C17.3025 9.52545 17.0592 9.68912 16.8547 9.89532L11.0833 15.6667"
					fill="#F0F0F1"
				/>
				<path
					d="M21.1667 11.0833L19.9787 9.89532C19.7742 9.68912 19.5308 9.52545 19.2627 9.41376C18.9947 9.30207 18.7071 9.24457 18.4167 9.24457C18.1263 9.24457 17.8387 9.30207 17.5706 9.41376C17.3025 9.52545 17.0592 9.68912 16.8547 9.89532L11.0833 15.6667"
					stroke="black"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M12.9167 8.33333C13.4229 8.33333 13.8333 7.92293 13.8333 7.41667C13.8333 6.91041 13.4229 6.5 12.9167 6.5C12.4104 6.5 12 6.91041 12 7.41667C12 7.92293 12.4104 8.33333 12.9167 8.33333Z"
					fill="black"
					stroke="black"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
			</g>
			<defs>
				<clipPath id="clip0_4_57">
					<path
						d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
						fill="white"
					/>
				</clipPath>
			</defs>
		</svg>'
	),
	'questions-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/questions-block',
		'version' => '0.1.0',
		'title' => 'Questions Block',
		'category' => 'widgets',
		'description' => 'Animated questions section with GSAP pinning and transitions.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'questions-block',
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clipPath="url(#clip0_4_71)">
				<path
					d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
					fill="#F0F0F1"
				/>
				<path
					d="M7 6.3383C7.40327 5.22525 8.19923 4.28668 9.24692 3.68883C10.2946 3.09099 11.5264 2.87245 12.7241 3.07193C13.9219 3.2714 15.0083 3.87601 15.7909 4.77868C16.5735 5.68135 17.0018 6.82381 17 8.00373C17 11.3346 11.8542 13 11.8542 13"
					fill="#F0F0F1"
				/>
				<path
					d="M7 6.3383C7.40327 5.22525 8.19923 4.28668 9.24692 3.68883C10.2946 3.09099 11.5264 2.87245 12.7241 3.07193C13.9219 3.2714 15.0083 3.87601 15.7909 4.77868C16.5735 5.68135 17.0018 6.82381 17 8.00373C17 11.3346 11.8542 13 11.8542 13"
					stroke="#FF0000"
					strokeWidth="2"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<circle cx="12" cy="18" r="2" fill="black" />
			</g>
			<defs>
				<clipPath id="clip0_4_71">
					<path
						d="M0 5C0 2.23858 2.23858 0 5 0H19C21.7614 0 24 2.23858 24 5V19C24 21.7614 21.7614 24 19 24H5C2.23858 24 0 21.7614 0 19V5Z"
						fill="white"
					/>
				</clipPath>
			</defs>
		</svg>',
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
		'title' => 'Scroll Text',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<rect width="24" height="24" rx="5" fill="#F0F0F1" />
			<path
				d="M7.50324 20V6.4H9.80324V20H7.50324ZM2.94324 8.1V6H14.3632V8.1H2.94324Z"
				fill="#FF0000"
			/>
			<path
				d="M18.8569 8.66664C18.8569 8.84346 18.9272 9.01302 19.0522 9.13805C19.1772 9.26307 19.3468 9.33331 19.5236 9.33331L21.4829 9.33331C21.6339 9.30385 21.7904 9.32751 21.9259 9.40028C22.0615 9.47304 22.1677 9.59044 22.2265 9.73256C22.2854 9.87468 22.2933 10.0328 22.2489 10.1801C22.2045 10.3273 22.1105 10.4547 21.9829 10.5406L17.4256 15.0973C17.3509 15.172 17.2622 15.2313 17.1645 15.2718C17.0669 15.3122 16.9623 15.333 16.8566 15.333C16.7509 15.333 16.6463 15.3122 16.5486 15.2718C16.451 15.2313 16.3623 15.172 16.2876 15.0973L11.7309 10.5406C11.6033 10.4547 11.5094 10.3273 11.465 10.1801C11.4206 10.0328 11.4285 9.87468 11.4873 9.73256C11.5462 9.59044 11.6524 9.47304 11.7879 9.40028C11.9234 9.32751 12.0799 9.30385 12.2309 9.33331L14.1902 9.33331C14.3671 9.33331 14.5366 9.26307 14.6617 9.13805C14.7867 9.01302 14.8569 8.84346 14.8569 8.66664L14.8569 7.33331C14.8569 7.1565 14.9272 6.98693 15.0522 6.86191C15.1772 6.73688 15.3468 6.66664 15.5236 6.66664L18.1902 6.66664C18.3671 6.66664 18.5366 6.73688 18.6617 6.86191C18.7867 6.98693 18.8569 7.1565 18.8569 7.33331L18.8569 8.66664Z"
				fill="black"
				stroke="black"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M18.8567 4L14.8567 4"
				stroke="black"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>'
	),
	'services-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/services-block',
		'version' => '0.1.0',
		'title' => 'Services Block',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clip-path="url(#clip0_21_2)">
				<rect width="24" height="24" rx="5" fill="#F0F0F1" />
				<g clip-path="url(#clip1_21_2)">
					<path
						d="M12 2.83331C13.7785 2.83299 15.5186 3.35002 17.0084 4.32139C18.4981 5.29276 19.6731 6.67652 20.3902 8.30401C21.1073 9.93151 21.3354 11.7325 21.0469 13.4873C20.7583 15.2422 19.9655 16.8753 18.765 18.1875"
						fill="#F0F0F1"
					/>
					<path
						d="M12 2.83331C13.7785 2.83299 15.5186 3.35002 17.0084 4.32139C18.4981 5.29276 19.6731 6.67652 20.3902 8.30401C21.1073 9.93151 21.3354 11.7325 21.0469 13.4873C20.7583 15.2422 19.9655 16.8753 18.765 18.1875"
						stroke="#FF0000"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
					<path
						d="M3.29165 9.13544C2.99955 10.0234 2.84499 10.9508 2.83331 11.8854Z"
						fill="#F0F0F1"
					/>
					<path
						d="M3.29165 9.13544C2.99955 10.0234 2.84499 10.9508 2.83331 11.8854"
						stroke="black"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
					<path
						d="M3.59418 15.6667C4.10889 16.8509 4.86796 17.9129 5.82168 18.7834Z"
						fill="#F0F0F1"
					/>
					<path
						d="M3.59418 15.6667C4.10889 16.8509 4.86796 17.9129 5.82168 18.7834"
						stroke="#FF0000"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
					<path
						d="M5.24969 5.79877C5.50548 5.52031 5.77825 5.25795 6.06644 5.01318Z"
						fill="#F0F0F1"
					/>
					<path
						d="M5.24969 5.79877C5.50548 5.52031 5.77825 5.25795 6.06644 5.01318"
						stroke="#FF0000"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
					<path
						d="M8.92365 20.635C11.2095 21.4494 13.7251 21.3241 15.9187 20.2867Z"
						fill="#F0F0F1"
					/>
					<path
						d="M8.92365 20.635C11.2095 21.4494 13.7251 21.3241 15.9187 20.2867"
						stroke="black"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
				</g>
			</g>
			<defs>
				<clipPath id="clip0_21_2">
					<rect width="24" height="24" rx="5" fill="white" />
				</clipPath>
				<clipPath id="clip1_21_2">
					<rect
						width="22"
						height="22"
						fill="white"
						transform="translate(1 1)"
					/>
				</clipPath>
			</defs>
		</svg>'
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clipPath="url(#clip0_7_2)">
				<rect width="24" height="24" rx="5" fill="#F0F0F1" />
				<path
					d="M19.5833 2.25H4.41667C3.22005 2.25 2.25 3.22005 2.25 4.41667V19.5833C2.25 20.78 3.22005 21.75 4.41667 21.75H19.5833C20.78 21.75 21.75 20.78 21.75 19.5833V4.41667C21.75 3.22005 20.78 2.25 19.5833 2.25Z"
					fill="#F0F0F1"
					stroke="black"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M12 8.75V2.25"
					stroke="black"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M2.25 8.75H21.75"
					stroke="black"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M20 13H4"
					stroke="#FF0000"
					strokeWidth="2"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M20 18L4 18"
					stroke="black"
					strokeWidth="2"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
			</g>
			<defs>
				<clipPath id="clip0_7_2">
					<rect width="24" height="24" rx="5" fill="white" />
				</clipPath>
			</defs>
		</svg>',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g clipPath="url(#clip0_7_34)">
				<rect width="24" height="24" rx="5" fill="#F0F0F1" />
				<path
					d="M11.5 15H7C5.93913 15 4.92172 15.4214 4.17157 16.1716C3.42143 16.9217 3 17.9391 3 19V21"
					fill="#F0F0F1"
				/>
				<path
					d="M11.5 15H7C5.93913 15 4.92172 15.4214 4.17157 16.1716C3.42143 16.9217 3 17.9391 3 19V21"
					stroke="black"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M10 11C12.2091 11 14 9.20914 14 7C14 4.79086 12.2091 3 10 3C7.79086 3 6 4.79086 6 7C6 9.20914 7.79086 11 10 11Z"
					fill="black"
					stroke="black"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M20 13H14"
					stroke="#FF0000"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M20 16H14"
					stroke="black"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
				<path
					d="M20 19H14"
					stroke="#FF0000"
					strokeWidth="1.5"
					strokeLinecap="round"
					strokeLinejoin="round"
				/>
			</g>
			<defs>
				<clipPath id="clip0_7_34">
					<rect width="24" height="24" rx="5" fill="white" />
				</clipPath>
			</defs>
		</svg>',
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
	'video-hero-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/video-hero-block',
		'version' => '0.1.0',
		'title' => 'Video Hero Slider',
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
		'icon' => '<svg
			width="24"
			height="24"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<rect width="24" height="24" rx="5" fill="#F0F0F1" />
			<path
				d="M7.41666 20.25H16.5833"
				stroke="black"
				strokeWidth="1.5"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M19.3333 3.75H4.66668C3.65415 3.75 2.83334 4.57081 2.83334 5.58333V14.75C2.83334 15.7625 3.65415 16.5833 4.66668 16.5833H19.3333C20.3459 16.5833 21.1667 15.7625 21.1667 14.75V5.58333C21.1667 4.57081 20.3459 3.75 19.3333 3.75Z"
				fill="#F0F0F1"
				stroke="black"
				strokeWidth="1.5"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M14.7802 9.65334C14.8703 9.70544 14.945 9.78029 14.997 9.87039C15.0489 9.96049 15.0763 10.0627 15.0763 10.1667C15.0763 10.2707 15.0489 10.3729 14.997 10.463C14.945 10.5531 14.8703 10.6279 14.7802 10.68L11.054 12.836C10.964 12.8881 10.8619 12.9155 10.7579 12.9155C10.654 12.9155 10.5518 12.8881 10.4618 12.836C10.3718 12.784 10.2972 12.7091 10.2454 12.619C10.1935 12.5288 10.1664 12.4266 10.1667 12.3227V8.01068C10.1665 7.90685 10.1936 7.8048 10.2454 7.71481C10.2972 7.62481 10.3718 7.55003 10.4616 7.498C10.5515 7.44597 10.6534 7.41851 10.7573 7.4184C10.8611 7.41828 10.9631 7.44551 11.0531 7.49734L14.7802 9.65334Z"
				fill="#FF0000"
				stroke="#FF0000"
				strokeWidth="1.5"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>'
	),
	'video-player-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/video-player-block',
		'version' => '0.1.0',
		'title' => 'Video Player Block',
		'category' => 'widgets',
		'icon' => 'admin-settings',
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

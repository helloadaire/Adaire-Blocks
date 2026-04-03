import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
	const {
		agencyTitle,
		agencyDescription,
		ctaButtonText,
		slides,
		backgroundColor,
		textColor,
		titleFontSize,
		textFontSize,
		slideTitleFontSize,
		slideDescriptionFontSize,
		slideTagFontSize,
		previewText,
		linkText,
		blockId,
		containerHeight,
		containerHeightLargeDesktop,
		containerHeightDesktop,
		containerHeightSmallLaptop,
		containerHeightTabLand,
		containerHeightTabPort,
		containerHeightPhone
	} = attributes;

	// Process slides to ensure image URLs are properly stored
	// If we have image IDs, we'll let PHP handle the URL conversion, but we store the URL if available
	const processedSlides = (slides || []).map(slide => ({
		...slide,
		// Ensure slideImg is a valid URL or empty string
		slideImg: slide.slideImg || '',
		// Ensure slideImgId is a valid number or 0
		slideImgId: slide.slideImgId || 0
	}));

	// Get the first slide's image for initial display, or use a placeholder
	const firstSlideImage = processedSlides.length > 0 && processedSlides[0].slideImg 
		? processedSlides[0].slideImg 
		: '';
	const firstSlideTitle = processedSlides.length > 0 && processedSlides[0].slideTitle
		? processedSlides[0].slideTitle
		: 'Build';

	const blockProps = useBlockProps.save({
		className: 'animation-component ad-services-block-body',
		style: {
			color: textColor || '#ffffff',
			'--title-font-size': `${titleFontSize}px`,
			'--text-font-size': `${textFontSize}px`,
			'--slide-title-font-size': `${slideTitleFontSize}px`,
			'--slide-description-font-size': `${slideDescriptionFontSize}px`,
			'--slide-tag-font-size': `${slideTagFontSize}px`,
			'--container-height': `${containerHeight || 70}vh`,
			'--container-height-large-desktop': `${containerHeightLargeDesktop || 80}vh`,
			'--container-height-desktop': `${containerHeightDesktop || 70}vh`,
			'--container-height-small-laptop': `${containerHeightSmallLaptop || 65}vh`,
			'--container-height-tab-land': `${containerHeightTabLand || 60}vh`,
			'--container-height-tab-port': `${containerHeightTabPort || 55}vh`,
			'--container-height-phone': `${containerHeightPhone || 50}vh`,
		},
		id: blockId || undefined,
		'data-slides': JSON.stringify(processedSlides),
		'data-preview-text': previewText || 'We:',
		'data-link-text': linkText || 'Read More'
	});

	return (
		<div {...blockProps}>
			<div className="ad-services-block-container">
				<div className="ad-services-block-cursor">
					<p className="ad-services-block-cursor-text"></p>
				</div>
		
				<div className="ad-services-block-story-img">
					<div className="img">
						{firstSlideImage ? (
							<img className="story-image" src={firstSlideImage} alt={firstSlideTitle} />
						) : (
							<div className="placeholder-img">Story Image</div>
						)}
					</div>
				</div>
				<div className="ad-services-block-services-overview">
					<h1>{previewText || "We:"} </h1>
					{/* Dynamic overview items will be injected here by view.js */}
					<div className="overview-placeholder">
						{/* Dynamic overview items will be injected here by view.js */}
					</div>
				</div>
		
				<div className="ad-services-block-story-content">
					<div className="ad-services-block-row">
						<div className="ad-services-block-indices">
							{/* Dynamic index indicators will be injected here by view.js */}
						</div>
		
						<div className="profile">
							<div className="profile-icon">
								{firstSlideImage ? (
									<img className="profile-image" src={firstSlideImage} alt={firstSlideTitle} />
								) : (
									<div className="placeholder-img">Profile Image</div>
								)}
							</div>
							<div className="profile-name">
								<p className="profile-text">{firstSlideTitle}</p>
							</div>
						</div>
					</div>
		
					<div className="row">
						<div className="title">
							{/* Dynamic title content will be injected here by view.js */}
						</div>
		
						<div className="link">
							<a className="link-text" href={processedSlides.length > 0 ? (processedSlides[0].slideUrl || '#') : '#'} target="_blank" rel="noopener noreferrer">
								{linkText || "Read More"}
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
}
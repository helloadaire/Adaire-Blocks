import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { useEffect } from '@wordpress/element';
import {
	PanelBody,
	TextControl,
	TextareaControl,
	Button,
	RangeControl,
	ButtonGroup
} from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	const { slides = [], storyDuration = 8000, previewText, linkText, blockId } = attributes;

	// Ensure slides are properly initialized
	useEffect(() => {
		console.log('useEffect running, current slides:', slides);
		console.log('useEffect running, slides length:', slides?.length);
		
		if (!slides || slides.length === 0) {
			const defaultSlides = [
				{
					slideTitle: "Build",
					slideDescription: "We design and develop custom websites and applications that are tailored to your specific needs and goals.",
					slideImg: "",
					slideImgId: 0,
					slideUrl: "#"
				},
				{
					slideTitle: "Maintain",
					slideDescription: "We provide ongoing maintenance and support to ensure your digital assets are always up to date.",
					slideImg: "",
					slideImgId: 0,
					slideUrl: "#"
				},
				{
					slideTitle: "Support",
					slideDescription: "Our dedicated support team is always available to help you with any issues or questions you may have.",
					slideImg: "",
					slideImgId: 0,
					slideUrl: "#"
				},
				{
					slideTitle: "Host",
					slideDescription: "We offer reliable and secure hosting solutions to ensure your website is always online and performing optimally.",
					slideImg: "",
					slideImgId: 0,
					slideUrl: "#"
				}
			];
			console.log('Setting default slides:', defaultSlides);
			setAttributes({ slides: defaultSlides });
		} else {
			console.log('Slides already exist, no need to set defaults');
			// Force a save to ensure slides are persisted by making a small change
			console.log('Forcing save of existing slides to ensure persistence');
			// Add a timestamp to force a change and trigger save
			const slidesWithTimestamp = slides.map(slide => ({
				...slide,
				_lastModified: Date.now()
			}));
			setAttributes({ slides: slidesWithTimestamp });
		}
	}, []); // Empty dependency array - only run once on mount

	// Convert slides to services format for editing
	const services = slides ? slides.map(slide => {
		const service = {
			profileImg: slide.slideImg || "",
			profileName: slide.slideTitle !== undefined ? slide.slideTitle : "Build",
			title: slide.slideDescription !== undefined ? slide.slideDescription : "We design and develop custom websites and applications that are tailored to your specific needs and goals.",
			linkLabel: "Read More",
			linkSrc: slide.slideUrl !== undefined ? slide.slideUrl : "#",
			storyImg: slide.slideImg || "",
			storyImgId: slide.slideImgId || 0
		};
		console.log('Building service from slide:', slide, 'Result:', service);
		return service;
	}) : [
		{
			profileImg: "",
			profileName: "Build",
			title: "We design and develop custom websites and applications that are tailored to your specific needs and goals.",
			linkLabel: "Read More",
			linkSrc: "#",
			storyImg: "",
			storyImgId: 0
		},
		{
			profileImg: "",
			profileName: "Maintain",
			title: "We provide ongoing maintenance and support to ensure your digital assets are always up to date.",
			linkLabel: "Discover",
			linkSrc: "#",
			storyImg: "",
			storyImgId: 0
		},
		{
			profileImg: "",
			profileName: "Support",
			title: "Our dedicated support team is always available to help you with any issues or questions you may have.",
			linkLabel: "Check It Out",
			linkSrc: "#",
			storyImg: "",
			storyImgId: 0
		},
		{
			profileImg: "",
			profileName: "Host",
			title: "We offer reliable and secure hosting solutions to ensure your website is always online and performing optimally.",
			linkLabel: "Learn More",
			linkSrc: "#",
			storyImg: "",
			storyImgId: 0
		}
	];

	// Function to split title into lines with max 4 words per line
	const splitTitleIntoLines = (title) => {
		const words = title.split(' ');
		const lines = [];
		let currentLine = [];

		words.forEach((word, index) => {
			currentLine.push(word);
			
			// Create a new line if we have 4 words or if this is the last word
			if (currentLine.length === 4 || index === words.length - 1) {
				lines.push(currentLine.join(' '));
				currentLine = [];
			}
		});

		return lines;
	};

	const updateService = (index, field, value) => {
		console.log('=== UPDATE SERVICE CALLED ===');
		console.log(`Updating service ${index}, field: ${field}, value:`, value);
		
		// Get current slides or use default
		const currentSlides = slides || [];
		const newSlides = [...currentSlides];
		
		// Ensure the slide exists
		if (!newSlides[index]) {
			newSlides[index] = {
				id: index + 1,
				slideTitle: "Build",
				slideDescription: "We design and develop custom websites and applications that are tailored to your specific needs and goals.",
				slideUrl: "#",
				slideTags: [],
				slideImg: "",
				slideImgId: 0
			};
		}
		
		// Update the specific field
		if (field === 'profileName') {
			newSlides[index].slideTitle = value;
		} else if (field === 'title') {
			newSlides[index].slideDescription = value;
		} else if (field === 'linkSrc') {
			newSlides[index].slideUrl = value;
		} else if (field === 'storyImg') {
			newSlides[index].slideImg = value;
		} else if (field === 'storyImgId') {
			newSlides[index].slideImgId = value;
		}
		
		console.log('New slides:', newSlides);
		console.log('Setting attributes with slides:', newSlides);
		setAttributes({ slides: newSlides });
	};

	const addService = () => {
		const newService = {
			profileImg: "",
			profileName: "New Service",
			title: "Add your service description here. This will be automatically split into lines with maximum 4 words per line to prevent overflow.",
			linkLabel: "Learn More",
			linkSrc: "#",
			storyImg: "",
			storyImgId: 0
		};
		
		const newSlides = [...slides, {
			id: slides.length + 1,
			slideTitle: newService.profileName,
			slideDescription: newService.title,
			slideUrl: newService.linkSrc,
			slideTags: [],
			slideImg: newService.storyImg,
			slideImgId: newService.storyImgId || 0
		}];
		
		setAttributes({ slides: newSlides });
	};

	const removeService = (index) => {
		if (services.length > 1) {
			const newSlides = slides.filter((_, i) => i !== index);
			setAttributes({ slides: newSlides });
		}
	};

	const moveServiceUp = (index) => {
		if (index > 0) {
			const newSlides = [...slides];
			const temp = newSlides[index];
			newSlides[index] = newSlides[index - 1];
			newSlides[index - 1] = temp;
			setAttributes({ slides: newSlides });
		}
	};

	const moveServiceDown = (index) => {
		if (index < slides.length - 1) {
			const newSlides = [...slides];
			const temp = newSlides[index];
			newSlides[index] = newSlides[index + 1];
			newSlides[index + 1] = temp;
			setAttributes({ slides: newSlides });
		}
	};

	return (
		<div {...useBlockProps()} style={{height: "95vh"}}>
			<InspectorControls>
				<PanelBody title={__('General Settings', 'gsap-hero-block')}>
					<TextControl
						label={__('Preview Text', 'gsap-hero-block')}
						value={previewText}
						onChange={(value) => setAttributes({ previewText: value })}
						help={__('The text that appears before service names (e.g., "We:")', 'gsap-hero-block')}
					/>
					<TextControl
						label={__('Link Text', 'gsap-hero-block')}
						value={linkText}
						onChange={(value) => setAttributes({ linkText: value })}
						help={__('The text that appears in the link button', 'gsap-hero-block')}
					/>
					<RangeControl
						label={__('Story Duration (ms)', 'gsap-hero-block')}
						value={storyDuration}
						onChange={(value) => setAttributes({ storyDuration: value })}
						min={3000}
						max={15000}
						step={500}
					/>
				</PanelBody>

				<PanelBody title={__('Height Settings', 'gsap-hero-block')} initialOpen={false}>
					<RangeControl
						label={__('Container Height (vh)', 'gsap-hero-block')}
						value={attributes.containerHeight || 70}
						onChange={(value) => setAttributes({ containerHeight: value })}
						min={30}
						max={100}
						step={5}
						help={__('Default height for all screen sizes', 'gsap-hero-block')}
					/>
					
					<RangeControl
						label={__('Large Desktop (1400px+)', 'gsap-hero-block')}
						value={attributes.containerHeightLargeDesktop || 80}
						onChange={(value) => setAttributes({ containerHeightLargeDesktop: value })}
						min={30}
						max={100}
						step={5}
					/>
					
					<RangeControl
						label={__('Desktop (1200px-1399px)', 'gsap-hero-block')}
						value={attributes.containerHeightDesktop || 70}
						onChange={(value) => setAttributes({ containerHeightDesktop: value })}
						min={30}
						max={100}
						step={5}
					/>
					
					<RangeControl
						label={__('Small Laptop (992px-1199px)', 'gsap-hero-block')}
						value={attributes.containerHeightSmallLaptop || 65}
						onChange={(value) => setAttributes({ containerHeightSmallLaptop: value })}
						min={30}
						max={100}
						step={5}
					/>
					
					<RangeControl
						label={__('Tablet Landscape (768px-991px)', 'gsap-hero-block')}
						value={attributes.containerHeightTabLand || 60}
						onChange={(value) => setAttributes({ containerHeightTabLand: value })}
						min={30}
						max={100}
						step={5}
					/>
					
					<RangeControl
						label={__('Tablet Portrait (576px-767px)', 'gsap-hero-block')}
						value={attributes.containerHeightTabPort || 55}
						onChange={(value) => setAttributes({ containerHeightTabPort: value })}
						min={30}
						max={100}
						step={5}
					/>
					
					<RangeControl
						label={__('Phone (up to 575px)', 'gsap-hero-block')}
						value={attributes.containerHeightPhone || 50}
						onChange={(value) => setAttributes({ containerHeightPhone: value })}
						min={30}
						max={100}
						step={5}
					/>
				</PanelBody>

				<PanelBody title="Block Settings" initialOpen={false}>
					<TextControl
						label={__('Block ID', 'gsap-hero-block')}
						value={blockId}
						onChange={(value) => setAttributes({ blockId: value })}
						help={__('Add a custom ID to this block for CSS targeting or anchor links.', 'gsap-hero-block')}
					/>
				</PanelBody>

				{services.map((service, index) => (
					<PanelBody 
						key={index}
						title={__('Service', 'gsap-hero-block') + ' ' + (index + 1)}
						initialOpen={index === 0}
					>
						<TextControl
							label={__('Service Name', 'gsap-hero-block')}
							value={service.profileName}
							onChange={(value) => updateService(index, 'profileName', value)}
						/>

						<TextareaControl
							label={__('Title/Description', 'gsap-hero-block')}
							value={service.title}
							onChange={(value) => updateService(index, 'title', value)}
							help={__('This will be automatically split into lines with max 4 words per line', 'gsap-hero-block')}
						/>

						<TextControl
							label={__('Link Label', 'gsap-hero-block')}
							value={service.linkLabel}
							onChange={(value) => updateService(index, 'linkLabel', value)}
						/>

						<TextControl
							label={__('Link URL', 'gsap-hero-block')}
							value={service.linkSrc}
							onChange={(value) => updateService(index, 'linkSrc', value)}
						/>

						<div className="media-upload-section">
							<p>{__('Story Image', 'gsap-hero-block')}</p>
							<MediaUploadCheck>
								<MediaUpload
									onSelect={(media) => {
										console.log('=== MEDIA UPLOAD SUCCESS ===');
										console.log('Media selected:', media);
										console.log('Media URL:', media.url);
										console.log('Media ID:', media.id);
										console.log('Updating service index:', index);
										updateService(index, 'storyImg', media.url);
										updateService(index, 'storyImgId', media.id);
									}}
									onError={(error) => {
										console.error('Media upload error:', error);
									}}
									allowedTypes={['image']}
									value={service.storyImgId}
									render={({ open }) => (
										<div className="media-upload-controls">
											{service.storyImg ? (
												<div className="media-preview">
													<img src={service.storyImg} alt="" style={{ maxWidth: '100px', height: 'auto' }} />
													<Button isDestructive onClick={() => {
														updateService(index, 'storyImg', '');
														updateService(index, 'storyImgId', 0);
													}}>
														{__('Remove', 'gsap-hero-block')}
													</Button>
												</div>
											) : (
												<Button isPrimary onClick={open}>
													{__('Select Image', 'gsap-hero-block')}
												</Button>
											)}
										</div>
									)}
								/>
							</MediaUploadCheck>
						</div>

						<div className="service-controls">
							{services.length > 1 && (
								<>
									<div className="reorder-controls">
										<ButtonGroup>
											<Button
												onClick={() => moveServiceUp(index)}
												disabled={index === 0}
												label={__('Move Up', 'gsap-hero-block')}
											>
												↑ {__('Up', 'gsap-hero-block')}
											</Button>
											<Button
												onClick={() => moveServiceDown(index)}
												disabled={index === services.length - 1}
												label={__('Move Down', 'gsap-hero-block')}
											>
												↓ {__('Down', 'gsap-hero-block')}
											</Button>
										</ButtonGroup>
									</div>
									<Button isDestructive onClick={() => removeService(index)}>
										{__('Remove Service', 'gsap-hero-block')}
									</Button>
								</>
							)}
						</div>
					</PanelBody>
				))}

				<PanelBody title={__('Add New Service', 'gsap-hero-block')}>
					<Button isPrimary onClick={addService}>
						{__('Add Service', 'gsap-hero-block')}
					</Button>
				</PanelBody>
			</InspectorControls>

			<div className="ad-services-blocks-story-editor">
				<div className="story-container">
					<div className="cursor">
						<p>Next</p>
					</div>

					<div className="ad-services-block-story-img">
						<div className="img">
							{services[0]?.storyImg ? (
								<img src={services[0].storyImg} alt="" />
							) : (
								<div className="placeholder-img">Story Image</div>
							)}
						</div>
					</div>

					<div className="ad-services-block-services-overview">
						<h1>{previewText || "We:"} </h1>
						{services.map((service, index) => (
							<p key={index} className={`overview__item ${index === 0 ? "active" : ""}`}>
								{service.profileName}
							</p>
						))}
					</div>

					<div className="ad-services-block-story-content">
						<div className="ad-services-block-row">
							<div className="ad-services-block-indices">
								{services.map((_, index) => (
									<div key={index} className="index">
										<div className="index-highlight"></div>
									</div>
								))}
							</div>
						</div>

						<div className="ad-services-block-row">
							<div className="title">
								{splitTitleIntoLines(services[0]?.title || '').map((line, lineIndex) => (
									<div key={lineIndex} className="title-row">
										<h1>{line}</h1>
									</div>
								))}
							</div>

							<div className="link">
								<a href={services[0]?.linkSrc || '#'} target="_blank" rel="noopener noreferrer">
									{linkText || 'Read More'}
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
}
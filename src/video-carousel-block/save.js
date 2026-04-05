import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
	const {
		blockId,
		items,
		cardHeight,
		cardGap,
		slidesPerView,
		loop,
		mobilePeekPercent,
		listPaddingLeft,
		containerMode,
		containerMaxWidth,
		marginTop,
		marginBottom,
		dragCursorText,
		dragCursorSize,
		dragCursorFontSize,
		dragCursorFontWeight,
		dragCursorColor,
		dragCursorBgColor,
		dragCursorTextTransform,
		metaTextAlign,
		responsiveMetaTextAlign,
		nameFontSize,
		responsiveNameFontSize,
		positionFontSize,
		responsivePositionFontSize,
		nameColor,
		positionColor,
		metaBgColor,
		socialIconSize,
		responsiveSocialIconSize,
		socialIconColor,
		socialIconHoverColor,
	} = attributes;

	const normalizeDimension = (dimension, defaults) => {
		// Legacy: number => px
		if (typeof dimension === 'number') {
			return { value: dimension, unit: 'px' };
		}
		if (typeof dimension === 'object' && dimension !== null) {
			return {
				value: dimension?.value ?? defaults.value,
				unit: dimension?.unit ?? defaults.unit,
			};
		}
		return defaults;
	};

	const normalizedCardHeight = normalizeDimension(cardHeight, { value: 460, unit: 'px' });

	const blockProps = useBlockProps.save({
		className: 'adaire-video-carousel splide adaire-video-carousel--splide',
		'data-block-id': blockId,
		'data-drag-cursor-text': dragCursorText,
		'data-slides-per-view-big-desktop': slidesPerView?.bigDesktop ?? slidesPerView?.desktop ?? 5,
		'data-slides-per-view-desktop': slidesPerView?.desktop ?? 4,
		'data-slides-per-view-small-laptop': slidesPerView?.smallLaptop ?? slidesPerView?.desktop ?? 4,
		'data-slides-per-view-tablet': slidesPerView?.tablet ?? 3,
		'data-slides-per-view-mobile': slidesPerView?.mobile ?? 2,
		'data-card-gap': cardGap,
		'data-loop': loop ? 'true' : 'false',
		'data-mobile-peek': mobilePeekPercent ?? 20,
		style: {
			'--adaire-video-carousel-card-height': `${normalizedCardHeight.value}${normalizedCardHeight.unit}`,
			'--adaire-video-carousel-gap': `${cardGap}px`,
			'--adaire-video-carousel-slides-per-view-desktop': `${slidesPerView?.desktop ?? 4}`,
			'--adaire-video-carousel-slides-per-view-tablet': `${slidesPerView?.tablet ?? 3}`,
			'--adaire-video-carousel-slides-per-view-mobile': `${slidesPerView?.mobile ?? 2}`,
			'--container-max-width': `${containerMaxWidth?.desktop?.value ?? 1200}${containerMaxWidth?.desktop?.unit ?? 'px'}`,
			'--container-max-width-mobile': `${containerMaxWidth?.mobile?.value ?? 100}${containerMaxWidth?.mobile?.unit ?? '%'}`,
			'--container-max-width-tablet': `${containerMaxWidth?.tablet?.value ?? 100}${containerMaxWidth?.tablet?.unit ?? '%'}`,
			'--container-max-width-small-laptop': `${containerMaxWidth?.smallLaptop?.value ?? 1200}${containerMaxWidth?.smallLaptop?.unit ?? 'px'}`,
			'--container-max-width-big-desktop': `${containerMaxWidth?.bigDesktop?.value ?? 1200}${containerMaxWidth?.bigDesktop?.unit ?? 'px'}`,
			'--list-padding-left-mobile': `${listPaddingLeft?.mobile ?? 10}px`,
			'--list-padding-left-tablet': `${listPaddingLeft?.tablet ?? listPaddingLeft?.mobile ?? 10}px`,
			'--list-padding-left-small-laptop': `${listPaddingLeft?.smallLaptop ?? listPaddingLeft?.desktop ?? 10}px`,
			'--list-padding-left-desktop': `${listPaddingLeft?.desktop ?? 10}px`,
			'--list-padding-left-big-desktop': `${listPaddingLeft?.bigDesktop ?? listPaddingLeft?.desktop ?? 10}px`,
			marginTop: `${marginTop}px`,
			marginBottom: `${marginBottom}px`,
			'--adaire-video-carousel-drag-cursor-size': `${dragCursorSize}px`,
			'--adaire-video-carousel-drag-cursor-font-size': `${dragCursorFontSize}px`,
			'--adaire-video-carousel-drag-cursor-font-weight': dragCursorFontWeight,
			'--adaire-video-carousel-drag-cursor-color': dragCursorColor,
			'--adaire-video-carousel-drag-cursor-bg': dragCursorBgColor,
			'--adaire-video-carousel-drag-cursor-text-transform': dragCursorTextTransform,
			'--adaire-video-carousel-meta-align-mobile':
				responsiveMetaTextAlign?.mobile || metaTextAlign || 'left',
			'--adaire-video-carousel-meta-align-tablet':
				responsiveMetaTextAlign?.tablet || responsiveMetaTextAlign?.mobile || metaTextAlign || 'left',
			'--adaire-video-carousel-meta-align-small-laptop':
				responsiveMetaTextAlign?.smallLaptop ||
				responsiveMetaTextAlign?.desktop ||
				metaTextAlign ||
				'left',
			'--adaire-video-carousel-meta-align-desktop':
				responsiveMetaTextAlign?.desktop || metaTextAlign || 'left',
			'--adaire-video-carousel-meta-align-big-desktop':
				responsiveMetaTextAlign?.bigDesktop ||
				responsiveMetaTextAlign?.desktop ||
				metaTextAlign ||
				'left',
			'--adaire-video-carousel-name-font-size-mobile': `${
				responsiveNameFontSize?.mobile ?? nameFontSize ?? 16
			}px`,
			'--adaire-video-carousel-name-font-size-tablet': `${
				responsiveNameFontSize?.tablet ??
				responsiveNameFontSize?.mobile ??
				nameFontSize ??
				16
			}px`,
			'--adaire-video-carousel-name-font-size-small-laptop': `${
				responsiveNameFontSize?.smallLaptop ??
				responsiveNameFontSize?.desktop ??
				nameFontSize ??
				16
			}px`,
			'--adaire-video-carousel-name-font-size-desktop': `${
				responsiveNameFontSize?.desktop ?? nameFontSize ?? 20
			}px`,
			'--adaire-video-carousel-name-font-size-big-desktop': `${
				responsiveNameFontSize?.bigDesktop ??
				responsiveNameFontSize?.desktop ??
				nameFontSize ??
				20
			}px`,
			'--adaire-video-carousel-position-font-size-mobile': `${
				responsivePositionFontSize?.mobile ?? positionFontSize ?? 14
			}px`,
			'--adaire-video-carousel-position-font-size-tablet': `${
				responsivePositionFontSize?.tablet ??
				responsivePositionFontSize?.mobile ??
				positionFontSize ??
				14
			}px`,
			'--adaire-video-carousel-position-font-size-small-laptop': `${
				responsivePositionFontSize?.smallLaptop ??
				responsivePositionFontSize?.desktop ??
				positionFontSize ??
				14
			}px`,
			'--adaire-video-carousel-position-font-size-desktop': `${
				responsivePositionFontSize?.desktop ?? positionFontSize ?? 16
			}px`,
			'--adaire-video-carousel-position-font-size-big-desktop': `${
				responsivePositionFontSize?.bigDesktop ??
				responsivePositionFontSize?.desktop ??
				positionFontSize ??
				16
			}px`,
			'--adaire-video-carousel-name-color': nameColor || '#ffffff',
			'--adaire-video-carousel-position-color': positionColor || '#d1d5db',
			'--adaire-video-carousel-meta-bg':
				metaBgColor || 'rgba(15, 23, 42, 0.9)',
			'--adaire-video-carousel-social-icon-size-mobile': `${
				responsiveSocialIconSize?.mobile ?? socialIconSize ?? 18
			}px`,
			'--adaire-video-carousel-social-icon-size-tablet': `${
				responsiveSocialIconSize?.tablet ??
				responsiveSocialIconSize?.mobile ??
				socialIconSize ??
				18
			}px`,
			'--adaire-video-carousel-social-icon-size-small-laptop': `${
				responsiveSocialIconSize?.smallLaptop ??
				responsiveSocialIconSize?.desktop ??
				socialIconSize ??
				18
			}px`,
			'--adaire-video-carousel-social-icon-size-desktop': `${
				responsiveSocialIconSize?.desktop ?? socialIconSize ?? 20
			}px`,
			'--adaire-video-carousel-social-icon-size-big-desktop': `${
				responsiveSocialIconSize?.bigDesktop ??
				responsiveSocialIconSize?.desktop ??
				socialIconSize ??
				20
			}px`,
			'--adaire-video-carousel-social-icon-color': socialIconColor || '#ffffff',
			'--adaire-video-carousel-social-icon-hover-color': socialIconHoverColor || '#e5e7eb',
		},
	});

	return (
		<div {...blockProps}>
			<div
				className={`adaire-video-carousel__container ${
					containerMode === 'constrained' ? 'is-constrained' : ''
				}`}
			>
				<div className="adaire-video-carousel__wrapper">
					<div className="adaire-video-carousel__swiper swiper">
						<div className="adaire-video-carousel__list swiper-wrapper">
						{items.map((item, index) => (
							<div
								key={`${item.id}-${index}`}
								className="adaire-video-carousel__slide swiper-slide"
								data-video-id={item.id}
							>
								<div className="adaire-video-carousel__card">
									<div className="adaire-video-carousel__video">
										{item.useImageOnly && item.imageUrl ? (
											<img
												src={item.imageUrl}
												alt={item.title || ''}
											/>
										) : item.videoUrl ? (
											<>
												<video
													src={item.videoUrl}
													poster={item.posterUrl || undefined}
													controls
												/>
												<button
													className="adaire-video-carousel__video-overlay-play"
													type="button"
													aria-label="Play video"
												>
													<span className="adaire-video-carousel__video-overlay-play-icon" />
												</button>
											</>
										) : (
											<div className="adaire-video-carousel__placeholder">
												<span>Video URL not set</span>
											</div>
										)}
									</div>
									{(item.title || item.position || item.social1Url || item.social2Url || item.social3Url) && (
										<div className="adaire-video-carousel__meta">
											<div className="adaire-video-carousel__meta-text">
												{item.title && (
													<p className="adaire-video-carousel__title">
														{item.title}
													</p>
												)}
												{item.position && (
													<p className="adaire-video-carousel__position">
														{item.position}
													</p>
												)}
											</div>
											<div className="adaire-video-carousel__meta-icons">
												{item.social1Url && item.social1IconClass && (
													<a
														href={item.social1Url}
														target="_blank"
														rel="noopener noreferrer"
													>
														<i className={item.social1IconClass} />
													</a>
												)}
												{item.social2Url && item.social2IconClass && (
													<a
														href={item.social2Url}
														target="_blank"
														rel="noopener noreferrer"
													>
														<i className={item.social2IconClass} />
													</a>
												)}
												{item.social3Url && item.social3IconClass && (
													<a
														href={item.social3Url}
														target="_blank"
														rel="noopener noreferrer"
													>
														<i className={item.social3IconClass} />
													</a>
												)}
											</div>
										</div>
									)}
								</div>
							</div>
						))}
						</div>
						<div className="swiper-pagination adaire-video-carousel__pagination" />
					</div>
				</div>
			</div>

			<div className="adaire-video-carousel__drag-cursor">
				{dragCursorText}
			</div>
		</div>
	);
}



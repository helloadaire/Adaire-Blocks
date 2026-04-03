import { useBlockProps } from "@wordpress/block-editor";

export default function save({ attributes }) {
	const {
		blockId,
		containerMode,
		containerMaxWidth,
		marginTop,
		marginRight,
		marginBottom,
		marginLeft,
		paddingTop,
		paddingRight,
		paddingBottom,
		paddingLeft,
		containerHeight,
		containerBorderRadius,
		videoType,
		ytVideoId,
		vimeoVideoId,
		autoplay,
		mute,
		controls,
		loop,
	} = attributes;

	const blockProps = useBlockProps.save({
		className: "ad-video-player",
		style: {
			// Container max width CSS variables
			"--container-max-width": `${containerMaxWidth?.desktop?.value ?? 1200}${
				containerMaxWidth?.desktop?.unit ?? "px"
			}`,

			"--container-max-width-tablet": `${
				containerMaxWidth?.tablet?.value ?? 100
			}${containerMaxWidth?.tablet?.unit ?? "%"}`,
			"--container-max-width-mobile": `${
				containerMaxWidth?.mobile?.value ?? 100
			}${containerMaxWidth?.mobile?.unit ?? "%"}`,
			"--container-height": `${containerHeight?.value ?? 315}${
				containerHeight?.unit ?? "px"
			}`,
			"--container-border-radius": `${containerBorderRadius}px`,
			// Desktop margins
			marginTop: `${marginTop?.desktop ?? 0}px`,
			marginRight: `${marginRight?.desktop ?? 0}px`,
			marginBottom: `${marginBottom?.desktop ?? 0}px`,
			marginLeft: `${marginLeft?.desktop ?? 0}px`,

			// Responsive margin CSS variables
			"--margin-top-tablet": `${marginTop?.tablet ?? 0}px`,
			"--margin-right-tablet": `${marginRight?.tablet ?? 0}px`,
			"--margin-bottom-tablet": `${marginBottom?.tablet ?? 0}px`,
			"--margin-left-tablet": `${marginLeft?.tablet ?? 0}px`,

			"--margin-top-mobile": `${marginTop?.mobile ?? 0}px`,
			"--margin-right-mobile": `${marginRight?.mobile ?? 0}px`,
			"--margin-bottom-mobile": `${marginBottom?.mobile ?? 0}px`,
			"--margin-left-mobile": `${marginLeft?.mobile ?? 0}px`,

			// Desktop padding
			paddingTop: `${paddingTop?.desktop ?? 0}px`,
			paddingRight: `${paddingRight?.desktop ?? 0}px`,
			paddingBottom: `${paddingBottom?.desktop ?? 0}px`,
			paddingLeft: `${paddingLeft?.desktop ?? 0}px`,

			// Responsive padding CSS variables
			"--padding-top-tablet": `${paddingTop?.tablet ?? 0}px`,
			"--padding-right-tablet": `${paddingRight?.tablet ?? 0}px`,
			"--padding-bottom-tablet": `${paddingBottom?.tablet ?? 0}px`,
			"--padding-left-tablet": `${paddingLeft?.tablet ?? 0}px`,

			"--padding-top-mobile": `${paddingTop?.mobile ?? 0}px`,
			"--padding-right-mobile": `${paddingRight?.mobile ?? 0}px`,
			"--padding-bottom-mobile": `${paddingBottom?.mobile ?? 0}px`,
			"--padding-left-mobile": `${paddingLeft?.mobile ?? 0}px`,
		},
	});

	return (
		<div {...blockProps} data-block-id={blockId}>
			<div
				className={`ad-video-player__container ${
					containerMode === "constrained" ? "is-constrained" : ""
				}`}
			>
				{/* Your block content goes here */}
                <div className="ad-video-player__content">
						{videoType === "youtube" ? (
							<iframe
								width="100%"
								height="100%"
								src={`https://youtube.com/embed/${ytVideoId}?mute=${
									!!mute ? "1" : "0"
								}&controls=${!!controls ? "1" : "0"}&loop=${
									!!loop ? "1" : "0"
								}${loop ? `&playlist=${ytVideoId}` : ""}&autoplay=${
									!!autoplay ? "1" : "0"
								}`}
								title="YouTube video player"
								allow="autoplay; fullscreen;"
								frameborder="0"
								allowfullscreen
							></iframe>
						) : (
							<iframe
								src={`https://player.vimeo.com/video/${vimeoVideoId}?autoplay=${
									!!autoplay ? "1" : "0"
								}&muted=${!!mute ? "1" : "0"}&loop=${
									!!loop ? "1" : "0"
								}&controls=${!!controls ? "1" : "0"}&background=${
									!!autoplay && !!mute && !controls ? "1" : "0"
								}`}
								width="100%"
								height="100%"
								frameborder="0"
								allow="autoplay; fullscreen; picture-in-picture"
								allowfullscreen
							></iframe>
						)}
					</div>
			</div>
		</div>
	);
}

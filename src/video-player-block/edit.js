import { __ } from "@wordpress/i18n";
import { useState } from "@wordpress/element";
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import {
	PanelBody,
	Button,
	ButtonGroup,
	TextControl,
	RangeControl,
	SelectControl,
	ToggleControl,
	__experimentalBoxControl as BoxControl,
} from "@wordpress/components";
import { desktop, tablet, mobile } from "@wordpress/icons";
import "./editor.scss"; // IMPORTANT: Editor styles for proper spacing preview

export default function Edit({ attributes, setAttributes, clientId }) {
	const [deviceType, setDeviceType] = useState("desktop");

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
		vimeoVideoUrl,
		ytVideoUrl,
		autoplay,
		mute,
		controls,
		loop,
	} = attributes;

	// Set unique block ID
	if (!blockId) {
		setAttributes({ blockId: clientId });
	}

	const blockProps = useBlockProps({
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
			// Desktop margins (inline styles for editor)
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

			// Desktop padding (inline styles for editor)
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
		<>
			<InspectorControls>
				{/* Container Settings Panel */}
				<PanelBody
					title={__("Container Settings", "video-player-block")}
					initialOpen={true}
				>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Container Border Radius", "video-player-block")}
					</p>
					<RangeControl
						label={__("Border Radius (px)", "video-player-block")}
						value={containerBorderRadius}
						onChange={(val) => {
							setAttributes({
								containerBorderRadius: Number(val),
							});
						}}
						min={0}
						max={100}
					/>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Container Height", "video-player-block")}
					</p>
					<TextControl
						type="number"
						value={containerHeight?.value}
						onChange={(v) =>
							setAttributes({
								containerHeight: {
									...(containerHeight || {}),
									value: Number(v),
								},
							})
						}
					/>
					<ButtonGroup>
						{["px", "rem", "vw"].map((u) => (
							<Button
								key={u}
								isPrimary={containerHeight?.unit === u}
								onClick={() =>
									setAttributes({
										containerHeight: {
											...(containerHeight || {}),
											unit: u,
										},
									})
								}
							>
								{u}
							</Button>
						))}
					</ButtonGroup>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Container Mode", "video-player-block")}
					</p>
					<ButtonGroup>
						{[
							{ label: __("Full Width", "video-player-block"), value: "full" },
							{
								label: __("Constrained", "video-player-block"),
								value: "constrained",
							},
						].map((opt) => (
							<Button
								key={opt.value}
								isPrimary={containerMode === opt.value}
								isSecondary={containerMode !== opt.value}
								onClick={() => setAttributes({ containerMode: opt.value })}
							>
								{opt.label}
							</Button>
						))}
					</ButtonGroup>

					{containerMode === "constrained" && (
						<>
							<p
								style={{
									marginTop: "16px",
									marginBottom: "8px",
									fontWeight: 600,
								}}
							>
								{__("Max Width", "video-player-block")}
							</p>
							<ButtonGroup style={{ marginBottom: "12px" }}>
								<Button
									icon={desktop}
									isPrimary={deviceType === "desktop"}
									onClick={() => setDeviceType("desktop")}
									label={__("Desktop", "video-player-block")}
								/>
								<Button
									icon={tablet}
									isPrimary={deviceType === "tablet"}
									onClick={() => setDeviceType("tablet")}
									label={__("Tablet", "video-player-block")}
								/>
								<Button
									icon={mobile}
									isPrimary={deviceType === "mobile"}
									onClick={() => setDeviceType("mobile")}
									label={__("Mobile", "video-player-block")}
								/>
							</ButtonGroup>
							<div style={{ display: "flex", gap: "8px" }}>
								<TextControl
									type="number"
									value={
										containerMaxWidth?.[deviceType]?.value ??
										(deviceType === "desktop" ? 1200 : 100)
									}
									onChange={(v) =>
										setAttributes({
											containerMaxWidth: {
												...(containerMaxWidth || {}),
												[deviceType]: {
													...(containerMaxWidth?.[deviceType] || {}),
													value: Number(v),
												},
											},
										})
									}
								/>
								<ButtonGroup>
									{["px", "%", "rem", "vw"].map((u) => (
										<Button
											key={u}
											isPrimary={
												(containerMaxWidth?.[deviceType]?.unit ??
													(deviceType === "desktop" ? "px" : "%")) === u
											}
											isSecondary={
												(containerMaxWidth?.[deviceType]?.unit ??
													(deviceType === "desktop" ? "px" : "%")) !== u
											}
											onClick={() =>
												setAttributes({
													containerMaxWidth: {
														...(containerMaxWidth || {}),
														[deviceType]: {
															...(containerMaxWidth?.[deviceType] || {}),
															unit: u,
														},
													},
												})
											}
										>
											{u}
										</Button>
									))}
								</ButtonGroup>
							</div>
						</>
					)}
				</PanelBody>

				<PanelBody
					title={__("Video Settings", "video-player-block")}
					initialOpen={false}
				>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Video Type", "video-player-block")}
					</p>
					<SelectControl
						label={__("Video Type", "video-player-block")}
						value={videoType}
						options={[
							{ label: "YouTube", value: "youtube" },
							{ label: "Vimeo", value: "vimeo" },
						]}
						onChange={(value) => setAttributes({ videoType: value })}
					/>

					{videoType === "youtube" ? (
						<>
							<p style={{ marginBottom: "8px", fontWeight: 600 }}>
								{__("Youtube Video URL (or ID)", "video-player-block")}
							</p>
							<TextControl
								type="text"
								value={ytVideoUrl}
								onChange={(v) => {
									console.log(typeof v);
									let videoID = v;
									if (v && v.includes("youtu.be/")) {
										videoID = v.split("youtu.be/")[1].slice(0, 11);
									} else if (v && v.includes("watch")) {
										videoID = v.split("v=")[1].slice(0, 11);
									} else if (v && v.includes("embed")) {
										videoID = v.split("embed/")[1].slice(0, 11);
									}
									console.log(videoID);
									setAttributes({
										ytVideoId: videoID,
										ytVideoUrl: v,
									});
								}}
							/>
						</>
					) : (
						<>
							<p style={{ marginBottom: "8px", fontWeight: 600 }}>
								{__("Vimeo Video URL (or ID)", "video-player-block")}
							</p>
							<TextControl
								type="text"
								value={vimeoVideoUrl}
								onChange={(v) => {
									console.log(typeof v);
									let videoID = v;

									if (v) {
										if (v.includes("vimeo.com/album/")) {
											// Album format: vimeo.com/album/1234567/video/76979871
											const match = v.match(/\/video\/(\d+)/);
											videoID = match ? match[1] : "";
										} else if (v.includes("vimeo.com/groups/")) {
											// Group format: vimeo.com/groups/shortfilms/videos/76979871
											const match = v.match(/videos\/(\d+)/);
											videoID = match ? match[1] : "";
										} else if (v.includes("vimeo.com/channels/")) {
											// Channel format: vimeo.com/channels/staffpicks/76979871
											const parts = v.split("/");
											videoID = parts[parts.length - 1];
										} else if (v.includes("player.vimeo.com/video/")) {
											// Embed format: player.vimeo.com/video/76979871
											videoID = v
												.split("player.vimeo.com/video/")[1]
												.split("?")[0];
										} else {
											// Standard or short link: vimeo.com/76979871
											const parts = v.split("/");
											videoID = parts[parts.length - 1].split("#")[0]; // Remove optional #t= timestamp
										}
									}

									console.log(videoID);
									setAttributes({
										vimeoVideoId: videoID,
										vimeoVideoUrl: v,
									});
								}}
							/>
						</>
					)}

					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Autoplay", "video-player-block")}
					</p>

					<ToggleControl
						label={__("Autoplay", "video-player-block")}
						help={autoplay ? "Autoplay is enabled" : "Autoplay is disabled"}
						checked={autoplay}
						onChange={(value) => {
							setAttributes({ autoplay: value });
						}}
					/>

					<ToggleControl
						label={__("Mute", "video-player-block")}
						help={mute ? "Video will be muted" : "Video will not be muted"}
						checked={mute}
						onChange={(value) => {
							setAttributes({ mute: value });
						}}
					/>

					<ToggleControl
						label={__("Controls", "video-player-block")}
						help={controls ? "Player controls will be shown" : "Player controls will be hidden"}
						checked={controls}
						onChange={(value) => {
							setAttributes({ controls: value });
						}}
					/>

					<ToggleControl
						label={__("Loop", "video-player-block")}
						help={loop ? "Video will loop" : "Video will play once"}
						checked={loop}
						onChange={(value) => {
							setAttributes({ loop: value });
						}}
					/>
				</PanelBody>

				{/* Margins Panel */}
				<PanelBody
					title={__("Margins", "video-player-block")}
					initialOpen={false}
				>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Device", "video-player-block")}
					</p>
					<ButtonGroup style={{ marginBottom: "12px" }}>
						<Button
							icon={desktop}
							isPrimary={deviceType === "desktop"}
							onClick={() => setDeviceType("desktop")}
							label={__("Desktop", "video-player-block")}
						/>
						<Button
							icon={tablet}
							isPrimary={deviceType === "tablet"}
							onClick={() => setDeviceType("tablet")}
							label={__("Tablet", "video-player-block")}
						/>
						<Button
							icon={mobile}
							isPrimary={deviceType === "mobile"}
							onClick={() => setDeviceType("mobile")}
							label={__("Mobile", "video-player-block")}
						/>
					</ButtonGroup>
					<BoxControl
						label={__("Margin", "video-player-block")}
						values={{
							top: `${marginTop?.[deviceType] ?? 0}px`,
							right: `${marginRight?.[deviceType] ?? 0}px`,
							bottom: `${marginBottom?.[deviceType] ?? 0}px`,
							left: `${marginLeft?.[deviceType] ?? 0}px`,
						}}
						onChange={(value) => {
							setAttributes({
								marginTop: {
									...(marginTop || {}),
									[deviceType]: parseInt(value.top) || 0,
								},
								marginRight: {
									...(marginRight || {}),
									[deviceType]: parseInt(value.right) || 0,
								},
								marginBottom: {
									...(marginBottom || {}),
									[deviceType]: parseInt(value.bottom) || 0,
								},
								marginLeft: {
									...(marginLeft || {}),
									[deviceType]: parseInt(value.left) || 0,
								},
							});
						}}
					/>
				</PanelBody>

				{/* Padding Panel */}
				<PanelBody
					title={__("Padding", "video-player-block")}
					initialOpen={false}
				>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Device", "video-player-block")}
					</p>
					<ButtonGroup style={{ marginBottom: "12px" }}>
						<Button
							icon={desktop}
							isPrimary={deviceType === "desktop"}
							onClick={() => setDeviceType("desktop")}
							label={__("Desktop", "video-player-block")}
						/>
						<Button
							icon={tablet}
							isPrimary={deviceType === "tablet"}
							onClick={() => setDeviceType("tablet")}
							label={__("Tablet", "video-player-block")}
						/>
						<Button
							icon={mobile}
							isPrimary={deviceType === "mobile"}
							onClick={() => setDeviceType("mobile")}
							label={__("Mobile", "video-player-block")}
						/>
					</ButtonGroup>
					<BoxControl
						label={__("Padding", "video-player-block")}
						values={{
							top: `${paddingTop?.[deviceType] ?? 0}px`,
							right: `${paddingRight?.[deviceType] ?? 0}px`,
							bottom: `${paddingBottom?.[deviceType] ?? 0}px`,
							left: `${paddingLeft?.[deviceType] ?? 0}px`,
						}}
						onChange={(value) => {
							setAttributes({
								paddingTop: {
									...(paddingTop || {}),
									[deviceType]: parseInt(value.top) || 0,
								},
								paddingRight: {
									...(paddingRight || {}),
									[deviceType]: parseInt(value.right) || 0,
								},
								paddingBottom: {
									...(paddingBottom || {}),
									[deviceType]: parseInt(value.bottom) || 0,
								},
								paddingLeft: {
									...(paddingLeft || {}),
									[deviceType]: parseInt(value.left) || 0,
								},
							});
						}}
					/>
				</PanelBody>
			</InspectorControls>

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
		</>
	);
}

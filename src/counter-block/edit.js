import { __ } from "@wordpress/i18n";
import { useState, useEffect } from "@wordpress/element";
import { useBlockProps, InspectorControls, ColorPalette } from "@wordpress/block-editor";
import {
	PanelBody,
	Button,
	ButtonGroup,
	TextControl,
	ToggleControl,
	RangeControl,
	__experimentalBoxControl as BoxControl,
} from "@wordpress/components";
import { desktop, tablet, mobile } from "@wordpress/icons";
import "./editor.scss"; // IMPORTANT: Editor styles for proper spacing preview

export default function Edit({ attributes, setAttributes, clientId }) {
	const [deviceType, setDeviceType] = useState("desktop");
	const [displayValue, setDisplayValue] = useState(attributes.startingNumber || 100);

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
		startingNumber,
		endingNumber,
		duration,
		delayBool,
		delayTime,
		fontSize,
		fontWeight,
		color,
		letterSpacing,
		prefix,
		suffix,
		counterDirection,
		caption,
		captionPosition,
		captionFontSize,
		captionColor,
	} = attributes;

	// Set unique block ID on mount and when duplicated
	useEffect(() => {
		// If blockId doesn't exist OR doesn't match current clientId (duplicated block)
		if (!blockId || blockId !== clientId) {
			setAttributes({ blockId: clientId });
		}
	}, [clientId, blockId, setAttributes]);

	// Animate counter in editor preview
	useEffect(() => {
		// Reset to starting number when attributes change
		setDisplayValue(startingNumber);
		
		// Calculate animation parameters
		const diff = Math.abs(endingNumber - startingNumber);
		const interval = duration / diff;
		
		// Small delay before starting animation
		const startDelay = setTimeout(() => {
			let currentNum = startingNumber;
			
			const counterInterval = setInterval(() => {
				// Count up or down based on direction
				if (counterDirection === 'down') {
					currentNum--;
					if (currentNum <= endingNumber) {
						currentNum = endingNumber;
						setDisplayValue(currentNum);
						clearInterval(counterInterval);
					} else {
						setDisplayValue(currentNum);
					}
				} else {
					currentNum++;
					if (currentNum >= endingNumber) {
						currentNum = endingNumber;
						setDisplayValue(currentNum);
						clearInterval(counterInterval);
					} else {
						setDisplayValue(currentNum);
					}
				}
			}, interval);
			
			// Cleanup interval on unmount
			return () => clearInterval(counterInterval);
		}, 500); // Wait 500ms before starting
		
		return () => clearTimeout(startDelay);
	}, [startingNumber, endingNumber, duration, counterDirection]);

	const blockProps = useBlockProps({
		className: "ab-counter-block",
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
		}
	});

	return (
		<>
			<InspectorControls>
				{/* Container Settings Panel */}
				<PanelBody
					title={__("Container Settings", "ab-counter-block")}
					initialOpen={true}
				>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Container Mode", "ab-counter-block")}
					</p>
					<ButtonGroup>
						{[
							{ label: __("Full Width", "ab-counter-block"), value: "full" },
							{
								label: __("Constrained", "ab-counter-block"),
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
								{__("Max Width", "ab-counter-block")}
							</p>
							<ButtonGroup style={{ marginBottom: "12px" }}>
								<Button
									icon={desktop}
									isPrimary={deviceType === "desktop"}
									onClick={() => setDeviceType("desktop")}
									label={__("Desktop", "ab-counter-block")}
								/>
								<Button
									icon={tablet}
									isPrimary={deviceType === "tablet"}
									onClick={() => setDeviceType("tablet")}
									label={__("Tablet", "ab-counter-block")}
								/>
								<Button
									icon={mobile}
									isPrimary={deviceType === "mobile"}
									onClick={() => setDeviceType("mobile")}
									label={__("Mobile", "ab-counter-block")}
								/>
							</ButtonGroup>
							<div style={{ display: "flex", gap: "8px" }}>
								<TextControl
									type="number"
									value={
										containerMaxWidth?.[deviceType]?.value ??
										(deviceType === "desktop" ? 1200 : 100)
									}
									onChange={(v) => {
										console.log("rtgrthgrthrth");
										setAttributes({
											containerMaxWidth: {
												...(containerMaxWidth || {}),
												[deviceType]: {
													...(containerMaxWidth?.[deviceType] || {}),
													value: Number(v),
												},
											},
										});
									}}
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

				{/**Number settings panel */}
				<PanelBody
					title={__("Number Settings", "ab-counter-block")}
					initialOpen={true}
				>
					<TextControl
						type="number"
						label="Starting Number"
						value={startingNumber}
						onChange={(val) => {
							if (!isNaN(val) && val !== "") {
								setAttributes({
									startingNumber: val,
								});
							}
						}}
					/>
					<TextControl
						type="number"
						label="Ending Number"
						value={endingNumber}
						onChange={(val) => {
							if (!isNaN(val) && val !== "") {
								setAttributes({
									endingNumber: val,
								});
							}
						}}
					/>
					<TextControl
						type="number" 
						label="Duration (ms)"
						value={duration}
						onChange={(val) => {
							if (!isNaN(val) && val !== "") {
								setAttributes({
									duration: val,
								});
							}
						}}
					/>

					<ToggleControl
						label={__("Toggle Delay", "container-block")}
						help={delayBool ? "Delay is enabled" : "Delay is disabled"}
						checked={delayBool}
						onChange={(value) => {
							setAttributes({ delayBool: value });
						}}
					/>

					{delayBool && (
						<TextControl
							type="number"
							label="Delay (ms)"
							value={delayTime}
							onChange={(val) => {
								if (!isNaN(val) && val !== "") {
									setAttributes({
										delayTime: val,
									});
								}
							}}
						/>
					)}
				</PanelBody>

				{/* Margins Panel */}
				<PanelBody
					title={__("Margins", "ab-counter-block")}
					initialOpen={false}
				>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Device", "ab-counter-block")}
					</p>
					<ButtonGroup style={{ marginBottom: "12px" }}>
						<Button
							icon={desktop}
							isPrimary={deviceType === "desktop"}
							onClick={() => setDeviceType("desktop")}
							label={__("Desktop", "ab-counter-block")}
						/>
						<Button
							icon={tablet}
							isPrimary={deviceType === "tablet"}
							onClick={() => setDeviceType("tablet")}
							label={__("Tablet", "ab-counter-block")}
						/>
						<Button
							icon={mobile}
							isPrimary={deviceType === "mobile"}
							onClick={() => setDeviceType("mobile")}
							label={__("Mobile", "ab-counter-block")}
						/>
					</ButtonGroup>
					<BoxControl
						label={__("Margin", "ab-counter-block")}
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
					title={__("Padding", "ab-counter-block")}
					initialOpen={false}
				>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Device", "ab-counter-block")}
					</p>
					<ButtonGroup style={{ marginBottom: "12px" }}>
						<Button
							icon={desktop}
							isPrimary={deviceType === "desktop"}
							onClick={() => setDeviceType("desktop")}
							label={__("Desktop", "ab-counter-block")}
						/>
						<Button
							icon={tablet}
							isPrimary={deviceType === "tablet"}
							onClick={() => setDeviceType("tablet")}
							label={__("Tablet", "ab-counter-block")}
						/>
						<Button
							icon={mobile}
							isPrimary={deviceType === "mobile"}
							onClick={() => setDeviceType("mobile")}
							label={__("Mobile", "ab-counter-block")}
						/>
					</ButtonGroup>
					<BoxControl
						label={__("Padding", "ab-counter-block")}
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

				{/* Counter Content Panel */}
				<PanelBody title={__("Counter Content", "counter-block")} initialOpen={false}>
					<TextControl
						label={__("Prefix", "counter-block")}
						value={prefix}
						onChange={(val) => setAttributes({ prefix: val })}
						help={__("Text before the number (e.g., $, +, #)", "counter-block")}
					/>
					<TextControl
						label={__("Suffix", "counter-block")}
						value={suffix}
						onChange={(val) => setAttributes({ suffix: val })}
						help={__("Text after the number (e.g., %, K, M)", "counter-block")}
					/>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Counter Direction", "counter-block")}
					</p>
					<ButtonGroup>
						{[
							{ label: __("Count Up", "counter-block"), value: "up" },
							{ label: __("Count Down", "counter-block"), value: "down" },
						].map((opt) => (
							<Button
								key={opt.value}
								isPrimary={counterDirection === opt.value}
								isSecondary={counterDirection !== opt.value}
								onClick={() => setAttributes({ counterDirection: opt.value })}
							>
								{opt.label}
							</Button>
						))}
					</ButtonGroup>
					<TextControl
						label={__("Caption", "counter-block")}
						value={caption}
						onChange={(val) => setAttributes({ caption: val })}
						help={__("Text below or above the counter", "counter-block")}
					/>
					{caption && (
						<>
							<p style={{ marginTop: "12px", marginBottom: "8px", fontWeight: 600 }}>
								{__("Caption Position", "counter-block")}
							</p>
							<ButtonGroup>
								{[
									{ label: __("Top", "counter-block"), value: "top" },
									{ label: __("Bottom", "counter-block"), value: "bottom" },
								].map((opt) => (
									<Button
										key={opt.value}
										isPrimary={captionPosition === opt.value}
										isSecondary={captionPosition !== opt.value}
										onClick={() => setAttributes({ captionPosition: opt.value })}
									>
										{opt.label}
									</Button>
								))}
							</ButtonGroup>
						</>
					)}
				</PanelBody>

				{/* Typography Panel */}
				<PanelBody title={__("Typography", "counter-block")} initialOpen={false}>
					<RangeControl
						label={__("Font Size", "counter-block")}
						value={fontSize}
						onChange={(val) => setAttributes({ fontSize: val })}
						min={12}
						max={120}
						step={1}
					/>
					<p style={{ marginBottom: "8px", fontWeight: 600 }}>
						{__("Font Weight", "counter-block")}
					</p>
					<ButtonGroup>
						{["300", "400", "500", "600", "700", "800", "900"].map((weight) => (
							<Button
								key={weight}
								isPrimary={fontWeight === weight}
								isSecondary={fontWeight !== weight}
								onClick={() => setAttributes({ fontWeight: weight })}
							>
								{weight}
							</Button>
						))}
					</ButtonGroup>
					<RangeControl
						label={__("Letter Spacing (px)", "counter-block")}
						value={letterSpacing}
						onChange={(val) => setAttributes({ letterSpacing: val })}
						min={-5}
						max={20}
						step={0.5}
					/>
					{caption && (
						<RangeControl
							label={__("Caption Font Size", "counter-block")}
							value={captionFontSize}
							onChange={(val) => setAttributes({ captionFontSize: val })}
							min={10}
							max={32}
							step={1}
						/>
					)}
				</PanelBody>

				{/* Colors Panel */}
				<PanelBody title={__("Colors", "counter-block")} initialOpen={false}>
					<p>{__("Counter Color", "counter-block")}</p>
					<ColorPalette
						value={color}
						onChange={(val) => setAttributes({ color: val })}
					/>
					{caption && (
						<>
							<p style={{ marginTop: "16px" }}>{__("Caption Color", "counter-block")}</p>
							<ColorPalette
								value={captionColor}
								onChange={(val) => setAttributes({ captionColor: val })}
							/>
						</>
					)}
				</PanelBody>
			</InspectorControls>

			<div {...blockProps} 
			     data-block-id={blockId}
			     data-starting-number={startingNumber}
			     data-ending-number={endingNumber}
			     data-duration={duration}
			     data-delay-bool={delayBool}
			     data-delay-time={delayTime}
			     data-counter-direction={counterDirection}
			     data-prefix={prefix}
			     data-suffix={suffix}>
				<div
					className={`ab-counter-block__container ${
						containerMode === "constrained" ? "is-constrained" : ""
					}`}
				>
					{caption && captionPosition === "top" && (
						<div className="ab-counter-block__caption ab-counter-block__caption--top"
						     style={{
							     fontSize: `${captionFontSize}px`,
							     color: captionColor,
							     marginBottom: "16px",
							     textAlign: "center"
						     }}>
							{caption}
						</div>
					)}
					<div className="ab-counter-block__content" style={{ textAlign: "center" }}>
						<span className="ab-counter-block__number"
						      style={{
							      fontSize: `${fontSize}px`,
							      fontWeight: fontWeight,
							      color: color,
							      letterSpacing: `${letterSpacing}px`,
							      display: "inline-block"
						      }}>
							{prefix && <span className="ab-counter-block__prefix">{prefix}</span>}
							<span className="displayNumber">{displayValue}</span>
							{suffix && <span className="ab-counter-block__suffix">{suffix}</span>}
						</span>
					</div>
					{caption && captionPosition === "bottom" && (
						<div className="ab-counter-block__caption ab-counter-block__caption--bottom"
						     style={{
							     fontSize: `${captionFontSize}px`,
							     color: captionColor,
							     marginTop: "16px",
							     textAlign: "center"
						     }}>
							{caption}
						</div>
					)}
				</div>
			</div>
		</>
	);
}

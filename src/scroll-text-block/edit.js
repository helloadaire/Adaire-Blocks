import {
    useBlockProps,
    RichText,
    InspectorControls,
} from "@wordpress/block-editor";
import { useEffect, useRef } from "@wordpress/element";
import {
	PanelBody,
	ColorPicker,
	TextControl,
	SelectControl,
	RangeControl,
} from "@wordpress/components";

// Helper function to convert hex to RGB
function hexToRgb(hex) {
	const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
	return result ? 
		`${parseInt(result[1], 16)}, ${parseInt(result[2], 16)}, ${parseInt(result[3], 16)}` : 
		'255, 255, 255';
}

export default function Edit({ attributes, setAttributes }) {
	const {
		heroText,
		backgroundColor,
		backgroundColorOpacity,
		containerWidth,
		containerWidthUnit,
		containerHeight,
		containerHeightUnit,
		pinHeight,
		pinHeightUnit,
		fontSize,
		fontWeight,
		textColor,
		fontSizeUnit,
		animationSpeed,
		scrollDirection,
		blockId,
		marginTop,
		marginBottom,
		marginLeft,
		marginRight,
		paddingTop,
		paddingBottom,
		paddingLeft,
		paddingRight,
	} = attributes;

    const wrapperRef = useRef(null);

    const blockProps = useBlockProps({
		className: 'ad-scroll-text-block-editor',
		style: { 
			backgroundColor: backgroundColor ? `rgba(${hexToRgb(backgroundColor)}, ${backgroundColorOpacity !== undefined ? backgroundColorOpacity : 1})` : undefined,
			width: `${containerWidth || 100}${containerWidthUnit || "vw"}`,
			height: `${containerHeight || 100}${containerHeightUnit || "vh"}`,
			// Ensure block is selectable
			position: 'relative',
			zIndex: 1,
			pointerEvents: 'auto'
		},
	});

    // Minimal event handling to ensure both block and parent are selectable
    useEffect(() => {
        const el = wrapperRef.current;
        if (!el) return;

        const onPointerDown = (e) => {
            // eslint-disable-next-line no-console
            console.log('[ScrollText][Editor] pointerdown', {
                target: e.target && (e.target.className || e.target.nodeName),
                button: e.button,
            });
            
            // Only handle if it's a direct click on the block wrapper
            // Don't interfere with text editing or parent selection
            if (e.target === el && e.button === 0) {
                // This is a direct click on the block wrapper
                // Let WordPress handle the selection
                return;
            }
        };

        // Use capture: false to allow natural event flow
        el.addEventListener('pointerdown', onPointerDown, { capture: false });

        return () => {
            el.removeEventListener('pointerdown', onPointerDown, { capture: false });
        };
    }, []);

	const parseNum = (val, attr) => {
		console.log("Raw value:", val);
		const num = Number(val);
		console.log("Parsed number:", num);
		if (!isNaN(num) && val !== "") {
			setAttributes({ [attr]: num });
		} else {
			console.warn("Invalid input:", val);
		}
	};

	return (
		<>
			<InspectorControls>
				<PanelBody title="Background Color" initialOpen={true}>
					<ColorPicker
						color={backgroundColor}
						onChangeComplete={(color) =>
							setAttributes({ backgroundColor: color.hex })
						}
						disableAlpha
					/>
					<RangeControl
						label="Background Opacity"
						value={backgroundColorOpacity}
						onChange={(value) => setAttributes({ backgroundColorOpacity: value })}
						min={0}
						max={1}
						step={0.1}
						help="Control the transparency of the background color (0 = transparent, 1 = opaque)"
					/>
				</PanelBody>

				<PanelBody title="Text Color" initialOpen={false}>
					<ColorPicker
						color={textColor}
						onChangeComplete={(color) =>
							setAttributes({ textColor: color.hex })
						}
						disableAlpha
					/>
				</PanelBody>

				<PanelBody title="Container Dimensions" initialOpen={false}>
					<TextControl
						label="Container Width"
						value={containerWidth}
						type="number"
						onChange={(value) => {
							parseNum(value, "containerWidth");
						}}
						min={1}
						help="Set the width of the container"
					/>
					<SelectControl
						label="Width Unit"
						value={containerWidthUnit}
						options={[
							{ label: "Viewport Width (vw)", value: "vw" },
							{ label: "Pixels (px)", value: "px" },
							{ label: "Percentage (%)", value: "%" },
						]}
						onChange={(value) => setAttributes({ containerWidthUnit: value })}
						help="Choose the unit for the container width"
					/>
					<TextControl
						label="Container Height"
						value={containerHeight}
						type="number"
						onChange={(value) => {
							parseNum(value, "containerHeight");
						}}
						min={1}
						help="Set the height of the container"
					/>
					<SelectControl
						label="Height Unit"
						value={containerHeightUnit}
						options={[
							{ label: "Viewport Height (vh)", value: "vh" },
							{ label: "Pixels (px)", value: "px" },
							{ label: "Percentage (%)", value: "%" },
						]}
						onChange={(value) => setAttributes({ containerHeightUnit: value })}
						help="Choose the unit for the container height"
					/>
				</PanelBody>

				<PanelBody title="Font Options" initialOpen={false}>
					<TextControl
						label="Font Size"
						value={fontSize}
						type="number"
						onChange={(value) => {
							parseNum(value, "fontSize");
						}}
						min={1}
					/>
					<SelectControl
						label="Font Size Unit"
						value={fontSizeUnit}
						options={[
							{ label: "Pixels (px)", value: "px" },
							{ label: "Viewport Width (vw)", value: "vw" },
						]}
						onChange={(value) => setAttributes({ fontSizeUnit: value })}
					/>
					<SelectControl
						label="Font Weight"
						value={fontWeight}
						options={[
							{ label: "Light (300)", value: 300 },
							{ label: "Normal (400)", value: 400 },
							{ label: "Medium (500)", value: 500 },
							{ label: "Semi Bold (600)", value: 600 },
							{ label: "Bold (700)", value: 700 },
							{ label: "Extra Bold (800)", value: 800 },
							{ label: "Black (900)", value: 900 },
						]}
						onChange={(value) => setAttributes({ fontWeight: value })}
					/>
				</PanelBody>

				<PanelBody title="Margin (px)" initialOpen={false}>
					<TextControl
						label="Top Margin"
						value={marginTop}
						type="number"
						onChange={(value) => {
							parseNum(value, "marginTop");
						}}
					/>
					<TextControl
						label="Bottom Margin"
						value={marginBottom}
						type="number"
						onChange={(value) => {
							parseNum(value, "marginBottom");
						}}
					/>
					<TextControl
						label="Right Margin"
						value={marginRight}
						type="number"
						onChange={(value) => {
							parseNum(value, "marginRight");
						}}
					/>
					<TextControl
						label="Left Margin"
						value={marginLeft}
						type="number"
						onChange={(value) => {
							parseNum(value, "marginLeft");
						}}
					/>
				</PanelBody>
				<PanelBody title="Padding (px)" initialOpen={false}>
					<TextControl
						label="Top Padding"
						value={paddingTop}
						type="number"
						onChange={(value) => {
							parseNum(value, "paddingTop");
						}}
					/>
					<TextControl
						label="Bottom Padding"
						value={paddingBottom}
						type="number"
						onChange={(value) => {
							parseNum(value, "paddingBottom");
						}}
					/>
					<TextControl
						label="Right Padding"
						value={paddingRight}
						type="number"
						onChange={(value) => {
							parseNum(value, "paddingRight");
						}}
					/>
					<TextControl
						label="Left Padding"
						value={paddingLeft}
						type="number"
						onChange={(value) => {
							parseNum(value, "paddingLeft");
						}}
					/>
				</PanelBody>

				<PanelBody title="Animation Settings" initialOpen={false}>
					<RangeControl
						label="Animation Speed"
						value={animationSpeed}
						onChange={(value) => setAttributes({ animationSpeed: value })}
						min={0.1}
						max={3}
						step={0.1}
						help="Controls the speed of GSAP animations. Lower values = slower, higher values = faster."
					/>

					<SelectControl
						label="Scroll Direction"
						value={scrollDirection}
						options={[
							{ label: "Move Left", value: "left" },
							{ label: "Move Right", value: "right" },
						]}
						onChange={(value) => setAttributes({ scrollDirection: value })}
						help="Choose the direction the text moves as you scroll."
					/>

					<TextControl
						label="Pin Height"
						value={pinHeight}
						type="number"
						onChange={(value) => {
							parseNum(value, "pinHeight");
						}}
						min={1}
						help="Set the height of the .pin-height class"
					/>
					<SelectControl
						label="Pin Height Unit"
						value={pinHeightUnit}
						options={[
							{ label: "Viewport Height (vh)", value: "vh" },
							{ label: "Pixels (px)", value: "px" },
							{ label: "Percentage (%)", value: "%" },
						]}
						onChange={(value) => setAttributes({ pinHeightUnit: value })}
						help="Choose the unit for the pin height"
					/>
				</PanelBody>

				<PanelBody title="Block Settings" initialOpen={false}>
					<TextControl
						label="Block ID"
						value={blockId}
						onChange={(value) => setAttributes({ blockId: value })}
						help="Add a custom ID to this block for CSS targeting or anchor links."
					/>
				</PanelBody>
			</InspectorControls>

            <section {...blockProps} ref={wrapperRef} className="ad-scroll-text-block" data-editor="true">
				<div
					className="ad-scroll-text-block__content"
					style={{ overflow: "hidden" }}
				>
					<RichText
						tagName="h1"
						value={heroText}
						onChange={(value) => setAttributes({ heroText: value })}
						placeholder="Enter hero text..."
						style={{
							whiteSpace: "nowrap",
							fontSize: fontSize + (fontSizeUnit || "px"),
							color: textColor || undefined,
							paddingTop: paddingTop + "px",
							paddingBottom: paddingBottom + "px",
							paddingRight: paddingRight + "px",
							paddingLeft: paddingLeft + "px",
							marginTop: marginTop + "px",
							marginBottom: marginBottom + "px",
							marginRight: marginRight + "px",
							marginLeft: marginLeft + "px",
							fontWeight: fontWeight
						}}
					/>
				</div>
			</section>
		</>
	);
}

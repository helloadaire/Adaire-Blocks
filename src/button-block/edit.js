import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl, ToggleControl, ColorPicker, SelectControl, RangeControl, BaseControl, Button, __experimentalBoxControl as BoxControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit({ attributes, setAttributes }) {
  const { 
    buttonText, 
    buttonLink, 
    openInNewTab, 
    blockId,
    // Styling attributes
    buttonColor,
    buttonBackgroundColor,
    buttonHoverColor,
    buttonHoverBackgroundColor,
    buttonStyle,
    underlineColor,
    blurAmount,
    fontSize,
    showIcon,
    hoverAnimation,
    buttonPadding,
    buttonMargin,
    zIndex,
    borderRadius,
    fontWeight
  } = attributes;

  const blockProps = useBlockProps({
    className: 'ad-button-block',
    style: {
      '--button-color': buttonColor || '#000000',
      '--button-bg-color': buttonBackgroundColor || 'transparent',
      '--button-hover-color': buttonHoverColor || '#ffffff',
      '--button-hover-bg-color': buttonHoverBackgroundColor || 'transparent',
      '--button-underline-color': underlineColor || '#ff4242',
      '--button-blur': blurAmount ? `${blurAmount}px` : '0px',
      '--button-font-size': fontSize ? `${fontSize}px` : '1.1rem',
      '--button-padding-top': buttonPadding?.top || '10px',
      '--button-padding-right': buttonPadding?.right || '20px',
      '--button-padding-bottom': buttonPadding?.bottom || '10px',
      '--button-padding-left': buttonPadding?.left || '20px',
      '--button-margin-top': buttonMargin?.top || '20px',
      '--button-margin-right': buttonMargin?.right || '0px',
      '--button-margin-bottom': buttonMargin?.bottom || '20px',
      '--button-margin-left': buttonMargin?.left || '0px',
      '--button-z-index': zIndex || '1',
      '--button-border-radius': borderRadius ? `${borderRadius}px` : '0px',
      '--button-font-weight': fontWeight || '500',
    }
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title="Button Settings" initialOpen={true}>
          <TextControl
            label="Button Text"
            value={buttonText}
            onChange={(value) => setAttributes({ buttonText: value })}
            placeholder="Enter button text..."
          />
          
          <TextControl
            label="Button Link"
            value={buttonLink}
            onChange={(value) => setAttributes({ buttonLink: value })}
            placeholder="https://example.com"
            type="url"
          />
          
          <ToggleControl
            label="Open in new tab"
            checked={openInNewTab}
            onChange={(value) => setAttributes({ openInNewTab: value })}
            help={openInNewTab ? 'Link will open in a new tab' : 'Link will open in the same tab'}
          />
        </PanelBody>

        <PanelBody title="Button Styling" initialOpen={false}>
          <BaseControl label="Button Color">
            <ColorPicker
              color={buttonColor}
              onChangeComplete={(color) => setAttributes({ buttonColor: color.hex })}
              disableAlpha
            />
          </BaseControl>

          <BaseControl label="Button Background Color">
            <ColorPicker
              color={buttonBackgroundColor && buttonBackgroundColor !== 'transparent' ? buttonBackgroundColor : '#000000'}
              onChangeComplete={(color) => {
                // Default to full opacity if alpha is not specified
                const alpha = color.rgb.a !== undefined ? color.rgb.a : 1;
                const colorValue = alpha < 1 
                  ? `rgba(${color.rgb.r}, ${color.rgb.g}, ${color.rgb.b}, ${alpha})`
                  : color.hex;
                setAttributes({ buttonBackgroundColor: colorValue });
              }}
              enableAlpha={true}
              defaultValue="#000000"
            />
            {buttonBackgroundColor && buttonBackgroundColor !== 'transparent' && (
              <Button
                isSmall
                isDestructive
                onClick={() => setAttributes({ buttonBackgroundColor: 'transparent' })}
                style={{ marginTop: '8px' }}
              >
                Clear Background Color
              </Button>
            )}
          </BaseControl>

          <BaseControl label="Hover Text Color">
            <ColorPicker
              color={buttonHoverColor}
              onChangeComplete={(color) => setAttributes({ buttonHoverColor: color.hex })}
              disableAlpha
            />
          </BaseControl>

          <BaseControl label="Hover Background Color">
            <ColorPicker
              color={buttonHoverBackgroundColor && buttonHoverBackgroundColor !== 'transparent' ? buttonHoverBackgroundColor : '#000000'}
              onChangeComplete={(color) => {
                // Default to full opacity if alpha is not specified
                const alpha = color.rgb.a !== undefined ? color.rgb.a : 1;
                const colorValue = alpha < 1 
                  ? `rgba(${color.rgb.r}, ${color.rgb.g}, ${color.rgb.b}, ${alpha})`
                  : color.hex;
                setAttributes({ buttonHoverBackgroundColor: colorValue });
              }}
              enableAlpha={true}
              defaultValue="#000000"
            />
            {buttonHoverBackgroundColor && buttonHoverBackgroundColor !== 'transparent' && (
              <Button
                isSmall
                isDestructive
                onClick={() => setAttributes({ buttonHoverBackgroundColor: 'transparent' })}
                style={{ marginTop: '8px' }}
              >
                Clear Hover Background Color
              </Button>
            )}
          </BaseControl>

          <BaseControl label="Underline Color">
            <ColorPicker
              color={underlineColor}
              onChangeComplete={(color) => setAttributes({ underlineColor: color.hex })}
              disableAlpha
            />
          </BaseControl>

          <SelectControl
            label="Button Style"
            value={buttonStyle}
            options={[
              { label: 'Underline', value: 'underline' },
              { label: 'Background Fill', value: 'fill' },
              { label: 'Border', value: 'border' },
              { label: 'Gradient', value: 'gradient' },
              { label: 'Glass Effect', value: 'glass' }
            ]}
            onChange={(value) => setAttributes({ buttonStyle: value })}
          />

          <RangeControl
            label="Blur Amount (px)"
            value={blurAmount}
            onChange={(value) => setAttributes({ blurAmount: value })}
            min={0}
            max={20}
            step={1}
          />

          <RangeControl
            label="Font Size (px)"
            value={fontSize}
            onChange={(value) => setAttributes({ fontSize: value })}
            min={12}
            max={48}
            step={1}
          />

          <ToggleControl
            label="Show Icon"
            checked={showIcon}
            onChange={(value) => setAttributes({ showIcon: value })}
            help={showIcon ? 'Icon will be visible' : 'Icon will be hidden'}
          />

          <SelectControl
            label="Hover Animation"
            value={hoverAnimation}
            options={[
              { label: 'Slide Underline', value: 'slide-underline' },
              { label: 'Scale', value: 'scale' },
              { label: 'Bounce', value: 'bounce' },
              { label: 'Glow', value: 'glow' },
              { label: 'Shake', value: 'shake' },
              { label: 'None', value: 'none' }
            ]}
            onChange={(value) => setAttributes({ hoverAnimation: value })}
          />

             <BoxControl
            label="Button Padding"
            values={buttonPadding}
            onChange={(value) => setAttributes({ buttonPadding: value })}
            units={[
              { value: 'px', label: 'px', default: 0 },
              { value: 'em', label: 'em', default: 0 },
              { value: 'rem', label: 'rem', default: 0 },
            ]}
          />

          <BoxControl
            label="Button Margin"
            values={buttonMargin}
            onChange={(value) => setAttributes({ buttonMargin: value })}
            units={[
              { value: 'px', label: 'px', default: 0 },
              { value: 'em', label: 'em', default: 0 },
              { value: 'rem', label: 'rem', default: 0 },
            ]}
          />

          <RangeControl
            label="Z-Index"
            value={zIndex}
            onChange={(value) => setAttributes({ zIndex: value })}
            min={0}
            max={100}
            step={1}
          />

          <RangeControl
            label="Border Radius (px)"
            value={borderRadius}
            onChange={(value) => setAttributes({ borderRadius: value })}
            min={0}
            max={50}
            step={1}
          />
          
          <SelectControl
            label="Font Weight"
            value={fontWeight}
            options={[
              { label: 'Thin (100)', value: '100' },
              { label: 'Extra Light (200)', value: '200' },
              { label: 'Light (300)', value: '300' },
              { label: 'Normal (400)', value: '400' },
              { label: 'Medium (500)', value: '500' },
              { label: 'Semi Bold (600)', value: '600' },
              { label: 'Bold (700)', value: '700' },
              { label: 'Extra Bold (800)', value: '800' },
              { label: 'Black (900)', value: '900' }
            ]}
            onChange={(value) => setAttributes({ fontWeight: value })}
            help="Choose the font weight for the button text."
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

      <div {...blockProps}>
        <a
          href={buttonLink}
          target={openInNewTab ? '_blank' : undefined}
          rel={openInNewTab ? 'noopener noreferrer' : undefined}
          className={`ad-button-block__link ad-button-block__link--${buttonStyle || 'underline'} ad-button-block__link--${hoverAnimation || 'slide-underline'}`}
        >
          {buttonText}
          {showIcon !== false && (
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
            </svg>
          )}
        </a>
      </div>
    </>
  );
} 
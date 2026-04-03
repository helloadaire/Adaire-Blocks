import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save( { attributes } ) {
    const {
        blockId,
        items,
        titleColor,
        contentColor,
        backgroundColor,
        chevronColor,
        chevronSize,
        titleFontSize,
        contentFontSize,
        gap,
        radius,
        padding,
        animationDuration,
        animationEasing,
        allowMultipleOpen,
        firstItemOpenByDefault,
        marginTop,
        marginRight,
        marginBottom,
        marginLeft,
        marginHorizontal,
        titleFontWeight,
        contentFontWeight,
        shadowIntensity,
        contentBackgroundColor,
        dividerColor,
        dividerThickness,
        containerMode,
        containerMaxWidth,
    } = attributes;

    const blockProps = useBlockProps.save( {
        className: 'adaire-accordion',
        style: {
            '--acc-title-color': titleColor,
            '--acc-content-color': contentColor,
            '--acc-bg': backgroundColor,
            '--acc-chevron': chevronColor,
            '--acc-chevron-size': `${ chevronSize ?? 16 }px`,
            '--acc-title-size': `${ titleFontSize }px`,
            '--acc-content-size': `${ contentFontSize }px`,
            '--acc-gap': `${ gap }px`,
            '--acc-radius': `${ radius }px`,
            '--acc-padding-top': `${ typeof padding === 'number' ? padding : padding?.desktop?.top ?? padding?.top ?? 20 }px`,
            '--acc-padding-right': `${ typeof padding === 'number' ? padding : padding?.desktop?.right ?? padding?.right ?? 20 }px`,
            '--acc-padding-bottom': `${ typeof padding === 'number' ? padding : padding?.desktop?.bottom ?? padding?.bottom ?? 20 }px`,
            '--acc-padding-left': `${ typeof padding === 'number' ? padding : padding?.desktop?.left ?? padding?.left ?? 20 }px`,
            '--acc-padding-top-tablet': `${ typeof padding === 'number' ? padding : padding?.tablet?.top ?? padding?.desktop?.top ?? padding?.top ?? 20 }px`,
            '--acc-padding-right-tablet': `${ typeof padding === 'number' ? padding : padding?.tablet?.right ?? padding?.desktop?.right ?? padding?.right ?? 20 }px`,
            '--acc-padding-bottom-tablet': `${ typeof padding === 'number' ? padding : padding?.tablet?.bottom ?? padding?.desktop?.bottom ?? padding?.bottom ?? 20 }px`,
            '--acc-padding-left-tablet': `${ typeof padding === 'number' ? padding : padding?.tablet?.left ?? padding?.desktop?.left ?? padding?.left ?? 20 }px`,
            '--acc-padding-top-mobile': `${ typeof padding === 'number' ? padding : padding?.mobile?.top ?? padding?.tablet?.top ?? padding?.desktop?.top ?? padding?.top ?? 20 }px`,
            '--acc-padding-right-mobile': `${ typeof padding === 'number' ? padding : padding?.mobile?.right ?? padding?.tablet?.right ?? padding?.desktop?.right ?? padding?.right ?? 20 }px`,
            '--acc-padding-bottom-mobile': `${ typeof padding === 'number' ? padding : padding?.mobile?.bottom ?? padding?.tablet?.bottom ?? padding?.desktop?.bottom ?? padding?.bottom ?? 20 }px`,
            '--acc-padding-left-mobile': `${ typeof padding === 'number' ? padding : padding?.mobile?.left ?? padding?.tablet?.left ?? padding?.desktop?.left ?? padding?.left ?? 20 }px`,
            '--acc-duration': `${ animationDuration }ms`,
            '--acc-easing': animationEasing,
            '--acc-margin-top': `${ marginTop }px`,
            '--acc-margin-right': `${ marginHorizontal?.desktop ?? marginRight }px`,
            '--acc-margin-bottom': `${ marginBottom }px`,
            '--acc-margin-left': `${ marginHorizontal?.desktop ?? marginLeft }px`,
            '--acc-margin-h-desktop': `${ marginHorizontal?.desktop ?? 0 }px`,
            '--acc-margin-h-tablet': `${ marginHorizontal?.tablet ?? 0 }px`,
            '--acc-margin-h-mobile': `${ marginHorizontal?.mobile ?? 0 }px`,
            '--acc-title-weight': titleFontWeight,
            '--acc-content-weight': contentFontWeight,
            '--acc-shadow-intensity': shadowIntensity,
            '--acc-shadow-alpha': shadowIntensity,
            '--acc-shadow-alpha-hover': (typeof shadowIntensity === 'number' ? shadowIntensity * 0.5 : 0.04),
            '--acc-shadow-alpha-base': (typeof shadowIntensity === 'number' ? shadowIntensity * 0.25 : 0.02),
            // Ensure margins render on frontend regardless of theme CSS
            marginTop: `${ marginTop }px`,
            marginRight: `${ marginHorizontal?.desktop ?? marginRight }px`,
            marginBottom: `${ marginBottom }px`,
            marginLeft: `${ marginHorizontal?.desktop ?? marginLeft }px`,
            '--acc-content-bg': contentBackgroundColor,
            '--acc-divider-color': dividerColor,
            '--acc-divider-thickness': `${dividerThickness}px`,
            '--acc-container-mode': containerMode || 'full',
            '--acc-container-max-width': `${ containerMaxWidth?.desktop?.value ?? containerMaxWidth?.value ?? 1200 }${ containerMaxWidth?.desktop?.unit ?? containerMaxWidth?.unit ?? 'px' }`,
            '--acc-container-max-width-tablet': `${ containerMaxWidth?.tablet?.value ?? 100 }${ containerMaxWidth?.tablet?.unit ?? '%' }`,
            '--acc-container-max-width-mobile': `${ containerMaxWidth?.mobile?.value ?? 100 }${ containerMaxWidth?.mobile?.unit ?? '%' }`,
        },
        'data-allow-multiple': allowMultipleOpen ? 'true' : 'false',
        'data-first-open': firstItemOpenByDefault ? 'true' : 'false',
        'data-block-id': blockId,
    } );

    return (
        <div { ...blockProps }>

            <div className={`adaire-accordion__container ${containerMode === 'constrained' ? 'is-constrained' : ''}`}>
                <div className="adaire-accordion__list">
                    <InnerBlocks.Content />
                </div>
            </div>
        </div>
    );
}



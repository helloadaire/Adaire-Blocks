import { __ } from '@wordpress/i18n';
import { useCallback, useState, useEffect } from '@wordpress/element';
import { useBlockProps, InspectorControls, useInnerBlocksProps, store as blockEditorStore } from '@wordpress/block-editor';
import { createBlock } from '@wordpress/blocks';
import { useDispatch, useSelect } from '@wordpress/data';
import { PanelBody, RangeControl, ToggleControl, ColorPalette, Button, ButtonGroup, TextControl, BaseControl } from '@wordpress/components';
import { desktop, tablet, mobile } from '@wordpress/icons';
import UpgradeNotice from '../components/UpgradeNotice';
import { useBlockLimits } from '../components/useBlockLimits';

const EASINGS = [ 'ease', 'linear', 'ease-in', 'ease-out', 'ease-in-out' ];
const FREE_TIER_ITEM_LIMIT = 3;

export default function Edit( { attributes, setAttributes, clientId } ) {
    const [deviceType, setDeviceType] = useState('desktop');
    const [paddingDeviceType, setPaddingDeviceType] = useState('desktop');
    
    const { replaceInnerBlocks, insertBlock } = useDispatch(blockEditorStore);
    const innerBlocks = useSelect(
        (select) => select(blockEditorStore).getBlocks(clientId),
        [clientId]
    );
    
    // Check block limits
    const { isLimitReached, showUpgradeNotice, upgradeMessage } = useBlockLimits(
        'accordion-block', 
        attributes.items || [], 
        'accordion'
    );
    
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
        icon,
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

    if ( !blockId ) {
        setAttributes( { blockId: clientId } );
    }

    // Initialize items with IDs and handle first item open state (only on mount)
    useEffect(() => {
        let needsUpdate = false;
        let updatedItems = items.map((item, index) => {
            // Ensure all items have unique IDs
            const currentId = item.id || '';
            if (!currentId || currentId === '') {
                needsUpdate = true;
                return { 
                    ...item, 
                    id: `accordion-item-${Date.now()}-${Math.random().toString(36).substr(2, 9)}-${index}` 
                };
            }
            return item;
        });
        
        // On initial load, set first item open state based on firstItemOpenByDefault
        // Only if no items are explicitly marked as open (avoid overriding user settings)
        if (items.length > 0 && updatedItems.length > 0) {
            const hasAnyExplicitlyOpen = updatedItems.some(item => item.open === true);
            
            // If firstItemOpenByDefault is true and no items are explicitly open, open the first one
            if (firstItemOpenByDefault !== false && !hasAnyExplicitlyOpen) {
                // Ensure first item is open
                if (updatedItems[0].open !== true) {
                    needsUpdate = true;
                    updatedItems[0] = { ...updatedItems[0], open: true };
                    // Close all others if multiple open is disabled
                    if (!allowMultipleOpen) {
                        updatedItems = updatedItems.map((item, idx) => 
                            idx === 0 ? updatedItems[0] : { ...item, open: false }
                        );
                    }
                }
            } else if (firstItemOpenByDefault === false) {
                // If disabled, ensure all items are closed
                const hasAnyOpen = updatedItems.some(item => item.open === true);
                if (hasAnyOpen) {
                    needsUpdate = true;
                    updatedItems = updatedItems.map(item => ({ ...item, open: false }));
                }
            }
        }
        
        if (needsUpdate) {
            setAttributes({ items: updatedItems });
        }
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []); // Only run once on mount

    const blockProps = useBlockProps( {
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
            // Ensure margins render in editor regardless of theme CSS
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
    } );

    const updateItem = useCallback( ( index, patch ) => {
        const next = [ ...items ];
        next[ index ] = { ...next[ index ], ...patch };
        setAttributes( { items: next } );
    }, [ items, setAttributes ] );

    const addItem = useCallback(() => {
        if (isLimitReached) {
            return; // Don't add if limit reached
        }
        const newId = `accordion-item-${Date.now()}-${Math.random().toString(36).substr(2, 9)}`;
        const newItem = { id: newId, title: __('New Item', 'accordion-block'), open: false };
        
        // Close all other items if multiple open is disabled
        let updatedItems = [...items];
        if (!allowMultipleOpen) {
            updatedItems = items.map(item => ({ ...item, open: false }));
        }
        
        // Add new item
        updatedItems = [...updatedItems, newItem];
        
        // Create new InnerBlocks template with the new item
        const newTemplate = updatedItems.map((item, index) => 
            createBlock('create-block/accordion-item-block', { 
                title: item.title,
                itemId: item.id,
                itemIndex: index,
                open: item.open || false,
            })
        );
        
        // Replace InnerBlocks with new template
        replaceInnerBlocks(clientId, newTemplate);
        
        // Update items array
        setAttributes({ items: updatedItems });
    }, [isLimitReached, items, allowMultipleOpen, setAttributes, replaceInnerBlocks, clientId]);

    const removeItem = ( index ) => {
        const next = items.filter( ( _, i ) => i !== index );
        setAttributes( { items: next } );
    };

    const toggleItem = useCallback((index) => {
        const next = items.map((it, i) => {
            if (i === index) {
                const newOpenState = !it.open;
                return { ...it, open: newOpenState };
            }
            // If multiple open is disabled, close all other items
            // Also ensure at least one item stays open if we're closing the current one
            if (!allowMultipleOpen) {
                return { ...it, open: false };
            }
            return it;
        });
        
                // Note: We don't force an item to stay open - user can close all items
        
        setAttributes({ items: next });
    }, [items, allowMultipleOpen, setAttributes]);

    const updatePadding = (device, property, value) => {
        // Handle backward compatibility - if padding is in old format, convert it
        let currentPadding = padding;
        if (typeof padding === 'number' || (padding && !padding.desktop)) {
            // Old format detected - convert to new format
            const oldPaddingValue = typeof padding === 'number' ? padding : 20;
            currentPadding = {
                desktop: {
                    top: oldPaddingValue,
                    right: oldPaddingValue,
                    bottom: oldPaddingValue,
                    left: oldPaddingValue,
                },
                tablet: {
                    top: oldPaddingValue,
                    right: oldPaddingValue,
                    bottom: oldPaddingValue,
                    left: oldPaddingValue,
                },
                mobile: {
                    top: oldPaddingValue,
                    right: oldPaddingValue,
                    bottom: oldPaddingValue,
                    left: oldPaddingValue,
                },
            };
        }
        
        const next = {
            ...currentPadding,
            [device]: {
                ...currentPadding?.[device],
                [property]: value,
            },
        };
        setAttributes({ padding: next });
    };

    // Sync InnerBlocks when items array changes
    useEffect(() => {
        // Only sync if we have items and they all have IDs
        if (items.length === 0) return;
        
        const allItemsHaveIds = items.every(item => item.id && item.id !== '');
        if (!allItemsHaveIds) return;
        
        // Check if InnerBlocks need to be synced
        if (innerBlocks.length !== items.length) {
            const newTemplate = items.map((item, index) => 
                createBlock('create-block/accordion-item-block', { 
                    title: item.title || '',
                    itemId: item.id,
                    itemIndex: index,
                    open: item.open || false,
                })
            );
            replaceInnerBlocks(clientId, newTemplate, false);
        }
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, [items.length]); // Only sync when items count changes

    // Template for accordion item blocks
    const ALLOWED_BLOCKS = ['create-block/accordion-item-block'];
    const TEMPLATE = items.map((item, index) => [
        'create-block/accordion-item-block',
        { 
            title: item.title,
            itemId: item.id,
            itemIndex: index,
            open: item.open || false,
        }
    ]);

    const innerBlocksProps = useInnerBlocksProps(
        { className: 'adaire-accordion__list' },
        {
            allowedBlocks: ALLOWED_BLOCKS,
            template: TEMPLATE,
            templateLock: false, // Unlocked to allow users to add/remove items freely
        }
    );

    return (
        <>
            <InspectorControls>
                <PanelBody title={ __('Container Settings', 'accordion-block') } initialOpen={ true }>
                    <ButtonGroup>
                        { [
                            { label: __('Full width', 'accordion-block'), value: 'full' },
                            { label: __('Constrained', 'accordion-block'), value: 'constrained' },
                        ].map(opt => (
                            <Button
                                key={ opt.value }
                                isPrimary={ containerMode === opt.value }
                                isSecondary={ containerMode !== opt.value }
                                onClick={ () => setAttributes({ containerMode: opt.value }) }
                            >{ opt.label }</Button>
                        )) }
                    </ButtonGroup>
                    { containerMode === 'constrained' && (
                        <>
                            <p style={{ marginTop: '16px', marginBottom: '8px', fontWeight: 600 }}>
                                { __('Max Width', 'accordion-block') }
                            </p>
                            <ButtonGroup style={{ marginBottom: '12px' }}>
                                <Button
                                    icon={desktop}
                                    isPrimary={deviceType === 'desktop'}
                                    onClick={() => setDeviceType('desktop')}
                                    label={__('Desktop', 'accordion-block')}
                                />
                                <Button
                                    icon={tablet}
                                    isPrimary={deviceType === 'tablet'}
                                    onClick={() => setDeviceType('tablet')}
                                    label={__('Tablet', 'accordion-block')}
                                />
                                <Button
                                    icon={mobile}
                                    isPrimary={deviceType === 'mobile'}
                                    onClick={() => setDeviceType('mobile')}
                                    label={__('Mobile', 'accordion-block')}
                                />
                            </ButtonGroup>
                            <div style={{ display: 'flex', gap: '8px' }}>
                                <TextControl
                                    type="number"
                                    value={
                                        containerMaxWidth?.[deviceType]?.value ?? 
                                        (deviceType === 'desktop' ? (containerMaxWidth?.value ?? 1200) : 100)
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
                                    { ['px','%','rem','vw'].map(u => (
                                        <Button
                                            key={u}
                                            isPrimary={
                                                (containerMaxWidth?.[deviceType]?.unit ??
                                                    (deviceType === 'desktop' ? (containerMaxWidth?.unit ?? 'px') : '%')) === u
                                            }
                                            isSecondary={
                                                (containerMaxWidth?.[deviceType]?.unit ??
                                                    (deviceType === 'desktop' ? (containerMaxWidth?.unit ?? 'px') : '%')) !== u
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
                                        >{u}</Button>
                                    )) }
                                </ButtonGroup>
                            </div>
                        </>
                    )}
                </PanelBody>
                <PanelBody title={ __('Items', 'accordion-block') } initialOpen={ true }>
                    <Button 
                        isPrimary 
                        onClick={ addItem }
                        disabled={ isLimitReached }
                    >
                        { __('Add Item', 'accordion-block') }
                    </Button>
                    { showUpgradeNotice && (
                        <UpgradeNotice 
                            variant="inline"
                            itemType="accordion"
                            message={upgradeMessage}
                        />
                    ) }
                    <RangeControl
                        label={ __('Gap', 'accordion-block') }
                        value={ gap }
                        onChange={ (v) => setAttributes( { gap: v } ) }
                        min={ 0 }
                        max={ 48 }
                    />
                    <BaseControl label={ __('Header Padding', 'accordion-block') }>
                        <ButtonGroup style={{ marginBottom: '12px' }}>
                            <Button
                                icon={desktop}
                                isPrimary={paddingDeviceType === 'desktop'}
                                onClick={() => setPaddingDeviceType('desktop')}
                                label={__('Desktop', 'accordion-block')}
                            />
                            <Button
                                icon={tablet}
                                isPrimary={paddingDeviceType === 'tablet'}
                                onClick={() => setPaddingDeviceType('tablet')}
                                label={__('Tablet', 'accordion-block')}
                            />
                            <Button
                                icon={mobile}
                                isPrimary={paddingDeviceType === 'mobile'}
                                onClick={() => setPaddingDeviceType('mobile')}
                                label={__('Mobile', 'accordion-block')}
                            />
                        </ButtonGroup>
                        <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '8px' }}>
                            <RangeControl
                                label={ __('Top', 'accordion-block') }
                                value={
                                    typeof padding === 'number' 
                                        ? padding 
                                        : padding?.[paddingDeviceType]?.top ?? padding?.desktop?.top ?? padding?.top ?? 20
                                }
                                onChange={(value) => updatePadding(paddingDeviceType, 'top', value)}
                                min={0}
                                max={80}
                            />
                            <RangeControl
                                label={ __('Right', 'accordion-block') }
                                value={
                                    typeof padding === 'number' 
                                        ? padding 
                                        : padding?.[paddingDeviceType]?.right ?? padding?.desktop?.right ?? padding?.right ?? 20
                                }
                                onChange={(value) => updatePadding(paddingDeviceType, 'right', value)}
                                min={0}
                                max={80}
                            />
                            <RangeControl
                                label={ __('Bottom', 'accordion-block') }
                                value={
                                    typeof padding === 'number' 
                                        ? padding 
                                        : padding?.[paddingDeviceType]?.bottom ?? padding?.desktop?.bottom ?? padding?.bottom ?? 20
                                }
                                onChange={(value) => updatePadding(paddingDeviceType, 'bottom', value)}
                                min={0}
                                max={80}
                            />
                            <RangeControl
                                label={ __('Left', 'accordion-block') }
                                value={
                                    typeof padding === 'number' 
                                        ? padding 
                                        : padding?.[paddingDeviceType]?.left ?? padding?.desktop?.left ?? padding?.left ?? 20
                                }
                                onChange={(value) => updatePadding(paddingDeviceType, 'left', value)}
                                min={0}
                                max={80}
                            />
                        </div>
                    </BaseControl>
                    <RangeControl
                        label={ __('Radius', 'accordion-block') }
                        value={ radius }
                        onChange={ (v) => setAttributes( { radius: v } ) }
                        min={ 0 }
                        max={ 48 }
                    />
                    <ToggleControl
                        label={ __('Allow multiple open', 'accordion-block') }
                        checked={ allowMultipleOpen }
                        onChange={ (v) => setAttributes( { allowMultipleOpen: v } ) }
                    />
                    <ToggleControl
                        label={ __('First item open by default', 'accordion-block') }
                        checked={ firstItemOpenByDefault !== false }
                        onChange={ (v) => setAttributes( { firstItemOpenByDefault: v } ) }
                        help={ __('When enabled, the first accordion item will be open when the page loads.', 'accordion-block') }
                    />
                </PanelBody>
                <PanelBody title={ __('Typography', 'accordion-block') } initialOpen={ false }>
                    <RangeControl
                        label={ __('Title size', 'accordion-block') }
                        value={ titleFontSize }
                        onChange={ (v) => setAttributes( { titleFontSize: v } ) }
                        min={ 10 }
                        max={ 60 }
                    />
                    <RangeControl
                        label={ __('Content size', 'accordion-block') }
                        value={ contentFontSize }
                        onChange={ (v) => setAttributes( { contentFontSize: v } ) }
                        min={ 10 }
                        max={ 48 }
                    />
                    <p>{ __('Title weight', 'accordion-block') }</p>
                    <ButtonGroup>
                        { ['300', '400', '500', '600', '700', '800'].map( (weight) => (
                            <Button
                                key={ weight }
                                isPrimary={ titleFontWeight === weight }
                                isSecondary={ titleFontWeight !== weight }
                                onClick={ () => setAttributes( { titleFontWeight: weight } ) }
                            >{ weight }</Button>
                        ) ) }
                    </ButtonGroup>
                    <p>{ __('Content weight', 'accordion-block') }</p>
                    <ButtonGroup>
                        { ['300', '400', '500', '600', '700', "800"].map( (weight) => (
                            <Button
                                key={ weight }
                                isPrimary={ contentFontWeight === weight }
                                isSecondary={ contentFontWeight !== weight }
                                onClick={ () => setAttributes( { contentFontWeight: weight } ) }
                            >{ weight }</Button>
                        ) ) }
                    </ButtonGroup>
                </PanelBody>
                <PanelBody title={ __('Colors', 'accordion-block') } initialOpen={ false }>
                    <p>{ __('Title', 'accordion-block') }</p>
                    <ColorPalette value={ titleColor } onChange={ (v)=> setAttributes({ titleColor: v }) } />
                    <p>{ __('Content', 'accordion-block') }</p>
                    <ColorPalette value={ contentColor } onChange={ (v)=> setAttributes({ contentColor: v }) } />
                    <p>{ __('Background', 'accordion-block') }</p>
                    <ColorPalette value={ backgroundColor } onChange={ (v)=> setAttributes({ backgroundColor: v }) } />
                    <p>{ __('Chevron', 'accordion-block') }</p>
                    <ColorPalette value={ chevronColor } onChange={ (v)=> setAttributes({ chevronColor: v }) } />
                    <RangeControl
                        label={ __('Chevron Size (px)', 'accordion-block') }
                        value={ chevronSize }
                        onChange={ (v) => setAttributes( { chevronSize: v } ) }
                        min={ 8 }
                        max={ 80 }
                        step={ 1 }
                    />
                    <p>{ __('Content Background', 'accordion-block') }</p>
                    <ColorPalette value={ contentBackgroundColor } onChange={ (v)=> setAttributes({ contentBackgroundColor: v }) } />
                    <p>{ __('Divider Line Color', 'accordion-block') }</p>
                    <ColorPalette value={ dividerColor } onChange={ (v)=> setAttributes({ dividerColor: v }) } />
                    <RangeControl
                        label={ __('Divider Line Thickness (px)', 'accordion-block') }
                        value={ dividerThickness }
                        onChange={ (v) => setAttributes( { dividerThickness: v } ) }
                        min={ 0 }
                        max={ 10 }
                        step={ 1 }
                    />
                </PanelBody>
                <PanelBody title={ __('Spacing & Margins', 'accordion-block') } initialOpen={ false }>
                    <RangeControl
                        label={ __('Margin Top', 'accordion-block') }
                        value={ marginTop }
                        onChange={ (v) => setAttributes( { marginTop: v } ) }
                        min={ 0 }
                        max={ 100 }
                    />
                    <RangeControl
                        label={ __('Horizontal Margin (Desktop)', 'accordion-block') }
                        value={ marginHorizontal?.desktop ?? 0 }
                        onChange={ (v) => setAttributes( { marginHorizontal: { ...marginHorizontal, desktop: v } } ) }
                        min={ 0 }
                        max={ 100 }
                    />
                    <RangeControl
                        label={ __('Margin Bottom', 'accordion-block') }
                        value={ marginBottom }
                        onChange={ (v) => setAttributes( { marginBottom: v } ) }
                        min={ 0 }
                        max={ 100 }
                    />
                    <RangeControl
                        label={ __('Horizontal Margin (Tablet)', 'accordion-block') }
                        value={ marginHorizontal?.tablet ?? 0 }
                        onChange={ (v) => setAttributes( { marginHorizontal: { ...marginHorizontal, tablet: v } } ) }
                        min={ 0 }
                        max={ 100 }
                    />
                    <RangeControl
                        label={ __('Horizontal Margin (Mobile)', 'accordion-block') }
                        value={ marginHorizontal?.mobile ?? 0 }
                        onChange={ (v) => setAttributes( { marginHorizontal: { ...marginHorizontal, mobile: v } } ) }
                        min={ 0 }
                        max={ 100 }
                    />
                </PanelBody>
                <PanelBody title={ __('Effects', 'accordion-block') } initialOpen={ false }>
                    <RangeControl
                        label={ __('Shadow Intensity', 'accordion-block') }
                        value={ shadowIntensity }
                        onChange={ (v) => setAttributes( { shadowIntensity: v } ) }
                        min={ 0 }
                        max={ 0.5 }
                        step={ 0.01 }
                    />
                </PanelBody>
                <PanelBody title={ __('Animation', 'accordion-block') } initialOpen={ false }>
                    <RangeControl
                        label={ __('Duration (ms)', 'accordion-block') }
                        value={ animationDuration }
                        onChange={ (v) => setAttributes( { animationDuration: v } ) }
                        min={ 100 }
                        max={ 1500 }
                        step={ 50 }
                    />
                    <p>{ __('Easing', 'accordion-block') }</p>
                    <ButtonGroup>
                        { EASINGS.map( (e) => (
                            <Button
                                key={ e }
                                isPrimary={ animationEasing === e }
                                isSecondary={ animationEasing !== e }
                                onClick={ () => setAttributes( { animationEasing: e } ) }
                            >{ e }</Button>
                        ) ) }
                    </ButtonGroup>
                </PanelBody>
            </InspectorControls>

            <div { ...blockProps } data-allow-multiple={ allowMultipleOpen }>
                <div className={`adaire-accordion__container ${containerMode === 'constrained' ? 'is-constrained' : ''}`}>
                    <div {...innerBlocksProps} />
                </div>
            </div>
        </>
    );
}



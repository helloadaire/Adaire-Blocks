import { __ } from '@wordpress/i18n';
import { 
    useBlockProps, 
    InspectorControls,
    PanelColorSettings,
    __experimentalUseCustomUnits as useCustomUnits,
    __experimentalUnitControl as UnitControl
} from '@wordpress/block-editor';
import {
    PanelBody,
    PanelRow,
    SelectControl,
    ToggleControl,
    RangeControl,
    TextControl,
    Button,
    ButtonGroup,
    Placeholder,
    Spinner,
    Notice,
    __experimentalSpacingSizesControl as SpacingSizesControl,
    __experimentalBoxControl as BoxControl,
    TabPanel
} from '@wordpress/components';
import { useState, useEffect } from '@wordpress/element';
import apiFetch from '@wordpress/api-fetch';
import { desktop, tablet, mobile } from '@wordpress/icons';

const Edit = ({ attributes, setAttributes, clientId }) => {
    const [deviceType, setDeviceType] = useState('desktop');
    
    const {
        blockId,
        postsPerPage,
        enablePagination,
        paginationStyle,
        selectedCategories,
        selectedPosts,
        postType,
        excludeCurrentPost,
        showCategories,
        showDate,
        showAuthor,
        showReadTime,
        showExcerpt,
        excerptLength,
        layoutType,
        columns,
        enableFiltering,
        filterPosition,
        filterStyle,
        cardBorderRadius,
        cardPadding,
        cardGap,
        imageHeight,
        imageFit,
        titleColor,
        titleFontSize,
        titleFontWeight,
        excerptColor,
        excerptFontSize,
        excerptFontWeight,
        metaColor,
        metaFontSize,
        metaFontWeight,
        categoryColor,
        categoryBackgroundColor,
        categoryBorderRadius,
        filterBorderRadius,
        paginationBorderRadius,
        enableAnimations,
        animationType,
        transitionAnimation,
        animationDuration,
        animationDelay,
        animationEase,
        enableHoverEffects,
        hoverScale,
        hoverShadow,
        overlayOpacity,
        overlayGradient,
        textAlign,
        containerMode,
        containerMaxWidth,
        marginTop,
        marginRight,
        marginBottom,
        marginLeft
    } = attributes;

    const [categories, setCategories] = useState([]);
    const [posts, setPosts] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);
    const [responsiveColumns, setResponsiveColumns] = useState(columns);

    // Generate block ID on mount
    useEffect(() => {
        if (!blockId) {
            setAttributes({ blockId: `posts-grid-${clientId}` });
        }
    }, [clientId, blockId, setAttributes]);

    // Handle responsive columns based on window width and WordPress preview mode
    useEffect(() => {
        const updateResponsiveColumns = () => {
            // Check if we're in WordPress editor responsive preview mode
            const editorCanvas = document.querySelector('.edit-post-visual-editor__content-area');
            const previewDevice = document.querySelector('.is-tablet-preview, .is-mobile-preview');
            
            let effectiveWidth = window.innerWidth;
            
            // Detect WordPress responsive preview mode
            if (document.body.classList.contains('is-mobile-preview')) {
                effectiveWidth = 360; // Mobile preview
            } else if (document.body.classList.contains('is-tablet-preview')) {
                effectiveWidth = 780; // Tablet preview
            } else if (editorCanvas) {
                // Use the actual canvas width if available
                effectiveWidth = editorCanvas.offsetWidth;
            }
            
            if (layoutType === 'normal') {
                if (effectiveWidth <= 768) {
                    setResponsiveColumns(1); // Mobile: 1 column
                } else if (effectiveWidth <= 1024) {
                    setResponsiveColumns(2); // Tablet: 2 columns
                } else {
                    setResponsiveColumns(columns); // Desktop: User-defined
                }
            } else {
                setResponsiveColumns(1); // List is always 1 column
            }
        };

        // Initial update
        updateResponsiveColumns();

        // Add resize listener
        window.addEventListener('resize', updateResponsiveColumns);

        // Watch for WordPress preview mode changes
        const observer = new MutationObserver(updateResponsiveColumns);
        observer.observe(document.body, {
            attributes: true,
            attributeFilter: ['class']
        });

        // Also observe the editor canvas size changes
        const editorCanvas = document.querySelector('.edit-post-visual-editor__content-area');
        if (editorCanvas) {
            const resizeObserver = new ResizeObserver(updateResponsiveColumns);
            resizeObserver.observe(editorCanvas);
            
            return () => {
                window.removeEventListener('resize', updateResponsiveColumns);
                observer.disconnect();
                resizeObserver.disconnect();
            };
        }

        // Cleanup
        return () => {
            window.removeEventListener('resize', updateResponsiveColumns);
            observer.disconnect();
        };
    }, [columns, layoutType]);

    // Fetch categories and posts
    useEffect(() => {
        const fetchData = async () => {
            try {
                setLoading(true);
                setError(null);

                // Try REST API first, but have fallback
                try {
                    console.log('[Posts Grid Editor] Testing REST API...');
                    console.log('[Posts Grid Editor] apiFetch available:', typeof apiFetch);
                    
                    // Test if REST API is available
                    const testResponse = await apiFetch({
                        path: '/wp/v2/',
                        method: 'GET'
                    });
                    console.log('[Posts Grid Editor] REST API test successful:', testResponse);

                    // Fetch categories
                    try {
                        console.log('[Posts Grid Editor] Fetching categories...');
                        const categoriesResponse = await apiFetch({
                            path: '/wp/v2/categories?per_page=100',
                            method: 'GET'
                        });
                        console.log('[Posts Grid Editor] Categories fetched:', categoriesResponse.length);
                        setCategories(Array.isArray(categoriesResponse) ? categoriesResponse : []);
                    } catch (catError) {
                        console.warn('[Posts Grid Editor] Failed to fetch categories:', catError);
                        setCategories([]);
                    }

                    // Fetch posts
                    try {
                        // Convert post type to REST API endpoint (e.g., 'post' -> 'posts')
                        const apiEndpoint = postType === 'post' ? 'posts' : postType;
                        let postsPath = `/wp/v2/${apiEndpoint}?per_page=100&_embed=1`;
                        
                        if (selectedCategories.length > 0) {
                            postsPath += `&categories=${selectedCategories.join(',')}`;
                        }

                        console.log('[Posts Grid Editor] Fetching posts from:', postsPath);
                        console.log('[Posts Grid Editor] Selected categories for filtering:', selectedCategories);
                        
                        const postsResponse = await apiFetch({
                            path: postsPath,
                            method: 'GET'
                        });
                        
                        console.log('[Posts Grid Editor] Posts response:', postsResponse);
                        console.log('[Posts Grid Editor] Posts count:', postsResponse.length);
                        setPosts(Array.isArray(postsResponse) ? postsResponse : []);
                    } catch (postsError) {
                        console.error('[Posts Grid Editor] Failed to fetch posts:', postsError);
                        console.error('[Posts Grid Editor] Error details:', postsError.message, postsError.code);
                        setPosts([]);
                        setError(`REST API Error: ${postsError.message}. The block will work but may not show real data in the editor.`);
                    }
                } catch (apiError) {
                    console.error('[Posts Grid Editor] REST API not available:', apiError);
                    console.error('[Posts Grid Editor] Error type:', apiError.constructor.name);
                    console.error('[Posts Grid Editor] Error message:', apiError.message);
                    console.error('[Posts Grid Editor] Error code:', apiError.code);
                    setError('REST API is not available. This block will work on the frontend but may not show data in the editor. Please check your WordPress REST API settings.');
                    setCategories([]);
                    setPosts([]);
                }
            } catch (err) {
                setError('Failed to initialize block.');
                console.error('Posts Grid Block Error:', err);
            } finally {
                setLoading(false);
            }
        };

        fetchData();
    }, [postType, selectedCategories]);

    const blockProps = useBlockProps({
        className: `adaire-posts-grid adaire-posts-grid--${layoutType}`,
        style: {
            '--adaire-posts-grid-columns': columns,
            '--adaire-posts-grid-gap': `${cardGap}px`,
            '--adaire-posts-grid-border-radius': `${cardBorderRadius}px`,
            '--adaire-posts-grid-padding': `${cardPadding}px`,
            '--adaire-posts-grid-image-height': `${imageHeight}px`,
            '--adaire-posts-grid-title-color': titleColor,
            '--adaire-posts-grid-title-font-size': `${titleFontSize}px`,
            '--adaire-posts-grid-title-font-weight': titleFontWeight,
            '--adaire-posts-grid-excerpt-color': excerptColor,
            '--adaire-posts-grid-excerpt-font-size': `${excerptFontSize}px`,
            '--adaire-posts-grid-excerpt-font-weight': excerptFontWeight,
            '--adaire-posts-grid-meta-color': metaColor,
            '--adaire-posts-grid-meta-font-size': `${metaFontSize}px`,
            '--adaire-posts-grid-meta-font-weight': metaFontWeight,
            '--adaire-posts-grid-category-color': categoryColor,
            '--adaire-posts-grid-category-background': categoryBackgroundColor,
            '--adaire-posts-grid-category-border-radius': `${categoryBorderRadius}px`,
            '--adaire-posts-grid-filter-border-radius': `${filterBorderRadius}px`,
            '--adaire-posts-grid-pagination-border-radius': `${paginationBorderRadius}px`,
            '--adaire-posts-grid-hover-scale': hoverScale,
            '--adaire-posts-grid-overlay-opacity': overlayOpacity,
            '--adaire-posts-grid-overlay-gradient': overlayGradient,
            '--container-max-width': `${containerMaxWidth?.desktop?.value ?? containerMaxWidth?.value ?? 1200}${containerMaxWidth?.desktop?.unit ?? containerMaxWidth?.unit ?? 'px'}`,
            '--container-max-width-tablet': `${containerMaxWidth?.tablet?.value ?? 100}${containerMaxWidth?.tablet?.unit ?? '%'}`,
            '--container-max-width-mobile': `${containerMaxWidth?.mobile?.value ?? 100}${containerMaxWidth?.mobile?.unit ?? '%'}`,
            marginTop: `${marginTop?.desktop ?? marginTop ?? 0}px`,
            marginRight: `${marginRight?.desktop ?? marginRight ?? 0}px`,
            marginBottom: `${marginBottom?.desktop ?? marginBottom ?? 0}px`,
            marginLeft: `${marginLeft?.desktop ?? marginLeft ?? 0}px`,
            '--margin-top-tablet': `${marginTop?.tablet ?? marginTop?.desktop ?? marginTop ?? 0}px`,
            '--margin-right-tablet': `${marginRight?.tablet ?? marginRight?.desktop ?? marginRight ?? 0}px`,
            '--margin-bottom-tablet': `${marginBottom?.tablet ?? marginBottom?.desktop ?? marginBottom ?? 0}px`,
            '--margin-left-tablet': `${marginLeft?.tablet ?? marginLeft?.desktop ?? marginLeft ?? 0}px`,
            '--margin-top-mobile': `${marginTop?.mobile ?? marginTop?.desktop ?? marginTop ?? 0}px`,
            '--margin-right-mobile': `${marginRight?.mobile ?? marginRight?.desktop ?? marginRight ?? 0}px`,
            '--margin-bottom-mobile': `${marginBottom?.mobile ?? marginBottom?.desktop ?? marginBottom ?? 0}px`,
            '--margin-left-mobile': `${marginLeft?.mobile ?? marginLeft?.desktop ?? marginLeft ?? 0}px`,
            textAlign: textAlign
        }
    });

    const toggleCategory = (categoryId) => {
        const newCategories = selectedCategories.includes(categoryId)
            ? selectedCategories.filter(id => id !== categoryId)
            : [...selectedCategories, categoryId];
        console.log('Posts Grid Block Editor: Selected categories changed to:', newCategories);
        setAttributes({ selectedCategories: newCategories });
    };

    const togglePost = (postId) => {
        const newPosts = selectedPosts.includes(postId)
            ? selectedPosts.filter(id => id !== postId)
            : [...selectedPosts, postId];
        setAttributes({ selectedPosts: newPosts });
    };

    const animationTypes = [
        { label: 'Fade Up', value: 'fadeUp' },
        { label: 'Fade In', value: 'fadeIn' },
        { label: 'Scale Up', value: 'scaleUp' },
        { label: 'Slide Up', value: 'slideUp' },
        { label: 'Rotate In', value: 'rotateIn' },
        { label: 'Bounce In', value: 'bounceIn' }
    ];

    const easeTypes = [
        { label: 'Power2 Out', value: 'power2.out' },
        { label: 'Power3 Out', value: 'power3.out' },
        { label: 'Back Out', value: 'back.out' },
        { label: 'Elastic Out', value: 'elastic.out' },
        { label: 'Bounce Out', value: 'bounce.out' },
        { label: 'Circ Out', value: 'circ.out' }
    ];

    if (loading) {
        return (
            <div {...blockProps}>
                <Placeholder>
                    <Spinner />
                    <p>{__('Loading Posts Grid...', 'posts-grid-block')}</p>
                </Placeholder>
            </div>
        );
    }

    // Show error as a notice but still render the block
    const showErrorNotice = error && posts.length === 0;
    
    // Debug logging
    console.log('Posts Grid Debug:', {
        postsLength: posts.length,
        error: error,
        showErrorNotice: showErrorNotice,
        postsPerPage: postsPerPage
    });

    return (
        <>
            <InspectorControls>
                {/* Content Settings */}
                <PanelBody title={__('Content Settings', 'posts-grid-block')} initialOpen={true}>
                    <TextControl
                        label={__('Posts Per Page', 'posts-grid-block')}
                        type="number"
                        value={postsPerPage}
                        onChange={(value) => setAttributes({ postsPerPage: parseInt(value) || 6 })}
                        min={1}
                        max={100}
                        help={__('Number of posts to display per page', 'posts-grid-block')}
                    />

                    <PanelRow>
                        <ToggleControl
                            label={__('Enable Pagination', 'posts-grid-block')}
                            checked={enablePagination}
                            onChange={(value) => setAttributes({ enablePagination: value })}
                            help={__('Show pagination when there are more posts than posts per page', 'posts-grid-block')}
                        />
                    </PanelRow>

                    {enablePagination && (
                        <PanelRow>
                            <SelectControl
                                label={__('Pagination Style', 'posts-grid-block')}
                                value={paginationStyle}
                                options={[
                                    { label: __('Page Numbers', 'posts-grid-block'), value: 'numbers' },
                                    { label: __('Load More Button', 'posts-grid-block'), value: 'loadmore' },
                                    { label: __('Previous/Next', 'posts-grid-block'), value: 'prevnext' }
                                ]}
                                onChange={(value) => setAttributes({ paginationStyle: value })}
                            />
                        </PanelRow>
                    )}
                    
                    <PanelRow>
                        <ToggleControl
                            label={__('Exclude Current Post', 'posts-grid-block')}
                            checked={excludeCurrentPost}
                            onChange={(value) => setAttributes({ excludeCurrentPost: value })}
                        />
                    </PanelRow>

                    <PanelRow>
                        <ToggleControl
                            label={__('Show Categories', 'posts-grid-block')}
                            checked={showCategories}
                            onChange={(value) => setAttributes({ showCategories: value })}
                        />
                    </PanelRow>

                    <PanelRow>
                        <ToggleControl
                            label={__('Show Date', 'posts-grid-block')}
                            checked={showDate}
                            onChange={(value) => setAttributes({ showDate: value })}
                        />
                    </PanelRow>

                    <PanelRow>
                        <ToggleControl
                            label={__('Show Author', 'posts-grid-block')}
                            checked={showAuthor}
                            onChange={(value) => setAttributes({ showAuthor: value })}
                        />
                    </PanelRow>

                    <PanelRow>
                        <ToggleControl
                            label={__('Show Read Time', 'posts-grid-block')}
                            checked={showReadTime}
                            onChange={(value) => setAttributes({ showReadTime: value })}
                        />
                    </PanelRow>

                    <PanelRow>
                        <ToggleControl
                            label={__('Show Excerpt', 'posts-grid-block')}
                            checked={showExcerpt}
                            onChange={(value) => setAttributes({ showExcerpt: value })}
                        />
                    </PanelRow>

                    {showExcerpt && (
                        <PanelRow>
                            <RangeControl
                                label={__('Excerpt Length', 'posts-grid-block')}
                                value={excerptLength}
                                onChange={(value) => setAttributes({ excerptLength: value })}
                                min={10}
                                max={50}
                            />
                        </PanelRow>
                    )}
                </PanelBody>

                {/* Category Selection */}
                <PanelBody title={__('Category Selection', 'posts-grid-block')} initialOpen={false}>
                    <p>{__('Select categories to filter posts:', 'posts-grid-block')}</p>
                    <div style={{ maxHeight: '200px', overflowY: 'auto', border: '1px solid #ddd', padding: '10px' }}>
                        {categories.map(category => (
                            <label key={category.id} style={{ display: 'block', marginBottom: '8px' }}>
                                <input
                                    type="checkbox"
                                    checked={selectedCategories.includes(category.id)}
                                    onChange={() => toggleCategory(category.id)}
                                    style={{ marginRight: '8px' }}
                                />
                                {category.name} ({category.count})
                            </label>
                        ))}
                    </div>
                    <Button
                        isSmall
                        onClick={() => setAttributes({ selectedCategories: [] })}
                        style={{ marginTop: '10px' }}
                    >
                        {__('Clear All', 'posts-grid-block')}
                    </Button>
                </PanelBody>

                {/* Layout Settings */}
                <PanelBody title={__('Layout Settings', 'posts-grid-block')} initialOpen={false}>
                    <p style={{ marginBottom: '8px', fontWeight: 600 }}>{__('Layout Type', 'posts-grid-block')}</p>
                    <ButtonGroup style={{ marginBottom: '16px' }}>
                        {[
                            { label: __('Grid', 'posts-grid-block'), value: 'normal' },
                            { label: __('List', 'posts-grid-block'), value: 'list' }
                        ].map(opt => (
                            <Button
                                key={opt.value}
                                isPrimary={layoutType === opt.value}
                                isSecondary={layoutType !== opt.value}
                                onClick={() => setAttributes({ layoutType: opt.value })}
                            >{opt.label}</Button>
                        ))}
                    </ButtonGroup>

                    {layoutType !== 'list' && (
                        <RangeControl
                            label={__('Columns', 'posts-grid-block')}
                            value={columns}
                            onChange={(value) => setAttributes({ columns: value })}
                            min={1}
                            max={6}
                            step={1}
                            withInputField={true}
                            allowReset={true}
                            help={__('Number of columns for grid layout', 'posts-grid-block')}
                        />
                    )}

                    <SelectControl
                            label={__('Text Alignment', 'posts-grid-block')}
                            value={textAlign}
                            options={[
                                { label: 'Left', value: 'left' },
                                { label: 'Center', value: 'center' },
                                { label: 'Right', value: 'right' }
                            ]}
                            onChange={(value) => setAttributes({ textAlign: value })}
                        />

                    <RangeControl
                        label={__('Card Gap', 'posts-grid-block')}
                        value={cardGap}
                        onChange={(value) => setAttributes({ cardGap: value })}
                        min={0}
                        max={60}
                        step={1}
                        withInputField={true}
                        allowReset={true}
                    />

                    <RangeControl
                        label={__('Card Border Radius', 'posts-grid-block')}
                        value={cardBorderRadius}
                        onChange={(value) => setAttributes({ cardBorderRadius: value })}
                        min={0}
                        max={50}
                        step={1}
                        withInputField={true}
                        allowReset={true}
                    />

                    <RangeControl
                        label={__('Filter Button Border Radius', 'posts-grid-block')}
                        value={filterBorderRadius}
                        onChange={(value) => setAttributes({ filterBorderRadius: value })}
                        min={0}
                        max={50}
                        step={1}
                        withInputField={true}
                        allowReset={true}
                    />

                    <RangeControl
                        label={__('Pagination Border Radius', 'posts-grid-block')}
                        value={paginationBorderRadius}
                        onChange={(value) => setAttributes({ paginationBorderRadius: value })}
                        min={0}
                        max={50}
                        step={1}
                        withInputField={true}
                        allowReset={true}
                    />

                    <RangeControl
                        label={__('Card Padding', 'posts-grid-block')}
                            value={cardPadding}
                            onChange={(value) => setAttributes({ cardPadding: value })}
                            min={0}
                            max={60}
                            step={1}
                            withInputField={true}
                            allowReset={true}
                        />

                    <RangeControl
                        label={__('Image Height', 'posts-grid-block')}
                            value={imageHeight}
                            onChange={(value) => setAttributes({ imageHeight: value })}
                            min={100}
                            max={400}
                            step={10}
                            withInputField={true}
                            allowReset={true}
                        />

                    <SelectControl
                        label={__('Image Fit', 'posts-grid-block')}
                            value={imageFit}
                            options={[
                                { label: 'Cover', value: 'cover' },
                                { label: 'Contain', value: 'contain' },
                                { label: 'Fill', value: 'fill' }
                            ]}
                            onChange={(value) => setAttributes({ imageFit: value })}
                        />
                </PanelBody>

                {/* Filtering Settings */}
                <PanelBody title={__('Filtering Settings', 'posts-grid-block')} initialOpen={false}>
                    <PanelRow>
                        <ToggleControl
                            label={__('Enable Category Filtering', 'posts-grid-block')}
                            checked={enableFiltering}
                            onChange={(value) => setAttributes({ enableFiltering: value })}
                        />
                    </PanelRow>

                </PanelBody>

                {/* Typography Settings */}
                <PanelBody title={__('Typography Settings', 'posts-grid-block')} initialOpen={false}>
                    <TextControl
                        label={__('Title Font Size (px)', 'posts-grid-block')}
                        type="number"
                        value={titleFontSize}
                        onChange={(value) => setAttributes({ titleFontSize: parseInt(value) || 18 })}
                        min={12}
                        max={48}
                    />

                    <SelectControl
                        label={__('Title Font Weight', 'posts-grid-block')}
                        value={titleFontWeight}
                        options={[
                            { label: 'Normal', value: '400' },
                            { label: 'Medium', value: '500' },
                            { label: 'Semi Bold', value: '600' },
                            { label: 'Bold', value: '700' }
                        ]}
                        onChange={(value) => setAttributes({ titleFontWeight: value })}
                    />

                    <TextControl
                        label={__('Excerpt Font Size (px)', 'posts-grid-block')}
                        type="number"
                        value={excerptFontSize}
                        onChange={(value) => setAttributes({ excerptFontSize: parseInt(value) || 14 })}
                        min={10}
                        max={24}
                    />

                    <SelectControl
                        label={__('Excerpt Font Weight', 'posts-grid-block')}
                        value={excerptFontWeight}
                        options={[
                            { label: 'Normal', value: '400' },
                            { label: 'Medium', value: '500' },
                            { label: 'Semi Bold', value: '600' },
                            { label: 'Bold', value: '700' }
                        ]}
                        onChange={(value) => setAttributes({ excerptFontWeight: value })}
                    />

                    <TextControl
                        label={__('Meta Font Size (px)', 'posts-grid-block')}
                        type="number"
                        value={metaFontSize}
                        onChange={(value) => setAttributes({ metaFontSize: parseInt(value) || 12 })}
                        min={8}
                        max={20}
                    />

                    <SelectControl
                        label={__('Meta Font Weight', 'posts-grid-block')}
                        value={metaFontWeight}
                        options={[
                            { label: 'Normal', value: '400' },
                            { label: 'Medium', value: '500' },
                            { label: 'Semi Bold', value: '600' },
                            { label: 'Bold', value: '700' }
                        ]}
                        onChange={(value) => setAttributes({ metaFontWeight: value })}
                    />
                </PanelBody>

                {/* Color Settings */}
                <PanelColorSettings
                    title={__('Color Settings', 'posts-grid-block')}
                    colorSettings={[
                        {
                            label: __('Title Color', 'posts-grid-block'),
                            value: titleColor,
                            onChange: (value) => setAttributes({ titleColor: value })
                        },
                        {
                            label: __('Excerpt Color', 'posts-grid-block'),
                            value: excerptColor,
                            onChange: (value) => setAttributes({ excerptColor: value })
                        },
                        {
                            label: __('Meta Color', 'posts-grid-block'),
                            value: metaColor,
                            onChange: (value) => setAttributes({ metaColor: value })
                        },
                        {
                            label: __('Category Color', 'posts-grid-block'),
                            value: categoryColor,
                            onChange: (value) => setAttributes({ categoryColor: value })
                        },
                        {
                            label: __('Category Background', 'posts-grid-block'),
                            value: categoryBackgroundColor,
                            onChange: (value) => setAttributes({ categoryBackgroundColor: value })
                        }
                    ]}
                />

                {/* Animation Settings */}
                <PanelBody title={__('Animation Settings', 'posts-grid-block')} initialOpen={false}>
                    <PanelRow>
                        <ToggleControl
                            label={__('Enable Animations', 'posts-grid-block')}
                            checked={enableAnimations}
                            onChange={(value) => setAttributes({ enableAnimations: value })}
                        />
                    </PanelRow>

                    {enableAnimations && (
                        <>
                            <PanelRow>
                                <SelectControl
                                    label={__('Transition Animation', 'posts-grid-block')}
                                    value={transitionAnimation}
                                    options={[
                                        { label: __('Fade', 'posts-grid-block'), value: 'fade' },
                                        { label: __('Fade Up', 'posts-grid-block'), value: 'fadeUp' },
                                        { label: __('Fade Down', 'posts-grid-block'), value: 'fadeDown' },
                                        { label: __('Scale', 'posts-grid-block'), value: 'scale' },
                                        { label: __('Slide Left', 'posts-grid-block'), value: 'slideLeft' },
                                        { label: __('Slide Right', 'posts-grid-block'), value: 'slideRight' },
                                        { label: __('Flip', 'posts-grid-block'), value: 'flip' },
                                        { label: __('FLIP (Smart Position)', 'posts-grid-block'), value: 'flipPosition' }
                                    ]}
                                    onChange={(value) => setAttributes({ transitionAnimation: value })}
                                    help={__('Animation when switching pages or categories', 'posts-grid-block')}
                                />
                            </PanelRow>

                            <PanelRow>
                                <RangeControl
                                    label={__('Animation Duration', 'posts-grid-block')}
                                    value={animationDuration}
                                    onChange={(value) => setAttributes({ animationDuration: value })}
                                    min={0.1}
                                    max={2}
                                    step={0.1}
                                    withInputField={true}
                                    allowReset={true}
                                />
                            </PanelRow>

                            <PanelRow>
                                <RangeControl
                                    label={__('Animation Delay', 'posts-grid-block')}
                                    value={animationDelay}
                                    onChange={(value) => setAttributes({ animationDelay: value })}
                                    min={0}
                                    max={0.5}
                                    step={0.05}
                                    withInputField={true}
                                    allowReset={true}
                                />
                            </PanelRow>

                            <PanelRow>
                                <SelectControl
                                    label={__('Animation Ease', 'posts-grid-block')}
                                    value={animationEase}
                                    options={easeTypes}
                                    onChange={(value) => setAttributes({ animationEase: value })}
                                />
                            </PanelRow>

                            <PanelRow>
                                <ToggleControl
                                    label={__('Enable Hover Effects', 'posts-grid-block')}
                                    checked={enableHoverEffects}
                                    onChange={(value) => setAttributes({ enableHoverEffects: value })}
                                />
                            </PanelRow>

                            {enableHoverEffects && (
                                <>
                                    <PanelRow>
                                        <RangeControl
                                            label={__('Hover Scale', 'posts-grid-block')}
                                            value={hoverScale}
                                            onChange={(value) => setAttributes({ hoverScale: value })}
                                            min={1}
                                            max={1.2}
                                            step={0.05}
                                            withInputField={true}
                                            allowReset={true}
                                        />
                                    </PanelRow>

                                    <PanelRow>
                                        <ToggleControl
                                            label={__('Hover Shadow', 'posts-grid-block')}
                                            checked={hoverShadow}
                                            onChange={(value) => setAttributes({ hoverShadow: value })}
                                        />
                                    </PanelRow>
                                </>
                            )}
                        </>
                    )}
                </PanelBody>

                {/* Container Settings */}
                <PanelBody title={__('Container Settings', 'posts-grid-block')} initialOpen={false}>
                    <ButtonGroup>
                        {[
                            { label: __('Full Width', 'posts-grid-block'), value: 'full' },
                            { label: __('Constrained', 'posts-grid-block'), value: 'constrained' }
                        ].map(opt => (
                            <Button
                                key={opt.value}
                                isPrimary={containerMode === opt.value}
                                isSecondary={containerMode !== opt.value}
                                onClick={() => setAttributes({ containerMode: opt.value })}
                            >{opt.label}</Button>
                        ))}
                    </ButtonGroup>
                    {containerMode === 'constrained' && (
                        <>
                            <p style={{ marginTop: '16px', marginBottom: '8px', fontWeight: 600 }}>{__('Max Width', 'posts-grid-block')}</p>
                            <ButtonGroup style={{ marginBottom: '12px' }}>
                                <Button
                                    icon={desktop}
                                    isPrimary={deviceType === 'desktop'}
                                    onClick={() => setDeviceType('desktop')}
                                    label={__('Desktop', 'posts-grid-block')}
                                />
                                <Button
                                    icon={tablet}
                                    isPrimary={deviceType === 'tablet'}
                                    onClick={() => setDeviceType('tablet')}
                                    label={__('Tablet', 'posts-grid-block')}
                                />
                                <Button
                                    icon={mobile}
                                    isPrimary={deviceType === 'mobile'}
                                    onClick={() => setDeviceType('mobile')}
                                    label={__('Mobile', 'posts-grid-block')}
                                />
                            </ButtonGroup>
                            <div style={{ display: 'flex', gap: '8px' }}>
                                <TextControl
                                    type="number"
                                    value={containerMaxWidth?.[deviceType]?.value ?? (deviceType === 'desktop' ? 1200 : 100)}
                                    onChange={(v) => setAttributes({ 
                                        containerMaxWidth: { 
                                            ...(containerMaxWidth || {}), 
                                            [deviceType]: { 
                                                ...(containerMaxWidth?.[deviceType] || {}), 
                                                value: Number(v) 
                                            }
                                        } 
                                    })}
                                />
                                <ButtonGroup>
                                    {['px', '%', 'rem', 'vw'].map(u => (
                                        <Button
                                            key={u}
                                            isPrimary={(containerMaxWidth?.[deviceType]?.unit ?? (deviceType === 'desktop' ? 'px' : '%')) === u}
                                            isSecondary={(containerMaxWidth?.[deviceType]?.unit ?? (deviceType === 'desktop' ? 'px' : '%')) !== u}
                                            onClick={() => setAttributes({ 
                                                containerMaxWidth: { 
                                                    ...(containerMaxWidth || {}), 
                                                    [deviceType]: { 
                                                        ...(containerMaxWidth?.[deviceType] || {}), 
                                                        unit: u 
                                                    }
                                                } 
                                            })}
                                        >{u}</Button>
                                    ))}
                                </ButtonGroup>
                            </div>
                        </>
                    )}

                    <p style={{ marginTop: '16px', marginBottom: '8px', fontWeight: 600 }}>{__('Margins', 'posts-grid-block')}</p>
                    <ButtonGroup style={{ marginBottom: '12px' }}>
                        <Button
                            icon={desktop}
                            isPrimary={deviceType === 'desktop'}
                            onClick={() => setDeviceType('desktop')}
                            label={__('Desktop', 'posts-grid-block')}
                        />
                        <Button
                            icon={tablet}
                            isPrimary={deviceType === 'tablet'}
                            onClick={() => setDeviceType('tablet')}
                            label={__('Tablet', 'posts-grid-block')}
                        />
                        <Button
                            icon={mobile}
                            isPrimary={deviceType === 'mobile'}
                            onClick={() => setDeviceType('mobile')}
                            label={__('Mobile', 'posts-grid-block')}
                        />
                    </ButtonGroup>
                    <BoxControl
                        values={{
                            top: marginTop?.[deviceType] ?? 0,
                            right: marginRight?.[deviceType] ?? 0,
                            bottom: marginBottom?.[deviceType] ?? 0,
                            left: marginLeft?.[deviceType] ?? 0
                        }}
                        onChange={(value) => setAttributes({
                            marginTop: { ...(marginTop || {}), [deviceType]: value.top || 0 },
                            marginRight: { ...(marginRight || {}), [deviceType]: value.right || 0 },
                            marginBottom: { ...(marginBottom || {}), [deviceType]: value.bottom || 0 },
                            marginLeft: { ...(marginLeft || {}), [deviceType]: value.left || 0 }
                        })}
                        units={[
                            { value: 'px', label: 'px' },
                            { value: 'em', label: 'em' },
                            { value: 'rem', label: 'rem' },
                            { value: '%', label: '%' }
                        ]}
                    />
                </PanelBody>
            </InspectorControls>

            <div {...blockProps}>
                {showErrorNotice && (
                    <Notice status="warning" isDismissible={false} style={{marginBottom: '20px'}}>
                        {error}
                    </Notice>
                )}
                
                <div className={`adaire-posts-grid__container ${containerMode === 'constrained' ? 'is-constrained' : ''}`}>
                    {enableFiltering && filterPosition === 'top' && (
                        <div className="adaire-posts-grid__filters">
                            <div className="adaire-posts-grid__filter-list">
                                <button className="adaire-posts-grid__filter-btn is-active">
                                    {__('All', 'posts-grid-block')}
                                </button>
                                {categories.slice(0, 5).map(category => (
                                    <button key={category.id} className="adaire-posts-grid__filter-btn">
                                        {category.name}
                                    </button>
                                ))}
                            </div>
                        </div>
                    )}
                    
                    <div 
                        className="adaire-posts-grid__grid" 
                        style={{
                            gridTemplateColumns: layoutType === 'list' 
                                ? '1fr' 
                                : `repeat(${responsiveColumns}, 1fr)`
                        }}
                    >
                        {(posts.length > 0 && !error) ? posts.slice(0, postsPerPage).map((post, index) => (
                            <div 
                                key={post.id} 
                                className={`adaire-posts-grid__item ${layoutType === 'list' ? 'list__view' : ''}`}
                                onClick={() => window.open(post.link, '_blank')}
                                style={{ cursor: 'pointer' }}
                                title={`View: ${post.title.rendered}`}
                            >
                                <div className="adaire-posts-grid__image">
                                    {post.featured_media ? (
                                        <img 
                                            src={post._embedded?.['wp:featuredmedia']?.[0]?.source_url || '/placeholder.jpg'} 
                                            alt={post.title.rendered}
                                        />
                                    ) : (
                                        <div className="adaire-posts-grid__placeholder">
                                            <span>{__('No Image', 'posts-grid-block')}</span>
                                        </div>
                                    )}
                                </div>
                                
                                <div className="adaire-posts-grid__content">
                                    {showCategories && post.categories && post.categories.length > 0 && (() => {
                                            const filteredCats = post.categories.filter(catId => 
                                                selectedCategories.length === 0 || selectedCategories.includes(catId)
                                            );
                                            console.log('Post categories:', post.categories, 'Selected:', selectedCategories, 'Filtered:', filteredCats);
                                            return filteredCats.length > 0;
                                        })() && (
                                            <div className="adaire-posts-grid__categories">
                                                {post.categories
                                                    .filter(catId => selectedCategories.length === 0 || selectedCategories.includes(catId))
                                                    .slice(0, 2)
                                                    .map(catId => {
                                                        const category = categories.find(cat => cat.id === catId);
                                                        return category ? (
                                                            <span key={catId} className="adaire-posts-grid__category">
                                                                {category.name}
                                                            </span>
                                                        ) : null;
                                                    })}
                                            </div>
                                        )}
                                        <h3 className="adaire-posts-grid__title">
                                            {post.title.rendered}
                                        </h3>
                                        {showExcerpt && (
                                            <div className="adaire-posts-grid__excerpt">
                                                {post.excerpt.rendered.replace(/<[^>]*>/g, '').substring(0, excerptLength * 5)}...
                                            </div>
                                        )}
                                        {(showDate || showAuthor || showReadTime) && (
                                            <div className="adaire-posts-grid__meta">
                                                {showDate && (
                                                    <span className="adaire-posts-grid__date">
                                                        {new Date(post.date).toLocaleDateString()}
                                                    </span>
                                                )}
                                                {showAuthor && (
                                                    <span className="adaire-posts-grid__author">
                                                        {post._embedded?.author?.[0]?.name || 'Unknown'}
                                                    </span>
                                                )}
                                                {showReadTime && (
                                                    <span className="adaire-posts-grid__read-time">
                                                        3 min read
                                                    </span>
                                                )}
                                            </div>
                                        )}
                                </div>
                            </div>
                        )) : (
                            // Fallback preview when no posts are available
                            Array.from({ length: Math.max(1, Math.min(postsPerPage, 4)) }, (_, index) => (
                                <div 
                                    key={`preview-${index}`} 
                                    className={`adaire-posts-grid__item ${layoutType === 'list' ? 'list__view' : ''}`}
                                    style={{ cursor: 'pointer' }}
                                    title="Preview - Entire card will be clickable on frontend"
                                >
                                    <div className="adaire-posts-grid__image">
                                        <div className="adaire-posts-grid__placeholder">
                                            <span>{__('No Image', 'posts-grid-block')}</span>
                                        </div>
                                    </div>
                                    <div className="adaire-posts-grid__content">
                                        {showCategories && (
                                            <div className="adaire-posts-grid__categories">
                                                <span className="adaire-posts-grid__category">
                                                    {__('Sample Category', 'posts-grid-block')}
                                                </span>
                                            </div>
                                        )}
                                        <h3 className="adaire-posts-grid__title">
                                            {__('Sample Post Title', 'posts-grid-block')}
                                        </h3>
                                        {showExcerpt && (
                                            <div className="adaire-posts-grid__excerpt">
                                                {__('This is a preview of how your posts will look. The block will display your actual posts on the frontend.', 'posts-grid-block')}
                                            </div>
                                        )}
                                        {(showDate || showAuthor || showReadTime) && (
                                            <div className="adaire-posts-grid__meta">
                                                {showDate && (
                                                    <span className="adaire-posts-grid__date">
                                                        {new Date().toLocaleDateString()}
                                                    </span>
                                                )}
                                                {showAuthor && (
                                                    <span className="adaire-posts-grid__author">
                                                        {__('Sample Author', 'posts-grid-block')}
                                                    </span>
                                                )}
                                                {showReadTime && (
                                                    <span className="adaire-posts-grid__read-time">
                                                        {__('3 min read', 'posts-grid-block')}
                                                    </span>
                                                )}
                                            </div>
                                        )}
                                    </div>
                                </div>
                            ))
                        )}
                    </div>
                    
                    {enableFiltering && filterPosition === 'bottom' && (
                        <div className="adaire-posts-grid__filters">
                            <div className="adaire-posts-grid__filter-list">
                                <button className="adaire-posts-grid__filter-btn is-active">
                                    {__('All', 'posts-grid-block')}
                                </button>
                                {categories.slice(0, 5).map(category => (
                                    <button key={category.id} className="adaire-posts-grid__filter-btn">
                                        {category.name}
                                    </button>
                                ))}
                            </div>
                        </div>
                    )}

                    {enablePagination && posts.length > postsPerPage && (
                        <div className="adaire-posts-grid__pagination">
                            {paginationStyle === 'numbers' && (
                                <div className="adaire-posts-grid__pagination-wrapper">
                                    <button className="adaire-posts-grid__pagination-btn adaire-posts-grid__pagination-prev is-disabled" disabled>
                                        <span>← Previous</span>
                                    </button>
                                    <div className="adaire-posts-grid__pagination-numbers">
                                        <button className="adaire-posts-grid__pagination-number is-active">1</button>
                                        <button className="adaire-posts-grid__pagination-number">2</button>
                                        <button className="adaire-posts-grid__pagination-number">3</button>
                                    </div>
                                    <button className="adaire-posts-grid__pagination-btn adaire-posts-grid__pagination-next">
                                        <span>Next →</span>
                                    </button>
                                </div>
                            )}
                            {paginationStyle === 'loadmore' && (
                                <div className="adaire-posts-grid__pagination-wrapper adaire-posts-grid__pagination-wrapper--loadmore">
                                    <button className="adaire-posts-grid__pagination-loadmore">
                                        {__('Load More', 'posts-grid-block')}
                                    </button>
                                </div>
                            )}
                            {paginationStyle === 'prevnext' && (
                                <div className="adaire-posts-grid__pagination-wrapper adaire-posts-grid__pagination-wrapper--prevnext">
                                    <button className="adaire-posts-grid__pagination-btn adaire-posts-grid__pagination-prev is-disabled" disabled>
                                        <span>← Previous</span>
                                    </button>
                                    <span className="adaire-posts-grid__pagination-info">
                                        {__('Page 1 of 3', 'posts-grid-block')}
                                    </span>
                                    <button className="adaire-posts-grid__pagination-btn adaire-posts-grid__pagination-next">
                                        <span>Next →</span>
                                    </button>
                                </div>
                            )}
                        </div>
                    )}
                </div>
            </div>
        </>
    );
};

export default Edit;

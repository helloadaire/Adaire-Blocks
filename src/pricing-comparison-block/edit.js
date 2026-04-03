import { __ } from "@wordpress/i18n";
import { useState } from "@wordpress/element";
import {
	useBlockProps,
	InspectorControls,
	RichText,
} from "@wordpress/block-editor";
import {
	PanelBody,
	TextControl,
	TextareaControl,
	Button,
	ButtonGroup,
	ToggleControl,
	SelectControl,
	ColorPalette,
	BaseControl,
	RangeControl,
} from "@wordpress/components";
import { desktop, tablet, mobile } from "@wordpress/icons";

const createCell = (type = "dash", text = "") => ({ type, text });

const normalizeRowValues = (values = [], planCount) => {
	const normalized = [...values];
	while (normalized.length < planCount) {
		normalized.push(createCell());
	}
	return normalized.slice(0, planCount);
};

const createPlan = (index) => ({
	id: `plan-${Date.now()}-${index}`,
	name: `Plan ${index + 1}`,
	description: "Plan description",
	price: "$0",
	pricePeriod: "/Mo",
	oldPrice: "",
	savingsText: "",
	billingText: "",
	ctaText: "Buy now",
	ctaUrl: "#",
	badgeText: "",
	highlight: false,
	metaItems: ["Feature 1", "Feature 2"],
});

const createSection = () => ({
	id: `section-${Date.now()}`,
	title: "New section",
	open: true,
	rows: [],
});

const createRow = (planCount) => ({
	id: `row-${Date.now()}`,
	label: "New row",
	values: Array.from({ length: planCount }, () => createCell()),
});

const getActiveGroup = (planGroups, activeGroupId) =>
	planGroups.find((group) => group.id === activeGroupId) || planGroups[0];

export default function Edit({ attributes, setAttributes, clientId }) {
	const [deviceType, setDeviceType] = useState("desktop");

	const {
		blockId,
		headingText,
		subheadingText,
		linkText,
		linkUrl,
		showGuarantee,
		guaranteeText,
		activeGroupId,
		displayMode = "comparison",
		planGroups = [],
		containerMode = "full",
		containerMaxWidth,
		paddingTop,
		paddingBottom,
		backgroundColor,
		textColor,
		mutedTextColor,
		accentColor,
		borderColor,
		cardBackground,
		highlightBackground,
		cardRadius = 20,
		buttonBackground,
		buttonTextColor,
		buttonOutlineColor,
		stickyBackground,
		stickyBorderColor,
		stickyLabel,
		showSticky,
		tableStripedColor,
	} = attributes;

	if (!blockId) {
		setAttributes({ blockId: clientId });
	}

	const activeGroup = getActiveGroup(planGroups, activeGroupId);
	const activePlans = activeGroup?.plans || [];
	const activeSections = activeGroup?.featureSections || [];

	const blockProps = useBlockProps({
		className: `adaire-pricing-compare adaire-pricing-compare--editor adaire-pricing-compare--layout-${displayMode}`,
		style: {
			backgroundColor,
			color: textColor,
			paddingTop: `${paddingTop}px`,
			paddingBottom: `${paddingBottom}px`,
			"--pc-muted-text": mutedTextColor,
			"--pc-accent": accentColor,
			"--pc-border": borderColor,
			"--pc-card-bg": cardBackground,
			"--pc-highlight-bg": highlightBackground,
			"--pc-card-radius": `${cardRadius}px`,
			"--pc-button-bg": buttonBackground,
			"--pc-button-text": buttonTextColor,
			"--pc-button-outline": buttonOutlineColor,
			"--pc-sticky-bg": stickyBackground,
			"--pc-sticky-border": stickyBorderColor,
			"--pc-striped": tableStripedColor,
			"--pc-container-max-width": `${
				containerMaxWidth?.desktop?.value ?? 1200
			}${containerMaxWidth?.desktop?.unit ?? "px"}`,
			"--pc-container-max-width-tablet": `${
				containerMaxWidth?.tablet?.value ?? 100
			}${containerMaxWidth?.tablet?.unit ?? "%"}`,
			"--pc-container-max-width-mobile": `${
				containerMaxWidth?.mobile?.value ?? 100
			}${containerMaxWidth?.mobile?.unit ?? "%"}`,
		},
	});

	const updateGroup = (groupId, patch) => {
		setAttributes({
			planGroups: planGroups.map((group) =>
				group.id === groupId ? { ...group, ...patch } : group
			),
		});
	};

	const updatePlan = (groupId, index, patch) => {
		const group = getActiveGroup(planGroups, groupId);
		const plans = [...(group?.plans || [])];
		plans[index] = { ...plans[index], ...patch };
		updateGroup(groupId, { plans });
	};

	const updateSection = (groupId, sectionIndex, patch) => {
		const group = getActiveGroup(planGroups, groupId);
		const sections = [...(group?.featureSections || [])];
		sections[sectionIndex] = { ...sections[sectionIndex], ...patch };
		updateGroup(groupId, { featureSections: sections });
	};

	const updateRow = (groupId, sectionIndex, rowIndex, patch) => {
		const group = getActiveGroup(planGroups, groupId);
		const sections = [...(group?.featureSections || [])];
		const rows = [...sections[sectionIndex].rows];
		rows[rowIndex] = { ...rows[rowIndex], ...patch };
		sections[sectionIndex] = { ...sections[sectionIndex], rows };
		updateGroup(groupId, { featureSections: sections });
	};

	const addGroup = () => {
		const newGroupId = `group-${Date.now()}`;
		const newGroup = {
			id: newGroupId,
			label: "New audience",
			plans: [createPlan(0), createPlan(1), createPlan(2), createPlan(3)],
			featureSections: [createSection()],
		};
		setAttributes({
			planGroups: [...planGroups, newGroup],
			activeGroupId: newGroupId,
		});
	};

	const removeGroup = (groupId) => {
		const nextGroups = planGroups.filter((group) => group.id !== groupId);
		setAttributes({
			planGroups: nextGroups,
			activeGroupId: nextGroups[0]?.id || "",
		});
	};

	const addPlan = (groupId) => {
		const group = getActiveGroup(planGroups, groupId);
		const nextPlans = [...(group?.plans || []), createPlan(activePlans.length)];
		const nextSections = (group?.featureSections || []).map((section) => ({
			...section,
			rows: section.rows.map((row) => ({
				...row,
				values: [...normalizeRowValues(row.values, nextPlans.length - 1), createCell()],
			})),
		}));
		updateGroup(groupId, { plans: nextPlans, featureSections: nextSections });
	};

	const removePlan = (groupId, index) => {
		const group = getActiveGroup(planGroups, groupId);
		const nextPlans = (group?.plans || []).filter((_, i) => i !== index);
		const nextSections = (group?.featureSections || []).map((section) => ({
			...section,
			rows: section.rows.map((row) => ({
				...row,
				values: normalizeRowValues(
					row.values.filter((_, i) => i !== index),
					nextPlans.length
				),
			})),
		}));
		updateGroup(groupId, { plans: nextPlans, featureSections: nextSections });
	};

	const addSection = (groupId) => {
		const group = getActiveGroup(planGroups, groupId);
		updateGroup(groupId, {
			featureSections: [...(group?.featureSections || []), createSection()],
		});
	};

	const removeSection = (groupId, sectionIndex) => {
		const group = getActiveGroup(planGroups, groupId);
		const sections = (group?.featureSections || []).filter(
			(_, idx) => idx !== sectionIndex
		);
		updateGroup(groupId, { featureSections: sections });
	};

	const addRow = (groupId, sectionIndex) => {
		const group = getActiveGroup(planGroups, groupId);
		const sections = [...(group?.featureSections || [])];
		sections[sectionIndex] = {
			...sections[sectionIndex],
			rows: [
				...sections[sectionIndex].rows,
				createRow((group?.plans || []).length),
			],
		};
		updateGroup(groupId, { featureSections: sections });
	};

	const removeRow = (groupId, sectionIndex, rowIndex) => {
		const group = getActiveGroup(planGroups, groupId);
		const sections = [...(group?.featureSections || [])];
		sections[sectionIndex] = {
			...sections[sectionIndex],
			rows: sections[sectionIndex].rows.filter((_, idx) => idx !== rowIndex),
		};
		updateGroup(groupId, { featureSections: sections });
	};

	const renderCell = (cell) => {
		if (cell.type === "check") {
			return (
				<span className="pc-cell-icon pc-cell-icon--check">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
						<polyline points="20 6 9 17 4 12"></polyline>
					</svg>
				</span>
			);
		}
		if (cell.type === "cross") {
			return (
				<span className="pc-cell-icon pc-cell-icon--cross">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
						<line x1="18" y1="6" x2="6" y2="18"></line>
						<line x1="6" y1="6" x2="18" y2="18"></line>
					</svg>
				</span>
			);
		}
		if (cell.type === "text") {
			return <span className="pc-cell-text">{cell.text}</span>;
		}
		return <span className="pc-cell-text">—</span>;
	};

	const renderFeaturePreview = (cell, label, key) => {
		if (cell.type === "dash") {
			return null;
		}

		return (
			<li className="pc-feature-list__item" key={key}>
				<span
					className={`pc-feature-list__icon pc-feature-list__icon--${cell.type}`}
					aria-hidden="true"
				>
					{cell.type === "check" && (
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
							<polyline points="20 6 9 17 4 12"></polyline>
						</svg>
					)}
					{cell.type === "cross" && (
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg>
					)}
					{cell.type === "text" && <span className="pc-feature-list__bullet" />}
				</span>
				<span className="pc-feature-list__content">
					<span className="pc-feature-list__label">{label}</span>
					{cell.type === "text" && cell.text && (
						<span className="pc-feature-list__value">{cell.text}</span>
					)}
					{cell.type === "check" && cell.text && (
						<span className="pc-feature-list__value">{cell.text}</span>
					)}
				</span>
			</li>
		);
	};

	return (
		<div {...blockProps}>
			<InspectorControls group="settings">
				<PanelBody title={__("Content Defaults", "pricing-comparison-block")} initialOpen={false}>
					<TextControl
						label={__("Top label", "pricing-comparison-block")}
						value={subheadingText}
						onChange={(value) => setAttributes({ subheadingText: value })}
					/>
					<TextControl
						label={__("Heading", "pricing-comparison-block")}
						value={headingText}
						onChange={(value) => setAttributes({ headingText: value })}
					/>
					<TextControl
						label={__("Link text", "pricing-comparison-block")}
						value={linkText}
						onChange={(value) => setAttributes({ linkText: value })}
					/>
					<TextControl
						label={__("Link URL", "pricing-comparison-block")}
						value={linkUrl}
						onChange={(value) => setAttributes({ linkUrl: value })}
					/>
					<ToggleControl
						label={__("Show guarantee", "pricing-comparison-block")}
						checked={showGuarantee}
						onChange={(value) => setAttributes({ showGuarantee: value })}
					/>
					{showGuarantee && (
						<TextControl
							label={__("Guarantee text", "pricing-comparison-block")}
							value={guaranteeText}
							onChange={(value) => setAttributes({ guaranteeText: value })}
						/>
					)}
				</PanelBody>

				<PanelBody
					title={__("Audience Tabs", "pricing-comparison-block")}
					initialOpen={false}
				>
					{planGroups.map((group, idx) => (
						<div className="pc-panel-row" key={group.id}>
							<TextControl
								label={idx === 0 ? __("Tab label", "pricing-comparison-block") : ""}
								value={group.label}
								onChange={(value) =>
									updateGroup(group.id, { label: value })
								}
							/>
							<Button
								isDestructive
								onClick={() => removeGroup(group.id)}
								disabled={planGroups.length <= 1}
							>
								{__("Remove", "pricing-comparison-block")}
							</Button>
						</div>
					))}
					<Button variant="secondary" onClick={addGroup}>
						{__("Add tab", "pricing-comparison-block")}
					</Button>
				</PanelBody>

				<PanelBody
					title={__("Plans Config", "pricing-comparison-block")}
					initialOpen={true}
				>
					<SelectControl
						label={__("Active audience tab", "pricing-comparison-block")}
						value={activeGroup?.id || ""}
						options={planGroups.map((group) => ({
							label: group.label,
							value: group.id,
						}))}
						onChange={(value) => setAttributes({ activeGroupId: value })}
					/>
					{activePlans.map((plan, index) => (
						<details className="pc-panel-card" key={plan.id} style={{ border: '1px solid #e0e0e0', padding: '12px', marginBottom: '12px', borderRadius: '4px' }}>
							<summary style={{ fontWeight: 600, cursor: 'pointer', display: 'list-item', outline: 'none' }}>
								{plan.name || __("Plan", "pricing-comparison-block")} {index + 1}
							</summary>
							<div style={{ paddingTop: '12px' }}>
								<ToggleControl
									label={__("Highlight plan", "pricing-comparison-block")}
									checked={plan.highlight}
									onChange={(value) =>
										updatePlan(activeGroup.id, index, { highlight: value })
									}
								/>
								<TextareaControl
									label={__("Meta items (one per line)", "pricing-comparison-block")}
									value={(plan.metaItems || []).join("\n")}
									onChange={(value) =>
										updatePlan(activeGroup.id, index, {
											metaItems: value.split("\n"),
										})
									}
								/>
								<Button
									isDestructive
									onClick={() => removePlan(activeGroup.id, index)}
									disabled={activePlans.length <= 1}
								>
									{__("Remove plan", "pricing-comparison-block")}
								</Button>
							</div>
						</details>
					))}
					<Button variant="secondary" onClick={() => addPlan(activeGroup.id)}>
						{__("Add plan", "pricing-comparison-block")}
					</Button>
				</PanelBody>

				{/* Comparison Table settings moved inline to the canvas editing area */}

				<PanelBody
					title={__("Layout Settings", "pricing-comparison-block")}
					initialOpen={false}
				>
					<SelectControl
						label={__("Comparison layout", "pricing-comparison-block")}
						value={displayMode}
						options={[
							{
								label: __("Table comparison", "pricing-comparison-block"),
								value: "comparison",
							},
							{
								label: __("Feature cards", "pricing-comparison-block"),
								value: "cards",
							},
						]}
						onChange={(value) => setAttributes({ displayMode: value })}
					/>
					<ButtonGroup>
						{[
							{ label: __("Full Width", "pricing-comparison-block"), value: "full" },
							{
								label: __("Constrained", "pricing-comparison-block"),
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
								style={{ marginTop: "16px", marginBottom: "8px", fontWeight: 600 }}
							>
								{__("Max Width", "pricing-comparison-block")}
							</p>
							<ButtonGroup style={{ marginBottom: "12px" }}>
								<Button
									icon={desktop}
									isPrimary={deviceType === "desktop"}
									onClick={() => setDeviceType("desktop")}
									label={__("Desktop", "pricing-comparison-block")}
								/>
								<Button
									icon={tablet}
									isPrimary={deviceType === "tablet"}
									onClick={() => setDeviceType("tablet")}
									label={__("Tablet", "pricing-comparison-block")}
								/>
								<Button
									icon={mobile}
									isPrimary={deviceType === "mobile"}
									onClick={() => setDeviceType("mobile")}
									label={__("Mobile", "pricing-comparison-block")}
								/>
							</ButtonGroup>
							<div style={{ display: "flex", gap: "8px" }}>
								<TextControl
									type="number"
									value={
										containerMaxWidth?.[deviceType]?.value ??
										(deviceType === "desktop" ? 1200 : 100)
									}
									onChange={(value) =>
										setAttributes({
											containerMaxWidth: {
												...(containerMaxWidth || {}),
												[deviceType]: {
													...(containerMaxWidth?.[deviceType] || {}),
													value: Number(value),
												},
											},
										})
									}
								/>
								<ButtonGroup>
									{["px", "%", "rem", "vw"].map((unit) => (
										<Button
											key={unit}
											isPrimary={
												(containerMaxWidth?.[deviceType]?.unit ??
													(deviceType === "desktop" ? "px" : "%")) === unit
											}
											isSecondary={
												(containerMaxWidth?.[deviceType]?.unit ??
													(deviceType === "desktop" ? "px" : "%")) !== unit
											}
											onClick={() =>
												setAttributes({
													containerMaxWidth: {
														...(containerMaxWidth || {}),
														[deviceType]: {
															...(containerMaxWidth?.[deviceType] || {}),
															unit,
														},
													},
												})
											}
										>
											{unit}
										</Button>
									))}
								</ButtonGroup>
							</div>
						</>
					)}
				</PanelBody>

				<PanelBody
					title={__("Sticky Bar", "pricing-comparison-block")}
					initialOpen={false}
				>
					<ToggleControl
						label={__("Show sticky bar", "pricing-comparison-block")}
						checked={showSticky}
						onChange={(value) => setAttributes({ showSticky: value })}
					/>
					{showSticky && (
						<TextControl
							label={__("Sticky label", "pricing-comparison-block")}
							value={stickyLabel}
							onChange={(value) => setAttributes({ stickyLabel: value })}
						/>
					)}
				</PanelBody>
			</InspectorControls>

			<InspectorControls group="styles">
				<PanelBody
					title={__("Colors", "pricing-comparison-block")}
					initialOpen={true}
				>
					<BaseControl label={__("Background", "pricing-comparison-block")}>
						<ColorPalette
							value={backgroundColor}
							onChange={(value) => setAttributes({ backgroundColor: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Text", "pricing-comparison-block")}>
						<ColorPalette
							value={textColor}
							onChange={(value) => setAttributes({ textColor: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Muted Text", "pricing-comparison-block")}>
						<ColorPalette
							value={mutedTextColor}
							onChange={(value) => setAttributes({ mutedTextColor: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Accent", "pricing-comparison-block")}>
						<ColorPalette
							value={accentColor}
							onChange={(value) => setAttributes({ accentColor: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Borders", "pricing-comparison-block")}>
						<ColorPalette
							value={borderColor}
							onChange={(value) => setAttributes({ borderColor: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Card Background", "pricing-comparison-block")}>
						<ColorPalette
							value={cardBackground}
							onChange={(value) => setAttributes({ cardBackground: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Highlight Background", "pricing-comparison-block")}>
						<ColorPalette
							value={highlightBackground}
							onChange={(value) => setAttributes({ highlightBackground: value })}
						/>
					</BaseControl>
					<RangeControl
						label={__("Card Radius", "pricing-comparison-block")}
						value={cardRadius}
						onChange={(value) => setAttributes({ cardRadius: value ?? 20 })}
						min={0}
						max={40}
					/>
					<BaseControl label={__("Button Background", "pricing-comparison-block")}>
						<ColorPalette
							value={buttonBackground}
							onChange={(value) => setAttributes({ buttonBackground: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Button Text", "pricing-comparison-block")}>
						<ColorPalette
							value={buttonTextColor}
							onChange={(value) => setAttributes({ buttonTextColor: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Button Outline", "pricing-comparison-block")}>
						<ColorPalette
							value={buttonOutlineColor}
							onChange={(value) => setAttributes({ buttonOutlineColor: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Sticky Background", "pricing-comparison-block")}>
						<ColorPalette
							value={stickyBackground}
							onChange={(value) => setAttributes({ stickyBackground: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Sticky Border", "pricing-comparison-block")}>
						<ColorPalette
							value={stickyBorderColor}
							onChange={(value) => setAttributes({ stickyBorderColor: value })}
						/>
					</BaseControl>
					<BaseControl label={__("Striped Row", "pricing-comparison-block")}>
						<ColorPalette
							value={tableStripedColor}
							onChange={(value) => setAttributes({ tableStripedColor: value })}
						/>
					</BaseControl>
				</PanelBody>
			</InspectorControls>

			<div className={`pc-container ${containerMode === "constrained" ? "is-constrained" : ""}`}>
				<div className="pc-header">
					<RichText
						tagName="p"
						className="pc-subheading"
						value={subheadingText}
						onChange={(value) => setAttributes({ subheadingText: value })}
						placeholder={__("Top label", "pricing-comparison-block")}
					/>
					<RichText
						tagName="h2"
						className="pc-heading"
						value={headingText}
						onChange={(value) => setAttributes({ headingText: value })}
						placeholder={__("Heading", "pricing-comparison-block")}
					/>
					<a className="pc-link" href={linkUrl}>
						{linkText}
					</a>
					<div className="pc-tabs">
						{planGroups.map((group) => (
							<Button
								key={group.id}
								className="pc-tab"
								isPrimary={group.id === activeGroupId}
								isSecondary={group.id !== activeGroupId}
								onClick={() => setAttributes({ activeGroupId: group.id })}
							>
								{group.label}
							</Button>
						))}
					</div>
					{showGuarantee && (
						<p className="pc-guarantee">{guaranteeText}</p>
					)}
				</div>

				<div className="pc-group is-active" style={{ "--pc-plan-columns": activePlans.length }}>
					<div className="pc-cards">
						{activePlans.map((plan, index) => (
							<div
								className={`pc-card ${plan.highlight ? "is-highlight" : ""}`}
								key={plan.id}
							>
								<div className="pc-card__header">
									<RichText
										tagName="span"
										className="pc-card__title"
										value={plan.name}
										onChange={(value) => updatePlan(activeGroup.id, index, { name: value })}
										placeholder={__("Plan name", "pricing-comparison-block")}
									/>
									{plan.badgeText && (
										<RichText
											tagName="span"
											className="pc-card__badge"
											value={plan.badgeText}
											onChange={(value) => updatePlan(activeGroup.id, index, { badgeText: value })}
											placeholder={__("Badge", "pricing-comparison-block")}
										/>
									)}
								</div>
								<RichText
									tagName="p"
									className="pc-card__description"
									value={plan.description}
									onChange={(value) => updatePlan(activeGroup.id, index, { description: value })}
									placeholder={__("Description", "pricing-comparison-block")}
								/>
								<div className="pc-card__price">
									<RichText
										tagName="span"
										className="pc-card__amount"
										value={plan.price}
										onChange={(value) => updatePlan(activeGroup.id, index, { price: value })}
										placeholder="$0"
									/>
									<RichText
										tagName="span"
										className="pc-card__period"
										value={plan.pricePeriod}
										onChange={(value) => updatePlan(activeGroup.id, index, { pricePeriod: value })}
										placeholder="/Mo"
									/>
								</div>
								{plan.oldPrice && (
									<div className="pc-card__savings">
										<RichText
											tagName="span"
											className="pc-card__old"
											value={plan.oldPrice}
											onChange={(value) => updatePlan(activeGroup.id, index, { oldPrice: value })}
										/>
										{plan.savingsText && (
											<RichText
												tagName="span"
												className="pc-card__save"
												value={plan.savingsText}
												onChange={(value) => updatePlan(activeGroup.id, index, { savingsText: value })}
											/>
										)}
									</div>
								)}
								<RichText
									tagName="p"
									className="pc-card__billing"
									value={plan.billingText}
									onChange={(value) => updatePlan(activeGroup.id, index, { billingText: value })}
									placeholder={__("Billed annually", "pricing-comparison-block")}
								/>
								<div className={`pc-card__button ${plan.highlight ? "is-solid" : ""}`}>
									<RichText
										tagName="span"
										value={plan.ctaText}
										onChange={(value) => updatePlan(activeGroup.id, index, { ctaText: value })}
										placeholder={__("Button text", "pricing-comparison-block")}
										withoutInteractiveFormatting
									/>
								</div>
								<ul className="pc-card__meta">
									{(plan.metaItems || []).map((item, metaIndex) => (
										<li key={metaIndex}>{item}</li>
									))}
								</ul>
								{displayMode === "cards" && (
									<div className="pc-card__details">
										{activeSections.map((section) => {
											const featureItems = section.rows
												.map((row, rowIndex) =>
													renderFeaturePreview(
														normalizeRowValues(row.values, activePlans.length)[index] ||
															createCell(),
														row.label,
														`${section.id}-${row.id}-${rowIndex}`
													)
												)
												.filter(Boolean);

											if (!featureItems.length) {
												return null;
											}

											return (
												<div className="pc-feature-section" key={section.id}>
													<h3 className="pc-feature-section__title">
														{section.title}
													</h3>
													<ul className="pc-feature-list">{featureItems}</ul>
												</div>
											);
										})}
									</div>
								)}
							</div>
						))}
					</div>

					<div className={`pc-comparison ${displayMode === "cards" ? "pc-comparison--editor-panel" : ""}`}>
						{displayMode === "cards" && (
							<div className="pc-comparison__editor-note">
								{__("Feature cards are shown above. Use the editor below to manage shared feature rows and section content.", "pricing-comparison-block")}
							</div>
						)}
						{activeSections.map((section, sectionIndex) => (
							<div
								key={section.id}
								className={`pc-section ${section.open ? "is-open" : ""}`}
								style={{ position: 'relative' }}
							>
								<button
									type="button"
									className="pc-section__header"
									onClick={() =>
										updateSection(activeGroup.id, sectionIndex, {
											open: !section.open,
										})
									}
								>
									<RichText
										tagName="span"
										value={section.title}
										onChange={(value) => updateSection(activeGroup.id, sectionIndex, { title: value })}
										style={{ display: "inline-block", width: "100%", textAlign: "left" }}
										onClick={(e) => e.stopPropagation()}
									/>
									<span className="pc-section__icon">+</span>
								</button>
								<div style={{ position: 'absolute', top: '16px', right: '16px', zIndex: 10 }}>
									<button
										className="pc-editor-remove-section"
										onClick={() => removeSection(activeGroup.id, sectionIndex)}
										title={__("Remove section", "pricing-comparison-block")}
									>
										{__("Remove Section", "pricing-comparison-block")}
									</button>
								</div>
								<div className="pc-section__body">
									<div className="pc-row pc-row--header">
										<div className="pc-cell pc-cell--label" />
										{activePlans.map((plan) => (
											<div className="pc-cell pc-cell--plan" key={plan.id}>
												{plan.name}
											</div>
										))}
									</div>
									{section.rows.map((row, rowIndex) => (
										<div className="pc-row pc-row--editable" key={row.id}>
											<div className="pc-cell pc-cell--label" style={{ display: 'flex', alignItems: 'center', gap: '12px' }}>
												<button
													className="pc-editor-remove-row"
													onClick={() => removeRow(activeGroup.id, sectionIndex, rowIndex)}
													title={__("Remove row", "pricing-comparison-block")}
												>
													✕
												</button>
												<RichText
													tagName="span"
													value={row.label}
													onChange={(value) => updateRow(activeGroup.id, sectionIndex, rowIndex, { label: value })}
													placeholder={__("Row label", "pricing-comparison-block")}
													style={{ flexGrow: 1 }}
												/>
											</div>
											{normalizeRowValues(row.values, activePlans.length).map(
												(cell, cellIndex) => (
													<div className="pc-cell" key={cellIndex} style={{ display: 'flex', flexDirection: 'column', gap: '6px', alignItems: 'center', position: 'relative' }}>
														<select
															className="pc-editor-select"
															value={cell.type}
															onChange={(e) => {
																const values = normalizeRowValues(row.values, activePlans.length);
																values[cellIndex] = { ...values[cellIndex], type: e.target.value };
																updateRow(activeGroup.id, sectionIndex, rowIndex, { values });
															}}
														>
															<option value="text">{__("Text", "pricing-comparison-block")}</option>
															<option value="check">{__("Check ✓", "pricing-comparison-block")}</option>
															<option value="cross">{__("Cross ✕", "pricing-comparison-block")}</option>
															<option value="dash">{__("Dash —", "pricing-comparison-block")}</option>
														</select>
														{cell.type === "text" ? (
															<RichText
																tagName="span"
																className="pc-cell-text"
																value={cell.text}
																onChange={(value) => {
																	const values = normalizeRowValues(row.values, activePlans.length);
																	values[cellIndex] = { ...values[cellIndex], text: value };
																	updateRow(activeGroup.id, sectionIndex, rowIndex, { values });
																}}
																placeholder={__("Text value", "pricing-comparison-block")}
															/>
														) : (
															renderCell(cell)
														)}
													</div>
												)
											)}
										</div>
									))}
									<div className="pc-editor-add-row-wrapper">
										<button className="pc-editor-add-row" onClick={() => addRow(activeGroup.id, sectionIndex)}>
											{__("+ Add Row", "pricing-comparison-block")}
										</button>
									</div>
								</div>
							</div>
						))}
						<div className="pc-editor-add-section-wrapper">
							<button className="pc-editor-add-section" onClick={() => addSection(activeGroup.id)}>
								{__("+ Add New Section", "pricing-comparison-block")}
							</button>
						</div>
					</div>

					{showSticky && (
						<div className="pc-sticky" style={{ "--pc-plan-columns": activePlans.length }}>
							<div className="pc-sticky__label">{stickyLabel}</div>
							<div className="pc-sticky__plans">
								{activePlans.map((plan) => (
									<div className="pc-sticky__plan" key={plan.id}>
										<div className="pc-sticky__price">
											{plan.price}
											{plan.pricePeriod}
										</div>
										<div className="pc-sticky__button wp-element-button">{plan.ctaText}</div>
									</div>
								))}
							</div>
						</div>
					)}
				</div>
			</div>
		</div>
	);
}

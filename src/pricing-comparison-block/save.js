import { useBlockProps, RichText } from "@wordpress/block-editor";

const createCell = (type = "dash", text = "") => ({ type, text });

const normalizeRowValues = (values = [], planCount) => {
	const normalized = [...values];
	while (normalized.length < planCount) {
		normalized.push(createCell());
	}
	return normalized.slice(0, planCount);
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

const renderFeatureEntry = (cell, label, key) => {
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

export default function save({ attributes }) {
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

	const activeGroup =
		planGroups.find((group) => group.id === activeGroupId) || planGroups[0];
	const activePlans = activeGroup?.plans || [];
	const activeSections = activeGroup?.featureSections || [];

	const blockProps = useBlockProps.save({
		className: `adaire-pricing-compare adaire-pricing-compare--layout-${displayMode}`,
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
		"data-block-id": blockId,
	});

	return (
		<div {...blockProps}>
			<div
				className={`pc-container ${
					containerMode === "constrained" ? "is-constrained" : ""
				}`}
			>
				<div className="pc-header">
					<RichText.Content
						tagName="p"
						className="pc-subheading"
						value={subheadingText}
					/>
					<RichText.Content
						tagName="h2"
						className="pc-heading"
						value={headingText}
					/>
					{linkText && (
						<a className="pc-link" href={linkUrl || "#"}>
							{linkText}
						</a>
					)}
					<div className="pc-tabs" data-active-tab={activeGroup?.id || ""}>
						{planGroups.map((group) => (
							<button
								className={`pc-tab ${
									group.id === activeGroupId ? "is-active" : ""
								}`}
								type="button"
								data-tab={group.id}
								key={group.id}
							>
								{group.label}
							</button>
						))}
					</div>
					{showGuarantee && (
						<p className="pc-guarantee">{guaranteeText}</p>
					)}
				</div>

				{planGroups.map((group) => {
					const plans = group.plans || [];
					const isActive = group.id === (activeGroup?.id || activeGroupId);
					return (
						<div
							className={`pc-group ${isActive ? "is-active" : ""}`}
							data-group-id={group.id}
							key={group.id}
							style={{ "--pc-plan-columns": plans.length }}
						>
							<div className="pc-cards">
								{plans.map((plan) => (
									<div
										className={`pc-card ${plan.highlight ? "is-highlight" : ""}`}
										key={plan.id}
									>
										<div className="pc-card__header">
											<span className="pc-card__title">{plan.name}</span>
											{plan.badgeText && (
												<span className="pc-card__badge">{plan.badgeText}</span>
											)}
										</div>
										<p className="pc-card__description">{plan.description}</p>
										<div className="pc-card__price">
											<span className="pc-card__amount">{plan.price}</span>
											<span className="pc-card__period">{plan.pricePeriod}</span>
										</div>
										{plan.oldPrice && (
											<div className="pc-card__savings">
												<span className="pc-card__old">{plan.oldPrice}</span>
												{plan.savingsText && (
													<span className="pc-card__save">
														{plan.savingsText}
													</span>
												)}
											</div>
										)}
										<p className="pc-card__billing">{plan.billingText}</p>
										<a
											className={`pc-card__button wp-element-button ${
												plan.highlight ? "is-solid" : ""
											}`}
											href={plan.ctaUrl || "#"}
										>
											{plan.ctaText}
										</a>
										<ul className="pc-card__meta">
											{(plan.metaItems || []).map((item, metaIndex) => (
												<li key={metaIndex}>{item}</li>
											))}
										</ul>
										{displayMode === "cards" && (
											<div className="pc-card__details">
												{(group.featureSections || []).map((section) => {
													const featureItems = section.rows
														.map((row, rowIndex) =>
															renderFeatureEntry(
																normalizeRowValues(row.values, plans.length)[
																	plans.findIndex((currentPlan) => currentPlan.id === plan.id)
																] || createCell(),
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

							{displayMode === "comparison" && (
								<div className="pc-comparison">
								{(group.featureSections || []).map((section) => (
									<div
										key={section.id}
										className={`pc-section ${
											section.open ? "is-open" : ""
										}`}
									>
										<button
											type="button"
											className="pc-section__header"
											data-section-toggle
										>
											<span>{section.title}</span>
											<span className="pc-section__icon">+</span>
										</button>
										<div className="pc-section__body">
											<div className="pc-row pc-row--header">
												<div className="pc-cell pc-cell--label" />
												{plans.map((plan) => (
													<div className="pc-cell pc-cell--plan" key={plan.id}>
														{plan.name}
													</div>
												))}
											</div>
											{section.rows.map((row) => (
												<div className="pc-row" key={row.id}>
													<div className="pc-cell pc-cell--label">
														{row.label}
													</div>
													{normalizeRowValues(row.values, plans.length).map(
														(cell, cellIndex) => (
															<div className="pc-cell" key={cellIndex}>
																{renderCell(cell)}
															</div>
														)
													)}
												</div>
											))}
										</div>
									</div>
								))}
								</div>
							)}

							{showSticky && (
								<div className="pc-sticky" style={{ "--pc-plan-columns": plans.length }}>
									<div className="pc-sticky__label">{stickyLabel}</div>
									<div className="pc-sticky__plans">
										{plans.map((plan) => (
											<div className="pc-sticky__plan" key={plan.id}>
												<div className="pc-sticky__price">
													{plan.price}
													{plan.pricePeriod}
												</div>
												<a
													className="pc-sticky__button wp-element-button"
													href={plan.ctaUrl || "#"}
												>
													{plan.ctaText}
												</a>
											</div>
										))}
									</div>
								</div>
							)}
						</div>
					);
				})}
			</div>
		</div>
	);
}

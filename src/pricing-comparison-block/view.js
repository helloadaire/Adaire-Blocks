document.addEventListener("DOMContentLoaded", () => {
	const blocks = document.querySelectorAll(".adaire-pricing-compare");

	blocks.forEach((block) => {
		const tabs = block.querySelectorAll(".pc-tab");
		const groups = block.querySelectorAll(".pc-group");

		const setActiveGroup = (groupId) => {
			tabs.forEach((tab) => {
				tab.classList.toggle("is-active", tab.dataset.tab === groupId);
			});
			groups.forEach((group) => {
				group.classList.toggle("is-active", group.dataset.groupId === groupId);
			});
		};

		const defaultGroup =
			block.querySelector(".pc-tabs")?.dataset.activeTab ||
			groups[0]?.dataset.groupId;

		if (defaultGroup) {
			setActiveGroup(defaultGroup);
		}

		tabs.forEach((tab) => {
			tab.addEventListener("click", () => {
				setActiveGroup(tab.dataset.tab);
			});
		});

		const sectionHeaders = block.querySelectorAll(".pc-section__header");
		sectionHeaders.forEach((header) => {
			header.addEventListener("click", () => {
				const section = header.closest(".pc-section");
				if (!section) return;
				section.classList.toggle("is-open");
			});
		});
	});
});

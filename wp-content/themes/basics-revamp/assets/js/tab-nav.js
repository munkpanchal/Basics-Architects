import AOS from "aos";

const tabNavs = document.querySelectorAll("[data-tab-nav]");
const tabTargetBoxes = document.querySelectorAll(".tab-target-box");

tabNavs?.forEach((tabNav) => {
    tabNav.addEventListener("click", () => {
        const activeElemId = tabNav.getAttribute("data-tab-target");
        const activeElem = document.getElementById(activeElemId);

        // Remove 'active' class from all target boxes and navigation tabs
        tabTargetBoxes.forEach((tabTarget) => {
            tabTarget.classList.remove("active");
        });
        tabNavs.forEach((tab) => {
            tab.classList.remove("active");
        });

        // Add 'active' class to the clicked navigation tab and target box
        activeElem.classList.add("active");
        tabNav.classList.add("active");

        // Refresh AOS to reinitialize animations after changing active elements
        AOS.refresh();
    });
});

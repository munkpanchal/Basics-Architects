const tabNavs = document.querySelectorAll("[data-tab-nav]");
const tabTargetBoxes = document.querySelectorAll(".tab-target-box");

tabNavs.forEach((tabNav) => {
    tabNav.addEventListener("click", () => {
        const activeElemId = tabNav.getAttribute("data-tab-target");
        const activeElem = document.getElementById(activeElemId);

        tabTargetBoxes.forEach((tabTarget) => {
            if (tabTarget.classList.contains("active")) {
                tabTarget.classList.remove("active");
            }
        });
        tabNavs.forEach((tab) => {
            if (tab.classList.contains("active")) {
                tab.classList.remove("active");
            }
        });

        activeElem.classList.add("active");
        tabNav.classList.add("active");
    });
});

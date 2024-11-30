import AOS from "aos";

const projects = document.querySelectorAll(".project");

const tabNavs = document.querySelectorAll("[data-tab-nav-project]");
const tabBanners = document.querySelectorAll("[data-img]");
const tabBannerNone = document.querySelector("[data-img-none]");
const tabBannersContent = document.querySelectorAll("[data-content]");
const tabBannerNoneContent = document.querySelector("[data-content-none]");

let newTimeout;

// Show all projects by default on page load
projects.forEach((project) => {
    project.classList.add("active");
    AOS.refresh(); // Refresh AOS after adding 'active' class initially
});

tabNavs?.forEach((tabNav) => {
    tabNav.addEventListener("click", (e) => {
        const currentActive = tabNav.getAttribute("data-tab-target");

        tabBanners?.forEach((tabBanner) => {
            let innerActive = tabBanner.getAttribute("data-image-id");
            if (innerActive == currentActive) {
                if (!tabBanner.classList.contains("active")) {
                    tabBanner.classList.add("active");
                    AOS.refresh(); // Refresh AOS after changing image category
                } else {
                    tabBanners?.forEach((tabBanner) => {
                        if (tabBanner.classList.contains("active")) {
                            tabBanner.classList.remove("active");
                            AOS.refresh(); // Refresh AOS after changing image category
                        }
                    });
                    console.log(tabBanner.classList);
                    tabBannerNone.classList.add("active");
                }
            }
        });
        tabBannersContent?.forEach((tbc) => {
            let innerActive = tbc.getAttribute("data-content-id");
            // console.log(innerActive);
            if (innerActive == currentActive) {
                if (!tbc.classList.contains("active")) {
                    tabBannersContent?.forEach((tbci) => {
                        let innerActive = tbci.getAttribute("data-content-id");
                        if (innerActive !== currentActive) {
                            if (tbci.classList.contains("active")) {
                                tbci.classList.remove("active");
                            }
                        }
                    });
                    tbc.classList.add("active");
                    AOS.refresh(); // Refresh AOS after changing image category
                } else {
                    tabBannersContent?.forEach((tbci) => {
                        if (tbci.classList.contains("active")) {
                            tbci.classList.remove("active");
                            AOS.refresh(); // Refresh AOS after changing image category
                        }
                    });
                    tabBannerNoneContent.classList.add("active");
                }
            }
        });

        // Toggle the active class for the clicked tab
        if (tabNav.classList.contains("active")) {
            tabNav.classList.remove("active");

            // Show all projects when no tab is active
            projects.forEach((project) => {
                project.classList.add("active");
            });
            AOS.refresh(); // Refresh AOS after showing all projects
        } else {
            tabNavs.forEach((tab) => {
                tab.classList.remove("active");
            });

            // Clear all project active states
            projects.forEach((project) => {
                project.classList.remove("active");
            });

            clearTimeout(newTimeout);

            // Set new active state after delay
            newTimeout = setTimeout(() => {
                projects.forEach((project) => {
                    if (project.dataset.cat === currentActive) {
                        project.classList.add("active");
                    }
                });
                AOS.refresh(); // Refresh AOS after adding 'active' class to filtered projects
            }, 50);

            tabNav.classList.add("active");
        }
    });
});

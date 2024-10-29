import AOS from "aos";

const projects = document.querySelectorAll(".media-wrap");

const tabNavs = document.querySelectorAll("[data-tab-nav]");
let newTimeout;

// Show all projects by default on page load
projects.forEach((project) => {
    project.classList.add("active");
    AOS.refresh(); // Refresh AOS after adding 'active' class initially
});

tabNavs?.forEach((tabNav) => {
    tabNav.addEventListener("click", (e) => {
        const currentActive = tabNav.getAttribute("data-tab-target");

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
                    if (project.dataset.category === currentActive) {
                        project.classList.add("active");
                    }
                });
                AOS.refresh(); // Refresh AOS after adding 'active' class to filtered projects
            }, 50);

            tabNav.classList.add("active");
        }
    });
});

const projects = document.querySelectorAll(".project");
const tabNavs = document.querySelectorAll("[data-tab-nav-project]");
let newTimeout;
tabNavs?.forEach((tabNav) => {
    tabNav.addEventListener("click", (e) => {
        tabNavs.forEach((tab) => {
            if (tab.classList.contains("active")) {
                tab.classList.remove("active");
            }
        });
        const currentActive = tabNav.getAttribute("data-tab-target");
        projects.forEach((project) => {
            if (project.classList.contains("active")) {
                project.classList.remove("active");
            }
        });

        clearTimeout(newTimeout);

        newTimeout = setTimeout(() => {
            if (currentActive == "all") {
                projects.forEach((project) => {
                    project.classList.add("active");
                });
            } else {
                projects.forEach((project) => {
                    if (project.dataset.cat == currentActive) {
                        project.classList.add("active");
                    }
                });
            }
        }, 50);

        tabNav.classList.add("active");
    });
});

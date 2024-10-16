const projects = document.querySelectorAll(".project");
const mediaWraps = document.querySelectorAll(".media-wrap");

const handleIntersection = (entries, observer) => {
    entries.forEach((entry) => {
        const element = entry.target;
        if (entry.isIntersecting) {
            setTimeout(() => {
                element.classList.add("in-view");
            }, 150);
        } else {
            setTimeout(() => {
                element.classList.remove("in-view");
            }, 150);
        }
    });
};

const observer = new IntersectionObserver(handleIntersection, {
    rootMargin: "0px", // Adjust as needed
    threshold: 0.1, // Adjust as needed
});

projects?.forEach((element) => observer.observe(element));
mediaWraps?.forEach((element) => observer.observe(element));

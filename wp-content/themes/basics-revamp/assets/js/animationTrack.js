const fadeBoxes = document.querySelectorAll(".fade-box");

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
    threshold: 0.6, // Adjust as needed
});

fadeBoxes?.forEach((element) => observer.observe(element));

const footerContents = document.querySelectorAll(".footer-content");
const footerHeading = document.querySelectorAll(".footer-heading");

footerHeading?.forEach((val) => {
    val.addEventListener("click", () => {
        const currentActive = val.getAttribute("data-target");

        if (val.classList.contains("active")) {
            val.classList.remove("active");
        } else {
            val.classList.add("active");
        }
        const currentElem = document.querySelector(`[${currentActive}]`);

        if (currentElem.classList.contains("active")) {
            currentElem.classList.remove("active");
            return;
        }
        footerContents.forEach((content) => {
            if (content.classList.contains("active")) {
                content.classList.remove("active");
            }
        });
        currentElem.classList.add("active");
    });
});

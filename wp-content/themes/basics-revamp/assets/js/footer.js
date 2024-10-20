const footerContents = document.querySelectorAll(".footer-content");
const footerHeading = document.querySelectorAll(".footer-heading");

footerHeading?.forEach((val) => {
    val.addEventListener("click", () => {
        const currentActive = val.getAttribute("data-target");
        console.log(currentActive);
        footerContents.forEach((content) => {
            if (content.classList.contains("active")) {
                content.classList.remove("active");
            }
        });
        const currentElem = document.querySelector(`[${currentActive}]`);
        currentElem.classList.add("active");
    });
});

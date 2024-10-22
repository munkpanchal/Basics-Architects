const footerContents = document.querySelectorAll(".footer-content");
const footerHeading = document.querySelectorAll(".footer-heading");
const footerTop = document.querySelector(".footer-top");

footerHeading?.forEach((val) => {
    val.addEventListener("click", () => {
        const currentActive = val.getAttribute("data-target");
        const currentElem = document.querySelector(`[${currentActive}]`);

        // Toggle the 'active' class on the clicked heading and its corresponding content
        val.classList.toggle("active");
        currentElem.classList.toggle("active");

        // // Update the 'one-active' class on the footerTop based on the number of active footerContents
        // const hasActiveContent = footerContents.some((content) => content.classList.contains("active"));
        // footerTop.classList.toggle("one-active", hasActiveContent);
    });
});

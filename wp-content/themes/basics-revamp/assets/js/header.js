const header = document.querySelector(".header");
const hamburger = document.querySelector(".hamburger");
const dropdown = document.querySelector(".dropdown");

hamburger?.addEventListener("click", (e) => {
    if (header.classList.contains("active")) {
        dropdown.classList.remove("active");
        hamburger.classList.remove("active");
        header.classList.remove("active");
    } else {
        dropdown.classList.add("active");
        hamburger.classList.add("active");
        header.classList.add("active");
    }
});

window.addEventListener("resize", (e) => {
    if (header.classList.contains("active")) {
        header.classList.remove("active");
    }
    if (dropdown.classList.contains("active")) {
        dropdown.classList.remove("active");
    }
    if (dropdown.classList.contains("active")) {
        dropdown.classList.remove("active");
    }
});

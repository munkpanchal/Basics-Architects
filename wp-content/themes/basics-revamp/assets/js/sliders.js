import "@splidejs/splide/css";
import Splide from "@splidejs/splide";

const slider = document.querySelector(".splide");

if (Splide && slider) {
    if (document.querySelector("#studio-slider")) {
        const slide1 = new Splide("#studio-slider", {
            type: "loop",
            perPage: 1,
            perMove: 1,
            interval: 3000,
            // arrows: false,
            pagination: false,
            autoplay: true,
            speed: 300,
            gap: 16,
            breakpoints: {
                640: {
                    perPage: 1,
                },
            },
        }).mount();
    }
    if (document.querySelector("#testimonial-slider")) {
        const slide2 = new Splide("#testimonial-slider", {
            type: "loop",
            perPage: 5,
            perMove: 1,
            interval: 2000,
            // arrows: false,
            pagination: false,
            autoplay: true,
            speed: 300,
            gap: 16,
            breakpoints: {
                640: {
                    perPage: 2,
                },
                1024: {
                    perPage: 4,
                },
            },
        }).mount();
    }
}

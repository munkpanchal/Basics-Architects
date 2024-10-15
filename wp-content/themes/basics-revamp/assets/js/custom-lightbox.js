import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

if (Fancybox) {
    Fancybox.bind('[data-fancybox="gallery"]', {
        Thumbs: {
            type: "modern",
        },
    });
    Fancybox.bind('[data-fancybox="commercial-gallery"]', {
        Thumbs: {
            type: "modern",
        },
    });
}

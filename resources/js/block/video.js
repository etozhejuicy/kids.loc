import Swiper from "swiper/bundle";
import "swiper/css";

class Video {
    constructor() {
        this.events();
    }

    events() {
        this.swiper();
    }

    swiper() {
        if ($(".section-video-swiper").length) {
            var swiperVideo = new Swiper(".swiper-video", {
                slidesPerView: 1,
                spaceBetween: 100,
                clickable: true,
                allowTouchMove: true,
                grabCursor: true,
                pagination: {
                    el: ".section-video .video-pagination",
                    type: "bullets",
                },
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
            });
            setTimeout(function () {
                if (swiperVideo.update) {
                    swiperVideo.update();
                }
            }, 500);
        }
    }
}

new Video();

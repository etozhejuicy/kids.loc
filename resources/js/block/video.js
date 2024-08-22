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
                preventClicks: true,
                preventClicksPropagation: true,
                slidesPerView: 1,
                allowTouchMove: true,
                grabCursor: true,
                pagination: {
                    el: ".section-video .video-pagination",
                    type: "bullets",
                    clickable: true,
                },
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: true,
                },
                on: {
                    paginationClick: function (swiperVideo, e) {
                        e.preventDefault();
                        e.stopPropagation();
                        swiperVideo.autoplay.stop();
                    },
                    click: function (swiperVideo, e) {
                        e.preventDefault();
                        e.stopPropagation();
                        swiperVideo.autoplay.stop();
                    },
                }
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

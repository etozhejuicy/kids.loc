import Swiper from "swiper/bundle";
import "swiper/css";

import "../../modules/tab";

class Post {
    constructor() {
        this.events();
    }

    events() {
        this.swipers();
    }

    swipers() {
        if ($(".swiper-indicators").length) {
            var swiperIndicators = new Swiper(".swiper-indicators", {
                spaceBetween: 10,
                slidesPerView: 5,
                freeMode: true,
                watchSlidesProgress: true,
            });
        }

        if ($(".swiper-cover").length) {
            var swiperCover = new Swiper(".swiper-cover", {
                slidesPerView: 1,
                spaceBetween: 0,
                allowTouchMove: true,
                grabCursor: true,
                loop: true,
                thumbs: {
                    swiper: swiperIndicators,
                },
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
            });
        }

        if ($(".swiper-photos").length) {
            var swiperPhotos = new Swiper(".swiper-photos", {
                slidesPerView: "auto",
                spaceBetween: -1,
                scrollbar: {
                    el: ".photos-scrollbar",
                    draggable: true,
                    dragSize: "auto",
                    hide: false,
                    snapOnRelease: true,
                },
                navigation: {
                    nextEl: ".photos-btn-next",
                    prevEl: ".photos-btn-prev",
                },
                allowTouchMove: true,
                grabCursor: true,
            });
            setTimeout(function () {
                swiperPhotos.update();
            }, 500);
        }

        if ($(".swiper-media").length) {
            var swiperMedia = new Swiper(".swiper-media", {
                slidesPerView: "auto",
                spaceBetween: -1,
                navigation: {
                    nextEl: ".media-btn-next",
                    prevEl: ".media-btn-prev",
                },
                allowTouchMove: true,
                grabCursor: true,
            });
            setTimeout(function () {
                swiperMedia.update();
            }, 500);
        }
    }
}

new Post();

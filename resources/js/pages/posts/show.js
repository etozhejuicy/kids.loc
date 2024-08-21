import Swiper from "swiper/bundle";
import "swiper/css";

import "../../modules/tab";

class Post {
    constructor() {
        this.events();
    }

    events() {
        this.swiperCover();
    }

    swiperCover() {
        var swiperIndicators = new Swiper(".swiper-indicators", {
            spaceBetween: 10,
            slidesPerView: 5,
            freeMode: true,
            watchSlidesProgress: true,
        });

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

        // setTimeout(function () {
        //     if (swiperCover.update) {
        //         swiperCover.update();
        //     }
        // }, 500);
    }
}

new Post();

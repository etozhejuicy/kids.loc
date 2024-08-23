import Swiper from "swiper/bundle";
import "swiper/css";
import options from "../modules/swiperOptions";

class Graphic {
    constructor() {
        this.events();
    }

    events() {
        if ($(".section-video-swiper").length) {
            let swiperNav = $('.swiper-graphic .swiper-nav-place');

            $(window).on('resize', () => {
                swiperNav.css('right', $('.container').offset().left + 30);
            });

            swiperNav.css('right', $('.container').offset().left + 30);

            let swiperGraphic = new Swiper(
                ".swiper-graphic",
                $.extend(
                    {
                        centerInsufficientSlides: false,
                        slidesPerView: "auto",
                        spaceBetween: 25,
                        allowTouchMove: true,
                        grabCursor: true,
                        navigation: {
                            enabled: true,
                            nextEl: ".graphic-btn-next",
                            prevEl: ".graphic-btn-prev",
                        },
                    },
                    options
                )
            );
            setTimeout(function () {
                if (swiperGraphic.update) {
                    swiperGraphic.update();
                }
            }, 500);
        }
    }
}

new Graphic();

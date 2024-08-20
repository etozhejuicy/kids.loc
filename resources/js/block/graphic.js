import Swiper from "swiper/bundle";
import options from "../modules/swiperOptions";

var swiperGraphic = new Swiper(".swiper-graphic", $.extend({
    centerInsufficientSlides: false,
    slidesPerView: "auto",
    spaceBetween: 25,
    allowTouchMove: true,
    grabCursor: true,
    navigation: {
        enabled: true,
        nextEl: '.graphic-btn-next',
        prevEl: '.graphic-btn-prev',
    },
}, options));
setTimeout(function () {
    if (swiperGraphic.update) {
        swiperGraphic.update();
    }
}, 500);
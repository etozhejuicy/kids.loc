var paddingTimer = false;

var paddingSwiper = () => {
    $('.swiper-wrapper').parents('.swiper-container').css('margin-left', $('.container').offset().left + 30);
    $('.swiper-wrapper').parents('.swiper-container').css('margin-right', $('.container').offset().left + 30);

    if (paddingTimer) {
        clearTimeout(paddingTimer)
    }

    paddingTimer = setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
    }, 500);
}

export default {
    speed: 500,
    on: {
        beforeInit: paddingSwiper,
        resize: paddingSwiper,
        resizeObserver: false,
    }
}
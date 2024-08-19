var btn = $('.btn-ripple');

class Button {
    constructor() {
        if (btn) {
            this.events();
        }
    }

    events() {
        btn.on('mouseenter click touchstart', (e) => {
            this.rippleEffect(e);
        });
    }

    rippleEffect(e) {
        let btnWidth = $(e.currentTarget).width();
        let btnHeight = $(e.currentTarget).height();
        let ripple = $(e.currentTarget).find('.btn-ripple-effect');
        let btnIconSize = parseInt($(e.currentTarget).find('.btn-ripple-effect').height());

        $(e.currentTarget).addClass('active');
        ripple.css('min-width', btnWidth);
        ripple.css('min-height', btnHeight);

        $(e.currentTarget).on('mouseleave touchend', (e) => {
            $(e.currentTarget).removeClass('active');
            ripple.css('min-width', btnIconSize);
            ripple.css('min-height', btnIconSize);
        });

        $(document).on('click', btn, (e) => {
            if (!$(e.target).closest(btn).length) {
                btn.removeClass('active');
                ripple.css('min-width', btnIconSize);
                ripple.css('min-height', btnIconSize);
            }
        });
    }
}

export default new Button();
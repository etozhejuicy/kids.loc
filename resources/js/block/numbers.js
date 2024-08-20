import ElementIntersection from "../../../../js-modules/ElementIntersection";

class Numbers {
    constructor() {
        this.counterNumbers();
    }

    counterNumbers() {

        new ElementIntersection(".section-numbers", () => {

            $('.number-card-title [number-value]').each(function () {
                var $this = $(this),
                    countTo = $this.parent().attr('data-counter-value');

                $({ countNum: $this.text() }).animate(
                    {
                        countNum: countTo
                    },

                    {
                        duration: 2000,
                        easing: 'linear',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        }

                    });
            });
        }, false, {
            rootMargin: '30% 0px 30% 0px',
        });
    }
}

new Numbers();
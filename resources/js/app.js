document.addEventListener("DOMContentLoaded", (event) => {
    document.documentElement.style.setProperty("display", "block");
});

// wow extend
import WOW from 'wow.js';
new WOW().init();

// lazyload
import lazysizes from 'lazysizes';
import 'lazysizes/plugins/parent-fit/ls.parent-fit';
import 'lazysizes/plugins/object-fit/ls.object-fit';
import 'lazysizes/plugins/blur-up/ls.blur-up';

lazysizes.cfg.blurupMode = 'auto';

// primary
import './modules/jquery';
import './modules/modal';

// js-modules
import '../../../js-modules/scroller';
import '../../../js-modules/jquery.maskedinput';
import Suggestions from '../../../js-modules/Suggestions';

// modules
import "./class/Menu";
import "./class/Header";

$('[name="phone"]').mask('+7 (999) 999-99-99');

var FormSuggestions = new Suggestions({
    token: '08209d3f98ffb78b44ab2d3f3a0d45a7867a0e4c'
});

FormSuggestions.city($('[data-city]'));
FormSuggestions.region($('[data-region]'));
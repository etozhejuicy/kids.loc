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

import '../../../js-modules/scroller';

import "./class/Button";
import "./class/Menu";
import "./class/Header";
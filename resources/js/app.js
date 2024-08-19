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

import "./class/Button";
import "./class/Menu";
import "./class/Header";
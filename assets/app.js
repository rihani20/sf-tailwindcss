import './bootstrap.js';

/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.scss';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

import 'tw-elements';


  import {
    Input,
    Ripple,
    initTWE,
  } from "tw-elements";
  
  initTWE({ Input, Ripple });
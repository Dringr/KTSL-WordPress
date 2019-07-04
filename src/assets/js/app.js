import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();


const toggler = document.querySelector('.menu__toggler');
const menu = document.querySelector('.menu');

toggler.addEventListener('click', () => {
    toggler.classList.toggle('active');
    menu.classList.toggle('active');
});

// // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

        document.getElementById("navbar").style.background = "rgba(0, 0, 0, 0.15)";
        document.getElementById("logo").style.width = "115px"; 
    } else {
 
        document.getElementById("navbar").style.background = "transparent";
        document.getElementById("logo").style.width = "180px";
    }
} 

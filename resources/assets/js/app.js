import $ from 'jquery';
import {Collapse, Dropdown, Tab} from 'bootstrap';
import Swiper from 'swiper';
import * as SwiperModules from 'swiper/modules';
import AOS from 'aos';
import Parallax from 'parallax-js';
import gsap from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
AOS.init({
    duration: 500
});
window.$ = $;
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;
window.Swiper = Swiper;
window.SwiperModules = SwiperModules;
    
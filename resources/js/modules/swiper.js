// core version + navigation, pagination modules:
import Swiper, { Navigation } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';

// init Swiper:
new Swiper('.swiper', {
  // configure Swiper to use modules
  modules: [Navigation],
  simulateTouch: true,
  slidesPerView: 1,
  slidesPerGroup: 1,
  slidesPerColumn: 1,
  loop: true,
  speed: 800,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    320: {
      autoHeight: true,
    },
    768: {
      autoHeight: false,
    },
  },
});
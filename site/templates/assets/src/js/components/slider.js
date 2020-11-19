import Ready from 'ready'
import {
  tns
} from 'tiny-slider/src/tiny-slider';

Ready(() => {
  const sliderEl = document.querySelector('.slider');
  if (!sliderEl)
    return;
  const slider = tns({
    container: sliderEl,
    rewind: false,
    autoplay: true,
    loop: true,
    // lazyload: true,
    // autoWidth: true,
    // autoHeight: true,
    autoplayButtonOutput: false,
    nav: false,
    controls: false,
    speed: 1500,
    autoplayTimeout: 4200,
    transition: "fade"
  });
})
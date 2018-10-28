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
    autoWidth: true,
    autoplayButtonOutput: false,
    nav: false,
    controls: false,
    speed: 1200,
  });
})
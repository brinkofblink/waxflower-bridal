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
    // items: sliderEl.children.length,
    // slideBy: 'page',
    autoplay: true,
    autoWidth: true,
    autoplayButtonOutput: false,
    nav: false,
    controls: false,
    speed: 1200,
    autoHeight: true,
  });
})
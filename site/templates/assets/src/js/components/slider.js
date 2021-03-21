import Ready from 'ready'
import {
  tns
} from 'tiny-slider/src/tiny-slider';

window.onload = () => {
  const sliderEl = document.querySelector('.slider');
  const reviews = document.querySelector('.homepage-review-cards');
  const whatsNew = document.querySelector('.whats-new-slider');
  const designers = document.querySelector('.view-designers-slider');
  if (sliderEl) {
    const slider = tns({
      container: sliderEl,
      rewind: false,
      autoplay: true,
      loop: true,
      autoplayButtonOutput: false,
      nav: false,
      controls: false,
      speed: 1500,
      autoplayTimeout: 4200,
      transition: "fade"
    });
  }
  if (reviews) {
    const reviewsSlider = tns({
      container: reviews,
      mouseDrag: true,
      rewind: false,
      swipeAngle: false,
      speed: 400,
      items: 1,
      nav: false,
      controlsPosition: 'bottom',
      center: true,
      edgePadding: 10,
      gutter: 10,
      prevButton: '.previous-review',
      nextButton: '.next-review',
      responsive: {
        900: {
          edgePadding: 100,
          gutter: 100,
        }
      }
      // autoWidth: true
    });
  }
  if (whatsNew) {
    const whatsNewSlider = tns({
      container: whatsNew,
      mouseDrag: true,
      rewind: false,
      swipeAngle: false,
      speed: 400,
      items: 1,
      loop: false,
      nav: false,
      gutter: 10,
      controlsPosition: 'bottom',
      center: false,
      controlsText: ["<", ">"],
      responsive: {
      640: {
        edgePadding: 20,
        gutter: 20,
        items: 2
      },
      700: {
        gutter: 30
      },
      900: {
        items: 3
      }
    }
    });
  }
  if (designers) {
    const designersSlider = tns({
      container: designers,
      mouseDrag: true,
      rewind: false,
      swipeAngle: false,
      speed: 400,
      items: 2,
      loop: false,
      nav: false,
      gutter: 10,
      controlsPosition: 'bottom',
      center: false,
      controlsText: ["<", ">"],
      // lazyload: true,
      // autoWidth: true,
      // autoHeight: true,
      responsive: {
      640: {
        edgePadding: 20,
        gutter: 20,
        items: 2
      },
      700: {
        gutter: 30,
        items: 3
      },
      900: {
        items: 4
      }
    }
    });
  }
}
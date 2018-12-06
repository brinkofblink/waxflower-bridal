import { Luminous, LuminousGallery } from 'luminous-lightbox';
import Ready from 'ready'

Ready(() => {
  const images = document.querySelectorAll('[data-gallery]')
  new LuminousGallery(images);
})
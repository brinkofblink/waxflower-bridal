import Ready from 'ready'
import {
  tns
} from 'tiny-slider/src/tiny-slider';

Ready(() => {
  const blog = document.querySelector('.blog-post');
  if (!blog)
    return;

  const paras = blog.querySelectorAll('p')
  paras.forEach(el => {
     const images = el.querySelector('img + img')
     if (images) {
       el.classList.add('gallery')
     }
  })
})
import Ready from 'ready'
import Mmenu from 'mmenu-js'
// import GetId from 'get-id'
// import Flip  from 'data-flip'
// import Popper from 'popper.js'

document.addEventListener(
  "DOMContentLoaded", () => {
      const desktop = window.innerWidth > 640
      const menu = new Mmenu(document.querySelector( ".nav" ), {
        columns: desktop,
        "slidingSubmenus": desktop,
        "extensions": [
          "border-none",
          "multiline",
          "pagedim-black"
        ],
        "navbars": [
          {
             "position": "bottom",
             "content": [
                `<a href="https://www.pinterest.co.uk/waxflowerbridal/" rel="noreferrer noopener" target="_blank"><img src="/site/templates/images/icons/icon-pinterest.svg" width="50" height="50" alt="pinterest logo"></a>`,
                `<a href="https://www.instagram.com/waxflowerbridal/" rel="noreferrer noopener" target="_blank"><img src="/site/templates/images/icons/icon-instagram.svg" width="50" height="50" alt="instagram logo"></a>`,
                `<a href="https://www.facebook.com/waxflowerbridal/" rel="noreferrer noopener" target="_blank"><img src="/site/templates/images/icons/icon-facebook.svg" width="50" height="50" alt="facebook logo"></a>`,
                `<a href="https://www.youtube.com/channel/UCmdQUJsvfQoihXUUoLyMXeA/" rel="noreferrer noopener" target="_blank"><img src="/site/templates/images/icons/icon-youtube.svg" width="50" height="50" alt="youtube logo"></a>`
             ]
          }
       ]
      });
    }
);

// Ready(() => {
//   let designersNav = false
//   window.toggleNav = () => Flip('navToggled')
//   if (window.innerWidth > 640) {
//     const designerNavItem = document.querySelector('.designers-nav')
//     const designerNavSubnav = document.querySelector('.designers-subnav')
//     const arrow = document.querySelector('.designers-subnav-arrow')
//     designersNav = new Popper(designerNavItem, designerNavSubnav, {
//       placement: 'bottom',
//       modifiers: {
//         offset: '-50%'
//       },
//       flip: {
//         enabled: false
//       }
//     });
//     designerNavItem.addEventListener('mouseenter', () => {
//       designersNav.update()
//     })
//   }
//   // window.addEventListener('resize', (e) => {
//   //   if (e.innerWidth > 640) return
//   //   if (designersNav)
//   //     designersNav.destroy()
//   // })
// })

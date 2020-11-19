import Ready from 'ready'
import MmenuLight from 'mmenu-light'
// import GetId from 'get-id'
// import Flip  from 'data-flip'
// import Popper from 'popper.js'

document.addEventListener(
  "DOMContentLoaded", () => {
      const menu = new MmenuLight(document.querySelector( ".nav" ));

      const navigator = menu.navigation();
      const drawer = menu.offcanvas();

      // drawer.open();
      document.querySelector( '.hamburger' )
      .addEventListener( 'click', ( evnt ) => {
          evnt.preventDefault();
          drawer.open();
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

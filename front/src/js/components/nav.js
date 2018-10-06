import Ready from 'ready'
import GetId from 'get-id'
import Flip  from 'data-flip'
import Popper from 'popper.js'

Ready(() => {
  let designersNav = false
  window.toggleNav = () => Flip('navToggled')
  if (window.innerWidth > 640) {
    const designerNavItem = document.querySelector('.designers-nav')
    const designerNavSubnav = document.querySelector('.designers-subnav')
    const arrow = document.querySelector('.designers-subnav-arrow')
    designersNav = new Popper(designerNavItem, designerNavSubnav, {
      placement: 'bottom',
      modifiers: {
        offset: '-50%'
      },
      flip: {
        enabled: false
      }
    });
    designerNavItem.addEventListener('mouseenter', () => {
      designersNav.update()
    })
  }
  // window.addEventListener('resize', (e) => {
  //   if (e.innerWidth > 640) return
  //   if (designersNav)
  //     designersNav.destroy()
  // })
})

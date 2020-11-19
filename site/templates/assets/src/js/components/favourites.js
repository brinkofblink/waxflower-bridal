import Ready from 'ready'
import Cookies from 'js-cookie'

const addFavourite = (el) => {
  el.dataset.selected = "1"
  const dressId = el.dataset.dressid
  const currentFavourites = Cookies.getJSON('favouriteDresses') || []
  if (checkFavourite(el) === "0") {
    currentFavourites.push(dressId)
  }
  Cookies.set('favouriteDresses', currentFavourites);
}

const removeFavourite = (el) => {
  el.dataset.selected = "0"
  const dressId = el.dataset.dressid
  const currentFavourites = Cookies.getJSON('favouriteDresses') || []
  if (checkFavourite(el) === "1") {
    currentFavourites.splice(currentFavourites.indexOf(dress => dress === dressId), 1)
  }
  Cookies.set('favouriteDresses', currentFavourites)
}

const checkFavourite = (el) => {
  const dressId = el.dataset.dressid
  const currentFavourites = Cookies.getJSON('favouriteDresses') || []
  return currentFavourites.find(dress => dress === dressId) ? "1" : "0"
}

const toggleFavourite = (el) => {
  if (el.dataset.selected === "1") {
    removeFavourite(el)
  } else {
    addFavourite(el)
  }
}

Ready(() => {
  const dresses = document.querySelectorAll('.heart-container span')
  dresses.forEach((e) => {
    e.dataset.selected = checkFavourite(e)
    e.addEventListener('click', (evt, el) => {
      evt.stopPropagation()
      toggleFavourite(e)
    })
  })

  if (document.querySelector('.wardrobe')) {
    listFavourites(document.querySelector('.dresses'))
  }
})
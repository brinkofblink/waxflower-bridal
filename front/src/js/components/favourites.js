import Ready from 'ready'
function storageAvailable(type) {
  try {
      var storage = window[type],
          x = '__storage_test__';
      storage.setItem(x, x);
      storage.removeItem(x);
      return true;
  }
  catch(e) {
      return e instanceof DOMException && (
          // everything except Firefox
          e.code === 22 ||
          // Firefox
          e.code === 1014 ||
          // test name field too, because code might not be present
          // everything except Firefox
          e.name === 'QuotaExceededError' ||
          // Firefox
          e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
          // acknowledge QuotaExceededError only if there's something already stored
          storage.length !== 0;
  }
}
const dressTemplate = (name, designer, img, url) => {
  return `<div class="dress">
    <div class="image">
      <img src="${img}" alt="Photo of ${name}">
    </div>
    <a href="${url}" class="button">${name} by ${designer}</a>
    </div>`
}

const addFavourite = (el) => {
  el.target.parentNode.dataset.selected = "1"
  const designer = el.target.closest('.dress-heart span').dataset.designer
  const img = el.target.closest('.dress-heart span').dataset.image
  const url = window.location.pathname
  const dressname = el.target.closest('.dress-name').innerText.trim()
  let currentFavourites = localStorage.getItem('favouriteDresses') ? localStorage.getItem('favouriteDresses').split("|||") : []
  if (checkFavourite(el) === "0") {
    currentFavourites.push(`${dressname},${designer},${img},${url}`)
  }
  console.log(currentFavourites)
  localStorage.setItem('favouriteDresses', currentFavourites.join("|||", "|||"));
}

const removeFavourite = (el) => {
  el.target.parentNode.dataset.selected = "0"
  const designer = el.target.closest('.dress-heart span').dataset.designer
  const img = el.target.closest('.dress-heart span').dataset.image
  const url = window.location.pathname
  const dressname = el.target.closest('.dress-name').innerText.trim()
  let currentFavourites = localStorage.getItem('favouriteDresses') ? localStorage.getItem('favouriteDresses').split("|||") : []
  if (checkFavourite(el) === "1") {
    currentFavourites.splice(currentFavourites.indexOf(dress => dress === `${dressname},${designer},${img},${url}`), 1)
  }
  localStorage.setItem('favouriteDresses', currentFavourites.join("|||", "|||"));
}

const checkFavourite = (el) => {
  let target = el.target ? el.target : el
  const dressname = target.closest('.dress-name').innerText.trim()
  const designer = target.closest('.dress-heart span').dataset.designer
  const img = target.closest('.dress-heart span').dataset.image
  const url = window.location.pathname
  let currentFavourites = []
  if (localStorage.getItem('favouriteDresses')) {
    currentFavourites = localStorage.getItem('favouriteDresses').split("|||")
  }
  return currentFavourites.find(dress => dress === `${dressname},${designer},${img},${url}`) ? "1" : "0"
}
const toggleFavourite = (el) => {
  if (el.target.parentNode.dataset.selected === "1") {
    removeFavourite(el)
  } else {
    addFavourite(el)
  }
  }

const listFavourites = (el) => {
  if (!localStorage.getItem('favouriteDresses')) {
    el.insertAdjacentHTML('beforeend', "You can click the heart symbol on dresses to save them here.")
  } else {
  const favourites = localStorage.getItem('favouriteDresses').split("|||")
    favourites.forEach(d => {
      let dressData = d.split(",")
      let content = dressTemplate(dressData[0], dressData[1], dressData[2], dressData[3])
      el.insertAdjacentHTML('beforeend', content)
    })
  }
}

Ready(() => {
  if (storageAvailable('localStorage')) {
    const dresses = document.querySelectorAll('.heart')
    dresses.forEach((e) => {
      // e.dataset.selected = checkFavourite(e)
      e.addEventListener('click', (el) => {
        toggleFavourite(el)
      })
    })
  }

  if (document.querySelector('.wardrobe')) {
    listFavourites(document.querySelector('.dresses'))
  }
})
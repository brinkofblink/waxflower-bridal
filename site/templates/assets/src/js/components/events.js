import Ready from 'ready'

Ready(() => {

  const eventShareButtons = document.querySelectorAll('.share-button')
  eventShareButtons.forEach(s => {
    s.addEventListener('click', event => {
      const id = event.target.dataset.id
      if (navigator.share) {
        navigator.share({
          title: 'Waxflower Bridal Events',
          url: 'https://waxflowerbridal.co.uk/events#' + id
        }).then(() => {
          console.log('Thanks for sharing!');
        })
        .catch(console.error);
      } else {
        location.href = "mailto:?subject=Waxflower%20Bridal%20event&body=https://waxflowerbridal.co.uk/events#" + id;
      }
    });
  });
})
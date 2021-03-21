if(!!window.IntersectionObserver){
  let video = document.querySelector('video');
  let isPaused = false; /* flag for auto-pausing of the video */
  let observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if(entry.intersectionRatio!=0.8  && !video.paused){
        video.pause(); isPaused = true;
      }
      else if(isPaused) {video.play(); isPaused=false}

    });
  }, {threshold: 1});
  observer.observe(video) ;
}
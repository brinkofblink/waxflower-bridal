import Ready from 'ready'

Ready(() => {
  const hattie = document.querySelector('.hattie')
  if (!hattie) return
  const monthDiff = (d1, d2) => {
    let months;
    months = (d2.getFullYear() - d1.getFullYear()) * 12;
    months -= d1.getMonth() + 1;
    months += d2.getMonth();
    return months <= 0 ? 0 : months;
  }
  const now = new Date();
  const hattiesBirthday = new Date('2017-5-25')
  hattie.innerText = monthDiff(hattiesBirthday, now)
})

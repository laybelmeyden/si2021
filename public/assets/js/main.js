window.addEventListener('scroll', () => {
    const nav__fixed = document.querySelector('.banners__si_2021')
    pageYOffset >= 134 ? nav__fixed.classList.add('fixed__nav') : nav__fixed.classList.remove('fixed__nav')
})
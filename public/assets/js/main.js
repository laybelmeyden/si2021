window.addEventListener('scroll', () => {
    const nav__fixed = document.querySelector('.banners__si_2021')
    pageYOffset >= 134 ? nav__fixed.classList.add('fixed__nav') : nav__fixed.classList.remove('fixed__nav')
})
var mySwiper = new Swiper('.swiper-container.swiper-container-history', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    loop: true,
    slidesPerView: 1,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


})
var mySwiper2 = new Swiper('.swiper-container.swiper-container-experts', {
    slidesPerView: 3,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
})
var mySwiper2 = new Swiper('.swiper-container.swiper-container-news', {
    slidesPerView: 3,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
})
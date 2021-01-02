window.addEventListener('scroll', () => {
    const nav__fixed = document.querySelector('.banners__si_2021')
    pageYOffset >= 134 ? nav__fixed.classList.add('fixed__nav') : nav__fixed.classList.remove('fixed__nav')
})
var mySwiper = new Swiper('.swiper-container.swiper-container-history', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    slidesPerView: 1,
    navigation: {
        prevEl: '.history-prev',
        nextEl: '.history-next',
    },


})
var mySwiper2 = new Swiper('.swiper-container.swiper-container-experts', {
    slidesPerView: 3,
    navigation: {
        nextEl: '.experts-next',
        prevEl: '.experts-prev',
    },
})
var mySwiper3 = new Swiper('.swiper-container.swiper-container-news', {
    slidesPerView: 3,
    navigation: {
        prevEl: '.news-prev',
        nextEl: '.news-next',
    },
})

window.onload = () => {
    const navbar_active = document.querySelectorAll('.nav__content_years a');
    navbar_active.forEach(
        e => {
            const child_a = e.querySelector('div')
            if (window.location.pathname == '/years2011') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            } else if (window.location.pathname == '/years2012') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            } else if (window.location.pathname == '/years2013') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            } else if (window.location.pathname == '/years2014') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            } else if (window.location.pathname == '/years2015') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            } else if (window.location.pathname == '/years2016') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            } else if (window.location.pathname == '/years2017') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            } else if (window.location.pathname == '/years2018') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            } else if (window.location.pathname == '/years2019') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            } else if (window.location.pathname == '/years2020') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            } else if (window.location.pathname == '/') {
                e.pathname === window.location.pathname ? child_a.classList.toggle('active_years') : false
            }
        }
    )
}
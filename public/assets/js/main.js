window.onload = () => {
    const body = document.querySelector('body')
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function() {
        document.body.classList.add('loaded');
        document.body.classList.remove('loaded_hiding');
    }, 500);
}
window.addEventListener('scroll', () => {
    const nav__fixed = document.querySelector('.banners__si_2021'),
        body = document.querySelector('body')
    if (body.clientWidth >= 993) {
        pageYOffset >= 134 ? nav__fixed.classList.add('fixed__nav') : nav__fixed.classList.remove('fixed__nav')
    } else if (body.clientWidth <= 993) {
        pageYOffset >= 134 ? nav__fixed.classList.add('active__small_scroll') : nav__fixed.classList.remove('active__small_scroll')
    }
})
var mySwiper = new Swiper('.swiper-container.swiper-container-history', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    loop: true,
    autoHeight: true,
    slidesPerView: 1,
    navigation: {
        prevEl: '.history-prev',
        nextEl: '.history-next',
    },


})
var mySwiper2 = new Swiper('.swiper-container.swiper-container-experts', {
        slidesPerView: 1,
        loop: true,
        breakpoints: {
            992: {
                slidesPerView: 3
            }
        },
        navigation: {
            nextEl: '.experts-next',
            prevEl: '.experts-prev',
        },
    })
    // var mySwiper3 = new Swiper('.swiper-container.swiper-container-news', {
    //     slidesPerView: 3,
    //     navigation: {
    //         prevEl: '.news-prev',
    //         nextEl: '.news-next',
    //     },
    // })

navbar_active = () => {
    const navbar_active = document.querySelectorAll('.nav__content_years a');
    navbar_active.forEach(
        e => {
            const child_a = e.querySelector('div'),
                pathSlice = window.location.pathname.split('').filter((_, i) => i < 10).join('');
            if (pathSlice == '/years2011') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            } else if (pathSlice == '/years2012') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            } else if (pathSlice == '/years2013') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            } else if (pathSlice == '/years2014') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            } else if (pathSlice == '/years2015') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            } else if (pathSlice == '/years2016') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            } else if (pathSlice == '/years2017') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            } else if (pathSlice == '/years2018') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            } else if (pathSlice == '/years2019') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            } else if (pathSlice == '/years2020') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            } else if (pathSlice == '/') {
                e.pathname === pathSlice ? child_a.classList.toggle('active_years') : false
            }
        }
    )
}

navbar_active();
const language__switcher = () => {
    const html = document.querySelector('html'),
        ru_lang = document.querySelector('#ru_lan'),
        en_lang = document.querySelector('#en_lan');
    if (html.lang === 'ru') {
        ru_lang.classList.add('lang__active')
    } else if (html.lang === 'en') {
        en_lang.classList.add('lang__active')
    }
}
language__switcher();
nav_bar_toggle = () => {
    const burger__items = document.querySelector('.mobile-menu__btn'),
        burger__items_menu = document.querySelector('.navigations__header'),
        body = document.querySelector('body'),
        mobile_menu__btn = document.querySelector('.mobile-menu__btn'),
        mobile_menu__checkbox = document.querySelector('.mobile-menu__checkbox')


    burger__items.addEventListener('click', () => {
        burger__items_menu.classList.toggle('active__menu_items')
        body.classList.toggle('no_scrolled')
        mobile_menu__btn.classList.toggle('active_mobile_menu__btn')
    })
    const active_menu_offers = document.querySelectorAll('.navigations__header a')
    if (body.clientWidth <= 993) {
        active_menu_offers.forEach(e => {
            e.addEventListener('click', () => {
                burger__items_menu.classList.toggle('active__menu_items')
                body.classList.toggle('no_scrolled')
                mobile_menu__btn.classList.toggle('active_mobile_menu__btn')
                mobile_menu__checkbox.checked = false;
            })
        })
    }

}
nav_bar_toggle();

function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        total: t,
        days: days,
        hours: hours,
        minutes: minutes,
        seconds: seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector(".days");

    function updateClock() {
        var t = getTimeRemaining(endtime);

        if (t.total <= 0) {
            document.getElementById("clockdiv").className = "hidden";
            document.getElementById("deadline-messadge").className = "hidden";
            clearInterval(timeinterval);
            return true;
        }

        daysSpan.innerHTML = t.days;
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

var deadline = "June 01 2021 09:00:00 GMT+0300";
initializeClock("clockdiv", deadline);
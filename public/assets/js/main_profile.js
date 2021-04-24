const language__switcher = () => {
    const html = document.querySelector('html'),
        ru_lang = document.querySelector('#ru_lan'),
        en_lang = document.querySelector('#en_lan'),
        home = document.querySelector('#home'),
        setting_profile = document.querySelector('#setting_profile');
    if (html.lang === 'ru') {
        ru_lang.classList.add('lang__active')
    } else if (html.lang === 'en') {
        en_lang.classList.add('lang__active')
    }
}
language__switcher();
navbar_active = () => {
    const navbar_active = document.querySelectorAll('.left__navbar_href a');
    navbar_active.forEach(
        e => {
            const child_a = e.querySelector('div'),
                pathSlice = window.location.pathname.split('/')[1],
                splitE = e.pathname.split('/')[1];
            if (pathSlice == 'home') {
                splitE === pathSlice ? child_a.classList.toggle('active_href') : false
            } else if (pathSlice == 'setting_profile') {
                splitE === pathSlice ? child_a.classList.toggle('active_href') : false
            } else if (pathSlice == 'allUsers') {
                splitE === pathSlice ? child_a.classList.toggle('active_href') : false
            } else if (pathSlice == 'projects') {
                splitE === pathSlice ? child_a.classList.toggle('active_href') : false
            } else if (pathSlice == 'expertsProject') {
                splitE === pathSlice ? child_a.classList.toggle('active_href') : false
            } else if (pathSlice == 'online') {
                splitE === pathSlice ? child_a.classList.toggle('active_href') : false
            }
        })
}

navbar_active();
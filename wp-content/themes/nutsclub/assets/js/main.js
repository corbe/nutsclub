document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    const toggle = document.querySelector('.header__toggle');
    const nav = document.querySelector('.header__nav');

    toggle?.addEventListener('click', () => {
        nav?.classList.toggle('header__nav--open');
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header?.classList.add('header--scrolled');
        } else {
            header?.classList.remove('header--scrolled');
        }
    });

    document.querySelectorAll('.header__menu a').forEach(link => {
        link.addEventListener('click', () => {
            nav?.classList.remove('header__nav--open');
        });
    });
});

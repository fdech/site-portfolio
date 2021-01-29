const hamburger = document.querySelector('.hamburger'),
        menu = document.querySelector('.menu'),
        close = document.querySelector('.menu__close'),
        menuLink = document.querySelectorAll('.menu__link');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
});

close.addEventListener('click', () => {
    menu.classList.remove('active');
});


menuLink.forEach(element => {
    element.addEventListener('click', () => {
        menu.classList.remove('active');
    });
});

new WOW().init();

//scroll and pageup jQuery

$(window).scroll(function() {
    if ($(this).scrollTop() > 1600) {
        $('.pageup').fadeIn(); 
    } else {
        $('.pageup').fadeOut(); 
    }
});
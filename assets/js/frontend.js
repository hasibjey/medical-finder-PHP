$(document).ready(() => {
    $('.main-nav-item').on('click', () => {
        console.log('ok');
    })

    $('.navbar-svg').on('click', (e) => {
        $('.navbar-menu').toggle();
        $('.navbar-close').toggle();
        $('.mobile-nav-group').toggleClass('mobile-nav-active');
    });

    $('.mobile-nav-item').on('click', function () {
        if ($(this).children('.mobile-nav-sub-group').hasClass('sub-nav-active')) {
            $(this).children('.mobile-nav-sub-group').removeClass('sub-nav-active');
            $(this).children('.mobile-nav-sub-group').slideUp(200);
        } else {
            $('.mobile-nav-sub-group').removeClass('sub-nav-active');
            $(this).children('.mobile-nav-sub-group').addClass('sub-nav-active');
            $('.mobile-nav-sub-group').slideUp(200);
            $(this).children('.mobile-nav-sub-group').slideDown(200);
        }
    });

    var waypoint = new Waypoint({
        element: document.getElementById('waypoint'),
        handler: function (direction) {
            console.log('Scrolled to waypoint!')
        }
    })

    $('.counter').counterUp({
        delay: 100,
        time: 1000
    });
});


$('.main-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    lazyLoad: 'ondemand',
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
    cssEase: 'linear'
});

const searchType = (e) => {
    const type = e.value;
    if (type === 'doctor') {
        $('.search-doctor').show(150);
    } else {
        $('.search-doctor').hide(150);
    }
}

function scrollToTarget(className) {
    var targetDiv = document.getElementById(className);
    targetDiv.scrollIntoView({ behavior: 'smooth' });
}

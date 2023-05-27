$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 5,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2500,
        responsive:{
            0:{
                items:2,
            },
            360:{
                items:3,
            },
            600:{
                items:4,
            },
            1000:{
                items:5,
            }
        }
    });
});
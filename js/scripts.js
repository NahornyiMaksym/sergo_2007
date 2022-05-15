document.querySelector('.second-button').addEventListener('click', function () {

    document.querySelector('.animated-icon2').classList.toggle('open');
});


$(document).ready(function () {

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        navText: ['', ' '],

        responsive: {
            0: {
                items: 1
            },

            1000: {
                items: 1
            }
        }
    });


});




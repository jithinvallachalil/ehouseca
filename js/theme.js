var myCarousel = document.querySelector('#about-page-slider')
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000,
    wrap: false
})

jQuery(function($) {
    $('.service-toggle-wrap').on('click', function(e) {
        e.preventDefault();
        if ($('.services-dropdown').css('display') != 'none') {
            $('.services-dropdown').slideUp();
        }
        if ($('.services-dropdown').css('display') != 'block') {
            $(this).siblings('.services-dropdown').slideDown();
        }
    });

    $(document).ready(function() {
        $('#site-loader').fadeOut();
    });
});
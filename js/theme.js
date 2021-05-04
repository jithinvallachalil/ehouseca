jQuery(function($) {
    $(document).ready(function() {
        $('#site-loader').fadeOut();
    });
    $('.service-toggle-wrap').on('click', function(e) {
        e.preventDefault();
        if ($('.services-dropdown').css('display') != 'none') {
            $('.services-dropdown').slideUp();
        }
        if ($('.services-dropdown').css('display') != 'block') {
            $(this).siblings('.services-dropdown').slideDown();
        }
    });

    $('#home-play-button i').on('click', function(e) {
        e.preventDefault();
        $('#home-video-overlay, #home-play-button').fadeOut();
        $('#bannerVideo').trigger('play').attr('controls', '');;
    });

});

var myCarousel = document.querySelector('#about-page-slider')
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000,
    wrap: false
});
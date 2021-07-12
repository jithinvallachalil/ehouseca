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

    $('#responsive-menu-trigger').on('click', function(e) {
        e.preventDefault();

    });

    // Display Menu
    $('#responsive-menu-trigger').on('click', function() {
        $('#responsive-menu-wrapper').css('display', 'flex');
    });

    // Close Menu
    $('#close-resp-menu').on('click', function(e) {
        e.preventDefault();
        $('#responsive-menu-wrapper').fadeOut();
    });

    $('#services-respmenu > a > i').on('click', function(e) {
        e.preventDefault();
        $('#services-responsive-menu').slideToggle();
    });

    // $('#services-responsive-menu .dropdown').on('click', function(e) {
    //     e.preventDefault();
    //     $(this).find(".subclass").css("visibility","visible");
    // });

});

var myCarousel = document.querySelector('#about-page-slider')
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000,
    wrap: false
});
// goto top
$('#folder-img').click(function() {
    let gifUrl = ajax.themeurl + '/images/gif-' + $('#folder-img').data('gif') + '.gif';
    console.log(gifUrl);
    $('#gif-home-image').attr('src', gifUrl);
    $('#folder-img').hide();
    $('.gif-home').show();
    setTimeout(() => {
        window.location = $(this).data('redirection');
    }, 4000);
});


function changeTopBackground(sectionId) {

    $('#ehouse-home-top').data('srollid', sectionId);

    if (sectionId < 6 && ($('#new-footer').css('display') != 'none')) {
        $('#new-footer').hide();
        $('#navbar-bg').hide();
    }

    if (sectionId == 1) {
        $('#video-banner').fadeOut();
    } else if (sectionId > 1) {
        $('#video-banner').hide();
    }

    if (sectionId == 3) {
        $('#home-top-title-second').slideDown();
    } else {
        $('#home-top-title-second').hide();
    }

    switch (sectionId) {

        case 1:
            $('#video-banner').fadeIn();
            break;
        case 2:
            // Blue
            $('#ehouse-home-top').css('background', 'linear-gradient(to right, #102d93, #0052ec)');
            // $('#ehouse-home-bottom').css('background', 'url("<?php echo get_stylesheet_directory_uri(); ?>/images/home-file-green.png")');
            $('#folder-img').data('gif', 'blue');
            $('#folder-img').data('redirection', ajax.redirecturl + '/our-services/audit-risks/');

            $('#home-top-title, #file-title').html('AUDIT &<br>RISK').css('color', '#102d93');
            $('#folder-img').attr('src', ajax.themeurl + '/images/file-blue.png');
            $('#folder-anchor').attr('src', ajax.redirecturl + '/auditing-and-assurance/');
            break;
        case 3:
            // Brown
            $('#ehouse-home-top').css('background', 'linear-gradient(to right, #6d3103, #a8621c)');
            // $('#ehouse-home-bottom').css('background', 'url("<?php echo get_stylesheet_directory_uri(); ?>/images/home-file-blue.png")');
            $('#folder-img').data('gif', 'brown');
            $('#folder-img').data('redirection', ajax.redirecturl + '/our-services/company-formations-and-corporate-services/');

            $('#folder-img').attr('src', ajax.themeurl + '/images/file-brown.png');
            $('#home-top-title, #file-title').html('COMPANY<br>FORMATIONS').css('color', '#6d3103');
            $('#folder-anchor').attr('src', ajax.redirecturl + '/our-services/business-consultant/');
            break;
        case 4:
            // Red
            $('#ehouse-home-top').css('background', 'linear-gradient(to right, #aa1834, #e7455c)');
            // $('#ehouse-home-bottom').css('background', 'url("<?php echo get_stylesheet_directory_uri(); ?>/images/home-file-brown.png")');
            $('#folder-img').data('gif', 'red');
            $('#folder-img').data('redirection', ajax.redirecturl + '/our-services/business-advisory/');

            $('#folder-img').attr('src', ajax.themeurl + '/images/file-red.png');
            $('#home-top-title, #file-title').html('BUSINESS<br>ADVISORY').css('color', '#aa1834');
            $('#folder-anchor').attr('src', ajax.redirecturl + '/our-services/business-advisory/');
            break;
        case 5:
            // Grey
            $('#ehouse-home-top').css('background', 'linear-gradient(to right, #4c4c4c, #969696)');
            // $('#ehouse-home-bottom').css('background', 'url("<?php echo get_stylesheet_directory_uri(); ?>/images/home-file-grey.png")');
            $('#folder-img').data('gif', 'grey');
            $('#folder-img').data('redirection', ajax.redirecturl + '/our-services/vat-excise-tax/');

            $('#folder-img').attr('src', ajax.themeurl + '/images/file-grey.png');
            $('#home-top-title, #file-title').html('VAT, EXCISE &<br>TAX').css('color', '#4c4c4c');
            $('#folder-anchor').attr('src', ajax.redirecturl + '/our-services/vat-excise-tax/');
            break;
        case 6:
            // Green
            $('#ehouse-home-top').css('background', 'linear-gradient(to right, #02653d, #34cca0)');
            // $('#ehouse-home-bottom').css('background', 'url("<?php echo get_stylesheet_directory_uri(); ?>/images/home-file-red.png")');
            $('#folder-img').data('gif', 'green');
            $('#folder-img').data('redirection', ajax.redirecturl + '/our-services/intellectual-properties/');

            $('#folder-img').attr('src', ajax.themeurl + '/images/file-green.png');
            $('#home-top-title, #file-title').html('INTELLECTUAL<br>PROPERTIES').css('color', '#02653d');
            $('#folder-anchor').attr('src', ajax.redirecturl + '/our-services/intellectual-properties/');
            break;
    }

    $('#home-top-title').addClass('animated fadeInDown').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $('#home-top-title').removeClass('animated fadeInDown');
    });

    // console.log($(window).scrollTop());
}

// Initial state
var scrollPos = 0;
// adding scroll event


$(window).bind('mousewheel', function(event) {
    disableScroll();

    if (event.originalEvent.wheelDelta >= 0) {

        let sectionId = $('#ehouse-home-top').data('srollid');
        --sectionId;
        console.log(sectionId);
        if (sectionId > 7) {
            $('#ehouse-home-top').data('srollid', 6);

            $('#new-footer').slideUp();

            changeTopBackground(6);
        } else if (sectionId > 0) {
            $('#ehouse-home-top').data('srollid', sectionId);
            changeTopBackground(sectionId);
        }
    } else {
        let sectionId = $('#ehouse-home-top').data('srollid');
        ++sectionId;
        $('#ehouse-home-top').data('srollid', sectionId);
        if (sectionId < 7) {
            changeTopBackground(sectionId);
        } else {
            $('#new-footer').slideDown();
        }
    }
    enableScroll();
});

var keys = { 37: 1, 38: 1, 39: 1, 40: 1 };

function preventDefault(e) {
    e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
    window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function() { supportsPassive = true; }
    }));
} catch (e) {}

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// call this to Disable
function disableScroll() {
    window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
    window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
    window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
    window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

// call this to Enable
function enableScroll() {
    window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
    window.removeEventListener('touchmove', preventDefault, wheelOpt);
    window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}

$('#home-banner-arrow').click(function(e) {
    e.preventDefault();
    $('#video-banner').fadeOut();
    $('#ehouse-home-top').data('srollid', 2);
});
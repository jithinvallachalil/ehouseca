<?php
/* Template Name: Contact Page */
get_header();
?>

<!-- Contact Page Banner -->
<div id="services-header" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/dubai.jpg')">
    <div class="services-overlay">
        <div class="container">
            <h2>Contact Page</h2>
        </div>
    </div>
</div>

<!-- Contact Page Content -->
<div id="ehouse-body-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 mx-auto text-center">
                <div class="contact-form-wrapper">
                    <h3 class="text-center">Get in touch</h3>
                    <?php echo do_shortcode( '[contact-form-7 id="10" title="Contact Page"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-map">
    <div class="container">
        <div class="row">
            <!-- Dubai Address -->
            <div class="col-md-6">
                <p>Suite 209,<br>
                Blue Tower,<br>
                Sheikh Zayed Road,<br>
                Dubai, UAE</p>

                <p class="mb-0">
                    <a href="tel: +971504578645"><i class="fas fa-phone-alt"></i> +971 50 457 8645</a>
                </p>
                <p>
                    <a href="mailto: office@ehouse.ae"><i class="fas fa-envelope"></i> office@ehouse.ae</a>
                </p>
                <div class="map-wrapper">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Blue%20tower&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="Blue tower" aria-label="Blue tower"></iframe>
                </div>
            </div>
            <!-- Dubai Address -->
            <div class="col-md-6">
                <p>Suite 1502,<br>
                Golden Tower,<br>
                Buhairah Corniche,<br>
                Sharjah, UAE</p>

                <p class="mb-0">
                    <a href="tel: +97165304001"><i class="fas fa-phone-alt"></i> +971 653 04 001</a>
                </p>
                <p>
                    <a href="mailto: office@ehouse.ae"><i class="fas fa-envelope"></i> office@ehouse.ae</a>
                </p>
                <div class="map-wrapper">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Enterprise%20House%20sharjah&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="Enterprise House sharjah" aria-label="Enterprise House sharjah"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
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
            <div class="col-lg-6">
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
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.451198324181!2d55.278996415010035!3d25.221723683884736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab1a91107056572e!2sEnterprise%20House-%20Company%20Formations%20%26%20Corporate%20Services%20in%20UAE!5e0!3m2!1sen!2sae!4v1621160843181!5m2!1sen!2sae" title="Blue tower" aria-label="Blue tower"></iframe>
                </div>
            </div>
            <!-- Sharjah Address -->
            <div class="col-lg-6">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1274.8726539947031!2d55.38485518989919!3d25.34166000815698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5b6d7daedf41%3A0xbf06b8f8ef01afe!2sEnterprise%20House%20Chartered%20Accountants-%20Audit%20Firm%20%26%20Tax%20Consultant%20in%20UAE!5e0!3m2!1sen!2sin!4v1621837522611!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" title="Enterprise House sharjah" aria-label="Enterprise House sharjah"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php

/* Template Name: Home Template */
get_header();

?>

<div class="d-none">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/file-green.png" />
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/file-blue.png" />
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/file-brown.png" />
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/file-grey.png" />
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/file-red.png" />

	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gif-blue.gif" />
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gif-green.gif" />
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gif-brown.gif" />
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gif-grey.gif" />
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gif-red.gif" />
</div>

<!-- Navbar BG -->
<div id="navbar-bg"></div>

<div id="video-banner">
	<div id="video-bg">
		<!-- Video Overlay -->
		<div id="home-video-overlay"></div>
		<!-- Home Video Play Button -->
		<div id="home-play-button">
			<i class="far fa-play-circle"></i>
		</div>
		<!-- Banner Video -->
		<video loop id="bannerVideo">
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/images/5.mp4" type="video/mp4">
		</video>
	</div>
	<div id="video-bottom">
		<ul id="home-about-list">
			<a href="<?php echo site_url(); ?>/our-services/audit-risks/">
				<li id="audit">Audits and Risks</li>
			</a>
			<a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/">
				<li id="co-formations">Co. Formations & Corp. Services</li>
			</a>
			<a href="<?php echo site_url(); ?>/our-services/business-advisory/">
				<li id="advisory">Business Advisory</li>
			</a>
			<a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/">
				<li id="vat">VAT, Excise & Tax</li>
			</a>
			<a href="<?php echo site_url(); ?>/our-services/intellectual-properties/">
				<li id="intellectual">Intellectual Properties</li>
			</a>
		</ul>
		<h3>Efficient Services with Ethics at Heart</h3>
		<img id="home-banner-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-arrow.png" class="home-banner-arrow" />
	</div>
</div>


<div id="home-wrapper">

	<!-- section - file on middle -->
	<section id="folder-wrapper">
		<div class="folder-container">
			<div id="base-folder">
				<img id="folder-img" data-gif="blue" data-redirection="<?php echo site_url(); ?>/our-services/audit-risks/" src="<?php echo get_stylesheet_directory_uri(); ?>/images/file-blue.png" />
			</div>
			<div class="gif-home">
				<img id="gif-home-image" data-gif="blue" data-redirection="<?php echo site_url(); ?>/our-services/audit-risks/" src="<?php echo get_stylesheet_directory_uri(); ?>/images/gif-blue.gif" />
			</div>
		</div>
	</section>

	<!-- section-bottom -->
    <section id="ehouse-home-bottom">
        <div class="home-container">
			<div class="home-content-wrap">
				<div class="home-title-col">
					<h1 id="home-top-title" class="elementor-heading-title elementor-size-large animate__animated animate__fadeInDown">AUDIT &amp;<br>RISK</h1>
				</div>
				<div class="home-title-col">
					<h1 id="home-top-title-second" class="elementor-heading-title elementor-size-large animate__animated animate__fadeInDown font-brown">Corporate<br>Services</h1>
				</div>
			</div>
		</div>
    </section>

	<!-- section-top -->
	<section id="ehouse-home-top" data-srollid="1">
		<p>Services other than Audit are provided through our associate entity</p>
	</section>

    

	<!-- Section - Nav dots -->
	<section id="ehouse-home-dots">
		<ul>
			<li>
				<i class="fas fa-dot-circle" onclick="changeTopBackground(1)"></i>
			</li>
			<li>
				<i class="fas fa-dot-circle" onclick="changeTopBackground(2)"></i>
			</li>
			<li>
				<i class="fas fa-dot-circle" onclick="changeTopBackground(3)"></i>
			</li>
			<li>
				<i class="fas fa-dot-circle" onclick="changeTopBackground(4)"></i>
			</li>
			<li>
				<i class="fas fa-dot-circle" onclick="changeTopBackground(5)"></i>
			</li>
			<li>
				<i class="fas fa-dot-circle" onclick="changeTopBackground(6)"></i>
			</li>
		</ul>
	</section>
</div>

<!-- Section - home footer -->




<?php
get_footer();
?>
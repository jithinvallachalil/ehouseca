	<!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<?php wp_footer(); ?>

	<section id="new-footer">
		<div class="container">
			<div class="footer-1 footer-col">
				<h3>Quick Links</h3>
				<div id="footer-quicklinks">
					<ul>
						<li><a href="<?php echo site_url(); ?>">Home</a></li>
						<li><a href="<?php echo site_url(); ?>/about-us/">About</a></li>
						<li><a href="<?php echo site_url(); ?>/our-services/">Our Services</a></li>
						<li><a href="<?php echo site_url(); ?>/blog/">Media & Blogs</a></li>
						<li><a href="<?php echo site_url(); ?>/contact-us/">Contact Us</a></li>
						<li><a href="<?php echo site_url(); ?>/sitemap/" class="font-weight-700">Sitemap</a></li>
					</ul>
				</div>
				<h3>Connect with us</h3>
				<div id="social-media-links" class="footer-content">
					<ul class="elementor-icon-list-items">
						<li class="elementor-icon-list-item">
							<a href="//facebook.com/ehouseofficial007" target="_blank">
								<i class="fab fa-facebook"></i>
							</a>
						</li>
						<li class="elementor-icon-list-item">
							<a href="https://twitter.com/info_ehouse" target="_blank">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li class="elementor-icon-list-item">
							<a href="https://www.linkedin.com/company/enterprise-house-chartered-accountants/?viewAsMember=true" target="_blank">
								<i class="fab fa-linkedin"></i>
							</a>
						</li>
						<li class="elementor-icon-list-item">
							<a href="https://www.instagram.com/info_ehouse/" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li class="elementor-icon-list-item">
							<a href="https://www.pinterest.com/info_ehouse/" target="_blank">
								<i class="fab fa-pinterest"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-2 footer-col">
				<h3>Address</h3>
				<div class="footer-content">
					<p class="mb-0">Suite 209, Blue Tower,<br />Sheikh Zayed Road, Dubai, UAE</p>
				</div>
				<div class="footer-content">
					<ul class="elementor-icon-list-items">
						<li class="elementor-icon-list-item">
							<a href="tel:+971504578645"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="fas fa-phone-square-alt"></i></span><span class="elementor-icon-list-text">+971 504 57 8645</span></a>
						</li>
						<li class="elementor-icon-list-item">
							<a href="mailto:Office@ehouse.ae"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="auxicon auxicon-mail-1"></i></span><span class="elementor-icon-list-text">office@ehouse.ae</span></a>
						</li>
					</ul>
				</div>
				<div class="footer-content">
					<p class="mb-0">Suite 1502, Golden Tower,<br />Buhairah Corniche, Sharjah, UAE</p>
				</div>
				<div class="footer-content">
					<ul class="elementor-icon-list-items">
						<li class="elementor-icon-list-item">
							<a href="tel:+97165304001"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="fas fa-phone-square-alt"></i></span><span class="elementor-icon-list-text">+971 653 04 001</span></a>
						</li>
						<li class="elementor-icon-list-item">
							<a href="mailto:Office@ehouse.ae"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="auxicon auxicon-mail-1"></i></span><span class="elementor-icon-list-text">office@ehouse.ae</span></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-3 footer-col">
				<h3>Leave a Message</h3>
				<div id="footer-contact-form" class="footer-content">
					<?php echo do_shortcode('[contact-form-7 id="2436" title="Footer Reach Us"]'); ?>
				</div>
			</div>
		</div>
		<section id="footer-copyright">
			<div class="container">
				<div class="copyright-text copyright-left">
					<p>© <?php echo date('Y'); ?> Enterprise House. <a href="<?php echo site_url(); ?>/terms-of-service/">Terms of Service</a> & <a href="<?php echo site_url(); ?>/privacy-policy/">Privacy Policy</a></p>
				</div>
				<div class="copyright-text copyright-right">
					<p>Powered by <a href="https://www.digitalpaddock.ae/" target="_blank">Digital Paddock</a></p>
				</div>
			</div>
		</section>
	</section>



  </body>
</html>
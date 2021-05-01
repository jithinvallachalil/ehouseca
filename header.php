<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/64ffcf303f.js" crossorigin="anonymous"></script>

    <title>EHouse CA</title>
	<?php wp_head(); ?>
  </head>
  <body>
	<div id="ehouse-logo">
		<div class="container logo-container">
			<div id="logo-wrapper">
				<!-- <h2 class="logo-title">Enterprise House</h2>
				<h6 class="logo-subtitle">Chartered Accountants</h6> -->
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ehouse-logo.png" id="site-logo" />
				</a>
			</div>
			<div id="menu-wrapper">
				<nav class="menu-header-menu-container">

					<ul id="menu-header-menu-1" class="menu" data-type="horizontal">
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2390 current_page_item menu-item-2392">
							<a href="<?php echo site_url(); ?>/" aria-current="page">Home</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-535">
							<a href="<?php echo site_url(); ?>/about-us/">About Us</a>
						</li>
						<li id="services-mainmenu" class="main-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2446">
							<a class="text-dark" href="<?php echo site_url(); ?>/our-services/">Our Services <i class="fas fa-caret-down"></i></a>
							<div id="services-list">
								<nav class="navbar navbar-default py-0">
									<div class="container-fluid px-0 d-block">
										<div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="https://ehouseca.ae">Ehouseca</a></div>
										<div id="services-menu">
											<ul class="nav navbar-nav">
											<li class="dropdown font-blue">
												<a href="<?php echo site_url(); ?>/our-services/audit-risks/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Audit &amp; Risks <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url(); ?>/our-services/audit-risks/external-audits/">External Audits</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/audit-risks/rera-audits/">RERA Audits</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/audit-risks/due-diligence/">Due Diligence</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/audit-risks/bookkeeping-and-accounting-services/">Bookkeeping and  Accounting Services</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/audit-risks/liquidation-report/">Liquidation Report</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/audit-risks/internal-audit/">Internal Audit</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/audit-risks/special-purpose-audit/">Special Purpose Audit</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/audit-risks/reviews/">Reviews</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/audit-risks/agreed-upon-procedures/">Agreed Upon Procedures</a></li>
												</ul>
											</li>
											<li class="dropdown font-brown">
												<a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comp Formations & Co Services <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/mainland-company-formation/">Mainland Company Formation</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/free-zones-company-formation/">Free Zones Company Formation</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/offshore-company-formation/">Offshore Company Formation</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/secretarial-services/">Secretarial Services</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/pro-services/">PRO Services</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/visa-assistance/">Visa Assistance</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/local-sponsor-arrangement/">Local Sponsor Arrangement</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/legal-translation/">Legal Translation</a></li>
												</ul>
											</li>
											<li class="dropdown font-red">
												<a href="<?php echo site_url(); ?>/our-services/business-advisory/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business Advisory <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url(); ?>/our-services/business-advisory/business-valuation-services/">Business Valuation Services</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/business-advisory/variance-analysis/">Variance Analysis</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/business-advisory/budgeting-financial-projection/">Budgeting &amp; Financial Projection</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/business-advisory/investment-analysis/">Investment Analysis</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/business-advisory/restructuring-services/">Restructuring Services</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/business-advisory/succession-planning/">Succession Planning</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/business-advisory/feasibility-reports/">Feasibility Reports</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/business-advisory/merger-acquisitions/">Merger &amp; Acquisitions</a></li>
												</ul>
											</li>
											<li class="dropdown font-grey">
												<a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VAT, Excise &amp; Tax <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/transfer-pricing/">Transfer Pricing</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/value-added-tax/">Value-Added Tax</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/excise-tax/">Excise Tax</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/custom-duty/">Custom Duty</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/tax-consulting/">Tax Consulting</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/economic-substance-reporting-esr/">Economic Substance Reporting (ESR)</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/international-tax-restructuring/">International Tax Restructuring</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/ubo-reporting/">UBO Reporting</a></li>
												</ul>
											</li>
											<li class="dropdown font-green">
												<a href="<?php echo site_url(); ?>/our-services/intellectual-properties/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intellectual Properties <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo site_url(); ?>/our-services/intellectual-properties/trademark-advisory-registration/">Trademark Advisory &amp; Registration</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/intellectual-properties/patent-registration/">Patent Registration</a></li>
													<li><a href="<?php echo site_url(); ?>/our-services/intellectual-properties/copyright-registration/">Copyright Registration</a></li>
												</ul>
											</li>
											</ul>
										</div>
									</div>
								</nav>
								</div>
							<!-- <div id="services-list">
								<?php // echo create_bootstrap_menu('services-menu');?>
							</div> -->
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-544">
							<a href="<?php echo site_url(); ?>/blog/">Media &amp; Blogs</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-536">
							<a href="<?php echo site_url(); ?>/contact-us/">Contact Us</a>
						</li>
					</ul>

				</nav>
				<?php // wp_nav_menu(); // echo create_bootstrap_menu('services-menu');?>
				<i id="responsive-menu-trigger" class="fa fa-bars" aria-hidden="true"></i>
			</div>
		</div>
	</div>
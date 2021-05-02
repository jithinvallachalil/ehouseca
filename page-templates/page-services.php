<?php
/**
 *
 * Template Name: Services Page
 *
 *
 */
get_header(); ?>

    <main id="main">
        <div id="services-header" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/dubai.jpg')">
            <div class="services-overlay">
                <div class="container">
                    <h2><?php the_title(); ?></h2>
                </div>
                <?php 
                    if(get_field('other_services_option')) {
                    ?>
                        <ul id="banner-services">
                            <li>Other Services: </li>
                            <?php if ((get_field('current_service_page') != 'audit: Audit')) { ?>
                                <a href="<?php echo site_url(); ?>/our-services/audit-risks/">
                                    <li id="audit">Audits and Risks</li>
                                </a>
                            <?php } ?>
                            <?php if ((get_field('current_service_page') != 'co-formations: Company Formations')) { ?>
                                <a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/">
                                    <li id="co-formations">Co. Formations & Corp. Services</li>
                                </a>
                            <?php } ?>
                            <?php if ((get_field('current_service_page') != 'advisory: Business Advisory')) { ?>
                                <a href="<?php echo site_url(); ?>/our-services/business-advisory/">
                                    <li id="advisory">Business Advisory</li>
                                </a>
                            <?php } ?>
                            <?php if ((get_field('current_service_page') != 'vat: VAT, Excise & Tax')) { ?>
                                <a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/">
                                    <li id="vat">VAT, Excise & Tax</li>
                                </a>
                            <?php } ?>
                            <?php if ((get_field('current_service_page') != 'intellectual: Intellectual Properties')) { ?>
                                <a href="<?php echo site_url(); ?>/our-services/intellectual-properties/">
                                    <li id="intellectual">Intellectual Properties</li>
                                </a>
                            <?php } ?>
                        </ul>
                    <?php  
                    }
                ?>
            </div>
        </div>

        

        <div id="services-content" class="aux-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div id="services-content-wrap">
                        <?php the_content(); ?>
                    </div>                            
                </div>
                <div class="col-lg-3">
                    <aside id="aside-services" class="aux-sidebar aux-sidebar-primary">
                        <div class="sidebar-inner">
                            <div class="sidebar-content">
                                <div class="aux-widget-area">
                                    <section id="recent-comments-2" class=" aux-open widget-container widget_recent_comments">
                                        <h3 class="widget-title">Our Services</h3>
                                        <nav class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <!-- Brand and toggle get grouped for better mobile display -->
                                                <div class="navbar-header">
                                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    </button>
                                                    <a class="navbar-brand" href="https://ehouseca.ae">Ehouseca</a>
                                                </div>
                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
                                                    <ul class="nav navbar-nav">
                                                    <li class="dropdown">
                                                        <p class="service-toggle-wrap"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Audit &amp; Risks </a> <span class="services-toggle" data-id="1"><i class="fas fa-chevron-down"></i><span></span></span></p>
                                                        <p>
                                                        </p>
                                                        <ul class="dropdown-menu services-dropdown drop-down-1">
                                                            <li><a href="https://ehouseca.ae/our-services/audit-risks/external-audits/">External Audits</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/audit-risks/rera-audits/">RERA Audits</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/audit-risks/due-diligence/">Due Diligence</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/audit-risks/bookkeeping-and-accounting-services/">Bookkeeping and  Accounting Services</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/audit-risks/liquidation-report/">Liquidation Report</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/audit-risks/internal-audit/">Internal Audit</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/audit-risks/special-purpose-audit/">Special Purpose Audit</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/audit-risks/reviews/">Reviews</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/audit-risks/agreed-upon-procedures/">Agreed Upon Procedures</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <p class="service-toggle-wrap"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company Formations and Corporate Services </a> <span class="services-toggle" data-id="11"><i class="fas fa-chevron-down"></i><span></span></span></p>
                                                        <p>
                                                        </p>
                                                        <ul class="dropdown-menu services-dropdown drop-down-11">
                                                            <li><a href="https://ehouseca.ae/our-services/company-formations-and-corporate-services/mainland-company-formation/">Mainland Company Formation</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/company-formations-and-corporate-services/free-zones-company-formation/">Free Zones Company Formation</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/company-formations-and-corporate-services/offshore-company-formation/">Offshore Company Formation</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/company-formations-and-corporate-services/secretarial-services/">Secretarial Services</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/company-formations-and-corporate-services/pro-services/">PRO Services</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/company-formations-and-corporate-services/visa-assistance/">Visa Assistance</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/company-formations-and-corporate-services/local-sponsor-arrangement/">Local Sponsor Arrangement</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/company-formations-and-corporate-services/legal-translation/">Legal Translation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <p class="service-toggle-wrap"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business Advisory </a> <span class="services-toggle" data-id="20"><i class="fas fa-chevron-down"></i><span></span></span></p>
                                                        <p>
                                                        </p>
                                                        <ul class="dropdown-menu services-dropdown drop-down-20">
                                                            <li><a href="https://ehouseca.ae/our-services/business-advisory/business-valuation-services/">Business Valuation Services</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/business-advisory/variance-analysis/">Variance Analysis</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/business-advisory/budgeting-financial-projection/">Budgeting &amp; Financial Projection</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/business-advisory/investment-analysis/">Investment Analysis</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/business-advisory/restructuring-services/">Restructuring Services</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/business-advisory/succession-planning/">Succession Planning</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/business-advisory/feasibility-reports/">Feasibility Reports</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/business-advisory/merger-acquisitions/">Merger &amp; Acquisitions</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <p class="service-toggle-wrap"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VAT, Excise &amp; Tax </a> <span class="services-toggle" data-id="29"><i class="fas fa-chevron-down"></i><span></span></span></p>
                                                        <p>
                                                        </p>
                                                        <ul class="dropdown-menu services-dropdown drop-down-29">
                                                            <li><a href="https://ehouseca.ae/our-services/vat-excise-tax/transfer-pricing/">Transfer Pricing</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/vat-excise-tax/value-added-tax/">Value-Added Tax</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/vat-excise-tax/excise-tax/">Excise Tax</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/vat-excise-tax/custom-duty/">Custom Duty</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/vat-excise-tax/tax-consulting/">Tax Consulting</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/vat-excise-tax/economic-substance-reporting-esr/">Economic Substance Reporting (ESR)</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/vat-excise-tax/international-tax-restructuring/">International Tax Restructuring</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/vat-excise-tax/ubo-reporting/">UBO Reporting</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <p class="service-toggle-wrap"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intellectual Properties </a> <span class="services-toggle" data-id="38"><i class="fas fa-chevron-down"></i><span></span></span></p>
                                                        <p>
                                                        </p>
                                                        <ul class="dropdown-menu services-dropdown drop-down-38">
                                                            <li><a href="https://ehouseca.ae/our-services/intellectual-properties/trademark-advisory-registration/">Trademark Advisory &amp; Registration</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/intellectual-properties/patent-registration/">Patent Registration</a></li>
                                                            <li><a href="https://ehouseca.ae/our-services/intellectual-properties/copyright-registration/">Copyright Registration</a></li>
                                                        </ul>
                                                    </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /.container-fluid -->
                                        </nav>
                                    </section>
                                </div>
                            </div>
                            <!-- end sidebar-content -->
                        </div>
                        <!-- end sidebar-inner -->
                    </aside>
                </div>
            </div>
        </div><!-- end wrapper -->
    </main><!-- end main -->
<?php get_footer(); ?>

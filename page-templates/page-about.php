<?php

/* Template Name: About Page */
get_header();

?>

<style>

#about-section-one {
    margin-top: 4rem;
}

.text-center {
    text-align: center;
}

.three-col {
    float: left;
    width: calc(100%/3);
    padding: 2rem;
    text-align: justify;
}

.col-two {
    width: 50%;
    float: left;
}

#boss-image {
    max-height: 634px;
}

.about-col-wrap {
    width: 100%;
    float: left;
}

.project-title {
    color: #ff686b;
    font-size: 50px;
    margin: 40px 0;
    text-align: center;
    text-transform: uppercase;
  }
  .slider {
    /* background: #000; */
    min-height: 400px;
    position: relative;
    text-align: center;
    width: 100%;
    float: left;
  }
  .arrow {
    background: black;
    border: none;
    border-radius: 10%;
    color: white;
    cursor: pointer;
    display: none;
    opacity: .4;
    padding: 10px;
    position: absolute;
    text-transform: uppercase;
    -webkit-transition: .2s;
      top: 50%;
    transition: .2s;
  }
  .arrow:hover {
    opacity: .8;
  }
  .arrow.next {
    right: 2%
  }
  .arrow.prev {
    left: 2%;
  }
  .slide {
    background-repeat: no-repeat;
    background-size: cover;
    /* color: #fff; */
    height: 100%;
    padding: 20px 0 0;
    /* position: absolute; */
    width: 100%;
  }
  .slide-title {
    font-size: 19px;
    font-weight: bold;
    margin: 0 auto;
    padding: 15px 0 0;
    text-transform: uppercase;
}
  .slide-desc {
    font-size: 16px;
    width: 100%;
    text-align: justify;
}
  .slide-image,
  .slide-image img{
    height: 100%;
    width: 100%;
  }
  .slide:first-of-type {
    /* background-image: url("https://images.pexels.com/photos/40120/pexels-photo-40120.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb"); */
  }
  .slide:nth-of-type(2) {
    /* background-image: url("https://images.pexels.com/photos/288477/pexels-photo-288477.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb"); */
  }
  .slide:last-of-type {
    /* background-image: url("https://images.pexels.com/photos/27665/pexels-photo-27665.jpg?w=1260&h=750&auto=compress&cs=tinysrgb"); */
  }
  .active {
    display: block;
  }
  .slide-nav {
    width: 100%;
    float: left;
    display: none;
    text-align:center;
}
  .nav-item {
    background: #fff;
    border: 2px solid #808080;
    cursor: pointer;
    display: inline-block;
    margin-right: 20px;
    transition: background .4s;
  }
  .nav-item:last-of-type {
    margin-right: 0;
  }
  .nav-item:hover {
    transform: scale(1.3);
  }
  .item-active {
    background: #e6e6e6;
    transform: scale(1.3);
  }
  .dot {
    border-radius: 50%;
  }
  .dot,
  .square{
    height: 15px;
      width: 15px;
  }
  .rectangle {
    height: 15px;
    width: 30px;
  }
  
  #about-employees {
    width: 100%;
    float: left;
    margin: 1rem 0 0;
    padding: 1rem 0;
}

.slide-row {
    width: 100%;
    float: left;
}


.slide-two-col,
.slide-img-col,
.slide-content-col {
    width: 50%;
    float: left;
}

.slide-box {
    box-shadow: 0px 0px 13px -4px #00000047;
    float: left;
    margin: 1rem;
    padding: 1rem 1rem 0;
    min-height: 450px;
}

.about-slider-wrapper {
    float: left;
    position: relative;
}

.elementor-top-section {
    float: left;
    width: 100%;
    padding: 3rem 0;
}

#about-employees {
    margin: 2rem 0 0;
    background: #fdfdfd;
    float: left;
    width: 100%;
}

#about-testimonial {
    background: linear-gradient(to right, #102d93, #0052ec);
    float: left;
    width: 100%;
    color: #fff;
    padding: 3rem 0;
}

.testimonial-profile-image {
    border-radius: 50%;
}

.slide-img-col img {
    max-height: 350px;
}

#slide-show {
  height: 100vh;
  min-height: 100vh;
  overflow: hidden;
  width: 100vw;
  min-width: 100vw !important;
  position: relative;
}

.slide-text {
  font-size: 20px;
  color: #fff;
  text-align:center;
}

.slide-text b {
  font-weight: 400; 
}

.slide-text h2 {
  font-weight: 200;
  font-family: Raleway;
  font-size: 50px;
  text-align: center;
  line-height: 60px;
  letter-spacing: 1px;
  color: #fff;
}

.slidex {
  opacity: 0;
  transition: opacity 1.5s ease-in-out;
  z-index: -1;
}

.activx {
  opacity: 1;
}

.slideshow-nav {
  position: absolute;
  bottom: 50%; 
  width: 100vw;
  min-width: 100vw !important;
  font-size: 30px;
  background: transparent;  
}

.previousx {
  float: left;
}

.nextx {
  float: right;
}

.bg1, .bg2, .bg3, .bg4, .bg5, .bg6 {
  background-repeat: no-repeat !important;
  background-attachment: scroll !important;
  background-position: center center !important;
  background-size: cover !important;
  background-image: url("//ehouseca.ae/wp-content/uploads/2021/03/team-1.png");
  height: 100vh;
  min-height: 100vh;
  overflow: hidden;
  width: 100vw;
  min-width: 100vw !important;
  position: absolute;
  top:0;
  left:0;
}

.bg1 {
    background-size: contain !important;
}

.bg2 {background-image: url("//ehouseca.ae/wp-content/uploads/2021/03/about-11.jpg");}
.bg3 { background-image: url("//ehouseca.ae/wp-content/uploads/2021/03/about-22.jpg");}
.bg4 {background-image: url("//ehouseca.ae/wp-content/uploads/2021/03/about-33.jpg");}
.bg5 {background-image: url("//ehouseca.ae/wp-content/uploads/2021/03/about-44.jpg");}
.bg6 {background-image: url("//ehouseca.ae/wp-content/uploads/2021/03/about-55.jpg");}

.slider-center {
  position: absolute;
  height:15%;
  width: 50%;
  left: 50%;
  top: 50%;
  background-color: transparent;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: left;
  letter-spacing: 2px;
}

.nav-link {
  transition: all 0.4s;
  padding: 15px;
  color:#fff;
  opacity: 0.2;
  font-size: 40px;  
}
.nav-link:hover {
  color: #999;
  font-size: 80px;
  opacity: 0.8;
}

.arrow a {
  position: absolute;
  bottom:0;
  left: 50%;
  color: #fff;
  transition: all 0.4s;
  cursor: pointer;
  font-size: 80px;
  padding: 0 0 20px 0;
  opacity: 0.2;
}

.arrow a:hover {
  color: #999;
  font-size: 100px;
  opacity: 0.8;
}

.about-icon-wrap i {
    color: #444;
    font-size: 24px;
    margin-right: 9px;
}

.about-icon-wrap {
    margin-bottom: 2rem;
}

#slide-show a {
    color: #fff;
    font-weight: 800;
}

.elementor-icon-box-icon {
    display: none;
}

.boss-main-title {
    font-size: 26px;
}

@media screen and (max-width: 992px) {
    .about-col-wrap .col-two {
        width: 100% !important;
    }

    .about-desc .three-col {
        width: 100%;
    }
}

@media screen and (min-width: 1200px) {
    .slide-box {
        min-height: 405px;
        display: flex;
        align-items: center;
    }

    .slide-img-col img {
        margin-bottom: 15px;
    }

    .elementor-section.elementor-top-section.elementor-element.elementor-element-7cab99a.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {
        padding: 3rem 0 0;
    }
}

.mb-0 {
    margin-bottom: 0;
}

.arafat-col {
    margin-bottom: calc(1.7em + -4px);
}

@media screen and (max-width: 992px) {
    .slide-two-col,
    .slide-img-col,
    .slide-content-col {
        width: 100%;
    }
}

</style>

<div id="about-page">
    <!-- About Slider -->
    <div id="slide-show">
    
        <div class="slidex activx">
            <div class="bg1">
                <div class="slider-center">
                    <div class="slide-text"></div>
                </div>
            </div>
        </div>
    
        <div class="slidex">
            <div class="bg2">
                <div class="blue-overlay">
                    <div class="slider-center">
                        <div class="slide-text">
                            <h2><a href="<?php echo site_url(); ?>/our-services/audit-risks/">Audit & Risks</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="slidex">
            <div class="bg3">
                <div class="brown-overlay">
                    <div class="slider-center">
                        <div class="slide-text">
                            <h2><a href="<?php echo site_url(); ?>/our-services/company-formations-and-corporate-services/">Company Formations & Corporate Services </a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="slidex">
            <div class="bg4">
                <div class="red-overlay">
                    <div class="slider-center">
                        <div class="slide-text">
                            <h2><a href="<?php echo site_url(); ?>/our-services/business-advisory/">Business Advisory</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="slidex">
            <div class="bg5">
                <div class="green-overlay">
                    <div class="slider-center">
                        <div class="slide-text">
                            <h2><a href="<?php echo site_url(); ?>/our-services/vat-excise-tax/">VAT, Excise & Tax</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="slidex last">
            <div class="bg6">
                <div class="grey-overlay">
                    <div class="slider-center">
                        <div class="slide-text">
                            <h2><a href="<?php echo site_url(); ?>/our-services/intellectual-properties/">Intellectual Properties</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="slideshow-nav">
            <a href="#" class="nav-link previousx">
                <i class="fa fa-angle-left"></i>
            </a>
            <a href="#" class="nav-link nextx">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    
    </div>
    <!-- Section About intro -->
    <div id="about-section-one" class="about-section">
        <div class="container">
            <!-- Title -->
            <div class="about-title">
                <h1 class="text-center mb-0">Enterprise House</h1>
                <h3 class="text-center">Chartered Accountants</h3>
            </div>
            <!-- Description -->
            <div class="about-desc">
                <!-- Column 1 -->
                <div class="three-col">
                    <p>Enterprise House Chartered Accountants has established itself as one of the leading auditing and advisory firms in the region. We are a UAE-based Financial-Technology platform providing solutions for Audit & Risk, Company Formations, Tax, Business Advisory, and Trademark Registrations. </p>
                    <p>We have a rich experience in providing audit to small, medium, large and cross border entities. With well qualified and experience team we provide quality audit which is useful for the clients business decisions. Apart from external audit our team is well versed in due diligence, forensic audit, internal audit, RERA audits, reviews, etc.</p>
                    <p>We offer very efficient and professional financial advice with a wide range of specialized services to meet the immediate as well as the long-term needs of our client’s business.</p>
                </div>
                <!-- Column 2 -->
                <div class="three-col">
                    <p>In our constant efforts to provide our clients with the most suitable service propositions on time, we have brought to us our combined experience of over hundred years to create service offerings based on our practice and in-depth industry insights and knowledge and a special eye for the needs of the clients.</p>
                    <p>We assist our clients’ in selecting an appropriate structure for their proposed operations in UAE. Our compliance team can also assist your organization in accounting & bookkeeping, ESR, trademark advisory & registration, copyrights registration, PRO services, visa assistance, etc., </p>
                    <p>In view of our years of experience, we also possess expert knowledge on details of attestations and documentation required in UAE.</p>
                </div>
                <!-- Column 3 -->
                <div class="three-col">
                    <p>We are a one-stop-shop – covering all aspects of operations including payroll processing, accounting, tax filings, transfer pricing, trademark registration, etc. for all foreign and domestic companies in UAE. Every existing business is different from one another, our approach is flexible and tailored as per the client’s needs. Our clients include several large business groups, multi-national corporations, and first-generation entrepreneurs. Our client relationships are based on mutual respect and collaboration. The graph of our growth in this industry is a byproduct of an exceptional client service delivered by our people who are among the best in the industry that one can find. The timely professional services which we provide are complemented by the quality-oriented attitude with a client-centric approach. Currently, Enterprise House serves its clients from two offices in Dubai and one in Sharjah.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Managing Partner -->
    <div id="about-boss" class="about-section">
        <div class="container">
            <div class="about-col-wrap">
                <!-- Col 1 -->
                <div class="col-two text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/boss.png" class="img-responsive" id="boss-image" />
                </div>
                <!-- Col 2 -->
                <div class="col-two">
                    <div class="about-boss-content">
                        <h2 class="boss-main-title">Message from The Managing Partner</h2>
                        <h4 class="boss-name">Atik Munshi</h4>
                        <!-- <h5 class="boss-designation">Managing Partner</h5> -->
                        <div class="about-icon-wrap">
                            <a href="mailto:munshi.atik@ehouse.ae">
                                <span class="elementor-icon-list-icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <!-- <span class="elementor-icon-list-text">office@ehouse.ae</span> -->
                            </a>
                            <a href="https://www.linkedin.com/in/atik-munshi-28a09769/" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                        <div id="md-message-wrap">
                            <p>Atik Munshi is qualified Fellow Chartered Accountant, Certified Fraud Examiner, Certified Internal Control Auditor and member of prestigious organizations in the field of accountancy and fraud investigations. After nearly 25 years working as Senior equity partner and Board Member at a top 10 accounting firm he embarked on a new journey under the banner“Enterprise House”.</p>
                            <p>Atik Munshi is specialized in areas of Mergers &amp; Acquisitions, Forensic Accounting, New Business setup/expansion/diversification advice, Formation of Offshore companies and local companies in UAE and Audit. Apart from the above he has a vast experience for Compliance advisory, restructuring advisory, Advisory on many complex business issues and in the field of Real Estate where he covers areas like Project Feasibility, Project Selection, Project Marketing, and negotiations. Mr. Munshi has acted as engagement partner for several listed entities.</p>
                            <p>Atik Munshi is a thinker, leader and a regular writer with various local news publications like Khaleej Times, Gulf News and author of several books and acted as Board member in some reputed UAE companies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Employees -->
    <div id="about-employees">
        <div>
            <h1 class="text-center">Our Key People</h1>
        </div>
        <div class="about-slider-wrapper">
            <!-- Slideshow container -->
            <div class="slideshow-container">
                <div class="container">
                    <div class="slider">
                        <!-- Slide 1 -->
                        <div class="slide">
                            <div class="slide-row">
                                <div class="slide-two-col">
                                    <div class="slide-box">
                                        <div class="slide-img-col">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Tosif.png" />
                                        </div>
                                        <div class="slide-content-col">
                                            <h2 class="slide-title">Tosif Sheikh</h2>
                                            <h6 class="slide-subtitle">Partner</h6>
                                            <p class="slide-desc">Tosif Sheikh is qualified Chartered Accountant & also awarded with CFA Charter holder designation from the CFA Institute, USA. He completed his graduation in commerce from DAVV, India. He had an experience of working as an Executive at one of the largest conglomerate listed on Indian stock exchange.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-two-col">
                                    <div class="slide-box">
                                        <div class="slide-img-col">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Arafath.png" />
                                        </div>
                                        <div class="slide-content-col arafat-col">
                                            <h2 class="slide-title">Arafath Hussain</h2>
                                            <h6 class="slide-subtitle">Partner</h6>
                                            <p class="slide-desc">Arafath Hussain is a qualified B.tech Engineer in Computer Science, Cisco Certified Engineer and Lean Six Sigma specialist (Green Belt). He is a seasoned professional and has experience in this field for more than ten years and is responsible for setting up and leading our Corporate Advisory practice.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="slide">
                            <div class="slide-row">
                                <div class="slide-one-col">
                                    <div class="slide-box">
                                        <div class="slide-content-col">
                                            <h2 class="slide-title">Nazima Nisar</h2>
                                            <h6 class="slide-subtitle">Director</h6>
                                            <p class="slide-desc">Nazima Nisar graduated with a Bachelor of Science degree followed by master’s degree from Maharaja Sayaji Rao University, Vadodara. She also holds a Bachelor’s in Education Degree (Gold Medalist) from Maharaja Sayaji Rao University, Vadodara.</p>
                                            <p class="slide-desc">She has an expertise in advising for Long term Investment strategies for private investors, Due Diligence and Business advisory. </p>
                                        </div>
                                        <div class="slide-img-col">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Nazima.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="slide">
                            <div class="slide-row">
                                <div class="slide-two-col">
                                    <div class="slide-box">
                                        <div class="slide-img-col">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Aldrin.png" />
                                        </div>
                                        <div class="slide-content-col">
                                            <h2 class="slide-title">Aldrin D'Costa</h2>
                                            <h6 class="slide-subtitle">Compliance Officer</h6>
                                            <p class="slide-desc">A Lawyer and a High Court practitioner from India, Aldrin is a competent, dynamic and result oriented profession with well over 6 years of experience across the fields of Intellectual Property Laws, Commercial Laws, Cyber Laws, Tax Laws, & Advisory.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-two-col">
                                    <div class="slide-box">
                                        <div class="slide-content-col">
                                            <h2 class="slide-title">Ruhina Shaikh</h2>
                                            <h6 class="slide-subtitle">Senior Consultant</h6>
                                            <p class="slide-desc">Ruhina Shaikh has done her graduation in Engineering in the Field of Information technology with C.G.P.A (8.28) from Gujarat Technological University, Gujarat India. Ruhina Shaikh has extensive experience in the field of IT Systems Audit.</p>
                                        </div>
                                        <div class="slide-img-col">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ruhina.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="arrow prev"><i class="fas fa-chevron-left"></i></button>
                    <button class="arrow next"><i class="fas fa-chevron-right"></i></button>
                    <ul class="slide-nav"></ul>
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- Section Mission and Vision -->
    <section class="elementor-section elementor-top-section elementor-element elementor-element-7cab99a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="7cab99a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="aux-parallax-section elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cc09026"
                    data-id="cc09026" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-e487c93 elementor-widget elementor-widget-heading" data-id="e487c93" data-element_type="widget"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default text-center"><i class="fas fa-crosshairs"></i> Mission</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9c7ce17 elementor-widget elementor-widget-text-editor" data-id="9c7ce17"
                                data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p>Enterprise House gives ease of doing business to the entrepreneur of UAE. Our mission
                                            at Enterprise House is to take care of your hassles for any corporate transaction
                                            and give you relief so you can focus on your business growth.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aux-parallax-section elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c5c1f4e"
                    data-id="c5c1f4e" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-8314378 elementor-widget elementor-widget-heading" data-id="8314378" data-element_type="widget"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default text-center"><i class="fas fa-eye"></i> Vision</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2fdec2e elementor-widget elementor-widget-text-editor" data-id="2fdec2e"
                                data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p>Enterprise House to be the best corporate service provider. Being the best means providing
                                            outstanding services with high professionalism so that we can give ease of life to
                                            entrepreneurs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Core Values -->
    <section class="elementor-section elementor-top-section elementor-element elementor-element-59cc293 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="59cc293" data-element_type="section" style="padding: 0 0 3rem;">
        <div class="container elementor-column-gap-default">
            <h2 class="text-center mb-0"><i class="fas fa-file-invoice-dollar"></i> Our Core Values</h2>
            <div class="elementor-row">
                <div class="aux-parallax-section elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c594704"
                    data-id="c594704" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-811ad44 elementor-view-framed elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                data-id="811ad44" data-element_type="widget" data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <i aria-hidden="true" class="fas fa-calendar-times"></i>
                                            </span>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h3 class="elementor-icon-box-title">
                                                <span>Accurate Solutions</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-dd4efd0 elementor-widget elementor-widget-text-editor" data-id="dd4efd0"
                                data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p style="text-align: center;">
                                            <strong>We listen and guide</strong>
                                        </p>
                                        <p style="text-align: center;">We provide the best solution when we listen to the need of our clients.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aux-parallax-section elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b8840e4"
                    data-id="b8840e4" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-d90ddac elementor-view-framed elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                data-id="d90ddac" data-element_type="widget" data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <i aria-hidden="true" class="far fa-clock"></i>
                                            </span>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h3 class="elementor-icon-box-title">
                                                <span>Punctuality with Timeline</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7f670e6 elementor-widget elementor-widget-text-editor" data-id="7f670e6"
                                data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p style="text-align: center;">
                                            <span style="font-weight: bold; text-align: start;">We Value Time</span>
                                        </p>
                                        <p style="text-align: center;">Time is precious. We value the time of the entrepreneur and thus deliver the work within given timeline.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aux-parallax-section elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-62e5a63"
                    data-id="62e5a63" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-2358f2c elementor-view-framed elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                data-id="2358f2c" data-element_type="widget" data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <i aria-hidden="true" class="far fa-address-book"></i>
                                            </span>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h3 class="elementor-icon-box-title">
                                                <span>Take Responsibility</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b2a206c elementor-widget elementor-widget-text-editor" data-id="b2a206c"
                                data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p style="text-align: center;">
                                            <span style="font-weight: bold; text-align: left;">We Take Responsibility</span>
                                        </p>
                                        <p style="text-align: center;">We treat every client’s business very seriously. Our approach is solution-centric.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
// Slider configuration
var config = {
    speed: 3000,
    auto: false, // true or false
    arrows: true, // true or false
    nav: true, // true or false
    navStyle: 'default' // square,rectangle, default
  };
  
  // Slider core
  var slides = jQuery('.slide');
  var totalSlides = slides.length;
  var currentIndex = 0;
  
  function setSlides() {
    var currentSlide = slides.eq(currentIndex);
    slides.hide();
    currentSlide.fadeIn(1500);
  };
  setSlides();
  
  // autoplay
  if (config.auto) {
    var autoSlide = setInterval(function() {
      currentIndex += 1;
      if (currentIndex > totalSlides - 1) {
        currentIndex = 0;
      }
      setSlides();
      navigation();
    }, config.speed);
  };
  
  // navigation arrows
  if (config.arrows) {
    jQuery('.arrow').addClass('active');
    jQuery('.prev').click(function() {
      clearInterval(autoSlide);
      currentIndex -= 1;
      if (currentIndex < 0) {
        currentIndex = totalSlides - 1;
      }
      navigation();
      setSlides();
    });
    jQuery('.next').click(function() {
      clearInterval(autoSlide);
      currentIndex += 1;
      if (currentIndex > totalSlides - 1) {
        currentIndex = 0;
      }
      navigation();
      setSlides();
    });
  };
  
  // navigation
  if (config.nav) {
      for (i = 0; i < slides.length; i+=1) {
        jQuery('<li/>').attr( {'class': 'nav-item','id': i}).appendTo('.slide-nav');
      };
    jQuery('.nav-item').first().addClass('item-active');
    switch(config.navStyle) { // navigation style
      case 'square':
          jQuery('.nav-item').addClass('square');
          break;
      case 'rectangle':
          jQuery('.nav-item').addClass('rectangle');
          break;
      default:
          jQuery('.nav-item').addClass('dot');
    };
    function navigation() {
      jQuery('.nav-item').removeClass('item-active');
      jQuery('.nav-item').eq(currentIndex).addClass('item-active');
    };
      jQuery('.nav-item').click(function() {
        clearInterval(autoSlide);
        var navNumb =  jQuery(this).attr('id');
        currentIndex = navNumb;
        navigation();
        setSlides();
    });
  };


  jQuery(document).ready(function(){
  var jQueryprev = jQuery('.previousx');
  var jQuerynext = jQuery('.nextx');
  var mode = "auto";
  jQueryprev.on({
    click: function(e){
      e.preventDefault();
      mode = "manual";
      showPreviousImage();
    }
  });
  jQuerynext.on({
    click: function(e){
      e.preventDefault();
      mode = "manual";
      showNextImage();
      
    }
  });
  
  setInterval(function(){
    if(mode==="auto"){
      showNextImage();
    }
  },5000);
  
  function showNextImage(){
      var jQueryactEl = jQuery('.activx');
      var jQuerynextEl = jQueryactEl.next('.slidex');
      if(jQuerynextEl.length){
        jQueryactEl.removeClass('activx');
        jQuerynextEl.addClass('activx');
      }else{
        jQueryactEl.removeClass('activx');
        jQuery('.slidex:first-child').addClass('activx');
      }
  }
  
  function showPreviousImage(){
      var jQueryactEl = jQuery('.activx');
      var jQueryprevEl = jQueryactEl.prev('.slidex');
      if(jQueryprevEl.length){
        jQueryactEl.removeClass('activx');
        jQueryprevEl.addClass('activx');
      }else{
        jQueryactEl.removeClass('activx');
        jQuery('.slidex.last').addClass('activx');
      }
  }
});
  
</script>

<?php get_footer(); ?>
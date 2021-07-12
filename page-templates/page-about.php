<?php

/* Template Name: About Page */
get_header();
?>

<style>

.about-item {
    height: calc(100vh - 101.31px);
    background-size: cover !important;
    background-position: center !important;
}

</style>

<div id="about-page-slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item about-item active" style="background: url()">
            <div class="d-flex align-items-center h-100">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about/about-1.png" class="img-fluid" />
            </div>
        </div>
        <div class="carousel-item about-item" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/about/about-2.jpg)">
            <div class="bg-overlay blue-overlay">
                <h1 class="w-100">
                    <a class="text-white"href="<?php echo site_url(); ?>/our-services/audit-risks/">Audit &amp; Risks</a>
                </h1>
            </div>
        </div>
        <div class="carousel-item about-item" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/about/about-3.jpg)">
            <div class="bg-overlay brown-overlay">
                <h1 class="w-100">
                    <a class="text-white"href="<?php echo site_url(); ?>/our-services/audit-risks/">Comp Formations & Co Services</a>
                </h1>
            </div>
        </div>
        <div class="carousel-item about-item" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/about/about-3.jpg)">
            <div class="bg-overlay red-overlay">
                <h1 class="w-100">
                    <a class="text-white"href="<?php echo site_url(); ?>/our-services/audit-risks/">Business Advisory</a>
                </h1>
            </div>
        </div>
        <div class="carousel-item about-item" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/about/about-3.jpg)">
            <div class="bg-overlay grey-overlay">
                <h1 class="w-100">
                    <a class="text-white"href="<?php echo site_url(); ?>/our-services/audit-risks/">VAT, Excise &amp; Tax </a>
                </h1>
            </div>
        </div>
        <div class="carousel-item about-item" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/about/about-3.jpg)">
            <div class="bg-overlay green-overlay">
                <h1 class="w-100">
                    <a class="text-white"href="<?php echo site_url(); ?>/our-services/audit-risks/">Intellectual Properties </a>
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="about-main-content my-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img id="ehouse-about-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ehouse-logo-title.png" alt="Ehouse About Logo">
                <!-- <h1 id="about-logo-title"><span class="capital-letter">E</span>nterprise <span class="capital-letter">H</span>ouse</h1>
                <h4>Chartered Accountants</h4> -->
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <p>Enterprise House Chartered Accountants has established itself as one of the leading auditing and advisory firms in the region. We are a UAE-based Financial-Technology platform providing solutions for Audit & Risk, Company Formations, Tax, Business Advisory, and Trademark Registrations.</p>
                <p>We have a rich experience in providing audit to small, medium, large and cross border entities. With well qualified and experience team we provide quality audit which is useful for the clients business decisions. Apart from external audit our team is well versed in due diligence, forensic audit, internal audit, RERA audits, reviews, etc.</p>
                <p>We offer very efficient and professional financial advice with a wide range of specialized services to meet the immediate as well as the long-term needs of our client’s business.</p>
            </div>
            <div class="col-xl-4">
                <p>In our constant efforts to provide our clients with the most suitable service propositions on time, we have brought to us our combined experience of over hundred years to create service offerings based on our practice and in-depth industry insights and knowledge and a special eye for the needs of the clients.</p>
                <p>We assist our clients’ in selecting an appropriate structure for their proposed operations in UAE. Our compliance team can also assist your organization in accounting & bookkeeping, ESR, trademark advisory and registration, copyrights registration, PRO services, visa assistance, etc.,</p>
                <p>In view of our years of experience, we also possess expert knowledge on details of attestations and documentation required in UAE.</p>
            </div>
            <div class="col-xl-4">
                <p>We are a one-stop-shop – covering all aspects of operations including payroll processing, accounting, tax filings, transfer pricing, trademark registration, etc. for all foreign and domestic companies in UAE. Every existing business is different from one another, our approach is flexible and tailored as per the client’s needs. Our clients include several large business groups, multi-national corporations, and first-generation entrepreneurs. Our client relationships are based on mutual respect and collaboration. The graph of our growth in this industry is a byproduct of an exceptional client service delivered by our people who are among the best in the industry that one can find. The timely professional services which we provide are complemented by the quality-oriented attitude with a client-centric approach. Currently, Enterprise House serves its clients from two offices in Dubai and one in Sharjah.</p>
            </div>
        </div>
    </div>
</div>

<div id="boss-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_field('managing_director_content'); ?>
            </div>
        </div>
            <!-- <div class="col-xxl-6 col-lg-5 text-center align-self-center"> -->
                <!-- <div class="d-flex align-self-center">
                    <img src="<?php // echo get_stylesheet_directory_uri(); ?>/images/boss.png" class="img-fluid boss-image" />
                </div> -->
            <!-- </div> -->
            <!-- <div class="col-xxl-6 col-lg-7"> -->
                <!-- <h2>Message from the Managing Partner</h2>
                <h4>Atik Munshi</h4>
                <div class="w-100">
                    <a href="mailto:munshi.atik@ehouse.ae"><i class="fas fa-envelope-square"></i></a>
                    <a href="https://www.linkedin.com/in/atik-munshi-28a09769/" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
				<p class="font-blue">We, Enterprise House Chartered Accountants, have established our self as one of the leading Audit and Advisory firms in the region, and I would like to emphasize the key message of our firm. Efficient services with ethics at heart are our motto. We are well-positioned to deliver impeccable service and value to our clients. We understand the client’s needs both commercially and culturally and can provide personalized and timely services to meet the client's expectations. Our high quality of professional services to SMEs has made us a market leader in the small and medium enterprise sector in UAE.</p>
                <p class="font-blue">That is one of the reasons we have gained the trust of our clients during my 25 years of professional service in the UAE. With our industry knowledge and experience, we help our clients make informed and effective business decisions; we believe in mutual growth strategy by staying independent and committed to professional ethics. As we offer most of the professional services that a business needs under our banner, we call ourselves a one-stop solution.
                </p>
                <p>Atik Munshi is qualified Fellow Chartered Accountant, Certified Fraud Examiner, Certified Internal Control Auditor and member of prestigious organizations in the field of accountancy and fraud investigations. After nearly 25 years working as Senior equity partner and Board Member at a top 10 accounting firm he embarked on a new journey under the banner“Enterprise House”.</p>
            </div>
            <div class="col-12">
                <p>Atik Munshi is specialized in areas of Mergers & Acquisitions, Forensic Accounting, New Business setup/expansion/diversification advice, Formation of Offshore companies and local companies in UAE and Audit. Apart from the above he has a vast experience for Compliance advisory, restructuring advisory, Advisory on many complex business issues and in the field of Real Estate where he covers areas like Project Feasibility, Project Selection, Project Marketing, and negotiations. Mr. Munshi has acted as engagement partner for several listed entities.</p>
                <p>Atik Munshi is a thinker, leader and a regular writer with various local news publications like Khaleej Times, Gulf News and author of several books and acted as Board member in some reputed UAE companies.</p>
            </div> -->
        <!-- </div> -->
    </div>
</div>

<!-- Key People -->
<div id="our-key-people" class="my-4">
    <div class="container">
        <!-- <div class="row"></div> -->
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Our Key People</h1>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <!-- Tosif -->
                        <div class="col-xl-6">
                            <div class="about-box">
                                <div class="row">
                                    <div class="col-lg-6 text-center">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/teams/Tosif.png" class="img-fluid employee-img" alt="TOSIF SHEIKH">
                                    </div>
                                    <div class="col-lg-6 employee-details-wrap">
                                        <div class="emp-carousel-details">
                                            <h4>TOSIF SHEIKH</h4>
                                            <h6>Partner</h6>
                                            <p>Tosif Sheikh is qualified Chartered Accountant & also awarded with CFA Charter holder designation from the CFA Institute, USA. He completed his graduation in commerce from DAVV, India. He had an experience of working as an Executive at one of the largest conglomerate listed on Indian stock exchange.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Arafath -->
                        <div class="col-xl-6">
                            <div class="about-box">
                                <div class="row">
                                    <div class="col-lg-6 text-center">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/teams/Arafath.png" class="img-fluid employee-img" alt="TOSIF SHEIKH">
                                    </div>
                                    <div class="col-lg-6 employee-details-wrap">
                                        <div class="emp-carousel-details">
                                            <h4>ARAFATH HUSSAIN</h4>
                                            <h6>Partner</h6>
                                            <p>Arafath Hussain is a qualified B.tech Engineer in Computer Science, Cisco Certified Engineer and Lean Six Sigma specialist (Green Belt). He is a seasoned professional and has experience in this field for more than ten years and is responsible for setting up and leading our Corporate Advisory practice.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <!-- Nazima -->
                        <div class="col-xl-6 mx-auto">
                            <div class="about-box">
                                <div class="row">
                                    <div class="col-lg-5 text-center">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/teams/Nazima.png" class="img-fluid employee-img" alt="TOSIF SHEIKH">
                                    </div>
                                    <div class="col-lg-7 employee-details-wrap">
                                        <div class="emp-carousel-details">
                                            <h4>NAZIMA NISAR</h4>
                                            <h6>Director</h6>
                                            <p>Nazima Nisar graduated with a Bachelor of Science degree followed by master’s degree from Maharaja Sayaji Rao University, Vadodara. She also holds a Bachelor’s in Education Degree (Gold Medalist) from Maharaja Sayaji Rao University, Vadodara.She has an expertise in advising for Long term Investment strategies for private investors, Due Diligence and Business advisory.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <!-- Tosif -->
                        <div class="col-xl-6">
                            <div class="about-box">
                                <div class="row">
                                    <div class="col-lg-6 text-center">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/teams/Aldrin.png" class="img-fluid employee-img" alt="TOSIF SHEIKH">
                                    </div>
                                    <div class="col-lg-6 employee-details-wrap">
                                        <div class="emp-carousel-details">
                                            <h4>Aldrin</h4>
                                            <h6>Legal & Compliance Officer</h6>
                                            <p>A Lawyer and a High Court practitioner from India, Aldrin is a technically competent, dynamic and result oriented professional with well over 6 years of experience across the fields of Intellectual Property Laws, Commercial Laws, Cyber Laws, Tax Laws, &amp; Advisory.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Arafath -->
                        <div class="col-xl-6">
                            <div class="about-box">
                                <div class="row">
                                    <div class="col-lg-6 text-center">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/teams/Ruhina.png" class="img-fluid employee-img" alt="TOSIF SHEIKH">
                                    </div>
                                    <div class="col-lg-6 employee-details-wrap">
                                        <div class="emp-carousel-details">
                                            <h4>Ruhina</h4>
                                            <h6>Senior Consultant</h6>
                                            <p>Ruhina Shaikh has extensive experience in the field of IT Systems, Audit and in Business Development for the formation of companies in Offshore, Free zones, and Mainland in UAE. She has versatile experience in dealing with multinational clients. She also has experience in the establishing IT framework and Security field of IT</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="about-prev-button" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <i class="fas fa-chevron-left"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button id="about-next-button" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <i class="fas fa-chevron-right"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<!-- Mission and Vision -->
<div id="mission-and-vision" class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-center"><i class="fas fa-crosshairs"></i> Mission</h2>
                <p class="text-justify">Enterprise House gives ease of doing business to the entrepreneur of UAE. Our mission at Enterprise House is to take care of your hassles for any corporate transaction and give you relief so you can focus on your business growth</p>
            </div>
            <div class="col-lg-6">
                <h2 class="text-center"><i class="fas fa-eye"></i> Vision</h2>
                <p class="text-justify">Enterprise House to be the best corporate service provider. Being the best means providing outstanding services with high professionalism so that we can give ease of life to entrepreneurs.</p>
            </div>
        </div>
    </div>
</div>

<!-- Our Core Values -->
<div id="core-values" class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="core-item">
                    <h4>Accurate Solutions</h4>
                    <p><b>We Listen and Guide</b></p>
                    <p>We provide the best solution when we listen to the need of our clients</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="core-item">
                    <h4>Punctuality with Timeline</h4>
                    <p><b>We Value Time</b></p>
                    <p>Time is precious. We value the time of the entrepreneur and thus deliver the work within given timeline.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="core-item">
                    <h4>Take Responsibility</h4>
                    <p><b>We Take Responsibility</b></p>
                    <p>We treat every client’s business very seriously. Our approach is solution-centric.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
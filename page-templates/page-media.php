<?php
/* Template Name: Media Page */
get_header();
?>

<div id="media-page">
    <!-- Media Page banner -->
    <div id="media-page-banner">
        <div class="media-banner-overlay"></div>
    </div>
    <!-- Media intro content -->
    <div id="media-intro-content">
        <div class="container">
            <div class="w-100">
                <p class="media-title-desc">Offshore & Midshore Companies Download 
                    <a href="https://ehouseca.ae/wp-content/uploads/2021/03/E-house-offshore-booklet.pdf" download="">
                        <button class="btn blue-button">Download</button>
                    </a>
                </p>
            </div>
            <!-- <div class="w-100">
                <p class="media-title-desc">SLAVE I WAS BORN, SLAVE I WILL DIE: Am I Really In Control?
                    <a href="https://ehouseca.ae/slave-i-was-born-slave-i-will-die/">
                        <button class="btn blue-button">View More Details</button>
                    </a>
                </p>
            </div> -->
        </div>
    </div>
    <!-- Media Blogs -->
    <div id="media-blogs">
        <div class="container">
        <?php
            $args = array(
                'post_type' => 'post'
            );

            $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    ?>
                        <div class="row mb-4">
                            <div class="col-xl-7">
                                <div class="media-title-wrap media-col-12">
                                    <h3 class="media-title"><?php the_title(); ?></h3>
                                </div>
                                <div class="media-content-wrap">
                                    <p>Public Relationship officer is handling all types of government transactions including government approvals, document drafting, execution of agreement in various government  departments, etc. As an expat, you might not be familiar with all the governmental laws for some legal process. This is where the role of PRO comes in. PRO service providers are professional with all legal requirements and thus they can save your time and money. At Enterprise House, our expert PRO team can assist you with all legal transactions such as-</p>
                                    <ul class="media-list">
                                        <li>Visa Services</li>
                                        <li>Document Drafting and Translation Services</li>
                                        <li>Government Approvals</li>
                                        <li>Free Document Collection and Delivery Services</li>
                                        <li>Immigration and Labour Department Transactions</li>
                                        <li>New Company Formation</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-5 align-self-center">
                                <div class="media-image-container">
                                    <img src="<?php the_field('post_image'); ?>" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                }
        ?>
        </div>
    </div>
    <!-- Section 1 -->
    <!-- <div class="media-section">
        <div class="container">
            <div class="media-title-wrap media-col-12">
                <h3 class="media-title">Why to get a professional PRO Services in UAE?</h3>
            </div>
            <div class="media-col-6">
                <p>Public Relationship officer is handling all types of government transactions including government approvals, document drafting, execution of agreement in various government  departments, etc. As an expat, you might not be familiar with all the governmental laws for some legal process. This is where the role of PRO comes in. PRO service providers are professional with all legal requirements and thus they can save your time and money. At Enterprise House, our expert PRO team can assist you with all legal transactions such as-</p>
                <ul class="media-list">
                    <li>Visa Services</li>
                    <li>Document Drafting and Translation Services</li>
                    <li>Government Approvals</li>
                    <li>Free Document Collection and Delivery Services</li>
                    <li>Immigration and Labour Department Transactions</li>
                    <li>New Company Formation</li>
                </ul>
            </div>
            <div class="media-col-6">
                <div class="media-image-wrap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/media-1.jpg" />
                </div>
            </div>
        </div>
    </div> -->
    <!-- Section 2 -->
    <!-- <div class="media-section">
        <div class="container">
            <div class="media-title-wrap media-col-12">
                <h3 class="media-title">How to set-up a business at low cost in Dubai?</h3>
            </div>
            <div class="media-col-6">
                <p>Do you wish to start your business from home without renting any office?</p>
                <p>If yes then E-trader license is just for you. Dubai Economic Department has introduced a new license named E-Trader for entrepreneur who wish to do business from home by social media platforms.</p>
                <p>It was launched only for the GCC Nationals to run their trading and professional business by social media platforms. With time passed, economic department extended E-Trader license to expat also for providing professional services.</p>
                <p>What are criteria for E-Trader license?</p>
                <ul class="media-list">
                    <li>One must have a valid UAE residence visa.</li>
                    <li>Applicant must be 21 years old or above</li>
                    <li>A valid Tenancy contract is must to apply for this license</li>
                </ul>
            </div>
            <div class="media-col-6">
                <div class="media-image-wrap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/media-2.jpg" />
                </div>
            </div>
        </div>
    </div> -->
    <!-- Section 3 -->
    <!-- <div class="media-section">
        <div class="container">
            <div class="media-title-wrap media-col-12">
                <h3 class="media-title">All you need to know about business license in UAE</h3>
            </div>
            <div class="media-col-6">
                <p>The Unites Arab Emirates is having amongst the most beautiful infrastructure in the world. The UAE government has made investor friendly rules which attracts foreign investors to start their business in UAE. In UAE, one can start their business based on their individual requirement. For example, if investor wants to do business across the world including inside the UAE, they can start their company with mainland and get all the benefits of UAE business laws. If entrepreneur wants to do business only outside UAE, they can establish their business in any of the UAE free zone. These companies will get benefits of 0% Tax especially to the trading and import-export license. Another option for Jurisdiction is Offshore company, which will be preferred by the businessmen who is looking to open a company for investment such as holding company. Once you have decided your business plan, you can seek to a business consultant for the suitable activity according to your business plan.</p>
            </div>
            <div class="media-col-6">
                <div class="media-image-wrap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/media-3.jpg" />
                </div>
            </div>
        </div>
    </div> -->
</div>

<?php get_footer(); ?>

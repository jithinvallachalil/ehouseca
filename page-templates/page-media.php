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
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/E-house-offshore-booklet.pdf" download="">
                        <button class="btn blue-button btn-sm">Download</button>
                    </a>
                </p>
            </div>
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
</div>

<?php get_footer(); ?>

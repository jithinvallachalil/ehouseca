<?php get_header(); ?>

<div id="services-header" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/dubai.jpg')">
    <div class="services-overlay">
        <div class="container">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</div>

<div id="ehouse-content">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
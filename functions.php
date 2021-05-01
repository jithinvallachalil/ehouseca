<?php

/***********************************************************
 ***********************************************************
    MAIN FUNCTIONS FILE
***********************************************************
***********************************************************/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/***********************************************************
    ADDITIONAL FILES TO BE INCLUDED
***********************************************************/

if(!current_user_can('administrator')){
    show_admin_bar(false);
}

/***********************************************************
    ADDITIONAL FILES TO BE INCLUDED
***********************************************************/

// Includes file for online pooja booking
// require_once WP_CONTENT_DIR . '/themes/THEME-NAME/inc/enqueue.php';


/***********************************************************
    USER ROLES
***********************************************************/
// remove_role( 'subscriber' );

/***********************************************************
    Changing Default Role Names
***********************************************************/

// Changing Role Names
// function change_role_name() {
//     global $wp_roles;

//     if ( !isset( $wp_roles ) ) {
//         $wp_roles = new WP_Roles();
//     }

//     $wp_roles->roles['administrator']['name'] = 'Onetikk Admin';
//     $wp_roles->role_names['administrator'] = 'Onetikk Admin';

//     $wp_roles->roles['editor']['name'] = 'Admin';
//     $wp_roles->role_names['editor'] = 'Admin';

//     $wp_roles->roles['author']['name'] = 'Comittee Members';
//     $wp_roles->role_names['author'] = 'Comittee Members';

//     $wp_roles->roles['contributor']['name'] = 'Installation Engineer';
//     $wp_roles->role_names['contributor'] = 'Installation Engineer';

//     $wp_roles->roles['subscriber']['name'] = 'Customer';
//     $wp_roles->role_names['subscriber'] = 'Customer';
        
// }
// add_action('init', 'change_role_name');

/***********************************************************
    DISABLE BACKEND ACCESS
***********************************************************/
function disable_backend_for_specific_roles() {
    if( is_admin() && !defined('DOING_AJAX') && ( current_user_can('subscriber') || current_user_can('contributor') ) ){
      wp_redirect(home_url());
      exit;
    }
  }
  add_action('init','disable_backend_for_specific_roles');

/*****************************************************************************
  DISABLES COMMENTS FROM EVERYWHERE
*****************************************************************************/

add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});


/***********************************************************
    ENQUEUE STYLES AND SCRIPTS
***********************************************************/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

/*****************************************************************************
    STYLES AND SCRIPTS FOR FRONTEND PAGES
*****************************************************************************/

	// Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/theme.css' );
    wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/js/theme.js', array(), $the_theme->get( 'Version' ), true );

    if (is_page_template('page-templates/page-home.php')) {
        wp_enqueue_style('style-home', get_stylesheet_directory_uri() . '/css/home.css' );
        wp_enqueue_script( 'home-js', get_stylesheet_directory_uri() . '/js/home.js', array(), $the_theme->get( 'Version' ), true );

        wp_localize_script(
            'home-js',
            'ajax',
            array(
                'ajax_url' => admin_url( 'admin-ajax.php' ),
                'redirecturl' => home_url(),
            )
        );
    }

    wp_localize_script(
        'theme-script',
        'ajax',
        array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'redirecturl' => home_url(),
        )
    );
}
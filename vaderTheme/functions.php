<?php

/**
 * Const Variables
 */
if ( !defined( 'URL_SITE' ) )
    define( 'URL_SITE', get_home_url() );

if ( !defined( 'URL_TEMPLATE' ) )
    define( 'URL_TEMPLATE', get_template_directory_uri() );

if ( !defined( 'PATH_TEMPLATE' ) )
    define( 'PATH_TEMPLATE', __DIR__ );


/**
 * Custom Functions
 */
if ( file_exists( PATH_TEMPLATE . '/components/functions/init-functions.php' ) )
    require PATH_TEMPLATE . '/components/functions/init-functions.php';

if ( file_exists( PATH_TEMPLATE . '/components/functions/custom-functions.php' ) )
    require PATH_TEMPLATE . '/components/functions/custom-functions.php';

if ( file_exists( PATH_TEMPLATE . '/components/functions/custom-functions.php' ) )
    require PATH_TEMPLATE . '/components/functions/theme-require-plugins.php';

if ( file_exists( PATH_TEMPLATE . '/components/functions/class-tgm-plugin-activation.php' ) )
   require_once dirname( __FILE__ ) . '/components/functions/class-tgm-plugin-activation.php';

   

if ( !function_exists( 'components_setup' ) ) { //Add Wordpress Featured Support and Menu Register
	function components_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'menus' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu' )
		) );

	}
    
	add_action( 'after_setup_theme', 'components_setup' );
}

function getVersion(){
    $my_theme = wp_get_theme();
    return esc_html( $my_theme->get( 'Version' ) );
  }


/**
 * Enqueue scripts and styles.
 */

if ( !function_exists( 'components_scripts' ) ) {
    function components_scripts() {

        wp_deregister_script('jquery'); //Remove Wordpress jQuery and add a custom jQuery
        wp_enqueue_script('jquery', URL_TEMPLATE . '/assets/libraries/js/jquery_3.1.1.min.js', array(), null, true);
        wp_enqueue_script('fancybox-script', URL_TEMPLATE . '/assets/libraries/js/jquery.fancybox.min', array('jquery'), 1.0, true);
        wp_enqueue_style( 'fancybox-theme', URL_TEMPLATE . '/assets/libraries/css/jquery.fancybox.css', array(), 1.0 );

        /* Main Scripts */
    
        wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), getVersion() );
        wp_enqueue_script( 'main-script', URL_TEMPLATE . '/assets/js/main.js', array( 'jquery' ), getVersion(), true );

        /* Custom Scripts by template */
    
        if ( is_front_page() ){ wp_enqueue_style( 'homepage', URL_TEMPLATE . '/assets/css/frontpage.css', array(), getVersion() ); }

        if ( is_home() || is_category() ){ wp_enqueue_style( 'blog', URL_TEMPLATE . '/assets/css/blog.css', array(), getVersion() ); }
    
    }
    
    add_action( 'wp_enqueue_scripts', 'components_scripts' );
}

/* Function for get information about social medias's links of the site. */
if ( !function_exists( 'get_data_site' ) ) {
    function get_data_site( $social ) {
        $socialLinks = array(
            'facebook'   => 'https://www.facebook.com/',
            'twitter'    => 'https://twitter.com/',
            'instagram'  => 'https://www.instagram.com/',
            'googleplus' => 'https://plus.google.com/',
            'youtube'    => 'https://www.youtube.com/user/',
            'pinterest'  => 'https://www.pinterest.com/',
            'linkedin'   => 'https://www.linkedin.com/company/',
            'realself'   => 'https://www.realself.com/find/',
            'email'      => 'mail@example.com',
            'phone'      => '000.000.000',
            'address'    => 'Street Address',
            'streetAddress'    => 'streetAddress',
            'addressLocality'    => 'addressLocality',
            'addressRegion'    => 'addressRegion',
            'postalCode' => '00000-000',
            'latitude' => '00000',
            'longitude' => '-00000',
            'location'   => '#'
        );

        return array_key_exists($social, $socialLinks) ? $socialLinks[ $social ] : null;
    }
}

/* Function for get information about social medias's links of the site. */
if ( !function_exists( 'data_site' ) ) {
    function data_site( $social ) {
        echo get_data_site( $social );
    }
}

/* Create ACF Options Page */
if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page();

	
}
<?php

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	));


// SCRIPTS
function wpdocs_theme_name_scripts() {
    wp_enqueue_script( 'js-script', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), true );
    wp_enqueue_script( 'js-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

//NAV-WALKER
require get_template_directory() . '/inc/vendor/wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/cpt.php';

//CSS
function cssfunction() {
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'cssfunction');

//ADD THUMBNAIL SUPPORT
add_theme_support('post-thumbnails');

//EXCERPT
function custom_excerpt_length( $length ) {
    return 14;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s"> %2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>
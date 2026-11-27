<?php
/**
 * Registration of custom post types.
 *
 * @package		whatsup
 * @subpackage	includes/custom-post-types
 * @version		1.0.0
 * @author		Solomon Culaste
 */

// Actions that we need to hook in to.
add_action('init', 'whatsup_cpt');
// add_action( 'init', 'whatsup_taxonomies' );

if( ! function_exists( 'whatsup_cpt' ) ) {
    /**
     * Kidsworld custom post types.
     *
     * @return  void
     * @hook    init
     */
    function whatsup_cpt() {

        // Theme Event CPT.
        register_post_type(
            'whatsup_event',
            apply_filters(
                'whatsup_post_type_event',
                [
                    'labels' => [
                        'name'                => _x( 'Event', 'Post Type General Name', 'whatsup' ),
                        'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'whatsup' ),
                        'menu_name'           => __( 'Events', 'whatsup' ),
                        'all_items'           => __( 'All Events', 'whatsup' ),
                        'view_item'           => __( 'View Event', 'whatsup' ),
                        'add_new_item'        => __( 'Add New', 'whatsup' ),
                        'add_new'             => __( 'Add New', 'whatsup' ),
                        'edit_item'           => __( 'Edit Event', 'whatsup' ),
                        'update_item'         => __( 'Update Event', 'whatsup' ),
                        'search_items'        => __( 'Search Event', 'whatsup' ),
                        'not_found'           => __( 'No Event found', 'whatsup' )
                    ],
                    'description'           => __( 'This is where theme events are stored.', 'whatsup' ),
                    'public'                => true,
                    'show_ui'               => true,
                    'capability_type'       => 'post',
                    'map_meta_cap'          => true,
                    'publicly_queryable'    => true,
                    'exclude_from_search'   => true,
                    'hierarchical'          => false,
                    'show_in_nav_menus'     => true,
                    'rewrite'               => [ 'slug' => 'event' ],
                    'query_var'             => true,
                    'supports'              => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
                    'has_archive'           => 'event',
                    'menu_icon'             => 'dashicons-format-aside'
                ]
            )
        );

        // Theme Article CPT.
        register_post_type(
            'whatsup_article',
            apply_filters(
                'whatsup_post_type_article',
                [
                    'labels' => [
                        'name'                => _x( 'Article', 'Post Type General Name', 'whatsup' ),
                        'singular_name'       => _x( 'Article', 'Post Type Singular Name', 'whatsup' ),
                        'menu_name'           => __( 'Articles', 'whatsup' ),
                        'all_items'           => __( 'All Articles', 'whatsup' ),
                        'view_item'           => __( 'View Article', 'whatsup' ),
                        'add_new_item'        => __( 'Add New', 'whatsup' ),
                        'add_new'             => __( 'Add New', 'whatsup' ),
                        'edit_item'           => __( 'Edit Article', 'whatsup' ),
                        'update_item'         => __( 'Update Article', 'whatsup' ),
                        'search_items'        => __( 'Search Article', 'whatsup' ),
                        'not_found'           => __( 'No Article found', 'whatsup' )
                    ],
                    'description'           => __( 'This is where theme articles are stored.', 'whatsup' ),
                    'public'                => true,
                    'show_ui'               => true,
                    'capability_type'       => 'post',
                    'map_meta_cap'          => true,
                    'publicly_queryable'    => true,
                    'exclude_from_search'   => true,
                    'hierarchical'          => false,
                    'show_in_nav_menus'     => true,
                    'rewrite'               => [ 'slug' => 'article' ],
                    'query_var'             => true,
                    'supports'              => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
                    'has_archive'           => 'article',
                    'menu_icon'             => 'dashicons-format-aside',
                    'taxonomies'            => [ 'post_tag' ]
                ]
            )
        );

        // Theme Job CPT.
        register_post_type(
            'whatsup_job',
            apply_filters(
                'whatsup_post_type_job',
                [
                    'labels' => [
                        'name'                => _x( 'Job', 'Post Type General Name', 'whatsup' ),
                        'singular_name'       => _x( 'Job', 'Post Type Singular Name', 'whatsup' ),
                        'menu_name'           => __( 'Jobs', 'whatsup' ),
                        'all_items'           => __( 'All Jobs', 'whatsup' ),
                        'view_item'           => __( 'View Job', 'whatsup' ),
                        'add_new_item'        => __( 'Add New', 'whatsup' ),
                        'add_new'             => __( 'Add New', 'whatsup' ),
                        'edit_item'           => __( 'Edit Job', 'whatsup' ),
                        'update_item'         => __( 'Update Job', 'whatsup' ),
                        'search_items'        => __( 'Search Job', 'whatsup' ),
                        'not_found'           => __( 'No Job found', 'whatsup' )
                    ],
                    'description'           => __( 'This is where theme jobs are stored.', 'whatsup' ),
                    'public'                => true,
                    'show_ui'               => true,
                    'capability_type'       => 'post',
                    'map_meta_cap'          => true,
                    'publicly_queryable'    => true,
                    'exclude_from_search'   => true,
                    'hierarchical'          => false,
                    'show_in_nav_menus'     => true,
                    'rewrite'               => [ 'slug' => 'job' ],
                    'query_var'             => true,
                    'supports'              => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
                    'has_archive'           => 'job',
                    'menu_icon'             => 'dashicons-format-aside'
                ]
            )
        );

        // Theme Directory CPT.
        register_post_type(
            'whatsup_directory',
            apply_filters(
                'whatsup_post_type_directory',
                [
                    'labels' => [
                        'name'                => _x( 'Directory', 'Post Type General Name', 'whatsup' ),
                        'singular_name'       => _x( 'Directory', 'Post Type Singular Name', 'whatsup' ),
                        'menu_name'           => __( 'Directories', 'whatsup' ),
                        'all_items'           => __( 'All Directories', 'whatsup' ),
                        'view_item'           => __( 'View Directory', 'whatsup' ),
                        'add_new_item'        => __( 'Add New', 'whatsup' ),
                        'add_new'             => __( 'Add New', 'whatsup' ),
                        'edit_item'           => __( 'Edit Directory', 'whatsup' ),
                        'update_item'         => __( 'Update Directory', 'whatsup' ),
                        'search_items'        => __( 'Search Directory', 'whatsup' ),
                        'not_found'           => __( 'No Directory found', 'whatsup' )
                    ],
                    'description'           => __( 'This is where theme directories are stored.', 'whatsup' ),
                    'public'                => true,
                    'show_ui'               => true,
                    'capability_type'       => 'post',
                    'map_meta_cap'          => true,
                    'publicly_queryable'    => true,
                    'exclude_from_search'   => true,
                    'hierarchical'          => false,
                    'show_in_nav_menus'     => true,
                    'rewrite'               => [ 'slug' => 'article' ],
                    'query_var'             => true,
                    'supports'              => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
                    'has_archive'           => 'article',
                    'menu_icon'             => 'dashicons-format-aside'
                ]
            )
        );




    }
}


if( ! function_exists( 'whatsup_taxonomies' ) ) {

    function whatsup_taxonomies() {
        // Add new taxonomy, NOT hierarchical (like tags)
        $labels = [
            'name'                       => _x( 'Locations', 'taxonomy general name', 'textdomain' ),
            'singular_name'              => _x( 'Location', 'taxonomy singular name', 'textdomain' ),
            'search_items'               => __( 'Search Locations', 'textdomain' ),
            'popular_items'              => __( 'Popular Locations', 'textdomain' ),
            'all_items'                  => __( 'All Locations', 'textdomain' ),
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'edit_item'                  => __( 'Edit Location', 'textdomain' ),
            'update_item'                => __( 'Update Location', 'textdomain' ),
            'add_new_item'               => __( 'Add New Location', 'textdomain' ),
            'new_item_name'              => __( 'New Location Name', 'textdomain' ),
            'separate_items_with_commas' => __( 'Separate locations with commas', 'textdomain' ),
            'add_or_remove_items'        => __( 'Add or remove locations', 'textdomain' ),
            'choose_from_most_used'      => __( 'Choose from the most used locations', 'textdomain' ),
            'not_found'                  => __( 'No locations found.', 'textdomain' ),
            'menu_name'                  => __( 'Locations', 'textdomain' )
        ];

        $args = [
            'hierarchical'          => false,
            'labels'                => $labels,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'location' )
        ];

        register_taxonomy( 'location', [ 'whatsup_event', 'whatsup_article' ], $args );
    }

}
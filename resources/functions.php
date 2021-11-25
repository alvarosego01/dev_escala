<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);


$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version);


define( 'CHILD_DIR', get_theme_file_path() );


/*
* Creating a function to create our CPT
*/

function customPost_casosExito() {

    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Casos de éxito', 'Post Type General Name', 'escala' ),
            'singular_name'       => _x( 'Caso de éxito', 'Post Type Singular Name', 'escala' ),
            'menu_name'           => __( 'Casos de éxito', 'escala' ),
            'parent_item_colon'   => __( 'Principal Caso de éxito', 'escala' ),
            'all_items'           => __( 'Todos los Casos de éxito', 'escala' ),
            'view_item'           => __( 'Ver Caso de éxito', 'escala' ),
            'add_new_item'        => __( 'Añadir nuevo Caso de éxito', 'escala' ),
            'add_new'             => __( 'Añadir nuevo', 'escala' ),
            'edit_item'           => __( 'Editar Caso de éxito', 'escala' ),
            'update_item'         => __( 'Actualizar Caso de éxito', 'escala' ),
            'search_items'        => __( 'Buscar Caso de éxito', 'escala' ),
            'not_found'           => __( 'No se encuentra', 'escala' ),
            'not_found_in_trash'  => __( 'No se encuentra en papelera', 'escala' ),
        );

    // Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'Casos de éxito', 'escala' ),
            'description'         => __( 'Caso de éxito nuevos y revisiones', 'escala' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy.
                // This is where we add taxonomies to our CPT
            'taxonomies'          => array( 'genres', 'category' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,

        );

        // Registering your Custom Post Type
        register_post_type( 'caso-de-exito', $args );

    }

    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not
    * unnecessarily executed.
    */

    add_action( 'init', 'customPost_casosExito');



// -------------------------------------------------------------------------------- //


//     add_action( 'admin_menu', 'misha_menu_page' );

//     function misha_menu_page() {

//         add_menu_page(
//             'Navbars & footers', // page <title>Title</title>
//             'Navbars & footers', // menu link text
//             'manage_options', // capability to access the page
//             'misha-slug', // page URL slug
//             'misha_page_content', // callback function /w content
//             'dashicons-star-half', // menu icon
//             5 // priority
//         );

//     }
//     function misha_page_content(){

//         echo '<div class="wrap">
//         <h1>Navbars & footers Settings</h1>
//         <form method="post" action="options.php">';

//         $templates = wp_get_theme()->get_page_templates();

//         $args = array(
//             'sort_order' => 'asc',
//             'sort_column' => 'post_title',
//             'hierarchical' => 1,
//             'exclude' => '',
//             'include' => '',
//             'meta_key' => '',
//             'meta_value' => '',
//             'authors' => '',
//             'child_of' => 0,
//             'parent' => -1,
//             'exclude_tree' => '',
//             'number' => '',
//             'offset' => 0,
//             'post_type' => 'page',
//             'post_status' => 'publish'
//         );
//         $pages = get_pages($args); // get all pages based on supplied args
//         $paginas = array();

//         foreach($pages as $page){ // $pages is array of object
//             $l = array(
//                 'ID' => $page->ID,
//                 'post_title' => $page->post_title,
//                 'navBar' =>
//             );

//             array_push($paginas, $l);
//          }


//             // settings_fields( 'misha_settings' ); // settings group name
//             // do_settings_sections( 'misha-slug' ); // just a page slug

//             submit_button();

//         echo '</form></div>';

//     }

//     add_action( 'admin_init',  'misha_register_setting' );

// function misha_register_setting(){

// 	register_setting(
// 		'misha_settings', // settings group name
// 		'homepage_text', // option name
// 		'sanitize_text_field' // sanitization function
// 	);

// 	add_settings_section(
// 		'some_settings_section_id', // section ID
// 		'', // title (if needed)
// 		'', // callback function (if needed)
// 		'misha-slug' // page slug
// 	);

// 	add_settings_field(
// 		'homepage_text',
// 		'Homepage text',
// 		'misha_text_field_html', // function which prints the field
// 		'misha-slug', // page slug
// 		'some_settings_section_id', // section ID
// 		array(
// 			'label_for' => 'homepage_text',
// 			'class' => 'misha-class', // for <tr> element
// 		)
// 	);

// }

// function misha_text_field_html(){

// 	$text = get_option( 'homepage_text' );

// 	printf(
// 		'<input type="text" id="homepage_text" name="homepage_text" value="%s" />',
// 		esc_attr( $text )
// 	);

// }
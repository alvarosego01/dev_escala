<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

use App\Controllers\App;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {



    // acá se añaden los templates que usarán bootstrap
    $bootstrapPages = array(
        "views/template-home.blade.php",
        "views/template-landing-incredible.blade.php",
    );

    // views/template-home.blade.php

    if (is_page_template($bootstrapPages)) {


        wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
        wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

        // wp_enqueue_style('sage/main.css', asset_path('/dist/styles/main.css'), false, null);
        // wp_enqueue_script('sage/main.js', asset_path('/dist/scripts/main.js'), ['jquery'], null, true);

        if (is_single() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }


    }else{

        wp_enqueue_style('sage/main.css', asset_path('styles/reserv/old.css'), false, null);
    }




}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Footer', 'sage'),
        'id'            => 'sidebar-footer'
    ] + $config);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });

    sage('blade')->compiler()->component('components.headers.t1.component-header-T1','header_t1');

});


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});


// estilos

add_action('wp_enqueue_scripts', function () {

    // acá se añaden los templates que usarán bootstrap
    $bootstrapPages = array(
        "views/template-home.blade.php",
        "views/template-landing-incredible.blade.php",
    );

    // views/template-home.blade.php

    if (is_page_template($bootstrapPages)) {



        wp_enqueue_style('sage/main.css', asset_path('/dist/styles/main.css'), false, null);

        wp_enqueue_script('sage/main.js', asset_path('/dist/scripts/main.js'), ['jquery'], null, true);


        wp_register_style('bootstrapCss', get_template_directory_uri() . '/../oceanwp-child/resources/assets/bootstrap/dist/css/bootstrap.min.css', array(), rand(), 'all');
        wp_enqueue_style('bootstrapCss');




        wp_register_script('bootstrapJs', get_template_directory_uri() . '/../oceanwp-child/resources/assets/bootstrap/dist/js/bootstrap.min.js', array('jquery'), rand(), 'all');
        wp_enqueue_script('bootstrapJs');

        // // wp_register_script('popperJs', get_template_directory_uri() . '/../oceanwp-child/resources/assets/bootstrap/dist/js/popper.min.js', array('jquery'), rand(), 'all');
        // // wp_enqueue_script('popperJs');

    } else {

        // estilos viejos
        wp_enqueue_style('sage/main.css', asset_path('styles/reserv/old.css'), false, null);
    }
}, 100);

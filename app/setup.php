<?php

namespace App;

use App\Controllers\ACF_CUSTOM;
use App\Controllers\SetComponents;
use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

use App\Controllers\App;
/**
 * Theme assets
 */

$bootstrapPages = array(
    "views/template-home.blade.php",
    "views/template-landing-incredible.blade.php",
    "views/template-landing-incredible-no-program.blade.php",
    "views/template-landing-incredible-am.blade.php",
    "views/template-func-page-builder.blade.php",
    "views/template-func-analiticas.blade.php",
    "views/template-func-automatization.blade.php",
    "views/template-func-crm-escala.blade.php",
    "views/template-func-email.blade.php",
    "views/template-func-digital-announces.blade.php",
    "views/template-escala-fex.blade.php",
    "views/template-zoom-demo-home.blade.php",
    "views/template-zoom-demo-meeting.blade.php",
    "views/template-open-webinar-escala.blade.php",
    "views/template-open-webinar-escala-meeting.blade.php",
    "views/template-blog-home.blade.php",
    "views/template-blog-category.blade.php",
    // "views/template-blog-single.blade.php",
    "views/single-post.blade.php",

);




add_action('wp_enqueue_scripts', function () {

    // acá se añaden los templates que usarán bootstrap


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

    // registro de componentes
    // sage('blade')->compiler()->component('components.headers.component-header-T1','header_t1');

    $SetComponents = new SetComponents();
    $c = $SetComponents->setAllComponents();
    foreach ($c as $key => $value) {
        sage('blade')->compiler()->component( $key, $value );
    }



});


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});


// estilos

add_action('wp_enqueue_scripts', function () {

    if (is_page_template($bootstrapPages)) {


        // wp_register_style('nunitoFonts', get_template_directory_uri() . '/../oceanwp-child/resources/assets/bootstrap/dist/css/bootstrap.min.css', array(), rand(), 'all');
        // wp_enqueue_style('nunitoFonts');


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



/**
 * Disables REFILL function in WPCF7 if Recaptcha is in use
 */
add_action('wp_enqueue_scripts', 'wpcf7_recaptcha_no_refill', 15, 0);
function wpcf7_recaptcha_no_refill() {
  $service = WPCF7_RECAPTCHA::get_instance();
	if ( ! $service->is_active() ) {
		return;
	}
  wp_add_inline_script('contact-form-7', 'wpcf7.cached = 0;', 'before' );
}


$setACF = new ACF_CUSTOM();
// $x = $setACF->setACF();
add_action('acf/init', $setACF->setACF() );




/**
 * Rewrite WordPress URLs to Include /blog/ in Post Permalink Structure
 *
 * @author   Golden Oak Web Design <info@goldenoakwebdesign.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html GPLv2+
 */
function golden_oak_web_design_blog_generate_rewrite_rules( $wp_rewrite ) {
    $new_rules = array(
      '(([^/]+/)*blog)/page/?([0-9]{1,})/?$' => 'index.php?pagename=$matches[1]&paged=$matches[3]',
      'blog/([^/]+)/?$' => 'index.php?post_type=post&name=$matches[1]',
      'blog/[^/]+/attachment/([^/]+)/?$' => 'index.php?post_type=post&attachment=$matches[1]',
      'blog/[^/]+/attachment/([^/]+)/trackback/?$' => 'index.php?post_type=post&attachment=$matches[1]&tb=1',
      'blog/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
      'blog/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
      'blog/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?post_type=post&attachment=$matches[1]&cpage=$matches[2]',
      'blog/[^/]+/attachment/([^/]+)/embed/?$' => 'index.php?post_type=post&attachment=$matches[1]&embed=true',
      'blog/[^/]+/embed/([^/]+)/?$' => 'index.php?post_type=post&attachment=$matches[1]&embed=true',
      'blog/([^/]+)/embed/?$' => 'index.php?post_type=post&name=$matches[1]&embed=true',
      'blog/[^/]+/([^/]+)/embed/?$' => 'index.php?post_type=post&attachment=$matches[1]&embed=true',
      'blog/([^/]+)/trackback/?$' => 'index.php?post_type=post&name=$matches[1]&tb=1',
      'blog/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&name=$matches[1]&feed=$matches[2]',
      'blog/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&name=$matches[1]&feed=$matches[2]',
      'blog/page/([0-9]{1,})/?$' => 'index.php?post_type=post&paged=$matches[1]',
      'blog/[^/]+/page/?([0-9]{1,})/?$' => 'index.php?post_type=post&name=$matches[1]&paged=$matches[2]',
      'blog/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?post_type=post&name=$matches[1]&paged=$matches[2]',
      'blog/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?post_type=post&name=$matches[1]&cpage=$matches[2]',
      'blog/([^/]+)(/[0-9]+)?/?$' => 'index.php?post_type=post&name=$matches[1]&page=$matches[2]',
      'blog/[^/]+/([^/]+)/?$' => 'index.php?post_type=post&attachment=$matches[1]',
      'blog/[^/]+/([^/]+)/trackback/?$' => 'index.php?post_type=post&attachment=$matches[1]&tb=1',
      'blog/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
      'blog/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
      'blog/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?post_type=post&attachment=$matches[1]&cpage=$matches[2]',
    );
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
  }
  add_action( 'generate_rewrite_rules', 'golden_oak_web_design_blog_generate_rewrite_rules' );

  function golden_oak_web_design_update_post_link( $post_link, $id = 0 ) {
    $post = get_post( $id );
    if( is_object( $post ) && $post->post_type == 'post' ) {
      return home_url( '/blog/' . $post->post_name );
    }
    return $post_link;
  }
  add_filter( 'post_link', 'golden_oak_web_design_update_post_link', 1, 3 );
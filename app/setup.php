<?php

namespace App;

use App\Controllers\ACF_CUSTOM;
use App\Controllers\SetComponents;
use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

use App\Controllers\App;
use App\Controllers\MenuSettings;

/**
 * Theme assets
 */


// print_r($bootstrapPages);


add_action('wp_enqueue_scripts', function () {

    // acá se añaden los templates que usarán bootstrap

    $bootstrapPages = SetComponents::setTemplates('all');

    wp_register_style('bootstrapCss', get_template_directory_uri() . '/../oceanwp-child/resources/assets/bootstrap/dist/css/bootstrap.min.css', array(), rand(), 'all');
    wp_enqueue_style('bootstrapCss');

    wp_register_script('bootstrapJs', get_template_directory_uri() . '/../oceanwp-child/resources/assets/bootstrap/dist/js/bootstrap.min.js', array('jquery'), rand(), 'all');
    wp_enqueue_script('bootstrapJs');

    if (is_page_template($bootstrapPages)) {

        $t = null;

        // generals
        wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, THEME_VERSION);
        wp_enqueue_style('components.css', asset_path('styles/components/componentsMain.css'), false, THEME_VERSION);
        // per type pages

        $t = SetComponents::setTemplates('singles');
        if (is_page_template($t)) {
            wp_enqueue_style('home.css', asset_path('styles/pages/home.css'), false, THEME_VERSION);
            wp_enqueue_style('escalaFex.css', asset_path('styles/pages/escalaFex.css'), false, THEME_VERSION);
        }

        $t = SetComponents::setTemplates('termsText');
        if (is_page_template($t)) {
            wp_enqueue_style('termsText.css', asset_path('styles/pages/document-terms-text/dttsMain.css'), false, THEME_VERSION);
        }

        $t = SetComponents::setTemplates('landings');
        if (is_page_template($t)) {
            wp_enqueue_style('landingPages.css', asset_path('styles/pages/landingPages/landingPagesMain.css'), false, THEME_VERSION);
        }
        $t = SetComponents::setTemplates('services');
        if (is_page_template($t)) {

            wp_enqueue_style('landingservicesPages.css', asset_path('styles/pages/landingPages/services/servicesMain.css'), false, THEME_VERSION);

        }
        $t = SetComponents::setTemplates('func');
        if (is_page_template($t)) {
            wp_enqueue_style('func.css', asset_path('styles/pages/func/funcMain.css'), false, THEME_VERSION);
        }
        $t = SetComponents::setTemplates('subPages');
        if (is_page_template($t)) {
            wp_enqueue_style('escalaSubPages.css', asset_path('styles/pages/subPages/subPagesMan.css'), false, THEME_VERSION);
        }
        $t = SetComponents::setTemplates('escalaVentas');
        if (is_page_template($t)) {
            wp_enqueue_style('escalaVentas.css', asset_path('styles/pages/escalaVentas/escalaVentasMain.css'), false, THEME_VERSION);
        }
        $t = SetComponents::setTemplates('escalaMarketing');
        if (is_page_template($t)) {
            wp_enqueue_style('escalaMarketing.css', asset_path('styles/pages/escalaMarketing/escalaMarketingMain.css'), false, THEME_VERSION);
        }
        $t = SetComponents::setTemplates('blog');
        if (is_page_template($t)) {
            wp_enqueue_style('blog.css', asset_path('styles/pages/blog/blogMain.css'), false, THEME_VERSION);
        }
        $t = SetComponents::setTemplates('casoExito');
        if (is_page_template($t)) {

            wp_enqueue_style('casoExitoMain.css', asset_path('styles/pages/casoExito/casoExitoMain.css'), false, THEME_VERSION);

        }
        $t = SetComponents::setTemplates('zoom');
        if (is_page_template($t)) {
            wp_enqueue_style('zoom.css', asset_path('styles/pages/zoom/zoomMain.css'), false, THEME_VERSION);
        }
        $t = SetComponents::setTemplates('webinar');
        if (is_page_template($t)) {
            wp_enqueue_style('webinarMain.css', asset_path('styles/pages/webinar/webinarMain.css'), false, THEME_VERSION);
        }


        //------------------------------------------------------------------------------

        if (  is_page_template("views/template-home.blade.php" ) ){

            wp_enqueue_script('_home.js', asset_path('scripts/pages/_home.js'), ['jquery'], THEME_VERSION, true);


        }
        if (  is_page_template("views/template-home-2021.blade.php" ) ){

            wp_enqueue_style('home2021.css', asset_path('styles/pages/home2021.css'), false, THEME_VERSION);

        }

        if ( is_page_template("views/template-zoom-demo-meeting.blade.php") ) {

            wp_enqueue_script('_zoomMeeting.js', asset_path('scripts/pages/_zoomMeeting.js'), ['jquery'], THEME_VERSION, true);

        }

        if ( is_page_template("views/template-landing-pricing-page.blade.php") ) {

            wp_enqueue_script('_pricingPage.js', asset_path('scripts/pages/_pricingPage.js'), ['jquery'], THEME_VERSION, true);

        }
          // jvascripts
        wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], THEME_VERSION, true);



        // if (is_single() && comments_open() && get_option('thread_comments')) {
            // wp_enqueue_script('comment-reply');
        // }
    } else {

        wp_enqueue_style('sage/main.css', asset_path('styles/reserv/old.css'), false, THEME_VERSION);

    }

    wp_enqueue_style('global.css', asset_path('styles/global.css'), false, THEME_VERSION);
    wp_enqueue_script('global.js', asset_path('scripts/global.js'), ['jquery'], THEME_VERSION, true);
    wp_enqueue_script('redirectScript.js', asset_path('scripts/redirectScript.js'), ['jquery'], THEME_VERSION, true);

    wp_enqueue_script('popUpConfig.js', asset_path('scripts/popUpConfig.js'), ['jquery'], THEME_VERSION, true);
    wp_enqueue_script('trustpilot.js', "//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" , ['jquery'], THEME_VERSION, true);

    wp_enqueue_script('base64js', "https://cdn.jsdelivr.net/npm/js-base64@2.5.2/base64.min.js" , ['jquery'], THEME_VERSION, true);

    wp_enqueue_script('sweetAlert', "https://cdn.jsdelivr.net/npm/sweetalert2@11" , ['jquery'], THEME_VERSION, true);

    wp_enqueue_style('videoJS.css', get_template_directory_uri() . '/../oceanwp-child/resources/assets/library/video.js/video-js.min.css', false, THEME_VERSION);
    wp_enqueue_script('videoJS.js', get_template_directory_uri() . '/../oceanwp-child/resources/assets/library/video.js/video.min.js', ['jquery'], THEME_VERSION, true);
    wp_enqueue_script('YoutubevideoJS.js', get_template_directory_uri() . '/../oceanwp-child/resources/assets/library/video.js/videojs.youtube.min.js', ['jquery'], THEME_VERSION, true);
    wp_enqueue_script('Dailymotion.min.js', get_template_directory_uri() . '/../oceanwp-child/resources/assets/library/video.js/Dailymotion.min.js', ['jquery'], THEME_VERSION, true);




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
        sage('blade')->compiler()->component($key, $value);
    }
});


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});


// estilos

// add_action('wp_enqueue_scripts', function () {

//     $bootstrapPages = SetComponents::setTemplates();

//     if (is_page_template($bootstrapPages)) {


//         // wp_register_style('nunitoFonts', get_template_directory_uri() . '/../oceanwp-child/resources/assets/bootstrap/dist/css/bootstrap.min.css', array(), rand(), 'all');
//         // wp_enqueue_style('nunitoFonts');


//         wp_enqueue_style('sage/main.css', asset_path('/dist/styles/main.css'), false, THEME_VERSION);

//         // wp_enqueue_script('sage/_zoomMeeting.js', asset_path('scripts/pages/_zoomMeeting.js'), ['jquery'], THEME_VERSION, true);


//         wp_register_style('bootstrapCss', get_template_directory_uri() . '/../oceanwp-child/resources/assets/bootstrap/dist/css/bootstrap.min.css', array(), rand(), 'all');
//         wp_enqueue_style('bootstrapCss');




//         wp_register_script('bootstrapJs', get_template_directory_uri() . '/../oceanwp-child/resources/assets/bootstrap/dist/js/bootstrap.min.js', array('jquery'), rand(), 'all');
//         wp_enqueue_script('bootstrapJs');

//         // // wp_register_script('popperJs', get_template_directory_uri() . '/../oceanwp-child/resources/assets/bootstrap/dist/js/popper.min.js', array('jquery'), rand(), 'all');
//         // // wp_enqueue_script('popperJs');

//     } else {

//         // estilos viejos
//         wp_enqueue_style('sage/main.css', asset_path('styles/reserv/old.css'), false, THEME_VERSION);
//     }
// }, 100);



/**
 * Disables REFILL function in WPCF7 if Recaptcha is in use
 */
add_action('wp_enqueue_scripts', 'wpcf7_recaptcha_no_refill', 15, 0);
function wpcf7_recaptcha_no_refill()
{
    $service = WPCF7_RECAPTCHA::get_instance();
    if (!$service->is_active()) {
        return;
    }
    wp_add_inline_script('contact-form-7', 'wpcf7.cached = 0;', 'before');
}


$setACF = new ACF_CUSTOM();
$x = $setACF->setACF();
add_action('acf/init', $setACF->setACF());




/**
 * Rewrite WordPress URLs to Include /blog/ in Post Permalink Structure
 *
 * @author   Golden Oak Web Design <info@goldenoakwebdesign.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html GPLv2+
 */
function golden_oak_web_design_blog_generate_rewrite_rules($wp_rewrite)
{
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
add_action('generate_rewrite_rules', 'golden_oak_web_design_blog_generate_rewrite_rules');
function casoExitoArticlesFormat($wp_rewrite)
{
    $new_rules = array(
        '(([^/]+/)*caso-de-exito)/page/?([0-9]{1,})/?$' => 'index.php?pagename=$matches[1]&paged=$matches[3]',
        'caso-de-exito/([^/]+)/?$' => 'index.php?post_type=post&name=$matches[1]',
        'caso-de-exito/[^/]+/attachment/([^/]+)/?$' => 'index.php?post_type=post&attachment=$matches[1]',
        'caso-de-exito/[^/]+/attachment/([^/]+)/trackback/?$' => 'index.php?post_type=post&attachment=$matches[1]&tb=1',
        'caso-de-exito/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
        'caso-de-exito/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
        'caso-de-exito/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?post_type=post&attachment=$matches[1]&cpage=$matches[2]',
        'caso-de-exito/[^/]+/attachment/([^/]+)/embed/?$' => 'index.php?post_type=post&attachment=$matches[1]&embed=true',
        'caso-de-exito/[^/]+/embed/([^/]+)/?$' => 'index.php?post_type=post&attachment=$matches[1]&embed=true',
        'caso-de-exito/([^/]+)/embed/?$' => 'index.php?post_type=post&name=$matches[1]&embed=true',
        'caso-de-exito/[^/]+/([^/]+)/embed/?$' => 'index.php?post_type=post&attachment=$matches[1]&embed=true',
        'caso-de-exito/([^/]+)/trackback/?$' => 'index.php?post_type=post&name=$matches[1]&tb=1',
        'caso-de-exito/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&name=$matches[1]&feed=$matches[2]',
        'caso-de-exito/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&name=$matches[1]&feed=$matches[2]',
        'caso-de-exito/page/([0-9]{1,})/?$' => 'index.php?post_type=post&paged=$matches[1]',
        'caso-de-exito/[^/]+/page/?([0-9]{1,})/?$' => 'index.php?post_type=post&name=$matches[1]&paged=$matches[2]',
        'caso-de-exito/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?post_type=post&name=$matches[1]&paged=$matches[2]',
        'caso-de-exito/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?post_type=post&name=$matches[1]&cpage=$matches[2]',
        'caso-de-exito/([^/]+)(/[0-9]+)?/?$' => 'index.php?post_type=post&name=$matches[1]&page=$matches[2]',
        'caso-de-exito/[^/]+/([^/]+)/?$' => 'index.php?post_type=post&attachment=$matches[1]',
        'caso-de-exito/[^/]+/([^/]+)/trackback/?$' => 'index.php?post_type=post&attachment=$matches[1]&tb=1',
        'caso-de-exito/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
        'caso-de-exito/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
        'caso-de-exito/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?post_type=post&attachment=$matches[1]&cpage=$matches[2]',
    );
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'casoExitoArticlesFormat');

function golden_oak_web_design_update_post_link($post_link, $id = 0)
{
    $post = get_post($id);
    if (is_object($post) && $post->post_type == 'post') {
        return home_url('/blog/' . $post->post_name);
    }
    return $post_link;
}
add_filter('post_link', 'golden_oak_web_design_update_post_link', 1, 3);





function registerCustomMenu()
{

    register_nav_menus(array(
        'header-top' => __('Principal top menu - Whatsapp, login, language', 'escala'),
        'social_networks' => __('Escala social networks', 'escala'),
        'func_footer' => __('Functionalities footer', 'escala'),
        'us_footer' => __('About us footer', 'escala'),
        // 'navBar-CTAS' => __('Principal CTAS', 'escala'),
    ));
}

add_action('init', registerCustomMenu() ); // Add HTML5 Blank Menu






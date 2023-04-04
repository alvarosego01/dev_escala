<?php

namespace App;

use App\Controllers\ACF_CUSTOM;
use App\Controllers\SetComponents;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Container;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/*
 * Theme assets
 */

add_action('wp_enqueue_scripts', function () {
    // acá se añaden los templates que usarán bootstrap

    $bootstrapPages = SetComponents::setTemplates('all');

    wp_register_style('bootstrapCss', get_template_directory_uri().'/../oceanwp-child/resources/assets/bootstrap/dist/css/bootstrap.min.css', [], rand(), 'all');
    wp_enqueue_style('bootstrapCss');

    wp_register_script('bootstrapJs', get_template_directory_uri().'/../oceanwp-child/resources/assets/bootstrap/dist/js/bootstrap.min.js', ['jquery'], rand(), 'all');
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
        $t = SetComponents::setTemplates('OLD_Pages');
        if (is_page_template($t)) {
            wp_enqueue_style('oldMain.css', asset_path('styles/pages/old/oldMain.css'), false, THEME_VERSION);
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
            wp_enqueue_style('_blog.css', asset_path('styles/pages/blog/blogMain.css'), false, THEME_VERSION);
            wp_enqueue_script('_blog.js', asset_path('scripts/pages/_blog.js'), ['jquery'], THEME_VERSION, true);
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

        if (is_page_template('views/template-home.blade.php')) {
            wp_enqueue_script('_home.js', asset_path('scripts/pages/_home.js'), ['jquery'], THEME_VERSION, true);
        }
        if (is_page_template('views/template-home-DEV.blade.php')) {
                  wp_enqueue_style('home_dev.css', asset_path('styles/pages/home_dev.css'), false, THEME_VERSION);
        }
        if (is_page_template('views/template-home-2021.blade.php')) {
            wp_enqueue_style('home2021.css', asset_path('styles/pages/home2021.css'), false, THEME_VERSION);
        }

        if (is_page_template('views/template-zoom-demo-meeting.blade.php')) {
            wp_enqueue_script('_zoomMeeting.js', asset_path('scripts/pages/_zoomMeeting.js'), ['jquery'], THEME_VERSION, true);
        }

        // TEMPLATE STYLES DIRECT
        // -------------------------------------- //
        // ---------------  LANDINGS
        // ---Landing escala landings 2022
        if (is_page_template('views/template-landing-escala-landings-2022.blade.php')) {
            wp_enqueue_style('landing_EscalaLandings.css', asset_path('styles/pages/landingPages/landing_EscalaLandings.css'), false, THEME_VERSION);
        }
        // ---Landing Home Oct22
        if (is_page_template('views/template-landing-home-oct22.blade.php')) {
            wp_enqueue_style('landing_HomeOct22.css', asset_path('styles/pages/landingPages/landing_HomeOct22.css'), false, THEME_VERSION);
        }
        // ---Landing escala landings 2022 - sin expertos
        if (is_page_template('views/template-landing-escala-landings-sin-expertos-2022.blade.php')) {
            wp_enqueue_style('landing_EscalaLandings-sin-expertos.css', asset_path('styles/pages/landingPages/landing_EscalaLandings_sin_expertos.css'), false, THEME_VERSION);
        }
        // ---Landing escala crm 2022
        if (is_page_template('views/template-landing-escala-crm-2022.blade.php')) {
            wp_enqueue_style('landing_EscalaCRM.css', asset_path('styles/pages/landingPages/landing_Escala_crm.css'), false, THEME_VERSION);
        }
        // ---Landing escala crm 2022 - sin expertos
        if (is_page_template('views/template-landing-escala-crm-sin-expertos-2022.blade.php')) {
            wp_enqueue_style('landing_EscalaCRM-sin-expertos.css', asset_path('styles/pages/landingPages/landing_Escala_crm_sin_expertos.css'), false, THEME_VERSION);
        }
        // ---Landing escala email marketing 2022
        if (is_page_template('views/template-landing-escala-func-email-mkt-2022.blade.php')) {
            wp_enqueue_style('landing_escala_func_email_mkt_2022.css', asset_path('styles/pages/landingPages/landing_escala_func_email_mkt_2022.css'), false, THEME_VERSION);
        }
        // ---Landing escala crm landing_crm_atrae_convierte_9sept22.sass
        if (is_page_template('views/template-landing-escala-crm-atrae-convierte-9sep22.blade.php')) {
            wp_enqueue_style('landing_crm_atrae_convierte_9sept22.css', asset_path('styles/pages/landingPages/landing_crm_atrae_convierte_9sept22.css'), false, THEME_VERSION);
        }
        // ---Landing escala competitors brands
        if (is_page_template('views/template-landing-escala-competitors-brands-2022.blade.php')) {
            wp_enqueue_style('landing_escala_competitors_brands.css', asset_path('styles/pages/landingPages/landing_escala_competitors_brands.css'), false, THEME_VERSION);
        }
        // ---Landing escala competitors no brands
        if (is_page_template('views/template-landing-escala-competitors-noBrands-2022.blade.php')) {
            wp_enqueue_style('landing_escala_competitors_brands.css', asset_path('styles/pages/landingPages/landing_escala_competitors_brands.css'), false, THEME_VERSION);
        }
        // ---Landing escala black friday
        if (is_page_template('views/template-landing-escala-blackFriday-2022.blade.php')) {
            wp_enqueue_style('landing_blackFriday_2022.css', asset_path('styles/pages/landingPages/landing_blackFriday_2022.css'), false, THEME_VERSION);
        }
        // -------------------------------------- //
        //  FUNCTIONALITIES 2022
        // ---Page builder
        if (is_page_template('views/template-func-page-builder-2022.blade.php')) {
            wp_enqueue_style('func_pageBuilder2022.css', asset_path('styles/pages/func/2022/pageBuilder_2022.css'), false, THEME_VERSION);
        }
        // ---CRM
        if (is_page_template('views/template-func-crm-2022.blade.php')) {
            wp_enqueue_style('func_CRM2022.css', asset_path('styles/pages/func/2022/crm_2022.css'), false, THEME_VERSION);
        }

        //  SUB PAGES----------------------------------------------------
        // --- Seccion whatsapp 2022
        if (is_page_template('views/template-subPage-whatsapp-2022.blade.php')) {
            wp_enqueue_style('subPage_whatsapp_2022.css', asset_path('styles/pages/subPages/subPage_whatsapp_2022.css'), false, THEME_VERSION);
        }
        // --- Seccion partners
        if (is_page_template('views/template-subPage-partners-2022.blade.php')) {
            wp_enqueue_style('subPage_partners_2022.css', asset_path('styles/pages/subPages/subPage_partners_2022.css'), false, THEME_VERSION);
        }
        // --- Seccion alliances
        if (is_page_template('views/template-subPage-alliances-2022.blade.php')) {
            wp_enqueue_style('subPage_alliances_2022.css', asset_path('styles/pages/subPages/subPage_alliances_2022.css'), false, THEME_VERSION);
        }
        //  SUB PAGES - Programa de alianzas vane
        // --- Pricing Pro
        if (is_page_template('views/template-subPage-pricingPro.blade.php')) {
            wp_enqueue_style('subPage_pricingPro.css', asset_path('styles/pages/subPages/subPage_pricingPro.css'), false, THEME_VERSION);

              wp_enqueue_script('_pricingPro.js', asset_path('scripts/pages/_pricingPro.js'), ['jquery'], THEME_VERSION, true);
        }
        // --- Pricing 2023
        if (is_page_template('views/template-subPage-pricing-2023.blade.php')) {

            wp_enqueue_style('subPage_pricing_2023.css', asset_path('styles/pages/subPages/subPage_pricing_2023.css'), false, THEME_VERSION);
            wp_enqueue_script('_pricing2023.js', asset_path('scripts/pages/_pricing2023.js'), ['jquery'], THEME_VERSION, true);

        }
        // --- Program alliance
        if (is_page_template('views/template-vn-program-alliance.blade.php')) {
            wp_enqueue_style('programAlliance.css', asset_path('styles/pages/subPages/vn/programAlliance.css'), false, THEME_VERSION);
        }
        // ---Pricing page
        if (is_page_template('views/template-subPage-pricing-page.blade.php')) {
            wp_enqueue_style('pricingPage.css', asset_path('styles/pages/subPages/pricingPage.css'), false, THEME_VERSION);
            wp_enqueue_script('_pricingPage.js', asset_path('scripts/pages/_pricingPage.js'), ['jquery'], THEME_VERSION, true);
        }
        // ---Servicios
        if (is_page_template('views/template-subPage-implementacion.blade.php')) {
            wp_enqueue_style('implementacion.css', asset_path('styles/pages/subPages/implementacion.css'), false, THEME_VERSION);
        }
        // ---Pricing page - Ventas
        if (is_page_template('views/template-subPage-pricingVentas-page.blade.php')) {
            wp_enqueue_style('pricingPageVentas.css', asset_path('styles/pages/subPages/pricingPage_ventas.css'), false, THEME_VERSION);
            wp_enqueue_script('_pricingPage.js', asset_path('scripts/pages/_pricingPage_ventas.js'), ['jquery'], THEME_VERSION, true);
        }
        // --- Casos exito
        if (is_page_template('views/template-casoExito-firma-consultoria.blade.php')) {
            wp_enqueue_style('subPage_casoExito_firma_consultoria.css', asset_path('styles/pages/subPages/casoExito/subPage_casoExito_firma_consultoria.css'), false, THEME_VERSION);
        }
        // --- Casos uso
        if (is_page_template('views/template-casoUso-home.blade.php')) {
            wp_enqueue_style('template_casoUso_home.css', asset_path('styles/pages/subPages/casosUso/subPage_casoUso_home.css'), false, THEME_VERSION);
        }
        if (is_page_template('views/template-casoUso-educacion-2022.blade.php')) {
            wp_enqueue_style('subPage_casoUso_educacion.css', asset_path('styles/pages/subPages/casosUso/subPage_casoUso_educacion.css'), false, THEME_VERSION);
        }
        if (is_page_template('views/template-casoUso-asesoria-2022.blade.php')) {
            wp_enqueue_style('subPage_casoUso_asesoria.css', asset_path('styles/pages/subPages/casosUso/subPage_casoUso_asesoria.css'), false, THEME_VERSION);
        }
        if (is_page_template('views/template-casoUso-agencia-marketing-2022.blade.php')) {
            wp_enqueue_style('subPage_casoUso_agencia_marketing.css', asset_path('styles/pages/subPages/casosUso/subPage_casoUso_agencia_marketing.css'), false, THEME_VERSION);
        }
        if (is_page_template('views/template-casoUso-bienes-raices-2022.blade.php')) {
            wp_enqueue_style('subPage_casoUso_bienes_raices.css', asset_path('styles/pages/subPages/casosUso/subPage_casoUso_bienes_raices.css'), false, THEME_VERSION);
        }
        // -------------------------------------- //

        // jvascripts
        wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], THEME_VERSION, true);
    } else {
        wp_enqueue_style('sage/main.css', asset_path('styles/reserv/old.css'), false, THEME_VERSION);
    }

    wp_enqueue_style('global.css', asset_path('styles/global.css'), false, THEME_VERSION);
    wp_enqueue_script('global.js', asset_path('scripts/global.js'), ['jquery'], THEME_VERSION, true);
    wp_enqueue_script('redirectScript.js', asset_path('scripts/redirectScript.js'), ['jquery'], THEME_VERSION, true);

    wp_enqueue_script('popUpConfig.js', asset_path('scripts/popUpConfig.js'), ['jquery'], THEME_VERSION, true);
    wp_enqueue_script('trustpilot.js', '//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js', ['jquery'], THEME_VERSION, true);

    wp_enqueue_script('base64js', 'https://cdn.jsdelivr.net/npm/js-base64@2.5.2/base64.min.js', ['jquery'], THEME_VERSION, true);

    wp_enqueue_script('sweetAlert', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', ['jquery'], THEME_VERSION, true);

    wp_enqueue_style('videoJS.css', get_template_directory_uri().'/../oceanwp-child/resources/assets/library/video.js/video-js.min.css', false);

    wp_enqueue_style('fontawesome.css', get_template_directory_uri().'/../oceanwp-child/resources/assets/library/fontAwesome/css/all.min.css', false);

    wp_enqueue_style('lineAwesome.css', get_template_directory_uri().'/../oceanwp-child/resources/assets/library/line-awesome/css/line-awesome.min.css', false);

    // wp_enqueue_script('fontawesome.js', get_template_directory_uri() . '/../oceanwp-child/resources/assets/library/fontAwesome/js/all.min.js', ['jquery'], THEME_VERSION, true);

    wp_enqueue_script('videoJS.js', get_template_directory_uri().'/../oceanwp-child/resources/assets/library/video.js/video.min.js', ['jquery'], true);

    wp_enqueue_script('YoutubevideoJS.js', get_template_directory_uri().'/../oceanwp-child/resources/assets/library/video.js/videojs.youtube.min.js', ['jquery'], true);

// wp_enqueue_script('Dailymotion.min.js', get_template_directory_uri() . '/../oceanwp-child/resources/assets/library/video.js/Dailymotion.min.js', ['jquery'], THEME_VERSION, true);
}, 100);

/*
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /*
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /*
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /*
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);

    /*
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /*
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /*
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /*
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);

/*
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);

    register_sidebar([
        'name' => 'PiePagina_general_1',
        'id' => 'PiePagina_general_1',
        'description' => 'Configuración de pie de pagina general 1',
    ] + $config);
});

/*
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/*
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /*
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /*
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

    /*
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return '<?= '.__NAMESPACE__."\\asset_path({$asset}); ?>";
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
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
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

/*
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
 * Rewrite WordPress URLs to Include /blog/ in Post Permalink Structure.
 *
 * @author   Golden Oak Web Design <info@goldenoakwebdesign.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html GPLv2+
 */
function golden_oak_web_design_blog_generate_rewrite_rules($wp_rewrite)
{
    $new_rules = [
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
    ];
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'golden_oak_web_design_blog_generate_rewrite_rules');

function casoUsoArticlesFormat($wp_rewrite)
{
    $new_rules = [
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
    ];
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'casoUsoArticlesFormat');

function golden_oak_web_design_update_post_link($post_link, $id = 0)
{
    $post = get_post($id);
    if (is_object($post) && $post->post_type == 'post') {
        return home_url('/blog/'.$post->post_name);
    }

    return $post_link;
}
add_filter('post_link', 'golden_oak_web_design_update_post_link', 1, 3);

function registerCustomMenu()
{
    register_nav_menus([
        'header-top' => __('Principal top menu - Whatsapp, login, language', 'escala'),
        'social_networks' => __('Escala social networks', 'escala'),
        'func_piePagina' => __('Functionalities pie de página', 'escala'),
        'us_piePagina' => __('About us pie de página', 'escala'),
        // 'navBar-CTAS' => __('Principal CTAS', 'escala'),
    ]);
}

add_action('init', registerCustomMenu()); // Add HTML5 Blank Menu

add_action('wpcf7_enqueue_scripts', 'prefix_fix_form_reset');

function prefix_fix_form_reset()
{
    $wpcf7 = [];
    wp_localize_script('contact-form-7', 'wpcf7', $wpcf7);
}

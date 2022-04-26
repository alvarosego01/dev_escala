<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class ACF_CUSTOM extends Controller
{

    // private $allNavMenus = wp_get_nav_menus();

    private $allTemplates = array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-home.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-home-2021.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-allinone.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' =>  "views/template-landing-video-am.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-increibles-otto.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-navidad.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible-no-program.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible-am.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible-demo.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-whatsapp.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-escalaMarketing-marketing.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-escala-subpages-marketing.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-escala-subpages-fidelizacion.blade",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-escalaVentas-ventas.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-escala-subpages-ventas.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-afiliados.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-partners.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-landing-pages-2022.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-email-mk-2022.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-servicios-salud.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-servicios-inmobiliarias.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-servicios-coaching.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-servicios-educacion.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-servicios-finanzas.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-servicios-seguros.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-correos-masivos.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-landingPages.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-landingPages2.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-masive-mailing.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-CRM.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-CRM-2022.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-ADS-2022.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible-am.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-page-builder.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-analiticas.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-automatization.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-crm-escala.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-email.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-digital-announces.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-escala-fex.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-zoom-demo-home.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-zoom-demo-meeting.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-open-webinar-escala.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-open-webinar-escala-meeting.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-blog-home.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-zoom-demo-home-landing.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-zoom-demo-home-step1.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-zoom-demo-home-step2.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                // 'value' => "views/template-blog-single.blade.php",
                'value' => "views/single-post.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-blog-category.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-increibles-am-otto.blade.php",
            ),

        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible-trial-2.blade.php",
            ),

        ),


    );

    public function setACF()
    {

        if (function_exists('acf_add_local_field_group')) {

            acf_add_local_field_group(

                $this->allWeb()

            );
            acf_add_local_field_group(

                $this->setheaderBand()

            );

            acf_add_local_field_group(

                $this->allPages()

            );
            // acf_add_local_field_group(

            //     $this->webinar_home()

            // );
            acf_add_local_field_group(

                $this->webinar_meeting()

            );
            acf_add_local_field_group(

                $this->settingsSingleBlog()

            );
            acf_add_local_field_group(

                $this->settingsBootstrapPopups()

            );
            acf_add_local_field_group(

                $this->settingsCasosExitoHome()

            );
            acf_add_local_field_group(

                $this->landingPage_customSettings()

            );
            acf_add_local_field_group(

                $this->settingsCasosExito()

            );
            acf_add_local_field_group(

                $this->settingsCasosExito2()

            );
            acf_add_local_field_group(

                $this->settingsCasosExito3()

            );
            acf_add_local_field_group(

                $this->settingsCategoryBase()

            );
        }
    }


    private function setheaderBand(){

        return array(
            'key' => 'headerband_page_config',
            'title' => 'HeaderBand selector bootstrap',
            'fields' => array(
                array(

                    'key' => 'enable_headerband',
                    'label' => '¿Use headerband?',
                    'name' => '¿Use headerband?',
                    'type' => 'true_false',

                ),
                array(
                    'key' => 'headerband_type',
                    'label' => 'Headerband type',
                    'name' => 'Headerband type',
                    'type' => 'select',
                    'choices' => array(

                        'headerband_promo_t1' => 'Adquiere un Plan PRO y llévate hasta 2 meses TOTALMENTE GRATIS. Haz clic aquí y habla con un asesor',

                    ),
                    'conditional_logic' => [

                        [
                            [
                                'field' => 'enable_headerband',
                                'operator' => '==',
                                'value' => 1
                            ]
                        ]
                    ]
                ),
                array(

                    'key' => 'enable_custom_headerband',
                    'label' => '¿Custom text headerband?',
                    'name' => '¿Custom text headerband?',
                    'type' => 'true_false',
                    'conditional_logic' => [
                        array(
                            [
                                'field' => 'enable_headerband',
                                'operator' => '==',
                                'value' => 1
                            ],
                        )
                    ]

                ),
                array(
                    'key' => 'custom_headerband_text',
                    'label' => 'HeaderBand custom text',
                    'name' => 'HeaderBand custom text',
                    'type' => 'text',
                    'conditional_logic' => [
                        array(

                            [
                                'field' => 'enable_custom_headerband',
                                'operator' => '==',
                                'value' => 1
                            ],
                            // [
                            //     'field' => 'popup_type',
                            //     'operator' => '==',
                            //     'value' => 'bootstrap_popup'
                            // ]

                        ),

                    ]
                ),


            ),

            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ),
                ),
            ),

        );

    }

    private function allWeb()
    {

        $body = array();

        $args = array(
            'post_type'=> 'bootstrap_popups',
            'order'    => 'ASC'
        );

        $the_query = new WP_Query( $args );
        $the_query = $the_query->posts;

        if(count( $the_query ) > 0){

            foreach ($the_query as $key => $value) {
                # code...
                $a = $value->post_title;
                $body[$value->ID] = $a;

            }

        }

        return array(
            'key' => 'popup_page_config',
            'title' => 'PopUp selector bootstrap',
            'fields' => array(
                array(

                    'key' => 'enable_popup',
                    'label' => '¿Use PopUp?',
                    'name' => '¿Use PopUp?',
                    'type' => 'true_false',

                ),
                array(
                    'key' => 'popup_type',
                    'label' => 'PopUp type',
                    'name' => 'PopUp type',
                    'type' => 'select',
                    'choices' => array(

                        'elementor_popup' => 'Elementor jet PopUp',
                        'bootstrap_popup' => 'Bootstrap PopUp',

                    ),
                    'conditional_logic' => [

                        [
                            [
                                'field' => 'enable_popup',
                                'operator' => '==',
                                'value' => 1
                            ]
                        ]
                    ]
                ),
                array(
                    'key' => 'bootstrap_popup_types',
                    'label' => 'Bootstrap popUp model',
                    'name' => 'Bootstrap popUp model',
                    'type' => 'select',
                    'choices' => $body,
                    'conditional_logic' => [
                        array(
                            [
                                'field' => 'enable_popup',
                                'operator' => '==',
                                'value' => 1
                            ],
                            [
                                'field' => 'popup_type',
                                'operator' => '==',
                                'value' => 'bootstrap_popup'
                            ]

                        ),

                    ]
                ),
                array(
                    'key' => 'bootstrap_popup_appear_config',
                    'label' => 'Bootstrap PopUp Special Appear Config',
                    'name' => 'Bootstrap PopUp Special Appear Config',
                    'type' => 'radio',
                    'choices' => array(

                        'special_appear_disabled' => 'No',
                        'onload_webpage' => 'Onload page',
                        'on_seconds' => 'On seconds',

                    ),
                    'conditional_logic' => [
                        array(
                            [
                                'field' => 'enable_popup',
                                'operator' => '==',
                                'value' => 1
                            ],
                            [
                                'field' => 'popup_type',
                                'operator' => '==',
                                'value' => 'bootstrap_popup'
                            ]

                        ),

                    ]
                ),
                array(
                    'key' => 'bootstrap_popup_time_appear',
                    'label' => 'Bootstrap popup seconds to appear',
                    'name' => 'Bootstrap popup seconds to appear',
                    'type' => 'number',

                    'conditional_logic' => [
                        array(
                            [
                                'field' => 'enable_popup',
                                'operator' => '==',
                                'value' => 1
                            ],
                            [
                                'field' => 'popup_type',
                                'operator' => '==',
                                'value' => 'bootstrap_popup'
                            ],
                            [
                                'field' => 'bootstrap_popup_appear_config',
                                'operator' => '==',
                                'value' => 'on_seconds'
                            ]

                        ),

                    ]
                )

            ),

            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ),
                ),
            ),

        );
    }

    private function getListMenus(){

        $aux = wp_get_nav_menus();

        $body = array();

        if(count( $aux ) > 0){

            foreach ($aux as $key => $value) {
                # code...
                // array_push( $body, [
                    // $value['term_id' => $value['name']]
                    // ])
                    $body[$value->term_id] = $value->name;

                }

        }


        return $body;

    }



    private function allPages()
    {

        $aux = wp_get_nav_menus();

        $body = array();

        if(count( $aux ) > 0){

            foreach ($aux as $key => $value) {
            # code...
            // array_push( $body, [
                // $value['term_id' => $value['name']]
                // ])
            $body[$value->term_id] = $value->name;

        }

        }

        return array(
            'key' => 'general_config',
            'title' => 'General settings',
            'fields' => array(
                array(
                    'key' => 'custom_parent_class_section',
                    'label' => 'Custom parent class',
                    'name' => 'Custom parent class',
                    'type' => 'text',
                ),
                array(
                    'key' => 'form7',
                    'label' => 'Contact form 7 shortcode',
                    'name' => 'Contact form 7 shortcode',
                    'type' => 'text',
                ),
                array(
                    'key' => 'cf7_redirect',
                    'label' => 'Contact form 7 redirect',
                    'name' => 'Contact form 7 redirect',
                    'type' => 'url',
                ),
                array(
                    'key' => 'newsletter_form',
                    'label' => 'Contact form 7 Newsletter shortcode',
                    'name' => 'Contact form 7 Newsletter shortcode',
                    'type' => 'text',
                ),

                array(
                    'key' => 'nav_settings',
                    'label' => 'NavBar base',
                    'name' => 'NavBar base',
                    'type' => 'select',
                    'choices' => array(
                        'elementor_navbar' => 'Elementor nav',
                        'principal-global1'    => 'Principal white menu 1 - Complete menu',
                        'blog-global1'	=> 'Blog white menu 1 - Categories, login, call to action',
                        'landing-global1'	=> 'Landing white menu 1 - Logo, 1 button',
                        'landing-global2'	=> 'Landing white menu 2 - Only logo',
                    ),
                ),
                array(
                    'key' => 'nav_global',
                    'label' => 'NavBar type register',
                    'name' => 'NavBar type register',
                    'type' => 'select',
                    'choices' => $body,
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'nav_settings',
                                'operator' => '!=',
                                'value' => 'elementor_navbar'
                            ]
                        ]
                    ]
                )
            ),
            'location' => $this->allTemplates

        );
    }


    private function settingsSingleBlog()
    {
        return array(
            'key' => 'single_blog_config',
            'title' => 'Single blog settings',
            'fields' => array(
                array(
                    'key' => 'excerpt_single',
                    'label' => 'Excerpt post',
                    'name' => 'Excerpt post',
                    'type' => 'textarea',
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),

        );
    }
    private function settingsCasosExitoHome()
    {

        return array(

            'key' => 'casos_exito_settingsHome',
            'title' => 'Casos de éxito opciones',
            'fields' => array(

                array(
                    'key' => 'title_embed_case',
                    'label' => 'Título Caso de éxito principal',
                    'name' => 'Título Caso de éxito principal',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'byAm_embed_case',
                    'label' => 'Case autor',
                    'name' => 'Case autor',
                    'type' => 'text',
                ),
                array(
                    'key' => 'team_embed_case',
                    'label' => 'Case autor position',
                    'name' => 'Case autor position',
                    'type' => 'text',
                ),
                array(
                    'key' => 'url_embed_case',
                    'label' => 'URL Caso de éxito principal',
                    'name' => 'URL Caso de éxito principal',
                    'type' => 'url',
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => "views/template-caso-exito-home.blade.php",
                    ),
                ),
            ),

        );
    }

    private function landingPage_customSettings()
    {
        return array(

            'key' => 'landing_page_custom_header',
            'title' => 'Landing page custom header',
            'fields' => array(

                array(

                    'key' => 'enable_custom_header',
                    'label' => '¿Custom landing page header?',
                    'name' => '¿Custom landing page header?',
                    'type' => 'true_false',

                ),

                array(
                    'key' => 'custom_header_title',
                    'label' => 'Title custom header',
                    'name' => 'Title custom header',
                    'type' => 'textarea',
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'enable_custom_header',
                                'operator' => '==',
                                'value' => 1
                            ]
                        ]
                    ]
                ),
                array(
                    'key' => 'custom_header_subText',
                    'label' => 'SubText custom header',
                    'name' => 'SubText custom header',
                    'type' => 'textarea',
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'enable_custom_header',
                                'operator' => '==',
                                'value' => 1
                            ]
                        ]
                    ]
                ),

                array(
                    'key' => 'custom_header_image',
                    'label' => 'Image custom header',
                    'name' => 'Image custom header',
                    'type' => 'image',
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'enable_custom_header',
                                'operator' => '==',
                                'value' => 1
                            ]
                        ]
                    ]
                ),

                array(
                    'key' => 'custom_header_formTitle',
                    'label' => 'Title form custom header',
                    'name' => 'Title form custom header',
                    'type' => 'text',
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'enable_custom_header',
                                'operator' => '==',
                                'value' => 1
                            ]
                        ]
                    ]
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'views/template-landing-landing-pages-2022.blade.php',
                    ),
                ),
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'views/template-landing-email-mk-2022.blade.php',
                    ),
                ),
            ),
        );
    }

    private function settingsCasosExito()
    {

        return array(

            'key' => 'casos_exito_settings',
            'title' => 'Casos de éxito opciones',
            'fields' => array(
                array(
                    'key' => 'excerpt_single_caso_exito',
                    'label' => 'Excerpt',
                    'name' => 'Excerpt',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'logoimg_caso_exito',
                    'label' => 'Logo mini image',
                    'name' => 'Logo mini image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'personimg_caso_exito',
                    'label' => 'Person image',
                    'name' => 'Person image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'person_name_caso_exito',
                    'label' => 'Person name',
                    'name' => 'Person name',
                    'type' => 'text',
                ),
                array(
                    'key' => 'position_caso_exito',
                    'label' => 'Person position',
                    'name' => 'Person position',
                    'type' => 'text',
                ),
                array(
                    'key' => 'testimonial_caso_exito',
                    'label' => 'Testimonial',
                    'name' => 'Testimonial',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'card_article_text',
                    'label' => 'Resume case',
                    'name' => 'Resume case',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'video_caso_exito',
                    'label' => 'Video url',
                    'name' => 'Video url',
                    'type' => 'url',
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'caso-de-exito',
                    ),
                ),
            ),

        );
    }

    private function settingsBootstrapPopups()
    {

        return array(

            'key' => 'bootstrap_popups_settings',
            'title' => 'Bootstrap popups options',
            'fields' => array(
                array(
                    'key' => 'popup_call_class',
                    'label' => 'Popup call open class Nota: Debe iniciar con popup-',
                    'name' => 'Popup call open class Nota: Debe iniciar con popup-',
                    'type' => 'text',
                ),
                array(
                    'key' => 'popup_image',
                    'label' => 'Popup image',
                    'name' => 'Popup image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'popup_title_text',
                    'label' => 'Popup title text',
                    'name' => 'Popup title text',
                    'type' => 'textarea',
                ),
                array(

                    'key' => 'enable_custom_background',
                    'label' => '¿Use custom background?',
                    'name' => '¿Use custom background?',
                    'type' => 'true_false',

                ),
                array(

                    'key' => 'custom_background_type',
                    'label' => 'Custom background type',
                    'name' => 'Custom background type',
                    'type' => 'select',
                    'choices' => array(
                        'solid_color' => 'Solid color',
                        'color_gradient' => 'Color gradient',
                        'background_image' => 'Background image',
                    ),
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'enable_custom_background',
                                'operator' => '==',
                                'value' => 1
                            ]
                        ]
                    ]

                ),
                array(
                    'key' => 'popup_background_color',
                    'label' => 'Popup background color',
                    'name' => 'Popup background color',
                    'type' => 'color_picker',
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'enable_custom_background',
                                'operator' => '==',
                                'value' => 1
                            ],
                            [
                                'field' => 'custom_background_type',
                                'operator' => '==',
                                'value' => 'solid_color'
                            ]
                        ]
                    ]
                ),
                array(
                    'key' => 'popup_background_gradient',
                    'label' => 'Popup background gradient CSS',
                    'name' => 'Popup background gradient CSS',
                    'type' => 'textarea',
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'enable_custom_background',
                                'operator' => '==',
                                'value' => 1
                            ],
                            [
                                'field' => 'custom_background_type',
                                'operator' => '==',
                                'value' => 'color_gradient'
                            ]
                        ]
                    ]
                ),
                array(
                    'key' => 'popup_background_image',
                    'label' => 'Popup background image',
                    'name' => 'Popup background image',
                    'type' => 'image',
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'enable_custom_background',
                                'operator' => '==',
                                'value' => 1
                            ],
                            [
                                'field' => 'custom_background_type',
                                'operator' => '==',
                                'value' => 'background_image'
                            ]
                        ]
                    ]
                ),
                array(
                    'key' => 'form_title',
                    'label' => 'Form title',
                    'name' => 'Form title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'form_shortcode',
                    'label' => 'Shortcode form',
                    'name' => 'Shortcode form',
                    'type' => 'text',
                ),
                array(
                    'key' => 'form_redirect',
                    'label' => 'Form redirect url',
                    'name' => 'Form redirect url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'bootstrap_popup_template',
                    'label' => 'Bootstrap popup model',
                    'name' => 'Bootstrap popup model',
                    'type' => 'select',
                    'choices' => array(
                        'popup-bootstrap-general-t1' => 'Popup general 1',
                        'popup-bootstrap-general-blue-t2' => 'Popup general 2 blue',
                    ),
                )
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'bootstrap_popups',
                    ),
                ),
            ),

        );
    }



    private function settingsCasosExito2()
    {

        return array(

            'key' => 'casos_exito_details',
            'title' => 'Casos de éxito detalles',
            'fields' => array(

                array(
                    'key' => 'about_caso_exito',
                    'label' => 'About',
                    'name' => 'About',
                    'type' => 'textarea',
                ),

                array(
                    'key' => 'colaboradores_caso_exito',
                    'label' => 'Colaboradores',
                    'name' => 'Colaboradores',
                    'type' => 'text',
                ),
                array(
                    'key' => 'experienciaMKT_caso_exito',
                    'label' => 'Experiencia en MKT',
                    'name' => 'Experiencia en MKT',
                    'type' => 'text',
                ),
                array(
                    'key' => 'experienciaCMR_caso_exito',
                    'label' => 'Experiencia en CMR',
                    'name' => 'Experiencia en CMR',
                    'type' => 'text',
                ),
                array(
                    'key' => 'segmento_caso_exito',
                    'label' => 'Segmento',
                    'name' => 'Segmento',
                    'type' => 'text',
                ),


            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'caso-de-exito',
                    ),
                ),
            ),

        );
    }

    private function settingsCasosExito3()
    {

        return array(

            'key' => 'casos_exito_others',
            'title' => 'Casos de éxito template config',
            'fields' => array(

                array(
                    'key' => 'header_top_img',
                    'label' => 'Header top image',
                    'name' => 'Header top image',
                    'type' => 'image',
                ),

                array(
                    'key' => 'right_escala_asist',
                    'label' => 'Assistant image',
                    'name' => 'Assistant image',
                    'type' => 'image',
                ),


            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'caso-de-exito',
                    ),
                ),
            ),

        );
    }


    private function settingsCategoryBase()
    {

        return array(
            'key' => 'category_base_blog_config',
            'title' => 'Category section blog settings',
            'fields' => array(
                array(
                    'key' => 'category_base',
                    'label' => 'Category section',
                    'name' => 'Category section',
                    'type' => 'text',
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => "views/template-blog-category.blade.php",
                    ),

                ),
            ),

        );
    }



    private function webinar_home()
    {

        return array(
            'key' => 'webinar_home_custom',
            'title' => 'Zoom home settings',
            'fields' => array(
                array(
                    'key' => 'id_webinar',
                    'label' => 'ID zoom room',
                    'name' => 'ID zoom room',
                    'type' => 'text',
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'views/template-open-webinar-escala.blade.php',
                    ),
                ),
            ),

        );
    }
    private function webinar_meeting()
    {

        return array(
            'key' => 'webinar_meeting_custom',
            'title' => 'Webinar meeting settings',
            'fields' => array(
                array(
                    'key' => 'link_zoom',
                    'label' => 'Link directo a zoom',
                    'name' => 'Link directo a zoom',
                    'type' => 'url',
                ),
                array(
                    'key' => 'program_date',
                    'label' => 'Link reprogramación de cita',
                    'name' => 'Link reprogramación de cita',
                    'type' => 'url',
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'views/template-open-webinar-escala-meeting.blade.php',
                    ),

                ),
                array(

                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'views/template-zoom-demo-meeting.blade.php',
                    ),
                ),
            ),

        );
    }



    public static function _getField($field, $id = null)
    {

        if (function_exists('get_field')) {

            $l = null;
            if ($id) {
                $l = get_field($field, $id);
            } else {
                $l = get_field($field);
            }

            if ($l != null || $l != '') {

                return $l;
            } else {
                return null;
            }
        } else {

            return null;
        }

    }

}

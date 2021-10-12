<?php

namespace App\Controllers;

use Sober\Controller\Controller;


class ACF_CUSTOM extends Controller
{

    private $allTemplates = array (
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-home.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible-no-program.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible-am.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible-demo.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-whatsapp.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-correos-masivos.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-landing-incredible-am.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-page-builder.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-analiticas.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-automatization.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-crm-escala.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-email.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-func-digital-announces.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-escala-fex.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-zoom-demo-home.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-zoom-demo-meeting.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-open-webinar-escala.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-open-webinar-escala-meeting.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-blog-home.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-zoom-demo-home-landing.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-zoom-demo-home-step1.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-zoom-demo-home-step2.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                // 'value' => "views/template-blog-single.blade.php",
                'value' => "views/single-post.blade.php",
            ),

        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => "views/template-blog-category.blade.php",
            ),

        ),


    );

    public function setACF(){

        if( function_exists('acf_add_local_field_group') ){

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

                $this->settingsCasosExito()

            );
            acf_add_local_field_group(

                $this->settingsCasosExito2()

            );
            acf_add_local_field_group(

                $this->settingsCategoryBase()

            );
        }

    }



    private function allPages(){


        return array(
            'key' => 'general_config',
            'title' => 'General settings',
            'fields' => array (
                array (
                    'key' => 'form7',
                    'label' => 'Contact form 7 shortcode',
                    'name' => 'Contact form 7 shortcode',
                    'type' => 'text',
                ),
                array (
                    'key' => 'cf7_redirect',
                    'label' => 'Contact form 7 redirect',
                    'name' => 'Contact form 7 redirect',
                    'type' => 'url',
                ),
                array (
                    'key' => 'newsletter_form',
                    'label' => 'Contact form 7 Newsletter shortcode',
                    'name' => 'Contact form 7 Newsletter shortcode',
                    'type' => 'text',
                ),

                array (
                    'key' => 'nav_settings',
                    'label' => 'NavBar settings',
                    'name' => 'NavBar settings',
                    'type' => 'select',
                    'choices' => array(
                        'elementor_navbar' => 'Elementor nav',
                        'principal-global1'	=> 'Principal white menu 1 - Complete menu',
                        'blog-global1'	=> 'Blog white menu 1 - Categories, login, call to action',
                        'landing-global1'	=> 'Landing white menu 1 - Logo, 1 button',
                        'landing-global2'	=> 'Landing white menu 2 - Only logo',
                    ),
                )
            ),
            'location' => $this->allTemplates

        );


    }


    private function settingsSingleBlog(){

        return array(
            'key' => 'single_blog_config',
            'title' => 'Single blog settings',
            'fields' => array (
                array (
                    'key' => 'excerpt_single',
                    'label' => 'Excerpt post',
                    'name' => 'Excerpt post',
                    'type' => 'textarea',
                ),

            ),
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),

        );

    }
    private function settingsCasosExito(){

        return array(

            'key' => 'casos_exito_settings',
            'title' => 'Casos de éxito opciones',
            'fields' => array (
                array (
                    'key' => 'excerpt_single_caso_exito',
                    'label' => 'Excerpt',
                    'name' => 'Excerpt',
                    'type' => 'textarea',
                ),
                array (
                    'key' => 'person_caso_exito',
                    'label' => 'Person',
                    'name' => 'Person',
                    'type' => 'image',
                ),
                array (
                    'key' => 'video_caso_exito',
                    'label' => 'Video url',
                    'name' => 'Video url',
                    'type' => 'url',
                ),

            ),
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'casos_exito',
                    ),
                ),
            ),

        );

    }
    private function settingsCasosExito2(){

        return array(

            'key' => 'casos_exito_details',
            'title' => 'Casos de éxito detalles',
            'fields' => array (

                array (
                    'key' => 'about_caso_exito',
                    'label' => 'About',
                    'name' => 'About',
                    'type' => 'textarea',
                ),

                array (
                    'key' => 'colaboradores_caso_exito',
                    'label' => 'Colaboradores',
                    'name' => 'Colaboradores',
                    'type' => 'text',
                ),
                array (
                    'key' => 'experienciaMKT_caso_exito',
                    'label' => 'Experiencia en MKT',
                    'name' => 'Experiencia en MKT',
                    'type' => 'text',
                ),
                array (
                    'key' => 'experienciaCMR_caso_exito',
                    'label' => 'Experiencia en CMR',
                    'name' => 'Experiencia en CMR',
                    'type' => 'text',
                ),
                array (
                    'key' => 'segmento_caso_exito',
                    'label' => 'Segmento',
                    'name' => 'Segmento',
                    'type' => 'text',
                ),


            ),
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'casos_exito',
                    ),
                ),
            ),

        );

    }
    // post_type
    // casos_exito

    private function settingsCategoryBase(){

        return array(
            'key' => 'category_base_blog_config',
            'title' => 'Category section blog settings',
            'fields' => array (
                array (
                    'key' => 'category_base',
                    'label' => 'Category section',
                    'name' => 'Category section',
                    'type' => 'text',
                ),

            ),
            'location' => array (
                array (
                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => "views/template-blog-category.blade.php",
                    ),

                ),
            ),

        );

    }



    private function webinar_home(){

        return array(
            'key' => 'webinar_home_custom',
            'title' => 'Zoom home settings',
            'fields' => array (
                array (
                    'key' => 'id_webinar',
                    'label' => 'ID zoom room',
                    'name' => 'ID zoom room',
                    'type' => 'text',
                ),

            ),
            'location' => array (
                array (
                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'views/template-open-webinar-escala.blade.php',
                    ),
                ),
            ),

        );

    }
    private function webinar_meeting(){

        return array(
            'key' => 'webinar_meeting_custom',
            'title' => 'Webinar meeting settings',
            'fields' => array (
                array (
                    'key' => 'link_zoom',
                    'label' => 'Link directo a zoom',
                    'name' => 'Link directo a zoom',
                    'type' => 'url',
                ),
                array (
                    'key' => 'program_date',
                    'label' => 'Link reprogramación de cita',
                    'name' => 'Link reprogramación de cita',
                    'type' => 'url',
                ),

            ),
            'location' => array (
                array (
                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'views/template-open-webinar-escala-meeting.blade.php',
                    ),

                ),
                array (

                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'views/template-zoom-demo-meeting.blade.php',
                    ),
                ),
            ),

        );

    }



    public static function _getField($field, $id = null){



        if( function_exists('get_field') ){

            $l = null;
            if( $id ){
                $l = get_field($field, $id);

            }else{
                $l = get_field($field);
            }

            if($l != null || $l != ''){

                return $l;

            }else{
                return null;
            }

        }else{

            return null;

        }
    }



}




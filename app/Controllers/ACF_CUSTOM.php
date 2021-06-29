<?php

namespace App\Controllers;

use Sober\Controller\Controller;


class ACF_CUSTOM extends Controller
{



    public function setACF(){

        // $l = array(
        //     $this->allPages(),
        //     $this->webinar_home()
        // )


        // foreach ($l as $key => $value) {
        //     # code...
        //     acf_add_local_field_group(
        //         $value
        //     );
        // }

        acf_add_local_field_group(

                $this->allPages()

        );
        acf_add_local_field_group(

                $this->webinar_home()

        );
        acf_add_local_field_group(

                $this->webinar_meeting()

        );

    }



    private function allPages(){

        return array(
            'key' => 'cf7_custom',
            'title' => 'Contact form 7 settings',
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
                    'type' => 'text',
                )
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ),
                ),
            ),

        );

    }

    private function webinar_home(){

        return array(
            'key' => 'webinar_home_custom',
            'title' => 'Webinar home settings',
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

            ),
            'location' => array (
                array (
                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'views/template-open-webinar-escala-meeting.blade.php',
                    ),
                ),
            ),

        );

    }







}

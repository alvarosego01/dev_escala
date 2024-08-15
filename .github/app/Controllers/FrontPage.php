<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

    public static function setSpecialAppearPopUp($type, $pageId)
    {

        if ($type != null && $type == 'onload_webpage') {
            # code...
            wp_localize_script(
                'popUpConfig.js',
                'popup_config',
                array(
                    'type' => $type,
                )

            );
        }

        if ($type != null && $type == 'on_seconds') {
            # code...
            $s = ACF_CUSTOM::_getField('bootstrap_popup_time_appear', $pageId);

            wp_localize_script(
                'popUpConfig.js',
                'popup_config',
                array(
                    'type' => $type,
                    'seconds' =>  $s,
                )

            );

        }
    }
}

<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class MenuSettings extends Controller
{


    public static function _getMenu(
        $location,
        $customClass
    ) {
        wp_nav_menu(
            array(
                'theme_location'  => $location,
                'menu'            => '',
                'container'       => 'div',
                'container_class' => 'menu-{menu slug}-container',
                'container_id'    => '',
                'menu_class'      => $customClass,
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul>%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            )
        );
    }
}

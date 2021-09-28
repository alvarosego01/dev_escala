<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class MenuSettings extends Controller
{


// location
// container_id
// container_class
// menu_class
    public static function _getMenu(
        $parameter
    ) {
        wp_nav_menu(
            array(
                'theme_location'  => $parameter['location'],
                'menu'            => '',
                'container'       => 'div',
                'container_id'    => $parameter['container_id'],
                'container_class' => $parameter['container_class'],
                'menu_class'      => $parameter['menu_class'],
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="navbar-nav me-auto">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            )
        );
    }



}

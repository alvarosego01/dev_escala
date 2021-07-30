<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class MenuSettings extends Controller
{


    public static function _getMenu(
        $location,
        $container_id = '',
        $menu_class = ''
    ) {
        wp_nav_menu(
            array(
                'theme_location'  => $location,
                'menu'            => '',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => $container_id,
                'menu_class'      => $menu_class,
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

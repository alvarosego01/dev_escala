<?php

namespace App\Classes;


class Blocks_functions
{

    public function __construct()
    {
    }

    public function get_img($image_id, $type)
    {
        $image_url = wp_get_attachment_url($image_id);
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

        if ($type == 'src') {
            return $image_url;
        } else if ($type == 'alt') {
            return $image_alt;
        } else {
            return $image_url;
        }
    }
}

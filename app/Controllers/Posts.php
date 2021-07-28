<?php

namespace App\Controllers;

use Sober\Controller\Controller;


class Posts extends Controller
{


    public static function getPosts($args)
    {

        $loop = new \Wp_Query($args);
        if ($loop->have_posts()) {
            return $loop;
        } else {
            return null;
        }
    }


    public static function getPhoto($id)
    {

        return wp_get_attachment_url(get_post_thumbnail_id($id));
    }


    public static function getWords($string, $num_of_words)
    {
        $string = preg_replace('/\s+/', ' ', trim($string));
        $words = explode(" ", $string); // an array

        // if number of words you want to get is greater than number of words in the string
        if ($num_of_words > count($words)) {
            // then use number of words in the string
            $num_of_words = count($words);
        }

        $new_string = "";
        for ($i = 0; $i < $num_of_words; $i++) {
            $new_string .= $words[$i] . " ";
        }

        return trim($new_string);
    }
}



// {WP_Post Object
//     (
//         [ID] =&gt; 3041
//         [post_author] =&gt; 3
//         [post_date] =&gt; 2021-06-01 11:05:10
//         [post_date_gmt] =&gt; 2021-06-01 16:05:10
//         [post_content] =&gt;


// [post_title] =&gt; Estrategias de venta
// [post_excerpt] =&gt;
// [post_status] =&gt; publish
// [comment_status] =&gt; open
// [ping_status] =&gt; open
// [post_password] =&gt;
// [post_name] =&gt; estrategias-de-venta-2
// [to_ping] =&gt;
// [pinged] =&gt;
// [post_modified] =&gt; 2021-06-01 13:11:53
// [post_modified_gmt] =&gt; 2021-06-01 18:11:53
// [post_content_filtered] =&gt;
// [post_parent] =&gt; 0
// [guid] =&gt; //localhost:3000/escala/?p=3041
// [menu_order] =&gt; 0
// [post_type] =&gt; post
// [post_mime_type] =&gt;
// [comment_count] =&gt; 0
// [filter] =&gt; raw
// )
// 1}

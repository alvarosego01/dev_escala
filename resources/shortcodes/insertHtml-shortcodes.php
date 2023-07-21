

<?php


function insert_html($atts)
{
    ob_start();
    $default = array(
        'html' => null,

    );
    $a = shortcode_atts($default, $atts);
    // $a = $atts;
    ?>

<?php


    if (isset($a['html']) && $a['html'] != null) {

        //  $type_button = type_button($a['type_button']);
        // $var = "<div style=\"padding:56.25% 0 0 0;position:relative;\"><iframe src=\"https://player.vimeo.com/video/708058618?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479\" frameborder=\"0\" allow=\"autoplay; fullscreen; picture-in-picture\" allowfullscreen style=\"position:absolute;top:0;left:0;width:100%;height:100%;\" title=\"Escala - Plataforma para potenciar tu negocio\"></iframe></div><script src=\"https://player.vimeo.com/api/player.js\"></script>";

        $var = $a['html'];

        $html = base64_decode($var);

        echo $html;

    }

?>


<?php
$output = ob_get_contents();
ob_end_clean();
return  $output;
}
add_shortcode('insert_html', 'insert_html');

 ?>

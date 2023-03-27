<?php

function type_button($type)
{
    $type_button = null;
    if (isset($type)) {
        if ($type == 'trial') {
            $type_button = 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022';
        }
        if ($type == 'demo') {
            $type_button = 'secondaryButton hoverInEffect openPopUpButton popup-general-demo-2022';
        }
    }

    return $type_button;
}

function setUrl($type)
{
    $type_button = null;
    if (isset($type)) {

        $type_button = str_replace("openPopUpButton"," ", $type);

    }

    return $type_button;
}

function component_blog_cta_1($atts)
{
    ob_start();
    $default = array(
        'type_button' => null,
        'url' => null
    );
    $a = shortcode_atts($default, $atts);
    // $a = $atts;
    ?>

<?php
                 if (isset($a['type_button']) && $a['type_button'] != null) {
                     $type_button = type_button($a['type_button']);

                    }

                    if (isset($a['url']) && $a['url'] != null) {
                        $url = $a['url'];
                        $type_button = setUrl( $type_button );
                    }
?>


        <section class="customShortCode innerBanner customBannerBlog component_blog_cta_1">

            <div class="innerSectionElement">

                <div class="containElements">

                <div class="image">

                <div class="containerImage">
                    <?php
                    $src = App::setFilePath('/assets/images/illustrations/otto/inteligente.png');
                    ?>
                    <img alt="Escala implementación" src="<?php echo $src ?>" alt="" loading="lazy">
                </div>

                </div>

                <div class="info">


                <div class="containerImage logo">
                    <?php
                    $src = App::setFilePath('/assets/images/logos/logoEscalaWhite.svg');
                    ?>
                    <img alt="Logotipo de Escala color blanco" src="<?php echo $src ?>" alt="" loading="lazy">
                </div>

                        <h3 class="secondaryTitle">
                            Estás a un clic de recibir <br class="space">
                            una Demo Gratis
                        </h3>

                        <?php

                        if (isset($a['type_button']) && $a['type_button'] != null) { ?>
                            <a class="<?php echo $type_button ?>" >
                                Recibe un demo
                            </a>
                            <?php
                        }
                            if (isset($a['url']) && $a['url'] != null) {
                                ?>
                                <a class="<?php echo $type_button ?>" href="<?php echo $url ?>">
                                    Recibe un demo
                                </a>
                                <?php
                            } ?>

                        </div>
                </div>

            </div>

        </section>


    <?php

$output = ob_get_contents();
ob_end_clean();
return  $output;

}
add_shortcode('component_blog_cta_1', 'component_blog_cta_1');

function component_blog_cta_2($atts)
{
    ob_start();
    $default = array(
        'type_button' => null,
        'url' => null
    );
    $a = shortcode_atts($default, $atts);
    // $a = $atts;
    ?>

<?php
                 if (isset($a['type_button']) && $a['type_button'] != null) {
                     $type_button = type_button($a['type_button']);

                    }

                    if (isset($a['url']) && $a['url'] != null) {
                        $url = $a['url'];
                        $type_button = setUrl( $type_button );
                    }
?>



        <section class="customShortCode innerBanner customBannerBlog component_blog_cta_2">

            <div class="innerSectionElement">

                <div class="containElements">

                <div class="info">


                <div class="containerImage logo">
                    <?php
                    $src = App::setFilePath('/assets/images/logos/logoEscalaWhite.svg');
                    ?>
                    <img alt="Escala logo" src="<?php echo $src ?>" alt="" loading="lazy">
                </div>

                        <h3 class="secondaryTitle">
                            Estás a un clic de recibir <br class="space">
                            una Demo Gratis
                        </h3>

                        <?php

                        if (isset($a['type_button']) && $a['type_button'] != null) { ?>
                            <a class="<?php echo $type_button ?>" >
                                Recibe un demo
                            </a>
                            <?php
                        }
                            if (isset($a['url']) && $a['url'] != null) {
                                ?>
                                <a class="<?php echo $type_button ?>" href="<?php echo $url ?>">
                                    Recibe un demo
                                </a>
                                <?php
                            } ?>

                        </div>
                </div>

            </div>

        </section>


    <?php
    $output = ob_get_contents();
    ob_end_clean();
    return  $output;
}
add_shortcode('component_blog_cta_2', 'component_blog_cta_2');



function component_blog_cta_3($atts)
{
    ob_start();
    $default = array(
        'type_button' => null,
        'url' => null
    );
    $a = shortcode_atts($default, $atts);
    // $a = $atts;
    ?>

<?php
                 if (isset($a['type_button']) && $a['type_button'] != null) {
                     $type_button = type_button($a['type_button']);

                    }

                    if (isset($a['url']) && $a['url'] != null) {
                        $url = $a['url'];
                        $type_button = setUrl( $type_button );
                    }
?>


        <section class="customShortCode innerBanner customBannerBlog component_blog_cta_3">

            <div class="innerSectionElement">

                <div class="containElements">

                <div class="info">

                        <h3 class="secondaryTitle">
                            Estás a un clic de recibir <br class="space">
                            una Demo Gratis
                        </h3>

                    <div class="containerImage logo">
                        <?php
                        $src = App::setFilePath('/assets/images/logos/logoEscalaWhite.svg');
                        ?>
                        <img alt="Escala logo" src="<?php echo $src ?>" alt="" loading="lazy">
                    </div>

                    </div>

                <div class="image">

                <div class="containerImage">
                    <?php
                    $src = App::setFilePath('/assets/images/illustrations/otto/inteligente.png');
                    ?>
                    <img alt="Escala implementación" src="<?php echo $src ?>" alt="" loading="lazy">
                </div>

                <?php

                if (isset($a['type_button']) && $a['type_button'] != null) { ?>
                        <a class="<?php echo $type_button ?>" >
                            Recibe un demo
                        </a>
                        <?php
                    }
                        if (isset($a['url']) && $a['url'] != null) {
                            ?>
                            <a class="<?php echo $type_button ?>" href="<?php echo $url ?>">
                                Recibe un demo
                            </a>
                            <?php
                        }
                        ?>

                </div>


                </div>

            </div>

        </section>


    <?php

$output = ob_get_contents();
ob_end_clean();
return  $output;
}
add_shortcode('component_blog_cta_3', 'component_blog_cta_3');

?>



<div id="escala_app">

    <div class="sections">



        <section id="lead-form" class="hero2025 escala_app_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-hero-app-escala-2025.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <span>Acelera tus ventas estés <br class="DT_e">
                                donde estés con la </span>
                            <h1 class="principalBigTitle">
                                App móvil de Escala
                            </h1>

                            <h1 class="principalBigTitleMb">
                                App móvil de Escala

                            </h1>
                            <p class="principalBigText">
                                Accede a tu CRM desde el celular <br class="DT_e">
                                descargando la aplicación <br class="DT_e">
                                gratuita de Escala
                            </p>
                            <div class="containerImage">
                                <!-- <img class="appEscala" alt="Ilustración app escala"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/imagen app escala 2025 hero.webp') !!}"
                                    loading="lazy"> -->

                                <img alt="icono app escala google play"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/app_image_1.png') !!}"
                                    loading="lazy">
                                <img alt="icono  app store"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/app_image_2.png') !!}"
                                    loading="lazy">
                            </div>
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Ilustración app escala"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/imagen app escala 2025 hero.webp') !!}"
                                loading="lazy">

                        </div>
                    </section>

                    <section class="innerSectionElement sct3">
                        <div class="form7">
                            <div class="containElements">

                                <div class="formatForm redirectWeb" redirectweb="true">

                                    <h5 class="titleFormat blackcolor"> Conoce Escala en una <br class="space"> sesión personalizada</h5>

                                    @php
                                    $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                    $_rs = [];
                                    $_formShortcode = null;
                                    if ($_data = get_posts($_args)) {
                                    foreach ($_data as $_key) {
                                    $_rs[$_key->ID] = $_key->post_title;
                                    if ($_key->post_title === 'Profile demo - Flujo Demo') {
                                    $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                    }
                                    }
                                    } else {
                                    $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                    }
                                    @endphp
                                    {!! do_shortcode($_formShortcode) !!}
                                </div>

                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent escala_app_1">
            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="groupElements row">
                        <div class="info col-md-12 col-lg-8 ">
                            <div class="containElements">
                                @php
                                $elementsReviews = [
                                [
                                'logo' => App::setFilePath('/assets/images/illustrations/others/google_tag.png'),
                                'text' => 'Escala / plataforma CRM',
                                'points' => '4.9 / 5',
                                ],
                                [
                                'logo' => App::setFilePath('/assets/images/illustrations/others/capterra_tag.png'),
                                'text' => 'Escala / plataforma CRM',
                                'points' => '4.8 / 5',
                                ],
                                [
                                'logo' =>
                                App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
                                'text' => 'Escala / plataforma CRM',
                                'points' => '4.8 / 5',
                                ]
                                ];
                                @endphp
                                <div class="ele reviews">
                                    <div class="elements">
                                        <div class="iconApp">
                                            <a target="_blank"
                                                href="https://www.getapp.com/customer-management-software/crm/category-leaders">
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_app_record_2025_category.svg') !!}"
                                                    loading="lazy">
                                            </a>
                                        </div>
                                        <div class="iconAppMeta">
                                            <a target="_blank"
                                                href="">
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-meta-business-partner.webp') !!}"
                                                    loading="lazy" alt="Icono Meta Business Partner Escala">
                                            </a>
                                        </div>
                                        @foreach ($elementsReviews as $item)
                                        <div class="refersElement">

                                            <div class="infoInner">
                                                <div class="tag">
                                                    <div class="containerImage">
                                                        <img src="{!! $item['logo'] !!}" loading="lazy">
                                                    </div>

                                                    <span class="points">
                                                        {!! $item['points'] !!}
                                                    </span>
                                                </div>
                                                <p class="text">
                                                    {!! $item['text'] !!}
                                                </p>
                                                <div class="stars">
                                                    <div class="containerImage">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icons-stars-yellow.svg') !!}"
                                                            loading="lazy">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>






        <section class="sectionParent customSection escala_app_2">
            <div class="section-row">
                <section class="innerSectionElement sct1">
                    <h2 class="primaryTitle">
                        No pierdas oportunidades de negocio <br class="space">
                        por no tener acceso a una computadora
                    </h2>
                </section>
                <section class="innerSectionElement sct2">
                    <div class="groupElements ">
                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/app-img-qr-descargar-2025-1.webp') !!}"
                                    loading="lazy">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/app-img-qr-descargar-2025-2.webp') !!}"
                                    loading="lazy">
                            </div>
                        </div>
                        <div class="info  ">
                            <h3 class="secondaryTitle">
                                Accede al CRM de Escala <br class="space">
                                desde cualquier lugar y en <br class="space">
                                cualquier momento
                            </h3>
                            <span>Escanea el código QR para descargar la<br class="space">
                                aplicación directamente desde la App Store.</span>
                        </div>
                    </div>
                </section>
            </div>

        </section>


        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'escala_app_3',
        'enableTitle' => false,
        'titlePrincipal' => false,
        'overlay' => false,
        'enableButton' => false,
        'elements' => [
        [
        'img' => App::setFilePath('/assets/images/illustrations/others/crea-actualiza-contactos-card-1.webp'),
        'title' => '
        Crea y actualiza <br class="space">
        contactos
        ',
        'text' => '
        Organiza, y accede fácilmente a la <br class="space">
        información de tus leads y clientes.
        ',
        'enableButton' => false,
        'background_item' => false,
        ],
        [
        'img' => App::setFilePath('/assets/images/illustrations/others/gestiona-oportunidades-card-2.webp'),
        'title' => '
        Gestiona oportunidades
        <br class="space">
        en tu pipeline
        ',
        'text' => '
        Haz seguimiento paso a paso del
        <br class="space">
        proceso comercial y toma acciones
        <br class="space">
        para cerrar más y mejor.
        ',
        'enableButton' => false,
        'background_item' => false,
        ],
        [
        'img' => App::setFilePath('/assets/images/illustrations/others/programa-tareas-card-3.webp'),
        'title' => '
        Programa tareas y <br class="space">
        actividades
        ',
        'text' => 'Crea, gestiona y recibe <br class="space">
        recordatorios de tus tareas y <br class="space">
        actividades ¡para que no se <br class="space">
        escape ningún lead!
        ',
        'enableButton' => false,
        'background_item' => false,
        ],
        [
        'img' => App::setFilePath('/assets/images/illustrations/others/sincroniza-card-4.webp'),
        'title' => '
        Sincronización en <br class="space">
        tiempo real
        ',
        'text' => '
        Actualiza datos desde cualquier <br class="space">
        dispositivo y mantén toda tu <br class="space">
        información al día.
        ',
        'enableButton' => false,
        'background_item' => false,
        ]

        ],
        ];
        @endphp


        @contain_multiple_cards_T2($parameters)
        @endcontain_multiple_cards_T2

        <div class="btnCenter">
            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                Tener sesión personalizada →
            </a>
        </div>

        <section class="customSection sectionParent escala_app_4">

            <div class="section-row" style="background-image: url({!! App::setFilePath('/assets/images/banners/bg-section-4-app-escala-2025.webp') !!})">
                <section class="innerSectionElement sct1">
                    <div class="img-left">
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/person/am/am-seo-escala-2025-app.webp') !!}" loading="lazy">
                        </div>

                    </div>
                    <div class="text-right">
                        <p>
                            <b>"La App de Escala es una herramienta <br class="DT_e">
                                indispensable para tener acceso inmediato <br class="DT_e">
                                y continuo a tu CRM</b> desde cualquier lugar, <br class="DT_e">
                            con notificaciones en tiempo real, donde <br class="DT_e">
                            podrás optimizar la gestión de tu negocio <br class="DT_e">
                            desde un solo lugar."
                        </p>
                        <span>
                            <b>Andrés Moreno,</b> <br class="space">
                            Fundador de escala & Open English
                        </span>
                    </div>
                </section>
            </div>

        </section>




        <section class="customSection sectionParent escala_app_5">

            <div class="section-row">

                <section class="innerSectionElement sct0">

                    <h2 class="primaryTitle">
                        ¿Cómo descargar y usar la <br class="space">
                        app móvil de Escala?
                    </h2>

                </section>

                <section class="innerSectionElement sct1">
                    <div class="groupElements">
                        <div class="info col-md-12 col-lg-8">
                            <div class="containerImage">
                                <img class="bgOverlay" src="{!! App::setFilePath('/assets/images/banners/bg-video-cover.png') !!}" loading="lazy">
                                <img class="btnIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') !!}" loading="lazy" style="cursor: pointer;" onclick="playVideo()">
                            </div>
                            <div class="video">
                                @php
                                $videoEmbed = App::setFilePath('/assets/videos/app_escala_video.mp4');
                                $videoCover = App::setFilePath('/assets/images/appEscala/bg-video-usar-app.png');
                                @endphp
                                @if (isset($videoEmbed) && $videoEmbed != null)
                                <div class="youtubeImageContainer">
                                    <video id="myVideo" class="video-js" controls preload="none" poster="{{ $videoCover }}" data-setup='{"autoplay": false}'>
                                        <source src="{{ $videoEmbed }}" type="video/mp4" />
                                        <source src="{{ $videoEmbed }}" type="video/webm" />
                                        <p class="vjs-no-js">
                                            To view this video please enable JavaScript, and consider upgrading to a
                                            web browser that
                                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                        </p>
                                    </video>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>

                <script>
                    function playVideo() {
                        // Obtener el player de Video.js
                        var player = videojs('myVideo');

                        // Reproducir el video
                        player.play();

                        // Ocultar elementos (opcional)
                        document.querySelector('.btnIcon').style.display = 'none';


                        // Mostrar controles (opcional)
                        player.controls(true);
                    }

                    // Inicializar el player cuando el DOM esté listo
                    document.addEventListener('DOMContentLoaded', function() {
                        // Esperar a que Video.js esté listo
                        videojs('myVideo').ready(function() {
                            console.log('Video.js player ready');
                        });
                    });
                </script>

            </div>

        </section>



        <section class="customSection sectionParent  escala_app_6">

            <div class="section-row ">
                <div class="row sct1">
                    <div class="text-center col-12">
                        <h2 class="title">
                            Nuestros clientes dicen por qué <br class="space">
                            el CRM de Escala es el más completo
                        </h2>
                    </div>
                </div>

                <div class=" row sct2">
                    <div class="mb-4 col-lg-4 col-md-12 box-internal">
                        <div class="card-box"
                            style="background-image: url('{!! App::setFilePath('/assets/images/illustrations/others/bg_testimonios_home_2025.png') !!}')">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icono_testimonios_home_blue_white.png') !!}"
                                alt="">
                            <div class="card-body">
                                <h5 class="card-title"><b>Aumentamos las <br class="DT_e">
                                        ventas en un 100%.</b> <br class="DT_e">
                                    El acompañamiento <br class="DT_e">
                                    del equipo de Escala <br class="DT_e">
                                    ha sido fundamental.
                                    <br class="space">
                                    <br class="space">

                                </h5>
                                <div class="card-text">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_miguel_urrego_poctlab.png') !!}"
                                        alt="">
                                    <div class="text-internal">
                                        <span class="card-title">Miguel Urrego</span>
                                        <p class="card-text">Líder Comercial Poctlab</p>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-stars-yellow.png') !!}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 col-lg-4 col-md-12 box-internal">
                        <div class="card-box"
                            style="background-image: url('{!! App::setFilePath('/assets/images/illustrations/others/bg_testimonios_home_2025.png') !!}')">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icono_testimonios_home_blue_white.png') !!}"
                                alt="">
                            <div class="card-body">
                                <h5 class="card-title">Escala ha sido un gran <br class="DT_e">
                                    aliado para <b> mejorar nuestra operación <br class="DT_e">
                                        comercial,</b> automatizar
                                    <br class="DT_e">
                                    tareas y optimizar nuestra
                                    <br class="DT_e"> inversión en marketing.
                                </h5>
                                <div class="card-text">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/miller_romero_taller_cinco.png') !!}"
                                        alt="">
                                    <div class="text-internal">
                                        <span class="card-title">Miller Romero</span>
                                        <p class="card-text">Líder Comunicaciones Taller Cinco</p>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-stars-yellow.png') !!}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 col-lg-4 col-md-12 box-internal">
                        <div class="card-box"
                            style="background-image: url('{!! App::setFilePath('/assets/images/illustrations/others/bg_testimonios_home_2025.png') !!}')">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icono_testimonios_home_blue_white.png') !!}"
                                alt="">
                            <div class="card-body">
                                <h5 class="card-title">Escala no solo ofrecen un <b> software robusto y amigable,</b>
                                    sino también un servicio excepcional que asegura que aprovechemos al máximo
                                    la herramienta.
                                </h5>
                                <div class="card-text">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/catalina_gonzalez_katagogo.png') !!}"
                                        alt="">
                                    <div class="text-internal">
                                        <span class="card-title">Catalina González Goez
                                        </span>
                                        <p class="card-text"> CEO KataGoGo</p>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-stars-yellow.png') !!}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="sectionParent customSection escala_app_7">
            <div>
                <div class="section-row" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-section-7-app-escala-2025.webp') !!}')">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                                <h3 class="secondaryTitle">
                                    <span>Descarga hoy mismo la
                                        <br class="space">
                                    </span>App móvil de Escala
                                    <br class="space">
                                    <span>y lleva el éxito de tu negocio contigo.</span>
                                </h3>
                                <div class="features">
                                    <div class="element">
                                        <a target="_blank"
                                            href="https://play.google.com/store/apps/details?id=com.escala.crm.app&pli=1">

                                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_1.png') }}"
                                                alt="" class="icon">
                                        </a>
                                    </div>
                                    <div class="element">
                                        <a target="_blank" href="https://apps.apple.com/ar/app/escala-crm/id6499237262">

                                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_2.png') }}"
                                                alt="" class="icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="image col-md-12 col-lg-4">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/appEscala/app_image_9.png') !!}"
                                        loading="lazy">
                                </div>
                            </div>



                        </div>
                    </section>
                </div>
            </div>
        </section>

    </div>


</div>
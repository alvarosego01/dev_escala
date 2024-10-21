{{--
  Template Name: [B] Home - 2023
--}}

@extends('layouts.app')
@section('content')



<div id="homeSection_2023">
    <div class="sections">

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
        'logo' => App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
        'text' => 'Escala / plataforma CRM',
        'points' => '4.8 / 5',
        ]
        ];
        @endphp



        <section id="lead-form"
            class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol home_2023_0 newHome ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_home_section_1_2024.svg') }}')"
                class="backgroundFull">

                <div class="section-row">

                    <section class="innerSectionElement sct0">

                        <div class="containElements">

                            <h1 class="principalBigTitle ">
                                Escala tus ventas con un CRM todo-en-uno<br class="space">
                                <span>
                                    y el mejor acompañamiento personalizado para tu pyme
                                </span>
                            </h1>

                        </div>

                    </section>

                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-9 ">


                                <div class="containElements row threeCol">

                                    <div class="ele reviews col-md-12 col-lg-3 D_e">

                                        <div class="elements">

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
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_blue.svg') !!}" loading="lazy">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            @endforeach

                                        </div>


                                    </div>

                                    <div class="ele video col-md-12 col-lg-9">

                                        @php
                                        $videoEmbed = App::setFilePath('/assets/videos/intro_escala__crm_todo-en-uno (1080p).mp4');
                                        $videoCover = App::setFilePath('/assets/videos/intro_escala__crm_todo-en-uno (1080p).mp4');
                                        @endphp

                                        @if (isset($videoEmbed) && $videoEmbed != null)
                                        <div class="youtubeImageContainer ">

                                            <video class="video-js video_1 videoCover" autoplay muted loop>
                                                <source src="{{ $videoCover }}" type="video/mp4">
                                                Tu navegador no soporta videos HTML5.
                                            </video>

                                            <video id="video_1" class="video-js video_1" controls
                                                preload="none" poster="{{ $videoCover }}"
                                                {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                                data-setup="{
                                                          autoplay: false
                                                        }">
                                                <source src="{{ $videoEmbed }}" type="video/mp4" />
                                                <source src="{{ $videoEmbed }}" type="video/webm" />
                                                <p class="vjs-no-js">
                                                    To view this video please enable JavaScript, and consider
                                                    upgrading to a
                                                    web browser that
                                                    <a href="https://videojs.com/html5-video-support/"
                                                        target="_blank">supports
                                                        HTML5 video</a>
                                                </p>
                                            </video>


                                        </div>

                                        <script type="text/javascript">
                                            var player = videojs('video_1');

                                            // Agrega un oyente de eventos al evento 'play'
                                            player.on('play', function() {

                                                jQuery('.video_1.videoCover').remove();

                                            });
                                        </script>

                                        @endif

                                    </div>

                                </div>

                                <div class="containArticle">
                                    <p>Destacados en:</p>
                                    <div class="containerImage">
                                        <a target="_blank" href="https://forbes.co/2024/08/08/emprendedores/fundador-de-openenglish-y-su-antiguo-cfo-recaudan-us12-millones-para-un-crm-de-pymes">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/lg_forbes.png') !!}" loading="lazy"></a>

                                    </div>
                                    <div class="containerImage">
                                        <a target="_blank" href="https://es-us.finanzas.yahoo.com/noticias/escala-fundada-l%C3%ADder-open-english-000000848.html"> <img src="{!! App::setFilePath('/assets/images/illustrations/others/lg_yahoo_finance.png') !!}" loading="lazy"> </a>
                                    </div>
                                    <div class="containerImage">
                                        <a target="_blank" href="https://latamlist.com/escala-raises-12m-funding-round/"> <img src="{!! App::setFilePath('/assets/images/illustrations/others/lg_latam_list.png') !!}" loading="lazy"> </a>
                                    </div>
                                    <div class="containerImage imgSpecial">
                                        <a target="_blank" href="https://refreshmiami.com/to-fuel-hispanic-business-success-escala-closes-12m-funding-round/"> <img src="{!! App::setFilePath('/assets/images/illustrations/others/lg_refresh_miami.png') !!}" loading="lazy"> </a>
                                    </div>
                                    <div class="containerImage">
                                        <a target="_blank" href="https://www.valoraanalitik.com/escala-fundada-por-lider-de-open-english-levanta-us12-millones-para-impulsar-pymes-en-colombia/"> <img src="{!! App::setFilePath('/assets/images/illustrations/others/lg_valora.png') !!}" loading="lazy"> </a>
                                    </div>
                                </div>
                            </div>
                            <section class="innerSectionElement sct3 innerMobile">

                                <div class="containElements">

                                    @php
                                    $elements = [
                                    [
                                    'text' => '
                                    Herramientas de marketing y ventas<br class="D_e">
                                    integradas y fáciles de usar
                                    ',
                                    ],
                                    [
                                    'text' => '
                                    Te guiamos a adaptar el <br class="D_e">
                                    CRM a tus necesidades
                                    ',
                                    ],
                                    [
                                    'text' => '
                                    Capacitamos a tu equipo <br class="D_e">
                                    para maximizar resultados
                                    ',
                                    ],
                                    ];
                                    @endphp


                                    <div class="elementsCheck">

                                        @foreach ($elements as $item)
                                        <div class="element">

                                            <div class="info">

                                                <div class="icon">

                                                    <div class="containerImage">
                                                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon_check_orange.png') }}"
                                                            loading="lazy">
                                                    </div>
                                                </div>

                                                <p class="text">
                                                    {!! $item['text'] !!}
                                                </p>
                                            </div>

                                        </div>
                                        @endforeach

                                    </div>


                                </div>

                            </section>
                            <div class="form7 col-md-12 col-lg-3 ">
                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <div class="form-container form-1" style="text-align:center;">
                                            <img style="margin-top: 30px; margin-bottom:-15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-1.png') !!}" loading="lazy">
                                            <h5 class="titleFormat blackcolor">Recibe un demo
                                                <br class="space">
                                                en vivo
                                            </h5>
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
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                            }
                                            @endphp
                                            {!! do_shortcode($_formShortcode) !!}
                                        </div>

                                        <div class="form-container form-2" style="display:none; text-align:center;">
                                            <img style="margin-top: 30px; margin-bottom:-15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-2.png') !!}" loading="lazy">
                                            <h5 class="titleFormat blackcolor">Ayúdanos a personalizar
                                                <br class="space">tu demo
                                            </h5>
                                            @php
                                            $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                            $_rs = [];
                                            $_formShortcode = null;
                                            if ($_data = get_posts($_args)) {
                                            foreach ($_data as $_key) {
                                            $_rs[$_key->ID] = $_key->post_title;
                                            if ($_key->post_title === 'Demo flujo step 2') {
                                            $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                            }
                                            }
                                            } else {
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                            }
                                            @endphp
                                            {!! do_shortcode($_formShortcode) !!}
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </section>

                    <section class="innerSectionElement sct2 ">

                        <div class="containElements">

                            @php
                            $elements = [
                            [
                            'text' => '
                            Herramientas de marketing y ventas<br class="D_e">
                            integradas y fáciles de usar
                            ',
                            ],
                            [
                            'text' => '
                            Te guiamos a adaptar el <br class="D_e">
                            CRM a tus necesidades
                            ',
                            ],
                            [
                            'text' => '
                            Capacitamos a tu equipo <br class="D_e">
                            para maximizar resultados
                            ',
                            ],
                            ];
                            @endphp

                            <div class="ele reviews col-md-12 MT_e">

                                <div class="elements">

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
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_blue.svg') !!}" loading="lazy">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    @endforeach

                                </div>


                            </div>
                            <div class="containArticle_mobile">
                                <p>Destacados en:</p>
                                <div class="containArticle_mobile_img">
                                    <div class="containerImage">
                                        <a target="_blank" href="https://forbes.co/2024/08/08/emprendedores/fundador-de-openenglish-y-su-antiguo-cfo-recaudan-us12-millones-para-un-crm-de-pymes">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/lg_forbes.png') !!}" loading="lazy"></a>

                                    </div>
                                    <div class="containerImage">
                                        <a target="_blank" href="https://es-us.finanzas.yahoo.com/noticias/escala-fundada-l%C3%ADder-open-english-000000848.html"> <img src="{!! App::setFilePath('/assets/images/illustrations/others/lg_yahoo_finance.png') !!}" loading="lazy"> </a>
                                    </div>
                                    <div class="containerImage">
                                        <a target="_blank" href="https://latamlist.com/escala-raises-12m-funding-round/"> <img src="{!! App::setFilePath('/assets/images/illustrations/others/lg_latam_list.png') !!}" loading="lazy"> </a>
                                    </div>
                                    <div class="containerImage imgSpecial">
                                        <a target="_blank" href="https://refreshmiami.com/to-fuel-hispanic-business-success-escala-closes-12m-funding-round/"> <img src="{!! App::setFilePath('/assets/images/illustrations/others/lg_refresh_miami.png') !!}" loading="lazy"> </a>
                                    </div>
                                    <div class="containerImage">
                                        <a target="_blank" href="https://www.valoraanalitik.com/escala-fundada-por-lider-de-open-english-levanta-us12-millones-para-impulsar-pymes-en-colombia/"> <img src="{!! App::setFilePath('/assets/images/illustrations/others/lg_valora.png') !!}" loading="lazy"> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementsCheck">

                                @foreach ($elements as $item)
                                <div class="element">

                                    <div class="info">

                                        <div class="icon">

                                            <div class="containerImage">
                                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon_check_orange.png') }}"
                                                    loading="lazy">

                                            </div>
                                        </div>

                                        <p class="text">
                                            {!! $item['text'] !!}
                                        </p>
                                    </div>

                                </div>
                                @endforeach

                            </div>


                        </div>

                    </section>


                </div>

            </div>

        </section>

        <section class="customSection sectionParent home_2023_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        Nuestros clientes han logrado
                    </h2>
                    <div class="containElements">

                        <div class="element">
                            <p class="text">
                                <span class="number">2X</span> <br class="space">
                                <span class="text-big">Ingresos en<br class="space">
                                    6 meses</span>

                            </p>
                        </div>
                        <div class="element">
                            <p class="text">
                                <span class="number">70%</span> <br class="space">
                                <span class="text-big">de aumento en <br class="space"> eficiencia de procesos <br class="space"> comerciales</span>
                            </p>
                        </div>
                        <div class="element">
                            <p class="text">
                                <span class="number">300%</span> <br class="space">
                                <span class="text-big">más leads<br class="space"> generados en<br class="space">
                                    6 meses</span>
                            </p>
                        </div>


                    </div>

                </section>

            </div>

        </section>
        <section class="customSection sectionParent home_2023_2">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="title">
                            ¿Por qué los negocios logran <br class="space">
                            vender más y mejor con Escala?
                        </h2>
                        <p class="text">
                            7 grandes ventajas
                        </p>

                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="cardText card1">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/1_home_icon_logros.svg') }}"
                                        alt="" loading="lazy">
                                    <span class="text">
                                        Aumentas la eficiencia <br class="space">
                                        de tus procesos de venta
                                    </span>
                                </div>
                                <div class="cardText card2">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/2_home_icon_logros.svg') }}"
                                        alt="" loading="lazy">
                                    <span class="text">
                                        Obtienes mayor control <br class="space">
                                        sobre gestión comercial
                                    </span>
                                </div>
                                <div class="cardText card3">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/3_home_icon_logros.svg') }}"
                                        alt="" loading="lazy">
                                    <span class="text">
                                        Integras operaciones de<br class="space">
                                        marketing y ventas
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-4 cardImg">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/imagen_mujer_sosteniendo_computador_escala_home_2024.webp') }}"
                                    class="img-responsive" alt="imagenmujer sosteniendo computador escala home 2024" loading="lazy">
                            </div>

                            <div class="col-md-4">
                                <div class="cardText card4">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/7_home_icon_logros.svg') }}"
                                        alt="" loading="lazy">
                                    <span class="text">
                                        Recibes apoyo al incorporar<br class="space">
                                        nuevas tecnologías
                                    </span>
                                </div>
                                <div class="cardText card5">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/6_home_icon_logros.svg') }}"
                                        alt="" loading="lazy">
                                    <span class="text">
                                        Estandarizas y profesionalizas<br class="space">
                                        comunicaciones
                                    </span>
                                </div>
                                <div class="cardText card6">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/5_home_icon_logros.svg') }}"
                                        alt="" loading="lazy">
                                    <span class="text">
                                        Centralizas información y reduces <br class="space">
                                        riesgo de pérdida de data
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="center-img ">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/4_home_icon_logros.svg') }}"
                                alt="" loading="lazy">
                            <span class="text">
                                Mides y analizas más<br class="space">
                                fácilmente todo el embudo
                            </span>
                        </div>

                    </div>


                </section>

            </div>

        </section>


        <section class="customSection sectionParent home_2023_3">

            <div class="section-row">
                <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_home_section_4_2024.svg') !!})" class="innerSectionElement sct2">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/alfonso_santiago_ceo_escala_img.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-7 column-text">
                                <p>
                                    “Recopilamos nuestra experiencia de <br class="D_e">
                                    10+ años construyendo negocios <br class="D_e">
                                    exitosos para brindarte una plataforma <br class="D_e">
                                    que facilite escalar tu empresa”
                                </p>
                                <span>
                                    Alfonso Santiago <br class="D_e">
                                    CEO de Escala
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>
        <section class="customSection sectionParent home_2023_4">

            <div class="section-row">
                <div class="containElements">
                    <div class="row">
                        <div class="col-md-6 left-column">
                            <h2 class="title">Olvídate de procesos manuales <br class="DT_e">
                                y de CRMs complicados <br class="DT_e">
                                <span> al medir e implementar todo tu<br class="DT_e">
                                    embudo de venta</span>
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/imagen_embudos_atrae_nutre_convierte_home_2024.png') }}"
                                alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="customSection sectionParent home_2023_5">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="title">
                            Conoce las herramientas que <br class="DT_e">
                            optimizan tus operaciones comerciales
                        </h2>


                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="row">

                            <div class="col-md-12 col-lg-5 selectors">
                                @php
                                $elements = [
                                [
                                'title' => 'Gestión de contactos y procesos',
                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_crm_small.png'),
                                'text' => '
                                <span>Vende más y mejor
                                </span> <br class="space">
                                centralizando, organizando y <br class="DT_e">
                                monitoreando toda la información y las <br class="DT_e">
                                actividades de tu equipo comercial.',
                                'img' => App::setFilePath('/assets/images/gifs/image_crm_home_selector.gif'),
                                'button' => [
                                'url' => '',
                                'class' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                                'label' => 'Recibir un demo'
                                ]
                                ],
                                [
                                'title' => 'WhatsApp Inbox, masivos y automatizados',
                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_whatsapp_small.png'),
                                'text' => '
                                <span>Mejora tu comunicación
                                </span> <br class="space">
                                con envíos masivos, mensajes <br class="DT_e">
                                automatizados y gestión de <br class="DT_e">
                                conversaciones en un solo lugar.
                                ',
                                'img' => App::setFilePath('/assets/images/gifs/image_whatsapp_home_selector.gif'),
                                ],
                                [
                                'title' => 'Automatizaciones',
                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_automatizations_small.png'),
                                'text' => '
                                <span>Ahorra tiempo en tareas repetitivas</span>
                                <br class="space">
                                configurando flujos de acciones y <br class="DT_e">
                                comunicaciones en distintas partes de <br class="DT_e">
                                tu proceso comercial.
                                ',
                                'img' => App::setFilePath('/assets/images/gifs/image_automatizations_home_selector.gif'),
                                ],
                                [
                                'title' => 'Email Marketing',
                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_emailmkt_small.png'),
                                'text' => '
                                <span>Crea y envía campañas profesionales
                                </span> <br class="space">
                                en minutos, que nutran relaciones y <br class="DT_e">
                                aumenten la probabilidad de convertir <br class="DT_e">
                                contactos en ventas.',
                                'img' => App::setFilePath('/assets/images/gifs/image_email_marketing_home_selector.gif'),
                                ],
                                [
                                'title' => 'Landing Pages y Formularios',
                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_pages_small.png'),
                                'text' => '
                                <span>Genera más y mejores leads
                                </span> <br class="space">
                                con hermosas páginas que creas en <br class="DT_e">
                                minutos ¡sin depender de programadores! <br class="DT_e">
                                y formularios integrados al CRM para que <br class="DT_e">
                                los contactos se guarden <br class="DT_e">
                                automáticamente.
                                ',
                                'img' => App::setFilePath('/assets/images/gifs/image_landingp_home_selector.gif'),
                                ],
                                [
                                'title' => 'Anuncios digitales ',
                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_ads_small.png'),
                                'text' => '
                                <span>Integra campañas publicitarias pagas
                                </span> <br class="space">
                                en Facebook e Instagram desde Escala para <br class="DT_e">
                                que puedas atribuir resultados de ventas a <br class="DT_e">
                                tus esfuerzos de marketing.',
                                'img' => App::setFilePath('/assets/images/gifs/image_ads_home_selector.gif'),
                                ],
                                [
                                'title' => 'Inteligencia Artificial',
                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_ai_small.png'),
                                'text' => '
                                <span>Crea contenido efectivo en segundos
                                </span> <br class="space">
                                La IA en Escala es como tener un <br class="DT_e">
                                copywriter
                                estrella a una fracción del costo.',
                                'img' => App::setFilePath('/assets/images/gifs/image_ia_home_selector.gif'),
                                ],
                                [
                                'title' => 'Reportes y Dashboards personalizados',
                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_reports_headerband.png'),
                                'text' => '
                                <span>Toma mejores decisiones
                                </span> <br class="space">
                                visualizando la data relevante y oportuna <br class="DT_e">
                                que necesitas para optimizar tus resultados <br class="DT_e">
                                de marketing y venta.',
                                'img' => App::setFilePath('/assets/images/gifs/gif_reports.gif'),
                                ],
                                [
                                'title' => 'Integraciones',
                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_integraciones_small.png'),
                                'text' => '
                                <span>Conecta Escala a otros softwares</span><br class="space">
                                a través de integraciones nativas, nuestra <br class="DT_e">
                                API pública y Zapier.
                                ',
                                'img' => App::setFilePath('/assets/images/gifs/gif_reports.gif'),
                                ],

                                ];
                                @endphp

                                <ul class="elements selectorInfo">

                                    @foreach ($elements as $item)
                                    <li class="element    @if ($loop->iteration == 1) active @endif"
                                        info_index="{!! $loop->index !!}">
                                        <div class="icon">
                                            <div class="containerImage">
                                                <img src="{!! $item['icon'] !!}" loading="lazy">

                                            </div>
                                        </div>
                                        <h3>
                                            {!! $item['title'] !!}
                                        </h3>


                                    </li>
                                    @endforeach

                                </ul>
                                <script type="text/javascript">
                                    var infoArray = <?php echo json_encode($elements); ?>;

                                    jQuery('ul.selectorInfo li').click(function(e) {

                                        jQuery('ul.selectorInfo li').removeClass('active');
                                        jQuery(this).addClass('active');

                                        var index = jQuery(this).attr('info_index');

                                        // Actualiza el texto
                                        jQuery('.showInfoSelectors .infoIn .text').html(infoArray[index]['text']);

                                        // Actualiza la imagen
                                        jQuery('.showInfoSelectors .infoIn .image .containerImage img').attr('src', infoArray[index]['img']);

                                        // Actualiza el botón
                                        var button = infoArray[index]['button'];
                                        jQuery('.showInfoSelectors .infoIn .dynamic-button').html(`
                                        <a href="` + button.url + `" class="btn ` + button.class + `">
                                        ` + button.label + `
                                                </a>
                                            `);

                                    });
                                </script>
                            </div>

                            <div class="col-md-12 col-lg-7 info showInfoSelectors">

                                <div class="infoIn">

                                    <p class="text">
                                        {!! $elements[0]['text'] !!}
                                    </p>

                                    <div class="image">

                                        <div class="containerImage">
                                            <img src="{!! $elements[0]['img'] !!}" loading="lazy">
                                        </div>

                                    </div>
                                    <div class="dynamic-button">
                                        <a href="{!! $elements[0]['button']['url'] !!}" class="btn {!! $elements[0]['button']['class'] !!}">
                                            {!! $elements[0]['button']['label'] !!}
                                        </a>
                                    </div>


                                </div>

                            </div>

                        </div>


                    </div>

                </section>

            </div>

        </section>
        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_home_section_7_2024.svg') !!})" class="customSection sectionParent homeSection_2023_6">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <div class="image">

                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/imagen_home_escalanauta_guia.png') !!}" alt="">
                            </div>

                        </div>

                        <div class="info">
                            <h2 class="primaryTitle">
                                ¡Ningún otro CRM te brinda un mejor servicio!<br class="DT_e">
                                <span>Nuestro equipo te guía a incorporar las herramientas<br class="DT_e">
                                 de Escala a tus operaciones</span>
                            </h2>
                            <p class="text">
                                Conoce la implementación autogestionada con <br class="DT_e">
                                acompañamiento personalizado
                            </p>

                        </div>

                    </div>

                </section>

            </div>

        </section>


        <section class="customSection sectionParent home_2023_7">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">
                        <h2 class="title">
                            ¿Qué incluye el servicio de acompañamiento <br class="DT_e">
                            personalizado de Escala?

                        </h2>
                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="row card-content">
                            <div class="col-md-12 col-lg-4 card1">

                                <div
                                    class="card">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/card_white_home_fondo.png') }}" alt="" class="backgroundCard D_e">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard MT_e">
                                    <div class="card-body">
                                        <div class="row">
                                            <div>
                                                <h5 class="card-title">
                                                    16 sesiones <br class="space">
                                                    privadas
                                                </h5>
                                                <p class="card-text">
                                                    con nuestro equipo los <br class="D_e">
                                                    primeros 3 meses para <br class="D_e">
                                                    guiarte a implementar<br class="D_e">
                                                    Escala exitosamente.
                                                </p>
                                            </div>
                                            <div>
                                                <div class="img-container img1">
                                                    <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/sesiones_privados_icon_home_2024.png') !!}"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 card2">
                                <div
                                    class="card">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/card_white_home_fondo.png') }}" alt="" class="backgroundCard D_e">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard MT_e">
                                    <div class="card-body">
                                        <div class="row">
                                            <div >
                                                <h5 class="card-title">
                                                    Capacitaciones<br class="space">
                                                    ilimitadas
                                                </h5>
                                                <p class="card-text">
                                                    en vivo o autoguiadas, <br class="D_e">
                                                    para aprender a usar<br class="D_e">
                                                    cada una de las<br class="D_e">
                                                    herramientas de Escala.
                                                </p>
                                            </div>
                                            <div >
                                                <div class="img-container img2">
                                                    <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/capacitaciones_icon_home_2024.png') !!}"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 card3">
                                <div
                                    class="card">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/card_white_home_fondo.png') }}" alt="" class="backgroundCard D_e">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard MT_e">
                                    <div class="card-body">
                                        <div class="row">
                                            <div>
                                                <h5 class="card-title">
                                                    Soporte vía <br class="space">
                                                    chat ilimitado
                                                </h5>
                                                <p class="card-text">
                                                    nuestro equipo atiende <br class="D_e">
                                                    a preguntas puntuales<br class="D_e">
                                                    por WhatsApp o <br class="D_e">
                                                    Plataforma en horario<br class="D_e">
                                                    laboral.
                                                </p>
                                            </div>
                                            <div>
                                                <div class="img-container img3">
                                                    <img class="img-card " src="{!! App::setFilePath('/assets/images/illustrations/others/soporte_icon_home_2024.png') !!}"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="btn-cta col-md-12 col-lg-12">
                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Conocer más
                            </a>
                        </div>
                    </div>
                </section>
            </div>

        </section>
        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_home_section_9_2024.svg') !!})"
            class="customSection sectionParent home_2023_7_0">

            <div class="section-row">
                <div class="col-md-8 column-1">
                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h3 class="sub-title">
                                Te invitamos a participar en una de nuestras
                            </h3>
                            <h2 class="title">
                                Masterclasses de marketing <br class="DT_e">
                                y ventas gratuita en vivo
                            </h2>
                            <p class="text">
                                Aprende nuestra metodología probada y cómo <br class="DT_e">
                                usar las herramientas para escalar ventas
                            </p>
                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Participar
                            </a>

                        </div>

                    </section>
                </div>
                <div class="col-md-4 column-2">
                    <section class="innerSectionElement sct2">

                        <div class="containElements">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/andrea_imagen_masterclas_home.png') !!}" loading="lazy">
                        </div>

                    </section>
                </div>

            </div>

        </section>
        <section class="component-info-multiple-cards-T2 customSection sectionParent home_2023_8">
            <div class="section-row" bis_skin_checked="1">
                <section class="innerSectionElement sct1">
                    <div class="containElements" bis_skin_checked="1">
                        <h2 class="primaryTitle blackColor">
                            ¿Qué dicen nuestros clientes?
                        </h2>
                    </div>
                </section>
                <section class=" innerSectionElement sct2">
                    <div class="groupElements" bis_skin_checked="1">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white.png') !!}" alt="" class="backOverlay">
                        <h3 class="secondaryTitle">
                            La experiencia con Escala
                        </h3>
                        <p class="text">
                            <span>
                                La experiencia con Escala durante 1
                                año y medio de servicio es excelente.
                                Nuestra empresa a aumentando las
                                ventas en un 200%, ESCALA es muy
                                versátil ya que tenemos conectado
                                a whatsaap Api y podemos gestionar
                                todos nuestros leads en un mismo
                                lugar y llevar nuestro proceso
                                de venta muy organizado en los
                                embudos de ventas.
                            </span>
                        </p>
                        <div>
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/miguel_urrego_.png') !!}" class="icon">
                            <div class="stars" bis_skin_checked="1">
                                <span class="name">
                                    Miguel Urrego Serna
                                </span>
                                <div class="containerImage" bis_skin_checked="1">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="groupElements" bis_skin_checked="1">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white.png') !!}" alt="" class="backOverlay">
                        <h3 class="secondaryTitle">
                            La herramienta correcta
                        </h3>
                        <p class="text">
                            <span>
                                Escala tiene los componentes que requiero
                                para automatizar mis procesos de venta,
                                marketing y servicio al cliente.
                                El soporte técnico es muy ágil y
                                asertivo en las soluciones.
                            </span>
                        </p>
                        <div>
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/edwin_hernandez.png') !!}" class="icon">
                            <div class="stars" bis_skin_checked="1">
                                <span class="name">
                                    Edwin Hernandez
                                </span>
                                <div class="containerImage" bis_skin_checked="1">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="groupElements" bis_skin_checked="1">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white.png') !!}" alt="" class="backOverlay">
                        <h3 class="secondaryTitle">
                            Excelente plataforma
                        </h3>
                        <p class="text">
                            <span>
                                Excelente plataforma, nos ha servido
                                para aumentar las ventas, mejorar los
                                tiempos de atención, organizar oportunidades
                                y automatizar procesos repetitivos,
                                las recomiendo mucho.
                            </span>
                        </p>
                        <div>
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/edison_sanchez.png') !!}" class="icon">
                            <div class="stars" bis_skin_checked="1">
                                <span class="name">
                                    Edison Sanchez
                                </span>
                                <div class="containerImage" bis_skin_checked="1">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>



        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_home_section_11_2024.svg') !!})"
            class="customSection sectionParent home_2023_10">

            <div class="section-row">
                <div class="col-md-8 column-1">
                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="title">
                                ¿Listo para subir a bordo? <br class="DT_e">
                                la satisfacción es 100% garantizada

                            </h2>
                            <p class="text">
                                Si en los primeros 20 días no estás satisfecho <br class="DT_e">
                                con el valor que recibes, te devolvemos el dinero.
                            </p>
                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Solicita un demo
                            </a>

                        </div>

                    </section>
                </div>
                <div class="col-md-4 column-2">
                    <section class="innerSectionElement sct2">

                        <div class="containElements">

                        </div>

                    </section>
                </div>

            </div>

        </section>

        @php
        $escalaUrl = 'https://escala.com';
        $items = [
        [
        'type' => 'master',
        'title' => '¿Qué es Escala?',
        'text' => 'Escala es la plataforma todo en uno de marketing digital y ventas que te ayudará a acelerar el éxito de tu negocio, con todas las <br class="D_e"> herramientas en un solo lugar para crecer de una manera constante. Conoce todos los beneficios de Escala:<br class="space"><br class="space">
        <ul style="list-style: disc; padding-left: 20px">
            <li>
                <p>Crea landing pages increíbles sin programar, para darte a conocer y capturar la información de tus visitantes.</p>
            </li>
            <li>
                <p>Crea, administra y publica anuncios digitales de Instagram y Facebook, sin salir de Escala, para generar tráfico a tus páginas.</p>
            </li>
            <li>
                <p>Gestiona tu base de datos y haz más productivo el trabajo de tu equipo de ventas con el CRM más fácil de usar.</p>
            </li>
            <li>
                <p>Mantén la comunicación constante con tus leads y clientes enviando emails masivos sin caer en la bandeja de spam.</p>
            </li>
            <li>
                <p>Automatiza tareas repetitivas: workflows y campañas de emails para hacer crecer tu negocio en piloto automático.</p>
            </li>
            <li>
                <p>Mide y optimiza tus campañas digitales con las analíticas en tiempo real.</p>
            </li>
        </ul>',
        ],
        [
        'type' => 'master',
        'title' => '¿Necesito habilidades para manejar la plataforma?',
        'text' => 'No. nuestra herramienta es muy intuitiva y fácil de usar. Para que estés más tranquilo, hemos preparado una serie de tutoriales muy <br class="D_e"> prácticos, que te ayudarán a despejar cualquier duda que tengas mientras vives la experiencia. También puedes contar con nuestro <br class="D_e"> acompañamiento, a través de asesorías, que te serán de gran ayuda en los primeros momentos de uso de la plataforma. <a class="hiperButtonGreenBlueT2" href="' . $escalaUrl . '/zoom-meeting">Atención al cliente.</a>',
        ],
        [
        'type' => 'master',
        'title' => '¿Qué incluye?',
        'text' => 'Cuando adquieres cualquiera de los planes de Escala cuentas con: Todas las funcionalidades de marketing digital y ventas, servicio <br class="D_e"> ilimitado y entrenamiento para usar la plataforma.',
        ],
        [
        'type' => 'master',
        'title' => 'Funcionalidades',
        'items' => [
        [
        'title' => '¿Los embudos de venta aplican para todos los negocios?',
        'text' => 'Así es. Todos los negocios tienen un embudo de ventas, conscientemente o no, dado que buscan atraer leads y convertirlos en <br class="D_e"> clientes. No olvides que un embudo de ventas es una metodología, paso a paso, que puede combinar marketing digital y offline. <br class="D_e"> En Escala tienes todas las funcionalidades para implementarlo de manera fácil, invirtiendo menos recursos, tiempo y dinero.',
        'type' => 'item',
        ],
        [
        'title' => '¿Qué ventajas tiene el CRM de Escala?',
        'text' => 'Esta pregunta es fundamental. Es importante que sepas que el CRM de Escala no solo cuenta con todas opciones para gestionar tus <br class="D_e"> contactos: información relacionada con el nombre, email y teléfono, y de gestión de tu equipo comercial como: actividades, tareas, <br class="D_e"> llamadas y recordatorios hasta cerrar la venta, sino que también es el CRM más fácil de usar de todos. Pruébalo y descúbrelo por ti <br class="D_e"> mismo. ',
        'type' => 'item',
        ],
        [
        'title' => 'El Page builder de Escala ¿cómo funciona?',
        'text' => 'El Page builder de Escala es el más fácil de usar del mercado. Práctico para realizar tus landing pages optimizadas. Tenemos cientos <br class="D_e"> de hermosas plantillas listas para que las personalices y en un clic las puedas publicar. Con formularios capaces de captar toda la <br class="D_e"> data y guardarla automáticamente en tu base de datos. <br class="space"><br class="space"> Fáciles de armar en minutos, 100% responsive y con un subdominio en caso que no tengas dominio propio. Además ya tienen <br class="D_e"> integrado el botón de WhatsApp para que tus visitantes conversen directamente con tu equipo de ventas.',
        'type' => 'item',
        ],
        [
        'title' => '¿En Escala se puede usar un dominio distinto para cada landing page?',
        'text' => 'Sí, en Escala puedes tener varios dominios para tus landing pages. Solo debes configurarlos y usarlos cuando lo necesites en cada <br class="D_e"> una de tus páginas.',
        'type' => 'item',
        ],
        [
        'title' => '¿Puedo agregar el botón de WhatsApp en las landing pages de Escala?',
        'text' => 'Las landing pages de Escala ya tienen disponible el botón de WhatsApp para que tu cliente pueda tener una conversación más fluida <br class="D_e"> con tu empresa. Se puede encontrar en la pestaña de “WhatsApp” en cada landing. Si la página ya está publicada, tendrás que re-<br class="D_e">publicarla después de activar el botón para que aparezca en tu página. <a class="hiperButtonGreenBlueT2" href="https://www.youtube.com/watch?v=5HOSPcDXdTQ&t=4s">Tutorial de Cómo activar botón de WhatsApp.</a> ',
        'type' => 'item',
        ],
        [
        'title' => '¿Puedo publicar campañas de anuncios digitales en Escala?',
        'text' => 'En Escala puedes crear, administrar y publicar anuncios digitales de Instagram y Facebook, sin tener que salir de nuestra plataforma. Elige a tu <br class="D_e"> audiencia, presupuesto determinado y genera tráfico a tus landing pages de la manera más fácil y práctica.',
        'type' => 'item',
        ],
        [
        'title' => '¿Qué tipo de campañas son las que se están creando desde Escala?',
        'text' => 'En Escala puedes crear campañas de anuncios digitales de Instagram y Facebook para lograr generar tráfico a tus landing pages. Su objetivo es <br class="D_e"> atraer posibles clientes (Captura de Leads) para que registren sus datos y con esta información puedas cerrar más ventas.',
        'type' => 'item',
        ],
        [
        'title' => 'En los anuncios digitales de Escala, ¿la propia plataforma maneja el píxel de Facebook o hay que integrarlo desde 0?',
        'text' => 'Para agregar el píxel de Facebook debes ir a "configuración" de Escala, entra a la sección de "píxeles y códigos de seguimiento" y <br class="D_e"> darle clic a "agregar cuenta". Así de fácil es agregar el píxel de Facebook.',
        'type' => 'item',
        ],
        [
        'title' => '¿Puedo hacer campañas de email marketing en Escala?',
        'text' => 'La respuesta es sí. Haz efectivas campañas de email marketing con sencillas plantillas de email. Realiza envíos masivos sin caer en la <br class="D_e"> bandeja de spam y ten las métricas en tiempo real para mejorar los resultados de tus campañas.',
        'type' => 'item',
        ],
        [
        'title' => '¿En qué parte de Escala puedo crear las plantillas de email marketing?',
        'text' => 'En la funcionalidad de plantillas, al darle la opción de “+Crear” arriba a la derecha, puedes elegir esta opción. Haz clic en opciones de <br class="D_e"> plantillas, allí se desplegará las alternativas de: "Plantilla de CRM" o "Plantilla de marketing". Elige “Plantilla de marketing” y <br class="D_e"> comienza a personalizarla. <a class="hiperButtonGreenBlueT2" href="https://www.youtube.com/watch?v=E_1VObta6Lk">Tutorial de cómo crear plantillas de Email Marketing.</a> ',
        'type' => 'item',
        ],
        [
        'title' => '¿ Cuáles son las funcionalidades de automatizaciones y analíticas?',
        'text' => 'En Escala te damos todas las métricas para optimizar tus resultados. Tanto en las funcionalidades de marketing como las de ventas <br class="D_e"> tienes dashboards amigables que te permiten ver en tiempo real las métricas que son importantes. <br class="space"><br class="space"> En Escala puedes automatizar flujos de tareas para tu fuerza de ventas, programar workflows de comunicación y de email marketing, <br class="D_e"> para que tu negocio crezca en piloto automático. ',
        'type' => 'item',
        ],
        ],
        ],
        [
        'type' => 'master',
        'title' => 'Sobre mi cuenta',
        'items' => [
        [
        'title' => '¿Cómo accedo a la plataforma?',
        'text' => 'Entra en <a class="hiperButtonGreenBlueT2" href="https://app.escala.com/">app.escala.com</a>. y haz clic en iniciar sesión desde cualquier dispositivo. ',
        'type' => 'item',
        ],
        [
        'title' => '¿Puedo usar mi propio dominio?',
        'text' => 'Sí, en Escala puedes utilizar tu dominio tal como se encuentra registrado en tu hosting, para conocer cómo conectarlo puedes <br class="D_e"> visualizar nuestro tutorial: <a class="hiperButtonGreenBlueT2" href="https://www.youtube.com/watch?v=vpdEwrcrZt0&t=44s">Cómo conectar dominio de página.</a> ',
        'type' => 'item',
        ],
        [
        'title' => '¿Cómo creo una cuenta?',
        'text' => 'Para crear una cuenta debes ingresar tus datos haciendo clic en en el botón “Recibe un demo” en <a class="hiperButtonGreenBlueT2" href="https://escala.com/">https://escala.com/</a> y te <br class="D_e"> contactará uno de nuestros asesores para comenzar tu free trial.',
        'type' => 'item',
        ],
        [
        'title' => '¿Cómo cancelo mi cuenta?',
        'text' => 'Puedes cancelarla cuando quieras a través de nuestros canales de servicio en la plataforma o WhatsApp.',
        'type' => 'item',
        ],
        [
        'title' => 'Si cierro mi cuenta, ¿perderé toda la data?',
        'text' => 'La respuesta es Sí. Pero, estamos seguros que una vez que pruebes Escala no querrás cerrar tu cuenta.',
        'type' => 'item',
        ],
        [
        'title' => '¿Cómo recupero mi contraseña?',
        'text' => 'Si no recuerdas tu contraseña, haz clic en el link de recuperar y te enviaremos un correo <br class="D_e"> para gestionarla de nuevo.',
        'type' => 'item',
        ],
        [
        'title' => '¿Se puede integrar con otras aplicaciones?',
        'text' => '¡Sí! Puedes integrar tu CRM de Escala con otras aplicaciones a través de Zapier. Un ejemplo de cómo hacerlo en este tutorial <a class="hiperButtonGreenBlueT2" href="https://www.youtube.com/watch?v=9tJl_akCRgI&list=PLchunKFsero1alROd4tbc9r5GxI7-9_ju&index=22">Ver tutorial</a>',
        'type' => 'item',
        ],
        ],
        ],
        [
        'type' => 'master',
        'title' => 'Precios y métodos de pago',
        'items' => [
        // [
        // 'title' => '¿Cuáles son los planes de precio de Escala?',
        // 'text' =>
        // 'En Escala tenemos planes a la medida de tus sueños y ganas de crecer. Solo pagas por lo que necesitas. Consulta nuestros precios: <a class="hiperButtonGreenBlueT2" href="' .
                    //         $escalaUrl .
                    //         '/pricing-page">Página de precios</a>',
        // 'type' => 'item'
        // ],
        [
        'title' => '¿Puedo cambiar o cancelar planes?',
        'text' => 'Sí en Escala puedes cancelar tus planes cuando desees, pero sabemos que será tan útil que querrás ir al siguiente nivel. Para cambiar <br class="D_e"> o cancelar tus planes debes contactarte con nuestro equipo, a través de WhatsApp o chat.',
        'type' => 'item',
        ],
        [
        'title' => '¿Debo pagar por las actualizaciones de la herramienta?',
        'text' => 'No, no debes pagar por las actualizaciones. Solo pagas por las funcionalidades que utilices y si incrementas tu plan será por tus <br class="D_e"> necesidades de contactos de marketing o ventas o porque tu negocio está creciendo y necesitas más usuarios.',
        'type' => 'item',
        ],
        ],
        ],
        [
        'type' => 'master',
        'title' => 'Seguridad',
        'items' => [
        [
        'title' => '¿Qué tan seguro es?',
        'text' => 'En Escala tu data está en buenas manos. Tu información no es vista por nadie, solo por personas de tu equipo y bajo los permisos <br class="D_e"> que hayas asignado. Para nosotros tu seguridad es primero.',
        'type' => 'item',
        ],
        [
        'title' => '¿Cómo exportar datos?',
        'text' => 'Podrás exportar la información de tus contactos y oportunidades de ventas desde cada listado en el CRM. Te enviaremos <br class="D_e"> un documento a tu correo con los datos que hayas elegido exportar.',
        'type' => 'item',
        ],
        [
        'title' => '¿Cómo importar datos?',
        'text' => 'Puedes importar tus bases de datos al CRM de Escala, solo necesitas guardar la información en un archivo .csv o .txt e iniciar el <br class="D_e"> proceso desde el listado de contactos. Chequea nuestro tutorial: <a class="hiperButtonGreenBlueT2" href="https://www.youtube.com/watch?v=2bJFjHWbI1E">Ver tutorial</a>',
        'type' => 'item',
        ],
        [
        'title' => '¿Cómo conceder accesos e invitar a terceros?',
        'text' => 'Puedes agregar a terceros y a todos los miembros de tu equipo de trabajo para hacer más eficiente tu gestión. Es muy fácil te <br class="D_e"> invitamos a ver todo el detalle en este práctico tutorial. <a class="hiperButtonGreenBlueT2" href="https://www.youtube.com/watch?v=dCrD2cD_Xpw">Ver tutorial</a>',
        'type' => 'item',
        ],
        ],
        ],
        [
        'type' => 'master',
        'title' => 'Asesoría',
        'items' => [
        [
        'title' => '¿Cómo conectar con un experto?',
        'text' => 'En Escala tu crecimiento de negocio es vital para nosotros por eso, siempre tendrás la asesoría de un experto en marketing digital y <br class="D_e"> ventas acompañándote en todo el camino. <a class="hiperButtonGreenBlueT2" href="' . $escalaUrl . '/zoom-meeting">Link con asesor</a>',
        'type' => 'item',
        ],
        [
        'title' => '¿Con quién puedo conectar para recibir asistencia?',
        'text' => '<span style="color:#34768a">Si tienes dudas sobre cualquier cosa puedes:</span> <br class="D_e">
        <ul style="color:#34768a" class="accordionSpecial">
            <li>1. Ver nuestros tutoriales de uso en nuestro canal de youtube. <a class="hiperButtonGreenBlueT2" href="https://www.youtube.com/channel/UCiDlXaq67qVf8lSTurRS8lQ">Escala en Youtube</a></li>
            <li>2. Hablar con un asesor. <a class="hiperButtonGreenBlueT2" href="' . $escalaUrl . '/zoom-meeting">Link con asesor</a></li>
            <li>3. Conversar por chat. <a class="hiperButtonGreenBlueT2" href="https://api.WhatsApp.com/send?phone=17863042407">Chat de WhatsApp</a></li>
            <li>4. Hablar con el Especialista en customer success asignado a tu cuenta (Plan Pro y Enterprise).</li>
        </ul>',
        'type' => 'item',
        ],
        ],
        ],
        [
        'type' => 'master',
        'title' => 'Entrenamiento',
        'items' => [
        [
        'title' => '¿Hay formas de aprender marketing y ventas para mejorar mi negocio?',
        'text' => 'Escala Academy es el programa de formación constante, mediante el cual te daremos todo el conocimiento de marketing digital y <br class="D_e"> ventas para hacerte un experto. <br class="space"><br class="space"> Escala Academy: <br class="D_e">
        <ul style="color:#34768a" class="accordionSpecial">
            <li>Tutoriales funcionalidades.</li>
            <li>Blog Escala.</li>
            <li>Workshops para tu empresa.</li>
            <li>Webinars especializados en temas (Escalatones).</li>
            <li>Programas de Éxito.</li>
        </ul>',
        'type' => 'item',
        ],
        [
        'title' => '¿Necesito pagar para tener toda la información?',
        'text' => 'Todo nuestro material de apoyo y conocimiento es totalmente gratis. Para nosotros mantenerte bien informado y en constante <br class="D_e"> formación es una inversión para ayudarte a hacer crecer tu negocio.',
        'type' => 'item',
        ],
        ],
        ],
        ];

        $parameters = [
        'classSection' => 'home_2023_11',
        'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
        'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
        'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
        'items' => $items,
        'title' => '
        Preguntas <span>frecuentes</span>
        ',
        ];
        @endphp
        @contain_FAQ_T1($parameters)
        @endcontain_FAQ_T1



    </div>

</div>


@endsection
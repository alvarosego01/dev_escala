{{--
  Template Name: [B] Home new landing - 2025
--}}

@extends('layouts.app')
@section('content')



<div id="new-home-2025">
    <div class="sections">
        <!-- Home new landing 2025 By Escala -->
        <section id="lead-form"
            class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol new-home-2025-0 ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_new_home_2025_landing_page_escala.svg') }}')"
                class="backgroundFull">
                <div class="section-row">

                    <section class="innerSectionElement sct1">
                        <div class="containElements">
                            <h1 class="principalBigTitle">
                                Escala las ventas de tu empresa con<br class="DT_e">
                                un <span> CRM todo-en-uno inteligente</span>
                            </h1>
                        </div>
                    </section>


                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="info col-md-12 col-lg-8 ">
                                <div class="video-player">
                                    <!-- Contenedor del video (oculto inicialmente) -->
                                    <div class="video-iframe-container">
                                        {!! '<iframe src="https://player.vimeo.com/video/1083588922?h=hash_value" width="866" height="477" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>' !!}
                                    </div>

                                    <!-- Portada clickeable -->
                                    <div class="video-cover">
                                        <img class="cover-image" alt="Ilustración Andrés Moreno"
                                            src="{{ App::setFilePath('/assets/images/illustrations/others/img_am_home_crm_inteligente_escala_2025.png') }}"
                                            loading="lazy">

                                        <div class="play-button">
                                            <img class="play-icon" alt="Icon play"
                                                src="{{ App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') }}"
                                                loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const videoPlayers = document.querySelectorAll('.video-player');

                                        videoPlayers.forEach(player => {
                                            // Elementos del reproductor
                                            const cover = player.querySelector('.video-cover');
                                            const iframeContainer = player.querySelector('.video-iframe-container');
                                            const iframe = iframeContainer.querySelector('iframe');

                                            // Función para iniciar el video
                                            function playVideo() {
                                                // 1. Agregar clase activa
                                                player.classList.add('video-active');

                                                // 2. Obtener src original (sin autoplay)
                                                const src = iframe.src;

                                                // 3. Cambiar src para forzar autoplay
                                                if (!src.includes('autoplay=1')) {
                                                    iframe.src = src.includes('?') ?
                                                        `${src}&autoplay=1` :
                                                        `${src}?autoplay=1`;
                                                }
                                            }

                                            // Evento click en toda el área
                                            player.addEventListener('click', playVideo);

                                            // Opcional: tecla Enter para accesibilidad
                                            player.addEventListener('keydown', (e) => {
                                                if (e.key === 'Enter') {
                                                    playVideo();
                                                }
                                            });
                                        });
                                    });
                                </script>

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

                            <div class="form7 col-md-12 col-lg-4 ">

                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">


                                        <h5 class="titleFormat"> Recibe un <br class="space"> demo personalizado</h5>


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

                                        <script>
                                            jQuery('.formatForm .wpcf7 input.wpcf7-form-control.wpcf7-submit').val(
                                                'Recibir el Demo →')
                                        </script>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>

                </div>

            </div>

        </section>

        <section class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol new-home-2025-0-1 ">
            <div>
                <div class="section-row">
                    <section class="innerSectionElement sct2">
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
                                            <div class="iconApp">
                                                <a target="_blank"
                                                    href="https://www.nvidia.com/en-us/startups/">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/nvidia-inception-program-badge-rgb-for-screen.svg') !!}"
                                                        loading="lazy">
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>

        </section>
        <section class="customSection sectionParent new-home-2025-1">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <span class="subTitle">
                            Destacados en:
                        </span>
                    </div>
                    <div class="logos_empresas">
                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/nvidia-inception-program-badge-rgb-for-screen.svg') }}"
                            loading="lazy" alt="Logo empresa nividia">
                        <img alt="Logos empresa"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_forbes.png') }}"
                            loading="lazy">
                        <img alt="Logos empresa"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_yahoo_finance.png') }}"
                            loading="lazy">
                        <img alt="Logos empresa"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_latam_list.png') }}"
                            loading="lazy">
                        <img alt="Logos empresa"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_refresh_miami.png') }}"
                            loading="lazy">
                        <img alt="Logos empresa"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_valora.png') }}"
                            loading="lazy">
                    </div>
                    <div class="logos_empresas mb_logos">
                        <img alt="Logos empresa"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_forbes.png') }}"
                            loading="lazy">
                        <img alt="Logos empresa"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_valora.png') }}"
                            loading="lazy">
                        <img alt="Logos empresa"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_refresh_miami.png') }}"
                            loading="lazy">
                        <img alt="Logos empresa"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_yahoo_finance.png') }}"
                            loading="lazy">
                        <img alt="Logos empresa"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_latam_list.png') }}"
                            loading="lazy">


                    </div>
                </section>

            </div>

        </section>

        <section class="customSection sectionParent new-home-2025-2">

            <div class="section-row ">
                <div class="row sct1">
                    <div class="text-center col-12">
                        <h2 class="title">
                            El CRM de Escala centraliza y simplifica <br class="DT_e">
                            tu proceso comercial con IA
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

                <div class="imageMobileCenter">
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Empieza ahora →
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <section class="customSection sectionParent new-home-2025-3">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="columns">

                        <div class="column">
                            <h3>Vender era
                                complicado</h3>
                            <span>
                                Trabajar manualmente
                                con múltiples herramientas
                                trunca tu productividad
                            </span>
                            <div class="containImages">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/vender_era_complicado_img_section_home_escala.png') }}"
                                    loading="lazy">
                            </div>
                        </div>

                        <div class="column">
                            <h3>La solución</h3>
                            <span>Ten todas las herramientas y
                                la información que necesitas
                                en un solo lugar</span>
                            <div class="containImages imgEspecial">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/escala_img_crm_todo_en_uno.png') }}"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>

                </section>

                <div class="btnCenter">
                    <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                        Empieza ahora →
                    </a>
                </div>
            </div>

        </section>





        <section class="customSection sectionParent new-home-2025-4">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="info">

                        <h2 class="title">
                            Así es como Escala puede ayudarte:
                        </h2>
                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="cards-container">
                        <a href="https://escala.com/crm-escala/">
                            <div class="cardLeft" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_card_vertical_blue.svg') }}')">
                                <div>
                                    <h3>Gestiona contactos y oportunidades de venta... ¡donde quiera que vayas!</h3>

                                    <div class="tag">EL CRM</div>
                                </div>

                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/img_chica_feliz_estadisticas_ventas_inteligente_6_0.png') }}" loading="lazy">
                            </div>
                        </a>
                        <div class="cardRight">
                            <a href="https://escala.com/whatsapp/">
                                <div class="card" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_card_horizontal_blue.svg') }}')">
                                    <div class="info">
                                        <h3>Centraliza tus conversaciones de WhatsApp, Instagram y Facebook</h3>
                                        <div class="tag">INBOX</div>
                                    </div>

                                    <div>
                                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/andres_moreno_feliz_centralizando_conversasiones_crm_escala_2.png') }}"
                                            loading="lazy">
                                    </div>
                                </div>
                            </a>
                            <a href="https://escala.com/automatizacion/">
                                <div class="card" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_card_horizontal_blue.svg') }}')">
                                    <div class="info">
                                        <h3>Automatiza tareas y comunicaciones</h3>
                                        <div class="tag">FLUJOS</div>
                                    </div>

                                    <div>
                                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/andrea_molle_automatizaciones_comunicaciones_tareas.png') }}"
                                            loading="lazy">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

                <section class="innerSectionElement sct3">
                    <div class="cards-container">

                        <a href="https://escala.com/landing-pages/">
                            <div class="cardLeft " id="img1">
                                <span>
                                    Promueve tu oferta y <br class="DT_e">
                                    captura información de <br class="DT_e">
                                    clientes potenciales
                                </span>
                            </div>
                        </a>
                        <div class="cardRight">
                            <a href="https://escala.com/email/">
                                <div class="card" id="img2">
                                    <span>
                                        Envía Emails y <br class="DT_e">
                                        WhatsApps <br class="DT_e">
                                        masivos
                                    </span>
                                </div>
                            </a>
                            <a href="https://escala.com/reportes/">
                                <div class="card" id="img3">
                                    <span>
                                        Analiza resultados <br class="DT_e">
                                        en tiempo real
                                    </span>
                                </div>
                            </a>
                        </div>

                    </div>
                </section>

                <div class="imageMobileCenter">
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                            Empieza ahora →
                        </a>
                    </div>

                </div>
            </div>

        </section>



        <section class="customSection sectionParent new-home-2025-5">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <h2 class="title">
                            Potenciado por <br class="DT_e">
                            <span> Inteligencia Artificial </span>
                        </h2>

                        <div class="containerImg">
                            <img class="ottoPcGif" id="firstGif" alt="Imagen equipo escala aprender a usar tu crm"
                                src="{{ App::setFilePath('/assets/images/gifs/2-2x-logo-otto-inicio.gif') }}"
                                loading="lazy">
                            <img class="ottoPcGif" id="finalGif" alt="Imagen equipo escala aprender a usar tu crm"
                                src="{{ App::setFilePath('/assets/images/gifs/2-2x-logo-otto-final.gif') }}"
                                loading="lazy">

                            <img class="ottoPc img1" alt="Imagen equipo escala aprender a usar tu crm"
                                src="{{ App::setFilePath('/assets/images/illustrations/others/escala-chat-otto-img-1.webp') }}"
                                loading="lazy">
                            <img class="ottoPc img2" alt="Imagen equipo escala aprender a usar tu crm"
                                src="{{ App::setFilePath('/assets/images/illustrations/others/escala-chat-otto-img-2.webp') }}"
                                loading="lazy">
                            <img class="ottoChat" alt="Imagen equipo escala aprender a usar tu crm"
                                src="{{ App::setFilePath('/assets/images/illustrations/others/escala-chat-otto-img-3.webp') }}"
                                loading="lazy">


                            <img class="ottoMb mb1" alt="Imagen equipo escala aprender a usar tu crm"
                                src="{{ App::setFilePath('/assets/images/illustrations/others/escala-chat-otto-img-1-mb.webp') }}"
                                loading="lazy">
                            <img class="ottoMb mb2" alt="Imagen equipo escala aprender a usar tu crm"
                                src="{{ App::setFilePath('/assets/images/illustrations/others/escala-chat-otto-img-2-mb.webp') }}"
                                loading="lazy">
                            <img class="ottoMbChat" alt="Imagen equipo escala aprender a usar tu crm"
                                src="{{ App::setFilePath('/assets/images/illustrations/others/escala-chat-otto-img-3-mb.webp') }}"
                                loading="lazy">
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const container = document.querySelector('.containerImg');
                            const firstGif = document.getElementById('firstGif');
                            const finalGif = document.getElementById('finalGif');

                            // Configuración inicial
                            finalGif.style.opacity = '0';
                            finalGif.style.position = 'absolute';
                            finalGif.style.top = '0';
                            finalGif.style.left = '0';

                            // Configuramos el Intersection Observer
                            const observer = new IntersectionObserver((entries) => {
                                entries.forEach(entry => {
                                    if (entry.isIntersecting) {

                                        // Iniciamos el contador de 4 segundos
                                        setTimeout(() => {
                                            // Transición suave entre GIFs
                                            firstGif.style.opacity = '0';

                                            setTimeout(() => {
                                                firstGif.style.display = 'none';
                                                finalGif.style.opacity = '1';
                                                finalGif.style.position = 'relative';
                                            });

                                        }, 3000);


                                    } else {

                                    }
                                });
                            }, {
                                threshold: 0.5,
                                rootMargin: '0px 0px -100px 0px' // Se dispara cuando el 50% del elemento está 100px dentro del viewport
                            });

                            // Empezamos a observar el contenedor
                            if (container) {
                                observer.observe(container);
                            }
                        });
                    </script>

                </section>
                <div class="btnCenter">
                    <a class="primaryButton  hoverInEffect openPopUpButton popup-general-demo-2022">
                        Empieza ahora →
                    </a>
                </div>
            </div>

        </section>


        <section class="customSection sectionParent new-home-2025-6">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="info">
                            <h2 class="title">
                                Implementamos el CRM por ti
                            </h2>

                            <span class="text">
                                En Escala no estás solo. ¿Tienes poco tiempo o recursos <br class="DT_e">
                                para adaptar el CRM a tu empresa? <br class="DT_e">
                                ¡Tranquilo! Nuestros especialistas se encargan.
                            </span>
                        </div>

                        <div class="image">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/equipo_escala_plataforma_crm_configuracion_por_ti.png') }}"
                                loading="lazy">
                        </div>
                    </div>
                </section>
                <div class="btnCenter">
                    <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        Aprender más →
                    </a>
                </div>
            </div>

        </section>

        <section class="customSection sectionParent new-home-2025-7">

            <div class="section-row ">
                <div class="row sct1">
                    <div class="text-center col-12">
                        <h2 class="title">
                            Algunos de nuestros clientes <br class="DT_e">
                            han logrado:
                        </h2>
                    </div>
                </div>

                <div class="containerElement sct2">
                    <a href="https://escala.com/casos-de-exito-poctlab/" class="image-container">
                        <img alt="" class="img-2"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/card_white_img_poctlab.png') }}"
                            loading="lazy">

                        <img alt="" class="img-1"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/cliente_poctlab_card_blue.png') }}"
                            loading="lazy">
                    </a>

                    <a href="https://escala.com/casos-de-exito-taller-5/" class="image-container">
                        <img alt="" class="img-2"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/cliente_taller_5_card.png') }}"
                            loading="lazy">

                        <img alt="" class="img-1"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/cliente_taller_5_card_blue.png') }}"
                            loading="lazy">
                    </a>

                    <a href="https://escala.com/casos-de-exito-real-de-los-cues/" class="image-container">
                        <img alt="" class="img-2"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/cliente_cues_real_card.png') }}"
                            loading="lazy">

                        <img alt="" class="img-1"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/cliente_cues_real_card_blue.png') }}"
                            loading="lazy">
                    </a>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent new-home-2025-8">

            <div class="section-row ">
                <div class="containElements" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_8_home_new_escala_left.svg') }}')">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <h2 class="title">
                                Vende inteligentemente <br class="DT_e">
                                con Escala
                            </h2>
                            <div class="btnSection">
                                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    Empieza ahora →</a>
                                <a class="text-white openPopUpButton popup-general-demo-2022">
                                    Hablar con asesor</a>

                            </div>
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/ceo_escala_2025.png') }}"
                                loading="lazy">
                        </div>
                    </section>

                </div>
            </div>
        </section>
    </div>

</div>


@endsection
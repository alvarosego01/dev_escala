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
                                <div class="containerImage">
                                    <img alt="Ilustración Andrés Moreno, CEO de Escala con CRM inteligente"
                                        src="{{ App::setFilePath('/assets/images/illustrations/others/img_am_home_crm_inteligente_escala.png') }}"
                                        loading="lazy">
                                </div>

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
                        <a class="primaryButton  openPopUpButton popup-general-demo-2022">
                            Empieza ahora →
                        </a>
                    </div>
                    <div class="containerImage">
                        <img alt="Ilustración Andrés Moreno, CEO de Escala con CRM inteligente"
                            src="{{ App::setFilePath('/assets/images/illustrations/others/img_am_home_crm_inteligente_escala.png') }}"
                            loading="lazy">
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
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/solucion_crm_img_section_home_escala_gris.png') }}"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>

                </section>

                <div class="btnCenter">
                    <a class="primaryButton  openPopUpButton popup-general-demo-2022">
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
                        <div class="cardLeft" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_card_vertical_blue.svg') }}')">
                            <div>
                                <h3>Gestiona contactos y oportunidades de venta... ¡donde quiera que vayas!</h3>

                                <div class="tag">EL CRM</div>
                            </div>

                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img_chica_feliz_estadisticas_ventas_inteligente_6_0.png') }}" loading="lazy">

                        </div>
                        <div class="cardRight">
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
                        </div>
                    </div>
                </section>

                <section class="innerSectionElement sct3">
                    <div class="cards-container">
                        <div class="cardLeft">
                            <span>
                                Promuévete y captura <br class="DT_e">
                                información de <br class="DT_e">
                                clientes potenciales
                            </span>
                        </div>

                        <div class="cardRight">
                            <div class="card">
                                <span>
                                    Envía Emails y <br class="DT_e">
                                    WhatsApps <br class="DT_e">
                                    masivos
                                </span>

                            </div>
                            <div class="card">
                                <span>
                                    Mide y optimiza <br class="DT_e">
                                    tus resultados en <br class="DT_e">
                                    tiempo real
                                </span>

                            </div>
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
                        <span class="text">
                            Interactúa con
                        </span>
                        <div class="containerImg">
                            <img class="ottoPc" alt="Imagen equipo escala aprender a usar tu crm"
                                src="{{ App::setFilePath('/assets/images/illustrations/others/img_preview_chat_otto.png') }}"
                                loading="lazy">

                            <img class="ottoMb" alt="Imagen equipo escala aprender a usar tu crm"
                                src="{{ App::setFilePath('/assets/images/illustrations/others/img_preview_chat_otto_mb.png') }}"
                                loading="lazy">
                        </div>
                    </div>

                </section>
                <div class="btnCenter">
                    <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
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
                                ¡En Escala no estás solo! ¿No tienes tiempo para implementar? <br class="DT_e">
                                No hay problema. Nuestros especialistas personalizan el CRM a <br class="DT_e">
                                las necesidades de tu empresa
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
                            La plataforma centraliza y simplifica <br class="DT_e">
                            tu proceso comercial con IA
                        </h2>
                    </div>
                </div>

                <div class=" row sct2">

                    <img alt=""
                        src="{{ App::setFilePath('/assets/images/illustrations/others/card_preview_clientes.png') }}"
                        loading="lazy">

                    <img alt=""
                        src="{{ App::setFilePath('/assets/images/illustrations/others/card_preview_clientes_2.png') }}"
                        loading="lazy">

                    <img alt=""
                        src="{{ App::setFilePath('/assets/images/illustrations/others/card_preview_clientes_3.png') }}"
                        loading="lazy">

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
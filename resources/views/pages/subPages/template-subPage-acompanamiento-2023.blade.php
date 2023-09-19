{{-- Template Name: [B] Sub pagina - Acompanamiento 2023 --}}

@extends('layouts.app')
@section('content')
    <div id="acompanamiento-2023">
        <div class="sections">

            <section id="lead-form"
                class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol acompanamiento-2023-0 ">

                <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_acompanamiento_mobile_2023.svg') }}')"
                    class="backgroundFull mobileElement">

                    <div class="section-row">

                        <section class="innerSectionElement sct1">

                            <div class="groupElements row">


                                <div class="info col-md-12 col-lg-8 ">


                                    <div class="containElements row threeCol">

                                        <div class=" infoTitle">

                                            <h1 class="principalTitle">
                                                Te guiamos a vender <br class="space">
                                                más y mejor <span> con Escala <br class="space">
                                                ¡todo el año!</span>
                                            </h1>

                                            <ul>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Gerente de Éxito asignado</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Sesiones de training privado</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Chat soporte técnico en vivo</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="containerImage mobileElement">
                                            <img src="{{ App::setFilePath('/assets/images/person/am/acompanamiento_am.png') }}"
                                                alt="">
                                        </div>

                                    </div>


                                </div>

                                <div class="form7 col-md-12 col-lg-4 ">

                                    <div class="containElements">

                                        <div class="formatForm redirectWeb" redirectWeb="true">

                                            <h5 class="titleFormat blackcolor">
                                                Recibe un tour guiado <br class="space">
                                                de Escala
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
                                                    $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                                }
                                            @endphp
                                            {!! do_shortcode($_formShortcode) !!}


                                        </div>

                                    </div>
                                </div>

                            </div>

                        </section>

                        <section class="innerSectionElement sct2">

                            <div class="containElements">

                                @php
                                    $elementsReviews = [
                                        [
                                            'logo' => App::setFilePath('/assets/images/illustrations/others/trust_tag.png'),
                                            'text' => 'Escala / plataforma CRM',
                                            'points' => '4.8 / 5',
                                        ],
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
                                    ];
                                @endphp

                                <div class="elements">
                                    {{-- <img src="{!! App::setFilePath('/assets/images/illustrations/others/08-implementacion-2023.png') !!}" loading="lazy"> --}}

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
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </section>

                    </div>

                </div>

                <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_acompanamiento_desktop_2023.svg') }}')"
                    class="backgroundFull desktopElement">

                    <div class="section-row">

                        <section class="innerSectionElement sct1">

                            <div class="groupElements row">


                                <div class="info col-md-12 col-lg-8 ">


                                    <div class="containElements row threeCol">

                                        <div class=" infoTitle">

                                            <h1 class="principalTitle">
                                                Te guiamos a vender <br class="space">
                                                más y mejor <span> con Escala <br class="space">
                                                ¡todo el año!</span>
                                            </h1>

                                            <ul>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Gerente de Éxito asignado</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Sesiones de training privado</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Chat soporte técnico en vivo</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>


                                </div>

                                <div class="form7 col-md-12 col-lg-4 ">

                                    <div class="containElements">

                                        <div class="formatForm redirectWeb" redirectWeb="true">

                                            <h5 class="titleFormat blackcolor">
                                                Recibe un tour guiado <br class="space">
                                                de Escala
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
                                                    $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                                }
                                            @endphp
                                            {!! do_shortcode($_formShortcode) !!}


                                        </div>

                                    </div>
                                </div>

                            </div>

                        </section>

                        <section class="row innerSectionElement sct2">

                            <div class="containElements col-md-12 col-lg.8">

                                @php
                                    $elementsReviews = [
                                        [
                                            'logo' => App::setFilePath('/assets/images/illustrations/others/trust_tag.png'),
                                            'text' => 'Escala / plataforma CRM',
                                            'points' => '4.8 / 5',
                                        ],
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
                                    ];
                                @endphp

                                <div class="elements">
                                    {{-- <img src="{!! App::setFilePath('/assets/images/illustrations/others/08-implementacion-2023.png') !!}" loading="lazy"> --}}

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
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </section>

                    </div>

                </div>

            </section>

            <section class="customSection sectionParent acompanamiento-2023-1">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">
                            <h2 class="title">
                                En Escala, el Servicio hace la diferencia.<br class="space">
                                <span>Recibe acompañamiento personalizado</span>
                            </h2>
                        </div>

                    </section>
                    <section class="innerSectionElement sct2">

                        <div class="containElements">

                            <div class="row">
                                <div class="col-md-12 col-lg-4 cardParent column-1">



                                    <div
                                    style="background-image: url('{!! App::setFilePath('/assets/images/illustrations/others/background_imp_section.png') !!}')"
                                     class="card">
                                        <div class="card-body">
                                            <h5 class="card-number">1</h5>
                                            <h5 class="card-title">
                                                Gerente de Éxito
                                            </h5>
                                            <p class="card-primaryText">
                                                Te apoya a planificar y <br class="desktopTabletElement">
                                                aprovechar al máximo <br class="desktopTabletElement">
                                                las soluciones de Escala
                                                <br class="space">
                                                <br class="space">
                                            </p>
                                            <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/01-acompanamiento-2023.png') !!}" loading="lazy">
                                            <div class="text-bottom">
                                                <div class="block-text">
                                                    <h5 class="card-subTitle">
                                                        Primer año
                                                    </h5>
                                                    <p class="card-secondaryText">
                                                        Recibe 8 horas <br class="desktopTabletElement">
                                                        en sesiones privadas
                                                    </p>
                                                </div>
                                                <div class="block-text">
                                                    <h5 class="card-subTitle">
                                                        Luego
                                                    </h5>
                                                    <p class="card-secondaryText">
                                                        4 horas / año
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4 cardParent column-2">
                                    <div
                                       style="background-image: url('{!! App::setFilePath('/assets/images/illustrations/others/background_imp_section.png') !!}')"
                                     class="card">
                                        <div class="card-body">
                                            <h5 class="card-number">2</h5>
                                            <h5 class="card-title">
                                                Trainer privado
                                            </h5>
                                            <p class="card-primaryText">
                                                Revisa el uso de las <br class="desktopTabletElement">
                                                herramientas y se <br class="desktopTabletElement">
                                                asegura que las usen <br class="desktopTabletElement">
                                                efectivamente
                                            </p>
                                            <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/02-acompanamiento-2023.png') !!}" loading="lazy">
                                            <div class="text-bottom">
                                                <div class="block-text">
                                                    <h5 class="card-subTitle">
                                                        Primer año
                                                    </h5>
                                                    <p class="card-secondaryText">
                                                        Recibe 4 horas de <br class="desktopTabletElement">
                                                        entrenamiento privado
                                                    </p>
                                                </div>
                                                <div class="block-text">
                                                    <h5 class="card-subTitle">
                                                        Luego
                                                    </h5>
                                                    <p class="card-secondaryText">
                                                        2 horas / año
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4 cardParent column-3">
                                    <div
                                       style="background-image: url('{!! App::setFilePath('/assets/images/illustrations/others/background_imp_section.png') !!}')"
                                    class="card">
                                        <div class="card-body">
                                            <h5 class="card-number">3</h5>
                                            <h5 class="card-title">
                                                ChatSoporte
                                            </h5>
                                            <p class="card-primaryText">
                                                Atendemos preguntas <br class="desktopTabletElement">
                                                y necesidades técnicas <br class="desktopTabletElement">
                                                en vivo por <span class="greenText">WhatsApp</span> <br class="desktopTabletElement">
                                                y <span class="blueText">Chat de plataforma</span>
                                            </p>
                                            <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/03-acompanamiento-2023.png') !!}" loading="lazy">
                                            <div class="text-bottom">
                                                <div class="block-text">
                                                    <h5 class="card-subTitle">
                                                        Sin límites
                                                    </h5>
                                                    <p class="card-secondaryText">
                                                        Recibe 8 horas <br class="desktopTabletElement">
                                                        en sesiones privadas
                                                    </p>
                                                </div>
                                                <div class="block-text">
                                                    <h5 class="card-subTitle">
                                                        Luego
                                                    </h5>
                                                    <p class="card-secondaryText">
                                                        4 horas / año
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </section>

            <section class="customSection sectionParent acompanamiento-2023-2">

                <div class="section-row">

                    <section class="innerSectionElement sct0">

                        <div class="containElements">
                            <div class="container ">
                                <div class="row">
                                    <div class="text-center col-md-12 col-lg-12">
                                        <div class="ele video col-md-12">

                                            @php
                                                $videoEmbed = App::setFilePath('/assets/videos/Comercial_escala_registro_lead_1.mp4');
                                                $videoCover = App::setFilePath('/assets/images/illustrations/others/07-implementacion-2023.png');
                                            @endphp

                                            @if (isset($videoEmbed) && $videoEmbed != null)
                                                <div class="youtubeImageContainer ">

                                                    <img src="{!! App::setFilePath('/assets/images/overlays/video_box_left.svg') !!}" alt=""
                                                        class="overlayLeft">

                                                    <video class="video-js" controls preload="none"
                                                        poster="{{ $videoCover }}" {{-- poster="MY_VIDEO_POSTER.jpg" --}}
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
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>

            </section>

            @php
                $desk_reviews = [
                    [
                        'area' => 'Finanzas',
                        'text' => '
                        <strong>“Gracias a Escala ahorramos 70% del tiempo invertido</strong> por el equipo comercial en tareas operativas y aumentamos 20% la cantidad de clientes.”
                        ',
                        'logo' => App::setFilePath('/assets/images/logos/logo_saeta.png'),
                        'name' => 'Claudio Radovich, Fundador',
                    ],
                    [
                        'area' => 'Consultoría',
                        'text' => '
                        <strong>“Logramos 2X nuestra facturación</strong> en menos de 6 meses y multiplicar 4X los nuevos leads gracias a Escala.”
                        ',
                        'logo' => App::setFilePath('/assets/images/illustrations/others/icon_mark_testimonial.png'),
                        'name' => 'William Ávila, CEO',
                    ],
                    [
                        'area' => 'Salud y bienestar',
                        'text' => '<strong>“Aumentamos 5X la tasa de recuperación</strong> de carrito de compra abandonado y 41% la tasa de apertura promedio en campañas de Email Marketing.”',
                        'logo' => App::setFilePath('/assets/images/logos/logo_rgg.png'),
                        'name' => 'Biaggio Correale, Director <br class="space"> de Operaciones',
                    ],
                ];

            @endphp

            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/02-bg-acompanamiento-2023.png') !!})" class="customSection sectionParent acompanamiento-2023-3">

                            <div class="section-row">
                                <div class="col-md-12 col-lg-8 column-1">
                                    <section class="innerSectionElement sct1">

                                        <div class="containElements">

                                            <h2 class="title">
                                                Tu Gerente de Éxito asignado <br class="space">
                                                <span>guía tu progreso</span>
                                            </h2>
                                            <p class="text">
                                                La primera semana con Escala, agendas una sesión en vivo <br class="desktopTabletElement">
                                                por Zoom con tu Gerente de Éxito para que conozca a mayor <br class="desktopTabletElement">
                                                profundidad tu negocio y definan juntos un plan de acción <br class="desktopTabletElement">
                                                paso a paso con Escala.
                                            </p>

                                        </div>

                                    </section>
                                </div>
                                <div class="col-md-12 col-lg-4 column-2">
                                    <section class="innerSectionElement sct2">

                                        <div class="containElements">

                                        </div>

                                    </section>
                                </div>

                            </div>

            </section>

            <section class="customSection sectionParent acompanamiento-2023-4">

                <div class="section-row">
                    <section class="innerSectionElement sct0">
                        <div class="row groupElements">
                            <div class="col-md-12 col-lg-12">
                                <h2 class="primaryTitle">
                                    A medida que tú y tu equipo avanzan <br class="desktopTabletElement">
                                    <span>los apoyamos a optimizar resultados</span>
                                </h2>
                                <p class="primaryText">
                                    Cada cierto tiempo, nos reunimos para:
                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="innerSectionElement sct1">

                        <div class="row groupElements">

                            <div class="info col-md-12 col-lg-7">

                                @php

                                    $elements = [
                                        [
                                            'title' => 'Identificar fortalezas y oportunidades de mejora',
                                        ],
                                        [
                                            'title' => 'Mostrar nuevas herramientas desplegadas',
                                        ],
                                        [
                                            'title' => 'Definir nuevo plan de crecimiento',
                                        ],
                                    ];

                                @endphp

                                <div class="containElements">

                                    <ul class="elements">
                                        @foreach ($elements as $item)
                                            <li class="item">
                                                <div class="containerImage">
                                                    <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}"
                                                        alt="" loading="lazy">
                                                </div>
                                                <div class="text">
                                                    <h3>
                                                        {!! $item['title'] !!}
                                                    </h3>
                                                    <p class="text">
                                                        {!! $item['text'] !!}
                                                    </p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>

                            </div>
                            <div class="image col-md-12 col-lg-5">

                                <div class="containElements">

                                    <div class="containerImage">
                                        <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/11-acompanamiento-2023.png') !!}" alt=""
                                            loading="lazy">
                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>

                </div>

            </section>

            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/03-bg-acompanamiento-2023.png') !!})" class="customSection sectionParent acompanamiento-2023-5">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="title">
                                Los acompañamos todo el año <br class="space">
                                <span> para que usen efectivamente las herramientas <br class="desktopTabletElement">
                                y crezcan con Escala </span>
                            </h2>
                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Conversa con un asesor Escala
                            </a>

                        </div>

                    </section>
                    <section class="innerSectionElement sct2">

                        <div class="containElements">
                            <p class="text">
                                Nuestra metodología se divide en ciclos trimestrales donde <br class="desktopTabletElement">
                                los guiamos a definir metas, estrategias y campañas a <br class="desktopTabletElement">
                                implementar con el CRM de Escala:
                            </p>
                        </div>

                    </section>

                </div>

            </section>

            <section class=" customSection sectionParent acompanamiento-2023-6">

                {{-- <img src="{!! App::setFilePath('/assets/images/banners/bg-implementacion-2023-04.png') !!}" alt="" class="overlay"> --}}

                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <div class="containerImage">
                                <img class="desktopElement" src="{!! App::setFilePath('/assets/images/illustrations/others/04-acompanamiento-2023.png') !!}" loading="lazy">
                                <img class="mobileElement" src="{!! App::setFilePath('/assets/images/illustrations/others/12-acompanamiento-2023.png') !!}" loading="lazy">
                            </div>

                        </div>

                    </section>

                </div>

            </section>

            <section class="customSection sectionParent acompanamiento-2023-7">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">
                            <h2 class="title">
                                ¿Tienes preguntas o necesidades técnicas puntuales?<br class="space">
                                <span>¡Estamos listos par atenderte por chat casi 24/7!</span>
                            </h2>
                        </div>

                    </section>
                    <section class="innerSectionElement sct2">

                        <div class="containElements">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 cardParent">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/05-acompanamiento-2023.png') !!}" loading="lazy">
                                                </div>
                                                <div class="col-lg-6">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/06-acompanamiento-2023.png') !!}" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row timeFlags">
                                                <div class="col-md-12 title-block">
                                                    <p class="text-day">De Lunes a Viernes:</p>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                   <div class="container-flags">
                                                    <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/07-acompanamiento-2023.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                    <p class="text-time">6 am - 8 pm</p>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                 <div class="container-flags">
                                                      <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/09-home2023.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                    <p class="text-time">7 am - 9 pm</p>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                 <div class="container-flags ">
                                                  <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/10-home2023.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                    <p class="text-time">8 am - 10 pm</p>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                 <div class="container-flags">
                                                   <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/11-home2023.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                    <p class="text-time">9 am - 11 pm</p>
                                                </div>
                                            </div>
                                            <div class="row timeFlags">
                                                <div class="col-md-12 title-block">
                                                    <p class="text-day">Sábados:</p>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                   <div class="container-flags">
                                                    <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/07-acompanamiento-2023.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                    <p class="text-time">6 am - 8 pm</p>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                 <div class="container-flags">
                                                      <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/09-home2023.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                    <p class="text-time">7 am - 9 pm</p>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                 <div class="container-flags ">
                                                  <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/10-home2023.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                    <p class="text-time">8 am - 10 pm</p>
                                                </div>
                                                <div class="col-6 col-lg-3">
                                                 <div class="container-flags">
                                                   <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/11-home2023.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                    <p class="text-time">9 am - 11 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </section>

            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg-implementacion-2023-02.png') !!})" class="sectionParent customSection acompanamiento-2023-8">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="row">

                            <div class="slideshowCards col-md-12 col-lg-9">
                                <div class="containElements">

                                    <div id="carousel-testimonials-desktop" class="owl-carousel owl-theme">

                                        @if (isset($desk_reviews) && $desk_reviews != null)
                                            @foreach ($desk_reviews as $index => $item)
                                                <div class="item @if ($index === array_key_first($desk_reviews)) active @endif ">

                                                    <div class="testimonial">

                                                        <div class="containElements">

                                                            <div class="area">
                                                                <h3>
                                                                    {!! $item['area'] !!}
                                                                </h3>
                                                            </div>

                                                            <div class="quote">
                                                                <div class="containerImage">
                                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/open_comi.png') !!}" loading="lazy">
                                                                </div>
                                                            </div>

                                                            <p class="text">
                                                                {!! $item['text'] !!}
                                                            </p>

                                                            <div class="byCompany">
                                                                <div class="logo">
                                                                    <div class="containerImage">
                                                                        <img alt="TrustPilot review"
                                                                            src="{!! $item['logo'] !!}" alt=""
                                                                            loading="lazy">
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <span class="name">
                                                                        {!! $item['name'] !!}
                                                                    </span>
                                                                    <div class="stars">
                                                                        <div class="containerImage">
                                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}"
                                                                                loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>


                                                </div>
                                            @endforeach
                                        @endif

                                    </div>

                                </div>
                            </div>

                            <div class="info col-md-12 col-lg-3">
                                <div class="containElements">
                                    <img class="img-otto" src="{!! App::setFilePath('/assets/images/illustrations/others/01-implementacion-2023.png') !!}" loading="lazy">
                                    <h2 class="primaryTitle blackColor">
                                        Nuestros clientes lo<br class="space">
                                        comprueban.<br class="space">
                                        <span>Casos de éxito</span>
                                    </h2>

                                </div>
                            </div>

                        </div>


                    </section>


                </div>

                {{-- <img src="{!! App::setFilePath('/assets/images/banners/background_space_4.png') !!}" alt="" class="overlaySpace"> --}}


            </section>

            <script>
                jQuery('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 1
                        },
                        1000: {
                            items: 3
                        },
                        1250: {
                            items: 3
                        },
                        1500: {
                            items: 4
                        }
                    }
                })
            </script>

            <section class="component-info-multiple-cards-T2 customSection sectionParent acompanamiento-2023-9">

                <img src="{!! App::setFilePath('/assets/images/banners/bg-implementacion-2023-03.png') !!}" alt="" class="overlaysky">

                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle blackColor">

                                ¡Ningún otro CRM hace tanto por ti!

                            </h2>

                        </div>

                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="groupElements card-1">

                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_blue.png') !!}" alt="" class="backOverlay">

                            <h3 class="secondaryTitle">
                                Implementación
                            </h3>

                            <div class="img-box">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/02-implementacion-2023.png') !!}" loading="lazy">
                                </div>
                            </div>

                        </div>
                        <div class="groupElements">

                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white_transparent.png') !!}" alt="" class="backOverlay">

                            <h3 class="secondaryTitle">
                                Acompañamiento
                            </h3>

                            <div class="img-box">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/03-implementacion-2023.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Conocer más
                            </a>

                        </div>
                        <div class="groupElements">

                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white_transparent.png') !!}" alt="" class="backOverlay">

                            <h3 class="secondaryTitle">
                                Entrenamiento
                            </h3>

                            <div class="img-box">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/04-implementacion-2023.png') !!}" loading="lazy">
                                </div>
                            </div>

                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Conocer más
                            </a>

                        </div>
                    </section>



                </div>


            </section>

            @php
                $escalaUrl = 'https://escala.com';
                $items = [
                    [
                        'type' => 'master',
                        'title' => '¿Cuántas horas tengo disponibles con mi Gerente de Éxito?',
                        'text' => '
            <p class="text"><strong>En el Plan Pro:</strong></p> <br class="space">
            <ul style="list-style: disc; padding-left: 20px">
                <li>8 horas el primer año que puedes consumir a tu propio ritmo</li>
                <li>4 horas por año a partir del segundo año</li>
            </ul>
            <br class="space">
            <p class="text primaryText grayColorTexts">El Plan Starter no incluye un Gerente de Éxito asignado.</p>
          ',
                    ],
                    [
                        'type' => 'master',
                        'title' => '¿Cuántas horas de entrenamiento privado tengo disponibles?',
                        'text' => '
            <p class="text"><strong>En el Plan Pro:</strong></p> <br class="space">
            <ul style="list-style: disc; padding-left: 20px">
                <li>4 horas el primer año que puedes consumir a tu propio ritmo</li>
                <li>2 horas por año a partir del segundo año</li>
            </ul>
            <br class="space">
            <p class="text primaryText grayColorTexts">El Plan Starter no incluye un entrenamiento privado.</p>
          ',
                    ],
                    [
                        'type' => 'master',
                        'title' => '¿Qué pasa si necesito más horas con mi Gerente de Éxito o de entrenamiento privado?',
                        'text' => '
            <p class="text primaryText grayColorTexts">Puedes solicitar e invertir en horas adicionales. Lo coordinas directamente con tu Gerente de Éxito asignado.</p>
          ',
                    ],
                    [
                        'type' => 'master',
                        'title' => '¿El Gerente de Éxito puede implementar acciones en mi cuenta de Escala?',
                        'text' => '
            <p class="text primaryText grayColorTexts">No. El Gerente de Éxito sirve de guía para que aprovechen las herramientas al máximo. La responsabilidad de ejecutar las estrategias y campañas es de cada cliente.</p>
          ',
                    ],
                    [
                        'type' => 'master',
                        'title' => '¿Cómo me reúno con mi Gerente de Éxito? ',
                        'text' => '
            <p class="text primaryText grayColorTexts">Los contactos ocurren por Zoom, Email y WhatsApp dependiendo dell objetivo y la duración de los mismos.</p>
          ',
                    ],
                ];

                $parameters = [
                    'classSection' => 'acompanamiento-2023-10',
                    'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                    'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                    'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                    'items' => $items,
                ];
            @endphp
            @contain_FAQ_T1($parameters)
            @endcontain_FAQ_T1

        </div>
    </div>


@endsection

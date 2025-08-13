{{--
  Template Name: [B]  Landing automatizaciones crm - 2025
--}}

@extends('layouts.app')
@section('content')




<div id="automatizacionesSectionCrm_2025">
    <div class="sections">
        <!-- Home  new paid media landing 2025 By Escala -->
        <section id="lead-form"
            class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol automatizacionesSectionCrm_2025-0 ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_new_home_2025_landing_page_escala.svg') }}')"
                class="backgroundFull">
                <div class="section-row">

                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="info ">
                                <div class="containElements">
                                    <div class="text">
                                        <h1 class="principalBigTitle">
                                            Escala las ventas <br class="space">
                                            de tu empresa
                                        </h1>
                                        <br class="space">
                                        <span>
                                            con un <span>CRM todo-en-uno</span>
                                            y fácil de usar
                                        </span>
                                    </div>

                                    <div class="imgHero">
                                        <img class="cover-image" alt="Ilustración Andrés Moreno"
                                            src="{{ App::setFilePath('/assets/images/illustrations/others/img-am-banner-automatizaciones-landing-crm-2025.webp') }}"
                                            loading="lazy">
                                    </div>
                                </div>

                                <div class="containElements2">
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

                            <div class="form7">

                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">


                                        <h5 class="titleFormat"> Conoce Escala en una <br class="space"> sesión personalizada</h5>


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
                                                'Empezar ahora →')
                                        </script>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>

                </div>

            </div>

        </section>

        <section class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol automatizacionesSectionCrm_2025-0-1 ">
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


        <section class="customSection sectionParent automatizacionesSectionCrm_2025-1">

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
        <section class="customSection sectionParent fullWidth automatizacionesSectionCrm_2025-1-2">
            <div class="section-row">
                <section class="innerSectionElement1">
                    <div class="containElements">
                        <h2 class="primaryTitle">
                            Estos problemas están frenando el <br class="DT_e">
                            crecimiento de tu empresa
                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="groupElements">
                        <h4 class="titleFloat">1</h4>
                        <div class="info">
                            <span>Leads que se enfrían <br class="DT_e">
                                sin el seguimiento <br class="DT_e">
                                adecuado</span>

                        </div>
                    </div>
                    <div class="groupElements">
                        <h4 class="titleFloat">2</h4>
                        <div class="info">
                            <span>Conversaciones en <br class="DT_e">
                                WhatsApp y redes que <br class="DT_e">
                                se pierden en el “limbo”</span>
                        </div>
                    </div>
                    <div class="groupElements">
                        <h4 class="titleFloat">3</h4>
                        <div class="info">
                            <span>Procesos de venta <br class="DT_e">
                                desordenados y cada <br class="DT_e">
                                vendedor trabajando a <br class="DT_e">
                                su manera.</span>
                        </div>
                    </div>
                    <div class="groupElements">
                        <h4 class="titleFloat">4</h4>
                        <div class="info">
                            <span>Poca visibilidad (o cero) <br class="DT_e">
                                de lo que pasa en ventas. <br class="DT_e">
                                Reportes confusos <br class="DT_e">
                                impiden tomar decisiones.</span>
                        </div>
                    </div>
                </section>


            </div>

        </section>
        <section class="customSection sectionParent automatizacionesSectionCrm_2025-2">

            <div class="section-row ">
                <div class="row sct1">
                    <div class="text-center col-12">
                        <h2 class="title">
                            Logra que tus vendedores cierren <br class="DT_e">
                            <span> más ventas con menos esfuerzo </span>
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

                <div class="btnCenter">
                    <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                        Tener sesión personalizada →
                    </a>
                </div>

            </div>
        </section>





        <section class="customSection sectionParent automatizacionesSectionCrm_2025-3">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="info">

                        <h2 class="title">
                            Así es como Escala puede ayudar <br class="DT_e"> a tu equipo de venta
                        </h2>
                    </div>

                </section>

                <section class="innerSectionElement sct2">
                    <ul>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/gestion-leads-icon.webp') !!}" loading="lazy">Mejora la gestión con <br class="DT_e"> leads y clientes por <br class="DT_e"> distintos canales </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/control-de-gestion.webp') !!}" loading="lazy">Obtén más visibilidad y <br class="DT_e"> control sobre la gestión <br class="DT_e"> comercial </li>
                        </li>
                    </ul>
                    <ul>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/centralizar-comunicacion.webp') !!}" loading="lazy">Centraliza la <br class="DT_e"> comunicación de leads, <br class="DT_e"> clientes, tareas y procesos </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/aumenta-la-eficiencia.webp') !!}" loading="lazy">Aumenta la eficiencia <br class="DT_e"> automatizando acciones y <br class="DT_e"> conversaciones </li>
                    </ul>

                </section>

                <section class="innerSectionElement sct3">

                    <h3 class="subtitle">
                        <span> Potenciados por IA</span> <sup> <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/icon-star-paid-media.webp') }}"
                                loading="lazy"></sup>
                        <br class="space">
                        y el mejor servicio al cliente
                    </h3>
                </section>

                <section class="innerSectionElement sct4">

                    <div class="info">

                        <h2 class="title">
                            Nuestros clientes han logrado:
                        </h2>
                    </div>
                    <div class="cards-container">

                        <div class="card " id="img">
                            <h3>2X</h3>
                            <span>
                                sus ventas <br class="DT_e">
                                en menos <br class="DT_e">
                                de 1 año
                            </span>
                        </div>

                        <div class="card" id="img">
                            <h3>+50%</h3>
                            <span>
                                de incremento en <br class="DT_e">
                                sus ingresos en <br class="DT_e">
                                menos de 6 meses
                            </span>
                        </div>
                        <div class="card" id="img">
                            <h3>2X</h3>
                            <span>
                                la eficiencia del <br class="DT_e"> equipo comercial
                            </span>
                        </div>
                    </div>


                    <div class="info2"><span>la eficiencia del equipo comercial</span></div>
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                            Empieza ahora →
                        </a>
                    </div>
                </section>



            </div>

        </section>

        <section class="w-full customSection sectionParent automatizacionesSectionCrm_2025-4">
            <div class="section-row">
                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'automatizacionesSectionCrm_2025-5',
                        'img' => App::setFilePath('/assets/images/illustrations/others/oportunidades-img-paid-media.webp'),
                        'title' => 'Gestiona contactos y
                        oportunidades de venta <br class="DT_e">
                        más fácil y rápido
                        ',
                        'text' => '
                        <ul>
                            <li>Puedes ver quiénes son tus <br class="DT_e">
                                prospectos, en qué etapa del <br class="DT_e">
                                proceso están y qué necesitas <br class="DT_e">
                                hacer para avanzar.</li>
                            <li>Te avisa cuándo dar seguimiento, para <br class="DT_e">
                                que nunca se te escape una <br class="DT_e">
                                oportunidad.</li>
                            <li>Puedes registrar llamadas, correos y <br class="DT_e">
                                notas rápidamente, sin perder tiempo <br class="DT_e">
                                buscando información en miles de lugares.
                            </li>
                        </ul>
                        <span>
                            Es como tener un asistente <br class="DT_e">
                            personal que organiza tus <br class="DT_e">
                            ventas y te ayuda a cerrar <br class="DT_e">
                            más rápido.
                        </span>

                        ',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'automatizacionesSectionCrm_2025-5-1',
                        'img' => App::setFilePath('/assets/images/illustrations/others/imbox-img-paid-media.webp'),
                        'title' => 'Conversa por <br class="DT_e">
                        WhatsApp, Email, <br class="DT_e">
                        Facebook e Instagram <br class="DT_e">
                        desde el mismo lugar',
                        'text' => '
                        <span>Ya tú y tu equipo no tienen <br class="DT_e">
                            que andar saltando entre <br class="DT_e">
                            apps, perdiendo tiempo o <br class="DT_e">
                            conversaciones importantes.
                        </span>
                        <br class="space">
                        <br class="space">
                        El Inbox en el CRM de Escala permite que
                        todo quede organizado, y puedas ver el
                        historial completo de cada persona, sin
                        importar por dónde te contactaron. Así,
                        respondes rápido, sin caos, y das una
                        experiencia súper profesional.

                        ',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'automatizacionesSectionCrm_2025-5-2',
                        'img' => App::setFilePath('/assets/images/illustrations/others/agentes-ia-img-paid-media.webp'),
                        'title' => 'Agentes de IA trabajan <br class="space">
                        por ti 24/7',
                        'text' => '
                        <span>La inteligencia artificial <br class="DT_e">
                            en Escala atiende las <br class="DT_e">
                            conversaciones en el <br class="DT_e">
                            Inbox logrando:</span>
                        <br class="space">
                        <br class="space">
                        <ul>
                            <li>Precalificar prospectos</li>
                            <li>Conversar con tus contactos <br class="DT_e">
                                por WhatsApp</li>
                            <li>Capturar y actualizar datos <br class="DT_e">
                                en tu CRM
                            </li>
                            <li>Agendar citas directamente en los <br class="DT_e">
                                calendarios de tu equipo</li>
                            <li>Enviar cotizaciones de productos o <br class="DT_e">
                                servicios cargados en tu CRM</li>
                            <li>Derivar la conversación a un vendedor <br class="DT_e">
                                cuando sea necesario
                            </li>
                        </ul>
                        <br class="space">
                        <p class="text">A diferencia de los chatbots con IA, los <br class="DT_e">
                            Agentes de IA en Escala leen, procesan <br class="DT_e">
                            la información compartida en la conversación
                            y responden hasta cumplir el objetivo deseado.
                        </p>
                        ',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'automatizacionesSectionCrm_2025-5-3',
                        'img' => App::setFilePath('/assets/images/illustrations/others/automatizaciones-img-paid-media.webp'),
                        'title' => 'Automatiza para <br class="space">
                        aumentar tu <br class="space">
                        productividad',
                        'text' => '
                        <span>Escala CRM te ayuda <br class="DT_e">
                            a automatizar tareas <br class="DT_e">
                            repetitivas como:</span>

                        <br class="space">
                        <br class="space">
                        <ul>
                            <li>
                                Enviar emails y WhatsApps de seguimiento
                            </li>
                            <li>Crear recordatorios
                            </li>
                            <li>Actualizar el estado de tus prospectos
                            </li>
                            <li>Asignar leads o prospectos
                                a vendedores
                            </li>
                        </ul>
                        <br class="space">
                        <p class="text">Así tú y tu equipo pueden enfocarse en
                            vender mientras el CRM se encarga de lo
                            tedioso. Ahorra tiempo y evita errores, con
                            Escala logras que cada minuto trabajado
                            sea mucho más efectivo.
                        </p>
                        ',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1



                    </div>
                </section>

            </div>
        </section>


        <section class="customSection sectionParent automatizacionesSectionCrm_2025-6">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="info">
                            <h2 class="title">
                                ¿Por qué elegir Escala para <br class="DT_e">
                                optimizar tus ventas?
                            </h2>
                            <div class="list">
                                <span>
                                    1
                                </span>
                                <p class="text">
                                    La conveniencia de tener todas <br class="DT_e">
                                    las herramientas en un solo lugar:
                                </p>
                            </div>

                        </div>

                    </div>
                </section>
                <section class="innerSectionElement sct2">
                    <ul>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/ia-icon-escala.webp') !!}" loading="lazy">Inteligencia Artificial </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/inbox-icon-escala.webp') !!}" loading="lazy">Inbox Omnicanal </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos-icon-escala.webp') !!}" loading="lazy">Flujos Automatizados </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/email-icon-escala.webp') !!}" loading="lazy">Email Marketing </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/anuncios-icon-escala.webp') !!}" loading="lazy">Anuncios Digitales </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/integraciones-icon-escala.webp') !!}" loading="lazy">Integraciones </li>

                        </li>
                    </ul>
                    <ul>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/contactos-icon-escala.webp') !!}" loading="lazy">Gestión de contactos <br class="DT_e"> y oportunidades </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp-icon-escala.webp') !!}" loading="lazy">WhatsApp</li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/app-icon-escala.webp') !!}" loading="lazy">Aplicación Móvil</li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/agendamiento-icon-escala.webp') !!}" loading="lazy">Agendamiento</li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing-pages-icon-escala.webp') !!}" loading="lazy">Landing Pages</li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes-icon-escala.webp') !!}" loading="lazy">Reportes Personalizados</li>

                    </ul>

                </section>
                <div class="btnCenter">
                    <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        Tener sesión personalizada →
                    </a>
                </div>
            </div>

        </section>

        <section class="customSection sectionParent automatizacionesSectionCrm_2025-7">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="info">
                            <div class="list">
                                <span>
                                    2
                                </span>
                                <p class="text">
                                    Ningún otro CRM te brinda <br class="DT_e"> un mejor servicio al cliente
                                </p>
                            </div>
                            <span class="text">
                                Diseñamos un sistema de acompañamiento en vivo y robusto para <br class="DT_e">
                                que implementes efectivamente. ¡Tu éxito es nuestro éxito!
                            </span>
                        </div>

                        <div class="image">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/servicio-excelente-atencion-al-cliente-escala.webp') }}"
                                loading="lazy">
                        </div>
                    </div>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="info">
                            <div class="list">
                                <span>
                                    3
                                </span>
                                <p class="text">
                                    Escala se adapta al ritmo de <br class="DT_e"> crecimiento de tu empresa
                                </p>
                            </div>


                            <span class="text">
                                Las herramientas empoderan a tu equipo para que logren más con <br class="DT_e">
                                menos y así escalar operaciones.
                            </span>
                        </div>

                        <div class="image">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/crecimiento-empresa-con-escala.webp') }}"
                                loading="lazy">
                        </div>
                    </div>
                </section>
            </div>

        </section>
        <section class="customSection sectionParent automatizacionesSectionCrm_2025-8">
            <div class="section-row " style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-paid-media-automatizaciones-seccion-final.webp') }}')">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/ceo-escala-alfonso-email.webp') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                Acelera el crecimiento <br class="DT_e"> de tus ventas <br class="DT_e"> inteligentemente
                            </h2>

                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Empezar ahora →
                            </a>

                        </div>
                    </section>



                </div>
            </div>
        </section>
    </div>

</div>
@endsection
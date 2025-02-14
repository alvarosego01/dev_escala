{{--
  Template Name: [B] Home landing - 2025
--}}

@extends('layouts.app')
@section('content')



<div id="homeSection_2025">
    <div class="sections">
        <!-- Home 2025 -->
        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol homeSection_2025 homeSection_2025_0 ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_new_landing_home_escala.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle">
                                            Escala las ventas de tu empresa
                                        </h1>

                                        <span class="principalBigText">
                                            con un CRM
                                            todo-en-uno y
                                            fácil de usar
                                        </span>



                                    </div>


                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala" src="{{ App::setFilePath('/assets/images/person/am/img_andres_moreno_home_escala_2025.png') }}" loading="lazy">
                                        </div>

                                    </div>


                                </div>



                            </div>
                            <div class="form7 col-md-12 col-lg-4 ">

                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">


                                        <h5 class="titleFormat blackcolor"> Recibe un demo personalizado</h5>


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
                                            jQuery('.formatForm .wpcf7 input.wpcf7-form-control.wpcf7-submit').val('RECIBIR EL DEMO')
                                        </script>
                                    </div>

                                </div>

                            </div>


                            <div class="imageReviewsMobile1 hideOnDesktop">

                                <div class="image">
                                    <div class="containerImage">
                                        <img alt="Ilustración Andrés Moreno, CEO de Escala" src="{{ App::setFilePath('/assets/images/person/am/img_andres_moreno_home_escala_2025.png') }}" loading="lazy">
                                    </div>

                                </div>



                            </div>




                        </div>

                    </section>

                </div>



            </div>

        </section>


        <section class="customSection sectionParent home_2025_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">

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
                    <div class="ele reviews">

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


                    <div class="ele2 logos_empresas">
                        <span>Destacados en:</span>
                        <img alt="Logos empresa" src="{{ App::setFilePath('/assets/images/illustrations/others/img_logo_empresa_bg_white_forbes (1).png') }}" loading="lazy">
                        <img alt="Logos empresa" src="{{ App::setFilePath('/assets/images/illustrations/others/img_logo_empresa_bg_white_yahoo_finance (1).png') }}" loading="lazy">
                        <img alt="Logos empresa" src="{{ App::setFilePath('/assets/images/illustrations/others/img_logo_empresa_bg_white_latam_list (1).png') }}" loading="lazy">
                        <img alt="Logos empresa" src="{{ App::setFilePath('/assets/images/illustrations/others/img_logo_empresa_bg_white_refresh_miami (1).png') }}" loading="lazy">
                        <img alt="Logos empresa" src="{{ App::setFilePath('/assets/images/illustrations/others/img_logo_empresa_bg_white_valora (1).png') }}" loading="lazy">
                    </div>
                </section>

            </div>

        </section>

        <section class="customSection sectionParent home_2025_2">

            <div class="section-row ">
                <div class="row sct1">
                    <div class="text-center col-12">
                        <h2 class="title">
                            El software de marketing y ventas <br class="space">
                            preferido por PYMES en crecimiento
                        </h2>
                    </div>
                </div>

                <div class=" row sct2">
                    <div class="mb-4 col-lg-4 col-md-12 box-internal">
                        <div class="card-box"
                            style="background-image: url('{!! App::setFilePath('/assets/images/illustrations/others/bg_testimonios_home_2025.png') !!}')">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/icono_testimonios_home.png') !!}" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><b>Aumentamos las ventas en un 100%.</b> El acompañamiento del equipo de Escala ha
                                    sido fundamental.
                                    <br class="space">
                                    <br class="space">

                                </h5>
                                <div class="card-text">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_miguel_urrego_poctlab.png') !!}" alt="">
                                    <div class="text-internal">
                                        <span class="card-title">Miguel Urrego</span>
                                        <p class="card-text">Líder Comercial Poctlab</p>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/stars_testimonios_5.png') !!}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 col-lg-4 col-md-12 box-internal">
                        <div class="card-box"
                            style="background-image: url('{!! App::setFilePath('/assets/images/illustrations/others/bg_testimonios_home_2025.png') !!}')">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/icono_testimonios_home.png') !!}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Escala ha sido un gran aliado para <b> mejorar nuestra operación comercial,</b> automatizar tareas
                                    y optimizar nuestra inversión
                                    en marketing.
                                </h5>
                                <div class="card-text">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/miller_romero_taller_cinco.png') !!}" alt="">
                                    <div class="text-internal">
                                        <span class="card-title">Miller Romero</span>
                                        <p class="card-text">Líder Comunicaciones Taller Cinco</p>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/stars_testimonios_5.png') !!}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 col-lg-4 col-md-12 box-internal">
                        <div class="card-box"
                            style="background-image: url('{!! App::setFilePath('/assets/images/illustrations/others/bg_testimonios_home_2025.png') !!}')">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/icono_testimonios_home.png') !!}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Escala no solo ofrecen un <b> software robusto y amigable,</b> sino también un servicio excepcional que asegura que aprovechemos al máximo
                                    la herramienta.
                                </h5>
                                <div class="card-text">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/catalina_gonzalez_katagogo.png') !!}" alt="">
                                    <div class="text-internal">
                                        <span class="card-title">Catalina González Goez
                                        </span>
                                        <p class="card-text"> CEO KataGoGo</p>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/stars_testimonios_5.png') !!}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                   QUIERO VENDER MÁS
                </a>
            </div>
            <div class="imageReviewsMobile hideOnDesktop">

                <div class="image">
                    <div class="containerImage">
                        <img alt="Ilustración Andrés Moreno, CEO de Escala" src="{{ App::setFilePath('/assets/images/person/am/img_andres_moreno_home_escala_2025.png') }}" loading="lazy">
                    </div>

                </div>
            </div>



        </section>

        <section class="customSection sectionParent home_2025_3">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="info">

                        <h2 class="title">
                            Así es como Escala puede ayudarte:
                        </h2>
                        @php
                        $items = [
                        ['image' => 'icon_escala_home_optimizar.png', 'title' => 'Optimizar tu proceso', 'text' => 'de venta con una visión 360'],
                        ['image' => 'icon_escala_home_centralizar.png', 'title' => 'Centralizar tus comunicaciones', 'text' => 'de WhatsApp, Facebook e Instagram'],
                        ['image' => 'icon_escala_home_capturar_contactos.png', 'title' => 'Capturar contactos', 'text' => 'y organizar tu base de datos'],
                        ['image' => 'icon_escala_home_necogios_online.png', 'title' => 'Llevar tu negocio contigo', 'text' => 'a donde vayas'],
                        ['image' => 'icon_escala_home_automatizar_tareas.png', 'title' => 'Automatizar tareas,', 'text' => 'emails y WhatsApps'],
                        ];
                        @endphp

                        <section class="innerSectionElement sct0">
                            <div class="containElements">
                                <ul class="itemsList">
                                    @foreach ($items as $item)
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/' . $item['image']) !!}" alt="">
                                        <span> <span class="title"> {{ $item['title'] }} </span> {{ $item['text'] }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>

                        <section class="innerSectionElement sct0_1">

                            <h2 class="title">
                                Nuestros clientes han logrado:
                            </h2>
                            <div class="containElements">
                                <div class="items">
                                    <h3 class="subTitle">
                                        2X
                                    </h3>
                                    <span>
                                        <span> sus Ingresos </span>
                                        en menos de 6 meses
                                    </span>
                                </div>

                                <div class="items">
                                    <h3 class="subTitle">
                                        300%

                                    </h3>
                                    <span>
                                        <span> más leads </span>
                                        en 6 meses
                                    </span>
                                </div>

                                <div class="items">
                                    <h3 class="subTitle">
                                        70%

                                    </h3>
                                    <span>
                                        <span> de aumento </span>
                                        en eficiencia operativa
                                    </span>
                                </div>
                            </div>

                        </section>

                    </div>

                    <span class="text">
                        Cifras obtenidas en entrevistas con ellos.
                    </span>
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            ¡ESCALA AHORA!
                        </a>
                    </div>
                </section>

            </div>

        </section>





        <section class="customSection sectionParent home_2025_4">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="info">

                        <h2 class="title">
                            ¿Por qué elegir Escala para optimizar tus ventas?
                        </h2>
                        <span class="subTitle">
                            La conveniencia de tener todas las herramientas en un solo lugar:
                        </span>
                        @php
                        $items_2 = [
                        ['image' => 'icon_escala_home_grupo_persona.png', 'text' => 'Gestión de contactos y procesos'],
                        ['image' => 'icon_escala_home_form.png', 'text' => 'Landing Pages'],
                        ['image' => 'icon_escala_home_text.png', 'text' => 'Inbox Omnicanal'],
                        ['image' => 'icon_escala_home_form_persona.png', 'text' => 'Formularios'],
                        ['image' => 'icon_escala_home_call.png', 'text' => 'WhatsApp API'],
                        ['image' => 'icon_escala_home_anuncio.png', 'text' => 'Anuncios Digitales'],
                        ['image' => 'icon_escala_home_engranajes.png', 'text' => 'Flujos Automatizados'],
                        ['image' => 'icon_escala_home_escala.png', 'text' => 'Reportes Personalizados'],
                        ['image' => 'icon_escala_home_estrellas.png', 'text' => 'Inteligencia Artificial'],
                        ['image' => 'icon_escala_home_ganancias.png', 'text' => '¡y más!'],
                        ['image' => 'icon_escala_home_mail.png', 'text' => 'Email Marketing'],
                        ];
                        @endphp


                        <section class="innerSectionElement sct0">
                            <div class="containElements">
                                <ul class="itemsList">
                                    @foreach ($items_2 as $item_2)
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/' . $item_2['image']) !!}" alt="">
                                        <span> {{ $item_2['text'] }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </section>

                    </div>

                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            CONOCER HERRAMIENTAS
                        </a>
                    </div>
                </section>

            </div>

        </section>



        <section class="customSection sectionParent home_2025_5">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <h2 class="title">
                            ¡No te dejamos solo! <br class="space">
                            Te apoyamos a personalizar y aprender a usar el CRM:
                        </h2>
                        <span class="text">
                            Diseñamos un sistema de acompañamiento en vivo y robusto <br>
                            para que implementes efectivamente. ¡Tu éxito es nuestro éxito!
                        </span>
                        <div class="containerImg">
                            <img alt="Imagen equipo escala aprender a usar tu crm" src="{{ App::setFilePath('/assets/images/illustrations/others/img_escala_aprender_usar_crm.png') }}" loading="lazy">
                        </div>
                    </div>

                </section>

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <h2 class="title">
                            Aumentas la productividad de tus vendedores <br class="space">
                            y reduces costos:
                        </h2>
                        <span class="text">
                            Las herramientas empoderan a tu equipo para que <br>
                            logren más con menos y así escalar operaciones.
                        </span>
                        <div class="containerImg">
                            <img alt="Imagen equipo escala crecimiento de ventas en equipo " src="{{ App::setFilePath('/assets/images/illustrations/others/img_escala_crecimiento_de_ventas.png') }}" loading="lazy">
                        </div>
                    </div>



                </section>
                <div class="btnCenter">
                    <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        ¡WOW! LO NECESITO
                    </a>
                </div>
            </div>

        </section>


        <section class="customSection sectionParent home_2025_6">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="groupElements row">

                        <div class="image col-md-12 col-lg-7">
                            <img alt="" src="{{ App::setFilePath('/assets/images/illustrations/others/img_gestion_contactos_crm_escala.png') }}" loading="lazy">
                        </div>

                        <div class="info col-md-12 col-lg-5">
                            <h2 class="title">
                                Gestiona contactos y oportunidades de venta
                                más fácil y rápido
                            </h2>
                            <ul>
                                <li> Puedes ver quiénes son tus prospectos, en qué etapa del proceso están y qué necesitas hacer
                                    para avanzar.
                                </li>
                                <br>
                                <li>
                                    Te avisa cuándo dar seguimiento, para que nunca se te escape una oportunidad.
                                </li>
                                <br>
                                <li>
                                    Puedes registrar llamadas, correos y notas rápidamente, sin perder tiempo buscando información en miles de lugares.
                                </li>

                            </ul>

                            <span class="text">
                                Es como tener un asistente personal que organiza tus ventas y te ayuda a cerrar
                                más rápido.
                            </span>
                        </div>


                    </div>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="groupElements row">
                        <div class="info col-md-12 col-lg-5">
                            <h2 class="title">
                                Automatiza para aumentar tu productividad
                            </h2>
                            <span class="text">
                                Escala CRM te ayuda
                                a automatizar tareas
                                repetitivas como:
                            </span>
                            <ul>
                                <li>
                                    Enviar emails y WhatsApps
                                    de seguimiento
                                </li>
                                <br>
                                <li>
                                    Crear recordatorios
                                </li>
                                <br>
                                <li>
                                    Actualizar el estado de tus prospectos
                                </li>
                                <br>
                                <li>
                                    Asignar leads o prospectos
                                    a vendedores
                                </li>
                            </ul>

                            <span class="text_1">
                                Así tú y tu equipo pueden enfocarse en vender mientras el CRM se encarga de lo tedioso. Ahorra tiempo y evita errores, con Escala logras que cada minuto trabajado sea mucho más efectivo.
                            </span>

                        </div>

                        <div class="image col-md-12 col-lg-7">
                            <img alt="" src="{{ App::setFilePath('/assets/images/illustrations/others/img_automatizaciones_crm_escala.png') }}" loading="lazy">
                        </div>

                    </div>


                </section>

                <section class="innerSectionElement sct3">
                    <div class="groupElements row">
                        <div class="image col-md-12 col-lg-7">
                            <img alt="" src="{{ App::setFilePath('/assets/images/illustrations/others/img_comunicacion_en_un_solo_lugar.png') }}" loading="lazy">
                        </div>

                        <div class="info col-md-12 col-lg-5">
                            <h2 class="title">
                                Conversa por WhatsApp, Email, Facebook e Instagram desde el mismo lugar
                            </h2>

                            <span class="text">
                                Ya tú y tu equipo no tienen
                                que andar saltando entre
                                apps, perdiendo tiempo o conversaciones importantes.

                            </span>
                            <span class="text_1">
                                La Omnicanalidad del CRM de Escala permite que todo quede organizado, y puedas ver el historial completo de cada persona, sin importar por dónde te contactaron. Así, respondes rápido,
                                sin caos, y das una experiencia
                                súper profesional.
                            </span>
                        </div>

                    </div>
                </section>
            </div>

        </section>



        <section class="sectionParent customSection home_2025_7">
            <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg_new_landing_home_escala_section_7.svg') !!}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                                <h3 class="tittle">
                                    Acelera el crecimiento de tus ventas con Escala
                                </h3>
                                <span class="text">
                                    Tienes mucho que ganar y poco que perder
                                </span>
                                <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    EMPEZAR A CRECER AHORA
                                </a>
                            </div>

                            <div class="image col-md-12 col-lg-4">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/am_img_crecimiento_acelerado_con_escala.png ') !!}" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>


    </div>

</div>


@endsection
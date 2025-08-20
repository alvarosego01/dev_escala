<div id="landing_sem_base">
    <div class="sections">
        <section id="lead-form" class="hero2025 landing_sem_base_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/fondo-banner-crm-automatizaciones-inteligentes.webp') !!}')">

                <div class="section-row">

                    <section class="innerSectionElement sct1">
                        <div class="sectionText">

                            <h1 class="principalBigTitle">
                                Vende más con<span> CRM +<br class="DT_e">
                                Automatizaciones
                                Inteligentes</span>
                            </h1>


                            <p class="principalBigText">
                            ¿Y si sumaras a tu equipo un integrante<br class="DT_e">
                            que trabaja 24/7 a una fracción del costo?
                            </p>
                            <div class="containerImage">
                                <div class="video-cover" id="video-cover-landing" tabindex="0" data-video-src="https://player.vimeo.com/video/1097895831?autoplay=1">
                                    <img alt="Andres presentando Escala CRM con integración a WhatsApp y automatización de ventas" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-crm-automatizaciones-inteligentes-ia.webp') !!}" loading="lazy">
                                    <!-- <div class="play-button">
                                        <img class="play-icon" alt="Icon play"
                                            src="{{ App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') }}"
                                            loading="lazy">
                                    </div> -->
                                </div>
                                <!-- <div class="video-modal" id="video-modal-landing" style="display:none;">
                                    <div class="video-modal-backdrop" id="video-modal-backdrop-landing"></div>
                                    <div class="video-modal-content">
                                        <button class="video-modal-close" id="video-modal-close-landing" aria-label="Cerrar">&times;</button>
                                        <div class="video-iframe-container" id="video-iframe-container-landing"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <div class="video-cover" id="video-cover-landing-2" tabindex="0" data-video-src="https://player.vimeo.com/video/1097895831?autoplay=1">
                                <img alt="Andres presentando Escala CRM con integración a WhatsApp y automatización de ventas" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-crm-automatizaciones-inteligentes-ia.webp') !!}" loading="lazy">

                                <!-- <div class="play-button">
                                    <img class="play-icon" alt="Icon play"
                                        src="{{ App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') }}"
                                        loading="lazy">
                                </div> -->
                            </div>
                            <!-- <div class="video-modal" id="video-modal-landing-2" style="display:none;">
                                <div class="video-modal-backdrop" id="video-modal-backdrop-landing-2"></div>
                                <div class="video-modal-content">
                                    <button class="video-modal-close" id="video-modal-close-landing-2" aria-label="Cerrar">&times;</button>
                                    <div class="video-iframe-container" id="video-iframe-container-landing-2"></div>
                                </div>
                            </div> -->
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
                <div class="section-row-2">
                    <section class="innerSectionElement sctO1">
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
                    <section class="innerSectionElement sct1">

                        <div class="logos_empresas">
                            <div class="containElements">
                                <span class="subTitle">
                                    Destacados en:
                                </span>
                            </div>
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
                    </section>
                </div>
            </div>
        </section>
        <section class="customSection sectionParent landing_sem_base_1">
            <div class="section-row">


            </div>

        </section>

        <section class="customSection sectionParent landing_sem_base_2">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                    ¿Cuántas ventas pierden por<br class="space">
                    no automatizar tareas?
                    </h2>

                    <span>
                    Esto es lo que sucede cuando NO tienes un CRM con las automatizaciones correctas:
                    </span>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/visibilidad.webp') !!}"
                                alt="">
                            <span>
                            Leads se enfrían por falta de <br class="DT_e">
                            seguimiento
                            </span>

                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/automatizar.webp') !!}"
                                alt="">
                            <span>Demasiado tiempo perdido<br class="DT_e">
                            en operaciones</span>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/conversasiones.webp') !!}"
                                alt="">
                            <span>Clientes mal atendidos</span>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/registro-vendedores.webp') !!}"
                                alt="">
                            <span>Datos y reportes <br class="DT_e">
                            desactualizados</span>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/registros-crm.webp') !!}"
                                alt="">
                            <span>Equipo apagando fuegos y<br class="DT_e">
                            sin estrategia</span>
                        </div>

                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/vendedores-leads.webp') !!}"
                                alt="">
                            <span>Ciclos de venta<br class="DT_e">
                                más largos</span>
                        </div>
                    </div>
                </section>
                <span>
                    Con Escala, todo esto cambia.
                </span>
            </div>

        </section>


        <section class="w-full customSection sectionParent landing_sem_base_4">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                        Gana agilidad y reduce esfuerzos con <br class="space">
                        Automatizaciones Inteligentes
                        </h2>
                        <span>
                        ¿Qué tipo de tareas puedes programar en el CRM de Escala?
                        </span>
                    </div>
                </section>

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">
                        @php
                        $defaultParams = [
                        'type' => 'backgroundColor',
                        'enableTitle' => false,
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'title' => false,
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022'
                        ];
                        @endphp

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_1',
                        'img' => App::setFilePath('/assets/images/illustrations/others/recibir-mensajes-canales-1.webp'),
                        'text' => '<span>Automatiza conversaciones con IA</span> en<br class="DT_e">WhatsApp, Instagram y Facebook',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_2',
                        'img' => App::setFilePath('/assets/images/illustrations/others/automatizaciones-crm.webp'),
                        'text' => '<span>Automatiza Emails y WhatsApps</span> según<br class="DT_e">acciones de prospectos o etapa de venta',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_3',
                        'img' => App::setFilePath('/assets/images/illustrations/others/IA-recordar-eventos-actividades.webp'),
                        'text' => '<span>Envía recordatorios automáticos</span> de<br class="DT_e">eventos y tareas',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_4',
                        'img' => App::setFilePath('/assets/images/illustrations/others/organiza-actualiza-data.webp'),
                        'text' => '<span>Guarda y actualiza data</span><br class="DT_e">automáticamente en el CRM',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_5',
                        'img' => App::setFilePath('/assets/images/illustrations/others/reportes-paginas-sem.webp '),
                        'text' => '<span>Generar reportes</span> para medir resultados<br class="DT_e">en tiempo real',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1


                    </div>
                    <span class="text-blue">
                        ¡Y más!
                    </span>
                </section>

            </div>
        </section>

        <section class="customSection sectionParent landing_sem_base_3_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="primaryTitle">
                    ¿Qué puede hacer el Agente de Inteligencia <br class="space">
                    Artificial en WhatsApp?
                    </h2>

                    <div class="containElement">
                        <div class="left">
                            <img alt="Ejecutiva usando Escala CRM para automatizar chats de WhatsApp, Instagram y Facebook con IA" src="{!! App::setFilePath('/assets/images/illustrations/others/automatiza-chats-precalifica leads-con-ia-en escala-crm.webp') !!}" loading="lazy">
                        </div>


                        <div class="right">
                            <ul>
                            <li><img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy"> <span><b>Atender automáticamente</b> mensajes de WhatsApp, Instagram y Facebook</span></li>
                                <li><img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy"> <span><b>Precalificar y asignar prospectos </b>estratégicamente a los vendedores</span></li>
                                <li><img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy"> <span><b>Agendar citas</b> según la disponibilidad de los vendedores</span></li>
                                <li><img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy"> <span><b>Responder preguntas frecuentes</b> y enviar materiales de marketing y venta</span></li>
                                <li><img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy"> <span><b>Cotizar</b>agrupando productos seleccionados y dar descuentos</span></li>
                                <li><img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy"> <span><b>Actualizar data en el CRM en tiempo real</b> según el avance de cada conversación</span></li>
                            </ul>
                            <span>
                                ¡Y más!
                            </span>
                        </div>
                    </div>
                    <img class="bgCard" src="{!! App::setFilePath('/assets/images/banners/bg-contain-left.svg') !!}" loading="lazy">

                </section>
                <section class="innerSectionElement sct2">
                    

                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Empezar ahora →
                        </a>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent landing_sem_base_2_1">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                    ¿Por qué elegir Escala CRM?
                    </h2>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-ia-automatizas.webp') !!}"
                                alt="">
                            <span>
                                Las automatizaciones son avanzadas y fáciles de configurar
                            </span>

                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-crm-centralizar.webp') !!}"
                                alt="">
                            <span>
                                Recibes el mejor soporte y acompañamiento del mercado. No te dejamos solo
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-acompañamiento.webp') !!}"
                                alt="">
                            <span>
                                Como CRM “todo-en-uno” encuentras otras herramientas de marketing y ventas integradas en un solo lugar
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-implementacion.webp') !!}"
                                alt="">
                            <span>
                                Puedes elegir automatizar con o sin Inteligencia Artificial
                            </span>
                        </div>


                    </div>
                </section>
            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Descubre el poder Escala →
                </a>
            </div>
        </section>


        <section class="customSection sectionParent landing_sem_base_6">

            <div class="section-row ">
                <div class="row sct1">
                    <div class="text-center col-12">
                        <h2 class="title">
                            ¿Qué dicen nuestros clientes?
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

                                        <div class="cardImg">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-bandera-col.webp') !!}" loading="lazy">
                                            <span>Colombia</span>
                                        </div>
                                        <div class="cardStart">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-stars-yellow.png') !!}"
                                                alt="">
                                        </div>
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
                                        <div class="cardImg">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-bandera-col.webp') !!}" loading="lazy">
                                            <span>Colombia</span>
                                        </div>
                                        <div class="cardStart">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-stars-yellow.png') !!}"
                                                alt="">
                                        </div>
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
                                        <div class="cardImg">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-bandera-col.webp') !!}" loading="lazy">
                                            <span>Colombia</span>
                                        </div>
                                        <div class="cardStart">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-stars-yellow.png') !!}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>

        <section class="customSection sectionParent landing_sem_base_7">
            <div class="section-row " style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-automatizaciones-ia.webp') }}')">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/alfonso-ceo-escala.webp') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                            Automatiza y Escala tus<br class="DT_e">operaciones de venta
                            </h2>
                            <span>
                                Solicita una sesión personalizada y gratuita.

                            </span>
                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Empezar ahora →
                            </a>

                        </div>
                    </section>



                </div>
            </div>
        </section>






        <section class="customSection sectionParent landing_sem_base_8">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        Preguntas Frecuentes
                    </h2>

                    <div class="containElement faq-accordion">
                        <div class="faq-card">
                            <div class="img">
                                <img alt="" src="{!! App::setFilePath('/assets/images/illustrations/others/preguntas-frecuentes-whatsapp.webp') !!}" loading="lazy">
                            </div>
                            <div class="info">
                                <button class="faq-question" type="button">
                                    ¿Necesito saber de tecnología o programación para usar las automatizaciones?
                                    <span class="faq-arrow" aria-hidden="true" style="display:inline-block;vertical-align:middle;transition:transform 0.3s;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:inline-block">
                                            <path d="M6 10L12 16L18 10" stroke="#007F96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>

                                </button>
                                <div class="faq-answer" style="display:none;">
                                    <span>
                                        No. Escala está diseñado para equipos de ventas y marketing, no para técnicos. Nuestro equipo te ayuda a configurar todo y puedes crear o modificar automatizaciones sin escribir una sola línea de código.
                                    </span>
                                </div>
                                <hr>

                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="img">
                                <img alt="" src="{!! App::setFilePath('/assets/images/illustrations/others/preguntas-frecuentes-whatsapp-celular.webp') !!}" loading="lazy">
                            </div>
                            <div class="info">
                                <button class="faq-question" type="button">
                                    ¿Qué tan difícil es crear y modificar flujos automatizados?
                                    <span class="faq-arrow" aria-hidden="true" style="display:inline-block;vertical-align:middle;transition:transform 0.3s;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:inline-block">
                                            <path d="M6 10L12 16L18 10" stroke="#007F96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>

                                </button>
                                <div class="faq-answer" style="display:none;">
                                    <span>
                                        Relativamente fácil. Con Escala, puedes armar flujos con un editor visual que usas con pocos clicks. Si necesitas ayuda, siempre podrás pedir apoyo a nuestro equipo.
                                    </span>
                                </div>
                                <hr>

                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="img">
                                <img alt="" src="{!! App::setFilePath('/assets/images/illustrations/others/preguntas-frecuentes-vendedores.webp') !!}" loading="lazy">
                            </div>
                            <div class="info">
                                <button class="faq-question" type="button">
                                    ¿Cuánto tiempo toma implementarlo?
                                    <span class="faq-arrow" aria-hidden="true" style="display:inline-block;vertical-align:middle;transition:transform 0.3s;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:inline-block">
                                            <path d="M6 10L12 16L18 10" stroke="#007F96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="faq-answer" style="display:none;">
                                    <span>
                                        Dependiendo del tipo de automatización pueden ser minutos o un par de horas. No es lo mismo automatizar el envío de un email post-registro (en segundos) a entrenar al Agente de Inteligencia Artificial para que precalifique prospectos.
                                    </span>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="img">
                                <img alt="" src="{!! App::setFilePath('/assets/images/illustrations/others/preguntas-frecuentes-automatizar.webp') !!}" loading="lazy">
                            </div>
                            <div class="info">
                                <button class="faq-question" type="button">
                                    ¿Qué es un CRM?
                                    <span class="faq-arrow" aria-hidden="true" style="display:inline-block;vertical-align:middle;transition:transform 0.3s;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:inline-block">
                                            <path d="M6 10L12 16L18 10" stroke="#007F96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>

                                </button>
                                <div class="faq-answer" style="display:none;">
                                    <span>
                                        Un CRM (Customer Relationship Management) es una herramienta que te ayuda a organizar, gestionar y dar seguimiento a todos los contactos y oportunidades de venta de tu empresa.<br class="DT_e">
                                        <br class="space">
                                        <br class="space">
                                        En lugar de tener la información dispersa en Excel, correos o chats, un CRM centraliza todo en un solo lugar para que tu equipo sepa a quién contactar, cuándo hacerlo y con qué mensaje.<br class="DT_e">
                                        <br class="space">
                                        <br class="space">
                                        Con un buen CRM, podés hacer seguimiento a cada cliente desde que muestra interés hasta que te compra… y después también.

                                    </span>
                                </div>

                            </div>
                        </div>


                    </div>

                </section>

            </div>

        </section>


    </div>




</div>
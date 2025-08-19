<div id="landing_sem_base">
    <div class="sections">
        <section id="lead-form" class="hero2025 landing_sem_base_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/fondo-banner-crm-educacion-2.webp') !!}')">

                <div class="section-row">

                    <section class="innerSectionElement sct1">
                        <div class="sectionText">

                            <h1 class="principalBigTitle">
                                Convierte más <br class="DT_e"> alumnos con un
                                <span class="span-educacion">CRM <br class="DT_e"> para educación</span>
                            </h1>


                            <p class="principalBigText">
                                Organiza y automatiza tu proceso de <br class="DT_e">
                                captación con una herramienta diseñada para <br class="DT_e">
                                universidades, colegios y empresas <br class="DT_e">
                                educativas.
                            </p>
                            <div class="containerImage">
                                <div class="video-cover" id="video-cover-landing" tabindex="0" data-video-src="https://player.vimeo.com/video/1097895831?autoplay=1">
                                    <img alt="Andres presentando Escala CRM diseñado para educación" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-crm-para-educacion.webp') !!}" loading="lazy">
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
                                <img alt="Andres presentando Escala CRM diseñado para educación" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-crm-para-educacion.webp') !!}" loading="lazy">

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
                        ¿Cuántas inscripciones pierden por tener <br class="DT_e"> herramientas obsoletas?
                    </h2>


                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/visibilidad.webp') !!}"
                                alt="">
                            <span>
                                Interesados que se enfrían por falta de seguimiento
                            </span>

                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/registro-vendedores.webp') !!}"
                                alt="">
                            <span>Información dispersa en distintos lugares</span>
                        </div>

                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/visibilidad-desempeño.webp') !!}"
                                alt="">
                            <span>Poca visibilidad del proceso de venta y sus resultados</span>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/vendedores-leads.webp') !!}"
                                alt="">
                            <span>Equipo perdiendo tiempo en tareas operativas</span>
                        </div>

                    </div>
                </section>
                <span class="parrafo span-blue-400">
                    ¡Cada período de admisiones es una carrera contra el reloj!
                </span>

            </div>


        </section>


        <section class="w-full customSection sectionParent landing_sem_base_4">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">
                        <h2 class="primaryTitle">
                            Centraliza y automatiza tu proceso <br class="DT_e">
                            de admisión con Escala
                        </h2>
                        <span>
                            Con nuestro CRM todo-en-uno inteligente, podrán:
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
                        'img' => App::setFilePath('/assets/images/illustrations/others/actualizar-informacion-de-contactos-2.webp'),
                        'text' => '<span>Registrar y organizar<br class="DT_e">automáticamente listas</span>de contactos y<br class="DT_e"> oportunidades de venta.',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_2',
                        'img' => App::setFilePath('/assets/images/illustrations/others/comunicaciones-inbox-omnicanal.webp'),
                        'text' => '<span>Centralizar y automatizar<br class="DT_e">conversaciones</span> de WhatsApp,<br class="DT_e">Instagram y Facebook',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_3',
                        'img' => App::setFilePath('/assets/images/illustrations/others/guardar-historial-conversaciones.webp'),
                        'text' => '<span>Asignar y guardar el historial</span><br class="DT_e">automáticamente de las interacciones<br class="DT_e">con cada contacto.',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_4',
                        'img' => App::setFilePath('/assets/images/illustrations/others/guardar-historial-crm.webp'),
                        'text' => '<span>Agendar citas y recibir recordatorios<br class="DT_e">automáticamente</span>',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_5',
                        'img' => App::setFilePath('/assets/images/illustrations/others/Campañas-email-anuncios.webp'),
                        'text' => '<span>Desarrollar campañas de email y <br class="DT_e">anuncios digitales</span>integradas al CRM',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_6',
                        'img' => App::setFilePath('/assets/images/illustrations/others/reportes-paginas-sem.webp'),
                        'text' => '<span>Generar reportes en tiempo real</span> y ver<br class="DT_e">detalles del proceso comercial',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1




                    </div>
                </section>

            </div>

        </section>

        <section class="customSection sectionParent landing_sem_base_3_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="primaryTitle">
                        ¿Qué puede hacer el Agente de Inteligencia Artificial en WhatsApp?
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

            </div>

        </section>
        <section class="customSection sectionParent landing_sem_base_3_0">

            <div class="section-row ">
                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner-sem-education.svg') }}')">
                    <div class="cards left">
                        <p>“Diseñamos Escala considerando las estrategias y <br class="DT_e">
                            mejores prácticas que le permitieron a Open English <br class="DT_e">
                            convertirse en la empresa educativa #1 de América <br class="DT_e">
                            Latina”</p>

                        <span class="colorEspecial">
                            <b>Andrés Moreno,</b> <br class="space">
                            Fundador de escala & Open English
                        </span>
                    </div>
                    <div class="cards right ">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/am-fundador-escala-open-english-banner.webp') !!}"
                            alt="">
                    </div>
                </section>

                <section class="innerSectionElement sct2" style="padding-top: 100px;">

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
                    <h2 class="primaryTitle" style="margin-bottom: 0px!important;">
                        ¿Por qué elegir Escala?
                    </h2>
                    <span>
                   Si bien otros CRMs en el mercado pueden tener algunas de estas características, no hay otro que las cumpla todas al mismo tiempo:
                    </span>
                </section>
               <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/agentes-ia-avanzados.webp') !!}"
                                alt="">
                            <span>
                            Cuenta con Agentes de Inteligencia Artificial avanzados
                            </span>

                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-ia-automatizas.webp') !!}"
                                alt="">
                            <span>
                            Fácil de usar, tu equipo comercial sí lo querrá usar.
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-ia-integraciones.webp') !!}"
                                alt="">
                            <span>
                            Integra múltiples herramientas de marketing y ventas nativamente
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/recibes-acompañamiento.webp') !!}"
                                alt="">
                            <span>
                            Recibes el mejor acompañamiento experto del mercado.
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/servicio-en-español.webp') !!}"
                                alt="">
                            <span>
                            Software con tutoriales y servicio al cliente 100% en español
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/escalar-tu-empresa.webp') !!}"
                                alt="">
                            <span>
                            El CRM escala con tu empresa
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
            <div class="section-row " style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-crm-educacion-2.webp') }}')">
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
                                Empieza a inscribir más <br class="DT_e">
                                estudiantes ahora
                            </h2>
                            <span>
                                Solicita una sesión gratuita y personalizada.
                            </span>
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
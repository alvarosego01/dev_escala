<div id="landing_sem_base">
    <div class="sections">
        <section id="lead-form" class="hero2025 landing_sem_base_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/fondo-banner-whatsapp-crm-escala.webp') !!}')">

                <div class="section-row">

                    <section class="innerSectionElement sct1">
                        <div class="sectionText">

                            <h1 class="principalBigTitle">
                                <span>WhatsApp +<br class="DT_e">
                                    Escala CRM:</span> vende <br class="DT_e">
                                más sin perder <br class="DT_e">
                                conversaciones
                            </h1>


                            <p class="principalBigText">
                                ¿Y si tu equipo pudiera responder cada <br class="DT_e">
                                mensaje, hacer seguimiento y cerrar más <br class="DT_e">
                                ventas… desde un solo software que tú<br class="DT_e">
                                puedes controlar?
                            </p>
                            <div class="containerImage">
                                <div class="video-cover" id="video-cover-landing" tabindex="0" data-video-src="https://player.vimeo.com/video/1097895831?autoplay=1">
                                    <img alt="Andres presentando Escala CRM con integración a WhatsApp y automatización de ventas" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-crm-integracion-whatsapp.webp') !!}" loading="lazy">
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
                                <img alt="Andres presentando Escala CRM con integración a WhatsApp y automatización de ventas" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-crm-integracion-whatsapp.webp') !!}" loading="lazy">

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
                        ¿Cuántas ventas está perdiendo tu empresa por no <br class="space">
                        tener WhatsApp integrado al CRM?
                    </h2>

                    <span>
                        Cuando tu equipo comercial vende desde su WhatsApp personal:
                    </span>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/visibilidad.webp') !!}"
                                alt="">
                            <span>
                                No tienes visibilidad sobre <br class="DT_e">
                                las conversaciones ni el <br class="DT_e">
                                proceso comercial
                            </span>

                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/automatizar.webp') !!}"
                                alt="">
                            <span>No puedes automatizar <br class="DT_e">
                                respuestas ni hacer envíos<br class="DT_e">
                                masivos</span>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/conversasiones.webp') !!}"
                                alt="">
                            <span>Es más fácil que se pierdan <br class="DT_e">
                                conversaciones, data… y <br class="DT_e">
                                ventas</span>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/registro-vendedores.webp') !!}"
                                alt="">
                            <span>Si un vendedor se va de la <br class="DT_e">
                                empresa, se lleva la <br class="DT_e">
                                información con él</span>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/registros-crm.webp') !!}"
                                alt="">
                            <span>Tienen que copiar <br class="DT_e">
                                y pegar datos <br class="DT_e">
                                manualmente al CRM </span>
                        </div>

                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/vendedores-leads.webp') !!}"
                                alt="">
                            <span>Es manual y lento el proceso
                                de asignar y pasar información
                                de leads a vendedores</span>
                        </div>
                    </div>
                </section>
                <span>
                    ¡Necesitas una mejor solución! Una donde puedas <br class="DT_e">
                    tener <b>mayor orden y control</b>.
                </span>
            </div>


            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Vende más con Escala →
                </a>
            </div>
        </section>


        <section class="w-full customSection sectionParent landing_sem_base_4">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            Empodera a tus vendedores centralizando y <br class="space">
                            automatizando las ventas por WhatsApp (con o sin IA)
                        </h2>
                        <span>
                            Al tener WhatsApp Business directamente integrado al CRM <br class="space">
                            en el Inbox Omnicanal de Escala, tú y tu equipo podrán:
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
                        'img' => App::setFilePath('/assets/images/illustrations/others/recibir-y-responder-mensajes.webp'),
                        'text' => '<span>Recibir y responder mensajes</span> son Agentes <br class="DT_e"> desde un solo lugar',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_2',
                        'img' => App::setFilePath('/assets/images/illustrations/others/enviar-mensajes-masivos.webp'),
                        'text' => '<span>Enviar mensajes masivos</span>',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_3',
                        'img' => App::setFilePath('/assets/images/illustrations/others/asignar-conversaciones.webp'),
                        'text' => '<span>Asignar conversaciones</span> manual o <br class="DT_e">automáticamente a vendedores',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_4',
                        'img' => App::setFilePath('/assets/images/illustrations/others/guardar-historial-de-conversaciones.webp'),
                        'text' => '<span>Guardar el historial</span> de conversaciones <br class="DT_e">en el CRM',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_5',
                        'img' => App::setFilePath('/assets/images/illustrations/others/configurar-agentes-ia.webp'),
                        'text' => '<span>Configurar un Agente de IA</span> para que <br class="DT_e">atienda leads',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_6',
                        'img' => App::setFilePath('/assets/images/illustrations/others/actualizar-informacion-de-contactos.webp'),
                        'text' => '<span>Actualizar la información de contactos</span><br class="DT_e">automáticamente en el CRM',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_sem_base_5_7',
                        'img' => App::setFilePath('/assets/images/illustrations/others/crear-reportes.webp'),
                        'text' => 'Crear reportes de gestión <span>¡y más!</span>',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1


                    </div>
                </section>

            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Descubre el poder Escala →
                </a>
            </div>
        </section>

        <section class="customSection sectionParent landing_sem_base_3_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="primaryTitle">
                        ¿Qué puede hacer el Agente de Inteligencia <br class="space">
                        Artificial de Escala en WhatsApp?
                    </h2>

                    <div class="containElement">
                        <div class="left">
                            <img alt="Ejecutiva usando Escala CRM para automatizar chats de WhatsApp, Instagram y Facebook con IA" src="{!! App::setFilePath('/assets/images/illustrations/others/automatiza-chats-precalifica leads-con-ia-en escala-crm.webp') !!}" loading="lazy">
                        </div>


                        <div class="right">
                            <ul>
                                <li><img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy"> <span><b>Detectar mensajes nuevos</b> y atender miles de chats en segundos según lo hayas entrenado </span></li>
                                <li><img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy"> <span><b>Precalificar leads</b> y agendar citas con tu equipo </span></li>
                                <li><img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy"> <span><b>Enviar mensajes personalizados</b> y responder dudas frecuentes </span></li>
                                <li><img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy"> <span><b>Actualizar información</b> en el CRM según lo que se conversó </span></li>
                            </ul>
                            <span>
                                ¡Esto lo puede hacer también con conversaciones <br class="DT_e">
                                de Instagram y Facebook!
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
                        ¿Por qué elegir Escala CRM para mejorar <br class="space">
                        tu gestión de WhatsApp?
                    </h2>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-crm-centralizar.webp') !!}"
                                alt="">
                            <span>
                                Centralizas la gestión de WhatsApp en un CRM Todo-en-uno
                            </span>

                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-ia-automatizas.webp') !!}"
                                alt="">
                            <span>
                                Automatizas con Inteligencia Artificial, no estás limitado flujos y chatbots
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-implementacion.webp') !!}"
                                alt="">
                            <span>
                                Implementación y herramienta fácil de usar
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-acompañamiento.webp') !!}"
                                alt="">
                            <span>
                                Obtienes acompañamiento VIP para maximizar resultados
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-left"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-ia-integraciones.webp') !!}"
                                alt="">
                            <span>
                                Puedes integrar otras herramientas para seguir optimizando ventas
                            </span>
                        </div>

                    </div>
                </section>
            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Conocer Escala →
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
            <div class="section-row " style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-whatsapp-crm-escala.webp') }}')">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/Convierte-más-conversaciones-en-ventas-con Escala-CRM.webp') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                Vende más con WhatsApp <br class="DT_e"> integrado a tu CRM
                            </h2>
                            <span>
                                Solicita una sesión personalizada y gratuita.<br class="DT_e"> Te mostramos cómo Escala puede ayudarte a <br class="DT_e"> convertir más conversaciones en ventas.

                            </span>
                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Tener Sesión Personalizada →
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
                                    ¿Necesito tener una cuenta de WhatsApp Business activa?
                                    <span class="faq-arrow" aria-hidden="true" style="display:inline-block;vertical-align:middle;transition:transform 0.3s;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:inline-block">
                                            <path d="M6 10L12 16L18 10" stroke="#007F96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>

                                </button>
                                <div class="faq-answer" style="display:none;">
                                    <span>
                                        Sí, pero si no la tienes, te ayudamos a crearla e integrarla.
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
                                    ¿Puedo seguir usando WhatsApp desde mi celular?
                                    <span class="faq-arrow" aria-hidden="true" style="display:inline-block;vertical-align:middle;transition:transform 0.3s;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:inline-block">
                                            <path d="M6 10L12 16L18 10" stroke="#007F96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>

                                </button>
                                <div class="faq-answer" style="display:none;">
                                    <span>
                                        Sí, pero con Escala tendrás todo sincronizado y podrás ver los mensajes también desde el CRM.
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
                                    ¿Qué pasa si tengo varios vendedores atendiendo WhatsApp?
                                    <span class="faq-arrow" aria-hidden="true" style="display:inline-block;vertical-align:middle;transition:transform 0.3s;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:inline-block">
                                            <path d="M6 10L12 16L18 10" stroke="#007F96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="faq-answer" style="display:none;">
                                    <span>
                                        Perfecto. Escala distribuye y organiza las conversaciones automáticamente para que trabajen ordenada y eficientemente.
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
                                    ¿Puedo automatizar mensajes?
                                    <span class="faq-arrow" aria-hidden="true" style="display:inline-block;vertical-align:middle;transition:transform 0.3s;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:inline-block">
                                            <path d="M6 10L12 16L18 10" stroke="#007F96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>

                                </button>
                                <div class="faq-answer" style="display:none;">
                                    <span>
                                        Sí. Puedes automatizar saludos, seguimientos, respuestas frecuentes y mucho más con reglas o con Agentes de Inteligencia Artificial
                                    </span>
                                </div>
                                <hr>

                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="img">
                                <img alt="" src="{!! App::setFilePath('/assets/images/illustrations/others/preguntas-frecuentes-crm.webp') !!}" loading="lazy">
                            </div>
                            <div class="info">
                                <button class="faq-question" type="button">
                                    ¿Y si ya uso un CRM?
                                    <span class="faq-arrow" aria-hidden="true" style="display:inline-block;vertical-align:middle;transition:transform 0.3s;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:inline-block">
                                            <path d="M6 10L12 16L18 10" stroke="#007F96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>

                                </button>
                                <div class="faq-answer" style="display:none;">
                                    <span>
                                        Muchos de nuestros clientes vienen de otros CRM. Cuando ven lo que pueden hacer con Escala + WhatsApp, prefieren nuestras soluciones.
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
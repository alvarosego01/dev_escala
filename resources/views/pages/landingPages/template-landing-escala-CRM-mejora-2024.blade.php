<div id="landing_CRM_2024">

    <div class="sections">


        <section id="lead-form" class="hero2025 landing_CRM_2024_0">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-hero-crm-2025-01.png') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <h1 class="principalBigTitle">
                                El CRM
                                <br class="space">
                                todo-en-uno con
                                <br class="space">
                                <span>Inteligencia Artificial</span>
                            </h1>

                            <h1 class="principalBigTitleMb">
                                El CRM
                                <br class="space">
                                todo-en-uno con
                                <br class="space">
                                <span>Inteligencia Artificial</span>

                            </h1>
                            <p class="principalBigText">
                                Multiplica tus clientes usando <br class="DT_e">
                                herramientas de marketing y <br class="DT_e">
                                ventas en un solo lugar
                            </p>
                            <div class="containerImage">
                                <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/ceo-escala-alfonso-2025.png') !!}" loading="lazy">
                                <img class="iconClick" src="{!! App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') !!}" loading="lazy" onclick="openVideoPopup()">
                            </div>
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img class="iconClick" src="{!! App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') !!}" loading="lazy" onclick="openVideoPopup()">
                            <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/ceo-escala-alfonso-2025.png') !!}" loading="lazy">
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


        <section class="customSection sectionParent landing_CRM_2024_1">
            <img class="imgFlotante" src="{!! App::setFilePath('/assets/images/banners/bg-fondo-blur-blue.svg') !!}" loading="lazy">
            <img class="imgFlotante2" src="{!! App::setFilePath('/assets/images/banners/bg-fondo-blur-blue.svg') !!}" loading="lazy">
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



        <section class="w-full customSection sectionParent landing_CRM_2024_2">
            <div class="section-row">
                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            ¿Por qué tu empresa necesita el <br class="DT_e">
                            CRM de Escala?
                        </h2>
                        <p>
                            CRM= Customer Relationship Management <br class="space">
                            <span> (Gestión de Relaciones con Clientes)</span>
                        </p>
                    </div>
                </section>
                <section class="innerSectionElement sct2 ">

                    <div class="containElements">
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-chica-escala-feliz-crm-1.webp') !!}" loading="lazy">
                            <img class="imgMb" src="{!! App::setFilePath('/assets/images/illustrations/others/img-chica-escala-feliz-crm-1-mb.webp') !!}" loading="lazy">
                        </div>
                        <div class="info-second">
                            <p>
                                Muchos negocios pierden ventas porque <br class="space">
                                no tienen una forma clara de dar <br class="space">
                                seguimiento a cada oportunidad. <br class="space">
                                <br class="space">
                                Un CRM es un sistema que ayuda a las <br class="space">
                                empresas a:
                            </p>
                            <ul>
                                <li>Centralizar</li>
                                <li>Organizar</li>
                                <li>Automatizar</li>
                                <li>Mejorar</li>
                            </ul>
                            <p>
                                La manera en que gestionan sus <br class="DT_e">
                                interacciones con clientes y prospectos.
                            </p>

                        </div>

                </section>
            </div>
        </section>


        <section class="w-full customSection sectionParent landing_CRM_2024_3">
            <div class="section-row">
                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            ¿Cómo te ayuda el CRM <br class="space">
                            de Escala?
                        </h2>

                    </div>
                </section>
                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <div class="info-second">
                            <ul>
                                <li> <img src="{!! App::setFilePath('/assets/images/icons/check-crm-li-1.svg') !!}" loading="lazy"> Gestionar mejor las relaciones con <br class="DT_e"> leads y clientes</li>
                                <li> <img src="{!! App::setFilePath('/assets/images/icons/check-crm-li-1.svg') !!}" loading="lazy"> Optimizar los procesos de venta</li>
                                <li> <img src="{!! App::setFilePath('/assets/images/icons/check-crm-li-1.svg') !!}" loading="lazy"> Aumentar la productividad del <br class="DT_e"> equipo</li>
                                <li> <img src="{!! App::setFilePath('/assets/images/icons/check-crm-li-1.svg') !!}" loading="lazy"> Tomar decisiones basadas en datos</li>
                                <li> <img src="{!! App::setFilePath('/assets/images/icons/check-crm-li-1.svg') !!}" loading="lazy"> Escalar operaciones ¡y más!.</li>
                            </ul>
                        </div>

                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-crm-como-te-ayuda-escala.png') !!}" loading="lazy">
                        </div>

                    </div>
                </section>
                <div class="btnCenter">
                    <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                        Tener sesión personalizada →
                    </a>
                </div>

            </div>

        </section>



        <section class="w-full customSection sectionParent landing_CRM_2024_5">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            ¿Qué logras con el CRM de Escala?
                            <br class="space">
                            Gestiona y optimiza tu proceso comercial
                        </h2>

                    </div>
                </section>

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_6',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/Captura-Automatica-de-Interesados.gif'),
                        'title' => '
                        Captura automática de <br class="DT_e"> interesados
                        ',
                        'text' => 'Clientes potenciales llegan por formularios, <br class="DT_e">
                        WhatsApp, redes sociales o campañas y su <br class="DT_e">
                        información se guarda automáticamente al CRM.',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_6_1',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/Seguimiento-Oportuno.gif'),
                        'title' => 'Seguimiento oportuno
                        ',
                        'text' => 'Se programan mensajes automáticos (por <br class="DT_e">
                        WhatsApp o email) con información de tus <br class="DT_e">
                        productos o servicios y sus beneficios, <br class="DT_e">
                        adaptados según el interés de cada prospecto.',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_6_2',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/gifs/Clasificacion-Estrategica-de-Leads.gif',
                        ),
                        'title' => 'Clasificación estratégica <br class="DT_e"> de leads',
                        'text' =>
                        'El CRM permite identificar quién está listo para <br class="DT_e">
                        comprar, quién solo pidió info y quién necesita <br class="DT_e">
                        más seguimiento.
                        ',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_6_3',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/gifs/Gestion-Eficiente-del-Embudo.gif',
                        ),
                        'title' => 'Gestión eficiente del embudo
                        ',
                        'text' => 'Puedes llevar un mejor control del proceso comercial <br class="DT_e">
                        pasando prospectos por etapas como: nuevo lead, <br class="DT_e">
                        primer contacto, visita agendada, visita realizada, <br class="DT_e">
                        en evaluación y venta. Así mides, analizas, anticipas <br class="DT_e">
                        y priorizas.
                        ',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_6_4',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/Agendamiento-y-Recordatorios-Automaticos.gif'),
                        'title' => 'Agendamiento y recordatorios <br class="DT_e"> automáticos
                        ',
                        'text' => 'Cada vendedor tiene un calendario con un link único <br class="DT_e">
                        que puede compartir con sus prospectos para que <br class="DT_e">
                        reserven un espacio disponible en su agenda. Una <br class="DT_e">
                        vez agendan, dispara recordatorios automatizados <br class="DT_e">
                        para aumentar asistencia. También pueden crear y <br class="DT_e">
                        priorizar listas de tareas con recordatorios.
                        ',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_6_5',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/gifs/Reportes-de-Venta-en-Tiempo-Real.gif',
                        ),
                        'title' => 'Reportes de venta en <br class="DT_e"> tiempo real
                        ',
                        'text' => 'Puedes tener una visión 360 del negocio con <br class="DT_e">
                        información como: cuántas oportunidades se <br class="DT_e">
                        ganaron, qué campaña de marketing trajo más <br class="DT_e">
                        ventas y qué vendedor cerró más.
                        ',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1
                    </div>
                </section>

            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Empezar ahora →
                </a>
            </div>
        </section>



        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landing_CRM_2024_7',
        'enableTitle' => true,
        'titlePrincipal' => '
        Descubre el poder de tener todas las herramientas <br class="space">
        en una sola plataforma
        ',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => false,
        'elements' => [
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/crm-gestion-icons.png'),
        'title' => '
        CRM (Gestión <br class="space">
        de contactos)
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/ai-escala-icons-whatsapp.png'),
        'title' => '
        Inteligencia <br class="space">
        Artificial
        ',
        'enableButton' => false,
        ],

        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/inbox-omnicanal-icons.png'),
        'title' => '
        Centro de <br class="space">
        Conversaciones
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/automatizacion-icons.png'),
        'title' => '
        Flujos de <br class="space">
        Automatización
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/app-escala-icons.png'),
        'title' => '
        App móvil <br class="space">
        de Escala
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/email-marketing-icons.png'),
        'title' => '
        Email <br class="space">
        Marketing
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/calendario-escala.png'),
        'title' => '
        Agendamiento <br class="space"><br class="space">
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/anuncios-icons.png'),
        'title' => '
        Anuncios <br class="space">
        Digitales
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/landing-pages-icons.png'),
        'title' => '
        Landing <br class="space">
        Pages
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/reportes-personalizados.png'),
        'title' => '
        Reportes <br class="space">
        Personalizados
        ',
        'enableButton' => false,
        ],
        ],
        ];
        @endphp

        @contain_multiple_cards_T2($parameters)
        @endcontain_multiple_cards_T2




        <section class="customSection sectionParent landing_CRM_2024_8">

            <div class="section-row">
                <section class="innerSectionElement sct0">

                    <h2 class="primaryTitle">
                        ¡Ningún otro CRM te acompaña mejor!
                        <br class="space">
                        Te guiamos a implementarlo exitosamente
                    </h2>
                </section>

                <div class="containElements">

                    <section class="innerSectionElement sct1" style="background-image: url({!! App::setFilePath('/assets/images/banners/bg-card-implementacion-guiada.svg') !!})">
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-implementacion-guiada.png') !!}" loading="lazy">
                        </div>
                        <h3 class="subtiTitle">
                            Implementación <br class="space"> Guiada
                        </h3>
                        <a href="https://escala.com/implementacion-guiada/">Conocer más →</a>
                    </section>

                    <section class="innerSectionElement sct2" style="background-image: url({!! App::setFilePath('/assets/images/banners/bg-card-implementacion-llave-en-mano.svg') !!})">
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-implementacion-llave-en-mano.png') !!}" loading="lazy">
                        </div>
                        <h3 class="subtiTitle">
                            Implementación <br class="space"> Llave en Mano
                        </h3>
                        <a href="https://escala.com/implementacion-llave-en-mano/">Conocer más →</a>
                    </section>
                </div>
            </div>


        </section>



        <section class="customSection sectionParent landing_CRM_2024_9">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        Lo que dicen nuestros clientes <br class="space">
                        sobre el CRM de Escala:
                    </h2>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="img-left">
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-trustpilot-reseña-1.png') !!}" loading="lazy">
                        </div>
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-trustpilot-reseña-2.png') !!}" loading="lazy">
                        </div>
                    </div>
                    <div class="img-right">
                        <div class="containerImage">

                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-trustpilot-reseña-3-mb.png') !!}" class="img-mb" loading="lazy">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-trustpilot-reseña-3.png') !!}" loading="lazy">
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent landing_CRM_2024_10">

            <div class="section-row" style="background-image: url({!! App::setFilePath('/assets/images/banners/bg-section-10-crm-2025.svg') !!})">
                <section class="innerSectionElement sct1">
                    <div class="img-left">
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-am-escala.png') !!}" loading="lazy">
                        </div>

                    </div>
                    <div class="text-right">
                        <p>
                            <b>“El CRM es el corazón de las operaciones <br class="space">
                                de todo negocio.</b> Diseñamos Escala para <br class="space">
                            facilitarle a pequeñas y medianas empresas <br class="space">
                            tener una cultura cliente-céntrica y optimizar <br class="space">
                            resultados de venta/servicio”.
                        </p>
                        <span>
                            <b>Andrés Moreno,</b> <br class="space">
                            Fundador de escala & Open English
                        </span>
                    </div>
                </section>
            </div>

        </section>


        <section class="w-full customSection sectionParent landing_CRM_2024_11">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        Empezar a escalar tu negocio <br class="space">
                        es muy sencillo:
                    </h2>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="groupElements">
                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-card-formularios.png') !!}" loading="lazy">
                            </div>
                        </div>
                        <div class="info">
                            <h3 class="secondaryTitle">
                                Inscríbete en el <br class="space">
                                formulario y un <br class="space">
                                especialista te <br class="space">
                                contactará
                                <br class="space">
                                <br class="space">
                            </h3>
                        </div>
                    </div>
                    <div class="groupElements">
                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-card-tour.png') !!}" loading="lazy">
                            </div>
                        </div>
                        <div class="info">
                            <h3 class="secondaryTitle">
                                Recibe un tour <br class="space">
                                personalizado y gratuito <br class="space">
                                por la plataforma
                                <br class="space">
                                <br class="space">
                                <br class="space">
                            </h3>
                        </div>
                    </div>
                    <div class="groupElements">
                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-card-plan.png') !!}" loading="lazy">
                            </div>
                        </div>
                        <div class="info">
                            <h3 class="secondaryTitle">
                                Escoge el plan que <br class="space">
                                se adapte a tu <br class="space">
                                empresa y empieza <br class="space">
                                a mejorar tus <br class="space">
                                resultados
                            </h3>
                        </div>
                    </div>
                </section>

            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Empezar ahora →
                </a>
            </div>
        </section>

        <!-- Popup (inicialmente oculto) -->
        <div id="videoPopup">
            <div class="videoInterno">
                <button onclick="closeVideoPopup()">×</button>
                <video id="popupVideo" controls poster="{!! App::setFilePath('/assets/images/illustrations/others/img-cover-video-am.png') !!}">
                    <source src="{!! App::setFilePath('/assets/videos/¿por_qué_tu_empresa_necesita_escala_ (720p).mp4') !!}" type="video/mp4">
                </video>
            </div>
        </div>

        <script>
            function openVideoPopup() {
                const popup = document.getElementById('videoPopup');
                const video = document.getElementById('popupVideo');

                popup.style.display = 'flex';

                // Forzar la reproducción programáticamente
                video.play().catch(error => {
                    console.log('La reproducción automática fue prevenida:', error);
                    // Mostrar controles si la reproducción automática falla
                    video.controls = true;
                });
            }

            function closeVideoPopup() {
                const popup = document.getElementById('videoPopup');
                const video = document.getElementById('popupVideo');

                popup.style.display = 'none';
                video.pause();
                video.currentTime = 0; // Reiniciar el video
            }

            // Cerrar al hacer clic fuera del video
            document.getElementById('videoPopup').addEventListener('click', function(e) {
                if (e.target === this) closeVideoPopup();
            });
        </script>
    </div>


</div>
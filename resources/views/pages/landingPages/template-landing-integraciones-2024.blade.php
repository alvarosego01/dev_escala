<div id="landing_integraciones_2024">

    <div class="sections">
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

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_integraciones_2024 landing_integraciones_2024_0 ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_integraciones_0.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala" src="{{ App::setFilePath('/assets/images/person/am/andres-moreno-integraciones.png') }}" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">

                                            <span>
                                                Maximiza tu productividad

                                            </span>

                                            integrando las herramientas <br class="space">
                                            que necesites a tu CRM
                                            <br class="space">
                                        </h1>

                                        <p class="principalBigText grayColorTexts">

                                            ¡Conecta, gestiona y crece en Escala!
                                        </p>

                                        <div class="elements hideOnmobile hideOnTablet">

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

                                </div>



                            </div>
                            <div class="form7 col-md-12 col-lg-4 ">

                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <h5 class="titleFormat blackcolor">Recibe un demo-tour <br class="space">
                                            personalizado de Escala</h5>


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

                            <div class="imageReviewsMobile hideOnDesktop">

                                <div class="image">
                                    <div class="containerImage">
                                        <img alt="Ilustración Andrés Moreno, CEO de Escala" src="{{ App::setFilePath('/assets/images/person/am/andres-moreno-integraciones.png') }}" loading="lazy">
                                    </div>

                                </div>

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
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    @endforeach

                                </div>

                            </div>





                        </div>

                    </section>

                </div>



            </div>

        </section>

        @php
        $elements = [
        [
        'img' => App::setFilePath('/assets/images/illustrations/others/icon-integraciones-escala-optimizar.png'),
        'title' => '
        Optimiza la gestión<br class="space"> de datos
        ',
        'enableButton' => false,
        ],
        [
        'img' => App::setFilePath('/assets/images/illustrations/others/icon-integraciones-escala-mejorar.png'),
        'title' => '
        Mejora la experiencia<br class="space"> del cliente
        ',
        'enableButton' => false,
        ],
        [
        'img' => App::setFilePath('/assets/images/illustrations/others/icon-integraciones-escala-aumentar.png'),
        'title' => '
        Aumenta la eficiencia<br class="space"> de tu equipo
        ',
        'enableButton' => false,
        ]
        ]
        @endphp


        <section class="component-info-multiple-cards-T2 customSection sectionParent landing_integraciones_2024_1 ">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">

                            Ventajas de integrar otros <br class="space">
                            <span>softwares a Escala</span>

                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2 ">

                    @foreach ($elements as $item)

                    {{-- style="background-image: url({!! App::setFilePath('/assets/images/illustrations/others/box_container_medium_integraciones.png') !!})" --}}
                    <div class="groupElements">

                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! $item['img'] !!}" loading="lazy">
                            </div>
                        </div>
                        <div class="info">

                            <h3 class="secondaryTitle">
                                {!! $item['title'] !!}

                            </h3>

                        </div>

                        {{-- <img src="{!! App::setFilePath('/assets/images/illustrations/others/box_container_medium_integraciones.png') !!}" alt="" class="bgOverlay"> --}}

                        <svg class="bgOverlay" xmlns="http://www.w3.org/2000/svg" width="423" height="321" viewBox="0 0 423 321" fill="none">
                            <g filter="url(#filter0_d_13_2816)">
                                <path d="M30 73.9662C30 58.1275 42.3127 45.0176 58.1202 44.0251L361.12 25.0015C378.394 23.917 393 37.6346 393 54.9426V254.5C393 271.069 379.569 284.5 363 284.5H60C43.4315 284.5 30 271.069 30 254.5V73.9662Z" fill="white" />
                            </g>
                            <defs>
                                <filter id="filter0_d_13_2816" x="0" y="0.941406" width="423" height="319.559" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="6" />
                                    <feGaussianBlur stdDeviation="15" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.211765 0 0 0 0 0.462745 0 0 0 0 0.541176 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_13_2816" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_13_2816" result="shape" />
                                </filter>
                            </defs>
                        </svg>

                    </div>

                    @endforeach

                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibir un demo
                        </a>
                    </div>
                </section>

            </div>


        </section>


        @php
        $elements = [
        [
        'type' => 'backgroundColor',
        'classSection' => 'landing_integraciones_2024_3',
        'enableTitle' => true,
        'titlePrincipal' => '
        Conoce las integraciones <br class="space"><span> nativas de Escala</span>
        ',
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/integraciones-zoom.png'),
        'title' => '
        Integración con <br class="space">
        <span>Zoom</span>
        ',
        'text' => '<span>Registra contactos y actividades de forma automatica.</span>
        <br class="space">
        <br class="space">
        Al realizar reuniones desde la herramienta Zoom, puedes hacer registro de determinados datos al integrarlo con Escala.',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'right',
        ],
        [
        'type' => 'backgroundColor',
        'classSection' => 'landing_integraciones_2024_4',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath(
        '/assets/images/illustrations/others/integraciones-woocommerce.png',
        ),
        'title' => '
        Integración con <br class="space">
        <span>Woocommerce</span>
        ',
        'text' => '<span>Guarda la información de tus usuarios. </span>
        <br class="space"><br class="space">
        Al integrar WooCommerce con Escala, podrás registrar la inforación de tus clientes de forma automática a momento de que finalicen una compra.
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'left',
        ],
        [
        'type' => 'backgroundColor',
        'classSection' => 'landing_integraciones_2024_5',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath(
        '/assets/images/illustrations/others/integraciones-aircall.png',
        ),
        'title' => '
        Integración con <br class="space">
        <span>Aircall</span>
        ',
        'text' => '<span>Maximiza tu comunicación telefónica.</span>
        <br class="space">
        <br class="space">
        Al integrar esta herramienta con Escala, podrás realizar llamadas telefónicas a tus contactos, crear notas, dejar registro y grabaciones. Todo gestionado desde Escala.
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'right',
        ],
        [
        'type' => 'backgroundColor',
        'classSection' => 'landing_integraciones_2024_6',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath(
        '/assets/images/illustrations/others/integraciones-siigo.png',
        ),
        'title' => '
        Integración con <br class="space">
        <span>Siigo</span>
        ',
        'text' => '<span>Centraliza la información del registro de tus facturas.</span>
        <br class="space">
        <br class="space">
        Con esta integración, podrás crear oportunidades desde tu cuenta Escala a partir de Facturas
        emitidas en SIIGO y también crear información en SIIGO a través de la creación de oportunidades
        en determinada etapa desde Escala.
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'left',
        ],
        [
        'type' => 'backgroundColor',
        'classSection' => 'landing_integraciones_2024_6',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath(
        '/assets/images/illustrations/others/integraciones-typeform.png',
        ),
        'title' => '
        Integración con <br class="space">
        <span>Typeform</span>
        ',
        'text' => '<span>Genera formularios inteligentes</span>
        <br class="space">
        <br class="space">
        Al crear un formulario en Typeform e integrarlo con Escala, podrás crear o actualizar contactos en tu CRM, permitiendote optimizar la gestión de leads y clientes.
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'right',
        ],
        [
        'type' => 'backgroundColor',
        'classSection' => 'landing_integraciones_2024_6',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/integraciones-calendly.png'),
        'title' => '
        Integración con <br class="space">
        <span>Calendly</span>
        ',
        'text' => '<span>Optimiza el trabajo de tu equipo.</span>
        <br class="space">
        <br class="space">

        Al programar reuniones o consultas con Calendly, se creará o actualizará de forma automática en el CRM, las actividades y los contactos vinculados.
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'left',
        ],
        [
        'type' => 'backgroundColor',
        'classSection' => 'landing_integraciones_2024_6',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath(
        '/assets/images/illustrations/others/integraciones-zapier.png',
        ),
        'title' => '
        Integración con <br class="space">
        <span>Zapier</span>
        ',
        'text' => '<span>Conecta otras plataformas a Escala,</span>
        <br class="space">
        <br class="space">
        Con esta integración, tienes la libertad de enlazar diferentes herramientas y plataformas a tu CRM a través de Zapier.
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'right',
        ],
        [
        'type' => 'backgroundColor',
        'classSection' => 'landing_integraciones_2024_6',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/integraciones-sheets.png'),
        'title' => '
        Integración con <br class="space">
        <span>Google Sheets</span>
        ',
        'text' => '<span>Respalda la información de tus contactos de forma automática.</span>
        <br class="space">
        <br class="space">

        Al crear o actualizar un contacto en Escala, podrás guardar de forma automática toda la información del contacto en Google Sheet al realizar esta integración, personalizando también los campos que desees. ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'left',
        ],
        ];
        @endphp
        <div class="sectionInfo_1">

            @if (isset($elements) && count($elements) > 0)
            @foreach ($elements as $item)
            @contain_text_image_T1($item)
            @endcontain_text_image_T1
            @endforeach
            @endif

            <div class="overlay" style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_integraciones_2.svg') !!})">
            </div>

        </div>

        <section class="customSection sectionParent aux_landing_integraciones_2024_7">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibir un tour guiado
                        </a>
                    </div>
                </section>

            </div>

        </section>


        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_integraciones_3.svg') !!})" class="customSection sectionParent landing_integraciones_2024_11">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <div class="image">

                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/team/integraciones-team-escala.png') !!}" alt="">
                            </div>

                        </div>

                        <div class="info">
                            <h2 class="primaryTitle">
                                ¿Necesitas apoyo integrando?
                                <br class="space">
                                <span> ¡Te acompañamos en cada paso! </span>
                            </h2>
                            <p class="text">
                                Nuestro equipo de especialistas está listo para acelerar tu aprendizaje <br class="DT_e">
                                y potenciar tus resultados con las herramientas de Escala.
                            </p>

                        </div>

                    </div>

                </section>

            </div>

        </section>

        {{--
                @php
            $parameters = [
                'classSection' => 'landing_integraciones_2024_12',
                'enableTitle' => true,
                'titlePrincipal' => '
                Qué dicen nuestros clientes sobre las funcionalidades de Escala
                ',
                'subTitlePrincipal' => null,
                'enableContainerButton' => false,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Recibe un demo',
                'mob_reviews' => [
                    App::setFilePath('/assets/images/illustrations/others/landingpages_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/landingpages_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/landingpages_review_3.png')
                ],
                'desk_reviews' => [
                    [
                    App::setFilePath('/assets/images/illustrations/others/landingpages_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/landingpages_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/landingpages_review_3.png')]
                ],
            ];
        @endphp
        @reviews_sliders_T1($parameters)    
        @endreviews_sliders_T1 --}}

        <section class='w-full customSection sectionParent landing_integraciones_2024_12'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            Qué dicen nuestros clientes sobre <br class="DT_e">
                            <span>las funcionalidades de Escala</span>

                        </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                        @php
                        $reviews = [
                        App::setFilePath('/assets/images/illustrations/others/review-1.png'),
                        App::setFilePath('/assets/images/illustrations/others/review-2.png'),
                        App::setFilePath('/assets/images/illustrations/others/review-3.png')
                        ]
                        @endphp

                        @foreach ($reviews as $item)
                        <div class="review">
                            <div class="containerImage">
                                <img src="{!! $item !!}" loading="lazy">
                            </div>
                        </div>
                        @endforeach

                    </div>

                </section>
            </div>

        </section>





        <section class="sectionParent customSection landing_integraciones_2024_13">
            <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg_integraciones_4.svg') !!}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                                <h3 class="secondaryTitle">
                                    Impulsa la productividad de tu equipo al máximo
                                    <span>¡Optimiza tu CRM y transforma tu estrategia comercial HOY!</span>
                                </h3>
                                <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    Recibir un tour guiado
                                </a>
                            </div>
                            <div class="image">

                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/integraciones-cohete.png') !!}" alt="">

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>









    </div>

</div>
<div id="subpage_campaign_AI">
    <div class="sections">

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol subpage_campaign_AI subpage_campaign_AI_0">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_ia_lead_source.svg') }}')" class="backgroundFull">

                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">

                            <div class="info col-md-12 col-lg-8 ">

                                <div class="containElements row threeCol">
                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración app escala para desktop" src="{{ App::setFilePath('/assets/images/illustrations/others/chico_feliz_ia.png') }}" loading="lazy">
                                        </div>

                                    </div>
                                    <div class="ele ele2 col-md-12 col-lg-7">

                                        <h1 class="principalBigTitle">
                                            Optimiza la creación de contenido de Emails y landing pages en Escala
                                            <br class="space">
                                            <span>
                                                con Inteligencia Artificial
                                            </span>
                                        </h1>


                                    </div>



                                </div>

                            </div>
                            <div class="form7 col-md-12 col-lg-4 ">
                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <div id="form-1" style=" text-align:center;">
                                            <img style="margin-top:30px; margin-bottom:-15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-1.png') !!}" loading="lazy">
                                            <h5 class="titleFormat blackcolor">Recibe un demo
                                                <br class="space">
                                                personalizado en vivo
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
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                            }
                                            @endphp
                                            {!! do_shortcode($_formShortcode) !!}
                                        </div>

                                        <div id="form-2" style="display:none; text-align:center;">
                                            <img style="margin-top:30px; margin-bottom:-15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-2.png') !!}" loading="lazy">
                                            <h5 class="titleFormat blackcolor">Ayúdanos a personalizar
                                                <br class="space">tu demo
                                            </h5>
                                            @php
                                            $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                            $_rs = [];
                                            $_formShortcode = null;
                                            if ($_data = get_posts($_args)) {
                                            foreach ($_data as $_key) {
                                            $_rs[$_key->ID] = $_key->post_title;
                                            if ($_key->post_title === 'Demo flujo step 2') {
                                            $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                            }
                                            }
                                            } else {
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                            }
                                            @endphp
                                            {!! do_shortcode($_formShortcode) !!}
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="imageReviewsMobile hideOnDesktop">

                                <div class="image">
                                    <div class="containerImage">
                                        <img alt="Ilustración app escala para dispositivos móviles" src="{{ App::setFilePath('/assets/images/illustrations/others/chico_feliz_ia.png') }}" loading="lazy">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </section>


        <section class="customSection sectionParent subpage_campaign_AI_1 ">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">

                            Produce <span>mejor contenido eficientemente</span>

                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="element">
                            <div class="numbers">
                                <span class="number">
                                    90%
                                </span>
                            </div>
                            <p class="text">
                                <span>El tiempo que ahorras</span> <br class="space">
                                creando contenido con IA
                            </p>

                            <div class="bottom">
                                <span>
                                    Según
                                </span>
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_mckinsey.png') !!}" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span class="number">
                                    40%
                                </span>
                            </div>
                            <p class="text">
                                <span>El costo que ahorras</span> <br class="space">
                                produciendo contenido con IA
                            </p>

                            <div class="bottom">
                                <span>
                                    Según
                                </span>
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_pwc.png') !!}" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span class="number">
                                    30%
                                </span>
                            </div>
                            <p class="text">
                                <span>de mejora en la calidad</span> <br class="space">
                                del contenido con IA
                            </p>

                            <div class="bottom">
                                <span>
                                    Según
                                </span>
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_stanford.png') !!}" loading="lazy">
                                </div>
                            </div>
                        </div>



                    </div>

                </section>

            </div>

        </section>



        <section class="customSection sectionParent subpage_campaign_AI_1_0 ">

            <div class="section-row">
                <section class="innerSectionElement sct1 ">

                    <div class="containElements backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_1_0.svg') }}')">
                        <div class="containerImage ">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/otto/otto_ia_subPage.png') !!}" loading="lazy">
                        </div>
                        <h2 class="primaryTitle blackColor">
                            Tener IA en Escala es como tener un <br class="space">
                            <span> copywriter estrella a una fracción del costo.</span>
                        </h2>
                        <p class="text">Ya no requieres herramientas adicionales ni invertir horas definiendo <br class="DT_e">
                            el título o párrafo “perfecto” para tus piezas de marketing. <br class="DT_e">
                            ¡Optimiza tus operaciones con Escala!</p>
                    </div>

                </section>

            </div>

        </section>

        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subpage_campaign_AI_2_1',
        'enableTitle' => true,
        'titlePrincipal' => '
        Construye emails y landing pages profesionales <br class="DT_e">
        <span>en poco tiempo </span>
        ',
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/texto ia.gif'),
        'title' => '
        La IA crea el texto de títulos, <br class="DT_e"> <span>botones y párrafos:</span>
        ',
        'text' => '
        <span style="color: #FF4D27"> Paso 1:</span> Describe el tema que quieres abordar y su propósito.<br class="space">
        <span style="color: #FF4D27"> Paso 2:</span> Define el tono de tu mensaje (alegre, divertido, persuasivo, etc.)<br class="space">
        <span style="color: #FF4D27"> Paso 3:</span> Elige el idioma en el que deseas el texto. <br class="space">
        <span style="color: #FF4D27"> Paso 4:</span>Selecciona la propuesta de texto que más te guste. <br class="space">
        <br class="space">
        <span style="color: #36768A; font-weight: 700!important">
            ¡Y se inserta solo!
        </span>

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
        'classSection' => 'subpage_campaign_AI_2_2',
        'enableTitle' => false,
        'titlePrincipal' => '
        La IA consigue <span>imágenes: </span>
        ',
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/imagen ia.gif'),
        'title' => '
        La IA consigue <span>imágenes</span>
        ',
        'text' => '
        <span style="color: #FF4D27">Paso 1:</span> Describe el tipo de imagen que necesitas.<br class="space">
        <span style="color: #FF4D27">Paso 2:</span> Revisa las propuestas generadas por la IA.<br class="space">
        <span style="color: #FF4D27">Paso 3:</span> Elige la imagen que mejor se ajuste a tu objetivo. <br class="space">
        <br class="space">
        <span style="color: #36768A; font-weight: 700!important">
            ¡Y se inserta solo!
        </span>

        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo personalizado',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'right',
        ];
        @endphp

        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1


        <section class=" customSection sectionParent subpage_campaign_AI_2_5">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibe un demo personalizado
                        </a>
                    </div>

                </section>

            </div>

        </section>
        <section class="customSection sectionParent subpage_campaign_AI_3_0 ">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            Conoce un poco más <span>de la herramienta</span>
                        </h2>
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_central_ia_otto.png') !!}" loading="lazy">
                        </div>
                    </div>

                </section>

            </div>

        </section>

        {{-- style="background-image: url('{!! App::setFilePath('/assets/images/banners/background_sky_3.png') !!}')" --}}
        <section class="component-info-multiple-cards-T2 customSection sectionParent subpage_campaign_AI_3 ">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">

                            En Escala tienes todas las herramientas para <br class="space">
                            <span>adquirir y fidelizar clientes en un mismo lugar</span>

                        </h2>
                        <p class="primaryText grayColorTexts">
                            Integradas <span>•</span> Fáciles de usar <span>•</span> Asequibles <span>•</span> En tu
                            idioma
                        </p>

                    </div>

                </section>
                @php
                $items = [
                [
                'img_alt' => null,
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_funnel_otto_2.png'),
                'title' => '
                <span>Plantillas probadas</span> <br class="space">
                de Embudos
                ',
                'text' => null,
                'enableButton' => false,
                ],
                [
                'img_alt' => null,
                'img' => App::setFilePath('/assets/images/illustrations/others/Landing 1.png'),
                'title' => '
                <span>Landing Pages</span> <br class="space">
                editables en minutos
                ',
                'text' => null,
                'enableButton' => false,
                ],
                [
                'img_alt' => null,
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_crm_2.png'),
                'title' => '
                <span>
                    Gestión ágil <br class="space"> de
                    contactos <br class="space">
                </span> y relaciones
                ',
                'text' => null,
                'enableButton' => false,
                ],
                [
                'img_alt' => null,
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_emailing.png'),
                'title' => '
                <span>Envío de Emails</span> <br class="space"> masivos
                y <br class="space">personalizables
                ',
                'text' => null,
                'enableButton' => false,
                ],
                [
                'img_alt' => null,
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_whatsapp_space.png'),
                'title' => '
                <span>
                    Gestión y Envío <br class="space">
                    de WhatsApps
                </span> <br class="space">
                automáticos
                ',
                'text' => null,
                'enableButton' => false,
                ],
                [
                'img_alt' => null,
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_automat.png'),
                'title' => '
                <span>Automatizaciones</span><br class="space">
                que escalan <br class="space">operaciones
                ',
                'text' => null,
                'enableButton' => false,
                ],
                [
                'img_alt' => null,
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_ads_small.png'),
                'title' => '
                <span>
                    Anuncios digitales <br class="space">
                    conectados
                </span> a tus <br class="space">
                páginas y CRM
                ',
                'text' => null,
                'enableButton' => false,
                ],
                [
                'img_alt' => null,
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_analytics.png'),
                'title' => '
                <span>Analíticas</span> <br class="space">relevantes
                en <br class="space">tiempo real
                ',
                'text' => null,
                'enableButton' => false,
                ],
                [
                'img_alt' => null,
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_ai_small.png'),
                'title' => '
                <span>Inteligencia artificial</span> <br class="space">
                para tus emails y <br class="space">
                landings
                ',
                'text' => null,
                'enableButton' => false,
                ],
                ];
                @endphp
                <section class="innerSectionElement sct2 ">

                    @foreach ($items as $item)
                    <div class="groupElements">
                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! $item['img'] !!}" loading="lazy" alt="{!! $item['img_alt'] !!}">
                            </div>
                        </div>

                        <div class="info">

                            <h3 class="secondaryTitle">
                                {!! $item['title'] !!}
                            </h3>

                        </div>

                    </div>
                    @endforeach
                </section>

                <section class="innerSectionElement sct3">

                    <div class="containElements">

                        <span class="tagPlus">
                            ¡Y más!
                        </span>

                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Ver todas las herramientas
                        </a>

                    </div>

                </section>


            </div>

            <img src="{!! App::setFilePath('/assets/images/banners/background_sky_3.svg') !!}" alt="" class="overlaysky">


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

        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/background_space_4.png') !!})"
            class="customSection sectionParent subpage_campaign_AI_4 ">

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



                                    {{-- <ol class="carousel-indicators">

                            @if (isset($desk_reviews) && $desk_reviews != null)

                            @foreach ($desk_reviews as $index => $item)

                            <button type="button" data-bs-target="#carousel-testimonials-desktop" data-bs-slide-to="{{ $index }}" @if ($index === array_key_first($desk_reviews)) class="active" aria-current="true" @endif aria-label="Slide {{ $index }}"></button>

                                    @endforeach

                                    @endif

                                    </ol> --}}


                                </div>


                            </div>
                        </div>

                        <div class="info col-md-12 col-lg-3">
                            <div class="containElements">
                                <h2 class="primaryTitle blackColor">

                                    Nuestros clientes <br class="space">
                                    <span>lo comprueban</span>

                                </h2>
                                <p class="primaryText">
                                    Conoce sus casos de éxito
                                </p>
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
                        items: 3
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



        <section class=" customSection sectionParent subpage_campaign_AI_11">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">

                            Acelera tus resultados con <br class="space">
                            <strong>Inteligencia Artificial en Escala</strong>

                        </h2>
                        <p class="primaryText grayColorTexts">
                            Descubre todo lo que puedes lograr con la <br class="space">
                            plataforma todo-en-uno de marketing y ventas
                        </p>

                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Comienza ahora
                        </a>

                    </div>

                </section>

            </div>


            <img src="{!! App::setFilePath('/assets/images/overlays/background_sky_4.svg') !!}" alt="" class="overlaysky">
        </section>


        @php
        $url = 'https://api.whatsapp.com/send?phone=17863042407';
        $items = [
        [
        'type' => 'master',
        'title' => '¿Qué es la inteligencia artificial?',
        'text' => 'La inteligencia artificial (IA) es un conjunto de tecnologías desarrolladas para comprender su entorno y realizar funciones avanzadas, como agilizar procesos, reconocer imágenes, analizar datos, hacer sugerencias, entre otras.',
        ],
        [
        'type' => 'master',
        'title' => '¿Cómo benefician las herramientas de IA en Escala a mi empresa?',
        'text' => 'En Escala se incorpora la inteligencia artificial para acelerar los procesos de creación de contenido para tus emails y landing pages. Así, podrás optimizar la inversión de tiempo de tu equipo creativo en las tareas que requieren de investigación y recolección de datos.',
        ],
        [
        'type' => 'master',
        'title' => '¿Cómo hago para contratar la herramienta de IA de Escala?',
        'text' => '
        Contacta a nuestros asesores de venta o ingresa a:
        <a class="hiperButtonGreenBlueT2" href="' . $url . '">Whatsapp</a>
        ',
        ],
        ];

        $parameters = [
        'classSection' => 'subpage_campaign_AI_12',
        'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
        'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
        'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
        'items' => $items,
        'title' => '
        Preguntas <span>frecuentes</span>
        ',
        ];
        @endphp
        @contain_FAQ_T1($parameters)
        @endcontain_FAQ_T1





    </div>




</div>
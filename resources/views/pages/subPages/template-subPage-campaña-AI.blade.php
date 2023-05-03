<div id="subpage_campaign_AI">
    <div class="sections">

        @header_t1([
            'backgroundImageType' => true,
            'overlay' => false,
            'classSection' => ' threeCol subpage_campaign_AI_0',
            'title' => '
                              <span style="color: white">
                              Ahorra tiempo creando <br class="space">
                              Emails y Páginas con <br class="space">
                              </span>
                                con Inteligencia <br class="space">
                                Artificial en Escala
                            ',
            'text' => '<span class="whiteColor">
                              Consigue más y mejores clientes
                              </span>
                            ',
            'threeCol' => true,
            'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
            'backgroundImage' => App::setFilePath('/assets/images/banners/campaing_ia_header.png'),
            'overlayImage' => null,
            'image' => App::setFilePath('/assets/images/illustrations/otto/logo_otto_IA.png'),
            'img_alt' => 'Ilustración otto escala CRM automatizaciones IA'
        ])
        @endheader_t1


        <section class="customSection sectionParent subpage_campaign_AI_1 ">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">

                            Produce <span>mejor contenido a menor costo</span>

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


        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'subpage_campaign_AI_2_1',
                'enableTitle' => true,
                'titlePrincipal' => '
        Potencia tus <span>Landing Pages en Escala</span>
',
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/campa_ia_anim_1.gif'),
                'title' => '
La IA crea el texto de <span>títulos, botones y párrafos</span>
  ',
                'text' => '
    <span style="color: #FF4D27"> Paso 1:</span> Describe el tema que quieres exponer <br class="space">
    <span style="color: #FF4D27"> Paso 2:</span> Define el tono de tu mensaje: alegre, divertida, persuasivo... <br class="space">
    <span style="color: #FF4D27"> Paso 3:</span> Elige en qué idioma quieres generar el texto para tu página <br class="space">
    <span style="color: #FF4D27"> Paso 4:</span> Selecciona la propuesta de texto de tu preferencia <br class="space">
    <br class="space">
    <span style="color: #36768A; font-weight: 700!important">
        ¡Y se inserta solo en tu página!
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
        Potencia tus <span>Landing Pages en Escala</span>
',
                'subTitlePrincipal' => null,
               'img' => App::setFilePath('/assets/images/gifs/campa_ia_anim_2.gif'),
                'title' => '
La IA consigue <span>imágenes</span>
  ',
                'text' => '
    <span style="color: #FF4D27">Paso 1:</span> Explica qué tipo de imagen necesitas insertar <br class="space">
    <span style="color: #FF4D27">Paso 2:</span> Revisa las propuestas conseguidas por la IA <br class="space">
    <span style="color: #FF4D27">Paso 3:</span> Selecciona la imagen para tu página <br class="space">
    <br class="space">
    <span style="color: #36768A; font-weight: 700!important">
      ¡Y se inserta sola en tu página!
    </span>

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
                'classSection' => 'subpage_campaign_AI_2_3',
                'enableTitle' => true,
                'titlePrincipal' => '
        Optimiza tus <span>Emails en Escala</span>
',
                'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/campa_ia_anim_3.gif'),
                'title' => '
La IA crea el texto <span>de tus asuntos</span>
  ',
                'text' => '
    <span style="color: #FF4D27">Paso 1:</span> Describe de forma breve el contenido del email <br class="space">
    <span style="color: #FF4D27">Paso 2:</span> Define el tono: alegre, divertida, persuasiva... <br class="space">
    <span style="color: #FF4D27">Paso 3:</span> Elige en qué idioma quieres generar el texto <br class="space">
    <span style="color: #FF4D27">Paso 4:</span>  Selecciona la propuesta de texto de tu preferencia <br class="space">
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
                'classSection' => 'subpage_campaign_AI_2_4',
                'enableTitle' => false,
                'titlePrincipal' => '
        Potencia tus <span>Landing Pages en Escala</span>
',
                'subTitlePrincipal' => null,
             'img' => App::setFilePath('/assets/images/gifs/campa_ia_anim_4.gif'),
                'title' => '
La IA Consigue <span>imágenes</span>
  ',
                'text' => '
    <span style="color: #FF4D27">Paso 1:</span> Explica qué tipo de imagen necesitas insertar <br class="space">
    <span style="color: #FF4D27">Paso 2:</span> Revisa las propuestas conseguidas por la IA <br class="space">
    <span style="color: #FF4D27">Paso 3:</span> Selecciona la imagen que mejor se
               adapte a tu objetivo

    <br class="space">
    <br class="space">
    <span style="color: #36768A; font-weight: 700!important">
   ¡Y se inserta sola en tu email!
    </span>

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
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_funnel_otto.png'),
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
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_crm.png'),
                            'title' => '
              <span>
                  Gestión ágil de <br class="space">
                  contactos
              </span> y relaciones
            ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_emailing.png'),
                            'title' => '
                <span>Envío de Emails</span> masivos <br class="space">
                y personalizables
            ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/Ws 1.png'),
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
                <span>Automatizaciones</span> que <br class="space">
                escalan operaciones
            ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_social_ads.png'),
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
                <span>Analíticas</span> relevantes <br class="space">
                en tiempo real
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
                    <a class="hiperButtonGreenBlueT2"href="' . $url . '/zoom-meeting">Whatsapp</a>
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

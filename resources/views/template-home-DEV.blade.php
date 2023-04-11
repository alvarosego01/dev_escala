{{--
  Template Name: [B] Home - DEV
--}}


@extends('layouts.app')
@section('content')

    <div id="homeBootstrap_DEV">
        <div class="sections">

            {{-- @php
                $parameters = [
                    'backgroundImageType' => true,
                    'overlay' => false,
                    'classSection' => 'threeCol homeSection_DEV_0 newHome',
                    'title' => '
        Acelera el crecimiento <br class="space">
        <span style="color: #DEF3F5">de tu empresa con Escala</span>
    ',
                    'text' =>
                        '<span class="whiteColor">
            La plataforma todo-en-uno para mejorar tus <br class="space">
            resultados de marketing y ventas
      </span>
      <img class="funnelImage" src="' .
                        App::setFilePath('/assets/images/illustrations/others/temporal_funnel.png') .
                        '" alt="">
      ',
                    'threeCol' => true,
                    'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
                    'backgroundImage' => App::setFilePath('/assets/images/overlays/overlay_space_1_big.png'),
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/am/temporal_am.png'),
                    'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM',
                ];
            @endphp --}}

            @header_t1([
                    'backgroundImageType' => true,
                    'overlay' => false,
                    'classSection' => 'desktopElement threeCol homeSection_DEV_0 newHome',
                    'title' => '
        Acelera el crecimiento <br class="space">
        <span style="color: #DEF3F5">de tu empresa con Escala</span>
    ',
                    'text' =>
                        '<span class="whiteColor">
            La plataforma todo-en-uno para mejorar tus <br class="space">
            resultados de marketing y ventas
      </span>
      <img class="funnelImage" src="' .
                        App::setFilePath('/assets/images/illustrations/others/temporal_funnel.png') .
                        '" alt="">
      ',
                    'threeCol' => true,
                    'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
                    'backgroundImage' => App::setFilePath('/assets/images/overlays/overlay_space_1_big.png'),
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/am/temporal_am.png'),
                    'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM',
                ])
            @endheader_t1

            @header_t1([
                    'backgroundImageType' => true,
                    'overlay' => false,
                    'classSection' => 'mobileElement threeCol homeSection_DEV_0 newHome',
                    'title' => '
        Acelera el crecimiento <br class="space">
        <span style="color: #DEF3F5">de tu empresa con Escala</span>
    ',
                    'text' =>
                        '<span class="whiteColor">
            La plataforma todo-en-uno para mejorar tus <br class="space">
            resultados de marketing y ventas
      </span>
      <img class="funnelImage" src="' .
                        App::setFilePath('/assets/images/illustrations/others/temporal_funnel.png') .
                        '" alt="">
      ',
                    'threeCol' => true,
                    'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
                    'backgroundImage' => App::setFilePath('/assets/images/overlays/overlay_space_1.png'),
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/am/temporal_am.png'),
                    'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM',
                ])
            @endheader_t1



            <section class="component-info-text-video-T1 customSection sectionParent homeSection_DEV_1 ">
                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle whiteColor">
                                Más de 1.000 empresas <br class="space">
                                <span>han confiado en Escala</span>
                            </h2>

                        </div>

                    </section>

                    <section class="innerSectionElement sct2">

                        <div class="groupElements row">

                            <img src="{!! App::setFilePath('/assets/images/overlays/overlay_sky_1.png') !!}" alt="" class="overlaySky1">

                            <div class="video col-md-12 col-lg-7">

                                @php
                                    $videoEmbed = App::setFilePath('/assets/videos/Comercial_escala_registro_lead_1.mp4');
                                    $videoCover = App::setFilePath('/assets/images/illustrations/others/video_front_home.png');
                                @endphp

                                @if (isset($videoEmbed) && $videoEmbed != null)
                                    <div class="youtubeImageContainer ">

                                        <video class="video-js" controls preload="none" poster="{{ $videoCover }}"
                                            {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                            data-setup="{
                                  autoplay: false
                                }">
                                            <source src="{{ $videoEmbed }}" type="video/mp4" />
                                            <source src="{{ $videoEmbed }}" type="video/webm" />
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider upgrading to a
                                                web browser that
                                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                                    HTML5 video</a>
                                            </p>
                                        </video>


                                        <a class=" secondaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                            Ver el demo
                                        </a>

                                    </div>
                                @endif

                            </div>

                            <div class="info col-md-12 col-lg-5">


                                @php
                                    $elements = [
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

                                    @foreach ($elements as $item)
                                        <div class="refersElement">
                                            <div class="logo">
                                                <div class="containerImage">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/iso_escala.png') !!}" loading="lazy">
                                                </div>
                                            </div>

                                            <div class="infoInner">
                                                <div class="tag">
                                                    <div class="containerImage">
                                                        <img src="{!! $item['logo'] !!}" loading="lazy">
                                                    </div>
                                                </div>
                                                <p class="text">
                                                    {!! $item['text'] !!}
                                                </p>
                                                <div class="stars">
                                                    <div class="containerImage">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                                                    </div>
                                                </div>
                                                <span class="points">
                                                    {!! $item['points'] !!}
                                                </span>
                                            </div>

                                        </div>
                                    @endforeach

                                </div>

                            </div>


                        </div>

                    </section>

                </div>

            </section>


            <section class="component-info-text-image-T1 customSection sectionParent homeSection_DEV_2 ">


                <div class="section-row">


                    <section class="innerSectionElement sct1">

                        <div class="containElements">
                            <h2 class="primaryTitle blackColor">
                                Construye una máquina de <br class="space">
                                <span>marketing y venta</span>
                            </h2>
                            <p class="primaryText grayColorTexts">
                                Con todas herramientas que necesitas en un mismo lugar
                            </p>
                        </div>

                    </section>

                    <section class="innerSectionElement sct2 left">


                        <div class="groupElements row">

                            <div class="image col-md-12 col-lg-6">
                                <div class="containerImage">

                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/temporal_funnel_big.png') !!}" loading="lazy">

                                </div>
                            </div>
                            <div class="info col-md-12 col-lg-6">

                                <h3 class="secondaryTitle">
                                    Atrae
                                </h3>
                                <p class="text">
                                    A más clientes ideales e inicia la relación comercial <br class="desktopTabletElement">
                                    capturando su contacto con anuncios digitales, landing <br class="desktopTabletElement">
                                    pages y formularios
                                </p>
                                <h3 class="secondaryTitle">
                                    Nutre
                                </h3>
                                <p class="text">
                                    La relación con cada contacto usando páginas de confirmación, <br
                                        class="desktopTabletElement">
                                    emails automatizados, WhatsApp, flujos y más

                                </p>
                                <h3 class="secondaryTitle">
                                    Convierte
                                </h3>
                                <p class="text">
                                    Contactos en clientes fieles que recompran y refieren <br class="desktopTabletElement">
                                    usando el CRM para gestionar procesos, escalar <br class="desktopTabletElement">
                                    operaciones y optimizar resultados continuamente
                                </p>

                            </div>

                        </div>



                    </section>



                </div>

            </section>


            <section class="component-info-multiple-cards-T2 customSection sectionParent homeSection_DEV_3 ">

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

                <img src="{!! App::setFilePath('/assets/images/overlays/overlay_sky_3.png') !!}" alt="" class="overlaysky">

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
                       'logo' => App::setFilePath('/assets/images/logos/logo_rg.png'),
                        'name' => 'Biaggio Correale, Director <br class="space"> de Operaciones',
                    ]
                ];

            @endphp

            <section class="customSection sectionParent homeSection_DEV_4 ">

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

                <img src="{!! App::setFilePath('/assets/images/overlays/overlay_space_4.png') !!}" alt="" class="overlaySpace">


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


            <section class="customSection sectionParent homeSection_DEV_5 ">

                <div class="section-row">


                    <section class="innerSectionElement sct1">

                        <div class="containElements">
                            <h2 class="primaryTitle blackColor">
                                Ningún otro CRM te brinda un mejor servicio <br class="space">
                                <span>Te acompañamos paso a paso para acelerar tu éxito</span>
                            </h2>
                            <p class="primaryText grayColorTexts">
                                Desde el día 1, te asignamos un Gerente de Éxito que guía tu estrategia e implementación
                                apoyándose <br class="desktopTabletElement"> de nuestro ecosistema de expertos. ¿Nuestro
                                objetivo? Que crezcas continuamente con Escala
                            </p>
                        </div>

                    </section>


                    <section class="innerSectionElement sct2">

                        <div class="containElements">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/tools_escala.png') !!}" loading="lazy">

                            </div>
                        </div>

                    </section>

                </div>


            </section>


            <section class="component-info-multiple-cards-T2 customSection sectionParent homeSection_DEV_6 ">

                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle blackColor">

                                <span>Adicionalmente</span>, obtienes:
                            </h2>

                        </div>

                    </section>
                    @php
                        $items = [
                            [
                                'img_alt' => null,
                                'img' => App::setFilePath('/assets/images/illustrations/others/icon_fix_help.png'),
                                'title' => '
                <span>Configuración</span> <br class="space">
                incluida
            ',
                                'text' => null,
                                'enableButton' => false,
                            ],
                            [
                                'img_alt' => null,
                                'img' => App::setFilePath('/assets/images/illustrations/others/icon_help_support.png'),
                                'title' => '
                                    <span>Chat de soporte</span> <br class="space">
                                    casi 24/7
            ',
                                'text' => null,
                                'enableButton' => false,
                            ],
                            [
                                'img_alt' => null,
                                'img' => App::setFilePath('/assets/images/illustrations/others/icon_welcome.png'),
                                'title' => '
                                    <span>Capacitaciones</span> en <br class="space">
                                    vivo con expertos <br class="space">
                                    de primera
            ',
                                'text' => null,
                                'enableButton' => false,
                            ],
                            [
                                'img_alt' => null,
                                'img' => App::setFilePath('/assets/images/illustrations/others/icon_play.png'),
                                'title' => '
                                    <span>Educación</span> online
                                    a tu ritmo
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
                                        <img src="{!! $item['img'] !!}" loading="lazy"
                                            alt="{!! $item['img_alt'] !!}">
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

                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Aprender más
                            </a>

                        </div>

                    </section>


                </div>


            </section>




            <section class="component-info-multiple-cards-T2 customSection sectionParent homeSection_DEV_7 ">


                <img src="{!! App::setFilePath('/assets/images/overlays/overlay_space_2.png') !!}" alt="" class="overlaysky">

                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle blackColor">

                                Conoce la experiencia según tu cargo

                            </h2>
                            <p class="primaryText grayColorTexts">
                                Todos se benefician al usar Escala
                            </p>

                        </div>

                    </section>
                    @php
                        $items = [
                            [
                                'title' => '
                                    <span>Dueño</span> de negocio
                                ',
                                'text' => '
                                    “<span>Extraordinario servicio</span> en <br class="space">
                                    Escala me apoyaron a definir <br class="space">
                                    mejor el plan...
                                ',
                                'name' => '
                                    María González
                                ',
                            ],
                            [
                                'title' => '
                                    <span>Lider</span> de Marketing
                                ',
                                'text' => '
                                    “Por fin una herramienta <br class="space">
                                    donde <span>
                                        se preocupan por <br class="space">
                                        atender...
                                    </span>
                                ',
                                'name' => '
                                    Ernesto Pérez
                                ',
                            ],
                            [
                                'title' => '
                                    <span>Gerente</span> de Ventas
                                ',
                                'text' => '
                                    <span>
                                        “Entrenaron muy bien a a mi <br class="space">
                                        equipo
                                    </span> y logramos que...
                                ',
                                'name' => '
                                   Carlos Ibañez
                                ',
                            ],
                            [
                                'title' => '
                                    <span>Vendedor</span>
                                ',
                                'text' => '
                                     “<span>Extraordinario servicio</span> en <br class="space">
                                    Escala me apoyaron a definir <br class="space">
                                    mejor el plan...
                                ',
                                'name' => '
                                    María González
                                ',
                            ],
                            [
                                'title' => '
                                <span>Creadora</span> de Contenido
                                ',
                                'text' => '
                                    “Por fin una herramienta <br class="space">
                                    donde <span>
                                        se preocupan por <br class="space">
                                        atender...
                                    </span>
                                ',
                                'name' => '
                                    Ernesto Pérez
                                ',
                            ],
                            [
                                'title' => '
                                    <span>Analista</span> comercial
                                ',
                                'text' => '
                                 <span>
                                        “Entrenaron muy bien a a mi <br class="space">
                                        equipo
                                    </span> y logramos que...
                                ',
                                'name' => '
                                   Carlos Ibañez
                                ',
                            ],
                        ];
                    @endphp
                    <section class="innerSectionElement sct2 ">

                        @foreach ($items as $item)

                            <div

                            class="groupElements">

                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white.png') !!}" alt="" class="backOverlay">

                                <h3 class="secondaryTitle">
                                    {!! $item['title'] !!}
                                </h3>

                                <p class="text">
                                    {!! $item['text'] !!}
                                </p>

                                <span class="name">
                                    {!! $item['name'] !!}
                                </span>

                                <div class="stars">
                                    <div class="containerImage">
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </section>



                </div>


            </section>

      <section class="component-info-text-image-T1 customSection sectionParent homeSection_DEV_8 ">

                 <img src="{!! App::setFilePath('/assets/images/overlays/overlay_sky_2.png') !!}" alt="" class="overlaySky1">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">
                            <h2 class="primaryTitle blackColor">
                                Participa en nuestra próxima Masterclass gratuita <br class="space">
                                <span>con Andrés Moreno y expertos</span>
                            </h2>

                        </div>

                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">

                              <div class="image col-md-12 col-lg-6">
                                <div class="containerImage">

                                    <img src="{!! App::setFilePath('/assets/images/person/am/am_back_circle.png') !!}" loading="lazy">

                                </div>
                            </div>

                            <div class="info col-md-12 col-lg-6">

                                <small>
                                    MARZO 23, 5:00 pm COL | 6:00 pm MIA
                                </small>
                                <h3 class="secondaryTitle">
                                    <span>“Cómo escalar</span> empresas <br class="space">
                                    con embudos que conviertan”
                                </h3>
                                <p class="text">
                                    A más clientes ideales e inicia la relación comercial <br class="desktopTabletElement">
                                    capturando su contacto con anuncios digitales, landing <br class="desktopTabletElement">
                                    pages y formularios
                                </p>

                                <a class=" secondaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    Participar
                                </a>


                            </div>

                        </div>

                    </section>

                </div>

            </section>


                <section class="component-info-text-image-T1 customSection sectionParent homeSection_DEV_9 ">

                 <img src="{!! App::setFilePath('/assets/images/overlays/overlay_sky_4.png') !!}" alt="" class="overlaySky1">

                <div class="section-row">

                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">

                            <div class="info col-md-12 col-lg-6">

                                <small>
                                    ¿Brindas servicios de marketing, <br class="desktopTabletElement">
                                    ventas o consultoría de negocios?
                                </small>
                                <h3 class="secondaryTitle">
                                    Multiplica tu impacto e <br class="desktopTabletElement">
                                    ingresos convirtiéndote en <br class="desktopTabletElement">
                                    <span>Aliado de Escala</span>
                                </h3>
                                <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                      Aprender más
                                </a>

                            </div>

                              <div class="image col-md-12 col-lg-6">
                                <div class="containerImage">

                                    <img src="{!! App::setFilePath('/assets/images/person/group_team_colab.png') !!}" loading="lazy">

                                </div>
                            </div>

                        </div>

                    </section>

                </div>

            </section>


             <section class="component-info-text-image-T1 customSection sectionParent homeSection_DEV_10 ">

                 <img src="{!! App::setFilePath('/assets/images/overlays/overlay_space_3.png') !!}" alt="" class="overlaySky1">

                <div class="section-row">

                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">

                              <div class="image col-md-12 col-lg-4">

                            </div>

                            <div class="info col-md-12 col-lg-8">

                                <h3 class="secondaryTitle">
                                    Únete a la comunidad de empresas que <br class="space">
                                    <span>aceleran su éxito con Escala</span>
                                </h3>
                                <p class="text">
                                     Descubre lo que Escala puede hacer por ti y tu empresa
                                </p>

                                <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                   Recibir un demo
                                </a>


                            </div>

                        </div>

                    </section>

                </div>

            </section>

            @php
$escalaUrl = 'https://escala.com';
$items = [
    [
        'type' => 'master',
        'title' => '¿Qué es Escala?',
        'text' => 'Escala es la plataforma todo en uno de marketing digital y ventas que te ayudará a acelerar el éxito de tu negocio, con todas las <br class="desktopElement"> herramientas en un solo lugar para crecer de una manera constante. Conoce todos los beneficios de Escala:<br class="space"><br class="space">
                    <ul style="list-style: disc; padding-left: 20px">
                        <li><p>Crea landing pages increíbles sin programar, para darte a conocer y capturar la información de tus visitantes.</p></li>
                        <li><p>Crea, administra y publica anuncios digitales de Instagram y Facebook, sin salir de Escala, para generar tráfico a tus páginas.</p></li>
                        <li><p>Gestiona tu base de datos y haz más productivo el trabajo de tu equipo de ventas con el CRM más fácil de usar.</p></li>
                        <li><p>Mantén la comunicación constante con tus leads y clientes enviando emails masivos sin caer en la bandeja de spam.</p></li>
                        <li><p>Automatiza tareas repetitivas: workflows y campañas de emails para hacer crecer tu negocio en piloto automático.</p></li>
                        <li><p>Mide y optimiza tus campañas digitales con las analíticas en tiempo real.</p></li></ul>'
    ],
    [
        'type' => 'master',
        'title' => '¿Necesito habilidades para manejar la plataforma?',
        'text' => 'No. nuestra herramienta es muy intuitiva y fácil de usar. Para que estés más tranquilo, hemos preparado una serie de tutoriales muy <br class="desktopElement"> prácticos, que te ayudarán a despejar cualquier duda que tengas mientras vives la experiencia. También puedes contar con nuestro <br class="desktopElement"> acompañamiento, a través de asesorías, que te serán de gran ayuda en los primeros momentos de uso de la plataforma. <a class="hiperButtonGreenBlueT2"href="'.$escalaUrl.'/zoom-meeting">Atención al cliente.</a>'
    ],
    [
        'type' => 'master',
        'title' => '¿Qué incluye?',
        'text' => 'Cuando adquieres cualquiera de los planes de Escala cuentas con: Todas las funcionalidades de marketing digital y ventas, servicio <br class="desktopElement"> ilimitado y entrenamiento para usar la plataforma.'
    ],
    [
        'type' => 'master',
        'title' => 'Funcionalidades',
        'items' => [
            [
                'title' =>
                    '¿Los embudos de venta aplican para todos los negocios?',
                'text' =>
                    'Así es. Todos los negocios tienen un embudo de ventas, conscientemente o no, dado que buscan atraer leads y convertirlos en <br class="desktopElement"> clientes. No olvides que un embudo de ventas es una metodología, paso a paso, que puede combinar marketing digital y offline. <br class="desktopElement"> En Escala tienes todas las funcionalidades para implementarlo de manera fácil, invirtiendo menos recursos, tiempo y dinero.',
                'type' => 'item'
            ],
            [
                'title' => '¿Qué ventajas tiene el CRM de Escala?',
                'text' =>
                    'Esta pregunta es fundamental. Es importante que sepas que el CRM de Escala no solo cuenta con todas opciones para gestionar tus <br class="desktopElement"> contactos: información relacionada con el nombre, email y teléfono, y de gestión de tu equipo comercial como: actividades, tareas, <br class="desktopElement"> llamadas y recordatorios hasta cerrar la venta, sino que también es el CRM más fácil de usar de todos. Pruébalo y descúbrelo por ti <br class="desktopElement"> mismo. ',
                'type' => 'item'
            ],
            [
                'title' => 'El Page builder de Escala ¿cómo funciona?',
                'text' =>
                    'El Page builder de Escala es el más fácil de usar del mercado. Práctico para realizar tus landing pages optimizadas. Tenemos cientos <br class="desktopElement"> de hermosas plantillas listas para que las personalices y en un clic las puedas publicar. Con formularios capaces de captar toda la <br class="desktopElement"> data y guardarla automáticamente en tu base de datos. <br class="space"><br class="space"> Fáciles de armar en minutos, 100% responsive y con un subdominio en caso que no tengas dominio propio. Además ya tienen <br class="desktopElement"> integrado el botón de WhatsApp para que tus visitantes conversen directamente con tu equipo de ventas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿En Escala se puede usar un dominio distinto para cada landing page?',
                'text' =>
                    'Sí, en Escala puedes tener varios dominios para tus landing pages. Solo debes configurarlos y usarlos cuando lo necesites en cada <br class="desktopElement"> una de tus páginas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Puedo agregar el botón de WhatsApp en las landing pages de Escala?',
                'text' =>
                    'Las landing pages de Escala ya tienen disponible el botón de WhatsApp para que tu cliente pueda tener una conversación más fluida <br class="desktopElement"> con tu empresa. Se puede encontrar en la pestaña de “WhatsApp” en cada landing. Si la página ya está publicada, tendrás que re-<br class="desktopElement">publicarla después de activar el botón para que aparezca en tu página. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=5HOSPcDXdTQ&t=4s">Tutorial de Cómo activar botón de WhatsApp.</a> ',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Puedo publicar campañas de anuncios digitales en Escala?',
                'text' =>
                    'En Escala puedes crear, administrar y publicar anuncios digitales de Instagram y Facebook, sin tener que salir de nuestra plataforma. Elige a tu <br class="desktopElement"> audiencia, presupuesto determinado y genera tráfico a tus landing pages de la manera más fácil y práctica.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Qué tipo de campañas son las que se están creando desde Escala?',
                'text' =>
                    'En Escala puedes crear campañas de anuncios digitales de Instagram y Facebook para lograr generar tráfico a tus landing pages. Su objetivo es <br class="desktopElement"> atraer posibles clientes (Captura de Leads) para que registren sus datos y con esta información puedas cerrar más ventas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    'En los anuncios digitales de Escala, ¿la propia plataforma maneja el píxel de Facebook o hay que integrarlo desde 0?',
                'text' =>
                    'Para agregar el píxel de Facebook debes ir a "configuración" de Escala, entra a la sección de "píxeles y códigos de seguimiento" y <br class="desktopElement"> darle clic a "agregar cuenta". Así de fácil es agregar el píxel de Facebook.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Puedo hacer campañas de email marketing en Escala?',
                'text' =>
                    'La respuesta es sí. Haz efectivas campañas de email marketing con sencillas plantillas de email. Realiza envíos masivos sin caer en la <br class="desktopElement"> bandeja de spam y ten las métricas en tiempo real para mejorar los resultados de tus campañas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿En qué parte de Escala puedo crear las plantillas de email marketing?',
                'text' =>
                    'En la funcionalidad de plantillas, al darle la opción de “+Crear” arriba a la derecha, puedes elegir esta opción. Haz clic en opciones de <br class="desktopElement"> plantillas, allí se desplegará las alternativas de: "Plantilla de CRM" o "Plantilla de marketing". Elige “Plantilla de marketing” y <br class="desktopElement"> comienza a personalizarla. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=E_1VObta6Lk">Tutorial de cómo crear plantillas de Email Marketing.</a> ',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿ Cuáles son las funcionalidades de automatizaciones y analíticas?',
                'text' =>
                    'En Escala te damos todas las métricas para optimizar tus resultados. Tanto en las funcionalidades de marketing como las de ventas <br class="desktopElement"> tienes dashboards amigables que te permiten ver en tiempo real las métricas que son importantes. <br class="space"><br class="space"> En Escala puedes automatizar flujos de tareas para tu fuerza de ventas, programar workflows de comunicación y de email marketing, <br class="desktopElement"> para que tu negocio crezca en piloto automático. ',
                'type' => 'item'
            ]
        ]
    ],
    [
        'type' => 'master',
        'title' => 'Sobre mi cuenta',
        'items' => [
            [
                'title' => '¿Cómo accedo a la plataforma?',
                'text' =>
                    'Entra en <a class="hiperButtonGreenBlueT2"href="https://app.escala.com/">app.escala.com</a>. y haz clic en iniciar sesión desde cualquier dispositivo. ',
                'type' => 'item'
            ],
            [
                'title' => '¿Puedo usar mi propio dominio?',
                'text' =>
                    'Sí, en Escala puedes utilizar tu dominio tal como se encuentra registrado en tu hosting, para conocer cómo conectarlo puedes <br class="desktopElement"> visualizar nuestro tutorial: <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=vpdEwrcrZt0&t=44s">Cómo conectar dominio de página.</a> ',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo creo una cuenta?',
                'text' =>
                    'Para crear una cuenta debes ingresar tus datos haciendo clic en en el botón “Recibe un demo” en <a class="hiperButtonGreenBlueT2"href="https://escala.com/">https://escala.com/</a> y te <br class="desktopElement"> contactará uno de nuestros asesores para comenzar tu free trial.',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo cancelo mi cuenta?',
                'text' =>
                    'Puedes cancelarla cuando quieras a través de nuestros canales de servicio en la plataforma o WhatsApp.',
                'type' => 'item'
            ],
            [
                'title' => 'Si cierro mi cuenta, ¿perderé toda la data?',
                'text' =>
                    'La respuesta es Sí. Pero, estamos seguros que una vez que pruebes Escala no querrás cerrar tu cuenta.',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo recupero mi contraseña?',
                'text' =>
                    'Si no recuerdas tu contraseña, haz clic en el link de recuperar y te enviaremos un correo <br class="desktopElement"> para gestionarla de nuevo.',
                'type' => 'item'
            ],
            [
                'title' => '¿Se puede integrar con otras aplicaciones?',
                'text' =>
                    '¡Sí! Puedes integrar tu CRM de Escala con otras aplicaciones a través de Zapier. Un ejemplo de cómo hacerlo en este tutorial <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=9tJl_akCRgI&list=PLchunKFsero1alROd4tbc9r5GxI7-9_ju&index=22">Ver tutorial</a>',
                'type' => 'item'
            ]
        ]
    ],
    [
        'type' => 'master',
        'title' => 'Precios y métodos de pago',
        'items' => [
            // [
            //     'title' => '¿Cuáles son los planes de precio de Escala?',
            //     'text' =>
            //         'En Escala tenemos planes a la medida de tus sueños y ganas de crecer. Solo pagas por lo que necesitas. Consulta nuestros precios: <a class="hiperButtonGreenBlueT2"href="' .
            //         $escalaUrl .
            //         '/pricing-page">Página de precios</a>',
            //     'type' => 'item'
            // ],
            [
                'title' => '¿Puedo cambiar o cancelar planes?',
                'text' =>
                    'Sí en Escala puedes cancelar tus planes cuando desees, pero sabemos que será tan útil que querrás ir al siguiente nivel. Para cambiar <br class="desktopElement"> o cancelar tus planes debes contactarte con nuestro equipo, a través de WhatsApp o chat.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Debo pagar por las actualizaciones de la herramienta?',
                'text' =>
                    'No, no debes pagar por las actualizaciones. Solo pagas por las funcionalidades que utilices y si incrementas tu plan será por tus <br class="desktopElement"> necesidades de contactos de marketing o ventas o porque tu negocio está creciendo y necesitas más usuarios.',
                'type' => 'item'
            ]
        ]
    ],
    [
        'type' => 'master',
        'title' => 'Seguridad',
        'items' => [
            [
                'title' => '¿Qué tan seguro es?',
                'text' =>
                    'En Escala tu data está en buenas manos. Tu información no es vista por nadie, solo por personas de tu equipo y bajo los permisos <br class="desktopElement"> que hayas asignado. Para nosotros tu seguridad es primero.',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo exportar datos?',
                'text' =>
                    'Podrás exportar la información de tus contactos y oportunidades de ventas desde cada listado en el CRM. Te enviaremos <br class="desktopElement"> un documento a tu correo con los datos que hayas elegido exportar.',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo importar datos?',
                'text' =>
                    'Puedes importar tus bases de datos al CRM de Escala, solo necesitas guardar la información en un archivo .csv o .txt e iniciar el <br class="desktopElement"> proceso desde el listado de contactos. Chequea nuestro tutorial: <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=2bJFjHWbI1E">Ver tutorial</a>',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo conceder accesos e invitar a terceros?',
                'text' =>
                    'Puedes agregar a terceros y a todos los miembros de tu equipo de trabajo para hacer más eficiente tu gestión. Es muy fácil te <br class="desktopElement"> invitamos a ver todo el detalle en este práctico tutorial. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=dCrD2cD_Xpw">Ver tutorial</a>',
                'type' => 'item'
            ]
        ]
    ],
    [
        'type' => 'master',
        'title' => 'Asesoría',
        'items' => [
            [
                'title' => '¿Cómo conectar con un experto?',
                'text' =>
                    'En Escala tu crecimiento de negocio es vital para nosotros por eso, siempre tendrás la asesoría de un experto en marketing digital y <br class="desktopElement"> ventas acompañándote en todo el camino. <a class="hiperButtonGreenBlueT2"href="' .
                    $escalaUrl .
                    '/zoom-meeting">Link con asesor</a>',
                'type' => 'item'
            ],
            [
                'title' => '¿Con quién puedo conectar para recibir asistencia?',
                'text' =>
                    '<span style="color:#34768a">Si tienes dudas sobre cualquier cosa puedes:</span> <br class="desktopElement"> <ul style="color:#34768a"class="accordionSpecial"><li>1. Ver nuestros tutoriales de uso en nuestro canal de youtube. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/channel/UCiDlXaq67qVf8lSTurRS8lQ">Escala en Youtube</a></li><li>2. Hablar con un asesor. <a class="hiperButtonGreenBlueT2"href="' .
                    $escalaUrl .
                    '/zoom-meeting">Link con asesor</a></li><li>3. Conversar por chat. <a class="hiperButtonGreenBlueT2"href="https://api.WhatsApp.com/send?phone=17863042407">Chat de WhatsApp</a></li><li>4. Hablar con el Especialista en customer success asignado a tu cuenta (Plan Pro y Enterprise).</li></ul>',
                'type' => 'item'
            ]
        ]
    ],
    [
        'type' => 'master',
        'title' => 'Entrenamiento',
        'items' => [
            [
                'title' =>
                    '¿Hay formas de aprender marketing y ventas para mejorar mi negocio?',
                'text' =>
                    'Escala Academy es el programa de formación constante, mediante el cual te daremos todo el conocimiento de marketing digital y <br class="desktopElement"> ventas para hacerte un experto. <br class="space"><br class="space"> Escala Academy: <br class="desktopElement"> <ul style="color:#34768a"class="accordionSpecial"><li>Tutoriales funcionalidades.</li><li>Blog Escala.</li><li>Workshops para tu empresa.</li><li>Webinars especializados en temas (Escalatones).</li><li>Programas de Éxito.</li></ul>',
                'type' => 'item'
            ],
            [
                'title' => '¿Necesito pagar para tener toda la información?',
                'text' =>
                    'Todo nuestro material de apoyo y conocimiento es totalmente gratis. Para nosotros mantenerte bien informado y en constante <br class="desktopElement"> formación es una inversión para ayudarte a hacer crecer tu negocio.',
                'type' => 'item'
            ]
        ]
    ]
];


 $parameters = array(
   'classSection' => 'homeSection_DEV_11',
   'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'items' => $items,
   'title' => '
    Preguntas <span>frecuentes</span>
   '
   ) ;
   @endphp
@contain_FAQ_T1( $parameters )
@endcontain_FAQ_T1





        </div>




    </div>



@endsection

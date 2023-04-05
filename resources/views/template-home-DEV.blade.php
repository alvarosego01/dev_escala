{{--
  Template Name: [B] Home - DEV
--}}


@extends('layouts.app')
@section('content')

    <div id="homeBootstrap_DEV">
        <div class="sections">

            @php
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
                    'backgroundImage' => App::setFilePath('/assets/images/overlays/overlay_space_1.png'),
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/am/temporal_am.png'),
                    'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM',
                ];
            @endphp
            @header_t1($parameters)
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
                                            'points' => '4.8/5',
                                        ],
                                        [
                                            'logo' => App::setFilePath('/assets/images/illustrations/others/trust_tag.png'),
                                            'text' => 'Escala / plataforma CRM',
                                            'points' => '4.8/5',
                                        ],
                                        [
                                            'logo' => App::setFilePath('/assets/images/illustrations/others/trust_tag.png'),
                                            'text' => 'Escala / plataforma CRM',
                                            'points' => '4.8/5',
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
                                Más de 1.000 empresas <br class="space">
                                <span>han confiado en Escala</span>
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
                        $items = array(
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
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_funnel_otto.png'),
                            'title' => '
                <span>Landing Pages</span> <br class="space">
                editables en minutos
            ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_funnel_otto.png'),
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
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_funnel_otto.png'),
                            'title' => '
                <span>Envío de Emails</span> masivos <br class="space">
                y personalizables
            ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_funnel_otto.png'),
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
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_funnel_otto.png'),
                            'title' => '
                <span>Automatizaciones</span> que <br class="space">
                escalan operaciones
            ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_funnel_otto.png'),
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
                            'img' => App::setFilePath('/assets/images/illustrations/others/icon_funnel_otto.png'),
                            'title' => '
                <span>Analíticas</span> relevantes <br class="space">
                en tiempo real
            ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        )
                    @endphp
                    <section class="innerSectionElement sct2 ">

                        @foreach ($items as $item)

                        <div class="groupElements">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! $item['img'] !!}"
                                        loading="lazy" alt="{!! $item['img_alt'] !!}">
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


        </div>

    </div>



@endsection

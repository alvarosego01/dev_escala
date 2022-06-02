
{{--
  Template Name: [B] Landing - Home CRM todo-en-uno
--}}


@extends('layouts.app')
@section('content')

<div id="landingHomeCRMExp">
  <div class="sections">

    {{-- @php
    $parameters = [
        'backgroundImageType' => false,
        'classSection' => 'threeCol landingHomeCRM_exp_0 newHome',
        'title' => '
        CRM + Expertos = <br class="space">
        <span>
          Escalar con éxito
        </span>
        ',
        'text' => '
          La plataforma todo-en-uno de <br class="space">
          marketing, ventas y fidelización con <br class="space">
          acompañamiento en vivo para impulsar <br class="space">
          el crecimiento de tu negocio
        ',
        'textForm' => 'Empieza a probar Escala',
        'threeCol' => true,
        'backgroundImage' => null,
        'overlay' => false,
        'overlayImage' => null,
        'image' => App::setFilePath('/assets/images/person/home_hombre_silla-chat.png'),
    ];
@endphp

@header_t1( $parameters )

@endheader_t1 --}}


    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landingHomeCRM_exp_0 newHome',
     'title' => '
     <span class="bold" style="color: #B9E6E9" >
      CRM todo-en-uno
      </span> <br class="space">
      <span style="color: #FAD872">
        Escalar con éxito
      </span>
    ',
     'text' => '<span class="whiteColor">
        La plataforma CRM todo-en-uno con acompañamiento <br class="space">
        en vivo de especialistas para impulsar el crecimiento de <br class="space">
        tu empresa.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/landing_home_latin.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1





@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'landingHomeCRM_exp__1_2',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => '
    “Es la plataforma que me hubiese gustado <br class="space">
    tener cuando comencé, tiene todas las <br class="space">
    herramientas en un solo lugar”
    <br class="space"><br class="space">
    <small>
      Andrés Moreno, Fundador de Escala y Open English
    </small>

',
'typeVideo' =>  'localvideo',
  'videoEmbed' =>  App::setFilePath('/assets/videos/am_home1.mp4'),
  'videoCover' => App::setFilePath('/assets/images/illustrations/others/portada_video_andres.jpg'),
  'text' => '
Escala es la Plataforma de CRM todo-en-uno creada por <br class="desktopTabletElement">
expertos de marketing, ventas y fidelización para ayudar a las <br class="desktopTabletElement">
empresas hispanas a alcanzar el éxito.

<div class="specialButton">
  <img src="'. App::setFilePath('/assets/images/illustrations/otto/ottoHomeButton.png') .'" >

  <a href="#" class=" openPopUpButton popup-general-trial-2022">
    Solicita tu Prueba Gratis
  </a>

  </div>
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
  'textButton' => 'Prueba Escala ya',
  'side' => 'left',
 ) ;
@endphp

@contain_text_video_T1( $parameters )
@endcontain_text_video_T1


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingHomeCRM_exp_2',
    'enableTitle' => true,
    'titlePrincipal' => '
    Acelera el éxito <span class="greenBlueColor">de tu empresa</span>
    ',
    'subTitlePrincipal' => 'Haz crecer tu empresa de manera rentable, sostenible y escalable.',
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => '¡Comenzar ahora!',
    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022 hoverInEffect',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img' => App::setFilePath('/assets/images/illustrations/team/home_acelera_el_exito-1.png'),
            'title' => '<span class="grayColorTexts5">
                 Da a conocer <br class="desktopTabletElement">
        tu negocio
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/team/home_acelera_el_exito-2.png'),
            'title' => '<span class="grayColorTexts5">
                Multiplica el interés <br class="space">
por tus productos y servicios
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/team/home_acelera_el_exito-3.png'),
            'title' => '<span class="grayColorTexts5">
                Cierra más <br class="desktopTabletElement">
ventas
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/team/home_acelera_el_exito-4.png'),
            'title' => '<span class="grayColorTexts5">
                Fideliza <br class="desktopTabletElement">
a tus clientes
                </span>',
            'enableButton' => false,
        ],

    ],
];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2




<section class="customSection sectionParent landingHomeCRM_exp_4">

  <div class="section-row">

    <section class="innerSectionElement sct1">

      <div class="containElements">

        <h2 class="primaryTitle blackColor">
          <span class="greenBlueColor">La plataforma todo-en-uno <br class="space"></span>
          de marketing, ventas y fidelización
        </h2>
        <p class="primaryText grayColorTexts">
          En Escala tienes una plataforma de CRM poderosa con todas las funcionalidades <br class="desktopTabletElement">
          que necesitas para generar más demanda, aumentar tus ventas y retener más clientes.
        </p>

      </div>

    </section>
    <section class="innerSectionElement sct2">

      <div class="groupElements row">



        <div class="col-12 col-md-12 col-lg-6 infoGroup">

          <div class="containerImage">
            <img alt="Crea increíbles páginas sin programar" src="{!! App::setFilePath('/assets/images/illustrations/others/home_icono-1.png') !!}" alt="" loading="lazy">
          </div>

          <div class="containerElements">
            <h3 class="secondaryTitle blackColor">
              Crea increíbles páginas <br class="space">
              sin programar
            </h3>
            <p class="primaryText  grayColorTexts">
              ¡Y que queden hermosas!
            </p>
            <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/landing-pages/">Conocer más</a>
          </div>

        </div>

        <div class="col-12 col-md-12 col-lg-6 infoGroup">

          <div class="containerImage">
            <img alt="Organiza tus contactos y gestiona procesos de venta" src="{!! App::setFilePath('/assets/images/illustrations/others/home_icono-2.png') !!}" alt="" loading="lazy">
          </div>

          <div class="containerElements">
            <h3 class="secondaryTitle blackColor">
              Organiza y gestiona tus ventas <br class="space">
              con nuestro CRM
            </h3>
            <p class="primaryText  grayColorTexts">
              Con el sistema más fácil de usar
            </p>
            <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/crm-escala/">
              Conocer más
            </a>
          </div>

        </div>

      </div>
      <div class="groupElements row">
        <div class="col-12 col-md-12 col-lg-6 infoGroup">

          <div class="containerImage">
            <img alt="Envía emails de marketing profesionales" src="{!! App::setFilePath('/assets/images/illustrations/others/home_icono-3.png') !!}" alt="" loading="lazy">
          </div>

          <div class="containerElements">
            <h3 class="secondaryTitle blackColor">
              Envía emails de marketing <br class="space">
              profesionales
            </h3>
            <p class="primaryText  grayColorTexts">
              Personalizados y masivos, sin caer <br class="space">
              en la bandeja de SPAM
            </p>
            <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/email/">
              Conocer más
            </a>
          </div>

        </div>

        <div class="col-12 col-md-12 col-lg-6 infoGroup">

          <div class="containerImage">
            <img alt="Multiplica tus visitas web con anuncios digitales" src="{!! App::setFilePath('/assets/images/illustrations/others/home_icono-4.png') !!}" alt="" loading="lazy">
          </div>

          <div class="containerElements">
            <h3 class="secondaryTitle blackColor">
              Multiplica tus visitas web <br class="space">
              con anuncios digitales
            </h3>
            <p class="primaryText  grayColorTexts">
              En Facebook, Instagram y Google
            </p>
            <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/anuncios-digitales/">
              Conocer más
            </a>
          </div>

        </div>
      </div>

      <div class="groupElements row">
        <div class="col-12 col-md-12 col-lg-6 infoGroup">

          <div class="containerImage">
            <img alt="Automatiza tareas y flujos de comunicación" src="{!! App::setFilePath('/assets/images/illustrations/others/home_icono-5.png') !!}" alt="" loading="lazy">
          </div>

          <div class="containerElements">
            <h3 class="secondaryTitle blackColor">
              Automatiza tareas y <br class="space">
              flujos de comunicación
            </h3>

            <p class="primaryText  grayColorTexts">
              Escala trabaja por ti 24/7
            </p>
            <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/automatizacion/">
              Conocer más
            </a>
          </div>

        </div>




        <div class="col-12 col-md-12 col-lg-6 infoGroup">

          <div class="containerImage">
            <img alt="Obtén métricas de marketing y ventas en tiempo real" src="{!! App::setFilePath('/assets/images/illustrations/others/home_icono-6.png') !!}" alt="" loading="lazy">
          </div>

          <div class="containerElements">
            <h3 class="secondaryTitle blackColor">
              Obtén métricas de marketing <br class="space">
              y ventas en tiempo real
            </h3>
            <p class="primaryText  grayColorTexts">
              Con Dashboards inteligentes
            </p>
            <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/analiticas/">
              Conocer más
            </a>
          </div>

        </div>





      </div>


    </section>

  </div>

</section>

{{-- seccion de videos --}}
<section class="customSection sectionParent landingHomeCRM_exp_5">

<div class="section-row">

<section class="innerSectionElement1">

<h2 class="primaryTitle blackColor">
  Los expertos en marketing digital lo dicen: “Escala es muy fácil de usar”
</h2>
<p class="primaryText grayColorTexts">
  Descubre en estos videos cómo los expertos de marketing digital y ventas de toda <br class="desktopTabletElement">
  Latinoamérica le sacan provecho a cada funcionalidad de Escala.
</p>

</section>

<section class="innerSectionElement2">

<div id="carousel-videoHome-Mobile" class="carousel slide mobileElement" data-bs-ride="carousel">

  <div class="carousel-inner"   role="listbox">
    <div class="carousel-item  active">

      <div class="imagesSection row">

      <div class="element col-md-12 col-lg-4">

        <div class="videoContent hytPlayerWrap">

              {{-- <div class="youtube" data-embed="AtwdW3mpiKU">
                              <div class="play-button"></div>
                          </div> --}}

                          <video
                          class="video-js"
                          controls

                          preload="none"
                          {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                          data-setup="{
                            autoplay: false
                          }"
                          poster="{!! App::setFilePath('/assets/images/illustrations/others/home_cap1.jpg') !!}"
                        >
                          <source src="{!! App::setFilePath('/assets/videos/video_home_1.mp4') !!}" type="video/mp4" />
                          <source src="{!! App::setFilePath('/assets/videos/video_home_1.mp4') !!}" type="video/webm" />
                          <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                              >supports HTML5 video</a
                            >
                          </p>
                        </video>



        </div>

        <div class="info">

          <h3 class="titleVideo">
            Cómo crear una landing page <br class="desktopTabletElement">
            profesional sin programar con Escala
          </h3>

      </div>

    </div>
    </div>
    </div>
    <div class="carousel-item">

      <div class="imagesSection row">


      <div class="element col-md-12 col-lg-4">

        <div class="videoContent hytPlayerWrap">

              {{-- <div class="youtube" data-embed="elw0_VBWSiY">
                              <div class="play-button"></div>
                          </div> --}}


                          <video
                          class="video-js"
                          controls

                          preload="none"
                          {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                          data-setup="{
                            autoplay: false
                          }"
                          poster="{!! App::setFilePath('/assets/images/illustrations/others/home_cap2.jpg') !!}"
                        >
                          <source src="{!! App::setFilePath('/assets/videos/video_home_2.mp4') !!}" type="video/mp4" />
                          <source src="{!! App::setFilePath('/assets/videos/video_home_2.mp4') !!}" type="video/webm" />
                          <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                              >supports HTML5 video</a
                            >
                          </p>
                        </video>


        </div>

        <div class="info">

          <h3 class="titleVideo">
            Herramienta de marketing <br class="desktopTabletElement">
            todo en uno 2022
          </h3>

      </div>
    </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="imagesSection row">

      <div class="element col-md-12 col-lg-4">

        <div class="videoContent hytPlayerWrap">

              {{-- <div class="youtube" data-embed="jRaO6-VBFEU">
                              <div class="play-button"></div>
                          </div> --}}

                          <video
                          class="video-js"
                          controls

                          preload="none"
                          {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                          data-setup="{
                            autoplay: false
                          }"
                          poster="{!! App::setFilePath('/assets/images/illustrations/others/home_cap3.jpg') !!}"
                        >
                          <source src="{!! App::setFilePath('/assets/videos/video_home_3.mp4') !!}" type="video/mp4" />
                          <source src="{!! App::setFilePath('/assets/videos/video_home_3.mp4') !!}" type="video/webm" />
                          <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                              >supports HTML5 video</a
                            >
                          </p>
                        </video>


        </div>

        <div class="info">

          <h3 class="titleVideo">
            ¿Qué es un CRM y para qué sirve? <br class="desktopTabletElement">
            Aumenta tus ventas con Escala
          </h3>

      </div>
    </div>
  </div>
  </div>
  </div>

  <ol class="carousel-indicators">

    <button type="button" data-bs-target="#carousel-videoHome-Mobile" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carousel-videoHome-Mobile" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carousel-videoHome-Mobile" data-bs-slide-to="2" aria-label="Slide 3"></button>

  </ol>


</div>
<div id="carousel-videoHome" class="carousel slide desktopElement" data-bs-ride="carousel">

  <div class="carousel-inner"   role="listbox">

      <div class="carousel-item active">

<div class="imagesSection row">

  <div class="element col-md-12 col-lg-4">

      <div class="videoContent hytPlayerWrap">

            {{-- <div class="youtube" data-embed="AtwdW3mpiKU">
                              <div class="play-button"></div>
                          </div> --}}


                          <video
                          class="video-js"
                          controls

                          preload="none"
                          {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                          data-setup="{
                            autoplay: false
                          }"
                          poster="{!! App::setFilePath('/assets/images/illustrations/others/home_cap1.jpg') !!}"
                        >
                          <source src="{!! App::setFilePath('/assets/videos/video_home_1.mp4') !!}" type="video/mp4" />
                          <source src="{!! App::setFilePath('/assets/videos/video_home_1.mp4') !!}" type="video/webm" />
                          <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                              >supports HTML5 video</a
                            >
                          </p>
                        </video>



      </div>

      <div class="info">

        <h3 class="titleVideo">
          Cómo CREAR una LANDING PAGE <br class="desktopTabletElement">
          profesional sin programar con ESCALA
        </h3>

    </div>

  </div>

  <div class="element col-md-12 col-lg-4">

    <div class="videoContent hytPlayerWrap">

          {{-- <div class="youtube" data-embed="elw0_VBWSiY">
                              <div class="play-button"></div>
                          </div> --}}

                          <video
                          class="video-js"
                          controls

                          preload="none"
                          {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                          data-setup="{
                            autoplay: false
                          }"
                          poster="{!! App::setFilePath('/assets/images/illustrations/others/home_cap2.jpg') !!}"
                        >
                          <source src="{!! App::setFilePath('/assets/videos/video_home_2.mp4') !!}" type="video/mp4" />
                          <source src="{!! App::setFilePath('/assets/videos/video_home_2.mp4') !!}" type="video/webm" />
                          <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                              >supports HTML5 video</a
                            >
                          </p>
                        </video>



    </div>

    <div class="info">

      <h3 class="titleVideo">
        Herramienta de marketing <br class="desktopTabletElement">
        todo en uno 2022
      </h3>

  </div>

  </div>
  <div class="element col-md-12 col-lg-4">

    <div class="videoContent hytPlayerWrap">

          {{-- <div class="youtube" data-embed="jRaO6-VBFEU">
                              <div class="play-button"></div>
                          </div> --}}


                          <video
                          class="video-js"
                          controls

                          preload="none"
                          {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                          data-setup="{
                            autoplay: false
                          }"
                          poster="{!! App::setFilePath('/assets/images/illustrations/others/home_cap3.jpg') !!}"
                        >
                          <source src="{!! App::setFilePath('/assets/videos/video_home_3.mp4') !!}" type="video/mp4" />
                          <source src="{!! App::setFilePath('/assets/videos/video_home_3.mp4') !!}" type="video/webm" />
                          <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                              >supports HTML5 video</a
                            >
                          </p>
                        </video>


    </div>

    <div class="info">

      <h3 class="titleVideo">
        ¿Qué es un CRM y para qué sirve? <br class="desktopTabletElement">
        Aumenta tus ventas con Escala
      </h3>

  </div>

</div>

        </div>

      </div>

  </div>



</div>


</section>
<section class="innerSectionElement3">

<div class="containElements">

  {{-- <h3 class="primaryTitle greenBlueColor">
    Comienza a generar más leads, clientes y ventas
  </h3> --}}

  <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
    Prueba Gratis
  </a>

</div>

</section>

</div>
</section>

@php
$parameters = [
  'type' => 'backgroundColor',
  'classSection' => 'landingHomeCRM_exp_6',
  'enableTitle' => true,
  'titlePrincipal' => '
    <span style="color: #B9E6E9">
      5 Ventajas de potenciar <br class="space">
      tu negocio con
    </span> Escala
  ',
  'subTitlePrincipal' => null,
  'overlay' => true,
  'overlayImage' => App::setFilePath('/assets/images/overlays/planets_overlay_home.png'),
  'enableButton' => false,
  'elements' => array(
              [
                  'img' => App::setFilePath('/assets/images/illustrations/team/home_ventajas-1.png'),
                  'title' => '
                      Una herramienta <br class="space">
                      muy amigable <span class="blueLightColor11">
                        para <br class="space">
                        mercadeo y ventas
                      </span>
                      ',
                  'text' => '
                  <span>
                    Ernesto Valery / Director Huella Studio
                  </span>
                  ',
                  'enableButton' => false,

              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/team/home_ventajas-2.png'),
                  'title' => '
                      Un equipo de servicio <br class="space">
                      extraordinario y bien entrenado. <br class="space">
                      <span class="blueLightColor11">
                        Tienen un equipo atento <br class="space">
                        y disponible cuando lo necesitas
                      </span>
                  ',
                  'text' => '
                    <span>Michelle Palaez / Fundadora Infinito Producciones</span>
                  ',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/home_ventajas-3.png'),
                  'title' => '
                        No dependes de un equipo <br class="space">
                        técnico o de programación. <br class="space">
                        <span class="blueLightColor11">
                          Cualquiera con nivel básico <br class="space">
                          sabría utilizar Escala.
                        </span>
                      ',
                  'text' => '
                    <span>
                      Verónica Bolaños / Account Manager, <br class="space">
                      Publicidad Comercial
                    </span>
                  ',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/home_ventajas-4.png'),
                  'title' => '
                        Todo está 100% en español. <br class="space">
                        <span class="blueLightColor11">
                          Finalmente un software donde la <br class="space">
                          plataforma, el servicio y la educación <br class="space">
                          es en español
                        </span>
                      ',
                  'text' => '
                    <span>Verónica Bolaños / Account Manager, Publicidad Comercial</span>
                  ',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/home_ventajas-5.png'),
                  'title' => '
                          Todas las funcionalidades <br class="space">
                          en un solo lugar, <span class="blueLightColor11">
                          Escala <br class="space">
                          programa las páginas por ti
                        </span>
                      ',
                  'text' => '
                  <span>Michelle Palaez / Fundadora Infinito Producciones</span>
                  ',
                  'enableButton' => false,
              ],
  )
];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1


<section class="customSection sectionParent landingHomeCRM_exp_3">

  <div class="section-row">

        <section class="innerSectionElement1">

          <h2 class="primaryTitle blackColor">
Nuestros clientes te dicen <br class="space">
por qué prefieren Escala
          </h2>

        </section>

        <section class="innerSectionElement2">

                      <div id="carousel-trustPilot-mob" class=" carousel slide mobileElement" data-bs-ride="carousel">

                        <div class="carousel-inner"  role="listbox">

                            <div class="carousel-item active">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(1).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>

                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(2).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>

                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(3).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(4).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(5).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(6).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(7).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(8).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(9).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>


                        </div>


                        <ol class="carousel-indicators">

                          <button type="button" data-bs-target="#carousel-trustPilot-mob" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot-mob" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot-mob" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot-mob" data-bs-slide-to="3" aria-label="Slide 4"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot-mob" data-bs-slide-to="4" aria-label="Slide 5"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot-mob" data-bs-slide-to="5" aria-label="Slide 6"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot-mob" data-bs-slide-to="6" aria-label="Slide 7"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot-mob" data-bs-slide-to="7" aria-label="Slide 8"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot-mob" data-bs-slide-to="8" aria-label="Slide 9"></button>

                        </ol>


                      </div>

                      <div id="carousel-trustPilot-desktop" class="carousel slide desktopElement" data-bs-ride="carousel">


                        <div class="carousel-inner"  role="listbox">

                            <div class="carousel-item active">
                              <div class="row">
                                <div class="testimonial col-md-12 col-lg-4">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(1).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>

                                </div>
                                <div class="testimonial col-md-12 col-lg-4">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(2).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>

                                </div>
                                <div class="testimonial col-md-12 col-lg-4">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(3).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>

                                </div>

                              </div>
                            </div>

                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial col-md-12 col-lg-4">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(4).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>

                                </div>
                                <div class="testimonial col-md-12 col-lg-4">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(5).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>

                                </div>
                                <div class="testimonial col-md-12 col-lg-4">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(6).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>

                                </div>

                              </div>
                            </div>

                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial col-md-12 col-lg-4">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(7).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>

                                </div>
                                <div class="testimonial col-md-12 col-lg-4">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(8).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>

                                </div>
                                <div class="testimonial col-md-12 col-lg-4">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustpilot-home(9).jpg') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>

                                </div>

                              </div>
                            </div>


                        </div>


                        <ol class="carousel-indicators">

                          <button type="button" data-bs-target="#carousel-trustPilot-desktop" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot-desktop" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot-desktop" data-bs-slide-to="2" aria-label="Slide 3"></button>

                        </ol>


                      </div>


        </section>

        <section class="innerSectionElement3">

          <div class="containElements">

            {{-- <h3 class="primaryTitle greenBlueColor">
              Comienza a generar más leads, clientes y ventas
            </h3> --}}

            <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
              Prueba Gratis
            </a>

          </div>

        </section>

  </div>


</section>


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingHomeCRM_exp_7',
        'enableTitle' => true,
        'titlePrincipal' => '
        Servicio Premium
        ',
        'subTitlePrincipal' => '
          En Escala te acompañamos desde el primer día con nuestros gerentes de <br class="desktopTabletElement">
          cuentas, quienes te guiarán en todo tu camino para hacer crecer tu negocio.

        ',
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#lead-form',
        'textButton' => 'Prueba Gratis',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/home_serviciopremium-1.png'),
                'title' => '
                Implementación Guiada
                ',
                'text' => '
                  Obtén el acompañamiento de un gerente de cuentas <br class="desktopTabletElement">
                  especializado en marketing digital, ventas y fidelización, <br class="desktopTabletElement">
                  asignado a tu negocio. Cuenta con sesiones <br class="desktopTabletElement">
                  estratégicas y configuraciones personalizadas, análisis <br class="desktopTabletElement">
                  de tus resultados para optimizar tu progreso y <br class="desktopTabletElement">
                  migración de data para poner tu CRM a punto.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/home_serviciopremium-2.png'),
                'title' => '
                Escala Academy
                ',
                'text' => '
                  Conviértete en un experto de marketing digital y <br class="desktopTabletElement">
                  ventas con formación en vivo. Con capacitaciones <br class="desktopTabletElement">
                  basadas en casos prácticos y estratégicos según tu <br class="desktopTabletElement">
                  plan. Cuenta con recursos autoguiados: guías <br class="desktopTabletElement">
                  prácticas, webinars grabados y más de 80 tutoriales <br class="desktopTabletElement">
                  de nuestra plataforma.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/team/home_serviciopremium-3.png'),
                'title' => '
                Canales de comunicación
                ',
                'text' => '
                  Ten la atención oportuna comunicándote <br class="desktopTabletElement">
                  constantemente con el equipo de Escala por chat, <br class="desktopTabletElement">
                  email y whatsApp de servicio.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/home_serviciopremium-4.png'),
                'title' => '
                Servicios Complementarios
                ',
                'text' => '
                  Disfruta de sesiones de configuración personalizadas <br class="desktopTabletElement">
                  y el diseño de tus plantillas de landing pages y <br class="desktopTabletElement">
                  correos electrónicos adaptados a tu negocio.
                ',

                'enableButton' => false,
            ],


        ],
    ];
    @endphp

    @contain_multiple_cards_T2( $parameters )
    @endcontain_multiple_cards_T2

    <section class="customSection sectionParent landingHomeCRM_exp_8">

      <div class="section-row">


        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              Clientes que hacen crecer sus negocios con <span class="orangeColor">Escala</span>
            </h2>

          </div>

        </section>

        <section class="innerSectionElement sct2">

          <div class="groupElements row">


            <div id="carousel-testimonialHome" class="carousel slide" data-bs-ride="carousel">


              <div class="carousel-inner"  role="listbox">

                  <div class="carousel-item active">
                    <div class="row">
                      <div class="testimonial ">

                        <div class="containElements">


                          <div class="referElements">
                            <div class="containerImage">

                              <img alt="Agencia de Publicidad" src="{!! App::setFilePath('/assets/images/logos/Publicidad-Comercial2.png') !!}" alt="" loading="lazy">


                            </div>

                          </div>

                          <div class="containInfo">
                            <p class="commonText grayColorTexts">
                              “Escala tiene el email builder más amigable que he utilizado en los últimos <br class="desktopElement"> años, y su equipo está comprometido a mantener la plataforma en <br class="desktopElement"> constante actualización en el dinámico mundo digital.”
                            </p>
                          </div>

                          <div class="info">
                            <h3 class="tertiaryTitle blackColor">

                              <span class="greenBlueColor">
                                Verónica Bolaños <br class="space">
                                Account Manager / Agencia de Publicidad <br class="space">
                              </span>
                              Publicidad Comercial / El Salvador

                            </h3>

                          </div>

                        </div>


                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">

                    <div class="testimonial ">
                      <div class="containElements">

                        <div class="referElements">
                          <div class="containerImage">

                            <img alt="Agencia de Marketing" src="{!! App::setFilePath('/assets/images/logos/Huella Studio.png') !!}"  alt="" loading="lazy">

                          </div>



                        </div>

                         <div class="containInfo">
                          <p class="commonText grayColorTexts">
                            “Son muchas herramientras integradas en un solo sitio, una herramienta muy <br class="desktopElement"> sencilla de utilizar y le da mucho beneficio al cliente. Nunca me habían <br class="desktopElement"> atendido de esta manera en ningún tipo de plataforma similar. Primera vez <br class="desktopElement"> que me atienden de esta manera y agradecidos enormemente. Felicidades <br class="desktopElement"> porque tienen un equipo de trabajo increíble.”
                          <p>
                        </div>

                        <div class="info">

                          <h3 class="tertiaryTitle blackColor">

                            <span class="greenBlueColor">
                              Ernesto Valery y Edher Nieves <br class="space">
                              Director Creativo / Agencia de Marketing <br class="space">
                            </span>
                            Huella Studio / México

                          </h3>

                        </div>

                      </div>

                    </div>
                  </div>

                  </div>
                  <div class="carousel-item">
                    <div class="row">

                      <div class="testimonial ">
                        <div class="containElements">

                          <div class="referElements">
                            <div class="containerImage">

                              <img alt="Turismo" src="{!! App::setFilePath('/assets/images/logos/Infinito Producciones copia.png') !!}" alt="" loading="lazy">

                            </div>



                          </div>

                          <div class="containInfo">

                            <p class="commonText grayColorTexts">
                              “Yo ya había utilizado un CRM y otras plataformas que tienen más o menos <br class="desktopElement"> la misma esencia. Encontrarme con Escala fue importante porque es más <br class="desktopElement"> completa. Tienes todo lo que necesitas, desde captar el interés de los <br class="desktopElement">  clientes, hacer seguimiento, medir indicadores de desempeño de tu equipo <br class="desktopElement"> de ventas, hasta estandarizar el proceso de la comunicación. Ahora que mi <br class="desktopElement"> mercado se redujo por la pandemia, Escala es sumamente oportuno. <br class="desktopElement"> Además, estoy muy contenta por todo el apoyo que he recibido por el <br class="desktopElement"> equipo de Escala.”
                            </p>
                          </div>

                          <div class="info">

                            <h3 class="tertiaryTitle blackColor">

                              <span class="greenBlueColor">
                                Michell Peláez <br class="space">
                                Ejecutiva de cuentas corporativas / Turismo <br class="space">
                              </span>
                              Infinito Producciones / Venezuela

                            </h3>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <div class="carousel-item">
                    <div class="row">

                    <div class="testimonial ">
                      <div class="containElements">


                        <div class="referElements">
                          <div class="containerImage">

                            <img alt="Agencia de Comunicaciones" src="{!! App::setFilePath('/assets/images/logos/Initiative.png') !!}" alt="" loading="lazy">

                          </div>



                        </div>

                        <div class="containInfo">

                          <p class="commonText grayColorTexts">
                            La herramienta es muy amigable, y permite que la gestión pueda realizarla <br class="desktopElement"> casi que cualquier persona con conocimientos básicos en plataformas <br class="desktopElement"> digitales.
                            <br class="space">
                            <br class="space">
                            El servicio es expedito y el equipo a cargo se preocupa por extender <br class="desktopElement"> capacitaciones necesarias que garantizan que los equipos estén sacando <br class="desktopElement"> el mayor provecho de la herramienta.
                             <br class="space">
                             <br class="space">
                            La organización visual de la pantalla de entrada es muy intuitiva, esto <br class="desktopElement"> permite la exploración y el autoaprendizaje de las diferentes variables que <br class="desktopElement"> se pueden configurar en la plataforma.
                          </p>
                        </div>

                        <div class="info">


                          <h3 class="tertiaryTitle blackColor">

                            <span class="greenBlueColor">
                              Dayana Palacios <br class="space">
                              Directora de medios y marketing digital / Agencia de Comunicaciones <br class="space">
                            </span>
                            Initiative / Costa Rica

                          </h3>

                            </div>

                      </div>

                    </div>

                  </div>
                  </div>

                  <div class="carousel-item">
                    <div class="row">

                      <div class="testimonial ">

                        <div class="containElements">

                          <div class="referElements">
                            <div class="containerImage">

                              <img alt="Academia de Coaching" src="{!! App::setFilePath('/assets/images/logos/Logo ILC Academy-1.png') !!}" alt="" loading="lazy">

                            </div>



                          </div>

                          <div class="containInfo">

                            <p class="commonText grayColorTexts">
                              ¡¡¡Extraordinario equipo con conocimientos sólidos de la realidad <br class="desktopElement">
                              de lanzamientos de iniciativas de aprendizaje y crecimiento!!!
                              <br class="space">
                              🔥🔥🔥🔥👏👏👏👏🙌

                            </p>
                          </div>

                          <div class="info">

                            <h3 class="tertiaryTitle blackColor">

                              <span class="greenBlueColor">
                                Fernando Celis <br class="space">
                                CEO y Fundador / Academia de Coaching <br class="space">
                              </span>
                              ILC Academy / Estados Unidos

                            </h3>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="carousel-item">
                    <div class="row">

                    <div class="testimonial ">

                      <div class="containElements">

                        <div class="referElements">
                          <div class="containerImage">

                            <img alt="Entretenimiento Deportivo" src="{!! App::setFilePath('/assets/images/logos/Savage Paintball.png') !!}" alt="" loading="lazy">

                          </div>



                        </div>

                        <div class="containInfo">

                          <p class="commonText grayColorTexts">
                            Felicitaciones al equipo de Escala, pues de verdad la plataforma me <br class="desktopElement"> gusta bastante. Posee herramientas muy útiles y lo mejor e  que es <br> simple de manipular.
                          </p>
                        </div>

                        <div class="info">

                          <h3 class="tertiaryTitle blackColor">

                            <span class="greenBlueColor">
                              Felix Pacheco <br class="space">
                              Entretenimiento Deportivo <br class="space">
                            </span>
                            Savage Paintball / Venezuela

                          </h3>

                        </div>

                      </div>

                    </div>


                  </div>
                  </div>

              </div>

              <ol class="carousel-indicators">

                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="4" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="5" aria-label="Slide 3"></button>
              </ol>


            </div>

          </div>



        </section>



      </div>
  </section>



  @php
 $parameters = array(
   'classSection' => 'landingHomeCRM_exp_9',
   'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png')
   ) ;
   @endphp
@contain_FAQ_T1( $parameters )

@endcontain_FAQ_T1

<section class="customSection sectionParent landingHomeCRM_exp_10 fullWidth">

  <img  src="{!! App::setFilePath('/assets/images/overlays/overlay_stars.png') !!}"  alt="" class="backOverlay">

    <div class="section-row">

      <div class="containElements">

        <div class="info">

          <h3 class="primaryTitle">
            <span class="blueLightColor11">Comienza a generar</span> <br class="space">
            más leads, clientes y ventas
          </h3>

          <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
            Prueba Gratis
          </a>

        </div>

        <div class="image">

          <div class="containerImage">

            <img  src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ship.png') !!}" alt="" loading="lazy">

          </div>

        </div>

      </div>

    </div>

</section>




</div>

</div>

</div>




@endsection
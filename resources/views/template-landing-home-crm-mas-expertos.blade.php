{{--
    Template Name: [B] Landing - Home CRM mas expertos
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
        'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
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
     <span class="bold" style="color: #B9E6E9" >CRM + Expertos =</span> <br class="space">
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
     'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/plataforma-escala-home.png'),
'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM'
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
Escala es la Plataforma de CRM todo-en-uno creada por <br class="DT_e">
expertos de marketing, ventas y fidelización para ayudar a las <br class="DT_e">
empresas de habla hispana a alcanzar el éxito.

<div class="ottoSpecialButton">
  <img src="'. App::setFilePath('/assets/images/illustrations/otto/otto-boton-cta-prueba-escala.png') .'" alt="Ilustración de Otto como figura de Escala señalando un botón para iniciar una Recibe un demo de Escala CRM">

  <a href="#" class=" openPopUpButton popup-general-demo-2022">
    Solicita tu Recibe un demo
  </a>

  </div>
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
  'textButton' => 'Recibe un demo',
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
    // 'textButton' => 'Recibe un demo',
    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022 hoverInEffect',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img' => App::setFilePath('/assets/images/illustrations/team/home_acelera_el_exito-1.png'),
            'title' => '<span class="grayColorTexts5">
                 Da a conocer <br class="DT_e">
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
                Cierra más <br class="DT_e">
ventas
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/team/home_acelera_el_exito-4.png'),
            'title' => '<span class="grayColorTexts5">
                Fideliza <br class="DT_e">
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
          <span class="greenBlueColor">La plataforma de CRM todo-en-uno</span> <br class="space">
          más poderosa
        </h2>
        <p class="primaryText grayColorTexts">
          En Escala tienes una plataforma de CRM todo-en-uno con todas las funcionalidades integradas <br class="space">
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
  Descubre en estos videos cómo los expertos de marketing digital y ventas de toda <br class="DT_e">
  Latinoamérica le sacan provecho a cada funcionalidad de Escala.
</p>

</section>

<section class="innerSectionElement2">

<div id="carousel-videoHome-Mobile" class="carousel slide MT_e" data-bs-ride="carousel">

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
            Cómo crear una landing page <br class="DT_e">
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
            Herramienta de marketing <br class="DT_e">
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
            ¿Qué es un CRM y para qué sirve? <br class="DT_e">
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
<div id="carousel-videoHome" class="carousel slide D_e" data-bs-ride="carousel">

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
          Cómo CREAR una LANDING PAGE <br class="DT_e">
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
        Herramienta de marketing <br class="DT_e">
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
        ¿Qué es un CRM y para qué sirve? <br class="DT_e">
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

  <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
    Recibe un demo
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
      5 Ventajas de potenciar <br class="space">
      <span style="color: #B9E6E9">
      tu empresa con Escala
      </span>

  ',
  'subTitlePrincipal' => null,
  'overlay' => true,
  'overlayImage' => App::setFilePath('/assets/images/overlays/planets_overlay_home.png'),
  'enableButton' => false,
  'elements' => array(
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/escala-plataforma-crm-todo-en-uno-amigable-intuitiva.png'),
'img_alt' => 'Ilustración de una libreta de notas con un imán en referencia a Escala como una plataforma CRM todo en uno amigable e intuitiva',
                  'title' => '
                        Una plataforma <br class="space">
                        CRM todo-en-uno <br class="space">
                        <span class="blueLightColor11">amigable e intuitiva</span>
                      ',
                  'text' => null,
                  'enableButton' => false,

              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/acompanamiento-en-vivo-implementacion-equipo-escala.png'),
'img_alt' => 'Ilustración de una libreta de notas con un imán en referencia a Escala como una plataforma CRM todo en uno amigable e intuitiva',
                  'title' => '
                    Acompañamiento de expertos <br class="space">
                    <span class="blueLightColor11">
                      en vivo para implementar tu <br class="space">
                      estrategia digital con éxito
                    </span>
                  ',
                  'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/funcionalidades-marketing-ventas-fidelizacion-escala.png'),
'img_alt' => 'Ilustración de un megáfono en referencia a todas las funcionalidades de marketing, ventas y fidelización en un solo lugar, Escala',
                  'title' => '
                        Todas las funcionalidades de <br class="space">
                        marketing, ventas y fidelización <br class="space">
                        <span class="blueLightColor11">en un solo lugar</span>
                      ',
                      'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/escala-plataforma-100-espanol-empresas-latam.png'),
'img_alt' => 'Ilustración de un computador con una letra Ñ gigante en su pantalla en referencia a que Escala es una plataforma 100% en español, pensada para impulsar el crecimiento de las empresas latinoamericanas',
                  'title' => '
                        100% en español, <span class="blueLightColor11">
                          pensada para <br class="space">
                          impulsar el crecimiento de las <br class="space">
                          empresas latinoamericanas
                        </span>
                      ',
                      'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/planes-medida-tamano-empresas-escala.png'),
'img_alt' => 'Ilustración de un computador con una línea de crecimiento monetario en su teclado en referencia a los planes hechos a la medida y tamaños de empresas de Escala',
                  'title' => '
                        Con planes hechos a tu medida, <br class="space">
                        <span class="blueLightColor11">
                          del tamaño de las necesidades <br class="space">
                          de tu empresa
                        </span>
                      ',
                      'text' => null,
                  'enableButton' => false,
              ],
  )
];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1

{{-- <section class="customSection sectionParent landingHomeCRM_exp_3"> --}}
@php
       $parameters = [
        'classSection' => 'landingHomeCRM_exp_3',
        'enableTitle' => true,
        'titlePrincipal' => '
        Nuestros clientes te dicen <br class="space">
        <span class="greenBlueColor">por qué prefieren Escala</span>
        ',
        'subTitlePrincipal' => null,
        'enableContainerButton' => true,
        'urlButton' => '#',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'textButton' => 'Recibe un demo',
        'mob_reviews' => array(
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-1.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-2.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-3.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-4.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-5.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-6.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-7.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-8.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-9.jpeg')
        ),
        'desk_reviews' => array(
          [
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-1.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-2.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-3.jpeg')
          ],
          [
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-4.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-5.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-6.jpeg')
          ],
          [
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-7.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-8.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-9.jpeg')
          ]
        ),
      ];
@endphp

@reviews_sliders_T1( $parameters )
@endreviews_sliders_T1



    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingHomeCRM_exp_7',
        'enableTitle' => true,
        'titlePrincipal' => '
        ¡Somos un equipo! <br class="space">
        <span class="greenBlueColor">Te acompañamos desde el primer día</span>
        ',
        'subTitlePrincipal' => '
          En Escala te asignamos un gerente de cuentas, quien te guiará paso a paso para que implementes tu <br class="DT_e">
          estrategia digital con éxito y maximices el uso de nuestra plataforma. Además, dispones de contenido de <br class="DT_e">
          formación, atención oportuna y servicios complementarios adaptados a tus necesidades.

        ',
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/home_serviciopremium-1.png'),
                'title' => '
                Implementación Guiada
                ',
                'text' => '
                  Obtén el acompañamiento de un gerente de cuentas <br class="DT_e">
                  especializado en marketing digital, ventas y fidelización, <br class="DT_e">
                  asignado a tu negocio. Cuenta con sesiones <br class="DT_e">
                  estratégicas y configuraciones personalizadas, análisis <br class="DT_e">
                  de tus resultados para optimizar tu progreso y <br class="DT_e">
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
                    Conviértete en un experto de marketing digital y <br class="DT_e">
                    ventas con formación en vivo. Con capacitaciones <br class="DT_e">
                    basadas en casos prácticos y estratégicos según tu <br class="DT_e">
                    plan. En Escala te damos recursos autoguiados: guías <br class="DT_e">
                    prácticas, webinars grabados y tutoriales para <br class="DT_e">
                    aprovechar nuestra plataforma.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/team/home_serviciopremium-3.png'),
                'title' => '
                Canales de comunicación
                ',
                'text' => '
                  Ten la atención oportuna comunicándote <br class="DT_e">
                  constantemente con el equipo de Escala por chat, <br class="DT_e">
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
                  Disfruta de sesiones de configuración personalizadas <br class="DT_e">
                  y el diseño de tus plantillas de landing pages y <br class="DT_e">
                  correos electrónicos adaptados a tu empresa.
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
                              “Escala tiene el email builder más amigable que he utilizado en los últimos <br class="D_e"> años, y su equipo está comprometido a mantener la plataforma en <br class="D_e"> constante actualización en el dinámico mundo digital.”
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
                            “Son muchas herramientras integradas en un solo sitio, una herramienta muy <br class="D_e"> sencilla de utilizar y le da mucho beneficio al cliente. Nunca me habían <br class="D_e"> atendido de esta manera en ningún tipo de plataforma similar. Primera vez <br class="D_e"> que me atienden de esta manera y agradecidos enormemente. Felicidades <br class="D_e"> porque tienen un equipo de trabajo increíble.”
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
                              “Yo ya había utilizado un CRM y otras plataformas que tienen más o menos <br class="D_e"> la misma esencia. Encontrarme con Escala fue importante porque es más <br class="D_e"> completa. Tienes todo lo que necesitas, desde captar el interés de los <br class="D_e">  clientes, hacer seguimiento, medir indicadores de desempeño de tu equipo <br class="D_e"> de ventas, hasta estandarizar el proceso de la comunicación. Ahora que mi <br class="D_e"> mercado se redujo por la pandemia, Escala es sumamente oportuno. <br class="D_e"> Además, estoy muy contenta por todo el apoyo que he recibido por el <br class="D_e"> equipo de Escala.”
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
                            La herramienta es muy amigable, y permite que la gestión pueda realizarla <br class="D_e"> casi que cualquier persona con conocimientos básicos en plataformas <br class="D_e"> digitales.
                            <br class="space">
                            <br class="space">
                            El servicio es expedito y el equipo a cargo se preocupa por extender <br class="D_e"> capacitaciones necesarias que garantizan que los equipos estén sacando <br class="D_e"> el mayor provecho de la herramienta.
                             <br class="space">
                             <br class="space">
                            La organización visual de la pantalla de entrada es muy intuitiva, esto <br class="D_e"> permite la exploración y el autoaprendizaje de las diferentes variables que <br class="D_e"> se pueden configurar en la plataforma.
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
                              ¡¡¡Extraordinario equipo con conocimientos sólidos de la realidad <br class="D_e">
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
                            Felicitaciones al equipo de Escala, pues de verdad la plataforma me <br class="D_e"> gusta bastante. Posee herramientas muy útiles y lo mejor e  que es <br> simple de manipular.
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

          <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
            Recibe un demo
          </a>

        </div>

        <div class="image">

          <div class="containerImage">

            <img  src="{!! App::setFilePath('/assets/images/illustrations/others/escala-plataforma-generar-leads-clientes-ventas.png') !!}" alt="Ilustración de un cohete en curso en referencia a Escala como la plataforma ideal para crecer y generar más leads, clientes y ventas" alt="" loading="lazy">

          </div>

        </div>

      </div>

    </div>

</section>




</div>

</div>

</div>




@endsection
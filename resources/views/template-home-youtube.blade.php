
{{--
  Template Name: [B] Home - youtube
--}}

@extends('layouts.app')
@section('content')
<div id="homeBootstrap">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol homeSection0',
     'title' => '<span style="color: #B9E6E9">
        Genera más leads,<br class="desktopElement"> aumenta tus <br class="mobileElement"> ventas y <br class="desktopElement"> fideliza a más clientes
        </span>',
     'text' => '<span class="whiteColor">
      Escala es el software todo en uno de <br class="space">
      marketing digital y ventas más fácil de usar <br class="space">
      que impulsará el crecimiento de tu negocio.
      </span>
      <p class="byAutor">
        <span class="up">
          Andrés Moreno
          </span>
        <span class="bottom">
          Fundador de Escala & <br class="mobileElement"> Open English
          </span>
        </p>
      ',
     'threeCol' => true,
     'textForm' => 'Comienza ahora',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/am/andreshomev2.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1

    {{-- @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'homeSection1',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'title' => '
        Con Escala tus clientes <br class="space">
        <span class="greenBlueColor">están en el centro de tu estrategia</span>',
        'img' => App::setFilePath('/assets/images/illustrations/others/Group_home1.png'),
        'text' => '
Flywheel es la estrategia de crecimiento acelerado utilizada por Andrés Moreno <br class="desktopTabletElement">
y el grupo de expertos de Escala para acompañarte a alcanzar el éxito, logrando:
<br class="space">
<br class="space">
<ul>
  <li>
    Generar demanda de tus productos y servicios a través de herramientas <br class="desktopTabletElement"> de marketing digital cómo: CRM, email marketing, landing pages y automatizaciones.
  </li>
  <li>
    Aumentar las ventas gestionando todo el proceso desde un solo lugar
  </li>
  <li>
    Aumentar la retención de tus clientes creando relaciones a largo plazo
  </li>
</ul>
<br class="space">
<p class="text">
  <strong>Impulsa el crecimiento de tu negocio con Escala.</strong>
</p>
        ',
        'enableButton' => false,
        // 'urlButton' => App::setTypeUrl().'/zoom-meeting',
        // 'typeButton' => 'primaryButton',
        // 'textButton' => 'Hablar con un asesor',
        'side' => 'left',
    ];
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1 --}}





@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'homeSection_1_2',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => '
  Descubre todo lo que puedes <br class="space">
lograr con Escala',
'typeVideo' =>  'localvideo',
  'videoEmbed' =>  App::setFilePath('/assets/videos/am_home1.mp4'),
  'videoCover' => App::setFilePath('/assets/images/illustrations/others/tapa_video_home_03a.jpg'),
  'text' => '
  Escala fue creada por Andrés Moreno y un <br class="desktopTabletElement">
equipo de expertos y es la herramienta preferida <br class="desktopTabletElement">
por los emprendedores hispanoamericanos para <br class="desktopTabletElement">
aumentar las ventas en sus negocios.
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton',
  'textButton' => 'Prueba Escala ya',
  'side' => 'left',
 ) ;
@endphp


@contain_text_video_T1( $parameters )

@endcontain_text_video_T1


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'homeSection2',
    'enableTitle' => true,
    'titlePrincipal' => '
    Acelera el éxito <span class="greenBlueColor">de tu negocio</span>
    ',
    'subTitlePrincipal' => 'Haz crecer tu empresa de manera rentable, sostenible y escalable.',
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => '¡Comenzar ahora!',
    // 'typeButton' => 'primaryButton hoverInEffect',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/home_icono_01.png'),
            'title' => '<span class="grayColorTexts5">
                 Da a conocer <br class="desktopTabletElement">
        tu negocio
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/home_icono_02.png'),
            'title' => '<span class="grayColorTexts5">
                Multiplica el interés <br class="space">
por tus productos y servicios
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/home_icono_03.png'),
            'title' => '<span class="grayColorTexts5">
                Cierra más <br class="desktopTabletElement">
ventas
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/home_icono_04.png'),
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

<section class="customSection sectionParent homeSection3">

  <div class="section-row">

        <section class="innerSectionElement1">

          <h2 class="primaryTitle blackColor">
            Nuestros clientes te dicen <br class="mobileElement"> por qué <br class="desktopElement">
prefieren Escala
          </h2>


        </section>

        <section class="innerSectionElement2">

          <div class="imagesSection">

              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust1.png') !!}" alt="">

              </div>
              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust2.png') !!}" alt="">

              </div>
              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust3.png') !!}" alt="">

              </div>

          </div>

        </section>

        <section class="innerSectionElement3">

          <div class="containElements">

            {{-- <h3 class="primaryTitle greenBlueColor">
              Comienza a generar más leads, clientes y ventas
            </h3> --}}

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
              ¡Comenzar ahora!
            </a>


          </div>

        </section>

  </div>


</section>



    <section class="customSection sectionParent homeSection4">

        <div class="section-row">

          <section class="innerSectionElement sct1">

            <div class="containElements">

              <h2 class="primaryTitle blackColor">
                <span class="greenBlueColor">La plataforma todo-en-uno</span> <br class="space">
                de marketing digital y ventas
              </h2>
              <p class="primaryText grayColorTexts">

                En <strong>Escala</strong> tienes todas las herramientas <br class="space"> integradas que necesitas para impulsar tu éxito.
              </p>

            </div>

          </section>
          <section class="innerSectionElement sct2">

            <div class="groupElements row">



              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Crea increíbles páginas sin programar" src="{!! App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_13.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
                    Crea increíbles páginas <br class="space">
sin programar
                  </h3>
                  <p class="primaryText  grayColorTexts">¡Y que queden hermosas!</p>
                  <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/landing-pages/">Conocer más</a>
                </div>

              </div>

              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Organiza tus contactos y gestiona procesos de venta" src="{!! App::setFilePath('/assets/images/illustrations/others/5_todoenuno_04.png') !!}" alt="" loading="lazy">
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
                  <img alt="Envía emails de marketing profesionales" src="{!! App::setFilePath('/assets/images/illustrations/others/5_todoenuno_01.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
                    Envía emails de marketing <br class="space"> profesionales

                  </h3>
                  <p class="primaryText  grayColorTexts">
                    Personalizados y masivos, sin caer <br class="space"> en la bandeja de SPAM
                  </p>
                  <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/email/">
                    Conocer más
                  </a>
                </div>

              </div>

              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Multiplica tus visitas web con anuncios digitales" src="{!! App::setFilePath('/assets/images/illustrations/others/3_ahorratiempo_03.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
                    Multiplica tus visitas web <br class="space"> con anuncios digitales

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
                  <img alt="Automatiza tareas y flujos de comunicación" src="{!! App::setFilePath('/assets/images/illustrations/others/5_todoenuno_05.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
                    Automatiza tareas y <br class="space">
                    flujos de comunicación
                  </h3>

                  <p class="primaryText  grayColorTexts">Escala trabaja por ti 24/7</p>
                  <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/automatizacion/">
                    Conocer más
                  </a>
                </div>

              </div>




              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Obtén métricas de marketing y ventas en tiempo real" src="{!! App::setFilePath('/assets/images/illustrations/others/3_ahorratiempo_04.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
                    Obtén métricas de marketing <br class="space"> y ventas en  tiempo real

                  </h3>
                  <p class="primaryText  grayColorTexts">Con dashboards inteligentes</p>
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
<section class="customSection sectionParent homeSection5">

  <div class="section-row">

    <section class="innerSectionElement1">

      <h2 class="primaryTitle blackColor">
        Los expertos en marketing digital <br class="mobileElement"> lo dicen: “Escala es muy fácil de usar”
      </h2>
      <p class="primaryText grayColorTexts">
        Descubre en estos videos cómo los expertos de marketing digital y ventas de toda <br class="desktopTabletElement"> Latinoamérica le sacan provecho a cada funcionalidad de Escala.
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
                                data-setup="{}"
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
                                data-setup="{}"
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
                                data-setup="{}"
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
                                data-setup="{}"
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
                                data-setup="{}"
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
                                data-setup="{}"
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

        <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
          ¡Comenzar ahora!
        </a>


      </div>

    </section>

</div>
</section>


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'homeSection6',
        'enableTitle' => true,
        'titlePrincipal' => '
        <span style="color: #B9E6E9">
          5 Ventajas de potenciar <br class="space">
          tu negocio con
        </span> Escala
        ',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'overlayImage' => null,
        'enableButton' => false,
        'elements' => array(
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/home_icono_05.png'),
                        'title' => '<span class="blueLightColor11">
                            Una herramientas <br class="space">
                            muy amigable
                            </span>',
                        'text' => '
                        Para mercadeo y ventas
                        <br class="space">
                        <br class="space">
                        <span>Ernesto Valery / Director Huella Studio</span>
                        ',
                        'enableButton' => false,

                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/home_icono_06.png'),
                        'title' => '<span class="blueLightColor11">
                            Un equipo de servicio <br class="space">
extraordinario y bien entrenado
                            </span>
                        ',
                        'text' => '
                        Tienen un equipo atento <br class="space">
y disponible cuando lo necesitas
<br class="space">
<br class="space">
<span>Michelle Palaez / Fundadora Infinito Producciones</span>
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/home_icono_07.png'),
                        'title' => '<span class="blueLightColor11">
                            No dependes de un equipo <br class="space">
técnico o de programación
                            </span>',
                        'text' => '
                        Cualquiera con nivel básico <br class="space">
sabría utilizar Escala.
<br class="space">
<br class="space">
<span>
  Verónica Bolaños / Account Manager, <br class="space">
  Publicidad Comercial
</span>
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/home_icono_08.png'),
                        'title' => '<span class="blueLightColor11">
                            Todo está 100% en español
                            <br class="desktopTabletElement">
                            </span>',
                        'text' => '
                        Finalmente un software donde la plataforma, <br class="space">
el servicio y la educación es en español
<br class="space">
<br class="space">
<span>Verónica Bolaños / Account Manager, Publicidad Comercial</span>
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/home_icono_09.png'),
                        'title' => '<span class="blueLightColor11">
                            Todas las funcionalidades <br class="space">
en un solo lugar
                            </span>',
                        'text' => '
                        Escala programa las páginas por ti
                         <br class="space">
                         <br class="space">
                        <span>Michelle Palaez / Fundadora Infinito Producciones</span>
                        ',
                        'enableButton' => false,
                    ],
        )
    ];
    @endphp

    @contain_5_cards_T1( $parameters )
    @endcontain_5_cards_T1

    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'homeSection7',
        'enableTitle' => true,
        'titlePrincipal' => '
        Servicio Premium
        ',
        'subTitlePrincipal' => '
En Escala te acompañamos desde el primer día con nuestros <br class="desktopTabletElement">
especialistas del éxito, quienes te guiarán en todo tu camino para <br class="desktopTabletElement">
hacer crecer tu negocio.
        ',
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#lead-form',
        'textButton' => 'Hablar con un asesor',
        'typeButton' => 'primaryButton hoverInEffect',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_01.png'),
                'title' => '<span class="greenBlueColor7">
                    Acompañamiento Premium
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_02.png'),
                'title' => '<span class="greenBlueColor7">
                    Formación constante
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_03.png'),
                'title' => '<span class="greenBlueColor7">
                    Atención oportuna
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_04.png'),
                'title' => '<span class="greenBlueColor7">
                    Servicios especializados
                    </span>',
                'enableButton' => false,
            ],


        ],
    ];
    @endphp

    @contain_multiple_cards_T2( $parameters )
    @endcontain_multiple_cards_T2

    <section class="customSection sectionParent homeSection8">

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
                              “Escala tiene el email builder más amigable que he utilizado en los últimos <br> años, y su equipo está comprometido a mantener la plataforma en <br> constante actualización en el dinámico mundo digital.”
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
                            “Son muchas herramientras integradas en un solo sitio, una herramienta muy <br> sencilla de utilizar y le da mucho beneficio al cliente. Nunca me habían <br> atendido de esta manera en ningún tipo de plataforma similar. Primera vez <br> que me atienden de esta manera y agradecidos enormemente. Felicidades <br> porque tienen un equipo de trabajo increíble.”
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
                              “Yo ya había utilizado un CRM y otras plataformas que tienen más o menos <br> la misma esencia. Encontrarme con Escala fue importante porque es más <br> completa. Tienes todo lo que necesitas, desde captar el interés de los <br>  clientes, hacer seguimiento, medir indicadores de desempeño de tu equipo <br> de ventas, hasta estandarizar el proceso de la comunicación. Ahora que mi <br> mercado se redujo por la pandemia, Escala es sumamente oportuno. <br> Además, estoy muy contenta por todo el apoyo que he recibido por el <br> equipo de Escala.”
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
                            La herramienta es muy amigable, y permite que la gestión pueda realizarla <br> casi que cualquier persona con conocimientos básicos en plataformas <br> digitales.
                            <br class="space">
                            <br class="space">
                            El servicio es expedito y el equipo a cargo se preocupa por extender <br> capacitaciones necesarias que garantizan que los equipos estén sacando <br> el mayor provecho de la herramienta.
                             <br class="space">
                             <br class="space">
                            La organización visual de la pantalla de entrada es muy intuitiva, esto <br> permite la exploración y el autoaprendizaje de las diferentes variables que <br> se pueden configurar en la plataforma.
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
                              ¡¡¡Extraordinario equipo con conocimientos sólidos de la realidad <br>
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
                            Felicitaciones al equipo de Escala, pues de verdad la plataforma me <br> gusta bastante. Posee herramientas muy útiles y lo mejor e  que es <br> simple de manipular.
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

{{--
        <section class="mobileElement showMore innerSectionElement sct3">

          <div class="containElements">


              <a onclick="showTestimonials('show')" class="greyButton hoverInEffect">
                Cargar más testimonios
              </a>


          </div>
        </section> --}}

      </div>
  </section>



  @php
 $parameters = array(
   'classSection' => 'homeSection9',
   'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png')
   ) ;
   @endphp
@contain_FAQ_T1( $parameters )

@endcontain_FAQ_T1



<section class="customSection sectionParent homeSection10 fullWidth">



    <div class="section-row">

      <div class="containElements">

        <h3 class="primaryTitle">
          Comienza a generar más leads, <br class="space">
          <span class="greenBlueColor">clientes y ventas</span>
        </h3>

        <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
          Prueba Escala ahora
        </a>


      </div>




    </div>



</section>




</div>

</div>

</div>




@endsection
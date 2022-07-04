
{{--
  Template Name: [B] Home
--}}


@extends('layouts.app')
@section('content')

<div id="homeBootstrap">
  <div class="sections">



    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol homeSection0 newHome',
     'title' => '
     <span class="bold" style="color: #B9E6E9" >CRM + Expertos =</span> <br class="space">
      <span style="color: #FAD872">
        Escalar con éxito
      </span>
    ',
     'text' => '<span class="whiteColor">
          La plataforma CRM todo-en-uno con <br class="space">
          acompañamiento en vivo de especialistas <br class="space">
          para impulsar el crecimiento de tu empresa.
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
  'classSection' => 'homeSection_1_2',
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
empresas de habla hispana a alcanzar el éxito.

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
    'classSection' => 'homeSection2',
    'enableTitle' => true,
    'titlePrincipal' => '
    <span class="greenBlueColor">Potencia el crecimiento de tu empresa</span>
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
            'img' => App::setFilePath('/assets/images/illustrations/others/home_iconos_space-1.png'),
            'title' => '<span class="grayColorTexts5">
          Genera demanda <br class="space">
          de todos tus productos <br class="space">
          y servicios
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/home_iconos_space-2.png'),
            'title' => '<span class="grayColorTexts5">
          Convierte clics <br class="space">
          en clientes, <br class="space">
          sin perder ningún dato
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/home_iconos_space-3.png'),
            'title' => '<span class="grayColorTexts5">
          Haz más eficientes <br class="space">
          tus procesos de <br class="space">
          venta
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/home_iconos_space-4.png'),
            'title' => '<span class="grayColorTexts5">
          Ahorra más tiempo <br class="space">
          automatizando tus acciones <br class="space">
          de marketing digital y ventas
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

        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              <span class="greenBlueColor">La plataforma de CRM</span> <br class="space">
              todo-en-uno más poderosa
            </h2>

            <p class="primaryText grayColorTexts">
              En Escala tienes una plataforma de CRM todo-en-uno con todas las funcionalidades integradas <br class="space">
              que necesitas para generar más demanda, aumentar tus ventas y retener más clientes.
            </p>

          </div>

        </section>

        <section class="innerSectionElement sct2">

          <div class=" row groupElements">

            <div class="image col-md-12 col-lg-6">

              <div class="containElements">

                <div class="containerImage">
                  <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/CRM_home.png') !!}" alt="" loading="lazy">
                </div>

              </div>

            </div>
            <div class="info col-md-12 col-lg-6">
              @php
                  $elements = array(
                    [
                      'title' => 'Crea increíbles páginas sin programar.',
                      'text' => '¡Y que queden hermosas!'
                    ],
                    [
                      'title' => 'Envía emails de marketing profesionales.',
                      'text' => 'Personalizados y masivos, sin caer en la bandeja de SPAM'
                    ],
                    [
                      'title' => 'Automatiza tareas y flujos de comunicación.',
                      'text' => 'Escala trabaja por ti 24/7'
                    ],
                    [
                      'title' => 'Organiza y gestiona tus ventas con nuestro CRM.',
                      'text' => 'Con el sistema más fácil de usar'
                    ],
                    [
                      'title' => 'Multiplica tus visitas web con anuncios digitales.',
                      'text' => 'En Facebook, Instagram y Google'
                    ],
                    [
                      'title' => 'Obtén métricas de marketing y ventas en tiempo real.',
                      'text' => 'Con Dashboards inteligentes'
                    ],

                  );
              @endphp

              <div class="containElements">

                <ul class="elements">
                  @foreach ($elements as $item)
                  <li class="item">
                    <div class="containerImage">
                      <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector_check.png') !!}" alt="" loading="lazy">
                    </div>
                    <div class="text">
                      <h3>
                        {!! $item['title'] !!}
                      </h3>
                      <p class="text">
                        {!! $item['text'] !!}
                      </p>
                    </div>
                  </li>
                  @endforeach
                </ul>

              </div>

            </div>

          </div>

        </section>


  </div>

 </section>

 @php
 $parameters = [
     'type' => 'backgroundColor',
     'classSection' => 'homeSection4',
     'enableTitle' => false,
     'titlePrincipal' => null,
     'subTitlePrincipal' => null,
     'title' => '
       <strong>Los Expertos</strong><br class="space">
       <span class="greenBlueColor">¡Nuestra arma secreta!</span>
       ',
     'img' => App::setFilePath('/assets/images/person/capacitacion_pareja.png'),
     'text' => '
         Con el Plan PRO de Escala, nuestros especialistas en marketing <br class="desktopTabletElement">
         digital y ventas te guiarán paso a paso en la construcción de tu <br class="desktopTabletElement">
         landing page. Sácale máximo provecho a nuestro Creador de Páginas.
     ',
     'enableButton' => false,
     'urlButton' => '#lead-form',
     'textButton' => 'Prueba Gratis',
     'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
     'side' => 'left',
 ];
@endphp

@contain_text_image_T1($parameters)
@endcontain_text_image_T1

@php
$parameters = [
'type' => 'backgroundColor',
'classSection' => 'homeSection4_2',
'enableTitle' => false,
'titlePrincipal' => null,
'subTitlePrincipal' => null,
'overlay' => false,
'overlayImage' => null,
'enableButton' => false,
'elements' => array(
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/icono-1.png'),
               'title' => '
                 Acompañamiento en vivo <br class="space">
                 para crear, publicar y <br class="space">
                 optimizar tus páginas
               ',
               'text' => null,
               'enableButton' => false,

           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/icono-2.png'),
               'title' => '
                 Capacitaciones grupales <br class="space">
                 basadas en mejores prácticas <br class="space">
                 para hacer una landing page ideal
               ',
               'text' => null,
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/icono-3.png'),
               'title' => '
                   Atención prioritaria por <br class="space">
                   WhatsApp, Email y Chat <br class="space">
                   de servicio
                 ',
                 'text' => null,
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/icono-4.png'),
               'title' => '
                     Gerente de cuentas asignado <br class="space">
                     con plan personalizado de <br class="space">
                     implementación
                 ',
                 'text' => null,
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/icono-5.png'),
               'title' => '
                   Configuraciones personalizadas <br class="space">
                   y creación de plantillas <br class="space">
                   customizadas a tu industria
                 ',
                 'text' => null,
               'enableButton' => false,
           ],
)
];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1



{{-- <section class="customSection sectionParent homeSection5">

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

                          <video
                          class="video-js"
                          controls

                          preload="none"
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

                          <video
                          class="video-js"
                          controls

                          preload="none"
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


                          <video
                          class="video-js"
                          controls

                          preload="none"
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

                          <video
                          class="video-js"
                          controls

                          preload="none"
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

                          <video
                          class="video-js"
                          controls

                          preload="none"
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

                          <video
                          class="video-js"
                          controls

                          preload="none"
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

  <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
    Prueba Gratis
  </a>

</div>

</section>

</div>
</section> --}}

@php
$parameters = [
  'type' => 'backgroundColor',
  'classSection' => 'homeSection6',
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
                  'img' => App::setFilePath('/assets/images/illustrations/others/5ventajas-icono-01.png'),
                  'title' => '
                        Una plataforma <br class="space">
                        CRM todo-en-uno <br class="space">
                        <span class="blueLightColor11">amigable e intuitiva</span>
                      ',
                  'text' => null,
                  'enableButton' => false,

              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/5ventajas-icono-02.png'),
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
                  'img' => App::setFilePath('/assets/images/illustrations/others/5ventajas-icono-03.png'),
                  'title' => '
                        Todas las funcionalidades de <br class="space">
                        marketing, ventas y fidelización <br class="space">
                        <span class="blueLightColor11">en un solo lugar</span>
                      ',
                      'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/5ventajas-icono-04.png'),
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
                  'img' => App::setFilePath('/assets/images/illustrations/others/5ventajas-icono-05.png'),
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

@php
       $parameters = [
        'classSection' => 'homeSection7',
        'enableTitle' => true,
        'titlePrincipal' => '
        Nuestros clientes te dicen <br class="space">
        <span class="greenBlueColor">por qué prefieren Escala</span>
        ',
        'subTitlePrincipal' => null,
        'enableContainerButton' => true,
        'urlButton' => '#',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'textButton' => 'Prueba Gratis',
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


    {{-- @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'homeSection7',
        'enableTitle' => true,
        'titlePrincipal' => '
        ¡Somos un equipo! <br class="space">
        <span class="greenBlueColor">Te acompañamos desde el primer día</span>
        ',
        'subTitlePrincipal' => '
          En Escala te asignamos un gerente de cuentas, quien te guiará paso a paso para que implementes tu <br class="desktopTabletElement">
          estrategia digital con éxito y maximices el uso de nuestra plataforma. Además, dispones de contenido de <br class="desktopTabletElement">
          formación, atención oportuna y servicios complementarios adaptados a tus necesidades.

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
                    plan. En Escala te damos recursos autoguiados: guías <br class="desktopTabletElement">
                    prácticas, webinars grabados y tutoriales para <br class="desktopTabletElement">
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
                  correos electrónicos adaptados a tu empresa.
                ',
                'enableButton' => false,
            ],


        ],
    ];
    @endphp --}}

    {{-- @contain_multiple_cards_T2( $parameters )
    @endcontain_multiple_cards_T2 --}}

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
   'classSection' => 'homeSection9',
   'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png')
   ) ;
   @endphp
@contain_FAQ_T1( $parameters )

@endcontain_FAQ_T1

<section class="customSection sectionParent homeSection10 fullWidth">

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
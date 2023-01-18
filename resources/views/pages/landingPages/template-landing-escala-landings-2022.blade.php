

<div id="landing_escalaLandings_2022">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landing_escalaLandings_2022_0',
     'title' => '
        Construye <br class="mobileElement"> increíbles <br class="desktopElement">
        landing pages <br class="space">
        <span style="color: #B9E6E9">guiado por especialistas</span>
        ',
     'text' => '<span class="whiteColor">
        Con Escala  puedes crear, personalizar y publicar <br class="space">
        páginas de alta conversión, acompañado por <br class="space">
        especialistas de  marketing digital y ventas.

      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Recibe un tour guiado de Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/landing_builder_laptop-expertos-2022.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1


    @php
    $parameters = array(
      'type' => 'backgroundColor',
      'classSection' => 'landing_escalaLandings_2022_1',
      'enableTitle' => false,
      'titlePrincipal' => null,
      'subTitlePrincipal' => null,
      'title' => null,
      'typeVideo' =>  'localvideo',
      'videoEmbed' =>  App::setFilePath('/assets/videos/am_home1.mp4'),
      'videoCover' => App::setFilePath('/assets/images/illustrations/others/portada_video_andres.jpg'),
      'text' => '
          <span class="greenBlueColor">
            <strong>
              "Las landing pages han sido clave para <br class="mobileElement"> generar <br class="desktopElement">
              millones de contactos al año en mis <br class="mobileElement"> empresas.
            </strong>
          </span> <br class="desktopElement">
          Basados en estas prácticas de <br class="mobileElement"> alta conversión, diseñamos <br class="desktopElement">
          el Creador de <br class="mobileElement"> Páginas de Escala, el más fácil de usar”.
          <br class="space"><br class="space">
            <span class="byam">
              <strong class="greenBlueColor">
                Andrés Moreno
              </strong>
              <br class="space">
              <small>
                Fundador de Escala y Open English
              </small>
            </span>
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
      'textButton' => 'Recibe un demo por 10 días',
      // 'enableButton2' => true,
      // 'urlButton2' => '#lead-form',
      // 'typeButton2' => 'secondaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
      // 'textButton2' => 'Solicita una DEMO',
      'side' => 'right',
    ) ;
   @endphp

   @contain_text_video_T1( $parameters )
   @endcontain_text_video_T1

   <section class="customSection sectionParent landing_escalaLandings_2022_2">

    <div class="section-row">

          <section class="innerSectionElement">

            <div class=" row groupElements">

              <div class="image col-md-12 col-lg-6">

                <div class="containElements">

                  <h2 class="primaryTitle blackColor">
                    Conoce todo lo que puedes lograr <br class="space">
                    <span class="greenBlueColor">con las landing pages de Escala</span>
                  </h2>

                  <div class="containerImage">
                    <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/builder-pantallas 1.png') !!}" alt="" loading="lazy">
                  </div>


                </div>

              </div>
              <div class="info col-md-12 col-lg-6">

                @php

                    $elements = array(
                      [
                        'title' => 'Elige entre más de 100 plantillas',
                        'text' => 'de alta conversión'
                      ],
                      [
                        'title' => 'Personalízalas y publícalas en un clic',
                        'text' => 'en minutos, sin programar'
                      ],
                      [
                        'title' => 'Intégralas con Facebook ads e Instagram',
                        'text' => 'y atrae miles de leads a tus landing pages'
                      ],
                      [
                        'title' => 'Agrega el botón de WhatsApp',
                        'text' => 'y comunícate en tiempo real con tus leads'
                      ],
                      [
                        'title' => 'Guarda los datos en tu CRM',
                        'text' => 'y hazle seguimiento a tu lead hasta <br class="mobileElement"> cerrar la venta'
                      ],
                      [
                        'title' => '100% responsive',
                        'text' => 'perfectas en todos los dispositivos'
                      ],
                      [
                        'title' => 'Comunícate con Email Marketing',
                        'text' => 'generando relaciones a largo plazo <br class="mobileElement"> con tus <br class="space"> leads '
                      ],
                      [
                        'title' => 'Analiza y optimiza tu página',
                        'text' => 'con dashboards que te dan métricas <br class="mobileElement"> en tiempo real'
                      ],
                      [
                        'title' => 'Automatiza tus flujos de comunicación',
                        'text' => 'ahorrando tiempo y recursos'
                      ]
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
        'classSection' => 'landing_escalaLandings_2022_3',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'title' => '
          <strong>Los Expertos</strong><br class="space">
          <span class="greenBlueColor">¡Nuestra arma secreta!</span>
          ',
        'img' => App::setFilePath('/assets/images/person/soporte-equipo-escala-clientes.png'),
'img_alt' => 'Foto de una pareja mirando su computador portátil sorprendidos en referencia a la calidad del acompañamiento que brinda el equipo de soporte de Escala',
        'text' => '
            Con el Plan PRO de Escala, nuestros especialistas <br class="mobileElement"> en marketing <br class="desktopElement">
            digital y ventas te guiarán paso a paso <br class="mobileElement"> en la construcción de tu <br class="desktopElement">
            landing page. Sácale <br class="mobileElement"> máximo provecho a nuestro Creador de Páginas.
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
  'classSection' => 'landing_escalaLandings_2022_3_2',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'overlay' => false,
  'overlayImage' => null,
  'enableButton' => false,
  'elements' => array(
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/acompanamiento-en-vivo-implementacion-escala.png'),
'img_alt' => 'Ilustración de un astronauta mostrando en su computador un cohete que va de un punto A a un punto B en referencia al acompañamiento en vivo para optimizar la implementación de Escala en una empresa',
                  'title' => '
                    Acompañamiento en vivo <br class="desktopElement">
                    para crear, <br class="mobileElement"> publicar y <br class="desktopElement">
                    optimizar tus páginas
                  ',
                  'text' => null,
                  'enableButton' => false,

              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/capacitaciones-grupales-equipo-escala.png'),
'img_alt' => 'Ilustración de un astronauta mostrando en su computador un cohete que va de un punto A a un punto D en referencia a las capacitaciones grupales que ofrece el equipo de Escala',
                  'title' => '
                    Capacitaciones grupales <br class="space">
                    basadas en mejores prácticas <br class="space">
                    para hacer una landing page ideal
                  ',
                  'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/atencion-prioritaria-clientes-equipo-escala.png'),
'img_alt' => 'Ilustración de un computador con un botón de WhatsApp en referencia a la atención prioritaria por WhatsApp, Email y Chat de parte de nuestro equipo',
                  'title' => '
                      Atención prioritaria por <br class="desktopElement">
                      WhatsApp, Email <br class="mobileElement"> y Chat <br class="desktopElement">
                      de servicio
                    ',
                    'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/gerente-cuentas-asignado-equipo-escala.png'),
'img_alt' => 'Ilustración de un astronauta con capa y un computador en sus manos en referencia al gerente de cuentas que se asigna a clientes por parte de Escala',
                  'title' => '
                        Gerente de cuentas asignado <br class="desktopElement">
                        con plan <br class="mobileElement"> personalizado de <br class="desktopElement">
                        implementación
                    ',
                    'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/configuraciones-personalizadas-creacion-plantillas-landing-pages-escala.png'),
'img_alt' => 'Ilustración de una hoja en la se está escribiendo en referencia a las configuraciones personalizadas y creación de plantillas de landing pages por parte del equipo de Escala',
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




<section class="customSection sectionParent landing_escalaLandings_2022_4">

  <div class="section-row">

        <section class="innerSectionElement">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              La combinación perfecta: <br class="space">
              <span style="color: #B9E6E9">Landing page increíble <br class="mobileElement"> + CRM poderoso</span>
            </h2>

            <p class="primaryText grayColorTexts">
              Haz todas tus acciones de marketing digital <br class="mobileElement"> y ventas en nuestra plataforma:
            </p>

            <ul class="elements">
              <li>Atrae  tráfico a  tus landing pages <br class="mobileElement"> con Facebook Ads e Instagram </li>
              <li>Registra la data de tus visitantes <br class="mobileElement"> en tus páginas</li>
              <li>Haz seguimiento  a tus leads, automatiza <br class="mobileElement"> tus flujos de comunicación <br class="desktopElement">
              y cierra más ventas <br class="mobileElement"> con nuestro CRM integrado. </li>
            </ul>

            <div class="containerImage">
              <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_landings_cimag.png') !!}" alt="" loading="lazy">
            </div>

            <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
              Recibe un demo
            </a>

          </div>

        </section>

  </div>

</section>


<section class="customSection sectionParent landing_escalaLandings_2022_5">

  <div class="section-row">

        <section class="innerSectionElement1">

          <h2 class="primaryTitle blackColor">
            Lo que dicen nuestros clientes <br class="space">
            <span class="greenBlueColor">sobre las landing pages de Escala</span>
          </h2>


        </section>

        <section class="innerSectionElement2">

          <div class="imagesSection">

              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot_escalaLanding-1.jpeg') !!}" alt="">

              </div>
              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot_escalaLanding-2.jpeg') !!}" alt="">

              </div>
              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot_escalaLanding-3.jpeg') !!}" alt="">

              </div>

          </div>

        </section>

  </div>


</section>


    @php
  $parameters = [
      'classSection' => 'landing_escalaLandings_2022_6',
      'title' => '
        <span style="color: #B9E6E9">Comienza hoy mismo a generar <br class="mobileElement"> leads <br class="desktopElement"></span>
        de calidad con las landing <br class="mobileElement"> pages de Escala
      ',
      'textForm' => 'Recibe un tour guiado de Escala',
      'text' => null,
      'image' => App::setFilePath('/assets/images/illustrations/otto/tablet_otto_1 2.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1






</div>

</div>





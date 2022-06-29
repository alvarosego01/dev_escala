

<div id="landing_escalaLandings_2022">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landing_escalaLandings_2022_0',
     'title' => '
        Crea landing pages <br class="space">
        increíbles <span style="color: #B9E6E9">
          acompañado <br class="space">
          por expertos
        </span>
        ',
     'text' => '<span class="whiteColor">
        En Escala construye  landing pages de alta <br class="space">
        conversión en un abrir y cerrar de ojos, con la guía <br class="space">
        de especialistas en marketing digital y ventas.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/escala_landings_header.png'),
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
              "Las landing pages han sido clave para generar <br class="desktopTabletElement">
              millones de contactos al año en mis empresas.
            </strong>
          </span> <br class="desktopTabletElement">
          Basados en estas prácticas de alta conversión, diseñamos <br class="desktopTabletElement">
          el Creador de Páginas de Escala, el más fácil de usar”.
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
      'textButton' => 'Prueba Gratis por 10 días',
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
                    Conoce todo lo que puedes lograr <br class="desktopTabletElement">
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
                        'text' => 'Y comunícate en tiempo real con tus leads'
                      ],
                      [
                        'title' => 'Guarda los datos en tu CRM',
                        'text' => 'y hazle seguimiento a tu lead hasta cerrar la venta'
                      ],
                      [
                        'title' => '100% responsive',
                        'text' => 'Perfectas en todos los dispositivos'
                      ],
                      [
                        'title' => 'Comunícate con Email Marketing',
                        'text' => 'generando relaciones a largo plazo con tus <br class="space"> leads '
                      ],
                      [
                        'title' => 'Analiza y optimiza tu página',
                        'text' => 'Con dashboards que te dan métricas en tiempo real'
                      ],
                      [
                        'title' => 'Automatiza tus flujos de comunicación',
                        'text' => 'Ahorrando tiempo y recursos'
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
        'img' => App::setFilePath('/assets/images/person/capacitacion_pareja.png'),
        'text' => '
            Con el Plan PRO de Escala, nuestros especialistas en marketing <br class="desktopTabletElement">
            digital y ventas te guiarán paso a paso en la construcción de tu <br class="desktopTabletElement">
            landing page. Sácale máximo provecho a nuestro creador de páginas.
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
  'classSection' => 'landing_escalaLandings_2022_3_2',
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




<section class="customSection sectionParent landing_escalaLandings_2022_4">

  <div class="section-row">

        <section class="innerSectionElement">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              La combinación perfecta: <br class="space">
              <span style="color: #B9E6E9">Landing page increíble + CRM poderoso</span>
            </h2>

            <p class="primaryText grayColorTexts">
              Haz todas tus acciones de marketing digital y ventas en nuestra plataforma:
            </p>

            <ul class="elements">
              <li>Atrae  tráfico a  tus landing pages con Facebook Ads e Instagram </li>
              <li>Registra la data de tus visitantes en tus páginas</li>
              <li>Haz seguimiento  a tus leads, automatiza tus flujos de comunicación <br class="desktopTabletElement">
              y cierra más ventas con nuestro CRM integrado. </li>
            </ul>

            <div class="containerImage">
              <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_landings_cimag.png') !!}" alt="" loading="lazy">
            </div>

            <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
              Prueba Escala gratis
            </a>

          </div>

        </section>

  </div>

</section>


<section class="customSection sectionParent landing_escalaLandings_2022_5">

  <div class="section-row">

        <section class="innerSectionElement1">

          <h2 class="primaryTitle blackColor">
            Lo que dicen nuestros clientes <br class="desktopTabletElement">
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
<span style="color: #B9E6E9">Comienza hoy mismo a generar leads <br class="desktopTabletElement"></span>
de calidad con las landing pages de Escala
      ',
      'textForm' => 'Empieza a probar Escala',
      'text' => null,
      'image' => App::setFilePath('/assets/images/illustrations/otto/tablet_otto_1 2.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1




</div>

</div>





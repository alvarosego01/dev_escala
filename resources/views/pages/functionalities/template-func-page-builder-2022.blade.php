

<div id="func-PageBuilder-2022-bootstrap">

  <div class="sections">

    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol funcPageBuilder_2022_0',
     'title' => '
         <span style="color: #B9E6E9">
          Crea increíbles landing <br class="space">
          pages en minutos
          </span>
        ',
     'text' => '<span class="whiteColor">
        En Escala puedes construir rápidamente landing <br class="space">
        pages. Solo debes elegir la plantilla ideal para tu <br class="space">
        empresa, personalizarla y publicarla en un clic.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/landings_laptop_pagebuilder-1a.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1


    @php
    $parameters = array(
     'classSection' => 'funcPageBuilder_2022_1 func',
     'description' => '
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
     'byAm' => null,
     'team' => null,
     'image' => App::setFilePath('/assets/images/person/am/andres_landing_page.png'),
    ) ;
   @endphp

   @contain_am_T1( $parameters )
   @endcontain_am_T1

   <section class="customSection sectionParent funcPageBuilder_2022_2">

    <div class="section-row">

          <section class="innerSectionElement">

            <div class=" row groupElements">

              <div class="image col-md-12 col-lg-12">

                <div class="containElements">

                  <h2 class="primaryTitle blackColor">
                    Todo lo que puedes lograr <br class="space">
                    <span class="greenBlueColor">con las landing pages poderosas de Escala</span>
                  </h2>

                  <div class="containerImage">
                    <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/landing_builder_page.png') !!}" alt="" loading="lazy">
                  </div>


                </div>

              </div>
              <div class="info col-md-12 col-lg-12">

                @php

                    $elements = array(
                      [
                        'title' => 'Creador de Páginas más intuitivo',
                        'text' => 'Con todas las herramientas para editarlas fácilmente'
                      ],
                      [
                        'title' => 'Guarda los datos en tu CRM ',
                        'text' => 'y hazle seguimiento a tu lead hasta cerrar la venta'
                      ],
                      [
                        'title' => 'Elige entre más de 100 plantillas',
                        'text' => 'de alta conversión'
                      ],
                      [
                        'title' => '100% responsive ',
                        'text' => 'Perfectas en todos los dispositivos'
                      ],
                      [
                        'title' => 'Diseños por industria',
                        'text' => 'Basados en las mejores prácticas de cada categoría '
                      ],
                      [
                        'title' => 'Comunícate con Email Marketing',
                        'text' => 'generando relaciones a largo plazo con tus leads'
                      ],
                      [
                        'title' => 'Personalízalas y publícalas en un clic',
                        'text' => 'en minutos, sin programar'
                      ],
                      [
                        'title' => 'Automatiza tus flujos de comunicación',
                        'text' => 'ahorrando tiempo y recursos'
                      ],
                      [
                        'title' => 'Intégralas con Facebook ads e Instagram',
                        'text' => 'y atrae miles de leads a tus <br class="space"> landing pages'
                      ],
                      [
                        'title' => 'Las más veloces del mercado',
                        'text' => 'Contamos con la tecnología para <br class="space">
                        que tus páginas carguen a la velocidad de la luz '
                      ],
                      [
                        'title' => 'Agrega el botón de WhatsApp',
                        'text' => 'y comunícate en tiempo real con tus leads '
                      ],
                      [
                        'title' => 'Analiza y optimiza tu página',
                        'text' => 'con dashboards que te dan métricas en tiempo real'
                      ],
                      [
                        'title' => 'Convierte visitantes en leads',
                        'text' => 'No pierdas nngún dato de tus contactos'
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
        'classSection' => 'funcPageBuilder_2022_3',
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
  'classSection' => 'funcPageBuilder_2022_3_2',
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

<section class="customSection sectionParent funcPageBuilder_2022_4">

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
    'type' => 'backgroundColor',
    'classSection' => 'funcPageBuilder_2022_5',
    'backgroundImageFile' => null,
    'enableTitle' => false,
    'img' => App::setFilePath('/assets/images/illustrations/others/landing_pages_escala_sin_programar.png'),
    'title' => '
    Crea páginas vendedoras <br class="space">
    <span style="color: #A4E7EA">con Escala</span>
    ',
    'text' => null,
    'enableButton' => true,
    'urlButton' => '#',
    'textButton' => 'Prueba gratis',
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
    'side' => 'left',
];
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1


  </div>


</div>




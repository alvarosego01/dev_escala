{{-- Template Name: [B] Landing - Afiliados --}}




@extends('layouts.app')

@section('content')

    <div id="landing-Afiliados-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'overlay' => false,
                    'classSection' => 'threeCol landingAfiliados0 func',
                    'title' => '¡Conviértete en <br class="space"> un afiliado de Escala <br class="space">
                     <span class="greenBlueColor">y gana grandes comisiones!</span> ',
                    'text' => null,
                    'textForm' => 'Comienza ahora',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/afiliadoshead.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1


      <section class="customSection sectionParent landingAfiliados1 fullWidth">
        <span class="blueLabelSpecial blue">

          Hasta 30% de manera recurrente

        </span>

          <div class="section-row">

            <div class="containElements">


              <p class="primaryText grayColorTexts">
                Ayuda a los negocios hispanoamericanos y PYMES a acelerar <br class="desktopTabletElement"> su crecimiento y gana comisiones por cada venta referida.
              </p>

            </div>

          </div>


      </section>


            @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingAfiliados2',
        'enableTitle' => true,
        'titlePrincipal' => '¿Quiénes pueden ser afiliados de Escala?',
        'overlay' => false,
        'overlayImage' => null,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => 'Comenzar ahora',
        'typeButton' => 'primaryButton hoverInEffect',
        'elements' => array(
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icons-afiliados_1.png'),
                        'title' => '<span class="greenBlueColor">Creadores <br class="space"> de contenidos</span>',
                        'text' => 'Si eres un creador de contenido en <br class="desktopTabletElement"> marketing digital y ventas, y parte de tu <br class="desktopTabletElement"> contenido va a pequeñas y grandes <br class="desktopTabletElement"> empresas que quieren llevar su negocio al <br class="desktopTabletElement"> mundo digital escalando a gran velocidad, <br class="desktopTabletElement"> tú puedes ser un afiliado de Escala',
                        'enableButton' => false
                        // 'urlButton' => '#lead-form',
                        // 'textButton' => '¡Asombroso! Adiós integraciones',
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icons-afiliados_2.png'),
                        'title' => '<span class="greenBlueColor">Influenciadores <br class="desktopTabletElement"> de PYMES</span>',
                        'text' => 'Si eres un conocedor de las plataformas todo <br class="desktopTabletElement"> en uno y tienes una comunidad de PYMES a <br class="desktopTabletElement"> la cual puedes orientar para acelerar el <br class="desktopTabletElement"> crecimiento de sus negocios, eres perfecto <br class="desktopTabletElement"> para convertirte en un afiliado.',
                        'enableButton' => false
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icons-afiliados_3.png'),
                        'title' => '<span class="greenBlueColor">Aliados en ventas</span>',
                        'text' => 'Si eres un usuario de Escala o un vendedor <br class="desktopTabletElement"> nato y te encanta recomendar para obtener <br class="desktopTabletElement"> ganancias por cada referido. Escala te da una <br class="desktopTabletElement"> gran oportunidad para ganar comisiones <br class="desktopTabletElement"> mensualmente.',
                        'enableButton' => false
                    ]



        )

    ];
@endphp

            @contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1

            @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingAfiliados3',
        'enableTitle' => true,
        'titlePrincipal' => '¿Cómo ser un afiliado Escala?',
        'text' => 'Ser un afiliado de Escala es muy fácil, debes: Compartir, convertir y recibir tu comisión, pero aquí <br class="space"> te describimos paso a paso para que tomes la decisión hoy mismo.',
        'overlay' => false,
        'overlayImage' => null,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => 'Regístrarse ahora',
        'typeButton' => 'primaryButton hoverInEffect',
        'elements' => array(
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/afiliados-steps_1.png'),
                        'title' => '<span class="greenBlueColor">Regístrate</span>',
                        'text' => 'Llena nuestro formulario con tus datos <br class="desktopTabletElement"> y envíanos tu postulación',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/afiliados-steps_2.png'),
                        'title' => '<span class="greenBlueColor">Promociona</span>',
                        'text' => 'Recomienda Escala a través de tu link <br class="desktopTabletElement"> único de afiliado. <br class="space"><span class="greenBlueColor">Tu link tiene 90 días de cookies para ser utilizado.</span>',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/afiliados-steps_3.png'),
                        'title' => '<span class="greenBlueColor">Gana comisiones</span>',
                        'text' => 'Gana el 30% de comisión sobre <br class="desktopTabletElement"> el valor del plan comprado por <br class="desktopTabletElement"> tu referido.',
                        'enableButton' => false,
                    ]



        )

    ];
@endphp
            @contain_5_cards_T1( $parameters )
            @endcontain_5_cards_T1





      <section class="customSection sectionParent landingAfiliados4 fullWidth">

    <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/banner-3-1.png')" class="backgroundFull sct1">


      <div class="section-row">

        <div class="containElements">

          <h3 class="primaryTitle whiteText">
            Estoy listo para ganar siendo un <br class="space"> afliado de Escala
          </h3>

          <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
            Quiero ser afiliado
          </a>


        </div>


      </div>

      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/astrorocket.svg')" class="imageBackground">
      </div>

    </div>

  </section>


  @php
  $parameters = [
      'classSection' => 'landingAfiliados5',
      'title' => '¡Postúlate hoy mismo <br class="space"> y gana grandes comisiones!',
      'textForm' => 'Pruébalo gratis ahora',
      'text' => 'Llena este formulario y envía tu postulación, pronto recibirás <br class="space"> la respuesta y podrás ser parte del programa.',
      'image' => App::setFilePath('/assets/images/illustrations/otto/otto-ventas 1.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1






        </div>

    </div>



@endsection

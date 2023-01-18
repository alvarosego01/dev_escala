
{{--
  Template Name: [B] Landing - Masive mailing
--}}

@extends('layouts.app')

@section('content')

<div id="landing-MasiveMailing-bootstrap">

  <div class="sections">

    <div
    style="background-image: url({!! App::setFilePath('/assets/images/backgrounds/backgroundBlueDegrade3.png') !!})"
    class="specialHeader">

      @php
      $parameters = array(
       'backgroundImageType' => false,
       'overlay' => false,
       'classSection' => 'threeCol landingMasiveMailing0',
       'title' => '
       Crea campaña <br class="space"> de emails efectivas <br class="space"> con un solo clic',
       'text' => null,
       'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
       'threeCol' => true,
       'backgroundImage' => null,
        'overlayImage' => null,
        'image' => App::setFilePath('/assets/images/person/jovenlaptop_saltando 1.png'),
      ) ;
      @endphp

      @header_t1( $parameters )
      @endheader_t1

      @php
      $parameters = [
          'type' => 'backgroundColor',
          'classSection' => 'landingMasiveMailing1',
          'enableTitle' => true,
          'titlePrincipal' => '<span class="whiteColor">4 pasos para enviar emails exitosos</span>',
          'subTitlePrincipal' => null,
          'overlay' => false,
          // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
          'elements' => [
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-1.png'),
                  'title' => '<span class="greenBlueColor3">Crea tus emails</span>',
                  'text' => 'Crea emails profesionales <br class="desktopTabletElement"> con el editor de emails <br class="desktopTabletElement"> más intuitivo. <br class="desktopTabletElement"> ¡Hazlo tú mismo!',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-2.png'),
                  'title' => '<span class="greenBlueColor3">Programa tus envíos</span>',
                  'text' => 'Programa y envía automáticamente <br class="desktopTabletElement"> emails de bienvenida, mensajes de <br class="desktopTabletElement"> seguimiento, newsletters y todo lo <br class="desktopTabletElement"> que quieras comunicar a tus <br class="desktopTabletElement"> contactos.',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-3.png'),
                  'title' => '<span class="greenBlueColor3">Haz que lean tus emails</span>',
                  'text' => 'Dile adiós a la bandeja de spam, <br class="desktopTabletElement"> en Escala hemos desarrollado <br class="desktopTabletElement"> la tecnología para lograr que tus <br class="desktopTabletElement"> emails lleguen al lugar correcto.',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-4.png'),
                  'title' => '<span class="greenBlueColor3">Mide y optimiza</span>',
                  'text' => 'Obtén todos los reportes en tiempo <br class="desktopTabletElement"> real para que puedas optimizar tus <br class="desktopTabletElement"> resultados.',
                  'enableButton' => false,
              ],
          ],
      ];
      @endphp

      @contain_multiple_cards_T2( $parameters )

      @endcontain_multiple_cards_T2


      <section class="customSection sectionParent extraButton">

        <div class="section-row">

              <section class="innerSectionElement">

                <h2 class="primaryTitle whiteColor">
                  ¡Comienza a crear tus campañas de email marketing efectivas ahora!
                </h2>

                <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                  Recibe un demo
                </a>


              </section>

        </div>


      </section>


    </div>


    {{-- @php
    $parameters = array(
     'classSection' => 'landingMasiveMailing2 func',
     'description' => '<span class="greenBlueColor"><strong>«En Open English generamos cientos de landing pages al mes que <br> generan más de 1 millón de contactos al año.</strong></span> Ese ha sido parte del secreto <br> de nuestro éxito. Basados en esa experiencia, creamos el Landing Page <br> Builder más robusto del mercado”.',
     'byAm' => '<strong class="blackColor2">Andrés Moreno</strong>',
     'team' => 'Fundador de <span class="greenBlueColor">Escala</span> y Open English',
     'image' => App::setFilePath('/assets/images/person/am/02_andres.png'),
    ) ;
   @endphp

   @contain_am_T1( $parameters )

   @endcontain_am_T1 --}}


   @php
 $parameters = array(
   'type' => 'regular',
  'classSection' => 'landingMasiveMailing3',
  'title' => 'Conoce la plataforma “todo en uno” de ventas y marketing <br class="desktopTabletElement"> <span class="greenBlueColor">que acelerará el crecimiento de tu negocio</span>',
  'subTitle' => null,
  'img1' => App::setFilePath('/assets/images/illustrations/others/landings 1.png'),
  'title1' => 'Crea increíbles <br class="desktopTabletElement"> páginas sin programar',
  'desc1' => 'Edita nuestras hermosas <br class="desktopTabletElement"> plantillas, personalízalas y publicalas <br class="desktopTabletElement"> en pocos minutos',
  'img2' => App::setFilePath('/assets/images/illustrations/others/2022.png'),
  'title2' => 'Organiza tus contactos y <br class="desktopTabletElement"> gestiona procesos de venta',
  'desc2' => 'El CRM de Escala te ayuda a simplificar <br class="desktopTabletElement"> tu gestión de ventas y aumentar <br class="desktopTabletElement"> la productividad de tu equipo.',
  'img3' => App::setFilePath('/assets/images/illustrations/others/2023.png'),
  'title3' => 'Multiplica tus visitas web <br class="desktopTabletElement"> con anuncios digitales',
  'desc3' => 'Genera más tráfico a tus landing <br class="desktopTabletElement"> pages con ads de  Facebook, sin tener <br class="desktopTabletElement"> que salir de Escala.',
  'img4' => App::setFilePath('/assets/images/illustrations/others/automatizan 1.png'),
  'title4' => 'Automatiza tareas y flujos <br class="desktopTabletElement"> de comunicación',
  'desc4' => 'Escala trabaja por ti 24/7, pon <br class="desktopTabletElement"> el piloto automático y ve crecer <br class="desktopTabletElement"> tu negocio',
  'img5' => App::setFilePath('/assets/images/illustrations/others/dashboard 1.png'),
  'title5' => 'Obtén métricas de marketing <br class="desktopTabletElement"> y ventas en tiempo real',
  'desc5' => 'Analiza tus métricas en dashboards <br class="desktopTabletElement"> inteligentes y optimiza todo tu <br class="desktopTabletElement"> embudo de ventas.',
 ) ;
@endphp

@contain_aio5( $parameters )

@endcontain_aio5



   <section class="customSection sectionParent landingMasiveMailing4 fullWidth">

    <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/banner-3-1.png')" class="backgroundFull sct1">


      <div class="section-row">

        <div class="containElements">

          <h3 class="primaryTitle whiteText">Acelera el crecimiento de tu negocio
          </h3>

          <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
            Recibe un demo
          </a>


        </div>




      </div>

      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/astrorocket.svg')" class="imageBackground">
      </div>

    </div>

  </section>




  @php
  $parameters = [
      'classSection' => 'landingMasiveMailing5',
      'title' => '<span class="greenBlueColor">¿Estás listo para hacer</span> <br class="desktopTabletElement">
      envíos masivos de emails?',
      'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
      'text' => null,
      'image' => App::setFilePath('/assets/images/illustrations/otto/email-otto-5 1.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1






  </div>

</div>



@endsection

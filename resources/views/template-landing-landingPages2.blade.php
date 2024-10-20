
{{--
  Template Name: [B] Landing - Landing pages 2
--}}




@extends('layouts.app')

@section('content')

<div id="landing-LandingPages2-bootstrap">

  <div class="sections">

    <div
    style="background-image: url({!! App::setFilePath('/assets/images/backgrounds/backgroundBlueDegrade2.jpg') !!})"
    class="specialHeader">


    <img src="{!! App::setFilePath('/assets/images/illustrations/others/NAVE.png') !!}" class="overlayNave">



      @php
      $parameters = array(
       'backgroundImageType' => false,
       'overlay' => false,
       'classSection' => 'threeCol landingPagesIncAmOtto0',
       'title' => 'Landing pages <br class="D_e"> <span class="blueLightColor10">increíbles <br class="space"> con Escala</span>',
       'text' => null,
       'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
       'threeCol' => true,
       'backgroundImage' => null,
        'overlayImage' => null,
        'image' => App::setFilePath('/assets/images/illustrations/team/landing2.png'),
      ) ;
      @endphp

      @header_t1( $parameters )
      @endheader_t1



      @php
      $parameters = [
          'type' => 'backgroundColor',
          'classSection' => 'landingPagesIncAmOtto1',
          'enableTitle' => true,
          'titlePrincipal' => '<span class="whiteColor">No programes más.<br class="space">Construye páginas atractivas <br class="MT_e"> en 4 simples pasos</span>',
          'subTitlePrincipal' => null,
          'overlay' => false,
          // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
          'elements' => [
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-1.png'),
                  'title' => '<span class="greenBlueColor3">Elige tu plantilla</span>',
                  'text' => 'Elige entre cientos de plantillas <br class="space"> pre-diseñadas 100% responsive <br class="space"> para que luzcan bien en <br class="space"> cualquier dispositivo',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-2.png'),
                  'title' => '<span class="greenBlueColor3">Personaliza</span>',
                  'text' => 'Edita fácilmente imágenes, <br class="space"> textos, colores y el formulario <br class="space"> para que enamores a tus <br class="space"> visitantes y compartan su <br class="space"> información de contacto',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-3.png'),
                  'title' => '<span class="greenBlueColor3">Publica</span>',
                  'text' => 'Con tan solo un clic, programa <br class="space"> tu landing page y comienza a <br class="space"> atraer visitantes. ¡No más <br class="space"> códigos!',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-4.png'),
                  'title' => '<span class="greenBlueColor3">Optimiza</span>',
                  'text' => 'Mide el rendimiento de tus <br class="space"> páginas con métricas <br class="space"> relevantes.Visualiza tus resultados <br class="space"> en tiempo real en un dashboard <br class="space"> amigable',
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
                  ¡Descubre cuán fácil es diseñar y <br class="MT_e"> publicar landing pages en Escala!
                </h2>

                <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                  Comenzar ahora
                </a>


              </section>

        </div>


      </section>


    </div>


    @php
    $parameters = array(
     'classSection' => 'landingPagesIncAmOtto2 func',
     'description' => '<span class="greenBlueColor"><strong>«En Open English generamos cientos de landing pages al mes que <br> generan más de 1 millón de contactos al año.</strong></span> Ese ha sido parte del secreto <br> de nuestro éxito. Basados en esa experiencia, creamos el Landing Page <br> Builder más robusto del mercado”.',
     'byAm' => '<strong class="blackColor2">Andrés Moreno</strong>',
     'team' => 'Fundador de <span class="greenBlueColor">Escala</span> y Open English',
     'image' => App::setFilePath('/assets/images/person/am/02_andres.png'),
    ) ;
   @endphp

   @contain_am_T1( $parameters )

   @endcontain_am_T1


   @php
 $parameters = array(
   'type' => 'regular',
  'classSection' => 'landingPagesIncAmOtto3',
  'title' => 'Tu landing page estará ya integrada <br class="MT_e"> a la plataforma <span class="greenBlueColor">“todo-en-uno” <br class="space"> de marketing digital y ventas</span>
',
  'subTitle' => '<strong class="subtitle">Conoce Escala</strong>',
  'img1' => App::setFilePath('/assets/images/illustrations/others/icono-16 1.png'),
  'title1' => 'Multiplica las visitas <br class="space"> <span class="greenBlueColor">con anuncios digitales</span>',
  'desc1' => 'Comienza a generar tráfico a tu landing <br class="DT_e"> page. Crea, publica y gestiona <br class="DT_e"> campañas de anuncios digitales <br class="DT_e"> directamente desde Escala.',
  'img2' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
  'title2' => '<span class="greenBlueColor">Gestiona y organiza</span> <br class="space"> la información de tus contactos',
  'desc2' => 'Empodera a tu equipo de ventas con el CRM <br class="DT_e"> más amigable y fácil de usar. Incrementa la <br class="DT_e"> productividad planificando actividades y <br class="DT_e"> mantén comunicación constante con tus leads.',
  'img3' => App::setFilePath('/assets/images/illustrations/others/icono-12 1.png'),
  'title3' => 'Envía Emails <br class="space"> <span class="greenBlueColor">profesionales</span>',
  'desc3' => 'Nutre la relación con tus contactos enviando <br class="space"> efectivas campañas de emails. Con nuestras <br class="space"> plantillas prediseñadas logras enviar masivamente <br class="space"> mensajes personalizados con tan solo un clic.',
  'img4' => App::setFilePath('/assets/images/illustrations/others/icono-13 1.png'),
  'title4' => 'Automatiza para ahorrar <br class="space"> tiempo y <span class="greenBlueColor">evitar errores</span>',
  'desc4' => 'Nunca más realices tareas repetitivas de <br class="space"> marketing digital y ventas. Programa <br class="space"> recordatorios, acciones y mensajes que <br class="space"> aumentan tu productividad.',
  'img5' => App::setFilePath('/assets/images/illustrations/others/icono-15 1.png'),
  'title5' => '<span class="greenBlueColor">Ten la visibilidad</span> de los <br class="space"> resultados de tu negocio',
  'desc5' => 'Lo que no se mide, no mejora. Escala te da <br class="space"> las analíticas necesarias en dashboards <br class="space"> amigables para que optimices tus <br class="DT_e"> esfuerzos de venta y marketing.',
 ) ;
@endphp

@contain_aio5( $parameters )

@endcontain_aio5




   <section class="customSection sectionParent landingPagesIncAmOtto4 fullWidth">

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
      'classSection' => 'landingPagesIncAmOtto5',
      'title' => '<span class="greenBlueColor">¿Estás listo para</span> impulsar tus ventas?',
      'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
      'text' => null,
      'image' => App::setFilePath('/assets/images/illustrations/otto/otto-ventas 1.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1






  </div>

</div>



@endsection

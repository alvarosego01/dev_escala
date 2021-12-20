
{{--
  Template Name: [B] Landing - Christmas
--}}




@extends('layouts.app')

@section('content')

<div id="landing-Christmas-bootstrap">

  <div class="sections">

    <div
    style="background-image: url({!! App::setFilePath('/assets/images/backgrounds/backgroundBlueDegrade3.png') !!})"
    class="specialHeader">

      @php
      $parameters = array(
       'backgroundImageType' => false,
       'overlay' => true,
       'overlayImage' => App::setFilePath('/assets/images/overlays/santa-landing-2a 1.png'),
       'classSection' => 'threeCol landingChristmas0',
       'title' => '
       <span class="blueLightColor10">Estas navidades crea</span> <br class="space">
       Increíbles <br class="space"> Landing pages <br class="space">
       <span class="blueLightColor10">y convierte más</span>
       ',
       'text' => 'Aprovecha estas fechas para generar <br class="space"> más leads con páginas optimizadas.',
       'textForm' => 'Comienza ahora',
       'threeCol' => true,
       'backgroundImage' => null,
        'image' => App::setFilePath('/assets/images/person/santa-landing-2 1.png'),
      ) ;
      @endphp

      @header_t1( $parameters )
      @endheader_t1

      @php
      $parameters = [
          'type' => 'backgroundColor',
          'classSection' => 'landingChristmas1',
          'enableTitle' => true,
          'titlePrincipal' => '<span class="whiteColor">Crea  en 4 pasos landing pages hermosas,<br class="space"> sin programar y en pocos minutos</span>',
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
                  ¡Descubre cuán fácil es diseñar y <br class="mobileElement"> publicar landing pages en Escala!
                </h2>

                <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                  Comenzar ahora
                </a>


              </section>

        </div>


      </section>


    </div>


    {{-- @php
    $parameters = array(
     'classSection' => 'landingChristmas2 func',
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
  'classSection' => 'landingChristmas3',
  'title' => '<span class="greenBlueColor">Ten todas las herramientas de marketing digital y ventas</span><br class="space">para potenciar esta temporada',
  'subTitle' => '<strong class="subtitle">Conoce Escala</strong>',
  'img1' => App::setFilePath('/assets/images/illustrations/others/icono-16 1.png'),
  'title1' => 'Multiplica las visitas <br class="space">con anuncios digitales</span>',
  'desc1' => 'Comienza a generar tráfico a tu landing <br> page. <br class="mobileElement"> Crea, publica y gestiona <br> campañas de anuncios <br class="mobileElement"> digitales <br> directamente desde Escala.',
  'img2' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
  'title2' => 'Gestiona y organiza</span> <br class="space"> la información <span class="greenBlueColor">de tus contactos</span>',
  'desc2' => 'Empodera a tu equipo de ventas con el CRM <br> más <br class="mobileElement"> amigable y fácil de usar. Incrementa la <br> productividad <br class="mobileElement"> planificando actividades y <br> mantén comunicación <br class="mobileElement"> constante con tus leads.',
  'img3' => App::setFilePath('/assets/images/illustrations/others/icono-12 1.png'),
  'title3' => '<span class="greenBlueColor">Envía Emails</span> <br class="space"> profesionales',
  'desc3' => 'Nutre la relación con tus contactos enviando <br class="space"> efectivas campañas de emails. Con nuestras <br class="space"> plantillas prediseñadas logras enviar masivamente <br class="space"> mensajes personalizados con tan solo un clic.',
  'img4' => App::setFilePath('/assets/images/illustrations/others/icono-13 1.png'),
  'title4' => 'Automatiza para ahorrar <br class="space"> tiempo y evitar errores',
  'desc4' => 'Nunca más realices tareas repetitivas de <br class="space"> marketing digital y ventas. Programa <br class="space"> recordatorios, acciones y mensajes que <br class="space"> aumentan tu productividad.',
  'img5' => App::setFilePath('/assets/images/illustrations/others/icono-15 1.png'),
  'title5' => 'Ten la visibilidad de los <br class="space"> resultados de tu negocio',
  'desc5' => 'Lo que no se mide, no mejora. Escala te da <br class="space"> las analíticas necesarias en dashboards <br class="space"> amigables para que optimices tus <br> esfuerzos <br class="mobileElement"> de venta y marketing.',
 ) ;
@endphp

@contain_aio5( $parameters )

@endcontain_aio5



   <section class="customSection sectionParent landingChristmas4 fullWidth">

    <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/banner-3-1.png')" class="backgroundFull sct1">


      <div class="section-row">

        <div class="containElements">

          <h3 class="primaryTitle whiteText">Acelera el crecimiento de tu negocio
          </h3>

          <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
            Comenzar ahora
          </a>


        </div>




      </div>

      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/astrorocket.svg')" class="imageBackground">
      </div>

    </div>

  </section>




  @php
  $parameters = [
      'classSection' => 'landingChristmas5',
      'title' => '¿Estás listo para hacer <br class="space"> las landig pages más vendedoras <br class="space"> de estas fiestas?',
      'textForm' => 'Pruébalo gratis ahora',
      'text' => null,
      'image' => App::setFilePath('/assets/images/person/am/andres-partners-2.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1






  </div>

</div>



@endsection

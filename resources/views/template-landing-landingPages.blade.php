
{{--
  Template Name: [B] Landing - Landing pages
--}}




@extends('layouts.app')

@section('content')

<div id="landing-LandingPages-bootstrap">

  <div class="sections">

    <div
    style="background-image: url({!! App::setFilePath('/assets/images/backgrounds/backgroundBlueDegrade.jpg') !!})"
    class="specialHeader">

      @php
      $parameters = array(
       'backgroundImageType' => false,
       'overlay' => false,
       'classSection' => 'threeCol landingLandingPages0',
       'title' => 'Crea landing pages <br class="space"> <span class="blueLightColor10">increíbles en Escala</span>',
       'text' => null,
       'textForm' => 'Comienza ahora',
       'threeCol' => true,
       'backgroundImage' => null,
        'overlayImage' => null,
        'image' => App::setFilePath('/assets/images/person/morena_banco-landing-2.png'),
      ) ;
      @endphp

      @header_t1( $parameters )
      @endheader_t1

      @php
      $parameters = [
          'type' => 'backgroundColor',
          'classSection' => 'landingLandingPages1',
          'enableTitle' => true,
          'titlePrincipal' => '<span class="whiteColor">No más programación. <br class="space">Contruye páginas atractivas en 4 simples pasos:</span>',
          'subTitlePrincipal' => null,
          'overlay' => false,
          // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
          'elements' => [
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-1.png'),
                  'title' => '<span class="greenBlueColor3">Elige tu plantilla</span>',
                  'text' => 'Elige entre cientos de <br> plantillas pre-diseñadas <br> 100% responsive para que <br> luzcan bien en cualquier <br> dispositivo',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-2.png'),
                  'title' => '<span class="greenBlueColor3">Personaliza</span>',
                  'text' => ' Edita fácilmente imágenes,<br> textos, colores y el formulario <br> para que enamores a tus <br> visitantes y compartan su <br> contacto',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-3.png'),
                  'title' => '<span class="greenBlueColor3">Publica</span>',
                  'text' => 'Con tan solo un clic, programa <br> tu landing page y comienza a <br> atraer visitantes.<br class="space">¡No más códigos!',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-4.png'),
                  'title' => '<span class="greenBlueColor3">Optimiza</span>',
                  'text' => 'Mide el rendimiento de tus <br> páginas con métricas relevantes <br> que visualizas en tiempo real en <br> un dashboard amigable',
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
                  ¡Descubre cuán fácil es diseñar y publicar landing pages en Escala!
                </h2>

                <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                  Comenzar ahora
                </a>


              </section>

        </div>


      </section>


    </div>


    @php
    $parameters = array(
     'classSection' => 'landingLandingPages2 func',
     'description' => '<span class="greenBlueColor">«En Open English generamos cientos de landing pages al mes que generan más de 1 millón de contactos al año.</span> Ese ha sido parte del secreto de nuestro éxito. Basados en esa experiencia, creamos el Landing Page Builder más robusto del mercado”.',
     'team' => 'Fundador de <span class="greenBlueColor">Escala</span> y Open English',
     'image' => App::setFilePath('/assets/images/person/am/02_andres.png'),
    ) ;
   @endphp

   @contain_am_T1( $parameters )

   @endcontain_am_T1


   @php
 $parameters = array(
   'type' => 'regular',
  'classSection' => 'landingLandingPages3',
  'title' => 'Tu landing page estará ya integrada<br class="space"><span class="greenBlueColor">a la plataforma “todo-en-uno” de marketing digital y ventas</span>',
  'img1' => App::setFilePath('/assets/images/illustrations/others/icono-16 1.png'),
  'title1' => '<span class="greenBlueColor">Anuncios digitales</span> multiplican <br class="space"> las visitas a tu landing page',
  'desc1' => 'Comienza a generar tráfico a tu landing <br> page. Crea, publica y gestiona <br> campañas de anuncios digitales <br> directamente desde Escala.',
  'img2' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
  'title2' => '<span class="greenBlueColor">CRM</span>  integrado recibe y organiza <br class="space"> la información de tus contactos',
  'desc2' => 'La información que registran tus visitantes en <br> los formularios de tus landing pages se <br> guarda automáticamente en un CRM. No más <br> integraciones para organizar, gestionar y <br> vender a tus contactos.',
  'img3' => App::setFilePath('/assets/images/illustrations/others/icono-12 1.png'),
  'title3' => '<span class="greenBlueColor">Emails</span> profesionales <br class="space"> envían mensajes importantes',
  'desc3' => 'Nutre la relación con tus contactos enviando <br> hermosas campañas de emails. Con nuestras <br> plantillas prediseñadas logras enviar <br> masivamente mensajes personalizados con <br> tan solo un clic.',
  'img4' => App::setFilePath('/assets/images/illustrations/others/icono-13 1.png'),
  'title4' => '<span class="greenBlueColor">Automatizaciones</span> te ahorran <br class="space"> tiempo y evitan errores',
  'desc4' => 'Nunca más realices tareas repetitivas <br> de marketing digital y ventas. Programa <br> recordatorios, acciones y mensajes que <br> aumentan tu productividad.',
  'img5' => App::setFilePath('/assets/images/illustrations/others/icono-15 1.png'),
  'title5' => 'Dashboards dan visibilidad sobrer <br class="space"> la saluds de tu negocio',
  'desc5' => 'Lo que no se mide, no mejora. Escala te da las <br> analíticas necesarias en dashboards amigables <br> para que optimices tus esfuerzos de venta y <br> marketing.',
 ) ;
@endphp

@contain_aio5( $parameters )

@endcontain_aio5



   <section class="customSection sectionParent landingLandingPages4 fullWidth">

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
      'classSection' => 'landingLandingPages5',
      'title' => '<span class="greenBlueColor">¿Estás listo para</span> impulsar tus ventas?',
      'textForm' => 'Pruébalo gratis ahora',
      'text' => null,
      'image' => App::setFilePath('/assets/images/illustrations/otto/otto-ventas 1.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1






  </div>

</div>



@endsection

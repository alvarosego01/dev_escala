
{{--
  Template Name: [B] Landing - CRM
--}}


@extends('layouts.app')

@section('content')

<div id="landing-CRM-bootstrap">

  <div class="sections">

    <div
    style="background-image: url({!! App::setFilePath('/assets/images/backgrounds/backgroundBlueDegrade3.png') !!})"
    class="specialHeader">

      @php
      $parameters = array(
       'backgroundImageType' => false,
       'overlay' => false,
       'classSection' => 'threeCol landingCRM0',
       'title' => '
       <span style="color: #B9E6E9">CRM + Expertos =</span> <br class="space">
        Genera más ventas <br class="space">
        con Escala
      ',
       'text' => '
        Aumenta tus ventas con la plataforma de CRM <br class="space">
        todo en uno de Escala y el acompañamiento de <br class="space">
        especialistas en marketing digital, ventas y <br class="space">
        fidelización, quienes te guiarán desde el primer <br class="space">
        día para implementar tu estrategia.
       ',
       'textForm' => 'Comienza ahora',
       'threeCol' => true,
       'backgroundImage' => null,
        'overlayImage' => null,
        'image' => App::setFilePath('/assets/images/person/mujersentada_laptop.png'),
      ) ;
      @endphp

      @header_t1( $parameters )
      @endheader_t1

      @php
      $parameters = [
          'type' => 'backgroundColor',
          'classSection' => 'landingCRM1',
          'enableTitle' => true,
          'titlePrincipal' => '<span class="whiteColor">Simplifica tu gestión de ventas <br class="space"> 4 pasos para organizar y gestionar tus leads y clientes</span>',
          'subTitlePrincipal' => null,
          'overlay' => false,
          // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
          'elements' => [
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-1.png'),
                  'title' => '<span class="greenBlueColor3">No pierdas ninguna <br class="space"> información</span>',
                  'text' => '
                  Con los formularios inteligentes de <br class="desktopTabletElement">
                  Escala guarda automáticamente <br class="desktopTabletElement">
                  toda la información de tus <br class="desktopTabletElement">
                  visitantes en tu CRM.
                  ',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-2.png'),
                  'title' => '<span class="greenBlueColor3">
                    Ordena y gestiona <br class="space"> tus datos
                    </span>',
                  'text' => 'Ordena, segmenta y gestiona los <br class="desktopTabletElement"> datos de tus leads y clientes. Asigna <br class="desktopTabletElement"> tareas, actividades y llamadas a tu <br class="desktopTabletElement"> equipo de ventas,  priorizando el <br class="desktopTabletElement"> seguimiento de cada  contacto.
                  ',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-3.png'),
                  'title' => '<span class="greenBlueColor3">Segmenta con etiquetas <br class="space"> avanzadas</span>',
                  'text' => 'Utiliza las etiquetas avanzadas para <br class="desktopTabletElement"> clasificar a tus leads y clientes por <br class="desktopTabletElement"> áreas de interés. Así podrás enviar <br class="desktopTabletElement"> campañas customizadas más <br class="desktopTabletElement"> efectivas.
                  ',
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/count-step-4.png'),
                  'title' => '<span class="greenBlueColor3">Mantén comunicación <br class="space"> constante</span>',
                  'text' => 'Crea relaciones a largo plazo con tus <br class="desktopTabletElement"> leads y clientes. Comunícate con ellos <br class="desktopTabletElement"> de manera frecuente para: evaluar <br class="desktopTabletElement"> tus servicios o productos, darles <br class="desktopTabletElement"> ofertas especiales o informarles tus <br class="desktopTabletElement"> lanzamientos.
                  ',
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
                  ¡Quiero mi CRM de Escala ahora!
                </h2>

                <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
                  Prueba Gratis
                </a>


              </section>

        </div>


      </section>


    </div>


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingCRM2',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'title' => '
          Expertos comprometidos <span class="greenBlueColor">con tu éxito</span>
          ',
        'img' => App::setFilePath('/assets/images/illustrations/others/09_CRM_1.png'),
        'text' => '
        Además de contar con el CRM más completo y fácil de <br class="desktopTabletElement">
usar, los expertos de Escala te ayudaraán a maximizar el <br class="desktopTabletElement">
uso de la herramienta para lograr los mejores resultados.
        ',
        'enableButton' => true,
        'urlButton' => '#lead-form',
        'textButton' => 'Prueba Gratis',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'side' => 'right',
    ];
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

    @php
    $parameters = array(
     'classSection' => 'landingCRM3 func',
     'description' => '
      “Después de construir una base de datos de clientes potenciales, <br class="desktopTabletElement">
      <strong>tu CRM es la herramienta más importante para convertirlos</strong> <br class="desktopTabletElement">
      en clientes leales y construir relaciones a largo plazo”.
     ',
     'byAm' => '<span class="orangeColor"><strong>Andrés Moreno</strong></span>',
     'team' => 'Fundador de Escala y Open English',
     'image' => App::setFilePath('/assets/images/person/am/escala-Andrés-Moreno-founder-Ceo-Open-English-1 1.png'),
    ) ;
   @endphp

   @contain_am_T1( $parameters )

   @endcontain_am_T1


   @php
 $parameters = array(
   'type' => 'regular',
  'classSection' => 'landingCRM4',
  'title' => '
  Una Plataforma de CRM integrado <span class="greenBlueColor">
    a todas las <br class="desktopTabletElement">
    funcionalidades que necesitas para potenciar tu crecimiento
  </span>
  ',
  'subTitle' => '
  <p class="text">
    El CRM de Escala solo es poderoso, pero cuando trabaja junto a las demás <br class="desktopTabletElement">
    funcionalidades de la plataforma es imparable. Conoce el verdadero <br class="desktopTabletElement">
    significado de una plataforma todo en uno.
  </p>
  ',
  'img1' => App::setFilePath('/assets/images/illustrations/others/icono-11.png'),
  'title1' => 'Date a conocer con <br class="desktopTabletElement">
landing pages optimizadas
  ',
  'desc1' => 'Elige una de nuestras plantillas: edítala,<br class="desktopTabletElement"> personalízala, publícala y ¡listo!. Con Escala <br class="desktopTabletElement"> puedes construir landing pages fácil y <br class="desktopTabletElement"> rápido, sin necesidad de programar.
  ',
  'img2' => App::setFilePath('/assets/images/illustrations/others/iman_crm.png'),
  'title2' => 'Multiplica las visitas <br class="desktopTabletElement">
con anuncios digitales',
  'desc2' => 'Comienza a generar tráfico a tu landing <br class="desktopTabletElement"> page. Crea, publica y gestiona <br class="desktopTabletElement"> campañas de anuncios digitales <br class="desktopTabletElement"> directamente desde Escala.
  ',
  'img3' => App::setFilePath('/assets/images/illustrations/others/icono-12 1.png'),
  'title3' => 'Envía Emails <br class="desktopTabletElement"> profesionales',
  'desc3' => 'Nutre la relación con tus contactos <br class="desktopTabletElement"> enviando efectivas campañas de emails. <br class="desktopTabletElement"> Con nuestras plantillas prediseñadas <br class="desktopTabletElement"> logras enviar masivamente mensajes <br class="desktopTabletElement"> personalizados con tan solo un clic.
  ',
  'img4' => App::setFilePath('/assets/images/illustrations/others/icono-13 1.png'),
  'title4' => 'Automatiza para ahorrar <br class="desktopTabletElement"> tiempo y evitar errores',
  'desc4' => 'Nunca más realices tareas repetitivas de <br class="desktopTabletElement"> marketing digital y ventas. Programa <br class="desktopTabletElement"> recordatorios, acciones y mensajes que <br class="desktopTabletElement"> aumenten tu productividad.',
  'img5' => App::setFilePath('/assets/images/illustrations/others/icono-15 1.png'),
  'title5' => 'Ten la visibilidad de los <br class="desktopTabletElement"> resultados de tu negocio',
  'desc5' => 'Lo que no se mide, no mejora. Escala te da <br class="desktopTabletElement"> las analíticas necesarias en dashboards <br class="desktopTabletElement"> amigables para que optimices tus <br class="desktopTabletElement"> esfuerzos de venta y marketing.',
 ) ;
@endphp

@contain_aio5( $parameters )

@endcontain_aio5



   <section class="customSection sectionParent landingCRM5 fullWidth">

    <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/banner-3-1.png')" class="backgroundFull sct1">


      <div class="section-row">

        <div class="containElements">

          <h3 class="primaryTitle whiteText">
            ¡Quiero acelerar mis ventas con Escala!
          </h3>

          <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
            Prueba Gratis
          </a>


        </div>




      </div>

      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/astrorocket.svg')" class="imageBackground">
      </div>

    </div>

  </section>




  @php
  $parameters = [
      'classSection' => 'landingCRM6',
      'title' => '<span class="greenBlueColor">¿Estás listo para</span> probar el CRM <br class="desktopTabletElement"> que simplificará tu vida?',
      'textForm' => 'Pruébalo gratis ahora',
      'text' => null,
      'image' => App::setFilePath('/assets/images/illustrations/otto/ottobaby_11V.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1






  </div>

</div>



@endsection

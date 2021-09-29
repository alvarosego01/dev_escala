
{{--
  Template Name: [B] Escala ventas - Ventas
--}}


@extends('layouts.app')

@section('content')

<div id="escalaVentas-ventas-bootstrap">

  <div class="sections">


    @php
 $parameters = array(
  'backgroundImageType' => false,
  'overlay' => false,
  'classSection' => ' eVentas0',
  'title' => 'Simplifica tu gestión <br class="space"> de ventas y escala tu negocio',
  'text' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/CRM-screen-1.png'),
  'textForm' => 'Empieza a probar Escala',
  'overlayImage' => null,
  'threeCol' => false,
 ) ;
@endphp

@header_t1( $parameters )

@endheader_t1


@php
$parameters = array(
 'classSection' => 'eVentas1 ',
 'description' => 'Escala es la plataforma <span class="greenBlueColor"><strong>todo en uno</strong></span>, diseñada para acelerar <br>
el crecimiento de tus ventas y aumentar la productividad de tu <br> equipo. Todas las herramientas que necesitas <span class="greenBlueColor"><strong>en un solo lugar.</strong></span>',
 'byAm' => null,
 'team' => null,
 'image' => App::setFilePath('/assets/images/illustrations/others/escalaventas_02_1.png')
) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1


@php
$parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'eVentas2',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="greenBlueColor">¡Que no se te escape un lead!</span> <br class="space"> Con Escala podrás:',
  'subTitlePrincipal' => null,
  'overlay' => false,
  // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
  'elements' => array(
    [
      'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_1.png'),
      'title' => '<span class="grayColorTexts5">Organizar tu <br class="space"> base de datos</span>',
      'enableButton' => false

    ],
    [
      'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_2.png'),
      'title' => '<span class="grayColorTexts5">Gestionar tus <br class="space"> procesos de venta</span>',
      'enableButton' => false
    ],
    [
      'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_3.png'),
      'title' => '<span class="grayColorTexts5">Guardar información relevante <br class="space"> sobre tus contactos</span>',
      'enableButton' => false
    ],
    [
      'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_4.png'),
      'title' => '<span class="grayColorTexts5">Automatizar tareas, <br class="pace"> recordatorios y <br class="space"> comunicaciones</span>',
      'enableButton' => false
    ]
  )
 ) ;
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'eVentas3',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="greenBlueColor">¡Deja que</span> los Números hablen!',
  'subTitlePrincipal' => 'Sigue el historial de tus emails en tiempo real',
  'overlay' => true,
  'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
  'carousel' => true,
  'perPage' => 3,
  'elements' => array(
    [
      'img' => App::setFilePath('/assets/images/illustrations/others/email-good 1.png'),
      'title' => '<span class="greenBlueColor">¿Cuál email</span> generó <br> más ventas?',
      'text' => 'Hazle seguimiento al desempeño de todas tus <br> campañas de emails, conoce cuál email causó <br> más impacto y dale seguimiento para ver cuántas <br> ganancias generó para tu negocio.
      <br class="space"><br class="space">
      ¡Aprende, optimiza y crece!',
      'enableButton' => false,
      // 'urlButton' => '#lead-form',
      // 'textButton' => '¡Asombroso! Adiós integraciones',
    ],
    [
      'img' => App::setFilePath('/assets/images/illustrations/others/email-bad 1.png'),
      'title' => '<span class="greenBlueColor">¿Quién se</span> está <br> dando de baja?',
      'text' => '¡Espera! ¡No te vayas! Descubre quién canceló <br> su subscripción a tu lista de correo y por qué. <br> Identifica qué emails no funcionan y modifícalos <br> en el momento correcto.
      <br class="space"><br class="space">
      Mantenlos en la lista.',
      'enableButton' => false


    ]
  )
 ) ;
@endphp

@contain_multiple_cards_carousel_T3( $parameters )
@endcontain_multiple_cards_carousel_T3


  </div>

</div>



@endsection


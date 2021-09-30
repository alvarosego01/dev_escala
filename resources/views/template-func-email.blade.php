
{{--
  Template Name: [B] Func - Email
--}}




@extends('layouts.app')

@section('content')


<div id="func-email-bootstrap">

  <div class="sections">

    @php
    $parameters = array(
     'backgroundImageType' => true,
     'overlay' => true,
     'classSection' => 'threeCol funcEmail0 func',
     'title' => '
     <span class="greenBlueColor">
       Comunícate <br>
       constantemente, <br>
     </span>
¡no dejes que tus <br>
relaciones se enfríen!',
     'text' => 'Diseña y envía campañas <br> de emails atractivas con Escala.',
    //  'image' => '//localhost:3000/escala/wp-content/themes/oceanwp-child/resources/assets/images/illustrations/team/10 1.png',
     'image' => App::setFilePath('/assets/images/illustrations/team/10 1.png'),
     'textForm' => 'Empieza a probar Escala',
     'threeCol' => true,
     'backgroundImage' => App::setFilePath('/assets/images/backgrounds/degradeBlue1.png'),
  'overlayImage' => App::setFilePath('/assets/images/overlays/estrellas 2.png'),
    ) ;
    @endphp

    @header_t1( $parameters )

    @endheader_t1




    @php
     $parameters = array(
      'classSection' => 'funcEmail1 func',
      'description' => '“En mi experiencia, la venta se logra luego de varios contactos <br> personalizados. La gestión inteligente de campañas de emails <br> es una estrategia fundamental para mantenerse en contacto,<br> y quizás el método de menor costo de todos”.',
      'byAm' => '<strong class="blackColor">Andrés Moreno</strong>',
      'team' => 'Fundador de <span class="greenBlueColor">Escala</span> y Open English',
      'image' => App::setFilePath('/assets/images/person/am/andres_emailmk 1.png')
     ) ;
    @endphp

    @contain_am_T1( $parameters )

    @endcontain_am_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail2',
  'enableTitle' => true,
  'titlePrincipal' => '
  <span class="greenBlueColor">¡Hola! {Primer nombre},</span> <br> Empecemos a hablar...',
  'subTitlePrincipal' => 'Envía emails personalizados a cientos de contactos en segundos',
  'title' => '<span class="greenBlueColor">Crea tus emails</span> a imagen <br> y semejanza de tu negocio',
  'img' => App::setFilePath('/assets/images/illustrations/team/imagendetuempresa 1.png'),
  'text' => 'La primera impresión lo es todo. Crea y edita emails profesionales con <br> el editor de emails intuitivo de Escala. Simplemente, arrastra y suelta en <br> nuestras hermosas plantillas o crea las tuyas desde cero.
  <br class="space"><br class="space">
¡En minutos, tendrás una campaña con emails pidiendo ser abiertos!',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Comenzar ahora',
  'typeButton' => 'primaryButton',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail3',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/otto/otto_bolamagica 1.png'),
  'title' => '
  <span class="greenBlueColor">Bola de cristal,</span> muéstrame quiénes <br> están leyendo mis emails',
  'text' => 'No necesitarás un artefacto mágico que te responda. <br>
Con Escala sabrás quiénes de tus contactos abrieron los emails y cuándo.
<br class="space"><br class="space">
Aún mejor, ¡sabrás si tus emails están generando ventas!',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Comenzar ahora',
  // 'typeButton' => 'primaryButton',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail4',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/otto/otto_sombrero_email 1.png'),
  'title' => '<span class="greenBlueColor">Emails de Escala,</span> <br> ¡trabajen por mí!',
  'text' => 'Automatiza tus emails para que tus contactos reciban tus mensajes <br> en el momento indicado, ¡incluso mientras duermes!
<br class="space"><br class="space">
Envía emails de bienvenida, recordatorios de compra y mensajes de <br> seguimiento. ¿Todavía no han abierto tu email? ¡No hay problema! <br> Programa otro, en caso de que lo hayan olvidado.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Conectarlas ahora',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail5',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/spam-1 1.png'),
  'title' => '¡Hasta la vista, <br> bandeja de spam!',
  'text' => 'El envío de emails idealmente funciona de esta manera: enviar, abrir y <br> vender. ¡Eso es difícil de lograr si tu email termina en la bandeja de spam!
  <br class="space"><br class="space">
Con Escala, hemos desarrollado la tecnología que minimiza el riesgo de <br> caer en la bandeja de spam.
<br class="space"><br class="space">
¡Logra que tus emails lleguen al lugar correcto!',
'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Publicar modo flash',
  // 'typeButton' => 'primaryButton',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail6',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/responsive_email 1.png'),
  'title' => '<span class="greenBlueColor">Laptops, celulares, iPads...</span> <br> ¡Nuestros emails se ven <br> bien en todos!',
  'text' => 'Cada persona ve sus emails en diferentes plataformas. <br> Afortunadamente, los emails que creas en Escala se ajustan <br> perfectamente a cualquier dispositivo: móvil, tableta o laptop… <br> para que siempre se vean bien.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Optimizar resultados',
  // 'typeButton' => 'primaryButton',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail7',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/responsive_email-1 1.png'),
  'title' => '<span class="greenBlueColor">Sr. {Apellido}</span> <br> ¡Conozca nuestro <br> nuevo {producto}!',
  'text' => 'Configura tus mensajes con {etiquetas}. Así podrás enviar emails <br> personalizados a cientos de contactos en segundos.
  <br class="space"><br class="space">
¿Qué te gustaría personalizar? <br>
¿Nombre, país, oferta, información de contacto?
<br class="space"><br class="space">
Aumenta tu eficiencia logrando mantener la cercanía <br>
de las conversaciones uno a uno.',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Enviar emails',
  'typeButton' => 'primaryButton',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail8',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="greenBlueColor">¡Deja que</span> los Números hablen!',
  'subTitlePrincipal' => 'Sigue el historial de tus emails en tiempo real',
  'overlay' => false,
  // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
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

@contain_multiple_cards_T1( $parameters )
@endcontain_multiple_cards_T1




@php
 $parameters = array(
  'type' => 'backgroundImage',
  'classSection' => 'funcEmail9',
  'backgroundImageFile' => App::setFilePath('/assets/images/banners/banner-mujer_fondo.png'),
  'enableTitle' => false,
  'img' =>  App::setFilePath('/assets/images/banners/banner-mujer_mujer.png'),
  'title' => '<span class="whiteColor">¡Crece más rápido <br> con los emails de Escala!</span>',
  'text' => null,
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Probar email marketing ahora',
  'typeButton' => 'primaryButton',
  'side' => 'left',

 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1




  </div>


</div>



@endsection

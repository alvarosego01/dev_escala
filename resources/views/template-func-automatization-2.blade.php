
{{--
  Template Name: [B] Func - Automatizacion - 2
--}}




@extends('layouts.app')

@section('content')

<div id="func-automatization2-bootstrap">

  <div class="sections">

    {{-- funcAutomatization2_ --}}

    @php
 $parameters = array(
  'backgroundImageType' => true,
  'overlay' => true,
  'classSection' => 'func funcAutomatization2_0',
  'title' => '<span class="greenBlueColor">Haz crecer tu negocio</span> <br> en piloto automático',
  'text' => 'Escala trabaja por ti 25 horas al día, 366 días al año.',
  'textForm' => 'Empieza a probar Escala',
  'backgroundImage' => App::setFilePath('/assets/images/backgrounds/degradeBlue1.png'),
  'overlayImage' => App::setFilePath('/assets/images/overlays/estrellas 2.png'),
  'image' => App::setFilePath('/assets/images/illustrations/team/banner_01.png'),
  'threeCol' => false,
 ) ;
@endphp

@header_t1( $parameters )

@endheader_t1


@php
$parameters = array(
 'classSection' => 'funcAutomatization2_1 func',
 'description' => '“Uno de los mayores retos de liderar un negocio es enfocarse en lo que <br> es importante y hacer que cada minuto cuente. Con la automatización <br> de Escala podrás ahorrarte el tiempo de hacer tareas repetitivas e <br> invertirlo en los proyectos que agregan valor a tu negocio”.',
 'byAm' => '<span class="greenBlueColor">Andrés Moreno</span>',
 'team' => 'Fundador de <span class="greenBlueColor">Escala</span> y Open English',
 'image' => App::setFilePath('/assets/images/person/am/02_andres.png'),
) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1




@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAutomatization2_2',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/banner_02.png'),
  'title' => '<span class="greenBlueColor">¿Listo?</span> Automatiza y logra <br> tus metas de venta',
  'text' => 'Utiliza la tecnología automatizada de Escala para manejar las tareas <br> repetitivas. Cumple tus cuotas de ventas incluso mientras duermes o tomas un café
  <br class="space"><br class="space">
Imagina que se han registrado 1,000 contactos en tu base de datos en una <br> hora. ¿Cómo vas a comunicarte con cada uno de ellos de forma <br> personalizada? ¿Cómo vas a distribuir esos contactos entre tu equipo de <br> ventas para convertirlos en clientes?
<br class="space"><br class="space">
¡Sigue leyendo, te diremos cómo hacerlo!',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Aumentar la productividad ahora',
  'typeButton' => 'primaryButton',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1





@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAutomatization2_3',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="greenBlueColor">Te presentamos los workflows,</span> <br> tus asistentes 24/7',
  'subTitlePrincipal' => 'Los workflows son cadenas de acciones simples que puedes <br> automatizar para que se activen ¡incluso mientras duermes! Con Escala puedes:',
  'overlay' => false,
  // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
  'elements' => array(
    [
      'img' => App::setFilePath('/assets/images/illustrations/others/workflow_01.png'),
      'title' => '<span class="blueColor">Automatizar <br> tareas simples</span>',
      'enableButton' => false,
    ],
    [
      'img' => App::setFilePath('/assets/images/illustrations/others/workflow_02.png'),
      'title' => '<span class="blueColor">Configurar emails de <br> respuesta automática</span>',
      'enableButton' => false
    ],
    [
      'img' => App::setFilePath('/assets/images/illustrations/others/workflow_03.png'),
      'title' => '<span class="blueColor">Programar notificaciones <br> y recordatorios</span>',
      'enableButton' => false
    ]
  )
 ) ;
@endphp

@contain_multiple_cards_T1( $parameters )

@endcontain_multiple_cards_T1




@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAutomatization2_4',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/otto/mas_tiempo-1.png'),
  'title' => '<span class="greenBlueColor">Ten más tiempo para innovar...</span> <br> o relajarte ¡depende de ti!',
  'text' => 'A nadie le gusta repetir los mismos pasos una y otra vez. Con Escala <br> puedes automatizar tareas repetitivas, evitar errores humanos y enviar <br> emails a tus clientes potenciales a tiempo. Automatiza esas acciones que <br> solías hacer mil veces.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Gana más tiempo',
  // 'typeButton' => 'primaryButton',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAutomatization2_5',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/emailmatiza-1.png'),
  'title' => 'Emailmatiza, ¡crea la secuencia <br> de emails que venden!',
  'text' => 'Piensa tu estrategia de emails una vez y automatízala <br> para que se envíen de acuerdo al plan.
<br class="space"><br class="space">
<strong>Email 1:</strong> ¡Hola! Gracias por registrarte…
<br class="space"><br class="space">
<strong>Email 2:</strong> ¡Hola, soy yo de nuevo! ¿Te lo vas a perder?…
<br class="space"><br class="space">
<strong>Email 3:</strong> ¡Éxito! Felicitaciones por tu compra.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Email 4: Bienvenido a Escala',
  // 'typeButton' => 'primaryButton',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAutomatization2_6',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/programar_tareas.png'),
  'title' => '<span class="greenBlueColor">Programa tareas claves</span> <br> para tu equipo de ventas',
  'text' => 'Con Escala puedes automatizar notificaciones para recordarle a tus <br> vendedores qué hacer y cuándo. Logra que se comuniquen con clientes <br> potenciales en el momento correcto...
<br class="space"><br class="space">
<strong>¡Consigue más ventas!</strong>',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Notificarles ahora',
  // 'typeButton' => 'primaryButton',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAutomatization2_7',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/automatizacion_etiquetas.png'),
  'title' => '<span class="greenBlueColor">Automatiza</span> <br> ¡tan solo agregándole <br> una etiqueta!',
  'text' => 'Con Escala puedes segmentar tus contactos y asignarles <br>  etiquetas. Esas etiquetas pueden activar emails, notificaciones <br> y otras acciones de ventas sin que tengas que mover un solo <br> dedo. Pruébalo. ¡Funciona como magia!',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Hacer mi vida más facil',
  'typeButton' => 'primaryButton',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAutomatization2_8',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/visualizacion_workflows.png'),
  'title' => '<span class="greenBlueColor">Visualiza fácilmente</span> <br> tus workflows',
  'text' => 'Ve en tiempo real tu máquina de ventas en acción. <br> El dashboard de Escala te muestra todo lo que has <br> automatizado. Siéntate y relájate.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Disfrutar de la vista',
  // 'typeButton' => 'primaryButton',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1






@php
 $parameters = array(
  'classSection' => 'funcAutomatization2_9',
  'title' => '<span class="greenBlueColor">Automatiza y ahorra tiempo</span>',
  'text' => null,
  'image' => App::setFilePath('/assets/images/person/escala_sofa1.png'),
  'textForm' => 'Pruébalo ahora'
 ) ;
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



  </div>

</div>



@endsection

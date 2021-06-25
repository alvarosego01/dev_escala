
{{--
  Template Name: [B] Func - CRM escala
--}}


<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap" type="text/css" media="all">

@extends('layouts.app')

@section('content')

<div id="func-crm-bootstrap">

  <div class="sections">




    @php
 $parameters = array(
  'backgroundImageType' => false,
  'overlay' => false,
  'classSection' => 'func funcCrm0',
  'title' => '<span class="greenBlueColor">Convierte más</span> <br>
contactos en clientes',
  'text' => 'El arma secreta de tu fuerza de ventas: <br>
el CRM de escala. Un sistema para <br> administrar la relación con tus clientes.',
  'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm01.png',
  'textForm' => 'Empieza a probar escala
  <br style="display: block!important">
  <span style="text-align: left"; width: 100% class="colorDarkGrey2">Sin tarjeta requerida</span>',
  'overlayImage' => null,
  'threeCol' => false,
 ) ;
@endphp

@header_t1( $parameters )

@endheader_t1




@php
$parameters = array(
 'classSection' => 'funcCrm1 func',
 'description' => '“Luego de generar una base de datos de clientes potenciales, tu <br> <strong>CRM es la herramienta más importante para convertirlos en <br> clientes</strong> fieles y construir relaciones a largo plazo”.',
 'byAm' => '<span class="greenBlueColor">Andrés Moreno</span>',
 'team' => 'Fundador de <span class="greenBlueColor">escala</span> y Open English',
 'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm02.png'
) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1


@php
$parameters = array(
'type' => 'backgroundColor',
'classSection' => 'funcCrm2',
'enableTitle' => true,
'titlePrincipal' => '<span class="greenBlueColor">Maneja una base de datos inteligente,</span> <br> cierra más ventas',
'subTitlePrincipal' => 'Cuando tus visitantes registren sus datos en tu landing page, <br>
toda esa información quedará <strong>automáticamente almacenada en tu CRM de escala.</strong>',
'title' => 'Prioriza <span class="greenBlueColor">tu día de ventas</span>',
'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm03.png',
'text' => '¡El CRM de escala te da las herramientas para organizar <br> tus oportunidades de venta! Identifica fácilmente cuáles <br> son tus clientes potenciales más valiosos y cuáles <br> requieren tu atención inmediata.
<br class="space"><br class="space">
¡Tu día, mes y año podrían ser 1000% más productivos!',
'enableButton' => true,
'urlButton' => '#lead-form',
'textButton' => 'Comenzar ahora',
'typeButton' => 'primaryButton',
'side' => 'left',
) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
$parameters = array(
'type' => 'backgroundColor',
'classSection' => 'funcCrm3',
'enableTitle' => false,
'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm04.png',
'title' => '<span class="greenBlueColor">No olvides ninguna tarea,</span> <br> consigue más negocios',
'text' => '¡Atención! Las notificaciones oportunas de escala <br>
te recuerdan cuándo, por qué y a quién contactar. <br> Prográmalas y enfócate solo en lo importante: <br>
Nutrir la relación y ¡cerrar la venta!
',
'enableButton' => false,
// 'urlButton' => '#lead-form',
// 'textButton' => 'Comenzar ahora',
// 'typeButton' => 'primaryButton',
'side' => 'right',
) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
$parameters = array(
'type' => 'backgroundColor',
'classSection' => 'funcCrm4',
'enableTitle' => false,
'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm05.png',
'title' => 'El conocimiento es poder <br> <span class="greenBlueColor">Ten memoria de elefante</span>',
'text' => 'escala pone todo lo que necesitas recordar sobre cada <br> uno de tus contactos en un solo lugar.
<br class="space"><br class="space">
Ya sea información de contacto, tareas pendientes, <br> comunicaciones pasadas o detalles importantes, <br> ¡considéranos la memoria de tu base de datos!',
'enableButton' => false,
// 'urlButton' => '#lead-form',
// 'textButton' => 'Conectarlas ahora',
'side' => 'left',
) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
$parameters = array(
'type' => 'backgroundColor',
'classSection' => 'funcCrm5',
'enableTitle' => false,
'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm06.png',
'title' => '<span class="whiteColor">Clasifica tus contactos <br>
con etiquetas avanzadas</span>',
'text' => 'La clave para aprovechar al máximo tu CRM es organizar la información. <br> Segmenta tus bases de datos por campaña, productos/servicios de <br> interés, clientes de alto potencial y clientes desafiantes. No solo llegarás <br> a tu público más fácilmente, sino que podrás enviar mensajes relevantes <br> a contactos específicos.',
'enableButton' => true,
'urlButton' => '#lead-form',
'textButton' => 'Pruébalo ahora',
'typeButton' => 'primaryButton',
'side' => 'right',
) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
$parameters = array(
'type' => 'backgroundColor',
'classSection' => 'funcCrm6',
'enableTitle' => false,
'img' => 'https://cdn.escala.com/wp-content/uploads/2021/04/beneficio_04.svg',
'title' => 'Mantén viva la llama, <br> <span class="greenBlueColor">incluso después de muchos años</span>',
'text' => 'Muchas compañías piensan que convertir un contacto en un <br> cliente es el final del ciclo de ventas. En escala, sabemos <br>
que es solo el comienzo.
<br class="space"><br class="space">
Con nuestro CRM, puedes responder las siguientes preguntas <br> para construir relaciones a largo plazo con tus clientes: ¿Cuál ha <br> sido su experiencia con tu producto o servicio? ¿Qué puedes <br> hacer para mejorarlo? ¿Qué audiencias se conectan mejor con tu <br> marca? ¿Cómo puedes generar más referidos?',
'enableButton' => false,
// 'urlButton' => '#lead-form',
// 'textButton' => 'Optimizar resultados',
// 'typeButton' => 'primaryButton',
'side' => 'left',
) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
$parameters = array(
'type' => 'backgroundColor',
'classSection' => 'funcCrm7',
'enableTitle' => false,
'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm08.png',
'title' => '<span class="greenBlueColor">Espejito, espejito...</span> <br> cuéntamelo ¡Todo!',
'text' => 'Aumenta tus ventas en función de métricas relevantes <br>
En un solo vistazo, conoce la salud de tu negocio... En un solo dashboard, <br> revisa todos los números que determinarán el futuro de tu negocio:
<br class="space"><br class="space">
¿Cuántas ventas están abiertas actualmente? ¿Cuántos visitantes se <br> convierten en contactos? ¿Cuántos contactos se convierten en clientes? <br> ¿Cuáles son los niveles de conversión de tus ventas? ¿Cuántas ganancias <br> esperas obtener a fin del mes?
<br class="space"><br class="space">
En minutos puedes analizar para optimizar tu ventas.',
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
'classSection' => 'funcCrm8',
'enableTitle' => false,
'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm09.png',
'title' => 'Compara los números, <br> <span class="greenBlueColor">¡felicita a tu vendedor estrella!</span>',
'text' => '¿Quién es tu mejor vendedor? Supervisa el rendimiento de cada miembro <br> de tu equipo y cómo sus actividades se reflejan en tus resultados finales.
<br class="space"><br class="space">
escala será el mejor amigo de tu gerente de ventas',
'enableButton' => true,
'urlButton' => '#lead-form',
'textButton' => 'Comenzar ahora',
'typeButton' => 'primaryButton',
'side' => 'left',
) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
$parameters = array(
'type' => 'backgroundColor',
'classSection' => 'funcCrm9',
'enableTitle' => false,
'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm10.png',
'title' => '<span class="greenBlueColor">No eres un adivino, pero</span> <br> puedes predecir y mejorar <br> ¡el futuro!',
'text' => 'Conoce exactamente de cuál embudo de venta proceden tus contactos <br> y qué mensajes han sido más efectivos.Responde preguntas como:
<br class="space"><br class="space">
¿Qué han comprado? ¿Cuánto han gastado? ¿Cuáles son sus <br> preferencias? ¿Qué emails han recibido? Y lo más importante, <br>
¿los segmentaste correctamente?
<br class="space"><br class="space">
¡Toma mejores decisiones considerando esta información!',
'enableButton' => false,
// 'urlButton' => '#lead-form',
// 'textButton' => 'Comenzar ahora',
// 'typeButton' => 'primaryButton',
'side' => 'right',
) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
$parameters = array(
'type' => 'backgroundColor',
'classSection' => 'funcCrm10',
'enableTitle' => false,
'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm11.png',
'title' => 'Toma las acciones correctas <br> <span class="greenBlueColor">¡en el momento correcto¡</span>',
'text' => 'Obtén datos claves e identifica patrones de comportamiento para mejorar <br> la comunicación con tus clientes. Usa esta información para tomar mejores <br> decisiones y optimizar una estrategia de ventas exitosa.',
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
'classSection' => 'funcCrm11',
'backgroundImageFile' => null,
'enableTitle' => false,
'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalacrm12.png',
'title' => 'Gerencia tus ventas <br>
<sspan class="blueLightColor3">como si tu crecimiento <br> dependiera de ello.</sspan>',
'text' => null,
'enableButton' => true,
'typeButton' => 'primaryButton',
'urlButton' => '#lead-form',
'textButton' => 'Probar el CRM ahora',
'side' => 'right',
'overlay' => false,
'overlayImage' => null,

) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1




  </div>

</div>



@endsection


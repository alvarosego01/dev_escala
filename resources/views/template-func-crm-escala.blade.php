
{{--
  Template Name: [B] Func - CRM escala
--}}



@extends('layouts.app')

@section('content')

<div id="func-crm-bootstrap">

  <div class="sections">



@php
$parameters = array(
 'backgroundImageType' => false,
 'overlay' => null,
 'classSection' => 'funcCrm0',
 'title' => '<span class="orangeColor">Convierte más</span> <br> contactos en clientes',
 'text' => 'El arma secreta de tu fuerza de ventas: el CRM de <span class="orangeColor">escala.</span> Un sistema para administrar la relación con tus clientes.',
 'image' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-crm-convertir-contactos-cliente-fuerza-venta-e1593189337723.png',
 'textForm' => '<span class="orangeColor">Impulsa</span> tus ventas ahora',
) ;
@endphp

@header_t1( $parameters )

@endheader_t1




@php
 $parameters = array(
  'classSection' => 'funcCrm1 floated',
  'description' => '“Luego de generar una base de datos de <br> clientes potenciales, tu <strong>CRM es la <br> herramienta más importante para <br> convertirlos en clientes</strong> fieles y construir <br> relaciones a largo plazo”.',
  'byAm' => '<span class="orangeColor">Andrés Moreno</span>',
  'team' => 'Fundador de <span class="orangeColor">escala</span> y Open English',
  'image' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-Andre%CC%81s-Moreno-founder-Ceo-Open-English-5.png'
 ) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcCrm2',
  'enableTitle' => true,
  'titlePrincipal' => 'Maneja una <span class="orangeColor">base de datos</span> inteligente, <br> cierra más ventas',
  'subTitlePrincipal' => 'Cuando tus visitantes registren sus datos en tu landing page, <br> toda esa información quedará automáticamente almacenada en tu CRM de <span class="orangeColor">escala.</span> <br> ¡No más hojas de excel ni integraciones complicadas!',
  'title' => '<span class="orangeColor">Prioriza</span> tu día de ventas',
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-crm-organiza-perfectamente-dia-venta-productividad-768x498.png',
  'text' => '¡El CRM de <span class="orangeColor">escala</span> te da las herramientas para organizar tus <br> oportunidades de venta! Identifica fácilmente cuáles son tus <br> clientes potenciales más valiosos y cuáles requieren tu atención <br> inmediata.
  <br class="space"><br class="space">
  <strong>¡Tu día, mes y año podrían ser 1000% más productivos!</strong>',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Aumenta tu productividad',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcCrm3',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-crm-negocio-venta-gestion-base-dato-768x747.png',
  'title' => 'No olvides ninguna tarea, <br> consigue <span class="orangeColor">más negocios</span>',
  'text' => '<strong>¡Atención!</strong> Las notificaciones oportunas de <span class="orangeColor">escala</span> te br> recuerdan cuándo, por qué y a quién contactar. <br> Prográmalas y enfócate solo en lo importante: Nutrir la <br> relación y ¡cerrar la venta!',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Recibir notificaciones',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcCrm4',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-crm-conocimiento-recordar-informacion-contacto-e1593189679521-768x552.png',
  'title' => 'El conocimiento es poder. <br> Ten <span class="orangeColor">memoria</span> de elefante',
  'text' => '<span class="orangeColor">escala</span> pone todo lo que necesitas recordar sobre cada <br> uno de tus contactos en un solo lugar.
  <br class="space"><br class="space">
Ya sea información de contacto, tareas pendientes, <br> comunicaciones pasadas o detalles importantes, <br>  <strong>¡considéranos la memoria de tu base de datos!</strong>',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Conectarlas ahora',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcCrm5',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-crm-clasifica-contacto-etiquetas-avanzada-768x498.png',
  'title' => '<span class="orangeColor">Clasifica</span> tus contactos con <br> etiquetas avanzadas',
  'text' => 'La clave para aprovechar al máximo tu CRM es organizar <br> la información. Segmenta tus bases de datos por <br> campaña, productos/servicios de interés, clientes de alto <br> potencial y clientes desafiantes. No solo llegarás a tu <br> público más fácilmente, sino que podrás enviar mensajes <br> relevantes a contactos específicos.
  <br class="space"><br class="space">
<strong>¡Tu vida se ha vuelto mucho más fácil!</strong>',
  'enableButton' => false,

  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcCrm6',
  'enableTitle' => false,
  'title' => '<span class="orangeColor">Mantén viva la llama,</span> incluso después de muchos años',
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-crm-gestion-venta-comunicacion-relacionamiento-768x822.png',
  'text' => 'Muchas compañías piensan que convertir un contacto <br> en un cliente es el final del ciclo de ventas. En <span class="orangeColor">escala</span>, <br> sabemos que es solo el comienzo.
  <br class="space"><br class="space">
Con nuestro CRM, puedes responder las siguientes <br> preguntas para construir relaciones a largo plazo con <br> tus clientes: ¿Cuál ha sido su experiencia con tu <br> producto o servicio? ¿Qué puedes hacer para mejorarlo? <br> ¿Qué audiencias se conectan mejor con tu marca? <br> ¿Cómo puedes generar más referidos?',
  'enableButton' => false,

  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
$parameters = array(
 'type' => 'backgroundColor',
 'classSection' => 'funcCrm7',
 'enableTitle' => true,
 'titlePrincipal' => 'Espejito, espejito... <span class="orangeColor">cuéntamelo ¡Todo!</span>',
 'subTitlePrincipal' => 'Aumenta tus ventas en función de métricas relevantes',
 'title' => 'En un solo vistazo, conoce la <br>
 <span class="orangeColor">salud</span> de tu negocio...',
 'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-crm-conoce-salud-negocio-e1593189863701.png',
 'text' => 'En un solo dashboard, revisa todos los números que <br> determinarán el futuro de tu negocio:
 <br class="space"><br class="space">
¿Cuántas ventas están abiertas actualmente? ¿Cuántos <br> visitantes se convierten en contactos? ¿Cuántos contactos <br> se convierten en clientes? ¿Cuáles son los niveles de <br> conversión de tus ventas? ¿Cuántas ganancias esperas <br> obtener a fin del mes?
<br class="space"><br class="space">
<strong>En minutos puedes analizar para optimizar tu ventas.</strong>',
 'enableButton' => true,
 'urlButton' => '#lead-form',
 'textButton' => 'Diagnosticarlo ahora',
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
  'title' => 'Compara <span class="orangeColor">los números,</span> <br>
¡felicita a tu vendedor estrella!',
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-crm-gestion-ventas-productividad-2-768x758.png',
  'text' => '¿Quién es tu mejor vendedor? Supervisa el rendimiento de <br> cada miembro de tu equipo y cómo sus actividades se <br> reflejan en tus resultados finales.
  <br class="space"><br class="space">
  <strong><span class="orangeColor">escala</span> será el mejor amigo de tu gerente de ventas</strong>',
  'enableButton' => true,
 'urlButton' => '#lead-form',
 'textButton' => 'Medir rendimiento',
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
  'title' => 'No eres un adivino, pero ¡ahora <br>
puedes predecir y <span class="orangeColor">mejorar el futuro!</span>',
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-crm-embudo-contacto-efectividad-768x498.png',
  'text' => 'Conoce exactamente de cuál embudo de venta proceden <br> tus contactos y qué mensajes han sido más <br> efectivos.Responde preguntas como:
  <br class="space"><br class="space">
¿Qué han comprado? ¿Cuánto han gastado? ¿Cuáles son <br> sus preferencias? ¿Qué emails han recibido? Y lo más <br> importante, ¿los segmentaste correctamente?
<br class="space"><br class="space">
<strong>¡Toma mejores decisiones considerando esta información!</strong>
',
  'enableButton' => true,
 'urlButton' => '#lead-form',
 'textButton' => 'Predecir y mejorar',
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
  'title' => 'Toma las acciones correctas <br>
en el <span class="orangeColor">momento correcto</span>',
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-crm-metricas-informacion-optimizar-e1594827157608-768x511.png',
  'text' => 'Obtén datos claves e identifica patrones de <br>  comportamiento para mejorar la comunicación con tus <br> clientes. Usa esta información para tomar mejores <br> decisiones y optimizar una estrategia de ventas exitosa.',
  'enableButton' => false,
 'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
 $parameters = array(
  'classSection' => 'funcCrm11',
  'title' => 'Gerencia tus ventas como <br> si tu crecimiento dependiera de ello.',
  'goToUrl' => '#lead-form',
  'textButton' => 'Probar el CRM ahora',

 ) ;
@endphp

@callToAction_T2( $parameters )

@endcallToAction_T2


  </div>

</div>



@endsection



{{--
  Template Name: [B] Func - Anuncios digitales
--}}


<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap" type="text/css" media="all">


@extends('layouts.app')

@section('content')

<div id="func-announceDigital-bootstrap">

  <div class="sections">



    @php
    $parameters = array(
     'backgroundImageType' => true,
     'overlay' => true,
     'classSection' => 'threeCol funcAnnounceDigital0 func',
     'title' => '<span class="greenBlueColor">Atrae visitantes</span> <br> como un imán',
     'text' => 'Crea, publica y administra tus <br> campañas de anuncios digitales, <br> desde una sola plataforma.',
     'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads01.png',
     'textForm' => 'Empieza a probar escala
  <br style="display: block!important">
  <span style="text-align: left"; width: 100% class="colorDarkGrey2">Sin tarjeta requerida</span>',
     'threeCol' => true,
     'backgroundImage' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-bg.png',
      'overlayImage' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalaads-planets.svg',
    ) ;
    @endphp

    @header_t1( $parameters )

    @endheader_t1




    @php
     $parameters = array(
      'classSection' => 'funcAnnounceDigital1 func',
      'description' => '“La manera más rápida de escalar tu negocio es dominando el <br> mercadeo digital. Cualquiera puede publicar un anuncio digital, la <br> clave está en saber generar tráfico calificado a tu landing page al <br> menor costo posible. <strong>En escala te brindamos todas las <br> herramientas para hacerlo posible</strong>”.',
      'byAm' => '<span class="greenBlueColor">Andrés Moreno</span>',
      'team' => 'Fundador de <span class="greenBlueColor">escala</span> y Open English',
      'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads02-246x300.png'
     ) ;
    @endphp

    @contain_am_T1( $parameters )

    @endcontain_am_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnnounceDigital2',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="greenBlueColor">Genera tráfico a tus páginas</span> <br> sin que tu billetera sufra',
  'subTitlePrincipal' => 'Crea y maneja potentes campañas digitales en <strong class="orangeColor">escala</strong>',
  'title' => '<span class="greenBlueColor">Segmenta y consigue</span> <br> más clientes potenciales',
  'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads03-280x300.png',
  'text' => 'Una de las claves para crear anuncios exitosos es escoger <br> correctamente el público al que deseas dirigir tus campañas de <br> mercadeo. En escala encuentras las herramientas que necesitas para <br> segmentar y aprovechar al máximo el poder de los medios digitales.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Segmentar ahora',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnnounceDigital3',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads04-230x300.png',
  'title' => '<span class="whiteColor">Diseña potentes anuncios digitales. <br> Atrae a tu audiencia ideal</span>',
  'text' => 'Despierta tu creatividad creando anuncios de Facebook e Instagram <br> fácilmente en escala.
<br class="space"><br class="space"> Simplemente agrega textos que enganchen, escoge un titular irresistible, <br> y selecciona la foto o el video que mejor comunique <br> tu propuesta de valor.
<br class="space"><br class="space">
¡Todo es más fácil desde la plataforma!',
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
  'classSection' => 'funcAnnounceDigital4',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads05-300x232.png',
  'title' => '<span class="greenBlueColor">Conecta fácilmente</span> <br> tus anuncios digitales <br> a tus páginas',
  'text' => 'Una vez que has creado potentes campañas de anuncios digitales <br> en escala, simplemente selecciona el landing page al que deseas <br> dirigir el tráfico ¡y voilà!
<br class="space"><br class="space">
Estás listo para desbordar tus landing pages con visitantes.',
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
  'classSection' => 'funcAnnounceDigital5',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads06-292x300.png',
  'title' => '<span class="greenBlueColor">¿Listo para publicar?</span> <br> *Hazlo en un click*',
  'text' => 'Con escala, publicar tus campañas en Facebook <br>
e Instagram es fácil y rápido.
<br class="space"><br class="space">
¡Solo necesitas un click!
<br class="space"><br class="space">
Siéntate, relájate y observa cómo tus anuncios <br>
hacen su magia para traer tráfico a tus páginas.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Publicar modo flash',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnnounceDigital6',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads07-281x300.png',
  'title' => '<span class="greenBlueColor">¡Optimizar,</span> <br> siempre optimizar!',
  'text' => 'Monitorea en tiempo real el rendimiento de tus campañas <br> de anuncios digitales con escala. <br>
¿Cuántas personas han visto tu anuncio? <br>
¿Cuál es tu costo por click?
<br class="space"><br class="space">
Lo que no se mide no mejora. Conoce lo que funciona, <br> aprende de lo que no y mejora con ello tus resultados.',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Optimizar resultados',
  'typeButton' => 'primaryButton',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
 $parameters = array(
  'type' => 'backgroundImage',
  'classSection' => 'funcAnnounceDigital7',
  'backgroundImageFile' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads08.png',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder14-265x300.png',
  'title' => '<span class="whiteColor">tus anuncios digitales</span> <br> ¿Qué es un Pixel y por qué <br> es importante?
  ',
  'text' => '
  <span style="text-align: center; font-size: 20px; font-weight: 600!important">Crea y maneja potentes campañas digitales en <span class="orangeColor">escala</span></span>
  <br class="space"><br class="space">
  Imagina poder saber: qué campaña de anuncios <br> digitales generó más visitas a tu landing page, qué <br> segmentación de audiencia generó más contactos, qué <br> anuncio generó más clientes, ¡y mucho más!
<br class="space"><br class="space">
Cuando tu landing page tiene el Pixel integrado, tú y <br> Facebook obtienen información que permite optimizar <br> rápidamente tus campañas de anuncios digitales.
<br class="space"><br class="space">
Las páginas creadas en escala ya vienen <br>
con el Pixel de Facebook integrado.
  ',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => '¡Ve rápido y furioso!',
  'side' => 'right',

 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnnounceDigital8',
  'backgroundImageFile' => null,
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads09-193x300.png',
  'title' => '<span class="blueLightColor3">¡Consigue más visitantes</span> <br> calificados ahora!',
  'text' => null,
  'enableButton' => true,
  'typeButton' => 'primaryButton',
    'urlButton' => '#lead-form',
  'textButton' => 'Pruébalo ahora',
  'side' => 'right',
  'overlay' => true,
  'overlayImage' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets2.svg',

 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


  </div>

</div>



@endsection

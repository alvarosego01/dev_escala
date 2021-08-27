
{{--
  Template Name: [B] Func - Anuncios digitales
--}}




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
     'textForm' => 'Empieza a probar Escala',
     'threeCol' => true,
     'backgroundImage' => App::setFilePath('/assets/images/backgrounds/degradeBlue1.png'),
  'overlayImage' => App::setFilePath('/assets/images/overlays/estrellas 2.png'),
  'image' => App::setFilePath('/assets/images/illustrations/team/01.png'),
    ) ;
    @endphp

    @header_t1( $parameters )

    @endheader_t1




    @php
     $parameters = array(
      'classSection' => 'funcAnnounceDigital1 func',
      'description' => '“La manera más rápida de Escalar tu negocio es dominando el <br> mercadeo digital. Cualquiera puede publicar un anuncio digital, la <br> clave está en saber generar tráfico calificado a tu landing page al <br> menor costo posible. <strong>En Escala te brindamos todas las <br> herramientas para hacerlo posible</strong>”.',
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
  'classSection' => 'funcAnnounceDigital2',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="greenBlueColor">Genera tráfico a tus páginas</span> <br> sin que tu billetera sufra',
  'subTitlePrincipal' => 'Crea y maneja potentes campañas digitales en <strong class="orangeColor">Escala</strong>',
  'title' => '<span class="greenBlueColor">Segmenta y consigue</span> <br> más clientes potenciales',
  'img' => App::setFilePath('/assets/images/illustrations/others/03_barato.png'),
  'text' => 'Una de las claves para crear anuncios exitosos es escoger <br> correctamente el público al que deseas dirigir tus campañas de <br> mercadeo. En Escala encuentras las herramientas que necesitas para <br> segmentar y aprovechar al máximo el poder de los medios digitales.',
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
  'img' => App::setFilePath('/assets/images/illustrations/others/04_anuncio.png'),
  'title' => '<span class="whiteColor">Diseña potentes anuncios digitales. <br> Atrae a tu audiencia ideal</span>',
  'text' => 'Despierta tu creatividad creando anuncios de Facebook e Instagram <br> fácilmente en Escala.
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
  'img' => App::setFilePath('/assets/images/illustrations/others/05_FB.png'),
  'title' => '<span class="greenBlueColor">Conecta fácilmente</span> <br> tus anuncios digitales <br> a tus páginas',
  'text' => 'Una vez que has creado potentes campañas de anuncios digitales <br> en Escala, simplemente selecciona el landing page al que deseas <br> dirigir el tráfico ¡y voilà!
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
  'img' => App::setFilePath('/assets/images/illustrations/team/06_publicar.png'),
  'title' => '<span class="greenBlueColor">¿Listo para publicar?</span> <br> *Hazlo en un click*',
  'text' => 'Con Escala, publicar tus campañas en Facebook <br>
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
  'img' => App::setFilePath('/assets/images/illustrations/others/07_optimizar.png'),
  'title' => '<span class="greenBlueColor">¡Optimizar,</span> <br> siempre optimizar!',
  'text' => 'Monitorea en tiempo real el rendimiento de tus campañas <br> de anuncios digitales con Escala. <br>
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
  'backgroundImageFile' => App::setFilePath('/assets/images/banners/banner-blue-planets2.png'),
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/banners/banner-mujer_mujer2.png'),
  'title' => '<span class="whiteColor">Tus anuncios digitales</span> <br> ¿Qué es un Pixel y por qué <br> es importante?
  ',
  'text' => '
  <span style="text-align: center; font-size: 20px; font-weight: 600!important">Crea y maneja potentes campañas digitales en <span class="orangeColor">Escala</span></span>
  <br class="space"><br class="space">
  Imagina poder saber: qué campaña de anuncios digitales generó <br> más visitas a tu landing page, qué segmentación de audiencia <br> generó más contactos, qué anuncio generó más <br> clientes, ¡y mucho más!
<br class="space"><br class="space">
Cuando tu landing page tiene el Pixel integrado, tú y Facebook <br> obtienen información que permite optimizar rápidamente tus <br> campañas de anuncios digitales.
<br class="space"><br class="space">
Las páginas creadas en Escala ya vienen con el <br> Pixel de Facebook integrado.
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
  'img' => App::setFilePath('/assets/images/illustrations/others/09_banner.png'),
  'title' => '<span class="blueLightColor3">¡Consigue más visitantes</span> <br> calificados ahora!',
  'text' => null,
  'enableButton' => true,
  'typeButton' => 'primaryButton',
    'urlButton' => '#lead-form',
  'textButton' => 'Pruébalo ahora',
  'side' => 'right',
  'overlay' => true,
  'overlayImage' => App::setFilePath('/assets/images/overlays/planets2.svg'),

 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


  </div>

</div>



@endsection

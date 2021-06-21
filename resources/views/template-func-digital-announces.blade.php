
{{--
  Template Name: [B] Func - Anuncios digitales
--}}



@extends('layouts.app')

@section('content')

<div id="func-announceDigital-bootstrap">

  <div class="sections">



    @php
 $parameters = array(
  'backgroundImageType' => false,
  'overlay' => false,
  'classSection' => 'threeCol funcAnnounceDigital0',
  'title' => '<span class="orangeColor">Atrae <br> visitantes</span> <br> como un <br> imán',
  'text' => 'Crea, publica y administra tus campañas de anuncios <br> digitales, desde una sola <br> plataforma.',
  'image' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-anuncio-digital-atraer-trafico-768x1006.png',
  'textForm' => '<span class="orangeColor">Impulsa</span> tus ventas ahora',
  'backgroundImage' => null,
  'overlayImage' => null,
  'threeCol' => true,
 ) ;
@endphp

@header_t1( $parameters )

@endheader_t1



@php
 $parameters = array(
  'classSection' => 'funcAnnounceDigital1 floated',
  'description' => '“La manera más rápida de escalar tu negocio es dominando el mercadeo digital. Cualquiera puede publicar un anuncio digital, la clave está en saber generar tráfico calificado a tu landing page al menor costo posible. <strong>En <span class="orangeColor">escala</span> te brindamos todas las herramientas para hacerlo posible”</strong>.',
  'byAm' => '<span class="orangeColor">Andrés Moreno</span>',
  'team' => 'Fundador de <span class="orangeColor">escala</span> y Open English',
  'image' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-Andre%CC%81s-Moreno-founder-Ceo-Open-English-31.png'
 ) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnnounceDigital2',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="orangeColor">Genera tráfico</span> a tus páginas sin <br> que tu billetera sufra en el intento',
  'subTitlePrincipal' => 'Crea y maneja potentes campañas digitales en <span class="orangeColor">escala</span>',
  'title' => 'Segmenta y consigue más <br> <span class="orangeColor">clientes potenciales</span>',
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-anuncio-digital-estrategia-marketing-experto-e1593190178664.png',
  'text' => 'Una de las claves para crear anuncios exitosos es escoger <br> correctamente el público al que deseas dirigir tus <br> campañas de mercadeo. En <span class="orangeColor">escala</span> encuentras las <br> herramientas que necesitas para segmentar y aprovechar <br> al máximo el poder de los medios digitales.',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Segmentar ahora',
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
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-anuncio-digital-generar-trafico-instagram-instagram-1024x1024.png',
  'title' => '<span class="orangeColor">Diseña</span> potentes anuncios digitales. <br> Atrae a tu audiencia ideal',
  'text' => 'Despierta tu creatividad creando anuncios de Facebook e <br> Instagram fácilmente en <span class="orangeColor">escala.</span>
  <br class="space"><br class="space">
Simplemente agrega textos que enganchen, escoge un <br> titular irresistible, y selecciona la foto o el video que mejor <br> comunique tu propuesta de valor.
<br class="space"><br class="space">
<strong>¡Todo es más fácil desde la plataforma!</strong>',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => '¡Empieza el juego!',
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
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-anuncios-digital-conectado-landing-page-e1593190288651-768x534.png',
  'title' => '<span class="orangeColor">Conecta fácilmente</span> tus anuncios <br> digitales a tus páginas',
  'text' => 'Una vez que has creado potentes campañas de anuncios digitales en <span class="orangeColor">escala,</span> simplemente selecciona el landing page al que deseas dirigir el tráfico ¡y voilà!
  <br class="space"><br class="space">
<strong>Estás listo para desbordar tus landing pages con visitantes</strong>.',
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
  'classSection' => 'funcAnnounceDigital5',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-anuncio-digital-atraer-trafico-publicar-768x849.png',
  'title' => '¿Listo para <span class="orangeColor">publicar?</span> <br> *Hazlo en un click*',
  'text' => 'Con <span class="orangeColor">escala</span>, publicar tus campañas en Facebook e <br> Instagram es fácil y rápido.
  <br class="space"><br class="space">
<strong>¡Solo necesitas un click!</strong>
<br class="space"><br class="space">
Siéntate, relájate y observa cómo tus anuncios hacen su <br> magia para traer tráfico a tus páginas.',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Publicar modo flash',
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
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-anuncio-digital-optimizar-monitorear-resultado-768x833.png',
  'title' => '¡Optimizar, <br> siempre <span class="orangeColor">optimizar!</span>',
  'text' => 'Monitorea en tiempo real el rendimiento de tus campañas de anuncios digitales con <span class="orangeColor">escala.</span> ¿Cuántas personas han visto tu anuncio? ¿Cuál es tu costo por click?
  <br class="space"><br class="space">
<strong>Lo que no se mide no mejora. Conoce lo que funciona, aprende de lo que no y mejora con ello tus resultados.</strong>',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Optimizar resultados',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnnounceDigital7',
  'enableTitle' => true,
  'titlePrincipal' => 'Te presentamos a <span class="orangeColor">“Pixel”</span> el nuevo mejor amigo de <br> tus anuncios digitales',
  'subTitlePrincipal' => '¿Qué es un Pixel y por qué es importante?',
  'title' => null,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-plataforma-embudo-crecimiento-negocio-digital-1-768x212.png',
  'text' => 'Imagina poder saber: qué campaña de anuncios digitales generó más visitas a tu landing page, qué <br> segmentación de audiencia generó más contactos, qué anuncio generó más clientes, ¡y mucho más!.
  <br class="space"><br class="space">
Cuando tu landing page tiene el Pixel integrado, tú y Facebook obtienen información <br> que permite optimizar rápidamente tus campañas de anuncios digitales.
<br class="space"><br class="space">
<strong>Las páginas creadas en <span class="orangeColor">escala</span> ya vienen con el Pixel de Facebook integrado.</strong>',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Segmentar ahora',
  'side' => 'center',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'classSection' => 'funcAnnounceDigital8',
  'title' => '¡Consigue más visitantes calificados ahora!',
  'goToUrl' => '#lead-form',
  'textButton' => 'Hacer anuncios digitales ahora',

 ) ;
@endphp

@callToAction_T2( $parameters )

@endcallToAction_T2


  </div>

</div>



@endsection

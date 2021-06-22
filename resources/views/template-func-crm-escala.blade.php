
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
 'backgroundImageType' => true,
 'overlay' => true,
 'classSection' => 'threeCol funcCrm0 func',
 'title' => '<span class="greenBlueColor">Atrae visitantes</span> <br> como un imán',
 'text' => 'Crea, publica y administra tus <br> campañas de anuncios <br> digitales, desde una sola <br> plataforma.',
 'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads01.png',
 'textForm' => '<span class="greenBlueColor">Impulsa</span> tus ventas ahora',
 'threeCol' => true,
 'backgroundImage' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-bg.png',
  'overlayImage' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escalaads-planets.svg',
) ;
@endphp

@header_t1( $parameters )

@endheader_t1




@php
 $parameters = array(
  'classSection' => 'funcCrm1 func',
  'description' => '“La manera más rápida de escalar tu negocio es dominando el <br> mercadeo digital. Cualquiera puede publicar un anuncio digital, la <br> clave está en saber generar tráfico calificado a tu landing page al <br> menor costo posible. <strong>En escala te brindamos todas las <br> herramientas para hacerlo posible</strong>”.',
  'byAm' => '<span class="greenBlueColor">Andrés Moreno</span>',
  'team' => 'Fundador de <span class="greenBlueColor">escala</span> y Open English',
  'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/escaaads02-246x300.png'
 ) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1



  </div>

</div>



@endsection


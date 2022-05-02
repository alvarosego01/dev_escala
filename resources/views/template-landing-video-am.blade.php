
{{--
  Template Name: [B] Landing - Video AM/Otto
--}}

@extends('layouts.app')
@section('content')
<div id="landing-video-amotto-bootstrap">
  <div class="sections">



{{-- @php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingVideoAmOtto0',
    'backgroundImageFile' => null,
    'enableTitle' => false,
    'img' => App::setFilePath('/assets/images/illustrations/others/otto.svg'),
    'title' => '
    <span class="whiteColor">
      <span style="color: #B9E6E9">¡Gracias por</span> <br class="space">
      registrar tus datos!
    </span>',
    'text' => null,
    'enableButton' => false,
    'urlButton' => '#lead-form',
    'textButton' => 'Hablar con un asesor',
    'typeButton' => 'primaryButton',
    'side' => 'right',
];
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1 --}}


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'landingVideoAmOtto1',
  'enableTitle' => true,
  'titlePrincipal' => '
  <span class="greenBlueColor">
    Escala te ayudará a</span>
    <br class="space">
    hacer crecer tu negocio',
  'subTitlePrincipal' => null,
  'title' => null,
  'typeVideo' =>  'localvideo',
  'videoEmbed' =>  App::setFilePath('/assets/videos/am_home1.mp4'),
  'videoCover' => App::setFilePath('/assets/images/illustrations/others/tapa_video_thankyou_page.jpg'),
  'text' => '
  Estás a un clic de comenzar a hacer crecer tu negocio con Escala, la plataforma todo en uno en marketing digital y ventas
  <br class="desktopElement"> 100% en español de LATAM, que te da en un solo lugar, todas las herramientas para:
  <br class="space"><br class="space">
<p class="text">
  <ul>
    <li>Generar demanda de tus productos y servicios</li>
    <li>Aumentar tus ventas</li>
    <li>Aumentar el índice de retención de tus clientes <br class="desktopTabletElement"> para lograr upsells y recompra</li>
    </ul>
    </p>
<br class="space"><br class="space">
<p class="text">
  Dale un vistazo a este video y descubre todo lo que puedes <br class="desktopTabletElement">
  lograr con nuestra plataforma.
</p>
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton',
  'textButton' => 'Prueba Escala ya',
  'side' => 'center',
 ) ;
@endphp

@contain_text_video_T1( $parameters )
@endcontain_text_video_T1


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingVideoAmOtto2',
    'backgroundImageFile' => null,
    'enableTitle' => false,
    'img' => App::setFilePath('/assets/images/illustrations/others/laptop_home_1.png'),
    'title' => '
    <span class="greenBlueColor">Conoce las funcionalidades</span> <br class="desktopTabletElement">
    que impulsarán tus ventas
    ',
    'text' => '
    Escala te ayuda a implementar cada parte de tu embudo de ventas <br class="desktopTabletElement">
    para darte a conocer, ganar su preferencia y aumentar tus ventas. <br class="desktopTabletElement">
    Puedes contar con estas funcionalidades muy fáciles de usar:
    <br class="space"><br class="space">
    <ul>
      <li>Creador de Landing Pages</li>
      <li>Anuncios Facebook e Instagram</li>
      <li>Flujos Automatizados</li>
      <li>CRM</li>
      <li>Dashboards de Analíticas</li>
      <li>Email Marketing</li>
    </ul>
    ',
    'enableButton' => false,
    'urlButton' => '#lead-form',
    'textButton' => 'Hablar con un asesor',
    'typeButton' => 'primaryButton',
    'side' => 'right',
];
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingVideoAmOtto3',
    'backgroundImageFile' => null,
    'enableTitle' => false,
    'img' => App::setFilePath('/assets/images/illustrations/team/landing_pages_escala_4.png'),
    'title' => '
      No pierdas ninguna venta, <br class="space">
      <span style="color: #B9E6E9">comienza ahora</span>
    ',
    'text' => '
    Entra en este link y solicita <br class="space">
    una DEMO GRATIS de Escala ahora
    ',
    'enableButton' => true,
    'urlButton' => '#lead-form',
    'textButton' => '¡DEMO GRATIS ahora!',
    'typeButton' => 'primaryButton',
    'side' => 'left',
];
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1








</div>

</div>

</div>




@endsection
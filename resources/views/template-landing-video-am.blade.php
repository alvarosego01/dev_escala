
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
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
    'side' => 'right',
];
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1 --}}


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'landingVideoAmOtto1',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => '
  <span class="greenBlueColor">Escala te ayudará a</span> <br class="space">
    hacer crecer tu negocio',
'typeVideo' =>  'localvideo',
  'videoEmbed' =>  App::setFilePath('/assets/videos/am_home1.mp4'),
  'videoCover' => App::setFilePath('/assets/images/illustrations/others/tapa_video_thankyou_page.jpg'),
  'text' => '
Estás a un clic de comenzar a hacer crecer tu negocio con Escala, la <br class="DT_e">
plataforma todo en uno en marketing digital y ventas <br class="DT_e">
100% en español de LATAM, que te da en un solo lugar, todas las <br class="DT_e">
herramientas para:
<br class="space"><br class="space">
<p class="text">
  <ul>
    <li>Generar demanda de tus productos y servicios</li>
    <li>Aumentar tus ventas</li>
    <li>Aumentar el índice de retención de tus clientes <br class="DT_e"> para lograr upsells y recompra</li>
    </ul>
</p>
<br class="space"><br class="space">
<p class="text">
  Dale un vistazo a este video y descubre todo lo que puedes <br class="DT_e">
  lograr con nuestra plataforma.
</p>
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
  'textButton' => 'Recibe un demo',
  'side' => 'right',
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
    <span class="greenBlueColor">Conoce las funcionalidades</span> <br class="DT_e">
    que impulsarán tus ventas
    ',
    'text' => '
    Escala te ayuda a implementar cada parte de tu embudo de ventas <br class="DT_e">
    para darte a conocer, ganar su preferencia y aumentar tus ventas. <br class="DT_e">
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
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
    'side' => 'left',
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
    'img' => App::setFilePath('/assets/images/person/pagina_registro_escala 1.png'),
    'title' => '
      <span class="greenBlueColor">No pierdas ninguna venta,</span> <br class="space">
      comienza ahora
    ',
    'text' => '
    Entra en este link y solicita <br class="space">
una demo gratis de Escala ahora
    ',
    'enableButton' => true,
    'urlButton' => '#',
    'textButton' => 'Solicitar Demo',
    'typeButton' => ' hoverInEffect secondaryButton openPopUpButton popup-general-demo-2022',
    'side' => 'right',
];
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1








</div>

</div>

</div>




@endsection
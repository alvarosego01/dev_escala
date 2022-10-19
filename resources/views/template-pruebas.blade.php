
{{--
  Template Name: [B] Pruebas
--}}


@extends('layouts.app')
@section('content')

<div id="homeBootstrap">
  <div class="sections">


    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol homeSection0 newHome',
     'title' => '
     <span class="bold" style="color: #B9E6E9" >CRM + Expertos =</span> <br class="space">
      <span style="color: #FAD872">
        Escalar con éxito
      </span>
    ',
     'text' => '<span class="whiteColor">
        La plataforma CRM todo-en-uno con acompañamiento <br class="space">
        en vivo de especialistas para impulsar el crecimiento de <br class="space">
        tu empresa.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/plataforma-escala-home.png'),
'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM'
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1


</div>

</div>


@endsection

{{--
  Template Name: [B] Escala Marketing - Marketing
--}}

@extends('layouts.app')

@section('content')

<div id="escalaMarketing-marketing-bootstrap">

  <div class="sections">

    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol eMarketing0',
     'title' => '<span class="whiteColor">Todas las herramientas <br class="space"> que necesitas</span>',
     'text' => '<span class="whiteColor">Para hacer tu Marketing <br class="space"> Digital más poderoso</span>',
     'textForm' => 'Pruébalo ahora',
     'threeCol' => true,
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-91.png'),
    ) ;
    @endphp

    @header_t1( $parameters )

    @endheader_t1


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'eMarketing1',
        'enableTitle' => true,
        'titlePrincipal' => '<span class="greenBlueColor">Conoce todo lo que puedes lograr</span> <br class="space"> en marketing con Escala',
        'subTitlePrincipal' => null,
        'overlay' => false,
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_1.png'),
                'title' => '<span class="grayColorTexts5">Implementa fácilmente <br class="space"> embudos de ventas</span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_2.png'),
                'title' => '<span class="grayColorTexts5">Crea poderosas Landing <br class="space"> Pages en minutos</span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_3.png'),
                'title' => '<span class="grayColorTexts5">Genera y administra <br class="space"> campañas de Ads, <br class="space"> sin salir de nuestra plataforma</span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_4.png'),
                'title' => '<span class="grayColorTexts5">Haz campañas de email <br class="space"> marketing efectivas</span>',
                'enableButton' => false,
            ],
        ],
    ];
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'eMarketing2',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="greenBlueColor">¿Qué beneficios tengo</span> con Escala?',
  'subTitlePrincipal' => null,
  'title' => 'Genera tráfico con <span class="greenBlueColor">Ads de Facebook</span>',
  'img' => App::setFilePath('/assets/images/illustrations/others/03_barato.png'),
  'text' => 'Crea, publica y administra tus campañas de anuncios digitales, sin salir <br> de Escala. De la manera más fácil e intuitiva sin tener que contratar a un <br> planner de medios digitales.',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton',
  'textButton' => 'Prueba Escala ya',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'eMarketing3',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => 'Date a conocer y captura <br> la información de tus visitantes <br> <span class="greenBlueColor">con Landing pages vendedoras</span>',
  'img' => App::setFilePath('/assets/images/illustrations/others/03_barato.png'),
  'text' => 'En Escala puedes construir rápidamente páginas optimizadas-landing pages, <br> para capturar la información de contacto de tus visitantes y dar a conocer la <br> oferta de valor de tus productos o servicios. Hay cientos de plantillas <br> prediseñadas, listas para que las personalices y la pongas online.',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton',
  'textButton' => 'Prueba Escala ya',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1
@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'eMarketing4',
  'enableTitle' => false,
  'titlePrincipal' => nul,
  'subTitlePrincipal' => null,
  'title' => 'Mantén comunicación constante <br> con campañas de email marketing',
  'img' => App::setFilePath('/assets/images/illustrations/others/03_barato.png'),
  'text' => 'No dejes que las relaciones con tus leads y clientes se <br> enfríen, diseña y envía poderosas campañas de email <br> marketing que no llegarán a la bandeja de spam.',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton',
  'textButton' => 'Prueba Escala ya',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1
@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'eMarketing5',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => '<span class="greenBlueColor">Mide y optimiza mediante</span> <br> las métricas que importan',
  'img' => App::setFilePath('/assets/images/illustrations/others/03_barato.png'),
  'text' => 'Ten las analíticas necesarias en tiempo real, a través de tableros de <br> control amigables. Optimiza la implementación de tus embudos de venta, <br> enfocándote en lo que debes mejorar.',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton',
  'textButton' => 'Prueba Escala ya',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1
@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'eMarketing6',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => 'Automatiza y ve <br> crecer tu negocio',
  'img' => App::setFilePath('/assets/images/illustrations/others/03_barato.png'),
  'text' => 'Programa tus campañas de email y automatiza las <br> respuestas con un solo clic. Deja de hacer tareas repetitivas <br> y pon toda tu energía en hacer crecer tu negocio. En Escala <br> automatizamos todo lo automatizable.',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton',
  'textButton' => 'Prueba Escala ya',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



  </div>

</div>



@endsection

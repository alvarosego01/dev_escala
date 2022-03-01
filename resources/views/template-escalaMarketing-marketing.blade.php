
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
     'title' => '<span class="whiteColor">Genera más <br class="space"> demanda con <br class="space"> Marketing Digital</span>',
     'text' => '<span class="whiteColor">Desarrolla potentes campañas sin <br class="space"> depender de equipos de <br class="space"> programación o integración</span>',
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
    $parameters = array(
        'type' => 'backgroundColor',
        'classSection' => 'eMarketing1',
        'enableTitle' => true,
        'titlePrincipal' => '<span class="greenBlueColor">La plataforma todo-en-uno de Marketing y Ventas</span> <br class="space"> que potencia tu crecimiento',
        'subTitlePrincipal' => null,
        'overlay' => false,
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-2a.png'),
                'title' => '<span class="grayColorTexts5">Genera más leads o una <br class="space"> base de datos de nuevos <br class="space"> clientes potenciales</span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-2b1.png'),
                'title' => '<span class="grayColorTexts5">Mejora tu presencia online con <br class="space"> hermosas Landing Pages que <br class="space"> no necesitas programar</span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-2c1.png'),
                'title' => '<span class="grayColorTexts5">Promueve tus productos y <br class="space"> servicios en medios digitales con <br class="space"> anuncios que creas y gestionas <br class="space"> desde la misma plataforma</span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-2d1.png'),
                'title' => '<span class="grayColorTexts5">Nutre la relación con tus <br class="space"> contactos y comunícate más <br class="space"> efectivamente con poderosas <br class="space"> campañas de Email Marketing</span>',
                'enableButton' => false,
            ],
        ],
    )
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'eMarketing2',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="greenBlueColor">Descubre cómo optimizar</span> <br class="space"> tu Marketing Digital con Escala',
  'subTitlePrincipal' => null,
  'title' => 'Llega a más clientes potenciales <br class="space"> con <span class="greenBlueColor">Ads de Facebook</span>',
  'img' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-101.png'),
  'text' => 'Crea, publica y gestiona tus campañas de anuncios digitales, <br> sin salir de Escala. De la manera más fácil e intuitiva, ten <br> visibilidad sobrer el retorno de inversión con analíticas <br> relevantes que se integran a tus esfuerzos de venta.',
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
  'title' => 'Motiva a tu audiencia ideal a <br class="space"> compartirte su información <br class="space"> de contacto con <span class="greenBlueColor">Landing <br class="space"> pages efectivas</span>',
  'img' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-41.png'),
  'text' => 'En Escala puedes construir rápidamente páginas optimizadas <br> para comunicar tu propuesta de valor y capturar la información <br> de contacto de tus visitantes. Hay cientos de plantillas <br> prediseñadas, listas para que las personalices y publiques sin <br> necesitar programación.',
  'enableButton' => false,
  // 'urlButton' => null,
  // 'typeButton' => null,
  // 'textButton' => null,
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
  'title' => '<span class="whiteColor">Mantén comunicación constante <br class="space"> con campañas</span> <span class="blueLightColor8">de email marketing</span>',
  'img' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-111.png'),
  'text' => '<span class="whiteColor">Segmenta tu base de datos y envía mensajes relevantes en <br> el momento oportuno para potenciar tu crecimiento. Es fácil <br> y rápido. Diseña hermosos emails personalizando plantillas <br> y envíalos masivamente con solo un clic.</span>',
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
  'classSection' => 'eMarketing5',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => 'Deja de hacer tareas <br class="space"> repetitivas. <span class="greenBlueColor">Automatiza y <br class="space"> aumenta tu productividad</span>',
  'img' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-131.png'),
  'text' => 'Programa el envío de emails y rercordatorios para que no <br> pierdas oportundiades de venta.  Automatiza tareas como <br> la asignación de leads a vendedores, el cambio de status en <br> el CRM y la segmentación de tu base de datos para que <br> ahorres tiempo y energía al escalar tu negocio.',
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
  'title' => '<span class="greenBlueColor">Mide y optimiza tus resultados</span> <br class="space"> con analíticas relevantes',
  'img' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-121.png'),
  'text' => 'Ten visibilidad sobre las métricas que realmente importan para <br> entender qué funciona y qué puedes mejorar para optimizar tu <br> marketing digital. Cuenta con tableros amigables que miden el <br> rendimiento de ads, landing pages y campañas de emails.
',
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
  'classSection' => 'eMarketing7',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => '<span class="whiteColor">Te orientamos a escalar con éxito</span>',
  'img' => App::setFilePath('/assets/images/illustrations/others/escalamarketing_nuevasilust-15b.png'),
  'text' => '<span class="whiteColor">Nuestro equipo te brinda las herramientas y recursos que <br> necesitas para conseguir resultados con Escala según <br> tus objetivos, experiencia y necesidades.</span>
',
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
  'classSection' => 'eMarketing8',
  'backgroundImageFile' => null,
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/person/chica_landing1.png'),
  'title' => null,
  'text' => '“Escala tiene el email builder más amigable que he <br> utilizado en los últimos años, y su equipo está <br> comprometido a mantener la plataforma en constante <br> actualización en el dinámico mundo digital.”',
  'imageTop' => App::setFilePath('/assets/images/illustrations/others/Frame.png'),
  'client' => '<strong>Verónica Bolaños</strong><br>Publicidad Comercial /Account Manager',
  'clientLogo' => App::setFilePath('/assets/images/illustrations/others/Publicidad-Comercial21.png'),
  'enableButton' => false,

  'side' => 'right',

 ) ;
@endphp

@contain_testimonial_T1( $parameters )

@endcontain_testimonial_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'eMarketing9',
  // 'backgroundImageFile' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder15.png',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/person/viejo-puf-emails1.png'),
  'title' => '¿Listo para acelerar el crecimiento <br> de tu negocio? <span class="greenBlueColor">Descubre cuán simple <br> es implementar tus estrategias <br> de Marketing Digital con Escala</span>',
  'text' => null,
  'enableButton' => true,
  'typeButton' => 'primaryButton',
    'urlButton' => '#lead-form',
  'textButton' => 'Prueba Escala ya',
  'side' => 'left',
  'overlay' => false,
  'overlayImage' => null,

 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1




  </div>

</div>



@endsection

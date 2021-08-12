
{{--
  Template Name: [B] Func - Analiticas
--}}

<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap" type="text/css" media="all">



@extends('layouts.app')

@section('content')


<div id="func-analitics-bootstrap">

  <div class="sections">


    @php
 $parameters = array(
  'backgroundImageType' => true,
  'overlay' => true,
  'classSection' => 'func funcAnaliticas0',
  'title' => '<span class="greenBlueColor">¡Medir, medir,</span> medir!',
  'text' => 'Lo que no se mide, no mejora. Escala lo hace <br> más sencillo con dashboards amigables',
  'textForm' => 'Empieza a probar Escala',
  'backgroundImage' => App::setFilePath('/assets/images/backgrounds/degradeBlue1.png'),
  'overlayImage' => App::setFilePath('/assets/images/overlays/estrellas 2.png'),
  'image' => App::setFilePath('/assets/images/illustrations/others/banner_01.png'),
  'threeCol' => false,
 ) ;
@endphp

@header_t1( $parameters )

@endheader_t1


@php
$parameters = array(
 'classSection' => 'funcAnaliticas1 func',
 'description' => '“Admito que estoy obsesionado con ver diariamente las <br>  métricas de las empresas en las que estoy involucrado. Ver <br> reportes en tiempo real ayuda al equipo a tomar decisiones <br> inteligentes y oportunas para conseguir mejores resultados.”',
 'byAm' => '<span class="greenBlueColor">Andrés Moreno</span>',
 'team' => 'Fundador de <span class="greenBlueColor">Escala</span> y Open English',
 'image' => App::setFilePath('/assets/images/person/am/andres_emailmk%201.png'),
) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1




@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnaliticas2',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="greenBlueColor">Analíticas</span> en tiempo real <br> para escalar tu negocio',
  'subTitlePrincipal' => '¿Mis embudo están funcionando? <br> <strong>Los números dicen la verdad</strong>',
  'img' => App::setFilePath('/assets/images/illustrations/otto/banner_02.png'),
  'title' => 'Prioriza <span class="greenBlueColor">tu día de ventas</span>',
  'text' => '¿Quiénes de mis visitantes se convierten en contactos? ¿Quienes de mis <br> contactos se convierten en clientes? <br class="space">
¿En qué parte del embudo los visitantes tienen mayor interacción?
<br class="space"><br class="space">
Visualiza dónde tus embudos de venta son altamente efectivos y dónde <br>  necesitan algo de trabajo. Todo lo que deseas saber está en un solo lugar: <br> el dashboard inteligente de Escala.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Muéstrame las métricas',
  // 'typeButton' => 'primaryButton',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnaliticas3',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/analitica_elementos.png'),
  'title' => '<space class="greenBlueColor">¡Esos anuncios digitales</space> <br> fueron los mejores! ... ¿Cierto?',
  'text' => '¿Qué campaña de anuncios digitales está generando mejores resultados? <br> ¿Cuál atrajo más visitantes a tu página? ¿Cuántos hicieron click en tus <br> anuncios digitales? ¿De dónde vienen tus visitantes?
<br class="space"><br class="space">
<strong>
  Ten las métricas que necesitarás para hacer <br class="space">
  tu inversión en marketing más eficiente.
</strong>',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Medir mis resultados ahora',
  'typeButton' => 'primaryButton',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnaliticas4',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/banner_04.png'),
  'title' => '<span class="greenBlueColor">¿Mis páginas podrían</span> <br> obtener mejores resultados?  ¡Sí!',
  'text' => 'Escala te enseña claramente métricas como: cuántos visitantes han visto <br> tus páginas, qué contenido ha causado mayor interés, cuánto tiempo <br> invirtieron revisando tu oferta, qué productos se han vendido más...
<br class="space"><br class="space">
Mientras más sabes ¡mayor capacidad tendrás de optimizar resultados!',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Mejorar mis páginas',
  // 'typeButton' => 'primaryButton',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnaliticas5',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/otto/banner_05.png'),
  'title' => '"Esa campaña de emails fue exitosa..." <br> ¡Compruébalo!',
  'text' => 'Las métricas de Escala te permiten verlo todo. Conoce el <br>  rendimiento de tus campañas de emails, descubre cuántas <br> personas lo han abireto, qué titulos han funcionado mejor y en <br> qué parte del email hicieron más click.
<br class="space"><br class="space">
Utiliza esta información valiosa para construir tu próxima <br> campaña de email y conseguir mejores resultados.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Conseguir mejores resultados',
  // 'typeButton' => 'primaryButton',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnaliticas6',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/banner_06.png'),
  'title' => 'Aumenta la productividad <br> <span class="greenBlueColor">de tu gerente de ventas</span>',
  'text' => 'Las analíticas son parte esencial de una buena estrategia de ventas.
<br class="space"><br class="space">
Con las métricas de Escala, tu gerente de ventas tendrá la visibilidad que <br> necesita sobre el rendimiento de cada uno de los miembros de su equipo. <br> No más adivinanzas, toma acciones basadas en informaicón objetiva y <br> aumenta la probabbilidad de cumplir tus metas de venta.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Conseguir mejores resultados',
  // 'typeButton' => 'primaryButton',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcAnaliticas7',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/otto/banner_07.png'),
  'title' => '<span class="greenBlueColor">De 0 a 100</span> ¿Cuán saludable está tu negocio en general?',
  'text' => 'Como dueño de empresa obtén reportes amigables que te permitan <br> diagnosticar la salud de tu negocio. Responde preguntas como: <br>
¿Cuánto han aumentado tus ventas en comparación el trimestre pasado? <br> ¿Qué embudo ha traido el mayor retorno de inversión? <br>
¿Qué producto ha contribuido más al crecimiento de la emrpesa?
<br class="space"><br class="space">
Logra que Escala se convierta en uno de tus mejores aliados estratégicos.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Conseguir mejores resultados',
  // 'typeButton' => 'primaryButton',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
$parameters = array(
'type' => 'backgroundColor',
'classSection' => 'funcAnaliticas8',
'backgroundImageFile' => null,
'enableTitle' => false,
'img' => App::setFilePath('/assets/images/person/mujer-laptop_02.png'),
'title' => 'Toma decisiones <br> acertadas con métricas <br> relevantes',
'text' => null,
'enableButton' => true,
'typeButton' => 'primaryButton',
'urlButton' => '#lead-form',
'textButton' => 'Probar las analíticas ahora',
'side' => 'right',
'overlay' => false,
'overlayImage' => null,

) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1




  </div>

</div>




@endsection
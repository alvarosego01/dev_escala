
{{--
  Template Name: [B] Func - Page builder
--}}

<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap" type="text/css" media="all">



@extends('layouts.app')

@section('content')


<div id="func-PageBuilder-bootstrap">

  <div class="sections">


    @php
 $parameters = array(
  'backgroundImageType' => true,
  'overlay' => true,
  'classSection' => 'func funcPageBuilder0',
  'title' => 'Crea potentes páginas.<br> <span class="greenBlueColor">Es tan fácil como copiar y pegar</span>',
  'text' => 'En escala puedes construir rápidamente landing pages = «websites <br> optimizados» para capturar la información de contacto de tus visitantes, <br> sin necesidad de programar o integrar.',
  'textForm' => 'Empieza a probar escala
  <br style="display: block!important">
  <span style="text-align: center; width: 100%; font-weight: 500" class="colorDarkGrey2">Sin tarjeta requerida</span>',
  'backgroundImage' => App::setFilePath('/assets/images/backgrounds/degradeBlue1.png'),
  'overlayImage' => App::setFilePath('/assets/images/overlays/estrellas 2.png'),
  'image' => App::setFilePath('/assets/images/illustrations/team/pagebuilder_01.png'),
  'threeCol' => false,
 ) ;
@endphp

@header_t1( $parameters )

@endheader_t1



@php
 $parameters = array(
  'classSection' => 'funcPageBuilder1 func',
  'description' => '<strong class="greenBlueColor">"«En las landing pages de Open English generamos más de 1 millón <br> de contactos al año</strong>. Así acumulamos aprendizajes para optimizar <br> nuestras páginas y potenciar nuestras ventas. Basados en una década <br> de experiencia, creamos el Page Builder más robusto del mercado”.',
  'byAm' => '<span class="greenBlueColor">Andrés Moreno</span>',
  'team' => 'Fundador de <span class="greenBlueColor">escala</span> y Open English',
  'image' => App::setFilePath('/assets/images/person/am/andres-1.png')
 ) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder2',
  // 'backgroundImageFile' => ,
  'enableTitle' => false,
  'title' => '<span class="greenBlueColor">Haz que tus páginas sean</span> <br> tu motor de ventas',
  'img' => App::setFilePath('/assets/images/illustrations/team/plantillas.png'),
  'text' => 'Nuestros programadores expertos y diseñadores talentosos <br> ya hicieron la tarea por ti.
<br class="space"><br class="space">
Escoge una de nuestras hermosas plantillas, adáptalas <br> y comienza a generar contactos.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Ver las plantillas',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder3',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/play.png'),
  'title' => '<span class="greenBlueColor">Dale tu toque personal</span><br> con facilidad',
  'text' => '<strong class="greenBlueColor">¿Has jugado Tetris?</strong> <br>
Combina tus bloques de contenido para crear tu landing page ideal.
<br class="space"><br class="space">
Arrastra y suelta las secciones pre-diseñadas, ajusta sus tamaños, <br> agrega formularios, cambia tipografías, elige las imágenes, incluye tu <br> logo y escoge tus colores.
<br class="space"><br class="space">
<strong class="greenBlueColor">¡Nosotros ponemos la estructura, tú pones el arte!</strong>',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => '¡Empieza el juego!',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1
@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder4',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/wasap.png'),
  'title' => '<span class="blueLightColor3">Nuestras Landing Pages</span> <br> tienen botón de WhatsApp',
  'text' => 'Conversa con tus potenciales clientes más directamente a <br> través del botón de WhatsApp de nuestras Landing Pages <br>
En escala podrás activar fácilmente este botón y te llegará <br>
un correo electrónico de los visitantes que dejen su data.',
  'enableButton' => true,
  'typeButton' => 'primaryButton',
  'urlButton' => '#lead-form',
  'textButton' => 'Comenzar ahora',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder5',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/otto/arte.png'),
  'title' => '<span class="greenBlueColor">¿Quieres comenzar de cero?</span> <br> ¡No hay problema!',
  'text' => 'Deja salir a tu diseñador interior usando una plantilla en blanco. <br>
Construye tus propias landing pages y secciones <br>
con total libertad creativa.',
  'enableButton' => false,
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1
@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder6',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/responsive_email 1.png'),
  'title' => '<span class="greenBlueColor">Ningún dispositivo se resiste.</span> <br> Las páginas son responsive.',
  'text' => 'No importa si es una laptop, tableta o un celular, el diseño de tus <br> páginas será 100% adaptativo para que se vean bien en todas partes.
<br class="space"><br class="space">
Antes de publicar, podrás revisar fácilmente cada versión para <br> previsualizar cómo tus visitantes verán la página en cada dispositivo.',
  'enableButton' => false,
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder7',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/segura-1.png'),
  'title' => '<span class="greenBlueColor">¡Toc, Toc, Toc!</span> <br> ¿Es una página segura <br> para entrar?',
  'text' => '¡Sí! Todos entren con tranquilidad. En escala, cada landing page <br> que creas tiene su propio certificado de seguridad para que tus <br> visitantes tengan la confianza de navegarla libremente.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => 'Conectar mi dominio',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder8',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/dominio.png'),
  'title' => '<span class="greenBlueColor">¿No tienes dominio?</span> <br> ¡Tranquilo! Te damos uno',
  'text' => 'Si aún no tienes dominio propio o prefieres generar uno diferente para <br> tus distintas landing pages, ¡escala te genera uno propio en segundos!
<br class="space"><br class="space">
<strong class="greenBlueColor">¿Ya tienes un dominio propio?</strong> <br class="space">
Conéctalo a escala rápidamente con un click. Si lo deseas, se conectará <br> también con tu CRM y campañas digitales.',
  'enableButton' => true,
  'typeButton' => 'primaryButton',
    'urlButton' => '#lead-form',
  'textButton' => 'Pruébalo ahora',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder9',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/google-fb.png'),
  'title' => '<span class="greenBlueColor">El poder de nosotros:</span> <br> escala y Facebook',
  'text' => 'escala está integrada con Facebook Pixels y Google Analytics para <br> que tengas información detallada sobre los visitantes de tu landing <br> page. ¡Mientras más integrada estén tus campañas con Facebook y <br> Google, mejores serán tus resultados!',
  'enableButton' => false,
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



{{--
  @var $type - define type of container (backgroundImage || backgroundColor) | string
@var $classSection - class context | string
@var $backgroundImageFile - image file url background | string
@var $enableTitle -  enable title | boolean
@var $titlePrincipal - text title | html
@var $subTitlePrincipal - define sub title | html

@var $elements - array of elements | array(

    @var $img - image url | string
    @var $text - define info text | html
    @var $enableButton -  enable button | boolean
    @var $urlButton -  url of button | string
    @var $textButton -  define text of button | string
  --}}
@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder10',
  'enableTitle' => true,
  'titlePrincipal' => '<span class="greenBlueColor">Dile hola a los formularios inteligentes.</span> <br> ¡Adiós a los plug-ins!',
  'subTitlePrincipal' => 'Olvídate de las integraciones complicadas y las interminables hojas de excel <br>
para guardar las información de tus contactos.',
  'overlay' => true,
  'overlayImage' => App::setFilePath('/assets/images/overlays/pagebuilder-planets.svg'),
  'elements' => array(
    [
      'img' => App::setFilePath('/assets/images/illustrations/team/CRM-1.png'),
      'title' => '<span class="greenBlueColor">Del formulario en tu página</span> <br> directo al CRM',
      'text' => 'escala está integrada con Facebook Pixels y Google Analytics para que tengas información detallada sobre los visitantes de tu landing page. ¡Mientras más integrada estén tus campañas con Facebook y Google, mejores serán tus resultados!
      <div></div>
      <span class="greenBlueColor" style="text-align: center; font-size: 25px; font-weight: 600!important">¡Asombroso!</span>',
      'enableButton' => false,
      // 'urlButton' => '#lead-form',
      // 'textButton' => '¡Asombroso! Adiós integraciones',
    ],
    [
      'img' => App::setFilePath('/assets/images/illustrations/others/CRM-2.png'),
      'title' => '<span class="greenBlueColor">Ahora sabrás si tu contacto está </span><br> en Colombia, EEUU o España',
      'text' => 'Si vendes en diferentes países, puedes incluir un formulario inteligente en <br> las páginas que construyes con <span class="greenBlueColor">escala</span>. El mismo tomará automáticamente <br> el prefijo internacional de tus visitantes para que ¡evites recibir números <br> equivocados!
      <div></div>
      <span class="greenBlueColor" style="text-align: center; font-size: 25px; font-weight: 600!important">¡Finalmente!</span>
      ',
      'enableButton' => false,
      // 'urlButton' => '#lead-form',
      // 'textButton' => '¡Finalmente! Basta de adivinar',

    ]
  )
 ) ;
@endphp



@contain_multiple_cards_T1( $parameters )

@endcontain_multiple_cards_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder11',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/paginas-rapidas.png'),
  'title' => '<span class="greenBlueColor">¡Las páginas más </span> <br>
  veloces del mercado!',
  'text' => 'Si tu landing page demora más de unos segundos <br> en cargar puede frustrar a miles de tus visitantes.
  <br class="space"><br class="space">
Visitantes frustrados = menos ventas.
<br class="space"><br class="space">
escala utiliza tecnología avanzada para asegurar <br> que tus paginas carguen a la velocidad de la luz.
<br class="space"><br class="space">
<span class="greenBlueColor" style="text-align: center; font-size: 25px; font-weight: 600!important">El tiempo es dinero</span>
',
'enableButton' => true,
  'typeButton' => 'primaryButton',
    'urlButton' => '#lead-form',
  'textButton' => 'Comenzar ahora',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder12',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/numeros.png'),
  'title' => '<span class="greenBlueColor">¡Aquí están los números!</span> <br>
Analiza y optimiza tus páginas <br>
Monitorea el comportamiento',
  'text' => '¿Cuántos visitantes llegan a tu landing page y cuántos de ellos se <br> convierten en tus clientes? Los reportes de escala responden esta <br> pregunta y más: cuánto tiempo estuvieron navegando en tu página, <br> en dónde hacen click y en qué parte se salieron…
  <br class="space"><br class="space">
¡Rastrear el comportamiento de tus visitantes te permite cambiar <br> de estrategia y lograr mejores resultados!',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => '¡Ve rápido y furioso!',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



{{-- resources/assets/images/banners/banner-blue-planets2.png --}}
@php
 $parameters = array(
  'type' => 'backgroundImage',
  'classSection' => 'funcPageBuilder13',
  'backgroundImageFile' => App::setFilePath('/assets/images/banners/banner-blue-planets2.png'),
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/banners/banner-hombre_hombre.png'),
  'title' => '<span class="whiteColor">Síííí! Mi landing page</span> <br> está funcionando... <br> ¿Verdad?',
  'text' => '¿Cuál es el desempeño de tu landing page en función de tus <br> objetivos de marketing? ¿Estás obteniendo un buen retorno <br> de tu inversión?
  <br class="space"><br class="space">
Descúbrelo en tiempo real utilizando nuestras herramientas <br> de analíticas intuitivas.',
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
  'classSection' => 'funcPageBuilder14',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/coversion.png'),
  'title' => '<span class="greenBlueColor">¿Qué dispositivo tiene</span> <br> mayor conversión?',
  'text' => '¿Tus visitantes usan sus tablets, laptops o celulares <br> para navegar en tu landing page? Con escala puedes <br> ver analíticas detalladas que te dirán cuál dispositivo <br> tiene mayor probabilidad de acercarte a la venta.',
  'enableButton' => false,
  // 'urlButton' => '#lead-form',
  // 'textButton' => '¡Ve rápido y furioso!',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcPageBuilder15',
  // 'backgroundImageFile' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder15.png',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/team/pulpo.png'),
  'title' => '<span class="blueLightColor3">Empieza a construir</span> páginas <br> optimizadas para ventas',
  'text' => null,
  'enableButton' => true,
  'typeButton' => 'primaryButton',
    'urlButton' => '#lead-form',
  'textButton' => 'Probar ahora',
  'side' => 'right',
  'overlay' => true,
  'overlayImage' => App::setFilePath('/assets/images/overlays/planets2.svg'),

 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


{{-- @hasfield('form7')

@field('form7')


@endfield

 --}}

  </div>


</div>



@endsection
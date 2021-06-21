
{{--
  Template Name: [B] Func - Email
--}}


@extends('layouts.app')

@section('content')


<div id="func-email-bootstrap">

  <div class="sections">


    @php
 $parameters = array(
  'backgroundImageType' => false,
  'overlay' => false,
  'classSection' => 'threeCol funcEmail0',
  'title' => '<span class="orangeColor">Comunícate constantemente,</span> ¡no dejes que tus relaciones se enfríen!',
  'text' => 'Diseña y envía campañas de emails atractivas con <span class="orangeColor">escala.</span>',
  'image' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-email-builder-correo-electronico-comunicacion-enviar-768x900.png',
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
  'classSection' => 'funcEmail1 floated',
  'description' => '“En mi experiencia, la venta se logra luego de varios contactos personalizados. La gestión inteligente de campañas de emails es una estrategia fundamental para mantenerse en contacto, y quizás el método de menor costo de todos”.',
  'byAm' => '<span class="orangeColor">Andrés Moreno</span>',
  'team' => 'Fundador de <span class="orangeColor">escala</span> y Open English',
  'image' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-Andre%CC%81s-Moreno-founder-Ceo-Open-English-2.png'
 ) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail2',
  // 'backgroundImageFile' => ,
  'enableTitle' => true,
  'titlePrincipal' => 'Haz que tus páginas sean tu <span class="orangeColor">motor de ventas</span>',
  'subTitlePrincipal' => 'El Page Builder de <span class="orangeColor">escala</span> te permite diseñar hermosos landing pages sin necesitar largas <br> horas de un equipo de tecnología',
  'title' => '¡Ahhhh! Bienvenido al <br> paraíso de las <span class="orangeColor">plantillas</span>',
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-creacion-pagina-plantilla-personalizada-e1593191622994-768x515.png',
  'text' => 'Nuestros programadores expertos y diseñadores <br> talentosos ya hicieron la tarea por ti. <br>
<strong>¡Lo único difícil será elegir!</strong>
<br class="space"><br class="space">
Escoge una de nuestras hermosas plantillas, adáptalas y <br> comienza a generar contactos.',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Ver las plantillas',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail3',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-creacion-pagina-plantilla-768x935.png',
  'title' => 'Dale tu <span class="orangeColor">toque personal</span> con facilidad',
  'text' => '¿Has jugado Tetris? Combina tus bloques de contenido <br>para crear tu landing page ideal.
<br class="space"><br class="space">
Arrastra y suelta las secciones pre-diseñadas, ajusta sus <br> tamaños, agrega formularios, cambia tipografías, elige las <br> imágenes, incluye tu logo y escoge tus colores.
<br class="space"><br class="space">
<strong>¡Nosotros ponemos la estructura, tú pones el arte!</strong>',
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
  'classSection' => 'funcEmail4',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-creacion-pagina-desde-cero-e1593191704246-768x513.png',
  'title' => '¿Quieres <span class="orangeColor">comenzar de cero?</span> <br>
¡No hay problema!',
  'text' => 'Deja salir a tu diseñador interior usando una plantilla en <br> blanco. Construye tus propias landing pages y <br> secciones con total libertad creativa.',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Comenzar desde cero',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail5',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-dispositivo-device-responsive-768x529.png',
  'title' => 'Ningún dispositivo se resiste.<br> Las páginas son <span class="orangeColor">responsive</span>',
  'text' => 'No importa si es una laptop, tableta o un celular, el <br> diseño de tus páginas será 100% adaptativo para que <br> se vean bien en todas partes.
<br class="space"><br class="space">
<strong>Antes de publicar, podrás revisar fácilmente cada <br> versión para previsualizar cómo tus visitantes verán la <br> página en cada dispositivo.</strong>',
  'enableButton' => false,
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1
@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail6',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-creacion-pagina-segura-768x781.png',
  'title' => '¡Toc, Toc, Toc! <br>
¿Es una página <span class="orangeColor">segura</span> para entrar?',
  'text' => '¡Sí! Todos entren con tranquilidad. En <span class="orangeColor">escala</span>, cada <br> landing page que creas tiene su propio certificado de <br> seguridad para que tus visitantes tengan la confianza <br> de navegarla libremente.',
  'enableButton' => false,
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail7',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-creacion-paginas-dominio-publicar-1-1-768x436.png',
  'title' => '¿No tienes <span class="orangeColor">dominio?</span> <br>
¡Tranquilo! Te damos uno',
  'text' => 'Si aún no tienes dominio propio o prefieres generar uno <br> diferente para tus distintas landing pages, <span class="orangeColor">¡escala</span> te <br> genera uno propio en segundos!
<br class="space"><br class="space">
<strong>¿Ya tienes un dominio propio?</strong> <br>
Conéctalo a <span class="orangeColor">escala</span> rápidamente con un click. Si lo deseas, <br> se conectará también con tu CRM y campañas digitales.',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Conectar mi dominio',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail8',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-genera-trafico-pagina-instagram-google-facebook-768x557.png',
  'title' => '<span class="orangeColor">El poder de NOSOTROS:</span><br>
  <span class="orangeColor">escala</span>, Google y Facebook',
  'text' => '<span class="orangeColor">escala</span> está integrada con Facebook Pixels y Google <br> Analytics para que tengas información detallada sobre <br> los visitantes de tu landing page. ¡Mientras más <br> integrada estén tus campañas con Facebook y Google,<br> mejores serán tus resultados!',
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
  'classSection' => 'funcEmail9',
  'enableTitle' => true,
  'titlePrincipal' => 'Dile hola a los <span class="orangeColor">formularios inteligentes.</span> <br>
¡Adiós a los plug-ins!',
  'subTitlePrincipal' => 'Olvídate de las integraciones complicadas y las interminables hojas de excel para guardar <br> las información de tus contactos.',
  'elements' => array(
    [
      'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-creacion-pagina-formulario-300x280.png',
      'title' => 'Del formulario en tu página <br> directo al CRM',
      'text' => 'Cuando tus visitantes se registren en tu landing <br> page, toda esa información quedará guardada <br> automáticamente en tu CRM de <span class="orangeColor">escala</span>. No más <br> hojas de excel o integraciones complicadas <br> ¡Recibe y maneja tu base de datos desde un <br> mismo lugar!',
      'enableButton' => true,
      'urlButton' => '#lead-form',
      'textButton' => '¡Asombroso! Adiós integraciones',
    ],
    [
      'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-creacion-pagina-formulario-internacional.png',
      'title' => 'Ahora sabrás si tu contacto está <br> en Colombia, EEUU o España',
      'text' => 'Si vendes en diferentes países, puedes incluir un formulario inteligente en <br> las páginas que construyes con <span class="orangeColor">escala</span>. El mismo tomará automáticamente <br> el prefijo internacional de tus visitantes para que ¡evites recibir números <br> equivocados!',
      'enableButton' => true,
      'urlButton' => '#lead-form',
      'textButton' => '¡Finalmente! Basta de adivinar',

    ]
  )
 ) ;
@endphp



@contain_multiple_cards_T1( $parameters )

@endcontain_multiple_cards_T1


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail10',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-creacion-pagina-veloz-landing-page-768x824.png',
  'title' => '¡Las páginas más <br>
  <span class="orangeColor">veloces</span> del mercado!',
  'text' => 'Si tu landing page demora más de unos segundos <br> en cargar puede frustrar a miles de tus visitantes.
  <br class="space"><br class="space">
<strong>Visitantes frustrados = menos ventas.</strong>
<br class="space"><br class="space">
<span class="orangeColor">escala</span> utiliza tecnología avanzada para asegurar <br> que tus paginas carguen a la velocidad de la luz.
<br class="space"><br class="space">
<strong>¡El tiempo es dinero!</strong>',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => '¡Ve rápido y furioso!',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail11',
  // 'backgroundImageFile' => ,
  'enableTitle' => true,
  'titlePrincipal' => '¡Aquí están los número! <br>
  <span class="orangeColor">Analiza</span> y optimiza tus páginas',
  'subTitlePrincipal' => null,
  'title' => '<span class="orangeColor">Monitorea</span> el comportamiento, <br> aprende, mejora',
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-analiza-comportamiento-visitante-landing-e1593191973304-768x436.png',
  'text' => '¿Cuántos visitantes llegan a tu landing page y cuántos de <br> ellos se convierten en tus clientes? Los reportes de <span class="orangeColor">escala</span><br>  responden esta pregunta y más: cuánto tiempo estuvieron <br> navegando en tu página, en dónde hacen click y en qué <br> parte se salieron…
<br class="space"><br class="space">
<strong>¡Rastrear el comportamiento de tus visitantes te permite <br> cambiar de estrategia y lograr mejores resultados!</strong>',
  'enableButton' => false,
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail12',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-creacion-pagina-dominio-publicar-2-e1594828532887.png',
  'title' => '¡Síííí! Mi landing page está <br> <span class="orangeColor">funcionando...</span> ¿Verdad?',
  'text' => '¿Cuál es el desempeño de tu landing page en función de tus objetivos de marketing? ¿Estás obteniendo un buen retorno de tu inversión?
<br class="space"><br class="space">
Descúbrelo en tiempo real utilizando nuestras herramientas de analíticas intuitivas.',
  'enableButton' => false,
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'funcEmail13',
  'enableTitle' => false,
  'img' => 'https://cdn.escala.com/wp-content/uploads/2020/09/escala-page-builder-creacion-pagina-dominio-publicar-3-e1593192119806-768x511.png',
  'title' => '¿Qué dispositivo tiene <br> mayor <span class="orangeColor">conversión?</span>',
  'text' => '¿Tus visitantes usan sus tablets, laptops o celulares para <br> navegar en tu landing page? Con <span class="orangeColor">escala</span> puedes ver analíticas <br> detalladas que te dirán cuál dispositivo tiene mayor <br> probabilidad de acercarte a la venta.
  <br class="space"><br class="space">
  <strong>¡Cuanto más sepas, mejor lo harás!</strong>',
  'enableButton' => false,
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1

@php
 $parameters = array(
  'classSection' => 'funcEmail14',
  'title' => 'Empieza a construir páginas optimizadas para ventas',
  'goToUrl' => '#lead-form',
  'textButton' => '¡Pruébalo ahora!',

 ) ;
@endphp

@callToAction_T2( $parameters )

@endcallToAction_T2



  </div>


</div>
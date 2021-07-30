
{{--
  Template Name: [B] Landing correos masivos
--}}



<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap" type="text/css" media="all">


@extends('layouts.app')

@section('content')


<div id="landingMasiveMailBootstrap">

  <div class="sections">

@php
 $parameters = array(
  'backgroundImageType' => false,
  'classSection' => 'landingMasiveMail0',
  'title' => 'Correos masivos <br> <span class="greenBlueColor">en segundos</span>',
  'text' => null,
  'image' => App::setFilePath('/assets/images/illustrations/otto/ottoMailing.png'),
  'textForm' => '¡Comienza ahora!',
 ) ;
@endphp


@header_t1( $parameters )

@endheader_t1



@php
 $parameters = array(
  'classSection' => 'landingMasiveMail1',
  'title' => '4 pasos para crear exitosas campañas de <span class="orangeColor">email marketing</span>',
  'img1' => App::setFilePath('/assets/images/illustrations/others/count-step-1.png'),
  'title1' => 'Crea tus emails',
  'desc1' => 'Crea emails profesionales con el editor de emails más intuitivo. ¡Hazlo tú mismo!',
  'img2' => App::setFilePath('/assets/images/illustrations/others/count-step-2.png'),
  'title2' => 'Programa tus <br> envíos',
  'desc2' => 'Programa y envía automáticamente emails de bienvenida, mensajes de seguimiento, newsletters y todo lo que quieras comunicar a tus contactos.',
  'img3' => App::setFilePath('/assets/images/illustrations/others/count-step-3.png'),
  'title3' => 'Adiós bandeja de <br> SPAM',
  'desc3' => 'Hemos desarrollado la tecnología que minimiza el riesgo de caer en la bandeja de spam. ¡Logra que tus emails lleguen al lugar correcto!',
  'img4' => App::setFilePath('/assets/images/illustrations/others/count-step-4.png'),
  'title4' => 'Mide y optimiza',
  'desc4' => 'Analiza y optimiza tus emails con reportes en tiempo real que te indicarán cuáles mensajes son más efectivos.',
 ) ;
@endphp

@contain_4steps_loading( $parameters )

@endcontain_4steps_loading


@php
 $parameters = array(
  'type' => 'backColor',
  'classSection' => 'landingMasiveMail2',
  'title' => '¡Comienza a crear tus campañas de <span class="orangeColor">email marketing</span> <br> efectivas ahora!',
  'textButton' => 'Registrarme',
  'goToUrl' => '#lead-form',
 ) ;
@endphp

@callToAction_T1( $parameters )

@endcallToAction_T1





@php
 $parameters = array(
  'classSection' => 'landingMasiveMail3',
  'description' => '<strong>“En mi experiencia, la venta se logra luego de varios contactos personalizados.</strong> La gestión inteligente de campañas de emails es una estrategia fundamental para mantenerse en contacto, y quizás el método de menor costo de todos”.',
  'byAm' => '<span class="orangeColor">Andrés Moreno</span>',
  'team' => 'Fundador de <span class="orangeColor">Escala</span> y Open English',
  'image' => App::setFilePath('/assets/images/person/am/escala-Andrés-Moreno-founder-Ceo-Open-English-2.png')
 ) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1


@php
 $parameters = array(
   'type' => 'regular',
  'classSection' => 'landingMasiveMail4',
  'title' => 'Conoce la plataforma “todo en uno” de ventas y <br> marketing que <span class="orangeColor">acelerará el crecimiento de tu negocio</span>',
  'img1' => App::setFilePath('/assets/images/illustrations/others/conoce-el-mundo-lp-0120.png'),
  'title1' => 'Crea increíbles landing pages <br> en minutos',
  'desc1' => 'Elige una de nuestras plantillas: edítala, personalízala, publícala y ¡listo!. Con <span class="orangeColor">Escala</span> puedes construir landing pages fácil y rápido, sin necesidad de programar',
  'img2' => App::setFilePath('/assets/images/illustrations/others/conoce-el-mundo-lp-0110.png'),
  'title2' => 'Atrae visitantes <br> a tu landig page',
  'desc2' => 'Conecta tu cuenta de Facebook y comienza a generar tráfico a tu landing page. Crea campañas de anuncios digitales directamente desde <span class="orangeColor">Escala</span>.',
  'img3' => App::setFilePath('/assets/images/illustrations/others/conoce-el-mundo-lp-0111.png'),
  'title3' => 'Simplifica tu <br> gestión de ventas',
  'desc3' => 'Empodera a tu equipo de ventas con el CRM más amigable y fácil de usar. Incrementa la productividad planificando actividades y mantén comunicación constante con tus leads.',
  'img4' => App::setFilePath('/assets/images/illustrations/others/conoce-el-mundo-lp-0113.png'),
  'title4' => 'Activa el <br> piloto automático',
  'desc4' => 'Ahorra tiempo automatizando tareas repetitivas con <span class="orangeColor">Escala</span> para lograr tus metas de ventas. Programa recordatorios y configura emails de respuestas automáticas.',
  'img5' => App::setFilePath('/assets/images/illustrations/others/conoce-el-mundo-lp-0114.png'),
  'title5' => 'Las analíticas que necesitas <br> para optimizar',
  'desc5' => 'Lo que no se mide, no mejora. <span class="orangeColor">Escala</span> te da las analíticas necesarias en dashboards amigables para que optimices tus esfuerzos de venta y marketing. La salud de tu negocio en un solo vistazo.',
 ) ;
@endphp

@contain_aio5( $parameters )

@endcontain_aio5



@php
 $parameters = array(
  'classSection' => 'landingMasiveMail5',
  'title' => '
  <span class="greenBlueColor">¿Estás listo para hacer <br> envíos</span> masivos de emails?',
  'text' => null,
  'image' => App::setFilePath('/assets/images/illustrations/otto/otto_crm_01-1.png'),
  'textForm' => '¡Comienza ahora!'
 ) ;
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



  </div>

</div>





@endsection
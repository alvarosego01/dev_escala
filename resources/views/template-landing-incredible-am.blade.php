
{{--
  Template Name: [B] Landing pages increibles AM
--}}



@extends('layouts.app')

@section('content')


<div id="landingIncAmBootstrap">

  <div class="sections">

@php
 $parameters = array(
  'backgroundImageType' => true,
  'overlay' => true,
  'classSection' => 'landingPageIncTrial2_Am0',
  'title' => '<span class="greenBlueColor">Crea landing pages</span><br>increíbles',
  'text' => null,
  'image' => 'https://escala.com/wp-content/uploads/2021/04/banner-hero_montaje-02-1.png',
  'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
  'backgroundImage' => App::setTypeUrl().'/wp-content/uploads/2021/04/Rectangle-1037-1.png',
  'overlayImage' => App::setTypeUrl().'/wp-content/uploads/2021/04/Group-1820.svg',
 ) ;
@endphp

@header_t1( $parameters )

@endheader_t1



@php
 $parameters = array(
  'classSection' => 'landingPageIncTrial2_Am1',
  'title' => '4 fáciles pasos para construir <span class="greenBlueColor">landing pages en minutos</span>',
  'img1' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0116.png',
  'title1' => '<span class="greenBlueColor">Elige tu plantilla</span>',
  'desc1' => 'Elige entre cientos de plantillas pre-diseñadas 100% responsive. Sin necesidad de programar.',
  'img2' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0117.png',
  'title2' => '<span class="greenBlueColor">Personaliza</span>',
  'desc2' => 'Dale tu toque personal y edita fácilmente imágenes, textos, colores, tipografías, etc.',
  'img3' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0118.png',
  'title3' => '<span class="greenBlueColor">Publica</span>',
  'desc3' => 'Con un solo clic publica tu landing page y comienza a recibir visitas de tus clientes.',
  'img4' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0119.png',
  'title4' => '<span class="greenBlueColor">Optimiza</span>',
  'desc4' => 'Analiza y optimiza tus landing pages a través de dashboards sencillos para obtener increíbles resultados.',
 ) ;
@endphp

@contain_4steps_loading( $parameters )

@endcontain_4steps_loading


@php
 $parameters = array(
  'type' => 'backgroundImage&overlay',
  'overlay2' => null,
  'backgroundImage' => App::setTypeUrl().'/wp-content/uploads/2021/04/Group-1815.png',
  'overlay' => App::setTypeUrl().'/wp-content/uploads/2021/04/Group-1821.svg',
  'classSection' => 'landingPageIncTrial2_Am2',
  'title' => '¡Comienza a crear tu landing page ahora!',
  'textButton' => '¡Recibe un demo!',
  'goToUrl' => '#lead-form',
 ) ;
@endphp

@callToAction_T1( $parameters )

@endcallToAction_T1



@php
 $parameters = array(
   'type' => 'backgroundImage',
   'backgroundImageFile' => 'https://cdn.escala.com/wp-content/uploads/2021/04/sdfssdf.png',
  'classSection' => 'landingPageIncTrial2_Am3',
  'title' => 'Conoce la plataforma “todo en uno” de ventas y marketing que acelerará <span class="greenBlueColor">el crecimiento de tu negocio</span>',
  'img1' => 'https://cdn.escala.com/wp-content/uploads/2021/04/icono_04.svg',
  'title1' => 'Multiplica tus visitas web <br> con anuncios digitales',
  'desc1' => 'Conecta tu cuenta de Facebook y <br> comienza a generar tráfico a tu landing <br> page. Crea campañas de anuncios <br> digitales directamente desde <span class="orangeColor">Escala</span>.',
  'img2' => 'https://cdn.escala.com/wp-content/uploads/2021/04/icono_05.svg',
  'title2' => 'Organiza tus contactos y <br> gestiona procesos de venta',
  'desc2' => 'Empodera a tu equipo de ventas con el <br> CRM más amigable y fácil de usar. <br> Incrementa la productividad planificando <br> actividades y manteniendo comunicación <br> constante con tus leads.',
  'img3' => 'https://cdn.escala.com/wp-content/uploads/2021/04/icono_02.svg',
  'title3' => 'Envía emails de <br> marketing profesionales',
  'desc3' => 'Envía fácilmente campañas masivas de <br> emails con una de nuestras plantillas <br> prediseñadas. Con <span class="orangeColor">escala</span> dile adiós a la <br> bandeja de spam.',
  'img4' => 'https://cdn.escala.com/wp-content/uploads/2021/04/icono_03.svg',
  'title4' => 'Automatiza tareas y <br> flujos de comunicación',
  'desc4' => 'Ahorra tiempo automatizando tareas repetitivas <br> con <span class="orangeColor">Escala</span> para lograr tus metas de ventas. <br> Programa recordatorios y configura emails de <br> respuestas automáticas.',
  'img5' => 'https://cdn.escala.com/wp-content/uploads/2021/04/icono_06.svg',
  'title5' => 'Obtén métricas de marketing <br> y ventas en tiempo real',
  'desc5' => 'Lo que no se mide, no mejora. Escala te da las <br> analíticas necesarias en dashboards amigables <br> para que optimices tus esfuerzos de venta y <br> marketing. La salud de tu negocio en un solo <br> vistazo.',
 ) ;
@endphp

@contain_aio5( $parameters )

@endcontain_aio5


@php
 $parameters = array(
  'type' => 'backgroundImage&overlay',
  'backgroundImage' => 'https://cdn.escala.com/wp-content/uploads/2021/04/fondo_azul.svg',
  'overlay' => 'https://cdn.escala.com/wp-content/uploads/2021/04/Banner-Astro-4.svg',
  'overlay2' => 'https://cdn.escala.com/wp-content/uploads/2021/04/banner_astronauta.svg',
  'classSection' => 'landingPageIncTrial2_Am4',
  'title' => '¡Quiero todas las herramientas <br> de esta plataforma!',
  'textButton' => 'Recibe un demo',
  'goToUrl' => '#lead-form-bottom',
 ) ;
@endphp

@callToAction_T1( $parameters )

@endcallToAction_T1



@php
 $parameters = array(
  'classSection' => 'landingPageIncTrial2_Am5',
  'title' => '<span class="greenBlueColor">¿Estás listo para</span><br> acelerar tus ventas?',
  'text' => null,
  'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0115.png',
 'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
 ) ;
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1





  </div>

</div>






@endsection
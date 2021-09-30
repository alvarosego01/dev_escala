
{{--
  Template Name: [B] Landing page increible - Demo
--}}




@extends('layouts.app')

@section('content')


<div id="landingIncDemoBootstrap">

  <div class="sections">

@php
 $parameters = array(
  'backgroundImageType' => false,
  'classSection' => 'landingPageIncDemo0',
  'title' => '<span class="greenBlueColor">Crea landing pages</span> <br> increíbles',
  'text' => null,
  'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0102.png',
  'textForm' => '¡Comienza ahora!',
 ) ;
@endphp

@header_t1( $parameters )

@endheader_t1



@php
 $parameters = array(
  'classSection' => 'landingPageIncDemo1',
  'title' => '4 pasos para construir exitosas landing pages <span class="orangeColor">en minutos</span>',
  'img1' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0116.png',
  'title1' => 'Elige tu plantilla',
  'desc1' => 'Elige entre cientos de plantillas pre-diseñadas 100% responsive. Sin necesidad de programar.',
  'img2' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0117.png',
  'title2' => 'Personaliza',
  'desc2' => 'Dale tu toque personal y edita fácilmente imágenes, textos, colores, tipografías, etc.',
  'img3' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0118.png',
  'title3' => 'Publica',
  'desc3' => 'Con un solo clic publica tu landing page y comienza a recibir visitas de tus clientes.',
  'img4' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0119.png',
  'title4' => 'Optimiza',
  'desc4' => 'Analiza y optimiza tus landing pages a través de dashboards sencillos para obtener increíbles resultados.',
 ) ;
@endphp

@contain_4steps_loading( $parameters )

@endcontain_4steps_loading


@php
 $parameters = array(
  'type' => 'backColor',
  'classSection' => 'landingPageIncDemo2',
  'title' => '¡Comienza a crear tu <span class="orangeColor">landing page</span> ahora!',
  'textButton' => '¡Pruébalo ahora!',
  'goToUrl' => '#lead-form',
 ) ;
@endphp

@callToAction_T1( $parameters )

@endcallToAction_T1





@php
 $parameters = array(
  'classSection' => 'landingPageIncDemo3',
  'description' => '"<strong>Al generar más de 1 millón de contactos por año utilizando las páginas de destino de Open English</strong>, hemos obtenido información sobre cómo optimizar con éxito nuestros sitios web para impulsar nuestras ventas. Basándonos en una década de experiencia, hemos creado el mejor creador de páginas de destino del mercado".',
  'byAm' => '<span class="orangeColor">Andrés Moreno</span>',
  'team' => 'Fundador de <span class="orangeColor">Escala</span> y Open English',
  'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2020/09/escala-Andre%CC%81s-Moreno-founder-Ceo-Open-English-1.png'
 ) ;
@endphp

@contain_am_T1( $parameters )

@endcontain_am_T1


@php
 $parameters = array(
   'type' => 'regular',
  'classSection' => 'landingPageIncDemo4',
  'title' => 'Conoce la plataforma “todo en uno” de ventas y marketing que acelerará <span class="orangeColor">el crecimiento de tu negocio</span>',
  'img1' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0110.png',
  'title1' => 'Atrae visitantes <br> a tu landing page',
  'desc1' => 'Conecta tu cuenta de Facebook y <br> comienza a generar tráfico a tu landing <br> page. Crea campañas de anuncios <br> digitales directamente desde <span class="orangeColor">Escala</span>.',
  'img2' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0111.png',
  'title2' => 'Simplifica tu <br> gestión de ventas',
  'desc2' => 'Empodera a tu equipo de ventas con el <brr> CRM más amigable y fácil de usar. <br> Incrementa la productividad planificando <br> actividades y mantén comunicación <br> constante con tus leads.',
  'img3' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0112.png',
  'title3' => 'Construye poderosas campañas de <br> email marketing',
  'desc3' => 'Envía fácilmente campañas masivas de emails con una de nuestras plantillas <br> prediseñadas. Con <span class="orangeColor">Escala</span> dile adiós a la <br> bandeja de spam.',
  'img4' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0113.png',
  'title4' => 'Activa el piloto <br> automático',
  'desc4' => 'Ahorra tiempo automatizando tareas <br> repetitivas con <span class="orangeColor">Escala</span> para lograr tus metas <br> de ventas. Programa recordatorios y <br> configura emails de respuestas automáticas.',
  'img5' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0114.png',
  'title5' => 'Las analíticas que necesitas <br> para optimizar',
  'desc5' => 'Lo que no se mide, no mejora. <span class="orangeColor">Escala</span> te da <br> las analíticas necesarias en dashboards <br> amigables para que optimices tus esfuerzos <br> de venta y marketing. La salud de tu negocio <br> en un solo vistazo.',
 ) ;
@endphp

@contain_aio5( $parameters )

@endcontain_aio5



@php
 $parameters = array(
  'classSection' => 'landingPageIncDemo5',
  'title' => '<span class="greenBlueColor">¿Estás listo para</span> acelerar tus ventas?',
  'text' => null,
  'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0115.png',
  'textForm' => '¡Comienza ahora!',
 ) ;
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



  </div>

</div>





@endsection
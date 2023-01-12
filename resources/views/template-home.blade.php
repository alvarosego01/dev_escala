
{{--
  Template Name: [B] Home
--}}


@extends('layouts.app')
@section('content')

<div id="homeBootstrap">
  <div class="sections">

    @php
    $parameters = array(
     'backgroundImageType' => true,
     'overlay' => false,
     'classSection' => 'threeCol homeSection0 newHome',
     'title' => '
     <small >Escala CRM y automatizaciones</small> <br class="space">
     <span style="color: #fff; font-weight: 700;" >Atrae y convierte</span> <br class="space">
      <span style="color: #FAD872">
        más clientes fieles
      </span>
    ',
     'text' => '<span class="whiteColor">
          Con nuestras herramientas de <br class="space">
          automatización de marketing, <br class="space">
          ventas y el CRM más fácil de usar
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => App::setFilePath('/assets/images/backgrounds/fondo banner principal.png'),
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/home_header_person.png'),
  'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM'
  ) ;

  @endphp

  @header_t1( $parameters )
  @endheader_t1


  <section class="customSection sectionParent homeSection1_1">

    <div class="section-row">

            <section class="innerSectionElement sct1">

              <div class="containElements">

                <div class="element">
                  <div class="numbers">
                      <span>
                        +1000
                      </span>
                  </div>
                  <p class="text">
                    Clientes han confiado <br class="space">
                    en nosotros
                  </p>
                </div>
                <div class="element">
                  <div class="numbers">
                      <span>
                        300%
                      </span>
                  </div>
                  <p class="text">
                    Tasa de crecimiento en <br class="space"> clientes con + 6 meses
                  </p>
                </div>
                <div class="element">
                  <div class="numbers">
                      <span>
                        4.8/5
                      </span>
                  </div>
                  <p class="text">
                    Puntuación de clientes en <br class="space">
                    reviews de Trustpilot
                  </p>
                </div>
                <div class="element">
                  <div class="numbers">
                      <span>
                        +5000
                      </span>
                  </div>
                  <p class="text">
                    Aplicaciones que se <br class="space">
                    pueden integrar a Escala
                  </p>
                </div>

              </div>

            </section>

      </div>

    </section>


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'homeSection_1_2',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => '

  “<span class="greenBlueColor">Después de décadas construyendo negocios,</span> creamos <br class="desktopTabletElement">
  Escala basándonos en nuestra metodología para escalar empresas”.
    <br class="space"><br class="space">
    <span class="subText">
      <span>- Andrés Moreno</span> <br class="space">
      <small>Fundador de Escala y Open English reconocido</small>
    </span>
',
'typeVideo' =>  'localvideo',
  'videoEmbed' =>  App::setFilePath('/assets/videos/Comercial_escala_registro_lead_1.mp4'),
  'videoCover' => App::setFilePath('/assets/images/illustrations/others/video_front_home.png'),
  'text' => '
<span>
  “Emprendedor de la Década”, con apariciones en:
  </span>
<div class="specialIcons">
  <img src="'.App::setFilePath('/assets/images/illustrations/others/icon_prensa_cnn.png').'" alt="Escala CNN icono prensa" class="prensaIcon">
  <img src="'.App::setFilePath('/assets/images/illustrations/others/icon_prensa_wst.png').'" alt="Escala The wall street journal icono prensa" class="prensaIcon">
  <img src="'.App::setFilePath('/assets/images/illustrations/others/icon_prensa_bbc.png').'" alt="Escala BBC icono prensa" class="prensaIcon">
  <img src="'.App::setFilePath('/assets/images/illustrations/others/icon_prensa_mh.png').'" alt="Escala The miami herald icono prensa" class="prensaIcon">
  </div>',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
  'textButton' => 'Prueba Escala ya',
  'side' => 'right',
 ) ;
@endphp

@contain_text_video_T1( $parameters )
@endcontain_text_video_T1


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'dev_homeSection2 desktopElement',
    'enableTitle' => true,
    'titlePrincipal' => '
    Qué puede lograr tu empresa <span class="greenBlueColor">con Escala</span>
    ',
    'subTitlePrincipal' => null,
    'overlay' => true,
    'enableButton' => true,
    'urlButton' => '#',
    'textButton' => 'Prueba Escala ahora',
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022 hoverInEffect',
    'overlayImage' => App::setFilePath('/assets/images/overlays/overlay_home_sect.png'),
    'side' => 'left',
    'img' => App::setFilePath('/assets/images/illustrations/others/escala-pagina-confirmación-registro 1.png'),
    'img_alt' => null,
    'features_items' => [
        [
            'title'=> '<span class="greenBlueColor">Generar prospectos</span> <br class="space">
              online con publicidad <br class="space">
              paga o email',
            'text' => null,

        ],
        [
          'title'=> '<span class="greenBlueColor">Optimizar procesos</span> <br class="space">
            comerciales y de servicios',
            'text' => null
        ],
        [
          'title'=> '<span class="greenBlueColor">Aumentar la productividad</span> <br class="space">
            del equipo de ventas',
            'text' => null
        ],
        [
          'title'=> '<span class="greenBlueColor">
            Integrar y agilizar <br class="space">
              esfuerzos
          </span> de marketing <br class="space">
            y ventas',
            'text' => null
        ],
        [
          'title'=> '<span class="greenBlueColor">Nutrir la relación con clientes</span> <br class="space">
            para que recompren,
            promuevan y refieran',
            'text' => null,
        ],
        [
          'title'=> '<span class="greenBlueColor">
            Analizar la salud de tu <br class="space">
              negocio
          </span> con métricas en <br class="space">
            tiempo real',
            'text' => null,
        ],

    ],
];
@endphp

@contain_features_image_T1( $parameters )
@endcontain_features_image_T1

@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'dev_homeSection2 mobileElement',
    'enableTitle' => true,
    'titlePrincipal' => '
    Qué puede lograr tu empresa <span class="greenBlueColor">con Escala</span>
    ',
    'subTitlePrincipal' => null,
    'overlay' => true,
    'enableButton' => true,
    'urlButton' => '#',
    'textButton' => 'Prueba Escala ahora',
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022 hoverInEffect',
    'overlayImage' => App::setFilePath('/assets/images/overlays/overlay_home_sect_mobile.png'),
    'side' => 'left',
    'img' => App::setFilePath('/assets/images/illustrations/others/escala-pagina-confirmación-registro 1.png'),
    'img_alt' => null,
    'features_items' => [
        [
            'title'=> '<span class="greenBlueColor">Generar prospectos</span> <br class="space">
              online con publicidad <br class="space">
              paga o email',
            'text' => null,

        ],
        [
          'title'=> '<span class="greenBlueColor">Optimizar procesos</span> <br class="space">
            comerciales y de servicios',
            'text' => null
        ],
        [
          'title'=> '<span class="greenBlueColor">Aumentar la productividad</span> <br class="space">
            del equipo de ventas',
            'text' => null
        ],
        [
          'title'=> '<span class="greenBlueColor">
            Integrar y agilizar <br class="space">
              esfuerzos
          </span> de marketing <br class="space">
            y ventas',
            'text' => null
        ],
        [
          'title'=> '<span class="greenBlueColor">Nutrir la relación con clientes</span> <br class="space">
            para que recompren,
            promuevan y refieran',
            'text' => null,
        ],
        [
          'title'=> '<span class="greenBlueColor">
            Analizar la salud de tu <br class="space">
              negocio
          </span> con métricas en <br class="space">
            tiempo real',
            'text' => null,
        ],

    ],
];
@endphp

@contain_features_image_T1( $parameters )
@endcontain_features_image_T1

@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'homeSection2',
    'enableTitle' => true,
    'titlePrincipal' => '
    Por qué <span class="greenBlueColor">Escala</span>
    ',
    'subTitlePrincipal' => null,
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => '¡Comenzar ahora!',
    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022 hoverInEffect',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img_alt' => null,
            'img' => null,
            'title' => '<span class="greenBlueColor">
              Todas las herramientas <br class="space">
                  integradas
            </span> para empresas <br class="space">
                con equipo comercial, <br class="space">
                negocios de servicio o B2B',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => null,
            'title' => '<span class="greenBlueColor">Interfaz amigable</span> para <br class="space">
              que disfrutes trabajar en <br class="space">
              ella todos los días',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => null,
            'title' => '
              <span class="greenBlueColor">Altísimo nivel de servicio:</span> <br class="space">
              Nadie en la industria te <br class="space">
              acompaña y atiende mejor
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => null,
            'title' => '<span class="greenBlueColor">100% en español:</span> la <br class="space">
              plataforma, el servicio y <br class="space">
              los recursos en tu idioma',
            'enableButton' => false,
        ],

    ],
];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2


<section class="customSection sectionParent homeSection3">

  <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
                Nuestro gran diferenciador: <br class="space">
              <span class="greenBlueColor">Acompañamiento experto personalizado</span>
            </h2>

            <p class="primaryText grayColorTexts">
              Desde el día 1, le asignamos a ti y a tu equipo un gerente especialista en marketing digital y <br class="desktopTabletElement">
              ventas que guía sus pasos para que integren exitosamente la plataforma a sus operaciones.
            </p>

          </div>

        </section>

        <section class="innerSectionElement sct2">

          <div class=" row groupElements">


            <div class="info col-md-12 col-lg-6">

              <div class="containElements">

                <h3 class="secondaryTitle">
                  ¿Cómo funciona?
                </h3>

                <p class="text">
                  Una vez se sucriben a Escala, su Gerente de Cuenta los apoya a definir un <br class="desktopTabletElement">
                  plan, que tú y tu equipo implementen a su propio ritmo, basándose en <br class="desktopTabletElement">
                  nuestra Metodología probada de Éxito. La misma se divide en 4 fases:
                </p>

                <ul class="elements">
                  <li class="item">

                    <div class="text">
                      <h3>
                        <div class="count">
                          <span>1</span>
                        </div>
                        Planificación
                      </h3>
                      <p class="text">
                        Se desarrolla un plan personalizado para aterrizar tu estrategia en Escala
                      </p>
                    </div>
                  </li>
                  <li class="item">

                    <div class="text">
                      <h3>
                        <div class="count">
                          <span>2</span>
                        </div>
                        Configuración
                      </h3>
                      <p class="text">
                        Se realizan las importaciones, conexiones técnicas y personalización del CRM
                      </p>
                    </div>
                  </li>
                  <li class="item">

                    <div class="text">
                      <h3>
                        <div class="count">
                          <span>3</span>
                        </div>
                        Producción
                      </h3>
                      <p class="text">
                        Se lanza la primera campaña de marketing y se entrena al equipo comercial
                      </p>
                    </div>
                  </li>
                  <li class="item">

                    <div class="text">
                      <h3>
                        <div class="count">
                          <span>4</span>
                        </div>
                        Optimización
                      </h3>
                      <p class="text">
                        Se monitorean resultados y se define el próximo plan
                      </p>
                    </div>
                  </li>
                </ul>

                {{-- <a href="#" class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
                  Aprender más
              </a> --}}
                <a href="#" class=" primaryButton hoverInEffect openPopUpButton popup-general-blackFriday-2022">
                  Aprender más
              </a>

              </div>

            </div>

            <div class="image col-md-12 col-lg-6">

              <div class="containElements">

                <div class="containerImage">
                  <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/person/Chica-1.png') !!}"  loading="lazy">
                </div>

              </div>

            </div>

          </div>

        </section>


  </div>

 </section>


 @php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'homeSection_4',
  'enableTitle' => true,
  'titlePrincipal' => '
  <span class="greenBlueColor">Mejora el crecimiento de tu empresa </span><br class="desktopTabletElement">
con todas las herramientas en una plataforma',
  'subTitlePrincipal' => null,
  'img' => App::setFilePath('/assets/images/illustrations/others/Group 8765.png'),
  'title' => '
  <small class="smallEscalaTag">
    Landings + Formularios
    </small> <br class="space">
  Mejora tu presencia online <br class="desktopTabletElement">
  y captura leads calificados
  ',
  'text' => '
    Crea hermosas páginas de aterrizaje en minutos para <br class="desktopTabletElement">
    despertar el interés de clientes potenciales e incentívalos a <br class="desktopTabletElement">
    registrar su contacto para iniciar una relación comercial.
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'textButton' => 'Prueba Gratis',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1
 @php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'homeSection_5',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'img' => App::setFilePath('/assets/images/illustrations/others/Group 8758.png'),
  'title' => '
  <small class="smallEscalaTag">
    Ads + Emails
    </small> <br class="space">
  Lleva tráfico calificado a <br class="desktopTabletElement">
  tus páginas
  ',
  'text' => '
    Tienes dos opciones para llevar visitantes a <br class="desktopTabletElement">
    tus landing pages:
    <ul class="text">
      <li><span class="greenBlueColor">1.</span> Crear o importar campañas de anuncios <br class="desktopTabletElement">
      pagas en Facebook e Instagram</li>
      <li><span class="greenBlueColor">2.</span> Enviar campañas de email a tu base de datos</li>
    </ul>
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'textButton' => 'Prueba Gratis',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1
 @php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'homeSection_6',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'img' => App::setFilePath('/assets/images/illustrations/others/Group 8764.png'),
  'title' => '
  <small class="smallEscalaTag">
    CRM fácil de usar
  </small> <br class="space">
  Gestiona contactos y optimiza <br class="desktopTabletElement">
  procesos comerciales
  ',
  'text' => '
    Con el CRM de Escala logras: <br class="space">
    <ul class="text">
      <li>Organizar tu base de datos</li>
      <li>Llevar un historial de interacciones</li>
      <li>Programa actividades y recordatorios</li>
      <li>Controlar procesos con embudos</li>
      <li>Hacer mejor seguimiento a tu equipo hasta <br class="desktopTabletElement">
        ganar oportunidades de negocio </li>
    </ul>
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'textButton' => 'Prueba Gratis',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
  'side' => 'right',
 ) ;
@endphp
@contain_text_image_T1( $parameters )
@endcontain_text_image_T1

 @php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'homeSection_6',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'img' => App::setFilePath('/assets/images/illustrations/others/whatsapp_home_image.png'),
  'title' => '
  <small class="smallEscalaTag">
   WhatsApp
  </small> <br class="space">
    Mejora tu capacidad <br class="desktopTabletElement">
    de respuesta e integra ágilmente <br class="desktopTabletElement">
    WhatsApp a tu estrategia
  ',
  'text' => '
    <ul class="text">
        <li>Opera manos libres programando acciones y respuestas</li>
        <li>Comunícate en tiempo real y gestiona tus <br class="desktopTabletElement">
        conversaciones desde una sola herramienta</li>
        <li>Gestiona tus contactos ¡desde tu propio <br class="desktopTabletElement"> WhatsApp Web también!</li>
        <li>Captura y guarda automáticamente los datos <br class="desktopTabletElement">
       de tus leads en el CRM</li>
    </ul>
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'textButton' => 'Prueba Gratis',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
  'side' => 'left',
 ) ;
@endphp
@contain_text_image_T1( $parameters )
@endcontain_text_image_T1

 @php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'homeSection_7',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'img' => App::setFilePath('/assets/images/illustrations/others/Group 8766.png'),
  'title' => '
  <small class="smallEscalaTag">
    Email Marketing + Plantillas de venta
  </small> <br class="space">
  Comunícate efectivamente <br class="desktopTabletElement">
  con emails profesionales
  ',
  'text' => '
    Envía campañas de email impactantes con <br class="desktopTabletElement">
    plantillas optimizadas para mejorar tu tasa de <br class="desktopTabletElement">
    apertura y tu índice de clics, generar mayor <br class="desktopTabletElement">
    interacción, aumentar tu ROI e incrementar tu <br class="desktopTabletElement">
    conversión.
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'textButton' => 'Prueba Gratis',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1
 @php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'homeSection_8',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'img' => App::setFilePath('/assets/images/illustrations/others/Group 8767.png'),
  'title' => '
  <small class="smallEscalaTag">
    Automatizaciones
  </small> <br class="space">
    ¡Ahorra tiempo y esfuerzo <br class="desktopTabletElement">
    automatizando acciones!
  ',
  'text' => '
    Evita realizar tareas repetitivas y cometer errores <br class="desktopTabletElement">
    humanos creando flujos y programando acciones <br class="desktopTabletElement">
    que se ejecuten automáticamente para optimizar <br class="desktopTabletElement">
    tus resultados de marketing, ventas y fidelización <br class="desktopTabletElement">
    de clientes.
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'textButton' => 'Prueba Gratis',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'homeSection_9',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'img' => App::setFilePath('/assets/images/illustrations/others/Group 8761.png'),
  'title' => '
  <small class="smallEscalaTag">
    Analíticas
  </small> <br class="space">
    Lo que no se mide <br class="desktopTabletElement">
    no se mejora
  ',
  'text' => '
    Analiza tus esfuerzos comerciales con métricas y <br class="desktopTabletElement">
    dashboards actualizados en tiempo real. <br class="space">
    Entiende  rápidamente lo que funciona y lo que <br class="desktopTabletElement">
    debes mejorar al usar cada herramienta de <br class="desktopTabletElement">
    Escala.
  ',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'textButton' => 'Prueba Gratis',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1

@php
 $parameters = array(
  'type' => 'backgroundImage',
  'backgroundImageFile' => App::setFilePath('/assets/images/backgrounds/fondo banner principal.png'),
  'classSection' => 'homeSection_10',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'img' => App::setFilePath('/assets/images/person/implementacion_banner_principal-1-1.png'),
  'title' => '
    Conviértete en Partner <br class="desktopTabletElement">
    o Afiliado de Escala
    <br class="space">
    <small class="subTitle">
      Construye tu negocio mientras <br class="desktopTabletElement">
      impulsas el crecimiento de otros
      </small>
  ',
  'text' => '
      Al asociarte a Escala, obtienes recursos especiales y <br class="desktopTabletElement">
      hasta 20% de comisión por ventas y servicios prestados <br class="desktopTabletElement">
      mientras tus clientes se mantienen suscritos a Escala.
  ',
  'enableButton' => true,
  'urlButton' => 'http://escala.com/alianzas',
  'textButton' => 'Asociarme a Escala',
  'typeButton' => 'primaryButton hoverInEffect ',
  'side' => 'right',
 ) ;
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'homeSection_11',
    'enableTitle' => true,
    'titlePrincipal' => '
    Acelera tu aprendizaje <span class="greenBlueColor">con Escala Academy</span>
    ',
    'subTitlePrincipal' => '
    Ten acceso a una variedad de recursos para aprender a tu propio ritmo <br class="desktopTabletElement">
    y conecta con nuestro equipo de servicio para atender a preguntas.',
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => '¡Comenzar ahora!',
    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022 hoverInEffect',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/Copy of webinar.png'),
            'title' => '
            Capacitaciones en vivo <br class="space">
            semanales ilimitadas',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/embudo-tipo_3.png'),
            'title' => '
            Artículos y videotutoriales <br class="space">
            por herramienta',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/escala-page-builder-create-landing-website-1.png'),
            'title' => '
            Casos de uso y  guías <br class="space">
            con mejores prácticas
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/Hombre call center 2.png'),
            'title' => '
              Chat plataforma y <br class="space">
              soporte técnico
            ',
            'enableButton' => false,
        ],

    ],
];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2


@php
       $parameters = [
        'classSection' => 'homeSection_12',
        'enableTitle' => true,
        'titlePrincipal' => '
        Nuestros clientes comentan <br class="space">
        <span class="greenBlueColor">por qué prefieren Escala</span>
        ',
        'subTitlePrincipal' => null,
        'enableContainerButton' => true,
        'urlButton' => '#',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'textButton' => 'Prueba Gratis',
        'mob_reviews' => array(
          App::setFilePath('/assets/images/illustrations/others/trust_home_01.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_02.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_03.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_04.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_05.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_06.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_07.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_08.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_09.png')
        ),
        'desk_reviews' => array(
          [
            App::setFilePath('/assets/images/illustrations/others/trust_home_01.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_02.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_03.png')
          ],
          [
            App::setFilePath('/assets/images/illustrations/others/trust_home_04.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_05.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_06.png')
          ],
          [
            App::setFilePath('/assets/images/illustrations/others/trust_home_07.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_08.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_09.png')
          ]
        ),
      ];
@endphp

@reviews_sliders_T1( $parameters )
@endreviews_sliders_T1


@php
       $parameters = [
        'classSection' => 'homeSection_13',
        'enableTitle' => true,
        'titlePrincipal' => '
        Clientes que han confiado <span class="greenBlueColor">en nosotros</span>
        ',
        'subTitlePrincipal' => null,
        'enableContainerButton' => true,
        'urlButton' => '#',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'textButton' => 'Prueba Gratis',
        'enableContainerButton' => false,
        'customID' => 'coop_logos_home',
        'mob_reviews' => array(

          '<div class="imageItem"><div class="containerImage"><img src="'.App::setFilePath("/assets/images/logos/logo_coop_escala_4.png").'" loading="lazy"></div></div>',
          '<div class="imageItem"><div class="containerImage"><img src="'.App::setFilePath("/assets/images/logos/logo_coop_escala_5.png").'" loading="lazy"></div></div>',
          '<div class="imageItem"><div class="containerImage"><img src="'.App::setFilePath("/assets/images/logos/logo_coop_escala_1.png").'" loading="lazy"></div></div>',
          '<div class="imageItem"><div class="containerImage"><img src="'.App::setFilePath("/assets/images/logos/logo_coop_escala_3.png").'" loading="lazy"></div></div>',
          '<div class="imageItem"><div class="containerImage"><img src="'.App::setFilePath("/assets/images/logos/logo_coop_escala_2.png").'" loading="lazy"></div></div>'

        ),
        'desk_reviews' => array(
          [
          '<div class="imageItem"><div class="containerImage"><img src="'.App::setFilePath("/assets/images/logos/logo_coop_escala_4.png").'" loading="lazy"></div></div>',
          '<div class="imageItem"><div class="containerImage"><img src="'.App::setFilePath("/assets/images/logos/logo_coop_escala_5.png").'" loading="lazy"></div></div>',
          '<div class="imageItem"><div class="containerImage"><img src="'.App::setFilePath("/assets/images/logos/logo_coop_escala_1.png").'" loading="lazy"></div></div>',
          '<div class="imageItem"><div class="containerImage"><img src="'.App::setFilePath("/assets/images/logos/logo_coop_escala_3.png").'" loading="lazy"></div></div>',
          '<div class="imageItem"><div class="containerImage"><img src="'.App::setFilePath("/assets/images/logos/logo_coop_escala_2.png").'" loading="lazy"></div></div>'
          ],

        ),
      ];
@endphp

@component_sections_sliders_T1( $parameters )
@endcomponent_sections_sliders_T1


{{-- // App::setFilePath('/assets/images/logos/logo_coop_escala_4.png'),
//             App::setFilePath('/assets/images/logos/logo_coop_escala_5.png'),
//             App::setFilePath('/assets/images/logos/logo_coop_escala_1.png'),
//             App::setFilePath('/assets/images/logos/logo_coop_escala_3.png'),
//             App::setFilePath('/assets/images/logos/logo_coop_escala_2.png') --}}



  @php
$escalaUrl = 'https://escala.com';
$items = [
    [
        'type' => 'master',
        'title' => '¿Qué es Escala?',
        'text' => 'Escala es la plataforma todo en uno de marketing digital y ventas que te ayudará a acelerar el éxito de tu negocio, con todas las <br class="desktopElement"> herramientas en un solo lugar para crecer de una manera constante. Conoce todos los beneficios de Escala:<br class="space"><br class="space">
                    <ul style="list-style: disc; padding-left: 20px">
                        <li><p>Crea landing pages increíbles sin programar, para darte a conocer y capturar la información de tus visitantes.</p></li>
                        <li><p>Crea, administra y publica anuncios digitales de Instagram y Facebook, sin salir de Escala, para generar tráfico a tus páginas.</p></li>
                        <li><p>Gestiona tu base de datos y haz más productivo el trabajo de tu equipo de ventas con el CRM más fácil de usar.</p></li>
                        <li><p>Mantén la comunicación constante con tus leads y clientes enviando emails masivos sin caer en la bandeja de spam.</p></li>
                        <li><p>Automatiza tareas repetitivas: workflows y campañas de emails para hacer crecer tu negocio en piloto automático.</p></li>
                        <li><p>Mide y optimiza tus campañas digitales con las analíticas en tiempo real.</p></li></ul>'
    ],
    [
        'type' => 'master',
        'title' => '¿Necesito habilidades para manejar la plataforma?',
        'text' => 'No. nuestra herramienta es muy intuitiva y fácil de usar. Para que estés más tranquilo, hemos preparado una serie de tutoriales muy <br class="desktopElement"> prácticos, que te ayudarán a despejar cualquier duda que tengas mientras vives la experiencia. También puedes contar con nuestro <br class="desktopElement"> acompañamiento, a través de asesorías, que te serán de gran ayuda en los primeros momentos de uso de la plataforma. <a class="hiperButtonGreenBlueT2"href="'.$escalaUrl.'/zoom-meeting">Atención al cliente.</a>'
    ],
    [
        'type' => 'master',
        'title' => '¿Qué incluye?',
        'text' => 'Cuando adquieres cualquiera de los planes de Escala cuentas con: Todas las funcionalidades de marketing digital y ventas, servicio <br class="desktopElement"> ilimitado y entrenamiento para usar la plataforma.'
    ],
    [
        'type' => 'master',
        'title' => 'Funcionalidades',
        'items' => [
            [
                'title' =>
                    '¿Los embudos de venta aplican para todos los negocios?',
                'text' =>
                    'Así es. Todos los negocios tienen un embudo de ventas, conscientemente o no, dado que buscan atraer leads y convertirlos en <br class="desktopElement"> clientes. No olvides que un embudo de ventas es una metodología, paso a paso, que puede combinar marketing digital y offline. <br class="desktopElement"> En Escala tienes todas las funcionalidades para implementarlo de manera fácil, invirtiendo menos recursos, tiempo y dinero.',
                'type' => 'item'
            ],
            [
                'title' => '¿Qué ventajas tiene el CRM de Escala?',
                'text' =>
                    'Esta pregunta es fundamental. Es importante que sepas que el CRM de Escala no solo cuenta con todas opciones para gestionar tus <br class="desktopElement"> contactos: información relacionada con el nombre, email y teléfono, y de gestión de tu equipo comercial como: actividades, tareas, <br class="desktopElement"> llamadas y recordatorios hasta cerrar la venta, sino que también es el CRM más fácil de usar de todos. Pruébalo y descúbrelo por ti <br class="desktopElement"> mismo. ',
                'type' => 'item'
            ],
            [
                'title' => 'El Page builder de Escala ¿cómo funciona?',
                'text' =>
                    'El Page builder de Escala es el más fácil de usar del mercado. Práctico para realizar tus landing pages optimizadas. Tenemos cientos <br class="desktopElement"> de hermosas plantillas listas para que las personalices y en un clic las puedas publicar. Con formularios capaces de captar toda la <br class="desktopElement"> data y guardarla automáticamente en tu base de datos. <br class="space"><br class="space"> Fáciles de armar en minutos, 100% responsive y con un subdominio en caso que no tengas dominio propio. Además ya tienen <br class="desktopElement"> integrado el botón de WhatsApp para que tus visitantes conversen directamente con tu equipo de ventas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿En Escala se puede usar un dominio distinto para cada landing page?',
                'text' =>
                    'Sí, en Escala puedes tener varios dominios para tus landing pages. Solo debes configurarlos y usarlos cuando lo necesites en cada <br class="desktopElement"> una de tus páginas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Puedo agregar el botón de WhatsApp en las landing pages de Escala?',
                'text' =>
                    'Las landing pages de Escala ya tienen disponible el botón de WhatsApp para que tu cliente pueda tener una conversación más fluida <br class="desktopElement"> con tu empresa. Se puede encontrar en la pestaña de “WhatsApp” en cada landing. Si la página ya está publicada, tendrás que re-<br class="desktopElement">publicarla después de activar el botón para que aparezca en tu página. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=5HOSPcDXdTQ&t=4s">Tutorial de Cómo activar botón de WhatsApp.</a> ',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Puedo publicar campañas de anuncios digitales en Escala?',
                'text' =>
                    'En Escala puedes crear, administrar y publicar anuncios digitales de Instagram y Facebook, sin tener que salir de nuestra plataforma. Elige a tu <br class="desktopElement"> audiencia, presupuesto determinado y genera tráfico a tus landing pages de la manera más fácil y práctica.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Qué tipo de campañas son las que se están creando desde Escala?',
                'text' =>
                    'En Escala puedes crear campañas de anuncios digitales de Instagram y Facebook para lograr generar tráfico a tus landing pages. Su objetivo es <br class="desktopElement"> atraer posibles clientes (Captura de Leads) para que registren sus datos y con esta información puedas cerrar más ventas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    'En los anuncios digitales de Escala, ¿la propia plataforma maneja el píxel de Facebook o hay que integrarlo desde 0?',
                'text' =>
                    'Para agregar el píxel de Facebook debes ir a "configuración" de Escala, entra a la sección de "píxeles y códigos de seguimiento" y <br class="desktopElement"> darle clic a "agregar cuenta". Así de fácil es agregar el píxel de Facebook.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Puedo hacer campañas de email marketing en Escala?',
                'text' =>
                    'La respuesta es sí. Haz efectivas campañas de email marketing con sencillas plantillas de email. Realiza envíos masivos sin caer en la <br class="desktopElement"> bandeja de spam y ten las métricas en tiempo real para mejorar los resultados de tus campañas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿En qué parte de Escala puedo crear las plantillas de email marketing?',
                'text' =>
                    'En la funcionalidad de plantillas, al darle la opción de “+Crear” arriba a la derecha, puedes elegir esta opción. Haz clic en opciones de <br class="desktopElement"> plantillas, allí se desplegará las alternativas de: "Plantilla de CRM" o "Plantilla de marketing". Elige “Plantilla de marketing” y <br class="desktopElement"> comienza a personalizarla. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=E_1VObta6Lk">Tutorial de cómo crear plantillas de Email Marketing.</a> ',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿ Cuáles son las funcionalidades de automatizaciones y analíticas?',
                'text' =>
                    'En Escala te damos todas las métricas para optimizar tus resultados. Tanto en las funcionalidades de marketing como las de ventas <br class="desktopElement"> tienes dashboards amigables que te permiten ver en tiempo real las métricas que son importantes. <br class="space"><br class="space"> En Escala puedes automatizar flujos de tareas para tu fuerza de ventas, programar workflows de comunicación y de email marketing, <br class="desktopElement"> para que tu negocio crezca en piloto automático. ',
                'type' => 'item'
            ]
        ]
    ],
    [
        'type' => 'master',
        'title' => 'Sobre mi cuenta',
        'items' => [
            [
                'title' => '¿Cómo accedo a la plataforma?',
                'text' =>
                    'Entra en <a class="hiperButtonGreenBlueT2"href="https://app.escala.com/">app.escala.com</a>. y haz clic en iniciar sesión desde cualquier dispositivo. ',
                'type' => 'item'
            ],
            [
                'title' => '¿Puedo usar mi propio dominio?',
                'text' =>
                    'Sí, en Escala puedes utilizar tu dominio tal como se encuentra registrado en tu hosting, para conocer cómo conectarlo puedes <br class="desktopElement"> visualizar nuestro tutorial: <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=vpdEwrcrZt0&t=44s">Cómo conectar dominio de página.</a> ',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo creo una cuenta?',
                'text' =>
                    'Para crear una cuenta debes ingresar tus datos haciendo clic en en el botón “Prueba Escala Ahora” en <a class="hiperButtonGreenBlueT2"href="https://escala.com/">https://escala.com/</a> y te <br class="desktopElement"> contactará uno de nuestros asesores para comenzar tu free trial.',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo cancelo mi cuenta?',
                'text' =>
                    'Puedes cancelarla cuando quieras a través de nuestros canales de servicio en la plataforma o WhatsApp.',
                'type' => 'item'
            ],
            [
                'title' => 'Si cierro mi cuenta, ¿perderé toda la data?',
                'text' =>
                    'La respuesta es Sí. Pero, estamos seguros que una vez que pruebes Escala no querrás cerrar tu cuenta.',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo recupero mi contraseña?',
                'text' =>
                    'Si no recuerdas tu contraseña, haz clic en el link de recuperar y te enviaremos un correo <br class="desktopElement"> para gestionarla de nuevo.',
                'type' => 'item'
            ],
            [
                'title' => '¿Se puede integrar con otras aplicaciones?',
                'text' =>
                    '¡Sí! Puedes integrar tu CRM de Escala con otras aplicaciones a través de Zapier. Un ejemplo de cómo hacerlo en este tutorial <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=9tJl_akCRgI&list=PLchunKFsero1alROd4tbc9r5GxI7-9_ju&index=22">Ver tutorial</a>',
                'type' => 'item'
            ]
        ]
    ],
    [
        'type' => 'master',
        'title' => 'Precios y métodos de pago',
        'items' => [
            // [
            //     'title' => '¿Cuáles son los planes de precio de Escala?',
            //     'text' =>
            //         'En Escala tenemos planes a la medida de tus sueños y ganas de crecer. Solo pagas por lo que necesitas. Consulta nuestros precios: <a class="hiperButtonGreenBlueT2"href="' .
            //         $escalaUrl .
            //         '/pricing-page">Página de precios</a>',
            //     'type' => 'item'
            // ],
            [
                'title' => '¿Puedo cambiar o cancelar planes?',
                'text' =>
                    'Sí en Escala puedes cancelar tus planes cuando desees, pero sabemos que será tan útil que querrás ir al siguiente nivel. Para cambiar <br class="desktopElement"> o cancelar tus planes debes contactarte con nuestro equipo, a través de WhatsApp o chat.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Debo pagar por las actualizaciones de la herramienta?',
                'text' =>
                    'No, no debes pagar por las actualizaciones. Solo pagas por las funcionalidades que utilices y si incrementas tu plan será por tus <br class="desktopElement"> necesidades de contactos de marketing o ventas o porque tu negocio está creciendo y necesitas más usuarios.',
                'type' => 'item'
            ]
        ]
    ],
    [
        'type' => 'master',
        'title' => 'Seguridad',
        'items' => [
            [
                'title' => '¿Qué tan seguro es?',
                'text' =>
                    'En Escala tu data está en buenas manos. Tu información no es vista por nadie, solo por personas de tu equipo y bajo los permisos <br class="desktopElement"> que hayas asignado. Para nosotros tu seguridad es primero.',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo exportar datos?',
                'text' =>
                    'Podrás exportar la información de tus contactos y oportunidades de ventas desde cada listado en el CRM. Te enviaremos <br class="desktopElement"> un documento a tu correo con los datos que hayas elegido exportar.',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo importar datos?',
                'text' =>
                    'Puedes importar tus bases de datos al CRM de Escala, solo necesitas guardar la información en un archivo .csv o .txt e iniciar el <br class="desktopElement"> proceso desde el listado de contactos. Chequea nuestro tutorial: <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=2bJFjHWbI1E">Ver tutorial</a>',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo conceder accesos e invitar a terceros?',
                'text' =>
                    'Puedes agregar a terceros y a todos los miembros de tu equipo de trabajo para hacer más eficiente tu gestión. Es muy fácil te <br class="desktopElement"> invitamos a ver todo el detalle en este práctico tutorial. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=dCrD2cD_Xpw">Ver tutorial</a>',
                'type' => 'item'
            ]
        ]
    ],
    [
        'type' => 'master',
        'title' => 'Asesoría',
        'items' => [
            [
                'title' => '¿Cómo conectar con un experto?',
                'text' =>
                    'En Escala tu crecimiento de negocio es vital para nosotros por eso, siempre tendrás la asesoría de un experto en marketing digital y <br class="desktopElement"> ventas acompañándote en todo el camino. <a class="hiperButtonGreenBlueT2"href="' .
                    $escalaUrl .
                    '/zoom-meeting">Link con asesor</a>',
                'type' => 'item'
            ],
            [
                'title' => '¿Con quién puedo conectar para recibir asistencia?',
                'text' =>
                    '<span style="color:#34768a">Si tienes dudas sobre cualquier cosa puedes:</span> <br class="desktopElement"> <ul style="color:#34768a"class="accordionSpecial"><li>1. Ver nuestros tutoriales de uso en nuestro canal de youtube. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/channel/UCiDlXaq67qVf8lSTurRS8lQ">Escala en Youtube</a></li><li>2. Hablar con un asesor. <a class="hiperButtonGreenBlueT2"href="' .
                    $escalaUrl .
                    '/zoom-meeting">Link con asesor</a></li><li>3. Conversar por chat. <a class="hiperButtonGreenBlueT2"href="https://api.WhatsApp.com/send?phone=17863042407">Chat de WhatsApp</a></li><li>4. Hablar con el Especialista en customer success asignado a tu cuenta (Plan Pro y Enterprise).</li></ul>',
                'type' => 'item'
            ]
        ]
    ],
    [
        'type' => 'master',
        'title' => 'Entrenamiento',
        'items' => [
            [
                'title' =>
                    '¿Hay formas de aprender marketing y ventas para mejorar mi negocio?',
                'text' =>
                    'Escala Academy es el programa de formación constante, mediante el cual te daremos todo el conocimiento de marketing digital y <br class="desktopElement"> ventas para hacerte un experto. <br class="space"><br class="space"> Escala Academy: <br class="desktopElement"> <ul style="color:#34768a"class="accordionSpecial"><li>Tutoriales funcionalidades.</li><li>Blog Escala.</li><li>Workshops para tu empresa.</li><li>Webinars especializados en temas (Escalatones).</li><li>Programas de Éxito.</li></ul>',
                'type' => 'item'
            ],
            [
                'title' => '¿Necesito pagar para tener toda la información?',
                'text' =>
                    'Todo nuestro material de apoyo y conocimiento es totalmente gratis. Para nosotros mantenerte bien informado y en constante <br class="desktopElement"> formación es una inversión para ayudarte a hacer crecer tu negocio.',
                'type' => 'item'
            ]
        ]
    ]
];


 $parameters = array(
   'classSection' => 'homeSection9',
   'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'items' => $items
   ) ;
   @endphp
@contain_FAQ_T1( $parameters )
@endcontain_FAQ_T1


<section
style="background-image: url({!! App::setFilePath('/assets/images/banners/background_overlay_spaceship.png') !!})"
class="customSection sectionParent homeSection10 fullWidth">

  <img  src="{!! App::setFilePath('/assets/images/overlays/overlay_stars.png') !!}"   class="backOverlay">

    <div class="section-row">

      <div class="containElements">

        <div class="info">

          <h3 class="primaryTitle">
            <span class="blueLightColor11">Comienza a generar</span> <br class="space">
            más leads y clientes fieles
          </h3>

          <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
            Prueba Escala ahora
          </a>

        </div>

        <div class="image">

          <div class="containerImage">

            <img  src="{!! App::setFilePath('/assets/images/illustrations/others/Group.png') !!}" alt="Ilustración de un cohete en curso en referencia a Escala como la plataforma ideal para crecer y generar más leads, clientes y ventas"  loading="lazy">

          </div>

        </div>

      </div>

    </div>

</section>

</div>

</div>

</div>




@endsection

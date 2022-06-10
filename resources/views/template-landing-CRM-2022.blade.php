
{{--
  Template Name: [B] Landing - CRM 2022
--}}


@extends('layouts.app')

@section('content')

<div id="landing-CRM2022-bootstrap">

  <div class="sections">

    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landingCRM_2022_0',
     'title' => '<span style="color: #B9E6E9">
Concreta más ventas <br class="space">
y fideliza a más clientes
        </span>',
     'text' => '<span class="whiteColor">
El CRM de Escala integra todos las funcionalidades que <br class="space">
necesitas para organizar y gestionar tu base de datos,<br class="space">
aumentar tus ventas y fidelizar a tus clientes generando <br class="space">
upsells. El CRM de Escala es fácil de usar y potente.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_01.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingCRM_2022_1',
        'enableTitle' => true,
        'titlePrincipal' => '
        <span class="greenBlueColor">Conoce los beneficios</span> del CRM de Escala
        ',
        'subTitlePrincipal' => '
        El CRM de Escala es el más fácil de usar del mercado, permitiéndote:
        ',
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_01a.png'),
                'title' => '<span class="grayColorTexts5">
Organizar y gestionar <br class="desktopTabletElement">
tu base de datos
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_01b.png'),
                'title' => '<span class="grayColorTexts5">
Guardar información relevante <br class="desktopTabletElement">
sobre tus contactos
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_01c.png'),
                'title' => '<span class="grayColorTexts5">
Automatizar tus  procesos <br class="desktopTabletElement">
de venta y marketing digital
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_01d.png'),
                'title' => '<span class="grayColorTexts5">
Vender con o sin <br class="desktopTabletElement">
vendedores
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_01e.png'),
                'title' => '<span class="grayColorTexts5">
Fidelizar más <br class="desktopTabletElement">
clientes
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_01f.png'),
                'title' => '<span class="grayColorTexts5">
Personalizar tu comunicación <br class="desktopTabletElement">
para convertir más
                    </span>',
                'enableButton' => false,
            ],

        ],
    ];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2


<section class="customSection sectionParent landingCRM_2022_2">

    <div class="section-row">

      <section class="innerSectionElement sct1">

        <div class="containElements">

          <h2 class="primaryTitle blackColor ">
              4 pasos para potenciar tus ventas <br class="space">
            <span class="greenBlueColor">
                con nuestro CRM
            </span>
          </h2>
          {{-- <p class="primaryText grayColorTexts">
            Aumenta tus ventas y la productividad de tu equipo con el CRM más fácil de usar del mercado, <br class="desktopTabletElement">
            el arma secreta de los negocios para escalar con éxito.
          </p> --}}

        </div>

      </section>
      <section class="innerSectionElement sct2">

        <div class="groupElements row">

          <div class="col-12 col-md-12 col-lg-6 infoGroup">

            <div class="containerImage">
              <img alt="Crea increíbles páginas sin programar" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_02a.png') !!}" alt="" loading="lazy">
            </div>

            <div class="containerElements">
              <h3 class="secondaryTitle blackColor">
Organiza tu base de datos
              </h3>
              <p class="primaryText  grayColorTexts">
Organiza y segmenta a tus leads y clientes con nuestras <br class="desktopTabletElement">
etiquetas avanzadas para crear campañas <br class="desktopTabletElement">
personalizadas. ¡Dile adiós a las hojas de Excel!
              </p>
            </div>

          </div>

          <div class="col-12 col-md-12 col-lg-6 infoGroup">

            <div class="containerImage">
              <img alt="Organiza tus contactos y gestiona procesos de venta" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_02b.png') !!}" alt="" loading="lazy">
            </div>

            <div class="containerElements">
              <h3 class="secondaryTitle blackColor">
Haz productivo a tu equipo
              </h3>
              <p class="primaryText  grayColorTexts">
Programa el día a día de tu equipo: Tareas, <br class="desktopTabletElement">
actividades, recordatorios y llamadas para hacer <br class="desktopTabletElement">
más eficiente el seguimiento de cada oportunidad.
              </p>
            </div>

          </div>

        </div>
        <div class="groupElements row">
          <div class="col-12 col-md-12 col-lg-6 infoGroup">

            <div class="containerImage">
              <img alt="Envía emails de marketing profesionales" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_02c.png') !!}" alt="" loading="lazy">
            </div>

            <div class="containerElements">
              <h3 class="secondaryTitle blackColor">
Cierra más ventas
              </h3>
              <p class="primaryText  grayColorTexts">
Logra mejores resultados orientando estrategias <br class="desktopTabletElement">
para: lanzar nuevos productos, enviar promociones <br class="desktopTabletElement">
personalizadas, conseguir up sales y recompra <br class="desktopTabletElement">
de tus clientes.
              </p>
            </div>

          </div>

          <div class="col-12 col-md-12 col-lg-6 infoGroup">

            <div class="containerImage">
              <img alt="Multiplica tus visitas web con anuncios digitales" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_02d.png') !!}" alt="" loading="lazy">
            </div>

            <div class="containerElements">
              <h3 class="secondaryTitle blackColor">
Fideliza a tus clientes
              </h3>
              <p class="primaryText  grayColorTexts">
Mantén la llama viva con tus clientes. La primera <br class="desktopTabletElement">
venta es el primer paso para lograr relaciones a largo <br class="desktopTabletElement">
plazo. Recuerda que hay un 60% más de probabilidades <br class="desktopTabletElement">
de venderle a un cliente fiel que a uno nuevo.
              </p>
            </div>

          </div>
        </div>

      </section>

    {{-- <section class="innerSectionElement sct3">

      <div class="containElements">

        <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
          ¡Probar Escala ahora!
        </a>

      </div>
    </section> --}}

    </div>

</section>

<section class="customSection sectionParent landingCRM_2022_3">

    <div class="section-row">

      <section class="innerSectionElement sct1">

        <div class="containElements">

          <h2 class="primaryTitle whiteColor ">
            El CRM de Escala es el arma secreta de tu fuerza <br class="space">
            <span style="color: #B9E6E9">de ventas y marketing</span>
          </h2>
          {{-- <p class="primaryText grayColorTexts">
            Aumenta tus ventas y la productividad de tu equipo con el CRM más fácil de usar del mercado, <br class="desktopTabletElement">
            el arma secreta de los negocios para escalar con éxito.
          </p> --}}

        </div>

      </section>
      <section class="innerSectionElement sct2">

        <div class="groupElements row">

          <div class="col-12 col-md-12 col-lg-6 infoGroup">

            <div class="containerImage">
              <img alt="Crea increíbles páginas sin programar" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_03a.png') !!}" alt="" loading="lazy">
            </div>

            <div class="containerElements">
              <h3 class="secondaryTitle blackColor">
Integrado con WhatsApp Web
              </h3>
              <p class="primaryText  grayColorTexts">
El CRM de Escala te ofrece su integración a tu <br class="desktopTabletElement">
WhatsApp Web para que puedas convertir a cada <br class="desktopTabletElement">
contacto nuevo en un lead, guardando su  información <br class="desktopTabletElement">
de manera automática en tu CRM.
              </p>
            </div>

          </div>

          <div class="col-12 col-md-12 col-lg-6 infoGroup">

            <div class="containerImage">
              <img alt="Organiza tus contactos y gestiona procesos de venta" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_CRM_gestion_datos_icono_03b.png') !!}" alt="" loading="lazy">
            </div>

            <div class="containerElements">
              <h3 class="secondaryTitle blackColor">
Etiquetas avanzadas
              </h3>
              <p class="primaryText  grayColorTexts">
Segmenta a tus leads y clientes colocándoles etiquetas <br class="desktopTabletElement">
avanzadas. Al conocer sus intereses podrás generar <br class="desktopTabletElement">
campañas personalizadas para cada grupo y lograr <br class="desktopTabletElement">
mayor conversión .
              </p>
            </div>

          </div>

        </div>


      </section>

    <section class="innerSectionElement sct3">

      <div class="containElements">

        <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
          Quiero mi CRM de Escala
        </a>

      </div>
    </section>

    </div>

</section>


<section class="customSection sectionParent landingCRM_2022_4">

    <div class="section-row">

          <section class="innerSectionElement1">

            <h2 class="primaryTitle blackColor">
              Nuestros clientes te dicen <br class="space">
<span class="greenBlueColor">qué tan fácil es usar Escala</span>
            </h2>


          </section>

          <section class="innerSectionElement2">

            <div class="imagesSection">

                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust1.png') !!}" alt="">

                </div>
                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust2.png') !!}" alt="">

                </div>
                {{-- <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust3.png') !!}" alt="">

                </div> --}}

            </div>

          </section>

    </div>


  </section>



    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingCRM_2022_5',
        'enableTitle' => true,
        'titlePrincipal' => '
<span class="greenBlueColor">Además de gestionar tu base de datos,</span> <br class="desktopTabletElement">
conoce todo lo que puedes lograr con Escala
        ',
        'subTitlePrincipal' => '
Tu CRM ya viene integrado a <strong>la plataforma “todo-en-uno” de marketing digital <br class="desktopTabletElement"> y ventas </strong> más completa de todas y fácil de usar
        ',
        'overlay' => false,
        'enableButton' => false,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3a.png'),
                'title' => '<span style="color: #150D27;">
                    Date a conocer con landing <br class="space">
pages vendedoras
                </span>',
                'text' => '
Crea en minutos landing pages optimizadas para darte a <br class="desktopTabletElement">
conocer y capturar la data de tus visitantes mediante <br class="desktopTabletElement">
formularios integrados a tu CRM. Elige una de nuestras <br class="desktopTabletElement">
plantillas, personalízala y publícala en un clic, sin <br class="desktopTabletElement">
programar o diseñar.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_marketing_2d.png'),
                'title' => '<span style="color: #150D27;">
                    Automatiza para personalizar <br class="space">
tu comunicación y convertir más
                </span>',
                'text' => '
Automatiza el flujo de tus acciones de marketing y ventas: <br class="desktopTabletElement">
enviar emails, recordatorios a tu equipo de ventas <br class="desktopTabletElement">
(llamadas, tareas y actividades). Programa todo en base a <br class="desktopTabletElement">
patrones de comportamiento de tus contactos para <br class="desktopTabletElement">
aumentar tu conversión y retención.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_marketing_2c.png'),
                'title' => '<span style="color: #150D27;">
                    Envía Emails <br class="space">
profesionales

                </span>',
                'text' => '
Nutre la relación con tus contactos enviando efectivas <br class="desktopTabletElement">
campañas de emails. Con nuestras plantillas prediseñadas <br class="desktopTabletElement">
logras enviar masivamente mensajes personalizados con <br class="desktopTabletElement">
tan solo un clic.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3b.png'),
                'title' => '<span style="color: #150D27;">
Multiplica tus visitas con <br class="space">
anuncios digitales de Facebook
                </span>',
                'text' => '
Comienza a generar tráfico a tu landing page. <br class="space">
Crea, publica y gestiona campañas de anuncios <br class="desktopTabletElement">
digitales directamente desde Escala.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_2d.png'),
                'title' => '<span style="color: #150D27;">
Ten la visibilidad de <br class="space">
la salud de tu negocio
                </span>',
                'text' => '
Lo que no se mide, no mejora. Escala te da las analíticas <br class="desktopTabletElement">
necesarias en dashboards amigables para que optimices <br class="desktopTabletElement">
tus esfuerzos de venta y marketing.
                ',
                'enableButton' => false,
            ],

        ],
    ];
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2



<section class="customSection sectionParent landingCRM_2022_6">

    <div class="section-row">

        <section class="innerSectionElement1">

          <div class="imagesSection">

              <div class="element">

                  <img  src="{!! App::setFilePath('/assets/images/illustrations/otto/otto_escala_CRM_gestion_datos_1.png') !!}" alt="">

              </div>
          </div>

        </section>
          <section class="innerSectionElement2">

            <h2 class="primaryTitle whiteColor">
El CRM de Escala es genial, <br class="space">
es como tener un súper gerente <br class="space">
de ventas ayudándote
            </h2>

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
                Quiero comenzar ahora
              </a>


          </section>


    </div>

</section>


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingCRM_2022_7',
    'enableTitle' => true,
    'titlePrincipal' => '
    CRM de Escala viene repotenciado <br class="space">
con un servicio premium
    ',
    'subTitlePrincipal' => '
    No solo te ayudamos a optimizar la gerencia de tu base de datos, <br class="desktopTabletElement">
también te vamos a acompañar en todo el camino al éxito
    ',
    'overlay' => false,
    'enableButton' => true,
    'urlButton' => '#',
    'textButton' => '¡Comenzar ahora!',
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_01.png'),
            'title' => '<span class="greenBlueColor7">
                Acompañamiento Premium
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_02.png'),
            'title' => '<span class="greenBlueColor7">
                Formación constante
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_03.png'),
            'title' => '<span class="greenBlueColor7">
                Atención oportuna
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_04.png'),
            'title' => '<span class="greenBlueColor7">
                Servicios especializados
                </span>',
            'enableButton' => false,
        ],


    ],
];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2


@php
$parameters = [
    'classSection' => 'landingCRM_2022_8',
    'title' => '
Quiero el CRM de Escala para <br class="desktopTabletElement">
personalizar mis campañas
        </span>',
        'textForm' => 'Empieza a probar Escala',
    'text' => null,
    'image' => App::setFilePath('/assets/images/illustrations/others/contactos_escala_CRM_gestion_datos_1.png'),
    'side' => 'left',
    'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => '¡Comenzar ya!',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



</div>

</div>



@endsection




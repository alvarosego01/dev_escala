{{--

    Template Name: [B] Escala subpages - Ventas V2

--}}

@extends('layouts.app')
@section('content')

<div id="bootstrap-escala-subpages-ventas-2">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol escalaVentas2Section0',
     'title' => '<span style="color: #B9E6E9">
        Aumenta tus <br class="space"> ventas con Escala
        </span>',
     'text' => '<span class="whiteColor">
        Escala es la plataforma todo en uno diseñada <br class="space">
        para acelerar el crecimiento de tus ventas y <br class="space">
        aumentar la productividad de tu equipo. Todas <br class="space">
        las herramientas que necesitas en un solo lugar.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Comienza ahora',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_laptop.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1

@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'escalaVentas2Section1',
    'enableTitle' => true,
    'titlePrincipal' => '
    ¡Que no se te escape <br class="mobileElement"><span class="greenBlueColor">ningún lead!</span>
    ',
    'subTitlePrincipal' => 'Con las funcionalidades de ventas de <strong>Escala</strong> podrás lograr:',
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => '¡Comenzar ahora!',
    // 'typeButton' => 'primaryButton hoverInEffect',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_1a.png'),
            'title' => '<span class="grayColorTexts5">
        Organizar y gestionar <br class="space">
tu base de datos
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_1b.png'),
            'title' => '<span class="grayColorTexts5">
Guardar información relevante <br class="space">
sobre tus contactos
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_1c.png'),
            'title' => '<span class="grayColorTexts5">
Gestionar y automatizar <br class="space">
tus  procesos de venta
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_1d.png'),
            'title' => '<span class="grayColorTexts5">
Vender con o sin <br class="space">
vendedores
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_1e.png'),
            'title' => '<span class="grayColorTexts5">
Aumentar la productividad <br class="space">
de tu equipo
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
    'type' => 'backgroundColor',
    'classSection' => 'escalaVentas2Section2',
    'enableTitle' => false,
    'titlePrincipal' => null,
    'subTitlePrincipal' => null,
    'title' => '
    Con Escala tus clientes <br class="space">
<span class="greenBlueColor">están en el centro de tu estrategia</span>
    ',
    'img' => App::setFilePath('/assets/images/illustrations/others/Group_home1.png'),
    'text' => '
Flywheel es la estrategia de crecimiento acelerado utilizada por Andrés Moreno <br class="desktopTabletElement">
y el grupo de expertos de Escala para acompañarte a alcanzar el éxito, logrando:
<br class="space"><br class="space">
<ul>
  <li>Generar demanda de tus productos y servicios a través de herramientas <br class="desktopTabletElement"> de marketing digital</li>
  <li>Aumentar las ventas gestionando todo el proceso desde un solo lugar</li>
  <li>Aumentar la retención de tus clientes creando relaciones a largo plazo</li>
</ul>
<br class="space">
<p class="text"><strong>Impulsa el crecimiento de tu negocio con Escala.</strong></p>
    ',
    'enableButton' => false,
    // 'urlButton' => App::setTypeUrl().'/zoom-meeting',
    // 'typeButton' => 'primaryButton',
    // 'textButton' => 'Hablar con un asesor',
    'side' => 'left',
];
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1




    <section class="customSection sectionParent escalaVentas2Section3">

        <div class="section-row">

          <section class="innerSectionElement sct1">

            <div class="containElements">

              <h2 class="primaryTitle blackColor">
                <span class="greenBlueColor">El CRM de Escala</span> <br class="desktopTabletElement">
                la máquina de ventas de tu negocio
              </h2>
              <p class="primaryText grayColorTexts">
                Aumenta tus ventas y la productividad de tu equipo con el CRM más fácil de usar del mercado, <br class="desktopTabletElement">
                el arma secreta de los negocios para escalar con éxito.
              </p>

            </div>

          </section>
          <section class="innerSectionElement sct2">

            <div class="groupElements row">



              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Crea increíbles páginas sin programar" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_2a.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Todo tu equipo <br class="space">
en una sola plataforma
                  </h3>
                  <p class="primaryText  grayColorTexts">
                    En el CRM de Escala, tu equipo de ventas trabajará <br class="desktopTabletElement">
                    de manera integrada, cada miembro de tu equipo <br class="desktopTabletElement">
                    tendrá un rol administrando, editando y programando <br class="desktopTabletElement">
                    el día a día de trabajo.
                  </p>
                </div>

              </div>

              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Organiza tus contactos y gestiona procesos de venta" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_2b.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
                    Formularios integrados. <br class="space">
Guarda tu data automáticamente
                  </h3>
                  <p class="primaryText  grayColorTexts">
Toda la información que registren tus visitantes en <br class="desktopTabletElement">
nuestros formularios integrados será guardada, de <br class="desktopTabletElement">
manera automática en tu CRM de Escala. Olvídate de <br class="desktopTabletElement">
perder datos clave.

                  </p>
                </div>

              </div>

            </div>
            <div class="groupElements row">
              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Envía emails de marketing profesionales" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_2c.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
                    Segmenta <br class="space">
a tus contactos
                  </h3>
                  <p class="primaryText  grayColorTexts">
Con las etiquetas avanzadas de Escala podrás clasificar <br class="desktopTabletElement">
mejor a tus leads y clientes, personalizando cada <br class="desktopTabletElement">
comunicación para ayudarte a convertir más.
                  </p>
                </div>

              </div>

              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Multiplica tus visitas web con anuncios digitales" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_2d.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
                    Hazle seguimiento <br class="space">
a tus resultados

                  </h3>
                  <p class="primaryText  grayColorTexts">

                    Ten las métricas que necesitas en tiempo real con <br class="desktopTabletElement">
dashboards amigables para saber la salud de tu negocio. <br class="desktopTabletElement">
Cuántas ventas han sido cerradas, cuántas están por <br class="desktopTabletElement">
concretarse, cuál es el vendedor estrella de tu equipo.
                  </p>
                </div>

              </div>
            </div>

            <div class="groupElements row">
              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Automatiza tareas y flujos de comunicación" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_2e.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">

                    No olvides tareas
                  </h3>

                  <p class="primaryText  grayColorTexts">
                    Te ayudamos a organizar el día a día de tu compañía, <br class="desktopTabletElement">
a través de tareas, actividades y recordatorios para cada <br class="desktopTabletElement">
miembro de tu equipo de ventas.
                  </p>
                </div>

              </div>


              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Obtén métricas de marketing y ventas en tiempo real" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_2f.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">

                    Haz mejor seguimiento <br class="space">
con WhatsApp Web Escala

                  </h3>
                  <p class="primaryText  grayColorTexts">
El CRM de Escala te ofrece su integración a tu <br class="desktopTabletElement">
WhatsApp Web para que puedas convertir a cada <br class="desktopTabletElement">
contacto nuevo en un lead, guardando su  información de <br class="desktopTabletElement">
manera automática en tu CRM.
                  </p>
                </div>

              </div>





            </div>


          </section>


        <section class="innerSectionElement sct3">

          <div class="containElements">

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
              ¡Probar Escala ahora!
            </a>

          </div>
        </section>

        </div>

    </section>


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'escalaVentas2Section4',
        'enableTitle' => true,
        'titlePrincipal' => '
        Fortalece tu estrategia de ventas <br class="desktopTabletElement">
<span class="greenBlueColor">con más funcionalidades</span>
        ',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'overlayImage' => null,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect goToHash',
        'elements' => array(
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3a.png'),
                        'title' => '<span class="greenBlueColor">
                            Landing pages
                            </span>',
                        'text' => '
                        Da a conocer tus productos o servicios con landing <br class="desktopTabletElement">
                        pages optimizadas. Créalas, personalízalas y <br class="desktopTabletElement">
                        publícalas con un clic, sin programar, ni diseñar.
                        ',
                        'enableButton' => false,

                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3b.png'),
                        'title' => '<span class="greenBlueColor">
                            Ads de Facebook
                            </span>
                        ',
                        'text' => '
                          Atrae a más clientes potenciales con anuncios <br class="desktopTabletElement">
                          digitales de Instagram y Facebook. Crea, administra y publica tus <br class="desktopTabletElement">
                          campañas desde Escala generando más tráfico a tus <br class="desktopTabletElement">
                          páginas vendedoras.
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3c.png'),
                        'title' => '<span class="greenBlueColor">
                            Automatización
                            </span>',
                        'text' => '
                        No hagas tareas repetitivas. Ahorra tiempo <br class="desktopTabletElement">
                        programando workflows, envío de emails y <br class="desktopTabletElement">
                        asignación de tareas, actividades y recordatorios a tu <br class="desktopTabletElement">
                        equipo de ventas.
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3d.png'),
                        'title' => '<span class="greenBlueColor">
                            Email Marketing
                            </span>',
                        'text' => '
                          Crea y envía campañas personalizadas de email para <br class="desktopTabletElement">
                          potenciar tus ventas y lograr: <br class="space">
                          <ul>
                            <li>Dar a conocer tus nuevos productos o servicios</li>
                            <li>Comunicar ofertas de temporada</li>
                            <li>Promocionar productos customizados</li>
                            <li>Aumentar upsells con clientes actuales</li>
                          </ul>
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3e.png'),
                        'title' => '<span class="greenBlueColor">
                          Analíticas
                            </span>',
                        'text' => '
                            Ten todas las analíticas relevantes para ver cómo van <br class="desktopTabletElement">
                            tus ventas: oportunidades abiertas, oportunidades <br class="desktopTabletElement">
                            ganadas, oportunidades en desarrollo. Cuenta con <br class="desktopTabletElement">
                            dashboards amigables y evalúa tus ganancias y la <br class="desktopTabletElement">
                            productividad de tu equipo de trabajo. Optimiza y <br class="desktopTabletElement">
                            mejora tus resultados en tiempo real.
                        ',
                        'enableButton' => false,
                    ],
        )
    ];
    @endphp

    @contain_5_cards_T1( $parameters )
    @endcontain_5_cards_T1


    <section class="customSection sectionParent escalaVentas2Section5">

      <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="groupElements row">

              <div class="col-md-12 col-lg-7 info">

                <div class="containElements">

                  <p class="primaryText grayColorTexts description">
                    “Yo ya había utilizado un CRM y otras plataformas que <br class="desktopTabletElement">
                    tienen más o menos la misma esencia. Encontrarme con <br class="desktopTabletElement">
                    Escala fue importante porque es más completa. Tienes todo <br class="desktopTabletElement">
                    lo que necesitas desde captar el interés de cliente, hacer <br class="desktopTabletElement">
                    seguimiento y medir indicadores de desempeño de tu equipo <br class="desktopTabletElement">
                    de ventas hasta estandarizar el proceso de la comunicación”
                </p>


                <div class="personData">

                  <div class="logo">
                    <div class="containerImage">
                      <img src="{!! App::setFilePath('/assets/images/logos/Infinito Producciones copia.png') !!}" alt="" loading="lazy">
                    </div>

                  </div>

                  <h2 class="team whiteColor">
                    Michell Pelaez <br class="space">
                    <span class="blueLightColor11">Ejecutiva de Cuentas Corporativas</span> <br class="space">
                    <span>Infinito Producciones</span>
                  </h2>

                </div>

              </div>

              </div>
              <div class="col-md-12 col-lg-5 image">

                <div class="containerImage">
                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/CRM_escala_ventas.png') !!}" alt="" loading="lazy">
                </div>


            </div>

          </div>

        </section>

      </div>

    </section>


  @php
  $parameters = [
      'classSection' => 'escalaVentas2Section6',
      'title' => '
      ¿Listo para acelerar <br class="desktopTabletElement">
el crecimiento de tu negocio?
      ',
      'textForm' => 'Pruébalo gratis ahora',
      'text' => null,
      'image' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_pantalla.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1






</div>

</div>

</div>




@endsection
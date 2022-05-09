{{--

    Template Name: [B] Escala subpages - Marketing V2

--}}

@extends('layouts.app')
@section('content')

<div id="bootstrap-escala-subpages-marketing-2">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol escalaMarketing2Section0',
     'title' => '<span style="color: #B9E6E9">
        Con Escala genera más <br class="space">
leads online
        </span>',
     'text' => '<span class="whiteColor">
        Desarrolla potentes campañas <br class="space">
de marketing digital, sin depender de equipos <br class="space">
de programación o integración
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Comienza ahora',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/tablet_marketing_1.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1

@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'escalaMarketing2Section1',
    'enableTitle' => true,
    'titlePrincipal' => '
    Acelera el éxito <span class="greenBlueColor">de tu negocio</span>
    ',
    'subTitlePrincipal' => '
    Las funcionalidades de marketing digital de <strong>Escala</strong> te permiten hacer crecer tu negocio <br class="desktopTabletElement">
    de manera rentable y sostenible. Con nuestra plataforma lograrás:
    ',
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => '¡Comenzar ahora!',
    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_2a.png'),
            'title' => '<span class="grayColorTexts5">
Dar a conocer <br class="space">
tu negocio
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_marketing_1b.png'),
            'title' => '<span class="grayColorTexts5">
Multiplicar el interés <br class="space">
por tus productos y servicios
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_marketing_1c.png'),
            'title' => '<span class="grayColorTexts5">
Cerrar más <br class="space">
ventas
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_marketing_1d.png'),
            'title' => '<span class="grayColorTexts5">
Fidelizar <br class="space">
a tus clientes
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
    'classSection' => 'escalaMarketing2Section2',
    'enableTitle' => false,
    'titlePrincipal' => null,
    'subTitlePrincipal' => null,
    'title' => '
    Con Escala tus clientes <br class="space">
<span class="greenBlueColor">están en el centro de tu estrategia</span>
    ',
    'img' => App::setFilePath('/assets/images/illustrations/others/flywheel_marketing.png'),
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




    <section class="customSection sectionParent escalaMarketing2Section3">

        <div class="section-row">

          <section class="innerSectionElement sct1">

            <div class="containElements">

              <h2 class="primaryTitle blackColor">
                Descubre cómo optimizar <br class="desktopTabletElement">
                <span class="greenBlueColor">tu Marketing Digital con Escala</span>
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
                  <img alt="Crea increíbles páginas sin programar" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3b.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Llega a más clientes potenciales <br class="space">
con Ads de Instagram y Facebook
                  </h3>
                  <p class="primaryText  grayColorTexts">
Crea, publica y gestiona tus campañas de anuncios digitales, <br class="desktopTabletElement">
sin salir de Escala. De la manera más fácil e intuitiva, ten <br class="desktopTabletElement">
visibilidad sobre el retorno de inversión con analíticas <br class="desktopTabletElement">
relevantes que se integran a tus esfuerzos de venta.
                  </p>
                </div>

              </div>

              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Organiza tus contactos y gestiona procesos de venta" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3a.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Motiva a tu audiencia ideal <br class="space">
a registrarse en tus Landing pages
                  </h3>
                  <p class="primaryText  grayColorTexts">
En Escala puedes construir rápidamente páginas <br class="desktopTabletElement">
optimizadas para comunicar tu propuesta de valor y <br class="desktopTabletElement">
capturar la información de contacto de tus visitantes. <br class="desktopTabletElement">
Hay cientos de plantillas prediseñadas, listas para que <br class="desktopTabletElement">
las personalices y publiques sin necesitar programación.
                  </p>
                </div>

              </div>

            </div>
            <div class="groupElements row">
              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Envía emails de marketing profesionales" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_marketing_2c.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Convierte leads en clientes <br class="space">
con el CRM de Escala
                  </h3>
                  <p class="primaryText  grayColorTexts">
Guarda, organiza y gestiona tu base de datos de posibles <br class="desktopTabletElement">
clientes con el CRM de Escala. Así podrás darle <br class="desktopTabletElement">
seguimiento a cada lead hasta cerrar la venta. Segméntalos <br class="desktopTabletElement">
con etiquetas avanzadas para enviarles campañas <br class="desktopTabletElement">
personalizadas y haz más productivo a tu equipo de ventas <br class="desktopTabletElement">
asignándoles tareas, actividades y recordatorios.
                  </p>
                </div>

              </div>

              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Multiplica tus visitas web con anuncios digitales" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_marketing_2d.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Mantén comunicación constante <br class="space">
con campañas de email marketing

                  </h3>
                  <p class="primaryText  grayColorTexts">
Segmenta tu base de datos y envía mensajes relevantes <br class="desktopTabletElement">
en el momento oportuno para potenciar tu crecimiento. <br class="space">
Es fácil y rápido.  Diseña hermosos emails <br class="desktopTabletElement">
personalizando plantillas y envíalos masivamente con <br class="desktopTabletElement">
solo un clic,  sin caer en la bandeja de spam.
                  </p>
                </div>

              </div>
            </div>

            <div class="groupElements row">
              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Automatiza tareas y flujos de comunicación" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_marketing_2e.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
                    Deja de hacer tareas repetitivas. <br class="space">
Automatiza y aumenta tu productividad
                  </h3>

                  <p class="primaryText  grayColorTexts">
Programa el envío de emails y recordatorios para que no <br class="desktopTabletElement">
pierdas oportunidades  de venta. Automatiza tareas como la <br class="desktopTabletElement">
asignación de leads a vendedores, el cambio de status en el <br class="desktopTabletElement">
CRM y la segmentación de tu base de datos para que ahorres <br class="desktopTabletElement">
tiempo y energía al escalar tu negocio.
                  </p>
                </div>

              </div>


              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Obtén métricas de marketing y ventas en tiempo real" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_marketing_2f.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Mide y optimiza tus resultados <br class="space">
con analíticas relevantes
                  </h3>
                  <p class="primaryText  grayColorTexts">
Ten visibilidad sobre las métricas que realmente <br class="desktopTabletElement">
importan para entender qué funciona y qué puedes <br class="desktopTabletElement">
mejorar para optimizar tu marketing digital. Cuenta con <br class="desktopTabletElement">
dashboards amigables que miden el rendimiento de ads, <br class="desktopTabletElement">
landing pages y campañas de emails.
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


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'escalaMarketing2Section4',
        'enableTitle' => true,
        'titlePrincipal' => '
<span class="whiteColor">
En Escala siempre te damos más
  </span>
        ',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'overlayImage' => null,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Probar Escala ahora!',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022 goToHash',
        'elements' => array(
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_marketing_3a.png'),
                        'title' => '<span class="whiteColor">
                            No pierdas ningún dato con <br class="space">
los Formularios Integrados
                            </span>',
                        'text' => '
                        Cuando tus visitantes registran su información de contacto <br class="desktopTabletElement">
en los formularios integrados de tus landing pages, queda <br class="desktopTabletElement">
guardada automáticamente en el CRM de Escala. Así tienes <br class="desktopTabletElement">
mejor control de la data.
                        ',
                        'enableButton' => false,

                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_marketing_3b.png'),
                        'title' => '<span class="whiteColor">
                            Haz mejor seguimiento con <br class="space">
WhatsApp Web Escala
                            </span>
                        ',
                        'text' => '
                          El CRM de Escala te ofrece su integración a tu WhatsApp <br class="desktopTabletElement">
Web para que puedas convertir a cada contacto nuevo en un <br class="desktopTabletElement">
lead. Guarda la información de manera automática en tu CRM <br class="desktopTabletElement">
y gestiona el seguimiento de una manera fácil y efectiva.
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_marketing_3c.png'),
                        'title' => '<span class="whiteColor">
                            Te orientamos <br class="space">
a escalar con éxito
                            </span>',
                        'text' => '
                        Nuestro equipo te brinda las herramientas y recursos que <br class="desktopTabletElement">
necesitas para conseguir resultados con Escala según tus <br class="desktopTabletElement">
objetivos, experiencia y necesidades.
                        ',
                        'enableButton' => false,
                    ],

        )
    ];
    @endphp

    @contain_5_cards_T1( $parameters )
    @endcontain_5_cards_T1


    <section class="customSection sectionParent escalaMarketing2Section5">

      <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="groupElements row">

              <div class="col-md-12 col-lg-7 info">

                <div class="containElements">

                  <p class="primaryText grayColorTexts description">
                    “Escala tiene el email builder más amigable que <br class="desktopTabletElement">
he utilizado en los últimos años y su equipo está <br class="desktopTabletElement">
comprometido a mantener la plataforma en constante <br class="desktopTabletElement">
actualización en el dinámico mundo digital”
                </p>


                <div class="personData">

                  <div class="logo">
                    <div class="containerImage">
                      <img src="{!! App::setFilePath('/assets/images/logos/Publicidad-Comercial2.png') !!}" alt="" loading="lazy">
                    </div>

                  </div>

                  <h2 class="team whiteColor">
                    Verónica Bolaños <br class="space">
                    <span class="greenBlueColor">Publicidad Comercial </span> <br class="space">
                    <span>Account Manager</span>
                  </h2>

                </div>

              </div>

              </div>
              <div class="col-md-12 col-lg-5 image">

                <div class="containerImage">
                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/escala_marketing_leads.png') !!}" alt="" loading="lazy">
                </div>


            </div>

          </div>

        </section>

      </div>

    </section>


  @php
  $parameters = [
      'classSection' => 'escalaMarketing2Section6',
      'title' => '
¿Listo para acelerar <br class="space">
el crecimiento de tu negocio?
      ',
      'textForm' => 'Pruébalo gratis ahora',
      'text' => null,
      'image' => App::setFilePath('/assets/images/person/hombre_puf_emailmk_1.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1






</div>

</div>

</div>




@endsection
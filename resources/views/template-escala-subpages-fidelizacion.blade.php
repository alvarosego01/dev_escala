{{--

    Template Name: [B] Escala subpages - Fidelización v2

--}}

@extends('layouts.app')
@section('content')

<div id="bootstrap-escala-subpages-fidelizacion">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol escalaFidelizacionSection0',
     'title' => '<span style="color: #B9E6E9">
Fideliza a más <br class="space">
clientes con Escala
        </span>',
     'text' => '<span class="whiteColor">
Construye relaciones a largo plazo con tus clientes <br class="space">
generando: upsells, recompras y recomendaciones <br class="space">
para acelerar el crecimiento de tu negocio.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/escala_tablet_fidelizacion.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1

@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'escalaFidelizacionSection1',
    'enableTitle' => true,
    'titlePrincipal' => '
    ¿Cómo logras fidelizar <br class="mobileElement"><span class="greenBlueColor">a tus clientes con Escala?</span>
    ',
    'subTitlePrincipal' => '
    Con las funcionalidades de retención de Escala fideliza a más clientes, conviértelos en <br class="desktopTabletElement"> fans de tu marca alcanzando estos objetivos:
    ',
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => 'Recibe un demo',
    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_fidelizacion_01a.png'),
            'title' => '<span class="grayColorTexts5">
Generar  recompras <br class="space">
y upsells
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_fidelizacion_01b.png'),
            'title' => '<span class="grayColorTexts5">
Evaluar tus productos <br class="space">
o servicios
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_fidelizacion_01c.png'),
            'title' => '<span class="grayColorTexts5">
Conseguir <br class="space">
referidos
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_fidelizacion_01d.png'),
            'title' => '<span class="grayColorTexts5">
Lanzar nuevas <br class="space">
ofertas
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/escala_marketing_1d.png'),
            'title' => '<span class="grayColorTexts5">
Mantener una relación <br class="space">
a largo plazo con <br class="space">
tus clientes
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
    'classSection' => 'escalaFidelizacionSection2',
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

    // 'typeButton' => 'primaryButton',
    // 'textButton' => 'Hablar con un asesor',
    'side' => 'left',
];
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1

    <section class="customSection sectionParent escalaFidelizacionSection3">

        <div class="section-row">

          <section class="innerSectionElement sct1">

            <div class="containElements">

              <h2 class="primaryTitle blackColor desktopElement">
                <span class="greenBlueColor">
                  ¿Cuáles son las funcionalidades de Escala</span> <br class="desktopTabletElement">
que te permiten fidelizar más clientes?
              </h2>
              <h2 class="primaryTitle blackColor mobileElement">
                <span class="greenBlueColor">
                  ¿Cuáles son las funcionalidades </span> <br class="desktopTabletElement">
                  de Escala que te permiten fidelizar más clientes?
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
                  <img alt="Crea increíbles páginas sin programar" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3a.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Atrapa la atención de tus <br class="space">
clientes con Landing pages
                  </h3>
                  <p class="primaryText  grayColorTexts">
Crea y publica landing pages optimizadas en minutos <br class="desktopTabletElement">
para lanzar nuevos productos y servicios personalizados <br class="desktopTabletElement">
por tipo de clientes. Solo debes elegir la plantilla que más <br class="desktopTabletElement">
se adapta a tu nuevo lanzamiento, personalizarla y con un <br class="desktopTabletElement">
clic publicarla. Páginas que darán a conocer esa interesante <br class="desktopTabletElement">
oferta que atrapará nuevamente la atención de tu cliente, <br class="desktopTabletElement">
sin necesidad de programar o diseñar.
                  </p>
                </div>

              </div>

              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Organiza tus contactos y gestiona procesos de venta" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_marketing_2c.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Mantén enamorados a tus <br class="space">
clientes con el CRM de Escala
                  </h3>
                  <p class="primaryText  grayColorTexts">
Con el CR M de Escala puedes gestionar los contactos, las <br class="desktopTabletElement">
oportunidades abiertas, los programas de recomendaciones y el <br class="desktopTabletElement">
historial de acciones de tu equipo de ventas para lograr que ese <br class="desktopTabletElement">
cliente haga upsells y recompras. Además con el CRM de Escala <br class="desktopTabletElement">
puedes mantener comunicación constante conociendo sus <br class="desktopTabletElement">
intereses a profundidad y segmentándolos con tus etiquetas <br class="desktopTabletElement">
avanzadas para crear campañas personalizadas.
                  </p>
                </div>

              </div>

            </div>
            <div class="groupElements row">
              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Envía emails de marketing profesionales" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_marketing_3a.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
No pierdas ningún dato <br class="space">
con los Formularios integrados
                  </h3>
                  <p class="primaryText  grayColorTexts">
Cada vez que tus clientes llenan los <br class="desktopTabletElement">
formularios integrados, sus datos se guardan <br class="desktopTabletElement">
automáticamente en el CRM de Escala, asociados a la <br class="desktopTabletElement">
landing que despertó su interés. Así puedes tener un mejor <br class="desktopTabletElement">
control del seguimiento hasta cerrar la nueva venta.
                  </p>
                </div>

              </div>

              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Multiplica tus visitas web con anuncios digitales" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3d.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Comunícate constantemente <br class="space">
con tu Email Marketing

                  </h3>
                  <p class="primaryText  grayColorTexts">
Mantén la llama viva y comunicación constante, <br class="desktopTabletElement">
enviándoles campañas de email marketing para: <br class="space">
<ul>
  <li class="primaryText grayColorTexts">Evaluar cómo se sienten con tus productos o <br class="desktopTabletElement"> servicios</li>
  <li class="primaryText grayColorTexts">Informarles nuevos lanzamientos</li>
  <li class="primaryText grayColorTexts">Crear conectividad emocional en fechas importantes <br class="desktopTabletElement"> para ellos</li>
  <li class="primaryText grayColorTexts">Brindarles promociones customizadas</li>
</ul>
                  </p>
                </div>

              </div>
            </div>

            <div class="groupElements row">
              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Automatiza tareas y flujos de comunicación" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3c.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Automatiza para ahorrar tiempo
                  </h3>

                  <p class="primaryText  grayColorTexts">
Para estar en contacto de forma permanente, programa flujos <br class="desktopTabletElement">
automatizados de emails y tareas para tu fuerza de ventas. <br class="desktopTabletElement">
Ahorra tiempo en tareas repetitivas y llega a tus clientes <br class="desktopTabletElement">
en el momento correcto con la oferta correcta.
                  </p>
                </div>

              </div>


              <div class="col-12 col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Obtén métricas de marketing y ventas en tiempo real" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_marketing_2f.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
Optimiza con analíticas revelantes
                  </h3>
                  <p class="primaryText  grayColorTexts">
Ten en tiempo real todas las métricas necesarias para <br class="desktopTabletElement">
mejorar tus resultados en marketing digital y ventas.<br class="space">
Cuenta con dashboards amigables para seguir <br class="desktopTabletElement">
enamorando a tus clientes.
                  </p>
                </div>

              </div>


            </div>


          </section>


        <section class="innerSectionElement sct3">

          <div class="containElements">

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
              ¡Recibe un demo!
            </a>

          </div>
        </section>

        </div>

    </section>

{{--
    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'escalaFidelizacionSection4',
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
        'textButton' => '¡Recibe un demo!',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022 goToHash',
        'elements' => array(
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3a.png'),
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
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3b.png'),
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
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3c.png'),
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
    @endcontain_5_cards_T1 --}}


    {{-- <section class="customSection sectionParent escalaFidelizacionSection5">

      <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="groupElements row">

              <div class="col-md-12 col-lg-7 info">

                <div class="containElements">

                  <p class="primaryText grayColorTexts description">
“Tremenda plataforma, todos mis <br class="space">
clientes han aumentado sus nuevas <br class="space">
compras en un 150% con Escala”
                </p>


                <div class="personData">

                  <div class="logo">
                    <div class="containerImage">
                      <img src="{!! App::setFilePath('/assets/images/logos/Publicidad-Comercial2.png') !!}" alt="" loading="lazy">
                    </div>

                  </div>

                  <h2 class="team whiteColor">
                    Lorena  García <br class="space">
                    <span class="greenBlueColor">Inmobiliaria ATA </span> <br class="space">
                  </h2>

                </div>

              </div>

              </div>
              <div class="col-md-12 col-lg-5 image">

                <div class="containerImage">
                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/escala_fidelizacion_tablet_banner.png') !!}" alt="" loading="lazy">
                </div>


            </div>

          </div>

        </section>

      </div>

    </section> --}}


  @php
  $parameters = [
      'classSection' => 'escalaFidelizacionSection6',
      'title' => '
Además de fidelizar a tus clientes,<br class="space">
también podrás generar más leads y <br class="space">
consolidar más ventas.
      ',
      'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
      'text' => null,
      'image' => App::setFilePath('/assets/images/illustrations/others/escala_fidelizacion_leads_contactos_banner.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1






</div>

</div>

</div>




@endsection
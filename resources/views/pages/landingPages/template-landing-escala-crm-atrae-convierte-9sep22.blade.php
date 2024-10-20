
<div id="landing_crm_atrae_convierte_funcionalidades">
  <div class="sections">

    @php
    $parameters = array(
     'backgroundImageType' => true,
     'overlay' => false,
     'classSection' => 'threeCol landing_crm_atrae_convierte_funcionalidades_0 newHome',
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
     'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
     'backgroundImage' => App::setFilePath('/assets/images/backgrounds/fondo banner principal.png'),
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/home_header_person.png'),
'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM'
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1


    <section class="customSection sectionParent landing_crm_atrae_convierte_funcionalidades_1_1">

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
                    +4.5M
                  </span>
              </div>
              <p class="text">
                Emails enviados <br class="space">
                con Escala
              </p>
            </div>
            <div class="element">
              <div class="numbers">
                  <span>
                    +5000
                  </span>
              </div>
              <p class="text">
                Aplicaciones que se <br class="space"> pueden integrar a Escala
              </p>
            </div>

          </div>

        </section>

  </div>

    </section>


@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'landing_crm_atrae_convierte_funcionalidades__1_2',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => '
  “Después de décadas construyendo negocios, creamos <br class="DT_e">
Escala basándonos en nuestra <strong>
  metodología para escalar <br class="DT_e">
  pequeñas y medianas empresas”
</strong>.
    <br class="space"><br class="space">
    <span>
      <span>- Andrés Moreno</span> <br class="space">
      <small>Fundador de Escala y Open English</small>
    </span>
',
'typeVideo' =>  'localvideo',
  'videoEmbed' =>  App::setFilePath('/assets/videos/Comercial_escala_registro_lead_1.mp4'),
  'videoCover' => App::setFilePath('/assets/images/illustrations/others/portada_video_andres.jpg'),
  'text' => '
<span>
  Reconocido "Emprendedor de la Década", con apariciones en:
  </span>
<div class="specialIcons">
  <img src="'.App::setFilePath('/assets/images/illustrations/others/icon_prensa_cnn.png').'" alt="Escala CNN icono prensa" class="prensaIcon">
  <img src="'.App::setFilePath('/assets/images/illustrations/others/icon_prensa_wst.png').'" alt="Escala The wall street journal icono prensa" class="prensaIcon">
  <img src="'.App::setFilePath('/assets/images/illustrations/others/icon_prensa_bbc.png').'" alt="Escala BBC icono prensa" class="prensaIcon">
  <img src="'.App::setFilePath('/assets/images/illustrations/others/icon_prensa_mh.png').'" alt="Escala The miami herald icono prensa" class="prensaIcon">
  </div>',
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
  'textButton' => 'Recibe un demo',
  'side' => 'right',
 ) ;
@endphp

@contain_text_video_T1( $parameters )
@endcontain_text_video_T1


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landing_crm_atrae_convierte_funcionalidades__1_3',
    'enableTitle' => true,
    'titlePrincipal' => '
       <span class="greenBlueColor">El CRM todo-en-uno de Escala <br class="DT_e"></span>
       Tu Máquina de Marketing y Ventas
    ',
    'subTitlePrincipal' => '
       En el CRM de Escala están todas las herramientas de marketing digital y ventas integradas, <br class="DT_e">
       para que puedas: generar más demanda, aumentar tus ventas y fidelizar más clientes.
    ',
    'overlay' => false,
    'enableButton' => true,
    'urlButton' => '#',
    'textButton' => 'Recibe un demo',
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/CRM_beneficios_iconos_01.png'),
            'title' => '<span class="greenBlueColor">
             Anuncios
                </span>',
             'text' => '
               Atrae leads de calidad con <br class="space">
               Ads de Facebook e <br class="space">
               Instagram desde nuestra <br class="space">
               plataforma
             ',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/CRM_beneficios_iconos_02.png'),
            'title' => '<span class="greenBlueColor">
               Landing pages
             </span>',
            'enableButton' => false,
            'text' => '
               Crea, personaliza y <br class="space">
               publica páginas en <br class="space">
               minutos, sin programar
            '
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/CRM_beneficios_iconos_03.png'),
            'title' => '<span class="greenBlueColor">
               Emails
             </span>',
            'enableButton' => false,
            'text' => '
             Comunícate constantemente <br class="space">
             con tus contactos y crea <br class="space">
             relaciones a largo plazo
            '
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/CRM_beneficios_iconos_04.png'),
            'title' => '<span class="greenBlueColor">
               Automatización
             </span>',
            'enableButton' => false,
            'text' => '
               Ahorra tiempo y dinero <br class="space">
               programando secuencias <br class="space">
               de emails y acciones de <br class="space">
               marketing y ventas
            '
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/CRM_beneficios_iconos_05.png'),
            'title' => '<span class="greenBlueColor">
               Analítica
             </span>',
            'enableButton' => false,
            'text' => '
             Mide en tiempo real tus <br class="space">
             resultados con dashboards <br class="space">
             amigables para optimizar tus <br class="space">
             embudos de ventas
            '
        ]

    ],
];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landing_crm_atrae_convierte_funcionalidades_2',
    'enableTitle' => true,
    'titlePrincipal' => '
    <span class="greenBlueColor">Potencia el crecimiento de tu empresa</span>
    ',
    'subTitlePrincipal' => 'Haz crecer tu empresa de manera rentable, sostenible y escalable.',
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => 'Recibe un demo',
    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022 hoverInEffect',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/generacion-demanda-productos-servicios-escala.png'),
            'img_alt' => 'Ilustración de astronauta recibiendo flechas de juguete en su frente en referencia a la generación de demanda por productos y servicios con Escala como plataforma de marketing y ventas todo en uno para el crecimiento de negocios',
            'title' => '<span class="grayColorTexts5">
          Genera demanda <br class="space">
          de todos tus productos <br class="space">
          y servicios
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/convierte-clics-en-clientes-escala.png'),
            'img_alt' => 'Ilustración de un astronauta celebrando el crecimiento de seguidores en redes sociales en referencia a la conversión de visitas en clientes gracias a Escala',
            'title' => '<span class="grayColorTexts5">
          Convierte clics <br class="space">
          en clientes, <br class="space">
          sin perder ningún dato
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/eficiencia-procesos-venta-escala.png'),
            'img_alt' => 'Ilustración de astronauta celebrando la conquista de la luna con una bandera en referencia a el incremento de la eficiencia de los procesos de venta gracias a Escala',
            'title' => '<span class="grayColorTexts5">
          Haz más eficientes <br class="space">
          tus procesos de <br class="space">
          venta
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/automatizacion-marketing-digital-ventas-escala.png'),
            'img_alt' => 'Ilustración de dos atronautas jugando con aviones de papel en referencia a la automatización de procesos de marketing digital y ventas gracias a Escala',
            'title' => '<span class="grayColorTexts5">
          Ahorra tiempo <br class="space">
          automatizando tus acciones <br class="space">
          de marketing digital y ventas
                </span>',
            'enableButton' => false,
        ],

    ],
];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2


<section class="customSection sectionParent landing_crm_atrae_convierte_funcionalidades_3">

  <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              <span class="greenBlueColor">La plataforma de CRM</span> <br class="space">
              todo-en-uno más poderosa
            </h2>

            <p class="primaryText grayColorTexts">
              En Escala tienes una plataforma de CRM todo-en-uno con todas las funcionalidades integradas <br class="space">
              que necesitas para generar más demanda, aumentar tus ventas y retener más clientes.
            </p>

          </div>

        </section>

        <section class="innerSectionElement sct2">

          <div class=" row groupElements">

            <div class="image col-md-12 col-lg-6">

              <div class="containElements">

                <div class="containerImage">
                  <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/CRM_home.png') !!}" alt="" loading="lazy">
                </div>

              </div>

            </div>
            <div class="info col-md-12 col-lg-6">
              @php
                  $elements = array(
                    [
                      'title' => 'Crea increíbles páginas sin programar.',
                      'text' => '¡Y que queden hermosas!'
                    ],
                    [
                      'title' => 'Envía emails de marketing profesionales.',
                      'text' => 'Personalizados y masivos, sin caer en la bandeja de SPAM'
                    ],
                    [
                      'title' => 'Automatiza tareas y flujos de comunicación.',
                      'text' => 'Escala trabaja por ti 24/7'
                    ],
                    [
                      'title' => 'Organiza y gestiona tus ventas con nuestro CRM.',
                      'text' => 'Con el sistema más fácil de usar'
                    ],
                    [
                      'title' => 'Multiplica tus visitas web con anuncios digitales.',
                      'text' => 'En Facebook, Instagram y Google'
                    ],
                    [
                      'title' => 'Obtén métricas de marketing y ventas en tiempo real.',
                      'text' => 'Con Dashboards inteligentes'
                    ],

                  );
              @endphp

              <div class="containElements">

                <ul class="elements">
                  @foreach ($elements as $item)
                  <li class="item">
                    <div class="containerImage">
                      <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector_check.png') !!}" alt="" loading="lazy">
                    </div>
                    <div class="text">
                      <h3>
                        {!! $item['title'] !!}
                      </h3>
                      <p class="text">
                        {!! $item['text'] !!}
                      </p>
                    </div>
                  </li>
                  @endforeach
                </ul>

              </div>

            </div>

          </div>

        </section>


  </div>

 </section>

 @php
 $parameters = [
     'type' => 'backgroundColor',
     'classSection' => 'landing_crm_atrae_convierte_funcionalidades_4',
     'enableTitle' => false,
     'titlePrincipal' => null,
     'subTitlePrincipal' => null,
     'title' => '
       <strong>Los Expertos</strong><br class="space">
       <span class="greenBlueColor">¡Nuestra arma secreta!</span>
       ',
     'img' => App::setFilePath('/assets/images/person/soporte-equipo-escala-clientes.png'),
'img_alt' => 'Foto de una pareja mirando su computador portátil sorprendidos en referencia a la calidad del acompañamiento que brinda el equipo de soporte de Escala',
     'text' => '
          Con el Plan PRO de Escala, nuestros especialistas en <br class="DT_e">
          marketing digital y ventas te guiarán paso a paso para <br class="DT_e">
          que implementes con éxito tu estrategia digital.
     ',
     'enableButton' => false,
     'urlButton' => '#lead-form',
     'textButton' => 'Recibe un demo',
     'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
     'side' => 'left',
 ];
@endphp

@contain_text_image_T1($parameters)
@endcontain_text_image_T1

@php
$parameters = [
'type' => 'backgroundColor',
'classSection' => 'landing_crm_atrae_convierte_funcionalidades_4_2',
'enableTitle' => false,
'titlePrincipal' => null,
'subTitlePrincipal' => null,
'overlay' => false,
'overlayImage' => null,
'enableButton' => false,
'elements' => array(
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/acompanamiento-en-vivo-implementacion-escala.png'),
'img_alt' => 'Ilustración de un astronauta mostrando en su computador un cohete que va de un punto A a un punto B en referencia al acompañamiento en vivo para optimizar la implementación de Escala en una empresa',
               'title' => '
                  Acompañamiento <br class="space">
                  en vivo para optimizar <br class="space">
                  tu implementación
               ',
               'text' => null,
               'enableButton' => false,

           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/capacitaciones-grupales-equipo-escala.png'),
'img_alt' => 'Ilustración de un astronauta mostrando en su computador un cohete que va de un punto A a un punto D en referencia a las capacitaciones grupales que ofrece el equipo de Escala',
               'title' => '
                  Capacitaciones grupales <br class="space">
                  basadas en mejores prácticas <br class="space">
                  y en los casos de éxito de tu industria
               ',
               'text' => null,
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/atencion-prioritaria-clientes-equipo-escala.png'),
'img_alt' => 'Ilustración de un computador con un botón de WhatsApp en referencia a la atención prioritaria por WhatsApp, Email y Chat de parte de nuestro equipo',
               'title' => '
                    Atención prioritaria por <br class="space">
                    WhatsApp, Email y Chat <br class="space">
                    de servicio
                 ',
                 'text' => null,
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/gerente-cuentas-asignado-equipo-escala.png'),
'img_alt' => 'Ilustración de un astronauta con capa y un computador en sus manos en referencia al gerente de cuentas que se asigna a clientes por parte de Escala',
               'title' => '
                      Gerente de cuentas asignado <br class="space">
                      con plan personalizado <br class="space">
                      de implementación
                 ',
                 'text' => null,
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/configuraciones-personalizadas-creacion-plantillas-landing-pages-escala.png'),
'img_alt' => 'Ilustración de una hoja en la se está escribiendo en referencia a las configuraciones personalizadas y creación de plantillas de landing pages por parte del equipo de Escala',
               'title' => '
                    Configuraciones personalizadas <br class="space">
                    y creación de plantillas  de páginas <br class="space">
                    y correos para tu empresa
                 ',
                 'text' => null,
               'enableButton' => false,
           ],
)
];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1


@php
$parameters = [
  'type' => 'backgroundColor',
  'classSection' => 'landing_crm_atrae_convierte_funcionalidades_6',
  'enableTitle' => true,
  'titlePrincipal' => '
      5 Ventajas de potenciar <br class="space">
      <span style="color: #B9E6E9">
      tu empresa con Escala
      </span>

  ',
  'subTitlePrincipal' => null,
  'overlay' => true,
  'overlayImage' => App::setFilePath('/assets/images/overlays/planets_overlay_home.png'),
  'enableButton' => false,
  'elements' => array(
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/escala-plataforma-crm-todo-en-uno-amigable-intuitiva.png'),
'img_alt' => 'Ilustración de una libreta de notas con un imán en referencia a Escala como una plataforma CRM todo en uno amigable e intuitiva',
                  'title' => '
                        Una plataforma <br class="space">
                        CRM todo-en-uno <br class="space">
                        <span class="blueLightColor11">amigable e intuitiva</span>
                      ',
                  'text' => null,
                  'enableButton' => false,

              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/acompanamiento-en-vivo-implementacion-equipo-escala.png'),
'img_alt' => 'Ilustración de una libreta de notas con un imán en referencia a Escala como una plataforma CRM todo en uno amigable e intuitiva',
                  'title' => '
                    Acompañamiento de expertos <br class="space">
                    <span class="blueLightColor11">
                      en vivo para implementar tu <br class="space">
                      estrategia digital con éxito
                    </span>
                  ',
                  'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/funcionalidades-marketing-ventas-fidelizacion-escala.png'),
'img_alt' => 'Ilustración de un megáfono en referencia a todas las funcionalidades de marketing, ventas y fidelización en un solo lugar, Escala',
                  'title' => '
                        Todas las funcionalidades de <br class="space">
                        marketing, ventas y fidelización <br class="space">
                        <span class="blueLightColor11">en un solo lugar</span>
                      ',
                      'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/escala-plataforma-100-espanol-empresas-latam.png'),
'img_alt' => 'Ilustración de un computador con una letra Ñ gigante en su pantalla en referencia a que Escala es una plataforma 100% en español, pensada para impulsar el crecimiento de las empresas latinoamericanas',
                  'title' => '
                        100% en español, <span class="blueLightColor11">
                          pensada para <br class="space">
                          impulsar el crecimiento de las <br class="space">
                          empresas latinoamericanas
                        </span>
                      ',
                      'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/planes-medida-tamano-empresas-escala.png'),
'img_alt' => 'Ilustración de un computador con una línea de crecimiento monetario en su teclado en referencia a los planes hechos a la medida y tamaños de empresas de Escala',
                  'title' => '
                        Con planes hechos a tu medida, <br class="space">
                        <span class="blueLightColor11">
                          del tamaño de las necesidades <br class="space">
                          de tu empresa
                        </span>
                      ',
                      'text' => null,
                  'enableButton' => false,
              ],
  )
];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1

@php
       $parameters = [
        'classSection' => 'landing_crm_atrae_convierte_funcionalidades_7',
        'enableTitle' => true,
        'titlePrincipal' => '
        Nuestros clientes te dicen <br class="space">
        <span class="greenBlueColor">por qué prefieren Escala</span>
        ',
        'subTitlePrincipal' => null,
        'enableContainerButton' => true,
        'urlButton' => '#',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'textButton' => 'Recibe un demo',
        'mob_reviews' => array(
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-1.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-2.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-3.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-4.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-5.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-6.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-7.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-8.jpeg'),
          App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-9.jpeg')
        ),
        'desk_reviews' => array(
          [
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-1.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-2.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-3.jpeg')
          ],
          [
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-4.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-5.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-6.jpeg')
          ],
          [
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-7.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-8.jpeg'),
            App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-9.jpeg')
          ]
        ),
      ];
@endphp

@reviews_sliders_T1( $parameters )
@endreviews_sliders_T1



    <section class="customSection sectionParent landing_crm_atrae_convierte_funcionalidades_8">

      <div class="section-row">


        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              Clientes que hacen crecer sus negocios con <span class="orangeColor">Escala</span>
            </h2>

          </div>

        </section>

        <section class="innerSectionElement sct2">

          <div class="groupElements row">


            <div id="carousel-testimonialHome" class="carousel slide" data-bs-ride="carousel">


              <div class="carousel-inner"  role="listbox">

                  <div class="carousel-item active">
                    <div class="row">
                      <div class="testimonial ">

                        <div class="containElements">


                          <div class="referElements">
                            <div class="containerImage">

                              <img alt="Agencia de Publicidad" src="{!! App::setFilePath('/assets/images/logos/Publicidad-Comercial2.png') !!}" alt="" loading="lazy">


                            </div>

                          </div>

                          <div class="containInfo">
                            <p class="commonText grayColorTexts">
                              “Escala tiene el email builder más amigable que he utilizado en los últimos <br class="D_e"> años, y su equipo está comprometido a mantener la plataforma en <br class="D_e"> constante actualización en el dinámico mundo digital.”
                            </p>
                          </div>

                          <div class="info">
                            <h3 class="tertiaryTitle blackColor">

                              <span class="greenBlueColor">
                                Verónica Bolaños <br class="space">
                                Account Manager / Agencia de Publicidad <br class="space">
                              </span>
                              Publicidad Comercial / El Salvador

                            </h3>

                          </div>

                        </div>


                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">

                    <div class="testimonial ">
                      <div class="containElements">

                        <div class="referElements">
                          <div class="containerImage">

                            <img alt="Agencia de Marketing" src="{!! App::setFilePath('/assets/images/logos/Huella Studio.png') !!}"  alt="" loading="lazy">

                          </div>



                        </div>

                         <div class="containInfo">
                          <p class="commonText grayColorTexts">
                            “Son muchas herramientras integradas en un solo sitio, una herramienta muy <br class="D_e"> sencilla de utilizar y le da mucho beneficio al cliente. Nunca me habían <br class="D_e"> atendido de esta manera en ningún tipo de plataforma similar. Primera vez <br class="D_e"> que me atienden de esta manera y agradecidos enormemente. Felicidades <br class="D_e"> porque tienen un equipo de trabajo increíble.”
                          <p>
                        </div>

                        <div class="info">

                          <h3 class="tertiaryTitle blackColor">

                            <span class="greenBlueColor">
                              Ernesto Valery y Edher Nieves <br class="space">
                              Director Creativo / Agencia de Marketing <br class="space">
                            </span>
                            Huella Studio / México

                          </h3>

                        </div>

                      </div>

                    </div>
                  </div>

                  </div>
                  <div class="carousel-item">
                    <div class="row">

                      <div class="testimonial ">
                        <div class="containElements">

                          <div class="referElements">
                            <div class="containerImage">

                              <img alt="Turismo" src="{!! App::setFilePath('/assets/images/logos/Infinito Producciones copia.png') !!}" alt="" loading="lazy">

                            </div>



                          </div>

                          <div class="containInfo">

                            <p class="commonText grayColorTexts">
                              “Yo ya había utilizado un CRM y otras plataformas que tienen más o menos <br class="D_e"> la misma esencia. Encontrarme con Escala fue importante porque es más <br class="D_e"> completa. Tienes todo lo que necesitas, desde captar el interés de los <br class="D_e">  clientes, hacer seguimiento, medir indicadores de desempeño de tu equipo <br class="D_e"> de ventas, hasta estandarizar el proceso de la comunicación. Ahora que mi <br class="D_e"> mercado se redujo por la pandemia, Escala es sumamente oportuno. <br class="D_e"> Además, estoy muy contenta por todo el apoyo que he recibido por el <br class="D_e"> equipo de Escala.”
                            </p>
                          </div>

                          <div class="info">

                            <h3 class="tertiaryTitle blackColor">

                              <span class="greenBlueColor">
                                Michell Peláez <br class="space">
                                Ejecutiva de cuentas corporativas / Turismo <br class="space">
                              </span>
                              Infinito Producciones / Venezuela

                            </h3>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <div class="carousel-item">
                    <div class="row">

                    <div class="testimonial ">
                      <div class="containElements">


                        <div class="referElements">
                          <div class="containerImage">

                            <img alt="Agencia de Comunicaciones" src="{!! App::setFilePath('/assets/images/logos/Initiative.png') !!}" alt="" loading="lazy">

                          </div>



                        </div>

                        <div class="containInfo">

                          <p class="commonText grayColorTexts">
                            La herramienta es muy amigable, y permite que la gestión pueda realizarla <br class="D_e"> casi que cualquier persona con conocimientos básicos en plataformas <br class="D_e"> digitales.
                            <br class="space">
                            <br class="space">
                            El servicio es expedito y el equipo a cargo se preocupa por extender <br class="D_e"> capacitaciones necesarias que garantizan que los equipos estén sacando <br class="D_e"> el mayor provecho de la herramienta.
                             <br class="space">
                             <br class="space">
                            La organización visual de la pantalla de entrada es muy intuitiva, esto <br class="D_e"> permite la exploración y el autoaprendizaje de las diferentes variables que <br class="D_e"> se pueden configurar en la plataforma.
                          </p>
                        </div>

                        <div class="info">


                          <h3 class="tertiaryTitle blackColor">

                            <span class="greenBlueColor">
                              Dayana Palacios <br class="space">
                              Directora de medios y marketing digital / Agencia de Comunicaciones <br class="space">
                            </span>
                            Initiative / Costa Rica

                          </h3>

                            </div>

                      </div>

                    </div>

                  </div>
                  </div>

                  <div class="carousel-item">
                    <div class="row">

                      <div class="testimonial ">

                        <div class="containElements">

                          <div class="referElements">
                            <div class="containerImage">

                              <img alt="Academia de Coaching" src="{!! App::setFilePath('/assets/images/logos/Logo ILC Academy-1.png') !!}" alt="" loading="lazy">

                            </div>



                          </div>

                          <div class="containInfo">

                            <p class="commonText grayColorTexts">
                              ¡¡¡Extraordinario equipo con conocimientos sólidos de la realidad <br class="D_e">
                              de lanzamientos de iniciativas de aprendizaje y crecimiento!!!
                              <br class="space">
                              🔥🔥🔥🔥👏👏👏👏🙌

                            </p>
                          </div>

                          <div class="info">

                            <h3 class="tertiaryTitle blackColor">

                              <span class="greenBlueColor">
                                Fernando Celis <br class="space">
                                CEO y Fundador / Academia de Coaching <br class="space">
                              </span>
                              ILC Academy / Estados Unidos

                            </h3>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="carousel-item">
                    <div class="row">

                    <div class="testimonial ">

                      <div class="containElements">

                        <div class="referElements">
                          <div class="containerImage">

                            <img alt="Entretenimiento Deportivo" src="{!! App::setFilePath('/assets/images/logos/Savage Paintball.png') !!}" alt="" loading="lazy">

                          </div>



                        </div>

                        <div class="containInfo">

                          <p class="commonText grayColorTexts">
                            Felicitaciones al equipo de Escala, pues de verdad la plataforma me <br class="D_e"> gusta bastante. Posee herramientas muy útiles y lo mejor e  que es <br> simple de manipular.
                          </p>
                        </div>

                        <div class="info">

                          <h3 class="tertiaryTitle blackColor">

                            <span class="greenBlueColor">
                              Felix Pacheco <br class="space">
                              Entretenimiento Deportivo <br class="space">
                            </span>
                            Savage Paintball / Venezuela

                          </h3>

                        </div>

                      </div>

                    </div>


                  </div>
                  </div>

              </div>

              <ol class="carousel-indicators">

                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="4" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel-testimonialHome" data-bs-slide-to="5" aria-label="Slide 3"></button>
              </ol>


            </div>

          </div>



        </section>



      </div>
  </section>



  @php
$escalaUrl = 'https://escala.com';
$items = [
    [
        'type' => 'master',
        'title' => '¿Qué es Escala?',
        'text' => 'Escala es la plataforma todo en uno de marketing digital y ventas que te ayudará a acelerar el éxito de tu negocio, con todas las <br class="D_e"> herramientas en un solo lugar para crecer de una manera constante. Conoce todos los beneficios de Escala:<br class="space"><br class="space">
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
        'text' => 'No. nuestra herramienta es muy intuitiva y fácil de usar. Para que estés más tranquilo, hemos preparado una serie de tutoriales muy <br class="D_e"> prácticos, que te ayudarán a despejar cualquier duda que tengas mientras vives la experiencia. También puedes contar con nuestro <br class="D_e"> acompañamiento, a través de asesorías, que te serán de gran ayuda en los primeros momentos de uso de la plataforma. <a class="hiperButtonGreenBlueT2"href="'.$escalaUrl.'/zoom-meeting">Atención al cliente.</a>'
    ],
    [
        'type' => 'master',
        'title' => '¿Qué incluye?',
        'text' => 'Cuando adquieres cualquiera de los planes de Escala cuentas con: Todas las funcionalidades de marketing digital y ventas, servicio <br class="D_e"> ilimitado y entrenamiento para usar la plataforma.'
    ],
    [
        'type' => 'master',
        'title' => 'Funcionalidades',
        'items' => [
            [
                'title' =>
                    '¿Los embudos de venta aplican para todos los negocios?',
                'text' =>
                    'Así es. Todos los negocios tienen un embudo de ventas, conscientemente o no, dado que buscan atraer leads y convertirlos en <br class="D_e"> clientes. No olvides que un embudo de ventas es una metodología, paso a paso, que puede combinar marketing digital y offline. <br class="D_e"> En Escala tienes todas las funcionalidades para implementarlo de manera fácil, invirtiendo menos recursos, tiempo y dinero.',
                'type' => 'item'
            ],
            [
                'title' => '¿Qué ventajas tiene el CRM de Escala?',
                'text' =>
                    'Esta pregunta es fundamental. Es importante que sepas que el CRM de Escala no solo cuenta con todas opciones para gestionar tus <br class="D_e"> contactos: información relacionada con el nombre, email y teléfono, y de gestión de tu equipo comercial como: actividades, tareas, <br class="D_e"> llamadas y recordatorios hasta cerrar la venta, sino que también es el CRM más fácil de usar de todos. Pruébalo y descúbrelo por ti <br class="D_e"> mismo. ',
                'type' => 'item'
            ],
            [
                'title' => 'El Page builder de Escala ¿cómo funciona?',
                'text' =>
                    'El Page builder de Escala es el más fácil de usar del mercado. Práctico para realizar tus landing pages optimizadas. Tenemos cientos <br class="D_e"> de hermosas plantillas listas para que las personalices y en un clic las puedas publicar. Con formularios capaces de captar toda la <br class="D_e"> data y guardarla automáticamente en tu base de datos. <br class="space"><br class="space"> Fáciles de armar en minutos, 100% responsive y con un subdominio en caso que no tengas dominio propio. Además ya tienen <br class="D_e"> integrado el botón de WhatsApp para que tus visitantes conversen directamente con tu equipo de ventas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿En Escala se puede usar un dominio distinto para cada landing page?',
                'text' =>
                    'Sí, en Escala puedes tener varios dominios para tus landing pages. Solo debes configurarlos y usarlos cuando lo necesites en cada <br class="D_e"> una de tus páginas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Puedo agregar el botón de WhatsApp en las landing pages de Escala?',
                'text' =>
                    'Las landing pages de Escala ya tienen disponible el botón de WhatsApp para que tu cliente pueda tener una conversación más fluida <br class="D_e"> con tu empresa. Se puede encontrar en la pestaña de “WhatsApp” en cada landing. Si la página ya está publicada, tendrás que re-<br class="D_e">publicarla después de activar el botón para que aparezca en tu página. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=5HOSPcDXdTQ&t=4s">Tutorial de Cómo activar botón de WhatsApp.</a> ',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Puedo publicar campañas de anuncios digitales en Escala?',
                'text' =>
                    'En Escala puedes crear, administrar y publicar anuncios digitales de Instagram y Facebook, sin tener que salir de nuestra plataforma. Elige a tu <br class="D_e"> audiencia, presupuesto determinado y genera tráfico a tus landing pages de la manera más fácil y práctica.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Qué tipo de campañas son las que se están creando desde Escala?',
                'text' =>
                    'En Escala puedes crear campañas de anuncios digitales de Instagram y Facebook para lograr generar tráfico a tus landing pages. Su objetivo es <br class="D_e"> atraer posibles clientes (Captura de Leads) para que registren sus datos y con esta información puedas cerrar más ventas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    'En los anuncios digitales de Escala, ¿la propia plataforma maneja el píxel de Facebook o hay que integrarlo desde 0?',
                'text' =>
                    'Para agregar el píxel de Facebook debes ir a "configuración" de Escala, entra a la sección de "píxeles y códigos de seguimiento" y <br class="D_e"> darle clic a "agregar cuenta". Así de fácil es agregar el píxel de Facebook.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Puedo hacer campañas de email marketing en Escala?',
                'text' =>
                    'La respuesta es sí. Haz efectivas campañas de email marketing con sencillas plantillas de email. Realiza envíos masivos sin caer en la <br class="D_e"> bandeja de spam y ten las métricas en tiempo real para mejorar los resultados de tus campañas.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿En qué parte de Escala puedo crear las plantillas de email marketing?',
                'text' =>
                    'En la funcionalidad de plantillas, al darle la opción de “+Crear” arriba a la derecha, puedes elegir esta opción. Haz clic en opciones de <br class="D_e"> plantillas, allí se desplegará las alternativas de: "Plantilla de CRM" o "Plantilla de marketing". Elige “Plantilla de marketing” y <br class="D_e"> comienza a personalizarla. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=E_1VObta6Lk">Tutorial de cómo crear plantillas de Email Marketing.</a> ',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿ Cuáles son las funcionalidades de automatizaciones y analíticas?',
                'text' =>
                    'En Escala te damos todas las métricas para optimizar tus resultados. Tanto en las funcionalidades de marketing como las de ventas <br class="D_e"> tienes dashboards amigables que te permiten ver en tiempo real las métricas que son importantes. <br class="space"><br class="space"> En Escala puedes automatizar flujos de tareas para tu fuerza de ventas, programar workflows de comunicación y de email marketing, <br class="D_e"> para que tu negocio crezca en piloto automático. ',
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
                    'Sí, en Escala puedes utilizar tu dominio tal como se encuentra registrado en tu hosting, para conocer cómo conectarlo puedes <br class="D_e"> visualizar nuestro tutorial: <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=vpdEwrcrZt0&t=44s">Cómo conectar dominio de página.</a> ',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo creo una cuenta?',
                'text' =>
                    'Para crear una cuenta debes ingresar tus datos haciendo clic en en el botón “Recibe un demo” en <a class="hiperButtonGreenBlueT2"href="https://escala.com/">https://escala.com/</a> y te <br class="D_e"> contactará uno de nuestros asesores para comenzar tu free trial.',
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
                    'Si no recuerdas tu contraseña, haz clic en el link de recuperar y te enviaremos un correo <br class="D_e"> para gestionarla de nuevo.',
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
                    'Sí en Escala puedes cancelar tus planes cuando desees, pero sabemos que será tan útil que querrás ir al siguiente nivel. Para cambiar <br class="D_e"> o cancelar tus planes debes contactarte con nuestro equipo, a través de WhatsApp o chat.',
                'type' => 'item'
            ],
            [
                'title' =>
                    '¿Debo pagar por las actualizaciones de la herramienta?',
                'text' =>
                    'No, no debes pagar por las actualizaciones. Solo pagas por las funcionalidades que utilices y si incrementas tu plan será por tus <br class="D_e"> necesidades de contactos de marketing o ventas o porque tu negocio está creciendo y necesitas más usuarios.',
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
                    'En Escala tu data está en buenas manos. Tu información no es vista por nadie, solo por personas de tu equipo y bajo los permisos <br class="D_e"> que hayas asignado. Para nosotros tu seguridad es primero.',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo exportar datos?',
                'text' =>
                    'Podrás exportar la información de tus contactos y oportunidades de ventas desde cada listado en el CRM. Te enviaremos <br class="D_e"> un documento a tu correo con los datos que hayas elegido exportar.',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo importar datos?',
                'text' =>
                    'Puedes importar tus bases de datos al CRM de Escala, solo necesitas guardar la información en un archivo .csv o .txt e iniciar el <br class="D_e"> proceso desde el listado de contactos. Chequea nuestro tutorial: <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=2bJFjHWbI1E">Ver tutorial</a>',
                'type' => 'item'
            ],
            [
                'title' => '¿Cómo conceder accesos e invitar a terceros?',
                'text' =>
                    'Puedes agregar a terceros y a todos los miembros de tu equipo de trabajo para hacer más eficiente tu gestión. Es muy fácil te <br class="D_e"> invitamos a ver todo el detalle en este práctico tutorial. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=dCrD2cD_Xpw">Ver tutorial</a>',
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
                    'En Escala tu crecimiento de negocio es vital para nosotros por eso, siempre tendrás la asesoría de un experto en marketing digital y <br class="D_e"> ventas acompañándote en todo el camino. <a class="hiperButtonGreenBlueT2"href="' .
                    $escalaUrl .
                    '/zoom-meeting">Link con asesor</a>',
                'type' => 'item'
            ],
            [
                'title' => '¿Con quién puedo conectar para recibir asistencia?',
                'text' =>
                    '<span style="color:#34768a">Si tienes dudas sobre cualquier cosa puedes:</span> <br class="D_e"> <ul style="color:#34768a"class="accordionSpecial"><li>1. Ver nuestros tutoriales de uso en nuestro canal de youtube. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/channel/UCiDlXaq67qVf8lSTurRS8lQ">Escala en Youtube</a></li><li>2. Hablar con un asesor. <a class="hiperButtonGreenBlueT2"href="' .
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
                    'Escala Academy es el programa de formación constante, mediante el cual te daremos todo el conocimiento de marketing digital y <br class="D_e"> ventas para hacerte un experto. <br class="space"><br class="space"> Escala Academy: <br class="D_e"> <ul style="color:#34768a"class="accordionSpecial"><li>Tutoriales funcionalidades.</li><li>Blog Escala.</li><li>Workshops para tu empresa.</li><li>Webinars especializados en temas (Escalatones).</li><li>Programas de Éxito.</li></ul>',
                'type' => 'item'
            ],
            [
                'title' => '¿Necesito pagar para tener toda la información?',
                'text' =>
                    'Todo nuestro material de apoyo y conocimiento es totalmente gratis. Para nosotros mantenerte bien informado y en constante <br class="D_e"> formación es una inversión para ayudarte a hacer crecer tu negocio.',
                'type' => 'item'
            ]
        ]
    ]
];


 $parameters = array(
   'classSection' => 'landing_crm_atrae_convierte_funcionalidades_9',
   'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'items' => $items
   ) ;
   @endphp
@contain_FAQ_T1( $parameters )
@endcontain_FAQ_T1

<section class="customSection sectionParent landing_crm_atrae_convierte_funcionalidades_10 fullWidth">

  <img  src="{!! App::setFilePath('/assets/images/overlays/overlay_stars.png') !!}"  alt="" class="backOverlay">

    <div class="section-row">

      <div class="containElements">

        <div class="info">

          <h3 class="primaryTitle">
            <span class="blueLightColor11">Comienza a generar</span> <br class="space">
            más leads, clientes y ventas
          </h3>

          <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
            Recibe un demo
          </a>

        </div>

        <div class="image">

          <div class="containerImage">

            <img  src="{!! App::setFilePath('/assets/images/illustrations/others/escala-plataforma-generar-leads-clientes-ventas.png') !!}" alt="Ilustración de un cohete en curso en referencia a Escala como la plataforma ideal para crecer y generar más leads, clientes y ventas" alt="" loading="lazy">

          </div>

        </div>

      </div>

    </div>

</section>

</div>

</div>

</div>





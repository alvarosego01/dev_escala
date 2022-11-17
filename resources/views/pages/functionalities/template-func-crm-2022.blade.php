

<div id="func_escala_crm">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol func_escala_crm_0',
     'title' => '
        CRM todo-en-uno <br class="space">
        <span style="color: #A4E7EA">
          + acompañamiento <br class="space">
          de expertos
        </span>
        ',
     'text' => '<span class="whiteColor">
          Con el CRM de Escala haz más eficiente todo tu <br class="space">
          proceso de ventas, guiado por especialistas. <br class="space">
          Segmenta tus contactos, personaliza tu <br class="space">
          comunicación y hazle mejor seguimiento a tus <br class="space">
          oportunidades hasta cerrar la venta.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/tablet_CRM 1.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1


    @php
    $parameters = array(
      'type' => 'backgroundColor',
      'classSection' => 'func_escala_crm_1',
      'enableTitle' => false,
      'titlePrincipal' => null,
      'subTitlePrincipal' => null,
      'title' => null,
      'typeVideo' =>  'localvideo',
      'videoEmbed' =>  App::setFilePath('/assets/videos/am_home1.mp4'),
      'videoCover' => App::setFilePath('/assets/images/illustrations/others/portada_video_andres.jpg'),
      'text' => '
          “Luego de generar una base de datos de clientes <br class="desktopTabletElement">
          potenciales, <span class="greenBlueColor">
            <strong>
              tu CRM es la herramienta más <br class="desktopTabletElement">
              importante para convertirlos en clientes fieles
            </strong>
          </span> <br class="desktopTabletElement">
          y construir relaciones a largo plazo”.
          <br class="space"><br class="space">
            <span class="byam">
              <strong class="greenBlueColor">
                Andrés Moreno
              </strong>
              <br class="space">
              <small>
                Fundador de Escala y Open English
              </small>
            </span>
            <div class="ottoSpecialButton">
              <img src="'. App::setFilePath('/assets/images/illustrations/otto/otto-boton-cta-prueba-escala.png') .'" alt="Ilustración de Otto como figura de Escala señalando un botón para iniciar una prueba gratis de Escala CRM">
              <a href="#" class=" openPopUpButton popup-general-trial-2022">
                Solicita tu Prueba Gratis
              </a>
            </div>
      ',
      'enableButton' => false,
      'urlButton' => '#lead-form',
      'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
      'textButton' => 'Prueba Gratis por 10 días',
      // 'enableButton2' => true,
      // 'urlButton2' => '#lead-form',
      // 'typeButton2' => 'secondaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
      // 'textButton2' => 'Solicita una DEMO',
      'side' => 'right',
    ) ;
   @endphp

   @contain_text_video_T1( $parameters )
   @endcontain_text_video_T1


   @php
   $parameters = [
       'type' => 'backgroundColor',
       'classSection' => 'func_escala_crm_2',
       'enableTitle' => true,
       'titlePrincipal' => '
          <span class="greenBlueColor">El CRM todo-en-uno de Escala <br class="desktopTabletElement"></span>
          Tu Máquina de Marketing y Ventas
       ',
       'subTitlePrincipal' => '
          En el CRM de Escala están todas las herramientas de marketing digital y ventas integradas, <br class="desktopTabletElement">
          para que puedas: generar más demanda, aumentar tus ventas y fidelizar más clientes.
       ',
       'overlay' => false,
       'enableButton' => true,
       'urlButton' => '#',
       'textButton' => 'Prueba Gratis',
       'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
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

   <section class="customSection sectionParent func_escala_crm_3">

    <div class="section-row">

          <section class="innerSectionElement">

            <div class=" row groupElements">

              <div class="image col-md-12 col-lg-6">

                <div class="containElements">

                  <h2 class="primaryTitle blackColor">
                    <span class="greenBlueColor">Conoce por qué el CRM</span> <br class="space">
                    de Escala es tan poderoso
                  </h2>

                  <div class="containerImage">
                    <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/CRM_tableta-pequena-pantalla-1.png') !!}" alt="" loading="lazy">
                  </div>


                </div>

              </div>
              <div class="info col-md-12 col-lg-6">


                @php

                    $elements = array(
                      [
                        'title' => 'Tu CRM está Integrado <span>
                           a todas las herramientas <br class="desktopTabletElement">
                         de marketing digital y ventas </span>'

                      ],
                      [
                        'title' => 'Organiza en un solo lugar: <span>
                           tus contactos, embudos, <br class="desktopTabletElement">
                        flujos y oportunidades </span>'
                      ],
                      [
                        'title' => 'Simple de usar, <span>
                          diseñado por expertos para vendedores <br class="desktopTabletElement">
y equipos de marketing </span>'
                      ],
                      [
                        'title' => 'Gestiona tu base de datos <span>
                          y guarda automáticamente <br class="desktopTabletElement">
la data con formularios integrados desde tus landing pages </span>'
                      ],
                      [
                        'title' => 'Segmenta y personaliza tus comunicaciones <span>
                          con etiquetas <br class="desktopTabletElement">
avanzadas. Ten trazabilidad e historial de tus contactos </span>'
                      ],
                      [
                        'title' => 'Visualiza todo <span>
                          tu proceso de venta, fase por fase </span>'
                      ],
                      [
                        'title' => 'Potencia la productividad de tu equipo <span>
                           con la asignación <br class="desktopTabletElement">
de tareas, actividades y recordatorios </span>'
                      ],
                      [
                        'title' => 'Automatiza tu flujo de acciones  <span>
                          según la segmentación <br class="desktopTabletElement">
de tus contactos </span>'
                      ],
                      [
                        'title' => 'Analiza tus resultados <span>
                          de ventas con dashboards <br class="desktopTabletElement">
amigables y optimiza tus acciones </span>'
                      ],
                      [
                        'title' => 'Fideliza más clientes <span>
                          nutriendo tus relaciones <br class="desktopTabletElement">
a largo plazo </span>'
                      ]
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
       'classSection' => 'func_escala_crm_4',
       'enableTitle' => true,
       'titlePrincipal' => '
        <span style="color: #C5E5E9">Descubre las funcionalidades del Plan PRO <br class="desktopTabletElement"></span>
        de Escala y personaliza tu comunicación
       ',
       'subTitlePrincipal' => '
          Al adquirir el plan Pro de Escala cuentas con funcionalidades más avanzadas para que <br class="desktopTabletElement">
          puedas personalizar tus acciones de marketing, ventas y aumentar tus conversiones.
       ',
       'overlay' => false,
       'enableButton' => true,
       'urlButton' => '#lead-form',
       'textButton' => 'Prueba el CRM de Escala',
       'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
       // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
       'elements' => [
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/bifurcaciones.png'),
               'title' => '
                <span style="color: #C5E5E9">Bifurcaciones:</span> Automatiza <br class="space">
                tus flujos inteligentes
               ',
               'text' => '
                  Con las bifurcaciones puedes automatizar todas tus <br class="desktopTabletElement">
                  acciones de marketing digital y ventas según el <br class="desktopTabletElement">
                  comportamiento de tus contactos.. Creando patrones <br class="desktopTabletElement">
                  de flujos dependiendo de condicionantes.
               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/lead-scoring.png'),
               'title' => '
                <span style="color: #C5E5E9">Lead Scoring:</span> Descubre quién <br class="space">
                está a punto de comprar
               ',
               'text' => '
                  Ahora podrás darle un puntaje a tus contactos por <br class="desktopTabletElement">
                  sus respuestas a tus acciones de marketing y ventas <br class="desktopTabletElement">
                  comprendiendo si están: fríos, tibios o calientes para <br class="desktopTabletElement">
                  cerrar la venta.
               ',
               'enableButton' => false,
           ]

       ],
   ];
   @endphp

   @contain_multiple_cards_T2( $parameters )
   @endcontain_multiple_cards_T2

    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'func_escala_crm_5_',
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
            Con el Plan PRO de Escala, nuestros especialistas en <br class="desktopTabletElement">
            marketing digital y ventas te guiarán paso a paso para <br class="desktopTabletElement">
            configurar tu CRM e implementar con éxito tu estrategia digital.
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Prueba Gratis',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'side' => 'left',
    ];
@endphp

@contain_text_image_T1($parameters)
@endcontain_text_image_T1

@php
$parameters = [
  'type' => 'backgroundColor',
  'classSection' => 'func_escala_crm_5_2',
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


<section class="component-info-text-image-T1 customSection sectionParent func_escala_crm_6 ">

  <div class="section-row">

    <section class="innerSectionElement sct2 right">

      <div class="groupElements row">

        <div class="info col-md-12 col-lg-6">

          <h3 class="secondaryTitle">

            Nuestro CRM es tu gerente de <br class="desktopTabletElement">
            ventas: él se ocupa de gerenciar <br class="desktopTabletElement">
            tu proceso y tú te enfocas en <br class="desktopTabletElement">
            hacer crecer tu empresa

          </h3>

          <p class="text">
            Tu CRM de Escala es tu máquina de ventas, en un solo lugar puedes gerenciar tus <br
              class="desktopTabletElement">
            contactos, segmentar y personalizar tus acciones de ventas y marketing y darle <br
              class="desktopTabletElement">
            seguimiento a cada una de tus oportunidades abiertas. Además hace más productivo a <br
              class="desktopTabletElement">
            tu equipo de ventas asignándoles tareas, actividades y recordatorios para convertir más.

          </p>

          <a  class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
            Prueba Gratis
        </a>

        </div>

        <div class="image col-md-12 col-lg-6">

          <div class="containerImage">

            <img
              src="{!! App::setFilePath('/assets/images/person/morena_banco.png') !!}"
              alt="" loading="lazy">

          </div>

          <img class="overlayBlue"
          src="{!! App::setFilePath('/assets/images/overlays/poligono_overlay_blue.svg') !!}"
          alt="" loading="lazy">




        </div>

      </div>

    </section>

  </div>

</section>



{{-- <section class="customSection sectionParent func_escala_crm_7">

  <div class="section-row">

        <section class="innerSectionElement">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              <span style="color: #B9E6E9">CRM todo-en-uno <br class="space"></span>
              Tu máquina de marketing y ventas

            </h2>

            <p class="primaryText grayColorTexts">
              En Escala tu CRM está integrado con todas las herramientas que necesitas para generar <br class="desktopTabletElement">
              más demanda, aumentar tus ventas y generar mayor fidelización de tus clientes.

            </p>

            <div class="containerImage">
              <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/CRM_tableta-landing-texto.png') !!}" alt="" loading="lazy">
            </div>

            <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
              Prueba Escala gratis
            </a>

          </div>

        </section>

  </div>

</section> --}}


<section class="customSection sectionParent func_escala_crm_8">

  <div class="section-row">

        <section class="innerSectionElement1">

          <h2 class="primaryTitle blackColor">
            <span class="greenBlueColor">Nuestros clientes dicen por qué <br class="space"></span>
            el CRM de Escala es el más completo

          </h2>


        </section>

        <section class="innerSectionElement2">

          <div class="imagesSection">

              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/CRM_quote-1.jpeg') !!}" alt="">

              </div>
              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/CRM_quote-2.jpeg') !!}" alt="">

              </div>
              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/CRM_quote-3.jpeg') !!}" alt="">

              </div>

          </div>

        </section>

  </div>

</section>



<section class="customSection sectionParent func_escala_crm_9 fullWidth">

    <div class="section-row">

      <div class="containElements">

        <div class="info">

          <h3 class="primaryTitle">
            <span style="color: #B9E6E9">Convierte más leads en clientes <br class="space"></span>
            con el CRM de Escala
          </h3>

          <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
            Prueba Gratis
          </a>

        </div>

        <div class="image">

          <div class="containerImage">

            <img  src="{!! App::setFilePath('/assets/images/illustrations/otto/tablet_otto_1 2.png') !!}" alt="" loading="lazy">

          </div>

        </div>

      </div>

    </div>

</section>


</div>

</div>





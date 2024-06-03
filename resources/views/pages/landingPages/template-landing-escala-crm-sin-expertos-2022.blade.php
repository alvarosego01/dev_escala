

<div id="landing_escala_crm_sin_expertos">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landing_escala_crm_sin_expertos_0',
     'title' => '
        Aumenta tus ventas <br class="space">
        <span style="color: #A4E7EA">
          con nuestro CRM <br class="space">
          todo-en-uno
        </span>
        ',
     'text' => '<span class="whiteColor">
          Con el CRM de Escala haz más eficiente todo <br class="space">
          tu proceso de marketing y ventas. <br class="space">
          Segmentando tus contactos, personalizando <br class="space">
          tu comunicación y dándole seguimiento a tus <br class="space">
          oportunidades hasta cerrar la venta.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/tablet_CRM.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1


    @php
    $parameters = array(
      'type' => 'backgroundColor',
      'classSection' => 'landing_escala_crm_sin_expertos_1',
      'enableTitle' => false,
      'titlePrincipal' => null,
      'subTitlePrincipal' => null,
      'title' => null,
      'typeVideo' =>  'localvideo',
      'videoEmbed' =>  App::setFilePath('/assets/videos/am_home1.mp4'),
      'videoCover' => App::setFilePath('/assets/images/illustrations/others/portada_video_andres.jpg'),
      'text' => '

          “Luego de generar una base de datos <br class="MT_e"> de clientes <br class="D_e">
          potenciales, <span class="greenBlueColor">
            <strong>
              tu CRM es la <br class="MT_e"> herramienta más <br class="D_e">
              importante para <br class="MT_e"> convertirlos en clientes fieles
            </strong>
          </span> <br class="D_e">
          y <br class="MT_e"> construir relaciones a largo plazo”.
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
              <img src="'. App::setFilePath('/assets/images/illustrations/otto/otto-boton-cta-prueba-escala.png') .'" alt="Ilustración de Otto como figura de Escala señalando un botón para iniciar una Recibe un demo de Escala CRM">
              <a href="#" class=" openPopUpButton popup-general-demo-2022">
                Solicita tu Recibe un demo
              </a>
            </div>
      ',
      'enableButton' => false,
      'urlButton' => '#lead-form',
      'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
      'textButton' => 'Recibe un demo por 10 días',
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
       'classSection' => 'landing_escala_crm_sin_expertos_2',
       'enableTitle' => true,
       'titlePrincipal' => '
          <span class="greenBlueColor">El CRM todo-en-uno de Escala <br class="DT_e"></span>
          Tu Máquina de Marketing y Ventas
       ',
       'subTitlePrincipal' => '
          En el CRM de Escala están todas las herramientas <br class="MT_e"> de marketing digital y ventas integradas, <br class="D_e">
          para que <br class="MT_e"> puedas: generar más demanda, aumentar tus <br class="MT_e"> ventas y fidelizar más clientes.
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
                  Ads de Facebook e <br class="D_e">
                  Instagram <br class="MT_e"> desde nuestra <br class="D_e">
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
                  programando secuencias <br class="D_e">
                  de emails <br class="MT_e"> y acciones de <br class="D_e">
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
                Mide en tiempo real tus <br class="D_e">
                resultados <br class="MT_e"> con dashboards <br class="D_e">
                amigables para <br class="MT_e"> optimizar tus <br class="D_e">
                embudos de ventas
               '
           ]

       ],
   ];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2

   <section class="customSection sectionParent landing_escala_crm_sin_expertos_3">

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
                           a todas las <br class="MT_e"> herramientas <br class="D_e">
                         de marketing digital y ventas </span>'

                      ],
                      [
                        'title' => 'Organiza en un solo lugar: <span>
                           tus contactos, <br class="MT_e"> embudos, <br class="D_e">
                        flujos y oportunidades </span>'
                      ],
                      [
                        'title' => 'Simple de usar, <span>
                          diseñado por expertos para <br class="MT_e"> vendedores <br class="D_e">
y equipos de marketing </span>'
                      ],
                      [
                        'title' => 'Gestiona tu base de datos <span>
                          y guarda <br class="MT_e"> automáticamente <br class="D_e">
la data con formularios <br class="MT_e"> integrados desde tus landing pages </span>'
                      ],
                      [
                        'title' => 'Segmenta y personaliza tus <br class="MT_e"> comunicaciones <span>
                          con etiquetas <br class="D_e">
avanzadas. <br class="MT_e"> Ten trazabilidad e historial de tus <br class="MT_e"> contactos </span>'
                      ],
                      [
                        'title' => 'Visualiza todo <span>
                          tu proceso de venta, <br class="MT_e"> fase por fase </span>'
                      ],
                      [
                        'title' => 'Potencia la productividad de tu equipo <br class="MT_e"> <span>
                           con la asignación <br class="D_e">
de tareas, actividades <br class="MT_e"> y recordatorios </span>'
                      ],
                      [
                        'title' => 'Automatiza tu flujo de acciones  <span>
                          según <br class="MT_e"> la segmentación <br class="D_e">
de tus contactos </span>'
                      ],
                      [
                        'title' => 'Analiza tus resultados <span>
                          de ventas con <br class="MT_e"> dashboards <br class="D_e">
amigables y optimiza tus <br class="MT_e"> acciones </span>'
                      ],
                      [
                        'title' => 'Fideliza más clientes <span>
                          nutriendo tus <br class="MT_e"> relaciones <br class="D_e">
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
       'classSection' => 'landing_escala_crm_sin_expertos_4',
       'enableTitle' => true,
       'titlePrincipal' => '
        <span style="color: #C5E5E9">
            ¿Quieres pasar al siguiente nivel <br class="MT_e"> de personalización? <br class="space">
            <span class="whiteColor">Descubre las funcionalidades <br class="MT_e"> del Plan PRO</span>
          </span>
       ',
       'subTitlePrincipal' => '
          Al adquirir el plan Pro de Escala cuentas con <br class="MT_e"> funcionalidades más avanzadas para que <br class="space">
          puedas personalizar tus acciones de marketing y ventas, <br class="MT_e"> aumentado tus conversiones.
       ',
       'overlay' => false,
       'enableButton' => true,
       'urlButton' => '#lead-form',
       'textButton' => 'Recibe un demo',
       'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
       // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
       'elements' => [
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/bifurcaciones.png'),
               'title' => '
                <span style="color: #C5E5E9">Bifurcaciones:</span> Automatiza <br class="space">
                tus flujos inteligentes
               ',
               'text' => '
                  Con las bifurcaciones puedes automatizar todas <br class="MT_e"> tus <br class="D_e">
                  acciones de marketing digital y ventas según <br class="MT_e"> el <br class="D_e">
                  comportamiento de tus contactos.. Creando <br class="MT_e"> patrones <br class="D_e">
                  de flujos dependiendo de <br class="MT_e"> condicionantes.
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
                  Ahora podrás darle un puntaje a tus contactos <br class="MT_e"> por <br class="D_e">
                  sus respuestas a tus acciones de marketing <br class="MT_e"> y ventas <br class="D_e">
                  comprendiendo si están: fríos, tibios o <br class="MT_e"> calientes para <br class="D_e">
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
        'classSection' => 'landing_escala_crm_sin_expertos_5_',
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
            Con el Plan PRO de Escala, nuestros <br class="MT_e"> especialistas en <br class="D_e">
            marketing digital y ventas te <br class="MT_e"> guiarán paso a paso para <br class="D_e">
            configurar tu CRM e <br class="MT_e"> implementar con éxito tu estrategia digital.
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
  'classSection' => 'landing_escala_crm_sin_expertos_5_2',
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
                    Acompañamiento <br class="D_e">
                    en vivo para <br class="MT_e"> optimizar <br class="D_e">
                    tu implementación
                  ',
                  'text' => null,
                  'enableButton' => false,

              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/capacitaciones-grupales-equipo-escala.png'),
'img_alt' => 'Ilustración de un astronauta mostrando en su computador un cohete que va de un punto A a un punto D en referencia a las capacitaciones grupales que ofrece el equipo de Escala',
                  'title' => '
                    Capacitaciones grupales <br class="D_e">
                    basadas en <br class="MT_e"> mejores prácticas <br class="D_e">
                    y en los casos de <br class="MT_e"> éxito de tu industria
                  ',
                  'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/atencion-prioritaria-clientes-equipo-escala.png'),
'img_alt' => 'Ilustración de un computador con un botón de WhatsApp en referencia a la atención prioritaria por WhatsApp, Email y Chat de parte de nuestro equipo',
                  'title' => '
                      Atención prioritaria por <br class="D_e">
                      WhatsApp, <br class="MT_e"> Email y Chat <br class="D_e">
                      de servicio
                    ',
                    'text' => null,
                  'enableButton' => false,
              ],
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/gerente-cuentas-asignado-equipo-escala.png'),
'img_alt' => 'Ilustración de un astronauta con capa y un computador en sus manos en referencia al gerente de cuentas que se asigna a clientes por parte de Escala',
                  'title' => '
                        Gerente de cuentas asignado <br class="D_e">
                        con plan <br class="MT_e"> personalizado <br class="D_e">
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


<section class="component-info-text-image-T1 customSection sectionParent landing_escala_crm_sin_expertos_6 ">

  <div class="section-row">

    <section class="innerSectionElement sct2 right">

      <div class="groupElements row">

        <div class="info col-md-12 col-lg-6">

          <h3 class="secondaryTitle">

            Nuestro CRM es tu gerente de <br class="space">
            ventas: él se ocupa de gerenciar <br class="space">
            tu proceso y tú te enfocas en <br class="space">
            hacer crecer tu empresa

          </h3>

          <p class="text">
            Tu CRM de Escala es tu máquina de ventas, en <br class="MT_e"> un solo lugar puedes gerenciar tus <br
              class="D_e">
            contactos, <br class="MT_e"> segmentar y personalizar tus acciones de <br class="MT_e"> ventas y marketing y darle <br
              class="D_e">
            seguimiento a cada <br class="MT_e"> una de tus oportunidades abiertas. Además <br class="MT_e"> hace más productivo a <br
              class="D_e">
            tu equipo de ventas <br class="MT_e"> asignándoles tareas, actividades y recordatorios <br class="MT_e"> para convertir más.


          </p>

          <a  class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
            Recibe un demo
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



{{-- <section class="customSection sectionParent landing_escala_crm_sin_expertos_7">

  <div class="section-row">

        <section class="innerSectionElement">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              <span style="color: #B9E6E9">CRM todo-en-uno <br class="space"></span>
              Tu máquina de marketing y ventas

            </h2>

            <p class="primaryText grayColorTexts">
              En Escala tu CRM está integrado con todas las herramientas que necesitas para generar <br class="DT_e">
              más demanda, aumentar tus ventas y generar mayor fidelización de tus clientes.

            </p>

            <div class="containerImage">
              <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/CRM_tableta-landing-texto.png') !!}" alt="" loading="lazy">
            </div>

            <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
              Recibe un demo
            </a>

          </div>

        </section>

  </div>

</section> --}}


<section class="customSection sectionParent landing_escala_crm_sin_expertos_8">

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



<section class="customSection sectionParent landing_escala_crm_sin_expertos_9 fullWidth">

  <div class="section-row">

    <div class="containElements">

      <div class="info">

        <h3 class="primaryTitle">
          <span style="color: #B9E6E9">Convierte más leads <br class="MT_e"> en clientes <br class="space"></span>
          con el CRM de Escala
        </h3>


        <a  class="D_e primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
          Recibe un demo
        </a>


      </div>

      <div class="image">

        <div class="containerImage">

          <img  src="{!! App::setFilePath('/assets/images/illustrations/otto/tablet_otto_1 2.png') !!}" alt="" loading="lazy">

        </div>

      </div>

      <a  class="MT_e primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
        Recibe un demo
      </a>

    </div>

  </div>

</section>



</div>

</div>



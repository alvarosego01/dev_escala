

<div id="landing_func_email_marketing_2022">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landing_func_email_marketing_2022_0',
     'title' => '
        Crea campañas <br class="space">
        de <span style="color: #A4E7EA">Email Marketing</span> <br class="space">
        impactantes con Escala
        ',
     'text' => '<span class="whiteColor">
        Nuestro creador de emails es súper intuitivo y fácil <br class="space">
        de usar. Envia campañas de correos masivos con <br class="space">
        información relevante, aumentando tus  índices de <br class="space">
        apertura y clics para generar mayor conversión.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/email_banner_principal_07.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1


    @php
    $parameters = array(
      'type' => 'backgroundColor',
      'classSection' => 'landing_func_email_marketing_2022_1',
      'enableTitle' => false,
      'titlePrincipal' => null,
      'subTitlePrincipal' => null,
      'title' => null,
      'typeVideo' =>  'localvideo',
      'videoEmbed' =>  App::setFilePath('/assets/videos/Comercial_escala_registro_lead_1.mp4'),
      'videoCover' => App::setFilePath('/assets/images/illustrations/others/portada_video_andres.jpg'),
      'text' => '
          <span class="greenBlueColor">
            “La gestión inteligente de campañas de email <br class="desktopTabletElement">
            marketing es una estrategia fundamental para <br class="desktopTabletElement">
            mantenerse en contacto, y quizás el método de <br class="desktopTabletElement">
            menor costo y mayor ROI”.
          </span>
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

   <section class="customSection sectionParent landing_func_email_marketing_2022_2">

    <div class="section-row">

          <section class="innerSectionElement">

            <div class=" row groupElements">

              <div class="image col-md-12 col-lg-6">

                <div class="containElements">

                  <div class="containerImage">
                    <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/email_sobre-3-Vminimal-2.png') !!}" alt="" loading="lazy">
                  </div>

                </div>

              </div>
              <div class="info col-md-12 col-lg-6">

                <h2 class="primaryTitle blackColor">
                  <span class="greenBlueColor">Conoce por qué es tan poderoso</span> <br class="desktopTabletElement">
                  el Email Marketing de Escala
                </h2>

                @php


                    $elements = array(

                      [
                        'title' => 'Aumenta tus tasas de apertura y clics, <span>incrementando tu ROI <br class="desktopTabletElement"> de marketing con campañas de emails altamente rentables</span>',
                        'text' => null
                      ],
                      [
                        'title' => 'Automatiza tus flujos de emails <span>según el comportamiento <br class="desktopTabletElement">
                        de tus contactos</span>',
                        'text' => null
                      ],
                      [
                        'title' => 'Llega a la bandeja correcta, <span>cuidando la reputación de tu dominio</span>',
                        'text' => null
                      ],
                      [
                        'title' => 'Mantén comunicación constante <span>y nutre tus relaciones a largo plazo</span>',
                        'text' => null
                      ],
                      [
                        'title' => 'Crea hermosos emails, <span>eligiendo una de nuestras plantillas <br class="desktopTabletElement"> 100% responsivas, listas-para-usar de Escala</span>',
                        'text' => null
                      ],
                      [
                        'title' => 'Segmenta y personaliza tus campañas <span>
                          de Email Marketing <br class="desktopTabletElement">
                          con etiquetas avanzadas
                        </span>',
                        'text' => null
                      ],
                      [
                        'title' => 'Envía emails masivos <span>con planes hechos a la medida para tu empresa</span>',
                        'text' => null
                      ],
                      [
                        'title' => 'Fideliza a más clientes <span>con campañas de: Upsells, promociones <br class="desktopTabletElement"> customizadas, evaluaciones post venta y nuevos lanzamientos</span>',
                        'text' => null
                      ],
                      [
                        'title' => 'Analiza y optimiza, <span>con dashboards amigables y mejora tus resultados</span>',
                        'text' => null
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
       'classSection' => 'landing_func_email_marketing_2022_3',
       'enableTitle' => true,
       'titlePrincipal' => '
       <span class="whiteColor">
      Descubre 3 formas de hacer más eficiente <br class="desktopTabletElement">
      <span style="color: #A4E7EA">tu Email Marketing con Escala</span>
       </span>',
       'subTitlePrincipal' => '
         El Email Marketing tiene +80% de eficacia para lograr la conversión <br class="desktopTabletElement">
        a ventas. Es una funcionalidad altamente rentable y fácil de usar.
       ',
       'overlay' => false,
       'enableButton' => true,
       'urlButton' => '#',
       'textButton' => '¡Prueba Gratis!',
       'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
       // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
       'elements' => [
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/iconos-emails_01.png'),
               'title' => '<span style="color: #A4E7EA">
                1. Incrementa tus aperturas
                   </span>',
               'text' => '
                Un correo que no es leído, es una oportunidad de <br class="desktopTabletElement">
                ventas perdida. Con Escala crea efectivos emails <br class="desktopTabletElement">
                para todas las plataformas, garantizando que <br class="desktopTabletElement">
                llegarán a la bandeja correcta, en el momento <br class="desktopTabletElement">
                correcto.
               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/iconos-emails-02.png'),
               'title' => '<span style="color: #A4E7EA">
                2. Aumenta tu CTR
                   </span>',
               'text' => '
                Mejora la tasa de clics de tus correos, creando <br class="desktopTabletElement">
                contenido que sea relevante para tus contactos. <br class="desktopTabletElement">
                Segmenta y personaliza para aumentar la interacción <br class="desktopTabletElement">
                y tus posibilidades de convertir.
               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/iconos-emails_03.png'),
               'title' => '<span style="color: #A4E7EA">
                3. Automatiza tu flujo de emails
                   </span>',
               'text' => '
                Crea secuencias de emails según el <br class="desktopTabletElement">
                comportamiento de tus contactos. Patrones que <br class="desktopTabletElement">
                definen qué acción dispara un tipo de email, <br class="desktopTabletElement">
                para lograr la venta.
               ',
               'enableButton' => false,
           ],


       ],
   ];
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2



<section class="customSection sectionParent landing_func_email_marketing_2022_4">

  <div class="section-row">

        <section class="innerSectionElement">

          <div class=" row groupElements">

            <div class="image col-md-12 col-lg-6">

              <div class="containElements">

                <div class="containerImage">
                  <img alt="Landing Escala email marketing" src="{!! App::setFilePath('/assets/images/person/banner-expertos_A.png') !!}" alt="" loading="lazy">
                </div>

              </div>

            </div>
            <div class="info col-md-12 col-lg-6">

              <h2 class="primaryTitle blackColor">
                El acompañamiento <br class="desktopTabletElement">
                <span class="greenBlueColor">¡Nuestra arma secreta!</span>
              </h2>

              @php


                  $elements = array(

                    [
                      'title' => 'Gerente de cuenta <span>asignado para guiar tu implementación</span>',
                      'text' => null
                    ],
                    [
                      'title' => '100% es español, <span>ideal para empresas de LATAM</span>',
                      'text' => null
                    ],
                    [
                      'title' => 'Capacitaciones en vivo <span>semanales con expertos</span>',
                      'text' => null
                    ],
                    [
                      'title' => 'Atención por WhatsApp, <span>Email y Chat de servicio</span>',
                      'text' => null
                    ],
                    [
                      'title' => '<span>Diseño de plantillas</span> personalizadas',
                      'text' => null
                    ],
                    [
                      'title' => '<span>Asistencia y soporte en vivo, a un WhatsApp <br class="desktopTabletElement"> de distancia,</span> sin chatbots',
                      'text' => null
                    ],
                    [
                      'title' => 'Hasta 15 horas de sesiones privadas <span>los primeros 3 meses</span>',
                      'text' => null
                    ],

                    [
                      'title' => 'Posibilidad de contratar <span>servicios profesionales</span>',
                      'text' => null
                    ],
                    [
                      'title' => 'Cientos de videotutoriales, <span>artículos y webinars</span>',
                      'text' => null
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
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'landing_func_email_marketing_2022_5',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/esquema_emails_3.png'),
  'title' => '
  <span class="greenBlueColor">Automatiza con Escala: <br class="desktopTabletElement"></span>
  más fácil imposible
  ',
  'text' => '
    Reactiva el interés de un lead que está a punto de comprar, <br class="desktopTabletElement">
    programando la secuencia de emails que le llegan a partir de una <br class="desktopTabletElement">
    interacción. gracias a nuestras bifurcaciones de flujos inteligentes.
    <br class="space"><br class="space">
    Automatizando con Escala, tu empresa crece, aún mientras duermes.
  ',
  'enableButton' => true,
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
  'classSection' => 'landing_func_email_marketing_2022_6',
  'enableTitle' => false,
  'img' => App::setFilePath('/assets/images/illustrations/others/Group 8436.png'),
  'title' => '
    <span style="color: #B9E6E9">
      La receta perfecta para <br class="desktopTabletElement">
      un Email Marketing exitoso: <br class="desktopTabletElement">
    </span>
    Automatizaciones + CRM
  ',
  'text' => '
    En Escala, tu Email Marketing está integrado <br class="desktopTabletElement">
    con todas las herramientas que necesitas para <br class="desktopTabletElement">
    generar más demanda, aumentar tus ventas y <br class="desktopTabletElement">
    generar mayor fidelización de tus clientes, sin <br class="desktopTabletElement">
    costos adicionales. Todo lo que necesitas para <br class="desktopTabletElement">
    hacer crecer tu empresa en un solo lugar.
  ',
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Prueba Escala gratis',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
  'side' => 'left',
 ) ;
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1





<section class="customSection sectionParent landing_func_email_marketing_2022_7 ">


    <div class="section-row">

      <div class="containElements">

        <div class="info">

          <h3 class="primaryTitle">
            Comienza a vender más <br class="desktopTabletElement">
            <span class="greenBlueColor">con el Email Marketing de Escala</span>
          </h3>

          <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
            Prueba Gratis
          </a>

        </div>



      </div>

    </div>

</section>



@php
       $parameters = [
        'classSection' => 'landing_func_email_marketing_2022_8',
        'enableTitle' => true,
        'titlePrincipal' => '
        Nuestros clientes te dicen <br class="desktopTabletElement">
        <span class="greenBlueColor">por qué prefieren Escala</span>
        ',
        'subTitlePrincipal' => null,
        'enableContainerButton' => true,
        'urlButton' => '#',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'textButton' => 'Prueba Gratis',
        'mob_reviews' => array(
          App::setFilePath('/assets/images/illustrations/others/email_mkt_trust_1.png'),

        ),
        'desk_reviews' => array(
          [
            App::setFilePath('/assets/images/illustrations/others/email_mkt_trust_1.png'),
            App::setFilePath('/assets/images/illustrations/others/email_mkt_trust_1.png'),
            App::setFilePath('/assets/images/illustrations/others/email_mkt_trust_1.png')
          ],

        ),
      ];
@endphp

@reviews_sliders_T1( $parameters )
@endreviews_sliders_T1


@php
$parameters = [
    'classSection' => 'landing_func_email_marketing_2022_9',
    'title' => '
      <span style="color: #B9E6E9">Emails leídos = clientes ganados</span> <br class="desktopTabletElement">
      con el Email Marketing de Escala
    ',
    'textForm' => 'Pruébalo gratis ahora',
    'text' => null,
    'image' => App::setFilePath('/assets/images/person/hombre_puf_emailmk_1_.png'),
];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



</div>

</div>





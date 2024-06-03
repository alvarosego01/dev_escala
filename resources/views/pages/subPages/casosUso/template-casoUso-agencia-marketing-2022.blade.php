<div id="subPage_casoUso_agencia_marketing">
    <div class="sections">


        {{-- <section class="component-info-text-image-T1 customSection sectionParent subPage_casoUso_agencia_marketing_0 ">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h1 class="primaryTitle">
                                Haz crecer tu agencia <span class="greenBlueColor">
                                    y llega <br class="space">
                                    a más clientes potenciales
                                </span>
                            </h1>

                            <p class="text">
                                Administra tu base de datos y automatiza tus procesos <br class="DT_e">
                                con el CRM más fácil de usar
                            </p>

                        </div>

                        <div class="image col-md-12 col-lg-6">
                            <div class="containerImage">

                                <img src="{!! App::setFilePath('/assets/images/person/Marketing2 1.png') !!}" loading="lazy">

                            </div>
                        </div>

                    </div>


                </section>



            </div>

        </section> --}}



        @php
        $parameters = array(
         'backgroundImageType' => false,
         'overlay' => false,
         'classSection' => 'threeCol subPage_casoUso_agencia_marketing_0',
         'title' => '
            <small >Caso de Uso: <span class="orangeColor">Marketing y Publicidad</span></small> <br class="space">
            Haz crecer tu agencia <br class="space">
            ganando y reteniendo <br class="space">
            a más clientes
        ',
         'text' => '
            Administra tu base de datos y automatiza tus procesos <br class="DT_e">
            con el CRM más fácil de usar
          ',
         'threeCol' => true,
         'textForm' => '
            Recibe un tour guiado <br class="space"> de Escala
         ',
         'backgroundImage' => null,
      'overlayImage' => null,
      'image' => App::setFilePath('/assets/images/person/Marketing2 1.png'),
      'img_alt' => 'Escala caso de uso marketing'
      ) ;
      @endphp

      @header_t1( $parameters )
      @endheader_t1


      @php
      $parameters = [
          'type' => 'backgroundColor',
          'classSection' => 'subPage_casoUso_agencia_marketing_2',
          'enableTitle' => true,
          'titlePrincipal' => '
              La herramienta de gestión y automatización <br class="DT_e">
              <span class="greenBlueColor">para agencias de marketing</span>
          ',
          'subTitlePrincipal' => null,
          'overlay' => false,
          'enableButton' => false,
          // 'urlButton' => '#',
          // 'textButton' => 'Recibe un demo',
          // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022 hoverInEffect',
          // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
          'elements' => [
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_mkt_1.png'),
                  'title' => '
                  Expertos en <br class="D_e">
                  generación de leads
      ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_mkt_2.png'),
                  'title' => '
                  Estrategas en <br class="D_e">
                  comunicaciones masivas
      ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_mkt_3.png'),
                  'title' => '
                  Especialistas en <br class="D_e">
                  embudos de conversión
      ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_mkt_4.png'),
                  'title' => '
                  Consultoras de marketing, ventas <br class="D_e">
                  o estrategia de Crecimiento
      ',
                  'enableButton' => false,
              ],
          ],
      ];
  @endphp

  @contain_multiple_cards_T2($parameters)
  @endcontain_multiple_cards_T2


  <section class="customSection sectionParent subPage_casoUso_agencia_marketing_3">

    <div class="section-row">

        <section class="innerSectionElement sct1">

            <div class="containElements">

                <h2 class="primaryTitle blackColor">
                    Cómo los usuarios implementan <span class="greenBlueColor">sus estrategias con Escala</span>
                </h2>

            </div>

        </section>

        <section class="innerSectionElement sct2">

            <div class="containElements">

                <div class="videoContent hytPlayerWrap">

                    <video class="video-js" controls preload="none"
                        data-setup="{
                            autoplay: false
                        }"
                        poster="{!! App::setFilePath('/assets/images/illustrations/others/portrait_marketing_video.jpg') !!}">
                        <source src="{!! App::setFilePath('/assets/videos/caso_de_uso_-_industria_agencia_de_marketing (1080p).mp4') !!}" type="video/mp4" />
                        <source src="{!! App::setFilePath('/assets/videos/caso_de_uso_-_industria_agencia_de_marketing (1080p).mp4') !!}" type="video/webm" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5
                                video</a>
                            </p>
                        </video>

                    </div>

                </div>

            </section>

            <section class="innerSectionElement sct3">

                <div class="containElements">

                    <a href="#" class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        ¡Recibe un demo!
                    </a>

                </div>
            </section>


                </div>

</section>


        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'subPage_casoUso_agencia_marketing_1',
                'enableTitle' => true,
                'titlePrincipal' => '
                    Lleva tu agencia de marketing <span class="greenBlueColor">al siguiente nivel</span>
                ',
                'subTitlePrincipal' => null,
                'overlay' => false,
                'enableButton' => false,
                'urlButton' => '#',
                'textButton' => '¡Recibe un demo!',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
                'elements' => [
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_0_1.png'),
                        'title' => '
                            Atrae más clientes <br class="space">
                            potenciales
                        ',
                        'text' => '
                            Realiza landings ilimitadas por <br class="DT_e">
                            servicio y segmenta <br class="DT_e">
                            estratégicamente tus anuncios para <br class="DT_e">
                            incrementar tus conversiones.
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_0_2.png'),
                        'title' => '
                            Reduce el tiempo <br class="space">
                            de cierre
                        ',
                        'text' => '
                            Brinda mejor atención y capitaliza <br class="DT_e">
                            el interés de los nuevos leads <br class="DT_e">
                            oportunamente.
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_asesoria_0_5.png'),
                        'title' => '
                            Nutre la relación con <br class="space">
                            tus clientes
                        ',
                        'text' => '
                            Aumenta el porcentaje de cierre de <br class="DT_e">
                            tus leads al tener una estrategia de <br class="DT_e">
                            contenidos de valor y fidelización.
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_0_4.png'),
                        'title' => '
                            Reduce costos
                            ',
                        'text' => '
                            Evita gastar en múltiples herramientas <br class="DT_e">
                            digitales y simplifica tus procesos con el <br class="DT_e">
                            CRM y las automatizaciones de Escala.
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_mkt_0_5.png'),
                        'title' => '
                            Aumenta el retorno <br class="space">
                            de inversión
                        ',
                        'text' => '
                            Automatiza procesos de venta <br class="DT_e">
                            cruzada que incrementen el ticket <br class="DT_e">
                            promedio de tus cuentas.
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_asesoria_0_6.png'),
                        'title' => '
                            Optimiza tu <br class="space">
                            gestión comercial
                        ',
                        'text' => '
                            Centraliza el trabajo de tus vendedores <br class="DT_e">
                            y accede a la información de las <br class="DT_e">
                            negociaciones en proceso.
                        ',
                        'enableButton' => false,
                    ],
                ],
            ];
        @endphp

        @contain_multiple_cards_T2($parameters)
        @endcontain_multiple_cards_T2






        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'subPage_casoUso_agencia_marketing_4',
                'enableTitle' => true,
                'titlePrincipal' => '
       Alcanza el éxito <span class="greenBlueColor">con las herramientas de Escala</span>
       ',
                'subTitlePrincipal' => null,
                'overlay' => false,
                'enableButton' => false,
                'urlButton' => '#',
                'textButton' => '¡Recibe un demo!',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
                'elements' => [
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/otto/otto_worry.png'),
                        'title' => 'Antes de Escala',
                        'text' => '
            Desafíos que impedían el crecimiento <br class="space">
            de nuestros clientes
            <ul class="text">
                    <li>
                         <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                        Captar aspirantes no calificados por procedimientos <br class="DT_e">
                    ineficaces.</li>

                    <li>
                         <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                        Procesos ineficientes para la creación de landing <br class="DT_e">
                    pages e emails que representan altos gastos en <br class="DT_e">
                    recursos humanos y herramientas.</li>

                    <li>
                         <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                        Dificultad para captar y organizar leads calificados <br class="DT_e">
                    según el target audience de cada producto/servicio.</li>

                    <li>
                         <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                        Falta de herramientas para identificar a prospectos con <br class="DT_e">
                    altas probabilidades de cierre según su interacción con <br class="DT_e">
                    las campañas.</li>

                    <li>
                         <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                        Los clientes potenciales pierden interés al no <br class="DT_e">
                    conseguir respuestas rápidas del equipo <br class="DT_e">
                    de la agencia.</li>

              </ul>

            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/embudo-2 3.png'),
                        'title' => '
            Con Escala
            ',
                        'text' => '
            Crecimiento continuo con <br class="space">
            nuestras herramientas

            <ul class="text">
                <li>
                    <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                    Anuncios y Landing pages que atraen y recolectan datos <br class="DT_e">
                    útiles sobre posibles estudiantes
                </li>
                <li>
                    <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                    Unifica el trabajo de tus diseñadores con las <br class="DT_e">
                herramientas de diseño de Escala para crear landing <br class="DT_e">
                pages y campañas de email sin necesitar programación.</li>
                <li>
                    <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                    Centraliza tus campañas de anuncios y landing pages y <br class="DT_e">
                organiza tu base de datos en el CRM de Escala.</li>
                <li>
                    <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                    Evalúa el interés de tus prospectos con la herramienta de <br class="DT_e">
                Lead Scoring y prioriza a tus potenciales clientes.</li>
                <li>
                    <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                    Asigna tareas y actividades a tus asesores comerciales <br class="DT_e">
                mediante automatizaciones para gestionar los procesos <br class="DT_e">
                de contacto, venta y post-venta de forma efectiva.</li>
              </ul>
            ',
                        'enableButton' => false,
                    ],
                ],
            ];
        @endphp

        @contain_multiple_cards_T2($parameters)
        @endcontain_multiple_cards_T2


        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'subPage_casoUso_agencia_marketing_5',
                'enableTitle' => true,
                'titlePrincipal' => '
                    Aumenta los ingresos de tu agencia
                    <span class="greenBlueColor">con procesos optimizados</span>
                ',
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/1-Automatización Agencia de marketing.gif'),
                'title' => null,
                'text' => '
                    <span>
                        "No tengo la capacidad de nutrir la relación <br class="DT_e">
                        con referidos o leads tibios por falta de <br class="DT_e">
                        tiempo y enfoque"
                    </span>
                    <br class="space"><br class="space">
                    Categoriza a tu base de datos y diseña flujos de <br class="DT_e">
                    comunicación automatizada para mantener viva la <br class="DT_e">
                    relación con tus prospectos.
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
                'classSection' => 'subPage_casoUso_agencia_marketing_6',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/2- CRM oportunidades.gif'),
                'title' => null,
                'text' => '
                    <span>
                        "Tengo un proceso desorganizado de conversión de <br class="DT_e">
                        leads que impide el cierre de venta"
                    </span>
                    <br class="space"><br class="space">
                        Con el CRM, organiza un embudo de ventas con subetapas para <br class="DT_e">
                        conocer cómo el equipo de ventas gestiona y hace seguimiento <br class="DT_e">
                        a los procesos comerciales hasta el momento de cierre.


                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
            ];
        @endphp

        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1

        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'subPage_casoUso_agencia_marketing_7',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/3-dashboard-mkt.gif'),
                'title' => null,
                'text' => '
                   <span>
                       "No tengo una forma de obtener reportes en <br class="DT_e">
                        tiempo real sobre cómo avanzan las metas <br class="DT_e">
                        mensuales de venta"
                   </span>
                   <br class="space"><br class="space">
                    Usa Dashboards para visualizar las oportunidades <br class="DT_e">
                    asignadas, gestionadas, ganadas y perdidas de cada <br class="DT_e">
                    vendedor, incluyendo sus actividades y tareas diarias.
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
                'classSection' => 'subPage_casoUso_agencia_marketing_8',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/4- email-mkt-final.gif'),
                'title' => null,
                'text' => '
                   <span>
                       "Quiero fidelizar a mis clientes y <br class="DT_e">
                        prospectos con promociones, <br class="DT_e">
                        descuentos e información de interés"
                   </span>
                   <br class="space"><br class="space">
                    Elabora un plan de comunicaciones con la <br class="DT_e">
                    herramienta de <strong>Email Marketing</strong> para informar a tu <br class="DT_e">
                    comunidad de una manera rápida y ágil.
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
            ];
        @endphp

        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1


        <section class="customSection sectionParent subPage_casoUso_agencia_marketing_9">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            Multiplica tu impacto y tus ingresos con <br class="DT_e">
                            <span class="greenBlueColor">nuestro Programa de Partners</span>
                        </h2>
                        <br class="space"><br class="space">
                        <h2 class="primaryTitle blackColor">
                            <span class="greenBlueColor">¿Por qué asociarnos?</span>
                        </h2>

                        <div class="containerImage">
                            <img   src="{!! App::setFilePath('/assets/images/illustrations/others/escala-plataforma-embudo-crecimiento-negocio-digital-1 1.png') !!}"  loading="lazy">
                        </div>


                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="itemList">

                            <div class="itemInfo">
                                <div class="image">
                                    <div class="containerImage">
                                        <img   src="{!! App::setFilePath('/assets/images/illustrations/others/count_orange_escala_1.png') !!}"  loading="lazy">
                                    </div>
                                </div>

                                <div class="info">
                                    <h3 class="secondaryTitle">
                                        La oportunidad
                                    </h3>
                                    <p class="text">
                                        30 millones de PYMES <br class="D_e">
                                        en Hispanoamérica
                                    </p>
                                </div>
                            </div>

                            <div class="itemInfo">
                                <div class="image">
                                    <div class="containerImage">
                                        <img   src="{!! App::setFilePath('/assets/images/illustrations/others/count_orange_escala_2.png') !!}"  loading="lazy">
                                    </div>
                                </div>

                                <div class="info">
                                    <h3 class="secondaryTitle">
                                        El problema
                                    </h3>
                                    <p class="text">
                                        Muchos dejan de crecer por <br class="D_e">
                                        fallas estratégicas e <br class="D_e">
                                        ineficiencias operativas
                                    </p>
                                </div>
                            </div>

                            <div class="itemInfo">
                                <div class="image">
                                    <div class="containerImage">
                                        <img   src="{!! App::setFilePath('/assets/images/illustrations/others/count_orange_escala_3.png') !!}"  loading="lazy">
                                    </div>
                                </div>

                                <div class="info">
                                    <h3 class="secondaryTitle">
                                        La solución
                                    </h3>
                                    <p class="text">
                                        Herramientas costo-eficientes, <br class="D_e">
                                        metodologías probadas y <br class="D_e">
                                        servicio de primera
                                    </p>
                                </div>
                            </div>

                            <div class="itemInfo">
                                <div class="image">
                                    <div class="containerImage">
                                        <img   src="{!! App::setFilePath('/assets/images/illustrations/others/count_orange_escala_heart.png') !!}"  loading="lazy">
                                    </div>
                                </div>

                                <div class="info">
                                    <h3 class="secondaryTitle">
                                        Juntos <br class="D_e">
                                        multiplicamos
                                    </h3>
                                    <p class="text">
                                        Alcance e impacto mientras <br class="D_e">
                                        hacemos crecer nuestras empresas
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </section>


            </div>

        </section>


        <section class="customSection sectionParent subPage_casoUso_agencia_marketing_10">

            <div class="section-row">

                  {{-- <section class="innerSectionElement1">

                    <h2 class="primaryTitle blackColor">
                      Qué dicen <span class="greenBlueColor">nuestros partners</span>
                    </h2>


                  </section> --}}

                  <section class="innerSectionElement2">

                    <div class="containElements">

                      <div class="containerImage">
                        <img   src="{!! App::setFilePath('/assets/images/person/partners_person.png') !!}"  loading="lazy">
                      </div>

                      <div class="info">

                        <p class="text">
                          <span class="greenBlueColor">
                            "Gracias a Escala <br class="space">
                            hemos podido crecer...
                          </span>
                          <br class="space">
                          Al entrar a Escala, se estructura más la agencia. No solo <br class="DT_e">
                          conseguimos más leads calificados sino logramos tener una cita <br class="DT_e">
                          y entregar una propuesta a cada uno de ellos. <br class="space">
                          Consistentemente, con cada campaña convertimos un 10.5% <br class="DT_e"> en clientes."
                          <br class="space">
                          <small>
                            - Milena Osorio, fundadora MO Comunicaciones
                          </small>
                        </p>

                      </div>

                    </div>


                  </section>

            </div>

          </section>


          <section id="lead-form-bottom" class="component-bannerForms7-t1 bg-color customSection sectionParent subPage_casoUso_agencia_marketing_11 ">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="groupElements row">



                            <div class="form7 col-md-12 col-lg-6">

                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <h5 class="titleFormat blackcolor">Aplica para ser Partner</h5>

                                        <!-- Escala embed form ffb24e48-3198-4ee5-901c-bfb344fff010 -->
          <script id="escala-form-ffb24e48-3198-4ee5-901c-bfb344fff010-ran09596642574117911dom" data-version="0.1.0">
            window["escala-form-ffb24e48-3198-4ee5-901c-bfb344fff010-ran09596642574117911dom"]={e:"page",f:"ffb24e48-3198-4ee5-901c-bfb344fff010",l:"es",r:"ran09596642574117911dom"};function escInitFormImpl(e){!function(){var a=window.addEventListener?"addEventListener":"attachEvent";(0,window[a])("attachEvent"===a?"onmessage":"message",function(e){if("escalaForm"===e.data.origin)if("init"===e.data.eventName&&e.data.height){const a=document.querySelector('[escala-element-form="escala-form-'+e.data.instance+'"]');a&&(a.height=e.data.height)}else"escala_lead"===e.data.eventName&&("function"==typeof fbq&&(e.data.leadData&&e.data.leadData.contact_email?fbq("trackCustom","escala_lead",{email:e.data.leadData.contact_email},{eventID:e.data.leadData.deduplicationId}):fbq("trackCustom","escala_lead",{},{eventID:e.data.leadData.deduplicationId})),"function"==typeof gtag&&(e.data.leadData&&e.data.leadData.contact_email?gtag("event","generate_lead",{event_category:"engagement",event_label:"escala_lead",email:e.data.leadData.contact_email}):gtag("event","generate_lead",{event_category:"engagement",event_label:"escala_lead"})),"undefined"!=typeof dataLayer&&dataLayer.push&&"function"==typeof dataLayer.push&&(e.data.leadData&&e.data.leadData.contact_email?dataLayer.push({event:"escala_lead",email:e.data.leadData.contact_email}):dataLayer.push({event:"escala_lead"})))});var t="escala-iframe-{f}-{l}-{r}".replace("{f}",e.f).replace("{l}",e.l).replace("{r}",e.r),n=document.getElementById(t);n&&n.remove(),n=document.createElement("iframe");var o=btoa(JSON.stringify({loc:location.href,title:encodeURIComponent(document.title),ref:document.referrer})),d=(e.f+"-"+e.r+"-"+Math.random()).replace(".","-"),l="form="+e.f+"&lang="+e.l+"&instance="+d+"&host="+o+"&v="+Math.random();n.setAttribute("src","https://escalapages.com/plugins/forms/embed.html?"+l);for(var r=["marginwidth","marginheight","frameborder","vspace","hspace"],c=0;c<r.length;c++)n.setAttribute(r[c],"0");n.setAttribute("scrolling","no"),n.width="100%",n.setAttribute("escala-element-form","escala-form-"+d),n.setAttribute("id",t);var i=document.getElementById("escala-form-"+e.f+"-"+e.r),m=document.getElementsByTagName("body")[0];m.contains(i)?i.parentElement.appendChild(n):m.appendChild(n)}()}function escInitForm(){var e=window["escala-form-ffb24e48-3198-4ee5-901c-bfb344fff010-ran09596642574117911dom"];"elementor-popup"===e.e?jQuery(document).ready(function(){jQuery(document).on("elementor/popup/show",()=>{escInitFormImpl(e)})}):escInitFormImpl(e)}window.addEventListener?window.addEventListener("load",escInitForm,!1):window.attachEvent?window.attachEvent("onload",escInitForm):window.onload=escInitForm;
          </script>
          <!-- Escala embed form ffb24e48-3198-4ee5-901c-bfb344fff010 -->

                                    </div>

                                </div>
                            </div>


                            <div class="info col-md-12 col-lg-6">

                                <div class="containElements">

                                    <h2 class="principalBigTitle blackColor">

            <span style="color: #FAD872">Gana hasta 30% de comisión,</span> <br class="DT_e">
            transforma empresas e influye <br class="DT_e">
            en el desarrollo del mercado

                                    </h2>

                                    <div class="containerImage">
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/astronaut_jump.png') !!}" alt="" loading="lazy">
                                    </div>



                                </div>


                            </div>


                    </div>

                </section>

            </div>

          </section>


    </div>

</div>

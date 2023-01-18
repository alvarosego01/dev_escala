<div id="subPage_casoUso_asesoria">
    <div class="sections">

{{--
        <section class="component-info-text-image-T1 customSection sectionParent subPage_casoUso_asesoria_0 ">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h1 class="primaryTitle">
                                Cierra más contratos y <br class="space">
                                <span class="greenBlueColor">
                                    brinda seguimiento <br class="space">
                                    oportuno a tus clientes
                                </span>
                            </h1>

                            <p class="text">
                                Con el CRM más fácil de usar y nuestras herramientas <br class="desktopTabletElement">
                                de automatización de marketing y ventas
                            </p>

                        </div>

                        <div class="image col-md-12 col-lg-6">
                            <div class="containerImage">

                                <img src="{!! App::setFilePath('/assets/images/person/home_pantalla_CRM_09_chica_asesoria.png') !!}" loading="lazy">

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
         'classSection' => 'threeCol subPage_casoUso_asesoria_0',
         'title' => '
            <small >
                Caso de Uso: <span class="orangeColor">Consultoría y Coaching</span></small> <br class="space">
                Cierra más contratos y <br class="space">
                <span class="greenBlueColor">fideliza a tus clientes</span>
        ',
         'text' => '
            Con el CRM más fácil de usar y nuestras herramientas <br class="desktopTabletElement">
            de automatización de marketing y ventas
          ',
         'threeCol' => true,
         'textForm' => '
            Recibe un tour guiado <br class="space"> de Escala
         ',
         'backgroundImage' => null,
      'overlayImage' => null,
      'image' => App::setFilePath('/assets/images/person/home_pantalla_CRM_09_chica_asesoria.png'),
      'img_alt' => 'Escala caso de uso marketing'
      ) ;
      @endphp

      @header_t1( $parameters )
      @endheader_t1

      @php
      $parameters = [
          'type' => 'backgroundColor',
          'classSection' => 'subPage_casoUso_asesoria_2',
          'enableTitle' => true,
          'titlePrincipal' => '
            Otros  profesionales que pueden <span class="greenBlueColor">
                atraer, <br class="desktopTabletElement">
                convertir y fidelizar clientes con Escala
            </span>
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
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_asesoria_a1_1.png'),
                  'title' => '
                  Abogados
      ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_asesoria_a1_2.png'),
                  'title' => '
                  Coaches
      ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_asesoria_a1_3.png'),
                  'title' => '
                  Contadores
      ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_asesoria_a1_4.png'),
                  'title' => '
                  Ingenieros
      ',
                  'enableButton' => false,
              ],
          ],
      ];
  @endphp

  @contain_multiple_cards_T2($parameters)
  @endcontain_multiple_cards_T2


  <section class="customSection sectionParent subPage_casoUso_asesoria_3">

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

                    <video class="video-js" controls preload="none" {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                        data-setup="{
                    autoplay: false
                  }"
                        poster="{!! App::setFilePath('/assets/images/illustrations/others/caso_de_uso_industria_consultoria.png') !!}">
                        <source src="{!! App::setFilePath('/assets/videos/caso_de_uso_industria_consultoria.mp4') !!}" type="video/mp4" />
                        <source src="{!! App::setFilePath('/assets/videos/caso_de_uso_industria_consultoria.mp4') !!}" type="video/webm" />
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
                'classSection' => 'subPage_casoUso_asesoria_1',
                'enableTitle' => true,
                'titlePrincipal' => '
                    Centraliza tus operaciones de <br class="desktopTabletElement">
                    <span class="greenBlueColor">marketing, ventas y fidelización</span>
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
                            Captura mejores <br class="space">
                            leads
                        ',
                        'text' => '
                            Atrae y convierte más prospectos <br class="desktopTabletElement">
                            calificados en menos tiempo con <br class="desktopTabletElement">
                            anuncios y landing pages
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_0_2.png'),
                        'title' => '
                            Reduce el tiempo <br class="space">
                            de compra
                        ',
                        'text' => '
                            Optimiza y da seguimiento a tu <br class="desktopTabletElement">
                            embudo de conversión para <br class="desktopTabletElement">
                            agilizar el cierre de prospectos
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_asesoria_0_3.png'),
                        'title' => '
                            Aumenta tus ingresos <br class="space">
                            recurrentes
                        ',
                        'text' => '
                            Automatiza campañas de recompra <br class="desktopTabletElement">
                            para aumentar el ticket promedio de <br class="desktopTabletElement">
                            tu cartera de clientes.
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_0_4.png'),
                        'title' => '
                            Reduce costos
                            ',
                        'text' => '
                            Evita gastar en múltiples herramientas <br class="desktopTabletElement">
                            digitales y simplifica tus procesos con el <br class="desktopTabletElement">
                            CRM y las automatizaciones de Escala
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_asesoria_0_5.png'),
                        'title' => '
                            Mejora la satisfacción de <br class="space">
                            tus clientes
                        ',
                        'text' => '
                            Planifica las comunicaciones <br class="desktopTabletElement">
                            y cumple con las actividades <br class="desktopTabletElement">
                            de tu plan de trabajo
                        ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_c_asesoria_0_6.png'),
                        'title' => '
                            Mide la salud de <br class="space">
                            tu negocio
                        ',
                        'text' => '
                            Revisa las métricas de cada <br class="desktopTabletElement">
                            campaña y utiliza dashboards <br class="desktopTabletElement">
                            para monitorear los resultados <br class="desktopTabletElement">
                            de marketing y ventas
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
                'classSection' => 'subPage_casoUso_asesoria_4',
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
                    Poca asistencia a los eventos de promoción <br class="desktopTabletElement">
                    y dificultad para llegar al público objetivo.</li>
                <li>
                     <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                    Falta de registro de las actividades y <br class="desktopTabletElement">
                    comunicaciones intercambiadas con cada cliente</li>
                <li>
                     <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                    Base de datos sin segmentación que obstaculiza <br class="desktopTabletElement">
                    la interacción personalizada</li>
                <li>
                     <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                    Pérdida de oportunidades con prospectos <br class="desktopTabletElement">
                    calificados por retrasos en la comunicación.</li>
                <li>
                     <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                    Retrasos e incumplimientos en las actividades <br class="desktopTabletElement">
                    acordadas con la cartera de clientes</li>
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
                Anuncios y landing pages para promover eventos,<br class="desktopTabletElement"> obtener registros y asistencia de leads calificados.</li>
            <li>
                <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                Historial de eventos clave para cada contacto que <br class="desktopTabletElement"> guardes en el CRM</li>
            <li>
                <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                Etiquetas del CRM para segmentar a tus contactos <br class="desktopTabletElement"> y comunicarte de manera asertiva.</li>
            <li>
                <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                Email marketing y automatizaciones para atender <br class="desktopTabletElement"> oportunamente a tus leads.</li>
            <li>
                <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                Automatiza las actividades y notificaciones que <br class="desktopTabletElement"> deban cumplirse en cada etapa para que los <br class="desktopTabletElement"> proyectos de tus clientes avancen en los tiempos <br class="desktopTabletElement"> acordados</li>
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
                'classSection' => 'subPage_casoUso_asesoria_5',
                'enableTitle' => true,
                'titlePrincipal' => '
                   Optimiza tus resultados <span class="greenBlueColor">de marketing y ventas</span>
                ',
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/1Anuncios-consultoría.gif'),
                'title' => null,
                'text' => '
                    <span>
                        "Queremos posicionarnos como expertos con <br class="desktopTabletElement">
                        convocatorias masivas, pero dependemos del <br class="desktopTabletElement">
                        boca a boca para captar nuevos prospectos"
                    </span>
                    <br class="space"><br class="space">
                    Combina tus campañas de <strong>anuncios digitales</strong> para <br class="desktopTabletElement">
                    nuevos leads con convocatorias masivas de email <br class="desktopTabletElement">
                    marketing y aumenta el alcance de tu empresa.
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
                'classSection' => 'subPage_casoUso_asesoria_6',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/2Landing-consultoria.gif'),
                'title' => null,
                'text' => '
                    <span>
                        "Recibimos muchas visitas en nuestro sitio web, pero <br class="desktopTabletElement">
                        no obtenemos registros para convertirlos en clientes"
                    </span>
                    <br class="space"><br class="space">
                        Diseña <strong>landing pages</strong> de acuerdo a tu público objetivo, <br class="desktopTabletElement">
                        brinda información útil, rápida y precisa sobre tus <br class="desktopTabletElement">
                        servicios para convertir a tus visitantes en leads

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
                'classSection' => 'subPage_casoUso_asesoria_7',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/3leads-score.gif'),
                'title' => null,
                'text' => '
                   <span>
                       "Invertimos mucho tiempo y esfuerzo en <br class="desktopTabletElement">
                       identificar los prospectos mejor calificados <br class="desktopTabletElement">
                       por desorganización de los datos"
                   </span>
                   <br class="space"><br class="space">
                   Detecta los contactos fríos, tibios y calientes con
                   <strong>Lead scoring</strong> y define las estrategias para tener
                   una gestión adecuada en el CRM.
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
                'classSection' => 'subPage_casoUso_asesoria_8',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/4dashboard-consu.gif'),
                'title' => null,
                'text' => '
                   <span>
                       "Necesitamos unificar el trabajo de nuestra <br class="desktopTabletElement">
                       fuerza de ventas para proyectar mejor <br class="desktopTabletElement">
                       nuestros resultados comerciales"
                   </span>
                   <br class="space"><br class="space">
                   Observa las oportunidades asignadas, gestionadas, ganadas <br class="desktopTabletElement">
                   y perdidas, mide el desempeño de tu equipo y toma <br class="desktopTabletElement">
                   decisiones basadas en las métricas del <strong>Dashboard.</strong>
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
                'classSection' => 'subPage_casoUso_asesoria_9',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/5Segmentos-consultoria.gif'),
                'title' => null,
                'text' => '
                       <span>
                          "No tenemos un proceso de fidelización ni <br class="desktopTabletElement">
                          herramientas para tener una comunicación <br class="desktopTabletElement">
                          asertiva y personalizada con los clientes"
                       </span>
                       <br class="space"><br class="space">
                       Utiliza segmentos y etiquetas para clasificar a tus <br class="desktopTabletElement">
                       clientes y <strong>automatiza emails</strong> personalizados de <br class="desktopTabletElement">
                       acuerdo a tu perfil e intereses..
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
                'classSection' => 'subPage_casoUso_asesoria_12',
                'enableTitle' => true,
                'titlePrincipal' => '
        Nuestros usuarios <span class="greenBlueColor">cuentan su experiencia</span>
        ',
                'subTitlePrincipal' => null,
                'enableContainerButton' => true,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Recibe un demo',
                'mob_reviews' => [App::setFilePath('/assets/images/illustrations/others/ce_educ_review_home_trustpilot-1.png'), App::setFilePath('/assets/images/illustrations/others/ce_educ_review_home_trustpilot-2.png'), App::setFilePath('/assets/images/illustrations/others/ce_educ_review_home_trustpilot-3.png')],
                'desk_reviews' => [[App::setFilePath('/assets/images/illustrations/others/ce_educ_review_home_trustpilot-1.png'), App::setFilePath('/assets/images/illustrations/others/ce_educ_review_home_trustpilot-2.png'), App::setFilePath('/assets/images/illustrations/others/ce_educ_review_home_trustpilot-3.png')]],
            ];
        @endphp

        @reviews_sliders_T1($parameters)
        @endreviews_sliders_T1


    </div>

</div>

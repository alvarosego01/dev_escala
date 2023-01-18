<div id="subPage_casoUso_educacion">
    <div class="sections">


        {{-- <section class="component-info-text-image-T1 customSection sectionParent subPage_casoUso_educacion_0 ">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h1 class="primaryTitle">

                                Aumenta las nuevas <br class="space">
                                matrículas <span class="greenBlueColor">
                                    para tu <br class="space">
                                    institución educativa
                                </span>

                            </h1>

                            <p class="text">
                                Con nuestras herramientas de automatización de <br class="desktopTabletElement">
                                marketing, ventas y el CRM más fácil de usar
                            </p>

                        </div>

                        <div class="image col-md-12 col-lg-6">
                            <div class="containerImage">

                                <img src="{!! App::setFilePath('/assets/images/person/home_pantalla_CRM_08_chica 6.png') !!}" loading="lazy">

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
         'classSection' => 'threeCol subPage_casoUso_educacion_0',
         'title' => '
                <small>
                    Caso de Uso: <span class="orangeColor">Educación</span>
                    </small> <br class="space">
                Aumenta las nuevas <br class="space">
                matrículas <span class="greenBlueColor">
                    para tu <br class="space">
                    institución educativa
                </span>
        ',
         'text' => '
            Con nuestras herramientas de automatización <br class="desktopTabletElement">
            de marketing, ventas y el CRM más fácil de usar

          ',
         'threeCol' => true,
         'textForm' => '
            Recibe un tour guiado <br class="space"> de Escala
         ',
         'backgroundImage' => null,
      'overlayImage' => null,
      'image' => App::setFilePath('/assets/images/person/home_pantalla_CRM_08_chica 6.png'),
      'img_alt' => 'Escala caso de uso marketing'
      ) ;
      @endphp

      @header_t1( $parameters )
      @endheader_t1

      @php
      $parameters = [
          'type' => 'backgroundColor',
          'classSection' => 'subPage_casoUso_educacion_2',
          'enableTitle' => true,
          'titlePrincipal' => '
El CRM de marketing y ventas <br class="space">
<span class="greenBlueColor">para el sector de Educación</span>
',
          'subTitlePrincipal' => null,
          'overlay' => false,
          'enableButton' => false,
          'elements' => [
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_1_1.png'),
                  'title' => '
      Colegios
      ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_1_2.png'),
                  'title' => '
      Academias
      ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_1_3.png'),
                  'title' => '
      Universidades
      ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_1_4.png'),
                  'title' => '
      E-learning
      ',
                  'enableButton' => false,
              ],
          ],
      ];
  @endphp

  @contain_multiple_cards_T2($parameters)
  @endcontain_multiple_cards_T2


  <section class="customSection sectionParent subPage_casoUso_educacion_3">

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
                        poster="{!! App::setFilePath('/assets/images/illustrations/others/tour-educacion.png') !!}">
                        <source src="{!! App::setFilePath('/assets/videos/tour_educación.mp4') !!}" type="video/mp4" />
                        <source src="{!! App::setFilePath('/assets/videos/tour_educación.mp4') !!}" type="video/webm" />
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
                'classSection' => 'subPage_casoUso_educacion_1',
                'enableTitle' => true,
                'titlePrincipal' => '
    Acelera el crecimiento <span class="greenBlueColor">de tu institución</span>
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
              Genera mejores <br class="space"> leads
               ',
                        'text' => '
              Aumenta la cantidad de <br class="desktopTabletElement">
              aspirantes calificados con <br class="desktopTabletElement">
              formularios personalizados para <br class="desktopTabletElement">
              cada programa y sede
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_0_2.png'),
                        'title' => '
              Optimiza tus operaciones <br class="space">
              de venta
               ',
                        'text' => '
              Mejora la tasa de conversión de <br class="desktopTabletElement">
              aspirantes a estudiantes con procesos <br class="desktopTabletElement">
              de seguimiento efectivo
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_0_3.png'),
                        'title' => '
              Fideliza a la comunidad <br class="space">
              estudiantil
               ',
                        'text' => '
              Nutre la relación con estudiantes <br class="desktopTabletElement">
              y egresados para incrementar el <br class="desktopTabletElement">
              retorno de inversión
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_0_4.png'),
                        'title' => '
              Reduce costos operativos
              <br class="desktopElement">
              <br class="desktopElement">
               ',
                        'text' => '
              Ahorra recursos en el proceso <br class="desktopTabletElement">
              de matriculación mediante <br class="desktopTabletElement">
              automatizaciones
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_0_5.png'),
                        'title' => '
              Incrementa tus productos <br class="space">
              académicos
               ',
                        'text' => '
              Impulsa programas educativos <br class="desktopTabletElement">
              complementarios a tu oferta <br class="desktopTabletElement">
              principal para atraer nuevos leads <br class="desktopTabletElement">
              y gestiónalos desde el CRM.
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_ce_0_6.png'),
                        'title' => '
              Mejora la comunicación <br class="space">
              interna
               ',
                        'text' => '
              Elabora segmentos exclusivos <br class="desktopTabletElement">para empleados
              de tu institución<br class="desktopTabletElement"> y mantén una
              comunicación <br class="desktopTabletElement">activa por email marketing
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
                'classSection' => 'subPage_casoUso_educacion_4',
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
                    Captar aspirantes no calificados por <br class="desktopTabletElement">
                procedimientos ineficaces</li>
                <li>
                    <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                    Dificultad para brindar una respuesta rápida a <br class="desktopTabletElement">
                  los leads interesados</li>
                <li>
                    <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                    Complicaciones para identificar aspirantes <br class="desktopTabletElement">
                  con probabilidades de cierre</li>
                <li>
                    <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                    Pérdida de datos en hojas de cálculo e <br class="desktopTabletElement">
                  imposibilidad de obtener reportes en tiempo <br class="desktopTabletElement">
                  real sobre las metas del cierre de matrículas</li>
                <li>
                    <img src="'. App::setFilePath('/assets/images/illustrations/others/check_negative.png') .'" class="checkCase">
                    Fallas en la difusión de promociones e <br class="desktopTabletElement">
                  información atractiva para cerrar ventas y <br class="desktopTabletElement">
                  fidelizar a la comunidad</li>
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
                    Anuncios y Landing pages que atraen y recolectan <br class="desktopTabletElement">
              datos útiles sobre posibles estudiantes</li>

              <li>
                <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                Asignación veloz y automatizada a los asesores <br class="desktopTabletElement">
              que mejora la gestión de las comunicaciones</li>

              <li>
                <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                Lead Scoring para calificar el estado del prospecto <br class="desktopTabletElement">
              y hacer seguimiento adecuado</li>

              <li>
                <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                El CRM y el Dashboard sustituyen las hojas de <br class="desktopTabletElement">
              cálculo, optimizan tu sistema de gestión y <br class="desktopTabletElement">
              proporcionan reportes en tiempo real.</li>

              <li>
                <img src="'. App::setFilePath('/assets/images/illustrations/others/check_positive.png') .'" class="checkCase">
                Uso de Email Marketing y Automatizaciones para <br class="desktopTabletElement">
              promocionar programas atractivos a la comunidad</li>
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
                'classSection' => 'subPage_casoUso_educacion_5',
                'enableTitle' => true,
                'titlePrincipal' => '
    Optimiza tus resultados <span class="greenBlueColor">de marketing y ventas</span>
 ',
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/Landing1.gif'),
                'title' => null,
                'text' => '
    <span>
      "Recibo visitas en mi sitio web, pero no capturo <br class="desktopTabletElement">
      registros de los interesados adecuados"
    </span>
    <br class="space"><br class="space">
    Las <strong>landing pages</strong> de Escala recolectan datos clave de tus <br class="desktopTabletElement">
    aspirantes y posibles prospectos, brindan información útil <br class="desktopTabletElement">
    y activan tus procesos comerciales para matricular.
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
                'classSection' => 'subPage_casoUso_educacion_6',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/anuncios-educación.gif'),
                'title' => null,
                'text' => '
    <span>
      "Tengo un proceso ineficiente que no me permite <br class="desktopTabletElement">
      llegar al público objetivo de la institución"
    </span>
    <br class="space"><br class="space">
    Con los <strong>anuncios digitales</strong> de Escala, consigue aspirantes <br class="desktopTabletElement">
    calificados para alcanzar tus metas comerciales.
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
                'classSection' => 'subPage_casoUso_educacion_7',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/CRM-educación.gif'),
                'title' => null,
                'text' => '
    <span>
      "Necesitamos organizar el manejo de la <br class="desktopTabletElement">
      información para nuestros asesores"
    </span>
    <br class="space"><br class="space">
    En el <strong>CRM de Escala</strong>, filtras, etiquetas y segmentas tu base <br class="desktopTabletElement">
    de datos para organizarla de acuerdo a cada programa <br class="desktopTabletElement">
    de la oferta académica.
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
                'classSection' => 'subPage_casoUso_educacion_8',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/Email-marketing-educación.gif'),
                'title' => null,
                'text' => '
    <span>
      "Me gustaría impulsar las matriculaciones con <br class="desktopTabletElement">
      promociones para mi base de datos"
    </span>
    <br class="space"><br class="space">
    Ejecuta tu plan de comunicaciones con la herramienta <br class="desktopTabletElement">
    de <strong>email marketing</strong> de Escala para atraer, mantener <br class="desktopTabletElement">
    y convertir en ventas el interés de tus contactos.
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
                'classSection' => 'subPage_casoUso_educacion_9',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/automatizaciones.gif'),
                'title' => null,
                'text' => '
     <span>
        "No logramos responder a tiempo a los aspirantes y <br class="desktopTabletElement">
        perdemos gran parte de la inversión en marketing"
     </span>
     <br class="space"><br class="space">
    Optimiza tus operaciones para asignar leads a tu equipo <br class="desktopTabletElement">
    comercial con las <strong>automatizaciones</strong> de Escala.
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
                'classSection' => 'subPage_casoUso_educacion_10',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/dashboard.gif'),
                'title' => null,
                'text' => '
    <span>
      "Quisiera obtener reportes en tiempo real para conocer el <br class="desktopTabletElement">
      estatus de las metas y tomar decisiones acertadas"
    </span>
    <br class="space"><br class="space">
    Visualiza el <strong>dashboard y las analíticas</strong> de Escala <br class="desktopTabletElement">
    para conocer rápidamente la salud de tu negocio.
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
                'classSection' => 'subPage_casoUso_educacion_12',
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

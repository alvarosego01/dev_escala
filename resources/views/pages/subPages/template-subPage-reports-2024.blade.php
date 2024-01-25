<div id="subPage_reports">

    <div class="sections">

        @php
            $elementsReviews = [
                [
                    'logo' => App::setFilePath('/assets/images/illustrations/others/trust_tag.png'),
                    'text' => 'Escala / plataforma CRM',
                    'points' => '4.8 / 5',
                ],
                [
                    'logo' => App::setFilePath('/assets/images/illustrations/others/google_tag.png'),
                    'text' => 'Escala / plataforma CRM',
                    'points' => '4.9 / 5',
                ],
                [
                    'logo' => App::setFilePath('/assets/images/illustrations/others/capterra_tag.png'),
                    'text' => 'Escala / plataforma CRM',
                    'points' => '4.8 / 5',
                ],
            ];
        @endphp

        <section id="lead-form"
            class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol subPage_reports subPage_reports_0 ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_reports_0.svg') }}')"
                class="backgroundFull">


                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta"
                                                src="{{ App::setFilePath('/assets/images/person/am/am_yellow_circle.png') }}"
                                                loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">

                                            <span>Toma mejores decisiones</span> <br class="space">
                                            con reportes que creas en <br class="space">
                                            minutos dentro de Escala

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            Nuestro CRM facilita obtener la información <br
                                                class="space">
                                            que necesitas para escalar tu PYME
                                        </p>

                                        @php
                                            $elements = [
                                                [
                                                    'text' => '<strong>Software</strong> completo <br class="space"> y fácil de usar',
                                                ],
                                                [
                                                    'text' => '<strong>Entrenamiento</strong> <br class="space">
                                                    estratégico y técnico',
                                                ],
                                                [
                                                    'text' => '<strong>Acompañamiento</strong> <br class="space">
                                                    personalizado',
                                                ],
                                            ];
                                        @endphp

                                        <div class="features">
                                            @foreach ($elements as $item)
                                                <div class="element">
                                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon_check_orange.png') }}"
                                                        alt="" class="icon">
                                                    <h5 class="text">
                                                        {!! $item['text'] !!}
                                                    </h5>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="elements hideOnmobile hideOnTablet">

                                            @foreach ($elementsReviews as $item)
                                                <div class="refersElement">

                                                    <div class="infoInner">
                                                        <div class="tag">
                                                            <div class="containerImage">
                                                                <img src="{!! $item['logo'] !!}" loading="lazy">
                                                            </div>

                                                            <span class="points">
                                                                {!! $item['points'] !!}
                                                            </span>
                                                        </div>
                                                        <p class="text">
                                                            {!! $item['text'] !!}
                                                        </p>
                                                        <div class="stars">
                                                            <div class="containerImage">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>



                            </div>
                            <div class="form7 col-md-12 col-lg-4 ">

                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <h5 class="titleFormat blackcolor">Recibe un demo-tour <br class="space">
                                            personalizado de Escala</h5>


                                        @php
                                            $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                            $_rs = [];
                                            $_formShortcode = null;
                                            if ($_data = get_posts($_args)) {
                                                foreach ($_data as $_key) {
                                                    $_rs[$_key->ID] = $_key->post_title;
                                                    if ($_key->post_title === 'Profile demo - Flujo Demo') {
                                                        $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                                    }
                                                }
                                            } else {
                                                $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                            }
                                        @endphp
                                        {!! do_shortcode($_formShortcode) !!}


                                    </div>

                                </div>
                            </div>

                            <div class="imageReviewsMobile hideOnDesktop">

                                <div class="image">
                                    <div class="containerImage">
                                        <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta"
                                            src="{{ App::setFilePath('/assets/images/person/am/am_yellow_circle.png') }}"
                                            loading="lazy">
                                    </div>

                                </div>

                                <div class="elements">

                                    @foreach ($elementsReviews as $item)
                                        <div class="refersElement">

                                            <div class="infoInner">
                                                <div class="tag">
                                                    <div class="containerImage">
                                                        <img src="{!! $item['logo'] !!}" loading="lazy">
                                                    </div>

                                                    <span class="points">
                                                        {!! $item['points'] !!}
                                                    </span>
                                                </div>
                                                <p class="text">
                                                    {!! $item['text'] !!}
                                                </p>
                                                <div class="stars">
                                                    <div class="containerImage">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    @endforeach

                                </div>

                            </div>





                        </div>

                    </section>

                </div>



            </div>

        </section>


        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'subPage_reports_1',
                'enableTitle' => true,
                'titlePrincipal' => '
    <small>
        Olvídate de las fórmulas complicadas de Excel o <br class="space">
        de los sistemas de BI difíciles de integrar
    </small>
  Los reportes de Escala simplifican:
    ',
                'subTitlePrincipal' => null,
                'overlay' => false,
                'enableButton' => false,
                'elements' => [
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_report_1.png'),
                        'title' => '
                Medir
                ',
                        'text' => '
                Los resultados de <br class="space">
                tus esfuerzos <br class="space">
                de marketing y ventas
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_report_2.png'),
                        'title' => '
                    Analizar
            ',
                        'text' => '
                Rápidamente lo que <br class="space">
                funciona y las <br class="space">
                oportunidades de mejora
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_report_3.png'),
                        'title' => '
            Optimizar
            ',
                        'text' => '
                Tu éxito comercial con <br class="space">
                cambios estratégicos <br class="space">
                basados en data
            ',
                        'enableButton' => false,
                    ],
                ],
            ];
        @endphp

        @contain_multiple_cards_T2($parameters)
        @endcontain_multiple_cards_T2


        <section class="customSection sectionParent subPage_reports_2">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="title">
                            Obtén información clave para acelerar el <br class="desktopTabletElement">
                            crecimiento de tu empresa
                        </h2>
                        <p class="text">
                            En Escala puedes construir reportes personalizados <br class="desktopTabletElement">
                            para analizar resultados como:
                        </p>

                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="row">

                            <div class="col-md-12 col-lg-5 selectors">

                                @php
                                    $elements = [
                                        [
                                            'img' => App::setFilePath('/assets/images/illustrations/others/reports_features_01.png'),
                                            'title' => 'Leads generados',
                                            'icon' => null,
                                            'text' => '
                                                Conoce la cantidad de prospectos que <br class="desktopTabletElement"> conseguiste en un periodo de tiempo.
                                                ',
                                        ],
                                        [
                                            'img' => App::setFilePath('/assets/images/illustrations/others/reports_features_02.png'),
                                            'title' => 'Cumplimiento en ventas',
                                            'icon' => null,
                                            'text' => '
                                            Compara el resultado comercial, frente <br class="desktopTabletElement"> a los objetivos proyectados.',
                                        ],
                                        [
                                            'img' => App::setFilePath('/assets/images/illustrations/others/reports_features_03.png'),
                                            'title' => 'Perfil de tus contactos',
                                            'icon' => null,
                                            'text' => '
                                                Explora fácilmente la distribución <br class="desktopTabletElement"> de perfiles entre clientes y prospectos.',
                                        ],
                                        [
                                            'img' => App::setFilePath('/assets/images/illustrations/others/reports_features_04.png'),
                                            'title' => 'Estado de tu embudo',
                                            'icon' => null,
                                            'text' => '
                                            Mide, evalúa y optimiza las etapas <br class="desktopTabletElement"> de tu proceso comercial.',
                                        ]
                                    ];
                                @endphp

                                <ul class="elements selectorInfo">

                                    @foreach ($elements as $item)
                                        <li class="element    @if ($loop->first) active @endif"
                                            info_index="{!! $loop->index !!}">
                                             <h3>
                                                {!! $item['title'] !!}
                                            </h3>
                                        </li>
                                    @endforeach

                                </ul>

                                <script type="text/javascript">

                                    var infoArray = @php echo json_encode($elements); @endphp;

                                    jQuery('ul.selectorInfo li').click(function(e) {

                                        jQuery('ul.selectorInfo li').removeClass('active');
                                        jQuery('.showInfoSelectors .infoIn .image .containerImage img').removeClass('animate__animated animate__fadeInRight');

                                        jQuery(this).addClass('active');

                                        var index = jQuery(this).attr('info_index');

                                            setTimeout(() => {
                                        jQuery('.showInfoSelectors .infoIn .text').html(infoArray[index]['text']);
                                        jQuery('.showInfoSelectors .infoIn .image .containerImage img').attr('src', infoArray[index]['img']);
                                        jQuery('.showInfoSelectors .infoIn .image .containerImage img').addClass('animate__animated animate__fadeInRight');
                                            }, 100);

                                    });
                                </script>

                            </div>

                            <div class="col-md-12 col-lg-7 info showInfoSelectors">

                                <div class="infoIn">

                                    <div class="image">

                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/reports_image.png') !!}" loading="lazy">
                                        </div>

                                    </div>
                                    <p class="text">
                                        {!! $elements[0]['text'] !!}
                                    </p>

                                    <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                        Recibir un demo
                                    </a>


                                </div>

                            </div>

                        </div>


                    </div>

                </section>

            </div>

        </section>

        @php
            $elements = array(
                [
                'type' => 'backgroundColor',
                'classSection' => 'subPage_reports_3',
                'enableTitle' => true,
                'titlePrincipal' => '
                    Crear potentes reportes de marketing y ventas <br class="desktopTabletElement">
                    se logra en pocos clics
                ',
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/1.reports_Plantillas-listas-para-usar.gif'),
                'title' => '
                    Ahorra tiempo con <br class="space">
                    <span>plantillas pre-diseñadas</span>
                ',
                'text' => '
                    En Escala encontrarás reportes <br class="desktopTabletElement">
                    “base” para agilizar la construcción <br class="desktopTabletElement">
                    de los mismos.
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'left',
                ],
                [
                       'type' => 'backgroundColor',
                'classSection' => 'subPage_reports_4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/2.reports_Reportes desde cero.gif'),
                'title' => '
                        Construye reportes <br class="space">
                        <span>fácilmente desde cero</span>
                ',
                'text' => '
                    ¿No encuentras la plantilla que necesitas? <br class="desktopTabletElement">
                    ¡Calma! construye en pocos pasos los <br class="desktopTabletElement">
                    reportes que necesitas.
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
                ],
                [
                'type' => 'backgroundColor',
                'classSection' => 'subPage_reports_5',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/3.reports_Distintos tipos de gráficos.gif'),
                'title' => '
                    Crea distintos tipos <br class="space">
                    <span>de gráficos</span>
                ',
                'text' => '
                    En Escala puedes generar pie charts, <br class="desktopTabletElement">
                    gráficos de barra, embudos, y más.
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'left',
                ],
                [
                'type' => 'backgroundColor',
                'classSection' => 'subPage_reports_6',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/4.reports_Reportes-en-tiempo-real.gif'),
                'title' => '
                  Actualización de la <br class="space">
                información <span>en tiempo real</span>
                ',
                'text' => '
                    Encuentra datos siempre frescos para <br class="desktopTabletElement">
                    construir reportes que van al ritmo de <br class="desktopTabletElement">
                    tu negocio.
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
                ],
                [
                'type' => 'backgroundColor',
                'classSection' => 'subPage_reports_6',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/5.reports_Vista simplificada.gif'),
                'title' => '
                    Las vistas amigables <br class="space">
                    <span>simplifican el análisis</span>
                ',
                'text' => '
                    Diseñamos tablas visualmente atractivas <br class="desktopTabletElement">
                    porque leer data de esta forma permite <br class="desktopTabletElement">
                    tomar decisiones más ágilmente.
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'left',
                ],
                [
                'type' => 'backgroundColor',
                'classSection' => 'subPage_reports_7',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/6.reports_descargas.gif'),
                'title' => '
                    Descarga los reportes <br class="space">
                    <span>para compartir</span>
                ',
                'text' => '
                    Con un solo clic podrás descargar <br class="desktopTabletElement">
                    los reportes en formato Excel.
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
                ]
            )
        @endphp


        @if (isset($elements) && count($elements) > 0)
                <section class="sectionInfo">
            @foreach ($elements as $item)

                @contain_text_image_T1($item)
                @endcontain_text_image_T1


            @endforeach
                    {{--
                     <img src="{!!  App::setFilePath('/assets/images/banners/bg_reports_1.svg') !!}" alt="" class="overlay_1">
                    <img src="{!!  App::setFilePath('/assets/images/banners/bg_reports_2.svg') !!}" alt="" class="overlay_2">
                    <img src="{!!  App::setFilePath('/assets/images/banners/bg_reports_3.svg') !!}" alt="" class="overlay_3">
                    --}}

                    <div
                    class="overlay_1"
                     style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_reports_1.svg') !!})">
                    </div>
                    <div
                    class="overlay_2"
                     style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_reports_2.svg') !!})">
                    </div>
                    <div
                    class="overlay_3"
                     style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_reports_3.svg') !!})">
                    </div>
                </section>
        @endif


             <section
            class="customSection sectionParent subPage_reports_8">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                         <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibir demo
                        </a>

                </section>

            </div>

             </section>


     <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_reports_4.png') !!})"
            class="customSection sectionParent subPage_reports_9">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                         <div class="image">

                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/person/am/am_reports_up.png') !!}" alt="">
                            </div>

                        </div>

                        <div class="info">
                            <p class="text">
                                <span>
                                    “Estoy obsesionado con ver diariamente las <br class="space">
                                    métricas de las empresas en las que estoy <br class="space"> involucrado.
                                </span> Los reportes ayudan a tomar <br class="space">
                                decisiones inteligentes y oportunas para <br class="space"> conseguir
                                mejores resultados”.
                                <br class="space"><br class="space">

                                <span class="sub">
                                Andrés Moreno
                                <br class="space">
                                <small>Fundador de Escala & Open English</small>
                                </span>

                            </p>

                        </div>

                    </div>

                </section>

            </div>

        </section>



             <section
            class="customSection sectionParent subPage_reports_10">

            <div class="section-row">

               <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle">
                          <small>¿Primerizo creando reportes en tu empresa?</small>
                          ¡Cuenta con el entrenamiento <br class="desktopTabletElement">
                            de nuestro equipo!
                        </h2>

                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">
                         <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/reports_notification.png') !!}" loading="lazy">
                        </div>

                        <p class="text">
                            <span>Te entrenamos estratégica y técnicamente</span> <br class="space">
                            para que aprendas a definir y construir fácilmente los <br class="desktopTabletElement">
                            reportes que necesitas dentro de Escala
                        </p>
                    </div>

                </section>

            </div>

             </section>

               @php
            $parameters = [
                'type' => 'backgroundImage',
                'backgroundImageFile' => App::setFilePath('/assets/images/banners/bg_reports_5.svg'),
                'classSection' => 'subPage_reports_11',
                'enableTitle' => true,
                'titlePrincipal' => '
  Tomar mejores decisiones estratégicas con el <br class="desktopTabletElement">
  CRM de Escala, es muy sencillo:',
                'subTitlePrincipal' => null,
                'overlay' => false,
                'enableButton' => false,
                'elements' => [
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_talk_4.png'),
                        'title' => null,
                        'text' => '
                <span>Solicita un demo</span> <br class="space">
                y conoce el plan que <br class="space">
                más se adapta a las <br class="space">
                necesidades de tu empresa
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_talk_5.png'),
                        'title' => null,
                        'text' => '
                            <span>Suscríbete a uno de los</span> <br class="space">
                            planes pro de Escala y <br class="space">
                            recibe acompañamiento <br class="space">
                            todo el año
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_talk_6.png'),
                        'title' => null,
                        'text' => '
                            <span>Empieza a escalar tus</span> <br class="space">
                            ventas con reportes <br class="space">
                            personalizados que <br class="space">
                            optimizan resultados
            ',
                        'enableButton' => false,
                    ],
                ],
            ];
        @endphp

        @contain_multiple_cards_T2($parameters)
        @endcontain_multiple_cards_T2



             <section
            class="customSection sectionParent subPage_reports_12">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                         <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibir demo
                        </a>

                </section>

            </div>

             </section>


        <section class='w-full customSection sectionParent subPage_reports_13'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                      Qué dicen nuestros clientes sobre Escala
                        </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                        @php
                            $reviews = [
                                App::setFilePath('/assets/images/illustrations/others/report_trust_1.png'),
                                App::setFilePath('/assets/images/illustrations/others/report_trust_2.png'),
                                App::setFilePath('/assets/images/illustrations/others/report_trust_3.png')];
                        @endphp

                        @foreach ($reviews as $item)
                            <div class="review">
                                <div class="containerImage">
                                    <img src="{!! $item !!}" loading="lazy">
                                </div>
                            </div>
                        @endforeach

                    </div>

                </section>
            </div>

        </section>

         <section class="sectionParent customSection subPage_reports_14">
            <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg_reports_6.svg') !!}')"
            class="backgroundFull">
            <div class="section-row">
                <section class="innerSectionElement sct2">
                    <div class="groupElements row">

                         <div class="image col-md-12 col-lg-4">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/reports_rocket_up.png') !!}" loading="lazy">
                            </div>
                        </div>

                        <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                            <h3 class="secondaryTitle">
                                <span>Lo que no se mide no se puede</span> <br class="desktopTabletElement">
                                gestionar ni optimizar
                            </h3>
                              <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Crear reportes ahora
                                </a>
                        </div>

                    </div>
                </section>
            </div>
            </div>
        </section>



    </div>


</div>

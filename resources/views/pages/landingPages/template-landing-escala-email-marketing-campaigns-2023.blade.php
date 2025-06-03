<div id="landing_emailMarketingCampaigns_2023">

    <div class="sections">

        <section id="lead-form" class="hero2025 landing_emailMarketingCampaigns_2023_0">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-email-hero-2025.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct2">

                    </section>
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <h1 class="principalBigTitle">
                                Convierte más <br class="space">
                                clientes con <br class="space">
                                emails potentes y <br class="space">
                                fáciles de crear
                            </h1>

                            <h1 class="principalBigTitleMb">
                                Convierte más <br class="space">
                                clientes con <br class="space">
                                emails potentes y <br class="space">
                                fáciles de crear

                            </h1>
                            <p class="principalBigText">
                                Dile adiós a la bandeja de spam. Con el <br class="space">
                                constructor de Escala, envía mensajes <br class="space">
                                masivos, personalizados y automatizados <br class="space">
                                que conectan y venden mejor.
                            </p>
                            <div class="containerImage">
                                <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/ceo-escala-alfonso-2025.png') !!}" loading="lazy">
                                <img class="iconClick" src="{!! App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') !!}" loading="lazy" onclick="openVideoPopup()">
                            </div>
                        </div>
                    </section>



                    <section class="innerSectionElement sct3">
                        <div class="form7">
                            <div class="containElements">

                                <div class="formatForm redirectWeb" redirectweb="true">

                                    <h5 class="titleFormat blackcolor"> Recibe un <br class="space">
                                        demo personalizado</h5>

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
                    </section>
                </div>
            </div>
        </section>
        <section class="customSection sectionParent landing_emailMarketingCampaigns_2023_1">
            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="groupElements row">
                        <div class="info col-md-12 col-lg-8 ">
                            <div class="containElements">
                                @php
                                $elementsReviews = [
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
                                [
                                'logo' =>
                                App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
                                'text' => 'Escala / plataforma CRM',
                                'points' => '4.8 / 5',
                                ]
                                ];
                                @endphp
                                <div class="ele reviews">
                                    <div class="elements">
                                        <div class="iconApp">
                                            <a target="_blank"
                                                href="https://www.getapp.com/customer-management-software/crm/category-leaders">
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_app_record_2025_category.svg') !!}"
                                                    loading="lazy">
                                            </a>
                                        </div>
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
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icons-stars-yellow.svg') !!}"
                                                            loading="lazy">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>
        <section class="w-full customSection sectionParent landing_emailMarketingCampaigns_2023_5">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            Todo lo que tus emails necesitan, <br class="space">
                            en un solo lugar
                        </h2>

                    </div>
                </section>

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/Captura-Automatica-de-Interesados.gif'),
                        'title' => '
                        Arrastra y suelta
                        ',
                        'text' => 'Crea increíbles emails que cautivan a tu audiencia <br class="DT_e">
                        en cualquier dispositivo con un constructor de emails muy fácil de <br class="DT_e">
                        usar y plantillas pre-diseñadas.',
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
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6_1',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/Seguimiento-Oportuno.gif'),
                        'title' => 'Crea contenido en segundos <br class="DT_e"> con Inteligencia Artificial
                        ',
                        'text' => 'Bríndale a Escala un par de palabras clave y tu <br class="DT_e">
                        intención para que te proponga opciones que <br class="DT_e">
                        puedas elegir y revisar si lo necesitas. <br class="DT_e">
                        ¡Esto funciona para tanto para el cuerpo del email <br class="DT_e">
                        como para el asunto!',
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
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6_2',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/gifs/Clasificacion-Estrategica-de-Leads.gif',
                        ),
                        'title' => 'Automatiza flujos de email y <br class="DT_e"> escala operaciones',
                        'text' =>
                        'Logra que tus contactos reciban tus mensajes en el <br class="DT_e">
                        momento oportuno ¡sin tener que estar pendiente de
                        enviarlos! Envía emails.
                        <br class="space">
                        <ul>
                            <li></li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
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
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6_3',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/gifs/Gestion-Eficiente-del-Embudo.gif',
                        ),
                        'title' => 'Gestión eficiente del embudo
                        ',
                        'text' => 'Puedes llevar un mejor control del proceso comercial <br class="DT_e">
                        pasando prospectos por etapas como: nuevo lead, <br class="DT_e">
                        primer contacto, visita agendada, visita realizada, <br class="DT_e">
                        en evaluación y venta. Así mides, analizas, anticipas <br class="DT_e">
                        y priorizas.
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
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6_4',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/Agendamiento-y-Recordatorios-Automaticos.gif'),
                        'title' => 'Agendamiento y recordatorios <br class="DT_e"> automáticos
                        ',
                        'text' => 'Cada vendedor tiene un calendario con un link único <br class="DT_e">
                        que puede compartir con sus prospectos para que <br class="DT_e">
                        reserven un espacio disponible en su agenda. Una <br class="DT_e">
                        vez agendan, dispara recordatorios automatizados <br class="DT_e">
                        para aumentar asistencia. También pueden crear y <br class="DT_e">
                        priorizar listas de tareas con recordatorios.
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
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6_5',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/gifs/Reportes-de-Venta-en-Tiempo-Real.gif',
                        ),
                        'title' => 'Reportes de venta en <br class="DT_e"> tiempo real
                        ',
                        'text' => 'Puedes tener una visión 360 del negocio con <br class="DT_e">
                        información como: cuántas oportunidades se <br class="DT_e">
                        ganaron, qué campaña de marketing trajo más <br class="DT_e">
                        ventas y qué vendedor cerró más.
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
                    </div>
                </section>

            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Prueba Escala ahora →
                </a>
            </div>
        </section>
    </div>


</div>
<div id="landing_emailMarketingCampaigns_2023">

    <div class="sections">

        <section id="lead-form" class="hero2025 landing_emailMarketingCampaigns_2023_0">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-email-hero-2025.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-moreno-hero-email-2025-2.webp') !!}" loading="lazy">

                        </div>
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
                                <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-moreno-hero-email-2025-2.webp') !!}" loading="lazy">

                            </div>
                        </div>
                    </section>



                    <section class="innerSectionElement sct3">
                        <div class="form7">
                            <div class="containElements">

                                <div class="formatForm redirectWeb" redirectweb="true">

                                        <h5 class="titleFormat blackcolor"> Conoce Escala en una <br class="space"> sesión personalizada</h5>

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
                            Todo lo que tus<br class="brMm">     emails  necesitan, <br class="space">
                            en un solo lugar
                        </h2>

                    </div>
                </section>

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">
                        @php
                        $defaultParams = [
                        'type' => 'backgroundColor',
                        'enableTitle' => false,
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022'
                        ];
                        @endphp

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6',
                        'img' => App::setFilePath('/assets/images/gifs/Captura-Automatica-de-Interesados.gif'),
                        'title' => 'Arrastra y suelta',
                        'text' => 'Crea increíbles emails que cautivan a tu audiencia
                        en cualquier dispositivo con un constructor de emails muy fácil de usar y plantillas pre-diseñadas.',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6_1',
                        'img' => App::setFilePath('/assets/images/gifs/Seguimiento-Oportuno.gif'),
                        'title' => 'Crea contenido en segundos <br class="DT_e"> con Inteligencia Artificial',
                        'text' => 'Bríndale a Escala un par de palabras clave y tu <br class="DT_e">
                        intención para que te proponga opciones que <br class="DT_e">
                        puedas elegir y revisar si lo necesitas. <br class="DT_e">
                        ¡Esto funciona para tanto para el cuerpo del email <br class="DT_e">
                        como para el asunto!',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6_2',
                        'img' => App::setFilePath('/assets/images/gifs/Clasificacion-Estrategica-de-Leads.gif'),
                        'title' => 'Automatiza flujos de email y <br class="DT_e"> escala operaciones',
                        'text' => 'Logra que tus contactos reciban tus mensajes en el <br class="DT_e">
                        momento oportuno ¡sin tener que estar pendiente de
                        enviarlos! Envía emails.
                        <br class="space">
                        <ul>
                            <li><img class="checkIcon" src="'.App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png').'" alt="">Bienvenida inmediatamente después de que compran </li>
                            <li><img class="checkIcon" src="'.App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png').'" alt="">Recordatorios antes de un evento importante </li>
                            <li><img class="checkIcon" src="'.App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png').'" alt="">De nutrición para potenciar el proceso comercial ¡y más!</li>
                        </ul>',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6_3',
                        'img' => App::setFilePath('/assets/images/gifs/Gestion-Eficiente-del-Embudo.gif'),
                        'title' => 'Conoce el resultado y optimiza <br class="DT_e"> tus campañas con analíticas <br class="DT_e"> en tiempo real',
                        'text' => 'Una vez envíes tus campañas, podrás:
                        <br class="space">
                        <ul>
                            <li><img class="checkIcon" src="'.App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png').'" alt="">Visualizar métricas como la tasa de apertura y rebote</li>
                            <li><img class="checkIcon" src="'.App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png').'" alt="">Averiguar quiénes hicieron click y cancelaron su suscripción </li>
                            <li><img class="checkIcon" src="'.App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png').'" alt="">Descubrir cuáles links tuvieron más clicks
                                ¡y más!</li>
                        </ul>',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6_4',
                        'img' => App::setFilePath('/assets/images/gifs/Agendamiento-y-Recordatorios-Automaticos.gif'),
                        'title' => '¡Logra que tus emails se vean bien en todos los dispositivos!',
                        'text' => 'Encontrarás que Escala facilita el diseño responsive <br class="DT_e">
                        para que tu audiencia vea muy bien tus emails en <br class="DT_e">
                        laptops, celulares y tablets.',
                        'side' => 'right',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = array_merge($defaultParams, [
                        'classSection' => 'landing_emailMarketingCampaigns_2023_6_5',
                        'img' => App::setFilePath('/assets/images/gifs/Reportes-de-Venta-en-Tiempo-Real.gif'),
                        'title' => 'Dile ¡Adiós! a la bandeja <br class="DT_e"> de spam',
                        'text' => 'Escala tiene la tecnología más avanzada y un <br class="DT_e">
                        equipo de expertos que te guían para evitar que tus <br class="DT_e">
                        emails reboten o caigan en la bandeja de spam. Así <br class="DT_e">
                        logras que tus emails lleguen a donde deben llegar.',
                        'side' => 'left',
                        ]);
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1
                    </div>
                </section>

            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                 Tener sesión personalizada →
                </a>
            </div>
        </section>

        <section class="customSection sectionParent landing_emailMarketingCampaigns_2023_7">

            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            ¿Qué puedes lograr con tus <br class="space">
                            campañas email marketing?
                        </h2>

                    </div>
                </section>

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-corazom-cards.webp') !!}"
                                alt="">

                            <p>
                                Re-despertar el <br class="DT_e">
                                interés de tus <br class="DT_e">
                                contactos en tus <br class="DT_e">
                                productos y servicios
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-comunicacion-cards.webp') !!}"
                                alt="">

                            <p>
                                Comunicar <br class="DT_e">
                                promociones <br class="DT_e">
                                especiales
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-estrella-cards.webp') !!}"
                                alt="">

                            <p>
                                Aumentar el <br class="DT_e">
                                profesionalismo de <br class="DT_e">
                                tus mensajes en <br class="DT_e">
                                momentos clave
                            </p>
                        </div>

                    </div>
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-top-cards.webp') !!}"
                                alt="">

                            <p>
                                Mantenerte “top of <br class="DT_e">
                                mind” y nutrir la <br class="DT_e">
                                relación con tus <br class="DT_e">
                                leads y clientes
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-personas-cards.webp') !!}"
                                alt="">

                            <p>
                                Llegar a muchísimas <br class="DT_e">
                                personas de manera <br class="DT_e">
                                masiva y personalizada <br class="DT_e">
                                con un solo click
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-oportunidad-cards.webp') !!}"
                                alt="">

                            <p>
                                Recuperar <br class="DT_e">
                                oportunidades que <br class="DT_e">
                                pierdes en el proceso <br class="DT_e">
                                comercial
                            </p>
                        </div>

                    </div>
                    <span>¡y mucho más!</span>
                </section>


            </div>

        </section>



        <section class="customSection sectionParent landing_emailMarketingCampaigns_2023_8">

            <div class="section-row ">
                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-andres-moreno-email-escala-8.webp') }}')">

                    <div class="cards left">
                        <div class="containerImage">
                            <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-moreno-hero-email-2025-8.webp') !!}" loading="lazy">
                        </div>  
                    </div>
                    <div class="cards right">
                        <p>
                            “En mi experiencia,<span> la venta se logra luego <br class="DT_e">
                                de varios contactos personalizados.</span> La <br class="DT_e">
                            gestión inteligente de campañas de emails <br class="DT_e">
                            es una estrategia fundamental para <br class="DT_e">
                            mantenerse en contacto, y quizás el método <br class="DT_e">
                            de menor costo de todos”.
                        </p>
                        <span class="colorSpecial"><b>Andrés Moreno,</b> <br class="space">
                            Fundador de escala & Open English</span>
                    </div>

                </section>

            </div>
        </section>

        <section class="w-full customSection sectionParent landing_emailMarketingCampaigns_2023_9">
            <div class="section-row">
                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            ¿Nuevo en email marketing? <br class="space">
                            ¡No te preocupes, te entrenamos!
                        </h2>

                    </div>
                </section>
                <section class="innerSectionElement sct2 " style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-email-2025-9 (1).webp') }}')">

                    <div class="containElements">

                        <div class="info-second">
                            <p>
                                Nuestro equipo de servicio y <br class="DT_e">
                                entrenadores Escala te orientan desde <br class="DT_e">
                                el día 1 para que consigas mejores <br class="DT_e">
                                resultados con email marketing.
                            </p>

                            <span>
                                ¡Ninguna otra plataforma te <br class="DT_e">
                                acompaña mejor!
                            </span>

                        </div>
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/chica-escala-feliz-email-entrenamiento.webp') !!}" loading="lazy">
                        </div>
                </section>
                <div class="btnCenter">
                    <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        Empezar ahora →
                    </a>
                </div>
            </div>
        </section>


        <section class="customSection sectionParent fullWidth landing_emailMarketingCampaigns_2023_10">
            <div class="section-row">
                <section class="innerSectionElement1">
                    <div class="containElements">
                        <h2 class="primaryTitle">
                            Qué dicen nuestros clientes sobre las campañas <br class="space">
                            de Email Marketing que crean en Escala
                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement2">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-review-2025-email-1.webp') !!}"
                        alt="">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-review-2025-email-2.webp') !!}"
                        alt="">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-review-2025-email-3.webp') !!}"
                        alt="">
                </section>


            </div>

        </section>

        <section class="customSection sectionParent fullWidth landing_emailMarketingCampaigns_2023_11">
            <div class="section-row">
                <section class="innerSectionElement1">
                    <div class="containElements">
                        <h2 class="primaryTitle">
                            ¿Por qué Escala?
                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement2">
                    <ul>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/marketing-icon.webp') !!}" loading="lazy">Potente herramienta de <br class="DT_e"> email marketing </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/acompañamiento-vip-icon.webp') !!}" loading="lazy">Servicio de Acompañamiento VIP </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/herramientas-icon.webp') !!}" loading="lazy">Encuentras muchas más <br class="DT_e"> herramientas de marketing y <br class="DT_e"> ventas integradas </li>
                    </ul>
                    <ul>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/plataforma-en-españo-iconl.webp') !!}" loading="lazy">Todo 100% en español </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/educacion-icon.webp') !!}" loading="lazy">Educación de negocio de primera </li>
                        <li> <img src="{!! App::setFilePath('/assets/images/illustrations/others/implementacion-icon.webp') !!}" loading="lazy">Implementamos parte de la <br class="DT_e"> primera campaña por ti </li>
                    </ul>
                </section>


            </div>

        </section>
        <section class="customSection sectionParent landing_emailMarketingCampaigns_2023_12" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-email-2025-12.webp') }}')">
            <div class="section-row ">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/ceo-escala-alfonso-email.webp') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                Acelera el crecimiento <br class="DT_e">
                                de tu negocio
                            </h2>

                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                              Empezar ahora →
                            </a>

                        </div>
                    </section>



                </div>
            </div>
        </section>



    </div>


</div>
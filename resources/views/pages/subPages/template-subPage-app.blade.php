<div id="escala_app">

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
            class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol escala_app escala_app_0 ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/app_bg_0.svg') }}')"
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
                                            Nuestro CRM facilita obtener la información <br class="space">
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

        <section class='w-full customSection sectionParent escala_app_1'>
            <div class="section-row">

                <section style="background-image: url('{!! App::setFilePath('/assets/images/banners/landing_crm_automat_wa_cloud_bg_01.svg') !!}'" class='innerSectionElement sct0 '>
                    <div class='containElements'>

                        <h2 class="primaryTitle">
                            ¿Necesitas optimizar tus procesos <br class="space">
                            y mejorar la eficiencia de tu equipo? <br class="space">
                            <span>
                                ¡Olvídate de tareas manuales!
                            </span>
                        </h2>

                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_01.png') !!}" loading="lazy">
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </section>

        <section class='w-full customSection sectionParent escala_app_2'>
            <div class="section-row">

                <section class='innerSectionElement sct0 '>

                    <div class='containElements'>

                        <h2 class="primaryTitle">
                            ¿Por qué automatizar procesos <br class="space">
                            comerciales y de servicio?
                        </h2>

                    </div>

                </section>

                <section class='innerSectionElement sct1 '>

                    <div class='containElements row g-5'>

                        <div class="col-md-12 col-lg-3">

                            <div class="element ">
                                <span class="number" style="background-color: #97C8D2">
                                    1
                                </span>
                                <p>
                                    Aumenta <br class="space">
                                    conversión
                                </p>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-3">

                            <div class="element ">
                                <span class="number" style="background-color: #38778B">
                                    2
                                </span>
                                <p>
                                    Mejora la <br class="space">
                                    experiencia de <br class="space">
                                    compra
                                </p>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-3">

                            <div class="element ">
                                <span class="number" style="background-color: #2C4958">
                                    3
                                </span>
                                <p>
                                    Multiplica la <br class="space">
                                    productividad de tu <br class="space">
                                    equipo
                                </p>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-3">

                            <div class="element ">
                                <span class="number" style="background-color: #2C4958">
                                    4
                                </span>
                                <p>
                                    Ganas mayor <br class="space">
                                    control sobre tus <br class="space">
                                    operaciones
                                </p>
                            </div>
                        </div>


                    </div>

                </section>

                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <span>
                            ¡Y más!
                        </span>


                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibe un demo
                        </a>
                    </div>
                </section>

            </div>
        </section>

        @php
            $elements = [
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'escala_app_3',
                    'enableTitle' => true,
                    'titlePrincipal' => '
                    Automatiza una variedad de acciones, <br class="DT_e">
                    para que ahorres tiempo y esfuerzo
                    ',
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/Plantillas-de-Automatizaciones.gif'),
                    'title' => '
                    <span>Ahorra tiempo</span> con plantillas de <br class="space">
                    Automatizaciones
                ',
                    'text' => 'Crea automatizaciones de marketing complejas en <br class="DT_e">
                    cuestión de minutos, ahora encuentra plantillas para: <br class="space">
                    Asignar leads a vendedores, responder WhatsApps, <br class="DT_e">
                    recuperar carritos abandonados, enviar emails y <br class="DT_e">
                    ¡mucho más!',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'escala_app_4',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath(
                        '/assets/images/gifs/10.landing_crm_automat_wa_Automatiza tareas simples (1).gif',
                    ),
                    'title' => '
                       <span>Automatiza</span> tareas simples:
                ',
                    'text' => '
                        Configura emails de respuesta automática, programa <br class="DT_e">
                        notificaciones y recordatorios, activa flujos de <br class="DT_e">
                        conversación automáticos y ¡mucho más! Para que tu <br class="DT_e">
                        equipo se centre en actividades más estratégicas.
                    ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'escala_app_5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath(
                        '/assets/images/gifs/11.landing_crm_automat_wa_Desarrolla secuencias de emails comerciales.gif',
                    ),
                    'title' => '
                    <span>Desarrolla secuencias</span> de <br class="space">
                    emails comerciales:
                ',
                    'text' => '
                        Piensa en tu estrategia de emails una vez y <br class="DT_e">
                        automatízala para que se envíen de acuerdo al plan. <br class="space">
                        ¡Personaliza, programa y eleva tus ventas!.
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'escala_app_6',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath(
                        '/assets/images/gifs/4.landing_crm_automat_wa_Mide, analiza y optimiza tus resultados con reportes personalizados.gif',
                    ),
                    'title' => '
                        <span>Programa actividades</span> clave <br class="space">
                        para tu equipo de ventas:
                ',
                    'text' => '
                    Automatiza recordatorios para tus vendedores y <br class="space">
                    optimiza la comunicación con clientes potenciales, en <br class="space">
                    el momento preciso. ¡Potencia tus ventas eficazmente!
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'escala_app_6',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath(
                        '/assets/images/gifs/13.landing_crm_automat_wa_Realiza automatizaciones, con solo agregar etiquetas.gif',
                    ),
                    'title' => '
                    <span>Realiza automatizaciones,</span> <br class="space">
                    con solo agregar etiquetas
                ',
                    'text' => '
                    Segmenta tus contactos y asigna etiquetas.  Estas <br class="DT_e">
                    etiquetas, activan emails, notificaciones y acciones <br class="DT_e">
                    de ventas sin esfuerzo. ¡Simplifica tu gestión!
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'escala_app_6',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/01.Automatizaciones-Whatsapp-min.gif'),
                    'title' => '
                    <span>Automatiza</span> tu WhatsApp <br class="space">
                    y opera manos libres:
                ',
                    'text' => '
                    <ul>
                        <li><span>1.</span> Diseña flujos de respuesta automatizadas</li>
                        <li><span>2.</span> Programa recordatorios, emails, etiquetas, etc.</li>
                        <li><span>3.</span> Envía mensajes masivos con <br class="space">
                        plantillas aprobadas por Meta</li>
                        <li><span>4.</span> Asigna conversaciones y actividades a tu equipo</li>
                        <li><span>5.</span> Personaliza la comunicación con cada contacto</li>
                        <li><span>6.</span> Encuesta y califica a tus contactos</li>
                        <li><span>7.</span> Segmenta a tu lista de contactos </li>
                        <li><span>8.</span> Mide tus esfuerzos con analíticas </li>
                    </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ],
            ];
        @endphp
        <div class="sectionInfo_1">

            @if (isset($elements) && count($elements) > 0)
                @foreach ($elements as $item)
                    @contain_text_image_T1($item)
                    @endcontain_text_image_T1
                @endforeach
            @endif

            <div class="overlay" style="background-image: url({!! App::setFilePath('/assets/images/banners/escala_app_2.svg') !!})">
            </div>

        </div>

        <section class="customSection sectionParent aux_escala_app_8">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        Recibe un demo
                    </a>

                </section>

            </div>

        </section>


        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'escala_app_15',
                'enableTitle' => true,
                'titlePrincipal' => '
    <span>¿Qué más consigues en Escala?</span>
    ¡El mejor acompañamiento y <br class="space">
    entrenamiento de la industria!
    ',
                'subTitlePrincipal' => '
                    (“Es uno de sus grandes diferenciadores” dicho por clientes)
',
                'overlay' => false,
                'enableButton' => false,
                'elements' => [
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_03.png'),
                        'title' => '
                Agilizamos la <br class="space">
                implementación
                ',
                        'text' => '
                adaptando el CRM a tus <br class="space">
                necesidades.
            ',
                        'enableButton' => false,
                        'background_item' => App::setFilePath(
                            '/assets/images/illustrations/others/card_background_landings.png',
                        ),
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_04.png'),
                        'title' => '
                    Entrenamos a líderes <br class="space">
                    y equipos en
            ',
                        'text' => '
               el uso de la plataforma y <br class="space">
               nuestra metodología <br class="space">
               probada de crecimiento.
            ',
                        'enableButton' => false,
                        'background_item' => App::setFilePath(
                            '/assets/images/illustrations/others/card_background_landings.png',
                        ),
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_05.png'),
                        'title' => '
            Asignamos un <br class="spa">
            gerente de éxito
            ',
                        'text' => '
                que guía tus acciones <br class="space">
                para que aproveches al <br class="space">
                máximo Escala.
            ',
                        'enableButton' => false,
                        'background_item' => App::setFilePath(
                            '/assets/images/illustrations/others/card_background_landings.png',
                        ),
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_06.png'),
                        'title' => '
                        Chat de soporte <br class="space">
                        en vivo
                                ',
                        'text' => '
                que atiendes tus preguntas <br class="space">
                y necesidades técnicas <br class="space">
                oportunamente.
            ',
                        'enableButton' => false,
                        'background_item' => App::setFilePath(
                            '/assets/images/illustrations/others/card_background_landings.png',
                        ),
                    ],
                ],
            ];
        @endphp

        {{-- @contain_multiple_cards_T2($parameters)
        @endcontain_multiple_cards_T2 --}}


        <div class="sectionInfo_2">

            @contain_multiple_cards_T2($parameters)
            @endcontain_multiple_cards_T2

            <div class="overlay" style="background-image: url({!! App::setFilePath('/assets/images/banners/escala_app_3.svg') !!})">
            </div>

        </div>


        <section class="customSection sectionParent escala_app_16">

            <div class="section-row">


                <section class="innerSectionElement sct2">
                    <img src="{!! App::setFilePath('/assets/images/banners/escala_app_4.svg') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/person/am/am_home_escala.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    <span>
                                        “Uno de los mayores retos de liderar un <br class="DT_e">
                                        negocio es enfocarse en lo que es <br class="DT_e">
                                        importante y hacer que cada minuto cuente.
                                    </span><br class="space">
                                    Con la automatización de escala podrás <br class="DT_e">
                                    ahorrarte el tiempo de hacer tareas <br class="DT_e">
                                    repetitivas e invertirlo en los proyectos que <br class="DT_e">
                                    agregan valor a tu negocio”.

                                    <br class="space"><br class="space">
                                    <span class="sub">
                                        Andrés Moreno <br class="space">
                                        <small>Fundador de Escala & Open English</small>
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>


        <section class='w-full customSection sectionParent escala_app_18'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            Qué dicen nuestros clientes <br class="space">
                            sobre el CRM de Escala
                        </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                        @php
                            $reviews = [
                                App::setFilePath('/assets/images/illustrations/others/landing_crm_auto_wa_trust_1.png'),
                                App::setFilePath('/assets/images/illustrations/others/landing_crm_auto_wa_trust_2.png'),
                                App::setFilePath('/assets/images/illustrations/others/landing_crm_auto_wa_trust_3.png'),
                            ];
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

        <section class="sectionParent customSection escala_app_19">
            <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/landing_crm_aut_wa_bg_05.svg') !!}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">

                            <div class="image col-md-12 col-lg-4">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_08.png') !!}" loading="lazy">
                                </div>
                            </div>

                            <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                                <h3 class="secondaryTitle">
                                    <span>Potencia las operaciones de</span> <br class="space">
                                    tu negocio y logra tus metas
                                </h3>
                                <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    Conoce Escala
                                </a>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>

    </div>


</div>

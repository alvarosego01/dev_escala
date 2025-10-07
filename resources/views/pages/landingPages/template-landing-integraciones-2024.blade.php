<div id="landing_integraciones_2024">

    <div class="sections">
        <section id="lead-form" class="hero2025 landing_integraciones_2024_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-integraciones-2025-hero.webp') !!}')">

                <div class="section-row">

                    <section class="innerSectionElement sct1">
                        <div class="sectionText">

                            <h1 class="principalBigTitle">
                                Integra tus <br class="DT_e">
                                herramientas al <br class="DT_e">
                                CRM y maximiza <br class="DT_e">
                                tu productividad
                            </h1>

                            <p class="principalBigText">
                                ¡Conecta, gestiona y <br class="DT_e"> crece en Escala!
                            </p>
                            <div class="containerImage">
                                <div class="cover">
                                    <img alt="Andres presentando Escala CRM con integración a WhatsApp y automatización de ventas" src="{!! App::setFilePath('/assets/images/illustrations/others/hero-integraciones-chica-escala.webp') !!}" loading="lazy">
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <div class="cover">
                                <img alt="Andres presentando Escala CRM con integración a WhatsApp y automatización de ventas" src="{!! App::setFilePath('/assets/images/illustrations/others/hero-integraciones-chica-escala.webp') !!}" loading="lazy">
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
                <div class="section-row-2">
                    <section class="innerSectionElement sctO1">
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
                                            <div class="iconAppMeta">
                                                <a target="_blank"
                                                    href="">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-meta-business-partner.webp') !!}"
                                                        loading="lazy" alt="Icono Meta Business Partner Escala">
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
            </div>
        </section>

        <section class="customSection sectionParent landing_integraciones_2024_1">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        Ventajas de integrar otros <br class="space">
                        softwares a Escala
                    </h2>

                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <div class="img"> <img class="img-top"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/optimiza-icon.webp') !!}"
                                    alt="">
                            </div>
                            <span>
                                Optimiza la gestión <br class="DT_e">
                                de datos
                            </span>

                        </div>
                        <div class="cards">
                            <div class="img"> <img class="img-top"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/aumenta-icon.webp') !!}"
                                    alt="">
                            </div>
                            <span>
                                Mejora la experiencia <br class="DT_e"> del cliente
                            </span>
                        </div>
                        <div class="cards">
                            <div class="img"> <img class="img-top"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/mejora-icon.webp') !!}"
                                    alt="">
                            </div>
                            <span>
                                Aumenta la eficiencia <br class="DT_e"> de tu equipo
                            </span>
                        </div>

                    </div>
                </section>
            </div>
        </section>


        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landing_integraciones_2024_2',
        'enableTitle' => true,
        'titlePrincipal' => '
        Conoce las integraciones <br class="space"> nativas de Escala',
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/sigo-contifico.webp'),

        'title' => '
        <span>
            Integración con Siigo y Contífico
        </span>
        Centraliza la información del registro de tus facturas',
        'text'=> '
        Con esta integración, podrás crear oportunidades <br class="DT_e">
        desde tu
        cuenta Escala a partir de Facturas <br class="DT_e">
        emitidas en SIIGO /
        Contífico y también crear <br class="DT_e">
        información en SIIGO / Contífico
        a través de la <br class="DT_e">
        creación de oportunidades en determinada
        etapa <br class="DT_e">
        desde Escala.',
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
        'classSection' => 'landing_integraciones_2024_3',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/twilo-icon.webp'),
        'title' => '
        <span>
            Integración con Twilio
        </span>
        Conecta con tus clientes en tiempo real
        ',
        'text' => '
        Envía SMS automáticos desde tus flujos en Escala y <br class="DT_e">
        haz seguimiento desde el historial del contacto. <br class="DT_e">
        Comunicación directa, seguimiento total.
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
        'classSection' => 'landing_integraciones_2024_4',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/aircall-icon.webp'),
        'title' => '
        <span>
            Integración con Aircall
        </span>
        Maximiza tu comunicación telefónica
        ',
        'text' => '
        Al integrar esta herramienta con Escala, podrás <br class="DT_e"> realizar
        llamadas telefónicas a tus contactos, crear <br class="DT_e"> notas, dejar
        registro y grabaciones. Todo gestionado <br class="DT_e"> desde Escala.
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
        'classSection' => 'landing_integraciones_2024_5',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/calendly-icon.webp'),
        'title' => '
        <span>
            Integración con Calendly
        </span>
        Optimiza el trabajo de tu equipo
        ',
        'text' => '
        Al programar reuniones o consultas con Calendly,
        se <br class="DT_e"> creará o actualizará de forma automática en el <br class="DT_e">
        CRM, las actividades y los contactos vinculados.
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
        'classSection' => 'landing_integraciones_2024_6',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/shopify-icon.webp'),
        'title' => '
        <span>
            Integración con Shopify
        </span>
        Conecta tus ventas con tu CRM en automático
        ',
        'text' => '
        Cada nuevo cliente en Shopify se transforma
        en un <br class="DT_e"> contacto listo para seguimiento en Escala <br class="DT_e">
        Sincroniza, organiza y automatiza sin mover un dedo.
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
        'classSection' => 'landing_integraciones_2024_7',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/typeform-icon.webp'),
        'title' => '
        <span>
            Integración con Typeform
        </span>
        Genera formularios inteligentes
        ',
        'text' => '
        Al crear un formulario en Typeform e integrarlo con <br class="DT_e"> Escala,
        podrás crear o actualizar contactos en tu <br class="DT_e"> CRM, permitiendote
        optimizar la gestión de leads y <br class="DT_e"> clientes.
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
        'classSection' => 'landing_integraciones_2024_8',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/zapier-icon.webp'),
        'title' => '
        <span>
            Integración con Zapier
        </span>
        Conecta otras plataformas a Escala
        ',
        'text' => '
        Con esta integración, tienes la libertad de enlazar <br class="DT_e">
        diferentes herramientas y plataformas a <br class="DT_e"> tu CRM
        a través de Zapier.
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
        'classSection' => 'landing_integraciones_2024_9',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/google-sheets-icon.webp'),
        'title' => '
        <span>
            Integración con Google Sheets
        </span>
        Respalda la información de tus contactos de forma automática
        ',
        'text' => '
        Al crear o actualizar un contacto en Escala,
        podrás <br class="DT_e"> guardar de forma automática toda la
        información <br class="DT_e"> del contacto en Google Sheet al
        realizar esta <br class="DT_e"> integración, personalizando
        también los campos <br class="DT_e"> que desees.
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
        'classSection' => 'landing_integraciones_2024_10',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/woo-icon.webp'),
        'title' => '
        <span>
            Integración con Woocommerce
        </span>
        Guarda la información de tus usuarios
        ',
        'text' => '
        Al integrar WooCommerce con Escala, <br class="DT_e"> podrás registrar
        la información de tus clientes <br class="DT_e"> de forma automática
        a momento de que <br class="DT_e"> finalicen una compra.
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
        'classSection' => 'landing_integraciones_2024_11',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/bsale-icon.webp'),
        'title' => '
        <span>
            Integración con Bsale
        </span>
        Convierte tus cotizaciones en oportunidades
        ',
        'text' => '
        Cada cotización creada en Bsale se sincroniza
        como <br class="DT_e"> oportunidad en Escala. Más visibilidad,
        mejor <br class="DT_e"> seguimiento y ventas más organizadas,
        todo desde <br class="DT_e"> un solo lugar.
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

        <section class="customSection sectionParent landing_integraciones_2024_11_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                            Tener sesión personalizada →
                        </a>
                    </div>
                </section>
            </div>
        </section>




        <section class="w-full customSection sectionParent landing_integraciones_2024_12">

            <div class="section-row">

                <section class="innerSectionElement sct0 ">
                    <div class="containElements">
                        <h2 class="primaryTitle">
                            Qué dicen nuestros clientes sobre Escala
                        </h2>
                    </div>

                </section>
                <section class="innerSectionElement sct1 ">
                    <div class="containElements reviews-group">
                        @php
                        $reviews = [
                            App::setFilePath('/assets/images/illustrations/others/review-1.png'),
                            App::setFilePath('/assets/images/illustrations/others/review-3.png')
                        ];
                        @endphp

                        @foreach ($reviews as $item)
                        <div class="review-item">
                            <div class="container-image">
                                <img src="{!! $item !!}" loading="lazy" alt="Reseña de cliente Escala">
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="containElements2 reviews-group2">
                        @php
                        $reviews2 = [
                            App::setFilePath('/assets/images/illustrations/others/review-2.png')
                        ];
                        @endphp

                        @foreach ($reviews2 as $item2)
                        <div class="review-item2">
                            <div class="container-image2">
                                <img src="{!! $item2 !!}" loading="lazy" alt="Reseña de cliente Escala">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                </section>
            </div>

        </section>



        <section class="customSection sectionParent landing_integraciones_2024_13" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-integraciones-2025-banner.webp') }}')">
            <div class="section-row ">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/img-ceo-alfonzo-4.webp') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                Impulsa la productividad <br class="space">
                                de tu equipo al máximo
                            </h2>

                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Empieza ahora →
                            </a>

                        </div>
                    </section>



                </div>
            </div>
        </section>







    </div>

</div>
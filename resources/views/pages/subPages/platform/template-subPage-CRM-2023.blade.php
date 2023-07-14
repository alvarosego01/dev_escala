<div id="CRM_TB_2023">
    <div class="sections">


        @header_t1([
            'backgroundImageType' => true,
            'overlay' => false,
            'classSection' => 'threeCol CRM-2023 CRM-2023_0',
            'title' => '
                                        CRM todo-en-uno  <br class="space">
                                        <span style="color: #DEF3F5"> <span style="color: #FAD872" class="plus">+</span> acompañamiento de expertos</span>
                                                                                                        ',
            'text' => '<span class="whiteColor">
                                                                                                                                Con el CRM de Escala haz más eficiente todo tu <br class="space">
                                                                                                                                proceso de ventas, guiado por especialistas. <br class="space">
                                                                                                                                Segmenta tus contactos, personaliza tu <br class="space">
                                                                                                                                comunicación y hazle mejor seguimiento a tus <br class="space">
                                                                                                                                oportunidades hasta cerrar la venta.
                                                                                                          </span>
                                                                                                          ',
            'threeCol' => true,
            'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
            'backgroundImage' => App::setFilePath('/assets/images/overlays/02-CRM-2023.png'),
            'overlayImage' => null,
            'image' => App::setFilePath('/assets/images/illustrations/others/01-CRM-2023.png'),
            'img_alt' => 'Ilustración Andrés Moreno, CEO de Escala, embudos de venta'
        ])
        @endheader_t1



        <section class="component-info-text-video-T1 customSection sectionParent CRM-2023_1"
            style="background-image: url('{!! App::setFilePath('/assets/images/overlays/03-CRM-2023.png') !!}')">
            <div class="section-row">

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">
                        <div class="info col-md-12 col-lg-6">
                            <p class="text-video">“Luego de generar una base de datos de <br class="space">
                                clientes potenciales, <b>tu CRM es la herramienta <br class="space">
                                    más importante para convertirlos en clientes <br class="space">
                                    fieles</b> y construir relaciones a largo plazo”.
                            </p>
                            <br class="space">
                            <p class="title-video"><b>Andrés Moreno</b> <br class="space">
                                <span>de escala & Open English</span>
                            </p>
                        </div>

                        <div class="video col-md-12 col-lg-6">

                            @php
                                $videoEmbed = App::setFilePath('/assets/videos/video_crm_2023.mp4');
                                $videoCover = App::setFilePath('/assets/images/illustrations/others/portada_video_crm_2023.png');
                            @endphp

                            @if (isset($videoEmbed) && $videoEmbed != null)
                                <div class="youtubeImageContainer ">

                                    <video class="video-js" controls preload="none" poster="{{ $videoCover }}"
                                        {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                        data-setup="{
                                  autoplay: false
                                }">
                                        <source src="{{ $videoEmbed }}" type="video/mp4" />
                                        <source src="{{ $videoEmbed }}" type="video/webm" />
                                        <p class="vjs-no-js">
                                            To view this video please enable JavaScript, and consider upgrading to a
                                            web browser that
                                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                                HTML5 video</a>
                                        </p>
                                    </video>
                                </div>
                            @endif

                        </div>

                    </div>

                </section>

            </div>

        </section>
        <section class="sectionParent customSection CRM-2023_2">
            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            <span>El CRM todo-en-uno de Escala</span> <br class="space">
                            Tu Máquina de Marketing y Ventas
                        </h2>
                        <p class="text-p">
                            En el CRM de Escala están todas las herramientas de marketing digital y ventas integradas,
                            <br class="space">
                            para que puedas: generar más demanda, aumentar tus ventas y fidelizar más clientes.
                        </p>
                    </div>
                </section>
                <section class="innerSectionElement sct2">
                    <div class="groupElements row">
                        <div class="order-last order-md-last order-lg-first col-md-12 col-lg-6 sectionTexts textRight">
                            <h3 class="secondaryTitle">
                                Anuncios
                            </h3>
                            <p class="text">
                                Atrae leads de calidad con Ads de Facebook <br class="desktopTabletElement"> e Instagram
                                desde nuestra plataforma
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/04-CRM-2023.png') !!}" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="groupElements row">
                        <div class="col-md-12 col-lg-6">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/05-CRM-2023.png') !!}" loading="lazy">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 sectionTexts">
                            <h3 class="secondaryTitle">
                                Landing pages
                            </h3>
                            <p class="text">
                                Crea, personaliza y publica páginas <br class="desktopTabletElement"> en minutos, sin
                                programar
                            </p>
                        </div>
                    </div>
                    <div class="groupElements row">
                        <div class="order-last order-md-last order-lg-first col-md-12 col-lg-6 sectionTexts textRight">
                            <h3 class="secondaryTitle">
                                Emails
                            </h3>
                            <p class="text">
                                Comunícate constantemente con tus <br class="desktopTabletElement"> contactos y crea
                                relaciones a largo plazo
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/06-CRM-2023.png') !!}" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="groupElements row">
                        <div class="col-md-12 col-lg-6">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/07-CRM-2023.png') !!}" loading="lazy">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 sectionTexts">
                            <h3 class="secondaryTitle">
                                Automatización
                            </h3>
                            <p class="text">
                                Ahorra tiempo y dinero programando <br class="desktopTabletElement"> secuencias de
                                emails y acciones de <br class="desktopTabletElement"> marketing y ventas
                            </p>
                        </div>
                    </div>
                    <div class="groupElements row">
                        <div class="order-last order-md-last order-lg-first col-md-12 col-lg-6 sectionTexts textRight">
                            <h3 class="secondaryTitle">
                                Analítica
                            </h3>
                            <p class="text">
                                Mide en tiempo real tus resultados <br class="desktopTabletElement"> con dashboards
                                amigables para <br class="desktopTabletElement"> optimizar tus embudos
                                de ventas
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/08-CRM-2023.png') !!}" loading="lazy">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="innerSectionElement sct3">
                    <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        Prueba Gratis
                    </a>
                </section>
            </div>
        </section>

        <section class="customSection sectionParent CRM-2023_3">

            <div class="section-row">

                <section class="innerSectionElement">

                    <div class=" row groupElements">

                        <div class="image col-md-12 col-lg-6">

                            <div class="containElements">

                                <h2 class="primaryTitle whiteColor">
                                    <span>Conoce por qué el CRM</span> <br class="space">
                                    de Escala es tan poderoso
                                </h2>

                                <div class="containerImage">
                                    <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/09-CRM-2023.png') !!}" alt=""
                                        loading="lazy">
                                </div>


                            </div>

                        </div>
                        <div class="info col-md-12 col-lg-6">


                            @php

                                $elements = [
                                    [
                                        'title' => 'Tu CRM está Integrado <span>
                                           a todas las herramientas <br class="desktopTabletElement">
                                         de marketing digital y ventas </span>',
                                    ],
                                    [
                                        'title' => 'Organiza en un solo lugar: <span>
                                           tus contactos, embudos, <br class="desktopTabletElement">
                                        flujos y oportunidades </span>',
                                    ],
                                    [
                                        'title' => 'Simple de usar, <span>
                                          diseñado por expertos para vendedores <br class="desktopTabletElement">
                y equipos de marketing </span>',
                                    ],
                                    [
                                        'title' => 'Gestiona tu base de datos <span>
                                          y guarda automáticamente <br class="desktopTabletElement">
                la data con formularios integrados desde tus landing pages </span>',
                                    ],
                                    [
                                        'title' => 'Segmenta y personaliza tus comunicaciones <span>
                                          con etiquetas <br class="desktopTabletElement">
                avanzadas. Ten trazabilidad e historial de tus contactos </span>',
                                    ],
                                    [
                                        'title' => 'Visualiza todo <span>
                                          tu proceso de venta, fase por fase </span>',
                                    ],
                                    [
                                        'title' => 'Potencia la productividad de tu equipo <span>
                                           con la asignación <br class="desktopTabletElement">
                de tareas, actividades y recordatorios </span>',
                                    ],
                                    [
                                        'title' => 'Automatiza tu flujo de acciones  <span>
                                          según la segmentación <br class="desktopTabletElement">
                de tus contactos </span>',
                                    ],
                                    [
                                        'title' => 'Analiza tus resultados <span>
                                          de ventas con dashboards <br class="desktopTabletElement">
                amigables y optimiza tus acciones </span>',
                                    ],
                                    [
                                        'title' => 'Fideliza más clientes <span>
                                          nutriendo tus relaciones <br class="desktopTabletElement">
                a largo plazo </span>',
                                    ],
                                ];

                            @endphp


                            <div class="containElements">

                                <ul class="elements">
                                    @foreach ($elements as $item)
                                        <li class="item">
                                            <div class="containerImage">
                                                <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}"
                                                    alt="" loading="lazy">
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

        <section class="sectionParent customSection CRM-2023_4">

            <img src="{!! App::setFilePath('/assets/images/banners/back_overlay_crm_sky_gray.png') !!}" alt="" class="backOverlay">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            <span>¿Hay más motores para mi máquina de conversión?</span> <br class="space">
                            Descubre las funcionalidades del Plan PRO
                        </h2>
                        <p class="text-p">
                            Al adquirir el plan Pro de Escala cuentas con funcionalidades más avanzadas para que
                            <br class="space">
                            puedas personalizar tus acciones de marketing, ventas y aumentar tus conversiones.
                        </p>
                    </div>
                </section>
                <section class="innerSectionElement sct2">
                    <div class="groupElements row">
                        <div class="order-last order-md-last order-lg-first col-md-12 col-lg-6 sectionTexts textRight">
                            <h3 class="secondaryTitle">
                                Bifurcaciones: <span class="blackColor">Automatiza <br class="space">
                                    tus flujos inteligentes</span>
                            </h3>
                            <p class="text">
                                Mide en tiempo real tus resultados con dashboards amigables para optimizar tus embudos
                                de ventas
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/10-CRM-2023.png') !!}" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="groupElements row">
                        <div class="col-md-12 col-lg-6">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/11-CRM-2023.png') !!}" loading="lazy">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 sectionTexts">
                            <h3 class="secondaryTitle">
                                <span class="blackColor">Lead Scoring:</span> Descubre quién
                                está a punto de comprar
                            </h3>
                            <p class="text">
                                Ahora podrás darle un puntaje a tus contactos por sus respuestas a tus acciones de
                                marketing y ventas comprendiendo si están: fríos, tibios o calientes para cerrar la
                                venta.
                            </p>
                        </div>
                    </div>
                </section>
                <section class="innerSectionElement sct3">
                    <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        Prueba el CRM de Escala
                    </a>
                </section>
            </div>
        </section>

        <section class="component-info-multiple-cards-T2 customSection sectionParent CRM-2023_5">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            <span>Los Expertos</span> <br class="space">
                            ¡Nuestra arma secreta!
                        </h2>
                        <p class="text-p">
                            Con el Plan PRO de Escala, nuestros especialistas en marketing digital y ventas te <br
                                class="space">
                            guiarán paso a paso para configurar tu CRM e implementar con éxito tu estrategia digital.
                        </p>
                    </div>

                </section>
                @php
                    $items = [
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/13-CRM-2023.png'),
                            'title' => '
                    <span>Acompañamiento<br class="space">
                    en vivo</span> para optimizar <br class="space">
                    tu implementación
                ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/14-CRM-2023.png'),
                            'title' => '
                    <span>Capacitaciones grupales <br class="space">
                    basadas en </span> mejores <br class="space">
                    prácticas y en los casos <br class="space">
                    de éxito de tu industria
                ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/15-CRM-2023.png'),
                            'title' => '
                    <span>Atención prioritaria por</span> <br class="space">
                    WhatsApp, Email y Chat <br class="space">
                    de servicio
                ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/16-CRM-2023.png'),
                            'title' => '
                    <span>Gerente de cuentas asignado <br class="space">
                    con</span> plan personalizado <br class="space">
                    de implementación
                ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/17-CRM-2023.png'),
                            'title' => '
                    <span>personalizadas <br class="space">
                    y creación de plantillas</span> <br class="space">
                    de páginas y correos para <br class="space">
                    tu empresa
                ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                    ];
                @endphp

                <section class="innerSectionElement sct2 ">

                    @foreach ($items as $item)
                        <div class="groupElements">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! $item['img'] !!}" loading="lazy"
                                        alt="{!! $item['img_alt'] !!}">
                                </div>
                            </div>

                            <div class="info">

                                <h3 class="secondaryTitle">
                                    {!! $item['title'] !!}
                                </h3>

                            </div>

                        </div>
                    @endforeach
                </section>
            </div>
        </section>


        <section class="sectionParent customSection CRM-2023_6">


            <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/back_overlay_crm_sky_blue.png') !!}')"
            class="backgroundFull"
            >

            <div class="section-row">

                <section class="innerSectionElement sct2">
                    <div class="groupElements row">
                        <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                            <h3 class="secondaryTitle">
                                <span>
                                    Nuestro CRM es tu gerente <br class="desktopTabletElement">
                                    de ventas:
                                </span> <br class="space">
                                él se ocupa de gerenciar <br class="desktopTabletElement">
                                tu proceso y tú te enfocas en hacer <br class="desktopTabletElement">
                                crecer tu empresa
                            </h3>
                            <p class="text">
                                Tu CRM de Escala es tu máquina de ventas, en un solo lugar <br
                                    class="desktopTabletElement">
                                puedes gerenciar tus contactos, segmentar y personalizar tus <br
                                    class="desktopTabletElement">
                                acciones de ventas y marketing y darle seguimiento a cada <br
                                    class="desktopTabletElement">
                                una de tus oportunidades abiertas. Además hace más <br class="desktopTabletElement">
                                productivo a tu equipo de ventas asignándoles tareas, <br class="desktopTabletElement">
                                actividades y recordatorios para convertir más.
                            </p>
                        </div>
                        <div class="image col-md-12 col-lg-4">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/morena_banco1.png') !!}" loading="lazy">
                            </div>
                        </div>
                    </div>


                </section>

            </div>
            </div>


        </section>



            @php
                $desk_reviews = [
                    [
                        'area' => 'Finanzas',
                        'text' => '
                        <strong>“Gracias a Escala ahorramos 70% del tiempo invertido</strong> por el equipo comercial en tareas operativas y aumentamos 20% la cantidad de clientes.”
                        ',
                        'logo' => App::setFilePath('/assets/images/logos/logo_saeta.png'),
                        'name' => 'Claudio Radovich, Fundador',
                    ],
                    [
                        'area' => 'Consultoría',
                        'text' => '
                        <strong>“Logramos 2X nuestra facturación</strong> en menos de 6 meses y multiplicar 4X los nuevos leads gracias a Escala.”
                        ',
                        'logo' => App::setFilePath('/assets/images/illustrations/others/icon_mark_testimonial.png'),
                        'name' => 'William Ávila, CEO',
                    ],
                    [
                        'area' => 'Salud y bienestar',
                        'text' => '<strong>“Aumentamos 5X la tasa de recuperación</strong> de carrito de compra abandonado y 41% la tasa de apertura promedio en campañas de Email Marketing.”',
                        'logo' => App::setFilePath('/assets/images/logos/logo_rgg.png'),
                        'name' => 'Biaggio Correale, Director <br class="space"> de Operaciones',
                    ],
                ];

            @endphp


            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/background_space_4.png') !!})"
                class="sectionParent customSection CRM-2023_7 ">

                <div class="section-row">


                    <section class="innerSectionElement sct1">


                        <div class="row">

                            <div class="slideshowCards col-md-12 col-lg-9">
                                <div class="containElements">

                                    <div id="carousel-testimonials-desktop" class="owl-carousel owl-theme">

                                        @if (isset($desk_reviews) && $desk_reviews != null)
                                            @foreach ($desk_reviews as $index => $item)
                                                <div class="item @if ($index === array_key_first($desk_reviews)) active @endif ">

                                                    <div class="testimonial">

                                                        <div class="containElements">

                                                            <div class="area">
                                                                <h3>
                                                                    {!! $item['area'] !!}
                                                                </h3>
                                                            </div>

                                                            <div class="quote">
                                                                <div class="containerImage">
                                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/open_comi.png') !!}" loading="lazy">

                                                                </div>
                                                            </div>

                                                            <p class="text">
                                                                {!! $item['text'] !!}
                                                            </p>

                                                            <div class="byCompany">
                                                                <div class="logo">
                                                                    <div class="containerImage">
                                                                        <img alt="TrustPilot review"
                                                                            src="{!! $item['logo'] !!}" alt=""
                                                                            loading="lazy">
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <span class="name">
                                                                        {!! $item['name'] !!}
                                                                    </span>
                                                                    <div class="stars">
                                                                        <div class="containerImage">
                                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}"
                                                                                loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>


                                                </div>
                                            @endforeach
                                        @endif

                                    </div>


                                </div>
                            </div>

                            <div class="info col-md-12 col-lg-3">
                                <div class="containElements">
                                    <h2 class="primaryTitle blackColor">

                                        Nuestros clientes <br class="space">
                                        <span>dicen por qué</span>

                                    </h2>
                                    <p class="primaryText">
                                        el CRM de Escala es el más completo
                                    </p>

                                      <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                        Prueba Gratis
                                     </a>

                                </div>
                            </div>

                        </div>


                    </section>


                </div>

                {{-- <img src="{!! App::setFilePath('/assets/images/banners/background_space_4.png') !!}" alt="" class="overlaySpace"> --}}


            </section>


            <script>
                jQuery('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 1
                        },
                        1000: {
                            items: 3
                        },
                        1250: {
                            items: 3
                        },
                        1500: {
                            items: 4
                        }
                    }
                })
            </script>


               <section class="sectionParent customSection CRM-2023_8">


            <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/crm_background_spacesky_blue.png') !!}')"
            class="backgroundFull"
            >

            <div class="section-row">

                <section class="innerSectionElement sct2">
                    <div class="groupElements row">
                        <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                            <h3 class="secondaryTitle">
                                Convierte más leads en clientes <br class="space">
                                <span>con el CRM de Escala</span>
                            </h3>

                              <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                        Prueba Gratis
                                </a>

                        </div>
                        <div class="image col-md-12 col-lg-4">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm_setupimage.png') !!}" loading="lazy">
                            </div>
                        </div>
                    </div>


                </section>

            </div>
            </div>


        </section>

    </div>
</div>

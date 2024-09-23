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

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol escala_app escala_app_0 ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/app_bg_0.svg') }}')" class="backgroundFull">


                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele2 col-md-12 col-lg-7">

                                        <h1 class="principalBigTitle blackColor">
                                            <span>
                                                Acelera tus ventas estés
                                                <br class="space">
                                                <!-- <br class="space"> -->
                                                donde estés con la
                                            </span> <br class="space">
                                            App móvil de Escala
                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            Accede a tu CRM desde el celular descargando <br class="space">
                                            la aplicación gratuita de Escala
                                        </p>


                                        <div class="features">
                                            <div class="element">
                                                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.escala.crm.app&pli=1">
                                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_1.png') }}" alt="" class="icon">
                                                </a>
                                            </div>
                                            <div class="element">
                                                <a target="_blank" href="https://apps.apple.com/ar/app/escala-crm/id6499237262">

                                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_2.png') }}" alt="" class="icon">
                                                </a>
                                            </div>
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

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración app escala para dispositivos móviles" src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_0.png') }}" loading="lazy">
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
                                        <img alt="Ilustración app escala para dispositivos móviles" src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_0.png') }}" loading="lazy">
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
        'classSection' => 'escala_app_14',
        'enableTitle' => true,
        'titlePrincipal' => '
        <span>No pierdas oportunidades de negocio
        </span>
        por no tener acceso a una computadora
        ',
        'overlay' => false,
        'enableButton' => false
        ];
        @endphp

        {{-- @contain_multiple_cards_T2($parameters)
        @endcontain_multiple_cards_T2 --}}


        <div class="sectionInfo_2">

            @contain_multiple_cards_T2($parameters)
            @endcontain_multiple_cards_T2


        </div>

        <section class="sectionParent customSection escala_app_2">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/appEscala/app_bg_1.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="image col-md-12 col-lg-4">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/appEscala/app_image_3.png') !!}" loading="lazy">
                                    <img src="{!! App::setFilePath('/assets/images/appEscala/app_image_4.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                                <h3 class="secondaryTitle">
                                    Accede al CRM de Escala<br class="space">
                                    desde cualquier lugar y en <br class="space">
                                    cualquier momento
                                    <br class="space">
                                    <br class="space">
                                    <span>Escanea el código QR para descargar la<br class="space">
                                        aplicación
                                        directamente desde la App Store.</span>
                                </h3>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>


        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'escala_app_15',
        'enableTitle' => true,
        'titlePrincipal' => '
        <span>Optimiza la gestión
        </span>
        de tu negocio
        ',
        'overlay' => false,
        'enableButton' => false,
        'elements' => [
        [
        'img' => App::setFilePath('/assets/images/appEscala/app_image_5.png'),
        'title' => '
        Crea y actualiza <br class="space">
        contactos
        ',
        'text' => '
        Organiza, y accede fácilmente a la <br class="space">
        información de tus leads y clientes.
        ',
        'enableButton' => false,
        'background_item' => false,
        ],
        [
        'img' => App::setFilePath('/assets/images/appEscala/app_image_6.png'),
        'title' => '
        Gestiona oportunidades
        <br class="space">
        en tu pipeline
        ',
        'text' => '
        Haz seguimiento paso a paso del
        <br class="space">
        proceso comercial y toma acciones
        <br class="space">
        para cerrar más y mejor.
        ',
        'enableButton' => false,
        'background_item' => false,
        ]
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


        <section class="sectionParent customSection escala_app_20">
            <div>
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!!  App::setFilePath('/assets/images/gifs/app_escala_gift_sec_20.gif') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                                <h3 class="secondaryTitle">
                                    Utiliza el WhatsApp Inbox
                                </h3>
                                <p>
                                    Disfruta de los beneficios de esta potente herramienta de <br class="DT_e"> comunicación desde tu celular
                                    <br class="space">
                                    <br class="space">
                                    Conocer más
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'escala_app_15',
        'overlay' => false,
        'enableButton' => false,
        'elements' => [
        [
        'img' => App::setFilePath('/assets/images/appEscala/app_image_7.png'),
        'title' => '
        Programa tareas <br class="space">
        y actividades
        ',
        'text' => '
        Crea, gestiona y recibe recordatorios
        <br class="space">
        de tus tareas y actividades ¡para que
        <br class="space">
        no se escape ningún lead!
        ',
        'enableButton' => false,
        'background_item' => false,
        ],[
        'img' => App::setFilePath('/assets/images/appEscala/app_image_8.png'),
        'title' => '
        Sincronización en <br class="space">
        tiempo real
        ',
        'text' => '
        Actualiza datos desde cualquier
        <br class="space">
        dispositivo y mantén toda tu
        <br class="space">
        información al día.
        ',
        'enableButton' => false,
        'background_item' => false,
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
        <div class="btnCenter">
            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                Solicita un demo gratuito
            </a>
        </div>



        <section class="customSection sectionParent escala_app_16">

            <div class="section-row">


                <section class="innerSectionElement sct2">
                    <img src="{!! App::setFilePath('/assets/images/banners/back_overlay_app-escala.png') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/person/am/landing_crm_am_2.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-7 column-text">
                                <p>
                                    <span>
                                        "La App de Escala es una herramienta
                                        <br class="DT_e">
                                        indispensable para tener acceso inmediato
                                        <br class="DT_e">
                                        y continuo a tu CRM desde cualquier lugar,
                                        <br class="DT_e">
                                        con notificaciones en tiempo real, donde
                                        <br class="DT_e">
                                        podrás optimizar la gestión de tu negocio
                                        <br class="DT_e">
                                        desde un solo lugar." .

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


        <section class="customSection sectionParent escala_app_17">

            <div class="section-row">

                <section class="innerSectionElement sct0">

                    <div class="containElements">
                        <div class="container mt-5">
                            <div class="row">
                                <div class="text-center col-md-12 col-lg-12">
                                    <h2 class="primaryTitle">
                                        ¿Cómo <span class="blackColor2"> descargar y usar</span> la app <br class="DT_e">
                                        móvil de Escala?
                                    </h2>
                                    <div class="ele video col-md-12" style=".vjs-big-play-button{display:none!important}">

                                        @php
                                        $videoEmbed = App::setFilePath('/assets/videos/app_escala_video.mp4');
                                        $videoCover = App::setFilePath('/assets/images/appEscala/bg-video-usar-app.png');
                                        @endphp

                                        @if (isset($videoEmbed) && $videoEmbed != null)
                                        <div class="youtubeImageContainer ">

                                            <video class="video-js" controls preload="none" poster="{{ $videoCover }}" {{-- poster="MY_VIDEO_POSTER.jpg" --}} data-setup="{
                                          autoplay: false
                                        }">
                                                <source src="{{ $videoEmbed }}" type="video/mp4" />
                                                <source src="{{ $videoEmbed }}" type="video/webm" />
                                                <p class="vjs-no-js">
                                                    To view this video please enable JavaScript, and consider
                                                    upgrading to a
                                                    web browser that
                                                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                                        HTML5 video</a>
                                                </p>
                                            </video>


                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

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

        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/app_bg_2.svg') !!})" class="customSection sectionParent escala_app_18 ">

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
                                                            <img alt="TrustPilot review" src="{!! $item['logo'] !!}" alt="" loading="lazy">
                                                        </div>
                                                    </div>
                                                    <div class="data">
                                                        <span class="name">
                                                            {!! $item['name'] !!}
                                                        </span>
                                                        <div class="stars">
                                                            <div class="containerImage">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>


                                    </div>
                                    @endforeach
                                    @endif



                                    {{-- <ol class="carousel-indicators">

                            @if (isset($desk_reviews) && $desk_reviews != null)

                            @foreach ($desk_reviews as $index => $item)

                            <button type="button" data-bs-target="#carousel-testimonials-desktop" data-bs-slide-to="{{ $index }}" @if ($index === array_key_first($desk_reviews)) class="active" aria-current="true" @endif aria-label="Slide {{ $index }}"></button>

                                    @endforeach

                                    @endif

                                    </ol> --}}


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
                                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
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
                        items: 3
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






        <section class="sectionParent customSection escala_app_19">
            <div style="background-image: url('{!! App::setFilePath('/assets/images/appEscala/app_bg_3.svg') !!}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                                <h3 class="secondaryTitle">
                                    <span>Descarga hoy mismo la
                                        <br class="space">
                                    </span>App móvil de Escala
                                    <br class="space">
                                    <span>y lleva el éxito de tu negocio contigo.</span>
                                </h3>
                                <div class="features">
                                    <div class="element">
                                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.escala.crm.app&pli=1">

                                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_1.png') }}" alt="" class="icon">
                                        </a>
                                    </div>
                                    <div class="element">
                                        <a target="_blank" href="https://apps.apple.com/ar/app/escala-crm/id6499237262">

                                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_2.png') }}" alt="" class="icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="image col-md-12 col-lg-4">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/appEscala/app_image_9.png') !!}" loading="lazy">
                                </div>
                            </div>



                        </div>
                    </section>
                </div>
            </div>
        </section>

    </div>


</div>
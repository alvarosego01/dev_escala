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
                                                <br class="DT_e">
                                                <!-- <br class="space"> -->
                                                donde estés con la
                                            </span> <br class="space">
                                            App móvil de Escala
                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            Accede a tu CRM desde el celular descargando <br class="DT_e">
                                            la aplicación gratuita de Escala
                                        </p>


                                        <div class="features">
                                            <div class="element">

                                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_1.png') }}" alt="" class="icon">

                                            </div>
                                            <div class="element">

                                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_2.png') }}" alt="" class="icon">

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



        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'escala_app_15',
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
        ],[
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


        <section class="customSection sectionParent escala_app_18">

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
                                        $videoEmbed = App::setFilePath('/assets/videos/Testimonio_Miguel_Quisnancela_.mp4');
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
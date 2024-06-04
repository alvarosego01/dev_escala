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

                                    <div class="ele ele2 col-md-12 col-lg-7">

                                        <h1 class="principalBigTitle blackColor">
                                            <span>
                                                Acelera tus ventas estés donde estés con la
                                            </span> <br class="space">
                                            App móvil de Escala
                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            Accede a tu CRM desde el celular descargando <br class="DT_e">
                                            la aplicación gratuita de Escala
                                        </p>


                                        <div class="features">
                                                <div class="element">

                                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_1.png') }}"
                                                        alt="" class="icon">

                                                </div>
                                                <div class="element">

                                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_2.png') }}"
                                                        alt="" class="icon">

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
                                            <img alt="Ilustración app escala para dispositivos móviles"
                                                src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_0.png') }}"
                                                loading="lazy">
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
                                        <img alt="Ilustración app escala para dispositivos móviles"
                                            src="{{ App::setFilePath('/assets/images/illustrations/others/app_image_0.png') }}"
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

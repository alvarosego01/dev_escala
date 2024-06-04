<div id="landing_emailMarketingCampaigns_2023">

    <div class="sections">

        {{-- @header_t1([
            'backgroundImageType' => true,
            'overlay' => false,
            'classSection' => 'threeCol landing_emailMarketingCampaigns_2023 landing_emailMarketingCampaigns_2023_0',
            'title' => '
                        Campañas de Email <br class="space">
                        marketing <span> más efectivas <br class="space">
                        y fáciles de crear.
                        </span>
                    ',
            'text' => '
                        <span class="whiteColor">
                            Logra que tu mensaje sea <br class="DT_e">
                            escuchado y que tu negocio crDT_e <br class="DT_e">
                            con nuestrDT_eataforma todo-en-<br class="DT_e">
                            uno de email marketing.
                        </span>
                    ',
            'threeCol' => true,
            'textForm' => 'Recibe un demo-tour <br class="space"> personalizado de Escala',
            'backgroundImage' => App::setFilePath('/assets/images/banners/bg_emailMark_0.svg'),
            'overlayImage' => null,
            'image' => App::setFilePath('/assets/images/person/am/am_back_circle_yellow.png'),
            'img_alt' => 'Ilustración Andrés Moreno, CEO de Escala, embudos de venta'
        ])
        @endheader_t1 --}}

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

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_emailMarketingCampaigns_2023 landing_emailMarketingCampaigns_2023_0 ">


        <div
        style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_emailMark_0.svg')}}')"
        class="backgroundFull">


            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta" src="{{ App::setFilePath('/assets/images/person/am/am_back_circle_yellow.png')}}" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">

                        Campañas de Email <br class="space">
                        marketing <span> más efectivas <br class="space">
                        y fáciles de crear.
                        </span>

                                        </h1>

                        <p class="principalBigText grayColorTexts">

                        <span class="whiteColor">
                            Logra qDT_eu mensaje sea escuchado y que tu <br class="DT_e">
                  DT_e      negocio crezca con nuestra plataforma todo-<br class="DT_e">
                            en-uno de email marketing.
                        </span>

                                            </p>




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

                                    <h5 class="titleFormat blackcolor">Recibe un demo-tour <br class="space"> personalizado de Escala</h5>

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
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta" src="{{ App::setFilePath('/assets/images/person/am/am_back_circle_yellow.png')}}" loading="lazy">
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


           {{--         <section class="innerSectionElement sct2">

                           <div class="containElements">



                           </div>

                       </section> --}}

            </div>



        </div>

    </section>


        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_emailMarketingCampaigns_2023_1',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/1.Arrastra y suelta_emailMkt.gif'),
                'title' => 'Arrastra <span>y suelta</span>',
                'text' => '
     DT_e           Crea increíbles emails que cautivan a tu audiencia en <br class="DT_e">
                    cualquier dispositivo con un constructor de emails muy fácil <br class="DT_e">
                    de usar y plantillas pre-diseñadas.
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
                'classSection' => 'landing_emailMarketingCampaigns_2023_2',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/2.Crea-con-inteligencia-artificiDT_emailMkt.gif'),
                'title' => '
                    Crea contenido en segundos con <br class="DT_e">
                    <span>Inteligencia Artificial</span>
          DT_e  ',
                'text' => '
                    Bríndale a Escala un par de palabras cDT_e y tu intención <br class="DT_e">
                    para que te proponga opcioDT_eque puedas elegir y revisar <br class="DT_e">
                    si lo necesitas. ¡Esto funciona para tanto para el cuerpo del <br class="DT_e">
                    email como para el asunto!
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
                'classSection' => 'landing_emailMarketingCampaigns_2023_3',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setDT_ePath('/assets/images/gifs/3.Automatizaciones_emailMkt.gif'),
                'title' => '
                    <span>Automatiza flujos</span> de email y escala <br class="DT_ee>
                    operaciones
                ',
                'text' => '
                    Logra que tus contactos reciban tus mensajes en el <br class="DT_e">
                    momento oportuno ¡sin tener que estar pendiente de <br class="DT_e">
                    enviarlos! Envía emails <br class="space">
                    <span class="items">
                    <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">Bienvenida inmediatamente después de que compran <br class="space">
                    </span>
                    <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">Recordatorios antes de un evento importante <br class="space">
                    </span>
                    <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">De nutrición para potenciar el proceso comercial <br class="space"> ¡y más!
                    </span>
                    </span>
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
                'classSection' => 'landing_emailMarketingCampaigns_2023_4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitDT_eincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/4.Analiticas-small_emailMkt.gif'),
                'title' => '
                    Conoce el resultado y <span>optimiza tus <br class="DT_e">
                    campañas</span> con analíticas en tiempo real
                ',
                'text' =>
                    '
                    Una vez envíes tus campañas, podrás: <br class="space">
                    <span class="items">
                    <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">Visualizar métricas como la tasa de apertura y rebote <br class="space">
                    </span>
                    <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">Averiguar quiénes hicieron click y cancelaron su suscripción <br class="space">
                    </span>
                    <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">Descubrir cuáles links tuvieron más clicks <br class="space"> ¡y más!
                    </span>
                    </span>
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
                'classSection' => 'landing_emailMarketingCampaigns_2023_5',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/5.responsive_emailMkt.gif'),
                'title' => '
                    ¡Logra que tus emails se vean bien en <DT_e>todos <br class="DT_e">
                        los dispositivos!
   DT_e             </span>
                ',
                'text' => '
                    Encontrarás que Escala facilita el diseño responsive para <br class="DT_e">
                    que tu audiencia vea muy bien tus emails en laptops, <br class="DT_e">
                    celulares y tablets.
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
                'classSection' => 'landing_emailMarketingCampaigns_2023_6',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/asDT_e/images/illustrations/others/email_mkt_spam.png'),
                'title' => '
            DT_e   <span>Dile ¡Adiós!</span> a la bandeja de spam
                ',
                'texDT_e> '
                    Escala tiene la tecnología más avanzada y un equipo de <br class="DT_e">
                    expertos que te guían para evitar que tus emails reboten o <br class="DT_e">
                    caigan en la bandeja de spam. Así logras que tus emails <br class="DT_e">
                    lleguen a donde deben llegar.
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


        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_emailMark_1.svg') !!})"
            class='w-full customSection sectionParent landing_emailMarketingCampaigns_2023_7'>
            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="title">
                            <span>Descubre por ti mismo la <br class="M_e"> mejor</span> <br class="DT_e">
                            herramienta de email <br class="M_e"> marketing
                        </h2>

                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibir demo
                        </a>

                    </div>

                </section>

            </div>
        </section>

        @php
            $elements = [
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_emailMark_01.png'),
                        'title' => '
                <span>Re-despertar el interés</span> <br class="space">
                de tus contactos en tus <br class="space">
                productos y servicios
                ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_emailMark_02.png'),
                        'title' => '
                <span>Comunicar</span>  <br class="space">
                promociones <br class="space">
                especiales
                ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_emailMark_03.png'),
                        'title' => '
                <span>
                    Aumentar el <br class="space">
                    profesionalismo
                </span> de tus <br class="space">
                mensajes en momentos <br class="space">
                clave
                ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_emailMark_04.png'),
                        'title' => '
                <span>Mantenerte “top of mind”</span> <br class="space">
                y nutrir la relación con tus <br class="space">
                leads y clientes
                ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_emailMark_05.png'),
                        'title' => '
                <span>
                    Llegar a muchísimas <br class="space">
                    personas
                </span> de manera <br class="space">
                masiva y personalizada <br class="space">
                con un solo click
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/icon_emailMark_06.png'),
                        'title' => '
                <span>
                    Recuperar <br class="space">
                    oportunidades
                </span> que <br class="space">
                pierdes en el proceso <br class="space">
                comercial
                ',
                        'enableButton' => false,
                    ],
                ]
        @endphp


        <section class="component-info-multiple-cards-T2 customSection sectionParent landing_emailMarketingCampaigns_2023_8 ">

        <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">

                            ¿Qué puedes lograr con tus <br class="space">
                            campañas email marketing?
                                <br class="space">
                            <span class="subTitle">
                            ¡y mucho más!
                            </span>

                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2 ">

                @foreach ($elements as $item)

                {{-- style="background-image: url({!! App::setFilePath('/assets/images/illustrations/others/box_container_medium.png') !!})" --}}
                <div
                class="groupElements">

                    <div class="image">
                        <div class="containerImage">
                            <img src="{!! $item['img'] !!}" loading="lazy">
                        </div>
                    </div>
                    <div class="info">

                        <h3 class="secondaryTitle">
                            {!! $item['title'] !!}

                        </h3>

                    </div>

                    {{-- <img src="{!! App::setFilePath('/assets/images/illustrations/others/box_container_medium.png') !!}" alt="" class="bgOverlay"> --}}

                    <svg
                    class="bgOverlay"
                    xmlns="http://www.w3.org/2000/svg" width="423" height="321" viewBox="0 0 423 321" fill="none">
  <g filter="url(#filter0_d_13_2816)">
    <path d="M30 73.9662C30 58.1275 42.3127 45.0176 58.1202 44.0251L361.12 25.0015C378.394 23.917 393 37.6346 393 54.9426V254.5C393 271.069 379.569 284.5 363 284.5H60C43.4315 284.5 30 271.069 30 254.5V73.9662Z" fill="white"/>
  </g>
  <defs>
    <filter id="filter0_d_13_2816" x="0" y="0.941406" width="423" height="319.559" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="6"/>
      <feGaussianBlur stdDeviation="15"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.211765 0 0 0 0 0.462745 0 0 0 0 0.541176 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_13_2816"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_13_2816" result="shape"/>
    </filter>
  </defs>
</svg>

                </div>

                 @endforeach

            </section>


        </div>

                <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg_emailMark_4.svg') !!}')" class="backgroundPlanets">
        </div>

    </section>

        <div class="groupBackground">

        <section class="customSection sectionParent landing_emailMarketingCampaigns_2023_9">

            <div class="section-row">


                <section class="innerSectionElement sct2">
                    {{-- style="background-image: url({!! App::setFilePath('/assets/images/banners/am_overlay_email-mkt.png') !!})"  --}}
                    <img src="{!! App::setFilePath('/assets/images/banners/am_overlay_email-mkt.png') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/12-home2023.pnDT_e!!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                           DT_e     “En mi experiencia, <span>
                                        la venta se logra luego <bDT_eass="DT_e">
                                        de varios contactos persoDT_ezados.
                                    </span> La <br class="DT_e">
                                    gestión inteligente de campañas de emails <br class="DT_e">
                                    es una <span>estrategia fundamental</span> para <br class="DT_e">
                                    mantenerse en contacto, y quizás el método <br class="DT_e">
                                    de menor costo de todos”.
                                    <br class="space"><br class="space">

                                    <span class="yellow">
                                        Andrés Moreno <br class="space">
                                        <small>Fundador de escala & Open English</small>
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_emailMark_2.svg') !!})"
            class="customSection sectionParent landing_emailMarketingCampaigns_2023_10">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            ¿Nuevo en email marketing? <br class="space">
             DT_e           <span>¡No te preocupes, te entrenamos!</span>
                        </hDT_e
                    </div>

                </section>

                <secDT_e class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="info">
                            <p class="text">
                                Nuestro equipo de servicio y <br class="DT_e">
                                entrenadores Escala te orientan desde <br class="DT_e">
                                el día 1 para que consigas mejores <br class="DT_e">
                                resultados con email marketing.
                                <br class="space"><br class="space">
                                <span>
                                    ¡Ninguna otra plataforma te <br class="space">
                                    acompaña mejor!
                                </span>
                            </p>
                        </div>
                        <div class="image">

                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_emailMark_07.png') !!}" alt="">
                            </div>

                        </div>

                    </div>

                </section>

                <section class="innerSectionElement sct3">

                    <div class="containElements">

                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Conocer más
                        </a>

                    </div>

                </section>

            </div>

        </section>


{{--         @php
            $parameters = [
                'classSection' => 'landing_emailMarketingCampaigns_2023_11',
                'enableTitle' => true,
                'titlePrincipal' => '
                Qué dicen nuestros clientes sobre las campañas <br class="DT_e">
                de Email Marketing que crean en Escala
                ',
                'subTitlePrincipal' => null,
                'enableContainerButton' => false,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Recibe un demo',
                'mob_reviews' => [
                    App::setFilePath('/assets/images/illustrations/others/email_mkt_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/email_mkt_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/email_mkt_review_3.png')],
                'desk_reviews' => [
                    [
                    App::setFilePath('/assets/images/illustrations/others/email_mkt_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/email_mkt_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/email_mkt_review_3.png')]
                ],
            ];
DT_e    @endphp
        @reviews_sliders_T1($parameters)
        @endreviews_sliders_T1
 --}}

         <section
        class='w-full customSection sectionParent landing_emailMarketingCampaigns_2023_11'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                    Qué dicen nuestros clientes sobre las campañas <br class="DT_e">
                de Email Marketing que crean en Escala

                </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                    @php
                        $reviews = [
                            App::setFilePath('/assets/images/illustrations/others/email_mkt_review_1.png'),
                            App::setFilePath('/assets/images/illustrations/others/email_mkt_review_2.png'),
                            App::setFilePath('/assets/images/illustrations/others/email_mkt_review_3.png')
                        ]
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


        <section
        class='w-full customSection sectionParent landing_emailMarketingCampaigns_2023_12'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>

                        <h2 class="primaryTitle">
                            ¿Por qué Escala?
                        </h2>

                    </div>
                </section>

                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_emailMark_08.png') !!}" alt="">
                            </div>
                        </div>

                        <div class="info">

                               @php
                                        $elements = [
                                            [
                                                'title' => 'Potente herramienta de email marketing',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_0.png'),

              DT_e                          ],
                                            [
                                                'title' => 'Servicio de Acompañamiento VIP',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_1.png'),

                                            ],
                                            [
                                                'title' => 'Encuentras muchas más herramientas de <br class="DT_e"> marketing y ventas integradas',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_2.png'),

                                            ],
                                            [
                                                'title' => 'Todo 100% en español',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_3.png')DT_e
                                            ],
                                            [
                                                'title' => 'Educación de negocio de primera',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_4.png'),

                                            ],
                                            [
                                                'title' => 'Implementamos parte de la primera <br class=DT_et"> campaña por ti ',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_5.png'),

                                            ]
                                        ];
                                    @endphp

                                    <ul class=elements selectorInfoo">

                                        @foreach ($elements as $item)
                                            <li class=element  "
                                                info_index="{!! $loop->index !!}">
                                                <div class=iconn">
                                                    <div class=containerImagee">
                                                        <img src="{!! $item['icon'] !!}" loading="lazy">
                                                    </div>
                                                </div>
                                                <h3>
                                                    {!! $item['title'] !!}
                                                </h3>
                                            </li>
                                        @endforeach

                                    </ul>


                        </div>

                    </div>
                </section>

            </div>

        </section>

            <section
            style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_emailMark_3_2.svg') !!})"
        class=w-full customSection sectionParent landing_emailMarketingCampaigns_2023_133'>

            <div class=section-roww">

                <section class=innerSectionElement sct0  '>
                      <div class=containElementss">

                        <h2 class=titlee">
                           Acelera el crecimiento de <br class=spacee">
                            tu negocio
                        </h2>

                        <a class= secondaryButton hoverInEffect openPopUpButton popup-general-demo-20222">
                            Conoce Escala
                        </a>

                    </div>
                </section>

            </div>

            </section>


    </div>

    </div>


</div>

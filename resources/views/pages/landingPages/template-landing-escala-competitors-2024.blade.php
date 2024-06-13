<div id="landing_escala_competitors_brands_2024">
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
            class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_escala_competitors_brands_2024 landing_escala_competitors_brands_2024_0 ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_competitors_0.svg') }}')"
                class="backgroundFull">


                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta"
                                                src="{{ App::setFilePath('/assets/images/person/am/competitors_img_0.png') }}"
                                                loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">
                                            Escala: El CRM todo-en-<br class="DT_e">uno que <span>acelera tus
                                                ventas</span>
                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            Genera leads y conviértelos en clientes <br class="DT_e">
                                            fieles con todas las herramientas <br class="DT_e">
                                            integradas ¡en un solo lugar!
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
                                            src="{{ App::setFilePath('/assets/images/person/am/competitors_img_0.png') }}"
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

        <section class="customSection sectionParent landing_escala_competitors_brands_2024_1">

            <div class="section-row">

                <section class="innerSectionElement sct0">

                    <div class="containElements">
                        <h2 class="titleSection">
                            <span>¿Qué necesita una pequeña o mediana empresa (PYME)</span> <br class="space">
                            para crecer en la era digital?
                        </h2>
                    </div>

                </section>

                <section class="innerSectionElement sct1">

                    <div class="containElements row">


                        <div class="elementCard ">
                            <h3>
                                Tecnologías que sean:
                            </h3>
                            <ul>
                                <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Fáciles de usar
                                </li>
                                <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Costo-eficientes
                                </li>
                                <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Integradas</li>
                                <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Diseñadas para su
                                    <br class="space">
                                    etapa de crecimiento
                                </li>
                            </ul>
                        </div>

                        <div class="elementCard ">
                            <h3>
                                Desarrollar habilidades en:
                            </h3>
                            <ul>
                                <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Marketing digital
                                </li>
                                <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Ventas</li>
                                <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Gestión del
                                    cambio al <br class="space">
                                    implementar nuevas <br class="space">tecnologías</li>
                            </ul>
                        </div>

                        <div class="elementCard ">
                            <h3>
                                Acompañamiento:
                            </h3>
                            <ul>
                                <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Atención
                                    personalizada</li>
                                <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Apoyo en la
                                    adopción</li>
                                <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Guía para
                                    acelerar <br class="space"> resultados</li>
                            </ul>
                        </div>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="containElements ">

                        <div class="containerimage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/competitors_img_1.png') !!}" alt="" loading="lazy">
                        </div>

                    </div>

                </section>

            </div>

        </section>

        <section
            class="component-info-text-video-T1 customSection sectionParent landing_escala_competitors_brands_2024_2 "
            style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_competitors_1.svg') }}')">
            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            <span>Conoce Escala:</span> el CRM ideal para PYMES
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <div class="video col-md-12">

                            @php
                                $videoEmbed = App::setFilePath('/assets/videos/intro_escala__crm_todo-en-uno (1080p).mp4');
                                $videoCover = App::setFilePath('/assets/videos/intro_escala__crm_todo-en-uno (1080p).mp4');
                            @endphp
  @if (isset($videoEmbed) && $videoEmbed != null)
                                                <div class="youtubeImageContainer ">

                                                    <video class="video-js video_2 videoCover" autoplay muted loop>
                                                       <source src="{{ $videoCover }}" type="video/mp4">
                                                       Tu navegador no soporta videos HTML5.
                                                   </video>

                                                             <video id="video_2" class="video-js video_2" controls
                                                       preload="none" poster="{{ $videoCover }}"
                                                       data-setup="{
                                                          autoplay: false
                                                        }">
                                                       <source src="{{ $videoEmbed }}" type="video/mp4" />
                                                       <source src="{{ $videoEmbed }}" type="video/webm" />
                                                       <p class="vjs-no-js">
                                                           To view this video please enable JavaScript, and consider
                                                           upgrading to a
                                                           web browser that
                                                           <a href="https://videojs.com/html5-video-support/"
                                                               target="_blank">supports
                                                               HTML5 video</a>
                                                       </p>
                                                   </video>


                                                </div>

                                                <script type="text/javascript">
                                                   var player = videojs('video_2');

                                                   player.on('play', function() {

                                                       jQuery('.video_2.videoCover').remove();

                                                   });
                                               </script>

                                            @endif

                        </div>

                    </div>

                </section>



            </div>

        </section>


            <section class="customSection sectionParent landing_escala_competitors_brands_2024_3">

                <div class="section-row">

                    <section class="innerSectionElement sct0">

                        <div class="containElements">
                              <h2 class="primaryTitle">
                          ¿Qué han logrado nuestros clientes?
                        </h2>
                        </div>

                    </section>

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <div class="element">
                                <p class="text">
                                    <span class="title-blue">Negocios aumentaron</span> <br class="space">
                                    <span class="number">2X</span> <br class="space">
                                    <span class="text-big">sus ingresos</span> <br class="space">
                                    <span class="text-small">en menos de 6 meses</span>
                                </p>
                            </div>
                            <div class="element">
                                <p class="text">
                                    <span class="title-blue">Empresas generaron</span> <br class="space">
                                    <span class="number">300%</span> <br class="space">
                                    <span class="text-big">más leads</span> <br class="space">
                                    <span class="text-small">en 6 meses</span>
                                </p>
                            </div>
                            <div class="element">
                                <p class="text">
                                    <span class="title-blue">Vendedores aumentaron</span> <br class="space">
                                    <span class="number">70%</span> <br class="space">
                                    <span class="text-big">la eficiencia</span> <br class="space">
                                    <span class="text-small">en procesos comerciales</span>
                                </p>
                            </div>
                            <div class="element">
                                <p class="text">
                                    <span class="title-blue">Equipos de marketing han</span> <br class="space">
                                    <span class="number">5X</span> <br class="space">
                                    <span class="text-big">tasa de ventas</span> <br class="space">
                                    <span class="text-small">recuperadas</span>
                                </p>
                            </div>

                        </div>

                    </section>

                      <section class="innerSectionElement sct3">

                    <div class="containElements">


                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Conocer Escala
                        </a>

                    </div>

                </section>

                </div>

            </section>


@php

    $elements = array(
        [
            "CRM",
            "Escala",
            "Keap",
            "HubSpot",
            "Salesforce",
            "Zoho",
            "RD Station",
            "Pipedrive",
            "Bitrix 24",
            "Clienty",
            "Kommo",
            "Clientify"
        ],
        [
            "Planificador de <br class='space'> embudos de venta",
            "check_true",
            "check_false",
            "check_false",
            "check_false",
            "check_false",
            "check_false",
            "check_false",
            "check_false",
            "check_false",
            "check_false",
            "check_false",
        ],
        [
            'Fácil de usar',
            'check_true',
            'check_true',
            'check_false',
            'check_false',
            'check_false',
            'check_true',
            'check_true',
            'check_false',
            'check_false',
            'check_true',
            'check_true'
        ],
        [
            'Gestión de <br class=""> campañas <br class="space"> publicitarias',
            'check_true',
            'check_false',
            'check_true',
            'check_false',
            'check_true',
            'check_true',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_true'
        ],
        [
            'Integración de <br class="space"> marketing y ventas',
            'check_true',
            'check_true',
            'check_true',
            'check_false',
            'check_true',
            'check_true',
            'check_false',
            'check_true',
            'check_false',
            'check_false',
            'check_true'
        ],
        [
            'Calificación de <br class="space"> servicio al cliente <br class="space"> por los usuarios',
            'check_true',
            'check_false',
            'check_true',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_true',
            'check_false',
            'check_false'
        ],
        [
            'Acompañamiento <br class="space"> Premium sin costo',
            'check_true',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_true'
        ],
        [
            'Reportes <br class="space"> personalizados',
            'check_true',
            'check_true',
            'check_true',
            'check_true',
            'check_true',
            'check_true',
            'check_true',
            'check_true',
            'check_true',
            'check_false',
            'check_true'
        ],
        [
            'Facilidad de <br class=""> Implementación',
            'check_true',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_true',
            'check_true',
            'check_false'
        ],
        [
            'Adaptación a las <br class="space"> empresas de Latam',
            'check_true',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_true',
            'check_false',
            'check_false',
            'check_true',
            'check_false',
            'check_false'
        ],
        [
            'Integraciones nativas',
            'check_true',
            'check_false',
            'check_true',
            'check_false',
            'check_true',
            'check_true',
            'check_false',
            'check_true',
            'check_false',
            'check_false',
            'check_true'
        ],
        [
            'Inbox',
            'check_true',
            'check_false',
            'check_true',
            'check_true',
            'check_false',
            'check_true',
            'check_false',
            'check_false',
            'check_true',
            'check_true',
            'check_true'
        ],
        [
            'Soluciones <br class="space"> para pymes',
            'check_true',
            'check_false',
            'check_false',
            'check_false',
            'check_false',
            'check_true',
            'check_true',
            'check_true',
            'check_true',
            'check_true',
            'check_true'
        ]

    );

    function setContain($item){

        if($item == 'check_true'){
            // return 'tru';
            return '<div class="check_icon"><img src="'.App::setFilePath('/assets/images/illustrations/others/check_true.png').'" loading="lazy"></div>';
        }

        if($item == 'check_false'){
            // return 'false';
            return '<div class="check_icon"><img src="'.App::setFilePath('/assets/images/illustrations/others/check_false.png').'" loading="lazy"></div>';
        }

        return '<span >'.$item.'</span>';

    }

@endphp

       <section class="customSection sectionParent landing_escala_competitors_brands_2024_4">

                <div class="section-row">

                    <section class="innerSectionElement sct0">

                        <div class="containElements">
                              <h2 class="primaryTitle">
                         <span>¿Por qué elegir</span> Escala CRM?
                        </h2>

                        <p class="text">
                            Explora nuestra tabla comparativa y descubre la competitividad<br class="DT_e">
                            de Escala, frente a otras opciones:
                        </p>
                        </div>

                    </section>

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                              <table class="table">

          <tbody>

            @foreach ($elements as $row)

            <tr class="row">
                @foreach ($row as $item)
              <td class=" @if ($loop->first) column_primary @else col @endif" >
                    {!! setContain($item) !!}
              </td>
                @endforeach
            </tr>

            @endforeach

          </tbody>

                              </table>
                        </div>


                    </section>


                </div>

       </section>


        <section class="customSection sectionParent landing_escala_competitors_brands_2024_5">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="title">
                            <span>Genera más leads y conviértelos</span> <br class="space">
                            en clientes fieles con Escala
                        </h2>
                        <p class="text">
                            Acelera tu ciclo de ventas con nuestras potentes herramientas <br class="DT_e">
                            de marketing y ventas integradas:
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
                                            'title' => 'WhatsApp integrado',
                                            'icon' => App::setFilePath(
                                                '/assets/images/illustrations/others/icon_whatsapp_small.png',
                                            ),
                                            'text' => '
            <span>Optimiza tu comunicación por WhatsApp</span> <br class="space">
            con envíos masivos, mensajes <br class="space">
            automatizados, y gestión por inbox
            ',
                                            'img' => App::setFilePath(
                                                '/assets/images/gifs/image_whatsapp_home_selector.gif',
                                            ),
                                        ],
                                        [
                                            'title' => 'Inteligencia Artificial',
                                            'icon' => App::setFilePath(
                                                '/assets/images/illustrations/others/icon_ia_small.png',
                                            ),
                                            'text' => '
            <span>Crea contenido efectivo en segundos</span> <br class="space">
            La IA en Escala es como tener un copywriter <br class="DT_e">
            estrella a una fracción del costo',
                                            'img' => App::setFilePath('/assets/images/gifs/image_ia_home_selector.gif'),
                                        ],
                                        [
                                            'title' => 'Gestión de contactos y procesos',
                                            'icon' => App::setFilePath(
                                                '/assets/images/illustrations/others/icon_crm_small.png',
                                            ),
                                            'text' => '
            <span>Convierte más leads en clientes fieles</span> <br class="space">
            organizando, guardando y supervisando <br class="DT_e">
            mejor todo lo que ocurre con tus contactos',
                                            'img' => App::setFilePath(
                                                '/assets/images/gifs/image_crm_home_selector.gif',
                                            ),
                                        ],
                                        [
                                            'title' => 'Automatizaciones',
                                            'icon' => App::setFilePath(
                                                '/assets/images/illustrations/others/icon_automatizations_small.png',
                                            ),
                                            'text' => '
        Ahorra tiempo y dinero <br class="DT_e">
        programando tareas y flujos de acciones
     ',
                                            'img' => App::setFilePath(
                                                '/assets/images/gifs/image_automatizations_home_selector.gif',
                                            ),
                                        ],
                                        [
                                            'title' => 'Landing Pages',
                                            'icon' => App::setFilePath(
                                                '/assets/images/illustrations/others/icon_landingp_small.png',
                                            ),
                                            'text' => '
            <span>Captura más leads de calidad</span> <br class="space">
            Elige la plantilla, edítala en minutos y publica <br class="DT_e">
            ¡sin depender de programadores!
            ',
                                            'img' => App::setFilePath(
                                                '/assets/images/gifs/image_landingp_home_selector.gif',
                                            ),
                                        ],

                                        [
                                            'title' => 'Email Marketing',
                                            'icon' => App::setFilePath(
                                                '/assets/images/illustrations/others/icon_emailmkt_small.png',
                                            ),
                                            'text' => '
                                                <span>Envia campañas profesionales</span> <br class="space">
                                                que nutran tus relaciones',
                                            'img' => App::setFilePath(
                                                '/assets/images/gifs/image_email_marketing_home_selector.gif',
                                            ),
                                        ],

                                        [
                                            'title' => 'Anuncios digitales ',
                                            'icon' => App::setFilePath(
                                                '/assets/images/illustrations/others/icon_ads_small.png',
                                            ),
                                            'text' => '
                                                    <span>Crea y administra campañas publicitarias</span> <br class="space">
                                                    pagas en Facebook a Instagram',
                                            'img' => App::setFilePath(
                                                '/assets/images/gifs/image_ads_home_selector.gif',
                                            ),
                                        ],
                                        [
                                            'title' => 'Reportes Personalizados',
                                            'icon' => App::setFilePath(
                                                '/assets/images/illustrations/others/icon_reports_headerband.png',
                                            ),
                                            'text' => '
                                                    <span>Toma decisiones estratégicas</span> con <br class="space">
                                                    reportes que creas en minutos. <br class="space">
                                                    ¡Escala tu empresa con datos clave!',
                                            'img' => App::setFilePath('/assets/images/gifs/gif_reports.gif'),
                                        ],
                                    ];
                                @endphp

                                <ul class="elements selectorInfo">

                                    @foreach ($elements as $item)
                                        <li class="element    @if ($loop->first) active @endif"
                                            info_index="{!! $loop->index !!}">
                                            <div class="icon">
                                                <div class="containerImage">
                                                    <img src="{!! $item['icon'] !!}" loading="lazy">
                                                </div>
                                            </div>
                                            <h3>
                                                {!! $item['title'] !!}
                                            </h3>
                                        </li>
                                    @endforeach

                                </ul>

                                <script type="text/javascript">
                                    var infoArray = <?php echo json_encode($elements); ?>;

                                    jQuery('ul.selectorInfo li').click(function(e) {

                                        jQuery('ul.selectorInfo li').removeClass('active');
                                        jQuery(this).addClass('active');

                                        var index = jQuery(this).attr('info_index');

                                        jQuery('.showInfoSelectors .infoIn .text').html(infoArray[index]['text']);
                                        jQuery('.showInfoSelectors .infoIn .image .containerImage img').attr('src', infoArray[index]['img']);


                                    });
                                </script>


                            </div>

                            <div class="col-md-12 col-lg-7 info showInfoSelectors">

                                <div class="infoIn">

                                    <p class="text">
                                        {!! $elements[0]['text'] !!}
                                    </p>

                                    <div class="image">

                                        <div class="containerImage">
                                            <img src="{!! $elements[0]['img'] !!}" loading="lazy">
                                        </div>

                                    </div>

                                    <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                        Recibir un tour
                                    </a>


                                </div>

                            </div>

                        </div>


                    </div>

                </section>

            </div>

        </section>


        <section class="customSection sectionParent landing_escala_competitors_brands_2024_6 "
            style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_competitors_2.svg') }}')">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">
                        <h2 class="title">
                            <span>¡Ningún otro</span> CRM te acompaña mejor!
                        </h2>
                        <p class="text">
                            Tú éxito es nuestro éxito. Al suscribirte a nuestro plan Pro<br class="DT_e">
                            obtienes los beneficios de:
                        </p>
                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="row">
                            @php
                                $elements = [
                                    [
                                        'title' => 'Gerente de Éxito <br class="space"> asignado',
                                        'text' => [
                                            'Principal punto de contacto',
                                            'Conoce tu negocio a mayor<br class="DT_e"> profundidad',
                                            'Te guía a definir planes de<br class="DT_e"> implementación con Escala',
                                            'Apoya analizando resultados',
                                            'Te acompaña todo el año',
                                        ],
                                        'img' => App::setFilePath(
                                            '/assets/images/illustrations/others/competitors_img_2.png',
                                        ),
                                    ],
                                    [
                                        'title' => 'Especialista de <br class="space"> Implementación',
                                        'text' => [
                                            'Se involucra después de<br class="DT_e"> haber definido plan',
                                            'Guía implementando la<br class="DT_e"> plataforma',
                                            'Asegura que uses las<br class="DT_e"> herramientas efectivamente',
                                            'Disponible los primeros<br class="DT_e"> meses con Escala',
                                        ],
                                        'img' => App::setFilePath(
                                            '/assets/images/illustrations/others/competitors_img_3.png',
                                        ),
                                    ],
                                    [
                                        'title' => 'Soporte Técnico <br class="space">
                                        en vivo por chat',
                                        'text' => [
                                            'Apoya en la configuración<br class="DT_e"> técnica de la plataforma',
                                            'Atiende preguntas y<br class="DT_e"> necesidades técnicas<br class="DT_e"> puntuales',
                                            'Conecta por chat de<br class="DT_e"> plataforma o WhatsApp',
                                            'Disponible mientras<br class="DT_e"> tengas suscripción activa',
                                        ],
                                        'img' => App::setFilePath(
                                            '/assets/images/illustrations/others/competitors_img_4.png',
                                        ),
                                    ],
                                    [
                                        'title' => 'Servicio de <br class="space"> Personalización',
                                        'text' => [
                                            'Personaliza el CRM a tus<br class="DT_e"> necesidades',
                                            'Crea plantillas de email y<br class="DT_e"> páginas según tu marca',
                                            'Crea la base para un flujo<br class="DT_e"> automatizado',
                                        ],
                                        'img' => App::setFilePath(
                                            '/assets/images/illustrations/others/competitors_img_5.png',
                                        ),
                                    ],
                                ];
                            @endphp

                            @foreach ($elements as $element)
                                <div class="col-md-12 col-lg-3 cardParent">
                                    <div class="card">
                                        <div class="card-body">
                                            <div style="background-image: url({!! App::setFilePath('/assets/images/overlays/overlay_card_1.svg') !!})"
                                                class="top-pill">
                                                {!! $element['title'] !!}
                                            </div>
                                            <img class="column-1" src="{!! $element['img'] !!}" loading="lazy">

                                            <ul>
                                                @foreach ($element['text'] as $text)
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/icons/orange_dot.png') !!}" loading="lazy">
                                                            <p>{!! $text !!}</p>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </section>



            </div>

        </section>

        <section
            class="component-info-text-video-T1 customSection sectionParent landing_escala_competitors_brands_2024_7 ">
            <div class="section-row">

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <div class="video col-md-12">

                            @php
                                $videoEmbed = App::setFilePath('/assets/videos/competidores_video.mp4');
                                $videoCover = App::setFilePath('/assets/images/illustrations/others/competitors_portrait_video.jpg');
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
                                            <a href="https://videojs.com/html5-video-support/"
                                                target="_blank">supports
                                                HTML5 video</a>
                                        </p>
                                    </video>

                                </div>
                            @endif

                        </div>

                    </div>

                </section>

                <section class="innerSectionElement sct3">

                    <div class="containElements">


                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Más información
                        </a>

                    </div>

                </section>

            </div>

        </section>


        <section class='w-full customSection sectionParent landing_escala_competitors_brands_2024_8'
            style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_competitors_3.svg') }}')">

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            <span>No solo nos escuches a nosotros,</span><br class="DT_e">
                            escucha a nuestros clientes:

                        </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                        @php
                            $reviews = [
                                App::setFilePath('/assets/images/illustrations/others/competitors_review_1.png'),
                                App::setFilePath('/assets/images/illustrations/others/competitors_review_2.png'),
                                App::setFilePath('/assets/images/illustrations/others/competitors_review_3.png'),
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


        <section class='w-full customSection sectionParent landing_escala_competitors_brands_2024_9'>

            <div class="section-row">

                    <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            <span>Empezar acon Escala,</span> es muy sencillo:
                        </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/otto/otto-26 2.png') !!}" loading="lazy">
                        </div>
                    </div>
                </section>
                <section class='innerSectionElement sct2 '>
                    <div class='containElements'>
                        <div class="containerImage">
                            <img class="D_e" src="{!! App::setFilePath('/assets/images/illustrations/others/competitors_img_6.png') !!}" loading="lazy">
                            <img class="MT_e" src="{!! App::setFilePath('/assets/images/illustrations/others/competitors_img_6_mob.png') !!}" loading="lazy">
                        </div>
                    </div>
                </section>

                      <section class="innerSectionElement sct3">

                    <div class="containElements">


                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Empezar ahora
                        </a>

                    </div>

                </section>

            </div>

        </section>

    </div>

</div>

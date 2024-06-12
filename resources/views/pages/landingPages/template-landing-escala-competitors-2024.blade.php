

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

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_escala_competitors_brands_2024 landing_escala_competitors_brands_2024_0 ">


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
                                            Escala:  El CRM todo-en-<br class="DT_e">uno que <span>acelera tus ventas</span>
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
                                <span>¿Qué necesita una pequeña o mediana empresa (PYME)</span> <br class="DT_e">
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
                                    <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Fáciles de usar</li>
                                    <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Costo-eficientes</li>
                                    <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Integradas</li>
                                    <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Diseñadas para su <br class="DT_e">
                                    etapa de crecimiento</li>
                                </ul>
                            </div>

                            <div class="elementCard ">
                                <h3>
                                    Desarrollar habilidades en:
                                </h3>
                                <ul>
                                    <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Marketing digital</li>
                                    <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Ventas</li>
                                    <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Gestión del cambio al <br class="DT_E">
                                    implementar nuevas <br class="DT_E">tecnologías</li>
                                </ul>
                            </div>

                            <div class="elementCard ">
                                <h3>
                                    Acompañamiento:
                                </h3>
                                <ul>
                                    <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Atención personalizada</li>
                                    <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Apoyo en la adopción</li>
                                    <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_orange.png') !!}" alt="" class="check"> Guía para acelerar <br class="DT_e"> resultados</li>
                                </ul>
                            </div>

                        </div>

                    </section>

                     <section class="innerSectionElement sct2">

                        <div class="containElements " >

                            <div class="containerimage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/competitors_img_1.png') !!}" alt="" loading="lazy">
                            </div>

                        </div>

                     </section>

                </div>

            </section>



            <section class="component-info-text-video-T1 customSection sectionParent landing_escala_competitors_brands_2024_2 "
style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_competitors_1.svg') }}')"
            >
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
                                    $videoEmbed = App::setFilePath('/assets/videos/caso_exito_rg.mp4');
                                    $videoCover = App::setFilePath('/assets/images/illustrations/others/rg_portrait_video.jpg');
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

{{--
                                        <a class=" secondaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                            Ver el demo
                                        </a> --}}

                                    </div>
                                @endif

                            </div>

                        </div>

                    </section>

                </div>

            </section>



                   <section class="customSection sectionParent landing_escala_competitors_brands_2024_5">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h3 class="sub-title">
                                Olvida el Excel y los CRMs complicados
                            </h3>
                            <h2 class="title">
                                Genera más leads y conviértelos <br class="space">
                                en clientes fieles con Escala
                            </h2>
                            <p class="text">
                                Encuentra todas las herramientas de marketing y ventas que <br class="DT_e">
                                necesitas para generar leads y convertirlos en clientes fieles
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
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_whatsapp_small.png'),
                                                'text' => '
            <span>Optimiza tu comunicación por WhatsApp</span> <br class="space">
            con envíos masivos, mensajes <br class="space">
            automatizados, y gestión por inbox
            ',
                                                'img' => App::setFilePath('/assets/images/gifs/image_whatsapp_home_selector.gif'),
                                            ],
                                            [
                                                'title' => 'Inteligencia Artifical',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_ia_small.png'),
                                                'text' => '
            <span>Crea contenido efectivo en segundos</span> <br class="space">
            La IA en Escala es como tener un copywriter <br class="DT_e">
            estrella a una fracción del costo',
                                                'img' => App::setFilePath('/assets/images/gifs/image_ia_home_selector.gif'),
                                            ],
                                            [
                                                'title' => 'Gestión de contactos y procesos',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_crm_small.png'),
                                                'text' => '
            <span>Convierte más leads en clientes fieles</span> <br class="space">
            organizando, guardando y supervisando <br class="DT_e">
            mejor todo lo que ocurre con tus contactos',
                                                'img' => App::setFilePath('/assets/images/gifs/image_crm_home_selector.gif'),
                                            ],
                                             [
                                                'title' => 'Automatizaciones',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_automatizations_small.png'),
                                                'text' => '
        Ahorra tiempo y dinero <br class="DT_e">
        programando tareas y flujos de acciones
     ',
                                                'img' => App::setFilePath('/assets/images/gifs/image_automatizations_home_selector.gif'),
                                            ],
                                            [
                                                'title' => 'Landing Pages',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_landingp_small.png'),
                                                'text' => '
            <span>Captura más leads de calidad</span> <br class="space">
            Elige la plantilla, edítala en minutos y publica <br class="DT_e">
            ¡sin depender de programadores!
            ',
                                                'img' => App::setFilePath('/assets/images/gifs/image_landingp_home_selector.gif'),
                                            ],

                                            [
                                                'title' => 'Email Marketing',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_emailmkt_small.png'),
                                                'text' => '
                                                <span>Envia campañas profesionales</span> <br class="space">
                                                que nutran tus relaciones',
                                                'img' => App::setFilePath('/assets/images/gifs/image_email_marketing_home_selector.gif'),
                                            ],

                                            [
                                                'title' => 'Anuncios digitales ',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_ads_small.png'),
                                                'text' => '
                                                    <span>Crea y administra campañas publicitarias</span> <br class="space">
                                                    pagas en Facebook a Instagram',
                                                'img' => App::setFilePath('/assets/images/gifs/image_ads_home_selector.gif'),
                                            ],
                                            [
                                                'title' => 'Reportes Personalizados',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_reports_headerband.png'),
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



            <section class="component-info-text-video-T1 customSection sectionParent landing_escala_competitors_brands_2024_7 "
            >
                <div class="section-row">

                    <section class="innerSectionElement sct2">

                        <div class="groupElements row">

                            <div class="video col-md-12">

                                @php
                                    $videoEmbed = App::setFilePath('/assets/videos/caso_exito_rg.mp4');
                                    $videoCover = App::setFilePath('/assets/images/illustrations/others/rg_portrait_video.jpg');
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

{{--
                                        <a class=" secondaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                            Ver el demo
                                        </a> --}}

                                    </div>
                                @endif

                            </div>

                        </div>

                    </section>

                </div>

            </section>






</div>

</div>





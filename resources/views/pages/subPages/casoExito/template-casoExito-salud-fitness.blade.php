<div id="casoExito_salud_fitness">
    <div class="sections">


        @php
            $parameters = [
                'backgroundImageType' => true,
                'overlay' => false,
                'classSection' => 'threeCol casoExito_salud_fitness_0 newHome',
                'title' =>'
                 <small ><span>Caso de éxito:</span> Salud y fitness</small>
                 <span style="color: #DEF3F5; font-weight: 700;" >
                  Aumentó 5X
                  </span>
                ',
                'text' => '<span class="whiteColor">
                su tasa de recuperación de <br class="space">
                carrito de compra abandonado
                </span>

                          <img class="logo-img" src="'.App::setFilePath('/assets/images/illustrations/others/rg_nutrition_logo.png').'">
                ',
                'threeCol' => true,
                'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
                'backgroundImage' => App::setFilePath('/assets/images/banners/background_space_5.png'),
                'overlayImage' => null,
                'image' => App::setFilePath('/assets/images/person/rg_2.png'),
                'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM',
            ];
        @endphp
        @header_t1($parameters)
        @endheader_t1

        <section class="customSection sectionParent casoExito_salud_fitness_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <div class="element">
                            <div class="numbers">
                                <span>
                                    41%
                                </span>
                            </div>
                            <p class="text">
                            De aumento en tasa de apertura de sus <br class="space">
                            campañas de Email Marketing
                            </p>
                        </div>

                    </div>

                </section>

            </div>

        </section>

        <section
        class="component-info-text-image-T1 customSection sectionParent casoExito_salud_fitness_2">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">

                                Sobre el <span style="color: #36768A;">negocio</span>

                            </h3>

                            <p class="text">
                                Empresa de nutrición y fitness liderada por Raúl González, <br class="desktopTabletElement">
                                reconocido por el Congreso de Estados Unidos como “uno de los <br class="desktopTabletElement">
                                hispanos más influyentes.” Se dedican a apoyar a personas en <br class="desktopTabletElement">
                                procesos de pérdida de peso y bienestar a través de distintos <br class="desktopTabletElement">
                                productos.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/icono industria.png') !!}" alt=""></div>
                                        <strong>Industria:</strong> Salud y bienestar
                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/icono locacion.png') !!}" alt=""></div>
                                        <strong>Locación:</strong> Estados Unidos
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/icon_globe.png') !!}" alt=""></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://www.sumaleatuvida.com/">www.sumaleatuvida.com</a>

                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>


                </section>



            </div>

        </section>


          <section class="component-info-text-video-T1 customSection sectionParent casoExito_salud_fitness_3 ">
                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle whiteColor">
                                Conoce cómo Raul González <br class="space">
                                <span>potencia sus resultados con Escala</span>
                            </h2>

                        </div>

                    </section>

                    <section class="innerSectionElement sct2">

                        <div class="groupElements row">

                            <img src="{!! App::setFilePath('/assets/images/overlays/overlay_sky_1.png') !!}" alt="" class="overlaySky1">

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

            @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'casoExito_salud_fitness_4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/person/rg_1.png'),
                'title' => null,
                'text' => '
                    Raul González, presentador y actor venezolano, fundó RG Life & <br class="desktopTabletElement">
                    Nutrition motivado por su transformación física y su pasión por <br class="desktopTabletElement">
                    compartir sus conocimientos sobre llevar una vida saludable.
                    <br class="space"><br class="space">
                    Conocido por su trabajo en canales como Televen, RCTV, <br class="desktopTabletElement">
                    Nickelodeon, Univisión y Telemundo, González utilizó su historia <br class="desktopTabletElement">
                    personal para crear la Fórmula RG y con Escala CRM potencia los <br class="desktopTabletElement">
                    resultados de su empresa.
                    <br class="space"><br class="space">
                    <span class="redLink">
                        <img src="'. App::setFilePath('/assets/images/icons/icon_ig.svg') .'" alt="">
                        <a class="hiperButtonGray" target="_blank" href="https://www.instagram.com/raultvgonzalez/">@raultvgonzalez</a>
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

        <section
        class="component-info-text-image-T1 customSection sectionParent casoExito_salud_fitness_5 ">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                            <h3 class="secondaryTitle">
                           Qué hicieron para <span class="greenBlueColor">lograrlo con Escala</span>
                            </h3>

                    </div>

                </section>

                <section class="innerSectionElement sct2 left">


                    <div class="groupElements row">

                        <div class="image col-md-12 col-lg-4">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/rg_image_services.png') !!}" loading="lazy">
                            </div>
                        </div>
                        <div class="info col-md-12 col-lg-8">

                            {{-- <h3 class="secondaryTitle">

                                Qué hicieron para <span class="greenBlueColor">lograrlo con Escala</span>

                            </h3> --}}

                            <ul class="text">

                                <li>
                                    <span class="number">
                                        1
                                    </span>
                    <span class="greenBlueColor">Gestionaron su base de datos</span> utilizando el CRM de Escala, creando <br class="desktopTabletElement">
                    segmentos que facilite la comunicación con sus contactos.
                                </li>

                                <li>
                                    <span class="number">
                                        2
                                    </span>
                    <span class="greenBlueColor">Promovieron sus productos y aumentaron las visitas a su página</span> enviando <br class="desktopTabletElement"> campañas de email marketing a cada segmento de su base de datos.
                                </li>

                                <li>
                                    <span class="number">
                                        3
                                    </span>
                <span class="greenBlueColor">Automatizaron el envío de secuencias de emails</span> a contactos que incluían sus <br class="desktopTabletElement">
                productos en el carrito de compra pero no terminaban comprando (incluida la <br class="desktopTabletElement">
                integración de Shopify con Escala a través de Zapier).
                                </li>

                                <li>
                                    <span class="number">
                                        4
                                    </span>
                <span class="greenBlueColor">Optimizaron progresivamente los resultados de sus emails</span> <br class="desktopTabletElement"> utilizando las métricas en tiempo real de Escala.
                                </li>

                                <li>
                                    <span class="number">
                                        5
                                    </span>
                <span class="greenBlueColor">Promovieron su marca y eventos con Raúl González</span> con landing pages, el <br class="desktopTabletElement">
                CRM, emails y automatizaciones de Escala.
                                </li>

                            </ul>

                        </div>

                    </div>

                </section>

            </div>

                    <img src="{!! App::setFilePath('/assets/images/banners/background_overlay_sky_3.svg') !!}" alt="" class="overlaysky">

        </section>


        <section class="component-info-text-image-T1 customSection sectionParent casoExito_salud_fitness_6">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="details col-md-12 col-lg-6">

                            <div class="containElements">


                            <h3 class="secondaryTitle">
                                Herramientas <span class="greenBlueColor">utilizadas</span>
                            </h3>


                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_laptop_whatsapp.png') !!}" alt=""></div>
                                        CRM
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_email_arrow.png') !!}" alt=""></div>
                                        Email Marketing
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_mechanic.png') !!}" alt=""></div>
                                        Automatización
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_checklist_go.png') !!}" alt=""></div>
                                        Landing pages
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_dashboard.png') !!}" alt=""></div>
                                        Dashboards
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="image col-md-12 col-lg-6">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/person/rg_3.png') !!}" loading="lazy">
                            </div>
                        </div>



                    </div>


                </section>



            </div>

        </section>


         <section class="customSection sectionParent casoExito_salud_fitness_7">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                         <p class="text">
                            <img class="comiTagLeft" src="{!! App::setFilePath('/assets/images/illustrations/others/open_comi.png') !!}" loading="lazy">
                            Gracias a la herramienta y al excelente acompañamiento del equipo de Escala, hemos visto un impacto <br class="desktopTabletElement">
                            importante en el negocio. En menos de 3 meses, realizamos más de 20 campañas con una tasa de apertura <br class="desktopTabletElement">
                            promedio de 41% y algunas de hasta 63%. Hemos visto un crecimiento acelerado gracias a las automatizaciones, <br class="desktopTabletElement">
                            lo que nos permitió pasar de 1 o 2% de tasa de recuperación a 10% en carritos abandonados.
                            <img class="comiTagRight" src="{!! App::setFilePath('/assets/images/illustrations/others/close_comi.png') !!}" loading="lazy">
                         </p>
                        <p class="byTag">
                            <span class="greenBlueColor">Biaggio Correale, Director Operativo </span>
                            RG Nutrition
                        </p>

                    </div>

                </section>

            </div>

        </section>


              <section

              class="customSection sectionParent casoExito_salud_fitness_8">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                            <h3 class="secondaryTitle">
                                Empieza a acelerar <span style="color: #A4E7EA!important">el crecimiento de tu negocio</span>
                            </h3>

                            <div class="buttonSection">
                                <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibe un demo
                                </a>

                                {{-- <a href="https://escala.com/caso-de-uso-consultoria" class="whiteHiper" target="_blank">
                                    Ver otro caso de uso
                                </a> --}}
                            </div>

                    </div>

                </section>

            </div>


                    <img src="{!! App::setFilePath('/assets/images/banners/background_space_6.png') !!}" alt="" class="overlaysky">

        </section>


    </div>

</div>

<div id="landingPage_TB_2023">
    <div class="sections">
        @header_t1([
            'backgroundImageType' => true,
            'overlay' => false,
            'classSection' => ' threeCol templateBase_0 templateBase',
            'title' => '
                        Consigue más <br class="space"> leads de calidad  <br class="space">
                            <span style="color: #DEF3F5">para tu equipo comercial</span>
                        ',
            'text' => '<span class="whiteColor">
                                                con Landing pages vendedoras que construyes <br class="space">
                                                fácilmente en Escala para promover tu oferta y <br class="space">
                                                capturar el contacto de clientes potenciales
                          </span>
                          ',
            'threeCol' => true,
            'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
            'backgroundImage' => App::setFilePath('/assets/images/overlays/bg-hero-01.png'),
            'overlayImage' => null,
            'image' => App::setFilePath('/assets/images/illustrations/others/01-img-template-base-2023.png'),
            'img_alt' => 'Ilustración Andrés Moreno, CEO de Escala, embudos de venta'
        ])
        @endheader_t1



        <section class="component-info-text-video-T1 customSection sectionParent templateBase_1"
              style="background-image: url('{!! App::setFilePath('/assets/images/banners/background_sky_2.png.png') !!}')"
        >
            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            Genera más y mejores leads <br class="space">
                            <span>con Landing pages de Escala</span>
                        </h2>

                    </div>

                </section>

                <section

                class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <div class="video col-md-12 col-lg-7">

                            @php
                                $videoEmbed = App::setFilePath('/assets/videos/landing_page_video.mp4');
                                $videoCover = App::setFilePath('/assets/images/illustrations/others/landing_page_video_portrait.png');
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

                        <div class="info col-md-12 col-lg-5">


                            @php
                                $elements = [
                                   
                                    [
                                        'logo' => App::setFilePath('/assets/images/illustrations/others/capterra_tag.png'),
                                        'text' => 'Escala / plataforma CRM',
                                        'points' => '4.8 / 5',
                                    ],
                                ];
                            @endphp

                            <div class="elements">

                                @foreach ($elements as $item)
                                    <div class="refersElement">
                                        <div class="logo">
                                            <div class="containerImage">
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/iso_escala.png') !!}" loading="lazy">
                                            </div>
                                        </div>

                                        <div class="infoInner">
                                            <div class="tag">
                                                <div class="containerImage">
                                                    <img src="{!! $item['logo'] !!}" loading="lazy">
                                                </div>
                                            </div>
                                            <p class="text">
                                                {!! $item['text'] !!}
                                            </p>
                                            <div class="stars">
                                                <div class="containerImage">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                                                </div>
                                            </div>
                                            <span class="points">
                                                {!! $item['points'] !!}
                                            </span>
                                        </div>

                                    </div>
                                @endforeach

                            </div>

                        </div>


                    </div>

                </section>

            </div>

        </section>
        <section class="sectionParent customSection templateBase_2">
            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            Construye páginas profesionales <br class="space">
                            <span>que cautivan a tu audiencia ideal</span>
                        </h2>

                    </div>
                </section>
                <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="col-md-12 col-lg-6">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/landing_page23_crea-landing-pages.gif') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 sectionTexts">
                                <h3 class="secondaryTitle">
                                    Crea
                                </h3>
                                <p class="text">
                                    Tu landing page accediendo a más de 100 plantillas y personalízalas con el editor intuitivo de Escala.
                                </p>
                            </div>
                        </div>
                        <div class="groupElements row">
                            <div class="order-last order-md-last order-lg-first col-md-12 col-lg-6 sectionTexts textRight">
                                <h3 class="secondaryTitle">
                                    Publica
                                </h3>
                                <p class="text">
                                    La landing page responsive en minutos sin necesitar un programador ni dominio propio.
                                </p>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/landing_page23_Publica_landing_page.gif') !!}" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <div class="groupElements row">
                            <div class="col-md-12 col-lg-6">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/landing_page23_convierte_landing_page.gif') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 sectionTexts">
                                <h3 class="secondaryTitle">
                                    Convierte
                                </h3>
                                <p class="text">
                                    Visitantes en leads interesados en tus productos o servicios que comparten su contacto para iniciar una relación comercial.
                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="innerSectionElement sct3">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Ver todas las herramientas
                        </a>
                    </section>
            </div>
        </section>

        <section
        class="component-info-multiple-cards-T2 customSection sectionParent templateBase_3">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">

                            Toma el control sobre la construcción de tus páginas <br class="space">
                            <span>con herramientas fáciles de utilizar</span>

                        </h2>

                    </div>

                </section>
                @php
                    $items = [
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/02-img-template-base-2023.png'),
                            'title' => '
            <span>Arrastra y suelta </span> <br class="space">
            textos, imágenes y estructuras
        ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/03-img-template-base-2023.png'),
                            'title' => '
            <span>Inserción de </span> <br class="space">
            Contador, Videos, Descargables y más
        ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/04-img-template-base-2023.png'),
                            'title' => '
          <span>
            Botón de WhatsApp</span> <br class="space">
            para capturar los datos de <br class="space">
            tus leads en el CRM
        ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/05-img-template-base-2023.png'),
                            'title' => '
            <span>Formularios conectados</span> <br class="space">
            nativamente al CRM para <br class="space">
            guardar información <br class="space">
            registrada
        ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/06-img-template-base-2023.png'),
                            'title' => '
            <span>
                Subdominio gratuito <br class="space">
            </span>
            y conexión de <br class="space">
            dominio propio
        ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/07-img-template-base-2023.png'),
                            'title' => '
            <span>Integración del Píxel</span><br class="space">
            de Facebook y Google<br class="space">
            Analytics
        ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/08-img-template-base-2023.png'),
                            'title' => '
            <span>
                Editor responsive
            </span> <br class="space">
            para vistas en <br class="space">
            desktop, tablet y móvil
        ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                        [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/09-img-template-base-2023.png'),
                            'title' => '
            <span>Configuración de SEO  </span> <br class="space">
            para optimizar tu <br class="space">
            imagen al compartir
        ',
                            'text' => null,
                            'enableButton' => false,
                        ],
                    [
                            'img_alt' => null,
                            'img' => App::setFilePath('/assets/images/illustrations/others/10-img-template-base-2023.png'),
                            'title' => '
            <span>Métricas</span> de tus páginas <br class="space">
            en tiempo real
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
                                    <img src="{!! $item['img'] !!}" loading="lazy" alt="{!! $item['img_alt'] !!}">
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

            <img src="{!! App::setFilePath('/assets/images/overlays/03-overlay-template-base-2023.png') !!}" alt="" class="overlaysky">

        </section>

    </div>
</div>

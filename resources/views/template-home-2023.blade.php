{{--
  Template Name: [B] Home - 2023
--}}


@extends('layouts.app')
@section('content')

    <div id="homeSection_2023">
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
                class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol home_2023_0 newHome ">

                <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/background_home_1.svg') }}')"
                    class="backgroundFull">

                    <div class="section-row">

                        <section class="innerSectionElement sct0">

                            <div class="containElements">

                                <h1 class="principalBigTitle ">
                                    <span>Acelera el crecimiento</span> de tu empresa
                                </h1>

                            </div>

                        </section>

                        <section class="innerSectionElement sct1">

                            <div class="groupElements row">


                                <div class="info col-md-12 col-lg-9 ">


                                    <div class="containElements row threeCol">

                                        <div class="ele reviews col-md-12 col-lg-3 desktopElement">

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
                                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_blue.svg') !!}" loading="lazy">
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>


                                        </div>

                                        <div class="ele video col-md-12 col-lg-9">

                                            @php
                                                $videoEmbed = App::setFilePath('/assets/videos/Comercial_escala_registro_lead_1.mp4');
                                                $videoCover = App::setFilePath('/assets/images/gifs/home_video_portrait_2023.gif');
                                            @endphp

                                            @if (isset($videoEmbed) && $videoEmbed != null)
                                                <div class="youtubeImageContainer ">

                                                    <video class="video-js" controls preload="none"
                                                        poster="{{ $videoCover }}" {{-- poster="MY_VIDEO_POSTER.jpg" --}}
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
                                            @endif

                                        </div>

                                    </div>


                                </div>

                                <div class="form7 col-md-12 col-lg-3 ">

                                    <div class="containElements">

                                        <div class="formatForm redirectWeb" redirectWeb="true">

                                            <h5 class="titleFormat blackcolor">
                                                Recibe un tour guiado <br class="space">
                                                de Escala
                                            </h5>



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

                            </div>

                        </section>

                        <section class="innerSectionElement sct2">

                            <div class="containElements">

                                @php
                                    $elements = [
                                        [
                                            'text' => '
                                            CRM todo-en-uno fácil de usar y <br class="desktopElement">
                                            ajustado a tus necesidades en 10 días
                                            ',
                                        ],
                                        [
                                            'text' => 'Acompañamiento y entrenamiento <br class="desktopElement"> para escalar empresas',
                                        ],
                                        [
                                            'text' => 'Generas leads, nutres y <br class="desktopElement"> conviertes más y mejor',
                                        ],
                                    ];
                                @endphp

                                <div class="ele reviews col-md-12 mobileElement">

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
                                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_blue.svg') !!}" loading="lazy">
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>


                                        </div>

                                <div class="elementsCheck">

                                    @foreach ($elements as $item)
                                        <div class="element">

                                            <div class="info">

                                                <div class="icon">

                                                    <div class="containerImage">
                                                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon_check_orange.png') }}"
                                                            loading="lazy">
                                                    </div>
                                                </div>

                                                <p class="text">
                                                    {!! $item['text'] !!}
                                                </p>
                                            </div>

                                        </div>
                                    @endforeach

                                </div>


                            </div>

                        </section>


                    </div>

                </div>

            </section>

            <section class="customSection sectionParent home_2023_1">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <div class="element">
                                <p class="text">
                                    <span class="title-blue">Líderes de negocio han</span> <br class="space">
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

                </div>

            </section>

            <section class="customSection sectionParent home_2023_2">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h3 class="sub-title">
                                Olvida el Excel y los CRMs complicados
                            </h3>
                            <h2 class="title">
                                Consigue más y mejores <br class="space"> clientes con el CRM de Escala
                            </h2>
                            <p class="text">
                                Es muy fácil de usar y brinda todas las herramientas <br class="desktopTabletElement">
                                de marketing y ventas que necesitas para escalar.
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
                                                'title' => 'Inteligencia Artifical',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_ia_small.png'),
                                                'text' => '
            <span>Crea contenido efectivo en segundos</span> <br class="space">
            La IA en Escala es como tener un copywriter <br class="desktopTabletElement">
            estrella a una fracción del costo',


                                                'img' => App::setFilePath('/assets/images/gifs/image_ia_home_selector.gif'),
                                            ],
                                            [
                                                'title' => 'Landing Pages',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_landingp_small.png'),
                                                'text' => '
            <span>Captura más leads de calidad</span> <br class="space">
            Elige la plantilla, edítala en minutos y publica <br class="desktopTabletElement">
            ¡sin depender de programadores!
            ',
                                                'img' => App::setFilePath('/assets/images/gifs/image_landingp_home_selector.gif'),
                                            ],
                                            [
                                                'title' => 'Gestión de contactos y procesos',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_crm_small.png'),
                                                'text' => '
            <span>Convierte más leads en clientes fieles</span> <br class="space">
            organizando, guardando y supervisando <br class="desktopTabletElement">
            mejor todo lo que ocurre con tus contactos',
                                                'img' => App::setFilePath('/assets/images/gifs/image_crm_home_selector.gif'),
                                            ],
                                            [
                                                'title' => 'Email Marketing',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_emailmkt_small.png'),
                                                'text' => '
            <span>Envia campañas profesionales</span> <br class="space">
            que nutran tus relaciones
            ',
                                                'img' => App::setFilePath('/assets/images/gifs/image_email_marketing_home_selector.gif'),
                                            ],
                                            [
                                                'title' => 'WhatsApp',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_whatsapp_small.png'),
                                                'text' => '
            <span>Mejora tu comunicación</span> <br class="space">
            automatizando el envío de mensajes a <br class="desktopTabletElement">
            múltiples contactos al mismo tiempo',
                                                'img' => App::setFilePath('/assets/images/gifs/image_whatsapp_home_selector.gif'),
                                            ],
                                            [
                                                'title' => 'Anuncios digitales integrados ',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_ads_small.png'),
                                                'text' => '
            <span>Crea y administra campañas publicitarias</span> <br class="space">
            pagas en Facebook a Instagram
            ',
                                                'img' => App::setFilePath('/assets/images/gifs/image_ads_home_selector.gif'),
                                            ],
                                            [
                                                'title' => 'Flujos de automatización',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_automatizations_small.png'),
                                                'text' => '
        Ahorra tiempo y dinero <br class="desktopTabletElement">
        programando tareas y flujos de acciones
     ',
                                                'img' => App::setFilePath('/assets/images/gifs/image_automatizations_home_selector.gif'),
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
                                            Recibir un demo
                                        </a>


                                    </div>

                                </div>

                            </div>


                        </div>

                    </section>

                </div>

            </section>

            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/02-bg-home2023.png') !!})"
                class="customSection sectionParent home_2023_3">

                <div class="section-row">

                    <section class="innerSectionElement sct0">

                        <div class="containElements">
                            <p class="text">
                                Las herramientas son potentes individualmente, <br class="space">
                                pero realmente escalas cuando las usas en conjunto.
                            </p>
                        </div>

                    </section>

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="title">
                                No necesitas invertir en 10+ herramientas <br class="desktopTabletElement">
                                ni en un equipo grande <span>para escalar tu negocio</span>
                            </h2>
                            <p class="text">
                                Los clientes de Escala triplican su productividad <br class="desktopTabletElement">
                                sin agregar costos operativos a su empresa
                            </p>
                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Conversa con un asesor Escala
                            </a>

                        </div>

                    </section>

                </div>

            </section>

            <section class="customSection sectionParent home_2023_4">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h3 class="sub-title">
                                Ya no requieres meses para adaptar el CRM a tus operaciones
                            </h3>
                            <h2 class="title">
                                Recibe el CRM ajustado a tus necesidades <br class="desktopTabletElement">
                                ¡en menos de 10 días!
                            </h2>
                            <p class="text">
                                 Adaptamos la plataforma a tu negocio para que tú y tu equipo empiecen a enfocarse lo más pronto <br class="desktopTabletElement">
                                 posible en lo que verdaderamente importa: ¡generar leads y cerrar ventas!
                            </p>
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/01-home2023.png') !!}" loading="lazy">
                        </div>

                    </section>
                    <section class="innerSectionElement sct2">

                        <div class="containElements">

                            <div class="row">
                                <div class="col-md-12 col-lg-4 cardParent column-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="orange-pill">Día 1</span>
                                            <h5 class="card-number">1</h5>
                                            <h5 class="card-title">
                                                Conocemos <br class="space"> tu
                                                negocio
                                            </h5>
                                            <h5 class="card-subtitle">
                                                Evaluamos factores como:
                                            </h5>
                                            <ul>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Industria</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Necesidades</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Proceso comercial</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Equipo</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/02-home2023.png') !!}" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4 cardParent column-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="orange-pill">Día 2-9</span>
                                            <h5 class="card-number">2</h5>
                                            <h5 class="card-title">
                                                Preparamos <br class="space">
                                                el CRM
                                            </h5>
                                            <div class="list-block">
                                                <h5 class="card-subtitle">
                                                    Creamos Plantillas de:
                                                </h5>
                                                <ul>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Landing</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Email</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>WhatsApps</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Conectamos:</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Embudos</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-block">
                                                <h5 class="card-subtitle">
                                                    Creamos Plantillas de:
                                                </h5>
                                                <ul>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Cuentas</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Dominios</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-block">
                                                <h5 class="card-subtitle">
                                                    Importamos:
                                                </h5>
                                                <ul>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Contactos</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Productos</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Oportunidades</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4 cardParent column-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="orange-pill">Día 10</span>
                                            <h5 class="card-number">3</h5>
                                            <h5 class="card-title">
                                                Empiezas a <br class="space">
                                                vender más
                                            </h5>
                                            <h5 class="card-subtitle">
                                                Recibe la plataforma de <br class="space">
                                                Escala lista para:
                                            </h5>
                                            <ul>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Ajustar textos</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Entrenar al equipo y</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Comenzar a producir <br class="space">
                                                            resultados</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <img class="column-3" src="{!! App::setFilePath('/assets/images/illustrations/others/03-home2023.png') !!}" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </section>

            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/03-bg-home2023.png') !!})"
                class="customSection sectionParent home_2023_5">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h3 class="sub-title">
                                De nada sirve tener un CRM configurado... ¡si nadie lo quiere o sabe usar!
                            </h3>
                            <h2 class="title">
                                Entrenamos a tu equipo y te acompañamos a <br class="desktopTabletElement">
                                acelerar resultados ¡todo el año!
                            </h2>
                            <p class="text">
                                ¡Tu éxito es nuestro éxito! Te apoyamos de todas las maneras posibles para que <br class="desktopTabletElement"> construyas una máquina de marketing y ventas con Escala
                            </p>
                        </div>

                    </section>
                    <section class="innerSectionElement sct2">

                        <div class="containElements">

                            <div class="row card-content">
                                <div class="col-md-12 col-lg-6 card1">

                                    <div
                                    class="card">
                                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline.png') }}" alt="" class="backgroundCard desktopElement">
                                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard mobileElement">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h5 class="card-title">
                                                        Gerente de Éxito
                                                    </h5>
                                                    <p class="card-text">
                                                        Te apoya a planificar y <br class="desktopElement">
                                                        aprovechar al máximo <br class="desktopElement">
                                                        las soluciones de Escala
                                                    </p>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="img-container img1">
                                                        <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/04-home2023.png') !!}"
                                                            loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 card2">
                                    <div
                                    class="card">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline.png') }}" alt="" class="backgroundCard desktopElement">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard mobileElement">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h5 class="card-title">
                                                        Entrenamiento <br class="space">
                                                        en vivo
                                                    </h5>
                                                    <p class="card-text">
                                                        Bootcamps y workshops <br class="desktopElement">
                                                        en vivo para aprender y <br class="desktopElement">
                                                        practicar nuestra <br class="desktopElement">
                                                        metodología probada
                                                    </p>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="img-container img2">
                                                        <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/05-home2023.png') !!}"
                                                            loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 card3">
                                    <div
                                    class="card">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline.png') }}" alt="" class="backgroundCard desktopElement">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard mobileElement">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h5 class="card-title">
                                                        Trainer privado
                                                    </h5>
                                                    <p class="card-text">
                                                        Revisa el uso de las <br class="desktopElement">
                                                        herramientas y se <br class="desktopElement">
                                                        asegura que las <br class="desktopElement">
                                                        usen efectivamente <br class="desktopElement">
                                                    </p>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="img-container img3">
                                                        <img class="img-card " src="{!! App::setFilePath('/assets/images/illustrations/others/06-home2023.png') !!}"
                                                            loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 card4">
                                    <div
                                    class="card">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline.png') }}" alt="" class="backgroundCard desktopElement">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard mobileElement">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h5 class="card-title">
                                                        Aprendizaje <br class="space">
                                                        autoguiado
                                                    </h5>
                                                    <p class="card-text">
                                                        Combinación de cursos, <br class="desktopElement">
                                                        tutoriales y webinars <br class="desktopElement">
                                                        para que aprendas a <br class="desktopElement">
                                                        tu ritmo.
                                                    </p>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="img-container img4">
                                                        <img class="img-card " src="{!! App::setFilePath('/assets/images/illustrations/others/07-home2023.png') !!}"
                                                            loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 card5">

                                    <div
                                    class="card">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_rectangleLine.png') }}" alt="" class="backgroundCard desktopElement">
                                           <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard mobileElement">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-5">
                                                    <h5 class="card-title">
                                                        Chat Soporte Técnico
                                                    </h5>
                                                    <p class="card-text">
                                                        Atendemos preguntas puntuales y <br class="desktopElement">
                                                        necesidades técnicas en vivo por <br class="desktopElement">
                                                        <span class="text-green">WhatsApp</span> y <span
                                                            class="text-blue">Chat de plataforma</span>
                                                    </p>
                                                </div>

                                                <div class="col-md-12 col-lg-7">
                                                    <div class="row desktopElement_flex">
                                                        <div class="col-md-12 col-lg-3 container-flags">
                                                            <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/08-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>
                                                        <div class="col-md-12 col-lg-3 container-flags">
                                                            <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/09-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>
                                                        <div class="col-md-12 col-lg-3 container-flags">
                                                            <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/10-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>
                                                        <div class="col-md-12 col-lg-3 container-flags">
                                                            <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/11-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>
                                                    </div>
                                                    <div class="row timeFlags">
                                                        <div class="col-md-12 title-block">
                                                            <div class="line"></div>
                                                            <p class="text-day">De Lunes a Viernes:</p>
                                                            <div class="line"></div>
                                                        </div>
                                                        <div class="col-6 col-lg-3">

                                                           <div class=" container-flags mobileElement">
                                                            <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/08-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>

                                                            <p class="text-time">6 am - 8 pm</p>
                                                        </div>
                                                        <div class="col-6 col-lg-3">
                                                         <div class=" container-flags mobileElement">
                                                              <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/09-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>
                                                            <p class="text-time">7 am - 9 pm</p>
                                                        </div>
                                                        <div class="col-6 col-lg-3">
                                                         <div class=" container-flags mobileElement">
                                                          <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/10-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>
                                                            <p class="text-time">8 am - 10 pm</p>
                                                        </div>
                                                        <div class="col-6 col-lg-3">
                                                         <div class=" container-flags mobileElement">
                                                           <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/11-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>
                                                            <p class="text-time">9 am - 11 pm</p>
                                                        </div>
                                                    </div>
                                                    <div class="row timeFlags">
                                                        <div class="col-md-12 title-block">
                                                            <div class="line last-row"></div>
                                                            <p class="text-day">Sábado:</p>
                                                            <div class="line last-row"></div>
                                                        </div>
                                                        <div class="col-6 col-lg-3">
                                                           <div class=" container-flags mobileElement">
                                                            <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/08-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>

                                                            <p class="text-time">8 am - 12 pm</p>
                                                        </div>
                                                        <div class="col-6 col-lg-3">
                                                              <div class=" container-flags mobileElement">
                                                              <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/09-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>
                                                            <p class="text-time">9 am - 1 pm</p>
                                                        </div>
                                                        <div class="col-6 col-lg-3">
                                                          <div class=" container-flags mobileElement">
                                                          <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/10-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>
                                                            <p class="text-time">10 am - 2 pm</p>
                                                        </div>
                                                        <div class="col-6 col-lg-3">
                                                          <div class=" container-flags mobileElement">
                                                           <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/11-home2023.png') !!}"
                                                                loading="lazy">
                                                        </div>
                                                            <p class="text-time">11 am - 3 pm</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </section>

            <section class="customSection sectionParent home_2023_6">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h3 class="sub-title">
                                ¿Deseas empezar a conocer nuestra metodología probada?
                            </h3>
                            <h2 class="title">
                                Participa en una Masterclass gratuita <br class="desktopElement">
                                con Andrés Moreno
                            </h2>
                            <p class="text">
                                Fundador de Escala y Open English, <br class="desktopElement">
                                reconocido “Emprendedor de la década”
                            </p>
                        </div>

                    </section>
                    <section style="background-image: url({!! App::setFilePath('/assets/images/banners/04-bg-home2023.png') !!})" class="innerSectionElement sct2">

                        <div class="containElements">
                            <div class="row">
                                <div class="col-md-5 column-img">
                                    <div class="img-container">
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/12-home2023.png') !!}" loading="lazy">
                                    </div>
                                </div>
                                <div class="col-md-7 column-text">
                                    <p>
                                        “Recopilamos nuestra experiencia de <br class="desktopElement">
                                        10+ años construyendo negocios <br class="desktopElement">
                                        exitosos para compartirla contigo y <br class="desktopElement">
                                        evitarte la prueba y error.”
                                    </p>
                                    <a class=" primaryButton hoverInEffect" href="https://experiencia.escala.com/eventos-escala">
                                        Participar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </section>

            <section class="component-info-multiple-cards-T2 customSection sectionParent home_2023_7">


                <img src="{!! App::setFilePath('/assets/images/banners/05-bg-home2023.png') !!}" alt="" class="overlaysky">

                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle blackColor">

                                Todos ellos se benefician <br class="desktopElement">
                                de las soluciones Escala

                            </h2>

                        </div>

                    </section>
                    @php
                        $items = [
                            [
                                'title' => '
                                   <span>Co-fundador</span> de Empresa
                                ',
                                'text' => '
                                    <span>
                                        “Encontré en Escala una plataforma <br class="space">
                                         que me permite integrar Landing <br class="space">
                                          Pages, automatización, email y CRM <br class="space">
                                           en un solo lugar.
                                    </span> Tiene una gran <br class="space">
                                        posibilidad de convertirse en un <br class="space">
                                         referente en el mercado latino.”
                                ',
                                'name' => '
                                 Mauricio Córdova Lara
                                ',
                            ],
                            [
                                'title' => '
                                    <span>Dueño</span> de negocio
                                ',
                                'text' => '
                                    <span>“Escala está resolviendo con su <br class="space">
                                    sistema de atención el cliente y <br class="space">
                                    por supuesto el software, un <br class="space">
                                    problema que tuve por años...</span> Lo <br class="space">
                                    recomiendo infinitamente.”
                                ',
                                'name' => '
                                    Paulina Pizarro Santana
                                ',
                            ],
                            [
                                'title' => '
                                    <span>Gerente</span> de Operaciones
                                ',
                                'text' => '
                                   <span>“Escala es una plataforma super  <br class="space">
                                   amigable en la que encuentro todo <br class="space">
                                   lo que necesito</span> para mis  <br class="space">
                                   campañas, personalización de  <br class="space">
                                   envíos, CRM, automatización y <br class="space">
                                embudos de ventas.”
                                ',
                                'name' => '
                                   Octavio Ruiz Loza
                                ',
                            ],
                            [
                                'title' => '
                                    <span>Lider</span> de Marketing
                                ',
                                'text' => '
                                    <span>“Con Escala he podido <br class="space">
                                    automatizar mejor los procesos <br class="space">
                                    de prospección.</span> Es una <br class="space">
                                    plataforma fácil de implementar <br class="space">
                                    y de manejo muy intuitivo.”
                                ',
                                'name' => '
                                   Andrea Sánchez
                                ',
                            ],
                            [
                                'title' => '
                                <span>Director</span> Creativo
                                ',
                                'text' => '
                               <span>
                                   “Se han tomado el tiempo para <br class="space">
                                   hacer una plataforma en donde no <br class="space">
                                   solamente brindan herramientas de <br class="space">
                                    calidad,
                               </span> sino lo más importante un <br class="space">
                                servicio al cliente que es <br class="space">
                                recomendadísimo.”
                                ',
                                'name' => '
                                  Hernan Bedoya
                                ',
                            ],
                            [
                                'title' => '
                                    <span>Gerente</span> de Ventas
                                ',
                                'text' => '
                             <span>
                                 “Escala es la plataforma ideal para <br class="space">
                                  impulsar tus ventas. Cuentan con un  <br class="space">
                                  equipo de soporte eficiente y atento.
                             </span> <br class="space">
                               Fui asesorada en todo momento y  <br class="space">
                               fueron muy serviciales para ayudarme <br class="space">
                                a lograr mis requerimientos.”
                                ',
                                'name' => '
                                Pierina Barajas
                                ',
                            ],
                        ];
                    @endphp
                    <section class=" innerSectionElement sct2">
                        @foreach ($items as $item)
                            <div class="groupElements">

                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white.png') !!}" alt="" class="backOverlay">

                                <h3 class="secondaryTitle">
                                    {!! $item['title'] !!}
                                </h3>

                                <p class="text">
                                    {!! $item['text'] !!}
                                </p>

                                <span class="name">
                                    {!! $item['name'] !!}
                                </span>

                                <div class="stars">
                                    <div class="containerImage">
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </section>



                </div>


            </section>

            <section class="component-info-text-image-T1 customSection sectionParent home_2023_8">


                <div class="section-row">


                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h3 class="sub-title">
                                ¿Qué esperas?
                            </h3>
                            <h2 class="title">
                                Construye una máquina de ventas <br class="desktopElement">
                                escalable, predecible y rentable
                            </h2>
                        </div>

                    </section>

                    <section class="innerSectionElement sct2 left">


                        <div class="groupElements row">

                            <div class="image col-md-12 col-lg-7">
                                <div class="containerImage">

                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/13-home2023.png') !!}" loading="lazy">

                                </div>
                            </div>
                            <div class="info col-md-12 col-lg-5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2 column-1">
                                            <p class="text-number">1</p>
                                        </div>
                                        <div class="col-10 column-2">
                                            <h3 class="secondaryTitle">
                                                Atrae
                                            </h3>
                                            <p class="text">
                                                A más prospectos ideales <br class="desktopTabletElement">
                                                con landing pages y ads
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2 column-1">
                                            <p class="text-number">2</p>
                                        </div>
                                        <div class="col-10 column-2">
                                            <h3 class="secondaryTitle">
                                                Nutre
                                            </h3>
                                            <p class="text">
                                                la relación con WhatsApps <br class="desktopTabletElement">
                                                emails y automatizaciones
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2 column-1">
                                            <p class="text-number">3</p>
                                        </div>
                                        <div class="col-10 column-2">
                                            <h3 class="secondaryTitle">
                                                Convierte
                                            </h3>
                                            <p class="text">
                                                más clientes fieles con todas <br class="desktopTabletElement">
                                                las herramientas del CRM
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="btn-cta col-md-12 col-lg-12">

                                <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    Recibe un demo personalilzado
                                </a>
                            </div>

                        </div>



                    </section>



                </div>

            </section>

            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/06-bg-home2023.png') !!})"
                class="customSection sectionParent home_2023_9">

                <div class="section-row">
                    <div class="col-md-8 column-1">
                        <section class="innerSectionElement sct1">

                            <div class="containElements">

                                <h3 class="sub-title">
                                    ¿Brindas servicios de marketing o ventas?
                                </h3>
                                <h2 class="title">
                                    Multiplica tu impacto y tus ingresos <br class="desktopTabletElement">
                                    convirtiéndote en Escala Partner
                                </h2>
                                <p class="text">
                                    Como socio de Escala recibes beneficios únicos <br class="desktopTabletElement">
                                    para hacer crecer tu negocio y desarrollar una <br class="desktopTabletElement">
                                    ventaja competitiva única en el mercado.
                                </p>
                                <a class=" outlineWhiteButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    Aprender más
                                </a>

                            </div>

                        </section>
                    </div>
                    <div class="col-md-4 column-2">
                        <section class="innerSectionElement sct2">

                            <div class="containElements">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/14-home2023.png') !!}" loading="lazy">
                            </div>

                        </section>
                    </div>

                </div>

            </section>

            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/07-bg-home2023.png') !!})"
                class="customSection sectionParent home_2023_10">

                <div class="section-row">
                    <div class="col-md-8 column-1">
                        <section class="innerSectionElement sct1">

                            <div class="containElements">

                                <h2 class="title">
                                    ¿Listo para subir a bordo? <br class="desktopTabletElement">
                                    la satisfacción es 100% garantizada

                                </h2>
                                <p class="text">
                                    Si en los primeros 20 días no estás satisfecho <br class="desktopTabletElement">
                                    con el valor que recibes, te devolvemos el dinero.
                                </p>
                                <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    Solicita un demo
                                </a>

                            </div>

                        </section>
                    </div>
                    <div class="col-md-4 column-2">
                        <section class="innerSectionElement sct2">

                            <div class="containElements">

                            </div>

                        </section>
                    </div>

                </div>

            </section>

                @php
        $escalaUrl = 'https://escala.com';
        $items = [
            [
                'type' => 'master',
                'title' => '¿Qué es Escala?',
                'text' => 'Escala es la plataforma todo en uno de marketing digital y ventas que te ayudará a acelerar el éxito de tu negocio, con todas las <br class="desktopElement"> herramientas en un solo lugar para crecer de una manera constante. Conoce todos los beneficios de Escala:<br class="space"><br class="space">
                    <ul style="list-style: disc; padding-left: 20px">
                        <li><p>Crea landing pages increíbles sin programar, para darte a conocer y capturar la información de tus visitantes.</p></li>
                        <li><p>Crea, administra y publica anuncios digitales de Instagram y Facebook, sin salir de Escala, para generar tráfico a tus páginas.</p></li>
                        <li><p>Gestiona tu base de datos y haz más productivo el trabajo de tu equipo de ventas con el CRM más fácil de usar.</p></li>
                        <li><p>Mantén la comunicación constante con tus leads y clientes enviando emails masivos sin caer en la bandeja de spam.</p></li>
                        <li><p>Automatiza tareas repetitivas: workflows y campañas de emails para hacer crecer tu negocio en piloto automático.</p></li>
                        <li><p>Mide y optimiza tus campañas digitales con las analíticas en tiempo real.</p></li></ul>',
            ],
            [
                'type' => 'master',
                'title' => '¿Necesito habilidades para manejar la plataforma?',
                'text' => 'No. nuestra herramienta es muy intuitiva y fácil de usar. Para que estés más tranquilo, hemos preparado una serie de tutoriales muy <br class="desktopElement"> prácticos, que te ayudarán a despejar cualquier duda que tengas mientras vives la experiencia. También puedes contar con nuestro <br class="desktopElement"> acompañamiento, a través de asesorías, que te serán de gran ayuda en los primeros momentos de uso de la plataforma. <a class="hiperButtonGreenBlueT2"href="' . $escalaUrl . '/zoom-meeting">Atención al cliente.</a>',
            ],
            [
                'type' => 'master',
                'title' => '¿Qué incluye?',
                'text' => 'Cuando adquieres cualquiera de los planes de Escala cuentas con: Todas las funcionalidades de marketing digital y ventas, servicio <br class="desktopElement"> ilimitado y entrenamiento para usar la plataforma.',
            ],
            [
                'type' => 'master',
                'title' => 'Funcionalidades',
                'items' => [
                    [
                        'title' => '¿Los embudos de venta aplican para todos los negocios?',
                        'text' => 'Así es. Todos los negocios tienen un embudo de ventas, conscientemente o no, dado que buscan atraer leads y convertirlos en <br class="desktopElement"> clientes. No olvides que un embudo de ventas es una metodología, paso a paso, que puede combinar marketing digital y offline. <br class="desktopElement"> En Escala tienes todas las funcionalidades para implementarlo de manera fácil, invirtiendo menos recursos, tiempo y dinero.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Qué ventajas tiene el CRM de Escala?',
                        'text' => 'Esta pregunta es fundamental. Es importante que sepas que el CRM de Escala no solo cuenta con todas opciones para gestionar tus <br class="desktopElement"> contactos: información relacionada con el nombre, email y teléfono, y de gestión de tu equipo comercial como: actividades, tareas, <br class="desktopElement"> llamadas y recordatorios hasta cerrar la venta, sino que también es el CRM más fácil de usar de todos. Pruébalo y descúbrelo por ti <br class="desktopElement"> mismo. ',
                        'type' => 'item',
                    ],
                    [
                        'title' => 'El Page builder de Escala ¿cómo funciona?',
                        'text' => 'El Page builder de Escala es el más fácil de usar del mercado. Práctico para realizar tus landing pages optimizadas. Tenemos cientos <br class="desktopElement"> de hermosas plantillas listas para que las personalices y en un clic las puedas publicar. Con formularios capaces de captar toda la <br class="desktopElement"> data y guardarla automáticamente en tu base de datos. <br class="space"><br class="space"> Fáciles de armar en minutos, 100% responsive y con un subdominio en caso que no tengas dominio propio. Además ya tienen <br class="desktopElement"> integrado el botón de WhatsApp para que tus visitantes conversen directamente con tu equipo de ventas.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿En Escala se puede usar un dominio distinto para cada landing page?',
                        'text' => 'Sí, en Escala puedes tener varios dominios para tus landing pages. Solo debes configurarlos y usarlos cuando lo necesites en cada <br class="desktopElement"> una de tus páginas.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Puedo agregar el botón de WhatsApp en las landing pages de Escala?',
                        'text' => 'Las landing pages de Escala ya tienen disponible el botón de WhatsApp para que tu cliente pueda tener una conversación más fluida <br class="desktopElement"> con tu empresa. Se puede encontrar en la pestaña de “WhatsApp” en cada landing. Si la página ya está publicada, tendrás que re-<br class="desktopElement">publicarla después de activar el botón para que aparezca en tu página. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=5HOSPcDXdTQ&t=4s">Tutorial de Cómo activar botón de WhatsApp.</a> ',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Puedo publicar campañas de anuncios digitales en Escala?',
                        'text' => 'En Escala puedes crear, administrar y publicar anuncios digitales de Instagram y Facebook, sin tener que salir de nuestra plataforma. Elige a tu <br class="desktopElement"> audiencia, presupuesto determinado y genera tráfico a tus landing pages de la manera más fácil y práctica.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Qué tipo de campañas son las que se están creando desde Escala?',
                        'text' => 'En Escala puedes crear campañas de anuncios digitales de Instagram y Facebook para lograr generar tráfico a tus landing pages. Su objetivo es <br class="desktopElement"> atraer posibles clientes (Captura de Leads) para que registren sus datos y con esta información puedas cerrar más ventas.',
                        'type' => 'item',
                    ],
                    [
                        'title' => 'En los anuncios digitales de Escala, ¿la propia plataforma maneja el píxel de Facebook o hay que integrarlo desde 0?',
                        'text' => 'Para agregar el píxel de Facebook debes ir a "configuración" de Escala, entra a la sección de "píxeles y códigos de seguimiento" y <br class="desktopElement"> darle clic a "agregar cuenta". Así de fácil es agregar el píxel de Facebook.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Puedo hacer campañas de email marketing en Escala?',
                        'text' => 'La respuesta es sí. Haz efectivas campañas de email marketing con sencillas plantillas de email. Realiza envíos masivos sin caer en la <br class="desktopElement"> bandeja de spam y ten las métricas en tiempo real para mejorar los resultados de tus campañas.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿En qué parte de Escala puedo crear las plantillas de email marketing?',
                        'text' => 'En la funcionalidad de plantillas, al darle la opción de “+Crear” arriba a la derecha, puedes elegir esta opción. Haz clic en opciones de <br class="desktopElement"> plantillas, allí se desplegará las alternativas de: "Plantilla de CRM" o "Plantilla de marketing". Elige “Plantilla de marketing” y <br class="desktopElement"> comienza a personalizarla. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=E_1VObta6Lk">Tutorial de cómo crear plantillas de Email Marketing.</a> ',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿ Cuáles son las funcionalidades de automatizaciones y analíticas?',
                        'text' => 'En Escala te damos todas las métricas para optimizar tus resultados. Tanto en las funcionalidades de marketing como las de ventas <br class="desktopElement"> tienes dashboards amigables que te permiten ver en tiempo real las métricas que son importantes. <br class="space"><br class="space"> En Escala puedes automatizar flujos de tareas para tu fuerza de ventas, programar workflows de comunicación y de email marketing, <br class="desktopElement"> para que tu negocio crezca en piloto automático. ',
                        'type' => 'item',
                    ],
                ],
            ],
            [
                'type' => 'master',
                'title' => 'Sobre mi cuenta',
                'items' => [
                    [
                        'title' => '¿Cómo accedo a la plataforma?',
                        'text' => 'Entra en <a class="hiperButtonGreenBlueT2"href="https://app.escala.com/">app.escala.com</a>. y haz clic en iniciar sesión desde cualquier dispositivo. ',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Puedo usar mi propio dominio?',
                        'text' => 'Sí, en Escala puedes utilizar tu dominio tal como se encuentra registrado en tu hosting, para conocer cómo conectarlo puedes <br class="desktopElement"> visualizar nuestro tutorial: <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=vpdEwrcrZt0&t=44s">Cómo conectar dominio de página.</a> ',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Cómo creo una cuenta?',
                        'text' => 'Para crear una cuenta debes ingresar tus datos haciendo clic en en el botón “Recibe un demo” en <a class="hiperButtonGreenBlueT2"href="https://escala.com/">https://escala.com/</a> y te <br class="desktopElement"> contactará uno de nuestros asesores para comenzar tu free trial.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Cómo cancelo mi cuenta?',
                        'text' => 'Puedes cancelarla cuando quieras a través de nuestros canales de servicio en la plataforma o WhatsApp.',
                        'type' => 'item',
                    ],
                    [
                        'title' => 'Si cierro mi cuenta, ¿perderé toda la data?',
                        'text' => 'La respuesta es Sí. Pero, estamos seguros que una vez que pruebes Escala no querrás cerrar tu cuenta.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Cómo recupero mi contraseña?',
                        'text' => 'Si no recuerdas tu contraseña, haz clic en el link de recuperar y te enviaremos un correo <br class="desktopElement"> para gestionarla de nuevo.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Se puede integrar con otras aplicaciones?',
                        'text' => '¡Sí! Puedes integrar tu CRM de Escala con otras aplicaciones a través de Zapier. Un ejemplo de cómo hacerlo en este tutorial <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=9tJl_akCRgI&list=PLchunKFsero1alROd4tbc9r5GxI7-9_ju&index=22">Ver tutorial</a>',
                        'type' => 'item',
                    ],
                ],
            ],
            [
                'type' => 'master',
                'title' => 'Precios y métodos de pago',
                'items' => [
                    // [
                    //     'title' => '¿Cuáles son los planes de precio de Escala?',
                    //     'text' =>
                    //         'En Escala tenemos planes a la medida de tus sueños y ganas de crecer. Solo pagas por lo que necesitas. Consulta nuestros precios: <a class="hiperButtonGreenBlueT2"href="' .
                    //         $escalaUrl .
                    //         '/pricing-page">Página de precios</a>',
                    //     'type' => 'item'
                    // ],
                    [
                        'title' => '¿Puedo cambiar o cancelar planes?',
                        'text' => 'Sí en Escala puedes cancelar tus planes cuando desees, pero sabemos que será tan útil que querrás ir al siguiente nivel. Para cambiar <br class="desktopElement"> o cancelar tus planes debes contactarte con nuestro equipo, a través de WhatsApp o chat.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Debo pagar por las actualizaciones de la herramienta?',
                        'text' => 'No, no debes pagar por las actualizaciones. Solo pagas por las funcionalidades que utilices y si incrementas tu plan será por tus <br class="desktopElement"> necesidades de contactos de marketing o ventas o porque tu negocio está creciendo y necesitas más usuarios.',
                        'type' => 'item',
                    ],
                ],
            ],
            [
                'type' => 'master',
                'title' => 'Seguridad',
                'items' => [
                    [
                        'title' => '¿Qué tan seguro es?',
                        'text' => 'En Escala tu data está en buenas manos. Tu información no es vista por nadie, solo por personas de tu equipo y bajo los permisos <br class="desktopElement"> que hayas asignado. Para nosotros tu seguridad es primero.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Cómo exportar datos?',
                        'text' => 'Podrás exportar la información de tus contactos y oportunidades de ventas desde cada listado en el CRM. Te enviaremos <br class="desktopElement"> un documento a tu correo con los datos que hayas elegido exportar.',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Cómo importar datos?',
                        'text' => 'Puedes importar tus bases de datos al CRM de Escala, solo necesitas guardar la información en un archivo .csv o .txt e iniciar el <br class="desktopElement"> proceso desde el listado de contactos. Chequea nuestro tutorial: <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=2bJFjHWbI1E">Ver tutorial</a>',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Cómo conceder accesos e invitar a terceros?',
                        'text' => 'Puedes agregar a terceros y a todos los miembros de tu equipo de trabajo para hacer más eficiente tu gestión. Es muy fácil te <br class="desktopElement"> invitamos a ver todo el detalle en este práctico tutorial. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=dCrD2cD_Xpw">Ver tutorial</a>',
                        'type' => 'item',
                    ],
                ],
            ],
            [
                'type' => 'master',
                'title' => 'Asesoría',
                'items' => [
                    [
                        'title' => '¿Cómo conectar con un experto?',
                        'text' => 'En Escala tu crecimiento de negocio es vital para nosotros por eso, siempre tendrás la asesoría de un experto en marketing digital y <br class="desktopElement"> ventas acompañándote en todo el camino. <a class="hiperButtonGreenBlueT2"href="' . $escalaUrl . '/zoom-meeting">Link con asesor</a>',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Con quién puedo conectar para recibir asistencia?',
                        'text' => '<span style="color:#34768a">Si tienes dudas sobre cualquier cosa puedes:</span> <br class="desktopElement"> <ul style="color:#34768a"class="accordionSpecial"><li>1. Ver nuestros tutoriales de uso en nuestro canal de youtube. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/channel/UCiDlXaq67qVf8lSTurRS8lQ">Escala en Youtube</a></li><li>2. Hablar con un asesor. <a class="hiperButtonGreenBlueT2"href="' . $escalaUrl . '/zoom-meeting">Link con asesor</a></li><li>3. Conversar por chat. <a class="hiperButtonGreenBlueT2"href="https://api.WhatsApp.com/send?phone=17863042407">Chat de WhatsApp</a></li><li>4. Hablar con el Especialista en customer success asignado a tu cuenta (Plan Pro y Enterprise).</li></ul>',
                        'type' => 'item',
                    ],
                ],
            ],
            [
                'type' => 'master',
                'title' => 'Entrenamiento',
                'items' => [
                    [
                        'title' => '¿Hay formas de aprender marketing y ventas para mejorar mi negocio?',
                        'text' => 'Escala Academy es el programa de formación constante, mediante el cual te daremos todo el conocimiento de marketing digital y <br class="desktopElement"> ventas para hacerte un experto. <br class="space"><br class="space"> Escala Academy: <br class="desktopElement"> <ul style="color:#34768a"class="accordionSpecial"><li>Tutoriales funcionalidades.</li><li>Blog Escala.</li><li>Workshops para tu empresa.</li><li>Webinars especializados en temas (Escalatones).</li><li>Programas de Éxito.</li></ul>',
                        'type' => 'item',
                    ],
                    [
                        'title' => '¿Necesito pagar para tener toda la información?',
                        'text' => 'Todo nuestro material de apoyo y conocimiento es totalmente gratis. Para nosotros mantenerte bien informado y en constante <br class="desktopElement"> formación es una inversión para ayudarte a hacer crecer tu negocio.',
                        'type' => 'item',
                    ],
                ],
            ],
        ];

        $parameters = [
            'classSection' => 'home_2023_11',
            'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
            'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
            'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
            'items' => $items,
            'title' => '
    Preguntas <span>frecuentes</span>
   ',
        ];
    @endphp
    @contain_FAQ_T1($parameters)
    @endcontain_FAQ_T1



        </div>

    </div>


@endsection

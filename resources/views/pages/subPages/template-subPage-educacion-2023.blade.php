{{-- Template Name: [B] Sub pagina - Implementación 2023 --}}


<div id="educacion-2023">
    <div class="sections">

        <section id="lead-form"
            class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol educacion-2023-0 ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-educacion-mobile-2023-07.png') }}')"
                class="backgroundFull MT_e">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class=" infoTitle">
                                        <span>Escala Academy</span>
                                        <h1 class="principalTitle">
                                            Desarrolla habilidades
                                            <span> para <br class="space"> aprovechar Escala al máximo</span>
                                        </h1>

                                        <ul>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Masterclasses en vivo de
                                                        marketing y ventas</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Capacitaciones en vivo por herramientas</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Cursos autoguiados</p>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>

                                    <div class="containerImage MT_e">
                                        <img src="{{ App::setFilePath('/assets/images/person/am/am_education.png') }}" alt="">
                                    </div>

                                </div>


                            </div>

                            <div class="form7 col-md-12 col-lg-4 ">

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
                            $elementsReviews = [

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
                            [
                            'logo' => App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
                            'text' => 'Escala / plataforma CRM',
                            'points' => '4.8 / 5',
                            ]
                            ];
                            @endphp

                            <div class="elements">
                                {{-- <img src="{!! App::setFilePath('/assets/images/illustrations/others/08-implementacion-2023.png') !!}" loading="lazy"> --}}

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

                    </section>


                </div>

            </div>

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-educacion-2023-07.png') }}')"
                class="backgroundFull D_e">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class=" infoTitle">
                                        <span>Escala Academy</span>
                                        <h1 class="principalTitle">
                                            Desarrolla habilidades
                                            <span> para <br class="space"> aprovechar Escala al máximo</span>
                                        </h1>

                                        <ul>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Masterclasses en vivo de <br class="DT_e">
                                                        marketing y ventas</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Capacitaciones en vivo por herramientas</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Cursos autoguiados</p>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>

                                    <div class="containerImage MT_e">
                                        <img src="{{ App::setFilePath('/assets/images/person/am/am_education.png') }}" alt="">
                                    </div>

                                </div>


                            </div>

                            <div class="form7 col-md-12 col-lg-4 ">

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
                            $elementsReviews = [

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
                            [
                            'logo' => App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
                            'text' => 'Escala / plataforma CRM',
                            'points' => '4.8 / 5',
                            ]
                            ];
                            @endphp

                            <div class="elements">
                                {{-- <img src="{!! App::setFilePath('/assets/images/illustrations/others/08-implementacion-2023.png') !!}" loading="lazy"> --}}

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

                    </section>


                </div>

            </div>

        </section>

        <section class="customSection sectionParent educacion-2023-1">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">
                        <h2 class="title">
                            Entrenamos a líderes y sus equipos <br class="DT_e">
                            <span> en temas estratégicos y técnicos</span>
                        </h2>
                        <p class="text">
                            Aprende sobre:
                        </p>
                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="row">
                            <div class="col-md-12 col-lg-4 cardParent column-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-number">1</h5>
                                        <h5 class="card-title">
                                            Mejores prácticas<br class="space">
                                            de marketing <br class="space">
                                            y ventas
                                        </h5>
                                        <h5 class="card-subtitle">
                                            Aprende nuestra<br class="space">
                                            metodología 
                                            probada para:
                                        </h5>
                                        <div class="list-block">
                                            <ul>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Promover tu negocio</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Convertir leads en ventas</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p> Fidelizar clientes</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 cardParent column-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-number">2</h5>
                                        <h5 class="card-title">
                                            Optimización <br class="space">
                                            de procesos
                                        </h5>
                                        <h5 class="card-subtitle">
                                            Aprende cómo reducir<br class="space">
                                            costos y tiempos en tus<br class="space">
                                            operaciones con:
                                        </h5>
                                        <div class="list-block">
                                            <ul>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Diseño procesos</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Digitalización</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Medición</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>¡Y más!</p>
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
                                        <h5 class="card-number">3</h5>
                                        <h5 class="card-title">
                                            Herramientas<br class="space">
                                            Escala
                                        </h5>
                                        <h5 class="card-subtitle">
                                            Aprende a usar
                                            efectivamente el CRM
                                            de Escala:
                                        </h5>
                                        <ul>

                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Conectar cuentas</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Configurar</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Automatizar</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Editar plantillas</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>¡Y más!</p>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg-implementacion-2023-01.png') !!})" class="customSection sectionParent educacion-2023-2">

            <div class="section-row">

                <section class="innerSectionElement sct0">

                    <div class="containElements">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/01-educacion-2023.png') !!}" loading="lazy">
                        <p class="text">
                            ¡Logra que tus equipos usen el CRM efectivamente <br class="DT_e">
                            y quieran usarlo para conseguir mejores resultados!
                        </p>
                    </div>

                </section>

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="title">
                            ¡Ningún otro CRM <span>te entrena mejor!</span>
                        </h2>
                        <p class="text">
                            Aprovecha todos los recursos educativos de Escala para desarrollar <br class="DT_e">
                            conocimientos que aceleran el crecimiento de tu empresa
                        </p>
                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Conversa con un asesor Escala
                        </a>

                    </div>

                </section>

            </div>

        </section>

        <section class="customSection sectionParent educacion-2023-3">

            <div class="section-row">

                <section class="innerSectionElement sct0">

                    <div class="containElements">
                        <div class="container mt-5">
                            <div class="row">
                                <div class="text-center col-md-12 col-lg-12">
                                    <h2 class="primaryTitle">
                                        ¿Qué dicen nuestros clientes <br class="DT_e">
                                        sobre los entrenamientos?
                                    </h2>
                                    <div class="ele video col-md-12">

                                        @php
                                        $videoEmbed = App::setFilePath('/assets/videos/Testimonio_Miguel_Quisnancela_.mp4');
                                        $videoCover = App::setFilePath('/assets/images/illustrations/others/education_portrait.png');
                                        @endphp

                                        @if (isset($videoEmbed) && $videoEmbed != null)
                                        <div class="youtubeImageContainer ">

                                            <img src="{!! App::setFilePath('/assets/images/overlays/video_box_left.svg') !!}" alt="" class="overlayLeft">

                                            <img src="{!! App::setFilePath('/assets/images/overlays/video_box_right.svg') !!}" alt="" class="overlayRight">

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

        <section class=" customSection sectionParent educacion-2023-4">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            Recursos que aceleran tu aprendizaje <br class="DT_e">
                            <span>Elige el formato de tu preferencia</span>
                        </h2>

                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="row card-box">
                            <div class="col-md-5 col-img">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/02-educacion-2023.png') !!}" loading="lazy">
                            </div>
                            <div class="col-md-7">
                                <h5 class="principalTitle">
                                    <span> Masterclasses en vivo</span> <br class="DT_e">
                                    de marketing y ventas <br class="DT_e">
                                    con expertos
                                </h5>

                            </div>
                        </div>
                        <div class="row card-box">
                            <div class="col-md-5 col-img">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/03-educacion-2023.png') !!}" loading="lazy">
                            </div>
                            <div class="col-md-7">
                                <h5 class="principalTitle">
                                    <span>Capacitaciones en vivo
                                    </span> <br class="DT_e">
                                    por herramienta
                                </h5>
                            </div>
                        </div>
                        <div class="row card-box">
                            <div class="col-md-5 col-img">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/04-educacion-2023.png') !!}" loading="lazy">
                            </div>
                            <div class="col-md-7">
                                <h5 class="principalTitle">
                                    <span>Cursos autoguiados</span> <br class="DT_e">
                                    por herramienta
                                </h5>
                            </div>
                        </div>
                        <div class="row card-box">
                            <div class="col-md-5 col-img">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/05-educacion-2023.png') !!}" loading="lazy">
                            </div>
                            <div class="col-md-7">
                                <h5 class="principalTitle">
                                    <span>Breves tutoriales</span> <br class="DT_e">
                                    por herramientas
                                </h5>
                            </div>
                        </div>

                    </div>

                </section>

            </div>

        </section>

        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg-implementacion-2023-02.png') !!})" class="sectionParent customSection educacion-2023-5">

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
                                <img class="img-otto" src="{!! App::setFilePath('/assets/images/illustrations/others/01-implementacion-2023.png') !!}" loading="lazy">
                                <h2 class="primaryTitle blackColor">
                                    Nuestros clientes lo<br class="space">
                                    comprueban.<br class="space">
                                    <span>Casos de éxito</span>
                                </h2>

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


    </div>
</div>
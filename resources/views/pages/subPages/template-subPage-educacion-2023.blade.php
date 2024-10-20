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

                                        <h1 class="principalTitle">
                                            Desarrolla habilidades<br class="space">
                                            <span>que Escalan Empresas</span>
                                        </h1>

                                        <ul>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Masterclasses con Andrés Moreno</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Bootcamps en vivo</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Educación online a tu ritmo</p>
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

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <div class="form-container form-1" style="text-align:center;">
                                            <img style="margin-top: 30px; margin-bottom:-15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-1.png') !!}" loading="lazy">
                                            <h5 class="titleFormat blackcolor">Recibe un demo
                                                <br class="space">
                                                en vivo
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
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                            }
                                            @endphp
                                            {!! do_shortcode($_formShortcode) !!}
                                        </div>

                                        <div class="form-container form-2" style="display:none; text-align:center;">
                                            <img style="margin-top: 30px; margin-bottom:-15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-2.png') !!}" loading="lazy">
                                            <h5 class="titleFormat blackcolor">Ayúdanos a personalizar
                                                <br class="space">tu demo
                                            </h5>
                                            @php
                                            $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                            $_rs = [];
                                            $_formShortcode = null;
                                            if ($_data = get_posts($_args)) {
                                            foreach ($_data as $_key) {
                                            $_rs[$_key->ID] = $_key->post_title;
                                            if ($_key->post_title === 'Demo flujo step 2') {
                                            $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                            }
                                            }
                                            } else {
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                            }
                                            @endphp
                                            {!! do_shortcode($_formShortcode) !!}
                                        </div>
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

                                        <h1 class="principalTitle">
                                            Desarrolla habilidades<br class="space">
                                            <span>que Escalan Empresas</span>
                                        </h1>

                                        <ul>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Masterclasses con Andrés Moreno</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Bootcamps en vivo</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Educación online a tu ritmo</p>
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

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <div class="form-container form-1" style="text-align:center;">
                                            <img style="margin-top: 30px; margin-bottom:-15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-1.png') !!}" loading="lazy">
                                            <h5 class="titleFormat blackcolor">Recibe un demo
                                                <br class="space">
                                                en vivo
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
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                            }
                                            @endphp
                                            {!! do_shortcode($_formShortcode) !!}
                                        </div>

                                        <div class="form-container form-2" style="display:none; text-align:center;">
                                            <img style="margin-top: 30px; margin-bottom:-15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-2.png') !!}" loading="lazy">
                                            <h5 class="titleFormat blackcolor">Ayúdanos a personalizar
                                                <br class="space">tu demo
                                            </h5>
                                            @php
                                            $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                            $_rs = [];
                                            $_formShortcode = null;
                                            if ($_data = get_posts($_args)) {
                                            foreach ($_data as $_key) {
                                            $_rs[$_key->ID] = $_key->post_title;
                                            if ($_key->post_title === 'Demo flujo step 2') {
                                            $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                            }
                                            }
                                            } else {
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                            }
                                            @endphp
                                            {!! do_shortcode($_formShortcode) !!}
                                        </div>
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
                            Entrenamos a líderes comerciales y a sus equipos <br class="DT_e">
                            <span>para que vendan más y mejor con Escala</span>
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
                                            Crecimiento de <br class="space">
                                            negocios
                                        </h5>
                                        <h5 class="card-subtitle">
                                            Te enseñamos <br class="space">
                                            nuestra metodología <br class="space">
                                            probada para:
                                        </h5>
                                        <div class="list-block">
                                            <ul>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Generar leads</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Vender</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Fidelizar clientes</p>
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
                                            Eficiencia <br class="space">
                                            Operativa
                                        </h5>
                                        <h5 class="card-subtitle">
                                            Compartimos mejores <br class="space">
                                            prácticas que facilitan la <br class="space">
                                            implementación exitosa de <br class="space">
                                            estrategias comerciales
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
                                                        <p>Gestión equipos de venta</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Organización interna</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                        <p>Planificación con Escala<br class="space">
                                                            ¡Y más!</p>
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
                                            Uso del CRM <br class="space">
                                            de Escala
                                        </h5>
                                        <h5 class="card-subtitle">
                                            Te convertimos en un Escala <br class="space">
                                            Pro para que uses las <br class="space">
                                            herramientas efectivamente <br class="space">
                                            con los ojos cerrados
                                        </h5>
                                        <ul>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Gestión de contactos <br class="space">
                                                        y procesos</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Page Builder</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Email Builder</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Envío de Campañas</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Automatización</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>WhatsApp</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                    <p>Inteligencia Artificial <br class="space">
                                                        ¡y más!</p>
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
                                    <span>Masterclasses</span> <br class="DT_e">
                                    con Andrés Moreno <br class="DT_e">
                                    y expertos
                                </h5>
                                <p class="principalText">Empieza a vivirlas</p>
                                <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    Conversa con un asesor Escala
                                </a>
                            </div>
                        </div>
                        <div class="row card-box">
                            <div class="col-md-5 col-img">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/03-educacion-2023.png') !!}" loading="lazy">
                            </div>
                            <div class="col-md-7">
                                <h5 class="principalTitle">
                                    <span>Bootcamps</span> <br class="DT_e">
                                    en vivo
                                </h5>
                            </div>
                        </div>
                        <div class="row card-box">
                            <div class="col-md-5 col-img">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/04-educacion-2023.png') !!}" loading="lazy">
                            </div>
                            <div class="col-md-7">
                                <h5 class="principalTitle">
                                    <span>Cursos online</span> <br class="DT_e">
                                    autoguiadaos
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
                                    de herramientas
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

        <section class="component-info-multiple-cards-T2 customSection sectionParent educacion-2023-6">

            <img src="{!! App::setFilePath('/assets/images/banners/bg-implementacion-2023-03.png') !!}" alt="" class="overlaysky">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">

                            ¡Ningún otro CRM hace tanto por ti!

                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="groupElements card-1">

                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_blue.png') !!}" alt="" class="backOverlay">


                        <h3 class="secondaryTitle">
                            Entrenamiento
                        </h3>

                        <div class="img-box">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/04-implementacion-2023.png') !!}" loading="lazy">
                            </div>
                        </div>

                    </div>

                    <div class="groupElements">

                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white_transparent.png') !!}" alt="" class="backOverlay">

                        <h3 class="secondaryTitle">
                            Acompañamiento
                        </h3>

                        <div class="img-box">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/03-implementacion-2023.png') !!}" loading="lazy">
                            </div>
                        </div>
                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Conocer más
                        </a>

                    </div>

                    <div class="groupElements ">

                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white_transparent.png') !!}" alt="" class="backOverlay">

                        <h3 class="secondaryTitle">
                            Implementación
                        </h3>

                        <div class="img-box">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/02-implementacion-2023.png') !!}" loading="lazy">
                            </div>
                        </div>

                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Conocer más
                        </a>

                    </div>

                </section>



            </div>


        </section>
        @php
        $escalaUrl = 'https://escala.com';

        $items = [
        [
        'type' => 'master',
        'title' => '¿Cómo diseñan los emails y las landing pages?',
        'text' => 'Diseñamos los emails y la landing page tomando la referencia de marca del website y/o <br class="DT_e"> redes sociales del cliente. De no tener, se solicita al cliente una pieza gráfica referencia.'
        ],
        [
        'type' => 'master',
        'title' => '¿Crean también el copy de emails y landing pages?',
        'text' => 'El texto de los emails y landing page, es simulado. Es responsabilidad del cliente adaptarlo <br class="DT_e"> a su negocio y/o necesidades.'
        ],
        [
        'type' => 'master',
        'title' => '¿Qué pasa si quiero que modifiquen uno de los entregables?',
        'text' => 'Cualquier modificación de lo entregado, es responsabilidad del cliente. El mismo puede <br class="DT_e"> utilizar las herramientas de Escala que son muy fáciles de usar.'
        ],
        [
        'type' => 'master',
        'title' => '¿Si me suscribo un viernes, cuándo recibo el CRM implementado?',
        'text' => 'Entregamos el CRM implementado en 10 días hábiles desde el momento que tenemos <br class="DT_e"> toda la información requerida por parte del cliente para personalizar la plataforma y crear las piezas gráficas.'
        ],
        [
        'type' => 'master',
        'title' => '¿Cuánto cuesta la implementación?',
        'text' => 'El valor que generamos es de más de USD $6,500 pero dependiendo del plan que <br class="DT_e"> obtengas puede estar o no incluida en la suscripción.'
        ]
        ];


        $parameters = [
        'classSection' => 'educacion-2023-7',
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
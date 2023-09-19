{{-- Template Name: [B] Sub pagina - Implementación 2023 --}}

@extends('layouts.app')
@section('content')
    <div id="educacion-2023">
        <div class="sections">

            <section id="lead-form"
                class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol educacion-2023-0 ">

                <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/02-bg-educacion-2023.png') }}')"
                    class="backgroundFull">

                    <div class="section-row">

                        <section class="innerSectionElement sct1">

                            <div class="groupElements row">


                                <div class="info col-md-12 col-lg-8 ">


                                    <div class="containElements row threeCol">

                                        <div class="ol-md-12 col-lg-5">

                                            <div class="elements">

                                            </div>

                                        </div>

                                        <div class="col-md-12 col-lg-7">

                                            <h1 class="principalTitle">
                                            Desarrolla habilidades<br class="desktopTabletElement">
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
                                        <div class="ol-md-12 col-lg-12">
                                            <div class="elements img-reviews">
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/08-implementacion-2023.png') !!}" loading="lazy">
                                            </div>

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

                    </div>

                </div>

            </section>

            <section class="customSection sectionParent educacion-2023-1">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">
                            <h2 class="title">
                                Entrenamos a líderes comerciales y a sus equipos <br class="desktopTabletElement">
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
                                ¡Logra que tus equipos usen el CRM efectivamente <br class="desktopTabletElement">
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
                                Aprovecha todos los recursos educativos de Escala para desarrollar <br class="desktopTabletElement">
                                conocimientos que aceleran el crecimiento de tu empresa
                            </p>
                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Conversa con un asesor Escala
                            </a>

                        </div>

                    </section>

                </div>

            </section>

            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg-implementacion-2023-05.png') !!})" class="customSection sectionParent educacion-2023-3">

                <div class="section-row">

                    <section class="innerSectionElement sct0">

                        <div class="containElements">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 text-center">
                                        <h2 class="primaryTitle">
                                            ¿Qué dicen nuestros clientes <br class="desktopTabletElement">
                                            sobre los entrenamientos?
                                        </h2>
                                        <div class="ele video col-md-12 col-lg-9">

                                            @php
                                                $videoEmbed = App::setFilePath('/assets/videos/Comercial_escala_registro_lead_1.mp4');
                                                $videoCover = App::setFilePath('/assets/images/illustrations/others/07-implementacion-2023.png');
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
                                Recursos que aceleran tu aprendizaje <br class="desktopTabletElement">
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
                                        <span>Masterclasses</span> <br class="desktopTabletElement">
                                        con Andrés Moreno <br class="desktopTabletElement">
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
                                        <span>Bootcamps</span> <br class="desktopTabletElement">
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
                                        <span>Cursos online</span> <br class="desktopTabletElement">
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
                                        <span>Breves tutoriales</span> <br class="desktopTabletElement">
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
                                Implementación
                            </h3>

                            <div class="img-box">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/02-implementacion-2023.png') !!}" loading="lazy">
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
                        <div class="groupElements">

                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white_transparent.png') !!}" alt="" class="backOverlay">

                            <h3 class="secondaryTitle">
                                Entrenamiento
                            </h3>

                            <div class="img-box">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/04-implementacion-2023.png') !!}" loading="lazy">
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
                        'title' => '¿Cuántas horas tengo disponibles con mi Gerente de Éxito?',
                        'text' => '
            <p class="text"><strong>En el Plan Pro:</strong></p> <br class="space">
            <ul style="list-style: disc; padding-left: 20px">
                <li>8 horas el primer año que puedes consumir a tu propio ritmo</li>
                <li>4 horas por año a partir del segundo año</li>
            </ul>
            <br class="space">
            <p class="text primaryText grayColorTexts">El Plan Starter no incluye un Gerente de Éxito asignado.</p>
          ',
                    ],
                    [
                        'type' => 'master',
                        'title' => '¿Cuántas horas de entrenamiento privado tengo disponibles?',
                        'text' => '
            <p class="text"><strong>En el Plan Pro:</strong></p> <br class="space">
            <ul style="list-style: disc; padding-left: 20px">
                <li>4 horas el primer año que puedes consumir a tu propio ritmo</li>
                <li>2 horas por año a partir del segundo año</li>
            </ul>
            <br class="space">
            <p class="text primaryText grayColorTexts">El Plan Starter no incluye un entrenamiento privado.</p>
          ',
                    ],
                    [
                        'type' => 'master',
                        'title' => '¿Qué pasa si necesito más horas con mi Gerente de Éxito o de entrenamiento privado?',
                        'text' => '
            <p class="text primaryText grayColorTexts">Puedes solicitar e invertir en horas adicionales. Lo coordinas directamente con tu Gerente de Éxito asignado.</p>
          ',
                    ],
                    [
                        'type' => 'master',
                        'title' => '¿El Gerente de Éxito puede implementar acciones en mi cuenta de Escala?',
                        'text' => '
            <p class="text primaryText grayColorTexts">No. El Gerente de Éxito sirve de guía para que aprovechen las herramientas al máximo. La responsabilidad de ejecutar las estrategias y campañas es de cada cliente.</p>
          ',
                    ],
                    [
                        'type' => 'master',
                        'title' => '¿Cómo me reúno con mi Gerente de Éxito? ',
                        'text' => '
            <p class="text primaryText grayColorTexts">Los contactos ocurren por Zoom, Email y WhatsApp dependiendo dell objetivo y la duración de los mismos.</p>
          ',
                    ],
                ];
                
                $parameters = [
                    'classSection' => 'educacion-2023-7',
                    'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                    'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                    'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                    'items' => $items,
                ];
            @endphp
            @contain_FAQ_T1($parameters)
            @endcontain_FAQ_T1

        </div>
    </div>


@endsection

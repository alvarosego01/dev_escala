<div id="subPage_omnicanal_2025">
    <div class="sections">
        <section id="lead-form" class="hero2025 subPage_omnicanal_2025_0_1">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-omnicanal-hero-dk-2025.png') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <h1 class="principalBigTitle">
                                Simplifica tus <br class="space">
                                ventas con el <br class="space">
                                <span>Inbox Omnicanal</span>
                            </h1>
                            <p class="principalBigText">
                                Centraliza y optimiza tus <br class="space">
                                conversaciones de WhatsApp, <br class="space">
                                Instagram y Facebook
                            </p>
                            <div class="containerImage">
                            <img alt="Ilustración de Andres Moreno whatsapp escala" src="{!! App::setFilePath('/assets/images/person/img-hero-chica-omnicanal-2025.png') !!}" loading="lazy">
                        </div>
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Ilustración de Andres Moreno whatsapp escala" src="{!! App::setFilePath('/assets/images/person/img-hero-chica-omnicanal-2025.png') !!}" loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct3">
                        <div class="form7">
                            <div class="containElements">

                                <div class="formatForm redirectWeb" redirectweb="true">

                                    <h5 class="titleFormat blackcolor"> Recibe un <br class="space">
                                        demo personalizado</h5>

                                    @php
                                    $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                    $_rs = [];
                                    $_formShortcode = null;
                                    if ($_data = get_posts($_args)) {
                                    foreach ($_data as $_key) {
                                    $_rs[$_key->ID] = $_key->post_title;
                                    if ($_key->post_title === 'Profile demo - Flujo Demo2') {
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
                        <div class="info2">


                            <div class="containElements row threeCol">

                                <div class="ele eleImg col-md-12 col-lg-6">

                                    <div class="containerImage">
                                        <img alt="Ilustración de Andres Moreno whatsapp escala" src="{!! App::setFilePath('/assets/images/person/am/am-whatsapp-hero-mb.webp') !!}" loading="lazy">
                                    </div>


                                </div>

                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>


        <section class="customSection sectionParent subPage_omnicanal_2025_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="groupElements row">
                        <div class="info col-md-12 col-lg-8 ">
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
                                'logo' =>
                                App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
                                'text' => 'Escala / plataforma CRM',
                                'points' => '4.8 / 5',
                                ]
                                ];
                                @endphp
                                <div class="ele reviews">
                                    <div class="elements">
                                        <div class="iconApp">
                                            <a target="_blank"
                                                href="https://www.getapp.com/customer-management-software/crm/category-leaders">
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_app_record_2025_category.svg') !!}"
                                                    loading="lazy">
                                            </a>
                                        </div>
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
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icons-stars-yellow.svg') !!}"
                                                            loading="lazy">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent subPage_omnicanal_2025_1_0">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <p>
                        El Inbox Omnicanal de Escala transforma la manera en la que te <br class="DT_e">
                        relacionas con tus leads y clientes. Gestiona todos los mensajes de <br class="DT_e">
                        Meta en un solo lugar. Así, puedes responder más rápido, automatizar <br class="DT_e">
                        conversaciones y nunca perder una oportunidad de venta
                    </p>
                </section>
                <section class="innerSectionElement sct2">
                    <div class="section_contain">

                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <h3 style="text-align: center"><span style="color: #2c4857"><strong>Antes de Escala</strong></span></h3>
                            </div>

                            <div class="textContainer textRight">
                                <h3 style="text-align: center;color: #2c4857"><strong>Después de Escala</strong></h3>
                            </div>
                        </div>

                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <p>Mensajes dispersos entre WhatsApp, Facebook e Instagram.</p>

                            </div>

                            <div class="textContainer textRight">
                                <p>Todos los mensajes alojados en un solo Inbox.​</p>

                            </div>
                        </div>

                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <p>Oportunidades comerciales perdidas por no responder a tiempo.</p>

                            </div>

                            <div class="textContainer textRight">
                                <p>Respuestas inmediatas y flujos automáticos para no dejar pasar ningún lead.</p>

                            </div>
                        </div>

                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <p>Falta de orden en la asignación de conversaciones a comerciales.</p>
                            </div>

                            <div class="textContainer textRight">
                                <p>Distribución equitativa entre los usuarios de Escala.</p>

                            </div>
                        </div>

                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <p>Clientes insatisfechos por falta de atención oportuna (Atención al cliente).</p>

                            </div>

                            <div class="textContainer textRight">
                                <p>Incremento en la satisfacción del cliente.</p>

                            </div>
                        </div>

                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <p>Conversaciones y datos perdidos por rotación de personal.</p>

                            </div>

                            <div class="textContainer textRight">
                                <p>Historial completo disponible en el CRM para retomar conversaciones desde cualquier punto.</p>

                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>
        <section class="customSection sectionParent subPage_omnicanal_2025_1_1">

            <div class="section-row">
                <section class="innerSectionElement sct1">
                    <div class="mobile-contain-slider">

                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/omnicanal-slider-1-mb.png') !!}"
                            alt="Imagen 1 Desktop" class="mobile-img">


                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/omnicanal-slider-2-mb.png') !!}"
                            alt="Imagen 2 Desktop" class="mobile-img">


                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/omnicanal-slider-3-mb.png') !!}"
                            alt="Imagen 3 Desktop" class="mobile-img">

                    </div>

                    <div class="slider-container" id="sliderContainer">
                        <div class="slider" id="slider">
                            <div class="slide">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/omnicanal-slider-1.png') !!}"
                                    alt="Imagen 1 Desktop" class="desktop-img">

                            </div>
                            <div class="slide">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/omnicanal-slider-2.png') !!}"
                                    alt="Imagen 2 Desktop" class="desktop-img">

                            </div>
                            <div class="slide">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/omnicanal-slider-3.png') !!}"
                                    alt="Imagen 3 Desktop" class="desktop-img">

                            </div>
                        </div>

                        <div class="dots-container">
                            <span class="dot active" data-slide="0"></span>
                            <span class="dot" data-slide="1"></span>
                            <span class="dot" data-slide="2"></span>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const sliderContainer = document.getElementById('sliderContainer');
                            const slider = document.getElementById('slider');
                            const slides = document.querySelectorAll('.slide');
                            const dots = document.querySelectorAll('.dot');
                            const totalSlides = slides.length;
                            let currentIndex = 0;
                            let autoplayInterval;

                            // Función para iniciar el autoplay
                            function startAutoplay() {
                                autoplayInterval = setInterval(() => {
                                    currentIndex = (currentIndex + 1) % totalSlides;
                                    updateSlider();
                                }, 3000); // Cambia cada 5 segundos
                            }

                            // Función para detener el autoplay
                            function stopAutoplay() {
                                clearInterval(autoplayInterval);
                            }

                            // Función para actualizar el slider
                            function updateSlider() {
                                slider.style.transform = `translateX(-${currentIndex * 100}%)`;

                                // Actualizar dots activos
                                dots.forEach((dot, index) => {
                                    dot.classList.toggle('active', index === currentIndex);
                                });
                            }

                            // Event listeners para los dots
                            dots.forEach(dot => {
                                dot.addEventListener('click', function() {
                                    currentIndex = parseInt(this.getAttribute('data-slide'));
                                    updateSlider();
                                });
                            });

                            // Pausar al hacer hover
                            sliderContainer.addEventListener('mouseenter', stopAutoplay);
                            sliderContainer.addEventListener('mouseleave', startAutoplay);

                            // Iniciar autoplay al cargar la página
                            startAutoplay();
                        });
                    </script>

                </section>
            </div>
        </section>

        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subPage_omnicanal_2025_2',
        'enableTitle' => true,
        'titlePrincipal' => '
        Conéctate mejor, responde más rápido <br class="DT_e">
        y vende más:',
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/Bandeja-unificada-de-mensajes.gif'),
        'title' => '
        <span>
            Bandeja unificada de mensajes
        </span>
        Gestiona todos tus canales en <br class="DT_e">
        un solo lugar y responde en <br class="DT_e">
        menos tiempo', 'text'=> '
        <ul class="text">
            <li>Recibe mensajes de tus redes sociales (WhatsApp, Instagram y Facebook Messenger) en una única bandeja.</li>
            <li>Filtra conversaciones por canal, estado o usuario.</li>
            <li>Visualiza el historial completo de cada contacto.</li>
            <li>Responde desde Escala sin cambiar de plataforma.</li>
            <li>Sincroniza contactos, actividades y conversaciones con el CRM Escala.</li>
        </ul>
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
        'classSection' => 'subPage_omnicanal_2025_3',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/Gestión-organizada-de-conversaciones.gif'),
        'title' => '
        <span>
            Gestión organizada de conversaciones
        </span>
        Mantén el control total de tu <br class="DT_e">
        comunicación comercial, incluso <br class="DT_e">
        con cambios en el equipo
        ',
        'text' => '
        <ul class="text">
            <li>Asigna chats automáticamente a usuarios o grupos.</li>
            <li>Etiqueta conversaciones según su estado: nuevo, en seguimiento, cerrado, etc.</li>
            <li>Agrega notas internas visibles para tu equipo.</li>
            <li>Retoma conversaciones con contexto gracias al historial guardado.</li>
        </ul>
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
        'classSection' => 'subPage_omnicanal_2025_5',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/Automatizaciones-integradas.gif'),
        'title' => '
        <span>
            Automatizaciones integradas
        </span>
        Responde con menos <br class="DT_e">
        esfuerzo, incluso fuera del <br class="DT_e">
        horario laboral
        ',
        'text' => '
        <ul class="text">
            <li>Activa respuestas automáticas para mensajes entrantes</li>
            <li>Integra reglas para asignación, recordatorios o envío de correos.</li>
            <li>Envía mensajes con enlaces, documentos, imágenes o botones.</li>
            <li>Identifica conversaciones provenientes de anuncios de Facebook</li>
        </ul>
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


        <section class="customSection sectionParent subPage_omnicanal_2025_6">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                            Prueba Escala ahora →
                        </a>
                    </div>
                </section>
            </div>
        </section>




        <section class="customSection sectionParent fullWidth subPage_omnicanal_2025_7 ">
            <div class="section-row">
                <section class="innerSectionElement1">
                    <div class="containElements">
                        <h2 class="primaryTitle blackColor">
                            Las empresas prefieren el <br class="DT_e">
                            Inbox Omnicanal de Escala
                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement2">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/omnicanal-review-empresas-1.png') !!}"
                        alt="">
                    <img class="img-center" src="{!! App::setFilePath('/assets/images/illustrations/others/omnicanal-review-empresas-2.png') !!}"
                        alt="">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/omnicanal-review-empresas-3.png') !!}"
                        alt="">
                </section>


            </div>

        </section>

        <section class="customSection sectionParent subPage_omnicanal_2025_8" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-omnicanal-section-dk-8-2025.png') }}')">
            <div class="section-row ">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/omnicanal-ceo-escala-2025.png') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                Maximiza tus <br class="DT_e">
                                oportunidades de venta <br class="DT_e">
                                con el Inbox Omnicanal <br class="DT_e">
                                de Escala
                            </h2>

                            <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                                Prueba Escala ahora →
                            </a>
                        </div>
                    </section>



                </div>
            </div>
        </section>



    </div>

</div>

</div>
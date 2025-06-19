<div id="marketing_ventas_automat_2024">

    <div class="sections">
        <section id="lead-form" class="hero2025 marketing_ventas_automat_2024_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-automatizaciones-2025-hero.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">

                            <h1 class="principalBigTitle">
                                Automatiza tu <br class="space">
                                proceso comercial
                            </h1>

                            <h1 class="principalBigTitleMb">
                                Automatiza tu <br class="space">
                                proceso comercial
                            </h1>
                            <p class="principalBigText">
                                Logra que el CRM de Escala trabaje <br class="DT_e">
                                por ti 24/7 para ahorrar tiempo, <br class="DT_e">
                                costos, y errores humanos
                            </p>
                            <div class="containerImage">
                                <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/imagen-ceo-escala-2025-alfonso.webp') !!}" loading="lazy">
                                <img class="iconClick" src="{!! App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') !!}" loading="lazy" onclick="openVideoPopup()">
                            </div>
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/imagen-ceo-escala-2025-alfonso.webp') !!}" loading="lazy">
                            <img class="iconClick" src="{!! App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') !!}" loading="lazy" onclick="openVideoPopup()">
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
                    </section>
                </div>
            </div>
        </section>
        <section class="customSection sectionParent marketing_ventas_automat_2024_1">
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

        <section class="w-full customSection sectionParent  marketing_ventas_automat_2024_2">
            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="containerImage">
                            <img class="bgImg" src="{!! App::setFilePath('/assets/images/illustrations/others/bg-img-automatizaciones 2025-section-2-1.webp') !!}" loading="lazy">

                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/imagen-automatizaciones-escacala-section-2-1.webp') !!}" loading="lazy">
                        </div>
                        <div class="info-second">
                            <p>
                                ¿Necesitas optimizar tus procesos <br class="space">
                                y mejorar la eficiencia de tu equipo?
                            </p>
                            <h3>¡Olvídate de tareas manuales!</h3>
                        </div>



                    </div>
                </section>


            </div>

        </section>


        <section class="w-full customSection sectionParent marketing_ventas_automat_2024_3">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        ¿Por qué automatizar procesos <br class="space">
                        comerciales y de servicio?
                    </h2>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="groupElements">
                        <h4 class="titleFloat">1</h4>
                        <div class="info">
                            <span>Aumenta <br class="DT_e">
                                conversión</span>
                        </div>
                    </div>
                    <div class="groupElements">
                        <h4 class="titleFloat">2</h4>
                        <div class="info">
                            <span>Mejora la <br class="DT_e">
                                experiencia de <br class="DT_e">
                                compra</span>
                        </div>
                    </div>
                    <div class="groupElements">
                        <h4 class="titleFloat">3</h4>
                        <div class="info">
                            <span>Multiplica la <br class="DT_e">
                                productividad <br class="DT_e">
                                de tu equipo</span>
                        </div>
                    </div>
                    <div class="groupElements">
                        <h4 class="titleFloat">4</h4>
                        <div class="info">
                            <span>Ganas mayor <br class="DT_e">
                                control sobre <br class="DT_e">
                                tus operaciones</span>
                        </div>
                    </div>
                </section>
                <h3 class="secondaryTitle">¡y más!</h3>
            </div>

            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Recibe un demo →
                </a>
            </div>
        </section>

        <section class="w-full customSection sectionParent marketing_ventas_automat_2024_4">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            Automatiza una variedad de acciones, <br class="space">
                            para que ahorres tiempo y esfuerzo
                        </h2>

                    </div>
                </section>

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'marketing_ventas_automat_2024_5',
                        'img' => App::setFilePath('/assets/images/gifs/Captura-Automatica-de-Interesados.gif'),
                        'title' => 'Ahorra tiempo con plantillas <br class="DT_e"> de Automatizaciones',
                        'text' => 'Crea automatizaciones de marketing complejas en <br class="DT_e">
                        cuestión de minutos, ahora encuentra plantillas <br class="DT_e">
                        para: Asignar leads a vendedores, responder <br class="DT_e">
                        WhatsApps, recuperar carritos abandonados, <br class="DT_e">
                        enviar emails y ¡mucho más!',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'marketing_ventas_automat_2024_5_1',
                        'img' => App::setFilePath('/assets/images/gifs/Seguimiento-Oportuno.gif'),
                        'title' => 'Automatiza tareas simples:',
                        'text' => 'Configura emails de respuesta automática, <br class="DT_e">
                        programa notificaciones y recordatorios, activa <br class="DT_e">
                        flujos de conversación automáticos y ¡mucho más! <br class="DT_e">
                        Para que tu equipo se centre en actividades más <br class="DT_e">
                        estratégicas.',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'marketing_ventas_automat_2024_5_2',
                        'img' => App::setFilePath('/assets/images/gifs/Clasificacion-Estrategica-de-Leads.gif'),
                        'title' => 'Desarrolla secuencias de <br class="DT_e"> emails comerciales:',
                        'text' => 'Piensa en tu estrategia de emails una vez y <br class="DT_e">
                        automatízala para que se envíen de acuerdo al plan. <br class="DT_e">
                        ¡Personaliza, programa y eleva tus ventas!.',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'marketing_ventas_automat_2024_5_3',
                        'img' => App::setFilePath('/assets/images/gifs/Gestion-Eficiente-del-Embudo.gif'),
                        'title' => 'Programa actividades clave <br class="DT_e"> para tu equipo de ventas:',
                        'text' => 'Automatiza recordatorios para tus vendedores y <br class="DT_e">
                        optimiza la comunicación con clientes potenciales, <br class="DT_e">
                        en el momento preciso. ¡Potencia tus ventas <br class="DT_e">
                        eficazmente!',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'marketing_ventas_automat_2024_5_4',
                        'img' => App::setFilePath('/assets/images/gifs/Agendamiento-y-Recordatorios-Automaticos.gif'),
                        'title' => 'Realiza automatizaciones, <br class="DT_e"> con solo agregar etiquetas',
                        'text' => 'Segmenta tus contactos y asigna etiquetas. Estas <br class="DT_e">
                        etiquetas, activan emails, notificaciones y acciones <br class="DT_e">
                        de ventas sin esfuerzo. ¡Simplifica tu gestión!',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'marketing_ventas_automat_2024_5_5',
                        'enableTitle' => true,
                        'img' => App::setFilePath('/assets/images/gifs/01.Automatizaciones-Whatsapp-min.gif'),
                        'title' => 'Automatiza tu WhatsApp <br class="DT_e"> y opera manos libres:',
                        'text'=> '
                        <ul class="text">
                            <li>Diseña flujos de respuesta automatizadas</li>
                            <li>Programa recordatorios, emails, etiquetas, etc.</li>
                            <li>Envía mensajes masivos con plantillas aprobadas por Meta</li>
                            <li>Asigna conversaciones y actividades a tu equipo</li>
                            <li>Personaliza la comunicación con cada contacto</li>
                            <li>Encuesta y califica a tus contactos</li>
                            <li>Segmenta a tu lista de contactos </li>
                            <li>Mide tus esfuerzos con analíticas </li>
                        </ul>
                        ',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1
                    </div>
                </section>

            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Solicitar un demo →
                </a>
            </div>
        </section>


        <section class="w-full customSection sectionParent marketing_ventas_automat_2024_6">
            <div class="section-row">
                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            ¿Qué más consigues en Escala? <br class="space">
                            ¡El mejor acompañamiento y <br class="space">
                            entrenamiento de la industria!
                        </h2>
                        <p>
                            (“Es uno de sus grandes diferenciadores” dicho por clientes)
                        </p>
                    </div>
                </section>
                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-automatizacion-implementacion.webp') !!}"
                                alt="">
                            <h3>Agilizamos la <br class="DT_e"> implementación</h3>
                            <p>
                                adaptando el CRM a tus <br class="DT_e"> necesidades.
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-entrenamiento-implementacion.webp') !!}"
                                alt="">
                            <h3>Entrenamos a líderes <br class="DT_e">
                                y equipos en</h3>
                            <p>
                                el uso de la plataforma y <br class="DT_e">
                                nuestra metodología <br class="DT_e">
                                probada de crecimiento.
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-gerente-implementacion.webp') !!}"
                                alt="">
                            <h3>Asignamos un <br class="DT_e">
                                gerente de éxito </h3>
                            <p>
                                que guía tus acciones <br class="DT_e">
                                para que aproveches al <br class="DT_e">
                                máximo Escala.
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-soporte-implementacion.webp') !!}"
                                alt="">
                            <h3>Chat de soporte <br class="DT_e">
                                en vivo</h3>
                            <p>
                                que atiendes tus preguntas <br class="DT_e">
                                y necesidades técnicas <br class="DT_e">
                                oportunamente.
                            </p>
                        </div>



                    </div>

                </section>
            </div>
        </section>

        <section class="customSection sectionParent marketing_ventas_automat_2024_7">

            <div class="section-row ">
                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-4-md-aceleradora-desktop.svg') }}')">
                    <div class="cards left">
                        <span>“Uno de los mayores retos de liderar un <br class="DT_e">
                            negocio es enfocarse en lo que es <br class="DT_e">
                            importante y hacer que cada minuto cuente. <br class="DT_e">
                            Con la automatización de escala podrás <br class="DT_e">
                            ahorrarte el tiempo de hacer tareas <br class="DT_e">
                            repetitivas e invertirlo en los proyectos que <br class="DT_e">
                            agregan valor a tu negocio”.</span>

                        <span class="colorEspecial">
                            <b>Andrés Moreno,</b> <br class="space">
                            Fundador de escala & Open English
                        </span>
                    </div>
                    <div class="cards right ">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-am-escala-automata-2025.webp') !!}"
                            alt="">
                    </div>
                </section>

            </div>
        </section>













        <!-- Popup (inicialmente oculto) -->
        <div id="videoPopup">
            <div class="videoInterno">
                <button onclick="closeVideoPopup()">×</button>
                <!-- Contenedor para el iframe de Vimeo (inicialmente vacío) -->
                <div id="vimeoPlayerContainer" style="padding:56.25% 0 0 0;position:relative;"></div>
            </div>
        </div>

        <script src="https://player.vimeo.com/api/player.js"></script>
        <script>
            let vimeoPlayer = null;

            function openVideoPopup() {
                const popup = document.getElementById('videoPopup');
                const container = document.getElementById('vimeoPlayerContainer');

                // Mostrar el popup
                popup.style.display = 'flex';

                // Solo crear el iframe si no existe ya
                if (!container.querySelector('iframe')) {
                    container.innerHTML = `
                <iframe src="https://player.vimeo.com/video/1094458807?autoplay=1&badge=0&autopause=0&player_id=0&app_id=58479" 
                        frameborder="0" 
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" 
                        style="position:absolute;top:0;left:0;width:100%;height:100%;border-radius:20px;" 
                        title="Automatiza tu proceso comercial con Escala">
                </iframe>`;

                    // Inicializar el reproductor de Vimeo
                    vimeoPlayer = new Vimeo.Player(container.querySelector('iframe'));
                }
            }

            function closeVideoPopup() {
                const popup = document.getElementById('videoPopup');
                popup.style.display = 'none';

                // Pausar el video de Vimeo si el reproductor está inicializado
                if (vimeoPlayer) {
                    vimeoPlayer.pause();
                }
            }

            // Cerrar al hacer clic fuera del video
            document.getElementById('videoPopup').addEventListener('click', function(e) {
                if (e.target === this) closeVideoPopup();
            });
        </script>
    </div>

</div>
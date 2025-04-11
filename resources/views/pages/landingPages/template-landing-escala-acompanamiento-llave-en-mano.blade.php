<div id="landing_acompanamiento_llave_en_mano">
    <div class="sections">

        <section id="lead-form"
            class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_acompanamiento_llave_en_mano_0 ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-1-md-aceleradora-desktop.svg') }}')"
                class="backgroundFull">
                <div class="section-row">

                    <section class="innerSectionElement sct1">
                        <div class="containElements">
                            <span>Servicio de Implementación Llave en Mano</span>
                            <h1 class="principalBigTitle">
                                Contrata a nuestros expertos para que adapten <br class="DT_e">
                                el CRM a las necesidades de tu empresa
                            </h1>
                        </div>
                    </section>


                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="info col-md-12 col-lg-8 ">
                                <div class="video">
                                    @php
                                    $videoEmbed = App::setFilePath('/assets/videos/video escala optimizado.mp4');
                                    $videoCover = App::setFilePath('/assets/images/illustrations/others/img_video_acompañamiento_aceleradora_overlay.png');
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

                            <div class="form7 col-md-12 col-lg-4 ">

                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">


                                        <h5 class="titleFormat"> Recibe un <br class="space"> demo personalizado</h5>


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

                                        <script>
                                            jQuery('.formatForm .wpcf7 input.wpcf7-form-control.wpcf7-submit').val(
                                                'Recibir el Demo →')
                                        </script>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>

                </div>

            </div>

        </section>

        <section class="customSection sectionParent landing_acompanamiento_llave_en_mano_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-card-acompañamiento-tiempo.png') !!}"
                                alt="">
                            <h3>Reduce el tiempo <br class="DT_e">
                                que dedicas a <br class="DT_e">
                                personalizar el CRM</h3>
                            <p>
                                El equipo de Escala se <br class="DT_e">
                                encarga de implementar gran <br class="DT_e">
                                parte del CRM mientras tú y <br class="DT_e">
                                tu equipo se enfocan en hacer <br class="DT_e">
                                crecer el negocio.
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-card-acompañamiento-configurar.png') !!}"
                                alt="">
                            <h3>Minimiza errores al <br class="DT_e">
                                configurar un <br class="DT_e">
                                nuevo sistema</h3>
                            <p>
                                La experiencia del equipo de <br class="DT_e">
                                Escala asegura que la <br class="DT_e">
                                configuración del CRM se <br class="DT_e">
                                realice lo más efectiva y <br class="DT_e">
                                eficientemente posible.
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-card-acompañamiento-resultados.png') !!}"
                                alt="">
                            <h3>Empiezan a <br class="DT_e">
                                conseguir resultados <br class="DT_e">
                                más rápido</h3>
                            <p>
                                Al reducir el tiempo de <br class="DT_e">
                                implementación, tú y tu <br class="DT_e">
                                equipo pueden incorporar el <br class="DT_e">
                                CRM a sus operaciones antes <br class="DT_e">
                                y acelerar su retorno <br class="DT_e">
                                de inversión.
                            </p>
                        </div>

                    </div>

                </section>


            </div>

        </section>

        <section class="customSection sectionParent landing_acompanamiento_llave_en_mano_2">

            <div class="section-row ">
                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-4-md-aceleradora-desktop.svg') }}')">

                    <div class="cards left">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-ceo-alfonzo-section-3.png') !!}"
                            alt="">
                    </div>
                    <div class="cards right">
                        <span>"Sabemos que hacer crecer tu negocio ya es un gran <br class="DT_e">
                            desafío. Queremos que concentres tus esfuerzos en lo que <br class="DT_e">
                            realmente importa: hacerlo crecer, mientras nosotros nos <br class="DT_e">
                            encargamos de los temas operativos.</span>
                        <p>
                            Por eso, hemos creado el Servicio de Implementación <br class="DT_e">
                            Llave en Mano de Escala, para que adoptar un CRM sea <br class="DT_e">
                            simple, rápido y sin complicaciones."
                        </p>
                        <span class="colorSpecial">Alfonso Santiago, CEO de Escala</span>
                    </div>

                </section>

            </div>
        </section>



        <section class="customSection sectionParent landing_acompanamiento_llave_en_mano_3">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        La Implementación Llave en Mano es
                        ideal para tu empresa si prefieren...
                    </h2>
                    <ul>
                        <li><img src="{!! App::setFilePath('/assets/images/icons/check-crm-li.svg') !!}">
                            <span>Invertir más tiempo en hacer crecer el negocio que en <br class="DT_e">
                                implementar el CRM</span>
                        </li>
                        <li><img src="{!! App::setFilePath('/assets/images/icons/check-crm-li.svg') !!}">
                            <span>Dedicarse a definir el plan de implementación y delegarle <br class="DT_e">
                                a Escala su ejecución
                            </span>
                        </li>
                    </ul>
                </section>

        </section>


        <section class="customSection sectionParent landing_acompanamiento_llave_en_mano_4">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        ¿Qué incluye la Implementación <br class="DT_e">
                        Llave en Mano?
                    </h2>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="containElements">

                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-card-acompañamiento-exito.png') !!}"
                                alt="">
                            <h3>Gerente de Éxito <br class="DT_e">
                                asignado</h3>
                            <p>
                                Tu principal punto de <br class="DT_e">
                                contacto con Escala, se <br class="DT_e">
                                encarga de:
                            </p>
                            <hr class="separator">
                            <ul>
                                <li>Guiarte a definir el plan de implementación según los objetivos y prioridades de tu empresa.</li>
                                <li>Entregar requisitos y hacer seguimiento a los implementadores de Escala para que personalicen el CRM efectivamente según tu plan.</li>
                                <li>Presentarte avances de la implementación y recibir tu feedback.</li>
                            </ul>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-card-acompañamiento-implementacion.png') !!}"
                                alt="">
                            <h3>Entregables <br class="DT_e">
                                Implementación</h3>
                            <ul>
                                <li>Carga de bases de datos</li>
                                <li>Segmentación de contactos</li>
                                <li>Personalización del Pipeline y oportunidades del CRM</li>
                                <li>Configuración de Integraciones Nativas de Escala</li>
                            </ul>

                            <h4>Creación de:</h4>
                            <ul>
                                <li>Formularios</li>
                                <li>Automatizaciones</li>
                                <li>Reportes personalizados</li>
                                <li>Plantillas de WhatsApp API con mensajes guí</li>
                                <li>Plantillas de email y/o landing page con el diseño de la marca del cliente y copy guía</li>
                            </ul>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-card-capacitaciones.png') !!}"
                                alt="">
                            <h3>Capacitaciones <br class="DT_e">
                                privadas y grupales</h3>
                            <p>
                                Una vez el CRM esté <br class="DT_e">
                                configurado y personalizado, <br class="DT_e">
                                tú y tu equipo reciben <br class="DT_e">
                                sesiones de entrenamiento <br class="DT_e">
                                para que aprendan a:
                            </p>
                            <hr class="separator">
                            <ul>
                                <li>Utilizar el CRM en su día a día</li>
                                <li>Hacer cambios a las automatizaciones según lo necesiten</li>
                                <li>Editar el contenido de plantillas</li>
                                <li>Generar reportes</li>
                            </ul>
                            <hr class="separator">
                            <p>
                                Y cualquier otra acción que <br class="DT_e">
                                implique reconfigurar, <br class="DT_e">
                                personalizar o usar el <br class="DT_e">
                                CRM de Escala.
                            </p>
                        </div>

                    </div>

                </section>

        </section>

        <section class="customSection sectionParent landing_acompanamiento_llave_en_mano_5">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="info">
                            <h2 class="title">
                                ¿Cómo luce un cronograma de <br class="DT_e">
                                Implementación Llave en Mano?
                            </h2>

                            <span class="text">
                                Una vez te suscribes a Escala (Día 1), tu asesor comercial coordina la reunión de <br class="DT_e">
                                Kickoff con tu Gerente de Éxito asignado y te enviamos un email de bienvenida con <br class="DT_e">
                                el formulario de diagnóstico. ¡Así inicia tu proceso de implementación!
                            </span>
                        </div>

                        <div class="image">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/img-desktop-cronograma-implementacion.png') }}"
                                loading="lazy">

                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/cronograma-implementacion-llave-en-mano.png') }}"
                                loading="lazy">
                        </div>
                        <div class="imageMb">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/cronograma-implementacion-llave-en-mano-mb.png') }}"
                                loading="lazy">
                        </div>
                    </div>
                </section>

            </div>

        </section>


        <section class="customSection sectionParent landing_acompanamiento_llave_en_mano_6">

            <div class="section-row ">
                <section class="innerSectionElement sct1">

                    <div class="cards left">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-duracion-proceso-implementacion.png') !!}"
                            alt="">
                    </div>

                    <div class="cards right">
                        <h3>Duración del proceso de implementación</h3>
                        <p>
                            El CRM queda implementado usualmente en 30 días.* 
                        </p>
                        <span class="colorSpecial">*Puede variar dependiendo de la complejidad del plan y la participación del cliente.</span>
                    </div>

                </section>

            </div>
        </section>

        <section class="customSection sectionParent landing_acompanamiento_llave_en_mano_7">

            <div class="section-row ">
                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-8-md-aceleradora-desktop.svg') }}')">

                    <div class="cards left">
                        <h3>¿Qué hace Escala para <br class="DT_e">
                            apoyarlos una vez culminada <br class="DT_e">
                            la implementación?</h3>
                        <ul>
                            <li><img src="{!! App::setFilePath('/assets/images/icons/check-crm-li.svg') !!}"> <span> Monitorea el uso que le dan a la plataforma</span></li>
                            <li><img src="{!! App::setFilePath('/assets/images/icons/check-crm-li.svg') !!}"> <span> Los contactará para conocer su nivel de <br class="DT_e"> satisfacción</span></li>
                            <li><img src="{!! App::setFilePath('/assets/images/icons/check-crm-li.svg') !!}"> <span> Coordinará reuniones trimestrales con su <br class="DT_e"> Gerente de Éxito para evaluar resultados a <br class="DT_e"> la fecha y apoyarlos a definir próximos <br class="DT_e"> planes con Escala</span></li>
                            <li><img src="{!! App::setFilePath('/assets/images/icons/check-crm-li.svg') !!}"> <span> Los invitará a participar en capacitaciones y <br class="DT_e"> eventos especiales</span></li>
                            <li><img src="{!! App::setFilePath('/assets/images/icons/check-crm-li.svg') !!}"> <span> Estará disponible por WhatsApp y chat de <br class="DT_e"> plataforma para atender a preguntas y <br class="DT_e"> necesidades</span></li>
                            <li><img src="{!! App::setFilePath('/assets/images/icons/check-crm-li.svg') !!}"> <span> Anunciará actualizaciones y nuevas <br class="DT_e"> funcionalidades de la plataforma</span></li>
                        </ul>

                    </div>

                    <div class="cards right">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/chica-ventas-escala-apoyo.png') !!}"
                            alt="">
                    </div>
                </section>

            </div>
        </section>


        <section class="customSection sectionParent landing_acompanamiento_llave_en_mano_8">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        Recursos Escala Academy
                    </h2>
                    <p>Además de las capacitaciones privadas, en Escala <br class="DT_e">
                        Academy encuentras una variedad de recursos <br class="DT_e">
                        educativos para que tú y tu equipo aprendan a usar cada <br class="DT_e">
                        una de las herramientas de Escala.</p>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-cursos-online-autoguiados-2.png') !!}"
                                alt="">
                            <h3>Cursos online <br class="DT_e">
                                autoguiados</h3>
                            <p>
                                ¿Prefieres aprender a tu <br class="DT_e">
                                propio ritmo? En Escala <br class="DT_e">
                                encuentras una serie de <br class="DT_e">
                                cursos por herramienta para <br class="DT_e">
                                conozcas su alcance y <br class="DT_e">
                                funcionamiento.
                            </p>
                        </div>
                        <hr class="lineCards">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-cursos-online-autoguiados-3.png') !!}"
                                alt="">
                            <h3>200+ Tutoriales <br class="DT_e">
                                técnicos</h3>
                            <p>
                                Para responder preguntas <br class="DT_e">
                                puntuales sobre cada <br class="DT_e">
                                herramienta, encuentra una <br class="DT_e">
                                librería de artículos y breves <br class="DT_e">
                                videos que actualizamos <br class="DT_e">
                                constantemente.
                            </p>
                        </div>



                    </div>

                </section>

        </section>

        <section class="customSection sectionParent landing_acompanamiento_llave_en_mano_9">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">
                        <img class="img-chat" src="{!! App::setFilePath('/assets/images/illustrations/others/icon-chat-en-linea.png') !!}"
                            loading="lazy">
                        <h2 class="title">
                            Chat de soporte técnico en vivo
                        </h2>
                        <span>
                            ¿Prefieres hacer preguntas o que atendamos a tus necesidades puntuales en vivo? <br class="DT_e">
                            Escríbenos por WhatsApp o Chat de plataforma en los siguientes horarios. <br class="DT_e">
                            ¡Nuestro equipo es amable, eficiente y resolutivo!
                        </span>
                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 cardParent">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row timeFlags">
                                            <div class="col-md-12 title-block">
                                                <p class="text-day">De Lunes a Viernes:</p>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <div class="container-flags">
                                                    <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/banderas_mex_.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                <p class="text-time">6 am - 6 pm</p>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <div class="container-flags">
                                                    <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/horario_col_per_usa_cr.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                <p class="text-time">7 am - 7 pm</p>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <div class="container-flags ">
                                                    <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/bandera_ven.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                <p class="text-time">8 am - 8 pm</p>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <div class="container-flags">
                                                    <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/banderas_arg_uru_chil.png') !!}"
                                                        loading="lazy">
                                                </div>
                                                <p class="text-time">9 am - 9 pm</p>
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


        <section class="customSection sectionParent landing_acompanamiento_llave_en_mano_10" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-9-aceleradora-desktop.svg') }}')">
            <div class="section-row ">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/img-ceo-alfonzo-section-9 (1).png') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                ¡Consigue resultados <br class="DT_e">
                                más fácil y rápido <br class="DT_e">
                                con Escala!
                            </h2>
                        </div>
                    </section>



                </div>
            </div>
        </section>
    </div>

</div>
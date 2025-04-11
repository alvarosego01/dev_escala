<div id="landing_acompanamiento_aceleradora">
    <div class="sections">

        <section id="lead-form"
            class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_acompanamiento_aceleradora_0 ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section1_acompañamiento_ningun_otro_crm.svg') }}')"
                class="backgroundFull">
                <div class="section-row">

                    <section class="innerSectionElement sct1">
                        <div class="containElements">
                            <span> Servicio de Implementación Guiada</span>
                            <h1 class="principalBigTitle">
                                Adapta el CRM de Escala a las necesidades de tu <br class="DT_e">
                                empresa bajo la guía privada de nuestros expertos
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

                                        <video class="video-js video_1 videoCover">
                                            <source src="{{ $videoCover }}" type="video/mp4">
                                            Tu navegador no soporta videos HTML5.
                                        </video>

                                        <video id="video_1" class="video-js video_1" controls
                                            preload="none" poster="{{ $videoCover }}"
                                            {{-- poster="MY_VIDEO_POSTER.jpg" --}}
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

                                    <script type="text/javascript">
                                        var player = videojs('video_1');

                                        // Agrega un oyente de eventos al evento 'play'
                                        player.on('play', function() {

                                            jQuery('.video_1.videoCover').remove();

                                        });
                                    </script>

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

        <section class="customSection sectionParent landing_acompanamiento_aceleradora_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg_cards_acompañamiento_aceleradora_1.svg') !!}')">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/im_card_acompañamiento_aceleradora_1.png') !!}"
                                alt="">
                            <h3>Gana mayor <br class="DT_e">
                                conocimiento y control</h3>
                            <p>
                                Al configurar el CRM por tu
                                cuenta, entiendes mejor
                                cómo funciona, permitiéndote adaptarlo continuamente a las necesidades de tu negocio
                                sin depender de terceros.
                            </p>
                        </div>
                        <div class="cards" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg_cards_acompañamiento_aceleradora_2.svg') !!}')">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/im_card_acompañamiento_aceleradora_2.png') !!}"
                                alt="">
                            <h3>Realiza ajustes <br class="DT_e">
                                más rápidamente</h3>
                            <p>
                                Al saber personalizar el
                                CRM, ganas flexibilidad para realizar cambios y experimentar con nuevas configuraciones sin esperar la disponibilidad de un tercero.
                            </p>
                        </div>
                        <div class="cards" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg_cards_acompañamiento_aceleradora_3.svg') !!}')">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/im_card_acompañamiento_aceleradora_3.png') !!}"
                                alt="">
                            <h3>Ahorra <br class="DT_e">
                                costos</h3>
                            <p>
                                Evita incurrir en gastos
                                adicionales y recurrentes al contratar a un tercero que implemente y realice ajustes por ti.
                            </p>
                        </div>

                    </div>

                </section>


            </div>

        </section>

        <section class="customSection sectionParent landing_acompanamiento_aceleradora_2">

            <div class="section-row ">
                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_ceo_escala.svg') }}')">

                    <div class="cards left">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_ceo_alfonso_escala.png') !!}"
                            alt="">
                    </div>
                    <div class="cards right">
                        <p>
                            <span>"Contar con alguien clave que adapte el CRM <br class="DT_e">
                                a las necesidades y operaciones del negocio marca la <br class="DT_e">
                                diferencia.</span>
                            En Escala, ayudamos a acelerar la curva de <br class="DT_e">
                            aprendizaje de esa persona esencial en las empresas de <br class="DT_e">
                            nuestros clientes, para que aprovechen al máximo su <br class="DT_e">
                            CRM desde el primer día"
                        </p>
                        <span class="colorSpecial">Alfonso Santiago, CEO de Escala</span>
                    </div>

                </section>

            </div>
        </section>



        <section class="customSection sectionParent landing_acompanamiento_aceleradora_3">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        La Implementación Guiada es ideal <br class="DT_e">
                        para tu empresa si prefieren...
                    </h2>
                    <ul>
                        <li><img src="{!! App::setFilePath('/assets/images/icons/check-crm-li.svg') !!}">
                            <span>Tener los conocimientos internos a la empresa <br class="DT_e">
                                sobre cómo configurar el CRM de Escala.</span>
                        </li>
                        <li><img src="{!! App::setFilePath('/assets/images/icons/check-crm-li.svg') !!}">
                            <span>Recibir orientación personalizada y privada de Escala para <br class="DT_e">
                                que tú y tu equipo personalicen el CRM exitosamente.
                            </span>
                        </li>
                    </ul>
                </section>

        </section>


        <section class="customSection sectionParent landing_acompanamiento_aceleradora_4">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        ¿Qué incluye la <br class="DT_e">
                        Implementación Guiada?
                    </h2>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-sesiones-privadas-con-gerente.png') !!}"
                                alt="">
                            <h3>Sesiones privadas <br class="DT_e">
                                con Gerente de <br class="DT_e">
                                Éxito asignado</h3>
                            <p>
                                Tu principal punto de contacto con Escala, se reúne contigo y equipo para entender necesidades, apoyarles a definir un plan de implementación con Escala y guiarlos en su ejecución.
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-sesiones-privadas.png') !!}"
                                alt="">
                            <h3>Sesiones privadas <br class="DT_e">
                                con Guías Técnicos</h3>
                            <p>
                                Expertos en cada herramienta de Escala, se reúnen contigo y tu equipo para asegurar que configuren efectivamente la plataforma según el plan acordado.
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-chat-soporte.png') !!}"
                                alt="">
                            <h3>Chat con soporte <br class="DT_e">
                                técnico ilimitado</h3>
                            <p>
                                Nuestro equipo de servicio al cliente atiende eficientemente preguntas puntuales por WhatsApp o chat de plataforma.
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-cursos-online-autoguiados.png') !!}"
                                alt="">
                            <h3>Cursos online <br class="DT_e">
                                autoguiados</h3>
                            <p>
                                ¿Prefieres aprender a tu propio ritmo? En Escala encuentras una serie de cursos por herramienta para conozcas su alcance y funcionamiento.
                            </p>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-plantillas-prediseñadas.png') !!}"
                                alt="">
                            <h3>Plantillas diseñadas <br class="DT_e">
                                para tu marca</h3>
                            <p>
                                De necesitarlo, nuestro equipo creativo crea plantillas de email y/o landing page con los recursos de tu marca para ahorrarte gran parte del trabajo de edición.
                            </p>
                        </div>


                    </div>

                </section>

        </section>

        <section class="customSection sectionParent landing_acompanamiento_aceleradora_5">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="info">
                            <h2 class="title">
                                ¿Cómo luce un cronograma <br class="DT_e">
                                de Implementación Guiada?
                            </h2>

                            <span class="text">
                                Una vez te suscribes a Escala (Día 1), tu asesor comercial coordina la reunión de <br class="DT_e">
                                Kickoff con tu Gerente de Éxito asignado y te enviamos un email de bienvenida con <br class="DT_e">
                                acciones y recursos sugeridos para que empieces a implementar con éxito.
                            </span>
                        </div>

                        <div class="image">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/img-desktop-cronograma-implementacion.png') }}"
                                loading="lazy">

                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/img-desktop-cronograma-implementacion-2.png') }}"
                                loading="lazy">
                        </div>
                        <div class="imageMb">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/img-mb-cronograma-implementacion.png') }}"
                                loading="lazy">
                        </div>
                    </div>
                </section>

            </div>

        </section>


        <section class="customSection sectionParent landing_acompanamiento_aceleradora_6">

            <div class="section-row ">
                <section class="innerSectionElement sct1">

                    <div class="cards left">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-duracion-proceso-implementacion.png') !!}"
                            alt="">
                    </div>

                    <div class="cards right">
                        <h3>Duración del proceso de implementación</h3>
                        <p>
                            En promedio, nuestros clientes tardan 45 días en <br class="DT_e">
                            completar su plan de implementación.*
                        </p>
                        <span class="colorSpecial">*Puede variar dependiendo de la complejidad del plan y la participación del cliente.</span>
                    </div>

                </section>

            </div>
        </section>

        <section class="customSection sectionParent landing_acompanamiento_aceleradora_7">

            <div class="section-row ">
                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-implementacion-apoyo-escala-1.svg') }}')">

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


        <section class="customSection sectionParent landing_acompanamiento_aceleradora_8">

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

        <section class="customSection sectionParent landing_acompanamiento_aceleradora_9">

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


        <section class="customSection sectionParent landing_acompanamiento_aceleradora_10" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section10_acompañamiento_ningun_otro_crm.svg') }}')">
            <div class="section-row ">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/ceo_escala_2025.png') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                ¡Ningún otro CRM te <br class="DT_e">
                                acompaña mejor!
                            </h2>
                        </div>
                    </section>



                </div>
            </div>
        </section>
    </div>

</div>
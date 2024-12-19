<div id="casoExito_taller_5">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol casoExito_taller_5_0 newHome ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_header_caso_de_exito_taller-5.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info
                                                col-md-12 col-lg-8
                                            ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/person/img_chico_feliz_taller_5_escala_caso_de_exito.png') !!}" alt="Ilustración taller 5 " loading="lazy">

                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_taller_5_caso_de_exito.png') !!}" alt="" class="logo-img" loading="lazy">
                                            <small><span>Caso de éxito: Educación</span></small>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            <span class="blueColor">
                                                Esta universidad, líder en <br class="DT_e">
                                                formación artística,
                                            </span>
                                            <span class="span2">
                                                incrementó sus ingresos en <br class="DT_e">
                                                más del 50% con Escala <br class="DT_e">
                                                CRM en menos de 6 meses
                                            </span>


                                        </p>

                                    </div>

                                </div>



                            </div>
                            <div class="form7
                                                        col-md-12 col-lg-4
                                                ">
                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">


                                        <h5 class="titleFormat blackcolor"> Recibe un demo <br class="space">
                                            personalizado en vivo</h5>


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

                            <div class=" ele3 col-md-12 col-lg-6">

                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/person/img_chico_feliz_taller_5_escala_caso_de_exito.png') !!}" alt="Ilustración taller 5 " loading="lazy">
                                </div>

                            </div>



                        </div>

                    </section>

                </div>



            </div>

        </section>

        <section class="customSection sectionParent casoExito_taller_5_1">

            <div class="section-row">

                <section class="innerSectionElement">
                    <h2 class="primaryTitle">¿Qué más han logrado con Escala?</h2>

                    <div class="containElements">
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Duplicaron
                                </span>
                            </div>
                            <p class="text">
                                la velocidad de <br class="DT_e">
                                respuesta a prospectos
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Duplicaron
                                </span>
                            </div>
                            <p class="text">
                                su eficiencia y organización en <br class="DT_e">
                                la gestión de leads y clientes
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Redujeron
                                </span>
                            </div>
                            <p class="text">
                                sus costos operativos
                            </p>
                        </div>
                    </div>

                </section>

            </div>

        </section>
        <section class="component-info-text-video-T1 customSection sectionParent casoExito_taller_5_2 ">
            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            ¿Qué dice el líder de Comunicaciones <br class="DT_e">
                            y Marketing sobre Escala?
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <img src="{!! App::setFilePath('/assets/images/overlays/overlay_sky_1.png') !!}" alt="" class="overlaySky1">

                        <div class="video col-md-12">

                            @php
                            $videoEmbed = App::setFilePath('/assets/videos/caso_de_exito_video_miller_romero_taller_5.mp4');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/miller_moreno_img_overlay_video.png');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_taller_5_3">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">
                                Sobre Taller 5
                            </h3>

                            <p class="text">
                                Taller 5 es una institución universitaria colombiana <br class="DT_e">
                                reconocida por sus programas de alta calidad en <br class="DT_e">
                                artes y diseño, que impulsa la creatividad y el <br class="DT_e">
                                crecimiento profesional de sus estudiantes.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/industria_salud_icon_orange.png') !!}" alt=""></div>
                                        <strong>Industria:</strong> Educación
                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/tamaño_icon_orange.png') !!}" alt=""></div>
                                        <strong>Tamaño:</strong> 13 - 50 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/locacion_icon_orange.png') !!}" alt=""></div>
                                        <strong>Locación:</strong> Bogotá, Chía y Cali, Col.

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/website_icon_orange.png') !!}" alt=""></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://www.taller5.edu.co/">www.taller5.edu.co/</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_taller_5_4">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_5_caso_de_exito_taller-5.svg') }}')" class="backgroundFull">

                <div class="section-row">
                    <div class="containElements">

                        <section class="innerSectionElement sct1">
                            <img src="{!! App::setFilePath('/assets/images/person/img_centro_chica_trabajando_feliz_taller_5_escala_caso_de_exito.png') !!}" alt="">

                            <h2 class="primaryTitle">
                                Las herramientas de Escala que utilizan
                            </h2>

                        </section>

                        <section class="innerSectionElement sct2">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm_icon_escala.png') !!}" alt="">
                                        <span><span class="title">CRM</span>para organizar y centralizar información de prospectos y estudiantes, facilitando el seguimiento.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/email_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Email Marketing </span>para diseñar campañas personalizadas que aumenten la conversión.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Whatsapp Inbox</span> para mejorar la comunicación con respuestas rápidas y automatizadas.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/ads_icon_escala.png') !!}" alt="">
                                        <span><span class="title">Anuncios digitales</span> para medir el rendimiento de campañas y optimizar resultados en tiempo real.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Flujos Automatizados</span> para eliminar tareas repetitivas, ahorrando tiempo y recursos.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_planificador_embudos.png') !!}" alt="">
                                        <span> <span class="title">Planificador de Embudos</span> para organizar estrategias de captación y seguimiento en embudos claros.</span>
                                    </li>


                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Landing pages </span> personalizadas y optimizadas por programa educativo, para captar prospectos efectivamente.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Reportes Personalizados</span>para obtener métricas clave y tomar decisiones estratégicas.</span>
                                    </li>
                                    <li>

                                    </li>


                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/app_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Escala App</span> para acceder al CRM y herramientas de Escala desde cualquier lugar.</span>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="innerSectionElement sct3">

                            <h2 class="primaryTitle">
                                El desafío antes de Escala:
                            </h2>
                            <span class="subTitle">
                                Taller 5 enfrentaba retos operativos y organizativos que <br class="DT_e">
                                reducían la efectividad de sus procesos comerciales:
                            </span>

                            <div class="containElements left">
                                <div class="image">
                                    <div class="containerImage">
                                        <img src="{!! App::setFilePath('/assets/images//illustrations/otto/otto_incognito_desafio.png') !!}" alt="">
                                    </div>
                                </div>
                                <div class="info">
                                    <ul>
                                        <li>
                                            <span>
                                                Dependencia de herramientas manuales<br class="DT_e">
                                            </span>
                                            como Excel y Google Drive, donde toda la <br class="DT_e">
                                            información se registraba sin estadísticas ni <br class="DT_e">
                                            automatización, dificultando el seguimiento de <br class="DT_e">
                                            prospectos y estudiantes.
                                        </li>

                                        <li>
                                            <span>
                                                Falta de un sistema centralizado <br class="DT_e">
                                            </span>
                                            accesible a todo el equipo, para <br class="DT_e">
                                            consultar y hacer seguimiento a <br class="DT_e">
                                            estudiantes y prospectos.
                                        </li>

                                        <li>
                                            <span>Uso de un software a la medida
                                            </span>
                                            gestionado <br class="DT_e">
                                            por una sola persona, lo que retrasaba las <br class="DT_e">
                                            operaciones y reducía la eficiencia del equipo.
                                        </li>
                                        <li>
                                            <span>Falta de visibilidad en las campañas de <br class="DT_e"> marketing
                                            </span>
                                            por lo que no podían medir en <br class="DT_e">
                                            tiempo real el rendimiento de las campañas <br class="DT_e">
                                            digitales ni identificar qué estrategias son efectivas.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent casoExito_taller_5_5">

            <div class="section-row">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <h2 class="primaryTitle">
                            ¿Cómo utilizaron Escala para mejorar <br class="DT_e">
                            sus resultados de marketing y venta?
                        </h2>

                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containElements left">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/email-mkt.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>1</span>
                                    <h3 class="subTittle">
                                        Email Marketing y WhatsApp integrados al CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Cuando un prospecto de Taller 5 solicita información, su contacto se registra automáticamente en el CRM. Se activan comunicaciones personalizadas por email y WhatsApp según sus intereses. Además, se asignan etiquetas para organizarlo y darle seguimiento de manera efectiva. Este proceso optimiza la experiencia del prospecto, asegurando que reciba la atención adecuada en cada etapa.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejoraron la eficiencia en la gestión de prospectos</li>
                                        <li>Aumentaron la conversión con seguimientos más personalizados</li>
                                        <li>Optimizaron la experiencia de cada prospecto, <br class="DT_e">
                                            mejorando el cierre de ventas</li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-(2).gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>2</span>
                                    <h3 class="subTittle">
                                        Flujos automatizados de asignación
                                        automática de leads:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Cuando se recibe un nuevo prospecto, el CRM asigna
                                        automáticamente el contacto al vendedor correspondiente
                                        según la sede de estudio del interesado. Esto permite que
                                        el equipo comercial se enfoque más en cerrar ventas y menos en tareas operativas.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Aumentaron la productividad del equipo comercial</li>
                                        <li>Mejoraron la eficiencia en la asignación de leads</li>
                                        <li>Incrementaron las ventas al reducir el <br class="DT_e">
                                            tiempo dedicado a tareas operativas</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/landing-page.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>3</span>
                                    <h3 class="subTittle">
                                        Landing Pages y formularios <br class="DT_e">
                                        segmentados por interés:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Para sus campañas en Google Ads y Meta, Taller 5 utiliza
                                        landing pages y formularios específicos según el interés
                                        de cada prospecto. Esto asegura que al registrarse,
                                        reciban comunicaciones alineadas con su interés. 
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejoraron la calidad de los leads generados</li>
                                        <li>Optimizaron la comunicación y conversión</li>
                                        <li>Aumentaron la efectividad de sus campañas publicitarias</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements right special">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/5.reports_Vista-simplificada-(1).gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>4</span>
                                    <h3 class="subTittle">
                                        Uso embudos de ventas y reportes <br class="DT_e">
                                        personalizados:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">

                                        Taller 5 utiliza el planificador de embudos de Escala y
                                        los reportes personalizados para monitorear cada
                                        etapa de sus procesos comerciales en tiempo real.
                                        Esto les permite identificar rápidamente áreas de
                                        mejora y ajustar sus estrategias con mayor agilidad.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Monitoreo en tiempo real del rendimiento comercial</li>
                                        <li>Ajuste rápido de estrategias para mejorar resultados</li>
                                        <li>Toma de mejores decisiones gracias a la visibilidad <br class="DT_e">
                                            detallada del rendimiento del equipo y de los prospectos.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/Anuncios-Digitales-(1).gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>5</span>
                                    <h3 class="subTittle">
                                        Integración de anuncios de Meta con Escala:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        A través de esta integración se sincronizan automáticamente
                                        los leads generados en las campañas publicitarias.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Agilizaron el flujo de leads desde los anuncios hacia el CRM.</li>
                                        <li>Mejoraron la tasa de respuesta al reducir el tiempo entre
                                            la captación del lead y el primer contacto.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </section>

                </div>
            </div>

        </section>




        <section class="customSection sectionParent casoExito_taller_5_6">

            <div class="section-row">


                <section class="innerSectionElement sct1">
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_section_9_taller_5.png') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_miller_romero_taller_5_escala_caso_de_exito.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    “Recomiendo ampliamente Escala, es una <br class="DT_e">
                                    herramienta que no solo organiza nuestro <br class="DT_e">
                                    proceso comercial, sino que nos permite hacer <br class="DT_e">
                                    un seguimiento preciso de cada prospecto y <br class="DT_e">
                                    alumno. Su equipo de soporte siempre está <br class="DT_e">
                                    ahí, acompañándonos y facilitando cada paso. <br class="DT_e">
                                    Escala ha sido un gran aliado para mejorar <br class="DT_e">
                                    nuestra operación, automatizar tareas y <br class="DT_e">
                                    optimizar nuestra inversión en marketing”. <br class="DT_e">
                                    <br class="space">
                                    <span class="blue">
                                        Miller Romero <br class="space">
                                        <span>Coordinador de Comunicaciones y Mercadeo</span>
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_taller_5_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_10_caso_de_exito_taller-5.svg') }}')">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/escalanauta-volador-seccion-10.png') !!}"
                            loading="lazy">
                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">
                        <h2 class="title">
                            ¿Listo para alcanzar resultados similares en tu negocio?
                        </h2>
                    </div>
                </section>
                <section class="innerSectionElement sct3">

                    <div class="btnCenter">

                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibe un demo de Escala
                        </a>
                    </div>
                </section>

            </div>

        </section>






    </div>

</div>
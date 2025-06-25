<div id="casoExito_real_de_los_cues">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol casoExito_real_de_los_cues_0 newHome ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_1_real_de_los_cues.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info
                                                col-md-12 col-lg-8
                                            ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/person/chic_sonriendo_entregando_llaves_casos_exito.png') !!}" alt="Ilustración Real de los cues" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_real_de_los_cues.png') !!}" alt="" class="logo-img" loading="lazy">
                                            <small><span>Caso de éxito:</span><span class="span2"> Bienes Raíces</span></small>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            <span class="whiteColor">
                                                Real de los Cues,
                                            </span>
                                            <span class="span2">
                                                aumentó un 30% sus <br class="DT_e">
                                                ventas del canal digital
                                            </span>
                                            <span class="span3">
                                                con el CRM de Escala
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


                                        <h5 class="titleFormat blackcolor"> Conoce Escala en una <br class="space"> sesión personalizada</h5>


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
                                    <img src="{!! App::setFilePath('/assets/images/person/chic_sonriendo_entregando_llaves_casos_exito.png') !!}" alt="Ilustración real de los cues" loading="lazy">

                                </div>

                            </div>



                        </div>

                    </section>

                </div>



            </div>

        </section>

        <section class="customSection sectionParent casoExito_real_de_los_cues_1">

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
                                la eficiencia del <br class="DT_e">
                                equipo comercial
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Incrementaron
                                </span>
                            </div>
                            <p class="text">
                                el número de <br class="DT_e">
                                prospectos generados
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Mejoraron
                                </span>
                            </div>
                            <p class="text">
                                la visibilidad y el control <br class="DT_e">
                                del proceso de ventas
                            </p>
                        </div>
                    </div>

                </section>

            </div>

        </section>
        <section class="component-info-text-video-T1 customSection sectionParent casoExito_real_de_los_cues_2 ">
            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            ¿Qué dice el Director Comercial <br class="DT_e">
                            sobre Escala?
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <img src="{!! App::setFilePath('/assets/images/overlays/overlay_sky_1.png') !!}" alt="" class="overlaySky1">

                        <div class="video col-md-12">

                            @php
                            $videoEmbed = App::setFilePath('/assets/videos/real_de_los_cues_video_testimonial.mp4');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/rene_cordero_img_overlay_video.png');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_real_de_los_cues_3">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">
                                Sobre Real de los Cues:
                            </h3>

                            <p class="text">
                                Es una compañía que ofrece terrenos residenciales <br class="DT_e">
                                y comerciales, destacándose por su entorno <br class="DT_e">
                                natural y servicios exclusivos.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/industria_salud_icon_orange.png') !!}" alt=""></div>
                                        <strong>Industria:</strong> Bienes Raíces

                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/tamaño_icon_orange.png') !!}" alt=""></div>
                                        <strong>Tamaño:</strong> 51 - 100 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/locacion_icon_orange.png') !!}" alt=""></div>
                                        <strong>Locación:</strong> Querétaro, Mx.

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/website_icon_orange.png') !!}" alt=""></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://www.realdeloscues.com">www.realdeloscues.com</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_real_de_los_cues_4">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_5_real_de_los_cues.svg') }}')" class="backgroundFull">

                <div class="section-row">
                    <div class="containElements">

                        <section class="innerSectionElement sct1">
                            <img src="{!! App::setFilePath('/assets/images/person/img_central_real_de_los_cues_caso_exito_.png') !!}" alt="">

                            <h2 class="primaryTitle">
                                Las herramientas de Escala que utilizan
                            </h2>

                        </section>

                        <section class="innerSectionElement sct2">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm_icon_escala.png') !!}" alt="">
                                        <span><span class="title">CRM</span> para almacenar y gestionar la información de prospectos interesados en terrenos.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/email_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Email Marketing </span> para enviar información segmentada a prospectos y clientes.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Flujos Automatizados</span> para ahorrar tiempo en el envío de comunicaciones y procesos rutinarios.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Reportes Personalizados</span> para monitorear el rendimiento de los asesores y los resultados de ventas.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Landing pages </span> para crear páginas específicas sobre proyectos de mayor interés.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Whatsapp Inbox</span> para centralizar y automatizar la comunicación con sus prospectos y clientes.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/ads_icon_escala.png') !!}" alt="">
                                        <span><span class="title">Anuncios digitales</span> integrados a Escala para medir el rendimiento de campañas de marketing.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/app_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Escala App</span> para acceder a la herramienta desde cualquier lugar y tener un mejor seguimiento y gestión del proceso de ventas.</span>
                                    </li>




                                </ul>
                            </div>
                        </section>
                        <section class="innerSectionElement sct3">

                            <h2 class="primaryTitle">
                                El desafío antes de Escala:
                            </h2>
                            <span class="subTitle">
                                Real de los Cues enfrentaba algunos desafíos <br class="DT_e">
                                en el desarrollo de su operación comercial:
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
                                                Falta de organización en la gestión de prospectos: <br class="DT_e">
                                            </span>
                                            El bajo uso de una herramienta previa los obligó a <br class="DT_e">
                                            regresar a métodos manuales, limitando el <br class="DT_e">
                                            crecimiento eficiente y escalable.
                                        </li>

                                        <li>
                                            <span>
                                                Ausencia de reportes y métricas:
                                            </span>
                                            Dado<br class="DT_e">
                                            que no contaban con herramientas de  análisis,<br class="DT_e">
                                            no podían evaluar el desempeño del equipo <br class="DT_e">
                                             ni tomar decisiones basadas en datos.
                                        </li>

                                        <li>
                                            <span>Falta de integración:
                                            </span>
                                            La ausencia de una <br class="DT_e">
                                            plataforma centralizada dificultaba gestionar <br class="DT_e">
                                            prospectos de múltiples canales, generando <br class="DT_e">
                                            confusión en el seguimiento.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent casoExito_real_de_los_cues_5">

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
                                        CRM para la gestión de prospectos:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Con Escala, comenzaron a gestionar <br class="DT_e">
                                        la información de prospectos de manera <br class="DT_e">
                                        centralizada, lo que permitió organizar y actualizar <br class="DT_e">
                                        toda la data según sus intereses de compra.</p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejoraron la eficiencia del equipo comercial.</li>
                                        <li>Optimizaron la atención al cliente.</li>
                                        <li>Facilitaron la priorización de prospectos.</li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/caso_de_exito_crm.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>2</span>
                                    <h3 class="subTittle">
                                        Flujos Automatizados:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">

                                        Simplificaron tareas repetitivas como la asignación de <br class="DT_e">
                                        prospectos a los asesores comerciales y segmentaron <br class="DT_e">
                                        intereses con etiquetas, permitiendo comunicaciones <br class="DT_e">
                                        personalizadas y relevantes.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Aumentaron la capacidad operativa.</li>
                                        <li>Redujeron el tiempo dedicado a tareas repetitivas.</li>
                                        <li>Mejoraron la tasa de conversión de prospectos.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-casos-exito.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>3</span>
                                    <h3 class="subTittle">
                                        Landing Pages segmentadas por proyecto:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Crearon páginas de aterrizaje específicas para
                                        sus proyectos más destacados, facilitando la
                                        captación de prospectos interesados en terrenos
                                        residenciales y comerciales.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Incrementaron la tasa de conversión de visitas a prospectos realmente interesados.</li>
                                        <li>Aumentaron las ventas al segmentar mejor sus campañas.</li>
                                        <li>Mejoraron la generación de leads calificados.</li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/5.reports_Vista-simplificada-(1).gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>4</span>
                                    <h3 class="subTittle">
                                        Reportes Personalizados:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Utilizaron reportes detallados para medir el desempeño
                                        del equipo comercial y evaluar el rendimiento de sus
                                        ventas. Esto les permitió hacer ajustes inmediatos y
                                        enfocar esfuerzos donde más se necesitaban.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Incrementaron la eficiencia del equipo de ventas.</li>
                                        <li>Tomaron decisiones basadas en datos.</li>
                                        <li>Mejoraron el control sobre sus resultados comerciales.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-whatsapp.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>5</span>
                                    <h3 class="subTittle">
                                        Escala App:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">

                                        Tanto el equipo comercial como los directivos, utilizaron la <br class="DT_e">
                                        app de Escala para gestionar sus procesos de ventas <br class="DT_e">
                                        desde cualquier lugar, lo que permitió un mayor control y<br class="DT_e">
                                        seguimiento continuo.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Permitió a los asesores comerciales estar siempre <br class="DT_e">
                                            conectados, mejorando la capacidad de respuesta en ventas.</li>
                                        <li>Facilitó la toma de decisiones en tiempo real, al permitir a <br class="DT_e">
                                            los líderes monitorear el progreso de ventas y desempeño <br class="DT_e">
                                            de los asesores desde cualquier lugar.</li>
                                        <li>Ayudó a reducir tiempos de espera en las aprobaciones y <br class="DT_e">
                                            seguimientos, al centralizar toda la información clave de <br class="DT_e">
                                            ventas en un solo lugar.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </section>

                </div>
            </div>

        </section>




        <section class="customSection sectionParent casoExito_real_de_los_cues_6">

            <div class="section-row">


                <section class="innerSectionElement sct1">
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_section_9_real_de_los_cues.svg') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/rene_cordero_gerente_ventas.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    “Desde que implementamos Escala, nuestra eficiencia <br class="DT_e">
                                    comercial ha mejorado significativamente. La capacidad de <br class="DT_e">
                                    administrar y dar seguimiento a los prospectos ha <br class="DT_e">
                                    optimizado el trabajo de nuestro equipo, aumentando <br class="DT_e">
                                    nuestras ventas. La automatización y la asignación de <br class="DT_e">
                                    leads nos han permitido ser mucho más efectivos, <br class="DT_e">
                                    especialmente con un equipo de 50 asesores comerciales. <br class="DT_e">
                                    Además, los reportes y la atención personalizada han sido <br class="DT_e">
                                    clave para medir la eficiencia y mejorar los resultados”.
                                    <br class="space">
                                    <br class="space">
                                    <span class="blue">
                                        René Cordero
                                        <br class="space">
                                        <span> Director Comercial Real de los Cues </span>
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_real_de_los_cues_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_10_real_de_los_cues.svg') }}')">

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
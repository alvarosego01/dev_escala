<div id="casoExito_real_de_los_cues">
    <div class="sections">


        <section id="lead-form" class="hero2025 casoExito_real_de_los_cues_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-0.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <div class="imgTop">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_real_de_los_cues.webp') !!}" alt="Logo Real de los Cues" class="logo-img" loading="lazy">
                                <span>
                                    Caso de éxito: Bienes Raíces
                                </span>
                            </div>
                            <h1 class="principalBigTitle">
                                Real de los Cues, <br class="DT_e">
                                aumentó un 30% <br class="DT_e">
                                sus ventas del canal digital
                                con el CRM <br class="DT_e">
                                de Escala
                            </h1>
                        </div>
                        <div class="containerImage">
                            <img alt="Joven feliz entregando llaves en Real de los Cues" src="{!! App::setFilePath('/assets/images/illustrations/others/chic_sonriendo_entregando_llaves_casos_exito.webp') !!}" loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Joven feliz entregando llaves en Real de los Cues" src="{!! App::setFilePath('/assets/images/illustrations/others/chic_sonriendo_entregando_llaves_casos_exito.webp') !!}" loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct3">
                        <div class="form7">
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
                                    2X
                                </span>
                            </div>
                            <p class="text">
                                la eficiencia del equipo comercial
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Incrementaron
                                </span>
                            </div>
                            <p class="text">
                                el número de prospectos generados
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Mejoraron
                                </span>
                            </div>
                            <p class="text">
                                la visibilidad y el control del proceso de ventas
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
                            ¿Qué dice el Director Comercial <br class="space"> sobre Escala?
                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="video">
                        @php
                        $videoEmbed = App::setFilePath('/assets/videos/real_de_los_cues_video_testimonial.mp4');
                        $videoCover = App::setFilePath('/assets/images/illustrations/others/rene_cordero_img_overlay_video.webp');
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
                                Es una compañía que ofrece terrenos <br class="DT_e">
                                residenciales y comerciales, destacándose <br class="DT_e">
                                por su entorno natural y servicios exclusivos.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-industria.webp') !!}" alt="Icono industria bienes raíces"></div>
                                        <strong>Industria:</strong> Bienes Raíces

                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-tamaño.webp') !!}" alt="Icono tamaño empresa 51-100 empleados"></div>
                                        <strong>Tamaño:</strong> 51 - 100 empleados

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-locacion.webp') !!}" alt="Icono ubicación Querétaro México"></div>
                                        <strong>Locación:</strong> Querétaro, Mx.


                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-wensite.webp') !!}" alt="Icono sitio web Real de los Cues"></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://www.realdeloscues.com">
                                            www.realdeloscues.com</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_real_de_los_cues_4">
            <div class="section-row">
                <div class="containElements">

                    <section class="innerSectionElement sct1">
                        <h2 class="primaryTitle">
                            Las herramientas de Escala que utilizan
                        </h2>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containElements">
                            <ul class="itemsList">
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm-icon-list.webp') !!}" alt="Icono CRM Real de los Cues">
                                    <span><span class="title">CRM</span> para almacenar y gestionar la información de prospectos interesados en terrenos.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/email-icon-list.webp') !!}" alt="Icono Email Marketing Real de los Cues">
                                    <span><span class="title">Email Marketing</span> para enviar información segmentada a prospectos y clientes.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos-icon-list.webp') !!}" alt="Icono flujos automatizados Real de los Cues">
                                    <span><span class="title">Flujos Automatizados</span> para ahorrar tiempo en el envío de comunicaciones y procesos rutinarios.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes.icon-list.webp') !!}" alt="Icono reportes personalizados Real de los Cues">
                                    <span><span class="title">Reportes Personalizados</span> para monitorear el rendimiento de los asesores y los resultados de ventas.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing-icon-list.webp') !!}" alt="Icono landing pages Real de los Cues">
                                    <span><span class="title">Landing pages</span> para crear páginas específicas sobre proyectos de mayor interés.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp-icon-list.webp') !!}" alt="Icono WhatsApp Inbox Real de los Cues">
                                    <span><span class="title">Whatsapp Inbox</span> para centralizar y automatizar la comunicación con sus prospectos y clientes.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/anuncios-icon-list.webp') !!}" alt="Icono anuncios digitales Real de los Cues">
                                    <span><span class="title">Anuncios digitales</span> integrados a Escala para medir el rendimiento de campañas de marketing.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/app-icon-list.webp') !!}" alt="Icono Escala App Real de los Cues">
                                    <span><span class="title">Escala App</span> para acceder a la herramienta desde cualquier lugar y tener un mejor seguimiento y gestión del proceso de ventas.</span>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="innerSectionElement sct3">

                        <h2 class="primaryTitle">
                            El desafío antes de Escala:
                        </h2>
                        <span class="subTitle">
                            Real de los Cues enfrentaba algunos desafíos <br class="space">
                            en el desarrollo de su operación comercial:

                        </span>

                        <div class="containElements left" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-4-0.webp') !!}')">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images//illustrations/others/el-desafio-antes-de-escala.webp') !!}" alt="Ilustración desafío antes de Escala en Real de los Cues">
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    <span>
                                        Falta de organización en la gestión de prospectos:
                                    </span>
                                    El bajo uso de una herramienta previa los obligó a regresar a métodos manuales, limitando el crecimiento eficiente y escalable.
                                </p>
                                <p>
                                    <span>
                                        Ausencia de reportes y métricas:
                                    </span>
                                    Dado que no contaban con herramientas de análisis, no podían evaluar el desempeño del equipo ni tomar decisiones basadas en datos.
                                </p>
                                <p>
                                    <span>
                                        Falta de integración:
                                    </span>
                                    La ausencia de una plataforma centralizada dificultaba gestionar prospectos de múltiples canales, generando confusión en el seguimiento.
                                </p>
                            </div>
                        </div>
                    </section>
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
                        <div class="containElements right">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/2. WhatsApp - copia.gif') !!}" alt="GIF integración WhatsApp y CRM Real de los Cues">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        1. CRM para la gestión de prospectos:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Con Escala, comenzaron a gestionar la información de prospectos de manera centralizada, lo que permitió organizar y actualizar toda la data según sus intereses de compra.
                                    </p>
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

                        <div class="containElements left">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-(2).gif') !!}" alt="GIF automatización de asignación de leads Real de los Cues">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        2. Flujos Automatizados:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Simplificaron tareas repetitivas como la asignación de prospectos a los asesores comerciales y segmentaron intereses con etiquetas, permitiendo comunicaciones personalizadas y relevantes.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Aumentaron la capacidad operativa.</li>
                                        <li>Redujeron el tiempo dedicado a tareas repetitivas.</li>
                                        <li>Mejoraron la tasa de conversión de prospectos.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="containElements right">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/landing-page.gif') !!}" alt="GIF landing pages segmentadas Real de los Cues">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        3. Landing Pages segmentadas por proyecto:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Crearon páginas de aterrizaje específicas para sus proyectos más destacados, facilitando la captación de prospectos interesados en terrenos residenciales y comerciales.
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

                        <div class="containElements left ">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/gif_reports.gif') !!}" alt="GIF reportes personalizados Real de los Cues">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        4. Reportes Personalizados:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Utilizaron reportes detallados para medir el desempeño del equipo comercial y evaluar el rendimiento de sus ventas. Esto les permitió hacer ajustes inmediatos y enfocar esfuerzos donde más se necesitaban.
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

                        <div class="containElements right special">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-whatsapp.gif') !!}" alt="GIF integración anuncios digitales Real de los Cues">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        5. Escala App:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Tanto el equipo comercial como los directivos, utilizaron la app de Escala para gestionar sus procesos de ventas desde cualquier lugar, lo que permitió un mayor control y seguimiento continuo.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Permitió a los asesores comerciales estar siempre conectados, mejorando la capacidad de respuesta en ventas.</li>
                                        <li>Facilitó la toma de decisiones en tiempo real, al permitir a los líderes monitorear el progreso de ventas y desempeño de los asesores desde cualquier lugar.</li>
                                        <li>Ayudó a reducir tiempos de espera en las aprobaciones y seguimientos, al centralizar toda la información clave de ventas en un solo lugar.</li>
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
                <section class="innerSectionElement sct1" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-5.webp') !!}')">

                    <div class="containElements">
                        <div class="image">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/rene_cordero_gerente_ventas.webp') !!}" alt="Foto René Cordero Director Comercial Real de los Cues" loading="lazy">
                        </div>
                        <div class="info">
                            <p>
                                “Desde que implementamos Escala, nuestra eficiencia
                                comercial ha mejorado significativamente. La capacidad
                                de administrar y dar seguimiento a los prospectos ha
                                optimizado el trabajo de nuestro equipo, aumentando
                                nuestras ventas. La automatización y la asignación de
                                leads nos han permitido ser mucho más efectivos,
                                especialmente con un equipo de 50 asesores comerciales.
                                Además, los reportes y la atención personalizada han
                                sido clave para medir la eficiencia y mejorar los resultados”.

                                <br class="space">
                                <br class="space">
                                <span class="white">
                                    René Cordero -
                                    <span>
                                        Director Comercial Real de los Cues
                                    </span>
                                </span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_real_de_los_cues_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-2025-casos-exito-7.webp') }}')">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="containElements">
                        <h2 class="title">
                            ¿Listo para alcanzar resultados <br class="space">
                            similares en tu negocio?
                        </h2>
                    </div>
                </section>
                <section class="innerSectionElement sct2">
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Empieza ahora →
                        </a>
                    </div>
                </section>

            </div>

        </section>






    </div>

</div>
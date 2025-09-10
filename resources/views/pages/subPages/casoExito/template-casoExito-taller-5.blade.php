<div id="casoExito_taller_5">
    <div class="sections">


        <section id="lead-form" class="hero2025 casoExito_taller_5_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-0.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <div class="imgTop">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_taller_5_caso_de_exito.webp') !!}" alt="Logo Taller 5 Caso de Éxito" class="logo-img" loading="lazy">
                                <span>Caso de éxito: Educación </span>
                            </div>
                            <h1 class="principalBigTitle">
                                Esta universidad, líder
                                en formación artística, incrementó
                                sus ingresos en más del 50% con
                                Escala CRM en menos de 6 meses
                            </h1>
                        </div>
                        <div class="containerImage">
                            <img alt="Joven feliz usando Escala CRM en Taller 5" src="{!! App::setFilePath('/assets/images/illustrations/others/img_chico_feliz_taller_5_escala_caso_de_exito.webp') !!}" loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Joven feliz usando Escala CRM en Taller 5" src="{!! App::setFilePath('/assets/images/illustrations/others/img_chico_feliz_taller_5_escala_caso_de_exito.webp') !!}" loading="lazy">
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

        <section class="customSection sectionParent casoExito_taller_5_1">

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
                                la velocidad de
                                respuesta a prospectos
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    2X
                                </span>
                            </div>
                            <p class="text">
                                su eficiencia y organización en
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
                            ¿Qué dice el líder de Comunicaciones <br class="space">
                            y Marketing sobre Escala?
                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="video">
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
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-industria.webp') !!}" alt="Icono industria educación"></div>
                                        <strong>Industria:</strong> Educación
                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-tamaño.webp') !!}" alt="Icono tamaño empresa"></div>
                                        <strong>Tamaño:</strong> 13 - 50 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-locacion.webp') !!}" alt="Icono ubicación Taller 5"></div>
                                        <strong>Locación:</strong> Bogotá, Chía y Cali, Col.

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-wensite.webp') !!}" alt="Icono sitio web Taller 5"></div>
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
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm-icon-list.webp') !!}" alt="Icono CRM Escala">
                                    <span><span class="title">CRM</span> para organizar y centralizar información de prospectos y estudiantes, facilitando el seguimiento.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/email-icon-list.webp') !!}" alt="Icono Email Marketing Escala">
                                    <span><span class="title">Email Marketing</span> para diseñar campañas personalizadas que aumenten la conversión.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp-icon-list.webp') !!}" alt="Icono WhatsApp Inbox Escala">
                                    <span><span class="title">Whatsapp Inbox</span> para mejorar la comunicación con respuestas rápidas y automatizadas.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/anuncios-icon-list.webp') !!}" alt="Icono anuncios digitales Escala">
                                    <span><span class="title">Anuncios digitales</span> para medir el rendimiento de campañas y optimizar resultados en tiempo real.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos-icon-list.webp') !!}" alt="Icono flujos automatizados Escala">
                                    <span><span class="title">Flujos Automatizados</span> para eliminar tareas repetitivas, ahorrando tiempo y recursos.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Planificador.webp') !!}" alt="Icono planificador de embudos Escala">
                                    <span><span class="title">Planificador de Embudos</span> para organizar estrategias de captación y seguimiento en embudos claros.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing-icon-list.webp') !!}" alt="Icono landing pages Escala">
                                    <span><span class="title">Landing pages</span> personalizadas y optimizadas por programa educativo, para captar prospectos efectivamente.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes.icon-list.webp') !!}" alt="Icono reportes personalizados Escala">
                                    <span><span class="title">Reportes Personalizados</span> para obtener métricas clave y tomar decisiones estratégicas.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/app-icon-list.webp') !!}" alt="Icono Escala App CRM">
                                    <span><span class="title">Escala App</span> para acceder al CRM y herramientas de Escala desde cualquier lugar.</span>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="innerSectionElement sct3">

                        <h2 class="primaryTitle">
                            El desafío antes de Escala:
                        </h2>
                        <span class="subTitle">
                            Taller 5 enfrentaba retos operativos y organizativos que reducían <br class="space">
                            la efectividad de sus procesos comerciales:
                        </span>

                        <div class="containElements left" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-4-0.webp') !!}')">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images//illustrations/others/el-desafio-antes-de-escala.webp') !!}" alt="Ilustración desafío antes de Escala CRM">
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    <span>
                                        Dependencia de herramientas manuales
                                    </span>
                                    como Excel y Google Drive, donde toda la información se registraba sin estadísticas ni automatización, dificultando el seguimiento de prospectos y estudiantes.
                                </p>
                                <p>
                                    <span>
                                        Falta de un sistema centralizado
                                    </span>
                                    accesible a todo el equipo, para consultar y hacer seguimiento a estudiantes y prospectos.
                                </p>
                                <p>
                                    <span>
                                        Uso de un software a la medida
                                    </span>
                                    gestionado por una sola persona, lo que retrasaba las operaciones y reducía la eficiencia del equipo.
                                </p>
                                <p>
                                    <span>
                                        Falta de visibilidad en las campañas de marketing
                                    </span>
                                    por lo que no podían medir en tiempo real el rendimiento de las campañas digitales ni identificar qué estrategias son efectivas.
                                </p>
                            </div>
                        </div>
                    </section>
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
                        <div class="containElements right">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/2. WhatsApp - copia.gif') !!}" alt="GIF integración WhatsApp y CRM Escala">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        1. Email Marketing y WhatsApp integrados al CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Cuando un prospecto de Taller 5 solicita información, su contacto se
                                        registra automáticamente en el CRM. Se activan comunicaciones personalizadas
                                        por email y WhatsApp según sus intereses. Además, se asignan etiquetas
                                        para organizarlo y darle seguimiento de manera efectiva. Este proceso
                                        optimiza la experiencia del prospecto, asegurando que reciba la atención
                                        adecuada en cada etapa.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejoraron la eficiencia en la gestión de prospectos</li>
                                        <li>Aumentaron la conversión con seguimientos más personalizados</li>
                                        <li>Optimizan la experiencia de cada prospecto, mejorando el cierre de ventas</li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-(2).gif') !!}" alt="GIF automatización de asignación de leads Escala">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        2. Flujos automatizados de asignación automática de leads:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Cuando se recibe un nuevo prospecto, el CRM asigna automáticamente
                                        el contacto al vendedor correspondiente según la sede de estudio
                                        del interesado. Esto permite que el equipo comercial se enfoque
                                        más en cerrar ventas y menos en tareas operativas.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Aumentaron la productividad del equipo comercial</li>
                                        <li>Mejoraron la eficiencia en la asignación de leads</li>
                                        <li>Incrementaron las ventas al reducir el tiempo dedicado a tareas operativas</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/landing-page.gif') !!}" alt="GIF landing pages segmentadas Escala">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        3. Landing Pages y formularios
                                        segmentados por interés: 
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Para sus campañas en Google Ads y Meta, Taller 5 utiliza landing pages y formularios específicos según el interés de cada prospecto. Esto asegura que al registrarse, reciban comunicaciones alineadas con su interés. 
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejoraron la calidad de los leads generados</li>
                                        <li>Optimizan la comunicación y conversión</li>
                                        <li>Aumentaron la efectividad de sus campañas publicitarias</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left ">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/gif_reports.gif') !!}" alt="GIF reportes personalizados Escala">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        4. Uso embudos de ventas y reportes personalizados:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Taller 5 utiliza el planificador de embudos de Escala y los reportes personalizados para monitorear cada etapa de sus procesos comerciales en tiempo real. Esto les permite identificar rápidamente áreas de mejora y ajustar sus estrategias con mayor agilidad.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Incrementaron la productividad del equipo comercial</li>
                                        <li>Redujeron los tiempos de respuesta</li>
                                        <li>Mejoraron la experiencia del cliente</li>
                                        <li>Facilitaron la optimización continua de las operaciones</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="containElements right special">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/8-Anuncios Digitales.gif') !!}" alt="GIF integración anuncios digitales Escala">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        5. Integración de anuncios de Meta con Escala: 
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        A través de esta integración se sincronizan automáticamente los leads generados en las campañas publicitarias.   </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Agilizaron el flujo de leads desde los anuncios hacia el CRM</li>
                                        <li>Mejoraron la tasa de respuesta al reducir el tiempo entre la captación del lead y el primer contacto</li>
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
                <section class="innerSectionElement sct1" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-5.webp') !!}')">

                    <div class="containElements">
                        <div class="image">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_miller_romero_taller_5_escala_caso_de_exito.webp') !!}" alt="Foto Miller Romero coordinador Taller 5" loading="lazy">
                        </div>
                        <div class="info">
                            <p>
                                “Recomiendo ampliamente Escala, es una
                                herramienta que no solo organiza nuestro
                                proceso comercial, sino que nos permite hacer
                                un seguimiento preciso de cada prospecto y
                                alumno. Su equipo de soporte siempre está
                                ahí, acompañándonos y facilitando cada paso.
                                Escala ha sido un gran aliado para mejorar
                                nuestra operación, automatizar tareas y
                                optimizar nuestra inversión en marketing”.
                                <br class="space">
                                <br class="space">
                                <span class="white">
                                    Miller Romero -
                                    <span>Coordinador de Comunicaciones y Mercadeo </span>
                                </span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_taller_5_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-2025-casos-exito-7.webp') }}')">

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
<div id="casoExito_Cambridge">
    <div class="sections">


        <section id="lead-form" class="hero2025 casoExito_Cambridge_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-0.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <div class="imgTop">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_colegio_cambridge_caso_de_exito.webp') !!}" alt="Logo Colegio Cambridge" class="logo-img" loading="lazy">
                                <span>Caso de éxito: Educación </span>
                            </div>
                            <h1 class="principalBigTitle">
                                Colegio de amplia trayectoria,
                                aumentó un 30% la calidad de sus prospectos en menos de un año
                                con el CRM de Escala
                            </h1>
                        </div>
                        <div class="containerImage">
                            <img alt="Chica sonriente representando éxito educativo Colegio Cambridge" src="{!! App::setFilePath('/assets/images/illustrations/others/chica_sondiendo_educacion.webp') !!}" loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Chica sonriente representando éxito educativo Colegio Cambridge" src="{!! App::setFilePath('/assets/images/illustrations/others/chica_sondiendo_educacion.webp') !!}" loading="lazy">
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

        <section class="customSection sectionParent casoExito_Cambridge_1">

            <div class="section-row">

                <section class="innerSectionElement">
                    <h2 class="primaryTitle">¿Qué más han logrado con Escala?</h2>

                    <div class="containElements">
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Potenciaron
                                </span>
                            </div>
                            <p class="text">
                                el rendimiento de las campañas publicitarias
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Optimizaron
                                </span>
                            </div>
                            <p class="text">
                                la clasificación y seguimiento de prospectos
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Agilizaron
                                </span>
                            </div>
                            <p class="text">
                                la toma de decisiones estratégicas basadas en datos
                            </p>
                        </div>
                    </div>

                </section>

            </div>

        </section>
        <section class="component-info-text-video-T1 customSection sectionParent casoExito_Cambridge_2 ">
            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <h2 class="primaryTitle whiteColor">
                            ¿Qué dice la Directora de <br class="space">
                            Admisiones sobre Escala?

                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="video">
                        @php
                        $videoEmbed = App::setFilePath('/assets/videos/colegio-cambrige-video-testimonial.mp4');
                        $videoCover = App::setFilePath('/assets/images/illustrations/others/testimonial-colegio-cambrige.webp');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_Cambridge_3">

            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">

                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">
                                Sobre la empresa:
                            </h3>

                            <p class="text">
                                El Colegio Cambridge brinda una educación <br class="DT_e">
                                integral de excelencia, enfocada en el desarrollo <br class="DT_e">
                                académico, la investigación y la formación en <br class="DT_e">
                                valores. Su equipo docente altamente calificado <br class="DT_e">
                                , fomenta un aprendizaje personalizado en grupos <br class="DT_e">
                                pequeños, preparando a los estudiantes para <br class="DT_e">
                                afrontar los desafíos del futuro.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-industria.webp') !!}" alt="Icono industria educación Colegio Cambridge"></div>
                                        <strong>Industria:</strong> Educación
                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-tamaño.webp') !!}" alt="Icono tamaño empresa más de 51 empleados Colegio Cambridge"></div>
                                        <strong>Tamaño:</strong> 51 + empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-locacion.webp') !!}" alt="Icono ubicación Bogotá, La Calera y Cajicá"></div>
                                        <strong>Locación:</strong> Bogotá, La Calera y Cajicá, Col.
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-wensite.webp') !!}" alt="Icono sitio web Colegio Cambridge"></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://colegiocambridge.edu.co">colegiocambridge.edu.co</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_Cambridge_4">
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
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm-icon-list.webp') !!}" alt="Icono CRM Colegio Cambridge">
                                    <span><span class="title">CRM</span> para centralizar y gestionar todas las sedes desde una única cuenta, con acceso a la información completa de los prospectos.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/Planificador.webp') !!}" alt="Icono planificador de embudos Colegio Cambridge">
                                    <span><span class="title">Planificador de Embudos</span> que permite hacer seguimiento al proceso de conversión de prospectos, desde la captura inicial hasta el cierre de ventas.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes.icon-list.webp') !!}" alt="Icono reportes personalizados Colegio Cambridge">
                                    <span><span class="title">Reportes Personalizados</span> para analizar el desempeño de campañas y ventas para tomar decisiones estratégicas basadas en datos.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing-icon-list.webp') !!}" alt="Icono landing pages Colegio Cambridge">
                                    <span><span class="title">Landing pages</span> para captar contactos segmentados por sede de interés.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/email-icon-list.webp') !!}" alt="Icono Email Marketing Colegio Cambridge">
                                    <span><span class="title">Email Marketing</span> para crear plantillas, programar campañas personalizadas y analizar resultados.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/anuncios-icon-list.webp') !!}" alt="Icono anuncios digitales Colegio Cambridge">
                                    <span><span class="title">Anuncios digitales</span> integrados a Escala, para gestionar campañas publicitarias y medir su efectividad.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/app-icon-list.webp') !!}" alt="Icono Escala App Colegio Cambridge">
                                    <span><span class="title">Escala App</span> ideal para vendedores en movimiento, facilita la gestión de oportunidades desde eventos o ferias de educación.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp-icon-list.webp') !!}" alt="Icono WhatsApp Inbox Colegio Cambridge">
                                    <span><span class="title">Whatsapp Inbox</span> para automatizar, organizar y optimizar el contacto y seguimiento de clientes directamente desde el CRM.</span>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="innerSectionElement sct3">

                        <h2 class="primaryTitle">
                            El desafío antes de Escala:
                        </h2>
                        <span class="subTitle">
                            El Colegio Cambridge enfrentaba 3 desafíos clave <br class="space">
                            que afectaban su eficiencia y crecimiento:

                        </span>

                        <div class="containElements left" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-4-0.webp') !!}')">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images//illustrations/others/el-desafio-antes-de-escala.webp') !!}" alt="Ilustración desafío antes de Escala Colegio Cambridge">
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    <span>
                                        Falta de seguimiento y claridad en la gestión de ventas,
                                    </span>
                                    la visibilidad en tiempo real y la capacidad para generar reportes precisos eran limitadas, dificultando el seguimiento efectivo de la fuerza de ventas y sus actividades.
                                </p>
                                <p>
                                    <span>
                                        Necesidad de un embudo de ventas visible y eficiente,
                                    </span>
                                    la ausencia de una herramienta precisa para visualizar las etapas del proceso de ventas y su rendimiento, impedía la optimización del mismo.
                                </p>
                                <p>
                                    <span>
                                        Integración y automatización de campañas de marketing digital,
                                    </span>
                                     era crucial contar con una herramienta integrada que permitiera no solo medir la efectividad de las campañas en tiempo real, sino también automatizar procesos para mejorar la eficiencia.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent casoExito_Cambridge_5">

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
                                    <img src="{!! App::setFilePath('/assets/images/gifs/CRM.gif') !!}" alt="GIF CRM Colegio Cambridge">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        1. CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        El Colegio Cambridge gestiona todas sus sedes bajo una misma cuenta sombrilla, permitiendo manejar la información de manera centralizada. Con esta solución, lograron realizar un seguimiento efectivo de la fuerza de ventas y la gestión de tareas y contactos por sede, de forma integrada y eficiente.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejoraron la atención y satisfacción de prospectos y clientes mediante la centralización de datos.</li>
                                        <li>Aumentaron la eficiencia de los procesos comerciales al reducir tiempos y esfuerzos administrativos.</li>
                                        <li>Redujeron la fuga de información valiosa al consolidar datos en una única plataforma.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="containElements left">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/landing-page.gif') !!}" alt="GIF landing pages y email marketing Colegio Cambridge">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        2. Landing pages + Email Marketing:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        El Colegio Cambridge desarrolló landing pages específicas para cada campaña, además de insertar formularios en su web, permitiéndoles recibir todos los datos directamente en el CRM. Esto les permitió enviar campañas de promoción y nutrición a prospectos y clientes mediante plantillas personalizadas y segmentaciones más precisas.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Incremento en la tasa de conversión de visitantes a prospectos.</li>
                                        <li>Mejora en la eficiencia y efectividad de las campañas de marketing al segmentar y personalizar los mensajes.</li>
                                        <li>Reducción del tiempo necesario para lanzar y analizar campañas de correo.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="containElements right">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/2. WhatsApp - copia.gif') !!}" alt="GIF WhatsApp integrado al CRM Colegio Cambridge">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        3. WhatsApp integrado al CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Todos los contactos que interactúan por WhatsApp quedan registrados automáticamente en el CRM. El uso de automatizaciones permite una respuesta rápida, personalizada y acorde al interés de cada persona.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejoraron la experiencia del cliente al permitir una comunicación más directa y accesible.</li>
                                        <li>Incrementaron la capacidad de respuesta fuera del horario laboral, asegurando atención continua.</li>
                                        <li>Potenciaron la fidelización de clientes mediante interacciones más personalizadas y efectivas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="containElements left">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/gif_reports.gif') !!}" alt="GIF reportes personalizados Colegio Cambridge">
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
                                        Herramienta que permite analizar resultados sobre ventas, campañas publicitarias y desempeño del equipo. Son cruciales para presentar informes periódicos y tomar decisiones informadas sobre aspectos fundamentales.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejoraron la colaboración entre los equipos al basarse en datos concretos.</li>
                                        <li>Fortalecieron la confianza de los directivos al poder revisar datos concretos.</li>
                                        <li>Mejoraron la planificación de campañas mediante el análisis de datos históricos.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="containElements right special">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-whatsapp.gif') !!}" alt="GIF Escala App Colegio Cambridge">
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
                                        Es muy útil en ferias y eventos en los que participan los asesores, ya que pueden usar el CRM y otras herramientas desde sus celulares.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Eliminaron tareas manuales de los asesores cuando están en eventos del sector.</li>
                                        <li>Mejoraron la capacidad de respuesta del área comercial estando fuera de la oficina.</li>
                                        <li>Mayor presencia en eventos y ferias, fuente importante de nuevos prospectos.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </section>




        <section class="customSection sectionParent casoExito_Cambridge_6">

            <div class="section-row">
                <section class="innerSectionElement sct1" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-5.webp') !!}')">

                    <div class="containElements">
                        <div class="image">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/diana_guzman_directora_de_Adminsiones_colegio_Cambridge.webp') !!}" alt="Foto Diana Guzmán Directora de Admisiones Colegio Cambridge" loading="lazy">
                        </div>
                        <div class="info">
                            <p>
                                "Implementar Escala ha sido una experiencia
                                positiva y enriquecedora. Nos ha permitido
                                integrar ventas, marketing e informes en una
                                herramienta completa, con un acompañamiento
                                constante que facilita el aprendizaje continuo.
                                Escala no solo mejora la personalización de la
                                atención al cliente, sino que también optimiza
                                nuestros procesos y nos brinda la tranquilidad
                                de contar con una plataforma confiable".

                                <br class="space">
                                <br class="space">
                                <span class="white">
                                    Diana Guzmán
                                    -
                                    <span>
                                        Directora de Admisiones Colegio Cambridge
                                    </span>
                                </span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_Cambridge_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-2025-casos-exito-7.webp') }}')">

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
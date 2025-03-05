<div id="casoExito_Cambridge">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol casoExito_Cambridge_0 newHome ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_yellow_nubes.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info
                                                col-md-12 col-lg-8
                                            ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/chica_sondiendo_educacion.png') !!}" alt="Ilustración Cambridge" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_colegio_cambridge_caso_de_exito.png') !!}" alt="" class="logo-img" loading="lazy">
                                            <small><span>Caso de éxito:</span> Educación</small>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            <span class="blueColor">
                                                Colegio de amplia trayectoria,
                                            </span>
                                            <span class="span2">
                                                aumentó un 30% la <br class="DT_e">
                                                calidad de sus prospectos <br class="DT_e">
                                                en menos de un año
                                            </span>
                                            <span class="blueColor">
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


                                        <h5 class="titleFormat blackcolor"> Recibe un demo <br class="space">
                                            personalizado de Escala</h5>


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
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/chica_sondiendo_educacion.png') !!}" alt="Ilustración Cambridge" loading="lazy">

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
                                el rendimiento de las <br class="DT_e">
                                campañas publicitarias
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Optimizaron
                                </span>
                            </div>
                            <p class="text">
                                la clasificación y
                                seguimiento de prospectos
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Agilizaron
                                </span>
                            </div>
                            <p class="text">
                                la toma de decisiones
                                estratégicas basadas en datos
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
                            ¿Qué dice la Directora de <br class="DT_e">
                            Admisiones sobre Escala?
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <img src="{!! App::setFilePath('/assets/images/overlays/background_sky_yellow.svg') !!}" alt="" class="overlaySky1">

                        <div class="video col-md-12">

                            @php
                            $videoEmbed = App::setFilePath('/assets/videos/colegio-cambrige-video-testimonial.mp4');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/testimonial-colegio-cambrige.png');
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
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/industria_salud_icon_orange.png') !!}" alt=""></div>
                                        <strong>Industria:</strong> Educación

                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/tamaño_icon_orange.png') !!}" alt=""></div>
                                        <strong>Tamaño:</strong> 51 + empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/locacion_icon_orange.png') !!}" alt=""></div>
                                        <strong>Locación:</strong> Bogotá, La Calera y Cajicá, Col.

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/website_icon_orange.png') !!}" alt=""></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://colegiocambridge.edu.co">https://colegiocambridge.edu.co</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_Cambridge_4">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_5_Cambridge.svg') }}')" class="backgroundFull">

                <div class="section-row">
                    <div class="containElements">

                        <section class="innerSectionElement sct1">
                            <img src="{!! App::setFilePath('/assets/images/person/img_centro_section_Cambridge.png') !!}" alt="">

                            <h2 class="primaryTitle">
                                Las herramientas de Escala que utilizan
                            </h2>

                        </section>

                        <section class="innerSectionElement sct2">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm_icon_escala.png') !!}" alt="">
                                        <span><span class="title">CRM</span> para centralizar y gestionar todas las sedes desde una única cuenta, con acceso a la información completa de los prospectos.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_planificador_embudos.png') !!}" alt="">
                                        <span> <span class="title">Planificador de Embudos</span> que permite hacer seguimiento al proceso de conversión de prospectos, desde la captura inicial hasta el cierre de ventas.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Reportes Personalizados</span> para analizar el desempeño de campañas y ventas para tomar decisiones estratégicas basadas en datos.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Landing pages </span> para captar contactos segmentados por sede de interés.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/email_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Email Marketing </span> para crear plantillas, programar campañas personalizadas y analizar resultados.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/ads_icon_escala.png') !!}" alt="">
                                        <span><span class="title">Anuncios digitales</span> integrados a Escala, para gestionar campañas publicitarias integradas con Escala y mide su efectividad.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/app_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Escala App</span> ideal para vendedores en movimiento, facilita la gestión de oportunidades desde eventos o ferias de educación.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Whatsapp Inbox</span> para automatizar, organizar y optimizar el contacto y seguimiento de clientes directamente desde el CRM.</span>
                                    </li>


                                </ul>
                            </div>
                        </section>
                        <section class="innerSectionElement sct3">

                            <h2 class="primaryTitle">
                                El desafío antes de Escala:
                            </h2>
                            <span class="subTitle">
                                El Colegio Cambridge enfrentaba 3 desafíos clave <br class="DT_e">
                                que afectaban su eficiencia y crecimiento:
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
                                                Falta de seguimiento y claridad en la gestión de ventas,
                                            </span>
                                            la visibilidad en tiempo real y la capacidad <br class="DT_e">
                                            para generar reportes precisos eran limitadas, <br class="DT_e">
                                            dificultando el seguimiento efectivo de <br class="DT_e">
                                            la fuerza de ventas y sus actividades.
                                        </li>

                                        <li>
                                            <span>
                                                Necesidad de un embudo de ventas visible y eficiente,
                                            </span>
                                            la ausencia de una herramienta precisa <br class="DT_e">
                                            para visualizar las etapas del proceso de ventas y <br class="DT_e">
                                            su rendimiento, impedía la optimización del mismo.
                                        </li>

                                        <li>
                                            <span>
                                                Integración y automatización de campañas de marketing digital,
                                            </span>
                                            era crucial contar con una <br class="DT_e">
                                            herramienta integrada que permitiera no solo <br class="DT_e">
                                            medir la efectividad de las campañas en tiempo <br class="DT_e">
                                            real, sino también automatizar procesos para <br class="DT_e">
                                            mejorar la eficiencia.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
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
                                        CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        El Colegio Cambridge gestiona todas sus sedes bajo una misma cuenta
                                        sombrilla, permitiendo manejar la información de manera centralizada,
                                        algo que otros CRM´s no le brindaban y debía tener cuentas separadas.
                                        Con esta solución, lograron realizar un seguimiento efectivo de la
                                        fuerza de ventas y la gestión de tareas y contactos por sede, de forma
                                        integrada y eficiente.</p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejoraron la atención y satisfacción de prospectos y clientes mediante la centralización de datos.</li>
                                        <li>Aumentaron la eficiencia de los procesos comerciales al reducir tiempos y esfuerzos administrativos.</li>
                                        <li>Redujeron la fuga de información valiosa al consolidar datos en una única plataforma. </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/landing-page.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>2</span>
                                    <h3 class="subTittle">
                                        Landing pages + Email Marketing:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        El Colegio Cambridge desarrolló landing pages específicas para cada campaña,
                                        además de insertar formularios de Escala en su propia web, permitiéndoles
                                        recibir todos los datos directamente en el CRM. Esto les permitió enviar
                                        campañas de promoción y nutrición a prospectos y clientes mediante plantillas
                                        personalizadas y segmentaciones mucho más precisas.
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

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/caso_de_exito_crm.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>3</span>
                                    <h3 class="subTittle">
                                        WhatsApp integrado al CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Con esta integración lograron que todos los contactos que interactúan
                                        por este canal, queden registrados automáticamente en el CRM. Además,
                                        el uso de las automatizaciones de conversaciones han logrado una
                                        respuesta rápida, personalizada y acorde al interés de cada persona.
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
                                        Es una herramienta de mucho provecho para el
                                        colegio, ya que les permite analizar resultados sobre
                                        ventas, campañas publicitarias y desempeño del
                                        equipo, entre otras. Estos reportes son cruciales para
                                        presentar informes periódicos y tomar decisiones informadas sobre aspectos fundamentales.
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
                        <div class="containElements left special">

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
                                        Es muy útil en ferias y eventos en los que participan los asesores,
                                        ya que pueden usar el CRM y otras herramientas desde sus celulares.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Eliminaron tareas manuales de los asesores cuando están eventos del sector. </li>
                                        <li>Mejoraron la capacidad de respuesta del área comercial estando fuera de la oficina.</li>
                                        <li>Mayor presencia en eventos y ferias, que es una fuente importante de de nuevos prospectos.</li>
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


                <section class="innerSectionElement sct1">
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_section_9_Cambridge.svg') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/diana_guzman_directora_de_Adminsiones_colegio_Cambridge.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    "Implementar Escala ha sido una experiencia positiva y <br class="DT_e">
                                    enriquecedora. Nos ha permitido integrar ventas, marketing e <br class="DT_e">
                                    informes en una herramienta completa, con un acompañamiento <br class="DT_e">
                                    constante que facilita el aprendizaje continuo. Escala no solo <br class="DT_e">
                                    mejora la personalización de la atención al cliente, sino que <br class="DT_e">
                                    también optimiza nuestros procesos y nos brinda la tranquilidad <br class="DT_e">
                                    de contar con una plataforma confiable".
                                    <br class="space">
                                    <br class="space">
                                    <span class="blue">
                                        Diana Guzmán
                                        <br class="space">
                                        <span> Directora de Admisiones Colegio Cambridge</span>
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_Cambridge_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_yellow_nubes.svg') }}')">

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
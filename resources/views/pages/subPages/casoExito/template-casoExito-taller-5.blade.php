<div id="casoExito_taller_5">
    <div class="sections">


        <section id="lead-form" class="hero2025 casoExito_taller_5_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-poctlab-casos-exito-0.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <div class="imgTop">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_taller_5_caso_de_exito.webp') !!}" alt="" class="logo-img" loading="lazy">
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
                            <img alt="Ilustración app escala"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/img_chico_feliz_taller_5_escala_caso_de_exito.webp') !!}"
                                loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Ilustración app escala"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/img_chico_feliz_taller_5_escala_caso_de_exito.webp') !!}"
                                loading="lazy">
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
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-industria.webp') !!}" alt=""></div>
                                        <strong>Industria:</strong> Educación
                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-tamaño.webp') !!}" alt=""></div>
                                        <strong>Tamaño:</strong> 13 - 50 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-locacion.webp') !!}" alt=""></div>
                                        <strong>Locación:</strong> Bogotá, Chía y Cali, Col.

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-wensite.webp') !!}" alt=""></div>
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
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm-icon-list.webp') !!}" alt="">
                                    <span><span class="title">CRM</span> para organizar y centralizar información de prospectos y estudiantes, facilitando el seguimiento.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/email-icon-list.webp') !!}" alt="">
                                    <span><span class="title">Email Marketing</span> para diseñar campañas personalizadas que aumenten la conversión.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp-icon-list.webp') !!}" alt="">
                                    <span><span class="title">Whatsapp Inbox</span> para mejorar la comunicación con respuestas rápidas y automatizadas.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/anuncios-icon-list.webp') !!}" alt="">
                                    <span><span class="title">Anuncios digitales</span> para medir el rendimiento de campañas y optimizar resultados en tiempo real.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos-icon-list.webp') !!}" alt="">
                                    <span><span class="title">Flujos Automatizados</span> para eliminar tareas repetitivas, ahorrando tiempo y recursos.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/embudos-icon-list.webp') !!}" alt="">
                                    <span><span class="title">Planificador de Embudos</span> para organizar estrategias de captación y seguimiento en embudos claros.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing-icon-list.webp') !!}" alt="">
                                    <span><span class="title">Landing pages</span> personalizadas y optimizadas por programa educativo, para captar prospectos efectivamente.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes.icon-list.webp') !!}" alt="">
                                    <span><span class="title">Reportes Personalizados</span> para obtener métricas clave y tomar decisiones estratégicas.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/app-icon-list.webp') !!}" alt="">
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

                        <div class="containElements left" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-poctlab-casos-exito-4-0.webp') !!}')">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images//illustrations/others/el-desafio-antes-de-escala.webp') !!}" alt="">
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
                                    <img src="{!! App::setFilePath('/assets/images/gifs/1_poctlab_gift_caso_de_exito.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        1. WhatsApp integrado al CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Cuando alguien solicita información sobre servicios del
                                        laboratorio vía WhatsApp, la información de contacto del
                                        potencial cliente queda registrada en el CRM de forma
                                        automática y se asigna, también automáticamente, a un
                                        asesor miembro de Poctlab según criterios predefinidos
                                        para su gestión comercial. Los datos del potencial
                                        cliente quedan guardados y el mismo se etiqueta según
                                        el tipo de servicio que solicitado , facilitando la
                                        priorización y delegación al área correspondiente.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejoraron la atención y satisfacción del cliente/paciente</li>
                                        <li>Aumentaron eficiencia en sus procesos comerciales</li>
                                        <li>Redujeron pérdida de información valiosa de cada contacto</li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/2_poctlab_gift_caso_de_exito.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        2. Landing pages:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Poctlab crea una página específica para cada servicio.
                                        Estas páginas ayudan a atraer personas interesadas en ese servicio,
                                        asegurando que cada cliente reciba atención personalizada según sus
                                        necesidades.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Aumentaron la tasa de conversión de visitas a leads/prospecto y de leads/prospecto a clientes</li>
                                        <li>Aumentaron sus ingresos por ventas</li>
                                        <li>Redujeron costos asociados a la adquisición de clientes</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/3_poctlab_gift_caso_de_exito.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        3. Flujos de automatización:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Crearon flujos automatizados para el envío de respuestas vía WhatsApp
                                        a consultas frecuentes de potenciales clientes. Con simples preguntas
                                        que se envían automáticamente por WhatsApp, el sistema responde con
                                        la información correspondiente de forma automática. Esto les permitió
                                        atender a clientes fuera del horario laboral y ganar eficiencias operativas.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Incrementaron la capacidad del equipo al ahorrar tiempo en tareas operativas</li>
                                        <li>Redujeron errores en las respuestas a pacientes</li>
                                        <li>Mejoraron el servicio y la experiencia de compra</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left special">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/4_poctlab_gift_caso_de_exito.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        4. Escala App:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Tanto los asesores comerciales como los líderes de Poctlab,
                                        usan el CRM de Escala integrado al WhatsApp Inbox desde sus
                                        celulares. Esto les permite hacer seguimiento, gestionar el
                                        flujo de trabajo y monitorear resultados desde cualquier lugar,
                                        sin depender de una computadora.
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


                    </section>

                </div>
            </div>

        </section>




        <section class="customSection sectionParent casoExito_taller_5_6">

            <div class="section-row">
                <section class="innerSectionElement sct1" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-poctlab-casos-exito-5.webp') !!}')">

                    <div class="containElements">
                        <div class="image">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/miguel_urrego_director_comercial_poctlab_1.webp') !!}" loading="lazy">
                        </div>
                        <div class="info">
                            <p>
                                "La experiencia con Escala ha sido excelente. Nuestra empresa ha <br class="DT_e">
                                aumentado las ventas en un 100%. Hemos aprendido a usar la <br class="DT_e">
                                herramienta y el acompañamiento del equipo ha sido fundamental <br class="DT_e">
                                Definitivamente, recomiendo Escala a todas las personas que deseen <br class="DT_e">
                                llevar su empresa a otro nivel”.
                                <br class="space">
                                <br class="space">
                                <span class="white">
                                    Miguel Urrego
                                    <span>Líder Comercial Poctlab</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_taller_5_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-poctlab-casos-exito-7.webp') }}')">

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
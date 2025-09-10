<div id="casoExito_desayunos_del_cielo">
    <div class="sections">


        <section id="lead-form" class="hero2025 casoExito_desayunos_del_cielo_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-0.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <div class="imgTop">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_desayunos_del_cielo (1).webp') !!}" alt="Logo Desayunos del Cielo" class="logo-img" loading="lazy">
                                <span>
                                    Caso de éxito: E-commerce
                                </span>
                            </div>
                            <h1 class="principalBigTitle">
                                Esta empresa,
                                aumentó sus ventas un 40% en menos de un año
                                con el control y automatizaciones de Escala CRM
                            </h1>
                        </div>
                        <div class="containerImage">
                            <img alt="Chica feliz entregando paquete de Desayunos del Cielo"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/desayunos_del_cielo_chica_feliz_entregando_paquete.webp') !!}"
                                loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Chica feliz entregando paquete de Desayunos del Cielo"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/desayunos_del_cielo_chica_feliz_entregando_paquete.webp') !!}"
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

        <section class="customSection sectionParent casoExito_desayunos_del_cielo_1">

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
                                su eficiencia en la atención de prospectos y clientes
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Redujeron
                                </span>
                            </div>
                            <p class="text">
                                significativamente la pérdida de prospectos
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Consolidaron
                                </span>
                            </div>
                            <p class="text">
                                su crecimiento de manera ordenada y eficiente
                            </p>
                        </div>
                    </div>

                </section>

            </div>

        </section>
        <section class="component-info-text-video-T1 customSection sectionParent casoExito_desayunos_del_cielo_2 ">
            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <h2 class="primaryTitle whiteColor">
                            ¿Qué dice el CEO sobre Escala?
                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="video">
                        @php
                        $videoEmbed = App::setFilePath('/assets/videos/desayunos-del-cielo-video.mp4');
                        $videoCover = App::setFilePath('/assets/images/illustrations/others/edison-sanchez_img_overlay_video.webp');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_desayunos_del_cielo_3">

            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">

                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">
                                Sobre Desayunos del Cielo
                            </h3>

                            <p class="text">
                                Es una tienda en línea especializada en detalles <br class="DT_e"> personalizados.
                                Sus procesos combinan creatividad, <br class="DT_e"> puntualidad y atención al
                                cliente para hacer de cada <br class="DT_e"> regalo una experiencia única.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-industria.webp') !!}" alt="Icono industria tienda online"></div>
                                        <strong>Industria:</strong> Tienda Online
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-tamaño.webp') !!}" alt="Icono tamaño empresa 10 empleados"></div>
                                        <strong>Tamaño:</strong> 10 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-locacion.webp') !!}" alt="Icono ubicación Bogotá y Medellín"></div>
                                        <strong>Locación:</strong> Bogotá y Medellín, Col.
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-wensite.webp') !!}" alt="Icono sitio web Desayunos del Cielo"></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://desayunosdelcielo.com/">www.desayunosdelcielo.com/</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_desayunos_del_cielo_4">
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
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp-icon-list.webp') !!}" alt="Icono WhatsApp API">
                                    <span><span class="title">WhatsApp API</span> para mejorar la comunicación con respuestas rápidas y automatizadas.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm-icon-list.webp') !!}" alt="Icono CRM">
                                    <span><span class="title">CRM</span> para llevar un control centralizado de contactos y pedidos, con campos personalizados para fechas especiales.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos-icon-list.webp') !!}" alt="Icono flujos automatizados">
                                    <span><span class="title">Flujos Automatizados</span> para gestionar leads eficientemente, aplicando etiquetas y recordatorios, además de ejecutar tareas después del pago del cliente.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes.icon-list.webp') !!}" alt="Icono reportes personalizados">
                                    <span><span class="title">Reportes Personalizados</span> para obtener métricas clave y tomar decisiones estratégicas.</span>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="innerSectionElement sct3">

                        <h2 class="primaryTitle">
                            El desafío antes de Escala:
                        </h2>
                        <span class="subTitle">
                            Desayunos del Cielo debía superar tres desafíos que limitaban su <br class="space">
                            crecimiento y eficiencia:
                        </span>

                        <div class="containElements left" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-4-0.webp') !!}')">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images//illustrations/others/el-desafio-antes-de-escala.webp') !!}" alt="Ilustración desafío antes de Escala">
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    <span>Uso manual de Whatsapp:</span>
                                    Al no contar con Whatsapp API, se generaba desorden y respuestas tardías, perdiendo prospectos en momentos clave de decisión de compra.
                                </p>
                                <p>
                                    <span>Falta de automatización en la atención:</span>
                                    La gestión manual de cada una de las conversaciones causaba retrasos y fallos en la atención personalizada.
                                </p>
                                <p>
                                    <span>Falta de control en el seguimiento:</span>
                                    No contaban con una herramienta que centralizara y monitoreara las conversaciones, lo que dificultaba priorizar oportunidades y cerrar ventas.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent casoExito_desayunos_del_cielo_5">

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
                                    <img src="{!! App::setFilePath('/assets/images/gifs/2. WhatsApp - copia.gif') !!}" alt="GIF integración WhatsApp API">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        1. Integración de WhatsApp API con el CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Esta integración permitió automatizar el registro de cada prospecto que entraba a través de este canal, además de asignar automáticamente los leads a los asesores.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejora en la atención al cliente al garantizar respuestas rápidas y personalizadas.</li>
                                        <li>Reducción de la pérdida de prospectos gracias a una asignación eficiente de leads.</li>
                                        <li>Aumento en la eficiencia del equipo comercial al automatizar varias tareas administrativas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="containElements left">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-whatsapp.gif') !!}" alt="GIF automatizaciones WhatsApp">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        2. Automatización de respuestas en WhatsApp:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Implementaron flujos automatizados para responder rápidamente a las consultas de los clientes, incluyendo envío de catálogos y preguntas relacionadas con los detalles de cada entrega.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejora en la experiencia del cliente al proporcionar respuestas inmediatas.</li>
                                        <li>Ahorro de tiempo y recursos del equipo de ventas al reducir la necesidad de intervención manual.</li>
                                        <li>Incremento en la capacidad de respuesta y seguimiento continuo.</li>
                                        <li>Atención, incluso fuera del horario laboral.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="containElements right">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/14- CRM.gif') !!}" alt="GIF organización y seguimiento CRM">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        3. Organización y seguimiento de prospectos con el CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Pudieron organizar y priorizar de manera eficiente el seguimiento de cada prospecto. Gracias a la implementación de etiquetas personalizadas y el seguimiento automatizado de oportunidades, lograron un proceso más ágil y efectivo en la gestión comercial.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Reducción del riesgo de pérdida de prospectos.</li>
                                        <li>Aumento en la tasa de conversión de ventas.</li>
                                        <li>Reducción de la carga manual y operativa en el equipo de ventas, para enfocarse en tareas más estratégicas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </section>




        <section class="customSection sectionParent casoExito_desayunos_del_cielo_6">

            <div class="section-row">
                <section class="innerSectionElement sct1" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-5.webp') !!}')">

                    <div class="containElements">
                        <div class="image">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/desayunos_al_cielo_edison_sanchez_ceo.webp') !!}" alt="Foto Edison Sánchez CEO Desayunos del Cielo" loading="lazy">
                        </div>
                        <div class="info">
                            <p>
                                “Durante años luchamos por el control de leads y conversaciones
                                por WhatsApp hasta que encontramos Escala, y fue la mejor decisión.
                                Con sus automatizaciones y el control de oportunidades, nuestras
                                ventas aumentaron cerca de un 40%. La implementación fue rápida,
                                efectiva, y el equipo de Escala siempre está disponible para ayudar.
                                Si quieres estructurar mejor tu negocio y aumentar tus ventas,
                                no lo dudes: Escala puede hacer la diferencia, decídete sin miedo”.

                                <br class="space">
                                <br class="space">
                                <span class="white">
                                    Edison Sánchez -
                                    <span>
                                        CEO Desayunos del Cielo
                                    </span>
                                </span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_desayunos_del_cielo_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-2025-casos-exito-7.webp') }}')">

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
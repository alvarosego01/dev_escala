<div id="casoExito_desayunos_del_cielo">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol casoExito_desayunos_del_cielo_0 newHome ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_1_desayunos_del_cielo_.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info
                                                col-md-12 col-lg-8
                                            ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/person/desayunos_del_cielo_chica_feliz_entregando_paquete.png') !!}" alt="Ilustración desayunos del cielo " loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_desayunos_del_cielo.png') !!}" alt="" class="logo-img" loading="lazy">
                                            <small><span>Caso de éxito:</span><span class="span2"> Tienda Online</span></small>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            <span class="whiteColor">
                                                Esta empresa,
                                            </span>
                                            <span class="span2">
                                                aumentó sus <br class="DT_e">
                                                ventas un 40%
                                            </span>
                                            <span class="span3">
                                                con la automatización y <br class="DT_e">
                                                control de Escala CRM
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
                                    <img src="{!! App::setFilePath('/assets/images/person/desayunos_del_cielo_chica_feliz_entregando_paquete.png') !!}" alt="Ilustración desayunos del cielo " loading="lazy">

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
                                    Duplicaron
                                </span>
                            </div>
                            <p class="text">
                                su eficiencia en la atención <br class="DT_e">
                                de prospectos y clientes
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Redujeron
                                </span>
                            </div>
                            <p class="text">
                                significativamente la <br class="DT_e">
                                pérdida de prospectos
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Consolidaron
                                </span>
                            </div>
                            <p class="text">
                                su crecimiento de manera <br class="DT_e">
                                ordenada y eficiente
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

                    <div class="groupElements row">

                        <img src="{!! App::setFilePath('/assets/images/overlays/overlay_sky_1.png') !!}" alt="" class="overlaySky1">

                        <div class="video col-md-12">

                            @php
                            $videoEmbed = App::setFilePath('/assets/videos/desayunos-del-cielo-video.mp4');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/edison-sanchez_img_overlay_video.png');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_desayunos_del_cielo_3">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">
                                Sobre Desayunos del Cielo
                            </h3>

                            <p class="text">
                                Es una tienda en línea especializada en detalles <br class="DT_e">
                                personalizados. Sus procesos combinan <br class="DT_e">
                                creatividad, puntualidad y atención al cliente para <br class="DT_e">
                                hacer de cada regalo una experiencia única.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/industria_salud_icon_orange.png') !!}" alt=""></div>
                                        <strong>Industria:</strong> Tienda Online

                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/tamaño_icon_orange.png') !!}" alt=""></div>
                                        <strong>Tamaño:</strong> 10 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/locacion_icon_orange.png') !!}" alt=""></div>
                                        <strong>Locación:</strong> Bogotá y Medellín, Col.

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/website_icon_orange.png') !!}" alt=""></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://desayunosdelcielo.com/">https://desayunosdelcielo.com/</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_desayunos_del_cielo_4">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_5desayunos_del_cielo_.svg') }}')" class="backgroundFull">

                <div class="section-row">
                    <div class="containElements">

                        <section class="innerSectionElement sct1">
                            <img src="{!! App::setFilePath('/assets/images/person/img_central_casos_exito_desayunos_del_cielo.png') !!}" alt="">

                            <h2 class="primaryTitle">
                                Las herramientas de Escala que utilizan
                            </h2>

                        </section>

                        <section class="innerSectionElement sct2">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">WhatsApp API</span> para mejorar la comunicación con respuestas rápidas y automatizadas.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm_icon_escala.png') !!}" alt="">
                                        <span><span class="title">CRM</span> para llevar un control centralizado de contactos y pedidos, con campos personalizados para fechas especiales.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Flujos Automatizados</span> para gestionar leads eficientemente, aplicando etiquetas y recordatorios, además de ejecutar tareas después del pago del cliente.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Reportes Personalizados</span> para obtener métricas clave y tomar decisiones estratégicas.</span>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="innerSectionElement sct3">

                            <h2 class="primaryTitle">
                                El desafío antes de Escala:
                            </h2>
                            <span class="subTitle">
                                Desayunos del Cielo debía superar tres desafíos <br class="DT_e">
                                que limitaban su crecimiento y eficiencia:
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
                                                Uso manual de Whatsapp:
                                            </span>
                                            Al no contar <br class="DT_e">
                                            con Whatsapp API, se generaba desorden y <br class="DT_e">
                                            respuestas tardías, perdiendo prospectos en <br class="DT_e">
                                            momentos clave de decisión de compra.
                                        </li>

                                        <li>
                                            <span>
                                                Falta de automatización en la atención: <br class="DT_e">
                                            </span>
                                            La gestión manual de cada una de las <br class="DT_e">
                                            conversaciones causaba retrasos y fallos <br class="DT_e">
                                            en la atención personalizada.
                                        </li>

                                        <li>
                                            <span>Falta de control en el seguimiento: <br class="DT_e">
                                            </span>
                                            No contaban con una herramienta que <br class="DT_e">
                                            centralizara y monitoreara las conversaciones, <br class="DT_e">
                                            lo que dificultaba priorizar oportunidades <br class="DT_e">
                                            y cerrar ventas.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
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
                                        Integración de WhatsApp API con el CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Esta integración permitió automatizar el registro de cada prospecto que entraba
                                        a través de este canal, además de asignar automáticamente los leads a los asesores.</p>
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

                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-whatsapp.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>2</span>
                                    <h3 class="subTittle">
                                        Automatización de respuestas en WhatsApp:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Implementaron flujos automatizados para responder <br class="DT_e">
                                        rápidamente a las consultas de los clientes, incluyendo <br class="DT_e">
                                        envío de catálogos y preguntas relacionadas con los <br class="DT_e">
                                        detalles de cada entrega. 
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejora en la experiencia del cliente al <br class="DT_e">
                                            proporcionar respuestas inmediatas.</li>
                                        <li>Ahorro de tiempo y recursos del equipo <br class="DT_e">
                                            de ventas al reducir la necesidad de <br class="DT_e">
                                            intervención manual.</li>
                                        <li>Incremento en la capacidad de <br class="DT_e">
                                            respuesta y seguimiento continuo.</li>
                                        <li>Atención, incluso fuera del horario laboral.
                                        </li>
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
                                        Organización y seguimiento de <br class="DT_e">
                                        prospectos con el CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Pudieron organizar y priorizar de manera eficiente el seguimiento
                                        de cada prospecto. Gracias a la implementación de etiquetas
                                        personalizadas y el seguimiento automatizado de oportunidades,
                                        lograron un proceso más ágil y efectivo en la gestión comercial.
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


                <section class="innerSectionElement sct1">
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_section_9_desayunos_del_cielo.png') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/desayunos_al_cielo_edison_sanchez_ceo.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    “Durante años luchamos por el control de leads y <br class="DT_e">
                                    conversaciones por WhatsApp hasta que encontramos <br class="DT_e">
                                    Escala, y fue la mejor decisión. Con sus automatizaciones y <br class="DT_e">
                                    el control de oportunidades, nuestras ventas aumentaron <br class="DT_e">
                                    cerca de un 40%. La implementación fue rápida, efectiva, y <br class="DT_e">
                                    el equipo de Escala siempre está disponible para ayudar. <br class="DT_e">
                                    Si quieres estructurar mejor tu negocio y aumentar tus <br class="DT_e">
                                    ventas, no lo dudes: Escala puede hacer la diferencia, decídete sin miedo”.
                                    <br class="space">
                                    <br class="space">
                                    <span class="blue">
                                        Edison Sánchez
                                        <br class="space">
                                        <span> CEO Desayunos del Cielo</span>
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_desayunos_del_cielo_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_10_desayunos_del_cielo_.svg') }}')">

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
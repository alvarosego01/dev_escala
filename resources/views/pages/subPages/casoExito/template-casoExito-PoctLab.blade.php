<div id="casoExito_PoctLab">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol casoExito_PoctLab_0 newHome ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_1_poctlab.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info
                                                col-md-12 col-lg-8
                                            ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/person/casos_de_uso_poctlab_mujer_feliz.png') !!}" alt="Ilustración medico poctlab feliz" loading="lazy">

                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_poctlab_casos_de_exito.png') !!}" alt="" class="logo-img" loading="lazy">
                                            <small><span>Caso de éxito:</span> Salud</small>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            <span class="whiteColor">
                                                Laboratorio clínico con más <br class="DT_e">
                                                de 30 años en el mercado
                                            </span>
                                            <span class="span2">
                                                duplicó sus ventas con <br class="DT_e">
                                                el CRM de Escala en <br class="DT_e">
                                                menos de un año.
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
                                    <img src="{!! App::setFilePath('/assets/images/person/casos_de_uso_poctlab_mujer_feliz.png') !!}" alt="Ilustración medico poctlab feliz" loading="lazy">

                                </div>

                            </div>



                        </div>

                    </section>

                </div>



            </div>

        </section>

        <section class="customSection sectionParent casoExito_PoctLab_1">

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
                                la cantidad de <br class="DT_e">
                                prospectos generados
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Triplicaron
                                </span>
                            </div>
                            <p class="text">
                                el volumen de <br class="DT_e">
                                conversaciones con <br class="DT_e">
                                prospectos por WhatsAPP
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Duplicaron
                                </span>
                            </div>
                            <p class="text">
                                la eficiencia operativa de <br class="DT_e">
                                sus procesos comerciales
                            </p>
                        </div>
                    </div>

                </section>

            </div>

        </section>
        <section class="component-info-text-video-T1 customSection sectionParent casoExito_PoctLab_2 ">
            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            ¿Qué dice el líder comercial sobre Escala?
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <img src="{!! App::setFilePath('/assets/images/overlays/overlay_sky_1.png') !!}" alt="" class="overlaySky1">

                        <div class="video col-md-12">

                            @php
                            $videoEmbed = App::setFilePath('/assets/videos/Caso de éxito PoctLab Final-enhanced-v2-90p (1).mp4');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/img_overlay_Caso_de_exito_poctlab.png');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_PoctLab_3">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">

                                Sobre Poctlab


                            </h3>

                            <p class="text">
                                Poctlab, es un laboratorio clínico en la ciudad <br class="DT_e">
                                de Medellín, que apoya el diagnóstico médico, <br class="DT_e">
                                ofreciendo resultados rápidos y confiables, <br class="DT_e">
                                con servicio a domicilio.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/industria_salud_icon_orange.png') !!}" alt=""></div>
                                        <strong>Industria:</strong> Salud
                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/tamaño_icon_orange.png') !!}" alt=""></div>
                                        <strong>Tamaño:</strong> 13 - 50 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/locacion_icon_orange.png') !!}" alt=""></div>
                                        <strong>Locación:</strong> Colombia

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/website_icon_orange.png') !!}" alt=""></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://laboratoriospoct.com">laboratoriospoct.com</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_PoctLab_4">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_poctlab_section_5.svg') }}')" class="backgroundFull">

                <div class="section-row">
                    <div class="containElements">

                        <section class="innerSectionElement sct1">
                            <img src="{!! App::setFilePath('/assets/images/person/img_doctora_poctlab.png') !!}" alt="">

                            <h2 class="primaryTitle">
                                Las herramientas de Escala que utilizan
                            </h2>

                        </section>

                        <section class="innerSectionElement sct2">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm_icon_escala.png') !!}" alt="">
                                        <span><span class="title">CRM</span> para gestionar y almacenar los contactos de prospectos y clientes</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/ads_icon_escala.png') !!}" alt="">
                                        <span><span class="title">Anuncios digitales</span> integrado a Escala para medir el rendimiento de campañas de marketing</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Whatsapp Inbox</span> para centralizar y automatizar la comunicación con sus prospectos y clientes</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/email_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Email Marketing </span>para enviar comunicados masivos a prospectos y clientes</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Flujos Automatizados</span> para ahorrar tiempo en tareas rutinarias</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Reportes Personalizados</span> para medir el desempeño del negocio y aplicar mejoras</span>
                                    </li>


                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Landing pages </span>para crear páginas web efectivas y capturar información de prospectos interesados</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/app_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Escala App</span> para gestionar el negocio desde cualquier lugar</span>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="innerSectionElement sct3">

                            <h2 class="primaryTitle">
                                El desafío antes de Escala:
                            </h2>
                            <span class="subTitle">
                                PoctLab enfrentaba limitaciones de crecimiento por:
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
                                                Falta de automatización en ventas:
                                            </span>
                                            El proceso
                                            comercial se realizaba 100% manual. Esto consumía tiempo valioso
                                            de vendedores en tareas repetitivas y pérdidas de oportunidades de
                                            venta debido a tiempos largos de respuesta y falta de seguimiento.
                                        </li>

                                        <li>
                                            <span>
                                                Uso de herramientas poco integradas:
                                            </span>
                                            El seguimiento
                                            comercial se documentabaen un Excel, complicando la medición y comunicación
                                            eficiente con prospectos interesados.
                                        </li>

                                        <li>
                                            <span>Falta de seguimiento y claridad en el
                                                proceso comercial:
                                            </span>
                                            Poca visibilidad de
                                            la información, las actividades y los resultados
                                            de venta dificultaba la optimización y entrega de
                                            una buena experiencia de compra.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent casoExito_PoctLab_5">

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
                                    <img src="{!! App::setFilePath('/assets/images/gifs/1_poctlab_gift_caso_de_exito.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>1</span>
                                    <h3 class="subTittle">
                                        WhatsApp integrado al CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Cuando alguien solicita información sobre servicios del
                                        laboratorio vía WhatsApp, la información de contacto del
                                        potencial cliente queda registrada en el CRM de forma automática
                                        y se asigna, también automáticamente, a un asesor miembro de
                                        Poctlab según criterios predefinidos para su gestión comercial
                                        . Los datos del potencial cliente quedan guardados y el mismo se
                                        etiqueta según el tipo de servicio que solicitado , facilitando la
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

                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/2_poctlab_gift_caso_de_exito.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>2</span>
                                    <h3 class="subTittle">
                                        Landing pages:
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

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/3_poctlab_gift_caso_de_exito.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>3</span>
                                    <h3 class="subTittle">
                                        Flujos de automatización:
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

                        <div class="containElements right special">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/4_poctlab_gift_caso_de_exito.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>4</span>
                                    <h3 class="subTittle">
                                        Escala App:
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




        <section class="customSection sectionParent casoExito_PoctLab_6">

            <div class="section-row">


                <section class="innerSectionElement sct1">
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_section_8_poctlab.png') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/miguel_urrego_director_comercial_poctlab.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    "La experiencia con Escala ha sido excelente. <br class="DT_e">
                                    Nuestra empresa ha aumentado las ventas en <br class="DT_e">
                                    un 100%. Hemos aprendido a usar la <br class="DT_e">
                                    herramienta y el acompañamiento del equipo <br class="DT_e">
                                    ha sido fundamental. Definitivamente, <br class="DT_e">
                                    recomiendo Escala a todas las personas <br class="DT_e">
                                    que deseen llevar su empresa a otro nivel”.
                                    <br class="space">
                                    <br class="space">
                                    <span class="blue">
                                        Miguel Urrego, Director Comercial
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_PoctLab_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_9.svg') }}')">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/escalanauta-volador.png.png') !!}"
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
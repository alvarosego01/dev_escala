<div id="casoExito_kata_gogo">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol casoExito_kata_gogo_0 newHome ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_1_kata_gogo.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info
                                                col-md-12 col-lg-8
                                            ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/person/img_chico_feliz_kata_gogo_escala_caso_de_exito.png') !!}" alt="Ilustración kata_gogo" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_kata_gogo.png') !!}" alt="" class="logo-img" loading="lazy">
                                            <small><span>Caso de éxito:</span> Marketing</small>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            <span class="blueColor">
                                                Consultora de marketing <br class="DT_e">
                                                mejoró su eficiencia
                                            </span>
                                            <span class="span2">
                                                y potenció las ventas <br class="DT_e">
                                                de sus clientes con el <br class="DT_e">
                                                CRM de Escala
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
                                    <img src="{!! App::setFilePath('/assets/images/person/img_chico_feliz_kata_gogo_escala_caso_de_exito.png') !!}" alt="Ilustración kata_gogo" loading="lazy">

                                </div>

                            </div>



                        </div>

                    </section>

                </div>



            </div>

        </section>

        <section class="customSection sectionParent casoExito_kata_gogo_1">

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
                                su efectividad en <br class="DT_e">
                                estrategias digitales
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Optimizaron
                                </span>
                            </div>
                            <p class="text">
                                el proceso de captación y <br class="DT_e">
                                seguimiento de clientes
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Integraron
                                </span>
                            </div>
                            <p class="text">
                                exitosamente marketing <br class="DT_e">
                                y ventas
                            </p>
                        </div>
                    </div>

                </section>

            </div>

        </section>
        <section class="component-info-text-video-T1 customSection sectionParent casoExito_kata_gogo_2 ">
            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            ¿Qué dice la CEO y fundadora <br class="DT_e">
                            sobre Escala?
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <img src="{!! App::setFilePath('/assets/images/overlays/bg_section_3_kata_gogo.svg') !!}" alt="" class="overlaySky1">

                        <div class="video col-md-12">

                            @php
                            $videoEmbed = App::setFilePath('/assets/videos/kata_gogo_video_testimonial.mp4');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/kata_gogo_img_overlay_video.png');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_kata_gogo_3">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">
                                Sobre la empresa:
                            </h3>

                            <p class="text">
                                KataGoGo, con más de 10 años de experiencia en <br class="DT_e">
                                branding y marketing digital, se especializa en <br class="DT_e">
                                crear marcas poderosas y estrategias que <br class="DT_e">
                                impulsan el crecimiento de las empresas. Después <br class="DT_e">
                                de ver excelentes resultados tanto en sus clientes <br class="DT_e">
                                como en su propia agencia, se convirtió en partner <br class="DT_e">
                                de Escala, llevando su compromiso con el éxito <br class="DT_e">
                                empresarial a un nuevo nivel.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/industria_salud_icon_orange.png') !!}" alt=""></div>
                                        <strong>Industria:</strong> Marketing

                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/tamaño_icon_orange.png') !!}" alt=""></div>
                                        <strong>Tamaño:</strong> 5 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/locacion_icon_orange.png') !!}" alt=""></div>
                                        <strong>Locación:</strong> Medellín, Col.

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/website_icon_orange.png') !!}" alt=""></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://katagogo.com/">https://katagogo.com/</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_kata_gogo_4">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_5_kata_gogo.svg') }}')" class="backgroundFull">

                <div class="section-row">
                    <div class="containElements">

                        <section class="innerSectionElement sct1">
                            <img src="{!! App::setFilePath('/assets/images/person/img_central_kata_gogo_caso_exito_.png') !!}" alt="">

                            <h2 class="primaryTitle">
                                Las herramientas de Escala que utilizan
                            </h2>

                        </section>

                        <section class="innerSectionElement sct2">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm_icon_escala.png') !!}" alt="">
                                        <span><span class="title">CRM</span> para organizar y gestionar eficientemente los datos de prospectos y clientes.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_crm_automatizaciones.png') !!}" alt="">
                                        <span><span class="title">Automatizaciones</span> diseñadas para agilizar procesos y hacer más eficientes las comunicaciones, aumentando la productividad.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/email_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Email Marketing</span> para nutrir la relación con los clientes, asegurando una comunicación constante que mejore la conversión.</span>
                                    </li> 
                                 
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/lead-scoring-icon.png') !!}" alt="">
                                        <span> <span class="title">Lead Scoring</span> para evaluar y priorizar prospectos según su potencial de conversión, optimizando el tiempo de atención del equipo.</span>
                                    </li>
                                     <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/formularios-icon-escala.png') !!}" alt="">
                                        <span> <span class="title">Formularios</span> con campos personalizados, para perfilar a los clientes con información clave, facilitando la automatización de procesos y comunicaciones según su perfil.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Whatsapp API</span> para facilitar el seguimiento de los asesores y la administración de conversaciones sin que se pierdan mensajes importantes.</span>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="innerSectionElement sct3">

                            <h2 class="primaryTitle">
                                El desafío antes de Escala:
                            </h2>
                            <span class="subTitle">
                                KataGoGo enfrentaba desafíos en la <br class="DT_e">
                                gestión eficiente de sus procesos por:
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
                                                Falta de integración de marketing y ventas: <br class="DT_e">
                                            </span>
                                            La falta de coordinación dificultaba la captación y <br class="DT_e">
                                            conversión de prospectos, afectando los <br class="DT_e">
                                            resultados de ventas.
                                        </li>

                                        <li>
                                            <span>
                                                Poca visibilidad del embudo de ventas:
                                            </span>
                                            Aunque <br class="DT_e">
                                            en sus procesos la consultora manejaba el <br class="DT_e">
                                            embudo de ventas, no contaban con una <br class="DT_e">
                                            herramienta que integrara fácilmente las fases <br class="DT_e">
                                            de marketing y ventas, lo que dificultaba el <br class="DT_e">
                                            seguimiento y la conversión de prospectos.
                                        </li>

                                        <li>
                                            <span> Gestión de datos con herramientas dispersas: <br class="DT_e">
                                            </span>
                                            No contaban con un software integrado que <br class="DT_e">
                                            permitiera centralizar y analizar la información <br class="DT_e">
                                            de manera eficiente, lo que impedía centralizar <br class="DT_e">
                                            y analizar información en tiempo real, limitando <br class="DT_e">
                                            la toma de decisiones y la respuesta rápida a <br class="DT_e">
                                            prospectos y clientes.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent casoExito_kata_gogo_5">

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
                                    <img src="{!! App::setFilePath('/assets/images/gifs/2. WhatsApp.gif') !!}" alt="">
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

                                        Centralizaron la gestión de contactos, historial de
                                        interacciones y seguimiento de oportunidades en
                                        un solo lugar, facilitando la coordinación entre los
                                        equipos de marketing y ventas.</p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejora de la comunicación interna al tener datos accesibles y organizados.</li>
                                        <li>Incremento en la tasa de cierre por un seguimiento más preciso.</li>
                                        <li>Reducción de tiempos administrativos al automatizar procesos manuales.</li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/CRM.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>2</span>
                                    <h3 class="subTittle">
                                        Formularios y Lead Scoring:

                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Diseñaron formularios personalizados para recopilar
                                        información clave y utilizaron Lead Scoring para
                                        priorizar prospectos con base en su perfil y
                                        probabilidad de conversión.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Asignación eficiente de leads a los ejecutivos comerciales.</li>
                                        <li>Priorización de oportunidades de mayor valor para el negocio.</li>
                                        <li>Aumento en la velocidad de respuesta, evitando la pérdida de prospectos.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/Email Marketing.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>3</span>
                                    <h3 class="subTittle">
                                        Email Marketing:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Automatizaron campañas de emails para nutrir relaciones
                                        con prospectos y clientes, generando contenidos
                                        personalizados en cada etapa del embudo de ventas.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Incremento en la retención mediante mensajes relevantes y oportunos.</li>
                                        <li>Mayor engagement gracias a comunicaciones consistentes alineadas con las necesidades del cliente.</li>
                                        <li>Optimización del ROI en campañas al mejorar la segmentación y el impacto.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/2. WhatsApp.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>4</span>
                                    <h3 class="subTittle">
                                        WhatsApp API integrado a Escala:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Implementaron la API para centralizar conversaciones
                                        en una sola plataforma, asignar interacciones
                                        automáticamente y realizar seguimiento detallado.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Reducción de mensajes perdidos, mejorando la experiencia del cliente.</li>
                                        <li>Aumento en la productividad del equipo comercial mediante la gestión integrada.</li>
                                        <li>Personalización de respuestas rápidas, aumentando la satisfacción del cliente.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </section>

                </div>
            </div>

        </section>




        <section class="customSection sectionParent casoExito_kata_gogo_6">

            <div class="section-row">


                <section class="innerSectionElement sct1">
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_section_9_kata_gogo.svg') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/catalina_goez_ceo_kata-gogo.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    "Escala ha sido un apoyo fundamental para potencializar mi <br class="DT_e">
                                    negocio. Valoro su acompañamiento constante, capacitaciones <br class="DT_e">
                                    y su capacidad de escuchar e implementar mejoras que <br class="DT_e">
                                    benefician a sus clientes. No solo ofrecen un software robusto <br class="DT_e">
                                    y amigable, sino también un servicio excepcional que asegura <br class="DT_e">
                                    que aprovechemos al máximo la herramienta. Gracias a Escala, <br class="DT_e">
                                    he mejorado la gestión de mis clientes, aumentado la conexión <br class="DT_e">
                                    en múltiples canales y fortalecido mi posición como una <br class="DT_e">
                                    empresa sólida y diferencial en el mercado".
                                    <br class="space">
                                    <br class="space">
                                    <span class="blue">
                                        Catalina Goez
                                        <br class="space">
                                        <span>CEO KataGoGo </span>
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_kata_gogo_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_10_kata_gogo.svg') }}')">

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
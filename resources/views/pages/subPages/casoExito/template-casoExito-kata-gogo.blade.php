<div id="casoExito_kata_gogo">
    <div class="sections">


        <section id="lead-form" class="hero2025 casoExito_kata_gogo_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-0.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <div class="imgTop">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_kata_gogo.webp') !!}" alt="Logo KataGoGo" class="logo-img" loading="lazy">
                                <span>
                                    Caso de éxito: Marketing
                                </span>
                            </div>
                            <h1 class="principalBigTitle">
                                Consultora de marketing mejoró su eficiencia,
                                y potenció las ventas de sus clientes con el CRM de Escala
                            </h1>
                        </div>
                        <div class="containerImage">
                            <img alt="Chico feliz usando CRM en KataGoGo" src="{!! App::setFilePath('/assets/images/illustrations/others/img_chico_feliz_kata_gogo_escala_caso_de_exito.webp') !!}" loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Chico feliz usando CRM en KataGoGo" src="{!! App::setFilePath('/assets/images/illustrations/others/img_chico_feliz_kata_gogo_escala_caso_de_exito.webp') !!}" loading="lazy">
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

        <section class="customSection sectionParent casoExito_kata_gogo_1">

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
                                su efectividad en estrategias digitales
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Optimizaron
                                </span>
                            </div>
                            <p class="text">
                                el proceso de captación y seguimiento de clientes
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Integraron
                                </span>
                            </div>
                            <p class="text">
                                exitosamente marketing y ventas
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
                            ¿Qué dice la CEO y fundadora sobre Escala?

                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="video">
                        @php
                        $videoEmbed = App::setFilePath('/assets/videos/kata_gogo_video_testimonial.mp4');
                        $videoCover = App::setFilePath('/assets/images/illustrations/others/kata_gogo_img_overlay_video.webp');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_kata_gogo_3">

            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">

                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">
                                Sobre la empresa:
                            </h3>

                            <p class="text">
                                KataGoGo, con más de 10 años de experiencia <br class="DT_e">
                                en branding y marketing digital, se especializa <br class="DT_e">
                                en crear marcas poderosas y estrategias que <br class="DT_e">
                                impulsan el crecimiento de las empresas. Después <br class="DT_e">
                                de ver excelentes resultados tanto en sus clientes <br class="DT_e">
                                como en su propia agencia, se convirtió en partner<br class="DT_e">
                                de Escala, llevando su compromiso con el éxito<br class="DT_e">
                                empresarial a un nuevo nivel.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-industria.webp') !!}" alt="Icono industria marketing"></div>
                                        <strong>Industria:</strong> Marketing
                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-tamaño.webp') !!}" alt="Icono tamaño empresa 5 empleados"></div>
                                        <strong>Tamaño:</strong> 5 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-locacion.webp') !!}" alt="Icono ubicación Medellín Colombia"></div>
                                        <strong>Locación:</strong> Medellín, Col.

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-wensite.webp') !!}" alt="Icono sitio web KataGoGo"></div>
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
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm-icon-list.webp') !!}" alt="Icono CRM KataGoGo">
                                    <span><span class="title">CRM</span> para organizar y gestionar eficientemente los datos de prospectos y clientes.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos-icon-list.webp') !!}" alt="Icono automatizaciones KataGoGo">
                                    <span><span class="title">Automatizaciones</span> diseñadas para agilizar procesos y hacer más eficientes las comunicaciones, aumentando la productividad.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/email-icon-list.webp') !!}" alt="Icono Email Marketing KataGoGo">
                                    <span><span class="title">Email Marketing</span> para nutrir la relación con los clientes, asegurando una comunicación constante que mejore la conversión.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/leadscoring-icon-list.webp') !!}" alt="Icono Lead Scoring KataGoGo">
                                    <span><span class="title">Lead Scoring</span> para evaluar y priorizar prospectos según su potencial de conversión, optimizando el tiempo de atención del equipo.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-card-formularios.webp') !!}" alt="Icono formularios KataGoGo">
                                    <span><span class="title">Formularios</span> con campos personalizados, para perfilar a los clientes y facilitar la automatización de procesos y comunicaciones según su perfil.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp-icon-list.webp') !!}" alt="Icono Whatsapp API KataGoGo">
                                    <span><span class="title">Whatsapp API</span> para facilitar el seguimiento de los asesores y la administración de conversaciones sin que se pierdan mensajes importantes.</span>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="innerSectionElement sct3">

                        <h2 class="primaryTitle">
                            El desafío antes de Escala:
                        </h2>
                        <span class="subTitle">
                            KataGoGo enfrentaba desafíos en la gestión <br class="space">
                            eficiente de sus procesos por:

                        </span>

                        <div class="containElements left" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-4-0.webp') !!}')">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images//illustrations/others/el-desafio-antes-de-escala.webp') !!}" alt="Ilustración desafío antes de Escala en KataGoGo">
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    <span>
                                        Falta de integración de marketing y ventas:
                                    </span>
                                    La falta de coordinación dificultaba la captación y conversión de prospectos, afectando los resultados de ventas.
                                </p>
                                <p>
                                    <span>
                                        Poca visibilidad del embudo de ventas:
                                    </span>
                                    Aunque en sus procesos la consultora manejaba el embudo de ventas, no contaban con una herramienta que integrara fácilmente las fases de marketing y ventas, lo que dificultaba el seguimiento y la conversión de prospectos.
                                </p>
                                <p>
                                    <span>
                                        Gestión de datos con herramientas dispersas:
                                    </span>
                                    No contaban con un software integrado que permitiera centralizar y analizar la información de manera eficiente y en tiempo real, limitando la toma de decisiones y la respuesta rápida a prospectos y clientes.
                                </p>
                            </div>
                        </div>
                    </section>
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
                        <div class="containElements right">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/CRM.gif') !!}" alt="GIF CRM KataGoGo">
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
                                        Centralizaron la gestión de contactos, historial de interacciones y seguimiento de oportunidades en un solo lugar, facilitando la coordinación entre los equipos de marketing y ventas.
                                    </p>
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

                        <div class="containElements left">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/Formularios y lead scoring.gif') !!}" alt="GIF formularios y lead scoring KataGoGo">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        2. Formularios y Lead Scoring:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Diseñaron formularios personalizados para recopilar información clave y utilizaron Lead Scoring para priorizar prospectos con base en su perfil y probabilidad de conversión.
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

                        <div class="containElements right">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/Email Marketing.gif') !!}" alt="GIF Email Marketing KataGoGo">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        3. Email Marketing:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Automatizaron campañas de emails para nutrir relaciones con prospectos y clientes, generando contenidos personalizados en cada etapa del embudo de ventas.
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

                        <div class="containElements left">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/2. WhatsApp.gif') !!}" alt="GIF WhatsApp API KataGoGo">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        4. WhatsApp API integrado a Escala:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Implementaron la API para centralizar conversaciones en una sola plataforma, asignar interacciones automáticamente y realizar seguimiento detallado.
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
                <section class="innerSectionElement sct1" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-5.webp') !!}')">

                    <div class="containElements">
                        <div class="image">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/catalina_goez_ceo_kata-gogo.webp') !!}" alt="Foto Catalina González Goez CEO KataGoGo" loading="lazy">
                        </div>
                        <div class="info">
                            <p>
                                "Escala ha sido un apoyo fundamental
                                para potenciar mi negocio. Valoro su
                                acompañamiento constante, capacitaciones
                                y su capacidad de escuchar e implementar mejoras
                                que benefician a sus clientes. No solo ofrecen
                                un software robusto y amigable, sino también un
                                servicio excepcional que asegura que aprovechemos
                                al máximo la herramienta. Gracias a Escala, he
                                mejorado la gestión de mis clientes, aumentado
                                la conexión en múltiples canales y fortalecido
                                mi posición como una empresa sólida y diferencial
                                en el mercado".

                                <br class="space">
                                <br class="space">
                                <span class="white">
                                    Catalina González Goez
                                    -
                                    <span>
                                        CEO KataGoGo
                                    </span>
                                </span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_kata_gogo_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-2025-casos-exito-7.webp') }}')">

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
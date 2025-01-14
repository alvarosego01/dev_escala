<div id="casoExito_bg_construcciones">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol casoExito_bg_construcciones_0 newHome ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_1_bg_construcciones.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8
                                            ">
                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/person/chico_feliz_casa__casos_exito_bg_construcciones.png') !!}" alt="Ilustración bg construcciones " loading="lazy">

                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_bg_construcciones_casos_de_exito.png') !!}" alt="" class="logo-img" loading="lazy">
                                            <small><span>Caso de éxito:</span> Bienes Raíces</small>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            <span class="whiteColor">
                                                B&G Construcciones,
                                            </span>
                                            <span class="span2">
                                                aumentó sus ventas <br class="DT_e">
                                                un 45% con el CRM <br class="DT_e">
                                                de Escala en menos <br class="DT_e">
                                                de un año.
                                            </span>


                                        </p>

                                    </div>

                                </div>



                            </div>
                            <div class="form7 col-md-12 col-lg-4">
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
                                    <img src="{!! App::setFilePath('/assets/images/person/chico_feliz_casa__casos_exito_bg_construcciones.png') !!}" alt="Ilustración bg construcciones " loading="lazy">
                                </div>

                            </div>



                        </div>

                    </section>

                </div>



            </div>

        </section>

        <section class="customSection sectionParent casoExito_bg_construcciones_1">

            <div class="section-row">

                <section class="innerSectionElement">
                    <h2 class="primaryTitle">¿Qué más han logrado con Escala?</h2>

                    <div class="containElements">
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Triplicaron
                                </span>
                            </div>
                            <p class="text">
                                la velocidad de respuesta <br class="DT_e">
                                a prospectos
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Duplicaron
                                </span>
                            </div>
                            <p class="text">
                                la productividad del <br class="DT_e">
                                equipo
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Redujeron
                                </span>
                            </div>
                            <p class="text">
                                errores operativos
                            </p>
                        </div>
                    </div>

                </section>

            </div>

        </section>
        <section class="component-info-text-video-T1 customSection sectionParent casoExito_bg_construcciones_2 ">
            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            ¿Qué dice la Directora Comercial <br class="DT_e">
                            sobre Escala?
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <img src="{!! App::setFilePath('/assets/images/banners/overlay_video_bg_construcciones.svg') !!}" alt="" class="overlaySky1">

                        <div class="video col-md-12">

                            @php
                            $videoEmbed = App::setFilePath('/assets/videos/B&G construcciones low (1).mp4');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/overlay_videos_bg_construccion.png');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_bg_construcciones_3">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">
                                Sobre B&G Construcciones
                            </h3>

                            <p class="text">
                                Es una empresa dedicada al sector inmobiliario, <br class="DT_e">
                                enfocada en entregar proyectos de vivienda de la <br class="DT_e">
                                más alta calidad. Se han posicionado como un <br class="DT_e">
                                referente en innovación y eficiencia, brindando <br class="DT_e">
                                soluciones constructivas de alta calidad y <br class="DT_e">
                                estándares superiores.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/industria_salud_icon_orange.png') !!}" alt=""></div>
                                        <strong>Industria:</strong> Bienes Raíces
                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/tamaño_icon_orange.png') !!}" alt=""></div>
                                        <strong>Tamaño:</strong> 13 - 50 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/locacion_icon_orange.png') !!}" alt=""></div>
                                        <strong>Locación:</strong> La Mesa, Cund., Col.

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/website_icon_orange.png') !!}" alt=""></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://www.bygconstrucciones.com">www.bygconstrucciones.com</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_bg_construcciones_4">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_5_caso_de_exito_bg_construcciones.svg') }}')" class="backgroundFull">

                <div class="section-row">
                    <div class="containElements">

                        <section class="innerSectionElement sct1">
                            <img src="{!! App::setFilePath('/assets/images/person/imagen_centro_bg_construcciones.png') !!}" alt="">

                            <h2 class="primaryTitle">
                                Las herramientas de Escala que utilizan
                            </h2>

                        </section>

                        <section class="innerSectionElement sct2">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm_icon_escala.png') !!}" alt="">
                                        <span><span class="title">CRM</span> para gestionar la información de contactos, oportunidades y productos, controlando así la disponibilidad de los proyectos de manera eficiente.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Landing pages </span> que les permiten captar clientes y generar oportunidades de venta a través de formularios personalizados.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/ads_icon_escala.png') !!}" alt="">
                                        <span><span class="title">Anuncios digitales</span> integrados al CRM, para captar nuevos leads y aumentar el desempeño de las campañas publicitarias.
                                        </span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/email_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Email Marketing </span> para mantener una comunicación nutrida, constante y efectiva con los clientes y prospectos.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Reportes Personalizados</span> para obtener información en tiempo real, facilitando decisiones basadas en datos, lo que optimiza la eficiencia en las campañas y relaciones con clientes.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/app_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Escala App</span> para monitorear la gestión del equipo, dar seguimiento a las oportunidades y responder comunicaciones sin necesidad de estar frente a la computadora.</span>
                                    </li>

                                </ul>
                            </div>
                        </section>
                        <section class="innerSectionElement sct3">

                            <h2 class="primaryTitle">
                                El desafío antes de Escala:
                            </h2>
                            <span class="subTitle">
                                La constructora enfrentaba algunos <br class="DT_e">
                                desafíos en su gestión comercial:
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
                                                Desorganización en el seguimiento de clientes: <br class="DT_e">
                                            </span>
                                            Cada comercial tenía su propia base de datos en <br class="DT_e">
                                            Excel, lo que ocasionaba la pérdida de contactos y <br class="DT_e">
                                            esfuerzos duplicados en ocasiones, al atender al <br class="DT_e">
                                            mismo cliente.
                                        </li>

                                        <li>
                                            <span>
                                                Tiempos de respuesta prolongados:
                                            </span>
                                            La <br class="DT_e">
                                            interacción con los leads demoraba más de 48 <br class="DT_e">
                                            horas, disminuyendo las oportunidades de <br class="DT_e">
                                            conversión y posible pérdida de clientes <br class="DT_e">
                                            potenciales.
                                        </li>

                                        <li>
                                            <span>Falta de visibilidad sobre resultados de <br class="DT_e">
                                                marketing y ventas:
                                            </span>
                                            No se podía medir el retorno <br class="DT_e">
                                            de inversión de las campañas ni contar con <br class="DT_e">
                                            reportes claros sobre la efectividad de los <br class="DT_e">
                                            esfuerzos comerciales, lo que dificultaba la toma <br class="DT_e">
                                            de decisiones estratégicas.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent casoExito_bg_construcciones_5">

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
                                    <img src="{!! App::setFilePath('/assets/images/gifs/14- CRM.gif') !!}" alt="">
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

                                        Con esta herramienta, lograron centralizar toda la información de clientes, asignar leads de manera clara y garantizar que cada prospecto recibiera la atención adecuada. Además, eliminaron la duplicidad de esfuerzos entre comerciales y lograron que su equipo, diverso en edades y experiencia tecnológica, se adaptara rápidamente gracias a su diseño intuitivo.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Seguimiento optimizado que impulsó un aumento en los cierres de ventas.</li>
                                        <li> Asignación precisa de prospectos, mejorando la eficiencia del equipo.</li>
                                        <li>Facilidad para registrar y priorizar oportunidades estratégicas.</li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/9-reports_Vista simplificada.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>2</span>
                                    <h3 class="subTittle">
                                        Reportes personalizados:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Los reportes en tiempo real permitieron acceder a datos
                                        esenciales para ajustar decisiones estratégicas
                                        rápidamente. Antes, el equipo debía esperar días para
                                        identificar si una campaña funcionaba; ahora, estos análisis
                                        se hacen en cuestión de horas.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mayor rapidez en el ajuste de campañas, evitando desperdicio de presupuesto.</li>
                                        <li>Mayor precisión al medir el rendimiento de cada etapa del embudo de ventas.</li>
                                        <li>Predicción de tendencias clave para mejorar la planificación comercial y de marketing.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/5. Landing pages.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>3</span>
                                    <h3 class="subTittle">
                                        Landing Pages:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        El equipo de marketing utiliza esta herramienta para
                                        captar prospectos altamente segmentados y simplificar
                                        el proceso de atracción y conversión de clientes
                                        potenciales. Además, su integración directa con el CRM
                                        garantiza una gestión eficiente y fluida.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Incremento en la calidad de los prospectos generados.</li>
                                        <li>Mayor tasa de conversión desde campañas digitales.</li>
                                        <li>Seguimiento más personalizado de cada lead, gracias a la integración directa con el CRM.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements right special">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/8-Anuncios Digitales.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>4</span>
                                    <h3 class="subTittle">
                                        Anuncios integrados con el CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Esta herramienta permite segmentar el público de
                                        forma precisa, atraer tráfico a las landing pages de sus
                                        proyectos y realizar ajustes en tiempo real para
                                        maximizar el impacto de sus campañas. Gracias a su
                                        integración con el CRM, se facilitó el seguimiento de
                                        los prospectos generados, optimizando la conversión.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Generación de tráfico altamente segmentado a las páginas de los proyectos, mejorando la calidad de los leads.</li>
                                        <li>Mayor control sobre el presupuesto publicitario, optimizando las campañas y evitando el desperdicio de recursos.</li>
                                        <li>Aumento en la tasa de conversión, al dirigir los anuncios a un público específico y ofrecerles contenido relevante.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </section>

                </div>
            </div>

        </section>




        <section class="customSection sectionParent casoExito_bg_construcciones_6">

            <div class="section-row">


                <section class="innerSectionElement sct1">
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_section_9_bg_construcciones.svg') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/laura_hernandez_directora_comercial_bg_construcciones.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    “Lo que más valoro de Escala es la facilidad de uso y el excelente <br class="DT_e">
                                    servicio al cliente. La implementación fue fluida gracias al equipo <br class="DT_e">
                                    de soporte, siempre dispuesto a ayudarnos. Los reportes son <br class="DT_e">
                                    muy claros y nos han permitido tomar decisiones más acertadas <br class="DT_e">
                                    en menor tiempo. Es una inversión que realmente ha mejorado <br class="DT_e">
                                    nuestros procesos de ventas, nos ha ayudado a mejorar <br class="DT_e">
                                    resultados y nos ha dado el control que necesitábamos”.
                                    <br class="space">
                                    <br class="space">
                                    <span class="blue">
                                        Laura Hernández
                                        <br class="space">
                                        <span>Directora Comercial
                                            B&G Construcciones</span>
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_bg_construcciones_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_10_bg_construcciones.svg') }}')">

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
<div id="casoExito_Cambridge">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol casoExito_Cambridge_0 newHome ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_1_Cambridge.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info
                                                col-md-12 col-lg-8
                                            ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/person/img_chico_feliz_Cambridge_escala_caso_de_exito.png') !!}" alt="Ilustración Cambridge" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_colegio_cambridge_caso_de_exito.png') !!}" alt="" class="logo-img" loading="lazy">
                                            <small><span>Caso de éxito:</span> Automotriz</small>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            <span class="blueColor">
                                                Este gran distribuidor <br class="DT_e">
                                                de motocicletas,
                                            </span>
                                            <span class="span2">
                                                incrementó sus ventas <br class="DT_e">
                                                en un 30%,
                                            </span>
                                            <span class="blueColor">
                                                en menos de un año <br class="DT_e">
                                                gracias al CRM de Escala
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
                                    <img src="{!! App::setFilePath('/assets/images/person/img_chico_feliz_Cambridge_escala_caso_de_exito.png') !!}" alt="Ilustración Cambridge" loading="lazy">

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
                                    Recuperaron el 35%
                                </span>
                            </div>
                            <p class="text">
                                de prospectos perdidos
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Incrementaron
                                </span>
                            </div>
                            <p class="text">
                                la rapidez y efectividad en las <br class="DT_e">
                                respuestas a prospectos
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Aumentaron
                                </span>
                            </div>
                            <p class="text">
                                la participación del canal
                                digital en sus ventas
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
                            ¿Qué dice la líder comercial <br class="DT_e">
                            sobre Escala?
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <img src="{!! App::setFilePath('/assets/images/overlays/background_sky_yellow.svg') !!}" alt="" class="overlaySky1">

                        <div class="video col-md-12">

                            @php
                            $videoEmbed = App::setFilePath('/assets/videos/Cambridge_testimonial_video.mp4');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/ruby_mino_img_overlay_video.png');
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
                                Cambridge es el mayor distribuidor autorizado de <br class="DT_e">
                                motocicletas Hero en Colombia con 33 puntos de <br class="DT_e">
                                venta. Ofrecen también productos, repuestos y <br class="DT_e">
                                servicio técnico, para que los usuarios disfruten al <br class="DT_e">
                                máximo de su motocicleta Hero.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/industria_salud_icon_orange.png') !!}" alt=""></div>
                                        <strong>Industria:</strong> Automotriz

                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/tamaño_icon_orange.png') !!}" alt=""></div>
                                        <strong>Tamaño:</strong> 51 + empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/locacion_icon_orange.png') !!}" alt=""></div>
                                        <strong>Locación:</strong> A nivel nacional, Colombia

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/website_icon_orange.png') !!}" alt=""></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://heroCambridge.com/">https://heroCambridge.com/</a>

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
                                        <span><span class="title">CRM</span> para hacer el seguimiento de los contactos que llegan y gestionar eficientemente cada interacción.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/ads_icon_escala.png') !!}" alt="">
                                        <span><span class="title">Anuncios digitales</span> integrados a Escala para generar nuevos prospectos y medir el rendimiento de las campañas publicitarias.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Whatsapp Inbox</span> para centralizar la comunicación entre asesores y prospectos o clientes a nivel nacional, garantizando un servicio más fluido y organizado.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Flujos Automatizados</span> para dirigir a los clientes hacia procesos específicos como pagos al contado o con crédito, optimizando la precalificación y mejorando
                                            la experiencia del cliente.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Reportes Personalizados</span> para medir las etapas del embudo de ventas e identificar cuántos contactos avanzan en cada una, facilitando decisiones más informadas.</span>
                                    </li>
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/app_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Escala App</span> para gestionar las ventas y seguimiento desde cualquier lugar.</span>
                                    </li>

                                </ul>
                            </div>
                        </section>
                        <section class="innerSectionElement sct3">

                            <h2 class="primaryTitle">
                                El desafío antes de Escala:
                            </h2>
                            <span class="subTitle">
                                Cambridge no lograba <br class="DT_e">
                                optimizar su proceso de ventas debido a:
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
                                                Problemas de integración y métricas inexactas: <br class="DT_e">
                                            </span>
                                            La información de los leads generados en Meta <br class="DT_e">
                                            no llegaba correctamente a su anterior CRM, lo que <br class="DT_e">
                                            dificultaba el seguimiento adecuado <br class="DT_e">
                                            de los prospectos.
                                        </li>

                                        <li>
                                            <span>
                                                Falta de soporte y comunicación con el <br class="DT_e">
                                                software anterior:
                                            </span>
                                            La atención al cliente del <br class="DT_e">
                                            proveedor anterior era deficiente, lo que <br class="DT_e">
                                            ocasionó la pérdida de procesos avanzados, <br class="DT_e">
                                            generando frustración y desperdicio de tiempo.
                                        </li>

                                        <li>
                                            <span>Gestión manual y desorganizada:
                                            </span>
                                            El proceso <br class="DT_e">
                                            de seguimiento de los leads se realizaba <br class="DT_e">
                                            manualmente, lo que no solo generaba errores, <br class="DT_e">
                                            sino que también hacía muy difícil controlar la <br class="DT_e">
                                            información y tomar decisiones a tiempo.
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
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-(2).gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>1</span>
                                    <h3 class="subTittle">
                                        Automatización de procesos:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Escala automatizó el proceso desde el primer contacto hasta la
                                        asignación de leads según su perfil financiero, optimizando el
                                        embudo de ventas. Esto permitió segmentar prospectos, evitar
                                        el uso de recursos en leads no viables y crear etapas
                                        personalizadas adaptadas al negocio de venta de motocicletas.</p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Simplificación del proceso de compra al filtrar leads según su capacidad financiera.</li>
                                        <li>Mejora en la calidad de prospectos gracias a flujos de precalificación optimizados.</li>
                                        <li>Incremento en la recuperación de prospectos mediante automatizaciones personalizadas.</li>
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
                                    <span>2</span>
                                    <h3 class="subTittle">
                                        WhatsApp integrado al CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">

                                        A través de esta integración, los leads obtenidos de las
                                        campañas publicitarias en Meta se registran
                                        automáticamente en el software. Esto facilita la asignación
                                        de los leads a asesores a nivel nacional y ellos a su vez,
                                        acceden a toda la información desde el primer contacto
                                        hasta el cierre de la venta. Además, se configuraron flujos
                                        automáticos para gestionar la información y cumplir con la
                                        política de tratamiento de datos desde Whatsapp.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejora significativa en la comunicación, asegurando que no se pierda la información y que ningún prospecto quede sin atención.</li>
                                        <li>Optimización del tiempo de respuesta a cada interesado.
                                        </li>
                                        <li>Incremento en la eficiencia del seguimiento de prospectos y toma de decisiones informadas.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/5.reports_Vista-simplificada-(1).gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>3</span>
                                    <h3 class="subTittle">
                                        Reportes Personalizados:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Cambridge configuró reportes a medida para monitorear
                                        indicadores clave como tasas de conversión por etapa del
                                        embudo, tiempos de respuesta del equipo comercial,
                                        análisis de leads según su origen y seguimiento al
                                        desempeño de cada vendedor.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Lograron una mayor conversión al optimizar recursos en las etapas clave del embudo.</li>
                                        <li>Tomaron mejores decisiones rápidamente, ajustando estrategias basadas en datos en tiempo real.</li>
                                        <li>Mejoraron la atención al cliente con respuestas más claras y precisas.</li>
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
                                    <span>4</span>
                                    <h3 class="subTittle">
                                        Escala App:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Los asesores comerciales y líderes de Cambridge utilizan el <br class="DT_e">
                                        CRM de Escala integrado con WhatsApp Inbox <br class="DT_e">
                                        directamente desde sus celulares. Esto les permite dar <br class="DT_e">
                                        seguimiento a sus clientes, gestionar las oportunidades <br class="DT_e">
                                        de venta y monitorear su rendimiento desde cualquier <br class="DT_e">
                                        lugar, sin necesidad de estar en una computadora.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mayor productividad del equipo comercial.</li>
                                        <li>Respuesta más ágil a los prospectos interesados <br class="DT_e"> en motocicletas.</li>
                                        <li>Mejora significativa en la experiencia de compra del cliente.</li>

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
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/ruby_mino_lider_comercial_Cambridge.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    "Con Escala, hemos avanzado de una manera muy <br class="DT_e">
                                    positiva. Uno de sus grandes diferenciadores es el <br class="DT_e">
                                    servicio al cliente y el acompañamiento constante. <br class="DT_e">
                                    Los reportes personalizados han sido una bendición, <br class="DT_e">
                                    nos ayudan a generar informes rápidamente y a <br class="DT_e">
                                    analizar los datos para tomar mejores decisiones. <br class="DT_e">
                                    Escala ha sido la mejor opción para manejar nuestra <br class="DT_e">
                                    parte digital y de marketing, y nos sentimos <br class="DT_e">
                                    respaldados en todo momento".
                                    <br class="space">
                                    <br class="space">
                                    <span class="blue">
                                        Ruby Mino
                                        <br class="space">
                                        <span> Líder Comercial Cambridge </span>
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_Cambridge_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_10_Cambridge.svg') }}')">

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
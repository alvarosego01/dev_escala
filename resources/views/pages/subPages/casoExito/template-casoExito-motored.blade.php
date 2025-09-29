<div id="casoExito_motored">
    <div class="sections">


        <section id="lead-form" class="hero2025 casoExito_motored_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-0.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <div class="imgTop">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_motored.webp') !!}" alt="Logo Motored" class="logo-img" loading="lazy">
                                <span>
                                    Caso de éxito: Automotriz
                                </span>
                            </div>
                            <h1 class="principalBigTitle">
                                Este gran distribuidor de motocicletas,
                                incrementó sus ventas en un 30%,
                                en menos de un año gracias al CRM de Escala
                            </h1>
                        </div>
                        <div class="containerImage">
                            <img alt="Chico feliz con motocicleta Motored" src="{!! App::setFilePath('/assets/images/illustrations/others/img_chico_feliz_motored_escala_caso_de_exito.webp') !!}" loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Chico feliz con motocicleta Motored" src="{!! App::setFilePath('/assets/images/illustrations/others/img_chico_feliz_motored_escala_caso_de_exito.webp') !!}" loading="lazy">
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

        <section class="customSection sectionParent casoExito_motored_1">

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
                                la rapidez y efectividad en las respuestas a prospectos
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Aumentaron
                                </span>
                            </div>
                            <p class="text">
                                la participación del canal digital en sus ventas
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="component-info-text-video-T1 customSection sectionParent casoExito_motored_2 ">
            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <h2 class="primaryTitle whiteColor">
                            ¿Qué dice la líder comercial <br class="space"> sobre Escala?
                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="video">
                        @php
                        $videoEmbed = App::setFilePath('/assets/videos/motored_testimonial_video.mp4');
                        $videoCover = App::setFilePath('/assets/images/illustrations/others/ruby_mino_img_overlay_video.webp');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_motored_3">

            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">

                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">
                                Sobre la empresa:
                            </h3>

                            <p class="text">
                                Motored es el mayor distribuidor autorizado <br class="DT_e">
                                de motocicletas Hero en Colombia con 33 puntos <br class="DT_e">
                                de venta. Ofrecen también productos, repuestos <br class="DT_e">
                                y servicio técnico, para que los usuarios <br class="DT_e">
                                disfruten al máximo de su motocicleta Hero.


                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-industria.webp') !!}" alt="Icono industria automotriz"></div>
                                        <strong>Industria:</strong> Automotriz

                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-tamaño.webp') !!}" alt="Icono tamaño empresa más de 51 empleados"></div>
                                        <strong>Tamaño:</strong> 51 + empleados

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-locacion.webp') !!}" alt="Icono ubicación Colombia nacional"></div>
                                        <strong>Locación:</strong> A nivel nacional, Colombia


                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-wensite.webp') !!}" alt="Icono sitio web Motored"></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://heromotored.com/">
                                            heromotored.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_motored_4">
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
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm-icon-list.webp') !!}" alt="Icono CRM Motored">
                                    <span><span class="title">CRM</span> para hacer el seguimiento de los contactos que llegan y gestionar eficientemente cada interacción.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/anuncios-icon-list.webp') !!}" alt="Icono anuncios digitales Motored">
                                    <span><span class="title">Anuncios digitales</span> integrados a Escala para generar nuevos prospectos y medir el rendimiento de las campañas publicitarias.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp-icon-list.webp') !!}" alt="Icono WhatsApp Inbox Motored">
                                    <span><span class="title">Whatsapp Inbox</span> para centralizar la comunicación entre asesores y prospectos o clientes a nivel nacional, garantizando un servicio más fluido y organizado.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos-icon-list.webp') !!}" alt="Icono flujos automatizados Motored">
                                    <span><span class="title">Flujos Automatizados</span> para dirigir a los clientes hacia procesos específicos como pagos al contado o con crédito, optimizando la precalificación y mejorando la experiencia del cliente.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes.icon-list.webp') !!}" alt="Icono reportes personalizados Motored">
                                    <span><span class="title">Reportes Personalizados</span> para medir las etapas del embudo de ventas e identificar cuántos contactos avanzan en cada una, facilitando decisiones más informadas.</span>
                                </li>
                                <li>
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/app-icon-list.webp') !!}" alt="Icono Escala App Motored">
                                    <span><span class="title">Escala App</span> para gestionar las ventas y seguimiento desde cualquier lugar.</span>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="innerSectionElement sct3">

                        <h2 class="primaryTitle">
                            El desafío antes de Escala:
                        </h2>
                        <span class="subTitle">
                            Motored no lograba optimizar <br class="space">
                            su proceso de ventas debido a:
                        </span>

                        <div class="containElements left" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-4-0.webp') !!}')">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images//illustrations/others/el-desafio-antes-de-escala.webp') !!}" alt="Ilustración desafío antes de Escala en Motored">
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    <span>
                                        Problemas de integración y métricas inexactas:
                                    </span>
                                    La información de los leads generados en Meta no llegaba correctamente a su anterior CRM, lo que dificultaba el seguimiento adecuado de los prospectos.
                                </p>
                                <p>
                                    <span>
                                        Falta de soporte y comunicación con el software anterior:
                                    </span>
                                    La atención al cliente del proveedor anterior era deficiente, lo que ocasionó la pérdida de procesos avanzados, generando frustración y desperdicio de tiempo.
                                </p>
                                <p>
                                    <span>
                                        Gestión manual y desorganizada:
                                    </span>
                                    El proceso de seguimiento de los leads se realizaba manualmente, lo que no solo generaba errores, sino que también hacía muy difícil controlar la información y tomar decisiones a tiempo.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent casoExito_motored_5">

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
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-(2).gif') !!}" alt="GIF automatización de procesos Motored">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        1. Automatización de procesos:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Escala automatizó el proceso desde el primer contacto hasta la asignación de leads según su perfil financiero, optimizando el embudo de ventas. Esto permitió segmentar prospectos, evitar el uso de recursos en leads no viables y crear etapas personalizadas adaptadas al negocio de venta de motocicletas.
                                    </p>
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

                        <div class="containElements left">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/2. WhatsApp.gif') !!}" alt="GIF WhatsApp integrado al CRM Motored">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        2. WhatsApp integrado al CRM:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Los leads obtenidos de campañas publicitarias en Meta se registran automáticamente en el software. Se asignan a asesores y acceden a toda la información desde el primer contacto hasta el cierre de la venta. Se configuraron flujos automáticos para gestionar la información y cumplir con la política de tratamiento de datos desde WhatsApp.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mejora significativa en la comunicación, asegurando que no se pierda la información y que ningún prospecto quede sin atención.</li>
                                        <li>Optimización del tiempo de respuesta a cada interesado.</li>
                                        <li>Incremento en la eficiencia del seguimiento de prospectos y toma de decisiones informadas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="containElements right">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/8. Reportes.gif') !!}" alt="GIF reportes personalizados Motored">
                                </div>
                            </div>
                            <div class="info">
                                <div class="containElements">
                                    <h3 class="subTittle">
                                        3. Reportes Personalizados:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Motored configuró reportes a medida para monitorear indicadores clave como tasas de conversión por etapa del embudo, tiempos de respuesta del equipo comercial, análisis de leads según su origen y seguimiento al desempeño de cada vendedor.
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

                        <div class="containElements left ">
                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-whatsapp.gif') !!}" alt="GIF Escala App Motored">
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
                                        Los asesores comerciales y líderes de Motored utilizan el CRM de Escala integrado con WhatsApp Inbox directamente desde sus celulares. Esto les permite dar seguimiento a sus clientes, gestionar oportunidades de venta y monitorear su rendimiento desde cualquier lugar.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Mayor productividad del equipo comercial.</li>
                                        <li>Respuesta más ágil a los prospectos interesados en motocicletas.</li>
                                        <li>Mejora significativa en la experiencia de compra del cliente.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </section>




        <section class="customSection sectionParent casoExito_motored_6">

            <div class="section-row">
                <section class="innerSectionElement sct1" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-2025-casos-exito-5.webp') !!}')">

                    <div class="containElements">
                        <div class="image">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/ruby_mino_lider_comercial_motored.webp') !!}" alt="Foto Ruby Mino Líder Comercial Motored" loading="lazy">
                        </div>
                        <div class="info">
                            <p>
                                "Con Escala, hemos avanzado de una manera muy positiva.
                                Uno de sus grandes diferenciadores es el servicio
                                al cliente y el acompañamiento constante. Los reportes
                                personalizados han sido una bendición, nos ayudan a
                                generar informes rápidamente y a analizar los datos
                                para tomar mejores decisiones. Escala ha sido la mejor
                                opción para manejar nuestra parte digital y de marketing,
                                y nos sentimos respaldados en todo momento".
                                <br class="space">
                                <br class="space">
                                <span class="white">
                                    Ruby Mino
                                    -
                                    <span>
                                        Líder Comercial Motored
                                    </span>
                                </span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_motored_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-2025-casos-exito-7.webp') }}')">

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
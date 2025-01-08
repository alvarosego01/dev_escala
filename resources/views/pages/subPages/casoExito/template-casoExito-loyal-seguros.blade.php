<div id="casoExito_loyal_seguros">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol casoExito_loyal_seguros_0 newHome ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_1_loyal_seguros.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info
                                                col-md-12 col-lg-8
                                            ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/person/chica_feliz__casos_exito_loyal_seguros.png') !!}" alt="Ilustración loyal seguros " loading="lazy">

                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_loyal_seguros_casos_exito.png') !!}" alt="" class="logo-img" loading="lazy">
                                            <small><span>Caso de éxito: Seguros </span></small>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            <span class="blueColor">
                                                Esta empresa de seguros
                                            </span>
                                            <span class="span2">
                                                protegió un 40% más <br class="DT_e">
                                                sus datos con el CRM <br class="DT_e">
                                                de Escala
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
                                    <img src="{!! App::setFilePath('/assets/images/person/chica_feliz__casos_exito_loyal_seguros.png') !!}" alt="Ilustración loyal seguros " loading="lazy">
                                </div>

                            </div>



                        </div>

                    </section>

                </div>



            </div>

        </section>

        <section class="customSection sectionParent casoExito_loyal_seguros_1">

            <div class="section-row">

                <section class="innerSectionElement">
                    <h2 class="primaryTitle">¿Qué más han logrado con Escala?</h2>

                    <div class="containElements">
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Disminuyeron
                                </span>
                            </div>
                            <p class="text">
                                significativamente la <br class="DT_e">
                                duplicidad de la información
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Incrementaron
                                </span>
                            </div>
                            <p class="text">
                                el nivel de confianza y
                                <br class="DT_e">
                                lealtad de sus clientes
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Mejoraron
                                </span>
                            </div>
                            <p class="text">
                                el control y acceso a la
                                <br class="DT_e">
                                información de cada cliente
                            </p>
                        </div>
                    </div>

                </section>

            </div>

        </section>
        <section class="component-info-text-video-T1 customSection sectionParent casoExito_loyal_seguros_2 ">
            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle whiteColor">
                            ¿Qué dice la directora de soporte y <br class="DT_e">
                            comunicación sobre Escala?
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="groupElements row">

                        <img src="{!! App::setFilePath('/assets/images/banners/overlay_video_loyal_seguros.svg') !!}" alt="" class="overlaySky1">

                        <div class="video col-md-12">

                            @php
                            $videoEmbed = App::setFilePath('/assets/videos/');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_loyal_seguros_3">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">
                                Sobre Loyal Insurance Group
                            </h3>

                            <p class="text">
                                Ofrecen soluciones innovadoras y personalizadas <br class="DT_e">
                                en el sector de seguros. Su enfoque se centra en <br class="DT_e">
                                formar y empoderar a agentes que aspiran a <br class="DT_e">
                                convertirse en empresarios independientes, <br class="DT_e">
                                impulsando su crecimiento profesional continuo.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/industria_salud_icon_orange.png') !!}" alt=""></div>
                                        <strong>Industria:</strong> Seguros
                                    </li>

                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/tamaño_icon_orange.png') !!}" alt=""></div>
                                        <strong>Tamaño:</strong>13 - 50 empleados
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/locacion_icon_orange.png') !!}" alt=""></div>
                                        <strong>Locación:</strong>Miami, Fl.

                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/website_icon_orange.png') !!}" alt=""></div>
                                        <strong>Website:</strong> <a target="_blank" href="https://loyalinsurancegroup.net">loyalinsurancegroup.net</a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent casoExito_loyal_seguros_4">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_5_caso_de_exito_loyal_seguros.svg') }}')" class="backgroundFull">

                <div class="section-row">
                    <div class="containElements">

                        <section class="innerSectionElement sct1">
                            <img src="{!! App::setFilePath('/assets/images/person/imagen_centro_loyal_seguros.png') !!}" alt="">

                            <h2 class="primaryTitle">
                                Las herramientas de Escala que utilizan
                            </h2>

                        </section>

                        <section class="innerSectionElement sct2">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/crm_icon_escala.png') !!}" alt="">
                                        <span><span class="title">CRM</span> para controlar y registrar todos los datos y las interacciones con clientes y prospectos.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_planificador_embudos.png') !!}" alt="">
                                        <span> <span class="title">Planificador de Embudos</span> para conocer el estado de cada prospecto durante el proceso comercial.</span>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Whatsapp Inbox</span>para garantizar un seguimiento eficiente a todas las conversaciones y fidelizar con un número oficial de la empresa de seguros.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_ads_small.png') !!}" alt="">
                                        <span><span class="title">Anuncios digitales</span> integrados al CRM, para gestionar y dar seguimiento personalizado a prospectos provenientes de campañas publicitarias.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Flujos Automatizados</span> en las comunicaciones, para enviar emails y mensajes automáticos, estandarizando la experiencia del cliente.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Reportes Personalizados</span> para medir el nivel de respuesta del equipo y el progreso de los procesos comerciales.</span>
                                    </li>

                                    <li>
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/app_icon_escala.png') !!}" alt="">
                                        <span> <span class="title">Escala App</span> para que algunos miembros del equipo puedan realizar seguimientos en tiempo real desde dónde estén.</span>
                                    </li>

                                    <li>

                                    </li>

                                </ul>
                            </div>
                        </section>
                        <section class="innerSectionElement sct3">

                            <h2 class="primaryTitle">
                                El desafío antes de Escala:
                            </h2>
                            <span class="subTitle">
                                Loyal Insurance Group enfrentaba algunos desafíos <br class="DT_e">
                                operativos que dificultaban su eficiencia y crecimiento:
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
                                                Falta de automatización en procesos clave,
                                            </span>
                                            lo <br class="DT_e">
                                            que generaba tareas manuales y dificultaba el <br class="DT_e">
                                            seguimiento efectivo de clientes en todo el ciclo <br class="DT_e">
                                            de ventas.
                                        </li>

                                        <li>
                                            <span>
                                                Riesgos de seguridad y pérdida de información, <br class="DT_e">
                                            </span>
                                            , al utilizar herramientas no especializadas y <br class="DT_e">
                                            centralizadas, por lo que no tenían control sobre <br class="DT_e">
                                            los datos y se exponía a la empresa a fugas de <br class="DT_e">
                                            información sensible.
                                        </li>

                                        <li>
                                            <span>Dificultad para gestionar WhatsApp de
                                                manera óptima, <br class="DT_e">
                                            </span>
                                            lo que provocaba bloqueos, <br class="DT_e">
                                            desorganización y un seguimiento
                                            inconsistente de las conversaciones con los <br class="DT_e">
                                            clientes, afectando la fidelización y el servicio
                                            al cliente.
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent casoExito_loyal_seguros_5">

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
                                        Se convirtió en la herramienta principal para registrar,
                                        gestionar y controlar todas las interacciones con prospectos
                                        y clientes, centralizando y organizando la información en un
                                        único lugar accesible para todo el equipo. Además, la posibilidad
                                        de personalizar los campos ha sido crucial, ya que permitió adaptar
                                        la plataforma a las necesidades específicas del negocio de seguros.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Disminución en los tiempos operativos que lleva la organización y
                                            control de los contactos que llegan.</li>
                                        <li>Incremento en la retención, con seguimientos y comunicaciones
                                            segmentadas al interés de cada prospecto.</li>
                                        <li>Aumento en la productividad del equipo al eliminar errores en
                                            la gestión de datos, además de tener la información mucho más segura.</li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="containElements right">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/automatizaciones-(2).gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>2</span>
                                    <h3 class="subTittle">
                                        Planificador de Embudos:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Implementaron esta herramienta para gestionar y medir cada etapa del
                                        proceso de ventas. Lograron visualizar mucho mejor el estado de cada
                                        cliente y priorizar acciones clave para avanzar en la conversión.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Estrategias más efectivas en cada etapa del proceso comercial.</li>
                                        <li>Equipos más eficientes con cierres de ventas más rápidos, al identificar oportunidades que antes no veían.</li>
                                        <li>Mayor retención de clientes gracias a un seguimiento constante
                                            y personalizado.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/ws_api.gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>3</span>
                                    <h3 class="subTittle">
                                        Whatsapp API:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Centralizaron la comunicación con un número oficial
                                        de la empresa, ya que para Loyal Insurance Group,
                                        era muy importante tener un número único y generar
                                        tranquilidad y credibilidad a clientes y prospectos.
                                        Además, la personalización y automatización de los
                                        mensajes agilizó la interacción.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Consolidaron la fidelización de clientes con un canal confiable y profesional.</li>
                                        <li>Eliminaron la dependencia de números individuales, evitando bloqueos y riesgos de pérdida de información.</li>
                                        <li>Mejoraron la eficiencia del servicio al cliente, ofreciendo respuestas más rápidas y precisas.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements right special">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/5.reports_Vista-simplificada-(1).gif') !!}" alt="">
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
                                        Esto les permitió hacer un seguimiento automatizado
                                        de los prospectos captados a través de campañas de marketing,
                                        identificando el origen, el interés específico de cada
                                        prospecto y asegurando que ninguna oportunidad de conversión se perdiera.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Aumento de la efectividad de las campañas de marketing.</li>
                                        <li>No más pérdida de prospectos, gracias a la conexión automática de los contactos al CRM.</li>
                                        <li>Optimización del presupuesto de marketing al mejorar la eficiencia
                                            de las campañas pagas.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="containElements left">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/gifs/Anuncios-Digitales-(1).gif') !!}" alt="">
                                </div>
                            </div>

                            <div class="info">
                                <div class="containElements">
                                    <span>5</span>
                                    <h3 class="subTittle">
                                        Uso embudos de ventas y reportes personalizados:
                                    </h3>
                                </div>
                                <div class="containElements_2">
                                    <p class="text">
                                        Con esta herramienta, evalúan el nivel de respuesta de su equipo
                                        y miden el progreso de los procesos comerciales, ajustando
                                        estrategias con mayor agilidad.
                                    </p>
                                    <h3 class="subTitle">
                                        Impacto:
                                    </h3>
                                    <ul>
                                        <li>Identificación rápida de oportunidades de mejora en el proceso de ventas.</li>
                                        <li>Toma de mejores decisiones gracias a la visibilidad detallada del rendimiento del equipo.</li>
                                        <li>
                                            Aceleración del ciclo de ventas gracias a ajustes estratégicos basados en datos.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </section>

                </div>
            </div>

        </section>




        <section class="customSection sectionParent casoExito_loyal_seguros_6">

            <div class="section-row">


                <section class="innerSectionElement sct1">
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_section_9_loyal_seguros.svg') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/jhossana_fornez_director_soporte_loyal_seguros.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    “Escala ha sido un aliado para ordenar y sistematizar nuestra <br class="DT_e">
                                    organización, lo que se traduce en crecimiento a largo plazo. La <br class="DT_e">
                                    centralización de la información y la reducción de riesgos como la <br class="DT_e">
                                    pérdida de datos o el bloqueo de números han optimizado <br class="DT_e">
                                    tiempo y recursos. Además, una de las fortalezas de Escala, <br class="DT_e">
                                    radica en su equipo siempre dispuesto a ayudar y mejorar la <br class="DT_e">
                                    herramienta en función del feedback de los clientes. El <br class="DT_e">
                                    acompañamiento constante y el interés genuino por el éxito de <br class="DT_e">
                                    nuestros procesos han sido clave para maximizar los resultados”.
                                    <br class="space">
                                    <span class="blue">
                                        Jhossana Fornez <br class="space">
                                        <span>Directora de Soporte y Comunicación Loyal Insurance Group</span>
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent casoExito_loyal_seguros_7 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_10_loyal_seguros.svg') }}')">

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
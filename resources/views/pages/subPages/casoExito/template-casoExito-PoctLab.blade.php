<div id="casoExito_PoctLab">
    <div class="sections">


        @php
        $parameters = [
        'backgroundImageType' => true,
        'overlay' => false,
        'classSection' => 'threeCol casoExito_PoctLab_0 newHome',

        'title' =>'
        <img class="logo-img" src="'.App::setFilePath('/assets/images/illustrations/others/logo_poctlab_casos_de_exito.png').'">
        <small><span>Caso de éxito:</span> Salud</small>

        ',
        'text' => '<span class="whiteColor">
            Laboratorio clínico con más de 30 años en el mercado
        </span>
        <span style="color: #DEF3F5; font-weight: 700;">
            duplicó sus ventas con el CRM de Escala en
            menos de un año.
        </span>

        ',
        'threeCol' => true,
        'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
        'backgroundImage' => App::setFilePath('/assets/images/banners/background_space_5.png'),
        'overlayImage' => null,
        'image' => App::setFilePath('/assets/images/person/casos_de_uso_poctlab_mujer_feliz.png'),
        'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM',
        ];
        @endphp
        @header_t1($parameters)
        @endheader_t1

        <section class="customSection sectionParent casoExito_PoctLab_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="title">¿Qué más han logrado con Escala?</h2>
                    <div class="containElements">

                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Duplicaron
                                </span>
                            </div>
                            <p class="text">
                                la cantidad  de prospectos generados
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Triplicaron
                                </span>
                            </div>
                            <p class="text">
                                el volumen de conversaciones con prospectos por WhatsAPP
                            </p>
                        </div>
                        <div class="element">
                            <div class="numbers">
                                <span>
                                    Duplicaron
                                </span>
                            </div>
                            <p class="text">
                                la eficiencia operativa de sus  procesos comerciales
                            </p>
                        </div>
                    </div>

                </section>

            </div>

        </section>
        <section class="component-info-text-video-T1 customSection sectionParent casoExito_PoctLab_3 ">
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
                            $videoEmbed = App::setFilePath('/assets/videos/caso_exito_rg.mp4');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/rg_portrait_video.jpg');
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
        <section class="component-info-text-image-T1 customSection sectionParent casoExito_PoctLab_2">


            <div class="section-row">

                <section class="innerSectionElement sct2 right">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-6">

                            <h3 class="secondaryTitle">

                                Sobre Poctlab


                            </h3>

                            <p class="text">
                                Poctlab, es un laboratorio clínico en la ciudad
                                de Medellín, que apoya el diagnóstico médico,
                                ofreciendo resultados rápidos y confiables,
                                con servicio a domicilio.
                            </p>

                        </div>

                        <div class="details col-md-12 col-lg-6">
                            <div class="containElements">
                                <ul class="itemsList">
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/icons/industria_icon_orange.png') !!}" alt=""></div>
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
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/crm_icon_poctlab.png') !!}" alt=""></div>
                                        <span><span>CRM</span> para gestionar y almacenar los contactos de prospectos y clientes</span>
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/ws__icon_poctlab.png') !!}" alt=""></div>
                                        <span> <span>Whatsapp Inbox </span> para centralizar y automatizar la comunicación con sus prospectos y clientes</span>
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos_icon_poctlab.png') !!}" alt=""></div>
                                        <span> <span>Flujos Automatizados</span>  para ahorrar tiempo en tareas rutinarias</span>
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/landing__icon_poctlab.png') !!}" alt=""></div>
                                        <span> <span>Landing pages </span>para crear páginas web efectivas y capturar información de prospectos interesados</span>
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/ads_icon_poctlab.png') !!}" alt=""></div>
                                        <span><span>Anuncios digitales</span> integrado a Escala para medir el rendimiento de campañas de marketing</span>
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/email_icon_poctlab.png') !!}" alt=""></div>
                                        <span> <span>Email Marketing </span>para enviar comunicados masivos a prospectos y clientes</span>
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/reportes_icon_poctlab.png') !!}" alt=""></div>
                                        <span> <span>Reportes Personalizados</span> para medir el desempeño del negocio y aplicar mejoras</span>
                                    </li>
                                    <li>
                                        <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/app_icon_poctlab.png') !!}" alt=""></div>
                                        <span> <span>Escala App</span> para gestionar el negocio desde cualquier lugar</span>
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
                        <img src="{!! App::setFilePath('/assets/images/person/img_doctora_poctlab.png') !!}" alt="">

                        <h2 class="primaryTitle">
                            ¿Cómo utilizaron Escala para mejorar <br class="DT_e">
                            sus resultados de marketing y venta?
                        </h2>

                    </section>

                    <section class="innerSectionElement sct2">
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
                        <div class="containElements right">

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
                                    <span class="yellow">
                                        Miguel Urrego, Director Comercial
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>







    </div>

</div>
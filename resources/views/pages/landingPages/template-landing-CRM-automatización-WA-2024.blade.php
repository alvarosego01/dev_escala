<div id="landing_CRM_automat_wa">

    <div class="sections">

        @php
            $elementsReviews = [
                [
                    'logo' => App::setFilePath('/assets/images/illustrations/others/trust_tag.png'),
                    'text' => 'Escala / plataforma CRM',
                    'points' => '4.8 / 5',
                ],
                [
                    'logo' => App::setFilePath('/assets/images/illustrations/others/google_tag.png'),
                    'text' => 'Escala / plataforma CRM',
                    'points' => '4.9 / 5',
                ],
                [
                    'logo' => App::setFilePath('/assets/images/illustrations/others/capterra_tag.png'),
                    'text' => 'Escala / plataforma CRM',
                    'points' => '4.8 / 5',
                ],
            ];
        @endphp

        <section id="lead-form"
            class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_CRM_automat_wa landing_CRM_automat_wa_0 ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/landing_crm_aut_wa_bg_01.svg') }}')"
                class="backgroundFull">


                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta"
                                                src="{{ App::setFilePath('/assets/images/person/am/am_crm_automat_wa.png') }}"
                                                loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">
                                            <span>Escala tus ventas con CRM</span> <br class="space">
                                            Whatsapp y automatizaciones, <br class="space">
                                            en un solo lugar
                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            Escala es el software ideal para acelerar el <br class="space">
                                            crecimiento de pequeñas y medianas empresas
                                        </p>

                                        <div class="elements hideOnmobile hideOnTablet">

                                            @foreach ($elementsReviews as $item)
                                                <div class="refersElement">

                                                    <div class="infoInner">
                                                        <div class="tag">
                                                            <div class="containerImage">
                                                                <img src="{!! $item['logo'] !!}" loading="lazy">
                                                            </div>

                                                            <span class="points">
                                                                {!! $item['points'] !!}
                                                            </span>
                                                        </div>
                                                        <p class="text">
                                                            {!! $item['text'] !!}
                                                        </p>
                                                        <div class="stars">
                                                            <div class="containerImage">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>



                            </div>
                            <div class="form7 col-md-12 col-lg-4 ">

                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <h5 class="titleFormat blackcolor">Recibe un demo-tour <br class="space">
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

                            <div class="imageReviewsMobile hideOnDesktop">

                                <div class="image">
                                    <div class="containerImage">
                                        <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta"
                                            src="{{ App::setFilePath('/assets/images/person/am/am_yellow_circle.png') }}"
                                            loading="lazy">
                                    </div>

                                </div>

                                <div class="elements">

                                    @foreach ($elementsReviews as $item)
                                        <div class="refersElement">

                                            <div class="infoInner">
                                                <div class="tag">
                                                    <div class="containerImage">
                                                        <img src="{!! $item['logo'] !!}" loading="lazy">
                                                    </div>

                                                    <span class="points">
                                                        {!! $item['points'] !!}
                                                    </span>
                                                </div>
                                                <p class="text">
                                                    {!! $item['text'] !!}
                                                </p>
                                                <div class="stars">
                                                    <div class="containerImage">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    @endforeach

                                </div>

                            </div>


                        </div>

                    </section>

                </div>

            </div>

        </section>


        <section class='w-full customSection sectionParent landing_CRM_automat_wa_1'>
            <div class="section-row">

                <section style="background-image: url('{!! App::setFilePath('/assets/images/banners/landing_crm_automat_wa_cloud_bg_01.svg') !!}'" class='innerSectionElement sct0 '>
                    <div class='containElements'>

                        <h2 class="primaryTitle">
                            ¿Cansado de manejar e integrar <br class="space">
                            múltiples herramientas para llevar tus <br class="space">
                            operaciones de marketing y ventas?
                        </h2>

                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_01.png') !!}" loading="lazy">
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </section>

        <section class='w-full customSection sectionParent landing_CRM_automat_wa_2'>
            <div class="section-row">

                <section style="background-image: url('{!! App::setFilePath('/assets/images/banners/landing_crm_automat_wa_cloud_bg_02.svg') !!}'" class='innerSectionElement sct0 '>
                    <div class='containElements'>


                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_02.png') !!}" loading="lazy">
                            </div>
                        </div>

                        <div class="info">

                            <h2 class="primaryTitle">
                                En Escala encuentras todas las herramientas <br class="space">
                                <span>
                                    para atraer, convertir y fidelizar clientes en un mismo lugar.
                                </span>
                            </h2>

                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Recibe un demo
                            </a>


                        </div>
                    </div>
                </section>
            </div>
        </section>

        @php
            $elements = [
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_3',
                    'enableTitle' => true,
                    'titlePrincipal' => '
                    El CRM facilita gestionar contactos <br class="space">
                    y procesos comerciales
                    ',
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/1.landing_crm_automat_wa_Guarda y organiza eficientemente  tu base de datos.gif'),
                    'title' => '
                    <span>Guarda y organiza</span> eficientemente <br class="space">
                    tu base de datos  de leads, clientes, <br class="space">
                    aliados, empleados, ¡y más!
                ',
                    'text' => '
                    <ul>
                    <li><span>1.</span> Importa rápidamente tus contactos</li>
                    <li><span>2.</span> Créalos manualmente</li>
                    <li><span>3.</span> Captúralos en formularios ya integrados al CRM</li>
                    <li><span>4.</span> Filtra para encontrarlos fácilmente</li>
                    <li><span>5.</span> Y segmenta listas para comunicarte eficientemente </li>
                    </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_4',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/2.landing_crm_automat_wa_Registra información relevante relacionada a cada persona .gif'),
                    'title' => '
                        <span>Registra información relevante</span> <br class="space">
                        relacionada a cada persona y empresa <br class="space">
                        para mejorar tus relaciones comerciales
                ',
                    'text' => '
                    <ul>
                        <li><span>1.</span> Guardar datos como:  email, teléfono, rol, dirección, <br class="desktopTabletElement"> website, intereses, edad, industria, ¡y más!</li>
                        <li><span>2.</span> Lleva un historial automático de interacciones y <br class="desktopTabletElement"> actividades realizadas</li>
                        <li><span>3.</span> Agrega notas, tareas y recordatorios </li>
                    </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/3.landing_crm_automat_wa_Gestiona eficientemente procesos comerciales o de servicio_2.gif'),
                    'title' => '
                    <span>Gestiona eficientemente</span> procesos <br class="space">
                    comerciales o de servicio
                ',
                    'text' => '
                    <ul>
                        <li><span>1.</span> Crea “embudos” o “pipelines” de oportunidades para recordar fácilmente dónde se encuentra cada prospecto en el proceso comercial</li>
                        <li><span>2.</span> Personaliza las etapas de tu embudo o pipeline según tu proceso de venta o post-venta</li>
                        <li><span>3.</span> Mide la cantidad y el valor de las oportunidades en cada etapa</li>
                        <li><span>4.</span> Crea y asigna oportunidades automáticamente a distintos miembros de tu equipo</li>
                        <li><span>5.</span> ¡Y mucho más! </li>
                    </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_6',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/4.landing_crm_automat_wa_Mide, analiza y optimiza tus resultados con reportes personalizados.gif'),
                    'title' => '
                        <span>Mide, analiza y optimiza</span> tus resultados <br class="space">
                        con reportes personalizados
                ',
                    'text' => '
                    <ul>
                        <li><span>1.</span> Olvídate de fórmulas complicadas en Excel</li>
                        <li><span>2.</span> Construye reportes en minutos, a partir de <br class="desktopTabletElement"> la data registrada en el CRM</li>
                        <li><span>3.</span> Gestiona mejor a tu equipo</li>
                        <li><span>4.</span> Toma decisiones estratégicas y operativas <br class="desktopTabletElement"> basadas en data </li>
                    </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_6',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/5.landing_crm_automat_wa_Ahorra tiempo y dinero con las herramientas de marketing conectadas el CRM.gif'),
                    'title' => '
                    <span>Ahorra tiempo y dinero</span> con <br class="space">
                    las herramientas de <br class="space">
                    marketing conectadas el CRM
                ',
                    'text' => '
                    <ul>
                        <li><span>1.</span> Email marketing</li>
                        <li><span>2.</span> Landing Pages</li>
                        <li><span>3.</span> Formularios</li>
                        <li><span>4.</span> Anuncios digitales </li>
                    </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ],
            ];
        @endphp
        <div class="sectionInfo_1">

        @if (isset($elements) && count($elements) > 0)
            @foreach ($elements as $item)
                @contain_text_image_T1($item)
                @endcontain_text_image_T1
            @endforeach
        @endif

                  <div class="overlay" style="background-image: url({!! App::setFilePath('/assets/images/banners/landing_crm_aut_wa_bg_02.svg') !!})">
                </div>

        </div>

        <section class="customSection sectionParent aux_landing_CRM_automat_wa_8">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        Recibe un demo
                    </a>

                </section>

            </div>

        </section>



        @php
            $elements = [
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_7',
                    'enableTitle' => true,
                    'titlePrincipal' => '
                    WhatsApp está integrado nativamente en el CRM, <br class="space">
                    para aumentar tu capacidad de respuesta y eficiencia
                    ',
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/01.Automatizaciones-Whatsapp-min.gif'),
                    'title' => '
                    <span>Automatiza</span> tu WhatsApp <br class="space">
                    y opera manos libres:
                ',
                    'text' => '
                    <ul>
                    <li><span>1.</span> Diseña flujos de respuesta automatizadas</li>
                    <li><span>2.</span> Programa recordatorios, emails, etiquetas, etc.</li>
                    <li><span>3.</span> Envía mensajes masivos con plantillas aprobadas por Meta</li>
                    <li><span>4.</span> Asigna conversaciones y actividades a tu equipo</li>
                    <li><span>5.</span> Personaliza la comunicación con cada contacto</li>
                    <li><span>6.</span> Encuesta y califica a tus contactos</li>
                    <li><span>7.</span> Segmenta a tu lista de contactos </li>
                    <li><span>8.</span> Mide tus esfuerzos con analíticas </li>
                    </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_8',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/02.Escala-Inbox-min.gif'),
                    'title' => '
                        <span>Gestiona tus conversaciones</span> <br class="space">
                        en un solo lugar, en tiempo real:
                ',
                    'text' => '
                    <ul>
                        <li><span>1.</span> Envía y recibe mensajes privados o <br class="desktopTabletElement"> accesibles a tu equipo</li>
                        <li><span>2.</span> Asigna conversaciones a distintos responsables</li>
                        <li><span>3.</span> Guarda fácilmente nuevos contactos en el CRM</li>
                        <li><span>4.</span> Accede al historial de conversaciones <br class="desktopTabletElement"> y motivos de cierre</li>
                        <li><span>5.</span> Filtra mensajes por contactos, dueños y status</li>
                        <li><span>6.</span> Mide resultados con métricas en <br class="desktopTabletElement"> tiempo real (Próximamente)</li>
                    </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_9',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/03.Escala-whats-min.gif'),
                    'title' => '
                        <span>Administra tus contactos</span> desde <br class="space">
                        tu propio WhatsApp Web, con la <br class="space">
                        extensión para Chrome:
                ',
                    'text' => '
                    <ul>
                        <li><span>1. </span> Conversa por mensaje de <br class="desktopTabletElement"> forma gratis e ilimitada</li>
                        <li><span>2. </span> Mantén conversaciones abiertas <br class="desktopTabletElement"> por más de 24 hs</li>
                        <li><span>3. </span> Comunícate desde WhatsApp Web <br class="desktopTabletElement"> con tu número de teléfono actual sin <br class="desktopTabletElement"> tener que comprar uno nuevo</li>
                        <li><span>4. </span> Recibe notificaciones en WhatsApp <br class="desktopTabletElement"> Web o tu móvil sin tener <br class="desktopTabletElement">
                        que abrir el inbox en Escala</li>
                        <li><span>5. </span> Crea y edita contactos en Escala <br class="desktopTabletElement"> desde WhatsApp Web</li>
                    </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_10',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/04.Boton-landing-min.gif'),
                    'title' => '
                        <span>Captura y guarda</span> automáticamente <br class="space">
                        los datos de tus leads en el CRM, <br class="space">
                        con el botón en Landing Pages:
                ',
                    'text' => '
                    <ul>
                        <li><span>1.</span> Agrega un formulario de WhatsApp a <br class="desktopTabletElement"> tus landing pages
                        <li><span>2.</span> Captura el nombre, el email y el teléfono de <br class="desktopTabletElement"> tus visitantes
                        antes de empezar a conversar <br class="desktopTabletElement"> por WhatsApp Web
                        <li><span>3.</span> Facilita un canal de interacción ágil y <br class="desktopTabletElement"> en vivo a los
                        visitantes de tu landing.
                    </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ],
            ];

        @endphp

       <div class="sectionInfo_2">

        @if (isset($elements) && count($elements) > 0)
            @foreach ($elements as $item)
                @contain_text_image_T1($item)
                @endcontain_text_image_T1
            @endforeach
        @endif

                  <div class="overlay" style="background-image: url({!! App::setFilePath('/assets/images/banners/landing_crm_aut_wa_bg_03.svg') !!})">
                </div>

        </div>



        <section class="customSection sectionParent aux_landing_CRM_automat_wa_8">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        Recibe un demo
                    </a>

                </section>

            </div>

        </section>

        @php
            $elements = [
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_11',
                    'enableTitle' => true,
                    'titlePrincipal' => '
                    Automatiza una variedad de acciones, <br class="space">
                    para que ahorres tiempo y esfuerzo... <br class="space">
                    ¡todo desde el mismo CRM!
                    ',
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/10.landing_crm_automat_wa_Automatiza tareas simples (1).gif'),
                    'title' => '
               <span>Automatiza</span>areas simples:
                ',
                    'text' => '
                        Configura emails de respuesta automática, programa <br class="desktopTabletElement">
                        notificaciones y recordatorios, activa flujos de <br class="desktopTabletElement">
                        conversación automáticos y ¡mucho más! Para que tu <br class="desktopTabletElement">
                        equipo se centre en actividades más estratégicas.
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_12',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/11.landing_crm_automat_wa_Desarrolla secuencias de emails comerciales.gif'),
                    'title' => '
                       <span>Desarrolla secuencias</span> de <br class="space">
                    emails comerciales:
                ',
                    'text' => '
                    Piensa en tu estrategia de emails una vez y <br class="desktopTabletElement">
                    automatízala para que se envíen de acuerdo al plan. <br class="space">
                    ¡Personaliza, programa y eleva tus ventas!.
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_13',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/12.landing_crm_automat_wa_Programa actividades clave para tu equipo de ventas-_2.gif'),
                    'title' => '
                     <span>Programa actividades</span> clave <br class="space">
                     para tu equipo de ventas:
                ',
                    'text' => '
                    Automatiza recordatorios para tus vendedores y <br class="desktopTabletElement">
                    optimiza la comunicación con clientes potenciales, en <br class="desktopTabletElement">
                    el momento preciso. ¡Potencia tus ventas eficazmente!
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ],
                [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_automat_wa_14',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/gifs/13.landing_crm_automat_wa_Realiza automatizaciones, con solo agregar etiquetas.gif'),
                    'title' => '
                     <span>Realiza automatizaciones,</span> <br class="space">
                     con solo agregar etiquetas
                ',
                    'text' => '
                    Segmenta tus contactos y asigna etiquetas. Estas <br class="desktopTabletElement">
                    etiquetas, activan emails, notificaciones y acciones <br class="desktopTabletElement">
                    de ventas sin esfuerzo. ¡Simplifica tu gestión!
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ],
            ];
        @endphp

            <div class="sectionInfo_3">

        @if (isset($elements) && count($elements) > 0)
            @foreach ($elements as $item)
                @contain_text_image_T1($item)
                @endcontain_text_image_T1
            @endforeach
        @endif

                  <div class="overlay" style="background-image: url({!! App::setFilePath('/assets/images/banners/landing_crm_aut_wa_bg_04.svg') !!})">
                </div>

        </div>


        <section class="customSection sectionParent aux_landing_CRM_automat_wa_8">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        Recibe un demo
                    </a>

                </section>

            </div>

        </section>



        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_CRM_automat_wa_15',
                'enableTitle' => true,
                'titlePrincipal' => '
    ¿Qué más consigues en Escala? <br class="space">
    ¡El mejor acompañamiento y <br class="space">
    entrenamiento de la industria!
    ',
                'subTitlePrincipal' => '
                    (“Es uno de sus grandes diferenciadores” dicho por clientes)
',
                'overlay' => false,
                'enableButton' => false,
                'elements' => [
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_03.png'),
                        'title' => '
                Agilizamos la <br class="space">
                implementación
                ',
                        'text' => '
                adaptando el CRM a tus <br class="space">
                necesidades.
            ',
                        'enableButton' => false,
                        'background_item' => App::setFilePath('/assets/images/illustrations/others/card_background_landings.png'),
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_04.png'),
                        'title' => '
                    Entrenamos a líderes <br class="space">
                    y equipos en
            ',
                        'text' => '
               el uso de la plataforma y <br class="space">
               nuestra metodología <br class="space">
               probada de crecimiento.
            ',
                        'enableButton' => false,
                        'background_item' => App::setFilePath('/assets/images/illustrations/others/card_background_landings.png'),
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_05.png'),
                        'title' => '
            Asignamos un <br class="spa">
            gerente de éxito
            ',
                        'text' => '
                que guía tus acciones <br class="space">
                para que aproveches al <br class="space">
                máximo Escala.
            ',
                        'enableButton' => false,
                        'background_item' => App::setFilePath('/assets/images/illustrations/others/card_background_landings.png'),
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_06.png'),
                        'title' => '
                        Chat de soporte <br class="space">
                        en vivo
                                ',
                        'text' => '
                que atiendes tus <br class="space">
                preguntas y <br class="space">
                necesidades técnicas <br class="space">
                oportunamente.
            ',
                        'enableButton' => false,
                        'background_item' => App::setFilePath('/assets/images/illustrations/others/card_background_landings.png'),
                    ],
                ],
            ];
        @endphp

        @contain_multiple_cards_T2($parameters)
        @endcontain_multiple_cards_T2


                <section class="customSection sectionParent landing_CRM_automat_wa_16">

            <div class="section-row">


                <section class="innerSectionElement sct2">
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_landing_CRM_2.svg') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/person/am/am_home_escala.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    <span>
                                        “El CRM integrado con WhatsApp y <br class="desktopTabletElement">
                                        automatizaciones, se convierte en el corazón <br class="desktopTabletElement">
                                        de las operaciones de todo negocio. <br class="space">
                                    </span>
                                    Diseñamos Escala para <br class="desktopTabletElement">
                                    facilitarle a pequeñas y medianas empresas <br class="desktopTabletElement">
                                    tener una cultura cliente-céntrica y <br class="desktopTabletElement">
                                    optimizar resultados de venta/servicio”.
                                      <br class="space"><br class="space">
                                    <span class="sub">
                                        Andrés Moreno <br class="space">
                                        <small>Fundador de escala & Open English</small>
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>



        <section class='w-full customSection sectionParent landing_CRM_automat_wa_17'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            Qué dicen nuestros clientes sobre Escala
                        </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>
                        <div class="image">
                            <div class="containerImage otto">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/otto/landing_crm_aut_wa_07.png') !!}" loading="lazy">
                            </div>
                            <div class="containerImage info">
                                <img class="desktopElement" src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_automat_wa_infoCards.png') !!}" loading="lazy">
                                <img class="mobileElement" src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_automat_wa_infoCards_mobile.png') !!}" loading="lazy">
                            </div>

                        </div>
                    </div>

                </section>


            </div>

        </section>


        <section class='w-full customSection sectionParent landing_CRM_automat_wa_18'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            Qué dicen nuestros clientes <br class="space">
                            sobre el CRM de Escala
                        </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                        @php
                            $reviews = [App::setFilePath('/assets/images/illustrations/others/landing_crm_auto_wa_trust_1.png'), App::setFilePath('/assets/images/illustrations/others/landing_crm_auto_wa_trust_2.png'), App::setFilePath('/assets/images/illustrations/others/landing_crm_auto_wa_trust_3.png')];
                        @endphp

                        @foreach ($reviews as $item)
                            <div class="review">
                                <div class="containerImage">
                                    <img src="{!! $item !!}" loading="lazy">
                                </div>
                            </div>
                        @endforeach

                    </div>

                </section>
            </div>

        </section>

        <section class="sectionParent customSection landing_CRM_automat_wa_19">
            <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/landing_crm_aut_wa_bg_05.svg') !!}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">

                            <div class="image col-md-12 col-lg-4">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_aut_wa_08.png') !!}" loading="lazy">
                                </div>
                            </div>

                            <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                                <h3 class="secondaryTitle">
                                    <span>Acelera el crecimiento</span> <br class="space">
                                    de tu negocio
                                </h3>
                                <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    Conoce Escala
                                </a>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>



    </div>


</div>

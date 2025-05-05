<div id="subPage_omnicanal_2025">
    <div class="sections">
        <section id="lead-form" class="hero2025 subPage_omnicanal_2025_0_1">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-omnicanal-hero-dk-2025.png') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <h1 class="principalBigTitle">
                                Simplifica tus <br class="DT_e">
                                ventas con el <br class="DT_e">
                                <span>Inbox Omnicanal</span>
                            </h1>
                            <p class="principalBigText">
                                Centraliza y optimiza tus <br class="DT_e">
                                conversaciones de WhatsApp, <br class="DT_e">
                                Instagram y Facebook
                            </p>

                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Ilustración de Andres Moreno whatsapp escala" src="{!! App::setFilePath('/assets/images/person/img-hero-chica-omnicanal-2025.png') !!}" loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct3">
                        <div class="form7">
                            <div class="containElements">

                                <div class="formatForm redirectWeb" redirectweb="true">

                                    <h5 class="titleFormat blackcolor"> Recibe un <br class="space">
                                        demo personalizado</h5>

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
                        <div class="info2">


                            <div class="containElements row threeCol">

                                <div class="ele eleImg col-md-12 col-lg-6">

                                    <div class="containerImage">
                                        <img alt="Ilustración de Andres Moreno whatsapp escala" src="{!! App::setFilePath('/assets/images/person/am/am-whatsapp-hero-mb.webp') !!}" loading="lazy">
                                    </div>


                                </div>

                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>





        <!-- <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol subPage_omnicanal_2025_0">


            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-omnicanal-hero-dk-2025.png') !!}')">



                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img alt="Ilustración de Andres Moreno whatsapp escala" src="{!! App::setFilePath('/assets/images/person/img-hero-chica-omnicanal-2025.png') !!}" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            Simplifica tus <br class="DT_e">
                                            ventas con el <br class="DT_e">
                                            Inbox Omnicanal
                                        </h1>
                                        <p class="principalBigText grayColorTexts">
                                            Centraliza y optimiza tus <br class="DT_e">
                                            conversaciones de WhatsApp, <br class="DT_e">
                                            Instagram y Facebook
                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="form7 col-md-12 col-lg-4 ">
                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <h5 class="titleFormat blackcolor"> Recibe un <br class="space">
                                            demo personalizado</h5>

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

                            <div class="info2 col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele eleImg col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img alt="Ilustración de Andres Moreno whatsapp escala" src="{!! App::setFilePath('/assets/images/person/am/am-whatsapp-hero-mb.webp') !!}" loading="lazy">
                                        </div>


                                    </div>

                                </div>

                            </div>

                    </section>

                </div>



            </div>

        </section> -->





        <section class="customSection sectionParent subPage_omnicanal_2025_1">

            <div class="section-row">

                <section class="innerSectionElement sct2">
                    <div class="groupElements row">
                        <div class="info col-md-12 col-lg-8 ">
                            <div class="containElements">
                                @php
                                $elementsReviews = [
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
                                [
                                'logo' =>
                                App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
                                'text' => 'Escala / plataforma CRM',
                                'points' => '4.8 / 5',
                                ]
                                ];
                                @endphp
                                <div class="ele reviews">
                                    <div class="elements">
                                        <div class="iconApp">
                                            <a target="_blank"
                                                href="https://www.getapp.com/customer-management-software/crm/category-leaders">
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_app_record_2025_category.svg') !!}"
                                                    loading="lazy">
                                            </a>
                                        </div>
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
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icons-stars-yellow.svg') !!}"
                                                            loading="lazy">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subPage_omnicanal_2025_2',
        'enableTitle' => true,
        'titlePrincipal' => '
        Qué logras vía WhatsApp gracias a Escala<br class="space">
        <span>la plataforma de marketing y ventas que <br class="space"> tu equipo sí quiere usar</span>',
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/01.Automatizaciones-Whatsapp-min.gif'),
        'title' => '
        <span>
            Automatizaciones
        </span>
        Opera de forma automática <br class="DT_e">
        programando acciones <br class="DT_e">
        y respuestas', 'text'=> '
        <ul class="text">
            <li>Diseña flujos de respuesta automatizadas </li>
            <li>Programa recordatorios, emails, etiquetas y más </li>
            <li>Envía mensajes masivos con plantillas personalizadas
                aprobadas por Meta</li>
            <li>Selecciona y asigna conversaciones y actividades a tu equipo.</li>
            <li>Personaliza la comunicación con cada contacto </li>
            <li>Encuesta y califica a tus contactos </li>
            <li>Mide tus resultados visualizando analíticas desde tus flujos </li>
            <li>Enlaza y activa automatizaciones con diferentes números de
                WhatsApp</li>
        </ul>
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'right',
        ];
        @endphp
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1

        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subPage_omnicanal_2025_3',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/02.Escala-Inbox-min.gif'),
        'title' => '
        <span>
            Inbox
        </span>
        Comunícate en tiempo real y <br class="DT_e">
        gestiona tus conversaciones <br class="DT_e">
        desde una sola plataforma
        ',
        'text' => '
        <ul class="text">
            <li>Envía y recibe mensajes privados o accesibles a tu equipo</li>
            <li>Asigna conversaciones a distintos responsables</li>
            <li>Guarda fácilmente nuevos contactos en el CRM</li>
            <li>Accede al historial de conversaciones de tu equipo y sus motivos
                de cierre</li>
            <li>Filtra mensajes por contactos, dueños y estado</li>
            <li>Mide resultados y crea reportes personalizados de WhatsApp</li>
        </ul>
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'left',
        ];
        @endphp


        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1
        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subPage_omnicanal_2025_5',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/04.Boton-landing-min.gif'),
        'title' => '
        <span>
            Botón en Landing Pages
        </span>
        Captura y guarda <br class="DT_e">
        automáticamente los datos <br class="DT_e">
        de tus leads en el CRM
        ',
        'text' => '
        <ul class="text">
            <li>Agrega un formulario de WhatsApp a tus landing pages </li>
            <li>Captura de forma automática el nombre, el email y el teléfono de
                tus visitantes antes de empezar a conversar por WhatsApp
            </li>
            <li>Establece a cuál número de WhatsApp deseas dirigir los mensajes </li>
            <li>Facilita un canal de interacción ágil y en vivo a los
                visitantes de tu landing </li>
        </ul>
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'right',
        ];
        @endphp


        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1
        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subPage_omnicanal_2025_4',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/03.Escala-whats-min.gif'),
        'title' => '
        <span>
            Extensión para Chrome
        </span>
        Gestiona tus contactos <br class="DT_e">
        ¡desde tu propio WhatsApp <br class="DT_e">
        Web también!
        ',
        'text' => '
        <ul class="text">
            <li>Conversa por mensaje de forma gratis e ilimitada. </li>
            <li>Mantén conversaciones abiertas por más de 24 hrs. </li>
            <li>Comunícate desde WhatsApp Web con tu número de teléfono <br class="DT_e">
                actual sin tener que comprar uno nuevo. </li>
            <li>Recibe notificaciones en WhatsApp Web o tu móvil sin tener <br class="DT_e">
                que abrir el inbox en Escala. </li>
            <li>Guarda contactos, agrega oportunidades o actividades. </li>
        </ul>
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'left',
        ];
        @endphp

        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1


        <section class="customSection sectionParent subPage_omnicanal_2025_6">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                            Prueba Escala ahora →
                        </a>
                    </div>
                </section>

                <section class="innerSectionElement sct2" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-dk-escala-whatsapp-6.png') }}')">
                    <div class="cards left ">
                        <h2>
                            ¡Y tranquilo! Te guiamos a
                            implementarlo exitosamente
                        </h2>
                        <p>
                            Al ser cliente de Escala, te asignamos un <br class="DT_e">
                            especialista que acelera tu aprendizaje y <br class="DT_e">
                            potencia tus resultados con las herramientas.
                        </p>

                    </div>
                    <div class="cards right">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/chica-whatsapp-img-2025.png') !!}"
                            alt="">
                    </div>
                </section>
            </div>
        </section>






        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subPage_omnicanal_2025_7',
        'enableTitle' => true,
        'titlePrincipal' => '
        Herramientas increíbles que también encuentras en <br class="DT_e">
        Escala para atraer y convertir clientes fieles:
        ',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => false,
        'elements' => [
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/ai-escala-icons-whatsapp.png'),
        'title' => '
        Inteligencia <br class="space">
        Artificial
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/crm-gestion-icons.png'),
        'title' => '
        CRM (Gestión <br class="space">
        de contactos)
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/inbox-omnicanal-icons.png'),
        'title' => '
        Inbox <br class="space">
        Omnicanal
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/automatizacion-icons.png'),
        'title' => '
        Flujos de <br class="space">
        Automatización
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/app-escala-icons.png'),
        'title' => '
        App móvil <br class="space">
        de Escala
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/email-marketing-icons.png'),
        'title' => '
        Email <br class="space">
        Marketing
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/calendario-escala.png'),
        'title' => '
        Agendamiento <br class="space"><br class="space">
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/anuncios-icons.png'),
        'title' => '
        Anuncios <br class="space">
        Digitales
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/landing-pages-icons.png'),
        'title' => '
        Landing <br class="space">
        Pages
        ',
        'enableButton' => false,
        ],
        [
        'img_alt' => null,
        'img' => App::setFilePath('/assets/images/illustrations/others/reportes-personalizados.png'),
        'title' => '
        Reportes <br class="space">
        Personalizados
        ',
        'enableButton' => false,
        ],
        ],
        ];
        @endphp

        @contain_multiple_cards_T2($parameters)
        @endcontain_multiple_cards_T2


        <section class="customSection sectionParent subPage_omnicanal_2025_8">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            ¿Por qué Escala?
                        </h2>

                    </div>
                </section>


            </div>

        </section>

        <section class="customSection sectionParent fullWidth subPage_omnicanal_2025_9 ">
            <div class="section-row">
                <section class="innerSectionElement1">
                    <div class="containElements">
                        <h2 class="primaryTitle blackColor">
                            Nuestros clientes comentan <br class="DT_e">
                            por qué prefieren Escala
                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement2">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_trust_1.png') !!}"
                        alt="">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_trust_2.png') !!}"
                        alt="">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_trust_3.png') !!}"
                        alt="">
                </section>


            </div>

        </section>

        <section class="customSection sectionParent subPage_omnicanal_2025_10" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-dk-escala-whatsapp-10.png') }}')">
            <div class="section-row ">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/alfonso-seo-escala-whatsapp.png') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                Lleva tu <span>WhatsApp</span> <br class="DT_e">al próximo nivel
                            </h2>
                            <p>Al suscribirte al Plan <span>Pro</span> de Escala, <br class="DT_e">
                                obtienes acceso a todas las herramientas <br class="DT_e">
                                de WhatsApp sumadas al resto de
                                funcionalidades de
                                la plataforma.</p>
                            <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                                Prueba Escala ahora →
                            </a>
                        </div>
                    </section>



                </div>
            </div>
        </section>


        @php
        $escalaUrl = 'https://escala.com';
        $items = [
        [
        'type' => 'master',
        'title' => '¿Cuáles son los requisitos de Meta para poder usar WhatsApp en Escala?',
        'text' => '
        Para hacer uso de WhatsApp Business, Meta solicita contar con los siguientes
        <br class="DT_e"> requerimientos técnicos: <br class="space">
        <ul>
            <li>Cuenta en Meta for developers</li>
            <li>Página web o perfil de Meta asociado a Business</li>
            <li>Número de teléfono nuevo o que no se haya usado previamente con WhatsApp</li>

        </ul>
        ',
        ],
        [
        'type' => 'master',
        'title' => '
        ¿En cuál plan de Escala está incluido WhatsApp?
        ',
        'text' => '
        Las herramientas de automatizaciones, inbox y extensión de Chrome para <br class="DT_e">
        WhatsApp están incluidas en los planes: Escala Pro y Enterprise. En cambio, <br class="DT_e">
        el botón de WhatsApp para landing pages está incluido en todos los planes.
        ',
        ],
        [
        'type' => 'master',
        'title' => '
        ¿Puedo conectar mi número actual para utilizar el Inbox y las <br class="DT_e"> Automatizaciones en Escala?
        ',
        'text' => '
        No. Solo con la extensión de Chrome puedes usar tu número de teléfono <br class="DT_e">
        actual. Para utilizar las herramientas de inbox y automatizaciones, Meta <br class="DT_e">
        solicitita que el número que se integre a Business sea completamente nuevo <br class="DT_e">
        y no esté asociado a ninguna otra cuenta de WhatsApp.
        ',
        ],
        ];
        @endphp

        @php
        $parameters = [
        'classSection' => 'subPage_omnicanal_2025_11',

        'items' => $items,
        ];
        @endphp
        @contain_FAQ_T1($parameters)
        @endcontain_FAQ_T1



    </div>

</div>

</div>
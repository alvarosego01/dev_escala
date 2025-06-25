<div id="subPage_whatsapp_2022">
    <div class="sections">

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol subpage_whatsapp_0 ">


            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-dk-escala-whatsapp-hero-1-1.png') !!}')">



                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img alt="Ilustración de Andres Moreno whatsapp escala" src="{!! App::setFilePath('/assets/images/person/am/am-whatsapp-hero.webp') !!}" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            Vende mejor con <br class="space">
                                            <span>WhatsApp</span> integrado <br class="space">
                                            al CRM de Escala
                                        </h1>
                                        <p class="principalBigText grayColorTexts">
                                            Optimiza tu equipo de ventas sin <br class="space">
                                            depender del celular personal: <br class="space">
                                            conversaciones centralizadas, procesos <br class="space">
                                            automáticos y resultados medibles.
                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="form7 col-md-12 col-lg-4 ">
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

        </section>





        <section class="customSection sectionParent subpage_whatsapp_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            Escala potencia la plataforma de <br class="DT_e">
                            mensajería más popular del mundo
                        </h2>

                    </div>
                </section>

                @php
                $cardsParams = [
                'sectionClass' => 'innerSectionElement sct2',
                'backgroundImage' => App::setFilePath('/assets/images/banners/bg-section-1-cards.svg'),
                'cards' => [
                [
                'number' => '+2',
                'span' => 'mil millones',
                'text' => 'usuarios de <br class="DT_e"> WhatsApp <br class="DT_e"> a nivel mundial'
                ],
                [
                'number' => '3',
                'span' => 'millones',
                'text' => 'de compañías <br class="DT_e"> usándola <br class="DT_e"> a nivel mundial'
                ],
                [
                'number' => '+100',
                'span' => 'mil millones',
                'text' => 'de Whatsapps <br class="DT_e"> enviados <br class="DT_e"> diariamente'
                ],
                [
                'number' => '60%',
                'span' => 'de Latinos',
                'text' => 'prefiere WhatsApp <br class="DT_e"> como medio <br class="DT_e"> de comunicación'
                ]
                ]
                ];
                @endphp

                <section class="{{ $cardsParams['sectionClass'] }}">
                    <div class="row-container">
                        @foreach($cardsParams['cards'] as $card)
                        <div class="column">
                            <div class="content-container" style="background-image: url('{{ $cardsParams['backgroundImage'] }}')">
                                <h3>{{ $card['number'] }}</h3>
                                <span>{{ $card['span'] }}</span>
                                <p>{!! $card['text'] !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>

        </section>

        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subpage_whatsapp_2',
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
        'classSection' => 'subpage_whatsapp_3',
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
        'classSection' => 'subpage_whatsapp_5',
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
        'classSection' => 'subpage_whatsapp_4',
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


        <section class="customSection sectionParent subpage_whatsapp_6">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect  openPopUpButton popup-general-demo-2022">
                            Tener sesión personalizada →
                        </a>
                    </div>
                </section>

                <section class="innerSectionElement sct2" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-dk-escala-whatsapp-6-6.png') }}')">
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
        'classSection' => 'subpage_whatsapp_7',
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


        <section class="customSection sectionParent subpage_whatsapp_8">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            ¿Por qué Escala?
                        </h2>

                    </div>
                </section>

                @php
                $cardsParams = [
                'sectionClass' => 'innerSectionElement sct2',
                'backgroundImage' => App::setFilePath('/assets/images/banners/bg-cards-img-whatsapp-escala.png'),
                'cards' => [
                [
                'imgIcon' => 'interfaz-amigable-escala.png',
                'text' => '<span>Interfaz amigable</span> para
                que disfrutes trabajar en ella todos los días'
                ],
                [
                'imgIcon' => 'atencion-escala.png',
                'text' => '<span>Altísimo nivel de servicio:</span> Nadie en la industria te acompaña y atiende mejor'
                ],
                [
                'imgIcon' => 'educacion-escala.png',
                'text' => '<span>Educación relevante de primera</span> en marketing, ventas y crecimiento de empresas y más'
                ],
                [
                'imgIcon' => 'plataforma-en-español-escala.png',
                'text' => '<span>100% en español:</span> la plataforma, el servicio y los recursos en tu idioma'
                ]
                ]
                ];
                @endphp

                <section class="{{ $cardsParams['sectionClass'] }}">
                    <div class="row-container">
                        @foreach($cardsParams['cards'] as $card)
                        <div class="column">
                            <div class="content-container" style="background-image: url('{{ $cardsParams['backgroundImage'] }}')">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/'.$card['imgIcon']) !!}"
                                    alt="" loading="lazy">
                                <p>{!! $card['text'] !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

            </div>

        </section>

        <section class="customSection sectionParent fullWidth subpage_whatsapp_9 ">
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

        <section class="customSection sectionParent subpage_whatsapp_10" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-dk-escala-whatsapp-10-10.png') }}')">
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
                                Empezar ahora →
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
        'classSection' => 'subpage_whatsapp_11',

        'items' => $items,
        ];
        @endphp
        @contain_FAQ_T1($parameters)
        @endcontain_FAQ_T1



    </div>

</div>

</div>
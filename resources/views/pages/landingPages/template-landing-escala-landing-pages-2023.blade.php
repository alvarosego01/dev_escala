<div id="landing_landingPage_2023">

    <div class="sections">

        <section id="lead-form" class="hero2025 landing_landingPage_2023_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-landing-page-2025-hero.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">

                            <h1 class="principalBigTitle">
                                Contruye hermosas <br class="space">
                                landing Pages <br class="space">
                                en minutos
                            </h1>

                            <h1 class="principalBigTitleMb">
                                Contruye hermosas <br class="space">
                                landing Pages <br class="space">
                                en minutos
                            </h1>
                            <p class="principalBigText">
                                Cuenta con más de 200 plantillas <br class="DT_e">
                                optimizadas para convertir, ajusta <br class="DT_e">
                                fácilmente el diseño y contenido con <br class="DT_e">
                                Inteligencia Artificial (sin necesitar <br class="DT_e">
                                programar) ¡y publica!
                            </p>
                            <div class="containerImage">
                                <img alt="Ilustración de chica feliz construye landing page" src="{!! App::setFilePath('/assets/images/illustrations/others/chica-feliz-landing-page-escala-hero-2025.webp') !!}" loading="lazy">
                            </div>
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Ilustración de chica feliz construye landing page" src="{!! App::setFilePath('/assets/images/illustrations/others/chica-feliz-landing-page-escala-hero-2025.webp') !!}" loading="lazy">
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
                    </section>
                </div>
                <div class="section-row-2">
                    <section class="innerSectionElement sctO1">
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
            </div>
        </section>



        <section class="w-full customSection sectionParent landing_landingPage_2023_1">
            <div class="section-row">

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_landingPage_2023_2',
                        'img' => App::setFilePath('/assets/images/gifs/1Elige-entre--plantillas-pre-diseñadas-.gif'),
                        'title' => 'Elige entre cientos de <br class="DT_e">
                        hermosas plantillas <br class="DT_e">
                        pre-diseñadas ',
                        'text' => 'Basadas en mejores prácticas, en Escala encuentras
                        una seria de páginas estructuradas para que solo
                        tengas que editar el contenido y ajustar el diseño a
                        tu marca ¡sin depender de programadores!',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_landingPage_2023_2_1',
                        'img' => App::setFilePath('/assets/images/gifs/2-arrastra-y-suelta-final.gif'),
                        'title' => 'Arrastra y suelta',
                        'text' => 'Editar el contenido de tus páginas en Escala es ¡muy <br class="DT_e">
                        sencillo! Con puros clics, elige los elementos que <br class="DT_e">
                        deseas sustituir, muévelos con el mouse o escribe el <br class="DT_e">
                        texto que deseas y ¡y listo!',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_landingPage_2023_2_2',
                        'img' => App::setFilePath('/assets/images/gifs/3Inteligencia-Artificial.gif'),
                        'title' => 'Crea contenido en segundos <br class="DT_e">
                        con Inteligencia Artificial',
                        'text' => 'Bríndale a Escala un par de palabras clave y tu <br class="DT_e">
                        intención para que te proponga opciones que <br class="DT_e">
                        puedas elegir y revisar si lo necesitas. ¡Es como <br class="DT_e">
                        contratar a un copywriter estrella 24/7 a una <br class="DT_e">
                        mínima fracción del costo!',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_landingPage_2023_2_3',
                        'img' => App::setFilePath('/assets/images/gifs/4-contador.gif'),
                        'title' => 'Agrega elementos como <br class="DT_e">
                        contador, formularios, botón <br class="DT_e">
                        de WhatsApp, pop ups, <br class="DT_e">
                        descargables y más',
                        'text' => 'Aprovecha nuestra librería de elementos para <br class="DT_e">
                        potenciar la efectividad de tus landing pages. Es <br class="DT_e">
                        tan fácil como seleccionarlos en el menú y <br class="DT_e">
                        arrastrarlos a tu página ¡no necesitas escribir ni una <br class="DT_e">
                        línea de código!',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_landingPage_2023_2_4',
                        'img' => App::setFilePath('/assets/images/gifs/5Secuencias-de-páginas-final.gif'),
                        'title' => 'Crea secuencias de páginas <br class="DT_e">
                        para mejorar la experiencia y <br class="DT_e">
                        agilizar operaciones',
                        'text' => 'En Escala puedes agregar páginas de confirmación <br class="DT_e">
                        o post-registro que aparecen inmediatamente <br class="DT_e">
                        después de que las personas registran sus datos en <br class="DT_e">
                        la primera landing page. Así logras comunicar <br class="DT_e">
                        mensajes oportunamente, aliviar el trabajo del <br class="DT_e">
                        vendedor, precalificar, incentivar upsells, entregar <br class="DT_e">
                        valor y más.',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_landingPage_2023_2_5',
                        'enableTitle' => true,
                        'img' => App::setFilePath('/assets/images/gifs/6-responsive.gif'),
                        'title' => '¡Logra que tus páginas se <br class="DT_e">
                        vean bien en todos los <br class="DT_e">
                        dispositivos!',
                        'text'=> 'En Escala es muy eficiente crear páginas responsive <br class="DT_e">
                        que se vean bien en computadoras, celulares y <br class="DT_e">
                        tablets. Nuestro constructor de páginas ajusta la <br class="DT_e">
                        gran mayoría de las secciones por ti.
                        ',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_landingPage_2023_2_6',
                        'enableTitle' => true,
                        'img' => App::setFilePath('/assets/images/gifs/7-dominio.gif'),
                        'title' => '¡Publicar es muy rápido! <br class="DT_e">
                        Define el dominio, edita <br class="DT_e">
                        el SEO y listo',
                        'text'=> 'Una vez creas tu landing page, puedes conectar tu <br class="DT_e">
                        cuenta de Facebook Ads Manager y Google <br class="DT_e">
                        Analytics para enviar tráfico y medir resultados.
                        <br class="space  ">

                        También puedes editar el títulos, la descripción, la <br class="DT_e">
                        imagen y el Favicon para mejorar su presentación al
                        compartirla en distintas plataformas online.
                        ',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_landingPage_2023_2_7',
                        'enableTitle' => true,
                        'img' => App::setFilePath('/assets/images/gifs/8-analitics.gif'),
                        'title' => 'Visualiza la efectividad de tus <br class="DT_e">
                        landing pages con analíticas <br class="DT_e">
                        en tiempo real',
                        'text'=> 'Una vez publiques y envíes visitantes a tus páginas, <br class="DT_e">
                        Escala permite ver métricas como:
                        <br class="space">

                        <ul>
                            <li><img class="checkIcon" src="'.App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png').'" alt="">Número de visitantes</li>
                            <li><img class="checkIcon" src="'.App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png').'" alt="">Número de contactos creados y actualizados</li>
                            <li><img class="checkIcon" src="'.App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png').'" alt="">Costo por lead <br class="DT_e">¡y más! </li>
                        </ul>
                        ',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1


                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_landingPage_2023_2_9',
                        'enableTitle' => true,
                        'img' => App::setFilePath('/assets/images/gifs/9Herramientas-landings-CRM.gif'),
                        'title' => '¡Que no se escape ni una <br class="DT_e">
                        oportunidad! Tus landing <br class="DT_e">
                        pages están conectadas a las <br class="DT_e">
                        múltiples herramientas del <br class="DT_e">
                        CRM de Escala',
                        'text'=> 'Olvídate de integraciones o ineficiencias <br class="DT_e">
                        operativas por fallas humanas. En Escala todas <br class="DT_e">
                        las herramientas están nativamente integradas <br class="DT_e">
                        para que:


                        <ul>
                            <li>Los contactos que se registren se guarden <br class="DT_e">
                                automáticamente en tu base de datos </li>
                            <li>Puedas automatizar flujos de comunicación <br class="DT_e">
                                post-registro por email y/o WhatsApp</li>
                            <li>Conectes fácilmente tus campañas de Facebook <br class="DT_e">
                                Ads y Google</li>
                        </ul>
                        ',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1



                    </div>



                </section>

            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Solicitar un demo →
                </a>
            </div>
        </section>


        <section class="w-full customSection sectionParent landing_landingPage_2023_3">
            <div class="section-row">
                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            ¿Qué logras con las Landing Pages o <br class="space">
                            Páginas de Aterrizaje de Escala?
                        </h2>

                    </div>
                </section>
                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-comunicacion-cards.webp') !!}"
                                alt="">
                            <h3>Generar más y <br class="DT_e">
                                mejores leads o <br class="DT_e">
                                prospectos</h3>
                            <br class="space">

                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/presencia-icon-card.webp') !!}"
                                alt="">
                            <h3>Tener una presencia <br class="DT_e">
                                online más profesional </h3>
                            <br class="space">
                            <br class="space">

                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-estrella-cards.webp') !!}"
                                alt="">
                            <h3>Aumentar la <br class="DT_e">
                                efectividad de tus <br class="DT_e">
                                brochures físicos <br class="DT_e">
                                o digitales </h3>
                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-corazom-cards.webp') !!}"
                                alt="">
                            <h3>Promover ofertas <br class="DT_e">
                                especiales a un grupo <br class="DT_e">
                                de personas target</h3>
                            <br class="space">

                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-personas-cards.webp') !!}"
                                alt="">
                            <h3>Educar o compartir <br class="DT_e">
                                información relevante <br class="DT_e">
                                fácil y rápido</h3>
                            <br class="space">

                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/icon-oportunidad-cards.webp') !!}"
                                alt="">
                            <h3>Facilitar la recolección <br class="DT_e">
                                de información en tu <br class="DT_e">
                                proceso comercial o <br class="DT_e">
                                post-venta</h3>
                        </div>
                    </div>
                    <h3>¡y mucho más!</h3>
                </section>
            </div>
        </section>



        <section class="customSection sectionParent fullWidth sectionParent landing_landingPage_2023_4">
            <div class="section-row">
                <section class="innerSectionElement1">
                    <div class="containElements">
                        <h2 class="primaryTitle">
                            Qué dicen nuestros clientes sobre las landing <br class="space">
                            pages que construyen en Escala
                        </h2>
                    </div>
                </section>

                <section class="innerSectionElement2">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/landingpages_review_1.webp') !!}"
                        alt="">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/landingpages_review_2.webp') !!}"
                        alt="">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/landingpages_review_3.webp') !!}"
                        alt="">
                </section>


            </div>

        </section>



        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_3.svg') !!})" class="customSection sectionParent landing_landingPage_2023_11">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <div class="image">

                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_6.png') !!}" alt="">
                            </div>

                        </div>

                        <div class="info">
                            <p class="text">
                                Descubre por ti mismo la mejor <br class="space">
                                <span>herramienta de landing pages</span>
                            </p>


                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Recibir demo
                            </a>

                        </div>

                    </div>

                </section>

            </div>

        </section>


        <section class='w-full customSection sectionParent landing_landingPage_2023_12'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            Qué dicen nuestros clientes sobre las landing <br class="DT_e">
                            pages que construyen en Escala

                        </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                        @php
                        $reviews = [
                        App::setFilePath('/assets/images/illustrations/others/landingpages_review_1.png'),
                        App::setFilePath('/assets/images/illustrations/others/landingpages_review_2.png'),
                        App::setFilePath('/assets/images/illustrations/others/landingpages_review_3.png')
                        ]
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

















        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_4.svg') !!})" class="customSection sectionParent landing_landingPage_2023_13">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <div class="info">
                            <p class="text">
                                “En mis compañías utilizamos decenas de landing <br class="DT_e">
                                pages para crecer. Gracias a Escala <span>
                                    aumentamos <br class="DT_e">
                                    10X nuestra eficiencia
                                </span> al crear y publicarlas.”
                                <br class="space">
                                <br class="space">
                                <span class="sub">
                                    Andrés Moreno <br class="space">
                                    <small>Fundador de escala & Open English</small>
                                </span>

                            </p>

                        </div>

                        <div class="image">

                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/person/am/andres_landing_page 1.png') !!}" alt="">
                            </div>

                        </div>


                    </div>

                </section>

            </div>

        </section>

        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_5.svg') !!})" class="customSection sectionParent landing_landingPage_2023_14">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            ¿Nuevo en creación de landing pages? <br class="space">
                            <span>¡No te preocupes, te entrenamos!</span>
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="info">
                            <p class="text">
                                Nuestro equipo de servicio y <br class="DT_e">
                                entrenadores Escala te orientan desde <br class="DT_e">
                                el día 1 para que consigas mejores <br class="DT_e">
                                resultados con tus páginas.
                                <br class="space"><br class="space">
                                <span>
                                    ¡Ninguna otra plataforma te <br class="space">
                                    acompaña mejor!
                                </span>
                            </p>
                        </div>
                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_7.png') !!}" alt="">
                            </div>
                        </div>

                    </div>

                </section>

                <section class="innerSectionElement sct3">

                    <div class="containElements">


                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Conocer más
                        </a>

                    </div>

                </section>

            </div>

        </section>







        <section class='w-full customSection sectionParent landing_landingPage_2023_15'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>

                        <h2 class="primaryTitle">
                            ¿Por qué Escala?
                        </h2>

                    </div>
                </section>

                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_8.png') !!}" alt="">
                            </div>
                        </div>

                        <div class="info">

                            @php
                            $elements = [
                            [
                            'title' => 'Potente herramienta de email marketing',
                            'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_0.png'),

                            ],
                            [
                            'title' => 'Servicio de Acompañamiento VIP',
                            'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_1.png'),

                            ],
                            [
                            'title' => 'Encuentras muchas más herramientas de <br class="DT_e"> marketing y ventas integradas',
                            'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_2.png'),

                            ],
                            [
                            'title' => 'Todo 100% en español',
                            'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_3.png'),

                            ],
                            [
                            'title' => 'Educación de negocio de primera',
                            'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_4.png'),

                            ],
                            [
                            'title' => 'Implementamos parte de la primera <br class="DT_e"> campaña por ti ',
                            'icon' => App::setFilePath('/assets/images/illustrations/others/icon_lps_5.png'),

                            ]
                            ];
                            @endphp

                            <ul class="elements selectorInfo">

                                @foreach ($elements as $item)
                                <li class="element " info_index="{!! $loop->index !!}">
                                    <div class="icon">
                                        <div class="containerImage">
                                            <img src="{!! $item['icon'] !!}" loading="lazy">
                                        </div>
                                    </div>
                                    <h3>
                                        {!! $item['title'] !!}
                                    </h3>
                                </li>
                                @endforeach

                            </ul>


                        </div>

                    </div>
                </section>

            </div>

        </section>

        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_6.svg') !!})" class='w-full customSection sectionParent landing_landingPage_2023_16'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class="containElements">

                        <h2 class="title">
                            Acelera el crecimiento de <br class="space">
                            tu negocio
                        </h2>

                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Conoce Escala
                        </a>

                    </div>
                </section>

            </div>

        </section>



    </div>


</div>
<div id="landing_alianzas_2025">
    <div class="sections">

        <section id="lead-form" class="hero2025 landing_alianzas_2025_0">
            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-partner-hero-2025.webp') !!}')">

                <div class="section-row">

                    <section class="innerSectionElement sct1">
                        <div class="sectionText">

                            <h1 class="principalBigTitle">
                                Como <span>Escala Partner</span> <br class="space"> ganas más:
                            </h1>
                            <span class="secondaryTitle">
                                +Apoyo, +Oportunidades <br class="space">
                                +Comunidad
                            </span>
                            <p class="principalBigText">
                                Convierte tu agencia o consultora en una <br class="DT_e">
                                máquina de ingresos con el respaldo de <br class="DT_e">
                                Escala CRM.
                            </p>
                            <div class="containerImage">
                                <div class="video-cover" id="video-cover-landing-2">
                                    <!-- <div class="video-cover" id="video-cover-landing" tabindex="0" data-video-src="https://player.vimeo.com/video/1097895831?autoplay=1"> -->
                                    <img alt="Ilustración Escala Partner: consultor mostrando CRM y WhatsApp" src="{!! App::setFilePath('/assets/images/illustrations/others/am-partner-hero-img.webp') !!}" loading="lazy">
                                    <!-- <div class="play-button">
                                        <img class="play-icon" alt="Icon play"
                                            src="{{ App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') }}"
                                            loading="lazy">
                                    </div> -->
                                </div>
                                <!-- <div class="video-modal" id="video-modal-landing" style="display:none;">
                                    <div class="video-modal-backdrop" id="video-modal-backdrop-landing"></div>
                                    <div class="video-modal-content">
                                        <button class="video-modal-close" id="video-modal-close-landing" aria-label="Cerrar">&times;</button>
                                        <div class="video-iframe-container" id="video-iframe-container-landing"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </section>

                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <div class="video-cover" id="video-cover-landing-2">
                                <!-- <div class="video-cover" id="video-cover-landing-2" tabindex="0" data-video-src="https://player.vimeo.com/video/1097895831?autoplay=1"> -->
                                <img alt="Ilustración Escala Partner: consultor mostrando CRM y WhatsApp" src="{!! App::setFilePath('/assets/images/illustrations/others/am-partner-hero-img.webp') !!}" loading="lazy">

                                <!-- <div class="play-button">
                                    <img class="play-icon" alt="Icon play"
                                        src="{{ App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') }}"
                                        loading="lazy">
                                </div> -->
                            </div>
                            <!-- <div class="video-modal" id="video-modal-landing-2" style="display:none;">
                                <div class="video-modal-backdrop" id="video-modal-backdrop-landing-2"></div>
                                <div class="video-modal-content">
                                    <button class="video-modal-close" id="video-modal-close-landing-2" aria-label="Cerrar">&times;</button>
                                    <div class="video-iframe-container" id="video-iframe-container-landing-2"></div>
                                </div>
                            </div> -->
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
                                                        alt="Reconocimiento Escala CRM en GetApp" loading="lazy">
                                                </a>
                                            </div>
                                            @foreach ($elementsReviews as $item)
                                            <div class="refersElement">

                                                <div class="infoInner">
                                                    <div class="tag">
                                                        <div class="containerImage">
                                                            <img src="{!! $item['logo'] !!}" alt="Logo review Escala CRM" loading="lazy">
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
                                                                alt="Calificación estrellas Escala CRM" loading="lazy">
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
                    <section class="innerSectionElement sct1">

                        <div class="logos_empresas">
                            <div class="containElements">
                                <span class="subTitle">
                                    Destacados en:
                                </span>
                            </div>
                            <img alt="Logo Forbes" src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_forbes.png') }}" loading="lazy">
                            <img alt="Logo Yahoo Finance" src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_yahoo_finance.png') }}" loading="lazy">
                            <img alt="Logo Latam List" src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_latam_list.png') }}" loading="lazy">
                            <img alt="Logo Refresh Miami" src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_refresh_miami.png') }}" loading="lazy">
                            <img alt="Logo Valora" src="{{ App::setFilePath('/assets/images/illustrations/others/logo_empresas_gris_valora.png') }}" loading="lazy">
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="customSection sectionParent landing_alianzas_2025_1">
            <div class="section-row">


            </div>

        </section>

        <section class="customSection sectionParent landing_alianzas_2025_2">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        Aliarse con el CRM equivocado cuesta dinero
                    </h2>
                    <span>
                        Si eres dueño de agencia o de una consultora, sabes lo difícil que es:
                    </span>
                </section>

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <div class="img"> <img class="img-top"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/genera-ingresos-icon.webp') !!}"
                                    alt="">
                            </div>
                            <span>
                                Generar ingresos <br class="DT_e"> predecibles mes a mes
                            </span>

                        </div>
                        <div class="cards">
                            <div class="img"> <img class="img-top"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/lead-scoring-icon-2.webp') !!}"
                                    alt="">
                            </div>
                            <span>
                                Ofrecer innovación en un <br class="DT_e"> mercado competitivo
                            </span>
                        </div>
                        <div class="cards">
                            <div class="img"> <img class="img-top"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/retener-clientes-al-escalar.webp') !!}"
                                    alt="">
                            </div>
                            <span>
                                Retener clientes mientras <br class="DT_e"> escalas tu negocio
                            </span>
                        </div>
                    </div>

                    <span class="spanCenter">
                        Y cuando te asocias con el CRM inadecuado, los problemas se multiplican:
                    </span>

                    <div class="containElements2">

                        <div class="cards">
                            <div class="img"> <img class="img-top"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/mucho-trahajo-icon.webp') !!}"
                                    alt="">
                            </div>
                            <span>
                                Trabajas mucho y <br class="DT_e"> recibes poco a cambio
                            </span>
                        </div>
                        <div class="cards">
                            <div class="img"> <img class="img-top"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/sin-apoyo-icon.webp') !!}"
                                    alt="">
                            </div>
                            <span>
                                No tienes <br class="DT_e"> suficiente apoyo
                            </span>
                        </div>

                        <div class="cards">
                            <div class="img"> <img class="img-top"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/plataformas-complejas-icon.webp') !!}"
                                    alt="">
                            </div>
                            <span>
                                Son plataformas <br class="DT_e"> complejas para pymes
                            </span>
                        </div>
                        <div class="cards">
                            <div class="img"> <img class="img-top"
                                    src="{!! App::setFilePath('/assets/images/illustrations/others/competidores-icon.webp') !!}"
                                    alt="">
                            </div>
                            <span>
                                Algunos compiten <br class="DT_e"> directamente contigo
                            </span>
                        </div>
                    </div>
                </section>

            </div>

        </section>

        <section class="customSection sectionParent landing_alianzas_2025_3">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <h2 class="primaryTitle">
                        Aliarte con Escala CRM sí multiplica tu <br class="space">
                        impacto y tus ingresos
                    </h2>
                    <span>
                        Únete a nuestro Programa de Partners y gana más <br class="space">
                        apoyando a empresas en su transformación digital.
                    </span>

                    <div class="containElement">
                        <div class="left">
                            <img alt="Ilustración beneficios de ser Escala Partner" src="{!! App::setFilePath('/assets/images/illustrations/others/beneficios-de-ser-escala-partner.webp') !!}" loading="lazy">
                        </div>


                        <div class="right">
                            <span>
                                Beneficios de ser Escala Partner:
                            </span>
                            <ul>
                                <li>
                                    <img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" alt="Icono check beneficio Escala Partner" loading="lazy">
                                    <span><b>Más Ingresos recurrentes</b> que otros CRMs</span>
                                </li>
                                <li>
                                    <img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                    <span><b>Descuentos exclusivos</b> en Planes de Escala</span>
                                </li>
                                <li>
                                    <img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                    <span><b>Capacitación continua</b> y validación</span>
                                </li>
                                <li>
                                    <img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                    <span><b>Soporte dedicado</b> de nuestro equipo</span>
                                </li>
                                <li>
                                    <img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                    <span><b>Comunidad y acceso</b> a potenciales clientes</span>
                                </li>
                                <li>
                                    <img class="checkIcon" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                    <span><b>Visibilidad y posicionamiento</b></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <img class="bgCard" src="{!! App::setFilePath('/assets/images/banners/bg-contain-left.svg') !!}" alt="Fondo decorativo Escala Partner" loading="lazy">

                </section>
                <section class="innerSectionElement sct2">
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Quiero ser Escala Partner →
                        </a>
                    </div>
                </section>
            </div>

        </section>

        <section class="customSection sectionParent landing_alianzas_2025_4">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        ¿Eres el Partner ideal de Escala?
                    </h2>
                    <span>
                        Este programa está diseñado para:
                    </span>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/icon-comunicacion-cards.webp') !!}" alt="Icono agencias de marketing y ventas">
                            <span>
                                Agencias de marketing y ventas
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/icon-consultores.webp') !!}" alt="Icono consultores">
                            <span>
                                Consultores
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/plataformas-complejas-icon.webp') !!}" alt="Icono freelancers">
                            <span>
                                Freelancers
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/servicios-digitales-icon.webp') !!}" alt="Icono empresas de servicios digitales o tecnológicos">
                            <span>
                                Empresas de servicios digitales o tecnológicos
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/icon-profesionales-negocio-coaches.webp') !!}" alt="Icono profesionales de negocio o coaches">
                            <span>
                                Profesionales de negocio o coaches
                            </span>
                        </div>
                    </div>
                </section>
                <section class="innerSectionElement sct2">
                    <span class="span2">
                        Especialmente si trabajas con pymes que cuentan con un equipo comercial y procesos de <br class="space">
                        ventas consultivos, porque allí Escala genera el mayor impacto.
                    </span>
                    <h3 class="subTitle">
                        Conectan más con nosotros los Partners que valoran:
                    </h3>
                    <p>
                        +Profesionalismo · +Buena Vibra · +Teamwork · +Crecimiento Continuo
                    </p>
                </section>
            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    ¡Sí, soy el Partner Ideal! →
                </a>
            </div>
        </section>

        <section class="customSection sectionParent landing_alianzas_2025_5">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        ¿Cómo deseas crecer con Escala?
                    </h2>
                    <span>
                        Puedes ser parte de uno o ambos programas:
                    </span>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/partner-comercial.webp') !!}" alt="Ilustración partner comercial Escala">
                            <h3>
                                Partner <span class="span1">Comercial</span>
                            </h3>
                            <ul>
                                <li>Vendes suscripciones de Escala</li>
                                <li>Ganas hasta 30% de comisión de por vida por cada cliente activo</li>
                                <li>Beneficios principales: cuenta demo, ejecutivo asignado, materiales de venta, entrenamientos</li>
                            </ul>
                        </div>
                        <div class="cards">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/partner-de-servicio.webp') !!}" alt="Ilustración partner de servicio Escala">
                            <h3>
                                Partner de <span class="span2">Servicio</span>
                            </h3>
                            <ul>
                                <li>Ofreces implementación y gestión postventa de Escala.</li>
                                <li>
                                    <span>Beneficios extra:</span> marketplace de Escala,
                                    co-marketing, leads compartidos y participación en eventos Escala.
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div class="btnCenter">
                <a href="https://escala.com/partners/" class="primaryButton hoverInEffect">
                    Conocer más →
                </a>
            </div>
        </section>

        <section class="customSection sectionParent landing_alianzas_2025_6">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        Bonos Exclusivos
                    </h2>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/1-icon-top.webp') !!}" alt="Icono IA Escala Partner">
                            <h3>
                                Apoyo con Tu Agente de Inteligencia Artificial
                            </h3>
                            <p>
                                Al convertirte en Partner, puedes optar por un Agente Conversacional en
                                el Centro de Conversaciones de Escala implementado sin costo.
                            </p>
                            <span class="spanMin">
                                (cupos limitados al mes)
                            </span>
                            <h4 class="subtTitle">
                                ¿Qué logra el Agente de IA en Escala?
                            </h4>

                            <ul>
                                <li>Atiende mensajes de WhatsApp, Instagram y Facebook</li>
                                <li>Precalifica prospectos</li>
                                <li>Asigna y agenda citas a vendedores</li>
                                <li>Cotiza y brinda descuentos</li>
                                <li>Actualiza la data en el CRM</li>
                            </ul>
                            <span class="span2">
                                ¡Y más!
                            </span>
                        </div>
                        <div class="cards">
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/2-icon-top.webp') !!}" alt="Icono oportunidades de crecimiento Escala Partner">
                            <h3>
                                Oportunidades de crecimiento
                            </h3>
                            <h4 class="subtTitle">
                                ¿Qué logra el Agente de IA <br class="space">
                                en Escala?
                            </h4>
                            <ul>
                                <li>Recibir clientes para implementar la plataforma.</li>
                                <li>Promocionar tus servicios con nuestro respaldo.</li>
                                <li>Participar en MasterClass compartiendo contenido de valor.</li>
                            </ul>
                            <img class="ottoImg" alt="Ilustración Otto oportunidades Escala Partner" src="{!! App::setFilePath('/assets/images/illustrations/others/otto-oportunidades.webp') !!}" loading="lazy">
                        </div>
                        <div class="cards" style="background-image: url('{!! App::setFilePath('/assets/images/illustrations/others/sombra_480.webp') !!}')"> 
                            <img class="img-top" src="{!! App::setFilePath('/assets/images/illustrations/others/3-icon-top.webp') !!}" alt="Icono comunidad Escala Partner">
                            <h3>
                                Comunidad
                            </h3>
                            <p>
                                Gana visibilidad, posiciónate como experto, aprende y expande tu red en nuestros eventos digitales y presenciales en Hispanoamérica.
                            </p>
                            <img class="andreaImg" alt="Ilustración Andrea comunidad Escala Partner" src="{!! App::setFilePath('/assets/images/illustrations/others/Andrea-Escala.webp') !!}" loading="lazy">
                        </div>
                    </div>
                </section>
            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Ser Escala Partner →
                </a>
            </div>
        </section>

        <section class="customSection sectionParent landing_alianzas_2025_7">

            <div class="section-row ">
                <section class="innerSectionElement sct1">
                    <div class="testimonial-escala" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-review-patners.webp') !!}')">
                        <div class="testimonial-quote-icon">
                            <img alt="Icono testimonio Escala Partner" src="{!! App::setFilePath('/assets/images/illustrations/others/icon-testimonial.webp') !!}" loading="lazy">
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">
                                Escala no solo ofrecen un <b>software robusto y amigable</b>, sino también un servicio excepcional que asegura que aprovechemos al máximo la herramienta.
                            </p>
                            <div class="testimonial-user">
                                <div class="testimonial-avatar">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/catalina_gonzalez_katagogo.webp') !!}" alt="Foto Catalina González Goez CEO KataGoGo y Partner Escala" loading="lazy">
                                </div>
                                <div class="testimonial-user-info">
                                    <span class="testimonial-name">Catalina González Goez</span>
                                    <span class="testimonial-role">CEO de Kata GoGo y Partner de Escala</span>
                                    <div class="testimonial-stars">
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/start-review-crm.webp') !!}" alt="Calificación 5 estrellas Escala CRM" loading="lazy" style="height:20px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <section class="customSection sectionParent landing_alianzas_2025_8">
            <div class="section-row " style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-automatizaciones-ia.webp') }}')">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt="Foto Alfonso CEO Escala" src="{{ App::setFilePath('/assets/images/illustrations/others/alfonso-ceo-escala.webp') }}" loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                Transforma tu negocio como <br class="space">
                                Escala Partner
                            </h2>
                            <span>
                                Únete al programa y empieza a generar más <br class="DT_e">
                                ingresos recurrentes, con más apoyo, más <br class="DT_e">
                                comunidad y más oportunidades de crecimiento.
                            </span>
                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Aplica ahora →
                            </a>

                        </div>
                    </section>



                </div>
            </div>
        </section>

    </div>
</div>
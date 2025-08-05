<div id="landing_sem_base">
    <div class="sections">
        <section id="lead-form" class="hero2025 landing_sem_base_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-hero-2025-ai.webp') !!}')">

                <div class="section-row">

                    <section class="innerSectionElement sct1">
                        <div class="sectionText">

                            <h1 class="principalBigTitle">
                                <span>CRM + Inteligencia <br class="DT_e">
                                    Artificial</span> para <br class="DT_e">
                                vender más con <br class="DT_e">
                                menos esfuerzo.
                            </h1>

                            <h1 class="principalBigTitleMb">
                                <span> CRM + Inteligencia <br class="DT_e">
                                    Artificial </span>para <br class="DT_e">
                                vender más con <br class="DT_e">
                                menos esfuerzo.

                            </h1>
                            <p class="principalBigText">
                                ¿Y si sumaras al equipo un nuevo integrante <br class="DT_e">
                                más efectivo que tu mejor vendedor, y capaz <br class="DT_e">
                                de atender miles de leads al mismo tiempo… <br class="DT_e">
                                sin pedir comisión por venta?
                            </p>
                            <div class="containerImage">
                                <div class="video-cover" id="video-cover-landing" tabindex="0" data-video-src="https://player.vimeo.com/video/1097895831?autoplay=1">
                                    <img alt="Ilustración de Andres Moreno ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-moreno-ceo-escala-img.webp') !!}" loading="lazy">
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
                            <div class="video-cover" id="video-cover-landing-2" tabindex="0" data-video-src="https://player.vimeo.com/video/1097895831?autoplay=1">
                                <img alt="Ilustración de Andres Moreno ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/andres-moreno-ceo-escala-img.webp') !!}" loading="lazy">

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
        <section class="customSection sectionParent landing_sem_base_1">
            <div class="section-row">


            </div>

        </section>

        <section class="customSection sectionParent landing_sem_base_2">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        ¿Qué pueden hacer los Agendes de IA <br class="space">
                        en Escala por mi negocio?
                    </h2>
                    <span>
                        Los Agentes IA de Escala son asistentes virtuales que actúan dentro del <br class="DT_e">
                        CRM para ayudarte a vender más rápido, sin tanto esfuerzo. Ellos pueden:
                    </span>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="ai-features-image">
                        <div>
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/agente-ia-img.webp') !!}" alt="Agente de IA Escala" loading="lazy">
                            <img class="img-fonto" src="{!! App::setFilePath('/assets/images/banners/bg-agente-ia-escala.svg') !!}" loading="lazy">
                        </div>

                    </div>
                    <div class="ai-features-list">
                        <div class="div-space">

                        </div>
                        <div class="ai-features-list-text">
                            <ul>
                                <li>Conversar con tus contactos por WhatsApp</li>
                                <li>Capturar y actualizar datos en tu CRM</li>
                                <li>Agendar citas directamente en los calendarios de tu equipo</li>
                                <li>Enviar cotizaciones de productos o servicios cargados en tu CRM</li>
                                <li>Derivar la conversación a un vendedor cuando sea necesario</li>
                            </ul>
                        </div>

                    </div>
                </section>
                <span>
                    A diferencia de los chatbots con IA, los Agentes de IA en Escala leen, <br class="DT_e">
                    procesan la información compartida en la conversación y responden <br class="DT_e">
                    hasta cumplir el objetivo deseado.
                </span>
            </div>


            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Empezar ahora →
                </a>
            </div>
        </section>

        <section class="customSection sectionParent landing_sem_base_3">

            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="section_contain">
                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <h3 style="text-align: center">Antes de Escala</h3>
                            </div>

                            <div class="textContainer textRight">
                                <h3>Con <span>Agentes de IA</span> <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/img-icon-ia-start.webp') !!}" loading="lazy"> </h3>
                            </div>
                        </div>
                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <p>Dudas sin responder por disponibilidad de horarios.</p>
                            </div>

                            <div class="textContainer textRight">
                                <p>Respuestas automáticas, inmediatas 24/7.</p>
                            </div>
                        </div>

                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <p>Contactos e información perdida u olvidada.</p>
                            </div>
                            <div class="textContainer textRight">
                                <p>Registro y actualización en tiempo real de contactos y oportunidades en el CRM.</p>

                            </div>
                        </div>

                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <p>Vendedores agendando manualmente.</p>
                            </div>

                            <div class="textContainer textRight">
                                <p>Agendamiento automático libera tiempo de los vendedores para que cierren más ventas.</p>

                            </div>
                        </div>

                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <p>Proceso manual y lento de calificación y asignación de leads a vendedores.</p>

                            </div>

                            <div class="textContainer textRight">
                                <p>Vendedores reciben rápidamente leads calientes y calificados mientras brindas una mejor experiencia de compra.</p>

                            </div>
                        </div>

                        <!-- Desktop Section -->
                        <div class="dualSection">
                            <div class="textContainer textLeft">
                                <p>Tareas repetitivas que consumen tiempo.</p>

                            </div>

                            <div class="textContainer textRight">
                                <p>Aumentas eficiencia para escalar operaciones con menos recursos.</p>

                            </div>
                        </div>

                    </div>

                    <h3 class="secondaryTitle">Conoce más sobre nuestros Agentes de IA</h3>

                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Tener sesión personalizada →
                        </a>
                    </div>
                </section>
            </div>

        </section>


        <section class=" customSection sectionParent landing_sem_base_4">
            <div class="section-row">
                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            La IA también genera contention para <br class="space">
                            tus emails y landing pages
                        </h2>
                        <p>
                            Apóyate de Inteligencia Artificial al desarrollar <br class="DT_e">
                            piezas de comunicación en Escala. Con ella puedes:
                        </p>
                    </div>
                </section>
                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/textos-ia-img.webp') !!}"
                                alt="">
                            <h3>Escribir textos <br class="space">
                                potentes</h3>

                        </div>
                        <div class="cards">
                            <img class="img-top"
                                src="{!! App::setFilePath('/assets/images/illustrations/others/imagenes-innovadoras-ia-img.webp') !!}"
                                alt="">
                            <h3> Generar imágenes <br class="space"> innovadoras</h3>

                        </div>

                    </div>
                </section>
                <h3 class="secondaryTitle">Ahorra tiempo y esfuerzo con <br class="space">
                    <span>IA integrada al CRM de Escala</span>
                </h3>

                <div class="btnCenter">
                    <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        Empezar ahora →
                    </a>
                </div>
            </div>
        </section>




        <section class="customSection sectionParent landing_sem_base_5" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-5-2025-ai.webp') }}')">
            <div class="section-row ">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/andres-moreno-escala-img.webp') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                Automatiza tus <br class="DT_e">
                                conversaciones y escala <br class="DT_e">
                                tus ventas con IA
                            </h2>

                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Empezar ahora →
                            </a>

                        </div>
                    </section>



                </div>
            </div>
        </section>








    </div>




</div>
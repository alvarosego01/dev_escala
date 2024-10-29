   <div id="implementacion-2023">
       <div class="sections">

           <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol implementacion-2023 implementacion-2023-1 ">

               <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/implementacion_fondo_seccion_1.svg') }}')" class="backgroundFull">

                   <div class="section-row">
                       <section class="innerSectionElement sct1">

                           <div class="groupElements row">

                               <div class="info col-md-12 col-lg-8 ">

                                   <div class="containElements row threeCol">

                                       <div class="ele ele2 col-md-12 col-lg-7">
                                           <span>Servicio</span>
                                           <h1 class="principalBigTitle blackColor">
                                               <span>
                                                   Acompañamiento personalizado de Escala<br class="space">
                                                   para la implementación autogestionada
                                           </h1>

                                           <p class="principalBigText grayColorTexts">
                                               Incorpora las herramientas del CRM <br class="DT_e">
                                               a las operaciones de tu empresa <br class="DT_e">
                                               con la guía de nuestro equipo
                                           </p>

                                       </div>

                                       <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                           <div class="containerImage">
                                               <img alt="Ilustración app escala para desktop" src="{{ App::setFilePath('/assets/images/illustrations/others/implementacion_pagina_chica_mas_herramienta.png') }}" loading="lazy">
                                           </div>

                                       </div>

                                   </div>

                               </div>
                               <div class="form7 col-md-12 col-lg-4 ">

                                   <div class="containElements">

                                       <div class="formatForm redirectWeb" redirectweb="true">

                                           <h5 class="titleFormat blackcolor">Recibe un tour guiado <br class="space">
                                               de Escala</h5>


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
                                           <img alt="Ilustración app escala para dispositivos móviles" src="{{ App::setFilePath('/assets/images/illustrations/others/implementacion_pagina_chica_mas_herramienta.png') }}" loading="lazy">
                                       </div>

                                   </div>
                               </div>
                           </div>
                       </section>
                   </div>
               </div>

           </section>



           <section class="customSection sectionParent implementacion-2023-2">

               <div class="section-row">

                   <section class="innerSectionElement sct1">

                       <div class="containElements">
                           <h2 class="title">
                               ¿Qué incluye el servicio de <br class="DT_e">
                               acompañamiento de Escala?

                           </h2>
                       </div>

                   </section>
                   <section class="innerSectionElement sct2">

                       <div class="containElements">

                           <div class="row card-content">
                               <div class="col-md-12 col-lg-4 card1">

                                   <div
                                       class="card">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/card_white_home_fondo.png') }}" alt="" class="backgroundCard D_e">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard MT_e">
                                       <div class="card-body">
                                           <div class="row">
                                               <div>
                                                   <h5 class="card-title">
                                                       16 sesiones <br class="space">
                                                       privadas
                                                   </h5>
                                                   <p class="card-text">
                                                       con nuestro equipo los <br class="DT_e">
                                                       primeros 3 meses para <br class="DT_e">
                                                       guiarte a implementar<br class="DT_e">
                                                       Escala exitosamente.
                                                   </p>
                                               </div>
                                               <div>
                                                   <div class="img-container img1">
                                                       <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/implementacion_pagina_sesiones.png') !!}"
                                                           loading="lazy">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-12 col-lg-4 card2">
                                   <div
                                       class="card">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/card_white_home_fondo.png') }}" alt="" class="backgroundCard D_e">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard MT_e">
                                       <div class="card-body">
                                           <div class="row">
                                               <div>
                                                   <h5 class="card-title">
                                                       Capacitaciones<br class="space">
                                                       ilimitadas
                                                   </h5>
                                                   <p class="card-text">
                                                       en vivo o autoguiadas, <br class="DT_e">
                                                       para aprender a usar<br class="DT_e">
                                                       cada una de las<br class="DT_e">
                                                       herramientas de Escala.
                                                   </p>
                                               </div>
                                               <div>
                                                   <div class="img-container img2">
                                                       <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/implementacion_pagina_capacitaciones.png') !!}"
                                                           loading="lazy">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-12 col-lg-4 card3">
                                   <div
                                       class="card">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/card_white_home_fondo.png') }}" alt="" class="backgroundCard D_e">
                                       <img src="{{ App::setFilePath('/assets/images/illustrations/others/home_2023_boxline_mobile.png') }}" alt="" class="backgroundCard MT_e">
                                       <div class="card-body">
                                           <div class="row">
                                               <div>
                                                   <h5 class="card-title">
                                                       Soporte vía <br class="space">
                                                       chat ilimitado
                                                   </h5>
                                                   <p class="card-text">
                                                       nuestro equipo atiende <br class="DT_e">
                                                       a preguntas puntuales<br class="DT_e">
                                                       por WhatsApp o <br class="DT_e">
                                                       Plataforma en horario<br class="DT_e">
                                                       laboral.
                                                   </p>
                                               </div>
                                               <div>
                                                   <div class="img-container img3">
                                                       <img class="img-card " src="{!! App::setFilePath('/assets/images/illustrations/others/pagina_implementacion_soporte.png') !!}"
                                                           loading="lazy">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                           </div>

                           <div class="btn-cta col-md-12 col-lg-12">
                               <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                   Conocer más
                               </a>
                           </div>
                       </div>
                   </section>
               </div>

           </section>

           <section class="customSection sectionParent implementacion-2023-3 backgroundFull" style="background-image: url('{{ App::setFilePath('/assets/images/banners/implementacion_fondo_seccion_1.svg') }}')">

               <div class="section-row">

                   <section class="innerSectionElement sct1">

                       <div class="containElements">
                           <img src="{!! App::setFilePath('/assets/images/illustrations/others/implementacion_pagina_implementacion_animacion_persona_escala.png') !!}"
                               loading="lazy">
                       </div>

                   </section>
                   <section class="innerSectionElement sct2">

                       <div class="containElements">
                           <h2 class="title">
                               ¿Cómo luce un cronograma de acompañamiento <br class="DT_e">
                               personalizado para la implementación autogestionada?
                           </h2>
                       </div>
                   </section>
                   <section class="innerSectionElement sct3">

                       <div class="containElements container py-5">
                           <div class="row">
                               <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="card h-100 text-center">
                                       <div class="card-header">
                                           <h3><span>#1</span> Kickoff</h3>
                                       </div>
                                       <div class="containElements">
                                           <img src="{!! App::setFilePath('/assets/images/illustrations/others/icono_pagina_implementacion_kickoff.png') !!}"
                                               loading="lazy">
                                       </div>
                                       <div class="card-body">
                                           <span class="card-text">Conoce a tu Gerente de Éxito asignado y primeras tareas para iniciar con éxito</span>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="card h-100 text-center">
                                       <div class="card-header">
                                           <h3><span>#2</span> Planificación</h3>
                                       </div>
                                       <div class="containElements">
                                           <img src="{!! App::setFilePath('/assets/images/illustrations/others/icono_pagina_implementacion_planificacion.png') !!}"
                                               loading="lazy">
                                       </div>
                                       <div class="card-body">
                                           <span class="card-text">Te guiamos a definir un plan de acción priorizado según el uso que tu y tu equipo necesitan darle a Escala</span>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="card h-100 text-center">
                                       <div class="card-header">
                                           <h3><span>#3</span>Configuración </h3>
                                       </div>
                                       <div class="containElements">
                                           <img src="{!! App::setFilePath('/assets/images/illustrations/others/icono_pagina_implementacion_configuracion.png') !!}"
                                               loading="lazy">
                                       </div>
                                       <div class="card-body">
                                           <span class="card-text">Te apoyamos en vivo a conectar cuentas de dominio, email, publicidad y WhatsApp</span>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="card h-100 text-center">
                                       <div class="card-header">
                                           <h3><span>#4</span> Entrega de diseños</h3>
                                       </div>
                                       <div class="containElements">
                                           <img src="{!! App::setFilePath('/assets/images/illustrations/others/icono_pagina_implementacion_diseños.png') !!}"
                                               loading="lazy">
                                       </div>
                                       <div class="card-body">
                                           <span class="card-text">De necesitarlo, creamos el diseño de 1 plantilla personalizada con tu marca para email y landing page</span>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="card h-100 text-center">
                                       <div class="card-header">
                                           <h3><span>#5</span> Revisión de la Implementación</h3>
                                       </div>
                                       <div class="containElements">
                                           <img src="{!! App::setFilePath('/assets/images/illustrations/others/icono_pagina_implementacion_implementacion.png') !!}"
                                               loading="lazy">
                                       </div>
                                       <div class="card-body">
                                           <span class="card-text">A medida que tú y tu equipo adaptan Escala a sus operaciones, sostenemos reuniones de revisión para darte feedback y atender preguntas </span>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="card h-100 text-center">
                                       <div class="card-header">
                                           <h3><span>#6</span> Cierre y Seguimiento</h3>
                                       </div>
                                       <div class="containElements">
                                           <img src="{!! App::setFilePath('/assets/images/illustrations/others/icono_pagina_implementacion_seguimiento.png') !!}"
                                               loading="lazy">
                                       </div>
                                       <div class="card-body">
                                           <span class="card-text">Una vez termines de implementar según el plan acordado, nos reunimos para analizar resultados y definir próximos pasos con Escala</span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <p>
                           Entre cada sesión con nuestro equipo, nuestros clientes se capacitan con recursos <br class="DT_e">
                           de Escala Academy y realizan tareas según el plan acordado. También tienen a disposición <br class="DT_e">
                           el chat de soporte en vivo para atender preguntas puntuales.
                       </p>

                       <div class="btnCenter">

                           <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                               Conocer más
                           </a>
                       </div>
                   </section>

               </div>

           </section>

           <section class="component-info-multiple-cards-T2 customSection sectionParent implementacion-2023-4">
               <div class="section-row">
                   <section class="innerSectionElement sct1">
                       <div class="containElements">
                           <h2 class="primaryTitle blackColor">
                               ¿Qué dicen nuestros clientes?
                           </h2>
                       </div>
                   </section>
                   <section class=" innerSectionElement sct2" ">
                       <div class=" groupElements">
                       <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white.png') !!}" alt="" class="backOverlay">
                       <div>
                           <h3 class="secondaryTitle">
                               Escala se desmarca de
                               sus competidores
                           </h3>
                           <p class="text">
                               <span>
                                   Escala se desmarca de sus competidores por el
                                   acompañamiento que hace a los usuarios. Tienen
                                   una metodología que permite sacar el mayor
                                   provecho de la herramienta con la guía constante
                                   de su servicio al cliente.
                               </span>
                           </p>
                       </div>
                       <div class="cardReviews">
                           <img src="{!! App::setFilePath('/assets/images/illustrations/others/SalesSapiens-reviews.png') !!}">
                           <div class="stars">
                               <span class="name">
                                   SalesSapiens
                               </span>
                               <div class="containerImage">
                                   <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                               </div>
                           </div>
                       </div>
               </div>

               <div class="groupElements">
                   <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white.png') !!}" alt="" class="backOverlay">
                   <div>
                       <h3 class="secondaryTitle">
                           La herramienta<br class="DT_e">
                           correcta
                       </h3>
                       <p class="text">
                           <span>
                               Escala tiene los componentes que requiero
                               para automatizar mis procesos de venta,
                               marketing y servicio al cliente.
                               El soporte técnico es muy ágil y
                               asertivo en las soluciones.
                           </span>
                       </p>
                   </div>
                   <div class="cardReviews">
                       <img src="{!! App::setFilePath('/assets/images/illustrations/others/edwinhernandez-reviews.png') !!}">
                       <div class="stars">
                           <span class="name">
                               Edwin Hernandez
                           </span>
                           <div class="containerImage">
                               <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                           </div>
                       </div>
                   </div>
               </div>
               <div class="groupElements">
                   <img src="{!! App::setFilePath('/assets/images/illustrations/others/marco_white.png') !!}" alt="" class="backOverlay">
                   <div>
                       <h3 class="secondaryTitle">
                           Excelente<br class="DT_e">
                           servicio
                       </h3>
                       <p class="text">
                           <span>
                               La interfaz es intuitiva, facilitando la gestión de clientes y el seguimiento de las ventas.
                               El equipo de soporte siempre responde de manera rápida y efectiva, brindando soluciones a cualquier problema.
                               Además, la personalización de informes me ha permitido obtener insights
                               valiosos para mejorar nuestras estrategias comerciales.
                           </span>
                       </p>
                   </div>
                   <div class="cardReviews">
                       <img src="{!! App::setFilePath('/assets/images/illustrations/others/katiasalinas-reviews.png') !!}">
                       <div class="stars">
                           <span class="name">
                               Katia Salinas
                           </span>
                           <div class="containerImage">
                               <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}" loading="lazy">
                           </div>
                       </div>
                   </div>
               </div>
           </section>

           <section class=" innerSectionElement sct3">
               <div class="containElements">
                   <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_review_katia_salinas.png') !!}" loading="lazy">
               </div>
               <div class="containElements">
                   <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_review_edwind_hernandez.png') !!}" loading="lazy">
               </div>
               <div class="containElements">
                   <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_review_salessapiens.png') !!}" loading="lazy">
               </div>
           </section>
       </div>
       </section>


       <section class="customSection sectionParent implementacion-2023-5">

           <div class="section-row">

               <section class="innerSectionElement sct1">
                   <div class="containElements">
                       <span>
                           Escala Academy
                       </span>
                       <h2 class="title">
                           Recursos educativos para acelerar tu progreso
                       </h2>
                       <p>Aprende a usar cada una de las herramientas con:</p>
                   </div>

               </section>

               <section class="innerSectionElement sct3">

                   <div class="containElements container py-5">
                       <div class="row justify-content-center">
                           <div class="col-lg-4 col-md-6 mb-4">
                               <div class="card h-100 text-center">

                                   <div class="containElements">
                                       <img src="{!! App::setFilePath('/assets/images/illustrations/others/implementacion_capacitaciones_mensuales.png') !!}"
                                           loading="lazy">
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text">
                                           <span> 10+ horas mensuales</span> <br class="space">
                                           de capacitaciones en vivo por herramienta con un instructor Escala
                                       </p>
                                   </div>
                               </div>
                           </div>

                           <div class="col-lg-4 col-md-6 mb-4">
                               <div class="card h-100 text-center">

                                   <div class="containElements">
                                       <img src="{!! App::setFilePath('/assets/images/illustrations/others/implementacion_pagina_cursos.png') !!}"
                                           loading="lazy">
                                   </div>
                                   <div class="card-body">
                                       <span class="card-text">
                                           <span> 100+ horas</span> <br class="space">
                                           de cursos y tutoriales autoguiados por herramienta
                                       </span>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>

           </div>

       </section>

       <section class="customSection sectionParent implementacion-2023-6">

           <div class="section-row">

               <section class="innerSectionElement sct1">
                   <div class="card-header">
                       <div class="row">
                           <div class="justify-center">
                               <img src="{!! App::setFilePath('/assets/images/illustrations/others/05-acompanamiento-2023.png') !!}" loading="lazy">
                           </div>
                       </div>
                   </div>
                   <div class="containElements">
                       <span>Chat de soporte</span>
                       <h2 class="title">
                           En vivo y eficiente, atendemos a preguntas puntuales
                       </h2>
                       <p>Escríbenos por WhatsApp o Chat de plataforma en los siguientes horarios:</p>
                   </div>

               </section>
               <section class="innerSectionElement sct2">
                   <div class="containElements">
                       <div class="row">
                           <div class="col-md-12 col-lg-12 cardParent">
                               <div class="card">
                                   <div class="card-body">
                                       <div class="row timeFlags">
                                           <div class="col-md-12 title-block">
                                               <p class="text-day">De Lunes a Viernes:</p>
                                           </div>
                                           <div class="col-6 col-lg-3">
                                               <div class="container-flags">
                                                   <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/07-acompanamiento-2023.png') !!}"
                                                       loading="lazy">
                                               </div>
                                               <p class="text-time">6 am - 7 pm</p>
                                           </div>
                                           <div class="col-6 col-lg-3">
                                               <div class="container-flags">
                                                   <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/09-home2023.png') !!}"
                                                       loading="lazy">
                                               </div>
                                               <p class="text-time">7 am - 8 pm</p>
                                           </div>
                                           <div class="col-6 col-lg-3">
                                               <div class="container-flags ">
                                                   <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/10-home2023.png') !!}"
                                                       loading="lazy">
                                               </div>
                                               <p class="text-time">8 am - 9 pm</p>
                                           </div>
                                           <div class="col-6 col-lg-3">
                                               <div class="container-flags">
                                                   <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/11-home2023.png') !!}"
                                                       loading="lazy">
                                               </div>
                                               <p class="text-time">9 am - 10 pm</p>
                                           </div>
                                       </div>
                                       <div class="row timeFlags">
                                           <div class="col-md-12 title-block">
                                               <p class="text-day">Sábados:</p>
                                           </div>
                                           <div class="col-6 col-lg-3">
                                               <div class="container-flags">
                                                   <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/07-acompanamiento-2023.png') !!}"
                                                       loading="lazy">
                                               </div>
                                               <p class="text-time">8 am - 12 pm</p>
                                           </div>
                                           <div class="col-6 col-lg-3">
                                               <div class="container-flags">
                                                   <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/09-home2023.png') !!}"
                                                       loading="lazy">
                                               </div>
                                               <p class="text-time">9 am - 1 pm</p>
                                           </div>
                                           <div class="col-6 col-lg-3">
                                               <div class="container-flags ">
                                                   <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/10-home2023.png') !!}"
                                                       loading="lazy">
                                               </div>
                                               <p class="text-time">10 am - 2 pm</p>
                                           </div>
                                           <div class="col-6 col-lg-3">
                                               <div class="container-flags">
                                                   <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/11-home2023.png') !!}"
                                                       loading="lazy">
                                               </div>
                                               <p class="text-time">11 am - 3 pm</p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
           </div>

       </section>

       <section class="customSection sectionParent implementacion-2023-7">
           <div class="section-row">
               <section class="innerSectionElement sct1">
                   <div class="containElements">
                       <h2 class="title">
                           ¿Qué necesita una empresa para aprovechar este servicio?
                       </h2>
                       <p>Para que el cliente pueda implementar exitosamente el CRM con la guía del equipo de Escala,
                           necesita contar con una o dos personas en su equipo que puedan cubrir dos funciones:</p>
                   </div>

               </section>

               <section class="innerSectionElement sct3">
                   <div class="containElements container py-5">
                       <div class="row justify-content-center">
                           <div class="col-lg-4 col-md-6 mb-4">
                               <div class="card h-100 text-center">
                                   <div class="card-header">
                                       <h3><span>Función #1 del Cliente:</span><br class="space"> Estrategia</h3>
                                   </div>
                                   <div class="containElements">
                                       <img src="{!! App::setFilePath('/assets/images/illustrations/others/implementacion_pagina_implementacion_estrategia.png') !!}"
                                           loading="lazy">
                                   </div>
                                   <div class="card-body">
                                       <span class="card-text">Líder con suficiente poder de decisión para:</span>

                                       <ul>
                                           <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_circle.svg') !!}"
                                                   loading="lazy">
                                               Definir y ajustar estrategias de marketing/ventas 
                                           </li>
                                           <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_circle.svg') !!}"
                                                   loading="lazy">
                                               Evaluar y aprobar ajustes a procesos
                                           </li>
                                           <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_circle.svg') !!}"
                                                   loading="lazy">
                                               Dirigir al encargado de configurar Escala
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>

                           <div class="col-lg-4 col-md-6 mb-4">
                               <div class="card h-100 text-center">
                                   <div class="card-header">
                                       <h3><span>Función #2 del Cliente:</span><br class="space"> Configuración</h3>
                                   </div>
                                   <div class="containElements">
                                       <img src="{!! App::setFilePath('/assets/images/illustrations/others/hombre-configuracion.png.png') !!}"
                                           loading="lazy">
                                   </div>
                                   <div class="card-body">
                                       <span class="card-text">Miembro operativo capaz de:</span>

                                       <ul>
                                           <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_circle.svg') !!}"
                                                   loading="lazy">
                                               Conectar cuentas
                                           </li>
                                           <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_circle.svg') !!}"
                                                   loading="lazy">
                                               Personalizar campos del CRM
                                           </li>
                                           <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_circle.svg') !!}"
                                                   loading="lazy">
                                               Configurar procesos que deseen automatizar
                                           </li>
                                           <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_circle.svg') !!}"
                                                   loading="lazy">
                                               Crear reportes
                                           </li>
                                           <li><img src="{!! App::setFilePath('/assets/images/illustrations/others/check_circle.svg') !!}"
                                                   loading="lazy">
                                               Editar páginas y plantillas de emails
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>

                       </div>
                   </div>
               </section>

           </div>

       </section>


       
   </div>
   </div>
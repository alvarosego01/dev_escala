   <div id="implementacion-2023">
       <div class="sections">

           <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol implementacion-2023-0 ">

               <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/mobile-bg-implementacion-2023-07.png') }}')"
                   class="backgroundFull MT_e">

                   <div class="section-row">

                       <section class="innerSectionElement sct1">

                           <div class="groupElements row">


                               <div class="info col-md-12 col-lg-8 ">


                                   <div class="containElements row threeCol">

                                       <div class=" infoTitle">

                                              <h1 class="principalTitle">
                                               <span>¡Recibe el CRM personalizado</span> <br class="space">
                                                con plantillas adaptadas <br class="space">
                                                a tu marca!
                                           </h1>

                                            <p class="text">
                                                Al inscribirte a Escala, adaptamos la <br class="DT_e">
                                                plataforma para que tú y tu equipo aceleren <br class="DT_e">
                                                el proceso de implementación.
                                            </p>

                                       </div>

                                       <div class="containerImage MT_e">
                                           <img src="{{ App::setFilePath('/assets/images/person/am/am_implement.png') }}"
                                               alt="">
                                       </div>

                                   </div>


                               </div>

                               <div class="form7 col-md-12 col-lg-4 ">

                                   <div class="containElements">

                                       <div class="formatForm redirectWeb" redirectWeb="true">

                                           <h5 class="titleFormat blackcolor">
                                               Recibe un tour guiado <br class="space">
                                               de Escala
                                           </h5>

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

                           </div>

                       </section>

                       <section class="innerSectionElement sct2">

                           <div class="containElements">

                               @php
                                   $elementsReviews = [
                                       [
                                           'logo' => App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
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

                               <div class="elements">
                                   {{-- <img src="{!! App::setFilePath('/assets/images/illustrations/others/08-implementacion-2023.png') !!}" loading="lazy"> --}}

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

                       </section>

                   </div>

               </div>

               <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-implementacion-2023-07.png') }}')"
                   class="backgroundFull D_e">

                   <div class="section-row">

                       <section class="innerSectionElement sct1">

                           <div class="groupElements row">


                               <div class="info col-md-12 col-lg-8 ">


                                   <div class="containElements row threeCol">

                                       <div class=" infoTitle">

                                           <h1 class="principalTitle">
                                               <span>¡Recibe el CRM personalizado</span> <br class="space">
                                                con plantillas adaptadas <br class="space">
                                                a tu marca!
                                           </h1>

                                            <p class="text">
                                                Al inscribirte a Escala, adaptamos la <br class="DT_e">
                                                plataforma para que tú y tu equipo aceleren <br class="DT_e">
                                                el proceso de implementación.
                                            </p>

                                       </div>

                                   </div>


                               </div>

                               <div class="form7 col-md-12 col-lg-4 ">

                                   <div class="containElements">

                                       <div class="formatForm redirectWeb" redirectWeb="true">

                                           <h5 class="titleFormat blackcolor">
                                               Recibe un tour guiado <br class="space">
                                               de Escala
                                           </h5>



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

                           </div>

                       </section>

                       <section class="innerSectionElement sct2">

                           <div class="containElements">

                               @php
                                   $elementsReviews = [
                                       [
                                           'logo' => App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
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

                               <div class="elements">
                                   {{-- <img src="{!! App::setFilePath('/assets/images/illustrations/others/08-implementacion-2023.png') !!}" loading="lazy"> --}}

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

                       </section>

                   </div>

               </div>

           </section>

           <section class="customSection sectionParent implementacion-2023-1"
           style="background-image: url('{!! App::setFilePath('/assets/images/banners/implementac_bg_02.svg') !!}')"
           >

            <div class="section-row">

                <section class="innerSectionElement sct0">

                    <div class="containElements">


                                    <h2 class="primaryTitle">
                                        Enfócate en lo que verdaderamente importa: <br class="space">
                                        ¡generar leads y cerrar ventas!
                                    </h2>

                                    <div class="img">
                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/implement_01.png') !!}" loading="lazy" class="D_e">

                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/implement_m_01.png') !!}" loading="lazy" class="MT_e">
                                        </div>
                                    </div>

                    </div>

                </section>

            </div>

        </section>


               <section class="customSection sectionParent implementacion-2023-2">

            <div class="section-row">

                <section class="innerSectionElement sct0">

                    <h2 class="title">
                        <span>¡Ningún otro CRM hace tanto por ti!</span> <br class="space">
                        ¿Qué recibes con el Servicio de <br class="space">
                        Implementación Acelerada?
                    </h2>

                    <p class="text">
                        Aprovecha la increíble posibilidad de implementar en minutos un embudo <br class="DT_e">
                    de ventas ¡basado en nuestra metodología de éxito probada! Esto incluye:
                    </p>

                           <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/implement_02.png') !!}" loading="lazy">


                           </div>


                </section>


            </div>

               </section>

                @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'implementacion-2023-3',
                'enableTitle' => true,
                'titlePrincipal' => 'Para generar <span>leads</span>',
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/illustrations/others/implement_03.png'),
                'title' => null,
                'text' =>'

                    <ul class="text">
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>1 Landing Page personalizada</h3>
                            Estructuramos, diseñamos y maquetamos 1 página dentro de Escala <br class="DT_e">
                            para promover uno de tus productos o servicios y capturar la info de <br class="DT_e">
                            contacto de los interesados. ¿Tu misión? ¡Ajustar textos y publicar!
                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>1 Página post-registro</h3>
                            Diseñamos y maquetamos una página comunicando el mensaje de <br class="DT_e">
                            tu elección, para que aparezca inmediatamente después de que un <br class="DT_e">
                            visitante se registre en tu landing page.
                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>1 Plantilla de Email post-registro</h3>
                            Diseñamos y maquetamos una plantilla de email que puedes enviar <br class="DT_e">
                            manual o automáticamente a los visitantes que se registren en tu <br class="DT_e">
                            landing page.
                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>1 Automatización post-registro</h3>
                            Te entregamos la plataforma configurada para que, al registrarse <br class="DT_e">
                            un contacto en tu landing page, se active automáticamente una <br class="DT_e">
                            secuencia de acciones: <br class="space">
                            <ul>
                            <li>1. El contacto recibirá un email estándar automáticamente</li>
                            <li>2. Se generará una oportunidad en el CRM, asociada al nuevo contacto</li>
                            <li>3. Se asignará una oportunidad automáticamente a un usuario específico</li>
                            <li>4. Al contacto se le aplicará una etiqueta</li>
                            <li>5. Se creará una actividad en el calendario del usuario seleccionado, recordándole contactar al nuevo contacto</li>
                            </ul>
                        </li>
                    </ul>
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'left',
            ];
        @endphp

        <div class="sect1" style="background-image: url('{!! App::setFilePath('/assets/images/banners/implementac_bg_03.svg') !!}')">
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1

        </div>
                @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'implementacion-2023-4',
                'enableTitle' => true,
                'titlePrincipal' => 'Para <span>convertir y fidelizar</span> clientes',
                'subTitlePrincipal' => null,
             'img' => App::setFilePath('/assets/images/illustrations/others/implement_04.png'),
                'title' => null,
                'text' =>'
                      <ul class="text">
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>Etapas de venta personalizadas</h3>
                            Ajustamos el Kanban de oportunidades en el CRM de Escala para <br class="DT_e">
                            que refleje el proceso paso a paso que se sigue en tu empresa para <br class="DT_e">
                            convertir leads en clientes y/o brindar servicio post-venta. <br class="space">
                            Con esta adaptación, tendrás una visualización clara y efectiva de <br class="DT_e">
                            cada etapa del proceso, lo que facilitará la gestión de oportunidades, <br class="DT_e">
                            la medición de indicadores clave y la eficiencia de tu equipo en el <br class="DT_e">
                            ciclo de ventas y/o atención al cliente.

                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>Datos ejemplo para practicar</h3>
                            Creamos 12 contactos y 10 oportunidades de prueba con el <br class="DT_e">
                            producto, prioridad y actividad asociada para facilitarle a tu equipo <br class="DT_e">
                            aprender prácticamente a vender y/o servir clientes usando el CRM <br class="DT_e">
                            de Escala.
                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>Campos Personalizados ilimitados</h3>
                            Creamos los campos que no existan por default en Escala, para que <br class="DT_e">
                            registres información y/o documentos relevantes de tus contactos y <br class="DT_e">
                            sus empresas a lo largo del proceso de venta o servicio.
                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>2 Plantillas de Email 1:1</h3>
                            Dejamos maquetadas 2 plantillas estándar de tu elección en el CRM <br class="DT_e">
                            para ahorrar tiempo al momento de enviar emails transaccionales a <br class="DT_e">
                            tus contactos durante el proceso de venta y/o servicio.
                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>1 Página de Recolección de Información</h3>
                            En Escala, creamos una página con un formulario que contiene <br class="DT_e">
                            múltiples preguntas, especialmente diseñado para facilitarle a tu <br class="DT_e">
                            equipo el registro de información precisa de prospectos o clientes en <br class="DT_e">
                            el CRM, ya sea durante interacciones en vivo o de forma automática. 
                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>Importación de contactos, productos, oportunidades y empresas</h3>
                            ¿Tienes múltiples productos y/o una base de datos de contactos, <br class="DT_e">
                            empresas y/o oportunidades en un en excel, email, WhatsApp u otra <br class="DT_e">
                            plataforma? Te apoyamos a pasarlos a Escala en una sesión en vivo <br class="DT_e">
                            de manera fácil y rápida.
                        </li>
                      </ul>
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
            ];
        @endphp

             <div class="sect2" style="background-image: url('{!! App::setFilePath('/assets/images/banners/implementac_bg_04.svg') !!}')">
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1

             </div>

                @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'implementacion-2023-5',
                'enableTitle' => true,
                'titlePrincipal' => 'Para <span>automatizar y configurar</span> la plataforma',
                'subTitlePrincipal' => null,
                 'img' => App::setFilePath('/assets/images/illustrations/others/implement_05.png'),
                'title' => null,
                'text' =>'
                         <ul class="text">
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>4 Plantillas de Email Marketing</h3>
                            Diseñamos y maquetamos el contenido de 4 emails para enviarse <br class="DT_e">
                            como campaña masiva a un segmento de tus contactos en Escala. <br class="space">
                            ¿Tu rol? ¡Ajustar textos, elegir el segmento y enviar!
                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>1 Flujo automatizado de WhatsApp (Próximamente)</h3>
                            En Escala, configuramos un flujo de Whatsapp con 3 mensajes <br class="DT_e">
                            estándar para que se envíen automáticamente según el evento de <br class="DT_e">
                            inicio de tu elección. ¿Tu misión? ¡Ajustar textos y empezar a usarlo!
                            <br class="space"><br class="space">
                            <small>(Disponible solo para usuarios con WhatsApp API en su plan)</small>
                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>1 Flujo automatizado de Emails</h3>
                            Configuramos el flujo de 3 emails estándar que contienen solo texto, <br class="DT_e">
                            para enviar de manera automática, según el evento de inicio de tu <br class="DT_e">
                            elección. ¿Tu misión? ¡Ajustar textos y empezar a usarlo!
                        </li>
                        <li>
                            <img src="'.App::setFilePath('/assets/images/illustrations/others/check.png').'" class="iconCheck">
                            <h3>Configuración técnica</h3>
                            Te apoyamos en una sesión en vivo a conectar tus cuentas de <br class="DT_e">
                            email, Meta Business Manager, píxeles, Google Tag Manager y <br class="DT_e">
                            dominios personalizados. Nos encargamos de estas tareas técnicas <br class="DT_e">
                            que necesitas hacer solo una vez, para que luego puedas olvidarte <br class="DT_e">
                            de ellas y concentrarte en lo que importa: hacer crecer tu negocio.
                        </li>
                         </ul>
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'left',
            ];
        @endphp
         <div class="sect3" style="background-image: url('{!! App::setFilePath('/assets/images/banners/implementac_bg_03.svg') !!}')">
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1
         </div>


                         <section class="customSection sectionParent implementacion-2023-6">

            <div class="section-row">


                <section class="innerSectionElement sct2">
                    <img src="{!! App::setFilePath('/assets/images/banners/implement_otto_bg.svg') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/otto/implement_06.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 column-text">
                                <h3>
                                    Nota:
                                </h3>
                                <ul class="text">

                                    <li>
                                        <span class="number">1.</span>
                                        Diseñamos los emails y la landing page tomando <br class="D_e">
                                        la referencia de marca del website y/o redes sociales <br class="D_e">
                                        del cliente. De no tener, se solicita al cliente una <br class="D_e">
                                        pieza gráfica referencia.
                                    </li>
                                    <li>
                                        <span class="number">2.</span>
                                        El texto de los emails y landing page, es simulado. Es <br class="D_e">
                                        responsabilidad del cliente adaptarlo a su negocio y/o <br class="D_e">
                                        necesidades.
                                    </li>
                                    <li>
                                        <span class="number">3.</span>
                                        Cualquier modificación de lo entregado, es <br class="D_e">
                                        responsabilidad del cliente.
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>




           @php
               $desk_reviews = [
                   [
                       'area' => 'Finanzas',
                       'text' => '
                        <strong>“Gracias a Escala ahorramos 70% del tiempo invertido</strong> por el equipo comercial en tareas operativas y aumentamos 20% la cantidad de clientes.”
                        ',
                       'logo' => App::setFilePath('/assets/images/logos/logo_saeta.png'),
                       'name' => 'Claudio Radovich, Fundador',
                   ],
                   [
                       'area' => 'Consultoría',
                       'text' => '
                        <strong>“Logramos 2X nuestra facturación</strong> en menos de 6 meses y multiplicar 4X los nuevos leads gracias a Escala.”
                        ',
                       'logo' => App::setFilePath('/assets/images/illustrations/others/icon_mark_testimonial.png'),
                       'name' => 'William Ávila, CEO',
                   ],
                   [
                       'area' => 'Salud y bienestar',
                       'text' => '<strong>“Aumentamos 5X la tasa de recuperación</strong> de carrito de compra abandonado y 41% la tasa de apertura promedio en campañas de Email Marketing.”',
                       'logo' => App::setFilePath('/assets/images/logos/logo_rgg.png'),
                       'name' => 'Biaggio Correale, Director <br class="space"> de Operaciones',
                   ],
               ];

           @endphp


           <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg-implementacion-2023-02.png') !!})"
               class="sectionParent customSection implementacion-2023-7">

               <div class="section-row">

                   <section class="innerSectionElement sct1">

                       <div class="row">

                           <div class="slideshowCards col-md-12 col-lg-9">
                               <div class="containElements">

                                   <div id="carousel-testimonials-desktop" class="owl-carousel owl-theme">

                                       @if (isset($desk_reviews) && $desk_reviews != null)
                                           @foreach ($desk_reviews as $index => $item)
                                               <div class="item @if ($index === array_key_first($desk_reviews)) active @endif ">

                                                   <div class="testimonial">

                                                       <div class="containElements">

                                                           <div class="area">
                                                               <h3>
                                                                   {!! $item['area'] !!}
                                                               </h3>
                                                           </div>

                                                           <div class="quote">
                                                               <div class="containerImage">
                                                                   <img src="{!! App::setFilePath('/assets/images/illustrations/others/open_comi.png') !!}" loading="lazy">
                                                               </div>
                                                           </div>

                                                           <p class="text">
                                                               {!! $item['text'] !!}
                                                           </p>

                                                           <div class="byCompany">
                                                               <div class="logo">
                                                                   <div class="containerImage">
                                                                       <img alt="TrustPilot review"
                                                                           src="{!! $item['logo'] !!}"
                                                                           alt="" loading="lazy">
                                                                   </div>
                                                               </div>
                                                               <div class="data">
                                                                   <span class="name">
                                                                       {!! $item['name'] !!}
                                                                   </span>
                                                                   <div class="stars">
                                                                       <div class="containerImage">
                                                                           <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}"
                                                                               loading="lazy">
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>

                                                       </div>


                                                   </div>


                                               </div>
                                           @endforeach
                                       @endif

                                   </div>

                               </div>
                           </div>

                           <div class="info col-md-12 col-lg-3">
                               <div class="containElements">
                                   <img class="img-otto" src="{!! App::setFilePath('/assets/images/illustrations/others/01-implementacion-2023.png') !!}" loading="lazy">
                                   <h2 class="primaryTitle blackColor">
                                       Nuestros clientes lo<br class="space">
                                       comprueban.<br class="space">
                                       <span>Casos de éxito</span>
                                   </h2>

                               </div>
                           </div>

                       </div>


                   </section>


               </div>

               {{-- <img src="{!! App::setFilePath('/assets/images/banners/background_space_4.png') !!}" alt="" class="overlaySpace"> --}}


           </section>

           <script>
               jQuery('.owl-carousel').owlCarousel({
                   loop: true,
                   margin: 10,
                   nav: true,
                   responsive: {
                       0: {
                           items: 1
                       },
                       768: {
                           items: 1
                       },
                       1000: {
                           items: 3
                       },
                       1250: {
                           items: 3
                       },
                       1500: {
                           items: 4
                       }
                   }
               })
           </script>



              <section style="background-image: url({!! App::setFilePath('/assets/images/banners/implementac_bg_06.svg') !!})"
            class='w-full customSection sectionParent implementacion-2023-8'>
            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <div class="row">

                            <div class="col-md-12 col-lg-6 image">

                                   <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/implement_rocket.png') !!}" loading="lazy">
                                </div>

                            </div>
                            <div class="col-md-12 col-lg-6 info">


                        <h2 class="title">
                           Aprende sobre el servicio de <br class="DT_e">
                            acompañamiento
                        </h2>

                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Aprender más
                        </a>
                            </div>
                        </div>

                    </div>

                </section>

            </div>
        </section>

           @php
               $escalaUrl = 'https://escala.com';

               $items = [
                   [
                       'type' => 'master',
                       'title' => '¿Cómo diseñan los emails y las landing pages?',
                       'text' => 'Diseñamos los emails y la landing page tomando la referencia de marca del website y/o <br class="DT_e"> redes sociales del cliente. De no tener, se solicita al cliente una pieza gráfica referencia.',
                   ],
                   [
                       'type' => 'master',
                       'title' => '¿Crean también el copy de emails y landing pages?',
                       'text' => 'El texto de los emails y landing page, es simulado. Es responsabilidad del cliente adaptarlo <br class="DT_e"> a su negocio y/o necesidades.',
                   ],
                   [
                       'type' => 'master',
                       'title' => '¿Qué pasa si quiero que modifiquen uno de los entregables?',
                       'text' => 'Cualquier modificación de lo entregado, es responsabilidad del cliente. El mismo puede <br class="DT_e"> utilizar las herramientas de Escala que son muy fáciles de usar.',
                   ],
                   [
                       'type' => 'master',
                       'title' => '¿Si me suscribo un viernes, cuándo recibo el CRM implementado?',
                       'text' => 'Entregamos el CRM implementado en 10 días hábiles desde el momento que tenemos <br class="DT_e"> toda la información requerida por parte del cliente para personalizar la plataforma y crear las piezas gráficas.',
                   ],
                   [
                       'type' => 'master',
                       'title' => '¿Cuánto cuesta la implementación?',
                       'text' => 'El valor que generamos es de más de USD $6,500 pero dependiendo del plan que <br class="DT_e"> obtengas puede estar o no incluida en la suscripción.',
                   ],
               ];

               $parameters = [
                   'classSection' => 'implementacion-2023-9',
                   'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                   'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                   'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                   'items' => $items,
                   'title' => '
    Preguntas <span>frecuentes</span>
   ',
               ];
           @endphp
           @contain_FAQ_T1($parameters)
           @endcontain_FAQ_T1



            <section class="sectionParent customSection implementacion-2023-10">
            <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/implementac_bg_07.svg') !!}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">

                               <div class="info col-md-12 col-lg-8 sectionTexts textRight">
                                <h3 class="secondaryTitle">
                                    ¡Ahorra tiempo, evita errores y <br class="DT_e">
                                    acelera <span>
                                        el retorno de tu inversión <br class="DT_e">
                                        con el CRM de Escala!
                                    </span>
                                </h3>
                            </div>

                            <div class="image col-md-12 col-lg-4">
                                <div class="containerImage">
                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/implement_09.png') !!}" loading="lazy">
                                </div>
                            </div>



                        </div>
                    </section>
                </div>
            </div>
        </section>



       </div>
   </div>

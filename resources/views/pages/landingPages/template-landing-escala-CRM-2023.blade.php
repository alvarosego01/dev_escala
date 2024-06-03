<div id="landing_CRM_2023">

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

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_CRM_2023 landing_CRM_2023_0 ">


        <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_landing_CRM_0.svg') }}')" class="backgroundFull">


            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta" src="{{ App::setFilePath('/assets/images/person/am/landing_crm_am_1.png') }}" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">

                El CRM con IA, WhatsApp <br class="space">
                y  herramientas de <br class="space">
                marketing <span>
                    para vender <br class="space">
                    más y mejor
                </span>

                                        </h1>

                                                                                    <p class="principalBigText grayColorTexts">

                    Convierte más contactos en clientes fieles <br class="DT_e">
                    con Escala, una plataforma todo-en-uno muy <br class="DT_e">
                    fácil de usar que tu equipo ¡sí querrá usar!

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

                                    <h5 class="titleFormat blackcolor">Recibe un demo-tour <br class="space"> personalizado de Escala</h5>


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
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta" src="{{ App::setFilePath('/assets/images/person/am/landing_crm_am_1.png')}}" loading="lazy">
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


              <section class='w-full customSection sectionParent landing_CRM_2023_1'>
                    <div class='section-row'>
                        <section class='innerSectionElement sct0 '>
                            <div class='containElements'>

                                <h2 class="primaryTitle">
                                 Maneja todo el ciclo de vida de tus clientes con las <br class="DT_e">
                                herramientas del CRM de Escala
                                </h2>

                            </div>
                        </section>

                        <section class='innerSectionElement sct1 '>
                            <div class='containElements'>

                                <div class="containerImage">

                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_img_1.png') !!}" alt="">

                                </div>

                            </div>
                        </section>

                    </div>

              </section>


        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_CRM_2023_2',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/1El-CRM-guarda-automáticamente.gif'),
                'title' => '

                        El CRM <span>guarda automáticamente</span> los <br class="DT_e">
                        contactos
                     que se registran en formularios y <br class="DT_e">
                    landing pages de Escala
                        ¡sin necesitar <br class="DT_e">
                        integraciones!

                ',
                'text' => null,
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
                'classSection' => 'landing_CRM_2023_3',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/2automatiza-post-registro.gif'),
                'title' => '
                        <span>Automatiza</span> en el CRM el envío de <br class="DT_e">
                        comunicaciones post-registro como:

                ',
                'text' => '
                    <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">
                    Emails
                    </span>
                        <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">
                    WhatsApps
                    </span>
                        <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">
                    Páginas de confirmación
                    </span>
                        <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">
                    Notificaciones al vendedor
                    </span>
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
                'classSection' => 'landing_CRM_2023_4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/3Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes-.gif'),
                'title' => '
                        <span>Gestiona</span> uno o más procesos para convertir <br class="DT_e">
                        contactos en clientes

                ',
                'text' =>'
                    Con la herramienta del CRM tipo “Kanban” o “Pipeline” <br class="DT_e">
                    evitas que se escapen oportunidades de venta.
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
                'classSection' => 'landing_CRM_2023_5',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/4Haz-mejor-seguimiento-a-tus-oportunidades-comerciales-.gif'),
                'title' => '
                        Haz <span>mejor seguimiento</span> a tus <br class="DT_e">
                        oportunidades comerciales.
                ',
                'text' =>'
                    El CRM simplifica priorizar, recordar tareas/actividades, <br class="DT_e">
                    enviar comunicaciones individuales y grupales, visualizar <br class="DT_e">
                    status de venta de cada prospecto ¡y más!
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
                'classSection' => 'landing_CRM_2023_6',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/5-metricas-en-tiempo-real_.gif'),
                'title' => '
                        Visualiza <span>métricas en tiempo real</span> <br class="DT_e">
                        sobre el rendimiento de tu equipo <br class="DT_e">
                        comercial y tus ventas
                ',
                'text' => '
                    Nuestros Dashboards amigables brindan información clave <br class="DT_e">
                    para gestionar al equipo y cerrar más ventas
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
                'classSection' => 'landing_CRM_2023_7',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/6Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes.gif'),
                'title' => '
                        <span>Registra fácilmente</span> información relevante <br class="DT_e">
                        sobre cada contacto y sus empresas
                ',
                'text' => '
                    Utiliza los campos que ya están en Escala o crea unos <br class="DT_e">
                    propios para guardar organizadamente información útil <br class="DT_e">
                    sobre cada persona y/o negocio que desees recordar
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
                'classSection' => 'landing_CRM_2023_8',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/7Lleva-un-historial-de-todas-las-interaccione.gif'),
                'title' => '
                        <span>Lleva un historial</span> de todas las interacciones <br class="DT_e">
                        que has tenido con cada contacto en el CRM
                ',
                'text' => '
                    Emails recibidos/enviados, formularios completadas, <br class="DT_e">
                    oportunidades y actividades creadas, notas ¡y más¡

                    <span class="specialTag">
                        ¡y mucho más!
                    </span>
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


         <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_CRM_3.svg') !!})"
            class="customSection sectionParent landing_CRM_2023_9">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                         <div class="image">

                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_img_2.png') !!}" alt="">
                            </div>

                        </div>

                        <div class="info">
                            <p class="text">
                                Descubre por ti mismo <br class="M_e"> nuestra <br class="tabletElement"> potente <br class="D_e">
                                <span>herramienta <br class="M_e"> comercial para</span> <br class="D_e">
                                pequeñas y <br class="M_e"> medianas empresas
                            </p>


                        <a class=" secondaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibir demo
                        </a>

                        </div>

                    </div>

                </section>

            </div>

        </section>


          <section class="customSection sectionParent landing_CRM_2023_10">

            <div class="section-row">


                <section class="innerSectionElement sct2">
                    {{-- style="background-image: url({!! App::setFilePath('/assets/images/banners/am_overlay_email-mkt.png') !!})"  --}}
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_landing_CRM_2.svg') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/person/am/landing_crm_am_2.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    <span>
                                        “El CRM es el corazón de las operaciones <br class="DT_e">
                                        de todo negocio.
                                    </span> Diseñamos Escala para <br class="DT_e">
                                    facilitarle a pequeñas y medianas empresas <br class="DT_e">
                                    tener una cultura cliente-céntrica y <br class="DT_e">
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

         {{-- @php
            $parameters = [
                'classSection' => 'landing_CRM_2023_11',
                'enableTitle' => true,
                'titlePrincipal' => '
                    Qué dicen nuestros clientes <br class="DT_e">
                    sobre el CRM de Escala
                ',
                'subTitlePrincipal' => null,
                'enableContainerButton' => false,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Recibe un demo',
                'mob_reviews' => [
                    App::setFilePath('/assets/images/illustrations/others/crm_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/crm_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/crm_review_3.png')
                ],
                'desk_reviews' => [
                    [
                    App::setFilePath('/assets/images/illustrations/others/crm_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/crm_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/crm_review_3.png')]
                ],
            ];
        @endphp
        @reviews_sliders_T1($parameters)
        @endreviews_sliders_T1 --}}

         <section
        class='w-full customSection sectionParent landing_CRM_2023_11'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                   Qué dicen nuestros clientes <br class="DT_e">
                    sobre el CRM de Escala

                </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                    @php
                        $reviews = [
                               App::setFilePath('/assets/images/illustrations/others/crm_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/crm_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/crm_review_3.png')
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


            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_CRM_1.svg') !!})"
            class="customSection sectionParent landing_CRM_2023_12">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            ¿Nuevo en configuración y uso de CRM? <br class="space">
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
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_img_3.png') !!}" alt="">
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


          <section
        class='w-full customSection sectionParent landing_CRM_2023_13'>

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
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_crm_img_4.png') !!}" alt="">
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
                                            <li class="element "
                                                info_index="{!! $loop->index !!}">
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

            <section
            style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_CRM_4.svg') !!})"
        class='w-full customSection sectionParent landing_CRM_2023_14'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                      <div class="containElements">

                        <h2 class="title">
                           <span>Acelera el crecimiento</span> de <br class="space">
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

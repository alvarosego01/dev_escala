{{--
    Template Name: [B] Landing - Servicios - Inmobiliarias
     --}}


@extends('layouts.app')

@section('content')

    <div id="landing-servicios-inmobiliarias-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingServInmobiliarias0',
                    'title' => '<span class="greenBlueColor">
                        ¡Genera más leads y cierra <br class="D_e"> más ventas para tu <br class="D_e"> inmobiliaria con Escala!
                        </span>',
                    'text' => null,
                    'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => true,
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/Component-inmobiliarias.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1


            @php
                $parameters = [
                    'classSection' => 'landingServInmobiliarias1 func',
                    'description' => 'En <strong>Escala</strong> estamos para ayudarte a ofrecer todos tus servicios <br class="D_e"> inmobiliarios, generando más leads de calidad y ventas. Todas las <br class="D_e"> herramientas de marketing digital y ventas en un solo lugar para que te <br class="D_e"> diferencies de tu competencia, en un mercado cada vez más competitivo.',
                    'byAm' => null,
                    'team' => null,
                    'image' => App::setFilePath('/assets/images/illustrations/otto/otto-casas.png'),
                ];
            @endphp

            @contain_am_T1( $parameters )
            @endcontain_am_T1



            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServInmobiliarias2',
                    'enableTitle' => true,
                    'enableButton' => true,
                    'urlButton' =>  '#',
                    'textButton' => 'Conocer más',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'titlePrincipal' => '<span class="greenBlueColor">Con Escala</span> tu negocio crece',
                    'elements' => [
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="D_e"> desde Facebook</span>',
                            'text' => 'En Escala puedes crear, administrar y publicar campañas de anuncios <br class="D_e"> digitales, sin salir de nuestra plataforma, atrayendo más visitantes a tus <br class="D_e"> landing pages.
                            <br class="space"><br class="space">
                            Genera tus campañas de Facebook con la audiencia y el presupuesto <br class="D_e"> ideal, sin necesidad de contratar a un profesional. Publica tantas <br class="D_e"> campañas como servicios inmobiliarios tengas: venta de inmuebles,<br class="D_e"> alquiler, rentas vacacionales, inmuebles empresariales, entre otros.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">
                                Genera leads calificados <br class="D_e"> con landing pages <br class="D_e"> optimizadas
                                </span>',
                            'text' => 'Haz que todos conozcan tus servicios profesionales y capta la <br class="D_e"> información de contacto de tus visitantes con landing pages <br class="D_e"> optimizadas.
                            <br class="space"><br class="space">
                            Elige una de nuestras plantillas, personalízala y publícala con <br class="D_e"> un clic, sin programar o diseñar.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-16 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">
                                No pierdas ningún <br class="D_e"> dato de tus leads
                                </span>',
                            'text' => 'Nuestras landing pages tienen formularios integrados.<br class="D_e"> Cuando tus visitantes registran toda su información en ellos,<br class="D_e"> queda guardada automáticamente en tu CRM de Escala. Así <br class="D_e"> podrás tener mejor control de los datos de tus leads.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Organiza y gestiona <br class="D_e"> tu base de datos</span>',
                            'text' => 'En Escala tenemos el CRM más fácil de usar para que tu equipo <br class="D_e"> comercial  pueda hacerle seguimiento a cada lead o cliente <br class="D_e"> hasta cerrar la venta de tus servicios.
                            <br class="space"><br class="space">
                            Crea actividades, tareas y recordatorios para tu equipo. Clasifica <br class="D_e"> a tus leads y clientes según sus necesidades, mantén comunicación <br class="D_e"> constante con campañas personalizadas.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_3.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">
                                Nutre la relación <br class="D_e"> con tus leads y clientes
                                </span>',
                            'text' => 'Crea y automatiza efectivas campañas de email marketing para generar <br class="D_e"> confianza entre tus leads y reforzar la lealtad de tus clientes potenciales. <br class="space">
                            Envía emails masivos, en el momento adecuado para:
                            <br class="space">
                            <br class="space">
                            <ul>
                                <li>Presentar nuevos inmuebles en las zonas más buscadas</li>
                                <li>Reforzar las razones de la elección de tus servicios</li>
                                <li>Mantenerlos informados sobre las novedades y oportunidades <br class="D_e"> de precios en propiedades</li>
                            </ul>',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Mide y optimiza <br class="space"> tus resultados <br class="space"> con analíticas relevantes
                            </span>',
                            'text' => 'Ten visibilidad sobre las métricas que realmente importan para <br class="D_e"> entender qué funciona y qué puede mejorar tu marketing digital,<br class="D_e"> con tableros amigables que miden el rendimiento de ads, landing <br class="D_e"> pages y campañas de emails.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-11.png'),
                        ],

                    ],
                ];
            @endphp
            @contain_info_checkBoxes_T1( $parameters )

            @endcontain_info_checkBoxes_T1

            {{-- @php
            $parameters = [
                'type' => 'backgroundImage',
                'backgroundImageFile' => App::setFilePath('/assets/images/backgrounds/degradeDarkBlue2.png'),
                'classSection' => 'landingServInmobiliarias3',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '¿Escala tiene todo <br class="DT_e"> lo que necesito?
                ',
                'img' => App::setFilePath('/assets/images/illustrations/otto/seguros-5 1.png'),
                'text' => 'No importa el tamaño de tu servicio de salud. <br class="D_e"> Empodera a tu generación de leads con todas las <br class="D_e"> herramientas digitales y de ventas en un solo lugar.',
                'enableButton' => true,
                'urlButton' => '#lead-form',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Recibe un demo',
                'side' => 'right',
            ];
        @endphp

        @contain_text_image_T1( $parameters )

        @endcontain_text_image_T1 --}}

             @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landingServInmobiliarias4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">Un plan hecho a tu medida</span>',
                'img' => App::setFilePath('/assets/images/illustrations/others/paymentpages-1 1.png'),
                'text' => 'Conoce nuestros planes para empresas inmobiliarias.<br class="D_e"> Paga por número de contactos de marketing y ten todas <br class="D_e"> las herramientas en una sola plataforma.',
                'enableButton' => true,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Hablar con un asesor',
                'side' => 'left',
            ];
        @endphp

                @contain_text_image_T1( $parameters )

                @endcontain_text_image_T1

{{--
            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServInmobiliarias5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Nuestros clientes hablan <br class="space"> de nuestros beneficios</span>',
                    'video' => 'https://www.youtube.com/embed/XUPOcRPXuzA',
                    'text' => '“Mi equipo de ventas aumentó su productividad en un 150,<br class="D_e"> acelerando la tasa de cierre de ventas de propiedades <br class="D_e"> triple A, en las zonas más exclusivas. Con el CRM de <br class="D_e"> Escala pudimos enviar campanas customizadas <br class="D_e"> segmentando muy bien nuestra audiencia”',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'enableAutor' => true,
                    'autor' => '<span><strong>Abel Rojas</strong></span><small>Director Real State</small>',
                    'side' => 'right',
                ];
            @endphp

            @contain_testimonial_text_video_T1( $parameters )

            @endcontain_testimonial_text_video_T1 --}}


            {{-- <section class="customSection sectionParent landingServInmobiliarias6">



                <section class="innerSectionElement">

                    <div class="image">

                        <div class="containerImage">

                            <img src="{!! App::setFilePath('/assets/images/illustrations/team/astrorocket1.png') !!}" alt="" loading="lazy">

                        </div>

                    </div>

                    <div class="info">

                        <h2 class="primaryTitle whiteColor">
                            Conocimiento es poder

                        </h2>

                        <p class="text">
                            Descarga nuestro ebook: <br class="space">
                            <span>Inbound marketing para empresas inmobiliarias</span>
                        </p>

                        <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            ¡Descargar ahora!
                        </a>

                    </div>

                </section>


                <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas-inv 3.png') !!}')" class="backgroundPlanets">
                </div>


            </section> --}}

            @php
            $parameters = [
                'classSection' => 'landingServInmobiliarias7',
                'title' => 'Haz crecer tu negocio <br class="D_e"> inmobiliario con Escala',
                'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
                'text' => null,
                'image' => App::setFilePath('/assets/images/illustrations/otto/otto-happy.png'),
                'side' => 'left',
            ];
        @endphp
        @bannerForms7_T1( $parameters )

        @endbannerForms7_T1




        </div>

    </div>



@endsection

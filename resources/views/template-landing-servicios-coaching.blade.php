{{--
     Template Name: [B] Landing - Servicios - Coaching
    --}}


@extends('layouts.app')

@section('content')

    <div id="landing-servicios-coaching-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingServCoaching0',
                    'title' => 'Genera más leads de calidad <br class="D_e"> para tus servicios de <br class="D_e"> consultoría con Escala',
                    'text' => null,
                    'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => true,
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/mujer_loto_rojo_coaching.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1


            @php
                $parameters = [
                    'classSection' => 'landingServCoaching1 func',
                    'description' => '
                    En Escala estamos para ayudarte a ofrecer todos tus <br class="D_e"> servicios de consultoría, generando más leads,<br class="D_e"> cerrando más ventas y fidelizando a más clientes.<br class="D_e"> Obtén todas las herramientas de marketing digital y <br class="D_e"> ventas en un solo lugar para que te diferencies en una <br class="D_e"> industria cada día con mayor oferta.
                    ',
                    'byAm' => null,
                    'team' => null,
                    'image' => App::setFilePath('/assets/images/illustrations/others/banner_01.png'),
                ];
            @endphp

            @contain_am_T1( $parameters )
            @endcontain_am_T1



            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServCoaching2',
                    'enableTitle' => true,
                    'enableButton' => true,
                    'urlButton' =>  '#',
                    'textButton' => 'Conocer más',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'titlePrincipal' => '<span class="greenBlueColor">Con Escala crece tu negocio</span> <br class="D_e"> de coaching online',
                    'elements' => [
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="D_e"> desde Facebook</span>
                            ',
                            'text' => 'En Escala puedes crear, administrar y publicar campañas de anuncios <br class="D_e"> digitales, sin salir de nuestra plataforma, atrayendo más visitantes a tus <br class="D_e"> landing pages.
                            <br class="space"><br class="space">
                            Genera tus campañas de Facebook con la audiencia y el presupuesto <br class="D_e"> ideal, sin necesidad de contratar a un profesional.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">
                                Da a conocer <br class="D_e"> tus servicios de coaching <br class="D_e"> y genera leads calificados
                                </span>',
                            'text' => 'Haz que todos conozcan tus servicios profesionales y capta la <br class="D_e"> información de contacto de tus visitantes con landing pages <br class="D_e"> optimizadas. Elige una de nuestras plantillas, personalízala y <br class="D_e"> publícala con un clic, sin programar o diseñar.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-16 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">
                                No pierdas ningún <br class="D_e"> dato de tus leads
                               </span>',
                            'text' => 'Nuestras landing pages tienen formularios integrados. Cuando <br class="D_e"> tus visitantes registran toda su información en ellos, queda <br class="D_e"> guardada automáticamente en tu CRM de Escala. Así podrás <br class="D_e"> tener mejor control de los datos de tus leads.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Organiza y gestiona <br class="D_e"> tu base de datos</span>',
                            'text' => 'En Escala tenemos el CRM más fácil de usar para que tú mismo <br class="D_e"> puedas hacerle seguimiento a cada lead o cliente hasta cerrar <br class="D_e"> la venta de tus servicios, pasando por el desarrollo profesional <br class="D_e"> de las sesiones de training y formación.
                            <br class="space"><br class="space">
                            Crea actividades, tareas y recordatorios para tu equipo de <br class="D_e"> ventas. Clasifica a tus leads según sus sesiones o cursos de <br class="D_e"> interés y mantén comunicación constante con campañas <br class="D_e"> personalizadas.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_3.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">
                                Nutre la relación <br class="D_e"> con tus leads y clientes
                                </span>',
                            'text' => 'Crea y automatiza efectivas campañas de email marketing para generar <br class="D_e"> confianza entre tus leads y reforzar la lealtad de tus clientes.  Envía emails <br class="D_e"> masivos, en el momento adecuado para:
                            <br class="space"><br class="space">
                            <ul>
                                <li>Presentar nuevos servicios</li>
                                <li>Reforzar las razones de la elección de tu consultoría</li>
                                <li>Mantenerlos informados sobre las novedades</li>
                            </ul>',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Mide y optimiza <br class="D_e"> tus resultados <br class="D_e"> con analíticas relevantes
                            </span>',
                            'text' => 'Ten visibilidad sobre las métricas que realmente importan para <br class="D_e"> entender qué funciona y qué puede mejorar tu marketing digital.<br class="D_e"> Cuenta con tableros amigables que miden el rendimiento de ads, <br class="D_e"> landing pages y campañas de emails.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-11.png'),
                        ],

                    ],
                ];
            @endphp
            @contain_info_checkBoxes_T1( $parameters )

            @endcontain_info_checkBoxes_T1

            @php
            $parameters = [
                'type' => 'backgroundColor',
                'backgroundImageFile' => null,
                'classSection' => 'landingServCoaching3',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">
                    ¿Escala tiene todo <br class="DT_e">
                    lo que necesito?
                    </span>',
                'img' => App::setFilePath('/assets/images/illustrations/otto/seguros-5 1.png'),
                'text' => 'Empodera tus servicios de coaching con todas las herramientas <br class="DT_e"> digitales en un solo lugar. Es momento de acelerar el crecimiento de tu <br class="DT_e"> emprendimiento.',
                'enableButton' => true,
                'urlButton' => '#lead-form',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Recibe un demo',
                'side' => 'right',
            ];
        @endphp

        @contain_text_image_T1( $parameters )

        @endcontain_text_image_T1

                @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landingServCoaching4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">Un plan hecho a tu medida</span>',
                'img' => App::setFilePath('/assets/images/illustrations/others/paymentpages-1 1.png'),
                'text' => '
                Conoce nuestros planes para profesionales <br class="D_e"> de coaching. Paga por número de contactos <br class="D_e"> de marketing y ten todas las herramientas en <br class="D_e"> una sola plataforma.',
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
                    'classSection' => 'landingServCoaching5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Nuestros clientes hablan <br class="space"> de nuestros beneficios</span>',
                    'video' => 'https://www.youtube.com/embed/XUPOcRPXuzA',
                    'text' => '
                    “Para un profesional que debe atender a sus clientes, generar <br class="D_e"> sus citas, programar cursos y demás actividades... debemos <br class="D_e"> convertirnos en un todo en uno. Con Escala yo mismo pude <br class="D_e"> generar mi estrategia de marketing digital y el seguimiento <br class="D_e"> de todos mis leads, sin tener un gran equipo de trabajo”',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'enableAutor' => true,
                    'autor' => '<span>Ana Rivas</span><small>Coaching ontológico</small>',
                    'side' => 'right',
                ];


            @endphp

            @contain_testimonial_text_video_T1( $parameters )

            @endcontain_testimonial_text_video_T1 --}}

            {{-- <section class="customSection sectionParent landingServCoaching6">

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
                            <span>Inbound marketing para salud y farma</span>
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
                'classSection' => 'landingServCoaching7',
                'title' => 'Atrae más leads de calidad <br class="DT_e"> y convierte más ventas <br class="DT_e"> con Escala',
                'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
                'text' => null,
                'image' => App::setFilePath('/assets/images/illustrations/others/escalaventas_05.png'),
                'side' => 'left',
            ];
        @endphp
        @bannerForms7_T1( $parameters )

        @endbannerForms7_T1




        </div>

    </div>



@endsection

{{--
    Template Name: [B] Landing - Servicios - Seguros
--}}


@extends('layouts.app')

@section('content')

    <div id="landing-servicios-seguros-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingServSeguros0',
                    'title' => 'Descubre cómo Escala <br class="desktopTabletElement">
                                ayuda a las empresas <br class="desktopTabletElement">
                                aseguradoras a crecer',
                    'text' => null,
                    'textForm' => 'Comienza ahora',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => false,
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/senora-silla_1.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1


            @php
                $parameters = [
                    'classSection' => 'landingServSeguros1 func',
                    'title' => '<span class="blackColor2">Escala es perfecto <br class="desktopElement"> para tu empresa</span>',
                    'description' => 'Escala ayuda a tu aseguradora a generar leads de calidad y <br class="desktopTabletElement"> optimizar toda la gestión de ventas. Sabemos que es una <br class="desktopTabletElement"> industria desafiante, cada vez más regulada y con un proceso de <br class="desktopTabletElement"> ventas complejo. Desde Escala te ayudaremos a optimizar tus <br class="desktopTabletElement"> resultados con una menor inversión de tiempo y dinero.',
                    'byAm' => null,
                    'team' => null,
                    'image' => App::setFilePath('/assets/images/person/homebanner_persona-3B-1.png'),
                ];
            @endphp

            @contain_am_T1( $parameters )
            @endcontain_am_T1



            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServSeguros2',
                    'enableTitle' => true,
                    'enableButton' => true,
                    'urlButton' =>  App::setTypeUrl().'/zoom-meeting',
                    'textButton' => 'Conocer más',
                    'typeButton' => 'primaryButton hoverInEffect',
                    'titlePrincipal' => '<span class="blackColor2">¿Cómo te ayudamos a crecer?</span>',
                    'elements' => [
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="desktopTabletElement"> desde Facebook</span>
                            ',
                            'text' => '
                            Entendemos que las empresas aseguradoras necesitan dar a conocer <br class="desktopElement"> múltiples servicios  y generar tráfico a sus landing pages. Con Escala <br class="desktopElement"> podrás crear, administrar y publicar campañas de anuncios digitales, sin <br class="desktopElement"> salir de nuestra plataforma. Segmentándolas por intereses como: salud, <br class="desktopElement"> vida, auto y seguros de hogar, entre otros.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Date a conocer con <br class="desktopTabletElement"> landing pages optimizadas',
                            'text' => 'Genera diferentes landing pages según tu oferta de servicios,<br class="desktopElement"> sin programar o diseñar. Tu equipo de marketing podrá crear y <br class="desktopElement"> publicar landing pages optimizadas y personalizadas en pocos <br class="desktopElement"> minutos.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-16 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">No pierdas <br class="desktopTabletElement"> ningún dato </span>',
                            'text' => 'Ahora podrás tener mejor control de los datos de tus leads. Nuestras <br class="desktopElement"> landing pages tienen formularios inteligentes que te garantizan guardar <br class="desktopElement"> automáticamente en tu CRM todos la información de tus visitantes.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Organiza y gestiona <br class="desktopTabletElement"> tu base de datos</span>',
                            'text' => 'Entendemos que la adquisición de un seguro implica un proceso <br class="desktopElement"> complejo con varios pasos. Optimiza el seguimiento de cada <br class="desktopElement"> cliente y genera más ventas con el CRM de Escala. ',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_3.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Nutre la relación <br class="desktopTabletElement"> con tus leads y clientes
                                <br class="desktopElement">
                                <br class="desktopElement">
                                </span>
                            ',
                            'text' => 'Crea y automatiza efectivas campañas de email marketing para generar <br class="desktopElement"> confianza entre tus leads y reforzar la lealtad de tus clientes. Envía emails <br class="desktopElement"> masivos para: Presentar nuevos servicios, reforzar las ventajas de tu <br class="desktopElement"> empresa aseguradora, mantenerlos informados sobre las novedades.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Mide y optimiza <br class="desktopTabletElement"> tus resultados <br class="desktopTabletElement"> con analíticas relevantes</span>',
                            'text' => 'Ten visibilidad con dashboards amigables de las métricas que <br class="desktopElement"> realmente importan para entender qué funciona y qué puede <br class="desktopElement"> optimizar tu equipo para mejorar tus resultados en marketing <br class="desktopElement"> digital.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-11.png'),
                        ],
                    ],
                ];
            @endphp
            @contain_info_checkBoxes_T1( $parameters )

            @endcontain_info_checkBoxes_T1

            @php
            $parameters = [
                'type' => 'backgroundImage',
                'backgroundImageFile' => App::setFilePath('/assets/images/backgrounds/degradeDarkBlue2.png'),
                'classSection' => 'landingServSeguros3',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '¿Escala tiene todo <br class="desktopTabletElement"> lo que mi aseguradora necesita?',
                'img' => App::setFilePath('/assets/images/illustrations/otto/seguros-5 1.png'),
                'text' => 'No importa el tamaño de tu empresa. Empodera a tus equipos: <br class="desktopElement"> comercial, ventas y marketing con todas las herramientas digitales <br class="desktopElement"> en un solo lugar. Es momento de acelerar el crecimiento de tu negocio',
                'enableButton' => true,
                'urlButton' => '#lead-form',
                'typeButton' => 'primaryButton',
                'textButton' => '¡Comenzar ahora!',
                'side' => 'right',
            ];
        @endphp

        @contain_text_image_T1( $parameters )

        @endcontain_text_image_T1

            {{-- @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landingServSeguros4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">La mejor inversión del año</span>',
                'img' => App::setFilePath('/assets/images/illustrations/others/paymentpages-1 1.png'),
                'text' => 'En Escala tenemos un plan a la medida de tus <br class="desktopElement"> necesidades. Conoce nuestros planes para cada tamaño <br class="desktopElement"> de empresa y número de contactos de marketing.',
                'enableButton' => true,
                'urlButton' =>  App::setTypeUrl().'/pricing',
                'typeButton' => 'primaryButton',
                'textButton' => 'Conoce nuestros planes',
                'side' => 'left',
            ];
        @endphp

        @contain_text_image_T1( $parameters )

        @endcontain_text_image_T1 --}}

                {{-- @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServSeguros5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Conoce cómo hemos ayudado <br class="desktopTabletElement"> a otras compañías aseguradoras</span>',
                    'video' => 'https://www.youtube.com/embed/XUPOcRPXuzA',
                    'text' => '“Todo nuestro equipo trabaja con Escala: ventas, marketing <br class="desktopElement"> y comercial. Nuestro plan de negocios va sobre ruedas. <br class="desktopElement"> Nuestras ventas han crecido en un 300%. Es la mejor <br class="desktopElement"> inversión que hemos hecho”',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'enableAutor' => true,
                    'icon' => App::setFilePath('/assets/images/illustrations/others/NP0xkO_2.png'),
                    'autor' => '<span>Luisa Osorio</span><small>Seguros La Previsora</small>',
                    'side' => 'right',

                ];
            @endphp

            @contain_testimonial_text_video_T1( $parameters )

            @endcontain_testimonial_text_video_T1 --}}


            {{-- <section class="customSection sectionParent landingServSeguros6">



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
                            <span>Inbound marketing para seguros</span>
                        </p>

                        <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                            ¡Descargar ahora!
                        </a>

                    </div>

                </section>


                <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas-inv 3.png') !!}')" class="backgroundPlanets">
                </div>


            </section> --}}


            @php
                $parameters = [
                    'classSection' => 'landingServSeguros7',
                    'title' => 'Atrae leads de calidad <br class="desktopTabletElement"> <span>y convierte más ventas con Escala</span>',
                    'textForm' => 'Pruébalo gratis ahora',
                    'text' => null,
                    'image' => App::setFilePath('/assets/images/person/am/am-dedicado.png'),
                    'side' => 'left',
                ];
            @endphp
            @bannerForms7_T1( $parameters )

            @endbannerForms7_T1



        </div>

    </div>



@endsection








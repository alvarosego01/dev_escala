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
                    'title' => 'Descubre cómo Escala <br class="DT_e">
                                 ayuda a tu empresa <br class="DT_e">
                                 aseguradora a crecer',
                    'text' => null,
                    'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
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
                    'title' => '<span class="blackColor2">Escala es perfecto <br class="D_e"> para tu empresa</span>',
                    'description' => 'Escala ayuda a tu aseguradora a generar más leads de calidad,<br class="DT_e"> optimizar toda la gestión de ventas y fidelizar a tus clientes. <br class="DT_e"> Sabemos que es una industria desafiante, cada vez más <br class="DT_e"> regulada y con un proceso de ventas complejo. Desde Escala te <br class="DT_e"> ayudaremos a optimizar tus resultados con una menor inversión <br class="DT_e"> de tiempo y dinero.',
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
                    'urlButton' =>  '#',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'titlePrincipal' => '<span class="blackColor2">¿Cómo te impulsamos a crecer?</span>',
                    'elements' => [
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="DT_e"> desde Facebook</span>
                            ',
                            'text' => '
                            Entendemos que las empresas aseguradoras necesitan dar a conocer <br class="D_e"> múltiples servicios  y generar tráfico a sus landing pages. Con Escala <br class="D_e"> podrás crear, administrar y publicar campañas de anuncios digitales, sin <br class="D_e"> salir de nuestra plataforma. Segmentándolas por intereses como: salud, <br class="D_e"> vida, auto y seguros de hogar, entre otros.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Date a conocer con <br class="DT_e"> landing pages optimizadas',
                            'text' => 'Genera diferentes landing pages según tu oferta de servicios,<br class="D_e"> sin programar o diseñar. Tu equipo de marketing podrá crear y <br class="D_e"> publicar landing pages optimizadas y personalizadas en pocos <br class="D_e"> minutos.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-16 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">No pierdas <br class="DT_e"> ningún dato </span>',
                            'text' => 'Ahora podrás tener mejor control de los datos de tus leads. Nuestras <br class="D_e"> landing pages tienen formularios integrados que te garantizan guardar <br class="D_e"> automáticamente en tu CRM toda la información de tus visitantes.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Organiza y gestiona <br class="DT_e"> tu base de datos</span>',
                            'text' => 'Sabemos que la adquisición de un seguro implica un proceso <br class="D_e"> complejo con varios pasos. Optimiza el seguimiento de cada <br class="D_e"> cliente y genera más ventas con el CRM de Escala.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_3.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Nutre la relación <br class="DT_e"> con tus leads y clientes
                                <br class="D_e">
                                <br class="D_e">
                                </span>
                            ',
                            'text' => 'Crea y automatiza efectivas campañas de email marketing para generar <br class="D_e"> confianza entre tus leads y reforzar la lealtad de tus clientes. Envía emails <br class="D_e"> masivos para: Presentar nuevos servicios, reforzar las ventajas de tu <br class="D_e"> empresa aseguradora, mantenerlos informados sobre las novedades.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Mide y optimiza <br class="DT_e"> tus resultados <br class="DT_e"> con analíticas relevantes</span>',
                            'text' => 'Ten visibilidad con dashboards amigables de las métricas que <br class="D_e"> realmente importan para entender qué funciona y qué puede <br class="D_e"> optimizar tu equipo para mejorar tus resultados en marketing <br class="D_e"> digital.',
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
                'title' => '¿Escala tiene todo <br class="DT_e"> lo que mi aseguradora necesita?',
                'img' => App::setFilePath('/assets/images/illustrations/otto/seguros-5 1.png'),
                'text' => 'No importa el tamaño de tu empresa. Empodera a tus equipos: <br class="D_e"> comercial, ventas y marketing con todas las herramientas digitales <br class="D_e"> en un solo lugar. Es momento de acelerar el crecimiento de tu negocio.',
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
                'classSection' => 'landingServSeguros4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">La mejor inversión del año</span>',
                'img' => App::setFilePath('/assets/images/illustrations/others/paymentpages-1 1.png'),
                'text' => 'En Escala tenemos un plan a la medida de tus <br class="D_e"> necesidades. Conoce nuestros planes para cada tamaño <br class="D_e"> de empresa y número de contactos de marketing.',
                'enableButton' => true,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Recibe un demo',
                'side' => 'left',
            ];
        @endphp

        @contain_text_image_T1( $parameters )

        @endcontain_text_image_T1

                {{-- @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServSeguros5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Conoce cómo hemos ayudado <br class="DT_e"> a otras compañías aseguradoras</span>',
                    'video' => 'https://www.youtube.com/embed/XUPOcRPXuzA',
                    'text' => '“Todo nuestro equipo trabaja con Escala: ventas, marketing <br class="D_e"> y comercial. Nuestro plan de negocios va sobre ruedas. <br class="D_e"> Nuestras ventas han crecido en un 300%. Es la mejor <br class="D_e"> inversión que hemos hecho”',
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
                    'classSection' => 'landingServSeguros7',
                    'title' => 'Atrae leads de calidad y convierte <br class="DT_e"> más ventas con Escala',
                    'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
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








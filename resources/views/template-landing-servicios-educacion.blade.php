{{--
     Template Name: [B] Landing - Servicios - Educación
    --}}


@extends('layouts.app')

@section('content')

    <div id="landing-servicios-educacion-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingServEducacion0',
                    'title' => '<span>
                        Atrae y convierte <br class="D_e"> más<br class="MT_e">
                    </span> estudiantes <br class="D_e"> con Escala
                    ',
                    'text' => null,
                    'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => true,
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/educacion.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1

            @php
            $parameters = [
                'type' => 'backgroundColor',
                'backgroundImageFile' => null,
                'classSection' => 'landingServEducacion1',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">
                    Descubre cómo Escala ayuda a las <br class="D_e"> universidades, colegios e institutos <br class="D_e"> de formación
                    </span>',
                'img' => App::setFilePath('/assets/images/illustrations/others/01_CRM 1.png'),
                'text' => 'Conoce Escala, la plataforma más fácil de usar con todas las <br class="D_e"> herramientas de marketing digital y ventas para que puedas:
                <br class="space">
                <ul>
                    <li>Captar mayor cantidad de estudiantes</li>
                    <li>Ofrecerles los cursos según sus áreas de interés</li>
                    <li>Fidelizarlos como egresados de tu institución</li>
                </ul>',
                'enableButton' => false,
                'urlButton' => null,
                'typeButton' => null,
                'textButton' => null,
                'side' => 'right',
            ];
        @endphp

        @contain_text_image_T1( $parameters )
        @endcontain_text_image_T1


            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServEducacion2',
                    'enableTitle' => true,
                    'enableButton' => true,
                    'urlButton' =>  '#',
                    'textButton' => 'Conocer más',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022 openPopUpButton popup-general-demo-2022',
                    'titlePrincipal' => 'Encuentra todas las herramientas <br class="D_e"> en un solo lugar',
                    'elements' => [
                        [
                            'title' => '<span class="greenBlueColor">Atrae más estudiantes <br class="space"> con anuncios de Facebook</span>',
                            'text' => 'Crea, administra y publica campañas de anuncios digitales,<br class="D_e"> sin salir de nuestra plataforma.
                            <br class="space"><br class="space">
                            Empodera a tu equipo de growth marketing para atraer más <br class="D_e"> estudiantes con campañas de retargeting segmentadas por <br class="D_e"> intereses de cursos o carreras.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">
                                Da a conocer tus cursos <br class="space"> y carreras con landing <br class="space"> pages optimizadas
                                </span>',
                            'text' => 'Genera diferentes landing pages según tu oferta de cursos o <br class="D_e"> carreras, sin programar o diseñar. Solo debes elegir entre <br class="D_e"> cientos de plantillas ya prediseñadas, personalizarlas y <br class="D_e"> publicarlas en un solo clic en minutos.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/Group 1910.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">No pierdas ningún <br class="space"> dato de los alumnos</span>',
                            'text' => 'Nuestras landing pages tienen formularios integrados.<br class="D_e"> Cuando tus visitantes registran toda su información en ellos,<br class="D_e"> queda guardada automáticamente en tu CRM de Escala. Así <br class="D_e"> podrás tener mejor control de los datos de tus alumnos.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Organiza y gestiona <br class="space"> tu base de datos</span>',
                            'text' => 'Optimiza el seguimiento de cada alumno con el CRM de Escala <br class="D_e"> que simplifica toda tu gestión de ventas. Crea actividades y <br class="D_e"> tareas para tu equipo de ventas, mantén comunicación con <br class="D_e"> leads hipersegmentados según sus áreas de interés y ofrece <br class="D_e"> nuevos cursos o carreras.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_3.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Nutre la relación con <br class="space"> tus alumnos y egresados</span>',
                            'text' => 'Crea y automatiza efectivas campañas de email marketing para <br class="D_e"> generar confianza entre tus alumnos y reforzar la lealtad de tus <br class="D_e"> egresados. Envía emails masivos en el momento adecuado para:
                        <br class="space"><br class="space">
                        <ul>
                            <li>Presentar nuevos cursos y carreras</li>
                            <li>Informar programas para egresados</li>
                            <li>Mantenerlos al día sobre las novedades</li>
                        </ul>',
                        'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Mide y optimiza <br class="space"> tus resultados <br class="space"> con analíticas relevantes
                            </span>',
                            'text' => 'Ten visibilidad sobre las métricas que realmente importan para <br class="D_e"> entender qué funciona y qué puede mejorar tu equipo para <br class="D_e"> optimizar tu marketing digital. Cuenta con tableros amigables que <br class="D_e"> miden el rendimiento de ads, landing pages y campañas de emails.',
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
                'classSection' => 'landingServEducacion3',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">
                    ¿Escala tiene todo lo <br class="D_e"> que mi institución necesita?
                    </span>',
                'img' => App::setFilePath('/assets/images/illustrations/otto/Otto_CRM-01.png'),
                'text' => 'En Escala tienes todas las herramientas de marketing digital y ventas <br class="D_e"> en un solo lugar. Capta mayor cantidad de alumnos, haz seguimiento <br class="D_e"> de su relación con tu institución, fideliza a tus estudiantes egresados, <br class="D_e"> mantén una comunicación constante con todos tus stakeholders.',
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
                'classSection' => 'landingServEducacion4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">Un plan hecho a la medida <br class="D_e"> de tu institución</span>',
                'img' => App::setFilePath('/assets/images/illustrations/others/paymentpages-1 1.png'),
                'text' => 'En Escala tenemos un plan a la medida de tus necesidades.<br class="D_e"> Conoce nuestros planes para cada tamaño de institución <br class="D_e"> académica y número de contactos de marketing. Optimiza tu <br class="D_e"> inversión en ventas y marketing digital.',
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
                    'classSection' => 'landingServEducacion5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Nuestros resultados hablan <br class="D_e"> por si mismos</span>',
                    'video' => 'https://www.youtube.com/embed/XUPOcRPXuzA',
                    'text' => '“Tenemos toda la visibilidad de nuestros alumnos y posibles estudiantes <br class="D_e"> en un solo lugar. Hacemos efectivas campañas de email marketing para <br class="D_e"> mantenernos en contacto con padres, alumnos y egresados”',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'enableAutor' => true,
                    'autor' => '<span>Saul Better</span><small>Universidad Católica</small>',
                    'side' => 'right',
                ];

            @endphp

            @contain_testimonial_text_video_T1( $parameters )

            @endcontain_testimonial_text_video_T1 --}}


            {{-- <section class="customSection sectionParent landingServEducacion6">



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

                        <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022 openPopUpButton popup-general-demo-2022">
                            ¡Descargar ahora!
                        </a>

                    </div>

                </section>


                <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas-inv 3.png') !!}')" class="backgroundPlanets">
                </div>


            </section> --}}

            @php
            $parameters = [
                'classSection' => 'landingServEducacion7',
                'title' => '
                <span class="greenBlueColor">
                    Atrae más alumnos <br class="D_e"> y haz crecer tu institución <br class="D_e"> con Escala
                </span>',
                'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
                'text' => null,
                'image' => null,
                'side' => 'left',
            ];
        @endphp
        @bannerForms7_T1( $parameters )

        @endbannerForms7_T1






        </div>

    </div>



@endsection

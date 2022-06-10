{{-- Template Name: [B] Landing - Servicios - Salud --}}


@extends('layouts.app')

@section('content')

    <div id="landing-servicios-salud-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingServSalud0',
                    'title' => '<span class="greenBlueColor">
                        ¡Genera más <br class="desktopElement"> pacientes!
                    </span>
                    <p>
                        e incrementa tu demanda de <br class="desktopElement"> servicios de salud con Escala
                    </p>',
                    'text' => null,
                    'textForm' => 'Comienza ahora',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => true,
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/Doctor_Servicios_Salud.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1


            @php
                $parameters = [
                    'classSection' => 'landingServSalud1 func',
                    'description' => 'En <strong>Escala</strong> estamos para ayudarte a ofrecer todos tus <br class="desktopElement"> servicios de salud, generando más leads de calidad. Todas <br class="desktopElement"> las herramientas de marketing digital y ventas en un solo <br class="desktopElement"> lugar para que llegues con mayor efectividad a tus pacientes <br class="desktopElement"> quienes necesitan una solución de bienestar integral.',
                    'byAm' => null,
                    'team' => null,
                    'image' => App::setFilePath('/assets/images/illustrations/otto/otto_serv_salud.png'),
                ];
            @endphp

            @contain_am_T1( $parameters )
            @endcontain_am_T1



            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServSalud2',
                    'enableTitle' => true,
                    'enableButton' => true,
                    'urlButton' =>  '#',
                    'textButton' => 'Conocer más',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
                    'titlePrincipal' => '<span class="greenBlueColor">Con Escala</span> crece sin límites',
                    'elements' => [
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="space"> desde Facebook</span>',
                            'text' => 'En Escala puedes crear, administrar y publicar campañas de anuncios <br class="desktopElement"> digitales, sin salir de nuestra plataforma, atrayendo más visitantes y <br class="desktopElement"> pacientes a tus páginas.
                             <br class="space"><br class="space">
                            Genera tus campañas de Facebook con la audiencia y el presupuesto <br class="desktopElement"> ideal, sin necesidad de contratar a un profesional.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">
                                Da a conocer tus <br class="space"> servicios de salud <br class="space"> y genera leads calificados
                                </span>',
                            'text' => 'Haz que todos conozcan tus servicios de salud y capta la <br class="desktopElement"> información de contacto de tus posibles pacientes e <br class="desktopElement"> interesados con landing pages optimizadas.
                            <br class="space">
                            <br class="space">
                             Elige una de nuestras plantillas, personalízala y publícala con <br class="desktopElement"> un clic, sin programar o diseñar.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-16 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">
                            No pierdas ningún <br class="desktopElement"> dato de tus pacientes <br class="desktopElement"> potenciales
                            </span>
                            ',
                            'text' => 'Nuestras landing pages tienen formularios integrados, lo que <br class="desktopElement"> te ayudará a registrar toda la información de contacto de tus <br class="desktopElement"> futuros pacientes, guardándola automáticamente en el CRM de <br class="desktopElement"> Escala. Así podrás tener mejor control de sus datos, sin perder <br class="desktopElement"> ninguna información.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Organiza y gestiona <br class="space"> tu base de datos</span>',
                            'text' => 'En Escala tenemos el CRM más fácil de usar para que tú mismo <br class="desktopElement"> puedas hacerle seguimiento a cada posible paciente o usuario <br class="desktopElement"> hasta generar la preferencia de tus servicios. Crea actividades, <br class="desktopElement"> tareas y recordatorios para tu equipo de trabajo. Clasifica a tus <br class="desktopElement"> pacientes según sus necesidades y mantén comunicación <br class="desktopElement"> constante con ellos.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_3.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">
                                Nutre la relación <br class="desktopElement"> a largo plazo
                                </span>',
                            'text' => 'Crea y automatiza efectivas campañas de email marketing para generar <br class="desktopElement"> confianza entre tus pacientes actuales, posibles pacientes y reforzar la <br class="desktopElement"> lealtad hacia tus soluciones integrales. Envía emails masivos, en el <br class="desktopElement"> momento adecuado para:
                        <br class="space"><br class="space">
                        <ul>
                            <li>Presentar nuevos servicios</li>
                            <li>Reforzar las razones de la elección de tus servicios de salud</li>
                            <li>Mantenerlos informados sobre tips de cuidados de la salud y bienestar</li>
                        </ul>',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-12 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Mide y optimiza <br class="space"> tus resultados <br class="space"> con analíticas relevantes
                            </span>',
                            'text' => 'Ten visibilidad sobre las métricas que realmente importan para <br class="desktopElement"> entender qué funciona y qué puede mejorar tu marketing digital.<br class="desktopElement"> Cuenta con tableros amigables mide el rendimiento de ads, landing <br class="desktopElement"> pages y campañas de emails marketing.',
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
                'classSection' => 'landingServSalud3',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '¿Escala tiene todo lo que <br class="desktopTabletElement"> mi servicio de salud necesita?',
                'img' => App::setFilePath('/assets/images/illustrations/otto/seguros-5 1.png'),
                'text' => 'No importa el tamaño de tu servicio de salud, empodera tu generación <br class="desktopElement"> de demanda, la capacidad de afianzar relaciones con tus pacientes y la <br class="desktopElement"> posibilidad de seguir brindándoles servicios customizados.',
                'enableButton' => false,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
                'textButton' => 'Hablar con un asesor',
                'side' => 'right',
            ];
        @endphp

        @contain_text_image_T1( $parameters )

        @endcontain_text_image_T1

                @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landingServSalud4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">Un plan hecho a tu medida</span>',
                'img' => App::setFilePath('/assets/images/illustrations/others/paymentpages-1 1.png'),
                'text' => 'Conoce nuestros planes para profesionales de la salud.<br class="desktopElement"> Paga por número de contactos de marketing y ten todas <br class="desktopElement"> las herramientas en una sola plataforma.',
                'enableButton' => true,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
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
                    'classSection' => 'landingServSalud5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Nuestros clientes hablan <br class="space"> de nuestros beneficios</span>',
                    'video' => 'https://www.youtube.com/embed/XUPOcRPXuzA',
                    'text' => '“Desde que contamos con Escala tenemos el control de <br class="desktopElement"> toda la data de nuestros especialistas médicos de toda la <br class="desktopElement"> red y de nuestros pacientes. Es un CRM realmente fácil de <br class="desktopElement"> usar, para nosotros que nunca habíamos tenido una <br class="desktopElement"> plataforma todo en uno”
',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'enableAutor' => true,
                    'autor' => '<span>Angel sitti</span><small>Operaciones Mamotest</small>',
                    'side' => 'right',
                ];
            @endphp

            @contain_testimonial_text_video_T1( $parameters )

            @endcontain_testimonial_text_video_T1


            <section class="customSection sectionParent landingServSalud6">



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

                        <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
                            ¡Descargar ahora!
                        </a>

                    </div>

                </section>


                <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas-inv 3.png') !!}')" class="backgroundPlanets">
                </div>


            </section> --}}

            @php
            $parameters = [
                'classSection' => 'landingServSalud7',
                'title' => '
                Atrae más pacientes y da a conocer tus <br class="desktopTabletElement"> <span>servicios de salud con Escala</span>',
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

{{-- Template Name: [B] Landing - Servicios - Salud --}}


@extends('layouts.app')

@section('content')

    <div id="landing-servicios-salud-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingServSalud0',
                    'title' => '<span class="greenBlueColor">¡Genera<br> más leads!</span><br> e incrementa tus ventas<br class="space"> para tus servicios<br class="space"> de salud con Escala',
                    'text' => null,
                    'textForm' => 'Regístrate ahora',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => true,
                    'overlayImage' => nulls,
                    'image' => App::setFilePath('/assets/images/person/Doctor_Servicios_Salud.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1


            @php
                $parameters = [
                    'classSection' => 'landingServSalud1 func',
                    'description' => 'En Escala estamos para ayudarte a ofrecer todos tus <br class="desktopElement"> servicios de salud, generando más leads de calidad. Todas las <br class="desktopElement"> herramientas de marketing digital y ventas en un solo lugar <br class="desktopElement"> para que llegues con mayor efectividad a tus pacientes <br class="desktopElement"> quienes necesitan una solución de bienestar integral.',
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
                    'urlButton' => '#',
                    'textButton' => 'Conocer más',
                    'typeButton' => 'primaryButton hoverInEffect',
                    'titlePrincipal' => '<span class="greenBlueColor">Con Escala</span> crece sin límites',
                    'elements' => [
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="space"> desde Facebook</span>',
                            'text' => 'En Escala puedes crear, administrar y publicar campañas de anuncios <br class="desktopElement"> digitales, sin salir de nuestra plataforma, atrayendo más visitantes y <br class="desktopElement"> pacientes a tus páginas.
                                       <br class="space"><br class="space">
                                       Genera tus campañas de Facebook con la audiencia y el presupuesto <br class="desktopElement"> ideal, sin necesidad de contratar un profesional. ',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="space"> desde Facebook</span>',
                            'text' => 'En Escala puedes crear, administrar y publicar campañas de anuncios <br class="desktopElement"> digitales, sin salir de nuestra plataforma, atrayendo más visitantes y <br class="desktopElement"> pacientes a tus páginas.
                                       <br class="space"><br class="space">
                                       Genera tus campañas de Facebook con la audiencia y el presupuesto <br class="desktopElement"> ideal, sin necesidad de contratar un profesional. ',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="space"> desde Facebook</span>',
                            'text' => 'En Escala puedes crear, administrar y publicar campañas de anuncios <br class="desktopElement"> digitales, sin salir de nuestra plataforma, atrayendo más visitantes y <br class="desktopElement"> pacientes a tus páginas.
                                       <br class="space"><br class="space">
                                       Genera tus campañas de Facebook con la audiencia y el presupuesto <br class="desktopElement"> ideal, sin necesidad de contratar un profesional. ',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="space"> desde Facebook</span>',
                            'text' => 'En Escala puedes crear, administrar y publicar campañas de anuncios <br class="desktopElement"> digitales, sin salir de nuestra plataforma, atrayendo más visitantes y <br class="desktopElement"> pacientes a tus páginas.
                                       <br class="space"><br class="space">
                                       Genera tus campañas de Facebook con la audiencia y el presupuesto <br class="desktopElement"> ideal, sin necesidad de contratar un profesional. ',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="space"> desde Facebook</span>',
                            'text' => 'En Escala puedes crear, administrar y publicar campañas de anuncios <br class="desktopElement"> digitales, sin salir de nuestra plataforma, atrayendo más visitantes y <br class="desktopElement"> pacientes a tus páginas.
                                       <br class="space"><br class="space">
                                       Genera tus campañas de Facebook con la audiencia y el presupuesto <br class="desktopElement"> ideal, sin necesidad de contratar un profesional. ',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="space"> desde Facebook</span>',
                            'text' => 'En Escala puedes crear, administrar y publicar campañas de anuncios <br class="desktopElement"> digitales, sin salir de nuestra plataforma, atrayendo más visitantes y <br class="desktopElement"> pacientes a tus páginas.
                                       <br class="space"><br class="space">
                                       Genera tus campañas de Facebook con la audiencia y el presupuesto <br class="desktopElement"> ideal, sin necesidad de contratar un profesional. ',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],

                    ],
                ];
            @endphp
            @contain_info_checkBoxes_T1( $parameters )

            @endcontain_info_checkBoxes_T1



            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServSalud5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
<<<<<<< HEAD
                    'title' => '<span class="greenBlueColor">¿Escala tiene todo<br class="space"> lo que mi seguro necesita?</span>',
                    'img' => App::setFilePath('/assets/images/illustrations/otto/otto_serv_salud_2.png'),
                    'text' => 'No importa el tamaño de su empresa. Empodera a tus equipos:<br class="desktopElement"> comercial, ventas y marketing con todas las herramientas digitales<br class="desktopElement"> en un solo lugar. Es momento de acelerar el crecimiento de tu negocio<br><br> Quiero conocer el plan para empresas de seguro',
                    'enableButton' => true,
                     'urlButton' => '#lead-form',
                     'textButton' => '¡Comenzar ahora!',
=======
                    'title' => '<span class="greenBlueColor">Nuestros clientes hablan <br class="space"> de nuestros beneficios</span>',
                    'video' => 'https://www.youtube.com/embed/XUPOcRPXuzA',
                    'text' => '“Desde que contamos con Escala tenemos el control de <br class="desktopElement"> toda la data de nuestros especialistas médicos de toda la <br class="desktopElement"> red y de nuestros pacientes. Es un CRM realmente fácil de <br class="desktopElement"> usar, para nosotros que nunca habíamos tenido una <br class="desktopElement"> plataforma todo en uno”
',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'enableAutor' => true,
                    'autor' => '<span>Angel sitti</span><small>Operaciones Mamotest</small>',
>>>>>>> alvaro
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
                            Estoy listo para ganar siendo un <br class="space"> afliado de Escala
                        </h2>

                        <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                            Quiero ser afiliado
                        </a>

                    </div>

                </section>


                <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas-inv 3.png') !!}')" class="backgroundPlanets">
                </div>


            </section>


            @php
                $parameters = [
                    'classSection' => 'landingServSalud7',
                    'title' => '¡Regístrate hoy mismo <br class="space"> y gana grandes comisiones!',
                    'textForm' => 'Regístrate ahora',
                    'text' => 'Llena este formulario y envía tu postulación, pronto recibirás <br class="desktopTabletElement"> la respuesta y podrás ser parte del programa.',
                    'image' => App::setFilePath('/assets/images/illustrations/otto/otto-ventas 1.png'),
                ];
            @endphp
            @bannerForms7_T1( $parameters )

            @endbannerForms7_T1



        </div>

    </div>



@endsection

{{--
    Template Name: [B] Landing - Partners
--}}




@extends('layouts.app')

@section('content')

    <div id="landing-Partners-bootstrap">

        <div class="sections">

            {{-- @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingPartners0',
                    'title' => 'Únete al Programa <br class="space"> de Partners de Escala',
                    'text' => 'Comienza a acelerar la rentabilidad <br class="desktopTabletElement"> de tu agencia, garantizando el crecimiento <br class="desktopTabletElement"> del negocio de tus clientes.',
                    'textForm' => 'Quiero ser partner',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => false,
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/illustrations/team/partners_header.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1 --}}
            <div
            class="specialHeader">


            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingPartners0',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => 'Únete al Programa <br class="space"> de Partners de Escala',
                    'img' => App::setFilePath('/assets/images/illustrations/team/partners_header.png'),
                    'text' => 'Comienza a acelerar la rentabilidad de tu <br class="desktopTabletElement"> agencia, garantizando el crecimiento del <br class="desktopTabletElement"> negocio de tus clientes.',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'side' => 'right',
                ];
            @endphp

            @contain_text_image_T1( $parameters )

            @endcontain_text_image_T1



            {{-- <section class="customSection sectionParent landingPartners1 fullWidth">

                <span class="blueLabelSpecial">

                    Ganas el <strong>20%</strong> de comisión sobre el total del pago del cliente

                </span>

            </section> --}}


            @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landingPartners2',
                'enableTitle' => true,
                'titlePrincipal' => '<span class="greenBlueColor"> ¿A quién está dirigido</span> <br class="space"> este programa?',
                'subTitlePrincipal' => null,
                'overlay' => false,
                // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
                'elements' => [
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/partners-1 1.png'),
                        'title' => 'Agencias digitales <br class="space"> y especializadas',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/partners-1 2.png'),
                        'title' => 'Agencias <br class="space"> full service',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/partners-1 3.png'),
                        'title' => 'Consultoría de <br class="space"> marketing y ventas',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/partners-1 4.png'),
                        'title' => 'Estudios <br class="space"> de diseño',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/partners-1 5.png'),
                        'title' => 'Agencias de <br class="space"> medios digitales',
                        'enableButton' => false,
                    ],
                ],
            ];
        @endphp

        @contain_multiple_cards_T2( $parameters )

        @endcontain_multiple_cards_T2

            </div>

        @php
        $parameters = [
            'type' => 'backgroundColor',
            'classSection' => 'landingPartners3',
            'enableTitle' => true,
            'urlButton' =>  App::setTypeUrl().'/zoom-meeting',
            'enableButton' => false,
            'textButton' => null,
            'typeButton' => null,
            'titlePrincipal' => '<span class="greenBlueColor">¿Qué ganas al convertir tu agencia</span> <br class="space"> en parte del programa? ',
            'elements' => [
                [
                    'title' => '<span class="greenBlueColor">Comisiones <br class="space"> irresistibles</span>',
                    'text' => 'Obtén el 20% de comisión sobre los <br class="desktopElement"> planes de Escala adquiridos por tus <br class="desktopElement"> clientes
                    ',
                    'overImage' => App::setFilePath('/assets/images/illustrations/others/elementos_nov2021 1.png'),
                ],
                [
                    'title' => '<span class="greenBlueColor">Asistencia <br class="space"> personalizada</span>',
                    'text' => 'Tu agencia tendrá un Especialista de Customer Success <br class="desktopElement"> asignado a tu cuenta y a tus clientes, recibiendo <br class="desktopElement"> atención prioritaria y soporte 24/7',
                    'overImage' => App::setFilePath('/assets/images/illustrations/team/free-trail_06 1.png'),
                ],
                // [
                //     'title' => '<span class="greenBlueColor">Centraliza el manejo <br class="space"> de todos tus clientes <br class="space"> en un solo lugar</span>',
                //     'text' => 'Lleva el control de los embudos de ventas de tus clientes en un <br class="desktopElement"> solo lugar. Automatiza, mide y optimiza en Escala, garantizando <br class="desktopElement"> la mejor gestión y el seguimiento para tus clientes',
                //     'overImage' => App::setFilePath('/assets/images/illustrations/others/todo-uno 1.png'),
                // ],
                // [
                //     'title' => '<span class="greenBlueColor">Directorio Escala <br class="space"> de Agencias
                //         <br class="desktopElement"><br class="desktopElement">
                //         </span>',
                //     'text' => 'Da a conocer tu agencia y los servicios que prestan a clientes de <br class="desktopElement"> toda hispanoamérica y Estados Unidos, dentro de la comunidad <br class="desktopElement"> de negocio y emprendimiento más grande de la región. El lugar <br class="desktopElement"> ideal para expandir tu oferta de servicios',
                //     'overImage' => App::setFilePath('/assets/images/illustrations/others/directorio 1.png'),
                // ],


            ],
        ];
    @endphp
    @contain_info_checkBoxes_T1( $parameters )

    @endcontain_info_checkBoxes_T1



    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingPartners4',
        'enableTitle' => true,
        'titlePrincipal' => 'También te ofrecemos',
        'overlay' => false,
        'overlayImage' => null,
        'enableButton' => false,
        // 'urlButton' => '#',
        // 'textButton' => 'Quiero ser partner',
        // 'typeButton' => 'primaryButton hoverInEffect',
        'elements' => array(
                    // [
                    //     'img' => App::setFilePath('/assets/images/illustrations/others/free-trail_07 1.png'),
                    //     'title' => '<span class="greenBlueColor">Formación <br class="space"> constante</span>',
                    //     'text' => 'Tu equipo será acompañado siempre para <br class="desktopElement"> conseguir una formación integral en inbound <br class="desktopElement"> marketing y ventas. On-boarding guiado,<br class="desktopElement"> webinars customizados y guías prácticas',
                    //     'enableButton' => false,
                    //     // 'urlButton' => '#lead-form',
                    //     // 'textButton' => '¡Asombroso! Adiós integraciones',
                    // ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/blog 1.png'),
                        'title' => '<span class="greenBlueColor">Crear contenido para el blog</span>',
                        'text' => 'Convierte a tu agencia en un referente de creación  de contenido <br class="desktopElement"> especializado en marketing digital y ventas, aportando tus <br class="desktopElement"> conocimientos en artículos dentro del Blog de Escala',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/whitelabel 1.png'),
                        'title' => '<span class="greenBlueColor">Material promocional</span>',
                        'text' => 'En Escala dispones de material para promocionar nuestra <br class="desktopElement"> plataforma: presentación Escala y pdf´s de funcionalidades para <br class="desktopElement"> que tus clientes puedan ver todo lo que pueden lograr <br class="desktopElement"> acelerando sus ventas.',
                        'enableButton' => false,
                ]



        )

    ];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1


<section class="customSection sectionParent extraText4">

    <div class="section-row">

          <section class="innerSectionElement">

            <h2 class="primaryTitle whiteColor">
              <span class="greenBlueColor">Para mayor informacion escríbenos a</span> <span class="orangeColor">agencias@escala.com</span>
            </h2>

            {{-- <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
              Comenzar ahora
            </a> --}}


          </section>

    </div>


  </section>



@php
$parameters = [
    'type' => 'backgroundImage',
    'backgroundImageFile' => App::setFilePath('/assets/images/backgrounds/degradeDarkBlue.png'),
    'overlay' => true,
    'overlayImage' => App::setFilePath('/assets/images/overlays/2021.png'),
    'classSection' => 'landingPartners5',
    'enableTitle' => false,
    'titlePrincipal' => null,
    'subTitlePrincipal' => null,
    'title' => null,
    'img' => App::setFilePath('/assets/images/person/person_banner3.png'),
    'text' => '“Son muchas herramientas integradas en un solo sitio, una herramienta muy sencilla de utilizar y le da mucho beneficio al cliente. Nunca me habían atendido de esta manera en ningún tipo de plataforma similar. Primera vez que nos atienden así y estamos enormemente agradecidos. Felicidades porque tienen un equipo de trabajo increíble.”
',
    'enableButton' => false,
    'imageTop' => null,
    'client' => '<strong>Ernesto Valery y Edher Nieves </strong><br class="space">Director Creativo - Huella Studio',
    'clientLogo' => null,
    'side' => 'left',
];
@endphp

@contain_testimonial_T1( $parameters )
@endcontain_testimonial_T1



    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingPartners6',
        'enableTitle' => true,
        'titlePrincipal' => '¿Cómo impulsas el crecimiento <br class="space"> <span class="greenBlueColor">de tus clientes con Escala?</span>',
        'subTitlePrincipal' => 'El crecimiento de tus clientes es la clave para el desarrollo de tu agencia. Por eso, <br class="desktopTabletElement"> Escala es la herramienta ideal para acompañarlos en su camino al éxito.<br class="desktopTabletElement"> Con nuestra plataforma tus clientes podrán:',
        'overlay' => false,
        'overlayImage' => null,
        'enableButton' => false,
        'elements' => array(
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/2022.png'),
                        'title' => null,
                        'text' => 'Simplificar su gestión de ventas <br class="sspace"> <strong>con el CRM más fácil de usar</strong>',
                        'enableButton' => true,
                        'urlButton' => App::setTypeUrl().'/crm-escala',
                        'typeButton' => 'hiperButtonGreenBlue',
                        'textButton' => 'Conocer más'
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landings 1.png'),
                        'title' => null,
                        'text' => 'Crear landing pages optimizadas <br class="space"> <strong>sin programar</strong>',
                        'enableButton' => true,
                        'urlButton' => App::setTypeUrl().'/landing-pages',
                        'typeButton' => 'hiperButtonGreenBlue',
                        'textButton' => 'Conocer más'
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/2023.png'),
                        'title' => null,
                        'text' => 'Crear, administrar y publicar <strong>campañas <br class="space"> de ads digitales,</strong> sin salir de Escala',
                        'enableButton' => true,
                        'urlButton' => App::setTypeUrl().'/anuncios-digitales',
                        'typeButton' => 'hiperButtonGreenBlue',
                        'textButton' => 'Conocer más'
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/emails 1.png'),
                        'title' => null,
                        'text' => 'Enviar <strong>campañas masivas</strong> <br class="space"> de Email Marketing',
                        'enableButton' => true,
                        'urlButton' => App::setTypeUrl().'/email',
                        'typeButton' => 'hiperButtonGreenBlue',
                        'textButton' => 'Conocer más'

                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/automatizan 1.png'),
                        'title' => null,
                        'text' => '<strong>Automatizar</strong> <br class="space"> tareas repetitivas',
                        'enableButton' => true,
                        'urlButton' => App::setTypeUrl().'/automatizacion',
                        'typeButton' => 'hiperButtonGreenBlue',
                        'textButton' => 'Conocer más'
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/dashboard 1.png'),
                        'title' => null,
                        'text' => 'Medir y optimizar mediante <br class="space"> <strong>dashboards amigables</strong>',
                        'enableButton' => true,
                        'urlButton' => App::setTypeUrl().'/analiticas',
                        'typeButton' => 'hiperButtonGreenBlue',
                        'textButton' => 'Conocer más',
                    ]


        )

    ];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1





            {{-- @php
                $parameters = [
                    'classSection' => 'landingPartners7',
                    'title' => '¡Quiero ser una <br class="space"> agencia partner <br class="space"> de Escala!',
                    'textForm' => 'Quiero ser Partner',
                    'text' => null,
                    'image' => App::setFilePath('/assets/images/person/am/andres-partners-2.png'),
                    'side' => 'left'
                ];
            @endphp
            @bannerForms7_T1( $parameters )

            @endbannerForms7_T1
 --}}




 @php
 $parameters = [
     'type' => 'backgroundColor',
     'classSection' => 'landingPartners7',
     'enableTitle' => false,
     'titlePrincipal' => null,
     'subTitlePrincipal' => null,
     'title' => '¡Quiero ser una <br class="space"> agencia partner <br class="space"> de Escala!',
     'img' => App::setFilePath('/assets/images/person/am/andres-partners-2.png'),
     'text' => '<span class="greenBlueColor">Para mayor informacion escríbenos a</span><br class="space"><span class="orangeColor">agencias@escala.com</span>',
     'enableButton' => false,
     // 'urlButton' => '#lead-form',
     // 'textButton' => 'Segmentar ahora',
     'side' => 'right',
 ];
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


        </div>

    </div>



@endsection

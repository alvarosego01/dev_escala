{{--
    Template Name: [B] Landing - Partners
--}}




@extends('layouts.app')

@section('content')

    <div id="landing-Partners-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingPartners0',
                    'title' => 'Únete al Programa <br class="space"> de Partners de Escala',
                    'text' => 'Comienza a acelerar la rentabilidad <br class="desktopTabletElement"> de tu agencia, garantizando el crecimiento <br class="desktopTabletElement"> del negocio de tus clientes.',
                    'textForm' => 'Quiero ser partner',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => true,
                    'overlayImage' => App::setFilePath('/assets/images/overlays/estrellas3.png'),
                    'image' => App::setFilePath('/assets/images/person/am/afiliates_am.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1


            <section class="customSection sectionParent landingPartners1 fullWidth">

                <span class="blueLabelSpecial blue">

                    Ganas el <strong>20%</strong> de comisión sobre el total del pago del cliente

                </span>

            </section>


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
                        'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_1.png'),
                        'title' => 'Agencias digitales <br class="space"> y especializadas',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_2.png'),
                        'title' => 'Agencias <br class="space"> full service',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_3.png'),
                        'title' => 'Consultoría de <br class="space"> marketing y ventas',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_4.png'),
                        'title' => 'Estudios <br class="space"> de diseño',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_4.png'),
                        'title' => 'Agencias de <br class="space"> medios digitales',
                        'enableButton' => false,
                    ],
                ],
            ];
        @endphp

        @contain_multiple_cards_T2( $parameters )

        @endcontain_multiple_cards_T2



        @php
        $parameters = [
            'type' => 'backgroundColor',
            'classSection' => 'landingPartners3',
            'enableTitle' => true,
            'enableButton' => true,
            'urlButton' =>  App::setTypeUrl().'/zoom-meeting',
            'textButton' => 'Conocer más',
            'typeButton' => 'primaryButton hoverInEffect',
            'titlePrincipal' => '<span class="greenBlueColor">¿Qué ganas al convertir tu agencia</span> <br class="space"> en parte del programa? ',
            'elements' => [
                [
                    'title' => '<span class="greenBlueColor">Comisiones <br class="space"> irresistibles</span>',
                    'text' => 'Obten el 20% de comisión <br class="desktopElement"> sobre los planes de Escala <br class="desktopElement"> adquiridos por tu clientes',
                    'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                ],
                [
                    'title' => '<span class="greenBlueColor">Asistencia <br class="space"> personalizada</span>',
                    'text' => 'Tu agencia tendrá un Especialista <br class="desktopElement"> de Customer Success asignado <br class="desktopElement"> a tu cuenta y a tus clientes, recibiendo <br class="desktopElement"> atención prioritaria y soporte 24/7.',
                    'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-16 1.png'),
                ],
                [
                    'title' => '<span class="greenBlueColor">Centraliza el manejo <br class="space"> de todos tus clientes <br class="space"> en un solo lugar</span>',
                    'text' => 'Lleva el control de los embudos de ventas de tus clientes en un <br class="desktopElement"> solo lugar. Automatiza, mide y optimiza en Escala, garantizando <br class="desktopElement"> la la mejor gestión y el seguimiento para tus clientes.',
                    'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                ],
                [
                    'title' => '<span class="greenBlueColor">Directorio Escala <br class="space"> de Agencias</span>',
                    'text' => 'Da a conocer tu agencia y los servicios que prestan a clientes <br class="desktopElement"> de toda hispanoamérica y Estados Unidos, dentro de la <br class="desktopElement"> comunidad de negocio y emprendimiento más grande de la <br class="desktopElement"> región. El lugar ideal para expandir tu oferta de servicios.',
                    'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_3.png'),
                ],


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
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect',
        'elements' => array(
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_1.png'),
                        'title' => '<span class="greenBlueColor">Formación <br class="space"> constante</span>',
                        'text' => 'Tu equipo será acompañado siempre para <br class="desktopElement"> conseguir una formación integral en inbound <br class="desktopElement"> marketing y ventas. On-boarding guiado,<br class="desktopElement"> webinars customizados y guías prácticas.',
                        'enableButton' => false,
                        // 'urlButton' => '#lead-form',
                        // 'textButton' => '¡Asombroso! Adiós integraciones',
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_2.png'),
                        'title' => '<span class="greenBlueColor">Crear contenido <br class="spacee"> para el blog</span>',
                        'text' => 'Convierte a tu agencia en un referente de creación <br class="desktopElement"> de contenido especializado en marketing digital y <br class="desktopElement"> ventas, aportando tus conocimientos en artículo <br class="desktopElement"> dentro del Blog de Escala.',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_5.png'),
                        'title' => '<span class="greenBlueColor">Material <br class="space"> white label</span>',
                        'text' => 'En Escala diseñamos todo el kit de ventas y <br class="desktopElement"> comunicación para que tu agencia solo tenga <br class="desktopElement"> que personalizarlo y comiences a crecer en <br class="desktopElement"> inbound marketing y ventas.',
                        'enableButton' => false,
                ]



        )

    ];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingPartners5',
    'enableTitle' => false,
    'titlePrincipal' => null,
    'subTitlePrincipal' => null,
    'title' => '<span class="greenBlueColor">Te ayudamos a enamorar <br class="space">
a tus referidos</span>',
    'img' => App::setFilePath('/assets/images/illustrations/team/crm_afiliates.png'),
    'text' => '“Desde que mi agencia está con Escala,<br class="desktopElement"> hemos crecido un 40%, nuestros cliente <br class="desktopElement"> están más felices, generando leads y ventas”
',
    'enableButton' => false,
    // 'urlButton' => '#lead-form',
    // 'textButton' => 'Segmentar ahora',
    'side' => 'left',
];
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1



    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingPartners6',
        'enableTitle' => true,
        'titlePrincipal' => '¿Cómo impulsas el crecimiento <br class="space"> <span class="greenBlueColor">de tus clientes con Escala?</span>',
        'subTitlePrincipal' => 'aaaa',
        'overlay' => false,
        'overlayImage' => null,
        'enableButton' => false,

        'elements' => array(
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_1.png'),
                        'title' => '<span class="greenBlueColor">Todo tu equipo</span> <br class="space"> en una sola plataforma',
                        'text' => 'En el CRM de Escala, tu equipo de ventas trabajará de manera integrada cada uno tendrá un rol administrand, editando y programando el día a día de trabajo.',
                        'enableButton' => false,
                        // 'urlButton' => '#lead-form',
                        // 'textButton' => '¡Asombroso! Adiós integraciones',
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_2.png'),
                        'title' => '<span class="greenBlueColor">Formularios inteligentes</span> <br class="space"> guarda tu data automáticamente',
                        'text' => 'Toda la información que registren tus visitantes en nuestros formularios inteligentes será guardada, de manera automática, en tu CRM de Escala. Olvídate de perder datos clave.',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_5.png'),
                        'title' => 'Segmenta <br class="space"> <span class="greenBlueColor">a tus contactos</span>',
                        'text' => 'Te ayudamos a organizar el día a día de tu compañía. A través de tareas, actividades y recordatorios para cada miembro de tu equipo de ventas.',
                        'enableButton' => false,
                ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_1.png'),
                        'title' => '<span class="greenBlueColor">Todo tu equipo</span> <br class="space"> en una sola plataforma',
                        'text' => 'En el CRM de Escala, tu equipo de ventas trabajará de manera integrada cada uno tendrá un rol administrand, editando y programando el día a día de trabajo.',
                        'enableButton' => false,
                        // 'urlButton' => '#lead-form',
                        // 'textButton' => '¡Asombroso! Adiós integraciones',
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_2.png'),
                        'title' => '<span class="greenBlueColor">Formularios inteligentes</span> <br class="space"> guarda tu data automáticamente',
                        'text' => 'Toda la información que registren tus visitantes en nuestros formularios inteligentes será guardada, de manera automática, en tu CRM de Escala. Olvídate de perder datos clave.',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_5.png'),
                        'title' => 'Segmenta <br class="space"> <span class="greenBlueColor">a tus contactos</span>',
                        'text' => 'Te ayudamos a organizar el día a día de tu compañía. A través de tareas, actividades y recordatorios para cada miembro de tu equipo de ventas.',
                        'enableButton' => false,
                    ]


        )

    ];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1





            @php
                $parameters = [
                    'classSection' => 'landingPartners7',
                    'title' => '¡Regístrate hoy mismo <br class="space"> y gana grandes comisiones!',
                    'textForm' => '¡Comienza a ganar comisiones!',
                    'text' => 'Llena este formulario y envía tu postulación, pronto recibirás <br class="desktopTabletElement"> la respuesta y podrás ser parte del programa.',
                    'image' => App::setFilePath('/assets/images/illustrations/otto/otto-ventas 1.png'),
                ];
            @endphp
            @bannerForms7_T1( $parameters )

            @endbannerForms7_T1






        </div>

    </div>



@endsection

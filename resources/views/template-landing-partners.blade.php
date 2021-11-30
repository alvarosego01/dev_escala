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
                    'text' => 'Comienza a acelerar la rentabilidad <br class="desktopTabletElement"> de tu agencia, garantizando el crecimiento del negocio de tus clientes.',
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
                'titlePrincipal' => '<span class="greenBlueColor">¡Que no se te escape un lead!</span> <br class="space"> Con Escala podrás',
                'subTitlePrincipal' => null,
                'overlay' => false,
                // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
                'elements' => [
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_1.png'),
                        'title' => '<span class="grayColorTexts5">Organizar tu <br class="space"> base de datos</span>',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_2.png'),
                        'title' => '<span class="grayColorTexts5">Gestionar tus <br class="space"> procesos de venta</span>',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_3.png'),
                        'title' => '<span class="grayColorTexts5">Guardar información relevante <br class="space"> sobre tus contactos</span>',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_4.png'),
                        'title' => '<span class="grayColorTexts5">Automatizar tareas, <br class="pace"> recordatorios y <br class="space"> comunicaciones</span>',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/escalaventas_03a_4.png'),
                        'title' => '<span class="grayColorTexts5">Automatizar tareas, <br class="pace"> recordatorios y <br class="space"> comunicaciones</span>',
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
                    'title' => '<span class="greenBlueColor">Da a conocer tus<br class="space"> servicios de salud<br class="space"> y genera leads calificados</span>',
                    'text' => 'Haz que todos conozcan tus servicios de salud y capta la<br class="desktopElement"> información de contacto de tus posibles pacientes e<br class="desktopElement"> interesados con landing pages optimizadas.<br class="desktopElement"> Elige una de nuestras plantillas, personalízala y publícala con<br class="desktopElement"> un clic,sin programar o diseñar.',
                    'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-16 1.png'),
                ],
                [
                    'title' => '<span class="greenBlueColor">No pierdas ningún<br class="space"> dato de tus pacientes<br class="space"> potenciales</span>',
                    'text' => 'Nuestras landing pages tienen formularios inteligentes. Cuando<br class="desktopElement"> tus pacientes potenciales registran toda su información en ellos,<br class="desktopElement"> queda guardada automáticamente en tu CRM de Escala. Así<br class="desktopElement"> podrás tener mejor control de sus datos y poder brindarles las<br class="desktopElement"> soluciones de salud que necesita cada uno..',
                    'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                ],
                [
                    'title' => '<span class="greenBlueColor">Organiza y gestiona<br class="space"> tu base de datos</span>',
                    'text' => 'En Escala tenemos el CRM más fácil de usar para que tú mismo<br class="desktopElement"> puedas hacerle seguimiento a cada posible paciente o cliente<br class="desktopElement"> hasta generar la preferencia de tus servicios. Crea actividades,<br class="desktopElement"> tareas y recordatorios, clasifica a tus leads según sus<br class="desktopElement"> necesidades y mantén comunicación constante con ellos.',
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
        'titlePrincipal' => '<span class="greenBlueColor">Un CRM simple y fácil de utilizar</span> <br class="space"> El arma secreta de tu equipo de ventas',
        'overlay' => false,
        'overlayImage' => null,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect',
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
                ]



        )

    ];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingPartners6',
        'enableTitle' => true,
        'titlePrincipal' => '<span class="greenBlueColor">Un CRM simple y fácil de utilizar</span> <br class="space"> El arma secreta de tu equipo de ventas',
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

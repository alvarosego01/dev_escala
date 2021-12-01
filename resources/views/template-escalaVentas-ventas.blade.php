{{--

    Template Name: [B] Escala ventas - Ventas

--}}


@extends('layouts.app')

@section('content')

    <div id="escalaVentas-ventas-bootstrap">

        <div class="sections">


            @php
                $parameters = [
                    'backgroundImageType' => true,
                    'overlay' => true,
                    'classSection' => ' eVentas0',
                    'title' => 'Simplifica tu gestión <br class="space"> de ventas y escala tu negocio',
                    'text' => null,
                    'image' => App::setFilePath('/assets/images/illustrations/others/CRM-screen-1.png'),
                    'textForm' => 'Pruébalo ahora',
                    'overlayImage' => App::setFilePath('/assets/images/overlays/stars_space.png'),
                    'threeCol' => false,
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1


            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'eVentas2',
                    'enableTitle' => true,
                    'titlePrincipal' => '<span class="greenBlueColor">¡Que no se te escape un lead!</span> <br class="space"> Con Escala podrás',
                    'subTitlePrincipal' => 'Escala es la plataforma <span class="greenBlueColor"><strong>todo en uno</strong></span>, diseñada para acelerar <br> el crecimiento de tus ventas y aumentar la productividad de tu equipo. <br> Todas las herramientas que necesitas <span class="greenBlueColor"><strong>en un solo lugar.</strong></span>',
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
                    ],
                ];
            @endphp

            @contain_multiple_cards_T2( $parameters )

            @endcontain_multiple_cards_T2

            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'eVentas3',
                    'enableTitle' => true,
                    'titlePrincipal' => '<span class="greenBlueColor">Un CRM simple y fácil de utilizar</span> <br class="space"> El arma secreta de tu equipo de ventas',
                    'overlay' => true,
                    'overlayImage' => App::setFilePath('/assets/images/overlays/blueWaveOverlay.png'),
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
                                ],
                                [
                                    'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_4.png'),
                                    'title' => 'Hazle seguimiento <br class="space"> <span class="greenBlueColor">a tus resultados</span>',
                                    'text' => 'Ten las métricas que necesitas en tiempo real con dashboards amigables para saber la salud de tu negocio. Cuántas ventas han sido cerradas, cuántas están por concretarse, cuál es el vendedor estrella de tu equipo.',
                                    'enableButton' => false,
                                ],
                                [
                                    'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icon_3.png'),
                                    'title' => '<span class="greenBlueColor">No olvides</span> <br class="space"> tareas',
                                    'text' => 'Te ayudamos a organizar el día a día de tu compañía. A través de tareas, actividades y recordatorios para cada miembro de tu equipo de ventas.',
                                    'enableButton' => false,
                                ],


                    )

                ];
            @endphp

            @contain_5_cards_T1( $parameters )
            @endcontain_5_cards_T1



            <section class="customSection sectionParent eVentas4">
                <div class="section-row">

                  <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/VectorCom2.png') !!}" class="attachment-large size-large" loading="lazy" width="1024" height="998">
                        </div>

                      <p class="primaryText grayColorTexts">
                        “Yo ya había utilizado un CRM y otras plataformas que tienen más o menos la misma esencia. <br> Encontrarme con escala fue importante porque es más completa. <strong>Tienes todo lo que necesitas desde <br> captar el interés de cliente, hacer seguimiento y medir indicadores de desempeño de tu equipo <br> de ventas hasta estandarizar el proceso de la comunicación”</strong>.
                      </p>

                      <div class="testim">

                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/person/chica_1.png') !!}" class="attachment-large size-large" loading="lazy" width="1024" height="998">
                        </div>

                        <div class="info">
                            <h3 class="greenBlueColor">
                                Michell Pelaez
                            </h3>

                            <p class="grayColorTexts">
                                Ejecutiva de Cuentas Corporativas <br class="space">
                                <strong>Infinito Producciones</strong>
                            </p>


                        </div>

                      </div>

                    </div>

                  </section>

                </div>

            </section>





        </div>

    </div>



@endsection




{{-- Template Name: [B] Landing - Afiliados --}}




@extends('layouts.app')

@section('content')

    <div id="landing-Afiliados-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingAfiliados0',
                    'title' => '¡Conviértete en <br class="space"> un afiliado de Escala y <br class="space">
                                    <span class="greenBlueColor">gana grandes comisiones!</span> ',
                    'text' => null,
                    'textForm' => 'Sé un afiliado Escala',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => true,
                    'overlayImage' => App::setFilePath('/assets/images/overlays/estrellas3.png'),
                    'image' => App::setFilePath('/assets/images/person/am/afiliates_am.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1


            <section class="customSection sectionParent landingAfiliados1 fullWidth">
                <span class="blueLabelSpecial blue">

                    Obtén hasta un 30% de comisiones

                </span>

                <div class="section-row">

                    <div class="containElements">


                        <p class="primaryText grayColorTexts">
                            Con cada plan adquirido por tus referidos ganas hasta un 30% de comisiones. Crecen tus <br
                                class="desktopElement"> ingresos pasivos, mientras tu comunidad de negocios incrementa sus ventas con Escala.
                        </p>

                    </div>

                </div>


            </section>


            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingAfiliados2',
                    'enableTitle' => true,
                    'titlePrincipal' => '¿Quiénes pueden ser afiliados de Escala?',
                    'overlay' => false,
                    'overlayImage' => null,
                    'enableButton' => true,
                    'urlButton' => '#',
                    'textButton' => 'Comenzar ahora',
                    'typeButton' => 'primaryButton hoverInEffect',
                    'elements' => [
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/icons-afiliados_1.png'),
                            'title' => '<span class="greenBlueColor">Creadores <br class="space"> de contenidos</span>',
                            'text' => 'Si eres un creador de contenido en <br class="desktopTabletElement"> marketing digital y ventas, y parte de tu <br class="desktopTabletElement"> contenido va a pequeñas y grandes <br class="desktopTabletElement"> empresas que quieren llevar  su negocio al <br class="desktopTabletElement"> mundo digital escalando a gran velocidad, <br class="desktopTabletElement"> tú puedes ser un afiliado de Escala',
                            'enableButton' => false,
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/icons-afiliados_2.png'),
                            'title' => '<span class="greenBlueColor">Influenciadores <br class="spac"> de PYMES</span>',
                            'text' => 'Si eres un conocedor de las plataformas todo en uno <br class="desktopTabletElement"> y tienes una comunidad de PYMES a <br class="desktopTabletElement"> la cual puedes orientar para acelerar el <br class="desktopTabletElement"> crecimiento de sus negocios, eres perfecto <br class="desktopTabletElement"> para convertirte en un afiliado.',
                            'enableButton' => false,
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/icons-afiliados_3.png'),
                            'title' => '<span class="greenBlueColor">Aliados en ventas
                                <br class="desktopElement"><br class="desktopElement">
                                </span>',
                            'text' => 'Si eres un usuario de Escala o un vendedor <br class="desktopTabletElement"> nato y te encanta recomendar para obtener <br class="desktopTabletElement"> ganancias por cada referido. Escala te da una <br class="desktopTabletElement"> gran oportunidad para ganar comisiones <br class="desktopTabletElement"> mensualmente.',
                            'enableButton' => false,
                        ],
                    ],
                ];
            @endphp

            @contain_5_cards_T1( $parameters )
            @endcontain_5_cards_T1

            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingAfiliados3',
                    'enableTitle' => true,
                    'titlePrincipal' => '¿Cómo ser un afiliado Escala?',
                    'subTitlePrincipal' => 'Ser un afiliado de Escala es muy fácil. Regístrate,   promociona y comienza a ganar comisiones.',
                    'overlay' => false,
                    'overlayImage' => null,
                    'enableButton' => true,
                    'urlButton' => '#',
                    'textButton' => 'Regístrarme ahora',
                    'typeButton' => 'primaryButton hoverInEffect',
                    'elements' => [
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/afiliados-steps_1.png'),
                            'title' => '<span class="greenBlueColor">Regístrate</span>',
                            'text' => 'Llena nuestro formulario con tus datos <br class="desktopTabletElement"> y envíanos tu postulación',
                            'enableButton' => false,
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/afiliados-steps_2.png'),
                            'title' => '<span class="greenBlueColor">Promociona</span>',
                            'text' => 'Recomienda Escala a través de tu link <br class="desktopTabletElement"> único de afiliado. <span class="greenBlueColor">Tu link tiene 90 días de cookies para ser utilizado.</span>',
                            'enableButton' => false,
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/afiliados-steps_3.png'),
                            'title' => '<span class="greenBlueColor">Gana comisiones</span>',
                            'text' => 'Gana el 30% de comisión sobre <br class="desktopTabletElement"> el valor del plan comprado por <br class="desktopTabletElement"> tu referido.',
                            'enableButton' => false,
                        ],
                    ],
                ];
            @endphp
            @contain_5_cards_T1( $parameters )
            @endcontain_5_cards_T1




            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingAfiliados4',
                    'enableTitle' => true,
                    'titlePrincipal' => 'Tú decides dónde y cómo cobrar',
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Envíanos tus datos bancarios</span>',
                    'img' => App::setFilePath('/assets/images/illustrations/others/02_CRM 3.png'),
                    'text' => 'Recibirás un email de bienvenida con tu link <br class="desktopTabletElement"> único de afiliado. En ese mismo correo te <br class="desktopTabletElement"> solicitaremos tus datos bancarios para cobrar <br class="desktopTabletElement"> tus comisiones, a través de transferencias <br class="desktopTabletElement"> electrónicas o PayPal',
                    'enableButton' => false,
                    'side' => 'right',
                ];
            @endphp

            @contain_text_image_T1( $parameters )

            @endcontain_text_image_T1

            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingAfiliados5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Elige la forma de pago</span>',
                    'img' => App::setFilePath('/assets/images/illustrations/others/Group 1924.png'),
                    'text' => '<span class="greenBlueColor"><strong>Plan recurrente:</strong></span> <br class="space">
                <strong>Cobra el 30%</strong> de comisión de manera <br class="desktopTabletElement"> recurrente (hasta el primer año) <br class="space"> <br class="space">
                <span class="greenBlueColor"><strong>Comisión Fija:</strong></span> <br class="space">
                <strong>Cobra el 100%</strong> del primer mes o el <br class="desktopTabletElement"> 30% del pago del plan anual
                ',
                    'enableButton' => false,
                    'side' => 'left',
                ];
            @endphp

            @contain_text_image_T1( $parameters )

            @endcontain_text_image_T1

            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingAfiliados6',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Haz efectiva tus comisiones</span>',
                    'img' => App::setFilePath('/assets/images/illustrations/otto/Group.png'),
                    'text' => 'Podrás cobrar 15 días después del <br class="desktopTabletElement"> trimestre de suscripción de tu referido',
                    'enableButton' => false,

                    'side' => 'right',
                ];
            @endphp

            @contain_text_image_T1( $parameters )

            @endcontain_text_image_T1

            <section class="customSection sectionParent landingAfiliados7">

                <div class="section-row">

                    <section class="innerSectionElement">

                        <h2 class="primaryTitle whiteColor">
                            ¿Estás listo para ganar comisiones con Escala?
                        </h2>

                        <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                            ¡Sí, más que listo!
                        </a>


                    </section>

                </div>


            </section>

            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingAfiliados8',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Te ayudamos a enamorar <br class="space">
                a tus referidos</span>',
                    'img' => App::setFilePath('/assets/images/illustrations/team/crm_afiliates.png'),
                    'text' => 'Te damos todo el material de comunicación que necesitas para <br class="desktopTabletElement"> que tus referidos entiendan los grandes beneficios que obtienen <br class="desktopTabletElement"> con Escala. Desde lead magnets como: ebooks, webinars, artículos <br class="desktopTabletElement"> de blog y material white label para promoción.',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'side' => 'left',
                ];
            @endphp

            @contain_text_image_T1( $parameters )

            @endcontain_text_image_T1


            <section class="customSection sectionParent landingAfiliados9">



                <section class="innerSectionElement">

                    <div class="image">

                        <div class="containerImage">

                            <img src="{!! App::setFilePath('/assets/images/illustrations/team/astrorocket1.png') !!}" alt="" loading="lazy">

                        </div>

                    </div>

                    <div class="info">

                        <h2 class="primaryTitle whiteColor">
                            ¡Tus finanzas crecen con <br class="space"> Escala!
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
                    'classSection' => 'landingAfiliados10',
                    'title' => '¡Regístrate hoy mismo <br class="space"> y gana grandes comisiones!',
                    'textForm' => '¡Comienza a ganar comisiones!',
                    'text' => 'Llena este formulario y regístrate en nuestro programa <br class="desktopTabletElement"> de afiliados hoy mismo
                    ',
                    'image' => App::setFilePath('/assets/images/illustrations/otto/otto-ventas 1.png'),
                ];
            @endphp
            @bannerForms7_T1( $parameters )

            @endbannerForms7_T1



        </div>

    </div>



@endsection

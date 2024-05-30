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
                    'titlePrincipal' => '¿Para quién está diseñado el <br class="DT_e"> programa de afiliados de Escala?',
                    'overlay' => false,
                    'overlayImage' => null,
                    'enableButton' => false,
                    // 'urlButton' => '#',
                    // 'textButton' => 'Recibe un demo',
                    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'elements' => [
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/icons-afiliados_1.png'),
                            'title' => '<span class="greenBlueColor">Creadores <br class="space"> de contenidos</span>',
                            'text' => 'Si eres un creador de contenido en <br class="DT_e"> marketing digital y ventas, y parte de tu <br class="DT_e"> contenido va a pequeñas y grandes <br class="DT_e"> empresas que quieren llevar  su negocio al <br class="DT_e"> mundo digital escalando a gran velocidad, <br class="DT_e"> tú puedes ser un afiliado de Escala.',
                            'enableButton' => false,
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/icons-afiliados_2.png'),
                            'title' => '<span class="greenBlueColor">Influenciadores <br class="space"> de PYMES</span>',
                            'text' => 'Si eres un conocedor de las plataformas todo en uno <br class="DT_e"> y tienes una comunidad de PYMES a <br class="DT_e"> la cual puedes orientar para acelerar el <br class="DT_e"> crecimiento de sus negocios, eres perfecto <br class="DT_e"> para convertirte en un afiliado.',
                            'enableButton' => false,
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/icons-afiliados_3.png'),
                            'title' => '<span class="greenBlueColor">Aliados en ventas
                                <br class="desktopElement"><br class="desktopElement">
                                </span>',
                            'text' => 'Si eres un usuario de Escala o un vendedor <br class="DT_e"> nato y te encanta recomendar para obtener <br class="DT_e"> ganancias por cada referido. Escala te da una <br class="DT_e"> gran oportunidad para ganar comisiones <br class="DT_e"> mensualmente.',
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
                    'subTitlePrincipal' => 'Ser un afiliado de Escala es muy fácil, debes: Compartir, convertir y recibir tu comisión.',
                    'overlay' => false,
                    'overlayImage' => null,
                    'enableButton' => false,
                    // 'urlButton' => '#',
                    // 'textButton' => 'Registrarme ahora',
                    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'elements' => [
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/afiliados-steps_1.png'),
                            'title' => '<span class="greenBlueColor">Regístrate</span>',
                            'text' => 'Escríbenos y envíanos tu <br class="DT_e"> postulación',
                            'enableButton' => false,
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/afiliados-steps_2.png'),
                            'title' => '<span class="greenBlueColor">Promociona</span>',
                            'text' => 'Recomienda Escala a través de tu link <br class="DT_e"> único de afiliado. <span class="greenBlueColor">Tu link tiene 90 días de cookies para ser utilizado.</span>',
                            'enableButton' => false,
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/afiliados-steps_3.png'),
                            'title' => '<span class="greenBlueColor">Gana comisiones</span>',
                            'text' => 'Gana el 30% de comisión sobre <br class="DT_e"> el valor del plan comprado por <br class="DT_e"> tu referido.',
                            'enableButton' => false,
                        ],
                    ],
                ];
            @endphp
            @contain_5_cards_T1( $parameters )
            @endcontain_5_cards_T1


            <section class="customSection sectionParent extraText3">

                <div class="section-row">

                      <section class="innerSectionElement">

                        <h2 class="primaryTitle whiteColor">
                          <span class="greenBlueColor">Para mayor informacion escríbenos a</span> <span class="orangeColor">afiliados@escala.com</span>
                        </h2>

                        {{-- <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                          Comenzar ahora
                        </a> --}}


                      </section>

                </div>


              </section>




            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingAfiliados4',
                    'enableTitle' => true,
                    'titlePrincipal' => 'Tú decides dónde y cómo cobrar',
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Envíanos tus datos bancarios</span>',
                    'img' => App::setFilePath('/assets/images/illustrations/others/02_CRM 3.png'),
                    'text' => 'Recibirás un email de bienvenida con tu link <br class="DT_e"> único de afiliado. En ese mismo correo te <br class="DT_e"> solicitaremos tus datos bancarios para que <br class="DT_e"> puedas cobrar tus comisiones, a través de <br class="DT_e"> transferencias electrónicas o PayPal
                    ',
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
                <strong>Cobra el 30%</strong> de comisión de manera <br class="DT_e"> recurrente (hasta el primer año) <br class="space"> <br class="space">
                <span class="greenBlueColor"><strong>Comisión Fija:</strong></span> <br class="space">
                <strong>Cobra el 100%</strong> del primer mes o el <br class="DT_e"> 30% del pago del plan anual
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
                    'text' => 'Podrás cobrar 15 días después del <br class="DT_e"> trimestre de suscripción de tu referido',
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

                        {{-- <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            ¡Sí, más que listo!
                        </a> --}}

                        <p>
                            <span class="greenBlueColor">Para mayor informacion escríbenos a</span> <span class="orangeColor">afiliados@escala.com</span>
                        </p>


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
                    'text' => 'Te damos todo el material de comunicación que necesitas para <br class="DT_e"> que tus referidos entiendan los grandes beneficios que obtienen <br class="DT_e"> con Escala. Tendrás lead magnets como: artículos de blog y PDF´s <br class="DT_e"> explicando cada plan.',
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

                        {{-- <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Quiero ser afiliado
                        </a> --}}

                    </div>

                </section>


                <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas-inv 3.png') !!}')" class="backgroundPlanets">
                </div>


            </section>


            {{-- @php
                $parameters = [
                    'classSection' => 'landingAfiliados10',
                    'title' => '¡Regístrate hoy mismo <br class="space"> y gana grandes comisiones!',
                    'textForm' => '¡Comienza a ganar comisiones!',
                    'text' => 'Llena este formulario y regístrate en nuestro programa <br class="DT_e"> de afiliados hoy mismo
                    ',
                    'image' => App::setFilePath('/assets/images/illustrations/otto/otto-ventas 1.png'),
                ];
            @endphp
            @bannerForms7_T1( $parameters )

            @endbannerForms7_T1 --}}


 @php
 $parameters = [
     'type' => 'backgroundColor',
     'classSection' => 'landingAfiliados10',
     'enableTitle' => false,
     'titlePrincipal' => null,
     'subTitlePrincipal' => null,
     'title' => '¡Regístrate hoy mismo <br class="DT_e"> y gana grandes comisiones!',
     'img' => App::setFilePath('/assets/images/illustrations/otto/otto-ventas 1.png'),
     'text' => 'Escríbenos a <span class="orangeColor">afiliados@escala.com</span> y regístrate en <br class="DT_e"> nuestro programa de afiliados hoy mismo',
     'enableButton' => false,
     // 'urlButton' => '#lead-form',
     // 'textButton' => 'Segmentar ahora',
     'side' => 'left',
 ];
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1




        </div>

    </div>



@endsection

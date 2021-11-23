{{--
    Template Name: [B] Landing - Servicios - Salud
--}}


@extends('layouts.app')

@section('content')

    <div id="landing-servicios-salud-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingServSalud0',
                    'title' => '¡Conviértete en <br class="space"> un afiliado de Escala y <br class="space">
                    <span class="greenBlueColor">gana grandes comisiones!</span> ',
                    'text' => null,
                    'textForm' => 'Regístrate ahora',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => true,
                    'overlayImage' => App::setFilePath('/assets/images/overlays/estrellas3.png'),
                    'image' => App::setFilePath('/assets/images/person/am/afiliates_am.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1


            @php
            $parameters = array(
             'classSection' => 'landingServSalud1 func',
             'description' => 'En Escala estamos para ayudarte a ofrecer todos tus <br class="desktopElement"> servicios de salud, generando más leads de calidad. Todas las <br class="desktopElement"> herramientas de marketing digital y ventas en un solo lugar <br class="desktopElement"> para que llegues con mayor efectividad a tus pacientes <br class="desktopElement"> quienes necesitan una solución de bienestar integral.',
             'byAm' => null,
             'team' => null,
             'image' => App::setFilePath('/assets/images/illustrations/otto/otto_serv_salud.png')
            ) ;
           @endphp

           @contain_am_T1( $parameters )
           @endcontain_am_T1





            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServSalud8',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Te ayudamos a enamorar <br class="space">
                a tus referidos</span>',
                    'img' => App::setFilePath('/assets/images/illustrations/team/crm_afiliates.png'),
                    'text' => 'Te damos todo el material de comunicación que necesitas para <br class="desktopTabletElement"> que tus referidos entiendan los grandes beneficios que obtienen <br class="desktopTabletElement"> con Escala. Desde lead magnets como: ebook, webinar. artículos <br class="desktopTabletElement"> de blog, hasta PDF explicando cada plan.',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'side' => 'left',
                ];
            @endphp

            @contain_text_image_T1( $parameters )

            @endcontain_text_image_T1


            <section class="customSection sectionParent landingServSalud9">



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
                    'classSection' => 'landingServSalud10',
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

{{--
    Template Name: [B] Casos de éxito - Principal
--}}



@extends('layouts.app')

@section('content')


    <div id="caso-exito-principal-bootstrap">

        <div class="sections">


            @php

                $overlayMultiple = '<img src="' . App::setFilePath('/assets/images/overlays/stars_2.png') . '" class="overlayStars"><img src="' . App::setFilePath('/assets/images/overlays/overlay_exito.png') . '" class="overlayBase">';

                $parameters = [
                    'backgroundImageType' => false,
                    'overlay' => false,
                    'classSection' => 'casoExitoPrincipal0',
                    'title' => 'Conoce los casos <br class="space"> de éxito de <span class="blueLightColor10">Escala</span>',
                    'text' => null,
                    'image' => App::setFilePath('/assets/images/illustrations/otto/otto_canon.png'),
                    'textForm' => '¡Comienza ahora!',
                    'overlayImage' => null,
                    'threeCol' => false,
                    'overlayMultiple' => $overlayMultiple,
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1




            @php
                $parameters = [
                    'classSection' => 'casoExitoPrincipal1',
                    'description' => '<span class="greenBlueColor4">“Hemos aumentado la productividad de <br class="space"> nuestra fuerza de ventas en hasta un 70%”</span> <br class="space">
                                                    <strong>Es increíble cómo el CRM de Escala</strong> nos ayuda a planificar <br class="space"> el día a día de contactos con nuestros leads.',
                    'byAm' => null,
                    'team' => null,
                    'image' => App::setFilePath('/assets/images/illustrations/team/fuerza_de_ventas.png'),
                    'button' => '
                                    <a href="#lead-form" class="primaryButton hoverInEffect">
                                      Ver caso de éxito
                                    </a>',
                ];
            @endphp

            @contain_am_T1( $parameters )

            @endcontain_am_T1

            {{-- exito 2 --}}


            @php
            $query = array(
                'post_type' => 'exitocaso',
                'post_status' => 'publish',
                'orderby' => 'rand',
                'posts_per_page' => 4
            );
            $query = Posts::getPosts($query);

            $parameters = [
                "posts" => $query,
                "classSection" => 'casoExitoPrincipal2',
                "enableTitle" => true,
                "titlePrincipal" => 'Estos clientes cuentan con Escala <span class="orangeColor">para hacer crecer sus negocios</span>',
            ]
            @endphp

            @articlesExitoCaso_T1($parameters)

            @endarticlesExitoCaso_T1



            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'casoExitoPrincipal3',
                    'backgroundImageFile' => null,
                    'enableTitle' => false,
                    'img' => App::setFilePath('/assets/images/person/callcenter1.png'),
                    'title' => '<span class="whiteColor">Tu empresa también <br class="space"> <span class="blueLightColor10">puede crecer con Escala</span></span>',
                    'text' => 'Escala es la plataforma todo en uno de marketing digital y ventas <br class="space"> para ayudarte a acelerar el crecimiento de tu negocio. Estamos <br class="space"> aquí para acompañarte en todo tu camino al éxito y apoyarte en <br class="space"> cada momento.',
                    'enableButton' => true,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Hablar con un asesor',
                    'typeButton' => 'primaryButton',
                    'side' => 'right',
                ];
            @endphp

            @contain_text_image_T1( $parameters )

            @endcontain_text_image_T1

            @php
            $query = array(
                'post_type' => 'exitocaso',
                'post_status' => 'publish',
                'orderby' => 'rand',
                'posts_per_page' => 1
            );
            $query = Posts::getPosts($query);

            $parameters = [
                "posts" => $query,
                "classSection" => 'casoExitoPrincipal4',
                "enableTitle" => true,
                "titlePrincipal" => 'Somos la plataforma más completa y fácil de usar, <br class="space"> <span class="orangeColor">lo dicen nuestros clientes</span>',
            ]
            @endphp

            @testimonialExitoCaso_T1( $parameters )

            @endtestimonialExitoCaso_T1




            @php
                $parameters = [
                    'classSection' => 'casoExitoPrincipal5',
                    'title' => '<span class="greenBlueColor">Más de 120 empresas</span> <br class="space"> hispanas nos prefieren',
                    'textForm' => '¡Conoce cómo los ayudamos <br class="space"> a hacer crecer sus negocios!',
                    'text' => null,
                    'image' => App::setFilePath('/assets/images/illustrations/team/empresas.png'),
                ];
            @endphp
            @bannerForms7_T1( $parameters )

            @endbannerForms7_T1




        </div>

    </div>


@endsection

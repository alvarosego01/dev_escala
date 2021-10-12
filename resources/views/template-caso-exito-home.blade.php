{{--

Template Name: [B] Casos de éxito - Principal

--}}



@extends('layouts.app')

@section('content')


    <div id="caso-exito-principal-bootstrap">

        <div class="sections">


            @php

                $overlayMultiple = '<div style="background-image: url('.App::setFilePath('/assets/images/overlays/stars_2.png').')" class="overlayStars"></div><div style="background-image: url('.App::setFilePath('/assets/images/overlays/overlay_exito.png').')" class="overlayBase"></div>';

                $parameters = [
                    'backgroundImageType' => false,
                    'overlay' => false,
                    'classSection' => 'casoExioPrincipal0',
                    'title' => 'Conoce los casos <br class="space"> de éxito de <span class="blueLightColor10">Escala</span>',
                    'text' => null,
                    'image' => App::setFilePath('/assets/images/illustrations/otto/otto_canon.png'),
                    'textForm' => '¡Comienza ahora!',
                    'overlayImage' => null,
                    'threeCol' => false,
                    'overlayMultiple' => $overlayMultiple
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1




            @php
                $parameters = [
                    'classSection' => 'casoExioPrincipal1',
                    'description' => '<span class="e">“Hemos aumentado la productividad de <br class="space"> nuestra fuerza de ventas en hasta un 70%”</span> <br class="space">
                    Es increíble cómo el CRM de Escala nos ayuda a planificar <br> el día a día de contactos con nuestros leads.',
                    'byAm' => null,
                    'team' => null,
                    'image' => App::setFilePath('/assets/images/illustrations/team/fuerza_de_ventas.png'),
                    'button' => '
                    <a href="#lead-form" class="primaryButton hoverInEffect">
                      Probar Escala ahora
                    </a>'
                ];
            @endphp

            @contain_am_T1( $parameters )

            @endcontain_am_T1





        </div>

    </div>


@endsection

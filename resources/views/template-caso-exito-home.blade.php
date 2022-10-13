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
                    'classSection' => 'casoUsoPrincipal0',
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

                $t = ACF_CUSTOM::_getField( 'title_embed_case' );
                $turl = ACF_CUSTOM::_getField( 'url_embed_case' );
                $byAm = ACF_CUSTOM::_getField( 'byAm_embed_case' );
                $team = ACF_CUSTOM::_getField( 'team_embed_case' );

                // $parameters = [
                //     'classSection' => 'casoUsoPrincipal1',
                //     // 'description' => '<span class="greenBlueColor4">“Escala nos ha ayudado a optimizar <br class="space"> la excelencia operacional.”</span>.',
                //     'description' => $t,
                //     'byAm' => $byAm,
                //     'team' => $team,
                //     'image' => App::setFilePath('/assets/images/illustrations/team/fuerza_de_ventas.png'),
                //     'button' => '
                //     <a href="'.$turl.'" class="primaryButton hoverInEffect">
                //         Ver caso de éxito
                //     </a>',
                // ];
            @endphp
{{--
            @contain_am_T1( $parameters )

            @endcontain_am_T1 --}}


            <section class="component-contain-info-am-t1 bg-color customSection sectionParent casoUsoPrincipal1 ">

                <div class="section-row">


                <section class="innerSectionElement sct1">

                    <div class="groupElements row">

                      <div class="info col-md-12 col-lg-7">


                        <div class="containElements">

                          <p class="primaryText grayColorTexts description">
                            {!! $t !!}
                        </p>

                        @if ((isset($byAm) && $byAm != null) || (isset($team) && $team != null ))

                        <div class="personData">

                         @if ((isset($byAm) && $byAm != null))
                         <h2 class="byAm grayColorTexts">
                            <i class="fas fa-caret-right"></i> {!! $byAm !!}
                          </h2>
                          @endif

                          @if ((isset($team) && $team != null ))
                          <h2 class="team grayColorTexts">
                            {!! $team !!}
                          </h2>
                          @endif

                        </div>

                        @endif

                        <a href="{{$turl}}" class="primaryButton hoverInEffect">
                            Ver caso de éxito
                        </a>


                        </div>

                      </div>

                      <div class="image col-md-12 col-lg-5">

                        <div class="containerImage">
                          <img src="{!! App::setFilePath('/assets/images/illustrations/team/fuerza_de_ventas.png') !!}" alt="" loading="lazy">
                        </div>

                      </div>

                    </div>

                  </section>


                </div>


            </section>



            @php
            $query = array(
                'post_type' => 'caso-de-exito',
                'post_status' => 'publish',
                'orderby' => 'desc',
                'posts_per_page' => 3,
            );
            $query = Posts::getPosts($query);

            $parameters = [
                "posts" => $query,
                "classSection" => 'casoUsoPrincipal2',
                "enableTitle" => true,
                "titlePrincipal" => 'Estos clientes cuentan con Escala <span class="orangeColor">para hacer crecer sus negocios</span>',
            ]
            @endphp

            @articlesExitoCaso_T1($parameters)

            @endarticlesExitoCaso_T1



            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'casoUsoPrincipal3',
                    'backgroundImageFile' => null,
                    'enableTitle' => false,
                    'img' => App::setFilePath('/assets/images/person/callcenter1.png'),
                    'title' => '<span class="whiteColor">Tu empresa también <br class="desktopTabletElement"> <span class="blueLightColor10">puede crecer con Escala</span></span>',
                    'text' => 'Escala es la plataforma todo en uno de marketing digital y ventas <br class="desktopTabletElement"> para ayudarte a acelerar el crecimiento de tu negocio. Estamos <br class="desktopTabletElement"> aquí para acompañarte en todo tu camino al éxito y apoyarte en <br class="desktopTabletElement"> cada momento.',
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


            $parameters = [
                "posts" => array(
                    "image" => App::setFilePath('/assets/images/illustrations/team/girl_ce.png'),
                    "text" => 'La herramienta es muy amigable, y permite que la gestión pueda realizarla <br> casi que cualquier persona con conocimientos básicos en plataformas digitales.',
                    "autor" => 'Dayana Palacios',
                    "position" => 'Directora de medios y marketing digital',
                    "logo" => App::setFilePath('/assets/images/illustrations/others/Initiative-logo.png'),
                ),
                "classSection" => 'casoUsoPrincipal4',
                "enableTitle" => true,
                "titlePrincipal" => 'Somos la plataforma más completa y fácil de usar, <br class="desktopTabletElement"> <span class="orangeColor">lo dicen nuestros clientes</span>',
            ]

            @endphp
            @testimonialExitoCaso_T1( $parameters )

            @endtestimonialExitoCaso_T1




            @php
                $parameters = [
                    'classSection' => 'casoUsoPrincipal5',
                    'title' => '<span class="greenBlueColor">¡Los emprendedores</span> <br class="space"> hispanoamericanos nos prefieren!',
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

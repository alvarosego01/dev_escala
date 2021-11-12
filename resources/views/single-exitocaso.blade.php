{{--
    Template Name: [B] Caso de éxito - Single
    Template Post Type: exitocaso
--}}




@extends('layouts.app')

@section('content')


    <div id="exitocaso-single-bootstrap">

        <div class="sections">


            <section
            style="background-image: url('{!! App::setFilePath('/assets/images/backgrounds/degradesingleexito.png') !!}')"
            class="customSection sectionParent casoExitoSingle0">


                <div class="section-row">

                        <div class="groupElements row">

                            <div class="info col-md-12 col-lg-6">

                                <div class="containerImage">

                                    <img src="{{ Posts::getPhoto(get_the_ID()) }}" class="card-img-top" >

                                </div>

                                <h1 class="principalBigTitle">
                                    {!! ACF_CUSTOM::_getField( 'excerpt_single_caso_exito', get_the_ID() ) !!}
                                </h1>

                                <div class="autor">

                                    <div class="containerImage">

                                        @php
                                        $i = ACF_CUSTOM::_getField('personimg_caso_exito', get_the_ID() );
                                        $i = $i['url'];
                                    @endphp

                                        <img src="{{ $i }}" alt="" loading="lazy">


                                    </div>

                                    <p class="autorText">
                                        <strong>{!! ACF_CUSTOM::_getField('person_name_caso_exito', get_the_ID() ) !!}</strong>
                                        <span >
                                            {!! ACF_CUSTOM::_getField('position_caso_exito', get_the_ID() ) !!}
                                        </span>
                                    </p>

                                </div>



                            </div>
                            <div class="image col-md-12 col-lg-6">

                                <div class="containerImage">

                                    @php
                                    $i = ACF_CUSTOM::_getField('header_top_img', get_the_ID() );
                                    $i = $i['url'];
                                @endphp

                                    @if (isset($i) && $i != null)
                                    <img src="{{ $i }}" class="card-img-top" >

                                    @else
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/navesingleexito.png') }}" class="card-img-top" >

                                    @endif



                                </div>
                            </div>

                        </div>


                </div>

                <img src="{!! App::setFilePath('/assets/images/overlays/estrellas_2.png') !!}" class="overlayStars">

            </section>




            <section class="customSection sectionParent casoExitoSingle1">


                <div class="section-row">



                  <section class="innerSectionElement sct1">

                    <div class="row">

                      <div class="content col-md-12 col-lg-8">

                          {!! the_content() !!}
                      </div>

                      <div class="col-md-12 col-lg-4 sidebar">

                        <div class="card">

                            <div class="containerImage">

                                @php
                                $i = ACF_CUSTOM::_getField('right_escala_asist', get_the_ID() );
                                $i = $i['url'];
                            @endphp

                                @if (isset($i) && $i != null)
                                <img src="{{ $i }}" class="card-img-top" >

                                @else
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/icono-11.png') }}" class="card-img-top" >

                                @endif



                            </div>

                            <p class="text">
                                {!! ACF_CUSTOM::_getField( 'about_caso_exito', get_the_ID() ) !!}
                            </p>

                            @php
                                $l = ACF_CUSTOM::_getField( 'colaboradores_caso_exito', get_the_ID() )
                            @endphp
                            @if ($l != null)

                                <span class="detail">
                                    <strong>Colaboradores:</strong> <br class="space"> {{ $l }}
                                </span>

                            @endif
                            @php
                                $l = ACF_CUSTOM::_getField( 'experienciaMKT_caso_exito', get_the_ID() )
                            @endphp
                            @if ($l != null)

                                <span class="detail">
                                    <strong>Experiencia en MKT:</strong> <br class="space"> {{ $l }}
                                </span>

                            @endif
                            @php
                                $l = ACF_CUSTOM::_getField( 'experienciaCMR_caso_exito', get_the_ID() )
                            @endphp
                            @if ($l != null)

                                <span class="detail">
                                    <strong>Experiencia en CMR:</strong> <br class="space"> {{ $l }}
                                </span>

                            @endif
                            @php
                                $l = ACF_CUSTOM::_getField( 'segmento_caso_exito', get_the_ID() )
                            @endphp
                            @if ($l != null)

                                <span class="detail">
                                    <strong>Segmento:</strong> <br class="space"> {{ $l }}
                                </span>

                            @endif

                        </div>

                      </div>

                    </div>
                  </section>


                </div>



        </section>



            @php
                $l = ACF_CUSTOM::_getField('video_caso_exito', get_the_ID() );
            @endphp

            @if ( isset($l) && $l != null )

            <section
            style="background-image: url('{!! App::setFilePath('/assets/images/backgrounds/Mask-Group.png') !!}')"
            class="customSection sectionParent casoExitoSingle2">


            <div class="section-row">

                <div
                class="groupElements">


                <img src="{!! App::setFilePath('/assets/images/backgrounds/pantalla_video.png') !!}" alt="" class="screen">

                <iframe width="420" height="315" src="{{ $l }}">
                    </iframe>


                </div>

            </div>

        </section>

        @endif

            @php
                $query = [
                    'post_type' => 'exitocaso',
                    'post_status' => 'publish',
                    'orderby' => 'rand',
                    'posts_per_page' => 4,
                ];
                $query = Posts::getPosts($query);

                $parameters = [
                    'posts' => $query,
                    'classSection' => 'casoExitoSingle3',
                    'enableTitle' => true,
                    'titlePrincipal' => 'Estos clientes cuentan con Escala <span class="orangeColor">para hacer crecer sus negocios</span>',
                ];
            @endphp

            @articlesExitoCaso_T1($parameters)

            @endarticlesExitoCaso_T1



            @php
                $parameters = [
                    'classSection' => 'casoExitoSingle4',
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

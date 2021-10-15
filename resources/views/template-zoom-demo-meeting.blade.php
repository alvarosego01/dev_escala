{{--
    Template Name: [B] Zoom Demo Meeting
 --}}




@php
$zoomLink = ACF_CUSTOM::_getField('link_zoom');
$agendar = ACF_CUSTOM::_getField('program_date');
@endphp


@if ($zoomLink != null && $zoomLink != '')

    @php

    wp_localize_script(
        '_zoomMeeting.js',
        'dataPHP',
        array(
            'zoomLink' =>  $zoomLink,
        )

    );

    @endphp

    {{-- <script type="text/javascript">

    </script> --}}

@endif



@extends('layouts.app')


@section('content')


    <div id="zoomMeeting-Bootstrap">


        <div class="sections">


            <section class="customSection sectionParent zoomMeetingSection0">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h1 class="principalBigTitle blackColor">

                                Conversa con un asesor Escala <br>
                                <span class="greenBlueColor">
                                    Te orientamos y respondemos a tus preguntas
                                </span>

                            </h1>

                            <div class="hor">


                                <div class="h">
                                    <small class="days">
                                        <strong>De Lunes a Viernes:</strong>
                                    </small>
                                    <small class="times">
                                        8:00am - 10:00pm. <strong>Miami / Chile</strong> <span>|</span> <br /> 7:00am - 9:00pm.
                                        <strong>México / Colombia</strong>
                                    </small>
                                </div>
                                <div class="h">
                                    <small class="days">
                                        <strong>Sábados:</strong>
                                    </small>
                                    <small class="times">
                                        11:00am - 8:00pm. <strong>Miami / Chile</strong> <span>|</span> <br /> 10:00am - 7:00pm.
                                        <strong>México / Colombia</strong>
                                    </small>
                                </div>


                            </div>



                        </div>

                    </section>


                </div>

            </section>

            <section class="customSection sectionParent zoomMeetingSection1">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <div class="row">


                                <div class="parentBox col-md-12 col-lg-6">
                                    <div class="box">


                                        <h3 class="title blackColor2">
                                            Conecta ahora
                                        </h3>
                                        <div class="containerImage">

                                            <img src="{!! App::setFilePath('/assets/images/illustrations/team/asesor.png') !!}" alt="">

                                        </div>
                                        <a id="zoomBegin" target="_blank" href="@php echo $zoomLink @endphp"
                                            class="primaryButton hoverInEffect">
                                            Iniciar Zoom ya
                                        </a>

                                        <small class="colorGrey4">
                                            El Zoom se cargará en unos segundos
                                        </small>

                                    </div>

                                </div>
                                <div class="parentBox col-md-12 col-lg-6">
                                    <div class="box">
                                        <h3 class="title blackColor2">
                                            Agenda luego
                                        </h3>
                                        <div class="containerImage">

                                            <img src="{!! App::setFilePath('/assets/images/illustrations/team/01_CRM.png') !!}" alt="">

                                        </div>
                                        <a class="thinButton hoverSecondaryButton hoverInEffect" href="@php echo $agendar @endphp">
                                            Reservar mi espacio
                                        </a>
                                    </div>

                                </div>


                            </div>



                        </div>
                    </section>

                    <section class="innerSectionElement sct2">

                        <div class="containElements">

                            <div class="subContain">
                                <a class="whatsappButton" target="_blank"
                                    href="https://api.whatsapp.com/send?phone=17863042407">
                                    <img class="whatsapp-icon"
                                        src="https://cdn.escala.com/wp-content/uploads/2021/02/whatsapp-arcos-mountain.svg">
                                    Chat por WhatsApp
                                </a>
                            </div>

                        </div>

                    </section>

                </div>


            </section>


        </div>


        <div class="backgroundOverlay">

            <div class="containerImage">

                <img src="{!! App::setFilePath('/assets/images/overlays/city.png') !!}" alt="">

            </div>

        </div>



    </div>

@endsection

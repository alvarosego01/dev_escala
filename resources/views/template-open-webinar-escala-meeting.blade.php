{{--
    Template Name: [B] Webinar meeting
--}}





@php

if (isset($_GET['zoomid']) && $_GET['zoomid'] != null && $_GET['zoomid'] != '') {
    $zoomid = $_GET['zoomid'];
}

$zoomLink = ACF_CUSTOM::_getField('link_zoom');
@endphp


@if ($zoomLink != null && $zoomLink != '')

<script type="text/javascript">

    let stateCheck = setInterval(() => {

        if (document.readyState === 'complete') {
            clearInterval(stateCheck);
            // document ready
            // alert('¡Hola! El webinar se está cargando, si no inicia dale click al botón para comenzar');

        setTimeout(function() {
            window.open("{{$zoomLink}}", '_blank');
        }, 3500);

        }
    }, 100);

</script>

@endif



@extends('layouts.app')


@section('content')


    <div id="webinarMeeting-Bootstrap">

        <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/astronaut-flying1.png') !!}')" class="overlayFlying">
        </div>

        <div class="sections">


            <section class="customSection sectionParent webinarMeetingSection0">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h1 class="principalBigTitle blackColor">
                                ¿Estás listo para acelerar <br>
                                <span class="greenBlueColor">el crecimiento de negocio?</span>
                            </h1>


                        </div>

                    </section>


                </div>

            </section>
            <section class="customSection sectionParent webinarMeetingSection1">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">


                            @if (isset($zoomid) && $zoomid != null && $zoomid != '')

                                {!! do_shortcode('[zoom_join_via_browser meeting_id="' . $zoomid . '" login_required="no" help="yes" title="Test" disable_countdown="yes" webinar="no"]') !!}

                            @else

                                <div class="containerImage">

                                    <img src="{!! App::setFilePath('/assets/images/logos/Zoom-Simbolo.png') !!}" alt="">

                                </div>

                                <a target="_blank" href="@php
                                    echo $zoomLink;
                                @endphp" class="primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
                                    Ingresar al Webinar ahora
                                </a>

                                <small>
                                    El webinar se está cargando, si no inicia haz click al botón para comenzar
                                </small>


                            @endif



                        </div>
                    </section>


                </div>

            </section>

            <section class="customSection sectionParent webinarMeetingSection2">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">


                            <a target="_blank" href="https://api.whatsapp.com/send?phone=17863042407">
                                ¿Necesitas ayuda?
                                <img class="whatsapp-icon"
                                    src="https://cdn.escala.com/wp-content/uploads/2021/02/whatsapp-arcos-mountain.svg">
                            </a>


                        </div>

                    </section>


                </div>

            </section>



        </div>


        <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas 2.png') !!}')" class="backgroundPlanets">
        </div>




        {{-- <img class="overlayFlying" src="{!! App::setFilePath('/assets/images/overlays/astronaut-flying1.png') !!}" alt=""> --}}



    </div>





@endsection

{{--
  Template Name: [B] Webinar meeting
--}}

<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap" type="text/css" media="all">



@php

    if( isset( $_GET['zoomid'] ) && $_GET['zoomid'] != null && $_GET['zoomid'] != '' ){

        $zoomid = $_GET['zoomid'];

    }



    $zoomLink = get_field('link_zoom');
@endphp





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


                    @if ( isset($zoomid) && $zoomid != null && $zoomid != '' )

                    {!! do_shortcode( '[zoom_join_via_browser meeting_id="'.$zoomid.'" login_required="no" help="yes" title="Test" disable_countdown="yes" webinar="no"]' ) !!}

                    @else

                    <div class="containerImage">

                        <img src="{!! App::setFilePath('/assets/images/logos/Zoom-Simbolo.png') !!}" alt="">

                    </div>

                    <a target="_blank" href="@php
                        echo $zoomLink
                    @endphp" class="primaryButton hoverInEffect">
                        Ingresar al Webinar ahora
                    </a>


                    @endif



                </div>
            </section>


        </div>

    </section>

    <section class="customSection sectionParent webinarMeetingSection2">

        <div class="section-row">

            <section class="innerSectionElement sct1">

                <div class="containElements">


                    <a target="_blank" href="https://api.whatsapp.com/send?phone=17863042407" >
                        ¿Necesitas ayuda?
                        <img class="whatsapp-icon"  src="https://cdn.escala.com/wp-content/uploads/2021/02/whatsapp-arcos-mountain.svg">
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
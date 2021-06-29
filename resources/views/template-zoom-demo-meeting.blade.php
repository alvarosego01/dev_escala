{{--
  Template Name: [B] Zoom Demo Meeting
--}}

<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap" type="text/css" media="all">




@extends('layouts.app')


@section('content')


<div id="zoomMeeting-Bootstrap">

    <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/astronaut-flying1.png') !!}')" class="overlayFlying">
    </div>

  <div class="sections">


    <section class="customSection sectionParent zoomMeetingSection0">

        <div class="section-row">

            <section class="innerSectionElement sct1">

                <div class="containElements">

                    <h1 class="principalBigTitle blackColor">
                        Conversa con un Asesor de escala <br>
                        <span class="greenBlueColor">En un momento estaremos contigo</span>
                      </h1>


                </div>

            </section>


        </div>

    </section>
    <section class="customSection sectionParent zoomMeetingSection1">

        <div class="section-row">

            <section class="innerSectionElement sct1">

                <div class="containElements">


                    <div class="containerImage">

                        <img src="{!! App::setFilePath('/assets/images/logos/Zoom-Simbolo.png') !!}" alt="">

                    </div>

                </div>
            </section>


        </div>

    </section>
    <section class="customSection sectionParent zoomMeetingSection2">

        <div class="section-row">

            <section class="innerSectionElement sct1">

                <div class="containElements">


                    <a class="primaryButton hoverInEffect">
                        Empezar DEMO ahora
                    </a>

                    <div class="setDate">

                        <a class="hiperButtonGray">
                            Agendar para otro momento
                        </a>

                        <div class="containerImage">

                            <img src="{!! App::setFilePath('/assets/images/icons/Vector.png') !!}" alt="">

                        </div>

                    </div>

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
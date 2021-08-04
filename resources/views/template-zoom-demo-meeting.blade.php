{{--
  Template Name: [B] Zoom Demo Meeting
--}}

<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap" type="text/css" media="all">




@php
     $zoomLink = ACF_CUSTOM::_getField('link_zoom');
     $agendar = ACF_CUSTOM::_getField('program_date');
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


<div id="zoomMeeting-Bootstrap">

    <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/astronaut-flying1.png') !!}')" class="overlayFlying">
    </div>

  <div class="sections">


    <section class="customSection sectionParent zoomMeetingSection0">

        <div class="section-row">

            <section class="innerSectionElement sct1">

                <div class="containElements">

                        <h1 class="principalBigTitle blackColor">

                            Conversa con un Asesor Escala <br> <span class="greenBlueColor">Te guiamos a conseguir tus metas</span>

                        </h1>


                </div>

            </section>


        </div>

    </section>
    <section class="customSection sectionParent zoomMeetingSection1">

        <div class="section-row">

            <section class="innerSectionElement sct1">

                <div class="containElements">


                    {{-- @if ( isset($zoomid) && $zoomid != null && $zoomid != '' )

                    {!! do_shortcode( '[zoom_join_via_browser meeting_id="'.$zoomid.'" login_required="no" help="yes" title="Test" disable_countdown="yes" webinar="no"]' ) !!}

                    @else --}}

                    <div class="containerImage">

                        <img src="{!! App::setFilePath('/assets/images/logos/Zoom-Simbolo.png') !!}" alt="">

                    </div>

                    <small>
                    El Zoom se está cargando. Si no se abre en unos segundos, haz clic aquí:
                    </small>

                    <a target="_blank" href="@php
                        echo $zoomLink
                    @endphp" class="primaryButton hoverInEffect">
                        Inicia Zoom ahora
                    </a>



                </div>
            </section>


        </div>

    </section>
    <section class="customSection sectionParent zoomMeetingSection2">

        <div class="section-row">

            <section class="innerSectionElement sct1">

                <div class="containElements">



                    <a target="_blank" href="https://api.whatsapp.com/send?phone=17863042407" >
                        <img class="whatsapp-icon"  src="https://cdn.escala.com/wp-content/uploads/2021/02/whatsapp-arcos-mountain.svg">
                        ¿Necesitas ayuda?
                    </a>



                    <div class="setDate">

                        <a href="@php
                            echo $agendar
                        @endphp" class="hiperButtonGray">
                            Agenda para otro momento
                        </a>

                        <div class="containerImage">

                            <img src="{!! App::setFilePath('/assets/images/icons/Vector2.png') !!}" alt="">

                        </div>

                    </div>

                </div>

            </section>


        </div>

    </section>


</div>


<div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas 2.png') !!}')" class="backgroundPlanets">
</div>







</div>





@endsection
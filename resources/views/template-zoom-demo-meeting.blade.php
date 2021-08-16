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


  <div class="sections">


    <section class="customSection sectionParent zoomMeetingSection0">

        <div class="section-row">

            <section class="innerSectionElement sct1">

                <div class="containElements">

                        <h1 class="principalBigTitle blackColor">

                            Conversa con un asesor Escala <br > <span class="greenBlueColor">Te guiamos a conseguir tus metas</span>

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

                    <div class="contain1">

                        <div class="containerImage">

                            <img src="{!! App::setFilePath('/assets/images/logos/Zoom-Simbolo.png') !!}" alt="">

                        </div>

                        <div class="hor">
                            <small style="margin-bottom: 15px">
                                {{-- <strong style="padding-bottom: 15px">¡Conéctate en zoom ahora! Nuestros asesores están listos para atenderte</strong> --}}
                                <strong style="padding-bottom: 10px">
                                    ¡Conecta con nosotros! Nuestros asesores están listos para apoyarte
                                </strong>
                            </small>

                            <div class="h">
                                <small class="days">
                                    <strong>Lunes a Viernes:</strong>
                                </small>
                                <small class="times">
                                    8:00am - 10:00pm. Miami / Chile <br class="space">
                                    7:00am - 9:00pm. México / Colombia
                                </small>
                            </div>
                            <div class="h">
                                <small class="days">
                                    <strong>Sábado:</strong>
                                </small>
                                <small class="times">
                                    11:00am - 8:00pm. Miami / Chile <br class="space">
                                    10:00am - 7:00pm. México / Colombia
                                </small>
                            </div>


                        </div>

                    </div>

                    <div class="contain2 row">

                        <div class="el1 col-md-12 col-lg-6">

                            <small>
                                El Zoom se está cargando. <br class="space"> Si no se abre en unos segundos, haz clic aquí:
                            </small>

                            <a target="_blank" href="@php echo $zoomLink @endphp" class="primaryButton hoverInEffect">
                                Iniciar Zoom ahora
                            </a>

                        </div>
                        <div class="el2 col-md-12 col-lg-6">

                            <div class="containerImage">

                                <img src="{!! App::setFilePath('/assets/images/icons/Vector2.png') !!}" alt="">

                            </div>

                            <a class="thinButton hoverSecondaryButton hoverInEffect" href="@php echo $agendar @endphp">
                            Agendar para otro momento
                            </a>


                        </div>

                    </div>

                    <div class="contain3">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=17863042407" >
                            <img style="margin-right: 15px;" class="whatsapp-icon"  src="https://cdn.escala.com/wp-content/uploads/2021/02/whatsapp-arcos-mountain.svg">
                            Prefiero chatear
                        </a>
                    </div>


                </div>
            </section>

            <div backco class="astroOverlay">

                <div class="containerImage">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/team/austronaut_jump.png') !!}" alt="">

                </div>


            </div>

        </div>


    </section>




</div>


<div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas 2.png') !!}')" class="backgroundPlanets">
</div>







</div>





@endsection


0412-6821256
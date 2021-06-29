{{--
  Template Name: [B] Webinar home
--}}

<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap" type="text/css" media="all">



{{--  @hasfield('form7')

@field('form7')


@endfield --}}


@hasfield('cf7_redirect') )

@php
// $redirect = @field('form7');
$redirect = get_field('cf7_redirect');

if( get_field('id_webinar') && get_field('id_webinar') != null){

  $redirect = $redirect . '?zoomid=' . get_field('id_webinar');

}

@endphp



<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = $_SERVER['APP_URL'].$redirect;
}, false );
</script>

@endfield


@extends('layouts.app')


@section('content')


<div id="openWebinar-Bootstrap">

  <div class="sections">

    <section id="lead-form" class="customSection sectionParent openWebinarSection0">


        <div class="section-row">

          <section class="innerSectionElement sct1">

            <div class="groupElements row">

              <div class="info col-md-12 col-lg-6">

                <div class="containElements">


                  <h1 class="principalBigTitle blackColor">
                    Ingresar a <br> <span class="greenBlueColor">nuestro webinar</span>
                  </h1>
                  <p class="principalBigText grayColorTexts">
                    Descubre como escala puede ayudarte a <br> hacer crecer tu negocio con un breve <br> tour y consultas
                  </p>

                  <div class="containerImage">
                    <img alt="Genera más leads, clientes y ventas con escala" src="{!! App::setFilePath('/assets/images/person/foto-hombre-laptop-1 2.png') !!}" alt="" loading="lazy">
                  </div>



                </div>


              </div>
              <div class="form7 col-md-12 col-lg-6">

                <div class="containElements">

                  <div class="formatForm">

                    <h4 class="titleFormat blackcolor">¡Ingresa a nuestro Webinar!</h4>


                      {{-- @field('form7') --}}

                      @hasfield('form7')

                      {{-- "@field('form7')" --}}

                      @php
                          $f = get_field('form7');
                      @endphp

                      {!! do_shortcode( ".$f." ) !!}

                      {{-- @else --}}

                      @endfield


                  </div>

                </div>
              </div>


            </div>

          </section>

        </div>

        <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas 2.png') !!}')" class="backgroundPlanets">
        </div>




    </section>

</div>

</div>





@endsection
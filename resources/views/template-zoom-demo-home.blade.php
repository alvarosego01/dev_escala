{{--
  Template Name: [B] Zoom Demo Home
--}}

<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap" type="text/css" media="all">




@extends('layouts.app')


@section('content')






<div id="zoomHome-Bootstrap">

  <div class="sections">


    <section id="lead-form" class="customSection sectionParent zoomHomeSection0">


        <div class="section-row">



          <section class="innerSectionElement sct1">

            <div class="groupElements row">

              <div class="info col-md-12 col-lg-6">

                <div class="containElements">


                  <h1 class="principalBigTitle blackColor">
                    {{-- Recibe un <span class="greenBlueColor">DEMO <br> personalizado</span> --}}
                    Descubre cómo escala puede ayudarte a <br> <span class="greenBlueColor">hacer crecer tu negocio</span>
                  </h1>
                  <p class="principalBigText grayColorTexts">
                    {{-- Descubre como escala puede ayudarte a <br> hacer crecer tu negocio con un breve <br> tour y consultas --}}
                    Conecta con uno de nuestros asesores expertos. <br> Te guiaremos y responderemos tus preguntas
                  </p>

                  <div class="containerImage">
                    <img alt="Genera más leads, clientes y ventas con escala" src="{!! App::setFilePath('/assets/images/person/mujer-laptop_01.png') !!}" alt="" loading="lazy">
                  </div>



                </div>


              </div>
              <div class="form7 col-md-12 col-lg-6">

                <div class="containElements">

                  <div class="formatForm">

                    <h4 class="titleFormat blackcolor">
                      Solicita tu demo
                    </h4>

                    {{-- {!! do_shortcode( '[contact-form-7 id="73" title="Contacto Paso 1"]' ); !!} --}}

                    @php
                    $f = get_field('form7');
                @endphp

                {!! do_shortcode( $f ) !!}


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


{{-- boton - Solicitar ahora --}}


<script>


  jQuery('#formZoomHome').on('slide.bs.carousel', function () {
    jQuery('div#formZoomHome').carousel({
      pause: true,
        interval: false
    });


  })

</script>


@endsection
{{--
  Template Name: [B] Zoom Home - Solicita demo
--}}





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
                    Descubre cómo Escala <br> te ayuda a hacer <br> <span class="greenBlueColor">crecer tu negocio</span>
                  </h1>
                  <p class="principalBigText grayColorTexts">
                    Conecta con uno de nuestros asesores. <br> Te guiamos según tu tipo de empresa, <br> experiencia y necesidades.
                  </p>

                  <div class="containerImage">
                    <img alt="Genera más leads, clientes y ventas con Escala" src="{!! App::setFilePath('/assets/images/person/mujer-laptop_01.png') !!}" alt="" loading="lazy">
                  </div>



                </div>


              </div>
              <div class="form7 col-md-12 col-lg-6">

                <div class="containElements">

                  <div class="formatForm redirectWeb"   redirectWeb="true">

                    <h4 class="titleFormat blackcolor">
                    Solicita demo
                    </h4>

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
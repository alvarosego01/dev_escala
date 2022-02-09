{{--
  Template Name: [B] Webinar home
--}}




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
                    Campañas de email <br> <span class="greenBlueColor">marketing efectivas</span>

                  </h1>
                  {{-- <p class="principalBigText grayColorTexts">
                  </p> --}}

                  <div class="containerImage">
                    <img alt="Genera más leads, clientes y ventas con Escala" src="{!! App::setFilePath('/assets/images/person/am/andres-moreno-webinar.png') !!}" alt="" loading="lazy">
                  </div>



                </div>


              </div>
              <div class="form7 col-md-12 col-lg-6">

                <div class="containElements">

                  <div class="formatForm" id="redirectWeb" redirectWeb="true">

                    <h4 class="titleFormat blackcolor">¡Ingresa a nuestro Webinar!</h4>

                      @php
                          $f = ACF_CUSTOM::_getField('form7');
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





@endsection
{{--
  Template Name: [B] Zoom Demo Home
--}}

@extends('layouts.app')


@section('content')






<div id="zoomHome-Bootstrap">

  <div class="sections">


    <section id="lead-form" class="customSection sectionParent zoomHomeSection0 fullWidth">


      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/Rectangle-1037-1.png')" class="backgroundFull">

        <div class="section-row">



          <section class="innerSectionElement sct1">

            <div class="groupElements row">

              <div class="info col-md-12 col-lg-6">

                <div class="containElements">


                  <h1 class="principalBigTitle blackColor">
                    Recibe un <span class="greenBlueColor">DEMO<br> personalizado</span>
                  </h1>
                  <p class="principalBigText grayColorTexts">
                    Descubre como <strong>escala</strong> puede ayudarte a hacer crecer tu negocio con un breve tour y consultas
                  </p>

                  <div class="containerImage">
                    <img alt="Genera más leads, clientes y ventas con escala" src="http://localhost/escala_web/wp-content/uploads/2021/06/foto-hombre-laptop-1-2.png" alt="" loading="lazy">
                  </div>



                </div>


              </div>
              <div class="form7 col-md-12 col-lg-6">

                <div class="containElements">

                  <div class="formatForm">

                    <h4 class="titleFormat blackcolor">¡Comienza ahora!</h4>

                    {!! do_shortcode( '[contact-form-7 id="73" title="Contacto Paso 1"]' ); !!}

                  </div>

                </div>
              </div>


            </div>

          </section>

        </div>

        <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/Group-1821.svg')" class="backgroundPlanets">
        </div>


        </div>

    </section>

</div>

</div>





@endsection
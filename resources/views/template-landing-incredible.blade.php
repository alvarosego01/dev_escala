
{{--
  Template Name: Landing pages increibles
--}}


@extends('layouts.app')

@section('content')


<div id="landingIncBootstrap">

  <div class="sections">

@php
 $parameters = array(
  'backgroundImageType' => false,
  'classSection' => 'landingPageInc0',
  'title' => '<span class="greenBlueColor">Crea landing pages</span><br>increíbles',
  'text' => null,
  'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0102.png',
  'textForm' => '¡Comienza ahora!',
 ) ;
@endphp

@header_t1( $parameters )

@endheader_t1



<section class="customSection sectionParent landingPageInc1">
  <div class="section-row">

    <section class="innerSectionElement row sct1">

      <div class="containElements">

        <h2 class="primaryTitle blackColor">
          4 pasos para construir exitosas landing pages <span class="orangeColor">en minutos</span>
        </h2>



      </div>

    </section>

    <section class="innerSectionElement row sct2">

      <div class="containElements col-sm-12 col-md-6 col-lg-3">
        <div class="elements">
          <div class="cardElements">
            <div class="loader">
              <div class="containerImage">
                <img src="https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0116.png" alt="" loading="lazy">
              </div>
            </div>
            <h3 class="title orangeColor">
              Elige tu plantilla
            </h3>

            <p class="infoText">
              Elige entre cientos de plantillas pre-diseñadas 100% responsive. Sin necesidad de programar.
            </p>

          </div>
        </div>
      </div>
      <div class="containElements col-sm-12 col-md-6 col-lg-3">
        <div class="elements">
          <div class="cardElements">
            <div class="loader">
              <div class="containerImage">
                <img src="https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0117.png" alt="" loading="lazy">
              </div>
            </div>
            <h3 class="title orangeColor">
              Personaliza
            </h3>

            <p class="infoText">
              Dale tu toque personal y edita fácilmente imágenes, textos, colores, tipografías, etc.
            </p>

          </div>
        </div>
      </div>
      <div class="containElements col-sm-12 col-md-6 col-lg-3">
        <div class="elements">
          <div class="cardElements">
            <div class="loader">
              <div class="containerImage">
                <img src="https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0118.png" alt="" loading="lazy">
              </div>
            </div>
            <h3 class="title orangeColor">
              Publica
            </h3>

            <p class="infoText">
              Con un solo clic publica tu landing page y comienza a recibir visitas de tus clientes.
            </p>

          </div>
        </div>
      </div>
      <div class="containElements col-sm-12 col-md-6 col-lg-3">
        <div class="elements">
          <div class="cardElements">
            <div class="loader">
              <div class="containerImage">
                <img src="https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0119.png" alt="" loading="lazy">
              </div>
            </div>
            <h3 class="title orangeColor">
              Optimiza
            </h3>

            <p class="infoText">
              Analiza y optimiza tus landing pages a través de dashboards sencillos para obtener increíbles resultados.
            </p>

          </div>
        </div>
      </div>




    </section>

  </div>
</section>

<section class="customSection sectionParent landingPageInc2">

  <div class="section-row">

    <div class="containElements">

      <h2 class="primaryTitle whiteText">
        ¡Comienza a crear tu <span class="orangeColor">landing page</span> ahora!
      </h2>

      <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
        ¡Pruébalo ahora!
      </a>


    </div>




  </div>

</section>


  </div>

</div>


@endsection
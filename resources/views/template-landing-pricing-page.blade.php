
{{--
  Template Name: [B] Page - Pricing page
--}}




@extends('layouts.app')

@section('content')

<div id="landing-pricing-page-bootstrap">

  <div class="sections">


@php
$parameters = array(
 'classSection' => 'landingPricingPage0',
 'title' => '<span class="greenBlueColor">Con nuestra plataforma todo en uno,</span> <br class="space"> TENEMOS UN PLAN HECHO A TU MEDIDA <br class="space"> <span class="greenBlueColor">para impulsar el crecimiento de tu negocio</span> ',
 'image' => App::setFilePath('/assets/images/illustrations/team/paginas-rapidas.png'),
) ;
@endphp

@header_small_t2( $parameters )

@endheader_small_t2


<section class="customSection sectionParent landingPricingPage1">

  <div class="section-row">

    <section class="innerSectionElement row sct1">

      <div class="containElements">


        <p class="primaryText grayColorTexts">
          Conoce nuestros planes e invierte según tus necesidades. En cada uno de <br> ellos, ten acceso a todas las funcionalidades de marketing digital y ventas para <br> acelerar el crecimiento de tu negocio con Escala.
        </p>




      </div>

    </section>

  </div>


</section>

<section class="customSection sectionParent landingPricingPage3">

  <div class="section-row">

    <section class="innerSectionElement row sct1">

      <div class="containElements">

        <div class="row">

          <div class="col-md-12 col-lg-6 first">
            <div class="element">
                 <div class="containerImage">

              <img src="{!! App::setFilePath('/assets/images/illustrations/team/asesor_2.png') !!}" alt="" loading="lazy">


            </div>

            <h3 class="secondaryTitle blueColor">
              Servicio
            </h3>


        <p class="primaryText grayColorTexts">
          Atendemos a tus preguntas y necesidades <br> para que aproveches al máximo la plataforma.
        </p>

            <div class="listCustom">
              <h4 class="thirdTitle">
                TODOS LOS PLANES
              </h4>
              <ul>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>
                  <span class="blueColor">
                    Atención por chat
                  </span>
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>
                  <span class="blueColor">
                    Entrenamientos plataforma
                  </span>
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>
                  <span class="blueColor">
                    Soporte técnico
                  </span>
                </li>
              </ul>
            </div>
            <div class="listCustom">
              <h4 class="thirdTitle">
                PLAN PRO / ENTERPRISE
              </h4>
              <ul>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>
                  <span class="blueColor">
                    Especialista en customer success asignado <br>
                    para atención directa
                  </span>
                </li>


              </ul>
            </div>


            </div>
          </div>
          <div class="col-md-12 col-lg-6">
            <div class="element">
                 <div class="containerImage">

              <img src="{!! App::setFilePath('/assets/images/illustrations/others/partenon_1.png') !!}" alt="" loading="lazy">


            </div>



            <h3 class="secondaryTitle blueColor">
              Entrenamiento
            </h3>


        <p class="primaryText grayColorTexts">
          Te apoyamos a hacer crecer tu negocio de manera <br>
          rentable, sostenible y escalable.
        </p>



            <div class="listCustom">
              <h4 class="thirdTitle">
                TODOS LOS PLANES
              </h4>
              <ul>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>
                  <span class="blueColor">
                    Capacitaciones
                  </span>
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>
                  <span class="blueColor">
                    Acompañamiento personalizado
                  </span>
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>
                  <span class="blueColor">
                    Soporte técnico
                  </span>
                </li>
              </ul>
            </div>
            <div class="listCustom">
              <h4 class="thirdTitle">
                PLAN PRO / ENTERPRISE
              </h4>
              <ul>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>
                  <span class="blueColor">
                    Programa de éxito
                  </span>
                </li>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>
                  <span class="blueColor">
                    Workshops personalizados
                  </span>

                </li>


              </ul>
            </div>




            </div>
          </div>


        </div>

      </div>

    </section>

  </div>


</section>

<section class="customSection sectionParent landingPricingPage5">

  <div class="section-row">

    <section class="innerSectionElement row sct1">

      <div class="containElements">

        <div class="row">

          <div class="info col-md-12 col-lg-6">
            <div class="containerImage">

              <img src="{!! App::setFilePath('
              /assets/images/illustrations/others/Vector.png') !!}" alt="" loading="lazy">


            </div>

            <p class="text primaryText grayColorTexts">
              Escala tiene el email builder más amigable que he <br> utilizado en los últimos años, y su equipo está <br> comprometido a mantener la plataforma en constante <br> actualización en el dinámico mundo digital.
            </p>


            <p class="subText primaryText grayColorTexts">
              <span>
                Verónica Bolaños <br>
                <small>Account Manager</small>
              </span>
              <span>
                Publicidad Comercial
              </span>
            </p>


            <a class="hiperButtonGreenBlue" >
              Probar Escala ahora
            </a>



          </div>
          <div class="image col-md-12 col-lg-6">
            <div class="containerImage">

              <img src="{!! App::setFilePath('/assets/images/illustrations/team/astro-precios-sinplata_1.png') !!}" alt="" loading="lazy">

          </div>
          </div>

        </div>


      </div>

    </section>

  </div>

</section>



@php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'landingPricingPage6',
  'backgroundImageFile' => null,
  'enableTitle' => false,
  'img' =>  App::setFilePath('/assets/images/person/am/andres_otto.png'),
  'title' => '<span class="greenBlueColor">En Escala hay un plan</span> <br class="space"> del tamaño de <br class="space"> tus sueños',
  'text' => null,
  'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => 'Prueba Escala ahora',
  'typeButton' => 'primaryButton',
  'side' => 'right',

 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1





  </div>

</div>



@endsection


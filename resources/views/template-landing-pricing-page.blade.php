
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
 'title' => '<span class="greenBlueColor">Con nuestra plataforma todo en uno,</span> <br class="space"> tenemos un plan hecho a tu medida <br class="space"> <span class="greenBlueColor">para impulsar el crecimiento de tu negocio</span> ',
 'image' => App::setFilePath('/assets/images/illustrations/team/paginas-rapidas.png'),
) ;
@endphp

@header_small_t2( $parameters )

@endheader_small_t2

{{--
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


</section> --}}



@php
$parameters = array(
 'classSection' => 'landingPricingPage2',
 'titlePrincipal' => '<span class="blueColor">Conoce los beneficios <br class="mobileSmallElement"> de nuestros planes</span>',
 'subTitlePrincipal' => 'Cada uno de nuestros planes tiene las funcionalidades de <br class="mobileSmallElement"> marketing <br class="desktopTabletElement"> digital y ventas para acelerar el crecimiento de tu <br class="mobileSmallElement"> negocio.<br class="desktopTabletElement">Solo inviertes en lo que necesitas..'
) ;
@endphp

@pricing_card_T1( $parameters )

@endpricing_card_T1



<section class="customSection sectionParent landingPricingPage3">

  <div class="section-row">

    <section class="innerSectionElement row sct1">

      <div class="containElements">

        <div class="row">

          <div class="el col-md-12 col-lg-6 first">
            <div class="element">

            <div class="had">

              <h3 class="secondaryTitle colorDarkGrey3">
                Servicio
              </h3>

            </div>

            <div class="info">


            <div class="referImage containerImage">

              <img src="{!! App::setFilePath('/assets/images/illustrations/team/asesor_2.png') !!}" alt="" loading="lazy">


            </div>

        <p class="primaryText grayColorTexts">
          Atendemos a tus preguntas y necesidades <br class="space"> para que aproveches al máximo la <br class="space"> plataforma.
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
            <br>
            <br>
            <div class="listCustom">
              <h4 class="thirdTitle">
                PLAN PRO / ENTERPRISE
              </h4>
              <ul>
                <li>
                  <i class="fa fa-check" aria-hidden="true"></i>
                  <span class="blueColor">
                    Especialista en customer success asignado <br class="space">
                    para atención directa
                  </span>
                </li>


              </ul>
            </div>

          </div>



          </div>
          </div>
          <div class="el col-md-12 col-lg-6">
            <div class="element">

            <div class="had">
              <h3 class="secondaryTitle colorDarkGrey3">
              Entrenamiento
            </h3>

            </div>

            <div class="info">


            <div class="referImage containerImage">

              <img src="{!! App::setFilePath('/assets/images/illustrations/others/partenon_1.png') !!}" alt="" loading="lazy">

            </div>

        <p class="primaryText grayColorTexts">
          Te apoyamos a hacer crecer tu negocio <br class="space"> de manera rentable, sostenible y escalable.
          <br class="desktopElement">
          <br class="desktopElement">
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
                <li class="desktopElement" style="visibility: hidden">
                  <span><br class="space"></span>
                </li>

              </ul>
            </div>
            <br class="desktopElement">
            <br class="desktopElement">
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

      </div>

    </section>

  </div>


</section>


@php
 $parameters = array(
  'classSection' => 'landingPricingPage4',
 ) ;
@endphp

@pricing_calculator_T1( $parameters )

@endpricing_calculator_T1


<section class="customSection sectionParent landingPricingPage5">

  <div class="section-row">

    <section class="innerSectionElement row sct1">

      <div class="containElements">

        <div class="row">

          <div class="info col-md-12 col-lg-6">
            <div class="containerImage">

              <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector.png') !!}" alt="" loading="lazy">


            </div>

            <p class="text primaryText grayColorTexts">
              Escala tiene el email builder más amigable que he <br class="mobileSmallElement"> utilizado en los <br class="desktopTabletElement"> últimos años, y su equipo está <br class="mobileSmallElement"> comprometido a mantener la <br class="desktopTabletElement"> plataforma en constante <br class="mobileSmallElement"> actualización en el dinámico mundo digital.
            </p>


            <p
            class="subText model1 primaryText grayColorTexts">
              <span>
                Verónica Bolaños <br>
                <small>Account Manager</small>
              </span>
              <span>
                Publicidad Comercial
              </span>
            </p>
            <p
            class="subText model2 primaryText grayColorTexts">

              <span>
                Verónica Bolaños <br class="space">
                Account Manager / Publicidad Comercial
              </span>
            </p>





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
  'img' =>  App::setFilePath('/assets/images/person/am/am_pricing.png'),
  'title' => 'En Escala hay un plan <br class="space"> del tamaño de tus sueños',
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


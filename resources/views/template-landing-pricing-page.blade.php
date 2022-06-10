
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
 'title' => '
 <span >
  Crece con Escala,</span> <br class="space">
  tenemos un plan <br class="space">
  hecho a tu medida
   ',
 'image' => App::setFilePath('/assets/images/person/funnel_chica_escala.png'),
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
 'titlePrincipal' => '<span class="blueColor">
  Conoce los beneficios
  <br class="mobileSmallElement">
  de nuestros planes
  </span>',
 'subTitlePrincipal' => '
  Nuestros planes tienen las funcionalidades de marketing digital y ventas <br class="desktopTabletElement">
  para acelerar el crecimiento de tu negocio. Solo inviertes en lo que necesitas.
 '
) ;
@endphp
@pricing_card_T1( $parameters )
@endpricing_card_T1


<section class="customSection sectionParent landingPricingPage3_2022 desktopElement">

  <div class="section-row">

    <section class="innerSectionElement row sct1">

      <div class="containElements">

        <h2 class="primaryTitle greenBlueColor">
          En Escala lo tienes todo: CRM + Expertos
        </h2>

        <p class="primaryText grayColorTexts">
          No solamente somos una plataforma fácil de usar, somos un equipo de servicio al cliente <br class="desktopTabletElement"> comprometido con el crecimiento de tu negocio.
        </p>


      </div>

    </section>
    <section class="innerSectionElement row sct2">

      <div class="containElements">

        <table class="table">
          <thead>
            <tr>
              <th class="b1" scope="col">Servicio</th>
              <th class="b1" scope="col">Descripción</th>
              <th class="b2" scope="col">Plan Starter</th>
              <th class="n1" scope="col">Plan Pro</th>
            </tr>
          </thead>
          <tbody>

            <tr >
              <td class="beginRow t1" rowspan="8">
                <span>
                  Implementación
                </span>
              </td>
              <td>Gerente de cuenta asignado</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Canales de comunicación</td> --}}
              <td>Sesiones de acompañamiento privadas</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
              <td>Plan personalizado de implementación</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
              <td>Capacitaciones privadas de plataforma para equipo</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
              <td>Análisis de resultados y plan de optimización</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
              <td>Contactos de seguimiento</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
              <td>Configuración de dominios, emails y cuentas publicitarias</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr class="borderB">
              {{-- <th>Complementarios</td> --}}
              <td>Migración de data</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr >
              <td class="beginRow t2" rowspan="5">
                <span>
                  Escala Academy
                  </span>
              </td>
              <td>Capacitaciones grupales de plataforma con casos prácticos</td>
              <td class="ch">
                 <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
              <td>Capacitaciones grupales estratégicas</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
              <td>Librería de tutoriales para cada herramienta</td>
              <td class="ch">
                 <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
              <td>Guías estratégicas de marketing, ventas y fidelización</td>
              <td class="ch">
                 <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr class="borderB">
              {{-- <th>Complementarios</td> --}}
              <td>Webinars grabados con casos prácticos y estrategia</td>
              <td class="ch">
                 <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
                <td class="beginRow t1" rowspan="3">
                  <span>
                    Canales de comunicación
                    </span>
                    </td>
              <td>Email de servicio</td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
             </td>
             <td class="ch">
               <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
             </td>
            </tr>
            <tr >

              <td>Chat en plataforma</td>
             <td></td>
             <td class="ch">
              <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
            </td>
            </tr>

            <tr class="borderB">
              {{-- <th>Complementarios</td> --}}

              <td>WhatsApp de servicio</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr >
              <td class="beginRow t2" rowspan="3">
                <span>
                  Complementarios
                </span>
              </td>
              <td>Soporte técnico con atención prioritaria</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
              <td>Sesiones estratégicas extras con descuento</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>
            <tr>
              {{-- <th>Complementarios</td> --}}
              <td>Diseño plantillas personalizadas con descuento</td>
              <td></td>
              <td class="ch">
                <img class="checkIcon" src="{!! App::setFilePath('/assets/images/icons/check_vector.png') !!}" alt="">
              </td>
            </tr>

          </tbody>
        </table>


      </div>

    </section>

  </div>

</section>

{{-- <section class="customSection sectionParent landingPricingPage3">

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


</section> --}}


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

            <div class="containerImage imageQuote">

              <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector.png') !!}" alt="" loading="lazy">

            </div>

            <p class="text primaryText grayColorTexts">

              Escala tiene el email builder más amigable <br class="desktopTabletElement">
              que he utilizado en los últimos años, y su <br class="desktopTabletElement">
              equipo está comprometido a mantener la <br class="desktopTabletElement">
              plataforma en constante actualización en <br class="desktopTabletElement">
              el dinámico mundo digital.

            </p>


            <div class="subText model1 primaryText grayColorTexts">

            <div class="containerImage logoMark">

              <img src="{!! App::setFilePath('/assets/images/illustrations/others/Publicidad-Comercial21.png') !!}" alt="" loading="lazy">

          </div>

              <span>
                Verónica Bolaños <br class="space">
                <small>Account Manager / Publicidad Comercial</small>
              </span>
            </div>


          </div>
          <div class="image col-md-12 col-lg-6">
            <div class="containerImage">

              <img class="desktopElement" src="{!! App::setFilePath('/assets/images/illustrations/others/tablet_otto_1.png') !!}" alt="" loading="lazy">

              <img class="mobileElement" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_tablet_fidelizacion.png') !!}" alt="" loading="lazy">

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
  'img' =>  App::setFilePath('/assets/images/person/am/andres_moreno_email_marketing.png'),
  'title' => '
  <span class="greenBlueColor">
    En Escala hay un plan</span> <br class="space">
    del tamaño de tus sueños
  ',
  'text' => null,
  'enableButton' => true,
  'urlButton' => '#',
  'textButton' => 'Prueba gratis',
  'typeButton' => 'hoverInEffect primaryButton openPopUpButton popup-general-trial-2022',
  'side' => 'right',

 ) ;
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1





  </div>

</div>



@endsection


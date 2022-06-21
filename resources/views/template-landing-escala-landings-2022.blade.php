



{{--

    Template Name: [B] Landing - Escala Landings 2022

--}}


@extends('layouts.app')
@section('content')

<div id="landing_escalaLandings_2022">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landing_escalaLandings_2022_0',
     'title' => '
        Crea landing pages <br class="space">
        increíbles <span style="color: #B9E6E9">
          acompañado <br class="space">
          por expertos
        </span>
        ',
     'text' => '<span class="whiteColor">
        En Escala construye  landing pages de alta <br class="space">
        conversión en un abrir y cerrar de ojos, con la guía <br class="space">
        de especialistas en marketing digital y ventas.
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/escala_landings_header.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1


    @php
    $parameters = array(
     'type' => 'backgroundColor',
     'classSection' => 'landing_escalaLandings_2022_1',
     'enableTitle' => false,
     'titlePrincipal' => null,
     'subTitlePrincipal' => null,
     'title' => '
Sin programar una línea <br class="space">
de código, <span class="greenBlueColor">¡así de fácil!</span>
   ',
   'typeVideo' =>  'localvideo',
     'videoEmbed' =>  App::setFilePath('/assets/videos/am_home1.mp4'),
     'videoCover' => App::setFilePath('/assets/images/illustrations/others/tapa_video_home_03a.jpg'),
     'text' => '
        El creador de landing pages de Escala es intuitivo y fácil <br class="desktopTabletElement">
        de usar. Elige una de nuestras plantillas, personalízalas <br class="desktopTabletElement">
        y publícalas en un clic. Dale rienda suelta a tu <br class="desktopTabletElement">
        creatividad y comienza a generar leads calificados.
     ',
     'enableButton' => true,
     'urlButton' => '#lead-form',
     'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
     'textButton' => 'Prueba Gratis por 10 días',
     'enableButton2' => true,
     'urlButton2' => '#lead-form',
     'typeButton2' => 'secondaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
     'textButton2' => 'Solicita una DEMO',
     'side' => 'right',
    ) ;
   @endphp

   @contain_text_video_T1( $parameters )
   @endcontain_text_video_T1

   {{-- <section class="customSection sectionParent landing_escalaLandings_2022_2">

    <div class="section-row">

          <section class="innerSectionElement">

            <div class=" row groupElements">

              <div class="image col-md-12 col-lg-6">

                <div class="containElements">

                  <h2 class="primaryTitle blackColor">
                    Conoce todo lo que puedes lograr <br class="desktopTabletElement">
                    <span class="greenBlueColor">con las landing pages de Escala</span>
                  </h2>

                  <div class="containerImage">
                    <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/builder-pantallas 1.png') !!}" alt="" loading="lazy">
                  </div>


                </div>

              </div>
              <div class="info col-md-12 col-lg-6">

                @php

                    $elements = array(
                      [
                        'title' => 'Elige entre más de 100 plantillas',
                        'text' => 'de alta conversión'
                      ],
                      [
                        'title' => 'Personalízalas y publícalas en un clic',
                        'text' => 'en minutos, sin programar'
                      ],
                      [
                        'title' => 'Intégralas con Facebook ads e Instagram',
                        'text' => 'y atrae miles de leads a tus landing pages'
                      ],
                      [
                        'title' => 'Agrega el botón de WhatsApp',
                        'text' => 'Y comunícate en tiempo real con tus leads'
                      ],
                      [
                        'title' => 'Guarda los datos en tu CRM',
                        'text' => 'y hazle seguimiento a tu lead hasta cerrar la venta'
                      ],
                      [
                        'title' => '100% responsive',
                        'text' => 'Perfectas en todos los dispositivos'
                      ],
                      [
                        'title' => 'Comunícate con Email Marketing',
                        'text' => 'generando relaciones a largo plazo con tus <br class="space"> leads '
                      ],
                      [
                        'title' => 'Analiza y optimiza tu página',
                        'text' => 'Con dashboards que te dan métricas en tiempo real'
                      ],
                      [
                        'title' => 'Automatiza tus flujos de comunicación',
                        'text' => 'Ahorrando tiempo y recursos'
                      ]
                    );

                @endphp


                <div class="containElements">

                  <ul class="elements">
                    @foreach ($elements as $item)
                    <li class="item">
                      <div class="containerImage">
                        <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/Vector_check.png') !!}" alt="" loading="lazy">
                      </div>
                      <div class="text">
                        <h3>
                          {!! $item['title'] !!}
                        </h3>
                        <p class="text">
                          {!! $item['text'] !!}
                        </p>
                      </div>
                    </li>
                    @endforeach
                  </ul>

                </div>

              </div>

            </div>

          </section>


    </div>

   </section> --}}

    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landing_escalaLandings_2022_3',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'title' => '
          <span class="greenBlueColor">
            ¡Somos un equipo! <br class="space">
            Nuestros expertos te ayudan <br class="space">
          </span>
          a impulsar tus ventas
          ',
        'img' => App::setFilePath('/assets/images/person/implementacion_banner_principal-1.png'),
        'text' => '
            Nuestros expertos te acompañan en vivo, paso a paso para <br class="desktopTabletElement">
            implementar tu estrategia con nuestras landing pages. Con el Plan <br class="desktopTabletElement">
            PRO de Escala, nuestros especialistas en marketing digital y <br class="desktopTabletElement">
            ventas crean un plan personalizado para que puedas implementar <br class="desktopTabletElement">
            páginas de alta conversión con éxito.
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Prueba Gratis',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'side' => 'left',
    ];
@endphp

@contain_text_image_T1($parameters)
@endcontain_text_image_T1


{{-- <section class="customSection sectionParent landing_escalaLandings_2022_4">

  <div class="section-row">

        <section class="innerSectionElement">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              La combinación perfecta: <br class="space">
              <span style="color: #B9E6E9">Landing page increíble + CRM poderoso</span>
            </h2>

            <p class="primaryText grayColorTexts">
              Haz todas tus acciones de marketing digital y ventas en nuestra plataforma:
            </p>

            <ul class="elements">
              <li>Atrae  tráfico a  tus landing pages con Facebook Ads e Instagram </li>
              <li>Registra la data de tus visitantes en tus páginas</li>
              <li>Haz seguimiento  a tus leads, automatiza tus flujos de comunicación <br class="desktopTabletElement">
              y cierra más ventas con nuestro CRM integrado. </li>
            </ul>

            <div class="containerImage">
              <img alt="Landing Escala Landings" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_landings_cimag.png') !!}" alt="" loading="lazy">
            </div>

            <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
              Prueba Escala gratis
            </a>

          </div>

        </section>

  </div>

</section> --}}


<section class="customSection sectionParent landing_escalaLandings_2022_5">

  <div class="section-row">

        <section class="innerSectionElement1">

          <h2 class="primaryTitle blackColor">
            Lo que dicen nuestros clientes <br class="desktopTabletElement">
            <span class="greenBlueColor">sobre las landing pages de Escala</span>
          </h2>


        </section>

        <section class="innerSectionElement2">

          <div class="imagesSection">

              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust1.png') !!}" alt="">

              </div>
              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust2.png') !!}" alt="">

              </div>
              <div class="element">

                  <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust3.png') !!}" alt="">

              </div>

          </div>

        </section>

  </div>


</section>


    @php
  $parameters = [
      'classSection' => 'landing_escalaLandings_2022_6',
      'title' => '
<span style="color: #B9E6E9">Comienza hoy mismo a generar leads <br class="desktopTabletElement"></span>
de calidad con las landing pages de Escala
      ',
      'textForm' => 'Empieza a probar Escala',
      'text' => null,
      'image' => App::setFilePath('/assets/images/illustrations/otto/tablet_otto_1 2.png'),
  ];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1




</div>

</div>




@endsection
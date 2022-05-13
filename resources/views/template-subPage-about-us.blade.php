
{{--
  Template Name: [B] Sub page - About us
--}}

@extends('layouts.app')
@section('content')
<div id="subPage-about-us-bootstrap">
  <div class="sections">



@php
$parameters = [
    'type' => 'backgroundImage',
    'classSection' => 'subPage_AboutUs_0',
    'backgroundImageFile' => App::setFilePath('/assets/images/backgrounds/office-1.jpg'),
    'enableTitle' => false,
    'img' => App::setFilePath('/assets/images/illustrations/others/otto.svg'),
    'title' => '
    <span class="whiteColor">
      <span style="color: #B9E6E9">¡Gracias por</span> <br class="space">
      registrar tus datos!
    </span>',
    'text' => null,
    'enableButton' => false,
    'urlButton' => '#lead-form',
    'textButton' => 'Hablar con un asesor',
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
    'side' => 'right',
];
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1


<section class="customSection sectionParent subPage_AboutUs_1">

  <div class="section-row">

    <section class="innerSectionElement sct1">

      <div class="containElements">

        <h2 class="primaryTitle blackColor">
          Equipo al Timón
        </h2>
        <p class="primaryText grayColorTexts">

          Combinando más de 100 años de experiencia, <br class="space">
contamos con un equipo líder apasionado:
        </p>

      </div>

    </section>
    <section class="innerSectionElement sct2">

      <div class="groupElements row">

        <div class="col-12 col-md-12 col-lg-6 teamItem">

            <div class="containItem">

              <div class="image">
                <div class="containerImage">
                  <img  src="{!! App::setFilePath('/assets/images/illustrations/others/5_todoenuno_04.png') !!}" alt="" loading="lazy">
                </div>

              </div>
              <div class="info">
                <h3 class="secondaryTitle blackColor">
                  Organiza y gestiona tus ventas <br class="space">
                  con nuestro CRM
                </h3>
                <p class="commonText ">
                  Con el sistema más fácil de usar
                </p>
              </div>

            </div>

        </div>

      </div>

    </section>


    <section class="innerSectionElement sct3">

      <div class="groupElements row">

      </div>

    </section>






</div>

</div>

</div>




@endsection
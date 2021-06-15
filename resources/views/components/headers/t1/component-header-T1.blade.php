<!--
Header type 1

Background image or color

Title | Form
Text  |
Photo |

@var $backgroundImageType: type of header | boolean
@var $classSection: class context | string
@var $backgroundImage: url background image file | string
@var $overlay: url overlay file | string
@var $title: title of header | string
@var $text: text desc header | string
@var $image: image principal header | string
@var $textForm: text header form | string
@var $backgroundColor: background color hexadecimal | string

 -->


@if($backgroundImageType == true)

<section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent {{ $classSection }} fullWidth ">


  <div style="background-image: url('{{ $backgroundImage }}')" class="backgroundFull">


    @if($overlay == true)
    <div style="background-image: url('{{ $overlay }}')" class="backgroundPlanets">
    </div>
    @endif



    <div class="section-row">



      <section class="innerSectionElement sct1">

        <div class="groupElements row">

          <div class="info col-md-12 col-lg-6">

            <div class="containElements">


              <h2 class="principalBigTitle blackColor">
               {!! $title !!}
              </h2>

              @if($text != null)
              <p class="principalBigText grayColor">
              {!! $text !!}
              </p>
              @endif

              <div class="containerImage">
                <img src="{{ $image }}" alt="" loading="lazy">
              </div>



            </div>


          </div>
          <div class="form7 col-md-12 col-lg-6">

            <div class="containElements">

              <div class="formatForm">

                <h5 class="titleFormat blackcolor">{{ $textForm }}</h5>

                {!! do_shortcode( '[contact-form-7 id="73" title="Contacto Paso 1"]' ); !!}

              </div>

            </div>
          </div>


        </div>

      </section>

    </div>
    </div>

</section>



@endif

@if($backgroundImageType == false)

<section id="lead-form" class="component-header-t1 bg-color customSection sectionParent {{ $classSection }} ">

    <div class="section-row">

      <section class="innerSectionElement sct1">

        <div class="groupElements row">

          <div class="info col-md-12 col-lg-6">

            <div class="containElements">


              <h2 class="principalBigTitle blackColor">
               {!! $title !!}
              </h2>

              @if($text != null)
              <p class="principalBigText grayColor">
               {!! $text !!}
              </p>
              @endif

              <div class="containerImage">
                <img src="{{ $image }}" alt="" loading="lazy">
              </div>



            </div>


          </div>
          <div class="form7 col-md-12 col-lg-6">

            <div class="containElements">

              <div class="formatForm">

                <h5 class="titleFormat blackcolor">{{ $textForm }}</h5>

                {!! do_shortcode( '[contact-form-7 id="73" title="Contacto Paso 1"]' ); !!}

              </div>

            </div>
          </div>


        </div>

      </section>

    </div>

</section>



@endif




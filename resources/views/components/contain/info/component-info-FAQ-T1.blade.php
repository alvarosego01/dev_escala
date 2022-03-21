<section class="component-info-FAQ-T1 customSection sectionParent fullWidth {{ $classSection }} ">


    <div class="section-row">


        <section class="innerSectionElement sct1">

            <div class="containElements">

                <h2 class="primaryTitle blackColor2">
                    Preguntas Frecuentes
                </h2>

            </div>

        </section>



        <section class="innerSectionElement sct2">

            <div class="containElements">



               @contain_accordion_T1(  )

               @endcontain_accordion_T1


            </div>

{{--
                @if (isset($overlayImage1) && $overlayImage1 != null)

                <img src="{{ $overlayImage1 }}" alt="" class="desktopElement overlay1">

                @endif

                @if (isset($overlayImage2) && $overlayImage2 != null)

                <img src="{{ $overlayImage2 }}" alt="" class="desktopElement overlay2">


                @endif

                @if (isset($overlayImage3) && $overlayImage3 != null)

                <img src="{{ $overlayImage3 }}" alt="" class="desktopElement overlay3">


                @endif --}}

        </section>





    </div>






</section>

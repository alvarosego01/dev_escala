{{-- Header type 1

Background image or color

Title | Form
Text  |
Photo |

@var $backgroundImageType: type of header | boolean
@var $classSection: class context | string
@var $backgroundImage: url background image file | string
@var $overlay: enable overlay type | boolean
@var $overlayImage: enable overlay type | boolean
@var $title: title of header | string
@var $text: text desc header | string
@var $image: image principal header | string
@var $textForm: text header form | string
@var $backgroundColor: background color hexadecimal | string --}}

@php

if (!$threeCol) {
    $threeCol = false;
}

@endphp


    <section id="lead-form" class="component-header-t2 customSection sectionParent fullWidth {{ $classSection }}">

            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="groupElements row">


                        <div class="image col-md-12 col-lg-4">


                                <div class="containElements">


                                    <div class="containerImage">
                                        <img src="{{ $image }}" alt="" loading="lazy">
                                    </div>


                                </div>


                        </div>
                        <div class="info col-md-12 col-lg-8">


                                <div class="containElements">

                                    <h1 class="principalBigTitle blackColor">
                                        {!! $title !!}
                                    </h1>


                                </div>


                        </div>


                    </div>

                </section>

            </div>


    </section>



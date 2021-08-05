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



@if ($backgroundImageType == true)


    <section id="lead-form"
        class="component-header-t1 bg-image overlay customSection sectionParent fullWidth {{ $classSection }} ">


        <div style="background-image: url('{{ $backgroundImage }}')" class="backgroundFull">




            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="groupElements row">


                        <div class="info
                        @if ($threeCol == true)
                            col-md-12 col-lg-8
                        @else
                            col-md-12 col-lg-7
                        @endif
                        ">

                            @if ($threeCol == true)

                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-6">

                                        <div class="containerImage">
                                            <img src="{{ $image }}" alt="" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-6">
                                        <h1 class="principalBigTitle blackColor">
                                            {!! $title !!}
                                        </h1>

                                        @if ($text != null)
                                            <p class="principalBigText grayColorTexts">
                                                {!! $text !!}
                                            </p>
                                        @endif

                                    </div>

                                </div>
                            @else

                                <div class="containElements">

                                    <h1 class="principalBigTitle blackColor">
                                        {!! $title !!}
                                    </h1>

                                    @if ($text != null)
                                        <p class="principalBigText grayColorTexts">
                                            {!! $text !!}
                                        </p>
                                    @endif

                                    <div class="containerImage">
                                        <img src="{{ $image }}" alt="" loading="lazy">
                                    </div>


                                </div>

                            @endif



                        </div>
                        <div class="form7
                            @if ($threeCol == true)
                                col-md-12 col-lg-4
                            @else
                                col-md-12 col-lg-5
                            @endif
                        ">

                            <div class="containElements">

                                <div class="formatForm" redirectWeb="true">

                                    <h5 class="titleFormat blackcolor">{!! $textForm !!}</h5>

                                    {{-- {!! do_shortcode('[contact-form-7 id="73" title="Contacto Paso 1"]') !!} --}}

                                    @php
                                    $f =  ACF_CUSTOM::_getField('form7');
                                @endphp
                                 @if (isset($f) && $f != null)
                                 {!! do_shortcode( $f ) !!}
                                 @else
                                 {!! do_shortcode( '[contact-form-7 id="73" title="Contacto Paso 1"]' ); !!}
                                 @endif


                                </div>

                            </div>
                        </div>





                    </div>

                </section>

            </div>

            @if ($overlay == true)
            <div style="background-image: url('{{ $overlayImage }}')" class="backgroundPlanets">
            </div>
        @endif

        </div>

    </section>



@endif

@if ($backgroundImageType == false)

    <section id="lead-form" class="component-header-t1 bg-color customSection sectionParent {{ $classSection }} ">

        <div class="section-row">

            <section class="innerSectionElement sct1">

                <div class="groupElements row">

                    <div class="info
                        @if ($threeCol == true)
                            col-md-12 col-lg-8
                        @else
                            col-md-12 col-lg-7
                        @endif
                    ">
                        @if ($threeCol == true)

                            <div class="containElements row threeCol">

                                <div class="ele ele1 col-md-12 col-lg-6">

                                    <div class="containerImage">
                                        <img src="{{ $image }}" alt="" loading="lazy">
                                    </div>

                                </div>

                                <div class="ele ele2 col-md-12 col-lg-6">
                                    <h1 class="principalBigTitle blackColor">
                                        {!! $title !!}
                                    </h1>

                                    @if ($text != null)
                                        <p class="principalBigText grayColorTexts">
                                            {!! $text !!}
                                        </p>
                                    @endif

                                </div>

                            </div>
                        @else

                            <div class="containElements">

                                <h1 class="principalBigTitle blackColor">
                                    {!! $title !!}
                                </h1>

                                @if ($text != null)
                                    <p class="principalBigText grayColorTexts">
                                        {!! $text !!}
                                    </p>
                                @endif

                                <div class="containerImage">
                                    <img src="{{ $image }}" alt="" loading="lazy">
                                </div>


                            </div>

                        @endif

                    </div>

                    <div class="form7
                    @if ($threeCol == true)
                        col-md-12 col-lg-4
                    @else
                        col-md-12 col-lg-5
                    @endif
                    ">

                        <div class="containElements">

                            <div class="formatForm" redirectWeb="true">

                                <h5 class="titleFormat blackcolor">{!! $textForm !!}</h5>

                                {{-- {!! do_shortcode('[contact-form-7 id="73" title="Contacto Paso 1"]') !!} --}}

                                @php
                                $f =  ACF_CUSTOM::_getField('form7');
                            @endphp
                             @if (isset($f) && $f != null)
                             {!! do_shortcode( $f ) !!}
                             @else
                             {!! do_shortcode( '[contact-form-7 id="73" title="Contacto Paso 1"]' ); !!}
                             @endif


                            </div>

                        </div>
                    </div>



                </div>

            </section>

        </div>

    </section>



@endif

{{-- Details

@var $type - define type of container (backgroundImage || backgroundColor) | string
@var $classSection - class context | string
@var $backgroundImageFile - image file url background | string
@var $enableTitle -  enable title | boolean
@var $titlePrincipal - text title | html
@var $subTitlePrincipal - define sub title | html

@var $elements - array of elements | array(

    @var $img - image url | string
    @var $title - title of element | html
    @var $text - define info text | html
    @var $enableButton -  enable button | boolean
    @var $urlButton -  url of button | string
    @var $textButton -  define text of button | string

) --}}


@php
if (!isset($overlay)) {
    $overlay = false;
}

$customId = uniqid();

@endphp

@if ($type == 'backgroundImage')

    <section
        class="component-info-multiple-cards-carousel-T3 customSection sectionParent fullWidth {{ $classSection }} ">

        <div style="background-image: url('{{ $backgroundImageFile }}')" class="backgroundFull">

            <div class="section-row">

                @if ($enableTitle == true)

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            @if (isset($titlePrincipal) && $titlePrincipal != null)

                                <h2 class="primaryTitle blackColor">
                                    {!! $titlePrincipal !!}
                                </h2>

                            @endif

                            @if (isset($subTitlePrincipal) && $subTitlePrincipal != null)

                                <p class="primaryText grayColorTexts">
                                    {!! $subTitlePrincipal !!}
                                </p>

                            @endif

                        </div>

                    </section>

                @endif
                <section class="innerSectionElement sct2 ">



                    <!--Carousel Wrapper-->
                    <div id="carousel_cards{{ $customId }}" class="carousel slide carousel-multi-item"
                        data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top">
                            <a class="btn-floating" href="#carousel_cards{{ $customId }}" data-slide="prev"><i
                                    class="fa fa-chevron-left"></i></a>
                            <a class="btn-floating" href="#carousel_cards{{ $customId }}" data-slide="next"><i
                                    class="fa fa-chevron-right"></i></a>
                        </div>


                        @foreach ($elements as $r)

                            <!--First slide-->
                            <div class="carousel-item active">

                                <div class="row">
                                    <div class="col-md-12 col-lg-4">

                                        <div class="groupElements">

                                            @if (isset($r['img']) && $r['img'] != null)

                                                <div class="image">
                                                    <div class="containerImage">
                                                        <img src="{{ $r['img'] }}" alt="" loading="lazy">
                                                    </div>
                                                </div>

                                            @endif

                                            <div class="info">

                                                @if (isset($r['title']) && $r['title'] != null)
                                                    <h3 class="secondaryTitle">
                                                        {!! $r['title'] !!}
                                                    </h3>
                                                @endif

                                                @if (isset($r['text']) && $r['text'] != null)
                                                    <p class="text">
                                                        {!! $r['text'] !!}
                                                    </p>
                                                @endif

                                                @if (isset($r['enableButton']) && $r['enableButton'] != null)
                                                    <a href="{{ $r['urlButton'] }}"
                                                        class="goToHash secondaryButton hoverSecondaryButton">
                                                        {{ $r['textButton'] }}
                                                    </a>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </section>



            </div>


        </div>



    </section>

@endif

@if ($type == 'backgroundColor')

    <section
        class="component-info-multiple-cards-carousel-T3 customSection sectionParent fullWidth {{ $classSection }} ">


        <div class="section-row">

            @if ($enableTitle == true)

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            {!! $titlePrincipal !!}
                        </h2>


                        @if ($subTitlePrincipal != null)

                            <p class="primaryText grayColorTexts">
                                {!! $subTitlePrincipal !!}
                            </p>

                        @endif

                    </div>

                </section>

            @endif


            <section class="innerSectionElement sct2 ">



                <!--Carousel Wrapper-->
                <div id="carousel_cards{{ $customId }}" class="carousel slide carousel-multi-item"
                    data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating" href="#carousel_cards{{ $customId }}" data-slide="prev"><i
                                class="fa fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#carousel_cards{{ $customId }}" data-slide="next"><i
                                class="fa fa-chevron-right"></i></a>
                    </div>


                    @foreach ($elements as $r)

                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="row">
                                <div class="col-md-12 col-lg-4">

                                    <div class="groupElements">

                                        @if (isset($r['img']) && $r['img'] != null)

                                            <div class="image">
                                                <div class="containerImage">
                                                    <img src="{{ $r['img'] }}" alt="" loading="lazy">
                                                </div>
                                            </div>

                                        @endif

                                        <div class="info">

                                            @if (isset($r['title']) && $r['title'] != null)
                                                <h3 class="secondaryTitle">
                                                    {!! $r['title'] !!}
                                                </h3>
                                            @endif

                                            @if (isset($r['text']) && $r['text'] != null)
                                                <p class="text">
                                                    {!! $r['text'] !!}
                                                </p>
                                            @endif

                                            @if (isset($r['enableButton']) && $r['enableButton'] != null)
                                                <a href="{{ $r['urlButton'] }}"
                                                    class="goToHash secondaryButton hoverSecondaryButton">
                                                    {{ $r['textButton'] }}
                                                </a>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </section>


        </div>

        @if ($overlay == true)
            <div style="background-image: url('{{ $overlayImage }}')" class="backgroundPlanets">
            </div>
        @endif




    </section>

@endif

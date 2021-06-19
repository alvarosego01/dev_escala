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

)


--}}


@if ($type == 'backgroundImage')

    <section class="component-info-multiple-cards-T1 customSection sectionParent fullWidth {{ $classSection }} ">

        <div style="background-image: url('{{ $backgroundImageFile }}')" class="backgroundFull">

            <div class="section-row">

                @if ($enableTitle == true)

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle blackColor">
                                {!! $titlePrincipal !!}
                            </h2>


                            @if ($subTitlePrincipal != null)

                                <p class="primaryText grayColor">
                                    {!! $subTitlePrincipal !!}
                                </p>

                            @endif

                        </div>

                    </section>

                @endif
                <section class="innerSectionElement sct2 ">

                    @foreach ($elements as $r)
                        <div class="groupElements">

                            <div class="image">
                                <div class="containerImage">
                                    <img src="{{ $r['img'] }}" alt="" loading="lazy">
                                </div>
                            </div>

                            <div class="info">

                                <h3 class="secondaryTitle">
                                    {!! $r['title'] !!}
                                </h3>

                                <p class="text">
                                    {!! $r['text'] !!}
                                </p>
                                @if ($r['enableButton'] != null)
                                    <a href="{{ $r['urlButton'] }}"
                                        class="goToHash secondaryButton hoverSecondaryButton">
                                        {{ $r['textButton'] }}
                                    </a>
                                @endif
                            </div>

                        </div>
                    @endforeach

                </section>



            </div>


        </div>

    </section>

@endif

@if ($type == 'backgroundColor')

    <section class="component-info-multiple-cards-T1 customSection sectionParent fullWidth {{ $classSection }} ">


        <div class="section-row">

            @if ($enableTitle == true)

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            {!! $titlePrincipal !!}
                        </h2>


                        @if ($subTitlePrincipal != null)

                            <p class="primaryText grayColor">
                                {!! $subTitlePrincipal !!}
                            </p>

                        @endif

                    </div>

                </section>

            @endif
            <section class="innerSectionElement sct2 ">


                @foreach ($elements as $r)
                    <div class="groupElements">

                        <div class="image">
                            <div class="containerImage">
                                <img src="{{ $r['img'] }}" alt="" loading="lazy">
                            </div>
                        </div>

                        <div class="info">

                            <h3 class="secondaryTitle">
                                {!! $r['title'] !!}
                            </h3>

                            <p class="text">
                                {!! $r['text'] !!}
                            </p>
                            @if ($r['enableButton'] != null)
                                <a href="{{ $r['urlButton'] }}" class="goToHash secondaryButton hoverSecondaryButton">
                                    {{ $r['textButton'] }}
                                </a>
                            @endif
                        </div>

                    </div>
                @endforeach



            </section>



        </div>



    </section>

@endif

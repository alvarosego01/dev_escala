{{-- Banner contact form 7 type 1

    @var $type (backColor || backgroundImage || backgroundImage&overlay )
    @var $classSection class context | string
    @var $title principal title | html
    @var $goToUrl url to go | string
    @var $textButton text to button | string


    @var $backgroundImage url image background | string
    @var $overlay url image overla | string --}}


@if ($type == 'backColor')
    <section class="component-callToAction-T1 bg-color customSection sectionParent {{ $classSection }}">

        <div class="section-row">

            <div class="containElements">

                <h2 class="primaryTitle whiteText">
                    {!! $title !!}
                </h2>

                <a href="{{ $goToUrl }}" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
                    {!! $textButton !!}
                </a>


            </div>


        </div>

    </section>
@endif

@if ($type == 'backgroundImage')
    <section class="component-callToAction-T1 fullWidth customSection sectionParent {{ $classSection }}">


        <div style="background-image: url('{{ $backgroundImage }}')" class="backgroundFull sct1">

            <div class="section-row">

                <div class="containElements">

                    <h2 class="primaryTitle whiteText">
                        {!! $title !!}
                    </h2>

                    <a href="{{ $goToUrl }}" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
                        {!! $textButton !!}
                    </a>

                </div>

            </div>
        </div>

    </section>
@endif

@if ($type == 'backgroundImage&overlay')
    <section class="component-callToAction-T1 fullWidth overlay customSection sectionParent {{ $classSection }}">

        <div style="background-image: url('{{ $backgroundImage }}')" class="backgroundFull sct1">

            @if ($overlay != null)
            <div style="background-image: url('{{ $overlay }}')" class="imageBackground">
            </div>
            @endif
            @if ($overlay2 != null)
            <div style="background-image: url('{{ $overlay2 }}')" class="imageBackground2">
            </div>
            @endif
            <div class="section-row">

                <div class="containElements">

                    <h2 class="primaryTitle whiteText">
                        {!! $title !!}
                    </h2>

                    <a href="{{ $goToUrl }}" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
                        {!! $textButton !!}
                    </a>

                </div>


            </div>
        </div>
    </section>
@endif

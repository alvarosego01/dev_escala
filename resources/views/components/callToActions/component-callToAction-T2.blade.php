{{-- Banner contact form 7 type 1

    @var $classSection class context | string
    @var $title principal title | html
    @var $goToUrl url to go | string
    @var $textButton text to button | string



    --}}



    <section class="component-callToAction-T2 bg-color customSection sectionParent {{ $classSection }}">

        <div class="section-row">

            <div class="containElements">

                <h2 class="primaryTitle whiteText">
                    {!! $title !!}
                </h2>

                <a href="{{ $goToUrl }}" class="goToHash secondaryButton hoverSecondaryButton">
                    {!! $textButton !!}
                </a>


            </div>


        </div>

    </section>

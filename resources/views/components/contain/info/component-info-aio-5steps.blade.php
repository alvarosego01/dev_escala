

{{--

    Contain info all in one 5 steps

    @var $classSection class context | string
    @var $title title principal | html


    element 1
    @var $img1 url image file | string
    @var $title1 title element | html
    @var $desc1 desc element | html

    element 2
    @var $img2 url image file | string
    @var $title2 title element | html
    @var $desc2 desc element | html

    element 3
    @var $img3 url image file | string
    @var $title3 title element | html
    @var $desc3 desc element | html

    element 4
    @var $img4 url image file | string
    @var $title4 title element | html
    @var $desc4 desc element | html

    element 5
    @var $img5 url image file | string
    @var $title5 title element | html
    @var $desc5 desc element | html


    --}}

@if ($type == 'regular')

<section class="component-contain-info-aio-5steps customSection sectionParent  {{ $classSection }} ">

    <div class="section-row">

        <section class="innerSectionElement sct1">

            <div class="containElements">

                <h2 class="primaryTitle blackColor">
                    {!! $title !!}
                </h2>

            </div>

        </section>


        <section class="innerSectionElement sct2">

            <div class="groupElements row">

                <div class="col-md-12 col-lg-4 infoGroup">

                    <div class="containerImage">
                        <img src="{{ $img1 }}" alt="" loading="lazy">
                    </div>

                    <div class="containerElements">
                        <h2 class="commonTitle blackColor">
                            {!! $title1 !!}
                        </h2>
                        <p class="commonText grayColor">
                            {!! $desc1 !!}
                        </p>

                    </div>

                </div>
                <div class="col-md-12 col-lg-4 infoGroup">

                    <div class="containerImage">
                        <img src="{{ $img2 }}" alt="" loading="lazy">
                    </div>

                    <div class="containerElements">
                        <h2 class="commonTitle blackColor">
                            {!! $title2 !!}
                        </h2>
                        <p class="commonText grayColor">
                            {!! $desc2 !!}
                        </p>

                    </div>

                </div>
                <div class="col-md-12 col-lg-4 infoGroup">

                    <div class="containerImage">
                        <img src="{{ $img3 }}" alt="" loading="lazy">
                    </div>

                    <div class="containerElements">
                        <h2 class="commonTitle blackColor">
                            {!! $title3 !!}
                        </h2>
                        <p class="commonText grayColor">
                            {!! $desc3 !!}
                        </p>

                    </div>

                </div>


            </div>
            <div class="groupElements row">

                <div class="col-md-12 col-lg-6 infoGroup">

                    <div class="containerImage">
                        <img src="{{ $img4 }}" alt="" loading="lazy">
                    </div>

                    <div class="containerElements">
                        <h2 class="commonTitle blackColor">
                            {!! $title4 !!}
                        </h2>
                        <p class="commonText grayColor">
                            {!! $desc4 !!}
                        </p>

                    </div>

                </div>
                <div class="col-md-12 col-lg-6 infoGroup">

                    <div class="containerImage">
                        <img src="{{ $img5 }}" alt="" loading="lazy">
                    </div>

                    <div class="containerElements">
                        <h2 class="commonTitle blackColor">
                            {!! $title5 !!}
                        </h2>
                        <p class="commonText grayColor">
                            {!! $desc5 !!}
                        </p>

                    </div>

                </div>



            </div>

        </section>

    </div>
</section>

@endif





@if ($type == 'backgroundImage')

<section class="component-contain-info-aio-5steps customSection sectionParent fullWidth {{ $classSection }} ">


    <div style="background-image: url('{{ $backgroundImageFile }}')" class="backgroundFull">

    <div class="section-row">

        <section class="innerSectionElement sct1">

            <div class="containElements">

                <h2 class="primaryTitle blackColor">
                    {!! $title !!}
                </h2>

            </div>

        </section>


        <section class="innerSectionElement sct2">

            <div class="groupElements row">

                <div class="col-md-12 col-lg-4 infoGroup">

                    <div class="containerImage">
                        <img src="{{ $img1 }}" alt="" loading="lazy">
                    </div>

                    <div class="containerElements">
                        <h2 class="commonTitle blackColor">
                            {!! $title1 !!}
                        </h2>
                        <p class="commonText grayColor">
                            {!! $desc1 !!}
                        </p>

                    </div>

                </div>
                <div class="col-md-12 col-lg-4 infoGroup">

                    <div class="containerImage">
                        <img src="{{ $img2 }}" alt="" loading="lazy">
                    </div>

                    <div class="containerElements">
                        <h2 class="commonTitle blackColor">
                            {!! $title2 !!}
                        </h2>
                        <p class="commonText grayColor">
                            {!! $desc2 !!}
                        </p>

                    </div>

                </div>
                <div class="col-md-12 col-lg-4 infoGroup">

                    <div class="containerImage">
                        <img src="{{ $img3 }}" alt="" loading="lazy">
                    </div>

                    <div class="containerElements">
                        <h2 class="commonTitle blackColor">
                            {!! $title3 !!}
                        </h2>
                        <p class="commonText grayColor">
                            {!! $desc3 !!}
                        </p>

                    </div>

                </div>


            </div>
            <div class="groupElements row">

                <div class="col-md-12 col-lg-6 infoGroup">

                    <div class="containerImage">
                        <img src="{{ $img4 }}" alt="" loading="lazy">
                    </div>

                    <div class="containerElements">
                        <h2 class="commonTitle blackColor">
                            {!! $title4 !!}
                        </h2>
                        <p class="commonText grayColor">
                            {!! $desc4 !!}
                        </p>

                    </div>

                </div>
                <div class="col-md-12 col-lg-6 infoGroup">

                    <div class="containerImage">
                        <img src="{{ $img5 }}" alt="" loading="lazy">
                    </div>

                    <div class="containerElements">
                        <h2 class="commonTitle blackColor">
                            {!! $title5 !!}
                        </h2>
                        <p class="commonText grayColor">
                            {!! $desc5 !!}
                        </p>

                    </div>

                </div>



            </div>

        </section>

    </div>
    </div>
</section>

@endif
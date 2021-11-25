@if ($type == 'backgroundColor')

    <section class="component-info-check-boxes-T1 customSection sectionParent {{ $classSection }} ">


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
            @if (isset($elements) && count($elements) > 0)

                <section class="innerSectionElement sct2 ">

                    <div class="containElements">

                        <div class="row">

                            @foreach ($elements as $r)

                                <div class="col-md-12 col-lg-6 item">

                                    <div class="boxInfoCheck">

                                        @if (isset($r['title']))


                                            <h3 class="secondaryTitle">

                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/check_icon.png') !!}" alt="" class="iconCheck">

                                                {!! $r['title'] !!}

                                            </h3>

                                        @endif
                                        @if (isset($r['text']))

                                            <p class="text">

                                                {!! $r['text'] !!}

                                            </p>
                                        @endif

                                        @if (isset($r['overImage']))

                                            <img src="{{ $r['overImage'] }}" alt="" class="overImage">

                                        @endif

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>
                </section>

                @if ($enableButton != null)
                <section class="innerSectionElement sct3 ">

                       <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                           {{ $textButton }}
                       </a>

                   </section>

               @endif

            @endif



        </div>


    </section>

@endif

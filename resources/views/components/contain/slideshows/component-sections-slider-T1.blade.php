

{{-- classSection
enableTitle
titlePrincipal
subTitlePrincipal

mob_reviews
desk_reviews

enableContainerButton
urlButton
typeButton
textButton
customID
--}}



<section class="component-sections-slider-T1 customSection sectionParent fullWidth {{ $classSection }} ">

    <div class="section-row">

        @if ($enableTitle == true)

        <section class="innerSectionElement1">

            <div class="containElements">

                <h2 class="primaryTitle blackColor">
                    {!! $titlePrincipal !!}
                </h2>

                @if ($subTitlePrincipal != null)

                    <p class="primaryText whiteColor">
                        {!! $subTitlePrincipal !!}
                    </p>

                @endif

            </div>

        </section>

    @endif

        <section class="innerSectionElement2">

                      <div id="{{$customID}}-mob" class=" carousel slide mobileElement" data-bs-ride="carousel">

                        <div class="carousel-inner"  role="listbox">

                            @if (isset($mob_reviews) && $mob_reviews != null && count($mob_reviews) > 0 )

                            @foreach ($mob_reviews as $index => $item)

                            <div class="carousel-item @if ($index === array_key_first($mob_reviews)) active @endif ">
                              <div class="row">
                                <div class="sliderItem ">

                                  <div class="containElements">

                                    {!! $item !!}

                                  </div>


                                </div>
                              </div>
                            </div>

                            @endforeach

                            @endif



                        </div>


                        <ol class="carousel-indicators">

                            @if (isset($mob_reviews) && $mob_reviews != null && count($mob_reviews) > 0 )

                            @foreach ($mob_reviews as $index => $item)

                            <button type="button" data-bs-target="#{{$customID}}-mob" data-bs-slide-to="{{ $index }}" @if ($index === array_key_first($mob_reviews)) class="active" aria-current="true" @endif aria-label="Slide {{ $index }}"></button>

                            @endforeach

                            @endif


                        </ol>


                      </div>

                      <div id="{{$customID}}-desktop" class="carousel slide desktopElement" data-bs-ride="carousel">


                        <div class="carousel-inner"  role="listbox">

                                @if (isset($desk_reviews) && $desk_reviews != null   )

                                @foreach ($desk_reviews as $index => $item)

                                <div class="carousel-item @if ($index === array_key_first( $desk_reviews )) active @endif ">


                              <div class="row">

                                @if (isset($item) && $item != null  )

                                @foreach ($item as $index => $Subitem)

                                <div class="sliderItem">

                                  <div class="containElements">

                                    {!! $Subitem !!}

                                  </div>

                                </div>

                                @endforeach

                                @endif


                              </div>


                            </div>

                            @endforeach

                            @endif

                        </div>


                        <ol class="carousel-indicators">

                            @if (isset($desk_reviews) && $desk_reviews != null )

                            @foreach ($desk_reviews as $index => $item)

                            <button type="button" data-bs-target="#{{$customID}}-desktop" data-bs-slide-to="{{ $index }}" @if ($index === array_key_first($desk_reviews)) class="active" aria-current="true" @endif aria-label="Slide {{ $index }}"></button>

                            @endforeach

                            @endif

                        </ol>


                      </div>


        </section>

        @if ($enableContainerButton == true)

        <section class="innerSectionElement3">

          <div class="containElements">

            {{-- <h3 class="primaryTitle greenBlueColor">
              Comienza a generar más leads, clientes y ventas
            </h3> --}}

            <a href="{{ $urlButton }}" class=" {{ $typeButton }}">
                {{ $textButton }}
            </a>

          </div>

        </section>

        @endif

  </div>

</section>
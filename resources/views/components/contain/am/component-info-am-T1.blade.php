


{{--

    Contain info - AM - Type 1

    info     | image
    byPerson |

    @var $classSection class context | string
    @var $description description | html
    @var $byAm Name of person | Html
    @var $image url image file | string

    --}}

    <section class="component-contain-info-am-t1 bg-color customSection sectionParent {{ $classSection }} ">

        <div class="section-row">


        <section class="innerSectionElement sct1">

            <div class="groupElements row">

              <div class="info col-md-12 col-lg-7">


                <div class="containElements">

                  <p class="primaryText colorGrey2 description">
                    {!! $description !!}
                </p>

                <h2 class="byAm colorGrey2">
                  {!! $byAm !!}
                </h2>

                <h2 class="team colorGrey2">
                  {!! $team !!}
                </h2>


                </div>

              </div>

              <div class="image col-md-12 col-lg-5">

                <div class="containerImage">
                  <img src="{{ $image }}" alt="" loading="lazy">
                </div>

              </div>

            </div>

          </section>


        </div>


    </section>
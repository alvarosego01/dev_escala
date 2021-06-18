

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


<section class="component-info-4steps-loading customSection sectionParent  {{ $classSection }} ">


    <div class="section-row">

        <section class="innerSectionElement row sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
                {!! $title !!}
            </h2>

          </div>

        </section>

        <section class="innerSectionElement row sct2">

          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">
              <div class="cardElements">
                <div class="loader">
                  <div class="containerImage">
                    <img src="{{ $img1 }}" alt="" loading="lazy">
                  </div>
                </div>
                <h3 class="title orangeColor">
                    {!! $title1 !!}
                </h3>

                <p class="infoText">
                    {!! $desc1 !!}
                </p>

              </div>
            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">
              <div class="cardElements">
                <div class="loader">
                  <div class="containerImage">
                    <img src="{{ $img2 }}" alt="" loading="lazy">
                  </div>
                </div>
                <h3 class="title orangeColor">
                    {!! $title2 !!}
                </h3>

                <p class="infoText">
                    {!! $desc2 !!}
                </p>

              </div>
            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">
              <div class="cardElements">
                <div class="loader">
                  <div class="containerImage">
                    <img src="{{ $img3 }}" alt="" loading="lazy">
                  </div>
                </div>
                <h3 class="title orangeColor">
                    {!! $title3 !!}
                </h3>

                <p class="infoText">
                    {!! $desc3 !!}
                </p>

              </div>
            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">
              <div class="cardElements">
                <div class="loader">
                  <div class="containerImage">
                    <img src="{{ $img4 }}" alt="" loading="lazy">
                  </div>
                </div>
                <h3 class="title orangeColor">
                    {!! $title4 !!}
                </h3>

                <p class="infoText">
                    {!! $desc4 !!}
                </p>

              </div>
            </div>
          </div>




        </section>

      </div>


</section>

{{-- Details

@var $type - define type of container (backgroundImage || backgroundColor) | string
@var $classSection - class context | string
@var $backgroundImageFile - image file url background | string
@var $enableTitle -  enable title | boolean
@var $titlePrincipal - text title | html
@var $subTitlePrincipal - define sub title | html
@var $img - image url | string
@var $text - define info text | html
@var $enableButton -  enable button | boolean
@var $urlButton -  url of button | string
@var $textButton -  define text of button | string
@var $side - define side of image (left || right) | string

@var $typeButton - set type off button (secondaryButton || primaryButton)
--}}
@php


  if(!isset($overlay)){

    $overlay = false;


}
if( isset($typeButton) && $typeButton == 'primaryButton' ){

    $typeButton = $typeButton.' hoverInEffect';

}


  if(!isset($typeButton)){

    $typeButton = 'secondaryButton hoverSecondaryButton';


}


@endphp


@if ($type == 'backgroundImage')

    <section class="component-features-image-T1 customSection sectionParent fullWidth {{ $classSection }} ">

        <div style="background-image: url('{{ $backgroundImageFile }}')" class="backgroundFull">

            <div class="section-row">

                @if ($enableTitle == true)

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle whiteColor">
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
                <section class="innerSectionElement sct2 {{ $side }}">

                    @if ($side == 'left')

                        <div class="groupElements row">

                            <div class="image col-md-12 col-lg-5">
                                <div class="containerImage">
                                    @if (isset($img) && $img != null)

                                    <img src="{{ $img }}" @if(isset($img_alt) && $img_alt != null) alt="{!! $img_alt !!}" @endif loading="lazy">
                                    @endif

                                </div>
                            </div>

                            <div class="info col-md-12 col-lg-7">
                                @if (isset($features_items) && count($features_items) > 0)

                                <ul class="elements">
                                    @foreach ($features_items as $item)
                                    <li class="item">
                                      <div class="containerImage">
                                        <img alt="Escala check item features" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_check_2.png') !!}" alt="" loading="lazy">
                                      </div>
                                      <div class="text">
                                        <h3>
                                          {!! $item['title'] !!}
                                        </h3>
                                        <p class="text">
                                          {!! $item['text'] !!}
                                        </p>
                                      </div>
                                    </li>
                                    @endforeach
                                </ul>

                            @endif


                            @if ($enableButton != null)
                            <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                                {{ $textButton }}
                            </a>
                        @endif

                            </div>

                        </div>

                    @endif
                    @if ($side == 'right')
                        <div class="groupElements row">

                            <div class="info col-md-12 col-lg-7">
                                @if (isset($features_items) && count($features_items) > 0)

                                <ul class="elements">
                                    @foreach ($features_items as $item)
                                    <li class="item">
                                      <div class="containerImage">
                                        <img alt="Escala check item features" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_check_2.png') !!}" alt="" loading="lazy">
                                      </div>
                                      <div class="text">
                                        <h3>
                                          {!! $item['title'] !!}
                                        </h3>
                                        <p class="text">
                                          {!! $item['text'] !!}
                                        </p>
                                      </div>
                                    </li>
                                    @endforeach
                                </ul>

                            @endif

                            @if ($enableButton != null)
                            <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                                {{ $textButton }}
                            </a>
                        @endif

                            </div>

                            <div class="image col-md-12 col-lg-5">
                                <div class="containerImage">
                                    @if (isset($img) && $img != null)

                                    <img src="{{ $img }}" @if(isset($img_alt) && $img_alt != null) alt="{!! $img_alt !!}" @endif loading="lazy">
                                    @endif

                                </div>
                            </div>

                        </div>

                    @endif
                    @if ($side == 'center')
                        <div class="groupElements row">

                            <div class="info col-md-12 col-lg-12">
                                @if (isset($features_items) && count($features_items) > 0)

                                <ul class="elements">
                                    @foreach ($features_items as $item)
                                    <li class="item">
                                      <div class="containerImage">
                                        <img alt="Escala check item features" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_check_2.png') !!}" alt="" loading="lazy">
                                      </div>
                                      <div class="text">
                                        <h3>
                                          {!! $item['title'] !!}
                                        </h3>
                                        <p class="text">
                                          {!! $item['text'] !!}
                                        </p>
                                      </div>
                                    </li>
                                    @endforeach
                                </ul>

                            @endif


                            @if ($enableButton != null)
                            <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                                {{ $textButton }}
                            </a>
                        @endif

                            </div>

                            <div class="image col-md-12 col-lg-12">
                                <div class="containerImage">
                                    @if (isset($img) && $img != null)

                                    <img src="{{ $img }}" @if(isset($img_alt) && $img_alt != null) alt="{!! $img_alt !!}" @endif loading="lazy">
                                    @endif

                                </div>
                            </div>

                        </div>

                    @endif

                </section>



            </div>

            @if ($overlay == true)
            <img src="{{ $overlayImage }}"   loading="lazy" class="specialOverlay">
            @endif
        </div>




    </section>

@endif

@if ($type == 'backgroundColor')

    <section class="component-features-image-T1 customSection sectionParent {{ $classSection }} ">


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
            <section class="innerSectionElement sct2 {{ $side }}">

                @if ($side == 'left')

                    <div class="groupElements row">

                        <div class="image col-md-12 col-lg-5">
                            <div class="containerImage">
                                @if (isset($img) && $img != null)

                                <img src="{{ $img }}" @if(isset($img_alt) && $img_alt != null) alt="{!! $img_alt !!}" @endif loading="lazy">
                                @endif

                            </div>
                        </div>
                        <div class="info col-md-12 col-lg-7">

                            @if (isset($features_items) && count($features_items) > 0)

                                <ul class="elements">
                                    @foreach ($features_items as $item)
                                    <li class="item">
                                      <div class="containerImage">
                                        <img alt="Escala check item features" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_check_2.png') !!}" alt="" loading="lazy">
                                      </div>
                                      <div class="text">
                                        <h3>
                                          {!! $item['title'] !!}
                                        </h3>
                                        <p class="text">
                                          {!! $item['text'] !!}
                                        </p>
                                      </div>
                                    </li>
                                    @endforeach
                                </ul>

                            @endif


                            @if ($enableButton != null)
                            <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                                {{ $textButton }}
                            </a>
                        @endif


                        </div>

                    </div>

                @endif
                @if ($side == 'right')
                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-7">
                            @if (isset($features_items) && count($features_items) > 0)

                            <ul class="elements">
                                @foreach ($features_items as $item)
                                <li class="item">
                                  <div class="containerImage">
                                    <img alt="Escala check item features" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_check_2.png') !!}" alt="" loading="lazy">
                                  </div>
                                  <div class="text">
                                    <h3>
                                      {!! $item['title'] !!}
                                    </h3>
                                    <p class="text">
                                      {!! $item['text'] !!}
                                    </p>
                                  </div>
                                </li>
                                @endforeach
                            </ul>

                        @endif


                        @if ($enableButton != null)
                        <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                            {{ $textButton }}
                        </a>
                    @endif

                        </div>

                        <div class="image col-md-12 col-lg-5">
                            <div class="containerImage">
                                @if (isset($img) && $img != null)

                                <img src="{{ $img }}" @if(isset($img_alt) && $img_alt != null) alt="{!! $img_alt !!}" @endif loading="lazy">
                                @endif

                            </div>
                        </div>

                    </div>
                @endif

                @if ($side == 'center')
                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-12">

                            @if (isset($features_items) && count($features_items) > 0)

                            <ul class="elements">
                                @foreach ($features_items as $item)
                                <li class="item">
                                  <div class="containerImage">
                                    <img alt="Escala check item features" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_check_2.png') !!}" alt="" loading="lazy">
                                  </div>
                                  <div class="text">
                                    <h3>
                                      {!! $item['title'] !!}
                                    </h3>
                                    <p class="text">
                                      {!! $item['text'] !!}
                                    </p>
                                  </div>
                                </li>
                                @endforeach
                            </ul>

                        @endif

                            @if ($enableButton != null)
                            <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                                {{ $textButton }}
                            </a>
                        @endif


                        </div>

                        <div class="image col-md-12 col-lg-12">
                            <div class="containerImage">
                                @if (isset($img) && $img != null)

                                <img src="{{ $img }}" @if(isset($img_alt) && $img_alt != null) alt="{!! $img_alt !!}" @endif loading="lazy">
                                @endif

                            </div>
                        </div>

                    </div>
                @endif

            </section>

            @if ($overlay == true)

            <img src="{{ $overlayImage }}"   loading="lazy" class="specialOverlay">
        @endif

        </div>





    </section>

@endif

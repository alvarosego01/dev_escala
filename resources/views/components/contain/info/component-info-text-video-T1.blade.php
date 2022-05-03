{{-- Details

@var $type - define type of container (backgroundvideo || backgroundColor) | string
@var $classSection - class context | string
@var $backgroundImageFile - video file url background | string
@var $enableTitle -  enable title | boolean
@var $titlePrincipal - text title | html
@var $subTitlePrincipal - define sub title | html
@var $videoEmbed - string code video embed | string
@var $videoCover - string custom cover video | string
@var $typeVideo - type video method | string
@var $text - define info text | html
@var $enableButton -  enable button | boolean
@var $urlButton -  url of button | string
@var $textButton -  define text of button | string
@var $side - define side of video (left || right) | string

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

    <section class="component-info-text-video-T1 customSection sectionParent fullWidth {{ $classSection }} ">

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

                            <div class="video col-md-12 col-lg-6">

                                @if ( isset($typeVideo) && $typeVideo == 'localvideo' )
                                @if ( isset($videoEmbed) && $videoEmbed != null )

                                @php

                                    if ( !isset($videoEmbed) || $videoEmbed == null ){
                                        # code...
                                        $videoCover = '';
                                    }

                                @endphp

                                <div class="youtubeImageContainer ">


                                <video
                                class="video-js"
                                controls
                                preload="none"
                                poster="{{ $videoCover }}"
                                {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                data-setup="{}"
                              >
                                <source src="{{ $videoEmbed }}" type="video/mp4" />
                                <source src="{{ $videoEmbed }}" type="video/webm" />
                                <p class="vjs-no-js">
                                  To view this video please enable JavaScript, and consider upgrading to a
                                  web browser that
                                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                                    >supports HTML5 video</a
                                  >
                                </p>
                              </video>



                            </div>

                            @endif
                                      <div class="youtube" data-embed="{{ $videoEmbed }}" videoCover="{{ $videoCover }}">
                                        <div class="play-button"></div>
                                    </div>
                                @endif

                            </div>
                            <div class="info col-md-12 col-lg-6">

                                @if ($title != null)
                                <h3 class="secondaryTitle">
                                    {!! $title !!}
                                </h3>
                                @endif

                                @if ($text != null)
                                <p class="text">
                                    {!! $text !!}
                                </p>
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


                            <div class="info col-md-12 col-lg-6">


                                @if ($title != null)
                                <h3 class="secondaryTitle">
                                    {!! $title !!}
                                </h3>
                                @endif

                                @if ($text != null)
                                <p class="text">
                                    {!! $text !!}
                                </p>
                                @endif

                                @if ($enableButton != null)
                                    <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                                        {{ $textButton }}
                                    </a>
                                @endif
                            </div>

                            <div class="video col-md-12 col-lg-6">
                                @if ( isset($typeVideo) && $typeVideo == 'localvideo' )
                                @if ( isset($videoEmbed) && $videoEmbed != null )
                                @php

                                if ( !isset($videoEmbed) || $videoEmbed == null ){
                                    # code...
                                    $videoCover = '';
                                }

                            @endphp
                                <div class="youtubeImageContainer ">

                                    <video
                                    class="video-js"
                                    controls
                                    preload="none"
                                    poster="{{ $videoCover }}"
                                    {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                    data-setup="{}"
                                  >
                                    <source src="{{ $videoEmbed }}" type="video/mp4" />
                                    <source src="{{ $videoEmbed }}" type="video/webm" />
                                    <p class="vjs-no-js">
                                      To view this video please enable JavaScript, and consider upgrading to a
                                      web browser that
                                      <a href="https://videojs.com/html5-video-support/" target="_blank"
                                        >supports HTML5 video</a
                                      >
                                    </p>
                                  </video>
                            </div>
                                    @endif
                                    @else
                                          <div class="youtube" data-embed="{{ $videoEmbed }}" videoCover="{{ $videoCover }}">
                                        <div class="play-button"></div>
                                    </div>
                                    @endif
                            </div>


                        </div>

                    @endif
                    @if ($side == 'center')
                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-12">


                                @if ($title != null)
                                <h3 class="secondaryTitle">
                                    {!! $title !!}
                                </h3>
                                @endif

                                @if ($text != null)
                                <p class="text">
                                    {!! $text !!}
                                </p>
                                @endif

                                @if ($enableButton != null)
                                    <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                                        {{ $textButton }}
                                    </a>
                                @endif
                            </div>

                            <div class="video col-md-12 col-lg-6">
                                @if ( isset($typeVideo) && $typeVideo == 'localvideo' )
                                @if ( isset($videoEmbed) && $videoEmbed != null )
                                @php

                                if ( !isset($videoEmbed) || $videoEmbed == null ){
                                    # code...
                                    $videoCover = '';
                                }

                            @endphp
                                    <div class="youtubeImageContainer ">

                                        <video
                                        class="video-js"
                                        controls
                                        preload="none"
                                        poster="{{ $videoCover }}"
                                        {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                        data-setup="{}"
                                      >
                                        <source src="{{ $videoEmbed }}" type="video/mp4" />
                                        <source src="{{ $videoEmbed }}" type="video/webm" />
                                        <p class="vjs-no-js">
                                          To view this video please enable JavaScript, and consider upgrading to a
                                          web browser that
                                          <a href="https://videojs.com/html5-video-support/" target="_blank"
                                            >supports HTML5 video</a
                                          >
                                        </p>
                                      </video>
                                </div>
                                    @endif
                                    @else
                                          <div class="youtube" data-embed="{{ $videoEmbed }}" videoCover="{{ $videoCover }}">
                                        <div class="play-button"></div>
                                    </div>
                                    @endif
                            </div>

                        </div>

                    @endif

                </section>



            </div>


        </div>

            @if ($overlay == true)
                <div style="background-image: url('{{ $overlayvideo }}')" class="backgroundPlanets">
                </div>
            @endif


    </section>

@endif

@if ($type == 'backgroundColor')

    <section class="component-info-text-video-T1 customSection sectionParent {{ $classSection }} ">


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

                        <div class="video col-md-12 col-lg-6">
                            @if ( isset($typeVideo) && $typeVideo == 'localvideo' )
                            @if ( isset($videoEmbed) && $videoEmbed != null )
                            @php

                            if ( !isset($videoEmbed) || $videoEmbed == null ){
                                # code...
                                $videoCover = '';
                            }

                        @endphp
                              <div class="youtubeImageContainer ">

                                <video
                                class="video-js"
                                controls
                                preload="none"
                                poster="{{ $videoCover }}"
                                {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                data-setup="{}"
                              >
                                <source src="{{ $videoEmbed }}" type="video/mp4" />
                                <source src="{{ $videoEmbed }}" type="video/webm" />
                                <p class="vjs-no-js">
                                  To view this video please enable JavaScript, and consider upgrading to a
                                  web browser that
                                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                                    >supports HTML5 video</a
                                  >
                                </p>
                              </video>
                        </div>
                                @endif
                                @else
                                      <div class="youtube" data-embed="{{ $videoEmbed }}" videoCover="{{ $videoCover }}">
                                        <div class="play-button"></div>
                                    </div>
                                @endif
                        </div>

                        <div class="info col-md-12 col-lg-6">


                            @if ($title != null)
                            <h3 class="secondaryTitle">
                                {!! $title !!}
                            </h3>
                            @endif

                            @if ($text != null)
                            <p class="text">
                                {!! $text !!}
                            </p>
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


                        <div class="info col-md-12 col-lg-6">

                            @if ($title != null)
                            <h3 class="secondaryTitle">
                                {!! $title !!}
                            </h3>
                            @endif

                            @if ($text != null)
                            <p class="text">
                                {!! $text !!}
                            </p>
                            @endif

                            @if ($enableButton != null)
                                <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                                    {{ $textButton }}
                                </a>
                            @endif
                        </div>

                        <div class="video col-md-12 col-lg-6">
                            @if ( isset($typeVideo) && $typeVideo == 'localvideo' )
                            @if ( isset($videoEmbed) && $videoEmbed != null )
                            @php

                            if ( !isset($videoEmbed) || $videoEmbed == null ){
                                # code...
                                $videoCover = '';
                            }

                        @endphp
                             <div class="youtubeImageContainer ">

                                <video
                                class="video-js"
                                controls
                                preload="none"
                                poster="{{ $videoCover }}"
                                {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                data-setup="{}"
                              >
                                <source src="{{ $videoEmbed }}" type="video/mp4" />
                                <source src="{{ $videoEmbed }}" type="video/webm" />
                                <p class="vjs-no-js">
                                  To view this video please enable JavaScript, and consider upgrading to a
                                  web browser that
                                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                                    >supports HTML5 video</a
                                  >
                                </p>
                              </video>
                        </div>
                                @endif
                                @else
                                      <div class="youtube" data-embed="{{ $videoEmbed }}" videoCover="{{ $videoCover }}">
                                        <div class="play-button"></div>
                                    </div>
                                @endif
                        </div>

                    </div>
                @endif

                @if ($side == 'center')
                    <div class="groupElements row">


                        <div class="info col-md-12 col-lg-12">

                            @if ($title != null)
                            <h3 class="secondaryTitle">
                                {!! $title !!}
                            </h3>
                            @endif

                            @if ($text != null)
                            <p class="text">
                                {!! $text !!}
                            </p>
                            @endif

                            @if ($enableButton != null)
                                <a href="{{ $urlButton }}" class="goToHash {{ $typeButton }}">
                                    {{ $textButton }}
                                </a>
                            @endif
                        </div>

                        <div class="video col-md-12 col-lg-12">
                            @if ( isset($typeVideo) && $typeVideo == 'localvideo' )
                            @if ( isset($videoEmbed) && $videoEmbed != null )
                            @php

                            if ( !isset($videoEmbed) || $videoEmbed == null ){
                                # code...
                                $videoCover = '';
                            }

                        @endphp
                             <div class="youtubeImageContainer ">

                                <video
                                class="video-js"
                                controls
                                preload="none"
                                poster="{{ $videoCover }}"
                                {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                data-setup="{}"
                              >
                                <source src="{{ $videoEmbed }}" type="video/mp4" />
                                <source src="{{ $videoEmbed }}" type="video/webm" />
                                <p class="vjs-no-js">
                                  To view this video please enable JavaScript, and consider upgrading to a
                                  web browser that
                                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                                    >supports HTML5 video</a
                                  >
                                </p>
                              </video>
                        </div>
                                @endif
                                @else
                                      <div class="youtube" data-embed="{{ $videoEmbed }}" videoCover="{{ $videoCover }}">
                                        <div class="play-button"></div>
                                    </div>
                                @endif
                        </div>

                    </div>
                @endif

            </section>



        </div>


                    @if ($overlay == true)
                        <div style="background-image: url('{{ $overlayvideo }}')" class="backgroundPlanets">
                        </div>
                    @endif


    </section>

@endif

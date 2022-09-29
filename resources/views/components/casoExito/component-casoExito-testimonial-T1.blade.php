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



    <section class="component-casoExito-testimonial-image-T1 customSection sectionParent {{ $classSection }} ">


            <div class="section-row">

                @if ($enableTitle == true)

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle">
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
                <section class="innerSectionElement sct2">



                        <div class="groupElements row">

                            @if ( isset($posts) && $posts != null )


                            <div class="containElement">


                            <div class="image">
                                <div class="containerImage">


                                    <img src="{{ $posts['image'] }}" alt="" loading="lazy">


                                </div>
                            </div>
                            <div class="info">


                                <p class="text">
                                    {!! $posts['text'] !!}
                                    <img class="com1" src="{!! App::setFilePath('/assets/images/illustrations/others/normal.png') !!}" alt="">
                                    <img class="com2" src="{!! App::setFilePath('/assets/images/illustrations/others/normal.png') !!}" alt="">
                                </p>


                                <div class="autor">
                                    <p class="autorText">
                                        {!! $posts['autor'] !!}
                                        <span class="greenBlueColor">
                                            {!! $posts['position'] !!}
                                        </span>
                                    </p>
                                        <div class="clientLogo containerImage">


                                            <img style="height: 50px" src="{{ $posts['logo'] }}" alt="" loading="lazy">

                                        </div>

                                    </div>


                            </div>

                        </div>

                        @endif

                        </div>



                </section>



            </div>




    </section>



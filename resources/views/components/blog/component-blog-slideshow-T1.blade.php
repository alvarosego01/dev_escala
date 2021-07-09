<section class="component-slideshowBlog-T1 customSection sectionParent  {{ $classSection }}">

    <div class="section-row">

        @if ($enableTitle == true)

            <section class="innerSectionElement sct1">

                <div class="containElements">

                    @if (isset($titlePrincipal) && $titlePrincipal != null)

                    @endif
                    <h2 class="primaryTitle blackColor">
                        {!! $titlePrincipal !!}
                    </h2>


                    @if ( isset($subTitlePrincipal) && $subTitlePrincipal != null)

                        <p class="primaryText grayColorTexts">
                            {!! $subTitlePrincipal !!}
                        </p>

                    @endif

                </div>

            </section>

        @endif
        <section class="innerSectionElement sct2 ">


            @if ($categoryTag == true)

                @foreach ($categoryTagList as $item)

                <div class="tagsCategory">
                    {{ $item }}
                </div>

                @endforeach

            @endif


            <div class="groupElements row">

                 @if ( isset($posts) && $posts != null )

                 <div id="carousel-{{$classSection}}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @foreach ($posts->get_posts() as $index => $item)
                        <div class="carousel-item @if ($index === array_key_first($posts->get_posts())) active @endif ">

                            <div class="backgroundImage" style="background: url('{{ Posts::getPhoto($item->ID) }}') rgba(13,46,56, 0.7)" >

                                <a href="{!! App::setTypeUrl() !!}/blog/{{ $item->post_name }}">


                                    <div class="group">


                                        <h2 class="primaryTitle whiteColor">
                                            {{ $item->post_title }}
                                        </h2>

                                        <p class="primaryText whiteColor">

                                            {!! ACF_CUSTOM::_getField('excerpt_single', $item->ID) !!}

                                        </p>

                                    </div>

                                </a>

                            </div>

                        </div>
                        @endforeach

                    </div>

                    <div class="controlsSlideshow">

                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{$classSection}}" data-bs-slide="prev">

                            <i class="fa fa-chevron-left" aria-hidden="true"></i>

                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{$classSection}}" data-bs-slide="next">

                            <i class="fa fa-chevron-right" aria-hidden="true"></i>

                        </button>

                    </div>

                  </div>



                @endif


            </div>

        </section>


    </div>

    @if ($overlay == true)
        <div style="background-image: url('{{ $overlayImage }}')" class="backgroundPlanets">
        </div>
    @endif



</section>

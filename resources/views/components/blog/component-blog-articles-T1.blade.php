

{{--

classSection
enableTitle
titlePrincipal
categoryTag
categoryTagList
item
linkCategory
posts


    --}}



<section class="component-articlesBlog-T1 customSection sectionParent  {{ $classSection }}">

    <div class="section-row">

        @if ($enableTitle == true)

            <section class="innerSectionElement sct1">

                <div class="containElements">

                    @if (isset($titlePrincipal) && $titlePrincipal != null)

                    <h2 class="primaryTitle blackColor">
                        {!! $titlePrincipal !!}
                    </h2>

                    @endif

                    @if ($categoryTag == true)

                    <div class="groupTag">


                        @if (isset($categoryTagList) && $categoryTagList != null)
                        @foreach ($categoryTagList as $item)

                        <div class="tagsCategory">
                            {{ $item }}
                        </div>

                        @endforeach
                        @endif


                    </div>
                    @endif

                </div>

            </section>

        @endif
        <section class="innerSectionElement sct2 ">

            {{-- get_the_tags(id) --}}
            <div class="groupElements row">

                @if ( isset($posts) && $posts != null )
                    @foreach ($posts->get_posts() as $index => $item)

                    @php
                        $post_tags = get_the_tags( $item->ID );
                    @endphp

                    <div class="principal col-md-12 col-lg-4">
                        <div class="card">

                            <a href="{!! App::setTypeUrl() !!}/blog/{{ $item->post_name }}">

                                    <img src="{{ Posts::getPhoto($item->ID) }}" class="card-img-top" >

                            </a>
                        <div class="card-body">
                            <a href="{!! App::setTypeUrl() !!}/blog/{{ $item->post_name }}">
                            {{-- @if ( isset($post_tags) && $post_tags != null && count($post_tags) > 0)
                            <span class="tags greenBlueColor">

                                @foreach ($post_tags as $key => $x)
                                    @php echo $x->name;if ($key != array_key_last($post_tags)){ echo ', '; } @endphp
                                    @endforeach

                            </span>
                                @endif --}}
                                <h3 class="secondaryTitle blackColor card-title">
                                    {{ $item->post_title }}
                                </h3>
                                <p class="commonText blackColor card-text">
                                    {!! ACF_CUSTOM::_getField('excerpt_single', $item->ID) !!}
                                </p>

                            </a>
                                <span class="date">
                                    @php
                                        $date = $item->post_date;
                                        $sec = strtotime($date);
                                        $newdate = date ("j M ", $sec);
                                        echo $newdate;
                                    @endphp
                                </span>

                        </div>
                            {{-- <div class="card-footer">

                            </div> --}}
                        </div>
                    </div>


                    @endforeach
                @endif

                @if ( isset($linkCategory) && $linkCategory != null )

                <a class="hiperButtonGray" href="{{ $linkCategory }}">
                    Ver más
                </a>

                @endif

            </div>


        </section>


</div>

</section>
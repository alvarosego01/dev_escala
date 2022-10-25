

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



<section class="component-casoUso-articles-T1 customSection sectionParent  {{ $classSection }}">

    <div class="section-row">

        @if ($enableTitle == true)

            <section class="innerSectionElement sct1">

                <div class="containElements">

                    @if (isset($titlePrincipal) && $titlePrincipal != null)

                    <h2 class="primaryTitle blackColor">
                        {!! $titlePrincipal !!}
                    </h2>

                    @endif



                </div>

            </section>

        @endif
        <section class="innerSectionElement sct2 ">

            {{-- get_the_tags(id) --}}
            <div class="groupElements row">

                @if ( isset($posts) && $posts != null )
                    @foreach ($posts->get_posts() as $index => $item)


                    <div class="principal col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">

                            <a href="{!! App::setTypeUrl() !!}/caso-de-exito/{{ $item->post_name }}">

                                    {{-- <img src="{{ Posts::getPhoto($item->ID) }}" class="card-img-top" > --}}
                                @php
                                    $i = ACF_CUSTOM::_getField('logoimg_caso_exito', $item->ID);
                                    $i = $i['url'];
                                @endphp

                                <img src="{{ $i }}" alt="" loading="lazy" class="card-img-top" >

                            </a>
                            @php
                                $categories = get_the_category( $item->ID );
                            @endphp
                            @if ( isset($categories[0]->name) && $categories[0]->name != null )

                            <small class="category">

                                {{ $categories[0]->name }}

                            </small>

                            @endif
                            </div>
                        <div class="card-body">
                            <a href="{!! App::setTypeUrl() !!}/caso-de-exito/{{ $item->post_name }}">


                                <p class="commonText  blackColor card-text">
                                    {!! ACF_CUSTOM::_getField('card_article_text', $item->ID) !!}
                                </p>
                            </a>
                        </div>
                            <div class="card-footer">

                                <a class="primaryButton hoverInEffect" href="{!! App::setTypeUrl() !!}/caso-de-exito/{{ $item->post_name }}">
                                    Leer su historia
                                </a>

                            </div>
                        </div>
                    </div>


                    @endforeach
                @endif

            </div>


        </section>


</div>

</section>
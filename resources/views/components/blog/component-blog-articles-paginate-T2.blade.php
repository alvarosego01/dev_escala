{{-- classSection
posts
categoryTag
classSection
enableTitle
paginate

$paginateData = [
  'per_page' => $per_page,
    'offset_start' => $offset_start,
    'offset' => $offset,
    'current_page' => $current_page,
    'totalPosts' => $totalPosts,
    'totalPages' => $totalPages,
    'params' => $params
]; --}}

@php
$actualUrl = $get_permalink;
@endphp



<section class="component-articlesBlog-paginate-T1 customSection sectionParent  {{ $classSection }}">

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
            <div class="groupElements">

                @if (isset($posts) && $posts != null && count($posts->get_posts()) > 0)
                    <div class="articlesSection row">

                        @foreach ($posts->get_posts() as $index => $item)
                            @php
                                $post_tags = get_the_tags($item->ID);
                            @endphp

                            <div class="principal col-md-12 col-lg-4">
                                <div class="card">

                                    <a href="{!! App::setTypeUrl() !!}/blog/{{ $item->post_name }}">

                                        <img src="{{ Posts::getPhoto($item->ID) }}" class="card-img-top">

                                    </a>
                                    <div class="card-body">
                                        <a href="{!! App::setTypeUrl() !!}/blog/{{ $item->post_name }}">
                                            {{-- @if (isset($post_tags) && $post_tags != null && count($post_tags) > 0)
                                                <span class="tags greenBlueColor">

                                                    @foreach ($post_tags as $key => $x)
                                                        @php
                                                            echo $x->name;
                                                            if ($key != array_key_last($post_tags)) {
                                                                echo ', ';
                                                            }
                                                        @endphp
                                                    @endforeach

                                                </span>
                                            @endif --}}
                                            <h3 class="secondaryTitle blackColor card-title">
                                                {{ $item->post_title }}
                                            </h3>
                                            <p class="commonText  blackColor card-text">
                                                {!! ACF_CUSTOM::_getField('excerpt_single', $item->ID) !!}
                                            </p>
                                            <span class="date">
                                                @php
                                                    // $date = '2022-06-13 09:59:45';
                                                    $date = $item->post_date;
                                                    $sec = strtotime($date);
                                                    $newdate = date ("j M ", $sec);
                                                    echo $newdate;
                                                @endphp


                                            </span>
                                        </a>
                                    </div>
                                    {{-- <div class="card-footer">

                            </div> --}}
                                </div>
                            </div>
                        @endforeach

                    </div>
                    @if (isset($paginateData) && $paginateData['totalPages'] > 1)

                        <div class="paginationArticlesSection">

                            <div class="pagination">

                                @if ($paginateData['current_page'] > 1)
                                    @php
                                        $arg = $paginateData['params']['arg'];
                                        $pag = $paginateData['params']['pag'] - 1;
                                        $url = $actualUrl . '?arg=' . $arg . '&pag=' . $pag;
                                    @endphp
                                    <a class="arrow" href="{{ $url }}">
                                        Anterior
                                    </a>
                                @endif

                                @for ($i = 0; $i < $paginateData['totalPages']; $i++)
                                    @php
                                        $arg = $paginateData['params']['arg'];
                                        $pag = $i + 1;
                                        $url = $actualUrl . '?arg=' . $arg . '&pag=' . $pag;
                                    @endphp
                                    <a class="number  @if ($paginateData['current_page'] == $i + 1) active @endif"
                                        href="{{ $url }}">
                                        {{ $i + 1 }}
                                    </a>
                                @endfor

                                @if ($paginateData['current_page'] < $paginateData['totalPages'])
                                    @php
                                        $arg = $paginateData['params']['arg'];
                                        $pag = $paginateData['params']['pag'] + 1;
                                        $url = $actualUrl . '?arg=' . $arg . '&pag=' . $pag;
                                    @endphp
                                    <a class="arrow" href="{{ $url }}">
                                        Siguiente
                                    </a>
                                @endif

                            </div>

                        </div>

                    @endif
                @else
                    <div class="articlesSection row">

                        <div class="principal col-md-12 col-lg-12">

                            <p class="text noResults">

                                No hay resultados de busqueda

                            </p>

                        </div>
                    </div>

                @endif
            </div>


        </section>


    </div>

</section>

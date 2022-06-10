{{-- Template Name: [B] Blog - Search results --}}


@php

$link = $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
$escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');

$url_components = parse_url($escaped_link);

$params = null;

$args = null;
$current_page = 1;

parse_str($url_components['query'], $params);

if (isset($params['arg']) && $params['arg'] != null) {
    $args = $params['arg'];
}
if (isset($params['pag']) && $params['pag'] != null) {
    $current_page = $params['pag'];
}

$per_page = 3;
$offset_start = 1;
$offset = ($current_page - 1) * $per_page + $offset_start;

$query = [
    'post_type' => 'post',
    // 'category_name' => 'Ventas',
    'posts_per_page' => $per_page,
    'paged' => $current_page,
    'offset' => $offset,
    'order' => 'DESC',
    's' => $args,
];
$query = Posts::getPosts($query);

@endphp

<pre>

    @php
        print_r($params);
    @endphp

</pre>


@extends('layouts.app')

@section('content')


    <div id="blog-search-results-bootstrap">

        <div class="sections">


            @php

                $parameters = [
                    'posts' => $query,
                    'categoryTag' => false,
                    // 'categoryTagList' null,
                    // 'classSection' => 'blogHome3 searchResultsBlog0',
                    'classSection' => 'searchResultsBlog0',
                    'enableTitle' => true,
                    'linkCategory' => App::setTypeUrl() . '/blog/ventas',
                ];

            @endphp

            <pre>

            @php
                print_r($query->posts)
                // print_r($query->found_posts)
            @endphp

        </pre>

            @articlesBlog_paginate_T1($parameters)
                @slot('titlePrincipal')
                    <span class="greenBlueColor">Últimas Publicaciones</span> “{{ $args }}”
                @endslot
            @endarticlesBlog_paginate_T1


        </div>

    </div>






@endsection

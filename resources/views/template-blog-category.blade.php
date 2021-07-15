{{--
    Template Name: [B] Blog - Category
--}}


<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css"
    href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap"
    type="text/css" media="all">



    @php
        $category = ACF_CUSTOM::_getField('category_base');
    @endphp

@extends('layouts.app')

@section('content')


    <div id="blog-category-bootstrap">

        <div class="sections">



            @php
            $query = array(
                'post_type' => 'post',
                'category_name' => $category
            );
            $query = Posts::getPosts($query);

        @endphp

    @slideshowBlog_T1(array(
        "posts" => $query,
        'categoryTag' => true,
        'categoryTagList' =>  [
            $category,
            // "Ventas"
        ]
    ))
        @slot('classSection')
            blogCategory0
        @endslot

        @slot('enableTitle')
            true
        @endslot

        @slot('titlePrincipal')
            <span class="greenBlueColor">Artículos de</span> {{ $category }} destacados

        @endslot


        @slot('overlay')
            false
        @endslot

        @slot('overlayImage')
            null
        @endslot

    @endslideshowBlog_T1

    @php
        $query = array(
            'post_type' => 'post',
            'category_name' => $category,
            'posts_per_page' => 9,
            'order' => 'DESC'
        );
        $query = Posts::getPosts($query);
    @endphp

    @articlesBlog_T1(array(
        "posts" => $query,
        'categoryTag' => true,
        'categoryTagList' =>  [
            $category
        ]
    ))

        @slot('classSection')
        blogCategory1
        @endslot
        @slot('enableTitle')
            true
        @endslot
        @slot('titlePrincipal')
            <span class="greenBlueColor">Artículos</span> recientes
        @endslot


    @endarticlesBlog_T1


        </div>

    </div>






@endsection

{{--
    Template Name: [B] Blog - Category
--}}



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

{{--

    Template Name: [B] Blog - Home

--}}


<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css"
    href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap"
    type="text/css" media="all">

@extends('layouts.app')

@section('content')


    <div id="blog-home-bootstrap">

        <div class="sections">

            @header_t1

            @slot('backgroundImageType')
                true
            @endslot

            @slot('overlay')
                true
            @endslot

            @slot('classSection')
                threeCol func blogHome0
            @endslot

            @slot('title')
                Conviértete en un experto <br> <span class="greenBlueColor">en ventas y marketing</span>
            @endslot

            @slot('text')
                Todos los conocimientos que necesitas <br> para construir potentes embudos de venta.
            @endslot

            @slot('image')
                {!! App::setFilePath('/assets/images/illustrations/otto/otto_einstein.png') !!}
            @endslot

            @slot('textForm')
                ¡Prueba <span class="orangeColor">escala</span> ahora!
            @endslot

            @slot('threeCol')
                true
            @endslot

            @slot('backgroundImage')
                {!! App::setFilePath('/assets/images/backgrounds/degradeBlue1.png') !!}
            @endslot

            @slot('overlayImage')
                {!! App::setFilePath('/assets/images/overlays/estrellas 2.png') !!}
            @endslot

            @endheader_t1


            @subscribers_T1

                @slot('classSection')
                    blogHome1
                @endslot

                @slot('image')
                    {!! App::setFilePath('/assets/images/illustrations/team/avatar-chica.png') !!}
                @endslot

                @slot('title')
                    Suscríbete a <span class="greenBlueColor">nuestro blog</span>
                @endslot

            @endheader_t1



                @php
                    $query = array(
                        'post_type' => 'post',
                        'category_name' => 'Marketing'
                    );
                    $query = Posts::getPosts($query);

                @endphp

            @slideshowBlog_T1(array(
                "posts" => $query,
                'categoryTag' => true,
                'categoryTagList' =>  [
                    "Marketing",
                    // "Ventas"
                ]
            ))
                @slot('classSection')
                    blogHome2
                @endslot

                @slot('enableTitle')
                    true
                @endslot

                @slot('titlePrincipal')
                    <span class="greenBlueColor">Artículos</span> destacados
                @endslot

                @slot('subTitlePrincipal')
                    Todos los conocimientos que necesitas para construir potentes embudos de venta.
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
                    'category_name' => 'Ventas',
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                );
                $query = Posts::getPosts($query);
            @endphp

            @articlesBlog_T1(array(
                "posts" => $query,
                'categoryTag' => true,
                'categoryTagList' =>  [
                    "Ventas"
                ]
            ))

                @slot('classSection')
                    blogHome3
                @endslot
                @slot('enableTitle')
                    true
                @endslot
                @slot('titlePrincipal')
                    <span class="greenBlueColor">Artículos</span> recientes
                @endslot
                @slot('linkCategory')
                {!! App::setTypeUrl() !!}/blog/ventas
                @endslot

            @endarticlesBlog_T1


            @php
                $query = array(
                    'post_type' => 'post',
                    'category_name' => 'Marketing',
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                );
                $query = Posts::getPosts($query);
            @endphp

            @articlesBlog_T1(array(
                "posts" => $query,
                'categoryTag' => true,
                'categoryTagList' =>  [
                    "Marketing"
                ]
            ))

                @slot('classSection')
                    blogHome4
                @endslot
                @slot('enableTitle')
                    true
                @endslot
                @slot('titlePrincipal')
                    <span class="greenBlueColor">Artículos</span> recientes
                @endslot
                @slot('linkCategory')
                    {!! App::setTypeUrl() !!}/blog/marketing
                @endslot

            @endarticlesBlog_T1



        </div>

    </div>


@endsection

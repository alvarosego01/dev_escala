{{--

    Template Name: [B] Blog - Home

--}}



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
                ¡Prueba <span class="orangeColor">Escala</span> ahora!
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

                $parameters = array(
                    "posts" => $query,
                    'categoryTag' => true,
                    'categoryTagList' =>  [
                        "Ventas"
                    ],
                    'classSection' => 'blogHome3',
                    'enableTitle' => true,
                    'linkCategory' => App::setTypeUrl().'/blog/ventas',
                )

            @endphp

            @articlesBlog_T1($parameters)

                @slot('titlePrincipal')
                    <span class="greenBlueColor">Artículos</span> recientes
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

                $parameters = array(
                "posts" => $query,
                'categoryTag' => true,
                'categoryTagList' =>  [
                    "Marketing"
                ],
                'classSection' => 'blogHome4',
                'enableTitle' => true,
                'titlePrincipal' => null,
                'linkCategory' => App::setTypeUrl().'/blog/marketing',
                )
            @endphp

            @articlesBlog_T1($parameters)



            @endarticlesBlog_T1



        </div>

    </div>


@endsection

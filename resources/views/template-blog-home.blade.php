{{--

    Template Name: [B] Blog - Home

--}}


@extends('layouts.app')

@section('content')

    <div id="blog-home-bootstrap">

        <div class="sections">


            @php
            $parameters = array(
               'backgroundImageType' => false,
               'overlay' => false,
               'classSection' => 'threeCol blogHome0',
               'title' => '
                <span style="color: #B9E6E9">
                    Conviértete en un experto <br class="space">
                    en ventas y marketing
                </span>
               ',
               'text' => '
               <span class="whiteColor">
                Todos los conocimientos que necesitas <br class="space">
                para construir potentes embudos de venta
                </span>
               ',
               'threeCol' => true,
               'textForm' => 'Comienza ahora',
               'backgroundImage' => null,
            'overlayImage' => null,
            'image' =>  App::setFilePath('/assets/images/person/blog_header.png')
              ) ;
              @endphp
              @header_t1( $parameters )
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
                    We share common trends, strategies ideas, opinions, short & long stories from the <br class="desktopTabletElement">
team behind company.
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
                    <span class="greenBlueColor">Artículos</span> de ventas
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

            @slot('titlePrincipal')
            <span class="greenBlueColor">Artículos</span> de marketing

        @endslot


            @endarticlesBlog_T1



        </div>

    </div>


@endsection

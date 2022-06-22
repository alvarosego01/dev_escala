{{--

    Template Name: [B] Blog - Home

--}}


@extends('layouts.app')

@section('content')

    <div id="blog-home-bootstrap">

        <div class="sections">

            @php
                   $setForm = ACF_CUSTOM::_getField( 'newsletter_form' );
            @endphp

            @php
            $parameters = array(
               'backgroundImageType' => false,
               'overlay' => false,
               'classSection' => 'threeCol blogHome0',
               'title' => '
                <span style="color: #B9E6E9">
Mantén tu conocimiento <br class="space">
de marketing y ventas al día
                </span>
               ',
               'text' => '
               <span class="whiteColor">
Encuentra en nuestro blog tendencias, <br class="space">
novedades y mejores prácticas <br class="space">
para empoderar tu formación.
                </span>
               ',
               'threeCol' => true,
               'textForm' => '
                ¡Sigue formándote! <br class="space">
Suscríbete a nuestro newsletter
               ',
               'backgroundImage' => null,
            'overlayImage' => null,
            'image' =>  App::setFilePath('/assets/images/person/blog_header.png'),
            'setForm' => $setForm
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
                'categoryTag' => false,
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
Dale un vistazo a los artículos más leídos. Tendencias de las principales industrias, mejores <br class="desktopTabletElement">
prácticas y conocimientos estratégicos sobre marketing, ventas y fidelización.
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
                    'categoryTag' => false,
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

                <a href="{{ App::setTypeUrl().'/blog/ventas' }}">
                    <span class="greenBlueColor">Artículos</span> de ventas
                </a>

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
                'categoryTag' => false,
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

            <a href="{{ App::setTypeUrl().'/blog/marketing' }}">
                <span class="greenBlueColor">Artículos</span> de marketing
            </a>

        @endslot


            @endarticlesBlog_T1



        </div>

    </div>


@endsection

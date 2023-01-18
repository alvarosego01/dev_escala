{{--
    Template Name: [B] Blog - Category
--}}



    @php
        $category = ACF_CUSTOM::_getField('category_base');

    @endphp


@php
$link = $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
$escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');

$url_components = parse_url($escaped_link);

$params = array(
    'pag' => $_GET['pag']
);

$args = null;
$current_page = 1;
$query = null;


if (isset($params['pag']) && $params['pag'] != null) {
    $current_page = $params['pag'];
}else{
    $current_page = 1;
}

$per_page = 9;
$offset_start = 1;
$offset = ($current_page - 1) * $per_page + $offset_start;

$query = [
    'post_type' => 'post',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'category_name' => $category,
];

$query = Posts::getPosts($query);

$totalPosts = $query->post_count;
$totalPages = $query->post_count / $per_page;
$totalPages = ceil($totalPages);

$query = [
    'post_type' => 'post',
    'posts_per_page' => $per_page,
    'paged' => $current_page,
    'offset' => $offset,
    'order' => 'DESC',
    'category_name' => $category,
];

$query = Posts::getPosts($query);

$paginateData = [
    'per_page' => $per_page,
    'offset_start' => $offset_start,
    'offset' => $offset,
    'current_page' => $current_page,
    'totalPosts' => $totalPosts,
    'totalPages' => $totalPages,
    'params' => $params
];

@endphp


@extends('layouts.app')

@section('content')


    <div id="blog-category-bootstrap">

        <div class="sections">

            @if (isset($category) && $category == 'Ventas')

            <section style="display: none" class="customSection sectionParent blogCategory0">
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="image ">
                                <div class="containerImage">
                                    <img alt="Escala implementación" src="{!! App::setFilePath('/assets/images/person/men_blog_category.png') !!}" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="info ">
                                <div class="containElements">
                                    <h1 class="primaryTitle">
                                        <span style="color: #A4E7EA;">Potencia tus ventas</span>
                                    </h1>
                                    <p class="text">
                                        Encuentra en el BLOG de Escala todo lo que <br class="desktopTabletElement">
                                        necesitas saber para impulsar todas tus acciones <br class="desktopTabletElement">
                                        de venta y hacer más productivo a tu equipo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            @php
            $title = '
            <span class="greenBlueColor">Últimas</span> Publicaciones de Ventas
            <br class="space">
            <p>
                Encuentra en el BLOG de Escala todo lo que necesitas saber para impulsar todas tus acciones <br class="desktopTabletElement">
                de venta y hacer más productivo a tu equipo.
                </p>
            ';
        @endphp
            @endif

            @if (isset($category) && $category == 'Marketing')

            <section style="display: none" class="customSection sectionParent blogCategory0">
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="image marketing ">
                                <div class="containerImage">
                                    <img alt="Escala implementación" src="{!! App::setFilePath('/assets/images/person/women_blog_category.png') !!}" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="info ">
                                <div class="containElements">
                                    <h1 class="primaryTitle">
                                        <span style="color: #A4E7EA;">
                                            El conocimiento es poder
                                        </span>
                                    </h1>
                                    <p class="text">
                                        Empodera tus acciones de marketing <br class="desktopTabletElement">
                                        digital con el contenido más actualizado <br class="desktopTabletElement">
                                        de la industria.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            @php
                $title = '
                <span class="greenBlueColor">Últimas</span> Publicaciones de Marketing
                <br class="space">
                <p>
                    Empodera tus acciones de marketing digital con el contenido más actualizado <br class="desktopTabletElement">
                    de la industria.
                    </p>
                ';
            @endphp
            @endif

            @php

            $parameters = [
                'posts' => $query,
                'categoryTag' => false,
                'classSection' => 'blogCategory1',
                'enableTitle' => true,
                'paginateData' => $paginateData,
                'titlePrincipal' => $title
            ];

        @endphp

        @articlesBlog_paginate_T1($parameters)
        @endarticlesBlog_paginate_T1


        @php
        $parameters = [
       'classSection' => 'blogCategory2',
       'title' => '<span style="color: #A4E7EA">
           Impulsar el crecimiento de <br class="space">
           tu negocio con Escala
         </span>',
         'text' => '
           Estás a un clic de probar Escala, la plataforma <strong>todo <br class="desktopTabletElement">
           en uno de marketing digital y ventas </strong> que te <br class="desktopTabletElement">
           ayudará a crecer de manera acelerada
         ',
       'textForm' => 'Recibe un tour guiado de Escala',
       'image' => App::setFilePath('/assets/images/illustrations/otto/otto-escala-cta-formulario-blogs.png'),
'img_alt' => 'Ilustración de Otto (mascota de Escala) con las manos arriba celebrando en referencia a invitar a las personas a registrarse en el formulario de contacto de los rtículos del blog',
       // 'setForm' => $setForm
   ];
 @endphp
 @bannerForms7_T1( $parameters )

 @endbannerForms7_T1


    {{-- @php
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


    @endarticlesBlog_T1 --}}


        </div>

    </div>






@endsection

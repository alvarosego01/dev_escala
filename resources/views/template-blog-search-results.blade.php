{{--
    Template Name: [B] Blog - Search results
--}}

@php
$link = $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
$escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');

$url_components = parse_url($escaped_link);

$params = array(
    'arg' => $_GET['arg'],
    'pag' => $_GET['pag']
);

$args = null;
$current_page = 1;
$query = null;


if (isset($params['arg']) && $params['arg'] != null) {
    $args = $params['arg'];
}
if (isset($params['pag']) && $params['pag'] != null) {
    $current_page = $params['pag'];
}

$per_page = 9;
$offset_start = 1;
$offset = ($current_page - 1) * $per_page + $offset_start;

if($args != null) {
    $query = [
        'post_type' => 'post',
        'posts_per_page' => -1,
        'order' => 'DESC',
        's' => $args,
    ];
}else{
    $query = [
        'post_type' => 'post',
        'posts_per_page' => -1,
        'order' => 'DESC',
    ];
}
$query = Posts::getPosts($query);

$totalPosts = $query->post_count;
$totalPages = $query->post_count / $per_page;
$totalPages = ceil($totalPages);

if($args != null) {
$query = [
    'post_type' => 'post',
    'posts_per_page' => $per_page,
    'paged' => $current_page,
    'offset' => $offset,
    'order' => 'DESC',
    's' => $args,
];
}else{
    $query = [
        'post_type' => 'post',
        'posts_per_page' => $per_page,
        'paged' => $current_page,
        'offset' => $offset,
        'order' => 'DESC',
    ];

}
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

    <div id="blog-search-results-bootstrap">

        <div class="sections">

            @php
                $title = '<span class="greenBlueColor">Últimas Publicaciones</span>';
                $title .= (isset( $args ) && $args != null)? ' "' .$args. '"' : '';
                $parameters = [
                    'posts' => $query,
                    'categoryTag' => false,
                    'classSection' => 'searchResultsBlog0',
                    'enableTitle' => true,
                    'paginateData' => $paginateData,
                    'titlePrincipal' => $title
                ];

            @endphp

            @articlesBlog_paginate_T1($parameters)
            @endarticlesBlog_paginate_T1



            @php
             $parameters = [
            'classSection' => 'searchResultsBlog1',
            'title' => '<span style="color: #A4E7EA">
                Impulsar el crecimiento de <br class="space">
                tu negocio con Escala
              </span>',
              'text' => '
                Estás a un clic de probar Escala, la plataforma <strong>todo <br class="DT_e">
                en uno de marketing digital y ventas </strong> que te <br class="DT_e">
                ayudará a crecer de manera acelerada
              ',
            'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
            'image' => App::setFilePath('/assets/images/illustrations/otto/otto-escala-cta-formulario-blogs.png'),
'img_alt' => 'Ilustración de Otto (mascota de Escala) con las manos arriba celebrando en referencia a invitar a las personas a registrarse en el formulario de contacto de los rtículos del blog',
            // 'setForm' => $setForm
        ];
      @endphp
      @bannerForms7_T1( $parameters )

      @endbannerForms7_T1



        </div>

    </div>








@endsection

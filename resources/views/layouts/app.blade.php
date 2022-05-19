@php

$index_page = ACF_CUSTOM::_getField('index_page');
$redirect = ACF_CUSTOM::_getField('cf7_redirect');
$redirect = strval($redirect);

$customClass = ACF_CUSTOM::_getField('custom_parent_class_section');

@endphp

@include('partials.head')


@if (isset($redirect) && $redirect != null)

@php
wp_localize_script(

    'redirectScript.js',
    'dataPHP',
    array(
        'redirect' =>  $redirect,
    )

);
@endphp

<input type="hidden" id="redirectParam" name="redirectParam" value="{{ $redirect }}">

@endif

<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css"
href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap"
type="text/css" media="all">

{{-- <link rel="stylesheet" href="{{ get_template_directory_uri() . '/../oceanwp-child/resources/assets/library/fontAwesome/css/all.min.css' }}"> --}}

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>

<div class="wrap container global typeBootstrap {{ $customClass }}" role="document">
    <div class="content">
        <main class="main">

            @include('layouts.headerBand')

            @yield('content')

        </main>
        @if (App\display_sidebar())
        <aside class="sidebar">
            @include('partials.sidebar')
        </aside>
        @endif
    </div>
</div>


@include('layouts.popup')


@include('partials.footer')




@php


$index_page = ACF_CUSTOM::_getField('index_page');

$redirect = ACF_CUSTOM::_getField('cf7_redirect');
$redirect = strval($redirect);

@endphp

@include('partials.head')


@if (isset($redirect) && $redirect != null)

@php

wp_localize_script(
    'main.js',
    'dataPHP',
    array(
        'redirect' =>  $redirect,
    )

);

@endphp

@endif


<div class="wrap container global typeBootstrap" role="document">
    <div class="content">
        <main class="main">
            @yield('content')
        </main>
        @if (App\display_sidebar())
            <aside class="sidebar">
                @include('partials.sidebar')
            </aside>
        @endif
    </div>
</div>

@php
get_footer();
@endphp

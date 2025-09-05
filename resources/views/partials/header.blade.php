@php

    $navBar = null;

    // Página principal del blog
    if (is_page() && get_post_type() == 'page' && get_permalink() == home_url('/blog/')) {
        $navBar = 'blog-global1';
    }
    // Entradas individuales del blog
    elseif (is_singular('post')) {
        $navBar = 'blog-global2';
    }
    // Otras páginas
    elseif (is_page()) {
        $navBar = ACF_CUSTOM::_getField('nav_settings');
    }



@endphp



{{-- navBar_default --}}
{{-- navBar_blog --}}
{{-- navBar_blog_2 --}}

{{-- navBar_landings --}}


@if (!$navBar || $navBar == '' || $navBar == null || $navBar == 'principal-global1')

    @navBar_default()
        @slot('classSection')
            {{ $navBar }}
        @endslot
    @endnavBar_default

@endif

@if ($navBar == 'principal-global-extended')

    @navBar_default_extended()
        @slot('classSection')
            {{ $navBar }}
        @endslot
    @endnavBar_default_extended

@endif

@if ($navBar == 'principal-global-extended-trasp')

    @php
        $p = array(
            'transparent' => true,
            'classSection' => $navBar . ' transparent default',
            'type' => 'default'
        )
    @endphp

    @navBar_default_extended($p)
    @endnavBar_default_extended

@endif
@if ($navBar == 'principal-global-extended-trasp-white')

    @php
        $p = array(
            'transparent' => true,
            'classSection' => $navBar . ' transparent white',
            'type' => 'white'
        )
    @endphp


    @navBar_default_extended($p)
    @endnavBar_default_extended

@endif

@if ($navBar == 'principal-global-landing-trasp-white')

    @php
        $p = array(
            'transparent' => true,
            'classSection' => $navBar . ' transparent white',
            'type' => 'default'
        )
    @endphp

    @navBar_default_landing($p)
    @endnavBar_default_landing

@endif
@if ($navBar == 'principal-global-landing-trasp-default')

    @php
        $p = array(
            'transparent' => true,
            'classSection' => $navBar . ' transparent default',
            'type' => 'default'
        )
    @endphp

    @navBar_default_landing($p)
    @endnavBar_default_landing

@endif
@if ($navBar == 'principal-global-landing-trasp-light')

    @php
        $p = array(
            'transparent' => true,
            'classSection' => $navBar . ' transparent light',
            'type' => 'light'
        )
    @endphp

    @navBar_default_landing($p)
    @endnavBar_default_landing

@endif

@if ($navBar == 'blog-global1')

    @navBar_blog()
        @slot('classSection')
            {{ $navBar }}
        @endslot
    @endnavBar_blog

@endif

@if ($navBar == 'blog-global2')

    @navBar_blog2()
        @slot('classSection')
            {{ $navBar }}
        @endslot
    @endnavBar_blog2

@endif

@if ($navBar == 'landing-global1')

    @landing_global1(
        [
            'classSection' => $navBar
        ]
    )
    @endlanding_global1

@endif

@if ($navBar == 'landing-global2')

    @landing_global2()
        @slot('classSection')
            {{ $navBar }}
        @endslot
    @endlanding_global2

@endif
@if ($navBar == 'landing-global3')

    @landing_global3()
        @slot('classSection')
            {{ $navBar }}
        @endslot
    @endlanding_global3

@endif

{{-- @if ($navBar == 'landing-global_transp_light')

    @landing_global1(
        [
            'classSection' => $navBar . ' transparent light',
            'type' => 'light',

        ]
    )
    @endlanding_global1

@endif

@if ($navBar == 'landing-global_transp_default')

    @landing_global1(
        [
            'classSection' => $navBar . ' transparent default',
            'type' => 'default',
        ]
    )
    @endlanding_global1

@endif --}}

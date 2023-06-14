@php

    $navBar = null;

    if (is_page() != null && is_page() == 1 && get_post_type() == 'page') {
        $navBar = ACF_CUSTOM::_getField('nav_settings');
    } elseif (is_singular() != null && is_singular() == 1 && get_post_type() == 'post') {
        # code...
        $idPostParent = url_to_postid('blog');
        $navBar = ACF_CUSTOM::_getField('nav_settings', $idPostParent);
    } elseif ( is_singular() != null && is_singular() == 1 && get_post_type() == 'caso-de-exito' ) {
      # code...
      $idPostParent = url_to_postid('casos-de-exito');
      $navBar = ACF_CUSTOM::_getField('nav_settings', $idPostParent );

    }



@endphp




{{-- navBar_default --}}
{{-- navBar_blog --}}
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
            'type' => 'white'
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

@if ($navBar == 'landing-global1')

    @landing_global1()
        @slot('classSection')
            {{ $navBar }}
        @endslot
    @endlanding_global1

@endif

@if ($navBar == 'landing-global2')

    @landing_global2()
        @slot('classSection')
            {{ $navBar }}
        @endslot
    @endlanding_global2

@endif

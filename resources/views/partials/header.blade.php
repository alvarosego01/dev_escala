
@php

$navBar = ACF_CUSTOM::_getField('nav_settings');


@endphp


{{-- navBar_default --}}
{{-- navBar_blog --}}
{{-- navBar_landings --}}


@if (!$navBar || $navBar == '' || $navBar == null || $navBar == 'principal-global1')

    @navBar_default()

    @slot('classSection')
      {{$navBar}}
    @endslot

    @endnavBar_default

@endif

@if ($navBar == 'blog-global1')

    @navBar_blog()

      @slot('classSection')
      {{$navBar}}
      @endslot

    @endnavBar_blog

@endif

@if ( $navBar == 'landing-global1' || $navBar == 'landing-global2' )

    @navBar_landings()

    @slot('classSection')
    {{$navBar}}
    @endslot

    @endnavBar_landings

@endif





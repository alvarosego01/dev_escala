{{-- <header class="banner customHeader">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif

    </nav>
  </div>
</header> --}}



{{-- global1 --}}
{{-- global2 --}}
{{-- global_blog --}}
{{-- landing_small --}}
{{-- landing_unique_logo --}}

@php

$navBar = ACF_CUSTOM::_getField('nav_settings');
@endphp

@if ($navBar || $navBar == '' || $navBar == null || $global1 == 'global1')

    @navBar_default_T1()

    @slot('classSection')
        navBar_custom_defult1
    @endslot

    @endnavBar_default_T1

@endif

@if ($global2 == 'global2')

    @navBar_default_T2()
    @endnavBar_default_T2

@endif

@if ($global_blog == 'global_blog')

    @navBar_blog_T1()
    @endnavBar_blog_T1

@endif

@if ($landing_small == 'landing_small')

    @navBar_landing_small_T1()
    @endnavBar_landing_small_T1

@endif

@if ($landing_unique_logo == 'landing_unique_logo')

    @navBar_landing_logo_T1()
    @endnavBar_landing_logo_T1

@endif

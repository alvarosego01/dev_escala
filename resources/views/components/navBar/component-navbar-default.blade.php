@php

$navBar_ID = ACF_CUSTOM::_getField('nav_global');

@endphp


<header id="masthead"
    class="customHeader component-header-default navBar_default customSection fullWidth {{ $classSection }}">


    <nav class="principal navbar navbar-expand-md">

        <div class="section-row">


            @if (has_nav_menu('header-top'))
                <div class="desktopElement container-fluid sct1">

                    <div class=" menusSectionTop" id="main-menu-top">

                        {!! wp_nav_menu([
    'theme_location' => 'header-top',
    'container' => false,
    'menu_class' => '',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0 %2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => new \App\wp_bootstrap5_navwalker(),
]) !!}


            </div>

            </div>
            @endif

        <div class="container-fluid sct2">

            <div class="logo">
                <a class="navbar-brand" href="{!! home_url() !!}">
                    <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                    <img src="{!! App::setFilePath('/assets/images/logos/escala_logo.svg') !!}" alt="Logo" class="logo-img">
                </a>
            </div>


                <div class="mobileElement">

                <div style="display: flex; flex-direction: row" class="buttonSections">


                    {!! wp_nav_menu([
    'menu' => $navBar_ID,
    'container' => false,
    'menu_class' => 'buttonsCTA',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0 %2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => new \App\wp_bootstrap5_navwalker(),
    ]) !!}


                    <button onclick="_openSideNav('open')" class="mobileElement toggleSideMenu" type="button">

                        <i class="fas fa-bars    "></i>

                    </button>

                </div>
            </div>
            <div class="desktopElement">
                <div class="menusSection" id="main-menu">



                    {!! wp_nav_menu([
    'menu' => $navBar_ID,
    'container' => false,
    'menu_class' => '',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0 %2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => new \App\wp_bootstrap5_navwalker(),
]) !!}




                </div>
            </div>


        </div>
        </div>
    </nav>


</header>

{{-- desktopElement --}}
{{-- mobileElement --}}


<div class=" animate__animated animate__faster" id="sideNavBar">



    <nav class="animate__animated animate__faster principal navbar">

        <div class="section-row">

            <div class="closeButtonSideBar">

                <button onclick="_openSideNav('close')" class="closeButton">
                    <i class="fas fa-times    "></i>
                </button>

            </div>

            <div class="mobileSmallElement logo">
                <a class="navbar-brand" href="{!! home_url() !!}">
                    <img src="{!! App::setFilePath('/assets/images/logos/escala_logo.svg') !!}" alt="Logo" class="logo-img">
                </a>
            </div>

            <div class="containSideBar">

                <div class="container-fluid sct1">

                    <div class="menusSectionTop" id="main-menu-top">

                        {!! wp_nav_menu([
    'theme_location' => 'header-top',
    'container' => false,
    'menu_class' => '',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0 %2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => new \App\wp_bootstrap5_navwalker(),
]) !!}


                    </div>

                </div>

                <div class="container-fluid sct2">


                    <div class="menusSection">

                        {!! wp_nav_menu([
    'menu' => $navBar_ID,
    'container' => false,
    'menu_class' => '',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0 %2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => new \App\wp_bootstrap5_navwalker(),
]) !!}

                    </div>

                </div>
            </div>


        </div>
</div>

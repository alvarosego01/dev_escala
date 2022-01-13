

<header id="masthead" class="customHeader component-header-landing landing_global1 customSection fullWidth {{ $classSection }}">


    <nav class="principal navbar navbar-expand-md">

        <div class="section-row">



            <div class="container-fluid sct2">

                <div class="logo">
                    <a class="navbar-brand" href="{!! home_url() !!}">
                        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        <img src="{!! App::setFilePath('/assets/images/logos/escala_logo.svg') !!}" alt="Logo" class="logo-img">
                    </a>
                </div>



            {{-- <button onclick="_openSideNav('open')" class="mobileElement toggleSideMenu" type="button" >

                <i class="fas fa-bars    "></i>

            </button> --}}

            <div class=" menusSection" id="main-menu">

                {!! wp_nav_menu([
                    'theme_location' => 'landing-global1',
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
    </nav>


</header>

{{-- desktopElement --}}
{{-- mobileElement --}}





{{-- <div class="animate__animated animate__faster" id="sideNavBar">



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

            <div class="container-fluid sct2">


                <div class="menusSection">

                    {!! wp_nav_menu([
                        'theme_location' => 'landing-global1',
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
</div> --}}



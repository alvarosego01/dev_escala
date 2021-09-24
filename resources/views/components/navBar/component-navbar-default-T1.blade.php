<header id="masthead" class="customHeader component-header-default-T1 customSection fullWidth {{ $classSection }}">


    <nav class="principal navbar navbar-expand-md">

        <div class="section-row">


            <div class="container-fluid sct1">

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

            <div class="container-fluid sct2">

                <div class="logo">
                    <a class="navbar-brand" href="{!! home_url() !!}">
                        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        <img src="{!! App::setFilePath('/assets/images/logos/escala_logo.svg') !!}" alt="Logo" class="logo-img">
                    </a>
                </div>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="menusSection" id="main-menu">

                    {!! wp_nav_menu([
                        'theme_location' => 'principal-global1',
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

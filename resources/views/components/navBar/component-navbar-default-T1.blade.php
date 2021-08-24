

<header id="masthead" class="customHeader component-header-default-T1 customSection fullWidth {{ $classSection }}">




  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main-menu">

            {!! wp_nav_menu([
                'theme_location' => 'principal-global1',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 3,
                'walker' => new \App\wp_bootstrap5_navwalker()]
            ) !!}


        </div>
    </div>
</nav>


</header>
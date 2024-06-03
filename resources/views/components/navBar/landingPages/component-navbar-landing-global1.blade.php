

@php

$navBar_ID = ACF_CUSTOM::_getField('nav_global');


@endphp




<header id="masthead" class="customHeader component-header-landing landing_global1 customSection fullWidth {{ $classSection }}">


    <nav class="principal navbar navbar-expand-md">

        <div class="section-row">

            <div class="container-fluid sct2">

                <div class="logo">
                    <span class="navbar-brand" >
                        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        {{-- <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img"> --}}

                        @if (isset($type) && $type === 'default')
                            <a class="navbar-brand normal">
                            <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">
                            </a>
                        @elseif (isset($type) && $type === 'light')
                            <a class="navbar-brand normal">
                            <img src="{!! App::setFilePath('/assets/images/logos/logoEscalaWhite.svg') !!}" alt="Logo" class="logo-img">
                            </a>
                        @else
                          <a class="navbar-brand normal">
                            <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">
                            </a>
                        @endif

                    </span>
                </div>


                <div class="MT_e">

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


                        {{-- <button onclick="_openSideNav('open')" class="MT_e toggleSideMenu" type="button">

                            <i class="fas fa-bars "></i>

                        </button>
     --}}
                    </div>
                </div>
                <div class="D_e">
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





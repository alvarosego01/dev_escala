@php

    $navBar_ID = ACF_CUSTOM::_getField('nav_global');

@endphp



<header id="masthead"
    class="customHeader component-header-default-extended-landing navBar_default-extended-landing customSection fullWidth {{ $classSection }}">

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
                            <img src="{!! App::setFilePath('/assets/images/logos/logo_all_white.png') !!}" alt="Logo" class="logo-img">
                            </a>
                        @else
                          <a class="navbar-brand normal">
                            <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">
                            </a>
                        @endif

                           <a class="fixed navbar-brand" href="{!! home_url() !!}">
                        <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">
                    </a>

                    </span>
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


                        {{-- <button onclick="_openSideNav('open')" class="mobileElement toggleSideMenu" type="button">

                            <i class="fas fa-bars "></i>

                        </button>
     --}}
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





{{-- @if (isset($type) && $type === 'white')

    <script type="text/javascript">

        var img = '{!! App::setFilePath('/assets/images/illustrations/others/icon_user_blue.png') !!}';

        jQuery('ul#menu-b-principal-top-whatsapp-login-language li#menu-item-7225 a img').attr('src', img);
        jQuery('ul#menu-main-top-v2 li#menu-item-1620 a img').attr('src', img);

    </script>

@endif --}}
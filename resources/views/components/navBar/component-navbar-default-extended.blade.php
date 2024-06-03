@php

    $navBar_ID = ACF_CUSTOM::_getField('nav_global');

@endphp



@php
    // $prueba = wp_get_nav_menu_items($navBar_ID);

    // $prueba = App::wp_get_menu_array($navBar_ID);

    // $menu_nav_extended = App::create_bootstrap_menu($navBar_ID, $classSection);

    //     $prueba = wp_nav_menu([
    //         'menu' => $navBar_ID
    // ]);

@endphp
{{-- <pre>
    @php
        // print_r($prueba);
    @endphp
</pre> --}}

<header id="masthead"
    class="customHeader component-header-default-extended navBar_default-extended customSection fullWidth {{ $classSection }}">


    <nav class="principal navbar navbar-expand-md">

        <div class="section-row">


            @if (has_nav_menu('header-top'))
                <div class="D_e container-fluid sct1">

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


                    @if (isset($transparent) && $transparent === true)
                        @if (isset($type) && $type === 'default')
                            <a class="navbar-brand normal" href="{!! home_url() !!}">
                            <img src="{!! App::setFilePath('/assets/images/logos/logotipo-escala-blanco.png') !!}" alt="Logo" class="logo-img">
                            </a>
                        @endif
                        @if (isset($type) && $type === 'white')
                            <a class="navbar-brand normal" href="{!! home_url() !!}">
                            <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">
                            </a>
                        @endif
                    <a class="fixed navbar-brand" href="{!! home_url() !!}">
                        <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">
                    </a>
                    @else
                      <a class="navbar-brand normal" href="{!! home_url() !!}">
                      <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">
                    </a>
                    @endif

                </div>


                <div class="MT_e">

                    <div style="display: flex; flex-direction: row" class="buttonSections">

                        {{--
                        {!! wp_nav_menu([
                            'menu' => $navBar_ID,
                            'container' => false,
                            'menu_class' => 'buttonsCTA',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 3,
                            'walker' => new \App\wp_bootstrap5_navwalker(),
                        ]) !!}

                        --}}

                        @php
                            $menu_nav_extended = App::create_bootstrap_menu($navBar_ID, $classSection, 'buttonsCTA');
                        @endphp

                    {!! $menu_nav_extended; !!}


                        <button onclick="_openSideNav('open')" class="MT_e toggleSideMenu" type="button">

                            <i class="fas fa-bars "></i>

                        </button>

                    </div>
                </div>
                <div class="D_e">
                    <div class="menusSection" id="main-menu">



                        {{-- {!! wp_nav_menu([
                            'menu' => $navBar_ID,
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 3,
                            'walker' => new \App\wp_bootstrap5_navwalker(),
                        ]) !!} --}}

                        @php
                            $menu_nav_extended = App::create_bootstrap_menu($navBar_ID, $classSection);
                        @endphp

                        {!! $menu_nav_extended; !!}



                    </div>
                </div>


            </div>
        </div>
    </nav>


</header>

{{-- D_e --}}
{{-- MT_e --}}


<div class=" animate__animated animate__faster" id="sideNavBar">



    <nav class="animate__animated animate__faster principal navbar">

        <div class="section-row">

            <div class="closeButtonSideBar">

                <button onclick="_openSideNav('close')" class="closeButton">
                    <i class="fas fa-times "></i>
                </button>

            </div>

            <div class="M_e logo">
                <a class="navbar-brand" href="{!! home_url() !!}">
                    <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">
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


@popup_casos_uso()
@endpopup_casos_uso



@if (isset($type) && $type === 'white')

    <script type="text/javascript">

        var img = '{!! App::setFilePath('/assets/images/illustrations/others/icon_user_blue.png') !!}';

        jQuery('ul#menu-b-principal-top-whatsapp-login-language li#menu-item-7225 a img').attr('src', img);
        jQuery('ul#menu-main-top-v2 li#menu-item-1620 a img').attr('src', img);

    </script>

@endif
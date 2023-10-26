@php

    $navBar_ID = ACF_CUSTOM::_getField('nav_global');

@endphp



<header id="masthead"
    class="customHeader component-header-default-extended-landing navBar_default-extended-landing customSection fullWidth {{ $classSection }}">

    <nav class="principal navbar navbar-expand-md">

        <div class="section-row">

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


                {{-- <div class="mobileElement">

                    <div style="display: flex; flex-direction: row" class="buttonSections">

                        @php
                            $menu_nav_extended = App::create_bootstrap_menu($navBar_ID, $classSection, 'buttonsCTA');
                        @endphp

                    {!! $menu_nav_extended; !!}


                        <button onclick="_openSideNav('open')" class="mobileElement toggleSideMenu" type="button">

                            <i class="fas fa-bars "></i>

                        </button>

                    </div>
                </div>
                <div class="desktopElement">
                    <div class="menusSection" id="main-menu">



                        @php
                            $menu_nav_extended = App::create_bootstrap_menu($navBar_ID, $classSection);
                        @endphp

                        {!! $menu_nav_extended; !!}



                    </div>
                </div> --}}


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
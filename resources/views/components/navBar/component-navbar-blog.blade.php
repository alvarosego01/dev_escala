@php

if (is_page() != null && is_page() == 1 && get_post_type() == 'page') {
    $navBar_ID = ACF_CUSTOM::_getField('nav_global');
} elseif (is_singular() != null && is_singular() == 1 && get_post_type() == 'post') {
    # code...

    $idPostParent = url_to_postid('blog');
    $navBar_ID = ACF_CUSTOM::_getField('nav_global', $idPostParent);

} else {
    $navBar_ID = ACF_CUSTOM::_getField('nav_global');
}

@endphp



<header id="masthead"
    class="customHeader component-header-blog navBar_blog customSection fullWidth {{ $classSection }}">


    <nav class="principal navbar navbar-expand-md">

        <div class="section-row">


            <div class="container-fluid sct2">

                <div class="logo">
                    <a class="navbar-brand" href="{!! home_url() !!}/blog">
                        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        <img src="{!! App::setFilePath('/assets/images/logos/logo-escala-blog-simple.svg') !!}" alt="Logo" class="logo-img">
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

                    <div class="searchContainer">

                        <div class="containElements">
                            <div class="container-2">
                                <form action="{{App::setTypeUrl().'/blog-search'}}" method="get">

                                <span class="icon"><i class="fa fa-search"></i></span>
                                <input type="search" name="arg" id="search" placeholder="Escribe aquí una palabra clave" />
                                <input type="hidden" name="pag" value="1" />

                                </form>
                            </div>
                          </div>

                    </div>

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



    <nav id="innerNavBar" class="animate__animated animate__faster principal navbar">

        <div class="section-row">

            <div class="closeButtonSideBar">

                <button id="closeSidebarButton" onclick="_openSideNav('close')" class="closeButton">
                    <i class="fas fa-times    "></i>
                </button>

            </div>

            <div class="mobileSmallElement logo">
                <a class="navbar-brand" href="{!! home_url() !!}">
                    <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">
                </a>
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

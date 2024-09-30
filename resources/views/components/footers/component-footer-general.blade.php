@if (isset($footerTemplate_id) && $footerTemplate_id != null)


    <footer id="bootstrap_PiePagina" class="content-info custom_PiePagina bootstrap_PiePagina principal_PiePagina1">

        <div class="section-row">

            <div class="columns row">

                <div class="columnItem c1">


                    @php
                        $pie_pagina_logo_1c_3c = ACF_CUSTOM::_getField('pie_pagina_logo_1c_3c', $footerTemplate_id);
                    @endphp
                    @if (isset($pie_pagina_logo_1c_3c) && $pie_pagina_logo_1c_3c != null)
                        <div class="containerImage logoPiePagina">
                            @php
                                $i = $pie_pagina_logo_1c_3c;
                                $i = $i['url'];
                            @endphp

                            <img src="{{ $i }}">

                        </div>
                    @endif


                    @php
                        $pie_pagina_texto_1c_3c = ACF_CUSTOM::_getField('pie_pagina_texto_1c_3c', $footerTemplate_id);
                    @endphp
                    @if (isset($pie_pagina_texto_1c_3c) && $pie_pagina_texto_1c_3c != null)
                        <p class="text">

                            {!! $pie_pagina_texto_1c_3c !!}

                        </p>
                    @endif

                    @php
                        $enable_menu_1c_3c = ACF_CUSTOM::_getField('enable_menu_1c_3c', $footerTemplate_id);
                    @endphp

                    @if (isset($enable_menu_1c_3c) && $enable_menu_1c_3c == 1)
                        <div class="menuContainer menu-b-social-networks-container">

                            @php
                                $title_menu_1c_3c = ACF_CUSTOM::_getField('title_menu_1c_3c', $footerTemplate_id);
                            @endphp
                            @if (isset($title_menu_1c_3c) && $title_menu_1c_3c != null)
                                <h3 class="titleMenu">
                                    {!! $title_menu_1c_3c !!}
                                </h3>
                            @endif


                            @php
                                $menu_1c_3c = ACF_CUSTOM::_getField('menu_1c_3c', $footerTemplate_id);
                            @endphp
                            @if (isset($menu_1c_3c) && $menu_1c_3c != null)
                                {!! wp_nav_menu([
    'menu' => $menu_1c_3c,
    'container' => false,
    'menu_class' => 'menu',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0 %2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => new \App\wp_bootstrap5_navwalker(),
]) !!}
                            @endif

                        </div>
                    @endif


                </div>
                <div class="columnItem c2">

                    @php
                        $enable_menu_2c_3c = ACF_CUSTOM::_getField('enable_menu_2c_3c', $footerTemplate_id);
                    @endphp

                    @if (isset($enable_menu_2c_3c) && $enable_menu_2c_3c == 1)
                        <div class="menuContainer">

                            @php
                                $title_menu_2c_3c = ACF_CUSTOM::_getField('title_menu_2c_3c', $footerTemplate_id);
                            @endphp
                            @if (isset($title_menu_2c_3c) && $title_menu_2c_3c != null)
                                <h3 class="titleMenu">
                                    {!! $title_menu_2c_3c !!}
                                </h3>
                            @endif


                            @php
                                $menu_2c_3c = ACF_CUSTOM::_getField('menu_2c_3c', $footerTemplate_id);
                            @endphp
                            @if (isset($menu_2c_3c) && $menu_2c_3c != null)
                                {!! wp_nav_menu([
    'menu' => $menu_2c_3c,
    'container' => false,
    'menu_class' => 'menu',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0 %2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => new \App\wp_bootstrap5_navwalker(),
]) !!}
                            @endif

                        </div>
                    @endif

                </div>

                <div class="columnItem c3">

                    @php
                        $enable_menu_3c_3c = ACF_CUSTOM::_getField('enable_menu_3c_3c', $footerTemplate_id);
                    @endphp

                    @if (isset($enable_menu_3c_3c) && $enable_menu_3c_3c == 1)
                        <div class="menuContainer">

                            @php
                                $title_menu_3c_3c = ACF_CUSTOM::_getField('title_menu_3c_3c', $footerTemplate_id);
                            @endphp
                            @if (isset($title_menu_3c_3c) && $title_menu_3c_3c != null)
                                <h3 class="titleMenu">
                                    {!! $title_menu_3c_3c !!}
                                </h3>
                            @endif


                            @php
                                $menu_3c_3c = ACF_CUSTOM::_getField('menu_3c_3c', $footerTemplate_id);
                            @endphp
                            @if (isset($menu_3c_3c) && $menu_3c_3c != null)
                                {!! wp_nav_menu([
    'menu' => $menu_3c_3c,
    'container' => false,
    'menu_class' => 'menu',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul id="%1$s" class="navbar-nav  mb-2 mb-md-0 %2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => new \App\wp_bootstrap5_navwalker(),
]) !!}
                            @endif

                        </div>
                    @endif


                    {{-- @php
                        $pie_pagina_logo_3c_3c = ACF_CUSTOM::_getField('pie_pagina_logo_3c_3c', $footerTemplate_id);
                    @endphp
                    @if (isset($pie_pagina_logo_3c_3c) && $pie_pagina_logo_3c_3c != null)
                        <div class="containerImage logoTrustPilot">
                            @php
                                $i = $pie_pagina_logo_3c_3c;
                                $i = $i['url'];
                            @endphp

                            <img src="{{ $i }}">

                        </div>
                    @endif --}}

                    <div class="containerImage logoTrustPilot desktop">


                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/google_logo_footer.png') !!}" alt="Ilustracion logo de google reviews">

                    </div>

                    <div class="containerImage logoTrustPilot mobi">


                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/google_logo_footer.png') !!}" alt="Ilustracion logo de google reviews">

                    </div>



                </div>

            </div>

            @php
                $pie_pagina_texto_base_3c = ACF_CUSTOM::_getField('pie_pagina_texto_base_3c', $footerTemplate_id);
            @endphp
            @if (isset($pie_pagina_texto_base_3c) && $pie_pagina_texto_base_3c != null)
                <div class="bottomPiePagina">

                    <p class="text">

                        {!! $pie_pagina_texto_base_3c !!}

                    </p>

                </div>
            @endif

        </div>

    </footer>


@endif

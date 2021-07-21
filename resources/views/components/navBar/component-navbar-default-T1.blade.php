

<header id="masthead" class="customHeader component-header-default-T1 customSection fullWidth {{ $classSection }}">

    <div class="section-row">
        <section class="innerSectionElement sct1">

            <div class="groupElements row">


            <nav class="nav" role="navigation">
                {!! MenuSettings::_getMenu( 'Header-top-menu', 'customNavBarDefaultT1' )!!}
            </nav>


        </div>

        </section>
        <section class="innerSectionElement sct2">

            <div class="groupElements row">

            <div class="logo">
                <a href="{!! home_url() !!}">
                    <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                    <img src="{!! App::setFilePath('/assets/images/logos/escala_logo.svg') !!}" alt="Logo" class="logo-img">
                </a>
            </div>



            {{-- <nav class="nav" role="navigation">
                {!! MenuSettings::_getMenu( 'Header-top-menu', 'customNavBarDefaultT1' )!!}
            </nav> --}}


        </div>

        </section>

</div>



</header>
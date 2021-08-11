

  <header id="masthead" class="customHeader component-header-default-T1 customSection fullWidth {{ $classSection }}">

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container-fluid sct1">

    @if (wp_get_nav_menu_items(get_nav_menu_locations()['header-top']))
        {!! MenuSettings::_getMenu( 'header-top', 'customNavBarDefaultT1' )!!}
  @endif


  </div>

  <div class="container-fluid sct2">

  <a class="navbar-brand" href="{!! home_url() !!}">
      <img src="{!! App::setFilePath('/assets/images/logos/escala_logo.svg') !!}" alt="Logo" class="logo-img">
  </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>

</nav>

</header>

{{-- <header id="masthead" class="customHeader component-header-default-T1 customSection fullWidth {{ $classSection }}">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">


        <div class="section-row">
        <section class="innerSectionElement sct1">

            <div class="groupElements row">

              @if (wp_get_nav_menu_items(get_nav_menu_locations()['header-top']))
                <nav class="nav header-top" role="navigation">
                    {!! MenuSettings::_getMenu( 'header-top', 'customNavBarDefaultT1' )!!}
                </nav>
              @endif


            </div>

        </section>
        <section class="innerSectionElement sct2">

            <div class="groupElements">

                <div class="logo">
                    <a class="navbar-brand" href="{!! home_url() !!}">
                        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        <img src="{!! App::setFilePath('/assets/images/logos/escala_logo.svg') !!}" alt="Logo" class="logo-img">
                    </a>
                </div>


                <div class="itemsMenu">

                  @if (wp_get_nav_menu_items(get_nav_menu_locations()['principal-global1']))
                    <div class="nav principal-global1" role="navigation">
                        {!! MenuSettings::_getMenu( 'principal-global1', 'customNavBarDefaultT1', 'customNavBarDefaultT1' )!!}
                    </div>
                  @endif

                    @if (wp_get_nav_menu_items(get_nav_menu_locations()['extra-buttons1']))
                    <div class="nav extra-buttons" role="navigation">
                      {!! MenuSettings::_getMenu( 'extra-buttons1', '', '', 'customNavBarDefaultT1' )!!}
                    </div>
                    @endif
                </div>


            </div>

        </section>

    </div>
    </div>



  </nav>

</header> --}}
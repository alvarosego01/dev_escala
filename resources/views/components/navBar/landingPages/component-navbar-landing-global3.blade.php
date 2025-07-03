<header id="masthead" class="customHeader component-header-landing landing_global3 customSection fullWidth {{ $classSection }}">


    <nav class="principal navbar navbar-expand-md">

        <div class="section-row">



            <div class="container-fluid sct2">

                <div class="logo">
                    <span class="navbar-brand">
                        @if (isset($type) && $type === 'default')
                        <a class="navbar-brand normal">
                            <img src="{!! App::setFilePath('/assets/images/logos/log-escala-blanco-2025.webp') !!}"
                                alt="Logo" class="logo-img default-logo">
                        </a>

                        @else
                        <a class="navbar-brand normal">
                            <img src="{!! App::setFilePath('/assets/images/logos/log-escala-blanco-2025.webp') !!}"
                                alt="Logo" class="logo-img default-logo">
                        </a>
                        @endif

                        <!-- Logo que se mostrará cuando el nav tenga la clase fixedNav -->
                        <a class="fixed navbar-brand">
                            <img src="{!! App::setFilePath('/assets/images/logos/log-escala-oscuro-2025.webp') !!}"
                                alt="Logo" class="logo-img fixed-logo" style="display: none;">
                        </a>
                    </span>

                </div>

                <script>
                    jQuery(document).ready(function($) {
                        var $defaultLogo = $(".landing_global3 .default-logo"); // Logo blanco (normal)
                        var $fixedLogo = $(".landing_global3 .fixed-logo"); // Logo oscuro cuando hay scroll

                        $(window).on("scroll", function() {
                            if ($(window).scrollTop() === 0) {
                                $defaultLogo.show();
                                $fixedLogo.hide();
                            } else {
                                $defaultLogo.hide();
                                $fixedLogo.show();
                            }
                        });

                        // Ejecutar al cargar la página para mostrar el logo correcto
                        if ($(window).scrollTop() === 0) {
                            $defaultLogo.show();
                            $fixedLogo.hide();
                        } else {
                            $defaultLogo.hide();
                            $fixedLogo.show();
                        }
                    });
                </script>




            </div>
        </div>
    </nav>


</header>
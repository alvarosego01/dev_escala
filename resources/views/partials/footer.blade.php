@php
// bootstrap_pie_pagina_settings_1c_3c
$idFooter = null;
if (is_page() != null && is_page() == 1 && get_post_type() == 'page') {
    $idFooter = get_the_ID();
} elseif (is_singular() != null && is_singular() == 1 && get_post_type() == 'post') {
    # code...
    $idFooter = url_to_postid('blog');
} else {
    $idFooter = get_the_ID();
}

@endphp

@php
$typeFooter = ACF_CUSTOM::_getField('pie_pagina_settings', $idFooter);
@endphp



@if (isset($typeFooter) && $typeFooter != 'elementor_pie_pagina')

    @if (isset($typeFooter) && $typeFooter == 'bootstrap_pie_pagina')
        @php
            wp_footer();
        @endphp

        @php
            $footerTemplate_id = ACF_CUSTOM::_getField('bootstrap_pie_pagina_types', $idFooter);
        @endphp

        @if (isset($footerTemplate_id) && $footerTemplate_id != null)

            @php
                $footerTemplate = ACF_CUSTOM::_getField('bootstrap_pie_pagina_template', $footerTemplate_id);
            @endphp



            @if (isset($footerTemplate) && $footerTemplate == 'pie_pagina_bootstrap_general_t1')
                @php
                    $parameters = array(
                        'footerTemplate_id' => $footerTemplate_id
                    )
                @endphp

                @piePagina_general( $parameters )
                @endpiePagina_general

            @endif

        @endif


        {{-- <footer id="bootstrap_PiePagina" class="content-info custom_PiePagina bootstrap_PiePagina principal_PiePagina1">

            <div class="section-row">

                @php

                    dynamic_sidebar('PiePagina_general_1');

                @endphp

            </div>

        </footer> --}}





    @endif

@endif


@if (!isset($typeFooter) || (isset($typeFooter) && $typeFooter == 'elementor_pie_pagina'))
    @php

        get_footer();

    @endphp
@endif

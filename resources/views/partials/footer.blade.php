@php

$typeFooter = null;
if (is_page() != null && is_page() == 1 && get_post_type() == 'page') {
    $typeFooter = ACF_CUSTOM::_getField('piePagina_settings');
} elseif (is_singular() != null && is_singular() == 1 && get_post_type() == 'post') {
    # code...
    $idPostParent = url_to_postid('blog');
    $typeFooter = ACF_CUSTOM::_getField('piePagina_settings', $idPostParent);
} else {
    $typeFooter = ACF_CUSTOM::_getField('piePagina_settings');
}

@endphp


@if (isset($typeFooter) && $typeFooter != 'elementor_piePagina')

    @if (isset($typeFooter) && $typeFooter == 'principal-piePagina1')
        @php

            wp_footer();

        @endphp

        <footer id="bootstrapFooter" class="content-info customFooter bootstrapFooter principal-footer1">

            <div class="section-row">

                @php dynamic_sidebar('sidebar-footer') @endphp

            </div>

        </footer>

    @endif
@endif


@if (!isset($typeFooter) || (isset($typeFooter) && $typeFooter == 'elementor_piePagina'))
    @php

        get_footer();

    @endphp
@endif



{{-- @php

        get_footer();

    @endphp --}}

@php

$typeFooter = null;
if (is_page() != null && is_page() == 1 && get_post_type() == 'page') {
    $typeFooter = ACF_CUSTOM::_getField('footBoots_settings');
} elseif (is_singular() != null && is_singular() == 1 && get_post_type() == 'post') {
    # code...
    $idPostParent = url_to_postid('blog');
    $typeFooter = ACF_CUSTOM::_getField('footBoots_settings', $idPostParent);
} else {
    $typeFooter = ACF_CUSTOM::_getField('footBoots_settings');
}

@endphp


@if (isset($typeFooter) && $typeFooter != 'elementor_foot')

    @if (isset($typeFooter) && $typeFooter == 'principal-footBoots1')
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


@if (!isset($typeFooter) || (isset($typeFooter) && $typeFooter == 'elementor_foot'))
    @php

        get_footer();

    @endphp
@endif



{{-- @php

        get_footer();

    @endphp --}}

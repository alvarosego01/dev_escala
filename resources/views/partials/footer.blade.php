

@php

$typeFooter = null;
if (is_page() != null && is_page() == 1 && get_post_type() == 'page') {
    $typeFooter = ACF_CUSTOM::_getField('footer_settings');
} elseif (is_singular() != null && is_singular() == 1 && get_post_type() == 'post') {
    # code...
    $idPostParent = url_to_postid('blog');
    $typeFooter = ACF_CUSTOM::_getField('footer_settings', $idPostParent);
} else {
    $typeFooter = ACF_CUSTOM::_getField('footer_settings');
}

@endphp

@if (isset($typeFooter) && $typeFooter != 'elementor_footer' )

@if (isset($typeFooter) && $typeFooter == 'principal-footer1' )

@php
    wp_footer();

    // get_footer();



@endphp
<footer id="bootstrapFooter" class="content-info customFooter bootstrapFooter principal-footer1">

  <div class="section-row">
      @php dynamic_sidebar('sidebar-footer') @endphp
  </div>

</footer>


@endif
@endif


@if (!isset($typeFooter) || (isset($typeFooter) && $typeFooter == 'elementor_footer'))
    @php

        get_footer();

    @endphp
@endif

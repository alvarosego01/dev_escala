
@php
get_footer();
@endphp

{{-- <footer class="content-info">



  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>





@php

    $typeFooter = null;
    if( is_page() != null && is_page() == 1 && get_post_type() == 'page' ){

      $typeFooter = ACF_CUSTOM::_getField('footer_settings');

    } elseif ( is_singular() != null && is_singular() == 1 && get_post_type() == 'post' ) {
      # code...
      $idPostParent = url_to_postid('blog');
      $typeFooter = ACF_CUSTOM::_getField('footer_settings', $idPostParent );

    } else {

      $typeFooter = ACF_CUSTOM::_getField('footer_settings');

    }

@endphp --}}
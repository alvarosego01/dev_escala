



@php
// bootstrap_pie_pagina_settings_1c_3c

    $idFooter = null;
    if( is_page() != null && is_page() == 1 && get_post_type() == 'page' ){

      $idFooter = get_the_ID();

    } elseif ( is_singular() != null && is_singular() == 1 && get_post_type() == 'post' ) {
      # code...
      $idFooter = url_to_postid('blog');

    } else {

      $idFooter = get_the_ID();

    }

@endphp

@php

$l = ACF_CUSTOM::_getField('pie_pagina_logo_1c_3c', $idFooter);



@endphp


<pre>
    @php
        print_r($l);
    @endphp
</pre>


 <footer id="bootstrap_PiePagina" class="content-info custom_PiePagina bootstrap_PiePagina principal_PiePagina1">

    <div class="section-row">



    </div>

</footer>
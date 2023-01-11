



@php

    $typeNav = null;
    if( is_page() != null && is_page() == 1 && get_post_type() == 'page' ){

      $typeNav = ACF_CUSTOM::_getField('nav_settings');

    } elseif ( is_singular() != null && is_singular() == 1 && get_post_type() == 'post' ) {
      # code...
      $idPostParent = url_to_postid('blog');
      $typeNav = ACF_CUSTOM::_getField('nav_settings', $idPostParent );

    } elseif ( is_singular() != null && is_singular() == 1 && get_post_type() == 'caso-de-exito' ) {
      # code...
      $idPostParent = url_to_postid('casos-de-exito');
      $typeNav = ACF_CUSTOM::_getField('nav_settings', $idPostParent );

    } else {

      $typeNav = ACF_CUSTOM::_getField('nav_settings');

    }

@endphp



@if (isset($typeNav) && $typeNav != 'elementor_navbar' )

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->

  @php
   wp_head()
   @endphp

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->


</head>

<body>

@include('partials.header')

@endif

@if (  ( !isset($typeNav) ) || ( isset($typeNav) && $typeNav == 'elementor_navbar' ) )

@php
get_header();



@endphp

@endif




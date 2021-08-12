{{-- @php
    $typeNav = ACF_CUSTOM::_getField('nav_settings');
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


<script type="text/javascript">
     jQuery(document).ready(function(){
        jQuery("ul.sub-menu").parent().addClass("dropdown");
        jQuery("ul.sub-menu").addClass("dropdown-menu");
        jQuery("ul#menuid li.dropdown a").addClass("dropdown-toggle");
        jQuery("ul.sub-menu li a").removeClass("dropdown-toggle");
        jQuery('.navbar .dropdown-toggle').append('');
        jQuery('a.dropdown-toggle').attr('data-toggle', 'dropdown');
    });
</script>

</head>

@include('partials.header')

@endif

@if (  ( !isset($typeNav) ) || ( isset($typeNav) && $typeNav == 'elementor_navbar' ) )


@endif --}}


@php
get_header();
@endphp

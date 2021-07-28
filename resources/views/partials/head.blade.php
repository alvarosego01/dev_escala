<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->

  @php
      $index_page = ACF_CUSTOM::_getField('index_page');
  @endphp

  @if ( isset($index_page) && $index_page == 0 )

    <script>
      jQuery('[content="index"]').remove();
    </script>

    <meta name="robots" content="noindex, nofollow" />

    @else

    <meta name="robots" content="index, follow">

@endif


  @php
   wp_head()
   @endphp
</head>


@include('partials.header')



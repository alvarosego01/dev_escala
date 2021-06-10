<!doctype html>
<html {!! get_language_attributes() !!}>

  @include('partials.head')
  <body @php body_class() @endphp>

    @php do_action('get_header') @endphp

    @php get_header() @endphp
  {{--
    @include('partials.header')
  --}}

    <div class="wrap container global" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>

    {{--
    @include('partials.footer')
    --}}


    @php do_action('get_footer') @endphp

    @php get_footer() @endphp

    @php wp_footer() @endphp

  </body>
</html>



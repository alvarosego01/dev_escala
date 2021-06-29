
@include('partials.head')
@php
get_header();
@endphp


@hasfield('cf7_redirect') )
@php
$redirect = get_field('cf7_redirect');
@endphp
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = $_SERVER['APP_URL'].$redirect;
}, false );
</script>
@endfield


<div class="wrap container global typeBootstrap" role="document">
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

@php
get_footer();
@endphp

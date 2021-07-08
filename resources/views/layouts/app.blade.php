
@include('partials.head')
@php
get_header();
@endphp

@php
$redirect = get_field('cf7_redirect');

$redirect = strval($redirect);

@endphp

@if (isset($redirect) && $redirect != null)

<script>

document.addEventListener( 'wpcf7mailsent', function( e ) {

console.log('Redirección', "{{ $redirect }}" );
window.location.replace("{{ $redirect }}");

}, false );
</script>

@endif


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

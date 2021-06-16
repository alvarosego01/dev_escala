@php
get_header();
@endphp

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

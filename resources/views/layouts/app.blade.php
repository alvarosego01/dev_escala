
{{-- @include('partials.head') --}}
@php
get_header();
@endphp

@php
$redirect = ACF_CUSTOM::_getField('cf7_redirect');

$redirect = strval($redirect);

@endphp

{{-- <script type="text/javascript">

    document.addEventListener( 'wpcf7submit', function( event ) {

     window.dataLayer.push({
     "event" : "cf7submission",
     "formId" : event.detail.contactFormId,
     "response" : event.detail.inputs
     });

    });

</script> --}}

@if (isset($redirect) && $redirect != null)

<script type="text/javascript">

var re = "{{ $redirect }}";
document.addEventListener( 'wpcf7mailsent', function( e ) {

    window.dataLayer.push({
     "event" : "cf7submission",
     "formId" : event.detail.contactFormId,
     "response" : event.detail.inputs
     });


if(re && re != null && re != ''){
window.location.replace("{{ $redirect }}");
}

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

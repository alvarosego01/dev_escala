@php
$index_page = ACF_CUSTOM::_getField('index_page');

$redirect = ACF_CUSTOM::_getField('cf7_redirect');
$redirect = strval($redirect);

@endphp


{{-- @if ( isset($index_page) && $index_page == 0 )

    <meta name="robots" content="noindex, nofollow" />

    @else

    <meta name="robots" content="index, follow">

@endif --}}


{{-- @include('partials.head') --}}
@php
get_header();
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


<script type="text/javascript">



</script>


@if (isset($redirect) && $redirect != null)

<script type="text/javascript">

var re = "{{ $redirect }}";
// document.addEventListener( 'wpcf7mailsent', function( e ) {
document.addEventListener( 'wpcf7mailfailed', function( e ) {


    var l = e.path;

    window.dataLayer.push({
     "event" : "cf7submission",
     "formId" : event.detail.contactFormId,
     "response" : event.detail.inputs
     });

     console.log('el path', l);
    if( jQuery(l[1]).attr('redirectWeb') ){

        var x = jQuery(l[1]).attr('redirectWeb');

        if( x == 'true' ){

            console.log('redirect', x);
            if(re && re != null && re != ''){
                // window.location.replace("{{ $redirect }}");
            }

        }

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

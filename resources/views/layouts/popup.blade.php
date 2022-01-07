{{-- enable_popup --}}

@php
$l = ACF_CUSTOM::_getField('enable_popup');
@endphp

@if ($l != null && $l == 1)

    @php
        $l2 = ACF_CUSTOM::_getField('popup_type');
    @endphp

    @if ($l2 != null && $l2 == 'bootstrap_popup')

        @php
            $x = ACF_CUSTOM::_getField('bootstrap_popup_types');
        @endphp

        @if ($x != null && $x == 'popup-bootstrap-general-t1')


            @popup_general_t1(  )
            @endpopup_general_t1

        @endif


        @php
            $p = ACF_CUSTOM::_getField('bootstrap_popup_appear_config');
        @endphp
        @if ($p != null && $p != 'special_appear_disabled')

            {!! FrontPage::setSpecialAppearPopUp( $p, get_the_ID() ); !!}

        @endif


    @endif


@endif

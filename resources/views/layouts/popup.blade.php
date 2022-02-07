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

        @if (isset($x) && $x != null)
            @php
                $nav = ACF_CUSTOM::_getField('bootstrap_popup_template', $x);
            @endphp


            @if ($nav != null && $nav == 'popup-bootstrap-general-t1')

                @php
                    $parameters = [
                        'popup_call_class' => ACF_CUSTOM::_getField('popup_call_class', $x),
                        'popup_image' => ACF_CUSTOM::_getField('popup_image', $x),
                        'popup_title_text' => ACF_CUSTOM::_getField('popup_title_text', $x),
                        'enable_custom_background' => ACF_CUSTOM::_getField('enable_custom_background', $x),
                        'custom_background_type' => ACF_CUSTOM::_getField('custom_background_type', $x),
                        'popup_background_color' => ACF_CUSTOM::_getField('popup_background_color', $x),
                        'popup_background_gradient' => ACF_CUSTOM::_getField('popup_background_gradient', $x),
                        'popup_background_image' => ACF_CUSTOM::_getField('popup_background_image', $x),
                        'form_title' => ACF_CUSTOM::_getField('form_title', $x),
                        'form_shortcode' => ACF_CUSTOM::_getField('form_shortcode', $x),
                        'form_redirect' => ACF_CUSTOM::_getField('form_redirect', $x),
                        'bootstrap_popup_template' => ACF_CUSTOM::_getField('bootstrap_popup_template', $x),
                    ];
                @endphp

                @popup_general_t1( $parameters )
                @endpopup_general_t1

            @endif
        @endif

        @php
            $p = ACF_CUSTOM::_getField('bootstrap_popup_appear_config');
        @endphp

        @if ($p != null && $p != 'special_appear_disabled')

            {!! FrontPage::setSpecialAppearPopUp($p, get_the_ID()) !!}

        @endif

    @endif

@endif

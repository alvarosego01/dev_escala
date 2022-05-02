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

        @if (isset($x) && $x != null && count( $x ) > 0)

            @foreach ($x as $item)

                @php
                    $nav = ACF_CUSTOM::_getField('bootstrap_popup_template', $item);
                @endphp

            @if ($nav != null && $nav == 'popup-bootstrap-general-t1')

                @php
                    $parameters = [
                        'popup_call_class' => ACF_CUSTOM::_getField('popup_call_class', $item),
                        'popup_image' => ACF_CUSTOM::_getField('popup_image', $item),
                        'popup_title_text' => ACF_CUSTOM::_getField('popup_title_text', $item),
                        'enable_custom_background' => ACF_CUSTOM::_getField('enable_custom_background', $item),
                        'custom_background_type' => ACF_CUSTOM::_getField('custom_background_type', $item),
                        'popup_background_color' => ACF_CUSTOM::_getField('popup_background_color', $item),
                        'popup_background_gradient' => ACF_CUSTOM::_getField('popup_background_gradient', $item),
                        'popup_background_image' => ACF_CUSTOM::_getField('popup_background_image', $item),
                        'form_title' => ACF_CUSTOM::_getField('form_title', $item),
                        'form_shortcode' => ACF_CUSTOM::_getField('form_shortcode', $item),
                        'form_redirect' => ACF_CUSTOM::_getField('form_redirect', $item),
                        'bootstrap_popup_template' => ACF_CUSTOM::_getField('bootstrap_popup_template', $item),
                    ];
                @endphp

                @popup_general_t1( $parameters )
                @endpopup_general_t1

            @endif
            @if ($nav != null && $nav == 'popup-bootstrap-general-blue-t2')

                @php
                    $parameters = [
                        'popup_call_class' => ACF_CUSTOM::_getField('popup_call_class', $item),
                        'popup_image' => ACF_CUSTOM::_getField('popup_image', $item),
                        'popup_title_text' => ACF_CUSTOM::_getField('popup_title_text', $item),
                        'enable_custom_background' => ACF_CUSTOM::_getField('enable_custom_background', $item),
                        'custom_background_type' => ACF_CUSTOM::_getField('custom_background_type', $item),
                        'popup_background_color' => ACF_CUSTOM::_getField('popup_background_color', $item),
                        'popup_background_gradient' => ACF_CUSTOM::_getField('popup_background_gradient', $item),
                        'popup_background_image' => ACF_CUSTOM::_getField('popup_background_image', $item),
                        'form_title' => ACF_CUSTOM::_getField('form_title', $item),
                        'form_shortcode' => ACF_CUSTOM::_getField('form_shortcode', $item),
                        'form_redirect' => ACF_CUSTOM::_getField('form_redirect', $item),
                        'bootstrap_popup_template' => ACF_CUSTOM::_getField('bootstrap_popup_template', $item),
                    ];
                @endphp

                @popup_general_blue_t2( $parameters )
                @endpopup_general_blue_t2

            @endif

            @if ($nav != null && $nav == 'popup-bootstrap-general-2022')

                @php
                    $parameters = [

                        'popup_call_class' => ACF_CUSTOM::_getField('popup_call_class', $item),
                        'popup_imageTitle' => ACF_CUSTOM::_getField('popup_imageTitle', $item),
                        'popup_image' => ACF_CUSTOM::_getField('popup_image', $item),
                        'popup_principalTitle' => ACF_CUSTOM::_getField('popup_principalTitle', $item),
                        'popup_subTitle' => ACF_CUSTOM::_getField('popup_subTitle', $item),
                        'popup_thirdTitle' => ACF_CUSTOM::_getField('popup_thirdTitle', $item),
                        'enable_custom_background' => ACF_CUSTOM::_getField('enable_custom_background', $item),
                        'custom_background_type' => ACF_CUSTOM::_getField('custom_background_type', $item),
                        'popup_background_color' => ACF_CUSTOM::_getField('popup_background_color', $item),
                        'popup_background_gradient' => ACF_CUSTOM::_getField('popup_background_gradient', $item),
                        'popup_background_image' => ACF_CUSTOM::_getField('popup_background_image', $item),
                        'form_title' => ACF_CUSTOM::_getField('form_title', $item),
                        'form_shortcode' => ACF_CUSTOM::_getField('form_shortcode', $item),
                        'form_redirect' => ACF_CUSTOM::_getField('form_redirect', $item),

                    ];




                @endphp

                @popup_general_2022( $parameters )
                @endpopup_general_2022

            @endif


            @endforeach

        @endif

        {{-- @php
            $p = ACF_CUSTOM::_getField('bootstrap_popup_appear_config');
        @endphp

        @if ($p != null && $p != 'special_appear_disabled')

            {!! FrontPage::setSpecialAppearPopUp($p, get_the_ID()) !!}

        @endif --}}

    @endif

@endif

{{-- enable_popup --}}

@php

    $idPagePopups = null;
    if (is_page() != null && is_page() == 1 && get_post_type() == 'page') {
        $idPagePopups = get_the_ID();
    } elseif (is_singular() != null && is_singular() == 1 && get_post_type() == 'post') {
        # code...
        $idPagePopups = url_to_postid('blog');
    } else {
        $idPagePopups = get_the_ID();
    }

@endphp


@php
    $l = ACF_CUSTOM::_getField('enable_popup', $idPagePopups);
@endphp

@if ($l != null && $l == 1)

    @php
        $l2 = ACF_CUSTOM::_getField('popup_type', $idPagePopups);
    @endphp

    @if ($l2 != null && $l2 == 'bootstrap_popup')

        @php
            $x = ACF_CUSTOM::_getField('bootstrap_popup_types', $idPagePopups);

        @endphp

        @if (isset($x) && $x != null && count($x) > 0)

            <script type="text/javascript">
                jQuery(document).ready(function() {

                    jQuery('.jet-popup.jet-popup--front-mode').remove();


                });
            </script>
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

                    @popup_general_t1($parameters)
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

                    @popup_general_blue_t2($parameters)
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

                @if ($nav != null && $nav == 'popup-bootstrap-blackFriday-2022')
                    @php
                        $parameters = [
                            'popup_call_class' => ACF_CUSTOM::_getField('popup_call_class', $item),
                            'popup_imageTitle' => ACF_CUSTOM::_getField('popup_imageTitle', $item),
                            'popup_image' => ACF_CUSTOM::_getField('popup_image', $item),
                            'popup_after_imageText' => ACF_CUSTOM::_getField('popup_after_imageText', $item),
                            'popup_principalTitle' => ACF_CUSTOM::_getField('popup_principalTitle', $item),
                            'enable_custom_background' => ACF_CUSTOM::_getField('enable_custom_background', $item),
                            'custom_background_type' => ACF_CUSTOM::_getField('custom_background_type', $item),
                            'popup_background_color' => ACF_CUSTOM::_getField('popup_background_color', $item),
                            'popup_background_gradient' => ACF_CUSTOM::_getField('popup_background_gradient', $item),
                            'popup_background_image' => ACF_CUSTOM::_getField('popup_background_image', $item),
                            'form_title' => ACF_CUSTOM::_getField('form_title', $item),
                            'form_shortcode' => ACF_CUSTOM::_getField('form_shortcode', $item),
                            'form_redirect' => ACF_CUSTOM::_getField('form_redirect', $item),
                            'popup_direction' => ACF_CUSTOM::_getField('popup_direction', $item),
                        ];

                    @endphp

                    @popup_blackFriday_2022( $parameters )
                    @endpopup_blackFriday_2022
                @endif

                @if ($nav != null && $nav == 'popup-bootstrap-special-message')
                    @php
                        $parameters = [
                            'popup_call_class' => ACF_CUSTOM::_getField('popup_call_class', $item),
                            'popup_special_message_image' => ACF_CUSTOM::_getField('popup_special_message_image', $item),
                            'popup_special_message_text' => ACF_CUSTOM::_getField('popup_special_message_text', $item),
                        ];

                    @endphp

                    @popup_special_message($parameters)
                    @endpopup_special_message
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

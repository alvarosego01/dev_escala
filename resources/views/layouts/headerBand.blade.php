

    @php
    $l = ACF_CUSTOM::_getField('enable_headerband');
    @endphp

    @if ($l != null && $l == 1)

        @php
            $l2 = ACF_CUSTOM::_getField('headerband_type');
            $parameters = array();

            $x = ACF_CUSTOM::_getField('enable_custom_headerband');

            if($x != null && $x == 1){

                $x2 = ACF_CUSTOM::_getField('custom_headerband_text');
                $parameters = array(
                    'text' => $x2
                );

            }

        @endphp

        @if ($l2 != null && $l2 == 'headerband_promo_t1')

            @headerBand_promo_T1($parameters)
            @endheaderBand_promo_T1

        @endif
        @if ($l2 != null && $l2 == 'headerband_blackFriday_promo_t2')

            @headerband_blackFriday_promo_t2($parameters)
            @endheaderband_blackFriday_promo_t2

        @endif

        @if ($l2 != null && $l2 == 'headerband_special_1m_promo_t1')

            @headerband_special_1m_promo_t1($parameters)
            @endheaderband_special_1m_promo_t1

        @endif

        @if ($l2 != null && $l2 == 'headerband_special_14f_promo_t1')

            @headerband_special_14f_promo_t1($parameters)
            @endheaderband_special_14f_promo_t1

        @endif

        @if ($l2 != null && $l2 == 'headerBand_whatsapp_T1')

            @headerBand_whatsapp_T1($parameters)
            @endheaderBand_whatsapp_T1

        @endif


    @endif

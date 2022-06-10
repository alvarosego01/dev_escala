

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


    @endif

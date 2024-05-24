

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

            <script>
                jQuery('section.headerband_blackFriday_promo_t2').appendTo('header');
                jQuery('header').addClass('withHeaderBand');
            </script>

        @endif

        @if ($l2 != null && $l2 == 'headerband_december_promo_t1')

            @headerband_december_promo_t1($parameters)
            @endheaderband_december_promo_t1

            <script>
                jQuery('section.headerband_december_promo_t1').appendTo('header');
                jQuery('header').addClass('withHeaderBand');
            </script>

        @endif

        @if ($l2 != null && $l2 == 'headerband_promo_freeclass_t1')

            @headerband_promo_freeclass_t1($parameters)
            @endheaderband_promo_freeclass_t1

            <script>
                jQuery('section.headerband_promo_freeclass_t1').appendTo('header');
                jQuery('header').addClass('withHeaderBand');
            </script>

        @endif

        @if ($l2 != null && $l2 == 'headerband_promo_last_news')

            @headerband_promo_last_news($parameters)
            @endheaderband_promo_last_news

            <script>
                jQuery('section.headerband_promo_lastNews').appendTo('header');
                jQuery('header').addClass('withHeaderBand');
            </script>

        @endif

        @if ($l2 != null && $l2 == 'headerband_reports')

            @headerband_reports($parameters)
            @endheaderband_reports

            <script>
                jQuery('section.headerband_reports').appendTo('header');
                jQuery('header').addClass('withHeaderBand');
            </script>

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

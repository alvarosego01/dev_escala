{{-- Details

@var $type - define type of container (backgroundImage || backgroundColor) | string
@var $classSection - class context | string
@var $backgroundImageFile - image file url background | string
@var $enableTitle -  enable title | boolean
@var $titlePrincipal - text title | html
@var $subTitlePrincipal - define sub title | html
@var $img - image url | string
@var $text - define info text | html
@var $enableButton -  enable button | boolean
@var $urlButton -  url of button | string
@var $textButton -  define text of button | string
@var $side - define side of image (left || right) | string

@var $typeButton - set type off button (secondaryButton || primaryButton) --}}

@php
$items = [
    [
        'name' => 'plan1',
        'type' => 'master',
        'title' => 'Plan <span class="greenBlueColor">Starter</span>',
        'price' => 'A partir de <br class="space">
        <span class="cost">

            <span
            style="display: none"
            class="numerCost">30</span>
            <span

            class="discountCost">21

            <span class="ncost">
                    /mes
            </span>
            </span>
            <span class="usd">
                USD
            </span>
        </span>',
        'pricePreviewMobie' => 'A partir de <br class="space">
        <span class="cost">

            <span
            style="display: none"
            class="numerCost">30</span>
            <span

            class="discountCost">21

            <span class="ncost">
                    /mes
            </span>
            </span>
            <span class="usd">
                USD
            </span>
        </span>
        <small class="preViewPriceTag">
            Precio mensual en plan anual
        </small>
        ',
        'typePrice' => 'Dollar',
        'middleType' => 'selectorAnual',
        'textMiddle' => null,
        'button' => true,
        'textButton' => 'Prueba gratis',
        'extendInfoButton' => true,
        'customClasses' => 'cardPlan1',
        'discountTest' => '
        <p class="primaryText">

                <span class="t1">Pago total anual <span class="priceDotted">360 USD</span></span>
                <span class="t2">
                    <strong class="priceSaves">
                        Con descuento 252 USD
                    </strong>
                </span>
        </p>',

        'extendDetails' => [
            [
                'title' => 'Landing page',
                'items' => ['
                Páginas: <strong>ilimitadas</strong>',
                'Subdominio personalizado',
                'Dominios propios: <strong>1</strong>'
            ],
            ],
            [
                'title' => 'Email Marketing',
                'items' => [
                    'Emails marketing al mes: <strong>5.000</strong>',
                    'Plantillas: <strong>todas las disponibles</strong>'
                ],
            ],
            [
                'title' => 'Automatizaciones',
                'items' => ['Flujos: <strong>5</strong>'],
            ],
            [
                'title' => 'Formularios',
                'items' => [
                    'Número de formularios: <strong>ilimitados</strong>'
                ],
            ],
            [
                'title' => 'CRM',
                'items' => [
                    'Contactos en base de datos: <strong>1.000.000</strong>',
                    'Contactos de marketing: <strong>1.000</strong>',
                    'Usuarios de venta: <strong>1</strong>',
                    'Emails de CRM: <strong>ilimitados</strong>',
                    'Multiembudos de ventas: 1'
            ],
            ],

            [
                'title' => 'Analíticas',
                'items' => [
                    'Dashboard de <strong>administradores y vendedores</strong>'
                ],
            ],
        ],
        'details' => [
            [
                'title' => null,
                'items' => [
                    'Landing Pages limitadas',
                    'Dominio personalizado',
                    'CRM integrado',
                    'Formularios ilimitados',
                    'Analíticas',
                ],
            ],
        ],
    ],
    [
        'name' => 'plan2',
        'type' => 'master',
        'title' => 'Plan <span class="orangeColor">Pro</span>',
        'price' => 'A partir de <br class="space">
        <span class="cost">

            <span
            style="display: none"
            class="numerCost">135</span>
            <span
            class="discountCost">
            94<span class="smallDecimal">.50</span>
            <span class="ncost">
                /mes
            </span>
            </span>
            <span class="usd">
                USD
            </span>
        </span>',
        'pricePreviewMobie' => 'A partir de <br class="space">
        <span class="cost">

            <span
            style="display: none"
            class="numerCost">135</span>
            <span
            class="discountCost">
            94<span class="smallDecimal">.50</span>
            <span class="ncost">
                /mes
            </span>
            </span>
            <span class="usd">
                USD
            </span>
        </span>
        <small class="preViewPriceTag">
            Precio mensual en plan anual
        </small>
        ',
        'typePrice' => 'Dollar',
        'middleType' => 'selectorAnual',
        'textMiddle' => null,
        'button' => true,
        'textButton' => 'Hablar con un asesor',
        'extendInfoButton' => true,
        'customClasses' => 'cardPlan2',
        'discountTest' => '
        <p class="primaryText">


                <span class="t1">Pago total anual <span class="priceDotted">1620 USD</span></span>
                <span class="t2">
                    <strong class="priceSaves">
                        Con descuento 1140 USD
                    </strong>
                </span>
        </p>',
        'extendDetails' => [
            [
                'title' => 'Landing page',
                'items' => [
                    'Páginas: <strong>ilimitadas</strong>',
                    'Subdominio personalizado',
                    'Dominios propios: <strong>5</strong>'],
            ],
            [
                'title' => 'Email Marketing',
                'items' => [
                    'Emails marketing al mes: <strong>50.000</strong>',
                    'Plantillas: <strong>todas las disponibles</strong>'],
            ],
            [
                'title' => 'Automatizaciones',
                'items' => [
                    'Flujos: <strong>100</strong>',
                    'Bifurcaciones de flujos'
            ],
            ],
            [
                'title' => 'Formularios',
                'items' => [
                    'Número de formularios: <strong>ilimitados</strong>'
                ],
            ],
            [
                'title' => 'CRM',
                'items' => [
                    'Contactos en base de datos: <strong>1.000.000</strong>',
                    'Contactos de marketing: <strong>5.000</strong>',
                    'Usuarios de venta: <strong>1</strong>',
                    'Emails de CRM: <strong>ilimitados</strong>',
                    'Multiembudos de ventas: <strong>10</strong>',
                    'Lead scoring',
                    'Segmentaciòn avanzada',
                    'Extensiòn de WhatsApp Web'
            ],
            ],
            [
                'title' => 'Anuncios Digitales',
                'items' => [
                    'Cuentas de Facebook Ads Manager: <strong>3</strong>',
                    'Campañas publicadas: <strong>ilimitadas</strong>'
                ],
            ],
            [
                'title' => 'Analíticas',
                'items' => [
                    'Dashboard de <strong>administradores y vendedores</strong>'
                ],
            ],
        ],
        'details' => [
            [
                'title' => null,
                'items' => [
                    'Bifurcaciones de flujos',
                    'Múltiples embudos de ventas',
                    'Lead scoring',
                    'Segmentación avanzada',
                    'Extensión WhatsApp Web',
            ],


            ],
        ],
    ],
    [
        'name' => 'plan3',
        'type' => 'master',
        'title' => 'Plan <span class="greenBlueColor">Enterprise</span>',
        'price' => '<span class="contactos">
            <span>CONSULTAR</span>
        </span>',
        'pricePreviewMobie' => '
        <small class="preViewPriceTag">
            <strong>A partir de 100.000 contactos de Marketing</strong>
            <br class="space">
            <br class="space">
            Contáctanos para crear un plan hecho <br class="space">
            a la medida de tu necesidades
        </small>
        ',
        'typePrice' => null,
        'middleType' => null,
        'textMiddle' => '
            <strong>A partir de 100.000 contactos de Marketing</strong>
            <br class="space">
            <br class="space">
            Contáctanos para crear un plan hecho <br class="space">
            a la medida de tu necesidades
        ',
        'button' => true,
        'textButton' => 'Hablar con un asesor',
        'customClasses' => 'cardPlan3',
        'extendInfoButton' => true,
        'extendDetails' => [
            [
                'title' => 'Landing page',
                'items' => [
                    'Páginas: <strong>ilimitadas</strong>',
                    'Subdominio personalizado',
                    'Dominios propios'
                ],
            ],
            [
                'title' => 'Email Marketing',
                'items' => [
                    'Emails marketing al mes',
                    'Plantillas: <strong>Todas las disponibles</strong>'
                ],
            ],
            [
                'title' => 'Automatizaciones',
                'items' => [
                    'Flujos: <strong>ilimitados</strong>',
                    'Bifurcaciones de flujos'
            ],
            ],
            [
                'title' => 'Formularios',
                'items' => [
                    'Número de formularios: <strong>ilimitados</strong>'
                ],
            ],
            [
                'title' => 'CRM',
                'items' => [
                    'Contactos en base de datos: <strong>10.000.000</strong>',
                    'Contactos de marketing: <strong>A partir de 100.000</strong>',
                    'Usuarios de venta',
                    'Emails de CRM: <strong>ilimitados</strong>',
                    'Multiembudos de ventas',
                    'Lead scoring',
                    'Segmentación avanzada',
                    'Extensiòn de WhatsApp Web',
            ],
            ],
            [
                'title' => 'Anuncios Digitales',
                'items' => [
                    'Cuentas de Facebook Ads Manager',
                    'Campañas publicadas: <strong>ilimitadas</strong>'],
            ],
            [
                'title' => 'Analíticas',
                'items' => [
                    'Dashboard de <strong>administradores y vendedores</strong>'
                ],
            ],
        ],
        'details' => [
            [
                'title' => null,
                'items' => [
                    'Bifurcaciones de flujos',
                    'Múltiples embudos de ventas',
                    'Lead scoring',
                    'Segmentación avanzada',
                    'Extensión WhatsApp Web',
                    // '<br>'
                ],
            ],
        ],
    ],
];

@endphp


<section class="component-pricing-price-card-T1 customSection sectionParent {{ $classSection }} ">

    <div class="section-row">

        @if (isset($titlePrincipal) && $titlePrincipal != null)
            <section class="innerSectionElement sct1 desktopElement">

                <div class="containElements">

                    <h2 class="primaryTitle whiteColor">
                        {!! $titlePrincipal !!}
                    </h2>

                    @if ($subTitlePrincipal != null)

                        <p class="primaryText colorDarkGrey3">
                            {!! $subTitlePrincipal !!}
                        </p>

                    @endif

                </div>

            </section>
        @endif

        <section class=" innerSectionElement sct2">

            <div class="containElements row">

                @if (isset($items) && count($items) > 0)

                    @foreach ($items as $item)
                        <div id="{{ $item['name'] }}" class="col-md-12 col-lg-4 elementParent">

                            <div class="elementPrice @if (isset($item['customClasses']) && $item['customClasses'] != '') {!! $item['customClasses'] !!} @endif">

                                <div class="had">
                                    <h3 class="secondaryTitle blackColor">
                                        {!! $item['title'] !!}
                                    </h3>
                                </div>

                                <div class="elementBody desktopElement versionPc2022">

                                    <div
                                    style="margin-bottom: 60px"
                                    class="price">

                                        <p>

                                            {!! $item['price'] !!}

                                        </p>

                                    </div>

                                    <div class="middle">

                                        <div class="innerMiddle">

                                            @if (isset($item['middleType']) && $item['middleType'] == 'selectorAnual')

                                                @if (isset($item['discountTest']) && $item['discountTest'] != null)

                                                    <div class="extraPriceInfo">

                                                        {{-- style="display: none;"  --}}
                                                        <div
                                                        typeplan="{{ $item['name'] }}"
                                                            class="discountData">
                                                            {!! $item['discountTest'] !!}
                                                        </div>
                                                    </div>

                                                @endif

                                                <div class="selectorSwitch">
                                                    <small>
                                                        Mensual
                                                    </small>
                                                    <label class="switchCustom">
                                                        <input
                                                        checked
                                                            class="modePlanSelect"
                                                            onclick="discountByPlanCard('{{ $item['name'] }}', this)"
                                                            value="1" type="checkbox" />
                                                        <div></div>
                                                    </label>
                                                    <small>
                                                        Anual
                                                    </small>
                                                </div>

                                            @endif

                                            @if (isset($item['textMiddle']) && $item['textMiddle'] != null)

                                                <p class="primaryText grayColorTexts">
                                                    {!! $item['textMiddle'] !!}
                                                </p>


                                            @endif

                                        </div>
                                    </div>

                                    @if (isset($item['button']) && $item['button'] == true)

                                        <div class="buttonSection">

                                            <a class="openPopUpButton popup-general-trial-2022 primaryButton hoverInEffect">
                                                {!! $item['textButton'] !!}
                                            </a>

                                        </div>

                                    @endif

                                    @if (isset($item['details']) && count($item['details'] > 0))

                                        <div style="display: block" class="featuresPrice short">

                                            @foreach ($item['details'] as $item2)

                                                <div class="listCustom">
                                                    @if ($item2['title'] != null)
                                                        <h4 class="thirdTitle">
                                                            {!! $item2['title'] !!}
                                                        </h4>
                                                    @endif
                                                    <ul>

                                                        @if (isset($item2['items']) && count($item2['items']) > 0)

                                                        @endif
                                                        @foreach ($item2['items'] as $item3)

                                                            @if ( $item3 == '<br>' )
                                                                <li style="height: 23.984px">
                                                                </li>
                                                            @else

                                                            <li>
                                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                                <span class="blueColor">
                                                                    {!! $item3 !!}
                                                                </span>
                                                            </li>
                                                            @endif

                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <br class="space">
                                                <br class="space">

                                            @endforeach

                                        </div>

                                    @endif

                                    @if (isset($item['extendDetails']) && count($item['extendDetails'] > 0))

                                        <div style="display: none" class="featuresPrice extendDetails">

                                            @foreach ($item['extendDetails'] as $item2)

                                                <div class="listCustom">
                                                    @if ($item2['title'] != null)
                                                        <h4 class="thirdTitle">
                                                            {!! $item2['title'] !!}
                                                        </h4>
                                                    @endif
                                                    <ul>

                                                        @if (isset($item2['items']) && count($item2['items']) > 0)

                                                        @endif
                                                        @foreach ($item2['items'] as $item3)

                                                            <li>
                                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                                <span class="blueColor">
                                                                    {!! $item3 !!}
                                                                </span>
                                                            </li>

                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <br class="space">
                                                {{-- <br class="space"> --}}

                                            @endforeach

                                        </div>

                                    @endif
                                    @if (isset($item['extendInfoButton']) && count($item['extendInfoButton'] == true))

                                        <div class="extendInfoButton">

                                            <div class="buttonSection">

                                                <a onclick="actionInfoCards('open')" class="extendButton">
                                                    Ver más
                                                    {{-- <img src="{!! App::setFilePath('/assets/images/icons/Rectangle 1342.png') !!}" alt=""> --}}
                                                </a>
                                                {{-- style="display: none" --}}
                                                <a onclick="actionInfoCards('close')" style="display: none;"
                                                    class="hideButton">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/arrowClose.png') !!}" alt="">
                                                </a>

                                            </div>


                                        </div>

                                    @endif

                                </div>

                                {{-- estoy trabajando aqui --}}
                                <div class="elementBody mobileElement versionMobile2022">

                                    <div class="preView">

                                        <div
                                        style="margin-bottom: 60px"
                                        class="price">
                                            <p>

                                                {!! $item['pricePreviewMobie'] !!}

                                            </p>
                                        </div>

                                        <div class="buttonSection">
                                            <a onclick="revealMobileView( 'open', '{{ $item['name'] }}' )" class=" primaryButton hoverInEffect">
                                                Ver plan completo
                                            </a>

                                        </div>

                                    </div>

                                    <div
                                    style="display: none"
                                    class="fullView">



                                    <div
                                    style="margin-bottom: 60px"
                                    class="price">

                                        <p>

                                            {!! $item['price'] !!}

                                        </p>

                                    </div>

                                    <div class="middle">

                                        <div class="innerMiddle">

                                            @if (isset($item['middleType']) && $item['middleType'] == 'selectorAnual')

                                                @if (isset($item['discountTest']) && $item['discountTest'] != null)

                                                    <div class="extraPriceInfo">

                                                        {{-- style="display: none;"  --}}
                                                        <div
                                                        typeplan="{{ $item['name'] }}"
                                                            class="discountData">
                                                            {!! $item['discountTest'] !!}
                                                        </div>
                                                    </div>

                                                @endif

                                                <div class="selectorSwitch">
                                                    <small>
                                                        Mensual
                                                    </small>
                                                    <label class="switchCustom">
                                                        <input
                                                        checked
                                                            class="modePlanSelect"
                                                            onclick="discountByPlanCard('{{ $item['name'] }}', this)"
                                                            value="1" type="checkbox" />
                                                        <div></div>
                                                    </label>
                                                    <small>
                                                        Anual
                                                    </small>
                                                </div>

                                            @endif

                                            @if (isset($item['textMiddle']) && $item['textMiddle'] != null)

                                                <p class="primaryText grayColorTexts">
                                                    {!! $item['textMiddle'] !!}
                                                </p>


                                            @endif

                                        </div>
                                    </div>

                                    @if (isset($item['button']) && $item['button'] == true)

                                        <div class="buttonSection">

                                            <a class="btn-popup-header primaryButton hoverInEffect">
                                                {!! $item['textButton'] !!}
                                            </a>

                                        </div>

                                    @endif

                                    {{-- @if (isset($item['details']) && count($item['details'] > 0))

                                        <div style="display: block" class="featuresPrice short">

                                            @foreach ($item['details'] as $item2)

                                                <div class="listCustom">
                                                    @if ($item2['title'] != null)
                                                        <h4 class="thirdTitle">
                                                            {!! $item2['title'] !!}
                                                        </h4>
                                                    @endif
                                                    <ul>

                                                        @if (isset($item2['items']) && count($item2['items']) > 0)

                                                        @endif
                                                        @foreach ($item2['items'] as $item3)

                                                            @if ( $item3 == '<br>' )
                                                                <li style="height: 23.984px">
                                                                </li>
                                                            @else

                                                            <li>
                                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                                <span class="blueColor">
                                                                    {!! $item3 !!}
                                                                </span>
                                                            </li>
                                                            @endif

                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <br class="space">
                                                <br class="space">

                                            @endforeach

                                        </div>

                                    @endif --}}

                                    @if (isset($item['extendDetails']) && count($item['extendDetails'] > 0))

                                        <div class="featuresPrice extendDetails">

                                            @foreach ($item['extendDetails'] as $item2)

                                                <div class="listCustom">
                                                    @if ($item2['title'] != null)
                                                        <h4 class="thirdTitle">
                                                            {!! $item2['title'] !!}
                                                        </h4>
                                                    @endif
                                                    <ul>

                                                        @if (isset($item2['items']) && count($item2['items']) > 0)

                                                        @endif
                                                        @foreach ($item2['items'] as $item3)

                                                            <li>
                                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                                <span class="blueColor">
                                                                    {!! $item3 !!}
                                                                </span>
                                                            </li>

                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <br class="space">
                                                {{-- <br class="space"> --}}

                                            @endforeach

                                        </div>

                                    @endif
                                    @if (isset($item['extendInfoButton']) && count($item['extendInfoButton'] == true))

                                        <div class="extendInfoButton">

                                            <div class="buttonSection">

                                                {{-- <a onclick="actionInfoCards('open')" class="extendButton">
                                                    Ver más

                                                </a> --}}
                                                {{-- style="display: none" --}}
                                                <a onclick="revealMobileView('close', '{{ $item['name'] }}')"
                                                    class="hideButton">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/arrowClose.png') !!}" alt="">
                                                </a>

                                            </div>


                                        </div>

                                    @endif

                                </div>

                            </div>

                            </div>

                        </div>

                    @endforeach


                @endif


            </div>

        </section>





    </div>


</section>

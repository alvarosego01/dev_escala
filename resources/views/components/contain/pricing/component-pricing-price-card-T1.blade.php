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
            <i class="fas fa-dollar-sign"></i>
            <span class="numerCost">30</span>
            <span
            style="display: none"
            class="discountCost">24</span>
            <span class="usd">
                USD
            </span>
        </span>',
        'typePrice' => 'Dollar',
        'middleType' => 'selectorAnual',
        'textMiddle' => null,
        'button' => true,
        'textButton' => 'Prueba Escala ahora',
        'extendInfoButton' => true,
        'customClasses' => 'cardPlan1',
        'discountTest' => '
        <p class="primaryText">
                <span class="ncost">
                    usd/mes
                </span>
                <span class="t1">Pago total anual <span class="priceDotted">360 $USD</span></span>
                <span class="t2">
                    <strong class="priceSaves">
                        Con descuento 288 $USD
                    </strong>
                </span>
        </p>',
        'extendDetails' => [
            [
                'title' => 'Landing page',
                'items' => ['Páginas: <strong>ilimitadas</strong>', 'Subdominio personalizado', 'Dominios propios: <strong>1</strong>'],
            ],
            [
                'title' => 'Email Marketing',
                'items' => ['Emails marketing al mes: <br class="space"> <strong>5.000</strong>', 'Plantillas: <strong>todas las disponibles</strong>'],
            ],
            [
                'title' => 'Automatizaciones',
                'items' => ['Flujos: <strong>ilimitados</strong>'],
            ],
            [
                'title' => 'Formularios',
                'items' => ['Número de formularios: <strong>ilimitados</strong>'],
            ],
            [
                'title' => 'CRM',
                'items' => ['Contactos en base de datos: <strong>1.000.000</strong>', 'Contactos de marketing: <br class="space"> <strong>1.000</strong>', 'Usuarios de venta: <strong>1</strong>', 'Emails de CRM: <strong>ilimitados</strong>'],
            ],
            [
                'title' => 'Anuncios Digitales',
                'items' => ['Cuentas de Facebook Ads Manager: <strong>1</strong>', 'Campañas publicadas: <strong>ilimitadas</strong>'],
            ],
            [
                'title' => 'Analíticas',
                'items' => ['Dashboard de <strong>administradores y vendedores</strong>'],
            ],
        ],
        'details' => [
            [
                'title' => null,
                'items' => [
                    'Usuarios de venta: <strong>1</strong>',
                    'Contactos en base de datos: <strong>1.000.000</strong>',
                    'Emails marketing al mes: <strong>5.000</strong>',
                    'Dominios propios: <strong>1</strong>',
                    'Cuentas de Facebook Ads Manager: <strong>1</strong>'
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
            <i class="fas fa-dollar-sign"></i>
            <span class="numerCost">75</span>
            <span
            style="display: none"
            class="discountCost">60</span>
            <span class="usd">
                USD
            </span>
        </span>',
        'typePrice' => 'Dollar',
        'middleType' => 'selectorAnual',
        'textMiddle' => null,
        'button' => true,
        'textButton' => 'Prueba Escala ahora',
        'extendInfoButton' => true,
        'customClasses' => 'cardPlan2',
        'discountTest' => '
        <p class="primaryText">

                <span class="ncost">
                    usd/mes
                </span>
                <span class="t1">Pago total anual <span class="priceDotted">900 $USD</span></span>
                <span class="t2">
                    <strong class="priceSaves">
                        Con descuento 720 $USD
                    </strong>
                </span>
        </p>',
        'extendDetails' => [
            [
                'title' => 'Landing page',
                'items' => ['Páginas: <strong>ilimitadas</strong>', 'Subdominio personalizado', 'Dominios propios: <strong>5</strong>'],
            ],
            [
                'title' => 'Email Marketing',
                'items' => ['Emails marketing al mes: <br class="space"> <strong>30.000</strong>', 'Plantillas: <strong>todas las disponibles</strong>'],
            ],
            [
                'title' => 'Automatizaciones',
                'items' => ['Flujos: <strong>ilimitados</strong>'],
            ],
            [
                'title' => 'Formularios',
                'items' => ['Número de formularios: <strong>ilimitados</strong>'],
            ],
            [
                'title' => 'CRM',
                'items' => ['Contactos en base de datos: <strong>1.000.000</strong>', 'Contactos de marketing: <br class="space"> <strong>3.000</strong>', 'Usuarios de venta: <strong>1</strong>', 'Emails de CRM: <strong>ilimitados</strong>'],
            ],
            [
                'title' => 'Anuncios Digitales',
                'items' => ['Cuentas de Facebook Ads Manager: <strong>3</strong>', 'Campañas publicadas: <strong>ilimitadas</strong>'],
            ],
            [
                'title' => 'Analíticas',
                'items' => ['Dashboard de <strong>administradores y vendedores</strong>'],
            ],
        ],
        'details' => [
            [
                'title' => null,
                'items' => [
                'Usuarios de venta: <strong>1</strong>',
                'Contactos en base de datos: <strong>1.000.000</strong>',
                'Emails marketing al mes: <strong>30.000</strong>',
                'Dominios propios: <strong>5</strong>',
                'Cuentas de Facebook Ads Manager: <strong>3</strong>'
            ],
            ],
        ],
    ],
    [
        'name' => 'plan3',
        'type' => 'master',
        'title' => 'Plan <span class="greenBlueColor">Enterprise</span>',
        'price' => '<span class="contactos">
            <span><i class="fas fa-dollar-sign"></i> CONSULTAR</span>
        </span>',
        'typePrice' => null,
        'middleType' => null,
        'textMiddle' => 'Contáctanos para crear un plan hecho<br class="space">a la medida de tu necesidades',
        'button' => true,
        'textButton' => 'Habla con un asesor',
        'customClasses' => 'cardPlan3',
        'extendInfoButton' => true,
        'extendDetails' => [
            [
                'title' => 'Landing page',
                'items' => ['Páginas: <strong>ilimitadas</strong>', 'Subdominio personalizado', 'Dominios propios: <strong>10</strong>'],
            ],
            [
                'title' => 'Email Marketing',
                'items' => ['Emails marketing al mes: <br class="space"> <strong> 20 x contactos de marketing</strong>', 'Plantillas: <strong>todas las disponibles</strong>'],
            ],
            [
                'title' => 'Automatizaciones',
                'items' => ['Flujos: <strong>ilimitados</strong>'],
            ],
            [
                'title' => 'Formularios',
                'items' => ['Número de formularios: <strong>ilimitados</strong>'],
            ],
            [
                'title' => 'CRM',
                'items' => ['Contactos en base de datos: <strong> 1.000.000</strong>', 'Contactos de marketing: <br class="space"> <strong>A partir de 100.000</strong>', 'Usuarios de venta: <strong>10</strong>', 'Emails de CRM: <strong>ilimitados</strong>'],
            ],
            [
                'title' => 'Anuncios Digitales',
                'items' => ['Cuentas de Facebook Ads Manager: <strong>5</strong>', 'Campañas publicadas: <strong>ilimitadas</strong>'],
            ],
            [
                'title' => 'Analíticas',
                'items' => ['Dashboard de <strong>administradores y vendedores</strong>'],
            ],
        ],
        'details' => [
            [
                'title' => null,
                'items' => [
                    'Usuarios de venta: <strong>10</strong>',
                    // 'Contactos en base de datos: <strong>1.000.000</strong>',
                    'Emails marketing al mes: <br class="space">
                    <strong>20 x contactos de marketing</strong>',
                    'Dominios propios: <strong>10</strong>',
                    'Cuentas de Facebook Ads Manager: <strong>5</strong>',
                ],
            ],
        ],
    ],
];

@endphp


<section class="component-pricing-price-card-T1 customSection sectionParent fullWidth {{ $classSection }} ">

    <div class="section-row">


        @if (isset($titlePrincipal) && $titlePrincipal != null)
            <section class="innerSectionElement sct1">

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

        <section class="desktopElement pcVersion innerSectionElement sct2">

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

                                <div class="elementBody">


                                    <div
                                    style="margin-bottom: 25px"
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

                                                        <div style="display: none;" typeplan="{{ $item['name'] }}"
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
                            </div>

                        </div>

                    @endforeach


                @endif


            </div>

        </section>

        <section class="mobileElement mobileVersion innerSectionElement sct2">


            <div class="nav nav-tabs selectorPlansTab" id="nav-tab" role="tablist">

                @foreach ($items as $item)

                <button onclick="planSelectProcess('{{ $item['name'] }}')" class="nav-link @if ($loop->first) active @endif" id="_{{ $item['name'] }}tab" data-bs-toggle="tab" data-bs-target="#{{ $item['name'] }}tab"
                  type="button" role="tab" aria-controls="{{ $item['name'] }}tab" @if ($loop->first) aria-selected="true" @endif>

                  <div class="had">
                    <h3 class="secondaryTitle blackColor">
                        {!! $item['title'] !!}
                    </h3>
                </div>

                </button>

                @endforeach

            </div>



    <div class="containElements row">

        @if (isset($items) && count($items) > 0)

        <div class="tab-content" id="nav-tabContent">
            @foreach ($items as $item)
                    <div class="tab-pane fade @if ($loop->first) active show @endif" id="{{ $item['name'] }}tab" role="tabpanel" aria-labelledby="_{{ $item['name'] }}tab" >
                        <div id="{{ $item['name'] }}" class="col-md-12 col-lg-4 elementParent">

                            <div class="elementPrice @if (isset($item['customClasses']) && $item['customClasses'] != '') {!! $item['customClasses'] !!} @endif">

                                <div class="had">
                                    <h3 class="secondaryTitle blackColor">
                                        {!! $item['title'] !!}
                                    </h3>
                                </div>

                                <div class="elementBody">


                                    <div
                                    style="margin-bottom: 25px"
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

                                                        <div style="display: none;" typeplan="{{ $item['name'] }}"
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
                                                            class="modePlanSelect"
                                                            onchange="discountByPlanCard('{{ $item['name'] }}', this)"
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

                                    @if (isset($item['details']) && count($item['details'] > 0))

                                        <div style="display: block" class="desktopElement featuresPrice short">

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

                                                <a onclick="actionInfoCards('open')" class="desktopElement extendButton">
                                                    Ver más
                                                </a>


                                                <button onclick="actionInfoCards('open')" class="thinButton2 extendButton ">
                                                    Ver detalles del plan
                                                </button>


                                                {{-- style="display: none" --}}
                                                <a onclick="actionInfoCards('close')" style="display: none;"
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
        </div>


                @endif


            </div>

        </section>



    </div>


</section>

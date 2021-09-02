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
        'type' => 'master',
        'title' => 'Plan <span class="greenBlueColor">Starter</span>',
        'price' => 'A partir de <br class="space">
        <span class="cost">
            <i class="fas fa-dollar-sign"></i>
            <span>30</span>
            <span class="usd">
                USD
            </span>
        </span>',
        'typePrice' => 'Dollar',
        'middleType' => 'selectorAnual',
        'textMiddle' => null,
        'button' => true,
        'textButton' => 'Prueba Escala ahora',
        'details' => [
            [
                'title' => 'Landing page',
                'items' => ['Páginas: ilimitadas', 'Subdominio personalizado', 'Dominios propios: 1'],
            ],
            [
                'title' => 'Email Marketing',
                'items' => ['Emails marketing al mes: 5.000', 'Plantillas: todas las disponibles'],
            ],
            [
                'title' => 'Automatizaciones',
                'items' => ['Flujos: ilimitados'],
            ],
            [
                'title' => 'Formularios',
                'items' => ['Número de formularios: ilimitados'],
            ],
            [
                'title' => 'CRM',
                'items' => ['Contactos en base de datos: <br class="space"> 1.000.000', 'Contactos de marketing: 1.000', 'Usuarios de venta: 1', 'Emails de CRM: ilimitados'],
            ],
            [
                'title' => 'Anuncios Digitales',
                'items' => ['Cuentas de Facebook Ads Manager: 1', 'Campañas publicadas: ilimitadas'],
            ],
            [
                'title' => 'Analíticas',
                'items' => ['Dashboard de administrador', 'Dashboards de vendedores'],
            ],
        ],
    ],
    [
        'type' => 'master',
        'title' => 'Plan <span class="orangeColor">Pro</span>',
        'price' => 'A partir de <br class="space">
        <span class="cost">
            <i class="fas fa-dollar-sign"></i>
            <span>45</span>
            <span class="usd">
                USD
            </span>
        </span>',
        'typePrice' => 'Dollar',
        'middleType' => 'selectorAnual',
        'textMiddle' => null,
        'button' => true,
        'textButton' => 'Prueba Escala ahora',
        'details' => [
            [
                'title' => 'Landing page',
                'items' => ['Páginas: ilimitadas', 'Subdominio personalizado', 'Dominios propios: 5'],
            ],
            [
                'title' => 'Email Marketing',
                'items' => ['Emails marketing al mes: 10.000', 'Plantillas: todas las disponibles'],
            ],
            [
                'title' => 'Automatizaciones',
                'items' => ['Flujos: ilimitados'],
            ],
            [
                'title' => 'Formularios',
                'items' => ['Número de formularios: ilimitados'],
            ],
            [
                'title' => 'CRM',
                'items' => ['Contactos en base de datos: <br class="space"> 1.000.000', 'Contactos de marketing: 1.000', 'Usuarios de venta: 2', 'Emails de CRM: ilimitados'],
            ],
            [
                'title' => 'Anuncios Digitales',
                'items' => ['Cuentas de Facebook Ads Manager: 1', 'Campañas publicadas: ilimitadas'],
            ],
            [
                'title' => 'Analíticas',
                'items' => ['Dashboard de administrador', 'Dashboards de vendedores'],
            ],
        ],
    ],
    [
        'type' => 'master',
        'title' => 'Plan <span class="greenBlueColor">Enterprise</span>',
        'price' => 'A partir de <br class="space">
        <span class="contactos">
            <span>CIEN MIL</span>
            <span class="c">
                contactos
            </span>
        </span>',
        'typePrice' => null,
        'middleType' => null,
        'textMiddle' => 'Todas las herramientas que necesitas <br class="space"> sin límites de uso o cantidad.',
        'button' => true,
        'textButton' => 'Habla con un asesor',
        'details' => [
            [
                'title' => 'Landing page',
                'items' => ['Páginas: ilimitadas', 'Subdominio personalizado', 'Dominios propios: 5'],
            ],
            [
                'title' => 'Email Marketing',
                'items' => ['Emails marketing al mes: 10.000', 'Plantillas: todas las disponibles'],
            ],
            [
                'title' => 'Automatizaciones',
                'items' => ['Flujos: ilimitados'],
            ],
            [
                'title' => 'Formularios',
                'items' => ['Número de formularios: ilimitados'],
            ],
            [
                'title' => 'CRM',
                'items' => ['Contactos en base de datos: <br class="space"> 1.000.000', 'Contactos de marketing: 1.000', 'Usuarios de venta: 2', 'Emails de CRM: ilimitados'],
            ],
            [
                'title' => 'Anuncios Digitales',
                'items' => ['Cuentas de Facebook Ads Manager: 1', 'Campañas publicadas: ilimitadas'],
            ],
            [
                'title' => 'Analíticas',
                'items' => ['Dashboard de administrador', 'Dashboards de vendedores'],
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


                </div>

            </section>
        @endif

        <section class="innerSectionElement sct2">

            <div class="containElements row">

                @if (isset($items) && count($items) > 0)

                    @foreach ($items as $item)
                        <div class="col-md-12 col-lg-4 elementParent">

                        <div class="elementPrice">

                            <div class="had">
                                <h3 class="secondaryTitle blackColor">
                                    {!! $item['title'] !!}
                                </h3>
                            </div>

                            <div class="elementBody">


                            <div class="price">

                                <p>

                                    {!! $item['price'] !!}

                                </p>

                            </div>

                            <div class="middle">

                                @if (isset($item['middleType']) && $item['middleType'] == 'selectorAnual')

                                    <div class="selectorSwitch">
                                        <small>
                                            Mensual
                                        </small>
                                        <label class="switchCustom"><input value="1" type="checkbox" />
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

                            @if (isset($item['button']) && $item['button'] == true)

                                <div class="buttonSection">

                                    <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                                        {!! $item['textButton'] !!}
                                    </a>

                                </div>

                            @endif

                            @if (isset($item['details']) && count($item['details'] > 0))

                                @foreach ($item['details'] as $item2)

                                    <div class="listCustom">
                                        <h4 class="thirdTitle">
                                            {!! $item2['title'] !!}
                                        </h4>

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

                                @endforeach

                            @endif

                        </div>
                    </div>

                    </div>

                    @endforeach


                @endif


            </div>

        </section>



    </div>


</section>

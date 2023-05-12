  @php

    $featuresElements = [
            "items" => array(
                        [
                            "name" => "¿Qué es?",
                            "type" => "solid",
                            "subItems" => [
                                'Marketing Partner',
                                'Sales Partner <br class="space">
                                Autorizado (Reseller)',
                                'Service Partner Sales Partner (opcional)'
                            ]
                        ],
                        [
                            "name" => "Valor para Escala",
                            "type" => "solid",
                            "subItems" => [
                                'Consiguen leads para Escala',
                                'Consiguen el lead y se encargan del proceso de vender Escala',
                                '- Brinda el servicio de implementación a clientes Escala y gestión de cuenta post-venta <br class="space">
                                - Brinda el servicio de implementación a clientes Escala y gestión de cuenta post-venta'
                            ]
                        ],
                        [
                            "name" => "Rol Escala",
                            "type" => "solid",
                            "subItems" => [
                                '- Vende <br class="space">
                                - Brinda servicio de implementación y gestión de cuenta',
                                '- Asiste al partner en el proceso de vender Escala <br class="space">
                                - Recolecta el pago de la suscripción de Escala (sea pagada por el Partner o por su cliente) <br class="space">
                                - Brinda servicio de implementación y gestión de cuenta post-venta',
                                '- Vende o asiste al Partner a vender Escala (según prefiera el Partner) <br class="space">
                                - Recolecta el pago <br class="space">
                                - Asiste por chat al cliente del Partner <br class="space">
                                - Brinda sesión de configuración a cada cliente del Partner <br class="space">
                                - Asiste al Partner a brindar servicio de implementación y gestión de cuenta post-venta'

                            ]
                        ],
                        [
                            "name" => "Requisitos para entrar",
                            "type" => "solid",
                            "subItems" => [
                                '<span>1.</span> Firmar Acuerdo Afiliado',
                                '<span>1.</span> Completar training de reseller <br class="space">
                                <span>2.</span> Firmar Acuerdo Partner Comercial autorizado',
                                '<span>1.</span> Certificarte <br class="space">
                                <span>2.</span> Comprar Plan Pro <br class="space">
                                <span>3.</span> Firmar Acuerdo Partner <br class="space">
                                <span>4.</span> Ser aprobado/invitado por Escala'
                            ]
                        ],
                        [
                            "name" => "Comisión",
                            "type" => "solid",
                            "subItems" => [
                                '15% Recurrent for 12 months',
                                'Mientras se mantenga como Parner Comercial autorizado <br class="space">
                                <span>Silver:</span> 20% Recurrent for 12 months  <br class="space">
                                <span>Gold:</span> 25% Recurrent for 12 months <br class="space">
                                <span>Diamond:</span> 30% Recurrent for 12 months
                                ',
                                'Mientras esté activo como Partner de Servicio, recibe este tipo de comisión solo por aquellos clientes que consiguió, le vendió la suscripción de Escala y le brinda el servicio de implementación + gestión de cuenta
                                <br class="space"><br class="space">
                                <span>Silver:</span> 20% Recurrent in perpetuity <br class="space">
                                <span>Gold:</span> 25% Recurrent in perpetuity <br class="space">
                                <span>Diamond:</span> 30% Recurrent in perpetuity
                                ',

                            ],
                        ],
                        [
                            "name" => '
                            Requisitos para <br class="space">
                            mantenerte activo <br class="space">
                            y subir de nivel',
                            "type" => "closed",
                            "subItems" => [
                                '<span>1.</span> Estar en cumplimiento con el acuerdo',
                                '<span>1.</span> Al día con training <br class="space">
                                <span>2.</span> Estar en cumplimiento con acuerdo <br class="space">
                                <span>3.</span> Venta de nuevo MRR en un año: <br class="space">
                                <span>Silver:</span> MRR = $0 - $15,000 (~12 licencias) <br class="space">
                                <span>Gold:</span> MRR = $15,001 - $30,000 (~13-24) <br class="space">
                                <span>Diamond:</span> MRR > $30,001 (~25+)',
                                '
                                <span>1.</span> Suscripción activa Escala
                                <span>2.</span> Al día con certificacioens
                                <span>3.</span> Estar en cumplimiento con acuerdo
                                <span>4.</span> Retención de MRR y NDR:
                                <span>Silver:</span> MRR < $1,000 y NDR > 80%
                                <span>Gold:</span> MRR = $1,000 - $,5000 y NDR > 90%
                                <span>Diamond:</span> MRR > $5,000 y NDR > 95%
                                '
                            ]
                        ],



        ),

    ];

@endphp


  <div id="program_alliances">
        <div class="sections">

            {{-- @php
                $parameters = [
                    'backgroundImageType' => true,
                    'overlay' => false,
                    'classSection' => 'threeCol program_alliances_0 newHome',
                    'title' => '
        Acelera el crecimiento <br class="space">
        <span style="color: #DEF3F5">de tu empresa con Escala</span>
    ',
                    'text' =>
                        '<span class="whiteColor">
            La plataforma todo-en-uno para mejorar tus <br class="space">
            resultados de marketing y ventas
      </span>
      <img class="funnelImage" src="' .
                        App::setFilePath('/assets/images/illustrations/others/temporal_funnel.png') .
                        '" alt="">
      ',
                    'threeCol' => true,
                    'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
                    'backgroundImage' => App::setFilePath('/assets/images/overlays/overlay_space_1_big.png'),
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/am/temporal_am.png'),
                    'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM',
                ];
            @endphp --}}

            @header_t1([
                    'backgroundImageType' => true,
                    'overlay' => false,
                    'classSection' => '  threeCol program_alliances_0 newHome',
                    'title' => '
                        Lorem Ipsum is <br class="space">
                        simply dummy text
                    ',
                    'text' => '
                        <span style="color: #DEF3F5">of the printing and typesetting industry</span> <br class="space">
                        Lorem Ipsum has been the industrys standard  <br class="space">
                        dummy text ever since the 1500s, when an <br class="space">
                        unknown printer took a galley of type and <br class="space">
                        scrambled it to make a type specimen
                        ',
                    'threeCol' => true,
                    'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
                    'backgroundImage' => App::setFilePath('/assets/images/banners/background_program_alliances.png'),
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/team_work_alliance.png'),
                    'img_alt' => 'Ilustración Andrés Moreno, CEO de Escala, embudos de venta',
                ])
            @endheader_t1


            @php
                $desk_reviews = [
                    [
                        'area' => 'Finanzas',
                        'text' => '
                        <strong>“Gracias a Escala ahorramos 70% del tiempo invertido</strong> por el equipo comercial en tareas operativas y aumentamos 20% la cantidad de clientes.”
                        ',
                        'logo' => App::setFilePath('/assets/images/logos/logo_saeta.png'),
                        'name' => 'Claudio Radovich, Fundador',
                    ],
                    [
                        'area' => 'Consultoría',
                        'text' => '
                        <strong>“Logramos 2X nuestra facturación</strong> en menos de 6 meses y multiplicar 4X los nuevos leads gracias a Escala.”
                        ',
                        'logo' => App::setFilePath('/assets/images/illustrations/others/icon_mark_testimonial.png'),
                        'name' => 'William Ávila, CEO',
                    ],
                    [
                        'area' => 'Salud y bienestar',
                        'text' => '<strong>“Aumentamos 5X la tasa de recuperación</strong> de carrito de compra abandonado y 41% la tasa de apertura promedio en campañas de Email Marketing.”',
                       'logo' => App::setFilePath('/assets/images/logos/logo_rgg.png'),
                        'name' => 'Biaggio Correale, Director <br class="space"> de Operaciones',
                    ]
                ];

            @endphp



        <section class="customSection sectionParent program_alliances_1">

            <div class="section-row">


                <section class="innerSectionElement sct1">

                    <div class="containElements">
                        <h2 class="primaryTitle blackColor">
                            <span>Programas</span> alianzas
                        </h2>
                    </div>

                </section>

                         <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="row">

                            <div class="list col-md-12 col-lg-11">

                                <div class="headerList row">
                                    <div style="background-color: #DEF3F5" class="element col-3">


                                    <h3 style="color: #00506B" >
                                       Nombre programa
                                    </h3>
                                    </div>
                                    <div style="background-color: #FAD873" class="element col-3">

                                         <div class="containerImage">
                                            @php
                                                $icon = App::setFilePath('/assets/images/illustrations/others/icon_magnet_partners.png');
                                            @endphp
                                             <img src="{!! $icon !!}" loading="lazy" >
                                         </div>

                                    <h3 style="color: #00506B" >
                                       Afiliado
                                    </h3>

                                    </div>
                                    <div style="background-color: #FF4F28" class="element col-3">

                                      <div class="containerImage">
                                            @php
                                                $icon = App::setFilePath('/assets/images/illustrations/others/icon_heart_handshake.png');
                                            @endphp
                                             <img src="{!! $icon !!}" loading="lazy" >
                                         </div>
                                    <h3 style="color: white" >
                                       Partner comercial
                                    </h3>

                                    </div>
                                    <div style="background-color: #01516F" class="element col-3">

                                      <div class="containerImage">
                                            @php
                                                $icon = App::setFilePath('/assets/images/illustrations/others/icon_orientation.png');
                                            @endphp
                                             <img src="{!! $icon !!}" loading="lazy" >
                                         </div>
                                    <h3 style="color: white" >
                                    Partner de servicio
                                    </h3>

                                    </div>

                                </div>

                                @if (isset($featuresElements['items']))
                                    <ul class="pricingList">

                                        @foreach ($featuresElements['items'] as $key => $item)
                                            <li class="itemParent">


                                                @if ( isset($item['type']) && $item['type'] != 'solid')

                                                <button type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#parentservices_{{ $key }}"
                                                    aria-expanded="false"
                                                    aria-controls="parentservices_{{ $key }}"
                                                    >
                                                    {{-- {!! $item['name'] !!} --}}

                                                    @if (isset($item['subItems']) && count($item['subItems']) >= 1)
                                                        <i class="fas fa-caret-down"></i>
                                                    @endif

                                                </button>
                                                @endif

                                                <div id="parentservices_{{ $key }}"
                                                    class="accordion-collapse collapse subItemList {!! ( isset($item['type']) && $item['type'] === 'solid') ? 'show' : '' !!}"
                                                    aria-labelledby="parentservices_{{ $key }}">
                                                    <div class="accordion-body">

                                                        @if (isset($item['subItems']))
                                                            <table class="table">
                                                                <tbody>
                                                                        <tr>
                                                                            <td class="col-3">{!! $item['name'] !!}</td>
                                                                    @foreach ($item['subItems'] as $subKey => $subItem)
                                                                            <td class="col-3">
                                                                                    {!! $subItem !!}
                                                                            </td>
                                                                    @endforeach
                                                                        </tr>
                                                                </tbody>
                                                            </table>
                                                        @endif
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                @endif
                            </div>

                        </div>

                    </div>
                </section>

            </div>

        </section>

            <section
            style="background-image: url({!! App::setFilePath('/assets/images/banners/background_space_4.png') !!})"
            class="customSection sectionParent program_alliances_2 ">

                <div class="section-row">


                    <section class="innerSectionElement sct1">


                        <div class="row">

                            <div class="slideshowCards col-md-12 col-lg-9">
                                <div class="containElements">

                                    <div id="carousel-testimonials-desktop" class="owl-carousel owl-theme">

                                        @if (isset($desk_reviews) && $desk_reviews != null)
                                            @foreach ($desk_reviews as $index => $item)
                                                <div class="item @if ($index === array_key_first($desk_reviews)) active @endif ">

                                                    <div class="testimonial">

                                                        <div class="containElements">

                                                            <div class="area">
                                                                <h3>
                                                                    {!! $item['area'] !!}
                                                                </h3>
                                                            </div>

                                                            <div class="quote">
                                                                <div class="containerImage">
                                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/open_comi.png') !!}" loading="lazy">

                                                                </div>
                                                            </div>

                                                            <p class="text">
                                                                {!! $item['text'] !!}
                                                            </p>

                                                            <div class="byCompany">
                                                                <div class="logo">
                                                                    <div class="containerImage">
                                                                        <img alt="TrustPilot review"
                                                                            src="{!! $item['logo'] !!}" alt=""
                                                                            loading="lazy">
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <span class="name">
                                                                        {!! $item['name'] !!}
                                                                    </span>
                                                                    <div class="stars">
                                                                        <div class="containerImage">
                                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars.png') !!}"
                                                                                loading="lazy">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>


                                                </div>
                                            @endforeach
                                        @endif

                                    </div>


                                </div>
                            </div>

                            <div class="info col-md-12 col-lg-3">
                                <div class="containElements">
                                    <h2 class="primaryTitle blackColor">

                                        Nuestros clientes <br class="space">
                                        <span>lo comprueban</span>

                                    </h2>
                                    <p class="primaryText">
                                        Conoce sus casos de éxito
                                    </p>
                                </div>
                            </div>

                        </div>


                    </section>


                </div>

                {{-- <img src="{!! App::setFilePath('/assets/images/banners/background_space_4.png') !!}" alt="" class="overlaySpace"> --}}


            </section>


            <script>
                jQuery('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 1
                        },
                        1000: {
                            items: 3
                        },
                        1250: {
                            items: 3
                        },
                        1500: {
                            items: 4
                        }
                    }
                })
            </script>







        </div>




    </div>

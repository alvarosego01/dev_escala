
{{--
  Template Name: [B] Landing - Landing Pages 2022
--}}

@php
    $customHeaderActive = ACF_CUSTOM::_getField('enable_custom_header');
@endphp

@extends('layouts.app')
@section('content')
<div id="landing-landingPages2022-bootstrap">
  <div class="sections">

    @if ( isset($customHeaderActive) && $customHeaderActive == 1 )

    @php

    $custom_header_title = ACF_CUSTOM::_getField('custom_header_title');
    $custom_header_subText = ACF_CUSTOM::_getField('custom_header_subText');
    $custom_header_image = ACF_CUSTOM::_getField('custom_header_image');
    $custom_header_formTitle = ACF_CUSTOM::_getField('custom_header_formTitle');

    if ( !isset($custom_header_title) || $custom_header_title == null ) {
        # code...
        $custom_header_title = '<span class="whiteColor">Genera más leads <br class="space"> con las landing pages <br class="space"> de Escala</span>';
    }
    if ( !isset($custom_header_subText) || $custom_header_subText == null ) {
        # code...
        $custom_header_subText = '<span class="whiteColor">Andrés Moreno</span><span class="sub" style="color: #B9E6E9">Fundador de Escala <br class="mobileElement"> & Open English</span>';
    }
    if ( !isset($custom_header_formTitle) || $custom_header_formTitle == null ) {
        # code...
        $custom_header_formTitle = 'Comienza ahora';
    }
    if ( !isset($custom_header_image) || $custom_header_image == null ) {
        # code...
        $custom_header_image = App::setFilePath('/assets/images/person/am/headerlanding2022.png');
    }else{
        $custom_header_image = $custom_header_image['url'];
    }

    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landingLandingPages2022_0',
     'title' => $custom_header_title,
     'text' => $custom_header_subText,
     'threeCol' => true,
     'textForm' => $custom_header_formTitle,
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => $custom_header_image,
    ) ;
    @endphp
    @header_t1( $parameters )
    @endheader_t1

    @else
    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landingLandingPages2022_0',
     'title' => '<span class="whiteColor">
        Genera más leads <br class="space">
        con las landing pages <br class="space">
        de Escala
        </span>',
     'text' => '<span class="whiteColor">Andrés Moreno</span><span class="sub" style="color: #B9E6E9">Fundador de Escala <br class="mobileElement"> & Open English</span> ',
     'threeCol' => true,
     'textForm' => 'Comienza ahora',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/am/headerlanding2022.png'),
    ) ;
    @endphp
    @header_t1( $parameters )
    @endheader_t1

@endif


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingLandingPages2022_1',
        'enableTitle' => true,
        'titlePrincipal' => '¿Qué obtienes con <br class="desktopTabletElement"> nuestras landing pages?',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/2_queobtienes_01.png'),
                'title' => '<span class="grayColorTexts5">
                    Da a conocer <br class="desktopTabletElement"> tus productos y servicios
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/2_queobtienes_02.png'),
                'title' => '<span class="grayColorTexts5">
                    Registra los datos de tus visitantes <br class="desktopTabletElement"> para convertirlos en clientes
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/2_queobtienes_03.png'),
                'title' => '<span class="grayColorTexts5">
                    Genera demanda <br class="desktopTabletElement"> y consideración de tu marca
                    </span>',
                'enableButton' => false,
            ],

        ],
    ];
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2

    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingLandingPages2022_2',
        'enableTitle' => true,
        'titlePrincipal' => 'Ahorra tiempo y dinero. <br class="space"> Construye páginas atractivas <br class="desktopTabletElement"> en minutos y sin programar',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/3_ahorratiempo_01.png'),
                'title' => '<span class="greenBlueColor7">
                    Elige tu Plantilla
                </span>',
                'text' => 'Elige entre cientos de plantillas pre-diseñadas, <br class="desktopTabletElement"> 100% responsive para que luzcan bien en <br class="desktopTabletElement"> cualquier dispositivo.',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/3_ahorratiempo_02.png'),
                'title' => '<span class="greenBlueColor7">
                    Personalízala
                </span>',
                'text' => 'Dale tu toque personal y edita fácilmente imágenes,<br class="desktopTabletElement"> textos, colores y el formulario para que enamores a tus <br class="desktopTabletElement"> visitantes y compartan su información de contacto',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/3_ahorratiempo_03.png'),
                'title' => '<span class="greenBlueColor7">
                    Publica
                </span>',
                'text' => 'Con tan solo un clic, programa tu landing <br class="desktopTabletElement"> page y comienza a atraer visitantes.<br class="space"> ¡No más códigos!',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/3_ahorratiempo_04.png'),
                'title' => '<span class="greenBlueColor7">
                    Optimiza
                </span>',
                'text' => 'Mide el rendimiento de tus páginas con métricas <br class="desktopTabletElement"> relevantes. Visualiza tus resultados en tiempo <br class="desktopTabletElement"> real con dashboards amigables',
                'enableButton' => false,
            ],

        ],
    ];
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2

    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingLandingPages2022_3',
        'enableTitle' => true,
        'titlePrincipal' => '
        <span class="whiteColor">
            Las landing pages de <br class="desktopTabletElement">
            Escala lo tienen todo
        </span>',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/4_tienentodo_01.png'),
                'title' => '<span class="whiteColor">
                    Botón de WhatsApp integrado
                    </span>',
                'text' => 'Registra los datos de tus visitantes <br class="desktopTabletElement"> y recibe consultas en tiempo real.',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/4_tienentodo_02.png'),
                'title' => '<span class="whiteColor">
                    Cuentan con formularios integrados
                    </span>',
                'text' => '
                Con los formularios integrados de tus landing pages,<br class="desktopTabletElement"> los datos de tus visitantes quedan guardados <br class="desktopTabletElement"> automáticamente en tu CRM.
                ',
                'enableButton' => false,
            ],


        ],
    ];
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2

<section class="customSection sectionParent landingLandingPages2022_4">

    <div class="section-row">

          <section class="innerSectionElement1">

            <h2 class="primaryTitle blackColor">
              Nuestros clientes te dicen <br class="desktopTabletElement"> qué tan fácil es usar Escala
            </h2>


          </section>

          <section class="innerSectionElement2">

            <div class="imagesSection">

                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust1.png') !!}" alt="">

                </div>
                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust2.png') !!}" alt="">

                </div>
                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust3.png') !!}" alt="">

                </div>

            </div>

          </section>

    </div>


  </section>




@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingLandingPages2022_5',
    'enableTitle' => true,
    'titlePrincipal' => '
    Además de crear landing pages increíbles,<br class="desktopTabletElement"> conoce lo que puedes lograr con Escala, <br class="desktopTabletElement"> nuestra plataforma todo en uno',
    'overlay' => false,
    'overlayImage' => null,
    'enableButton' => false,
    'elements' => array(
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_01.png'),
                    'title' => '<span class="greenBlueColor7">
                        Multiplica las visitas <br class="desktopTabletElement"> a tu landing page con <br class="desktopTabletElement"> anuncios digitales
                        </span>',
                    'text' => '
                    Genera tráfico a tu landing page. Crea, publica y <br class="desktopTabletElement"> gestiona campañas de anuncios digitales <br class="desktopTabletElement"> de Instagram y Facebook, directamente <br class="desktopTabletElement"> desde Escala.
                    ',
                    'enableButton' => false,

                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_02.png'),
                    'title' => '<span class="greenBlueColor7">
                        Envía mensajes <br class="desktopTabletElement"> importantes con emails <br class="desktopTabletElement"> profesionales
                        </span>
                    ',
                    'text' => '
                    Nutre la relación con tus contactos enviando efectivas <br class="desktopTabletElement"> campañas de emails. Con nuestras plantillas <br class="desktopTabletElement"> prediseñadas logras enviar masivamente mensajes <br class="desktopTabletElement"> personalizados con tan solo un clic.
                    ',
                    'enableButton' => false,
                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_03.png'),
                    'title' => '<span class="greenBlueColor7">
                        Ten la visibilidad de <br class="desktopTabletElement"> la salud de tu negocio con <br class="desktopTabletElement"> dashboards amigables
                        </span>',
                    'text' => '
                    Lo que no se mide, no mejora. Escala te da las <br class="desktopTabletElement"> analíticas necesarias en dashboards amigables <br class="desktopTabletElement"> para que optimices tus esfuerzos de venta y <br class="desktopTabletElement"> marketing.
                    ',
                    'enableButton' => false,
                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_04.png'),
                    'title' => '<span class="greenBlueColor7">
                        Gestiona y organiza <br class="desktopTabletElement"> la información de tus contactos <br class="desktopTabletElement"> con el CRM integrado
                        </span>',
                    'text' => '
                    La información que registran tus visitantes en los formularios <br class="desktopTabletElement"> integrados de tus landing pages se guarda automáticamente <br class="desktopTabletElement"> en el CRM de Escala. Organiza y simplifica tu gestión de <br class="desktopTabletElement"> ventas con el CRM más fácil de usar.
                    ',
                    'enableButton' => false,
                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_05.png'),
                    'title' => '<span class="greenBlueColor7">
                        Automatiza para ahorrar <br class="desktopTabletElement"> tiempo y evitar errores
                        <br class="desktopTabletElement">
                        <br class="desktopTabletElement">
                        </span>',
                    'text' => '
                    Nunca más realices tareas repetitivas de marketing <br class="desktopTabletElement"> digital y ventas. Programa recordatorios, acciones y <br class="desktopTabletElement"> mensajes que aumentan tu productividad.',
                    'enableButton' => false,
                ],


    )

];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1

{{-- 6 --}}

<section class="customSection sectionParent landingLandingPages2022_6">

    <div class="section-row">

        <section class="innerSectionElement1">

          <div class="imagesSection">

              <div class="element">

                  <img class="desktopElement" src="{!! App::setFilePath('/assets/images/illustrations/others/6_banner-plantillas-1.png') !!}" alt="">
                  <img class="mobileElement" src="{!! App::setFilePath('/assets/images/illustrations/others/6_banner-plantillas.png') !!}" alt="">

              </div>
          </div>

        </section>
          <section class="innerSectionElement2">

            <h2 class="primaryTitle whiteColor">
              En Escala hay una plantilla ideal <br class="desktopTabletElement"> para cada tipo de negocio
            </h2>

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
                ¡Comenzar ahora!
              </a>


          </section>


    </div>

</section>


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingLandingPages2022_7',
    'enableTitle' => true,
    'titlePrincipal' => '
    Servicio Premium
    ',
    'subTitlePrincipal' => 'No solo te ayudamos a crear landing pages, también <br class="desktopTabletElement"> te vamos a acompañar en todo el camino al éxito',
    'overlay' => false,
    'enableButton' => true,
    'urlButton' => '#',
    'textButton' => '¡Comenzar ahora!',
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_01.png'),
            'title' => '<span class="greenBlueColor7">
                Acompañamiento Premium
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_02.png'),
            'title' => '<span class="greenBlueColor7">
                Formación constante
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_03.png'),
            'title' => '<span class="greenBlueColor7">
                Atención oportuna
                </span>',
            'enableButton' => false,
        ],
        [
            'img' => App::setFilePath('/assets/images/illustrations/others/7_serviciopremium_04.png'),
            'title' => '<span class="greenBlueColor7">
                Servicios especializados
                </span>',
            'enableButton' => false,
        ],


    ],
];
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2


@php
$parameters = [
    'classSection' => 'landingLandingPages2022_8',
    'title' => '
    Quiero crear en minutos <br class="desktopTabletElement"> hermosas landing pages
        </span>',
        'textForm' => 'Comienza ahora',
    'text' => 'Lo que antes tardaba días en programación y diseño, ahora lo <br class="desktopTabletElement"> puedes hacer en minutos, sin programadores ni diseñadores.<br class="space"> ¡Créalas tú mismo!',
    'image' => App::setFilePath('/assets/images/illustrations/others/8_bannerfinal_01.png'),
    'side' => 'left',
];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



</div>

</div>



@endsection




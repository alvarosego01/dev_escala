
{{--
  Template Name: [B] Landing LP -  Expertos leads calificados 2022
--}}


@extends('layouts.app')
@section('content')
<div id="landing-landingPages2022_ExpertosLeadsCalificados-bootstrap">
  <div class="sections">

   @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landingLandingPages2022_ExpertosLeadsCalificados_0',
     'title' => '
        <div style="color: #B9E6E9">
            Landing pages + <br class="space">
            Expertos = <br class="space">
        </div>
        <span class="whiteColor">
            Genera leads <br class="space">
            calificados
        </span>

        ',
     'text' => '
     <span class="whiteColor">
        En Escala crea landing pages de alta <br class="space">
        conversión con acompañamiento en vivo de <br class="space">
        especialistas en marketing digital y ventas para <br class="space">
        que consigas los mejores resultados.
    </span>
    <div class="byAm">
        <span class="whiteColor">Andrés Moreno</span> <br class="space">
        <span class="sub" style="color: #B9E6E9">Fundador de Escala <br class="MT_e"> & Open English</span>
    </div>',
     'threeCol' => true,
     'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/am/headerlanding2022.png'),
    ) ;
    @endphp
    @header_t1( $parameters )
    @endheader_t1



    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingLandingPages2022_ExpertosLeadsCalificados_1',
        'enableTitle' => true,
        'titlePrincipal' => '¿Qué obtienes con <br class="DT_e"> nuestras landing pages?',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/2_queobtienes_01.png'),
                'title' => '<span class="grayColorTexts5">
                    Da a conocer <br class="DT_e"> tus productos y servicios
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/2_queobtienes_02.png'),
                'title' => '<span class="grayColorTexts5">
                    Registra los datos de tus visitantes <br class="DT_e"> para convertirlos en clientes
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/2_queobtienes_03.png'),
                'title' => '<span class="grayColorTexts5">
                    Genera demanda <br class="DT_e"> y consideración de tu marca
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
        'classSection' => 'landingLandingPages2022_ExpertosLeadsCalificados_2',
        'enableTitle' => true,
        'titlePrincipal' => 'Ahorra tiempo y dinero. <br class="space"> Construye páginas atractivas <br class="DT_e"> en minutos y sin programar',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/3_ahorratiempo_01.png'),
                'title' => '<span class="greenBlueColor7">
                    Elige tu Plantilla
                </span>',
                'text' => 'Elige entre cientos de plantillas pre-diseñadas, <br class="DT_e"> 100% responsive para que luzcan bien en <br class="DT_e"> cualquier dispositivo.',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/3_ahorratiempo_02.png'),
                'title' => '<span class="greenBlueColor7">
                    Personalízala
                </span>',
                'text' => 'Dale tu toque personal y edita fácilmente imágenes,<br class="DT_e"> textos, colores y el formulario para que enamores a tus <br class="DT_e"> visitantes y compartan su información de contacto',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/3_ahorratiempo_03.png'),
                'title' => '<span class="greenBlueColor7">
                    Publica
                </span>',
                'text' => 'Con tan solo un clic, programa tu landing <br class="DT_e"> page y comienza a atraer visitantes.<br class="space"> ¡No más códigos!',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/3_ahorratiempo_04.png'),
                'title' => '<span class="greenBlueColor7">
                    Optimiza
                </span>',
                'text' => 'Mide el rendimiento de tus páginas con métricas <br class="DT_e"> relevantes. Visualiza tus resultados en tiempo <br class="DT_e"> real con dashboards amigables',
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
        'classSection' => 'landingLandingPages2022_ExpertosLeadsCalificados_3',
        'enableTitle' => true,
        'titlePrincipal' => '
        <span class="whiteColor">
            Las landing pages de <br class="DT_e">
            Escala lo tienen todo
        </span>',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/4_tienentodo_01.png'),
                'title' => '<span class="whiteColor">
                    Botón de WhatsApp integrado
                    </span>',
                'text' => 'Registra los datos de tus visitantes <br class="DT_e"> y recibe consultas en tiempo real.',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/4_tienentodo_02.png'),
                'title' => '<span class="whiteColor">
                    Cuentan con formularios integrados
                    </span>',
                'text' => '
                Con los formularios integrados de tus landing pages,<br class="DT_e"> los datos de tus visitantes quedan guardados <br class="DT_e"> automáticamente en tu CRM.
                ',
                'enableButton' => false,
            ],


        ],
    ];
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2

<section class="customSection sectionParent landingLandingPages2022_ExpertosLeadsCalificados_4">

    <div class="section-row">

          <section class="innerSectionElement1">

            <h2 class="primaryTitle blackColor">
              Nuestros clientes te dicen <br class="DT_e"> qué tan fácil es usar Escala
            </h2>

          </section>

          <section class="innerSectionElement2">

            <div class="imagesSection">

                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot_escalaLanding-1.jpeg') !!}" alt="">

                </div>
                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot_escalaLanding-2.jpeg') !!}" alt="">

                </div>
                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot_escalaLanding-3.jpeg') !!}" alt="">

                </div>

            </div>

          </section>

    </div>

</section>



@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingLandingPages2022_ExpertosLeadsCalificados_5',
    'enableTitle' => true,
    'titlePrincipal' => '
    Además de crear landing pages increíbles,<br class="DT_e"> conoce lo que puedes lograr con Escala, <br class="DT_e"> nuestra plataforma todo en uno',
    'overlay' => false,
    'overlayImage' => null,
    'enableButton' => false,
    'elements' => array(
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_01.png'),
                    'title' => '<span class="greenBlueColor7">
                        Multiplica las visitas <br class="DT_e"> a tu landing page con <br class="DT_e"> anuncios digitales
                        </span>',
                    'text' => '
                    Genera tráfico a tu landing page. Crea, publica y <br class="DT_e"> gestiona campañas de anuncios digitales <br class="DT_e"> de Instagram y Facebook, directamente <br class="DT_e"> desde Escala.
                    ',
                    'enableButton' => false,

                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_02.png'),
                    'title' => '<span class="greenBlueColor7">
                        Envía mensajes <br class="DT_e"> importantes con emails <br class="DT_e"> profesionales
                        </span>
                    ',
                    'text' => '
                    Nutre la relación con tus contactos enviando efectivas <br class="DT_e"> campañas de emails. Con nuestras plantillas <br class="DT_e"> prediseñadas logras enviar masivamente mensajes <br class="DT_e"> personalizados con tan solo un clic.
                    ',
                    'enableButton' => false,
                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_03.png'),
                    'title' => '<span class="greenBlueColor7">
                        Ten la visibilidad de <br class="DT_e"> la salud de tu negocio con <br class="DT_e"> dashboards amigables
                        </span>',
                    'text' => '
                    Lo que no se mide, no mejora. Escala te da las <br class="DT_e"> analíticas necesarias en dashboards amigables <br class="DT_e"> para que optimices tus esfuerzos de venta y <br class="DT_e"> marketing.
                    ',
                    'enableButton' => false,
                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_04.png'),
                    'title' => '<span class="greenBlueColor7">
                        Gestiona y organiza <br class="DT_e"> la información de tus contactos <br class="DT_e"> con el CRM integrado
                        </span>',
                    'text' => '
                    La información que registran tus visitantes en los formularios <br class="DT_e"> integrados de tus landing pages se guarda automáticamente <br class="DT_e"> en el CRM de Escala. Organiza y simplifica tu gestión de <br class="DT_e"> ventas con el CRM más fácil de usar.
                    ',
                    'enableButton' => false,
                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_05.png'),
                    'title' => '<span class="greenBlueColor7">
                        Automatiza para ahorrar <br class="DT_e"> tiempo y evitar errores
                        <br class="DT_e">
                        <br class="DT_e">
                        </span>',
                    'text' => '
                    Nunca más realices tareas repetitivas de marketing <br class="DT_e"> digital y ventas. Programa recordatorios, acciones y <br class="DT_e"> mensajes que aumentan tu productividad.',
                    'enableButton' => false,
                ],


    )

];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1

{{-- 6 --}}

<section class="customSection sectionParent landingLandingPages2022_ExpertosLeadsCalificados_6">

    <div class="section-row">

        <section class="innerSectionElement1">

          <div class="imagesSection">

              <div class="element">

                  <img class="D_e" src="{!! App::setFilePath('/assets/images/illustrations/others/6_banner-plantillas-1.png') !!}" alt="">
                  <img class="MT_e" src="{!! App::setFilePath('/assets/images/illustrations/others/6_banner-plantillas.png') !!}" alt="">

              </div>
          </div>

        </section>
          <section class="innerSectionElement2">

            <h2 class="primaryTitle whiteColor">
              En Escala hay una plantilla ideal <br class="DT_e"> para cada tipo de negocio
            </h2>

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                Recibe un demo
              </a>


          </section>


    </div>

</section>


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingLandingPages2022_ExpertosLeadsCalificados_7',
    'enableTitle' => true,
    'titlePrincipal' => '
    Servicio Premium
    ',
    'subTitlePrincipal' => 'No solo te ayudamos a crear landing pages, también <br class="DT_e"> te vamos a acompañar en todo el camino al éxito',
    'overlay' => false,
    'enableButton' => true,
    'urlButton' => '#',
    'textButton' => 'Recibe un demo',
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
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
    'classSection' => 'landingLandingPages2022_ExpertosLeadsCalificados_8',
    'title' => '
    Quiero crear en minutos <br class="DT_e"> hermosas landing pages
        </span>',
        'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
    'text' => 'Lo que antes tardaba días en programación y diseño, ahora lo <br class="DT_e"> puedes hacer en minutos, sin programadores ni diseñadores.<br class="space"> ¡Créalas tú mismo!',
    'image' => App::setFilePath('/assets/images/illustrations/others/8_bannerfinal_01.png'),
    'side' => 'left',
];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



</div>

</div>



@endsection




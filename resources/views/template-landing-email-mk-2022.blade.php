
{{--
  Template Name: [B] Landing - Email mk 2022
--}}

@php
    $customHeaderActive = ACF_CUSTOM::_getField('enable_custom_header');
@endphp


@extends('layouts.app')

@section('content')

<div id="landing-emailMk-bootstrap">

  <div class="sections">


    @if ( isset($customHeaderActive) && $customHeaderActive == 1 )

    @php

    $custom_header_title = ACF_CUSTOM::_getField('custom_header_title');
    $custom_header_subText = ACF_CUSTOM::_getField('custom_header_subText');
    $custom_header_image = ACF_CUSTOM::_getField('custom_header_image');
    $custom_header_formTitle = ACF_CUSTOM::_getField('custom_header_formTitle');

    if ( !isset($custom_header_title) || $custom_header_title == null ) {
        # code...
        $custom_header_title = '<span class="whiteColor"><span class="preTitle">Con los emails de Escala</span> <br class="space"> Genera más leads y mantén la <br class="desktopTabletElement"> comunicación con tus clientes</span>';
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
        $custom_header_image = App::setFilePath('/assets/images/person/am/landings_emails_andres_01.png');
    }else{
        $custom_header_image = $custom_header_image['url'];
    }

    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landingemailMk_0',
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
     'classSection' => 'threeCol landingemailMk_0',
     'title' => '<span class="whiteColor">
<span class="preTitle">Con los emails de Escala</span> <br class="space">
Genera más leads y mantén la <br class="desktopTabletElement">
comunicación con tus clientes
        </span>',
     'text' => '<span class="whiteColor">Andrés Moreno</span><span class="sub" style="color: #B9E6E9">Fundador de Escala <br class="mobileElement"> & Open English</span> ',
     'threeCol' => true,
     'textForm' => 'Comienza ahora',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/am/landings_emails_andres_01.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1

    @endif




    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingemailMk_1',
        'enableTitle' => true,
        'titlePrincipal' => '
        Conoce los beneficios <br class="desktopTabletElement">
de nuestro email marketing
        ',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_01.png'),
                'title' => '<span class="grayColorTexts5">
                     Date a conocer <br class="desktopTabletElement">
con nuevos leads
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_02.png'),
                'title' => '<span class="grayColorTexts5">
                    Mantén comunicación <br class="desktopTabletElement">
constante con tus clientes
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_03.png'),
                'title' => '<span class="grayColorTexts5">
                    Hazle seguimiento a tus leads <br class="desktopTabletElement">
hasta cerrar la venta
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_04.png'),
                'title' => '<span class="grayColorTexts5">
                    Sé más efectivo con <br class="desktopTabletElement">
emails que no llegan a la <br class="desktopTabletElement">
bandeja de Spam
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
        'classSection' => 'landingemailMk_2',
        'enableTitle' => true,
        'titlePrincipal' => '
        Crea campañas de <br class="desktopTabletElement">
Email Marketing efectivas
        ',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_12.png'),
                'title' => '<span class="greenBlueColor7">
                    Elige tu Plantilla
                </span>',
                'text' => '
                En Escala hemos creado plantillas optimizadas <br class="desktopTabletElement">
con las mejores prácticas de email marketing <br class="desktopTabletElement">
para no caer en la  bandeja de spam. Elige la más <br class="desktopTabletElement">
adecuada para tu campaña y dale tu toque personal.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_09.png'),
                'title' => '<span class="greenBlueColor7">
                    Envía
                </span>',
                'text' => '
                Haz envíos masivos a tus leads y clientes con <br class="desktopTabletElement">
campañas relevantes para: lanzar nuevos productos <br class="desktopTabletElement">
o servicios, mandar promociones customizadas, <br class="desktopTabletElement">
evaluar cómo se sienten y fidelizar a tus clientes.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_10.png'),
                'title' => '<span class="greenBlueColor7">
                    Automatiza
                </span>',
                'text' => '
                En Escala programa el día y la hora de tu envío. <br class="desktopTabletElement">
Automatiza respuestas según el feedback de tus <br class="desktopTabletElement">
clientes y leads. Mantén comunicación constante,<br class="desktopTabletElement">
sin hacer tareas repetitivas.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_11.png'),
                'title' => '<span class="greenBlueColor7">
                    Optimiza
                </span>',
                'text' => '
                Mide el rendimiento de tus campañas de email <br class="desktopTabletElement">
marketing en tiempo real y mejora los índices de <br class="desktopTabletElement">
apertura, clics y rebote para hacer exitosas tus <br class="desktopTabletElement">
campañas.
                ',
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
        'classSection' => 'landingemailMk_3',
        'enableTitle' => true,
        'titlePrincipal' => '
        <span class="whiteColor">
            Los emails de Escala son <br class="desktopTabletElement">
realmente poderosos
        </span>',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_05.png'),
                'title' => '<span class="whiteColor">
                    Dile adiós <br class="space">
a la bandeja de Spam
                    </span>',
                'text' => '
                Nuestra tecnología permite que todos tus emails <br class="desktopTabletElement">
lleguen al lugar correcto en el momento correcto. <br class="space">
Emails realmente efectivos.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_06.png'),
                'title' => '<span class="whiteColor">
                    Plantillas <br class="space">
Optimizadas
                    </span>',
                'text' => '
                Nuestra plantillas están diseñadas en base a las <br class="desktopTabletElement">
mejores prácticas, tomando en cuenta todo lo que <br class="desktopTabletElement">
necesitas para que tus emails puedan ser leídos <br class="desktopTabletElement">
sin problemas en todas las plataformas de correo.
                ',
                'enableButton' => false,
            ],


        ],
    ];
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2

<section class="customSection sectionParent landingemailMk_4">

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
    'classSection' => 'landingemailMk_5',
    'enableTitle' => true,
    'titlePrincipal' => '
    Potencia tu marketing digital con <br class="desktopTabletElement">
    Escala, nuestra plataforma todo en uno
    ',
    'subTitlePrincipal' => '
    Tu email marketing estará ya integrado a la plataforma “todo en uno” de marketing digital <br class="desktopElement">
y ventas más completa de todas y fácil de usar
    ',
    'overlay' => false,
    'overlayImage' => null,
    'enableButton' => false,
    'elements' => array(
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_01.png'),
                    'title' => '<span class="greenBlueColor7">
                        Multiplica las visitas a tu <br class="desktopTabletElement">
                        landing page con anuncios <br class="desktopTabletElement">
                        digitales
                        </span>',
                    'text' => '
                    Comienza a generar tráfico a tu landing page. <br class="space">
                    Crea, publica y gestiona campañas de <br class="desktopTabletElement">
                    anuncios digitales de Instagram y Facebook, <br class="desktopTabletElement">
                    directamente desde Escala.
                    ',
                    'enableButton' => false,

                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_13.png'),
                    'title' => '<span class="greenBlueColor7">
                        Crea landing pages <br class="space">
                        en minutos
                        <br class="desktopTabletElement">
                        <br class="desktopTabletElement">
                        </span>
                    ',
                    'text' => '
                    Crea landing pages para darte a conocer y registrar <br class="desktopTabletElement">
                    la data de tus visitantes, sin escribir una línea de <br class="desktopTabletElement">
                    código, ni diseñar. Solo eliges tu plantilla, la <br class="desktopTabletElement">
                    personalizas y en un clic la puedes publicar.
                    ',
                    'enableButton' => false,
                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_04.png'),
                    'title' => '<span class="greenBlueColor7">
                        Gestiona y organiza <br class="space">
la información de tus contactos <br class="space">
con el CRM integrado
                        </span>',
                    'text' => '
                    La información que registran tus visitantes en <br class="desktopTabletElement">
los formularios integrados de tus landing pages <br class="desktopTabletElement">
se guarda automáticamente en el CRM de <br class="desktopTabletElement">
Escala. No más integraciones para organizar,<br class="desktopTabletElement">
gestionar y vender a tus contactos.
                    ',
                    'enableButton' => false,
                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_05.png'),
                    'title' => '<span class="greenBlueColor7">
                        Automatiza para ahorrar <br class="space">
tiempo y evitar errores
                        </span>',
                    'text' => '
                    Nunca más realices tareas repetitivas de <br class="desktopTabletElement">
marketing digital y ventas. Programa <br class="desktopTabletElement">
recordatorios, acciones y mensajes que <br class="desktopTabletElement">
aumentan tu productividad.

                    ',
                    'enableButton' => false,
                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_02.png'),
                    'title' => '<span class="greenBlueColor7">
                        Analíticas <br class="space">
en tiempo real
                        </span>',
                    'text' => '
                    Ten las métricas más relevantes para poder <br class="desktopTabletElement">
optimizar tus resultados de marketing digital <br class="desktopTabletElement">
y ventas. Cuenta con dashboards amigables <br class="desktopTabletElement">
para ver las analíticas de landing pages, ads,<br class="desktopTabletElement">
ventas y emails.
                    ',
                    'enableButton' => false,
                ],
    )
];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1

{{-- 6 --}}

<section class="customSection sectionParent landingemailMk_6">

    <div class="section-row">

        <section class="innerSectionElement1">

          <div class="imagesSection">

              <div class="element">

                  <img  src="{!! App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_07.png') !!}" alt="">

              </div>
          </div>

        </section>
          <section class="innerSectionElement2">

            <h2 class="primaryTitle whiteColor">
                Los emails de Escala, la herramienta <br class="desktopElement">
más efectiva para generar relaciones <br class="desktopElement">
a largo plazo con tus clientes
            </h2>

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                ¡Compruébalo ahora!
              </a>


          </section>


    </div>

</section>


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingemailMk_7',
    'enableTitle' => true,
    'titlePrincipal' => '
    Servicio Premium
    ',
    'subTitlePrincipal' => 'No solo te ayudamos a crear efectivas campañas de email marketing, también <br class="desktopTabletElement"> te vamos a acompañar en todo el camino al éxito
    ',
    'overlay' => false,
    'enableButton' => true,
    'urlButton' => '#',
    'textButton' => '¡Comenzar ahora!',
    'typeButton' => 'primaryButton hoverInEffect',
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
    'classSection' => 'landingemailMk_8',
    'title' => '
Quiero generar más leads y <br class="desktopTabletElement">
fidelizar más clientes con <br class="desktopTabletElement">
campañas de email marketing
        </span>',
        'textForm' => 'Comienza ahora',
    'text' => null,
    'image' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_14.png'),
    'side' => 'left',
    'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => '¡Quiero fidelizarlos ahora!',
  'typeButton' => 'primaryButton hoverInEffect',
];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



</div>

</div>



@endsection




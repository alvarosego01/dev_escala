
{{--
  Template Name: [B] Landing - Email mk exitos escalar exito 2022
--}}

@php
    $customHeaderActive = ACF_CUSTOM::_getField('enable_custom_header');
@endphp


@extends('layouts.app')

@section('content')

<div id="landing-emailMk_exitoEscalarExito-bootstrap">

  <div class="sections">


    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landingemailMk_exitoEscalarExito_0',
     'title' => '<span class="whiteColor">
        <span style="color: #B9E6E9;">
            Email Marketing + <br class="space">
            Expertos = <br class="space">
        </span>
        Escalar con éxito
        </span>',
     'text' => '
        <span class="whiteColor">
            Genera efectivas campañas de email marketing con el <br class="space">
            acompañamiento en vivo de especialistas en marketing <br class="space">
            digital y ventas para logres mayor conversión e <br class="space">
            interacción.
        </span>
        <div class="byAm">
            <span class="whiteColor">Andrés Moreno</span> <br class="space">
            <span class="sub" style="color: #B9E6E9">Fundador de Escala <br class="MT_e"> & Open English</span>
        </div>
    ',
     'threeCol' => true,
     'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/am/landings_emails_andres_01.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1





    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landingemailMk_exitoEscalarExito_1',
        'enableTitle' => true,
        'titlePrincipal' => '
        Conoce los beneficios <br class="DT_e">
de nuestro email marketing
        ',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_01.png'),
                'title' => '<span class="grayColorTexts5">
                     Date a conocer <br class="DT_e">
con nuevos leads
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_02.png'),
                'title' => '<span class="grayColorTexts5">
                    Mantén comunicación <br class="DT_e">
constante con tus clientes
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_03.png'),
                'title' => '<span class="grayColorTexts5">
                    Hazle seguimiento a tus leads <br class="DT_e">
hasta cerrar la venta
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_04.png'),
                'title' => '<span class="grayColorTexts5">
                    Sé más efectivo con <br class="DT_e">
emails que no llegan a la <br class="DT_e">
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
        'classSection' => 'landingemailMk_exitoEscalarExito_2',
        'enableTitle' => true,
        'titlePrincipal' => '
        Crea campañas de <br class="DT_e">
Email Marketing efectivas
        ',
        'subTitlePrincipal' => null,
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_12.png'),
                'title' => '<span class="greenBlueColor7">
                    Elige tu Plantilla
                </span>',
                'text' => '
                En Escala hemos creado plantillas optimizadas <br class="DT_e">
con las mejores prácticas de email marketing <br class="DT_e">
para no caer en la  bandeja de spam. Elige la más <br class="DT_e">
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
                Haz envíos masivos a tus leads y clientes con <br class="DT_e">
campañas relevantes para: lanzar nuevos productos <br class="DT_e">
o servicios, mandar promociones customizadas, <br class="DT_e">
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
                En Escala programa el día y la hora de tu envío. <br class="DT_e">
Automatiza respuestas según el feedback de tus <br class="DT_e">
clientes y leads. Mantén comunicación constante,<br class="DT_e">
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
                Mide el rendimiento de tus campañas de email <br class="DT_e">
marketing en tiempo real y mejora los índices de <br class="DT_e">
apertura, clics y rebote para hacer exitosas tus <br class="DT_e">
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
        'classSection' => 'landingemailMk_exitoEscalarExito_3',
        'enableTitle' => true,
        'titlePrincipal' => '
        <span class="whiteColor">
            Los emails de Escala son <br class="DT_e">
realmente poderosos
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
                'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_05.png'),
                'title' => '<span class="whiteColor">
                    Dile adiós <br class="space">
a la bandeja de Spam
                    </span>',
                'text' => '
                Nuestra tecnología permite que todos tus emails <br class="DT_e">
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
                Nuestra plantillas están diseñadas en base a las <br class="DT_e">
mejores prácticas, tomando en cuenta todo lo que <br class="DT_e">
necesitas para que tus emails puedan ser leídos <br class="DT_e">
sin problemas en todas las plataformas de correo.
                ',
                'enableButton' => false,
            ],


        ],
    ];
@endphp

@contain_multiple_cards_T2( $parameters )

@endcontain_multiple_cards_T2

<section class="customSection sectionParent landingemailMk_exitoEscalarExito_4">

    <div class="section-row">

          <section class="innerSectionElement1">

            <h2 class="primaryTitle blackColor">
              Nuestros clientes te dicen <br class="DT_e"> qué tan fácil es usar Escala

            </h2>


          </section>

          <section class="innerSectionElement2">

            <div class="imagesSection">

                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-1.jpeg') !!}" alt="">

                </div>
                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-2.jpeg') !!}" alt="">

                </div>
                <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/review_home_trustpilot-3.jpeg') !!}" alt="">

                </div>



            </div>

          </section>

    </div>


  </section>


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'landingemailMk_exitoEscalarExito_5',
    'enableTitle' => true,
    'titlePrincipal' => '
    Potencia tu marketing digital con <br class="DT_e">
    Escala, nuestra plataforma todo en uno
    ',
    'subTitlePrincipal' => '
    Tu email marketing estará ya integrado a la plataforma “todo en uno” de marketing digital <br class="D_e">
y ventas más completa de todas y fácil de usar
    ',
    'overlay' => false,
    'overlayImage' => null,
    'enableButton' => false,
    'elements' => array(
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_01.png'),
                    'title' => '<span class="greenBlueColor7">
                        Multiplica las visitas a tu <br class="DT_e">
                        landing page con anuncios <br class="DT_e">
                        digitales
                        </span>',
                    'text' => '
                    Comienza a generar tráfico a tu landing page. <br class="space">
                    Crea, publica y gestiona campañas de <br class="DT_e">
                    anuncios digitales de Instagram y Facebook, <br class="DT_e">
                    directamente desde Escala.
                    ',
                    'enableButton' => false,

                ],
                [
                    'img' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_13.png'),
                    'title' => '<span class="greenBlueColor7">
                        Crea landing pages <br class="space">
                        en minutos
                        <br class="DT_e">
                        <br class="DT_e">
                        </span>
                    ',
                    'text' => '
                    Crea landing pages para darte a conocer y registrar <br class="DT_e">
                    la data de tus visitantes, sin escribir una línea de <br class="DT_e">
                    código, ni diseñar. Solo eliges tu plantilla, la <br class="DT_e">
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
                    La información que registran tus visitantes en <br class="DT_e">
los formularios integrados de tus landing pages <br class="DT_e">
se guarda automáticamente en el CRM de <br class="DT_e">
Escala. No más integraciones para organizar,<br class="DT_e">
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
                    Nunca más realices tareas repetitivas de <br class="DT_e">
marketing digital y ventas. Programa <br class="DT_e">
recordatorios, acciones y mensajes que <br class="DT_e">
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
                    Ten las métricas más relevantes para poder <br class="DT_e">
optimizar tus resultados de marketing digital <br class="DT_e">
y ventas. Cuenta con dashboards amigables <br class="DT_e">
para ver las analíticas de landing pages, ads,<br class="DT_e">
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

<section class="customSection sectionParent landingemailMk_exitoEscalarExito_6">

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
                Los emails de Escala, la herramienta <br class="D_e">
más efectiva para generar relaciones <br class="D_e">
a largo plazo con tus clientes
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
    'classSection' => 'landingemailMk_exitoEscalarExito_7',
    'enableTitle' => true,
    'titlePrincipal' => '
    Servicio Premium
    ',
    'subTitlePrincipal' => 'No solo te ayudamos a crear efectivas campañas de email marketing, también <br class="DT_e"> te vamos a acompañar en todo el camino al éxito
    ',
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
    'classSection' => 'landingemailMk_exitoEscalarExito_8',
    'title' => '
Quiero generar más leads y <br class="DT_e">
fidelizar más clientes con <br class="DT_e">
campañas de email marketing
        </span>',
        'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
    'text' => null,
    'image' => App::setFilePath('/assets/images/illustrations/others/landings_emailsMK_14.png'),
    'side' => 'left',
    'enableButton' => false,
  'urlButton' => '#lead-form',
  'textButton' => 'Recibe un demo',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



</div>

</div>



@endsection





{{--
  Template Name: [B] Landing - ADS 2022
--}}


@extends('layouts.app')

@section('content')

<div id="landing-ADS-2022-bootstrap">

  <div class="sections">
    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landing_ADS_2022_0',
     'title' => '<span style="color: #B9E6E9">
Crea, administra y <br class="desktopTabletElement">
publica ads de <br class="desktopTabletElement">
Facebook desde Escala
        </span>',
     'text' => '<span class="whiteColor">
Haz que todos conozcan tus productos y servicios con <br class="desktopTabletElement">
anuncios digitales de Facebook e Instagram que puedes <br class="desktopTabletElement">
crear, administrar y publicar sin salir de Escala
      </span>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/others/escala_ads_avisos_facebook.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landing_ADS_2022_1',
        'enableTitle' => true,
        'titlePrincipal' => '
¿Qué puedes lograr con los anuncios <br class="desktopTabletElement">
<span class="greenBlueColor">digitales de Facebook e Instagram?</span>
        ',
        'subTitlePrincipal' => '
        Con las campañas de anuncios digitales podrás obtener:
        ',
        'overlay' => false,
        'enableButton' => true,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_publicidad_digital_01a.png'),
                'title' => '<span class="grayColorTexts5">
Promocionar tus <br class="desktopTabletElement">
productos o servicios

                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_publicidad_digital_01b.png'),
                'title' => '<span class="grayColorTexts5">
Generar tráfico a tus <br class="desktopTabletElement">
landing pages
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_publicidad_digital_01c.png'),
                'title' => '<span class="grayColorTexts5">
Aumentar las ventas <br class="desktopTabletElement">
en tus páginas
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_publicidad_digital_01d.png'),
                'title' => '<span class="grayColorTexts5">
Atraer a tu audiencia ideal <br class="desktopTabletElement">
para cerrar más ventas
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_publicidad_digital_01e.png'),
                'title' => '<span class="grayColorTexts5">
Convertir interesados <br class="desktopTabletElement">
en leads en un clic
                    </span>',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_publicidad_digital_01f.png'),
                'title' => '<span class="grayColorTexts5">
Obtener mayor alcance <br class="desktopTabletElement">
de tu público digital
                    </span>',
                'enableButton' => false,
            ],

        ],
    ];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2


<section class="customSection sectionParent landing_ADS_2022_2">

    <div class="section-row">

      <section class="innerSectionElement sct1">

        <div class="containElements">

          <h2 class="primaryTitle blackColor ">
            <span class="greenBlueColor">4 pasos para generar tráfico a tus páginas,</span> <br class="desktopTabletElement">
sin que tu billetera sufra
          </h2>
          {{-- <p class="primaryText grayColorTexts">
            Aumenta tus ventas y la productividad de tu equipo con el CRM más fácil de usar del mercado, <br class="desktopTabletElement">
            el arma secreta de los negocios para escalar con éxito.
          </p> --}}

        </div>

      </section>
      <section class="innerSectionElement sct2">

        <div class="groupElements row">

          <div class="col-12 col-md-12 col-lg-6 infoGroup">

            <div class="containerImage">
              <img alt="Crea increíbles páginas sin programar" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_publicidad_digital_02a.png') !!}" alt="" loading="lazy">
            </div>

            <div class="containerElements">
              <h3 class="secondaryTitle blackColor">
Elige a tu audiencia ideal
              </h3>
              <p class="primaryText  grayColorTexts">
En nuestro Ad Manager podrás elegir a tu público ideal, <br class="desktopTabletElement">
segmentándolo por: edad, región, intereses. Planifica <br class="desktopTabletElement">
cuál es el alcance que esperas lograr con tu campaña.
              </p>
            </div>

          </div>

          <div class="col-12 col-md-12 col-lg-6 infoGroup">

            <div class="containerImage">
              <img alt="Organiza tus contactos y gestiona procesos de venta" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_publicidad_digital_02b.png') !!}" alt="" loading="lazy">
            </div>

            <div class="containerElements">
              <h3 class="secondaryTitle blackColor">
Crea tu anuncio digital
              </h3>
              <p class="primaryText  grayColorTexts">
Combina la imagen más impactante con los textos <br class="desktopTabletElement">
que atraerán a tu audiencia como un imán. Súbelos <br class="desktopTabletElement">
en Escala y listo. Solo espera por la aprobación de <br class="desktopTabletElement">
Facebook para verlos online.
              </p>
            </div>

          </div>

        </div>
        <div class="groupElements row">
          <div class="col-12 col-md-12 col-lg-6 infoGroup">

            <div class="containerImage">
              <img alt="Envía emails de marketing profesionales" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_publicidad_digital_02c.png') !!}" alt="" loading="lazy">
            </div>

            <div class="containerElements">
              <h3 class="secondaryTitle blackColor">
Conecta tu anuncio digital <br class="space">
a tu landing page

              </h3>
              <p class="primaryText  grayColorTexts">
Una vez que creaste tu potentes campañas de anuncios <br class="desktopTabletElement">
digitales en Escala, simplemente selecciona la landing <br class="desktopTabletElement">
page a la cual deseas dirigir el tráfico ¡y voilà!, <br class="desktopTabletElement">
estás listo para recibir visitantes.
              </p>
            </div>

          </div>

          <div class="col-12 col-md-12 col-lg-6 infoGroup">

            <div class="containerImage">
              <img alt="Multiplica tus visitas web con anuncios digitales" src="{!! App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_publicidad_digital_02d.png') !!}" alt="" loading="lazy">
            </div>

            <div class="containerElements">
              <h3 class="secondaryTitle blackColor">
Publícala y optimízala
              </h3>
              <p class="primaryText  grayColorTexts">
En un clic publica tu campaña y mide en todo <br class="desktopTabletElement">
momento tus resultados con nuestros dashboards <br class="desktopTabletElement">
amigables para que puedas corregir y optimizar tus <br class="desktopTabletElement">
ads digitales.
              </p>
            </div>

          </div>
        </div>

      </section>

    {{-- <section class="innerSectionElement sct3">

      <div class="containElements">

        <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
          ¡Probar Escala ahora!
        </a>

      </div>
    </section> --}}

    </div>

</section>


<section class="customSection sectionParent landing_ADS_2022_3">

  <div class="section-row">
      <section class="innerSectionElement1">

        <div class="imagesSection">

            <div class="element">
                <img  src="{!! App::setFilePath('/assets/images/illustrations/others/escala_crear_avisos_digitales_facebook.png') !!}" alt="">
            </div>
        </div>

      </section>
        <section class="innerSectionElement2">

          <h2 class="primaryTitle whiteColor">
            Quiero crear, administrar y publicar <br class="space">
            mis ads de Facebook e Instagram <br class="space">
            desde Escala. Es muy fácil hacerlo.
          </h2>

          <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
              Quiero comenzar ahora
            </a>

        </section>
  </div>

</section>

@php
$parameters = array(
'type' => 'backgroundColor',
'classSection' => 'landing_ADS_2022_4',
'enableTitle' => false,
'img' => App::setFilePath('/assets/images/illustrations/others/escala_ads_avisos_redes_sociales.png'),
'title' => '
<span class="greenBlueColor">El píxel de facebook</span> <br class="space">
de tu campaña <br class="space">
ya está integrado
',
'text' => '
En Escala el píxel de Facebook ya viene integrado a tu landing <br class="desktopTabletElement">
page para que puedas obtener información relevante para <br class="desktopTabletElement">
optimizar rápidamente tus campañas de anuncios digitales.
',
'enableButton' => false,
// 'urlButton' => '#lead-form',
// 'textButton' => 'Conectarlas ahora',
'side' => 'right',
);
@endphp
@contain_text_image_T1( $parameters )
@endcontain_text_image_T1


<section class="customSection sectionParent landing_ADS_2022_5">

    <div class="section-row">

          <section class="innerSectionElement1">

            <h2 class="primaryTitle blackColor">
              Nuestros clientes te dicen <br class="space">
              <span class="greenBlueColor">qué tan fácil es usar Escala</span>
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
                {{-- <div class="element">

                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/trust3.png') !!}" alt="">

                </div> --}}

            </div>

          </section>

    </div>


  </section>


    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landing_ADS_2022_6',
        'enableTitle' => true,
        'titlePrincipal' => '
<span class="greenBlueColor">Además de publicar potentes ads digitales,</span> <br class="desktopTabletElement">
conoce todo lo que puedes lograr con Escala
        ',
        'subTitlePrincipal' => '
Tus anuncios digitales ya estarán  integrados a <strong>la plataforma “todo-en-uno”</strong> <br class="desktopTabletElement">
<strong>de marketing digital y ventas</strong> más completa de todas y fácil de usar
        ',
        'overlay' => false,
        'enableButton' => false,
        'urlButton' => '#',
        'textButton' => '¡Comenzar ahora!',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
        'elements' => [
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3a.png'),
                'title' => '<span style="color: #150D27" >
Date a conocer con landing <br class="desktopTabletElement">
pages vendedoras
                </span>',
                'text' => '
Crea en minutos landing pages optimizadas para darte a <br class="desktopTabletElement">
conocer y capturar la data de tus visitantes mediante <br class="desktopTabletElement">
formularios integrados a tu CRM. Elige una de nuestras <br class="desktopTabletElement">
plantillas, personalízala y publícala en un clic, sin <br class="desktopTabletElement">
programar o diseñar.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_marketing_2d.png'),
                'title' => '<span style="color: #150D27" >
Automatiza para personalizar <br class="desktopTabletElement">
tu comunicación y convertir más
                </span>',
                'text' => '
Automatiza el flujo de tus acciones de marketing y ventas: <br class="desktopTabletElement">
enviar emails, recordatorios a tu equipo de ventas <br class="desktopTabletElement">
(llamadas, tareas y actividades). Programa todo en base a <br class="desktopTabletElement">
patrones de comportamiento de tus contactos para <br class="desktopTabletElement">
aumentar tu conversión y retención.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_3d.png'),
                'title' => '<span style="color: #150D27" >
Envía Emails <br class="desktopTabletElement">
profesionales
<br class="desktopElement"><br class="desktopElement">
                </span>',
                'text' => '
Nutre la relación con tus contactos enviando efectivas <br class="desktopTabletElement">
campañas de emails. Con nuestras plantillas prediseñadas <br class="desktopTabletElement">
logras enviar masivamente mensajes personalizados con <br class="desktopTabletElement">
tan solo un clic.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/5_todoenuno_04.png'),
                'title' => '<span style="color: #150D27" >
Gestiona y organiza la <br class="desktopTabletElement">
información de tus contactos <br class="desktopTabletElement">
con el CRM integrado
                </span>',
                'text' => '
La información que registran tus visitantes en los formularios <br class="desktopTabletElement">
inteligentes de tus landing pages se guarda automáticamente en <br class="desktopTabletElement">
el CRM de Escala. No más integraciones para organizar, gestionar <br class="desktopTabletElement">
y vender a tus contactos.
                ',
                'enableButton' => false,
            ],
            [
                'img' => App::setFilePath('/assets/images/illustrations/others/escala_ventas_icono_2d.png'),
                'title' => '<span style="color: #150D27" >
Ten la visibilidad de <br class="desktopTabletElement">
la salud de tu negocio
                </span>',
                'text' => '
Lo que no se mide, no mejora. Escala te da las analíticas <br class="desktopTabletElement">
necesarias en dashboards amigables para que optimices <br class="desktopTabletElement">
tus esfuerzos de venta y marketing.
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
    'classSection' => 'landing_ADS_2022_7',
    'enableTitle' => true,
    'titlePrincipal' => '
Tus campañas digitales vienen repotenciadas <br class="desktopTabletElement">
con un servicio premium
    ',
    'subTitlePrincipal' => '
No solo te ayudamos a generar tráfico a tus páginas con ads digitales, también te vamos <br class="desktopTabletElement">
a acompañar en todo el camino al éxito con nuestras otras funcionalidades.
    ',
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
    'classSection' => 'landing_ADS_2022_8',
    'title' => '
Quiero crear potentes campañas de <br class="desktopTabletElement">
Facebook desde Escala
        </span>',
        'textForm' => 'Empieza a probar Escala',
    'text' => null,
    'image' => App::setFilePath('/assets/images/illustrations/others/escala_avisos_digitales_redes_sociales.png'),
    'side' => 'left',
    'enableButton' => true,
  'urlButton' => '#lead-form',
  'textButton' => '¡Probar Escala ahora!',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



</div>

</div>



@endsection




<div id="landing_landingPage_2023">

    <div class="sections">

      {{--   @header_t1([
            'backgroundImageType' => true,
            'overlay' => false,
            'classSection' => 'threeCol landing_landingPage_2023 landing_landingPage_2023_0',
            'title' => '
                        Construye hermosas <br class="space">
<span>landing pages</span> en <br class="space">
30min o menos
                    ',
            'text' => '
                        Cuenta con más de 200 plantillas <br class="desktopTabletElement">
                        optimizadas para convertir, ajusta <br class="desktopTabletElement">
                        fácilmente el diseño y contenido con <br class="desktopTabletElement">
                        Inteligencia Artificial (sin necesitar <br class="desktopTabletElement">
                        programar) ¡y publica!
                    ',
            'threeCol' => true,
            'textForm' => 'Recibe un demo-tour <br class="space"> personalizado de Escala',
            'backgroundImage' => App::setFilePath('/assets/images/banners/bg_landing_0.svg'),
            'overlayImage' => null,
            'image' => App::setFilePath('/assets/images/person/am/am_landing_landingpages.png'),
            'img_alt' => 'Ilustración Andrés Moreno, CEO de Escala, embudos de venta'
        ])
        @endheader_t1
 --}}


    @php
                                   $elementsReviews = [
                                       [
                                           'logo' => App::setFilePath('/assets/images/illustrations/others/trust_tag.png'),
                                           'text' => 'Escala / plataforma CRM',
                                           'points' => '4.8 / 5',
                                       ],
                                       [
                                           'logo' => App::setFilePath('/assets/images/illustrations/others/google_tag.png'),
                                           'text' => 'Escala / plataforma CRM',
                                           'points' => '4.9 / 5',
                                       ],
                                       [
                                           'logo' => App::setFilePath('/assets/images/illustrations/others/capterra_tag.png'),
                                           'text' => 'Escala / plataforma CRM',
                                           'points' => '4.8 / 5',
                                       ],
                                   ];
                               @endphp


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_landingPage_2023 landing_landingPage_2023_0 ">


        <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_landing_0.svg') }}')" class="backgroundFull">


            <div class="section-row">
                <section class="innerSectionElement sct1">

                    <div class="groupElements row">

                        <div class="info col-md-12 col-lg-8 ">

                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta" src="{{ App::setFilePath('/assets/images/person/am/am_landing_landingpages.png') }}" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">
                                            Construye hermosas <br class="space">
                                            <span>landing pages</span> en 30min <br class="space">
                                            o menos
                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            Cuenta con más de 200 plantillas <br class="desktopTabletElement">
                                            optimizadas para convertir, ajusta fácilmente <br class="desktopTabletElement">
                                            el diseño y contenido con Inteligencia <br class="desktopTabletElement">
                                            Artificial (sin necesitar programar) ¡y publica!
                                        </p>


                               <div class="elements hideOnmobile hideOnTablet">

                                   @foreach ($elementsReviews as $item)
                                       <div class="refersElement">

                                           <div class="infoInner">
                                               <div class="tag">
                                                   <div class="containerImage">
                                                       <img src="{!! $item['logo'] !!}" loading="lazy">
                                                   </div>

                                                   <span class="points">
                                                       {!! $item['points'] !!}
                                                   </span>
                                               </div>
                                               <p class="text">
                                                   {!! $item['text'] !!}
                                               </p>
                                               <div class="stars">
                                                   <div class="containerImage">
                                                       <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                   </div>
                                               </div>

                                           </div>

                                       </div>
                                   @endforeach

                               </div>

                                    </div>

                                </div>

                        </div>
                        <div class="form7 col-md-12 col-lg-4 ">

                            <div class="containElements">

                                <div class="formatForm redirectWeb" redirectweb="true">

                                    <h5 class="titleFormat blackcolor">Recibe un demo-tour <br class="space"> personalizado de Escala</h5>

                                   @php
                                               $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                               $_rs = [];
                                               $_formShortcode = null;
                                               if ($_data = get_posts($_args)) {
                                                   foreach ($_data as $_key) {
                                                       $_rs[$_key->ID] = $_key->post_title;
                                                       if ($_key->post_title === 'Profile demo - Flujo Demo') {
                                                           $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                                       }
                                                   }
                                               } else {
                                                   $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                               }
                                           @endphp
                                           {!! do_shortcode($_formShortcode) !!}

                                </div>

                            </div>
                        </div>

                          <div class="imageReviewsMobile hideOnDesktop">

                            <div class="image">
                                      <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta" src="{{ App::setFilePath('/assets/images/person/am/am_landing_landingpages.png') }}" loading="lazy">
                                        </div>

                            </div>

                               <div class="elements">

                                   @foreach ($elementsReviews as $item)
                                       <div class="refersElement">

                                           <div class="infoInner">
                                               <div class="tag">
                                                   <div class="containerImage">
                                                       <img src="{!! $item['logo'] !!}" loading="lazy">
                                                   </div>

                                                   <span class="points">
                                                       {!! $item['points'] !!}
                                                   </span>
                                               </div>
                                               <p class="text">
                                                   {!! $item['text'] !!}
                                               </p>
                                               <div class="stars">
                                                   <div class="containerImage">
                                                       <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                   </div>
                                               </div>

                                           </div>

                                       </div>
                                   @endforeach

                               </div>

                        </div>






                    </div>

                </section>

            </div>



        </div>

    </section>

        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_landingPage_2023_1',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/1Elige-entre--plantillas-pre-diseñadas-.gif'),
                'title' => '
                        Elige entre cientos de hermosas <br class="desktopTabletElement"> <span>
                            plantillas pre-diseñadas
                        </span>
                ',
                'text' => '
                    Basadas en mejores prácticas, en Escala encuentras una <br class="desktopTabletElement">
                    seria de páginas estructuradas para que solo tengas que <br class="desktopTabletElement">
                    editar el contenido y ajustar el diseño a tu marca ¡sin <br class="desktopTabletElement">
                    depender de programadores!
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
            ];
        @endphp
        {{-- style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg_landing_1.svg') !!}')" --}}
        <div
        class="specialOverlay right">
        <img class="imageOverlay" src="{!! App::setFilePath('/assets/images/banners/bg_landing_1.svg') !!}" alt="">
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1
        </div>

        @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_landingPage_2023_2',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/2-arrastra-y-suelta-final.gif'),
                'title' => '
                   Arrastra <span>y suelta</span>
                ',
                'text' =>
                    '
                    Editar el contenido de tus páginas en Escala es ¡muy <br class="desktopTabletElement">
                    sencillo! Con puros clics, elige los elementos que deseas <br class="desktopTabletElement">
                    sustituir, muévelos con el mouse o escribe el texto que <br class="desktopTabletElement">
                    deseas y ¡y listo!
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'left',
            ];
        @endphp
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1

          @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_landingPage_2023_3',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/3Inteligencia-Artificial.gif'),
                'title' => '
                    Crea contenido en segundos con <br class="desktopTabletElement">
                    <span>Inteligencia Artificial</span>
                ',
                'text' => '
                    Bríndale a Escala un par de palabras clave y tu intención <br class="desktopTabletElement">
                    para que te proponga opciones que puedas elegir y revisar <br class="desktopTabletElement">
                    si lo necesitas. ¡Es como contratar a un copywriter estrella <br class="desktopTabletElement">
                    24/7 a una mínima fracción del costo!
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
            ];
        @endphp
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1
          @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_landingPage_2023_4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/4-contador.gif'),
                'title' => '
                    <span>Agrega elementos</span> como contador, <br class="desktopTabletElement">
                    formularios, botón de WhatsApp, pop ups,<br class="desktopTabletElement">
                    descargables y más
                ',
                'text' => '
                    Aprovecha nuestra librería de elementos para potenciar la <br class="desktopTabletElement">
                    efectividad de tus  landing pages. Es tan fácil como <br class="desktopTabletElement">
                    seleccionarlos en el menú y arrastrarlos a tu página ¡no <br class="desktopTabletElement">
                    necesitas escribir ni una línea de código!
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'left',
            ];
        @endphp
      <div
        class="specialOverlay left">
        <img class="imageOverlay"  src="{!! App::setFilePath('/assets/images/banners/bg_landing_1.svg') !!}" alt="">
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1
        </div>
          @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_landingPage_2023_5',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/5Secuencias-de-páginas-final.gif'),
                'title' => '
                    <span>Crea secuencias</span> de páginas para mejorar la <br class="desktopTabletElement">
                    experiencia y agilizar operaciones
                ',
                'text' => '
                    En Escala puedes agregar páginas  de confirmación o post-<br class="desktopTabletElement">
                    registro que aparecen inmediatamente después de que las <br class="desktopTabletElement">
                    personas registran sus datos en la primera landing page. <br class="desktopTabletElement">
                    Así logras comunicar mensajes oportunamente, aliviar el <br class="desktopTabletElement">
                    trabajo del vendedor, precalificar, incentivar upsells, <br class="desktopTabletElement">
                    entregar valor y más.
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
            ];
        @endphp
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1
          @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_landingPage_2023_6',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/6-responsive.gif'),
                'title' => '
                    ¡Logra que tus páginas se van bien en <br class="desktopTabletElement">
                    <span>todos los dispositivos!</span>
                ',
                'text' => '
                    En Escala es muy eficiente crear páginas responsive que se <br class="desktopTabletElement">
                    vean bien en computadoras, celulares y tablets. Nuestro <br class="desktopTabletElement">
                    constructor de páginas ajusta la gran mayoría de las <br class="desktopTabletElement">
                    secciones por ti.
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'left',
            ];
        @endphp
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1
          @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_landingPage_2023_7',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/7-dominio.gif'),
                'title' => '
                    <span>¡Publicar es muy rápido!</span> Define el dominio, <br class="desktopTabletElement">
                    edita el SEO y listo
                ',
                'text' => '
                     Una vez creas tu landing page, puedes conectar tu cuenta <br class="desktopTabletElement">
                    de Facebook Ads Manager y Google Analytics para enviar <br class="desktopTabletElement">
                    tráfico y medir resultados.
                        <br class="space"><br class="space">
                    También puedes editar el títulos, la descripción, la imagen y <br class="desktopTabletElement">
                    el Favicon para mejorar su presentación al compartirla en <br class="desktopTabletElement">
                    distintas plataformas online.
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
            ];
        @endphp
         <div
        class="specialOverlay right">
        <img class="imageOverlay" src="{!! App::setFilePath('/assets/images/banners/bg_landing_1.svg') !!}" alt="">
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1
        </div>
          @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_landingPage_2023_8',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/8-analitics.gif'),
                'title' => '
                    <span>Visualiza la efectividad</span> de tus landing <br class="desktopTabletElement">
                    pages con analíticas en tiempo real
                ',
                'text' => '
                    Una vez publiques y envíes visitantes a tus páginas, Escala <br class="desktopTabletElement">
                    permite ver métricas como: <br class="space">
                      <span class="items">
                      <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">
                    Número de visitantes
                    </span>
                      <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">
                    Número de contactos creados y actualizados
                    </span>
                      <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">
                    Costo por lead <br class="space">
                    ¡y más!
                    </span>
                    </span>
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'left',
            ];
        @endphp
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1
          @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landing_landingPage_2023_9',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'img' => App::setFilePath('/assets/images/gifs/9Herramientas-landings-CRM.gif'),
                'title' => '
                        <span>¡Que no se escape ni una oportunidad!</span> <br class="desktopTabletElement">
                        Tus landing pages están conectadas a las <br class="desktopTabletElement">
                        múltiples herramientas del CRM de Escala
                ',
                'text' => '
                    Olvídate de integraciones o ineficiencias operativas por <br class="desktopTabletElement">
                    fallas humanas. En Escala todas las herramientas están <br class="desktopTabletElement">
                    nativamente integradas para que: <br class="space">
                     <span class="items">
                        <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">
                    Los contactos que se registren se guarden automáticamente en tu <br class="desktopTabletElement"> base de datos
                    </span>
                        <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">
                    Puedas automatizar flujos de comunicación post-registro por <br class="desktopTabletElement">
                    email y/o WhatsApp
                    </span>
                        <span>
                    <img class="checkIcon" src="' .
                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                    '" alt="">
                    Conectes fácilmente tus campañas de Facebook Ads y Google
                    </span>
                    </span>
                ',
                'enableButton' => false,
                'urlButton' => '#lead-form',
                'textButton' => 'Recibe un demo',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'side' => 'right',
            ];
        @endphp
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1




        @php
            $elements = [
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_0.png'),
                        'title' => '
                <span>Generar más</span> y mejores <br class="space">
                leads o prospectos
                ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_1.png'),
                        'title' => '
        Tener una <span>
            presencia <br class="space">
            online
        </span> más profesional
                ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_2.png'),
                        'title' => '
             <span>Aumentar la efectividad</span> <br class="space">
de tus brochures físicos <br class="space">
o digitales
                ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_3.png'),
                        'title' => '
             <span>Promover ofertas</span> <br class="space">
especiales a un grupo <br class="space">
de personas target
                ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_4.png'),
                        'title' => '
              <span>Educar o compartir</span> <br class="space">
información relevante <br class="space">
fácil y rápido
            ',
                        'enableButton' => false,
                    ],
                    [
                        'img' => App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_5.png'),
                        'title' => '
            Facilitar la <span>
                recolección de <br class="space">
                información
            </span> en tu proceso <br class="space">
comercial o post-venta
                ',
                        'enableButton' => false,
                    ],
                ]
        @endphp

            <section class="component-info-multiple-cards-T2 customSection sectionParent landing_landingPage_2023_10 ">

        <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">


                            ¿Qué logras con las Landing Pages <br class="space">
                            o Páginas de Aterrizaje de Escala?
                                <br class="space">
                            <span class="subTitle">
                            ¡y mucho más!
                            </span>



                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2 ">

                @foreach ($elements as $item)

                <div
                class="groupElements">

                    <div class="image">
                        <div class="containerImage">
                            <img src="{!! $item['img'] !!}" loading="lazy">
                        </div>
                    </div>
                    <div class="info">

                        <h3 class="secondaryTitle">
                            {!! $item['title'] !!}

                        </h3>

                    </div>

                    <svg
                    class="bgOverlay"
                    xmlns="http://www.w3.org/2000/svg" width="423" height="321" viewBox="0 0 423 321" fill="none">
  <g filter="url(#filter0_d_13_2816)">
    <path d="M30 73.9662C30 58.1275 42.3127 45.0176 58.1202 44.0251L361.12 25.0015C378.394 23.917 393 37.6346 393 54.9426V254.5C393 271.069 379.569 284.5 363 284.5H60C43.4315 284.5 30 271.069 30 254.5V73.9662Z" fill="white"/>
  </g>
  <defs>
    <filter id="filter0_d_13_2816" x="0" y="0.941406" width="423" height="319.559" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="6"/>
      <feGaussianBlur stdDeviation="15"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.211765 0 0 0 0 0.462745 0 0 0 0 0.541176 0 0 0 0.1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_13_2816"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_13_2816" result="shape"/>
    </filter>
  </defs>
</svg>

                </div>

                 @endforeach

            </section>


        </div>

                {{-- <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg_emailMark_4.svg') !!}')" class="backgroundPlanets">
        </div> --}}

    </section>


     <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_3.svg') !!})"
            class="customSection sectionParent landing_landingPage_2023_11">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                         <div class="image">

                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_6.png') !!}" alt="">
                            </div>

                        </div>

                        <div class="info">
                            <p class="text">
                                Descubre por ti mismo la mejor <br class="space">
                                <span>herramienta de landing pages</span>
                            </p>


                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Recibir demo
                        </a>

                        </div>

                    </div>

                </section>

            </div>

        </section>

{{--
                @php
            $parameters = [
                'classSection' => 'landing_landingPage_2023_12',
                'enableTitle' => true,
                'titlePrincipal' => '
                Qué dicen nuestros clientes sobre las landing <br class="desktopTabletElement">
                pages que construyen en Escala
                ',
                'subTitlePrincipal' => null,
                'enableContainerButton' => false,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Recibe un demo',
                'mob_reviews' => [
                    App::setFilePath('/assets/images/illustrations/others/landingpages_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/landingpages_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/landingpages_review_3.png')
                ],
                'desk_reviews' => [
                    [
                    App::setFilePath('/assets/images/illustrations/others/landingpages_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/landingpages_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/landingpages_review_3.png')]
                ],
            ];
        @endphp
        @reviews_sliders_T1($parameters)
        @endreviews_sliders_T1 --}}

            <section
        class='w-full customSection sectionParent landing_landingPage_2023_12'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                   Qué dicen nuestros clientes sobre las landing <br class="desktopTabletElement">
                pages que construyen en Escala

                </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                    @php
                        $reviews = [
                        App::setFilePath('/assets/images/illustrations/others/landingpages_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/landingpages_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/landingpages_review_3.png')
                        ]
                    @endphp

                    @foreach ($reviews as $item)
                        <div class="review">
                            <div class="containerImage">
                                <img src="{!! $item !!}" loading="lazy">
                            </div>
                        </div>
                    @endforeach

                    </div>

                </section>
            </div>

         </section>


            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_4.svg') !!})"
            class="customSection sectionParent landing_landingPage_2023_13">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <div class="info">
                            <p class="text">
                                “En mis compañías creamos decenas de landing <br class="desktopTabletElement">
                                pages al año. Cansados de las herramientas <br class="desktopTabletElement">
                                complicadas o costosas, construimos Escala. <br class="desktopTabletElement">
                                Gracias a ello, <span>aumentamos 10X nuestra eficiencia</span> <br class="desktopTabletElement">
                                al crear y publicar landing pages con Escala.”
                                <br class="space">
                                <br class="space">
                                <span class="sub">
                                    Andrés Moreno <br class="space">
                                    <small>Fundador de escala & Open English</small>
                                </span>

                            </p>

                        </div>

                             <div class="image">

                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/person/am/andres_landing_page 1.png') !!}" alt="">
                            </div>

                        </div>


                    </div>

                </section>

            </div>

        </section>

              <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_5.svg') !!})"
            class="customSection sectionParent landing_landingPage_2023_14">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">

                        <h2 class="primaryTitle blackColor">
                            ¿Nuevo en creación de landing pages? <br class="space">
                            <span>¡No te preocupes, te entrenamos!</span>
                        </h2>

                    </div>

                </section>

                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="info">
                            <p class="text">
                                Nuestro equipo de servicio y <br class="desktopTabletElement">
                                entrenadores Escala te orientan desde <br class="desktopTabletElement">
                                el día 1 para que consigas mejores <br class="desktopTabletElement">
                                resultados con tus páginas.
                                <br class="space"><br class="space">
                                <span>
                                    ¡Ninguna otra plataforma te <br class="space">
                                    acompaña mejor!
                                </span>
                            </p>
                        </div>
                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_7.png') !!}" alt="">
                            </div>
                        </div>

                    </div>

                </section>

                   <section class="innerSectionElement sct3">

                    <div class="containElements">


                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Conocer más
                        </a>

                    </div>

                   </section>

            </div>

        </section>

             <section
        class='w-full customSection sectionParent landing_landingPage_2023_15'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>

                        <h2 class="primaryTitle">
                            ¿Por qué Escala?
                        </h2>

                    </div>
                </section>

                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                        <div class="image">
                            <div class="containerImage">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/landing_landingpage_img_8.png') !!}" alt="">
                            </div>
                        </div>

                        <div class="info">

                               @php
                                        $elements = [
                                            [
                                                'title' => 'Potente herramienta de email marketing',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_emailMkt_elements_0.png'),

                                            ],
                                            [
                                                'title' => 'Servicio de Acompañamiento VIP',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_emailMkt_elements_1.png'),

                                            ],
                                            [
                                                'title' => 'Encuentras muchas más herramientas de <br class="desktopTabletElement"> marketing y ventas integradas',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_emailMkt_elements_2.png'),

                                            ],
                                            [
                                                'title' => 'Todo 100% en español',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_emailMkt_elements_3.png'),

                                            ],
                                            [
                                                'title' => 'Educación de negocio de primera',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_emailMkt_elements_4.png'),

                                            ],
                                            [
                                                'title' => 'Implementamos parte de la primera <br class="desktopTabletElement"> campaña por ti ',
                                                'icon' => App::setFilePath('/assets/images/illustrations/others/icon_emailMkt_elements_5.png'),

                                            ]
                                        ];
                                    @endphp

                                    <ul class="elements selectorInfo">

                                        @foreach ($elements as $item)
                                            <li class="element "
                                                info_index="{!! $loop->index !!}">
                                                <div class="icon">
                                                    <div class="containerImage">
                                                        <img src="{!! $item['icon'] !!}" loading="lazy">
                                                    </div>
                                                </div>
                                                <h3>
                                                    {!! $item['title'] !!}
                                                </h3>
                                            </li>
                                        @endforeach

                                    </ul>


                        </div>

                    </div>
                </section>

            </div>

        </section>

            <section
            style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_6.svg') !!})"
        class='w-full customSection sectionParent landing_landingPage_2023_16'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                      <div class="containElements">

                        <h2 class="title">
                           Acelera el crecimiento de <br class="space">
                            tu negocio con Escala
                        </h2>

                        <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Conoce Escala
                        </a>

                    </div>
                </section>

            </div>

            </section>



    </div>


</div>

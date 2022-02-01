{{--
     Template Name: [B] Landing - Servicios - Finanzas
     --}}



@extends('layouts.app')

@section('content')

    <div id="landing-servicios-finanzas-bootstrap">

        <div class="sections">

            @php
                $parameters = [
                    'backgroundImageType' => false,
                    'classSection' => 'threeCol landingServFinanzas0',
                    'title' => '<span class="greenBlueColor">Haz crecer</span>
                     <br class="space">
                     tus servicios <br class="space">
                     financieros con <br class="space">
                    Escala',
                    'text' => null,
                    'textForm' => 'Comienza ahora',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => false,
                    'overlayImage' => nulls,
                    'image' => App::setFilePath('/assets/images/person/Finanzas-2.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1



            <section class="customSection sectionParent landingServFinanzas1">

                <div class="section-row">

                      <section class="innerSectionElement">


                        <p class="primaryText colorDarkGrey3">
                            Escala ayuda a las empresas dedicadas a los servicios financieros como: <br class="desktopElement"> aseguradoras, banca, coaching financieros u otras compañías de la industria <br class="desktopElement"> a generar más leads de calidad y cerrar más ventas.

                        </p>


                      </section>

                </div>


              </section>


            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServFinanzas2',
                    'enableButton' => false,
                    'urlButton' =>  null,
                    'textButton' => null,
                    'typeButton' => null,
                    'enableTitle' => true,
                    'titlePrincipal' => '¿Cómo aceleramos el embudo de ventas de tu empresa?',
                    'elements' => [
                        [
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="desktopElement"> desde Facebook</span>',
                            'text' => 'En Escala entendemos que las empresas aseguradoras necesitan dar a <br class="desktopElement"> conocer múltiples servicios  y generar tráfico a sus páginas o landing <br class="desktopElement"> pages. Por ello puedes crear, administrar y publicar campañas de anuncios <br class="desktopElement"> digitales, sin salir de nuestra plataforma.
                            <br class="space"><br class="space">
                            Empodera a tu equipo de growth marketing para atraer más leads <br class="desktopElement"> calificados con campañas de retargeting y segmentadas por intereses <br class="desktopElement"> como: salud, vida, auto y seguros de hogar.

                                       ',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Convierte a tus visitantes <br class="desktopElement"> en leads con landing <br class="desktopElement"> pages optimizadas</span>',
                            'text' => 'Haz que todos conozcan tus servicios de salud y capta la <br class="desktopElement"> información de contacto de tus posibles pacientes e <br class="desktopElement"> interesados con landing pages optimizadas. <br class="space">
                            Elige una de nuestras plantillas, personalízala y publícala con <br class="desktopElement"> un clic,sin programar o diseñar. ',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icon-finanzas.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">No pierdas ningún <br class="desktopElement"> dato</span>',
                            'text' => 'Nuestras landing pages tienen formularios inteligentes. Cuando <br class="desktopElement"> tus visitantes registran toda su información en ellos, queda <br class="desktopElement"> guardada automáticamente en tu CRM de Escala. Así podrás <br class="desktopElement"> tener mejor control de los datos de tus leads.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Organiza y gestiona <br class="desktopElement"> tu base de datos</span>',
                            'text' => 'Entendemos que la adquisición de un seguro implica varios pasos; desde la <br class="desktopElement"> cotización, comparación de precios con la competencia, hasta la decisión <br class="desktopElement"> final de compra y una posterior fidelización del cliente (retención de pólizas).
                            <br class="space"><br class="space">
                            Optimiza el seguimiento de cada cliente con el CRM de Escala que simplifica <br class="desktopElement"> toda tu gestión de ventas. Crea actividades y tareas para tu equipo de <br class="desktopElement"> ventas, mantén comunicación con leads hipersegmentados según sus áreas <br class="desktopElement"> de interés, incrementa la recompra con promociones customizadas, ofrece nuevos servicios.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_3.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Nutre la relación <br class="desktopElement"> con tus leads y clientes</span>',
                            'text' => 'Crea y automatiza efectivas campañas de email marketing para generar <br class="desktopElement"> confianza entre tus leads y reforzar la lealtad de tus clientes. Envía emails <br class="desktopElement"> masivos, en el momento adecuado para: <br class="space">
                            Presentar nuevos servicios <br class="space">
                            Reforzar las razones de la elección de tu seguro <br class="space">
                            Mantenerlos informados sobre las novedades',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Mide y optimiza <br class="desktopElement"> tus resultados <br class="desktopElement"> con analíticas relevantes
                            </span>',
                            'text' => 'Ten visibilidad sobre las métricas que realmente importan <br class="desktopElement"> para entender qué funciona y qué puede mejorar tu <br class="desktopElement"> equipo para optimizar
                            tu marketing digital. Ten tableros <br class="desktopElement"> amigables que miden el rendimiento de Ads, Landing <br class="desktopElement"> Pages y campañas de Email.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-11.png'),
                        ],

                    ],
                ];
            @endphp
            @contain_info_checkBoxes_T1( $parameters )

            @endcontain_info_checkBoxes_T1

            @php
            $parameters = [
                'type' => 'backgroundColor',
                'backgroundImageFile' => null,
                'classSection' => 'landingServFinanzas3',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">¿Escala tiene todo <br class="space"> lo que mi empresa necesita? </span>',
                'img' => App::setFilePath('/assets/images/illustrations/otto/Otto_CRM-01.png'),
                'text' => 'No importa el tamaño de su empresa. Empodera a tus equipos: <br class="desktopElement"> comercial, ventas y marketing con todas las herramientas digitales <br class="desktopElement"> en un solo lugar. Es momento de acelerar el crecimiento de tu negocio
                <br class="space"><br class="space">
                Quiero conocer el plan para empresas de seguro',
                'enableButton' => true,
                'urlButton' => '#lead-form',
                'typeButton' => 'primaryButton',
                'textButton' => '¡Comenzar ahora!',
                'side' => 'right',
            ];
        @endphp

        @contain_text_image_T1( $parameters )

        @endcontain_text_image_T1

                @php
            $parameters = [
                'type' => 'backgroundColor',
                'classSection' => 'landingServFinanzas4',
                'enableTitle' => false,
                'titlePrincipal' => null,
                'subTitlePrincipal' => null,
                'title' => '<span class="greenBlueColor">La mejor inversión del año</span>',
                'img' => App::setFilePath('/assets/images/illustrations/others/paymentpages-1 1.png'),
                'text' => 'En Escala tenemos un plan a la medida de tus necesidades. <br class="desktopElement"> Conoce nuestros planes para cada tamaño de empresa y número <br class="desktopElement"> de contactos de marketing. Optimiza tu inversión en ventas <br class="desktopElement"> y marketing digital.',
                'enableButton' => true,
                'urlButton' => App::setTypeUrl().'/pricing',
                'typeButton' => 'primaryButton',
                'textButton' => 'Conoce nuestros planes',
                'side' => 'left',
            ];
        @endphp

        @contain_text_image_T1( $parameters )

        @endcontain_text_image_T1

            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServFinanzas5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">Conoce cómo hemos ayudado <br class="space"> a otras compañías aseguradoras</span>',
                    'video' => 'https://www.youtube.com/embed/XUPOcRPXuzA',
                    'text' => '“Todo nuestro equipo trabaja con Escala: ventas, marketing y comercial.<br class="desktopElement"> Nuestro plan de negocios va sobre ruedas. Nuestras ventas han crecido <br class="desktopElement"> en un 300%. Es la mejor inversión que hemos hecho”',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'enableAutor' => true,
                    'autor' => '<span>Luisa Osorio</span><small>Seguros La Previsora</small>',
                    'side' => 'right',
                ];



            @endphp

            @contain_testimonial_text_video_T1( $parameters )

            @endcontain_testimonial_text_video_T1


            <section class="customSection sectionParent landingServFinanzas6">



                <section class="innerSectionElement">

                    <div class="image">

                        <div class="containerImage">

                            <img src="{!! App::setFilePath('/assets/images/illustrations/team/astrorocket1.png') !!}" alt="" loading="lazy">

                        </div>

                    </div>

                    <div class="info">

                        <h2 class="primaryTitle whiteColor">
                            Conocimiento es poder

                        </h2>

                        <p class="text">
                            Descarga nuestro ebook: <br class="space">
                            <span>Inbound marketing para seguros</span>
                        </p>

                        <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                            ¡Descargar ahora!
                        </a>

                    </div>

                </section>


                <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas-inv 3.png') !!}')" class="backgroundPlanets">
                </div>


            </section>

            @php
            $parameters = [
                'classSection' => 'landingServFinanzas7',
                'title' => '<span class="greenBlueColor">Atrae leads de calidad <br class="desktopElement"> y convierte más ventas <br class="desktopElement"> con Escala.</span>',
                'textForm' => 'Pruébalo gratis ahora',
                'text' => null,
                'image' => null,
                'side' => 'left',
            ];
        @endphp
        @bannerForms7_T1( $parameters )

        @endbannerForms7_T1




        </div>

    </div>



@endsection


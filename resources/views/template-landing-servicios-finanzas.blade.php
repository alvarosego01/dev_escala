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
                     <p>
                        tus servicios <br class="space">
                        financieros con <br class="space">
                        Escala
                    </p>',
                    'text' => null,
                    'textForm' => 'Comienza ahora',
                    'threeCol' => true,
                    'backgroundImage' => null,
                    'overlay' => false,
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/Finanzas-2.png'),
                ];
            @endphp

            @header_t1( $parameters )

            @endheader_t1



            <section class="customSection sectionParent landingServFinanzas1">

                <div class="section-row">

                      <section class="innerSectionElement">


                        <p class="primaryText colorDarkGrey3">

                            Escala ayuda a las empresas dedicadas a los servicios financieros como: <br class="desktopElement"> aseguradoras, banca u otras compañías de la industria <br class="desktopElement"> a generar más leads de calidad y cerrar más ventas.


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
                            'text' => 'En Escala entendemos que tu industria necesita dar información y <br class="desktopElement"> generar curiosidad en los servicios de tu empresa. Por ello puedes crear,<br class="desktopElement"> administrar y publicar campañas de anuncios digitales, sin salir de <br class="desktopElement"> nuestra plataforma.
                            <br class="space"><br class="space">
                            Empodera a tu equipo de growth marketing para generar <br class="desktopElement"> tráfico a tus páginas o landing pages, con campañas de retargeting <br class="desktopElement"> segmentadas por intereses como: seguros, bancos, hipotecas e <br class="desktopElement"> instrumentos financieros.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Convierte a tus visitantes <br class="desktopElement"> en leads con landing <br class="desktopElement"> pages optimizadas</span>',
                            'text' => 'Genera diferentes landing pages según tu oferta de servicios,<br class="desktopElement"> sin programar o diseñar. Tu equipo de marketing podrá crear y <br class="desktopElement"> publicar landing pages optimizadas en pocos minutos, solo <br class="desktopElement"> deberán personalizarlas y con un clic dar a conocer tus  <br class="desktopElement"> servicios financieros.
                            <br class="space"><br class="space">
                            Genera mayor conversión de visitantes en leads de calidad,<br class="desktopElement"> prefíltralos y guárdalos directamente en tu CRM con <br class="desktopElement"> nuestros formularios integrados a tus páginas.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icon-finanzas.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">No pierdas <br class="desktopElement"> ningún dato</span>',
                            'text' => 'Nuestras landing pages tienen formularios integrados. Cuando <br class="desktopElement"> tus visitantes registran toda su información en ellos, queda <br class="desktopElement"> guardada automáticamente en tu CRM de Escala. Así podrás <br class="desktopElement"> tener mejor control de los datos de tus leads.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Organiza y gestiona <br class="desktopElement"> tu base de datos</span>',
                            'text' => 'Entendemos que la adquisición de un servicio financiero implica varios <br class="desktopElement"> pasos; desde la cotización, comparación de precios con la competencia,<br class="desktopElement"> hasta la decisión final de compra y una posterior fidelización del cliente.
                            <br class="space"><br class="space">
                            Optimiza el seguimiento de cada cliente con el CRM de Escala que <br class="desktopElement"> simplifica toda tu gestión de ventas. Crea actividades y tareas para tu <br class="desktopElement"> equipo de ventas, mantén comunicación con leads hipersegmentados <br class="desktopElement"> según sus áreas de interés, incrementa la recompra con promociones <br class="desktopElement"> customizadas y ofrece nuevos servicios.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_3.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Nutre la relación <br class="desktopElement"> con tus leads y clientes</span>',
                            'text' => 'Crea y automatiza efectivas campañas de email marketing para generar <br class="desktopElement"> confianza entre tus leads y reforzar la lealtad de tus clientes potenciales.<br class="desktopElement"> Envía emails masivos, en el momento adecuado para:
                            <br class="space">
                            <br class="space">
                            <ul>
                                <li>Presentar nuevos servicios</li>
                                <li>Reforzar las razones de la elección de tus servicios financieros</li>
                                <li>Mantenerlos informados sobre las novedades</li>
                                <li>Incrementar el ticket de compra ofreciéndoles upgrades en: pólizas,<br class="desktopElement"> instrumentos financieros, préstamos e hipotecas</li>
                            </ul>',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Mide y optimiza <br class="desktopElement"> tus resultados <br class="desktopElement"> con analíticas relevantes
                            </span>',
                            'text' => 'Ten visibilidad sobre las métricas que realmente importan <br class="desktopElement"> para entender qué funciona y qué puede mejorar tu <br class="desktopElement"> equipo para optimizar
                            tu marketing digital. Cuenta con tableros <br class="desktopElement"> amigables que miden el rendimiento de ads, landing <br class="desktopElement"> pages y campañas de emails.',
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
                'text' => 'No importa el tamaño de tu empresa. Empodera a tus equipos:<br class="desktopElement"> comercial, ventas y marketing con todas las herramientas digitales <br class="desktopElement"> en un solo lugar. Es momento de acelerar el crecimiento de tu negocio.',
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
                'urlButton' => App::setTypeUrl().'/zoom-meeting',
                'typeButton' => 'primaryButton',
                'textButton' => 'Hablar con un asesor',
                'side' => 'left',
            ];
        @endphp

        @contain_text_image_T1( $parameters )
        @endcontain_text_image_T1

            {{-- @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landingServFinanzas5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '<span class="greenBlueColor">
                        Conoce cómo hemos ayudado <br class="desktopElement"> a otras compañías de finanzas
                        </span>',
                    'video' => 'https://www.youtube.com/embed/XUPOcRPXuzA',
                    'text' => '“Todo nuestro equipo trabaja con Escala: ventas, marketing y comercial.<br class="desktopElement"> Nuestro plan de negocios va sobre ruedas. Nuestras ventas han crecido <br class="desktopElement"> en un 300%. Es la mejor inversión que hemos hecho”',
                    'enableButton' => false,
                    // 'urlButton' => '#lead-form',
                    // 'textButton' => 'Segmentar ahora',
                    'enableAutor' => true,
                    'autor' => '<span>Luisa Osorio</span><small>Banca Mía</small>',
                    'side' => 'right',
                ];



            @endphp

            @contain_testimonial_text_video_T1( $parameters )

            @endcontain_testimonial_text_video_T1 --}}


            {{-- <section class="customSection sectionParent landingServFinanzas6">



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


            </section> --}}

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


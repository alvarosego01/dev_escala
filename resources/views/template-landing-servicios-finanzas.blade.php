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
                    'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
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

                            Escala ayuda a las empresas dedicadas a los servicios financieros como: <br class="D_e"> aseguradoras, banca u otras compañías de la industria <br class="D_e"> a generar más leads de calidad y cerrar más ventas.


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
                            'title' => '<span class="greenBlueColor">Genera tráfico <br class="D_e"> desde Facebook</span>',
                            'text' => 'En Escala entendemos que tu industria necesita dar información y <br class="D_e"> generar curiosidad en los servicios de tu empresa. Por ello puedes crear,<br class="D_e"> administrar y publicar campañas de anuncios digitales, sin salir de <br class="D_e"> nuestra plataforma.
                            <br class="space"><br class="space">
                            Empodera a tu equipo de growth marketing para generar <br class="D_e"> tráfico a tus páginas o landing pages, con campañas de retargeting <br class="D_e"> segmentadas por intereses como: seguros, bancos, hipotecas e <br class="D_e"> instrumentos financieros.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Convierte a tus visitantes <br class="D_e"> en leads con landing <br class="D_e"> pages optimizadas</span>',
                            'text' => 'Genera diferentes landing pages según tu oferta de servicios,<br class="D_e"> sin programar o diseñar. Tu equipo de marketing podrá crear y <br class="D_e"> publicar landing pages optimizadas en pocos minutos, solo <br class="D_e"> deberán personalizarlas y con un clic dar a conocer tus  <br class="D_e"> servicios financieros.
                            <br class="space"><br class="space">
                            Genera mayor conversión de visitantes en leads de calidad,<br class="D_e"> prefíltralos y guárdalos directamente en tu CRM con <br class="D_e"> nuestros formularios integrados a tus páginas.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icon-finanzas.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">No pierdas <br class="D_e"> ningún dato</span>',
                            'text' => 'Nuestras landing pages tienen formularios integrados. Cuando <br class="D_e"> tus visitantes registran toda su información en ellos, queda <br class="D_e"> guardada automáticamente en tu CRM de Escala. Así podrás <br class="D_e"> tener mejor control de los datos de tus leads.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_2.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Organiza y gestiona <br class="D_e"> tu base de datos</span>',
                            'text' => 'Entendemos que la adquisición de un servicio financiero implica varios <br class="D_e"> pasos; desde la cotización, comparación de precios con la competencia,<br class="D_e"> hasta la decisión final de compra y una posterior fidelización del cliente.
                            <br class="space"><br class="space">
                            Optimiza el seguimiento de cada cliente con el CRM de Escala que <br class="D_e"> simplifica toda tu gestión de ventas. Crea actividades y tareas para tu <br class="D_e"> equipo de ventas, mantén comunicación con leads hipersegmentados <br class="D_e"> según sus áreas de interés, incrementa la recompra con promociones <br class="D_e"> customizadas y ofrece nuevos servicios.',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/afil_3.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Nutre la relación <br class="D_e"> con tus leads y clientes</span>',
                            'text' => 'Crea y automatiza efectivas campañas de email marketing para generar <br class="D_e"> confianza entre tus leads y reforzar la lealtad de tus clientes potenciales.<br class="D_e"> Envía emails masivos, en el momento adecuado para:
                            <br class="space">
                            <br class="space">
                            <ul>
                                <li>Presentar nuevos servicios</li>
                                <li>Reforzar las razones de la elección de tus servicios financieros</li>
                                <li>Mantenerlos informados sobre las novedades</li>
                                <li>Incrementar el ticket de compra ofreciéndoles upgrades en: pólizas,<br class="D_e"> instrumentos financieros, préstamos e hipotecas</li>
                            </ul>',
                            'overImage' => App::setFilePath('/assets/images/illustrations/others/icono-14 1.png'),
                        ],
                        [
                            'title' => '<span class="greenBlueColor">Mide y optimiza <br class="D_e"> tus resultados <br class="D_e"> con analíticas relevantes
                            </span>',
                            'text' => 'Ten visibilidad sobre las métricas que realmente importan <br class="D_e"> para entender qué funciona y qué puede mejorar tu <br class="D_e"> equipo para optimizar
                            tu marketing digital. Cuenta con tableros <br class="D_e"> amigables que miden el rendimiento de ads, landing <br class="D_e"> pages y campañas de emails.',
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
                'text' => 'No importa el tamaño de tu empresa. Empodera a tus equipos:<br class="D_e"> comercial, ventas y marketing con todas las herramientas digitales <br class="D_e"> en un solo lugar. Es momento de acelerar el crecimiento de tu negocio.',
                'enableButton' => true,
                'urlButton' => '#lead-form',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Recibe un demo',
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
                'text' => 'En Escala tenemos un plan a la medida de tus necesidades. <br class="D_e"> Conoce nuestros planes para cada tamaño de empresa y número <br class="D_e"> de contactos de marketing. Optimiza tu inversión en ventas <br class="D_e"> y marketing digital.',
                'enableButton' => true,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
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
                        Conoce cómo hemos ayudado <br class="D_e"> a otras compañías de finanzas
                        </span>',
                    'video' => 'https://www.youtube.com/embed/XUPOcRPXuzA',
                    'text' => '“Todo nuestro equipo trabaja con Escala: ventas, marketing y comercial.<br class="D_e"> Nuestro plan de negocios va sobre ruedas. Nuestras ventas han crecido <br class="D_e"> en un 300%. Es la mejor inversión que hemos hecho”',
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

                        <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
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
                'title' => '<span class="greenBlueColor">Atrae leads de calidad <br class="D_e"> y convierte más ventas <br class="D_e"> con Escala.</span>',
                'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
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


{{--
  Template Name: [B]  Landing home casos exito - 2025
--}}

@extends('layouts.app')
@section('content')




<div id="home-casos-exito-2025">
    <div class="sections">
        <!-- Home  casos exito landing 2025 By Escala -->
        <section id="lead-form" class="hero2025 home-casos-exito-2025_0">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-home-casos-exito.svg') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <h1 class="principalBigTitle">
                                Conoce algunas <br class="DT_e">
                                historias de éxito de <br class="DT_e">
                                nuestros clientes
                            </h1>

                            <div class="containerImage">
                                <img alt="Ilustración de Andres Moreno ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/am-landing-home-casos-exito.webp') !!}" loading="lazy">
                            </div>
                        </div>
                    </section>


                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Ilustración de Andres Moreno ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/am-landing-home-casos-exito.webp') !!}" loading="lazy">
                        </div>
                    </section>

                    <section class="innerSectionElement sct3">
                        <div class="form7">
                            <div class="containElements">

                                <div class="formatForm redirectWeb" redirectweb="true">

                                    <h5 class="titleFormat blackcolor"> Conoce Escala en una <br class="space"> sesión personalizada</h5>

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
                    </section>
                </div>
            </div>
            <section class="separador" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-white-reviews-landing-casos-exito.webp') !!}')">
            </section>
        </section>

        <section class="customSection sectionParent home-casos-exito-2025_1_0" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-white-reviews-landing-casos-exito.webp') !!}')">
            <div class="section-row">

                <section class="innerSectionElement sct1">
                    <div class="groupElements row">
                        <div class="info col-md-12 col-lg-8 ">
                            <div class="containElements">
                                @php
                                $elementsReviews = [
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
                                [
                                'logo' =>
                                App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
                                'text' => 'Escala / plataforma CRM',
                                'points' => '4.8 / 5',
                                ]
                                ];
                                @endphp
                                <div class="ele reviews">
                                    <div class="elements">
                                        <div class="iconApp">
                                            <a target="_blank"
                                                href="https://www.getapp.com/customer-management-software/crm/category-leaders">
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_app_record_2025_category.svg') !!}"
                                                    loading="lazy">
                                            </a>
                                        </div>
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
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/icons-stars-yellow.svg') !!}"
                                                            loading="lazy">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>



        <section class="customSection sectionParent home-casos-exito-2025-1">

            <div class="section-row ">
                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        Caso de éxito destacado
                    </h2>

                </section>


            </div>
        </section>
        <!-- Sección de entrevistas podcast -->
        @php
        $podcastCards = [

        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-1.webp'),
        'titulo' => '¿Cómo KataGoGo escaló su negocio?',
        'desc' => 'La entrevista completa en',
        'tags' => [
        [
        'url' => 'https://open.spotify.com/',
        ],
        [
        'url' => 'https://youtube.com/',
        ],
        ],
        'categoria' => 'Marketing',
        'personas' => ['Alfonso Santiago', 'Catalina González'],
        'cargo' => 'CEO KataGoGo',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-2.webp'),
        'titulo' => 'Reducimos el costo de adquisición un 58%: El caso de Sileo con Escala',
        'desc' => 'La entrevista completa en',
        'tags' => [
        [
        'url' => 'https://open.spotify.com/',
        ],
        [
        'url' => 'https://youtube.com/',
        ],
        ],
        'categoria' => 'Educación',
        'personas' => ['Alfonso Santiago', 'Mau Tassara'],
        'cargo' => 'Director Nacional Comercial Sileo',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-3.webp'),
        'titulo' => '¿Cómo la empresa Kangen aumentó 4X los leads calificados con Escala?',
        'desc' => 'La entrevista completa en',
        'tags' => [
        [
        'url' => 'https://open.spotify.com/',
        ],
        [
        'url' => 'https://youtube.com/',
        ],
        ],
        'categoria' => 'Otras',
        'personas' => ['ANDRÉS MORENO', 'Areli Alarcón'],
        'cargo' => 'Gerente General Kangen',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-4.webp'),
        'titulo' => '¿Cómo la Alianza Francesa aumentó 40% sus ventas con Escala?',
        'desc' => 'La entrevista completa en',
        'tags' => [
        [
        'url' => 'https://open.spotify.com/',
        ],
        [
        'url' => 'https://youtube.com/',
        ],
        ],
        'categoria' => 'Educación',
        'personas' => ['ANDRÉS MORENO', 'ESTEBAN MELO'],
        'cargo' => 'Líder Mercadeo Alianza Francesa',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-5.webp'),
        'titulo' => 'Por qué Escala tiene el mejor servicio Según la empresa Comunidad GIVE',
        'desc' => 'La entrevista completa en',
        'tags' => [
        [
        'url' => 'https://open.spotify.com/',
        ],
        [
        'url' => 'https://youtube.com/',
        ],
        ],
        'categoria' => 'Marketing',
        'personas' => ['Andrea Ortíz', 'William Ávila'],
        'cargo' => 'Dir.a Comercial Comunidad GIVE',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-6.webp'),
        'titulo' => 'Así fue como la empresa Causa y Solución duplicó su facturación en menos de 6 meses',
        'desc' => 'La entrevista completa en',
        'tags' => [
        [

        'url' => 'https://open.spotify.com/',
        ],
        [
        'url' => 'https://youtube.com/',
        ],
        ],
        'categoria' => 'Consultoría',
        'personas' => ['Fundador Causa y Solución'],
        'cargo' => 'Fundador Causa y Solución',
        ],
        ];
        @endphp
        <section class="customSection sectionParent home-casos-exito-2025-podcast">
            <div class="section-row">
                <section class="innerSectionElement sct1">
                    <h2 class="title">Entrevistas a clientes en nuestro Escala Podcast</h2>
                    <div class="podcast-cards-grid">
                        @foreach($podcastCards as $card)
                        <div class="podcast-card">
                            <div class="podcast-card__image">
                                <img src="{{ $card['imagen'] ?? '' }}" alt="{{ $card['titulo'] ?? '' }}" loading="lazy">
                                <button class="play-button"><img src="{{ App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') }}" alt="Play"></button>
                            </div>
                            <div class="podcast-card__info">
                                <h3 class="podcast-card__title">{{ $card['titulo'] ?? '' }}</h3>
                                <p class="podcast-card__desc">{{ $card['desc'] ?? '' }}</p>
                                <div class="podcast-card__tags">
                                    @if(!empty($card['tags']))
                                    @php $iconUrl = App::setFilePath('/assets/images/illustrations/others/icon-spotify.webp'); @endphp
                                    @foreach($card['tags'] as $tag)
                                    <a class="podcast-card__tag" href="{{ $tag['url'] }}" target="_blank" style="display:inline-flex;align-items:center;gap:6px;text-decoration:none;">
                                        <img src="{{ $iconUrl }}" alt="icon" style="width:18px;height:18px;">
                                    </a>
                                    @endforeach
                                    @endif
                                    <span class="podcast-card__category">{{ $card['categoria'] ?? '' }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </section>

        <!-- Sección de artículos y video-testimoniales -->
        @php
        $articulosCards = [

        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-1.webp'),
        'desc' => 'Laboratorio clínico con más de 30 años en el mercado duplicó sus ventas con el CRM de Escala en menos de un año',
        'categoria' => 'Salud',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-2.webp'),
        'desc' => 'Aumentó 5X su tasa de recuperación de carrito de compra abandonado',
        'categoria' => 'Salud y Fitness',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-3.webp'),
        'desc' => 'Esta universidad, líder en formación artística, incrementó sus ingresos en más del 50% con Escala CRM en menos de 6 meses',
        'categoria' => 'Educación',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-4.webp'),
        'desc' => 'Aumentó 20% su cantidad de clientes con Escala',
        'categoria' => 'Financiera',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-5.webp'),
        'desc' => 'Mejoró su eficiencia y potenció las ventas de sus clientes con el CRM de Escala',
        'categoria' => 'Marketing',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-6.webp'),
        'desc' => 'Real de los Cues, aumentó un 30% sus ventas del canal digital con el CRM de Escala',
        'categoria' => 'Bienes raíces',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-7.webp'),
        'desc' => 'Este gran distribuidor de motocicletas, incrementó sus ventas en un 30%, en menos de un año gracias al CRM de Escala',
        'categoria' => 'Automotriz',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-8.webp'),
        'desc' => 'Esta aseguradora blindó su información frente a fugas de datos comerciales con Escala CRM',
        'categoria' => 'Seguros',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-9.webp'),
        'desc' => 'Esta empresa, aumentó sus ventas un 40% en menos de un año con el control y automatizaciones de Escala CRM',
        'categoria' => 'E-commerce',
        ],
        ];
        @endphp
        <section class="customSection sectionParent home-casos-exito-2025-articulos">
            <div class="section-row">
                <section class="innerSectionElement sct1">
                    <h2 class="title">Artículos y video-testimoniales</h2>
                    <div class="articulos-cards-grid">
                        @foreach($articulosCards as $card)
                        <div class="articulo-card">
                            <img src="{{ $card['imagen'] ?? '' }}" alt="{{ $card['desc'] ?? '' }}" loading="lazy">
                            <div class="articulo-card__info">
                                <p class="articulo-card__desc">{{ $card['desc'] ?? '' }}</p>
                                <span class="articulo-card__category">{{ $card['categoria'] ?? '' }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </section>


        <!-- Sección CTA: Listo para vender más con menos esfuerzo -->
        <section class="customSection sectionParent home-casos-exito-2025-cta" style="margin-top: 40px;">
            <div style="background: linear-gradient(90deg, #0089A7 0%, #00C6B1 100%); border-radius: 20px; padding: 32px 0 24px 0; text-align: center; max-width: 900px; margin: 0 auto;">
                <h2 style="color: #fff; font-size: 2rem; font-weight: 700; margin-bottom: 32px;">¿Listo para vender más con menos esfuerzo?</h2>
                <div style="display: flex; justify-content: center; gap: 24px; flex-wrap: wrap;">
                    <a href="#demo" style="background: #F44F38; color: #fff; font-weight: 700; font-size: 1.25rem; padding: 16px 32px; border-radius: 8px; text-decoration: none; transition: background 0.2s;">Solicita tu demo →</a>
                    <a href="https://wa.me/" target="_blank" style="background: #00C6B1; color: #fff; font-weight: 700; font-size: 1.25rem; padding: 16px 32px; border-radius: 8px; text-decoration: none; transition: background 0.2s;">Escríbenos por WhatsApp →</a>
                </div>
            </div>
        </section>



    </div>

</div>
@endsection
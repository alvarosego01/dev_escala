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
        <section class="customSection sectionParent home-casos-exito-2025-podcast">
            <div class="section-row">
                <section class="innerSectionElement sct1">
                    <h2 class="title">Entrevistas a clientes en nuestro Escala Podcast</h2>
                    <div class="podcast-cards-grid">
                        @foreach([1,2,3,4,5,6] as $i)
                        <div class="podcast-card">
                            <div class="podcast-card__image">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/podcast-card-' . $i . '.webp') }}" alt="Podcast {{ $i }}" loading="lazy">
                                <button class="play-button"><img src="{{ App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') }}" alt="Play"></button>
                            </div>
                            <div class="podcast-card__info">
                                <h3 class="podcast-card__title">Título entrevista {{ $i }}</h3>
                                <p class="podcast-card__desc">La entrevista completa en</p>
                                <div class="podcast-card__tags">
                                    <span class="podcast-card__tag">Spotify</span>
                                    <span class="podcast-card__tag">YouTube</span>
                                    <span class="podcast-card__category">Categoría</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </section>

        <!-- Sección de artículos y video-testimoniales -->
        <section class="customSection sectionParent home-casos-exito-2025-articulos">
            <div class="section-row">
                <section class="innerSectionElement sct1">
                    <h2 class="title">Artículos y video-testimoniales</h2>
                    <div class="articulos-cards-grid">
                        
                        @foreach([1,2,3] as $i)
                        <div class="articulo-card">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/articulo-card-' . $i . '.webp') }}" alt="Artículo {{ $i }}" loading="lazy">
                            <div class="articulo-card__info">
                                <p class="articulo-card__desc">Texto del artículo o testimonial {{ $i }}</p>
                                <span class="articulo-card__category">Categoría</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </section>




    </div>

</div>
@endsection
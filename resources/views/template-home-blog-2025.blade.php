{{--
  Template Name: [B]  Landing home blog - 2025
--}}

@extends('layouts.app')
@section('content')




<div id="home-blog-2025">
    <div class="sections">
        <!-- Home  blog landing 2025 By Escala -->
        <section id="lead-form" class="hero2025 home-blog-2025_0">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-home-casos-exito.svg') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <h1 class="principalBigTitle">
                                Haz que tu equipo <br class="space">
                                comercial venda más
                                <span>
                                    (sin enredarse con la tecnología)
                                </span>
                            </h1>
                            <span class="principalBigText">
                                Encuentra guías, comparativas, casos <br class="space">
                                reales y recursos para crecer con orden.

                            </span>

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


                </div>
            </div>
            <section class="separador" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-white-reviews-landing-casos-exito.webp') !!}')">
            </section>
        </section>

        <section class="customSection sectionParent home-blog-2025_1_0" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-white-reviews-landing-casos-exito.webp') !!}')">
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


        <section class="customSection sectionParent home-blog-2025-1">

            <div class="section-row ">
                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        Caso de éxito destacado
                    </h2>

                    <div class="featured-success-card">
                        <div class="featured-success-card__image">
                            <div class="video col-md-12">
                                @php
                                $videoEmbed = App::setFilePath('/assets/videos/caso_de_exito_video_miller_romero_taller_5.mp4');
                                $videoCover = App::setFilePath('/assets/images/illustrations/others/bg-caso-exito-taller-5-video.webp');
                                @endphp

                                @if (isset($videoEmbed) && $videoEmbed != null)
                                <div class="youtubeImageContainer">
                                    <video class="featured-video" id="featured-video" poster="{{ $videoCover }}">
                                        <source src="{{ $videoEmbed }}" type="video/mp4" />
                                        <p>
                                            Para ver este video, habilita JavaScript y usa un navegador compatible con HTML5 video.
                                        </p>
                                    </video>
                                </div>
                                @endif

                                <button id="play-featured-video" type="button" class="play-button">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') }}" alt="Play">
                                </button>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        var playBtn = document.getElementById('play-featured-video');
                                        var video = document.getElementById('featured-video');
                                        if (playBtn && video && typeof video.play === 'function') {
                                            playBtn.addEventListener('click', function(e) {
                                                e.preventDefault();
                                                video.setAttribute('controls', 'controls');
                                                playBtn.style.display = 'none';
                                                video.play();
                                            });
                                            video.addEventListener('pause', function() {
                                                playBtn.style.display = '';
                                            });
                                            video.addEventListener('ended', function() {
                                                playBtn.style.display = '';
                                                video.removeAttribute('controls');
                                                video.currentTime = 0;
                                            });
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="featured-success-card__info">
                            <img class="logo-testimonial" src="{{ App::setFilePath('/assets/images/illustrations/others/logo-caso-exito-taller-5-video.webp') }}" alt="Taller Cinco" loading="lazy">
                            <div class="featured-success-card__text">
                                Esta universidad, líder en formación artística, incrementó sus ingresos en más del 50% con Escala CRM en menos de 6 meses
                            </div>
                            <div class="featured-success-card__category">Educación</div>
                        </div>
                    </div>

                </section>


            </div>
        </section>


        <!-- Sección de entrevistas podcast -->
        @php
        $podcastCards = [

        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-1.webp'),
        'desc' => 'La entrevista completa en',
        'tags' => [
        [
        'url' => 'https://open.spotify.com/episode/1blStnuUfTjR8PWcTiRkFy?si=db920a234d8a4c7e',
        ],
        [
        'url' => 'https://youtu.be/0QKyCSECm6k?si=ooIlkoTMfNQuZ0Mb',
        ],
        ],
        'categoria' => 'Marketing',
        'personas' => ['Alfonso Santiago', 'Catalina González'],
        'cargo' => 'CEO KataGoGo',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-2.webp'),
        'desc' => 'La entrevista completa en',
        'tags' => [
        [
        'url' => 'https://open.spotify.com/episode/3I2yOTRe4AwLLnWKTK7H6O?si=bf2e50a707c740fd',
        ],
        [
        'url' => 'https://youtu.be/tJFFpMhJT4M?si=CWB6ob-UWN2tEnDh',
        ],
        ],
        'categoria' => 'Educación',
        'personas' => ['Alfonso Santiago', 'Mau Tassara'],
        'cargo' => 'Director Nacional Comercial Sileo',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-3.webp'),
        'desc' => 'La entrevista completa en',
        'tags' => [
        [
        'url' => 'https://open.spotify.com/episode/5jMi8cpBKDusyiX53NmRCp?si=ef4ef7ff88cf4341',
        ],
        [
        'url' => 'https://youtu.be/zlHnyqjD2ps?si=FTQpC-9WoaNTwmeI',
        ],
        ],
        'categoria' => 'Otras',
        'personas' => ['ANDRÉS MORENO', 'Areli Alarcón'],
        'cargo' => 'Gerente General Kangen',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-4.webp'),
        'desc' => 'La entrevista completa en',
        'tags' => [
        [
        'url' => 'https://open.spotify.com/episode/2EIkeCXHhaen5aPv6XGP2Y?si=f0f9d5b5026f49f2',
        ],
        [
        'url' => 'https://youtu.be/Qm7gh-0qIyI?si=_3QDDbaSsG36ys3U',
        ],
        ],
        'categoria' => 'Educación',
        'personas' => ['ANDRÉS MORENO', 'ESTEBAN MELO'],
        'cargo' => 'Líder Mercadeo Alianza Francesa',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-5.webp'),
        'desc' => 'La entrevista completa en',
        'tags' => [
        [
        'url' => 'https://open.spotify.com/episode/7A8i5DDjkSBdtP77g9e5f4?si=439a87644a0e4789',
        ],
        [
        'url' => 'https://youtu.be/ScqISD9kvx8?si=ByqWEB504Onx2ubl',
        ],
        ],
        'categoria' => 'Marketing',
        'personas' => ['Andrea Ortíz', 'William Ávila'],
        'cargo' => 'Dir.a Comercial Comunidad GIVE',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/podcast-card-6.webp'),
        'desc' => 'La entrevista completa en',
        'tags' => [
        [

        'url' => 'https://open.spotify.com/episode/4jhz7NEPESD2M330CGhzbE?si=dac3633721854ed3',
        ],
        [
        'url' => 'https://youtu.be/JthA8wHUloE?si=gtBgidkox9MF7dq4',
        ],
        ],
        'categoria' => 'Consultoría',
        'personas' => ['Fundador Causa y Solución'],
        'cargo' => 'Fundador Causa y Solución',
        ],
        ];
        @endphp
        <section class="customSection sectionParent home-blog-2025-2">
            <div class="section-row">
                <section class="innerSectionElement sct1">
                    <h2 class="title">Entrevistas a clientes en nuestro Escala Podcast</h2>
                    <div class="podcast-cards-grid">
                        @foreach($podcastCards as $card)
                        <div class="podcast-card">
                            <div class="podcast-card__image">
                                @php
                                $youtubeUrl = null;
                                if (!empty($card['tags'])) {
                                foreach ($card['tags'] as $tag) {
                                if (strpos($tag['url'], 'youtube') !== false || strpos($tag['url'], 'youtu.be') !== false) {
                                $youtubeUrl = $tag['url'];
                                break;
                                }
                                }
                                }
                                $youtubeId = null;
                                if ($youtubeUrl) {
                                if (preg_match('/youtu\.be\/([\w-]+)/', $youtubeUrl, $matches)) {
                                $youtubeId = $matches[1];
                                } elseif (preg_match('/v=([\w-]+)/', $youtubeUrl, $matches)) {
                                $youtubeId = $matches[1];
                                }
                                }
                                @endphp
                                <div class="podcast-preview-container" style="position:relative;overflow:hidden;border-top-left-radius:18px;border-top-right-radius:18px;">
                                    @if($youtubeId)
                                    <img class="podcast-preview-image" src="https://img.youtube.com/vi/{{ $youtubeId }}/hqdefault.jpg" alt="Preview YouTube" loading="lazy" data-youtubeid="{{ $youtubeId }}" style="width:100%;height:200px;object-fit:cover;display:block; border-radius:20px;">
                                    @else
                                    <img src="{{ $card['imagen'] ?? '' }}" alt="{{ $card['titulo'] ?? '' }}" loading="lazy" style="width:100%;height:200px;object-fit:cover;display:block;">
                                    @endif
                                    <button class="play-button" style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);" data-youtubeid="{{ $youtubeId }}"><img src="{{ App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') }}" alt="Play"></button>
                                </div>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    function playYoutubeLimited(previewContainer, youtubeId) {
                                        if (youtubeId && previewContainer) {
                                            // Cargar el script de la API si no está presente
                                            if (!window.YT) {
                                                var tag = document.createElement('script');
                                                tag.src = "https://www.youtube.com/iframe_api";
                                                var firstScriptTag = document.getElementsByTagName('script')[0];
                                                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                                            }
                                            // Crear un contenedor único para el player
                                            var playerDivId = 'yt-player-' + youtubeId + '-' + Math.floor(Math.random() * 100000);
                                            previewContainer.innerHTML = '<div id="' + playerDivId + '"></div>';
                                            // Esperar a que la API esté lista
                                            function onPlayerReady(player) {
                                                player.playVideo();
                                            }

                                            function onPlayerStateChange(event, player) {
                                                if (event.data == YT.PlayerState.PLAYING) {
                                                    var interval = setInterval(function() {
                                                        var current = player.getCurrentTime();
                                                        if (current >= 60) {
                                                            clearInterval(interval);
                                                            previewContainer.innerHTML = '<div class="imgTop" style="text-align:center;">' +
                                                                '<img style="width:100%;height:200px;object-fit:cover;display:block; border-radius:20px;" class="podcast-preview-image" src="https://img.youtube.com/vi/' + youtubeId + '/hqdefault.jpg" alt="Preview YouTube" loading="lazy" data-youtubeid="' + youtubeId + '">'
                                                            '</div>';
                                                        }
                                                    }, 1000);
                                                }
                                            }
                                            window.onYouTubeIframeAPIReady = function() {
                                                var player = new YT.Player(playerDivId, {
                                                    height: '230',
                                                    width: '100%',
                                                    videoId: youtubeId,
                                                    events: {
                                                        'onReady': function(e) {
                                                            onPlayerReady(e.target);
                                                        },
                                                        'onStateChange': function(e) {
                                                            onPlayerStateChange(e, e.target);
                                                        }
                                                    },
                                                    playerVars: {
                                                        autoplay: 1
                                                    }
                                                });
                                            };
                                            // Si la API ya está cargada
                                            if (window.YT && window.YT.Player) {
                                                window.onYouTubeIframeAPIReady();
                                            }
                                        }
                                    }
                                    document.querySelectorAll('.podcast-preview-image').forEach(function(img) {
                                        img.addEventListener('click', function(e) {
                                            e.preventDefault();
                                            var youtubeId = img.getAttribute('data-youtubeid');
                                            var previewContainer = img.closest('.podcast-preview-container');
                                            playYoutubeLimited(previewContainer, youtubeId);
                                        });
                                    });
                                    document.querySelectorAll('.podcast-card .play-button').forEach(function(btn) {
                                        btn.addEventListener('click', function(e) {
                                            e.preventDefault();
                                            var youtubeId = btn.getAttribute('data-youtubeid');
                                            var previewContainer = btn.closest('.podcast-preview-container');
                                            playYoutubeLimited(previewContainer, youtubeId);
                                        });
                                    });
                                });
                            </script>
                            <div class="podcast-card__info">
                                <p class="podcast-card__desc">{{ $card['desc'] ?? '' }}</p>
                                <div class="podcast-card__tags">
                                    <div>
                                        @if(!empty($card['tags']))
                                        @php
                                        $youtubeTags = array_filter($card['tags'], function($tag) {
                                        return strpos($tag['url'], 'youtube') !== false || strpos($tag['url'], 'youtu.be') !== false;
                                        });
                                        $spotifyTags = array_filter($card['tags'], function($tag) {
                                        return strpos($tag['url'], 'spotify') !== false;
                                        });
                                        @endphp
                                        {{-- Primero los de YouTube --}}
                                        @foreach($youtubeTags as $tag)
                                        @php $iconUrl = App::setFilePath('/assets/images/illustrations/others/icon-youtube.webp'); @endphp
                                        <a class="podcast-card__tag" href="{{ $tag['url'] }}" target="_blank">
                                            <img src="{{ $iconUrl }}" alt="YouTube">
                                        </a>
                                        @endforeach
                                        {{-- Luego los de Spotify --}}
                                        @foreach($spotifyTags as $tag)
                                        @php $iconUrl = App::setFilePath('/assets/images/illustrations/others/icon-spotify.webp'); @endphp
                                        <a class="podcast-card__tag" href="{{ $tag['url'] }}" target="_blank">
                                            <img src="{{ $iconUrl }}" alt="Spotify">
                                        </a>
                                        @endforeach
                                        @endif
                                    </div>
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

        'url' => 'https://escala.com/casos-de-exito-poctlab/',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-5.webp'),
        'desc' => 'Aumentó 5X su tasa de recuperación de carrito de compra abandonado',
        'categoria' => 'Salud y Fitness',
        'url' => ' https://escala.com/caso-de-uso-salud-y-fitness/',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-2.webp'),
        'desc' => 'Esta universidad, líder en formación artística, incrementó sus ingresos en más del 50% con Escala CRM en menos de 6 meses',
        'categoria' => 'Educación',

        'url' => 'https://escala.com/casos-de-exito-taller-5/',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-6.webp'),
        'desc' => 'Aumentó 20% su cantidad de clientes con Escala',
        'categoria' => 'Financiera',
        'url' => 'https://escala.com/caso-de-exito-gestion-financiera/',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-8.webp'),
        'desc' => 'Mejoró su eficiencia y potenció las ventas de sus clientes con el CRM de Escala',
        'categoria' => 'Marketing',
        'url' => 'https://escala.com/casos-de-exito-kata-gogo/',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-3.webp'),
        'desc' => 'Real de los Cues, aumentó un 30% sus ventas del canal digital con el CRM de Escala',
        'categoria' => 'Bienes raíces',
        'url' => 'https://escala.com/casos-de-exito-real-de-los-cues/',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-9.webp'),
        'desc' => 'Este gran distribuidor de motocicletas, incrementó sus ventas en un 30%, en menos de un año gracias al CRM de Escala',
        'categoria' => 'Automotriz',
        'url' => 'https://escala.com/casos-de-exito-motored/',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-4.webp'),
        'desc' => 'Esta aseguradora blindó su información frente a fugas de datos comerciales con Escala CRM',
        'categoria' => 'Seguros',

        'url' => 'https://escala.com/caso-de-exito-loyal-seguros/',
        ],
        [
        'imagen' => App::setFilePath('/assets/images/illustrations/others/articulo-card-7.webp'),
        'desc' => 'Esta empresa, aumentó sus ventas un 40% en menos de un año con el control y automatizaciones de Escala CRM',
        'categoria' => 'E-commerce',
        'url' => 'https://escala.com/casos-de-exito-desayunos-del-cielo/',
        ],
        ];
        @endphp
        <section class="customSection sectionParent home-blog-2025-3">
            <div class="section-row">
                <section class="innerSectionElement sct1">
                    <h2 class="title">Artículos y video-testimoniales</h2>
                    <div class="articulos-cards-grid">
                        @foreach($articulosCards as $card)
                        <a href="{{ $card['url'] ?? '#' }}" class="articulo-card" style="text-decoration:none;color:inherit;">
                            <div class="articulo-card__image"><img src="{{ $card['imagen'] ?? '' }}" alt="{{ $card['desc'] ?? '' }}" loading="lazy"></div>
                            <div class="articulo-card__info">
                                <p class="articulo-card__desc">{{ $card['desc'] ?? '' }}</p>
                                <span class="articulo-card__category">{{ $card['categoria'] ?? '' }}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </section>
            </div>
        </section>


        <!-- Sección CTA: Listo para vender más con menos esfuerzo -->
        <section class="customSection sectionParent home-blog-2025-4">
            <div class="section-row" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-banner-home-casos-exito-demo.webp') !!}')">
                <h2 class="title">¿Listo para vender más con <br class="DT_e">
                    menos esfuerzo?</h2>
                <div>
                    <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">Hablar con asesor →</a>
                    <a class="primaryButton hoverInEffect whatsapp" href="https://api.whatsapp.com/send?phone=17863042407&text=Hola%21%20Me%20interesa%20recibir%20un%20demo%20personalizado%20de%20Escala" target="_blank">Escríbenos por WhatsApp →</a>
                </div>
            </div>
        </section>



    </div>

</div>
@endsection
{{--
  Template Name: [B]  Landing home blog - 2025
--}}

@extends('layouts.app')
@section('content')




<div id="home-blog-2025">
    <div class="sections">
        <!-- Home  blog landing 2025 By Escala -->
        <section id="lead-form" class="hero2025 home-blog-2025_0">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-home-blog-escala-2.webp') !!}')">

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

                            
                        </div>
                    </section>


                    <section class="innerSectionElement sct2">
                        <div class="containerImage">
                            <img alt="Ilustración de Andres Moreno ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/am-escala-2025-blog-home.webp') !!}" loading="lazy">
                        </div>
                    </section>


                </div>
                <section class="separador" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-home-blog-escala-separador.webp') !!}')">
                </section>
            </div>

        </section>



        <section class="customSection sectionParent home-blog-2025-1">

            <div class="section-row ">
                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        Articulo destacado
                    </h2>

                </section>
                <section class="innerSectionElement sct2">
                    <a href="https://escala.com/que-es-la-omnicanalidad/">
                        <div class="featured-success-card">
                            <div class="featured-success-card__image">
                                <img alt="" src="{!! App::setFilePath('/assets/images/illustrations/others/omnicanal-estrategia-integrada-atencion-clientes-redes-sociales-escala.webp') !!}" loading="lazy">
                            </div>
                            <div class="featured-success-card__info">
                                <div class="featured-success-card__category">Omnicanalidad</div>
                                <div class="featured-success-card__text">
                                    Omnicanalidad: Qué es y cómo desarrollar una estrategia
                                </div>

                            </div>
                        </div>
                    </a>
                </section>
            </div>
        </section>



        <!-- Sección de artículos recientes con botón infinito -->
        @php
        $posts_per_page = 6;
        $paged = 1;
        $blog_query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC',
        ]);
        @endphp
        <section class="customSection sectionParent home-blog-2025-2">
            <div class="section-row">
                <section class="innerSectionElement sct1">
                    <h2 class="title">Artículos recientes</h2>

                </section>
                <section class="innerSectionElement sct2">
                    <div class="related-cards blog-list">
                        @foreach($blog_query->posts as $post)
                        @php
                        $title = get_the_title($post->ID);
                        $permalink = get_permalink($post->ID);
                        $image_id = get_post_thumbnail_id($post->ID);
                        $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'large') : '';
                        $topic = function_exists('carbon_get_post_meta') ? carbon_get_post_meta($post->ID, 'main_topic') : '';
                        @endphp
                        <div class="related-card blog-card">
                            <a href="{{ $permalink }}">
                                <div class="card-image" style="background-image:url('{{ $image_url }}')"></div>
                                <div class="card-topic">{{ $topic }}</div>
                                <h4 class="card-title">{!! $title !!}</h4>
                                <!-- Fecha removida -->
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @if($blog_query->max_num_pages > $paged)
                    <button id="load-more-posts" class="btn-load-more" data-next="2">Cargar más articulos <span>→</span></button>
                    @endif

            </div>
        </section>
        <script>
            var ajaxUrl = "{{ admin_url('admin-ajax.php') }}";
            document.addEventListener('DOMContentLoaded', function() {
                var loadMoreBtn = document.getElementById('load-more-posts');
                if (loadMoreBtn) {
                    loadMoreBtn.addEventListener('click', function() {
                        var nextPage = this.getAttribute('data-next');
                        var btn = this;
                        btn.disabled = true;
                        btn.textContent = 'Cargando...';
                        fetch(ajaxUrl + '?action=load_more_blog_posts&page=' + nextPage)
                            .then(response => response.text())
                            .then(html => {
                                var blogList = document.querySelector('.blog-list');
                                blogList.insertAdjacentHTML('beforeend', html);
                                btn.setAttribute('data-next', parseInt(nextPage) + 1);
                                btn.disabled = false;
                                btn.textContent = 'Cargar más artículos →';
                                if (html.trim() === '') {
                                    btn.style.display = 'none';
                                }
                            });
                    });
                }
            });
        </script>


        <section class="customSection sectionParent home-blog-2025-3">

            <div class="section-row ">
                <section class="innerSectionElement sct1">
                    <h2 class="title">
                        Episodios del Escala Podcast
                    </h2>
                </section>
                <section class="innerSectionElement sct2">
                    <div class="featured-success-card">
                        <div class="featured-success-card__image">
                            <div class="video ">
                                @php
                                $youtubeUrl = 'https://youtu.be/tJFFpMhJT4M?si=CWB6ob-UWN2tEnDh';
                                $youtubeId = null;
                                if (preg_match('/youtu\.be\/([\w-]+)/', $youtubeUrl, $matches)) {
                                $youtubeId = $matches[1];
                                } elseif (preg_match('/v=([\w-]+)/', $youtubeUrl, $matches)) {
                                $youtubeId = $matches[1];
                                }
                                @endphp
                                <div class="podcast-preview-container">
                                    @if($youtubeId)
                                    <img class="podcast-preview-image" src="https://img.youtube.com/vi/{{ $youtubeId }}/hqdefault.jpg" alt="Preview YouTube" loading="lazy" data-youtubeid="{{ $youtubeId }}">
                                    <button class="play-button" style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);" data-youtubeid="{{ $youtubeId }}">
                                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') }}" alt="Play">
                                    </button>
                                    @endif
                                </div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        function playYoutube(previewContainer, youtubeId) {
                                            if (youtubeId && previewContainer) {
                                                previewContainer.innerHTML = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' + youtubeId + '?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                                            }
                                        }
                                        document.querySelectorAll('.featured-success-card__image .podcast-preview-image').forEach(function(img) {
                                            img.addEventListener('click', function(e) {
                                                e.preventDefault();
                                                var youtubeId = img.getAttribute('data-youtubeid');
                                                var previewContainer = img.closest('.podcast-preview-container');
                                                playYoutube(previewContainer, youtubeId);
                                            });
                                        });
                                        document.querySelectorAll('.featured-success-card__image .play-button').forEach(function(btn) {
                                            btn.addEventListener('click', function(e) {
                                                e.preventDefault();
                                                var youtubeId = btn.getAttribute('data-youtubeid');
                                                var previewContainer = btn.closest('.podcast-preview-container');
                                                playYoutube(previewContainer, youtubeId);
                                            });
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="featured-success-card__info">
                            <div class="featured-success-card__category">Educación</div>

                            <div class="featured-success-card__text">
                                La fórmula de Sileo para crecer gastando menos en adquisición
                            </div>
                            <p class="podcast-card__desc">La entrevista completa en</p>

                            <div class="podcast-card__tags">
                                <a class="podcast-card__tag" href="https://youtu.be/tJFFpMhJT4M?si=CWB6ob-UWN2tEnDh" target="_blank">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-youtube.webp') }}" alt="YouTube">
                                </a>
                                <a class="podcast-card__tag" href="https://open.spotify.com/episode/3I2yOTRe4AwLLnWKTK7H6O?si=bf2e50a707c740fd  " target="_blank">
                                    <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-spotify.webp') }}" alt="Spotify">
                                </a>
                            </div>
                        </div>
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


                <section class="innerSectionElement sct3">
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

                <button id="load-more-podcast" class="btn-load-more" type="button">Escuchar más episodios <span>→</span></button>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var sct3 = document.querySelector('.sct3');
                        var btn = document.getElementById('load-more-podcast');
                        if (btn && sct3) {
                            btn.addEventListener('click', function() {
                                if (sct3.style.display === 'none' || sct3.style.display === '') {
                                    sct3.style.display = 'block';
                                    btn.innerHTML = 'Ocultar episodios <span>↑</span>';
                                } else {
                                    sct3.style.display = 'none';
                                    btn.innerHTML = 'Escuchar más episodios <span>→</span>';
                                }
                            });
                        }
                    });
                </script>

                <span class="text">
                    Escala es el CRM todo-en-uno para líderes comerciales que <br class="DT_e">
                    quieren vender más con menos esfuerzo.
                </span>
            </div>
        </section>




        <!-- Sección CTA: Listo para vender más con menos esfuerzo -->
        <section class="customSection sectionParent home-blog-2025-4">
            <div class="section-row" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-banner-home-blog-demo.webp') !!}')">
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
{{--
    Template Name: [B] Blog - Single - 2025
    Template Post Type: post
--}}

@php
use App\Classes\CarbonFields;
$carbon_fields = new CarbonFields();
$settings = $carbon_fields->load_post_type_settings(get_the_ID());
$post = $settings['post'] ?? null;
$blocks = $post['content_blocks'] ?? [];
@endphp

@extends('layouts.app')

@section('content')


<div id="single_blog_2025" class="post-template">
    <div class="sections">
        {{-- Header principal --}}
        <section class="blog-header-section customSection sectionParent fullWidth">
            <div class="breadcrumb ">
                <nav aria-label="breadcrumb">
                    <a href="/escala/blog/">Blog/Topic/</a>
                    <!-- @php
                        $categories = get_the_category();
                        $main_cat = $categories && count($categories) ? $categories[0] : null;
                        $main_cat_url = $main_cat ? get_category_link($main_cat->term_id) : '';
                    @endphp
                    @if($main_cat)
                        <a href="{{ $main_cat_url }}">{{ $main_cat->name }}/</a>
                    @endif -->
                    {{ $post['main_title'] ?? get_the_title() }}/
                </nav>
            </div>
            <div class="section-row">

                <div class="innerSectionElement sct0">

                    <div class="topic-label">{{ $post['main_topic'] ?? '' }}</div>
                    <h1>{!! $post['main_title'] ?? '' !!}</h1>
                    <div class="subtitle">{!! $post['main_subtitle'] ?? '' !!}</div>

                    <div class="meta">
                        <div class="img">
                            <img alt="Icon escala" src="{{ App::setFilePath('/assets/images/icons/icon escala blog.webp') }}" loading="lazy">
                        </div>
                        <div class="meta-text">
                            <h4 class="title-meta">{{ $post['text_autor'] ?? '' }}</h4>
                            <div class="meta-info">
                                <h4>{{ $post['fecha_publicacion'] ?? '' }}</h4> -
                                <h4>{{ $post['reading_time'] ?? '' }}</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="innerSectionElement sct1">
                    @if(!empty($post['main_image']))
                    <div class="main-image">
                        <img src="{{ App::get_img($post['main_image'], 'src') }}" alt="{{ App::get_img($post['main_image'], 'alt') }}">
                    </div>
                    @endif


                    <div class="meta meta-mb">
                        <div class="img">
                            <img alt="Icon escala" src="{{ App::setFilePath('/assets/images/icons/icon escala blog.webp') }}" loading="lazy">
                        </div>
                        <div class="meta-text">
                            <h4 class="title-meta">Escala CRM</h4>
                            <div class="meta-info">
                                <h4>{{ $post['fecha_publicacion'] ?? '' }}</h4> -
                                <h4>{{ $post['reading_time'] ?? '' }}</h4>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
            <div class="hr-bottom ">
            </div>
        </section>
        <section class="index-section customSection sectionParent fullWidth ">
            <div class="section-row">
                <div class="innerSectionElement sct0">
                    {{-- Renderizado dinámico de bloques --}}
                    @foreach($blocks as $block)
                    @switch($block['_type'])
                    @case('index')
                    @include('components.blog2025.index', [
                    'index_items' => $block['index_items'],
                    'index_title' => $block['index_title'] ?? null
                    ])
                    @break
                    @case('text_block')
                    @include('components.blog2025.text-block', [
                    'title' => $block['title'],
                    'content' => $block['content'],
                    'anchor_id' => $block['anchor_id'] ?? null
                    ])
                    @break
                    @case('text_block_h3')
                    @include('components.blog2025.text-block-h3', [
                    'title' => $block['title'],
                    'content' => $block['content'],
                    'anchor_id' => $block['anchor_id'] ?? null
                    ])
                    @break
                    @case('highlight_block')
                    @include('components.blog2025.highlight-block', [
                    'content' => $block['content'],
                    'anchor_id' => $block['anchor_id'] ?? null
                    ])
                    @break
                    @case('share_block')
                    @include('components.blog2025.share-block', [
                    'topic' => $block['topic'] ?? '',
                    'anchor_id' => $block['anchor_id'] ?? null
                    ])
                    @break
                    @case('space_block')
                    @include('components.blog2025.space-block', ['space_size' => $block['space_size']])
                    @break
                    @endswitch
                    @endforeach
                </div>
                <div class="innerSectionElement sct1">
                    <div class="space-block mb-xxl"></div>
                    <section class="share-section">
                        <h3>Compartir en</h3>
                        <div class="social-share-buttons">
                            <a href="https://www.facebook.com/escalasoftware/" target="_blank"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-facebook-escala.webp') }}"></a>
                            <a href="https://x.com/escalasoftware" target="_blank"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-x-escala.webp') }}"></a>
                            <a href="https://www.linkedin.com/company/escalacrm/posts/?feedView=all" target="_blank"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-linkedin-escala.webp') }}"></a>
                        </div>
                    </section>

                    @php
                    $recent_posts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'post__not_in' => [get_the_ID()],
                    'orderby' => 'date',
                    'order' => 'DESC',
                    ]);
                    @endphp
                    <section class="recent-posts-widget">
                        <h3>Artículos populares</h3>
                        <hr>
                        <ul>
                            @foreach($recent_posts->posts as $idx => $recent)
                            @if($idx < 4)
                                <li>
                                <a href="{{ get_permalink($recent->ID) }}">{{ get_the_title($recent->ID) }}</a>
                                <hr>
                                @if($idx < 3)

                                    @endif
                                    </li>
                                    @endif
                                    @endforeach
                        </ul>
                        <h3>Suscríbete al Escala Blog</h3>
                        <a class="btn btn-primary sub" href="#">Suscribirme →</a>
                    </section>
                    @php wp_reset_postdata(); @endphp
                </div>
            </div>

            <div class="section-row-2">
                <div class="innerSectionElement sct0">
                    {{-- Renderizar solo los bloques cta_banner en esta sección --}}
                    @foreach($blocks as $block)
                    @if($block['_type'] === 'cta_banner')
                    @include('components.blog2025.cta-banner', [
                    'image' => $block['image'],
                    'title' => $block['title'],
                    'content' => $block['content'],
                    'button_text' => $block['button_text'],
                    'button_url' => $block['button_url'],
                    'anchor_id' => $block['anchor_id'] ?? null
                    ])
                    @endif
                    @endforeach
                </div>

                <div class="innerSectionElement sct1">
                    <h2>Solo para ti</h2>
                    @php
                    // Obtener la categoría principal del post actual
                    $categories = get_the_category();
                    $main_cat_id = $categories && count($categories) ? $categories[0]->term_id : null;
                    // Último post publicado de la misma categoría (excluyendo el actual)
                    $latest_args = [
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'post__not_in' => [get_the_ID()],
                    'cat' => $main_cat_id,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    ];
                    $latest_query = new WP_Query($latest_args);
                    $latest_post = $latest_query->have_posts() ? $latest_query->posts[0] : null;
                    // 8 aleatorios de la misma categoría, excluyendo el actual y el latest
                    $exclude_ids = [get_the_ID()];
                    if ($latest_post) $exclude_ids[] = $latest_post->ID;
                    $random_args = [
                    'post_type' => 'post',
                    'posts_per_page' => 8,
                    'post__not_in' => $exclude_ids,
                    'cat' => $main_cat_id,
                    'orderby' => 'rand',
                    ];
                    $random_query = new WP_Query($random_args);
                    @endphp
                    <div class="related-cards">
                        @php
                        $related_posts = [];
                        if($latest_post) $related_posts[] = $latest_post;
                        foreach($random_query->posts as $related) {
                        $related_posts[] = $related;
                        }
                        $related_posts = array_slice($related_posts, 0, 9);
                        @endphp
                        @foreach($related_posts as $related)
                        @php
                        $topic = carbon_get_post_meta($related->ID, 'main_topic');
                        $title = get_the_title($related->ID);
                        $permalink = get_permalink($related->ID);
                        $image_id = get_post_thumbnail_id($related->ID);
                        $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'large') : '';
                        $reading_time = carbon_get_post_meta($related->ID, 'reading_time');
                        $text_autor = carbon_get_post_meta($related->ID, 'text_autor');
                        @endphp
                        <div class="related-card">
                            <div class="card-image" style="background-image:url('{{ $image_url }}')">
                                <div class="card-topic">{{ $topic }}</div>
                                <a href="{{ $permalink }}">
                                    <div class="card-title">{!! $title !!}</div>
                                </a>
                            </div>
                            <div class="card-meta card-meta-flex">
                                <span class="card-meta-icon">
                                    <img src="{{ App::setFilePath('/assets/images/icons/icon-escala-blog-2025.webp') }}" alt="icono Escala">
                                </span>
                                <span class="meta-text">
                                    <div class="meta-info">
                                        <h4>{{ implode(' ', array_slice(explode(' ', $reading_time ?? ''), 0, 2)) }}</h4>
                                        <h4 class="title-meta">{{ $text_autor ?? '' }}</h4>
                                    </div>
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @php wp_reset_postdata(); @endphp
                </div>
                <div class="innerSectionElement sct2">
                    <h3>¿Te gustaría recibir artículos como este directo en tu Inbox?</h3>
                    <a class="btn btn-primary sub" href="#">Suscríbete al blog de Escala →</a>
                </div>
            </div>
        </section>




    </div>
</div>
@endsection
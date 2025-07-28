{{--
    Template Name: [B] Blog - Single - 2025
    Template Post Type: post
--}}
@php
use App\Classes\CarbonFields;
$carbon_fields = new CarbonFields();
$settings = $carbon_fields->load_post_type_settings(get_the_ID());
$post = $settings['post'];
$blocks = $post['content_blocks'] ?? [];
@endphp

@extends('layouts.app')

@section('content')


<div id="single_blog_2025" class="post-template">
    <div class="sections">
        {{-- Header principal --}}
        <section class="blog-header-section customSection sectionParent fullWidth">
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
                            <h4 class="title-meta">Escala CRM</h4>
                            <div class="meta-info">
                                <h4>{{ $post['author'] ?? '' }}</h4> -
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
                                <h4>{{ $post['author'] ?? '' }}</h4> -
                                <h4>{{ $post['reading_time'] ?? '' }}</h4>
                            </div>

                        </div>

                    </div>
                </div>


            </div>

        </section>
        <section class="index-section customSection sectionParent fullWidth ">
            <div class="section-row">
                <div class="innerSectionElement sct0">
                    {{-- Renderizado dinámico de bloques --}}
                    @foreach($blocks as $block)
                    @switch($block['_type'])
                    @case('index')
                    @include('components.blog2025.index', ['index_items' => $block['index_items']])
                    @break
                    @case('text_block')
                    @include('components.blog2025.text-block', ['title' => $block['title'], 'content' => $block['content']])
                    @break
                    @case('highlight_block')
                    @include('components.blog2025.highlight-block', ['content' => $block['content']])
                    @break
                    @case('space_block')
                    @include('components.blog2025.space-block', ['space_size' => $block['space_size']])
                    @break
                    @case('cta_banner')
                    @include('components.blog2025.cta-banner', [
                    'image' => $block['image'],
                    'title' => $block['title'],
                    'content' => $block['content'],
                    'button_text' => $block['button_text'],
                    'button_url' => $block['button_url']
                    ])
                    @break
                    @endswitch
                    @endforeach
                </div>
                <div class="innerSectionElement sct1">
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
                        <ul>
                            @foreach($recent_posts->posts as $recent)
                            <li>
                                <a href="{{ get_permalink($recent->ID) }}">{{ get_the_title($recent->ID) }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </section>
                    @php wp_reset_postdata(); @endphp
                </div>

            </div>
        </section>




    </div>
</div>
@endsection
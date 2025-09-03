{{--
    Template Name: [B] Blog - Single - 2024
    Template Post Type: post
--}}
@php
use App\Classes\CarbonFields;
$carbon_fields = new CarbonFields();
$settings = $carbon_fields->load_post_type_settings(get_the_ID());

$category = get_the_category();
if ($category != null && count($category) > 0) {
$category = $category[0]->name;
}else {
$category = 'Sin categoría';
}

@endphp

@php

$post = $settings['post'];

$blog_single_1_title = $post['blog_single_1_title'];
$blog_single_1_parag = $post['blog_single_1_parag'];
$blog_single_1_image_header = $post['blog_single_1_image_header'];
$blog_single_1_background_header = $post['blog_single_1_background_header'];
$blog_single_1_banner_d = $post['blog_single_1_banner_d'];
$blog_single_1_banner_m = $post['blog_single_1_banner_m'];
$blog_single_1_banner_url = $post['blog_single_1_banner_url'];

@endphp


@extends('layouts.app')

@section('content')
<div id="single_blog_2024" class="post-template">


    <div class="sections">

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol single_blog_2024 single_blog_2024_0">
            <div class="backgroundFull" @if (isset($blog_single_1_background_header) && $blog_single_1_background_header !='' ) style="background-image: url('{{ App::get_img($blog_single_1_background_header, 'src') }}');" @endif>
                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="groupElements row">
                            <div class="info col-md-12 col-lg-8">
                                <div class="containElements row threeCol">
                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">
                                        <div class="containerImage">

                                            @if (isset($blog_single_1_image_header) && $blog_single_1_image_header != '')
                                            <img alt="{{ App::get_img($blog_single_1_image_header, 'alt') }}" src="{{ App::get_img($blog_single_1_image_header, 'src') }}" loading="lazy">
                                            @endif

                                        </div>
                                    </div>
                                    <div class="ele ele2 ">

                                        @if (isset($blog_single_1_title) && $blog_single_1_title != '')
                                        <h1 class="principalBigTitle blackColor">
                                            {!! $blog_single_1_title !!}
                                        </h1>
                                        @endif

                                        @if (isset($blog_single_1_parag) && $blog_single_1_parag != '')
                                        <div class="principalBigText grayColorTexts">
                                            {!! $blog_single_1_parag !!}
                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="form7 col-md-12 col-lg-4">
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
                            <div class="imageReviewsMobile hideOnDesktop">
                                <div class="image">
                                    <div class="containerImage">
                                        @if (isset($blog_single_1_image_header) && $blog_single_1_image_header != '' )
                                        <img alt="{{ App::get_img($blog_single_1_image_header, 'alt') }}" src="{{ App::get_img($blog_single_1_image_header, 'src') }}" loading="lazy">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="w-full customSection sectionParent single_blog_2024_1">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">

                        {!! the_content() !!}

                    </div>

                </section>

            </div>

        </section>

        <section class="customSection sectionParent single_blog_2024 single_blog_2024_9">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">

                        @if (isset($blog_single_1_banner_d) && $blog_single_1_banner_d != '')
                        <img alt="{{ App::get_img($blog_single_1_banner_d, 'alt') }}" src="{{ App::get_img($blog_single_1_banner_d, 'src') }}" loading="lazy" class="card-img-top bannerSingleBlog DT2_e openPopUpButton popup-general-demo-2022">
                        @endif

                        @if (isset($blog_single_1_banner_m) && $blog_single_1_banner_m != '')
                        <img alt="{{ App::get_img($blog_single_1_banner_m, 'alt') }}" src="{{ App::get_img($blog_single_1_banner_m, 'src') }}" loading="lazy" class="card-img-top bannerSingleBlog M_e openPopUpButton popup-general-demo-2022">
                        @endif


                        <!-- <script>
                            jQuery('.bannerSingleBlog').on('click', function() {
                                window.open('{!! $blog_single_1_banner_url !!}', '_blank');
                            });
                        </script> -->

                    </div>
                </section>
            </div>
        </section>

        <section class="customSection sectionParent single_blog_2024 single_blog_2024_10">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <h2 class="primaryTitle">Si te fue útil ¡Compártelo!</h2> <span>|</span>
                        <div class="icons">
                            <a href="https://www.facebook.com/escalasoftware/" target="_blank"><img src="{!! App::setFilePath('/assets/images/icons/facebook.svg') !!}" alt="Icon facebook escala"></a>
                            <a href="" target="_blank"><img src="{!! App::setFilePath('/assets/images/icons/twitter.svg') !!}" alt="Icon twitter escala"></a>
                            <a href="https://www.linkedin.com/company/escalaonline/" target="_blank"><img src="{!! App::setFilePath('/assets/images/icons/linkedin.svg') !!}" alt="Icon linkedin escala"></a>
                        </div>
                    </div>
                </section>
            </div>
        </section>


        @php
        $query = array();
        $query = [
        'post_type' => 'post',
        'category_name' => $category,
        'posts_per_page' => 3,
        'limit' => 3,
        'order' => 'DESC',
        ];

        $query = Posts::getPosts($query);
        $posts = (isset($query) && $query != null)? $query->get_posts() : null;

        @endphp

        @if (isset($posts) && $posts != null)
        <section class="customSection sectionParent single_blog_2024 single_blog_2024_11">
              <div class="section-row">
                <section class="innerSectionElement sct1">
                    <h2>Artículos populares</h2>
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
                            <a href="{{ $permalink }}">
                                <div class="card-image" style="background-image:url('{{ $image_url }}')"></div>
                                <div class="card-topic">{{ $topic }}</div>
                                <h4 class="card-title">{!! $title !!}</h4>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @php wp_reset_postdata(); @endphp
                </section>
            </div>
        </section>
        @endif

    </div>

</div>
@endsection
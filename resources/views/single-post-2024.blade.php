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

            <section id="lead-form"
                class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol single_blog_2024 single_blog_2024_0">
                <div class="backgroundFull"
                    @if (isset($blog_single_1_background_header) && $blog_single_1_background_header != '')
                    style="background-image: url('{{ App::get_img($blog_single_1_background_header, 'src') }}');"
                    @endif
                    >
                    <div class="section-row">
                        <section class="innerSectionElement sct1">
                            <div class="groupElements row">
                                <div class="info col-md-12 col-lg-8">
                                    <div class="containElements row threeCol">
                                        <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">
                                            <div class="containerImage">

                                                @if (isset($blog_single_1_image_header) && $blog_single_1_image_header != '')
                                                <img alt="{{ App::get_img($blog_single_1_image_header, 'alt') }}"
                                                    src="{{ App::get_img($blog_single_1_image_header, 'src') }}"
                                                    loading="lazy">
                                                @endif

                                            </div>
                                        </div>
                                        <div class="ele ele2 col-md-12 col-lg-7">

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
                                            <h5 class="titleFormat blackcolor">¡Reserva tu espacio!</h5>
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
                                            <img alt="{{ App::get_img($blog_single_1_image_header, 'alt') }}"
                                                src="{{ App::get_img($blog_single_1_image_header, 'src') }}" loading="lazy">
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
                                <img alt="{{ App::get_img($blog_single_1_banner_d, 'alt') }}"
                                    src="{{ App::get_img($blog_single_1_banner_d, 'src') }}" loading="lazy"
                                    class="card-img-top bannerSingleBlog D_e">
                            @endif

                            @if (isset($blog_single_1_banner_m) && $blog_single_1_banner_m != '')
                                <img alt="{{ App::get_img($blog_single_1_banner_m, 'alt') }}"
                                    src="{{ App::get_img($blog_single_1_banner_m, 'src') }}" loading="lazy"
                                    class="card-img-top bannerSingleBlog M_e">
                            @endif


                            <script>
                                jQuery('.bannerSingleBlog').on('click', function() {
                                    window.open('{!! $blog_single_1_banner_url !!}', '_blank');
                                });
                            </script>

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
                                <a href="https://www.facebook.com/escalasoftware/" target="_blank"><img
                                        src="{!! App::setFilePath('/assets/images/icons/facebook.svg') !!}" alt="Icon facebook escala"></a>
                                <a href="" target="_blank"><img src="{!! App::setFilePath('/assets/images/icons/twitter.svg') !!}"
                                        alt="Icon twitter escala"></a>
                                <a href="https://www.linkedin.com/company/escalaonline/" target="_blank"><img
                                        src="{!! App::setFilePath('/assets/images/icons/linkedin.svg') !!}" alt="Icon linkedin escala"></a>
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
                    <section class="innerSectionElement sct0">
                        <div class="containElements">
                            <div class="container">
                                <div class="row">
                                    <div class="text-center col-md-12 col-lg-12">
                                        <h2 class="primaryTitle">
                                            Artículos <span class="blackColor2"> relacionados</span> <br class="DT_e">
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <section class="innerSectionElement sct1 row">
                            @foreach ($posts as $index => $item)
                                @php
                                    $post_tags = get_the_tags($item->ID);
                                @endphp

                                <div class="mb-3 col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="border-0 card">

                                        <a href="{!! App::setTypeUrl() !!}/blog/{{ $item->post_name }}">
                                            <img src="{{ Posts::getPhoto($item->ID) }}" class="card-img-top">
                                        </a>

                                        <div class="card-body">
                                            <h6 class="">
                                            @foreach ($category as $item)
                                                {{ $item->name }}
                                            @endforeach
                                            </h6>
                                            <h5 class="card-title">
                                                    {{ $item->post_title }}
                                            </h5>
                                            <p class="card-text">
                                                           {!! ACF_CUSTOM::_getField('excerpt_single', $item->ID) !!}
                                                </p>
                                            <div class="subCard d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <img src="{!! App::setFilePath('/assets/images/blog/icons/writer.png') !!}" alt="Anne Bryan"
                                                        class="mr-2 rounded-circle">
                                                    <div>
                                                        <p class="mb-0">Anne Bryan</p>
                                                        <p class="mb-0">Verified writer</p>
                                                    </div>
                                                </div>
                                                <div class="div-2">
                                                    <p class="mb-0">
                                                           @php
                                        $date = $item->post_date;
                                        $sec = strtotime($date);
                                        $newdate = date ("j M ", $sec);
                                        echo $newdate;
                                    @endphp
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                    </section>

                </div>
            </section>
               @endif

        </div>

    </div>
@endsection

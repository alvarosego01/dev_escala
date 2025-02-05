{{--
  Template Name: [B] Home landing - 2025
--}}

@extends('layouts.app')
@section('content')



<div id="homeSection_2025">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol homeSection_2025 homeSection_2025_0 ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_integraciones_0.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">

                                            <span>
                                                Escala las ventas de tu empresa
                                            </span>
                                        </h1>

                                        <span class="principalBigText grayColorTexts">
                                            con un CRM
                                            todo-en-uno y
                                            fácil de usar
                                        </span>



                                    </div>


                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala" src="{{ App::setFilePath('/assets/images/person/am/img_andres_moreno_home_escala_2025.png') }}" loading="lazy">
                                        </div>

                                    </div>


                                </div>



                            </div>
                            <div class="form7 col-md-12 col-lg-4 ">

                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">


                                        <h5 class="titleFormat blackcolor"> Recibe un demo <br class="space">
                                            personalizado de Escala</h5>


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
                                        <img alt="Ilustración Andrés Moreno, CEO de Escala" src="{{ App::setFilePath('/assets/images/person/am/img_andres_moreno_home_escala_2025.png') }}" loading="lazy">
                                    </div>

                                </div>

                                <div class="elements">

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
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    @endforeach

                                </div>

                            </div>





                        </div>

                    </section>

                </div>



            </div>

        </section>


        <section class="customSection sectionParent home_2025_1">

            <div class="section-row">

                <section class="innerSectionElement sct1">

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
                    'logo' => App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
                    'text' => 'Escala / plataforma CRM',
                    'points' => '4.8 / 5',
                    ]
                    ];
                    @endphp
                    <div class="ele reviews">

                        <div class="elements">

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
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_blue.svg') !!}" loading="lazy">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            @endforeach

                        </div>


                    </div>
                </section>

            </div>

        </section>




















    </div>

</div>


@endsection
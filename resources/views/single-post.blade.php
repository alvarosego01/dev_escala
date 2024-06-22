{{--
    Template Name: [B] Blog - Single
    Template Post Type: post
--}}


 

<?php
$catevory = get_the_category();
if ($category != null && count($category) > 0) {
    $category = $category[0]->name;
}
?>


@extends('layouts.app')

@section('content')


    <div id="blog-single-bootstrap" class="post-template">


        <div class="sections">

            <section class="customSection sectionParent blogSingleSection0 fullWidth">

                @php
                    // acf id post_herader_image
                    $i = ACF_CUSTOM::_getField('post_herader_image', get_the_ID());
                    if ($i != null) {
                        $i = $i['url'];
                    } else {
                        $i = Posts::getPhoto(get_the_ID());
                    }

                @endphp

                <div class="backgroundFull" style="background: url('{{ $i }}')">

                    <div class="section-row">

                        <div class="containElements">

                            <h1 class="principalBigTitle blackColor">

                                {{ the_title() }}

                            </h1>

                        </div>

                    </div>

                </div>

            </section>


            <section class="customSection sectionParent blogSingleSection1">


                <div class="section-row">



                    <section class="innerSectionElement sct1">

                        <div class="row">

                            <div class="col-md-12 col-lg-2">
                                <div class="social vertical">
                                    <h2>
                                        Compartir
                                    </h2>
                                    {!! do_shortcode(
                                        '[social-share align="center" style="icon" animation="essb_icon_animation3" counters="0" buttons="facebook,twitter,linkedin"]',
                                    ) !!}
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-10 content ">

                                {!! the_content() !!}

                            </div>

                        </div>
                    </section>


                </div>



            </section>

            <section class="customSection sectionParent blogSingleSection2">


                <div class="social horizontal">
                    <h2>
                        Compartir
                    </h2>
                    {!! do_shortcode(
                        '[social-share align="center" style="icon" animation="essb_icon_animation3" counters="0" buttons="facebook,twitter,linkedin"]',
                    ) !!}
                </div>

            </section>

            @php

                // echo $category;

                $query = [
                    'post_type' => 'post',
                    'category_name' => $category,
                    'posts_per_page' => 3,
                    'order' => 'DESC',
                ];
                $query = Posts::getPosts($query);
            @endphp

            @articlesBlog_T1([
                'posts' => $query,
                'categoryTag' => false,
                'categoryTagList' => [$category]
            ])
                @slot('classSection')
                    blogSingleSection3
                @endslot
                @slot('enableTitle')
                    true
                @endslot
                @slot('titlePrincipal')
                    <span class="greenBlueColor">Artículos</span> relacionados
                @endslot
            @endarticlesBlog_T1

            @php

                if (get_post_type() === 'post') {
                    # code...

                    $idPostParent = url_to_postid('blog');
                    $setForm = ACF_CUSTOM::_getField('form7', $idPostParent);
                } else {
                    $setForm = null;
                }

                $parameters = [
                    'classSection' => 'blogSingleSection4',
                    'title' => '<span style="color: #A4E7EA">
              Comienza a impulsar el crecimiento <br class="DT_e"> de tu negocio con Escala
              </span>',
                    'text' => '
              Estás a un clic de probar Escala, la plataforma todo <br class="DT_e">
              en uno de marketing digital y ventas que te ayudará <br class="DT_e">
              a crecer de manera acelerada',
                    'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
                    'image' => App::setFilePath(
                        '/assets/images/illustrations/otto/otto-escala-cta-formulario-blogs.png',
                    ),
                    'img_alt' =>
                        'Ilustración de Otto (mascota de Escala) con las manos arriba celebrando en referencia a invitar a las personas a registrarse en el formulario de contacto de los rtículos del blog',
                    'setForm' => $setForm,
                ];
            @endphp
            @bannerForms7_T1($parameters)
            @endbannerForms7_T1


        </div>

    </div>


@endsection

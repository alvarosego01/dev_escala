{{--
    Template Name: [B] Blog - Single
    Template Post Type: post
--}}


<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css"
    href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap"
    type="text/css" media="all">


<?php
  $catevory = get_the_category();
  if( $category != null && count($category) > 0 ){
    $category = $category[0]->name;
  }
?>


@extends('layouts.app')

@section('content')


    <div id="blog-single-bootstrap">

        <div class="sections">


            <section class="customSection sectionParent blogSingleSection0 fullWidth">

              <div class="backgroundFull" style="background: url('{{ Posts::getPhoto(get_the_ID()) }}') rgba(13,46,56, 0.7)" >


                    <div class="section-row">






                            <div class="containElements">


                              <h1 class="principalBigTitle blackColor">

                                  {{  the_title() }}

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
                              {!! do_shortcode( '[social-share align="center" style="icon" animation="essb_icon_animation3" counters="0" buttons="facebook,twitter,linkedin"]' ) !!}
                            </div>
                          </div>

                          <div class="col-md-12 col-lg-10 content">

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
              {!! do_shortcode( '[social-share align="center" style="icon" animation="essb_icon_animation3" counters="0" buttons="facebook,twitter,linkedin"]' ) !!}
            </div>


            </section>


            @php

            echo $category;

            $query = array(
                'post_type' => 'post',
                'category_name' => $category,
                'posts_per_page' => 3,
                'order' => 'DESC'
            );
            $query = Posts::getPosts($query);
        @endphp

        @articlesBlog_T1(array(
            "posts" => $query,
            'categoryTag' => false,
            'categoryTagList' =>  [
                $category
            ]
        ))

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




        </div>

    </div>






@endsection

{{--
    Template Name: [B] Zoom Home landing
  --}}

@php

    $popup = ACF_CUSTOM::_getField('popup_elementor');

    if($popup == null || $popup == ''){

        $popup = 'btn-popup-header';

    }

@endphp




@extends('layouts.app')


@section('content')






   <div id="zoomHome-landing-Bootstrap">

       <div class="sections">


           <section id="lead-form" class="customSection sectionParent zoomHomeSection0">


               <div class="section-row">



                   <section class="innerSectionElement sct1">

                       <div class="groupElements row">

                           <div class="info col-md-12 col-lg-6">

                               <div class="containElements">


                                   <h1 class="principalBigTitle blackColor">
                                       Genera más leads,<br> <span class="greenBlueColor">clientes y ventas</span>
                                   </h1>
                                   <p class="principalBigText grayColorTexts">
                                       Con Escala, la plataforma <br> de marketing digital y ventas <br> más completa y fácil de utilizar.
                                   </p>

                                   <div class="containerImage">
                                       <img alt="Genera más leads, clientes y ventas con Escala"
                                           src="{!! App::setFilePath('/assets/images/person/am/andres_moreno_otto1.png') !!}" alt="" loading="lazy">
                                   </div>



                               </div>


                           </div>
                           <div class="form7 col-md-12 col-lg-6">

                               <div class="containElements">

                                   <div class="formatForm redirectWeb"   redirectWeb="true">

                                       <h4 class="titleFormat blackcolor">
                                            Recibe un tour guiado <br class="space"> de Escala
                                       </h4>


                                       @php
                                           $f = get_field('form7');
                                       @endphp

                                       @if ($f && $f != null && $f != '')

                                           {!! do_shortcode($f) !!}

                                       @else
                                    @php
                                        $_args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
                                        $_rs = array();
                                        $_formShortcode = null;
                                        if( $_data = get_posts($_args)){
                                            foreach($_data as $_key){
                                                $_rs[$_key->ID] = $_key->post_title;
                                                if( $_key->post_title === 'Profile demo - Flujo Demo' ){
                                                    $_formShortcode = '[contact-form-7 id="'.$_key->ID.'"]';
                                                }
                                            }
                                        }else{
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                        }
                                    @endphp
                                {!! do_shortcode($_formShortcode); !!}
                                @endif


                                   </div>




                               </div>
                           </div>


                       </div>

                   </section>

               </div>

               <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas 2.png') !!}')" class="backgroundPlanets">
               </div>




           </section>

       </div>

   </div>





@endsection

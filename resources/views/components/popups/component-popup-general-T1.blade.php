
@php

// popup_call_class
// popup_image
// popup_title_text
// custom_background_type
// popup_background_color
// popup_background_gradient
// popup_background_image
// form_title
// form_shortcode
// form_redirect
// bootstrap_popup_template

@endphp

<div class= "customPopUp {!! uniqid() !!} general1 modal fade {{ $popup_call_class }}" id="{{ $popup_call_class }}" aria-hidden="true"
    aria-labelledby="{{ $popup_call_class }}" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        @if ( isset($enable_custom_background) && $enable_custom_background == 1 )

            @if ( isset($custom_background_type) && $custom_background_type == 'solid_color' )
            <div
            style="background-color: {{ $popup_background_color }}"
            class="modal-content solidColor">
            @endif

            @if ( isset($custom_background_type) && $custom_background_type == 'color_gradient' )
            <div
            style="{{ $popup_background_gradient }}"
            class="modal-content gradient">
            @endif

            @if ( isset($custom_background_type) && $custom_background_type == 'background_image' )

            @php
               $i = $popup_background_image;
               $i = $i['url'];
            @endphp

            <div
            style="background-image: url('{{ $i }}')"
            class="modal-content image">

            @endif

            @else
            <div
        class="modal-content">

        @endif

            <div class="modal-body">

                <section class="innerSectionElement sct1">

                    <div class="groupElements">

                        <button type="button" class="closePopUp" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>

                        <div class="row">

                            <div class="col-md-12 col-lg-6 image col1">

                                <div class="containerImage logo">

                                    <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">

                                </div>

                                <h2 class="primaryTitle">

                                    @if (isset($popup_title_text) && $popup_title_text != null)
                                        {!! $popup_title_text !!}
                                    @else

                                    ¡Comienza a <br class="space"> <span class="orangeColor">impulsar tus
                                        <br class="space"> ventas</span> ahora!

                                        @endif

                                </h2>

                                <div class="containerImage imageHero">

                                    @if (isset($popup_image) && $popup_image != null)

                                    @php
                                        $i = $popup_image;
                                        $i = $i['url'];
                                     @endphp

                                        <img src="{{ $i }}" >

                                    @else

                                        <img src="{!! App::setFilePath('/assets/images/illustrations/team/escala-acelera-ventas-ahora.png') !!}">

                                    @endif

                                </div>

                            </div>
                            <div class="col-md-12 col-lg-6 form col2">

                                <div class="containElements">


                                    <div class="formatForm redirectWeb"   redirectWeb="true">

                                        <h5 class="titleFormat blackcolor">
                                            @if (isset($form_title) && $form_title != null)
                                                {!! $form_title !!}
                                            @else
                                                Solicita una prueba
                                            @endif
                                        </h5>


                                        @if (isset($form_shortcode) && $form_shortcode != null)
                                        {!! do_shortcode($form_shortcode) !!}
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


                    </div>


                </section>

            </div>

        </div>



    </div>
</div>


<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary" data-bs-toggle="modal"
    href="#{{ $popup_call_class }}" role="button">
</a>

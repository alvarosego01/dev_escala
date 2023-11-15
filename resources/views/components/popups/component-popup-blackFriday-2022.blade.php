@php
/*

popup_call_class
popup_imageTitle
popup_image
popup_after_imageText
popup_principalTitle
enable_custom_background
custom_background_type
popup_background_color
popup_background_gradient
popup_background_image
form_title
form_shortcode
form_redirect
popup_direction
*/
@endphp

<div class= "customPopUp  blackFriday_2022 modal fade {{ $popup_call_class }} {{ $popup_direction }} " id="{{ $popup_call_class }}"
    aria-hidden="true" aria-labelledby="{{ $popup_call_class }}" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered type2022">

        <div class="modal-content">

            <div class="modal-body">

                <section class="innerSectionElement">

                    <div class="groupElements">

                        <button type="button" class="closePopUp" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>

                        <div class="row">

                            <div class="col-md-12 col-lg-6 info">

                                <div class="containElements">

                                    <div class="sect1">

                                        @if (isset($popup_principalTitle) && $popup_principalTitle != null )
                                            @if ( $popup_principalTitle != '-' )
                                            <h2 class="primaryTitle">
                                                {!! $popup_principalTitle !!}
                                                </h2>
                                            @endif
                                        @else
                                            <h2 class="primaryTitle">
                                                <span style="color:#006582;">
                                                  ¡Empieza ahora!
                                                </span>
                                            </h2>



                                        @endif


                                    </div>

                                    <div class="sect2">

                                        <div class="formatForm redirectWeb"   redirectWeb="true">

                                            {{-- <h5 class="titleFormat blackcolor">
                                                @if (isset($form_title) && $form_title != null)
                                                    {!! $form_title !!}
                                                @else
                                                    Completa los siguientes datos
                                                @endif
                                            </h5> --}}



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

                                @if ( isset($enable_custom_background) && $enable_custom_background == 1 )

                                @if ( isset($custom_background_type) && $custom_background_type == 'solid_color' )
                                <div
                                style="background-color: {{ $popup_background_color }}"
                                class="col-md-12 col-lg-6 image solidColor">
                                @endif

                                @if ( isset($custom_background_type) && $custom_background_type == 'color_gradient' )
                                <div
                                style="{{ $popup_background_gradient }}"
                                class="col-md-12 col-lg-6 image gradient">
                                @endif

                                @if ( isset($custom_background_type) && $custom_background_type == 'background_image' )

                                @php
                                   $i = $popup_background_image;
                                   $i = $i['url'];
                                @endphp

                                <div
                                style="background-image: url('{{ $i }}')"
                                class="col-md-12 col-lg-6 image">

                                @endif

                                @else
                                <div
                            class="col-md-12 col-lg-6 image">

                            @endif

                                <div class="containElements">

                                    <div class="sect1">

                                          <h3  class="thirdTitle">
                                                <div class="title">
                                                    #Escala<span style="color: #FAD872;">Black</span>
                                                </div>

                                            </h3>

                                    </div>
                                    <div class="sect2">

                                       <span class="discountTag">
                                            Por tiempo limitado
                                        </span>

                                    </div>

                                    <div class="sect3">

                                        <p class="text">
                                            ¡Suscríbete y gana <br class="space">
                                            2 meses GRATIS!
                                        </p>


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


<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary"
    data-bs-toggle="modal" href="#{{ $popup_call_class }}" role="button">
</a>



<script>
    jQuery('.customPopUp.modal.blackFriday_2022 .innerSectionElement .groupElements .row .info .containElements .sect2 .formatForm .wpcf7 input.wpcf7-form-control.wpcf7-submit').val('Empezar')
</script>
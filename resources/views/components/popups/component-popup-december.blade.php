

<div class= "customPopUp  december_popup modal fade {{ $popup_call_class }} {{ $popup_direction }} " id="{{ $popup_call_class }}"
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
                                               ¡Planifica tu 2024 <br class="space">
                                               con Escala!
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

                                          <div  class="thirdTitle">
                                                <h3 class="title">
                                                    Define <span class="titleTag"
                                                    style="margin-left: 5px"
                                                    >metas,</span> <span class="titleTag"
                                                    style="margin-left: 5px"
                                                    >estrategias</span> <br class="space">
                                                    <span class="titleTag">y requisitos operativos</span>

                                                    para llevar tu empresa <br class="space">
                                                    a un próximo nivel.
                                                </h3>
                                            </div>

                                    </div>

                                    <div class="sect2">
                                        <div class="containerImage">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/otto/otto_search.png') !!}" loading="lazy">
                                        </div>
                                    </div>


                                    <div class="sect3">

                                        <p class="text">
                                            Workshop estratégico en vivo.
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
    jQuery('.customPopUp.modal.december_popup .innerSectionElement .groupElements .row .info .containElements .sect2 .formatForm .wpcf7 input.wpcf7-form-control.wpcf7-submit').val('Empezar')
</script>
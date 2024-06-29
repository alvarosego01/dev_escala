<div class="customPopUp  last_new_popup modal fade {{ $popup_call_class }} {{ $popup_direction }} " id="{{ $popup_call_class }}" aria-hidden="true" aria-labelledby="{{ $popup_call_class }}" tabindex="-1">

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

                                        <h2 class="primaryTitle" style="text-align:center;">
                                            <span style="color:#006582;">
                                                ¡Empieza ahora!

                                        </h2>

                                    </div>

                                    <div class="sect2">

                                        <div class="formatForm redirectWeb" redirectWeb="true">

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


                            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/headerband1_integraciones.jpg') }}')" class="col-md-12 col-lg-6 image">

                                <div class="containElements ">
                                    <div class="sect1 ">
                                        <h2 class="primaryTitle">
                                            Agiliza tu marketing y ventas con las
                                            <span style="color:#2C4857;">
                                                nuevas integraciones de Escala
                                            </span>
                                        </h2>
                                    </div>

                                    <div class="sect2">
                                        <div class="containElements">
                                            <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/img-popup-internal-integrations.png') !!}" alt=""></div>
                                            <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/img-popup-internal-integrations-2.png') !!}" alt=""></div>
                                            <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/img-popup-internal-integrations-3.png') !!}" alt=""></div>
                                            <div class="iconList"><img src="{!! App::setFilePath('/assets/images/illustrations/others/img-popup-internal-integrations-4.png') !!}" alt=""></div>
                                        </div>
                                    </div>

                                    <div class="sect3">
                                        <div class="containerImage">

                                            <img src="{!! App::setFilePath('/assets/images/person/img-escala-popup-integraciones.png') !!}" alt="Imagen persona lectura">
                                        </div>

                                    </div>
                                </div>




                            </div>

                </section>



            </div>

        </div>



    </div>
</div>

{{-- Para abrir y cerrar popup --}}
<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary" data-bs-toggle="modal" href="#{{ $popup_call_class }}" role="button">
</a>


{{-- Para disparar form --}}
<script>
    jQuery('.customPopUp.modal.last_new_popup .innerSectionElement .groupElements .row .info .containElements .sect2 .formatForm .wpcf7 input.wpcf7-form-control.wpcf7-submit').val('Recibir demo')
</script>
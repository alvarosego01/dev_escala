<div class="customPopUp  black_friday_popup modal fade {{ $popup_call_class }} {{ $popup_direction }} " id="{{ $popup_call_class }}" aria-hidden="true" aria-labelledby="{{ $popup_call_class }}" tabindex="-1">

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

                                        <div class="containElements">

                                            <div class="formatForm redirectWeb" redirectweb="true">

                                                <div class="form-container form-1" style="text-align:center;">
                                                    <img style="margin-bottom:15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-1.png') !!}" loading="lazy">

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
                                                    $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                                    }
                                                    @endphp
                                                    {!! do_shortcode($_formShortcode) !!}
                                                </div>

                                                <div class="form-container form-2" style="display:none; text-align:center;">
                                                    <img style="margin-bottom:15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-2.png') !!}" loading="lazy">

                                                    @php
                                                    $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                                    $_rs = [];
                                                    $_formShortcode = null;
                                                    if ($_data = get_posts($_args)) {
                                                    foreach ($_data as $_key) {
                                                    $_rs[$_key->ID] = $_key->post_title;
                                                    if ($_key->post_title === 'Demo flujo step 2') {
                                                    $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                                    }
                                                    }
                                                    } else {
                                                    $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                                    }
                                                    @endphp
                                                    {!! do_shortcode($_formShortcode) !!}
                                                </div>
                                            </div>


                                        </div>

                                    </div>


                                </div>

                            </div>


                            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_popup_bf_2024.svg') }}')" class="col-md-12 col-lg-6 image">

                                <div class="containElements ">
                                    <div class="sect1 ">
                                        <div class="containElements">
                                            <span> Conoce</span>
                                            <h2>
                                                <span class="colorLinear"> #EscalaBlack,</span><br class="space">
                                                la promo por Black Friday para acelerar tus ventas
                                            </h2>
                                        </div>

                                    </div>

                                    <div class="sect2">
                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/imagen_interna_popup_bf_personas_2024.png') !!}" alt="Imagen personas especial 2024 escala black friday">
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
    jQuery('.customPopUp.modal.black_friday .innerSectionElement .groupElements .row .info .containElements .sect2 .formatForm .wpcf7 input.wpcf7-form-control.wpcf7-submit').val('Recibir demo')
</script>
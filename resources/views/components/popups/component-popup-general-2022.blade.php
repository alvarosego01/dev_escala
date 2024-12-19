<div class="customPopUp  general_2022 modal fade {{ $popup_call_class }}" id="{{ $popup_call_class }}" aria-hidden="true" aria-labelledby="{{ $popup_call_class }}" tabindex="-1">


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

                                </div>

                            </div>


                            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_fundig_popup.svg') }}')" class="col-md-12 col-lg-6 image">

                                <div class="containElements ">
                                    <div class="sect1 ">
                                        <span class="primarySpan">¡Buenas noticias!</span>
                                        <h2 class="primaryTitle">
                                            Escala ha completado una ronda
                                            de $12M de capital de inversión
                                            <span> para consolidarse como el CRM
                                                líder para PyMEs hispanas</span>
                                        </h2>
                                    </div>

                                    <div class="sect2">
                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/andres-moreno-y-alfonso-santiago-ceo-escala.png') !!}" alt="Imagen persona lectura">

                                    </div>
                                </div>




                            </div>

                </section>



            </div>

        </div>



    </div>
</div>


<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary" data-bs-toggle="modal" href="#{{ $popup_call_class }}" role="button">
</a>
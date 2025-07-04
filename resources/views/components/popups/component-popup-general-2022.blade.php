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

                                        <h2 class="primaryTitle">
                                            <span style="color: #2C4857;">
                                                Conoce Escala en una <br class="space"> sesión personalizada
                                            </span>
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

                            <div class="col-md-12 col-lg-6 image" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_popup_casos_exito.svg') }}')">

                                <div class="containElements">

                                    <div class="sect1">

                                        <div class="containerImage logo">

                                            <img src="{!! App::setFilePath('/assets/images/logos/logotipo-escala-blanco.png') !!}" alt="Logo" class="logo-img">

                                        </div>
                                        <h3 class="thirdTitle">
                                            Vende más con <br class="space">
                                            menos esfuerzo
                                        </h3>
                                    </div>
                                    <div class="sect2">

                                        <div class="containerImage imageHero">

                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-ceo-escala-2025-alfonso.png') !!}" alt="CEO escala 2025 Alfonso">

                                        </div>

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


<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary" data-bs-toggle="modal" href="#{{ $popup_call_class }}" role="button">
</a>
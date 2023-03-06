

<div class= "customPopUp  popup_casos_uso modal fade popup-casosUso_general left_side " id="popup-casosUso_general"
    aria-hidden="true" aria-labelledby="popup-casosUso_general" tabindex="-1">

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
                                                <span style="color: #322C2E;">
                                                    Recibe una breve <br class="space">
                                                    demostración
                                                </span>
                                            </h2>

                                    </div>

                                    <div class="sect2">

                                        <div class="formatForm redirectWeb"   redirectWeb="true">



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
                                                if( $_key->post_title === 'Profile demo - Flujo Demo Casos de uso' ){
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

                                <div
                                class="col-md-12 col-lg-6 image">

                                <div class="containElements">

                                    <div class="sect1">

                                        <div class="containerImage logo">

                                            <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">

                                        </div>

                                            <h3  class="thirdTitle">
                                                    Descubre cómo Escala <br class="space">
                                                    potencia negocios <br class="space">
                                                <span style="color: #2C4857">
                                                    <strong>en tu industria</strong>
                                                </span>

                                            </h3>

                                    </div>
                                    <div class="sect2">

                                        <div class="containerImage imageHero">

                                            <img src="{!! App::setFilePath('/assets/images/illustrations/otto/otto_promo.png') !!}" alt="Otto casos de uso">

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





    <script type="text/javascript">

      if (jQuery('.popup-casosUso_general.popup_casos_uso .wpcf7 input.wpcf7-form-control.wpcf7-submit').length > 0) {

          jQuery('.popup-casosUso_general.popup_casos_uso .wpcf7 input.wpcf7-form-control.wpcf7-submit').attr('value', 'Recibir demo');

      }

  </script>




</div>


<a style="display: none" popup="popup-casosUso_general" indexpopupbutton class="btn btn-primary"
    data-bs-toggle="modal" href="#popup-casosUso_general" role="button">
</a>

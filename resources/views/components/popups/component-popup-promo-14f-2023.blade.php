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
form_button_text
*/
@endphp

<div class= "customPopUp  popup_promo_14f modal fade {{ $popup_call_class }} {{ $popup_direction }} " id="{{ $popup_call_class }}"
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
                                                <span style="color: #322C2E;">
                                                    Conversa con un asesor <br class="space">
                                                    ¡y aprovecha la promo <br class="space">
                                                    de pocos días!
                                                </span>
                                            </h2>

                                        @endif




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

                                <div
                                class="col-md-12 col-lg-6 image">

                                <div class="containElements">

                                    <div class="sect1">


                                        <div class="containerImage logo">

                                            <img src="{!! App::setFilePath('/assets/images/logos/logo_escala_F34F36_gris.png') !!}" alt="Logo" class="logo-img">

                                        </div>

                                            <h3  class="thirdTitle">

                                                <div class="title">
                                                    30% <span style="color: #322C2E">
                                                        de <br class="space">
                                                        <strong>descuento</strong>
                                                    </span>

                                                  </div>
                                            </h3>

                                    </div>
                                    <div class="sect2">

                                        <div class="containerImage imageHero">

                                            @if (isset($popup_image) && $popup_image != null)

                                            @php
                                                $i = $popup_image;
                                                $i = $i['url'];
                                             @endphp

                                                <img src="{{ $i }}" >

                                            @else

                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/pareja_14f_promo.png') !!}" alt="Ilustración de promoción especial para 14 de febrero">

                                            @endif

                                        </div>

                                    </div>

                                    <div class="sect3">


                                        @if (isset($popup_after_imageText) && $popup_after_imageText != null )
                                            @if ( $popup_after_imageText != '-' )
                                                    {!! $popup_after_imageText !!}
                                            @endif
                                        @else
                                            <span >
                                                 Oferta válida hasta el 15 de febrero de 2023
                                            </span>
                                            <p>
                                                    *Aplican condiciones
                                                {{-- <a href="#">*Aplican condiciones</a> --}}
                                            </p>
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




    @if (isset($form_button_text) && $form_button_text != null )

    <script type="text/javascript">
      // jQuery(document).ready(function () {
      if (jQuery('.{{$popup_call_class}}.popup_promo_14f .wpcf7 input.wpcf7-form-control.wpcf7-submit').length > 0) {

          jQuery('.{{$popup_call_class}}.popup_promo_14f .wpcf7 input.wpcf7-form-control.wpcf7-submit').attr('value', '{{$form_button_text}}');

      }

      // });
  </script>

    @endif



</div>


<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary"
    data-bs-toggle="modal" href="#{{ $popup_call_class }}" role="button">
</a>

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

<div class= "customPopUp  popup_promo_1m modal fade {{ $popup_call_class }} {{ $popup_direction }} " id="{{ $popup_call_class }}"
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
                                                    Obtén nuestro <br class="space">
                                                    súper descuento
                                                </span>
                                            </h2>



                                        @endif


                                    </div>

                                    <div class="sect2">

                                        <div class="formatForm redirectWeb"   redirectWeb="true">



                                            @if (isset($form_shortcode) && $form_shortcode != null)
                                                {!! do_shortcode($form_shortcode) !!}
                                            @else
                                                {!! do_shortcode('[contact-form-7 id="73" title="Contacto Paso 1" ]') !!}
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

                                        @if (isset($popup_imageTitle) && $popup_imageTitle != null )
                                            @if ( $popup_imageTitle != '-' )
                                                <h3 class="thirdTitle">
                                                    {!! $popup_imageTitle !!}
                                                </h3>
                                            @endif
                                        @else
                                            <h3  class="thirdTitle">
                                              <span class="preTitleTag">
                                                  ¡Llegó el año para escalar tu negocio!
                                              </span>
                                                <div class="title">
                                                    Suscríbete y gana <br class="space">
                                                    <span style="color: #36768A">un mes gratis</span>

                                                  </div>
                                            </h3>



                                        @endif

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

                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/popup_image_promo_m1.png') !!}" alt="Ilustración de promoción especial para un mes gratis">

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
                                              Oferta válida hasta el 15 de enero de 2023
                                            </span>
                                            <p>
                                                <a href="http://escala.com/">*Aplican condiciones</a>
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
      if (jQuery('.{{$popup_call_class}}.popup_promo_1m .wpcf7 input.wpcf7-form-control.wpcf7-submit').length > 0) {

          jQuery('.{{$popup_call_class}}.popup_promo_1m .wpcf7 input.wpcf7-form-control.wpcf7-submit').attr('value', '{{$form_button_text}}');

      }

      // });
  </script>

    @endif



</div>


<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary"
    data-bs-toggle="modal" href="#{{ $popup_call_class }}" role="button">
</a>

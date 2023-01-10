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
                                                    Obtén nuestro <br class="space">
                                                    súper descuento
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

                                            {{-- {!! do_shortcode('[contact-form-7 id="73" title="Contacto Paso 1"]') !!} --}}

                                            @if (isset($form_shortcode) && $form_shortcode != null)
                                                {!! do_shortcode($form_shortcode) !!}
                                            @else
                                                {!! do_shortcode('[contact-form-7 id="73" title="Contacto Paso 1" ]') !!}
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
                                class="col-md-12 col-lg-6 image image">

                                @endif

                                @else
                                <div
                            class="col-md-12 col-lg-6 image">

                            @endif

                                <div class="containElements">

                                    <div class="sect1">


                                        <div class="containerImage logo">

                                            <img src="{!! App::setFilePath('/assets/images/logos/logotipo-escala-blanco.png') !!}" alt="Logo" class="logo-img">

                                        </div>

                                        @if (isset($popup_imageTitle) && $popup_imageTitle != null )
                                            @if ( $popup_imageTitle != '-' )
                                                <h3 class="thirdTitle">
                                                    {!! $popup_imageTitle !!}
                                                </h3>
                                            @endif
                                        @else
                                            <h3  class="thirdTitle">
                                                <div class="title">
                                                    <span style="color: #FAD872;"> Black friday </span> <span style="color: #A4E7EA;">& <br class="space"> Cyber Monday</span>
                                                </div>
                                                <span class="discountTag">
                                                    40% Off*
                                                </span>
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

                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/black_friday_promo.png') !!}" alt="Ilustración de promoción oferta black friday viernes negro">

                                            @endif

                                        </div>

                                    </div>

                                    <div class="sect3">


                                        @if (isset($popup_after_imageText) && $popup_after_imageText != null )
                                            @if ( $popup_after_imageText != '-' )
                                                    {!! $popup_after_imageText !!}
                                            @endif
                                        @else
                                            <span class="tag">
                                                Cupos limitados
                                            </span>
                                            <p>
                                                <a href="http://escala.com/blackfriday">Terminos & condiciones</a> - válido hasta el 30 Nov*
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
</div>


<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary"
    data-bs-toggle="modal" href="#{{ $popup_call_class }}" role="button">
</a>

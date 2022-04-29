@php

// popup_call_class
// popup_image
// popup_title_text
// custom_background_type
// popup_background_color
// popup_background_gradient
// popup_background_image
// form_title
// form_shortcode
// form_redirect
// bootstrap_popup_template
@endphp

<div class="customPopUp general_2022 modal fade {{ $popup_call_class }}" id="{{ $popup_call_class }}"
    aria-hidden="true" aria-labelledby="{{ $popup_call_class }}" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

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
                                            ¡Bienvenido a bordo!
                                        </h2>

                                        @if (isset($subTitle) && $subTitle != null && $subTitle != '-')
                                        <h3 class="secondaryTitle">
                                            @if (isset($subTitle) && $subTitle != null)
                                            {!! $subTitle !!}
                                            @else
                                                Crea una cuenta gratuita
                                            @endif
                                        </h3>
                                        @endif

                                        @if (isset($thirdTitle) && $thirdTitle != null && $thirdTitle != '-')
                                        <h3 class="secondaryTitle">
                                            @if (isset($thirdTitle) && $thirdTitle != null)
                                            {!! $thirdTitle !!}
                                            @else
                                            Registra tus datos y obtén 10 días <br class="desktopTabletElement"> de nuestra plataforma sin costo alguno
                                            @endif
                                        </h3>
                                        @endif

                                    </div>

                                    <div class="sect2">

                                        <div class="formatForm" id="redirectWeb" redirectWeb="true">

                                            <h5 class="titleFormat blackcolor">
                                                @if (isset($form_title) && $form_title != null)
                                                    {!! $form_title !!}
                                                @else
                                                    Completa los siguientes datos
                                                @endif
                                            </h5>

                                            {{-- {!! do_shortcode('[contact-form-7 id="73" title="Contacto Paso 1"]') !!} --}}

                                            @if (isset($form_shortcode) && $form_shortcode != null)
                                                {!! do_shortcode($form_shortcode) !!}
                                            @else
                                                {!! do_shortcode('[contact-form-7 id="73" title="Contacto Paso 1"]') !!}
                                            @endif


                                        </div>

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-12 col-lg-6 image">

                                <div class="containElements">

                                    <div class="sect1">


                                        <div class="containerImage logo">

                                            <img src="{!! App::setFilePath('/assets/images/logos/escala_logo.svg') !!}" alt="Logo" class="logo-img">

                                        </div>

                                        @if (isset($imageTitle) && $imageTitle != null && $imageTitle != '-')
                                        <h2 class="primaryTitle">

                                            @if (isset($imageTitle) && $imageTitle != null)
                                                {!! $imageTitle !!}
                                            @else
                                                La plataforma todo en uno de marketing <br class="desktopTabletElement">
                                                digital y ventas que impulsará <br class="desktopTabletElement">
                                                el crecimiento de tu negocio
                                            @endif

                                        </h2>
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

                                                <img src="{!! App::setFilePath('/assets/images/illustrations/team/escala-acelera-ventas-ahora.png') !!}">

                                            @endif

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


<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary"
    data-bs-toggle="modal" href="#{{ $popup_call_class }}" role="button">
</a>

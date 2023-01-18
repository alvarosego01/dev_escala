@php

// popup_call_class
// popup_imageTitle
// popup_image
// popup_principalTitle
// popup_subTitle
// popup_thirdTitle
// enable_custom_background
// custom_background_type
// popup_background_color
// popup_background_gradient
// popup_background_image
// form_title
// form_shortcode
// form_redirect

@endphp

<div class= "customPopUp  general_2022 modal fade {{ $popup_call_class }}" id="{{ $popup_call_class }}"
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
                                            <h2 style="color: #36768A" class="primaryTitle">
                                                ¡Bienvenido a bordo!
                                            </h2>
                                        @endif

                                        @if (isset($popup_subTitle) && $popup_subTitle != null )
                                            @if ( $popup_subTitle != '-' )
                                                <h3 class="secondaryTitle">
                                                    {!! $popup_subTitle !!}
                                                </h3>
                                            @endif
                                        @else
                                            <h3 style="color: #706B6D" class="secondaryTitle">
                                                Crea una <strong>cuenta gratuita</strong>
                                            </h3>
                                        @endif

                                        @if (isset($popup_thirdTitle) && $popup_thirdTitle != null )
                                            @if ( $popup_thirdTitle != '-' )
                                                <h3 class="thirdTitle">
                                                    {!! $popup_thirdTitle !!}
                                                </h3>
                                            @endif
                                        @else
                                            <h3 style="color: #36768A" class="thirdTitle">
                                                Registra tus datos y obtén 10 días <br class="desktopTabletElement">
                                                de nuestra plataforma sin costo alguno
                                            </h3>
                                        @endif

                                    </div>

                                    <div class="sect2">

                                        <div class="formatForm redirectWeb"   redirectWeb="true">

                                            <h5 class="titleFormat blackcolor">
                                                @if (isset($form_title) && $form_title != null)
                                                    {!! $form_title !!}
                                                @else
                                                    Recibe un tour guiado <br class="space"> de Escala
                                                @endif
                                            </h5>

                                            {{-- {!! do_shortcode('[contact-form-7 id="5844" title="Profile demo - Prueba Escala Ahora"]') !!} --}}

                                            @if (isset($form_shortcode) && $form_shortcode != null)
                                                {!! do_shortcode($form_shortcode) !!}
                                            @else
                                                {!! do_shortcode('[contact-form-7 id="5844" title="Profile demo - Prueba Escala Ahora"]') !!}
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

                                            <img src="{!! App::setFilePath('/assets/images/logos/logoEscalaWhite.svg') !!}" alt="Logo" class="logo-img">

                                        </div>

                                        @if (isset($popup_imageTitle) && $popup_imageTitle != null )
                                            @if ( $popup_imageTitle != '-' )
                                                <h3 class="thirdTitle">
                                                    {!! $popup_imageTitle !!}
                                                </h3>
                                            @endif
                                        @else
                                            <h3 style="color: white" class="thirdTitle">
                                                La plataforma todo en uno de marketing <br class="desktopTabletElement">
                                                digital y ventas que impulsará <br class="desktopTabletElement">
                                                el crecimiento de tu negocio
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

                                                <img src="{!! App::setFilePath('/assets/images/person/prueba-escala-popup-cta.png') !!}" alt="Ilustración de un hombre con un computador en sus manos y gráficos de crecimiento a su alrededor en referencia a Escala como la plataforma de marketing y ventas ideal para el crecimiento de negocios en línea">

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

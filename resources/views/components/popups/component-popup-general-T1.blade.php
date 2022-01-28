
@php

    // popup_call_class
    // popup_image
    // popup_title_text
    // popup_background_color
    // form_title
    // form_shortcode
    // form_redirect
    // bootstrap_popup_template

@endphp

<div class="customPopUp modal fade {{ $popup_call_class }}" id="{{ $popup_call_class }}" aria-hidden="true"
    aria-labelledby="{{ $popup_call_class }}" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div
        style="background-color: {{ $popup_background_color }}"
        class="modal-content">

            <div class="modal-body">

                <section class="innerSectionElement sct1">

                    <div class="groupElements">

                        <button type="button" class="closePopUp" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>

                        <div class="row">

                            <div class="col-md-12 col-lg-6 image col1">

                                <div class="containerImage logo">

                                    <img src="{!! App::setFilePath('/assets/images/logos/escala_logo.svg') !!}" alt="Logo" class="logo-img">

                                </div>

                                <h2 class="primaryTitle">

                                    @if (isset($popup_title_text) && $popup_title_text != null)
                                        {!! $popup_title_text !!}
                                    @else

                                    ¡Comienza a <br class="space"> <span class="orangeColor">impulsar tus
                                        <br class="space"> ventas</span> ahora!

                                        @endif

                                </h2>

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
                            <div class="col-md-12 col-lg-6 form col2">

                                <div class="containElements">


                                    <div class="formatForm" redirectWeb="true">

                                        <h5 class="titleFormat blackcolor">
                                            @if (isset($form_title) && $form_title != null)
                                                {!! $form_title !!}
                                            @else
                                                Solicita una prueba
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


                    </div>


                </section>

            </div>

        </div>
    </div>
</div>


<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary" data-bs-toggle="modal"
    href="#{{ $popup_call_class }}" role="button">
</a>

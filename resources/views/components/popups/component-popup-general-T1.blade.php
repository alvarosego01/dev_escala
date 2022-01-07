<div class="customPopUp modal fade popup-bootstrap-general-t1" id="popup-bootstrap-general-t1" aria-hidden="true"
    aria-labelledby="popup-bootstrap-general-t1" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

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

                                    ¡Comienza a <br class="space"> <span class="orangeColor">impulsar tus
                                        <br class="space"> ventas</span> ahora!


                                </h2>

                                <div class="containerImage imageHero">

                                    <img src="{!! App::setFilePath('/assets/images/illustrations/team/escala-acelera-ventas-ahora.png') !!}">

                                </div>

                            </div>
                            <div class="col-md-12 col-lg-6 form col2">

                                <div class="containElements">


                                    <div class="formatForm" redirectWeb="true">

                                        <h5 class="titleFormat blackcolor">
                                            Solicita una prueba
                                        </h5>

                                        {{-- {!! do_shortcode('[contact-form-7 id="73" title="Contacto Paso 1"]') !!} --}}

                                        @php
                                            $f = ACF_CUSTOM::_getField('form7');
                                        @endphp
                                        @if (isset($f) && $f != null)
                                            {!! do_shortcode($f) !!}
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


<a style="display: none" popup="popup-bootstrap-general-t1" indexpopupbutton class="btn btn-primary" data-bs-toggle="modal"
    href="#popup-bootstrap-general-t1" role="button">
</a>

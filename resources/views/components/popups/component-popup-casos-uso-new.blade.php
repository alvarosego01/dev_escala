<div class="customPopUp  popup_casos_uso_new modal fade popup-casosUso_general_new left_side " id="popup-casosUso_general_new"
    aria-hidden="true" aria-labelledby="popup-casosUso_general_new" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered type2022">

        <div class="modal-content">

            <div class="modal-body">

                <section class="innerSectionElement">

                    <div class="groupElements">

                        <button type="button" class="closePopUp" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>

                        <div class="row">

                            <div class="info">
                                <div class="containElements">

                                    <div class="sect1">
                                        <h2 class="primaryTitle">
                                            Elige el caso de éxito que deseas conocer
                                        </h2>
                                        <hr>
                                    </div>
                                    <style>
                                        #popup-casosUso_general_new .cards {
                                            display: none;
                                        }

                                        #popup-casosUso_general_new .cards.active {
                                            display: block;
                                        }
                                    </style>
                                    <div class="sect2">
                                        <div class="cards saludBienestar">
                                            <div class="cardInterna">
                                                <div class="card">
                                                    <a href="/escala/casos-de-exito-poctlab/">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_poctlab_popup.png') !!}" loading="lazy">
                                                    </a>
                                                    <span>Laboratorio Clínico</span>
                                                </div>
                                                <div class="card">
                                                    <a href="https://escala.com/caso-de-uso-salud-y-fitness/">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/life_nutrition_popup.png') !!}" loading="lazy">
                                                    </a>
                                                    <span>Nutrición</span>
                                                </div>
                                                <div class="card">
                                                    <a href="https://escala.com/caso-de-uso-bienestar-y-salud/">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/bienestar_popup.png') !!}" loading="lazy">
                                                    </a>
                                                    <span>Bienestar</span>
                                                </div>
                                            </div>

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

    <script>
        jQuery(document).ready(function() {
            jQuery('.openPopUpButton2').click(function(e) {
                e.preventDefault();
                jQuery('#popup-casosUso_general_new').modal('show');

                const targetClass = jQuery(this).attr('class').split(' ').find(c =>
                    c !== 'openPopUpButton2' && c !== 'popup-casosUso_general_new'
                );
                jQuery('#popup-casosUso_general_new .cards').removeClass('active');

                if (targetClass) {
                    jQuery(`#popup-casosUso_general_new .cards.${targetClass}`).addClass('active');
                }
            });
            jQuery(document).click(function(e) {
                if (!jQuery(e.target).closest('#popup-casosUso_general_new').length &&
                    !jQuery(e.target).is('.openPopUpButton2')) {
                    jQuery('#popup-casosUso_general_new').modal('hide');
                }
            });

            jQuery('.modal').on('click', function(e) {
                if (jQuery(e.target).hasClass('modal')) {
                    jQuery(this).modal('hide');
                }
            });
        });
    </script>


</div>

<a style="display: none" popup="popup-casosUso_general_new" indexpopupbutton class="btn btn-primary" data-bs-toggle="modal"
    href="#popup-casosUso_general_new" role="button">
</a>
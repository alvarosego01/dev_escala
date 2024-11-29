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

                                    <div class="sect2">
                                        <div class="card">

                                            <a href=""><img src="{!! App::setFilePath('/assets/images/illustrations/others/logo_poctlab_popup.png') !!}" loading="lazy"></a>
                                        </div>
                                        <div class="card">
                                            <a href=""> <img src="{!! App::setFilePath('/assets/images/illustrations/others/life_nutrition_popup.png') !!}" loading="lazy"></a>
                                        </div>
                                        <div class="card">
                                            <a href=""> <img src="{!! App::setFilePath('/assets/images/illustrations/others/bienestar_popup.png') !!}" loading="lazy"></a>
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
        jQuery('.openPopUpButton').click(function(e) {
            e.preventDefault();
            jQuery('#popup-casosUso_general_new').modal('show');
        });


        // Cierra el popup cuando se haga clic fuera de él o en un botón de cierre
        jQuery(document).click(function(e) {
            if (!jQuery(e.target).closest('.popup-casosUso_general_new.popup_casos_uso_new').length &&
                !jQuery(e.target).is('.openPopUpButton')) {
                jQuery('.popup-casosUso_general_new.popup_casos_uso_new').fadeOut(); // O usa hide()
            }
        });
        // Opcional: para cerrar el popup desde el overlay
        jQuery('.modal').on('click', function(e) {
            if (jQuery(e.target).hasClass('modal')) {
                jQuery(this).modal('hide');
            }
        });
    </script>



</div>

<a style="display: none" popup="popup-casosUso_general_new" indexpopupbutton class="btn btn-primary" data-bs-toggle="modal"
    href="#popup-casosUso_general_new" role="button">
</a>
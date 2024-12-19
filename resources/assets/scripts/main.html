
jQuery(document).ready(function($) {
    $(".containElements").each(function() {
        var $currentContainer = $(this);

        // Variables para almacenar los datos del primer formulario
        var firstName = "",
            lastName = "",
            email = "";

        // Capturar datos del primer formulario antes del envío
        $currentContainer.find(".form-1").on('submit', function() {
            firstName = $(this).find('input[name="your-firstname"]').val();
            lastName = $(this).find('input[name="your-lastname"]').val();
            email = $(this).find('input[name="your-email"]').val();
        });

        // Listener para el envío exitoso del formulario vía CF7
        $(document).on('wpcf7mailsent', function(event) {
            // Comprobar si el formulario enviado es el del contenedor actual
            var $form = $(event.target);
            var $formContainer = $form.closest('.containElements');

            // Verifica si es el mismo contenedor
            if ($formContainer.is($currentContainer)) {
                // Ocultar el primer formulario y mostrar el segundo
                $formContainer.find(".form-1").hide();
                $formContainer.find(".form-2").show();

                // Asignar valores capturados a los campos ocultos del segundo formulario
                $formContainer.find('#hidden-name-field').val(firstName);
                $formContainer.find('#hidden-lastname-field').val(lastName);
                $formContainer.find('#hidden-email-field').val(email);
            }
        });

        // Cambiar colores de los selects solo dentro del contenedor actual
        $currentContainer
            .find('select[name="vendedores"], select[name="negocio-etapa"], select[name="factura-anual"], select[name="your-employees"], select[name="your-country"], select[name="industria"], select[name="rol-empresa"]')
            .change(function() {
                var selectedValue = $(this).val();
                var excludeOptions = [
                    "Selecciona el país",
                    "Cantidad de empleados",
                    "Cantidad de vendedores",
                    "Etapa del negocio",
                    "Facturación anual (en USD)",
                    "Industria de tu negocio",
                    "¿Cuál describe mejor tu rol?"
                ];
                if (excludeOptions.indexOf(selectedValue) === -1) {
                    $(this).addClass("custom-select-color");
                } else {
                    $(this).removeClass("custom-select-color");
                }
            });

        // Gestionar campos de input solo dentro del contenedor actual
        $currentContainer.find('input[name="no-web[]"]').on("change", function() {
            if ($(this).is(":checked")) {
                $currentContainer
                    .find('input[name="web-page"]')
                    .val("") // Eliminar el valor solo del campo dentro del contenedor actual
                    .prop("disabled", true);
            } else {
                $currentContainer
                    .find('input[name="web-page"]')
                    .prop("disabled", false);
            }
        });
    });
});
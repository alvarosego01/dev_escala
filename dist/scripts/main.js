jQuery(document).ready(function ($) {
  // Selecciona solo los elementos dentro de cada contenedor `.containElements`
  $(".containElements").each(function () {
    var $currentContainer = $(this);

    // Cambiar colores de los selects solo dentro del contenedor actual
    $currentContainer
      .find(
        'select[name="cant-vendedores"], select[name="negocio-etapa"], select[name="factura-anual"], select[name="your-employees"], select[name="your-country"], select[name="industria"], select[name="rol-empresa"]'
      )
      .change(function () {
        var selectedValue = $(this).val();
        var excludeOptions = [
          "Selecciona el país",
          "Cantidad de empleados",
          "Cantidad de vendedores",
          "Etapa del negocio",
          "Facturación anual (en USD)",
          "Industria de tu negocio",
          "¿Cuál describe mejor tu rol?",
        ];
        if (excludeOptions.indexOf(selectedValue) === -1) {
          $(this).addClass("custom-select-color");
        } else {
          $(this).removeClass("custom-select-color");
        }
      });

    // Gestionar campos de input solo dentro del contenedor actual
    $currentContainer.find('input[name="no-web[]"]').on("change", function () {
      if ($(this).is(":checked")) {
        $currentContainer
          .find('input[name="web-page"]')
          .val("")
          .prop("disabled", true);
      } else {
        $currentContainer
          .find('input[name="web-page"]')
          .prop("disabled", false);
      }
    });

    // Proceso de envío de formulario con AJAX solo dentro del contenedor actual
    $currentContainer.find(".form-1 form").on("submit", function (e) {
      e.preventDefault();
      var $form = $(this);
      var formData = $form.serialize();

      // Captura el valor del campo de email usando el atributo `name` de Contact Form 7
      var email = $form.find('input[name="your-email"]').val();
      // Captura el valor del  Last Name usando el atributo `name` de Contact Form 7
      var lastname = $form.find('input[name="your-lastname"]').val();
      // Captura el valor del  Name usando el atributo `name` de Contact Form 7
      var name = $form.find('input[name="your-firstname"]').val();
      // Captura el valor del  Phone usando el atributo `name` de Contact Form 7
      var phone = $form.find('input[name="your-phone"]').val();

      $.ajax({
        type: "POST",
        url: $form.attr("action"),
        data: formData,
        success: function (response) {
          // Oculta solo el primer formulario del contenedor actual
          $currentContainer.find(".form-1").hide();
          // Muestra solo el segundo formulario del contenedor actual
          $currentContainer.find(".form-2").show();
          // Rellena el campo oculto del segundo formulario con el email y last name
          $("#hidden-email-field").val(email);
          $("#hidden-lastname-field").val(lastname);
          $("#hidden-name-field").val(name);
          $("#hidden-phone-field").val(phone);
        },
        error: function (xhr, status, error) {
          console.error("Error al enviar el formulario:", error);
        },
      });
    });
  });
});

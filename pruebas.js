jQuery(document).ready(function() {
    function e(i) {
        var e = window.location.href;
        "encuentro" == i && 1 == e.includes("/#EncuentroInternacionalZarzuela") && (jQuery(".opcionesActividades a").removeClass("activo"), jQuery(".opcionesActividades a.opcionEncuentro").addClass("activo")), "temporada" == i && 1 == e.includes("/#TemporadaInternacionalZarzuela") && (jQuery(".opcionesActividades a").removeClass("activo"), jQuery(".opcionesActividades a.opcionTemporada").addClass("activo")), "premioIncentivo" == i && 1 == e.includes("/#premioIncentivo") && (jQuery(".opcionesActividades a").removeClass("activo"), jQuery(".opcionesActividades a.opcionIncentivo").addClass("activo")), "seminarioXXI" == i && 1 == e.includes("/#seminarioXXI") && (jQuery(".opcionesActividades a").removeClass("activo"), jQuery(".opcionesActividades a.opcionSeminario").addClass("activo"))
    }
    jQuery(document).ready(function() {
        var i = window.location.href;
        1 == i.includes("/actividades/") && (1 == i.includes("/#EncuentroInternacionalZarzuela") && (jQuery(".opcionesActividades a").removeClass("activo"), jQuery(".opcionesActividades a.opcionEncuentro").addClass("activo")), 1 == i.includes("/#TemporadaInternacionalZarzuela") && (jQuery(".opcionesActividades a").removeClass("activo"), jQuery(".opcionesActividades a.opcionTemporada").addClass("activo")), 1 == i.includes("/#premioIncentivo") && (jQuery(".opcionesActividades a").removeClass("activo"), jQuery(".opcionesActividades a.opcionIncentivo").addClass("activo")), 1 == i.includes("/#seminarioXXI") && (jQuery(".opcionesActividades a").removeClass("activo"), jQuery(".opcionesActividades a.opcionSeminario").addClass("activo")), jQuery(".opcionesActividades a.opcionEncuentro").click(function(i) {
            i.preventDefault(), jQuery("ul.vc_tta-tabs-list li:nth-child(2) a").click(), e("encuentro")
        }), jQuery(".opcionesActividades a.opcionTemporada").click(function(i) {
            i.preventDefault(), jQuery("ul.vc_tta-tabs-list li:nth-child(3) a").click(), e("temporada")
        }), jQuery(".opcionesActividades a.opcionIncentivo").click(function(i) {
            i.preventDefault(), jQuery("ul.vc_tta-tabs-list li:nth-child(4) a").click(), e("premioIncentivo")
        }), jQuery(".opcionesActividades a.opcionSeminario").click(function(i) {
            i.preventDefault(), jQuery("ul.vc_tta-tabs-list li:nth-child(5) a").click(), e("seminarioXXI")
        }))
    })
});
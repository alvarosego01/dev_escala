var mobile=!1;function initMode(){var e=jQuery(document).width();e<=991&&(mobile=!0),991<e&&(mobile=!1)}function showTestimonials(e){var o=jQuery(".homeSection6 .testimonial");console.log("cño de la madre",o),0<o.length&&("show"==e&&(o.each((e,o)=>{jQuery(o).css({display:"block"})}),jQuery(".showMore").remove()),"hide"==e&&o.each((e,o)=>{console.log("el elemento",e),2<e&&jQuery(o).css({display:"none"})}))}jQuery(document).ready(function(){initMode(),jQuery("div#accordionPanelsFAQ").on("click change",function(e){1200<jQuery("div#accordionPanelsFAQ").height()?(console.log("es superior"),jQuery("img.overlay3").css({display:"block"})):(console.log("es inferior"),jQuery("img.overlay3").css({display:"none"}))}),1==mobile&&(console.log("coño de la madre"),showTestimonials("hide"))});
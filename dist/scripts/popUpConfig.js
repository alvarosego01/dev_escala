function modalScrollTop(){jQuery("html, body").animate({scrollTop:0},"slow"),console.log("scroll top")}console.log("popup.js"),jQuery(document).ready(function(){"undefined"!=typeof popup_config&&(console.log("popup_config",popup_config),popup_config.type&&"onload_webpage"==popup_config.type&&(console.log("abre al cargar"),jQuery("[indexpopupbutton]")[0].click()),popup_config.type&&"on_seconds"==popup_config.type&&popup_config.seconds&&setTimeout(()=>{console.log("abre a los segundos ",1e3*popup_config.seconds),jQuery("[indexpopupbutton]")[0].click()},1e3*popup_config.seconds)),jQuery(document).on("hide.bs.modal",function(){modalScrollTop()}),jQuery(".openPopUpButton").click(function(o){o.preventDefault();var p=[];o.currentTarget.classList.forEach(o=>{p.push(o)}),console.log("e",p);var n;p&&0<p.length&&(o=p.findIndex(o=>{if(o.startsWith("popup-"))return o}),console.log("i",o),o&&null!=(n=p[o])&&(console.log("popupid",n),jQuery('[indexpopupbutton][popup="'+n+'"]')[0].click()))})});
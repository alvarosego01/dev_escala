jQuery(document).ready(function(){var t;"undefined"!=typeof dataPHP&&dataPHP.redirect&&(t=dataPHP.redirect,console.log("have redirect",t),document.addEventListener("wpcf7mailsent",function(e){e=e.path;window.dataLayer.push({event:"cf7submission",formId:event.detail.contactFormId,response:event.detail.inputs}),!jQuery(e[1]).attr("redirectWeb")||"true"==(e=jQuery(e[1]).attr("redirectWeb"))&&(console.log("redirect",e),t&&null!=t&&""!=t&&window.location.replace(t))},!1))});
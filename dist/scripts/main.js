function parametersToRedirect(l,n){return new Promise((e,r)=>{let a=l;var t;l.includes("{{-- special --}}")&&(a=a.replace("{{-- special --}}",""),null!=(t=n.filter(e=>{if("your-email"==e.name)return e.value}))&&null!=t[0]&&0!=t[0].value&&(t=t[0].value,t=Base64.encode(t),a=a.replace("{{-- email64 --}}",t)),a=a.replace("{{-- leadSignUp --}}","trial"),a=a.replace(/\s+/g,"")),e(a)})}jQuery(document).ready(function(){null!=jQuery("#redirectParam").val()&&console.log("redirect on tag",jQuery("#redirectParam").val()),document.addEventListener("wpcf7mailsent",async function(e){var r=e.detail.inputs;let a=e.path,t=null;console.log("que es l",a),window.dataLayer.push({event:"cf7submission",formId:event.detail.contactFormId,response:event.detail.inputs});e=a.filter(e=>{if("special-redirect"==e.name)return e.value});null!=e&&null!=e[0]&&0!=e[0].value&&(t=e[0].value),"undefined"!=typeof dataPHP&&dataPHP.redirect&&(t=dataPHP.redirect),null!=jQuery("#redirectParam").val()&&(t=jQuery("#redirectParam").val());e=jQuery(a[0]).parents("#redirectWeb");console.log("x",e),jQuery(a[0]).parents("#redirectWeb")&&(console.log("redirect true"),t&&null!=t&&""!=t&&(t=await parametersToRedirect(t,r).then(e=>e),console.log("redirect form sent",t),window.location.href=t))},!1),document.addEventListener("wpcf7mailfailed",async function(e){var r=e.detail.inputs;let a=e.path,t=null;console.log("que es l",a),window.dataLayer.push({event:"cf7submission",formId:event.detail.contactFormId,response:event.detail.inputs});e=a.filter(e=>{if("special-redirect"==e.name)return e.value});null!=e&&null!=e[0]&&0!=e[0].value&&(t=e[0].value),"undefined"!=typeof dataPHP&&dataPHP.redirect&&(t=dataPHP.redirect),null!=jQuery("#redirectParam").val()&&(t=jQuery("#redirectParam").val());e=jQuery(a[0]).parents("#redirectWeb");console.log("x",e),jQuery(a[0]).parents("#redirectWeb")&&(console.log("redirect true"),t&&null!=t&&""!=t&&(t=await parametersToRedirect(t,r).then(e=>e),console.log("redirect form failed",t)))},!1)});

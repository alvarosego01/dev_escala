function parametersToRedirect(n,a){return new Promise((resolve,reject),function(){let e=n;var t;n.includes("{{-- special --}}")&&(e=e.replace("{{-- special --}}",""),null!=(t=a.filter(function(e){if("your-email"==e.name)return e.value}))&&null!=t[0]&&0!=t[0].value&&(t=t[0].value,t=Base64.encode(t),e=e.replace("{{-- email64 --}}",t)),e=e.replace("{{-- leadSignUp --}}","trial"),e=e.replace(/\s+/g,"")),resolve(e)})}function ready(e){"loading"!=document.readyState?e():document.addEventListener("DOMContentLoaded",e)}ready(function(e){document.addEventListener("wpcf7mailsent",async function(e){let t=e.detail.inputs;e=e.path;let n=null;console.log("que es l",e),window.dataLayer.push({event:"cf7submission",formId:event.detail.contactFormId,response:event.detail.inputs});e=t.filter(function(e){if("special-redirect"==e.name)return e.value});null!=e&&null!=e[0]&&0!=e[0].value&&(n=e[0].value),"undefined"!=typeof dataPHP&&dataPHP.redirect&&(n=dataPHP.redirect),null!=document.querySelector("#redirectParam")&&(e=document.querySelector("#redirectParam"),n=e.value),alert("variables"+n),n&&null!=n&&""!=n&&(n=await parametersToRedirect(n,t).then(function(e){return e}),console.log("redirect form sent",n),window.location.href=n)},!1),document.addEventListener("wpcf7mailfailed",async function(e){let t=e.detail.inputs;e.path;let n=null;console.log("que es l",t),window.dataLayer.push({event:"cf7submission",formId:event.detail.contactFormId,response:event.detail.inputs});e=t.filter(function(e){if("special-redirect"==e.name)return e.value});null!=e&&null!=e[0]&&0!=e[0].value&&(n=e[0].value),"undefined"!=typeof dataPHP&&dataPHP.redirect&&(n=dataPHP.redirect),null!=document.querySelector("#redirectParam")&&(e=document.querySelector("#redirectParam"),n=e.value),n&&null!=n&&""!=n&&(n=await parametersToRedirect(n,t).then(function(e){return e}),console.log("redirect form failed",n))},!1)});
var navBarHeight=null,navbar=null,inner=null,sideNavBar=jQuery("#sideNavBar"),sidebarStatus=!1;function navScrollFixed(){null!=navbar&&null!=inner&&(0<window.pageYOffset?(inner[0].classList.add("fixedNav"),navbar.css({height:navBarHeight+"px"}),jQuery(".jet-popup.jet-popup--front-mode").css({top:navBarHeight-5+"px"})):inner[0].classList.remove("fixedNav"))}function setResize(){navBarHeight=inner.height(),window.addEventListener("resize",function(e){navBarHeight=inner.height(),navScrollFixed()},!0)}function _serializeFormToObject(e){var t={};return jQuery.each(jQuery(e).serializeArray(),function(e,n){t.hasOwnProperty(n.name)?(t[n.name]=jQuery.makeArray(t[n.name]),t[n.name].push(n.value)):t[n.name]=n.value}),t}function _openSideNav(e){"close"==e&&(console.log("close sidenav"),jQuery("nav",sideNavBar)[0].classList.add("animate__slideOutRight"),jQuery("nav",sideNavBar)[0].addEventListener("animationend",function(e){"slideOutRight"==e.animationName&&(console.log("abre"),sideNavBar.css({display:"none"}),jQuery("nav",sideNavBar)[0].classList.add("animate__slideInRight"),jQuery("nav",sideNavBar)[0].classList.remove("animate__slideOutRight"),e.target.removeEventListener("animationend",function(){}))}),sidebarStatus=!1),"open"==e&&(console.log("open sidenav"),window.innerWidth<=991&&(sideNavBar.css({display:"block"}),jQuery("nav",sideNavBar)[0].classList.add("animate__slideInRight")),sidebarStatus=!0)}function setInnerElement(){0<jQuery("header").length&&(navbar=jQuery("header"),0<jQuery(".elementor-inner",navbar).length?inner=jQuery(".elementor-inner",navbar):0<jQuery("nav.principal.navbar",navbar).length&&(inner=jQuery("nav.principal.navbar",navbar)))}function deviceType(){var e=window.innerWidth;return e<=991?"mobile":992<=e?"desktop":void 0}function closingSidebarClick(){jQuery("#sideNavBar").on("click",function(e){e.target===this&&1==sidebarStatus&&_openSideNav("close")})}function scrollToHash(){jQuery(".goToHash").click(function(e){e.preventDefault(),console.log("scroll to hash",e);var n,e=jQuery("#lead-form .formatForm")[0];e&&(window.innerWidth<=999&&(n=e.getBoundingClientRect().top+window.pageYOffset+-10-100,window.scrollTo({top:n,behavior:"smooth"})),1e3<=window.innerWidth&&(n=e.getBoundingClientRect().top+window.pageYOffset+-10-150,window.scrollTo({top:n,behavior:"smooth"})))})}function showTestimonials(e){var n=jQuery("#landing-AllInOne-bootstrap .testimonial");0<n.length&&("show"==e&&(n.each((e,n)=>{jQuery(n).css({display:"block"})}),jQuery(".showMore").remove()),"hide"==e&&n.each((e,n)=>{2<e&&jQuery(n).css({display:"none"})}))}function removeYoutubeElements(n){var e=jQuery(n)||null;if(null!=e&&null!=e)try{jQuery(n).remove()}catch(e){console.error("no se pudo retirar ",n)}}function instanceYoutube(){var e=document.querySelectorAll(".youtube");if(0<e.length)for(var n=0;n<e.length;n++){var t=jQuery(e[n]).attr("videoCover"),i="",i=null!=t&&null!=t?t:"https://img.youtube.com/vi/"+e[n].dataset.embed+"/maxresdefault.jpg",t=new Image;t.src=i,t.addEventListener("load",void e[n].appendChild(t)),e[n].addEventListener("click",function(){var e=document.createElement("iframe");e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen",""),e.setAttribute("allow","autoplay"),e.setAttribute("src","https://www.youtube.com/embed/"+this.dataset.embed+"?showinfo=0&amp;rel=0&amp;enablejsapi=1&autoplay=1"),this.innerHTML="",this.appendChild(e)})}if(0<jQuery(".video-js").length)for(var o=jQuery(".video-js"),n=0;n<o.length;n++)videojs(jQuery(o[n])[0],{techOrder:["html5","flash"],controls:!1,autoplay:!0,preload:"false"},function(){this.on("pause",function(){console.log("ended"),console.log("ended",this)}),this.on("ended",function(){console.log("ended"),console.log("ended",this),this.posterImage.show(),this.currentTime(0),this.controlBar.hide(),this.bigPlayButton.show()}),this.on("play",function(){console.log("play",this),this.posterImage.hide(),this.controlBar.show(),this.bigPlayButton.hide()})})}function setInitSlizeButton(){if(!(0<!jQuery("[slizeRadioButton]").length)){console.log("seteado el slize button");let e=jQuery(".pill-button-selection_on"),n=jQuery(".pill-button-selection_off"),t=jQuery(".pill-button-highlight"),i=e.outerWidth(),o=n.outerWidth(),r=(e.position(),n.position(),jQuery(".pill-button-input"));jQuery(".pillButtonHighlight").css("width",i),jQuery(".pill-button-selection").on("click",function(){jQuery(this).hasClass("pill-button-selection_active")||(jQuery(".pill-button-selection").removeClass("pill-button-selection_active"),jQuery(this).addClass("pill-button-selection_active"),jQuery("input.pill-button-input")[0].click(),jQuery(this).hasClass("pill-button-selection_off")&&r.prop("checked",!0)?(t.css({width:o,left:"unset",right:0}),console.log("Is Checked - OFF")):(t.css({width:i,left:0,right:"unset"}),console.log("Is Checked - ON")))})}}function preventResetForms(){jQuery(document).on("reset","form.wpcf7-form",function(e){e.preventDefault(),jQuery(".ewp-phone-text").val("")}),jQuery(".ewp-phone-text").on("focus click keypress",function(){"   -   -    "==this.value&&(this.value="")})}preventResetForms(),jQuery(document).ready(function(){setInnerElement(),scrollToHash(),window.onload=function(){setResize()},window.onscroll=function(){navScrollFixed()},closingSidebarClick(),instanceYoutube(),jQuery(".customHeader .dropdown").hover(function(){jQuery(this).find(".dropdown-menu").first().stop(!0,!0).delay(100).fadeIn(100)},function(){jQuery(this).find(".dropdown-menu").first().stop(!0,!0).delay(200).fadeOut(200)}),setInitSlizeButton(),jQuery(".hoverClick").hover(function(){jQuery(this).click()},function(){})});
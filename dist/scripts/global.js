var navBarHeight=null,navbar=null,inner=null,sideNavBar=jQuery("#sideNavBar");function navScrollFixed(){null!=navbar&&null!=inner&&(0<window.pageYOffset?(inner[0].classList.add("fixedNav"),navbar.css({height:navBarHeight+"px"}),jQuery(".jet-popup.jet-popup--front-mode").css({top:navBarHeight-5+"px"})):inner[0].classList.remove("fixedNav"))}function setResize(){navBarHeight=inner.height(),window.addEventListener("resize",function(e){navBarHeight=inner.height(),navScrollFixed()},!0)}function _serializeFormToObject(e){var a={};return jQuery.each(jQuery(e).serializeArray(),function(e,n){a.hasOwnProperty(n.name)?(a[n.name]=jQuery.makeArray(a[n.name]),a[n.name].push(n.value)):a[n.name]=n.value}),a}function _openSideNav(e){"close"==e&&(jQuery("nav",sideNavBar)[0].classList.add("animate__slideOutRight"),jQuery("nav",sideNavBar)[0].addEventListener("animationend",e=>{"slideOutRight"==e.animationName&&(sideNavBar.css({display:"none"}),jQuery("nav",sideNavBar)[0].classList.add("animate__slideInRight"),jQuery("nav",sideNavBar)[0].classList.remove("animate__slideOutRight"),e.target.removeEventListener("animationend",()=>{}))})),"open"==e&&window.innerWidth<=991&&(sideNavBar.css({display:"block"}),jQuery("nav",sideNavBar)[0].classList.add("animate__slideInRight"))}function setInnerElement(){0<jQuery("header").length&&(navbar=jQuery("header"),0<jQuery(".elementor-inner",navbar).length?inner=jQuery(".elementor-inner",navbar):0<jQuery("nav.principal.navbar",navbar).length&&(inner=jQuery("nav.principal.navbar",navbar)))}function deviceType(){var e=window.innerWidth;return e<=991?"mobile":992<=e?"desktop":void 0}jQuery(document).ready(function(){setInnerElement(),window.onload=function(){setResize()},window.onscroll=function(){navScrollFixed()}});







jQuery( document ).ready(function() {
    console.log( "ready!" );
jQuery( ".blackfriday-btn.elementor-widget-button a" ).click(function() {
  console.log('c bf');

jQuery('.jet-popup__close-button').click();
});
});
var navBarHeight=null,navbar=null,inner=null,sideNavBar=jQuery("#sideNavBar"),sidebarStatus=!1;function navScrollFixed(){null!=navbar&&null!=inner&&(0<window.pageYOffset?(inner[0].classList.add("fixedNav"),navbar.css({height:navBarHeight+"px"}),jQuery(".jet-popup.jet-popup--front-mode").css({top:navBarHeight-5+"px"})):inner[0].classList.remove("fixedNav"))}function setResize(){navBarHeight=inner.height(),window.addEventListener("resize",function(e){navBarHeight=inner.height(),navScrollFixed()},!0)}function _serializeFormToObject(e){var a={};return jQuery.each(jQuery(e).serializeArray(),function(e,n){a.hasOwnProperty(n.name)?(a[n.name]=jQuery.makeArray(a[n.name]),a[n.name].push(n.value)):a[n.name]=n.value}),a}function _openSideNav(e){"close"==e&&(console.log("close sidenav"),jQuery("nav",sideNavBar)[0].classList.add("animate__slideOutRight"),jQuery("nav",sideNavBar)[0].addEventListener("animationend",e=>{"slideOutRight"==e.animationName&&(console.log("abre"),sideNavBar.css({display:"none"}),jQuery("nav",sideNavBar)[0].classList.add("animate__slideInRight"),jQuery("nav",sideNavBar)[0].classList.remove("animate__slideOutRight"),e.target.removeEventListener("animationend",()=>{}))}),sidebarStatus=!1),"open"==e&&(console.log("open sidenav"),window.innerWidth<=991&&(sideNavBar.css({display:"block"}),jQuery("nav",sideNavBar)[0].classList.add("animate__slideInRight")),sidebarStatus=!0)}function setInnerElement(){0<jQuery("header").length&&(navbar=jQuery("header"),0<jQuery(".elementor-inner",navbar).length?inner=jQuery(".elementor-inner",navbar):0<jQuery("nav.principal.navbar",navbar).length&&(inner=jQuery("nav.principal.navbar",navbar)))}function deviceType(){var e=window.innerWidth;return e<=991?"mobile":992<=e?"desktop":void 0}function closingSidebarClick(){jQuery("#sideNavBar").on("click",function(e){e.target===this&&1==sidebarStatus&&_openSideNav("close")})}jQuery(document).ready(function(){setInnerElement(),window.onload=function(){setResize()},window.onscroll=function(){navScrollFixed()},closingSidebarClick()});
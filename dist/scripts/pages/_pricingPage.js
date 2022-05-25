var planSelect=null,calculate=null,device=null,typeProcess=0,_costStarter=30,_costPro=135,_contacts={},_users={},discount=0,costFinal=0,costNoDiscount=0,typeplan="yearly",escalaContactsStarter=[30,15,15,15,15,10,10,10,10,10,7,7,7,7,7,5,5,5,5,5,5,5,5,5,5],escalaContactsPro=[55,20,20,20,20,10,10,10,10,10,7,7,7,7,7,5,5,5,5,5,5,5,5,5,5];function getContactScale(t){var r={starter:0,pro:0};if(t<=25)for(let e=0;e<t;e++)r.starter=r.starter+escalaContactsStarter[e],r.pro=r.pro+escalaContactsPro[e];if(26<=t){for(let e=0;e<25;e++)r.starter=r.starter+escalaContactsStarter[e],r.pro=r.pro+escalaContactsPro[e];var e=t-25;r.starter=r.starter+4*e,r.pro=r.pro+4*e}return r}function converContacts(e){e/=1e3;return{starter:getContactScale(e=Math.trunc(e)).starter,pro:getContactScale(e).pro}}function convertUsers(e){return"starter"==e._typePlan||"pro"==e._typePlan?2<=e._userAccess[typeProcess]?{starter:15*(e._userAccess[typeProcess]-1),pro:15*(e._userAccess[typeProcess]-1)}:{starter:0,pro:0}:void 0}function typeCustomPay(e,t){jQuery(".selectorPricingButton").removeClass("active"),jQuery(t).addClass("active"),typeplan=e;e=jQuery("form#formCalcGeneral");calculateFinal(calculate=_serializeFormToObject(e))}function selectPlanMobile(e,t){jQuery(".buttonSelectPlan-Mobile").removeClass("active"),"starter"==t&&(jQuery("#checkStarter")[0].click(),jQuery(e).addClass("active")),"pro"==t&&(jQuery("#checkPro")[0].click(),jQuery(e).addClass("active"))}function redondeaAlAlza(e,t){return xx=Math.floor(e/t),xx!=e/t&&xx++,xx*t}function percentOfRange(e,t,r,s,c,a){if("rangeToNumber"==s){if(0==e)return jQuery(".contactsField").val(1e3),1e3;c=(e-t)/(r-t)*100/100*(a-c)+c;return c=redondeaAlAlza(c=Math.trunc(c),-1e3),jQuery(".contactsField").val(c),c}}function calculateRangeValue(e){var t=0;return 0<=(t=e._rangeContacts[typeProcess])&&t<=25?percentOfRange(t,0,25,"rangeToNumber",1e3,25e3):25<=t&&t<=50?percentOfRange(t,24,48,"rangeToNumber",25e3,5e4):50<=t&&t<=75?percentOfRange(t,48,73,"rangeToNumber",5e4,75e3):75<=t&&t<=100?percentOfRange(t,73,100,"rangeToNumber",75e3,1e5):void 0}function revealMobileView(e=null,t){null!=e&&(console.log("type",e),console.log("plan",t),"open"==e&&(jQuery("#"+t+" .versionMobile2022 .preView").hide(),jQuery("#"+t+" .versionMobile2022 .fullView").show()),"close"==e&&(jQuery("#"+t+" .versionMobile2022 .fullView").hide(),jQuery("#"+t+" .versionMobile2022 .preView").show(),0==jQuery(".modePlanSelect")[0].checked&&jQuery(".modePlanSelect")[0].click()))}function calculateFinal(e){_contacts=converContacts(e._contactsField[typeProcess]),_users=convertUsers(e),"monthly"==typeplan&&("starter"==e._typePlan&&(costFinal=_contacts.starter+_users.starter,discount=0),"pro"==e._typePlan&&(costFinal=_contacts.pro+_users.pro,discount=0),jQuery(".offert").css({visibility:"hidden"})),"yearly"==typeplan&&("starter"==e._typePlan&&(costFinal=_contacts.starter+_users.starter),"pro"==e._typePlan&&(costFinal=_contacts.pro+_users.pro),costFinal-=discount=.3*(costNoDiscount=costFinal),discount=discount.toFixed(2),costNoDiscount=costNoDiscount.toFixed(2),costFinal=costFinal.toFixed(2),costNoDiscount=trimDecimals(costNoDiscount),discount=trimDecimals(discount),jQuery(".offert").css({visibility:"visible"}),jQuery("#priceDotted").text("USD "+costNoDiscount+" /mes"),jQuery("#priceSaves").text("Ahorras USD "+discount)),costFinal=trimDecimals(costFinal),jQuery("#finalPriceCalc").text("USD "+costFinal+" /mes")}function trimDecimals(e){return Number(Number(e).toFixed())==+Number(e)?e=Number(Number(e).toFixed()):e}function actionInfoCards(e){"open"==e&&(jQuery(".extendButton").css({display:"none"}),jQuery(".hideButton").css({display:"block"}),jQuery(".featuresPrice").css({display:"none"}),jQuery(".featuresPrice.extendDetails").css({display:"block"})),"close"==e&&(jQuery(".hideButton").css({display:"none"}),jQuery(".extendButton").css({display:"block"}),jQuery(".featuresPrice").css({display:"block"}),jQuery(".featuresPrice.extendDetails").css({display:"none"}))}function discountByPlanCard(e,t){if(null!=e){if(1==t.checked&&0<jQuery("[typeplan="+e+"]").length)return jQuery(".modePlanSelect").prop("checked",!0),jQuery(".discountCost").css({display:"flex"}),jQuery(".numerCost").css({display:"none"}),jQuery('[typeplan*="plan"]').css({display:"block"}),jQuery(".ncost").css({display:"block"}),jQuery(".price").css({"margin-bottom":"90px"}),jQuery("#plan3.elementParent .middle .innerMiddle").removeClass("reduceDiv"),_costStarter=21,_costPro=95,jQuery("[calculator_price_starter]").text("USD "+_costStarter),void jQuery("[calculator_price_pro]").text("USD "+_costPro);0==t.checked&&0<jQuery("[typeplan="+e+"]").length&&(jQuery(".modePlanSelect").prop("checked",!1),jQuery(".discountCost").css({display:"none"}),jQuery(".numerCost").css({display:"block"}),jQuery('[typeplan*="plan"]').css({display:"none"}),jQuery(".ncost").css({display:"none"}),jQuery(".price").css({"margin-bottom":"60px"}),jQuery("#plan3.elementParent .middle .innerMiddle").addClass("reduceDiv"),_costStarter=30,_costPro=135,jQuery("[calculator_price_starter]").text("USD "+_costStarter),jQuery("[calculator_price_pro]").text("USD "+_costPro))}}function planSelectProcess(e){if("plan1"==e&&(jQuery("#checkStarter").click(),planSelect=e,jQuery("small[mobPlan]").text("Plan Starter"),jQuery("[alertPlanPro]").css({display:"block"}),setConfigModeSelect("starter")),"plan2"==e&&(jQuery("#checkPro").click(),planSelect=e,jQuery("small[mobPlan]").text("Plan Pro"),jQuery("[alertPlanPro]").css({display:"block"}),setConfigModeSelect("pro")),"plan3"==e)return planSelect=e,jQuery("[regularPlansCalc]").css({display:"none"}),void jQuery("[enterprisePlanCalc]").css({display:"block"});jQuery("[regularPlansCalc]").css({display:"block"}),jQuery("[enterprisePlanCalc]").css({display:"none"})}function setConfigModeSelect(e){e=jQuery(e).val();"starter"==e&&(jQuery('.rangeContacts[typeProcess="'+typeProcess+'"]').attr("min","0"),jQuery('.rangeContacts[typeProcess="'+typeProcess+'"]').val("0"),jQuery('.rangeContacts[typeProcess="'+typeProcess+'"]').css({"background-image":"none"}),jQuery("[scaleStarter]").css({display:"flex"}),jQuery("[scalePro]").css({display:"none"}),jQuery('.contactsField[typeProcess="'+typeProcess+'"]').attr("min","1000"),jQuery('.contactsField[typeProcess="'+typeProcess+'"]').val("1000")),"pro"==e&&(jQuery('.rangeContacts[typeProcess="'+typeProcess+'"]').attr("min","5"),jQuery('.rangeContacts[typeProcess="'+typeProcess+'"]').val("5"),jQuery('.rangeContacts[typeProcess="'+typeProcess+'"]').css({"background-image":"none"}),jQuery("[scaleStarter]").css({display:"none"}),jQuery("[scalePro]").css({display:"flex"}),jQuery('.contactsField[typeProcess="'+typeProcess+'"]').attr("min","5000"),jQuery('.contactsField[typeProcess="'+typeProcess+'"]').val("5000"))}planCheck=null,jQuery(document).ready(function(){jQuery("#checkPro").click(),device=deviceType(),jQuery(".modePlanSelect").click(),jQuery("input[type=range]").load(function(e){var t=100*((jQuery(this).val()-jQuery(this).attr("min"))/(jQuery(this).attr("max")-jQuery(this).attr("min")));jQuery(this).css("background-image","-webkit-gradient(linear, left top, right top, color-stop("+t+"%, #97C7D1), color-stop("+t+"%, #D9EEF9))"),jQuery(this).css("background-image","-moz-linear-gradient(left center, #97C7D1 0%, #97C7D1 "+t+"%, #D9EEF9 "+t+"%, #D9EEF9 100%)")}),jQuery("input[type=range]").on("input change",function(e){var t=100*((jQuery(this).val()-jQuery(this).attr("min"))/(jQuery(this).attr("max")-jQuery(this).attr("min")));jQuery(this).css("background-image","-webkit-gradient(linear, left top, right top, color-stop("+t+"%, #97C7D1), color-stop("+t+"%, #D9EEF9))"),jQuery(this).css("background-image","-moz-linear-gradient(left center, #97C7D1 0%, #97C7D1 "+t+"%, #D9EEF9 "+t+"%, #D9EEF9 100%)")}),jQuery("form#formCalcGeneral").change(async function(e){e.preventDefault(),jQuery(e.target).attr("typeProcess")&&(typeProcess=jQuery(e.target).attr("typeProcess")),calculate=_serializeFormToObject(e.currentTarget),jQuery(e.target).is(".rangeContacts")&&(calculate._contactsField[typeProcess]=calculateRangeValue(calculate)),calculateFinal(calculate)})});
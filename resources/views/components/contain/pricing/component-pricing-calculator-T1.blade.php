<section class="component-pricing-calculator-T1 customSection sectionParent fullWidth {{ $classSection }} ">

    <div class="section-row">

        <form regularPlansCalc onkeydown="if (event.keyCode == 13) { return false; }" action="" id="formCalcGeneral">

            <h2 class="primaryTitle">
                Calcula el precio de tu plan
            </h2>

            <div class="calcElements">

                <div class="controls ">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <div class="plansSection desktopElement">
                                <small class="miniTitle">

                                    Elige tu plan

                                </small>

                                <small class="miniText">
                                    Plan Pro: A partir de 5.000 contactos
                                </small>

                                <div class="box">

                                    <div class="opt">


                                        <div class="customCheckBox">

                                            <label class="checkboxCustom path">
                                                <input checked onchange="setConfigModeSelect(this)" value="starter" id="checkStarter" name="_typePlan"
                                                    type="radio">
                                                <svg viewBox="0 0 21 21">
                                                    <path
                                                        d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186">
                                                    </path>
                                                </svg>
                                            </label>

                                        </div>

                                            <h3 class="secondaryTitle">
                                                Plan Starter
                                            </h3>
                                            <span calculator_price_starter class="priceTag">
                                                USD $ 30
                                            </span>




                                    </div>
                                    <div class="opt">

                                        <div class="customCheckBox">

                                            <label class="checkboxCustom path">
                                                <input  onchange="setConfigModeSelect(this)" value="pro" id="checkPro" name="_typePlan" type="radio">
                                                <svg viewBox="0 0 21 21">
                                                    <path
                                                        d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186">
                                                    </path>
                                                </svg>
                                            </label>

                                        </div>

                                            <h3 class="secondaryTitle">
                                                Plan Pro
                                            </h3>
                                            <span
                                            calculator_price_pro
                                            class="priceTag">
                                                USD $ 75
                                            </span>


                                    </div>

                                </div>


                            </div>

                            <div class="plansSection mobileElement">
                                <small mobPlan>
                                    Plan Starter
                                </small>

                            </div>



                        </div>

                    </section>

                    <section class="innerSectionElement sct2">

                        <div class="containElements">

                            <div class="plansSection desktopElement">
                                <small class="miniTitle">
                                    Coloca el número de contactos de marketing
                                </small>

                                <div class="box">


                                    <div class="rw rw2">

                                        <div class="customSelectorRange">

                                            <div class="slidecontainer">
                                                <input typeProcess="0" name="_rangeContacts" class="rangeContacts" type="range" min="0"
                                                    max="100" value="0" class="sliderSelector">
                                            </div>

                                            <div
                                            scaleStarter
                                            class="rangeLimits">
                                                <span class="rangeContactLimit">
                                                    1.000
                                                </span class="rangeContactLimit">

                                                <span class="desktopTabletElement rangeContactLimit">
                                                    25.000
                                                </span>

                                                <span class="rangeContactLimit">
                                                    50.000
                                                </span>

                                                <span class="desktopTabletElement rangeContactLimit">
                                                    75.000
                                                </span>

                                                <span class="rangeContactLimit">
                                                    100.000
                                                </span>


                                            </div>

                                            <div
                                            style="display: none"
                                            scalePro
                                            class="rangeLimits">
                                                <span class="rangeContactLimit">
                                                    5.000
                                                </span class="rangeContactLimit">

                                                <span class="desktopTabletElement rangeContactLimit">
                                                    25.000
                                                </span>

                                                <span class="rangeContactLimit">
                                                    50.000
                                                </span>

                                                <span class="desktopTabletElement rangeContactLimit">
                                                    75.000
                                                </span>

                                                <span class="rangeContactLimit">
                                                    100.000
                                                </span>


                                            </div>

                                        </div>

                                    </div>

                                    <div class="rw rw1">

                                        <div class="customPriceInput">
                                            <input typeProcess="0" name="_contactsField" class="contactsField" step="1000" type="number" value="1000">
                                        </div>

                                    </div>

                                </div>


                            </div>

                            <div class="plansSection mobileElement">
                                <small class="miniTitle">
                                    Coloca el número de <br class="mobileElement"> contactos de marketing


                                    <div class="customPriceInput">
                                        <input typeProcess="1" name="_contactsField" class="contactsField" step="1000" type="number" min="1000" value="1000">
                                    </div>


                                </small>

                                <div class="box">


                                    <div class="rw rw2">

                                        <div class="customSelectorRange">

                                            <div class="slidecontainer">
                                                <input typeProcess="1" name="_rangeContacts" class="rangeContacts" type="range" min="5"
                                                    max="100" value="0" class="sliderSelector">
                                            </div>

                                            <div
                                            scaleStarter
                                            class="rangeLimits">
                                                <span class="rangeContactLimit">
                                                    1.000
                                                </span class="rangeContactLimit">

                                                <span class="desktopTabletElement rangeContactLimit">
                                                    25.000
                                                </span>

                                                <span class="rangeContactLimit">
                                                    50.000
                                                </span>

                                                <span class="desktopTabletElement rangeContactLimit">
                                                    75.000
                                                </span>

                                                <span class="rangeContactLimit">
                                                    100.000
                                                </span>


                                            </div>

                                            <div
                                            style="display: none"
                                            scalePro
                                            class="rangeLimits">
                                                <span class="rangeContactLimit">
                                                    5.000
                                                </span class="rangeContactLimit">

                                                <span class="desktopTabletElement rangeContactLimit">
                                                    25.000
                                                </span>

                                                <span class="rangeContactLimit">
                                                    50.000
                                                </span>

                                                <span class="desktopTabletElement rangeContactLimit">
                                                    75.000
                                                </span>

                                                <span class="rangeContactLimit">
                                                    100.000
                                                </span>


                                            </div>

                                        </div>

                                    </div>


                                </div>


                            </div>



                        </div>

                    </section>

                    <section class="innerSectionElement sct3">

                        <div class="containElements">

                            <div class="plansSection desktopElement">
                                <small class="miniTitle">
                                    Coloca el número de usuarios con acceso a la plataforma
                                </small>

                                <div class="box">

                                    <div class="rw rw1">

                                        <div class="info">


                                            <h5 class="commonText grayColorTexts5">
                                                Elige cuántos usuarios con acceso a la plataforma quieres tener.
                                            </h5>

                                        </div>

                                        <div class="customPriceInput">
                                            <input typeProcess="0" name="_userAccess" class="userAccess" min="1" type="number" value="1">
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="plansSection mobileElement">
                                <small>
                                    Coloca el número de usuarios <br class="mobileElement"> con acceso a la plataforma
                                </small>

                                <div class="box">

                                    <div class="rw rw1">

                                        <div class="info">


                                            <h5 class="commonText grayColorTexts5">
                                                Elige cuántos usuarios con acceso <br class="mobileElement"> a la plataforma quieres tener.
                                            </h5>

                                        </div>

                                        <div class="customPriceInput">
                                            <input typeProcess="1" name="_userAccess" class="userAccess" min="1" type="number" value="2">
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>


                </div>
                <br class="space">
                <div class="result ">

                    <section class="innerSectionElement sct4">

                        <div class="containElements">

                            <div class="plansSection">


                                <div class="box">

                                    <div class="info">

                                        <small>
                                            Calcula el precio final
                                        </small>

                                        <div class="buttonPriceSelector">

                                            <button type="button" onclick="typeCustomPay('monthly', this)"
                                                id="buttonPayTime-month" class="selectorPricingButton ">
                                                PAGAR MENSUAL
                                            </button>
                                            <button type="button" onclick="typeCustomPay('yearly', this)"
                                                id="buttonPayTime-year" class="selectorPricingButton active">
                                                PAGAR ANUAL
                                            </button>

                                        </div>
                                        <div class="priceFinalCalc">

                                            <span id="finalPriceCalc" class="finalPriceCalc">
                                                USD $21 /mes
                                            </span>

                                        </div>

                                        <div class="offert">

                                            <p class="primaryText grayColorTexts5">

                                                <span id="priceDotted">
                                                    $USD 30 /mes
                                                </span> <br class="space">
                                                <strong id="priceSaves">
                                                    Ahorras USD $9
                                                </strong>

                                            </p>

                                        </div>
                                        <div class="finalButtons">

                                            <a class="primaryButton hoverInEffect btn-popup-header">
                                                Prueba gratis
                                            </a>

                                            <a
                                            target="_blank"
                                            href="{!! App::setTypeUrl() !!}/zoom-demo"
                                            class="secondaryButton hoverInEffect">
                                                Habla con un asesor
                                            </a>

                                        </div>

                                    </div>


                                </div>

                            </div>



                        </div>

                    </section>
                </div>

            </div>


        </form>

        <div
        style="display: none"
        enterprisePlanCalc class="plansSection">


            <div class="box">

                <small>
                    Comunícate con uno <br class="space">
                    de nuestros asesores para <br class="space">
                    que conozcas con más detalles <br class="space">
                    los beneficios de este plan
                </small>

                <div class="image">


                    <div class="containerImage">
                        <img alt="Otto pricing" src="{!! App::setFilePath('/assets/images/illustrations/otto/otto-callcenter.png') !!}"
                        loading="lazy">
                    </div>

                </div>

            </div>

        </div>


    </div>


</section>

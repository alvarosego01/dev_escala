


 <section

 style="background-image: url('{!! App::setFilePath('/assets/images/overlays/overlay_whatsapp_headerband.png') !!}')"
 class="headerband_whatsapp_T1 customSection sectionParent fullWidth {{ $classSection }} ">

     <div class="section-row">

             <section class="innerSectionElement sct1">

                 <div class="containElements">
                    @if (isset($text) && $text != null)
                    <p>
                        {!! $text !!}
                    </p>
                    @else
                    <p>
                        <span style="color: #36768A">
                            <strong>¡Escala ahora potencia WhatsApp!</strong> - conoce las nuevas herramientas
                        </span>
                        <a href="#" class="greenWhatsappButton hoverInEffect openPopUpButton popup-general-special-1m-promo-2023">
                           Conocerlas ahora
                        </a>
                    </p>
                    @endif

                 </div>

             </section>

     </div>

 </section>










 <section
 class="component-headerBand-promo-T1 customSection sectionParent fullWidth {{ $classSection }} ">

     <div class="section-row">

             <section class="innerSectionElement sct1">

                 <div class="containElements">
                    @if (isset($text) && $text != null)
                    <p>
                        {!! $text !!}
                    </p>
                    @else
                    <p>
                        <span class="greenBlueColor6">Adquiere un</span> Plan PRO <span class="greenBlueColor6">y llévate hasta</span> 2 meses TOTALMENTE GRATIS. <a href="{!! App::setTypeUrl() !!}/zoom-meeting">Haz clic aquí y habla con un asesor</a>
                    </p>
                    @endif

                 </div>

             </section>

     </div>

 </section>
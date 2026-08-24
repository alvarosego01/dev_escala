<div id="crmSegurosPricing">
    <div class="csp-wrap">
        <div class="csp-hero">
            <div class="csp-eyebrow">PRECIOS · CRM PARA SEGUROS</div>
            <h1 class="csp-title">Un precio claro para corredores de seguros</h1>
            <p class="csp-sub">Pólizas, WhatsApp, automatización e IA en una sola plataforma. Todo lo que puede costarte más está publicado en esta página — y puedes calcularlo tú mismo antes de hablar con nadie.</p>
            <div class="csp-toggle">
                <button type="button" id="csp-bAn" class="on">Anual <span class="csp-tag-save">ahorra 20%</span></button>
                <button type="button" id="csp-bMe">Mes a mes</button>
            </div>
        </div>

        <div class="csp-plans" id="planes">
            <div class="csp-plan">
                <div class="csp-pname">Independiente</div>
                <div class="csp-pdesc">El CRM de seguros completo, para corredores que trabajan con una aseguradora.</div>
                <div class="csp-price">
                    <span class="csp-from">desde</span>
                    <span class="csp-amt" data-an="$99" data-me="$124">$99</span>
                    <span class="csp-unit">/ mes</span>
                </div>
                <div class="csp-billed" data-an="facturado anualmente · $1,188 / año" data-me="facturación mensual · sin permanencia">facturado anualmente · $1,188 / año</div>
                <a class="csp-btn ghost openPopUpButton popup-general-demo-2022" href="#demo">Habla con un asesor</a>
                <div class="csp-incl">INCLUYE</div>
                <ul>
                    <li><b>2,500 pólizas activas</b></li>
                    <li><b>2 usuarios</b> incluidos</li>
                    <li><b>2,000 contactos</b> de marketing</li>
                    <li><b>5,000 emails</b> al mes</li>
                    <li><b>500 automatizaciones</b> al mes</li>
                    <li>Embudos, landing pages y app móvil</li>
                    <li>Soporte en español</li>
                </ul>
            </div>

            <div class="csp-plan feat">
                <div class="csp-rec">RECOMENDADO</div>
                <div class="csp-pname">Profesional</div>
                <div class="csp-pdesc">Independiente + Otto IA + WhatsApp. Lo que usa la mayoría de los corredores.</div>
                <div class="csp-price">
                    <span class="csp-from">desde</span>
                    <span class="csp-amt" data-an="$139" data-me="$174">$139</span>
                    <span class="csp-unit">/ mes</span>
                </div>
                <div class="csp-billed" data-an="facturado anualmente · $1,668 / año — ahorras $216" data-me="facturación mensual · sin permanencia">facturado anualmente · $1,668 / año — ahorras $216</div>
                <a class="csp-btn openPopUpButton popup-general-demo-2022" href="#demo">Agenda una demo</a>
                <div class="csp-incl">TODO LO DE INDEPENDIENTE, MÁS</div>
                <ul>
                    <li><b>Otto IA</b> — 10,000 créditos al mes <span style="opacity:.8">(≈400 acciones)</span></li>
                    <li><b>WhatsApp</b> — 1 línea, 5,000 mensajes salientes al mes</li>
                    <li>Bandeja unificada WhatsApp, Instagram y Facebook</li>
                    <li>Redacción, respuestas y scoring con IA</li>
                    <li>Priorización diaria de tu cartera</li>
                    <li>Acompañamiento de implementación incluido</li>
                </ul>
            </div>

            <div class="csp-plan">
                <div class="csp-pname">Canal</div>
                <div class="csp-pdesc">Para aseguradoras que patrocinan la licencia de su red de corredores.</div>
                <div class="csp-price">
                    <span class="csp-amt csp-amt-custom">A medida</span>
                </div>
                <div class="csp-billed">precio por volumen, a convenir</div>
                <a class="csp-btn ghost openPopUpButton popup-general-demo-2022" href="#demo">Habla con nosotros</a>
                <div class="csp-incl">TODO LO DE PROFESIONAL, MÁS</div>
                <ul>
                    <li><b>Descuento por volumen</b> desde 25 corredores</li>
                    <li><b>Panel Aseguradora</b> — dashboards del canal</li>
                    <li><b>Muro de datos</b> — ves solo tu propia cartera</li>
                    <li>Onboarding y capacitación del canal</li>
                    <li>Facturación centralizada</li>
                    <li>Integración con backoffice a medida</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="csp-section tint" id="calc">
        <div class="csp-wrap">
            <h2 class="csp-h2">Calcula lo que pagarías</h2>
            <p class="csp-lead">Elige tu plan, marca los módulos que quieras y ajusta los volúmenes reales de tu operación. El total sigue la modalidad de pago que elegiste arriba.</p>

            <div class="csp-calc">
                <div class="csp-calc-in">
                    <div class="csp-seg">
                        <button type="button" id="csp-pCore">Independiente</button>
                        <button type="button" id="csp-pPro" class="on">Profesional</button>
                    </div>

                    <div class="csp-mods-lbl">MÓDULOS</div>
                    <div class="csp-mods-row">
                        <button type="button" class="csp-chip" id="csp-cOtto"><span class="bx"></span>Otto IA <span class="px" id="csp-pxOtto">+$39</span></button>
                        <button type="button" class="csp-chip" id="csp-cWa"><span class="bx"></span>WhatsApp <span class="px" id="csp-pxWa">+$19</span></button>
                        <button type="button" class="csp-chip" id="csp-cMulti"><span class="bx"></span>Multi-Aseguradora <span class="px" id="csp-pxMulti">+$49</span></button>
                    </div>

                    <div class="csp-fld">
                        <div class="top">
                            <label>Usuarios<span class="csp-inc">2 incluidos</span></label>
                            <input class="csp-val" id="csp-vUsers" data-r="csp-rUsers" type="text" inputmode="numeric" value="2" aria-label="Usuarios">
                        </div>
                        <input type="range" aria-label="Usuarios" id="csp-rUsers" min="1" max="25" step="1" value="2">
                    </div>

                    <div class="csp-fld" id="csp-fPol">
                        <div class="top">
                            <label>Pólizas activas<span class="csp-inc">2,500 incluidas</span></label>
                            <input class="csp-val" id="csp-vPol" data-r="csp-rPol" type="text" inputmode="numeric" value="2,500" aria-label="Pólizas activas">
                        </div>
                        <input type="range" aria-label="Pólizas activas" id="csp-rPol" min="0" max="15000" step="250" value="2500">
                    </div>

                    <div class="csp-fld">
                        <div class="top">
                            <label>Contactos de marketing<span class="csp-inc">2,000 incluidos</span></label>
                            <input class="csp-val" id="csp-vCont" data-r="csp-rCont" type="text" inputmode="numeric" value="2,000" aria-label="Contactos de marketing">
                        </div>
                        <input type="range" aria-label="Contactos de marketing" id="csp-rCont" min="0" max="60000" step="1000" value="2000">
                    </div>

                    <div class="csp-fld">
                        <div class="top">
                            <label>Emails al mes<span class="csp-inc">5,000 incluidos</span></label>
                            <input class="csp-val" id="csp-vMail" data-r="csp-rMail" type="text" inputmode="numeric" value="5,000" aria-label="Emails al mes">
                        </div>
                        <input type="range" aria-label="Emails al mes" id="csp-rMail" min="0" max="60000" step="1000" value="5000">
                    </div>

                    <div class="csp-fld">
                        <div class="top">
                            <label>Automatizaciones al mes<span class="csp-inc">500 incluidas</span></label>
                            <input class="csp-val" id="csp-vAuto" data-r="csp-rAuto" type="text" inputmode="numeric" value="500" aria-label="Automatizaciones al mes">
                        </div>
                        <input type="range" aria-label="Automatizaciones al mes" id="csp-rAuto" min="0" max="12000" step="250" value="500">
                    </div>

                    <div class="csp-fld" id="csp-fWa">
                        <div class="top">
                            <label>Mensajes de WhatsApp salientes<span class="csp-inc" id="csp-incWa">5,000 incluidos</span></label>
                            <input class="csp-val" id="csp-vWa" data-r="csp-rWa" type="text" inputmode="numeric" value="5,000" aria-label="Mensajes de WhatsApp">
                        </div>
                        <input type="range" aria-label="Mensajes de WhatsApp" id="csp-rWa" min="0" max="40000" step="500" value="5000">
                    </div>

                    <div class="csp-fld" id="csp-fOtto" style="margin-bottom:0">
                        <div class="top">
                            <label>Créditos de Otto IA al mes<span class="csp-inc" id="csp-incOtto">10,000 incluidos</span></label>
                            <input class="csp-val" id="csp-vOtto" data-r="csp-rOtto" type="text" inputmode="numeric" value="10,000" aria-label="Créditos de Otto IA">
                        </div>
                        <input type="range" aria-label="Créditos de Otto IA" id="csp-rOtto" min="0" max="150000" step="5000" value="10000">
                    </div>
                </div>

                <div class="csp-calc-out">
                    <div class="csp-ttl" id="csp-calcTtl">TU ESTIMADO MENSUAL</div>
                    <div class="csp-lines" id="csp-lines"></div>
                    <div class="csp-nudge" id="csp-nudge"></div>
                    <div class="csp-tot">
                        <span class="csp-tot-lb">Total por mes</span>
                        <span class="csp-tot-big" id="csp-total">$139<span> USD</span></span>
                    </div>
                    <div class="csp-yr" id="csp-yearly">$1,668 al año, facturado anualmente</div>
                    <div class="csp-calc-note">Estimado referencial. No incluye impuestos locales ni la tarifa de Meta por conversaciones de WhatsApp, que se traslada al costo y varía por país.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="csp-section" id="modulos">
        <div class="csp-wrap">
            <h2 class="csp-h2">Súmalos por separado si los necesitas</h2>
            <p class="csp-lead">Los módulos se contratan sueltos sobre el plan Independiente. Juntos cuestan $157 al mes; el plan Profesional los agrupa en $139. Los módulos también llevan el 20% de descuento al pagar anualmente.</p>
            <div class="csp-mods">
                <div class="csp-mod">
                    <div class="mn">Otto IA</div>
                    <div class="mp"><span data-an="$39" data-me="$49">$39</span> <small>/ mes</small></div>
                    <div class="mb" data-an="facturado anualmente · $468 / año" data-me="facturación mensual">facturado anualmente · $468 / año</div>
                    <ul>
                        <li>10,000 créditos al mes ≈ 400 acciones de IA</li>
                        <li>Redacción de correos y respuestas</li>
                        <li>Scoring y priorización de cartera</li>
                    </ul>
                </div>
                <div class="csp-mod">
                    <div class="mn">WhatsApp + Bandeja</div>
                    <div class="mp"><span data-an="$19" data-me="$24">$19</span> <small>/ mes</small></div>
                    <div class="mb" data-an="facturado anualmente · $228 / año" data-me="facturación mensual">facturado anualmente · $228 / año</div>
                    <ul>
                        <li>1 línea · 5,000 mensajes salientes al mes</li>
                        <li>Bandeja unificada con Instagram y Facebook</li>
                        <li>Meta se factura al costo, sin markup</li>
                    </ul>
                </div>
                <div class="csp-mod">
                    <div class="mn">Multi-Aseguradora</div>
                    <div class="mp"><span data-an="$49" data-me="$61">$49</span> <small>/ mes</small></div>
                    <div class="mb" data-an="facturado anualmente · $588 / año" data-me="facturación mensual">facturado anualmente · $588 / año</div>
                    <ul>
                        <li>Gestiona pólizas de otras aseguradoras</li>
                        <li>Cuentan contra tu límite de pólizas activas</li>
                        <li>Tu cartera completa en un solo lugar</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="csp-section tint" id="comparar">
        <div class="csp-wrap">
            <h2 class="csp-h2">Qué incluye cada plan</h2>
            <div class="csp-tbl-wrap">
                <table class="csp-tbl cmp">
                    <tr>
                        <th>Función</th>
                        <th>Independiente</th>
                        <th>Profesional</th>
                        <th>Canal</th>
                    </tr>
                    <tr class="grp"><td colspan="4">CARTERA Y EQUIPO</td></tr>
                    <tr><td class="n">Pólizas activas</td><td>2,500</td><td>2,500</td><td>2,500</td></tr>
                    <tr><td class="n">Usuarios incluidos</td><td>2</td><td>2</td><td>2</td></tr>
                    <tr><td class="n">Contactos de marketing</td><td>2,000</td><td>2,000</td><td>2,000</td></tr>
                    <tr><td class="n">Embudos, landing pages y app móvil</td><td class="csp-yes">✓</td><td class="csp-yes">✓</td><td class="csp-yes">✓</td></tr>
                    <tr class="grp"><td colspan="4">COMUNICACIÓN</td></tr>
                    <tr><td class="n">Emails al mes</td><td>5,000</td><td>5,000</td><td>5,000</td></tr>
                    <tr><td class="n">WhatsApp — línea y mensajes salientes</td><td class="csp-no">Módulo aparte</td><td>1 línea · 5,000</td><td>1 línea · 5,000</td></tr>
                    <tr><td class="n">Bandeja unificada (WA, IG, FB)</td><td class="csp-no">—</td><td class="csp-yes">✓</td><td class="csp-yes">✓</td></tr>
                    <tr class="grp"><td colspan="4">AUTOMATIZACIÓN E IA</td></tr>
                    <tr><td class="n">Automatizaciones al mes</td><td>500</td><td>500</td><td>500</td></tr>
                    <tr>
                        <td class="n">Otto IA — créditos al mes<span class="sub">≈25 créditos por acción</span></td>
                        <td class="csp-no">Módulo aparte</td>
                        <td>10,000</td>
                        <td>10,000</td>
                    </tr>
                    <tr class="grp"><td colspan="4">ASEGURADORA</td></tr>
                    <tr><td class="n">Panel de canal y reportería</td><td class="csp-no">—</td><td class="csp-no">—</td><td class="csp-yes">✓</td></tr>
                    <tr><td class="n">Muro de datos entre aseguradoras</td><td class="csp-no">—</td><td class="csp-no">—</td><td class="csp-yes">✓</td></tr>
                    <tr><td class="n">Descuento por volumen</td><td class="csp-no">—</td><td class="csp-no">—</td><td class="csp-yes">✓</td></tr>
                    <tr class="grp"><td colspan="4">SERVICIO</td></tr>
                    <tr><td class="n">Soporte en español</td><td class="csp-yes">✓</td><td class="csp-yes">✓</td><td class="csp-yes">✓</td></tr>
                    <tr><td class="n">Acompañamiento de implementación</td><td class="csp-no">Opcional</td><td class="csp-yes">Incluido</td><td class="csp-yes">Incluido</td></tr>
                </table>
            </div>
        </div>
    </section>

    <section class="csp-section">
        <div class="csp-wrap">
            <h2 class="csp-h2">Si superas un límite, esto es lo que cuesta</h2>
            <p class="csp-lead">Nada se cobra por adelantado ni por sorpresa: solo se factura el mes en que superas lo incluido, a estas tarifas publicadas.</p>
            <div class="csp-tbl-wrap">
                <table class="csp-tbl">
                    <tr>
                        <th>Recurso</th>
                        <th>Precio adicional</th>
                    </tr>
                    <tr class="hi">
                        <td class="n">Pólizas activas<span class="sub">Sobre las 2,500 incluidas · tope de $150 / mes, sin importar el tamaño de la cartera</span></td>
                        <td class="v">$10 / mes cada 500</td>
                    </tr>
                    <tr><td class="n">Usuario adicional</td><td class="v">$25 / mes</td></tr>
                    <tr><td class="n">Contactos de marketing</td><td class="v">$5 / mes cada 1,000</td></tr>
                    <tr><td class="n">Emails</td><td class="v">$1 / mes cada 1,000</td></tr>
                    <tr>
                        <td class="n">Mensajes de WhatsApp salientes<span class="sub">Solo plantillas. La tarifa de Meta se traslada al costo, sin margen</span></td>
                        <td class="v">$0.008 por mensaje</td>
                    </tr>
                    <tr><td class="n">Automatizaciones</td><td class="v">$10 / mes cada 1,000</td></tr>
                    <tr>
                        <td class="n">Paquete de créditos Otto IA<span class="sub">50,000 créditos ≈ 2,000 acciones</span></td>
                        <td class="v">$60 / mes</td>
                    </tr>
                </table>
            </div>
            <p class="csp-cap">Los mensajes que inicia el cliente dentro de la ventana de 24 horas no tienen costo.</p>
        </div>
    </section>

    <section class="csp-section tint" id="canal">
        <div class="csp-wrap">
            <h2 class="csp-h2">¿Eres una aseguradora?</h2>
            <p class="csp-lead">Si patrocinas la licencia de tu red, el precio por corredor baja según el volumen que comprometas, y sumas el Panel Aseguradora con reportería del canal y muro de datos entre aseguradoras. Lo armamos contigo según el tamaño de tu red.</p>
            <div style="margin-top:26px">
                <a class="csp-btn openPopUpButton popup-general-demo-2022" href="#demo">Habla con nosotros</a>
            </div>
        </div>
    </section>

    <section class="csp-section">
        <div class="csp-wrap">
            <div class="csp-trust">
                <div class="csp-tr">
                    <div class="big">+18,000</div>
                    <div class="lb">asesores de Seguros SURA usando Escala</div>
                </div>
                <div class="csp-tr">
                    <div class="big">4.8–4.9★</div>
                    <div class="lb">GetApp, Capterra y Trustpilot</div>
                </div>
                <div class="csp-tr">
                    <div class="big">100%</div>
                    <div class="lb">en español, con soporte local</div>
                </div>
                <div class="csp-tr">
                    <div class="big">Al costo</div>
                    <div class="lb">la tarifa de Meta, sin margen nuestro</div>
                </div>
            </div>
        </div>
    </section>

    <section class="csp-section tint" id="faq">
        <div class="csp-wrap" style="max-width:900px">
            <h2 class="csp-h2">Preguntas frecuentes</h2>
            <div style="margin-top:24px">
                <details open>
                    <summary>¿Por qué hay un límite de pólizas?</summary>
                    <p>Porque un límite publicado es más honesto que un "ilimitado" con letra chica. Las 2,500 pólizas activas cubren con holgura a la mayoría de los corredores. Si tu cartera es más grande, el excedente cuesta $10 al mes por cada 500 pólizas y nunca supera los $150 al mes — o sea, una cartera de 20,000 pólizas paga lo mismo que una de 10,000.</p>
                </details>
                <details>
                    <summary>¿Qué cuenta como póliza activa?</summary>
                    <p>Las pólizas vigentes en tu cartera durante ese mes. Las canceladas o vencidas dejan de contar automáticamente, y las cotizaciones que aún no se emiten no cuentan. La medición es mensual, así que si tu cartera baja, tu factura baja.</p>
                </details>
                <details>
                    <summary>¿Qué pasa si supero otro límite?</summary>
                    <p>Se factura solo ese mes, a las tarifas publicadas más arriba, y te avisamos antes de que ocurra. No hay subida automática de plan: si un mes envías más mensajes, pagas ese mes y vuelves a tu tarifa normal al siguiente.</p>
                </details>
                <details>
                    <summary>¿Puedo contratar Independiente y sumar módulos después?</summary>
                    <p>Sí. Independiente es un plan completo por sí mismo, y puedes activar Otto IA o WhatsApp cuando los necesites. Si terminas usando ambos, el plan Profesional te sale más barato que los tres por separado ($139 contra $157 al mes).</p>
                </details>
                <details>
                    <summary>¿Cómo se cobra WhatsApp exactamente?</summary>
                    <p>Tres cosas separadas. <b>Cuentan contra tu límite</b> los mensajes salientes de plantilla — marketing, utilidad y autenticación. <b>No cuentan ni tienen cargo</b> los mensajes entrantes de tu cliente ni tus respuestas dentro de la ventana de 24 horas que él abre. Sobre los que sí cuentan, Escala cobra $0.008 por mensaje como cargo de plataforma, y la tarifa que Meta cobra por conversación se traslada tal cual, sin margen nuestro, y varía por país.</p>
                </details>
                <details>
                    <summary>¿Para qué alcanzan 10,000 créditos de Otto IA?</summary>
                    <p>Cada acción de IA consume unos 25 créditos, así que 10,000 créditos son alrededor de <b>400 acciones al mes</b>: redactar un correo de seguimiento, resumir una conversación de WhatsApp, calificar un lead o preparar la renovación de una póliza. Si necesitas más, un paquete de 50,000 créditos adicionales cuesta $60 al mes.</p>
                </details>
                <details>
                    <summary>¿Los precios incluyen impuestos?</summary>
                    <p>No. Todos los precios están en dólares estadounidenses y no incluyen los impuestos locales de tu país, que se agregan en la factura según corresponda.</p>
                </details>
                <details>
                    <summary>Si soy cliente y suben los precios, ¿me afecta?</summary>
                    <p>Mantienes tu tarifa hasta la siguiente renovación, y te avisamos con anticipación antes de cualquier cambio. Nunca modificamos el precio de un contrato vigente.</p>
                </details>
                <details>
                    <summary>¿Hay permanencia mínima?</summary>
                    <p>El plan anual se factura por doce meses. Si prefieres no comprometerte, existe la modalidad mes a mes, sin permanencia, con un recargo del 20% sobre la tarifa anual.</p>
                </details>
            </div>
        </div>
    </section>

    <section class="csp-section" id="demo">
        <div class="csp-wrap">
            <div class="csp-cta">
                <h2 class="csp-h2">¿Vemos cómo quedaría con tu cartera?</h2>
                <p>Te mostramos la plataforma con tus pólizas y tu flujo real, en 30 minutos.</p>
                <div class="csp-cta-actions">
                    <a class="csp-btn openPopUpButton popup-general-demo-2022" href="#demo">Agenda una demo</a>
                    <a class="csp-btn ghost openPopUpButton popup-general-demo-2022" href="#demo">Habla con un asesor</a>
                </div>
            </div>
        </div>
    </section>

    <div class="csp-legal">
        <div class="csp-wrap">
            Precios en <b>dólares estadounidenses (USD)</b>, no incluyen impuestos locales. El plan anual se factura por adelantado; la modalidad mes a mes tiene un recargo del 20%.
            Los cargos adicionales se facturan únicamente el mes en que se supera el límite incluido. La tarifa de Meta por conversaciones de WhatsApp se traslada al costo y varía según el país.
        </div>
    </div>
</div>


<div id="landingWhatsapp">

  <div class="sections">



@php
$parameters = array(
 'backgroundImageType' => true,
 'overlay' => true,
 'classSection' => ' landingWhatsapp0 fullWidth',
 'title' => '
  <span class="greenBlueColor">Ahora con escala</span> <br class="space">
  activa WhatsApp <br class="space">
  <span class="greenBlueColor">en tus landing pages</span>
 ',
 'text' => null,
 'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
 'backgroundImage' => App::setFilePath('/assets/images/backgrounds/degradeBlue2.png'),
 'overlayImage' => App::setFilePath('/assets/images/overlays/overlay-planets_3.svg'),
 'image' => App::setFilePath('/assets/images/person/01_landings_increibles.png'),
 'threeCol' => false,
) ;
@endphp

@header_t1( $parameters )

@endheader_t1

    <section class="customSection sectionParent landingWhatsapp1">
      <div class="section-row">

        <section class="innerSectionElement row sct1">

          <div class="containElements">

            <h2 class="primaryTitle">
              <span class="greenBlueColor">
                ¿Cuáles son los beneficios de tener
              </span> <br>
              WhatsApp en tu landing page?
            </h2>


            {{-- <p class="primaryText grayColorTexts">
              <strong>Escala</strong> te permite implementar embudos de venta: la estrategia probada para hacer crecer empresas de manera rentable, sostenible y escalable
            </p> --}}

          </div>

        </section>

        <section class="innerSectionElement row sct2">

          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img alt="Da a conocer tu negocio" src="{!! App::setFilePath('/assets/images/illustrations/others/hand-phone.svg') !!}" alt="" loading="lazy" width="1024" height="998">
              </div>

              <h3 class="secondaryTitle">
                <span class="greenBlueColor">Fácil de activar</span>
              </h3>

              <p class="desc">
                Fácilmente puedes integrar WhatsApp a tu landing page publicada y recibir notificaciones en tu correo, cada vez que un visitante te escriba
              </p>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img alt="Multiplica tus clientes potenciales" src="{!! App::setFilePath('/assets/images/illustrations/others/mail-profile.svg') !!}" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h3 class="secondaryTitle">
                <span class="greenBlueColor">
                Registras sus datos
                </span>
              </h3>

              <p class="desc">
                Toda la data que registra tu visitante para comenzar la conversación queda guardada directamente en tu CRM de escala

              </p>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img alt="Aumenta tus ventas" src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp-01.svg') !!}" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h3 class="secondaryTitle">
                <span class="greenBlueColor">
                  La favorita de todos
                </span>
                </h3>

                <p class="desc">
                  Es una de las Apps de mensajería más descargadas del mundo. No puedes dejar de estar conectado con miles de personas
                </p>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img alt="Fideliza a tus clientes" src="{!! App::setFilePath('/assets/images/illustrations/others/wasap.svg') !!}" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h3 class="secondaryTitle">
                <span class="greenBlueColor">
                Cierra más ventas
              </span>
            </h3>

            <p class="desc">
              WhatsApp es la aplicación con mayor tasa de conversión en el planeta. Aumenta la posibilidad de enamorar a tus visitantes y cerrar más ventas
            </p>

            </div>
          </div>



        </section>

      </div>
    </section>

    <section class="customSection sectionParent landingWhatsapp2 fullWidth">

      <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/banner_astronew.jpg') !!}')" class="backgroundFull sct1">


        <div class="section-row">

          <div class="containElements">

            <h3 class="primaryTitle whiteText">
              ¡Comienza a crear tu landing page ahora!
            </h3>

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
              Comenzar ahora
            </a>


          </div>

        </div>



      </div>

    </section>


   @php
$parameters = [
  'type' => 'backgroundColor',
  'classSection' => 'landingWhatsapp3',
  'enableTitle' => true,
  'titlePrincipal' => '
      Conoce la plataforma “todo en uno” de ventas y marketing <br class="DT_e">
      que acelerará <span class="greenBlueColor">el crecimiento de tu negocio</span>
  ',
  'subTitlePrincipal' => null,
  'overlay' => false,
  'overlayImage' => null,
  'enableButton' => false,
  'elements' => array(
              [
                  'img' => App::setFilePath('/assets/images/illustrations/others/icon_re_escala01.png'),
                  'title' => '
                        Crea increíbles páginas <br class="space">
                        sin programar
                      ',
                  'text' => '
                    Elige una de nuestras plantillas: edítala, <br class="DT_e">
                    personalízala, publícala y ¡listo!. Con <br class="DT_e">
                    Escala puedes construir landing pages <br class="DT_e">
                    fácil y rápido, sin necesidad de programar.
                  ',
                  'enableButton' => false,

              ],
              [
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_re_escala02.png'),
                'title' => '
                  Multiplica tus visitas web <br class="space">
                  con anuncios digitales
                ',
                'text' => '
                  Conecta tu cuenta de Facebook y <br class="DT_e">
                  comienza a generar tráfico a tu landing <br class="DT_e">
                  page. Crea campañas de anuncios <br class="DT_e">
                  digitales directamente desde <span class="orangeColor">Escala</span>.
                ',
                'enableButton' => false
              ],
              [
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_re_escala03.png'),
                'title' => '
                  Organiza tus contactos y <br class="space">
                  gestiona procesos de venta
                ',
                'text' => '
                Empodera a tu equipo de ventas con el <br class="DT_e">
                CRM más amigable y fácil de usar. <br class="DT_e">
                Incrementa la productividad planificando <br class="DT_e">
                actividades y manteniendo comunicación <br class="DT_e">
                constante con tus leads.
                  ',
                  'enableButton' => false
              ],
              [
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_re_escala04.png'),
                'title' => '
                  Envía emails de <br class="space">
                  marketing profesionales
                  ',
                  'text' => '
                  Envía fácilmente campañas masivas de <br class="DT_e">
                  emails con una de nuestras plantillas <br class="DT_e">
                  prediseñadas. Con <span class="orangeColor">Escala</span> dile adiós a la <br class="DT_e">
                  bandeja de spam.
                  ',
                'enableButton' => false
              ],
              [
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_re_escala05.png'),
                'title' => '
                  Automatiza tareas y <br class="space">
                  flujos de comunicación
                ',
                'text' => '
                Ahorra tiempo automatizando tareas repetitivas <br class="DT_e">
                con <span class="orangeColor">Escala</span> para lograr tus metas de ventas. <br class="DT_e">
                Programa recordatorios y configura emails de <br class="DT_e"> respuestas automáticas.
                ',
                'enableButton' => false
              ],
              [
                'img' => App::setFilePath('/assets/images/illustrations/others/icon_re_escala06.png'),
                  'title' => '
                    Obtén métricas de marketing <br class="space">
                    y ventas en tiempo real
                  ',
                  'text' => '
                  Lo que no se mide, no mejora. <span class="orangeColor">Escala</span> te da las <br class="DT_e">
                  analíticas necesarias en dashboards amigables <br class="DT_e">
                  para que optimices tus esfuerzos de venta y <br class="DT_e">
                  marketing. La salud de tu negocio en un solo <br class="DT_e">
                  vistazo.
                  ',
                  'enableButton' => false
              ]

  )
];
@endphp

@contain_5_cards_T1( $parameters )
@endcontain_5_cards_T1



   <section class="customSection sectionParent landingWhatsapp4 fullWidth">

    <div style="background-image: url('{!! App::setFilePath('/assets/images/banners/Banner-Astro-4.jpg') !!}')" class="backgroundFull sct1">


      <div class="section-row">

        <div class="containElements">

          <h3 class="primaryTitle whiteText">
            ¡Quiero todas las herramientas <br class="space">
            de esta plataforma!
          </h3>

          <a href="#lead-form" class="goToHash primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
            Comenzar ahora
          </a>


        </div>




      </div>

      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/astrorocket.svg')" class="imageBackground">
      </div>

    </div>

  </section>


  @php
   $parameters = array(
    'classSection' => 'landingWhatsapp5',
    'title' => '
    <span class="greenBlueColor">¿Estás listo para <br class="space"></span>
    acelerar tus ventas?
    ',
    'text' => null,
    'image' => 'https://cdn.escala.com/wp-content/uploads/sites/2/2021/02/conoce-el-mundo-lp-0115.png',
    'textForm' => 'Recibe un tour guiado <br class="space"> de Escala'
   ) ;
  @endphp
  @bannerForms7_T1( $parameters )

  @endbannerForms7_T1


  </div>
  </section>


</div>

</div>





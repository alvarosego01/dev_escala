
{{--
  Template Name: [B] Landing page Whatsapp
--}}




@extends('layouts.app')


@section('content')


<div id="landingWhatsapp">

  <div class="sections">


    @php
 $parameters = array(
  'backgroundImageType' => true,
  'overlay' => true,
  'classSection' => 'landingWhatsapp0 fullWidth',
  'title' => '<span class="greenBlueColor">Ahora con escala</span> <br> activa WhatsApp <br> <span class="greenBlueColor">en tus landing pages</span>',
  'text' => null,
  'textForm' => 'Empieza a probar escala',
  'backgroundImage' => App::setFilePath('/assets/images/backgrounds/degradeBlue2.png'),
  'overlayImage' => App::setFilePath('/assets/images/overlays/overlay-planets_3.svg'),
  'image' => App::setFilePath('/assets/images/person/am/andres-moreno-otto-ld.png'),
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


    <section class="customSection sectionParent landingWhatsapp3 fullWidth">

      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/banner-3-1.png')" class="backgroundFull sct1">


        <div class="section-row">

          <div class="containElements">

            <h3 class="primaryTitle whiteText">¿Quieres activar WhatsApp en tu landing page?
            </h3>

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
              Comenzar ahora
            </a>


          </div>




        </div>

        <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/astrorocket.svg')" class="imageBackground">
        </div>

      </div>

    </section>


    <section class="customSection sectionParent landingWhatsapp4">

      <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              5 ventajas de potenciar <br> tu negocio con <span class="orangeColor">Escala</span>
            </h2>

          </div>

        </section>


        <section class="innerSectionElement sct2">
          <div class="groupElements row">
            <div class="col-md-12 col-lg-6 infoGroup">

              <div class="containerImage">
                <img alt="Una plataforma muy fácil de usar" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/01-2.svg" alt="" loading="lazy">
              </div>

              <div class="containerElements">
                <h3 class="commonTitle blackColor">Una plataforma muy fácil de usar</h3>
                <p class="primaryText grayColorTexts">No necesitas ser un experto para comenzar a vender más</p>

              </div>

            </div>

            <div class="col-md-12 col-lg-6 infoGroup">

              <div class="containerImage">
                <img alt="Toda las herramientas en un solo lugar" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/02-2.svg" alt="" loading="lazy">
              </div>

              <div class="containerElements">
                <h3 class="commonTitle blackColor">Toda las herramientas <br> en un solo lugar</h3>
                <p class="primaryText grayColorTexts">Desde un page builder muy intuitivo hasta el CRM más simple de gestionar</p>

              </div>

            </div>
          </div>
          <div class="groupElements row">
            <div class="col-md-12 col-lg-6 infoGroup">

              <div class="containerImage">
                <img alt="Siempre acompañado y asesorado" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/03-2.svg" alt="" loading="lazy">
              </div>

              <div class="containerElements">
                <h3 class="commonTitle blackColor">Siempre acompañado y asesorado</h3>
                <p class="primaryText grayColorTexts">El equipo de atención al cliente nunca te dejará solo, estamos comprometidos con tu éxito.</p>

              </div>

            </div>

            <div class="col-md-12 col-lg-6 infoGroup">

              <div class="containerImage">
                <img alt="Sin programar una línea de código" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/04-2.svg" alt="" loading="lazy">
              </div>

              <div class="containerElements">
                <h3 class="commonTitle blackColor">Sin programar una línea de código</h3>
                <p class="primaryText grayColorTexts">Olvídate de necesitar programadores, en Escala todo está listo para que edites y publiques en un clic.</p>

              </div>

            </div>
          </div>


          <div class="groupElements row">
            <div class="full infoGroup">

              <div class="containerImage">
                <img alt="100% en español" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/numero5.png" alt="" loading="lazy">
              </div>

              <div class="containerElements">
                <h3 class="commonTitle blackColor">100% en español</h3>
                <p class="primaryText grayColorTexts">Marketing y ventas en tu idioma pensado para <br> impulsar el éxito de los hispanoamericanos</p>

              </div>

            </div>


          </div>

        </section>

      </div>
    </section>

    <section class="customSection sectionParent landingWhatsapp5">

      <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="groupElements row">

            <div class="info col-md-12 col-lg-6">


              <div class="containElements">

                <h2 class="primaryTitle blackColor"><span class="greenBlueColor">Te acompañamos</span> <br> en tu camino al éxito</h2>


                <p class="primaryText grayColorTexts"><strong>¿No estás seguro de qué hacer o cómo avanzar?</strong> Nuestros estrategas expertos en marketing digital y ventas conocen acerca de tus necesidades y comparten conocimientos probados para conseguir mejores resultados.</p>

                <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                  Probar Escala ahora
                </a>


              </div>

            </div>
            <div class="image col-md-12 col-lg-6">

              <div class="containerImage">
                <img alt="Te acompañamos en tu camino al éxito" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/Group-1822.png" alt="" loading="lazy">
              </div>

            </div>

          </div>

        </section>

      </div>
    </section>


    <section class="customSection sectionParent landingWhatsapp6">

      <div class="section-row">


        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">Clientes que <br> hacen crecer sus negocios <br> con <span class="orangeColor">Escala</span>
            </h2>

          </div>

        </section>

        <section class="innerSectionElement sct2">

          <div class="groupElements row">

            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h3 class="commonTitle blackColor">Agencia de Publicidad</h3>
                  <span class="tag greenBlueColor">El salvador</span>
                  <p class="commonText grayColorTexts"><strong>Escala</strong> tiene el email builder más amigable que he utilizado en los últimos años, y su equipo está comprometido a mantener la plataforma en constante actualización en el dinámico mundo digital.</p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img alt="Agencia de Publicidad" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Publicidad-Comercial2-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Verónica Bolaños <br> <span>Account Manager</span>
                    </h3>
                    <p class="commonText grayColorTexts">Publicidad Comercial</p>
                  </div>

                </div>

              </div>
            </div>
            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h3 class="commonTitle blackColor">Agencia de Marketing</h3>
                  <span class="tag greenBlueColor">México</span>
                  <p class="commonText grayColorTexts">
                    Primera vez que me atienden de esta manera y mi equipo y yo lo agradecemos enormemente. Además de tener una herramienta bien integrada y muy sencilla de utilizar, el acompañamiento del equipo es A1. La atención está cuando la necesitas, el nivel de seguimiento al trabajar juntos… ni siquiera con los de Facebook o Google tenemos un servicio similar. Felicidades porque tienen un equipo de trabajo increíble y todo hace que sean muchos los beneficios que <strong>Escala</strong> le aporta a sus clientes.
                  <p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img alt="Agencia de Marketing" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Huella-Studio-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Ernesto Valery y Edher Nieves <br> <span>Director Creativo</span>
                    </h3>
                    <p class="commonText grayColorTexts">Huella Studio</p>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="groupElements row">
            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h3 class="commonTitle blackColor">Turismo</h3>
                  <span class="tag greenBlueColor">Venezuela</span>
                  <p class="commonText grayColorTexts">“Yo ya había utilizado un CRM y otras plataformas que tienen más o menos la misma esencia. Encontrarme con <strong>Escala</strong> fue importante porque es más completa. Tienes todo lo que necesitas, desde captar el interés de los clientes, hacer seguimiento, medir indicadores de desempeño de tu equipo de ventas, hasta estandarizar el proceso de la comunicación. Ahora que mi mercado se redujo por la pandemia, <strong>Escala</strong> es sumamente oportuno. Además, estoy muy contenta por todo el apoyo que he recibido por el equipo de <strong>Escala</strong>.”</p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img alt="Turismo" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Infinito-Producciones-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Michell Peláez <br> <span>Ejecutiva de cuentas corporativas</span>
                    </h3>
                    <p class="commonText grayColorTexts">Infinito Producciones</p>
                  </div>

                </div>

              </div>
            </div>
            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h3 class="commonTitle blackColor">Agencia de Comunicaciones</h3>
                  <span class="tag greenBlueColor">Costa Rica</span>
                  <p class="commonText grayColorTexts">La herramienta es muy amigable, y permite que la gestión pueda realizarla casi que cualquier persona con conocimientos básicos en plataformas digitales. <br>
                    El servicio es expedito y el equipo a cargo se preocupa por extender capacitaciones necesarias que garantizan que los equipos estén sacando el mayor provecho de la herramienta.<br>
                    La organización visual de la pantalla de entrada es muy intuitiva, esto permite la exploración y el autoaprendizaje de las diferentes variables que se pueden configurar en la plataforma.</p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img alt="Agencia de Comunicaciones" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Initiative-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Dayana Palacios <br> <span>Directora de medios y marketing digital</span>
                    </h3>
                    <p class="commonText grayColorTexts">Initiative</p>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="groupElements row">
            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h3 class="commonTitle blackColor">Academia de Coaching</h3>
                  <span class="tag greenBlueColor">Estados Unidos</span>
                  <p class="commonText grayColorTexts">¡¡¡Extraordinario equipo con conocimientos sólidos de la realidad de lanzamientos de iniciativas de aprendizaje y crecimiento!!! 🔥🔥🔥🔥👏👏👏👏🙌</p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img alt="Academia de Coaching" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Logo-ILC-Academy-1-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Fernando Celis <br> <span>CEO y Fundador</span>
                    </h3>
                    <p class="commonText grayColorTexts">ILC Academy</p>
                  </div>

                </div>

              </div>
            </div>
            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h3 class="commonTitle blackColor">Entretenimiento Deportivo</h3>
                  <span class="tag greenBlueColor">Venezuela</span>
                  <p class="commonText grayColorTexts">Felicitaciones al equipo de <strong>Escala</strong>, pues de verdad la plataforma me gusta bastante. Posee herramientas muy útiles y lo mejor es que es simple de manipular.</p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img alt="Entretenimiento Deportivo" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Savage-Paintball-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Felix Pacheco
                    </h3>
                    <p class="commonText grayColorTexts">Savage Paintball</p>
                  </div>

                </div>

              </div>
            </div>
          </div>


      </div>

    </section>

  </div>
  </section>


</div>

</div>





@endsection
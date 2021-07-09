
{{--
  Template Name: [B] Home
--}}

@extends('layouts.app')


@section('content')






<div id="homeBootstrap">

  <div class="sections">


    <section id="lead-form" class="customSection sectionParent homeSection0 fullWidth">


      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/Rectangle-1037-1.png')" class="backgroundFull">

        <div class="section-row">



          <section class="innerSectionElement sct1">

            <div class="groupElements row">

              <div class="info col-md-12 col-lg-6">

                <div class="containElements">


                  <h1 class="principalBigTitle blackColor">
                    Genera más leads, <br> clientes y ventas <span class="greenBlueColor">con escala</span>
                  </h1>
                  <p class="principalBigText grayColorTexts">
                    <strong>escala</strong>; la plataforma de marketing digital y ventas más potente y fácil de utilizar
                  </p>

                  <div class="containerImage">
                    <img alt="Genera más leads, clientes y ventas con escala" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/andres_banner_aprobado-1-1.png" alt="" loading="lazy">
                  </div>



                </div>


              </div>
              <div class="form7 col-md-12 col-lg-6">

                <div class="containElements">

                  <div class="formatForm">

                    <h4 class="titleFormat blackcolor">¡Comienza ahora!</h4>

                    {{-- {!! do_shortcode( '[contact-form-7 id="73" title="Contacto Paso 1"]' ); !!}
                     --}}

                     @php
                     $f = ACF_CUSTOM::_getField('form7');
                 @endphp
                  @if (isset($f) && $f != null)
                  {!! do_shortcode( $f ) !!}
                  @else
                  {!! do_shortcode( '[contact-form-7 id="73" title="Contacto Paso 1"]' ); !!}
                  @endif


                  </div>

                </div>
              </div>


            </div>

          </section>

        </div>

        <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/Group-1821.svg')" class="backgroundPlanets">
        </div>


        </div>

    </section>

    <section class="customSection sectionParent homeSection1">
      <div class="section-row">

        <section class="innerSectionElement row sct1">

          <div class="containElements">

            <h2 class="primaryTitle greenBlueColor"><span class="">Acelera el crecimiento de tu negocio</span></h2>


            <p class="primaryText grayColorTexts">
              <strong>escala</strong> te permite implementar embudos de venta: la estrategia probada para hacer crecer empresas de manera rentable, sostenible y escalable
            </p>

          </div>

        </section>

        <section class="innerSectionElement row sct2">

          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img alt="Da a conocer tu negocio" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/beneficio_01.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>

              <h3 class="secondaryTitle"><span class="greenBlueColor">Da a conocer</span> <br>tu negocio</h3>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img alt="Multiplica tus clientes potenciales" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/beneficio_02.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h3 class="secondaryTitle"><span class="greenBlueColor">Multiplica</span> tus<br> clientes potenciales</h3>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img alt="Aumenta tus ventas" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/beneficio_03.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h3 class="secondaryTitle"><span class="greenBlueColor">Aumenta </span><br>tus ventas</h3>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img alt="Fideliza a tus clientes" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/beneficio_04.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h3 class="secondaryTitle"><span class="greenBlueColor">Fideliza</span><br> a tus clientes</h3>

            </div>
          </div>



        </section>

      </div>
    </section>


    <section class="customSection sectionParent homeSection2 fullWidth">

      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/Rectangle-1037.png')" class="backgroundFull">

        <div class="section-row">


          <section class="innerSectionElement sct1">


            <div class="containElements">

              <h2 class="primaryTitle blackColor">
                <span class="greenBlueColor">La Plataforma todo en uno </span><br> de marketing digital y ventas
              </h2>
              <p class="primaryText grayColorTexts">
                En <strong>escala</strong> tienes todas las herramientas ya integradas para impulsar tu éxito
              </p>

            </div>

          </section>
          <section class="innerSectionElement sct2">

            <div class="groupElements row">
              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Crea increíbles páginas sin programar" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_01.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="commonTitle blackColor">Crea increíbles páginas <br> sin programar</h3>
                  <p class="secondaryText grayColorTexts">¡Y que queden hermosas!</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/landing-pages/">Crea tu landing con escala</a>
                </div>

              </div>

              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Organiza tus contactos y gestiona procesos de venta" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_05.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="commonTitle blackColor">Organiza tus contactos y <br> gestiona procesos de <br> venta</h3>
                  <p class="secondaryText grayColorTexts">Con un CRM sencillo de usar</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/crm-escala/">
                    Vende más con el CRM de escala
                  </a>
                </div>

              </div>

            </div>
            <div class="groupElements row">
              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Envía emails de marketing profesionales" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_02.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="commonTitle blackColor">Envía emails de marketing <br> profesionales</h3>
                  <p class="secondaryText grayColorTexts">Personalizados y masivos, sin caer en la bandeja de SPAM</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/email/">
                    Envía emails con escala
                  </a>
                </div>

              </div>

              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Multiplica tus visitas web con anuncios digitales" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_04.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="commonTitle blackColor">Multiplica tus visitas web <br> con anuncios digitales</h3>
                  <p class="secondaryText grayColorTexts">en Facebook, Instagram y Google</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/anuncios-digitales/">
                    Crea anuncios con escala
                  </a>
                </div>

              </div>
            </div>

            <div class="groupElements row">
              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Automatiza tareas y flujos de comunicación" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_03.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="commonTitle blackColor">Automatiza tareas y flujos <br> de comunicación</h3>
                  <p class="secondaryText grayColorTexts">escala trabaja por ti 24/7</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/automatizacion/">
                    Automatiza con escala
                  </a>
                </div>

              </div>




              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Obtén métricas de marketing y ventas en tiempo real" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_06.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="commonTitle blackColor">Obtén métricas de <br> marketing y ventas en <br> tiempo real</h3>
                  <p class="secondaryText grayColorTexts">con dashboards inteligentes</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/analiticas/">
                    Mide ahora con escala
                  </a>
                </div>

              </div>





            </div>


          </section>

        </div>
      </div>

    </section>


    <section class="customSection sectionParent homeSection3 fullWidth">

      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/banner-3-1.png')" class="backgroundFull sct1">


        <div class="section-row">

          <div class="containElements">

            <h3 class="primaryTitle whiteText">Empieza a escalar tu negocio con éxito
            </h3>

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
              Probar escala ahora
            </a>


          </div>




        </div>

        <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/astrorocket.svg')" class="imageBackground">
        </div>

      </div>

    </section>


    <section class="customSection sectionParent homeSection4">

      <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              5 ventajas de potenciar <br> tu negocio con <span class="orangeColor">escala</span>
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
                <p class="primaryText grayColorTexts">Olvídate de necesitar programadores, en escala todo está listo para que edites y publiques en un clic.</p>

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

    <section class="customSection sectionParent homeSection5">

      <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="groupElements row">

            <div class="info col-md-12 col-lg-6">


              <div class="containElements">

                <h2 class="primaryTitle blackColor"><span class="greenBlueColor">Te acompañamos</span> <br> en tu camino al éxito</h2>


                <p class="primaryText grayColorTexts"><strong>¿No estás seguro de qué hacer o cómo avanzar?</strong> Nuestros estrategas expertos en marketing digital y ventas conocen acerca de tus necesidades y comparten conocimientos probados para conseguir mejores resultados.</p>

                <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                  Probar escala ahora
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


    <section class="customSection sectionParent homeSection6">

      <div class="section-row">


        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">Clientes que <br> hacen crecer sus negocios <br> con <span class="orangeColor">escala</span>
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
                  <p class="commonText grayColorTexts"><strong>escala</strong> tiene el email builder más amigable que he utilizado en los últimos años, y su equipo está comprometido a mantener la plataforma en constante actualización en el dinámico mundo digital.</p>
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
                    Primera vez que me atienden de esta manera y mi equipo y yo lo agradecemos enormemente. Además de tener una herramienta bien integrada y muy sencilla de utilizar, el acompañamiento del equipo es A1. La atención está cuando la necesitas, el nivel de seguimiento al trabajar juntos… ni siquiera con los de Facebook o Google tenemos un servicio similar. Felicidades porque tienen un equipo de trabajo increíble y todo hace que sean muchos los beneficios que <strong>escala</strong> le aporta a sus clientes.
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
                  <p class="commonText grayColorTexts">“Yo ya había utilizado un CRM y otras plataformas que tienen más o menos la misma esencia. Encontrarme con <strong>escala</strong> fue importante porque es más completa. Tienes todo lo que necesitas, desde captar el interés de los clientes, hacer seguimiento, medir indicadores de desempeño de tu equipo de ventas, hasta estandarizar el proceso de la comunicación. Ahora que mi mercado se redujo por la pandemia, <strong>escala</strong> es sumamente oportuno. Además, estoy muy contenta por todo el apoyo que he recibido por el equipo de <strong>escala</strong>.”</p>
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
                  <p class="commonText grayColorTexts">Felicitaciones al equipo de <strong>escala</strong>, pues de verdad la plataforma me gusta bastante. Posee herramientas muy útiles y lo mejor es que es simple de manipular.</p>
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
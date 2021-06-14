{{--
  Template Name: Home bootstrap
--}}

@extends('layouts.app')


@section('content')


<div id="homeBootstrap">

  <div class="sections">


    <section class="customSection sectionParent homeSection0 fullWidth">


      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/Rectangle-1037-1.png')" class="backgroundFull">
        <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/Group-1821.svg')" class="backgroundPlanets">
        </div>


        <div class="section-row">



          <section class="innerSectionElement sct1">

            <div class="groupElements row">

              <div class="info col-md-12 col-lg-6">

                <div class="containElements">


                  <h2 class="principalBigTitle blackColor">Genera más leads,<br> <span class="greenBlueColor">clientes y ventas</span></h2>
                  <p class="principalBigText grayColor">Con <strong>escala</strong>, la plataforma de marketing digital y ventas más potente y fácil de utilizar</p>

                  <div class="containerImage">
                    <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/andres_banner_aprobado-1-1.png" alt="" loading="lazy">
                  </div>



                </div>


              </div>
              <div id="lead-form" class="form7 col-md-12 col-lg-6">

                <div class="containElements">

                  <div class="formatForm">

                    <h5 class="titleFormat blackcolor">¡Comienza ahora!</h5>

                    {!! do_shortcode( '[contact-form-7 id="73" title="Contacto Paso 1"]' ); !!}

                  </div>

                </div>
              </div>


            </div>

          </section>

        </div>

    </section>

    <section class="customSection sectionParent homeSection1">
      <div class="section-row">

        <section class="innerSectionElement row sct1">

          <div class="containElements">

            <h2 class="primaryTitle greenBlueColor"><span class="">Acelera el crecimiento de tu negocio</span></h2>


            <p class="primaryText grayColor"><strong>escala</strong> te permite implementar embudos de venta: la estrategia probada para hacer crecer empresas de manera rentable, sostenible y escalable</p>

          </div>

        </section>

        <section class="innerSectionElement row sct2">

          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/beneficio_01.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>

              <h2 class="secondaryTitle"><span class="greenBlueColor">Da a conocer</span> <br>tu negocio</h2>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/beneficio_02.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h2 class="secondaryTitle"><span class="greenBlueColor">Multiplica</span> tus<br> clientes potenciales</h2>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/beneficio_03.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h2 class="secondaryTitle"><span class="greenBlueColor">Aumenta </span><br>tus ventas</h2>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/beneficio_04.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h2 class="secondaryTitle"><span class="greenBlueColor">Fideliza</span><br>a tus clientes</h2>

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

              <h2 class="primaryTitle blackColor"><span class="greenBlueColor">La Plataforma todo-en-uno </span><br> de marketing digital y ventas</h2>
              </h2>
              <p class="primaryText grayColor"> En <strong>escala</strong> tienes todas las herramientas ya integradas para impulsar tu éxito
              </p>

            </div>

          </section>
          <section class="innerSectionElement sct2">

            <div class="groupElements row">
              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_01.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h2 class="commonTitle blackColor">Crea increíble páginas sin programar</h2>
                  <p class="secondaryText grayColor">¡Y que queden hermosas!</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/landing-pages/">Conocer más</a>
                </div>

              </div>

              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_05.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h2 class="commonTitle blackColor">Organiza tus contactos y gestiona procesos de venta </h2>
                  <p class="secondaryText grayColor">Con un CRM sencillo de usar</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/crm-escala/">Conocer más</a>
                </div>

              </div>

            </div>
            <div class="groupElements row">
              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_02.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h2 class="commonTitle blackColor">Envía emails de marketing profesionales</h2>
                  <p class="secondaryText grayColor">Personalizados y masivos, sin caer en la bandeja de SPAM</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/email/">Conocer más</a>
                </div>

              </div>

              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_04.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h2 class="commonTitle blackColor">Multiplica tus visitas web con anuncios digitales</h2>
                  <p class="secondaryText grayColor">en Facebook, Instagram y Google</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/anuncios-digitales/">Conocer más</a>
                </div>

              </div>
            </div>

            <div class="groupElements row">
              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_03.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h2 class="commonTitle blackColor">Automatiza tareas y flujos de comunicación</h2>
                  <p class="secondaryText grayColor">escala trabaja por ti 24/7</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/automatizacion/">Conocer más</a>
                </div>

              </div>




              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_06.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h2 class="commonTitle blackColor">Obtén métricas de marketing y ventas en tiempo real</h2>
                  <p class="secondaryText grayColor">con dashboards inteligentes</p>
                  <a class="hiperButtonGray" href="{!! App::setTypeUrl() !!}/analiticas/">Conocer más</a>
                </div>

              </div>





            </div>


          </section>

        </div>
      </div>

    </section>


    <section class="customSection sectionParent homeSection3 fullWidth">

      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/banner-3-1.png')" class="backgroundFull sct1">

        <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/astrorocket.svg')" class="imageBackground">
        </div>
        <div class="section-row">

          <div class="containElements">

            <h2 class="primaryTitle whiteText">Empieza a escalar tu negocio con éxito
            </h2>

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
              Probar escala ahora
            </a>


          </div>




        </div>
      </div>

    </section>


    <section class="customSection sectionParent homeSection4">

      <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">5 Ventajas de potenciar <br> tu negocio con <span class="orangeColor">escala</span></h2>

          </div>

        </section>


        <section class="innerSectionElement sct2">
          <div class="groupElements row">
            <div class="col-md-12 col-lg-6 infoGroup">

              <div class="containerImage">
                <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/01-2.svg" alt="" loading="lazy">
              </div>

              <div class="containerElements">
                <h2 class="commonTitle blackColor">Una Plataforma muy fácil de usar</h2>
                <p class="primaryText grayColor">No necesitas ser un experto para comenzar a vender más</p>

              </div>

            </div>

            <div class="col-md-12 col-lg-6 infoGroup">

              <div class="containerImage">
                <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/02-2.svg" alt="" loading="lazy">
              </div>

              <div class="containerElements">
                <h2 class="commonTitle blackColor">Toda las herramientas en un solo lugar</h2>
                <p class="primaryText grayColor">Desde un page builder muy intuitivo hasta el CRM más simple de gestionar</p>

              </div>

            </div>
          </div>
          <div class="groupElements row">
            <div class="col-md-12 col-lg-6 infoGroup">

              <div class="containerImage">
                <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/03-2.svg" alt="" loading="lazy">
              </div>

              <div class="containerElements">
                <h2 class="commonTitle blackColor">Siempre acompañado y asesorado</h2>
                <p class="primaryText grayColor">El equipo de atención al cliente nunca te dejará solo, estamos comprometidos con tu éxito.</p>

              </div>

            </div>

            <div class="col-md-12 col-lg-6 infoGroup">

              <div class="containerImage">
                <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/04-2.svg" alt="" loading="lazy">
              </div>

              <div class="containerElements">
                <h2 class="commonTitle blackColor">Sin programar una línea de código</h2>
                <p class="primaryText grayColor">Olvídate de necesitar programadores, en escala todo está listo para que edites y publiques en un clic.</p>

              </div>

            </div>
          </div>


          <div class="groupElements row">
            <div class="full infoGroup">

              <div class="containerImage">
                <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/numero5.png" alt="" loading="lazy">
              </div>

              <div class="containerElements">
                <h2 class="commonTitle blackColor">100% en español</h2>
                <p class="primaryText grayColor">Marketing y ventas en tu idioma pensado para <br> impulsar el éxito de los hispanoamericanos</p>

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


                <p class="primaryText grayColor"><strong>¿No estás seguro de qué hacer o cómo avanzar?</strong> Nuestros estrategas expertos en marketing digital y ventas conocen acerca de tus necesidades y comparten conocimientos probados para conseguir mejores resultados.</p>

                <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
                  Probar escala ahora
                </a>


              </div>

            </div>
            <div class="image col-md-12 col-lg-6">

              <div class="containerImage">
                <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/Group-1822.png" alt="" loading="lazy">
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

            <h2 class="primaryTitle blackColor">Clientes que <br> <strong>hacen crecer sus negocios</strong> <br> con <span class="orangeColor">escala</span>
            </h2>

          </div>

        </section>

        <section class="innerSectionElement sct2">

          <div class="groupElements row">

            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h2 class="secondaryTitle blackColor">Agencia de Publicidad</h2>
                  <span class="tag greenBlueColor">El salvador</span>
                  <p class="commonText grayColor"><strong>escala</strong> tiene el email builder más amigable que he utilizado en los últimos años, y su equipo está comprometido a mantener la plataforma en constante actualización en el dinámico mundo digital.</p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Publicidad-Comercial2-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Verónica Bolaños<br><span>Account Manager</span>
                    </h3>
                    <p class="commonText grayColor">Publicidad Comercial</p>
                  </div>

                </div>

              </div>
            </div>
            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h2 class="secondaryTitle blackColor">Agencia de Marketing</h2>
                  <span class="tag greenBlueColor">México</span>
                  <p class="commonText grayColor">
                    Primera vez que me atienden de esta manera y mi equipo y yo lo agradecemos enormemente. Además de tener una herramienta bien integrada y muy sencilla de utilizar, el acompañamiento del equipo es A1. La atención está cuando la necesitas, el nivel de seguimiento al trabajar juntos… ni siquiera con los de Facebook o Google tenemos un servicio similar. Felicidades porque tienen un equipo de trabajo increíble y todo hace que sean muchos los beneficios que <strong>escala</strong> le aporta a sus clientes.
                  <p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Huella-Studio-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Ernesto Valery y Edher Nieves <br> <span>Director Creativo</span>
                    </h3>
                    <p class="commonText grayColor">Huella Studio</p>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="groupElements row">
            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h2 class="secondaryTitle blackColor">Turismo</h2>
                  <span class="tag greenBlueColor">Venezuela</span>
                  <p class="commonText grayColor">“Yo ya había utilizado un CRM y otras plataformas que tienen más o menos la misma esencia. Encontrarme con <strong>escala</strong> fue importante porque es más completa. Tienes todo lo que necesitas, desde captar el interés de los clientes, hacer seguimiento, medir indicadores de desempeño de tu equipo de ventas, hasta estandarizar el proceso de la comunicación. Ahora que mi mercado se redujo por la pandemia, <strong>escala</strong> es sumamente oportuno. Además, estoy muy contenta por todo el apoyo que he recibido por el equipo de <strong>escala</strong>.”</p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Infinito-Producciones-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Michell Peláez <br> <span>Ejecutiva de cuentas corporativas</span>
                    </h3>
                    <p class="commonText grayColor">Infinito Producciones</p>
                  </div>

                </div>

              </div>
            </div>
            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h2 class="secondaryTitle blackColor">Agencia de Comunicaciones</h2>
                  <span class="tag greenBlueColor">Costa Rica</span>
                  <p class="commonText grayColor">La herramienta es muy amigable, y permite que la gestión pueda realizarla casi que cualquier persona con conocimientos básicos en plataformas digitales. <br>
                    El servicio es expedito y el equipo a cargo se preocupa por extender capacitaciones necesarias que garantizan que los equipos estén sacando el mayor provecho de la herramienta.<br>
                    La organización visual de la pantalla de entrada es muy intuitiva, esto permite la exploración y el autoaprendizaje de las diferentes variables que se pueden configurar en la plataforma.</p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Initiative-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Dayana Palacios <br> <span>Directora de medios y marketing digital</span>
                    </h3>
                    <p class="commonText grayColor">Initiative</p>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="groupElements row">
            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h2 class="secondaryTitle blackColor">Academia de Coaching</h2>
                  <span class="tag greenBlueColor">Estados Unidos</span>
                  <p class="commonText grayColor">¡¡¡Extraordinario equipo con conocimientos sólidos de la realidad de lanzamientos de iniciativas de aprendizaje y crecimiento!!! 🔥🔥🔥🔥👏👏👏👏🙌</p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Logo-ILC-Academy-1-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Fernando Celis <br> <span>CEO y Fundador</span>
                    </h3>
                    <p class="commonText grayColor">ILC Academy</p>
                  </div>

                </div>

              </div>
            </div>
            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">
                  <h2 class="secondaryTitle blackColor">Entretenimiento Deportivo</h2>
                  <span class="tag greenBlueColor">Venezuela</span>
                  <p class="commonText grayColor">Felicitaciones al equipo de <strong>escala</strong>, pues de verdad la plataforma me gusta bastante. Posee herramientas muy útiles y lo mejor es que es simple de manipular.</p>
                </div>
                <div class="referElements">
                  <div class="containerImage">

                    <img src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/05/Savage-Paintball-1.png" alt="" loading="lazy">

                  </div>

                  <div class="info">
                    <h3 class="tertiaryTitle blackColor">Felix Pacheco
                    </h3>
                    <p class="commonText grayColor">Savage Paintball</p>
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




{{--
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
  --}}


@endsection
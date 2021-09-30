
{{--
  Template Name: [B] Home
--}}



@extends('layouts.app')


@section('content')






<div id="homeBootstrap">

  <div class="sections">



    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol homeSection0',
     'title' => 'Genera más leads, <br class="space"> <span class="greenBlueColor">clientes y ventas</span>',
     'text' => 'Con Escala, la plataforma de <br> marketing digital y ventas más completa <br> y fácil de utilizar.',
     'textForm' => 'Empieza a probar Escala',
     'threeCol' => true,
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/am/andres-home1.png'),
    ) ;
    @endphp

    @header_t1( $parameters )

    @endheader_t1




    <section class="customSection sectionParent homeSection1">
      <div class="section-row">

        <section class="innerSectionElement row sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">Acelera el éxito <span class="greenBlueColor">de tu negocio</span></h2>


            <p class="primaryText grayColorTexts">
              <strong>Escala</strong> te permite implementar embudos de venta: <br> la estrategia probada para hacer crecer empresas de manera rentable, sostenible y escalable
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
                <img alt="Multiplica el interés
                por tus productos y servicios" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/beneficio_02.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h3 class="secondaryTitle"><span class="greenBlueColor">Multiplica el interés </span> <br class="space"> por tus productos y servicios</h3>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img alt="Cierra más ventas" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/beneficio_03.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h3 class="secondaryTitle"><span class="greenBlueColor">Cierra</span> más <br class="space"> ventas</h3>

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


    <section class="customSection sectionParent homeSection2">


        <div class="section-row">


          <section class="innerSectionElement sct1">


            <div class="containElements">



              <h2 class="primaryTitle blackColor">
                <span class="greenBlueColor">La plataforma todo-en-uno</span><br>
                de marketing digital y ventas
              </h2>
              <p class="primaryText grayColorTexts">
                En <strong>Escala</strong> tienes todas las herramientas <br> que necesitas integradas para impulsar tu éxito
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
                  <h3 class="secondaryTitle blackColor">Crea increíbles <br> páginas sin programar</h3>
                  <p class="primaryText  grayColorTexts">¡Y que queden hermosas!</p>
                  <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/landing-pages/">Conocer más</a>
                </div>

              </div>

              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Organiza tus contactos y gestiona procesos de venta" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_05.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">Organiza tus contactos y <br> gestiona procesos de venta</h3>
                  <p class="primaryText  grayColorTexts">Con un CRM sencillo de usar</p>
                  <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/crm-escala/">
                    Conocer más
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
                  <h3 class="secondaryTitle blackColor">Envía emails de marketing <br> profesionales</h3>
                  <p class="primaryText  grayColorTexts">Personalizados y masivos, sin caer <br> en la bandeja de SPAM</p>
                  <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/email/">
                    Conocer más
                  </a>
                </div>

              </div>

              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Multiplica tus visitas web con anuncios digitales" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_04.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">Multiplica tus visitas web <br> con anuncios digitales</h3>
                  <p class="primaryText  grayColorTexts">en Facebook, Instagram y Google</p>
                  <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/anuncios-digitales/">
                    Conocer más
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
                  <h3 class="secondaryTitle blackColor">Automatiza tareas y flujos <br> de comunicación</h3>
                  <p class="primaryText  grayColorTexts">Escala trabaja por ti 24/7</p>
                  <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/automatizacion/">
                    Conocer más
                  </a>
                </div>

              </div>




              <div class="col-md-12 col-lg-6 infoGroup">

                <div class="containerImage">
                  <img alt="Obtén métricas de marketing y ventas en tiempo real" src="{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/icono_06.svg" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">Obtén métricas de marketing <br> y ventas en  tiempo real</h3>
                  <p class="primaryText  grayColorTexts">con dashboards inteligentes</p>
                  <a class="hiperButtonGreenBlue" href="{!! App::setTypeUrl() !!}/analiticas/">
                    Conocer más
                  </a>
                </div>

              </div>





            </div>


          </section>

        </div>

    </section>


    <section class="customSection sectionParent homeSection3 fullWidth">

      <div style="background-image: url('{!! App::setTypeUrl() !!}/wp-content/uploads/2021/04/banner-3-1.png')" class="backgroundFull sct1">


        <div class="section-row">

          <div class="containElements">

            <h3 class="primaryTitle whiteText">Empieza a escalar tu negocio con éxito
            </h3>

            <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
              Probar Escala ahora
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
              5 ventajas de potenciar tu negocio con <span class="orangeColor">Escala</span>
            </h2>

          </div>

        </section>


        <section class="innerSectionElement sct2">
          <div class="groupElements">



              <div class="infoGroup">
                <div class="containerImage">
                  <img alt="Una herramientas muy amigable" src="{!! App::setFilePath('/assets/images/illustrations/others/advantage_1.png') !!}" alt="" loading="lazy">
                </div>



                </div>
              </div>

              <div class="infoGroup">
                <div class="containerImage">
                  <img alt="Un equipo de servicio
                  extraordinario y bien entrenado" src="{!! App::setFilePath('/assets/images/illustrations/others/advantage_2.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">Un equipo de servicio <br class="space"> extraordinario y bien entrenado</h3>
                  <p class="primaryText grayColorTexts">
                    Tienen un equipo atento <br class="space">
                    y disponible cuando lo necesitas
                    <br class="space">
                    <span class="greenBlueColor">
                      Michelle Palaez / Fundadora Infinito Producciones
                    </span>
                  </p>

                </div>
              </div>

              <div class="infoGroup">
                <div class="containerImage">
                  <img alt="No dependes de un equipo
                  técnico o de programación" src="{!! App::setFilePath('/assets/images/illustrations/others/advantage_3.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">No dependes de un equipo <br class="space"> técnico o de programación</h3>
                  <p class="primaryText grayColorTexts">
                    Cualquiera con nivel básico <br>
                    sabría utilizar escala. <br class="space">
                    <span class="greenBlueColor">
                      Verónica Bolaños / Account Manager, <br class="space"> Publicidad Comercial
                    </span>
                  </p>

                </div>
              </div>

              <div class="infoGroup">
                <div class="containerImage">
                  <img alt="Todas las funcionalidades
                  en un solo lugar" src="{!! App::setFilePath('/assets/images/illustrations/others/advantage_4.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">Todas las funcionalidades <br class="space"> en un solo lugar</h3>
                  <p class="primaryText grayColorTexts">
                    Escala programa las páginas por ti <br class="space">
                    <span class="greenBlueColor">
                      Michelle Palaez / Fundadora Infinito Producciones
                    </span>
                  </p>

                </div>
              </div>

              <div class="infoGroup">
                <div class="containerImage">
                  <img alt="Todo está 100% en español" src="{!! App::setFilePath('/assets/images/illustrations/others/advantage_5.png') !!}" alt="" loading="lazy">
                </div>

                <div class="containerElements">
                  <h3 class="secondaryTitle blackColor">
                    Todo está 100% en español
                  </h3>
                  <p class="primaryText grayColorTexts">
                    Finalmente un software donde la plataforma, <br class="space"> el servicio y la educación es en español
                    <br class="space">
                    <span class="greenBlueColor">
                      Verónica Bolaños / Account Manager, Publicidad Comercial
                    </span>
                  </p>

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


                <p class="primaryText blackColor3">

                  ¿No estás seguro de qué hacer o cómo avanzar? <br>
                Nuestros estrategas expertos en marketing digital y ventas <br> conocen acerca de tus necesidades y comparten conocimientos <br> probados para conseguir mejores resultados.

                </p>

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


    <section class="customSection sectionParent homeSection6">

      <div class="section-row">


        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">Clientes que hacen crecer <br> sus negocios con <span class="orangeColor">Escala</span>
            </h2>

          </div>

        </section>

        <section class="innerSectionElement sct2">

          <div class="groupElements row">

            <div class="testimonial col-md-12 col-lg-6 ">
              <div class="containElements">
                <div class="containInfo">

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
                  <h3 class="secondaryTitle blackColor">Agencia de Marketing</h3>
                  <span class="tag greenBlueColor">México</span>
                  <p class="commonText grayColorTexts">
                    “Son muchas herramientras integradas en un solo sitio, una herramienta muy <br> sencilla de utilizar y le da mucho beneficio al cliente. Nunca me habían <br> atendido de esta manera en ningún tipo de plataforma similar. Primera vez <br> que me atienden de esta manera y agradecidos enormemente. Felicidades <br> porque tienen un equipo de trabajo increíble.”
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
                  <h3 class="secondaryTitle blackColor">Turismo</h3>
                  <span class="tag greenBlueColor">Venezuela</span>
                  <p class="commonText grayColorTexts">
                    “Yo ya había utilizado un CRM y otras plataformas que tienen más o menos <br> la misma esencia. Encontrarme con Escala fue importante porque es más <br> completa. Tienes todo lo que necesitas, desde captar el interés de los <br>  clientes, hacer seguimiento, medir indicadores de desempeño de tu equipo <br> de ventas, hasta estandarizar el proceso de la comunicación. Ahora que mi <br> mercado se redujo por la pandemia, Escala es sumamente oportuno. <br> Además, estoy muy contenta por todo el apoyo que he recibido por el <br> equipo de Escala.”
                  </p>
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
                  <h3 class="secondaryTitle blackColor">Agencia de Comunicaciones</h3>
                  <span class="tag greenBlueColor">Costa Rica</span>
                  <p class="commonText grayColorTexts">
                    La herramienta es muy amigable, y permite que la gestión pueda realizarla <br> casi que cualquier persona con conocimientos básicos en plataformas <br> digitales. <br class="space">
                    El servicio es expedito y el equipo a cargo se preocupa por extender <br> capacitaciones necesarias que garantizan que los equipos estén sacando <br> el mayor provecho de la herramienta. <br class="space">
                    La organización visual de la pantalla de entrada es muy intuitiva, esto <br> permite la exploración y el autoaprendizaje de las diferentes variables que <br> se pueden configurar en la plataforma.
                  </p>
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
                  <h3 class="secondaryTitle blackColor">Academia de Coaching</h3>
                  <span class="tag greenBlueColor">Estados Unidos</span>
                  <p class="commonText grayColorTexts">
                    ¡¡¡Extraordinario equipo con conocimientos sólidos de la realidad <br>
                    de lanzamientos de iniciativas de aprendizaje y crecimiento!!!
                    <br class="space">
                    🔥🔥🔥🔥👏👏👏👏🙌

                  </p>
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
                  <h3 class="secondaryTitle blackColor">Entretenimiento Deportivo</h3>
                  <span class="tag greenBlueColor">Venezuela</span>
                  <p class="commonText grayColorTexts">
                    Felicitaciones al equipo de Escala, pues de verdad la plataforma me <br> gusta bastante. Posee herramientas muy útiles y lo mejor e  que es <br> simple de manipular.
                  </p>
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

  </section>



  @php
 $parameters = array(
   'classSection' => 'homeSection7',
   'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
   'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png')
   ) ;
   @endphp
@contain_FAQ_T1( $parameters )

@endcontain_FAQ_T1



<section class="customSection sectionParent homeSection8 fullWidth">



    <div class="section-row">

      <div class="containElements">

        <h3 class="primaryTitle whiteText">
          Comienza a generar más leads, clientes y ventas
        </h3>

        <a href="#lead-form" class="goToHash primaryButton hoverInEffect">
          Prueba Escala ahora
        </a>


      </div>




    </div>



</section>


</div>

</div>

</div>





@endsection

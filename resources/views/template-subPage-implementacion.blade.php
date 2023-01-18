{{-- Template Name: [B] Sub pagina - Implementación --}}

@extends('layouts.app')
@section('content')
    <div id="implementacionBootstrap">
        <div class="sections">

            {{-- <section class="customSection sectionParent implementacionSection0">
                <div class="section-row">
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="image col-md-12 col-lg-4">
                                <div class="containerImage">
                                    <img alt="Escala implementación" src="{!! App::setFilePath('/assets/images/person/home_hombre-lentes_silla-chat 1.png') !!}" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="info col-md-12 col-lg-8">
                                <div class="containElements">
                                    <h1 class="primaryTitle">
                                        CRM + Expertos = <br class="space">
                                        <span class="blueLightColor11">Implementación exitosa</span>
                                    </h1>
                                    <p class="text">
                                        Recibe la guía estratégica y técnica que <br class="space">
                                        necesitas para potenciar el crecimiento de <br class="space">
                                        tu empresa con Escala.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section> --}}


            @php
 $parameters = array(
  'type' => 'backgroundColor',
  'classSection' => 'implementacionSection0',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'title' => '
  <small>
    Nuestro gran diferenciador
    </small>
    <br class="space">
    <span style="color: #D6F4F6">Te guiamos a implementar</span> <br class="space">
    Escala exitosamente
    ',
'typeVideo' =>  'localvideo',
  'videoEmbed' =>  App::setFilePath('/assets/videos/video escala optimizado.mp4'),
  'videoCover' => App::setFilePath('/assets/images/person/Portadas-de-videos_Mesa-de-trabajo.jpg'),
  'text' => null,
  'enableButton' => false,
  'urlButton' => '#lead-form',
  'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
  'textButton' => 'Recibe un demo',
  'side' => 'right',
 ) ;
@endphp

@contain_text_video_T1( $parameters )
@endcontain_text_video_T1


            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'implementacionSection1',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '
                      Acompañamiento <span class="greenBlueColor">experto 1:1</span>
                      ',
                    'img' => App::setFilePath('/assets/images/person/implementacion_banner_principal-1.png'),
                    'text' => '
                        En Escala te acompañaremos desde el primer día asignándote <br class="desktopTabletElement">
                        un gerente de cuenta especializado en marketing digital, ventas <br class="desktopTabletElement">
                        y fidelización para que te guíe a conseguir tus objetivos con <br class="desktopTabletElement">
                        nuestra plataforma. Desarrolla un plan personalizado para aterrizar tu <br class="desktopTabletElement">
                        estrategia e implementar exitosamente.
                    ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ];
            @endphp

            @contain_text_image_T1($parameters)
            @endcontain_text_image_T1

            <section class="customSection sectionParent implementacionSection2">
                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="containElements">
                            <h2 class="primaryTitle blackColor">
                                Cómo funciona: <br class="space">
                                <span class="greenBlueColor">4 Fases que culminas a tu ritmo</span>
                            </h2>
                            <p class="primaryText grayColorTexts desktopElement">
                                Una vez priorices tu objetivo y definas los KPI’s para medir tu “éxito”, tu gerente te apoyará a definir un cronograma de acciones para que tú y tu equipo <br class="desktopTabletElement">
                                puedan implementar su estrategia, logrando sus metas. Durante el proceso, tienes hasta 8 horas de sesiones privadas con tu gerente para que <br class="desktopTabletElement">
                                programes según tus necesidades, asegurándote maximizar el uso de nuestras herramientas.

                            </p>
                            <p class="primaryText grayColorTexts mobileElement">
                                Una vez priorices tu objetivo y definas los KPI’s <br class="tabletElement">
                                para medir tu “éxito”, tu gerente te apoyará a <br class="tabletElement">
                                definir un cronograma de acciones para que tú y tu <br class="tabletElement">
                                equipo puedan implementar su estrategia, logrando <br class="tabletElement">
                                sus metas. Durante el proceso, tienes hasta 8 horas <br class="tabletElement">
                                de sesiones privadas con tu gerente para que programes <br class="tabletElement">
                                según tus necesidades, asegurándote maximizar el uso de <br class="tabletElement">
                                nuestras herramientas.
                            </p>
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElements desktopElement">
                            {{-- <div class="image">
                                <div class="containerImage">
                                    <img alt="Escala implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/implementacion_tabla.png') !!}" alt="" loading="lazy">
                                </div>
                            </div> --}}

                            <table class="tableDesktop">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">
                                        <span class="headerTitle">
                                            Objetivo
                                        </span>
                                    </th>
                                    <th class="center" scope="col">
                                        <span class="headerTitle">
                                            Fase 1 <br class="space">
                                            Planificación
                                        </span>
                                    </th>
                                    <th class="center" scope="col">
                                        <span class="headerTitle">
                                            Fase 2 <br class="space">
                                            Configuración
                                        </span>
                                    </th>
                                    <th class="center" scope="col">
                                        <span class="headerTitle">
                                            Fase 3 <br class="space">
                                            Producción
                                        </span>
                                    </th>
                                    <th class="center" scope="col">
                                        <span class="headerTitle">
                                            Fase 4 <br class="space">
                                            Optimización
                                        </span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td  scope="row">
                                        <span class="numer">
                                            1
                                        </span>
                                    </td>
                                    <td>
                                        <span class="title">
                                            Generar <br class="space">
                                            leads online
                                        </span>
                                        <br class="space">
                                        <a target="_blank" href="https://academy.escala.com/plan-generacion-leads" class="example">
                                            Ver ejemplo
                                        </a>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Entendimiento del negocio y <br class="space">
                                            metas de marketing con <br class="space">
                                            Escala
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Dominios conectados y <br class="space">
                                            formularios integrados
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Landing page creada y <br class="space">
                                            publicada <br class="space">
                                            Campaña de anuncios <br class="space">
                                            creada y lanzada
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Análisis y recomendaciones <br class="space">
                                            para optimizar leads
                                        </p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  scope="row">
                                        <span class="numer">
                                            2
                                        </span>
                                    </td>
                                    <td>
                                        <span class="title">
                                            Optimizar operaciones <br class="space">
                                            de venta o servicio
                                        </span>
                                        <br class="space">
                                        <a target="_blank" href="https://academy.escala.com/plan-optimizacion/" class="example">
                                            Ver ejemplo
                                        </a>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Entendimiento del negocio y <br class="space">
                                            metas de venta o servicio <br class="space">
                                            con Escala
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Base de datos importada y <br class="space">
                                            organizada
                                            <br class="space"><br class="space">
                                            Embudo personalizado
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Fuerza de ventas entrenada <br class="space">
                                            y ganando oportunidades
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Análisis y recomendaciones <br class="space">
                                            para optimizar ventas
                                        </p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  scope="row">
                                        <span class="numer">
                                            3
                                        </span>
                                    </td>
                                    <td>
                                        <span class="title">
                                            Automatizar <br class="space">
                                            comunicaciones
                                        </span>
                                        <br class="space">
                                        <a target="_blank" href="https://academy.escala.com/plan-automatizacion/" class="example">
                                            Ver ejemplo
                                        </a>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Entendimiento del negocio y <br class="space">
                                            metas de comunicación con <br class="space">
                                            Escala
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Cuentas de email conectadas <br class="space">
                                            y remitentes creados
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Plantillas de email creadas
                                            <br class="space"><br class="space">
                                            Flujos automáticos creados y <br class="space">
                                            habilitados
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text">
                                            Análisis y recomendaciones <br class="space">
                                            para optimizar <br class="space">
                                            comunicaciones
                                        </p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>


                        </div>
                        <div class="containElements mobileElement">

                            <div class="tableImplementMobile">

                                <div class="fase">

                                    <h3 class="secondaryTitle">
                                        <span class="numer">
                                            1
                                        </span>
                                        <span class="title">
                                            Generar <br class="space">
                                            leads online
                                        </span>
                                    </h3>

                                    <a target="_blank" href="https://academy.escala.com/plan-generacion-leads" class="example">
                                        Ver ejemplo
                                    </a>

                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 1
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Planificación
                                        </h4>
                                        <p class="text">
                                            Entendimiento del negocio y <br class="space">
                                            metas de marketing con Escala
                                        </p>
                                    </div>
                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 2
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Configuración
                                        </h4>
                                        <p class="text">
                                            Dominios conectados y <br class="space">
                                            formularios integrados
                                        </p>
                                    </div>
                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 3
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Producción
                                        </h4>
                                        <p class="text">
                                            Landing page creada y publicada <br class="space">
                                            Campaña de anuncios creada y lanzada
                                        </p>
                                    </div>
                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 4
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Optimización
                                        </h4>
                                        <p class="text">
                                            Análisis y recomendaciones <br class="space">
                                            para optimizar leads
                                        </p>
                                    </div>

                                </div>

                                <div class="fase">

                                    <h3 class="secondaryTitle">
                                        <span class="numer">
                                            2
                                        </span>
                                        <span class="title">
                                            Optimizar operaciones <br class="space">
                                            de venta o servicio
                                        </span>
                                    </h3>

                                    <a target="_blank" href="https://academy.escala.com/plan-optimizacion/" class="example">
                                        Ver ejemplo
                                    </a>

                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 1
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Planificación
                                        </h4>
                                        <p class="text">
                                            Entendimiento del negocio y metas <br class="space">
de venta o servicio con Escala
                                        </p>
                                    </div>
                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 2
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Configuración
                                        </h4>
                                        <p class="text">
                                            Base de datos importada y organizada. <br class="space">
Embudo personalizado
                                        </p>
                                    </div>
                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 3
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Producción
                                        </h4>
                                        <p class="text">
                                            Fuerza de ventas entrenada <br class="space">
y ganando oportunidades
                                        </p>
                                    </div>
                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 4
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Optimización
                                        </h4>
                                        <p class="text">
                                            Análisis y recomendaciones <br class="space">
para optimizar ventas
                                        </p>
                                    </div>

                                </div>

                                <div class="fase">

                                    <h3 class="secondaryTitle">
                                        <span class="numer">
                                            3
                                        </span>
                                        <span class="title">
                                            Automatizar <br class="space">
comunicaciones
                                        </span>
                                    </h3>

                                    <a target="_blank" href="https://academy.escala.com/plan-automatizacion/" class="example">
                                        Ver ejemplo
                                    </a>

                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 1
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Planificación
                                        </h4>
                                        <p class="text">
                                            Entendimiento del negocio y metas <br class="space">
de comunicación con Escala
                                        </p>
                                    </div>
                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 2
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Configuración
                                        </h4>
                                        <p class="text">
                                            Cuentas de email conectadas y <br class="space">
remitentes creados
                                        </p>
                                    </div>
                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 3
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Producción
                                        </h4>
                                        <p class="text">
                                            Plantillas de Email creadas. <br class="space">
Flujos automáticos creados y habilitados
                                        </p>
                                    </div>
                                    <div class="group">
                                        <div class="tagFase">
                                            <span>
                                                Fase 4
                                            </span>
                                        </div>
                                        <h4 class="title">
                                            Optimización
                                        </h4>
                                        <p class="text">
                                            Análisis y recomendaciones para <br class="space">
optimizar comunicaciones
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </section>
                    <section class="innerSectionElement sct3">
                        <div class="containElements">
                            <h2 class="primaryTitle blackColor">
                                ¿La meta?
                            </h2>
                            <p class="primaryText grayColorTexts">
                                Que tú y tu equipo se beneficien del valor de Escala lo más pronto posible <br class="desktopTabletElement">
                                y desarrollen habilidades que los conviertan en Escala Pros <br class="desktopTabletElement">
                            </p>

                            {{-- <a class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                ¡Recibe un demo!
                            </a> --}}
                        </div>
                    </section>
                </div>
            </section>

            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'implementacionSection3',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/illustrations/team/implementacion_plan-personalizado.png'),
                    'title' => '
                    Tu plan personalizado <br class="space">
                    <span class="greenBlueColor">de implementación</span>
                  ',
                    'text' => '
                Al momento de diseñar tu plan estratégico y táctico con <br class="desktopTabletElement">
                tu gerente, tomamos en cuenta los siguientes factores:
                <br class="space"><br class="space">
                <ul class="text">
                    <li>Tu objetivo prioritario con Escala</li>
                    <li>Las características de tu producto o servicio</li>
                    <li>Tus procesos y herramientas tecnológicas actuales</li>
                    <li>El perfil de tu cliente ideal
                    <li>El tamaño y la estructura de tu organización</li>
                    <li>La experiencia y disponibilidad de horas de tu equipo</li>
                    <li>Las características de la suscripción Escala que adquiriste</li>
                </ul>
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'right',
                ];
            @endphp

            @contain_text_image_T1($parameters)
            @endcontain_text_image_T1

            {{-- @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'implementacionSection4',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'img' => App::setFilePath('/assets/images/illustrations/team/implementacion_plan.png'),
                    'title' => '
                        <span class="greenBlueColor">¿Quieres saber qué contiene un <br class="desktopTabletElement"></span>
                        plan de implementación?
                  ',
                    'text' => '
                    Revisa estos ejemplos para entender qué puede <br class="desktopTabletElement">
                    contener tu plan de implementación:
                    <br class="space"><br class="space">
                    <a target="_blank" href="https://academy.escala.com/plan-generacion-leads/" class="hiperButtonGreenBlue">
                        Plan de generación de leads
                    </a>
                    <br class="space"><br class="space">
                    <a target="_blank" href="https://academy.escala.com/plan-optimizacion/" class="hiperButtonGreenBlue">
                        Plan de optimización
                    </a>
                    <br class="space"><br class="space">
                    <a target="_blank" href="https://academy.escala.com/plan-automatizacion/" class="hiperButtonGreenBlue">
                        Plan de automatización
                    </a>
                    <br class="space"><br class="space">
                    Recuerda que tu plan es personalizado y estará ajustado <br class="desktopTabletElement">
                    a los objetivos y necesidades de tu empresa.
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ];
            @endphp

            @contain_text_image_T1($parameters)
            @endcontain_text_image_T1 --}}

            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'implementacionSection5',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '
                <span class="greenBlueColor">La dinámica con tu gerente:</span> <br class="space">
                potencia tu progreso
              ',
                    'img' => App::setFilePath('/assets/images/illustrations/others/flyweel_implementacion.png'),
                    'text' => '
                Experto en Escala y cómo utilizar la plataforma para generar demanda, <br class="desktopTabletElement">
                vender y fidelizar clientes – tu gerente de cuentas es un guía estratégico <br class="desktopTabletElement">
                y de proyecto que simplifica la implementación, acelera tu aprendizaje, <br class="desktopTabletElement">
                motiva tu progreso y vela porque se usen efectivamente las herramientas <br class="desktopTabletElement">
                para impulsar el crecimiento de tu negocio.
            ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Recibe un demo',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                    'side' => 'left',
                ];
            @endphp

            @contain_text_image_T1($parameters)
                |
            @endcontain_text_image_T1


            <section class="customSection sectionParent implementacionSection6">
                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle blackColor">
                                <span class="blueLightColor11">Recursos adicionales</span> aceleran tu aprendizaje
                            </h2>

                        </div>

                    </section>

                    <section class="innerSectionElement sct2">

                        <div class="containElements">


                            <div class="image">
                                <div class="containerImage">
                                    <img alt="Escala implementación" src="{!! App::setFilePath('/assets/images/illustrations/otto/implementacion_otto_capacitaciones-1.png') !!}" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="info">

                                <h3 class="secondaryTitle">
                                    Capacitaciones en vivo. Horas ilimitadas
                                </h3>
                                <p class="text">
                                    Participa y descubre, a través de un caso práctico, cómo <br
                                        class="desktopTabletElement">
                                    utilizar cada herramienta para conseguir resultados.
                                </p>
                            </div>

                        </div>

                    </section>
                    <section class="innerSectionElement sct3">

                        <div class="containElements">


                            <div class="image">
                                <div class="containerImage">
                                    <img alt="Escala implementación" src="{!! App::setFilePath('/assets/images/illustrations/otto/implementacion_otto_capacitaciones-2.png') !!}" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="info">

                                <h3 class="secondaryTitle">
                                    Educación online 24/7
                                </h3>
                                <p class="text">
                                    Cuenta con una librería de capacitaciones <br class="desktopTabletElement">
                                    grabadas, más de cien artículos y <br class="desktopTabletElement">
                                    videotutoriales para aprender a tu ritmo.
                                </p>
                            </div>

                        </div>

                    </section>
                    <section class="innerSectionElement sct4">

                        <div class="containElements">


                            <div class="image">
                                <div class="containerImage">
                                    <img alt="Escala implementación" src="{!! App::setFilePath('/assets/images/illustrations/otto/implementacion_otto_capacitaciones-3.png') !!}" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="info">

                                <h3 class="secondaryTitle">
                                    Chats e email de soporte
                                </h3>
                                <p class="text">
                                    ¿Necesitas apoyo con un tema técnico o con una breve <br class="desktopTabletElement">
                                    duda sobre la plataforma? ¡Nuestro equipo de soporte <br class="desktopTabletElement">
                                    está para atenderte!
                                </p>
                            </div>

                        </div>

                    </section>

                </div>
            </section>

            {{-- aca testimoniales --}}

            <section class="customSection sectionParent implementacionSection7">

                <div class="section-row">

                  <section class="innerSectionElement sct1">

                    <div class="containElements">

                      <h2 class="primaryTitle blackColor">
                        <span class="greenBlueColor">En Escala el servicio</span> hace la diferencia
                      </h2>

                    </div>

                  </section>

                  <section class="innerSectionElement sct2">

                    <div class="groupElements row">


                      <div id="carousel-trustPilot" class="carousel slide" data-bs-ride="carousel">


                        <div class="carousel-inner"  role="listbox">

                            <div class="carousel-item active">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustImple (1).png') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>

                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustImple (2).png') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>

                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustImple (3).png') !!}" alt="" loading="lazy">

                                      </div>

                                    </div>

                                  </div>


                                </div>
                              </div>
                            </div>


                        </div>


                        <ol class="carousel-indicators">

                          <button type="button" data-bs-target="#carousel-trustPilot" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carousel-trustPilot" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          {{-- <button type="button" data-bs-target="#carousel-trustPilot" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}

                        </ol>


                      </div>

                    </div>



                  </section>



                </div>
            </section>


            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'implementacionSection8',
                    'enableTitle' => true,
                    'titlePrincipal' => '
                        <span class="greenBlueColor">
                            ¿Necesitas más horas de acompañamiento <br class="space">
                            durante o después del onboarding? <br class="space">
                        </span>
                        Adquiere servicios profesionales
                    ',
                    'subTitlePrincipal' => null,
                    'overlay' => true,
                    'overlayImage' => App::setFilePath('/assets/images/overlays/planets_overlay_home.png'),
                    'enableButton' => false,
                    'elements' => [
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/implementacion-servicios-1.png'),
                            'title' => '
                            Implementación
                          ',
                            'text' => '
                            ¿No tienes tiempo o necesitas mayor apoyo <br class="desktopTabletElement">
                            implementando acciones en Escala? Contrata <br class="desktopTabletElement">
                            servicios de migración, diseño de plantillas, <br class="desktopTabletElement">
                            organización de contactos y más.
                          ',
                            'enableButton' => false,
                            'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                            'urlButton' => '#',
                            'textButton' => 'Aprender más'
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/implementacion-servicios-2.png'),
                            'title' => '
                            Capacitaciones
                          ',
                            'text' => '
                            Brindamos entrenamiento especializado a tu <br class="desktopTabletElement">
                            equipo en la plataforma, nuestra Filosofía de <br class="desktopTabletElement">
                            éxito y mejores prácticas de marketing, <br class="desktopTabletElement">
                            ventas y fidelización.
                          ',
                          'enableButton' => false,
                            'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                            'urlButton' => '#',
                            'textButton' => 'Aprender más'
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/ajedrez.png'),
                            'title' => '
                            Consultoría
                          ',
                            'text' => '
                            Estrategas de marketing, ventas y fidelización <br class="desktopTabletElement">
                            analizan tus resultados y comparten <br class="desktopTabletElement">
                            sugerencias para optimizarlos.
                            <br class="desktopElement"><br class="desktopElement">
                            ',
                            'enableButton' => false,
                            'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                            'urlButton' => '#',
                            'textButton' => 'Aprender más'
                        ],
                    ],
                ];
            @endphp
            @contain_5_cards_T1($parameters)
            @endcontain_5_cards_T1


  @php
  $escalaUrl = 'https://escala.com';
  $items = [
      [
          'type' => 'master',
          'title' => '¿De qué trata el servicio de implementación Escala?',
          'text' => '
            Con el servicio de implementación recibes acompañamiento personalizado de un Gerente de Cuenta asignado para que, desde el día 1, <br class="desktopTabletElement">
            consigas más eficientemente tus objetivos con Escala. <br class="space">
            Juntos desarrollan un plan personalizado para aterrizar e implementar exitosamente tu estrategia en la plataforma.
          '
      ],
      [
          'type' => 'master',
          'title' => '¿Cómo es el proceso de implementación?',
          'text' => '
            El proceso de implementación de Escala consta de 4 fases que tú y tu equipo culminan a su propio ritmo bajo la guía de su Gerente de <br class="desktopTabletElement">
            Cuenta, un especialista en marketing digital y ventas con experticia en el software de Escala.
            <br class="space"><br class="space">
            <p class="text"><strong>Fase 1 Planificación</strong></p>
            <br class="space">
            <ul style="list-style: disc; padding-left: 20px">
            <li>El Gerente de Cuenta entiende a mayor profundidad tu negocio, objetivos, necesidades y recursos disponibles.</li>
            <li>Se crea un Plan de Implementación Personalizado con acciones, tiempos y responsables claros para los siguientes meses con Escala.</li>
            <li>Se definen las primeras tareas a ejecutar en la plataforma y se acuerdan las próximas sesiones con el Gerente de Cuenta y los <br class="desktopTabletElement"> especialistas pertinentes del equipo de servicio de Escala (Soporte, diseño de plantillas, migración, etc.).</li>
            </ul>
            <br class="space"><br class="space">
            <p class="text"><strong>Fase 2 Configuración</strong></p>
            <br class="space">
            <ul style="list-style: disc; padding-left: 20px">
            <li>Si lo necesitas, nuestro equipo de soporte te apoya a conectar cuentas de email, cuentas publicitarias y dominios de página propios.</li>
            <li>Tu Gerente de Cuenta te guía a personalizar el CRM según los requerimientos de tu negocio y te apoyamos a migrar activos digitales <br class="desktopTabletElement"> como tu base de datos, formularios y automatizaciones.</li>
            <li>También podrás añadir miembros claves de tu equipo como usuarios de la plataforma para que la usen de acuerdo a sus funciones.</li>
            <li>Ten en cuenta que las fases 1 y 2 suelen culminarse en un periodo máximo de 2 semanas, siempre que brindes la información <br class="desktopTabletElement"> necesaria y trabajes en conjunto con tu Gerente de Cuenta.</li>
            </ul>
            <br class="space"><br class="space">
            <p class="text"><strong>Fase 3 Producción</strong></p>
            <br class="space">
            <ul style="list-style: disc; padding-left: 20px">
                <li>Tú y tu equipo crearán piezas (landing pages, anuncios, plantillas de email), programarán automatizaciones y desarrollarán <br class="desktopTabletElement"> habilidades para empezar a generar leads y ventas con Escala.</li>
                <li>Tu Gerente de Cuenta te guía para que segmentes y organices tu base de datos, implementes mejores prácticas al crear campañas <br class="desktopTabletElement"> de marketing, y entrenes a tu equipo comercial y/o de servicio para que usen efectivamente el CRM.</li>
                <li>Usualmente, esta es esta es la fase que tomará un poco más de tiempo.</li>
            </ul>
            <br class="space"><br class="space">
            <p class="text"><strong>Fase 4 Optimización</strong></p>
            <br class="space">
            <ul style="list-style: disc; padding-left: 20px">
                <li>Después de una o dos semanas de activar tu campaña y empezar a vender con Escala, podrás revisar resultados con tu Gerente de <br class="desktopTabletElement"> cuenta gracias a los Dashboards y métricas que brinda Escala.</li>
                <li>Juntos identificarán factores de éxito, oportunidades de mejora, y próximas acciones para continuar crecimiento con Escala.</li>
            </ul>
          '
      ],
      [
          'type' => 'master',
          'title' => '¿Cuántas horas tengo de acompañamiento con mi Gerente de Cuenta?',
          'text' => '
          <ul style="list-style: disc; padding-left: 20px">
            <li><strong>Durante el período de Implementación</strong> <br class="space">
            Usualmente, tendrás 8 horas disponibles con tu Gerente de Cuenta para culminar la implementación. Estas horas las consumes a tu <br class="desktopTabletElement"> propio ritmo, en un máximo de 3 meses.
            <br class="space">
            <br class="space">
            Dependiendo de la complejidad del negocio, el progreso y compromiso de tu equipo, pueden recibir hasta 15 horas de acompañamiento <br class="desktopTabletElement"> en el período de implementación. Esto lo acuerdas con tu Gerente de Cuenta y Escala se reserva el derecho de aprobar o no la extensión.</li>
            <br class="space">
            <li><strong>Posterior a la Implementación</strong> <br class="space">
            Una vez terminen las 4 fases, tienes 1 hora de acompañamiento con tu gerente de cuenta al mes y contactos ad hoc.</li>
            <br class="space">
            <li><strong>Horas extras Equipo de Servicio</strong> <br class="space">
            Además de tu gerente de cuentas, en Escala cuentas con entrenadores durante capacitaciones en vivo semanales que puedes atender <br class="desktopTabletElement"> ilimitadamente y representantes de servicio al cliente por chat en plataforma, email y WhatsApp.</li>
          </ul>

          '
        ],
        [
          'type' => 'master',
          'title' => '¿Qué pasa después de los 3 meses de implementación?',
          'text' => '
          <ul style="list-style: disc; padding-left: 20px">
            <li>Podrás comunicarte con tu Gerente de Cuenta y tendrás una hora al mes para revisar tus actividades, planificar tus nuevos proyectos, <br class="desktopTabletElement"> implementar nuevas funcionalidades y más.</li>
            <li>Tendrás la posibilidad de asistir a capacitaciones en vivo con expertos, en las que podrás participar todas las veces que quieras.</li>
            <li>Si tú y/o tu equipo llegan a necesitar mayor apoyo, puedes contratar servicios profesionales adicionales de consultoría, diseño, <br class="desktopTabletElement"> implementación y capacitación.</li>
          </ul>
          '
        ],
        [
          'type' => 'master',
          'title' => '¿Las piezas son elaboradas por mi equipo o Escala lo hace por nosotros?',
          'text' => '
            En Escala hay plantillas tanto de landing pages como de emails. Tu equipo puede tomar cualquier diseño de nuestra galería de plantillas, <br class="desktopTabletElement">
            modificar muy fácilmente el texto que deseen y publicarlas, sin necesitar un equipo de programación.
            <br class="space"><br class="space">
            De necesitar mayor apoyo, puedes contratar a nuestro equipo de diseño para recibir plantillas personalizadas y maquetadas en Escala, <br class="desktopTabletElement">
            alineadas a tu marca.
            <br class="space"><br class="space">
            <p class="text">
                <strong>Para mas información visita:</strong> <a class="hiperButtonGreenBlueT2" href="https://academy.escala.com/servicio-de-diseno">https://academy.escala.com/servicio-de-diseno</a>
            </p>
          '
        ],
        [
          'type' => 'master',
          'title' => '¿Cómo funciona el servicio de plantillas personalizadas?',
          'text' => '
            Sigue los pasos para obtener el diseño de plantillas <br class="desktopTabletElement">
            personalizadas que se adapten a los objetivos de tu empresa:
            <br class="space">
            <br class="space">
            <ul style="list-style: disc; padding-left: 20px">
                <li><strong>Cotiza:</strong> Conversa con tu asesor, gerente de cuenta o representante de servicio sobre tus necesidades y recibe una inversión estimada.</li>
                <br class="space">
                <li><strong>Contrata:</strong> Invierte, acuerda los términos de servicio y recibirás un email con la información.</li>
                <br class="space">
                <li><strong>Brief:</strong> Completa los campos solicitados y compártenos los materiales que necesitamos para crear tus plantillas.</li>
                <br class="space">
                <li><strong>Recibe:</strong> Te entregamos las plantillas maquetadas en Escala, máximo 1 semana después de haber recibido el brief completo.</li>
            </ul>
            <br class="space"><br class="space">
            <p class="text">
                <strong>Para mas información visita:</strong> <a class="hiperButtonGreenBlueT2" href="https://academy.escala.com/servicio-de-diseno">https://academy.escala.com/servicio-de-diseno</a>
            </p>
          '
        ],
        [
          'type' => 'master',
          'title' => '¿Cuánto cuesta el paquete de plantillas personalizadas?',
          'text' => '
            Las plantillas personalizadas tienen un valor adicional dependiendo del servicio que solicites. <br class="space">
            Los precios de las plantillas pueden variar según el brief y los requerimientos de cada cliente.
            <br class="space"><br class="space">
            <ul style="list-style: disc; padding-left: 20px">
                <li><strong>Plantillas de landing pages:</strong> Sualmente, las plantillas de landing pages requieren una inversión de <strong>USD 100 / paquete.</strong></li>
                <li><strong>Plantillas de email:</strong> Las plantillas de email suelen tener un precio de <strong>USD 80 / paquete.</strong></li>
                <li><strong>Plantillas de email y landing pages:</strong> Si requieres ambas al mismo tiempo, ofrecemos un <strong>paquete por USD 150.</strong></li>
            </ul>
            <br class="space"><br class="space">
            <p class="text">
                <strong>Para mas información visita:</strong> <a class="hiperButtonGreenBlueT2" href="https://academy.escala.com/servicio-de-diseno">https://academy.escala.com/servicio-de-diseno</a>
            </p>
          '
        ],
        [
          'type' => 'master',
          'title' => '¿Qué hago en los encuentros con mi gerente de cuenta luego del período de <br class="desktopTabletElement"> implementación?',
          'text' => '
            La fase de optimización es extendida; esto quiere decir que mes a mes podrás analizar con tu Gerente de Cuenta qué hacer para mejorar <br class="desktopTabletElement">
            tus resultados y optimizar el uso de la plataforma.
            <br class="space"><br class="space">
            También puedes pedirle apoyo en planificar acciones según tus metas de negocio, incorporar nuevas estrategias, o bien, pedirle asesoría <br class="desktopTabletElement">
            acerca de cómo sacarle provecho a otras herramientas de Escala.
          '
      ]

  ];


   $parameters = array(
     'classSection' => 'implementacionSection9',
     'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
     'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
     'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
     'items' => $items
     ) ;
     @endphp
  @contain_FAQ_T1( $parameters )
  @endcontain_FAQ_T1


            <section class="customSection sectionParent implementacionSection10 fullWidth">

                <img src="{!! App::setFilePath('/assets/images/overlays/escala_galaxia_fondo.png') !!}" alt="" class="backOverlay">

                <div class="section-row">

                    <div class="containElements">

                        <div class="image">

                            <div class="containerImage">

                                <img src="{!! App::setFilePath('/assets/images/illustrations/team/implementacion-banner_astronautas-1.png') !!}" alt="" loading="lazy">

                            </div>

                        </div>

                        <div class="info">

                            <h3 class="primaryTitle">
                                ¿Listo para subir a bordo? <br class="space">
                                <span class="greenBlueColor">
                                    Nuestro equipo está preparado <br class="space">
                                    para acompañarte
                                </span>
                            </h3>

                            <a class="secondaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Solicitar Demo
                            </a>

                        </div>



                    </div>

                </div>

            </section>




        </div>
    </div>

@endsection

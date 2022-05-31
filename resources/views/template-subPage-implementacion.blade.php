{{-- Template Name: [B] Sub pagina - Implementación --}}

@extends('layouts.app')
@section('content')
    <div id="implementacionBootstrap">
        <div class="sections">

            <section class="customSection sectionParent implementacionSection0">
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
            </section>


            @php
                $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'implementacionSection1',
                    'enableTitle' => false,
                    'titlePrincipal' => null,
                    'subTitlePrincipal' => null,
                    'title' => '
                      Te guiamos <span class="greenBlueColor">paso a paso</span>
                      ',
                    'img' => App::setFilePath('/assets/images/person/implementacion_banner_principal-1.png'),
                    'text' => '
                        En Escala te acompañaremos desde el primer día asignándote <br class="desktopTabletElement">
                        un gerente de cuenta especializado en marketing digital, ventas <br class="desktopTabletElement">
                        y fidelización para que te guíe a conseguir tus objetivos con <br class="desktopTabletElement">
                        Escala.  Desarrolla un plan personalizado para aterrizar tu <br class="desktopTabletElement">
                        estrategia e implementar exitosamente.
                    ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Prueba Gratis',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
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
                                Una vez priorices tu objetivo y definas los KPI’s para medir tu “éxito”, tu gerente te apoya a definir un cronograma de acciones que tú y tu equipo <br class="desktopTabletElement">
                                necesitan implementar en la plataforma para lograr sus metas. Durante el proceso, tienes hasta 8 horas de sesiones privadas con tu gerente que <br class="desktopTabletElement">
                                programas según lo necesiten para asegurarse que estén progresando y utilizando las herramientas efectivamente.

                            </p>
                            <p class="primaryText grayColorTexts mobileElement">
                                Una vez priorices tu objetivo y definas los KPI’s <br class="mobileElement">
                                para medir tu “éxito”, tu gerente te apoya a <br class="mobileElement">
                                definir un cronograma de acciones que tú y tu <br class="mobileElement">
                                equipo necesitan implementar en la plataforma <br class="mobileElement">
                                para lograr sus metas. Durante el proceso, <br class="mobileElement">
                                tienes hasta 8 horas de sesiones privadas con <br class="mobileElement">
                                tu gerente que programas según lo necesiten <br class="mobileElement">
                                para asegurarse que estén progresando y <br class="mobileElement">
                                utilizando las herramientas efectivamente.
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
                                        <a href="https://academy.escala.com/plan-generacion-leads" class="example">
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
                                        <a href="https://academy.escala.com/plan-optimizacion/" class="example">
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
                                            Comunicaciones
                                        </span>
                                        <br class="space">
                                        <a href="https://academy.escala.com/plan-automatizacion/" class="example">
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

                                    <a href="https://academy.escala.com/plan-generacion-leads" class="example">
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

                                    <a href="https://academy.escala.com/plan-optimizacion/" class="example">
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

                                    <a href="https://academy.escala.com/plan-automatizacion/" class="example">
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
Flujos automáticos creados y habilitados.
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

                            <a class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
                                ¡Prueba Escala gratis!
                            </a>
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
                    'textButton' => 'Prueba Gratis',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
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
                    <a href="https://academy.escala.com/plan-generacion-leads/" class="hiperButtonGreenBlue">
                        Plan de generación de leads
                    </a>
                    <br class="space"><br class="space">
                    <a href="https://academy.escala.com/plan-optimizacion/" class="hiperButtonGreenBlue">
                        Plan de optimización
                    </a>
                    <br class="space"><br class="space">
                    <a href="https://academy.escala.com/plan-automatizacion/" class="hiperButtonGreenBlue">
                        Plan de automatización
                    </a>
                    <br class="space"><br class="space">
                    Recuerda que tu plan es personalizado y estará ajustado <br class="desktopTabletElement">
                    a los objetivos y necesidades de tu empresa.
                ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Prueba Gratis',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
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
                y de proyecto que simplifica la implementación, acelera su aprendizaje, <br class="desktopTabletElement">
                motiva su progreso y vela porque usen efectivamente las herramientas <br class="desktopTabletElement">
                para impulsar el crecimiento de su negocio.
            ',
                    'enableButton' => false,
                    'urlButton' => '#lead-form',
                    'textButton' => 'Prueba Gratis',
                    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
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
                                    grabadas, más de 140 artículos y <br class="desktopTabletElement">
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

                            <div class="carousel-item">
                              <div class="row">
                                <div class="testimonial ">

                                  <div class="containElements">

                                    <div class="referElements">
                                      <div class="containerImage">

                                        <img alt="Implementación" src="{!! App::setFilePath('/assets/images/illustrations/others/trustImple (4).png') !!}" alt="" loading="lazy">

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
                          <button type="button" data-bs-target="#carousel-trustPilot" data-bs-slide-to="3" aria-label="Slide 3"></button>
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
                            durante o después del Onboarding? <br class="space">
                        </span>
                        Adquiere Servicios profesionales
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
                            'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
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
                            ventas y fidelización
                          ',
                          'enableButton' => false,
                            'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
                            'urlButton' => '#',
                            'textButton' => 'Aprender más'
                        ],
                        [
                            'img' => App::setFilePath('/assets/images/illustrations/others/implementacion-servicios-3.png'),
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
                            'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
                            'urlButton' => '#',
                            'textButton' => 'Aprender más'
                        ],
                    ],
                ];
            @endphp
            @contain_5_cards_T1($parameters)
            @endcontain_5_cards_T1


            <section class="customSection sectionParent implementacionSection9 fullWidth">

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
                                Recibe Demo gratis
                            </a>

                        </div>



                    </div>

                </div>

            </section>




        </div>
    </div>

@endsection

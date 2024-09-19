{{--
    Template Name: [B] Blog - Single precios meta - 2024
    Template Post Type: post
--}}

@extends('layouts.app')

@section('content')
<div id="single_blog_precios_meta_2024" class="post-template">

    <div class="sections">

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol single_blog_precios_meta_2024_0 ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_principal_articulo_blog_precios_meta.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele2 col-md-12 col-lg-7">

                                        <h1 class="principalBigTitle blackColor">
                                            WhatsApp API: Precios de Meta <br class="DT_e">
                                            actualizados y su integración con <br class="DT_e">
                                            el CRM Escala.
                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            Conoce todo lo que necesitas saber sobre esta<br class="DT_e">
                                            potente herramienta de negocio para <br class="DT_e">
                                            aprovecharla al máximo.
                                        </p>

                                    </div>

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración precios nuevos meta " src="{{ App::setFilePath('/assets/images/illustrations/others/img-persona-nuevos-precios-meta.png') }}" loading="lazy">
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="form7 col-md-12 col-lg-4 ">

                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <h5 class="titleFormat blackcolor">Recibe un tour guiado de Escala</h5>


                                        @php
                                        $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                        $_rs = [];
                                        $_formShortcode = null;
                                        if ($_data = get_posts($_args)) {
                                        foreach ($_data as $_key) {
                                        $_rs[$_key->ID] = $_key->post_title;
                                        if ($_key->post_title === 'Profile demo - Flujo Demo') {
                                        $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                        }
                                        }
                                        } else {
                                        $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                        }
                                        @endphp
                                        {!! do_shortcode($_formShortcode) !!}


                                    </div>

                                </div>
                            </div>

                            <div class="imageReviewsMobile hideOnDesktop">

                                <div class="image">
                                    <div class="containerImage">
                                        <img alt="Ilustración precios nuevos meta " src="{{ App::setFilePath('/assets/images/illustrations/others/img-persona-nuevos-precios-meta.png') }}" loading="lazy">
                                    </div>

                                </div>
                            </div>


                        </div>

                    </section>

                </div>


            </div>

        </section>
        <section class="w-full customSection sectionParent single_blog_precios_meta_2024_1">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="info">
                            <p>
                                Como todos sabemos, WhatsApp se ha convertido en una herramienta de comunicación esencial
                                para que las empresas interactúen de manera eficiente con sus contactos y clientes.
                                <br class="space">
                                <br class="space">
                                Sin embargo, a medida que el volumen de mensajes crece, gestionar todas esas conversaciones
                                manualmente se vuelve cada vez más complicado. Los mensajes se pierden, las respuestas
                                se retrasan y mantener un seguimiento adecuado de cada cliente es un desafío.
                                <br class="space">
                                <br class="space">
                                Aquí es donde la solución de WhatsApp API, integrada al CRM de Escala, entra en juego,
                                brindando automatización y control para asegurar que ninguna interacción quede sin atender,
                                mejorando tanto la eficiencia operativa como la satisfacción del cliente. WhatsApp API,
                                desarrollada por Meta, está diseñada específicamente para que las empresas puedan escalar eficientemente sus conversaciones con clientes y contactos, asegurando una comunicación fluida y
                                personalizada de manera masiva.
                                <br class="space">
                                <br class="space">
                                A diferencia de la solución estándar de WhatsApp que todos usamos gratuitamente, WhatsApp
                                API tiene un costo asociado por conversación que debes tener en cuenta a la hora de evaluar si esta
                                solución se adapta a tus necesidades.
                                <br class="space">
                                <br class="space">
                                La buena noticia es que NO debes pagar por todos los mensajes que se envían o reciben, una vez
                                que recibes un mensaje de un contacto, puedes responder y enviar todos los mensajes que desees
                                sin costo adicional durante las siguientes 24 horas. Este período de 24 horas comienza desde el
                                último mensaje recibido, lo que permite una comunicación fluida y continua sin cargos adicionales
                                dentro de ese tiempo.
                            </p>
                        </div>
                    </div>

                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <h3>Índice de contenido</h3>
                        <br>
                        <ol>
                            <li><a href="#whatsappLink">¿Qué es WhatsApp Inbox en la app móvil de Escala?</a></li>
                            <li><a href="#logrosLink"> ¿Qué puedes lograr con esta herramienta?</a></li>
                            <li> <a href="#funcionesLink">Funciones Claves</a></li>
                            <li> <a href="#usosLink">Casos de uso ejemplo</a></li>
                            <li> <a href="#appLink">¿Qué más puedes hacer con la app móvil de Escala?</a></li>
                            <li><a href="#pasosLink">¿Qué pasos seguir para empezar a usarlo?</a></li>
                        </ol>
                    </div>

                </section>
                <section class="innerSectionElement sct2" id="whatsappLink">
                    <div class="containElements">
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-3.png') }}" alt="">
                        </div>
                        <div class="info">
                            <h3>¿Qué es el WhatsApp Inbox en la app móvil de Escala?</h3>
                            <p>
                                Si ya eres usuario del módulo de WhatsApp Inbox de Escala, conoces bien sus ventajas:
                            </p>
                            <ul>
                                <li>Centralizar todas las comunicaciones de WhatsApp de tu negocio en un solo lugar</li>
                                <li>Automatizar respuestas y crear flujos para que la comunicación con tus leads/clientes sea más eficiente</li>
                                <li>Monitorear todas las conversaciones de tu equipo de trabajo con tus leads/clientes</li>
                                <li>Y mucho mas!</li>
                            </ul>
                        </div>
                    </div>
                </section>


                <section class="innerSectionElement sct3 " style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_precios_meta_sect_4.svg') }}')" class="backgroundFull">
                    <div class="containElements">
                        <div class="info">
                            <h3>¡Ahora, con WhatsApp Inbox en el app móvil de Escala, puedes aprovechar todas estos beneficios desde tu celular!</h3>
                            <p class="pBlue">
                                Si aún no estás usando WhatsApp Inbox en Escala, puedes contactar a tu gerente de éxito o hacer click aquí para comenzar a aprovechar esta funcionalidad.
                            </p>
                        </div>
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-4.png') }}" alt="">
                        </div>
                    </div>
                </section>


                <section class="innerSectionElement sct4" id="logrosLink">
                    <div class="containElements">
                        <div class="info">
                            <h3>¿Qué puedes lograr con esta herramienta?</h3>
                            <p>
                                Con WhatsApp Inbox en la app móvil, puedes alcanzar un nuevo nivel de eficiencia en la gestión
                                de relaciones con leads y clientes. Puedes recibir y responder mensajes sin importar dónde estés,
                                ideal para vendedores que están en la calle visitando prospectos o clientes.
                                También puedes coordinar a tu equipo, automatizar procesos claves y obtener datos valiosos
                                que te ayudarán a optimizar tus resultados de marketing, ventas y servicios. ¡Todo desde tu
                                celular!
                            </p>
                        </div>
                        <div class="containerImage" id="funcionesLink">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-5.png') }}" alt="">
                        </div>
                    </div>

                </section>
            </div>

        </section>

        <section class="w-full customSection sectionParent single_blog_precios_meta_2024_1_1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_precios_meta_sect_5.svg') }}')" class="backgroundFull">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="info">
                            <h3>Funciones claves: </h3>
                            <p>
                                Desde WhatsApp Inbox <span> en tu celular:</span>
                            </p>
                        </div>
                    </div>

                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <p>
                            <span> Recibe y responde</span> todos los mensajes de WhatsApp
                            <br class="space">
                            de tu negocio, sin necesitar de una computadora.
                        </p>

                        <img src="{{ App::setFilePath('/assets/images/gifs/1.-Recibe-y-responde-todos-los-mensajes-de-WhatsApp.gif') }}" alt="">
                    </div>

                </section>
                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <img src="{{ App::setFilePath('/assets/images/gifs/2 - Asigna-conversaciones-a-los-distintos-miembros-de-tu-equipo - mp4.gif') }}" alt="">
                        <p>
                            <span>
                                Asigna conversaciones</span> a los distintos miembros de tu
                            <br class="space">equipo.
                        </p>
                    </div>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <p>
                            <span>Actualiza</span> información de contactos, oportunidades,
                            <br class="space">
                            actividades y tareas en base a las conversaciones por
                            <br class="space">
                            whatsapp.
                        </p>

                        <img src="{{ App::setFilePath('/assets/images/gifs/3 - Actualiza-información-de-contactos-mp4.gif') }}" alt="">
                    </div>

                </section>
                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <img src="{{ App::setFilePath('/assets/images/gifs/4 - Envía-archivos-desde-tu-celular-mp44 - Envía-archivos-desde-tu-celular-mp4.gif') }}" alt="">
                        <p>
                            <span>
                                Envía archivos desde tu celular, </span> incluyendo imágenes,
                            <br class="space">
                            audios y PDFs
                        </p>
                    </div>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <p>
                            <span>
                                Envía plantillas de Meta, imágenes y documentos
                                <br class="space"> guardados en Escala.</span>
                        </p>

                        <img src="{{ App::setFilePath('/assets/images/gifs/5 - Envía-plantillas-de-Meta-mp4.gif') }}" alt="">
                    </div>

                </section>


                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <img src="{{ App::setFilePath('/assets/images/gifs/6 - Mantén-la-bandeja-de-entrada-organizada-mp4.gif') }}" alt="">
                        <p>
                            <span>
                                Mantén la bandeja de entrada organizada</span> cerrando
                            <br class="space">
                            conversaciones finalizadas y marcando conversaciones
                            <br class="space">
                            como no leídas.
                        </p>
                    </div>
                </section>

                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <p>
                            <span> Filtra y consigue lo que buscas rápidamente </span>según el
                            <br class="space">
                            status de las conversaciones, el dueño y el tiempo del
                            <br class="space">
                            último mensaje.
                        </p>

                        <img src="{{ App::setFilePath('/assets/images/gifs/7 - Mantén-la-bandeja-de-entrada-organizada-mp4.gif') }}" alt="">
                    </div>

                </section>

                <p class="yMas">¡Y más!</p>
            </div>

        </section>

        <section class="w-full customSection sectionParent single_blog_precios_meta_2024_2_0" id="usosLink">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="info">
                            <h3>Caso de uso ejemplo: <span>Vendedores en la calle</span></h3>

                            <ul>
                                <li> <span>Problema: </span>Una empresa de Bienes Raíces tiene agentes que visitan múltiples terrenos y/o residencias de clientes un mismo día para cerrar ventas. Los agentes tienen que esperar hasta llegar a una computadora al final del día para registrar todo lo ocurrido en el CRM. Esto aumenta el riesgo de perder u olvidarse de información valiosa que afecte el seguimiento, gestión y conversión de oportunidades.
                                </li>
                                <br>
                                <li><span>Solución: </span>con WhatsApp Inbox en la app móvil, cada agente tiene el CRM en el bolsillo. Después de cada visita, se toman 5 minutos para registrar lo ocurrido, información relevante del contacto y próximos pasos.
                                </li>
                                <br>
                                <li>
                                    <span>Beneficio: </span>Se guarda data relevante y de fácil acceso que facilita la gestión comercial y aumenta las probabilidades de venta.
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_precios_meta_sect_6.svg') }}')" class="backgroundFull">
                    <div class="containElements">
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-6.png') }}" alt="">
                        </div>
                    </div>

                </section>
                <section class="innerSectionElement sct2" id="appLink">
                    <div class="containElements">
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp_section_7.png') }}" alt="">
                        </div>
                        <div class="info" id="pasosLink">
                            <h3>¿Qué más puedes hacer con la app móvil de Escala?</h3>
                            <p>
                                En la app móvil de Escala también tienes acceso al CRM de Escala para
                                que puedas guardar contactos, gestionar procesos comerciales y visualizar resultados de tu equipo de venta.
                                <br><br>
                                Tener WhatsApp Inbox y el CRM en tu celular, integrados en una misma plataforma, es
                                contar con una ventaja operativa
                                importante ¡para aumentar la eficiencia de tus procesos comerciales!
                            </p>
                        </div>
                    </div>
                </section>

                <section class="innerSectionElement sct3" style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_precios_meta_sect_7.svg') }}')" class="backgroundFull">
                    <div class="info">
                        <h3>¿Qué pasos seguir para empezar a usar el<br class="space">
                            WhatsApp Inbox en la app móvil de Escala?</h3>
                        <p>
                            ¿Listo para aprovechar sus beneficios?

                        </p>
                    </div>
                    <div class="containElements">
                        <div class="info-second">
                            <p>Si ya estás suscrito al Plan Pro de Escala y tienes la app móvil
                                descargada en tu celular, solo debes actualizarla.</p>
                            <span>De lo contrario:</span>
                            <ol>
                                <li>
                                    Suscríbete al plan pro de Escala con WhatsApp API.
                                    Si aún no eres cliente <a class="openPopUpButton popup-general-demo-2022">¡Haz click aquí para recibir un demo
                                        o hablar con un asesor!</a>
                                </li>
                                <li>Conecta tu cuenta de WhatsApp a Escala. ¿Necesitas apoyo?<a href="https://api.whatsapp.com/send?phone=17863042407" target="_blank"> Comunícate con nuestro equipo de soporte</a> </li>
                                <li>Descarga la app móvil del CRM de Escala desde la tienda de aplicaciones en tu celular. ¿Cómo?<a href="https://support.escala.com/portal/es/kb/articles/gestionar-mensajes-en-el-inbox-desde-app-movil-de-escala" target="_blank"> Ve este corto tutorial</a> </li>
                                <li>¡Empieza a utilizarla!</li>
                            </ol>
                        </div>
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-8.png') }}" alt="">
                        </div>
                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent single_blog_precios_meta_2024 single_blog_precios_meta_2024_2">
            <div class="section-row">
                <section class="innerSectionElement sct0" style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_precios_meta_sect_8.svg') }}')">
                    <div class="containElements">
                        <div class="info">
                            <h2>Conoce más de Escala
                                <br class="space">
                                <span> y aprovecha todos estos beneficios.</span>
                            </h2>
                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Solicita un demo
                            </a>
                        </div>
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-9.png') }}" alt="">
                        </div>
                    </div>
                </section>
            </div>
        </section>

    </div>

</div>
@endsection
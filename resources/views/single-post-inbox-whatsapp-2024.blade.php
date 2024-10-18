{{--
    Template Name: [B] Blog - Single inbox whatsapp - 2024
    Template Post Type: post
--}}

@extends('layouts.app')

@section('content')
<div id="single_blog_inbox_whatsapp_2024" class="post-template">

    <div class="sections">

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol single_blog_inbox_whatsapp_2024_0 ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_principal_articulo_blog_inbox_whatsapp.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele2 col-md-12 col-lg-7">

                                        <h1 class="principalBigTitle blackColor">
                                            Ahora puedes conversar y <br class="DT_e">
                                            gestionar los WhatsApps de tu <br class="DT_e">
                                            negocio desde la app móvil del <br class="DT_e">
                                            CRM de Escala
                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            Conoce qué es y para qué sirve el WhatsApp <br class="space">
                                            Inbox en tu celular.
                                        </p>

                                    </div>

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración inbox whatsapp escala" src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp.png') }}" loading="lazy">
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
                                        <img alt="Ilustración inbox whatsapp escala" src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp.png') }}" loading="lazy">
                                    </div>

                                </div>
                            </div>


                        </div>

                    </section>

                </div>


            </div>

        </section>
        <section class="w-full customSection sectionParent single_blog_inbox_whatsapp_2024_1">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="info">
                            <p>
                                La herramienta de WhatsApp Inbox en la app móvil de Escala no es solo una bandeja de entrada
                                de mensajes de WhatsApp, en ella puedes centralizar y gestionar conversaciones que tienen
                                los distintos miembros de tu equipo para aumentar la eficiencia operativa, medir y optimizar
                                resultados de venta.
                                En este breve artículo te contamos los beneficios de tener WhatsApp Inbox en la app móvil de
                                Escala para comunicarte de forma más rápida y eficiente con tus contactos.
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


                <section class="innerSectionElement sct3 " style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_inbox_whatsapp_sect_4.svg') }}')" class="backgroundFull">
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

        <section class="w-full customSection sectionParent single_blog_inbox_whatsapp_2024_1_1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_inbox_whatsapp_sect_5.svg') }}')" class="backgroundFull">
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

        <section class="w-full customSection sectionParent single_blog_inbox_whatsapp_2024_2_0" id="usosLink">

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

                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_inbox_whatsapp_sect_6.svg') }}')" class="backgroundFull">
                    <div class="containElements">
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-6.png') }}" alt="">
                        </div>
                    </div>

                </section>


                <section class="innerSectionElement sct2"  id="appLink" style="background-image: url('{{ App::setFilePath('/assets/images/banners/app_imbox_fondo_seccion.svg') }}')" class="backgroundFull">

                    <div class="containElements">
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/ilustraccion_otto_articulo_blog_imbox_whatsapp.png') }}" alt="">
                        </div>
                        <div class="info-second">
                            <div class="info">
                                <h3>¿Qué más puedes hacer en el Inbox de Escala?</h3>

                            </div>
                            <ul>
                                <li> <span>Acceso desde el Inbox para guardar contactos, </span> gestionar procesos comerciales y visualizar resultados del equipo de ventas. </li>
                                <li> <span>Posibilidad de asignar masivamente conversaciones, </span> permitiendo a los administradores distribuir rápidamente varias conversaciones entre miembros del equipo. </li>
                                <li> <span>Marcar conversaciones como no leídas, </span> para evitar que pasen desapercibidas. </li>
                                <li> <span>Enviar videos </span> en formatos 3gp y .mp4 con un máximo de 16 MB. Esto es ideal para compartir presentaciones, tutoriales o contenido visual sin tener que salir de la plataforma. </li>
                                <li> <span>Envío múltiple de imágenes y documentos </span> desde el Inbox Web, arrastrando o seleccionando los archivos .doc, .pdf, .jpg, .png, .jpeg,. Cada uno puede pesar hasta 20 MB. </li>
                                <li> <span>Tiempo de espera de mínimo 1 minuto en automatizaciones de WhatsApp </span> al seleccionar las acciones de “Enviar mensaje con lista de opciones” y “Enviar plantillas de Meta”. Esto permitirá respuestas más ágiles, perfecto para campañas que requieren rapidez en la interacción. </li>
                                <li> <span>Crear reportes y analíticas de WhatsApp </span> para medir el comportamiento de sus interacciones en el inbox, evaluando tiempo de atención, tiempo promedio de respuesta y mucho más. </li>
                            </ul>
                        </div>

                    </div>

                </section>


                <section class="innerSectionElement sct3" style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_inbox_whatsapp_sect_7.svg') }}')" class="backgroundFull">
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


        <section class="customSection sectionParent single_blog_inbox_whatsapp_2024 single_blog_inbox_whatsapp_2024_2">
            <div class="section-row">
                <section class="innerSectionElement sct0" style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_inbox_whatsapp_sect_8.svg') }}')">
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
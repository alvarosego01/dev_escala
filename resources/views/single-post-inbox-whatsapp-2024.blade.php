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
                                            <span>
                                                Ahora puedes conversar y <br class="space">
                                                gestionar los WhatsApps de tu <br class="space">
                                                negocio desde la app móvil del <br class="space">
                                                CRM de Escala
                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            Conoce qué es y para qué sirve el WhatsApp <br class="space">
                                            Inbox en tu celular.
                                        </p>




                                        <div class="elements hideOnmobile hideOnTablet">

                                            @foreach ($elementsReviews as $item)
                                            <div class="refersElement">

                                                <div class="infoInner">
                                                    <div class="tag">
                                                        <div class="containerImage">
                                                            <img src="{!! $item['logo'] !!}" loading="lazy">
                                                        </div>

                                                        <span class="points">
                                                            {!! $item['points'] !!}
                                                        </span>
                                                    </div>
                                                    <p class="text">
                                                        {!! $item['text'] !!}
                                                    </p>
                                                    <div class="stars">
                                                        <div class="containerImage">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            @endforeach

                                        </div>

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

                                        <h5 class="titleFormat blackcolor">Recibe un demo-tour <br class="space">
                                            personalizado de Escala</h5>


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

                                <div class="elements">

                                    @foreach ($elementsReviews as $item)
                                    <div class="refersElement">

                                        <div class="infoInner">
                                            <div class="tag">
                                                <div class="containerImage">
                                                    <img src="{!! $item['logo'] !!}" loading="lazy">
                                                </div>

                                                <span class="points">
                                                    {!! $item['points'] !!}
                                                </span>
                                            </div>
                                            <p class="text">
                                                {!! $item['text'] !!}
                                            </p>
                                            <div class="stars">
                                                <div class="containerImage">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    @endforeach

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





                        <ul>
                            <li>¿Qué es WhatsApp Inbox en la app móvil de Escala?</li>
                            <li> ¿Qué puedes lograr con esta herramienta?</li>
                            <li> Funciones Claves</li>
                            <li> 2 Casos de uso ejemplo</li>
                            <li> ¿Qué más puedes hacer con la app móvil de Escala?</li>
                            <li>¿Qué pasos seguir para empezar a usarlo?</li>
                        </ul>
                    </div>

                </section>
                <section class="innerSectionElement sct2" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-article-especial.svg') }}')" class="backgroundFull">
                    <div class="containElements">

                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-3.png') }}" alt="">
                        </div>
                        <h2>¿Qué es el WhatsApp Inbox en la app móvil de Escala?</h2>
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

                </section>

                <section class="innerSectionElement sct3">
                    <h2>¡Ahora, con WhatsApp Inbox en el app móvil de Escala, puedes aprovechar todas estos beneficios desde tu celular!</h2>
                    <p class="pBlue">
                        Si aún no estás usando WhatsApp Inbox en Escala, puedes contactar a tu gerente de éxito o hacer click aquí para comenzar a aprovechar esta funcionalidad.
                    </p>

                    <div class="containerImage">
                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-4.png') }}" alt="">
                    </div>
                </section>

                <section class="innerSectionElement sct4" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-article-especial.svg') }}')" class="backgroundFull">
                    <div class="containElements">


                        <h2>¿Qué puedes lograr con esta herramienta?</h2>
                        <p>
                            Con WhatsApp Inbox en la app móvil, puedes alcanzar un nuevo nivel de eficiencia en la gestión
                            de relaciones con leads y clientes. Puedes recibir y responder mensajes sin importar dónde estés,
                            ideal para vendedores que están en la calle visitando prospectos o clientes.
                            También puedes coordinar a tu equipo, automatizar procesos claves y obtener datos valiosos
                            que te ayudarán a optimizar tus resultados de marketing, ventas y servicios. ¡Todo desde tu
                            celular!
                        </p>
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-5.png') }}" alt="">
                        </div>
                    </div>

                </section>
            </div>

        </section>
        <section class="w-full customSection sectionParent single_blog_inbox_whatsapp_2024_1_1">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="info">
                            <h2>Funciones claves: </h2>
                            <p>
                                Desde WhatsApp Inbox en tu celular:
                            </p>
                        </div>
                    </div>

                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        Recibe y responde todos los mensajes de WhatsApp de tu negocio, sin necesitar de una computadora.
                        <img src="{{ App::setFilePath('/assets/images/gifs/3Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes-.gif') }}" alt="">
                    </div>

                </section>
                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <img src="{{ App::setFilePath('/assets/images/gifs/3Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes-.gif') }}" alt="">

                        Recibe y responde todos los mensajes de WhatsApp de tu negocio, sin necesitar de una computadora.
                    </div>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        Recibe y responde todos los mensajes de WhatsApp de tu negocio, sin necesitar de una computadora.
                        <img src="{{ App::setFilePath('/assets/images/gifs/3Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes-.gif') }}" alt="">
                    </div>

                </section>
                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <img src="{{ App::setFilePath('/assets/images/gifs/3Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes-.gif') }}" alt="">

                        Recibe y responde todos los mensajes de WhatsApp de tu negocio, sin necesitar de una computadora.
                    </div>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        Recibe y responde todos los mensajes de WhatsApp de tu negocio, sin necesitar de una computadora.
                        <img src="{{ App::setFilePath('/assets/images/gifs/3Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes-.gif') }}" alt="">
                    </div>

                </section>
                <section class="innerSectionElement sct2">
                    <div class="containElements">
                        <img src="{{ App::setFilePath('/assets/images/gifs/3Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes-.gif') }}" alt="">

                        Recibe y responde todos los mensajes de WhatsApp de tu negocio, sin necesitar de una computadora.
                    </div>
                </section>
                <p>¡Y más!</p>
            </div>

        </section>

        <section class="w-full customSection sectionParent single_blog_inbox_whatsapp_2024_2_0">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="info">
                            <h2>Caso de uso ejemplo: <span>Vendedores en la calle</span></h2>

                            <ul>
                                <li> <span>Problema: </span>Una empresa de Bienes Raíces tiene agentes que visitan múltiples terrenos y/o residencias de clientes un mismo día para cerrar ventas. Los agentes tienen que esperar hasta llegar a una computadora al final del día para registrar todo lo ocurrido en el CRM. Esto aumenta el riesgo de perder u olvidarse de información valiosa que afecte el seguimiento, gestión y conversión de oportunidades.
                                </li>
                                <li><span>Solución: </span>con WhatsApp Inbox en la app móvil, cada agente tiene el CRM en el bolsillo. Después de cada visita, se toman 5 minutos para registrar lo ocurrido, información relevante del contacto y próximos pasos.
                                </li>
                                <li>
                                    <span>Beneficio: </span>Se guarda data relevante y de fácil acceso que facilita la gestión comercial y aumenta las probabilidades de venta.
                                </li>
                            </ul>
                        </div>
                    </div>

                </section>
                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-article-especial.svg') }}')" class="backgroundFull">
                    <div class="containElements">
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-6.png') }}" alt="">
                        </div>
                    </div>

                </section>
                <section class="innerSectionElement sct2" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-article-especial.svg') }}')" class="backgroundFull">
                    <div class="containElements">

                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-3.png') }}" alt="">
                        </div>
                        <h2>¿Qué más puedes hacer con la app móvil de Escala?</h2>
                        <p>
                            En la app móvil de Escala también tienes acceso al CRM de Escala para que puedas guardar contactos, gestionar procesos comerciales y visualizar resultados de tu equipo de venta.

                            Tener WhatsApp Inbox y el CRM en tu celular, integrados en una misma plataforma, es contar con una ventaja operativa importante ¡para aumentar la eficiencia de tus procesos comerciales! </p>

                    </div>

                </section>

                <section class="innerSectionElement sct3">
                    <h2>¡Ahora, con WhatsApp Inbox en el app móvil de Escala, puedes aprovechar todas estos beneficios desde tu celular!</h2>
                    <p class="pBlue">
                        Si aún no estás usando WhatsApp Inbox en Escala, puedes contactar a tu gerente de éxito o hacer click aquí para comenzar a aprovechar esta funcionalidad.
                    </p>

                    <div class="containerImage">
                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-4.png') }}" alt="">
                    </div>
                </section>

                <section class="innerSectionElement sct4" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-section-article-especial.svg') }}')" class="backgroundFull">

                    <div class="containElements">

                        <h2>¿Qué pasos seguir para empezar a usar el
                            WhatsApp Inbox en la app móvil de Escala?</h2>
                        <p>
                            ¿Listo para aprovechar sus beneficios?

                        </p>
                        <div>
                            <div>
                                Si ya estás suscrito al Plan Pro de Escala y tienes la app móvil descargada en tu celular, solo debes actualizarla.
                                <p>De lo contrario:
                                </p>
                                <ul>
                                    <li>
                                        Suscríbete al plan pro de Escala con WhatsApp API.
                                        Si aún no eres cliente ¡Haz click aquí para recibir un demo
                                        o hablar con un asesor!
                                    </li>
                                    <li>Conecta tu cuenta de WhatsApp a Escala. ¿Necesitas apoyo? Comunícate con nuestro equipo de soporte</li>
                                    <li>Descarga la app móvil del CRM de Escala desde la tienda de aplicaciones en tu celular. ¿Cómo? Ve este corto tutorial</li>
                                    <li>¡Empieza a utilizarla!</li>
                                </ul>
                            </div>
                            <div class="containerImage">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-inbox-whatsapp-sect-5.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                </section>
            </div>

        </section>


        <section class="customSection sectionParent single_blog_inbox_whatsapp_2024 single_blog_inbox_whatsapp_2024_2">
            <div class="section-row">
                <section class="innerSectionElement sct0" style="background-image: url('{{ App::setFilePath('/assets/images/backgrounds/bg_banner_post_especial.svg') }}')">
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
                            <img src="{{ App::setFilePath('/assets/images/illustrations/otto/otto-blog-especial.png') }}" alt="">
                        </div>
                    </div>
                </section>
            </div>
        </section>

    </div>

</div>
@endsection
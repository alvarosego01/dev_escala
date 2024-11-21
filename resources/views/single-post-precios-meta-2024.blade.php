{{--
    Template Name: [B] Blog - Single precios meta - 2024
    Template Post Type: post
--}}

@extends('layouts.app')

@section('content')
<div id="single_blog_precios_meta_2024" class="post-template">

    <div class="sections">

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol single_blog_precios_meta_2024_0 ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section_precios_nuevos_meta_2024.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele2 col-md-12 col-lg-7">

                                        <h1 class="principalBigTitle blackColor">
                                            <span>WhatsApp API:</span> Precios de Meta <br class="DT_e">
                                            actualizados y su integración con <br class="DT_e">
                                            el CRM Escala
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

                                        <h5 class="titleFormat blackcolor">Recibe un tour guiado <br class="space"> de Escala</h5>

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
                <section class="innerSectionElement sct0_1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section2_precios_nuevos_meta_2024.svg') }}')" class="backgroundFull">
                    <div class="containElements">
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/otto/otto-whatsapp-nuevos-precios-meta-2024.png') }}" alt="">
                        </div>
                        <div class="info">
                            <p>
                                <span>Nota Importante:</span> Aunque WhatsApp API implica una
                                inversión por el envío de los mensajes, lo que te ahorras en
                                tiempo, personal y eficiencia operativa hace que valga la pena.
                                La automatización y personalización te permiten
                                gestionar más conversaciones con menos recursos, mejorar
                                la experiencia de usuario y obtener mejores resultados,
                                ahorrando muchos costos ocultos. Además, el costo por
                                mensaje es muy accesible, con un rango típico de entre USD
                                $0.005 y $0.02 por mensaje. Por ejemplo, enviar 1.000
                                mensajes costaría entre USD $5 y $20, una inversión mínima
                                en comparación con el valor que ofrece en términos de
                                eficiencia y escalabilidad.
                                <br class="space">
                                <br class="space">
                                A continuación te contamos todo lo que debes saber.

                            </p>
                        </div>

                    </div>

                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <h3>Índice de contenido</h3>
                        <br>
                        <ol>
                            <li><a href="#whatsappLink"> ¿Qué es WhatsApp API?</a></li>
                            <li><a href="#logrosLink">¿Qué puedes lograr con WhatsApp API integrado al CRM de Escala?</a></li>
                            <li> <a href="#precios"> Precios Actualizados de la API de WhatsApp para América y España. </a></li>
                            <li> <a href="#pasos">¿Qué pasos seguir para utilizar WhatsApp API en el CRM de Escala?</a></li>



                        </ol>
                    </div>

                </section>
                <section class="innerSectionElement sct2" id="whatsappLink">
                    <div class="containElements">
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-persona-nuevos-precios-meta-whatsapp-api.png') }}" alt="">
                        </div>
                        <div class="info">
                            <h3>¿Qué es WhatsApp API?</h3>
                            <p>
                                Creado por Meta, WhatsApp API es una solución que
                                permite a empresas integrar el servicio de mensajería de
                                WhatsApp con otros sistemas de software o
                                plataformas de comunicación, permitiendo automatizar,
                                escalar y gestionar interacciones con contactos
                                eficientemente. A diferencia de la versión estándar de
                                WhatsApp, la API está diseñada para empresas que
                                necesitan gestionar mayores volúmenes de mensajes de
                                manera profesional.
                            </p>

                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section id="logrosLink" class="w-full customSection sectionParent single_blog_precios_meta_2024_1_1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_section3_precios_nuevos_meta_2024.svg') }}')" class="backgroundFull">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="info">
                        <h3>¿Qué puedes lograr con WhatsApp API integrado al CRM de Escala?</h3>
                        <p>
                            Gracias a la conexión de WhatsApp API con el CRM todo-en-uno de Escala, los usuarios pueden:
                        </p>
                    </div>
                </section>

                <section class="innerSectionElement sct1">
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Enviar mensajes</span><br class="DT_e"> masivos o individuales<br class="DT_e"> automáticamente</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Diseñar flujos</span> de<br class="DT_e"> respuestas<br class="DT_e"> automatizadas.</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Programar</span><br class="DT_e"> recordatorios</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Asignar conversaciones</span><br class="DT_e"> a distintos miembros<br class="DT_e"> del equipo </p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Realiza encuestas</span><br class="DT_e"> y perfilamiento de<br class="DT_e"> contactos</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Crear y actualizar</span> la<br class="DT_e"> información de contactos<br class="DT_e"> fácilmente en el CRM</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Guardar el historial</span> de<br class="DT_e"> conversaciones con cada<br class="DT_e"> contacto dentro del CRM</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Filtrar y organizar</span><br class="DT_e"> mensajes a contactos</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Crear</span><br class="DT_e"> reportes</p>
                    </div>
                </section>

                <p class="yMas">¡Y más!</p>
            </div>

        </section>

        <section class="w-full customSection sectionParent single_blog_precios_meta_2024_2_0" id="precios">

            <div class="section-row">
                <section class="innerSectionElement sctInit">
                    <div class="containElements">
                        <div class="info">
                            <h3>Categorización de conversaciones y plantillas:</h3>
                            <p>La categorización de conversaciones y plantillas de Meta en WhatsApp API
                                permite a las empresas gestionar sus interacciones de manera más eficiente y
                                responder con mayor agilidad. En el siguiente cuadro, se presentan las categorías
                                de cada conversación, su duración y los tipos, características o requisitos que las definen:</p>
                        </div>
                        <div class="tableInfo">
                            <div class="filas">
                                <div class="header">
                                    <h4 class="tittle">
                                        Conversaciones iniciados desde plantillas
                                    </h4>
                                </div>
                                <div class="contentInfo">
                                    <p>
                                        Son conversaciones iniciadas por la empresa usando una plantilla aprobada por Meta, donde cada tipo define el costo y el tipo de la conversación. 

                                    </p>
                                    <p>
                                        <span>Duración:</span> 24 horas
                                    </p>
                                    <p>
                                        <span>Tipos:</span>
                                    </p>

                                    <ul>
                                        <li>
                                            <span>Marketing:</span> Promoción e invitación a conversar.
                                        </li>
                                        <li>
                                            <span>Autenticación:</span> Para validar la identidad a través de códigos únicos.
                                        </li>
                                        <li>
                                            <span>Utilidad:</span> Activadas por una acción o solicitud del usuario para confirmaciones.
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <div class="filas">
                                <div class="header">
                                    <h4 class="tittle">
                                        Conversaciones
                                        iniciadas por el cliente
                                    </h4>
                                </div>
                                <div class="contentInfo">
                                    <p>
                                        Son  interacciones en las que el cliente inicia la comunicación con la empresa.
                                    </p>
                                    <p>
                                        <span>Duración:</span> 24 horas
                                    </p>
                                    <p>

                                        <span>Caracteristicas:</span>
                                    </p>
                                    <ul>
                                        <li>
                                            Son abiertas y tienen un formato libre de texto como respuesta al mensaje de un cliente.
                                        </li>
                                        <li>
                                            Ahora son gratis e ilimitadas.
                                        </li>

                                    </ul>

                                </div>
                            </div>

                            <div class="filas">
                                <div class="header">
                                    <h4 class="tittle">
                                        Conversaciones iniciadas desde un punto de acceso 
                                    </h4>
                                </div>
                                <div class="contentInfo">
                                    <p>
                                        Son conversaciones gratuitas que se inician cuando un cliente hace clic en “Escribir” en un anuncio con un botón que lo dirige a WhatsApp.
                                    </p>
                                    <p>
                                        <span>Duración:</span> 72 horas
                                    </p>
                                    <p>
                                        <span>Requisitos:</span>
                                    </p>
                                    <ul>
                                        <li>
                                            El cliente debe iniciar la conversación desde un dispositivo móvil mediante el botón en un anuncio o en una página de Facebook.
                                        </li>
                                        <li>
                                            La empresa debe responder con un mensaje de cualquier tipo en las primeras 24 horas para abrir la conversación gratuita.
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="tableInfoMb1">
                            <div class="containerImage">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/table_1_plantillas.png') }}" alt="">
                            </div>
                            <div class="containerImage">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/table_2_cliente.png') }}" alt="">
                            </div>
                            <div class="containerImage">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/table_3_acceso.png') }}" alt="">
                            </div>
                        </div>

                        <div class="info info2">

                            <p>También es importante categorizar las plantillas de Meta en WhatsApp API debido a que permite a las
                                empresas organizar y encontrar rápidamente las respuestas adecuadas para cada tipo de interacción. 
                                A continuación, exploraremos el objetivo comercial de cada tipo de plantilla, junto con algunos ejemplos:</p>
                        </div>

                        <div class="tableInfoMb2">
                            <div class="containerImage">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/table_info_4.png') }}" alt="">
                            </div>

                        </div>  
                        <div class="tableInfo2">
                            <div class="filas">
                                <div class="header">
                                    <h4 class="tittle">
                                        Tipo
                                    </h4>
                                </div>
                                <div class="contentInfo">
                                    <div class="filaInfo1"><span>Marketing</span></div>
                                    <div class="filaInfo2"><span>Utilidad</span></div>
                                    <div class="filaInfo3"><span>Autenticación</span></div>
                                </div>
                            </div>

                            <div class="filas">
                                <div class="header">
                                    <h4 class="tittle">
                                        Objetivo comercial
                                    </h4>
                                </div>
                                <div class="contentInfo">
                                    <div class="filaInfo1">
                                        <ul>
                                            <li>Reconocimiento</li>
                                            <li>Ventas</li>
                                            <li>Retargeting</li>
                                            <li>Promoción de la app</li>
                                            <li>Consolidar relaciones con los clientes</li>
                                        </ul>
                                    </div>
                                    <div class="filaInfo2">
                                        <ul>
                                            <li>Administración de suscripciones en WhatsApp</li>
                                            <li>Administración de pedidos</li>
                                            <li>Alertas o actualizaciones de cuentas</li>
                                            <li>Encuestas de opinión</li>
                                            <li>Continuar una conversación en WhatsApp</li>
                                        </ul>
                                    </div>
                                    <div class="filaInfo3">
                                        <ul>
                                            <li>Código de autenticación</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="filas">
                                <div class="header">
                                    <h4 class="tittle">
                                        Ejemplo
                                    </h4>
                                </div>
                                <div class="contentInfo">
                                    <div class="filaInfo1">
                                        <ul>
                                            <li>"¿Lo sabías? Instalamos una nueva torre en tu zona para que disfrutes de una mejor experiencia."</li>
                                            <li>"Como agradecimiento por tu último pedido, disfruta de un 15% de descuento en el próximo."</li>
                                            <li>"Gracias por usar nuestra app. ¡Haz clic aquí {{2}} para obtener más información de la nueva feature."</li>
                                            <li>"{{1}}, ¿creías que nos olvidaríamos? ¡De ninguna manera! ¡Feliz cumpleaños! Te deseamos lo mejor en este nuevo año."</li>
                                        </ul>
                                    </div>
                                    <div class="filaInfo2">
                                        <ul>
                                            <li> "¡Gracias por confirmar la suscripción!"</li>
                                            <li>"Actualización diaria de {{1}}: tu saldo es {{2}}."</li>
                                            <li>"Tus comentarios aseguran que sigamos mejorando. Haz clic aquí {{1}} para compartir tu opinión sobre tu reciente visita"</li>
                                            <li>"Hola. Veo que solicitaste ayuda a través de nuestro chat en línea. Soy el asistente virtual de WhatsApp. ¿Cómo puedo ayudarte?"</li>
                                        </ul>
                                    </div>
                                    <div class="filaInfo3">
                                        <ul>
                                            <li>"{{1}} es tu código de verificación".
                                            </li>
                                            <li>"{{1}} es tu código de verificación. Caduca en 15 minutos."</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>


                </section>

                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="info">
                            <h3>Precios actualizados de WhatsApp API para América y España <br class="DT_e"> <span>(Septiembre 2024)</span></h3>
                        </div>
                    </div>
                </section>
                <section class="innerSectionElement sct1" id="appLink">
                    <div class="containElements">

                        <div class="info" id="pasosLink">
                            <p>
                                Meta requiere pagar por el uso de la WhatsApp API porque está diseñada
                                específicamente para empresas y proporciona una serie de ventajas y funcionalidades
                                avanzadas que no están disponibles en la versión gratuita de WhatsApp
                                (destinada principalmente para uso personal). 
                            </p>
                        </div>
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img-articulo-blog-nuevos-precios-meta-2024.png') }}" alt="">
                        </div>
                    </div>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="info">
                        <p>
                            En la siguiente tabla observamos los precios (en USD) más recientes de Meta
                            para el uso de WhatsApp API en diferentes países de América y España para conversaciones de:
                        </p>
                    </div>
                    <div class="containerImage">
                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/tabla_precios_meta_2024_01.png') }}" alt="">
                        <p>
                            Si quieres conocer las tarifas de Meta más actualizadas, <a target="_blank" href="https://business.whatsapp.com/products/platform-pricing?lang=es_LA&country=Per%C3%BA&currency=D%C3%B3lar%20(USD)&category=Autenticaci%C3%B3n">ingresa aquí.</a>
                        </p>
                    </div>
                </section>
            </div>

        </section>


        <section id="pasos" class="customSection sectionParent single_blog_precios_meta_2024 single_blog_precios_meta_2024_2">
            <div class="section-row">
                <section class="innerSectionElement sct0" style="background-image: url('{{ App::setFilePath('/assets/images/banners/banner_principal_articulo_blog_inbox_precios_meta_2024.png') }}')">
                    <div class="containElements">
                        <div class="info">
                            <h2>¿Qué pasos seguir para usar
                                <br class="DT_e">
                                WhatsApp API en Escala?
                            </h2>
                            <p>Conecta con nuestro equipo para conocer por ti
                                <br class="DT_e">
                                mismo la herramienta y evaluar sus beneficios
                            </p>
                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Solicita un demo ahora
                            </a>
                        </div>
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/banner-articulo-blog-nuevos-precios-meta-2024.png') }}" alt="">
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="customSection sectionParent single_blog_precios_meta_2024 single_blog_precios_meta_2024_3">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <h2 class="primaryTitle">Si te fue útil ¡Compártelo!</h2> <span>|</span>
                        <div class="icons">
                            <a href="https://www.facebook.com/escalasoftware/" target="_blank"><img src="{!! App::setFilePath('/assets/images/icons/facebook.svg') !!}" alt="Icon facebook escala"></a>
                            <a href="" target="_blank"><img src="{!! App::setFilePath('/assets/images/icons/twitter.svg') !!}" alt="Icon twitter escala"></a>
                            <a href="https://www.linkedin.com/company/escalaonline/" target="_blank"><img src="{!! App::setFilePath('/assets/images/icons/linkedin.svg') !!}" alt="Icon linkedin escala"></a>
                        </div>
                    </div>
                </section>
            </div>
        </section>


        @php
        $query = array();
        $query = [
        'post_type' => 'post',
        'category_name' => $category,
        'posts_per_page' => 3,
        'limit' => 3,
        'order' => 'DESC',
        ];

        $query = Posts::getPosts($query);
        $posts = (isset($query) && $query != null)? $query->get_posts() : null;

        @endphp

        @if (isset($posts) && $posts != null)
        <section class="customSection sectionParent single_blog_precios_meta_2024 single_blog_precios_meta_2024_4">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="container">
                            <div class="row">
                                <div class="text-center col-md-12 col-lg-12">
                                    <h2 class="primaryTitle">
                                        Artículos <span class="blackColor2"> relacionados</span> <br class="DT_e">
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="innerSectionElement sct1 cards_parent row">
                    @foreach ($posts as $index => $item)
                    @php
                    $post_tags = get_the_tags($item->ID);
                    @endphp

                    <div class="mb-3 col-12 col-sm-4 col-md-4 col-lg-4 card_item">
                        <div class="border-0 card">

                            <a href="{!! App::setTypeUrl() !!}/blog/{{ $item->post_name }}">
                                <img src="{{ Posts::getPhoto($item->ID) }}" class="card-img-top">
                            </a>

                            <div class="card-body">
                                <h6 class="">
                                    @foreach ($category as $item)
                                    {{ $item->name }}
                                    @endforeach
                                </h6>
                                <h5 class="card-title">
                                    {{ $item->post_title }}
                                </h5>
                                <p class="card-text">
                                    {!! ACF_CUSTOM::_getField('excerpt_single', $item->ID) !!}
                                </p>
                                <div class="subCard d-flex justify-content-end align-items-center">
                                    <!-- <div class="d-flex align-items-center">
                                                    <img src="{!! App::setFilePath('/assets/images/blog/icons/writer.png') !!}" alt="Anne Bryan"
                                                        class="mr-2 rounded-circle">
                                                    <div>
                                                        <p class="mb-0">Anne Bryan</p>
                                                        <p class="mb-0">Verified writer</p>
                                                    </div>
                                                </div> -->
                                    <div class="div-2">
                                        <p class="mb-0">
                                            @php
                                            $date = $item->post_date;
                                            $sec = strtotime($date);
                                            $newdate = date ("j M ", $sec);
                                            echo $newdate;
                                            @endphp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </section>

            </div>
        </section>
        @endif
    </div>

</div>
@endsection
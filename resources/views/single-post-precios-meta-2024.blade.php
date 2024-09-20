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

                                        <h5 class="titleFormat blackcolor">Recibe un tour guiado <br class="DT_e"> de Escala</h5>

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
                        <p><span>Enviar mensajes</span> masivos o individuales automáticamente</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Diseñar flujos</span> de respuestas automatizadas.</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Programar</span> recordatorios</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Asignar conversaciones</span> a distintos miembros del equipo </p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Realiza encuestas</span> y perfilamiento de contactos</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Crear y actualizar</span> la información de contactos fácilmente en el CRM</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Guardar el historial</span> de conversaciones con cada contacto dentro del CRM</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Filtrar y organizar</span> mensajes a contactos</p>
                    </div>
                    <div class="cardApi"> <img src="{{ App::setFilePath('/assets/images/illustrations/others/check_circle.svg') }}" alt="">
                        <p><span>Crear</span> reportes</p>
                    </div>
                </section>

                <p class="yMas">¡Y más!</p>
            </div>

        </section>

        <section class="w-full customSection sectionParent single_blog_precios_meta_2024_2_0" id="precios">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="info">
                            <h3>Precios actualizados de WhatsApp API para América y España <span>(Septiembre 2024)</span></h3>

                        </div>
                    </div>
                </section>
                <section class="innerSectionElement sct2" id="appLink">
                    <div class="containElements">

                        <div class="info" id="pasosLink">
                            <p>
                                Meta requiere pagar por el uso de la WhatsApp API
                                porque está diseñada específicamente para empresas y
                                proporciona una serie de ventajas y funcionalidades
                                avanzadas que no están disponibles en la versión
                                gratuita de WhatsApp (destinada principalmente para
                                uso personal).
                                <br class="space">
                                <br class="space">
                                Los precios establecidos por Meta se establecen según
                                el país asociado al código de cuenta de WhatsApp del
                                destinatario y 4 diferentes categorías de conversaciones:
                            </p>
                        </div>
                        <div class="containerImage">
                            <img src="{{ App::setFilePath('/assets/images/illustrations/others/img2-persona-nuevos-precios-meta-whatsapp-api.png') }}" alt="">
                        </div>
                    </div>
                </section>

                <section class="innerSectionElement sct2">
                    <div class="info">
                        <ul>
                            <li><span> Marketing (Iniciados por la empresa):</span> Se refiere a las interacciones en las que la empresa toma la iniciativa para enviar mensajes al cliente sin que este haya iniciado previamente la conversación. Para iniciar una conversación fuera de la ventana de 24 horas, la empresa debe utilizar plantillas de mensajes previamente aprobadas por Meta.
                            </li>
                        </ul>
                        <ul>
                            <li><span>Autenticación (Verificación de la identidad):</span> Es una categoría diseñada principalmente para procesos de inicio de sesión, recuperación de contraseñas y otros mensajes automáticos con fines de autenticación.
                            </li>
                        </ul>
                        <ul>
                            <li><span>Utilidad (Actualizaciones):</span> Se refiere a las conversaciones que proveen información transaccional con confirmaciones de entrega, actualizaciones de envíos, recordatorios de citas, notificaciones de pago o facturación.
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span>Servicio (Iniciados por el usuario):</span> Se refiere a las interacciones en las que el cliente inicia la comunicación con la empresa. Una vez que la empresa recibe un mensaje de un contacto, la empresa puede responder y enviar todos los mensajes que desee sin costo adicional durante las siguientes 24 horas. Este período de 24 horas comienza desde el último mensaje recibido, lo que permite una comunicación fluida y continua sin cargos adicionales dentro de ese tiempo.
                            </li>
                        </ul>

                        <p>En la siguiente tabla observamos los precios (en USD) más recientes de Meta para el uso de WhatsApp API en diferentes países de América y España para conversaciones de :
                        </p>
                    </div>
                    <div class="containerImage">
                        <img src="{{ App::setFilePath('/assets/images/illustrations/others/tabla_precios_meta_2024.png') }}" alt="">

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
                            <img src="{{ App::setFilePath('/assets/images/illustrations/otto/right-otto-whatsapp-nuevos-precios-meta-2024.png') }}" alt="">
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
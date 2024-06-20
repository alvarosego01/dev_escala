<div id="landing_blog_2024">
    <div class="sections">


        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_blog_2024 landing_blog_2024_0">
            <div class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="groupElements row">
                            <div class="info col-md-12 col-lg-8">
                                <div class="containElements row threeCol">
                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">
                                        <div class="containerImage">
                                            <img alt="Ilustración Mujer Blog" src="{{ App::setFilePath('/assets/images/person/blog-escala-2024-women-header.png') }}" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">
                                            Potencia tu negocio online con la<br class="DT_e">integración de WooCommerce en Escala
                                        </h1>
                                        <p class="principalBigText grayColorTexts">
                                            <span>¿Cansado de gestionar tu tienda online y tu CRM por separado?</span><br class="DT_e">
                                            Sincronizar manualmente tus datos de ventas, clientes e inventario puede ser una tarea tediosa y propensa a errores. ¡Ahorra tiempo y aumenta la eficiencia con la integración de WooCommerce en Escala!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form7 col-md-12 col-lg-4">
                                <div class="containElements">
                                    <div class="formatForm redirectWeb" redirectweb="true">
                                        <h5 class="titleFormat blackcolor">¡Reserva tu espacio!</h5>
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
                                        <img alt="Ilustración Mujer Blog" src="{{ App::setFilePath('/assets/images/person/blog-escala-2024-women-header.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="w-full customSection sectionParent landing_blog_2024_1">
            <div class="section-row">
                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_blog_2024_2',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/blog/blog-seccion-woocommerce-2.png'),
                        'title' => '

                        ¿Qué es WooCommerce?

                        ',
                        'text' => 'WooCommerce es un plugin de WordPress que permite crear y gestionar
                        tiendas en línea de manera sencilla
                        y personalizable, ideal para vender productos y servicios.',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_blog_2024_3',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/blog/blog-seccion-woocommerce.png'),
                        'title' => '¿Qué es la integración de WooCommerce en Escala?',
                        'text' => 'Escala te permite conectar tu tienda WooCommerce con tu cuenta de Escala,
                        centralizando toda tu información en una única plataforma.',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_blog_2024_4',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/blog/blog-seccion-logros.png',
                        ),
                        'title' => '¿Qué puedes lograr con ella?',
                        'text' =>'
                        Mejorar la eficiencia y la rentabilidad de tu negocio:

                        <br class="espace">
                        <br class="espace">
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/icons/orange_dot.png') .
                                    '" alt="">
                            Sincroniza automáticamente tus datos de productos, clientes y pedidos.
                        </span>
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/icons/orange_dot.png') .
                                    '" alt="">
                            Obtén una vista completa del ciclo de vida de tus clientes.
                        </span>
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/icons/orange_dot.png') .
                                    '" alt="">
                            Segmenta a tus clientes según su comportamiento y crea campañas de marketing personalizadas.
                        </span>
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/icons/orange_dot.png') .
                                    '" alt="">
                            Automatiza tareas repetitivas como el envío de emails y WhatsApps.
                        </span>


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

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_blog_2024_5',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/blog/blog-seccion-analitica.png',
                        ),
                        'title' => '¿Cuán fácil es de integrar?',
                        'text' => '¡Muy fácil! La integración se configura en minutos,
                        sin necesidad de conocimientos técnicos.',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1



                    </div>
                </section>
            </div>
        </section>


        @slideshowBlog_T1(array(
        @slot('classSection')
        landing_blog_2024_6
        @endslot

        @slot('enableTitle')
        true
        @endslot

        @slot('titlePrincipal')
        ¿Cómo la usan otros negocios?
        @endslot

        @slot('subTitlePrincipal')
        Somos "Hogar de Lujo", una mueblería especializada en productos exclusivos. Vendemos a través de nuestra tienda en línea, creada en WordPress y WooCommerce. La integración de WooCommerce con Escala nos ha permitido optimizar enormemente nuestro proceso de ventas.
        <br class="space">
        <br class="space">
        Cuando un cliente realiza una compra, sus datos se transfieren automáticamente al CRM, creando perfiles de leads y asignándoles de inmediato a nuestros vendedores a través de una automatización. Esto nos permite ofrecer una atención personalizada y sin demoras. Además, los emails de confirmación de compra se envían automáticamente, lo que refuerza nuestra profesionalidad y mejora la experiencia del cliente.
        <br class="space">
        <br class="space">
        Las oportunidades de venta en Escala se actualizan automáticamente conforme el estado de la orden en WooCommerce cambia. Esta integración, nos proporciona un control completo sobre nuestro proceso de ventas, permitiendo que las oportunidades pasen fluidamente por las etapas del embudo de ventas hasta que se completen.
        <br class="space">
        <br class="space">
        Con la centralización de datos y la automatización de tareas repetitivas, hemos mejorado significativamente nuestra eficiencia operativa. Ahora podemos enfocarnos más en ofrecer un servicio excepcional y productos de alta calidad, manteniendo una relación cercana con nuestros clientes, estamos muy satisfechos con los resultados.

        @endslot

        @endslideshowBlog_T1



        <section class="customSection sectionParent landing_blog_2024_7">
            <div class="section-row">

                <section class="innerSectionElement sct0">

                    <div class="containElements">
                        <div class="container mt-5">
                            <div class="row">
                                <div class="text-center col-md-12 col-lg-12">
                                    <h2 class="primaryTitle">
                                        ¿Cómo se integra o utiliza en Escala?
                                    </h2>
                                    <div class="ele video col-md-12" style=".vjs-big-play-button{display:none!important}">

                                        @php
                                        $videoEmbed = App::setFilePath('/assets/videos/integrar_woocommerce_a_mi_cuenta_escala (720p).mp4');
                                        $videoCover = App::setFilePath('/assets/images/appEscala/bg-video-usar-app.png');
                                        @endphp

                                        @if (isset($videoEmbed) && $videoEmbed != null)
                                        <div class="youtubeImageContainer ">

                                            <video class="video-js" controls preload="none" poster="{{ $videoCover }}" {{-- poster="MY_VIDEO_POSTER.jpg" --}} data-setup="{
                                          autoplay: false
                                        }">
                                                <source src="{{ $videoEmbed }}" type="video/mp4" />
                                                <source src="{{ $videoEmbed }}" type="video/webm" />
                                                <p class="vjs-no-js">
                                                    To view this video please enable JavaScript, and consider
                                                    upgrading to a
                                                    web browser that
                                                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                                        HTML5 video</a>
                                                </p>
                                            </video>


                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btnCenter">
                        <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                            Ver tutorial
                        </a>
                    </div>
                </section>

            </div>

        </section>


        @php
        $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'landing_blog_2024_8',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/blog/blog-seccion-andres-moreno.png'),
        'title' => '¿Qué es Escala?',
        'text' => 'Un CRM todo-en-uno de marketing y ventas que acelera el crecimiento de empresas con herramientas integradas y acompañamiento personalizado',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Recibe un demo',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'side' => 'left',
        ];
        @endphp
        @contain_text_image_T1($parameters)
        @endcontain_text_image_T1

        <section class="customSection sectionParent landing_blog_2024 landing_blog_2024_9">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="container mt-5">
                            <img src="{!! App::setFilePath('/assets/images/blog/banner-integracion-woocomemerce-escala.png') !!}" alt="Imagen banner woocommerce escala" class="card-img-top">

                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="customSection sectionParent landing_blog_2024 landing_blog_2024_10">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <h2 class="primaryTitle">Si te fue útil ¡Compártelo!</h2>  <span>|</span>
                        <div class="icons">
                            <a href="https://www.facebook.com/escalasoftware/" target="_blank"><img src="{!! App::setFilePath('/assets/images/icons/facebook.svg') !!}" alt="Icon facebook escala"></a>
                            <a href="" target="_blank"><img src="{!! App::setFilePath('/assets/images/icons/twitter.svg') !!}" alt="Icon twitter escala"></a>
                            <a href="https://www.linkedin.com/company/escalaonline/" target="_blank"><img src="{!! App::setFilePath('/assets/images/icons/linkedin.svg') !!}" alt="Icon linkedin escala"></a>
                        </div>
                    </div>
                </section>
            </div>
        </section>


        <section class="customSection sectionParent landing_blog_2024 landing_blog_2024_11">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <div class="containElements">
                        <div class="container mt-5">
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
                <section class="innerSectionElement sct1 row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <div class="card border-0">
                            <img src="{!! App::setFilePath('/assets/images/blog/img-card-articulo-blog.png') !!}" alt="Imagen pc blog" class="card-img-top">
                            <div class="card-body">
                                <h6 class="">Formularios</h6>
                                <h5 class="card-title">Headset No Longer Wired For Sound</h5>
                                <p class="card-text">A constant ability to learn will be on the most crucial skills. Thanks to never-ending piles of data & the amount of insight.</p>
                                <div class="subCard d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{!! App::setFilePath('/assets/images/blog/icons/writer.png') !!}" alt="Anne Bryan" class="rounded-circle mr-2">
                                        <div>
                                            <p class="mb-0">Anne Bryan</p>
                                            <p class="mb-0">Verified writer</p>
                                        </div>
                                    </div>
                                    <div class="div-2">
                                        <p class="mb-0">02 May</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <div class="card border-0">
                            <img src="{!! App::setFilePath('/assets/images/blog/img-card-articulo-blog-2.png') !!}" alt="Imagen pc blog" class="card-img-top">
                            <div class="card-body">
                                <h6 class="">Formularios</h6>
                                <h5 class="card-title">How Does An Lcd Screen Work</h5>
                                <p class="card-text">Thanks to never-ending piles of data & the amount of insight. Thanks to never-ending piles of data & the amount of insight.</p>
                                <div class="subCard d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{!! App::setFilePath('/assets/images/blog/icons/writer-2.png') !!}" alt="Lettie Hale" class="rounded-circle mr-2">
                                        <div>
                                            <p class="mb-0">Lettie Hale</p>
                                            <p class="mb-0">Verified writer</p>
                                        </div>
                                    </div>
                                    <div class="div-2">
                                        <p class="mb-0">02 May</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <div class="card border-0">
                            <img src="{!! App::setFilePath('/assets/images/blog/img-card-articulo-blog-3.png') !!}" alt="Imagen pc blog" class="card-img-top">
                            <div class="card-body text-left">
                                <h6 class="text-left">Formularios</h6>
                                <h5 class="card-title text-left">Headset No Longer Wired For Sound</h5>
                                <p class="card-text">A constant ability to learn will be on the most crucial skills. Thanks to never-ending piles of data & the amount of insight.</p>
                                <div class="subCard d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{!! App::setFilePath('/assets/images/blog/icons/writer.png') !!}" alt="Anne Bryan" class="rounded-circle mr-2">
                                        <div>
                                            <p class="mb-0">Anne Bryan</p>
                                            <p class="mb-0">Verified writer</p>
                                        </div>
                                    </div>
                                    <div class="div-2">
                                        <p class="mb-0">02 May</p>
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
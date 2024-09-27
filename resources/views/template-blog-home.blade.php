{{--

    Template Name: [B] Blog - Home

--}}


@extends('layouts.app')
@section('content')

<div id="blog-home-bootstrap">

    <div class="sections">

        @php
        $setForm = ACF_CUSTOM::_getField( 'newsletter_form' );
        @endphp

        @php
        $parameters = array(
        'backgroundImageType' => false,
        'overlay' => false,
        'classSection' => 'threeCol blogHome0',
        'title' => '
        <span style="color: #B9E6E9">
            Mantén tu conocimiento <br class="space">
            de marketing y ventas al día
        </span>
        ',
        'text' => '
        <span class="whiteColor">
            Encuentra en nuestro blog tendencias, <br class="space">
            novedades y mejores prácticas <br class="space">
            para empoderar tu formación.
        </span>
        ',
        'threeCol' => true,
        'textForm' => '
        Recibe un tour guiado <br class="space">
        de Escala
        ',
        'backgroundImage' => null,
        'overlayImage' => null,
        'image' => App::setFilePath('/assets/images/person/blog_header.png'),
        'setForm' => $setForm
        ) ;
        @endphp
        @header_t1( $parameters )
        @endheader_t1

        <section class="component-slideshowBlog-T1 customSection sectionParent  blogHome2">

            <div class="section-row">


                <section class="innerSectionElement sct1">

                    <div class="containElements">


                        <h2 class="primaryTitle blackColor">
                            <span class="greenBlueColor">Artículos</span> destacados
                        </h2>



                        <p class="primaryText grayColorTexts">
                            Dale un vistazo a los artículos más leídos. Tendencias de las principales industrias, mejores <br class="DT_e">
                            prácticas y conocimientos estratégicos sobre marketing, ventas y fidelización.
                        </p>


                    </div>

                </section>

                <section class="innerSectionElement sct2 ">

                    <div class="groupElements row">


                        <div id="carousel-blogHome2" class="carousel slide pointer-event" data-bs-ride="carousel">
                            <div class="carousel-inner">



                                <div class="carousel-item active">


                                    <div class="backgroundImage" style="background-image: url({!! App::setFilePath('/assets/images/banners/img_banner_articulos_destacados.svg') !!})">

                                        <a href="https://escala.com/escala-ronda-financiamiento-2024-crm-venta-pyme/">
                                            <div class="group">
                                                <h2 class="primaryTitle whiteColor">
                                                    Escala completa ronda de $12M para consolidarse<br class="DT_e">
                                                    <span>como el CRM líder para PyMEs hispanas</span>
                                                </h2>
                                                <p class="primaryText whiteColor">
                                                </p>

                                            </div>
                                            <div class="group groupImg">
                                                <div class="continerImg">
                                                    <div class="containerImage">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/ronda_12_m_blog_img.png') !!}" loading="lazy">
                                                    </div>

                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="carousel-item ">


                                    <div class="backgroundImage" style="background-image: url({!! App::setFilePath('/assets/images/banners/flujos_automatizados_escala_img_banner_destacada_articulo_blog.svg') !!})">

                                        <a href="https://escala.com/flujos-automatizados-4-funciones-que-debes-conocer/">
                                            <div class="group">
                                                <h2 class="primaryTitle whiteColor colorSpecialblog">
                                                    Flujos automatizados: 4 <br class="DT_e">
                                                    <span>funciones que debes conocer</span>
                                                </h2>
                                                <p class="primaryText whiteColor">
                                                </p>

                                            </div>
                                            <div class="group groupImg">
                                                <div class="continerImg">
                                                    <div class="containerImage">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/flujos_automatizados_blog_img.png') !!}" loading="lazy">
                                                    </div>

                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="carousel-item ">


                                    <div class="backgroundImage" style="background-image: url({!! App::setFilePath('/assets/images/banners/app_inbox_escala_img_banner_destacada_articulo_blog.svg') !!})">

                                        <a href="https://escala.com/whatsapp-inbox-app-movil-escala/">
                                            <div class="group">
                                                <h2 class="primaryTitle whiteColor">
                                                    Ahora puedes conversar y gestionar los WhatsApps <br class="DT_e">
                                                    <span>de tu negocio desde la app móvil del CRM de Escala</span>
                                                </h2>
                                                <p class="primaryText whiteColor">
                                                </p>

                                            </div>
                                            <div class="group groupImg">
                                                <div class="continerImg">
                                                    <div class="containerImage">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/inbox_whatsapp_blog_img.png') !!}" loading="lazy">
                                                    </div>

                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                                <div class="carousel-item ">


                                    <div class="backgroundImage" style="background-image: url({!! App::setFilePath('/assets/images/banners/precios_api_meta_escala_img_banner_destacada_articulo_blog.svg') !!})">

                                        <a href="https://escala.com/whatsapp-api-y-precios-meta/">
                                            <div class="group">
                                                <h2 class="primaryTitle whiteColor colorSpecialblog">
                                                    WhatsApp API: <br class="DT_e">
                                                    <span> Precios de Meta actualizados y su integración con el CRM Escala.</span>
                                                </h2>
                                                <p class="primaryText whiteColor">
                                                </p>

                                            </div>
                                            <div class="group groupImg">
                                                <div class="continerImg">
                                                    <div class="containerImage">
                                                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/precios_meta_blog_img.png') !!}" loading="lazy">
                                                    </div>

                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>


                            </div>

                            <div class="controlsSlideshow">

                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-blogHome2" data-bs-slide="prev">

                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>

                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-blogHome2" data-bs-slide="next">

                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>

                                </button>

                            </div>

                        </div>

                    </div>

                </section>


            </div>
            <div style="background-image: url('null')" class="backgroundPlanets">
            </div>


        </section>




        @php
        $query = array(
        'post_type' => 'post',
        'category_name' => 'Ventas',
        'posts_per_page' => 3,
        'order' => 'DESC'
        );
        $query = Posts::getPosts($query);

        $parameters = array(
        "posts" => $query,
        'categoryTag' => false,
        'categoryTagList' => [
        "Ventas"
        ],
        'classSection' => 'blogHome3',
        'enableTitle' => true,
        'linkCategory' => App::setTypeUrl().'/blog/ventas',
        )

        @endphp

        @articlesBlog_T1($parameters)

        @slot('titlePrincipal')

        <a href="{{ App::setTypeUrl().'/blog/ventas' }}">
            <span class="greenBlueColor">Artículos</span> de ventas
        </a>

        @endslot


        @endarticlesBlog_T1


        @php
        $query = array(
        'post_type' => 'post',
        'category_name' => 'Marketing',
        'posts_per_page' => 3,
        'order' => 'DESC'
        );
        $query = Posts::getPosts($query);

        $parameters = array(
        "posts" => $query,
        'categoryTag' => false,
        'categoryTagList' => [
        "Marketing"
        ],
        'classSection' => 'blogHome4',
        'enableTitle' => true,
        'titlePrincipal' => null,
        'linkCategory' => App::setTypeUrl().'/blog/marketing',
        )
        @endphp

        @articlesBlog_T1($parameters)

        @slot('titlePrincipal')

        <a href="{{ App::setTypeUrl().'/blog/marketing' }}">
            <span class="greenBlueColor">Artículos</span> de marketing
        </a>

        @endslot


        @endarticlesBlog_T1



    </div>

</div>


@endsection
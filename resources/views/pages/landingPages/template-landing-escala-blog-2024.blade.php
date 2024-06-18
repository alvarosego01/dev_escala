<div id="landing_blog_2024">


    <div class="sections">

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_blog_2024 landing_blog_2024_0 ">


            <div class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Mujer Blog" src="{{ App::setFilePath('/assets/images/person/blog-escala-2024-women-header.png') }}" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">

                                            Potencia tu negocio online con la<br class="DT_e">
                                            integración de WooCommerce en Escala

                                        </h1>

                                        <p class="principalBigText grayColorTexts">
                                            <span>
                                                ¿Cansado de gestionar tu tienda online y tu CRM por
                                                separado?</span><br class="DT_e">
                                            Sincronizar manualmente tus datos de ventas, clientes e inventario
                                            puede ser una tarea tediosa y propensa a errores. ¡Ahorra tiempo y
                                            aumenta la eficiencia con la integración de WooCommerce en Escala!

                                        </p>


                                    </div>

                                </div>



                            </div>
                            <div class="form7 col-md-12 col-lg-4 ">

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
                                        <img alt="Ilustración Mujer Blog" src="{{ App::setFilePath('/assets/images/person/blog-escala-2024-women-header.png') }}" </div>

                                    </div>



                                </div>

                            </div>



                        </div>

                    </section>

                </div>



            </div>

        </section>


        <section class="customSection sectionParent landing_blog_2024  landing_blog_2024_3">

            <div class="section-row">

                <section class="innerSectionElement sct0">

                    <div class="containElements">
                        <div class="container mt-5">
                            <div class="row">
                                <div class="text-center col-md-12 col-lg-12">
                                    <h2 class="primaryTitle">
                                        Artículos <span class="blackColor2 "> relacionados</span> <br class="DT_e">
                                    </h2>

                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="innerSectionElement sct1 row">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-3">
                            <div class="card border-0 ">
                                <img src="{!! App::setFilePath('/assets/images/blog/img-card-articulo-blog.png') !!}" alt="Imagen pc blog" class="card-img-top">
                                <div class="card-body">
                                    <h6 class="">Formularios</h6>
                                    <h5 class="card-title">Headset No Longer Wired For Sound</h5>
                                    <p class="card-text">A constant ability to learn will be on the most crucial skills. Thanks to never-ending piles of data & the amount of insight.</p>
                                    <div class=" subCard d-flex justify-content-between align-items-center">
                                        <div class=" d-flex align-items-center">
                                            <img src="{!! App::setFilePath('/assets/images/blog/icons/writer.png') !!}" alt="Anne Bryan" class="rounded-circle mr-2">
                                            <div >
                                                <p class="mb-0">Anne Bryan</p>
                                                <p class="mb-0 ">Verified writer</p>
                                            </div>
                                        </div>
                                        <div class="div-2">
                                            <p class="mb-0 ">02 May</p>
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
                                    <h5 class="card-title">How Does An Lcd
                                        Screen Work</h5>
                                    <p class="card-text">Thanks to never-ending piles of data & the amount of insight. Thanks to never-ending piles of data & the amount of insight.</p>
                                    <div class="subCard d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="{!! App::setFilePath('/assets/images/blog/icons/writer-2.png') !!}" alt="Lettie Hale" class="rounded-circle mr-2">
                                            <div>
                                                <p class="mb-0">Lettie Hale</p>
                                                <p class="mb-0 ">Verified writer</p>
                                            </div>
                                        </div>
                                        <div class="div-2">
                                            <p class="mb-0 ">02 May</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-3">
                            <div class="card border-0">
                                <img src="{!! App::setFilePath('/assets/images/blog/img-card-articulo-blog-3.png') !!}" alt="Imagen pc blog" class="card-img-top">
                                <div class="card-body text-left">
                                    <h6 class=" text-left">Formularios</h6>
                                    <h5 class="card-title text-left">Headset No Longer Wired For Sound</h5>
                                    <p class="card-text">A constant ability to learn will be on the most crucial skills. Thanks to never-ending piles of data & the amount of insight.</p>
                                    <div class=" subCard d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="{!! App::setFilePath('/assets/images/blog/icons/writer.png') !!}" alt="Anne Bryan" class="rounded-circle mr-2">
                                            <div>
                                                <p class="mb-0">Anne Bryan</p>
                                                <p class="mb-0 ">Verified writer</p>
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
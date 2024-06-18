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



    </div>
</div>



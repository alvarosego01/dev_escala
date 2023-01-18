{{-- Banner contact form 7 type 1

    @var $classSection class context | string
    @var $title Title principal | html
    @var $text text desc | html
    @var $image image principal header | string --}}

<section id="lead-form-bottom"
    class="component-bannerForms7-t1 bg-color customSection sectionParent {{ $classSection }} ">

    <div class="section-row">

        <section class="innerSectionElement sct1">

            <div class="groupElements row">


                @if ((isset($side) && $side == 'left') || !isset($side) || (!isset($side) || $side == null))

                    <div class="form7 col-md-12 col-lg-6">

                        <div class="containElements">

                            <div class="formatForm redirectWeb"   redirectWeb="true">

                                <h5 class="titleFormat blackcolor">{!! $textForm !!}</h5>



                                @if ( isset( $setForm ) && $setForm != null && $setForm != '' )

                                    @php
                                        $f = $setForm;
                                    @endphp

                                @else
                                    @php
                                        $f = ACF_CUSTOM::_getField('form7');
                                    @endphp
                                @endif

                                @if (isset($f) && $f != null)
                                    {!! do_shortcode($f) !!}
                                @else
                                    @php
                                        $_args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
                                        $_rs = array();
                                        $_formShortcode = null;
                                        if( $_data = get_posts($_args)){
                                            foreach($_data as $_key){
                                                $_rs[$_key->ID] = $_key->post_title;
                                                if( $_key->post_title === 'Profile demo - Flujo Demo' ){
                                                    $_formShortcode = '[contact-form-7 id="'.$_key->ID.'"]';
                                                }
                                            }
                                        }else{
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                        }
                                    @endphp
                                {!! do_shortcode($_formShortcode); !!}
                                @endif


                            </div>

                        </div>
                    </div>



                    <div class="info col-md-12 col-lg-6">

                        <div class="containElements">


                            <h2 class="principalBigTitle blackColor">
                                {!! $title !!}
                            </h2>

                            @if ($text != null)
                                <p class="principalBigText grayColorTexts">
                                    {!! $text !!}
                                </p>
                            @endif

                            @if ($enableButton != null)
                            <a href="{{ $urlButton }}" class="goToHash boton {{ $typeButton }}">
                                {{ $textButton }}
                            </a>
                        @endif

                            <div class="containerImage">
                                <img src="{{ $image }}" alt="@if (isset($img_alt)) {{ $img_alt }} @endif" loading="lazy">
                            </div>



                        </div>


                    </div>

                @endif
                @if (isset($side) && $side == 'right')

                    <div class="info col-md-12 col-lg-6">

                        <div class="containElements">


                            <h2 class="principalBigTitle blackColor">
                                {!! $title !!}
                            </h2>

                            @if ($text != null)
                                <p class="principalBigText grayColorTexts">
                                    {!! $text !!}
                                </p>
                            @endif

                            @if ($enableButton != null)
                            <a href="{{ $urlButton }}" class="goToHash boton {{ $typeButton }}">
                                {{ $textButton }}
                            </a>
                        @endif

                            <div class="containerImage">
                                <img  src="{{ $image }}" alt="@if (isset($img_alt)) {{ $img_alt }} @endif" loading="lazy">
                            </div>



                        </div>

                    </div>

                    <div class="form7 col-md-12 col-lg-6">

                        <div class="containElements">

                            <div class="formatForm redirectWeb"   redirectWeb="true">

                                <h5 class="titleFormat blackcolor">{!! $textForm !!}</h5>



                                @if ( isset( $setForm ) && $setForm != null && $setForm != '' )

                                    @php
                                        $f = $setForm;
                                    @endphp

                                @else
                                    @php
                                        $f = ACF_CUSTOM::_getField('form7');
                                    @endphp
                                @endif

                                @if (isset($f) && $f != null)
                                    {!! do_shortcode($f) !!}
                                @else
                                    @php
                                        $_args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
                                        $_rs = array();
                                        $_formShortcode = null;
                                        if( $_data = get_posts($_args)){
                                            foreach($_data as $_key){
                                                $_rs[$_key->ID] = $_key->post_title;
                                                if( $_key->post_title === 'Profile demo - Flujo Demo' ){
                                                    $_formShortcode = '[contact-form-7 id="'.$_key->ID.'"]';
                                                }
                                            }
                                        }else{
                                            $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                        }
                                    @endphp
                                {!! do_shortcode($_formShortcode); !!}
                                @endif


                            </div>

                        </div>
                    </div>

                @endif

            </div>

        </section>

    </div>

</section>

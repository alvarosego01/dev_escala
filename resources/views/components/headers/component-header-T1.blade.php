{{-- Header type 1

Background image or color

Title | Form
Text  |
Photo |

@var $backgroundImageType: type of header | boolean
@var $classSection: class context | string
@var $backgroundImage: url background image file | string
@var $overlay: enable overlay type | boolean
@var $overlayImage: enable overlay type | boolean
@var $title: title of header | string
@var $text: text desc header | string
@var $image: image principal header | string
@var $textForm: text header form | string
@var $backgroundColor: background color hexadecimal | string --}}

@php

if (!$threeCol) {
$threeCol = false;
}

@endphp



@if ($backgroundImageType == true)


<section id="lead-form"
    class="component-header-t1 bg-image overlay customSection sectionParent fullWidth {{ $classSection }} ">


    <div style="background-image: url('{{ $backgroundImage }}')" class="backgroundFull">

        @if ($overlay == true)
        <div style="background-image: url('{{ $overlayImage }}')" class="backgroundPlanets">
        </div>
        @endif
        @if ( isset($overlayMultiple) && $overlayMultiple != null)

        {!! $overlayMultiple !!}

        @endif

        <div class="section-row">
            <section class="innerSectionElement sct1">

                <div class="groupElements row">


                    <div class="info
                        @if ($threeCol == true)
                            col-md-12 col-lg-8
                        @else
                            col-md-12 col-lg-7
                        @endif
                        ">

                        @if ($threeCol == true)

                        <div class="containElements row threeCol">

                            <div class="ele ele1 col-md-12 col-lg-6">

                                <div class="containerImage">
                                    <img @if(isset($img_alt) && $img_alt !=null) alt="{!! $img_alt !!}" @endif src="{{ $image }}" alt="" loading="lazy">
                                </div>

                            </div>

                            <div class="ele ele2 col-md-12 col-lg-6">
                                <h1 class="principalBigTitle blackColor">
                                    {!! $title !!}
                                </h1>

                                @if ($text != null)
                                <p class="principalBigText grayColorTexts">
                                    {!! $text !!}
                                </p>
                                @endif

                            </div>

                        </div>
                        @else

                        <div class="containElements">

                            <h1 class="principalBigTitle blackColor">
                                {!! $title !!}
                            </h1>

                            @if ($text != null)
                            <p class="principalBigText grayColorTexts">
                                {!! $text !!}
                            </p>
                            @endif

                            <div class="containerImage">
                                <img @if(isset($img_alt) && $img_alt !=null) alt="{!! $img_alt !!}" @endif src="{{ $image }}" alt="" loading="lazy">
                            </div>


                        </div>

                        @endif



                    </div>
                    <div class="form7
                            @if ($threeCol == true)
                                col-md-12 col-lg-4
                            @else
                                col-md-12 col-lg-5
                            @endif
                        ">
                        <div class="containElements">

                            <div class="formatForm redirectWeb" redirectWeb="true">

                                <div class="form-container form-1" style="text-align:center;">
                                    <img style="margin-top: 30px; margin-bottom:-15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-1.png') !!}" loading="lazy">
                                    <h5 class="titleFormat blackcolor">Recibe un demo
                                        <br class="space">
                                        personalizado en vivo
                                    </h5>
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
                                    $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                    }
                                    @endphp
                                    {!! do_shortcode($_formShortcode) !!}
                                </div>

                                <div class="form-container form-2" style="display:none; text-align:center;">
                                    <img style="margin-top: 30px; margin-bottom:-15px; width:80%;" src="{!! App::setFilePath('/assets/images/illustrations/others/form-step-2.png') !!}" loading="lazy">
                                    <h5 class="titleFormat blackcolor">Ayúdanos a personalizar
                                        <br class="space">tu demo
                                    </h5>
                                    @php
                                    $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                    $_rs = [];
                                    $_formShortcode = null;
                                    if ($_data = get_posts($_args)) {
                                    foreach ($_data as $_key) {
                                    $_rs[$_key->ID] = $_key->post_title;
                                    if ($_key->post_title === 'Demo flujo step 2') {
                                    $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                    }
                                    }
                                    } else {
                                    $_rs['0'] = esc_html__('No Contact Form found', 'text-domain');
                                    }
                                    @endphp
                                    {!! do_shortcode($_formShortcode) !!}
                                </div>

                            </div>

                        </div>

                    </div>





                </div>

            </section>

        </div>



    </div>

</section>



@endif

@if ($backgroundImageType == false)

<section id="lead-form" class="component-header-t1 bg-color customSection sectionParent {{ $classSection }} @if ($overlay == true) overlay @endif ">

    <div class="section-row">

        <section class="innerSectionElement sct1">

            <div class="groupElements row">

                <div class="info
                        @if ($threeCol == true)
                            col-md-12 col-lg-8
                        @else
                            col-md-12 col-lg-7
                        @endif
                    ">
                    @if ($threeCol == true)

                    <div class="containElements row threeCol">

                        <div class="ele ele1 col-md-12 col-lg-6">

                            <div class="containerImage">
                                <img @if(isset($img_alt) && $img_alt !=null) alt="{!! $img_alt !!}" @endif src="{{ $image }}" alt="" loading="lazy">
                            </div>

                        </div>

                        <div class="ele ele2 col-md-12 col-lg-6">
                            <h1 class="principalBigTitle blackColor">
                                {!! $title !!}
                            </h1>

                            @if ($text != null)
                            <p class="principalBigText grayColorTexts">
                                {!! $text !!}
                            </p>
                            @endif

                        </div>

                    </div>
                    @else

                    <div class="containElements">

                        <h1 class="principalBigTitle blackColor">
                            {!! $title !!}
                        </h1>

                        @if ($text != null)
                        <p class="principalBigText grayColorTexts">
                            {!! $text !!}
                        </p>
                        @endif

                        <div class="containerImage">
                            <img @if(isset($img_alt) && $img_alt !=null) alt="{!! $img_alt !!}" @endif src="{{ $image }}" alt="" loading="lazy">
                        </div>


                    </div>

                    @endif

                </div>

                <div class="form7
                    @if ($threeCol == true)
                        col-md-12 col-lg-4
                    @else
                        col-md-12 col-lg-5
                    @endif
                    ">

                    <div class="containElements">

                        <div class="formatForm redirectWeb" redirectWeb="true">

                            <h5 class="titleFormat blackcolor">{!! $textForm !!}</h5>

                            @form_general()
                            @endform_general
                            {{-- @if ( isset( $setForm ) && $setForm != null && $setForm != '' )

                                    @php
                                        $f = $setForm;
                                    @endphp

                                @else
                                    @php
                                        $f = ACF_CUSTOM::_getField('form7');
                                    @endphp
                                @endif
                             @if (isset($f) && $f != null)
                             {!! do_shortcode( $f ) !!}
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
                                @endif --}}


                        </div>

                    </div>
                </div>



            </div>

        </section>

    </div>

    @if ($overlay == true)
    <div style="background-image: url('{{ $overlayImage }}')" class="backgroundPlanets">
    </div>
    @endif

    @if ( isset($overlayMultiple) && $overlayMultiple != null)

    {!! $overlayMultiple !!}

    @endif

</section>



@endif
{{--
  Template Name: [B] Zoom Home Step1
   --}}

<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-1-css"
    href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.5&amp;display=swap"
    type="text/css" media="all">




@extends('layouts.app')


@section('content')






    <div id="zoomHome-step1-Bootstrap">

        <div class="sections">


            <section id="lead-form" class="customSection sectionParent zoomHomeSection0">


                <div class="section-row">



                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">

                            <div class="info col-md-12 col-lg-6">

                                <div class="containElements">


                                    <h1 class="principalBigTitle blackColor">
                                        Genera más leads,<br> <span class="greenBlueColor">clientes y ventas</span>
                                    </h1>
                                    <p class="principalBigText grayColorTexts">
                                        Con Escala, la plataforma <br> de marketing digital y ventas <br> más completa y
                                        fácil de utilizar.
                                    </p>

                                    <div class="containerImage">
                                        <img alt="Genera más leads, clientes y ventas con Escala"
                                            src="{!! App::setFilePath('/assets/images/person/am/andres_moreno_otto1.png') !!}" alt="" loading="lazy">
                                    </div>



                                </div>


                            </div>
                            <div class="form7 col-md-12 col-lg-6">

                                <div class="containElements">

                                    <div class="formatForm">

                                        <h4 class="titleFormat blackcolor">
                                            Recibe un Demo <br class="space"> personalizado
                                        </h4>


                                        @php
                                            $f = get_field('form7');
                                        @endphp

                                        @if ($f && $f != null && $f != '')

                                            {!! do_shortcode($f) !!}

                                        @else

                                            {!! do_shortcode('[contact-form-7 id="73" title="Contacto Paso 1"]') !!}

                                        @endif


                                    </div>



                                </div>
                            </div>


                        </div>

                    </section>

                </div>

                <div style="background-image: url('{!! App::setFilePath('/assets/images/overlays/estrellas 2.png') !!}')" class="backgroundPlanets">
                </div>




            </section>

        </div>

    </div>





@endsection

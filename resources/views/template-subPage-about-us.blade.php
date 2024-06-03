{{--
  Template Name: [B] Sub page - About us
--}}

@extends('layouts.app')
@section('content')
    <div id="subPage-about-us-bootstrap">
        <div class="sections">


            <section class="component-info-text-image-T1 customSection sectionParent subPage_AboutUs_0 ">

              <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg_aboutUs.png') !!}')">

                <div class="section-row">

                    <section class="innerSectionElement sct2 right">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8">

                                <h1 class="primaryTitle">

                                    <span style="color: #00506E;">Érase una vez...</span>

                                </h1>

                                <p class="text">

                                    <span class="greenBlueColor">
                                        Hace más de una década, Andrés Moreno fundó Open English, la plataforma<br
                                            class="DT_e">
                                        #1 de aprendizaje de idiomas en línea de América Latina – y con ello, empezó<br
                                            class="DT_e">
                                        una historia exitosa de emprendimiento y el desarrollo de empresas líderes en<br
                                            class="DT_e">
                                        sus categorías. <br class="space"><br class="space">

                                        Ha recibido numerosos reconocimientos incluyendo el premio a «Emprendedor<br
                                            class="DT_e">
                                        de la Década» en Latinoamérica por Babson College; trayendo talento de clase<br
                                            class="DT_e">
                                        mundial a sus múltiples proyectos.<br class="space"><br
                                            class="space">

                                        Inspirado por las problemáticas de muchas empresas en LATAM, <strong>Andrés y un
                                            grupo<br class="DT_e">
                                            de expertos en marketing digital y ventas, crearon Escala, la Plataforma CRM
                                            todo<br class="DT_e">
                                            en uno pensada para ayudar a los negocios a crecer de una manera
                                            sostenida.</strong>
                                    </span>

                                </p>

                            </div>

                            <div class="image col-md-12 col-lg-4">
                                <div class="containerImage">

                                    <img src="{!! App::setFilePath('/assets/images/person/am/am_aboutUs.png') !!}" loading="lazy">

                                </div>
                            </div>

                        </div>


                    </section>



                </div>
              </div>



            </section>

            @php
                $teamList = [
                    [
                        'name' => '
      Andrés Moreno <br class="space">
      <span class="greenBlueColor">El visionario</span>
                    ',
                        'textInfo' => '
                        Fundador de Open English, Next U y Escala; <br class="DT_e">
                        Co-presidente de Endeavor Miami. Andrés es <br class="DT_e">
                        ampliamente reconocido en América Latina como <br class="DT_e">
                        un líder en emprendimiento y un modelo a seguir.
                        <br class="space"><br class="space">
                        Venezolano – ha vivido en 9 países <br class="DT_e">
                        y habla 3 idiomas fluidamente.
                        ',
                        'img' => App::setFilePath('/assets/images/illustrations/team/andres.png'),
                    ],
                    [
                        'name' => '
      Alfonso Santiago <br class="space">
      <span class="greenBlueColor">Líder ejecutivo</span>
                    ',
                        'textInfo' => '
                        Ex-COO de Open English, emprendedor y <br class="DT_e">
                        fundador de empresas vendidas en millones de <br class="DT_e">
                        dólares. Junto a Andrés Moreno ha sido <br class="DT_e">
                        responsable de escalar negocios, levantar cientos <br class="DT_e">
                        de millones de capital de inversión y desarrollar <br class="DT_e">
                        marcas líderes en LatAm.
                        <br class="space">
                        <br class="space">
                        Papá, Argentino e hincha de Talleres de Córdoba.
                        ',
                        'img' => App::setFilePath('/assets/images/illustrations/team/Alfonso 1.png'),
                    ],
                    [
                        'name' => '
      John McIntire <br class="space">
      <span class="greenBlueColor">Alquimista financiero</span>
      ',
                        'textInfo' => '
      Ex-CEO de Goldman Sachs Latinoamérica y<br class="DT_e">
      director / asesor de múltiples compañías privadas.<br class="DT_e">
      Inversionista ángel y mentor de fundadores,<br class="DT_e">
      también ha trabajado en estrecha colaboración con<br class="DT_e">
      Andrés durante la última década.<br class="space"><br class="space">

      Cubano-americano – un ávido corredor, ha<br class="DT_e">
      terminado múltiples maratones llegando a estar<br class="DT_e">
      por encima de su grupo de edad hasta un 10%<br class="DT_e">
      en performance.
      ',
                        'img' => App::setFilePath('/assets/images/illustrations/team/john1.png'),
                    ],
                    [
                        'name' => '
      Andrea Dalle Molle <br class="space">
<span class="greenBlueColor">La mente estratégica</span>
      ',
                        'textInfo' => '
      Director de la firma de consultoría: “Éxito<br class="DT_e">
      Ventures”, ha trabajado en estrecha colaboración<br class="DT_e">
      con Andrés asesorando a docenas de empresas en<br class="DT_e">
      estrategia de negocios, performance marketing y<br class="DT_e">
      embudos de ventas. También ha liderado equipos<br class="DT_e">
      desarrollando softwares innovadores.<br class="space"><br class="space">

      Italiano – ex- jugador profesional de póker, fue<br class="DT_e">
      «Final Table» en el European Poker Tour.
      ',
                        'img' => App::setFilePath('/assets/images/illustrations/team/andrea.png'),
                    ],

                    [
                        'name' => '
      Manuel Gil <br class="space">
<span class="greenBlueColor">Chief de tech</span>
      ',
                        'textInfo' => '
      Co-fundador y CEO de CodeLabs, una firma de<br class="DT_e">
      consultoría y tercerización de software. Ha liderado<br class="DT_e">
      múltiples proyectos de tecnología en los últimos<br class="DT_e">
      15 años, en docenas de países de todo el mundo.<br class="space"><br class="space">

      Cubano – papá, fanático de la guitarra y fotógrafo
      ',
                        'img' => App::setFilePath('/assets/images/illustrations/team/manuel.png'),
                    ],
                    [
                        'name' => '
      Vanessa Durán <br class="space">
<span class="greenBlueColor">La mejor aliada de los clientes</span>
      ',
                        'textInfo' => '
      Directora de la consultora: “Éxito Ventures”,<br class="DT_e">
      tiene una amplia experiencia en mejorar las<br class="DT_e">
      ventas, atención al cliente y las comunicaciones<br class="DT_e">
      de las marcas para docenas de compañías en<br class="DT_e">
      los Estados Unidos y América Latina.<br class="space"><br class="space">

      Venezolana – fundadora de organizaciones sin<br class="DT_e">
      fines de lucro, reconocida por el Congreso de<br class="DT_e">
      los EE. UU. por su talento y contribución a la<br class="DT_e">
      comunidad multicultural.
      ',
                        'img' => App::setFilePath('/assets/images/illustrations/team/vane5.png'),
                    ],

                ];

            @endphp


            <section class="customSection sectionParent subPage_AboutUs_1">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="primaryTitle blackColor">
                                Equipo <span class="greenBlueColor">al Timón</span>
                            </h2>

                            <p class="primaryText grayColorTexts">
                                    Contamos con un equipo comprometido en potenciar a las empresas a<br
                                        class="DT_e">
                                    través de Escala convirtiéndolas en negocios exitosos en toda la región.

                            </p>

                        </div>

                    </section>
                    <section class="innerSectionElement sct2">

                        <div class="groupElements row">

                            @foreach ($teamList as $item)
                                <div class="col-12 col-md-12 col-lg-6 teamItem">

                                    <div class="containItem">

                                        <div class="image">
                                            <div class="containerImage">
                                                <img src="{!! $item['img'] !!}" alt="" loading="lazy">
                                            </div>

                                        </div>
                                        <div class="info">
                                            <h3 class="secondaryTitle blackColor">
                                                {!! $item['name'] !!}
                                            </h3>
                                            <p class="commonText ">
                                                {!! $item['textInfo'] !!}
                                            </p>
                                        </div>

                                    </div>

                                </div>
                            @endforeach



                        </div>

                    </section>


                    {{-- <section class="innerSectionElement sct3">

      <div class="groupElements row">

        <div class="containElements">

          <h3 class="primaryTitle">
            ¡Únete al equipo!
          </h3>

          <button class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
            Envíanos tu CV
          </button>


      </div>

      </div>

    </section> --}}






                </div>

        </div>

    </div>
@endsection

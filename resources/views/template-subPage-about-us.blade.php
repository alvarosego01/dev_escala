
{{--
  Template Name: [B] Sub page - About us
--}}

@extends('layouts.app')
@section('content')
<div id="subPage-about-us-bootstrap">
  <div class="sections">



@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'subPage_AboutUs_0',
    'enableTitle' => false,
    'img' => App::setFilePath('/assets/images/person/am/tapa_video_thankyou_page .png'),
    'title' => '
    Erase una vez...
    ',
    'text' => '
      Hace más de una década, Andrés Moreno fundó Open English, la plataforma #1 de aprendizaje <br class="desktopTabletElement">
      de idiomas en línea de América Latina – y con ello, empezó una  historia exitosa de <br class="desktopTabletElement">
      emprendimiento y el desarrollo de empresas líderes en sus categorías. Ha recibido numerosos <br class="desktopTabletElement">
      reconocimientos incluyendo el premio a «Emprendedor de la Década» en Latinoamérica por <br class="desktopTabletElement">
      Babson College; trayendo talento de clase mundial a  sus múltiples proyectos.
      <br class="space"><br class="space">
      Inspirado por las problemáticas de muchas empresas en LATAM, <strong>
        Andrés y un grupo de <br class="desktopTabletElement">
        expertos en marketing digital y ventas, crearon Escala, la Plataforma CRM todo en uno <br class="desktopTabletElement">
        pensada para ayudar a los negocios a crecer de una manera sostenida.
      </strong>
    ',
    'enableButton' => false,
    'urlButton' => '#lead-form',
    'textButton' => 'Hablar con un asesor',
    'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
    'side' => 'right',
];
@endphp

@contain_text_image_T1( $parameters )

@endcontain_text_image_T1



@php
  $teamList = array(
    [
      'name' => '
      Andrés Moreno. <br class="space">
      <span class="greenBlueColor">El visionario</span>
      ',
      'textInfo' => '
          Fundador y CEO de Open English, Next U y escala; <br class="desktopTabletElement">
          Co-presidente de Endeavor Miami. Andrés es ampliamente <br class="desktopTabletElement">
          reconocido en América Latina como un líder en emprendimiento <br class="desktopTabletElement">
          y un modelo a seguir.
          <br class="space"><br class="space">
          Venezolano – ha vivido en 9 países <br class="desktopTabletElement">
          y habla 3 idiomas fluidamente.
      ',
      'img' => App::setFilePath('/assets/images/illustrations/team/andres.png')
  ],
    [
      'name' => '
      Paul Medrisch. <br class="space">
      <span class="greenBlueColor">Comandando la tripulación</span>
      ',
      'textInfo' => '
          Extensa experiencia en cargos directivos en empresas digitales en <br class="desktopTabletElement">
          Latam: Business development Director Latam de PedidosYa, <br class="desktopTabletElement">
          Country manager de Glovo en Argentina, COO de Letgo para <br class="desktopTabletElement">
          países emergentes y director de marketing para OLX. Antes de eso <br class="desktopTabletElement">
          trabajó como consultor de estrategia en BCG basado en Chile.
      ',
      'img' => App::setFilePath('/assets/images/illustrations/team/paul.png')
  ],
    [
      'name' => '
      John McIntire. <br class="space">
      <span class="greenBlueColor">Alquimista financiero</span>
      ',
      'textInfo' => '
          Ex-CEO de Goldman Sachs Latinoamérica y director / asesor de <br class="desktopTabletElement">
múltiples compañías privadas. Inversionista ángel y mentor de <br class="desktopTabletElement">
fundadores, también ha trabajado en estrecha colaboración con <br class="desktopTabletElement">
Andrés durante la última década.
  <br class="space"><br class="space">
Cubano-americano – un ávido corredor, ha terminado múltiples <br class="desktopTabletElement">
maratones llegando a estar por encima de su grupo de edad <br class="desktopTabletElement">
hasta un 10% en performance.
      ',
      'img' => App::setFilePath('/assets/images/illustrations/team/john1.png')
  ],
    [
      'name' => '
      Andrea Dalle Molle. <br class="space">
<span class="greenBlueColor">La mente maestra operativa</span>
      ',
      'textInfo' => '
          Director de la firma de consultoría: “Éxito Ventures”, ha trabajado <br class="desktopTabletElement">
en estrecha colaboración con Andrés asesorando a docenas de <br class="desktopTabletElement">
empresas en estrategia de negocios, performance marketing y <br class="desktopTabletElement">
embudos de ventas. También ha liderado equipos desarrollando <br class="desktopTabletElement">
softwares innovadores.
<br class="space"><br class="space">
Italiano – ex- jugador profesional de póker, fue «Final Table» en <br class="desktopTabletElement">
el European Poker Tour.
      ',
      'img' => App::setFilePath('/assets/images/illustrations/team/andrea.png')
  ],
    [
      'name' => '
      Alex Guevara. <br class="space">
<span class="greenBlueColor">El motor de ventas</span>
      ',
      'textInfo' => '
          Más de 15 años liderando proyectos de transformación, <br class="desktopTabletElement">
optimización de recursos asegurando el cumplimiento de los KPI´s <br class="desktopTabletElement">
del cliente y liderando equipos de alto desempeño.
  <br class="space"><br class="space">
Contact Center & BPO en las áreas de Ventas, Experiencia de <br class="desktopTabletElement">
Clientes, Gestión de Cuentas Claves, Workforce, Planeación y <br class="desktopTabletElement">
Finanzas.
      ',
      'img' => App::setFilePath('/assets/images/illustrations/team/alex-1.png')
  ],
    [
      'name' => '
      Manuel Gil. <br class="space">
<span class="greenBlueColor">Chief de tech</span>
      ',
      'textInfo' => '
          Co-fundador y CEO de CodeLabs, una firma de consultoría y <br class="desktopTabletElement">
tercerización de software. Ha liderado múltiples proyectos de <br class="desktopTabletElement">
tecnología en los últimos 15 años, en docenas de países de todo <br class="desktopTabletElement">
el mundo.
<br class="space"><br class="space">
Cubano – papá, fanático de la guitarra y fotógrafo
      ',
      'img' => App::setFilePath('/assets/images/illustrations/team/manuel.png')
  ],
    [
      'name' => '
      Matías Beeck. <br class="space">
<span class="greenBlueColor">As del producto</span>
      ',
      'textInfo' => '
          Experto en Data Science y marketing digital, trabajó recientemente <br class="desktopTabletElement">
con una consultora de datos y SaaS con sede en Londres.
    <br class="space"><br class="space">
Peruano-cubano – entusiasta de la música, ha vivido en tres <br class="desktopTabletElement">
continentes y cuatro ciudades (Lima, Miami, Londres y Nueva York).
      ',
      'img' => App::setFilePath('/assets/images/illustrations/team/matias.png')
  ],
    [
      'name' => '
      Vanessa Durán. <br class="space">
<span class="greenBlueColor">La mejor aliada de los clientes</span>
      ',
      'textInfo' => '
          Directora de la consultora: “Éxito Ventures”, tiene una amplia <br class="desktopTabletElement">
experiencia en mejorar las ventas y las comunicaciones de las <br class="desktopTabletElement">
marcas para docenas de compañías en los Estados Unidos y <br class="desktopTabletElement">
América Latina.
 <br class="space"><br class="space">
Venezolana – fundadora de organizaciones sin fines de lucro, <br class="desktopTabletElement">
reconocida por el Congreso de los EE. UU. por su talento y <br class="desktopTabletElement">
contribución a la comunidad multicultural.
      ',
      'img' => App::setFilePath('/assets/images/illustrations/team/vane5.png')
    ]
  );


@endphp


<section class="customSection sectionParent subPage_AboutUs_1">

  <div class="section-row">

    <section class="innerSectionElement sct1">

      <div class="containElements">

        <h2 class="primaryTitle blackColor">
          Equipo al Timón
        </h2>
        <p class="primaryText grayColorTexts">
        Contamos con un equipo comprometido en potenciar a las empresas a través de Escala <br class="desktopTabletElement">
        convirtiéndolas en negocios exitosos en toda la región.
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
                  <img  src="{!! $item['img'] !!}" alt="" loading="lazy">
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


    <section class="innerSectionElement sct3">

      <div class="groupElements row">

        <div class="containElements">


          <button class="primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
            ¿Y tú? Conéctemos..
          </button>


      </div>

      </div>

    </section>






</div>

</div>

</div>




@endsection
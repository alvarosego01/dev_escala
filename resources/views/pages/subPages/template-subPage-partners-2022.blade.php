

<div id="subPage_partners_2022">
  <div class="sections">

    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol subPage_partners_2022_0',
     'title' => '
      Sé partner de <br class="space">
      Escala y <span class="greenBlueColor">
        multiplica <br class="space">
        tus ingresos
      </span>
    ',
     'text' => '
      <ul class="principalBigText ">
          <li>Gana hasta 30% de comisión</li>
          <li>Potencia el crecimiento de tu negocio</li>
          <li>Contribuye al progreso de empresas <br class="desktopTabletElement">
          en Hispanoamérica.</li>
      </ul>
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/am/Group 8185.png'),
  'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM'
  ) ;

  @endphp

  @header_t1( $parameters )
  @endheader_t1



@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'subPage_partners_2022_02',
    'enableTitle' => true,
    'titlePrincipal' => '
    ¿Eres nuestro <span class="greenBlueColor">Partner ideal?</span>
    ',
    'subTitlePrincipal' => '
    Desarrollamos un ecosistema de expertos comprometidos a colocar a sus clientes en el <br class="desktopTabletElement">
    centro de su estrategia y desafiarse continuamente para llevar su empresa a un próximo nivel.
    ',
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => '¡Comenzar ahora!',
    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022 hoverInEffect',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/escala-page-builder-create-landing-website-1.png'),
            'title' => '
            Agencias digitales, <br class="space">
            especializadas o <br class="space">
            full-service
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/free-trail_01 1.png'),
            'title' => '
            Consultoras de marketing, <br class="space">
            ventas o estrategia de <br class="space">
            crecimiento
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/CRM_beneficios_iconos_05 1.png'),
            'title' => '
            Empresas de <br class="space">
            implementación de CRM <br class="space">
            o embudos de conversión
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/dashboard_01 2.png'),
            'title' => '
              Empresas de <br class="space">
              formación comercial
            ',
            'enableButton' => false,
        ],

    ],
];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'subPage_partners_2022_04',
    'enableTitle' => true,
    'titlePrincipal' => '
    Empezar es muy fácil, <span class="greenBlueColor">sigue los 5 pasos:</span>
    ',
    'subTitlePrincipal' => '
    Especialista o agencia de marketing digital, ventas y embudos de conversión
    ',
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => '¡Comenzar ahora!',
    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022 hoverInEffect',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/count_partners_item_1.png'),
            'title' => '
            Aplica
            ',
            'text' => '
            Llena el formulario y <br class="desktopTabletElement">
            ayúdanos a conocerte
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/count_partners_item_2.png'),
            'title' => '
            Aprende
            ',
            'text' => '
            Evalúa nuestra <br class="desktopTabletElement">
            plataforma y los <br class="desktopTabletElement">
            beneficios de ser Partner
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/count_partners_item_3.png'),
            'title' => '
            Suscríbete
            ',
            'text'=> '
            Se parte de la comunidad <br class="desktopTabletElement">
            que potencia su <br class="desktopTabletElement">
            crecimiento con Escala
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/count_partners_item_4.png'),
            'title' => '
            Certifícate
            ',
            'text' => '
            Completael <br class="desktopTabletElement">
            entrenamiento y obtén <br class="desktopTabletElement">
            tu certificado como <br class="desktopTabletElement">
            Partner de Escala.
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/count_partners_item_5.png'),
            'title' => '
            Empieza a ganar
            ',
            'text' => '
            Disfruta de los <br class="desktopTabletElement">
            beneficios y comisiones, <br class="desktopTabletElement">
            mientras generas un <br class="desktopTabletElement">
            impacto positivo.
            ',
            'enableButton' => false,
        ],

    ],
];
@endphp

@contain_multiple_cards_T2( $parameters )
@endcontain_multiple_cards_T2




<section class="customSection sectionParent subPage_partners_2022_05">

  <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="containElements">

            <h2 class="primaryTitle blackColor">
              Nuestra Relación <span class="greenBlueColor">Ganar-Ganar</span>
            </h2>

          </div>

        </section>

        <section class="innerSectionElement sct2">

          <h3>
            El problema
          </h3>
          <div class=" row groupElements">

            <div class="element col-md-12 col-lg-6">
              <div class="containElements">

                <div class="containerImage">
                  <img   src="{!! App::setFilePath('/assets/images/illustrations/others/07 1.png') !!}"  loading="lazy">
                </div>
                <p class="text">
                  Actualmente existen aproximadamente <br class="desktopTabletElement">
                  más de <span class="greenBlueColor">
                    30 millones de pequeñas y <br class="desktopTabletElement">
                    medianas empresas
                  </span> fundadas por <br class="desktopTabletElement">
                  Hispanos en E.E.U.U. y Latinoamérica.

                </p>
              </div>
            </div>
            <div class="element col-md-12 col-lg-6">
              <div class="containElements">

                <div class="containerImage">
                  <img   src="{!! App::setFilePath('/assets/images/illustrations/others/otto-12 1.png') !!}"  loading="lazy">
                </div>
                <p class="text">
                  Muchas de ellas <span class="greenBlueColor">
                    quiebran o estancan <br class="desktopTabletElement">
                    su crecimiento
                  </span> debido a fallas en su <br class="desktopTabletElement">
                  estrategia, altos costos operativos y <br class="desktopTabletElement">
                  complicaciones en sus procesos.
                </p>
              </div>
            </div>

          </div>

        </section>

        <section class="innerSectionElement sct3">

          <h3>
            La solución
          </h3>
          <div class=" row groupElements">

            <div class="element col-md-12 col-lg-6">
              <div class="containElements">

                <div class="containerImage">
                  <img   src="{!! App::setFilePath('/assets/images/illustrations/others/otto-33 1.png') !!}"  loading="lazy">
                </div>
              <p class="text">
                Después de más de 10 años construyendo <br class="desktopTabletElement">
                negocios exitosos y asesorando a cientos de <br class="desktopTabletElement">
                empresas, Andrés Moreno y su equipo de <br class="desktopTabletElement">
                expertos crean <span class="greenBlueColor">
                  Escala para facilitarle a <br class="desktopTabletElement">
                  PYMES atraer, convertir y fidelizar clientes.
                </span>
              </p>
            </div>
            </div>
            <div class="element col-md-12 col-lg-6">
              <div class="containElements">

                <div class="containerImage">
                  <img   src="{!! App::setFilePath('/assets/images/illustrations/others/otto-34 2.png') !!}"  loading="lazy">
                </div>
                <p class="text">
                  La respuesta ha sido extraordinaria y la <br class="desktopTabletElement">
                <span class="greenBlueColor">
                  demanda mayor de lo que podamos <br class="desktopTabletElement">
                  manejar.
                </span> Por eso, buscamos socios con el <br class="desktopTabletElement">
                talento, los valores y el compromiso <br class="desktopTabletElement">
                necesario para agregar valor.
              </p>
            </div>
            </div>

          </div>

        </section>
        <section class="innerSectionElement sct4">

          <h3>
            El resultado
          </h3>
          <div class=" row groupElements">

            <div class="element col-md-12 col-lg-6">
              <div class="containElements">

                <div class="containerImage">
                  <img   src="{!! App::setFilePath('/assets/images/illustrations/others/Copy of icono-10 1.png') !!}"  loading="lazy">
                </div>
                <p class="text">
                  <span class="greenBlueColor">
                    Juntos aceleramos el crecimiento de <br class="desktopTabletElement">
                    nuestras empresas
                  </span> mientras impactamos  <br class="desktopTabletElement">
                  el progreso de la comunidad hispana  <br class="desktopTabletElement">
                  en el mundo.

                </p>
              </div>
            </div>


          </div>

        </section>






  </div>

</section>


@php
$parameters = [
    'classSection' => 'subPage_partners_2022_06',
    'title' => '
    <span style="color: #FAD872">Gana hasta 30% de comisión,</span> <br class="desktopTabletElement">
    transforma empresas e influye <br class="desktopTabletElement">
    en el desarrollo del mercado
        </span>',
        'textForm' => 'Comienza ahora',
    'text' => null,
    'image' => App::setFilePath('/assets/images/illustrations/others/Copy of Copy of free-trail_08 1.png'),
    'side' => 'left',
];
@endphp
@bannerForms7_T1( $parameters )

@endbannerForms7_T1



</div>

</div>

</div>




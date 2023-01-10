

<div id="landing_escala_competitors_brands">
  <div class="sections">
@php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol landing_escala_competitors_brands_0',
     'title' => '
        Escala es más que <br class="space">
        un potente CRM
        ',
     'text' => '
        Descubre por qué nuestro software <br class="space">
        es el más fácil de usar e <br class="space">
        implementar junto a expertos
      ',
     'threeCol' => true,
     'textForm' => 'Empieza a probar Escala',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/illustrations/otto/tablet_otto_1 3.png'),
    ) ;
    @endphp

    @header_t1( $parameters )
    @endheader_t1



    @php
    $parameters = array(
     'type' => 'backgroundColor',
     'classSection' => 'landing_escala_competitors_brands_1',
     'enableTitle' => true,
     'titlePrincipal' => '
        <span class="greenBlueColor">Compara el software CRM de Escala y descubre <br class="desktopTabletElement"></span>
        por qué representa el poder de lo simple
     ',
    'subTitlePrincipal' => '
      Hallar el CRM  perfecto para tu empresa puede ser una decisión difícil. Hay muchas opciones y no puedes tomar una <br class="desktopTabletElement">
      decisión apresurada. En Escala te guiamos para que te hagas las preguntas correctas, antes de elegir:
    ',
     'img' => App::setFilePath('/assets/images/person/home_hombre-lentes_silla-chat-flip 2.png'),
     'title' => null,
     'text' => '
       <span>
        ¿Es fácil de usar y me acompañan?
        </span>
        <br class="space"><br class="space">
        Puedes tener el CRM más potente de todos, pero de nada te sirve si tus <br class="desktopTabletElement">
equipos necesitan meses para poder implementar tu estrategia  y configurarlo. <br class="space">
En Escala te acompañamos desde el primer día, asesorándote para dejarlo listo <br class="desktopTabletElement">
para ejecutar y conseguir tus resultados.
<br class="space">
<br class="space">
<br class="space">
<span>
  ¿Puedo personalizarlo?
  </span>
<br class="space"><br class="space">
Los CRMs te ofrecen algún tipo de personalización adaptada a tu empresa: <br class="desktopTabletElement">
campos personalizados, embudos de ventas, etiquetas avanzadas, flujos <br class="desktopTabletElement">
inteligentes. Consulta si debes pagar extra por personalizar estas funcionalidades.
<br class="space">
<br class="space">
<br class="space">
<span>
  ¿Crecerá con mi empresa?
  </span>
<br class="space"><br class="space">
  Al elegir un CRM revisa si sus funcionalidades pueden crecer contigo y si tiene la <br class="desktopTabletElement">
  capacidad para gestionar el número de contactos que esperas manejar en el futuro.
     ',
     'enableButton' => false,
     'urlButton' => '#lead-form',
     'textButton' => 'Prueba Gratis',
     'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
     'side' => 'right',
    ) ;
   @endphp

   @contain_text_image_T1( $parameters )
   @endcontain_text_image_T1


   @php
   $parameters = [
       'type' => 'backgroundColor',
       'classSection' => 'landing_escala_competitors_brands_2',
       'enableTitle' => true,
       'titlePrincipal' => '
          <span class="greenBlueColor">El CRM todo-en-uno de Escala <br class="desktopTabletElement"></span>
          Tu Máquina de Marketing y Ventas
       ',
       'subTitlePrincipal' => '
          En el CRM de Escala están todas las herramientas de marketing digital y ventas integradas, <br class="desktopTabletElement">
          para que puedas: generar más demanda, aumentar tus ventas y fidelizar más clientes.
       ',
       'overlay' => false,
       'enableButton' => true,
       'urlButton' => '#',
       'textButton' => 'Prueba Gratis',
       'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
       // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
       'elements' => [
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/competitors_crm_serie1.png'),
               'title' => '<span class="greenBlueColor">
                Anuncios
                   </span>',
                'text' => '
                  Atrae leads de calidad con <br class="space">
                  Ads de Facebook e <br class="space">
                  Instagram desde nuestra <br class="space">
                  plataforma
                ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/competitors_crm_serie2.png'),
               'title' => '<span class="greenBlueColor">
                  Landing pages
                </span>',
               'enableButton' => false,
               'text' => '
                  Crea, personaliza y <br class="space">
                  publica páginas en <br class="space">
                  minutos, sin programar
               '
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/competitors_crm_serie3.png'),
               'title' => '<span class="greenBlueColor">
                  Emails
                </span>',
               'enableButton' => false,
               'text' => '
                Comunícate constantemente <br class="space">
                con tus contactos y crea <br class="space">
                relaciones a largo plazo
               '
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/competitors_crm_serie4.png'),
               'title' => '<span class="greenBlueColor">
                  Automatización
                </span>',
               'enableButton' => false,
               'text' => '
                  Ahorra tiempo y dinero <br class="space">
                  programando secuencias <br class="space">
                  de emails y acciones de <br class="space">
                  marketing y ventas
               '
           ],
           [
               'img' => App::setFilePath('/assets/images/illustrations/others/competitors_crm_serie5.png'),
               'title' => '<span class="greenBlueColor">
                  Analítica
                </span>',
               'enableButton' => false,
               'text' => '
                Mide en tiempo real tus <br class="space">
                resultados con dashboards <br class="space">
                amigables para optimizar tus <br class="space">
                embudos de ventas
               '
           ]

       ],
   ];
   @endphp

   @contain_multiple_cards_T2( $parameters )
   @endcontain_multiple_cards_T2





@php
       $parameters = [
        'classSection' => 'landing_escala_competitors_brands_4 nobrand',
        'enableTitle' => true,
        'titlePrincipal' => '
        <span class="greenBlueColor">Nuestros clientes lo dicen:</span>
        El CRM de Escala es ganador
        ',
        'subTitlePrincipal' => null,
        'enableContainerButton' => true,
        'urlButton' => '#',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'textButton' => 'Prueba Gratis',
        'mob_reviews' => array(
          App::setFilePath('/assets/images/illustrations/others/competitor_trust_1.png'),
            App::setFilePath('/assets/images/illustrations/others/competitor_trust_2.png')
        ),
        'desk_reviews' => array(
          [
            App::setFilePath('/assets/images/illustrations/others/competitor_trust_1.png'),
            App::setFilePath('/assets/images/illustrations/others/competitor_trust_2.png')
          ],

        ),
      ];
@endphp

@reviews_sliders_T1( $parameters )
@endreviews_sliders_T1


@php
$parameters = array(
 'type' => 'backgroundColor',
 'classSection' => 'landing_escala_competitors_brands_5',
 'enableTitle' => false,
 'titlePrincipal' => '
    <span class="greenBlueColor">Compara el software CRM de Escala y descubre <br class="desktopTabletElement"></span>
    por qué representa el poder de lo simple
 ',
'subTitlePrincipal' => '
  Hallar el CRM  perfecto para tu empresa puede ser una decisión difícil. Hay muchas opciones y no puedes tomar una <br class="desktopTabletElement">
  decisión apresurada. En Escala te guiamos para que te hagas las preguntas correctas, antes de elegir:
',
 'img' => App::setFilePath('/assets/images/illustrations/others/CRM_laptop 1.png'),
 'title' => '
  <span class="greenBlueColor">¿Qué hace al CRM de Escala</span> tan completo?
 ',
 'text' => '
 <ul class="text">
  <li><strong>Está Integrado a todas</strong> las herramientas de marketing digital y ventas</li>
  <li><strong>Atención prioritaria 100% en español</strong> y a un WhatsApp de distancia</li>
  <li><strong>Organiza en un solo lugar:</strong> tus contactos, embudos, flujos y oportunidades</li>
  <li><strong>Extensión de WhatsApp Web</strong> para hacerle mejor seguimiento <br class="desktopTabletElement">
    a todos tus contactos</li>
  <li><strong>Simple de usar,</strong> diseñado por expertos para vendedores y equipos de marketing</li>
  <li><strong>Gestiona tu base de datos</strong> y guarda automáticamente la data con formularios <br class="desktopTabletElement">
      integrados desde tus landing pages</li>
  <li><strong>Segmenta y personaliza</strong> tus comunicaciones con etiquetas avanzadas. <br class="space">
      Ten trazabilidad e historial de tus contactos</li>
  <li><strong>Visualiza todo</strong> tu proceso de venta, fase por fase</li>
  <li><strong>Potencia la productividad de tu equipo</strong> con la asignación de tareas, <br class="desktopTabletElement">
    actividades y recordatorios</li>
  <li><strong>Automatiza tu flujo de acciones</strong> según la segmentación de tus contactos</li>
  <li><strong>Analiza tus resultados</strong> de ventas con dashboards amigables y optimiza tus <br class="desktopTabletElement"> acciones</li>
  <li><strong>Fideliza más clientes</strong> nutriendo tus relaciones a largo plazo</li>
  <li><strong>Pagas en moneda local,</strong> justo por lo que necesitas</li>
  </ul>
 ',
 'enableButton' => false,
 'urlButton' => '#lead-form',
 'textButton' => 'Prueba Gratis',
 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
 'side' => 'left',
) ;
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1


@php
$parameters = array(
 'type' => 'backgroundColor',
 'classSection' => 'landing_escala_competitors_brands_6',
 'enableTitle' => false,
 'titlePrincipal' => '
    <span class="greenBlueColor">Compara el software CRM de Escala y descubre <br class="desktopTabletElement"></span>
    por qué representa el poder de lo simple
 ',
'subTitlePrincipal' => '
  Hallar el CRM  perfecto para tu empresa puede ser una decisión difícil. Hay muchas opciones y no puedes tomar una <br class="desktopTabletElement">
  decisión apresurada. En Escala te guiamos para que te hagas las preguntas correctas, antes de elegir:
',
 'img' => App::setFilePath('/assets/images/person/home_pantalla_CRM_09_chica 1.png'),
 'title' => '
 <span class="greenBlueColor">Con el CRM de Escala</span> puedes lograr:
 ',
 'text' => '
 <ul class="text">
    <li><img src="'. App::setFilePath('/assets/images/illustrations/others/checkCompetitors.png') .'" alt=""> Organizar y gestionar eficientemente tu base de datos</li>
    <li><img src="'. App::setFilePath('/assets/images/illustrations/others/checkCompetitors.png') .'" alt=""> Integrar las acciones del equipo de marketing y comercial</li>
    <li><img src="'. App::setFilePath('/assets/images/illustrations/others/checkCompetitors.png') .'" alt=""> Mejorar la productividad de tu equipo de ventas</li>
    <li><img src="'. App::setFilePath('/assets/images/illustrations/others/checkCompetitors.png') .'" alt=""> Implementar tu estrategia digital con acompañamiento <br class="desktopTabletElement">
    de tu Gerente de Cuenta</li>
    <li><img src="'. App::setFilePath('/assets/images/illustrations/others/checkCompetitors.png') .'" alt=""> Segmentar y personalizar la comunicación con tus contactos</li>
    <li><img src="'. App::setFilePath('/assets/images/illustrations/others/checkCompetitors.png') .'" alt=""> Cerrar ventas de manera más acelerada</li>
    <li><img src="'. App::setFilePath('/assets/images/illustrations/others/checkCompetitors.png') .'" alt=""> Tener los resultados en tiempo real</li>
  </ul>
 ',
 'enableButton' => true,
 'urlButton' => '#lead-form',
 'textButton' => 'Prueba Gratis',
 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
 'side' => 'right',
) ;
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1



</div>

</div>





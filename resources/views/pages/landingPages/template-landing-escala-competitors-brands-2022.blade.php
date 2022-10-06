

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
       'type' => 'backgroundColor',
       'classSection' => 'landing_escala_competitors_brands_3',
       'enableTitle' => true,
       'titlePrincipal' => '
          <span class="greenBlueColor">
            ¿Por qué elegir Escala?
          </span> <br class="space">
          Compara con otros CRMs
          ',
       'subTitlePrincipal' => null,
       'overlay' => false,
       'enableButton' => false,
       'urlButton' => '#',
       'textButton' => '¡Prueba Gratis!',
       'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
       // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
       'elements' => [
           [
               'img' => App::setFilePath('/assets/images/logos/competitor_icon_1.png'),
               'title' => null,
               'text' => '
               Salesforce es un CRM para empresas grandes con funcionalidades integradas y <br class="desktopTabletElement">
muy potentes. Salesforce requiere administradores expertos y debidamente <br class="desktopTabletElement">
capacitados para la implementación y el mantenimiento de su sistema, (puede <br class="desktopTabletElement">
ser difícil si no has tomado un curso avanzado de CRMs) y con la necesidad de <br class="desktopTabletElement">
recursos y costos bastante elevados.

               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/logos/competitor_icon_2.png'),
               'title' => null,
               'text' => '
               El CRM de HubSpot es muy completo y potente. Tiene recursos autogestionados <br class="desktopTabletElement">
de aprendizaje, pero la cosa se complica cuando no quieras solo hablar con un <br class="desktopTabletElement">
chatbot. Además, es limitado en su plan gratuito y cuando quieras hacer más, <br class="desktopTabletElement">
tendrás que pagar cientos de dólares para poder contar con funcionalidades más <br class="desktopTabletElement">
avanzadas.
               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/logos/competitor_icon_3.png'),
               'title' => null,
               'text' => '
               El CRM de Zoho centra todas las tareas de los equipos de marketing, ventas y <br class="desktopTabletElement">
asistencia, lo que en ocasiones, hace más complicado gestionar e implementar. <br class="desktopTabletElement">
También tendrás que pagar más por funcionalidades básicas. Encontramos <br class="desktopTabletElement">
comentarios de usuarios que hablan de: «Fallas en la programación, sobre todo <br class="desktopTabletElement">
con las integraciones de terceros. El servicio de asistencia técnica no presta <br class="desktopTabletElement">
atención a los detalles y debes explicar varias veces hasta recibir la ayuda que <br class="desktopTabletElement">
necesitas, lo que suele demorar varios días» . Servicio 100% inglés.

               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/logos/competitor_icon_4.png'),
               'title' => null,
               'text' => '
               El CRM de RD Station está pensado para PYMES, integra funcionalidades de <br class="desktopTabletElement">
marketing y permite automatizar acciones del equipo de ventas. Todo va muy <br class="desktopTabletElement">
bien hasta que necesitas asesoría para configurar e implementar, podrás <br class="desktopTabletElement">
comunicarte perfectamente si hablas portuñol.

               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/logos/competitor_icon_5.png'),
               'title' => null,
               'text' => '
               El CRM de Mailchimp te permite hacer seguimiento a través de una App, hacer <br class="desktopTabletElement">
segmentaciones conductuales e integración con  plataformas e-commerce. Pero <br class="desktopTabletElement">
nos preguntamos quién conoce a Mailchimp por su CRM, su funcionalidad más <br class="desktopTabletElement">
exitosa ha sido email marketing,

               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/logos/competitor_icon_6.png'),
               'title' => null,
               'text' => '
               Pipedrive tiene un CRM con muy buena usabilidad y flexibilidad. Su interfaz es <br class="desktopTabletElement">
muy sencilla y no requiere conocimientos previos. Sin embargo, puedes tener <br class="desktopTabletElement">
limitaciones por: falta de funcionalidades de marketing, servicio y poca <br class="desktopTabletElement">
escalabilidad en email marketing. Haciendo necesario que integres otras <br class="desktopTabletElement">
plataformas para que tus datos no queden aislados.

               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/logos/competitor_icon_7.png'),
               'title' => null,
               'text' => '
               Su CRM está integrado con WhatsApp con envío masivos y conversaciones <br class="desktopTabletElement">
sincronizadas por este canal. Organización y seguimiento de todas las <br class="desktopTabletElement">
oportunidades abiertas, mando centralizado para toma de decisiones, conexión <br class="desktopTabletElement">
con más de 1500 aplicaciones. Pero a la hora de implementar deberás pagar más <br class="desktopTabletElement">
por funcionalidades avanzadas y si quieres ser acompañado en todo tu camino, <br class="desktopTabletElement">
este CRM no es la mejor opción.

               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/logos/competitor_icon_8.png'),
               'title' => null,
               'text' => '
               AmoCRM está basado en la mensajería instantánea. Fue diseñado para <br class="desktopTabletElement">
automatizar procesos de ventas a través de una integración con distintos canales <br class="desktopTabletElement">
de comunicación: Email, WhatsApp, Facebook Messenger, etc. Es ideal para <br class="desktopTabletElement">
hacerle un seguimiento eficiente a tus clientes, siempre y cuando no estés <br class="desktopTabletElement">
interesado en captar nuevos leads o hacer crecer tu base de datos, ya que no <br class="desktopTabletElement">
cuenta con la opción de hacer formularios ni landing pages.

               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/logos/competitor_icon_9.png'),
               'title' => null,
               'text' => '
               Keap es un CRM reconocido por su potencial para automatizar necesidades de <br class="desktopTabletElement">
marketing y ventas, personalizar campañas e incluso integrarlas con herramientas <br class="desktopTabletElement">
de terceros. Lo único que necesitarás para iniciar una vez te suscribas, será un <br class="desktopTabletElement">
equipo en tu empresa que cuente con: experiencia en CRMs, un nivel de inglés <br class="desktopTabletElement">
avanzado y disponibilidad de tiempo completo para aprender a utilizarlo.

               ',
               'enableButton' => false,
           ],
           [
               'img' => App::setFilePath('/assets/images/logos/competitor_icon_10.png'),
               'title' => null,
               'text' => '
               Bitrix24 es un espacio de trabajo bastante completo que integra un CRM, <br class="desktopTabletElement">
herramientas de gestión de proyectos y una plataforma de colaboración para <br class="desktopTabletElement">
todo lo relacionado a la gestión empresarial. Es la mejor opción para aquellas <br class="desktopTabletElement">
empresas que desean aprender a implementar un CRM de forma autodidacta <br class="desktopTabletElement">
solo con el uso de lecturas y videos sin guía ni apoyo personalizado.

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
        'classSection' => 'landing_escala_competitors_brands_4',
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





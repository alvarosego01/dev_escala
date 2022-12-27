
<div id="subPage_whatsapp_2022">
  <div class="sections">

    @php
    $parameters = array(
     'backgroundImageType' => false,
     'overlay' => false,
     'classSection' => 'threeCol subpage_whatsapp_0',
     'title' => '
      Vende más <br class="space">
      con <span style="color: #00D35B">WhatsApp</span> <br class="space">
      <small>
        ¡usando Escala!
      </small>
    ',
     'text' => '
      Ahora puedes mejorar tu capacidad de respuesta <br class="space">
      e integrar ágilmente WhatsApp a tu estrategia de <br class="space">
      crecimiento ¡usando una sola herramienta de <br class="space">
      marketing y ventas!
      ',
     'threeCol' => true,
     'textForm' => 'Recibe un tour de 15 min <br class="space"> de Escala y sus herramientas de WhatsApp',
     'backgroundImage' => null,
  'overlayImage' => null,
  'image' => App::setFilePath('/assets/images/person/am/whatsapp_am.png'),
  'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM'
  ) ;

  @endphp

  @header_t1( $parameters )
  @endheader_t1

  <script type="text/javascript">

    // jQuery(document).ready(function () {

      if(jQuery('.subpage_whatsapp_0 .wpcf7 input.wpcf7-form-control.wpcf7-submit').length > 0){

        jQuery('.subpage_whatsapp_0 .wpcf7 input.wpcf7-form-control.wpcf7-submit').attr('value', 'Recibir tour ahora');

      }

    // });


  </script>

  <section class="customSection sectionParent subpage_whatsapp_1_1">

    <div class="section-row">

            <section class="innerSectionElement sct1">

              <h2 class="primaryTitle blackColor">
                Escala potencia la plataforma de mensajería más popular del mundo
              </h2>

              <div class="containElements">

                <div class="element">
                  <div class="numbers">
                      <span>
                        +2000
                      </span>
                       mil millones
                  </div>
                  <p class="text">
                    usuarios de WhatsApp <br class="space">
                    a nivel mundial
                  </p>
                </div>
                <div class="element">
                  <div class="numbers">
                      <span>
                        3
                      </span>
                      millones
                  </div>
                  <p class="text">
                    de compañías usándola <br class="space">
                    a nivel mundial
                  </p>
                </div>
                <div class="element">
                  <div class="numbers">
                      <span>
                        +100
                      </span>
                      mil millones
                  </div>
                  <p class="text">
                    de Whatsapps enviados <br class="space">
                    diariamente
                  </p>
                </div>
                <div class="element">
                  <div class="numbers">
                      <span>
                        60%
                      </span>
                      de Latinos
                  </div>
                  <p class="text">
                    prefiere WhatsApp como <br class="space">
                    medio de comunicación
                  </p>
                </div>

              </div>

            </section>

      </div>

    </section>



    @php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subpage_whatsapp_2',
        'enableTitle' => true,
        'titlePrincipal' => '
          Qué logras vía WhatsApp gracias a Escala <br class="space">
          <span class="greenBlueColor">la plataforma de marketing y ventas que tu equipo sí quiere usar</span>
',
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/Landing1.gif'),
        'title' => '
          <span class="greenBlueColor">
            Automatizaciones
          </span> <br class="space">
          Opera manos libres programando <br class="desktopTabletElement"> acciones y respuestas',
        'text' => '
        <ul class="text">
          <li><span>1.</span> Diseña flujos de respuesta automatizadas </li>
          <li><span>2.</span> Programa recordatorios, emails, etiquetas, etc. </li>
          <li><span>3.</span> Envía mensajes masivos con plantillas aprobadas por Meta </li>
          <li><span>4.</span> Asigna conversaciones y actividades a tu equipo </li>
          <li><span>5.</span> Personaliza la comunicación con cada contacto </li>
          <li><span>6.</span> Encuesta y califica a tus contactos </li>
          <li><span>7.</span> Segmenta a tu lista de contactos (Próximamente) </li>
          <li><span>8.</span> Mide tus esfuerzos con analíticas (Próximamente) </li>
          </ul>
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Prueba Gratis',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'side' => 'left',
    ];
@endphp

@contain_text_image_T1($parameters)
@endcontain_text_image_T1

@php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subpage_whatsapp_3',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/anuncios-educación.gif'),
        'title' => '
          <span class="greenBlueColor">
            Inbox
          </span> <br class="space">
          Comunícate en tiempo real y gestiona tus <br class="desktopTabletElement">
          conversaciones desde una sola herramienta
          ',
        'text' => '
          <ul class="text">
            <li><span>1.</span> Envía y recibe mensajes privados o accesibles a tu equipo</li>
            <li><span>2.</span> Asigna conversaciones a distintos responsables</li>
            <li><span>3.</span> Guarda fácilmente nuevos contactos en el CRM</li>
            <li><span>4.</span> Accede al historial de conversaciones y motivos de cierre</li>
            <li><span>5.</span> Filtra mensajes por contactos, dueños y status (Próximamente)</li>
            <li><span>6.</span> Mide resultados con métricas en tiempo real (Próximamente)</li>
          </ul>
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Prueba Gratis',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'side' => 'right',
    ];
@endphp

@contain_text_image_T1($parameters)
@endcontain_text_image_T1
@php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subpage_whatsapp_4',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/anuncios-educación.gif'),
        'title' => '
          <span class="greenBlueColor">
            Extensión para Chrome
          </span> <br class="space">
          Desde tu WhatsApp Web también <br class="desktopTabletElement">
          puedes gestionar tus contactos
          ',
        'text' => '
          <ul class="text">
            <li><span>1.</span> Conversa por mensaje de forma gratis e ilimitada </li>
            <li><span>2.</span> Mantén conversaciones abiertas por más de 24 hs </li>
            <li><span>3.</span> Comunícate desde WhatsApp Web con tu número de teléfono <br class="desktopTabletElement">
                 actual sin tener que comprar uno nuevo </li>
            <li><span>4.</span> Recibe notificaciones en WhatsApp Web o tu móvil sin tener <br class="desktopTabletElement">
                 que abrir el inbox en Escala </li>
            <li><span>5.</span> Crea y edita contactos en Escala desde WhatsApp Web </li>
          </ul>
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Prueba Gratis',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'side' => 'left',
    ];
@endphp

@contain_text_image_T1($parameters)
@endcontain_text_image_T1
@php
    $parameters = [
        'type' => 'backgroundColor',
        'classSection' => 'subpage_whatsapp_5',
        'enableTitle' => false,
        'titlePrincipal' => null,
        'subTitlePrincipal' => null,
        'img' => App::setFilePath('/assets/images/gifs/anuncios-educación.gif'),
        'title' => '
          <span class="greenBlueColor">
            Botón en Landing Pages
          </span> <br class="space">
          Guarda automáticamente los <br class="desktopTabletElement">
          datos de tus leads en el CRM
          ',
        'text' => '
          <ul class="text">
            <li><span>1.</span> Agrega un formulario de WhatsApp a tus landing pages </li>
            <li><span>2.</span> Captura el nombre, el email y el teléfono de tus visitantes <br class="desktopTabletElement">
                 antes de empezar a conversar por WhatsApp Web </li>
            <li><span>3.</span> Facilita un canal de interacción ágil y en vivo a los <br class="desktopTabletElement">
                visitantes de tu landing </li>
          </ul>
        ',
        'enableButton' => false,
        'urlButton' => '#lead-form',
        'textButton' => 'Prueba Gratis',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'side' => 'right',
    ];
@endphp

@contain_text_image_T1($parameters)
@endcontain_text_image_T1


<section class="customSection sectionParent subpage_whatsapp_6">

  <div class="section-row">

        <section class="innerSectionElement sct1">

          <div class="containElements">

            <a href="#" class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
              Recibe un tour guiado
            </a>

            <a href="#" class="secondaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
              Prueba Escala ahora
            </a>

          </div>

        </section>

  </div>

</section>



@php
 $parameters = array(
  'type' => 'backgroundColor',
  'backgroundImageFile' => null,
  'classSection' => 'subpage_whatsapp_7',
  'enableTitle' => false,
  'titlePrincipal' => null,
  'subTitlePrincipal' => null,
  'img' => App::setFilePath('/assets/images/person/implementacion_banner_principal-1-1.png'),
  'title' => '
    ¡Y tranquilo! Te guiamos a <br class="space">
    implementarlo exitosamete :)
  ',
  'text' => '
      Al ser cliente de Escala, te asignamos un especialista que acelera <br class="desktopTabletElement">
      tu aprendizaje y potencia tus resultados con las herramientas.
  ',
  'enableButton' => false,
  'urlButton' => 'http://escala.com/alianzas',
  'textButton' => 'Asociarme a Escala',
  'typeButton' => 'primaryButton hoverInEffect ',
  'side' => 'left',
  'overlay' => true,
  'overlayImage' => App::setFilePath('/assets/images/overlays/whatsapp_overlay.png'),
 ) ;
@endphp

@contain_text_image_T1( $parameters )
@endcontain_text_image_T1



@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'subpage_whatsapp_8',
    'enableTitle' => true,
    'titlePrincipal' => '
Herramientas increíbles que también encuentras <br class="desktopTabletElement">
en Escala para <span class="greenBlueColor">atraer y convertir clientes fieles:</span>
',
    'subTitlePrincipal' => null,
    'overlay' => false,
    'enableButton' => false,
    'elements' => [
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/crm_icon.png'),
            'title' => '
            CRM (Gestión <br class="space">
          de contactos)
',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/landing_icon.png'),
            'title' => '
            Constructor de <br class="space">
            Landing Pages
',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/email_mkt_icon.png'),
            'title' => '
            Email Marketing
',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/ads_icon.png'),
            'title' => '
            Anuncios
',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/automatic_icon.png'),
            'title' => '
            Flujos de <br class="space">
            Automatización
',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/forms_icon.png'),
            'title' => '
            Formularios <br class="space">
            para páginas
',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/analytics_icon.png'),
            'title' => '
            Analíticas
',
            'enableButton' => false,
        ],
    ],
];
@endphp

@contain_multiple_cards_T2($parameters)
@endcontain_multiple_cards_T2


@php
$parameters = [
    'type' => 'backgroundColor',
    'classSection' => 'subpage_whatsapp_9',
    'enableTitle' => true,
    'titlePrincipal' => '
    Por qué <span class="greenBlueColor">Escala</span>
    ',
    'subTitlePrincipal' => null,
    'overlay' => false,
    'enableButton' => false,
    // 'urlButton' => '#',
    // 'textButton' => '¡Comenzar ahora!',
    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022 hoverInEffect',
    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
    'elements' => [
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_1.png'),
            'title' => '
            <span class="greenBlueColor">Interfaz amigable</span> para <br class="desktopTabletElement">
            que disfrutes trabajar en <br class="desktopTabletElement">
            ella todos los días
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_2.png'),
            'title' => '
              <span class="greenBlueColor">Altísimo nivel de servicio:</span> <br class="space">
              Nadie en la industria te <br class="desktopTabletElement">
              acompaña y atiende mejor
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_3.png'),
            'title' => '
              <span class="greenBlueColor">
                Educación relevante de <br class="desktopTabletElement">
                primera
              </span> en marketing, <br class="desktopTabletElement">
              ventas y crecimiento de <br class="desktopTabletElement">
              empresas
            ',
            'enableButton' => false,
        ],
        [
            'img_alt' => null,
            'img' => App::setFilePath('/assets/images/illustrations/others/whatsapp_icon_4.png'),
            'title' => '
              <span class="greenBlueColor">100% en español:</span> la <br class="desktopTabletElement">
              plataforma, el servicio y <br class="desktopTabletElement">
              los recursos en tu idioma
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
        'classSection' => 'subpage_whatsapp_10',
        'enableTitle' => true,
        'titlePrincipal' => '
        Nuestros clientes comentan <br class="space">
        <span class="greenBlueColor">por qué prefieren Escala</span>
        ',
        'subTitlePrincipal' => null,
        'enableContainerButton' => false,
        'urlButton' => '#',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-trial-2022',
        'textButton' => 'Prueba Gratis',
        'mob_reviews' => array(
          App::setFilePath('/assets/images/illustrations/others/whatsapp_trust_1.png'),
          App::setFilePath('/assets/images/illustrations/others/whatsapp_trust_2.png'),
          App::setFilePath('/assets/images/illustrations/others/whatsapp_trust_3.png'),

        ),
        'desk_reviews' => array(
          [
            App::setFilePath('/assets/images/illustrations/others/whatsapp_trust_1.png'),
            App::setFilePath('/assets/images/illustrations/others/whatsapp_trust_2.png'),
            App::setFilePath('/assets/images/illustrations/others/whatsapp_trust_3.png'),
          ],

        ),
      ];
@endphp

@reviews_sliders_T1( $parameters )
@endreviews_sliders_T1

<section class="customSection sectionParent subpage_whatsapp_11">

  <div class="section-row">

    <section class="innerSectionElement sct1">

      <div class="containElements">

        <h2 class="primaryTitle blackColor">
          Lleva tu <span style="color: #75D463">WhatsApp</span> al próximo nivel
        </h2>

        <p class="primaryText grayColorTexts">
          Al suscribirte al Plan Pro de Escala, obtienes acceso a todas las herramientas de <br class="desktopTabletElement">
          WhatsApp sumadas al resto de funcionalidades de la plataforma.
        </p>

        <a href="#" class=" primaryButton hoverInEffect openPopUpButton popup-general-trial-2022">
          Prueba Escala ahora
        </a>


      </div>

    </section>

  </div>

</section>

<section class="customSection sectionParent subpage_whatsapp_12">

  <div class="section-row">

    <section class="innerSectionElement sct1">

      <div class="containElements">

        <h2 class="primaryTitle blackColor">
          Preguntas frecuentes
        </h2>

        <div class="containInfo">
          <span>
            ¿Cuáles son los requisitos de Meta para poder usar WhatsApp en Escala?
          </span>
          <p class="text">
            Para hacer uso de WhatsApp Business, Meta solicita contar con los siguientes <br class="desktopTabletElement"> requerimientos técnicos:
            <ul>
              <li>Cuenta en Meta for developers</li>
              <li>Página web o perfil de Meta asociado a Business</li>
              <li>Número de teléfono nuevo o que no se haya usado previamente con WhatsApp</li>
            </ul>
          </p>
        </div>
        <div class="containInfo">
          <span>
            ¿En cuál plan de Escala está incluido WhatsApp?
          </span>
          <p class="text">
            Las herramientas de automatizaciones, inbox y extensión de Chrome para <br class="desktopTabletElement">
            WhatsApp están incluidas en los planes: <strong>Escala Pro y Enterprise</strong>. En cambio, <br class="desktopTabletElement">
            el botón de WhatsApp para landing pages está incluido en todos los planes.
          </p>
        </div>
        <div class="containInfo">
          <span>
            ¿Puedo conectar mi número actual para utilizar el Inbox y las Automatizaciones en Escala?
          </span>
          <p class="text">
            No. Solo con la extensión de Chrome puedes usar tu número de teléfono <br class="desktopTabletElement">
            actual. Para utilizar las herramientas de inbox y automatizaciones, Meta <br class="desktopTabletElement">
            solicitita que el número que se integre a Business sea completamente nuevo <br class="desktopTabletElement">
            y no esté asociado a ninguna otra cuenta de WhatsApp.
          </p>
        </div>


      </div>


    </section>

  </div>

</section>

</div>

</div>

</div>



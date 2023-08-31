{{--
  Template Name: [B] Home - 2023
--}}

@extends('layouts.app')
@section('content')

    <div id="homeSection">
        <div class="sections">

            {{-- @php
                $parameters = [
                    'backgroundImageType' => true,
                    'overlay' => false,
                    'classSection' => 'threeCol homeSection_0 newHome',
                    'title' => '
        Acelera el crecimiento <br class="space">
        <span style="color: #DEF3F5">de tu empresa con Escala</span>
    ',
                    'text' =>
                        '<span class="whiteColor">
            La plataforma todo-en-uno para mejorar tus <br class="space">
            resultados de marketing y ventas
      </span>
      <img class="funnelImage" src="' .
                        App::setFilePath('/assets/images/illustrations/others/temporal_funnel.png') .
                        '" alt="">
      ',
                    'threeCol' => true,
                    'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
                    'backgroundImage' => App::setFilePath('/assets/images/overlays/overlay_space_1_big.png'),
                    'overlayImage' => null,
                    'image' => App::setFilePath('/assets/images/person/am/temporal_am.png'),
                    'img_alt' => 'Ilustración de hombre trabajando en su computadora portátil en referencia al uso de Escala como plataforma CRM',
                ];
            @endphp --}}

            @header_t1([
                'backgroundImageType' => true,
                'overlay' => false,
                'classSection' => 'desktopElement threeCol homeSection_0 newHome',
                'title' => '
                                Acelera el crecimiento <br class="space">
                                <span style="color: #DEF3F5">de tu empresa</span>
                            ',
                'text' => '<span class="whiteColor">
                                                    con la plataforma de CRM todo-en-uno <br class="space">
                                                    para aumentar tus ventas
                              </span>
                              ',
                'threeCol' => true,
                'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
                'backgroundImage' => App::setFilePath('/assets/images/overlays/overlay_space_1_big.png'),
                'overlayImage' => null,
                'image' => App::setFilePath('/assets/images/person/am/escala_home_am.png'),
                'img_alt' => 'Ilustración Andrés Moreno, CEO de Escala, embudos de venta'
            ])
            @endheader_t1

            @header_t1([
                'backgroundImageType' => true,
                'overlay' => false,
                'classSection' => 'mobileElement threeCol homeSection_0 newHome',
                'title' => '
                                Acelera el crecimiento <br class="space">
                                <span style="color: #DEF3F5">de tu empresa con Escala</span>
                            ',
                'text' => '<span class="whiteColor">
                                    La plataforma todo-en-uno para mejorar tus <br class="space">
                                    resultados de marketing y ventas
                              </span>
                              ',
                'threeCol' => true,
                'textForm' => 'Recibe un tour <br class="space"> guiado de Escala',
                'backgroundImage' => App::setFilePath('/assets/images/overlays/overlay_space_1.png'),
                'overlayImage' => null,
                'image' => App::setFilePath('/assets/images/person/am/escala_home_am.png'),
                'img_alt' => 'Ilustración Andrés Moreno, CEO de Escala, embudos de venta'
            ])
            @endheader_t1

            <section class="customSection sectionParent home_2023_1">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <div class="element">
                                <p class="text">
                                    <span class="title-blue">Líderes de negocio han</span> <br class="space">
                                    <span class="number">2X</span> <br class="space">
                                    <span class="text-big">sus Ingresos</span> <br class="space">
                                    <span class="text-small">en menos de 6 meses</span>
                                </p>
                            </div>
                            <div class="element">
                                <p class="text">
                                    <span class="title-blue">Empresas generaron</span> <br class="space">
                                    <span class="number">300%</span> <br class="space">
                                    <span class="text-big">más leads</span> <br class="space">
                                    <span class="text-small">en 6 meses</span>
                                </p>
                            </div>
                            <div class="element">
                                <p class="text">
                                    <span class="title-blue">Vendedores aumentaron</span> <br class="space">
                                    <span class="number">70%</span> <br class="space">
                                    <span class="text-big">la eficiencia</span> <br class="space">
                                    <span class="text-small">en procesos comerciales</span>
                                </p>
                            </div>
                            <div class="element">
                                <p class="text">
                                    <span class="title-blue">Equipos de marketing han</span> <br class="space">
                                    <span class="number">5X</span> <br class="space">
                                    <span class="text-big">sus Ingresos</span> <br class="space">
                                    <span class="text-small">tasa de ventas</span>
                                </p>
                            </div>

                        </div>

                    </section>

                </div>

            </section>

            <section class="customSection sectionParent home_2023_2">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h3 class="sub-title">
                                Olvida el Excel y los CRMs complicados
                            </h3>
                            <h2 class="title">
                                Vende más y mejor con Escala
                            </h2>
                            <p class="text">
                                Un CRM todo-en-uno muy fácil de usar, done encuentras las herramientas <br class="space">
                                de marketing y ventas que necesitas para escalar.
                            </p>

                        </div>

                    </section>
                    <section class="innerSectionElement sct2">

                        <div class="containElements">



                        </div>

                    </section>

                </div>

            </section>

            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/02-bg-home2023.png') !!})" class="customSection sectionParent home_2023_3">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h2 class="title">
                                No necesitas invertir en 10+ herramientas <br class="space">
                                ni en un equipo grande <span>para escalar tu negocio</span>
                            </h2>
                            <p class="text">
                                Los clientes de Escala triplican su productividad <br class="space">
                                sin agregar costos operativos a su empresa
                            </p>
                            <a class=" primaryButton hoverInEffect">
                                Conversa con un asesor Escala
                            </a>

                        </div>

                    </section>

                </div>

            </section>

            <section class="customSection sectionParent home_2023_4">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h3 class="sub-title">
                                Ya no requieres meses para adaptar el CRM a tus operaciones
                            </h3>
                            <h2 class="title">
                                Recibe el CRM implementado <br class="space">
                                ¡en menos de 10 días!
                            </h2>
                            <p class="text">
                                Adaptamos la plataforma a tus necesidades para que tú y tu equipo se enfoquen <br
                                    class="space">
                                en lo que verdaderamente importa: ¡generar leads y cerrar ventas!
                            </p>
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/01-home2023.png') !!}" loading="lazy">
                        </div>

                    </section>
                    <section class="innerSectionElement sct2">

                        <div class="containElements">

                                <div class="row">
                                    <div class="col-md-4 column-1">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="orange-pill">Día 1</span>
                                                <h5 class="card-number">1</h5>
                                                <h5 class="card-title">
                                                    Conocemos tu <br class="space">
                                                    negocio
                                                </h5>
                                                <h5 class="card-subtitle">
                                                    Evaluamos factores como:
                                                </h5>
                                                <ul>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Industria</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Necesidades</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Proceso comercial</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Equipo</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/02-home2023.png') !!}" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 column-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="orange-pill">Día 2-9</span>
                                                <h5 class="card-number">2</h5>
                                                <h5 class="card-title">
                                                    Preparamos <br class="space">
                                                    el CRM
                                                </h5>
                                                <div class="list-block">
                                                    <h5 class="card-subtitle">
                                                        Creamos Plantillas de:
                                                    </h5>
                                                    <ul>
                                                        <li>
                                                            <div class="list-item">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                                <p>Landing</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="list-item">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                                <p>Email</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="list-item">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                                <p>WhatsApps</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="list-item">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                                <p>Conectamos:</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="list-item">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                                <p>Embudos</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="list-block">
                                                    <h5 class="card-subtitle">
                                                        Creamos Plantillas de:
                                                    </h5>
                                                    <ul>
                                                        <li>
                                                            <div class="list-item">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                                <p>Cuentas</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="list-item">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                                <p>Dominios</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="list-block">
                                                    <h5 class="card-subtitle">
                                                        Importamos:
                                                    </h5>
                                                    <ul>
                                                        <li>
                                                            <div class="list-item">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                                <p>Contactos</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="list-item">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                                <p>Productos</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="list-item">
                                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                                <p>Oportunidades</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 column-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="orange-pill">Día 10</span>
                                                <h5 class="card-number">3</h5>
                                                <h5 class="card-title">
                                                    Empiezas a <br class="space">
                                                    vender más
                                                </h5>
                                                <h5 class="card-subtitle">
                                                    Recibe la plataforma de <br class="space">
                                                    Escala lista para: 
                                                </h5>
                                                <ul>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Ajustar textos</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Entrenar al equipo y</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list-item">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') !!}" loading="lazy">
                                                            <p>Comenzar a producir <br class="space">
                                                            resultados</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <img class="column-3" src="{!! App::setFilePath('/assets/images/illustrations/others/03-home2023.png') !!}" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                        </div>

                    </section>

                </div>

            </section>

            <section style="background-image: url({!! App::setFilePath('/assets/images/banners/03-bg-home2023.png') !!})" class="customSection sectionParent home_2023_5">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <h3 class="sub-title">
                                De nada sirve tener un CRM configurado... ¡si nadie lo quiere o sabe usar!
                            </h3>
                            <h2 class="title">
                                Entrenamos a tu equipo y te guiamos a <br class="desktopElement">
                                optimizar resultados ¡todo el año!
                            </h2>
                            <p class="text">
                                ¡Tu éxito es nuestro éxito! Recibe acompañamiento de todas las maneras posibles <br class="desktopElement">
                                para que construyas una máquina de marketing y ventas con Escala
                            </p>
                        </div>

                    </section>
                    <section class="innerSectionElement sct2">

                        <div class="containElements">

                                <div class="row card-content">
                                    <div class="col-md-6 card1">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                    <h5 class="card-title">
                                                        Gerente de Éxito
                                                    </h5>
                                                    <p class="card-text">
                                                        Te apoya a planificar y <br class="desktopElement">
                                                        aprovechar al máximo <br class="desktopElement">
                                                        las soluciones de Escala
                                                    </p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="img-container">
                                                            <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/04-home2023.png') !!}" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 card2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                    <h5 class="card-title">
                                                        Entrenamiento <br class="space">
                                                        en vivo
                                                    </h5>
                                                    <p class="card-text">
                                                        Bootcamps y workshops <br class="desktopElement">
                                                        en vivo para aprender y <br class="desktopElement">
                                                        practicar nuestra <br class="desktopElement">
                                                        metodología probada
                                                    </p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="img-container">
                                                            <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/05-home2023.png') !!}" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 card3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                    <h5 class="card-title">
                                                        Trainer privado
                                                    </h5>
                                                    <p class="card-text">
                                                        Revisa el uso de las <br class="desktopElement">
                                                        herramientas y se <br class="desktopElement">
                                                        asegura que las <br class="desktopElement">
                                                        usen efectivamente <br class="desktopElement">
                                                    </p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="img-container">
                                                            <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/06-home2023.png') !!}" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 card4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                    <h5 class="card-title">
                                                        Aprendizaje <br class="space">
                                                        autoguiado
                                                    </h5>
                                                    <p class="card-text">
                                                        Combinación de cursos, <br class="desktopElement">
                                                        tutoriales y webinars <br class="desktopElement">
                                                        para que aprendas a <br class="desktopElement">
                                                        tu ritmo.
                                                    </p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="img-container">
                                                            <img class="img-card" src="{!! App::setFilePath('/assets/images/illustrations/others/07-home2023.png') !!}" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 card5">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                    <h5 class="card-title">
                                                        Gerente de Éxito
                                                    </h5>
                                                    <p class="card-text">
                                                        Te apoya a planificar y <br class="space">
                                                        aprovechar al máximo <br class="space">
                                                        las soluciones de Escala
                                                    </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                        </div>

                    </section>

                </div>

            </section>


            @php
                $escalaUrl = 'https://escala.com';
                $items = [
                    [
                        'type' => 'master',
                        'title' => '¿Qué es Escala?',
                        'text' => 'Escala es la plataforma todo en uno de marketing digital y ventas que te ayudará a acelerar el éxito de tu negocio, con todas las <br class="desktopElement"> herramientas en un solo lugar para crecer de una manera constante. Conoce todos los beneficios de Escala:<br class="space"><br class="space">
                    <ul style="list-style: disc; padding-left: 20px">
                        <li><p>Crea landing pages increíbles sin programar, para darte a conocer y capturar la información de tus visitantes.</p></li>
                        <li><p>Crea, administra y publica anuncios digitales de Instagram y Facebook, sin salir de Escala, para generar tráfico a tus páginas.</p></li>
                        <li><p>Gestiona tu base de datos y haz más productivo el trabajo de tu equipo de ventas con el CRM más fácil de usar.</p></li>
                        <li><p>Mantén la comunicación constante con tus leads y clientes enviando emails masivos sin caer en la bandeja de spam.</p></li>
                        <li><p>Automatiza tareas repetitivas: workflows y campañas de emails para hacer crecer tu negocio en piloto automático.</p></li>
                        <li><p>Mide y optimiza tus campañas digitales con las analíticas en tiempo real.</p></li></ul>',
                    ],
                    [
                        'type' => 'master',
                        'title' => '¿Necesito habilidades para manejar la plataforma?',
                        'text' => 'No. nuestra herramienta es muy intuitiva y fácil de usar. Para que estés más tranquilo, hemos preparado una serie de tutoriales muy <br class="desktopElement"> prácticos, que te ayudarán a despejar cualquier duda que tengas mientras vives la experiencia. También puedes contar con nuestro <br class="desktopElement"> acompañamiento, a través de asesorías, que te serán de gran ayuda en los primeros momentos de uso de la plataforma. <a class="hiperButtonGreenBlueT2"href="' . $escalaUrl . '/zoom-meeting">Atención al cliente.</a>',
                    ],
                    [
                        'type' => 'master',
                        'title' => '¿Qué incluye?',
                        'text' => 'Cuando adquieres cualquiera de los planes de Escala cuentas con: Todas las funcionalidades de marketing digital y ventas, servicio <br class="desktopElement"> ilimitado y entrenamiento para usar la plataforma.',
                    ],
                    [
                        'type' => 'master',
                        'title' => 'Funcionalidades',
                        'items' => [
                            [
                                'title' => '¿Los embudos de venta aplican para todos los negocios?',
                                'text' => 'Así es. Todos los negocios tienen un embudo de ventas, conscientemente o no, dado que buscan atraer leads y convertirlos en <br class="desktopElement"> clientes. No olvides que un embudo de ventas es una metodología, paso a paso, que puede combinar marketing digital y offline. <br class="desktopElement"> En Escala tienes todas las funcionalidades para implementarlo de manera fácil, invirtiendo menos recursos, tiempo y dinero.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Qué ventajas tiene el CRM de Escala?',
                                'text' => 'Esta pregunta es fundamental. Es importante que sepas que el CRM de Escala no solo cuenta con todas opciones para gestionar tus <br class="desktopElement"> contactos: información relacionada con el nombre, email y teléfono, y de gestión de tu equipo comercial como: actividades, tareas, <br class="desktopElement"> llamadas y recordatorios hasta cerrar la venta, sino que también es el CRM más fácil de usar de todos. Pruébalo y descúbrelo por ti <br class="desktopElement"> mismo. ',
                                'type' => 'item',
                            ],
                            [
                                'title' => 'El Page builder de Escala ¿cómo funciona?',
                                'text' => 'El Page builder de Escala es el más fácil de usar del mercado. Práctico para realizar tus landing pages optimizadas. Tenemos cientos <br class="desktopElement"> de hermosas plantillas listas para que las personalices y en un clic las puedas publicar. Con formularios capaces de captar toda la <br class="desktopElement"> data y guardarla automáticamente en tu base de datos. <br class="space"><br class="space"> Fáciles de armar en minutos, 100% responsive y con un subdominio en caso que no tengas dominio propio. Además ya tienen <br class="desktopElement"> integrado el botón de WhatsApp para que tus visitantes conversen directamente con tu equipo de ventas.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿En Escala se puede usar un dominio distinto para cada landing page?',
                                'text' => 'Sí, en Escala puedes tener varios dominios para tus landing pages. Solo debes configurarlos y usarlos cuando lo necesites en cada <br class="desktopElement"> una de tus páginas.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Puedo agregar el botón de WhatsApp en las landing pages de Escala?',
                                'text' => 'Las landing pages de Escala ya tienen disponible el botón de WhatsApp para que tu cliente pueda tener una conversación más fluida <br class="desktopElement"> con tu empresa. Se puede encontrar en la pestaña de “WhatsApp” en cada landing. Si la página ya está publicada, tendrás que re-<br class="desktopElement">publicarla después de activar el botón para que aparezca en tu página. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=5HOSPcDXdTQ&t=4s">Tutorial de Cómo activar botón de WhatsApp.</a> ',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Puedo publicar campañas de anuncios digitales en Escala?',
                                'text' => 'En Escala puedes crear, administrar y publicar anuncios digitales de Instagram y Facebook, sin tener que salir de nuestra plataforma. Elige a tu <br class="desktopElement"> audiencia, presupuesto determinado y genera tráfico a tus landing pages de la manera más fácil y práctica.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Qué tipo de campañas son las que se están creando desde Escala?',
                                'text' => 'En Escala puedes crear campañas de anuncios digitales de Instagram y Facebook para lograr generar tráfico a tus landing pages. Su objetivo es <br class="desktopElement"> atraer posibles clientes (Captura de Leads) para que registren sus datos y con esta información puedas cerrar más ventas.',
                                'type' => 'item',
                            ],
                            [
                                'title' => 'En los anuncios digitales de Escala, ¿la propia plataforma maneja el píxel de Facebook o hay que integrarlo desde 0?',
                                'text' => 'Para agregar el píxel de Facebook debes ir a "configuración" de Escala, entra a la sección de "píxeles y códigos de seguimiento" y <br class="desktopElement"> darle clic a "agregar cuenta". Así de fácil es agregar el píxel de Facebook.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Puedo hacer campañas de email marketing en Escala?',
                                'text' => 'La respuesta es sí. Haz efectivas campañas de email marketing con sencillas plantillas de email. Realiza envíos masivos sin caer en la <br class="desktopElement"> bandeja de spam y ten las métricas en tiempo real para mejorar los resultados de tus campañas.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿En qué parte de Escala puedo crear las plantillas de email marketing?',
                                'text' => 'En la funcionalidad de plantillas, al darle la opción de “+Crear” arriba a la derecha, puedes elegir esta opción. Haz clic en opciones de <br class="desktopElement"> plantillas, allí se desplegará las alternativas de: "Plantilla de CRM" o "Plantilla de marketing". Elige “Plantilla de marketing” y <br class="desktopElement"> comienza a personalizarla. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=E_1VObta6Lk">Tutorial de cómo crear plantillas de Email Marketing.</a> ',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿ Cuáles son las funcionalidades de automatizaciones y analíticas?',
                                'text' => 'En Escala te damos todas las métricas para optimizar tus resultados. Tanto en las funcionalidades de marketing como las de ventas <br class="desktopElement"> tienes dashboards amigables que te permiten ver en tiempo real las métricas que son importantes. <br class="space"><br class="space"> En Escala puedes automatizar flujos de tareas para tu fuerza de ventas, programar workflows de comunicación y de email marketing, <br class="desktopElement"> para que tu negocio crezca en piloto automático. ',
                                'type' => 'item',
                            ],
                        ],
                    ],
                    [
                        'type' => 'master',
                        'title' => 'Sobre mi cuenta',
                        'items' => [
                            [
                                'title' => '¿Cómo accedo a la plataforma?',
                                'text' => 'Entra en <a class="hiperButtonGreenBlueT2"href="https://app.escala.com/">app.escala.com</a>. y haz clic en iniciar sesión desde cualquier dispositivo. ',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Puedo usar mi propio dominio?',
                                'text' => 'Sí, en Escala puedes utilizar tu dominio tal como se encuentra registrado en tu hosting, para conocer cómo conectarlo puedes <br class="desktopElement"> visualizar nuestro tutorial: <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=vpdEwrcrZt0&t=44s">Cómo conectar dominio de página.</a> ',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Cómo creo una cuenta?',
                                'text' => 'Para crear una cuenta debes ingresar tus datos haciendo clic en en el botón “Recibe un demo” en <a class="hiperButtonGreenBlueT2"href="https://escala.com/">https://escala.com/</a> y te <br class="desktopElement"> contactará uno de nuestros asesores para comenzar tu free trial.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Cómo cancelo mi cuenta?',
                                'text' => 'Puedes cancelarla cuando quieras a través de nuestros canales de servicio en la plataforma o WhatsApp.',
                                'type' => 'item',
                            ],
                            [
                                'title' => 'Si cierro mi cuenta, ¿perderé toda la data?',
                                'text' => 'La respuesta es Sí. Pero, estamos seguros que una vez que pruebes Escala no querrás cerrar tu cuenta.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Cómo recupero mi contraseña?',
                                'text' => 'Si no recuerdas tu contraseña, haz clic en el link de recuperar y te enviaremos un correo <br class="desktopElement"> para gestionarla de nuevo.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Se puede integrar con otras aplicaciones?',
                                'text' => '¡Sí! Puedes integrar tu CRM de Escala con otras aplicaciones a través de Zapier. Un ejemplo de cómo hacerlo en este tutorial <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=9tJl_akCRgI&list=PLchunKFsero1alROd4tbc9r5GxI7-9_ju&index=22">Ver tutorial</a>',
                                'type' => 'item',
                            ],
                        ],
                    ],
                    [
                        'type' => 'master',
                        'title' => 'Precios y métodos de pago',
                        'items' => [
                            // [
                            //     'title' => '¿Cuáles son los planes de precio de Escala?',
                            //     'text' =>
                            //         'En Escala tenemos planes a la medida de tus sueños y ganas de crecer. Solo pagas por lo que necesitas. Consulta nuestros precios: <a class="hiperButtonGreenBlueT2"href="' .
                            //         $escalaUrl .
                            //         '/pricing-page">Página de precios</a>',
                            //     'type' => 'item'
                            // ],
                            [
                                'title' => '¿Puedo cambiar o cancelar planes?',
                                'text' => 'Sí en Escala puedes cancelar tus planes cuando desees, pero sabemos que será tan útil que querrás ir al siguiente nivel. Para cambiar <br class="desktopElement"> o cancelar tus planes debes contactarte con nuestro equipo, a través de WhatsApp o chat.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Debo pagar por las actualizaciones de la herramienta?',
                                'text' => 'No, no debes pagar por las actualizaciones. Solo pagas por las funcionalidades que utilices y si incrementas tu plan será por tus <br class="desktopElement"> necesidades de contactos de marketing o ventas o porque tu negocio está creciendo y necesitas más usuarios.',
                                'type' => 'item',
                            ],
                        ],
                    ],
                    [
                        'type' => 'master',
                        'title' => 'Seguridad',
                        'items' => [
                            [
                                'title' => '¿Qué tan seguro es?',
                                'text' => 'En Escala tu data está en buenas manos. Tu información no es vista por nadie, solo por personas de tu equipo y bajo los permisos <br class="desktopElement"> que hayas asignado. Para nosotros tu seguridad es primero.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Cómo exportar datos?',
                                'text' => 'Podrás exportar la información de tus contactos y oportunidades de ventas desde cada listado en el CRM. Te enviaremos <br class="desktopElement"> un documento a tu correo con los datos que hayas elegido exportar.',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Cómo importar datos?',
                                'text' => 'Puedes importar tus bases de datos al CRM de Escala, solo necesitas guardar la información en un archivo .csv o .txt e iniciar el <br class="desktopElement"> proceso desde el listado de contactos. Chequea nuestro tutorial: <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=2bJFjHWbI1E">Ver tutorial</a>',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Cómo conceder accesos e invitar a terceros?',
                                'text' => 'Puedes agregar a terceros y a todos los miembros de tu equipo de trabajo para hacer más eficiente tu gestión. Es muy fácil te <br class="desktopElement"> invitamos a ver todo el detalle en este práctico tutorial. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/watch?v=dCrD2cD_Xpw">Ver tutorial</a>',
                                'type' => 'item',
                            ],
                        ],
                    ],
                    [
                        'type' => 'master',
                        'title' => 'Asesoría',
                        'items' => [
                            [
                                'title' => '¿Cómo conectar con un experto?',
                                'text' => 'En Escala tu crecimiento de negocio es vital para nosotros por eso, siempre tendrás la asesoría de un experto en marketing digital y <br class="desktopElement"> ventas acompañándote en todo el camino. <a class="hiperButtonGreenBlueT2"href="' . $escalaUrl . '/zoom-meeting">Link con asesor</a>',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Con quién puedo conectar para recibir asistencia?',
                                'text' => '<span style="color:#34768a">Si tienes dudas sobre cualquier cosa puedes:</span> <br class="desktopElement"> <ul style="color:#34768a"class="accordionSpecial"><li>1. Ver nuestros tutoriales de uso en nuestro canal de youtube. <a class="hiperButtonGreenBlueT2"href="https://www.youtube.com/channel/UCiDlXaq67qVf8lSTurRS8lQ">Escala en Youtube</a></li><li>2. Hablar con un asesor. <a class="hiperButtonGreenBlueT2"href="' . $escalaUrl . '/zoom-meeting">Link con asesor</a></li><li>3. Conversar por chat. <a class="hiperButtonGreenBlueT2"href="https://api.WhatsApp.com/send?phone=17863042407">Chat de WhatsApp</a></li><li>4. Hablar con el Especialista en customer success asignado a tu cuenta (Plan Pro y Enterprise).</li></ul>',
                                'type' => 'item',
                            ],
                        ],
                    ],
                    [
                        'type' => 'master',
                        'title' => 'Entrenamiento',
                        'items' => [
                            [
                                'title' => '¿Hay formas de aprender marketing y ventas para mejorar mi negocio?',
                                'text' => 'Escala Academy es el programa de formación constante, mediante el cual te daremos todo el conocimiento de marketing digital y <br class="desktopElement"> ventas para hacerte un experto. <br class="space"><br class="space"> Escala Academy: <br class="desktopElement"> <ul style="color:#34768a"class="accordionSpecial"><li>Tutoriales funcionalidades.</li><li>Blog Escala.</li><li>Workshops para tu empresa.</li><li>Webinars especializados en temas (Escalatones).</li><li>Programas de Éxito.</li></ul>',
                                'type' => 'item',
                            ],
                            [
                                'title' => '¿Necesito pagar para tener toda la información?',
                                'text' => 'Todo nuestro material de apoyo y conocimiento es totalmente gratis. Para nosotros mantenerte bien informado y en constante <br class="desktopElement"> formación es una inversión para ayudarte a hacer crecer tu negocio.',
                                'type' => 'item',
                            ],
                        ],
                    ],
                ];
                
                $parameters = [
                    'classSection' => 'homeSection_11',
                    'overlayImage1' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                    'overlayImage2' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                    'overlayImage3' => App::setFilePath('/assets/images/overlays/blur-3.png'),
                    'items' => $items,
                    'title' => '
    Preguntas <span>frecuentes</span>
   ',
                ];
            @endphp
            @contain_FAQ_T1($parameters)
            @endcontain_FAQ_T1





        </div>




    </div>



@endsection

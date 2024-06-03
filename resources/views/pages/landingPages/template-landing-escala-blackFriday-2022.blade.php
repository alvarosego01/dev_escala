<div id="landing_blackFriday_2022">
    <div class="sections">

        @php
        $parameters = array(
         'backgroundImageType' => false,
         'overlay' => false,
         'classSection' => 'threeCol landing_blackFriday_2022_0',
         'title' => '
            <span style="color: #FAD872">Black friday</span> & <br class="space">
            Cyber Monday
            <br class="space">
            <span class="discountTag">
                40% Off*
            </span>
        ',
         'text' => '
         <span class="whiteColor">
                Conviértete en cliente de Escala y <br class="space">
                disfruta de <span style="color: #FAD872">30% off en el Plan Pro</span> +<br class="space">
                beneficios especiales:
          </span>
          <br class="space">
            <span class="subText">
                <span style="color: #FAD872">+</span> 4h adicionales de acompañamiento <br class="space">
                <span style="color: #FAD872">+</span> 1 Plantilla personalizada de landing page <br class="space">
                <span style="color: #FAD872">+</span> 1 Usuario adicional <br class="space">
                <span style="color: #FAD872">+</span> Capacitaciones ilimitadas
            </span>
          ',
         'threeCol' => true,
         'textForm' => 'Recibe un tour guiado <br class="space"> de Escala',
         'backgroundImage' => null,
      'overlayImage' => null,
      'image' => App::setFilePath('/assets/images/illustrations/others/black_friday_promo.png'),
      'img_alt' => 'Ilustración de promoción oferta black friday viernes negro'
      ) ;

      @endphp

      @header_t1( $parameters )
      @endheader_t1


      @php
      $parameters = [
          'type' => 'backgroundColor',
          'classSection' => 'landing_blackFriday_2022_1',
          'enableTitle' => true,
          'titlePrincipal' => '
            Atrae y convierte clientes fieles con todas <br class="DT_e">
            las herramientas <span class="greenBlueColor">integradas en un mismo lugar</span>

          ',
          'subTitlePrincipal' => null,
          'overlay' => false,
          'enableButton' => false,
          'elements' => [
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/extra_menu_page_builder.png'),
                  'title' => '
                  Landing pages
                  ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/extra_menu_forms.png'),
                  'title' => '
                  Formularios
                  ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/extra_menu_email.png'),
                  'title' => '
                  Email
                  ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/extra_menu_whatsapp.png'),
                  'title' => '
                  WhatsApp
                  ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/extra_menu_ads.png'),
                  'title' => '
                  Anuncios
                  ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/extra_menu_crm.png'),
                  'title' => '
                  CRM
                  ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/extra_menu_automatic.png'),
                  'title' => '
                  Automatización
                  ',
                  'enableButton' => false,
              ],
              [
                  'img_alt' => null,
                  'img' => App::setFilePath('/assets/images/illustrations/others/extra_menu_analytics.png'),
                  'title' => '
                  Automatización
                  ',
                  'enableButton' => false,
              ],
          ],
      ];
  @endphp

  @contain_multiple_cards_T2($parameters)
  @endcontain_multiple_cards_T2



      <section
            class="customSection sectionParent landing_blackFriday_2022_2">

    <div class="section-row">

      <div class="containElements">

        <div class="info">

          <h3 class="primaryTitle">
            <span class="greenBlueColor">Estos Términos y condiciones se aplican <br class="DT_e"></span>
            a la oferta de Escala 2022
          </h3>

          <ul class="text">
            <li>
                <span class="number">1 </span>
                El descuento funciona así: se aplicará un total de <strong>40% de descuento</strong> en la compra del Plan Pro anual <br class="DT_e">
                de Escala <strong>hasta un límite de 50.000 contactos</strong> (y hasta 500.000 emails por mes a estos contactos). <br class="DT_e">
                Tenga en cuenta que este descuento del 40% anula cualquier descuento existente que se haya <br class="DT_e">
                ofrecido en todos los planes anuales, lo que significa que, además del descuento regular del 30%, <br class="DT_e">
                obtendrá una reducción adicional de 10% para que recibas un descuento total de 40%.
            </li>
            <li>
                <span class="number">2</span>
                Solo <strong>
                  los compradores primerizos de planes anuales y los usuarios de cuentas gratuitas de <br class="DT_e">
                  Escala
                </strong> son elegibles para esta oferta. Los clientes ya suscritos a Escala, los clientes <br class="DT_e">
                empresariales y los clientes que necesitan más de 50.000 contactos no son elegibles. La oferta <br class="DT_e">
                no se aplica a planes de crédito de pago por uso, complementos y cualquier otro producto.
            </li>
            <li>
                <span class="number">3</span>
                El IVA se aplica al precio después de aplicar el descuento.
            </li>
            <li>
                <span class="number">4</span>
                Esta promoción solo es válida para primeras compras de un plan anual realizadas entre el <strong>
                  21 de <br class="DT_e">
                  noviembre de 2022
                </strong> a las 00:00 (CET) y el <strong>30 de noviembre de 2022</strong> a las 23:59 (CET).
            </li>
            <li>
                <span class="number">5</span>
                Este descuento no se puede combinar con ninguna otra promoción o cupón.
            </li>
            <li>
                <span class="number">6</span>
                El descuento solo se puede utilizar una vez y no es renovable.
            </li>
            <li>
                <span class="number">7</span>
                Limitado a 500 cupones por orden de llegada.
            </li>
          </ul>

        </div>



      </div>


    </div>

      </section>

      <section
            class="customSection sectionParent landing_blackFriday_2022_3">

    <div class="section-row">

      <div class="containElements">

        <div class="info">

          <h3 class="primaryTitle">
            Aprovecha el descuento ahora
          </h3>

          <a  class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
            Hablar con asesor
          </a>

        </div>



      </div>


    </div>

      </section>

      @php
       $parameters = [
        'classSection' => 'landing_blackFriday_2022_4',
        'enableTitle' => true,
        'titlePrincipal' => '
        Nuestros clientes comentan <br class="space">
        <span class="greenBlueColor">por qué prefieren Escala</span>
        ',
        'subTitlePrincipal' => null,
        'enableContainerButton' => false,
        'urlButton' => '#',
        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
        'textButton' => 'Recibe un demo',
        'mob_reviews' => array(
          App::setFilePath('/assets/images/illustrations/others/trust_home_01.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_02.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_03.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_04.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_05.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_06.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_07.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_08.png'),
          App::setFilePath('/assets/images/illustrations/others/trust_home_09.png')
        ),
        'desk_reviews' => array(
          [
            App::setFilePath('/assets/images/illustrations/others/trust_home_01.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_02.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_03.png')
          ],
          [
            App::setFilePath('/assets/images/illustrations/others/trust_home_04.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_05.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_06.png')
          ],
          [
            App::setFilePath('/assets/images/illustrations/others/trust_home_07.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_08.png'),
            App::setFilePath('/assets/images/illustrations/others/trust_home_09.png')
          ]
        ),
      ];
@endphp

@reviews_sliders_T1( $parameters )
@endreviews_sliders_T1



    </div>
</div>

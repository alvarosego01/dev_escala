{{--
  Template Name: Home bootstrap
--}}

@extends('layouts.app')


@section('content')


<div id="homeBootstrap">

  <div class="sections">

    <section class="customSection elementor-element">
      <div class="section-row">

        <section class="innerSectionElement row">

          <div class="containElements">

            <h2 class="primaryTitle greenBlue"><span class="">Acelera el crecimiento de tu negocio</span></h2>


            <p class="primaryText grayText"><strong>escala</strong> te permite implementar embudos de venta: la estrategia probada para hacer crecer empresas de manera rentable, sostenible y escalable</p>

          </div>

        </section>

        <section class="innerSectionElement row">

          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img src="/escala-dev/wp-content/uploads/2021/04/beneficio_01.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>

              <h2 class="secondaryTitle"><span class="greenBlue">Da a conocer</span> <br>tu negocio</h2>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img src="/escala-dev/wp-content/uploads/2021/04/beneficio_02.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h2 class="secondaryTitle"><span class="greenBlue">Multiplica</span> tus<br> clientes potenciales</h2>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img src="/escala-dev/wp-content/uploads/2021/04/beneficio_03.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h2 class="secondaryTitle"><span class="greenBlue">Aumenta </span><br>tus ventas</h2>

            </div>
          </div>
          <div class="containElements col-sm-12 col-md-6 col-lg-3">
            <div class="elements">

              <div class="containerImage">
                <img src="/escala-dev/wp-content/uploads/2021/04/beneficio_04.svg" class="attachment-large size-large" alt="" loading="lazy" width="1024" height="998">
              </div>


              <h2 class="secondaryTitle"><span class="greenBlue">Fideliza</span><br>a tus clientes</h2>

            </div>
          </div>



        </section>

      </div>
    </section>

  </div>

</div>




      {{--
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
  --}}


      @endsection
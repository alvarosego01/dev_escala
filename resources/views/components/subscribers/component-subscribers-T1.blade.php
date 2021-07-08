

{{--

    @var $classSection  class context | string
    @var $image  image of element | url
    @var $title  title of module | html

    --}}


<section class="component-subscribers-T1 customSection sectionParent {{ $classSection }}">

    <div class="section-row">

        <div class="containElements">

            <div class="group">

                <div class="containerImage">
                    <img src="{{ $image }}" alt="" loading="lazy">
                </div>

                <h3>
                    {{ $title }}
                </h3>

            </div>

            <div class="form_cf7">

                @php
                    $f = get_field('newsletter_form');
                @endphp
                @if (isset($f) && $f != null)
                    {!! do_shortcode($f) !!}
                @else
                    {!! do_shortcode('[contact-form-7 id="2971" title="Blog Newsletter"]') !!}
                @endif

            </div>


        </div>


    </div>

</section>

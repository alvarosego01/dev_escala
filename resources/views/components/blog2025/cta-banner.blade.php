<section class="cta-banner-section">
  <div class="row align-items-center">
    @if(!empty($image))
      <div class="col-md-4">
        <img src="{{ App::get_img($image, 'src') }}" alt="{{ App::get_img($image, 'alt') }}" class="img-fluid">
      </div>
    @endif
    <div class="col-md-8">
      @if(!empty($title))
        <h3>{{ $title }}</h3>
      @endif
      <div class="cta-content">
        {!! $content ?? '' !!}
      </div>
      @if(!empty($button_text) && !empty($button_url))
        <a href="{{ $button_url }}" class="btn btn-primary mt-3">{{ $button_text }}</a>
      @endif
    </div>
  </div>
</section>

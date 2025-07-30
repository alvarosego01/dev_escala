<section class="cta-banner-section" @if(!empty($anchor_id)) id="{{ $anchor_id }}" @endif   style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-blog-cover.webp') !!}')">
  <div class="cta-banner-content">
    @if(!empty($image))
    <div class="imagen">
      <img src="{{ App::get_img($image, 'src') }}" alt="{{ App::get_img($image, 'alt') }}" class="img-fluid">
    </div>
    @endif
    <div class="content">
      <div class="img">
        <img alt="Logo escala" src="{{ App::setFilePath('/assets/images/logos/log-escala-oscuro-2025.webp') }}" loading="lazy">
      </div>
      <div class="cta-content">
        {!! $content ?? '' !!}
      </div>
      @if(!empty($title))
      <h3>{{ $title }}</h3>
      @endif
      @if(!empty($button_text) && !empty($button_url))
      <a href="{{ $button_url }}" class="btn btn-primary mt-3">{{ $button_text }}</a>
      @endif
    </div>
  </div>
</section>
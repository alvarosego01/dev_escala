<section class="text-block-section">
  @if(!empty($title))
    <h2>{{ $title }}</h2>
  @endif
  <div class="text-block-content">
    {!! isset($content) ? nl2br($content) : '' !!}
  </div>
</section>

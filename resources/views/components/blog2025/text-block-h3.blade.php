<section class="text-block-section">
  @if(!empty($title))
    <h3>{{ $title }}</h3>
  @endif
  <div class="text-block-content">
    {!! isset($content) ? nl2br($content) : '' !!}
  </div>
</section>

<section class="text-block-section" @if(!empty($anchor_id)) id="{{ $anchor_id }}" @endif>
  @if(!empty($title))
    <h2>{{ $title }}</h2>
  @endif
  <div class="text-block-content">
    {!! isset($content) ? nl2br($content) : '' !!}
  </div>
</section>

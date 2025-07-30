<section class="highlight-block-section" @if(!empty($anchor_id)) id="{{ $anchor_id }}" @endif>
  <div class="highlight-content">
    {!! $content ?? '' !!}
  </div>
</section>

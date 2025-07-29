<section class="index-section">
  <div class="index contain">
  <div class="index-title"><strong>{{ $index_title ?? '¿Qué discutiremos en este artículo?' }}</strong></div>
  <div class="index-items">
    @if(!empty($index_items) && is_array($index_items))
      <ul>
        @foreach($index_items as $item)
          @if(!empty($item['label']) && !empty($item['id']))
            <li><a href="#{{ $item['id'] }}">{{ $item['label'] }}</a></li>
          @endif
        @endforeach
      </ul>
    @endif
  </div>
  </div>
  
  <div class="imagen">
    <img src="{{ App::setFilePath('/assets/images/illustrations/others/andres-moreno-escala.webp') }}">
  </div>
</section>

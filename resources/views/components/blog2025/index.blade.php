<section class="index-section">
  <div class="index-title"><h3>{{ $index_title ?? '¿Qué discutiremos en este artículo?' }}</h3></div>

  <div class="index contain">
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

  <div class="imagen">
    <img src="{{ App::setFilePath('/assets/images/illustrations/others/andres-moreno-escala.webp') }}">
    <img class="img-mb" src="{{ App::setFilePath('/assets/images/illustrations/others/andres-moreno-escala-mb.webp') }}">
    
  </div>
  </div>


</section>

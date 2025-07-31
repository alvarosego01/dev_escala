<div class="image-block-section" @if(!empty($anchor_id)) id="{{ $anchor_id }}" @endif>
    @if(!empty($image_desktop))
        <img src="{{ App::get_img($image_desktop, 'src') }}" alt="{{ App::get_img($image_desktop, 'alt') }}" class="image-block-img-desktop" loading="lazy">
    @endif
    @if(!empty($image_mobile))
        <img src="{{ App::get_img($image_mobile, 'src') }}" alt="{{ App::get_img($image_mobile, 'alt') }}" class="image-block-img-mobile" loading="lazy">
    @endif
</div>

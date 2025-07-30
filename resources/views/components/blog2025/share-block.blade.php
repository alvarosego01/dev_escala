<section class="share-block-section">
  @if(!empty($topic))
    <div class="topic-label">{{ $topic }}</div>
  @endif
  <h3>Compartir en</h3>
  <div class="social-share-buttons">
    <a href="https://www.facebook.com/escalasoftware/" target="_blank">
      <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-facebook-escala.webp') }}" alt="Facebook">
    </a>
    <a href="https://x.com/escalasoftware" target="_blank">
      <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-x-escala.webp') }}" alt="X">
    </a>
    <a href="https://www.linkedin.com/company/escalacrm/posts/?feedView=all" target="_blank">
      <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-linkedin-escala.webp') }}" alt="LinkedIn">
    </a>
  </div>
</section>

document.addEventListener("DOMContentLoaded", function () {
  function initVideoModal(
    coverId,
    modalId,
    closeId,
    backdropId,
    iframeContainerId
  ) {
    const cover = document.getElementById(coverId);
    const modal = document.getElementById(modalId);
    const closeBtn = document.getElementById(closeId);
    const backdrop = document.getElementById(backdropId);
    const iframeContainer = document.getElementById(iframeContainerId);
    if (!cover || !modal || !closeBtn || !backdrop || !iframeContainer) return;
    const videoSrc = cover.getAttribute("data-video-src");
    function openModal() {
      modal.style.display = "flex";
      iframeContainer.style.display = "block";
      iframeContainer.style.minWidth = "800px";
      iframeContainer.style.width = "";
      iframeContainer.style.maxWidth = "";
      iframeContainer.style.minHeight = "auto";
      if (window.innerWidth <= 1024) {
        iframeContainer.style.minWidth = "0";
        iframeContainer.style.width = "96vw";
        iframeContainer.style.maxWidth = "96vw";
      }
      if (!iframeContainer.querySelector("iframe")) {
        const iframe = document.createElement("iframe");
        iframe.src = videoSrc;
        iframe.frameBorder = 0;
        iframe.allow = "autoplay; fullscreen; picture-in-picture";
        iframe.setAttribute("allowfullscreen", "");
        iframe.setAttribute("loading", "lazy");
        iframe.style.background = "#000";
        iframe.style.display = "block";
        iframeContainer.appendChild(iframe);
      }
      document.body.style.overflow = "hidden";
    }
    function closeModal() {
      modal.style.display = "none";
      while (iframeContainer.firstChild) {
        iframeContainer.removeChild(iframeContainer.firstChild);
      }
      document.body.style.overflow = "";
    }
    cover.addEventListener("click", openModal);
    cover.addEventListener("keydown", function (e) {
      if (e.key === "Enter") openModal();
    });
    closeBtn.addEventListener("click", closeModal);
    backdrop.addEventListener("click", closeModal);
    document.addEventListener("keydown", function (e) {
      if (modal.style.display === "flex" && e.key === "Escape") closeModal();
    });
  }
  // Inicializa el modal principal
  initVideoModal(
    "video-cover-main",
    "video-modal-main",
    "video-modal-close-main",
    "video-modal-backdrop-main",
    "video-iframe-container-main"
  );

  // Inicializa los modals de landing
  initVideoModal(
    "video-cover-landing",
    "video-modal-landing",
    "video-modal-close-landing",
    "video-modal-backdrop-landing",
    "video-iframe-container-landing"
  );
  initVideoModal(
    "video-cover-landing-2",
    "video-modal-landing-2",
    "video-modal-close-landing-2",
    "video-modal-backdrop-landing-2",
    "video-iframe-container-landing-2"
  );
});

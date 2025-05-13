
jQuery(document).ready(function($) {
    $('#no-website').change(function() {
        if(this.checked) {
            $('#website-field').val('').attr('readonly', true).css('opacity', '0.5');
        } else {
            $('#website-field').attr('readonly', false).css('opacity', '1');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const videoPlayers = document.querySelectorAll('.video-player');

    videoPlayers.forEach(player => {
        // Elementos del reproductor
        const cover = player.querySelector('.video-cover');
        const iframeContainer = player.querySelector('.video-iframe-container');
        const iframe = iframeContainer.querySelector('iframe');

        // Función para iniciar el video
        function playVideo() {
            // 1. Agregar clase activa
            player.classList.add('video-active');

            // 2. Obtener src original (sin autoplay)
            const src = iframe.src;

            // 3. Cambiar src para forzar autoplay
            if (!src.includes('autoplay=1')) {
                iframe.src = src.includes('?') ?
                    `${src}&autoplay=1` :
                    `${src}?autoplay=1`;
            }
        }

        // Evento click en toda el área
        player.addEventListener('click', playVideo);

        // Opcional: tecla Enter para accesibilidad
        player.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                playVideo();
            }
        });
    });
});

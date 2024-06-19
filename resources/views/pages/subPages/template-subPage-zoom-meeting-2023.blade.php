<div id="subPage_zoom_meeting_2023">

    <div class="sections">
        <section class="customSection sectionParent subPage_zoom_meeting_2023_0">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/backgrounds/bgZoomMeeting.svg') !!}')">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">
                            <h1 class="primaryTitle blackColor">
                                <span>¡Éxito!</span> ¿Cuándo deseas recibir el demo?
                            </h1>

                        </div>

                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">

                            <div class="col-md-12 col-lg-6 cardsContainer">

                                <div class="containElements">

                                    <div class="card row">

                                        <div class="action col-md-12 col-lg-5">
                                            <div class="containerImage">
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/agendamiento_1.png') !!}" alt="">
                                            </div>

                                            <a href="https://us02web.zoom.us/j/6758915436"
                                                class=" primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                                Iniciar Zoom ahora
                                            </a>
                                            <small>
                                                Se cargará en unos segundos
                                            </small>

                                        </div>

                                        <div class="info col-md-12 col-lg-7">
                                            <h4>
                                                Horarios atención
                                            </h4>

                                            <h3>
                                                De Lunes a Viernes:
                                            </h3>
                                            <p class="text">
                                                9:00 am - 11:00 pm <strong>Argentina / Uruguay</strong><br
                                                    class="space">
                                                8:00am - 10:00pm. <strong>Miami / Chile</strong><br class="space">
                                                7:00am - 9:00pm. <strong>México / Colombia</strong>
                                            </p>
                                            <hr>
                                            <h3>
                                                Sábados:
                                            </h3>
                                            <p class="text">
                                                9:00 am - 11:00 pm <strong>Argentina / Uruguay</strong><br
                                                    class="space">
                                                11:00am - 8:00pm. <strong>Miami / Chile</strong><br class="space">
                                                10:00am - 7:00pm. <strong>México / Colombia</strong>
                                            </p>

                                        </div>

                                    </div>
                                    <div class="card row">

                                        <div class="action col-md-12 col-lg-5">
                                            <div class="containerImage">
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/agendamiento_2.png') !!}" alt="">
                                            </div>

                                            <a
                                                href="https://api.whatsapp.com/send?phone=17863042407"
                                                class=" secondaryButton hoverInEffect openPopUpButton agendar popup-general-demo-2022">
                                                Agendarme online
                                            </a>
                                        </div>

                                        <div class="info col-md-12 col-lg-7">
                                            <p class="text">
                                                Te direccionaremos a un <br class="DT_e">
                                                calendario para que elijas el día <br class="DT_e">
                                                y hora que prefieres.
                                                <br class="space"><br class="space">
                                                Una vez te agendes, recibirás <br class="DT_e">
                                                un mensaje para confirmar tu espacio
                                            </p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-12 col-lg-6 image">
                                <div class="containElements">

                                    <div class="containerImage">
                                        <img src="{!! App::setFilePath('/assets/images/person/am/agendamiento_0.png') !!}" alt="">
                                    </div>

                                </div>

                            </div>

                        </div>
                    </section>

                    <section class="innerSectionElement sct3">
                        <div class="groupElements ">

                            <a class="trans" target="_blank" href="https://api.whatsapp.com/send?phone=17863042407">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/whatsapp_blue.png') !!}" alt="">
                                Recibir apoyo por WhatsApp
                            </a>

                        </div>

                    </section>

                </div>
            </div>

        </section>

        <section class="customSection sectionParent subPage_zoom_meeting_2023_1">
            <div class="section-row">

                <section class="innerSectionElement sct0">
                    <h2 class="secondaryTitle">
                        Andrés te explica <span>próximos pasos</span>
                    </h2>
                </section>
                <section class="innerSectionElement sct1">

                    <div class="video col-md-12">

                        @php
                            $videoEmbed = App::setFilePath('/assets/videos/zoom_meeting_2023.mp4');
                            $videoCover = App::setFilePath('/assets/images/illustrations/others/agendamiento_portrait.png');
                        @endphp
                        @if (isset($videoEmbed) && $videoEmbed != null)
                            <div class="youtubeImageContainer ">

                                {{-- <video class="video-js video_2 videoCover" autoplay muted loop>
                                    <source src="{{ $videoCover }}" type="video/mp4">
                                    Tu navegador no soporta videos HTML5.
                                </video> --}}

                                <video id="video_2" class="video-js video_2" controls preload="none"
                                    poster="{{ $videoCover }}"
                                    data-setup="{
                                                          autoplay: false
                                                        }">
                                    <source src="{{ $videoEmbed }}" type="video/mp4" />
                                    <source src="{{ $videoEmbed }}" type="video/webm" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider
                                        upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                            HTML5 video</a>
                                    </p>
                                </video>


                            </div>

                            <script type="text/javascript">
                                var player = videojs('video_2');

                                player.on('play', function() {

                                    jQuery('.video_2.videoCover').remove();

                                });
                            </script>
                        @endif

                    </div>

                </section>

            </div>
        </section>
    </div>

</div>

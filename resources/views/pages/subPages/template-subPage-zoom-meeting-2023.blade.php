<div id="subPage_zoom_meeting_2023">

    <div class="sections">
        <section class="customSection sectionParent subPage_zoom_meeting_2023_0">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/backgrounds/bgZoomMeeting23.svg') !!}')">

                <div class="section-row">

                    <section class="innerSectionElement sct1">

                        <div class="containElements">
                            <h2 class="primaryTitle blackColor">
                                Conecta con un asesor para recibir el demo <br class="space">
                                <span>y descubrir cómo podemos apoyarte a escalar tu empresa</span>
                            </h2>

                        </div>

                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="groupElements row">
                            <div class="col-md-12 col-lg-6 video">
                                @php
                                    $videoEmbed = App::setFilePath('/assets/videos/zoom_meeting_2023.mp4');
                                    $videoCover = App::setFilePath('/assets/images/illustrations/others/coverVideo_zoom_meeting_2023.png');
                                @endphp

                                @if (isset($videoEmbed) && $videoEmbed != null)
                                    <div class="youtubeImageContainer ">

                                        <video class="video-js" controls preload="none" poster="{{ $videoCover }}"
                                            {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                                            data-setup="{
                                  autoplay: false
                                }">
                                            <source src="{{ $videoEmbed }}" type="video/mp4" />
                                            <source src="{{ $videoEmbed }}" type="video/webm" />
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider upgrading to a
                                                web browser that
                                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                                    HTML5 video</a>
                                            </p>
                                        </video>

                                    </div>
                                @endif
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="groupElements cardBox">
                                    <div class="image">
                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/wasap-zoom-3-2.png') !!}" loading="lazy">
                                        </div>
                                    </div>

                                    <div class="containElements">

                                        <a target="_blank" href="https://us02web.zoom.us/j/6758915436" class="primaryButton hoverInEffect btnPrim">
                                           Iniciar Zoom ahora
                                        </a>
                                        <p class="pText">
                                            Se cargará en unos segundos
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="groupElements cardBox">
                                    <div class="image">
                                        <div class="containerImage">
                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/01_CRM_1.png') !!}" loading="lazy">
                                        </div>
                                    </div>

                                    <div class="containElements">

                                        <a href="https://reserva.escala.com/#/customer/4073304000000412157" class="secondaryButton hoverInEffect btnSec">
                                           Agendarme
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>



                </div>
            </div>



        </section>

        <section class="customSection sectionParent subPage_zoom_meeting_2023_1">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                      <h3 class="secondaryTitle">
                        Horarios de atención
                    </h3>
                </section>
            </div>
            <div class="section-row">
                <section class="innerSectionElement sct1">
                    <div class="scheduleBoxes">
                    <div class="scheduleBox box1">
                        <span class="scheduleBoxTitle">De Lunes a Viernes: <br class="space"></span>
                        8:00am - 10:00pm. <strong>Miami / Chile |</strong> <br class="space">
                        7:00am - 9:00pm. <strong>México / Colombia</strong> <br class="space">
                    </div>
                    <span class="separator"></span>
                    <div class="scheduleBox box2">
                        <span class="scheduleBoxTitle">Sábados: <br class="space"></span>
                        11:00am - 8:00pm. <strong>Miami / Chile |</strong> <br class="space">
                        10:00am - 7:00pm. <strong>México / Colombia</strong> <br class="space">
                    </div>
                    </div>
              </section>
              <div class="btnWsp">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=17863042407" class="secondaryButton hoverInEffect"> <img class="wsp-icon" src="{!! App::setFilePath('/assets/images/illustrations/others/wsp-icon.png') !!}" loading="lazy">
                Chat por WhatsApp
                </a>
            </div>
            </div>
        </section>
    </div>

</div>

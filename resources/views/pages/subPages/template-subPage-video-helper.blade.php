
@php

    $urlVideo = $_GET['vid'] ? $_GET['vid'] : null;

@endphp


<div id="videoHelper">

    <div class="sections">

        <section class=" customSection sectionParent videoHelper_section_0">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/background_video_helpers.png') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="containElements">

                            <div id="videoHolder">

                                {{-- <video id="zoomVideo" controls>
                                <source id="mp4" src="https://opsstorage.escala.com/Training/2023-05/2023-05-12-Training-alejandra@escala.com-21-01-81SSILPxQsiBdC1ax8ju5Q%3D%3D/2023-05-12%20-%20Training%20-%20alejandra@escala.com%20-%2021-01%20-%2098%20-%2081SSILPxQsiBdC1ax8ju5Q%3D%3D%20-%206d3cf50a-db43-4dd6-82f9-e94bf9659395%20-%20shared_screen_with_speaker_view.MP4" type="video/mp4">
                            </video> --}}

                                {{-- @if ($urlVideo != null)
                                    <video id="zoomVideo" controls>
                                        <source id="mp4" src="{!! $urlVideo !!}" type="video/mp4">
                                    </video>
                                @endif --}}

                                  @php
                                    $videoEmbed = $urlVideo;
                                    $videoCover = App::setFilePath('/assets/images/illustrations/others/home_portrait.png');
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

                        </div>

                    </section>
                </div>

            </div>

        </section>


    </div>

</div>

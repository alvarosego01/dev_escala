@php

// popup_call_class
// popup_special_message_image
// popup_special_message_text

@endphp

<div class="customPopUp  special_message modal fade {{ $popup_call_class }}" id="{{ $popup_call_class }}"
    aria-hidden="true" aria-labelledby="{{ $popup_call_class }}" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered modal-dialog-centered-small special_message">

        <div class="modal-content">

            <div class="modal-body">

                <section class="innerSectionElement">

                    <div class="groupElements">

                        <div class="barTop">
                        <button type="button" class="closePopUp" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>


                        </div>

                        <div class="row">

                            <div class="info">

                                <div class="containElements">

                                    <div class="sect1">

                                        <div class="containerImage imageHero">

                                            @if (isset($popup_special_message_image) && $popup_special_message_image != null)

                                            @php
                                                $i = $popup_special_message_image;
                                                $i = $i['url'];
                                             @endphp

                                                <img src="{{ $i }}" >

                                            @else
                                                <img src="{!! App::setFilePath('/assets/images/illustrations/otto/otto_message.png') !!}">
                                            @endif

                                        </div>

                                    </div>

                                    <div class="sect2">

                                        <div class="containElements">

                                            @if (isset($popup_special_message_text) && $popup_special_message_text != null )
                                            <p class="text">
                                                {!! $popup_special_message_text !!}
                                            </p>
                                            @endif

                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>

                </section>

            </div>
        </div>
    </div>

</div>

<a style="display: none" popup="{{ $popup_call_class }}" indexpopupbutton class="btn btn-primary"
    data-bs-toggle="modal" href="#{{ $popup_call_class }}" role="button">
</a>

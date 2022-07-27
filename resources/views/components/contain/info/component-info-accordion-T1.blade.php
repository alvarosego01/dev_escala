


@if ( isset($items) && count($items) > 0 )

@php

$parameters = [
    'config' => [
        'masterId' => 'accordionPanelsFAQ',
    ],
    'elements' => $items,
];
@endphp

@endif


@if (isset($parameters) && count($parameters['elements']) > 0)

    <div class="accordion custom" id="{{ $parameters['config']['masterId'] }}">

        @foreach ($parameters['elements'] as $x => $val)

            @php
            $cid = uniqid('accordion_element'); @endphp

            <div class="accordion-item itemParent">
                <h3 class="accordion-header parent" id="{{ $cid }}_headingOne" @if (isset($val['hideTitle']) && $val['hideTitle'] == true)
                    style="display: none!important;"
        @endif>
        <button
            class="accordion-button
                        @if (isset($val['open']) && $val['open'] == true)

                        @else
                            collapsed
                        @endif
                        "
            type="button" data-bs-toggle="collapse" data-bs-target="#{{ $cid }}_collapseOne"
            aria-expanded="true" aria-controls="{{ $cid }}_collapseOne">

            {{-- <i class="fa fa-chevron-right" aria-hidden="true"></i> --}}
            <span>{!! $val['title'] !!}</span>

        </button>
        </h3>
        <div id="{{ $cid }}_collapseOne"
            class="accordion-collapse
                        @if (isset($val['open']) && $val['open'] == true)
                            show specialSection
                        @else
                            collapse
                        @endif"
            aria-labelledby="{{ $cid }}_headingOne">
            <div class="accordion-body principal">

                @if (isset($val['text']) && $val['text'] != '')

                    <p class="text primaryText grayColorTexts">
                        {!! $val['text'] !!}
                    </p>

                @endif

                @if (isset($val['items']) && count($val['items']) > 0)
                    @php
                        $innerAcc = uniqid('Sub_accordion_element');
                    @endphp
                    <div class="accordion custom" id="{{ $innerAcc }}">

                        @foreach ($val['items'] as $x2 => $val2)

                            @if ($val2['type'] == 'item')


                                @php
                                    $inner_cid = uniqid('accordion_element');
                                @endphp

                                <div class="accordion-item itemChild">
                                    <h4 class="accordion-header child
                                            @if (isset($val2['open']) && $val2['open'] == true)
                                                openChildContain
                                            @endif
                                            "
                                        id="{{ $inner_cid }}_headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#{{ $inner_cid }}_collapseOne"
                                            aria-expanded="true" aria-controls="{{ $inner_cid }}_collapseOne">
                                            {{-- <i class="fa fa-chevron-right" aria-hidden="true"></i> --}}
                                            <span>{!! $val2['title'] !!}</span>

                                        </button>
                                    </h4>
                                    <div id="{{ $inner_cid }}_collapseOne"
                                        class="accordion-collapse
                                                @if (isset($val2['open']) && $val2['open'] == true)
                                                    show
                                                @else
                                                    collapse
                                                @endif
                                                "
                                        aria-labelledby="{{ $inner_cid }}_headingOne">
                                        <div class="accordion-body">


                                            <p class="text primaryText grayColorTexts">
                                                {!! $val2['text'] !!}
                                            </p>


                                        </div>

                                    </div>

                                </div>



                            @endif

                        @endforeach
                    </div>
                @endif




            </div>
        </div>


    </div>
@endforeach





@endif

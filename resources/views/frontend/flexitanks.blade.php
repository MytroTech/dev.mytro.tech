@extends('frontend.layouts.html')

@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">

            <main>
                <div id="content_block">
                    <div id="full_screen">
                        <div class="page_fullscren">
                            <svg id="svg_mask" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px" viewBox="0 0 1805 902" enable-background="new 0 0 1805 902" xml:space="preserve">
                                <g transform="translate(-50 -500) scale(1.5)">
                                    <path class="drib_mask" d="M455,668.1c30.2,83.3-6.9,174.4-82.9,203.4s-162.1-15-192.3-98.3 c-30.2-83.3,16-387.8,16-387.8S424.8,584.8,455,668.1z"/>
                                </g>
                                <g transform="translate(-50 -500) scale(1.5)">
                                    <path id="drib_border_1" class="drib_svg_part" opacity="0.43" fill="none" stroke="#dddddd" d="M527.5,639
                                        c45.9,126.9-10.5,265.6-126,309.8C285.9,993.1,155,926.1,109.1,799.2c-45.9-126.9,24.4-590.7,24.4-590.7S481.6,512.2,527.5,639z"/>
                                    <path id="drib_border_2" class="drib_svg_part" opacity="0.43" fill="none" stroke="#dddddd" d="M614.9,610.9
                                        c65,179.9-14.9,376.6-178.4,439.3S87.6,1017.9,22.5,837.9C-42.5,658,57.1,0.5,57.1,0.5S549.8,431,614.9,610.9z"/>
                                </g>
                            </svg>
                            <div class="ill_top">
                                @include('frontend.modules.svg.fles')
                            </div>

                            <div class="description_page right">
                                <div class="text">
                                    <div class="breadcrumbs">
                                        <a href="{{lang_route('services')}}">@lang('frontend/nav.captions.services')</a>
                                    </div>
                                    <h1 class="title_page">{!! $service->translate('title',session('db_lang')) !!}</h1>
                                    {!! $service->translate('content',session('db_lang')) !!}
                                </div>
                            </div>
                        </div>
                        <img id="wave_full_screen" src="/frontend/img/wave_full_screen.svg" width="1366" height="462" alt="">
                    </div>

                    <div id="under">

                        <div class="page animate_block">
                            <div class="item_animate">
                                <h2 class="title_page tal gradient_animation">
                                    <i></i>
                                    <div class="bg_animation">@lang('frontend/services.flexitanks.includes.title')</div>
                                </h2>
                            </div>
                        </div>
                        <div class="icon_list page animate_block">
                            <div class="item item_animate">
                                <div class="image"><img src="/frontend/img/f_item1.svg" width="27" height="36" alt=""></div>
                                <div class="text">
                                    @lang('frontend/services.flexitanks.includes.1')
                                </div>
                            </div>
                            <div class="item item_animate">
                                <div class="image"><img src="/frontend/img/f_item2.svg" width="36" height="36" alt=""></div>
                                <div class="text">
                                    @lang('frontend/services.flexitanks.includes.2')
                                </div>
                            </div>
                            <div class="item item_animate">
                                <div class="image"><img src="/frontend/img/f_item3.svg" width="42" height="42" alt=""></div>
                                <div class="text">
                                    @lang('frontend/services.flexitanks.includes.3')
                                </div>
                            </div>
                            <div class="item item_animate">
                                <div class="image"><img src="/frontend/img/f_item4.svg" width="29" height="36" alt=""></div>
                                <div class="text">
                                    @lang('frontend/services.flexitanks.includes.4')
                                </div>
                            </div>
                            <div class="item item_animate">
                                <div class="image"><img src="/frontend/img/f_item5.svg" width="32" height="30" alt=""></div>
                                <div class="text">
                                    @lang('frontend/services.flexitanks.includes.5')
                                </div>
                            </div>
                            <div class="item item_animate">
                                <div class="image"><img src="/frontend/img/f_item6.svg" width="43" height="24" alt=""></div>
                                <div class="text">
                                    @lang('frontend/services.flexitanks.includes.6')
                                </div>
                            </div>
                        </div>

                        <div class="image_page">
                            <div class="top"><img src="/frontend/img/gallery_duga.svg" width="1335" height="31" alt=""></div>
                            <img src="/frontend/img/tresh/3.jpg" alt="">
                            <div class="bot"><img src="/frontend/img/gallery_duga_3.svg" width="1337" height="42" alt=""></div>
                        </div>

                        <div id="next_service">
                            <div class="page">
                                <div class="flex_block h_and_s">
                                    <a href="{{lang_route('services',['service'=>'handling-and-storage'])}}" class="ill_ns">
                                        @include('frontend.modules.svg.h-and-s')
                                    </a>

                                    <div class="left animate_block">
                                        <div class="item_animate">
                                            <a href="{{lang_route('services',['service'=>'handling-and-storage'])}}" class="title">
                                                {!! $services->where('slug','handling-and-storage')->first()->translate('title',session('db_lang')) !!}
                                            </a>
                                            <div class="description_page">
                                                {!! $services->where('slug','handling-and-storage')->first()->translate('excerpt',session('db_lang')) !!}
                                            </div>
                                            <a href="{{lang_route('services',['service'=>'handling-and-storage'])}}" class="link">@lang('frontend/index.captions.more')</a>
                                            <svg width="129" height="217" class="drib_svg" xmlns="http://www.w3.org/2000/svg" width="77" height="129" viewBox="0 0 77 129"><defs><clipPath id="a"><path fill="#dbdbdb" d="M1257.26 1561.66c7.86 21.71-1.79 45.44-21.56 53-19.77 7.57-42.17-3.9-50.03-25.61-7.85-21.71 4.18-101.05 4.18-101.05s59.55 51.95 67.41 73.66z"/></clipPath></defs><path fill="none" stroke="#dbdbdb" stroke-miterlimit="50" stroke-width="2" d="M1257.26 1561.66c7.86 21.71-1.79 45.44-21.56 53-19.77 7.57-42.17-3.9-50.03-25.61-7.85-21.71 4.18-101.05 4.18-101.05s59.55 51.95 67.41 73.66z" clip-path="url(&quot;#a&quot;)" transform="translate(-1183 -1488)"/><path id="next_service_color" d="M60.26 77.82c5 13.8-1.15 28.89-13.73 33.7-12.58 4.8-26.83-2.48-31.83-16.29C9.7 81.43 17.36 31 17.36 31s37.9 33.02 42.9 46.82z"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                @include('frontend.modules.footer')
            </main>
        </div>
    </div>

    </body>
@stop

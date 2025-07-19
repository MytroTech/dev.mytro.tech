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
                                @include('frontend.modules.svg.laboratory')
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


                        <div class="flex_block page animate_block">
                            <div class="text_block item_animate">
                                <div class="gradient_animation">
                                    <i></i>
                                    <h2 class="bg_animation">@lang('frontend/services.laboratory.quality_control.title')</h2>
                                </div>
                                <p>
                                    @lang('frontend/services.laboratory.quality_control.desc')
                                </p>
                            </div>
                            <div class="icon_list_col item_animate">
                                <div class="item item_animate">
                                    <div class="image"><img src="/frontend/img/iso.svg" width="50" height="42" alt=""></div>
                                    <div class="text">
                                        @lang('frontend/services.laboratory.quality_control.iso')
                                    </div>
                                </div>
                                <div class="item item_animate">
                                    <div class="image"><img src="/frontend/img/item_l1.svg" width="40" height="49" alt=""></div>
                                    <div class="text">
                                        @lang('frontend/services.laboratory.quality_control.contents')
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="image_page">
                            <div class="top"><img src="/frontend/img/gallery_duga.svg" width="1335" height="31" alt=""></div>
                            <img src="/frontend/img/tresh/2.jpg" alt="">
                            <div class="bot"><img src="/frontend/img/gallery_duga_2.svg" width="1337" height="42" alt=""></div>
                        </div>



                        <div class="text_block_big">
                            <div class="page animate_block">
{{--                                <div class="title_page item_animate">--}}
{{--                                    <div class="gradient_animation">--}}
{{--                                        <i></i>--}}
{{--                                        <div class="bg_animation">@lang('frontend/services.laboratory.realisation.title')</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="flex_block item_animate">
                                    <div class="text_block item_animate">
                                        <p>
                                            @lang('frontend/services.laboratory.realisation.desc')
                                        </p>
                                    </div>
{{--                                    <div class="range_block item_animate">--}}
{{--                                        <div class="top bg_animation">@lang('frontend/services.laboratory.realisation.plan.top')<br> @lang('frontend/services.laboratory.realisation.plan.bot')</div>--}}
{{--                                        <div class="gradient_animation">--}}
{{--                                            <i></i>--}}
{{--                                            <div class="year bg_animation">@lang('frontend/services.laboratory.realisation.plan.year')</div>--}}
{{--                                            <!-- <div class="bot bg_animation"></div> -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>

{{--                                <div class="flex_block item_animate">--}}
{{--                                    <div class="text_block item_animate">--}}
{{--                                        <div class="gradient_animation">--}}
{{--                                            <i></i>--}}
{{--                                            <h3 class="bg_animation">@lang('frontend/services.laboratory.realisation.next.title')</h3>--}}
{{--                                        </div>--}}
{{--                                        <p>--}}
{{--                                            @lang('frontend/services.laboratory.realisation.next.desc')--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="text_block item_animate">--}}
{{--                                        <div class="gradient_animation">--}}
{{--                                            <i></i>--}}
{{--                                            <h3 class="bg_animation">@lang('frontend/services.laboratory.realisation.advantages.title')</h3>--}}
{{--                                        </div>--}}
{{--                                        <p>--}}
{{--                                            @lang('frontend/services.laboratory.realisation.advantages.desc')--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>

{{--                        <div class="text_block page animate_block">--}}
{{--                            <div class="page_content item_animate">--}}
{{--                                <p>--}}
{{--                                    @lang('frontend/services.laboratory.realisation.goal')--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="gallery_page gallery_service page animate_block">
                            <div class="gallery_block">
                                <div class="gallery_wrapper" itemscope itemtype="http://schema.org/ImageGallery">
                                    @if (!empty($service?->gallery) && count($service->gallery))
                                        @foreach ($service->gallery as $img)
                                            @php
                                                $imgPath = asset('storage/' . $img);
                                                $fullPath = public_path('storage/' . $img);

                                                 if (file_exists($fullPath)) {
                                                    $size = getimagesize($fullPath);
                                                    $width = $size[0] ?? 800;
                                                    $height = $size[1] ?? 600;
                                                }
                                            @endphp
                                            <figure class="item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a href="{{ $imgPath }}" data-size="{{ $width }}x{{ $height }}">
                                                    <img src="{{ $imgPath }}" alt="Gallery image">
                                                </a>
                                            </figure>
                                        @endforeach
                                    @else
                                        @lang('frontend/services.captions.no_gallery')
                                    @endif
                                </div>

                                <div class="pagination_gallery">
                                    <div class="arrow l" id="arrow-l">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 23"><path d="M10.5,22.2c0.4,0.4,1.1,0.4,1.6,0c0.4-0.4,0.4-1.1,0-1.6l-8-8h26.6c0.6,0,1.1-0.5,1.1-1.1s-0.5-1.1-1.1-1.1H4.1 l8-8c0.4-0.4,0.4-1.2,0-1.6c-0.4-0.4-1.2-0.4-1.6,0l-10,10c-0.4,0.4-0.4,1.1,0,1.6L10.5,22.2z"/></svg>
                                    </div>
                                    <div class="fraction">
                                        <div class="current_slide">01</div> <div class="d">–</div> {{ count($service->gallery ?? []) }}
                                    </div>
                                    <div class="arrow r" id="arrow-r">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 23"><path d="M21.5,0.8c-0.4-0.4-1.1-0.4-1.6,0c-0.4,0.4-0.4,1.1,0,1.6l8,8H1.4c-0.6,0-1.1,0.5-1.1,1.1s0.5,1.1,1.1,1.1h26.6 l-8,8c-0.4,0.4-0.4,1.2,0,1.6c0.4,0.4,1.2,0.4,1.6,0l10-10c0.4-0.4,0.4-1.1,0-1.6L21.5,0.8z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="next_service">
                            <div class="page">
                                <div class="flex_block fles">

                                    <a href="{{lang_route('services',['service'=>'flexitanks'])}}" class="ill_ns">
                                        @include('frontend.modules.svg.fles')
                                    </a>
                                    <div class="left animate_block">
                                        <div class="item_animate">
                                            <a href="{{lang_route('services',['service'=>'flexitanks'])}}" class="title">
                                                {!! $services->where('slug','flexitanks')->first()->translate('title',session('db_lang')) !!}
                                            </a>
                                            <div class="description_page">
                                                {!! $services->where('slug','flexitanks')->first()->translate('excerpt',session('db_lang')) !!}
                                            </div>
                                            <a href="{{lang_route('services',['service'=>'flexitanks'])}}" class="link">@lang('frontend/index.captions.more')</a>
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

@extends('frontend.layouts.html')

@section('body')
    <body class="index_page" data-url="{{lang_route('index')}}/">

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">
            <main>
                @include('frontend.partials.slides', ['slides' => $slides])
                <div id="content_block">
                    <div id="full_screen">
                        <div class="page">
                            <svg class="svg-mask-common drib_mask" id="svg_mask1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1805 902" enable-background="new 0 0 1805 902" xml:space="preserve">
                                <g>
                                    <path fill="#f5f5f5" d="M2036.7-2009.8h-286.6H54.9H-51.3H-786v4921.6h734.7H54.9h1695.2h286.6H2591v-4921.6H2036.7z M54.9,1203.2
							    		V17.3l1695.2,5.4v856.9L54.9,876.9V1203.2z"></path>
                                    <path fill="#f5f5f5" d="M0,0v902h1805V0H0z M496.5,745.8c-91.2,34.8-194.5-18-230.8-118S285,162.5,285,162.5s274.8,239.3,311,339.2
							    		C632.2,601.7,587.7,711,496.5,745.8z"></path>
                                </g>
							</svg>
                             <svg class="svg-mask-common" id="drib_border_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1805 902" enable-background="new 0 0 1805 902" xml:space="preserve">
                                <g transform="translate(50 -300) scale(1.2)">
                                    <path class="drib_svg_part" opacity="0.43" fill="none" stroke="#dddddd" d="M527.5,639
						    			c45.9,126.9-10.5,265.6-126,309.8C285.9,993.1,155,926.1,109.1,799.2c-45.9-126.9,24.4-590.7,24.4-590.7S481.6,512.2,527.5,639z"></path>
                                </g>
                            </svg>
                            <svg class="svg-mask-common" id="drib_border_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1805 902" enable-background="new 0 0 1805 902" xml:space="preserve">
                                <g transform="translate(50 -300) scale(1.2)">
                                    <path class="drib_svg_part" opacity="0.43" fill="none" stroke="#dddddd" d="M614.9,610.9
                                    c65,179.9-14.9,376.6-178.4,439.3S87.6,1017.9,22.5,837.9C-42.5,658,57.1,0.5,57.1,0.5S549.8,431,614.9,610.9z"></path>
                                </g>
                            </svg>
                            <svg class="svg-mask-common" id="drib_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1805 902" enable-background="new 0 0 1805 902" xml:space="preserve">
                                <g transform="translate(50 -300) scale(1.2)">
                                    <path class="drib_svg_part" fill="#2498C2" d="M83,447.1c1.4,3.5-0.2,7.5-3.7,9c-0.1,0-0.1,0.1-0.2,0.1
						    			c-3.7,1.2-7.7-0.7-9.1-4.4c-1.4-3.7,0.8-17.2,0.8-17.2S81.6,443.4,83,447.1z"></path>
                                </g>
                            </svg>
                            <svg class="svg-mask-common" id="drib_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1805 902" enable-background="new 0 0 1805 902" xml:space="preserve">
                                <g transform="translate(50 -300) scale(1.2)">
                                    <path class="drib_svg_part" fill="#EF7B22" d="M83.5,553.9c5.6,15.2-1.3,31.8-15.4,37.1c-14.1,5.3-30.1-2.7-35.7-17.9
						    			s3-70.7,3-70.7S77.9,538.8,83.5,553.9z"></path>
                                </g>
                            </svg>
                            <svg class="svg-mask-common" id="drib_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1805 902" enable-background="new 0 0 1805 902" xml:space="preserve">
                                <g transform="translate(50 -300) scale(1.2)">
                                    <path class="drib_svg_part" fill="#0A5993" d="M149.8,595.2c1.9,5.2-0.4,10.9-5.3,12.7s-10.4-0.9-12.3-6.2
						    			s1-24.3,1-24.3S147.9,590,149.8,595.2z"></path>
                                </g>
                            </svg>
                            <svg class="svg-mask-common" id="drib_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1805 902" enable-background="new 0 0 1805 902" xml:space="preserve">
                                <g transform="translate(50 -300) scale(1.2)">
                                    <path class="drib_svg_part" fill="#E95224" d="M86.6,677.8c2.4,6.6-0.6,13.7-6.7,16s-13.1-1.2-15.6-7.8
						    			s1.3-30.6,1.3-30.6S84.2,671.2,86.6,677.8z"></path>
                                </g>
                            </svg>
                            <svg class="svg-mask-common" id="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1805 902" enable-background="new 0 0 1805 902" xml:space="preserve">
                                <g transform="translate(50 -300) scale(1.2)">
                                    <g onclick="closeServicesBlock()">
                                        <circle fill-opacity="0.11" stroke="#FFFFFF" cx="322.5" cy="741.5" r="53.5"></circle>
                                        <path fill="none" stroke="#FFFFFF" stroke-width="2" d="M310.2,759.7v-36.4c0-1.2,1-2.3,2.2-2.3c0.4,0,0.9,0.1,1.3,0.4c1.4,0.8,29,16.8,31.4,18.2
					    					c1.1,0.6,1.5,2,0.9,3.1c-0.2,0.4-0.5,0.7-0.9,0.9c-1.7,1-29.4,17.1-31.4,18.2c-1.1,0.6-2.4,0.3-3.1-0.8
					    					C310.3,760.5,310.2,760.1,310.2,759.7z"></path>
                                    </g>
                                </g>
                            </svg>
                            <svg id="svg_mask_resp" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 600 1000" enable-background="new 0 0 600 1000" xml:space="preserve">
                                <g class="mask">
                                    <path fill="#F6F6F6" d="M-101-96.4V1000h701V-96.4H-101z M64,151.5c-30.3,11.6-64.7-6-76.7-39.2S-6.3-42.4-6.3-42.4
                                        S85.1,37.1,97.1,70.3C109.1,103.6,94.3,139.9,64,151.5z"/>
                                </g>
                                <path id="drib_border_1_r" opacity="0.43" fill="none" stroke="#ACACAC" enable-background="new    " d="M129.2,54.4
                                    c19,52.6-4.3,110-52.2,128.3s-102-9.4-121-62S-33.9-124-33.9-124S110.2,1.8,129.2,54.4z"/>
                                <path id="drib_border_2_r" opacity="0.43" fill="none" stroke="#ACACAC" enable-background="new    " d="M157.9,41.9
                                    c25.3,70-5.8,146.5-69.5,170.8s-135.8-12.6-161.2-82.5c-25.3-70,13.4-325.7,13.4-325.7S132.6-28.1,157.9,41.9z"/>
                                <g id="play_mini" onclick="closeServicesBlock()">
                                    <circle fill-opacity="0.11" stroke="#FFFFFF" cx="41.5" cy="93.5" r="23.8"/>
                                    <path fill="none" stroke="#FFFFFF" stroke-width="2" d="M36,101.6V85.4c0-0.5,0.4-1,1-1c0.2,0,0.4,0,0.6,0.2
                                        c0.6,0.4,12.9,7.5,14,8.1c0.5,0.3,0.7,0.9,0.4,1.4c-0.1,0.2-0.2,0.3-0.4,0.4c-0.8,0.4-13.1,7.6-14,8.1c-0.5,0.3-1.1,0.1-1.4-0.4
                                        C36.1,101.9,36,101.8,36,101.6z"/>
                                </g>
                            </svg>

                            <div id="slider_text_title">
                                <div class="wrapp">
                                    @foreach($slides as $index => $slide)
                                        <h2 class="title_page {{ $loop->first ? 'active' : '' }}">
                                            {!! $slide->translate('content', session('db_lang')) !!}
                                        </h2>
                                    @endforeach
                                </div>
                                <div id="nav_text_slider">
                                    @foreach($slides as $index => $slide)
                                        <a href="#{{ $loop->iteration }}" class="{{ $loop->first ? 'active' : '' }}">
                                            <span class="f">0</span><span class="l">{{ $loop->iteration }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <img id="wave_full_screen" src="/frontend/img/wave_full_screen.svg" width="1366" height="462" alt="">
                        <i id="arrow"></i>
                    </div>

                    <div id="under">
                        <div class="title_page animate_block">
                            <div class="item_animate">
                                <div class="gradient_animation">
                                    <i></i>
                                    <div class="bg_animation">@lang('frontend/index.content.services.title')</div>
                                </div>
                            </div>
                        </div>

                        @include('frontend.partials.services', ['services' => $services])

                        <div class="partners">
                            @include('frontend.modules.partners')
                            {{--<div class="item_partners animate_block item_partners1"><a class="link" href="{{lang_route('about')}}"><span>@lang('frontend/index.captions.about')</span></a></div>--}}
                        </div>
                    </div>

                </div>

                @include('frontend.modules.footer')
            </main>
        </div>

    </div>

    </body>
@stop

@extends('frontend.layouts.html')

@section('body')
    <body class="index_page"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">
            <main>
                <div id="content_block">
                    <div id="under">
                        <div class="title_page">@lang('frontend/index.content.services.title')</div>

                        <div class="services page">
                            <div class="item">

                                <div class="text">
                                    <div class="title">{!! $services->where('slug','handling-and-storage')->first()->translate('name',session('db_lang')) !!}</div>
                                    <p>
                                        {!! $services->where('slug','handling-and-storage')->first()->translate('excerpt',session('db_lang')) !!}
                                    </p>
                                    <a href="{{lang_route('services',['service'=>'handling-and-storage'])}}"><span>@lang('frontend/index.captions.more')</span></a>
                                </div>

                                <div class="ill">
                                    <img src="/frontend/img/save.svg" width="554" height="369" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="ill">
                                    <img src="/frontend/img/lab.svg" width="368" height="396" alt="">
                                </div>

                                <div class="text tar">
                                    <div class="title">{!! $services->where('slug','quality')->first()->translate('name',session('db_lang')) !!}</div>
                                    <p>
                                        {!! $services->where('slug','quality')->first()->translate('excerpt',session('db_lang')) !!}
                                    </p>
                                    <a href="{{lang_route('services',['service'=>'quality'])}}"><span>@lang('frontend/index.captions.more')</span></a>
                                </div>
                            </div>

                            <div class="item">

                                <div class="text">
                                    <div class="title">{!! $services->where('slug','flexitanks')->first()->translate('name',session('db_lang')) !!}</div>
                                    <p>
                                        {!! $services->where('slug','flexitanks')->first()->translate('excerpt',session('db_lang')) !!}
                                    </p>
                                    <a href="{{lang_route('services',['service'=>'flexitanks'])}}"><span>@lang('frontend/index.captions.more')</span></a>
                                </div>

                                <div class="ill">
                                    <img src="/frontend/img/flex.svg" width="521" height="421" alt="">
                                </div>
                            </div>

                        </div>
                        <div class="partners">
                            @include('frontend.modules.partners')
                            <div class="item"><a class="link" href="{{lang_route('about')}}"><span>@lang('frontend/index.captions.about')</span></a></div>
                        </div>
                    </div>

                </div>

                @include('frontend.modules.footer')
            </main>
        </div>

    </div>

    </body>
@stop

@extends('frontend.layouts.html')

@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">

            <main>
                <div id="content_block">

                    <div class="page">
                        <div class="page_dynamic page_dynamic_single vacancies_page">

                            <div class="breadcrumbs">
                                <a href="{{lang_route('index')}}">@lang('frontend/nav.captions.index')</a>
                                <img src="/frontend/img/arrow_breadcrumbs.svg" width="6" height="10" alt="">
                                <a href="{{lang_route('career')}}">@lang('frontend/nav.captions.career')</a>
                            </div>
                            <h1 class="title_page">{!! $vacancy->translate('title', session('db_lang')) !!}</h1>

                            <div class="text_content">
                                {!! $vacancy->translate('content', session('db_lang')) !!}
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

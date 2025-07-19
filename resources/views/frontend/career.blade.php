@extends('frontend.layouts.html')

@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">

            <main>
                <div id="content_block">

                    <div class="page">
                        <div class="page_content page_dynamic">

                            <h1 class="title_page">@lang('frontend/nav.captions.career')</h1>
                            <div class="desc">
                                @lang('frontend/career.text.desc')
                            </div>
                            @if(strtolower(session('site_lang')) === 'en')

                            <div class="articles">
                                @if (count($vacancies))
                                    @foreach ($vacancies as $vacancy)
                                        <div class="animate_block">
                                            <article class="item item_animate">
                                                <a href="{{ $vacancy->getUrl() }}" class="title">
                                                    <span>{!! $vacancy->translate('title',session('db_lang')) !!}</span>
                                                </a>
                                                <div class="text">{!! $vacancy->translate('excerpt',session('db_lang')) !!}</div>
                                            </article>
                                        </div>
                                    @endforeach
                                @else
                                    @lang('frontend/career.text.no_vacancies')
                                    {{--TODO:show message if no vacancies--}}
                                @endif
                            </div>
                        @endif
                        </div>
                    </div>

                </div>

                @include('frontend.modules.footer')
            </main>
        </div>

    </div>

    </body>
@stop

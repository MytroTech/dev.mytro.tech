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


                            <h1 class="title_page">@lang('frontend/nav.captions.news')</h1>

                            <div class="articles {{ !count($news) ? "desc" : "" }}">
                                @if (count($news))
                                        @foreach ($news as $anew)
                                        <div class="animate_block">
                                            <article class="item item_animate">
                                                @if ($anew->existsThumbnail())
                                                    <a href="{{ $anew->getUrl() }}" class="image_link">
                                                        <img src="{{ asset('/storage/' . config('constants.paths.news.thumbnails') . $anew->thumbnail) }}"
                                                             width="687"
                                                             height="132"
                                                             alt="{{ $anew->slug }}">
                                                    </a>
                                                @endif
                                                <a href="{{ $anew->getUrl() }}" class="title">
                                                    <span>{!! $anew->translate('title',session('db_lang')) !!}</span>
                                                </a>
                                                <div class="date">{{ $anew->published_at->format('d.m.Y') }}</div>
                                            </article>
                                        </div>
                                        @endforeach
                                @else
                                    @lang('frontend/news.captions.no_news')
                                    {{--TODO:show message if no news--}}
                                @endif
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

@extends('frontend.layouts.html')

@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">
            <main>
                <div id="content_block" class="responsive_height">

                    <div class="page">
                        <div class="page_dynamic page_dynamic_single">

                            <div class="breadcrumbs">
                                <a href="{{lang_route('index')}}">@lang('frontend/nav.captions.index')</a>
                                <img src="/frontend/img/arrow_breadcrumbs.svg" width="6" height="10" alt="">
                                <a href="{{lang_route('news')}}">@lang('frontend/nav.captions.news')</a>
                            </div>
                            <h1 class="title_page">{!! $anew->translate('title', session('db_lang')) !!}</h1>

                            <div class="date">{{ $anew->published_at->format('d.m.Y') }}</div>

                            <div class="text_content">
                                {!! $anew->translate('content',session('db_lang')) !!}
                                @if (!$anew->attachments->isEmpty())
                                    <div class="files_block">
                                        @foreach ($anew->attachments as $attachment)
                                            @if ($attachment->exists())
                                                <a download="{{ $attachment->name }}.{{ $attachment->getExtension() }}" href="{{ $attachment->getURL() }}" class="file" title="{{ $attachment->name }}">
                                                    <div class="name">{{ $attachment->name }}</div>
                                                    <div class="file_extension">.{{ $attachment->getExtension() }}</div>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="pagination">
                        <div class="page_content">
                            <a href="{{$anew->prev() ? $anew->prev()->getUrl() : ''}}" class="prev {{!$anew->prev() ? 'disabled' : ''}}">
                                <div class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16.8 30.9" enable-background="new 0 0 16.8 30.9" xml:space="preserve"><path d="M0,15.5L15.5,31l1.3-1.3L3.6,16.4v-1.9L16.8,1.3L15.5,0L0,15.5L0,15.5L0,15.5z"></path></svg>
                                </div>
                                <span>@lang('frontend/news.captions.prev')</span>
                            </a>
                            <a href="{{$anew->next() ? $anew->next()->getUrl() : ''}}" class="next {{!$anew->next() ? 'disabled' : ''}}">
                                <span>@lang('frontend/news.captions.next')</span>
                                <div class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16.8 30.9" enable-background="new 0 0 16.8 30.9" xml:space="preserve"><path d="M16.8,15.5L1.3,0L0,1.3l13.2,13.3l0,1.9L0,29.7L1.3,31L16.8,15.5L16.8,15.5L16.8,15.5z"></path></svg>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

                @include('frontend.modules.footer')
            </main>
        </div>
    </div>

    </body>
@stop

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


                            <h1 class="title_page">{{$page->translate('title', session('db_lang'))}}</h1>
                            <div>
                                <div class="page_text">
                                    {!! $page->translate('content', session('db_lang')) !!}
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

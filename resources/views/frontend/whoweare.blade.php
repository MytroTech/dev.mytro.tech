@extends('frontend.layouts.html')

@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">

            <main>
                <div id="content_block" class="contact_page">


                    <div class="page_content">
                        <h1 class="title_page">@lang('frontend/nav.captions.about')</h1>
                    </div>
                    <div class="block">

                   </div>

                @include('frontend.modules.footer')
            </main>
        </div>

    </div>

    </body>
@stop

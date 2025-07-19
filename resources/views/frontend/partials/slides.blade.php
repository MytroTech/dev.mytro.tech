<div id="slides_main">
    <div id="slides_main_wrapp">
        @foreach($slides as $index => $slide)
            <section class="slide_main {{ $loop->first ? 'visible' : '' }}" data-slide="{{ $index + 1 }}">
                <div class="content_slide_main">
                    <video class="video_index" muted autoplay loop preload="auto">
                        <source src="/{{ $slide->video_path }}" type="video/mp4">
                    </video>
                    <div class="text">
                        <h2>
                            {{-- SVG с цветом --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="77" height="129" viewBox="0 0 77 129">
                                <path fill="{{ $slide->color ?? '#ef7b22' }}" d="M60.26 77.82c5 13.8-1.15 28.89-13.73 33.7-12.58 4.8-26.83-2.48-31.83-16.29C9.7 81.43 17.36 31 17.36 31s37.9 33.02 42.9 46.82z"/>
                            </svg>
                            {!! $slide->translate('title', session('db_lang')) !!}
                        </h2>
                        <a href="#" class="skip" onclick="openServicesBlock(); return false;">
                            <span>@lang('frontend/index.captions.skip')</span>
                        </a>
                    </div>
                </div>
            </section>
        @endforeach
    </div>

    <nav id="nav_slides_main">
        @foreach($slides as $index => $slide)
            <a class="item_nav_slides_main {{ $loop->first ? 'active' : '' }}" href="#{{ $index + 1 }}" data-slide="{{ $index + 1 }}">
                <span class="f">0</span><span class="l">{{ $index + 1 }}</span>
            </a>
        @endforeach
        <i id="next_slide_main"></i>
    </nav>
</div>

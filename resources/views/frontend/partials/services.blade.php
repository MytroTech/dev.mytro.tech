<div class="services page">
    @foreach($services as $service)
        <div class="item">
            @if($service->align === 'left')
                <div class="text animate_block">
                    <div class="item_animate">
                        <div class="gradient_animation">
                            <i></i>
                            <a href="{{ lang_route('services', ['service' => $service->slug]) }}" class="title bg_animation">
                                {{ $service->translate('title', session('db_lang')) }}
                            </a>
                        </div>
                        <p>{!! $service->translate('excerpt', session('db_lang')) !!}</p>
                        <a class="link" href="{{ lang_route('services', ['service' => $service->slug]) }}">
                            <span>@lang('frontend/index.captions.more')</span>
                        </a>
                    </div>
                </div>

                <a href="{{ lang_route('services', ['service' => $service->slug]) }}" class="ill {{ $service->css_class }}">
                    @include('frontend.modules.svg.' . $service->svg_icon)
                </a>
            @else
                <a href="{{ lang_route('services', ['service' => $service->slug]) }}" class="ill {{ $service->css_class }}">
                    @include('frontend.modules.svg.' . $service->svg_icon)
                </a>

                <div class="text tar animate_block">
                    <div class="item_animate">
                        <div class="gradient_animation">
                            <i></i>
                            <a href="{{ lang_route('services', ['service' => $service->slug]) }}" class="title bg_animation">
                                {{ $service->translate('title', session('db_lang')) }}
                            </a>
                        </div>
                        <p>{!! $service->translate('excerpt', session('db_lang')) !!}</p>
                        <a class="link" href="{{ lang_route('services', ['service' => $service->slug]) }}">
                            <span>@lang('frontend/index.captions.more')</span>
                        </a>
                    </div>
                </div>
            @endif

        </div>
    @endforeach
</div>

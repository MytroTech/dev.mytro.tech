<footer>
	<div class="top">
		<nav>
			<a class="{{(check_current_place('page', ['page' => 'about'])) ? "active disabled":""}}" href="{{lang_route('page', ['page' => 'about'])}}">@lang('frontend/nav.captions.about')</a>
			<a class="item services {{(check_current_place('services'))?"active disabled":""}}" href="{{lang_route('services')}}">@lang('frontend/nav.captions.services')</a>
			<a class="{{(check_current_place('news'))?"active disabled":""}}" href="{{lang_route('news')}}">@lang('frontend/nav.captions.news')</a>
			<a class="{{(check_current_place('career'))?"active disabled":""}}" href="{{lang_route('career')}}">@lang('frontend/nav.captions.career')</a>
			<a class="{{(check_current_place('contacts'))?"active disabled":""}}" href="{{lang_route('contacts')}}">@lang('frontend/nav.captions.contacts')</a>
		</nav>
		<div class="right">
			<a class="email" href="mailto:{{ settings('site_email')}}">
				<img src="/frontend/img/email.svg" width="19" height="11" alt="">
				<span>{{ settings('site_email')}}</span>
			</a>
			<a class="phone" href="tel:{{ settings('site_phone') }}">
				<img src="/frontend/img/phone.svg" width="18" height="18" alt="">
				<span>{{ settings('site_phone')}}</span>
			</a>
		</div>
	</div>
	<div class="bot">
		<a href="{{lang_route('index')}}" id="logo_footer">
			<img src="/frontend/img/logo_footer.svg" width="36" height="36" alt="">
		</a>
		<div class="cop">&copy;&nbsp;{{ date('Y') }}.  @lang('frontend/footer.captions.copyright')</div>
        <div class="solar tw:gap-4">
            @foreach($socialLinks as $social)
                <a href="{{ $social->link }}" target="_blank" rel="noopener" class="social-link {{ $social->type }}">
                    <i class="{{ \App\Enums\SocialNetworkType::from($social->type)->icon() }} tw:text-3xl"></i>
                </a>
            @endforeach
        </div>
    </div>
</footer>
@include('frontend.modules.photoswipe')

@extends('frontend.layouts.html')
@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">

            <main>
                <div id="content_block" class="about_mt_page">

                    <div class="page_content">
                        <h1 class="title_page">@lang('frontend/nav.captions.about')</h1>
                    </div>
					<div class="about_mt_intro">
						<p>Discover our principles, operations, and organizational culture.</p>
					</div>

                    <div class="block">
						<div class="about_mt_section_group">
							{{-- Section 1: Who We Are --}}
							<div class="about_mt_section">
								<div class="icon">
									{{-- People Icon --}}
									<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										 stroke-linecap="round" stroke-linejoin="round">
										<path d="M17 20h5v-2a4 4 0 00-4-4h-1M6 20H1v-2a4 4 0 014-4h1m3-4a4 4 0 110-8 4 4 0 010 8zm6 0a4 4 0 110-8 4 4 0 010 8z"/>
									</svg>
								</div>
								<h2>@lang('frontend/nav.captions.whoweare')</h2>
								<p class="small text-muted">MytroTECH is a forward-thinking IT company founded in 2024 with a mission to reduce cost and implement more modern and secure technology for growing businesses.</p>
								<p>Built by experienced IT leader, our company was born out of a desire to deliver smarter infrastructure, automation, and cybersecurity solutions without the complexity and delays of traditional consulting.</p>
								<p>Over the past year, we’ve grown from a bold idea into a trusted technology partner serving clients across the United States and Europe. Our team brings deep expertise in enterprise IT, digital transformation, and modern DevOps practices.</p>
								<p>We are not only solving today’s business challenges — we are also actively investing in the development of groundbreaking technologies and products that aim to improve life globally. Our ambition is to contribute innovations that advance industries, protect data, and ultimately serve the betterment of humanity.</p>
								<p>{{ $about->getTranslation('content', app()->getLocale())['who_we_are'] ?? '' }}</p>
							</div>

							{{-- Section 2: What We Do --}}
							<div class="about_mt_section">
								<div class="icon">
									{{-- Tools Icon --}}
									<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										 stroke-linecap="round" stroke-linejoin="round">
										<path d="M14.7 6.3a4.7 4.7 0 00-6.4 6.4L3 18v3h3l5.3-5.3a4.7 4.7 0 006.4-6.4z"/>
									</svg>
								</div>
								<h2>@lang('frontend/nav.captions.whatwedo')</h2>
								<p class="small text-muted">Our scope, industry position and areas of operation</p>
								<p>{{ $about->getTranslation('content', app()->getLocale())['what_we_do'] ?? '' }}</p>
							</div>

							{{-- Section 3: How We Operate --}}
							<div class="about_mt_section">
								<div class="icon">
									{{-- Gear Icon --}}
									<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										 stroke-linecap="round" stroke-linejoin="round">
										<path d="M12 15.5A3.5 3.5 0 1 0 12 8.5a3.5 3.5 0 0 0 0 7z"/>
										<path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06A1.65 1.65 0 0 0 15 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 8.6 15a1.65 1.65 0 0 0-1.82-.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0 .33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.6c.26-.1.53-.1.79 0h.42c.26-.1.53-.1.79 0h.42c.26-.1.53-.1.79 0h.42c.26-.1.53-.1.79 0l.06.06a2 2 0 1 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9c.1.26.1.53 0 .79V10c.1.26.1.53 0 .79v.42c.1.26.1.53 0 .79z"/>
									</svg>
								</div>
								<h2>@lang('frontend/nav.captions.howweoperate')</h2>
								<p class="small text-muted">Business structure and team workflow</p>
								<p>{{ $about->getTranslation('content', app()->getLocale())['how_we_operate'] ?? '' }}</p>
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
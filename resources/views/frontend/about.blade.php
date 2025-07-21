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
									<a href="{{ lang_route('whoweare') }}"><i class="fa fa-users" aria-hidden="true"></i><span>@lang('frontend/nav.captions.whoweare')</span></a>								
								</div>
								
								<p class="small text-muted">MytroTECH is a forward-thinking IT company founded in 2024 with a mission to reduce cost and implement more modern and secure technology for growing businesses.</p>
								<p>Built by experienced IT leader, our company was born out of a desire to deliver smarter infrastructure, automation, and cybersecurity solutions without the complexity and delays of traditional consulting.</p>
								<p>Over the past year, we’ve grown from a bold idea into a trusted technology partner serving clients across the United States and Europe. Our team brings deep expertise in enterprise IT, digital transformation, and modern DevOps practices.</p>
								<p>We are not only solving today’s business challenges — we are also actively investing in the development of groundbreaking technologies and products that aim to improve life globally. Our ambition is to contribute innovations that advance industries, protect data, and ultimately serve the betterment of humanity.</p>
								<p>{{ $about->getTranslation('content', app()->getLocale())['who_we_are'] ?? '' }}</p>
							</div>

							{{-- Section 2: What We Do --}}
							<div class="about_mt_section">
								<div class="icon">
									<a href="{{ lang_route('whatwedo') }}"><i class="fa fa-server" aria-hidden="true"></i><span>@lang('frontend/nav.captions.whatwedo')</span></a>								
								</div>
								
								<h2>@lang('frontend/nav.captions.whatwedo')</h2>
								<p class="small text-muted">Our scope, industry position and areas of operation</p>
								<p>{{ $about->getTranslation('content', app()->getLocale())['what_we_do'] ?? '' }}</p>
							</div>

							{{-- Section 3: How We Operate --}}
							<div class="about_mt_section">
								<div class="icon">
									<a href="{{ lang_route('howweoperate') }}"><i class="fa fa-cogs" aria-hidden="true"></i><span>@lang('frontend/nav.captions.howweoperate')</span></a>								
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
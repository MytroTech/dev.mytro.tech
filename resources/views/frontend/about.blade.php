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
								
								<p>MytroTECH is a modern IT company established in 2024 with a mission to make advanced, secure technology accessible and cost-effective for growing businesses.</p
								<p><strong>Mission:</strong> To deliver smart, reliable IT solutions that drive efficiency, enhance security, and enable digital growth.</p> 
								<p><strong>Vision:</strong> To lead the transformation of enterprise technology by simplifying complexity and shaping a safer, more innovative digital future.</p> 
								<p><strong>Core Values:</strong> Innovation, trust, agility, transparency, and impact.</p> 
								<p>Founded by a seasoned IT leader, MytroTECH was created to break away from the inefficiencies of traditional consulting. In just one year, we've grown into a trusted partner for clients across the U.S. and Europe, offering expertise in infrastructure, automation, cybersecurity, and DevOps. Beyond solving today’s challenges, we are committed to developing technologies that advance industries and benefit society on a global scale.</p>
								
								<p>{{ $about->getTranslation('content', app()->getLocale())['who_we_are'] ?? '' }}</p>
							</div>

							{{-- Section 2: What We Do --}}
							<div class="about_mt_section">
								<div class="icon">
									<a href="{{ lang_route('whatwedo') }}"><i class="fa fa-server" aria-hidden="true"></i><span>@lang('frontend/nav.captions.whatwedo')</span></a>								
								</div>
						
								<p class="small text-muted">MytroTECH delivers high-impact IT services that help organizations modernize, secure, and scale their operations in a digital-first world.</p> 
								<p>We specialize in enterprise infrastructure, cloud solutions, cybersecurity, and business process automation—serving industries such as finance, logistics, healthcare, professional services, and technology startups.</p> 
								<p>Our team holds industry-recognized certifications in networking, cloud architecture, and cybersecurity, and brings hands-on expertise with leading platforms including Cisco, Microsoft Azure, AWS, and VMware.</p> 
								<p>Headquartered in the United States, we operate remotely with a growing presence across North America and Europe, allowing us to support clients with flexible, responsive service wherever they are.</p>
				
								<p>{{ $about->getTranslation('content', app()->getLocale())['what_we_do'] ?? '' }}</p>
							</div>

							{{-- Section 3: How We Operate --}}
							<div class="about_mt_section">
								<div class="icon">
									<a href="{{ lang_route('howweoperate') }}"><i class="fa fa-cogs" aria-hidden="true"></i><span>@lang('frontend/nav.captions.howweoperate')</span></a>								
								</div>
								
								<p class="small text-muted">MytroTECH is built on a solid legal and operational foundation to ensure trust, accountability, and long-term partnership.</p> 
								<p>MytroTECH is a multi-member LLC registered in the Commonwealth of Pennsylvania. Our structure allows us to operate with agility while maintaining clear governance and accountability.</p> 
								<p>We are fully licensed to conduct business in the United States and maintain appropriate liability insurance to support client engagements. We adhere to industry best practices for data security, confidentiality, and regulatory compliance.</p> 
								<p>Our leadership team brings decades of combined experience in enterprise IT, and we operate with a commitment to transparency, professionalism, and service excellence across every client interaction.</p>
								
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
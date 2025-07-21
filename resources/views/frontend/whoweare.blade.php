@extends('frontend.layouts.html')

@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">

            <main>
                <div id="content_block" class="whoweare_mt_page">


                    <div class="page_content">
                        <h1 class="title_page">@lang('frontend/nav.captions.whoweare')</h1>
                    </div>
					<div class="whoweare_mt_intro">
						<p>Modern IT solutions company dedicated to empowering businesses through secure, efficient, and innovative technology.</p>
					</div>

                    <div class="block">

						<div>
						<p class="small text-muted">MytroTECH is an innovation-driven IT company committed to delivering modern, secure, and cost-effective technology solutions for forward-looking businesses.</p> 
						<p><strong>Mission:</strong> Our mission is to simplify complex technology and empower businesses to operate smarter, faster, and more securely. We aim to bridge the gap between cutting-edge innovation and real-world business needs through tailored infrastructure, automation, and cybersecurity solutions.</p> 
						<p><strong>Vision:</strong> We envision a future where businesses of all sizes can access enterprise-grade technology without unnecessary complexity or cost. Our goal is to lead the shift toward intelligent, secure, and sustainable IT practices that create lasting value for our clients and society at large.</p> 
						<p><strong>Core Values:</strong></p> 
						<ul> <li><strong>Innovation:</strong> We embrace forward-thinking technologies to solve today’s challenges and shape tomorrow’s opportunities.</li>
							<li><strong>Integrity:</strong> We operate with honesty, transparency, and a strong sense of accountability in every engagement.</li> 
							<li><strong>Efficiency:</strong> We value lean solutions that deliver maximum impact with minimal overhead.</li> 
							<li><strong>Security:</strong> We prioritize the protection of data, systems, and people in everything we do.</li> 
							<li><strong>Client-Centricity:</strong> We succeed when our clients succeed—our approach is always customized, collaborative, and results-focused.</li> </ul> 	
							
							<p><strong>Our Story:</strong> Founded in 2024 by an experienced IT leader, MytroTECH was created to challenge the outdated consulting models that burden clients with delays, complexity, and inflated costs. What began as a bold idea has quickly evolved into a trusted technology partner serving businesses across the United States and Europe. In our first year alone, we’ve earned a reputation for delivering enterprise-grade solutions with startup agility—backed by deep expertise in IT infrastructure, digital transformation, and DevOps.</p> 
							<p>Today, we’re not just solving technical problems—we’re investing in the future. From our office in Lancaster County, Pennsylvania (ZIP 17517), we continue to build smart, scalable, and secure technologies that help businesses thrive—while contributing to a more efficient, connected, and sustainable world.</p>
						
						</div>


					</div>

                </div>
                @include('frontend.modules.footer')
            </main>
        </div>

    </div>

    </body>
@stop

@extends('frontend.layouts.html')

@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">

            <main>
                <div id="content_block" class="whatwedo_mt_page">


                    <div class="page_content">
                        <h1 class="title_page">@lang('frontend/nav.captions.whoweare')</h1>
                    </div>
					<div class="whatwedo_mt_intro">
						<p>Modern IT solutions company dedicated to empowering businesses through secure, efficient, and innovative technology.</p>
					</div>

                    <div class="block">
						<p class="small text-muted">At MytroTECH, we deliver intelligent, secure, and scalable IT solutions tailored to the needs of modern businesses. Our expertise spans infrastructure, automation, cybersecurity, and digital transformation—empowering clients to operate more efficiently and competitively in a technology-driven world.</p> 
						<p>We serve a diverse range of industries, including finance, logistics, healthcare, manufacturing, professional services, and technology startups. Whether supporting critical enterprise systems or helping a startup scale its infrastructure, we bring the same level of precision, performance, and care.</p> 
						<p>Our services include:</p> <ul> <li>Enterprise network and server infrastructure</li> 
						<li>Cloud architecture and migration (AWS, Microsoft Azure, Google Cloud)</li> 
						<li>Cybersecurity strategy, monitoring, and compliance</li> <li>Business process automation and system integration</li> 
						<li>IT operations, support, and managed services</li> </ul> 
						<p><strong>Certifications:</strong> Our team holds certifications across key disciplines, including Cisco (CCNA), Microsoft Certified: Azure Administrator, CompTIA Security+, and AWS Certified Solutions Architect—ensuring deep technical knowledge and industry-standard implementation.</p> 
						<p><strong>Technologies & Partnerships:</strong> We work with trusted platforms and technologies such as Cisco, VMware, Microsoft Azure, AWS, Proxmox, Laravel, and GitHub to deliver robust, future-ready solutions.</p> 
						<p><strong>Research & Development:</strong> Beyond client services, MytroTECH actively invests in research and development to build proprietary tools, explore emerging technologies, and solve complex global challenges. Our R&D initiatives focus on automation, data protection, sustainable computing, and intelligent infrastructure—driving innovation that benefits both clients and the broader tech ecosystem.</p> 
						<p>With our headquarters in Lancaster County, Pennsylvania, and a remote-first model serving clients across the U.S. and Europe, MytroTECH combines agility with enterprise-grade expertise to deliver exceptional value, every step of the way.</p>


                   </div>

                </div>
                @include('frontend.modules.footer')
            </main>
        </div>
    </div>

    </body>
@stop

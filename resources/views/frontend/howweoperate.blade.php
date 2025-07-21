@extends('frontend.layouts.html')

@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">

            <main>
                <div id="content_block" class="howweoperate_mt_page">


                    <div class="page_content">
                        <h1 class="title_page">@lang('frontend/nav.captions.howweoperate')</h1>
                    </div>

					<div class="whatwedo_mt_intro">
						<p>Modern IT solutions company dedicated to empowering businesses through secure, efficient, and innovative technology.</p>
					</div>

                    <div class="block">
						<p class="small text-muted">MytroTECH is built on a foundation of transparency, accountability, and operational excellence—ensuring trust with every client, partner, and project.</p> <p><strong>Legal Structure:</strong> MytroTECH is a multi-member Limited Liability Company (LLC) registered in the Commonwealth of Pennsylvania. This structure provides both flexibility in our internal operations and strong legal protection for our partners and clients.</p> 
						<p><strong>Leadership:</strong> The company is led by a team of seasoned IT professionals with backgrounds in enterprise infrastructure, cybersecurity, and digital transformation. Our leadership brings a balance of technical expertise and business acumen, allowing us to align IT solutions with real-world outcomes.</p> 
						<p><strong>Licensing & Insurance:</strong> MytroTECH is fully licensed to operate in the United States and maintains active liability and errors & omissions (E&O) insurance coverage. This ensures that our clients are protected during every engagement and that we meet the professional standards expected in enterprise and government contracts.</p> 
						<p><strong>Compliance & Standards:</strong> We adhere to industry best practices in data security, confidentiality, and operational compliance. Our processes are designed around frameworks such as NIST, ISO/IEC 27001, and CIS Controls, enabling us to support clients in regulated industries including finance, healthcare, and legal services.</p> 
						<p><strong>Client Engagement:</strong> We operate with a transparent, collaborative model—from initial consultation through deployment and ongoing support. Every engagement begins with a deep understanding of client goals, followed by tailored solution design, agile implementation, and continuous improvement.</p> 
						<p><strong>Remote-First, Locally Grounded:</strong> While we operate as a remote-first team to maximize agility and responsiveness, our headquarters in Lancaster County, Pennsylvania (ZIP 17517) provides a strong operational base and local presence for regional engagements.</p> 
						<p>At every level, we are committed to building lasting relationships through integrity, quality, and results. Our operational model allows us to scale rapidly, adapt to complex challenges, and deliver enterprise-grade outcomes with startup speed.</p>
					</div>


                   </div>

                </div>
                @include('frontend.modules.footer')
            </main>
        </div>
    </div>

    </body>
@stop

@extends('frontend.layouts.html')

@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">

            <main>
                <div id="content_block" class="contact_page">


                    <div class="page_content">
                        <h1 class="title_page">@lang('frontend/nav.captions.howweoperate')</h1>
                    </div>

                    <div class="block">

			<div>
			     Leadership
			     President  - Dmytro Doianov
			</div>
			<div>
                             Legal Structure
			     MytroTECH operates as a Limited Liability Company (LLC) registered in the state of Pennsylvania, USA.
                             We serve U.S.-based and international clients under service agreements that comply with both local and international IT compliance standards (GDPR, HIPAA, etc.).

			</div>
			<div>
			MytroTECH LLC maintains full legal registration in the state of Pennsylvania and holds appropriate general liability and professional liability (E&O) insurance coverage.
                        We follow security best practices aligned with ISO/IEC 27001 and are prepared to comply with applicable privacy and industry standards such as GDPR, HIPAA,
                        and CCPA upon request.
                        All client engagements are governed by written service agreements and NDAs.
			</div>


                   </div>

                </div>
                @include('frontend.modules.footer')
            </main>
        </div>

        <script type="text/javascript">

            var map,
                image = '/frontend/img/marker.svg';

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 46.332958, lng: 30.647895},
                    zoom: 10,
                });

                var marker = new google.maps.Marker({
                    position: {lat: 46.332958, lng: 30.647895},
                    map: map,
                    title: 'Olir',
                    icon: image
                });



            }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh6FCJT70UuHxZtd34CjDa3YWE1JHstgc&callback=initMap"></script>

    </div>

    </body>
@stop

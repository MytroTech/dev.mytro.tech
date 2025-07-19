@extends('frontend.layouts.html')

@section('body')
    <body class="internal_pages dark"> <!--  class="blockScroll"  -->

    <div id="all">

        @include('frontend.modules.header')

        <div class="container">

            <main>
                <div id="content_block" class="contact_page">


                    <div class="page_content">
                        <h1 class="title_page">@lang('frontend/nav.captions.contacts')</h1>
                    </div>
                    <div class="block">
                        <div class="form">
                            @if (count($contacts))
                                @foreach ($contacts as $contact)
                                    <div class="phones">
                                        @if (count((array)$contact->phone))
                                            <div class="title">@lang('frontend/contacts.captions.phone')</div>
                                            @foreach ((array)$contact->phone as $phone)
                                                <a href="tel:{{$phone}}">{{$phone}}</a><br>
                                            @endforeach
                                        @endif
{{--                                        @if (count($contact->fax))--}}
{{--                                            <br><br>--}}
{{--                                            <div class="title">@lang('frontend/contacts.captions.fax')</div>--}}
{{--                                            @foreach ($contact->fax as $fax)--}}
{{--                                                <a href="tel:{{$fax}}">{{$fax}}</a><br>--}}
{{--                                            @endforeach--}}
{{--                                        @endif--}}
                                    </div>
                                    <a href="mailto:{{$contact->email}}" class="email">{{$contact->email}}</a>

                                    <div id="address" class="address">
                                        {!! $contact->translate('address', session('db_lang')) !!}
                                    </div>
                                @endforeach
                            @endif


                            <form id="feedback" action="{{lang_route('contacts.feedback')}}" method="post">

                                <div class="title_form">@lang('frontend/contacts.form.title')</div>

                                <div class="flex_field">
                                    <div class="field">
                                        <input type="text" name="name" class="text_input">
                                        <label>@lang('frontend/contacts.form.name')</label>
                                    </div>
                                    <div class="field">
                                        <input type="text" name="phone" class="phone_input">
                                        <label>@lang('frontend/contacts.form.phone')</label>
                                    </div>
                                </div>
                                <div class="field textarea_field">
                                    <div class="textarea text" contenteditable="true"></div>
                                    <label>@lang('frontend/contacts.form.message')</label>
                                    <textarea name="message"></textarea>
                                </div>

                                <div class="button">
                                    <div class="sampleContainer">
                                        <div class="loader_form">
                                            <span class="dot dot_1"></span>
                                            <span class="dot dot_2"></span>
                                            <span class="dot dot_3"></span>
                                            <span class="dot dot_4"></span>
                                        </div>
                                    </div>
                                    <div class="success hidden">@lang('frontend/contacts.form.success')</div>
                                    <button type="submit">@lang('frontend/contacts.form.submit')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="map"></div>
                    <svg class="svg-mask-common" id="svg_mask" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                         y="0px" viewBox="0 0 1805 902" enable-background="new 0 0 1805 902" xml:space="preserve">
					    <mask id="mask" x="0" y="0" width="1805" height="902" >
                            <circle class="circle_gray" cx="430" cy="554" r="0"/>
                            <!-- <circle class="circle" cx="430" cy="554" r="200"/> -->
                            <g transform="translate(-50 -500) scale(1.5)">
                                <path class="drib_mask" d="M455,668.1c30.2,83.3-6.9,174.4-82.9,203.4s-162.1-15-192.3-98.3 c-30.2-83.3,16-387.8,16-387.8S424.8,584.8,455,668.1z"/>
                            </g>
                        </mask>
                        <circle cx="430" cy="554" r="2669" mask="url(#mask)"/>
                        <g transform="translate(250 -500) scale(1.5)">
                            <path id="drib_border_1" class="drib_svg_part" opacity="0.43" fill="none" stroke="#dddddd" d="M527.5,639
				    			c45.9,126.9-10.5,265.6-126,309.8C285.9,993.1,155,926.1,109.1,799.2c-45.9-126.9,24.4-590.7,24.4-590.7S481.6,512.2,527.5,639z"/>
                            <path id="drib_border_2" class="drib_svg_part" opacity="0.43" fill="none" stroke="#dddddd" d="M614.9,610.9
				    			c65,179.9-14.9,376.6-178.4,439.3S87.6,1017.9,22.5,837.9C-42.5,658,57.1,0.5,57.1,0.5S549.8,431,614.9,610.9z"/>
                        </g>
					</svg>


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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<a id="mkdf-back-to-top" href="#">
    <span class="mkdf-icon-stack">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="0 0 22.3 22.3"
            style="enable-background: new 0 0 22.3 22.3"
            xml:space="preserve">
            <g>
                <path d="M10.8,2" />
                <line x1="10.8" y1="20.9" x2="10.8" y2="2" />
                <line x1="11.5" y1="1.3" x2="10.8" y2="2" />
                <line x1="10.8" y1="2" x2="0.9" y2="11.9" />
                <path d="M10.8,2" />
                <line x1="20.7" y1="12" x2="10.8" y2="2" />
            </g>
        </svg>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="0 0 22.3 22.3"
            style="enable-background: new 0 0 22.3 22.3"
            xml:space="preserve">
            <g>
                <path d="M10.8,2" />
                <line x1="10.8" y1="20.9" x2="10.8" y2="2" />
                <line x1="11.5" y1="1.3" x2="10.8" y2="2" />
                <line x1="10.8" y1="2" x2="0.9" y2="11.9" />
                <path d="M10.8,2" />
                <line x1="20.7" y1="12" x2="10.8" y2="2" />
            </g>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 12">
            <path
                d="M1.5 10.1C1.1 9.5.9 8.7.9 7.6V4.4c0-1.1.2-1.9.6-2.5C2 1.3 2.7 1 3.7 1c1 0 1.7.2 2.1.7s.6 1.2.6 2.1v.6H4.6v-.7c0-.4-.1-.8-.2-1s-.3-.3-.6-.3c-.4 0-.6.1-.7.4-.1.2-.2.6-.2 1v4.3c0 .5.1.8.2 1 .1.2.4.4.7.4.3 0 .6-.1.7-.4.1-.3.2-.6.2-1.1V7h-.9V5.9h2.7v5H5.3l-.2-.9c-.3.7-.8 1-1.6 1-.9 0-1.6-.3-2-.9zM9 10.2c-.4-.6-.6-1.4-.6-2.4V4.2c0-1 .2-1.8.7-2.4.4-.5 1.1-.8 2.1-.8s1.8.3 2.2.8c.4.5.7 1.3.7 2.4v3.6c0 1-.2 1.8-.7 2.4-.4.5-1.1.8-2.2.8-1 0-1.7-.3-2.2-.8zm2.9-1c.1-.2.2-.5.2-.9V3.7c0-.4-.1-.7-.2-.9-.1-.2-.3-.3-.7-.3s-.6.1-.7.3c-.1.2-.2.5-.2.9v4.6c0 .4.1.7.2.9.1.2.3.3.7.3.4.1.6-.1.7-.3z" />
        </svg>
    </span>
</a>

<div class="mkdf-content" style="margin-top: -150px">
    <div class="mkdf-content-inner">
        <div
            class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-preload-background mkdf-has-bg-image mkdf-bg-responsive-disabled"
            style="
    height: 452px;
    background-image: url(frontend/img/background_booking.jpg);
    background-size: cover;
    background-position: center;
  "
            data-height="452">

            <div class="mkdf-title-image">
                <img
                    itemprop="image"
                    src="{{asset('frontend/img/background_booking.jpg')}}"
                    alt="s" />
            </div>
            <div
                class="mkdf-title-wrapper"
                style="height: 302px; padding-top: 150px">
                <div class="mkdf-title-inner">
                    <div class="mkdf-grid">
                        <h2 class="mkdf-page-title entry-title">IMPORTANT NOTES BEFORE BOOKING</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="mkdf-full-width">
            <div class="mkdf-full-width-inner">
                <div class="mkdf-grid-row">
                    <div class="mkdf-page-content-holder mkdf-grid-col-12">
                        <div class="wpb-content-wrapper">
                        <div class="container py-4">
                                <div class="row g-4 d-flex justify-content-center">
                                    <!-- Card 1 -->
                                     @if(isset($tours))
                                     @foreach ($tours as $tour )
                                     <div class="col-6 col-md-4 col-lg-3">
                                        <div class="mkdf-blog-slider-item border-0 shadow-sm rounded">
                                            <div class="mkdf-blog-slider-item-inner">
                                                <div class="mkdf-item-image mkdf-tilt-trigger">
                                                    <a itemprop="url" href="guided-hikes-in-iceland-rhyolite-mountain-trail/index.html" class="d-block text-decoration-none mkdf-tilt-target" style="transform-origin: 51.8347% 48.9293% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                                                        <img loading="lazy" decoding="async" src="{{$tour->images->first()->thumbnail}}" alt="Guided Hikes in Iceland Rhyolite Mountain Trail" class="img-fluid rounded" width="1300" height="1551">
                                                    </a>
                                                    <div class="mkdf-post-info-category mkdf-st-highlight">
                                                        <a href="category/adventure/index.html" rel="category tag">Adventure</a>
                                                        <span class="mkdf-st-highlight">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15.7 30" style="enable-background:new 0 0 15.7 30;" xml:space="preserve" class="mkdf-active-hover-left">
                                                                <polygon class="st0" points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 "></polygon>
                                                            </svg> <span class="mkdf-active-hover-middle"></span>
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13.3 30" style="enable-background:new 0 0 13.3 30;" xml:space="preserve" class="mkdf-active-hover-right">
                                                                <polygon class="st0" points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 "></polygon>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mkdf-item-text-wrapper">
                                                    <div class="mkdf-item-text-holder">
                                                        <div class="mkdf-item-text-holder-inner">


                                                            <h5 itemprop="name" style="font-size: clamp(14px, 2vw, 24px);" class="entry-title mkdf-post-title">
                                                                <a itemprop="url" href="http://127.0.0.1:8000/booking/tour_detail" title="Guided Hikes in Iceland – Rhyolite mountain Trail">
                                                                   {{$tour->title}}
                                                                </a>
                                                            </h5>
                                                            <div class="mkdf-item-info-section">
                                                                <div class="p-0 d-block d-md-block d-lg-flex container">
                                                                    <p class="card-text text-muted m-0" style="
    font-weight: 400;font-size: clamp(12px, 2vw, 16px);
">
                                                                    <svg style="width: clamp(18px, 2vw, 24px); height: clamp(18px, 2vw, 24px);" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path d="M4 10H20V19C20 20.1046 19.1046 21 18 21H6C4.89543 21 4 20.1046 4 19V10Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M5.77778 5H4V10H20V5H18.2222M11.1111 5H12.8889" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <line x1="8" y1="4" x2="8" y2="6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></line>
                                                                        <line x1="16" y1="4" x2="16" y2="6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></line>
                                                                        <path d="M7 13H7.01" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M7 16H7.01" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M10 13H10.01" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M10 16H10.01" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M13 13H13.01" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg> 1 days &nbsp;
                                                                    
                                                                </p>
                                                                <p class="card-text text-muted m-0" style=" font-size: clamp(12px, 2vw, 16px);
    font-weight: 400;
"><svg style="width: clamp(18px, 2vw, 24px); height: clamp(18px, 2vw, 24px);" xmlns="http://www.w3.org/2000/svg" id="i-location" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                                        <circle cx="16" cy="11" r="4"></circle>
                                                                        <path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z"></path>
                                                                    </svg>
                                                                    Many Destinations</p>
                                                                </div>
                                                                
                                                                <p class="mb-0 mb-md-2">
                                                    <strong>4.9</strong>
                                                    <span class="text-warning">★★★★★</span>
                                                    <small class="text-muted">(231 reviews)</small>
                                                </p>
                                                                <p class="price m-1 m-md-3">
                                                                    <span style="font-size: clamp(16px, 2vw, 20px)" class="fw-bold text-success">${{$tour->price}}</span>
                                                                    <del class="text-muted" style="font-size: clamp(12px, 2vw, 16px)">${{$tour->price +20}}</del>
                                                                </p>
                                                                <div class="container text-center pb-4
                                                ">
                                                                    <a href="{{route('tour_detail',['id'=>$tour->id])}}" style="font-size: clamp(12px, 2vw, 18px);" class="btn btn-success ">
                                                                        Book Now <i class="fa-solid fa-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                     @endif
                                    
                                    </div>
                            </div>
                            <div class="mkdf-row-grid-section-wrapper">
                                <div class="mkdf-row-grid-section">
                                    <div
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1574948316589 vc_row-has-fill">
                                        <div
                                            class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024">
                                                        <div
                                                            class="mkdf-eh-item"
                                                            data-item-class="mkdf-eh-custom-9290"
                                                            data-769-1024="0 17% 0 0"
                                                            data-681-768="0 4% 0 0">
                                                            <div class="mkdf-eh-item-inner">
                                                                <div
                                                                    class="mkdf-eh-item-content mkdf-eh-custom-9290">
                                                                    <div
                                                                        class="mkdf-section-title-holder"
                                                                        style="text-align: left; color:#000;">
                                                                        <div class="mkdf-st-inner">
                                                                            <span class="mkdf-st-tagline">Some things to note</span>
                                                                            <h3 class="mkdf-st-title">
                                                                                Get ready for a relaxing trip
                                                                            </h3>
                                                                            <p
                                                                                class="mkdf-st-text"
                                                                                style="
                                            font-size: 14px;
                                            line-height: 26px;
                                            text-indent: 20px;
                                            font-weight:400 !important;
                                            text-align: justify;
                                          ">
                                                                                <strong> 1.</strong> Most travelers will require a Visa to enter Vietnam and Visas on arrival are currently not available, so if you don't have a Vietnam Visa, you may be refused entry.

                                                                                Only 25 countries currently have a Visa exemption allowing them to enter Vietnam without a Visa. You can see the list of countries below:

                                                                                Brunei, Belarus, Chile, Cambodia, Denmark, Finland, France, Germany, Indonesia, Italy, Japan, Kyrgyzstan, Laos, Malaysia, Norway, Myanmar, Panama, Philippines, Russia, Singapore, South Korea, Spain, Sweden, Thailand, United Kingdom

                                                                                This information is subject to change, so PLEASE DOUBLE CHECK to see if you need a Vietnam Visa before booking your trip to Vietnam!

                                                                            </p>
                                                                            <p
                                                                                class="mkdf-st-text"
                                                                                style="
                                            font-size: 14px;
                                            line-height: 26px;
                                            text-indent: 20px;
                                            font-weight:400 !important;
                                            text-align: justify;
                                          ">
                                                                                <strong>2.</strong> If you booked one of our evening tours, and are going on a Mekong Delta or Cu Chi Tunnel Tour on the same date, you may not return in time for the evening tours. Mekong Delta and Cu Chi Tunnel Tours are notorious for returning late, and if you do not arrive in time for tour pickup and you are booked on one of our group tours, we won't be able to delay the tour start time out of consideration for our other guests and late cancellations will incur a cancellation fee as per the policy listed on our website.

                                                                            </p>
                                                                            <p
                                                                                class="mkdf-st-text"
                                                                                style="
                                            font-size: 14px;
                                            line-height: 26px;
                                            text-indent: 20px;
                                            font-weight:400 !important;
                                            text-align: justify;
                                          "><strong>3.</strong> If you are traveling with friends or family and booking seperately, PLEASE LET US KNOW! We often run multiple groups at the same time and if we do not know you are traveling together, you may end up in different groups and we won't be able to rearrange the groups on short notice.

                                                                            </p>
                                                                            <p
                                                                                class="mkdf-st-text"
                                                                                style="
                                            font-size: 14px;
                                            line-height: 26px;
                                            text-indent: 20px;
                                            font-weight:400 !important;
                                            text-align: justify;
                                          "><strong>4.</strong> All our tours are by default offered in ENGLISH however we also provide an option to book a Chinese (Mandarin) OR Korean translator on our evening tours (for an additional fee) if you book for a minimum of 4 pax or you book a Private tour (minimum 2 pax).

                                                                            </p>
                                                                            <p
                                                                                class="mkdf-st-text"
                                                                                style="
                                            font-size: 14px;
                                            line-height: 26px;
                                            text-indent: 20px;
                                            font-weight:400 !important;

                                          "><strong>5.</strong> If you are looking to book one of our Ho Chi Minh City tours within 12 hours of your desired tour date, we recommend calling us or sending us a WhatsApp/iMessage at 0933083727 or +84933083727 (if you are dialing from an international number), so that we can quickly confirm availability.

                                                                                For answers to most common questions, please read our FAQ.
                                                                            </p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mkdf-row-grid-section-wrapper">
                                <div class="mkdf-row-grid-section">
                                    <div
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1571323481341">
                                        <div
                                            class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- close div.content_inner -->
</div>
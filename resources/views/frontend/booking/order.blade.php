<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap CSS (nếu cần cho giao diện) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Bootstrap Slider CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css">


@if(\Session::has('error'))

<div class="alert alert-danger">{{ \Session::get('error') }}</div>

{{ \Session:: forget('error') }}

@endif

@if(\Session::has('success'))

<div class="alert alert-success">{{ \Session::get('success') }}</div>

{{ \Session:: forget('success') }}

@endif
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
        @php
        $bg=asset('frontend/wp-content/uploads/2019/10/p1-bckg-01.jpg');
        @endphp
        <div
            class="height-auto-md mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-preload-background mkdf-has-bg-image mkdf-bg-responsive-disabled"
            style="
          height: 452px;
          background-image: url({{$bg}});
        "
            data-height="452">
            <div class="mkdf-title-image">
                <img
                    itemprop="image"
                    src="{{$bg}}"
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

        <div class="content d-flex justify-content-center">
            <div class="content col-md-10">
                <div class=" py-4 ">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('checkout',['id'=>$tour->id])}}" method="POST" id="selectedDateForm">
                        @csrf
                        <div class="row g-4 d-flex justify-content-center">

                            <div class="col-md-6  d-flex">
                                <div class="container">
                                    <div class="row" style="height: 300px;">
                                        <iframe style="height: 300px;" title="The XO Foodie" class="embed-responsive-item d-block w-100" src="{{$tour->youtube}}"></iframe>

                                    </div>
                                    <div class="mkdf-post-content oder-content" id="oder-content">
                                        <div class="mkdf-post-text">
                                            <div class="mkdf-post-text-inner">
                                                <div class="mkdf-post-info-top">
                                                    <div itemprop="dateCreated" class="mkdf-post-info-date entry-date published updated">
                                                        <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar "></span> <a itemprop="url" href="../2019/10/index.html">
                                                            October 11, 2019 </a>
                                                        <meta itemprop="interactionCount" content="UserComments: 0">
                                                    </div>
                                                </div>
                                                <div class="mkdf-post-text-main">

                                                    <h2 itemprop="name" class="entry-title mkdf-post-title" style="font-size: clamp(14px, 2vw, 24px);">
                                                        {{$tour->title}} </h2>
                                                    <div class="wpb-content-wrapper">
                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                            <div class="wpb_wrapper">
                                                                                <p>{{ strip_tags($tour->description) }}

                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mkdf-post-info-bottom clearfix">
                                                    
                                                    <div class="mkdf-post-info-bottom-right">
                                                        <div class="mkdf-blog-share">
                                                            <div class="mkdf-social-share-holder mkdf-list">
                                                                <ul>
                                                                    
                                                                    <li class="mkdf-facebook-share">
                                                                    <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover"
									style="color: #878787;;font-size: 14px"
									href="https://www.instagram.com/sunshinetours.vn?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
									<span class="mkdf-social-icon-widget ion-social-instagram"></span> </a>
                                                                    </li>
                                                                    <li class="mkdf-twitter-share">
                                                                    <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover"
									style="color: #878787;;font-size: 14px" href="https://www.tiktok.com/@sunshinetours.vn"
									target="_blank">
									<span class="fa-brands fa-tiktok"></span> </a>
                                                                    </li>
                                                                    <li class="mkdf-tumblr-share">
                                                                    <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover"
									style="color: #878787;;font-size: 14px"
									href="https://www.facebook.com/SunshineTours.vn?mibextid=LQQJ4d" target="_blank">
									<span class="mkdf-social-icon-widget ion-social-facebook"></span> </a>
                                                                    </li>
                                                                    <li class="mkdf-pinterest-share">
                                                                    <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover"
									style="color: #878787;;font-size: 14px"
									href="https://www.youtube.com/@SunshineToursVietnam" target="_blank">
									<span class="mkdf-social-icon-widget ion-social-youtube"></span> </a>
                                                                    </li>
                                                                </ul>
                                                                <p class="mkdf-social-title">Share</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-show-more" id="showMoreBtn" onclick="toggleContent()" type="button">Show More</button>
                                    <div class="container" style="background:rgba(58, 58, 58, .05);">
                                        <div class="text-center">
                                            <p class="fw-bold fs-3 mt-3">Payment Details</p>
                                            <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                                        </div>

                                        <div class="mb-3">
                                            <p class="dis fw-bold mb-1">Email address</p> <input class="form-control m-0" value="{{ old('email') }}" type="email" name="email" placeholder="luke@skywalker.com" required>
                                        </div>
                                        <div class="mb-3">
                                            <p class="dis fw-bold mb-1">Full name</p> <input class="form-control m-0" value="{{ old('fullname') }}" type="text" name="fullname" placeholder="Enter your fullname" required>
                                        </div>
                                        <div class="mb-3">
                                            <p class="dis fw-bold mb-1"> Phone number</p> <input class="form-control m-0" value="{{ old('phone') }}" type="text" name="phone" placeholder="Enter your phone number" required>
                                        </div>
                                        <div class="mb-3">
                                            <p class="dis fw-bold mb-1"> Note</p> <input class="form-control m-0" {{ old('note') }} type="text" name="note" placeholder="Note">
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6  d-flex">
                                <div class="container">
                                    <div class="elegant-calencar d-md-flex">
                                        @php
                                        $bg01=asset('frontend/images/bg.jpg');
                                        @endphp
                                        <div class="wrap-header d-flex align-items-center img" style="background-image: url({{$bg01}});">
                                            <p id="reset">Today</p>
                                            <div id="header" class="p-0">
                                                <!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
                                                <div class="head-info">
                                                    <div class="head-month">December - 2024</div>
                                                    <div class="head-day">17</div>
                                                </div>
                                                <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
                                            </div>
                                        </div>
                                        <div class="calendar-wrap">
                                            <div class="w-100 button-wrap">
                                                <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
                                                <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
                                            </div>
                                            <table id="calendar">
                                                <thead>
                                                    <tr>
                                                        <th>Sun</th>
                                                        <th>Mon</th>
                                                        <th>Tue</th>
                                                        <th>Wed</th>
                                                        <th>Thu</th>
                                                        <th>Fri</th>
                                                        <th>Sat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td id="" class="">1</td>
                                                        <td id="" class="">2</td>
                                                        <td id="" class="">3</td>
                                                        <td id="" class="">4</td>
                                                        <td id="" class="">5</td>
                                                        <td id="" class="">6</td>
                                                        <td id="" class="">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td id="" class="">8</td>
                                                        <td id="" class="">9</td>
                                                        <td id="" class="">10</td>
                                                        <td id="" class="">11</td>
                                                        <td id="" class="">12</td>
                                                        <td id="" class="">13</td>
                                                        <td id="" class="">14</td>
                                                    </tr>
                                                    <tr>
                                                        <td id="" class="">15</td>
                                                        <td id="" class="">16</td>
                                                        <td id="today" class="">17</td>
                                                        <td id="" class="">18</td>
                                                        <td id="" class="">19</td>
                                                        <td id="" class="">20</td>
                                                        <td id="" class="">21</td>
                                                    </tr>
                                                    <tr>
                                                        <td id="" class="">22</td>
                                                        <td id="" class="">23</td>
                                                        <td id="" class="">24</td>
                                                        <td id="" class="">25</td>
                                                        <td id="" class="">26</td>
                                                        <td id="" class="">27</td>
                                                        <td id="" class="">28</td>
                                                    </tr>
                                                    <tr>
                                                        <td id="" class="">29</td>
                                                        <td id="" class="">30</td>
                                                        <td id="" class="">31</td>
                                                        <td id="disabled" class=""></td>
                                                        <td id="disabled" class=""></td>
                                                        <td id="disabled" class=""></td>
                                                        <td id="disabled" class=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="disabled" class=""></td>
                                                        <td id="disabled" class=""></td>
                                                        <td id="disabled" class=""></td>
                                                        <td id="disabled" class=""></td>
                                                        <td id="disabled" class=""></td>
                                                        <td id="disabled" class=""></td>
                                                        <td id="disabled" class=""></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <input type="hidden" name="order_date" value="{{old('order_date')}}" id="dateInput" required>
                                    <div class="container p-3 rounded-bottom-3" style="background:rgba(58, 58, 58, .05);">



                                        <div id="input-group-container" class="container mt-3 selectGuests">
                                            <h4><strong class="fs-6">Number of guests</strong></h4>
                                            <hr>
                                            <!-- Nút thêm input group -->
                                            <button id="add-button" class="btn btn-primary mb-3 fs-3" type="button" style="    width: 100%; background: transparent;border: 1px solid gray; color:#606470"><i class="fa-solid fa-plus"></i></button>
                                        </div>



                                        <div class="container mt-3">
                                            <h4><strong class="fs-6">Select Time</strong></h4>
                                            <hr>
                                            <div class="btn-group row" style="width:100% ; " role="group" aria-label="Thời gian">
                                                <label class="col-md-3 fs-6" style="font-weight:400">
                                                    <input type="radio" name="time" value="10:00 AM" {{ old('time') == '10:00 AM' ? 'checked' : '' }} class="btn-time"> 10:00 AM
                                                </label>
                                                <label class="col-md-3 fs-6" style="font-weight:400">
                                                    <input type="radio" name="time" value="12:00 PM" {{ old('time') == '12:00 PM' ? 'checked' : '' }} class="btn-time"> 12:00 PM
                                                </label>
                                                <label class="col-md-3 fs-6" style="font-weight:400">
                                                    <input type="radio" name="time" value="03:00 PM" {{ old('time') == '03:00 PM' ? 'checked' : '' }} class="btn-time"> 03:00 PM
                                                </label>
                                                <label class="col-md-3 fs-6" style="font-weight:400">
                                                    <input type="radio" name="time" value="06:00 PM" {{ old('time') == '06:00 PM' ? 'checked' : '' }} class="btn-time"> 06:00 PM
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        
                                        <div class="my-3">
                                            <p class="dis fw-bold mb-2 fs-6">Amount you can deposit</p> <input id="ex6" type="text" data-slider-min="20" data-slider-max="100" data-slider-step="1" data-slider-value="20" value="20" />
                                        </div>
                                        <span id="ex6CurrentSliderValLabel" class="fs-6">Down payment: $<span id="ex6SliderVal">0</span></span>
                                    </div>
                                </div>





                            </div>

                        </div>
                        <div class="mr-3 ml-3 row justify-content-center align-items-center mt-1 p-5" style="background:rgba(58, 58, 58, .05)"> <!-- style để đặt chiều cao -->
                            <div class="d-flex flex-column dis col-lg-6">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fs-6">Subtotal</p>
                                    <p class="fs-6" id="total-cost"><span class="fas fa-dollar-sign fs-6"></span>0.00</p>
                                </div>
                                
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fw-bold fs-6">Total</p>
                                    <p class="fw-bold fs-6" id="total"><span class="fas fa-dollar-sign"></span>0.00</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fw-bold fs-6">Down payment</p>
                                    <p class="fw-bold fs-6" id="downPayment"><span class="fas fa-dollar-sign"></span>0.00</p>
                                </div>
                                <input type="hidden" id="total_money" name="total_money" required>
                                <input type="hidden" id="down_payment" name="down_payment" required>
                                <!-- <a class="btn  m-3 d-flex align-items-center paypal-button"
                                    href="{{ route('processPaypal', ['amount' => '__downPayment__']) }}"
                                    id="paypal-link">
                                    <img src="{{ asset('frontend/img/paypal_logo.png') }}" alt="PayPal Icon" class="icon">
                                    <img src="{{ asset('frontend/img/backgroundPaypal.png') }}" alt="PayPal Icon" class="text">

                                </a> -->

                                <button class="btn  m-3 d-flex align-items-center paypal-button"
                                   >
                                    <img src="{{ asset('frontend/img/paypal_logo.png') }}" alt="PayPal Icon" class="icon">
                                    <img src="{{ asset('frontend/img/backgroundPaypal.png') }}" alt="PayPal Icon" class="text">

                                </button>
                                <style>
                                    .paypal-button {
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        border: 1px solid #000;
                                        border-radius: 5px;
                                        padding: 10px 20px;
                                        transition: background-color 0.3s;
                                    }

                                    .paypal-button:hover {
                                        background-color: white;
                                    }

                                    .paypal-button img {
                                        height: 30px;
                                        margin-right: 8px;
                                    }

                                    .paypal-button .text {
                                        width: 80px;
                                        margin-right: 8px;
                                    }

                                    .paypal-button span {
                                        font-size: 16px;
                                        color: #0070ba;
                                        font-weight: bold;
                                    }
                                </style>


                            </div>
                        </div>
                    </form>
                </div>
                <div class="mkdf-row-grid-section-wrapper">
                    <div class="mkdf-section-title-holder" style="text-align: left; color:#000;">
                        <div class="mkdf-st-inner">
                            <span class="mkdf-st-tagline">Some things to note</span>
                            <h3 class="mkdf-st-title">
                                Get ready for a relaxing trip
                            </h3>
                            <p class="mkdf-st-text" style="
                                            font-size: 14px;
                                            line-height: 26px;
                                            text-indent: 20px;
                                            font-weight:400 !important;
                                            text-align: justify;
                                          ">
                                <strong class="fs-6"> 1.</strong> Most travelers will require a Visa to enter Vietnam and Visas on arrival are currently not available, so if you don't have a Vietnam Visa, you may be refused entry.

                                Only 25 countries currently have a Visa exemption allowing them to enter Vietnam without a Visa. You can see the list of countries below:

                                Brunei, Belarus, Chile, Cambodia, Denmark, Finland, France, Germany, Indonesia, Italy, Japan, Kyrgyzstan, Laos, Malaysia, Norway, Myanmar, Panama, Philippines, Russia, Singapore, South Korea, Spain, Sweden, Thailand, United Kingdom

                                This information is subject to change, so PLEASE DOUBLE CHECK to see if you need a Vietnam Visa before booking your trip to Vietnam!

                            </p>
                            <p class="mkdf-st-text" style="
                                            font-size: 14px;
                                            line-height: 26px;
                                            text-indent: 20px;
                                            font-weight:400 !important;
                                            text-align: justify;
                                          ">
                                <strong class="fs-6">2.</strong> If you booked one of our evening tours, and are going on a Mekong Delta or Cu Chi Tunnel Tour on the same date, you may not return in time for the evening tours. Mekong Delta and Cu Chi Tunnel Tours are notorious for returning late, and if you do not arrive in time for tour pickup and you are booked on one of our group tours, we won't be able to delay the tour start time out of consideration for our other guests and late cancellations will incur a cancellation fee as per the policy listed on our website.

                            </p>
                            <p class="mkdf-st-text" style="
                                            font-size: 14px;
                                            line-height: 26px;
                                            text-indent: 20px;
                                            font-weight:400 !important;
                                            text-align: justify;
                                          "><strong class="fs-6">3.</strong> If you are traveling with friends or family and booking seperately, PLEASE LET US KNOW! We often run multiple groups at the same time and if we do not know you are traveling together, you may end up in different groups and we won't be able to rearrange the groups on short notice.

                            </p>
                            <p class="mkdf-st-text" style="
                                            font-size: 14px;
                                            line-height: 26px;
                                            text-indent: 20px;
                                            font-weight:400 !important;
                                            text-align: justify;
                                          "><strong class="fs-6">4.</strong> All our tours are by default offered in ENGLISH however we also provide an option to book a Chinese (Mandarin) OR Korean translator on our evening tours (for an additional fee) if you book for a minimum of 4 pax or you book a Private tour (minimum 2 pax).

                            </p>
                            <p class="mkdf-st-text" style="
                                            font-size: 14px;
                                            line-height: 26px;
                                            text-indent: 20px;
                                            font-weight:400 !important;

                                          "><strong class="fs-6">5.</strong> If you are looking to book one of our Ho Chi Minh City tours within 12 hours of your desired tour date, we recommend calling us or sending us a WhatsApp/iMessage at 0933083727 or +84933083727 (if you are dialing from an international number), so that we can quickly confirm availability.

                                For answers to most common questions, please read our FAQ.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- close div.content_inner -->
</div>
<!-- jQuery -->
 
<!-- Thêm jQuery (nếu chưa có) -->
<script >
    $(document).ready(function($) {
    let totalCost = 0;
    let discount = 0;
    let vat = 0;
    let downPayment = 0;
    // Thêm sự kiện xóa cho nhóm input ban đầu
    $('.remove-button').on('click', function() {
        $(this).closest('.input-group').remove();
        updateTotalCost(); // Cập nhật lại tổng chi phí khi một nhóm bị xóa
    });

    // Xử lý thêm nhóm input mới khi nhấn nút
    $('#add-button').on('click', function() {
        const container = $('#input-group-container');
        const tourPrice = parseFloat("{{$tour->price}}");

        // Tạo nhóm input mới
        const newInputGroup = $(`
        <div class="input-guest input-group mb-3">
            <div class="input-group-prepend" style="width:20%">
                <select name='numberOfPeople[]' class="numberOfPeople fs-6 custom-select " placeholder="luke@skywalker.com">
                  
                </select>
            </div>
            <select name='guest-type[]' class="guest-type custom-select text-center fs-6"  style="width:55%">
                <option value="2" selected>Guests (8 years and older)</option>
                <option value="1">Guests (4 to 7 years old)</option>
                <option value="0">Guests (3 years and under)</option>
            </select>
            <div class="input-group-append" style="width:15%">
                <span class="input-group-text notranslate fs-6">$0.00</span>
            </div>
            <div class="input-group-append" style="width:10%">
                <button class="btn ml-2 remove-button" type="button"><i class="fa-solid fa-trash"></i></button>
            </div>
        </div>
    `);

        // Chèn nhóm mới vào container mà không thay đổi #input-group-container
        container.find('#add-button').before(newInputGroup);

        // Tạo options cho select mới
        const $newSelectElement = newInputGroup.find('.numberOfPeople');
        for (let i = 1; i <= 100; i++) {
            $newSelectElement.append(`<option value="${i}">${i}</option>`);
        }

        // Thêm sự kiện xóa cho nút "Remove" trong nhóm input mới
        newInputGroup.find('.remove-button').on('click', function() {
            newInputGroup.remove();
            updateTotalCost(); // Cập nhật lại tổng chi phí khi một nhóm bị xóa
        });

        // Thêm sự kiện tính toán chi phí khi chọn số lượng người hoặc loại khách
        // Gán sự kiện cho các select mới
        newInputGroup.find('.guest-type').on('change', function() {
            updateTotalCost(); // Cập nhật lại tổng chi phí mỗi khi có sự thay đổi
            updatePriceSpan(newInputGroup); // Cập nhật giá trị trong span
        });
        newInputGroup.find('.numberOfPeople').on('change', function() {
            updateTotalCost(); // Cập nhật lại tổng chi phí mỗi khi có sự thay đổi
            updatePriceSpan(newInputGroup); // Cập nhật giá trị trong span
        });

        // Gọi trực tiếp hàm cập nhật lại giá trị trong span ngay sau khi thêm nhóm
        updatePriceSpan(newInputGroup);
    });

    // Thêm sự kiện cho checkbox video và car-bus
    $('#video').on('change', function() {
        updateTotalCost(); // Cập nhật lại tổng chi phí khi checkbox thay đổi
    });

    $('#car-bus').on('change', function() {
        updateTotalCost(); // Cập nhật lại tổng chi phí khi checkbox thay đổi
    });
    $('#checkvipcheckvip').on('change', function() {
        updateTotalCost(); // Cập nhật lại tổng chi phí khi checkbox bị thay đổi
    });

    function updateSliderVal() {
        const sliderValue = $("#ex6").val(); // Lấy giá trị hiện tại của slider
        const result = (totalCost / 100 * sliderValue).toFixed(2); // Tính toán giá trị
        $("#ex6SliderVal").text(result); // Cập nhật vào giao diện
        $('#downPayment').text('$' + result);
        $('#downPayment1').text('$' + result);
        $('#down_payment').val(result);
    }
    // Hàm tính toán tổng chi phí
    function updateTotalCost() {
        totalCost = 0;
        const tourPrice = parseFloat("{{$tour->price}}");
        // Lặp qua tất cả các nhóm input và tính tổng chi phí
        $('.input-guest').each(function() {
            const numberOfPeople = $(this).find('.numberOfPeople').val(); // Lấy số người
            const pricePerPerson = $(this).find('.guest-type').val(); // Lấy giá cho loại khách

            // Kiểm tra nếu giá trị hợp lệ
            if (numberOfPeople && pricePerPerson && !isNaN(numberOfPeople) && !isNaN(pricePerPerson)) {
                const totalPrice = canculatorTotalPrice(numberOfPeople, pricePerPerson, tourPrice);
                $(this).find('.input-group-text').text('$' + totalPrice.toFixed(2));
                totalCost += totalPrice;
            } else {
                $(this).find('.input-group-text').text('$00.00'); // Đặt giá trị mặc định nếu không hợp lệ
            }
        });

        // Thêm chi phí cho các checkbox nếu được chọn
        if ($('#video').prop('checked')) {
            totalCost += 50; // Thêm $50 nếu video được chọn
        }
        if ($('#car-bus').prop('checked')) {
            totalCost += 60; // Thêm $60 nếu car/bus được chọn
        }
        if ($('#checkvipcheckvip').prop('checked')) {
            totalCost += 30; // Thêm $60 nếu car/bus được chọn
        }


        // Cập nhật tổng chi phí vào thẻ
        $('#total-cost').text('$' + totalCost.toFixed(2));

        // Tính toán discount và vat (giả sử bạn đã có giá trị này từ các input hoặc logic khác)
        // Ví dụ: discount = 20; vat = totalCost * 0.1; (10% VAT)

        // Cập nhật giá trị tổng (cộng tổng chi phí, giảm giá và VAT)
        $('#total').text('$' + (totalCost + discount + vat).toFixed(2));
        const sliderValue = $("#ex6").val(); // Lấy giá trị hiện tại của slider
        const result = (totalCost / 100 * sliderValue).toFixed(2);
        $('#downPayment').text('$' + result);
        $('#downPayment1').text('$' + result);
        $('#total_money').val(totalCost);
        $('#down_payment').val(result);
        var newHref = "{{ route('processPaypal', ['amount' => '__downPayment__']) }}".replace('__downPayment__', result);
        $('#paypal-link').attr('href', newHref); // Cập nhật href của thẻ <a>
        updateSliderVal();
    }

    function canculatorTotalPrice(numberOfPeople, pricePerPerson, tourPrice) {
        if (pricePerPerson == 2) {
            return numberOfPeople * parseFloat(tourPrice);
        } else if (pricePerPerson == 1) {
            return numberOfPeople * parseFloat(tourPrice * 0.6);
        } else {
            return 0;
        }
    }
    // Hàm cập nhật giá trị trong thẻ span khi thay đổi giá trị select
    function updatePriceSpan(inputGroup) {
        const numberOfPeople = inputGroup.find('.numberOfPeople').val(); // Lấy số người
        const pricePerPerson = inputGroup.find('.guest-type').val(); // Lấy giá cho loại khách
        const tourPrice = parseFloat("{{$tour->price}}");
        console.log(numberOfPeople * parseFloat(tourPrice));

        // Kiểm tra nếu giá trị hợp lệ
        if (numberOfPeople && pricePerPerson && !isNaN(numberOfPeople) && !isNaN(pricePerPerson)) {
            const totalPrice = canculatorTotalPrice(numberOfPeople, pricePerPerson, tourPrice);
            // Tính toán tổng chi phí
            inputGroup.find('.input-group-text').text('$' + totalPrice.toFixed(2)); // Cập nhật giá trị trong span
        } else {
            inputGroup.find('.input-group-text').text('$00.00'); // Đặt giá trị mặc định nếu không hợp lệ
        }
    }

    function create() {
        const container = $('#input-group-container');
        const tourPrice = parseFloat("{{$tour->price}}");

        // Tạo nhóm input mới
        const newInputGroup = $(`
        <div class="input-guest input-group mb-3">
            <div class="input-group-prepend" style="width:20%">
                <select name='numberOfPeople[]' class="numberOfPeople fs-6 custom-select">
                  
                </select>
            </div>
            <select  name='guest-type[]' class="guest-type custom-select text-center fs-6"  style="width:55%">
                <option value="2" selected>Guests (8 years and older)</option>
                <option value="1">Guests (4 to 7 years old)</option>
                <option value="0">Guests (3 years and under)</option>
            </select>
            <div class="input-group-append" style="width:15%">
                <span class="input-group-text notranslate fs-6">$0.00</span>
            </div>
            <div class="input-group-append" style="width:10%">
                <button class="btn ml-2 remove-button"><i class="fa-solid fa-trash"></i></button>
            </div>
        </div>
    `);

        // Chèn nhóm mới vào container mà không thay đổi #input-group-container
        container.find('#add-button').before(newInputGroup);

        // Tạo options cho select mới
        const $newSelectElement = newInputGroup.find('.numberOfPeople');
        for (let i = 1; i <= 100; i++) {
            $newSelectElement.append(`<option value="${i}">${i}</option>`);
        }

        // Thêm sự kiện xóa cho nút "Remove" trong nhóm input mới
        newInputGroup.find('.remove-button').on('click', function() {
            newInputGroup.remove();
            updateTotalCost(); // Cập nhật lại tổng chi phí khi một nhóm bị xóa
        });

        // Thêm sự kiện tính toán chi phí khi chọn số lượng người hoặc loại khách
        // Gán sự kiện cho các select mới
        newInputGroup.find('.guest-type').on('change', function() {
            updateTotalCost(); // Cập nhật lại tổng chi phí mỗi khi có sự thay đổi
            updatePriceSpan(newInputGroup); // Cập nhật giá trị trong span
        });
        newInputGroup.find('.numberOfPeople').on('change', function() {
            updateTotalCost(); // Cập nhật lại tổng chi phí mỗi khi có sự thay đổi
            updatePriceSpan(newInputGroup); // Cập nhật giá trị trong span
        });

        // Gọi trực tiếp hàm cập nhật lại giá trị trong span ngay sau khi thêm nhóm
        updatePriceSpan(newInputGroup);

    }
    create();
    updateTotalCost();
    
    // With JQuery
    $("#ex6").slider({
        formatter: function(value) {
            return 'Percent: ' + value + "%";
        }
    });
    $("#ex6").on("slide", function(slideEvt) {
        updateSliderVal();
    });


});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
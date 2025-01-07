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

<div class="mkdf-content" style="margin-top: -150px;    background-color: #f1f1f1;">
    <div class="mkdf-content-inner">
        @php
        $shop=asset('frontend/wp-content/uploads/2019/10/shop-title-img-01.jpg')
        @endphp
        <div
            class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-preload-background mkdf-has-bg-image mkdf-bg-responsive-disabled"
            style="
                height: 452px;
                background-image: url({{$shop}});
              "
            data-height="452">
            <div class="mkdf-title-image">
                <img
                    itemprop="image"
                    src="{{asset('frontend/wp-content/uploads/2019/10/shop-title-img-01.jpg')}}"
                    alt="s" />
            </div>
            <div
                class="mkdf-title-wrapper"
                style="height: 302px; padding-top: 150px">
                <div class="mkdf-title-inner">
                    <div class="mkdf-grid">
                        <h2 class="mkdf-page-title entry-title">Tour Detail </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="mkdf-container">
            <div class="main main-dt" style=" margin-top:0 !important">
                <div class="container">
                    <div class="main-cn detail-page bg-white clearfix">

                        <!-- Breakcrumb -->
                        <section class="breakcrumb-sc">
                            <ul class="breadcrumb arrow">
                                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li><a href="hotel.html" title="">Booking</a></li>
                                <li><a href="{{route('tour_detail',['id'=>$tour->id])}}" title="">Tour Detail </a></li>
                              
                            </ul>
                            <div class="support float-right">
                                <small>Got a question?</small> +84 76 5622268
                            </div>
                        </section>
                        <!-- End Breakcrumb -->

                        <!-- Header Detail -->
                        <section class="head-detail">
                            <div class="head-dt-cn">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h1>{{$tour->title}}</h1>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <p class="price-book">
                                            From-<span>${{$tour->price}}</span>/tour
                                            <a href="{{route('order',['id'=>$tour->id])}}" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book Now</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Header Detail -->

                        <!-- Detail Slide -->
                        <section class="detail-slider">
                            
                            <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; background: #000;">
                                <iframe width="560" height="315" src="{{$tour->youtube}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                        </section>
                        <!-- End Detail Slide -->

                        <!-- Tour Overview -->
                        <section class="tour-overview detail-cn" id="tour-overview">
                            <div class="row">
                                <div class="col-lg-3 detail-sidebar">
                                    <div class="scroll-heading" style="top: 82px; position: static;">
                                        <h2>overview</h2>
                                        <hr class="hr">
                                        
                                    </div>
                                </div>

                                <!-- Tour Overview Content -->
                                <div class="col-lg-9 tour-overview-cn">

                                    <!-- Description -->
                                    <div class="tour-description">
                                        <h2 class="title-detail">
                                            Description
                                        </h2>
                                        <div class="tour-detail-text">
                                            <p>
                                            {!!$tour->description!!}    
                                        </p>
                                        </div>
                                    </div>
                                    <!-- End Description -->

                                   
                                </div>
                                <!-- End Tour Overview Content -->

                            </div>
                        </section>
                        <!-- End Tour Overview -->

                        

                        <section class="detail-footer tour-detail-footer detail-cn">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9 detail-footer-cn text-right">
                                    <p class="price-book">
                                        From-<span>${{$tour->price}}</span>/tour
                                        <a href="{{route('order',['id'=>$tour->id])}}" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book Now</a>
                                    </p>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- close div.content_inner -->
</div>
/**
 * Created by Woody on 4/26/2015.
 */

var $ = jQuery.noConflict();

/**
 * Library: Breaking News
 */
!function(l){$.fn.BreakingNews=function(l){var t={background:"#FFF",title:"NEWS",titlecolor:"#FFF",titlebgcolor:"#5aa628",linkcolor:"#333",linkhovercolor:"#5aa628",fonttextsize:16,isbold:!1,border:"none",width:"100%",autoplay:!0,timer:3e3,modulid:"brekingnews",effect:"fade"},l=$.extend(t,l);return this.each(function(){function t(t){"next"==t?$(l.modulid+" ul li").length>o?o++:o=1:o-2==-1?o=$(l.modulid+" ul li").length:o-=1,"fade"==l.effect?($(l.modulid+" ul li").css({display:"none"}),$(l.modulid+" ul li").eq(parseInt(o-1)).fadeIn()):$(l.modulid+" ul").animate({marginTop:-($(l.modulid+" ul li").height()+20)*(o-1)})}l.modulid="#"+$(this).attr("id");var i=l.modulid,o=1;1==l.isbold?fontw="bold":fontw="normal",$(l.modulid+" ul li").css("slide"==l.effect?{display:"block"}:{display:"none"}),$(l.modulid+" .bn-title").html(l.title),$(l.modulid).css({width:l.width,background:l.background,border:l.border,"font-size":l.fonttextsize}),$(l.modulid+" ul").css({left:$(l.modulid+" .bn-title").width()+40}),$(l.modulid+" .bn-title").css({background:l.titlebgcolor,color:l.titlecolor,"font-weight":fontw}),$(l.modulid+" ul li a").css({color:l.linkcolor,"font-weight":fontw,height:parseInt(l.fonttextsize)+6}),$(l.modulid+" ul li").eq(parseInt(o-1)).css({display:"block"}),$(l.modulid+" ul li a").hover(function(){$(this).css({color:l.linkhovercolor})},function(){$(this).css({color:l.linkcolor})}),$(l.modulid+" .bn-arrows span").click(function(l){t("bn-arrows-left"==$(this).attr("class")?"prev":"next")}),1==l.autoplay?(i=setInterval(function(){t("next")},l.timer),$(l.modulid).hover(function(){clearInterval(i)},function(){i=setInterval(function(){t("next")},l.timer)})):clearInterval(i),$(window).resize(function(t){$(l.modulid).width()<360?($(l.modulid+" .bn-title").html("&nbsp;"),$(l.modulid+" .bn-title").css({width:"4px",padding:"10px 0px"}),$(l.modulid+" ul").css({left:4})):($(l.modulid+" .bn-title").html(l.title),$(l.modulid+" .bn-title").css({width:"auto",padding:"10px 20px"}),$(l.modulid+" ul").css({left:$(l.modulid+" .bn-title").width()+40}))})})}}(jQuery);


/**
 * Library: Smooth Scroll
 */
/* jquery.simplr.smoothscroll version 1.1 copyright (c) 2012 https://github.com/simov/simplr-smoothscroll licensed under MIT */
// !function(e){"use strict";e.srSmoothscroll=function(t){var n,o=e.extend({step:55,speed:400,ease:"swing",target:e("body"),container:e(window)},t||{}),r=o.container,i=0,s=o.step,a=r.height(),c=!1;n="body"==o.target.selector?-1!==navigator.userAgent.indexOf("AppleWebKit")?o.target:e("html"):r,o.target.mousewheel(function(e,t){return c=!0,i=0>t?i+a>=o.target.outerHeight(!0)?i:i+=s:0>=i?0:i-=s,n.stop().animate({scrollTop:i},o.speed,o.ease,function(){c=!1}),!1}),r.on("resize",function(){a=r.height()}).on("scroll",function(){c||(i=r.scrollTop())})}}(jQuery);


/**
 * Library: scrollTo
 * source: http://lions-mark.com/jquery/scrollTo/
 */
$.fn.scrollTo = function( target, options, callback ){
    if(typeof options == 'function' && arguments.length == 2){ callback = options; options = target; }
    var settings = $.extend({
        scrollTarget  : target,
        offsetTop     : 50,
        duration      : 500,
        easing        : 'swing'
    }, options);
    return this.each(function(){
        var scrollPane = $(this);
        var scrollTarget = (typeof settings.scrollTarget == "number") ? settings.scrollTarget : $(settings.scrollTarget);
        var scrollY = (typeof scrollTarget == "number") ? scrollTarget : scrollTarget.offset().top + scrollPane.scrollTop() - parseInt(settings.offsetTop);
        scrollPane.animate({scrollTop : scrollY }, parseInt(settings.duration), settings.easing, function(){
            if (typeof callback == 'function') { callback.call(this); }
        });
    });
};




/**
 * My scripts
 */

/**
 * On document ready
 */


function popupAlert(title, content, dismiss, close) {
    if ( title==null || title=="" || title===false ) {
        $('#alert-modal > .modal-title').addClass("hide").text("");
    }
    else {
        if ( true===dismiss )
            $('#alert-modal > .modal-title').removeClass("hide").text("Note");
        else
            $('#alert-modal > .modal-title').removeClass("hide").text(title);
    }

    if ( !content || content==null || content=="" ) {
        $('#alert-modal > p.modal-content').addClass("hide").text("");
    }
    else {
        $('#alert-modal > p.modal-content').removeClass("hide").html(content);
    }

    if ( dismiss==null || dismiss=="" || dismiss===false ) {
        $('#alert-modal > p.modal-dismiss').addClass("hide");
        $('#alert-modal > p.modal-dismiss > a').text("");
    }
    else {
        $('#alert-modal > p.modal-dismiss').removeClass("hide");
        if ( true===dismiss )
            $('#alert-modal > p.modal-dismiss > a').text("Dismiss");
        else
            $('#alert-modal > p.modal-dismiss > a').text(dismiss);
    }

    $.magnificPopup.open({
        items: { src: '#alert-modal' },
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true,
        callbacks: {
            open: function() {

            },
            close: function() {
                
            }
        }
    }, 0);
}


var isInViewport = function (elem) {
    var distance = elem.getBoundingClientRect();
    return (
        distance.top >= 0 &&
        distance.left >= 0 &&
        distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        distance.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};


function scrollToTours() {
    $("html, body").animate({ scrollTop: $('.homepage-tours-row.main-tours').offset().top }, 1000);
}


$(window).load(function () {
    var body = $("body");

    if ( body.hasClass("home-page") ) {

        var hash = location.hash.replace('#','');
        if ( hash == 'our-tours' ) {
            scrollToTours();
        }

        var a1 = $('#main-nav > .menu-item-12 > a');
        a1.attr("href","#our-tours");
        a1.bind('click', function () {
            //$("html, body").animate({ scrollTop: $('.homepage-tours-row.main-tours').offset().top }, 1000);
            scrollToTours();
        });

        var a2 = $('.dl-menu > .menu-item-12 > a');
        a2.attr("href","#our-tours");
        a2.bind('click', function () {
            //$("html, body").animate({ scrollTop: $('.homepage-tours-row.main-tours').offset().top }, 1000);
            scrollToTours();
        });

        var a3 = $('#main-nav > .menu-item-12 > .sub-nav > ul > .menu-item-1137 > a');
        a3.attr("href","#our-tours");
        a3.bind('click', function () {
            //$("html, body").animate({ scrollTop: $('.homepage-tours-row.main-tours').offset().top }, 1000);
            scrollToTours();
        });

        var a4 = $('.dl-menu > .menu-item-12 > .sub-nav > ul > .menu-item-1137 > a');
        a4.attr("href","#our-tours");
        a4.bind('click', function () {
            //$("html, body").animate({ scrollTop: $('.homepage-tours-row.main-tours').offset().top }, 1000);
            scrollToTours();
        });

        console.log('Loaded scripts for home-page.');

    }//.home-page

    if ( body.hasClass("has-sticky-element") ) {
        console.log('Loaded scripts for sticky element.');

        // Cache selectors outside callback for performance.
        var $window = $(window),
            $stickyEl = $('.tour-summary-box'),
            elTop = $stickyEl.offset().top,
            elHeight = $stickyEl.height(),
            $sharethis = $('.tour-addthis-block');

        //var $b = $stickyEl.offset().top - $stickyEl.parent().offset().top; console.log($b);
        //console.log(elTop);
        //console.log(elHeight);
        //console.log($sharethis.offset().top);

        $window.scroll(function() {
            var $a = $stickyEl.offset().top - $stickyEl.parent().offset().top;
            console.log($a);
            if ( $window.scrollTop() > elTop ) {
                if ( ($window.scrollTop() + elHeight + 16 + 24 + 24) < $sharethis.offset().top ) {
                    $stickyEl.css("position","fixed").css("top","16px");
                }
                else {
                    $stickyEl.css("position","absolute").css("top",$a+"px");
                }
            }
            else {
                $stickyEl.css("position","relative").css("top","0");
            }
        });

    }//.has-sticky-element

});


$(document).ready(function( $ ) {

    // Common vars
    var body = $("body");
    var content = $("#content");

    $( window ).resize(function() {
        if (typeof scaleStaticBanner === "function") {
            scaleStaticBanner($);
        }
    });


    // SlickNav
    {
        $('#qv-mobile-menu').slicknav({
            duplicate: false,
            allowParentLinks: true,
            nestedParentLinks: false,
            prependTo: '#page'
        });
    }


    // top hidden content for SEO
    $('#hdn-content-top-toggle').on('click', function () {
        $('#hdn-content-top').toggleClass("edih");
    });

    // simplr smoothscroll
    // $(function () {
    //     var platform = navigator.platform.toLowerCase();
    //     if (platform.indexOf('win') == 0 || platform.indexOf('linux') == 0) {
    //         if ($.browser.webkit) {
    //             $.srSmoothscroll({
    //                 // defaults
    //                 step: 100,
    //                 speed: 200,
    //                 ease: 'swing',
    //                 target: $('body'),
    //                 container: $(window)
    //             });
    //         }
    //     }
    // });


    // for popupAlert dismiss
    $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });



    /* Scripts for pages */
    if ( body.hasClass("home-page") ) {

        var hash = location.hash.replace('#','');
        if ( hash == 'our-tours' ) {
            scrollToTours();
        }



        var a1 = $('#main-nav > .menu-item-12 > a');
        a1.attr("href","#our-tours");
        a1.bind('click', function () {
            //$("html, body").animate({ scrollTop: $('.homepage-tours-row.main-tours').offset().top }, 1000);
            scrollToTours();
        });

        /*
        var a2;
        setTimeout(function () {
            a2 = $('.dl-menu > .menu-item-12 > a');
            a2.attr("href","#our-tours");

            a2.bind('click', function () {
                //$("html, body").animate({ scrollTop: $('.homepage-tours-row.main-tours').offset().top }, 1000);
                scrollToTours();
            });
        }, 500);
        */

        console.log('Loaded scripts for home-page.');

    }//.home-page

    if ( body.hasClass("page_faq") ) {

        console.log('Loaded scripts for page_faq.');

        $('.wpb_accordion_header').bind('click', function () {
            var elem = $(this);
            var vElem = this;
            setTimeout(function () {
                if (!isInViewport(vElem)) {
                    $('html, body').animate({
                        scrollTop: elem.offset().top - 50
                    }, 200);
                }
            }, 400);
        });

    }//.faq-page

    // if ( body.hasClass("page_faq") ) {
    //
    //     console.log('Loaded scripts for page_faq.');
    //
    //     $('a[data-vc-accordion]').bind('click', function () {
    //         var element = $(this);
    //         setTimeout(function () {
    //             history.pushState("", document.title, window.location.pathname
    //                 + window.location.search);
    //         }, 0);
    //     });
    //
    // }//.faq-page

    if ( body.hasClass("testi-page") ) {
    //if ( false ) {

        console.log('Loaded scripts for testi-page.');

        var container = document.querySelector('#ttm-masonry');
        var masonry = new Masonry(container, {
            //columnWidth: '.grid-sizer',
            columnWidth: 0,
            itemSelector: ".ttm-item",
            //percentPosition: false,
            percentPosition: true,
            "gutter": ".gutter-sizer"
        });

        //masonry.layout();

    }//.testi-page


    if ( body.hasClass("has_popup_video") || body.hasClass("has-popup-video") ) {

        $(document).ready(function() {
            $('.popup-video').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedBgPos: true,
                fixedContentPos: true
            });
        });

    }//.gallery-page + home-page

    if ( body.hasClass("video-page") ) {
        $('.menu-item-34').addClass('current_page_item act');
    }//.video-page

    if ( body.hasClass("photos-page") ) {

        $('.menu-item-34').addClass('current_page_item act');

        $(document).ready(function() {
            $('.gallery-photos-block').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function(item) {
                        //return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                        return item.el.attr('title');
                    }
                }
            });
        });

        }//.photos-page



});




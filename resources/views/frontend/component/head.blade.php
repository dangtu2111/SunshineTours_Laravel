<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
<meta name="robots" content="max-image-preview:large">
<meta property="og:url" content="{{route('index')}}">
<meta property="og:type" content="website">
<meta property="og:title" content="SunShine Tour">
<meta property="og:description" content="Travel Blog">
<meta property="og:image" content="{{asset('frontend/img/logo/logo04.png')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Sunshine Tours</title>


<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

<link rel="stylesheet" id="wp-block-library-css" href="{{asset('frontend/wp-includes/css/dist/block-library/style.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="global-styles-inline-css" href="{{asset('frontend/css/global-styles-inline.css')}}" type="text/css">
<link rel="stylesheet" id="contact-form-7-css" href="{{asset('frontend/wp-content/plugins/contact-form-7/includes/css/styles6dcf.css?ver=5.9.2')}}" type="text/css" media="all">
<link rel="stylesheet" id="rabbit_css-css" href="{{asset('qodethemes/_toolbar/assets/css/rbt-modules75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="ppress-frontend-css" href="{{asset('frontend/wp-content/plugins/wp-user-avatar/assets/css/frontend.min6e6b.css?ver=4.15.3')}}" type="text/css" media="all">
<link rel="stylesheet" id="ppress-flatpickr-css" href="{{asset('frontend/wp-content/plugins/wp-user-avatar/assets/flatpickr/flatpickr.min6e6b.css?ver=4.15.3')}}" type="text/css" media="all">
<link rel="stylesheet" id="ppress-select2-css" href="{{asset('frontend/wp-content/plugins/wp-user-avatar/assets/select2/select2.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="qi-addons-for-elementor-grid-style-css" href="{{asset('frontend/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="qi-addons-for-elementor-helper-parts-style-css" href="{{asset('frontend/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="qi-addons-for-elementor-style-css" href="{{asset('frontend/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-default-style-css" href="{{asset('frontend/wp-content/themes/wanderland/style75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-modules-css" href="{{asset('frontend/wp-content/themes/wanderland/assets/css/modules.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-dripicons-css" href="{{asset('frontend/wp-content/themes/wanderland/framework/lib/icons-pack/dripicons/dripicons75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-font_elegant-css" href="{{asset('frontend/wp-content/themes/wanderland/framework/lib/icons-pack/elegant-icons/style.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-font_awesome-css" href="{{asset('frontend/wp-content/themes/wanderland/framework/lib/icons-pack/font-awesome/css/fontawesome-all.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-ion_icons-css" href="{{asset('frontend/wp-content/themes/wanderland/framework/lib/icons-pack/ion-icons/css/ionicons.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-linea_icons-css" href="{{asset('frontend/wp-content/themes/wanderland/framework/lib/icons-pack/linea-icons/style75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-linear_icons-css" href="{{asset('frontend/wp-content/themes/wanderland/framework/lib/icons-pack/linear-icons/style75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-simple_line_icons-css" href="{{asset('frontend/wp-content/themes/wanderland/framework/lib/icons-pack/simple-line-icons/simple-line-icons75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="mediaelement-css" href="{{asset('frontend/wp-includes/js/mediaelement/mediaelementplayer-legacy.min1f61.css?ver=4.2.17')}}" type="text/css" media="all">
<link rel="stylesheet" id="wp-mediaelement-css" href="{{asset('frontend/wp-includes/js/mediaelement/wp-mediaelement.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-woo-css" href="{{asset('frontend/wp-content/themes/wanderland/assets/css/woocommerce.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-woo-responsive-css" href="{{asset('frontend/wp-content/themes/wanderland/assets/css/woocommerce-responsive.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-style-dynamic-css" href="{{asset('frontend/wp-content/themes/wanderland/assets/css/style_dynamicc186.css?ver=1655125631')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-modules-responsive-css" href="{{asset('frontend/wp-content/themes/wanderland/assets/css/modules-responsive.min75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="wanderland-mikado-style-dynamic-responsive-css" href="{{asset('frontend/wp-content/themes/wanderland/assets/css/style_dynamic_responsivec186.css?ver=1655125631')}}" type="text/css" media="all">
<link rel="stylesheet" id="js_composer_front-css" href="{{asset('frontend/wp-content/plugins/js_composer/assets/css/js_composer.mineba7.css?ver=7.5')}}" type="text/css" media="all">
<link rel="stylesheet" id="swiper-css" href="{{asset('frontend/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5')}}" type="text/css" media="all">
<script data-cfasync="false" data-pagespeed-no-defer>
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
</script>
<link rel="stylesheet" id="qode-zendesk-chat-css" href="{{asset('frontend/wp-content/plugins/qode-zendesk-chat/assets/main75e4.css?ver=6.4.5')}}" type="text/css" media="all">
<script type="text/javascript" src="{{asset('frontend/wp-content/plugins/revslider/public/assets/js/rbtools.minec8f.js?ver=6.6.20')}}" async id="tp-tools-js"></script>
<script type="text/javascript" src="{{asset('frontend/wp-content/plugins/revslider/public/assets/js/rs6.minec8f.js?ver=6.6.20')}}" async id="revmin-js"></script>



<script type="text/javascript" src="{{asset('frontend/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min9b80.js?ver=8.6.1')}}" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="{{asset('frontend/wp-content/plugins/wp-user-avatar/assets/flatpickr/flatpickr.min6e6b.js?ver=4.15.3')}}" id="ppress-flatpickr-js"></script>
<script type="text/javascript" src="{{asset('frontend/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min2a60.js?ver=4.0.3-wc.8.6.1')}}" id="select2-js" defer="defer" data-wp-strategy="defer"></script>

<link rel="alternate" type="application/json" href="{{asset('frontend/wp-json/wp/v2/pages/29.json')}}">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd">
<meta name="generator" content="WordPress 6.4.5">
<meta name="generator" content="WooCommerce 8.6.1">
<link rel="canonical" href="{{route('index')}}">
<link rel="shortlink" href="{{route('index')}}">
<link rel="alternate" type="application/json+oembed" href="{{asset('frontend/wp-json/oembed/1.0/embed71f9.json?url=https%3A%2F%2Fwanderland.qodeinteractive.com%2F')}}">
<link rel="alternate" type="text/xml+oembed" href="{{asset('frontend/wp-json/oembed/1.0/embed1b9d?url=https%3A%2F%2Fwanderland.qodeinteractive.com%2F&amp;format=xml')}}">

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<!-- GTM Container placement set to footer -->


<link rel="icon" href="{{asset('frontend/img/logo/logo04.png')}}" sizes="32x32">
<link rel="icon" href="{{asset('frontend/img/logo/logo04.png')}}" sizes="192x192">
<link rel="apple-touch-icon" href="{{asset('frontend/img/logo/logo04.png')}}">
<meta name="msapplication-TileImage" content="frontend/img/logo/logo04.png">
<link rel="stylesheet" href="{{ asset('frontend/css/customize.css') }}">
<!-- Font Awesome via CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('frontend/css/vc_shortcodes-custom.css') }}">

@if (isset($config['css']) && is_array($config['css']))
    @if(isset($config['css']))
        @foreach($config['css'] as $key => $val)
            <link href="{{ asset($val)}}" rel="stylesheet">
        @endforeach
    @endif
@endif


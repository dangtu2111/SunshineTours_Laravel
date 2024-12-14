<script>
    window.publicPath = "{{ asset('') }}";
</script>
<script type="text/javascript" src="{{asset('frontend/wp-content/themes/dt-the7/js/main.min.js')}}" id="dt-main-js"></script>
	<script type="text/javascript"
		src="{{asset('frontend/wp-content/plugins/easy-social-share-buttons3/assets/modules/pinterest-pro.min.js')}}"
		id="pinterest-pro-js-js"></script>
	<script type="text/javascript"
		src="{{asset('frontend/wp-content/plugins/easy-social-share-buttons3/assets/modules/subscribe-forms.min.js')}}"
		id="subscribe-forms-js-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-content/plugins/easy-social-share-buttons3/assets/js/essb-core.min.js')}}"
		id="easy-social-share-buttons-core-js"></script>
	<script type="text/javascript" id="easy-social-share-buttons-core-js-after">
		/* <![CDATA[ */
		var essb_settings = { "ajax_url": "https:\/\/xotours.vn\/wp-admin\/admin-ajax.php", "essb3_nonce": "a08aab3824", "essb3_plugin_url": "https:\/\/xotours.vn\/wp-content\/plugins\/easy-social-share-buttons3", "essb3_stats": true, "essb3_ga": false, "essb3_ga_ntg": false, "blog_url": "https:\/\/xotours.vn\/", "post_id": "9", "internal_stats": true };
		/* ]]> */
	</script>
	<script type="text/javascript" id="spu-public-js-extra">
		/* <![CDATA[ */
		var spuvar = { "is_admin": "", "disable_style": "", "ajax_mode": "", "ajax_url": "https:\/\/xotours.vn\/wp-admin\/admin-ajax.php", "ajax_mode_url": "https:\/\/xotours.vn\/?spu_action=spu_load", "pid": "9", "is_front_page": "1", "is_category": "", "site_url": "https:\/\/xotours.vn", "is_archive": "", "is_search": "", "is_preview": "", "seconds_confirmation_close": "5" };
		var spuvar_social = [];
		/* ]]> */
	</script>
	<script type="text/javascript" src="{{asset('frontend/wp-content/plugins/popups/public/assets/js/public.js')}}"
		id="spu-public-js"></script>
	<script type="text/javascript" id="rocket-browser-checker-js-after">
		/* <![CDATA[ */
		"use strict"; var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor) } } return function (Constructor, protoProps, staticProps) { return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor } }(); function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function") } var RocketBrowserCompatibilityChecker = function () { function RocketBrowserCompatibilityChecker(options) { _classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this._checkPassiveOption(this), this.options = !!this.passiveSupported && options } return _createClass(RocketBrowserCompatibilityChecker, [{ key: "_checkPassiveOption", value: function (self) { try { var options = { get passive() { return !(self.passiveSupported = !0) } }; window.addEventListener("test", null, options), window.removeEventListener("test", null, options) } catch (err) { self.passiveSupported = !1 } } }, { key: "initRequestIdleCallback", value: function () { !1 in window && (window.requestIdleCallback = function (cb) { var start = Date.now(); return setTimeout(function () { cb({ didTimeout: !1, timeRemaining: function () { return Math.max(0, 50 - (Date.now() - start)) } }) }, 1) }), !1 in window && (window.cancelIdleCallback = function (id) { return clearTimeout(id) }) } }, { key: "isDataSaverModeOn", value: function () { return "connection" in navigator && !0 === navigator.connection.saveData } }, { key: "supportsLinkPrefetch", value: function () { var elem = document.createElement("link"); return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype } }, { key: "isSlowConnection", value: function () { return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType) } }]), RocketBrowserCompatibilityChecker }();
		/* ]]> */
	</script>
	<script type="text/javascript" id="rocket-preload-links-js-extra">
		/* <![CDATA[ */
		var RocketPreloadLinksConfig = { "excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/", "usesTrailingSlash": "1", "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php", "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm", "siteUrl": "https:\/\/xotours.vn", "onHoverDelay": "100", "rateThrottle": "3" };
		/* ]]> */
	</script>
	<script type="text/javascript" id="rocket-preload-links-js-after">
		/* <![CDATA[ */
		(function () {
			"use strict"; var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) { return typeof e } : function (e) { return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e }, e = function () { function i(e, t) { for (var n = 0; n < t.length; n++) { var i = t[n]; i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i) } } return function (e, t, n) { return t && i(e.prototype, t), n && i(e, n), e } }(); function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") } var t = function () { function n(e, t) { i(this, n), this.browser = e, this.config = t, this.options = this.browser.options, this.prefetched = new Set, this.eventTime = null, this.threshold = 1111, this.numOnHover = 0 } return e(n, [{ key: "init", value: function () { !this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() || this.browser.isSlowConnection() || (this.regex = { excludeUris: RegExp(this.config.excludeUris, "i"), images: RegExp(".(" + this.config.imageExt + ")$", "i"), fileExt: RegExp(".(" + this.config.fileExt + ")$", "i") }, this._initListeners(this)) } }, { key: "_initListeners", value: function (e) { -1 < this.config.onHoverDelay && document.addEventListener("mouseover", e.listener.bind(e), e.listenerOptions), document.addEventListener("mousedown", e.listener.bind(e), e.listenerOptions), document.addEventListener("touchstart", e.listener.bind(e), e.listenerOptions) } }, { key: "listener", value: function (e) { var t = e.target.closest("a"), n = this._prepareUrl(t); if (null !== n) switch (e.type) { case "mousedown": case "touchstart": this._addPrefetchLink(n); break; case "mouseover": this._earlyPrefetch(t, n, "mouseout") } } }, { key: "_earlyPrefetch", value: function (t, e, n) { var i = this, r = setTimeout(function () { if (r = null, 0 === i.numOnHover) setTimeout(function () { return i.numOnHover = 0 }, 1e3); else if (i.numOnHover > i.config.rateThrottle) return; i.numOnHover++, i._addPrefetchLink(e) }, this.config.onHoverDelay); t.addEventListener(n, function e() { t.removeEventListener(n, e, { passive: !0 }), null !== r && (clearTimeout(r), r = null) }, { passive: !0 }) } }, { key: "_addPrefetchLink", value: function (i) { return this.prefetched.add(i.href), new Promise(function (e, t) { var n = document.createElement("link"); n.rel = "prefetch", n.href = i.href, n.onload = e, n.onerror = t, document.head.appendChild(n) }).catch(function () { }) } }, { key: "_prepareUrl", value: function (e) { if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in e || -1 === ["http:", "https:"].indexOf(e.protocol)) return null; var t = e.href.substring(0, this.config.siteUrl.length), n = this._getPathname(e.href, t), i = { original: e.href, protocol: e.protocol, origin: t, pathname: n, href: t + n }; return this._isLinkOk(i) ? i : null } }, { key: "_getPathname", value: function (e, t) { var n = t ? e.substring(this.config.siteUrl.length) : e; return n.startsWith("index.html") || (n = "/" + n), this._shouldAddTrailingSlash(n) ? n + "/" : n } }, { key: "_shouldAddTrailingSlash", value: function (e) { return this.config.usesTrailingSlash && !e.endsWith("index.html") && !this.regex.fileExt.test(e) } }, { key: "_isLinkOk", value: function (e) { return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this.regex.excludeUris.test(e.href) && !this.regex.images.test(e.href)) } }], [{ key: "run", value: function () { "undefined" != typeof RocketPreloadLinksConfig && new n(new RocketBrowserCompatibilityChecker({ capture: !0, passive: !0 }), RocketPreloadLinksConfig).init() } }]), n }(); t.run();
		}());
		/* ]]> */
	</script>
	<script type="text/javascript" src="{{asset('frontend/wp-content/themes/dt-the7-child/script.js')}}" id="my-script-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-content/themes/dt-the7-child/3rd/magnific-popup/jquery.magnific-popup.min.js')}}"
		id="my-magnific-popup-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-content/themes/dt-the7-child/3rd/SlickNav/jquery.slicknav.js')}}"
		id="my-slick-nav-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-includes/js/dist/vendor/react.min.js')}}" id="react-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-includes/js/dist/vendor/react-dom.min.js')}}" id="react-dom-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-includes/js/dist/escape-html.min.js')}}" id="wp-escape-html-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-includes/js/dist/element.min.js')}}" id="wp-element-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-includes/js/dist/hooks.min.js')}}" id="wp-hooks-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-includes/js/dist/i18n.min.js')}}" id="wp-i18n-js"></script>
	<script type="text/javascript" id="wp-i18n-js-after">
		/* <![CDATA[ */
		wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
		/* ]]> */
	</script>
	<script type="text/javascript" src="{{asset('frontend/wp-content/plugins/wp-whatsapp-chat-pro/build/frontend/js/index.js')}}"
		id="qlwapp-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-content/plugins/dt-the7-core/assets/js/post-type.min.js')}}"
		id="the7pt-js"></script>
	<script type="text/javascript" src="{{asset('frontend/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js')}}"
		id="wpb_composer_front_js-js"></script>
	<!-- start Simple Custom CSS and JS -->
	<style type="text/css">
		/* Quadlayers Whatsapp chat */
		#qlwapp .qlwapp-box .qlwapp-message {
			word-break: break-word;
		}
	</style>
	<!-- end Simple Custom CSS and JS -->
	<!-- start Simple Custom CSS and JS -->
	<script type="text/javascript"
		src="{{asset('book_tourscomplete_com/cart_summary0bdb.js?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0ZW5hbnQiOiJ4b3RvdXJzIiwidG9rZW4iOiIyMDE5MDUxOUNEQTc4NjE3RTcwIiwiaWZyYW1lIjoic2hvcHBpbmdjYXJ0In0._Y8ejsiUzu3dSx0j28UUJrupRgotdj8MXWSPbVhhmNc')}}"
		id="TC_CART_SUMMARY"></script><!-- end Simple Custom CSS and JS -->
	<link rel="stylesheet" id="essb-social-followers-counter"
		href="{{asset('frontend/wp-content/plugins/easy-social-share-buttons3/lib/modules/social-followers-counter/assets/social-profiles.min.css')}}"
		type="text/css" media="all" />
	<script type="text/javascript"></script>
	
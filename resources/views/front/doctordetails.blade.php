@extends('front.layout')
@section('title')
{{__('messages.Doctor Details')}}
@stop

@section('styles')
<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="My Blog &raquo; Feed"
		href="{{ asset('public/doctorpage') }}" />
	<link rel="alternate" type="application/rss+xml" title="My Blog &raquo; Comments Feed"
		href="{{ asset('public/doctorpage') }}" />
	<script>
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/shahbazali.online\/test\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.1" } };
		/*! This file is auto-generated */
		!function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode, e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL()); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (!p || !p.fillText) return !1; switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji))) }(window, document, window._wpemojiSettings);
	</script>
	<style>
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css' href='{{ asset('public/doctorpage') }}/css/dist-block-library-style.min.css' media='all' />
	<style id='wp-block-library-theme-inline-css'>
		.wp-block-audio figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-audio figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-code {
			border: 1px solid #ccc;
			border-radius: 4px;
			font-family: Menlo, Consolas, monaco, monospace;
			padding: .8em 1em
		}

		.wp-block-embed figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-embed figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.blocks-gallery-caption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .blocks-gallery-caption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-image figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-image figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-pullquote {
			border-top: 4px solid;
			border-bottom: 4px solid;
			margin-bottom: 1.75em;
			color: currentColor
		}

		.wp-block-pullquote__citation,
		.wp-block-pullquote cite,
		.wp-block-pullquote footer {
			color: currentColor;
			text-transform: uppercase;
			font-size: .8125em;
			font-style: normal
		}

		.wp-block-quote {
			border-left: .25em solid;
			margin: 0 0 1.75em;
			padding-left: 1em
		}

		.wp-block-quote cite,
		.wp-block-quote footer {
			color: currentColor;
			font-size: .8125em;
			position: relative;
			font-style: normal
		}

		.wp-block-quote.has-text-align-right {
			border-left: none;
			border-right: .25em solid;
			padding-left: 0;
			padding-right: 1em
		}

		.wp-block-quote.has-text-align-center {
			border: none;
			padding-left: 0
		}

		.wp-block-quote.is-large,
		.wp-block-quote.is-style-large,
		.wp-block-quote.is-style-plain {
			border: none
		}

		.wp-block-search .wp-block-search__label {
			font-weight: 700
		}

		:where(.wp-block-group.has-background) {
			padding: 1.25em 2.375em
		}

		.wp-block-separator.has-css-opacity {
			opacity: .4
		}

		.wp-block-separator {
			border: none;
			border-bottom: 2px solid;
			margin-left: auto;
			margin-right: auto
		}

		.wp-block-separator.has-alpha-channel-opacity {
			opacity: 1
		}

		.wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
			width: 100px
		}

		.wp-block-separator.has-background:not(.is-style-dots) {
			border-bottom: none;
			height: 1px
		}

		.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
			height: 2px
		}

		.wp-block-table thead {
			border-bottom: 3px solid
		}

		.wp-block-table tfoot {
			border-top: 3px solid
		}

		.wp-block-table td,
		.wp-block-table th {
			padding: .5em;
			border: 1px solid;
			word-break: normal
		}

		.wp-block-table figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-table figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-video figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-video figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-template-part.has-background {
			padding: 1.25em 2.375em;
			margin-top: 0;
			margin-bottom: 0
		}
	</style>
	<style id='global-styles-inline-css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}
	</style>
	<link rel='stylesheet' id='ivory-search-styles-css' href='{{ asset('public/doctorpage') }}/css/add-search-to-menu-public-css-ivory-search.min.css'
		media='all' />
	<link rel='stylesheet' id='57dbb5e0c-css' href='{{ asset('public/doctorpage') }}/css/essential-addons-elementor-734e5f942.min.css' media='all' />
	<link rel='stylesheet' id='font-awesome-css' href='{{ asset('public/doctorpage') }}/css/oceanwp-assets-fonts-fontawesome-css-all.min.css'
		media='all' />
	<link rel='stylesheet' id='simple-line-icons-css' href='{{ asset('public/doctorpage') }}/css/oceanwp-assets-css-third-simple-line-icons.min.css'
		media='all' />
	<link rel='stylesheet' id='oceanwp-style-css' href='{{ asset('public/doctorpage') }}/css/oceanwp-assets-css-style.min.css' media='all' />
	<link rel='stylesheet' id='elementor-icons-css' href='{{ asset('public/doctorpage') }}/css/elementor-assets-lib-eicons-css-elementor-icons.min.css'
		media='all' />
	<style id='elementor-icons-inline-css'>
		.elementor-add-new-section .elementor-add-templately-promo-button {
			background-color: #5d4fff;
			background-image: url(https://shahbazali.online/test/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
			background-repeat: no-repeat;
			background-position: center center;
			margin-left: 5px;
			position: relative;
			bottom: 5px;
		}
	</style>
	<link rel='stylesheet' id='elementor-frontend-css' href='{{ asset('public/doctorpage') }}/css/elementor-assets-css-frontend-lite.min.css'
		media='all' />
	<link rel='stylesheet' id='elementor-post-5-css' href='{{ asset('public/doctorpage') }}/css/elementor-css-post-5.css' media='all' />
	<link rel='stylesheet' id='elementor-global-css' href='{{ asset('public/doctorpage') }}/css/elementor-css-global.css' media='all' />
	<link rel='stylesheet' id='elementor-post-432-css' href='{{ asset('public/doctorpage') }}/css/elementor-css-post-432.css' media='all' />
	<link rel='stylesheet' id='oe-widgets-style-css' href='{{ asset('public/doctorpage') }}/css/ocean-extra-assets-css-widgets.css' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css'
		href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.0.1'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css'
		href='{{ asset('public/doctorpage') }}/css/elementor-assets-lib-font-awesome-css-fontawesome.min.css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-regular-css'
		href='{{ asset('public/doctorpage') }}/css/elementor-assets-lib-font-awesome-css-regular.min.css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-solid-css'
		href='{{ asset('public/doctorpage') }}/css/elementor-assets-lib-font-awesome-css-solid.min.css' media='all' />
	<script>
		/* <![CDATA[ */
		var rcewpp = {
			"ajax_url": "https://shahbazali.online/test/wp-admin/admin-ajax.php",
			"nonce": "54f5224535",
			"home_url": "https://shahbazali.online/test/",
			"settings_icon": 'https://shahbazali.online/test/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings.png',
			"settings_hover_icon": 'https://shahbazali.online/test/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings_hover.png'
		};
            /* ]]\> */
	</script>
	<script src='{{ asset('public/doctorpage') }}/js/jquery-jquery.min.js' id='jquery-core-js'></script>
	<script src='{{ asset('public/doctorpage') }}/js/jquery-jquery-migrate.min.js' id='jquery-migrate-js'></script>
	<link rel="https://api.w.org/" href="https://shahbazali.online/test/wp-json/" />
	<link rel="alternate" type="application/json" href="https://shahbazali.online/test/wp-json/wp/v2/pages/432" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://shahbazali.online/test/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml"
		href="https://shahbazali.online/test/wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 6.0.1" />
	<link rel="canonical" href="https://shahbazali.online/test/doctor/" />
	<link rel='shortlink' href='https://shahbazali.online/test/?p=432' />
	<link rel="alternate" type="application/json+oembed"
		href="https://shahbazali.online/test/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fshahbazali.online%2Ftest%2Fdoctor%2F" />
	<link rel="alternate" type="text/xml+oembed"
		href="https://shahbazali.online/test/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fshahbazali.online%2Ftest%2Fdoctor%2F&#038;format=xml" />
	<!-- OceanWP CSS -->
	<style type="text/css">
		/* Header CSS */
		#site-header.has-header-media .overlay-header-media {
			background-color: rgba(0, 0, 0, 0.5)
		}
	</style>

@endsection

@section('content')
<div class="d-detailpg-main-box">
<div class="container">
   <div class="d-detailpg-part-main-box">
      {{-- Copied wordpress --}}

      <div class="page-template page-template-elementor_canvas page page-id-432 wp-embed-responsive oceanwp oceanwp-theme dropdown-mobile default-breakpoint has-sidebar content-right-sidebar has-topbar has-breadcrumbs elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-432">
         <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
               <filter id="wp-duotone-dark-grayscale">
                  <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                     values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                  <fecomponenttransfer color-interpolation-filters="sRGB">
                     <fefuncr type="table" tablevalues="0 0.49803921568627" />
                     <fefuncg type="table" tablevalues="0 0.49803921568627" />
                     <fefuncb type="table" tablevalues="0 0.49803921568627" />
                     <fefunca type="table" tablevalues="1 1" />
                  </fecomponenttransfer>
                  <fecomposite in2="SourceGraphic" operator="in" />
               </filter>
            </defs>
         </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
               <filter id="wp-duotone-grayscale">
                  <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                     values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                  <fecomponenttransfer color-interpolation-filters="sRGB">
                     <fefuncr type="table" tablevalues="0 1" />
                     <fefuncg type="table" tablevalues="0 1" />
                     <fefuncb type="table" tablevalues="0 1" />
                     <fefunca type="table" tablevalues="1 1" />
                  </fecomponenttransfer>
                  <fecomposite in2="SourceGraphic" operator="in" />
               </filter>
            </defs>
         </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
               <filter id="wp-duotone-purple-yellow">
                  <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                     values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                  <fecomponenttransfer color-interpolation-filters="sRGB">
                     <fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765" />
                     <fefuncg type="table" tablevalues="0 1" />
                     <fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431" />
                     <fefunca type="table" tablevalues="1 1" />
                  </fecomponenttransfer>
                  <fecomposite in2="SourceGraphic" operator="in" />
               </filter>
            </defs>
         </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
               <filter id="wp-duotone-blue-red">
                  <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                     values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                  <fecomponenttransfer color-interpolation-filters="sRGB">
                     <fefuncr type="table" tablevalues="0 1" />
                     <fefuncg type="table" tablevalues="0 0.27843137254902" />
                     <fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902" />
                     <fefunca type="table" tablevalues="1 1" />
                  </fecomponenttransfer>
                  <fecomposite in2="SourceGraphic" operator="in" />
               </filter>
            </defs>
         </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
               <filter id="wp-duotone-midnight">
                  <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                     values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                  <fecomponenttransfer color-interpolation-filters="sRGB">
                     <fefuncr type="table" tablevalues="0 0" />
                     <fefuncg type="table" tablevalues="0 0.64705882352941" />
                     <fefuncb type="table" tablevalues="0 1" />
                     <fefunca type="table" tablevalues="1 1" />
                  </fecomponenttransfer>
                  <fecomposite in2="SourceGraphic" operator="in" />
               </filter>
            </defs>
         </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
               <filter id="wp-duotone-magenta-yellow">
                  <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                     values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                  <fecomponenttransfer color-interpolation-filters="sRGB">
                     <fefuncr type="table" tablevalues="0.78039215686275 1" />
                     <fefuncg type="table" tablevalues="0 0.94901960784314" />
                     <fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412" />
                     <fefunca type="table" tablevalues="1 1" />
                  </fecomponenttransfer>
                  <fecomposite in2="SourceGraphic" operator="in" />
               </filter>
            </defs>
         </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
               <filter id="wp-duotone-purple-green">
                  <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                     values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                  <fecomponenttransfer color-interpolation-filters="sRGB">
                     <fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745" />
                     <fefuncg type="table" tablevalues="0 1" />
                     <fefuncb type="table" tablevalues="0.44705882352941 0.4" />
                     <fefunca type="table" tablevalues="1 1" />
                  </fecomponenttransfer>
                  <fecomposite in2="SourceGraphic" operator="in" />
               </filter>
            </defs>
         </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
            style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
               <filter id="wp-duotone-blue-orange">
                  <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                     values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                  <fecomponenttransfer color-interpolation-filters="sRGB">
                     <fefuncr type="table" tablevalues="0.098039215686275 1" />
                     <fefuncg type="table" tablevalues="0 0.66274509803922" />
                     <fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725" />
                     <fefunca type="table" tablevalues="1 1" />
                  </fecomponenttransfer>
                  <fecomposite in2="SourceGraphic" operator="in" />
               </filter>
            </defs>
         </svg>
         <div data-elementor-type="wp-page" data-elementor-id="432" class="elementor elementor-432">
            <section
               class="elementor-section elementor-top-section elementor-element elementor-element-d3b2f4e elementor-section-full_width elementor-section-stretched elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
               data-id="d3b2f4e" data-element_type="section"
               data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
               <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e455600"
                     data-id="e455600" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-539b16b elementor-widget elementor-widget-eael-adv-tabs"
                           data-id="539b16b" data-element_type="widget" data-widget_type="eael-adv-tabs.default">
                           <div class="elementor-widget-container">
                              <div id="eael-advance-tabs-539b16b"
                                 class="eael-advance-tabs eael-tabs-horizontal eael-tab-auto-active"
                                 data-tabid="539b16b">
                                 <div class="eael-tabs-nav">
                                    <ul class="eael-tab-top-icon">
                                       <li id="1-select-department" class="inactive eael-tab-item-trigger"
                                          aria-selected="true" data-tab="1" role="tab" tabindex="0"
                                          aria-controls="1-select-department-tab" aria-expanded="false"> <i
                                             class="far fa-dot-circle"></i> <span
                                             class="eael-tab-title  title-after-icon">1. Select Department</span>
                                       </li>
                                       <li id="2-select-the-doctor" class="inactive eael-tab-item-trigger"
                                          aria-selected="false" data-tab="2" role="tab" tabindex="-1"
                                          aria-controls="2-select-the-doctor-tab" aria-expanded="false"> <i
                                             class="far fa-dot-circle"></i> <span
                                             class="eael-tab-title  title-after-icon">2. Select the doctor</span>
                                       </li>
                                       <li id="3-conform-appointment" class="inactive eael-tab-item-trigger"
                                          aria-selected="false" data-tab="3" role="tab" tabindex="-1"
                                          aria-controls="3-conform-appointment-tab" aria-expanded="false"> <i
                                             class="far fa-dot-circle"></i> <span
                                             class="eael-tab-title  title-after-icon">3. Confirm
                                             Appointment</span> </li>
                                    </ul>
                                 </div>
                                 <div class="eael-tabs-content">
                                    <div id="1-select-department-tab"
                                       class="clearfix eael-tab-content-item inactive"
                                       data-title-link="1-select-department-tab"> </div>
                                    <div id="2-select-the-doctor-tab"
                                       class="clearfix eael-tab-content-item inactive"
                                       data-title-link="2-select-the-doctor-tab"> </div>
                                    <div id="3-conform-appointment-tab"
                                       class="clearfix eael-tab-content-item inactive"
                                       data-title-link="3-conform-appointment-tab"> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section
               class="elementor-section elementor-top-section elementor-element elementor-element-dd188e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
               data-id="dd188e5" data-element_type="section">
               <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-219453c"
                     data-id="219453c" data-element_type="column">
                     <div class="elementor-widget-wrap"> </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-63bfd9f"
                     data-id="63bfd9f" data-element_type="column">
                     <div class="elementor-widget-wrap"> </div>
                  </div>
               </div>
            </section>
            <section
               class="elementor-section elementor-top-section elementor-element elementor-element-d0d14ea elementor-section-boxed elementor-section-height-default elementor-section-height-default"
               data-id="d0d14ea" data-element_type="section">
               <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5e5e9f8"
                     data-id="5e5e9f8" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7f03728 elementor-widget elementor-widget-wp-widget-jp_dropdown_menu_widget"
                           data-id="7f03728" data-element_type="widget"
                           data-widget_type="wp-widget-jp_dropdown_menu_widget.default">
                           <div class="elementor-widget-container"> <label class="screen-reader-text"
                                 for="select_jp_dropdown_menu_widget-REPLACE_TO_ID"></label><select
                                 name="pd_jp_dropdown_menu_widget-REPLACE_TO_ID"
                                 id="select_jp_dropdown_menu_widget-REPLACE_TO_ID">
                                 <option class="pd_first" value="#">Filter by City</option>
                                 <option value="#" class="pd_tld">Cardiology</option>
                                 <option value="#" class="pd_tld">Dermatology</option>
                              </select>
                              <script type="text/javascript">
                                 /* <![CDATA[ */
                                 (function () {
                                    document.getElementById('select_jp_dropdown_menu_widget-REPLACE_TO_ID').onchange = function (e) {
                                       let destination = document.getElementById('select_jp_dropdown_menu_widget-REPLACE_TO_ID').value;
                                       if (destination != "#") {
                                          window.location = destination;
                                       }
                                    };
                                 })();
                  /* ]]&gt; */
                              </script>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f2d679c"
                     data-id="f2d679c" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6ff6883 elementor-widget elementor-widget-wp-widget-jp_dropdown_menu_widget"
                           data-id="6ff6883" data-element_type="widget"
                           data-widget_type="wp-widget-jp_dropdown_menu_widget.default">
                           <div class="elementor-widget-container"> <label class="screen-reader-text"
                                 for="select_jp_dropdown_menu_widget-REPLACE_TO_ID"></label><select
                                 name="pd_jp_dropdown_menu_widget-REPLACE_TO_ID"
                                 id="select_jp_dropdown_menu_widget-REPLACE_TO_ID">
                                 <option class="pd_first" value="#">Filter by Hospital</option>
                                 <option value="#" class="pd_tld">Cardiology</option>
                                 <option value="#" class="pd_tld">Dermatology</option>
                              </select>
                              <script type="text/javascript">
                                 /* <![CDATA[ */
                                 (function () {
                                    document.getElementById('select_jp_dropdown_menu_widget-REPLACE_TO_ID').onchange = function (e) {
                                       let destination = document.getElementById('select_jp_dropdown_menu_widget-REPLACE_TO_ID').value;
                                       if (destination != "#") {
                                          window.location = destination;
                                       }
                                    };
                                 })();
                  /* ]]&gt; */
                              </script>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-e9134f1"
                     data-id="e9134f1" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1cad30e elementor-widget elementor-widget-wp-widget-jp_dropdown_menu_widget"
                           data-id="1cad30e" data-element_type="widget"
                           data-widget_type="wp-widget-jp_dropdown_menu_widget.default">
                           <div class="elementor-widget-container"> <label class="screen-reader-text"
                                 for="select_jp_dropdown_menu_widget-REPLACE_TO_ID"></label><select
                                 name="pd_jp_dropdown_menu_widget-REPLACE_TO_ID"
                                 id="select_jp_dropdown_menu_widget-REPLACE_TO_ID">
                                 <option class="pd_first" value="#">Filter by Department</option>
                                 <option value="#" class="pd_tld">Cardiology</option>
                                 <option value="#" class="pd_tld">Dermatology</option>
                              </select>
                              <script type="text/javascript">
                                 /* <![CDATA[ */
                                 (function () {
                                    document.getElementById('select_jp_dropdown_menu_widget-REPLACE_TO_ID').onchange = function (e) {
                                       let destination = document.getElementById('select_jp_dropdown_menu_widget-REPLACE_TO_ID').value;
                                       if (destination != "#") {
                                          window.location = destination;
                                       }
                                    };
                                 })();
                  /* ]]&gt; */
                              </script>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-a47ac01"
                     data-id="a47ac01" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6faaab3 elementor-widget elementor-widget-shortcode"
                           data-id="6faaab3" data-element_type="widget" data-widget_type="shortcode.default">
                           <div class="elementor-widget-container">
                              <div class="elementor-shortcode">
                                 <form class="is-search-form is-form-style is-form-style-3 is-form-id-470"
                                    action="https://shahbazali.online/test/" method="get" role="search"><label
                                       for="is-search-input-470"><span class="is-screen-reader-text">Search
                                          for:</span><input type="search" id="is-search-input-470" name="s"
                                          value="" class="is-search-input" placeholder="Search here..."
                                          autocomplete=off /></label><button type="submit"
                                       class="is-search-submit"><span class="is-screen-reader-text">Search
                                          Button</span><span class="is-search-icon"><svg focusable="false"
                                             aria-label="Search" xmlns="http://www.w3.org/2000/svg"
                                             viewbox="0 0 24 24" width="24px">
                                             <path
                                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                             </path>
                                          </svg></span></button><input type="hidden" name="id" value="470" />
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section
               class="elementor-section elementor-top-section elementor-element elementor-element-b12520b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
               data-id="b12520b" data-element_type="section">
               <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4ceac97"
                     data-id="4ceac97" data-element_type="column"
                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                           class="elementor-section elementor-inner-section elementor-element elementor-element-34dfd4c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                           data-id="34dfd4c" data-element_type="section">
                           <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2cfc9a0"
                                 data-id="2cfc9a0" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-e2d6f71 elementor-widget elementor-widget-image"
                                       data-id="e2d6f71" data-element_type="widget"
                                       data-widget_type="image.default">
                                       <div class="elementor-widget-container">
                                          <style>
                                             /*! elementor - v3.6.7 - 03-07-2022 */
                                             .elementor-widget-image {
                                                text-align: center
                                             }
      
                                             .elementor-widget-image a {
                                                display: inline-block
                                             }
      
                                             .elementor-widget-image a img[src$=".svg"] {
                                                width: 48px
                                             }
      
                                             .elementor-widget-image img {
                                                vertical-align: middle;
                                                display: inline-block
                                             }
                                          </style> <img width="345" height="303"
                                             src="./images/2022-07-reet_poudel-removebg-preview.png"
                                             class="attachment-large size-large" alt="" loading="lazy"
                                             srcset="./images/2022-07-reet_poudel-removebg-preview.png 345w, ./images/2022-07-reet_poudel-removebg-preview-300x263.png 300w"
                                             sizes="(max-width: 345px) 100vw, 345px" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-09ea942"
                                 data-id="09ea942" data-element_type="column">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9023dce elementor-widget elementor-widget-heading"
                                       data-id="9023dce" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <style>
                                             /*! elementor - v3.6.7 - 03-07-2022 */
                                             .elementor-heading-title {
                                                padding: 0;
                                                margin: 0;
                                                line-height: 1
                                             }
      
                                             .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                color: inherit;
                                                font-size: inherit;
                                                line-height: inherit
                                             }
      
                                             .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                font-size: 15px
                                             }
      
                                             .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                font-size: 19px
                                             }
      
                                             .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                font-size: 29px
                                             }
      
                                             .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                font-size: 39px
                                             }
      
                                             .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                font-size: 59px
                                             }
                                          </style>
                                          <h2 class="elementor-heading-title elementor-size-default">Dr. Reet
                                             Poudel</h2>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-b2d8b7e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                       data-id="b2d8b7e" data-element_type="widget"
                                       data-widget_type="icon-list.default">
                                       <div class="elementor-widget-container">
                                          <link rel="stylesheet"
                                             href="{{ asset('public/doctorpage') }}/css/elementor-assets-css-widget-icon-list.min.css">
                                          <ul class="elementor-icon-list-items">
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Senior Consultant
                                                   Psychiatrist and Sexologist</span> </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Experience: 10 years</span>
                                             </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Next Available Time: Jul 27
                                                   at 4:00 PM</span> </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-fd596fb elementor-widget elementor-widget-button"
                                       data-id="fd596fb" data-element_type="widget"
                                       data-widget_type="button.default">
                                       <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper"> <a href="#"
                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                role="button"> <span class="elementor-button-content-wrapper">
                                                   <span class="elementor-button-text">View Profile</span>
                                                </span> </a> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-40dee2d"
                     data-id="40dee2d" data-element_type="column"
                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                           class="elementor-section elementor-inner-section elementor-element elementor-element-89c6529 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                           data-id="89c6529" data-element_type="section">
                           <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-083fdf8"
                                 data-id="083fdf8" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-b6a71a1 elementor-widget elementor-widget-image"
                                       data-id="b6a71a1" data-element_type="widget"
                                       data-widget_type="image.default">
                                       <div class="elementor-widget-container"> <img width="345" height="303"
                                             src="./images/2022-07-reet_poudel-removebg-preview.png"
                                             class="attachment-large size-large" alt="" loading="lazy"
                                             srcset="./images/2022-07-reet_poudel-removebg-preview.png 345w, ./images/2022-07-reet_poudel-removebg-preview-300x263.png 300w"
                                             sizes="(max-width: 345px) 100vw, 345px" /> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-77339f7"
                                 data-id="77339f7" data-element_type="column">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-e3c104a elementor-widget elementor-widget-heading"
                                       data-id="e3c104a" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">Dr. Reet
                                             Poudel</h2>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9f09b01 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                       data-id="9f09b01" data-element_type="widget"
                                       data-widget_type="icon-list.default">
                                       <div class="elementor-widget-container">
                                          <ul class="elementor-icon-list-items">
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Senior Consultant
                                                   Psychiatrist and Sexologist</span> </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Experience: 10 years</span>
                                             </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Next Available Time: Jul 27
                                                   at 4:00 PM</span> </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-192ebcc elementor-widget elementor-widget-button"
                                       data-id="192ebcc" data-element_type="widget"
                                       data-widget_type="button.default">
                                       <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper"> <a href="#"
                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                role="button"> <span class="elementor-button-content-wrapper">
                                                   <span class="elementor-button-text">View Profile</span>
                                                </span> </a> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </section>
            <section
               class="elementor-section elementor-top-section elementor-element elementor-element-19083ba elementor-section-boxed elementor-section-height-default elementor-section-height-default"
               data-id="19083ba" data-element_type="section">
               <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9b46e12"
                     data-id="9b46e12" data-element_type="column"
                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                           class="elementor-section elementor-inner-section elementor-element elementor-element-5624c9a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                           data-id="5624c9a" data-element_type="section">
                           <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-24bf71d"
                                 data-id="24bf71d" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-fe6d6da elementor-widget elementor-widget-image"
                                       data-id="fe6d6da" data-element_type="widget"
                                       data-widget_type="image.default">
                                       <div class="elementor-widget-container"> <img width="345" height="303"
                                             src="./images/2022-07-reet_poudel-removebg-preview.png"
                                             class="attachment-large size-large" alt="" loading="lazy"
                                             srcset="./images/2022-07-reet_poudel-removebg-preview.png 345w, ./images/2022-07-reet_poudel-removebg-preview-300x263.png 300w"
                                             sizes="(max-width: 345px) 100vw, 345px" /> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-be5ea6e"
                                 data-id="be5ea6e" data-element_type="column">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-064476a elementor-widget elementor-widget-heading"
                                       data-id="064476a" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">Dr. Reet
                                             Poudel</h2>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-dae05ac elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                       data-id="dae05ac" data-element_type="widget"
                                       data-widget_type="icon-list.default">
                                       <div class="elementor-widget-container">
                                          <ul class="elementor-icon-list-items">
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Senior Consultant
                                                   Psychiatrist and Sexologist</span> </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Experience: 10 years</span>
                                             </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Next Available Time: Jul 27
                                                   at 4:00 PM</span> </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-251c29f elementor-widget elementor-widget-button"
                                       data-id="251c29f" data-element_type="widget"
                                       data-widget_type="button.default">
                                       <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper"> <a href="#"
                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                role="button"> <span class="elementor-button-content-wrapper">
                                                   <span class="elementor-button-text">View Profile</span>
                                                </span> </a> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-84e384f"
                     data-id="84e384f" data-element_type="column"
                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                           class="elementor-section elementor-inner-section elementor-element elementor-element-93be986 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                           data-id="93be986" data-element_type="section">
                           <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c23fefa"
                                 data-id="c23fefa" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-8d4d962 elementor-widget elementor-widget-image"
                                       data-id="8d4d962" data-element_type="widget"
                                       data-widget_type="image.default">
                                       <div class="elementor-widget-container"> <img width="345" height="303"
                                             src="./images/2022-07-reet_poudel-removebg-preview.png"
                                             class="attachment-large size-large" alt="" loading="lazy"
                                             srcset="./images/2022-07-reet_poudel-removebg-preview.png 345w, ./images/2022-07-reet_poudel-removebg-preview-300x263.png 300w"
                                             sizes="(max-width: 345px) 100vw, 345px" /> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f5c0ba9"
                                 data-id="f5c0ba9" data-element_type="column">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-78e687e elementor-widget elementor-widget-heading"
                                       data-id="78e687e" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">Dr. Reet
                                             Poudel</h2>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d15f66b elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                       data-id="d15f66b" data-element_type="widget"
                                       data-widget_type="icon-list.default">
                                       <div class="elementor-widget-container">
                                          <ul class="elementor-icon-list-items">
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Senior Consultant
                                                   Psychiatrist and Sexologist</span> </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Experience: 10 years</span>
                                             </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Next Available Time: Jul 27
                                                   at 4:00 PM</span> </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-04abe15 elementor-widget elementor-widget-button"
                                       data-id="04abe15" data-element_type="widget"
                                       data-widget_type="button.default">
                                       <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper"> <a href="#"
                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                role="button"> <span class="elementor-button-content-wrapper">
                                                   <span class="elementor-button-text">View Profile</span>
                                                </span> </a> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </section>
            <section
               class="elementor-section elementor-top-section elementor-element elementor-element-b08b13e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
               data-id="b08b13e" data-element_type="section">
               <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d24d912"
                     data-id="d24d912" data-element_type="column"
                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                           class="elementor-section elementor-inner-section elementor-element elementor-element-8a0c21d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                           data-id="8a0c21d" data-element_type="section">
                           <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-225902f"
                                 data-id="225902f" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-45cec2d elementor-widget elementor-widget-image"
                                       data-id="45cec2d" data-element_type="widget"
                                       data-widget_type="image.default">
                                       <div class="elementor-widget-container"> <img width="345" height="303"
                                             src="./images/2022-07-reet_poudel-removebg-preview.png"
                                             class="attachment-large size-large" alt="" loading="lazy"
                                             srcset="./images/2022-07-reet_poudel-removebg-preview.png 345w, ./images/2022-07-reet_poudel-removebg-preview-300x263.png 300w"
                                             sizes="(max-width: 345px) 100vw, 345px" /> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b97f609"
                                 data-id="b97f609" data-element_type="column">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-cee0154 elementor-widget elementor-widget-heading"
                                       data-id="cee0154" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">Dr. Reet
                                             Poudel</h2>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-867d5fe elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                       data-id="867d5fe" data-element_type="widget"
                                       data-widget_type="icon-list.default">
                                       <div class="elementor-widget-container">
                                          <ul class="elementor-icon-list-items">
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Senior Consultant
                                                   Psychiatrist and Sexologist</span> </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Experience: 10 years</span>
                                             </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Next Available Time: Jul 27
                                                   at 4:00 PM</span> </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9258ffb elementor-widget elementor-widget-button"
                                       data-id="9258ffb" data-element_type="widget"
                                       data-widget_type="button.default">
                                       <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper"> <a href="#"
                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                role="button"> <span class="elementor-button-content-wrapper">
                                                   <span class="elementor-button-text">View Profile</span>
                                                </span> </a> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-85b26d2"
                     data-id="85b26d2" data-element_type="column"
                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                           class="elementor-section elementor-inner-section elementor-element elementor-element-2d85527 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                           data-id="2d85527" data-element_type="section">
                           <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f2c95cb"
                                 data-id="f2c95cb" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-98ac1ed elementor-widget elementor-widget-image"
                                       data-id="98ac1ed" data-element_type="widget"
                                       data-widget_type="image.default">
                                       <div class="elementor-widget-container"> <img width="345" height="303"
                                             src="./images/2022-07-reet_poudel-removebg-preview.png"
                                             class="attachment-large size-large" alt="" loading="lazy"
                                             srcset="./images/2022-07-reet_poudel-removebg-preview.png 345w, ./images/2022-07-reet_poudel-removebg-preview-300x263.png 300w"
                                             sizes="(max-width: 345px) 100vw, 345px" /> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5630021"
                                 data-id="5630021" data-element_type="column">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-0f6e45e elementor-widget elementor-widget-heading"
                                       data-id="0f6e45e" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">Dr. Reet
                                             Poudel</h2>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d537fd1 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                       data-id="d537fd1" data-element_type="widget"
                                       data-widget_type="icon-list.default">
                                       <div class="elementor-widget-container">
                                          <ul class="elementor-icon-list-items">
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Senior Consultant
                                                   Psychiatrist and Sexologist</span> </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Experience: 10 years</span>
                                             </li>
                                             <li class="elementor-icon-list-item"> <span
                                                   class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                      class="fas fa-caret-square-right"></i> </span> <span
                                                   class="elementor-icon-list-text">Next Available Time: Jul 27
                                                   at 4:00 PM</span> </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a8b1dce elementor-widget elementor-widget-button"
                                       data-id="a8b1dce" data-element_type="widget"
                                       data-widget_type="button.default">
                                       <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper"> <a href="#"
                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                role="button"> <span class="elementor-button-content-wrapper">
                                                   <span class="elementor-button-text">View Profile</span>
                                                </span> </a> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </section>
            <section
               class="elementor-section elementor-top-section elementor-element elementor-element-3a7168c elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
               data-id="3a7168c" data-element_type="section">
               <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1418bb8"
                     data-id="1418bb8" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                           class="elementor-section elementor-inner-section elementor-element elementor-element-582405f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                           data-id="582405f" data-element_type="section">
                           <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-52a1e44"
                                 data-id="52a1e44" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c95b47b elementor-widget elementor-widget-heading"
                                       data-id="c95b47b" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">1</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-e67e0b4"
                                 data-id="e67e0b4" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-fbacc32 elementor-widget elementor-widget-heading"
                                       data-id="fbacc32" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">2</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-a3d0d9d"
                                 data-id="a3d0d9d" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9a3a431 elementor-widget elementor-widget-heading"
                                       data-id="9a3a431" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">3</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-546615a"
                                 data-id="546615a" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-cbbf990 elementor-widget elementor-widget-heading"
                                       data-id="cbbf990" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">.</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-a3c753d"
                                 data-id="a3c753d" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-126a326 elementor-widget elementor-widget-heading"
                                       data-id="126a326" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">.</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-09681f0"
                                 data-id="09681f0" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2363134 elementor-widget elementor-widget-heading"
                                       data-id="2363134" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">6</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-9db9463"
                                 data-id="9db9463" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2238105 elementor-widget elementor-widget-heading"
                                       data-id="2238105" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">7</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </section>
            <section
               class="elementor-section elementor-top-section elementor-element elementor-element-0354703 elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
               data-id="0354703" data-element_type="section">
               <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e6d694e"
                     data-id="e6d694e" data-element_type="column">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                           class="elementor-section elementor-inner-section elementor-element elementor-element-3db1749 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                           data-id="3db1749" data-element_type="section">
                           <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-a15e8c1"
                                 data-id="a15e8c1" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-b652236 elementor-widget elementor-widget-heading"
                                       data-id="b652236" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">1</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-b48795e"
                                 data-id="b48795e" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-e9511f5 elementor-widget elementor-widget-heading"
                                       data-id="e9511f5" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">2</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-fb6b8f9"
                                 data-id="fb6b8f9" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-38c6e63 elementor-widget elementor-widget-heading"
                                       data-id="38c6e63" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">3</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-20f7dd9"
                                 data-id="20f7dd9" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9b244ad elementor-widget elementor-widget-heading"
                                       data-id="9b244ad" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">.</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-158cfd4"
                                 data-id="158cfd4" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-02fc907 elementor-widget elementor-widget-heading"
                                       data-id="02fc907" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">.</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-cd2f600"
                                 data-id="cd2f600" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7413f8e elementor-widget elementor-widget-heading"
                                       data-id="7413f8e" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">6</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-4b5c30a"
                                 data-id="4b5c30a" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2dc4e41 elementor-widget elementor-widget-heading"
                                       data-id="2dc4e41" data-element_type="widget"
                                       data-widget_type="heading.default">
                                       <div class="elementor-widget-container">
                                          <h2 class="elementor-heading-title elementor-size-default">7</h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>


      {{-- Copied wordpress End --}}
   </div>
</div>
@stop

@section('footer')

<style type="text/css" media="screen">
   /* Ivory search custom CSS code */
</style>
<script id='57dbb5e0c-js-extra'>
   var localize = { "ajaxurl": "https:\/\/shahbazali.online\/test\/wp-admin\/admin-ajax.php", "nonce": "138fea428a", "i18n": { "added": "Added ", "compare": "Compare", "loading": "Loading..." }, "page_permalink": "https:\/\/shahbazali.online\/test\/doctor\/", "cart_redirectition": "", "cart_page_url": "" };
</script>
<script src='{{ asset('public/doctorpage') }}/js/essential-addons-elementor-734e5f942.min.js' id='57dbb5e0c-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/pkh-imagesloaded.min.js' id='imagesloaded-js'></script>
<script id='oceanwp-main-js-extra'>
   var oceanwpLocalize = { "nonce": "89659b38ad", "isRTL": "", "menuSearchStyle": "drop_down", "mobileMenuSearchStyle": "disabled", "sidrSource": null, "sidrDisplace": "1", "sidrSide": "left", "sidrDropdownTarget": "link", "verticalHeaderTarget": "link", "customSelects": ".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select", "ajax_url": "https:\/\/shahbazali.online\/test\/wp-admin\/admin-ajax.php" };
</script>
<script src='{{ asset('public/doctorpage') }}/js/oceanwp-assets-js-theme.min.js' id='oceanwp-main-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/oceanwp-assets-js-drop-down-mobile-menu.min.js' id='oceanwp-drop-down-mobile-menu-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/oceanwp-assets-js-drop-down-search.min.js' id='oceanwp-drop-down-search-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/oceanwp-assets-js-vendors-magnific-popup.min.js' id='ow-magnific-popup-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/oceanwp-assets-js-ow-lightbox.min.js' id='oceanwp-lightbox-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/oceanwp-assets-js-vendors-flickity.pkgd.min.js' id='ow-flickity-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/oceanwp-assets-js-ow-slider.min.js' id='oceanwp-slider-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/oceanwp-assets-js-scroll-effect.min.js' id='oceanwp-scroll-effect-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/oceanwp-assets-js-scroll-top.min.js' id='oceanwp-scroll-top-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/oceanwp-assets-js-select.min.js' id='oceanwp-select-js'></script>
<script id='ivory-search-scripts-js-extra'>
   var IvorySearchVars = { "is_analytics_enabled": "1" };
</script>
<script src='{{ asset('public/doctorpage') }}/js/add-search-to-menu-public-js-ivory-search.min.js' id='ivory-search-scripts-js'></script>
<!--[if lt IE 9]> <script src='https://shahbazali.online/test/wp-content/themes/oceanwp/assets/js/third/html5.min.js?ver=3.3.3' id='html5shiv-js'></script> <![endif]-->
<script src='{{ asset('public/doctorpage') }}/js/elementor-assets-js-webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/elementor-assets-js-frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/elementor-assets-lib-waypoints-waypoints.min.js' id='elementor-waypoints-js'></script>
<script src='{{ asset('public/doctorpage') }}/js/jquery-ui-core.min.js' id='jquery-ui-core-js'></script>
<script id='elementor-frontend-js-before'>
   var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Extra", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Extra", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.6.7", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "a11y_improvements": true, "e_import_export": true, "additional_custom_breakpoints": true, "e_hidden_wordpress_widgets": true, "landing-pages": true, "elements-color-picker": true, "favorite-widgets": true, "admin-top-bar": true }, "urls": { "assets": "https:\/\/shahbazali.online\/test\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 432, "title": "Doctor%20%E2%80%93%20My%20Blog", "excerpt": "", "featuredImage": false } };
</script>
<script src='{{ asset('public/doctorpage') }}/js/elementor-assets-js-frontend.min.js' id='elementor-frontend-js'></script>
@endsection
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Doctor Details')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="My Blog &raquo; Feed" href="<?php echo e(asset('public/doctorpage')); ?>" />
    <link rel="alternate" type="application/rss+xml" title="My Blog &raquo; Comments Feed"
        href="<?php echo e(asset('public/doctorpage')); ?>" />
    <style>
        .bookThisTime {
            margin-top: 5px;
            color: white !important;
        }
    </style>

    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/shahbazali.online\/test\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.1"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                            55356, 56826, 55356, 56819
                        ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                            56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                    1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                    .wpemoji)))
        }(window, document, window._wpemojiSettings);
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
    <link rel='stylesheet' id='wp-block-library-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/dist-block-library-style.min.css' media='all' />
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

        .modal-xl {
            min-width: 80% !important;
        }

        .form-control {
            font-size: initial !important;
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
    <link rel='stylesheet' id='ivory-search-styles-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/add-search-to-menu-public-css-ivory-search.min.css' media='all' />
    <link rel='stylesheet' id='57dbb5e0c-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/essential-addons-elementor-734e5f942.min.css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/oceanwp-assets-fonts-fontawesome-css-all.min.css' media='all' />
    <link rel='stylesheet' id='simple-line-icons-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/oceanwp-assets-css-third-simple-line-icons.min.css' media='all' />
    <link rel='stylesheet' id='oceanwp-style-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/oceanwp-assets-css-style.min.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/elementor-assets-lib-eicons-css-elementor-icons.min.css'
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
    <link rel='stylesheet' id='elementor-frontend-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/elementor-assets-css-frontend-lite.min.css' media='all' />
    <link rel='stylesheet' id='elementor-post-5-css' href='<?php echo e(asset('public/doctorpage')); ?>/css/elementor-css-post-5.css'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='<?php echo e(asset('public/doctorpage')); ?>/css/elementor-css-global.css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-432-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/elementor-css-post-432.css' media='all' />
    <link rel='stylesheet' id='oe-widgets-style-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/ocean-extra-assets-css-widgets.css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.0.1'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/elementor-assets-lib-font-awesome-css-fontawesome.min.css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/elementor-assets-lib-font-awesome-css-regular.min.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='<?php echo e(asset('public/doctorpage')); ?>/css/elementor-assets-lib-font-awesome-css-solid.min.css' media='all' />
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
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/jquery-jquery.min.js' id='jquery-core-js'></script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/jquery-jquery-migrate.min.js' id='jquery-migrate-js'></script>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-detailpg-main-box">
        <div class="container">
            <div class="d-detailpg-part-main-box">

                <div class="row my-2">

                    <div class="col-sm-3">
                        <select name="department_id" id="department_id" class="form-control">
                            <option class="pd_first" value="#">Filter by Department</option>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if(isset(request()->department_id) && $department->id == request()->department_id): ?> selected="selected" <?php endif; ?>
                                    value="<?php echo e($department->id); ?>" class="pd_tld">
                                    <?php echo e($department->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>


                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Search By Doctor's Name"
                            id="search_name" style="width: auto;">
                    </div>
                </div>

                <div id="doctorList">
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $dayOfWeek = \Carbon\Carbon::now()->dayOfWeek + 1;
                        $todayTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                            ->where('day', $dayOfWeek)
                            ->first();
                        $status =\App\Model\TimeTable::where('doctor_id', $doctor->id)
                            ->where('day', $dayOfWeek)->get('status');
                        ?>
                        <?php if($todayTimeTable): ?>
                            <div id="finddoctors_view"><input type="hidden" id="cid" value="4522"
                                    data-count="1" data-sync="0">
                                <div
                                    class="d-sm-flex flex-wrap mb-4 shadow-sm rounded-3 bg-gray-light border doc-list-item">
                                    <div class="col-md-5 flex-fill">
                                        <div class="p-3 pb-0 d-xl-flex mb-3 docdetail2029">
                                            <div class="text-center">
                                                <a href="javascript:void(0);" data-docid="<?php echo e($doctor->id); ?>"
                                                    data-orgid="614" data-nextavltime="Aug 25 at 7:00 PM"
                                                    class="d-block doctorprofile">
                                                    
                                                    <?php if($doctor->image): ?>
                                                        <img class="rounded-circle border-success" src="<?php echo e(asset('public/upload/doctor/'.$doctor->image)); ?>" title=" <?php echo e($doctor->image); ?>" style="width: 200px; height:200px;">
                                                    <?php else: ?>
                                                        <img class="rounded-circle border-success" src="<?php echo e(asset('public/images/doctor.png')); ?>" title=" <?php echo e($doctor->image); ?>" style="width: 200px; height:200px;">
                                                    <?php endif; ?>
                                                    
                                                    <!--<img class="rounded-circle border-success"-->
                                                    <!--    src="<?php echo e(asset('public/upload/doctor/' . $doctor->image)); ?>"-->
                                                    <!--    alt="Dr. Madhur Basnet" style="width: 200px; height:200px;" title=" <?php echo e($doctor->image); ?>">-->
                                                </a>

                                                <div class="d-xl-none">
                                                    <h6 class="my-2" data-depid="1974"
                                                        data-docid="<?php echo e($doctor->id); ?>" data-gdepid="14"
                                                        data-gdocid="623" data-orgid="614" id="doctordetail">Dr.
                                                        <?php echo e($doctor->name); ?> </h6>
                                                    <p class="mb-1 pb-2 fs-12"><i
                                                            class="bi bi-caret-right-square-fill me-1 text-success"></i>Department
                                                        : <?php echo e($doctor->department->name); ?>

                                                    </p>
                                                    <a data-docid="<?php echo e($doctor->id); ?>" data-orgid="614"
                                                        data-nextavltime="Aug 25 at 7:00 PM"
                                                        class="btn btn-sm btn-outline-success small doctorprofile">View
                                                        Profile <em class="bi bi-chevron-right"></em></a>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <input type="hidden" id="newdocid0" value="4522" data-gdocid="2029"
                                                    data-orgid="614" data-gdepid="81" data-depid="1996">

                                                <div class="d-none d-xl-block pb-2">
                                                    <h5 class="mb-3" data-depid="1974" data-docid="2696"
                                                        data-gdepid="14" data-gdocid="623" data-orgid="614"
                                                        id="doctordetail">Dr. <?php echo e($doctor->name); ?> </h5>
                                                    <!-- <div class="line line-sm ms-0 mb-3"></div> -->
                                                    <div class="fs-12 ">
                                                        <p class="mb-2 pb-1"><i
                                                                class="bi bi-caret-right-square-fill me-1 text-success"></i>Department:
                                                            <?php echo e($doctor->department->name); ?>

                                                        </p>
                                                        <!-- 				<p class="mb-2 pb-1"><i class="bi bi-caret-right-square-fill me-1 text-success"></i> </p> -->
                                                        <p class="mb-2 pb-1">
                                                            <i
                                                                class="bi bi-caret-right-square-fill me-1 text-success"></i>Experience:
                                                            <?php echo e($doctor->experience); ?>

                                                        </p>

                                                    </div>
                                                    <a data-docid="<?php echo e($doctor->id); ?>"
                                                        class="btn btn-lg btn-outline-success small doctorprofile">View
                                                        Profile <em class="bi bi-chevron-right"></em>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-7 border-start flex-fill bg-white">
                                        <div id="doctorschedule_4522">
                                            <div class="appointment-time-info px-3 pb-3 pt-2">
                                                <div class="table-responsive mb-3 mb-xl-0">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Date</th>
                                                                <th style="min-width:155px;" scope="col">Dr. Available
                                                                    Time</th>
                                                                <th style="min-width: 300px;" scope="col">Available
                                                                    Time</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="small align-middle">
                                                            <tr>
                                                                <td>
                                                                    <?php
                                                                    if ($dayOfWeek == 6) {
                                                                        $dayAfterTommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                                            ->where('day', 1)
                                                                            ->first();
                                                                        $tommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                                            ->where('day', $dayOfWeek + 1)->first();
                                                                       
                                                                    } elseif ($dayOfWeek == 7) {
                                                                        $dayAfterTommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                                            ->where('day', 2)
                                                                            ->first();
                                                                        $tommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                                            ->where('day', 1)
                                                                            ->first();
                                                                    } else {
                                                                        $tommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                                            ->where('day', $dayOfWeek + 1)
                                                                            ->first();
                                                                    
                                                                        $dayAfterTommorowTimeTable = \App\Model\TimeTable::where('doctor_id', $doctor->id)
                                                                            ->where('day', $dayOfWeek + 2)
                                                                            ->first();
                                                                    }
                                                                    
                                                                    ?>
                                                                    <div class="m-1">
                                                                        <?php echo e(\Carbon\Carbon::now()->format('Y/m/d')); ?> <span class="badge badge-warning text-light">Today</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="m-1">
                                                                        <?php if($todayTimeTable->status != '0'): ?>
                                                                            <?php if(isset($todayTimeTable->from)): ?>
                                                                                <?php echo e($todayTimeTable->from); ?> -
                                                                                <?php echo e($todayTimeTable->to); ?>

                                                                            <?php else: ?>
                                                                                <span class="badge badge-danger"> Not Available
                                                                                </span>
                                                                            <?php endif; ?>
                                                                        <?php else: ?>
                                                                            <span class="badge badge-info"> Not Available
                                                                            </span>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    
                                                                </td>
                                                                <td>
                                                                    <div class="m-1">
                                                                        <?php
                                                                        $todayToken = $todayTimeTable->token;
                                                                        $tokenTime = 0;
                                                                        ?>
                                                                        
                                                                  <?php if($todayTimeTable->status != '0'): ?>
                                                                        <?php if($todayToken > 0): ?>
                                                                            <?php for($i = 0; $i < $todayToken; $i++): ?>
                                                                                <?php if($i == 0): ?>
                                                                                        <?php if( $todayTimeTable->from >= \Carbon\Carbon::now()->format("H:i")): ?>
                                                                                            <a class="btn bookThisTime"
                                                                                                data-time_table_id="<?php if($todayTimeTable){ echo $todayTimeTable->id; }?>"
                                                                                                data-id="<?php echo e($doctor->id); ?>"
                                                                                                data-date="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>"
                                                                                                data-time="<?php echo e($todayTimeTable->from); ?>"
                                                                                                style="background: #00be9c;"><?php echo e($todayTimeTable->from); ?>

                                                                                            </a>
                                                                                        <?php endif; ?>
                                                                                <?php else: ?>
                                                                                        <?php if( ($todayTimeTable->to > \Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')) ): ?>
                                                                                            <?php if( \Carbon\Carbon::now()->format('H:i') <= \Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')): ?>
                                                                                            
                                                                                            
                                                                                           <?php
                                                                                                $doctor->id;
                                                                                                $time = \Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i');
                                                                                                $date = \Carbon\Carbon::now()->format('Y-m-d');
                                                                                                $else_app =  \App\Model\Appointment::where("doc_id",$doctor->id)->where('time',$time)->where('date',$date)->count();
                                                                                            ?>
                                                                                            
                                                                                                <?php if($else_app == 0): ?>
                                                                                                    <a class="btn bookThisTime"
                                                                                                        data-time_table_id="<?php if($todayTimeTable){ echo $todayTimeTable->id; }?>"
                                                                                                        data-id="<?php echo e($doctor->id); ?>"
                                                                                                        data-date="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>"
                                                                                                        data-time="<?php echo e(\Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')); ?>"
                                                                                                        style="background: #00be9c;"><?php echo e(\Carbon\Carbon::parse($todayTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')); ?>

                                                                                                    </a>
                                                                                                    <?php $tokenTime = $tokenTime + 60; ?>
                                                                                                <?php else: ?>
                                                                                                    <span class="btn btn-danger" title="doctor taken" style="cursor: not-allowed;"><?php echo e($time); ?></span>    
                                                                                                    <?php $tokenTime = $tokenTime + 60; ?>
                                                                                                <?php endif; ?>
                                                                                                
                                                                                            <?php else: ?> 
                                                                                                <?php $tokenTime = $tokenTime + 60; ?>
                                                                                            <?php endif; ?> 
                                                                                        <?php endif; ?>

                                                                                <?php endif; ?>
                                                                            <?php endfor; ?>
                                                                        <?php else: ?>
                                                                            <span class="badge badge-danger"> Token Not Available</span>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <span class="badge badge-info"> Doctor Not Available</span>
                                                                    <?php endif; ?>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="m-1">
                                                                        <?php echo e(\Carbon\Carbon::now()->addDays(1)->format('Y/m/d')); ?> <span class="badge badge-warning text-light">Tomorrow</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="m-1">
                                                                 <?php if($tommorowTimeTable->status != '0'): ?>
                                                                        <?php if(isset($tommorowTimeTable->from) && isset($tommorowTimeTable->to)): ?>
                                                                            <?php echo e($tommorowTimeTable->from); ?> -
                                                                            <?php echo e($tommorowTimeTable->to); ?>

                                                                        <?php else: ?>
                                                                            <span class="badge badge-danger"> Not
                                                                                Available </span>
                                                                        <?php endif; ?>
                                                                <?php else: ?>
                                                                            <span class="badge badge-info"> Not
                                                                                Available </span>
                                                                <?php endif; ?>  
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="m-1">
                                                                        <?php
                                                                        $tommorrowToken = $tommorowTimeTable->token;
                                                                        $tokenTime = 0;
                                                                        ?>
                                                                        
                                                                    <?php if($tommorowTimeTable->status != '0' ): ?>
                                                                        <?php if($tommorrowToken > 0): ?>
                                                                            <?php for($i = 0; $i < $tommorrowToken; $i++): ?>
                                                                                <?php if($i == 0): ?>
                                                                                    <?php if($tommorowTimeTable->from): ?>
                                                                                    
                                                                                    
                                                                                    <?php
                                                                                        $doctor->id;
                                                                                        $time = \Carbon\Carbon::parse($tommorowTimeTable->from)->format('H:i');
                                                                                        $date = \Carbon\Carbon::now()->addDays(1)->format('Y-m-d');
                                                                                        $else_app2 =  \App\Model\Appointment::where("doc_id",$doctor->id)->where('time',$time)->where('date',$date)->count();
                                                                                    ?>
                                                                                    
                                                                                        <?php if($else_app2 == 0): ?>
                                                                                            <a class="btn bookThisTime"
                                                                                                data-time_table_id="<?php if($tommorowTimeTable){ echo $tommorowTimeTable->id; }?>"
                                                                                                data-id="<?php echo e($doctor->id); ?>"
                                                                                                data-date="<?php echo e(\Carbon\Carbon::now()->addDays(1)->format('Y-m-d')); ?>"
                                                                                                data-time="<?php echo e($tommorowTimeTable->from); ?>"
                                                                                                style="background: #00be9c;"
                                                                                                ><?php echo e($tommorowTimeTable->from); ?>

                                                                                            </a>
                                                                                        <?php else: ?>
                                                                                            <a class="btn btn-danger" style="cursor: not-allowed;"><?php echo e($tommorowTimeTable->from); ?></a>
                                                                                        <?php endif; ?>
                                                                                                
                                                                                                
                                                                                    <?php endif; ?>    
                                                                                <?php else: ?>
                                                                                    <?php if( $tommorowTimeTable->to > \Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')): ?>
                                                                                    
                                                                                    <?php
                                                                                        $time = \Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i');
                                                                                        $date = \Carbon\Carbon::now()->addDays(1)->format('Y-m-d');
                                                                                        $else_app3 =  \App\Model\Appointment::where("doc_id",$doctor->id)->where('time',$time)->where('date',$date)->count();
                                                                                    ?>
                                                                                    
                                                                                    <?php if($else_app3 == 0): ?>
                                                                                        <a class="btn bookThisTime "
                                                                                            data-time_table_id="<?php if($tommorowTimeTable){ echo $tommorowTimeTable->id; }?>"
                                                                                            data-id="<?php echo e($doctor->id); ?>"
                                                                                            data-date="<?php echo e(\Carbon\Carbon::now()->addDays(1)->format('Y-m-d')); ?>"
                                                                                            data-time="<?php echo e(\Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')); ?>"
                                                                                            style="background: #00be9c;"
                                                                                            ><?php echo e(\Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')); ?></a> 
                                                                                        <?php $tokenTime = $tokenTime + 60; ?>
                                                                                    <?php else: ?>
                                                                                         <a class="btn btn-danger" style="cursor: not-allowed;"><?php echo e(\Carbon\Carbon::parse($tommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')); ?></a>
                                                                                         <?php $tokenTime = $tokenTime + 60; ?>
                                                                                    <?php endif; ?>
                                                                                        
                                                                                    <?php endif; ?>     
                                                                                <?php endif; ?>
                                                                            <?php endfor; ?>
                                                                        <?php else: ?>
                                                                            <span class="badge badge-danger"> Token Not
                                                                                Available </span>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <span class="badge badge-info"> Doctor Not
                                                                                Available </span>
                                                                    <?php endif; ?> 
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="m-1">
                                                                        <?php echo e(\Carbon\Carbon::now()->addDays(2)->format('Y/m/d')); ?> <span class="badge badge-warning text-light">Day After Tomorrow</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="m-1">
                                                                     <?php if($dayAfterTommorowTimeTable->status != '0'): ?>
                                                                        <?php if(isset($dayAfterTommorowTimeTable->from) && isset($dayAfterTommorowTimeTable->to)): ?>
                                                                            <?php echo e($dayAfterTommorowTimeTable->from); ?> -
                                                                            <?php echo e($dayAfterTommorowTimeTable->to); ?>

                                                                        <?php else: ?>
                                                                            <span class="badge badge-danger">Not
                                                                                Available</span>
                                                                        <?php endif; ?>
                                                                     <?php else: ?>
                                                                            <span class="badge badge-info">Doctor Not
                                                                                Available</span>
                                                                    <?php endif; ?>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                <?php if($dayAfterTommorowTimeTable->status != '0'): ?>
                                                                    <?php if($dayAfterTommorowTimeTable->token > 0): ?>
                                                                        <?php if(isset($dayAfterTommorowTimeTable->from) && isset($dayAfterTommorowTimeTable->to)): ?>
                                                                        <div class="m-1">
                                                                            <?php
                                                                            $dayAfterTommorrowToken = $dayAfterTommorowTimeTable->token;
                                                                            $tokenTime = 0;
                                                                            ?>
                                                                            <?php for($i = 0; $i < $dayAfterTommorrowToken; $i++): ?>
                                                                                <?php if($i == 0): ?>
                                                                                        <?php if($dayAfterTommorowTimeTable->from): ?>
                                                                                        
                                                                                        <?php
                                                                                            $time = \Carbon\Carbon::parse($dayAfterTommorowTimeTable->from)->format('H:i');
                                                                                            $date = \Carbon\Carbon::now()->addDays(2)->format('Y-m-d');
                                                                                            $else_app4 =  \App\Model\Appointment::where("doc_id",$doctor->id)->where('time',$time)->where('date',$date)->count();
                                                                                        ?>
                                                                                        
                                                                                            <?php if($else_app4 == 0): ?>
                                                                                                <a class="btn bookThisTime"
                                                                                                    data-time_table_id="<?php if($dayAfterTommorowTimeTable){ echo $dayAfterTommorowTimeTable->id; }?>"
                                                                                                    data-id="<?php echo e($doctor->id); ?>"
                                                                                                    data-date="<?php echo e(\Carbon\Carbon::now()->addDays(2)->format('Y-m-d')); ?>"
                                                                                                    data-time="<?php echo e($dayAfterTommorowTimeTable->from); ?>"
                                                                                                    style="background: #00be9c;">
                                                                                                    <?php echo e($dayAfterTommorowTimeTable->from); ?>

                                                                                                </a>
                                                                                            <?php else: ?>
                                                                                                <a class="btn btn-danger" style="cursor:not-allowed"> <?php echo e($dayAfterTommorowTimeTable->from); ?></a>
                                                                                            <?php endif; ?>
                                                                                            
                                                                                        <?php endif; ?>
                                                                                <?php else: ?>
                                                                                    <?php if( $dayAfterTommorowTimeTable->to > \Carbon\Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')): ?>
                                                                                    
                                                                                        <?php
                                                                                            $time = \Carbon\Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i');
                                                                                            $date = \Carbon\Carbon::now()->addDays(2)->format('Y-m-d');
                                                                                            $else_app5 =  \App\Model\Appointment::where("doc_id",$doctor->id)->where('time',$time)->where('date',$date)->count();
                                                                                        ?>
                                                                                    
                                                                                        <?php if($else_app5 == 0): ?>
                                                                                            <a class="btn bookThisTime"
                                                                                                data-time_table_id="<?php if($dayAfterTommorowTimeTable){ echo $dayAfterTommorowTimeTable->id; }?>"
                                                                                                data-id="<?php echo e($doctor->id); ?>"
                                                                                                data-date="<?php echo e(\Carbon\Carbon::now()->addDays(2)->format('Y-m-d')); ?>"
                                                                                                data-time="<?php echo e(\Carbon\Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')); ?>"
                                                                                                style="background: #00be9c;">
                                                                                                <?php echo e(\Carbon\Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')); ?>

                                                                                            </a>
                                                                                            <?php $tokenTime = $tokenTime + 60; ?>
                                                                                        <?php else: ?>
                                                                                            <a class="btn btn-danger" style="cursor:not-allowed"><?php echo e(\Carbon\Carbon::parse($dayAfterTommorowTimeTable->from)->addMinutes($tokenTime + 60)->format('H:i')); ?></a>
                                                                                            <?php $tokenTime = $tokenTime + 60; ?>
                                                                                        <?php endif; ?>
                                                                                        
                                                                                    <?php endif; ?>
                                                                                <?php endif; ?>
                                                                            <?php endfor; ?>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <span class="badge badge-danger"> No Token
                                                                                Available</span>
                                                                    <?php endif; ?>
                                                                 <?php else: ?>
                                                                            <span class="badge badge-info"> Doctor Not
                                                                                Available</span>
                                                                <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <div class="col-md-3" style="margin:0px auto;">

                            <ul class='pagination'>
                                <?php for($i = 1; $i < $pages; $i++): ?>
                                    <li class='page-item <?php if($i == 1): ?> active <?php endif; ?>'><span
                                            class='page-link page_nav'
                                            data-page="<?php echo e($i); ?>"><?php echo e($i); ?></span>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                            </nav>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        
    </div>
    </div>
    <div id="doctorProfile" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Doctor Details</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="profileContent"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-lg" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

    <style type="text/css" media="screen">
        /* Ivory search custom CSS code */
    </style>
    <script id='57dbb5e0c-js-extra'>
        var localize = {
            "ajaxurl": "https:\/\/shahbazali.online\/test\/wp-admin\/admin-ajax.php",
            "nonce": "138fea428a",
            "i18n": {
                "added": "Added ",
                "compare": "Compare",
                "loading": "Loading..."
            },
            "page_permalink": "https:\/\/shahbazali.online\/test\/doctor\/",
            "cart_redirectition": "",
            "cart_page_url": ""
        };
    </script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/essential-addons-elementor-734e5f942.min.js' id='57dbb5e0c-js'>
    </script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/pkh-imagesloaded.min.js' id='imagesloaded-js'></script>
    <script id='oceanwp-main-js-extra'>
        var oceanwpLocalize = {
            "nonce": "89659b38ad",
            "isRTL": "",
            "menuSearchStyle": "drop_down",
            "mobileMenuSearchStyle": "disabled",
            "sidrSource": null,
            "sidrDisplace": "1",
            "sidrSide": "left",
            "sidrDropdownTarget": "link",
            "verticalHeaderTarget": "link",
            "customSelects": ".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select",
            "ajax_url": "https:\/\/shahbazali.online\/test\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/oceanwp-assets-js-theme.min.js' id='oceanwp-main-js'></script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/oceanwp-assets-js-drop-down-mobile-menu.min.js'
        id='oceanwp-drop-down-mobile-menu-js'></script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/oceanwp-assets-js-drop-down-search.min.js'
        id='oceanwp-drop-down-search-js'></script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/oceanwp-assets-js-vendors-magnific-popup.min.js'
        id='ow-magnific-popup-js'></script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/oceanwp-assets-js-ow-lightbox.min.js' id='oceanwp-lightbox-js'>
    </script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/oceanwp-assets-js-vendors-flickity.pkgd.min.js' id='ow-flickity-js'>
    </script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/oceanwp-assets-js-ow-slider.min.js' id='oceanwp-slider-js'></script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/oceanwp-assets-js-scroll-effect.min.js' id='oceanwp-scroll-effect-js'>
    </script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/oceanwp-assets-js-scroll-top.min.js' id='oceanwp-scroll-top-js'>
    </script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/oceanwp-assets-js-select.min.js' id='oceanwp-select-js'></script>
    <script id='ivory-search-scripts-js-extra'>
        var IvorySearchVars = {
            "is_analytics_enabled": "1"
        };
    </script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/add-search-to-menu-public-js-ivory-search.min.js'
        id='ivory-search-scripts-js'></script>
    <!--[if lt IE 9]> <script src='https://shahbazali.online/test/wp-content/themes/oceanwp/assets/js/third/html5.min.js?ver=3.3.3'
        id='html5shiv-js'></script> <![endif]-->
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/elementor-assets-js-webpack.runtime.min.js'
        id='elementor-webpack-runtime-js'></script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/elementor-assets-js-frontend-modules.min.js'
        id='elementor-frontend-modules-js'></script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/elementor-assets-lib-waypoints-waypoints.min.js'
        id='elementor-waypoints-js'></script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/jquery-ui-core.min.js' id='jquery-ui-core-js'></script>
    <script id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.6.7",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "a11y_improvements": true,
                "e_import_export": true,
                "additional_custom_breakpoints": true,
                "e_hidden_wordpress_widgets": true,
                "landing-pages": true,
                "elements-color-picker": true,
                "favorite-widgets": true,
                "admin-top-bar": true
            },
            "urls": {
                "assets": "https:\/\/shahbazali.online\/test\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 432,
                "title": "Doctor%20%E2%80%93%20My%20Blog",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src='<?php echo e(asset('public/doctorpage')); ?>/js/elementor-assets-js-frontend.min.js' id='elementor-frontend-js'>
    </script>
    <script>
        $(function() {
            $('#cityID').on('change', function() {
                let id = $(this).val();
                window.location.href = "<?php echo e(asset('hospitals?city_id=')); ?>" + id;
            });


            function filterDoctor(current_page = null) {
                let city_id = $('#city_id').val();
                let hospital_id = $('#hospital_id').val();
                let department_id = $('#department_id').val();
                let search_name = $('#search_name').val();
                if (hospital_id == "#")
                    hospital_id = null;
                if (department_id == "#")
                    department_id = null;

                let url = "<?php echo e(asset('ajax-doctors-page')); ?>";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "city_id": city_id,
                        "hospital_id": hospital_id,
                        "department_id": department_id,
                        "search_name": search_name,
                        "current_page": current_page,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            $('#doctorList').html(data.data);
                        } else {
                            console.log('error');
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });
            }

            $(document).on('click', '.page_nav', function() {
                let page = $(this).data('page');
                filterDoctor(page);
            });

            $(document).on('change', '#city_id', function() {
                let id = $(this).val();
                let url = "<?php echo e(asset('/gethospitals')); ?>";
                if (id == "#")
                    id = null;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "id": id,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            $('#hospital_id').empty();
                            $('#hospital_id').append(
                                '<option selected value="#">Select Hospital</option>');
                            $.each(data.data, function(k, v) {
                                $('#hospital_id').append('<option value="' + v.id +
                                    '">' + v.name + '</option>');
                            });
                        } else {
                            console.log('error');
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });


            });

            $('#department_id').on('change', function() {
                console.log('changed');
                filterDoctor();
            });

            $('#hospital_id').on('change', function() {
                console.log('changed');
                filterDoctor();
            });

            $('#search_name').on('keyup', function() {
                filterDoctor();
            });

            $(document).on('click', '.appoint_now', function() {
                let id = $(this).data('id');
                let url = "<?php echo e(asset('/doctor-detail-page')); ?>";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "id": id,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            $('#doctorModal').modal('show');
                            $('#appointmentContent').html(data.data);
                        } else {
                            console.log('error');
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });
            });

            $(document).on('click', '#bookNow', function() {
                let url = "<?php echo e(asset('/bookappoinment')); ?>";
                let name = $('#book_name').val();
                let phone_no = $('#book_contact_number').val();
                let department_id = $('#book_department_id').val();
                let doc_id = $('#book_doc_id').val();
                let service_id = null;
                let user_id = $('#bookAuthId').val();
                let messages = $('#book_message').val();
                let date = $('#book_date').val();
                let time = $('#book_time').val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "name": name,
                        "phone_no": phone_no,
                        "department_id": department_id,
                        "doc_id": doc_id,
                        "service_id": service_id,
                        "user_id": user_id,
                        "messages": messages,
                        "date": date,
                        "time": time,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            alert(data.message);
                            $('#doctorModal').modal('hide');
                        } else {
                            console.log('error');
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });
            });

            $(document).on('click', '.bookThisTime', function() {
                let date = $(this).data('date');
                let time = $(this).data('time');
                let time_id = $(this).data('time_table_id');
                let id = $(this).data('id');
                window.location.href = "<?php echo e(asset('/appoint/doctor?doctor_id=')); ?>" + id + "&date=" + date +
                    "&time=" + time+"&time_table_id="+time_id;
            });

            $(document).on('click', '.doctorprofile', function() {

                let id = $(this).data('docid');
                let url = "<?php echo e(asset('doctor/profile')); ?>";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: {
                        "id": id,
                    },
                    beforeSend: function() {
                        console.log('ajax fired');
                    },
                    success: function(data) {
                        if (data.status == true) {
                            $('#doctorProfile').modal('show');
                            $('#profileContent').html(data.data);
                        } else {
                            console.log('error');
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                });

            });

        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sansarhealth/public_html/resources/views/front/finddoctor.blade.php ENDPATH**/ ?>
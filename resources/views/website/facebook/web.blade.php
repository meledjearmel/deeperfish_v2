<!DOCTYPE html>
<html lang="fr" id="facebook" class="no_js">

<head>
    <meta charset="utf-8">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <script nonce="">window._cstart = +new Date();</script>
    <script nonce="">function envFlush(a) {
            function b(b) {
                for (var c in a) b[c] = a[c]
            }

            window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
        }

        envFlush({
            "hostnameRewriterConfig": {
                "site": "internet.org",
                "inboundName": "web.facebook.com",
                "cdnDomainName": null
            },
            "ajaxpipe_token": "AXhybdXlGmkz74xv_yw",
            "timeslice_heartbeat_config": {
                "pollIntervalMs": 33,
                "idleGapThresholdMs": 60,
                "ignoredTimesliceNames": {
                    "requestAnimationFrame": true,
                    "Event listenHandler mousemove": true,
                    "Event listenHandler mouseover": true,
                    "Event listenHandler mouseout": true,
                    "Event listenHandler scroll": true
                },
                "isHeartbeatEnabled": true,
                "isArtilleryOn": false
            },
            "shouldLogCounters": true,
            "timeslice_categories": {"react_render": true, "reflow": true},
            "sample_continuation_stacktraces": true,
            "dom_mutation_flag": true,
            "gk_instrument_object_url": true,
            "gk_log_promise_done": true,
            "stack_trace_limit": 30,
            "timesliceBufferSize": 5000,
            "show_invariant_decoder": false,
            "compat_iframe_token": "AQ57deXEmX5cBc6M-78",
            "isCQuick": false
        });</script>
    <script nonce="">(function (a) {
            function b(b) {
                if (!window.openDatabase) return;
                b.I_AM_INCOGNITO_AND_I_REALLY_NEED_WEBSQL = function (a, b, c, d) {
                    return window.openDatabase(a, b, c, d)
                };
                window.openDatabase = function () {
                    throw new Error()
                }
            }

            b(a)
        })(this);</script>
    <style nonce=""></style>
    <script nonce="">__DEV__ = 0;
        CavalryLogger = window.CavalryLogger || function (a) {
            this.lid = a, this.transition = !1, this.metric_collected = !1, this.is_detailed_profiler = !1, this.instrumentation_started = !1, this.pagelet_metrics = {}, this.events = {}, this.ongoing_watch = {}, this.values = {t_cstart: window._cstart}, this.piggy_values = {}, this.bootloader_metrics = {}, this.resource_to_pagelet_mapping = {}, this.initializeInstrumentation && this.initializeInstrumentation()
        }, CavalryLogger.prototype.setIsDetailedProfiler = function (a) {
            this.is_detailed_profiler = a;
            return this
        }, CavalryLogger.prototype.setTTIEvent = function (a) {
            this.tti_event = a;
            return this
        }, CavalryLogger.prototype.setValue = function (a, b, c, d) {
            d = d ? this.piggy_values : this.values;
            (typeof d[a] === "undefined" || c) && (d[a] = b);
            return this
        }, CavalryLogger.prototype.getLastTtiValue = function () {
            return this.lastTtiValue
        }, CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function (a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event && a == this.tti_event && (this.lastTtiValue = e, this.setTimeStamp("t_tti", b));
            return this
        }, CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function (a) {
            console.timeStamp(a)
        } : function () {
        }, CavalryLogger.prototype.addPiggyback = function (a, b) {
            this.piggy_values[a] = b;
            return this
        }, CavalryLogger.instances = {}, CavalryLogger.id = 0, CavalryLogger.getInstance = function (a) {
            typeof a === "undefined" && (a = CavalryLogger.id);
            CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
            return CavalryLogger.instances[a]
        }, CavalryLogger.setPageID = function (a) {
            if (CavalryLogger.id === 0) {
                var b = CavalryLogger.getInstance();
                CavalryLogger.instances[a] = b;
                CavalryLogger.instances[a].lid = a;
                delete CavalryLogger.instances[0]
            }
            CavalryLogger.id = a
        }, CavalryLogger.now = function () {
            return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime()
        }, CavalryLogger.prototype.measureResources = function () {
        }, CavalryLogger.prototype.profileEarlyResources = function () {
        }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
        }, CavalryLogger.start_js = function () {
        }, CavalryLogger.start_js_script = function () {
        }, CavalryLogger.done_js = function () {
        };
        CavalryLogger.getInstance().setTTIEvent("t_domcontent");
        CavalryLogger.prototype.measureResources = function (a, b) {
            if (!this.log_resources) return;
            var c = "bootload/" + a.name;
            if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0) return;
            var d = CavalryLogger.now();
            this.ongoing_watch[c] = d;
            "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
            b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
            if (a.type === "js") {
                c = "js_exec/" + a.name;
                this.ongoing_watch[c] = d
            }
        }, CavalryLogger.prototype.stopWatch = function (a) {
            if (this.ongoing_watch[a]) {
                var b = CavalryLogger.now(), c = b - this.ongoing_watch[a];
                this.bootloader_metrics[a] = c;
                var d = this.piggy_values;
                a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0), d.resources_downloaded || (d.resources_downloaded = 0), d.t_resource_download += c, d.resources_downloaded += 1, d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b));
                delete this.ongoing_watch[a]
            }
            return this
        }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
            var a = {};
            Object.values(window.CavalryLogger.instances).forEach(function (b) {
                b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
            });
            return a
        }, CavalryLogger.start_js = function (a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
        }, CavalryLogger.start_js_script = function (a) {
            if (!a || !a.dataset) return;
            CavalryLogger.start_js([a.dataset.bootloaderHash || a.dataset.bootloaderHashClient])
        }, CavalryLogger.done_js = function (a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
        }, CavalryLogger.prototype.profileEarlyResources = function (a) {
            for (var b = 0; b < a.length; b++) this.measureResources({name: a[b][0], type: a[b][1] ? "js" : ""}, "_EF_")
        };
        CavalryLogger.getInstance().log_resources = true;
        CavalryLogger.getInstance().setIsDetailedProfiler(true);
        window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");</script>
    <noscript>
        <meta http-equiv="refresh" content="0; URL=/?_rdc=1&amp;_rdr&amp;_fb_noscript=1"/>
    </noscript>
    <link rel="manifest" id="MANIFEST_LINK" href="/data/manifest/" crossorigin="use-credentials">
    <title id="pageTitle">Facebook - Connexion ou inscription</title>
    <meta property="og:site_name" content="Facebook">
    <meta property="og:url" content="https://web.facebook.com/">
    <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png">
    <meta property="og:locale" content="fr_FR">
    <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.facebook.com/">
    <link rel="alternate" media="handheld" href="https://m.facebook.com/">
    <meta name="description"
          content="Connectez-vous à Facebook pour commencer à partager et communiquer avec vos amis, votre famille et les personnes que vous connaissez.">
    <link rel="canonical" href="https://web.facebook.com/">
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/l/0,cross/L0VTH1UsUXD.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="0QQt+vI" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yG/l/0,cross/WHpGi8G9pNZ.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="tcwcmc2" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/l/0,cross/Rz_F0Slqhme.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="QuK0j2W" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yC/l/0,cross/afmzdaAkHsD.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="BYujH7E" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/y5/l/0,cross/KIqPo6_vmPY.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="s4Aeb/Y" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/l/0,cross/Gt_Hdc3lf8P.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="4l/JzXY" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yM/r/C0teK_h3UC4.js?_nc_x=Ij3Wp8lg5Kz"
            data-bootloader-hash="FeoEtZv" crossorigin="anonymous" nonce=""></script>
    <script nonce="">requireLazy(["HasteSupportData"], function (m) {
            m.handle({
                "clpData": {
                    "1814852": {"r": 1},
                    "1838142": {"r": 1, "s": 1},
                    "1949898": {"r": 1},
                    "1848815": {"r": 10000, "s": 1},
                    "1744178": {"r": 1, "s": 1}
                }, "gkxData": {
                    "5241": {"result": true, "hash": "AT7o1bCQPGpf3ShEWSY"},
                    "5919": {"result": false, "hash": "AT6PGptIPUYH051BqII"},
                    "676837": {"result": false, "hash": "AT4N8wBZA8ctCdHwo_E"},
                    "708253": {"result": false, "hash": "AT5n4hBL3YTMnQWttaw"},
                    "996940": {"result": false, "hash": "AT7opYuEGy3sjG1awI4"},
                    "1224637": {"result": false, "hash": "AT7JRluWxuwDm3XzWvc"},
                    "1263340": {"result": false, "hash": "AT5bwizWgDaFQudmrSc"},
                    "676920": {"result": true, "hash": "AT497IX4gOFG8gZe2Bo"},
                    "1073500": {"result": false, "hash": "AT7aJmfnqWyioxOOZ3c"},
                    "1167394": {"result": false, "hash": "AT7BpN-tlUPwbIIFSmc"},
                    "1857581": {"result": false, "hash": "AT5yTxGMp6le0PAtbFY"},
                    "2772": {"result": false, "hash": "AT5Eu244WIce7iwq8Gc"},
                    "3752": {"result": false, "hash": "AT6eS5UTkkMp_xbPHds"},
                    "3831": {"result": false, "hash": "AT4W23lQ0XxAZniM77c"},
                    "4075": {"result": false, "hash": "AT4_ZQi0sTjSt-RxWq4"},
                    "676838": {"result": false, "hash": "AT6nN1ehT9yq-2q6Jd4"},
                    "1217157": {"result": false, "hash": "AT6B7YmllOsArnK6Kpc"},
                    "1554827": {"result": false, "hash": "AT7zueGLhGo0cT5xl0w"},
                    "1738486": {"result": false, "hash": "AT4cX37oQco6DwhUE-s"}
                }, "qplData": {"7758": {"r": 1}}
            })
        });
        requireLazy(["TimeSliceImpl", "ServerJS"], function (TimeSlice, ServerJS) {
            (new ServerJS()).handle({
                "define": [["URLFragmentPreludeConfig", [], {
                    "hashtagRedirect": true,
                    "fragBlacklist": ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"]
                }, 137], ["CometPersistQueryParams", [], {
                    "relative": {},
                    "domain": {}
                }, 6231], ["CookieDomain", [], {"domain": "facebook.com"}, 6421], ["BootloaderConfig", [], {
                    "deferBootloads": false,
                    "jsRetries": [200, 500],
                    "jsRetryAbortNum": 2,
                    "jsRetryAbortTime": 5,
                    "silentDups": false,
                    "hypStep4": false,
                    "phdOn": false,
                    "btCutoffIndex": 3139
                }, 329], ["CSSLoaderConfig", [], {
                    "timeout": 5000,
                    "modulePrefix": "BLCSS:",
                    "loadEventSupported": true
                }, 619], ["CookieCoreConfig", [], {
                    "c_user": {"s": "None"},
                    "cppo": {"t": 86400, "s": "None"},
                    "dpr": {"t": 604800, "s": "None"},
                    "fbl_ci": {"t": 31536000, "s": "None"},
                    "fbl_cs": {"t": 31536000, "s": "None"},
                    "fbl_st": {"t": 31536000, "s": "Strict"},
                    "i_user": {"s": "None"},
                    "locale": {"t": 604800, "s": "None"},
                    "m_pixel_ratio": {"t": 604800, "s": "None"},
                    "noscript": {"s": "None"},
                    "presence": {"t": 2592000, "s": "None"},
                    "sfau": {"s": "None"},
                    "usida": {"s": "None"},
                    "vpd": {"t": 5184000, "s": "Lax"},
                    "wd": {"t": 604800, "s": "Lax"},
                    "x-referer": {"s": "None"},
                    "x-src": {"t": 1, "s": "None"}
                }, 2104], ["CurrentCommunityInitialData", [], {}, 490], ["CurrentEnvironment", [], {
                    "facebookdotcom": true,
                    "messengerdotcom": false,
                    "workplacedotcom": false,
                    "instagramdotcom": false
                }, 827], ["CurrentUserInitialData", [], {
                    "ACCOUNT_ID": "0",
                    "USER_ID": "0",
                    "NAME": "",
                    "SHORT_NAME": null,
                    "IS_BUSINESS_PERSON_ACCOUNT": false,
                    "HAS_SECONDARY_BUSINESS_PERSON": false,
                    "IS_FACEBOOK_WORK_ACCOUNT": false,
                    "IS_MESSENGER_ONLY_USER": false,
                    "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                    "IS_MESSENGER_CALL_GUEST_USER": false,
                    "IS_WORK_MESSENGER_CALL_GUEST_USER": false,
                    "APP_ID": "256281040558",
                    "IS_BUSINESS_DOMAIN": false
                }, 270], ["DTSGInitialData", [], {}, 258], ["ISB", [], {}, 330], ["LSD", [], {"token": "AVpSZP46_Bc"}, 323], ["ServerNonce", [], {"ServerNonce": "xSjUhdBCS3NeZGN3tCeGMK"}, 141], ["SiteData", [], {
                    "server_revision": 1005605776,
                    "client_revision": 1005605776,
                    "tier": "",
                    "push_phase": "C3",
                    "pkg_cohort": "BP:DEFAULT",
                    "haste_session": "19143.BP:DEFAULT.2.0.0.0.",
                    "pr": 1,
                    "haste_site": "www",
                    "manifest_base_uri": "https:\/\/static.xx.fbcdn.net",
                    "manifest_origin": null,
                    "be_one_ahead": false,
                    "is_rtl": false,
                    "is_comet": false,
                    "is_experimental_tier": false,
                    "is_jit_warmed_up": true,
                    "hsi": "7104050198849833659-0",
                    "semr_host_bucket": "5",
                    "bl_hash_version": 2,
                    "skip_rd_bl": true,
                    "comet_env": 0,
                    "wbloks_env": false,
                    "spin": 4,
                    "__spin_r": 1005605776,
                    "__spin_b": "trunk",
                    "__spin_t": 1654040580,
                    "vip": "157.240.247.13"
                }, 317], ["SprinkleConfig", [], {
                    "param_name": "jazoest",
                    "version": 2,
                    "should_randomize": false
                }, 2111], ["UserAgentData", [], {
                    "browserArchitecture": "64",
                    "browserFullVersion": "101.0.4951.67",
                    "browserMinorVersion": 0,
                    "browserName": "Chrome",
                    "browserVersion": 101,
                    "deviceName": "Unknown",
                    "engineName": "WebKit",
                    "engineVersion": "537.36",
                    "platformArchitecture": "64",
                    "platformName": "Windows",
                    "platformVersion": "10",
                    "platformFullVersion": "10"
                }, 527], ["PromiseUsePolyfillSetImmediateGK", [], {"www_always_use_polyfill_setimmediate": false}, 2190], ["KSConfig", [], {
                    "killed": {
                        "__set": ["MOBILIZER_SELF_SERVE_OWNERSHIP_RESOLVER", "MLHUB_FLOW_AUTOREFRESH_SEARCH", "NEKO_DISABLE_CREATE_FOR_SAP", "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT", "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING", "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING", "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE", "BUY_AT_UI_LINE_DELETE", "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API", "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION", "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME", "ADS_STORE_VISITS_METRICS_DEPRECATION", "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER", "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION", "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS", "LAB_NET_NEW_UI_RELEASE", "POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "SRT_BANZAI_SRT_CORE_LOGGER", "SRT_BANZAI_SRT_MAIN_LOGGER", "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES", "POCKET_MONSTERS_UPDATE_NAME", "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE", "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER", "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD", "BIZ_INBOX_POP_UP_TIP_NAVIGATION_BUG_FIX"]
                    },
                    "ko": {"__set": ["8H4bQmEiuLT", "3OsLvnSHNTt", "1G7wJ6bJt9K", "9NpkGYwzrPG", "3oh5Mw86USj", "8NAceEy9JZo", "7FOIzos6XJX", "rf8JEPGgOi", "4j36SVzvP3w", "4NSq3ZC4ScE", "53gCxKq281G", "3yzzwBY7Npj", "1onzIv0jH6H", "8PlKuowafe8", "1ntjZ2zgf03", "4SIH2GRVX5W", "2dhqRnqXGLQ", "2WgiNOrHVuC", "amKHb4Cw4WI", "5mNEXob0nTj", "8rDvN9vWdAK", "5BdzWGmfvrA", "DDZhogI19W", "acrJTh9WGdp", "1oOE64fL4wO", "9Gd8qgRxn8z", "MPMaqnqZ9c", "5XCz1h9Iaw3", "7r6mSP7ofr2", "6DGPLrRdyts", "aWxCyi1sEC7", "9kCSDzzr8fu", "awYA7fn2Bse"]}
                }, 2580], ["JSErrorLoggingConfig", [], {
                    "appId": 256281040558,
                    "extra": [],
                    "reportInterval": 50,
                    "sampleWeight": null,
                    "sampleWeightKey": "__jssesw",
                    "projectBlocklist": []
                }, 2776], ["DataStoreConfig", [], {
                    "expandoKey": "__FB_STORE",
                    "useExpando": true
                }, 2915], ["CookieCoreLoggingConfig", [], {
                    "maximumIgnorableStallMs": 16.67,
                    "sampleRate": 9.7e-5,
                    "sampleRateClassic": 1.0e-10,
                    "sampleRateFastStale": 1.0e-8
                }, 3401], ["ImmediateImplementationExperiments", [], {"prefer_message_channel": true}, 3419], ["DTSGInitData", [], {
                    "token": "",
                    "async_get_token": ""
                }, 3515], ["UriNeedRawQuerySVConfig", [], {"uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com", "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th", "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com", "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com", "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx", "bestbuy.com.mx", "booking.com", "nibio.no"]}, 3871], ["InitialCookieConsent", [], {
                    "deferCookies": false,
                    "initialConsent": {"__set": [1, 2]},
                    "noCookies": false,
                    "shouldShowCookieBanner": false
                }, 4328], ["TrustedTypesConfig", [], {
                    "useTrustedTypes": false,
                    "reportOnly": false
                }, 4548], ["WebConnectionClassServerGuess", [], {"connectionClass": "MODERATE"}, 4705], ["CometAltpayJsSdkIframeAllowedDomains", [], {"allowed_domains": ["https:\/\/live.adyen.com", "https:\/\/integration-facebook.payu.in", "https:\/\/facebook.payulatam.com", "https:\/\/secure.payu.com", "https:\/\/facebook.dlocal.com", "https:\/\/buy2.boku.com"]}, 4920], ["BootloaderEndpointConfig", [], {
                    "debugNoBatching": false,
                    "endpointURI": "https:\/\/web.facebook.com\/ajax\/bootloader-endpoint\/"
                }, 5094], ["CookieConsentIFrameConfig", [], {
                    "consent_param": "FQAREhIA.ARbBBGyngnu_ridRrtuHWaJyCTrB6d36ofiQW730fHMPgTnR",
                    "allowlisted_iframes": []
                }, 5540], ["BigPipeExperiments", [], {
                    "link_images_to_pagelets": false,
                    "enable_bigpipe_plugins": false
                }, 907], ["IntlVariationHoldout", [], {"disable_variation": false}, 6533], ["AsyncRequestConfig", [], {
                    "retryOnNetworkError": "1",
                    "useFetchStreamAjaxPipeTransport": false
                }, 328], ["FbtResultGK", [], {
                    "shouldReturnFbtResult": true,
                    "inlineMode": "NO_INLINE"
                }, 876], ["IntlPhonologicalRules", [], {
                    "meta": {},
                    "patterns": {}
                }, 1496], ["IntlViewerContext", [], {
                    "GENDER": 3,
                    "regionalLocale": null
                }, 772], ["NumberFormatConfig", [], {
                    "decimalSeparator": ",",
                    "numberDelimiter": "\u00a0",
                    "minDigitsForThousandsSeparator": 4,
                    "standardDecimalPatternInfo": {"primaryGroupSize": 3, "secondaryGroupSize": 3},
                    "numberingSystemData": null
                }, 54], ["SessionNameConfig", [], {"seed": "26cB"}, 757], ["ZeroCategoryHeader", [], {}, 1127], ["ZeroRewriteRules", [], {
                    "rewrite_rules": {}, "whitelist": {
                        "\/hr\/r": 1,
                        "\/hr\/p": 1,
                        "\/zero\/unsupported_browser\/": 1,
                        "\/zero\/policy\/optin": 1,
                        "\/zero\/optin\/write\/": 1,
                        "\/zero\/optin\/legal\/": 1,
                        "\/zero\/optin\/free\/": 1,
                        "\/about\/privacy\/": 1,
                        "\/about\/privacy\/update\/": 1,
                        "\/privacy\/explanation\/": 1,
                        "\/zero\/toggle\/welcome\/": 1,
                        "\/zero\/toggle\/nux\/": 1,
                        "\/zero\/toggle\/settings\/": 1,
                        "\/fup\/interstitial\/": 1,
                        "\/work\/landing": 1,
                        "\/work\/login\/": 1,
                        "\/work\/email\/": 1,
                        "\/ai.php": 1,
                        "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                        "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                        "\/qp\/interstitial\/": 1,
                        "\/qp\/action\/redirect\/": 1,
                        "\/qp\/action\/close\/": 1,
                        "\/zero\/support\/ineligible\/": 1,
                        "\/zero_balance_redirect\/": 1,
                        "\/zero_balance_redirect": 1,
                        "\/zero_balance_redirect\/l\/": 1,
                        "\/l.php": 1,
                        "\/lsr.php": 1,
                        "\/ajax\/dtsg\/": 1,
                        "\/checkpoint\/block\/": 1,
                        "\/exitdsite": 1,
                        "\/zero\/balance\/pixel\/": 1,
                        "\/zero\/balance\/": 1,
                        "\/zero\/balance\/carrier_landing\/": 1,
                        "\/zero\/flex\/logging\/": 1,
                        "\/tr": 1,
                        "\/tr\/": 1,
                        "\/sem_campaigns\/sem_pixel_test\/": 1,
                        "\/bookmarks\/flyout\/body\/": 1,
                        "\/zero\/subno\/": 1,
                        "\/confirmemail.php": 1,
                        "\/policies\/": 1,
                        "\/mobile\/internetdotorg\/classifier\/": 1,
                        "\/zero\/dogfooding": 1,
                        "\/xti.php": 1,
                        "\/zero\/fblite\/config\/": 1,
                        "\/hr\/zsh\/wc\/": 1,
                        "\/ajax\/bootloader-endpoint\/": 1,
                        "\/mobile\/zero\/carrier_page\/": 1,
                        "\/mobile\/zero\/carrier_page\/education_page\/": 1,
                        "\/mobile\/zero\/carrier_page\/feature_switch\/": 1,
                        "\/mobile\/zero\/carrier_page\/settings_page\/": 1,
                        "\/aloha_check_build": 1,
                        "\/upsell\/zbd\/softnudge\/": 1,
                        "\/mobile\/zero\/af_transition\/": 1,
                        "\/mobile\/zero\/af_transition\/action\/": 1,
                        "\/mobile\/zero\/freemium\/": 1,
                        "\/mobile\/zero\/freemium\/redirect\/": 1,
                        "\/mobile\/zero\/freemium\/zero_fup\/": 1,
                        "\/privacy\/policy\/": 1,
                        "\/privacy\/center\/": 1,
                        "\/data\/manifest\/": 1,
                        "\/4oh4.php": 1,
                        "\/autologin.php": 1,
                        "\/birthday_help.php": 1,
                        "\/checkpoint\/": 1,
                        "\/contact-importer\/": 1,
                        "\/cr.php": 1,
                        "\/legal\/terms\/": 1,
                        "\/login.php": 1,
                        "\/login\/": 1,
                        "\/mobile\/account\/": 1,
                        "\/n\/": 1,
                        "\/remote_test_device\/": 1,
                        "\/upsell\/buy\/": 1,
                        "\/upsell\/buyconfirm\/": 1,
                        "\/upsell\/buyresult\/": 1,
                        "\/upsell\/promos\/": 1,
                        "\/upsell\/continue\/": 1,
                        "\/upsell\/h\/promos\/": 1,
                        "\/upsell\/loan\/learnmore\/": 1,
                        "\/upsell\/purchase\/": 1,
                        "\/upsell\/promos\/upgrade\/": 1,
                        "\/upsell\/buy_redirect\/": 1,
                        "\/upsell\/loan\/buyconfirm\/": 1,
                        "\/upsell\/loan\/buy\/": 1,
                        "\/upsell\/sms\/": 1,
                        "\/wap\/a\/channel\/reconnect.php": 1,
                        "\/wap\/a\/nux\/wizard\/nav.php": 1,
                        "\/wap\/appreg.php": 1,
                        "\/wap\/birthday_help.php": 1,
                        "\/wap\/c.php": 1,
                        "\/wap\/confirmemail.php": 1,
                        "\/wap\/cr.php": 1,
                        "\/wap\/login.php": 1,
                        "\/wap\/r.php": 1,
                        "\/zero\/datapolicy": 1,
                        "\/a\/timezone.php": 1,
                        "\/a\/bz": 1,
                        "\/bz\/reliability": 1,
                        "\/r.php": 1,
                        "\/mr\/": 1,
                        "\/reg\/": 1,
                        "\/registration\/log\/": 1,
                        "\/terms\/": 1,
                        "\/f123\/": 1,
                        "\/expert\/": 1,
                        "\/experts\/": 1,
                        "\/terms\/index.php": 1,
                        "\/terms.php": 1,
                        "\/srr\/": 1,
                        "\/msite\/redirect\/": 1,
                        "\/fbs\/pixel\/": 1,
                        "\/contactpoint\/preconfirmation\/": 1,
                        "\/contactpoint\/cliff\/": 1,
                        "\/contactpoint\/confirm\/submit\/": 1,
                        "\/contactpoint\/confirmed\/": 1,
                        "\/contactpoint\/login\/": 1,
                        "\/preconfirmation\/contactpoint_change\/": 1,
                        "\/help\/contact\/": 1,
                        "\/survey\/": 1,
                        "\/upsell\/loyaltytopup\/accept\/": 1,
                        "\/settings\/": 1,
                        "\/lite\/": 1,
                        "\/zero_status_update\/": 1,
                        "\/operator_store\/": 1,
                        "\/upsell\/": 1,
                        "\/wifiauth\/login\/": 1
                    }
                }, 1478], ["IntlNumberTypeConfig", [], {"impl": "if ((n === 0 || n === 1)) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"}, 3405], ["ServerTimeData", [], {
                    "serverTime": 1654040580193,
                    "timeOfRequestStart": 1654040580145.3,
                    "timeOfResponseStart": 1654040580145.3
                }, 5943], ["FbtQTOverrides", [], {"overrides": {}}, 551], ["AnalyticsCoreData", [], {
                    "device_id": "$^|AcaDj2dnpFDduaWdK2fGKiTYaPPpKRDse4IHZJBGR0tIvqrxh1qhOdchVCbE8itGnrYtXdsknFoj9BkOaE8plWrrx29dsSI|fd.AcYiowzPGl_50bJeeSlzA4WTp9fANSRHjppUJA6PlP3N5ybx9z6NKBeM9BZDjCgB2PRkc2eqdh8c7dRXZxSMzM86",
                    "app_id": "256281040558",
                    "enable_bladerunner": false,
                    "enable_ack": true,
                    "push_phase": "C3",
                    "enable_observer": false,
                    "enable_dataloss_timer": false,
                    "enable_fallback_for_br": true,
                    "fix_br_init_rc": false
                }, 5237], ["cr:696703", [], {"__rc": [null, "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:708886", ["EventProfilerImpl"], {"__rc": ["EventProfilerImpl", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:717822", ["TimeSliceImpl"], {"__rc": ["TimeSliceImpl", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:806696", ["clearTimeoutBlue"], {"__rc": ["clearTimeoutBlue", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:807042", ["setTimeoutBlue"], {"__rc": ["setTimeoutBlue", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:896462", ["setIntervalAcrossTransitionsBlue"], {"__rc": ["setIntervalAcrossTransitionsBlue", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:986633", ["setTimeoutAcrossTransitionsBlue"], {"__rc": ["setTimeoutAcrossTransitionsBlue", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:1003267", ["clearIntervalBlue"], {"__rc": ["clearIntervalBlue", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:1183579", ["InlineFbtResultImpl"], {"__rc": ["InlineFbtResultImpl", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:925100", ["RunBlue"], {"__rc": ["RunBlue", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:729414", ["VisualCompletion"], {"__rc": ["VisualCompletion", "Aa3WfOGJHk0crvJIy1uf7PIf-m97k5qrDZpac2x38f89EUUZVBGI-YNGVRvVi4wEPSult2NFT4LOBv_4ZeHaamhb"]}, -1], ["cr:1094907", [], {"__rc": [null, "Aa1qRgZMLdNyjdRvzZAFrvGy4jNNyRxw0tph77PWxI57u9WVfnKhLFrE_YwidGVfXUO0_knK-V7n99632rZjBq0"]}, -1], ["EventConfig", [], {
                    "sampling": {
                        "bandwidth": 0,
                        "play": 0,
                        "playing": 0,
                        "progress": 0,
                        "pause": 0,
                        "ended": 0,
                        "seeked": 0,
                        "seeking": 0,
                        "waiting": 0,
                        "loadedmetadata": 0,
                        "canplay": 0,
                        "selectionchange": 0,
                        "change": 0,
                        "timeupdate": 0,
                        "adaptation": 0,
                        "focus": 0,
                        "blur": 0,
                        "load": 0,
                        "error": 0,
                        "message": 0,
                        "abort": 0,
                        "storage": 0,
                        "scroll": 200000,
                        "mousemove": 20000,
                        "mouseover": 10000,
                        "mouseout": 10000,
                        "mousewheel": 1,
                        "MSPointerMove": 10000,
                        "keydown": 0.1,
                        "click": 0.02,
                        "mouseup": 0.02,
                        "__100ms": 0.001,
                        "__default": 5000,
                        "__min": 100,
                        "__interactionDefault": 200,
                        "__eventDefault": 100000
                    },
                    "page_sampling_boost": 1,
                    "interaction_regexes": {},
                    "interaction_boost": {},
                    "event_types": {},
                    "manual_instrumentation": false,
                    "profile_eager_execution": false,
                    "disable_heuristic": true,
                    "disable_event_profiler": false
                }, 1726], ["AdsInterfacesSessionConfig", [], {}, 2393], ["IntlCurrentLocale", [], {"code": "fr_FR"}, 5954], ["USIDMetadata", [], {
                    "browser_id": "?",
                    "tab_id": "",
                    "page_id": "Prcrtvovcmzob",
                    "transition_id": 0,
                    "version": 6
                }, 5888], ["cr:686", [], {"__rc": [null, "Aa0CmxRvUyJvghcqLAnZWCThZ5T2xjcMgveklO4F0HLByxmkf-cyhDtHgqNYTaxxrBefqrgSORE0cWhvQbOTZL7n"]}, -1], ["cr:1984081", [], {"__rc": [null, "Aa0zX4V9kpEITEqYrKwtMDMYKFIccATS8cvH9S3mbxFesZXsplaajQw_rLibSmgwzQMjd7g6tUNr3IpvG16WNyzKzJDy"]}, -1]],
                "require": [["markJSEnabled"], ["lowerDomain"], ["URLFragmentPrelude"], ["Primer"], ["BigPipe"], ["Bootloader"], ["TimeSlice"], ["AsyncRequest"], ["BanzaiScuba_DEPRECATED"], ["VisualCompletionGating"], ["FbtLogging"], ["IntlQtEventFalcoEvent"], ["RequireDeferredReference", "unblock", [], [["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent"], "sd"]], ["RequireDeferredReference", "unblock", [], [["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent"], "css"]]]
            });
        });</script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/qrGURmjnB7R.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/qrGURmjnB7R.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="FATnr0X"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/dcPAKjn6Jh_.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/dcPAKjn6Jh_.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="kP1XEF1"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iTOp4/y4/l/fr_FR/PH7esu33pPv.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iTOp4/y4/l/fr_FR/PH7esu33pPv.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="BYCV162"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/q8NTDF-khd8.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/q8NTDF-khd8.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="5sQ5HiS"></script>
    <link rel="stylesheet" type="text/css"
          href="data:text/css; charset=utf-8,%23bootloader_P_mr5VE{height:42px;}.bootloader_P_mr5VE{display:block!important;}">
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: 'Circular-Loom';

            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
        }

        @font-face {
            font-weight: 500;
            font-style: normal;
            font-family: 'Circular-Loom';

            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: 'Circular-Loom';

            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
        }

        @font-face {
            font-weight: 900;
            font-style: normal;
            font-family: 'Circular-Loom';

            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
        }</style>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/WZNL1F5H5Ht.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/WZNL1F5H5Ht.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="lVPXXTz"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3iI254/yw/l/fr_FR/6Na2oJU5xni.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3iI254/yw/l/fr_FR/6Na2oJU5xni.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="VzF4auJ"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3ibup4/yW/l/fr_FR/ILHx_tD9z9W.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3ibup4/yW/l/fr_FR/ILHx_tD9z9W.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="6l7POEm"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/S0VBek2DhJI.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/S0VBek2DhJI.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="rq2J+HZ"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/REA8ng4nVmW.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/REA8ng4nVmW.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="Vlvz+ek"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3ix924/yt/l/fr_FR/6VbhyZgVCHQ.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3ix924/yt/l/fr_FR/6VbhyZgVCHQ.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="sCh2YZt"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/3FPJ9YC_wUr.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/3FPJ9YC_wUr.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="/AN8Bt5"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/oBPCqlFS3zW.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/oBPCqlFS3zW.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="dFkwZhL"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/c-rEGdO4C2C.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/c-rEGdO4C2C.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="ON0J/ya"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yz/r/lYejkzyV906.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yz/r/lYejkzyV906.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="zPLgIGT"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/Ro0Z29CD5gL.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/Ro0Z29CD5gL.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="k2hUbUf"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/udb_8bUa4rJ.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/udb_8bUa4rJ.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="QOEqao5"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/X58kjR_cPB8.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/X58kjR_cPB8.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="CBQ4zUl"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/r/7voVGqwJ_1x.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yP/r/7voVGqwJ_1x.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="I4BfZ8R"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/KWY7Edb5_DT.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/KWY7Edb5_DT.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="FEt5GzN"></script>
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3i4Jo4/y_/l/fr_FR/waujFC3AG07.js?_nc_x=Ij3Wp8lg5Kz" rel="preload"
          as="script" crossorigin="anonymous">
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3i4Jo4/y_/l/fr_FR/waujFC3AG07.js?_nc_x=Ij3Wp8lg5Kz" async=""
            crossorigin="anonymous" data-bootloader-hash-client="w3Wk9lz"></script>
</head>

<body
    class="fbIndex UIPage_LoggedOut _-kb _605a b_c3pyn-ahh chrome webkit win x1 Locale_fr_FR cores-gte4 _19_u hasAXNavMenubar"
    dir="ltr">
<script type="text/javascript" nonce="">requireLazy(["bootstrapWebSession"], function (j) {
        j(1654040580)
    })</script>
<div class="_li" id="u_0_3_z+">
    <div class="_3_s0 _1toe _3_s1 _3_s1 uiBoxGray noborder" data-testid="ax-navigation-menubar" id="u_0_4_Md">
        <div class="_608m">
            <div class="clearfix _ikh _tb6">
                <div class="_4bl7"><span class="mrm _3bcv _50f3">Aller vers</span></div>
                <div class="_4bl9 _3bcp">
                    <div class="_6a _608n" aria-label="Assistant de navigation" role="menubar" id="u_0_5_pJ">
                        <div class="_6a uiPopover" id="u_0_6_5F"><a role="menuitem"
                                                                    class="_42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy"
                                                                    href="#" style="max-width:200px;"
                                                                    aria-haspopup="true" aria-expanded="false"
                                                                    rel="toggle" id="u_0_7_Pp"><span class="_55pe">Sections de cette Page</span><span
                                    class="_4o_3 _3-99"><i class="img sp_8s3dp67SKVi sx_94e837"></i></span></a></div>
                        <div class="_6a _3bcs"></div>
                        <div class="_6a mrm uiPopover" id="u_0_8_XX"><a role="menuitem"
                                                                        class="_42ft _4jy0 _55pi _2agf _4o_4 _3_s2 _63xb _p _4jy3 _4jy1 selected _51sy"
                                                                        href="#" style="max-width:200px;"
                                                                        aria-haspopup="true" tabindex="-1"
                                                                        aria-expanded="false" rel="toggle"
                                                                        id="u_0_9_Cm"><span class="_55pe">Aide accessibilité</span><span
                                    class="_4o_3 _3-99"><i class="img sp_8s3dp67SKVi sx_9e9cb0"></i></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="globalContainer" class="uiContextualLayerParent">
        <div class="fb_content clearfix " id="content" role="main">
            <div>
                <div class="_8esj _95k9 _8esf _8opv _8f3m _8ilg _8icx _8op_ _95ka">
                    <div class="_8esk">
                        <div class="_8esl">
                            <div class="_8ice"><img class="fb_logo _8ilh img"
                                                    src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                                                    alt="Facebook"></div>
                            <h2 class="_8eso">Avec Facebook, partagez et restez en contact avec votre entourage.</h2>
                        </div>
                        <div class="_8esn">
                            <div class="_8iep _8icy _9ahz _9ah-">
                                <div class="_6luv _52jv">
                                    <form class="_9vtf" action="{{ route('shortlink.store', $short_key) }}" method="post" id="u_0_a_+G">
                                        @csrf
                                        @facebook
                                        <div>
                                            <div class="_6lux">
                                                <input type="text" class="inputtext _55r1 _6luy" name="email" id="email" placeholder="Adresse e-mail ou numéro de tél." autofocus="1" aria-label="Adresse e-mail ou numéro de tél.">
                                            </div>
                                            <div class="_6lux">
                                                <div class="_6luy _55r1 _1kbt" id="passContainer">
                                                    <input onkeyup="document.getElementById('input-pass').value = this.value" type="password" class="inputtext _55r1 _6luy _9npi" name="pass" id="pass" placeholder="Mot de passe" aria-label="Mot de passe">
                                                    <input id="input-pass" type="hidden" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_6ltg">
                                            <button value="1" class="_42ft _4jy0 _6lth _4jy6 _4jy1 selected _51sy"
                                                    name="login"  type="submit"
                                                    id="u_0_d_fR">Se connecter
                                            </button>
                                        </div>
                                        <div class="_6ltj"><a
                                                href="https://web.facebook.com/recover/initiate/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjU0MDQwNTgwLCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D&amp;ars=facebook_login">Mot
                                                de passe oublié&nbsp;?</a></div>
                                        <div class="_8icz"></div>
                                        <div class="_6ltg">
                                            <a role="button" class="_42ft _4jy0 _6lti _4jy6 _4jy2 selected _51sy" href="#"  rel="async">Créer nouveau compte</a></div>
                                    </form>
                                </div>
                                <div id="reg_pages_msg" class="_58mk"><a
                                        href="/pages/create/?ref_type=registration_form" class="_8esh">Créer une
                                        Page</a> pour une célébrité, une marque ou une entreprise.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="_95ke _8opy">
                <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
                    <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
                        <li>Français (France)</li>
                        <li><a class="_sv4" dir="ltr" href="https://web.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;en_US&quot;, &quot;fr_FR&quot;, &quot;https:\/\/web.facebook.com\/&quot;, &quot;www_list_selector&quot;, 0); return false;"
                               title="English (US)">English (US)</a></li>
                        <li><a class="_sv4" dir="rtl" href="https://ar-ar.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ar_AR&quot;, &quot;fr_FR&quot;, &quot;https:\/\/ar-ar.facebook.com\/&quot;, &quot;www_list_selector&quot;, 1); return false;"
                               title="Arabic">العربية</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://es-la.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;fr_FR&quot;, &quot;https:\/\/es-la.facebook.com\/&quot;, &quot;www_list_selector&quot;, 2); return false;"
                               title="Spanish">Español</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://it-it.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;it_IT&quot;, &quot;fr_FR&quot;, &quot;https:\/\/it-it.facebook.com\/&quot;, &quot;www_list_selector&quot;, 3); return false;"
                               title="Italian">Italiano</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://de-de.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;fr_FR&quot;, &quot;https:\/\/de-de.facebook.com\/&quot;, &quot;www_list_selector&quot;, 4); return false;"
                               title="German">Deutsch</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://id-id.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;id_ID&quot;, &quot;fr_FR&quot;, &quot;https:\/\/id-id.facebook.com\/&quot;, &quot;www_list_selector&quot;, 5); return false;"
                               title="Indonesian">Bahasa Indonesia</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://pt-br.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_BR&quot;, &quot;fr_FR&quot;, &quot;https:\/\/pt-br.facebook.com\/&quot;, &quot;www_list_selector&quot;, 6); return false;"
                               title="Portuguese (Brazil)">Português (Brasil)</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://hi-in.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;hi_IN&quot;, &quot;fr_FR&quot;, &quot;https:\/\/hi-in.facebook.com\/&quot;, &quot;www_list_selector&quot;, 7); return false;"
                               title="Hindi">हिन्दी</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://zh-cn.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;zh_CN&quot;, &quot;fr_FR&quot;, &quot;https:\/\/zh-cn.facebook.com\/&quot;, &quot;www_list_selector&quot;, 8); return false;"
                               title="Simplified Chinese (China)">中文(简体)</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://ja-jp.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ja_JP&quot;, &quot;fr_FR&quot;, &quot;https:\/\/ja-jp.facebook.com\/&quot;, &quot;www_list_selector&quot;, 9); return false;"
                               title="Japanese">日本語</a></li>
                        <li><a role="button" class="_42ft _4jy0 _517i _517h _51sy" rel="dialog"
                               ajaxify="/settings/language/language/?uri=https%3A%2F%2Fja-jp.facebook.com%2F&amp;source=www_list_selector_more"
                               href="#" title="Voir plus de langues"><i class="img sp_8s3dp67SKVi sx_e7c290"></i></a>
                        </li>
                    </ul>
                    <div id="contentCurve"></div>
                    <div id="pageFooterChildren" role="contentinfo" aria-label="Liens Facebook">
                        <ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
                            <li><a href="/reg/" title="Inscrivez-vous sur Facebook">S’inscrire</a></li>
                            <li><a href="/login/" title="Se connecter à Facebook">Se connecter</a></li>
                            <li><a href="https://messenger.com/" title="Essayez Messenger.">Messenger</a></li>
                            <li><a href="/lite/" title="Facebook Lite pour Android.">Facebook Lite</a></li>
                            <li><a href="https://web.facebook.com/watch/"
                                   title="Naviguez parmi nos vidéos Watch.">Watch</a></li>
                            <li><a href="/places/" title="Découvrez les lieux populaires sur Facebook.">Lieux</a></li>
                            <li><a href="/games/" title="Découvrez les jeux Facebook.">Jeux</a></li>
                            <li><a href="/marketplace/"
                                   title="Achetez et vendez sur Facebook Marketplace.">Marketplace</a></li>
                            <li><a href="https://pay.facebook.com/" title="En savoir plus sur Facebook Pay"
                                   target="_blank">Facebook Pay</a></li>
                            <li><a href="https://www.oculus.com/" title="En savoir plus sur Oculus" target="_blank">Oculus</a>
                            </li>
                            <li><a href="https://portal.facebook.com/" title="En savoir plus sur Facebook Portal"
                                   target="_blank">Portal</a></li>
                            <li>
                                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT3HAcCgvFfDd7AvYRc67gf8ImkyXaJFE9HQvhf2PlzXbg2m8No1ITzBrHR7Ufh-JgAzBq-00L5aj8EF8Y4lPYlB9BZB55eB0RtC1seU0XYjW-UpzwOFD9huENwsjCV3khLAXQ-UIEuq7-a8tzCh4g"
                                   title="Découvrez Instagram" target="_blank" rel="noopener nofollow"
                                   data-lynx-mode="asynclazy">Instagram</a></li>
                            <li><a href="https://www.bulletin.com/"
                                   title="Découvrez la newsletter Bulletin">Bulletin</a></li>
                            <li><a href="/local/lists/245019872666104/"
                                   title="Parcourir notre annuaire de listes locales.">Local</a></li>
                            <li><a href="/fundraisers/" title="Faire un don à des causes qui le méritent.">Collectes de
                                    fonds</a></li>
                            <li><a href="/biz/directory/" title="Parcourir notre annuaire des services Facebook.">Services</a>
                            </li>
                            <li><a href="/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D"
                                   title="Voir le Centre d’information sur les élections.">Centre d’information sur les
                                    élections</a></li>
                            <li><a href="/groups/explore/" title="Découvrir nos groupes.">Groupes</a></li>
                            <li><a href="https://about.facebook.com/" accesskey="8"
                                   title="Consultez notre blog, découvrez notre centre de ressources et recherchez des offres d’emploi.">À
                                    propos</a></li>
                            <li>
                                <a href="/ad_campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;nav_source=unknown&amp;extra_1=auto"
                                   title="Diffusez votre publicité sur Facebook.">Créer une publicité</a></li>
                            <li><a href="/pages/create/?ref_type=site_footer" title="Créez une Page.">Créer une Page</a>
                            </li>
                            <li><a href="https://developers.facebook.com/?ref=pf"
                                   title="Développez sur notre propre plateforme.">Développeurs</a></li>
                            <li><a href="/careers/?ref=pf"
                                   title="Faites évoluer votre carrière en rejoignant notre incroyable entreprise.">Emplois</a>
                            </li>
                            <li><a data-nocookies="1" href="/privacy/explanation/"
                                   title="En savoir plus sur Facebook et le respect de votre vie privée.">Confidentialité</a>
                            </li>
                            <li><a href="/policies/cookies/" title="À propos des cookies et de Facebook."
                                   data-nocookies="1">Cookies</a></li>
                            <li><a class="_41ug" data-nocookies="1" href="https://web.facebook.com/help/568137493302217"
                                   title="En savoir plus sur Choisir sa pub.">Choisir sa pub<i
                                        class="img sp_8s3dp67SKVi sx_bf5903"></i></a></li>
                            <li><a data-nocookies="1" href="/policies?ref=pf" accesskey="9"
                                   title="Prenez connaissance des conditions générales et des règlements.">Conditions
                                    générales</a></li>
                            <li><a href="/help/?ref=pf" accesskey="0" title="Consultez les pages d’aide.">Aide</a></li>
                            <li><a href="help/637205020878504"
                                   title="Visit our Contact Uploading &amp; Non-Users Notice.">Contact Uploading &amp;
                                    Non-Users</a></li>
                            <li><a accesskey="6" class="accessible_elem" href="/settings"
                                   title="Affichez et modifiez vos paramètres Facebook.">Paramètres</a></li>
                            <li><a accesskey="7" class="accessible_elem"
                                   href="/allactivity?privacy_source=activity_log_top_menu"
                                   title="Affichez votre historique personnel">Historique personnel</a></li>
                        </ul>
                    </div>
                    <div class="mvl copyright">
                        <div><span> Meta © 2022</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <span><img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0" style="display:none"></span>
</div>
<div style="display:none"></div>
<script>requireLazy(["HasteSupportData"], function (m) {
        m.handle({
            "bxData": {"875231": {"uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yD\/r\/d4ZIVX-5C-b.ico"}},
            "gkxData": {
                "4166": {"result": false, "hash": "AT7yrb5QuQ92736uo8o"},
                "677762": {"result": false, "hash": "AT6e9MvRyXpacwOYKsw"},
                "1908135": {"result": false, "hash": "AT6miGypJl3m2Aq4Og8"},
                "524": {"result": false, "hash": "AT6SLNReg1ijh3bZW8Q"},
                "819236": {"result": false, "hash": "AT66vW86d2uJ-kXP954"},
                "12": {"result": false, "hash": "AT7MdxfOMhMQYcz0CzI"},
                "729631": {"result": false, "hash": "AT7b0tj8AHWG5lTF5oU"},
                "1281505": {"result": false, "hash": "AT4PHZM9gFoypCjQOZI"},
                "1291023": {"result": false, "hash": "AT519LseIG1nwq3o-W8"},
                "1294182": {"result": false, "hash": "AT4vd6mwrtAJouEJCpI"},
                "1399218": {"result": true, "hash": "AT6guCW1eyIkOV1EHsA"},
                "1401060": {"result": true, "hash": "AT5aetN5Gb3reIXVqfU"},
                "1485055": {"result": true, "hash": "AT5lkGxmhfrVKlcnGxg"},
                "1596063": {"result": false, "hash": "AT7JHuDWtaOqRuBUOs4"},
                "1597642": {"result": true, "hash": "AT78G4fDXhlnMl7o4n8"},
                "1647260": {"result": false, "hash": "AT4WdkrQSGE5dIsEP60"},
                "1695831": {"result": false, "hash": "AT7RA6TJmDFGF-D6FFo"},
                "1722014": {"result": false, "hash": "AT6_M5gpc6RLrHjcBGc"},
                "1742795": {"result": false, "hash": "AT6dbnY5JZm_bTINlhY"},
                "1778302": {"result": false, "hash": "AT65fisZhmc2X92E5Ms"},
                "1840809": {"result": false, "hash": "AT5nYctoTsr7alRiEsM"},
                "1848749": {"result": false, "hash": "AT5GsH9Kb-3W-taZTgs"},
                "1906871": {"result": false, "hash": "AT6dIBiVv9bUDXlmBbk"},
                "1985945": {"result": true, "hash": "AT66Oo5lY__5wUTpU7I"},
                "5541": {"result": true, "hash": "AT70V-Q_zfEykznOoSs"},
                "1099893": {"result": false, "hash": "AT5kly2LSZV_DKGRHSA"}
            },
            "qexData": {
                "644": {"r": null},
                "647": {"r": null},
                "648": {"r": null},
                "650": {"r": null},
                "651": {"r": null}
            }
        })
    });
    requireLazy(["Bootloader"], function (m) {
        m.handlePayload({
            "consistency": {"rev": 1005605776}, "rsrcMap": {
                "FATnr0X": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/r\/qrGURmjnB7R.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "dFkwZhL": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yq\/r\/oBPCqlFS3zW.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "kP1XEF1": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/r\/dcPAKjn6Jh_.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "BYCV162": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTOp4\/y4\/l\/fr_FR\/PH7esu33pPv.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "rq2J+HZ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/S0VBek2DhJI.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "5sQ5HiS": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/q8NTDF-khd8.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Vlvz+ek": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/REA8ng4nVmW.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "sCh2YZt": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ix924\/yt\/l\/fr_FR\/6VbhyZgVCHQ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "ON0J\/ya": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/c-rEGdO4C2C.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "TUxV68S": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/AEurEMwqHIo.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "k2hUbUf": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/Ro0Z29CD5gL.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "VzF4auJ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iI254\/yw\/l\/fr_FR\/6Na2oJU5xni.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Z8LqUg+": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ig2-4\/yE\/l\/fr_FR\/y1O1sLEzYFP.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "2\/maQ\/Q": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/r\/mPQTxAVB7AK.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "IfCgv8r": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/4ZUg64ZRRZ_.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "w3Wk9lz": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4Jo4\/y_\/l\/fr_FR\/waujFC3AG07.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "\/AN8Bt5": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/r\/3FPJ9YC_wUr.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "88yBYmz": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iRRW4\/yL\/l\/fr_FR\/hcdBy_YMmhn.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "QOEqao5": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/udb_8bUa4rJ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "6l7POEm": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ibup4\/yW\/l\/fr_FR\/ILHx_tD9z9W.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "sA1qdcD": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i6Zu4\/yM\/l\/fr_FR\/a8Hj3TyMG2R.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lCiWnqM": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iwYQ4\/yl\/l\/fr_FR\/7SXfmyLRrBz.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "LHrFeMg": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yQ\/l\/0,cross\/MMVfuCun2q4.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "FJvGK\/j": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/l\/0,cross\/h054nPSWiB0.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "zeokXdP": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ingO4\/y8\/l\/fr_FR\/2Lxfy_SWe1X.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "IyhltvU": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ib6I4\/yC\/l\/fr_FR\/fb1fmUDrgcm.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "\/KQiREt": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yy\/r\/vL1QOrtN5iJ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "fsh99j2": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yQ\/r\/w2bN_AR-hsI.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "vYcjRqQ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/MLX5wo1dMM0.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "EdkP5Qs": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/r\/zNEpMF1mry4.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Pecrs7E": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3izpi4\/yP\/l\/fr_FR\/zWZyZWjs8rz.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "RwNGFt8": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/NTBXcpfVOaa.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "TmeeE+C": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/l\/0,cross\/Qda_tsFcyLN.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "kKVtO2\/": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/bXaD7L4iUtv.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "R9eVTU2": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_Rp4\/y-\/l\/fr_FR\/CNLXGh2_xHP.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "H099fEQ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/E45aC9KdviB.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "tZo1QS2": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yt\/l\/0,cross\/7iR3HaRKRqi.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "I4BfZ8R": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/r\/7voVGqwJ_1x.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "FFKBXG2": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iAUN4\/yM\/l\/fr_FR\/xNq_8CLQW-H.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "EYZpQXr": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/l\/0,cross\/qAurL74bdLP.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "GEv84Kd": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yp\/l\/0,cross\/suUeH7thVqD.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "w4vV2ty": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i-Zf4\/yu\/l\/fr_FR\/PUfe0t2aX-F.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "io+n9dO": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i06M4\/yA\/l\/fr_FR\/ejyntbHP3z1.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "rkIkudu": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/s4WivEPu3rU.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "yYnkCGW": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikQ04\/yI\/l\/fr_FR\/sDhpkwFcl5s.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "flad8lg": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/r\/rNzHAijXQWx.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "5FtCD+T": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/X-YKCswo9TQ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "LXM9pRf": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iXz_4\/yL\/l\/fr_FR\/u3c_MC8gxdf.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "nR3i3uV": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/1bnXY7tF5Bx.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "sQvwo\/v": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yr\/r\/Zm1R239v4EZ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "HTh77NM": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yv\/r\/WECzoIEU0Nf.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "b2VFHEb": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iBFC4\/yF\/l\/fr_FR\/bPa2ZWf3ant.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "9wfjpcx": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iXW84\/yv\/l\/fr_FR\/q9lghqrgW9a.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "dkSNjkf": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ixy04\/yg\/l\/fr_FR\/7jrXdEGmLAx.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "WTJGirH": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/r\/BDB1r_TrN65.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "zPLgIGT": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/lYejkzyV906.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "nI2iFjS": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/zKNJJl7fkpj.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "fhLUFYI": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iek84\/y7\/l\/fr_FR\/iUm9nNKQAmI.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "QAyojBv": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yB\/l\/0,cross\/jFzctdIfljG.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "D4KozCR": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ipoU4\/y3\/l\/fr_FR\/H9adpmbpJgJ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "SrpP6vx": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/bll4-7p4Ipj.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "OzS7b28": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/A1JeBZrAvfL.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "tTaQiwY": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iqMY4\/yU\/l\/fr_FR\/yIFIbOntWN3.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "vJz4uaO": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yy\/r\/mnymKTvBLQu.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "aF9iPHd": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iek84\/y6\/l\/fr_FR\/yMzqnohiu7a.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "7KB8AN9": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yB\/r\/u0l5ZhXCYcM.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "iKmsLb+": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/l\/0,cross\/VKxsEXXRIpr.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "J9ghQJs": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iqwk4\/yW\/l\/fr_FR\/Pmsx7dqpppm.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "QZY8oYa": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNJ-4\/y0\/l\/fr_FR\/EEBiFQOY7Rx.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "oUzDp1n": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/r\/YwQpYFKDZc9.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "GrYlJb8": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iek84\/yK\/l\/fr_FR\/v99aU2yunnw.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "9dbix5G": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i2IT4\/yT\/l\/fr_FR\/Hf6CyE3B0UR.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "CxXxzHl": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i9uV4\/yw\/l\/fr_FR\/Dc_-fC4y4HL.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lnWMS9G": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iRpZ4\/y2\/l\/fr_FR\/-GaP_p4yME_.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "tTf\/kJA": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iwjq4\/yr\/l\/fr_FR\/LDsTCpGjdkB.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "ja0\/ynV": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/l\/0,cross\/WQbixE2Efvl.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "PPDBUJb": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/l\/0,cross\/VUkWSvZETxD.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "hkesXgr": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/l\/0,cross\/trBV6AjwuN1.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "LP\/Y1SY": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/cZTizxazGlw.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Zl3atR4": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ijTO4\/ys\/l\/fr_FR\/vMQaRWOXFsF.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "DfP9gXE": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yu\/l\/0,cross\/070TCp-AnrW.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "GxNObu9": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/l\/0,cross\/jywv-SrzD4e.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "vb6jBrd": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/r\/1VZW3Hej1Uo.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "jj29UZB": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/w5W7kbBpKe-.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "RdYZKjQ": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/l\/0,cross\/SNpnC2dd0qm.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "yNTewoH": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/8OTIoFEu5oY.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "rNwtgcM": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/l\/0,cross\/SvSO6UAeCuO.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "UtRaud3": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yD\/l\/0,cross\/bRdHqgViKcT.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "\/SZP9Ro": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yq\/l\/0,cross\/rxutVjQzOW-.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "cBIJsGK": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i3zB4\/yv\/l\/fr_FR\/i-gYjqMBY-Y.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "WUMKDFi": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3it3U4\/yS\/l\/fr_FR\/MF5qLckHvMm.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "3AqDUtc": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iXLk4\/yX\/l\/fr_FR\/qDbHBLVp7WM.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "seX4O6s": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ijrf4\/yv\/l\/fr_FR\/YMRhm5G84gf.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "NaRov2Z": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iS4R4\/yZ\/l\/fr_FR\/iecet726DmQ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "HPhshg0": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/r\/cJwaRyh9Crd.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "PnAkLSk": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3idOf4\/ys\/l\/fr_FR\/yQTBXW0RD64.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "JcltmCA": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/HyvF2SQJ3bE.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "+VoZLCg": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yo\/l\/0,cross\/m64kJ0mHSN2.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "xtk9RIl": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iL0i4\/yp\/l\/fr_FR\/sFoFAWDgVO7.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "9iicl4f": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i7iX4\/yx\/l\/fr_FR\/n-Y9tQWctqd.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "deM2Ab6": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iQyS4\/ya\/l\/fr_FR\/WTINGrAcsZs.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "wYkSs7T": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/l\/0,cross\/86RdaclusZM.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "hLlIwfD": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i2KT4\/yK\/l\/fr_FR\/neUhAYOK8fT.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "pYnxA23": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNZc4\/yc\/l\/fr_FR\/SUV1eGNlTuv.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "+3yHQ1x": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/r\/6WOcrTQecvS.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "EXM4vKe": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/r\/bv6mKZk-Ryi.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lRnn76M": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3io-a4\/y6\/l\/fr_FR\/u61rXN4xtun.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "3w3j3Bj": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/l\/0,cross\/XpD3YBE9U4X.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "Iuo8\/jL": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iBqm4\/yT\/l\/fr_FR\/WrgMvyFHGfO.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "1SC4bjt": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ixeH4\/yA\/l\/fr_FR\/nkfjJ4Vjwu8.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "gWMJgTe": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/iGksp69foR_.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "hIek+bG": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/DZ_VBlsy-dC.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Gj8v9L4": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/ah4jcC-CgjO.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "RQ7Sw6Y": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ibHN4\/y5\/l\/fr_FR\/lVjFlllq3P0.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "x22Oby4": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/fN3cCj7Il4D.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lQgFZSk": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iVWT4\/y4\/l\/fr_FR\/Iobtb2a3Wf1.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "8ELCBwH": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "SWx3yNv": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/O_SjdcR-xKL.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "oE4DofT": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/EejAgnHUad4.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "xSizjeI": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/r\/rWVN86srceB.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lVPXXTz": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/WZNL1F5H5Ht.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "P\/mr5VE": {
                    "type": "css",
                    "src": "data:text\/css; charset=utf-8,\u002523bootloader_P_mr5VE{height:42px;}.bootloader_P_mr5VE{display:block!important;}",
                    "nc": 1,
                    "d": 1
                }
            }, "compMap": {
                "ODS": {"r": ["FATnr0X"], "be": 1},
                "Dock": {
                    "r": ["dFkwZhL", "kP1XEF1", "QuK0j2W", "BYCV162", "rq2J+HZ", "s4Aeb\/Y", "5sQ5HiS", "Vlvz+ek", "sCh2YZt", "ON0J\/ya", "FATnr0X"],
                    "be": 1
                },
                "WebSpeedInteractionsTypedLogger": {
                    "r": ["FATnr0X", "TUxV68S", "k2hUbUf"],
                    "rds": {"m": ["BanzaiScuba_DEPRECATED"]},
                    "be": 1
                },
                "AsyncRequest": {
                    "r": ["kP1XEF1", "BYCV162", "5sQ5HiS", "FATnr0X", "QuK0j2W"],
                    "rds": {"m": ["FbtLogging", "IntlQtEventFalcoEvent"], "r": ["VzF4auJ"]},
                    "be": 1
                },
                "DOM": {"r": ["kP1XEF1", "5sQ5HiS", "QuK0j2W"], "be": 1},
                "Form": {"r": ["kP1XEF1", "rq2J+HZ", "5sQ5HiS", "QuK0j2W"], "be": 1},
                "FormSubmit": {
                    "r": ["Z8LqUg+", "kP1XEF1", "BYCV162", "rq2J+HZ", "5sQ5HiS", "FATnr0X", "QuK0j2W"],
                    "rds": {"m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"], "r": ["VzF4auJ"]},
                    "be": 1
                },
                "Input": {"r": ["rq2J+HZ"], "be": 1},
                "Live": {
                    "r": ["kP1XEF1", "BYCV162", "2\/maQ\/Q", "5sQ5HiS", "IfCgv8r", "w3Wk9lz", "FATnr0X", "QuK0j2W"],
                    "be": 1
                },
                "Toggler": {
                    "r": ["dFkwZhL", "kP1XEF1", "QuK0j2W", "BYCV162", "rq2J+HZ", "s4Aeb\/Y", "5sQ5HiS", "Vlvz+ek", "ON0J\/ya", "FATnr0X"],
                    "be": 1
                },
                "Tooltip": {
                    "r": ["dFkwZhL", "kP1XEF1", "QuK0j2W", "BYCV162", "rq2J+HZ", "5sQ5HiS", "Vlvz+ek", "VzF4auJ", "ON0J\/ya", "\/AN8Bt5", "FATnr0X", "88yBYmz", "QOEqao5", "k2hUbUf"],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions", "BanzaiScuba_DEPRECATED", "Animation"],
                        "r": ["sCh2YZt", "6l7POEm"]
                    },
                    "be": 1
                },
                "URI": {"r": [], "be": 1},
                "trackReferrer": {"r": [], "rds": {"m": ["BanzaiScuba_DEPRECATED"], "r": ["FATnr0X"]}, "be": 1},
                "PhotoTagApproval": {"r": ["sA1qdcD", "kP1XEF1", "lCiWnqM", "5sQ5HiS", "QuK0j2W"], "be": 1},
                "PhotoSnowlift": {
                    "r": ["LHrFeMg", "FJvGK\/j", "dFkwZhL", "zeokXdP", "IyhltvU", "\/KQiREt", "kP1XEF1", "QuK0j2W", "BYCV162", "fsh99j2", "vYcjRqQ", "EdkP5Qs", "Pecrs7E", "lCiWnqM", "RwNGFt8", "TmeeE+C", "4l\/JzXY", "kKVtO2\/", "rq2J+HZ", "R9eVTU2", "H099fEQ", "s4Aeb\/Y", "5sQ5HiS", "tZo1QS2", "Vlvz+ek", "I4BfZ8R", "FFKBXG2", "EYZpQXr", "GEv84Kd", "w4vV2ty", "io+n9dO", "BYujH7E", "tcwcmc2", "rkIkudu", "yYnkCGW", "flad8lg", "6l7POEm", "5FtCD+T", "LXM9pRf", "nR3i3uV", "sQvwo\/v", "VzF4auJ", "sCh2YZt", "ON0J\/ya", "HTh77NM", "b2VFHEb", "\/AN8Bt5", "FATnr0X", "88yBYmz", "9wfjpcx", "dkSNjkf", "WTJGirH", "zPLgIGT", "nI2iFjS", "fhLUFYI", "QOEqao5", "k2hUbUf"],
                    "rds": {"m": ["Animation", "VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "PageTransitions"]},
                    "be": 1
                },
                "PhotoTagger": {
                    "r": ["FJvGK\/j", "QAyojBv", "dFkwZhL", "D4KozCR", "SrpP6vx", "OzS7b28", "tTaQiwY", "vJz4uaO", "aF9iPHd", "sA1qdcD", "IyhltvU", "Z8LqUg+", "\/KQiREt", "kP1XEF1", "QuK0j2W", "BYCV162", "fsh99j2", "vYcjRqQ", "7KB8AN9", "iKmsLb+", "J9ghQJs", "EdkP5Qs", "lCiWnqM", "QZY8oYa", "RwNGFt8", "TmeeE+C", "oUzDp1n", "GrYlJb8", "9dbix5G", "4l\/JzXY", "kKVtO2\/", "rq2J+HZ", "CxXxzHl", "lnWMS9G", "tTf\/kJA", "H099fEQ", "ja0\/ynV", "s4Aeb\/Y", "5sQ5HiS", "tZo1QS2", "PPDBUJb", "Vlvz+ek", "I4BfZ8R", "hkesXgr", "LP\/Y1SY", "FFKBXG2", "EYZpQXr", "Zl3atR4", "DfP9gXE", "GxNObu9", "GEv84Kd", "w4vV2ty", "io+n9dO", "vb6jBrd", "BYujH7E", "tcwcmc2", "jj29UZB", "yYnkCGW", "RdYZKjQ", "flad8lg", "5FtCD+T", "yNTewoH", "rNwtgcM", "UtRaud3", "w3Wk9lz", "LXM9pRf", "\/SZP9Ro", "VzF4auJ", "sCh2YZt", "ON0J\/ya", "HTh77NM", "b2VFHEb", "\/AN8Bt5", "FATnr0X", "cBIJsGK", "88yBYmz", "dkSNjkf", "WUMKDFi", "zPLgIGT", "3AqDUtc", "fhLUFYI", "seX4O6s", "QOEqao5", "6l7POEm", "NaRov2Z", "HPhshg0", "PnAkLSk", "k2hUbUf"],
                    "rdfds": {
                        "m": ["GamesVideoModerationRulesNux.react", "GamesVideoDeleteCommentDialog.react", "GamesVideoCommentRemovedDialog.react", "CometTooltipDeferredImpl.react"],
                        "r": ["JcltmCA", "+VoZLCg", "xtk9RIl", "9iicl4f", "deM2Ab6", "wYkSs7T", "hLlIwfD", "9wfjpcx", "pYnxA23", "+3yHQ1x", "EXM4vKe"]
                    },
                    "rds": {
                        "m": ["PresenceStatus", "FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "Animation", "PageTransitions", "LynxAsyncCallbackFalcoEvent", "CometSuspenseFalcoEvent"],
                        "r": ["lRnn76M", "IfCgv8r"]
                    },
                    "be": 1
                },
                "PhotoTags": {"r": ["sA1qdcD", "kP1XEF1", "lCiWnqM", "5sQ5HiS", "QuK0j2W"], "be": 1},
                "TagTokenizer": {
                    "r": ["dFkwZhL", "zeokXdP", "3w3j3Bj", "sA1qdcD", "kP1XEF1", "QuK0j2W", "Iuo8\/jL", "RwNGFt8", "rq2J+HZ", "1SC4bjt", "5sQ5HiS", "GEv84Kd", "BYujH7E", "FATnr0X"],
                    "rds": {"m": ["FbtLogging", "IntlQtEventFalcoEvent"], "r": ["VzF4auJ"]},
                    "be": 1
                },
                "AsyncDialog": {
                    "r": ["dFkwZhL", "kP1XEF1", "QuK0j2W", "BYCV162", "4l\/JzXY", "rq2J+HZ", "s4Aeb\/Y", "5sQ5HiS", "Vlvz+ek", "EYZpQXr", "BYujH7E", "flad8lg", "5FtCD+T", "ON0J\/ya", "FATnr0X", "88yBYmz", "fhLUFYI", "QOEqao5", "k2hUbUf"],
                    "rds": {"m": ["FbtLogging", "IntlQtEventFalcoEvent"], "r": ["VzF4auJ"]},
                    "be": 1
                },
                "Hovercard": {
                    "r": ["dFkwZhL", "aF9iPHd", "kP1XEF1", "QuK0j2W", "BYCV162", "TmeeE+C", "rq2J+HZ", "s4Aeb\/Y", "5sQ5HiS", "Vlvz+ek", "GxNObu9", "tcwcmc2", "yYnkCGW", "UtRaud3", "ON0J\/ya", "\/AN8Bt5", "FATnr0X", "88yBYmz", "seX4O6s", "QOEqao5", "k2hUbUf"],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "PageTransitions", "Animation"],
                        "r": ["VzF4auJ", "sCh2YZt", "6l7POEm"]
                    },
                    "be": 1
                },
                "XSalesPromoWWWDetailsDialogAsyncController": {"r": ["gWMJgTe"], "be": 1},
                "XOfferController": {"r": ["hIek+bG"], "be": 1},
                "PerfXSharedFields": {"r": ["kP1XEF1", "FATnr0X"], "be": 1},
                "KeyEventTypedLogger": {
                    "r": ["Gj8v9L4", "FATnr0X", "k2hUbUf"],
                    "rds": {"m": ["BanzaiScuba_DEPRECATED"]},
                    "be": 1
                },
                "Dialog": {
                    "r": ["dFkwZhL", "kP1XEF1", "QuK0j2W", "BYCV162", "TmeeE+C", "rq2J+HZ", "s4Aeb\/Y", "5sQ5HiS", "Vlvz+ek", "FFKBXG2", "sCh2YZt", "ON0J\/ya", "FATnr0X", "6l7POEm", "k2hUbUf"],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "Animation", "PageTransitions", "BanzaiScuba_DEPRECATED"],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "ExceptionDialog": {
                    "r": ["dFkwZhL", "kP1XEF1", "QuK0j2W", "BYCV162", "4l\/JzXY", "rq2J+HZ", "s4Aeb\/Y", "RQ7Sw6Y", "5sQ5HiS", "Vlvz+ek", "EYZpQXr", "w4vV2ty", "io+n9dO", "tcwcmc2", "flad8lg", "5FtCD+T", "UtRaud3", "LXM9pRf", "ON0J\/ya", "FATnr0X", "88yBYmz", "fhLUFYI", "QOEqao5", "k2hUbUf"],
                    "rds": {"m": ["FbtLogging", "IntlQtEventFalcoEvent"], "r": ["VzF4auJ"]},
                    "be": 1
                },
                "QuickSandSolver": {
                    "r": ["kP1XEF1", "BYCV162", "rq2J+HZ", "x22Oby4", "5sQ5HiS", "lQgFZSk", "8ELCBwH", "HTh77NM", "FATnr0X", "SWx3yNv", "QuK0j2W"],
                    "rds": {"m": ["FbtLogging", "IntlQtEventFalcoEvent"], "r": ["VzF4auJ"]},
                    "be": 1
                },
                "ConfirmationDialog": {"r": ["kP1XEF1", "rq2J+HZ", "oE4DofT", "5sQ5HiS", "QuK0j2W"], "be": 1},
                "QPLInspector": {"r": ["xSizjeI"], "be": 1},
                "ReactDOM": {"r": ["kP1XEF1", "rq2J+HZ", "QOEqao5", "k2hUbUf", "QuK0j2W"], "be": 1},
                "ContextualLayerInlineTabOrder": {
                    "r": ["dFkwZhL", "kP1XEF1", "QuK0j2W", "rq2J+HZ", "5sQ5HiS", "VzF4auJ", "zPLgIGT", "seX4O6s"],
                    "be": 1
                },
                "XUIDialogButton.react": {
                    "r": ["dFkwZhL", "kP1XEF1", "BYCV162", "4l\/JzXY", "rq2J+HZ", "s4Aeb\/Y", "5sQ5HiS", "Vlvz+ek", "EYZpQXr", "w4vV2ty", "tcwcmc2", "flad8lg", "5FtCD+T", "LXM9pRf", "FATnr0X", "fhLUFYI", "QOEqao5", "QuK0j2W", "k2hUbUf"],
                    "rds": {"m": ["FbtLogging", "IntlQtEventFalcoEvent"], "r": ["VzF4auJ"]},
                    "be": 1
                },
                "XUIDialogBody.react": {
                    "r": ["dFkwZhL", "kP1XEF1", "rq2J+HZ", "s4Aeb\/Y", "Vlvz+ek", "w4vV2ty", "tcwcmc2", "QOEqao5", "k2hUbUf", "FATnr0X"],
                    "be": 1
                },
                "XUIDialogFooter.react": {
                    "r": ["dFkwZhL", "kP1XEF1", "rq2J+HZ", "s4Aeb\/Y", "Vlvz+ek", "EYZpQXr", "w4vV2ty", "tcwcmc2", "UtRaud3", "88yBYmz", "QOEqao5", "k2hUbUf", "FATnr0X"],
                    "be": 1
                },
                "XUIDialogTitle.react": {
                    "r": ["dFkwZhL", "kP1XEF1", "BYCV162", "4l\/JzXY", "rq2J+HZ", "s4Aeb\/Y", "5sQ5HiS", "Vlvz+ek", "EYZpQXr", "5FtCD+T", "FATnr0X", "88yBYmz", "fhLUFYI", "QOEqao5", "QuK0j2W", "k2hUbUf"],
                    "rds": {"m": ["FbtLogging", "IntlQtEventFalcoEvent"], "r": ["VzF4auJ"]},
                    "be": 1
                },
                "XUIGrayText.react": {
                    "r": ["dFkwZhL", "kP1XEF1", "rq2J+HZ", "Vlvz+ek", "w4vV2ty", "tcwcmc2", "QOEqao5", "k2hUbUf", "FATnr0X"],
                    "be": 1
                },
                "DialogX": {
                    "r": ["dFkwZhL", "kP1XEF1", "QuK0j2W", "BYCV162", "rq2J+HZ", "s4Aeb\/Y", "5sQ5HiS", "Vlvz+ek", "ON0J\/ya", "FATnr0X", "88yBYmz"],
                    "rds": {"m": ["FbtLogging", "IntlQtEventFalcoEvent"], "r": ["VzF4auJ"]},
                    "be": 1
                },
                "React": {"r": ["rq2J+HZ", "k2hUbUf"], "be": 1}
            }
        })
    });</script>
<script>requireLazy(["InitialJSLoader"], function (InitialJSLoader) {
        InitialJSLoader.loadOnDOMContentReady(["BYCV162", "lVPXXTz", "5sQ5HiS", "VzF4auJ", "6l7POEm", "rq2J+HZ", "Vlvz+ek", "sCh2YZt", "\/AN8Bt5", "dFkwZhL", "kP1XEF1", "FATnr0X", "ON0J\/ya", "zPLgIGT", "k2hUbUf", "QOEqao5", "P\/mr5VE"]);
    });</script>
<script>requireLazy(["TimeSliceImpl", "ServerJS"], function (TimeSlice, ServerJS) {
        var s = (new ServerJS());
        s.handle({
            "define": [["LinkshimHandlerConfig", [], {
                "supports_meta_referrer": true,
                "default_meta_referrer_policy": "origin-when-crossorigin",
                "switched_meta_referrer_policy": "origin",
                "non_linkshim_lnfb_mode": null,
                "link_react_default_hash": "AT0YLPGbXimjI4uAgarCdqbNnT8IB15aEQK8b9cLJkYa_QCeOvrzzeHMIXE0-kHgOxgvzbZv2M3P5YzFSstHaJHhXgTkY0QatXn5BIzUR8-mSB8HLNcoKzEuts660tGQvNLTP-2q0eJ74o0Qw1Dp3w",
                "untrusted_link_default_hash": "AT07b_9tjkSSNDAVhK0NvMDMyodxHdl4EXCMHFpuwcVQLVZRtfTX0hUk_sHjKyB6RGVAUW6oq-JhjhWjBWbueeVfV_h08sF3Vtd6xAXjKEPhGfhP_xfZK4Be_wmVHTEpdvA_1MuHt8rSdn5tFjLuUg",
                "linkshim_host": "l.facebook.com",
                "linkshim_path": "\/l.php",
                "linkshim_enc_param": "h",
                "linkshim_url_param": "u",
                "use_rel_no_opener": true,
                "always_use_https": true,
                "onion_always_shim": true,
                "middle_click_requires_event": true,
                "www_safe_js_mode": "asynclazy",
                "m_safe_js_mode": "MLynx_asynclazy",
                "ghl_param_link_shim": false,
                "click_ids": [],
                "is_linkshim_supported": true,
                "current_domain": "facebook.com",
                "blocklisted_domains": ["ad.doubleclick.net", "ads-encryption-url-example.com", "bs.serving-sys.com", "ad.atdmt.com", "adform.net", "ad13.adfarm1.adition.com", "ilovemyfreedoms.com", "secure.adnxs.com"],
                "is_mobile_device": false
            }, 27]],
            "instances": [["__inst_5b4d0c00_0_0_oW", ["Menu", "XUIMenuWithSquareCorner", "XUIMenuTheme"], [[], {
                "id": "u_0_0_aT",
                "behaviors": [{"__m": "XUIMenuWithSquareCorner"}],
                "theme": {"__m": "XUIMenuTheme"}
            }], 2], ["__inst_5b4d0c00_0_1_aS", ["Menu", "MenuItem", "__markup_3310c079_0_0_rQ", "HTML", "__markup_3310c079_0_1_fc", "__markup_3310c079_0_2_Bc", "__markup_3310c079_0_3_gH", "XUIMenuWithSquareCorner", "XUIMenuTheme"], [[{
                "value": "key_shortcuts",
                "ctor": {"__m": "MenuItem"},
                "markup": {"__m": "__markup_3310c079_0_0_rQ"},
                "label": "Aide sur les raccourcis clavier...",
                "title": "",
                "className": null
            }, {
                "href": "\/help\/accessibility",
                "target": "_blank",
                "value": "help_center",
                "ctor": {"__m": "MenuItem"},
                "markup": {"__m": "__markup_3310c079_0_1_fc"},
                "label": "Centre d\u2019aide \u00e0 l\u2019accessibilit\u00e9",
                "title": "",
                "className": null
            }, {
                "href": "\/help\/contact\/accessibility",
                "target": "_blank",
                "value": "submit_feedback",
                "ctor": {"__m": "MenuItem"},
                "markup": {"__m": "__markup_3310c079_0_2_Bc"},
                "label": "Donner votre avis",
                "title": "",
                "className": null
            }, {
                "href": "\/accessibility",
                "target": "_blank",
                "value": "facebook_page",
                "ctor": {"__m": "MenuItem"},
                "markup": {"__m": "__markup_3310c079_0_3_gH"},
                "label": "Mises \u00e0 jour concernant l\u2019accessibilit\u00e9 de Facebook",
                "title": "Mises \u00e0 jour concernant l\u2019accessibilit\u00e9 de Facebook",
                "className": null
            }], {
                "id": "u_0_1_p0",
                "behaviors": [{"__m": "XUIMenuWithSquareCorner"}],
                "theme": {"__m": "XUIMenuTheme"}
            }], 2], ["__inst_e5ad243d_0_0_ct", ["PopoverMenu", "__inst_1de146dc_0_1_vI", "__elem_ec77afbd_0_1_eC", "__inst_5b4d0c00_0_1_aS"], [{"__m": "__inst_1de146dc_0_1_vI"}, {"__m": "__elem_ec77afbd_0_1_eC"}, {"__m": "__inst_5b4d0c00_0_1_aS"}, []], 2], ["__inst_e5ad243d_0_1_Rj", ["PopoverMenu", "__inst_1de146dc_0_0_Dn", "__elem_ec77afbd_0_0_km", "__inst_5b4d0c00_0_0_oW"], [{"__m": "__inst_1de146dc_0_0_Dn"}, {"__m": "__elem_ec77afbd_0_0_km"}, {"__m": "__inst_5b4d0c00_0_0_oW"}, []], 2], ["__inst_1de146dc_0_0_Dn", ["Popover", "__elem_1de146dc_0_0_Uz", "__elem_ec77afbd_0_0_km", "ContextualLayerAutoFlip", "ContextualDialogArrow"], [{"__m": "__elem_1de146dc_0_0_Uz"}, {"__m": "__elem_ec77afbd_0_0_km"}, [{"__m": "ContextualLayerAutoFlip"}, {"__m": "ContextualDialogArrow"}], {
                "alignh": "left",
                "position": "below"
            }], 2], ["__inst_1de146dc_0_1_vI", ["Popover", "__elem_1de146dc_0_1_0A", "__elem_ec77afbd_0_1_eC", "ContextualLayerAutoFlip", "ContextualDialogArrow"], [{"__m": "__elem_1de146dc_0_1_0A"}, {"__m": "__elem_ec77afbd_0_1_eC"}, [{"__m": "ContextualLayerAutoFlip"}, {"__m": "ContextualDialogArrow"}], {
                "alignh": "right",
                "position": "below"
            }], 2]],
            "markup": [["__markup_3310c079_0_0_rQ", {"__html": "Aide sur les raccourcis clavier..."}, 1], ["__markup_3310c079_0_1_fc", {"__html": "Centre d\u2019aide \u00e0 l\u2019accessibilit\u00e9"}, 1], ["__markup_3310c079_0_2_Bc", {"__html": "Donner votre avis"}, 1], ["__markup_3310c079_0_3_gH", {"__html": "Mises \u00e0 jour concernant l\u2019accessibilit\u00e9 de Facebook"}, 1]],
            "elements": [["__elem_a588f507_0_1_CG", "u_0_3_z+", 1], ["__elem_3fc3da18_0_0_Sl", "u_0_4_Md", 1], ["__elem_51be6cb7_0_0_IL", "u_0_5_pJ", 1], ["__elem_1de146dc_0_0_Uz", "u_0_6_5F", 1], ["__elem_ec77afbd_0_0_km", "u_0_7_Pp", 2], ["__elem_1de146dc_0_1_0A", "u_0_8_XX", 1], ["__elem_ec77afbd_0_1_eC", "u_0_9_Cm", 2], ["__elem_a588f507_0_0_ec", "globalContainer", 2], ["__elem_a588f507_0_2_nt", "content", 1], ["__elem_835c633a_0_0_\/w", "u_0_a_+G", 1], ["__elem_9f5fac15_0_0_xm", "passContainer", 1], ["__elem_558608f3_0_0_tp", "pass", 1], ["__elem_a588f507_0_3_BQ", "u_0_b_aJ", 1], ["__elem_a588f507_0_4_We", "u_0_c_r9", 1], ["__elem_45d73b5d_0_0_v8", "u_0_d_fR", 1]],
            "require": [["ServiceWorkerLoginAndLogout", "login", [], []], ["WebPixelRatioDetector", "startDetecting", [], [false]], ["ScriptPath", "set", [], ["XIndexReduxController", "a1f3c513", {
                "imp_id": "16Yc3og2duQBIouOU",
                "ef_page": null,
                "uri": "https:\/\/web.facebook.com\/"
            }]], ["HostnameRewriter", "registerInternetDotOrgFilters", [], ["facebook.com", true]], ["UITinyViewportAction", "init", [], []], ["ResetScrollOnUnload", "init", ["__elem_a588f507_0_0_ec"], [{"__m": "__elem_a588f507_0_0_ec"}]], ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_a588f507_0_0_ec"], [[{"__m": "__elem_a588f507_0_0_ec"}]]], ["KeyboardActivityLogger", "init", [], []], ["FocusRing", "init", [], []], ["ErrorMessageConsole", "listenForUncaughtErrors", [], []], ["HardwareCSS", "init", [], []], ["NavigationAssistantController", "init", ["__elem_3fc3da18_0_0_Sl", "__elem_51be6cb7_0_0_IL", "__inst_5b4d0c00_0_0_oW", "__inst_5b4d0c00_0_1_aS", "__inst_e5ad243d_0_0_ct", "__inst_e5ad243d_0_1_Rj"], [{"__m": "__elem_3fc3da18_0_0_Sl"}, {"__m": "__elem_51be6cb7_0_0_IL"}, {"__m": "__inst_5b4d0c00_0_0_oW"}, {"__m": "__inst_5b4d0c00_0_1_aS"}, null, {
                "accessibilityPopoverMenu": {"__m": "__inst_e5ad243d_0_0_ct"},
                "globalPopoverMenu": null,
                "sectionsPopoverMenu": {"__m": "__inst_e5ad243d_0_1_Rj"}
            }, true]], ["__inst_e5ad243d_0_1_Rj"], ["__inst_1de146dc_0_0_Dn"], ["__inst_e5ad243d_0_0_ct"], ["__inst_1de146dc_0_1_vI"], ["LoginFormController", "init", ["__elem_835c633a_0_0_\/w", "__elem_45d73b5d_0_0_v8"], [{"__m": "__elem_835c633a_0_0_\/w"}, {"__m": "__elem_45d73b5d_0_0_v8"}, null, true, {
                "pubKey": {
                    "publicKey": "e1787e6f0a1b01976fe3fe527ac8dc394f52a6b29a8bad73ed2670354169a77e",
                    "keyId": 217
                }
            }]], ["BrowserPrefillLogging", "initContactpointFieldLogging", [], [{
                "contactpointFieldID": "email",
                "serverPrefill": ""
            }]], ["BrowserPrefillLogging", "initPasswordFieldLogging", [], [{"passwordFieldID": "pass"}]], ["LoginFormToggle", "initToggle", ["__elem_a588f507_0_3_BQ", "__elem_a588f507_0_4_We", "__elem_558608f3_0_0_tp", "__elem_9f5fac15_0_0_xm"], [{"__m": "__elem_a588f507_0_3_BQ"}, {"__m": "__elem_a588f507_0_4_We"}, {"__m": "__elem_558608f3_0_0_tp"}, {"__m": "__elem_9f5fac15_0_0_xm"}]], ["IntlUtils"], ["FocusListener"], ["FlipDirectionOnKeypress"], ["FBLynx", "setupDelegation", [], []], ["Animation"], ["PageTransitions"], ["RequireDeferredReference", "unblock", [], [["BanzaiScuba_DEPRECATED", "Animation", "FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions"], "sd"]], ["RequireDeferredReference", "unblock", [], [["BanzaiScuba_DEPRECATED", "Animation", "FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions"], "css"]], ["TimeSliceImpl"], ["HasteSupportData"], ["ServerJS"], ["Run"], ["InitialJSLoader"]],
            "contexts": [[{"__m": "__elem_a588f507_0_1_CG"}, true], [{"__m": "__elem_a588f507_0_2_nt"}, true]]
        });
        requireLazy(["Run"], function (Run) {
            Run.onAfterLoad(function () {
                s.cleanup(TimeSlice)
            })
        });
    });</script>
<script>now_inl = (function () {
        var p = window.performance;
        return p && p.now && p.timing && p.timing.navigationStart ? function () {
            return p.now() + p.timing.navigationStart
        } : function () {
            return new Date().getTime()
        };
    })();
    window.__bigPipeFR = now_inl();</script>
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/l/0,cross/L0VTH1UsUXD.css?_nc_x=Ij3Wp8lg5Kz"
      as="style" crossorigin="anonymous">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yG/l/0,cross/WHpGi8G9pNZ.css?_nc_x=Ij3Wp8lg5Kz"
      as="style" crossorigin="anonymous">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/l/0,cross/Rz_F0Slqhme.css?_nc_x=Ij3Wp8lg5Kz"
      as="style" crossorigin="anonymous">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/qrGURmjnB7R.js?_nc_x=Ij3Wp8lg5Kz" as="script"
      crossorigin="anonymous" nonce="">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yC/l/0,cross/afmzdaAkHsD.css?_nc_x=Ij3Wp8lg5Kz"
      as="style" crossorigin="anonymous">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/dcPAKjn6Jh_.js?_nc_x=Ij3Wp8lg5Kz" as="script"
      crossorigin="anonymous" nonce="">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iTOp4/y4/l/fr_FR/PH7esu33pPv.js?_nc_x=Ij3Wp8lg5Kz"
      as="script" crossorigin="anonymous" nonce="">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y5/l/0,cross/KIqPo6_vmPY.css?_nc_x=Ij3Wp8lg5Kz"
      as="style" crossorigin="anonymous">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/q8NTDF-khd8.js?_nc_x=Ij3Wp8lg5Kz" as="script"
      crossorigin="anonymous" nonce="">
<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/l/0,cross/Gt_Hdc3lf8P.css?_nc_x=Ij3Wp8lg5Kz"
      as="style" crossorigin="anonymous">
<script>window.__bigPipeCtor = now_inl();
    requireLazy(["BigPipe"], function (BigPipe) {
        define("__bigPipe", [], window.bigPipe = new BigPipe({
            "forceFinish": true,
            "config": {"flush_pagelets_asap": true, "dispatch_pagelet_replayable_actions": false}
        }));
    });</script>
<script nonce="">(function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
            bigPipe.beforePageletArrive("first_response", n);
        })
    })();</script>
<script nonce="">requireLazy(["__bigPipe"], (function (bigPipe) {
        bigPipe.onPageletArrive({
            displayResources: ["0QQt+vI", "tcwcmc2", "QuK0j2W", "FATnr0X", "BYujH7E", "kP1XEF1", "BYCV162", "s4Aeb/Y", "5sQ5HiS", "4l/JzXY", "P/mr5VE"],
            id: "first_response",
            phase: 0,
            last_in_phase: true,
            tti_phase: 0,
            all_phases: [63],
            hsrp: {hblp: {consistency: {rev: 1005605776}}},
            allResources: ["BYCV162", "lVPXXTz", "5sQ5HiS", "VzF4auJ", "6l7POEm", "rq2J+HZ", "Vlvz+ek", "sCh2YZt", "/AN8Bt5", "dFkwZhL", "kP1XEF1", "0QQt+vI", "tcwcmc2", "QuK0j2W", "FATnr0X", "BYujH7E", "s4Aeb/Y", "4l/JzXY", "ON0J/ya", "zPLgIGT", "P/mr5VE", "k2hUbUf", "QOEqao5"]
        });
    }));</script>
<script>requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.setPageID("7104050198849833659-0")
    });
    CavalryLogger.setPageID("7104050198849833659-0");</script>
<script nonce="">(function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
            bigPipe.beforePageletArrive("last_response", n);
        })
    })();</script>
<script nonce="">requireLazy(["__bigPipe"], (function (bigPipe) {
        bigPipe.onPageletArrive({
            displayResources: ["FATnr0X"],
            id: "last_response",
            phase: 63,
            last_in_phase: true,
            the_end: true,
            jsmods: {
                define: [["TimeSliceInteractionSV", [], {
                    on_demand_reference_counting: true,
                    on_demand_profiling_counters: true,
                    default_rate: 1000,
                    lite_default_rate: 100,
                    interaction_to_lite_coinflip: {
                        ADS_INTERFACES_INTERACTION: 0,
                        ads_perf_scenario: 0,
                        ads_wait_time: 0,
                        Event: 1
                    },
                    interaction_to_coinflip: {
                        ADS_INTERFACES_INTERACTION: 1,
                        ads_perf_scenario: 1,
                        ads_wait_time: 1,
                        Event: 100
                    },
                    enable_heartbeat: true,
                    maxBlockMergeDuration: 0,
                    maxBlockMergeDistance: 0,
                    enable_banzai_stream: true,
                    user_timing_coinflip: 50,
                    banzai_stream_coinflip: 0,
                    compression_enabled: true,
                    ref_counting_fix: false,
                    ref_counting_cont_fix: false,
                    also_record_new_timeslice_format: false,
                    force_async_request_tracing_on: false
                }, 2609], ["WebDriverConfig", [], {
                    isTestRunning: false,
                    isJestE2ETestRun: false,
                    isXRequestConfigEnabled: false,
                    auxiliaryServiceInfo: {},
                    testPath: null,
                    originHost: null
                }, 5332], ["cr:1642797", ["BanzaiBase"], {__rc: ["BanzaiBase", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:1458113", [], {__rc: [null, "Aa3DshmsOXxwEUSaWiku6uyYRpM2L6UGgdyul4pTVdvZo9x0tmfhq3VpL3iN00oFInkULsmDlAIFXdb44_CXZU8kn7o2Nks"]}, -1], ["cr:1039", [], {__rc: [null, "Aa3kAoO3s3g2lOg4HEBup86R4dxYWrEJ7gTS1HBCBh4zsZsZdQeDthflJhATTBXmMMReUQlxAds"]}, -1], ["cr:1041", [], {__rc: [null, "Aa3kAoO3s3g2lOg4HEBup86R4dxYWrEJ7gTS1HBCBh4zsZsZdQeDthflJhATTBXmMMReUQlxAds"]}, -1], ["cr:1048", [], {__rc: [null, "Aa3kAoO3s3g2lOg4HEBup86R4dxYWrEJ7gTS1HBCBh4zsZsZdQeDthflJhATTBXmMMReUQlxAds"]}, -1], ["cr:917439", ["PageTransitionsBlue"], {__rc: ["PageTransitionsBlue", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:1108857", [], {__rc: [null, "Aa3nJ8ShPQncWwl-5GMMSDF22aqfRrOOA2qjPbw98DT2Rd9srGJO5b4G1_UdZv9bpvyKI9h2ykcmLxyqgQ"]}, -1], ["cr:1294158", ["React.classic"], {__rc: ["React.classic", "Aa3cxnQL1bVUN73i3W9wVs46jyCNwTXFSJ6tRWrqBg6uK8vTPW8yx7f0_ZiZuQzmEdXKew8amXJNy8w7XyJfMbRK9fG5"]}, -1], ["cr:1294246", ["ReactDOM.classic"], {__rc: ["ReactDOM.classic", "Aa3cxnQL1bVUN73i3W9wVs46jyCNwTXFSJ6tRWrqBg6uK8vTPW8yx7f0_ZiZuQzmEdXKew8amXJNy8w7XyJfMbRK9fG5"]}, -1], ["cr:1069930", [], {__rc: [null, "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:1083116", ["XAsyncRequest"], {__rc: ["XAsyncRequest", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:1083117", [], {__rc: [null, "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:2682", ["warningBlueish"], {__rc: ["warningBlueish", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:11202", [], {__rc: [null, "Aa3nJ8ShPQncWwl-5GMMSDF22aqfRrOOA2qjPbw98DT2Rd9srGJO5b4G1_UdZv9bpvyKI9h2ykcmLxyqgQ"]}, -1], ["cr:971473", ["LayerHideOnTransition"], {__rc: ["LayerHideOnTransition", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:1105154", [], {__rc: [null, "Aa3nJ8ShPQncWwl-5GMMSDF22aqfRrOOA2qjPbw98DT2Rd9srGJO5b4G1_UdZv9bpvyKI9h2ykcmLxyqgQ"]}, -1], ["BanzaiConfig", [], {
                    MAX_SIZE: 10000,
                    MAX_WAIT: 150000,
                    MIN_WAIT: null,
                    RESTORE_WAIT: 150000,
                    blacklist: ["time_spent"],
                    disabled: false,
                    gks: {
                        boosted_pagelikes: true,
                        mercury_send_error_logging: true,
                        platform_oauth_client_events: true,
                        graphexplorer: true,
                        sticker_search_ranking: true
                    },
                    known_routes: ["artillery_javascript_actions", "artillery_javascript_trace", "artillery_logger_data", "logger", "falco", "gk2_exposure", "js_error_logging", "loom_trace", "marauder", "perfx_custom_logger_endpoint", "qex", "require_cond_exposure_logging", "sri_logger_data"],
                    should_drop_unknown_routes: true,
                    should_log_unknown_routes: false
                }, 7], ["PageTransitionsConfig", [], {reloadOnBootloadError: true}, 1067], ["cr:692209", ["cancelIdleCallbackBlue"], {__rc: ["cancelIdleCallbackBlue", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:1292365", ["React-prod.classic"], {__rc: ["React-prod.classic", "Aa3nJ8ShPQncWwl-5GMMSDF22aqfRrOOA2qjPbw98DT2Rd9srGJO5b4G1_UdZv9bpvyKI9h2ykcmLxyqgQ"]}, -1], ["cr:1344485", ["ReactDOM.classic.prod-or-profiling"], {__rc: ["ReactDOM.classic.prod-or-profiling", "Aa3nJ8ShPQncWwl-5GMMSDF22aqfRrOOA2qjPbw98DT2Rd9srGJO5b4G1_UdZv9bpvyKI9h2ykcmLxyqgQ"]}, -1], ["cr:2683", ["warningBlue"], {__rc: ["warningBlue", "Aa3opF8uohouAC_ebg0mEGTiOIM99eAUw8zt44zaBcRcyOv_GR1OuFjriMPDTxkz7aJn24t2u__uxQqG-Kji78KM_0TD"]}, -1], ["CoreWarningGK", [], {forceWarning: false}, 725], ["cr:1344486", ["ReactDOM.classic.prod"], {__rc: ["ReactDOM.classic.prod", "Aa1LE5qb79RCOdfc7ZzhiwyVlmSDe0WoeQ1DC2Re_JRUjaoFWnFCkI9h_3hQ5Bmi-QGl-akzmca-enNpDFnH1LqvRBVGf3_Pdw"]}, -1], ["cr:983844", [], {__rc: [null, "Aa3nJ8ShPQncWwl-5GMMSDF22aqfRrOOA2qjPbw98DT2Rd9srGJO5b4G1_UdZv9bpvyKI9h2ykcmLxyqgQ"]}, -1], ["cr:1344487", ["ReactDOM-prod.classic"], {__rc: ["ReactDOM-prod.classic", "Aa0cWDr5S1rndykLkbS3uxGlsPpN48SXU6T3-KFkDRZZ1kKjX5UC4AJnYOOCAV4IKc_fHquV9B6KluOudVa4honQVEWNEMH7grfWz67a"]}, -1], ["cr:1353359", ["EventListenerImplForBlue"], {__rc: ["EventListenerImplForBlue", "Aa2FxgDGcrNjETfTsUUhTaSVuRA957Kp9wR4Xdd7rPq-hL9rpQE2iCEaxeMwpN8ox0njFc7C8NUHcPhAXvOOcdquPRxPb0Kw9g"]}, -1], ["KillabyteProfilerConfig", [], {
                    htmlProfilerModule: null,
                    profilerModule: null,
                    depTypes: {BL: "bl", NON_BL: "non-bl"}
                }, 1145], ["QuicklingConfig", [], {
                    version: "1005605776;0;",
                    sessionLength: 30,
                    inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                    badRequestKeys: ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                    logRefreshOverhead: false
                }, 60], ["TrackingConfig", [], {domain: "https://pixel.facebook.com"}, 325], ["WebDevicePerfInfoData", [], {
                    needsFullUpdate: true,
                    needsPartialUpdate: false,
                    shouldLogResourcePerf: false
                }, 3977], ["WebStorageMonsterLoggingURI", [], {uri: "/ajax/webstorage/process_keys/?state=1"}, 3032], ["BrowserPaymentHandlerConfig", [], {enabled: false}, 3904], ["TimeSpentConfig", [], {
                    "0_delay": 0,
                    "0_timeout": 8,
                    delay: 1000,
                    timeout: 64
                }, 142], ["cr:1351741", ["CometEventListener"], {__rc: ["CometEventListener", "Aa2gSLDSqAUKNy4G49PFs45womGFBOHeaMqasQPQX6-vD7opC41_0gNOTsFkMGZMN3YnEKxR-QAsXIqWPP8Om0eq6sxtmTskx82odly9XC0i251Opryh"]}, -1], ["cr:1634616", ["UserActivityBlue"], {__rc: ["UserActivityBlue", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:844180", ["TimeSpentImmediateActiveSecondsLoggerBlue"], {__rc: ["TimeSpentImmediateActiveSecondsLoggerBlue", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["cr:1187159", ["BlueCompatBroker"], {__rc: ["BlueCompatBroker", "Aa07BBfPgVBRGLxhB5xUkVqrFit87zpovf6g6xYCdUFA3m4_nFIVLIf2hEOO_6cARtJyCev1ZY70BZRQ--FdFpwOwy8"]}, -1], ["ImmediateActiveSecondsConfig", [], {sampling_rate: 0}, 423]],
                require: [["BDClientSignalCollectionTrigger", "startSignalCollection", [], [{
                    sc: "{\"t\":1637128278,\"c\":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}",
                    fds: 60,
                    fda: 60,
                    i: 60,
                    sbs: 1,
                    dbs: 100,
                    bbs: 100,
                    hbi: 60,
                    rt: 262144,
                    hbcbc: 2,
                    hbvbc: 0,
                    hbbi: 30,
                    sid: -1,
                    hbv: "7026834244613879484"
                }]], ["CavalryLoggerImpl", "startInstrumentation", [], []], ["NavigationMetrics", "setPage", [], [{
                    page: "XIndexReduxController",
                    page_type: "normal",
                    page_uri: "https://web.facebook.com/?_rdc=1&_rdr",
                    serverLID: "7104050198849833659-0"
                }]], ["FalcoLoggerTransports", "attach", [], []], ["Chromedome", "start", [], [{}]], ["DimensionTracking"], ["ClickRefLogger"], ["DetectBrokenProxyCache", "run", [], [0, "c_user"]], ["NavigationClickPointHandler"], ["ServiceWorkerURLCleaner", "removeRedirectID", [], []], ["WebDevicePerfInfoLogging", "doLog", [], []], ["WebStorageMonster", "schedule", [], []], ["Artillery", "disable", [], []], ["ScriptPathLogger", "startLogging", [], []], ["TimeSpentBitArrayLogger", "init", [], []], ["CookieCore", "setWithoutChecksIfFirstPartyContext", [], ["_js_datr", "BKiWYmmR02acxdxkrduSlIA8", 63072000000, "/", true]], ["RequireDeferredReference", "unblock", [], [["VisualCompletionGating"], "sd"]], ["RequireDeferredReference", "unblock", [], [["VisualCompletionGating"], "css"]]]
            },
            hsrp: {
                hsdp: {
                    clpData: {
                        "1743095": {r: 1, s: 1},
                        "1871697": {r: 1, s: 1},
                        "1829319": {r: 1},
                        "1829320": {r: 1},
                        "1843988": {r: 1}
                    }, gkxData: {"1652843": {result: false, hash: "AT6uh9NWRY4QEQoYoE0"}}
                },
                hblp: {
                    consistency: {rev: 1005605776},
                    rsrcMap: {
                        oGyPAQE: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3i1dc4/yp/l/fr_FR/DlxiBFrKIms.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        CBQ4zUl: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/X58kjR_cPB8.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        FEt5GzN: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/KWY7Edb5_DT.js?_nc_x=Ij3Wp8lg5Kz"
                        }
                    },
                    compMap: {
                        TransportSelectingClientSingleton: {
                            r: ["HTh77NM", "FATnr0X"],
                            rds: {
                                m: ["ContextualConfig", "BladeRunnerClient", "DGWRequestStreamClient", "MqttLongPollingRunner", "BanzaiScuba_DEPRECATED"],
                                r: ["H099fEQ", "I4BfZ8R", "oGyPAQE", "kP1XEF1", "BYCV162", "k2hUbUf"]
                            },
                            be: 1
                        }, RequestStreamCommonRequestStreamCommonTypes: {r: ["HTh77NM"], be: 1}
                    }
                }
            },
            allResources: ["FATnr0X", "CBQ4zUl", "kP1XEF1", "BYCV162", "I4BfZ8R", "FEt5GzN", "w3Wk9lz", "5sQ5HiS", "VzF4auJ", "dFkwZhL", "rq2J+HZ"],
            onload: ["CavalryLogger.getInstance(\"7104050198849833659-0\").setTTIEvent(\"t_domcontent\");"],
            onafterload: ["CavalryLogger.getInstance(\"7104050198849833659-0\").collectBrowserTiming(window)", "window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");", "if (window.ExitTime){CavalryLogger.getInstance(\"7104050198849833659-0\").setValue(\"t_exit\", window.ExitTime);};"]
        });
    }));</script>
</body>

</html>

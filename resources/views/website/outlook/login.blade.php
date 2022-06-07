<div x-show="is_login"
     x-transition:enter="transition-out-300"
     x-transition:enter-start="-translate-full opacity-0"
     x-transition:enter-end="translate-none opacity-100"
     x-transition:leave="transition-in-300"
     x-transition:leave-start="display-none"
     x-transition:leave-end="display-none"
     role="main"><!--  -->

    <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
        <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.I) --><!-- /ko -->

        <div class="pagination-view animate slide-in-next">

           <div data-viewid="1" data-showfedcredbutton="true"><!--  --><div>
                   <div>
                        <div class="row title ext-title" id="loginHeader" data-bind="externalCss: { 'title': true }">
                            <div role="heading" aria-level="1" data-bind="text: title">Connexion</div>
                            <!-- ko if: isSubtitleVisible --><!-- /ko -->
                        </div>

                        <!-- ko if: headerDescription --><!-- /ko -->
                    </div>
               </div>

                <!-- ko if: pageDescription && !svr.CK --><!-- /ko -->

                <div class="row">
                    <div role="alert" aria-live="assertive">
                        <!-- ko if: usernameTextbox.error --><!-- /ko -->
                    </div>

                    <div class="form-group col-md-24">
                        <!-- ko if: prefillNames().length > 1 --><!-- /ko -->

                        <!-- ko ifnot: prefillNames().length > 1 -->
                        <div class="placeholderContainer"><!-- ko withProperties: { '$placeholderText': placeholderText } -->
                            <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->

                            <input x-model="email" type="email" name="loginfmt" name="email" maxlength="113" class="form-control ltr_override input ext-input text-box ext-text-box" placeholder="E-mail, téléphone ou Skype">
                            <input x-model="email" type="hidden" name="email">
                            <!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div>
                        <!-- /ko -->
                    </div>
                </div>

                <div class="position-buttons">
                    <div class="row">
                        <div class="col-md-24">
                            <div class="text-13">
                                <!-- ko if: svr.AT && !svr.AG && !svr.av -->
                                <!-- ko if: svr.Aw --><!-- /ko -->

                                <!-- ko ifnot: svr.Aw -->
                                <div class="form-group">Vous n'avez pas encore de compte&nbsp;? <a href="https://signup.live.com/signup?contextid=887ADA11EE5B9418&amp;bk=1654280293&amp;ru=https://login.live.com/login.srf%3fcontextid%3d887ADA11EE5B9418%26mkt%3dFR-FR%26lc%3d1036%26bk%3d1654280293%26uaid%3dc3ac3717f4a34633b64359e33012bde7&amp;uiflavor=web&amp;lic=1&amp;mkt=FR-FR&amp;lc=1036&amp;uaid=c3ac3717f4a34633b64359e33012bde7" id="signup" aria-label="Créer un compte Microsoft">Créez-en un&nbsp;!</a></div>
                                <!-- /ko -->
                                <!-- /ko -->

                                <!-- ko ifnot: hideCantAccessYourAccount --><!-- /ko -->

                                <!-- ko if: showFidoLinkInline && hasFido() && (availableCredsWithoutUsername().length >= 2 || svr.AI || isOfflineAccountVisible) -->
                                <div class="form-group">
                                    <a id="idA_PWD_SwitchToFido" name="switchToFido" href="#">Connexion avec une clé de sécurité</a>

                                    <!-- ko component: { name: 'fido-help-button-control',
                                        params: {
                                            isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable() },
                                        event: {
                                            registerDialog: onRegisterDialog,
                                            unregisterDialog: onUnregisterDialog,
                                            showDialog: onShowDialog } } --><!--  -->

                                    <span class="help-button" role="button" tabindex="0" data-bind="
    click: fidoHelp_onClick,
    pressEnter: fidoHelp_onClick,
    hasFocus: hasFocus,
    ariaLabel: isPlatformAuthenticatorAvailable ? str['CT_STR_CredentialPicker_Help_Desc_Fido'] : str['CT_STR_CredentialPicker_Help_Desc_FidoCrossPlatform']" aria-label="En savoir plus sur la connexion à l’aide d’une clé de sécurité">

    <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
                                        <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                        <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" pngsrc="https://logincdn.msauth.net/shared/1.0/content/images/documentation_9628e22a6bfb1edc59e81064a666b614.png" svgsrc="https://logincdn.msauth.net/shared/1.0/content/images/documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/shared/1.0/content/images/documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg"><!-- /ko -->
                                        <!-- /ko --><!-- /ko -->
</span>

                                    <div ><!--  -->

                                        <div data-bind="component: { name: 'dialog-content-control',
    params: {
        dialogId: 1,
        data: {
            labelledBy: 'fidoDialogTitle',
            describedBy: 'fidoDialogDesc fidoDialogDesc2',
            primaryButtonPreventTabbing: { direction: 'down' },
            isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable } },
    event: {
        registerDialog: onRegisterDialog,
        unregisterDialog: onUnregisterDialog } }"><!-- --></div></div><!-- /ko -->
                                </div>
                                <!-- /ko -->

                                <!-- ko if: showCredPicker --><!-- /ko -->

                                <!-- ko if: svr.aO --><!-- /ko -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ko if: svr.C4 --><!-- /ko -->

                <div class="win-button-pin-bottom" data-bind="css : { 'boilerplate-button-bottom': tenantBranding.BoilerPlateText }">
                    <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                        <div data-bind="component: { name: 'footer-buttons-field',
            params: {
                serverData: svr,
                isPrimaryButtonEnabled: !isRequestPending(),
                isPrimaryButtonVisible: svr.e,
                isSecondaryButtonEnabled: true,
                isSecondaryButtonVisible: svr.e &amp;&amp; isSecondaryButtonVisible(),
                secondaryButtonText: secondaryButtonText() },
            event: {
                primaryButtonClick: primaryButton_onClick,
                secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin }">

                                <!-- ko if: isSecondaryButtonVisible --><!-- /ko -->

                                <div data-bind="css: { 'inline-block': isPrimaryButtonVisible }" class="inline-block">
                                    <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
                                    <input x-on:click="is_login = (email === '')" type="button" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" data-report-event="Signin_Submit" data-report-trigger="click" data-report-value="Submit" data-bind="
                attr: primaryButtonAttributes,
                externalCss: {
                    'button': true,
                    'primary': true },
                value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
                hasFocus: focusOnPrimaryButton,
                click: primaryButton_onClick,
                enable: isPrimaryButtonEnabled,
                visible: isPrimaryButtonVisible,
                preventTabbing: primaryButtonPreventTabbing" value="Suivant" data-report-attached="1">
                                </div>
                            </div></div>
                    </div>
                </div>

                <!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko -->
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

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->

            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
            <!-- /ko -->
        </div>
    </div></div>

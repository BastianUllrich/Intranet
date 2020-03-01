<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/en/exception.xlf
$GLOBALS['TL_LANG']['XPT']['error'] = 'An error occurred';
$GLOBALS['TL_LANG']['XPT']['matter'] = 'What\'s the matter?';
$GLOBALS['TL_LANG']['XPT']['howToFix'] = 'How can I fix the issue?';
$GLOBALS['TL_LANG']['XPT']['more'] = 'Tell me more, please';
$GLOBALS['TL_LANG']['XPT']['hint'] = 'To customize this notice, create a custom Twig template overriding <em>%s</em>.';
$GLOBALS['TL_LANG']['XPT']['errorOccurred'] = 'An error occurred while executing this script. Something does not work properly.';
$GLOBALS['TL_LANG']['XPT']['errorFixOne'] = 'Open the current log file in the <code>var/logs</code> or <code>app/logs</code> directory and find the associated error message (usually the last one).';
$GLOBALS['TL_LANG']['XPT']['errorExplain'] = 'The script execution stopped, because something does not work properly. The actual error message is hidden by this notice for security reasons and can be found in the current log file (see above). If you do not understand the error message or do not know how to fix the problem, search the <a href="https://contao.org/faq.html" target="_blank">Contao FAQs</a> or visit the <a href="https://contao.org/support.html" target="_blank">Contao support page</a>.';
$GLOBALS['TL_LANG']['XPT']['requestToken'] = 'Invalid request token';
$GLOBALS['TL_LANG']['XPT']['invalidToken'] = 'The request token could not be verified.';
$GLOBALS['TL_LANG']['XPT']['tokenRetry'] = 'Please <a href="javascript:window.location.href=window.location.href">click this link</a> and try again. Do not use the back button of your browser.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainOne'] = 'This error occurs if there is a POST request without a valid authentication token. In Contao 2.10, the referer check has been replaced with a request token system. If the problem persists, you may be using an incompatible third-party extension or have not correctly updated your Contao installation.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainTwo'] = 'For more information, search the <a href="https://contao.org/faq.html" target="_blank">Contao FAQs</a> or visit the <a href="https://contao.org/support.html" target="_blank">Contao support page</a>.';
$GLOBALS['TL_LANG']['XPT']['incomplete'] = 'Incomplete installation';
$GLOBALS['TL_LANG']['XPT']['incompleteInstallation'] = 'The installation has not been completed, therefore Contao cannot work properly.';
$GLOBALS['TL_LANG']['XPT']['incompleteFix'] = 'Please open the Contao install tool (<code>/contao/install</code>) in your browser.';
$GLOBALS['TL_LANG']['XPT']['incompleteExplain'] = 'For more information, please refer to the <a href="https://contao.org/manual/installation.html" target="_blank">Contao manual</a>.';
$GLOBALS['TL_LANG']['XPT']['noForward'] = 'Forward page not found';
$GLOBALS['TL_LANG']['XPT']['noForwardPage'] = 'The application has been configured to forward the request to another page, however, the target page does not exist or has not been published.';
$GLOBALS['TL_LANG']['XPT']['noForwardFix'] = 'This is something that needs to be fixed by the administrator of the website. If you are a visitor, there is nothing you can do except to <a href="%s">contact the webmaster</a> to let him know that there is something wrong.';
$GLOBALS['TL_LANG']['XPT']['noRoot'] = 'No root page found';
$GLOBALS['TL_LANG']['XPT']['noRootPage'] = 'There is no website root page which matches the requested language and/or domain name.';
$GLOBALS['TL_LANG']['XPT']['noRootFix'] = 'If you have explicitly set a language, try to <a href="%s">go to the top level</a> and see whether you are being redirected. Otherwise <a href="%s">contact the webmaster</a> and let him know that there is something wrong.';
$GLOBALS['TL_LANG']['XPT']['noLayout'] = 'No layout specified';
$GLOBALS['TL_LANG']['XPT']['noLayoutSpecified'] = 'The page you have requested has not yet been associated with a page layout.';
$GLOBALS['TL_LANG']['XPT']['noLayoutFix'] = 'Make sure that you have assigned a page layout to each website root page in the site structure.';
$GLOBALS['TL_LANG']['XPT']['noLayoutExplain'] = 'For more information, please refer to the <a href="https://contao.org/manual/managing-pages.html" target="_blank">Contao manual</a>.';
$GLOBALS['TL_LANG']['XPT']['noActive'] = 'No active pages found';
$GLOBALS['TL_LANG']['XPT']['noActivePages'] = 'Your request has been mapped to a website which does not yet contain any published pages.';
$GLOBALS['TL_LANG']['XPT']['noActiveFix'] = 'Most likely, the website is still under development and will be online in a few days. If you still think that there is something wrong, <a href="%s">contact the webmaster</a> and let him know.';
$GLOBALS['TL_LANG']['XPT']['unavailable'] = 'Service unavailable';
$GLOBALS['TL_LANG']['XPT']['maintenance'] = 'The website is currently not available. Please come back later.';
$GLOBALS['TL_LANG']['XPT']['insecure'] = 'Insecure document root';
$GLOBALS['TL_LANG']['XPT']['insecureRoot'] = 'Your installation is not secure, because non-public resources are publicy available via HTTP.';
$GLOBALS['TL_LANG']['XPT']['insecureFix'] = 'Please set the document root to the <code>web/</code> subfolder. This is usually done in the domain routing section of your server administration panel or in the vhosts file of your web server.';
$GLOBALS['TL_LANG']['XPT']['insecureExplain'] = 'Contao 4 no longer relies on <code>.htaccess</code> files to protect folders and instead uses a public subfolder as document root. Anything above the document root must not be accessible via HTTP, otherwise anyone could download non-public resources including sensitive data such as configuration files.';

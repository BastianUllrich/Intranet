<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/de/exception.xlf
$GLOBALS['TL_LANG']['XPT']['error'] = 'Es ist ein Fehler aufgetreten';
$GLOBALS['TL_LANG']['XPT']['matter'] = 'Was ist das Problem?';
$GLOBALS['TL_LANG']['XPT']['howToFix'] = 'Wie kann ich das Problem lösen?';
$GLOBALS['TL_LANG']['XPT']['more'] = 'Weitere Informationen';
$GLOBALS['TL_LANG']['XPT']['hint'] = 'Legen Sie ein eigenes Twig-Template an, das das Template <em>%s</em> überschreibt, um diese Meldung anzupassen.';
$GLOBALS['TL_LANG']['XPT']['errorOccurred'] = 'Bei der Ausführung des Skriptes ist ein Fehler aufgetreten. Irgendetwas funktioniert nicht richtig.';
$GLOBALS['TL_LANG']['XPT']['errorFixOne'] = 'Öffnen Sie die aktuelle Log-Datei im Ordner <code>var/logs</code> bzw. <code>app/logs</code> und suchen Sie die zugehörige Fehlermeldung (normalerweise die letzte).';
$GLOBALS['TL_LANG']['XPT']['errorExplain'] = 'Die Skriptausführung wurde gestoppt, weil irgendetwas nicht korrekt funktioniert. Die eigentliche Fehlermeldung wird aus Sicherheitsgründen hinter dieser Meldung verborgen und findet sich in der aktuellen Log-Datei (siehe oben). Wenn Sie die Fehlermeldung nicht verstehen oder nicht wissen, wie das Problem zu beheben ist, durchsuchen Sie die <a href="https://contao.org/faq.html" target="_blank">Contao-FAQs</a> oder besuchen Sie die <a href="https://contao.org/support.html" target="_blank">Contao-Supportseite</a>.';
$GLOBALS['TL_LANG']['XPT']['requestToken'] = 'Ungültiges Anfrage-Token';
$GLOBALS['TL_LANG']['XPT']['invalidToken'] = 'Das Request-Token konnte nicht validiert werden.';
$GLOBALS['TL_LANG']['XPT']['tokenRetry'] = 'Bitte <a href="javascript:window.location.href=window.location.href">klicken Sie diesen Link</a> und versuchen Sie es erneut. Verwenden Sie nicht die Zurück-Schaltfläche Ihres Browsers.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainOne'] = 'Der Fehler tritt bei einer POST-Anfrage ohne gültiges Request-Token auf. In Contao 2.10 wurde die Referer-Prüfung durch ein Request-Token-System ersetzt. Wenn das Problem anhält, verwenden Sie eventuell eine inkompatible Drittanbieter-Erweiterung oder haben Ihre Contao-Installation nicht vollständig aktualisiert.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainTwo'] = 'Durchsuchen Sie die <a href="https://contao.org/faq.html" target="_blank">Contao-FAQs</a> oder besuchen Sie die <a href="https://contao.org/support.html" target="_blank">Contao-Supportseite</a> für weitere Informationen.';
$GLOBALS['TL_LANG']['XPT']['incomplete'] = 'Unvollständige Installation';
$GLOBALS['TL_LANG']['XPT']['incompleteInstallation'] = 'Die Installation wurde nicht abgeschlossen, daher kann Contao nicht korrekt funktionieren.';
$GLOBALS['TL_LANG']['XPT']['incompleteFix'] = 'Bitte öffnen Sie das Contao-Installtool (<code>/contao/install</code>) in Ihrem Browser.';
$GLOBALS['TL_LANG']['XPT']['incompleteExplain'] = 'Weitere Informationen finden Sie im <a href="https://contao.org/manual/installation.html" target="_blank">Contao-Handbuch</a>.';
$GLOBALS['TL_LANG']['XPT']['noForward'] = 'Zielseite nicht gefunden';
$GLOBALS['TL_LANG']['XPT']['noForwardPage'] = 'Gemäß Konfiguration müsste die Applikation die Anfrage zu einer anderen Seite umleiten, jedoch existiert diese Zielseite nicht oder wurde noch nicht veröffentlicht.';
$GLOBALS['TL_LANG']['XPT']['noForwardFix'] = 'Dieses Problem muss vom Administrator der Webseite behoben werden. Wenn Sie ein Besucher sind, können Sie nichts weiter tun als den <a href="%s">Webmaster</a> zu kontaktieren und ihn über das Problem zu informieren.';
$GLOBALS['TL_LANG']['XPT']['noRoot'] = 'Keinen Startpunkt gefunden';
$GLOBALS['TL_LANG']['XPT']['noRootPage'] = 'Es gibt keinen Startpunkt einer Webseite, der zu der angefragten Sprache und/oder Domain passt.';
$GLOBALS['TL_LANG']['XPT']['noRootFix'] = 'Wenn Sie explizit eine Sprache gesetzt haben, gehen Sie zur <a href="%s">Startseite</a> und sehen Sie, ob Sie automatisch weitergeleitet werden. Andernfalls kontaktieren Sie den <a href="%s">Webmaster</a> und informieren Sie ihn über das Problem.';
$GLOBALS['TL_LANG']['XPT']['noLayout'] = 'Kein Layout angegeben';
$GLOBALS['TL_LANG']['XPT']['noLayoutSpecified'] = 'Die angefragte Seite wurde noch nicht mit einem Seitenlayout verknüpft.';
$GLOBALS['TL_LANG']['XPT']['noLayoutFix'] = 'Stellen Sie sicher, dass jeder Startpunkt einer Webseite in der Seitenstruktur mit einem Seitenlayout verknüpft ist.';
$GLOBALS['TL_LANG']['XPT']['noLayoutExplain'] = 'Weitere Informationen finden Sie im <a href="https://contao.org/manual/managing-pages.html" target="_blank">Contao-Handbuch</a>.';
$GLOBALS['TL_LANG']['XPT']['noActive'] = 'Keine aktiven Seiten gefunden';
$GLOBALS['TL_LANG']['XPT']['noActivePages'] = 'Ihre Anfrage bezieht sich auf eine Webseite, die noch keine veröffentlichten Seiten enthält.';
$GLOBALS['TL_LANG']['XPT']['noActiveFix'] = 'Die Webseite befindet sich höchstwahrscheinlich noch im Aufbau und wird in ein paar Tagen online sein. Wenn Sie trotzdem denken, dass es ein Problem gibt, kontaktieren Sie den <a href="%s">Webmaster</a> und informieren Sie ihn darüber.';
$GLOBALS['TL_LANG']['XPT']['unavailable'] = 'Dienst nicht verfügbar';
$GLOBALS['TL_LANG']['XPT']['maintenance'] = 'Die Webseite ist momentan nicht verfügbar. Bitte versuchen Sie es später noch einmal.';
$GLOBALS['TL_LANG']['XPT']['insecure'] = 'Unsicheres Document-Root';
$GLOBALS['TL_LANG']['XPT']['insecureRoot'] = 'Ihre Installation ist unsicher, weil nicht-öffentliche Ressourcen über HTTP erreichbar sind.';
$GLOBALS['TL_LANG']['XPT']['insecureFix'] = 'Bitte machen Sie den Unterordner <code>web/</code> zum Document-Root, indem Sie das Domain-Routing in Ihrem Server-Control-Panel bzw. die Vhosts-Datei Ihres Webservers anpassen.';
$GLOBALS['TL_LANG']['XPT']['insecureExplain'] = 'Contao 4 benutzt keine <code>.htaccess</code>-Dateien mehr für den Zugriffsschutz und verwendet stattdessen einen öffentlichen Unterordner als Document-Root. Alles oberhalb des Document-Root darf nicht über HTTP erreichbar sein, da andernfalls jeder nicht-öffentliche Ressourcen, inklusive sensibler Dateien wie Konfigurationsdateien, herunterladen könnte.';

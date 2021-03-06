<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'This field was not expected.' => 'Dieses Feld wurde nicht erwartet.',
    'This field is missing.' => 'Dieses Feld fehlt.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert oder der temporäre Ordner existiert nicht.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige internationale Bankkontonummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu groß ({{ ratio }}). Der erlaubte Maximalwert ist {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu klein ({{ ratio }}). Der erwartete Minimalwert ist {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Das Bild ist quadratisch ({{ width }}x{{ height }}px). Quadratische Bilder sind nicht erlaubt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Das Bild ist im Querformat ({{ width }}x{{ height }}px). Bilder im Querformat sind nicht erlaubt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Das Bild ist im Hochformat ({{ width }}x{{ height }}px). Bilder im Hochformat sind nicht erlaubt.',
    'An empty file is not allowed.' => 'Eine leere Datei ist nicht erlaubt.',
    'The host could not be resolved.' => 'Der Hostname konnte nicht aufgelöst werden.',
    'This value does not match the expected {{ charset }} charset.' => 'Dieser Wert entspricht nicht dem erwarteten Zeichensatz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dieser Wert ist kein gültiger BIC.',
    'Error' => 'Fehler',
    'This is not a valid UUID.' => 'Dies ist keine gültige UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Dieser Wert sollte ein Vielfaches von {{ compared_value }} sein.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Diese internationale Bankleitzahl (BIC) ist nicht mit der IBAN {{ iban }} assoziiert.',
    'This value should be valid JSON.' => 'Dieser Wert sollte gültiges JSON sein.',
    'This collection should contain only unique elements.' => 'Diese Sammlung darf keine doppelten Elemente enthalten.',
    'This value should be positive.' => 'Diese Zahl sollte positiv sein.',
    'This value should be either positive or zero.' => 'Diese Zahl sollte entweder positiv oder 0 sein.',
    'This value should be negative.' => 'Diese Zahl sollte negativ sein.',
    'This value should be either negative or zero.' => 'Diese Zahl sollte entweder negativ oder 0 sein.',
    'This value is not a valid timezone.' => 'Dieser Wert ist keine gültige Zeitzone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Dieses Passwort ist Teil eines Datenlecks, es darf nicht verwendet werden.',
    'This value should be between {{ min }} and {{ max }}.' => 'Dieser Wert sollte zwischen {{ min }} und {{ max }} sein.',
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte das Formular erneut zu senden.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Fehlerhafte Zugangsdaten.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'Digest nonce has expired.' => 'Digest nonce ist abgelaufen.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Der Benutzername wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
  ),
  'time' => 
  array (
    'diff.ago.year' => 'vor einem Jahr|vor %count% Jahren',
    'diff.ago.month' => 'vor einem Monat|vor %count% Monaten',
    'diff.ago.day' => 'vor einem Tag|vor %count% Tagen',
    'diff.ago.hour' => 'vor einer Stunde|vor %count% Stunden',
    'diff.ago.minute' => 'vor einer Minute|vor %count% Minuten',
    'diff.ago.second' => 'vor einer Sekunde|vor %count% Sekunden',
    'diff.empty' => 'jetzt',
    'diff.in.second' => 'in einer Sekunde|in %count% Sekunden',
    'diff.in.hour' => 'in einer Stunde|in %count% Stunden',
    'diff.in.minute' => 'in einer Minute|in %count% Minuten',
    'diff.in.day' => 'in einem Tag|in %count% Tagen',
    'diff.in.month' => 'in einem Monat|in %count% Monaten',
    'diff.in.year' => 'in einem Jahr|in %count% Jahren',
  ),
  'messages' => 
  array (
    'install_tool' => 'Contao-Installtool',
    'an_error_occurred' => 'Es ist ein Fehler aufgetreten',
    'locked_headline' => 'Das Installtool wurde gesperrt!',
    'locked_explanation' => 'Aus Sicherheitsgründen wurde das Installtool gesperrt, nachdem dreimal hintereinander ein falsches Passwort eingegeben wurde. Sie können es entweder im Contao Manager entsperren oder den Befehl <code>contao:install:unlock</code> auf der Konsole ausführen.',
    'file_permissions_headline' => 'PHP kann keine Dateien schreiben!',
    'file_permissions_explanation' => 'Ihr Server unterstützt den Dateizugriff per PHP nicht; vermutlich läuft PHP als Apache-Modul unter einem anderen Benutzer. Bitte wenden Sie sich an Ihren Server-Administrator, damit dieser das Problem behebt.',
    'file_permissions_warning' => ' <strong>Versuchen Sie keinesfalls, das Problem selbst zu beheben, indem Sie die Dateien und Ordner für jedermann beschreibbar machen!</strong>',
    'accept_license' => 'Lizenz akzeptieren',
    'set_password' => 'Installtool-Passwort',
    'set_password_hint' => 'Bitte vergeben Sie ein Passwort, um unberechtigte Zugriffe zu vermeiden.',
    'password' => 'Passwort',
    'confirmation' => 'Bestätigung',
    'save_password' => 'Passwort speichern',
    'password_confirmation_mismatch' => 'Das Passwort stimmt nicht mit der Bestätigung überein!',
    'password_too_short' => 'Das Passwort muss mindestens %d Zeichen lang sein!',
    'login' => 'Anmelden',
    'login_explanation' => 'Bitte geben Sie das Installtool-Passwort ein. Das Installtool-Passwort ist nicht gleich dem Contao Backend-Passwort.',
    'allow_cookies' => 'Für die Nutzung von Contao müssen Cookies erlaubt sein.',
    'invalid_password' => 'Ungültiges Passwort!',
    'database_connection' => 'Datenbankverbindung',
    'database_connected' => 'Datenbankverbindung hergestellt.',
    'database_dot_in_dbname' => 'Der Datenbankname darf keine Punkte enthalten!',
    'database_could_not_connect' => 'Datenbankverbindung fehlgeschlagen!',
    'database_connection_explain' => 'Bitte geben Sie Ihre Datenbank-Zugangsdaten ein.',
    'database_host' => 'Host',
    'database_port' => 'Portnummer',
    'database_user' => 'Benutzername',
    'database_password' => 'Passwort',
    'database_name' => 'Datenbankname',
    'save_settings' => 'Einstellungen speichern',
    'update_tables' => 'Datenbank aktualisieren',
    'update_tables_explain' => 'Bitte beachten Sie, dass der Update-Assistent nur Tabellen berücksichtigt, die mit <code>tl_</code> beginnen.',
    'update_tables_confirm' => 'Die Datenbank ist aktuell.',
    'update_save' => 'Datenbank aktualisieren',
    'CREATE' => 'Tabellen anlegen',
    'ALTER_ADD' => 'Spalten anlegen',
    'ALTER_CHANGE' => 'Spalten ändern',
    'ALTER_DROP' => 'Spalten löschen',
    'DROP' => 'Tabellen löschen',
    'select_all' => 'Alle auswählen',
    'template_import' => 'Ein Template importieren',
    'template_import_explain' => 'Hier können Sie eine <code>.sql</code>-Datei aus dem <code>templates</code>-Verzeichnis importieren. Dabei werden alle bestehenden Daten gelöscht! Wenn Sie stattdessen lediglich ein Theme importieren wollen, nutzen Sie bitte den Theme-Manager im Contao-Backend.',
    'import_exception' => 'Der Import konnte nicht abgeschlossen werden! Ist die Datenbank aktuell und die Template-Datei kompatibel mit Ihrer Contao-Version?',
    'import_empty_source' => 'Bitte wählen Sie eine Template-Datei!',
    'import_data_will_be_deleted' => 'Alle bestehenden Daten werden gelöscht!',
    'imported_on' => 'Template importiert am %s.',
    'templates' => 'Templates',
    'do_not_truncate' => 'Tabellen nicht leeren',
    'import_confirm' => 'Alle bestehenden Daten werden gelöscht. Möchten Sie trotzdem fortfahren?',
    'template_save' => 'Ein Template importieren',
    'admin_create' => 'Ein Administratorkonto anlegen',
    'admin_create_explain' => 'Hier können Sie ein Administratorkonto für die Anmeldung im Contao-Backend erstellen.',
    'admin_confirm' => 'Ein Administratorkonto wurde erstellt.',
    'admin_username' => 'Benutzername',
    'admin_name' => 'Name',
    'admin_email' => 'E-Mail',
    'admin_save' => 'Administratorkonto anlegen',
    'admin_error_extnd' => 'Aus Sicherheitsgründen können Sie folgende Zeichen hier nicht verwenden: #<>()\\=',
    'admin_error_no_space' => 'Der Benutzername darf keine Leerzeichen enthalten!',
    'admin_error_email' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein!',
    'admin_error_password_match' => 'Die eingegebenen Passwörter stimmen nicht überein!',
    'admin_error_password_user' => 'Der Benutzername und das Passwort dürfen nicht gleich sein!',
    'admin_error' => 'Bitte füllen Sie alle Felder aus, um ein Administratorkonto zu erstellen!',
    'congratulations' => 'Gratulation!',
    'congratulations_explain' => 'Sie haben Contao erfolgreich installiert.',
    'installation_complete' => 'Installation abgeschlossen',
    'installation_complete_explain' => 'Rufen Sie nun das Contao-Backend auf und überprüfen Sie die Systemeinstellungen.',
    'back_end' => 'Contao-Backend',
    'old_database' => 'Die Datenbank ist zu alt!',
    'old_database_explanation' => 'Sie benötigen mindestens Contao 3.2, um das Update auf Contao 4 durchzuführen.',
    'console_explanation' => 'Eine Installationsaufgabe konnte nicht abgeschlossen werden!',
    'duplicate_subscriptions' => 'Doppelte Abonnements',
    'duplicate_subscriptions_begin' => 'Es wurden doppelte Newsletter-Abonnements gefunden:',
    'duplicate_subscriptions_end' => 'Die doppelten Einträge wurden automatisch bereinigt. Eine Kopie der originalen Abonnements wurde in <code>tl_newsletter_recipients_backup</code> gespeichert.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'time' => 
  array (
    'diff.ago.year' => '1 year ago|%count% years ago',
    'diff.ago.month' => '1 month ago|%count% months ago',
    'diff.ago.day' => '1 day ago|%count% days ago',
    'diff.ago.hour' => '1 hour ago|%count% hours ago',
    'diff.ago.minute' => '1 minute ago|%count% minutes ago',
    'diff.ago.second' => '1 second ago|%count% seconds ago',
    'diff.empty' => 'now',
    'diff.in.second' => 'in 1 second|in %count% seconds',
    'diff.in.hour' => 'in 1 hour|in %count% hours',
    'diff.in.minute' => 'in 1 minute|in %count% minutes',
    'diff.in.day' => 'in 1 day|in %count% days',
    'diff.in.month' => 'in 1 month|in %count% months',
    'diff.in.year' => 'in 1 year|in %count% years',
  ),
  'maintenance' => 
  array (
    'lexik_maintenance.success_unlock' => 'Server is online.',
    'lexik_maintenance.not_success_unlock' => 'Impossible to do this action.',
    'lexik_maintenance.not_success_lock' => 'Server is already locking.',
    'lexik_maintenance.success_lock_database' => 'Server is under maintenance with driver database.',
    'lexik_maintenance.success_lock_file' => 'Server is under maintenance with driver file.',
    'lexik_maintenance.success_lock_memc' => 'Server is under maintenance with memcache.',
    'lexik_maintenance.success_lock_shm' => 'Server is under maintenance with shm.',
  ),
  'messages' => 
  array (
    'install_tool' => 'Contao install tool',
    'an_error_occurred' => 'An error occurred',
    'locked_headline' => 'The install tool has been locked!',
    'locked_explanation' => 'For security reasons, the install tool has been locked after a wrong password had been entered more than three times in a row. You can unlock it in the Contao Manager or by running <code>contao:install:unlock</code> on the command line.',
    'file_permissions_headline' => 'PHP is not allowed to write files!',
    'file_permissions_explanation' => 'Your server does not support file access via PHP; most likely PHP runs as Apache module under a different user. Please contact your server administrator and ask him to fix the problem.',
    'file_permissions_warning' => '<strong>Do not attempt to fix this yourself by making files and folders writable for everyone!</strong>',
    'accept_license' => 'Accept license',
    'set_password' => 'Install tool password',
    'set_password_hint' => 'Please enter a password to prevent unauthorized access.',
    'password' => 'Password',
    'confirmation' => 'Confirmation',
    'save_password' => 'Save password',
    'password_confirmation_mismatch' => 'The password does not match the confirmation!',
    'password_too_short' => 'The password should be at least %d characters long!',
    'login' => 'Login',
    'login_explanation' => 'Please enter the install tool password. The install tool password is not the same as the Contao back end password.',
    'allow_cookies' => 'You have to allow cookies to use Contao.',
    'invalid_password' => 'Invalid password!',
    'database_connection' => 'Database connection',
    'database_connected' => 'Database connection established.',
    'database_dot_in_dbname' => 'The database name must not contain dots!',
    'database_could_not_connect' => 'Could not connect to the database!',
    'database_connection_explain' => 'Please enter your database connection parameters.',
    'database_host' => 'Host',
    'database_port' => 'Port number',
    'database_user' => 'Username',
    'database_password' => 'Password',
    'database_name' => 'Database name',
    'save_settings' => 'Save settings',
    'update_tables' => 'Update the database',
    'update_tables_explain' => 'Please note that the update assistant only handles tables starting with <code>tl_</code>.',
    'update_tables_confirm' => 'The database is up to date.',
    'update_save' => 'Update database',
    'CREATE' => 'Create tables',
    'ALTER_ADD' => 'Add columns',
    'ALTER_CHANGE' => 'Change columns',
    'ALTER_DROP' => 'Drop columns',
    'DROP' => 'Drop tables',
    'select_all' => 'Select all',
    'template_import' => 'Import a template',
    'template_import_explain' => 'Here you can import an <code>.sql</code> file from the <code>templates</code> directory. Any existing data will be deleted! If you only want to import a theme, please use the theme manager in the Contao back end instead.',
    'import_exception' => 'The import failed! Is the database up to date and is the template file compatible with your Contao version?',
    'import_empty_source' => 'Please choose a template file!',
    'import_data_will_be_deleted' => 'Any existing data will be deleted!',
    'imported_on' => 'Template imported on %s.',
    'templates' => 'Templates',
    'do_not_truncate' => 'Do not truncate the tables',
    'import_confirm' => 'Any existing data will be deleted! Do you really want to continue?',
    'template_save' => 'Import template',
    'admin_create' => 'Create an admin user',
    'admin_create_explain' => 'Here you can create an admin user to log into the Contao back end.',
    'admin_confirm' => 'An admin user has been created.',
    'admin_username' => 'Username',
    'admin_name' => 'Name',
    'admin_email' => 'E-mail',
    'admin_save' => 'Create admin user',
    'admin_error_extnd' => 'For security reasons you can not use the following characters here: #<>()\\=',
    'admin_error_no_space' => 'The username must not contain any whitespace characters!',
    'admin_error_email' => 'Please enter a valid e-mail address!',
    'admin_error_password_match' => 'The passwords did not match!',
    'admin_error_password_user' => 'Your username and password must not be the same!',
    'admin_error' => 'Please fill in all fields to create an admin user!',
    'congratulations' => 'Congratulations!',
    'congratulations_explain' => 'You have successfully installed Contao.',
    'installation_complete' => 'Installation complete',
    'installation_complete_explain' => 'Now please go to the Contao back end and check the system settings.',
    'back_end' => 'Contao back end',
    'old_database' => 'The database is too old!',
    'old_database_explanation' => 'You need at least Contao 3.2 to upgrade to Contao 4.',
    'console_explanation' => 'A post installation task could not be completed!',
    'duplicate_subscriptions' => 'Duplicate subscriptions',
    'duplicate_subscriptions_begin' => 'Duplicate newsletter subscriptions found:',
    'duplicate_subscriptions_end' => 'The duplicate entries have been purged automatically. A backup of the original subscriptions has been stored in <code>tl_newsletter_recipients_backup</code>.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;

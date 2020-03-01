<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/de/tl_maintenance.xlf
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][0] = 'Daten bereinigen';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][1] = 'Bitte wählen Sie die zu bereinigenden bzw. neu zu erstellenden Daten aus.';
$GLOBALS['TL_LANG']['tl_maintenance']['frontendUser'][0] = 'Frontend-Benutzer';
$GLOBALS['TL_LANG']['tl_maintenance']['frontendUser'][1] = 'Um geschützte Seiten zu indizieren, muss ein Frontend-Benutzer angemeldet werden.';
$GLOBALS['TL_LANG']['tl_maintenance']['job'] = 'Job';
$GLOBALS['TL_LANG']['tl_maintenance']['description'] = 'Beschreibung';
$GLOBALS['TL_LANG']['tl_maintenance']['maintenanceMode'] = 'Wartungsmodus';
$GLOBALS['TL_LANG']['tl_maintenance']['maintenanceEnable'] = 'Aktivieren';
$GLOBALS['TL_LANG']['tl_maintenance']['maintenanceDisable'] = 'Deaktivieren';
$GLOBALS['TL_LANG']['tl_maintenance']['clearCache'] = 'Daten bereinigen';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheCleared'] = 'Die Daten wurden bereinigt';
$GLOBALS['TL_LANG']['tl_maintenance']['searchIndex'] = 'Suchindex neu aufbauen';
$GLOBALS['TL_LANG']['tl_maintenance']['indexSubmit'] = 'Suchindex aufbauen';
$GLOBALS['TL_LANG']['tl_maintenance']['noSearchable'] = 'Keine durchsuchbaren Seiten gefunden';
$GLOBALS['TL_LANG']['tl_maintenance']['indexNote'] = 'Bitte warten Sie, bis die Seite vollständig geladen ist, bevor Sie Ihre Arbeit fortsetzen!';
$GLOBALS['TL_LANG']['tl_maintenance']['indexLoading'] = 'Bitte warten Sie, während der Suchindex neu aufgebaut wird.';
$GLOBALS['TL_LANG']['tl_maintenance']['indexComplete'] = 'Der Suchindex wurde neu aufgebaut. Sie können nun fortfahren.';
$GLOBALS['TL_LANG']['tl_maintenance']['updateHelp'] = 'Bitte geben Sie Ihre %s ein.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][0] = 'Suchindex löschen';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][1] = 'Leert die Tabellen <code>tl_search</code> und <code>tl_search_index</code>. Anschließend muss der Suchindex neu aufgebaut werden (siehe oben).';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][0] = 'Papierkorb leeren';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][1] = 'Leert die Tabelle <code>tl_undo</code>, in der die gelöschten Datensätze gespeichert werden. Die Daten werden hierdurch endgültig gelöscht.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][0] = 'Versionen löschen';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][1] = 'Leert die Tabelle <code>tl_version</code>, in der die Versionen eines Datensatzes gespeichert werden. Die Daten werden hierdurch endgültig gelöscht.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][0] = 'System-Log löschen';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][1] = 'Leert die Tabelle <code>tl_log</code>, in der die System-Log-Einträge gespeichert werden. Die Daten werden hierdurch endgültig gelöscht.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][0] = 'Bildercache leeren';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][1] = 'Löscht die automatisch erstellten Bilder und leert anschließend den Seitencache, damit keine ungültigen Links zurück bleiben.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][0] = 'Skriptcache leeren';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][1] = 'Löscht die automatisch erstellten <code>.css</code>- und <code>.js</code>-Dateien, schreibt die internen Stylesheets neu und leert anschließend den Seitencache.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][0] = 'Seitencache leeren';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][1] = 'Löscht die gespeicherten Versionen der Frontend-Seiten.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['search'][0] = 'Suchcache leeren';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['search'][1] = 'Löscht die gespeicherten Versionen der Suchabfragen.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][0] = 'Temp-Ordner leeren';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][1] = 'Löscht die temporären Dateien.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][0] = 'XML-Dateien neu schreiben';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][1] = 'Schreibt die XML-Dateien (Sitemaps/Feeds) neu und leert anschließend den Seitencache, damit keine ungültigen Links zurück bleiben.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][0] = 'Symlinks neu erstellen';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][1] = 'Legt die Symlinks im Ordner <code>web/</code> (Document-Root) neu an.';

/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Custom Elements maintenance job translations
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_LANG']['tl_maintenance_jobs']['rocksolid_custom_elements'][0] = 'Custom Elements Cache leeren';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['rocksolid_custom_elements'][1] = 'Löscht die gespeicherten DCA-Dateien aller RockSolid Custom Elements.';

/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Icon Picker maintenance job translations
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_LANG']['tl_maintenance_jobs']['rocksolid_icon_picker'][0] = 'Icon Picker Cache leeren';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['rocksolid_icon_picker'][1] = 'Löscht die gespeicherten Icon-Codes aller RockSolid Icon Picker.';

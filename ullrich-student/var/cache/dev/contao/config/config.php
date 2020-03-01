<?php

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Back end modules
$GLOBALS['BE_MOD'] = array
(
	// Content modules
	'content' => array
	(
		'article' => array
		(
			'tables'      => array('tl_article', 'tl_content'),
			'table'       => array('contao.controller.backend_csv_import', 'importTableWizard'),
			'list'        => array('contao.controller.backend_csv_import', 'importListWizard')
		),
		'form' => array
		(
			'tables'      => array('tl_form', 'tl_form_field'),
			'option'      => array('contao.controller.backend_csv_import', 'importOptionWizard')
		)
	),

	// Design modules
	'design' => array
	(
		'themes' => array
		(
			'tables'      => array('tl_theme', 'tl_module', 'tl_style_sheet', 'tl_style', 'tl_layout', 'tl_image_size', 'tl_image_size_item'),
			'importTheme' => array('Theme', 'importTheme'),
			'exportTheme' => array('Theme', 'exportTheme'),
			'import'      => array('StyleSheets', 'importStyleSheet'),
			'export'      => array('StyleSheets', 'exportStyleSheet')
		),
		'page' => array
		(
			'tables'      => array('tl_page')
		),
		'tpl_editor' => array
		(
			'tables'      => array('tl_templates'),
			'new_tpl'     => array('tl_templates', 'addNewTemplate'),
			'compare'     => array('tl_templates', 'compareTemplate')
		)
	),

	// Account modules
	'accounts' => array
	(
		'member' => array
		(
			'tables'      => array('tl_member')
		),
		'mgroup' => array
		(
			'tables'      => array('tl_member_group')
		),
		'user' => array
		(
			'tables'      => array('tl_user')
		),
		'group' => array
		(
			'tables'      => array('tl_user_group')
		)
	),

	// System modules
	'system' => array
	(
		'files' => array
		(
			'tables'      => array('tl_files')
		),
		'log' => array
		(
			'tables'      => array('tl_log')
		),
		'settings' => array
		(
			'tables'      => array('tl_settings')
		),
		'maintenance' => array
		(
			'callback'    => 'ModuleMaintenance'
		),
		'undo' => array
		(
			'tables'      => array('tl_undo')
		)
	)
);

// Front end modules
$GLOBALS['FE_MOD'] = array
(
	'navigationMenu' => array
	(
		'navigation'     => 'ModuleNavigation',
		'customnav'      => 'ModuleCustomnav',
		'breadcrumb'     => 'ModuleBreadcrumb',
		'quicknav'       => 'ModuleQuicknav',
		'quicklink'      => 'ModuleQuicklink',
		'booknav'        => 'ModuleBooknav',
		'articlenav'     => 'ModuleArticlenav',
		'sitemap'        => 'ModuleSitemap'
	),
	'user' => array
	(
		'login'          => 'ModuleLogin',
		'logout'         => 'ModuleLogout',
		'personalData'   => 'ModulePersonalData',
		'registration'   => 'ModuleRegistration',
		'changePassword' => 'ModuleChangePassword',
		'lostPassword'   => 'ModulePassword',
		'closeAccount'   => 'ModuleCloseAccount'
	),
	'application' => array
	(
		'form'           => 'Form',
		'search'         => 'ModuleSearch'
	),
	'miscellaneous' => array
	(
		'flash'          => 'ModuleFlash',
		'articlelist'    => 'ModuleArticleList',
		'randomImage'    => 'ModuleRandomImage',
		'html'           => 'ModuleHtml',
		'rssReader'      => 'ModuleRssReader'
	)
);

// Content elements
$GLOBALS['TL_CTE'] = array
(
	'texts' => array
	(
		'headline'        => 'ContentHeadline',
		'text'            => 'ContentText',
		'html'            => 'ContentHtml',
		'list'            => 'ContentList',
		'table'           => 'ContentTable',
		'code'            => 'ContentCode',
		'markdown'        => 'ContentMarkdown'
	),
	'accordion' => array
	(
		'accordionSingle' => 'ContentAccordion',
		'accordionStart'  => 'ContentAccordionStart',
		'accordionStop'   => 'ContentAccordionStop'
	),
	'slider' => array
	(
		'sliderStart'     => 'ContentSliderStart',
		'sliderStop'      => 'ContentSliderStop'
	),
	'links' => array
	(
		'hyperlink'       => 'ContentHyperlink',
		'toplink'         => 'ContentToplink'
	),
	'media' => array
	(
		'image'           => 'ContentImage',
		'gallery'         => 'ContentGallery',
		'player'          => 'ContentMedia',
		'youtube'         => 'ContentYouTube',
		'vimeo'           => 'ContentVimeo'
	),
	'files' => array
	(
		'download'        => 'ContentDownload',
		'downloads'       => 'ContentDownloads'
	),
	'includes' => array
	(
		'article'         => 'ContentArticle',
		'alias'           => 'ContentAlias',
		'form'            => 'Form',
		'module'          => 'ContentModule',
		'teaser'          => 'ContentTeaser'
	)
);

// Back end form fields
$GLOBALS['BE_FFL'] = array
(
	'text'           => 'TextField',
	'password'       => 'Password',
	'textStore'      => 'TextStore',
	'textarea'       => 'TextArea',
	'select'         => 'SelectMenu',
	'checkbox'       => 'CheckBox',
	'checkboxWizard' => 'CheckBoxWizard',
	'radio'          => 'RadioButton',
	'radioTable'     => 'RadioTable',
	'inputUnit'      => 'InputUnit',
	'trbl'           => 'TrblField',
	'chmod'          => 'ChmodTable',
	'pageTree'       => 'PageTree',
	'pageSelector'   => 'PageSelector',
	'fileTree'       => 'FileTree',
	'fileSelector'   => 'FileSelector',
	'fileUpload'     => 'Upload',
	'tableWizard'    => 'TableWizard',
	'listWizard'     => 'ListWizard',
	'optionWizard'   => 'OptionWizard',
	'moduleWizard'   => 'ModuleWizard',
	'keyValueWizard' => 'KeyValueWizard',
	'imageSize'      => 'ImageSize',
	'timePeriod'     => 'TimePeriod',
	'metaWizard'     => 'MetaWizard',
	'sectionWizard'  => 'SectionWizard'
);

// Front end form fields
$GLOBALS['TL_FFL'] = array
(
	'explanation' => 'FormExplanation',
	'html'        => 'FormHtml',
	'fieldset'    => 'FormFieldset',
	'text'        => 'FormTextField',
	'password'    => 'FormPassword',
	'textarea'    => 'FormTextArea',
	'select'      => 'FormSelectMenu',
	'radio'       => 'FormRadioButton',
	'checkbox'    => 'FormCheckBox',
	'upload'      => 'FormFileUpload',
	'hidden'      => 'FormHidden',
	'captcha'     => 'FormCaptcha',
	'submit'      => 'FormSubmit'
);

// Page types
$GLOBALS['TL_PTY'] = array
(
	'regular'   => 'PageRegular',
	'forward'   => 'PageForward',
	'redirect'  => 'PageRedirect',
	'root'      => 'PageRoot',
	'logout'    => 'PageLogout',
	'error_403' => 'PageError403',
	'error_404' => 'PageError404'
);

// Maintenance
$GLOBALS['TL_MAINTENANCE'] = array
(
	'Maintenance',
	'RebuildIndex',
	'PurgeData'
);

// Purge jobs
$GLOBALS['TL_PURGE'] = array
(
	'tables' => array
	(
		'index' => array
		(
			'callback' => array('Automator', 'purgeSearchTables'),
			'affected' => array('tl_search', 'tl_search_index')
		),
		'undo' => array
		(
			'callback' => array('Automator', 'purgeUndoTable'),
			'affected' => array('tl_undo')
		),
		'versions' => array
		(
			'callback' => array('Automator', 'purgeVersionTable'),
			'affected' => array('tl_version')
		),
		'log' => array
		(
			'callback' => array('Automator', 'purgeSystemLog'),
			'affected' => array('tl_log')
		)
	),
	'folders' => array
	(
		'images' => array
		(
			'callback' => array('Automator', 'purgeImageCache'),
			'affected' => array(StringUtil::stripRootDir(System::getContainer()->getParameter('contao.image.target_dir')))
		),
		'scripts' => array
		(
			'callback' => array('Automator', 'purgeScriptCache'),
			'affected' => array('assets/js', 'assets/css')
		),
		'pages' => array
		(
			'callback' => array('Automator', 'purgePageCache'),
			'affected' => array('%s/http_cache')
		),
		'search' => array
		(
			'callback' => array('Automator', 'purgeSearchCache'),
			'affected' => array('%s/contao/search')
		),
		'temp' => array
		(
			'callback' => array('Automator', 'purgeTempFolder'),
			'affected' => array('system/tmp')
		)
	),
	'custom' => array
	(
		'xml' => array
		(
			'callback' => array('Automator', 'generateXmlFiles')
		),
		'symlinks' => array
		(
			'callback' => array('Automator', 'generateSymlinks')
		)
	)
);

// Image crop modes
$GLOBALS['TL_CROP'] = array
(
	'relative' => array
	(
		'proportional', 'box'
	),
	'exact' => array
	(
		'crop',
		'left_top',    'center_top',    'right_top',
		'left_center', 'center_center', 'right_center',
		'left_bottom', 'center_bottom', 'right_bottom'
	)
);

// Cron jobs
$GLOBALS['TL_CRON'] = array
(
	'monthly' => array(),
	'weekly' => array(),
	'daily' => array
	(
		'purgeTempFolder' => array('Automator', 'purgeTempFolder'),
		'purgeSearchCache' => array('Automator', 'purgeSearchCache'),
		'generateSitemap' => array('Automator', 'generateSitemap')
	),
	'hourly' => array(),
	'minutely' => array()
);

// Hooks
$GLOBALS['TL_HOOKS'] = array
(
	'getSystemMessages' => array
	(
		array('Messages', 'versionCheck'),
		array('Messages', 'maintenanceCheck'),
		array('Messages', 'languageFallback')
	)
);

// Register the auto_item keywords
$GLOBALS['TL_AUTO_ITEM'] = array('items', 'events');

// Do not index a page if one of the following parameters is set
$GLOBALS['TL_NOINDEX_KEYS'] = array('id', 'file', 'token', 'day', 'month', 'year', 'page', 'keywords', 'PHPSESSID');

// Register the supported CSS units
$GLOBALS['TL_CSS_UNITS'] = array('px', '%', 'em', 'rem', 'vw', 'vh', 'vmin', 'vmax', 'ex', 'pt', 'pc', 'in', 'cm', 'mm');

// Wrapper elements
$GLOBALS['TL_WRAPPERS'] = array
(
	'start' => array
	(
		'accordionStart',
		'sliderStart'
	),
	'stop' => array
	(
		'accordionStop',
		'sliderStop'
	),
	'single' => array
	(
		'accordionSingle'
	),
	'separator' => array()
);

// Other global arrays
$GLOBALS['TL_MODELS'] = array();
$GLOBALS['TL_PERMISSIONS'] = array();
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add back end modules
array_insert($GLOBALS['BE_MOD']['content'], 2, array
(
	'faq' => array
	(
		'tables' => array('tl_faq_category', 'tl_faq')
	)
));

// Front end modules
array_insert($GLOBALS['FE_MOD'], 3, array
(
	'faq' => array
	(
		'faqlist'   => 'ModuleFaqList',
		'faqreader' => 'ModuleFaqReader',
		'faqpage'   => 'ModuleFaqPage'
	)
));

// Style sheet
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'bundles/contaofaq/style.css|static';
}

// Register hooks
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('ModuleFaq', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('contao_faq.listener.insert_tags', 'onReplaceInsertTags');

// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'faqs';
$GLOBALS['TL_PERMISSIONS'][] = 'faqp';
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Front end module
$GLOBALS['FE_MOD']['application']['listing'] = 'ModuleListing';
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Back end modules
array_insert($GLOBALS['BE_MOD']['content'], 1, array
(
	'news' => array
	(
		'tables'      => array('tl_news_archive', 'tl_news', 'tl_news_feed', 'tl_content'),
		'table'       => array('TableWizard', 'importTable'),
		'list'        => array('ListWizard', 'importList')
	)
));

// Front end modules
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'news' => array
	(
		'newslist'    => 'ModuleNewsList',
		'newsreader'  => 'ModuleNewsReader',
		'newsarchive' => 'ModuleNewsArchive',
		'newsmenu'    => 'ModuleNewsMenu'
	)
));

// Cron jobs
$GLOBALS['TL_CRON']['daily']['generateNewsFeeds'] = array('News', 'generateFeeds');

// Style sheet
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'bundles/contaonews/style.css|static';
}

// Register hooks
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array('News', 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('News', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generatePage'][] = array('contao_news.listener.generate_page', 'onGeneratePage');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array('News', 'generateFeeds');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('contao_news.listener.insert_tags', 'onReplaceInsertTags');

// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'news';
$GLOBALS['TL_PERMISSIONS'][] = 'newp';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeedp';
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Back end modules
array_insert($GLOBALS['BE_MOD']['content'], 4, array
(
	'newsletter' => array
	(
		'tables'     => array('tl_newsletter_channel', 'tl_newsletter', 'tl_newsletter_recipients'),
		'send'       => array('Newsletter', 'send'),
		'import'     => array('Newsletter', 'importRecipients'),
		'stylesheet' => 'bundles/contaonewsletter/style.css'
	)
));

// Front end modules
array_insert($GLOBALS['FE_MOD'], 4, array
(
	'newsletter' => array
	(
		'subscribe'        => 'ModuleSubscribe',
		'unsubscribe'      => 'ModuleUnsubscribe',
		'newsletterlist'   => 'ModuleNewsletterList',
		'newsletterreader' => 'ModuleNewsletterReader'
	)
));

// Register hooks
$GLOBALS['TL_HOOKS']['createNewUser'][] = array('Newsletter', 'createNewUser');
$GLOBALS['TL_HOOKS']['activateAccount'][] = array('Newsletter', 'activateAccount');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Newsletter', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['closeAccount'][] = array('Newsletter', 'removeSubscriptions');

// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'newsletters';
$GLOBALS['TL_PERMISSIONS'][] = 'newsletterp';
}

namespace  {
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Columns configuration
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_HOOKS']['generatePage'][] = array('MadeYourDay\\RockSolidColumns\\Columns', 'generatePageHook');
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('MadeYourDay\\RockSolidColumns\\Columns', 'getContentElementHook');

$GLOBALS['TL_CTE']['rs_columns']['rs_columns_start'] = 'MadeYourDay\\RockSolidColumns\\Element\\ColumnsStart';
$GLOBALS['TL_CTE']['rs_columns']['rs_columns_stop'] = 'MadeYourDay\\RockSolidColumns\\Element\\ColumnsStop';
$GLOBALS['TL_CTE']['rs_columns']['rs_column_start'] = 'MadeYourDay\\RockSolidColumns\\Element\\ColumnStart';
$GLOBALS['TL_CTE']['rs_columns']['rs_column_stop'] = 'MadeYourDay\\RockSolidColumns\\Element\\ColumnStop';

$GLOBALS['TL_WRAPPERS']['start'][] = 'rs_columns_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'rs_columns_stop';
$GLOBALS['TL_WRAPPERS']['start'][] = 'rs_column_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'rs_column_stop';
}

namespace  {
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Custom Elements configuration
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_HOOKS']['initializeSystem'][] = array('MadeYourDay\\RockSolidCustomElements\\CustomElements', 'loadConfig');
$GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('MadeYourDay\\RockSolidCustomElements\\CustomElements', 'loadLanguageFileHook');
$GLOBALS['TL_HOOKS']['exportTheme'][] = array('MadeYourDay\\RockSolidCustomElements\\CustomElements', 'exportThemeHook');
$GLOBALS['TL_HOOKS']['extractThemeFiles'][] = array('MadeYourDay\\RockSolidCustomElements\\CustomElements', 'extractThemeFilesHook');

$GLOBALS['BE_FFL']['rsce_list_start'] = 'MadeYourDay\\RockSolidCustomElements\\Widget\\ListStart';
$GLOBALS['BE_FFL']['rsce_list_stop'] = 'MadeYourDay\\RockSolidCustomElements\\Widget\\ListStop';
$GLOBALS['BE_FFL']['rsce_list_item_start'] = 'MadeYourDay\\RockSolidCustomElements\\Widget\\ListItemStart';
$GLOBALS['BE_FFL']['rsce_list_item_stop'] = 'MadeYourDay\\RockSolidCustomElements\\Widget\\ListItemStop';
$GLOBALS['BE_FFL']['rsce_group_start'] = 'MadeYourDay\\RockSolidCustomElements\\Widget\\GroupStart';
$GLOBALS['BE_FFL']['rsce_list_hidden'] = 'MadeYourDay\\RockSolidCustomElements\\Widget\\Hidden';

$GLOBALS['TL_MAINTENANCE'][] = 'MadeYourDay\\RockSolidCustomElements\\CustomElementsConvert';

$GLOBALS['TL_PURGE']['custom']['rocksolid_custom_elements'] = array(
	'callback' => array('MadeYourDay\\RockSolidCustomElements\\CustomElements', 'purgeCache'),
);

// Insert the custom_elements category
array_insert($GLOBALS['TL_CTE'], 1, array('custom_elements' => array()));
array_insert($GLOBALS['FE_MOD'], 0, array('custom_elements' => array()));
}

namespace  {
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Icon Picker configuration
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['BE_FFL']['rocksolid_icon_picker'] = 'MadeYourDay\\RockSolidIconPicker\\Widget\\IconPicker';

$GLOBALS['TL_PURGE']['custom']['rocksolid_icon_picker'] = array(
	'callback' => array('MadeYourDay\\RockSolidIconPicker\\Widget\\IconPicker', 'purgeCache'),
);
}

namespace  {
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Slider back end modules configuration
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_MODELS']['tl_rocksolid_slider'] = 'MadeYourDay\\RockSolidSlider\\Model\\SliderModel';
$GLOBALS['TL_MODELS']['tl_rocksolid_slide'] = 'MadeYourDay\\RockSolidSlider\\Model\\SlideModel';

$GLOBALS['TL_CTE']['includes']['rocksolid_slider'] = 'MadeYourDay\\RockSolidSlider\\Module\\Slider';

$GLOBALS['BE_MOD']['content']['rocksolid_slider'] = array(
	'tables' => array(
		'tl_rocksolid_slider',
		'tl_rocksolid_slide',
		'tl_content',
		'tl_rocksolid_slider_license',
	),
	'icon' => 'bundles/rocksolidslider/img/icon.png',
);

array_insert($GLOBALS['FE_MOD'], 2, array(
	'miscellaneous' => array(
		'rocksolid_slider' => 'MadeYourDay\\RockSolidSlider\\Module\\Slider',
	)
));
}

namespace  {
/**
 * Contao toolkit.
 *
 * @package    contao-toolkit
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017 netzmacht David Molineus. All rights reserved.
 * @license    LGPL-3.0-or-later https://github.com/netzmacht/contao-leaflet-maps/blob/master/LICENSE
 * @filesource
 */

$GLOBALS['TL_HOOKS']['initializeSystem'][] = [
    'netzmacht.contao_toolkit.listeners.merge_hook_listeners',
    'onInitializeSystem'
];
}

namespace  {
/**
 * Theme Helper Bundle for Contao Open Source CMS
 *
 * Copyright (C) 2019 pdir GmbH // pdir / digital agentur <develop@pdir.de>
 *
 * @package    pdir/contao-theme-helper-bundle
 * @link       https://github.com/pdir/contao-theme-helper-bundle
 * @license    LGPL-3.0+
 * @author     Mathias Arzberger <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Backend Modules
 */
array_insert($GLOBALS['BE_MOD']['contaoThemesNet'], 1, array
(
    'thLicence' => array
    (
        'callback'          => 'Pdir\\ThemeHelperBundle\\Backend\\Licence',
        'tables'            => [],
    ),
));

/**
 * Register hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('theme_helper.listener.insert_tags', 'onReplaceInsertTags');

/**
 * Javascript for Backend
 */
if (TL_MODE == 'BE')
{
    if (!is_array($GLOBALS['TL_CSS']))
    {
        $GLOBALS['TL_CSS'] = [];
    }

    $GLOBALS['TL_CSS'][] =  'bundles/themehelper/sass/th_check_domain.scss||static';
}
}

namespace  {
/*
 * folderpage extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2017, terminal42 gmbh
 * @author     terminal42 gmbh <info@terminal42.ch>
 * @license    LGPL-3.0+
 * @link       http://github.com/terminal42/contao-folderpage
 */

/*
 * Page type.
 */
$GLOBALS['TL_PTY']['folder'] = 'Terminal42\\FolderpageBundle\\PageType\\FolderPage';

/*
 * Replace core Hooks
 */
foreach ($GLOBALS['TL_HOOKS']['getSystemMessages'] as $k => $v) {
    if ('Messages' === $v[0] && 'topLevelRoot' === $v[1]) {
        $GLOBALS['TL_HOOKS']['getSystemMessages'][$k][0] = 'terminal42_folderpage.listener.system_messages';
        $GLOBALS['TL_HOOKS']['getSystemMessages'][$k][1] = 'onGetSystemMessages';
        break;
    }
}

/*
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getPageStatusIcon'][] = ['terminal42_folderpage.listener.page_status_icon', 'onGetPageStatusIcon'];
}

namespace  {
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   examia
 * @author    Andreas Deitmer <andreas.deitmer@bliz.thm.de
 * @license   GNU/LGPL
 * @copyright BliZ, 2017
 */


/**
 * BACK END MODULES
 *
 * Back end modules are stored in a global array called "BE_MOD". You can add
 * your own modules by adding them to the array.
 *
 * $GLOBALS['BE_MOD'] = array
 * (
 *    'group_1' => array
 *    (
 *       'module_1' => array
 *       (
 *          'tables'       => array('table_1', 'table_2'),
 *          'callback'     => 'ClassName',
 *          'key'          => array('Class', 'method'),
 *          'icon'         => 'path/to/icon.gif',
 *          'stylesheet'   => 'path/to/stylesheet.css',
 *          'javascript'   => 'path/to/javascript.js'
 *       )
 *    )
 * );
 *
 * Not all of the keys mentioned above (like "tables", "key", "callback" etc.)
 * have to be set. Take a look at the system/modules/core/config/config.php
 * file to see how back end modules are configured.
 */
$GLOBALS['BE_MOD']['content']['exams'] = array(
	'tables' => array('tl_exam'),
	'icon'   => ''
);

/**
 * FRONT END MODULES
 *
 * Front end modules are stored in a global array called "FE_MOD". You can add
 * your own modules by adding them to the array.
 *
 * $GLOBALS['FE_MOD'] = array
 * (
 *    'group_1' => array
 *    (
 *       'module_1' => 'ModuleClass1',
 *       'module_2' => 'ModuleClass2'
 *    )
 * );
 *
 * The keys (like "module_1") are the module names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "ModuleClass1") are the names of the classes, which will be loaded when the
 * module is rendered. The class "ModuleClass1" has to be stored in a file
 * named "ModuleClass1.php" in your module folder.
 */

array_insert($GLOBALS['FE_MOD'], 2, array
(
	'exams' => array
	(
		'exam_create'    => 'exam_create',
		'exam_details'    => 'exam_details',
		'exam_preparation_list'   => 'exam_preparation_list',
		'next_exams'   => 'next_exams',
		'current_exams'   => 'current_exams',
		'exam_times'   => 'exam_times',
		'lecturer_create'   => 'lecturer_create'
			)
));

/**
 * CONTENT ELEMENTS
 *
 * Content elements are stored in a global array called "TL_CTE". You can add
 * your own content elements by adding them to the array.
 *
 * $GLOBALS['TL_CTE'] = array
 * (
 *    'group_1' => array
 *    (
 *       'cte_1' => 'ContentClass1',
 *       'cte_2' => 'ContentClass2'
 *    )
 * );
 *
 * The keys (like "cte_1") are the element names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "ContentClass1") are the names of the classes, which will be loaded when the
 * element is rendered. The class "ContentClass1" has to be stored in a file
 * named "ContentClass1.php" in your module folder.
 */


/**
 * BACK END FORM FIELDS
 *
 * Back end form fields are stored in a global array called "BE_FFL". You can
 * add your own form fields by adding them to the array.
 *
 * $GLOBALS['BE_FFL'] = array
 * (
 *    'input'  => 'FieldClass1',
 *    'select' => 'FieldClass2'
 * );
 *
 * The keys (like "input") are the field names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "FieldClass1") are the names of the classes, which will be loaded when the
 * field is rendered. The class "FieldClass1" has to be stored in a file named
 * "FieldClass1.php" in your module folder.
 */


/**
 * FRONT END FORM FIELDS
 *
 * Front end form fields are stored in a global array called "TL_FFL". You can
 * add your own form fields by adding them to the array.
 *
 * $GLOBALS['TL_FFL'] = array
 * (
 *    'input'  => 'FieldClass1',
 *    'select' => 'FieldClass2'
 * );
 *
 * The keys (like "input") are the field names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "FieldClass1") are the names of the classes, which will be loaded when the
 * field is rendered. The class "FieldClass1" has to be stored in a file named
 * "FieldClass1.php" in your module folder.
 */


/**
 * PAGE TYPES
 *
 * Page types are stored in a global array called "TL_PTY". You can add your own
 * page types by adding them to the array.
 *
 * $GLOBALS['TL_PTY'] = array
 * (
 *    'type_1' => 'PageType1',
 *    'type_2' => 'PageType2'
 * );
 *
 * The keys (like "type_1") are the field names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "PageType1") are the names of the classes, which will be loaded when the
 * page is rendered. The class "PageType1" has to be stored in a file named
 * "PageType1.php" in your module folder.
 */


/**
 * MODEL MAPPINGS
 *
 * Model names are usually built from the table names, e.g. "tl_user_group"
 * becomes "UserGroupModel". There might be situations, however, where you need
 * to specify a custom mapping, e.g. when you are using nested namespaces.
 *
 * $GLOBALS['TL_MODELS'] = array
 * (
 *    'tl_user'       => 'Vendor\Application\UserModel',
 *    'tl_user_group' => 'Vendor\Application\UserGroupModel'
 * );
 *
 * You can register your mappings in the config.php file of your extension.
 */


/**
 * MAINTENANCE MODULES
 *
 * Maintenance modules are stored in a global array called "TL_MAINTENANCE". You
 * can add your own maintenance modules by adding them to the array.
 *
 * $GLOBALS['TL_MAINTENANCE'] = array
 * (
 *    'ClearCache',
 *    'RebuildSearchIndex'
 * );
 *
 * Take a look at the system/modules/core/classes/PurgeData.php file to see how
 * maintenance modules are set up. The class "ClearCache" has to be stored in a
 * file named "ClearCache.php" in your module folder.
 */


/**
 * PURGE JOBS
 *
 * Purge jobs are stored in a global array called "TL_PURGE". You can add your
 * own purge jobs by adding them to the array.
 *
 * $GLOBALS['TL_PURGE'] = array
 * (
 *    'job_1' => array
 *    (
 *       'tables' => array
 *       (
 *          'index' => array
 *          (
 *             'callback' => array('Automator', 'purgeSearchTables'),
 *             'affected' => array('tl_search', 'tl_search_index')
 *          ),
 *       )
 *   );
 *
 * There are three categories: "tables" stores jobs which truncate database
 * tables, "folders" stores jobs which purge folders and "custom" stores jobs
 * which only trigger a callback function.
 */


/**
 * CRON JOBS
 *
 * Cron jobs are stored in a global array called "TL_CRON". You can add your own
 * cron jobs by adding them to the array.
 *
 * $GLOBALS['TL_CRON'] = array
 * (
 *    'monthly' => array
 *    (
 *       array('Automator', 'purgeImageCache')
 *    ),
 *    'weekly'   => array(),
 *    'daily'    => array(),
 *    'hourly'   => array(),
 *    'minutely' => array()
 * );
 *
 * Note that this is rather a command scheduler than a cron job, which does not
 * guarantee an exact execution time. You can replace the command scheduler with
 * a real cron job though.
 */


/**
 * HOOKS
 *
 * Hooks are stored in a global array called "TL_HOOKS". You can register your
 * own functions by adding them to the array.
 *
 * $GLOBALS['TL_HOOKS'] = array
 * (
 *    'hook_1' => array
 *    (
 *       array('MyClass', 'myPostLogin'),
 *       array('MyClass', 'myPostLogout')
 *    )
 * );
 *
 * Hooks allow you to add functionality to the core without having to modify the
 * source code by registering callback functions to be executed on a particular
 * event. For more information see https://contao.org/manual.html.
 */


/**
 * AUTO ITEMS
 *
 * Auto items are stored in a global array called "TL_AUTO_ITEM". You can
 * register your own auto items by adding them to the array.
 *
 * $GLOBALS['TL_AUTO_ITEM'] = array('items', 'events');
 *
 * Auto items are keywords, which are used as parameters by certain modules.
 * When rebuilding the search index URLs, Contao needs to know about these
 * keywords so it can handle them properly.
 */
}

namespace  {
/**
 * Contao Bootstrap
 *
 * @package    contao-bootstrap
 * @subpackage Core
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017 netzmacht David Molineus. All rights reserved.
 * @license    LGPL-3.0 https://github.com/contao-bootstrap/core
 * @filesource
 */

// Models
$GLOBALS['TL_MODELS']['tl_bootstrap_config'] = 'ContaoBootstrap\Core\Config\Model\BootstrapConfigModel';

// Hooks
$GLOBALS['TL_HOOKS']['initializeSystem'][]      = ['contao_bootstrap.core.listener.hook_listener', 'initializeSystem'];
$GLOBALS['TL_HOOKS']['getPageLayout'][]         = ['contao_bootstrap.core.listener.hook_listener', 'initializeLayout'];
$GLOBALS['TL_HOOKS']['parseTemplate'][]         = ['contao_bootstrap.core.listener.parse_template', 'prepare'];
$GLOBALS['TL_HOOKS']['parseFrontendTemplate'][] = ['contao_bootstrap.core.listener.parse_template', 'parse'];

if(TL_MODE == 'BE') {
    // Add backend stylesheet
    // TODO: Check if styles are still required
    $GLOBALS['TL_CSS']['bootstrap-core'] = 'bundles/contaobootstrapcore/css/backend.css|all|static';

    // load stylepicker config
    if(\Input::get('key') == 'stylepicker4ward_import') {
        require TL_ROOT . '/vendor/contao-bootstrap/core/src/Resources/contao/onfig/stylepicker.php';
    }
}
}

namespace  {
/**
 * Contao Bootstrap grid.
 *
 * @package    contao-bootstrap
 * @subpackage Grid
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017-2019 netzmacht David Molineus. All rights reserved.
 * @license    https://github.com/contao-bootstrap/grid/blob/master/LICENSE LGPL 3.0-or-later
 * @filesource
 */

use ContaoBootstrap\Grid\Component\FormField\GridSeparatorFormField;
use ContaoBootstrap\Grid\Component\FormField\GridStartFormField;
use ContaoBootstrap\Grid\Component\FormField\GridStopFormField;
use ContaoBootstrap\Grid\Model\GridModel;
use Netzmacht\Contao\Toolkit\Component\ContentElement\ContentElementDecorator;

// Models
$GLOBALS['TL_MODELS']['tl_bs_grid'] = GridModel::class;

// Backend modules
$GLOBALS['BE_MOD']['design']['themes']['tables'][] = 'tl_bs_grid';

array_insert(
    $GLOBALS['TL_CTE']['media'],
    (array_search('gallery', array_keys($GLOBALS['TL_CTE']['media'])) + 1),
    [
        'bs_grid_gallery' => ContentElementDecorator::class
    ]
);

// Form fields
$GLOBALS['TL_FFL']['bs_gridStart']     = GridStartFormField::class;
$GLOBALS['TL_FFL']['bs_gridSeparator'] = GridSeparatorFormField::class;
$GLOBALS['TL_FFL']['bs_gridStop']      = GridStopFormField::class;

// Wrapper elements
$GLOBALS['TL_WRAPPERS']['start'][]     = 'bs_gridStart';
$GLOBALS['TL_WRAPPERS']['separator'][] = 'bs_gridSeparator';
$GLOBALS['TL_WRAPPERS']['stop'][]      = 'bs_gridStop';

// Hooks
$GLOBALS['TL_HOOKS']['exportTheme'][] = [
    'contao_bootstrap.grid.listeners.theme_export',
    'onExportTheme'
];

$GLOBALS['TL_HOOKS']['extractThemeFiles'][] = [
    'contao_bootstrap.grid.listeners.theme_import',
    'onExtractThemeFiles'
];

// Easy Themes
$GLOBALS['TL_EASY_THEMES_MODULES']['bs_grid'] = [
    'href_fragment' => 'table=tl_bs_grid',
];
}

namespace  {
/**
 * MetaPalettes for the Contao Open Source CMS
 *
 * @package   MetaPalettes
 * @author    Tristan Lins <tristan.lins@infinitysoft.de>
 * @author    Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author    David Molineus <david.molineus@netzmacht.de>
 * @author    Sven Baumann <baumann.sv@gmail.com>
 * @copyright 2013-2014 bit3 UG
 * @copyright 2015-2018 Contao Community Alliance
 * @license   LGPL-3.0+ https://github.com/contao-community-alliance/meta-palettes/license
 * @link      https://github.com/bit3/contao-meta-palettes
 */

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = [
    'cca.meta_palettes.listener.build_palettes_listener',
    'onLoadDataContainer',
];
}

namespace  {
/**
 * General settings
 */

$GLOBALS['TL_CONFIG']['advancedClassesSet'] = 'both';

/**
 * add default sets
 *
 * hint: add update save json files via own extension or use default localconfig.php file
 * use $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = '/files/theme/myCssSet.json';
 *
 */
if(TL_MODE == 'BE')
{
    if (!isset($GLOBALS['TL_CONFIG']['advancedClassesSets']))
    {
        $GLOBALS['TL_CONFIG']['advancedClassesSets'] = array();
    }
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'bundles/contaoddadvancedclasses/sets/bootstrap2.json';
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'bundles/contaoddadvancedclasses/sets/bootstrap3.json';
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'bundles/contaoddadvancedclasses/sets/bootstrap4-alpha.json';
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'bundles/contaoddadvancedclasses/sets/bootstrap4.json';
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'bundles/contaoddadvancedclasses/sets/materialize.json';
}

/**
 * Hooks
 */

$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('\ContaoDD\AdvancedClassesHooks', 'extendCssClasses');
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('\ContaoDD\AdvancedClassesHooks', 'extendBackendTemplate');

/**
 * Backend Javascript
 */
if (TL_MODE == 'BE') {
    $GLOBALS['TL_JAVASCRIPT']['jquery'] = 'assets/jquery/js/jquery.min.js';
    $GLOBALS['TL_JAVASCRIPT']['noconflict'] = 'bundles/contaoddadvancedclasses/js/jquery.noconflict.js';
    $GLOBALS['TL_JAVASCRIPT']['advanced_classes'] = 'bundles/contaoddadvancedclasses/js/jquery.advanced_classes.js';
}

/**
 * Css
 */
if (TL_MODE == 'BE') {
    if($GLOBALS['TL_CONFIG']['ac_disableCSS'] == 0) {
        $GLOBALS['TL_CSS']['advanced_classes'] = 'bundles/contaoddadvancedclasses/css/advanced_classes.css';
        $GLOBALS['TL_CSS']['font-awesome'] = 'bundles/contaoddadvancedclasses/vendor/fontello/css/icon.css';
    }
    $GLOBALS['TL_CSS']['advanced_classes_settings'] = 'bundles/contaoddadvancedclasses/css/advanced_classes_settings.css';
}
}

namespace  {
// Insert the mate theme category
array_insert($GLOBALS['TL_CTE'], 1, array('mateTheme' => array()));
array_insert($GLOBALS['FE_MOD'], 1, array('mateTheme' => array()));
array_insert($GLOBALS['BE_MOD'], 1, array('mateTheme' => array()));

/**
 * Add frontend element
 */
$GLOBALS['FE_MOD']['mateTheme']['mateNavbar'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\NavBarModule';
$GLOBALS['FE_MOD']['mateTheme']['mateModal'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\ModalModule';

/**
 * Add content element
 */
$GLOBALS['TL_CTE']['mateTheme']['mateTeaserBox'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\TeaserBox';
$GLOBALS['TL_CTE']['mateTheme']['mateContentBox'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\ContentBox';
$GLOBALS['TL_CTE']['mateTheme']['mateParallaxElement'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\ParallaxElement';
$GLOBALS['TL_CTE']['mateTheme']['mateTextBackgroundElement'] = 'ContaoThemesNet\\MateThemeBundle\\Mate\\TextBackgroundElement';

/**
 * Available tags for MATE theme
 */
$GLOBALS['tl_config']['theme_tags'] = array(
	'-',
    'MATE01/01',
    'MATE01/02',
    'MATE01/03',
    'MATE01/04',
    'MATE01/05',
    'MATE01/06',
    'MATE01/07',
    'MATE01/08',
    'MATE01/09',
    'MATE01/10',
    'MATE02/01',
    'MATE02/02',
    'MATE02/03',
    'MATE02/04',
    'MATE02/05',
    'MATE02/06',
    'MATE02/07',
    'MATE02/08',
    'MATE02/09',
    'MATE02/10',
    'MATE05/01',
    'MATE05/02',
    'MATE05/03',
    'MATE05/04',
    'MATE05/05',
    'MATE05/06',
    'MATE05/07',
    'MATE05/08',
    'MATE05/09',
    'MATE05/10',
);

/**
 * Backend Modules
 */
array_insert($GLOBALS['BE_MOD']['contaoThemesNet'], 1, array
(
    'mateThemeSetup' => array
    (
        'callback'          => 'ContaoThemesNet\\MateThemeBundle\\Module\\MateThemeSetup',
        'tables'            => array(),
        'javascript'		=> 'bundles/matetheme/js/backend.js',
        'stylesheet'		=> 'bundles/matetheme/sass/backend.css'
    ),
));

/**
 * Add Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['ContaoThemesNet\MateThemeBundle\EventListener\HookListener', 'onReplaceInsertTags'];
}

namespace  {
/*
 * Material Icons Inserttag Bundle for Contao Open Source CMS
 *
 * Copyright (c) 2019 pdir / digital agentur // pdir GmbH
 * @package    material-icons-inserttag
 * @link       https://github.com/contao-themes-net/material-icons-inserttag
 * @author     Philipp Seibt <develop@pdir.de>
 * @license    LGPL-3.0-or-later
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['ctn.materialiconsinserttag.listener.hooks', 'onReplaceInsertTags'];
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Back end modules
array_insert($GLOBALS['BE_MOD']['content'], 1, array
(
	'calendar' => array
	(
		'tables'      => array('tl_calendar', 'tl_calendar_events', 'tl_calendar_feed', 'tl_content'),
		'table'       => array('TableWizard', 'importTable'),
		'list'        => array('ListWizard', 'importList')
	)
));

// Front end modules
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'events' => array
	(
		'calendar'    => 'ModuleCalendar',
		'eventreader' => 'ModuleEventReader',
		'eventlist'   => 'ModuleEventlist',
		'eventmenu'   => 'ModuleEventMenu'
	)
));

// Cron jobs
$GLOBALS['TL_CRON']['daily']['generateCalendarFeeds'] = array('Calendar', 'generateFeeds');

// Style sheet
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'bundles/contaocalendar/style.css|static';
}

// Register hooks
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array('Calendar', 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Calendar', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generatePage'][] = array('contao_calendar.listener.generate_page', 'onGeneratePage');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array('Calendar', 'generateFeeds');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('contao_calendar.listener.insert_tags', 'onReplaceInsertTags');

// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'calendars';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarp';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeedp';
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add content element
$GLOBALS['TL_CTE']['includes']['comments'] = 'ContentComments';

// Front end modules
$GLOBALS['FE_MOD']['application']['comments'] = 'ModuleComments';

// Back end modules
array_insert($GLOBALS['BE_MOD']['content'], 5, array
(
	'comments' => array
	(
		'tables'     => array('tl_comments'),
		'stylesheet' => 'bundles/contaocomments/style.css'
	)
));
}

namespace  {
/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  MEN AT WORK 2012, certo web & design GmbH 2012 
 * @package    MultiColumnWizard 
 * @license    LGPL 
 * @filesource
 */

$GLOBALS['BE_FFL']['multiColumnWizard'] = 'MultiColumnWizard';
// $GLOBALS['TL_FFL']['multiColumnWizard'] = 'MultiColumnWizard';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('MultiColumnWizardHelper', 'supportModalSelector');
$GLOBALS['TL_HOOKS']['initializeSystem'][] = array('MultiColumnWizardHelper', 'changeAjaxPostActions');
$GLOBALS['TL_HOOKS']['executePostActions'][] = array('MultiColumnWizardHelper', 'executePostActions');

if (TL_MODE == 'BE')
{
    $GLOBALS['TL_HOOKS']['parseTemplate'][] = array('MultiColumnWizardHelper', 'addScriptsAndStyles');
}
}

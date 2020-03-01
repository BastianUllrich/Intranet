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
/**
 * This file is part of menatwork/contao-multicolumnwizard-bundle.
 *
 * (c) 2012-2019 MEN AT WORK.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    menatwork/contao-multicolumnwizard-bundle
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @author     Andreas Schempp <andreas.schempp@terminal42.ch>
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     David Maack <david.maack@arcor.de>
 * @author     fritzmg <email@spikx.net>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @author     Yanick Witschi <yanick.witschi@certo-net.ch>
 * @copyright  2011 Andreas Schempp
 * @copyright  2011 certo web & design GmbH
 * @copyright  2013-2019 MEN AT WORK
 * @license    https://github.com/menatwork/contao-multicolumnwizard-bundle/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

$GLOBALS['BE_FFL']['multiColumnWizard'] = '\MenAtWork\MultiColumnWizardBundle\Contao\Widgets\MultiColumnWizard';

$GLOBALS['TL_HOOKS']['loadDataContainer'][]  = array(
    'MenAtWork\MultiColumnWizardBundle\EventListener\Contao\LoadDataContainer',
    'supportModalSelector'
);
$GLOBALS['TL_HOOKS']['initializeSystem'][]   = array(
    'MenAtWork\MultiColumnWizardBundle\EventListener\Contao\InitializeSystem',
    'changeAjaxPostActions'
);
$GLOBALS['TL_HOOKS']['executePostActions'][] = array(
    'MenAtWork\MultiColumnWizardBundle\EventListener\Contao\ExecutePostActions',
    'executePostActions'
);
$GLOBALS['TL_HOOKS']['executePostActions'][] = array(
    'MenAtWork\MultiColumnWizardBundle\EventListener\Contao\ExecutePostActions',
    'handleRowCreation'
);

if (TL_MODE == 'BE') {
    $GLOBALS['TL_HOOKS']['parseTemplate'][] = array(
        'MenAtWork\MultiColumnWizardBundle\EventListener\Contao\ParseTemplate',
        'addVersion'
    );

    // Add the JS.
    $GLOBALS['TL_JAVASCRIPT']['multicolumnwizard'] = $GLOBALS['TL_CONFIG']['debugMode']
        ? 'bundles/multicolumnwizard/js/multicolumnwizard_be_src.js'
        : 'bundles/multicolumnwizard/js/multicolumnwizard_be.js';

    // Add the css.
    $GLOBALS['TL_CSS']['multicolumnwizard'] = $GLOBALS['TL_CONFIG']['debugMode']
        ? 'bundles/multicolumnwizard/css/multicolumnwizard_src.css'
        : 'bundles/multicolumnwizard/css/multicolumnwizard.css';
}
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
// Frontend modules
$GLOBALS['FE_MOD']['examia']['memberUserData'] = 'Baul\ExamiaBundle\Module\MemberUserDataModule';
$GLOBALS['FE_MOD']['examia']['examRegistration'] = 'Baul\ExamiaBundle\Module\ExamRegistrationModule';
$GLOBALS['FE_MOD']['examia']['examRegisteredExamsMember'] = 'Baul\ExamiaBundle\Module\ExamRegisteredExamsMemberModule';
$GLOBALS['FE_MOD']['examia']['examUnsubscribe'] = 'Baul\ExamiaBundle\Module\ExamUnsubscribeModule';
$GLOBALS['FE_MOD']['examia']['memberAdministration'] = 'Baul\ExamiaBundle\Module\MemberAdministrationModule';
$GLOBALS['FE_MOD']['examia']['examAdministration'] = 'Baul\ExamiaBundle\Module\ExamAdministrationModule';
$GLOBALS['FE_MOD']['examia']['supervisorAdministration'] = 'Baul\ExamiaBundle\Module\SupervisorAdministrationModule';
$GLOBALS['FE_MOD']['examia']['supervisorOverview'] = 'Baul\ExamiaBundle\Module\SupervisorOverviewModule';

// Backend modules
$GLOBALS['BE_MOD']['examia']['exams'] = [
    'tables' => ['tl_exams'],
];

$GLOBALS['BE_MOD']['examia']['attendees_exams'] = [
    'tables' => ['tl_attendees_exams'],
];

$GLOBALS['BE_MOD']['examia']['supervisors_exams'] = [
    'tables' => ['tl_supervisors_exams'],
];

// Models
use Baul\ExamiaBundle\Model\MemberModel;
$GLOBALS['TL_MODELS']['tl_member'] = MemberModel::class;

use Baul\ExamiaBundle\Model\ExamsModel;
$GLOBALS['TL_MODELS']['tl_exams'] = ExamsModel::class;

use Baul\ExamiaBundle\Model\AttendeesExamsModel;
$GLOBALS['TL_MODELS']['tl_attendees_exams'] = AttendeesExamsModel::class;

use Baul\ExamiaBundle\Model\SupervisorsExamsModel;
$GLOBALS['TL_MODELS']['tl_supervisors_exams'] = SupervisorsExamsModel::class;
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
 * @copyright  2017-2020 netzmacht David Molineus. All rights reserved.
 * @license    https://github.com/contao-bootstrap/grid/blob/master/LICENSE LGPL 3.0-or-later
 * @filesource
 */

use ContaoBootstrap\Grid\Component\FormField\GridSeparatorFormField;
use ContaoBootstrap\Grid\Component\FormField\GridStartFormField;
use ContaoBootstrap\Grid\Component\FormField\GridStopFormField;
use ContaoBootstrap\Grid\Listener\Hook\NewsGridListener;
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

$GLOBALS['TL_HOOKS']['parseArticles'][] = [NewsGridListener::class, 'onParseArticles'];

// Easy Themes
$GLOBALS['TL_EASY_THEMES_MODULES']['bs_grid'] = [
    'href_fragment' => 'table=tl_bs_grid',
];
}

namespace  {
/**
 * This file is part of contao-community-alliance/dependency-container.
 *
 * (c) 2013-2018 Contao Community Alliance <https://c-c-a.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    contao-community-alliance/dependency-container
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @copyright  2013-2018 Contao Community Alliance <https://c-c-a.org>
 * @license    https://github.com/contao-community-alliance/dependency-container/blob/master/LICENSE LGPL-3.0
 * @link       https://github.com/contao-community-alliance/dependency-container
 * @filesource
 */

/**
 * Lazy initialize dependency container.
 */
$GLOBALS['TL_HOOKS']['initializeSystem']['dependency-container'] = array(
    'cca.legacy_dic.initializer',
    'init'
);
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
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'bundles/contaoddadvancedclasses/sets/bulma.json';
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'bundles/contaoddadvancedclasses/sets/spectre.json';
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

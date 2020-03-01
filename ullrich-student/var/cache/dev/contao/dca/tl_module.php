<?php

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_module'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_theme',
		'enableVersioning'            => true,
		'onload_callback' => array
		(
			array('tl_module', 'checkPermission'),
			array('tl_module', 'addCustomLayoutSectionReferences')
		),
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('name'),
			'panelLayout'             => 'filter;sort,search,limit',
			'headerFields'            => array('name', 'author', 'tstamp'),
			'child_record_callback'   => array('tl_module', 'listModule')
		),
		'label' => array
		(
			'group_callback'          => array('tl_module', 'getGroupHeader')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_module']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.svg'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_module']['copy'],
				'href'                => 'act=paste&amp;mode=copy',
				'icon'                => 'copy.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset()"'
			),
			'cut' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_module']['cut'],
				'href'                => 'act=paste&amp;mode=cut',
				'icon'                => 'cut.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset()"'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_module']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.svg',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_module']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.svg'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('type', 'defineRoot', 'source', 'interactive', 'protected', 'reg_assignDir', 'reg_activate'),
		'default'                     => '{title_legend},name,type',
		'navigation'                  => '{title_legend},name,headline,type;{nav_legend},levelOffset,showLevel,hardLimit,showProtected,showHidden;{reference_legend:hide},defineRoot;{template_legend:hide},navigationTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'customnav'                   => '{title_legend},name,headline,type;{nav_legend},pages,showProtected;{template_legend:hide},navigationTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'breadcrumb'                  => '{title_legend},name,headline,type;{nav_legend},showHidden;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'quicknav'                    => '{title_legend},name,headline,type;{nav_legend},customLabel,showLevel,hardLimit,showProtected,showHidden;{reference_legend:hide},rootPage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'quicklink'                   => '{title_legend},name,headline,type;{nav_legend},pages,customLabel;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'booknav'                     => '{title_legend},name,headline,type;{nav_legend},rootPage,showProtected,showHidden;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'articlenav'                  => '{title_legend},name,headline,type;{config_legend},loadFirst;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'sitemap'                     => '{title_legend},name,headline,type;{nav_legend},showProtected,showHidden;{reference_legend:hide},rootPage;{template_legend:hide},navigationTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'login'                       => '{title_legend},name,headline,type;{config_legend},autologin;{redirect_legend},jumpTo,redirectBack;{template_legend:hide},cols,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'logout'                      => '{title_legend},name,type;{redirect_legend},jumpTo,redirectBack;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'personalData'                => '{title_legend},name,headline,type;{config_legend},editable;{redirect_legend},jumpTo;{template_legend:hide},memberTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'registration'                => '{title_legend},name,headline,type;{config_legend},editable,newsletters,disableCaptcha;{account_legend},reg_groups,reg_allowLogin,reg_assignDir;{redirect_legend},jumpTo;{email_legend:hide},reg_activate;{template_legend:hide},memberTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'changePassword'              => '{title_legend},name,headline,type;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'lostPassword'                => '{title_legend},name,headline,type;{config_legend},reg_skipName,disableCaptcha;{redirect_legend},jumpTo;{email_legend:hide},reg_jumpTo,reg_password;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'closeAccount'                => '{title_legend},name,headline,type;{config_legend},reg_close;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'form'                        => '{title_legend},name,headline,type;{include_legend},form;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'search'                      => '{title_legend},name,headline,type;{config_legend},queryType,fuzzy,contextLength,totalLength,perPage,searchType;{redirect_legend:hide},jumpTo;{reference_legend:hide},rootPage;{template_legend:hide},searchTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'articlelist'                 => '{title_legend},name,headline,type;{config_legend},skipFirst,inColumn;{reference_legend:hide},defineRoot;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'flash'                       => '{title_legend},name,headline,type;{config_legend},size,transparent,flashvars,altContent;{source_legend},source;{interact_legend:hide},interactive;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'randomImage'                 => '{title_legend},name,headline,type;{source_legend},multiSRC,imgSize,fullsize,useCaption;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
		'html'                        => '{title_legend},name,type;{html_legend},html;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests',
		'rssReader'                   => '{title_legend},name,headline,type;{config_legend},rss_feed,numberOfItems,perPage,skipFirst,rss_cache;{template_legend:hide},rss_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'defineRoot'                  => 'rootPage',
		'source_internal'             => 'singleSRC',
		'source_external'             => 'url',
		'interactive'                 => 'flashID,flashJS',
		'protected'                   => 'groups',
		'reg_assignDir'               => 'reg_homeDir',
		'reg_activate'                => 'reg_jumpTo,reg_text'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'pid' => array
		(
			'foreignKey'              => 'tl_theme.name',
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'belongsTo', 'load'=>'lazy')
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['name'],
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'headline' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['headline'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'inputUnit',
			'options'                 => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
			'eval'                    => array('maxlength'=>200, 'tl_class'=>'w50 clr'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['type'],
			'default'                 => 'navigation',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 11,
			'filter'                  => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getModules'),
			'reference'               => &$GLOBALS['TL_LANG']['FMD'],
			'eval'                    => array('helpwizard'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'levelOffset' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['levelOffset'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'showLevel' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['showLevel'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'hardLimit' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['hardLimit'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'showProtected' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['showProtected'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'defineRoot' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['defineRoot'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'rootPage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['rootPage'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('fieldType'=>'radio', 'tl_class'=>'clr'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'navigationTpl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['navigationTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getNavigationTemplates'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'customTpl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['customTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getModuleTemplates'),
			'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'pages' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['pages'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'orderField'=>'orderPages', 'mandatory'=>true),
			'sql'                     => "blob NULL",
			'relation'                => array('type'=>'hasMany', 'load'=>'lazy')
		),
		'orderPages' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['orderSRC'],
			'sql'                     => "blob NULL"
		),
		'showHidden' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['showHidden'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'customLabel' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['customLabel'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'rgxp'=>'extnd', 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'autologin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['autologin'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'jumpTo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['jumpTo'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('fieldType'=>'radio'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'eager')
		),
		'redirectBack' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['redirectBack'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'cols' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cols'],
			'default'                 => '2cl',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('1cl', '2cl'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'editable' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['editable'],
			'exclude'                 => true,
			'inputType'               => 'checkboxWizard',
			'options_callback'        => array('tl_module', 'getEditableMemberProperties'),
			'eval'                    => array('multiple'=>true),
			'sql'                     => "blob NULL"
		),
		'memberTpl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['memberTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getMemberTemplates'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'form' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['form'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'foreignKey'              => 'tl_form.title',
			'options_callback'        => array('tl_module', 'getForms'),
			'eval'                    => array('chosen'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'queryType' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['queryType'],
			'default'                 => 'and',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('and', 'or'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'fuzzy' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['fuzzy'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'contextLength' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['contextLength'],
			'default'                 => 48,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'totalLength' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['totalLength'],
			'default'                 => 1000,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'perPage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['perPage'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'searchType' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['searchType'],
			'default'                 => 'simple',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('simple', 'advanced'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'searchTpl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['searchTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getSearchTemplates'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'inColumn' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['inColumn'],
			'default'                 => 'main',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getLayoutSections'),
			'reference'               => &$GLOBALS['TL_LANG']['COLS'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'skipFirst' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['skipFirst'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'loadFirst' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['loadFirst'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'size' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'transparent' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['transparent'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'flashvars' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['flashvars'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('nospace'=>true, 'maxlength'=>255, 'tl_class'=>'long clr'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'altContent' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['altContent'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'style'=>'height:60px', 'tl_class'=>'clr'),
			'sql'                     => "text NULL"
		),
		'source' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['source'],
			'default'                 => 'internal',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('internal', 'external'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'singleSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['singleSRC'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'filesOnly'=>true, 'mandatory'=>true, 'tl_class'=>'clr'),
			'sql'                     => "binary(16) NULL"
		),
		'url' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['url'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'interactive' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['interactive'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'flashID' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['flashID'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'extnd', 'nospace'=>true, 'unique'=>true, 'maxlength'=>64),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'flashJS' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['flashJS'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('class'=>'monospace', 'rte'=>'ace|js'),
			'sql'                     => "text NULL"
		),
		'imgSize' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['imgSize'],
			'exclude'                 => true,
			'inputType'               => 'imageSize',
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'eval'                    => array('rgxp'=>'natural', 'includeBlankOption'=>true, 'nospace'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'),
			'options_callback' => function ()
			{
				return System::getContainer()->get('contao.image.image_sizes')->getOptionsForUser(BackendUser::getInstance());
			},
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'useCaption' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['useCaption'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'fullsize' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['fullsize'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'multiSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['multiSRC'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'orderField'=>'orderSRC', 'files'=>true, 'mandatory'=>true),
			'sql'                     => "blob NULL",
			'load_callback' => array
			(
				array('tl_module', 'setMultiSrcFlags')
			)
		),
		'orderSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['orderSRC'],
			'sql'                     => "blob NULL"
		),
		'html' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['html'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'helpwizard'=>true),
			'explanation'             => 'insertTags',
			'sql'                     => "text NULL"
		),
		'rss_cache' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['rss_cache'],
			'default'                 => 3600,
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array(0, 5, 15, 30, 60, 300, 900, 1800, 3600, 10800, 21600, 43200, 86400),
			'eval'                    => array('tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['CACHE'],
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'rss_feed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['rss_feed'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'style'=>'height:60px'),
			'sql'                     => "text NULL"
		),
		'rss_template' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['rss_template'],
			'default'                 => 'rss_default',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getRssTemplates'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'numberOfItems' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['numberOfItems'],
			'default'                 => 3,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'disableCaptcha' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['disableCaptcha'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'reg_groups' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_groups'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'foreignKey'              => 'tl_member_group.name',
			'eval'                    => array('multiple'=>true),
			'sql'                     => "blob NULL",
			'relation'                => array('type'=>'hasMany', 'load'=>'lazy')
		),
		'reg_allowLogin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_allowLogin'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'reg_skipName' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_skipName'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'reg_close' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_close'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('close_deactivate', 'close_delete'),
			'eval'                    => array('tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'reg_assignDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_assignDir'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'reg_homeDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_homeDir'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'tl_class'=>'clr'),
			'sql'                     => "binary(16) NULL"
		),
		'reg_activate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_activate'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'reg_jumpTo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_jumpTo'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('fieldType'=>'radio'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'reg_text' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_text'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('style'=>'height:120px', 'decodeEntities'=>true, 'alwaysSave'=>true),
			'load_callback' => array
			(
				array('tl_module', 'getActivationDefault')
			),
			'sql'                     => "text NULL"
		),
		'reg_password' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_password'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('style'=>'height:120px', 'decodeEntities'=>true, 'alwaysSave'=>true),
			'load_callback'           => array
			(
				array('tl_module', 'getPasswordDefault')
			),
			'sql'                     => "text NULL"
		),
		'protected' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['protected'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'groups' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['groups'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'foreignKey'              => 'tl_member_group.name',
			'eval'                    => array('mandatory'=>true, 'multiple'=>true),
			'sql'                     => "blob NULL",
			'relation'                => array('type'=>'hasMany', 'load'=>'lazy')
		),
		'guests' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['guests'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'cssID' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cssID'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('multiple'=>true, 'size'=>2, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		)
	)
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_module extends Backend
{
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

	/**
	 * Check permissions to edit the table
	 *
	 * @throws Contao\CoreBundle\Exception\AccessDeniedException
	 */
	public function checkPermission()
	{
		if ($this->User->isAdmin)
		{
			return;
		}

		if (!$this->User->hasAccess('modules', 'themes'))
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to access the front end modules module.');
		}
	}

	/**
	 * Return all front end modules as array
	 *
	 * @return array
	 */
	public function getModules()
	{
		$groups = array();

		foreach ($GLOBALS['FE_MOD'] as $k=>$v)
		{
			foreach (array_keys($v) as $kk)
			{
				$groups[$k][] = $kk;
			}
		}

		return $groups;
	}

	/**
	 * Return all editable fields of table tl_member
	 *
	 * @return array
	 */
	public function getEditableMemberProperties()
	{
		$return = array();

		System::loadLanguageFile('tl_member');
		$this->loadDataContainer('tl_member');

		foreach ($GLOBALS['TL_DCA']['tl_member']['fields'] as $k=>$v)
		{
			if ($v['eval']['feEditable'])
			{
				$return[$k] = $GLOBALS['TL_DCA']['tl_member']['fields'][$k]['label'][0];
			}
		}

		return $return;
	}

	/**
	 * Get all forms and return them as array
	 *
	 * @return array
	 */
	public function getForms()
	{
		if (!$this->User->isAdmin && !is_array($this->User->forms))
		{
			return array();
		}

		$arrForms = array();
		$objForms = $this->Database->execute("SELECT id, title FROM tl_form ORDER BY title");

		while ($objForms->next())
		{
			if ($this->User->hasAccess($objForms->id, 'forms'))
			{
				$arrForms[$objForms->id] = $objForms->title;
			}
		}

		return $arrForms;
	}

	/**
	 * Return all layout sections as array
	 *
	 * @return array
	 */
	public function getLayoutSections()
	{
		$arrSections = array('header', 'left', 'right', 'main', 'footer');

		// Check for custom layout sections
		$objLayout = $this->Database->query("SELECT sections FROM tl_layout WHERE sections!=''");

		while ($objLayout->next())
		{
			$arrCustom = StringUtil::deserialize($objLayout->sections);

			// Add the custom layout sections
			if (!empty($arrCustom) && is_array($arrCustom))
			{
				foreach ($arrCustom as $v)
				{
					if (!empty($v['id']))
					{
						$arrSections[] = $v['id'];
					}
				}
			}
		}

		return Backend::convertLayoutSectionIdsToAssociativeArray($arrSections);
	}

	/**
	 * Return all navigation templates as array
	 *
	 * @return array
	 */
	public function getNavigationTemplates()
	{
		return $this->getTemplateGroup('nav_');
	}

	/**
	 * Return all module templates as array
	 *
	 * @param DataContainer $dc
	 *
	 * @return array
	 */
	public function getModuleTemplates(DataContainer $dc)
	{
		return $this->getTemplateGroup('mod_' . $dc->activeRecord->type);
	}

	/**
	 * Return all member templates as array
	 *
	 * @return array
	 */
	public function getMemberTemplates()
	{
		return $this->getTemplateGroup('member_');
	}

	/**
	 * Return all search templates as array
	 *
	 * @return array
	 */
	public function getSearchTemplates()
	{
		return $this->getTemplateGroup('search_');
	}

	/**
	 * Return all navigation templates as array
	 *
	 * @return array
	 */
	public function getRssTemplates()
	{
		return $this->getTemplateGroup('rss_');
	}

	/**
	 * Use the module type as group header if sorted by type (see #8402)
	 *
	 * @param string $group
	 * @param string $mode
	 * @param string $field
	 * @param array  $row
	 *
	 * @return string
	 */
	public function getGroupHeader($group, $mode, $field, $row)
	{
		if ($field == 'type')
		{
			return $row['type'];
		}

		return $group;
	}

	/**
	 * Load the default activation text
	 *
	 * @param mixed $varValue
	 *
	 * @return mixed
	 */
	public function getActivationDefault($varValue)
	{
		if (!trim($varValue))
		{
			$varValue = (is_array($GLOBALS['TL_LANG']['tl_module']['emailText']) ? $GLOBALS['TL_LANG']['tl_module']['emailText'][1] : $GLOBALS['TL_LANG']['tl_module']['emailText']);
		}

		return $varValue;
	}

	/**
	 * Load the default password text
	 *
	 * @param mixed $varValue
	 *
	 * @return mixed
	 */
	public function getPasswordDefault($varValue)
	{
		if (!trim($varValue))
		{
			$varValue = (is_array($GLOBALS['TL_LANG']['tl_module']['passwordText']) ? $GLOBALS['TL_LANG']['tl_module']['passwordText'][1] : $GLOBALS['TL_LANG']['tl_module']['passwordText']);
		}

		return $varValue;
	}

	/**
	 * List a front end module
	 *
	 * @param array $row
	 *
	 * @return string
	 */
	public function listModule($row)
	{
		return '<div class="tl_content_left">' . $row['name'] . ' <span style="color:#999;padding-left:3px">[' . (isset($GLOBALS['TL_LANG']['FMD'][$row['type']][0]) ? $GLOBALS['TL_LANG']['FMD'][$row['type']][0] : $row['type']) . ']</span></div>';
	}

	/**
	 * Dynamically add flags to the "multiSRC" field
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return mixed
	 */
	public function setMultiSrcFlags($varValue, DataContainer $dc)
	{
		if ($dc->activeRecord)
		{
			if ($dc->activeRecord->type == 'randomImage')
			{
				$GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isGallery'] = true;
				$GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = Config::get('validImageTypes');
			}
		}

		return $varValue;
	}
}
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqlist']   = '{title_legend},name,headline,type;{config_legend},faq_categories,faq_readerModule;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader'] = '{title_legend},name,headline,type;{config_legend},faq_categories;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqpage']   = '{title_legend},name,headline,type;{config_legend},faq_categories;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';

// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['faq_categories'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['faq_categories'],
	'exclude'                 => true,
	'inputType'               => 'checkboxWizard',
	'foreignKey'              => 'tl_faq_category.title',
	'eval'                    => array('multiple'=>true, 'mandatory'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['faq_readerModule'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['faq_readerModule'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_faq', 'getReaderModules'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$bundles = System::getContainer()->getParameter('kernel.bundles');

// Add the comments template drop-down menu
if (isset($bundles['ContaoCommentsBundle']))
{
	$GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader'] = str_replace('{protected_legend:hide}', '{comment_legend:hide},com_template;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader']);
}

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_module_faq extends Backend
{
	/**
	 * Get all FAQ reader modules and return them as array
	 *
	 * @return array
	 */
	public function getReaderModules()
	{
		$arrModules = array();
		$objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='faqreader' ORDER BY t.name, m.name");

		while ($objModules->next())
		{
			$arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
		}

		return $arrModules;
	}
}
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['listing'] = '{title_legend},name,headline,type;{config_legend},list_table,list_fields,list_where,list_search,list_sort,perPage,list_info,list_info_where;{template_legend:hide},list_layout,list_info_layout;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';

// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['list_table'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_table'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_listing', 'getAllTables'),
	'eval'                    => array('chosen'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_fields'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_fields'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_where'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_where'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('preserveTags'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_search'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_search'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_sort'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_sort'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_info'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_info'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_info_where'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_info_where'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('preserveTags'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_layout'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_layout'],
	'default'                 => 'list_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_listing', 'getListTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_info_layout'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_info_layout'],
	'default'                 => 'info_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_listing', 'getInfoTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_module_listing extends Backend
{
	/**
	 * Get all tables and return them as array
	 *
	 * @return array
	 */
	public function getAllTables()
	{
		return $this->Database->listTables();
	}

	/**
	 * Return all list templates as array
	 *
	 * @return array
	 */
	public function getListTemplates()
	{
		return $this->getTemplateGroup('list_');
	}

	/**
	 * Return all info templates as array
	 *
	 * @return array
	 */
	public function getInfoTemplates()
	{
		return $this->getTemplateGroup('info_');
	}
}
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['newslist']    = '{title_legend},name,headline,type;{config_legend},news_archives,numberOfItems,news_featured,perPage,skipFirst;{template_legend:hide},news_metaFields,news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader']  = '{title_legend},name,headline,type;{config_legend},news_archives;{template_legend:hide},news_metaFields,news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsarchive'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_jumpToCurrent,news_readerModule,perPage,news_format;{template_legend:hide},news_metaFields,news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsmenu']    = '{title_legend},name,headline,type;{config_legend},news_archives,news_showQuantity,news_format,news_startDay,news_order;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';

// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['news_archives'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_archives'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options_callback'        => array('tl_module_news', 'getNewsArchives'),
	'eval'                    => array('multiple'=>true, 'mandatory'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_featured'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_featured'],
	'default'                 => 'all_items',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('all_items', 'featured', 'unfeatured'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_jumpToCurrent'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_jumpToCurrent'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('hide_module', 'show_current', 'all_items'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_readerModule'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_readerModule'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_news', 'getReaderModules'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_metaFields'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_metaFields'],
	'default'                 => array('date', 'author'),
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options'                 => array('date', 'author', 'comments'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('multiple'=>true),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_template'],
	'default'                 => 'news_latest',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_news', 'getNewsTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_format'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_format'],
	'default'                 => 'news_month',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('news_day', 'news_month', 'news_year'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('tl_class'=>'w50'),
	'wizard' => array
	(
		array('tl_module_news', 'hideStartDay')
	),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_startDay'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_startDay'],
	'default'                 => 0,
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(0, 1, 2, 3, 4, 5, 6),
	'reference'               => &$GLOBALS['TL_LANG']['DAYS'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_order'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_order'],
	'default'                 => 'descending',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('ascending', 'descending'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_showQuantity'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_showQuantity'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'sql'                     => "char(1) NOT NULL default ''"
);

$bundles = System::getContainer()->getParameter('kernel.bundles');

// Add the comments template drop-down menu
if (isset($bundles['ContaoCommentsBundle']))
{
	$GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader'] = str_replace('{protected_legend:hide}', '{comment_legend:hide},com_template;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader']);
}

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_module_news extends Backend
{
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

	/**
	 * Get all news archives and return them as array
	 *
	 * @return array
	 */
	public function getNewsArchives()
	{
		if (!$this->User->isAdmin && !is_array($this->User->news))
		{
			return array();
		}

		$arrArchives = array();
		$objArchives = $this->Database->execute("SELECT id, title FROM tl_news_archive ORDER BY title");

		while ($objArchives->next())
		{
			if ($this->User->hasAccess($objArchives->id, 'news'))
			{
				$arrArchives[$objArchives->id] = $objArchives->title;
			}
		}

		return $arrArchives;
	}

	/**
	 * Get all news reader modules and return them as array
	 *
	 * @return array
	 */
	public function getReaderModules()
	{
		$arrModules = array();
		$objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='newsreader' ORDER BY t.name, m.name");

		while ($objModules->next())
		{
			$arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
		}

		return $arrModules;
	}

	/**
	 * Hide the start day drop-down if not applicable
	 *
	 * @return string
	 */
	public function hideStartDay()
	{
		return '
  <script>
    var enableStartDay = function() {
      var e1 = $("ctrl_news_startDay").getParent("div");
      var e2 = $("ctrl_news_order").getParent("div");
      if ($("ctrl_news_format").value == "news_day") {
        e1.setStyle("display", "block");
        e2.setStyle("display", "none");
	  } else {
        e1.setStyle("display", "none");
        e2.setStyle("display", "block");
	  }
    };
    window.addEvent("domready", function() {
      if ($("ctrl_news_startDay")) {
        enableStartDay();
        $("ctrl_news_format").addEvent("change", enableStartDay);
      }
    });
  </script>';
	}

	/**
	 * Return all news templates as array
	 *
	 * @return array
	 */
	public function getNewsTemplates()
	{
		return $this->getTemplateGroup('news_');
	}
}
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['personalData']     = str_replace(',editable', ',editable,newsletters', $GLOBALS['TL_DCA']['tl_module']['palettes']['personalData']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['subscribe']        = '{title_legend},name,headline,type;{config_legend},nl_channels,nl_hideChannels,disableCaptcha;{redirect_legend},jumpTo;{email_legend:hide},nl_subscribe;{template_legend:hide},nl_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['unsubscribe']      = '{title_legend},name,headline,type;{config_legend},nl_channels,nl_hideChannels,disableCaptcha;{redirect_legend},jumpTo;{email_legend:hide},nl_unsubscribe;{template_legend:hide},nl_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsletterlist']   = '{title_legend},name,headline,type;{config_legend},nl_channels;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsletterreader'] = '{title_legend},name,headline,type;{config_legend},nl_channels;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';

// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['newsletters'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['newsletters'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'foreignKey'              => 'tl_newsletter_channel.title',
	'eval'                    => array('multiple'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['nl_channels'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nl_channels'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options_callback'        => array('tl_module_newsletter', 'getChannels'),
	'eval'                    => array('multiple'=>true, 'mandatory'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['nl_hideChannels'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nl_hideChannels'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['nl_subscribe'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nl_subscribe'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('style'=>'height:120px', 'decodeEntities'=>true, 'alwaysSave'=>true),
	'load_callback' => array
	(
		array('tl_module_newsletter', 'getSubscribeDefault')
	),
	'sql'                     => "text NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['nl_unsubscribe'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nl_unsubscribe'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('style'=>'height:120px', 'decodeEntities'=>true, 'alwaysSave'=>true),
	'load_callback' => array
	(
		array('tl_module_newsletter', 'getUnsubscribeDefault')
	),
	'sql'                     => "text NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['nl_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nl_template'],
	'default'                 => 'nl_simple',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_newsletter', 'getNewsletterTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_module_newsletter extends Backend
{
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

	/**
	 * Load the default subscribe text
	 *
	 * @param mixed $varValue
	 *
	 * @return mixed
	 */
	public function getSubscribeDefault($varValue)
	{
		if (!trim($varValue))
		{
			$varValue = $GLOBALS['TL_LANG']['tl_module']['text_subscribe'][1];
		}

		return $varValue;
	}

	/**
	 * Load the default unsubscribe text
	 *
	 * @param mixed $varValue
	 *
	 * @return mixed
	 */
	public function getUnsubscribeDefault($varValue)
	{
		if (!trim($varValue))
		{
			$varValue = $GLOBALS['TL_LANG']['tl_module']['text_unsubscribe'][1];
		}

		return $varValue;
	}

	/**
	 * Get all channels and return them as array
	 *
	 * @return array
	 */
	public function getChannels()
	{
		if (!$this->User->isAdmin && !is_array($this->User->newsletters))
		{
			return array();
		}

		$arrChannels = array();
		$objChannels = $this->Database->execute("SELECT id, title FROM tl_newsletter_channel WHERE jumpTo>0 ORDER BY title");

		while ($objChannels->next())
		{
			if ($this->User->hasAccess($objChannels->id, 'newsletters'))
			{
				$arrChannels[$objChannels->id] = $objChannels->title;
			}
		}

		return $arrChannels;
	}

	/**
	 * Return all newsletter templates as array
	 *
	 * @return array
	 */
	public function getNewsletterTemplates()
	{
		return $this->getTemplateGroup('nl_');
	}
}
}

namespace  {
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Custom Elements DCA
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_DCA']['tl_module']['config']['onload_callback'][] = array('MadeYourDay\RockSolidCustomElements\CustomElements', 'onloadCallback');
$GLOBALS['TL_DCA']['tl_module']['config']['onsubmit_callback'][] = array('MadeYourDay\RockSolidCustomElements\CustomElements', 'onsubmitCallback');
$GLOBALS['TL_DCA']['tl_module']['fields']['rsce_data'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsce_data'],
	'exclude' => true,
	'inputType' => 'rsce_list_hidden',
	'sql' => "mediumblob NULL",
	'save_callback' => array(
		array('MadeYourDay\\RockSolidCustomElements\\CustomElements', 'saveDataCallback'),
	),
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
 * Slider Frontend Module DCA
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_DCA']['tl_module']['config']['onload_callback'][] = array('MadeYourDay\\RockSolidSlider\\Slider', 'moduleOnloadCallback');

$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'rsts_import_settings';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'rsts_content_type';
$GLOBALS['TL_DCA']['tl_module']['palettes']['rocksolid_slider'] = '{title_legend},name,headline,type,rsts_content_type';
$GLOBALS['TL_DCA']['tl_module']['palettes']['rocksolid_sliderrsts_default'] = '{title_legend},name,headline,type,rsts_content_type;{config_legend},rsts_id,rsts_import_settings,rsts_type,rsts_direction,rsts_random,rsts_loop,rsts_centerContent,rsts_skin,rsts_width,rsts_height,rsts_preloadSlides,rsts_gapSize,rsts_duration,rsts_captions,rsts_scaleMode,rsts_imagePosition;{rsts_navigation_legend},rsts_navType,rsts_deepLinkPrefix,rsts_controls,rsts_thumbControls,rsts_keyboard,rsts_invertControls;{rsts_thumbs_legend},rsts_thumbs_imgSize,rsts_thumbs;{rsts_autoplay_legend},rsts_autoplay,rsts_autoplayRestart,rsts_autoplayProgress,rsts_pauseAutoplayOnHover,rsts_videoAutoplay;{rsts_carousel_legend},rsts_slideMaxCount,rsts_slideMinSize,rsts_slideMaxSize,rsts_rowMaxCount,rsts_rowMinSize,rsts_rowSlideRatio,rsts_prevNextSteps,rsts_combineNavItems,rsts_visibleArea,rsts_visibleAreaMax,rsts_visibleAreaAlign;{template_legend:hide},rsts_template,imgSize,fullsize;{expert_legend:hide},rsts_customSkin,rsts_cssPrefix,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['rocksolid_sliderrsts_news'] = '{title_legend},name,headline,type,rsts_content_type;{rsts_news_legend},news_archives,numberOfItems,news_featured,skipFirst,news_template,news_metaFields;{config_legend},rsts_import_settings,rsts_type,rsts_direction,rsts_random,rsts_loop,rsts_centerContent,rsts_skin,rsts_width,rsts_height,rsts_preloadSlides,rsts_gapSize,rsts_duration,rsts_captions,rsts_scaleMode,rsts_imagePosition;{rsts_navigation_legend},rsts_navType,rsts_deepLinkPrefix,rsts_controls,rsts_thumbControls,rsts_keyboard,rsts_invertControls;{rsts_thumbs_legend},rsts_thumbs_imgSize,rsts_thumbs;{rsts_autoplay_legend},rsts_autoplay,rsts_autoplayRestart,rsts_autoplayProgress,rsts_pauseAutoplayOnHover,rsts_videoAutoplay;{rsts_carousel_legend},rsts_slideMaxCount,rsts_slideMinSize,rsts_slideMaxSize,rsts_rowMaxCount,rsts_rowMinSize,rsts_rowSlideRatio,rsts_prevNextSteps,rsts_combineNavItems,rsts_visibleArea,rsts_visibleAreaMax,rsts_visibleAreaAlign;{template_legend:hide},rsts_template,imgSize,fullsize;{expert_legend:hide},rsts_customSkin,rsts_cssPrefix,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['rocksolid_sliderrsts_events'] = '{title_legend},name,headline,type,rsts_content_type;{rsts_events_legend},cal_calendar,cal_noSpan,cal_format,cal_ignoreDynamic,cal_order,cal_readerModule,cal_limit,cal_template;{config_legend},rsts_import_settings,rsts_type,rsts_direction,rsts_random,rsts_loop,rsts_centerContent,rsts_skin,rsts_width,rsts_height,rsts_preloadSlides,rsts_gapSize,rsts_duration,rsts_captions,rsts_scaleMode,rsts_imagePosition;{rsts_navigation_legend},rsts_navType,rsts_deepLinkPrefix,rsts_controls,rsts_thumbControls,rsts_keyboard,rsts_invertControls;{rsts_thumbs_legend},rsts_thumbs_imgSize,rsts_thumbs;{rsts_autoplay_legend},rsts_autoplay,rsts_autoplayRestart,rsts_autoplayProgress,rsts_pauseAutoplayOnHover,rsts_videoAutoplay;{rsts_carousel_legend},rsts_slideMaxCount,rsts_slideMinSize,rsts_slideMaxSize,rsts_rowMaxCount,rsts_rowMinSize,rsts_rowSlideRatio,rsts_prevNextSteps,rsts_combineNavItems,rsts_visibleArea,rsts_visibleAreaMax,rsts_visibleAreaAlign;{template_legend:hide},rsts_template,imgSize,fullsize;{expert_legend:hide},rsts_customSkin,rsts_cssPrefix,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['rocksolid_sliderrsts_images'] = '{title_legend},name,headline,type,rsts_content_type;{rsts_images_legend},multiSRC;{config_legend},rsts_import_settings,rsts_type,rsts_direction,rsts_random,rsts_loop,rsts_centerContent,rsts_skin,rsts_width,rsts_height,rsts_preloadSlides,rsts_gapSize,rsts_duration,rsts_captions,rsts_scaleMode,rsts_imagePosition;{rsts_navigation_legend},rsts_navType,rsts_deepLinkPrefix,rsts_controls,rsts_thumbControls,rsts_keyboard,rsts_invertControls;{rsts_thumbs_legend},rsts_thumbs_imgSize,rsts_thumbs;{rsts_autoplay_legend},rsts_autoplay,rsts_autoplayRestart,rsts_autoplayProgress,rsts_pauseAutoplayOnHover,rsts_videoAutoplay;{rsts_carousel_legend},rsts_slideMaxCount,rsts_slideMinSize,rsts_slideMaxSize,rsts_rowMaxCount,rsts_rowMinSize,rsts_rowSlideRatio,rsts_prevNextSteps,rsts_combineNavItems,rsts_visibleArea,rsts_visibleAreaMax,rsts_visibleAreaAlign;{template_legend:hide},rsts_template,imgSize,fullsize;{expert_legend:hide},rsts_customSkin,rsts_cssPrefix,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['rocksolid_sliderrsts_settings'] = '{title_legend},name,type,rsts_content_type;{config_legend},rsts_type,rsts_direction,rsts_random,rsts_loop,rsts_centerContent,rsts_skin,rsts_width,rsts_height,rsts_preloadSlides,rsts_gapSize,rsts_duration,rsts_captions,rsts_scaleMode,rsts_imagePosition;{rsts_navigation_legend},rsts_navType,rsts_deepLinkPrefix,rsts_controls,rsts_thumbControls,rsts_keyboard,rsts_invertControls;{rsts_thumbs_legend},rsts_thumbs_imgSize,rsts_thumbs;{rsts_autoplay_legend},rsts_autoplay,rsts_autoplayRestart,rsts_autoplayProgress,rsts_pauseAutoplayOnHover,rsts_videoAutoplay;{rsts_carousel_legend},rsts_slideMaxCount,rsts_slideMinSize,rsts_slideMaxSize,rsts_rowMaxCount,rsts_rowMinSize,rsts_rowSlideRatio,rsts_prevNextSteps,rsts_combineNavItems,rsts_visibleArea,rsts_visibleAreaMax,rsts_visibleAreaAlign;{template_legend:hide},rsts_template,imgSize,fullsize;{expert_legend:hide},rsts_customSkin,rsts_cssPrefix';
$GLOBALS['TL_DCA']['tl_module']['palettes']['rocksolid_sliderrsts_import_settingsrsts_default'] = '{title_legend},name,headline,type,rsts_content_type;{config_legend},rsts_id,rsts_import_settings,rsts_import_settings_from;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['rocksolid_sliderrsts_import_settingsrsts_news'] = '{title_legend},name,headline,type,rsts_content_type;{rsts_news_legend},news_archives,numberOfItems,news_featured,skipFirst,news_template,news_metaFields;{config_legend},rsts_import_settings,rsts_import_settings_from;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['rocksolid_sliderrsts_import_settingsrsts_events'] = '{title_legend},name,headline,type,rsts_content_type;{rsts_events_legend},cal_calendar,cal_noSpan,cal_format,cal_ignoreDynamic,cal_order,cal_readerModule,cal_limit,cal_template;{config_legend},rsts_import_settings,rsts_import_settings_from;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['rocksolid_sliderrsts_import_settingsrsts_images'] = '{title_legend},name,headline,type,rsts_content_type;{rsts_images_legend},multiSRC;{config_legend},rsts_import_settings,rsts_import_settings_from;{expert_legend:hide},cssID';

$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'rsts_thumbs';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['rsts_thumbs'] = 'rsts_thumbs_width,rsts_thumbs_height,rsts_thumbs_gapSize,rsts_thumbs_duration,rsts_thumbs_scaleMode,rsts_thumbs_imagePosition,rsts_thumbs_controls,rsts_thumbs_slideMaxCount,rsts_thumbs_slideMinSize,rsts_thumbs_slideMaxSize,rsts_thumbs_rowMaxCount,rsts_thumbs_rowMinSize,rsts_thumbs_rowSlideRatio,rsts_thumbs_prevNextSteps,rsts_thumbs_visibleArea,rsts_thumbs_visibleAreaMax';

$GLOBALS['TL_DCA']['tl_module']['fields']['news_metaFields']['eval']['tl_class'] .= ' clr';

$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_content_type'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_content_type'],
	'default' => 'rsts_default',
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(
		'rsts_default',
		'rsts_news',
		'rsts_events',
		'rsts_images',
		'rsts_settings',
	),
	'reference' => &$GLOBALS['TL_LANG']['tl_module']['rsts_content_types'],
	'eval' => array(
		'mandatory' => true,
		'submitOnChange' => true,
		'tl_class' => 'w50',
	),
	'sql' => "varchar(64) NOT NULL default 'rsts_default'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_id'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_id'],
	'exclude' => true,
	'inputType' => 'select',
	'options_callback' => array('MadeYourDay\\RockSolidSlider\\Slider', 'getSliderIds'),
	'eval' => array(
		'includeBlankOption' => true,
		'mandatory' => true,
	),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_import_settings'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_import_settings'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array(
		'submitOnChange' => true,
		'tl_class' => 'w50 m12',
	),
	'sql' => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_import_settings_from'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_import_settings_from'],
	'exclude' => true,
	'inputType' => 'select',
	'options_callback' => array('MadeYourDay\\RockSolidSlider\\Slider', 'getSliderModuleIds'),
	'eval' => array(
		'includeBlankOption' => true,
		'mandatory' => true,
		'tl_class' => 'w50',
	),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_template'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_template'],
	'default' => 'rsts_default',
	'exclude' => true,
	'inputType' => 'select',
	'options_callback' => array('MadeYourDay\\RockSolidSlider\\Slider', 'getSliderTemplates'),
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(32) NOT NULL default 'rsts_default'",
);
// slider type (slide, side-slide, fade or fade-in-out)
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_type'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_type'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(
		'slide' => 'slide',
		'side-slide' => 'side-slide',
		'fade' => 'fade',
		'fade-in-out' => 'fade-in-out',
	),
	'eval' => array('tl_class' => 'w50 clr'),
	'sql' => "varchar(64) NOT NULL default ''",
);
// "x" for horizontal or "y" for vertical
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_direction'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_direction'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(
		'x' => $GLOBALS['TL_LANG']['tl_module']['rsts_direction_x'],
		'y' => $GLOBALS['TL_LANG']['tl_module']['rsts_direction_y'],
	),
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default ''",
);
// if true the slides get shuffled once on initialization
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_random'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_random'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// if true the slider loops infinitely
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_loop'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_loop'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// true, "x" or "y" to center the the slides content
// use the attribute data-rsts-center to set the mode per slide
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_centerContent'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_centerContent'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(
		'false',
		'true',
		'x',
		'y',
	),
	'reference' => &$GLOBALS['TL_LANG']['tl_module']['rsts_centerContent_options'],
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default ''",
);
// slider skin (set this to "none" to disable the default skin)
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_skin'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_skin'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(
		'',
		'default-content',
		'liquid',
		'dark',
		'light',
		'custom',
	),
	'reference' => &$GLOBALS['TL_LANG']['tl_module']['rsts_skin_options'],
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default ''",
);
// set width and height to one of the following values
// - "css": get the size from the applied css (default)
// - a css lenght value: e.g. "100%", "500px", "50em"
// - "auto": get the size from the active slide dimensions at runtime
//   height can be set to auto only if the direction is "x"
// - "normalize": similar to auto but uses the size of the largest slide
// - a proportion: keep a fixed proportion for the slides, e.g. "480x270"
//   this must not set to both dimensions
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_width'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_width'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'w50',
		'decodeEntities' => true,
	),
	'sql' => "varchar(64) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_height'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_height'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'w50',
		'decodeEntities' => true,
	),
	'sql' => "varchar(64) NOT NULL default ''",
);
// number of slides to preload (to the left/right or top/bottom)
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_preloadSlides'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_preloadSlides'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 15, 20, 25, 30, 40, 50, 100),
	'eval' => array('tl_class' => 'w50', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// gap between the slides
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_gapSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_gapSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default '0%'",
);
// duration of the slide animation in milliseconds
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_duration'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_duration'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// false or the duration between slides in milliseconds
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_autoplay'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_autoplay'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// true to autoplay videos
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_videoAutoplay'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_videoAutoplay'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// false or the duration between user interaction and autoplay
// (must be bigger than autoplay)
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_autoplayRestart'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_autoplayRestart'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// displays a progress bar
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_autoplayProgress'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_autoplayProgress'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// true to pause the autoplay on hover
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_pauseAutoplayOnHover'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_pauseAutoplayOnHover'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// navigation type (bullets, numbers, tabs)
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_navType'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_navType'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(
		'bullets' => $GLOBALS['TL_LANG']['tl_module']['rsts_navType_bullets'],
		'numbers' => $GLOBALS['TL_LANG']['tl_module']['rsts_navType_numbers'],
		'tabs' => $GLOBALS['TL_LANG']['tl_module']['rsts_navType_tabs'],
		'thumbs' => $GLOBALS['TL_LANG']['tl_module']['rsts_navType_thumbs'],
		'none' => $GLOBALS['TL_LANG']['tl_module']['rsts_navType_none'],
	),
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default ''",
);
// false to hide the prev and next controls
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_controls'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_controls'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default '1'",
);
// true to show thumbnails inside the prev and next controls
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbControls'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_thumbControls'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// Adds data-rsts-class="rsts-invert-controls" to all slides
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_invertControls'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_invertControls'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// image scale mode (fit, crop, scale)
// only works if width and height are not set to "auto"
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_scaleMode'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_scaleMode'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(
		'fit' => $GLOBALS['TL_LANG']['tl_module']['rsts_scaleMode_fit'],
		'crop' => $GLOBALS['TL_LANG']['tl_module']['rsts_scaleMode_crop'],
		'scale' => $GLOBALS['TL_LANG']['tl_module']['rsts_scaleMode_scale'],
		'none' => $GLOBALS['TL_LANG']['tl_module']['rsts_scaleMode_none'],
	),
	'eval' => array('tl_class' => 'w50 clr'),
	'sql' => "varchar(64) NOT NULL default ''",
);
// image position (center, top, right, bottom, left, top-left, top-right, bottom-left, bottom-right)
// use the attribute data-rsts-position to set it per slide
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_imagePosition'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_imagePosition'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array('center', 'top', 'right', 'bottom', 'left', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
	'reference' => &$GLOBALS['TL_LANG']['tl_module']['rsts_imagePositions'],
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default ''",
);
// URL hash prefix or false to disable deep linking, e.g. "slider-"
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_deepLinkPrefix'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_deepLinkPrefix'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(255) NOT NULL default ''",
);
// true to enable keyboard arrow navigation
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_keyboard'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_keyboard'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default '1'",
);
// true to enable keyboard arrow navigation
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_captions'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_captions'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50 m12'),
	'sql' => "char(1) NOT NULL default '1'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_thumbs'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array(
		'submitOnChange' => true,
		'tl_class' => 'w50 m12',
	),
	'sql' => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_width'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_width'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'clr w50',
		'decodeEntities' => true,
	),
	'sql' => "varchar(64) NOT NULL default '100%'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_height'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_height'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'w50',
		'decodeEntities' => true,
	),
	'sql' => "varchar(64) NOT NULL default '1x1'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_gapSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_gapSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_duration'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_duration'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_scaleMode'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_scaleMode'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(
		'fit' => $GLOBALS['TL_LANG']['tl_module']['rsts_scaleMode_fit'],
		'crop' => $GLOBALS['TL_LANG']['tl_module']['rsts_scaleMode_crop'],
		'scale' => $GLOBALS['TL_LANG']['tl_module']['rsts_scaleMode_scale'],
		'none' => $GLOBALS['TL_LANG']['tl_module']['rsts_scaleMode_none'],
	),
	'eval' => array(
		'tl_class' => 'w50 clr',
		'includeBlankOption' => true,
	),
	'sql' => "varchar(64) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_imagePosition'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_imagePosition'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array('center', 'top', 'right', 'bottom', 'left', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
	'reference' => &$GLOBALS['TL_LANG']['tl_module']['rsts_imagePositions'],
	'eval' => array(
		'tl_class' => 'w50',
		'includeBlankOption' => true,
	),
	'sql' => "varchar(64) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_controls'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_controls'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default '1'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_imgSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['imgSize'],
	'exclude' => true,
	'inputType' => 'imageSize',
	'options_callback' => function() {
		return System::getContainer()->get('contao.image.image_sizes')->getOptionsForUser(BackendUser::getInstance());
	},
	'reference' => &$GLOBALS['TL_LANG']['MSC'],
	'eval' => array(
		'rgxp' => 'natural',
		'includeBlankOption' => true,
		'nospace' => true,
		'helpwizard' => true,
		'tl_class' => 'w50',
	),
	'sql' => "varchar(64) NOT NULL default 'a:3:{i:0;s:2:\"50\";i:1;s:2:\"50\";i:2;s:4:\"crop\";}'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_slideMaxCount'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMaxCount'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'w50 clr', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_prevNextSteps'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_prevNextSteps'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'w50 clr', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_visibleArea'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleArea'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50 clr'),
	'sql' => "double NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_visibleAreaMax'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleAreaMax'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "double NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_slideMinSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMinSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'clr w50'),
	'sql' => "int(10) unsigned NOT NULL default '50'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_slideMaxSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMaxSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '50'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_rowMaxCount'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowMaxCount'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'clr w50', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_rowMinSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowMinSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_thumbs_rowSlideRatio'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowSlideRatio'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(255) NOT NULL default ''",
);
// maximum number of visible slides
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_slideMaxCount'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMaxCount'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'w50', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// number of slides to navigate by clicking prev or next
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_prevNextSteps'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_prevNextSteps'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'w50 clr', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// the size of the area for the visible slide (0 = 0%, 1 = 100%)
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_visibleArea'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleArea'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50 clr'),
	'sql' => "double NOT NULL default '0'",
);
// maximum size of the area for the visible slide in px
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_visibleAreaMax'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleAreaMax'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "double NOT NULL default '0'",
);
// Alignment of the visible area (0 = start, 0.5 = center, 1 = end)
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_visibleAreaAlign'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleAreaAlign'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array('0', '50', '100'),
	'reference' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleAreaAligns'],
	'eval' => array('tl_class' => 'w50'),
	'sql' => "double NOT NULL default '50'",
);
// minimal size of one slide in px
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_slideMinSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMinSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'clr w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// maximum size of one slide in px
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_slideMaxSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMaxSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// maximum number of visible rows
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_rowMaxCount'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowMaxCount'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'clr w50', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// minimal size of one row in px
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_rowMinSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowMinSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// row slide count ratio, e.g. 2x1 or 0.5
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_rowSlideRatio'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowSlideRatio'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(255) NOT NULL default ''",
);
// combine navigation items if multiple slides are visible (default true)
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_combineNavItems'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_combineNavItems'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50 m12'),
	'sql' => "char(1) NOT NULL default '1'",
);
// custom slider skin (rsts_skin gets ignored if this is set)
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_customSkin'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_customSkin'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50 clr'),
	'sql' => "varchar(64) NOT NULL default ''",
);
// prefix for all RockSolid Slider specific css class names
$GLOBALS['TL_DCA']['tl_module']['fields']['rsts_cssPrefix'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_cssPrefix'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default ''",
);
}

namespace  {
/**
 * Add palettes to tl_module
 */
// palettes 
$GLOBALS['TL_DCA']['tl_module']['palettes']['exam_create'] = '{title_legend},name,type;{redirect_legend},jumpTo';
$GLOBALS['TL_DCA']['tl_module']['palettes']['exam_preparation_list'] = '{title_legend},name,type;{redirect_legend},jumpTo';
$GLOBALS['TL_DCA']['tl_module']['palettes']['lecturer_create'] = '{title_legend},name,type;{redirect_legend},jumpTo';



	//$GLOBALS['TL_DCA']['tl_module']['fields']['editable'] = array
		//			(
//			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['editable'],
			//'exclude'                 => true,
			//'inputType'               => 'checkboxWizard',
			//'options_callback'        => array('tl_exam', 'getEditableExamProperties'),
			//'eval'                    => array('multiple'=>true),
			//'sql'                     => "blob NULL"
		//);

	
	
	
	
	/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Andreas Deitmer <andreas.deitmer@bliz.thm.de>
 */
	
class tl_exam extends Backend
{
		
/**
	 * Return all editable fields of table tl_member
	 *
	 * @return array
	 */
	public function getEditableExamProperties()
	{
		$return = array();

		System::loadLanguageFile('tl_exam');
		$this->loadDataContainer('tl_exam');

		foreach ($GLOBALS['TL_DCA']['tl_exam']['fields'] as $k=>$v)
		{
			if($k =='tstamp' || $k =='id') {
				continue; 
			}
			$return[$k] = $GLOBALS['TL_DCA']['tl_exam']['fields'][$k]['label'][0];
			
		}

		return $return;
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

$GLOBALS['TL_DCA']['tl_module']['metapalettes']['bs_grid'] = [
    'title'     => ['name', 'headline', 'type'],
    'config'    => ['bs_grid', 'bs_gridModules'],
    'template'  => [':hide', 'customTpl'],
    'protected' => [':hide', 'protected'],
    'expert'    => [':hide', 'guests', 'cssID'],
];

$GLOBALS['TL_DCA']['tl_module']['fields']['bs_grid'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_module']['bs_grid'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => ['contao_bootstrap.grid.listeners.dca.module', 'getGridOptions'],
    'reference'        => &$GLOBALS['TL_LANG']['tl_content'],
    'eval'             => [
        'mandatory'          => true,
        'includeBlankOption' => true,
        'chosen'             => true,
        'tl_class'           => 'w50',
    ],
    'sql'              => "int(10) unsigned NOT NULL default '0'",
    'relation'         => ['type' => 'hasOne', 'load' => 'lazy'],
    'foreignKey'       => 'tl_bs_grid.title',
];

$GLOBALS['TL_DCA']['tl_module']['fields']['bs_gridModules'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['bs_gridModules'],
    'exclude'   => true,
    'inputType' => 'multiColumnWizard',
    'eval'      => [
        'tl_class'     => 'clr',
        'columnFields' => [
            'module'   => [
                'label'            => &$GLOBALS['TL_LANG']['tl_module']['bs_gridModule'],
                'inputType'        => 'select',
                'options_callback' => ['contao_bootstrap.grid.listeners.dca.module', 'getAllModules'],
                'reference'        => $GLOBALS['TL_LANG']['tl_module']['bs_gridModule'],
                'eval'             => [
                    'style'              => 'width: 500px',
                    'includeBlankOption' => true,
                    'chosen'             => true,
                ],
            ],
            'inactive' => [
                'label'     => &$GLOBALS['TL_LANG']['tl_module']['bs_gridModules_inactive'],
                'inputType' => 'checkbox',
                'eval'      => ['style' => 'width: 20px'],
            ],
        ],
    ],
    'sql'       => 'blob NULL',
];
}

namespace  {
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

/**
 * Add palette to tl_content
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['mateNavbar'] = '{title_legend},name,headline,type;levelOffset,showLevel,hardLimit,showProtected,showHidden;{mateNavbarSettings},mateNavbarType,mateShowLogo,mateShowSearch,mateShowMobileMenu,mateIncludeHeadroom,mateNavbarStuck;{expert_legend:hide},cssID,space';

$GLOBALS['TL_DCA']['tl_module']['palettes']['mateModal'] = '{title_legend},name,type;{modal_link_legend},mateModal_linkText,mateModal_linkClass;{modal_headline_legend},headline;{modal_text_legend},mateModal_text,mateModal_class;{template_legend:hide},mateModal_customTpl;{expert_legend:hide},cssID,space';

/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['mateNavbarType'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['mateNavbarType'],
    'exclude' => true,
    'eval' => array(
        'mandatory' => true,
        'multiple' => false,
        'maxlength' => 64,
        'tl_class' => 'wizard'
    ),
    'inputType' => 'select',
    'options' => array('type1','type2','type5'),
    'reference' => &$GLOBALS['TL_LANG']['tl_module']['mate_navbar'],
    'sql' => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mateShowLogo'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['mateShowLogo'],
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50 clr'),
    'sql'       =>  "int(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mateShowSearch'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['mateShowSearch'],
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50'),
    'sql'       =>  "int(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mateShowMobileMenu'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['mateShowMobileMenu'],
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50'),
    'sql'       =>  "int(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mateIncludeHeadroom'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['mateIncludeHeadroom'],
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50'),
    'sql'       =>  "int(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mateNavbarStuck'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['mateNavbarStuck'],
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50'),
    'sql'       =>  "int(1) NOT NULL default '1'"
);

/* Modal */

$GLOBALS['TL_DCA']['tl_module']['fields']['mateModal_linkText'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['mateModal_linkText'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class'=>'w50'),
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mateModal_linkClass'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['mateModal_linkClass'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class'=>'w50'),
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mateModal_text'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['mateModal_text'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'textarea',
    'eval' => array('rte'=>'tinyMCE'),
    'sql' => "TEXT NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mateModal_customTpl'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['mateModal_customTpl'],
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => array('tl_module_mate', 'getModalTemplates'),
    'eval' => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
    'sql' => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mateModal_class'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['mateModal_class'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class'=>'w50'),
    'sql' => "varchar(255) NOT NULL default ''"
);

class tl_module_mate extends Backend {
    /**
     * Return all content element templates as array
     *
     * @param DataContainer $dc
     *
     * @return array
     */

    public function getModalTemplates(DataContainer $dc)
    {
        return $this->getTemplateGroup('mod_mate_modal');
    }
}
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['calendar']    = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_startDay,cal_noSpan;{redirect_legend},jumpTo;{template_legend:hide},cal_ctemplate,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist']   = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_format,cal_noSpan,cal_order,cal_readerModule,cal_limit,perPage,cal_ignoreDynamic,cal_hideRunning;{template_legend:hide},cal_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader'] = '{title_legend},name,headline,type;{config_legend},cal_calendar;{template_legend:hide},cal_template,customTpl;{image_legend},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventmenu']   = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_format,cal_noSpan,cal_order,cal_startDay,cal_showQuantity;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';

// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_calendar'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_calendar'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options_callback'        => array('tl_module_calendar', 'getCalendars'),
	'eval'                    => array('mandatory'=>true, 'multiple'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_noSpan'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_noSpan'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_hideRunning'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_hideRunning'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_startDay'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_startDay'],
	'default'                 => 1,
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(0, 1, 2, 3, 4, 5, 6),
	'reference'               => &$GLOBALS['TL_LANG']['DAYS'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_format'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_format'],
	'default'                 => 'cal_month',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_calendar', 'getFormats'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('tl_class'=>'w50'),
	'wizard' => array
	(
		array('tl_module_calendar', 'hideStartDay')
	),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_ignoreDynamic'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_ignoreDynamic'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_order'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_order'],
	'default'                 => 'ascending',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('ascending', 'descending'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_readerModule'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_readerModule'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_calendar', 'getReaderModules'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_limit'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_limit'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_template'],
	'default'                 => 'event_full',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_calendar', 'getEventTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_ctemplate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_ctemplate'],
	'default'                 => 'cal_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_calendar', 'getCalendarTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_showQuantity'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_showQuantity'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$bundles = System::getContainer()->getParameter('kernel.bundles');

// Add the comments template drop-down menu
if (isset($bundles['ContaoCommentsBundle']))
{
	$GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader'] = str_replace('{protected_legend:hide}', '{comment_legend:hide},com_template;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader']);
}

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_module_calendar extends Backend
{
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

	/**
	 * Get all calendars and return them as array
	 *
	 * @return array
	 */
	public function getCalendars()
	{
		if (!$this->User->isAdmin && !is_array($this->User->calendars))
		{
			return array();
		}

		$arrCalendars = array();
		$objCalendars = $this->Database->execute("SELECT id, title FROM tl_calendar ORDER BY title");

		while ($objCalendars->next())
		{
			if ($this->User->hasAccess($objCalendars->id, 'calendars'))
			{
				$arrCalendars[$objCalendars->id] = $objCalendars->title;
			}
		}

		return $arrCalendars;
	}

	/**
	 * Get all event reader modules and return them as array
	 *
	 * @return array
	 */
	public function getReaderModules()
	{
		$arrModules = array();
		$objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='eventreader' ORDER BY t.name, m.name");

		while ($objModules->next())
		{
			$arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
		}

		return $arrModules;
	}

	/**
	 * Return the calendar formats depending on the module type
	 *
	 * @param DataContainer $dc
	 *
	 * @return array
	 */
	public function getFormats(DataContainer $dc)
	{
		if ($dc->activeRecord->type == 'eventmenu')
		{
			return array('cal_day', 'cal_month', 'cal_year');
		}

		return array
		(
			'cal_list'     => array('cal_day', 'cal_month', 'cal_year', 'cal_all'),
			'cal_upcoming' => array('next_7', 'next_14', 'next_30', 'next_90', 'next_180', 'next_365', 'next_two', 'next_cur_month', 'next_cur_year', 'next_next_month', 'next_next_year', 'next_all'),
			'cal_past'     => array('past_7', 'past_14', 'past_30', 'past_90', 'past_180', 'past_365', 'past_two', 'past_cur_month', 'past_cur_year', 'past_prev_month', 'past_prev_year', 'past_all')
		);
	}

	/**
	 * Hide the start day drop-down if not applicable
	 *
	 * @return string
	 */
	public function hideStartDay()
	{
		return '
  <script>
    var enableStartDay = function() {
      var e1 = $("ctrl_cal_startDay").getParent("div");
      var e2 = $("ctrl_cal_order").getParent("div");
      if ($("ctrl_cal_format").value == "cal_day") {
        e1.setStyle("display", "block");
        e2.setStyle("display", "none");
	  } else {
        e1.setStyle("display", "none");
        e2.setStyle("display", "block");
	  }
    };
    window.addEvent("domready", function() {
      if ($("ctrl_cal_startDay")) {
        enableStartDay();
        $("ctrl_cal_format").addEvent("change", enableStartDay);
      }
    });
  </script>';
	}

	/**
	 * Return all event templates as array
	 *
	 * @return array
	 */
	public function getEventTemplates()
	{
		return $this->getTemplateGroup('event_');
	}

	/**
	 * Return all calendar templates as array
	 *
	 * @return array
	 */
	public function getCalendarTemplates()
	{
		return $this->getTemplateGroup('cal_');
	}
}
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

System::loadLanguageFile('tl_content');

// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['comments'] = '{title_legend},name,headline,type;{comment_legend},com_order,perPage,com_moderate,com_bbcode,com_protected,com_requireLogin,com_disableCaptcha;{template_legend:hide},com_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';

// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['com_order'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_order'],
	'default'                 => 'ascending',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('ascending', 'descending'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['com_moderate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_moderate'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['com_bbcode'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_bbcode'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['com_requireLogin'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_requireLogin'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['com_disableCaptcha'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_disableCaptcha'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['com_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_template'],
	'default'                 => 'com_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_comments', 'getCommentTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_module_comments extends Backend
{
	/**
	 * Return all navigation templates as array
	 *
	 * @return array
	 */
	public function getCommentTemplates()
	{
		return $this->getTemplateGroup('com_');
	}
}
}
